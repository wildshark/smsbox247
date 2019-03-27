<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 02/08/2018
 * Time: 6:33 AM
 */

$template = new stdClass();
$user = new stdClass();
$url = new stdClass();

$user->email ="name@domain.com";
$user->username ="username";
$user->name ="name";
$user->picture ="template/images/icon/avatar-01.jpg";

//label
$template->header = "header";
$template->title = "title";
$template->overview = "Overview";
$template->content = "content";
$template->logo = "template/images/icon/sms_logo.png";
$template->footer = "Copyright © 2018 iQuipe Digital Enterprise. All rights reserved.";
$template->body ="page url";

//main template
$template->dashboard = "template/default.php";
$template->form = "template/form.element.php";
$template->table = "template/table.element.php";

//url template
$template->account = "{$_SESSION['page-url']}?page=user.account&token={$_SESSION['token']}";
$template->setting = "{$_SESSION['page-url']}?page=setting&token={$_SESSION['token']}";
$template->billing = "{$_SESSION['page-url']}?page=user.bill&token={$_SESSION['token']}";
$template->logout = "{$_SESSION['page-url']}?page=logout&token={$_SESSION['token']}";
$template->contact = "{$_SESSION['page-url']}?page=new-contact&token={$_SESSION['token']}";
$template->new_drafts = "{$_SESSION['page-url']}?page=new-drafts&token={$_SESSION['token']}";
$template->notifications = "{$_SESSION['page-url']}?page=all-notification&token={$_SESSION['token']}";

//admin url template
$template->hash = "{$_SESSION['page-url']}?page=hash-crypt&token={$_SESSION['token']}";

//bottn
$template->addItem = "<a href='#' class='au-btn au-btn-icon au-btn--blue'>
                            <i class='zmdi zmdi-plus'></i>
                              add item
                      </a>";

