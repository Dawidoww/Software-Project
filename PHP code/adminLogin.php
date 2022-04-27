<?php
require_once('../templates/header.php'); ?>
<link rel="stylesheet" href="../css/login.css"/>
<title>Sign in as Personal Trainer</title>
<div class="container1">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Personal Trainer Login</h2>
        <label1 for="trainerName" >Trainer Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label1>
        <input name="trainerName" type="email" id="trainerName" placeholder="trainerName" required autofocus>

        <label1 for="inputPassword">Password&nbsp;</label1>
        <input name="password" type="password" id="inputPassword" placeholder="Password" required><br><br>
        <button name="submit" value="Login" class="button" type="submit">Sign in</button><br>
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        try {
            require_once '../SRC/connectDB.php';
            require_once '../PHP code/Classes/User.php';

            //$sql = "INSERT INTO personaltrainer(trainerName) VALUES ('admin@gmail.com')";
            $sql = "SELECT * FROM personaltrainer";
            $trainerName = $_POST['trainerName'];
            $statement = $connection->prepare($sql);
    //        $statement->bindParam(':email', $email, PDO::PARAM_STR);
      //      $statement->bindParam(':password', $password, PDO::PARAM_STR);
            $statement->execute();
            $result = $statement->fetchAll();
        }
        catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
    if (isset($_POST['submit'])) {
        if ($result && $statement->rowCount() > 0) {
            ?><?php
            $_SESSION['trainerName'] = $trainerName;
            $_SESSION['Active'] = true;
            header("location:adminHome.php");
            exit;
        }
        else {
            ?> <h4>Incorrect Email or Password!!!</h4>
        <?php }
    } ?>
</div>
<?php require_once('../templates/footer.php'); ?>
