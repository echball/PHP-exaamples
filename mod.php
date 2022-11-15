<?php
$arr = [];
$result = 0;
$modarr = [];
for($i = 0; $i < 10; $i++){
$arr[$i] = rand(10,100);
    echo$arr[$i];
  print"\n";
  }
print"\n";
for($i = 0; $i < 10; $i++){
  $modarr[$i] = $arr[$i] % 10;
  echo $modarr[$i];
  print"\n";
}

   
      

  ?>