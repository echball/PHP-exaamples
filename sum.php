<?php
$arr = [];
$result = 0;
for($i = 0; $i < 10; $i++){
  echo "enter number";
$arr[$i] = readline();
  }
for($i = 0; $i < 10; $i++){
  $result = $result + $arr[$i];
  echo$arr[$i];
  print"\n";
}

   
      
echo "sum of array is: $result \n";
  ?>