<?php
namespace Dir;

class Aula 
{
    private $pupitres;
    
    public function __construct()
    {
        $this->pupitres = 22;
    }

    public function get_pupitres() {
        return $this->pupitres;
    }
}