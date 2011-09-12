<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class AdminPoster extends CI_controller {

        private $tables = array(array('id'=>1, 'title'=>'Posters', 'link'=>'', 'table'=>'posters', 'model'=>'Poster_model'),
                             array('id'=>2,'title' => 'Poster Price Range', 'link' => '', 'table'=>'poster_range', 'model'=>'Poster_range_model'));


//        function Posters {
//
//        }

        // list posters
        function index() {
        }

        // add posters
        function add() {
            $data['action'] = 'add';
            // Load dependencies
            $this->form_validation->set_rules('name', 'Poster Name', 'trim|required');

            if ($this->form_validation->run()) {
                // validation passed

                $poster_id = $this->Poster_model->add_poster($_POST);

                if(!isset($poster_id)) {
                    $this->loadForm($data);
                } else {
                    redirect('/admin');
                }

            } else {
                $this->loadForm($data);

            }

        }

        // update posters
        function edit() {
            $data['action'] = 'edit';
            $posterId = $this->uri->segment(4);
            $data['data'] = $this->Poster_model->get_data(array('id'=>$posterId));

            // Load dependencies
            $this->form_validation->set_rules('name', 'Poster Name', 'trim|required');

            if ($this->form_validation->run()) {
                // validation passed
                $_POST['id'] = $posterId;
                if($this->Poster_model->update_poster($_POST)) {
                    redirect('/admin');
                } else {

                }
            } else {
                $this->loadForm($data);

            }

            $this->loadForm($data);
        }

        // delete posters
        function delete() {
            $data['action'] = 'delete';
            $posterId = $this->uri->segment(4);

            if (isset($posterId)) {
                if($this->Poster_model->update_poster(array('status'=>1, 'id'=>$posterId))){
                    redirect('/admin');
                }
            }
        }

        private function loadForm($data=array()) {
            $data['current_table'] = 'posters';

            $data['title'] = 'Admin';
            $data['content'] = 'admin/index';
            $data['tables'] = $this->tables;


            $model = 'Poster_model';
            $data['data'] = $this->$model->get_data();

            $this->load->view($this->config->item('default_layout'), $data);
        }
    }

?>
