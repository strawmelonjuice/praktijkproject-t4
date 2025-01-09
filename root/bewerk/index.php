<?php
$edited_id = $_GET["dinnerid"];
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/templates.php";

$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();
headerTemplate("Bewerken");
?>
    <main>
    <div>
        <?php
        global $conn;
        databaseGetConn();
        $sql = "SELECT * FROM diner WHERE dinner_id = '$edited_id'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo '<form action="/bewerk/logic.php" method="post" class="p-2 m-2">';
            echo '<div class="border p-2 m-2">';
            echo '<input type="hidden" name="dinner_id" value="' . $row['dinner_id'] . '">';
            echo '<label for="name">Locatie: </label><br>';
            echo '<input class="border-gray-700 p-1 border w-full" type="text" id="location" name="location" value="' . $row['location'] . '"><br>';
            echo '<label for="description">Omschrijving:</label><br>';
            echo '<textarea id="description" name="description" class="border-gray-700 p-1 border-2 w-full">' . $row['description'] . '</textarea><br>';
            echo '<fieldset class="border border-solid border-gray-300 p-3">';
            echo '<label for="description">Start:</label>';
            echo '<input type="datetime-local" id="start" name="start" value="' . $row['start'] . '"><br>';
            echo '<label for="description">Eind:</label>';
            echo '<input type="datetime-local" id="end" name="end" value="' . $row['end'] . '"><br>';
            echo '</fieldset>';
            echo '</div>';
            echo '<div class="text-right">';
            echo '<input type="submit" value="Opslaan" class="border border-solid border-gray-300 p-3 m-3">';
            echo '</div>';
            echo '</form>';
        } else {
            echo "No record found.";
        }

        ?>
    </div>
<?php footerTemplate();
?>