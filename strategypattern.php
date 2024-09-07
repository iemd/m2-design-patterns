<?php
include_once("class.emailnotifier.php");
include_once("class.faxnotifier.php");
include_once("class.smsnotifier.php");

/**
 * Let's create a mock object User which we assume has a method named getNotifier().
 * This method returns either "sms" or "fax" or "email".
 */

//$user = new User();
//$notifier = $user->getNotifier();

$methods = ["email", "fax", "sms"];
$notifier = $methods[array_rand($methods)];

switch($notifier)
{
    case "email":
        $objNotifier = new EmailNotifier();
        break;
    case "sms":
        $objNotifier = new SMSNotifier();
        break;
    case "fax":
        $objNotifier = new FaxNotifier();
        break;
}

$objNotifier->notify();
?>
