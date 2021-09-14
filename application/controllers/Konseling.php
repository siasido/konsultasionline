<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Konseling extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->model('paket_m');
        $this->load->model('jadwal_m');
        $this->load->model('psikolog_m');
        $this->load->model('booking_m');
        $this->load->model('rekening_m');
        $this->load->model('konsultasi_m');
        $this->load->library('form_validation');
        $this->load->library('upload');
		$this->load->library('image_lib');
    }

	public function index(){
        isLogoutPasien();
        $data = array(
            'active_menu' => 'transaksi-konseling',
            'row' => $this->booking_m->get(null, $this->session->userdata('idpasien'))->result(),
            'page_js' => base_url().'custom-js/konseling/konseling-history.js',
            'psikolog' => $this->psikolog_m->get()->row(),
            'paket' => $this->paket_m->get()->row(),
            'jadwal' => $this->jadwal_m->get()->result(),
            'rekening' => $this->rekening_m->get()->result(),
        );
        
		$this->template->load('template-pasien', 'konseling/konseling_history', $data);
    }

    public function data(){
        isLogoutPsikolog();
        $data = array(
            'active_menu' => 'transaksi-konseling',
            'row' => $this->booking_m->get(null, null)->result(),
            'page_js' => base_url().'custom-js/konseling/konseling-history.js',
            'psikolog' => $this->psikolog_m->get()->row(),
            'paket' => $this->paket_m->get()->row(),
            'jadwal' => $this->jadwal_m->get()->result(),
            'rekening' => $this->rekening_m->get()->result(),
        );
        // print_r($data['row']);
		$this->template->load('template', 'konseling/konseling_history_admin', $data);
    }

    public function dataKonseling(){
        isLogoutPasien();
        $data = array(
            'active_menu' => 'data-konseling',
            'row' => $this->konsultasi_m->get(null, $this->session->userdata('idpasien'))->result(),
            'page_js' => base_url().'custom-js/konseling/data-konseling.js',
        );
        // print_r($data['row']);
		$this->template->load('template-pasien', 'konseling/konseling_data', $data);
    }

    public function ubahJadwal(){
        $post = $this->input->post(null, true);
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $data = array(
            'tglBooking' => $now,
            'idjadwal' => $post['jadwal'],
            'statusPesanan' => 5
        );

        $transactionStatus = $this->booking_m->update($data, $post['idbooking']);

        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data berhasil diupdate');
            redirect('konseling/index');
        }
    }

    public function allDataKonseling(){
        isLogoutPsikolog();
        $data = array(
            'active_menu' => 'konseling',
            'row' => $this->konsultasi_m->get()->result(),
            'page_js' => base_url().'custom-js/konseling/all-data-konseling.js',
        );
        // print_r($data['row']);
		$this->template->load('template', 'konseling/all_konseling_data', $data);
    }

    public function edit($id){
        isLogoutPasien();
		$data['active_menu'] = 'paket';
		// $data['page_js'] = base_url().'custom-js/rekening/rekening-edit.js';
		$data['row'] = $this->paket_m->get($id)->row();
		$this->template->load('template', 'paket/paket_form_edit', $data);
	}

    public function simpan(){
        isLogoutPasien();

        $post = $this->input->post(null, true);
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        
        $dataBooking = array(
            'idjadwal' => $post['jadwal'],
            'idpasien' => $post['idpasien'],
            'idpaket' => $post['idpaket'],
            'harga' => $post['harga'],
            'idrekening' => $post['rekening'],
            'tglBooking' => $now,
            'statusPesanan' => 0,
        );
        
        $transactionStatus = $this->booking_m->simpan($dataBooking);

        if($transactionStatus == TRUE){
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('konseling/index');
        }
        
    }

    public function isiFormKonseling(){
        isLogoutPasien();
        $post = $this->input->post(null, true);
        
        $dataBooking = array(
            'idbooking' => $post['idbooking'],
            'keluhan' => $post['keluhan'],
            'lamaKeluhan' => $post['lamaKeluhan'],
            'dampak' => $post['dampak'],
            'riwayatPenanganan' => $post['riwayatPenanganan'],
            'status' => 1
        );
        
        $this->konsultasi_m->add($dataBooking);

        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('konseling/index');
        }
        
    }

    public function isiHasilDiagnosa(){
        isLogoutPsikolog();
        $post = $this->input->post(null, true);
        
        $data = array(
            'hasilDiagnosa' => $post['hasilDiagnosa'],
            'status' => 2
        );
        
        $this->konsultasi_m->update($data, $post['idkonsultasi']);

        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('konseling/allDataKonseling');
        }
        
    }
    
    public function approveBooking($id){
        isLogoutPsikolog();
        $data = array (
            'statusPesanan' => 2
        );

        // $this->booking_m->update($data, $idBooking);

        $transactionStatus = $this->booking_m->approve($data, $id);

        if($transactionStatus == TRUE){
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('konseling/data');
        }
    }

    public function rejectBerhalangan($id){
        isLogoutPsikolog();
        $data = array (
            'statusPesanan' => 3
        );

        $transactionStatus = $this->booking_m->rejectBerhalangan($data, $id);

        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('konseling/data');
        }

    }

    public function reject($id){
        isLogoutPsikolog();
        $data = array (
            'statusPesanan' => 4
        );

        $transactionStatus = $this->booking_m->reject($data, $id);

        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('konseling/data');
        }

    }

    public function uploadResi(){
        $post = $this->input->post(null, true);
        $configurasi['upload_path']          = './uploads/resi/';
        $configurasi['allowed_types']        = 'gif|jpg|png|jpeg';
        // $configurasi['max_size']             = 5048;
        $configurasi['file_name'] = 'resi-'.date('Ymd').'-'.substr(md5(rand()),0,10);

        $targetFile = $this->booking_m->get($post['idbooking'])->row()->buktiPembayaran;
        if($targetFile){
            unlink('./uploads/resi/'.$targetFile);
        }
    
        // do the upload
        $this->upload->initialize($configurasi, TRUE);
    
        if (!$this->upload->do_upload('buktiPembayaran')){ 
            $data = array(
                'error' => $this->upload->display_errors(),
                'active_menu' => 'konseling'
            );
            $this->template->load('template', 'konseling/konseling_history', $data);
        }
        else{ //if upload image success

            $data = array(
                'buktiPembayaran' => $this->upload->data('file_name'),
                'statusPesanan' => 1
            );
    
            $this->image_lib->clear();
    
            // insert data to db
            $this->booking_m->update($data, $post['idbooking']);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('success', 'Data berhasil disimpan');
                redirect('konseling/index');
            }
        } 
    }
    
    public function delete($id){
        isLogoutPasien();
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
