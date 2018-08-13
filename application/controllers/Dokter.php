<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dokter extends CI_Controller {

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
		$this->load->view('Dokter.php',(array)$output);
		$this->load->view('footer.php');

	}


	public function index()
	{
		// $this->_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

		try{
			$crud = new grocery_CRUD();

			$crud->set_table('dokter');
			$crud->columns('id_jenisdokter','nama_dokter','id_prov','alamat_dokter','lat','lng','no_telp');
			$crud->display_as('id_jenisdokter','Jenis Dokter')
			->display_as('id_prov','Provinsi');
			$crud->set_subject('Dokter');
			$crud->set_relation('id_jenisdokter','jenisdokter','jenisdokter');
			$crud->set_relation('id_prov','provinsi','nama_prov');
			$crud->required_fields('Dokter');

			$crud->callback_add_field('alamat_dokter',function () {
				return '<textarea id="alamat_dokter" name="alamat_dokter" value="" rows="10" cols="30"></textarea> <button onclick="myFunction()" type="button" class="btn btn-primary" style="margin-bottom:50px;">Generate</button>';
			});

			$crud->callback_add_field('lat',function () {
				return '<input type="text"  maxlength="100" id="lat" name="lat" value=""></input>';
			});
			$crud->callback_add_field('lng',function () {
				return '<input type="text"  maxlength="100" id="lng" name="lng" value=""></input>';
			});			
			
			$crud->callback_edit_field('alamat_dokter',function ($value, $primary_key) {
				return '<textarea name="alamat_dokter" rows="10" cols="30">'.$value.'</textarea> <button onclick="myFunction()" type="button" class="btn btn-primary" style="margin-bottom:50px;">Generate</button>';
			});

			$crud->required_fields('id_jenisdokter','nama_dokter','id_prov','alamat_dokter','lat','lng','no_telp');
			//$crud->set_rules('no_telp','No Telphone','integer');

			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}
