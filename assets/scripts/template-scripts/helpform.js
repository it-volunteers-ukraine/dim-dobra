const wpcf7Elm=document.querySelector(".wpcf7"),notificationEl=document.getElementById("notification"),closeNotificationBtn=document.getElementById("js-close-notification"),telInputEl=document.getElementById("contactPhone"),nameInputEl=document.getElementById("contactName"),phoneNotificationEl=document.getElementById("phone-notification"),submitNotificationEl=document.getElementById("submit-notification");function getNotification(){notificationEl.classList.add("active"),setTimeout((()=>{notificationEl.classList.remove("active")}),3e3),closeNotificationBtn.addEventListener("click",closeNotification)}function closeNotification(){notificationEl.classList.remove("active"),closeNotificationBtn.removeEventListener("click",closeNotification)}function getSubmitNotification(){submitNotificationEl.classList.add("active"),setTimeout((()=>{submitNotificationEl.classList.remove("active")}),3e3)}function checkNumber(){const t=telInputEl.value;check=/^[\+]?\d{2}[\s|-]?\(?\d{3}?\)?[\s]?\d{3}[\s|-]?\d{2}[\s|-]?\d{2}$/.test(t),check?phoneNotificationEl.classList.remove("active"):phoneNotificationEl.classList.add("active")}wpcf7Elm.addEventListener("wpcf7mailsent",getNotification,!1),wpcf7Elm.addEventListener("wpcf7invalid",getSubmitNotification,!1),nameInputEl.addEventListener("keyup",(function(){nameInputEl.value=nameInputEl.value.replace(/\d/g,"")})),telInputEl.addEventListener("keyup",(function(){telInputEl.value=telInputEl.value.replace(/[^\d?^\+]/g,"")})),telInputEl.addEventListener("blur",checkNumber),telInputEl.addEventListener("input",checkNumber);