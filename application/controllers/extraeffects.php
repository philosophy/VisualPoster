<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ExtraEffects extends CI_Controller {

    private $title = 'Extra Effects';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'extra_effects/index';
        $data['extraeffects_link'] = true;

        $this->load->view('layout/index', $data);
    }

}
?>
