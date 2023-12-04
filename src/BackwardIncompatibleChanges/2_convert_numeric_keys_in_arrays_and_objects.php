<?php
$arr = [ 0 => 1];
$obj = (object)$arr;
var_dump($obj, $obj->{'0'}, $obj->{0});

$obj = new class {
    public function __construct()
    {
        $this->{0} = 1;
    }
};
$arr = (array)$obj;
var_dump($arr, $arr[0], $arr["0"]);
