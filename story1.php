<?php
include_once "Hero.php";
include_once "Heel.php";
include_once "RedBeanPasteBreadMan.php";
include_once "CurryBreadMan.php";
include_once "CreamBread.php";
include_once "PoisonedMan.php";

$an = new RedBeanPasteBreadMan();
$curry = new CurryBreadMan();
$cream = new CreamBread();
$baikin = new PoisonedMan();

$an->hello();
$curry->hello();
$cream->hello();

$baikin->catcall();

$an->finish();
$curry->finish();
$cream->finish();
$baikin->finish();

?>
