# Kata Postal Order

## Description
A PHP application that simulates a post office queue system. 
Customers can request a turn depending on the type of procedure they want to carry out, 
and the system manages the queue by calling and eliminating turns in order (FIFO).

## Turn types
- **C** — Previous Appointment
- **E** — Shipping
- **R** — Collection
- **O** — Other Procedures
- **I** — Information

## How it works
Each turn type has its own correlative counter, so turns look like `C001`, `E001`, `C002`, etc.
The system calls turns in the order they were created, regardless of type.

## Structure
- `TurnType.php` — Enum with the 5 turn types
- `Turn.php` — Entity that represents a single turn
- `TurnManager.php` — Manages the queue: create, call and delete turns
