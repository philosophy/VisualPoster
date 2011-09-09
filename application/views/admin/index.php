<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



?>

<h1 class="title"> User Authentication</h1>
<?php
    if (isset($user)) {
        $this->load->view('user/login');
    } else {
        $this->load->view('admin/view');
    }
?>
