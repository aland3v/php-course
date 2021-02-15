<?php

/**
 * function exists, para que no cargue la funcion
 * de nuevo si ya esta cargada
 */
if(!function_exists('upper')) {
    function upper($value) {
        return Text\Format::upperText($value);
    }    
}

if(!function_exists('lower')) {
    function lower($value) {
        return Text\Format::lowerText($value);
    }    
}
