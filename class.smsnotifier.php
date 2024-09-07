<?php
include_once("interface.notifier.php");

class SMSNotifier implements Notifier
{
    public function notify()
    {
        echo "SMS Sent!";
    }
}
?>
