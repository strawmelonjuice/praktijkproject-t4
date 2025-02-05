<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


function headerTemplate($title, $scripts = []): void
{
    $lock = "🔒";
    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] && isset($_SESSION["studentNumber"])) {
        $lock = "🔓";
    }
    ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8"/>
        <meta name="theme-color" content="#0085ca"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="/styles.css" rel="stylesheet"/>
        <title><?php echo $title; ?>&ensp;&ndash;&ensp;KW1C Horeca</title>
        <?php foreach ($scripts as $script) {
            echo "<script src='$script'></script>";
        } ?>
    </head>

    <body>
    <nav class="top-0 overflow-hidden m-0 h-14 bg-dthb-1">
        <!--<span id="side-menu-opener">☰</span>-->
        <div class="bg-dthb-2 p-[6px] top-0  absolute left-[5vw] max-w-[20VW] w-fit md:w-52 h-12 mt-[2px] rounded-l-full rounded-r-full overflow-clip">
            <img src="/logo.png" class="max-w-[8vw] max-h-10 inline-block p-1" alt=""/>
            <span class="w-0 md:w-40 hidden md:inline">KW1C Horeca</span>
        </div> <?php navLink(name: "Home", url: "/");
        navLink(name: "Reserveringen $lock", url: "/home");
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] && isset($_SESSION["studentNumber"])) {
            navLink(name: "Uitloggen", url: "/logout.php");
        } else {
            navLink(name: "Inloggen", url: "/login");
        }
        ?>
    </nav>


    <?php
}

function footerTemplate(): void
{
    echo <<<EOT
    <div class="h-10"></div>
<footer class="bg-dthb-1 text-dthb-2 text-center p-2 fixed bottom-0 w-full">	
    <p>&copy; 2025 KW1C Horeca</p>
</footer>
</body>
</html>

EOT;
}

function navLink($name, $url): void
{
    $current = "";
    if ($url === $_SERVER["REQUEST_URI"]) {
        $current = "bg-red-400 text-black";
    }
    ?>
    <a href="<?php echo $url; ?>"
       class="hover:bg-dthb-2 hover:text-black m-0 float-right text-dthb-2 bg-dthb-1 text-center justify-center text-sm align-middle py-3.5 px-4 rounded-0 p-0 h-full <?php echo $current; ?>"><?php echo $name; ?></a>
    <?php
}
