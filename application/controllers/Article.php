<?php
/**
 * Created by PhpStorm.
 * User: ylmat
 * Date: 11/27/2018
 * Time: 1:34 AM
 */

class Article extends CI_Controller {

    public function articles() {

        $this->load->model('Model_Article');
        $result['articles'] = $this->Model_Article->get_articles();

        if($result!=false) {

            $this->load->view('articles', $result);

        }
        else {
            echo "Something went wrong !";
        }

    }

    public function view_full_article () {

        $id = $this->input->get('id');
        $this->load->model('Model_Article');

        $result = $this->Model_Article->get_full_article($id);

        if($result!=false) {

            $data['article'] = array(

                'id' => $result->id,
                'title' => $result->title,
                'details' => $result->details,
                'timestamp' => $result->timestamp,
                'image' => $result->image,

            );

            $this->load->view('full_article', $data);

        }
        else {
            echo "Something went wrong !";
        }

    }
}