<?php
class M_login extends CI_Model
{
    function cekuser($username,$password){
        $hasil=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' ");
        return $hasil;
    }

    function getuser($id){
        $hasil=$this->db->query("SELECT * FROM user WHERE user_id='$id' ");
        return $hasil;
    }  
}?>
