<?php

class Crud extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('m_data');
	$this->load->helper('url');
	}
	function tambah(){
	$this->load->view('admin/login/register');
	}

	function tambah_aksi(){
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$nohp = $this->input->post('nohp');

	$rubah=$_POST['password'];
	$rubah2=md5($rubah);

	$data = array(
	'nama_customer'=>$nama,
	'email_customer'=>$email,
	'password'=>$rubah2,
	'notelp_customer'=>$nohp);
	$this->m_data->input_data($data,'customer');
	redirect('welcome/login');
	}
}