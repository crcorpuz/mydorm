<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
	}

	function login($email, $password) {
		$this->db->where("email", $email);
		$this->db->where("password", $password);

		$query = $this->db->get("dorm_admin");
		
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $rows) {
				//add all data to session
				$newdata = array(
					'admin_id'  => $rows->admin_id,
					'first_name'  => $rows->first_name,
					'middle_name'  => $rows->middle_name,
					'last_name'  => $rows->last_name,
					'user_name'  => $rows->username,
					'user_email'    => $rows->email,
					'logged_in'  => TRUE,
				);
			}
			$this->session->set_userdata($newdata);
			return true;
		}
		return false;
	}
	
	public function search() {
		$choice = $this->input->get('choice');
		$keyword = $this->input->get('keyword');
		
		if ($choice == "firstname") {
			$this->db->like('first_name', $keyword);
		}
		else if ($choice == "lastname") {
			$this->db->like('last_name', $keyword);
		}
		else if ($choice == "studentnumber") {
			$this->db->like('student_number', $keyword);
		}
		else if ($choice == "stfapbracket") {
			$this->db->like('stfap_bracket', $keyword);
		}
		else if ($choice == "roomnumber" ) {
			$this->db->like('room_assignment', $keyword);
		}
		else if($choice == "corridor") {
			$this->db->like('room_assignment', $keyword);
		}
		
		$query = $this->db->get('dormer');
        return $query->result();
	}
	
	public function add_dormer() {

		$student_number = $this->input->post('student_number');

		$dormer_data = array(
			'student_number' => $student_number,
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name' => $this->input->post('last_name'),
			'year_level' => $this->input->post('year_level'),
			'degree_program' => $this->input->post('degree_program'),
			'college' => $this->input->post('college'),
			'department' => $this->input->post('department'),
			'room_assignment' => $this->input->post('room_assignment'),
			'email' => $this->input->post('email_address'),
			'phone_number' => $this->input->post('phone_number'),
			'scholarship' => $this->input->post('scholarship'),
			'stfap_bracket' => $this->input->post('stfap_bracket'),
			'religion' => $this->input->post('religion'),
			'birthday' => $this->input->post('birthday'),
			'birthplace' => $this->input->post('birthplace'),
			'permanent_add' => $this->input->post('permanent_add'),
			'civil_status' => $this->input->post('civil_status'),
			'special_tag' => $this->input->post('special_tag')
		);

		$guardian_data = array(
			'student_number' => $student_number,
			'father_name' => $this->input->post('father_name'),
			'father_add' => $this->input->post('father_add'),
			'father_num' => $this->input->post('father_num'),
			'father_status' => $this->input->post('father_status'),
			'mother_name' => $this->input->post('mother_name'),
			'mother_add' => $this->input->post('mother_add'),
			'mother_num' => $this->input->post('mother_num'),
			'mother_status' => $this->input->post('mother_status'),
			'guardian_name' => $this->input->post('guardian_name'),
			'guardian_add' => $this->input->post('guardian_add'),
			'guardian_num' => $this->input->post('guardian_num'),
			'guardian_status' => $this->input->post('guardian_status')
		);

		$items = $this->input->post('item_name');

		$this->db->insert('dormer', $dormer_data);
		$this->db->insert('guardian', $guardian_data);

		foreach ($items as $item) {
			$appliance_data = array(
				'student_number' => $student_number,
				'item_name' => $item
			);
			$this->db->insert('appliance', $appliance_data);
		}
	}

	public function update_dormer() {

		$student_number = $this->input->post('student_number');

		$dormer_data = array(
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name' => $this->input->post('last_name'),
			'year_level' => $this->input->post('year_level'),
			'degree_program' => $this->input->post('degree_program'),
			'college' => $this->input->post('college'),
			'department' => $this->input->post('department'),
			'room_assignment' => $this->input->post('room_assignment'),
			'email' => $this->input->post('email_address'),
			'phone_number' => $this->input->post('phone_number'),
			'scholarship' => $this->input->post('scholarship'),
			'stfap_bracket' => $this->input->post('stfap_bracket'),
			'religion' => $this->input->post('religion'),
			'birthday' => $this->input->post('birthday'),
			'birthplace' => $this->input->post('birthplace'),
			'permanent_add' => $this->input->post('permanent_add'),
			'civil_status' => $this->input->post('civil_status'),
			'special_tag' => $this->input->post('special_tag')
		);
		
		$guardian_data = array(
			'father_name' => $this->input->post('father_name'),
			'father_add' => $this->input->post('father_add'),
			'father_num' => $this->input->post('father_num'),
			'father_status' => $this->input->post('father_status'),
			'mother_name' => $this->input->post('mother_name'),
			'mother_add' => $this->input->post('mother_add'),
			'mother_num' => $this->input->post('mother_num'),
			'mother_status' => $this->input->post('mother_status'),
			'guardian_name' => $this->input->post('guardian_name'),
			'guardian_add' => $this->input->post('guardian_add'),
			'guardian_num' => $this->input->post('guardian_num'),
			'guardian_status' => $this->input->post('guardian_status')
		);

		$this->db->where('student_number', $student_number);
		$query = $this->db->update('dormer', $dormer_data);

		$this->db->where('student_number', $student_number);
		$query = $this->db->update('guardian', $guardian_data);

		$items = $this->input->post('item_name');

		$this->db->where('student_number', $student_number);
		$query = $this->db->get('appliance');

		foreach ($query->result() as $appliance) {
			$found = False;
			foreach ($items as $item) {
				if ($appliance->item_name == $item) { #remain
					$found = True;
					$items = array_diff($items, array($item));
					break;
				}
			}
			if ($found == False) { #delete
				$this->db->where('student_number', $student_number);
				$this->db->where('item_name', $appliance->item_name);
				$this->db->delete('appliance');
			}
		}
		foreach ($items as $item) { #new
			$appliance_data = array(
				'student_number' => $student_number,
				'item_name' => $item
			);
			$this->db->insert('appliance', $appliance_data);
		}
	}

	/*
this part is currently not in use
	public function record_count() {
        return $this->db->count_all("dormer");
    }
 
    public function fetch_dormers($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("dormer");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
*/
   
}
?>