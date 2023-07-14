<?php 
require __DIR__ . "/product.php";

class AnimalToys extends Product{
    public $toysType = "Giochi";
    public $toysImg = "toysimg.jpg";

    public function returnToysType(){
        return $this->toysType;
    }

    public function returnToysImg(){
        return $this->toysImg;
    }
}

?>