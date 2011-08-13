<?php

    class Poster_model extends CI_Model {

    function get_posters() {
        $query = $this->db->get('posters');
        $records = array();
        $i = 0;
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $records[$i] = array(
                    'id' => $row->id,
                    'name' => $row->name,
                    'min_order' => $row->min_order,
                    'price' => $row->price
                );
                $i++;
            }
            return $records;
        } else {
            echo 'no data';
            return null;
        }
    }

}

?>
