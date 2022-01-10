<?php
//CLASS PRODUCT FATHER
class Product{
   //PROPERTY
    public $name;
    public $quantity;
    public $price;
//CONSTRUCTOR
    public function __construct($name,$quantity, $price){
        $this->name = $name;
        $this->quantity = $quantity; 
        $this->price = $price;
    }
}
?>

<?php
//PROPERTY
class Clothes extends Product{
    public $texture;
//CONSTRUCTOR
public function __construct($name,$quantity, $price,$texture){
    //FATHER CALL
    parent::__construct($name,$quantity,$price);
    //CHILD PARAMETER
   $this->texture = $texture;
}
//METHODS
public function GetSize(){
    return $this->texture;
}
}
?>