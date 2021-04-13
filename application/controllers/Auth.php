<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Auth extends CI_Controller{

	public function login(){
		$this->load->view('admin/login');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('nama','nama','required',['required' => 'Harap isi nama']);
		$this->form_validation->set_rules('pass','pass','required',['required' => 'Harap isi password']);
		if($this->form_validation->run() == FALSE){
			$this->load->view('admin/login');
		} else{
			$post = $this->input->post(null, TRUE);
			if(isset($post['login'])){
				$this->load->model('Pengguna');
				$query = $this->Pengguna->login($post);
				if($query->num_rows() > 0){
					$row = $query->row();
					$params = array(
						'id' => $row->id,
						'role_id' => $row->role_id
					);
					$this->session->set_userdata($params);
					$_SESSION['status'] = "Active";
					echo "<script>
					window.location='".site_url('home_admin')."';
					</script>";
				}else{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Nama atau Password yang anda masukkan salah, coba lagi!!!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('auth/login');
				}
			}
		}
	}	
	public function logout(){
		$_SESSION = array();
		$params = array('id');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}