<?php
class About extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
      $this->load->view('admin/about');

    }
}