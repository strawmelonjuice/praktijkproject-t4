<?php



class userMan
{
    public function __construct()
    {
        session_start();
    }
    public static function GetUserByUID(int $uid): array
    {
        foreach (config["accounts"] as $account) {
            if ($account[2] === $uid) {
                return $account;
            }
        }
        die("ERROR: USER NOT FOUND");
    }

    public static function EnsureUserIsLoggedIn(): void
    {
        $loggedIn = $_SESSION["loggedIn"] && isset($_SESSION["uid"]);
        if (!$loggedIn) {
            header("location: /login/#not_logged_in_yet");
            die();
        } else {
            global $username;
            $username = self::GetUserByUID($_SESSION["uid"])[0];
        }
    }
}
