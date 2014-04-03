<?php 

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('dormer_model');
		$this->load->helper("url");
		$this->load->library("pagination");
	}
 
	public function index() {
		if(($this->session->userdata('user_name') != "")) {
			$this->welcome();
		} else {
			$data['title'] = 'Home';
			$this->load->view('home_view.php', $data);
		}
	}
	
	public function welcome() {
		if(($this->session->userdata('user_name') != "")) {
			$data['title'] = 'Welcome';
			$this->load->view('welcome_view.php', $data);
		} else {
			$this->index();
		}
	}
	
	public function login() {
		$email = $this->input->post('email');
		$password = md5($this->input->post('pass'));

		$result=$this->admin_model->login($email,$password);
		if($result) $this->welcome();
		else        $this->index();
	}
	
	public function add_successful($message) {
		if(($this->session->userdata('user_name') != "")) {
			$data['title']= 'Successful Update';
			$data['message'] = $message;
			$this->load->view('successfuladd_view.php', $data);
		} else {
			$this->index();
		}
	}
	
	public function add_dormer() {
		if(($this->session->userdata('user_name') != "")) {
			$data['title']= 'Add Dormer';
			$this->load->view('registration_view.php', $data);
		} else {
			$this->index();
		}
	}
	
	public function edit_profile() {
		if(($this->session->userdata('user_name') != "")) {
			$this->load->helper('url');
			$data['student_number'] = $this->uri->segment(3);
			$data['title']= 'Edit Dormer Profile';
			$this->load->view('editprofile_view.php', $data);
		} else {
			$this->index();
		}
	}

	public function edit_validation() {
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('student_number', 'Student Number', 'required|min_length[9]|xss_clean');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[1]|xss_clean');
		
		$this->form_validation->set_rules('year_level', 'Year Level', 'required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('degree_program', 'Degree Program', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('department', 'department', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('college', 'College', 'trim|required|min_length[1]|xss_clean');
		
		$this->form_validation->set_rules('room_assignment', 'Room Assignment', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required|min_length[1]|xss_clean');
		
		$this->form_validation->set_rules('scholarship', 'Scholarship', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('stfap_bracket', 'STFAP Bracket', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('religion', 'Religion', 'trim|min_length[1]|xss_clean');
		
		$this->form_validation->set_rules('birthday', 'Date of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('birthplace', 'Place of Birth', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('permanent_add', 'Permanent Address', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('civil_status', 'Civil Status', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('special_tag', 'Special Tag', 'trim|min_length[1]|xss_clean');

		$this->form_validation->set_rules('father_name', 'Name of Father', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('father_add', 'Address of Father', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('father_num', 'Number of Father', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('father_status', 'Status of Father', 'trim|required|min_length[1]|xss_clean');

		$this->form_validation->set_rules('mother_name', 'Name of Mother', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('mother_add', 'Address of Mother', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('mother_num', 'Number of Mother', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('mother_status', 'Status of Mother', 'trim|required|min_length[1]|xss_clean');

		$this->form_validation->set_rules('guardian_name', 'Name of Guardian', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('guardian_add', 'Address of Guardian', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('guardian_num', 'Number of Guardian', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('guardian_status', 'Status of Mother', 'trim|required|min_length[1]|xss_clean');

		if($this->form_validation->run() == FALSE) {
			$this->edit_profile();
		} else {
			$this->admin_model->update_dormer();
			$message = "You have successfully updated a dormer profile.";
			$this->add_successful($message);
		}
	}
	public function registration() {
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('student_number', 'Student Number', 'required|min_length[9]|xss_clean');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[1]|xss_clean');
		
		$this->form_validation->set_rules('year_level', 'Year Level', 'required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('degree_program', 'Degree Program', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('department', 'department', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('college', 'College', 'trim|required|min_length[1]|xss_clean');
		
		$this->form_validation->set_rules('room_assignment', 'Room Assignment', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required|min_length[1]|xss_clean');
		
		$this->form_validation->set_rules('scholarship', 'Scholarship', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('stfap_bracket', 'STFAP Bracket', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('religion', 'Religion', 'trim|min_length[1]|xss_clean');
		
		$this->form_validation->set_rules('birthday', 'Date of Birth', 'required|xss_clean');
		$this->form_validation->set_rules('birthplace', 'Place of Birth', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('permanent_add', 'Permanent Address', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('civil_status', 'Civil Status', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('special_tag', 'Special Tag', 'trim|min_length[1]|xss_clean');

		$this->form_validation->set_rules('father_name', 'Name of Father', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('father_add', 'Address of Father', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('father_num', 'Number of Father', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('father_status', 'Status of Father', 'trim|min_length[1]|xss_clean');

		$this->form_validation->set_rules('mother_name', 'Name of Mother', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('mother_add', 'Address of Mother', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('mother_num', 'Number of Mother', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('mother_status', 'Status of Mother', 'trim|min_length[1]|xss_clean');

		$this->form_validation->set_rules('guardian_name', 'Name of Guardian', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('guardian_add', 'Address of Guardian', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('guardian_num', 'Number of Guardian', 'trim|min_length[1]|xss_clean');
		$this->form_validation->set_rules('guardian_status', 'Status of Mother', 'trim|min_length[1]|xss_clean');

		if($this->form_validation->run() == FALSE) {
			$this->add_dormer();
		} else {
			$this->admin_model->add_dormer();
			$message = "You have successfully added a dormer profile.";
			$this->add_successful($message);
		}
	}

	public function search_keyword() {
		if ($this->input->get('keyword')!= "") {
			$data['results'] = $this->admin_model->search();
			$this->load->view('search_profiles_view', $data);
		}
		else {
			$this->view_resident_profiles();
		}
	}
	
	public function view_resident_profiles() {
		if(($this->session->userdata('user_name') != "")) {
			$data['title']= 'Resident Profiles';
			$config = array();
        	$config["base_url"] = "http://localhost/md/index.php/admin/view_resident_profiles";
        	$config["total_rows"] = $this->dormer_model->record_count();
        	$config["per_page"] = 10;
        	$config["uri_segment"] = 3;
 
        	$this->pagination->initialize($config);
 
        	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        	$data["results"] = $this->dormer_model->fetch_dormers($config["per_page"], $page);
        	$data["links"] = $this->pagination->create_links();
 
        	$this->load->view("resident_profiles_view.php", $data);
		} else {
			$this->index();
		}
	}	
	
	public function search_for_billing() {
		$data['result'] = $this->dormer_model->fetch_data();
		$this->load->view('result.php',$data);
	}

	public function search_for_payment() {
		$data['result'] = $this->dormer_model->fetch_data();
		$this->load->view('result2.php',$data);

	}

	public function view_financial_records() {
		if(($this->session->userdata('user_name') != "")) {
			$data['title']= 'Financial Records';
			$this->load->view('financial_records_view.php', $data);
		} else {
			$this->index();
		}		
	}

	public function view_indiv_profile() {
		if(($this->session->userdata('user_name') != "")) {
			$data['record'] = $this->dormer_model->fetch_data();
			$data['guardian'] = $this->dormer_model->fetch_guardian();
			$data['appliances'] = $this->dormer_model->fetch_appliances();

			$this->load->view('resident_individual_profile', $data);
		} else {
			$this->index();
		}		
	} 


	public function logout() {
		$newdata = array(
			'admin_id' =>'',
			'user_name' =>'',
			'first_name' => '',
			'middle_name' => '',
			'last_name' => '',
			'user_email' => '',
			'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$this->index();
	}
}
?>