<?php

    class Poster_range_model extends CI_Model {

        /**
         * Create Poster Range of prices
         *
         * REQUIRED:
         * min_range
         * max_range
         * poster_id
         * price
         *
         */
        function add_poster_range($options=array()) {
//            echo 'options';print_r($options);die();
            if (!$this->_required(array('min_range', 'max_range', 'poster_id', 'price'), $options)) {return false;}

            $this->db->insert('poster_range', $options);

            return $this->db->insert_id();
        }

        /**
         * Update Poster Range
         * OPTIONS:
         * min_range
         * max_range
         * poster_id
         * price
         */
        function update_poster_range($options=array()) {

        }

        /**
         * Retrieve poster range
         */
        function get_data($options=array()) {
            if(isset($options['poster_id'])) {
                $this->db->set('poster_id', $options['poster_id']);
            }

            $this->db->select('*, posters.name as name, poster_range.price as poster_price');
            $this->db->from('poster_range');
            $this->db->join('posters', 'posters.id = poster_range.poster_id');
            $this->db->order_by("name asc, min_range asc");
            $query = $this->db->get();

            return $query->result();
        }

        private function _required($required, $data) {
            foreach ($required as $field) {
                if (!isset($data[$field])) {
                    return FALSE;
                }
            }
            return TRUE;
        }

    }

?>