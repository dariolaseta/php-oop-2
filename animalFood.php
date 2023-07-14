<?php 
require __DIR__ . "/product.php";

class AnimalFood extends Product{
    public $foodType = "Cibo";
    public $foodImg = "img.jpg";

    public function returnFoodIcon(){
        return $this->foodType;
    }

    public function returnFoodImg(){
        return $this->foodImg;
    }
}
?>