<?php

$textoHtml = "<p>Parágrafo normal</p>. <div> uma div</div><p>outro paragrafo</p>";
echo $textoHtml;




$salvarTextonoBanco = strip_tags($textoHtml);
    echo $salvarTextonoBanco;