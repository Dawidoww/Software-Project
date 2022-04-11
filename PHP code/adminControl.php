<?php require_once('../templates/header.php'); ?>
<link rel="stylesheet" href="../css/control.css"/>
<div class="cont1">
<h2>ADD</h2>
<ul>
    <li><a href="insertPlans.php"><strong>Plans</strong></a></li>
    <li><a href="insertPromotion.php"><strong>Promotion</strong></a></li>
</ul>
</div>
<div class="cont2">
<h2>DELETE</h2>
<ul>
    <li><a href="deletePlans.php"><strong>Plans</strong></a></li>
    <li><a href="deletePromotion.php"><strong>Promotion</strong></a></li>
    <li><a href="deleteUser.php"><strong>User</strong></a></li>
</ul>
<br>
</div>
<a href="adminHome.php"><button name="Submit" value="Back" class="button" type="submit">Back</button></a>

<?php require_once('../templates/footer.php'); ?>
