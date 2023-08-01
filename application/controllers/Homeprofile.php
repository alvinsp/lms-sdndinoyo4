<?php
class homeprofile extends CI_Controller
{
    public function view_home(){
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/index');
        $this->load->view('_templates/homeprofile/footer');
    }
}
