<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['artikel']	= $this->Artikel->tampil_artikel_home()->result();
		$data['imam']	= $this->Imam->tampil_imam_home()->result();
		$data['jadwal']	= $this->Jadwal->tampil_jadwal_home()->result();
		$data['pengumuman'] = $this->Pengumuman->tampil_pengumuman_home()->result();
		$data['kegiatan_rutin']	= $this->Kegiatan->tampil_kegiatan_rutin()->result();
		$data['kegiatan']	= $this->Kegiatan->tampil_kegiatan()->result();
		$data['foto'] = $this->Foto->tampil_foto()->result();
		
		$this->load->view('default/Header');
		$this->load->view('Home', $data);
		$this->load->view('default/Footer');
	}
	
	public function Kegiatan_insidental_v(){
	$data['kegiatan'] = $this->Kegiatan->tampil_kegiatan()->result();
		$this->load->view('default/Header');
		$this->load->view('Kegiatan_insidental_v',$data);
		$this->load->view('default/Footer');
	}
	public function Kegiatan_rutin_v(){
	$data['kegiatan'] = $this->Kegiatan->tampil_kegiatan_rutin()->result();
		$this->load->view('default/Header');
		$this->load->view('Kegiatan_rutin_v',$data);
		$this->load->view('default/Footer');
	}
	
	
	public function Imam_v(){
		$data['imam'] 	= $this->Imam->tampil_imam()->result();
		$this->load->view('default/Header');
		$this->load->view('Imam_v',$data);
		$this->load->view('default/Footer');
	}

	public function Jadwal_salat_v(){
		$data['jadwal'] 	= $this->Jadwal->tampil_jadwal()->result();
		$this->load->view('default/Header');
		$this->load->view('Jadwal_salat_v',$data);
		$this->load->view('default/Footer');
	}
		
	public function Foto_kegiatan_v(){
		$data['foto'] 	= $this->Foto->tampil_foto()->result();
		$this->load->view('default/Header');
		$this->load->view('Foto_kegiatan_v',$data);
		$this->load->view('default/Footer');
	}

	// public function art(){
	// 	$data['foto'] 	= $this->Foto->tampil_foto()->result();
	// 	$this->load->view('default/Header');
	// 	$this->load->view('art',$data);
	// 	$this->load->view('default/Footer');
	// }

}