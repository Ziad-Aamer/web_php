<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
	  
      function __construct( $par1, $par2 ) {
		$this->title = $par1;
		$this->price = $par2;
	  }
     
      function getPrice(){
         echo $this->price ."<br/>";
      }
     
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }
   

?>