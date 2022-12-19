<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelAdmin extends CI_Model
{
    public function cekData($where = null)
    {
        return $this->db->get_where('admin', $where);
    }
    public function simpanData($data = null)
    {
        $this->db->insert('siswa', $data);
    }
    public function getSiswa()
    {
        return $this->db->get('siswa');
    }
    public function getAdmin()
    {
        return $this->db->get('admin');
    }
    public function siswaWhere($where = null)
    {
        return $this->db->get_where('siswa', $where);
    }
    public function hapusData($where = null)
    {
        $this->db->delete('siswa', $where);
    }
    public function ubahData($data = null, $where = null)
    {
        $this->db->update('siswa', $data, $where);
    }
}