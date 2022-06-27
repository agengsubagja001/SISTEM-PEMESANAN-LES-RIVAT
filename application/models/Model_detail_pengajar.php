<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_detail_pengajar extends CI_Model
{
    // tampil detail blog
    public function detail_data()
    {
        $id_profil = $_GET['id'];

        $data = $this->db->query("SELECT akun.id_akun, akun.nama, profil_pengajar.alamat, profil_pengajar.id_profil, profil_pengajar.status, profil_pengajar.gambar, profil_pengajar.deskripsi, profil_pengajar.bidang, profil_pengajar.no_hp FROM akun INNER JOIN profil_pengajar ON akun.id_akun=profil_pengajar.id_akun WHERE profil_pengajar.id_profil = '$id_profil'");
        return $data;
    }


    // input data pemesanan pengajar
    public function upload_pemesanan($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
