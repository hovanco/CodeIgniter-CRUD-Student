<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData_Controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }
  
	public function index()
	{
    $this->load->view('addData_View');
    
	}

  public function insertData_controller()
  {
    // get data and text data
    // echo $this->input->post('name');
    // echo $this->input->post('phone');
    // echo $this->input->post('class');
    
    // tao bien chua 3 truong
    $full_name = $this->input->post('name');
    $phone_number =  $this->input->post('phone');
    $class_number =  $this->input->post('class');

    // load and pass data to model
    $this->load->model('AddData_Model');
    // $this->AddData_Model->Insert_To_Model($full_name,$phone_number,$class_number);

    // test add success or no
    if( $this->AddData_Model->Insert_To_Model($full_name,$phone_number,$class_number)){
      // echo "Success";
      // $this->load->view('AddDataSuccess_View');
      return redirect('index.php/ShowData_Controller');
    } else {
      echo "fail";
    }

  }
}
