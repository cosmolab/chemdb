<?php
/**
 * Gather information on projects from the database.
 *
 * @package ChemDatabase
 **/ 
class Project extends Model {
	
	/**
	 * Construct the class and load the database.
	 *
	 * @return void
	 **/
	function Project() {
		parent::Model();
		$this->load->database('base_chem');
		$this->load->helper('query');
	}
	
	/**
	 * Get all project records.
	 *
	 * @return object
	 **/
	function get_all() {
		$data = array();
		$q = $this->db->get('projects');
		if ($record->num_rows() > 0) {
			$data = $q->result();
		}
		
		$q->free_result();
		return $data;
	}
	
	/**
	 * Get an individual project.
	 *
	 * @param integer project's id number
	 * @return void
	 */
	function get_project($id) {
		$data = array();

		$q = $this->db->get_where('projects', array('id' => $id), 1);
		if ($q->num_rows() > 0) {
			$data = $q->row();
		}
		
		$q->free_result();
		return $data;
	}
	
	/**
	 * Insert a project into the projects table.
	 *
	 * @param array Associative array of field => value.
	 * @return void
	 **/
	function insert_project($data) {
		$q = $this->db->get_where('projects', array('name' => $data->name), 1);
		if ($this->db->num_results() < 0) {
			$this->db->insert('projects', $data);
		} else {
			// already exists
		}
		
	}
	
}

/* End of file project.php */
/* Location: ./system/application/controllers/project.php */

