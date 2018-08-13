<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RumahSakit extends CI_Controller {

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
		$this->load->view('RumahSakit.php',(array)$output);
		$this->load->view('footer.php');

	}


	public function index()
	{
		// $this->_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

		try{
			$crud = new grocery_CRUD();

			$crud->set_table('rumahsakit');
			$crud->set_subject('Rumah Sakit');
			$crud->columns('nama_rs','id_prov','alamat_rs','no_telp','konsultasi_dokter_spesialis','konsultasi_dokter_subspesialis','pemeriksaan_penunjang','tindakan_medis','obat','mri_ct_petscan','bpjs_kesehatan_rawatjalan','jaminan_surat_ykkbi','bpjs_kesehatan_rawatinap','catatan');
			

			$crud->display_as('nama_rs','Nama Rumah Sakit');
			$crud->display_as('alamat_rs','Alamat Rumah Sakit');
			$crud->display_as('mri_ct_petscan','Layanan MRI/CT/PET Scan')
			->display_as('tindakan_medis','Layanan Tindakan Medis')
			->display_as('bpjs_kesehatan_rawatjalan','Layanan BPJS Rawat Jalan')
			->display_as('jaminan_surat_ykkbi','Layanan Jaminan Surat YKKBI')
			->display_as('laboratorium','Layanan Laboratorium')
			->display_as('obat','Layanan Pembelian Obat')
			->display_as('id_prov','Provinsi')
			->display_as('konsultasi_dokter_spesialis','Layanan Konsultasi Dokter Spesialis')
			->display_as('konsultasi_dokter_subspesialis','Layanan Konsultasi Dokter Subspesialis')
			->display_as('bpjs_kesehatan_rawatinap','Layanan BPJS Rawat Inap')
			->display_as('pemeriksaan_penunjang','Layanan Pemeriksaan Penunjang');
			
			$crud->field_type('catatan','string');
			$crud->field_type('mri_ct_petscan','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('bpjs_kesehatan_rawatjalan','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('jaminan_surat_ykkbi','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('pemeriksaan_penunjang','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('tindakan_medis','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('konsultasi_dokter_spesialis','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('bpjs_kesehatan_rawatinap','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('obat','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->field_type('konsultasi_dokter_subspesialis','dropdown',
				array('1' => 'Tersedia', '2' => 'Tidak Tersedia'));
			$crud->set_relation('id_prov','provinsi','nama_prov');

			$crud->callback_add_field('lat',function () {
				return '<input type="text"  maxlength="100" id="lat" name="lat" value=""></input>';
			});
			$crud->callback_add_field('lng',function () {
				return '<input type="text"  maxlength="100" id="lng" name="lng" value=""></input>';
			});
			$crud->callback_edit_field('lat',function ($value, $primary_key) {
				return '<input type="text" value="'.$value.'" maxlength="100" id="lat" name="lat" value=""></input>';
			});
			$crud->callback_edit_field('lng',function ($value, $primary_key) {
				return '<input type="text" value="'.$value.'" maxlength="100" id="lng" name="lng" value=""></input>';
			});

			$crud->required_fields('nama_rs','id_prov','alamat_rs','lat','lng','no_telp','konsultasi_dokter_spesialis','konsultasi_dokter_subspesialis','pemeriksaan_penunjang','tindakan_medis','obat','mri_ct_petscan','bpjs_kesehatan_rawatjalan','jaminan_surat_ykkbi','bpjs_kesehatan_rawatinap');
			//$crud->set_rules('no_telp','No Telphone','integer');

			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

}
