
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__FILE__) . '/TCPDF/tcpdf.php';

class pdf extends TCPDF{

    function __construct() {
      parent::__construct();
    }
}
?>
