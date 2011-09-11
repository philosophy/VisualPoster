<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class Posters extends CI_Controller {

//        function Posters {
//
//        }

        // list posters
        function index() {

        }

        function show() {
            $poster = $_GET['poster'];

            $data['content'] = 'poster_specifications/index';
            $data['poster'] = $poster;
            $this->parser->parse('layout/index', $data);
        }

        // add posters
        function add() {

            $data['content'] = 'admin/posters/posters_add_form';

            $this->load->view($this->config->item('default_layout'), $data);
        }

        // update posters
        function edit() {

        }

        // delete posters
        function delete() {

        }
    }

?>
