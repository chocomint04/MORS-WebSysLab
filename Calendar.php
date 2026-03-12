<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendar</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="Calendar.css">
  <script src="Calendar.js"></script>
  <script src="authy.js"></script>
</head>
<body>

  <!-- Sidebar (desktop only) -->
  <div class="sidebar hidden md:block">
    <div class="mb-4">
      <img src="images/logo.png" alt="GPPB-TSO logo" width="150" height="100" />
    </div>
    <nav class="space-y-4">
      <a href="inbox.php" class="flex items-center"><i class="fas fa-inbox"></i><span>Inbox</span></a>
      <a href="History.php" class="flex items-center"><i class="fas fa-history"></i><span>History</span></a>
      <a href="Calendar.php" class="flex items-center active"><i class="fas fa-calendar-alt"></i><span>Calendar</span></a>
      <a href="Systems.php" class="flex items-center"><i class="fas fa-sliders-h"></i><span>Systems</span></a>
    </nav>
    <div class="bottom-section">
      <div class="user-info">
        <i class="fas fa-user-circle text-2xl"></i>
        <span id="account-email">Loading...</span>
      </div>
      <a href="#" class="signout">Sign out</a>
    </div>
  </div>

  <!-- Main content (offset right of sidebar on desktop) -->
  <div class="main-content">
    <div class="bg-image-wrapper">
      <img src="images/bg.png" alt="Background" />
    </div>
    <div class="content-inner">
      <div class="cal-header">
        <h2>CALENDAR</h2>
      </div>
      <div class="cal-panels" id="calendar-panel-container">
        <!-- Left panel -->
        <div class="cal-left-panel">
          <div id="dayDisplay" class="day-display"></div>
          <div id="monthDisplay" class="month-display"></div>
          <div class="divider"></div>
          <h3 class="appt-label">Upcoming Appointments:</h3>
          <div id="upcomingAppointments" class="appt-list"></div>
        </div>
        <!-- Calendar -->
        <div class="cal-right-panel">
          <div id="calendar"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom nav (mobile only) -->
  <div class="bottom-nav md:hidden">
    <a href="inbox.php"><i class="fas fa-inbox"></i><span>Inbox</span></a>
    <a href="History.php"><i class="fas fa-history"></i><span>History</span></a>
    <a href="Calendar.php" class="active"><i class="fas fa-calendar-alt"></i><span>Calendar</span></a>
    <a href="Accounts.php"><i class="fas fa-users-cog"></i><span>Accounts</span></a>
    <a href="index.php" class="signout"><i class="fas fa-sign-out-alt"></i><span>Sign Out</span></a>
  </div>

  <script src="signout.js"></script>
</body>
</html>
