<?php

/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/database.php";

class userMan
{
    public function __construct()
    {

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

    }

    public static function getUserByUsername($username)
    {
        global $conn;
        databaseGetConn();

        $username = $conn->real_escape_string($username);
        $sql = "SELECT * FROM user WHERE user_name = '$username'";

        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $user["found"] = true;
            return $user;
        } else {
            return ["found" => false];
        }
    }

    public static function GetUserByStudentNumberOrDie(int $studentNumber): array
    {
        $user = self::GetUserByStudentNumber($studentNumber);
        if (!$user["found"]) {
            die("ERROR: USER NOT FOUND");
        }
        $user["found"] = null;
        return $user;
    }

    public static function GetUserByStudentNumber(int $studentNumber): array
    {
        global $conn;
        databaseGetConn();

        $sql = "SELECT * FROM user WHERE student_nr = '$studentNumber'";

        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $user["found"] = true;
            return $user;
        } else {
            return ["found" => false];
        }
    }

    public static function EnsureUserIsLoggedIn(): void
    {
        $loggedIn = $_SESSION["loggedIn"] && isset($_SESSION["studentNumber"]);
        if (!$loggedIn) {
            header("location: /login/#not_logged_in_yet");
            die();
        } else {
            global $username;
            $username = self::GetUserByStudentNumber($_SESSION["studentNumber"])["user_name"];
        }
    }
}
