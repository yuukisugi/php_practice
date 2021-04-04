<?php
$name = "yuuki sugiyama";
if ($name == "yuuki sugiyama"){
    echo "私は yuuki sugiyama　です" . "\n";
}else {echo "私は yuuki sugiyama　ではありません" . "\n";
}

$name = "yuuki sugiyama";
if ($name == "yuuki sugiyama"){
    echo "私は yuuki sugiyama　ではありません" . "\n";
}else {echo "私は yuuki sugiyama　です" . "\n";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total . "\n";

$fruits = array("apple", "orange", "lemon", "banana" , "grape");
foreach($fruits as $fruit){
  echo "順番は". $fruit;
  echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
