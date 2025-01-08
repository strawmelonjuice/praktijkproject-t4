<?php
function headerTemplate($title, $scripts = [])
{
    ?>
    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link href="/styles.css" rel="stylesheet" />
            <title><?php echo $title; ?>&ensp;&ndash;&ensp;DierenZiekenHuis Den Bosch</title>
            <?php foreach ($scripts as $script) {
                echo "<script src='$script'></script>";
            } ?>
        </head>
        <body>
            <nav class="top-0 overflow-hidden m-0 h-14 bg-dthb-1">
                <!--<span id="side-menu-opener">☰</span>-->
                <div class="bg-dthb-2 p-[6px] top-0  absolute left-[5vw] max-w-[20VW] w-52 h-12 mt-[2px] rounded-l-full rounded-r-full overflow-clip">
                    <img src="https://mportaal.kw1c.nl/img/KW1C_App$Images$kw1c_logo_60x60.png?638718728506942381" class="max-w-[8vw] max-h-10 inline-block p-1" />
                    <span class="w-40 inline">KW1C Horeca</span>
                </div> <?php navLink(name: "Home", url: "/"); ?>
                <?php navLink(name: "Reserveringen 🔒", url: "/inside"); ?>
            </nav>

            <!-- <nav id="side-nav">
                    <span id="side-menu-closer"><button>&times;</button></span>
                                <a href="./Pages/toekomst.html">Onze toekomstvisie</a>

                    <a href="">Afstand doen van uw huisdier</a>
                    <a href="">Wordt een vrijwilliger</a>
                </nav> -->
            <?php
}

function footerTemplate()
{
    echo <<<EOT
<footer>
    <p>&copy; 2021 DierenZiekenHuis Den Bosch</p>
</footer>
</body>
</html>

EOT;
}

function navLink($name, $url)
{
    $current = "";
    if ($url === $_SERVER["REQUEST_URI"]) {
        $current = "current";
    }
    ?>
            <a href="<?php echo $url; ?>" class="hover:bg-dthb-2 hover:text-black m-0 float-right text-dthb-2 bg-dthb-1 text-center justify-center text-sm align-middle py-3.5 px-4 rounded-0 p-0 h-full <?php echo $current; ?>"><?php echo $name; ?></a>
            <?php
}
