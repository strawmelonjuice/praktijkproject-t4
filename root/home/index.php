<?php
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";
/** @noinspection PhpIncludeInspection */
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/templates.php";

$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();
headerTemplate("Reserveringenbestand");
?>
    <main>
    <div>
        <div class="text-right">
            <a href="/maak" class="border border-solid border-gray-300 p-3 m-3 inline-block w-fit">Nieuw</a>
        </div>
        <?php
        global $conn;
        databaseGetConn();
        $sql = "SELECT * FROM diner";

        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                echo "<div class='border p-2 m-2'>";
                echo "<h3 class='text-xl font-bold'> 📌 " . $row["location"] . " <a class='text-xs text-gray-600 m-1' href='/bewerk/?dinnerid=" . $row["dinner_id"] . "'>Bewerk</a><a class='text-xs text-gray-600 m-1' href='/verwijder/?dinnerid=" . $row["dinner_id"] . "'>Verwijder</a></h3>";
                echo "<p class='text-[8px] inline-block float-right text-gray-600 w-fit p-2'>ID: " . $row["dinner_id"] . "</p>";
                echo "<div class='border p-2 m-2 bg-slate-200 bg-opacity-25'>";
                echo "<h4 class='text-lg font-bold'>Beschrijving</h4>" . $row["description"];
                echo "</div>";
                echo "<p><span class='font-bold'>🕑 Start:</span> " . $row["start"] . "</p>";
                echo "<p class='w-fit block'><span class='font-bold '>🕑 Eind:</span> " . $row["end"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "Geen dinners gepland.";
        }
        ?>
    </div>
<?php footerTemplate();
?>