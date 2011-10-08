<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class MusicPosterHistory extends CI_Controller {

    private $title = 'Music Poster History';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'music_poster_history/index';

        $this->load->view('layout/index', $data);
    }

}
?>
