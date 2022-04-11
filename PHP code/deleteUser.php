<?php
require "../PHP code/functions.php";
if (isset($_GET["userID"])) {
    try {
        require_once '../SRC/connectDB.php';
        $userID = $_GET["userID"];
        $sql = "DELETE FROM user WHERE userID = :userID";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':userID', $userID);
        $statement->execute();
        $success = "User successfully deleted";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
try {
    require_once '../SRC/connectDB.php';
    $sql = "SELECT * FROM user";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "../templates/header.php"; ?>
<h2>Delete users</h2>
<?php if ($success) echo $success; ?>
<table>
    <thead>
    <tr>
        <th>Email Address</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo escape($row["email"]); ?></td>
            <td><?php echo escape($row["password"]); ?></td>

            <td><a href="deleteUser.php?userID=<?php echo escape($row["userID"]);
                ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php
if (isset($_GET["name"])) {
try {
require_once '../SRC/connectDB.php';
$name = $_GET["name"];
$sql = "DELETE FROM customer WHERE name = :name";
$statement = $connection->prepare($sql);
$statement->bindValue(':name', $name);
$statement->execute();
$success = "Customer details successfully deleted";
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
}
try {
require_once '../SRC/connectDB.php';
$sql = "SELECT * FROM customer";
$statement = $connection->prepare($sql);
$statement->execute();
$result = $statement->fetchAll();
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
?>
<h2>Delete Customer Details</h2>
<?php if ($success) echo $success; ?>
<table>
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
        <tr>
            <td><?php echo escape($row["name"]); ?></td>
            <td><?php echo escape($row["surname"]); ?></td>

            <td><a href="deleteUser.php?name=<?php echo escape($row["name"]);
                ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="adminControl.php"><button name="Submit" value="Back" class="button" type="submit">Back</button></a>
<?php require "../templates/footer.php"; ?>
