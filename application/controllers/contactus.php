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
        // Load dependencies
        $this->form_validation->set_rules('name', 'Name is required', 'trim|required');
        $this->form_validation->set_rules('email', 'Email is required', 'trim|required');
        $this->form_validation->set_rules('message', 'Message is required', 'trim|required');
        $this->form_validation->set_rules('number', '', '');

        if ($this->form_validation->run()) {
            $this->load->library('email');

            $email_to = 'marclambertagas@gmail.com';
            $email_from = $_POST['email'];
            $message = $_POST['message'].'<br /><br /><br /><br />Mobile: '.$_POST['number'].
                        '<br />Email: '.$email_from;
            $name = $_POST['name'];
            $subject = 'Visual Poster Messaging System';

            $this->email->from($email_from, $name);

            // email of michael
            $this->email->to($email_to);
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->send();

            $this->session->set_flashdata('message', 'Your message has been successfully sent!');

            redirect('/contactus');
        } else {
            $data['title'] = $this->title;
            $data['content'] = 'contact_us/index';
            $data['banner'] = 'contact_us/banner';
            $data['contactlink'] = true;

            $this->session->set_flashdata('message', 'Please fill up the required fields.');
            $this->load->view('layout/index', $data);
        }

    }

}
?>
