<?php

namespace Josephbezos\Tilted\Classes\Traits;

trait Loggable
{
    public function log($message) {
        echo "Logging message: $message";
    }
}