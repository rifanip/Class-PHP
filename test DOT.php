<?php

class Company {
  
  // properti
  var $name;
   
   public function tampung($data) {
       $this->name=$data;
       return $this;
   }
   
   public function cetak(){
       echo $this->name;
   }
}
  
?>

<?php

class Department {
  
  // properti
  var $namedep;
   
   public function temp($data) {
       $this->namedep=$data;
       return $this;
   }
   
   public function cetak1(){
       echo $this->namedep;
   }
}
  
?>

<?php

class Employee {
  
  // properti
  var $nameemp;
  var $title;
  int $salary;
   
   public function temp1($data) {
       $this->nameemp=$data;
	   $this->title=$data;
	   $this->salary=$data;
       return $this;
   }
   
   public function cetak2(){
       echo $this->nameemp;
	   echo $this->title;
	   echo $this->salary;
   }
}
  
?>

<?php

class Panggil{
    
    var $website;
    public function homepage($url) {
        $this->hani = new Company(); 
        $this->hani->tampung("PT DOT Indonesia");
		
		$this->hani = new Department(); 
        $this->hani->temp("IT");
		
		$this->hani = new Employee(); 
        $this->hani->temp1("Rifatul Hanifah, Quality Assurance, Rp 10.000.000");
        
        $this->website=$url;
         
    }
    public function index() {
        echo "Company :" ;
        echo $this->hani->cetak() . "<br />";
		echo "Department :" ;
        echo $this->hani->cetak1() . "<br />";
		echo "Employee :" ;
        echo $this->hani->cetak2() . "<br />";
		
    }
    
}
$Var = new Panggil();
$Var->homepage("localhost");
$Var->index();


?>