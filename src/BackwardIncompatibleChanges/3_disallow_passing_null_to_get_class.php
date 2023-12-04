<?php

class Bar {
    public function __construct()
    {
        // PHP 7.1 => "Bar"
        // PHP 7.2 => false + warning
        // Omitting the null argument will give us the same behaviour as PHP 7.1
        var_dump(get_class());
    }

}
$bar = new Bar();

