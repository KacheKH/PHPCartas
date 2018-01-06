<?php
echo '<h1> <center><b>CARTAS AL AZAR DE UNA BARAJA</center></br>';
echo '<h1><center >♣ ♠ ♥ ♦</center> </h1></br></br>';

$cartas = array(
    "A♦ ", "2♦ ", "3♦ ", "4♦ ", "5♦ ", "6♦ ", "7♦ ", "8♦ ", "9♦ ", "10♦ ", "J♦ ", "Q♦ ", "K♦ ",
    "A♣ ", "2♣ ", "3♣ ", "4♣ ", "5♣ ", "6♣ ", "7♣ ", "8♣ ", "9♣ ", "10♣ ", "J♣ ", "Q♣ ", "K♣ ",
    "A♥ ", "2♥ ", "3♥ ", "4♥ ", "5♥ ", "6♥ ", "7♥ ", "8♥ ", "9♥ ", "10♥ ", "J♥ ", "Q♥ ", "K♥ ",
    "A♠ ", "2♠ ", "3♠ ", "4♠ ", "5♠ ", "6♠ ", "7♠ ", "8♠ ", "9♠ ", "10♠ ", "J♠ ", "Q♠ ", "K♠ "
);

$cartasDiamantes = array("A♦ ", "1♦ ", "2♦ ", "3♦ ", "4♦ ", "5♦ ", "6♦ ", "7♦ ", "8♦ ", "9♦ ", "10♦ ", "J♦ ", "Q♦ ", "K♦ ");
$cartasTrebol = array("A♣ ", "1♣ ", "2♣ ", "3♣ ", "4♣ ", "5♣ ", "6♣ ", "7♣ ", "8♣ ", "9♣ ", "10♣ ", "J♣ ", "Q♣ ", "K♣ ");
$cartasCorazones = array("A♥ ", "1♥ ", "2♥ ", "3♥ ", "4♥ ", "5♥ ", "6♥ ", "7♥ ", "8♥ ", "9♥ ", "10♥ ", "J♥ ", "Q♥ ", "K♥ ");
$cartasPicas = array("A♠ ", "1♠ ", "2♠ ", "3♠ ", "4♠ ", "5♠ ", "6♠ ", "7♠ ", "8♠ ", "9♠ ", "10♠ ", "J♠ ", "Q♠ ", "K♠ ");



$claves_aleatorias = array_rand($cartas, 6);

echo '<center>';
echo $cartas[$claves_aleatorias[0]] . " " . "\n";
echo $cartas[$claves_aleatorias[1]] . " " . "\n";
echo $cartas[$claves_aleatorias[2]] . " " . "\n";
echo $cartas[$claves_aleatorias[3]] . " " . "\n";
echo $cartas[$claves_aleatorias[4]] . " " . "\n";
echo $cartas[$claves_aleatorias[5]] . " " . "\n";

$claves_aleatorias1 = array_rand($cartas, 6);

echo '<center>';
echo $cartas[$claves_aleatorias1[0]] . " " . "\n";
echo $cartas[$claves_aleatorias1[1]] . " " . "\n";
echo $cartas[$claves_aleatorias1[2]] . " " . "\n";
echo $cartas[$claves_aleatorias1[3]] . " " . "\n";
echo $cartas[$claves_aleatorias1[4]] . " " . "\n";
echo $cartas[$claves_aleatorias1[5]] . " " . "\n";

$claves_aleatorias2 = array_rand($cartas, 6);

echo '<center>';
echo $cartas[$claves_aleatorias2[0]] . " " . "\n";
echo $cartas[$claves_aleatorias2[1]] . " " . "\n";
echo $cartas[$claves_aleatorias2[2]] . " " . "\n";
echo $cartas[$claves_aleatorias2[3]] . " " . "\n";
echo $cartas[$claves_aleatorias2[4]] . " " . "\n";
echo $cartas[$claves_aleatorias2[5]] . " " . "\n";

$claves_aleatorias3 = array_rand($cartas, 6);

echo '<center>';
echo $cartas[$claves_aleatorias3[0]] . " " . "\n";
echo $cartas[$claves_aleatorias3[1]] . " " . "\n";
echo $cartas[$claves_aleatorias3[2]] . " " . "\n";
echo $cartas[$claves_aleatorias3[3]] . " " . "\n";
echo $cartas[$claves_aleatorias3[4]] . " " . "\n";
echo $cartas[$claves_aleatorias3[5]] . " " . "\n";


?>

