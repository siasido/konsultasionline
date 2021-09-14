<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_M extends CI_Model {

    protected $table = 'booking';
    
    public function get($idbooking = null, $idpasien =  null){
        $this->db->select('a.idbooking, f.status as statusKonsultasi, e.idpasien, e.namaLengkap, d.namaPaket, d.harga, c.namaPsikolog, a.tglBooking, 
                    a.buktiPembayaran,  a.statusPesanan, DATE_FORMAT(b.waktu_mulai, \'%Y-%m-%d\') tanggalKonseling,
                    concat(DATE_FORMAT(b.waktu_mulai,\'%H:%i\')," - ", DATE_FORMAT(b.waktu_selesai,\'%H:%i\')) jamKonseling');
        $this->db->from('booking a');
        $this->db->join('jadwal_praktik b', 'a.idjadwal = b.idjadwal');
        $this->db->join('psikolog c', 'b.idpsikolog = c.idpsikolog');
        $this->db->join('paket d', 'a.idpaket = d.idpaket');
        $this->db->join('pasien e', 'a.idpasien = e.idpasien');
        $this->db->join('konsultasi f', 'a.idbooking = f.idbooking', 'left');
        if($idbooking!= null){
            $this->db->where('a.idbooking', $idbooking);
        }
        if($idpasien != null){
            $this->db->where('a.idpasien', $idpasien);
        }
        $this->db->where('b.kuota >', 0);
        $query = $this->db->get();
        return $query;
    }

    #update dari pasien
    public function update($data, $id){
        $this->db->where('idbooking', $id);
        $this->db->update($this->table, $data);
        
    }

    public function rejectBerhalangan($data, $id){
        $this->db->where('idbooking', $id);
        $this->db->update($this->table, $data);
        
    }

    public function reject($data, $id){
        $this->db->where('idbooking', $id);
        $this->db->update($this->table, $data);
        
    }

    public function approve($data, $id){
        $this->db->trans_begin(); # Starting Transaction

        $this->db->where('idbooking', $id);
        $this->db->update($this->table, $data);

        $this->load->model('Jadwal_M', 'jadwal_m');

        $idjadwal = $this->jadwal_m->getByIdBooking($id)->row()->idjadwal;

        $sisaKuota = $this->jadwal_m->getByIdBooking($id)->row()->kuota;
        $sisaKuota = $sisaKuota - 1;
        print_r($sisaKuota);

        $param = array(
            'kuota' => $sisaKuota
        );

        $this->jadwal_m->update($param, $idjadwal);


        $this->db->trans_complete(); # Completing transaction
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } 
        else {
            $this->db->trans_commit();
            return TRUE;
        }

    }

    public function simpan($dataBooking){
        $this->db->trans_begin(); # Starting Transaction

        $this->db->insert($this->table, $dataBooking);

        // $this->load->model('Jadwal_M', 'jadwal_m');

        // $sisaKuota = $this->jadwal_m->get($dataBooking['idjadwal'])->row()->kuota;
        // $sisaKuota = $sisaKuota - 1;

        // $param = array(
        //     'kuota' => $sisaKuota
        // );

        // $this->jadwal_m->update($param, $dataBooking['idjadwal']);

        $this->db->trans_complete(); # Completing transaction
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } 
        else {
            $this->db->trans_commit();
            return TRUE;
        }
    }


}
