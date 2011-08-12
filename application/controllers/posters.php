<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class Posters extends CI_Controller {
        function index() {

        }

        function show() {
            $poster = $_GET['poster'];

            $data['content'] = 'poster_specifications/index';
            $data['poster'] = $poster;
            $this->parser->parse('layout/index', $data);
        }
    }

?>
