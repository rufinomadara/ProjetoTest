<?php
namespace Neto\Export;

use Neto\Export\Contract\Export;

class jsonExport implements Export {
  public function doExport(){
    print 'Json Exported!';
  }
}