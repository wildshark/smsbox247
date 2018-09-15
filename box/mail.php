<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 12/08/2018
 * Time: 6:56 AM
 */

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("andyquayegh@outlook.com","My subject",$msg);
?>