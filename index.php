<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01/08/2018
 * Time: 9:42 PM
 */

session_start();
session_destroy();

if (isset($_REQUEST['u'])){
    if ($_REQUEST['u'] === "sign-up"){
        require_once "template/sign.up.php";
    }elseif ($_REQUEST['u'] === "recovery") {
        require_once "template/recovery.php";
    }
}elseif(isset($_REQUEST['submit'])){
    require "setup.php";
    require "control/database.inc";
    if ($_REQUEST['submit'] === "register"){
        require "modules/sign.up.module";
    }elseif($_REQUEST['submit'] === "recovery"){
        require "modules/recovery.module";
    }
}else{
    require_once "template/login.php";
    exit();
}

