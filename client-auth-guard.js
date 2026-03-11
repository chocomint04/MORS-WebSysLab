window.addEventListener("pageshow", function (event) {
    if (event.persisted || performance.getEntriesByType("navigation")[0]?.type === "back_forward") {
        window.location.reload();
    }
});

document.addEventListener("DOMContentLoaded", () => {
    firebase.auth().onAuthStateChanged((user) => {
        if (!user) {
            window.location.replace("client-login.php");
            return;
        }

        const role = localStorage.getItem("appRole");
        if (role !== "client") {
            window.location.replace("index.php");
            return;
        }

        const emailElement = document.getElementById("account-email");
        if (emailElement) {
            emailElement.textContent = user.email;
        }
    });
});
