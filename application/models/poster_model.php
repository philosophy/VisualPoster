<?php

    class Poster_model extends CI_Model {

        function get_posters($poster) {
            $query = $this->db->get_where('posters', array('name' => $poster));
            $records = array();
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $records = array(
                        'id' => $row->id,
                        'name' => $row->name,
                        'price' => $row->price,
                        'delivery_charge' => $row->delivery_charge,
                        'type' => $row->type
                    );
                }
                return $records;
            } else {
                return null;
            }
        }

        function get_poster_id($poster) {
            $query = $this->db->get_where('posters', array('name' => $poster));
            $row = $query->first_row('array');
            return $row['id'];
        }

        function get_poster_price($id, $range) {
            $sql = "SELECT * FROM poster_range WHERE poster_id = ? AND (? >= min_range AND ? <= max_range)";
            $query = $this->db->query($sql, array($id, $range, $range));
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $row) {
                   $price = $row['price'];
                }
                return $price;
            } else {
                return null;
            }
        }
    }

?>
