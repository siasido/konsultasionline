<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_M extends CI_Model {

    protected $table = 'paket';
    
    public function get($id = null){
        $this->db->select('*');
        $this->db->from($this->table);
        if($id != null){
            $this->db->where('idpaket', $id);
        }
        $query = $this->db->get();
        return $query;
    }


    public function update($data, $id){  
        $this->db->where('idpaket', $id);
        $this->db->update($this->table, $data);
    }


}
