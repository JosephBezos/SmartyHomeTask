<?php

namespace Josephbezos\Tilted\Classes;

use Josephbezos\Tilted\Classes\Traits\Loggable;

class Square extends Shape {
    use Loggable;

    protected $length;

    public function __construct($length, $color = 'red') {
        parent::__construct($color);
        $this->length = $length;
    }

    public function getArea() {
        return pow($this->length, 2);
    }
}
