<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ContactUs extends CI_Controller {

    private $title = 'Contact Us';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'contact_us/index';
        $data['banner'] = 'contact_us/banner';
        $data['contactlink'] = true;

        $this->load->view('layout/index', $data);
    }

    function send_comment() {
        $this->session->set_flashdata('message', 'Message sent!');
        $this->load->library('email');
        $this->email->from('marclambertagas@gmail.com','Team OnePage');
        $this->email->to("marclambertagas@gmail.com");
        $this->email->subject('A test email from CodeIgniter using Gmail');
        $this->email->message("I can now email from CodeIgniter using Gmail as my server!");
        $this->email->send();

        $this->session->set_flashdata('message', 'Your message has been successfully sent!');

        redirect('/contactus');
    }

}
?>
