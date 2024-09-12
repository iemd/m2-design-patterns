<?php
include_once("interface.observer.php");

class YMNotifier implements Observer
{
    // send alerts using YM
    public function notify()
    {
        echo "Notifying via YM"."<br/>";
    }
}
?>
