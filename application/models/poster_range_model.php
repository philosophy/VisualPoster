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
             if (!$this->_required(array('id'), $options)) { return false;}

            if (isset($options['id'])) {
                $this->db->where('id', $options['id']);
            }
            if (isset($options['min_range'])) {
                $this->db->set('min_range', $options['min_range']);
            }
            if (isset($options['max_range'])) {
                $this->db->set('max_range', $options['max_range']);
            }
            if (isset($options['price'])) {
                $this->db->set('price', $options['price']);
            }
    //        $options = $this->_default(array('created_at' => ''), $options);
            $this->db->update('poster_range');
            return $this->db->affected_rows();
        }

        function delete_poster_range($options=array()) {
            if (isset($options['id'])) {
                $this->db->where('id', $options['id']);
            }

            $this->db->delete('poster_range');

            return $this->db->affected_rows();
        }

        /**
         * Retrieve poster range
         */
        function get_data($options=array()) {
            if(isset($options['range_id'])) {
                $this->db->where('poster_range.id', $options['range_id']);
            }

            $this->db->select('poster_range.id as range_id, min_range, max_range, poster_range.price as poster_price, posters.name as name, poster_range.price as poster_price');
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