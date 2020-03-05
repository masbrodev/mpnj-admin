<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != 'admin'){
			$this->session->set_flashdata('berhasil', '<script>alert("Silahkan login dulu ! ")</script>');
			redirect('/');
		}
	}
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/home');
		$this->load->view('admin/footer');
	}


	// users

	public function users()
	{
		$data['users'] = $this->db->order_by('id', 'DESC')->get('users');
		$this->load->view('admin/header');
		$this->load->view('admin/users', $data);
		$this->load->view('admin/footer');
	}

	public function users_tambah()
	{
		$data = [
			'nama'=>$this->input->post('nama'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
		];
		$this->db->insert('users', $data);
		$this->session->set_flashdata('berhasil', '<script>alert("Berhasil !")</script>');
		redirect('admin/users');
	}

	public function update_users($id)
	{
		if($this->input->post('password') == ''){
			$data = [
				'nama'=>$this->input->post('nama'),
				'username'=>$this->input->post('username'),
				
			];
			$this->db->where('id', $id)->update('users', $data);
			$this->session->set_flashdata('berhasil', '<script>alert("Berhasil !")</script>');
			redirect('admin/users');
		}else{

			$data = [
				'nama'=>$this->input->post('nama'),
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
			];
			$this->db->where('id', $id)->update('users', $data);
			$this->session->set_flashdata('berhasil', '<script>alert("Berhasil !")</script>');
			redirect('admin/users');
		}
	}
	
	public function hapus_users($id){
		
		$hapus = $this->db->where('id', $id)->from('users')->delete();
		if($hapus){
			$this->session->set_flashdata('berhasil', '<script>alert("Berhasil !")</script>');
			redirect('admin/users');
		}else{
			$this->session->set_flashdata('berhasil', '<script>alert("Terjadi Error !")</script>');
			redirect('admin/users');
		}
	}


	// pelapak
	public function pelapak()
	{
		$data['pelapak'] = $this->db->order_by('id_pelapak', 'DESC')->get('pelapak');
		$this->load->view('admin/header');
		$this->load->view('admin/pelapak', $data);
		$this->load->view('admin/footer');
	}
}