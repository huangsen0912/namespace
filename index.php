<?php
use \a\b\c\A;
use \d\e\f\A as B;
require_once("a.php");
require_once("b.php");


//$a=new \a\b\c\A();
//$a->action();

// $b=new \d\e\f\A();
// $b->action();

$a = new A();
$a->action();

$b = new B();
$b->action();

?>