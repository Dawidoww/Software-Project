<?php include "../templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) {?>
    <?php echo escape($_POST['planName']); ?> successfully added.
<?php } ?>

<h2>Add Plan</h2>
<?php
if (isset($_POST['submit'])) {
    try {
        require_once '../SRC/connectDB.php';
        require_once 'Plans.php';
        $sql = "INSERT INTO plans
           VALUES ('Power Up','Power Lifting', 'Great power insurgence withing a few weeks.', 49.99 ),
           ('Transform', 'BodyBuilding', 'Wanna becvome Arnold 2.0? Choose me!!', 49.99),
           ('The Weight Blaster', 'Slimming', 'Loose all excess fat, look more healthier and comfortable in your own body, then this plan is for YOU', 39.99),
           ('Titan Mode', 'Bulking', 'Wanna gain some extra mass? Wanna improve your strength?If so then this plan is perfect to get your goal started', 44.99)";
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
