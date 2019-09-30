<?php

class Poke_1 extends Pokeball
{
    public function __construct($name,$level_pokeball)
    {
        $this->name = "pokeball";
        $this->level_pokeball = 1;
        $this->stock = 3;
    }
}