<?php

function isLoginPsikolog(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('idpsikolog');
    if($user_session){
        redirect('dashboard/dashboardPsikolog');
    }
}

function isLogoutPsikolog(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('idpsikolog');
    if(!$user_session){
        redirect('auth');
    }
}


function isLoginPasien(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('idpasien');
    if($user_session){
        redirect('dashboard/dashboardPasien');
    }
}

function isLogoutPasien(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('idpasien');
    if(!$user_session){
        redirect('pasien');
    }
}