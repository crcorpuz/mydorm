<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dormer extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('dormer_model');
	}
 
	public function index() {
		if(($this->session->userdata('user_name') != "")) {
			$this->welcome();
		} else {
			$data['title']= 'Home';
			$this->load->view("home_view.php", $data);
		}
	}
	
	public function welcome() {
		$data['title'] = 'Welcome';
		$this->load->view('welcomedormer_view.php', $data);
	}
	
	public function logout() {
		$newdata = array(
			'dormer_id'  => '',
			'user_name'  => '',
			'first_name'  => '',
			'middle_name'  => '',
			'last_name'  => '',
			'user_email'    => '',
			'logged_in'  => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$this->index();
	}
}
?>