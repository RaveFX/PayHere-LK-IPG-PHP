<?php

$amount= 3000;
$merchant_id = "1223171";
$order_id = uniqid();
$merchant_secret="MzIzNTQyMzEwNjI1MTE0NjI4MjkyMTExMjk0Njk4MTQ0MTcxNDA4Mw==";
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