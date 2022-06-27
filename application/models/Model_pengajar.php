<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengajar extends CI_Model
{


    // input data daftar pengajar
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // input data profil daftar pengajar
    public function input_datapengajar($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // input data daftar siswa
    public function input_datas($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // input data profil daftar siswa
    public function input_dataprofil($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // menampilkan data pengajar di halaman utama
    public function show_datapengajar()
    {
        $data = $this->db->query('SELECT akun.id_akun, akun.nama, profil_pengajar.alamat, profil_pengajar.id_profil, profil_pengajar.status, profil_pengajar.gambar, profil_pengajar.deskripsi, profil_pengajar.bidang, profil_pengajar.no_hp FROM akun INNER JOIN profil_pengajar ON akun.id_akun=profil_pengajar.id_akun WHERE profil_pengajar.status = "SETUJU" ');
        return $data;
    }

    // menampilkan data pengajar
    // public function validasi_pengajar()
    // {
    //     $data = $this->db->query('SELECT akun.id_akun, akun.nama, profil_pengajar.alamat, profil_pengajar.id_profil, profil_pengajar.status, profil_pengajar.gambar, profil_pengajar.gambar, profil_pengajar.deskripsi, profil_pengajar.bidang, profil_pengajar.no_hp FROM akun INNER JOIN profil_pengajar ON akun.id_akun=profil_pengajar.id_akun WHERE profil_pengajar.id_profil');
    //     return $data;
    // }



    // menampilkan data pengajar yang belum di validasi
    public function show_pengajarval()
    {
        $data = $this->db->query('SELECT akun.id_akun, profil_pengajar.nama_pengajar, profil_pengajar.alamat, profil_pengajar.id_profil, profil_pengajar.status, profil_pengajar.gambar, profil_pengajar.tanggal, profil_pengajar.deskripsi, profil_pengajar.bidang, profil_pengajar.no_hp FROM akun INNER JOIN profil_pengajar ON akun.id_akun=profil_pengajar.id_akun;');
        return $data;
    }

    // menampilkan data pengajar yang akan di validasi
    function val_data($del, $table)
    {
        return $this->db->get_where($table, $del);
    }


    // menampilkan data detail pengajar
    public function detail_pengajar()
    {
        $id_profil = $_GET['id'];

        $data = $this->db->query("SELECT akun.id_akun, akun.nama, profil_pengajar.alamat, profil_pengajar.id_profil, profil_pengajar.status, profil_pengajar.gambar, profil_pengajar.gambar, profil_pengajar.deskripsi, profil_pengajar.bidang, profil_pengajar.no_hp FROM akun INNER JOIN profil_pengajar ON akun.id_akun=profil_pengajar.id_akun WHERE profil_pengajar.id_profil = '$id_profil'");
        return $data;
    }

    // update data profil pengajar yang di validasi
    function proses_validasi_pengajar($where, $status, $table)
    {
        // $this->db->where($where);
        // $this->db->update($table, $data);
        // $where = ['kdmobil' => $this->input->post('kdmobil')];

        $this->db->update('profil_pengajar', $status, $where);
    }

    // update data pengajar yang di validasi
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // hapus data akun pengajar
    public function hapus_data($del, $table)
    {
        $this->db->where($del);
        $this->db->delete($table);
    }

    // proses validasi pengajar
    // function edit_data($del, $table)
    // {
    //     return $this->db->get_where($table, $del);
    // }

    // menampilkan data request les
    public function show_datarequest()
    {
        $query = $this->session->userdata('id_akun');

        $data = $this->db->query("SELECT pemesanan.id_pesanan, pemesanan.nama, pemesanan.alamat, pemesanan.hari, pemesanan.jam, pemesanan.kontrak, pemesanan.status, akun.id_akun, profil_pengajar.nama_pengajar, profil_pengajar.bidang FROM pemesanan INNER JOIN akun ON pemesanan.id_akun = akun.id_akun INNER JOIN profil_pengajar ON profil_pengajar.id_akun = profil_pengajar.id_akun WHERE pemesanan.id_akun = '$query'");
        return $data;
    }
}
