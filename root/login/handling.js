window.addEventListener("DOMContentLoaded", (_) => {
  switch (window.location.hash) {
    case "#incorrect_password":
      {
        document.getElementById("error").innerHTML = "Onjuist wachtwoord";
        document.getElementById("error").classList.remove("hidden");
      }
      break;
    case "#incorrect_username":
      {
        document.getElementById("error").innerHTML = "Onjuiste gebruikersnaam";
        document.getElementById("error").classList.remove("hidden");
      }
      break;
    default: {
      document.getElementById("error").classList.add("hidden");
      console.info("No errors yet.");
    }
  }
});
