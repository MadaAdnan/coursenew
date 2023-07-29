<?php
// Array

$students = [
    [
        'name' => 'ali',
        'mark' => 50,
        'address' => 'sarmad'
    ],
    [
        'mark' => 75,
        'name' => 'wael',
        'address' => 'dana'
    ],
    [
        'address' => 'idlib',
        'name' => 'mahmoud',
        'mark' => 90
    ]

];

// count($students);
echo "<pre>";
// print_r($students[0]['name']);
// print_r($students[1]['name']);
// print_r($students[2]['name']);
echo "</pre>";
// for($i=0;$i<3;$i++){
// echo "<pre>";
//     print_r($students[$i]['name']);
//  print_r($students[$i]['mark']);
//  echo "</pre>";
// }
// $i=5;
// while($i<3){
//     echo "<pre>";
//     print_r($students[$i]['name']);
//  print_r($students[$i]['mark']);
//  echo "</pre>";
  
//   $i++;
// }
// $i=0;
// for(;$i<3;){
//     echo "<pre>";
//         print_r($students[$i]['name']);
//      print_r($students[$i]['mark']);
//      echo "</pre>";
//      $i++;
//     }
// $i=5;
// do{
//     echo "<pre>";
//     print_r($students[$i]['name']);
//  print_r($students[$i]['mark']);
//  echo "</pre>";
//  $i++;
// }while($i<3);

// foreach($students as $student){
//    foreach($student as $key=>$st){
//     if($key=='name'){
//         print_r($st);
//     }
    
//    }
//    echo "<br>";
// }
// $i=0;
// for(;;){
    
//     $i++;
//   if($i>100){
//     break;
//   }
//   if($i>25 && $i<50){
//    continue;
//   }
//   echo $i . "<br>"; 
//     }

// for($i=0;$i<10;$i++){
    
//     for($j=0;$j<10;$j++){
//         echo $i ."*" .$j."=".$i*$j."<br>";
//         if($i==6){
//          break;   
//         }
//         if($j==5){
//             continue;
//         }
       
//     }
// }

$arr=['name'=>1,'age'=>2,'b'=>3,4,5,6,7,8,9];
$arr2=['a','b','c',1,4,5];
echo "<pre>";
print_r($arr);
echo "</pre>";

## delete from end
// $index=array_pop($arr);
// echo $index;
# merge // دمج
// $arr3=array_merge($arr,$arr2);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// echo "<pre>";
// print_r($arr2);
// echo "</pre>";
// echo "<pre>";
// print_r($arr3);
// echo "</pre>";
#sum
// $sum=array_sum($arr);
// echo $sum;
# diffrence
// $arr3=array_diff($arr2,$arr);
// echo "<pre>";
// print_r($arr3);
// echo "</pre>";
# delete from start
// array_shift($arr);
# insert to end element
// array_push($arr,'e','w');

// $index=array_search(1,$arr);
# return Array Keys Only From Array
// $arr3=array_keys($arr);

// $arr3=array_slice($arr,0,3);
// $arr3=array_values($arr);

// array_unshift($arr,'a');
echo "<pre>";
print_r($arr);
echo "</pre>";
?>