<?php

//autoload carrega as classes quando você precisar
//require __DIR__ . '/class/xmlExport.php';
//require __DIR__ . '/class/jsonExport.php';

function autoload($class){
  require __DIR__ . '/class/'.$class.'.php';
}

spl_autoload_register('autoload');

if ($_GET['export'] == 'xml')
  return (new xmlExport())->doExport();

if ($_GET['export'] == 'json')
  return (new jsonExport())->doExport();

 