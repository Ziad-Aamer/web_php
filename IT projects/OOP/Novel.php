<?php
include_once("Books.php");
class Novel extends Books {
	
   var $publisher;
  
   function setPublisher($par){
      $this->publisher = $par;
   }
   
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
   // Overriding
   
   function display(){
		  echo "This display in Novel class <br>";
	  }
}
?>