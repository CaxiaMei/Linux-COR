<?php
require_once("Payment.php");
extract($_REQUEST);

$oPayment= new Payment($conektaTokenId, $card, $name, $description, $total, $email);

if($oPayment->pay()){
    echo "1";
}else{
    echo $oPayment->error;
}

?>