<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  require_once(.'/third_party/PHPExcel/Classes/PHPExcel/IOFactory');

  class IOFactory extends PHPExcel_IOFactory{
    public function __construct(){
      parent::__construct();
    }
  }
 ?>
