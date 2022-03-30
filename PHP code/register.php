<?php include "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) {?>
    <?php echo escape($_POST['firstname']); ?> successfully added.
<?php } ?>

    <h2>Register User</h2>

<?php
if (isset($_POST['submit'])) {
    try {
        require_once '../SRC/connectDB.php';
        $new_user = array(
            "firstname" => $_POST['firstname'],
            "lastname" => $_POST['lastname'],
            "email" => $_POST['email'],
            "password" => $_POST['password'],
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
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
        <input type="password" name="password" id="password" required>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php include "../templates/footer.php"; ?>