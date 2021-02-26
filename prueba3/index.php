<?php
require __DIR__.'/vendor/autoload.php';
use Code\Car;
use Code\Bus;

$miAuto = new Car("negro", "convertible", "suzuky");

echo $miAuto->get_color()."<br/>";
echo $miAuto->get_model()."<br/>";
echo $miAuto->get_brand()."<br/>";

echo get_attrs($miAuto);

echo "Numero de asientos: ".Bus::get_number_seats()."<br/>";

$misPupitres = new Dir\Aula();
echo "Pupitres: ".$misPupitres->get_pupitres()."<br />";

echo upper('mensaje secreto');