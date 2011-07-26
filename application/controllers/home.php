<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class Home extends CI_Controller {
        function index() {
            $data['title'] = 'Visual Posters';
//            $content = $this->load->view('');

            $this->load->helper('asset');
            $this->load->library('parser');
            $this->parser->parse('layout/index', $data);
        }

    }

?>
