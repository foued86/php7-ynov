<?php

namespace Creature\Animal;

class Cat extends Animal
{
    public function miaou()
    {        
        print parent::cri(). " : Miaou";
    }
    
    public function __toString()
    {
        return "C'est un chat : ". $this->name;
    }
}
