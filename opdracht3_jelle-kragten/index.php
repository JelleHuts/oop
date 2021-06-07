<?php
class handDoek {
    public $material = "cotton";
    public $price = "";
    public $color = "";
    public $height = 0;
    public $width = 0;
    public $weight = 0;

    public function __construct($price, $color, $weight, $height, $width){
        this->price = $price;
        this->color = $color;
        this->weight = $weight;
        this->height = $height;
        this->width = $width;
    }
}
echo "<pre>";

?>