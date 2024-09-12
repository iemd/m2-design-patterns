<?php
include_once("interface.observer.php");

class EmailNotifier implements Observer
{
    // send alerts using Email
    public function notify()
    {
        echo "Notifying via Email"."<br/>";
    }
}
?>
