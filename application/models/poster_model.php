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
                        'delivery_charge' => $row->delivery_charge
                    );
                }
                return $records;
            } else {
                echo 'no data';
                return null;
            }
        }

    }

?>
