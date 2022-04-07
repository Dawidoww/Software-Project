<?php
include "../templates/header.php";
require "../PHP code/functions.php";
if (isset($_POST['choose'])) {
    try {
        require_once '../SRC/connectDB.php';

        $sql = "INSERT INTO basket VALUES ( 49.99,'Power Up' )";
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
<h2>Add plans to basket</h2>
<?php if ($success) echo $success; ?>
<table>
    <thead>
    <tr>
        <th>Plan Name</th>
        <th>Plan Type</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    </thead>
    <form method="post">
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo $row["planName"]; ?></td>
            <td><?php echo escape($row["type"]); ?></td>
            <td><?php echo escape($row["description"]); ?></td>
            <td><?php echo escape($row["price"]); ?></td>
            <td><input type="submit" name="choose" value="Choose"></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </form>
</table>
<?php require "../templates/footer.php"; ?>



