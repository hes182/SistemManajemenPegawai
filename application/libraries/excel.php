<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  require('./application/third_party/PHPExcel/classes/PHPExcel.php');

  class Excel extends PHPExcel{
    public function __construct(){
      parent::__construct();
    }
  }

 ?>
