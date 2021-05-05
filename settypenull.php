<?php

function fooR() : int|string {
    return null;
}

function fooA(int|string|A $a = null) {
    return 1;
}

?>