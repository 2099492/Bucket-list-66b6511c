<?php
echo "Hoe veel activiteiten wil je toevoegen?" . PHP_EOL;
$input1 = readline();
$a = array();
if ($input1 != is_numeric($input1)) {
  echo $input1 . "is geen getal";
  exit;
}
for($i=0; $i <$input1 ; $i++) {
  echo "Wat wil je toevoegen aan jouw bucket list?" . PHP_EOL;
  $a[] = readline();
}

echo "Op jouw bucket list staat: " . PHP_EOL;
foreach ($a as $key => $value) {
  print($value . PHP_EOL);
}
 ?>
