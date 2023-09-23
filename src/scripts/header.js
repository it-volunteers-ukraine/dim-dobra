const openMenuButton = document.getElementById("js-open-menu");
const closeMenuButton = document.getElementById("js-close-menu");
const menu = document.getElementById("js-menu");

openMenuButton.addEventListener("click", showMenu);

function showMenu() {
  menu.classList.add("is-open");
  closeMenuButton.addEventListener("click", hideMenu);
  menu.addEventListener("click", closeByBgdClick);
}

function hideMenu() {
  menu.classList.remove("is-open");
  closeMenuButton.removeEventListener("click", hideMenu);
  menu.removeEventListener("click", closeByBgdClick);
}

function closeByBgdClick(e) {
  if (e.target === menu) {
    hideMenu();
  }
}
