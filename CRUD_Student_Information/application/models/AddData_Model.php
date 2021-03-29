<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// go to application/config/autoload.php paste database if error 
// at $autoload['libraries'] = array('database');

class AddData_Model extends CI_Model {

  public $variable;

  public function __construct()
  {
    parent::__construct();
  }
  
  public function Insert_To_Model($n,$p,$c)
  {
    // wrap data to table
    $data = array('name' => $n, 'phone' => $p, 'class' => $c);

    // pass data from model to db
    $this->db->insert('student_information', $data);
    
    // return id after add success
    return $this->db->insert_id();
  }
}
