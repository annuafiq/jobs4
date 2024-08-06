<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>For Loop</h3>
    <?php
// Menggunakan for loop
for ($i = 1; $i <= 5; $i++) {
    // Cetak angka sebanyak $i kali
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "<br>";
}
?>
   <h3>While Loop</h3>
   <?php
// Menggunakan while loop
$i = 1;
while ($i <= 5) {
    $j = 1;
    while ($j <= $i) {
        echo $i;
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
<h3>Looping For</h3>
<?php
function factorialFor($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Contoh penggunaan
$number = 5;
echo "Faktorial dari $number menggunakan for loop adalah: " . factorialFor($number);
?>
<h3>Looping While</h3>
<?php
function factorialWhile($n) {
    $result = 1;
    $i = 1;
    while ($i <= $n) {
        $result *= $i;
        $i++;
    }
    return $result;
}

// Contoh penggunaan
$number = 5;
echo "Faktorial dari $number menggunakan while loop adalah: " . factorialWhile($number);
?>
<h3>Looping Do-While</h3>
<?php
function factorialDoWhile($n) {
    $result = 1;
    $i = 1;
    do {
        $result *= $i;
        $i++;
    } while ($i <= $n);
    return $result;
}

// Contoh penggunaan
$number = 5;
echo "Faktorial dari $number menggunakan do-while loop adalah: " . factorialDoWhile($number);
?>
</body>
</html>