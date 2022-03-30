<?php require_once('../templates/header.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Sign in</title>
</head>

<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" >Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input name="Email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <br> <label for="inputPassword">Password&nbsp;</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
    </form>
    <?php

    if(isset($_POST['Submit']))
    {
        if( ($_POST['Email'] == $Email) && ($_POST['Password'] == $Password) )
        {
            echo 'Success';
        }
        else
            echo 'Incorrect Username or Password';
    }
    ?>
</div>
</body>
</html>
