<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\x41\x53\x45\x50\101\x54\x48") or exit("\116\157\40\144\x69\162\145\143\x74\40\x73\x63\x72\x69\x70\x74\x20\141\x63\143\x65\163\163\40\x61\x6c\x6c\x6f\167\x65\144");
class Users extends CI_Controller
{
    public function __construct()
    {
        goto PTZuy;
        ysGYF:
        $this->form_validation->set_error_delimiters('', '');
        goto HBXNT;
        izgGf:
        if ($this->ion_auth->logged_in()) {
            goto TT6Va;
        }
        goto cFq3Z;
        es9I0:
        $this->load->model("\x4d\141\163\x74\145\162\x5f\155\157\144\145\154", "\x6d\141\x73\164\145\x72");
        goto keQ_z;
        rDaMn:
        $this->load->model("\x55\x73\145\x72\x73\137\155\157\x64\x65\x6c", "\x75\163\145\162\163");
        goto es9I0;
        cFq3Z:
        redirect("\141\x75\164\150");
        goto dJlue;
        PTZuy:
        parent::__construct();
        goto izgGf;
        keQ_z:
        $this->load->model("\104\x61\163\x68\x62\157\x61\x72\x64\x5f\155\157\144\x65\154", "\x61\x64\x6d\151\156\x64\x61\x73\x68\142\x6f\141\x72\x64");
        goto ysGYF;
        dJlue:
        TT6Va:
        goto wwn7J;
        wwn7J:
        $this->load->library(["\x64\x61\164\141\164\141\x62\154\145\163", "\146\157\x72\x6d\x5f\x76\x61\154\151\144\141\164\x69\157\x6e"]);
        goto rDaMn;
        HBXNT:
    }
    public function is_admin()
    {
        goto n3S9H;
        ACigK:
        show_error("\110\141\156\171\x61\x20\x41\144\x6d\151\156\151\x73\x74\x72\x61\x74\x6f\x72\40\x79\141\156\147\40\x64\151\142\x65\162\x69\40\150\x61\x6b\40\165\x6e\164\165\153\40\155\145\156\x67\141\153\x73\x65\x73\x20\x68\141\x6c\x61\x6d\141\x6e\40\x69\x6e\151\54\40\74\141\40\x68\162\145\146\75\42" . base_url("\x64\141\x73\150\x62\x6f\x61\162\144") . "\42\x3e\x4b\x65\x6d\142\x61\x6c\151\40\x6b\x65\x20\155\x65\x6e\165\40\141\167\x61\154\74\x2f\x61\76", 403, "\101\153\x73\145\x73\x20\124\x65\162\x6c\141\x72\x61\x6e\147");
        goto xWQMd;
        n3S9H:
        if ($this->ion_auth->is_admin()) {
            goto wQcF0;
        }
        goto ACigK;
        xWQMd:
        wQcF0:
        goto VDKS1;
        VDKS1:
    }
    public function output_json($data, $encode = true)
    {
        goto oWDJj;
        oWDJj:
        if (!$encode) {
            goto aMB8O;
        }
        goto pdfpu;
        pdfpu:
        $data = json_encode($data);
        goto hYwdX;
        APvrS:
        $this->output->set_content_type("\141\160\x70\x6c\x69\x63\x61\164\151\157\x6e\57\x6a\x73\157\156")->set_output($data);
        goto lzaMt;
        hYwdX:
        aMB8O:
        goto APvrS;
        lzaMt:
    }
    public function data($id = null)
    {
        $this->is_admin();
        $this->output_json($this->users->getDataUsers($id), false);
    }
    public function index()
    {
        goto v7dhM;
        gumI3:
        $data["\163\x6d\164"] = $this->admindashboard->getSemester();
        goto RmDL7;
        QpeIv:
        $this->load->view("\x5f\164\145\x6d\x70\154\141\164\x65\163\57\144\141\163\150\x62\157\141\162\x64\x2f\146\157\x6f\x74\x65\x72\56\160\150\160");
        goto l3LvL;
        tKiC6:
        $data["\164\x70\x5f\x61\x63\x74\x69\166\x65"] = $this->admindashboard->getTahunActive();
        goto gumI3;
        HTSbT:
        $data["\164\x70"] = $this->admindashboard->getTahun();
        goto tKiC6;
        hbVet:
        $this->load->view("\x5f\164\x65\x6d\160\154\141\164\145\x73\x2f\x64\141\x73\150\x62\157\141\162\144\x2f\x68\145\x61\x64\x65\162\56\160\x68\160", $data);
        goto JSHy8;
        RmDL7:
        $data["\x73\155\164\137\141\143\x74\151\x76\x65"] = $this->admindashboard->getSemesterActive();
        goto hbVet;
        v7dhM:
        $this->is_admin();
        goto dbdG8;
        JSHy8:
        $this->load->view("\x75\163\x65\x72\163\57\x64\x61\x74\x61");
        goto QpeIv;
        dbdG8:
        $data = ["\x75\163\x65\162" => $this->ion_auth->user()->row(), "\x6a\x75\144\165\x6c" => "\x55\163\145\162\40\115\x61\x6e\x61\147\145\155\x65\x6e\x74", "\x73\165\x62\152\x75\144\x75\154" => "\104\x61\x74\141\x20\125\x73\x65\x72"];
        goto HTSbT;
        l3LvL:
    }
    public function edit($id)
    {
        goto hockI;
        buUR3:
        $this->load->view("\x75\x73\x65\x72\163\x2f\x65\x64\151\164");
        goto MZM0D;
        dc4lh:
        $data = ["\x75\163\145\162" => $this->ion_auth->user()->row(), "\152\x75\x64\x75\154" => "\x55\163\145\x72\x20\x4d\141\x6e\x61\x67\x65\x6d\x65\x6e\x74", "\163\x75\142\152\165\x64\x75\x6c" => "\x45\144\x69\164\x20\x44\141\164\x61\40\x55\163\x65\x72", "\165\x73\145\162\163" => $this->ion_auth->user($id)->row(), "\x67\x72\x6f\165\160\163" => $this->ion_auth->groups()->result(), "\154\x65\166\145\x6c" => $level[0]];
        goto xLo6j;
        MZM0D:
        $this->load->view("\x5f\x74\145\155\x70\x6c\x61\x74\145\x73\x2f\144\141\163\150\x62\x6f\141\x72\144\x2f\146\x6f\x6f\x74\x65\x72\56\x70\150\x70");
        goto pk0IJ;
        xLo6j:
        $this->load->view("\x5f\164\145\155\x70\154\x61\x74\x65\163\57\144\141\163\150\x62\157\141\162\144\x2f\x68\x65\x61\144\145\x72\56\160\x68\x70", $data);
        goto buUR3;
        hockI:
        $level = $this->ion_auth->get_users_groups($id)->result();
        goto dc4lh;
        pk0IJ:
    }
    public function edit_info()
    {
        goto A20QN;
        A20QN:
        $this->is_admin();
        goto NaPUG;
        h_Wzw:
        goto A13sx;
        goto t41uh;
        t2Met:
        A13sx:
        goto jI6dg;
        aBv1g:
        $this->form_validation->set_rules("\x6c\141\x73\164\x5f\156\x61\x6d\145", "\114\x61\163\164\40\116\141\155\145", "\x72\145\x71\x75\x69\162\145\144");
        goto CPnEH;
        CPnEH:
        $this->form_validation->set_rules("\x65\155\141\151\154", "\x45\x6d\x61\x69\154", "\x72\x65\161\x75\x69\x72\145\x64\x7c\x76\x61\154\x69\x64\137\145\155\x61\x69\x6c");
        goto O15FF;
        wqhSe:
        $this->form_validation->set_rules("\146\151\x72\x73\164\x5f\156\x61\155\145", "\x46\x69\x72\x73\164\40\x4e\141\x6d\145", "\x72\145\x71\x75\151\x72\145\144");
        goto aBv1g;
        jI6dg:
        $this->output_json($data);
        goto oTE1G;
        Bb7sV:
        $data["\x73\x74\x61\x74\x75\x73"] = false;
        goto Jrr9y;
        lLYJD:
        $input = ["\165\163\x65\x72\x6e\x61\x6d\145" => $this->input->post("\x75\163\x65\x72\x6e\x61\x6d\x65", true), "\146\151\162\163\x74\x5f\156\141\155\145" => $this->input->post("\146\x69\x72\x73\x74\137\156\x61\x6d\x65", true), "\154\141\163\164\137\x6e\x61\x6d\145" => $this->input->post("\154\141\x73\x74\137\x6e\x61\x6d\145", true), "\145\x6d\141\x69\154" => $this->input->post("\x65\155\x61\151\x6c", true)];
        goto P0wxI;
        P0wxI:
        $update = $this->master->update("\165\163\145\x72\163", $input, "\151\x64", $id);
        goto sWzP5;
        NaPUG:
        $this->form_validation->set_rules("\x75\163\145\x72\x6e\141\155\145", "\x55\x73\145\162\x6e\x61\155\x65", "\x72\145\161\x75\x69\x72\145\x64");
        goto wqhSe;
        TFwvj:
        $id = $this->input->post("\x69\144", true);
        goto lLYJD;
        Jrr9y:
        $data["\x65\x72\162\x6f\x72\163"] = ["\x75\x73\x65\162\x6e\x61\155\145" => form_error("\x75\x73\145\162\156\141\x6d\145"), "\146\x69\162\x73\164\137\156\x61\x6d\145" => form_error("\x66\x69\x72\163\164\137\x6e\x61\155\145"), "\x6c\x61\x73\164\137\x6e\x61\x6d\x65" => form_error("\154\141\163\164\x5f\156\x61\155\x65"), "\x65\155\141\x69\154" => form_error("\x65\155\x61\151\154")];
        goto t2Met;
        sWzP5:
        $data["\x73\x74\x61\164\x75\x73"] = $update ? true : false;
        goto h_Wzw;
        O15FF:
        if ($this->form_validation->run() === FALSE) {
            goto abQLY;
        }
        goto TFwvj;
        t41uh:
        abQLY:
        goto Bb7sV;
        oTE1G:
    }
    public function edit_status()
    {
        goto JN2Nk;
        pKfg5:
        $input = ["\141\143\x74\151\166\x65" => $this->input->post("\163\x74\x61\x74\165\163", true)];
        goto n5xwg;
        n5xwg:
        $update = $this->master->update("\x75\163\145\162\163", $input, "\151\144", $id);
        goto Dykxi;
        Dykxi:
        $data["\x73\164\141\x74\165\x73"] = $update ? true : false;
        goto ifzMm;
        FXqnD:
        $data["\x65\162\162\x6f\162\x73"] = ["\163\164\x61\164\165\163" => form_error("\x73\164\x61\164\165\x73")];
        goto L5z9d;
        Cl3cs:
        fjYbf:
        goto WxWmp;
        JN2Nk:
        $this->is_admin();
        goto EYcPR;
        WxWmp:
        $data["\x73\x74\141\164\x75\x73"] = false;
        goto FXqnD;
        EYcPR:
        $this->form_validation->set_rules("\x73\164\x61\x74\x75\x73", "\123\164\141\x74\x75\163", "\x72\x65\161\x75\x69\162\145\144");
        goto CJGr9;
        hNK6r:
        $id = $this->input->post("\x69\x64", true);
        goto pKfg5;
        CJGr9:
        if ($this->form_validation->run() === FALSE) {
            goto fjYbf;
        }
        goto hNK6r;
        L5z9d:
        qVi_7:
        goto IQEUE;
        IQEUE:
        $this->output_json($data);
        goto ewSdw;
        ifzMm:
        goto qVi_7;
        goto Cl3cs;
        ewSdw:
    }
    public function edit_level()
    {
        goto cV5In;
        YUaFw:
        EJMPH:
        goto VOHhV;
        OUgo_:
        $id = $this->input->post("\x69\144", true);
        goto yBlel;
        wpuV2:
        $this->form_validation->set_rules("\x6c\x65\166\145\x6c", "\114\x65\x76\145\x6c", "\x72\145\x71\165\151\162\x65\x64");
        goto Szh95;
        cV5In:
        $this->is_admin();
        goto wpuV2;
        E3nMU:
        $data["\x73\164\141\164\165\x73"] = $update ? true : false;
        goto NIs33;
        Szh95:
        if ($this->form_validation->run() === FALSE) {
            goto EJMPH;
        }
        goto OUgo_;
        VOHhV:
        $data["\x73\164\x61\x74\x75\x73"] = false;
        goto rnI66;
        yBlel:
        $input = ["\x67\x72\157\165\160\x5f\151\x64" => $this->input->post("\154\x65\x76\145\154", true)];
        goto DbmiU;
        otZ3v:
        jHwjK:
        goto Dy627;
        Dy627:
        $this->output_json($data);
        goto W704o;
        DbmiU:
        $update = $this->master->update("\x75\163\145\162\163\137\x67\x72\157\165\160\x73", $input, "\x75\x73\x65\162\x5f\x69\144", $id);
        goto E3nMU;
        rnI66:
        $data["\x65\x72\x72\157\x72\x73"] = ["\x6c\145\x76\x65\x6c" => form_error("\154\145\x76\x65\154")];
        goto otZ3v;
        NIs33:
        goto jHwjK;
        goto YUaFw;
        W704o:
    }
    public function change_password()
    {
        goto rshro;
        sEkQ7:
        Y_Lu0:
        goto afUNb;
        XQbZ9:
        $this->form_validation->set_rules("\x6e\145\x77", $this->lang->line("\143\150\141\x6e\147\145\137\160\x61\x73\163\167\x6f\162\x64\x5f\166\141\154\x69\144\x61\x74\x69\157\x6e\x5f\156\145\167\x5f\160\x61\163\x73\x77\157\x72\x64\x5f\154\x61\x62\145\x6c"), "\162\x65\x71\x75\x69\x72\x65\144\174\x6d\151\x6e\137\154\145\x6e\x67\x74\x68\x5b" . $this->config->item("\155\x69\156\x5f\160\141\163\163\167\x6f\162\144\x5f\154\x65\x6e\x67\164\x68", "\151\x6f\x6e\137\x61\x75\x74\x68") . "\x5d\174\x6d\141\x74\143\150\x65\163\133\x6e\x65\167\137\x63\x6f\x6e\x66\151\x72\155\x5d");
        goto i4Ixj;
        o4bqD:
        $this->output_json($data);
        goto oHMWM;
        rshro:
        $this->form_validation->set_rules("\157\x6c\x64", $this->lang->line("\143\x68\141\x6e\147\145\137\x70\141\x73\x73\167\157\162\x64\x5f\x76\x61\x6c\x69\x64\x61\x74\x69\157\x6e\137\157\x6c\144\x5f\x70\x61\163\x73\167\157\162\144\x5f\x6c\x61\x62\145\154"), "\x72\145\x71\x75\x69\162\x65\144");
        goto XQbZ9;
        JeYYI:
        goto xJFlK;
        goto odBIB;
        NmJzL:
        goto YH9gd;
        goto sEkQ7;
        MRlA3:
        $data["\163\x74\141\x74\165\x73"] = true;
        goto wdes9;
        Art_v:
        $data = ["\163\164\141\x74\165\x73" => false, "\155\x73\147" => $this->ion_auth->errors()];
        goto JeYYI;
        MOBg2:
        $change = $this->ion_auth->change_password($identity, $this->input->post("\x6f\154\x64"), $this->input->post("\156\x65\x77"));
        goto Nw4xl;
        afUNb:
        $data = ["\163\x74\x61\164\165\163" => false, "\145\162\162\x6f\x72\163" => ["\x6f\x6c\x64" => form_error("\157\x6c\x64"), "\156\x65\x77" => form_error("\x6e\x65\x77"), "\156\x65\167\x5f\143\157\156\x66\x69\162\155" => form_error("\x6e\x65\x77\137\x63\157\156\x66\151\x72\x6d")]];
        goto pzfW3;
        odBIB:
        jnkLR:
        goto MRlA3;
        i4Ixj:
        $this->form_validation->set_rules("\156\x65\x77\137\143\157\156\x66\151\162\155", $this->lang->line("\143\x68\x61\x6e\147\145\x5f\160\x61\163\163\x77\157\162\144\137\x76\x61\154\151\x64\x61\164\151\x6f\156\x5f\x6e\145\x77\x5f\160\x61\x73\163\x77\x6f\162\x64\x5f\x63\x6f\156\146\x69\162\x6d\x5f\x6c\x61\142\x65\154"), "\x72\145\x71\165\151\x72\145\144");
        goto fvSc7;
        wdes9:
        xJFlK:
        goto NmJzL;
        pzfW3:
        YH9gd:
        goto o4bqD;
        AbPy2:
        $identity = $this->session->userdata("\x69\144\145\x6e\x74\151\x74\x79");
        goto MOBg2;
        Nw4xl:
        if ($change) {
            goto jnkLR;
        }
        goto Art_v;
        fvSc7:
        if ($this->form_validation->run() === FALSE) {
            goto Y_Lu0;
        }
        goto AbPy2;
        oHMWM:
    }
    public function delete($id)
    {
        goto nf_tQ;
        xh50V:
        $this->output_json($data);
        goto bv3lw;
        nf_tQ:
        $this->is_admin();
        goto T5S6f;
        T5S6f:
        $data["\x73\164\141\x74\x75\x73"] = $this->ion_auth->delete_user($id) ? true : false;
        goto xh50V;
        bv3lw:
    }
}
