<?php

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('admin/admin_main');
    }

    public function admin_articles() {
        $this->load->view('admin/admin_articles');
    }

    public function admin_forum() {
        $this->load->view('admin/admin_forum');
    }

    public function admin_enquiries() {
        $this->load->view('admin/admin_enquiries');
    }

}