<!-- é uma variável com referencia a outra.

indicado por =&
-->

<?php

$nome = 'josemar';

$nome2 =& $nome;

echo $nome2;