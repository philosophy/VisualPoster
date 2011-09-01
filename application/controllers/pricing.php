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

            $data['poster'] = $poster;
            $data['poster_size'] = isset($poster_size) ? $poster_size : null;
            $data['poster_id'] = isset($poster_id) ? $poster_id : null;
            $data['delivery_charge'] = isset($delivery_charge) ? $delivery_charge : null;
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
            $poster = $_POST['poster'];
            $num    = $_POST['num'];

            $sql = "SELECT price FROM poster_range WHERE poster_id = ? AND min_range >= ? AND max_range <= ?";
            $query = $this->db->query($sql, array(1, $num, $num));
//            echo $this->db->last_query();
            foreach ($query->result_array() as $row) {
               $data['price'] = $row['price'];
            }
            $data['poster'] = $poster;

            if (isset($poster)) {
                CI_Functions::send_json_response(INFO_LOG, HTTP_OK, 'testing response', $data);
            } else {
                CI_Functions::send_json_response('test', HTTP_BAD_REQUEST, 'error response', $data);
            }
        }

        private function default_details($data) {
            $data['title'] = 'Pricing';
            $data['banner'] = 'pricing/banner';
            $data['pricinglink'] = true;

            return $data;
        }
    }
?>
