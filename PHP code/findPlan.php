<?php
if (isset($_POST['submit'])) {
    try {
        require "functions.php";
        require_once '../SRC/connectDB.php';
        $sql = "SELECT * FROM plans WHERE planName = :planName";
        $planName = $_POST['planName'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':planName', $planName, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();
    }
    catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
require "../templates/header.php";
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) {
        ?>
        Plan found!!!
    <?php } else { ?>
        No Plan <?php echo escape($_POST['planName']) ?>
    <?php }
} ?>
<h2>Find plan</h2>
<form method="post">
    <label for="planName">Plan</label>
    <input type="type" id="planName" name="planName">
    <input type="submit" name="submit" value="View Results">
</form>
<?php require "../templates/footer.php"; ?>
