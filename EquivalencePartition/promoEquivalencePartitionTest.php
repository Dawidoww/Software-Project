<?php

$price = 40;
$amount = 10;
$total = $price % $amount;
$promoCode = readline('Enter code: ');
if($promoCode == 'EASTER'){
    echo 'VALID CODE';
}
else{
    echo 'INVALID CODE';
}
$price = $price % $amount;

if($total == 36){
    echo 'VALID PRICE';
}
else{
    echo 'INVALID PRICE';
}

?>