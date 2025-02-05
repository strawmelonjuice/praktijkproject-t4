<?php
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/database.php";
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";

$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $conn;
    databaseGetConn();
    $dinner_id = $_POST['dinner_id'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $new = $_POST['new_dinner'];

    $sql = "UPDATE diner SET location = ?, description = ?, start = ?, end = ? WHERE dinner_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $location, $description, $start, $end, $dinner_id);

    if ($stmt->execute()) {
        header("Location: /home?justedited=true&new=".$new);
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
