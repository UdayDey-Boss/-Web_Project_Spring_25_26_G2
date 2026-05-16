<?php
include "../Controller/auth_check.php";
auth_check("member");
$name = $_SESSION["name"] ?? "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Member Dashboard</title>
    <link rel="stylesheet" href="../Design/style.css">
</head>
<body>
    <header>
        <h1>Member Dashboard</h1>
    </header>
    <main>
        <fieldset>
            <legend></legend>
            <h2 style="text-align:center;">Welcome <?php echo $name; ?></h2>
            <p><strong>Active Loans:</strong> 0</p>
            <p><strong>Upcoming Due Dates:</strong> 0</p>
            <p><strong>Outstanding Fines:</strong> 0</p>
            <div class="dashboard-links">
                <a href="Profile.php">My Profile</a>
                <a href="../Controller/Logout.php">Logout</a>
            </div>
        </fieldset>
    </main>
    <footer>
        <p>@ Library System</p>
    </footer>
</body>
</html>