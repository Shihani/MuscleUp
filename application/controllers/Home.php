<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->view('home');
	}

    public function login() {
        $this->load->view('login');
    }

    public function sign_up() {
        $this->load->view('sign_up');
    }

    public function success_stories() {
        $this->load->view('stories/success_stories');
    }

    public function articles() {
        $this->load->view('articles');
    }

    public function forum() {
        $this->load->view('forum');
    }

    public function my_profile() {
        $this->load->view('user/my_profile_main');

    }

}
