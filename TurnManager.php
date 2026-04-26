<?php
class TurnManager
{
  private array $turns = [];
  private array $turnCounter = [
    TurnType::C->value => 1,
    TurnType::E->value => 1,
    TurnType::R->value => 1,
    TurnType::O->value => 1,
    TurnType::I->value => 1,
  ];

  public function createTurn(TurnType $type): void
  {
    $this->turns[] = new Turn($type, $this->turnCounter[$type->value]++);
  }

  public function callNext(): ?Turn
  {
    return array_shift($this->turns);
  }

  public function getTurns(): array
  {
    return $this->turns;
  }
}
