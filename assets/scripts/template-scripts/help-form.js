const wpcf7Elm=document.querySelector(".wpcf7"),notificationEl=document.getElementById("notification"),closeNotificationBtn=document.getElementById("js-close-notification");function getNotification(){notificationEl.classList.add("active"),setTimeout((()=>{notificationEl.classList.remove("active")}),3e3),closeNotificationBtn.addEventListener("click",closeNotification)}function closeNotification(){notificationEl.classList.remove("active"),closeNotificationBtn.removeEventListener("click",closeNotification)}wpcf7Elm.addEventListener("wpcf7mailsent",getNotification,!1);