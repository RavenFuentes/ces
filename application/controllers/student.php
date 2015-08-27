<?php
class Student extends Admin_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
        $this->load->model('profile_m');
    }
    public function index() {
      
      $this->load->view('admin/student/index');

    }

         public function profile() {
      
      $id = $this->session->userdata('id');
      $data['student'] = $this->teacher_m->get($id);
      $this->load->view('admin/student/myprofile',$data);
    }

      public function update_profile(){

      $id = $this->session->userdata('id');
      $rules = $this->profile_m->rules_admin;
    $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == TRUE) {
       $data = array(
              'gender' => $this->input->post('gender'),
              'address' => $this->input->post('address'),
              'birthday' => $this->input->post('birthday'),
              'aboutme' => $this->input->post('aboutme'),
              'firstname' => $this->input->post('firstname'),
              'lastname' => $this->input->post('lastname')
              );
            $this->profile_m->save($data,$id);
            $this->session->set_flashdata('result', 'Profile Successfully Updated!');
            redirect('student/profile','refresh');
      }

    }


    public function change_pass(){

    $pass = $this->input->post('current_password');

    $password = $this->user_m->hash($pass);
    $id = $this->session->userdata('id');
    $this->db->where('password', $password);
    $this->db->where('id', $id);
    $query = $this->profile_m->get();
    //var_dump($query);
    if (count($query)) {

      $new_pass = $this->input->post('new_pass');
      $retype_pass = $this->input->post('retype_pass');

      if($new_pass == $retype_pass){

      $new_password = $this->user_m->hash($new_pass);
      $data = array(
              'password' => $new_password
              );
      $this->profile_m->save($data,$id);
      $this->session->set_flashdata('result', 'Password Successfully Updated!');
      redirect('teacher/profile','refresh');

      }else{
        var_dump('Password should Match!');
      }

      


    }


    }



       public function myfiles() {
     
      $this->load->view('admin/student/myfiles');

    }

       public function request() {
     
      $this->load->view('admin/student/request');

    }

       public function rankings() {
  
      $this->load->view('admin/student/rankings');

    }

       public function reports() {
   
      $this->load->view('admin/student/reports');

    }

     public function forum() {
     
      $this->load->view('admin/student/forum_db');

    }

        public function events() {
     
      $this->load->view('admin/student/events');

    }

      




    public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}