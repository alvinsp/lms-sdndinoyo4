<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtjadwal extends CI_Controller
{
    public function __construct()
    {
        goto J_bAr;
        I0QMu:
        $this->load->model("\103\x62\164\137\x6d\x6f\144\145\x6c", "\143\142\164");
        goto FYm2a;
        kCBt3:
        LtLBI:
        goto DhD8A;
        vREH5:
        show_error("\110\x61\156\171\141\x20\101\x64\155\x69\x6e\151\x73\x74\x72\x61\164\157\162\40\x64\141\x6e\x20\x67\165\162\x75\x20\171\x61\x6e\147\40\144\x69\142\145\x72\151\40\x68\141\x6b\x20\165\156\164\x75\153\x20\x6d\x65\x6e\147\141\x6b\x73\145\163\40\150\x61\x6c\x61\155\141\x6e\x20\x69\x6e\x69\x2c\40\x3c\x61\x20\150\x72\145\146\x3d\42" . base_url("\x64\141\163\x68\x62\157\141\162\144") . "\x22\x3e\113\145\x6d\x62\x61\x6c\x69\40\153\x65\40\155\145\x6e\165\x20\x61\x77\x61\x6c\x3c\57\141\76", 403, "\101\153\x73\x65\x73\x20\x54\x65\x72\154\141\x72\x61\x6e\x67");
        goto mwWJN;
        iqXwW:
        $this->load->library(["\x64\141\x74\141\164\141\x62\154\x65\163", "\x66\x6f\162\155\137\166\141\154\x69\144\141\x74\151\157\x6e"]);
        goto x6gem;
        gdaht:
        $this->load->model("\x44\141\x73\150\142\x6f\141\x72\144\137\155\x6f\144\x65\x6c", "\144\141\163\150\x62\157\x61\162\x64");
        goto I0QMu;
        Dpdof:
        dp3ci:
        goto iqXwW;
        x6gem:
        $this->load->model("\x4d\x61\x73\x74\145\x72\137\155\x6f\x64\x65\154", "\155\x61\x73\164\145\x72");
        goto gdaht;
        mwWJN:
        WaSiY:
        goto SPnpw;
        DhD8A:
        redirect("\x61\x75\164\150");
        goto Dpdof;
        FYm2a:
        $this->load->model("\114\157\147\x5f\x6d\157\144\145\x6c", "\x6c\x6f\147\147\x69\x6e\x67");
        goto pY87p;
        XXWtI:
        $this->load->model("\104\162\157\x70\144\157\167\156\137\155\157\x64\145\x6c", "\x64\x72\157\x70\144\157\x77\x6e");
        goto mZ3W6;
        J_bAr:
        parent::__construct();
        goto DKRpV;
        SPnpw:
        goto dp3ci;
        goto kCBt3;
        uzk7L:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\x75"))) {
            goto WaSiY;
        }
        goto vREH5;
        DKRpV:
        if (!$this->ion_auth->logged_in()) {
            goto LtLBI;
        }
        goto uzk7L;
        pY87p:
        $this->load->model("\113\x65\x6c\141\x73\x5f\155\x6f\144\x65\x6c", "\x6b\x65\x6c\141\163");
        goto XXWtI;
        mZ3W6:
        $this->form_validation->set_error_delimiters('', '');
        goto atnHG;
        atnHG:
    }
    public function output_json($data, $encode = true)
    {
        goto nI6tL;
        dtEv0:
        uJHzl:
        goto dSHMe;
        dSHMe:
        $this->output->set_content_type("\x61\160\160\x6c\x69\143\141\164\x69\157\156\57\x6a\x73\157\x6e")->set_output($data);
        goto XqGdi;
        nI6tL:
        if (!$encode) {
            goto uJHzl;
        }
        goto quZic;
        quZic:
        $data = json_encode($data);
        goto dtEv0;
        XqGdi:
    }
    public function index()
    {
        goto dVIWH;
        xtKbj:
        $data["\x69\x64\x5f\154\145\166\145\x6c"] = $id_level;
        goto gcIqV;
        tI2gL:
        $type = $this->input->get("\164\x79\160\145");
        goto CI5Qk;
        LPVMv:
        goto EDFW7;
        goto kH_DP;
        vWpc0:
        goto EDFW7;
        goto gfqB1;
        vtonR:
        $data["\x72\x75\141\x6e\147\x73"] = $this->cbt->getAllRuang();
        goto Sa8zo;
        Sa8zo:
        $data["\163\145\163\151\x73"] = $this->dropdown->getAllSesi();
        goto Yno7K;
        LZMVv:
        if ($type == "\x32") {
            goto J00X1;
        }
        goto Wsvbs;
        MDmxk:
        $data["\x69\144\x5f\147\165\162\x75"] = '';
        goto IvEkU;
        ybkNV:
        if ($type == "\62") {
            goto jCc7p;
        }
        goto EvYuX;
        dkWcW:
        $data["\151\144\x5f\146\151\x6c\164\x65\x72"] = $type == null ? '' : $type;
        goto MyR6h;
        TjI3V:
        $data["\x69\x64\x5f\x6c\145\x76\x65\x6c"] = null;
        goto GyiD1;
        SE1I0:
        $data["\151\x64\137\154\x65\166\145\x6c"] = null;
        goto QcKYO;
        CMtyf:
        Jk5o9:
        goto W4dlU;
        W4dlU:
        $data["\152\x61\144\x77\x61\x6c\x73"] = $this->cbt->getAllDataJadwal();
        goto idHpH;
        PZr5h:
        Ck3q5:
        goto er3og;
        dVIWH:
        $lvl = $this->input->get("\x6c\145\x76\x65\x6c", true);
        goto BKFF1;
        cENMi:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto V5qdm;
        NEzwW:
        $tp = $this->dashboard->getTahunActive();
        goto fTT00;
        SL2KE:
        $data["\151\x64\137\147\165\x72\165"] = null;
        goto DfpRb;
        DfpRb:
        $data["\151\144\137\x6d\x61\160\145\x6c"] = null;
        goto SE1I0;
        ZIguc:
        $data["\151\x64\x5f\x67\165\162\x75"] = $id_guru;
        goto Pv_8a;
        Iqqhe:
        $data["\x6a\x61\x64\167\141\x6c\x73"] = $this->cbt->getAllDataJadwal(null, null, $id_level);
        goto NcYXL;
        SFlM3:
        $data["\164\160\x5f\x61\x63\164\151\x76\x65"] = $tp;
        goto jUH2O;
        CZpfW:
        goto EDFW7;
        goto Bbgh5;
        Wsvbs:
        if ($type == "\63") {
            goto cdL1b;
        }
        goto chBXt;
        NcYXL:
        $data["\151\144\137\x67\x75\162\x75"] = '';
        goto FPNna;
        xAPMS:
        $data["\152\155\x6c\111\163\x74"] = [];
        goto lzpIS;
        DytGh:
        $this->load->view("\137\164\x65\x6d\x70\154\141\164\x65\x73\57\144\141\163\150\x62\157\x61\x72\x64\57\x5f\x68\145\141\144\x65\162", $data);
        goto Q2rhZ;
        se1pO:
        if ($type == "\x31") {
            goto wjEga;
        }
        goto LZMVv;
        jUH2O:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto Zb3x1;
        romGl:
        $data["\x6d\141\x70\145\x6c\163"] = $this->dropdown->getAllMapel();
        goto a0zwJ;
        gfqB1:
        cdL1b:
        goto V9gAH;
        S2p37:
        $mode = $this->input->get("\155\x6f\x64\x65");
        goto tI2gL;
        RRTd9:
        $data["\x69\144\137\155\x61\x70\x65\154"] = '';
        goto x5cMv;
        kpO3X:
        tc7f3:
        goto xr0Ua;
        u9m13:
        Jpj_7:
        goto pw3f5;
        MyR6h:
        if ($type == "\60") {
            goto QZPx1;
        }
        goto ybkNV;
        WHKs_:
        $data["\151\x64\x5f\x67\165\162\165"] = '';
        goto ctnwR;
        chBXt:
        $data["\151\x64\137\147\x75\162\x75"] = null;
        goto U3azG;
        GyiD1:
        goto EDFW7;
        goto CMtyf;
        dXLXQ:
        $data["\x69\x64\137\x6d\141\x70\x65\x6c"] = null;
        goto Zxlu2;
        pw3f5:
        $id_level = $this->input->get("\x69\x64");
        goto xtKbj;
        dLz47:
        $data["\151\144\x5f\x6c\x65\166\x65\154"] = '';
        goto BHxtE;
        a_iVt:
        $data["\151\x64\137\x6d\x61\x70\145\154"] = $id_mapel;
        goto OGuiS;
        FWwDQ:
        $id_mapel = $this->input->get("\x69\x64");
        goto a_iVt;
        oQuBl:
        $id_mapel = $this->input->get("\151\144");
        goto boxtG;
        XOOra:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto cENMi;
        ic_gX:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto SFlM3;
        Gm6A0:
        u8A7I:
        goto ha0QI;
        KB_Iq:
        $data["\x69\x64\137\x6c\x65\166\x65\x6c"] = null;
        goto idBGo;
        eyLWk:
        foreach ($mapel as $m) {
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            D38i1:
        }
        goto kpO3X;
        lzpIS:
        $data["\152\x6d\x6c\x4d\x61\x70\x65\x6c"] = [];
        goto h0pDI;
        IvEkU:
        $data["\151\144\x5f\x6c\x65\166\x65\x6c"] = '';
        goto vWpc0;
        A4k7K:
        $this->load->view("\155\145\155\x62\145\162\163\x2f\x67\x75\x72\165\57\x74\145\x6d\x70\x6c\141\x74\x65\163\57\x68\145\141\144\145\162", $data);
        goto k3P8G;
        ckLda:
        $jadwal_terpakai = [];
        goto LIPZW;
        GFopu:
        $data["\x66\151\154\x74\145\x72\x73"] = ["\60" => "\x53\145\x6d\x75\141", "\62" => "\115\x61\160\x65\x6c", "\x33" => "\114\145\x76\x65\x6c"];
        goto dkWcW;
        BHxtE:
        goto vrtk9;
        goto u9m13;
        C5qaR:
        goto Ck3q5;
        goto Gm6A0;
        r6p6A:
        $terpakai = $this->cbt->getJadwalTerpakai();
        goto ckLda;
        x5cMv:
        $data["\x69\144\137\154\x65\x76\x65\x6c"] = '';
        goto CZpfW;
        Yno7K:
        $data["\x6a\145\x6e\x69\x73"] = $this->cbt->getAllJenisUjian();
        goto Hzqzv;
        Hzqzv:
        $data["\x6a\141\x64\x77\141\154"] = json_decode(json_encode($this->cbt->dummyJadwal()));
        goto xAPMS;
        a0zwJ:
        $data["\x66\151\x6c\164\145\162\x73"] = ["\x30" => "\x53\145\x6d\165\141", "\x31" => "\107\x75\x72\165", "\62" => "\115\x61\160\x65\x6c", "\63" => "\x4c\x65\166\145\154"];
        goto Jiwml;
        Zb3x1:
        $data["\x73\x6d\164\x5f\x61\x63\164\x69\166\x65"] = $smt;
        goto S2p37;
        Ir5k6:
        $data["\147\x75\162\x75\x73"] = $this->dropdown->getAllGuru();
        goto romGl;
        Pv_8a:
        $data["\152\x61\x64\x77\141\x6c\x73"] = $this->cbt->getAllDataJadwal($id_guru);
        goto RRTd9;
        TmXx3:
        $data["\x6c\x65\x76\x65\x6c\x73"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto FF7nt;
        x_b7k:
        $data["\141\144\x61\x5f\165\x6a\x69\141\x6e"] = $this->cbt->getDataJadwalByTgl(date("\131\x2d\x6d\55\144"));
        goto TmXx3;
        U3azG:
        $data["\151\x64\x5f\x6d\141\x70\x65\154"] = null;
        goto TjI3V;
        x88I7:
        $data["\152\x61\x64\167\x61\x6c\163"] = $this->cbt->getAllDataJadwal(null, $id_mapel);
        goto MDmxk;
        GrT3b:
        $data["\x74\x6f\x74\141\154\x5f\163\x69\x73\x77\x61"] = $jadwal_terpakai;
        goto x_b7k;
        Nyf6a:
        sD0cz:
        goto GrT3b;
        boxtG:
        $data["\x69\x64\137\155\x61\x70\x65\154"] = $id_mapel;
        goto x88I7;
        fTT00:
        $smt = $this->dashboard->getSemesterActive();
        goto ic_gX;
        k3P8G:
        $this->load->view("\x63\x62\x74\x2f\152\x61\144\x77\141\x6c\x2f\x64\141\164\141");
        goto dJljG;
        QcKYO:
        goto vrtk9;
        goto cuvL4;
        KhT3x:
        if ($type == "\x30") {
            goto Jk5o9;
        }
        goto se1pO;
        bEo1k:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto bMFoz;
        coGoX:
        $data["\151\144\137\147\x75\162\165"] = null;
        goto dBz2T;
        u2wjk:
        $id_guru = $this->input->get("\151\144");
        goto ZIguc;
        gsmzD:
        if ($this->ion_auth->is_admin()) {
            goto u8A7I;
        }
        goto bEo1k;
        dJljG:
        $this->load->view("\x6d\x65\x6d\142\145\x72\163\57\147\x75\162\165\x2f\164\x65\x6d\x70\154\x61\164\x65\163\57\x66\x6f\x6f\164\x65\162");
        goto C5qaR;
        EvYuX:
        if ($type == "\63") {
            goto Jpj_7;
        }
        goto SL2KE;
        BKFF1:
        $level = $lvl == null ? "\x30" : $lvl;
        goto q1fXu;
        pYeMp:
        $this->load->view("\x5f\164\145\x6d\x70\x6c\x61\x74\145\x73\x2f\x64\141\x73\150\142\157\141\x72\x64\x2f\x5f\146\x6f\157\164\145\x72");
        goto PZr5h;
        Bbgh5:
        J00X1:
        goto oQuBl;
        OGuiS:
        $data["\x6a\x61\144\x77\x61\154\x73"] = $this->cbt->getAllDataJadwal($guru->id_guru, $id_mapel);
        goto NyL68;
        dBz2T:
        $data["\151\144\x5f\x6d\141\160\145\x6c"] = null;
        goto KB_Iq;
        GkH6w:
        EDFW7:
        goto DytGh;
        HUGuu:
        $data = ["\165\x73\x65\x72" => $user, "\x6a\x75\x64\x75\x6c" => "\x4a\x61\x64\x77\141\154\x20\x50\x65\x6e\151\154\141\x69\141\156", "\163\165\142\152\165\x64\x75\154" => "\x50\110\57\120\124\x53\57\120\101\124\57\125\x53\102\113", "\163\145\x74\164\x69\x6e\x67" => $setting];
        goto NEzwW;
        bMFoz:
        $data["\147\165\x72\165"] = $guru;
        goto XOOra;
        cuvL4:
        QZPx1:
        goto C3t_j;
        ha0QI:
        $data["\x70\x72\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto Ir5k6;
        xr0Ua:
        $data["\155\141\160\145\154\x73"] = $arrMapel;
        goto GFopu;
        ctnwR:
        $data["\x69\144\137\155\x61\x70\x65\154"] = '';
        goto oNvC5;
        V9gAH:
        $id_level = $this->input->get("\151\144");
        goto tgRmS;
        FPNna:
        $data["\151\x64\137\155\141\x70\145\x6c"] = '';
        goto GkH6w;
        Jiwml:
        $data["\x69\x64\x5f\146\x69\154\164\x65\x72"] = $type == null ? '' : $type;
        goto KhT3x;
        VIo54:
        jCc7p:
        goto FWwDQ;
        XJdi2:
        $setting = $this->dashboard->getSetting();
        goto HUGuu;
        q1fXu:
        $user = $this->ion_auth->user()->row();
        goto XJdi2;
        idHpH:
        $data["\x69\144\137\x67\x75\162\165"] = null;
        goto dXLXQ;
        FF7nt:
        $data["\x6b\145\154\141\x73"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt);
        goto gsmzD;
        V5qdm:
        $arrMapel = [];
        goto eyLWk;
        gcIqV:
        $data["\x6a\141\144\x77\x61\x6c\163"] = $this->cbt->getAllDataJadwal($guru->id_guru, null, $id_level);
        goto WHKs_;
        oNvC5:
        vrtk9:
        goto A4k7K;
        kH_DP:
        wjEga:
        goto u2wjk;
        Zxlu2:
        $data["\151\x64\x5f\x6c\x65\x76\145\x6c"] = null;
        goto LPVMv;
        Q2rhZ:
        $this->load->view("\x63\142\x74\57\x6a\x61\144\167\x61\x6c\57\x64\141\164\x61");
        goto pYeMp;
        CI5Qk:
        $data["\155\x6f\x64\x65"] = $mode == null ? "\61" : $mode;
        goto vtonR;
        h0pDI:
        $data["\x6c\x65\x76\x65\154"] = $level;
        goto r6p6A;
        LIPZW:
        foreach ($terpakai as $idj => $rows) {
            $jadwal_terpakai[$idj] = count($rows);
            DI0oM:
        }
        goto Nyf6a;
        tgRmS:
        $data["\x69\x64\x5f\x6c\145\x76\145\x6c"] = $id_level;
        goto Iqqhe;
        idBGo:
        goto vrtk9;
        goto VIo54;
        NyL68:
        $data["\x69\144\x5f\x67\165\x72\x75"] = '';
        goto dLz47;
        C3t_j:
        $data["\152\x61\144\x77\x61\154\163"] = $this->cbt->getAllDataJadwal($guru->id_guru);
        goto coGoX;
        er3og:
    }
    public function add($id_jadwal)
    {
        goto RQAah;
        ynlag:
        goto s4shw;
        goto pGXjp;
        rq0_o:
        $data["\163\155\x74\x5f\x61\143\x74\x69\x76\x65"] = $smt;
        goto k1I2C;
        SyJVb:
        $this->load->view("\137\164\x65\x6d\x70\154\141\164\145\x73\x2f\x64\x61\x73\x68\142\157\x61\x72\144\57\x5f\x66\x6f\157\x74\145\162");
        goto J0m1S;
        Jt4i1:
        $data["\147\x75\162\165"] = $guru;
        goto If95S;
        WyeUW:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto ObVnR;
        ySeaU:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto rq0_o;
        QdOqs:
        $this->load->view("\155\x65\x6d\x62\145\162\163\x2f\147\165\x72\x75\57\164\145\x6d\160\x6c\141\x74\145\x73\57\146\x6f\x6f\164\145\162");
        goto GJLFy;
        Ic0fm:
        foreach ($mapel as $m) {
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            kxHL3:
        }
        goto Ae13R;
        RQAah:
        $enable = $this->input->get("\x65\156\x61\142\154\x65", true);
        goto bi4Sd;
        XVPTa:
        $tp = $this->dashboard->getTahunActive();
        goto zSKJa;
        CHLup:
        $data["\x73\x65\163\151\x73"] = $this->dropdown->getAllSesi();
        goto ydspN;
        OeGqu:
        $data["\x67\x75\x72\x75"] = $gurus;
        goto rZS6t;
        A40Qr:
        $data["\x6b\145\154\x61\x73"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt);
        goto Ahc_X;
        rZS6t:
        $data["\x6d\141\160\x65\154"] = $this->dropdown->getAllMapel();
        goto uxyfr;
        If95S:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto eQwpM;
        whHs7:
        s4shw:
        goto uDp4P;
        pGXjp:
        X1N1q:
        goto IZblr;
        ObVnR:
        $data["\164\x70\137\x61\143\x74\151\166\145"] = $tp;
        goto ySeaU;
        jQnDz:
        $data["\x72\x75\141\x6e\147\163"] = $this->cbt->getAllRuang();
        goto CHLup;
        de3vt:
        $data["\x6a\x61\x64\x77\141\x6c"] = $this->cbt->getJadwalById($id_jadwal);
        goto ynlag;
        k1I2C:
        if ($id_jadwal == 0) {
            goto X1N1q;
        }
        goto de3vt;
        IZblr:
        $data["\x6a\x61\144\167\141\x6c"] = json_decode(json_encode($this->cbt->dummyJadwal()));
        goto whHs7;
        ydspN:
        $data["\x6a\x65\x6e\151\x73"] = $this->cbt->getAllJenisUjian();
        goto A40Qr;
        uxyfr:
        $this->load->view("\137\x74\x65\155\x70\154\141\164\x65\x73\x2f\144\x61\163\x68\x62\x6f\141\x72\144\x2f\137\150\145\x61\x64\145\x72", $data);
        goto EtkMk;
        zSKJa:
        $smt = $this->dashboard->getSemesterActive();
        goto WyeUW;
        fB18A:
        Qma9L:
        goto ZhNAV;
        eQwpM:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto dSaH4;
        wWhQG:
        $data["\x6d\x61\160\x65\154"] = $arrMapel;
        goto Vt8Sb;
        bi4Sd:
        $user = $this->ion_auth->user()->row();
        goto n31gb;
        Vt8Sb:
        $this->load->view("\155\x65\155\x62\x65\162\163\x2f\147\x75\x72\x75\x2f\x74\145\x6d\x70\154\x61\164\x65\163\x2f\150\x65\x61\x64\x65\x72", $data);
        goto dPRvd;
        Ahc_X:
        $data["\144\x69\163\141\142\x6c\145\137\157\160\163\151"] = $enable != null && $enable == 1;
        goto k2UWX;
        EtkMk:
        $this->load->view("\143\142\x74\x2f\152\141\x64\x77\141\x6c\x2f\x61\x64\144");
        goto SyJVb;
        dPRvd:
        $this->load->view("\x63\x62\x74\x2f\152\141\x64\x77\x61\x6c\x2f\141\144\x64");
        goto QdOqs;
        n31gb:
        $data = ["\165\163\145\x72" => $user, "\x6a\165\x64\165\x6c" => $id_jadwal == 0 ? "\x54\141\155\142\x61\150\40\112\x61\x64\167\x61\154\x20\x55\152\x69\141\156" : "\x45\x64\151\x74\40\x4a\x61\x64\x77\x61\x6c\x20\125\152\x69\141\156", "\163\x75\142\152\x75\x64\165\154" => "\112\x61\144\x77\x61\x6c", "\163\x65\164\164\x69\156\147" => $this->dashboard->getSetting()];
        goto XVPTa;
        lFv2r:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto Jt4i1;
        dSaH4:
        $arrMapel = [];
        goto Ic0fm;
        Ae13R:
        it5nD:
        goto wWhQG;
        k2UWX:
        if ($this->ion_auth->is_admin()) {
            goto Qma9L;
        }
        goto lFv2r;
        uDp4P:
        $gurus = $this->dropdown->getAllGuru();
        goto jQnDz;
        J0m1S:
        prwr6:
        goto QSjRy;
        GJLFy:
        goto prwr6;
        goto fB18A;
        ZhNAV:
        $data["\160\162\x6f\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto OeGqu;
        QSjRy:
    }
    public function getBankMapel($id_mapel)
    {
        goto neqoj;
        O63s6:
        foreach ($banks as $key => $bank) {
            goto yKgUM;
            eQCzi:
            if (!($ada1 && $ada2 && $ada3 && $ada4 && $ada5)) {
                goto iPY0h;
            }
            goto lsvor;
            EVYYK:
            $num1 = isset($cek_soal["\x31"]) ? count($cek_soal["\61"]) : 0;
            goto TU_71;
            yKgUM:
            $cek_soal = $this->cbt->getJumlahJenisSoal($key);
            goto EVYYK;
            KN4OU:
            $num5 = isset($cek_soal["\65"]) ? count($cek_soal["\65"]) : 0;
            goto nYZzW;
            AvowC:
            $ada5 = $num5 == (int) $bank->tampil_esai;
            goto eQCzi;
            cvNGf:
            $ada4 = $num4 == (int) $bank->tampil_isian;
            goto AvowC;
            AE6VK:
            $num3 = isset($cek_soal["\x33"]) ? count($cek_soal["\63"]) : 0;
            goto qsHbP;
            vhYw0:
            $ada2 = $num2 == (int) $bank->tampil_kompleks;
            goto ChDYB;
            lsvor:
            $filtered[$key] = $bank->bank_kode;
            goto eMj78;
            qsHbP:
            $num4 = isset($cek_soal["\x34"]) ? count($cek_soal["\x34"]) : 0;
            goto KN4OU;
            eMj78:
            iPY0h:
            goto EoDjF;
            nYZzW:
            $ada1 = $num1 == (int) $bank->tampil_pg;
            goto vhYw0;
            EoDjF:
            En7fV:
            goto p4Iw9;
            ChDYB:
            $ada3 = $num3 == (int) $bank->tampil_jodohkan;
            goto cvNGf;
            TU_71:
            $num2 = isset($cek_soal["\62"]) ? count($cek_soal["\x32"]) : 0;
            goto AE6VK;
            p4Iw9:
        }
        goto w7K2I;
        kEmnr:
        $filtered = [];
        goto O63s6;
        MutU4:
        $banks = $this->cbt->getAllBankSoalByMapel($tp->id_tp, $smt->id_smt, $id_mapel);
        goto kEmnr;
        neqoj:
        $tp = $this->dashboard->getTahunActive();
        goto jID8L;
        jID8L:
        $smt = $this->dashboard->getSemesterActive();
        goto MutU4;
        my7a2:
        $this->output_json($filtered);
        goto j3C1g;
        w7K2I:
        XVQ10:
        goto my7a2;
        j3C1g:
    }
    public function saveJadwal()
    {
        goto Xx91H;
        Gi2v8:
        $status = FALSE;
        goto k_yqK;
        yK9v5:
        d5CQi:
        goto w6RL1;
        FOFxx:
        goto g63WU;
        goto UjKr9;
        Xx91H:
        $tp = $this->dashboard->getTahunActive();
        goto JEzpY;
        wyL0F:
        $id = $this->input->post("\x69\x64\x5f\x6a\x61\x64\x77\141\x6c", true);
        goto Dd67o;
        UjKr9:
        kyKyd:
        goto eezbH;
        JEzpY:
        $smt = $this->dashboard->getSemesterActive();
        goto F5ngg;
        k_yqK:
        goto d5CQi;
        goto FEIFu;
        eezbH:
        $this->logging->saveLog(3, "\x6d\x65\x6e\141\155\142\x61\x68\x20\152\x61\x64\167\141\x6c\40\160\145\154\141\152\x61\162\141\x6e");
        goto ZJ8MT;
        Dd67o:
        if (!$id) {
            goto kyKyd;
        }
        goto fyJQT;
        yBw0H:
        $res = $this->cbt->saveJadwalUjian($tp->id_tp, $smt->id_smt);
        goto WGdu5;
        XLceF:
        $status = $res;
        goto yK9v5;
        F5ngg:
        if ($this->input->post()) {
            goto W6q_n;
        }
        goto tVb6_;
        FEIFu:
        W6q_n:
        goto yBw0H;
        ySbnm:
        $this->output_json($data);
        goto Gc8ji;
        ZJ8MT:
        g63WU:
        goto ySbnm;
        tVb6_:
        $data["\155\x65\x73\163\141\x67\145"] = "\113\x65\x73\x61\x6c\x61\150\141\x6e\x20\x34\60\x34";
        goto Gi2v8;
        w6RL1:
        $data["\163\x75\x63\x63\x65\x73\x73"] = $status;
        goto wyL0F;
        WGdu5:
        $data["\x6d\x65\x73\163\141\x67\x65"] = $res ? "\x4a\x61\144\x77\x61\154\40\x62\x65\x72\150\x61\x73\x69\154\40\144\x69\x73\x69\155\160\141\x6e" : "\x4a\141\x64\167\x61\154\40\163\165\x64\141\150\x20\x61\x64\141";
        goto XLceF;
        fyJQT:
        $this->logging->saveLog(4, "\x6d\x65\156\x67\x65\x64\151\164\x20\152\141\144\167\x61\154\x20\160\145\x6c\x61\x6a\141\x72\x61\156");
        goto FOFxx;
        Gc8ji:
    }
    public function deleteJadwal()
    {
        goto dKVL1;
        c5HQc:
        if ($terpakai && $jadwal->rekap == 0) {
            goto ARvBC;
        }
        goto a9UPZ;
        wMbGf:
        $this->logging->saveLog(5, "\155\x65\156\x67\x68\x61\160\165\163\x20\x6a\x61\144\167\141\154\x20\165\x6a\x69\141\156");
        goto te1Q5;
        woEcq:
        $terpakai = isset($jadwal_dikerjakan[$id]) && count($jadwal_dikerjakan[$id]) > 0;
        goto o3D6B;
        HaDHP:
        $hapusDurasiSiswa = $this->master->delete("\143\142\x74\137\144\165\x72\x61\163\151\137\163\151\x73\167\x61", $id, "\x69\x64\137\152\141\x64\x77\141\x6c");
        goto wMbGf;
        iyrmg:
        $data["\155\x65\x73\x73\x61\x67\x65"] = "\110\x61\163\151\x6c\x20\x55\152\x69\141\x6e\40\142\145\x6c\x75\x6d\x20\x64\x69\x72\x65\153\141\160";
        goto xYs3D;
        te1Q5:
        $data["\163\164\141\x74\x75\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa;
        goto qTbbT;
        qTbbT:
        $data["\x6d\x65\163\x73\141\147\x65"] = "\142\145\162\x68\141\163\x69\x6c";
        goto ttSlI;
        Oyrc9:
        VPHpH:
        goto VQNz7;
        PsoHI:
        $data["\x73\164\141\x74\165\x73"] = false;
        goto iyrmg;
        VQNz7:
        $hapusNilaiSiswa = $this->master->delete("\x63\x62\164\137\x73\157\x61\x6c\x5f\163\151\163\x77\141", $id, "\x69\x64\x5f\152\141\x64\167\x61\x6c");
        goto HaDHP;
        JHRb4:
        $this->output_json($data);
        goto G96XB;
        obVh8:
        goto stCvC;
        goto MHzWQ;
        xYs3D:
        stCvC:
        goto JHRb4;
        c1Ore:
        goto qZigZ;
        goto Oyrc9;
        JvK7t:
        $jadwal = $this->cbt->getJadwalById($id);
        goto c5HQc;
        dKVL1:
        $id = $this->input->get("\x69\x64\137\x6a\141\x64\x77\141\154", true);
        goto oQLWp;
        Ny369:
        $data["\163\164\141\164\x75\x73"] = false;
        goto Epm2M;
        MHzWQ:
        ARvBC:
        goto PsoHI;
        a9UPZ:
        if ($this->master->delete("\143\142\164\x5f\152\141\x64\x77\x61\x6c", $id, "\x69\144\x5f\152\x61\144\x77\x61\x6c")) {
            goto VPHpH;
        }
        goto Ny369;
        Epm2M:
        $data["\x6d\x65\163\163\141\x67\x65"] = "\x4a\141\144\x77\x61\154\x20\125\152\151\141\x6e\40\x73\145\x64\141\x6e\147\40\144\x69\147\x75\x6e\x61\x6b\x61\x6e";
        goto c1Ore;
        o3D6B:
        $data["\x73\x74\141\x74\x75\163"] = false;
        goto JvK7t;
        oQLWp:
        $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai();
        goto woEcq;
        ttSlI:
        qZigZ:
        goto obVh8;
        G96XB:
    }
    public function deleteAllJadwal()
    {
        goto ve6eW;
        hDa0G:
        $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai();
        goto xCIe3;
        AvNh5:
        $this->output_json($data);
        goto ynBw0;
        GFs1a:
        XxiKp:
        goto UCxuu;
        eDiBU:
        ob_end_clean();
        goto ihL6r;
        bkOEB:
        $counts = array_count_values($backuped);
        goto ST7ah;
        FABYo:
        $count_terpakai = array_count_values($digunakan);
        goto bkOEB;
        cOZ4q:
        $data["\155\145\163\163\x61\x67\x65"] = "\112\x61\144\x77\141\154\x20\125\x6a\151\141\x6e\40\x73\x65\144\141\156\x67\40\144\151\147\x75\156\141\153\141\156";
        goto S3OsW;
        UyhtF:
        $data["\x6d\x65\163\163\141\147\145"] = "\110\141\163\151\154\x20\x55\x6a\151\141\156\x20\x62\145\x6c\165\155\40\x64\x69\x72\145\x6b\x61\x70";
        goto wDvHK;
        ihL6r:
        $data["\x73\164\141\164\165\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa;
        goto KNSy_;
        FhM68:
        $data["\163\x74\141\164\x75\x73"] = false;
        goto cOZ4q;
        Zy0Ac:
        foreach ($jadwals as $jadwal) {
            goto Zapk4;
            I13VD:
            Vyzrn:
            goto t0JWq;
            htoJQ:
            array_push($backuped, $jadwal->rekap);
            goto rI1_R;
            rI1_R:
            array_push($digunakan, $terpakai);
            goto I13VD;
            Zapk4:
            $terpakai = isset($jadwal_dikerjakan[$jadwal->id_jadwal]) && count($jadwal_dikerjakan[$jadwal->id_jadwal]) > 0 ? 1 : 0;
            goto htoJQ;
            t0JWq:
        }
        goto muz3g;
        ve6eW:
        $arrId = json_decode($this->input->post("\x63\150\145\x63\x6b\x65\144", true));
        goto KgWex;
        KNSy_:
        $data["\155\x65\x73\x73\x61\x67\145"] = "\x62\x65\162\x68\x61\163\x69\154";
        goto kvMIw;
        lGa5R:
        ob_end_clean();
        goto AxmkT;
        Zdo5d:
        $jadwals = $this->cbt->getJadwalByArrId($arrId);
        goto hDa0G;
        QDubK:
        $data["\144\151\x67\165\156\141\x6b\x61\156"] = $count_terpakai;
        goto LmO0a;
        muz3g:
        fpA6M:
        goto FABYo;
        XNe0w:
        $this->logging->saveLog(5, "\155\145\x6e\147\150\x61\160\x75\x73\40\x6a\141\x64\x77\141\x6c\40\165\152\x69\141\156");
        goto eDiBU;
        l1SH4:
        ob_end_clean();
        goto FhM68;
        wDvHK:
        TyF8f:
        goto QDubK;
        ST7ah:
        if ($count_terpakai[1] > 0 && $counts[0] > 0) {
            goto ScUIm;
        }
        goto YMFmd;
        SY6fj:
        $hapusDurasiSiswa = $this->master->delete("\x63\142\x74\137\144\165\162\141\x73\x69\x5f\163\151\x73\167\141", $arrId, "\151\x64\137\x6a\x61\144\167\x61\x6c");
        goto XNe0w;
        SOK6P:
        goto TyF8f;
        goto xvZYa;
        xCIe3:
        $backuped = [];
        goto iAO_C;
        S3OsW:
        goto gaj5f;
        goto GFs1a;
        xvZYa:
        ScUIm:
        goto lGa5R;
        kvMIw:
        gaj5f:
        goto SOK6P;
        YMFmd:
        if ($this->master->delete("\143\142\x74\x5f\x6a\141\x64\x77\x61\x6c", $arrId, "\x69\x64\137\x6a\x61\x64\167\x61\154")) {
            goto XxiKp;
        }
        goto l1SH4;
        AxmkT:
        $data["\x73\x74\x61\x74\165\163"] = false;
        goto UyhtF;
        iAO_C:
        $digunakan = [];
        goto Zy0Ac;
        LmO0a:
        $data["\x62\x61\143\153\165\x70"] = $counts;
        goto AvNh5;
        KgWex:
        ob_start();
        goto Zdo5d;
        UCxuu:
        $hapusNilaiSiswa = $this->master->delete("\143\x62\x74\137\163\x6f\141\154\137\163\x69\x73\x77\141", $arrId, "\x69\x64\137\152\141\x64\x77\x61\154");
        goto SY6fj;
        ynBw0:
    }
}
