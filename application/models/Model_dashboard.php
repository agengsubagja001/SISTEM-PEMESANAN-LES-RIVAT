<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dashboard extends CI_Model
{
    // menampilkan permintaan data pengajar 
    public function show_pengajar()
    {
        $data = $this->db->query('SELECT akun.id_akun, akun.nama, profil_pengajar.alamat, profil_pengajar.id_profil, profil_pengajar.status, profil_pengajar.gambar, profil_pengajar.deskripsi, profil_pengajar.bidang, profil_pengajar.no_hp FROM akun INNER JOIN profil_pengajar ON akun.id_akun=profil_pengajar.id_akun;');
        return $data;
    }

    // tampil data jml siswa
    public function jml_siswa()
    {
        $cek = $this->db->query("SELECT id_akun FROM akun WHERE akun.role_id = '2'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }

    // tampil data jml pengajar
    public function jml_pengajar()
    {
        $cek = $this->db->query("SELECT id_akun FROM akun WHERE akun.role_id = '3'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }
}
