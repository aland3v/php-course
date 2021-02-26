<?php

namespace Code;

class Car {

    private $color;
    private $model;
    private $brand;

    public function __construct($color, $model, $brand)
    {
        $this->color = $color;
        $this->model = $model;
        $this->brand = $brand;
    }

    public function get_color() {
        return $this->color;
    } 

    public function get_model() {
        return $this->model;
    }

    public function get_brand() {
        return $this->brand;
    }

    public function set_color($color) {
        $this->color = $color;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function set_brand($brand) {
        $this->brand = $brand;
    }
}