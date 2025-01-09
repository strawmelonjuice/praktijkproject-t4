<?php

/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";
$userManagement = new userMan();

$entered_username = $_POST["username"];
$entered_password = $_POST["password"];

$account = $userManagement->getUserByUsername($entered_username);
if ($account["found"]) {
    // Gewoonlijk zou ik de hash opslaan in de database, maar voor deze opdracht zijn de wachtwoorden plaintext opgeslagen.
    if (password_verify($entered_password, password_hash($account["password"], PASSWORD_BCRYPT))) {
        // correct password
        $_SESSION["studentNumber"] = $account["student_nr"];
        $_SESSION["loggedIn"] = true;
        header("location: /home");
    } else {
        header("location: /login#incorrect_password");
    }
    exit();
}
header("location: /login#incorrect_username");
