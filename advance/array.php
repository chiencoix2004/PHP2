<?php
echo "<pre>";
$array1 = [10,5,15,30];
echo $array1[2] . PHP_EOL;

$array2 =[
    'name'=> 'Nguyễn Văn B',
    'age'=> 25,
];



$array3 = [
    ['name'=> 'Nguyễn Văn A', 'age'=> 35],
    ['name'=> 'Nguyễn Văn B', 'age'=>28],
    ['name'=> 'Nguyễn Văn C', 'age'=> 96],

];
echo $array3[1]['age'] . PHP_EOL;

$array4 = [
    ['name'=> 'Nguyễn Văn A', 'age', 35],
    ['name'=> 'Nguyễn Văn A', 'age', 28],
    [
        'name'=>'Nguyễn Văn C',
        'age'=> 96,
        'points'=>[
            'Web2'=>10,
            'PHP2'=>9
        ]
        ],
        ];
        echo $array4[2]['points']['Web2'] . PHP_EOL;

//Hàm arra-merge - gộp một hoặc nhiều mảng
$arr1 = [1,4,5,'x' =>'ahihi'];
$arr2 = ['kkk','keke',['ok'=>'yes']];
$arr3 =[ 1,4,5,'x' =>'ahihi-array3'];

$arrMeg = array_merge($arr1,$arr2,$arr3);
$arrMeg2 = [...$arr1,...$arr2,...$arr3];
print_r($arrMeg);
print_r($arrMeg2);


