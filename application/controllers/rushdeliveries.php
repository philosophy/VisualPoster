<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class RushDeliveries extends CI_Controller {

    private $title = 'Rush Deliveries';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'rush_deliveries/index';
        $data['rushlink'] = true;

        $this->load->view('layout/index', $data);
    }

}
?>
