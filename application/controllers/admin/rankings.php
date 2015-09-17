<?php
class Rankings extends Admin_Controller {

    public function __construct(){
        parent::__construct();
         $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('pds');
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $id = $this->session->userdata('id');
      $data['admin'] = $this->admin_m->get($id);

      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
      $data['count_request'] = $query->num_rows();
      $this->load->view('admin/rankings', $data);

    }
}

?>