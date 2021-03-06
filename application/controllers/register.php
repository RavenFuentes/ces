<?php
class Register extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
      $this->load->view('admin/register');

    }


    public function insert(){
		
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$role = $this->input->post('role');
		$this->load->model('user_m');
		$data = array(
		   'firstname' => $firstname ,
		   'lastname' => $lastname ,
		   'username' => $username ,
		   'password' => $this->user_m->hash($password),
		   'email' => $email ,
		   'role' => $role
		);
		$this->user_m->save($data);
		$this->session->set_flashdata('result', 'Successfully Registered!');
		redirect('/register/','refresh');

	}

}