<?php

$dn = mktime(20,40,33,01,05,1989);

$dnFormatada = date('d/m/y', $dn);

echo $dnFormatada;

//serve tanto pra criar datas passadas ou futuras... 