<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JenisDokter extends CI_Controller {

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
		$this->load->view('JenisDokter.php',(array)$output);
		$this->load->view('footer.php');

	}


	public function index()
	{
		// $this->_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

		try{
			$crud = new grocery_CRUD();

			$crud->set_table('jenisdokter');
			$crud->set_subject('JenisDokter');
			$crud->display_as('id_jenisdokter','No');
			$crud->display_as('jenisdokter','Jenis Dokter');
			$crud->required_fields('jenisdokter');
			$crud->columns('id_jenisdokter','jenisdokter');

			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}
