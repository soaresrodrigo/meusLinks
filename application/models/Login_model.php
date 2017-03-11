<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    private $level;

    function __construct(){
        parent::__construct();
    }

    public function level_access($level){
        $this->level = (int) $level;
        echo $level;
    }
}