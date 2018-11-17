<?php

class Model_user extends CI_Model {

    function insert_user_data () {

        $data = array(

            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password')),
            'email' => $this->input->post('email'),
            'flag' => 'm',
            'name' => $this->input->post('name'),
            'dob' => $this->input->post('dob'),
            'nic' => $this->input->post('nic'),
            'address' => $this->input->post('address'),
            'contactNo' => $this->input->post('contact'),
        );

        return $this->db->insert('users', $data);

    }

    function login_user() {

        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('users');

        if($result->num_rows()==1) {
            return $result->row(0);
        }
        else {
            return false;
        }

    }


}