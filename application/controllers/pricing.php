<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class Pricing extends CI_Controller {

        function index() {
            $data['content'] = 'pricing/index';
            $data = $this->default_details($data);

            $this->load->view('layout/index', $data);
        }

        function show() {
            $result = $this->Poster_model->get_posters($_GET['poster']);
            $poster = $result['name'];
            $price = $result['price'];
            $delivery_charge = $result['delivery_charge'];
            $type = $result['type'];

            $data['poster'] = $poster;
            $data['poster_size'] = isset($poster_size) ? $poster_size : null;
            $data['poster_id'] = isset($poster_id) ? $poster_id : null;
            $data['delivery_charge'] = isset($delivery_charge) ? $delivery_charge : null;
            $data['type'] = isset($type) ? $type : null;
            $data['price'] = $price;
            $data['content'] = 'pricing/show';
            $data = $this->default_details($data);

            $this->parser->parse('layout/index', $data);
        }

        function price_grid() {
            $data['content'] = 'pricing/price_grid';
            $data = $this->default_details($data);
            $this->parser->parse('layout/index', $data);
        }

        public function get_price() {
            $posterModel = $this->Poster_model;

            $poster = $_POST['poster'];
            $num    = $_POST['num'];

            $id = $posterModel->get_poster_id($poster);
            $data['poster'] = $poster;

            $data['price'] = $posterModel->get_poster_price($id, $num);
            if (isset($data['price'])) {
                CI_Functions::send_json_response(INFO_LOG, HTTP_OK, 'testing response', $data);
             } else {
                CI_Functions::send_json_response('test', HTTP_BAD_REQUEST, 'no data found');
             }
        }

        function export_data() {
            $this->load->library('excel_xml');

            $title = array('Type', 'Products', 'Paper Type', 'Charge per Delivery', 'Delivery Points', 'No. of copies', 'Price', 'Price w/ 10% GST');
            $list = $_GET['list'];

            $data = json_decode($list, true);
            array_unshift($data, $title);
            $xls = new CI_Excel_XML;
            $xls->addWorksheet('Posters', $data);
            $xls->sendWorkbook('Poster_Details.xls');
        }

        private function default_details($data) {
            $data['title'] = 'Pricing';
            $data['banner'] = 'pricing/banner';
            $data['pricinglink'] = true;

            return $data;
        }
    }
?>
