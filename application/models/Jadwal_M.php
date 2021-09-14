<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_M extends CI_Model {

    protected $table = 'jadwal_praktik';
    

    public function get($id = null){
        $this->db->select('*, DATE_FORMAT(waktu_mulai, \'%Y-%m-%d\') tanggal, concat(DATE_FORMAT(waktu_mulai,\'%H:%i\')," - ", DATE_FORMAT(waktu_selesai,\'%H:%i\')) jamPraktik');
        $this->db->from('jadwal_praktik a');
        $this->db->join('psikolog b', 'a.idpsikolog = b.idpsikolog');
        $this->db->join('paket c', 'a.idpaket = c.idpaket');
        if($id != null){
            $this->db->where('idjadwal', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getByIdBooking($id = null){
        $this->db->select('*, DATE_FORMAT(waktu_mulai, \'%Y-%m-%d\') tanggal, concat(DATE_FORMAT(waktu_mulai,\'%H:%i\')," - ", DATE_FORMAT(waktu_selesai,\'%H:%i\')) jamPraktik');
        $this->db->from('jadwal_praktik a');
        $this->db->join('psikolog b', 'a.idpsikolog = b.idpsikolog');
        $this->db->join('paket c', 'a.idpaket = c.idpaket');
        $this->db->join('booking d', 'a.idjadwal = d.idjadwal');
        if($id != null){
            $this->db->where('d.idbooking', $id);
        }
        $query = $this->db->get();
        return $query;
    }


    public function add($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id){
        
        $this->db->where('idjadwal', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id){
        $this->db->where('idjadwal', $id);
        $this->db->delete($this->table);
    }
}
