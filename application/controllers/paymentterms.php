<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PaymentTerms extends CI_Controller {

    private $title = 'Payment Terms';

    function index() {
        $data['title'] = $this->title;
        $data['content'] = 'payment_terms/index';
        $data['paymentTermsLink'] = true;

        $this->load->view('layout/index', $data);
    }

}

?>
