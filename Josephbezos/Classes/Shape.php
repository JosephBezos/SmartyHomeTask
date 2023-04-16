<?php

namespace Josephbezos\Tilted\Classes;

abstract class Shape {
    protected $color;

    public function __construct($color = 'red') {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    abstract public function getArea();
}