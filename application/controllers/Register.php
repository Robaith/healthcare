<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {
    

    //Default function, redirects to logged in user area
    public function index() {
         $data = array(
        'name' => $this->input->post('name'),
        'password' => sha1($this->input->post('password')),
        'email' => $this->input->post('email')
);

        
        if($this->input->post('btn') !=null ){
         
            $this->db->insert($this->input->post('type'), $data);
        }
       
        $this->session->set_flashdata('message', get_phrase('profile_info_updated_successfuly'));
        //redirect(base_url() . 'index.php?backend/login');
        

        $this->load->view('register');
    }

    

}
