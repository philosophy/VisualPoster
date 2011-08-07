<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ContactUs extends CI_Controller {

    function index() {
        $data['title'] = 'Contact Us';
        $data['content'] = 'contact_us/index';
        $data['banner'] = 'contact_us/banner';
        $data['contactlink'] = true;

        $this->load->view('layout/index', $data);
    }
}
?>
