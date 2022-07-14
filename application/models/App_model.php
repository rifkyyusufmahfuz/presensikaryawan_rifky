<?php defined('BASEPATH') or exit('No direct script access allowed');
class App_model extends CI_Model
{
    function tampil_data() //UNTUK MENAMPILKAN DATA DARI TABLE presensikaryawan_rifky//
    {
        return $this->db->get('presensikaryawan_rifky');
    }

    public function Prosesinsert($table, $data) //UNTUK INSERT DATA KE DB//
    {
        $insert = $this->db->insert($table, $data);
        return $insert;
    }

    public function M_hapus($nip) //UNTUK HAPUS DATA DARI TABLE presensikaryawan_rifky
    {
        $this->db->where('nip', $nip);
        $this->db->delete('presensikaryawan_rifky');
    }

    function ubah_data($where,$table) // MENGAMBIL DATA DARI TABLE presensikaryawan_rifky UNTUK EDIT DATA
    {
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table) // UPDATE DATA PADA TABLE presensikaryawan_rifky
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}
