<?php

class person{
    public $name = "My age";
    public $age;
    public $lim0n;
    public function func()
    {
     return  $this->age;
    }
    public function myfuction($myage){
         $this->age = $myage;
    }
}
class childs extends person{
    
}
$obj1 = new person;

echo $obj1->lim0n = "Limon" . "<br>";
 $obj1->myfuction(24);
 echo $obj1->func() ."<br>";
 
echo (new childs)->name;
 

?>