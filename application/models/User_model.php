<?php



defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	protected $testdb;

	public function __construct()
	{
		parent::__construct();
		$this->testdb = $this->load->database('test', true);
	}


	public function get()
	{
		// QUERY TO MULTIDB-1 FOR USERS TABLE
		return $this->db->get('users')->result();
	}

	public function getTest()
	{
		// QUERY TO MULTIDB-2 FOR USERS TABLE

		return $this->testdb->get('users')->result();
	}

}

/* End of file User_model.php */
