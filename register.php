<?php include "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) {?>
    <?php echo escape($_POST['firstname']); ?> successfully added.
<?php } ?>

<h2>Register a User</h2>

<?php
if (isset($_POST['submit'])) {
    try {
        require_once '../src/DBconnect.php';
        $new_user = array(
            "name" => $_POST['firstname'],
            "surname" => $_POST['lastname'],
            "email" => $_POST['firstname'],
            "password" => $_POST['lastname']
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
    <label for="name">First Name</label>
    <input type="text" name="firstname" id="firstname" required>
    <label for="surname">Last Name</label>
    <input type="text" name="lastname" id="lastname" required>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" required>
    <label for="password">Password</label>
    <input type="text" name="password" id="password" required>
    <input type="submit" name="submit" value="Submit">
</form>
<?php include "templates/footer.php"; ?>
