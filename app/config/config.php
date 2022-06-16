<?php
// se true, carrega o arquivos de produção
$prod = false;
/**
* prod.php  => produção
* local.php => QA | Localhost
*/

$file = $prod ? 'prod.php' : 'local.php';


require_once('env/' . $file);
