<?php require_once('../templates/header.php'); ?>
<link rel="stylesheet" href="../css/login.css"/>
    <title>Sign in as Customer</title>
<body>
<div class="container1">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in as Customer</h2>
        <label for="email" >Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input name="email" type="email" id="email" class="form-control" placeholder="email" required autofocus>
        <br> <label for="inputPassword">Password&nbsp;</label>
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
            ?> User successfully logged in!!! <?php }
        else {
            ?> Incorrect Email or Password!!!
        <?php }
    } ?>
</div>
</body>
<?php require_once('../templates/footer.php'); ?>

