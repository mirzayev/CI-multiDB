<?php 



defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');

	}


	public function index()
	{
		// MULTIDB-2 USERS 
		var_dump($this->user_model->getTest());
		// MULTIDB-1 USERS 
		var_dump($this->user_model->get());


	}

}

/* End of file Users.php */
