<?php

class User_Profile extends CI_Controller {

    public function my_payments() {

        $id = $this->session->userdata('id');

        $this->load->model('Model_My_Profile');
        $result['payments'] = $this->Model_My_Profile->get_payments($id);

        if($result) {
            $this->load->view('user/my_payments',$result);
        }
        else {
            $this->load->view('user/my_payments');
        }

    }

    public function my_schedule() {

        $this->load->view('user/my_schedule');

    }

    public function my_enquiries() {

        $this->load->view('user/my_enquiries');

    }

}