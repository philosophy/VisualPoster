<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class FluroBackground extends CI_Controller {

    private $title = 'Fluro Background';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'fluro_background/index';

        $this->load->view('layout/index', $data);
    }

}
?>
