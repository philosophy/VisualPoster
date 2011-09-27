<?php

class Admin extends CI_Controller {

    function __construct() {
       parent::__construct();

       // check is user is an admin
        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('message', 'You must login');
            redirect('users/login');
        } else if (!$this->ion_auth->is_admin()) {
            $this->session->set_flashdata('message', 'You must be an admin to view this page');
            redirect('/');
        }
    }

    /**
     *
     * tables that are maintained by an admin
     */

    private $tables = array(array('id'=>1, 'title'=>'Posters', 'link'=>'', 'table'=>'posters', 'model'=>'Poster_model'),
                             array('id'=>2,'title' => 'Poster Price Range', 'link' => '', 'table'=>'poster_range', 'model'=>'Poster_range_model'));

    private $actions = array('add', 'edit', 'delete');

    function index() {
        //defaults
        $data['title'] = 'Admin';
        $data['content'] = 'admin/index';
        $data['tables'] = $this->tables;

        $this->load->view($this->config->item('default_layout'), $data);
    }

    /**
     * @params id
     * @params action (optional)
     */
    function show() {
        $table_id = $this->uri->segment(3, 0);
        $table_action = $this->uri->segment(4, 0);

        $data['current_table'] = isset($this->tables[$table_id-1]) ? $this->tables[$table_id -1]['table'] : show_404();
        $data['table_id'] = $table_id;

        $model = $this->tables[$table_id-1]['model'];
        if ($table_action && in_array($table_action, $this->actions)) {
            $data['action'] = $table_action;

            if ($table_action == 'edit') {
                $dataId = $this->uri->segment(5,0);

                if ($data['current_table']=='posters') {
                    $data['poster'] = $this->$model->get_data(array('id'=>$dataId, 'status'=>0));
                } else {
                    $data['poster_range'] = $this->$model->get_data(array('range_id'=>$dataId, 'status'=>0));
                }
//                die(print_r($data['data']));
            }

            $data['posters'] = $this->Poster_model->get_data();
        }

        $data['title'] = 'Admin';
        $data['content'] = 'admin/index';
        $data['tables'] = $this->tables;

        if (!isset($data['data'])) {
            $data['data'] = $this->$model->get_data(array('status'=>0));
        }

        $this->load->view($this->config->item('default_layout'), $data);
    }
}
?>
