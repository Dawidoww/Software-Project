<?php include "../templates/header.php"; ?>
    <link rel="stylesheet" href="../css/register.css"/>
<body>
<div class="container2">
    <form method="post">
        <h2 class="form-register-heading">Register</h2>
        <label1 for="firstname">First Name</label1>
        <input type="text" name="firstname" id="firstname" required>
        <label1 for="lastname">Last Name</label1>
        <input type="text" name="lastname" id="lastname" required>
        <label1 for="email">Email Address</label1>
        <input type="email" name="email" id="email" required>
        <label1 for="password">Password</label1>
        <input type="password" name="password" id="password" required><br><br>
        <button name="submit" value="Register" class="button" type="submit">Register</button>
    </form>
    <br>
    <a href="login.php"><button>Already a User?</button></a>
<?php if (isset($_POST['submit']) && $statement) {?>
    <?php echo escape($_POST['firstname']); ?> successfully added.
<?php } ?>
<?php
if (isset($_POST['submit'])) {
    try {
        require_once '../SRC/connectDB.php';
        $new_user = array(
            "email" => $_POST['email'],
            "password" => $_POST['password']
        );
        header("location:login.php");
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "user",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
if (isset($_POST['submit'])) {
    try {
        require_once '../SRC/connectDB.php';
        $new_customer1 = array(
            "name" => $_POST['firstname'],
            "surname" => $_POST['lastname']
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "customer",
            implode(", ", array_keys($new_customer1)),
            ":" . implode(", :", array_keys($new_customer1))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_customer1);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
</div>
</body>
<?php include "../templates/footer.php"; ?>