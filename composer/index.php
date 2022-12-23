
<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Pessoa;

$pessoa = new Pessoa;
$pessoa->idade= 40;
$pessoa->nome= "Patrick";
$pessoa->sobreNome= "Silva";
$pessoa->email= "patrick15k@hotmail.com";
$pessoa->password= "pat269372";
echo $pessoa->dados();