<?php

if(!function_exists('get_attrs')) {
    function get_attrs($car) {
        return "Color: ".$car->get_color().", Model: ".$car->get_model().", Brand: ".$car->get_brand()."<br />";
    }
}

if(!function_exists('upper')) {
    function upper($text) {
        return strtoupper($text);
    }
}