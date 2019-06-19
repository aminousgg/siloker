<?php

class M_auth extends CI_Model
{
    function insert($table,$data){
       return $this->db->insert($table,$data);
    }
}

?>