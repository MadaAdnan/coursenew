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

?>