<?php

class M_user extends CI_model
{
    public function cek_login($username)
    {

        $hasil = $this->db->query("SELECT * FROM user
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        WHERE username='$username'");
        return $hasil;
    }

    public function read_all_user_siswa()
    {

        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user=user_detail.id_user_detail WHERE user.id_user_level='2'");
        return $hasil;
        
    }
    public function register_user($id_user, $username, $email, $pass, $id_user_level, 
    $id_status_verifikasi, $id_status_lulus) {
    $this->db->trans_start();

            $this->db->query("INSERT into user(id_user, username, email, password, id_user_level, id_user_detail) 
            VALUES ('$id_user', '$username', '$email', '$pass', '$id_user_level', '$id_user')");
            $this->db->query("INSERT INTO user_detail(id_user_detail,id_status_verifikasi,id_status_lulus)
            VALUES ('$id_user','$id_status_verifikasi','$id_status_lulus')");

        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }

    }

    public function insert_siswa($id_user_detail, $nama_lengkap, $alamat, $tempat_lahir, $tanggal_lahir, $agama, $nik, $jenis_kelamin, $nidn,
    $ijazah, $skhun, $foto, $kelas, $nilai_ipa, $nilai_ips, $nilai_matematika, $nilai_bahasa_inggris, $nilai_bahasa_indonesia, $id_status_verifikasi, $id_status_lulus ) {
        $this->db->trans_start();

            $this->db->query("INSERT into siswa(id_user_detail, nama_lengkap, alamat, tempat_lahir, tanggal_lahir, agama, nik, jenis_kelamin, nidn,
            ijazah, skhun, foto, kelas, nilai_ipa, nilai_ips, nilai_matematika, nilai_bahasa_inggris, nilai_bahasa_indonesia, id_status_verifikasi, id_status_lulus) 
            VALUES ('$id_user_detail', '$nama_lengkap', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$agama', '$nik', '$jenis_kelamin', '$nidn',
            '$ijazah', '$skhun', '$foto', '$kelas', '$nilai_ipa', '$nilai_ips', '$nilai_matematika', '$nilai_bahasa_inggris', '$nilai_bahasa_indonesia', '$id_status_verifikasi', '$id_status_lulus')");

        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }

    }

    public function update_siswa($id_user_detail, $nama_lengkap, $alamat, $tempat_lahir, $tanggal_lahir, $agama, $nik, $jenis_kelamin, $nidn,
    $ijazah, $skhun, $foto, $kelas, $nilai_ipa, $nilai_ips, $nilai_matematika, $nilai_bahasa_inggris, $nilai_bahasa_indonesia, $id_status_verifikasi, $id_status_lulus ) 
    {
        $this->db->trans_start();

        $this->db->query("UPDATE siswa SET id_user_detail='$id_user_detail', nama_lengkap='$nama_lengkap', alamat='$alamat', tempat_lahir='$tempat_lahir', 
        tanggal_lahir='$tanggal_lahir', agama='$agama', nik='$nik', jenis_kelamin='$jenis_kelamin', nidn='$nidn', ijazah='$ijazah', skhun='$skhun', foto='$foto',
        kelas='$kelas', nilai_ipa='$nilai_ipa', nilai_ips='$nilai_ips', nilai_matematika='$nilai_matematika', nilai_bahasa_inggris='$nilai_bahasa_inggris',
        nilai_bahasa_indonesia='$nilai_bahasa_indonesia', id_status_verifikasi='$id_status_verifikasi'
        WHERE id_user='$id_user'");

    $this->db->trans_complete();
    if ($this->db->trans_status() == true) {
        return true;
    } else {
        return false;
    }
}

}