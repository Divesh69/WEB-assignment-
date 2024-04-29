<?php
function fibonacci($n) {
    $fibonacciSeries = [];
    $fibonacciSeries[] = 0;
    $fibonacciSeries[] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }
    return $fibonacciSeries;
}
$numberOfTerms = 10;
$fibonacciSeries = fibonacci($numberOfTerms);
echo "Fibonacci series up to $numberOfTerms terms: " . implode(", ", $fibonacciSeries);
?>
