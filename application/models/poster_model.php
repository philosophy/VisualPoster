<?php

class Poster_model extends CI_Model {

    /**
     *
     *  create poster
     *
     * OPTIONS: Values
     * name
     * min_order
     * price
     * size
     * delivery_charge
     * type
     */
    function add_poster($options=array()) {
        if (!$this->_required(array('name'), $options)) { return false;}

//        $options = $this->_default(array('created_at' => ''), $options);
        $this->db->insert('posters', $options);
        return $this->db->insert_id();
    }

    /* retrieve poster */
    /*
     * OPTIONS:
     * id
     * name
     */

    function get_data($options=array()) {
        if (isset($options['id'])) {
            $this->db->set('id', $options['id']);
        }
        if (isset($options['name'])) {
            $this->db->set('name', $options['name']);
        }

        $query = $this->db->get('posters');

//            return $query->result_array();
        return $query->result();
    }

    // update poster
    function update_poster($options=array()) {

    }

    // delete poster
    function delete_poster($options=array()) {

    }

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

    function _required($required, $data) {
        foreach ($required as $field) {
            if (!isset($data[$field])) {
                return FALSE;
            }
        }
        return TRUE;
    }

}

?>
