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
        $viewArchive = "WHERE `end` > NOW()";
        if (isset($_GET["viewArchive"]) && $_GET["viewArchive"] == "true") {
            $viewArchive = "";
        }
        $sql = "SELECT * FROM diner ". $viewArchive . " ORDER BY `start` DESC;";

        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $date_start = date_format(date_create($row["start"]),"d-m-Y H:i");;
                $date_end = date_format(date_create($row["end"]),"d-m-Y H:i");;

                echo "<div class='border p-2 m-2'>";
                echo "<h3 class='text-xl font-bold'> 📌 " . $row["location"] . " <a class='text-xs text-gray-600 m-1' href='/bewerk/?dinnerid=" . $row["dinner_id"] . "'>Bewerk</a><a class='text-xs text-gray-600 m-1' href='/verwijder/?dinnerid=" . $row["dinner_id"] . "'>Verwijder</a></h3>";
                echo "<p class='text-[8px] inline-block float-right text-gray-600 w-fit p-2'>ID: " . $row["dinner_id"] . "</p>";
                echo "<div class='border p-2 m-2 bg-slate-200 bg-opacity-25'>";
                echo "<h4 class='text-lg font-bold'>Beschrijving</h4>" . $row["description"];
                echo "</div>";
                echo "<p><span class='font-bold'>🕑 Start:</span> " . $date_start . "</p>";
                echo "<p class='w-fit block'><span class='font-bold '>🕑 Eind:</span> " . $date_end . "</p>";
                echo "</div>";
            }
        } else {
            echo "Geen dinners gepland.";
        }
        if (isset($_GET["viewArchive"]) && $_GET["viewArchive"] == "true") {
            echo "<p class=' p-3 m-3 text-center'>Gearchiveerde afspraken worden getoond. <a href='/home/?viewArchive=false' class='text-blue-400 border border-solid border-gray-300 p-2 m-2'>Uitschakelen</a></p>";
        } else {
            echo "<p class=' p-3 m-3 text-center'>Oudere afspraken zijn gearchiveerd. <a href='/home/?viewArchive=true' class='text-blue-400 border border-solid border-gray-300 p-2 m-2'>Met archief tonen</a></p>";
        }
        ?>
    </div>
<?php footerTemplate();
?>