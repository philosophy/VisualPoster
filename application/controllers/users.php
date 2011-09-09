<?php

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    function login() {
        if($this->ion_auth->logged_in()) {
            redirect('/admin');
        } else {
            $data['title'] = 'Login User';
            $data['content'] = 'user/login';

            $this->load->view('layout/index', $data);
        }

    }

    function sign_in() {
        // Set required fields
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Form has not yet been posted, load the login form page
            redirect('users/login');
        } else {
            // Form validation passed and has been posted
            // Get the email field and password
            $email = $this->input->post('email');
            $pass = $this->input->post('password');

            $user_data = array('email' => $email, 'logged_in' => true);

            // Authenticate the user
            $logged_in = $this->ion_auth->login($email, $pass, 'false');
            if ($logged_in) {
                $this->session->set_userdata($user_data);

                //redirect to details page
                redirect('/admin');
            } else {
                redirect(current_url());
            }
        }
    }

    function sign_out() {
        $this->ion_auth->logout();
//        print_r($this->session->all_userdata());die();

        // destroy the session
        $this->session->sess_destroy();

        redirect('/admin');
    }

}

?>