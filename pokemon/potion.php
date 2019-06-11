<?php
abstract class Potion implements Usable
{
    protected $name;
    protected $level;
    protected $stock;

    public function __construct($name,$level)
    {
        $this->name = $name;
        $this->level = $level;
        $this->stock = $stock;
    }

    public function heal ($target)
    {
        if ($target->life <= $max_life)
        {
            $target->life += (10 + $level);
        }
        else 
        {
            return FALSE;
        }
    }

    public function use($pokemon)
    {
        $this->heal($pokemon);
    }
}