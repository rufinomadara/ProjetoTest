<?php

namespace Neto\Export; //pacote que esta classa pertence

use Neto\Export\Contract\Export;

class xmlExport implements Export{
  public function doExport(){
    print 'Xml Exported!';
  }
}