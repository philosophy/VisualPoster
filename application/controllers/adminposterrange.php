<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class AdminPosterRange extends CI_Controller {

        private $tables = array(array('id'=>1, 'title'=>'Posters', 'link'=>'', 'table'=>'posters', 'model'=>'Poster_model'),
                             array('id'=>2,'title' => 'Poster Price Range', 'link' => '', 'table'=>'poster_range', 'model'=>'Poster_range_model'));

        function index() {
        }

        // add poster price range
        function add() {

            // Load dependencies
            $this->form_validation->set_rules('min_range', 'Poster Name', 'trim|required|integer');
            $this->form_validation->set_rules('max_range', 'Poster Name', 'trim|required|integer');
            $this->form_validation->set_rules('poster_id', 'Poster Name', 'trim|required|integer');
            $this->form_validation->set_rules('price', 'Poster Name', 'trim|required|decimal');

            if ($this->form_validation->run()) {
                // validation passed
                $poster_id = $this->Poster_range_model->add_poster_range($_POST);

                if(!isset($poster_id)) {
                    $this->loadAddForm();
                } else {
                    redirect('/admin');
                }

            } else {
                $this->loadAddForm();

            }

        }

        // update posters
        function edit() {

        }

        // delete posters
        function delete() {

        }

        private function loadAddForm() {
            $data['current_table'] = 'poster_range';
            $data['action'] = 'add';

            $data['title'] = 'Admin';
            $data['content'] = 'admin/index';
            $data['tables'] = $this->tables;


            $model = 'Poster_model';
            $data['data'] = $this->$model->get_data();

            $this->load->view($this->config->item('default_layout'), $data);
        }
    }

?>
