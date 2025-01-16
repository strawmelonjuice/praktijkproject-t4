window.addEventListener("DOMContentLoaded", (_) => {
    switch (window.location.hash) {
        case "#incorrect_password": {
            document.getElementById("error").innerHTML = "Onjuist wachtwoord";
            document.getElementById("error").classList.remove("hidden");
        }
            break;
        case "#incorrect_username": {
            document.getElementById("error").innerHTML = "Onjuiste gebruikersnaam";
            document.getElementById("error").classList.remove("hidden");
        }
            break;
        case "#not_logged_in_yet": {
            document.getElementById("error").innerHTML =
                "U dient in te loggen om deze pagina te bekijken.";
            document.getElementById("error").classList =
                "text-orange-600 text-lg border-2 border-sky-800 bg-neutral-200 rounded-lg text-center mb-3";
        }
            break;
        case "#logged_out": {
            document.getElementById("error").innerHTML =
                "U bent succesvol uitgelogd!";
            document.getElementById("error").classList =
                "text-green-600 text-lg border-2 border-sky-900 bg-neutral-500 rounded-lg text-center mb-3";
        }
            break;
        default: {
            document.getElementById("error").classList.add("hidden");
            console.info("No errors yet.");
        }
    }
});
