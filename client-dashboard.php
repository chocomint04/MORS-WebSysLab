<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="index.css" />
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
    <script src="client-auth.js"></script>
    <script src="client-auth-guard.js"></script>
    <script src="signout.js"></script>
</head>
<body>
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

    <div class="main-content" style="flex-direction: column; gap: 10px;">
        <div class="card" style="text-align:center; max-width: 680px; min-width: 360px;">
            <div class="greeting">CLIENT PORTAL</div>
            <div class="team-title" style="font-size: 2rem;">Welcome back!</div>
            <p style="margin: 0 0 6px 0; color: #444;">Signed in as <strong id="account-email">Loading...</strong></p>
            <div class="help-text">Choose what you want to do.</div>
            <div class="action-buttons" style="margin-top: 18px;">
                <a class="client-btn" href="client-form.php">Make Consultation Request</a>
                <a class="admin-btn" href="client-records.php">View My Consultation Records</a>
            </div>
            <div style="margin-top: 22px;">
                <a href="#" class="signout" style="color:#3730F5; font-weight:600; text-decoration:none;">Sign out</a>
            </div>
        </div>
    </div>
</body>
</html>
