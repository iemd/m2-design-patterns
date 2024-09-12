<?php
include_once("class.ymnotifier.php");
include_once("class.ymailnotifier.php");
include_once("class.observable.php");

/**
 * An Observer pattern consists of two types of objects; one is an observable object,
 * which is observed by observer object.
 * When the state of an observable object changes, it notifies all observers registered with it.
 */

$postmonitor = new Observable();

$ym = new YMNotifier();
$em = new EmailNotifier();
$s = new stdClass();

$postmonitor->register($ym);
$postmonitor->register($em);
$postmonitor->register($s);

$postmonitor->stateChange();
?>
