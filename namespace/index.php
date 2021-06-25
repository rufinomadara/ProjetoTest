<?php
//namespace separa a sua classe em pacotes
//autoload carrega as classes quando você precisa
//require __DIR__ . '/class/xmlExport.php';
//require __DIR__ . '/class/jsonExport.php';

/*
use Export\jsonExport;
use Export\xmlExport;
*/

use Neto\Export\{//notação atualizada
  jsonExport,//classe
  xmlExport
};

require __DIR__ .'/autoload_psr4.php';
/*
function autoload($class){
  //require __DIR__ . '/class/'.$class.'.php';
  $baseFolder = __DIR__ .'/src/'; ///raiz

  $class = str_replace('\\', '/', $class);//fica em estrutura de diretórios
  require $baseFolder . $class. '.php';
  //print $class;
}

spl_autoload_register('autoload');

*/

if ($_GET['export'] == 'xml')
  return (new xmlExport())->doExport();//referencia a parti do namespace raiz... de dentro da pasta Export eu pego a classe xmlExport

if ($_GET['export'] == 'json')
  return (new jsonExport())->doExport();//referencia a parti do namespace raiz... de dentro da pasta Export eu pego a classe jsonExport

 