<?php
include ("Books_with construct.php");
$physics = new Books( "Physics for High School", 10 );
$maths = new Books ( "Advanced Chemistry", 15 );
$chemistry = new Books ("Algebra", 7 );

$physics->getTitle();
$physics->getPrice();

$chemistry->getTitle();
$chemistry->getPrice();

$maths->getTitle();
$maths->getPrice();

?>