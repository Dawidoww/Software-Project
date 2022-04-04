<?php
require "../PHP code/functions.php";
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
<?php require "../templates/header.php"; ?>
<h2>Basket</h2>
<?php if ($success) echo $success; ?>
<table>
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
</table>
<?php require "../templates/footer.php"; ?>
