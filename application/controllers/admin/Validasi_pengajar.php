<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasi_pengajar extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['show_pengajarval'] = $this->model_pengajar->Show_pengajarval()->result();
		$this->load->view('admin/validasi_pengajar', $data);
	}


	// fungsi edit validasi
	public function proses_validasi_pengajar()
	{

		// $data['show_pengajarval'] = $this->model_pengajar->Show_pengajarval()->result();

		var_dump($this->input->post('status'));

		if (isset($_POST['status']) == 'SETUJU') {
			$id_akun = $this->input->post('id_akun');
			$id_profil = $this->input->post('id_profil');
			$status = $this->input->post('status');
			$data = array(
				'id_akun' => $id_akun,

				'status'  => $status
			);

			$where = array(
				'id_profil' => $id_profil
			);

			$this->model_pengajar->proses_validasi_pengajar($data, $where, 'profil_pengajar');
			$data['show_pengajarval'] = $this->model_pengajar->Show_pengajarval()->result();
			$this->load->view('admin/validasi_pengajar', $data);
		}
		if (isset($_POST['status']) == 'TOLAK') {
			$id_akun = $this->input->post('id_akun');
			$id_profil = $this->input->post('id_profil');
			$status = $this->input->post('status');
			$data = array(
				'id_akun' => $id_akun,

				'status'  => $status
			);

			$where = array(
				'id_profil' => $id_profil
			);

			$this->model_pengajar->proses_validasi_pengajar($data, $where, 'profil_pengajar');
			$data['show_pengajarval'] = $this->model_pengajar->Show_pengajarval()->result();
			$this->load->view('admin/validasi_pengajar', $data);
		}
	}

	// uplode update pengajar
	public function update_pengajar()
	{
		$id_akun = $this->input->post('id_akun');
		$id_profil = $this->input->post('id_profil');
		$status = $this->input->post('status');

		$data = array(
			'status'       => $status,
			'id_akun'    => $id_akun
		);

		$where = array(
			'id_profil' => $id_profil
		);

		$this->model_pengajar->update_data($where, $data, 'profil_pengajar');
		$this->session->set_flashdata('success', 'Action Completed');
		redirect('admin/validasi_pengajar');
	}

	// hapus akun Pengajar
	public function hapus($id_profil)
	{
		$del = array('id_profil' => $id_profil);
		$this->model_pengajar->hapus_data($del, 'profil_pengajar');
		$this->session->set_flashdata('Hapus', 'Action Completed');
		redirect('admin/validasi_pengajar');
	}

	// proses validasi pengajar
	public function validasi($id_profil)
	{
		// untuk menampilkan notif story
		// $data['notif_story'] = $this->model_dashboardd->notif_story();


		$del = array('id_profil' => $id_profil);
		$data['val_pengajar'] = $this->model_pengajar->val_data($del, 'profil_pengajar')->result();
		$this->load->view('admin/proses_validasi', $data);
	}
}
