<?php include "../templates/header.php"; ?>

    <div class="container">
        <form method="post">
            <h2 class="form-register-heading">Payment</h2>
            <label1 for="cardNumber">Card Number</label1>
            <input type="text" name="number" id="cardNumber" required>
            <label1 for="type">Card Type</label1>
            <input type="text" name="type" id="type" required>
            <label1 for="cvv">CVV</label1>
            <input type="text" name="cvv" id="cvv" required>
            <button name="submit" value="Paynow" class="button" type="submit">Pay Now</button>
        </form>
        <br>
        <?php if (isset($_POST['submit']) && $statement) {?>
            <?php echo escape($_POST['cardNumber']); ?> successfully added.
        <?php } ?>
        <?php
        if (isset($_POST['submit'])) {
            try {
                require_once '../SRC/connectDB.php';
                $new_Card = array(
                    "cardNumber" => $_POST['cardNumber'],
                    "type" => $_POST['type'],
                    "cvv" => $_POST['cvv']
                );
             //   $sql = "INSERT INTO payment(cardNumber,type,cvv) VALUES (111,'VISA',999)";
                $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "card",
                    implode(", ", array_keys($new_Card)),
                    ":" . implode(", :", array_keys($new_Card))
                );
                $statement = $connection->prepare($sql);
                $statement->execute($new_Card);
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }
        }
        ?>
    </div>
<?php include "../templates/footer.php"; ?>