<?php require_once('../templates/header.php'); ?>
<?php require_once('../SRC/redirect_if_not_logged_in.php') ?>
<link rel="stylesheet" href="../css/confirmation.css"/>

<div class="page">
    <div class="box1">
        <h1>Order Confirmation</h1>
        <br>
        <p>Hi <?php echo $_SESSION['email'];?>,</p>
        <p>Thank you for ordering via critical Fitness.</p>
        <br>
        <p> If you have a question about this order, you can simply email us at admin@critcalfitness.com with your question and we will get back to you shortly with an answer</p>

        <a class ="a2" href="home.php"><button1 name="Back" value="BackB" class="button" type="Submit">Home</button1></a>
    </div>

</div>
<?php require_once('../templates/footer.php'); ?>
