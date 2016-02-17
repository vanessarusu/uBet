<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('Login_Model');
	}

	public function index() {
		// if($this->session->userdata('userInfo')) {}
		// $this->load->view('welcome_message');
		// $data['pagesToLoad'] = ['one','two', 'three'];
		// $this->Login_Model->test($data['pagesToLoad']);
		$data['title'] = 'Welcome to uBet';
		$this->load->view('templates/header', $data);
		$this->load->view('login');
		$this->load->view('templates/footer');
	}

	public function login() {
		$data['title'] = 'Login to uBet!';
		if($data['authUser'] = $this->Login_Model->authenticateUser()) {
			print_r('i validated');
			print_r($data['authUser']);
			$this->load->view('test');
			$this->session->set_userdata('userInfo', $data['authUser']);
			// redirect('Users/index');
		}
		else {
			$data['title'] = 'Login Unsuccessful, please try again';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/login', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function register() {
		$this->load->view('register');
	}

	public function create() {
		if($data['newUser'] = $this->Login_Model->createUser()) {
			echo'<h2>New user created</h2>';
			$this->load->view('login');
		}
	}
}
