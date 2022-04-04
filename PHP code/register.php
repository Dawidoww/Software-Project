<?php include "../templates/header.php"; ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<?php if (isset($_POST['submit']) && $statement) {?>
    <?php echo escape($_POST['firstname']); ?> successfully added.
<?php } ?>
    <h2 class="register" "">Register User</h2>
<?php
if (isset($_POST['submit'])) {
    try {
        require_once '../SRC/connectDB.php';
        $new_user = array(
            "email" => $_POST['email'],
            "password" => $_POST['password']
        );
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
    <form method="post">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" required>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" required>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="login.php">Already a User?</a><br>
<?php include "../templates/footer.php"; ?>