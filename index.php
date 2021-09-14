<?php

// Random Game

$player1Win = 0;
$player2Win = 0;
$draw = 0;

for ($i = 0; $i < 1000; $i++) {
  $player1 = rand(1, 100);
  $player2 = rand(1, 100);
  
  if ($player1 > $player2) {
   $player1Win++;
  }elseif ($player1 < $player2) {
    $player2Win++;
  }else{
    $draw++;
  }
}

echo "Player 1 win => $player1Win \n";
echo "Player 2 win => $player2Win \n";
echo "Draw => $draw \n";