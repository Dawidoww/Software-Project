<?php
require "../PHP code/functions.php";
if (isset($_GET["promoCode"])) {
    try {
        require_once '../SRC/connectDB.php';
        $promoCode = $_GET["promoCode"];
        $sql = "DELETE FROM promo WHERE planName = :promoCode";
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
    <h2>Delete plans</h2>
<?php if ($success) echo $success; ?>
    <table>
        <thead>
        <tr>
            <th>Promo Code</th>
            <th>Discount</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr>
                <td><?php echo escape($row["promoCode"]); ?></td>
                <td><?php echo escape($row["amount"]); ?></td>
                <td><a href="deletePromotion.php?promoCode=<?php echo escape($row["promoCode"]);
                    ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php require "../templates/footer.php"; ?>