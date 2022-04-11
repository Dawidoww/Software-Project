<?php require_once('../templates/header.php'); ?>
    <link rel="stylesheet" href="../css/homepage.css"/>
    <body>
<div class="container_home">

    <h2> Status: You are logged in <?php echo $_SESSION['trainerName'];?></h2>
    <form action="logout.php" method="post" name="Logout" class="form-signin">
        <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        <a href="adminControl.php"><button1 name="Control_Centre" value="Control" class="button" type="Submit">Control Center</button1></a>
    </form><br>
</div>
<?php require_once('../templates/footer.php'); ?>