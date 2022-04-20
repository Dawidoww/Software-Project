<link rel="stylesheet" href="../css/homepage.css"/>
<?php require_once('../templates/header.php'); ?>
<div class="page">
    <div class="box1">
        <h2> Status: You are logged in <?php echo $_SESSION['trainerName'];?></h2>
        <form action="logout.php" method="post" name="Logout" class="form-signin">
            <br>
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            <a class ="a3" href="adminControl.php"><button1 name="Control_Centre" value="Control" class="button" type="Submit">Control Center</button1></a>
        </form><br>
    </div>
    <div class="box2">
        <h1>About us</h1>
        <p> Established in 2022. We Provide customers  with a
            fitness plan that will help them reach any fitness goals they would like to achieve,
            that being losing weight, gaining weight, gaining strength, or just getting into shape,
            Critical Fitness website will be able to provide that. This website is suitable for all ages groups.</p>
        <br>
        <br>
        <br>
        <h2>Buy a plan just with 5 clicks</h2>
        <br>
        <h2>10% discount for Students</h2>
    </div>

    <div class="box3">
        <h1>Workout of the Day</h1>
        <br>
        <img id = workout src="../img/workout.jpg" alt=work" />
    </div>
</div>
<?php require_once('../templates/footer.php'); ?>