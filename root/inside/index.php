<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/users.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/templates.php";

$userManagement = new userMan();
$userManagement->EnsureUserIsLoggedIn();
headerTemplate("Vrijwilligersbestand");
?>
<main>
<h1>Je gebruikersnaam is:<code>
    <?php
    global $username;
    echo $username;
    ?></code>
</h1>
<div>
    <table width="697" cellpadding="7" cellspacing="0">
	<col width="116"/>
	<col width="122"/>
	<col width="201"/>
	<col width="200"/>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			Naam</p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			Telefoonnummer</p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			E-mailadres</p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			Werkzaamheden</p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Eliene Holla</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-44662246</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">ElieneHolla@outlook.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging honden</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2; margin-bottom: 0cm">
			<font size="2" style="font-size: 9pt">Philip Boekholt</font></p>
			<p lang="nl-NL" align="left" style="orphans: 2; widows: 2"><br/>

			</p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-82528319</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">PhilipBoekholt@outlook.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging katten</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Selami Meulenbroeks</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-56109212</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">SelamiMeulenbroeks@gmail.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging honden</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Semira Trines</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-89084537</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">SemiraTrines@yahoo.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging katten, gastgezin
			kat</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Christian Kroos</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-28868799</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">ChristianKroos@hotmail.nl</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">gastgezin kat</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Doede Smeulders</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-86217996</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">DoedeSmeulders@gmail.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging honden, gastgezin
			hond</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Siebren Breukers</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-94192111</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">SiebrenBreukers@yahoo.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">gastgezin hond</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Jouke Walhout</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-93561432</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">JoukeWalhout@gmail.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging katten</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Hossein Waterman</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-44303878</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">HosseinWaterman@outlook.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">gastgezin kat</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Lilia van Antwerpen</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-99685607</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">LiliavanAntwerpen@hotmail.nl</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging honden,
			verzorging katten</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Allal Poelsma</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt"><br/>
    06-38560634</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">AllalPoelsma@ziggo.nl</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">gastgezin hond</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Bouke Haalboom</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-87883016</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">BoukeHaalboom@yahoo.com</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">gastgezin kat</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Dio Bramer</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-79615938</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">DioBramer@ziggo.nl</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging katten, gastgezin
			kat</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Linda Butter</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-28317272</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">LindaButter@ziggo.nl</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">gastgezin hond</font></p>
		</td>
	</tr>
	<tr valign="top">
		<td width="116" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">Jorian de Bot</font></p>
		</td>
		<td width="122" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">06-88546197</font></p>
		</td>
		<td width="201" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">JoriandeBot@ziggo.nl</font></p>
		</td>
		<td width="200" style="border: 1px solid #000000; padding: 0cm 0.19cm"><p lang="nl-NL" align="left" style="orphans: 2; widows: 2">
			<font size="2" style="font-size: 9pt">verzorging honden, gastgezin
			hond</font></p>
		</td>
	</tr>
    </table>
</div>
<?php footerTemplate();
?>
