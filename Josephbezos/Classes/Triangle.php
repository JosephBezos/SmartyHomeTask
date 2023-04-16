<?php

namespace Josephbezos\Tilted\Classes;

class Triangle extends Shape {
    protected $base;
    protected $height;

    public function __construct($base, $height, $color = 'red') {
        parent::__construct($color);
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea() {
        return 0.5 * $this->base * $this->height;
    }
}