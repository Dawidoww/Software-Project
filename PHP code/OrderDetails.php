<?php require "../templates/header.php"; ?>

<?php
require "../PHP code/functions.php";

if (isset($_POST["submit"])) {
    try {
        require_once '../SRC/connectDB.php';
   /*     $sql = "INSERT INTO 'order'(orderID,date,shipEmail,promoCode,amount, promoName) VALUES (1,05/04/2022 13:22:12,'dawidoww15@gmail.com','Easter',49.99,'Power Up')";
        */$statement = $connection->prepare($sql);
        $statement->execute();
        $success = "Order Created";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
try {
    require_once '../SRC/connectDB.php';
    $sql = "SELECT * FROM order ";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<?php if ($success) echo $success; ?>
<div class="container_item">
    <h2>Order</h2>
    <table>
        <form method="post">
            <tbody>
            <?php foreach ($result as $row) : ?>
                <tr>
                    <td class="plan"><?php echo $row["planName"]; ?></td>
                    <td class="typ"><?php echo escape($row["type"]); ?></td>
                    <td class="desc"><?php echo escape($row["description"]); ?></td>
                    <td class="price"><?php echo escape($row["price"]); ?></td>
                    <td><button name="submit" value="Choose" class="button" type="submit">Add</button></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </form>
    </table>
    <form method="post">
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<?php require "../templates/footer.php"; ?>

