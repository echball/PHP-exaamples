<?php
$arr = [];
$max = 0;
$min = 0;
for($i = 0; $i < 10; $i++){
  $arr[$i] = rand(10,100);
    echo$arr[$i];
  print"\n";
  }
$max = $arr[0];
$min = $arr[0];

foreach ($arr as $key => $value) {
for($i = 0; $i < 10; $i++){
  if($value > $max){
    $max = $value;
  }
  if($value < $min){
    $min = $value;
  }
}
}

   
      
echo "max is: $max";
print"\n";
echo "min is: $min";
print"\n";
  ?>