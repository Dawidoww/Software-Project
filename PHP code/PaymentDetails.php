<?php include "../templates/header.php"; ?>
    <link rel="stylesheet" href="../css/payment.css"/>
    <div class="container_pay">
        <form method="post">
            <h2 class="form-register-heading">Payment</h2>
            <label1 for="cardNumber">Card Number</label1>
            <input type="text" name="cardNumber" id="cardNumber" placeholder="xxxx-xxxx-xxxx-xxxx" >
            <label1 for="type">Card Type</label1>
            <input type="text" name="type" id="type" placeholder="VISA OR MASTERCARD" required >
            <label1 for="cvv">CVV</label1>
            <input type="text" name="cvv" id="cvv" placeholder="xxx" >
            <br><br>
            <button name="submit" value="Pay now" class="button" type="submit">Pay Now</button>
        </form>
        <br>
        <?php if (isset($_POST['submit']) && $statement) {?>
            <?php echo escape($_POST['cardNumber']);} ?>

        <?php
        if (isset($_POST['submit'])) {
            try {
                require_once '../SRC/connectDB.php';
                require_once '../PHP code/Classes/PaymentTest.php';
                $validation = new PaymentTest($_POST);
                $errors = $validation->validatePaymentForm();

                $new_Card = array(
                    "cardNumber" => $_POST['cardNumber'],
                    "type" => $_POST['type'],
                    "cvv" => $_POST['cvv']
                );
                //     $sql = "INSERT INTO payment(cardNumber) VALUES (:cardNumber)";
                //          $sql = "INSERT INTO card(cardNumber,type,cvv) VALUES (111,'VISA',999)";
                $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "card",
                    implode(", ", array_keys($new_Card)),
                    ":" . implode(", :", array_keys($new_Card))
                );
                $statement = $connection->prepare($sql);
                $statement->execute($new_Card);
                header("location:confirmation.php");
            } catch(PDOException $error) {
                //     echo $sql . "<br>" . $error->getMessage();
            }
        }
        ?>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){?>
        <div class="error">
            <?php echo $errors['cardNumber'] ?? '';?><br>
            <?php echo $errors['type'] ?? ''; ?><br>
            <?php  echo $errors['cvv'] ?? ''; }?>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            try {
                require_once '../SRC/connectDB.php';
                $new_Pay = array(
                    "cardNumber" => $_POST['cardNumber']
                );

                //     $sql = "INSERT INTO payment(cardNumber) VALUES (:cardNumber)";
                //          $sql = "INSERT INTO card(cardNumber,type,cvv) VALUES (111,'VISA',999)";

                $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "payment",
                    implode(", ", array_keys($new_Pay)),
                    ":" . implode(", :", array_keys($new_Pay))
                );
                $statement = $connection->prepare($sql);
                $statement->execute($new_Pay);
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }
        }
        ?>
        <?php if (isset($_POST['submit'])){

        } ?>
    </div>
<?php
include "../templates/footer.php"; ?>