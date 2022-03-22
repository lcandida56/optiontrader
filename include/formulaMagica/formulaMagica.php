<?php


$handle = fopen("./include/formulaMagica/dataset/formulaMagica.csv", "r");

$header = fgetcsv($handle, 1000, ";");

while ($row = fgetcsv($handle, 1000, ";")) {
    $rows[] = array_combine($header, $row);
}


fclose($handle);
/*
 * Path to the configuration dir
 */
$path = "./include/formulaMagica/templates/";

$dados['header'] = $header;
$dados['rows'] = $rows;

$tpl = New view();
$tpl->loadView('htmlFormulaMagica',$path,$dados);

