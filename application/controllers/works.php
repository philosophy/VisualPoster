<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Works extends CI_Controller {
    function index() {
        $data['title'] = 'Works';
        $data['content'] = 'works/index';
        $data['banner'] = 'works/banner';
        $data['worklink'] = true;

        $category = isset($_GET['category']) ? $_GET['category'] : 'philosophy';
        $data['category'] = $category;

        $this->load->view('layout/index', $data);
    }
}

?>
