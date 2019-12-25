<?php

$merchant_id         = $_POST['merchant_id'];
$order_id             = $_POST['order_id'];
$payhere_amount     = $_POST['payhere_amount'];
$payhere_currency    = $_POST['payhere_currency'];
$status_code         = $_POST['status_code'];
$md5sig                = $_POST['md5sig'];

$merchant_secret = '1213556'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

$local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

if (($local_md5sig === $md5sig) AND ($status_code == 2) ){
    //TODO: Update your database as payment success
}

?>







<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sofalk | Payments</title>

    <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dist/css/topbar.css" type="text/css">
    <link rel="stylesheet" href="dist/css/index.css" type="text/css">
    <link rel="stylesheet" href="dist/css/slider.css" type="text/css">
    <link rel="stylesheet" href="dist/css/navigation.css" type="text/css">

    <!--start font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--end font-->

    <!-- start Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!-- End Bootstrap-->


    <style>

        body{
            background: rgb(2,0,36);
            background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 26%, rgba(0,212,255,1) 100%);
        }
        form{
            margin: 0px auto;
            width: 480px;
            height: auto;
            border: 1px solid #0c5460;
            background-color: white;
            padding: 10px;
        }

    </style>

</head>
<body>

<?php require_once 'header.php'?>
<br>
<div id="pgate">
    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
        <input type="hidden" name="merchant_id" value="1213556">    <!-- Replace your Merchant ID -->
        <input type="hidden" name="return_url" value="http://sample.com/return">
        <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
        <input type="hidden" name="notify_url" value="http://sample.com/notify">
        <br><br>Item Details<br>
        <input type="text" name="order_id" value="ItemNo12345">
        <input type="text" name="items" value="Door bell wireless"><br>
        <input type="text" name="currency" value="LKR">
        <input type="text" name="amount" value="1000">
        <br><br>Customer Details<br>
        <input type="text" name="first_name" value="Saman">
        <input type="text" name="last_name" value="Perera"><br>
        <input type="text" name="email" value="samanp@gmail.com">
        <input type="text" name="phone" value="0771234567"><br>
        <input type="text" name="address" value="No.1, Galle Road">
        <input type="text" name="city" value="Colombo">
        <input type="hidden" name="country" value="Sri Lanka"><br><br>
        <input type="submit" value="Buy Now" class="btn btn-primary" style="margin-left: 20px; margin-bottom: 20px; background-color: #f39c12">
    </form>
</div>

<br>

<?php require_once 'footer.php'?>
</body>
</html>
