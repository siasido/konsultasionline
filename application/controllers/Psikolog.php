<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Psikolog extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('Psikolog_M', 'psikolog_m');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
    }

	public function index(){
        isLogoutPsikolog();
		$data['active_menu'] = 'psikolog';
		$data['row'] = $this->psikolog_m->get()->result();
		$data['page_js'] = base_url().'custom-js/psikolog/psikolog-data.js';
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
		$data['row'] = $this->psikolog_m->get($id)->row();
		$this->template->load('template', 'psikolog/psikolog_form_edit', $data);
	}

	public function simpan(){
		$post = $this->input->post(null, true);
		
		$this->form_validation->set_rules('namaPsikolog', 'Nama Lengkap', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('noHandphone', 'No.Handphone', 'trim|numeric|required|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');
		$this->form_validation->set_message('numeric', '{field} harus berisi numerik.');
		$this->form_validation->set_message('is_unique', '{field} sudah digunakan, silahkan ganti.');
		$this->form_validation->set_message('matches', '{field} tidak sesuai dengan kata sandi, silahkan ganti.');

		if(!$post['idpsikolog']){
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[20]|is_unique[psikolog.username]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]');
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]');

			if ($this->form_validation->run() == FALSE){
				$data['active_menu'] = 'psikolog';
				// $data['page_js'] = base_url().'custom-js/psikolog/psikolog-add.js';
				$this->template->load('template', 'psikolog/psikolog_form_add', $data);
			}
			else{
				// print_r($_FILES);
				if($_FILES['foto']['name'] != null){
					$configurasi['upload_path']          = './uploads/psikolog/';
					$configurasi['allowed_types']        = 'gif|jpg|png|jpeg';
					$configurasi['max_size']             = 5048;
					$configurasi['file_name'] = 'psikolog-'.date('Ymd').'-'.substr(md5(rand()),0,10);
				
					// do the upload
					$this->upload->initialize($configurasi, TRUE);
				
					if (!$this->upload->do_upload('foto')){ 
						$data = array(
							'error' => $this->upload->display_errors(),
							'active_menu' => 'psikolog'
						);
						$this->template->load('template', 'psikolog/psikolog_form_add', $data);
					}
					else{ //if upload image success

						$data = array(
							'namaPsikolog' => $post['namaPsikolog'],
							'noHandphone' => $post['noHandphone'],
							'username' => $post['username'],
							'email' => $post['email'],
							'password' => sha1($post['password']),
							'foto' => $this->upload->data('file_name')
						);
				
						$this->image_lib->clear();
				
						// insert data to db
						$this->psikolog_m->add($data);
						if($this->db->affected_rows() > 0){
							$this->session->set_flashdata('success', 'Data berhasil disimpan');
							redirect('psikolog/index');
						}
					} 
					
				} else {
				
					$this->psikolog_m->add($data);
					if($this->db->affected_rows() > 0){
						$this->session->set_flashdata('success', 'Data berhasil disimpan');
						redirect('user/index');
					}
					
				}
					
			}
		} else {
			// print_r("masuk update");
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[20]|callback_username_check');
			
			//if password is set
			if($post['password']){
				$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]');
				$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]');
			}

			//if passconf is set
			if($post['passconf']){
				$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]');
			}

			

			if ($this->form_validation->run() == FALSE){
				$data['active_menu'] = 'psikolog';
				$data['row'] = $this->psikolog_m->get($post['idpsikolog'])->row();
				// $data['page_js'] = base_url().'custom-js/psikolog/psikolog-edit.js';
				$this->template->load('template', 'psikolog/psikolog_form_edit', $data);
			}
			else{
				
				$data = array(
					'namaPsikolog' => $post['namaPsikolog'],
					'noHandphone' => $post['noHandphone'],
					'username' => $post['username'],
					'email' => $post['email'],
				);

				if($post['password']){
					$data['password'] = sha1($post['password']);
				}

				if($_FILES['foto']['name'] != null){

					$targetFile = $this->psikolog_m->get($post['idpsikolog'])->row()->foto;
					// print_r($targetFile);
					unlink('./uploads/psikolog/'.$targetFile);

					// configurasi upload
					$configurasi['upload_path']          = './uploads/psikolog/';
					$configurasi['allowed_types']        = 'gif|jpg|png|jpeg';
					$configurasi['max_size']             = 5048;
					$configurasi['file_name'] = 'psikolog-'.date('Ymd').'-'.substr(md5(rand()),0,10);
	
					// do the upload
					$this->upload->initialize($configurasi, TRUE);

					if (!$this->upload->do_upload('foto')){ //if upload failed
						$error = array(
							'row' => null,
							'active_menu' => 'psikolog',
							'error' => $this->upload->display_errors()
						);
						$this->template->load('template', 'psikolog/psikolog_form_edit', $error);
						// print_r("masuk error upload");
					}
					else{ //if upload image success
						$data['foto'] = $this->upload->data('file_name');

						
						$this->psikolog_m->update($data, $post['idpsikolog']);
						if($this->db->affected_rows() > 0){
							$this->session->set_flashdata('success', 'Data berhasil diupdate');
						}
						redirect('psikolog/index');
						// print_r("masuk ke update dengan foto");
					}
				} else {
					$data['foto'] = $this->psikolog_m->get($post['idpsikolog'])->row()->foto;
					$this->psikolog_m->update($data, $post['idpsikolog']);
					if($this->db->affected_rows() > 0){
						$this->session->set_flashdata('success', 'Data berhasil diupdate');
					}		
					redirect('psikolog/index');
					// print_r("masuk ke update tanpa foto");
				}
					
			}
		}
	}

	public function delete($id){
		$this->psikolog_m->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('danger', 'Data telah dihapus');
		}
		redirect('psikolog/index');
	}

	public function username_check(){
		$post = $this->input->post(null, true);
		$query = $this->psikolog_m->username_check($post['username'], $post['idpsikolog']);

		if ($query->num_rows() > 0 ){
			$this->form_validation->set_message('username_check', '{field} ini sudah digunakan, silahkan ganti.');
			return FALSE;
		} else {
			return TRUE;
		}
		
	}

}
