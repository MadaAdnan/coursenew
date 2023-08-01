<?php
// $result=0;
// $num1=10;
// function sum($num1,$num2,&$result){
// global $result;
    
//     $result= $num1+$num2;
//     echo $result;
// }


// sum($num1,5,$result);
// echo $num1;
// echo "Result=>". $result;

// function sum($num2,$num1=10){
// echo $num1+$num2;
// }


// sum(9);

# void

# returned

function sum($num1,$num2):int|string{
return 1;
}
//
//$t=sum(12,23.2);
//echo $t;
$student=[
    'name'=>'ali',
    'age'=>28,
    'success'=>true,
];
function getKeyFromArray($array):array{
    if(!is_iterable($array)){
       return [];
    }
    $list=[];
   foreach($array as $key=>$item){
       array_unshift($list,$key);

   }
return $list;
}

print_r(getKeyFromArray(33));