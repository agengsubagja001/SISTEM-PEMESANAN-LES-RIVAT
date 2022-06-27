<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Proses_validasi extends CI_Controller
{


    public function index()
    {
        global $id_profil;
        $id_profil = $_GET['id'];

        $this->load->model('Model_pengajar');

        $data['val_pengajar'] = $this->model_pengajar->validasi_pengajar()->result();
        $this->load->view('admin/proses_validasi', $data);
    }
}
