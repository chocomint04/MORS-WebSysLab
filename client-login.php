<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="login.css" />
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
    <script src="client-auth.js" defer></script>
    <script src="client-session-guard.js" defer></script>
    <script src="client-login.js" defer></script>
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

    <div class="main-content">
        <div class="card" style="max-width: 420px; min-width: 360px;">
            <h2 style="color:#3730F5; text-align: center; margin-top: 0;">Client Access</h2>
            <form id="client-login-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="johndoe@example.com" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" required>
                    <small style="margin-top: 6px; color: #666;">Use at least 6 characters.</small>
                </div>
                <p id="message"></p>
                <div class="btns">
                    <a href="index.php" class="form-btn form-btn-outline">Back</a>
                    <div style="display:flex; gap:10px;">
                        <button type="button" class="form-btn form-btn-outline" id="button-client-signup">Sign Up</button>
                        <button type="submit" class="form-btn form-btn-filled" id="button-client-login">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
