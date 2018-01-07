<?php
echo '<h1> <center><b>CARTAS AL AZAR DE UNA BARAJA</center></br>';
echo '<h1><center >♣ ♠ ♥ ♦</center> </h1></br></br>';



$cartasSimbolos = array("♦","♥","♣","♠","♦", "♥", "♣", "♠");
$cartasNumeros = array("A", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");


$claves_Simbolos = array_rand($cartasSimbolos,5);
$claves_Numeros = array_rand($cartasNumeros,5);


echo '<center>';

echo $cartasNumeros[$claves_Numeros[0]];
echo $cartasSimbolos[$claves_Simbolos[0]]. "  " . "\n";

echo $cartasNumeros[$claves_Numeros[1]];
echo $cartasSimbolos[$claves_Simbolos[1]]. "  " . "\n";

echo $cartasNumeros[$claves_Numeros[2]];
echo $cartasSimbolos[$claves_Simbolos[2]]. "  " . "\n";

echo $cartasNumeros[$claves_Numeros[3]];
echo $cartasSimbolos[$claves_Simbolos[3]]. "  " . "\n";

echo $cartasNumeros[$claves_Numeros[4]];
echo $cartasSimbolos[$claves_Simbolos[4]]."  " . "\n ";


// $cartas = array(
//     "A♦ ", "2♦ ", "3♦ ", "4♦ ", "5♦ ", "6♦ ", "7♦ ", "8♦ ", "9♦ ", "10♦ ", "J♦ ", "Q♦ ", "K♦ ",
//     "A♣ ", "2♣ ", "3♣ ", "4♣ ", "5♣ ", "6♣ ", "7♣ ", "8♣ ", "9♣ ", "10♣ ", "J♣ ", "Q♣ ", "K♣ ",
//     "A♥ ", "2♥ ", "3♥ ", "4♥ ", "5♥ ", "6♥ ", "7♥ ", "8♥ ", "9♥ ", "10♥ ", "J♥ ", "Q♥ ", "K♥ ",
//     "A♠ ", "2♠ ", "3♠ ", "4♠ ", "5♠ ", "6♠ ", "7♠ ", "8♠ ", "9♠ ", "10♠ ", "J♠ ", "Q♠ ", "K♠ "
// );



// $claves_aleatorias = array_rand($cartas, 5);

// echo '</br>';
// echo '</br>';
// echo '<center>';
// echo $cartas[$claves_aleatorias[0]] . " " . "\n";
// echo $cartas[$claves_aleatorias[1]] . " " . "\n";
// echo $cartas[$claves_aleatorias[2]] . " " . "\n";
// echo $cartas[$claves_aleatorias[3]] . " " . "\n";
// echo $cartas[$claves_aleatorias[4]] . " " . "\n";

// $claves_aleatorias1 = array_rand($cartas, 5);
// echo '<center>';
// echo $cartas[$claves_aleatorias1[0]] . " " . "\n";
// echo $cartas[$claves_aleatorias1[1]] . " " . "\n";
// echo $cartas[$claves_aleatorias1[2]] . " " . "\n";
// echo $cartas[$claves_aleatorias1[3]] . " " . "\n";
// echo $cartas[$claves_aleatorias1[4]] . " " . "\n";

// $claves_aleatorias2 = array_rand($cartas, 5);
// echo '<center>';
// echo $cartas[$claves_aleatorias2[0]] . " " . "\n";
// echo $cartas[$claves_aleatorias2[1]] . " " . "\n";
// echo $cartas[$claves_aleatorias2[2]] . " " . "\n";
// echo $cartas[$claves_aleatorias2[3]] . " " . "\n";
// echo $cartas[$claves_aleatorias2[4]] . " " . "\n";

// $claves_aleatorias3 = array_rand($cartas, 5);
// echo '<center>';
// echo $cartas[$claves_aleatorias3[0]] . " " . "\n";
// echo $cartas[$claves_aleatorias3[1]] . " " . "\n";
// echo $cartas[$claves_aleatorias3[2]] . " " . "\n";
// echo $cartas[$claves_aleatorias3[3]] . " " . "\n";
// echo $cartas[$claves_aleatorias3[4]] . " " . "\n";










