<?php include "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) {?>
    <?php echo escape($_POST['planName']); ?> successfully added.
<?php } ?>

<h2>Add Promotion Code</h2>
<?php
if (isset($_POST['submit'])) {
    try {
        require_once '../SRC/connectDB.php';
        require_once 'Classes/Promo.php';
        $sql = "INSERT INTO promo
           VALUES ('Easter', 20 ),('Holidays', 50)";
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

