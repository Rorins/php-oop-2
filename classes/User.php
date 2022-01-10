<?php
//CLASS USER FATHER
class User{
   //PROPERTY
    public $name;
    public $surname;
//CONSTRUCTOR
    public function __construct($name, $surname){
        $this->name = $name; 
        $this->surname = $surname;
    }
}
?>

<?php
//CLASS PRODUCT SON
class Teen extends User{
//PROPERTY
    public $age;
    public $sale;
//CONSTRUCTOR
    public function __construct($name, $surname, $age){
        //FATHER CALL
        parent::__construct($name,$surname);
        //CHILD PARAMETER
       $this->age = $age;
    }
//METHODS
//SETSALE TO CALCULATE SALE
public function SetSale(){
//This here is Premium, if age < 18 we have 10% sale else none
    $this->sale = $this->age < 18 ? 10 : 0;
}

//GETSALE TO SET SALE AND RETURN
public function GetSale(){
    //SET SALE, we call function setsale 
    $this->SetSale();
    //return 
    return $this->sale;
    }
}
?>