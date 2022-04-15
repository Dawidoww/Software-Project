<?php require_once('../templates/header.php'); ?>
<link rel="stylesheet" href="../css/homepage.css"/>
<div class="page">
    <div class="box1">
        <h2> Status: You are logged in <?php echo $_SESSION['email'];?></h2>
        <form action="logout.php" method="post" name="Logout" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    </div>

    <div class="box2">
        <h1>About us</h1>
        <p>Ut eu dolor malesuada, egestas felis id, accumsan sapien. Vestibulum aliquet scelerisque viverra. Donec id lectus enim. Nullam consectetur feugiat lectus, vel rhoncus lorem pretium id. Integer eleifend, ante a pharetra consequat, sem nunc malesuada sapien, quis scelerisque orci elit non lacus. Donec euismod, lectus et elementum fermentum, metus sapien iaculis odio, in scelerisque leo ex eget felis. Nunc massa massa, feugiat congue lacus a, laoreet faucibus nunc. Ut faucibus, neque in finibus imperdiet, felis justo maximus quam, a scelerisque lectus urna sed lacus. Aenean pretium vitae sapien a vulputate. Morbi tortor quam, dictum sit amet quam id, finibus lacinia velit. Mauris dapibus fringilla nibh.Ut eu dolor malesuada, egestas felis id, accumsan sapien. Vestibulum aliquet scelerisque viverra.Donec id lectus enim. Nullam consectetur feugiat lectus </p>
    </div>

    <div class="box3">
        <h1>Flex item </h1>
        <p>Ut eu dolor malesuada, egestas felis id, accumsan sapien. Vestibulum aliquet scelerisque viverra. Donec id lectus enim. Nullam consectetur feugiat lectus, vel rhoncus lorem pretium id. Integer eleifend, ante a pharetra consequat, sem nunc malesuada sapien, quis scelerisque orci elit non lacus. Donec euismod, lectus et elementum fermentum, metus sapien iaculis odio, in scelerisque leo ex eget felis. Nunc massa massa, feugiat congue lacus a, laoreet faucibus nunc. Ut faucibus, neque in finibus imperdiet, felis justo maximus quam, a scelerisque lectus urna sed lacus. Aenean pretium vitae sapien a vulputate. Morbi tortor quam, dictum sit amet quam id, finibus lacinia velit. Mauris dapibus fringilla nibh.Ut eu dolor malesuada, egestas felis id, accumsan sapien. Vestibulum aliquet scelerisque viverra. Donec id lectus enim. Nullam consectetur feugiat lectus, vel rhoncus lorem pretium id. Integer eleifend, ante a pharetra consequat, sem nunc malesuada sapien, quis scelerisque orci elit non lacus. Donec euismod, lectus et elementum fermentum, metus sapien iaculis odio, in scelerisque leo ex eget felis. Nunc massa massa, feugiat congue lacus a, laoreet faucibus nunc.</p>
    </div>
</div>
<?php require_once('../templates/footer.php'); ?>
