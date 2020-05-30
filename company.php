<?php

class Company {
   var $name;
   
   public function setCompanyName($name) {
	   $this->name=$name;
	   return $this;
   }
   
   public function getCompanyName(){
	   echo $this->name;
   }
}  
?>