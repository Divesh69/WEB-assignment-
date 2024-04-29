<?php
function reverseNumber($number) {
    $reverse = 0;
    while ($number != 0) {
        $remainder = $number % 10;
        $reverse = $reverse * 10 + $remainder;
        $number = (int)($number / 10);
    }
    return $reverse;
}
$number = 12345;
$reversedNumber = reverseNumber($number);
echo "Reverse of $number is: $reversedNumber";
?>
