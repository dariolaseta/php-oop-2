<?php 
require __DIR__ . "/product.php";

class AnimalFood extends Product{
    public $type = "Cibo";
    public $img = "img.jpg";

    public function returnFoodIcon(){
        return $this->type;
    }

    public function returnFoodImg(){
        return $this->img;
    }
}
?>