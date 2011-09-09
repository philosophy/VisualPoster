<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    if (isset($category) && $category == 'hall_of_fame') {
        $this->load->view('works/fame/left_content');
        $this->load->view('works/fame/main_content');
    } else {

    }

?>
