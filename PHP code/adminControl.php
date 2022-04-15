<?php require_once('../templates/header.php'); ?>
<link rel="stylesheet" href="../css/control.css"/>
<div class="page">
    <div class="cont1">
    <h2>ADD</h2>
        <ul class ="ul2">
        <li class = "l1"><a class ="a1" href="insertPlans.php"><strong>Plans</strong></a></li>
        <li class = "l1"><a class ="a1" href="insertPromotion.php"><strong>Promotion</strong></a></li>
    </ul>
    </div>
    <div class="cont2">
    <h2>DELETE</h2>
        <ul class ="ul2">
        <li class = "l1"><a class ="a1" href="deletePlans.php"><strong>Plans</strong></a></li>
        <li class = "l1"><a class ="a1" href="deletePromotion.php"><strong>Promotion</strong></a></li>
        <li class = "l1"><a class ="a1" href="deleteUser.php"><strong>User</strong></a></li>
    </ul>
    <br>
    </div>
</div>
<a href="adminHome.php"><button name="Submit" value="Back" class="button" type="submit">Back</button></a>
<?php require_once('../templates/footer.php'); ?>
