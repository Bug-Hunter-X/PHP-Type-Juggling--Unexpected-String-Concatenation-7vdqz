```php
function calculateSum($a, $b) {
  // Explicit type casting to integers
  $a = (int)$a;
  $b = (int)$b;
  return $a + $b;
}

$result = calculateSum(10, '20');
var_dump($result); // Output: int(30)

//Alternative solution with type checking
function calculateSum2($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  } else {
    return 'Invalid operands';
  }
}
$result2 = calculateSum2(10, '20');
var_dump($result2); // Output: int(30)
$result3 = calculateSum2(10, 'abc');
var_dump($result3); // Output: string(13) "Invalid operands"
```