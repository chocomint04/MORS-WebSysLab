<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Consultation Records</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="stylesheet" href="index.css" />
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
    <script src="client-auth.js"></script>
    <script src="client-auth-guard.js"></script>
    <script src="client-records.js" defer></script>
    <script src="signout.js"></script>
    <style>
        .records-wrap {
            width: min(1100px, 94vw);
            margin: 30px auto;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .records-header {
            padding: 18px 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ececec;
        }

        .records-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .records-table {
            width: 100%;
            border-collapse: collapse;
        }

        .records-table th,
        .records-table td {
            padding: 12px 14px;
            border-bottom: 1px solid #efefef;
            text-align: left;
            vertical-align: top;
            font-size: 0.95rem;
        }

        .records-table th {
            background: #f7f8ff;
            color: #3730F5;
        }

        .status-chip {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 999px;
            background: #eef;
            color: #3730F5;
            font-size: 0.85rem;
            font-weight: 600;
        }

        #empty-state {
            display: none;
            padding: 24px;
            color: #555;
        }

        @media (max-width: 768px) {
            .records-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
    </style>
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

    <section class="records-wrap">
        <div class="records-header">
            <div>
                <h2 style="margin:0; color:#1f2937;">My Consultation Records</h2>
                <p style="margin: 4px 0 0 0; color:#666;">Account: <span id="account-email">Loading...</span></p>
            </div>
            <div class="records-actions">
                <a href="client-dashboard.php" class="admin-btn" style="text-decoration:none; padding:8px 14px;">Back</a>
                <a href="#" class="admin-btn signout" style="text-decoration:none; padding:8px 14px;">Sign out</a>
            </div>
        </div>

        <table class="records-table">
            <thead>
                <tr>
                    <th>Appointment Date</th>
                    <th>Time</th>
                    <th>Consultation Interest</th>
                    <th>Status</th>
                    <th>Additional Info</th>
                </tr>
            </thead>
            <tbody id="client-records-body"></tbody>
        </table>
        <div id="empty-state">No consultation records found for your account.</div>
    </section>
</body>
</html>
