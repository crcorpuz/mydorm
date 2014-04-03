<?php
class Site extends Controller{

	function index() {
		$this->load->library('pagination');
		$config['base_url'] = "http://localhost/md/index.php/admin/view_resident_profiles";
		$config['total_rows'] = $this->db->get('data')->num_rows(); #how many rows are to be paginated
		$config['per_page'] = 10;
		$config['num_links'] = 4;

		$this -> pagination->initialize($config);
		$data['records'] = $this->db->get('data',$config['per_page'], $this->uri->segment(3)); #3rd parameter is offset

		$this->load->view('view_resident_profiles',$data);
	}
	
}