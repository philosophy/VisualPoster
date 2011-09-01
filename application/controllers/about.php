<?php

class About extends CI_Controller {

    function index() {
        $data['title'] = 'About Us';
        $data['content'] = 'about/index';
        $data['banner'] = 'about/banner';
        $data['aboutlink'] = true;

        $category = isset($_GET['category']) ? $_GET['category'] : 'philosophy';
        $data['category'] = $category;

        $this->load->view('layout/index', $data);
    }
}
?>
