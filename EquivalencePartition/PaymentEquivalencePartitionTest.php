<?php

$cardNumber = readline('Enter card number: ');
if(preg_match('/^[0-9]{16}$/', $cardNumber)){
    echo 'VALID NUMBER';
}
else{
    echo 'INVALID NUMBER';
}

$type = readline('Enter type: ');
if($type == "VISA" || "MASTERCARD"){
   echo 'VALID CARD TYPE';
}
else{
    echo 'INVALID CARD TYPE';
}

$cvv = readline('Enter cvv: ');
if(preg_match('/^[0-9]{3}$/', $cvv)){
    echo 'VALID CVV';
}
else{
    echo 'INVALID CVV';
}
?>