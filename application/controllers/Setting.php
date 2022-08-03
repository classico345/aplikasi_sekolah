<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_controller {
    
    public function view_admin()
	{
		$this->load->view('admin/setting');
	}

	public function view_siswa_setting()
	{
		$this->load->view('siswa/setting');
	}


}