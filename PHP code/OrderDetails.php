<?php
require "../PHP code/functions.php";
if (isset($_POST["submit"])) {
    try {
        require_once '../SRC/connectDB.php';
        $sql = "INSERT INTO 'order' VALUES (1,05/04/2022 13:22:12,'dawidoww15@gmail.com','Easter',49.99,'Power Up')";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $success = "Order Created";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
<?php require "../templates/header.php"; ?>
<h2>Order</h2>
<form method="post">
    <input type="submit" name="submit" value="Submit">
</form>
<?php require "../templates/footer.php"; ?>

