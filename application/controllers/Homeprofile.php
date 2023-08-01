<?php
class homeprofile extends CI_Controller
{
    public function view_home(){
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/index');
        $this->load->view('_templates/homeprofile/footer');
    }
    
    public function view_staff(){
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/staff');
        $this->load->view('_templates/homeprofile/footer');
    }
    public function view_foto(){
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/foto');
        $this->load->view('_templates/homeprofile/footer');
    }
    public function view_about(){
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/about');
        $this->load->view('_templates/homeprofile/footer');
    }
    public function view_contact(){
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/contact');
        $this->load->view('_templates/homeprofile/footer');
    }
}
