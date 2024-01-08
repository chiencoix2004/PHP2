<?php
echo '<pre>';
session_start();

$_SESSION['cart'][10]=[
    'id'=>10,
    'name'=> 'sp 1',
    'quantily'=>2,
    'prince'=>20000,
];
// unset($_SESSION['cart'][6]);
// print_r($_SESSION);



unset($_SESSION['cart']);
$_SESSION=[];
print_r($_SESSION);
?>