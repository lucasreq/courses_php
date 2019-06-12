<?php

//Pokemon
include './pokemon.php';
include './bulbizar.php';
include './carapuce.php';
//-----------------------
//usable
include './usable.php';
//pokeball
include './pokeball.php';
include './poke_1';
include './poke_2';
include './poke_3';

//potions
include './potion.php';
include './potion_1.php';
include './potion_2.php';
include './potion_3.php';

//-----------------------
//bot
include './bot.php';

$bulbiz = new Bulbizar(1);
$carapu = new Carapuce(1);

echo "Debut du combat";
