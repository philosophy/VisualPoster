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
            $this->load->model('Poster_model');
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

            $this->load->model('Poster_model');

            $poster = $_POST['poster'];
            $num    = $_POST['num'];

            $id = $this->Poster_model->get_poster_id($poster);
            $sql = "SELECT * FROM poster_range WHERE poster_id = ? AND min_range >= ? AND max_range <= ?";
            $query = $this->db->query($sql, array($id, $num, $num));
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                   $data['price'] = $row['price'];
                }

                $data['poster'] = $poster;

                CI_Functions::send_json_response(INFO_LOG, HTTP_OK, 'testing response', $data);
             } else {
                CI_Functions::send_json_response('test', HTTP_BAD_REQUEST, 'no data found');
             }
        }

        function export_data() {
            $this->load->library('excel_xml');

            $title = array('Type', 'Products', 'Paper Type', 'Charge per Delivery', 'Delivery Points', 'No. of copies', 'Price', 'Price w/ 10% GST');

            $test = array(
                0 => array('Nr.', 'Name', 'E-Mail'),
                array(1, 'Oliver Schwarz', 'oliver.schwarz@gmail.com'),
                array(2, 'Hasematzel', 'hasematzel@gmail.com')
            );

//            print_r($test);
//            echo '<br /><br />';

//            print_r($title);
//            echo '<br /><br />';
//            $data[] = $title;
//            print_r($data);
            $list = $_GET['list'];

            $data = json_decode($list, true);
            array_unshift($data, $title);
//            print_r($data);
//            echo '<br /><br />';
//            print_r($data);
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
