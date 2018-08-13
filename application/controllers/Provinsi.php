<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function output($output = null)
	{
		$this->load->view('header.php');
		$this->load->view('provinsi.php',(array)$output);
		$this->load->view('footer.php');

	}


	public function index()
	{
		// $this->_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

		try{
			$crud = new grocery_CRUD();

			$crud->set_table('provinsi');
			$crud->set_subject('Provinsi');
			$crud->required_fields('nama_prov');
			$crud->columns('id_prov','nama_prov');
			$crud->display_as('id_prov','No');
			$crud->display_as('nama_prov','Provinsi');
			$crud->unset_clone();
			
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}
