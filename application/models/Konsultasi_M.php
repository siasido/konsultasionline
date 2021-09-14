<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi_M extends CI_Model {

    protected $table = 'konsultasi';

    public function get($idkonsultasi = null, $idpasien = null){
        $this->db->select('*, DATE_FORMAT(waktu_mulai, \'%Y-%m-%d\') tanggal, concat(DATE_FORMAT(waktu_mulai,\'%H:%i\')," - ", DATE_FORMAT(waktu_selesai,\'%H:%i\')) jamPraktik');
        $this->db->from('konsultasi a');
        $this->db->join('booking b', 'a.idbooking = b.idbooking');
        $this->db->join('jadwal_praktik c', 'b.idjadwal = c.idjadwal');
        if($idkonsultasi != null){
            $this->db->where('a.idkonsultasi', $idkonsultasi);
        }
        if($idpasien != null){
            $this->db->where('b.idpasien', $idpasien);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id){  
        $this->db->where('idkonsultasi', $id);
        $this->db->update($this->table, $data);
    }

}
