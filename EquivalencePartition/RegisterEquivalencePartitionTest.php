<?php

$name = readline('Enter name: ');
if(preg_match('/^[a-zA-Z]{3,20}/', $name)){
    echo 'VALID NAME';
}
else{
    echo 'INVALID NAME';
}

$surname = readline('Enter surname: ') ;
if(preg_match('/^[a-zA-Z]{3,20}/', $surname)){
    echo 'VALID SURNAME';
}
else{
    echo 'INVALID SURNAME';
}

$email = readline('Enter email: ');
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo 'VALID User Email';
}
else {
    echo 'INVALID User Email';
}

$password = readline('Enter Password:');
if(preg_match('/^[a-zA-Z0-9]{6,12}$/', $password)){
    echo 'VALID User Password';
}
else{
    echo 'INVALID User Password';
}

?>