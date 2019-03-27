<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 01/08/2018
 * Time: 9:57 PM
 */

session_start();

include "setup.php";
include "control/database.php";
include "control/template.label.php";
include "control/session.php";

require "modules/menu.sidebar.module";
include "modules/function.module";
include "modules/data.function.module";
require "modules/message.module";

if (!isset($_SESSION['token'])){
    header("location: index.php");
}else{
    $url = $_SESSION['page-url'];
    $page = $_REQUEST['page'];
    $token = $_REQUEST['token'];

    if(!$_SESSION['token'] === $token){
        header("location: index.php");
    }else{

        switch ($page){

            case "logout";
                logout();
            break;

            case "model";
                require "modules/model.function.module";
            break;

            case"dashboard";

            if ($_GET['token'] === ADMIN_TOKEN){
                $template->overview = "Dashboard";
                $template->addItem ="<button type='button' class='btn btn-secondary mb-1' data-toggle='modal' data-target='#quick-sms'>
											Quick SMS
										</button>";
                $template->body = "view/admin/admin.dashboard.phtml";
                include "template/default.php";
            }else{
                $template->overview = "Dashboard";
                $template->addItem ="<button type='button' class='btn btn-secondary mb-1' data-toggle='modal' data-target='#quick-sms'>
											Quick SMS
										</button>";
                $template->body = "view/dashboard.phtml";
                include "template/default.php";
            }

            break;

            case"address-book";
                $template->overview = "Address Book";
                $template->addItem = "<a href='{$template->contact}' class='au-btn au-btn-icon au-btn--blue'>
                                        <i class='zmdi zmdi-plus'></i>
                                            Add Contact
                                      </a>";
                $template->body = "view/address.book.phtml";
                include "template/default.php";
            break;

            case"drafts";
                $template->overview = "Drafts";
                $template->addItem = "<a href='{$template->new_drafts}' class='au-btn au-btn-icon au-btn--blue'>
                                        <i class='zmdi zmdi-plus'></i> 
                                            New Draft
                                      </a>";
                $template->body = "view/drafts.phtml";
                include "template/default.php";
            break;

            case"new-drafts";
                $template->overview = "Draft Message";
                $template->addItem = "";
                $template->body = "view/message.phtml";
                include "template/default.php";
            break;

            case"sent-item";
                $template->overview = "Sent Item";
                $template->addItem = "";
                $template->body = "view/sent.phtml";
                include "template/default.php";
            break;

            case "send-message";
                $template->overview = "New Message";
                $template->addItem = "";
                $template->body = "view/message.phtml";
                include "template/default.php";
            break;

            case"resend-message";
                $template->overview = "Resend Message";
                $template->body = "view/message.phtml";
                include "template/default.php";
            break;

            case"view-message";
                $template->overview = "View Message";
                $template->body = "view/message.phtml";
                include "template/default.php";
            break;

            case"delete-item";
                $template->overview = "Delete Item";
                $template->addItem ="";
                $template->body = "view/delete.phtml";
                include "template/default.php";
            break;

            case"new-contact";
                $template->overview = "Delete Item";
                $template->addItem ="";
                $template->body = "view/add.contact.phtml";
                include "template/default.php";
            break;

            case "edit.contact";
                $template->overview = "Edit Contact";
                $template->addItem ="";
                $template->body = "view/add.contact.phtml";
                include "template/default.php";
            break;

            case"admin.account";
                $template->overview = "Account";
                $template->body = "view/admin/admin.account.phtml";
                include "template/form.php";
            break;

            case"user.account";
                $template->overview = "Account";
                $template->body = "view/user.account.phtml";
                include "template/form.php";
            break;

            case"setting";
                $template->overview = "Setting";
                $template->body = "view/setting.phtml";
                include "template/form.php";
            break;

            case"user.bill";
                $template->overview = "Billing";
                $template->body = "view/user.bill.phtml";
                include "template/form.php";
            break;

            case"all-notification";
                $template->overview = "Notification";
                $template->addItem = "";
                $template->body = "view/notifications.phtml";
                include "template/default.php";
            break;

            case"all-user-account";
                $template->overview = "User Account";
                $template->body = "view/admin/list.user.account.phtml";
                include "template/default.php";
            break;

            case"top-up";
                $template->overview = "Top up create";
                $template->body = "view/admin/top.up.phtml";
                include "template/form.php";
            break;

            case"register-user.account";
                $template->overview = "Create User Account";
                $template->body = "view/admin/create.user.account.phtml";
                include "template/form.php";
            break;

            case"hash-crypt";
                $template->overview ="Hashing Crypt";
                $template->body ="view/admin/admin.hash.phtml";
                include "template/form.php";
            break;

            case"chat-message";
                header("location: https://tawk.to/iquipe");
            break;

            case"create-sql";
                $template->overview = "Create SQL";
                $template->body = "view/admin/create.sql.phtml";
                include "template/form.php";
            break;


        }
    }
}
