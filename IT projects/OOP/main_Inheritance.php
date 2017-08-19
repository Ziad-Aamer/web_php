<?php
include("Books.php");
include("Novel.php");
   
$physics = new Books;
$story = new Novel;

$physics->setTitle("Physics for High School");
$physics->setPrice(10);
$physics->getTitle();
$physics->getPrice();
$physics->display();


$story->setTitle("The Lord of the Rings");
$story->setPrice(20);
$story->setPublisher("J.R.R. Tolkien");
$story->getTitle();
$story->getPrice();
$story->getPublisher();
$story->display(); 


?>