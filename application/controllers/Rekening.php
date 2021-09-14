<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('rekening_m');
		$this->load->library('form_validation');
		
    }

	public function index(){
		isLogoutPsikolog();
		$data['active_menu'] ='rekening';
		$data['row'] = $this->rekening_m->get()->result();
		$data['page_js'] = base_url().'custom-js/rekening/rekening-data.js';
		$this->template->load('template', 'rekening/rekening_data', $data);
    }

    public function add(){
		isLogoutPsikolog();
		$data['active_menu'] = 'rekening';
		$data['page_js'] = base_url().'custom-js/rekening/rekening-add.js';
		$this->template->load('template', 'rekening/rekening_form_add', $data);
    }

    public function edit($id){
		isLogoutPsikolog();
		$data['active_menu'] = 'rekening';
		$data['page_js'] = base_url().'custom-js/rekening/rekening-edit.js';
		$data['row'] = $this->rekening_m->get($id)->row();
		$this->template->load('template', 'rekening/rekening_form_edit', $data);
	}

    public function simpan(){
		isLogoutPsikolog();
		$post = $this->input->post(null, true);
		
		$this->form_validation->set_rules('namaPemilik', 'Nama Pemilik Rekening', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('namaBank', 'Bank', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('noRekening', 'No. Rekening', 'trim|required|numeric|min_length[6]|max_length[20]');

        $this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
        $this->form_validation->set_message('numeric', '{field} harus berupa angka');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		
		if(!$post['idrekening']){
			if ($this->form_validation->run() == FALSE){
				$data['active_menu'] = 'rekening';
				$data['page_js'] = base_url().'custom-js/rekening/rekening-add.js';
				$this->template->load('template', 'rekening/rekening_form_add', $data);
			}
			else{
				$data = array(
					'namaBank' => $post['namaBank'],
					'namaPemilik' => $post['namaPemilik'],
					'noRekening' => $post['noRekening']
				);

				$this->rekening_m->add($data);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
				}
				redirect('rekening/index');	
			}
		} else {

			if ($this->form_validation->run() == FALSE){
				$data['active_menu'] = 'rekening';
				$data['page_js'] = base_url().'custom-js/rekening/rekening-edit.js';
				$this->template->load('template', 'rekening/rekening_form_edit', $data);
			}
			else{
				$data = array(
					'namaBank' => $post['namaBank'],
					'namaPemilik' => $post['namaPemilik'],
					'noRekening' => $post['noRekening']
				);
				$this->rekening_m->update($data, $post['idrekening']);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('success', 'Data berhasil diupdate');
				}	
				redirect('rekening/index');				
			}
		}
    }
    
    public function delete($id){
		isLogoutPsikolog();
		$this->rekening_m->delete($id);
		$error = $this->db->error();
		
		if($error['code'] == 1451){
			$this->session->set_flashdata('warning', 'rekening yang telah digunakan untuk Transaksi tidak dapat dihapus!');
		} else {
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('danger', 'Data telah dihapus');			
			}
		}
		redirect('rekening/index');
	}

}
