<?php

require 'vendor/autoload.php';


Flight::route('/', function(){
	$rocketr_username = "pelana";
	$price = "1";
	$billing_email = "zodman@gmail.com";
	$title="title bla11 ";
	$username="zodman101";

    $url = "https://rocketr.net/order/". $rocketr_username."/". $price;
    $ipn_url = "http://a8dce39a.ngrok.io";
    $context =[
        'url' => $url,
        'params' =>[
            'ip_urlurl' => $ipn_url,
           'email' => $billing_email,
            'seller' => $rocketr_username,
            'title' => $title,
            'customFields' => [
                        'username' => $username
                    ],
            'price' => $price,
            'product_id' => 'order',
            'iframe' => '1' 
        ]
    ];

    Flight::render('index', $context);
});



Flight::start();


