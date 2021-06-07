<?php
class handDoek {
    public $material = "cotton";
    public $price = "";
    public $color = "";
    public $height = 0;
    public $width = 0;
    public $weight = 0;

    public function __construct($price, $color, $weight, $height, $width){
        $this->price = $price;
        $this->color = $color;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
    }
    public function displayVar() {
        echo $this->price;
        echo $this->color;
        echo $this->weight;
        echo $this->height;
        echo $this->width;
    }
}
// echo "<pre>";

?>