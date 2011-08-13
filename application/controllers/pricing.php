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
            switch($_GET['poster']) {
                case 'a1':
                    $poster = 'A1';
                    $min_order = 500;
                    $min_order_price = 830.00;
                    $price = '18.50';
                    $setup_fee = '30.00';
                    $min_delivery = '100';
                    $min_delivery_charge = '20.00';
                    $delivery_charge = '35.00';
                    break;
                case 'a2':
                    $poster = 'A2';
                    $min_order = 500;
                    $price = 395.00;
                    $setup_fee = '30.00';
                    $min_delivery = '200';
                    $min_delivery_charge = '20.00';
                    $delivery_charge = '35.00';
                    break;
                case 'a3':
                    $poster = 'A3';
                    $min_order = 500;
                    $price = 100.00;
                    break;
                case 'fluro_print1':
                    $poster = 'Fluro Prints 1';
                    $poster_size = '688mm × 1000mm';
                    $poster_id = 'fluro-print1';
                    $min_order = 500;
                    $price = 100.00;
                    break;
                case 'fluro_print2':
                    $poster = 'Fluro Prints 2';
                    $poster_size = '1350mm × 1960mm';
                    $poster_id = 'fluro-print2';
                    $min_order = 500;
                    $price = 100.00;
                    break;
                case 'pole_poster':
                    $poster = 'Pole Posters';
                    $poster_size = '688mm × 1000mm';
                    $poster_id = 'pole-poster';
                    $min_order = 500;
                    $price = 100.00;
                    break;
            }

            $data['poster'] = $poster;
            $data['poster_size'] = isset($poster_size) ? $poster_size : null;
            $data['poster_id'] = isset($poster_id) ? $poster_id : null;
            $data['min_order'] = $min_order;
            $data['min_order_price'] = $min_order_price;
            $data['min_delivery'] = $min_delivery;
            $data['price'] = $price;
            $data['banner'] = 'pricing/banner';
            $data['content'] = 'pricing/show';
            $data['setup_fee'] = isset($setup_fee) ? $setup_fee : null;
            $data['min_delivery_charge'] = isset($min_delivery_charge) ? $min_delivery_charge : null;
            $data['delivery_charge'] = isset($delivery_charge) ? $delivery_charge : null;

            $this->load->model('Poster_model');
            $posters = $this->Poster_model->get_posters();

            $this->parser->parse('layout/index', $data);
        }
    }
?>
