<link rel="stylesheet" href="../css/order.css">
<?php require "../templates/header.php"; ?>

<?php
require "../PHP code/functions.php";
try {
    require_once '../SRC/connectDB.php';
    $sql = "SELECT * FROM `order` ";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<?php
if (isset($_POST['Pay'])) {
    try {
        header('location:PaymentDetails.php');
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}?>
<?php if ($success) echo $success; ?>
<div class="container_item">
    <h2>Order</h2>
    <table>
        <thead>
        <tr>
            <th>Order ID</th>
            <th>Plan Name</th>
            <th>Shipping Email</th>
            <th>PromoCode</th>
            <th>Price</th>

        </tr>
        </thead>
        <form method="post">
            <tbody>
            <?php foreach ($result as $row) : ?>
                <tr>
                    <td class="id"><?php echo $row["orderID"]; ?></td>
                    <td class="plan"><?php echo $row["planName"]; ?></td>
                    <td class="ship"><?php echo $row["shipEmail"]; ?></td>
                    <td class="typ"><?php echo escape($row["promoCode"]); ?></td>
                    <td class="desc"><?php echo escape($row["amount"]); ?></td>
                    <td><button name="Pay" value="Pay" class="button" type="submit">Pay</button></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </form>
    </table>
</div>
<?php require "../templates/footer.php"; ?>
