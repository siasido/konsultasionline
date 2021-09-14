<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('paket_m');
		$this->load->library('form_validation');
    }

	public function index(){
        isLogoutPsikolog();
		$data['active_menu'] ='paket';
		$data['row'] = $this->paket_m->get()->result();
		$data['page_js'] = null;
		$this->template->load('template', 'paket/paket_data', $data);
    }

    public function edit($id){
        isLogoutPsikolog();
		$data['active_menu'] = 'paket';
		// $data['page_js'] = base_url().'custom-js/rekening/rekening-edit.js';
		$data['row'] = $this->paket_m->get($id)->row();
		$this->template->load('template', 'paket/paket_form_edit', $data);
	}

    public function simpan(){
        isLogoutPsikolog();

		$post = $this->input->post(null, true);
		
		$this->form_validation->set_rules('namaPaket', 'Nama Paket', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|numeric|required|min_length[4]|max_length[9]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required|max_length[350]');

        $this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
        $this->form_validation->set_message('numeric', '{field} harus berupa angka');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');

        if ($this->form_validation->run() == FALSE){
            $data['active_menu'] = 'paket';
            $data['page_js'] = null;
            $this->template->load('template', 'paket/paket_form_edit', $data);
        }
        else{
            $data = array(
                'namaPaket' => $post['namaPaket'],
                'harga' => $post['harga'],
                'deskripsi' => $post['deskripsi']
            );
            $this->paket_m->update($data, $post['idpaket']);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data berhasil diupdate');
            }	
            redirect('paket/index');				
        }
    }
    
    public function delete($id){
        isLogoutPsikolog();
		$this->paket_m->delete($id);
		$error = $this->db->error();
		
		if($error['code'] == 1451){
			$this->session->set_flashdata('warning', 'rekening yang telah digunakan untuk Trip tidak dapat dihapus!');
		} else {
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('danger', 'Data telah dihapus');			
			}
		}
		redirect('rekening/index');
	}

}
