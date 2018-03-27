<?php

class Dog extends Animal
{
    public function ouaf()
    {
        print parent::cri(). " : Waf Waf";
    }
}
