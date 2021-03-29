<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomePage_Controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }
  
	public function index()
	{

    // create data or variable at view and pass to view,
    // after that view get data and show to user

    $phone_number['list_phone'] = array('11111111', '222222222','333333333');


		// load a view in controller
    $this->load->view('HomePage_View', $phone_number);
	}
}
