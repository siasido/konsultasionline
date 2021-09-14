<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('Psikolog_M', 'psikolog_m');
		$this->load->model('Paket_M', 'paket_m');
		$this->load->model('Jadwal_M', 'jadwal_m');
		$this->load->library('form_validation');
		
    }

	public function index(){
        isLogoutPsikolog();
		$data['active_menu'] = 'jadwal';
		$data['row'] = $this->jadwal_m->get()->result();
		$data['page_js'] = base_url().'custom-js/jadwal/jadwal-data.js';
		$this->template->load('template', 'jadwal/jadwal_data', $data);
    }
    
    public function add(){
		isLogoutPsikolog();
		$data['active_menu'] = 'jadwal';
		$data = array(
			'active_menu' => 'jadwal',
			'page_js' => base_url().'custom-js/jadwal/jadwal-add.js',
			'psikolog' => $this->psikolog_m->get()->row(),
			'paket' => $this->paket_m->get()->result(),

		);
		// $data['page_js'] = base_url().'custom-js/psikolog/psikolog-add.js';
		$this->template->load('template', 'jadwal/jadwal_form_add',$data);
    }
    
    public function edit($id){
		$data = array (
			'page_js' => base_url().'custom-js/jadwal/jadwal-edit.js',
			'active_menu' => 'jadwal',
			'row' => $this->jadwal_m->get($id)->row(),
			'psikolog' => $this->psikolog_m->get()->row(),
			'paket' => $this->paket_m->get()->result(),
		);
		$this->template->load('template', 'jadwal/jadwal_form_edit', $data);
	}

	public function simpan(){
		$post = $this->input->post(null, true);
		
		$this->form_validation->set_rules('paket', 'Jenis Layanan', 'required');
		$this->form_validation->set_rules('kuota', 'Jumlah Kuota', 'required|numeric');
		$this->form_validation->set_rules('jamPraktik', 'Jam Praktik', 'required');
		$this->form_validation->set_rules('periode', 'Periode Praktik', 'required');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
		$this->form_validation->set_message('numeric', '{field} harus berupa angka.');
			
		if ($this->form_validation->run() == FALSE){
			$data = array (
				'page_js' => base_url().'custom-js/jadwal/jadwal-add.js',
				'active_menu' => 'jadwal',
				'psikolog' => $this->psikolog_m->get()->row(),
				'paket' => $this->paket_m->get()->result(),
			);
			// var_dump($post['paket']);
			$this->template->load('template', 'jadwal/jadwal_form_add', $data);
			
		}
		else{

			// echo($post['periode']);
			$arrayPeriode = explode(" - ", $post['periode']);
			$arrayTimePeriode = explode(" - ", $post['jamPraktik']);
			$jamMulai = $arrayTimePeriode[0];
			$jamAkhir = $arrayTimePeriode[1];
			// var_dump($arrayTimePeriode);

			$tglAwal = DateTime::createFromFormat('d/m/Y', $arrayPeriode[0]);
			$tglAkhir = DateTime::createFromFormat('d/m/Y', $arrayPeriode[1]);

			$interval = DateInterval::createFromDateString('1 day');
			$daterange = new DatePeriod($tglAwal, $interval, $tglAkhir);

			foreach($daterange as $date){

				$data = array(
					'idpsikolog' => $post['idpsikolog'],
					'idpaket' => $post['paket'],
					'waktu_mulai' => $date->format("Y-m-d")." ".$jamMulai,
					'waktu_selesai' => $date->format("Y-m-d")." ".$jamAkhir,
					'kuota' => $post['kuota']
				);

				$this->jadwal_m->add($data);
			}
			// $this->jadwal_m->add($data);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
				redirect('jadwal/index');
			}
				
		}
	}

	public function ubah(){
			$post = $this->input->post(null, true);
			
			$this->form_validation->set_rules('paket', 'Jenis Layanan', 'required|numeric');
			$this->form_validation->set_rules('kuota', 'Jumlah Kuota', 'required|numeric');
			$this->form_validation->set_rules('jamPraktik', 'Jam Praktik', 'required');
			$this->form_validation->set_rules('tanggalPraktik', 'Tanggal Praktik', 'required');
	
			$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
			$this->form_validation->set_message('numeric', '{field} harus berupa angka.');
				
			if ($this->form_validation->run() == FALSE){
				$data = array (
					'page_js' => base_url().'custom-js/jadwal/jadwal-edit.js',
					'active_menu' => 'jadwal',
					'row' => $this->jadwal_m->get($id)->row(),
					'psikolog' => $this->psikolog_m->get()->row(),
					'paket' => $this->paket_m->get()->result(),
				);
				// var_dump($post['paket']);
				$this->template->load('template', 'jadwal/jadwal_form_edit', $data);
				
			}
			else{

				$arrayTimePeriode = explode(" - ", $post['jamPraktik']);
				$jamMulai = $arrayTimePeriode[0];
				$jamAkhir = $arrayTimePeriode[1];

				$data = array(
					'idpsikolog' => $post['idpsikolog'],
					'idpaket' => $post['paket'],
					'waktu_mulai' => $post['tanggalPraktik']. ' '.$jamMulai,
					'waktu_selesai' => $post['tanggalPraktik']. ' '.$jamAkhir,
					'kuota' => $post['kuota']
				);

				$this->jadwal_m->update($data, $post['idjadwal']);
				
				// $this->jadwal_m->add($data);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
					redirect('jadwal/index');
				}
					
			}
		
	}

	public function delete($id){
		$this->jadwal_m->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('danger', 'Data telah dihapus');
		}
		redirect('jadwal/index');
	}



}
