<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 06/08/2018
 * Time: 2:30 PM
 */

session_start();

include "setup.php";
include "control/database.php";

if ($_SESSION['token'] !== $_REQUEST['token']){
    echo "<h1>Server Error</h1>";
}else {
    $userID = $_SESSION['token'];
    $id = $_SESSION['user-id'];
    $password = $_REQUEST['password'];
    $full_name = $_REQUEST['full-name'];
    $mobile = $_REQUEST['mobile'];

    if (!is_uploaded_file($_FILES['file-input']['name'])) {

        $add_data = "UPDATE `user_account` SET  `full_name`='$full_name', `passwd`='$password', `mobile`='$mobile' WHERE (`userID`='$id')";
        $result = $conn->query($add_data);

        if ($result == TRUE) {

            $date = date("Y-m-d H:i:s");
            $data_note = "update profile";
            $notification = "INSERT INTO `notifications` (`userID`,`note_date`,`notifications`,`typeID`) VALUES ('$userID','$date', '$data_note','6')";
            $result = $conn->query($notification);

            $_SESSION['client-name'] = $full_name;
            header("location: {$_SESSION['page-url']}?page=user.account&token={$_SESSION['token']}");
        }

    } else {

        $file = $_FILES['file-input'];
        $file_name = $_FILES['file-input']['name'];
        $file_tmp_name = $_FILES['file-input']['tmp_name'];
        $file_size = $_FILES['file-input']['size'];
        $file_error = $_FILES['file-input']['error'];
        $file_type = $_FILES['file-input']['type'];

        $fileExt = explode('.', $file_name);
        $file_actualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'bmp');
        if (in_array($file_actualExt, $allowed)) {
            if ($file_error === 0) {
                if ($file_size < 10485760) {
                    $file_new_name = uniqid('', true) . "." . $file_actualExt;
                    $file_destination = "uploads/" . $file_new_name;
                    move_uploaded_file($file_tmp_name, $file_destination);

                    $_SESSION['picture'] = $file_destination;

                    $add_data = "UPDATE `user_account` SET  `full_name`='$full_name', `passwd`='$password', `mobile`='$mobile', `photo`='$file_destination' WHERE (`userID`='$id')";
                    $result = $conn->query($add_data);

                    if ($result == TRUE) {

                        $date = date("Y-m-d H:i:s");
                        $data_note = "update profile";
                        $notification = "INSERT INTO `notifications` (`userID`,`note_date`,`notifications`,`typeID`) VALUES ('$userID','$date', '$data_note','6')";
                        $result = $conn->query($notification);

                        header("location: {$_SESSION['page-url']}?page=user.account&token={$_SESSION['token']}");

                    } else {
                        echo "file is to large to upload";
                        // header("location: {$_SESSION['user-page-url']}?page=".$url_page."&token={$_SESSION['user-token']}&box=3&msg=2");
                    }
                } else {
                    echo "there was an error uploading the file";
                    // header("location: {$_SESSION['user-page-url']}?page=".$url_page."&token={$_SESSION['user-token']}&box=3&msg=6");
                }
            } else {
                echo "you can nout upload this kind of file";
                // header("location: {$_SESSION['user-page-url']}?page=".$url_page."&token={$_SESSION['user-token']}&box=3&msg=7");
            }
        }
    }
}
