const wpcf7Elm = document.querySelector(".wpcf7");
const notificationEl = document.getElementById("notification");
const closeNotificationBtn = document.getElementById("js-close-notification");
const telInputEl = document.getElementById("contactPhone");

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

telInputEl.addEventListener("blur", checkNumber);
telInputEl.addEventListener("input", checkNumber);

function checkNumber() {
  const value = telInputEl.value;
  const pattern =
    /^[\+]?3?[\s]?8?[\s]?\(?0\d{2}?\)?[\s]?\d{3}[\s|-]?\d{2}[\s|-]?\d{2}$/;
  check = pattern.test(value);
  if (check) {
    telInputEl.classList.remove("invalid");
  } else {
    console.log("no");
    telInputEl.classList.add("invalid");
  }
}
