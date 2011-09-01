<?php

    if (isset($category) && $category =='philosophy') {
        $this->load->view('about/philosophy/left_content');
        $this->load->view('about/philosophy/main_content');
    } else {
        $this->load->view('about/team/left_content');
        $this->load->view('about/team/main_content');
    }
?>
