<?php 
class Admin_Pannel extends CI_Model
{
    function login($data){
        return $this->db->where($data)->get('admin')->row();
        //print_r($admin);
    }
}















?>