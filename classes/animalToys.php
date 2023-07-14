<?php 
require_once __DIR__ . "./product.php";

class AnimalToys extends Product{
    public $toysType = "Cibo";
    public $toysImg = "img.jpg";

    public function returnToyIcon(){
        return $this->toysType;
    }

    public function returnToyImg(){
        return $this->toysImg;
    }
}
?>