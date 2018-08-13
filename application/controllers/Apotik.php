<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apotik extends CI_Controller {

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
		$this->load->view('Apotik.php',(array)$output);
		$this->load->view('footer.php');

	}


	public function index()
	{
		// $this->_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

		try{
			$crud = new grocery_CRUD();

			$crud->set_table('apotik');
			$crud->columns('nama_apotik','id_prov','alamat_apotik','no_telp','dokter_umum','dokter_gigi','laboratorium','obat','note');
			
			$crud->display_as('id_prov','Provinsi')
			->display_as('dokter_umum','Layanan Dokter Umum')
			->display_as('dokter_gigi','Layanan Dokter Gigi')
			->display_as('laboratorium','Layanan Laboratorium')
			->display_as('note','Catatan')
			->display_as('obat','Layanan Pembelian Obat');
			
			$crud->field_type('note','string');
			$crud->field_type('dokter_umum','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('dokter_gigi','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('laboratorium','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('obat','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->set_subject('Apotik');
			$crud->set_relation('id_prov','provinsi','nama_prov');
			$crud->required_fields('nama_apotik','id_prov','lat','lng','alamat_apotik','dokter_gigi','dokter_umum','laboratorium','obat');

			$crud->callback_read_field('dokter_umum', function ($value, $primary_key) {
				if($value == '1'){
					return "Tersedia";
				} elseif ($value == '2') {
					return "Tidak Tersedia";
				}
			});
			$crud->callback_read_field('dokter_gigi', function ($value, $primary_key) {
				if($value == '1'){

					return "Tersedia";
				} elseif ($value == '2') {
					return "Tidak Tersedia";
				}
			});
			$crud->callback_read_field('laboratorium', function ($value, $primary_key) {
				if($value == '1'){

					return "Tersedia";
				} elseif ($value == '2') {
					return "Tidak Tersedia";
				}
			});
			$crud->callback_read_field('obat', function ($value, $primary_key) {
				if($value == '1'){

					return "Tersedia";
				} elseif ($value == '2') {
					return "Tidak Tersedia";
				}
			});

			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}
