window.addEventListener("DOMContentLoaded", (_) =>
{
  const notificator = document.getElementById("notes");
  switch (window.location.hash)
  {
    case "#created":
      {
        notificator.classList.remove("hidden");
        notificator.innerHTML = "Nieuwe reservering succesvol geplaatst! 🎉";
      }
      break;
    case "#updated":
      {
        notificator.classList.remove("hidden");
        notificator.innerHTML = "Reservering succesvol bijgewerkt! 🎉";
      }
      break;
    default: {
      notificator.classList.add("hidden");
      console.info("No notes 💯");
    }
  }
});
