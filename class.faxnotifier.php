<?php
include_once("interface.notifier.php");

class FaxNotifier implements Notifier
{
    public function notify()
    {
        echo "Fax Sent!";
    }
}
?>
