<?php
require_once('../templates/header.php'); ?>
<link rel="stylesheet" href="../css/login.css"/>
<title>Sign in as Customer</title>
<div class="container1">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Login</h2>
        <label1 for="email" >Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label1>
        <input name="email" type="email" id="email" placeholder="email" >
        <label1 for="inputPassword">Password&nbsp;</label1>
        <input name="password" type="password" id="inputPassword" placeholder="Password" ><br><br>
        <button name="submit" value="Login" class="button" type="submit">Sign in</button><br>
    </form>
    <br>
    <a href="register.php"><button>Register</button></a>
    <br><br>
    <a href="adminLogin.php"><button>Admin?</button></a>
    <br>
    <?php

    if (isset($_POST['submit'])) {
        try {
            require_once '../SRC/connectDB.php';
            require_once '../PHP code/Classes/UserTest.php';
            $validation = new UserTest($_POST);
            $errors = $validation->validateLoginForm();

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
            $_SESSION['email'] = $email;
            $_SESSION['Active'] = true;
            header("location:test1.php");
            exit;
        }
        else { ?> <h4>Incorrect Email or Password</h4>
            <div class="error">
                <?php echo $errors['email'] ?? ''; ?> <br>
                <?php  echo $errors['password'] ?? '';?>
            </div>
        <?php }
    } ?>
</div>
<?php require_once('../templates/footer.php'); ?>

