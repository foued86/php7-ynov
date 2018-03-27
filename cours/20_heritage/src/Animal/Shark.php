<?php

class Shark extends Animal
{
    private $ocean;
    
    public function __construct($name, string $ocean)
    {
        parent::__construct($name);
        
        $this->ocean = $ocean;
    }
}
