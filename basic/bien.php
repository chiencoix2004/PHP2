<?php
echo '<pre>';


$bien1="Ahaha";
$bien2=1;
$bien3=null;
$bien4=true;
$bien5=[1,2,'Ahihi' =>125];
$bien6=function (){
    return 1;
};

var_dump($bien1);
var_dump($bien2);
var_dump($bien3);
var_dump($bien4);
var_dump($bien5);
var_dump($bien6);


//Constant
const CONST_1=1;
define('CONST_2','XYZ');








?>