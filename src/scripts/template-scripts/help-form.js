const wpcf7Elm = document.querySelector(".wpcf7");
const notificationEl = document.getElementById("notification");
const closeNotificationBtn = document.getElementById("js-close-notification");

wpcf7Elm.addEventListener("wpcf7mailsent", getNotification, false);

function getNotification() {
  notificationEl.classList.add("active");
  setTimeout(() => {
    notificationEl.classList.remove("active");
  }, 3000);
  closeNotificationBtn.addEventListener("click", closeNotification);
}

function closeNotification() {
  notificationEl.classList.remove("active");
  closeNotificationBtn.removeEventListener("click", closeNotification);
}
