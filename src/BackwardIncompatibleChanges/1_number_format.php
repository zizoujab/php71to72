<?php
// Prevent number_format() from returning negative zero
// number_format : Formats a number with grouped thousands
// and optionally decimal digits using the rounding half up rule.
$numbers = [-0.1, 0.5,  1.1, 10000, 7000];
foreach ($numbers as $number) {
    echo str_pad("$number", 5, " ", STR_PAD_LEFT)
        . " => "
        . str_pad(number_format($number), 2, " ", STR_PAD_LEFT)
        . PHP_EOL;
}

var_dump(number_format(-0,1));
