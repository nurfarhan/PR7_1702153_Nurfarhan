<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct ()
	{
		parent ::__construct ();
		$this->load->model('web'); //panggil model
	}

	public function index ()
	{
		$data = array(
			'title'		=> 'Data Kereta',
			'data_lokomotif'	=> $this->web->get_all_lokomotif(),
			'data_gerbong'	=> $this->web->get_all_gerbong(),
			'data_kursi'	=> $this->web->get_all_kursi(),
			'datalj'	=> $this->web->get_all_LJ(),
			'datarj'	=> $this->web->get_all_RJ(),
			'dataij'	=> $this->web->get_all_IJ()
		);
		$this->load->view('home',$data);
	}
}
