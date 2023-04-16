<?php

namespace Josephbezos\Tilted\Classes;

class Circle extends Shape implements Printable {
    protected $radius;

    public function __construct($radius, $color = 'red') {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getDescription() {
        return "A circle of radius " . $this->radius . " and color " . $this->color;
    }
}
