<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {
	function __construct() {
		parent::__construct();
<<<<<<< HEAD
		$this->load->database();
	    $this->load->model('Model_hello');
	    
		
=======
		$this->load->model('Model_hello');
>>>>>>> c90dc1a3d8697a2b00913eabe144637fca8fedbf
	}
	
	public function createusers(){
		
		$this->load->view('createusers');
<<<<<<< HEAD
		
	}
	public function deleteusers($id) {
		
		$this->load-astas>view('deleteusers');
=======
	}
	public function deleteusers($id) {
		
		$this->load->view('deleteusers');
>>>>>>> c90dc1a3d8697a2b00913eabe144637fca8fedbf
	}
	public function modifyusers($id){
		
		$this->load->view('modifyusers');
	}
	public function listusers(){
<<<<<<< HEAD
	    $data['hello'] = $this->Model_hello->hello();
		$this->load->view('listusers',$data);
		$data = array(
 			'ID' => '5030',
 			'Name' => 'Mi nombre' ,
 			'CountryCode' => 'ACP',
 			'District' => 'Maricon',
 			'Population' => '6666666'
		);
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
=======
		$data['hello'] = $this->Model_hello->hello();
		$this->load->view('listusers',$data);
	}
	
>>>>>>> c90dc1a3d8697a2b00913eabe144637fca8fedbf
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
