<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\x53\x45\x50\x41\124\110") or exit("\x4e\157\40\144\x69\162\145\143\164\x20\163\143\162\151\160\164\40\141\143\143\145\163\163\40\x61\x6c\x6c\x6f\167\145\144");
class Auth extends CI_Controller
{
    public $data = array();
    public function __construct()
    {
        goto TMPFp;
        qUdYT:
        $this->form_validation->set_error_delimiters($this->config->item("\145\x72\x72\157\162\137\163\164\x61\162\164\137\144\145\x6c\151\155\x69\x74\x65\162", "\151\157\x6e\x5f\x61\x75\x74\x68"), $this->config->item("\x65\162\x72\157\162\x5f\x65\156\x64\x5f\x64\145\154\151\155\151\x74\x65\x72", "\x69\157\x6e\x5f\x61\x75\x74\x68"));
        goto ROaHh;
        iP1nY:
        $this->load->helper(["\x75\162\154", "\154\x61\x6e\147\165\x61\x67\145"]);
        goto qUdYT;
        zM8kO:
        $this->load->model("\x4c\157\147\137\155\157\144\x65\x6c", "\x6c\157\147\147\151\156\147");
        goto mjTF6;
        TMPFp:
        parent::__construct();
        goto L1vzI;
        NqhyV:
        $this->load->model("\x53\x65\164\164\151\156\x67\x73\137\x6d\157\x64\145\x6c", "\x73\x65\164\164\151\156\x67\163");
        goto zM8kO;
        ROaHh:
        $this->lang->load("\141\x75\x74\x68");
        goto NqhyV;
        S5tLq:
        $this->load->library("\x66\x6f\x72\x6d\137\166\141\x6c\x69\144\x61\164\x69\157\x6e");
        goto iP1nY;
        L1vzI:
        $this->load->database();
        goto S5tLq;
        mjTF6:
    }
    public function output_json($data)
    {
        $this->output->set_content_type("\x61\160\x70\x6c\151\x63\141\x74\x69\x6f\x6e\57\152\x73\x6f\156")->set_output(json_encode($data));
    }
    public function index()
    {
        goto Y1nH4;
        mRMYW:
        redirect("\x69\156\163\164\x61\x6c\x6c");
        goto dLAyw;
        o4LiK:
        if (!$this->ion_auth->logged_in()) {
            goto MugjA;
        }
        goto wR5mu;
        le0RB:
        $this->load->view("\x5f\x74\145\x6d\x70\154\141\164\145\x73\x2f\x61\x75\x74\x68\x2f\x5f\150\x65\141\x64\x65\162", $this->data);
        goto f73KJ;
        A61py:
        redirect("\151\156\x73\164\x61\x6c\154");
        goto pUHGo;
        Y1nH4:
        if (!(count($this->db->list_tables()) == 0)) {
            goto qBUHy;
        }
        goto A61py;
        Rovhe:
        redirect("\144\x61\x73\150\x62\157\x61\x72\x64");
        goto SsoPt;
        df4b0:
        $setting = $this->settings->getSetting();
        goto gyZoI;
        pUHGo:
        qBUHy:
        goto df4b0;
        xMF7u:
        $this->data["\160\141\163\x73\x77\x6f\162\x64"] = ["\x6e\x61\155\x65" => "\x70\x61\163\163\x77\157\x72\x64", "\151\x64" => "\160\141\163\163\x77\x6f\162\144", "\164\171\160\145" => "\160\141\163\x73\167\157\x72\x64", "\x70\154\x61\143\x65\x68\x6f\154\x64\145\162" => "\120\141\x73\163\167\x6f\x72\144", "\143\154\141\x73\163" => "\x66\x6f\x72\155\x2d\x63\157\156\164\x72\x6f\154"];
        goto rN1Hy;
        f73KJ:
        $this->load->view("\141\165\x74\150\x2f\154\x6f\x67\151\x6e");
        goto nzQEA;
        XpRQ1:
        $this->data["\x69\144\145\x6e\164\x69\x74\171"] = ["\x6e\141\155\145" => "\x69\x64\145\x6e\x74\x69\164\x79", "\x69\x64" => "\151\x64\x65\x6e\x74\151\164\x79", "\x74\171\160\x65" => "\164\x65\x78\164", "\160\154\x61\x63\x65\x68\x6f\154\x64\x65\x72" => "\125\x73\145\x72\156\x61\155\x65", "\x61\x75\164\157\146\157\x63\x75\x73" => "\141\x75\x74\x6f\146\x6f\x63\165\163", "\x63\x6c\x61\x73\163" => "\146\157\x72\x6d\x2d\143\x6f\156\x74\x72\x6f\x6c", "\141\165\164\157\x63\157\155\x70\x6c\x65\164\145" => "\x6f\x66\146"];
        goto xMF7u;
        SsoPt:
        MugjA:
        goto MzLvS;
        wR5mu:
        $user_id = $this->ion_auth->user()->row()->id;
        goto FeV_w;
        MzLvS:
        $this->data["\163\x65\164\164\151\156\147"] = $setting;
        goto XpRQ1;
        dLAyw:
        TXwXC:
        goto o4LiK;
        gyZoI:
        if (!($setting == null)) {
            goto TXwXC;
        }
        goto mRMYW;
        FeV_w:
        $group = $this->ion_auth->get_users_groups($user_id)->row()->name;
        goto Rovhe;
        nzQEA:
        $this->load->view("\137\164\145\155\160\x6c\141\x74\x65\163\57\141\x75\x74\x68\x2f\137\146\157\157\164\x65\162");
        goto OI3Iu;
        rN1Hy:
        $this->data["\x6d\x65\x73\163\x61\x67\145"] = validation_errors() ? validation_errors() : $this->session->flashdata("\x6d\x65\x73\x73\x61\x67\x65");
        goto le0RB;
        OI3Iu:
    }
    public function cek_login()
    {
        goto OoskT;
        liW1K:
        goto hDNRu;
        goto UaOYZ;
        eiXYR:
        $remember = (bool) $this->input->post("\x72\x65\x6d\145\x6d\x62\145\162");
        goto RdyJT;
        AmXVj:
        $invalid = ["\x69\x64\x65\x6e\x74\x69\x74\x79" => form_error("\151\144\x65\156\164\x69\x74\171"), "\160\x61\x73\163\x77\157\x72\144" => form_error("\160\x61\163\x73\167\157\x72\144")];
        goto K0s_F;
        tqPFm:
        if ($this->form_validation->run() === TRUE) {
            goto kh0pG;
        }
        goto AmXVj;
        K0s_F:
        $data = ["\163\x74\141\164\165\163" => false, "\x69\156\166\x61\154\x69\144" => $invalid];
        goto C6hcO;
        RdyJT:
        if ($this->ion_auth->login($this->input->post("\151\x64\145\x6e\x74\x69\x74\x79"), $this->input->post("\160\141\163\x73\167\157\x72\x64"), $remember)) {
            goto xKoC8;
        }
        goto jlam2;
        YSYar:
        kh0pG:
        goto eiXYR;
        LOS6R:
        hDNRu:
        goto d7XIq;
        czaDG:
        $this->output_json($data);
        goto liW1K;
        OoskT:
        $this->form_validation->set_rules("\151\x64\x65\x6e\x74\151\164\171", str_replace("\72", '', $this->lang->line("\x6c\157\147\151\x6e\137\151\144\145\156\164\151\164\x79\x5f\x6c\x61\142\145\154")), "\x72\145\x71\x75\x69\162\145\144\x7c\164\x72\x69\x6d");
        goto xoygE;
        jlam2:
        $data = ["\x73\x74\x61\x74\165\163" => false, "\146\141\151\154\145\144" => "\x49\156\143\157\x72\162\x65\143\164\40\114\x6f\x67\x69\x6e"];
        goto czaDG;
        C6hcO:
        $this->output_json($data);
        goto OQSVX;
        OXNAv:
        $this->cek_akses();
        goto LOS6R;
        xoygE:
        $this->form_validation->set_rules("\x70\x61\x73\x73\x77\157\162\144", str_replace("\72", '', $this->lang->line("\x6c\x6f\x67\x69\156\137\160\x61\163\163\x77\x6f\x72\144\x5f\x6c\141\142\145\x6c")), "\162\x65\161\x75\151\162\145\x64\174\x74\x72\151\155");
        goto tqPFm;
        OQSVX:
        goto sJX0i;
        goto YSYar;
        UaOYZ:
        xKoC8:
        goto OXNAv;
        d7XIq:
        sJX0i:
        goto O00b8;
        O00b8:
    }
    public function cek_akses()
    {
        goto WdFMt;
        f3TQK:
        $data = ["\163\x74\141\x74\x75\x73" => $status, "\x75\x72\154" => $url];
        goto vu8O5;
        A8toI:
        alRhI:
        goto f3TQK;
        z1K5v:
        $status = true;
        goto mCTZk;
        ouX9A:
        $url = "\144\141\x73\x68\142\x6f\141\x72\144";
        goto BqIHK;
        vu8O5:
        $this->output_json($data);
        goto gdW39;
        mCTZk:
        $this->logging->saveLog(1, "\x4c\157\x67\151\x6e");
        goto ouX9A;
        BqIHK:
        goto alRhI;
        goto JfPhW;
        WdFMt:
        if (!$this->ion_auth->logged_in()) {
            goto E4Dm5;
        }
        goto z1K5v;
        JfPhW:
        E4Dm5:
        goto NtysL;
        NtysL:
        $status = false;
        goto Cecll;
        Cecll:
        $url = "\x61\x75\164\150";
        goto A8toI;
        gdW39:
    }
    public function logout()
    {
        $this->ion_auth->logout();
        redirect("\154\157\147\151\156", "\162\145\146\x72\x65\x73\x68");
    }
    public function change_password()
    {
        goto Z6VIj;
        VckyN:
        $identity = $this->session->userdata("\x69\144\145\x6e\x74\151\164\x79");
        goto zPjb_;
        OwIU7:
        $this->logout();
        goto EJ3Tg;
        dRfFe:
        In3CA:
        goto UVL33;
        oaciR:
        $this->session->set_flashdata("\155\145\163\163\x61\147\145", $this->ion_auth->messages());
        goto OwIU7;
        EJ3Tg:
        zf87u:
        goto H5QCu;
        WcIqN:
        $this->data["\x6f\x6c\x64\x5f\160\141\163\x73\x77\x6f\162\x64"] = ["\156\x61\155\145" => "\x6f\154\144", "\x69\144" => "\157\154\144", "\x74\171\x70\x65" => "\x70\x61\163\163\167\157\162\144"];
        goto oTssk;
        YBCvu:
        goto zf87u;
        goto fxCas;
        Z6VIj:
        $this->form_validation->set_rules("\157\154\x64", $this->lang->line("\143\150\x61\x6e\x67\x65\x5f\160\141\163\x73\x77\157\162\144\137\166\x61\154\151\144\141\x74\x69\157\x6e\x5f\157\154\144\x5f\x70\141\x73\x73\x77\x6f\162\x64\x5f\154\x61\142\145\154"), "\162\x65\x71\165\x69\162\x65\144");
        goto Kx4FL;
        fxCas:
        AjKO8:
        goto oaciR;
        L4hn9:
        W5xI6:
        goto DMdu8;
        ToRdO:
        $this->data["\165\163\145\162\137\x69\144"] = ["\156\141\x6d\145" => "\x75\x73\145\x72\137\x69\144", "\x69\144" => "\165\x73\x65\162\x5f\x69\144", "\x74\x79\x70\x65" => "\x68\151\x64\144\145\x6e", "\166\x61\x6c\x75\145" => $user->id];
        goto o7bKg;
        pvlOZ:
        $this->form_validation->set_rules("\x6e\145\167\137\x63\x6f\156\146\x69\x72\155", $this->lang->line("\143\150\x61\156\x67\x65\x5f\x70\x61\x73\163\167\157\x72\144\137\166\x61\154\x69\x64\141\164\x69\x6f\156\137\x6e\x65\167\x5f\160\x61\163\x73\x77\157\x72\x64\137\x63\x6f\x6e\146\151\162\x6d\137\154\141\142\145\x6c"), "\162\145\x71\165\151\x72\145\x64");
        goto wgY9_;
        Kx4FL:
        $this->form_validation->set_rules("\156\x65\x77", $this->lang->line("\x63\150\x61\156\147\x65\x5f\160\141\x73\163\167\157\162\x64\137\166\x61\154\x69\x64\141\164\x69\x6f\x6e\x5f\156\x65\x77\x5f\160\x61\163\x73\x77\157\x72\x64\137\154\141\142\x65\154"), "\x72\x65\161\165\x69\x72\x65\x64\174\155\151\x6e\137\x6c\x65\156\x67\x74\x68\133" . $this->config->item("\155\151\x6e\x5f\160\x61\x73\x73\x77\x6f\162\144\137\x6c\145\156\x67\x74\150", "\151\x6f\x6e\137\141\x75\x74\x68") . "\x5d\174\155\141\164\143\150\145\163\133\156\x65\x77\x5f\143\157\x6e\x66\x69\x72\155\x5d");
        goto pvlOZ;
        DMdu8:
        $user = $this->ion_auth->user()->row();
        goto ElHtO;
        ElHtO:
        if ($this->form_validation->run() === FALSE) {
            goto srJzP;
        }
        goto VckyN;
        PVQAw:
        $this->data["\156\x65\x77\137\x70\141\163\163\167\x6f\162\x64\x5f\x63\157\x6e\146\151\162\155"] = ["\156\141\155\x65" => "\156\145\167\x5f\143\157\x6e\146\151\x72\x6d", "\x69\144" => "\156\145\167\x5f\143\157\156\146\x69\162\x6d", "\164\x79\x70\x65" => "\x70\x61\x73\x73\167\157\x72\144", "\160\141\164\x74\x65\x72\x6e" => "\136\56\173" . $this->data["\x6d\151\156\x5f\160\141\x73\x73\167\x6f\x72\x64\x5f\x6c\145\x6e\x67\164\150"] . "\x7d\56\52\x24"];
        goto ToRdO;
        wgY9_:
        if ($this->ion_auth->logged_in()) {
            goto W5xI6;
        }
        goto qa9A9;
        qa9A9:
        redirect("\141\165\x74\150\57\154\x6f\147\151\156", "\x72\145\x66\x72\x65\163\150");
        goto L4hn9;
        exDD2:
        redirect("\141\x75\164\x68\57\143\x68\141\x6e\x67\145\137\x70\x61\163\163\167\157\162\x64", "\162\x65\x66\x72\x65\163\150");
        goto YBCvu;
        H5QCu:
        goto In3CA;
        goto RGN6K;
        h1yRv:
        $this->data["\x6d\151\156\137\160\x61\163\x73\x77\157\x72\x64\137\154\x65\x6e\x67\x74\150"] = $this->config->item("\155\x69\156\137\x70\141\x73\163\167\x6f\x72\144\137\154\145\x6e\147\x74\x68", "\151\157\x6e\137\x61\165\x74\x68");
        goto WcIqN;
        o7bKg:
        $this->_render_page("\x61\165\x74\150" . DIRECTORY_SEPARATOR . "\x63\x68\141\x6e\x67\145\137\160\x61\163\x73\x77\157\x72\x64", $this->data);
        goto dRfFe;
        oTssk:
        $this->data["\x6e\145\x77\137\160\x61\x73\163\167\x6f\162\144"] = ["\x6e\141\155\x65" => "\156\x65\167", "\x69\144" => "\x6e\x65\167", "\x74\171\160\x65" => "\x70\x61\163\163\167\157\x72\x64", "\160\141\x74\x74\x65\162\x6e" => "\136\56\x7b" . $this->data["\155\151\x6e\137\160\141\x73\x73\167\x6f\x72\144\137\x6c\x65\156\x67\x74\150"] . "\175\56\52\44"];
        goto PVQAw;
        WXhWX:
        if ($change) {
            goto AjKO8;
        }
        goto gjGUx;
        yPEYj:
        $this->data["\x6d\x65\x73\x73\141\147\x65"] = validation_errors() ? validation_errors() : $this->session->flashdata("\155\x65\163\x73\x61\147\x65");
        goto h1yRv;
        gjGUx:
        $this->session->set_flashdata("\x6d\145\163\x73\141\x67\x65", $this->ion_auth->errors());
        goto exDD2;
        zPjb_:
        $change = $this->ion_auth->change_password($identity, $this->input->post("\157\154\144"), $this->input->post("\x6e\145\x77"));
        goto WXhWX;
        RGN6K:
        srJzP:
        goto yPEYj;
        UVL33:
    }
    public function forgot_password()
    {
        goto FKmjN;
        RJoJD:
        $this->data["\x69\x64\x65\156\x74\x69\x74\x79\137\154\x61\x62\x65\154"] = $this->lang->line("\x66\157\x72\x67\157\164\x5f\160\141\163\163\x77\x6f\162\x64\x5f\x65\x6d\x61\151\154\137\x69\144\145\x6e\x74\151\x74\171\137\x6c\141\x62\145\154");
        goto bxYgr;
        Cdvlg:
        redirect("\x61\165\164\150\x2f\146\157\x72\147\157\x74\137\160\141\x73\163\167\x6f\162\x64", "\x72\145\x66\x72\x65\x73\x68");
        goto WsAi4;
        SZVYN:
        redirect("\141\x75\164\x68\x2f\x66\x6f\x72\147\x6f\x74\137\x70\x61\x73\x73\167\x6f\x72\144", "\x72\145\146\162\145\x73\x68");
        goto zlusb;
        WsAi4:
        gitlS:
        goto XbGph;
        GH4Cg:
        $forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item("\151\x64\x65\156\x74\151\x74\171", "\151\157\156\x5f\x61\x75\x74\150")});
        goto c4Kmf;
        BeWQL:
        if ($this->config->item("\x69\x64\x65\156\x74\151\x74\171", "\151\x6f\156\137\141\165\164\x68") != "\145\x6d\x61\151\154") {
            goto C3FYQ;
        }
        goto rRFcg;
        fxRPF:
        if ($this->config->item("\151\144\145\x6e\x74\x69\x74\x79", "\151\x6f\156\x5f\141\165\x74\x68") != "\x65\155\141\151\154") {
            goto ePggs;
        }
        goto gfJbJ;
        AlUNF:
        if ($this->form_validation->run() === FALSE) {
            goto scPci;
        }
        goto xCHCP;
        cKnIm:
        $this->session->set_flashdata("\x73\x75\x63\143\145\163\163", $this->ion_auth->messages());
        goto Cdvlg;
        k5Mx4:
        if (!empty($identity)) {
            goto CuC__;
        }
        goto BeWQL;
        lHs_6:
        $this->session->set_flashdata("\x6d\145\163\x73\141\x67\145", $this->ion_auth->errors());
        goto kWmR5;
        bxYgr:
        goto JbSE2;
        goto m3cHK;
        s0RGP:
        Ykm6N:
        goto cKnIm;
        Nn8o8:
        $this->data["\164\171\160\x65"] = $this->config->item("\x69\x64\145\156\x74\x69\164\171", "\x69\157\x6e\137\141\x75\164\x68");
        goto xl9Kx;
        WeyVw:
        if ($this->config->item("\151\144\145\x6e\164\151\x74\x79", "\x69\157\156\x5f\x61\x75\x74\x68") != "\145\x6d\x61\x69\154") {
            goto VHT2X;
        }
        goto RJoJD;
        gfJbJ:
        $this->form_validation->set_rules("\x69\x64\145\x6e\x74\x69\x74\x79", $this->lang->line("\146\x6f\162\x67\157\x74\137\x70\141\163\x73\x77\157\x72\144\x5f\166\141\x6c\151\144\141\164\x69\157\156\137\x65\x6d\141\x69\154\x5f\x6c\141\x62\145\154"), "\162\x65\x71\x75\x69\162\145\144\x7c\x76\x61\x6c\151\144\x5f\145\155\x61\x69\x6c");
        goto yp16x;
        SCCo5:
        $this->load->view("\x5f\164\145\155\x70\x6c\x61\164\x65\163\x2f\x61\165\164\150\x2f\137\146\157\x6f\x74\x65\162");
        goto ohCnn;
        iw1zI:
        $this->data["\151\144\145\156\164\x69\164\171\x5f\x6c\141\x62\145\154"] = $this->lang->line("\146\x6f\x72\x67\157\x74\x5f\160\141\x73\163\x77\x6f\x72\x64\x5f\x69\x64\145\156\x74\151\164\x79\137\x6c\x61\x62\145\x6c");
        goto tQBRg;
        gTa1P:
        $this->data["\x6d\145\163\x73\141\x67\145"] = validation_errors() ? validation_errors() : $this->session->flashdata("\x6d\145\x73\x73\141\x67\x65");
        goto ta5nU;
        FKmjN:
        $this->data["\164\151\164\154\145"] = $this->lang->line("\x66\157\162\147\157\x74\x5f\160\x61\163\x73\x77\157\x72\x64\137\x68\145\x61\x64\x69\x6e\147");
        goto fxRPF;
        tQBRg:
        JbSE2:
        goto gTa1P;
        c4Kmf:
        if ($forgotten) {
            goto Ykm6N;
        }
        goto cM_fY;
        MU33m:
        CuC__:
        goto GH4Cg;
        cWoTm:
        scPci:
        goto Nn8o8;
        kWmR5:
        redirect("\x61\x75\164\150\x2f\146\157\162\x67\x6f\164\x5f\x70\x61\163\x73\x77\157\x72\144", "\162\x65\146\x72\x65\163\150");
        goto MU33m;
        DlDuE:
        ePggs:
        goto q0fd9;
        cM_fY:
        $this->session->set_flashdata("\155\145\x73\163\x61\x67\x65", $this->ion_auth->errors());
        goto SZVYN;
        uXiTQ:
        C3FYQ:
        goto z2xF3;
        yp16x:
        goto V3VyU;
        goto DlDuE;
        m3cHK:
        VHT2X:
        goto iw1zI;
        PWaAN:
        goto zJ6HA;
        goto uXiTQ;
        q0fd9:
        $this->form_validation->set_rules("\151\x64\x65\x6e\164\x69\164\171", $this->lang->line("\146\157\x72\x67\x6f\164\x5f\160\141\163\x73\x77\x6f\162\144\x5f\x69\144\145\156\164\x69\164\x79\x5f\154\x61\142\x65\x6c"), "\162\x65\161\165\151\x72\145\144");
        goto UCi7E;
        UCi7E:
        V3VyU:
        goto AlUNF;
        bi2pm:
        $this->load->view("\141\165\x74\x68\x2f\146\157\x72\147\157\164\x5f\160\141\x73\163\167\x6f\x72\144");
        goto SCCo5;
        xl9Kx:
        $this->data["\151\x64\x65\156\164\151\x74\171"] = ["\156\x61\x6d\145" => "\151\x64\x65\156\164\x69\164\x79", "\x69\144" => "\x69\144\145\x6e\164\151\x74\x79", "\143\154\141\x73\163" => "\146\x6f\162\155\55\x63\157\x6e\164\162\157\154", "\141\x75\x74\157\143\157\155\160\154\x65\164\x65" => "\x6f\x66\146", "\x61\165\164\157\146\x6f\x63\x75\x73" => "\141\165\x74\x6f\146\157\143\x75\163"];
        goto WeyVw;
        z2xF3:
        $this->ion_auth->set_error("\x66\157\162\147\157\x74\x5f\x70\141\163\x73\167\x6f\162\144\x5f\151\x64\145\156\x74\x69\x74\x79\x5f\156\157\x74\x5f\x66\x6f\x75\x6e\x64");
        goto d2pgy;
        xCHCP:
        $identity_column = $this->config->item("\151\144\x65\156\164\x69\164\x79", "\x69\157\156\137\141\x75\x74\x68");
        goto hZ0OO;
        zlusb:
        goto gitlS;
        goto s0RGP;
        ta5nU:
        $this->load->view("\137\164\x65\155\x70\154\141\164\145\x73\x2f\141\165\x74\150\x2f\137\x68\x65\141\x64\145\162", $this->data);
        goto bi2pm;
        rRFcg:
        $this->ion_auth->set_error("\146\157\162\147\157\x74\137\160\141\x73\163\167\157\x72\x64\x5f\x65\x6d\141\151\x6c\137\156\157\x74\137\146\157\165\156\144");
        goto PWaAN;
        XbGph:
        goto M9uno;
        goto cWoTm;
        hZ0OO:
        $identity = $this->ion_auth->where($identity_column, $this->input->post("\x69\x64\145\x6e\x74\151\x74\171"))->users()->row();
        goto k5Mx4;
        ohCnn:
        M9uno:
        goto f7FB0;
        d2pgy:
        zJ6HA:
        goto lHs_6;
        f7FB0:
    }
    public function reset_password($code = NULL)
    {
        goto zEkq5;
        MBeJG:
        goto XR3bt;
        goto Vkt3M;
        yqaqn:
        $this->load->view("\x61\x75\x74\150\57\162\x65\163\x65\x74\137\x70\141\x73\163\167\157\x72\144", $this->data);
        goto t0Ao1;
        xRpVu:
        $identity = $user->{$this->config->item("\151\144\x65\x6e\x74\x69\x74\x79", "\x69\x6f\156\137\141\x75\164\150")};
        goto OfIKY;
        p8L47:
        $this->data["\165\x73\145\162\137\x69\x64"] = ["\156\141\x6d\x65" => "\165\163\x65\x72\x5f\151\144", "\x69\144" => "\165\163\x65\162\x5f\x69\x64", "\164\x79\160\x65" => "\150\x69\x64\144\145\156", "\x76\141\x6c\165\145" => $user->id];
        goto sxbw3;
        blV21:
        if ($user) {
            goto LmF9w;
        }
        goto xPfKR;
        e5iJi:
        $this->data["\164\x69\164\154\145"] = $this->lang->line("\x72\x65\x73\145\164\x5f\x70\x61\x73\x73\167\157\x72\x64\x5f\150\145\x61\144\x69\156\x67");
        goto NjL4x;
        un_mK:
        MPmBM:
        goto ocYUK;
        Omk23:
        show_error($this->lang->line("\145\x72\162\157\162\137\143\x73\162\x66"));
        goto uhYD7;
        sxbw3:
        $this->data["\x63\163\x72\146"] = $this->_get_csrf_nonce();
        goto FLrfR;
        Xk1QE:
        $change = $this->ion_auth->reset_password($identity, $this->input->post("\156\x65\167"));
        goto i1ZPU;
        OfIKY:
        if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post("\x75\163\145\x72\x5f\151\x64")) {
            goto OALIt;
        }
        goto Xk1QE;
        sy9h1:
        A35zj:
        goto e5iJi;
        fGrLx:
        LmF9w:
        goto nwAgF;
        zPy5o:
        $this->session->set_flashdata("\x6d\x65\163\x73\x61\x67\145", $this->ion_auth->errors());
        goto Bf651;
        B2ojc:
        show_404();
        goto sy9h1;
        ocYUK:
        $this->session->set_flashdata("\x6d\x65\163\163\x61\147\145", $this->ion_auth->messages());
        goto aqkHD;
        svNcD:
        XR3bt:
        goto n81pp;
        i1ZPU:
        if ($change) {
            goto MPmBM;
        }
        goto zPy5o;
        nUl19:
        if ($this->form_validation->run() === FALSE) {
            goto D3WVq;
        }
        goto xRpVu;
        t0Ao1:
        $this->load->view("\137\164\145\x6d\x70\154\141\164\145\163\x2f\x61\165\x74\x68\x2f\x5f\x66\157\157\x74\145\162");
        goto svNcD;
        tPr7j:
        $this->form_validation->set_rules("\x6e\x65\167\x5f\x63\x6f\x6e\146\151\x72\155", $this->lang->line("\x72\x65\163\x65\x74\137\x70\141\x73\163\167\x6f\x72\x64\137\166\141\154\x69\x64\141\164\x69\157\156\x5f\156\145\167\x5f\x70\141\x73\x73\x77\x6f\x72\x64\137\x63\157\x6e\146\151\162\155\137\154\141\142\145\154"), "\162\145\x71\x75\151\162\x65\x64");
        goto nUl19;
        NqOPU:
        $this->data["\156\x65\x77\137\x70\x61\163\163\x77\157\x72\144"] = ["\156\x61\x6d\x65" => "\156\x65\x77", "\151\x64" => "\x6e\145\x77", "\x74\171\160\x65" => "\160\141\163\x73\x77\157\162\144", "\160\141\164\164\145\x72\156" => "\x5e\56\173" . $this->data["\x6d\x69\x6e\137\x70\x61\163\x73\x77\x6f\162\144\x5f\154\145\156\x67\x74\150"] . "\175\x2e\x2a\x24"];
        goto odwZb;
        Bf651:
        redirect("\141\x75\164\150\57\162\x65\x73\145\164\x5f\x70\x61\x73\x73\x77\157\162\x64\x2f" . $code, "\x72\145\x66\x72\145\x73\150");
        goto FZl0H;
        odwZb:
        $this->data["\x6e\x65\167\137\160\x61\x73\163\x77\157\x72\x64\x5f\143\157\x6e\146\151\162\155"] = ["\x6e\141\x6d\x65" => "\156\x65\167\137\143\157\156\x66\151\162\155", "\x69\144" => "\x6e\x65\167\137\x63\x6f\x6e\146\x69\x72\155", "\x74\171\x70\145" => "\160\141\x73\163\167\x6f\162\144", "\x70\x61\x74\x74\145\162\x6e" => "\136\56\x7b" . $this->data["\x6d\x69\x6e\137\x70\141\x73\163\167\157\162\x64\137\x6c\x65\x6e\x67\164\150"] . "\175\56\x2a\x24"];
        goto p8L47;
        FLrfR:
        $this->data["\143\157\x64\x65"] = $code;
        goto hM3RV;
        S8CMk:
        goto f4_c3;
        goto tZnis;
        aqkHD:
        redirect("\141\165\x74\x68\x2f\x6c\x6f\147\x69\x6e", "\x72\145\x66\x72\x65\x73\150");
        goto F2DwM;
        hM3RV:
        $this->load->view("\137\164\x65\155\x70\x6c\x61\x74\x65\163\x2f\x61\165\164\150\57\x5f\150\x65\141\144\x65\x72");
        goto yqaqn;
        nwAgF:
        $this->form_validation->set_rules("\x6e\x65\x77", $this->lang->line("\162\x65\x73\145\x74\x5f\160\141\163\163\167\x6f\x72\144\137\166\x61\x6c\151\x64\x61\164\151\x6f\x6e\137\x6e\145\x77\x5f\x70\x61\163\163\167\x6f\162\144\x5f\x6c\x61\x62\x65\x6c"), "\162\x65\161\165\151\162\145\144\174\155\x69\156\x5f\x6c\145\x6e\x67\164\x68\133" . $this->config->item("\x6d\151\x6e\137\x70\141\163\x73\x77\x6f\x72\144\137\154\145\x6e\147\164\150", "\151\157\156\137\x61\x75\x74\150") . "\x5d\x7c\155\x61\x74\143\x68\x65\x73\x5b\156\x65\x77\x5f\143\x6f\156\x66\151\162\x6d\x5d");
        goto tPr7j;
        VLjJ6:
        $this->data["\x6d\x65\x73\x73\141\x67\x65"] = validation_errors() ? validation_errors() : $this->session->flashdata("\x6d\x65\163\x73\141\147\x65");
        goto MDrCz;
        NjL4x:
        $user = $this->ion_auth->forgotten_password_check($code);
        goto blV21;
        zEkq5:
        if ($code) {
            goto A35zj;
        }
        goto B2ojc;
        Vkt3M:
        D3WVq:
        goto VLjJ6;
        F2DwM:
        R5sg1:
        goto S8CMk;
        hCGvF:
        redirect("\141\x75\164\x68\57\x66\x6f\162\147\x6f\x74\137\160\141\x73\163\167\157\162\x64", "\162\x65\146\162\x65\x73\x68");
        goto ReNEg;
        n81pp:
        mc4Jn:
        goto sdIrI;
        ReNEg:
        goto mc4Jn;
        goto fGrLx;
        uhYD7:
        f4_c3:
        goto MBeJG;
        tZnis:
        OALIt:
        goto IVA21;
        xPfKR:
        $this->session->set_flashdata("\155\145\x73\163\141\147\145", $this->ion_auth->errors());
        goto hCGvF;
        FZl0H:
        goto R5sg1;
        goto un_mK;
        MDrCz:
        $this->data["\155\x69\x6e\x5f\x70\x61\163\x73\x77\157\x72\144\137\154\x65\156\x67\164\x68"] = $this->config->item("\x6d\x69\156\137\x70\x61\163\163\x77\x6f\x72\x64\x5f\x6c\x65\156\147\164\150", "\151\157\156\137\x61\165\164\150");
        goto NqOPU;
        IVA21:
        $this->ion_auth->clear_forgotten_password_code($identity);
        goto Omk23;
        sdIrI:
    }
    public function activate($id, $code = FALSE)
    {
        goto jLElU;
        lOVVM:
        $this->session->set_flashdata("\x6d\145\x73\x73\141\147\x65", $this->ion_auth->messages());
        goto hegJ1;
        ZjBoB:
        $this->session->set_flashdata("\155\x65\163\x73\x61\x67\145", $this->ion_auth->errors());
        goto TEESb;
        EVwTq:
        if (!$this->ion_auth->is_admin()) {
            goto xEqpF;
        }
        goto TGWPE;
        u_nUC:
        if ($code !== FALSE) {
            goto kGgH4;
        }
        goto EVwTq;
        N17O0:
        if ($activation) {
            goto DFZ7J;
        }
        goto ZjBoB;
        v_vze:
        xEqpF:
        goto lQA5d;
        lQA5d:
        goto Am3sL;
        goto LJ5mp;
        hegJ1:
        redirect("\141\165\164\150", "\162\145\146\x72\145\163\150");
        goto hAj0O;
        hAj0O:
        f312N:
        goto qwd2l;
        knQ25:
        DFZ7J:
        goto lOVVM;
        TGWPE:
        $activation = $this->ion_auth->activate($id);
        goto v_vze;
        TEESb:
        redirect("\141\x75\x74\x68\x2f\146\157\x72\x67\157\164\x5f\x70\141\163\x73\x77\x6f\x72\144", "\x72\145\146\162\145\x73\150");
        goto hfbeR;
        jLElU:
        $activation = FALSE;
        goto u_nUC;
        ukcFW:
        Am3sL:
        goto N17O0;
        LJ5mp:
        kGgH4:
        goto Gka4v;
        hfbeR:
        goto f312N;
        goto knQ25;
        Gka4v:
        $activation = $this->ion_auth->activate($id, $code);
        goto ukcFW;
        qwd2l:
    }
    public function deactivate($id = NULL)
    {
        goto VI2k1;
        SJPmf:
        if (!($this->ion_auth->logged_in() && $this->ion_auth->is_admin())) {
            goto Nwx3f;
        }
        goto GUzAs;
        yBR5a:
        $this->data["\x75\x73\145\x72"] = $this->ion_auth->user($id)->row();
        goto w5xC7;
        Y6xKN:
        $this->form_validation->set_rules("\143\x6f\156\146\x69\162\155", $this->lang->line("\x64\145\x61\x63\164\x69\166\141\x74\145\137\x76\141\x6c\151\x64\141\x74\x69\x6f\156\137\x63\157\x6e\x66\x69\x72\155\x5f\x6c\141\142\x65\154"), "\x72\145\161\165\151\x72\x65\144");
        goto ViZM6;
        BtbSE:
        SUa2d:
        goto K2MOf;
        VI2k1:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())) {
            goto ChNAH;
        }
        goto jzcA6;
        uarEW:
        x6EWo:
        goto SJPmf;
        hcQxA:
        redirect("\x61\x75\x74\x68", "\162\x65\x66\162\x65\163\x68");
        goto QaWfo;
        O4Nay:
        $this->data["\143\x73\x72\x66"] = $this->_get_csrf_nonce();
        goto yBR5a;
        lz7eC:
        show_error($this->lang->line("\x65\162\162\x6f\x72\137\143\163\x72\146"));
        goto uarEW;
        LxYob:
        if (!($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post("\x69\144"))) {
            goto x6EWo;
        }
        goto lz7eC;
        QaWfo:
        goto SUa2d;
        goto Ee7Db;
        w5xC7:
        $this->_render_page("\x61\165\164\x68" . DIRECTORY_SEPARATOR . "\x64\x65\x61\143\164\x69\x76\141\x74\x65\x5f\x75\163\145\162", $this->data);
        goto BtbSE;
        GUzAs:
        $this->ion_auth->deactivate($id);
        goto Z0xQn;
        JbEoQ:
        $this->load->library("\146\157\162\x6d\x5f\x76\x61\154\151\x64\x61\x74\x69\157\x6e");
        goto Y6xKN;
        ViZM6:
        $this->form_validation->set_rules("\151\x64", $this->lang->line("\x64\145\141\x63\164\x69\166\x61\164\145\137\166\141\x6c\151\144\141\164\151\157\x6e\137\165\x73\x65\162\137\x69\144\137\154\x61\142\x65\x6c"), "\x72\145\x71\165\151\x72\x65\x64\174\x61\154\160\x68\x61\x5f\156\x75\155\x65\x72\151\143");
        goto NY0_T;
        Zq2Ly:
        $id = (int) $id;
        goto JbEoQ;
        n8rh7:
        ChNAH:
        goto Zq2Ly;
        NY0_T:
        if ($this->form_validation->run() === FALSE) {
            goto Ukj5b;
        }
        goto FNTJq;
        Ee7Db:
        Ukj5b:
        goto O4Nay;
        Dj3aZ:
        GTx1O:
        goto hcQxA;
        FNTJq:
        if (!($this->input->post("\143\x6f\x6e\x66\x69\x72\155") == "\171\145\x73")) {
            goto GTx1O;
        }
        goto LxYob;
        jzcA6:
        show_error("\x59\x6f\x75\40\155\x75\163\164\40\x62\x65\x20\x61\156\40\x61\144\155\151\x6e\x69\x73\x74\162\x61\164\x6f\162\x20\164\157\x20\x76\x69\x65\x77\x20\164\x68\x69\x73\40\x70\141\x67\145\56");
        goto n8rh7;
        Z0xQn:
        Nwx3f:
        goto Dj3aZ;
        K2MOf:
    }
    public function create_user()
    {
        goto aEdoh;
        M3qlH:
        $this->data["\x65\x6d\x61\151\154"] = ["\x6e\141\155\x65" => "\x65\x6d\x61\x69\154", "\151\144" => "\x65\x6d\x61\x69\x6c", "\x74\x79\x70\x65" => "\x74\145\x78\164", "\166\x61\154\165\x65" => $this->form_validation->set_value("\145\155\141\151\154")];
        goto xuH20;
        pUU4T:
        $this->form_validation->set_rules("\160\141\x73\x73\x77\157\x72\x64\x5f\143\157\x6e\x66\151\x72\x6d", $this->lang->line("\143\162\145\x61\164\145\x5f\x75\x73\145\162\137\x76\x61\x6c\x69\144\x61\164\151\157\156\137\160\141\163\x73\167\157\162\144\x5f\143\157\156\146\x69\162\155\x5f\154\141\142\x65\154"), "\162\x65\x71\x75\151\162\145\144");
        goto sgrCO;
        h8lXg:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())) {
            goto A2wvq;
        }
        goto MBLfn;
        OwX3n:
        MAodb:
        goto ou6Po;
        mha59:
        $this->data["\x70\x68\x6f\x6e\145"] = ["\x6e\x61\155\x65" => "\160\150\157\x6e\145", "\151\x64" => "\x70\150\157\x6e\x65", "\x74\x79\160\x65" => "\x74\145\x78\x74", "\166\141\154\x75\145" => $this->form_validation->set_value("\x70\150\x6f\156\x65")];
        goto lFfE9;
        Uej3n:
        lM7Ll:
        goto OrnDp;
        n31NP:
        $this->form_validation->set_rules("\151\144\145\x6e\164\151\x74\x79", $this->lang->line("\143\162\145\x61\x74\145\x5f\x75\x73\145\x72\137\166\141\x6c\151\144\x61\x74\151\157\x6e\137\x69\144\145\156\x74\x69\x74\171\x5f\x6c\x61\142\145\154"), "\x74\162\x69\x6d\x7c\x72\145\x71\x75\151\x72\145\x64\174\x69\163\137\165\x6e\x69\161\165\x65\x5b" . $tables["\x75\163\145\162\x73"] . "\56" . $identity_column . "\x5d");
        goto Bcc26;
        I_0t_:
        $this->data["\151\144\x65\x6e\x74\x69\x74\171"] = ["\156\141\x6d\x65" => "\151\x64\145\x6e\x74\151\164\171", "\151\x64" => "\x69\x64\x65\156\x74\x69\x74\171", "\x74\171\160\x65" => "\164\x65\170\164", "\166\x61\x6c\165\x65" => $this->form_validation->set_value("\151\144\x65\x6e\x74\151\x74\171")];
        goto M3qlH;
        mJF5i:
        $this->form_validation->set_rules("\160\141\x73\x73\x77\x6f\x72\x64", $this->lang->line("\143\162\x65\141\164\x65\x5f\x75\x73\145\x72\137\166\x61\x6c\151\144\141\x74\151\157\x6e\x5f\x70\x61\163\163\167\x6f\x72\144\137\x6c\141\142\x65\154"), "\x72\x65\161\165\151\162\x65\144\x7c\x6d\151\156\137\154\x65\156\147\164\150\133" . $this->config->item("\155\x69\x6e\137\x70\x61\x73\x73\167\157\x72\x64\x5f\154\145\x6e\147\164\x68", "\x69\157\156\137\141\165\164\150") . "\x5d\174\155\x61\x74\x63\150\x65\163\133\160\x61\163\x73\x77\157\162\x64\137\143\157\x6e\x66\x69\162\x6d\x5d");
        goto pUU4T;
        zdHLH:
        $this->data["\160\141\163\163\x77\157\162\144\137\x63\157\x6e\x66\x69\162\155"] = ["\x6e\x61\155\145" => "\160\141\163\x73\167\x6f\x72\x64\137\x63\x6f\156\146\151\162\x6d", "\151\144" => "\x70\x61\163\x73\167\157\162\x64\137\143\x6f\156\x66\151\x72\x6d", "\x74\171\160\x65" => "\160\x61\163\163\x77\157\x72\144", "\x76\x61\x6c\165\x65" => $this->form_validation->set_value("\160\x61\163\x73\x77\157\162\144\137\x63\x6f\x6e\146\151\x72\155")];
        goto ZU7Ht;
        ou6Po:
        if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data)) {
            goto SpjUe;
        }
        goto l49_I;
        pdkQj:
        $this->form_validation->set_rules("\x65\155\x61\151\x6c", $this->lang->line("\x63\162\145\141\x74\145\137\x75\x73\145\x72\x5f\x76\141\x6c\x69\x64\141\164\151\x6f\x6e\137\145\x6d\x61\151\154\x5f\154\141\142\x65\x6c"), "\164\162\x69\x6d\174\162\x65\x71\x75\151\162\x65\x64\174\x76\141\x6c\x69\x64\137\145\155\141\x69\x6c\x7c\x69\x73\137\x75\156\x69\161\x75\x65\133" . $tables["\x75\163\x65\162\163"] . "\56\145\155\141\151\x6c\135");
        goto zxUxN;
        xuH20:
        $this->data["\x63\157\155\x70\x61\x6e\171"] = ["\156\141\155\x65" => "\143\157\x6d\x70\141\156\171", "\151\144" => "\143\x6f\x6d\x70\141\x6e\x79", "\164\x79\x70\x65" => "\164\x65\170\x74", "\166\141\154\x75\145" => $this->form_validation->set_value("\143\x6f\x6d\160\x61\x6e\x79")];
        goto mha59;
        DoQTz:
        $this->data["\x6c\141\x73\x74\137\156\141\155\145"] = ["\156\x61\x6d\x65" => "\x6c\x61\x73\x74\137\156\141\x6d\145", "\151\x64" => "\x6c\141\x73\164\137\156\141\x6d\x65", "\x74\x79\160\x65" => "\164\x65\x78\164", "\166\x61\154\165\145" => $this->form_validation->set_value("\154\x61\163\164\x5f\x6e\141\x6d\x65")];
        goto I_0t_;
        Bcc26:
        $this->form_validation->set_rules("\x65\x6d\x61\151\x6c", $this->lang->line("\143\162\x65\141\164\145\x5f\x75\x73\145\x72\137\x76\141\x6c\x69\x64\x61\x74\x69\157\156\137\145\155\x61\151\154\137\x6c\141\142\x65\154"), "\164\x72\151\155\x7c\162\145\x71\x75\151\x72\145\x64\174\166\141\154\x69\144\x5f\x65\155\141\x69\154");
        goto SPggU;
        l49_I:
        $this->data["\155\x65\x73\163\x61\147\x65"] = validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata("\155\x65\x73\163\x61\147\x65"));
        goto e2F0l;
        jcw_P:
        SpjUe:
        goto wyy5G;
        lFfE9:
        $this->data["\x70\141\x73\x73\167\x6f\162\x64"] = ["\x6e\141\x6d\x65" => "\160\141\163\x73\x77\157\162\x64", "\x69\x64" => "\160\x61\163\163\x77\x6f\162\x64", "\164\x79\x70\x65" => "\160\x61\x73\x73\x77\x6f\x72\x64", "\166\141\x6c\x75\x65" => $this->form_validation->set_value("\x70\141\163\163\167\157\x72\144")];
        goto zdHLH;
        zxUxN:
        goto HCPih;
        goto TODFy;
        wEMVy:
        $password = $this->input->post("\160\141\163\x73\167\x6f\x72\144");
        goto uJYfN;
        MBLfn:
        redirect("\141\x75\x74\x68", "\x72\145\x66\162\145\163\x68");
        goto PCSiA;
        L1KJB:
        $tables = $this->config->item("\x74\x61\142\x6c\x65\163", "\x69\x6f\156\x5f\141\x75\164\150");
        goto hivMS;
        aEdoh:
        $this->data["\164\151\164\154\145"] = $this->lang->line("\x63\162\x65\x61\x74\145\x5f\165\163\x65\x72\x5f\150\x65\141\144\151\x6e\147");
        goto h8lXg;
        jj3Is:
        if ($identity_column !== "\145\x6d\x61\151\154") {
            goto s2YzR;
        }
        goto pdkQj;
        TODFy:
        s2YzR:
        goto n31NP;
        d9oTR:
        redirect("\x61\165\164\150", "\x72\145\x66\x72\x65\x73\x68");
        goto Uej3n;
        lxeDQ:
        $this->form_validation->set_rules("\154\x61\163\x74\x5f\x6e\x61\x6d\x65", $this->lang->line("\x63\162\145\x61\x74\145\137\x75\x73\145\162\x5f\x76\x61\x6c\x69\144\x61\x74\151\x6f\x6e\x5f\x6c\156\x61\x6d\145\137\x6c\x61\142\x65\x6c"), "\x74\162\x69\x6d\174\x72\x65\x71\x75\x69\x72\x65\x64");
        goto jj3Is;
        sgrCO:
        if (!($this->form_validation->run() === TRUE)) {
            goto MAodb;
        }
        goto zEouI;
        PCSiA:
        A2wvq:
        goto L1KJB;
        SPggU:
        HCPih:
        goto e4Rca;
        IM_6L:
        $this->form_validation->set_rules("\143\157\x6d\x70\141\x6e\171", $this->lang->line("\143\x72\x65\x61\x74\145\x5f\x75\x73\145\x72\x5f\166\141\x6c\151\x64\x61\x74\151\157\x6e\137\143\x6f\155\160\x61\156\x79\137\x6c\141\x62\145\154"), "\164\162\151\155");
        goto mJF5i;
        wWPGt:
        $this->data["\x69\x64\145\156\164\x69\164\x79\137\x63\157\154\x75\155\x6e"] = $identity_column;
        goto kacZN;
        wyy5G:
        $this->session->set_flashdata("\x6d\x65\x73\163\x61\x67\145", $this->ion_auth->messages());
        goto d9oTR;
        ZU7Ht:
        $this->_render_page("\141\x75\164\150" . DIRECTORY_SEPARATOR . "\x63\x72\x65\141\x74\145\137\x75\x73\x65\x72", $this->data);
        goto lhR2s;
        uJYfN:
        $additional_data = ["\146\151\x72\163\x74\137\x6e\x61\x6d\145" => $this->input->post("\146\x69\x72\163\x74\x5f\156\141\155\x65"), "\154\x61\163\x74\137\x6e\141\x6d\x65" => $this->input->post("\x6c\141\x73\164\137\156\x61\x6d\145"), "\143\157\155\160\x61\x6e\171" => $this->input->post("\x63\157\x6d\x70\141\x6e\x79"), "\x70\x68\157\156\145" => $this->input->post("\x70\150\x6f\156\x65")];
        goto OwX3n;
        zEouI:
        $email = strtolower($this->input->post("\x65\x6d\x61\x69\x6c"));
        goto b10cL;
        e2F0l:
        $this->data["\146\x69\x72\x73\x74\x5f\156\x61\155\x65"] = ["\156\x61\155\145" => "\x66\x69\x72\163\164\137\x6e\141\155\x65", "\151\144" => "\x66\x69\162\x73\164\x5f\x6e\x61\155\x65", "\x74\x79\160\145" => "\x74\145\170\164", "\166\x61\154\x75\145" => $this->form_validation->set_value("\146\151\162\163\x74\137\156\141\x6d\145")];
        goto DoQTz;
        lhR2s:
        goto lM7Ll;
        goto jcw_P;
        b10cL:
        $identity = $identity_column === "\x65\x6d\x61\151\154" ? $email : $this->input->post("\151\x64\145\x6e\x74\151\164\x79");
        goto wEMVy;
        hivMS:
        $identity_column = $this->config->item("\x69\144\145\156\164\x69\164\171", "\151\x6f\x6e\137\141\x75\x74\x68");
        goto wWPGt;
        e4Rca:
        $this->form_validation->set_rules("\160\150\157\156\x65", $this->lang->line("\x63\x72\145\x61\x74\x65\x5f\x75\163\x65\162\137\x76\141\154\x69\144\141\x74\x69\x6f\156\x5f\160\x68\157\156\x65\137\x6c\x61\x62\x65\154"), "\x74\x72\x69\155");
        goto IM_6L;
        kacZN:
        $this->form_validation->set_rules("\146\151\162\163\164\137\x6e\141\155\145", $this->lang->line("\x63\x72\145\x61\164\x65\137\165\x73\x65\162\137\166\141\154\151\144\x61\164\151\157\x6e\137\x66\x6e\x61\155\x65\x5f\x6c\x61\142\145\x6c"), "\164\x72\x69\x6d\174\162\x65\161\165\151\162\145\144");
        goto lxeDQ;
        OrnDp:
    }
    public function redirectUser()
    {
        goto csYga;
        Zg0H2:
        redirect("\x61\165\x74\150", "\x72\145\x66\x72\x65\x73\x68");
        goto Vx5Iq;
        Vx5Iq:
        fhTBJ:
        goto t4Vqw;
        csYga:
        if (!$this->ion_auth->is_admin()) {
            goto fhTBJ;
        }
        goto Zg0H2;
        t4Vqw:
        redirect("\57", "\162\x65\x66\x72\x65\163\x68");
        goto nIKb1;
        nIKb1:
    }
    public function edit_user($id)
    {
        goto ZE31C;
        dMbWY:
        if (!$this->input->post("\x70\x61\x73\163\167\157\x72\144")) {
            goto l7wwE;
        }
        goto HAZ6v;
        ajmHI:
        Dp4f6:
        goto KYAJO;
        nmA4C:
        if ($this->ion_auth->update($user->id, $data)) {
            goto EjWgk;
        }
        goto FC8iy;
        X2upP:
        $this->form_validation->set_rules("\160\141\x73\163\167\x6f\162\144\x5f\x63\157\156\146\x69\162\155", $this->lang->line("\x65\x64\x69\164\x5f\x75\x73\x65\162\x5f\166\x61\154\x69\x64\x61\x74\151\x6f\156\137\160\x61\x73\x73\x77\x6f\x72\x64\x5f\x63\x6f\x6e\146\x69\x72\x6d\x5f\x6c\141\x62\145\x6c"), "\162\145\161\x75\151\162\145\x64");
        goto qbAA3;
        TNAw7:
        $this->data["\x70\x61\163\x73\x77\x6f\x72\144"] = ["\x6e\141\155\x65" => "\x70\141\x73\x73\x77\x6f\x72\x64", "\x69\144" => "\x70\141\163\163\167\157\x72\x64", "\x74\x79\160\x65" => "\160\141\163\163\x77\x6f\x72\x64"];
        goto Nbmr3;
        e_Y1R:
        jjamG:
        goto nbMJM;
        FsmCp:
        $this->data["\143\163\162\x66"] = $this->_get_csrf_nonce();
        goto cgHq8;
        cgHq8:
        $this->data["\155\145\163\163\141\147\x65"] = validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata("\x6d\145\x73\163\x61\x67\145"));
        goto Q1I1U;
        t2IgA:
        $this->data["\154\x61\x73\164\x5f\156\141\155\145"] = ["\x6e\141\155\145" => "\154\x61\x73\x74\x5f\156\x61\x6d\x65", "\151\x64" => "\154\x61\x73\x74\137\x6e\x61\155\x65", "\164\171\160\145" => "\x74\145\x78\164", "\x76\x61\x6c\x75\145" => $this->form_validation->set_value("\x6c\x61\163\164\137\156\x61\155\x65", $user->last_name)];
        goto Y0a4y;
        ErlpX:
        KwUI5:
        goto LD6YC;
        qxYFi:
        foreach ($groupData as $grp) {
            $this->ion_auth->add_to_group($grp, $id);
            zQMPz:
        }
        goto Nnhsv;
        tzIOM:
        $this->form_validation->set_rules("\154\x61\163\x74\137\156\141\x6d\145", $this->lang->line("\145\144\x69\x74\137\165\x73\145\x72\x5f\166\x61\x6c\x69\144\141\164\x69\157\156\x5f\154\x6e\x61\155\145\137\x6c\x61\x62\145\x6c"), "\x74\162\x69\x6d\174\162\145\x71\165\151\x72\145\x64");
        goto PR5Xx;
        X1Em2:
        $this->_render_page("\141\165\x74\x68\57\x65\x64\151\x74\x5f\165\163\x65\162", $this->data);
        goto BHcur;
        BOb1O:
        $groups = $this->ion_auth->groups()->result_array();
        goto mWmeW;
        il1GW:
        EjWgk:
        goto p6TXK;
        eFQ4F:
        $this->data["\x63\165\162\x72\145\x6e\x74\x47\x72\x6f\165\x70\163"] = $currentGroups;
        goto mtpee;
        a_e7T:
        if (!$this->input->post("\160\x61\163\x73\x77\157\x72\144")) {
            goto zRNPh;
        }
        goto xWyhk;
        P82P4:
        $data = ["\x66\x69\x72\x73\164\x5f\156\x61\x6d\x65" => $this->input->post("\x66\151\x72\x73\164\x5f\x6e\141\155\145"), "\x6c\141\163\164\x5f\x6e\x61\x6d\145" => $this->input->post("\x6c\x61\163\164\x5f\156\141\155\x65"), "\143\157\x6d\160\141\x6e\171" => $this->input->post("\x63\157\155\160\x61\x6e\x79"), "\x70\x68\157\156\145" => $this->input->post("\160\x68\157\x6e\145")];
        goto dMbWY;
        spFl9:
        redirect("\141\165\x74\x68", "\x72\145\146\x72\145\163\x68");
        goto ErlpX;
        UM5Ni:
        show_error($this->lang->line("\x65\162\x72\x6f\x72\137\x63\x73\162\x66"));
        goto El5YP;
        VUEJ_:
        if (!(isset($groupData) && !empty($groupData))) {
            goto jjamG;
        }
        goto qxYFi;
        LKYgN:
        $groupData = $this->input->post("\x67\x72\157\165\160\x73");
        goto VUEJ_;
        Nnhsv:
        XeKQ5:
        goto e_Y1R;
        mWmeW:
        $currentGroups = $this->ion_auth->get_users_groups($id)->result();
        goto rdLu2;
        eAu8_:
        goto Dp4f6;
        goto il1GW;
        oCTQu:
        if (!($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post("\x69\144"))) {
            goto k3oBO;
        }
        goto UM5Ni;
        rdLu2:
        $this->form_validation->set_rules("\146\151\x72\x73\164\137\x6e\x61\x6d\145", $this->lang->line("\145\144\151\164\x5f\165\163\145\162\137\x76\x61\x6c\x69\x64\x61\x74\x69\157\x6e\x5f\x66\156\x61\x6d\x65\x5f\x6c\141\x62\145\154"), "\164\x72\151\155\x7c\162\x65\161\x75\151\162\x65\x64");
        goto tzIOM;
        yRX0p:
        l7wwE:
        goto EggdK;
        xWyhk:
        $this->form_validation->set_rules("\x70\141\x73\163\167\157\x72\144", $this->lang->line("\145\144\151\x74\x5f\165\163\145\162\x5f\x76\x61\154\x69\144\x61\x74\151\x6f\156\x5f\160\x61\x73\163\x77\157\x72\144\137\154\x61\x62\x65\154"), "\162\145\161\165\x69\162\x65\144\x7c\x6d\151\x6e\x5f\x6c\145\x6e\x67\164\150\133" . $this->config->item("\x6d\x69\156\137\160\x61\163\163\x77\157\162\144\137\x6c\x65\x6e\x67\x74\x68", "\x69\157\x6e\137\141\x75\x74\150") . "\x5d\x7c\x6d\141\164\143\x68\x65\x73\x5b\x70\x61\x73\163\x77\x6f\162\x64\x5f\143\157\x6e\146\x69\162\155\135");
        goto X2upP;
        Hr3La:
        $this->form_validation->set_rules("\x63\157\x6d\160\x61\156\x79", $this->lang->line("\145\x64\151\164\x5f\x75\x73\145\162\137\x76\141\154\151\x64\141\x74\151\157\x6e\x5f\143\x6f\155\160\141\156\x79\x5f\154\141\x62\145\x6c"), "\164\x72\151\155");
        goto fMGiz;
        EggdK:
        if (!$this->ion_auth->is_admin()) {
            goto ffTQX;
        }
        goto Axicu;
        JV9DZ:
        $this->data["\160\150\x6f\156\x65"] = ["\x6e\141\x6d\x65" => "\x70\150\x6f\156\x65", "\151\144" => "\x70\150\157\x6e\145", "\x74\171\x70\145" => "\x74\x65\x78\x74", "\166\141\x6c\x75\x65" => $this->form_validation->set_value("\160\x68\157\x6e\145", $user->phone)];
        goto TNAw7;
        Nbmr3:
        $this->data["\x70\141\163\163\167\x6f\x72\144\x5f\143\x6f\x6e\146\x69\x72\155"] = ["\x6e\x61\x6d\x65" => "\x70\141\x73\163\167\157\162\x64\137\x63\x6f\x6e\x66\151\162\x6d", "\x69\x64" => "\160\141\163\163\167\x6f\x72\x64\x5f\143\157\156\146\x69\162\155", "\164\171\x70\x65" => "\160\x61\x73\163\x77\x6f\162\x64"];
        goto X1Em2;
        Axicu:
        $this->ion_auth->remove_from_group('', $id);
        goto LKYgN;
        HAZ6v:
        $data["\x70\x61\x73\163\x77\157\x72\x64"] = $this->input->post("\x70\x61\x73\163\x77\157\162\x64");
        goto yRX0p;
        Q1I1U:
        $this->data["\165\x73\145\162"] = $user;
        goto il4qK;
        fMGiz:
        if (!(isset($_POST) && !empty($_POST))) {
            goto rfq47;
        }
        goto oCTQu;
        BcdU2:
        rfq47:
        goto FsmCp;
        Y0a4y:
        $this->data["\143\x6f\155\x70\x61\156\171"] = ["\x6e\141\155\145" => "\x63\157\x6d\160\141\156\171", "\x69\144" => "\x63\x6f\x6d\x70\x61\x6e\171", "\164\x79\160\145" => "\164\145\170\x74", "\166\141\154\165\x65" => $this->form_validation->set_value("\x63\x6f\155\160\141\156\171", $user->company)];
        goto JV9DZ;
        KYAJO:
        GC_op:
        goto BcdU2;
        FC8iy:
        $this->session->set_flashdata("\x6d\x65\163\163\x61\x67\145", $this->ion_auth->errors());
        goto HSHDg;
        El5YP:
        k3oBO:
        goto a_e7T;
        SPdEl:
        if (!($this->form_validation->run() === TRUE)) {
            goto GC_op;
        }
        goto P82P4;
        qbAA3:
        zRNPh:
        goto SPdEl;
        p6TXK:
        $this->session->set_flashdata("\x6d\x65\x73\163\x61\x67\x65", $this->ion_auth->messages());
        goto ZqEMI;
        ZE31C:
        $this->data["\164\x69\164\154\145"] = $this->lang->line("\145\x64\151\164\x5f\165\163\x65\162\137\x68\x65\x61\144\x69\x6e\147");
        goto E5Cqh;
        nbMJM:
        ffTQX:
        goto nmA4C;
        PR5Xx:
        $this->form_validation->set_rules("\x70\150\157\x6e\x65", $this->lang->line("\145\x64\151\x74\x5f\x75\163\145\162\137\166\141\154\151\144\141\164\151\x6f\156\137\x70\x68\x6f\x6e\145\137\154\141\142\x65\x6c"), "\x74\x72\x69\x6d");
        goto Hr3La;
        LD6YC:
        $user = $this->ion_auth->user($id)->row();
        goto BOb1O;
        ZqEMI:
        $this->redirectUser();
        goto ajmHI;
        HSHDg:
        $this->redirectUser();
        goto eAu8_;
        E5Cqh:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id))) {
            goto KwUI5;
        }
        goto spFl9;
        il4qK:
        $this->data["\147\162\x6f\165\160\x73"] = $groups;
        goto eFQ4F;
        mtpee:
        $this->data["\x66\x69\x72\163\164\x5f\156\x61\155\145"] = ["\x6e\141\x6d\x65" => "\x66\x69\162\163\x74\x5f\156\141\155\145", "\x69\144" => "\146\x69\162\x73\x74\137\156\x61\x6d\145", "\164\171\160\x65" => "\x74\x65\x78\164", "\x76\141\154\165\145" => $this->form_validation->set_value("\146\x69\162\x73\x74\137\156\141\x6d\145", $user->first_name)];
        goto t2IgA;
        BHcur:
    }
    public function create_group()
    {
        goto Q2yE1;
        LVcYo:
        $this->session->set_flashdata("\155\145\x73\163\x61\147\x65", $this->ion_auth->errors());
        goto K7_5N;
        hB3pV:
        Tvs7k:
        goto VQ6Yf;
        kh1h5:
        $this->_render_page("\141\x75\x74\150\57\143\162\145\x61\164\145\x5f\147\x72\157\x75\x70", $this->data);
        goto a78ZR;
        lc6RA:
        $this->data["\144\x65\x73\143\162\151\x70\x74\151\x6f\x6e"] = ["\156\x61\155\145" => "\144\x65\x73\x63\162\151\160\x74\151\x6f\x6e", "\151\x64" => "\x64\145\x73\x63\162\151\x70\x74\x69\157\x6e", "\x74\171\x70\145" => "\x74\x65\170\x74", "\166\x61\x6c\x75\x65" => $this->form_validation->set_value("\x64\145\x73\143\x72\x69\x70\x74\x69\x6f\x6e")];
        goto kh1h5;
        rEyA6:
        $this->form_validation->set_rules("\147\x72\157\x75\x70\137\x6e\141\x6d\145", $this->lang->line("\x63\162\145\141\x74\145\x5f\x67\162\157\x75\x70\137\166\x61\x6c\x69\x64\x61\x74\x69\x6f\x6e\x5f\x6e\x61\x6d\x65\x5f\154\141\x62\145\x6c"), "\x74\x72\151\x6d\174\x72\145\161\165\151\x72\145\x64\x7c\x61\154\x70\x68\141\137\x64\x61\x73\x68");
        goto t8pZq;
        VQ6Yf:
        $this->data["\155\x65\x73\x73\x61\147\145"] = validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata("\x6d\x65\x73\x73\x61\x67\145"));
        goto Lu_3n;
        wEIvz:
        redirect("\141\x75\164\150", "\162\145\146\162\x65\163\150");
        goto kRSs2;
        iR0XZ:
        Bs0c2:
        goto d5jQQ;
        JuYk9:
        Zc9oa:
        goto rEyA6;
        Q2yE1:
        $this->data["\x74\151\x74\x6c\x65"] = $this->lang->line("\143\x72\x65\141\164\x65\137\147\x72\x6f\x75\x70\x5f\164\151\x74\x6c\x65");
        goto JrVmu;
        JrVmu:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())) {
            goto Zc9oa;
        }
        goto RFjJa;
        K7_5N:
        goto ki7Ub;
        goto iR0XZ;
        i5UxX:
        if ($new_group_id) {
            goto Bs0c2;
        }
        goto LVcYo;
        d5jQQ:
        $this->session->set_flashdata("\155\x65\x73\163\x61\x67\145", $this->ion_auth->messages());
        goto wEIvz;
        RFjJa:
        redirect("\141\x75\164\150", "\x72\x65\146\162\x65\163\x68");
        goto JuYk9;
        kRSs2:
        ki7Ub:
        goto hB3pV;
        QhaGd:
        $new_group_id = $this->ion_auth->create_group($this->input->post("\x67\162\x6f\165\x70\x5f\156\141\155\145"), $this->input->post("\x64\x65\163\143\162\x69\x70\x74\151\x6f\156"));
        goto i5UxX;
        Lu_3n:
        $this->data["\147\x72\x6f\165\x70\137\x6e\x61\x6d\145"] = ["\x6e\141\x6d\145" => "\x67\x72\x6f\165\160\137\156\141\x6d\x65", "\151\144" => "\x67\x72\157\165\160\x5f\156\141\155\145", "\x74\x79\160\x65" => "\164\x65\x78\164", "\166\x61\154\x75\x65" => $this->form_validation->set_value("\x67\162\157\165\x70\x5f\156\141\x6d\145")];
        goto lc6RA;
        t8pZq:
        if (!($this->form_validation->run() === TRUE)) {
            goto Tvs7k;
        }
        goto QhaGd;
        a78ZR:
    }
    public function edit_group($id)
    {
        goto Wnm9n;
        daG0L:
        redirect("\141\x75\x74\x68", "\162\145\146\x72\145\163\x68");
        goto quDr8;
        zZcv5:
        if ($group_update) {
            goto Wv3R6;
        }
        goto Ac23v;
        e4zju:
        $this->_render_page("\141\x75\x74\x68" . DIRECTORY_SEPARATOR . "\145\x64\x69\x74\x5f\x67\162\x6f\165\x70", $this->data);
        goto xPjV6;
        GvrzD:
        $this->form_validation->set_rules("\x67\162\157\x75\x70\137\156\x61\155\x65", $this->lang->line("\x65\x64\x69\x74\x5f\147\162\x6f\x75\160\x5f\x76\141\154\x69\144\141\x74\151\157\x6e\x5f\156\x61\155\145\137\154\141\142\145\154"), "\164\162\x69\x6d\174\162\145\x71\165\x69\162\x65\x64\x7c\141\154\160\x68\x61\137\x64\x61\163\x68");
        goto wgcyD;
        CJsFk:
        redirect("\x61\165\x74\x68", "\x72\x65\x66\x72\145\163\x68");
        goto R_abl;
        wgcyD:
        if (!(isset($_POST) && !empty($_POST))) {
            goto l7TWb;
        }
        goto Rr5E9;
        Rr5E9:
        if (!($this->form_validation->run() === TRUE)) {
            goto JYMWt;
        }
        goto AqxCm;
        ADKK2:
        $this->data["\147\x72\157\x75\160\x5f\x6e\141\155\145"] = ["\156\x61\155\145" => "\147\x72\x6f\x75\x70\x5f\156\x61\155\145", "\151\144" => "\x67\162\157\165\160\137\x6e\x61\155\x65", "\x74\171\160\145" => "\x74\145\x78\x74", "\x76\x61\x6c\x75\145" => $this->form_validation->set_value("\x67\x72\x6f\165\x70\137\156\x61\x6d\145", $group->name)];
        goto EPYk8;
        R_abl:
        c0USm:
        goto hszof;
        zBBXy:
        $this->data["\x74\151\164\x6c\x65"] = $this->lang->line("\145\x64\x69\164\137\147\x72\x6f\x75\x70\137\x74\x69\164\154\145");
        goto Ejzos;
        fib2y:
        $this->data["\155\x65\163\x73\x61\x67\145"] = validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata("\155\145\x73\163\141\x67\145"));
        goto rhQEE;
        v8xwt:
        $this->data["\147\x72\157\165\x70\137\x6e\141\155\145"]["\162\145\x61\144\x6f\x6e\x6c\x79"] = "\x72\x65\141\144\157\156\154\171";
        goto HYHPt;
        mNo0p:
        $this->data["\147\x72\157\165\160\x5f\144\x65\163\x63\162\151\x70\x74\x69\x6f\x6e"] = ["\x6e\x61\x6d\145" => "\147\x72\x6f\165\x70\137\144\x65\x73\143\162\151\x70\164\151\157\x6e", "\x69\144" => "\x67\162\157\165\x70\x5f\144\145\x73\x63\162\151\160\x74\151\157\156", "\164\171\x70\145" => "\x74\145\x78\164", "\x76\x61\154\x75\x65" => $this->form_validation->set_value("\147\x72\x6f\x75\160\x5f\x64\x65\x73\143\x72\151\160\x74\151\x6f\x6e", $group->description)];
        goto e4zju;
        pnbjO:
        $this->session->set_flashdata("\x6d\x65\163\x73\x61\x67\x65", $this->lang->line("\145\144\151\164\x5f\147\x72\x6f\165\x70\137\163\x61\166\x65\144"));
        goto CJsFk;
        Ejzos:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())) {
            goto lymqF;
        }
        goto daG0L;
        G1sNx:
        l7TWb:
        goto fib2y;
        UHaJP:
        iFfaJ:
        goto zBBXy;
        hszof:
        JYMWt:
        goto G1sNx;
        Wnm9n:
        if (!(!$id || empty($id))) {
            goto iFfaJ;
        }
        goto sKtQ4;
        quDr8:
        lymqF:
        goto UEIM_;
        rhQEE:
        $this->data["\147\x72\157\165\x70"] = $group;
        goto ADKK2;
        AqxCm:
        $group_update = $this->ion_auth->update_group($id, $_POST["\x67\x72\x6f\x75\160\x5f\156\x61\155\x65"], array("\x64\145\163\143\162\151\160\x74\151\x6f\x6e" => $_POST["\x67\162\157\165\160\x5f\144\x65\163\143\162\151\160\x74\x69\157\156"]));
        goto zZcv5;
        r7boO:
        goto c0USm;
        goto jbi87;
        UEIM_:
        $group = $this->ion_auth->group($id)->row();
        goto GvrzD;
        sKtQ4:
        redirect("\x61\x75\x74\x68", "\162\x65\x66\162\x65\163\150");
        goto UHaJP;
        EPYk8:
        if (!($this->config->item("\x61\x64\155\151\156\137\147\x72\157\165\x70", "\x69\157\156\137\141\x75\164\150") === $group->name)) {
            goto k_OUK;
        }
        goto v8xwt;
        jbi87:
        Wv3R6:
        goto pnbjO;
        Ac23v:
        $this->session->set_flashdata("\x6d\145\163\163\x61\147\x65", $this->ion_auth->errors());
        goto r7boO;
        HYHPt:
        k_OUK:
        goto mNo0p;
        xPjV6:
    }
    public function _get_csrf_nonce()
    {
        goto advYR;
        DIpbE:
        $this->session->set_flashdata("\143\163\162\x66\153\x65\x79", $key);
        goto imq5_;
        imq5_:
        $this->session->set_flashdata("\x63\x73\x72\146\x76\x61\x6c\x75\145", $value);
        goto JXQ4D;
        SVoWE:
        $value = random_string("\x61\154\156\x75\x6d", 20);
        goto DIpbE;
        hZVXr:
        $key = random_string("\x61\154\x6e\x75\x6d", 8);
        goto SVoWE;
        advYR:
        $this->load->helper("\x73\164\162\151\x6e\x67");
        goto hZVXr;
        JXQ4D:
        return [$key => $value];
        goto BzzmS;
        BzzmS:
    }
    public function _valid_csrf_nonce()
    {
        goto t0l9M;
        ks0u2:
        return TRUE;
        goto qaCm4;
        qaCm4:
        OAJq0:
        goto QGW_8;
        Rz3zM:
        if (!($csrfkey && $csrfkey === $this->session->flashdata("\143\163\x72\x66\166\141\154\x75\x65"))) {
            goto OAJq0;
        }
        goto ks0u2;
        QGW_8:
        return FALSE;
        goto j2GD7;
        t0l9M:
        $csrfkey = $this->input->post($this->session->flashdata("\x63\163\x72\146\153\x65\171"));
        goto Rz3zM;
        j2GD7:
    }
    public function _render_page($view, $data = NULL, $returnhtml = FALSE)
    {
        goto nAtnE;
        N0GWu:
        akist:
        goto q6hE6;
        WiI_8:
        $view_html = $this->load->view($view, $viewdata, $returnhtml);
        goto Isqt8;
        LW5P6:
        return $view_html;
        goto N0GWu;
        nAtnE:
        $viewdata = empty($data) ? $this->data : $data;
        goto WiI_8;
        Isqt8:
        if (!$returnhtml) {
            goto akist;
        }
        goto LW5P6;
        q6hE6:
    }


}
