<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class Pricing extends CI_Controller {
        function index() {
            $data['title'] = 'Pricing';
            $data['content'] = 'pricing/index';
            $data['banner'] = 'pricing/banner';
            $data['pricinglink'] = true;

            $this->load->library('parser');
            $this->parser->parse('layout/index', $data);
        }

        function testing() {
            echo 'testestinasflasjdf';
        }

    }
?>
