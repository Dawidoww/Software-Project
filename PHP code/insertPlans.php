<?php include "../templates/header.php"; ?>

    <link rel="stylesheet" href="../css/register.css"/>
    <div class="container2">
        <form method="post">
            <h2 class="form-register-heading">Add Plans</h2>
            <label1 for="name">Name Of Plan</label1>
            <input type="text" name="name" id="name" required>
            <label1 for="type">Type of Plan</label1>
            <input type="text" name="type" id="type" required>
            <label1 for="description">Description</label1>
            <input type="text" name="desc" id="desc" required>
            <label1 for="price">Price</label1>
            <input type="text" name="price" id="price" required><br><br>
            <button name="submit" value="add" class="button" type="submit">Add Plan</button><br><br>
        </form>
        <?php if (isset($_POST['submit']) && $statement) {?>
            <?php echo escape($_POST['name']); ?> successfully added.
        <?php } ?>
        <?php
        if (isset($_POST['submit'])) {
            try {
                require_once '../SRC/connectDB.php';
                $new_Plan = array(
                    "planName" => $_POST['name'],
                    "type" => $_POST['type'],
                    "description" => $_POST['desc'],
                    "price" => $_POST['price']
                );
                //          $sql = "INSERT INTO plans(planName,type,description,price) VALUES (:planName,:type,:description,:price)";
                $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "plans",
                    implode(", ", array_keys($new_Plan)),
                    ":" . implode(", :", array_keys($new_Plan))
                );
                $statement = $connection->prepare($sql);
                $statement->execute($new_Plan);
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }
        }
        ?>
        <a href="adminControl.php"><button name="Submit" value="Back" class="button" type="Submit">Back</button></a>
    </div>
<?php include "../templates/footer.php"; ?>