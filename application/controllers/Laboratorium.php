<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laboratorium extends CI_Controller {

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
		$this->load->view('Laboratorium.php',(array)$output);
		$this->load->view('footer.php');

	}


	public function index()
	{
		// $this->_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

		try{
			$crud = new grocery_CRUD();

			$crud->set_table('laboratorium');
			$crud->columns('nama_lab','id_prov','alamat_lab','lat','lng','no_telp');
			$crud->display_as('nama_lab','Nama Laboratorium')
				 ->display_as('alamat_lab','Alamat Laboratorium')
				 ->display_as('id_prov','Provinsi');
			$crud->set_subject('Laboratorium');
			$crud->set_relation('id_prov','provinsi','nama_prov');
			$crud->required_fields('Laboratorium');
			

			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}
