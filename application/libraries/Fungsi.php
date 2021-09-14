<?php

Class Fungsi {

    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
        $this->ci->load->model('User_M', 'user_model');
    }

    function getUserLoginData(){
        // $this->ci->load->model('User_M');
        $id = $this->ci->session->userdata('userId');
        $user_data = $this->ci->user_model->get($id)->row();
        return $user_data;
    }
}