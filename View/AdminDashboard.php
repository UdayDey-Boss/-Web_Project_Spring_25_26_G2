<?php
include "../Controller/auth_check.php";
auth_check("admin");
$name = $_SESSION["name"] ?? "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../Design/style.css">
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
    </header>
    <main>
        <fieldset>
            <legend></legend>
            <h2 style="text-align:center;">Welcome Admin <?php echo $name; ?></h2>
            <div class="dashboard-links">
                <a href="../Controller/Logout.php">Logout</a>
            </div>
        </fieldset>
    </main>
    <footer>
        <p>@ Library System</p>
    </footer>
</body>
</html>