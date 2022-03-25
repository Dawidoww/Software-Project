<?php require_once('../templates/header.php'); ?>
<<<<<<< HEAD:login.php
<link rel="stylesheet" type="text/css" href="../css/style.css">
=======
<link rel="stylesheet" type="text/css" href="css/style.css">
>>>>>>> 582991ef0f18519ae31df74d268e52931449f3b4:PHP code/login.php
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

    /* Check if login form has been submitted */
    /* isset — Determine if a variable is declared and is different than NULL*/
    if(isset($_POST['Submit']))
    {
        /* Check if the form's username and password matches */
        /* these currently check against variable values stored in config.php but later we will see how these can be checked against information in a database*/
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
