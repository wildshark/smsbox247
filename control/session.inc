<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01/08/2018
 * Time: 10:00 PM
 */

if (!isset($_SESSION['countdown'])){
    $_SESSION['countdown'] = 120;
    $_SESSION['time_started'] = time();
}

$now = time();
$timeSince = $now - $_SESSION['time_started'];

$remainingSeconds = abs($_SESSION['countdown'] - $timeSince);
if ($remainingSeconds > 360 ){
    session_unset();
    session_destroy();
    header("location: index.php");
    exit();
}else{

    $user->username = $_SESSION['user-name'];
    $user->email = $_SESSION['email'];

    if (isset($_SESSION['picture'])){
        $user->picture = $_SESSION['picture'];
    }else{
        $user->picture = "template/images/icon/avatar-01.jpg";
    }

//sms price per unit
    $_SESSION['sms-price'] = SMS_UNIT_PRICE;
    $_SESSION['currency'] = "NGN";
}