<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/db_config.php";
// Ik zou de conn returnen, maar ik volg nu het voorbeeld, conn global
function databaseGetConn($database): void
{
    global $conn;

    $host = $db_host;
    $username = $db_username;
    $password = $db_password;

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        exit("Verbinding met database mislukt: " . $conn->connect_error);
    }
}

function executeQuery($sql): ?array
{
    global $conn;
    //    exec query
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //        To array
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    } else {
        echo "Geen resultaten gevonden";
        return null;
    }
}


function executeInsertQuery($query)
{
    global $conn;
    //    exec query

    $result = $conn->query($query);
    return $conn->affected_rows;
}

function executeUpdateQuery($sql)
{
    global $conn;
    //exec query
    if ($conn->query($sql) === TRUE) {
        return $conn->affected_rows;
    } else {
        echo "Fout bij het bewerken van het record: " . $conn->error;
        return null;
    }
}