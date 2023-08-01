<?php

//try{
//   echo 7/0;
//}catch (TypeError $e){
//    echo "ادخل قيمة صالحة";
//}
//catch (DivisionByZeroError $e){
//   echo "يرجى إدخال قيمة الرقم الثاني غير 0";
//}catch (Exception | Error $e){
//    echo $e->getMessage();
//}

function division($num1,$num2){
  if($num2==0){
    throw new Exception('القيمة المدخلة غير صحيحة',501);
  }
  if(!is_numeric($num2) || !is_numeric($num1)){
      throw new Exception('القيمة المدخلة عبارة عن نص',502);
  }
       echo $num1/$num2;

}

try{
    division('a',6);
}catch (Exception|Error $e){
    echo $e->getMessage();
    echo $e->getCode();

}


