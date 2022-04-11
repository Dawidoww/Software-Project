<?php
require_once('../templates/header.php'); ?>
<link rel="stylesheet" href="../css/login.css"/>
    <title>Sign in as Customer</title>
<body>
<div class="container1">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Login</h2>
        <label1 for="email" >Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label1>
        <input name="email" type="email" id="email" class="form-control" placeholder="email" required autofocus>
        <label1 for="inputPassword">Password&nbsp;</label1>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required><br><br>
        <button name="submit" value="Login" class="button" type="submit">Sign in</button><br>
    </form>
    <br>
    <a href="register.php"><button>Register</button></a>
    <br>
    <?php

    if (isset($_POST['submit'])) {
        try {
            require_once '../SRC/connectDB.php';
            require_once '../PHP code/Classes/User.php';
            $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
            $email = $_POST['email'];
            $password = $_POST['password'];

            $statement = $connection->prepare($sql);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->bindParam(':password', $password, PDO::PARAM_STR);
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
            $_SESSION['email'] = $email;
            $_SESSION['Active'] = true;
            header("location:test1.php");
            exit;
        }
        else {
            ?> <h4>Incorrect Email or Password!!!</h4>
        <?php }
    } ?>
</div>
</body>
<?php require_once('../templates/footer.php'); ?>

