<?php
include "company.php";
include "department.php";
class Employee{
    
    var $employeename = 'Aji';
    var $employeetitle = 'Pemula';
    var $employeeday = 22;

    public function setEmployeeName($employeename)
    {
	$this->employeename = $employeename;
     
    }
    public function getEmployeeTitle()
    {
	$this->employeetitle = $employeetitle;
    }
    
    public function getEmployeeProfile() {
        $this->name = new Company();
        $this->name->setCompanyName("PT.Maju Terus");
	$this->departmentname = new Department();
	$this->departmentname->setDepartmentName("QA");
    }
    public function getEmployeeMonthlySalary($day)
    {
	$this->employeeday = $employeeday;
    }
    public function index() {
	echo "Nama Karyawan : ";
	echo $this->employeename . "<br/>";
	echo "Title Karyawan : ";
	echo $this->employeetitle . "<br/>";
        echo "Nama Perusahaan : " ;
        echo $this->name->getCompanyName() . "<br />";
        echo "Divisi Perusahaan : " ;
        echo $this->departmentname->getDepartmentName() . "<br />";
	echo "Harga : " ;
        echo $this->employeeday*80000 . "<br />";
	echo "<br></br>";
	echo "1 bulan = 22 hari kerja<br/>";
	echo "1 hari = 80.000";
    }
    
}
$Var = new Employee();
$Var->getEmployeeProfile();
$Var->index();

?>