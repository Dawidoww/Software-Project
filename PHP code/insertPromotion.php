<?php include "../templates/header.php"; ?>

    <link rel="stylesheet" href="../css/register.css"/>
    <div class="container2">
        <form method="post">
            <h2 class="form-register-heading">Add Promotion</h2>
            <label1 for="promo">Promotion Code</label1>
            <input type="text" name="promo" id="promo" required>
            <label1 for="amount">Discount</label1>
            <input type="text" name="amount" id="amount" required><br><br>
            <button name="submit" value="add" class="button" type="submit">Add Promotion</button><br><br>
        </form>
        <a href="adminControl.php"><button name="Submit" value="Back" class="button" type="SUBMIT">Back</button></a>
        <?php if (isset($_POST['submit']) && $statement) {?>
            <?php echo escape($_POST['promo']); ?> successfully added.
        <?php } ?>
        <?php
        if (isset($_POST['submit'])) {
            try {
                require_once '../SRC/connectDB.php';
                $new_Promo = array(
                    "promoCode" => $_POST['promo'],
                    "amount" => $_POST['amount'],
                );
                $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "promo",
                    implode(", ", array_keys($new_Promo)),
                    ":" . implode(", :", array_keys($new_Promo))
                );
                $statement = $connection->prepare($sql);
                $statement->execute($new_Promo);
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }
        }
        ?>
    </div>
<?php include "../templates/footer.php"; ?>