<?php

$amount= 3000;
$merchant_id = "12xxxxxx";
$order_id = uniqid();
$merchant_secret="enteryoursecrethere";
$currency = "LKR";


$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

$array = [];



$array["items"]= "Brown Sugar"; 
$array["first_name"]= "Kaveen";
$array["last_name"]= "Ranathunga";
$array["email"]= "krana@gmail.com";
$array["phone"]= "0771234567";
$array["address"]= "No.1, Galle Road";
$array["city"]= "Colombo";
$array["amount"]= $amount;
$array["merchant_id"]= $merchant_id;
$array["order_id"]= $order_id;
$array["currency"]= $currency;
$array["hash"]= $hash;

$jsonObj = json_encode($array); 
echo $jsonObj;   

// echo $hash;

?>
