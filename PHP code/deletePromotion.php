<link rel="stylesheet" href="../css/controlpanel.css"/>

<?php
require "../PHP code/functions.php";
if (isset($_GET["promoCode"])) {
    try {
        require_once '../SRC/connectDB.php';
        $promoCode = $_GET["promoCode"];
        $sql = "DELETE FROM promo WHERE promoCode = :promoCode";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':promoCode', $promoCode);
        $statement->execute();
        $success = "Plan successfully deleted";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
try {
    require_once '../SRC/connectDB.php';
    $sql = "SELECT * FROM promo";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "../templates/header.php"; ?>
    <h2>Delete Promotions</h2>
<?php if ($success) echo $success; ?>
    <table class="content_table">
        <thead>
        <tr>
            <th>Promo Code</th>
            <th>Discount</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr class="active-row">
                <td><?php echo escape($row["promoCode"]); ?></td>
                <td><?php echo escape($row["amount"]); ?></td>
                <td><a href="deletePromotion.php?promoCode=<?php echo escape($row["promoCode"]);
                    ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="adminControl.php"><button name="Submit" value="Back" class="button" type="submit">Back</button></a>
<?php require "../templates/footer.php"; ?>