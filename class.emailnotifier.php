<?php
include_once("interface.notifier.php");

class EmailNotifier implements Notifier
{
    public function notify()
    {
        echo "Email Sent!";
    }
}
?>
