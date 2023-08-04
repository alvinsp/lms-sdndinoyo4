<?php
class Index_home extends CI_Model
{
    public function tampil_kalimat()
    {
        return $this->db->get('set_hero');
    }
}
