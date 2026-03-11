<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="receipt.css"/>
    <link rel="stylesheet" href="index.css"/>
    <title>Consultation Receipt</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
    <script src="client-auth.js"></script>
    <script src="client-session-guard.js"></script>

    <div class="header">
        <div class="logo-container">
            <img src="images/logo.png" alt="GPPB-TSO Logo" class="logo">
        </div>
        <div class="system-title">
            <div class="main-title">GPPB-TSO</div>
            <div class="subtitle">Online Consultation Request System</div>
        </div>
        <a class="visit-website-btn" href="https://www.gppb.gov.ph/" target="_blank">Visit our Website!</a>
    </div>

    <div class="receipt">
        <div class="receipt-header">
            <h1>Consultation Booking Receipt</h1>
            <p>Thank you for booking a consultation with us!</p>
        </div>
        
        <div class="receipt-content" id="receipt-content">
        </div>

        <button class="print-btn" onclick="window.print()">Print Receipt</button>
        <button class="back-btn" onclick="goBack()">Back</button>
    </div>

    <script>
        function goBack() {
            if (localStorage.getItem('appRole') === 'client') {
                window.location.href = 'client-records.php';
            } else {
                window.location.href = 'index.php';
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            const data = JSON.parse(sessionStorage.getItem('consultationData'));
            const content = document.getElementById('receipt-content');
            
            if (data) {
                const fields = [
                    { label: 'First Name', value: data.firstName },
                    { label: 'Last Name', value: data.lastName },
                    { label: 'Job Position', value: data.jobPosition },
                    { label: 'Email', value: data.email },
                    { label: 'Phone Number', value: data.phoneNumber },
                    { label: 'Company', value: data.company },
                    { label: 'Consultation Interest', value: data.consultationInterest },
                    { label: 'Appointment Date', value: data.appointmentDate },
                    { label: 'Appointment Time', value: data.appointmentTime },
                    { label: 'Additional Information', value: data.additionalInfo }
                ];

                fields.forEach(field => {
                    if (field.value) {
                        content.innerHTML += `
                            <div class="receipt-row">
                                <div class="receipt-label">${field.label}:</div>
                                <div class="receipt-value">${field.value}</div>
                            </div>
                        `;
                    }
                });
            } else {
                content.innerHTML = '<p>No consultation data found.</p>';
            }
        });
    </script>
</body>
</html>