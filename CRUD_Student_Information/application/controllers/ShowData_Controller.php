<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData_Controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }
  
	public function index()
	{ 
    // load model 
    $this->load->model('ShowData_Model');

    // call funnc get_data_from_db at ShowData_Model
    $data = $this->ShowData_Model->getdatabase();

    // convert bien data thanh mang
    $data = array('data_from_controller' => $data);
    
    // load view
    $this->load->view('ShowData_View',$data, FALSE);
	}

  public function deleteData($id_get)
  {
    // post id delete
    // $this->input->post('id');

    // test id nhan dc
    // echo "$id_get";

    // load model and get func deleteDataById from ShowData_mMdel
    $this->load->model('ShowData_Model');

    // truyen id vua nhan dc vao ShowData_Model
    if($this->ShowData_Model->deleteDataById($id_get)){
      // $this->load->view('MessageDeleteSuccess_View');
      return redirect('index.php/ShowData_Controller');
    }else {
      echo "delete doesn't success";
    }
  }

  public function editData($id_get_edit)
  {
    //load model
    $this->load->model('ShowData_Model');

    // get data from showData_model
    $data = $this->ShowData_Model->editByID($id_get_edit);

    // convert data to array, pass to view file is editData_view.php
    $data = array('array_data_edit' => $data);

    // pass data after conver array to view edit data with name file is editData_view.php
    $this->load->view('EditData_View', $data, FALSE);
  }

  public function updateData()
  {
    // get data from view
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $phone = $this->input->post('phone');
    $class = $this->input->post('class');

    // load model
    $this->load->model('ShowData_Model');
    $this->ShowData_Model->updateDataByID($id,$name,$phone,$class);

    // echo "succ";


    
    if($this->ShowData_Model->updateDataByID($id,$name,$phone,$class)){
      // $this->load->view('UpdateDataSuccess_View');
      return redirect('index.php/ShowData_Controller');
    }else {
      echo "not succcess";
    }
  }
}
