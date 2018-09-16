<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01/08/2018
 * Time: 11:05 PM
 */

session_start();
require "setup.php";
require "control/database.inc";

$_SESSION['page-url'] = "navigation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
}else{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
}

if (empty($username) || empty($password)){
    header("location: index.php");
}else{

    if ($username === ADMIN_USER and $password === ADMIN_PASSWORD){
        $_SESSION['token'] = ADMIN_TOKEN;
        $_SESSION['user-name'] = $username;
        $_SESSION['email'] = ADMIN_EMAIL;
        $_SESSION['picture'] = ADMIN_PICTURE;

        header("location: {$_SESSION['page-url']}?page=dashboard&token={$_SESSION['token']}");
    }else{

        $user_sql = "SELECT * FROM get_user_account where username = '$username' and passwd = '$password'";
        $user_result = $conn->query($user_sql);
        $row_record = $user_result->fetch_assoc();

        if ($row_record <> 0){

            $id = $row_record['userID'];
            $token = $row_record['api_key'];
            $username = $row_record['username'];
            $email = $row_record['email'];
            $picture = $row_record['photo'];
            $client_name = $row_record['full_name'];


            $_SESSION['sms-user-id'] = $id;
            $_SESSION['token'] = $token;
            $_SESSION['user-name'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['picture'] = $picture;
            $_SESSION['client-name'] = $client_name;

            if (is_null($row_record['full_name'])){
                header("location: {$_SESSION['page-url']}?page=user.account&token={$_SESSION['token']}");
            }else{
                header("location: {$_SESSION['page-url']}?page=dashboard&token={$_SESSION['token']}");
            }

        }else{
            header("location: index.php");
        }
    }
}