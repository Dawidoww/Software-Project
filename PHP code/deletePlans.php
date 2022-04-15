<link rel="stylesheet" href="../css/controlpanel.css"/>
<?php
require "../PHP code/functions.php";
if (isset($_GET["planName"])) {
    try {
        require_once '../SRC/connectDB.php';
        $planName = $_GET["planName"];
        $sql = "DELETE FROM plans WHERE planName = :planName ";
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
    $sql = "SELECT * FROM plans";
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
<table class="content_table">
    <thead>
        <tr>
            <th>Plan Name</th>
            <th>Plan Type</th>
            <th>Description</th>
            <th>Price</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr class="active-row">
            <td><?php echo escape($row["planName"]); ?></td>
            <td><?php echo escape($row["type"]); ?></td>
            <td><?php echo escape($row["description"]); ?></td>
            <td><?php echo escape($row["price"]); ?></td>
            <td><a href="deletePlans.php?planName=<?php echo escape($row["planName"]);
                ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="adminControl.php"><button name="Submit" value="Back" class="button" type="submit">Back</button></a>
<?php require "../templates/footer.php"; ?>


