<?php

//Pokemon
include 'classes/pokemon.php';
include 'classes/bulbizar.php';
include 'classes/carapuce.php';
//-----------------------
//usable
include 'classes/usable.php';
//pokeball
include 'classes/pokeball.php';
include 'classes/poke_1';
include 'classes/poke_2';
include 'classes/poke_3';

//potions
include 'classes/potion.php';
include 'classes/potion_1.php';
include 'classes/potion_2.php';
include 'classes/potion_3.php';

//-----------------------
//bot
include 'classes/bot.php';

$bulbiz = new Bulbizar(1);
$carapu = new Carapuce(1);

echo "Debut du combat";
