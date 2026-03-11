document.addEventListener("DOMContentLoaded", () => {
    const tbody = document.getElementById("client-records-body");
    const emptyState = document.getElementById("empty-state");

    firebase.auth().onAuthStateChanged((user) => {
        if (!user) {
            return;
        }

        const clientEmail = (user.email || "").toLowerCase();

        firebase.database().ref("contactFormDB").once("value")
            .then((snapshot) => {
                tbody.innerHTML = "";

                const rows = [];
                snapshot.forEach((child) => {
                    const data = child.val() || {};
                    const rowEmail = (data.email || "").toLowerCase();
                    if (rowEmail !== clientEmail) {
                        return;
                    }

                    rows.push({
                        date: data.appointmentDate || "",
                        time: data.appointmentTime || "",
                        interest: data.consultationInterest || "N/A",
                        status: data.status || "Pending",
                        notes: data.additionalInfo || "-",
                        full: data
                    });
                });

                rows.sort((a, b) => new Date(b.date) - new Date(a.date));

                rows.forEach((item) => {
                    const tr = document.createElement("tr");
                    tr.style.cursor = "pointer";
                    tr.title = "Click to view receipt";
                    tr.innerHTML = `
                        <td>${item.date || "N/A"}</td>
                        <td>${item.time || "N/A"}</td>
                        <td>${item.interest}</td>
                        <td>${item.status}</td>
                        <td>${item.notes}</td>
                    `;
                    tr.addEventListener("click", () => {
                        sessionStorage.setItem("consultationData", JSON.stringify(item.full));
                        window.location.href = "receipt.php";
                    });
                    tbody.appendChild(tr);
                });

                emptyState.style.display = rows.length ? "none" : "block";
            })
            .catch(() => {
                emptyState.textContent = "Unable to load your records right now.";
                emptyState.style.display = "block";
            });
    });
});
