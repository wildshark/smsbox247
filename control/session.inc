<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01/08/2018
 * Time: 10:00 PM
 */

$user->username = $_SESSION['user-name'];
$user->email = $_SESSION['email'];

if (isset($_SESSION['picture'])){
    $user->picture = $_SESSION['picture'];
}else{
    $user->picture = "template/images/icon/avatar-01.jpg";
}

//sms price per unit
$_SESSION['sms-price'] = SMS_UNIT_PRICE;

