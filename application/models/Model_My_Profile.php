<?php

class Model_My_Profile extends CI_Model {

    public function get_payments($id) {

        $query = $this->db->query("SELECT payments.id, payments.category, payments.method, payments.amount, payments.date FROM muscleup.payments WHERE payments.userId = '$id';");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }

    }


}