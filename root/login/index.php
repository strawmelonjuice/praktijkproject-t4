<?php
// Pagina waarop ingelogd moet worden.
require_once $_SERVER["DOCUMENT_ROOT"] . "/../include/functions/templates.php";
headerTemplate("Log in", ["/login/handling.js"]);
?>
<main class="grid place-items-center h-screen leading-snug ring-offset-rose-950 text-slate">
	<form action="/login/logic.php" method="post" class="self-center w-5/12 ring-offset-rose-950 text-slate-600">

		<div class="hidden text-red-600 text-lg border-2 border-sky-900 bg-neutral-500 rounded-lg text-center mb-3" id="error"></div>

		<div class="mb-4">
			<label class="block mb-2 text-sm font-semibold " for="username">Gebruikersnaam</label>
			<input class="py-2 px-4 w-full rounded-lg border focus:ring-blue-500 form-input text-slate-600" name="username" id="username" placeholder="mijngebruikersnaam" required type="text" />
		</div>
		<div class="mb-6">
			<label class="block mb-2 text-sm font-semibold " for="password">Wachtwoord
				<input class="py-2 px-4 w-full rounded-lg border focus:ring-blue-500 form-input text-slate-600" name="password" id="password" placeholder="••••••••••••" required type="password" />
				<span class="mt-1 text-xs ">Indien u uw wachtwoord bent vergeten, neem dan contact op met de ICT-afdeling.</span>
			</label>

		</div>
		<button class="grid content-center place-items-center p-4 py-2 px-4 w-full bg-orange-200 rounded-lg border-amber-600 border-opacity-100 ring-rose-300 dark:text-orange-200 dark:bg-yellow-700 focus:ring-2 focus:ring-rose-500 focus:ring-opacity-50 focus:outline-none text-brown-800 dark:hover:bg-sky-900 hover:bg-sky-600" id="submitbutton" type="submit">
			Log in
		</button>



	</form>
</main>
<?php footerTemplate(); ?>