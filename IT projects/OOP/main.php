<?php
include  ("Books.php");
   
$physics = new Books;
$maths = new Books;
$chemistry = new Books;

$physics->setTitle("Physics for High School");

 $physics->getTitle();
/*$physics->getPrice();

$chemistry->getTitle();
$chemistry->getPrice();

$maths->getTitle();
$maths->getPrice();
*/

?>