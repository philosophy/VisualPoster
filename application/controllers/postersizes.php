<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PosterSizes extends CI_Controller {

    private $title = 'Poster Sizes';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'poster_sizes/index';

        $this->load->view('layout/index', $data);
    }

}
?>
