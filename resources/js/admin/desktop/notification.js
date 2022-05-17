export let renderNotification = () => {

    document.addEventListener("message", (event => {

        let notification = document.querySelector(".notification");
        let notificationText = document.querySelector(".notification-message")

        notification.classList.remove("success", "error");

        notificationText.innerHTML = event.detail.text;
        notification.classList.add(event.detail.type);

        setTimeout(() => {

            notification.classList.remove(event.detail.type);
        }, 5000);
    }));
}