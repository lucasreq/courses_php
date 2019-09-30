<?php

$end = FALSE;
$my_turn = TRUE;

while(!end)
{
    while ($bulbiz->life > 0 || $carapu->life > 0) {
        if($this->my_turn = TRUE) {
            if($bulbiz->life <= 50 && $stock <= 0)
            {
                $potion_1->heal($bulbiz);
            }
            elseif($bulbiz->life <= 30 && $stock <= 0)
            {
                $potion_2->heal($bulbiz);
            }
            elseif($bulbiz->life <= 10 && $stock <= 0)
            {
                $potion_3->heal($bulbiz);
            }
            else{
                if($carapu->life <= 40 && $stock <= 0)
                {
                    $poke_1->capture($carapu);
                    $stock=-1;
                }
                elseif($carapu->life <= 20 && $stock <= 0)
                {
                    $poke_2->capture($carapu);
                    $stock=-1;
                }
                elseif($carapu->life <= 5 && $stock <= 0)
                {
                    $poke_3->capture($carapu);
                    $stock=-1;
                }

                $bulbiz->attack($carapu);
                $this->$my_turn = FALSE;
            }
        }
        else{
            $carapu->attack($bulbiz);
            $this->$my_turn = TRUE;
        }
    }
}