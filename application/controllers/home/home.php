<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class Home extends CI_Controller {
        function index() {
            $data['title'] = 'Visual Posters';
            $data['content'] = 'home/index';
            $data['banner'] = 'home/banner';
            $data['homelink'] = true;

            $this->parser->parse('layout/index', $data);
        }

    }

?>
