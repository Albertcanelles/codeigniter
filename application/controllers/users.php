<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {

	
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
		
		$this->load->view('listusers');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
