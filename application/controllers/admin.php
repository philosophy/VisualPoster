<?php

class Admin extends CI_Controller {

    function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        } else {
            redirect('admin/view');
        }

        $this->load->view('layout/index', $data);
    }

    function view() {
        $data['title'] = 'Admin';
        $data['content'] = 'admin/index';
    }
}
?>
