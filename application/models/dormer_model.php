<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dormer_model extends CI_Model {
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

		$query = $this->db->get("dormer");
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $rows) {
				//add all data to session
				$newdata = array(
					'dormer_id'  => $rows->dormer_id,
					'user_name'  => $rows->username,
					'first_name'  => $rows->first_name,
					'middle_name'  => $rows->middle_name,
					'last_name'  => $rows->last_name,
					'user_email'    => $rows->email,
					'logged_in'  => TRUE,
				);
			}
			$this->session->set_userdata($newdata);
			return true;
		}
		return false;
	}

	public function record_count() {
		return $this->db->count_all("dormer");
	}

	public function fetch_dormers($limit, $start) {
		$this->db->limit($limit, $start);

		$query = $this->db->get("dormer");
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $rows) {
				$data[] = $rows;
			}
			return $data;
		}
		return false;
	}

	public function fetch_data() {
		$identifier = $this->input->get('student_number');

		$this->db->where('student_number', $identifier);
		$query = $this->db->get('dormer');

        return $query->row();
	}

	public function fetch_guardian() {
		$identifier = $this->input->get('student_number');

		$this->db->where('student_number', $identifier);
		$query = $this->db->get('guardian');
		
        return $query->row();
	}

	public function fetch_appliances() {
		$identifier = $this->input->get('student_number');

		$this->db->where('student_number', $identifier);
		$query = $this->db->get('appliance');
		
        return $query->result();
	}
}
?>