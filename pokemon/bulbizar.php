<?php
class Bulbizar extends Pokemon
{

    public function __construct ($level)
    {
        $name = 'Bulbizar';
        $max_life = 100 + $life_up;
        $life_up = 5 * $level;
        $strength_up = 5 * $level;
        $life = $max_life;
        $level = 1 + $level;
        $type = 'nature';
        $strength = 10;

        parent::__construct($name, $max_life, $life, $level, $type, $strength,$life_up,$strength_up);
    }

}