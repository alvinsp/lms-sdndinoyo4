<?php
class homeprofile extends CI_Controller
{
    public function view_home()
    {
        $this->load->model('index_home');
        $data['kalimat'] = $this->index_home->tampil_kalimat()->result();
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/index', $data);
        $this->load->view('_templates/homeprofile/footer');
    }

    public function view_staff()
    {
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/staff');
        $this->load->view('_templates/homeprofile/footer');
    }
    public function view_foto()
    {
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/foto');
        $this->load->view('_templates/homeprofile/footer');
    }
    public function view_about()
    {
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/about');
        $this->load->view('_templates/homeprofile/footer');
    }
    public function view_contact()
    {
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/contact');
        $this->load->view('_templates/homeprofile/footer');
    }
}
