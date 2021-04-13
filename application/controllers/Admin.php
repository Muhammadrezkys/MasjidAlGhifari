<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Artikel');
				
	}
	public function index(){
		$this->load->view('admin/login');

	}

	public function home_admin(){
		$data = $this->user_model->ambil_data($this->session->userdata['email']);
		$data = array(
			'email'=> $data->email);
		$this->load->view('admin/default1/header');
		$this->load->view('admin/home_admin');
		$this->load->view('admin/default1/sitebar', $data);
		$this->load->view('admin/default1/footer');

	}
	public function foto_v(){
		$data['foto'] = $this->Foto->tampil_foto()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/foto_v', $data);
		$this->load->view('admin/default1/footer');	
	}

	public function kegiatan_insidental_v(){
		$data['kegiatan'] = $this->Kegiatan->tampil_kegiatan()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/Kegiatan_insidental_v', $data);
		$this->load->view('admin/default1/footer');	
	}
	public function kegiatan_rutin_v(){
		$data['kegiatan'] = $this->Kegiatan->tampil_kegiatan_rutin()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/Kegiatan_rutin_v', $data);
		$this->load->view('admin/default1/footer');	
	}
	
	public function artikel_v(){
		$data['artikel'] = $this->Artikel->tampil_artikel()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/Artikel_v',$data);
		$this->load->view('admin/default1/footer');	
	}
	public function imam_v(){
		$data['imam'] = $this->Imam->tampil_imam()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/Imam_v',$data);
		$this->load->view('admin/default1/footer');	
	}

	public function jadwal_v(){
		$data['jadwal'] = $this->Jadwal->tampil_jadwal()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/Jadwal_v',$data);
		$this->load->view('admin/default1/footer');	
	}

	public function pengumuman_v(){
		$data['pengumuman'] = $this->Pengumuman->tampil_pengumuman()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/Pengumuman_v',$data);
		$this->load->view('admin/default1/footer');	
	}
	public function keuangan_harian_v(){
		$data['keuangan_harian'] = $this->Keuangan_harian->tampil_harian()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/Keuangan_harian_v',$data);
		$this->load->view('admin/default1/footer');	
	}
	// public function neraca(){
	// 	$data['neraca'] = $this->neraca_model->tampil_neraca()->result();
	// 	$this->load->view('admin/default1/header');
	// 	$this->load->view('admin/default1/sitebar');
	// 	$this->load->view('admin/neraca',$data);
	// 	$this->load->view('admin/default1/footer');	
	// }

	public function keuangan_bulanan_v(){
		$data['keuangan_bulanan'] = $this->Keuangan_bulanan->tampil_bulanan()->result();
		$this->load->view('admin/default1/header');
		$this->load->view('admin/default1/sitebar');
		$this->load->view('admin/Keuangan_bulanan_v',$data);
		$this->load->view('admin/default1/footer');	
	}
	
	
}