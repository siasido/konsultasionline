<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_M extends CI_Model {

    protected $table = 'pasien';
    
    public function login($data){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('username', $data['username']);
        $this->db->where('password', sha1($data['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null){
        $this->db->select('*');
        $this->db->from($this->table);
        if($id != null){
            $this->db->where('idpasien', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function username_check($username, $id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('username', $username);
        $this->db->where('idpasien !=', $id);
        $query = $this->db->get();
        return $query;
    }

    public function add($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id){
        
        $this->db->where('idpsikolog', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id){
        $this->db->where('idpsikolog', $id);
        $this->db->delete($this->table);
    }
}
