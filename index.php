<?php
require_once 'Turn.php';
require_once 'TurnManager.php';
require_once 'TurnType.php';

$manager = new TurnManager();

$manager->createTurn(TurnType::C);
$manager->createTurn(TurnType::E);
$manager->createTurn(TurnType::C);
$manager->createTurn(TurnType::R);
$manager->createTurn(TurnType::O);
$manager->createTurn(TurnType::I);
$manager->createTurn(TurnType::C);

$manager->callNext();

foreach ($manager->getTurns() as $turn) {
  echo $turn . PHP_EOL;
}
