<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData_Model extends CI_Model {

  public $variable;

  public function __construct()
  {
    parent::__construct();
  }
  
  public function getdatabase()
  {
    // select and get data form db
    $this->db->select('*');
    $data = $this->db->get('student_information');

    // dua $data thanh mot mang du lieu va redoad lai coi dep hon ko
    $data = $data->result_array();

    // return to ShowData_Controller
    return $data;
  }

  public function deleteDataById($id)
  {
    // query, delete, and check id in table
    $this->db->where('id',$id);
    return $this->db->delete('student_information');
  }

  public function editByID($id_edit)
  {
    // query, delete, and check id in table
    $this->db->select('*');
    $this->db->where('id',$id_edit);

    // get data
    $data_edit = $this->db->get('student_information');

    // conver thanh data array
    $data_edit = $data_edit->result_array();

    //test co lay duoc du lieu ko
    // echo "<pre/>";
    // var_dump($data_edit);

    return $data_edit;
    
  }

  public function updateDataByID($id, $name, $phone, $class)
  {
    // the same name in db
    $data_update = array(
      'id' => $id,
      'name' => $name,
      'phone' => $phone,
      'class' => $class,

    );
    $this->db->where('id', $id);
    return $this->db->update('student_information',$data_update);
    
  }
}
