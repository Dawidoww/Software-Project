<link rel="stylesheet" href="../css/item.css">
<?php
include "../templates/header.php";
require "../PHP code/functions.php";

if (isset($_POST['Submit'])) {
    try {
        require_once '../SRC/connectDB.php';
        require_once '../PHP code/Classes/Basket.php';
        //    $basket = new Basket(0,2);
        //    $basket->setAmount(49.99);
        //   $basket->setPlanName('Power Up');
        //   $basket->AddItem();
        $sql = "INSERT INTO basket(amount,planName) VALUES ( 21.99,'Power Up' )";
        $statement = $connection->prepare($sql);
        $statement->execute();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
try {
    require_once '../SRC/connectDB.php';
    $sql = "SELECT * FROM plans";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<?php if ($success) echo $success; ?>
<div class="container_item">
    <h2>Products</h2>
    <table>
        <form method="post">
            <tbody>
            <?php foreach ($result as $row) : ?>
                <tr>
                    <td class="plan"><?php echo $row["planName"]; ?></td>
                    <td class="typ"><?php echo escape($row["type"]); ?></td>
                    <td class="desc"><?php echo escape($row["description"]); ?></td>
                    <td class="price"><?php echo escape($row["price"]); ?></td>
                    <td><button name="Submit" value="Choose" class="button" type="submit">Add</button></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </form>
    </table>
</div>
<?php require "../templates/footer.php"; ?>