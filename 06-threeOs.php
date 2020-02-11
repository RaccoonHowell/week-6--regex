<?php

declare(strict_types=1);

function threeOs (string $str) : bool {

    return preg_match("/[oO]{3,}/", $str) === 1;
}

var_dump(threeOs("Hello")); // bool(false)
var_dump(threeOs("Helloo")); // bool(false)
var_dump(threeOs("Hellooo")); // bool(true)
var_dump(threeOs("HelloOoOo")); // bool(true)

// Create a function, threeOs, that returns true if a string contains three of more o or O characters in a row. Make sure it returns a boolean value.