# PHP Type Juggling Bug
This repository demonstrates a common error in PHP related to type juggling.  When performing arithmetic operations with variables of different types, PHP's loose typing can lead to unexpected results. The `calculateSum` function intends to add two numbers but produces string concatenation due to the implicit type conversion.

## How to reproduce:
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected string output instead of the numerical sum.

## Solution:
The provided `bugSolution.php` demonstrates how to avoid this issue by using explicit type casting or checking to ensure numerical operands before performing the addition operation.