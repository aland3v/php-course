<?php

function get_attrs($car) {
    return "Color: ".$car->get_color().", Model: ".$car->get_model().", Brand: ".$car->get_brand()."<br />";
}

function upper($text) {
    return strtoupper($text);
}