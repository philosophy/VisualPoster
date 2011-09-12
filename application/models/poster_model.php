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
            $this->db->where('id', $options['id']);
        }
        if (isset($options['name'])) {
            $this->db->where('name', $options['name']);
        }
        if (isset($options['status'])) {
            $this->db->where('status', $options['status']);
        }

        $query = $this->db->get('posters');

//            return $query->result_array();
        return $query->result();
    }

    // update poster
    function update_poster($options=array()) {
        if (!$this->_required(array('id'), $options)) { return false;}

        if (isset($options['id'])) {
            $this->db->where('id', $options['id']);
        }
        if (isset($options['name'])) {
            $this->db->set('name', $options['name']);
        }
        if (isset($options['min_order'])) {
            $this->db->set('min_order', $options['min_order']);
        }
        if (isset($options['price'])) {
            $this->db->set('price', $options['price']);
        }
        if (isset($options['size'])) {
            $this->db->set('size', $options['size']);
        }
        if  (isset($options['min_order_price'])) {
            $this->db->set('min_order_price', $options['min_order_price']);
        }
        if  (isset($options['setup_fee'])) {
            $this->db->set('setup_fee', $options['setup_fee']);
        }
        if  (isset($options['delivery_charge'])) {
            $this->db->set('delivery_charge', $options['delivery_charge']);
        }
        if  (isset($options['type'])) {
            $this->db->set('type', $options['type']);
        }
        if (isset($options['status'])) {
            $this->db->set('status', $options['status']);
        }

//        $options = $this->_default(array('created_at' => ''), $options);
        $this->db->update('posters');
        return $this->db->affected_rows();
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
