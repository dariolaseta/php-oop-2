<?php 

class Product{
    public $names;
    public $prices;
    public $categories;
    public $images;

    function __construct($_name){
        $this->names = $_name;
    }

    public function price($_price){
        $this->prices = $_price;
    }

    public function category($_categories){
        $this->categories = $_categories;
    }

    public function image($_image){
        $this->images = $_image;
    }

    public function returnPrice(){
        return $this->prices;
    }
    public function returnCategories(){
        return $this->categories;
    }
    public function returnProductImg(){
        return $this->images;
    }
}



?>