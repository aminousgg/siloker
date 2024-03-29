<?php

class M_auth extends CI_Model
{
    function insert($table,$data){
       return $this->db->insert($table,$data);
    }
    function profile($email){
        return $this->db->get_where('pelamar',array('email'=>$email))->row_array();
    }
    // =============Pelamar
    function home(){
        return $this->db->query('
            SELECT p.`id`, p.`email`, p.`nama_perusahaan`, p.`alamat`, p.`kota`,
                   p.`foto_profile`, p.`id_post`, pos.`jabatan`, pos.`gaji`,
                   pos.`isi_post`, pos.`status_post`
            FROM perusahaan p JOIN posting pos ON p.`id_post`=pos.`id`
        ')->result();
    }
    //===============Perusahaan
    function daftar_lamaran($email_peru){
        return $this->db->query('
            SELECT *
            FROM minat_perusahaan mp JOIN pelamar pl ON mp.`email_pelamar`=pl.`email`
            WHERE mp.`email_perusahaan`="'.$email_peru.'"
        ')->result();
    }

    function pro_per($email){
        return $this->db->get_where('perusahaan',array('email'=>$email))->row_array();
    }

}

?>