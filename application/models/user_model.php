<?php

class User_model extends CI_Model {

    function add_user($user_array) {
        // Insert the new user array into the users table
        return $this->db->insert('users', $user_array);
    }

    function auth_user($email, $password) {
        // Select the following fields
        $this->db->select('id,
         email,
         password');
        // From the users table
        $this->db->from('users');
        // Where email address and password match the params we passed into the function.
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        // Get the results
        $query = $this->db->get();
        // There should be only 1 row.
        if ($query->num_rows() === 1) {
            $row = $query->row();
            // Return the users id.
            return $row->id;
        } else {
            return false;
        }
    }

    function login() {
        // Set required fields
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Form has not yet been posted, load the login form page
            $this->load->view('login_form');
        } else {
            // Form validation passed and has been posted
            // Get the email field
            $email = $this->input->post('email');
            // Get the password and sha1() encrypt it to compare it to the version in the database
            $pass = sha1($this->input->post('password'));

            // Authenticate the user
            $user_id = $this->User_model->auth_user($email, $pass);

            if ($user_id) {
                // Add the users id to the session.
                $userdata = array(
                    'user_id' => $user_id
                );

                $this->session->set_userdata($userdata);

                // Users first login, taken them to the details page.
                redirect('/');
            } else {
                // The auth function return false, lets redirect back to this page so they can
                // fill in the login for again.
                redirect(current_url());
            }
        }
    }

}