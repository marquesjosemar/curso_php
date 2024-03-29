<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(1989,05,01);

print_r($dataA);
echo "<br>";
print_r($dataB);
echo"<br>";

$diferenca = $dataA->diff($dataB);
print_r($diferenca);
