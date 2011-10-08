<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PosterTiming extends CI_Controller {

    private $title = 'Poster Timing';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'poster_timing/index';

        $this->load->view('layout/index', $data);
    }

}
?>
