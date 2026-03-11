document.addEventListener("DOMContentLoaded", () => {
    const allowedClientPages = [
        "client-dashboard.php",
        "client-form.php",
        "client-records.php",
        "receipt.php"
    ];

    firebase.auth().onAuthStateChanged((user) => {
        const role = localStorage.getItem("appRole");
        if (!user || role !== "client") {
            return;
        }

        const currentPage = window.location.pathname.split("/").pop().toLowerCase();
        if (!allowedClientPages.includes(currentPage)) {
            window.location.replace("client-dashboard.php");
        }
    });
});
