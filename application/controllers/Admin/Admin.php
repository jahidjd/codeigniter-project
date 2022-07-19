<?php 
class Admin extends CI_Controller 
{
    function index(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            $this->load->view('admin/dashboard');
        }else{
            $this->load->view('admin/index');
        }
        
        
    }
    function dashboard(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            
        $this->load->view('admin/dashboard');
        }else{
            redirect(base_url('index.php/admin/Admin')); 
        }
    }
    function adminLogin(){
        $data = $this->input->post();
        $this->load->model('admin/Admin_Pannel');
        $info = $this->Admin_Pannel->login($data);
       if(empty($info)){
           $this->session->set_flashdata('error','please enter a valid id');
        redirect(base_url('index.php/admin/Admin'));

       }else{
           $this->session->set_userdata(array('userID'=>$info->id,'name'=>$info->name));
        redirect(base_url('index.php/admin/Admin/dashboard')); 
       }
    }
    function logOut(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            $this->session->sess_destroy();
            redirect(base_url('index.php/admin/Admin'));
        }
    }
}



?>