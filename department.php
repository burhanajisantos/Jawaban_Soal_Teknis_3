<?php

class Department {
   var $departmentname;
   
   public function setDepartmentName($departmentname) {
	   $this->departmentname=$departmentname;
	   return $this;
   }
   
   public function getDepartmentName(){
	   echo $this->departmentname;
   }
}  
?>