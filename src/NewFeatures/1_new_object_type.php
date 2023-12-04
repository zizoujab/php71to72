<?php

// A new type, object  that can be used for parameter typing
// and return typing of any objects.
function test(object $obj): object {
//    return array();
    return new SplQueue();
}

test(json_decode('{}'));

test(new class {
});

  test("A string is not an object");