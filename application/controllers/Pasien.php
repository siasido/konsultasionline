<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('Pasien_M', 'pasien_m');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
    }

	public function index(){
        isLogoutPsikolog();
		$data['active_menu'] = 'pasien';
		$data['row'] = $this->pasien_m->get()->result();
		// $data['page_js'] = base_url().'custom-js/psikolog/psikolog-data.js';
		$this->template->load('template', 'psikolog/psikolog_data', $data);
    }
    
    public function add(){
		isLogoutPsikolog();
		$data['active_menu'] = 'psikolog';
		// $data['page_js'] = base_url().'custom-js/psikolog/psikolog-add.js';
		$this->template->load('template', 'psikolog/psikolog_form_add',$data);
    }
    
    public function edit($id){
		$data['active_menu'] = 'psikolog';
		$data['page_js'] = base_url().'custom-js/psikolog/psikolog-edit.js';
		$data['row'] = $this->pasien_m->get($id)->row();
		$this->template->load('template', 'psikolog/psikolog_form_edit', $data);
	}

	public function register(){
		$post = $this->input->post(null, true);
		
        $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[25]|is_unique[pasien.username]');
        $this->form_validation->set_rules('namaLengkap', 'Nama Lengkap', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('noHandphone', 'No.Handphone', 'trim|numeric|required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');
		$this->form_validation->set_message('numeric', '{field} harus berisi numerik.');
		$this->form_validation->set_message('is_unique', '{field} sudah digunakan, silahkan ganti.');
		$this->form_validation->set_message('matches', '{field} tidak sesuai, silahkan ganti.');


        if ($this->form_validation->run() == FALSE){
            // echo(form_error());
            // print_r($post);
            $this->load->view('halamanutama/halaman_register');
        }
        else{
            // print_r($_FILES);
            if($_FILES['foto']['name'] != null){
                $configurasi['upload_path']          = './uploads/pasien/';
                $configurasi['allowed_types']        = 'gif|jpg|png|jpeg';
                $configurasi['max_size']             = 5048;
                $configurasi['file_name'] = 'pasien-'.date('Ymd').'-'.substr(md5(rand()),0,10);
            
                // do the upload
                $this->upload->initialize($configurasi, TRUE);
            
                if (!$this->upload->do_upload('foto')){ 
                    $data = array(
                        'error' => $this->upload->display_errors(),
                        'active_menu' => 'psikolog'
                    );
                    $this->load->view('halamanutama/halaman_register', $data);
                }
                else{ //if upload image success

                    $data = array(
                        'username' => $post['username'],
                        'namaLengkap' => $post['namaLengkap'],
                        'gender' => $post['gender'],
                        'noHandphone' => $post['noHandphone'],
                        'email' => $post['email'],
                        'password' => sha1($post['password']),
                        'foto' => $this->upload->data('file_name')
                    );

                    // print_r($data);
            
                    // $this->image_lib->clear();
            
                    // // insert data to db
                    $this->pasien_m->add($data);
                    if($this->db->affected_rows() > 0){
                        $this->session->set_flashdata('success', 'Berhasil Registrasi');
                        redirect('dashboard/halamanLoginPasien');
                        // alert('Berhasil registrasi');
                    }
                } 
                
            } else {
            
                $this->pasien_m->add($data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    redirect('user/index');
                }
                
            }
                
        }
		
	}

	public function delete($id){
		$this->pasien_m->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('danger', 'Data telah dihapus');
		}
		redirect('psikolog/index');
	}

	public function username_check(){
		$post = $this->input->post(null, true);
		$query = $this->pasien_m->username_check($post['username'], $post['idpsikolog']);

		if ($query->num_rows() > 0 ){
			$this->form_validation->set_message('username_check', '{field} ini sudah digunakan, silahkan ganti.');
			return FALSE;
		} else {
			return TRUE;
		}
		
	}

}
