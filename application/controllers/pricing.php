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
                    $price = 830.00;
                    break;
                case 'a2':
                    $poster = 'A2';
                    $min_order = 500;
                    $price = 395.00;
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
            $data['price'] = $price;
            $data['banner'] = 'pricing/banner';
            $data['content'] = 'pricing/show';

            $this->parser->parse('layout/index', $data);
        }
    }
?>
