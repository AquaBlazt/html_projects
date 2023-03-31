
<?php
$array = [];

for ($i = 1; $i <= 10; $i++) {

 if($i<4)
 {
  $array[$i] = "a";
  echo $array[$i];
 }
 else if ($i >3 and $i < 8)
 {
  $array[$i] = "b";
  echo $array[$i];
 }
 else if ($i>=8)
 {
  $array[$i] = "c";
  echo $array[$i];
 }
 else
 {
  echo "error";
  echo $array[$i];
 }

}

