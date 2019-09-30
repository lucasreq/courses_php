<?php
abstract class Pokeball implements usable
{
    protected $name;
    protected $level_pokeball;
    protected $stock;

    public function __construct($name,$level_pokeball)
    {
        $this->name = $name;
        $this->level_pokeball = $level_pokeball;
        $this->stock = $stock;
    }

    public function capture ($target)
    {
        $capture_chance = (($target->max_life - $target->life) / $target->max_life) * (1 + ($target->level_pokeball - $target->level) / 25);

        if ((rand(0,1000)/1000) <= $capture_chance)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function use($pokemon)
    {
        $this->capture($pokemon);
    }
}