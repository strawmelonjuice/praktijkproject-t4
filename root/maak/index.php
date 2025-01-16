<?php
// Maak een nieuwe afspraak, en stuur de gebruiker dan meteen door naar bewerker.
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/database.php";
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";

$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();

global $conn;
databaseGetConn();
$sql = "INSERT INTO diner (location, description, start, end) VALUES (NULL, NULL, NULL, NULL);";
$result = $conn->query($sql);
// Return autoincrement werkte niet goed
$sql = "SELECT * FROM diner WHERE location IS NULL AND description IS NULL AND start IS NULL AND end IS NULL ORDER BY dinner_id DESC LIMIT 1;";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "U wordt nu doorgestuurd naar: /bewerk/?dinnerid=" . $row["dinner_id"];
    header("Location: /bewerk/?dinnerid=" . $row["dinner_id"] . "&newdinner=true");
} else {
    die("Er was een issue bij het aanmaken van deze reservering.");
}
