const scrollBtn = document.getElementById("scrollBtn");
const factBtn = document.getElementById("factBtn");
const funMessage = document.getElementById("funMessage");

scrollBtn.addEventListener("click", () => {
  document.getElementById("content").scrollIntoView({
    behavior: "smooth"
  });
});

factBtn.addEventListener("click", () => {
  funMessage.textContent =
    "Jazzghost is one of the most creative gaming content creators in Brazil!";
});