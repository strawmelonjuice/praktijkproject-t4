<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/templates.php";

$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();
headerTemplate("Reserveringenbestand");
?>
<main>
<h1>Je gebruikersnaam is:<code>
    <?php
    global $username;
    echo $username;
    ?></code>
</h1>
<div>
    
</div>
<?php footerTemplate();
?>
