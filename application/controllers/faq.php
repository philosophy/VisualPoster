<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Faq extends CI_Controller {

    private $title = 'FAQ';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'faq/index';
        $data['faqLink'] = true;

        $this->load->view('layout/index', $data);
    }

}

?>
