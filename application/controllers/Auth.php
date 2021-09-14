<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Psikolog_M', 'psikolog_m');
        $this->load->model('Pasien_M', 'pasien_m');
        
    }

    public function index()
    {
        isLoginPsikolog();
        $this->load->view('auth/login_admin');
    }
    
    public function loginPsikolog()
    {
        $post = $this->input->post(null, true);
        if(isset($post['login'])){
            $result = $this->psikolog_m->login($post);
            if($result->num_rows() > 0){
                $row = $result->row();
                $newdata = array(
                    'idpsikolog' => $row->idpsikolog,
                    'fotoPsikolog' => $row->foto,
                    'namaPsikolog' => $row->namaPsikolog,
                    'emailPsikolog' => $row->email,
                    'usernamePsikolog' => $row->username,
                    'noHandphonePsikolog' => $row->noHandphone
                );

                $this->session->set_userdata($newdata);
                redirect('dashboard/dashboardPsikolog');
                // print_r("Sukses");
            } else{
                echo "<script>
                    alert('Maaf username dan password anda salah');
                    window.location = '".site_url('auth/index')."';
                </script>";
                // print_r("gagal");

            }
        } 
    }


    public function loginPasien(){
        $post = $this->input->post(null, true);
        print_r($post);
        if(isset($post['login'])){
            $result = $this->pasien_m->login($post);
            if($result->num_rows() > 0){
                $row = $result->row();
                $newdata = array(
                    'idpasien' => $row->idpasien,
                    'fotoPasien' => $row->foto,
                    'namaPasien' => $row->namaLengkap,
                    'emailPasien' => $row->email,
                    'usernamePasien' => $row->username,
                    'noHandphonePasien' => $row->noHandphone
                );

                $this->session->set_userdata($newdata);
                $this->session->set_flashdata('success', 'Berhasil Login');
                redirect('dashboard/dashboardPasien');
            } else{
                $this->session->set_flashdata('danger', 'Username atau password salah');
                redirect('dashboard/halamanLoginPasien');
                

            }
        } 

    }

    public function logoutPsikolog(){
        $params = array(
            'idpsikolog', 
            'fotoPsikolog', 
            'namaPsikolog', 
            'emailPsikolog', 
            'usernamePsikolog',
            'noHandphonePsikolog'
        );
        $this->session->unset_userdata($params);
        // $this->session->sess_destroy();
        
        redirect('auth');
    }

    public function logoutPasien(){
        $params = array(
            'idpasien', 
            'fotoPasien', 
            'namaPasien', 
            'emailPasien', 
            'usernamePasien',
            'noHandphonePasien'
        );
        $this->session->unset_userdata($params);
        // $this->session->sess_destroy();
        
        redirect('dashboard/beranda');
    }
}
