<link rel="stylesheet" href="../css/basket.css">
<?php
require_once '../templates/header.php';
require "../PHP code/functions.php";
$total = 0;
?>

<div class="action"></div>
<?php
if (isset($_POST["submit"])) {
    try {
        require_once '../SRC/connectDB.php';
        $sql = "INSERT INTO `order`(shipEmail,planName,amount) VALUES ('dawidoww15@gmail.com','Power Up',21.99)";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $success = "Order Created";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
</div>

<?php
if (isset($_GET["planName"])) {
    try {
        require_once '../SRC/connectDB.php';
        $planName = $_GET["planName"];
        $sql = "DELETE FROM basket WHERE planName = :planName ";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':planName', $planName);
        $statement->execute();
        $success = "Plan successfully deleted";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
try {
    require_once '../SRC/connectDB.php';
    $sql = "SELECT * FROM basket";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<h2>Basket</h2>
<?php if ($success) echo $success; ?>
<table class="container_item">
    <thead>
    <tr>
        <th>Plan Name</th>
        <th>Price</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo escape($row["planName"]); ?></td>
            <td><?php echo escape($row["amount"]); ?></td>
            <td><a href="basket_checkout.php?planName=<?php echo escape($row["planName"]);
                ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <thead>
    <tr>
        <th>Total: <?php
            $total = number_format($total, 2);
            ?>
            $ <?= $total ?></th>
    </tr>
    </thead>
</table>
<form method="post">
    <div class="Out">
        <a href="OrderDetails.php"><button name="submit" value="CheckOut" class="button" type="submit">CheckOut</button></a><br>
    </div>
</form>
<?php require "../templates/footer.php"; ?>


