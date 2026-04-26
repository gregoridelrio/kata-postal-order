<?php
class Turn
{
  private TurnType $letter;
  private int $number;

  public function __construct(TurnType $letter, int $number)
  {
    $this->number = $number;
    $this->letter = $letter;
  }

  public function getLetter(): TurnType
  {
    return $this->letter;
  }

  public function getNumber(): int
  {
    return $this->number;
  }

  public function __toString(): string
  {
    return $this->letter->value . str_pad($this->number, 3, '0', STR_PAD_LEFT);
  }
}
