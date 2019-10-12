<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		$this->load->helper('url');
	}
	function aksilogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email_customer'=>$email,
			'password'=>md5($password),);
		$cek = $this->M_login->cek_login("customer",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'email_customer'=> $email,
				'status' => "login");

		$this->session->set_userdata($data_session);
		redirect(base_url("welcomes"));
	}else{
		redirect(base_url("welcome/login"));
	}
	}
function logout(){
	$this->session->sess_destroy();
	redirect(base_url("welcome/login"));
}
	function register(){
		$this->load->view('admin/login/register');
	}
	public function index()
	{
		$this->load->view('Home/include/header');
		$this->load->view('Home/index.php');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}

	public function about()
	{
		$this->load->view('Home/include/header');
		$this->load->view('about');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}

	public function services()
	{
		$this->load->view('Home/include/header');
		$this->load->view('services');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}

	public function eventgrid()
	{
		$this->load->view('Home/include/header');
		$this->load->view('pages/eventgrid');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}

	public function eventlist()
	{
		$this->load->view('Home/include/header');
		$this->load->view('pages/eventlist');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}

	public function eventsingle()
	{
		$this->load->view('Home/include/header');
		$this->load->view('pages/eventsingle');
		$this->load->view('Home/include/footer');
	}

	public function notfound()
	{
		$this->load->view('Home/include/header');
		$this->load->view('pages/404');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}

	public function blog()
	{
		$this->load->view('Home/include/header');
		$this->load->view('latestnews/blog');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}

	public function blogpost()
	{
		$this->load->view('Home/include/header');
		$this->load->view('latestnews/blogpost');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}

	public function contactus()
	{
		$this->load->view('Home/include/header');
		$this->load->view('contactus');
		$this->load->view('Home/include/livechat');
		$this->load->view('Home/include/footer');
	}
	
	public function login(){
		$this->load->view('admin/login/login');
	}
		public function recoverpw(){
		$this->load->view('admin/login/recoverpw');
	}
		public function upload(){
		$this->load->view('Home/upload');
	}

}
