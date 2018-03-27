<?php

class Animal
{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = strtoupper($name);
    }
    
    public function cri(): string
    {
        return "L'animal cri";
    }
    
    public function __toString()
    {
        return "C'est un animal : ". $this->name;
    }
}
