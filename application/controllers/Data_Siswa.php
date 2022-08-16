<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Siswa extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function view_admin()
	{
		$data['siswa'] = $this->m_user->read_all_user_siswa()->result_array();
		$this->load->view('admin/siswa',$data);
	}

	public function tambah_siswa()
	{

		$id_user_detail = $this->input->post('id_user_detail');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$nik = $this->input->post('nik');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nidn = $this->input->post('nidn');
		$ijazah = $this->input->post('ijazah');
		$skhun = $this->input->post('skhun');
		$foto = $this->input->post('foto');
		$kelas = $this->input->post('kelas');
		$nilai_ipa = $this->input->post('nilai_ipa');
		$nilai_ips = $this->input->post('nilai_ips');
		$nilai_matematika = $this->input->post('nilai_matematika');
		$nilai_bahasa_inggris = $this->input->post('nilai_bahasa_inggris');
		$nilai_bahasa_indonesia = $this->input->post('nilai_bahasa_indonesia');
		$id_status_verifikasi = $this->input->post('id_status_verifikasi');
		$id_status_lulus = $this->input->post('id_status_lulus');
		$foto_name = md5($id_user_detail.$nama_lengkap.$alamat.$tempat_lahir.$tanggal_lahir.
		$agama.$nik.$jenis_kelamin.$nidn.$ijazah.$skhun.$foto.$kelas.$nilai_ipa.$nilai_ips.
		$nilai_bahasa_inggris.$nilai_bahasa_indonesia.$id_status_verifikasi.$id_status_lulus.rand(1,9999));

		$path = './assets/gambar/';

		$this->load->library('upload');
		$config['upload_path'] = './assets/gambar';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048'; //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $foto_name;
		$this->upload->initialize($config);
		$foto_upload = $this->upload->do_upload('foto');

		if ($foto_upload)
		{
			$foto = $this->upload->data();
		} else {
			$this->session->set_flashdata('error_file_gambar_berita',
			'error_file_gambar_berita');
			redirect('Data_Siswa/view_admin');
		}

		$hasil = $this->m_user->insert_siswa($id_user_detail, $nama_lengkap, $alamat, $tempat_lahir, $tanggal_lahir, $agama, $nik,
		$jenis_kelamin, $nidn, $ijazah, $skhun, $foto, $kelas, $nilai_ipa, $nilai_ips, $nilai_matematika,
		$nilai_bahasa_inggris, $nilai_bahasa_indonesia, $id_status_verifikasi, $id_status_lulus );


		if($hasil==false){

			$this->session->set_flashdata('error_input','error_input');
			redirect('Data_Siswa/view_admin');

		}else{

			$this->session->set_flashdata('input','input');
			redirect('Data_Siswa/view_admin');
		}
	}

	public function edit_siswa()
	{

		$id_user_detail = $this->input->post('id_user_detail');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$nik = $this->input->post('nik');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nidn = $this->input->post('nidn');
		$ijazah = $this->input->post('ijazah');
		$skhun = $this->input->post('skhun');
		$foto = $this->input->post('foto');
		$kelas = $this->input->post('kelas');
		$nilai_ipa = $this->input->post('nilai_ipa');
		$nilai_ips = $this->input->post('nilai_ips');
		$nilai_matematika = $this->input->post('nilai_matematika');
		$nilai_bahasa_inggris = $this->input->post('nilai_bahasa_inggris');
		$nilai_bahasa_indonesia = $this->input->post('nilai_bahasa_indonesia');
		$id_status_verifikasi = $this->input->post('id_status_verifikasi');
		$id_status_lulus = $this->input->post('id_status_lulus');
		$foto_name = md5($id_user_detail.$nama_lengkap.$alamat.$tempat_lahir.$tanggal_lahir.
		$agama.$nik.$jenis_kelamin.$nidn.$ijazah.$skhun.$foto.$kelas.$nilai_ipa.$nilai_ips.
		$nilai_bahasa_inggris.$nilai_bahasa_indonesia.$id_status_verifikasi.$id_status_lulus.rand(1,9999));


	}

	public function hapus_siswa()
	{

		$id_user_detail = $this->input->post('id_user_detail');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$nik = $this->input->post('nik');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$nidn = $this->input->post('nidn');
		$ijazah = $this->input->post('ijazah');
		$skhun = $this->input->post('skhun');
		$foto = $this->input->post('foto');
		$kelas = $this->input->post('kelas');
		$nilai_ipa = $this->input->post('nilai_ipa');
		$nilai_ips = $this->input->post('nilai_ips');
		$nilai_matematika = $this->input->post('nilai_matematika');
		$nilai_bahasa_inggris = $this->input->post('nilai_bahasa_inggris');
		$nilai_bahasa_indonesia = $this->input->post('nilai_bahasa_indonesia');
		$id_status_verifikasi = $this->input->post('id_status_verifikasi');
		$id_status_lulus = $this->input->post('id_status_lulus');
		$foto_name = md5($id_user_detail.$nama_lengkap.$alamat.$tempat_lahir.$tanggal_lahir.
		$agama.$nik.$jenis_kelamin.$nidn.$ijazah.$skhun.$foto.$kelas.$nilai_ipa.$nilai_ips.
		$nilai_bahasa_inggris.$nilai_bahasa_indonesia.$id_status_verifikasi.$id_status_lulus.rand(1,9999));
	}

	public function view_admin_terverifikasi()
	{
		$this->load->view('admin/siswa_terverifikasi');
	}

	public function view_admin_lulus_berkas()
	{
		$this->load->view('admin/siswa_lulus_berkas');
	}

	public function view_admin_lulus_seleksi()
	{
		$this->load->view('admin/siswa_lulus_seleksi');
	}



}