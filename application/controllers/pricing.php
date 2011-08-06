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

            $this->load->view('layout/index', $data);
        }

        function show() {
            $data['poster'] = 'A1';
            $data['min_order'] = 500;
            $data['price'] = 830.00;
            $data['banner'] = 'pricing/banner';
            $data['content'] = 'pricing/show';

            $this->load->view('layout/index', $data);
        }
    }
?>
