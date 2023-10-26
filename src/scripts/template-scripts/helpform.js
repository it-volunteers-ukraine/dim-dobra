const wpcf7Elm = document.querySelector(".wpcf7");
const notificationEl = document.getElementById("notification");
const closeNotificationBtn = document.getElementById("js-close-notification");
const telInputEl = document.getElementById("contactPhone");
const phoneNotificationEl = document.getElementById("phone-notification");
const submitNotificationEl = document.getElementById("submit-notification");

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

wpcf7Elm.addEventListener("wpcf7invalid", getSubmitNotification, false);

function getSubmitNotification() {
  submitNotificationEl.classList.add("active");
  setTimeout(() => {
    submitNotificationEl.classList.remove("active");
  }, 3000);
}

telInputEl.addEventListener("keyup", function () {
  telInputEl.value = telInputEl.value.replace(/[^\d?^\+]/g, "");
});

telInputEl.addEventListener("blur", checkNumber);
telInputEl.addEventListener("input", checkNumber);

function checkNumber() {
  const value = telInputEl.value;
  const pattern =
    /^[\+]?\d{2}[\s|-]?\(?0\d{2}?\)?[\s]?\d{3}[\s|-]?\d{2}[\s|-]?\d{2}$/;
  check = pattern.test(value);
  if (check) {
    phoneNotificationEl.classList.remove("active");
  } else {
    phoneNotificationEl.classList.add("active");
  }
}
