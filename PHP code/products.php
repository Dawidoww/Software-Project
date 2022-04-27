<link rel="stylesheet" href="../css/product.css">
<?php require_once('../SRC/redirect_if_not_logged_in.php') ?>
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
<h2>Products</h2>
<table class="container_item">
    <thead>
        <tr>
            <th class="a">Plan Name</th>
            <th class="b">Plan Type</th>
            <th class="c">Description</th>
            <th class="d">Price</th>
            <th class="e">Action</th>
        </tr>
    </thead>
    <form method="post">
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr class="active-row">
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
<?php require "../templates/footer.php"; ?>