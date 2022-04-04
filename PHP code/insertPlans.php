<?php include "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) {?>
    <?php echo escape($_POST['planName']); ?> successfully added.
<?php } ?>

<h2>Add Plan</h2>
<?php
if (isset($_POST['submit'])) {
    try {
        require_once '../SRC/connectDB.php';
        $sql = "INSERT INTO plans
           VALUES ('Slimming','Slimming','********', 49.99)";
        $statement = $connection->prepare($sql);
        $statement->execute();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
<form method="post">
    <input type="submit" name="submit" value="Submit">
</form>
<?php include "../templates/footer.php"; ?>
