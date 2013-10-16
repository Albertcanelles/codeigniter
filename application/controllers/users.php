<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {
	function __construct() {
		parent::__construct();
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
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
