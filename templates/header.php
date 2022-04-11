<?php
session_start();
//if($_SESSION['Active'] == false){
//header("location:login.php");
//exit;} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Software/WebDev Project</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css"/>
    <link rel="stylesheet" href="../css/footer.css"/>

</head>
<body>
<div class="container">
    <nav>
        <label class="logo">Critical Fitness</label>
        <ul>
            <li><a href="../PHP%20code/test1.php">Home</a></li>
            <li><a href="../PHP code/products.php">Products</a></li>
            <li><a href="../PHP code/login.php">Login</a></li>
            <li><a href="../PHP code/register.php">Register</a></li>

        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
</div>
</body>
</html>