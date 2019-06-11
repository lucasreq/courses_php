<?php

abstract class Pokemon 
{
    protected $name;
    protected $life;
    protected $level;
    protected $type;
    protected $strength;
    protected $max_life;
    protected $life_up;
    protected $strength_up;

    public function __construct ($name,$max_life, $life, $level, $type, $strength, $life_up, $strength_up)
    {
        $this->name = $name;
        $this->max_life = $max_life;
        $this->life_up = $life_up;
        $this->strength_up = $strength_up;
        $this->life = $life;
        $this->level = $level;
        $this->type = $type;
        $this->strength = $strength;
        $this->life_bar = $lifebar;
    }

    public function level_up ($strength_up,$life_up)
    {
        $strength_up += 1;
        $life_up += 1;
    }

    public function attack ($target)
    {
        $damages = $this->ceil(strength * (rand(900, 1100) / 1000));
        $target->attacked($damages);
    }

    public function attacked ($damages) 
    {
        $this->life -= $damages;
    }

    public function life_bar ($life)
    {
        $this->$lifebar = ($life/$max_life) * 100;
    }

    public function die ()
    {
        if ($this->life <= 0) 
        {
            echo("Pokemon mort");
        }
    }
}