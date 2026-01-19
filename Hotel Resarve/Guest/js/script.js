function goPage(page) {
  window.location.href = page;
}

function toggleMode() {
  document.body.classList.toggle("dark");
}

function setActive(button) {
  var allButtons = document.querySelectorAll(".sidebar button");
  allButtons.forEach(btn => btn.classList.remove("active"));
  button.classList.add("active");
}
