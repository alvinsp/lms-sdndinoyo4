<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\x41\x53\105\x50\101\x54\110") or exit("\x4e\x6f\40\x64\x69\162\x65\x63\x74\x20\163\x63\x72\x69\x70\164\x20\141\x63\x63\x65\163\163\40\x61\x6c\154\x6f\x77\x65\144");
class Datakelas extends CI_Controller
{
    public function __construct()
    {
        goto TBOhq;
        Ko8Fr:
        show_error("\110\x61\x6e\171\x61\40\x41\x64\155\151\x6e\151\163\x74\x72\x61\x74\157\x72\40\171\141\156\x67\x20\144\151\142\x65\x72\x69\40\150\141\x6b\40\165\156\164\x75\153\x20\155\x65\156\147\x61\153\163\x65\x73\40\150\x61\x6c\x61\x6d\141\156\x20\151\x6e\x69\54\x20\x3c\141\x20\x68\x72\145\x66\75\42" . base_url("\x64\141\163\x68\142\x6f\141\x72\144") . "\x22\x3e\113\145\x6d\142\x61\x6c\x69\40\153\145\40\x6d\145\156\165\40\x61\x77\141\154\x3c\x2f\141\76", 403, "\x41\x6b\163\145\x73\x20\124\145\x72\x6c\x61\x72\141\156\147");
        goto KHfXW;
        W3e3s:
        if (!$this->ion_auth->logged_in()) {
            goto VEHlK;
        }
        goto omM_T;
        EctXX:
        $this->load->model("\104\x72\157\x70\144\157\167\156\137\x6d\x6f\144\x65\154", "\x64\x72\x6f\x70\x64\x6f\167\156");
        goto j8AUN;
        QxbQu:
        Z1bn3:
        goto fhKWP;
        uh_Y7:
        VEHlK:
        goto JfA6r;
        VlQfm:
        $this->form_validation->set_error_delimiters('', '');
        goto g4zty;
        rYROm:
        goto Z1bn3;
        goto uh_Y7;
        j8AUN:
        $this->load->model("\x52\141\x70\157\162\137\x6d\x6f\x64\x65\x6c", "\x72\x61\x70\157\x72");
        goto VlQfm;
        KHfXW:
        Oxb6l:
        goto rYROm;
        fhKWP:
        $this->load->library(["\144\141\164\x61\x74\x61\142\154\x65\163", "\x66\x6f\x72\155\x5f\x76\x61\154\x69\x64\141\164\x69\157\156"]);
        goto pkQp8;
        omM_T:
        if ($this->ion_auth->is_admin()) {
            goto Oxb6l;
        }
        goto Ko8Fr;
        WMzVD:
        $this->load->model("\115\141\x73\x74\x65\162\137\x6d\x6f\x64\145\x6c", "\155\141\163\164\145\x72");
        goto EctXX;
        pkQp8:
        $this->load->model("\x4b\145\x6c\141\x73\137\155\157\144\x65\x6c", "\153\x65\154\141\x73");
        goto qvlh0;
        qvlh0:
        $this->load->model("\104\x61\163\x68\142\x6f\x61\162\144\137\x6d\x6f\x64\x65\x6c", "\x64\x61\163\x68\142\x6f\x61\x72\x64");
        goto WMzVD;
        JfA6r:
        redirect("\141\165\x74\150");
        goto QxbQu;
        TBOhq:
        parent::__construct();
        goto W3e3s;
        g4zty:
    }
    public function output_json($data, $encode = true)
    {
        goto SI4lJ;
        rKs9K:
        $data = json_encode($data);
        goto kR32A;
        SI4lJ:
        if (!$encode) {
            goto u3Iz3;
        }
        goto rKs9K;
        kR32A:
        u3Iz3:
        goto xpQuZ;
        xpQuZ:
        $this->output->set_content_type("\141\x70\160\154\x69\x63\x61\x74\151\157\156\x2f\152\x73\x6f\x6e")->set_output($data);
        goto yPf3b;
        yPf3b:
    }
    public function index()
    {
        goto ypC1P;
        RpE8a:
        $data["\160\x72\x6f\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto SGZ5o;
        b5Bs3:
        $data = ["\165\x73\145\x72" => $user, "\152\165\x64\165\x6c" => "\x4b\145\154\141\163", "\163\x75\x62\152\x75\x64\x75\x6c" => "\104\141\x74\141\x20\113\145\x6c\x61\163", "\163\x65\164\x74\151\x6e\x67" => $setting];
        goto DXmsj;
        f3uyL:
        $kelas_lama = $this->kelas->getKelasList($tp->id_tp - 1, "\62");
        goto z7RDn;
        RP8dD:
        if (!($chek > 0)) {
            goto XFsAi;
        }
        goto o0x67;
        QFRFB:
        $data["\164\x70\137\x61\x63\x74\x69\166\145"] = $tp;
        goto Gk4k7;
        Lz2VC:
        $this->load->view("\x5f\x74\145\x6d\160\154\141\x74\x65\163\x2f\144\141\163\x68\x62\x6f\141\x72\x64\x2f\x5f\x66\x6f\157\x74\x65\162");
        goto BkBX4;
        jhRqB:
        $kelas = [];
        goto ovPQy;
        tgyR9:
        $data["\x6b\x65\x6c\x61\163\x5f\154\141\x6d\141"] = $kelas_lama;
        goto nkljq;
        YEKQP:
        $smt = $this->dashboard->getSemesterActive();
        goto hIQAQ;
        RUtKL:
        $data["\x73\151\163\x77\x61"] = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt);
        goto tnOm3;
        o0x67:
        $kelas = $this->kelas->getKelasList($tp->id_tp, $smt->id_smt);
        goto f3uyL;
        ovPQy:
        $kelas_lama = [];
        goto RP8dD;
        z7RDn:
        XFsAi:
        goto XpYwg;
        XpYwg:
        $data["\153\x65\154\141\163"] = $kelas;
        goto tgyR9;
        tnOm3:
        $this->load->view("\x5f\x74\145\x6d\x70\154\141\164\145\x73\57\144\141\163\x68\x62\x6f\x61\x72\x64\x2f\x5f\150\145\x61\144\x65\x72", $data);
        goto NACPx;
        Gk4k7:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto t4dzt;
        GRBjV:
        $data["\154\145\166\x65\154"] = $this->kelas->getLevel($setting->jenjang);
        goto SC6fw;
        NACPx:
        $this->load->view("\155\x61\163\164\145\x72\57\x6b\x65\154\x61\x73\x2f\144\141\x74\x61");
        goto Lz2VC;
        SC6fw:
        $data["\x67\165\x72\x75"] = $this->kelas->get_guru();
        goto RUtKL;
        DXmsj:
        $tp = $this->dashboard->getTahunActive();
        goto YEKQP;
        ypC1P:
        $user = $this->ion_auth->user()->row();
        goto EhEWr;
        hIQAQ:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto QFRFB;
        nkljq:
        $data["\152\165\x72\x75\x73\x61\x6e"] = $this->kelas->get_jurusan();
        goto GRBjV;
        SGZ5o:
        $chek = $this->kelas->count_all();
        goto jhRqB;
        EhEWr:
        $setting = $this->dashboard->getSetting();
        goto b5Bs3;
        t4dzt:
        $data["\163\x6d\164\x5f\141\143\164\151\166\x65"] = $smt;
        goto RpE8a;
        BkBX4:
    }
    public function detail($id)
    {
        goto ek9F7;
        hRuZe:
        $data["\x74\160\137\x61\143\164\x69\x76\x65"] = $tp;
        goto znzxz;
        UDJxS:
        $this->load->view("\155\x61\163\x74\x65\x72\x2f\x6b\x65\x6c\141\163\x2f\144\145\x74\141\x69\x6c");
        goto HOo8z;
        HOo8z:
        $this->load->view("\x5f\164\x65\155\x70\x6c\141\164\145\163\x2f\144\x61\163\x68\142\157\141\x72\144\57\x5f\146\157\157\x74\145\x72");
        goto PAz03;
        l0YDZ:
        GoHuK:
        goto xfDq1;
        R0O66:
        $data["\147\165\162\165"] = $this->kelas->get_guru();
        goto DHxVq;
        VxHJY:
        $this->load->view("\x5f\x74\x65\x6d\160\x6c\x61\x74\x65\163\x2f\144\141\163\150\142\157\141\x72\x64\57\137\x68\x65\x61\144\145\x72", $data);
        goto UDJxS;
        TrEBI:
        if ($struktur == null) {
            goto GoHuK;
        }
        goto mMHuq;
        X7di3:
        $data["\153\145\x6c\141\163"] = $this->kelas->get_one($id);
        goto bjdJi;
        vVdGd:
        $data["\160\x72\157\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto X7di3;
        glNIu:
        $data["\154\145\x76\145\x6c"] = $this->kelas->getLevel($setting->jenjang);
        goto R0O66;
        EIMeG:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto hRuZe;
        znzxz:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto kV7mG;
        nyF_x:
        qKy_K:
        goto VxHJY;
        EY1aI:
        $setting = $this->dashboard->getSetting();
        goto dTYW7;
        xfDq1:
        $data["\163\164\x72\165\x6b\164\165\x72"] = json_decode(json_encode($this->kelas->dummyStruktur()));
        goto nyF_x;
        kV7mG:
        $data["\163\x6d\164\x5f\x61\143\x74\151\x76\145"] = $smt;
        goto vVdGd;
        dTYW7:
        $data = ["\x75\x73\145\162" => $user, "\x6a\165\x64\165\x6c" => "\104\x65\x74\x61\x69\154\x20\x4b\145\x6c\x61\x73", "\x73\x75\x62\x6a\165\x64\x75\154" => "\104\145\164\x61\x69\154\x20\x4b\145\x6c\x61\163", "\x73\145\x74\x74\151\x6e\147" => $setting];
        goto DaZgl;
        ek9F7:
        $user = $this->ion_auth->user()->row();
        goto EY1aI;
        Tfarx:
        $smt = $this->dashboard->getSemesterActive();
        goto EIMeG;
        Azs4A:
        goto qKy_K;
        goto l0YDZ;
        bjdJi:
        $data["\x6a\x75\x72\165\163\x61\x6e"] = $this->kelas->get_jurusan();
        goto glNIu;
        DHxVq:
        $data["\x73\x69\163\167\x61\x73"] = $this->kelas->get_siswa_kelas($id, $tp->id_tp, $smt->id_smt);
        goto cxSmf;
        DaZgl:
        $tp = $this->dashboard->getTahunActive();
        goto Tfarx;
        cxSmf:
        $struktur = $this->kelas->getStrukturKelas($id);
        goto TrEBI;
        mMHuq:
        $data["\x73\164\162\x75\153\x74\165\162"] = $struktur;
        goto Azs4A;
        PAz03:
    }
    public function add()
    {
        goto ZW7NQ;
        CIr5s:
        $data["\160\x72\x6f\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto fAXZO;
        Krw2S:
        $this->load->view("\137\x74\x65\155\160\154\x61\x74\145\163\57\144\x61\163\x68\142\157\141\162\144\x2f\x5f\150\145\x61\144\145\x72", $data);
        goto d2yGU;
        fAXZO:
        $data["\x6b\x65\x6c\x61\x73"] = json_decode(json_encode($this->kelas->dummy()));
        goto d6cnY;
        hLBJ2:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto EoVj_;
        d2yGU:
        $this->load->view("\155\141\163\164\x65\x72\x2f\x6b\x65\154\141\x73\x2f\x61\x64\144");
        goto SEkGN;
        V5sPr:
        $data["\x73\155\x74\x5f\x61\x63\164\151\166\x65"] = $smt;
        goto CIr5s;
        IYrSr:
        $data["\163\151\163\x77\x61\153\x65\x6c\x61\x73"] = array();
        goto Krw2S;
        ZW7NQ:
        $user = $this->ion_auth->user()->row();
        goto B1BOp;
        B1BOp:
        $setting = $this->dashboard->getSetting();
        goto bUEj7;
        dPHnk:
        $smt = $this->dashboard->getSemesterActive();
        goto hLBJ2;
        cUZ_P:
        $data["\x73\x69\163\x77\x61"] = $siswa;
        goto IYrSr;
        bUEj7:
        $data = ["\x75\163\x65\162" => $user, "\152\x75\x64\x75\x6c" => "\113\x65\x6c\x61\163", "\163\x75\142\x6a\165\144\x75\x6c" => "\x54\141\155\x62\141\150\x20\x4b\x65\154\141\x73", "\x73\x65\164\x74\x69\x6e\x67" => $setting];
        goto tLsZt;
        T7FWp:
        $siswa = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt);
        goto cUZ_P;
        Ztfqo:
        $data["\x67\x75\x72\x75"] = $this->kelas->get_guru();
        goto T7FWp;
        T8mSm:
        $data["\x6c\x65\x76\x65\154"] = $this->kelas->getLevel($setting->jenjang);
        goto Ztfqo;
        SEkGN:
        $this->load->view("\x5f\x74\x65\155\x70\154\141\164\145\x73\57\144\141\163\150\142\157\x61\x72\x64\57\137\146\157\157\164\x65\162");
        goto ii9Ye;
        tLsZt:
        $tp = $this->dashboard->getTahunActive();
        goto dPHnk;
        EoVj_:
        $data["\164\x70\137\x61\x63\x74\151\166\145"] = $tp;
        goto xAGbL;
        xAGbL:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto V5sPr;
        d6cnY:
        $data["\152\165\162\165\163\x61\x6e"] = $this->kelas->get_jurusan();
        goto T8mSm;
        ii9Ye:
    }
    public function edit($id = '')
    {
        goto hSOTf;
        P46Yp:
        $this->load->view("\x6d\141\x73\x74\x65\x72\57\153\145\x6c\x61\x73\x2f\141\x64\144");
        goto h27fm;
        KKfgU:
        $data["\163\x69\x73\x77\x61\x6b\x65\x6c\141\163"] = $this->kelas->get_siswa_kelas($id, $tp->id_tp, $smt->id_smt);
        goto n5SlN;
        c8MY8:
        $data["\x6c\145\x76\x65\154"] = $this->kelas->getLevel($setting->jenjang);
        goto H03Aw;
        WTdec:
        $data = ["\x75\x73\x65\162" => $user, "\152\x75\144\165\154" => "\113\x65\154\x61\x73", "\x73\165\x62\x6a\x75\144\165\154" => "\105\x64\151\x74\40\x4b\145\154\x61\x73", "\x73\x65\164\164\x69\x6e\147" => $setting];
        goto aNgnk;
        FW9F7:
        $data["\x73\x6d\164\137\141\x63\x74\151\166\145"] = $smt;
        goto XmT5P;
        h27fm:
        $this->load->view("\137\x74\x65\155\160\154\x61\164\145\x73\57\x64\x61\163\x68\142\157\141\x72\x64\57\137\x66\x6f\x6f\x74\145\x72");
        goto nZ5Z3;
        jIfZN:
        $data["\153\145\154\141\163"] = $this->kelas->get_one($id);
        goto m9sXy;
        hSOTf:
        $user = $this->ion_auth->user()->row();
        goto Mk3p0;
        m9sXy:
        $data["\x6a\x75\162\165\163\141\156"] = $this->kelas->get_jurusan();
        goto c8MY8;
        YWWHG:
        $data["\x73\x69\x73\167\141"] = $this->kelas->getAllSiswa($tp->id_tp, $smt->id_smt);
        goto KKfgU;
        H03Aw:
        $data["\147\165\162\165"] = $this->kelas->getWaliKelas($tp->id_tp, $smt->id_smt);
        goto YWWHG;
        aNgnk:
        $tp = $this->dashboard->getTahunActive();
        goto fRJa9;
        C3rKf:
        $data["\151\144\137\x6b\145\154\141\163"] = $id;
        goto jIfZN;
        Mk3p0:
        $setting = $this->dashboard->getSetting();
        goto WTdec;
        gfq5D:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto FW9F7;
        XmT5P:
        $data["\160\x72\157\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto C3rKf;
        ZIQfM:
        $data["\x74\x70\x5f\x61\143\164\x69\x76\x65"] = $tp;
        goto gfq5D;
        n5SlN:
        $this->load->view("\x5f\x74\145\155\160\154\141\164\x65\163\x2f\144\141\163\x68\x62\x6f\141\162\144\x2f\137\x68\x65\x61\144\x65\162", $data);
        goto P46Yp;
        fRJa9:
        $smt = $this->dashboard->getSemesterActive();
        goto fTG4b;
        fTG4b:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto ZIQfM;
        nZ5Z3:
    }
    public function save()
    {
        goto zPc0B;
        RF6kg:
        $this->form_validation->set_rules($config);
        goto rcvVX;
        UygWA:
        if (isset($insert[$id_tp . $id_smt . $idsiswa])) {
            goto Lola0;
        }
        goto lmtwu;
        ETKNk:
        foreach ($insert as $ins) {
            goto kb9O_;
            ak4xe:
            $siswa_inserted++;
            goto RB1XJ;
            kb9O_:
            if (!$this->db->replace("\x6b\x65\154\x61\x73\x5f\x73\x69\x73\x77\x61", $ins)) {
                goto r17oA;
            }
            goto ak4xe;
            R2_Uk:
            fMBSH:
            goto yVft5;
            RB1XJ:
            r17oA:
            goto R2_Uk;
            yVft5:
        }
        goto TrxYD;
        zb0WZ:
        $siswa_inserted = 0;
        goto zuTFM;
        C39EH:
        goto yWQWZ;
        goto IkCIE;
        PfAfk:
        if (!(count($siswa_kelas) > 0)) {
            goto ZTP2H;
        }
        goto y7zcb;
        TaS4r:
        $insert = [];
        goto GvA3k;
        a1kTO:
        fvqrF:
        goto A7x_K;
        YZb4C:
        goto HZcs3;
        goto V5JVC;
        JHb_n:
        $data["\x69\156\163\x65\162\164"] = $insert;
        goto iPNhw;
        OMexh:
        goto r4AU6;
        goto a1kTO;
        uYkpK:
        $id_new = $this->db->insert_id();
        goto GMYGU;
        aMeVW:
        WH75j:
        goto agR3F;
        y6LYs:
        $status = $this->db->update("\x6d\141\163\x74\x65\x72\x5f\153\x65\154\141\x73", $insert);
        goto EeU41;
        Yn0QO:
        $new_id_kelas = $id != null && $id != '' ? $id : $id_new;
        goto dSXf_;
        MDurR:
        $siswakelas = [];
        goto celPY;
        YD1Bs:
        $this->output_json($data);
        goto JRCMV;
        m3Egs:
        ZTP2H:
        goto pinVH;
        gNq5U:
        if (!$updated) {
            goto Sqg6C;
        }
        goto TaS4r;
        Jr_gN:
        $data["\x73\x74\x61\x74\x75\x73"] = $status;
        goto YD1Bs;
        a1sSk:
        goto CC_cR;
        goto ZvTfm;
        DvQpT:
        $i++;
        goto a1sSk;
        TrxYD:
        jCZpR:
        goto JHb_n;
        GvA3k:
        if (!($id != null && $id != '')) {
            goto y9k5J;
        }
        goto lvGXP;
        V3eh1:
        ScAhr:
        goto UTryq;
        GCzlZ:
        nCHSu:
        goto xtKpg;
        j2Kt4:
        $id_new = null;
        goto IlYtf;
        fWj3B:
        $idsiswa = isset($siswas[$i]) ? $siswas[$i] : null;
        goto Yn0QO;
        LXrd_:
        $id_smt = $this->master->getSemesterActive()->id_smt;
        goto EJbuS;
        xtKpg:
        $data["\x73\x69\x73\x77\x61"] = $siswa_inserted;
        goto Xljkx;
        nMsY2:
        if (!($id_siswa != null)) {
            goto osDeF;
        }
        goto yA_Eb;
        BPmKw:
        if (!($i <= count($siswas))) {
            goto Yks5F;
        }
        goto fWj3B;
        hqGji:
        goto jBhrM;
        goto bDqoO;
        q_eji:
        $guru_id = strip_tags($this->input->post("\x67\165\162\x75\x5f\151\x64", TRUE));
        goto eTtXy;
        LwW6K:
        AFzw7:
        goto aCbep;
        celPY:
        $i = 0;
        goto xQgZh;
        lvGXP:
        $siswa_kelas = $this->kelas->get_status_siswa_kelas($id, $id_tp, $id_smt);
        goto PfAfk;
        bIpfM:
        $status = $this->db->insert("\155\141\x73\x74\145\162\x5f\153\145\154\141\x73", $insert);
        goto uYkpK;
        EJbuS:
        $siswas = $this->input->post("\163\151\x73\x77\x61", true);
        goto FNNog;
        SGgB6:
        CS2KP:
        goto JQFlF;
        bDqoO:
        aibq7:
        goto bIpfM;
        BIsUy:
        if ($this->form_validation->run() == TRUE) {
            goto fvqrF;
        }
        goto dqDmg;
        qHcnN:
        yWQWZ:
        goto aMeVW;
        zPc0B:
        $id = $this->input->post("\151\x64\x5f\153\x65\154\141\163", true);
        goto q_eji;
        Jm2al:
        $insert = array("\x6e\x61\x6d\141\x5f\153\x65\x6c\141\x73" => strip_tags($this->input->post("\156\x61\x6d\141\137\x6b\145\154\x61\163", TRUE)), "\x6b\157\144\x65\x5f\153\145\x6c\141\163" => strip_tags($this->input->post("\153\x6f\144\x65\x5f\153\x65\x6c\141\163", TRUE)), "\x6a\x75\162\x75\x73\141\x6e\x5f\x69\x64" => strip_tags($this->input->post("\152\165\162\x75\163\141\x6e\x5f\x69\x64", TRUE)), "\151\x64\137\x74\x70" => $id_tp, "\151\x64\137\163\155\164" => $id_smt, "\x6c\145\x76\145\x6c\x5f\151\144" => strip_tags($this->input->post("\x6c\145\x76\x65\x6c\137\151\144", TRUE)), "\147\x75\162\165\137\151\144" => strip_tags($this->input->post("\147\165\162\x75\137\151\x64", TRUE)), "\163\151\x73\167\x61\x5f\x69\x64" => strip_tags($this->input->post("\163\x69\163\x77\x61\x5f\x69\144", TRUE)), "\152\165\155\x6c\x61\150\x5f\163\x69\x73\167\x61" => $jumlah);
        goto j2Kt4;
        y7zcb:
        foreach ($siswa_kelas as $id_siswa => $sis) {
            $insert[$id_tp . $id_smt . $id_siswa] = ["\x69\x64\x5f\x6b\145\154\x61\x73\x5f\x73\151\163\167\141" => $id_tp . $id_smt . $id_siswa, "\x69\x64\137\164\x70" => $id_tp, "\151\x64\137\x73\155\x74" => $id_smt, "\x69\144\137\x6b\x65\154\x61\x73" => 0, "\x69\x64\x5f\x73\x69\x73\167\x61" => $id_siswa];
            uwMpO:
        }
        goto lB6i_;
        rcvVX:
        if ($this->form_validation->run() == TRUE) {
            goto aibq7;
        }
        goto X78cN;
        lB6i_:
        L24bY:
        goto m3Egs;
        lmtwu:
        $insert[$id_tp . $id_smt . $idsiswa] = ["\151\144\x5f\x6b\145\x6c\x61\163\137\x73\x69\x73\167\x61" => $id_tp . $id_smt . $idsiswa, "\x69\144\137\x74\x70" => $id_tp, "\x69\144\x5f\163\x6d\x74" => $id_smt, "\x69\x64\x5f\x6b\145\x6c\x61\x73" => $new_id_kelas, "\151\x64\137\x73\x69\x73\167\x61" => $idsiswa];
        goto C39EH;
        M5MMr:
        $id_siswa = isset($siswas[$i]) ? $siswas[$i] : null;
        goto nMsY2;
        iPNhw:
        Sqg6C:
        goto GCzlZ;
        IkCIE:
        Lola0:
        goto ZA9hW;
        dqDmg:
        $status = FALSE;
        goto OMexh;
        aCbep:
        $i++;
        goto YZb4C;
        xQgZh:
        HZcs3:
        goto Pfqp5;
        A7x_K:
        $this->db->where("\x69\144\x5f\153\x65\x6c\141\x73", $id);
        goto y6LYs;
        UnWq5:
        goto ScAhr;
        goto SGgB6;
        GMYGU:
        jBhrM:
        goto UnWq5;
        ZA9hW:
        $insert[$id_tp . $id_smt . $idsiswa]["\151\x64\x5f\x6b\145\x6c\141\x73"] = $new_id_kelas;
        goto qHcnN;
        FNNog:
        $config = array(array("\146\151\x65\154\x64" => "\156\141\155\x61\137\153\x65\154\141\163", "\x6c\141\x62\145\154" => "\116\141\x6d\x61\x20\113\x65\154\141\x73", "\x72\x75\x6c\145\x73" => "\164\162\x69\155"), array("\146\x69\x65\154\x64" => "\x6b\157\144\145\x5f\x6b\x65\x6c\x61\163", "\x6c\x61\142\145\x6c" => "\113\x6f\x64\x65\x20\113\145\x6c\x61\163", "\x72\165\154\x65\x73" => "\x74\162\151\x6d"), array("\146\x69\x65\x6c\x64" => "\152\x75\162\x75\x73\x61\156\137\x69\144", "\x6c\x61\142\x65\154" => "\112\x75\x72\x75\163\141\156", "\x72\x75\154\145\163" => "\x74\162\151\x6d"), array("\146\151\x65\x6c\x64" => "\x6c\145\x76\145\x6c\137\151\144", "\x6c\141\x62\x65\154" => "\x4c\145\x76\145\x6c", "\x72\165\x6c\x65\x73" => "\164\x72\x69\155"), array("\x66\151\x65\154\144" => "\147\x75\x72\165\137\151\144", "\154\x61\x62\145\154" => "\107\165\x72\x75", "\x72\x75\x6c\145\163" => "\164\x72\151\x6d"), array("\x66\151\145\154\144" => "\x73\x69\x73\167\141\x5f\x69\144", "\x6c\x61\x62\145\x6c" => "\x53\151\163\167\x61", "\162\165\x6c\145\x73" => "\164\162\151\155"));
        goto MDurR;
        HWxa4:
        $jumlah = serialize($siswakelas);
        goto Jm2al;
        V5JVC:
        YMp8a:
        goto HWxa4;
        a5jLJ:
        $this->db->set("\x69\x64\x5f\153\x65\x6c\x61\x73", $id);
        goto mGhy2;
        dSXf_:
        if (!($idsiswa != null)) {
            goto WH75j;
        }
        goto UygWA;
        eTtXy:
        $id_tp = $this->master->getTahunActive()->id_tp;
        goto LXrd_;
        EeU41:
        r4AU6:
        goto V3eh1;
        JQFlF:
        $this->form_validation->set_rules($config);
        goto BIsUy;
        mGhy2:
        $this->db->where("\151\144\137\152\x61\x62\x61\164\x61\156\x5f\x67\x75\162\x75", $guru_id . $id_tp . $id_smt);
        goto RVMMe;
        pinVH:
        y9k5J:
        goto vWf6b;
        yA_Eb:
        array_push($siswakelas, ["\151\144" => $id_siswa]);
        goto ssdI4;
        zuTFM:
        if (!$status) {
            goto nCHSu;
        }
        goto a5jLJ;
        ZvTfm:
        Yks5F:
        goto ETKNk;
        IlYtf:
        if ($id != null && $id != '') {
            goto CS2KP;
        }
        goto RF6kg;
        ssdI4:
        osDeF:
        goto LwW6K;
        Pfqp5:
        if (!($i <= count($siswas))) {
            goto YMp8a;
        }
        goto M5MMr;
        UTryq:
        $updated = false;
        goto zb0WZ;
        Xljkx:
        $data["\165\160\144\x61\x74\x65"] = $updated;
        goto Jr_gN;
        vWf6b:
        $i = 0;
        goto pAPjC;
        RVMMe:
        $updated = $this->db->update("\152\x61\142\x61\164\141\156\137\147\x75\x72\x75");
        goto gNq5U;
        pAPjC:
        CC_cR:
        goto BPmKw;
        agR3F:
        x7wkW:
        goto DvQpT;
        X78cN:
        $status = FALSE;
        goto hqGji;
        JRCMV:
    }
    public function update_kelas($id)
    {
        goto HPKXg;
        Qz3Vz:
        snozL:
        goto GphPI;
        K3G3G:
        if (!($id_siswa != null)) {
            goto snozL;
        }
        goto XdzO2;
        E06l9:
        V4jSt:
        goto NDmQ5;
        BEBDy:
        $this->db->replace("\153\145\154\x61\163\x5f\163\x69\163\167\141", $insert);
        goto Qz3Vz;
        Ve4_H:
        $id_smt = $this->master->getSemesterActive()->id_smt;
        goto utJVQ;
        XdzO2:
        $insert = ["\x69\x64\x5f\153\x65\154\x61\x73\137\163\151\163\x77\141" => $id_tp . $id_smt . $id_siswa, "\151\144\x5f\x74\x70" => $id_tp, "\x69\144\137\x73\155\164" => $id_smt, "\151\144\137\153\x65\x6c\141\x73" => $id, "\151\x64\137\163\151\x73\167\141" => $id_siswa];
        goto BEBDy;
        oCSWO:
        $i = 0;
        goto q8Poo;
        q8Poo:
        sDgaf:
        goto xsYLA;
        GphPI:
        Hwee0:
        goto uUiym;
        e7H07:
        Cd9Ni:
        goto Dt2Q_;
        HPKXg:
        $id_tp = $this->master->getTahunActive()->id_tp;
        goto Ve4_H;
        xsYLA:
        if (!($i <= $rowsSelect)) {
            goto Cd9Ni;
        }
        goto OqQlQ;
        OqQlQ:
        $id_siswa = $this->input->post("\163\x69\163\167\141\133" . $i . "\x5d", true);
        goto K3G3G;
        Dt2Q_:
        return $siswakelas;
        goto b4C47;
        NDmQ5:
        $rowsSelect = count($this->input->post("\x73\151\x73\167\x61", true));
        goto oCSWO;
        utJVQ:
        $siswakelas = $this->kelas->get_status_siswa_kelas($id, $id_tp, $id_smt);
        goto nTboL;
        uUiym:
        $i++;
        goto YSXT9;
        R2zlM:
        bfSmW:
        goto E06l9;
        nTboL:
        if (!(count($siswakelas) > 0)) {
            goto V4jSt;
        }
        goto u3Q1p;
        YSXT9:
        goto sDgaf;
        goto e7H07;
        u3Q1p:
        foreach ($siswakelas as $id_siswa => $sis) {
            goto KUUrp;
            KUUrp:
            $insert = ["\x69\144\x5f\x6b\x65\x6c\x61\163\137\163\x69\163\x77\x61" => $id_tp . $id_smt . $id_siswa, "\x69\x64\x5f\x74\x70" => $id_tp, "\151\x64\x5f\x73\155\164" => $id_smt, "\x69\x64\137\x6b\x65\x6c\x61\163" => 0, "\151\144\x5f\x73\151\x73\x77\141" => $id_siswa];
            goto JbukN;
            JbukN:
            $this->db->replace("\x6b\145\154\141\163\x5f\x73\x69\163\x77\141", $insert);
            goto fItQV;
            fItQV:
            qmgYV:
            goto Yl03a;
            Yl03a:
        }
        goto R2zlM;
        b4C47:
    }
    public function manage()
    {
        goto XlvQu;
        nEgs1:
        $data["\160\162\x6f\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto YyEh_;
        XlvQu:
        $user = $this->ion_auth->user()->row();
        goto qQaCn;
        tc9PO:
        $data["\x73\x6d\164\137\x61\x63\164\151\x76\145"] = $smt;
        goto nEgs1;
        Tmug3:
        $this->load->view("\155\141\x73\164\x65\x72\x2f\x6b\x65\x6c\x61\x73\57\x70\x65\x72\163\x65\x6d\145\163\164\145\162");
        goto aJ5MD;
        m1ZnO:
        $tp = $this->dashboard->getTahunActive();
        goto UbzQe;
        h456O:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto tc9PO;
        HVivA:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto RZdKD;
        tn8SH:
        $data["\x6b\x65\154\x61\163\x32"] = $this->dropdown->getAllKelas($tp->id_tp, "\62");
        goto aBWsw;
        UbzQe:
        $smt = $this->dashboard->getSemesterActive();
        goto HVivA;
        YyEh_:
        $data["\153\x65\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, "\x31");
        goto tn8SH;
        aBWsw:
        $this->load->view("\x5f\x74\145\155\160\154\x61\x74\x65\163\x2f\144\x61\163\x68\x62\x6f\141\162\x64\57\x5f\150\x65\141\x64\145\162", $data);
        goto Tmug3;
        RZdKD:
        $data["\164\160\137\141\x63\x74\x69\x76\x65"] = $tp;
        goto h456O;
        qQaCn:
        $data = ["\x75\x73\145\x72" => $user, "\152\x75\x64\165\154" => "\x43\157\160\171\40\113\x65\154\141\163", "\163\x75\142\152\165\x64\x75\154" => "\x43\157\x70\171\40\104\141\x74\x61\x20\113\145\x6c\x61\x73\40\153\x65\x20\123\x4d\x54\40\x49\111", "\163\x65\x74\164\151\156\x67" => $this->dashboard->getSetting()];
        goto m1ZnO;
        aJ5MD:
        $this->load->view("\x5f\164\145\155\x70\x6c\141\164\145\x73\x2f\x64\141\x73\x68\x62\x6f\141\x72\x64\57\137\146\x6f\157\x74\145\162");
        goto GWZIn;
        GWZIn:
    }
    public function getFromSmt1($kelas)
    {
        goto YuczR;
        TImng:
        $ids = [];
        goto hgxeQ;
        hgxeQ:
        if (!(count($data2) > 0)) {
            goto QhJW9;
        }
        goto v2hWm;
        YuczR:
        $tp = $this->dashboard->getTahunActive();
        goto BzNvS;
        v2hWm:
        foreach ($data2 as $s) {
            $ids[] = $s->id_siswa;
            cIRj8:
        }
        goto JPayQ;
        xBFpT:
        $this->output_json(["\x73\x6d\x74\x31" => $data1, "\163\155\x74\x32" => $ids]);
        goto n0Hqx;
        yehtg:
        $data2 = $this->kelas->getKelasSiswa($kelas, $tp->id_tp, "\x32");
        goto TImng;
        C4ZVz:
        QhJW9:
        goto xBFpT;
        JPayQ:
        l3I2W:
        goto C4ZVz;
        BzNvS:
        $data1 = $this->kelas->getKelasSiswa($kelas, $tp->id_tp, "\x31");
        goto yehtg;
        n0Hqx:
    }
    public function copyFromSmt1()
    {
        goto Qn8vM;
        Elbn8:
        kX3QF:
        goto dvINs;
        u0_jH:
        $this->db->insert("\x6d\141\163\164\x65\162\x5f\153\x65\154\141\x73", $data);
        goto VNdvC;
        lO3oi:
        foreach ($arrSiswa as $value) {
            goto FwYUd;
            Y3SU3:
            ZRdsU:
            goto dZ8Pt;
            K5L1V:
            $insert = ["\x69\144\x5f\153\145\154\141\163\x5f\x73\151\163\167\x61" => $tp->id_tp . $smt->id_smt . $id_siswa, "\x69\x64\137\x74\160" => $tp->id_tp, "\151\x64\x5f\163\x6d\x74" => $smt->id_smt, "\151\x64\137\153\x65\154\x61\x73" => $idk, "\151\x64\137\163\151\x73\x77\x61" => $id_siswa];
            goto eSzN_;
            FwYUd:
            $id_siswa = $value["\x69\x64"];
            goto aB68p;
            eSzN_:
            $res[] = $this->db->replace("\153\x65\154\141\x73\x5f\163\x69\x73\x77\141", $insert);
            goto Y3SU3;
            aB68p:
            if (!($id_siswa != null)) {
                goto ZRdsU;
            }
            goto K5L1V;
            dZ8Pt:
            N2EYV:
            goto ehWwI;
            ehWwI:
        }
        goto Elbn8;
        dvINs:
        $this->output_json($res);
        goto l_C3j;
        ZSkJd:
        $res = [];
        goto fYSMG;
        gySfZ:
        $kelas1 = $this->input->post("\x6b\x65\154\x61\163\137\x6c\141\155\x61", true);
        goto JmoUj;
        ONBKn:
        $kelas = $this->kelas->get_one($kelas1, $tp->id_tp, "\61");
        goto V36Rw;
        JmoUj:
        $kelas2 = $this->input->post("\153\145\154\x61\163\137\142\x61\x72\x75", true);
        goto ONBKn;
        fYSMG:
        $arrSiswa = unserialize($kelas->jumlah_siswa);
        goto lO3oi;
        V36Rw:
        $data = array("\156\141\x6d\x61\137\153\x65\154\141\163" => $kelas2, "\153\157\144\x65\x5f\153\145\154\141\x73" => $kelas->kode_kelas, "\152\x75\162\165\x73\x61\x6e\137\151\144" => $kelas->jurusan_id, "\x69\144\137\164\160" => $tp->id_tp, "\151\x64\137\163\x6d\164" => $smt->id_smt, "\x6c\145\x76\145\x6c\137\x69\x64" => $kelas->level_id, "\x67\165\x72\165\137\x69\144" => $kelas->guru_id, "\163\x69\163\x77\141\x5f\151\x64" => $kelas->siswa_id, "\152\165\155\x6c\x61\150\137\x73\x69\163\x77\141" => $kelas->jumlah_siswa);
        goto u0_jH;
        ClOr3:
        $smt = $this->dashboard->getSemesterActive();
        goto gySfZ;
        Qn8vM:
        $tp = $this->dashboard->getTahunActive();
        goto ClOr3;
        VNdvC:
        $idk = $this->db->insert_id();
        goto ZSkJd;
        l_C3j:
    }
    public function copySiswaFromSmt1()
    {
        goto EwNwu;
        oGj6Q:
        VEZzt:
        goto mo0r4;
        y33Gf:
        $this->output_json($res);
        goto k6nQy;
        PXEzI:
        $smt = $this->dashboard->getSemesterActive();
        goto z87mx;
        pJF3m:
        foreach ($posts as $d) {
            goto FBIMb;
            FBIMb:
            $idkelases[] = $d->id_kelas;
            goto J2KuQ;
            J2KuQ:
            $siswakelas[$d->id_kelas][] = ["\x69\144" => $d->id_siswa];
            goto t3abW;
            t3abW:
            D8nbR:
            goto EegQ9;
            EegQ9:
        }
        goto oGj6Q;
        mo0r4:
        $idkelases = array_unique($idkelases);
        goto OwlVt;
        z87mx:
        $posts = json_decode($this->input->post("\x6b\145\x6c\141\163", true));
        goto gdMHx;
        atORY:
        foreach ($idkelases as $ik) {
            goto eWSA3;
            jtrHF:
            $kelas = $this->kelas->get_one($ik, $tp->id_tp, "\x31");
            goto Yfsp3;
            IXZIJ:
            PnmNm:
            goto SIM7O;
            DAv3K:
            Vljzw:
            goto NBvhI;
            WxZ4w:
            $data = array("\156\x61\x6d\x61\137\153\x65\x6c\141\163" => $kelas->nama_kelas, "\x6b\x6f\144\145\x5f\153\x65\x6c\141\x73" => $kelas->kode_kelas, "\x6a\x75\162\x75\x73\141\156\137\x69\144" => $kelas->jurusan_id, "\x69\144\137\x74\160" => $tp->id_tp, "\151\144\x5f\163\155\164" => $smt->id_smt, "\x6c\x65\166\145\x6c\x5f\151\144" => $kelas->level_id, "\x67\165\162\x75\137\x69\x64" => $kelas->guru_id, "\163\x69\163\x77\x61\137\x69\x64" => $kelas->siswa_id, "\x6a\x75\x6d\x6c\141\x68\x5f\163\151\163\x77\x61" => $jumlah);
            goto DC6pc;
            Yfsp3:
            $jumlah = serialize($siswakelas[$ik]);
            goto WxZ4w;
            DC6pc:
            $this->db->insert("\155\x61\163\x74\x65\x72\x5f\153\x65\154\141\x73", $data);
            goto PxtM_;
            NBvhI:
            Ur8KU:
            goto IXZIJ;
            gGNfD:
            foreach ($siswakelas[$ik] as $s) {
                goto wWHoy;
                qjGp5:
                $res[] = $this->db->replace("\153\145\x6c\141\163\137\163\x69\x73\167\x61", $insert);
                goto oIOHR;
                wWHoy:
                $insert = ["\151\x64\x5f\x6b\x65\x6c\141\x73\137\163\151\163\167\x61" => $tp->id_tp . $smt->id_smt . $s["\151\x64"], "\x69\144\137\164\x70" => $tp->id_tp, "\151\x64\137\x73\x6d\x74" => $smt->id_smt, "\151\x64\x5f\153\145\154\141\x73" => $idk, "\x69\144\137\x73\151\163\167\141" => $s["\151\x64"]];
                goto qjGp5;
                oIOHR:
                aA4mp:
                goto kWF53;
                kWF53:
            }
            goto DAv3K;
            PxtM_:
            $idk = $this->db->insert_id();
            goto gGNfD;
            eWSA3:
            if (!($ik != '')) {
                goto Ur8KU;
            }
            goto jtrHF;
            SIM7O:
        }
        goto tme4f;
        Ix_BG:
        $siswakelas = [];
        goto pJF3m;
        tme4f:
        NSNk5:
        goto y33Gf;
        OwlVt:
        $res = [];
        goto atORY;
        gdMHx:
        $idkelases = [];
        goto Ix_BG;
        EwNwu:
        $tp = $this->dashboard->getTahunActive();
        goto PXEzI;
        k6nQy:
    }
    public function kenaikan()
    {
        goto uVAUg;
        Np0lG:
        $data["\x70\162\157\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto S17Ma;
        K6OtM:
        $data["\163\151\x73\x77\141\x5f\153\x65\x6c\x61\x73\137\142\141\162\x75"] = $this->master->getSiswaKelasBaru($tp->id_tp, $smt->id_smt);
        goto y6m8U;
        lX_CW:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto C3AB5;
        S17Ma:
        $level = $setting->jenjang == "\61" ? "\66" : ($setting->jenjang == "\62" ? "\x39" : ($setting->jenjang == "\x31" ? "\x33" : "\61\x32"));
        goto yoPES;
        vQwww:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto No9D4;
        MwY74:
        $smt = $this->dashboard->getSemesterActive();
        goto vQwww;
        C3AB5:
        $data["\x73\x6d\x74\137\x61\143\164\151\x76\x65"] = $smt;
        goto Np0lG;
        sdEc_:
        $this->load->view("\x5f\x74\x65\x6d\x70\x6c\x61\x74\x65\163\57\144\141\163\x68\142\157\141\162\x64\x2f\x5f\146\x6f\x6f\x74\x65\x72");
        goto KqGw0;
        mI1Ud:
        hJ4s4:
        goto fAW3U;
        rxi0Z:
        $lvlKls = $this->kelas->get_one($kelas, $tp->id_tp - 1, "\x32");
        goto tEnSf;
        wnMuA:
        $data["\x6b\145\154\x61\x73\x5f\x62\141\162\x75"] = $this->dropdown->getAllKelas($tp->id_tp, "\61");
        goto trk0G;
        No9D4:
        $data["\164\x70\x5f\x61\x63\x74\x69\x76\x65"] = $tp;
        goto lX_CW;
        trk0G:
        if (!($kelas != null)) {
            goto hJ4s4;
        }
        goto K6OtM;
        P4swe:
        $this->load->view("\155\x61\x73\164\x65\x72\x2f\x6b\x65\x6c\141\x73\57\x6e\141\x69\x6b\153\145\154\141\163");
        goto sdEc_;
        yoPES:
        $data["\153\145\154\141\x73\137\x6c\x61\155\x61"] = $this->dropdown->getAllKelas($tp->id_tp - 1, "\62", "\x21\x3d" . $level);
        goto wnMuA;
        tEnSf:
        $data["\x6b\x65\x6c\141\163\145\163"] = $this->dropdown->getAllKelas($tp->id_tp - 1, "\x32", "\x3d" . ($lvlKls->level_id + 1));
        goto mI1Ud;
        EcYLp:
        $user = $this->ion_auth->user()->row();
        goto Nh1Y7;
        Nh1Y7:
        $setting = $this->dashboard->getSetting();
        goto P_idJ;
        P_idJ:
        $data = ["\165\163\145\162" => $user, "\152\x75\x64\x75\154" => "\x4b\145\x6e\x61\151\153\153\141\156\40\113\x65\x6c\141\163", "\163\x75\142\x6a\165\x64\165\154" => "\116\141\x69\x6b\40\x4b\x65\154\x61\x73\x20\123\151\163\x77\141", "\x73\145\x74\164\x69\x6e\147" => $setting];
        goto azlCU;
        uVAUg:
        $kelas = $this->input->get("\153\x65\x6c\x61\x73", true);
        goto EcYLp;
        y6m8U:
        $data["\163\151\x73\x77\x61\x73"] = $this->rapor->getKenaikanSiswa($kelas, $tp->id_tp - 1, "\x32");
        goto BKN0_;
        azlCU:
        $tp = $this->dashboard->getTahunActive();
        goto MwY74;
        fAW3U:
        $this->load->view("\137\x74\x65\155\160\154\x61\164\145\x73\x2f\144\x61\163\150\x62\x6f\x61\x72\x64\57\137\150\145\141\x64\145\x72", $data);
        goto P4swe;
        BKN0_:
        $data["\153\145\x6c\x61\x73\137\x73\x65\x6c\145\143\x74\145\x64"] = $kelas;
        goto rxi0Z;
        KqGw0:
    }
    public function naikKelas()
    {
        goto pfSmM;
        pfSmM:
        $tp = $this->dashboard->getTahunActive();
        goto uyxp0;
        ZIjeA:
        $idks = [];
        goto FO86q;
        NIY8O:
        $this->output_json($data);
        goto b3Zxq;
        G5HVV:
        $mode = $this->input->post("\x6d\x6f\x64\x65", true);
        goto J7vip;
        Yx3Ar:
        RA55q:
        goto WBIdn;
        RY0Ax:
        $data["\x72\145\163"] = $siswakelas;
        goto NIY8O;
        xMiNG:
        $posts = json_decode($this->input->post("\x6b\x65\x6c\141\x73", true));
        goto G5HVV;
        uyxp0:
        $smt = $this->dashboard->getSemesterActive();
        goto xMiNG;
        UTCJB:
        foreach ($posts as $d) {
            goto sbcHd;
            r205H:
            $siswakelas[$d->kelas_baru][] = ["\151\x64" => $d->id_siswa];
            goto Lf10l;
            sbcHd:
            $idkelases[] = $d->kelas_baru;
            goto r205H;
            Lf10l:
            QyLAd:
            goto mOHgu;
            mOHgu:
        }
        goto Yx3Ar;
        gcQQI:
        $siswakelas = [];
        goto UTCJB;
        WBIdn:
        $idkelases = array_unique($idkelases);
        goto oI1OT;
        FO86q:
        foreach ($idkelases as $ik) {
            goto WtO4a;
            ZT34s:
            $jumlah = serialize($jmlLama);
            goto K3Rga;
            MOdn2:
            foreach ($siswakelas[$ik] as $s) {
                goto jwgBm;
                B5o37:
                pXO9r:
                goto wecVx;
                jwgBm:
                foreach ($jmlLama as $lama) {
                    goto QLlqF;
                    BSCvr:
                    sNUze:
                    goto Herw9;
                    v8quo:
                    array_push($jmlLama, ["\151\144" => $s["\151\x64"]]);
                    goto kl2F1;
                    Csqzi:
                    UPqND:
                    goto BSCvr;
                    kl2F1:
                    array_push($idks, $kelas_baru->id_kelas);
                    goto Csqzi;
                    QLlqF:
                    if (!($lama["\x69\144"] != $s["\151\144"])) {
                        goto UPqND;
                    }
                    goto v8quo;
                    Herw9:
                }
                goto gnM4n;
                gnM4n:
                gHgxh:
                goto B5o37;
                wecVx:
            }
            goto cn2gi;
            PmiYL:
            $this->db->where("\x69\144\137\x6b\x65\154\141\x73", $kelas_baru->id_kelas);
            goto ZTO7s;
            AEY2v:
            if ($kelas_baru == null) {
                goto k9t9N;
            }
            goto f5KXM;
            ZTO7s:
            $this->db->update("\155\x61\163\x74\x65\x72\x5f\x6b\145\x6c\x61\163", $data);
            goto qR1Vd;
            ZsBJe:
            foreach ($idks as $idk) {
                goto kdLTB;
                kdLTB:
                foreach ($siswakelas[$ik] as $s) {
                    goto L7ULX;
                    L7ULX:
                    $insert = ["\151\144\137\x6b\145\154\141\x73\137\163\151\x73\x77\x61" => $tp->id_tp . $smt->id_smt . $s["\x69\x64"], "\x69\x64\137\x74\x70" => $tp->id_tp, "\x69\144\x5f\x73\x6d\x74" => $smt->id_smt, "\151\144\x5f\x6b\145\154\x61\163" => $idk, "\151\x64\x5f\163\151\163\x77\x61" => $s["\x69\x64"]];
                    goto sHVaq;
                    sHVaq:
                    $res[] = $this->db->replace("\x6b\x65\x6c\141\163\137\x73\x69\163\167\x61", $insert);
                    goto AQIkq;
                    AQIkq:
                    g8hux:
                    goto Wlixl;
                    Wlixl:
                }
                goto MfjZj;
                MfjZj:
                gy2Um:
                goto DlOko;
                DlOko:
                NR39q:
                goto gA5KK;
                gA5KK:
            }
            goto otBEB;
            FWomI:
            $data = array("\156\x61\x6d\141\137\153\x65\154\141\x73" => $kelas->nama_kelas, "\153\x6f\144\145\x5f\x6b\x65\x6c\x61\x73" => $kelas->kode_kelas, "\152\x75\x72\x75\x73\x61\x6e\x5f\151\x64" => $kelas->jurusan_id, "\x69\x64\137\x74\x70" => $tp->id_tp, "\x69\144\x5f\x73\x6d\x74" => $smt->id_smt, "\154\145\166\x65\x6c\x5f\x69\x64" => $kelas->level_id, "\147\x75\x72\165\137\151\144" => $kelas->guru_id, "\163\x69\x73\x77\x61\137\151\x64" => $kelas->siswa_id, "\152\165\x6d\154\x61\x68\137\163\151\x73\x77\141" => $jumlah);
            goto Y193a;
            cn2gi:
            HHQVv:
            goto ZT34s;
            aN_VB:
            $jmlLama = unserialize($kelas_baru->jumlah_siswa);
            goto MOdn2;
            WhgkB:
            array_push($idks, $this->db->insert_id());
            goto aBLvt;
            aBLvt:
            Srend:
            goto ZsBJe;
            Y193a:
            $this->db->insert("\x6d\x61\163\164\x65\x72\137\153\x65\x6c\141\163", $data);
            goto WhgkB;
            HRNFi:
            $jumlah = serialize($siswakelas[$ik]);
            goto NC6KC;
            NC6KC:
            array_push($idks, $kelas_baru->id_kelas);
            goto REPh0;
            REPh0:
            goto P2Jxb;
            goto gdDpz;
            KDayW:
            k9t9N:
            goto ennMZ;
            qR1Vd:
            goto Srend;
            goto KDayW;
            tf5Qy:
            EJ9zr:
            goto kVbvh;
            f5KXM:
            if ($mode == "\160\145\x72\163\x69\x73\167\x61") {
                goto EMGlE;
            }
            goto HRNFi;
            gdDpz:
            EMGlE:
            goto aN_VB;
            K3Rga:
            P2Jxb:
            goto SZRGF;
            ennMZ:
            $jumlah = serialize($siswakelas[$ik]);
            goto FWomI;
            nO80V:
            $kelas_baru = $this->kelas->getKelasByNama($kelas->nama_kelas, $tp->id_tp, $smt->id_smt);
            goto AEY2v;
            SZRGF:
            $data = array("\x6e\141\155\x61\x5f\x6b\x65\154\141\x73" => $kelas->nama_kelas, "\153\x6f\x64\x65\x5f\153\x65\x6c\141\x73" => $kelas->kode_kelas, "\152\x75\162\x75\163\141\156\x5f\x69\x64" => $kelas->jurusan_id, "\151\144\x5f\x74\x70" => $tp->id_tp, "\151\x64\137\x73\155\164" => $smt->id_smt, "\x6c\145\x76\145\154\137\x69\144" => $kelas->level_id, "\147\165\x72\x75\x5f\151\x64" => $kelas->guru_id, "\163\151\x73\x77\141\x5f\x69\x64" => $kelas->siswa_id, "\152\165\x6d\154\x61\x68\x5f\163\x69\163\167\141" => $jumlah);
            goto PmiYL;
            WtO4a:
            $kelas = $this->kelas->get_one($ik, $tp->id_tp - 1, "\x32");
            goto nO80V;
            otBEB:
            BudVH:
            goto tf5Qy;
            kVbvh:
        }
        goto jMgro;
        J7vip:
        $idkelases = [];
        goto gcQQI;
        jMgro:
        sKq82:
        goto RY0Ax;
        oI1OT:
        $res = [];
        goto ZIjeA;
        b3Zxq:
    }
    public function hapus($id_kelas)
    {
        goto Zl_xz;
        Zl_xz:
        $delete["\163\x69\x73\167\x61"] = $this->master->delete("\153\x65\x6c\x61\163\137\163\151\163\167\x61", $id_kelas, "\151\144\137\153\x65\154\x61\x73");
        goto XBiO_;
        dzcw5:
        $this->output_json($delete);
        goto ECkJ0;
        XBiO_:
        $delete["\153\x65\154\x61\x73"] = $this->master->delete("\x6d\x61\x73\x74\145\162\137\153\x65\154\141\163", $id_kelas, "\151\144\137\153\145\x6c\141\x73");
        goto dzcw5;
        ECkJ0:
    }
}
