<?php
$d_id = $_GET["dinnerid"];
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/templates.php";

$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();

global $conn;
databaseGetConn();
$sql = "DELETE FROM diner WHERE dinner_id = '$d_id'";
$result = $conn->query($sql);
header("Location: /home");
