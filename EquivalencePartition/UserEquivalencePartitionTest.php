<?php

$email = readline('Enter Email: ');
if($email != 'dawidoww15@gmail.com'){
    echo 'INVALID User Email   ';
}
else {
    echo 'VALID User Email   ';
}

$password = readline('Enter Password:');
if($password != 'Hello123' || 'Mustang'){
    echo 'INVALID User Password   ';
}
else{
    echo 'VALID User Password   ';
}
?>