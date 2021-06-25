<?php
    class Cilinder{
        public $inhoudCilinder;
        protected $oppervlakteCirkels;
        protected $oppervlakteBuis;
        protected $R;
        protected $H;

    public function __construct( $R, $H) {      
        $this->r =  $R;
        $this->h =  $H;
        $this->oppervlakteCirkels = 2 * pi() * $R * $R;
        $this->oppervlakteBuis = 2 * pi() * $R * $H;        
        $this->inhoudCilinder = $this->oppervlakteCirkels +  $this->oppervlakteBuis;
    }
};
?>