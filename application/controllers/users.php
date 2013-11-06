<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->database();
	    $this->load->model('Model_hello');
	}
	
	public function createusers(){
		$this->load->view('createusers');
	}

	public function deleteusers($id) {
		$this->load->view('deleteusers');
	}
	public function modifyusers($id){
		$this->load->view('modifyusers');
	}
	public function listusers(){

	    $data['hello'] = $this->Model_hello->hello();
		$this->load->view('listusers',$data);
		$data = array(
 			'ID' => '5038',
 			'Name' => 'Mi nombre' ,
 			'CountryCode' => 'ACP',
 			'District' => 'Maricon',
 			'Population' => '6666666');

		$this->db->insert('City', $data); 
		$query = $this->db->get('City');
		$this->db->insert_id();
		$this->db->affected_rows();	
		
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
		{
			echo $row->ID;
			echo $row->Name;
			echo "<br>";
				}         
			}	
		}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
