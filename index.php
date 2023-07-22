<?php
// comment inline
# comment inline
/*
multi 
line
 comment
*/
//  echo  'hello world';

// variable

// $name="ali and ahmad";
// $number=12.65;
// echo $number;

// Variable Type

# String => '' , ""
$name = "ali and ahmad";
# numuric => float , double , integer
# integer 12 , 15 , 30
# float 12.2 ,12.44 , 12.123456
# double 12.2 , 12.44 , 12.1234567
$num1 = 12; // int
$num2 = 12.44; // float
$num3 = 12.444444444;
echo $num2;
# boolean => true , false => 0 , 1
echo "<br>";
echo true;

# array []

# object 

// Math operating

# + , - ,/ , * , ++ , --, % , += , -= ,*= , /=

echo "<br>";
echo $num1 += 5; // $num1=$num1+5
echo "<br>";
echo $num1 % 3;
// logic operating
// true , false
# && => and
# || => or
# ! => not
# != => not equal
# == => equal
# === => equal with type
# >
# <
# <=
# >=
echo "<br> logic ";
echo "<br> ";
$resutl = 1 !== '1';
echo $resutl;
//  if condetion
echo "<br> ";
$age = 17;
if ($age >= 18) {
    echo "welcome";
} else {
    echo "not Welcome";
}
// طريقة ثانية
if ($age >= 18):
    echo "welcome";
else:
    echo "not Welcome";
endif;
// short if
echo "<br> ";
$msg = $age >= 18 ? "welcome" : "not Welcome";
echo $msg;
echo "<br> ";
$mark = 49;
if ($mark > 95) {
    echo "excelant";
} elseif ($mark > 85) {
    echo "Very good";
} elseif ($mark > 65) {
    echo " good";
} elseif ($mark > 50) {
    echo " middle";
} else {
    echo "faild";
}
echo "<br> ";

// switch statment
$status = 'ready';
switch ($status) {
    case 'pending':
    case 'ready':
        echo 'الطلب في الإنتظار';
        break;
    
    case 'complete':
        echo 'الطلب في منتهي';
        break;
    default :
        echo 'الطلب في ملغي';
        break;
}

?>

