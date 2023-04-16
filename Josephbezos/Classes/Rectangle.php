<?php

namespace Josephbezos\Tilted\Classes;

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height, $color = 'red') {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}