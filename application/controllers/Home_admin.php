<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Home_admin extends CI_Controller{
	
	public function index(){
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/home_admin'	);
		$this->load->view('admin/default1/footer');
	}
}