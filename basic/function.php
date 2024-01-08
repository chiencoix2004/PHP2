<?php
echo '<pre>';

//Hàm Truyền Thống
//Hàm có trả về
function sum( $a, $b ) {
    return $a+$b;
}

$sum = sum( 2, 5 );
echo $sum . PHP_EOL;

//Hàm không trả về
function sum2( $a, $b ) {
    echo $a+$b . PHP_EOL;
}
sum2( 10, 20 );

//Có tham số và không có tham số
function xinChao( $msg ) {
    echo $msg . PHP_EOL;
}
xinChao( 'Xin chào' );
xinChao( ' hi' );

function xinChao2() {
    echo 'Xin chào' . PHP_EOL;
}
xinChao2();
xinChao2();


//Tham số có giá trị và không có giá trị 

function xinChao3( $name,$msg ) {
    echo $msg . ' ' .$name . PHP_EOL;
}
xinChao3("Chiến",'Hello' );

function xinChao4($name, $msg ='Hi') {
    echo $msg . ' ' .$name . PHP_EOL;
}
xinChao4("Chiến");

// ==============================CLOSURE & ARROW========================
$y = 5;
// cú pháp sử dụng biến ở bên ngoài function
$closure1 = function() use ($y){
    echo 'Closure 1 - ' .$y. PHP_EOL;
};
$closure1();


// Arrow funciton
$fn = fn($x) => $x * $y;
echo $fn(5).PHP_EOL;
echo $fn(10).PHP_EOL;
echo $fn(15).PHP_EOL;


?>