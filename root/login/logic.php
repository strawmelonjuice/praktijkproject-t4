<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";
$userManagement = new userMan();

$entered_username = $_POST["username"];
$entered_password = $_POST["password"];

$account = $userManagement->getUserByUsername($entered_username);
if ($account["found"]) {
    if ($account["password"] === $entered_password) {
        // correct password
        $_SESSION["studentNumber"] = $account["student_nr"];
        $_SESSION["loggedIn"] = true;
        header("location: /inside");
        exit();
    } else {
        header("location: /login#incorrect_password");
        exit();
    }
}
header("location: /login#incorrect_username");
