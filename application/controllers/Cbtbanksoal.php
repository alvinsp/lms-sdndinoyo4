<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtbanksoal extends CI_Controller
{
    public function __construct()
    {
        goto p_Kzr;
        arhQz:
        redirect("\141\165\164\x68");
        goto qxSlr;
        YwR_3:
        show_error("\x48\141\156\x79\x61\40\101\x64\x6d\151\156\x69\x73\164\x72\x61\164\x6f\x72\x20\144\141\x6e\40\x67\x75\x72\165\40\171\141\156\147\x20\144\x69\142\145\x72\151\x20\150\141\153\40\x75\156\x74\165\x6b\40\155\145\x6e\147\x61\153\x73\145\163\x20\x68\141\x6c\141\x6d\x61\156\40\151\x6e\151\54\x20\74\x61\40\150\162\145\146\x3d\42" . base_url("\144\141\x73\x68\x62\157\x61\x72\x64") . "\x22\76\x4b\145\x6d\142\141\154\x69\x20\x6b\145\40\x6d\x65\x6e\x75\40\141\x77\x61\x6c\74\57\141\76", 403, "\x41\153\x73\145\x73\40\124\145\x72\154\x61\162\141\x6e\x67");
        goto Zf0xM;
        LUZuI:
        $this->load->model("\x4b\145\x6c\141\163\137\155\x6f\144\145\154", "\153\145\154\x61\x73");
        goto CoKNP;
        maXWJ:
        $this->load->library(["\x64\x61\164\141\x74\141\x62\154\145\163", "\146\x6f\x72\x6d\137\x76\x61\154\151\144\x61\x74\151\x6f\x6e"]);
        goto HXM6o;
        F07kY:
        if (!$this->ion_auth->logged_in()) {
            goto SAn1V;
        }
        goto QyRAg;
        p_Kzr:
        parent::__construct();
        goto F07kY;
        TvAhU:
        $this->load->library("\165\160\154\x6f\x61\144");
        goto maXWJ;
        Ut3tZ:
        goto TgD12;
        goto yWsa7;
        yWsa7:
        SAn1V:
        goto arhQz;
        QyRAg:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) {
            goto vVvaO;
        }
        goto YwR_3;
        OnSBm:
        $this->load->model("\x44\141\x73\150\142\157\x61\x72\x64\x5f\x6d\x6f\144\145\x6c", "\144\x61\163\150\142\157\x61\162\144");
        goto IKWTc;
        qxSlr:
        TgD12:
        goto TvAhU;
        IKWTc:
        $this->load->model("\x43\142\164\x5f\x6d\157\x64\x65\x6c", "\x63\x62\164");
        goto UMzAS;
        HXM6o:
        $this->form_validation->set_error_delimiters('', '');
        goto r90PX;
        r90PX:
        $this->load->model("\x4d\141\x73\x74\x65\x72\x5f\155\157\144\145\154", "\x6d\x61\x73\x74\x65\x72");
        goto OnSBm;
        CoKNP:
        $this->load->model("\x44\162\157\160\144\157\x77\156\137\x6d\157\144\x65\154", "\x64\162\157\x70\144\x6f\x77\x6e");
        goto d9NAh;
        Zf0xM:
        vVvaO:
        goto Ut3tZ;
        UMzAS:
        $this->load->model("\x4c\x6f\147\137\x6d\157\x64\x65\154", "\154\157\147\147\x69\x6e\x67");
        goto LUZuI;
        d9NAh:
    }
    public function output_json($data, $encode = true)
    {
        goto xaVUB;
        wrsS7:
        z1XiJ:
        goto k34yq;
        KLVVH:
        $data = json_encode($data);
        goto wrsS7;
        k34yq:
        $this->output->set_content_type("\x61\x70\160\x6c\x69\143\x61\164\151\157\x6e\x2f\152\x73\157\156")->set_output($data);
        goto WeZpg;
        xaVUB:
        if (!$encode) {
            goto z1XiJ;
        }
        goto KLVVH;
        WeZpg:
    }
    public function index()
    {
        goto ZrApA;
        zeybM:
        $data["\151\144\x5f\x67\x75\x72\x75"] = null;
        goto AUUyV;
        A9ofw:
        zC7QX:
        goto BNR0P;
        VDJIe:
        $data["\151\144\137\146\151\x6c\164\x65\162"] = $type == null ? '' : $type;
        goto stdjd;
        Of334:
        if ($type == "\62") {
            goto vSozb;
        }
        goto jI93Y;
        VSXYe:
        $data["\x69\x64\137\147\165\x72\165"] = '';
        goto VU06D;
        Mep98:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto ZNVif;
        Iad7N:
        $data["\x69\144\137\154\x65\x76\145\x6c"] = $id_level;
        goto Cmq_t;
        xyVMx:
        $data["\x62\141\156\153\x73"] = $this->cbt->getDataBank(null, $id_mapel);
        goto oKsaX;
        DZ1ch:
        $data["\151\x64\137\x6c\145\166\x65\154"] = $id_level;
        goto TMvq6;
        jXeJx:
        $data["\151\144\137\155\x61\160\x65\154"] = '';
        goto jEP8K;
        g1P_z:
        Yw5qi:
        goto MckVe;
        qJoDm:
        goto Q1CHS;
        goto vd2eD;
        ihFrz:
        $data["\151\144\x5f\x6d\x61\x70\145\154"] = '';
        goto TqxsJ;
        sk1VO:
        $data["\x66\x69\154\164\145\162\163"] = ["\x30" => "\x53\145\x6d\x75\x61", "\x31" => "\x47\x75\x72\165", "\x32" => "\115\x61\x70\x65\x6c", "\63" => "\x4c\x65\x76\x65\x6c"];
        goto VDJIe;
        h1yHn:
        foreach ($terpakai as $idj => $rows) {
            $jadwal_terpakai[$idj] = count($rows);
            XSBJp:
        }
        goto Xdoyp;
        HHXe4:
        $data["\151\144\137\155\x61\160\145\x6c"] = '';
        goto zra22;
        PXvFF:
        $data["\163\155\x74\x5f\141\x63\164\151\166\x65"] = $smt;
        goto St0U1;
        GtSGx:
        $data["\151\144\137\154\145\166\x65\x6c"] = null;
        goto qJoDm;
        yccO5:
        $data["\x69\x64\x5f\x6d\141\x70\145\x6c"] = $id_mapel;
        goto fu2Qk;
        enASg:
        $id_level = $this->input->get("\151\x64");
        goto Iad7N;
        QYDXa:
        $data["\x74\157\x74\141\154\x5f\x73\x69\x73\167\141"] = $jadwal_terpakai;
        goto Y3tJY;
        stdjd:
        if ($type == "\x30") {
            goto XjIwW;
        }
        goto vWHTr;
        LFsD_:
        $data["\x69\144\137\x67\x75\x72\165"] = $guru->id_guru;
        goto xinrk;
        P2xOH:
        $data["\x69\144\x5f\154\x65\166\x65\154"] = '';
        goto Kd3Qi;
        wnsOx:
        $data["\x6d\x61\160\145\154\x73"] = $this->dropdown->getAllMapel();
        goto suhiF;
        rKqKr:
        o6EwV:
        goto BZZGo;
        suhiF:
        $mode = $this->input->get("\155\x6f\144\x65");
        goto ecIO9;
        hVYHl:
        goto Q1CHS;
        goto Xmz2D;
        lHM9W:
        $data["\x6b\145\154\x61\x73"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt);
        goto sk1VO;
        jI93Y:
        if ($type == "\x33") {
            goto bX9nz;
        }
        goto zeybM;
        zra22:
        $data["\151\144\x5f\x6c\x65\166\145\x6c"] = '';
        goto hVYHl;
        Y3tJY:
        if ($this->ion_auth->is_admin()) {
            goto RYtBX;
        }
        goto Mep98;
        S9o1l:
        $data["\160\162\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto JOYEt;
        Lf2qN:
        $this->load->view("\x5f\164\x65\155\x70\x6c\141\x74\145\x73\x2f\x64\141\163\150\142\157\141\162\x64\57\137\150\145\141\144\145\x72", $data);
        goto JoGz1;
        vg6ic:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto lziMj;
        znyW3:
        if ($type == "\63") {
            goto CUei_;
        }
        goto LFsD_;
        r7SaE:
        $tp = $this->master->getTahunActive();
        goto D7rzC;
        ZNVif:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto LVdsP;
        W4aJ3:
        $data["\x6b\145\154\x61\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt);
        goto fbfDS;
        fbfDS:
        $data["\x66\x69\154\164\x65\162\163"] = ["\x30" => "\123\x65\x6d\x75\x61", "\62" => "\115\x61\160\x65\154", "\63" => "\114\145\166\145\x6c"];
        goto CHVZI;
        PO08u:
        CUei_:
        goto Kc6Gi;
        lziMj:
        $data["\164\160\x5f\x61\143\x74\x69\x76\145"] = $tp;
        goto eauEk;
        jEP8K:
        Q1CHS:
        goto Lf2qN;
        VU06D:
        $data["\x69\144\x5f\x6c\145\x76\145\154"] = '';
        goto r1lXp;
        Jqa0n:
        $setting = $this->dashboard->getSetting();
        goto xs86G;
        zPPyj:
        $data["\x69\144\x5f\x6c\x65\x76\145\x6c"] = '';
        goto XHpel;
        Rt1B6:
        $data["\155\x6f\144\145"] = $mode == null ? "\x31" : $mode;
        goto X6wno;
        Xdoyp:
        HxWqX:
        goto QYDXa;
        ecIO9:
        $type = $this->input->get("\x74\171\160\x65");
        goto Rt1B6;
        AUUyV:
        $data["\x69\x64\x5f\155\141\x70\145\154"] = null;
        goto GtSGx;
        I1cZG:
        $data["\x69\x64\137\147\165\x72\x75"] = '';
        goto ihFrz;
        LVdsP:
        $data["\x67\165\162\165"] = $guru;
        goto XFeld;
        Qz9PG:
        $data["\142\141\x6e\153\x73"] = $this->cbt->getDataBank($id_guru);
        goto HHXe4;
        X_Z91:
        RYtBX:
        goto S9o1l;
        oKsaX:
        $data["\x69\x64\137\147\165\162\x75"] = '';
        goto zPPyj;
        C94Et:
        $this->load->view("\x5f\x74\145\155\x70\x6c\x61\164\x65\163\57\144\141\163\x68\x62\157\141\x72\144\57\x5f\146\157\157\164\x65\162");
        goto g1P_z;
        iuQDO:
        $data["\x69\x64\x5f\x67\165\x72\165"] = '';
        goto jXeJx;
        z_3aa:
        $id_mapel = $this->input->get("\x69\144");
        goto cMRHi;
        vd2eD:
        XjIwW:
        goto ANNfj;
        Cmq_t:
        $data["\x62\141\156\153\163"] = $this->cbt->getDataBank(null, null, $id_level);
        goto iuQDO;
        r1lXp:
        goto T521O;
        goto PO08u;
        Kc6Gi:
        $id_level = $this->input->get("\151\144");
        goto DZ1ch;
        j5UGI:
        goto Q1CHS;
        goto A9ofw;
        JOYEt:
        $data["\147\165\x72\165\x73"] = $this->dropdown->getAllGuru();
        goto lHM9W;
        IHISh:
        $jadwal_terpakai = [];
        goto h1yHn;
        YuBtn:
        $this->load->view("\x6d\145\x6d\x62\x65\162\x73\x2f\x67\x75\162\x75\x2f\x74\x65\155\x70\154\141\164\145\163\x2f\150\x65\141\144\x65\x72", $data);
        goto DeqrZ;
        CHVZI:
        $data["\x69\144\x5f\x66\x69\x6c\x74\145\162"] = $type == null ? '' : $type;
        goto T1HPP;
        xinrk:
        $data["\142\x61\156\153\x73"] = $this->cbt->getDataBank($guru->id_guru);
        goto MfB2K;
        Xmz2D:
        vSozb:
        goto z_3aa;
        D7rzC:
        $smt = $this->master->getSemesterActive();
        goto vg6ic;
        TMvq6:
        $data["\142\141\x6e\153\163"] = $this->cbt->getDataBank($guru->id_guru, null, $id_level);
        goto I1cZG;
        BZZGo:
        $id_mapel = $this->input->get("\151\144");
        goto yccO5;
        xs86G:
        $data = ["\165\163\x65\x72" => $user, "\152\x75\144\x75\x6c" => "\102\141\x6e\153\x20\123\157\x61\154", "\x73\x75\142\x6a\x75\144\x75\154" => "\x53\x6f\141\x6c", "\x73\145\164\x74\x69\156\x67" => $setting];
        goto r7SaE;
        ZrApA:
        $user = $this->ion_auth->user()->row();
        goto Jqa0n;
        X6kUp:
        $data["\151\144\137\x6d\141\x70\145\154"] = null;
        goto Bk32w;
        XFeld:
        $data["\147\165\162\x75\x73"] = $nguru;
        goto W4aJ3;
        MfB2K:
        $data["\151\144\x5f\155\x61\x70\145\x6c"] = '';
        goto P2xOH;
        TqxsJ:
        T521O:
        goto YuBtn;
        BNR0P:
        $id_guru = $this->input->get("\151\x64");
        goto Vq6mJ;
        ANNfj:
        $data["\142\141\156\153\163"] = $this->cbt->getDataBank();
        goto y1iHi;
        T1HPP:
        if ($type == "\x32") {
            goto o6EwV;
        }
        goto znyW3;
        JoGz1:
        $this->load->view("\x63\142\164\x2f\142\141\156\153\163\157\x61\154\57\x64\x61\164\x61");
        goto C94Et;
        Bk32w:
        $data["\x69\144\x5f\x6c\x65\x76\x65\x6c"] = null;
        goto j5UGI;
        cMRHi:
        $data["\x69\x64\137\x6d\x61\x70\145\154"] = $id_mapel;
        goto xyVMx;
        vHiLj:
        $this->load->view("\155\x65\155\142\x65\162\x73\57\147\x75\x72\x75\57\164\145\155\x70\154\x61\164\x65\x73\x2f\146\157\x6f\x74\145\162");
        goto NKV4R;
        St0U1:
        $data["\x6c\145\x76\x65\154\x73"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto wnsOx;
        Vq6mJ:
        $data["\x69\144\137\x67\x75\x72\165"] = $id_guru;
        goto Qz9PG;
        DeqrZ:
        $this->load->view("\x63\142\x74\x2f\x62\x61\156\x6b\x73\x6f\141\154\57\144\x61\x74\x61");
        goto vHiLj;
        eauEk:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto PXvFF;
        NKV4R:
        goto Yw5qi;
        goto X_Z91;
        Kd3Qi:
        goto T521O;
        goto rKqKr;
        vWHTr:
        if ($type == "\x31") {
            goto zC7QX;
        }
        goto Of334;
        fu2Qk:
        $data["\x62\x61\156\153\x73"] = $this->cbt->getDataBank($guru->id_guru, $id_mapel);
        goto VSXYe;
        X6wno:
        $terpakai = $this->cbt->getBankTerpakai();
        goto IHISh;
        y1iHi:
        $data["\x69\144\x5f\147\165\162\165"] = null;
        goto X6kUp;
        XHpel:
        goto Q1CHS;
        goto I6Fx7;
        I6Fx7:
        bX9nz:
        goto enASg;
        MckVe:
    }
    public function data($guru = null)
    {
        $this->output_json($this->cbt->getDataBank($guru), false);
    }
    public function dataTable($guru = null)
    {
        $this->output_json($this->cbt->getDataTableBank($guru), false);
    }
    public function getMapelGuru()
    {
        goto VdLCm;
        am_A5:
        KrL2e:
        goto xBuf4;
        eRPHQ:
        $smt = $this->master->getSemesterActive();
        goto HUHkA;
        mcXz3:
        foreach ($mapel as $m) {
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            SGIyF:
        }
        goto gtl7Y;
        VdLCm:
        $id_guru = $this->input->get("\x69\144\x5f\x67\165\x72\x75", true);
        goto A_4wm;
        HUHkA:
        $mapel_guru = $this->kelas->getGuruMapelKelas($id_guru, $tp->id_tp, $smt->id_smt);
        goto Iud7y;
        gtl7Y:
        GE5cd:
        goto am_A5;
        xBuf4:
        $this->output_json($arrMapel);
        goto H3KZp;
        Iud7y:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto bm5t_;
        HnxDB:
        if (!($mapel != null)) {
            goto KrL2e;
        }
        goto mcXz3;
        bm5t_:
        $arrMapel = [];
        goto HnxDB;
        A_4wm:
        $tp = $this->master->getTahunActive();
        goto eRPHQ;
        H3KZp:
    }
    public function getGuruMapel()
    {
        goto mLi41;
        dI2WX:
        $this->output_json($arrGuru);
        goto UO0bT;
        V0EMy:
        foreach ($mapel_guru as $guru) {
            goto Th9gi;
            SAZaY:
            if (!($mapel != null)) {
                goto FzvdD;
            }
            goto lxzCi;
            lxzCi:
            foreach ($mapel as $m) {
                goto IErwu;
                VJL_J:
                Zyflr:
                goto iU_1f;
                kr68q:
                $arrGuru[$guru->id_guru] = $guru->nama_guru;
                goto uKWoF;
                IErwu:
                if (!(isset($m->id_mapel) && $m->id_mapel == $id_mapel)) {
                    goto Li0gw;
                }
                goto kr68q;
                uKWoF:
                Li0gw:
                goto VJL_J;
                iU_1f:
            }
            goto l1YwD;
            l1YwD:
            dqXQQ:
            goto cBiJr;
            Th9gi:
            $mapel = json_decode(json_encode(unserialize($guru->mapel_kelas)));
            goto SAZaY;
            cBiJr:
            FzvdD:
            goto TVChm;
            TVChm:
            J2N9N:
            goto w837z;
            w837z:
        }
        goto V0IPC;
        mLi41:
        $id_mapel = $this->input->get("\151\144\137\x6d\141\x70\x65\154", true);
        goto wYYPA;
        aj41p:
        $mapel_guru = $this->kelas->getMapelGuruKelas($tp->id_tp, $smt->id_smt);
        goto r2kAh;
        r2kAh:
        $arrGuru = [];
        goto V0EMy;
        wYYPA:
        $tp = $this->master->getTahunActive();
        goto x3QnP;
        x3QnP:
        $smt = $this->master->getSemesterActive();
        goto aj41p;
        V0IPC:
        dRq8p:
        goto dI2WX;
        UO0bT:
    }
    public function getKelasLevel()
    {
        goto SqG2m;
        b2sgF:
        $this->output_json(["\155\x61\160\x65\154" => $arrMapel, "\153\x65\x6c\141\x73" => count($arrKelas) > 0 ? $this->cbt->getKelasByLevel($level, $arrKelas) : []]);
        goto zQVaE;
        q3PGi:
        $tp = $this->master->getTahunActive();
        goto G2eCc;
        vZ6KU:
        CKkhd:
        goto b2sgF;
        zLjIZ:
        $arrMapel = [];
        goto AO5Nv;
        G2eCc:
        $smt = $this->master->getSemesterActive();
        goto b6f5L;
        SqG2m:
        $level = $this->input->get("\x6c\145\166\x65\x6c", true);
        goto ggDa3;
        b6f5L:
        $mapel_guru = $this->kelas->getGuruMapelKelas($id_guru, $tp->id_tp, $smt->id_smt);
        goto D7g35;
        AO5Nv:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto Tlk_N;
        Xh0UL:
        $id_mapel = $this->input->get("\x6d\141\160\145\x6c", true);
        goto q3PGi;
        D7g35:
        $arrKelas = [];
        goto zLjIZ;
        Tlk_N:
        foreach ($mapel as $m) {
            goto JGI7f;
            MGnRG:
            foreach ($m->kelas_mapel as $kls) {
                array_push($arrKelas, $kls->kelas);
                WXzma:
            }
            goto hVsq3;
            soKzl:
            if (!($id_mapel === $m->id_mapel)) {
                goto JpZlT;
            }
            goto MGnRG;
            xSFYm:
            FR2mX:
            goto PDX1F;
            JGI7f:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto soKzl;
            hVsq3:
            Wv8_U:
            goto eEzjt;
            eEzjt:
            JpZlT:
            goto xSFYm;
            PDX1F:
        }
        goto vZ6KU;
        ggDa3:
        $id_guru = $this->input->get("\x69\144\137\147\165\x72\165", true);
        goto Xh0UL;
        zQVaE:
    }
    public function addBank()
    {
        goto nFyyf;
        nFyyf:
        $user = $this->ion_auth->user()->row();
        goto ArbEs;
        E_1Ly:
        lqF4r:
        goto Fu9jp;
        U5jPc:
        $data["\x6d\x61\160\x65\154\137\147\165\x72\165"] = $mapel_guru;
        goto zorbh;
        SrFhT:
        $data["\x67\165\x72\x75\163"] = $this->dropdown->getAllGuru();
        goto eXPJl;
        ArESl:
        $data["\x74\160\137\141\143\164\x69\166\145"] = $tp;
        goto xYRqv;
        U2M1S:
        $arrKelas = [];
        goto fIjwX;
        ENyKP:
        $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\x64\x75\x6c" => "\102\x61\x6e\153\x20\x53\157\141\154", "\x73\x75\x62\x6a\165\x64\165\154" => "\102\165\x61\x74\x20\x42\x61\156\x6b\40\123\157\141\154"];
        goto rVp_O;
        ggrFU:
        $data["\x6a\x75\x72\x75\163\x61\x6e"] = $this->cbt->getAllJurusan();
        goto l07wI;
        evFh1:
        $this->load->view("\x63\142\x74\57\142\x61\156\153\163\157\x61\x6c\57\141\144\144");
        goto hrWva;
        d2qQe:
        foreach ($mapel[0]->kelas_mapel as $id_mapel) {
            array_push($arrId, $id_mapel->kelas);
            fGh8f:
        }
        goto L2wTo;
        pvjLf:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto RfuMN;
        Z2mPp:
        $data["\151\144\137\147\x75\x72\165"] = $guru->id_guru;
        goto X02ZD;
        ZpDtd:
        $data["\151\x64\x5f\147\x75\162\x75"] = '';
        goto SrFhT;
        fIjwX:
        foreach ($mapel as $m) {
            goto rZ8FT;
            uAMPv:
            foreach ($m->kelas_mapel as $kls) {
                $arrKelas[$m->id_mapel][] = ["\151\144\137\x6b\145\x6c\x61\163" => $kls->kelas, "\156\x61\155\x61\x5f\x6b\145\154\x61\163" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)];
                cvyiD:
            }
            goto mTRMJ;
            mTRMJ:
            LUMrZ:
            goto yYdpb;
            yYdpb:
            ZuiqH:
            goto UjCjg;
            rZ8FT:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto uAMPv;
            UjCjg:
        }
        goto xAcIh;
        AdUPH:
        pl9IC:
        goto U5jPc;
        n0puR:
        $this->load->view("\143\x62\x74\57\x62\141\x6e\153\163\x6f\141\x6c\x2f\141\144\144");
        goto ZnanX;
        fMSq2:
        $data["\160\x72\x6f\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto ratg2;
        xYRqv:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto I_i_a;
        lV6pp:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto ArESl;
        hrWva:
        $this->load->view("\x5f\164\x65\155\160\x6c\x61\x74\x65\x73\x2f\x64\141\x73\x68\x62\157\141\x72\144\x2f\137\x66\157\x6f\x74\x65\162");
        goto E_1Ly;
        OAN5E:
        if ($this->ion_auth->is_admin()) {
            goto VC4eE;
        }
        goto XO5g_;
        QTI4M:
        $data["\142\141\x6e\153"] = json_decode(json_encode($this->cbt->dummy($setting->jenjang)));
        goto CFBFt;
        OMBO7:
        $data["\147\x75\162\165"] = $guru;
        goto Z2mPp;
        l07wI:
        $data["\154\x65\x76\x65\x6c"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto XWfN_;
        zorbh:
        $data["\155\141\160\x65\154"] = $arrMapel;
        goto vylKq;
        Z01Mq:
        $this->load->view("\137\164\145\x6d\x70\154\x61\164\x65\x73\x2f\144\141\163\x68\x62\157\x61\x72\x64\x2f\137\150\145\x61\x64\145\x72", $data);
        goto evFh1;
        xAcIh:
        mN2NE:
        goto tXXi_;
        RfuMN:
        $arrMapel = [];
        goto U2M1S;
        ZnanX:
        $this->load->view("\x6d\145\x6d\142\145\162\163\57\x67\165\162\165\57\x74\x65\155\160\154\x61\164\x65\163\57\146\x6f\x6f\164\x65\x72");
        goto njyLT;
        twqho:
        if (!(count($mapel) > 0)) {
            goto pl9IC;
        }
        goto d2qQe;
        tXXi_:
        $arrId = [];
        goto twqho;
        L2wTo:
        ZzIz9:
        goto AdUPH;
        X02ZD:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto pvjLf;
        I_i_a:
        $data["\163\x6d\x74\137\141\143\164\x69\x76\x65"] = $smt;
        goto BoDb8;
        eXPJl:
        $data["\155\141\x70\145\x6c"] = $this->dropdown->getAllMapel();
        goto Z01Mq;
        XWfN_:
        $data["\155\141\x70\145\x6c\137\x61\147\141\155\141"] = $this->master->getAgamaSiswa();
        goto OAN5E;
        qGpC3:
        $data["\153\x65\154\x61\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : [];
        goto J8hUf;
        vylKq:
        $data["\141\162\162\153\145\x6c\x61\x73"] = $arrKelas;
        goto qGpC3;
        YD_TD:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto rp9kM;
        rp9kM:
        $data["\147\165\162\165\x73"] = $nguru;
        goto OMBO7;
        ratg2:
        $data["\x6b\x65\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto ZpDtd;
        njyLT:
        goto lqF4r;
        goto NktAg;
        phxGv:
        $smt = $this->master->getSemesterActive();
        goto lV6pp;
        rVp_O:
        $tp = $this->master->getTahunActive();
        goto phxGv;
        XO5g_:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto YD_TD;
        CFBFt:
        $data["\152\x65\x6e\151\x73"] = $this->cbt->getAllJenisUjian();
        goto ggrFU;
        ArbEs:
        $setting = $this->dashboard->getSetting();
        goto ENyKP;
        NktAg:
        VC4eE:
        goto fMSq2;
        J8hUf:
        $this->load->view("\x6d\145\155\x62\x65\162\x73\57\x67\165\162\165\57\x74\145\x6d\160\154\x61\164\x65\x73\x2f\150\x65\141\x64\145\162", $data);
        goto n0puR;
        BoDb8:
        $data["\x73\x65\164\x74\x69\156\147"] = $this->dashboard->getSetting();
        goto QTI4M;
        Fu9jp:
    }
    public function editBank()
    {
        goto gIXPS;
        Aqhih:
        $data["\152\165\x72\x75\x73\x61\x6e"] = $this->cbt->getAllJurusan();
        goto A5pED;
        Ue78A:
        $data["\x69\144\137\x67\165\x72\x75"] = $guru->id_guru;
        goto MZWYb;
        NZ8HC:
        $data["\x6b\x65\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto E8bAx;
        a023j:
        goto vVJU1;
        goto UsyW6;
        XU1Jb:
        $data["\152\145\x6e\151\163"] = $this->cbt->getAllJenisUjian();
        goto Aqhih;
        mbngQ:
        $data["\151\144\137\x67\165\x72\165"] = $id_guru;
        goto rv7X7;
        H8dun:
        $arrMapel = [];
        goto i1oet;
        Jl2tz:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto Amxtj;
        OB0ep:
        vVJU1:
        goto nqjZi;
        A98bj:
        $data["\147\165\162\x75"] = $guru;
        goto Ue78A;
        gIXPS:
        $id_bank = $this->input->get("\x69\144\137\142\x61\156\153", true);
        goto fB4RC;
        x1iCN:
        $data["\x73\x65\164\x74\x69\156\147"] = $this->dashboard->getSetting();
        goto XU1Jb;
        TBrh7:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto dJvAY;
        MZWYb:
        $data["\155\141\x70\145\154"] = $arrMapel;
        goto rYcR7;
        yIfI4:
        if ($this->ion_auth->is_admin()) {
            goto oPFf5;
        }
        goto Cb0ee;
        uCHpf:
        $data["\x6d\x61\160\x65\154\x5f\x61\x67\141\x6d\x61"] = $this->master->getAgamaSiswa();
        goto yIfI4;
        m_wXZ:
        $data["\x70\x72\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto mbngQ;
        SU6Fw:
        $data["\155\x61\x70\145\x6c\x5f\147\165\162\165"] = $mapel_guru;
        goto itwt2;
        RrvNk:
        $data["\142\165\x6c\x61\156"] = $this->dropdown->getBulan();
        goto x1iCN;
        fB4RC:
        $id_guru = $this->input->get("\x69\144\137\x67\x75\162\165", true);
        goto wfeqd;
        dJvAY:
        $data["\x73\155\x74\137\x61\143\164\x69\166\145"] = $smt;
        goto RrvNk;
        NnZrg:
        $data["\x67\x75\162\x75\163"] = $nguru;
        goto iDWOK;
        i1oet:
        foreach ($mapel as $m) {
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            iZuqs:
        }
        goto dwlbA;
        Amxtj:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto H8dun;
        Ut_h4:
        $this->load->view("\137\164\145\155\x70\154\141\164\145\x73\57\x64\141\163\x68\x62\x6f\x61\162\x64\x2f\x5f\x66\157\157\x74\x65\x72");
        goto OB0ep;
        A5pED:
        $data["\154\x65\x76\145\x6c"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto NZ8HC;
        oMFTV:
        $user = $this->ion_auth->user()->row();
        goto QuluB;
        QuluB:
        $data = ["\165\x73\145\x72" => $user, "\152\x75\x64\x75\x6c" => "\x45\144\151\x74\x20\x42\141\x6e\153\40\x53\x6f\141\x6c", "\163\165\142\152\165\144\x75\154" => "\105\144\151\164\x20\102\141\x6e\x6b\40\x53\157\141\x6c"];
        goto W2sRL;
        pFY1B:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto Jl2tz;
        W2sRL:
        $tp = $this->master->getTahunActive();
        goto P8zBc;
        rv7X7:
        $data["\x67\x75\162\165\x73"] = $this->dropdown->getAllGuru();
        goto Cn8T4;
        itwt2:
        $this->load->view("\x5f\x74\145\x6d\x70\x6c\141\164\145\x73\x2f\x64\x61\163\x68\x62\157\141\x72\144\57\137\150\145\141\144\145\162", $data);
        goto Q9JEB;
        Cn8T4:
        $data["\155\x61\x70\145\x6c"] = $this->dropdown->getAllMapel();
        goto xTJeo;
        Q9JEB:
        $this->load->view("\143\142\164\x2f\x62\x61\156\x6b\x73\157\141\x6c\x2f\x61\x64\144");
        goto Ut_h4;
        jffEP:
        $this->load->view("\x63\x62\x74\57\142\x61\x6e\x6b\163\157\141\x6c\x2f\141\x64\144");
        goto OdYVR;
        wfeqd:
        $setting = $this->dashboard->getSetting();
        goto oMFTV;
        rYcR7:
        $this->load->view("\155\x65\x6d\x62\145\x72\163\x2f\x67\165\162\165\x2f\x74\x65\x6d\x70\x6c\141\164\x65\163\57\x68\145\x61\x64\145\162", $data);
        goto jffEP;
        LPG35:
        $data["\x74\x70\137\141\143\x74\x69\166\x65"] = $tp;
        goto TBrh7;
        iDWOK:
        $data["\x6d\141\160\x65\x6c\137\x67\x75\162\x75"] = $mapel_guru;
        goto A98bj;
        P8zBc:
        $smt = $this->master->getSemesterActive();
        goto qbK_0;
        OdYVR:
        $this->load->view("\x6d\145\155\x62\145\162\x73\57\x67\x75\x72\x75\x2f\x74\x65\155\x70\x6c\141\x74\145\x73\57\x66\157\x6f\x74\145\x72");
        goto a023j;
        Cb0ee:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto pFY1B;
        xTJeo:
        $mapel_guru = $this->kelas->getGuruMapelKelas($id_guru, $tp->id_tp, $smt->id_smt);
        goto SU6Fw;
        dwlbA:
        d2B9_:
        goto NnZrg;
        E8bAx:
        $data["\142\x61\x6e\x6b"] = $this->cbt->getDataBankById($id_bank);
        goto uCHpf;
        UsyW6:
        oPFf5:
        goto m_wXZ;
        qbK_0:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto LPG35;
        nqjZi:
    }
    public function saveBank()
    {
        goto QoZdp;
        X9Jy4:
        $this->logging->saveLog(3, "\x6d\x65\156\141\155\x62\x61\x68\x20\x62\141\156\x6b\40\x73\x6f\141\x6c");
        goto ZKPc1;
        ZKPc1:
        jUaSt:
        goto A3yub;
        gJMXA:
        $data["\163\x74\x61\x74\165\163"] = $status;
        goto Mq3Pe;
        Z6Euq:
        $this->logging->saveLog(4, "\155\x65\x6e\x67\x65\144\x69\164\40\142\x61\156\x6b\x20\163\x6f\141\154");
        goto untvU;
        tuKD5:
        if (!$id) {
            goto S1nLC;
        }
        goto Z6Euq;
        Ceu59:
        goto dqdxn;
        goto vtPet;
        bTE1o:
        $tp = $this->master->getTahunActive();
        goto ie1K3;
        QoZdp:
        if ($this->input->post()) {
            goto f2Ok9;
        }
        goto wM6up;
        vtPet:
        f2Ok9:
        goto bTE1o;
        ie1K3:
        $smt = $this->master->getSemesterActive();
        goto f0skY;
        Mq3Pe:
        $id = $this->input->post("\x69\144\x5f\142\141\156\x6b", true);
        goto tuKD5;
        wM6up:
        $status = FALSE;
        goto Ceu59;
        f0skY:
        $this->cbt->saveBankSoal($tp->id_tp, $smt->id_smt);
        goto Sh96E;
        A3yub:
        $this->output_json($data);
        goto Ly9Ma;
        untvU:
        goto jUaSt;
        goto erUGX;
        erUGX:
        S1nLC:
        goto X9Jy4;
        gU8LV:
        dqdxn:
        goto gJMXA;
        Sh96E:
        $status = TRUE;
        goto gU8LV;
        Ly9Ma:
    }
    public function deleteBank()
    {
        goto HeiiK;
        BfL3K:
        MJCJS:
        goto nKiTf;
        Ms8tM:
        mW84L:
        goto EyY3h;
        LbKKH:
        goto FfDwC;
        goto Ms8tM;
        HeiiK:
        $id = $this->input->get("\151\x64\x5f\x62\141\156\x6b", true);
        goto M9koD;
        M9koD:
        if ($this->cbt->cekJadwalBankSoal($id) > 0) {
            goto mW84L;
        }
        goto koOQ9;
        Sw4eA:
        if (!$this->master->delete("\143\142\x74\137\x62\141\x6e\x6b\x5f\x73\157\141\x6c", $id, "\x69\144\137\142\141\156\153")) {
            goto MJCJS;
        }
        goto yNMW1;
        ljsYZ:
        $this->output_json(["\x73\x74\x61\164\x75\x73" => true, "\x6d\145\x73\x73\x61\x67\x65" => "\x62\145\x72\x68\x61\x73\x69\x6c"]);
        goto BfL3K;
        EyY3h:
        $this->output_json(["\163\x74\141\164\165\163" => false, "\x6d\x65\163\x73\141\147\x65" => "\x41\144\141\x20\x6a\141\x64\x77\141\x6c\x20\x75\152\151\141\156\x20\x79\141\156\x67\x20\x6d\x65\156\147\x67\x75\x6e\141\153\x61\x6e\x20\x62\x61\x6e\153\x20\163\x6f\141\154\x20\151\x6e\151"]);
        goto KNExl;
        yNMW1:
        $this->logging->saveLog(5, "\x6d\145\156\x67\x68\x61\x70\165\163\x20\x62\x61\x6e\153\40\x73\157\141\154");
        goto ljsYZ;
        koOQ9:
        if (!$this->master->delete("\x63\x62\x74\137\163\x6f\141\x6c", $id, "\x62\141\156\x6b\x5f\x69\144")) {
            goto yZz73;
        }
        goto Sw4eA;
        KNExl:
        FfDwC:
        goto YSUJj;
        nKiTf:
        yZz73:
        goto LbKKH;
        YSUJj:
    }
    public function deleteAllBank()
    {
        goto xzc9i;
        CccnB:
        iPnGn:
        goto jb3Kq;
        D_tUM:
        if ($this->cbt->cekJadwalBankSoal($ids) > 0) {
            goto wpQuH;
        }
        goto NDAoZ;
        vq6xe:
        xequZ:
        goto dierv;
        nxFyP:
        $this->logging->saveLog(5, "\155\145\x6e\x67\150\141\160\x75\163\x20\x62\x61\x6e\x6b\x20\x73\157\141\x6c");
        goto U_ZgP;
        ge8hd:
        goto iPnGn;
        goto I8XT5;
        ci1HU:
        if (!$this->master->delete("\x63\x62\164\x5f\142\141\x6e\153\137\163\x6f\141\x6c", $ids, "\151\144\137\x62\141\x6e\153")) {
            goto xequZ;
        }
        goto nxFyP;
        CgYR5:
        $this->output_json(["\x73\x74\x61\x74\165\163" => false, "\155\145\x73\x73\x61\x67\x65" => "\x41\144\x61\x20\152\141\x64\x77\141\x6c\x20\x75\x6a\151\x61\156\40\x79\x61\x6e\x67\x20\x6d\145\x6e\147\x67\165\x6e\x61\x6b\x61\x6e\x20\x62\141\156\153\40\163\x6f\x61\x6c\40\151\156\x69"]);
        goto CccnB;
        dierv:
        BQpPL:
        goto ge8hd;
        NDAoZ:
        if (!$this->master->delete("\x63\x62\164\137\163\x6f\x61\154", $ids, "\x62\141\x6e\153\137\151\x64")) {
            goto BQpPL;
        }
        goto ci1HU;
        U_ZgP:
        $this->output_json(["\163\x74\141\164\x75\163" => true, "\x6d\145\163\163\x61\x67\145" => "\142\145\162\150\x61\x73\x69\154"]);
        goto vq6xe;
        I8XT5:
        wpQuH:
        goto CgYR5;
        xzc9i:
        $ids = json_decode($this->input->post("\x69\144\x73", true));
        goto D_tUM;
        jb3Kq:
    }
    public function detail($id)
    {
        goto Uvptp;
        Pnnvu:
        $smt = $this->master->getSemesterActive();
        goto lkO30;
        bAlKK:
        $data = ["\165\163\145\162" => $user, "\152\165\x64\165\x6c" => "\104\145\x74\141\151\x6c\40\123\x6f\x61\154", "\x73\165\x62\x6a\x75\x64\x75\154" => "\x44\145\x74\x61\x69\154\x20\x53\157\141\154"];
        goto XEeuX;
        xZUa_:
        $this->load->view("\143\x62\164\57\142\x61\x6e\x6b\x73\x6f\x61\x6c\57\144\x65\164\141\x69\154");
        goto TKZyw;
        XEeuX:
        $data["\x73\145\164\x74\x69\156\x67"] = $this->dashboard->getSetting();
        goto FB4MK;
        z2mkU:
        $data["\163\155\x74\137\x61\143\x74\151\x76\145"] = $smt;
        goto N8ixc;
        V3I2L:
        if ($this->ion_auth->is_admin()) {
            goto nDs3S;
        }
        goto d46OX;
        d46OX:
        $data["\147\x75\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto yRIyF;
        DiPUh:
        goto bEJwo;
        goto Aae4C;
        N8ixc:
        $data["\142\x61\156\x6b"] = $this->cbt->getDataBankById($id);
        goto h5NJo;
        i7ryy:
        $terpakai = $this->cbt->getBankTerpakai($id);
        goto BFq4r;
        BFq4r:
        $data["\164\157\164\141\154\x5f\163\151\x73\x77\141"] = isset($terpakai[$id]) ? count($terpakai[$id]) : 0;
        goto V3I2L;
        QWkr8:
        $data["\160\x72\x6f\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto CaKnS;
        CaKnS:
        $this->load->view("\137\164\145\155\160\x6c\141\x74\145\x73\57\144\x61\x73\150\142\x6f\x61\162\x64\57\137\x68\x65\141\144\x65\162", $data);
        goto xZUa_;
        CozSE:
        $this->load->view("\155\x65\155\142\145\162\163\x2f\147\165\x72\165\57\x74\145\155\160\x6c\x61\x74\145\163\57\x66\x6f\157\x74\145\x72");
        goto DiPUh;
        lkO30:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto dmVVH;
        JBg7V:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto z2mkU;
        TKZyw:
        $this->load->view("\137\164\x65\155\x70\x6c\141\164\145\x73\x2f\144\141\163\150\x62\157\141\x72\144\57\137\x66\157\157\x74\145\x72");
        goto AQ0w9;
        FB4MK:
        $tp = $this->master->getTahunActive();
        goto Pnnvu;
        h5NJo:
        $data["\163\157\141\154\x73"] = $this->cbt->getAllSoalByBank($id);
        goto Puzub;
        yRIyF:
        $this->load->view("\x6d\145\155\142\145\x72\163\57\147\x75\162\x75\x2f\x74\x65\155\x70\154\x61\x74\145\x73\x2f\x68\x65\x61\x64\145\162", $data);
        goto KjdBj;
        Uvptp:
        $user = $this->ion_auth->user()->row();
        goto bAlKK;
        KjdBj:
        $this->load->view("\143\142\x74\x2f\x62\141\156\153\x73\157\141\x6c\x2f\144\x65\x74\141\x69\x6c");
        goto CozSE;
        dmVVH:
        $data["\x74\160\x5f\141\x63\164\x69\166\x65"] = $tp;
        goto JBg7V;
        AQ0w9:
        bEJwo:
        goto odepJ;
        Aae4C:
        nDs3S:
        goto QWkr8;
        Puzub:
        $data["\x6b\145\154\141\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt);
        goto i7ryy;
        odepJ:
    }
    public function saveSelected()
    {
        goto pcc67;
        PAbvA:
        $this->output_json($data);
        goto TI_Xp;
        jrCHW:
        if (!($id != null)) {
            goto b6cFM;
        }
        goto ToDXU;
        HTUlX:
        $data["\143\150\x65\x63\153"] = $updated;
        goto PAbvA;
        Igp7a:
        $unchek = json_decode($this->input->post("\165\156\x63\x68\x65\x63\x6b", true));
        goto Ir1e1;
        jz4GH:
        if (!($i <= $soal)) {
            goto bpCmv;
        }
        goto EN3WE;
        k_g3R:
        $bank = $this->cbt->getDataBankById($bank_id);
        goto nR2Hi;
        kTxXi:
        $this->db->set("\163\x74\x61\164\x75\163\137\163\x6f\141\x6c", $status_soal);
        goto zaV4X;
        EN3WE:
        $id = $this->input->post("\x73\157\141\x6c\x5b" . $i . "\x5d", true);
        goto jrCHW;
        nR2Hi:
        $soals = $this->cbt->getAllSoalByBank($bank_id);
        goto Yjeg6;
        Ir1e1:
        $arrId = [];
        goto aTit5;
        q8BzL:
        $soal = $jml != null ? count($jml) : 0;
        goto Igp7a;
        aTit5:
        $i = 0;
        goto d8ZSx;
        B39n5:
        sleep(1);
        goto k_g3R;
        LZTEk:
        $this->db->update("\x63\x62\x74\137\142\141\x6e\153\137\x73\157\141\x6c");
        goto HTUlX;
        VZFiM:
        $jenis = $this->input->post("\x6a\x65\156\x69\x73", true);
        goto R1mM2;
        zaV4X:
        $this->db->where("\x69\144\137\x62\x61\156\x6b", $bank_id);
        goto LZTEk;
        G2pbU:
        foreach ($unchek as $id) {
            goto zFtcA;
            nVsxs:
            $this->db->where("\151\144\137\x73\x6f\141\x6c", $id);
            goto sLkcY;
            yNBGB:
            YaJRf:
            goto GfCs6;
            sLkcY:
            $this->db->update("\x63\x62\164\137\163\157\x61\x6c");
            goto yNBGB;
            zFtcA:
            $this->db->set("\x74\141\155\x70\151\x6c\x6b\141\x6e", 0);
            goto nVsxs;
            GfCs6:
        }
        goto yRu3S;
        oNuC3:
        $tampil_kurang = $total_soal_tampil < $total_soal_seharusnya_tampil;
        goto f872z;
        nP3va:
        goto U2CRV;
        goto bcg2n;
        f872z:
        $status_soal = $tampil_kurang ? "\60" : "\61";
        goto kTxXi;
        ToDXU:
        array_push($arrId, $id);
        goto KKZbu;
        yRu3S:
        t9NeY:
        goto B39n5;
        d8ZSx:
        U2CRV:
        goto jz4GH;
        EbuK5:
        $updated = 0;
        goto Cy_E8;
        TzTs1:
        $total_soal_seharusnya_tampil = $bank->tampil_pg + $bank->tampil_kompleks + $bank->tampil_jodohkan + $bank->tampil_isian + $bank->tampil_esai;
        goto oNuC3;
        bcg2n:
        bpCmv:
        goto EbuK5;
        Yjeg6:
        $total_soal_tampil = isset(array_count_values(array_column($soals, "\164\x61\x6d\160\151\x6c\153\x61\x6e"))["\61"]) ? array_count_values(array_column($soals, "\x74\x61\x6d\x70\151\154\x6b\x61\x6e"))["\61"] : 0;
        goto TzTs1;
        uUQ9o:
        qotON:
        goto G2pbU;
        R1mM2:
        $jml = $this->input->post("\163\157\x61\154", true);
        goto q8BzL;
        hfevF:
        C_lQX:
        goto DLBRk;
        KKZbu:
        b6cFM:
        goto hfevF;
        pcc67:
        $bank_id = $this->input->post("\x69\144\137\x62\x61\156\153", true);
        goto VZFiM;
        Cy_E8:
        foreach ($arrId as $id) {
            goto ctTSm;
            ctTSm:
            $this->db->set("\x74\141\x6d\160\x69\x6c\153\x61\x6e", 1);
            goto tVBzg;
            tVBzg:
            $this->db->where("\151\144\x5f\163\x6f\141\x6c", $id);
            goto oHOO1;
            oHOO1:
            $this->db->update("\x63\142\x74\x5f\163\x6f\141\154");
            goto e6l6Q;
            Wwv5z:
            n_m8T:
            goto YGMxo;
            e6l6Q:
            $updated++;
            goto Wwv5z;
            YGMxo:
        }
        goto uUQ9o;
        DLBRk:
        $i++;
        goto nP3va;
        TI_Xp:
    }
    public function copyBankSoal($id_bank)
    {
        goto rKVed;
        BUrC1:
        $bank = $this->cbt->getDataBankById($id_bank);
        goto ecZfw;
        oNUKD:
        if (!(count($soals) > 0)) {
            goto koobM;
        }
        goto JwTNp;
        hWOuv:
        $result = $this->master->create("\143\142\164\137\x62\x61\156\153\x5f\x73\157\x61\154", $data);
        goto mpVJR;
        sPDY8:
        $data = ["\151\x64\x5f\x74\x70" => $tp->id_tp, "\151\144\x5f\x73\155\x74" => $smt->id_smt, "\142\x61\x6e\153\x5f\x6a\x65\156\x69\x73\137\x69\144" => $bank->bank_jenis_id, "\x62\141\x6e\x6b\137\x6b\157\144\145" => $bank->bank_kode, "\142\141\x6e\153\x5f\x6c\x65\x76\x65\154" => $bank->bank_level, "\142\141\156\153\x5f\153\x65\x6c\141\163" => $bank->bank_kelas, "\142\x61\156\x6b\137\x6d\x61\160\x65\154\137\151\144" => $bank->bank_mapel_id, "\x62\141\156\153\137\x6a\165\162\165\163\141\156\x5f\x69\x64" => $bank->bank_jurusan_id, "\x62\x61\156\x6b\137\147\165\x72\165\x5f\x69\144" => $bank->bank_guru_id, "\142\141\x6e\153\137\156\141\155\141" => $bank->bank_nama, "\153\153\155" => $bank->kkm, "\144\x65\163\x6b\x72\x69\x70\163\151" => $bank->deskripsi, "\152\155\x6c\x5f\x73\157\x61\x6c" => $bank->jml_soal, "\164\x61\x6d\x70\151\154\x5f\x70\147" => $bank->tampil_pg, "\x62\157\142\x6f\164\x5f\x70\x67" => $bank->bobot_pg, "\x6a\x6d\x6c\x5f\153\157\x6d\160\x6c\145\x6b\x73" => $bank->jml_kompleks, "\164\141\155\160\x69\x6c\x5f\153\157\x6d\x70\x6c\x65\x6b\x73" => $bank->tampil_kompleks, "\142\157\142\157\164\x5f\153\x6f\x6d\160\154\145\153\163" => $bank->bobot_kompleks, "\152\155\154\137\x6a\157\144\157\150\x6b\x61\x6e" => $bank->jml_jodohkan, "\x74\141\x6d\x70\151\154\x5f\x6a\157\144\157\150\153\x61\156" => $bank->tampil_jodohkan, "\142\157\142\x6f\164\137\x6a\x6f\144\x6f\150\x6b\141\x6e" => $bank->bobot_jodohkan, "\x6a\x6d\154\137\151\163\151\x61\156" => $bank->jml_isian, "\x74\x61\x6d\160\x69\x6c\137\x69\163\151\x61\x6e" => $bank->tampil_isian, "\x62\x6f\x62\157\164\x5f\151\x73\151\141\x6e" => $bank->bobot_isian, "\x6a\155\154\x5f\145\163\141\x69" => $bank->jml_esai, "\x74\141\x6d\x70\x69\x6c\137\x65\x73\x61\x69" => $bank->tampil_esai, "\x62\157\142\157\x74\x5f\x65\163\141\151" => $bank->bobot_esai, "\157\x70\163\x69" => $bank->opsi, "\x64\x61\164\x65" => date("\x59\55\x6d\55\x64\x20\x48\72\151\72\x73"), "\x73\164\141\x74\165\163" => $bank->status, "\x73\157\x61\x6c\137\141\x67\141\155\141" => $bank->soal_agama];
        goto hWOuv;
        mpVJR:
        $id = $this->db->insert_id();
        goto oNUKD;
        M0wuA:
        $this->db->insert_batch("\x63\142\x74\x5f\x73\157\x61\x6c", $soals);
        goto ttps4;
        ttps4:
        $this->logging->saveLog(3, "\x6d\145\155\x62\165\x61\164\x20\142\x61\x6e\x6b\40\x73\x6f\141\154");
        goto D0n4q;
        D0n4q:
        koobM:
        goto NlZGa;
        MwA5e:
        $smt = $this->dashboard->getSemesterActive();
        goto BUrC1;
        ecZfw:
        $soals = $this->cbt->getAllSoalByBank($id_bank);
        goto sPDY8;
        JwTNp:
        foreach ($soals as $soal) {
            goto sA6Nu;
            sA6Nu:
            unset($soal->id_soal);
            goto xlAmc;
            ySpjt:
            $soal->created_on = time();
            goto MTcAo;
            YwEpv:
            u2iHU:
            goto B1Xle;
            MTcAo:
            $soal->updated_on = time();
            goto YwEpv;
            xlAmc:
            $soal->bank_id = $id;
            goto ySpjt;
            B1Xle:
        }
        goto wHPF0;
        rKVed:
        $tp = $this->dashboard->getTahunActive();
        goto MwA5e;
        wHPF0:
        bCH9Z:
        goto M0wuA;
        NlZGa:
        $this->output_json($result);
        goto rjjs7;
        rjjs7:
    }
    public function buatsoal($id_bank)
    {
        goto P5sSH;
        prm30:
        $jenis = $tab == null ? $act_tab : $tab;
        goto Qv49n;
        QqGGq:
        if ($this->ion_auth->is_admin()) {
            goto gtkN5;
        }
        goto wikQL;
        hToyK:
        goto XFbb0;
        goto g_xyd;
        lOyeG:
        $data["\x74\160\137\x61\143\164\151\x76\x65"] = $tp;
        goto AiAQe;
        CaEHV:
        BKa6M:
        goto z4ifd;
        dz3xx:
        if ($jenis == "\63") {
            goto BKa6M;
        }
        goto bAq2n;
        gqug2:
        $tp = $this->master->getTahunActive();
        goto SrT0r;
        xAOaE:
        $setting = $this->dashboard->getSetting();
        goto HbayU;
        xNFBs:
        if ($jenis == "\x32") {
            goto SoMUR;
        }
        goto dz3xx;
        m35Gh:
        $data["\153\145\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto QqGGq;
        tGb31:
        goto EXmJe;
        goto CaEHV;
        dKOnv:
        $act_tab = $_jns != null ? $_jns : "\61";
        goto B6CdP;
        rH2Zy:
        $this->load->view("\137\164\145\155\160\154\x61\x74\145\163\57\x64\x61\163\150\x62\157\141\162\144\x2f\137\x66\157\157\164\x65\x72");
        goto VDRah;
        yDhob:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto lOyeG;
        ONU09:
        $tab = $this->input->get("\164\x61\142", true);
        goto prm30;
        C0KbH:
        $this->load->view("\155\145\155\x62\145\162\163\57\x67\165\162\165\57\164\x65\x6d\160\154\x61\x74\145\x73\x2f\x68\145\141\x64\145\x72", $data);
        goto MD5at;
        hzM9e:
        $data["\152\x6d\x6c\x5f\x70\x67"] = $this->cbt->getNomorSoalTerbesar($id_bank, 1);
        goto Pcn6V;
        d2P8u:
        if ($jenis == "\65") {
            goto YImNV;
        }
        goto AUOG9;
        Pcn6V:
        goto EXmJe;
        goto PPVle;
        u63SF:
        $data["\x6a\x75\162\165\x73\141\x6e"] = $this->cbt->getAllJurusan();
        goto sGJEc;
        DJQ_6:
        $data["\x73\157\x61\x6c\x5f\142\145\154\165\x6d\137\x6b\157\155\160\x6c\151\x74"] = isset($data_komplit[$id_bank]) ? $data_komplit[$id_bank] : [];
        goto s42at;
        PPVle:
        SoMUR:
        goto U6ysM;
        MD5at:
        $this->load->view("\x63\x62\164\57\142\141\156\x6b\163\157\141\154\x2f\163\x6f\141\x6c");
        goto sHoTp;
        HbayU:
        $data["\x73\145\x74\164\x69\156\x67"] = $setting;
        goto ANRge;
        VDRah:
        XFbb0:
        goto E_hGZ;
        P3YwE:
        $user = $this->ion_auth->user()->row();
        goto CyzQN;
        wikQL:
        $data["\x67\165\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto C0KbH;
        sHoTp:
        $this->load->view("\x6d\145\x6d\x62\x65\x72\x73\57\x67\165\x72\x75\57\164\145\x6d\160\154\x61\164\x65\163\57\x66\x6f\157\x74\145\x72");
        goto hToyK;
        ocutv:
        $this->load->view("\143\142\164\57\x62\x61\156\x6b\x73\157\x61\154\57\163\x6f\141\x6c");
        goto rH2Zy;
        U6ysM:
        $data["\x6a\155\x6c\137\x70\x67\62"] = $this->cbt->getNomorSoalTerbesar($id_bank, 2);
        goto tGb31;
        ClKEA:
        $data["\x73\x6d\164\x5f\x61\x63\x74\151\166\145"] = $smt;
        goto xAOaE;
        VTLZn:
        YImNV:
        goto WARbf;
        AiAQe:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto ClKEA;
        Cvn6B:
        $data["\160\x72\x6f\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto Rw3LU;
        z4ifd:
        $data["\x6a\155\x6c\137\x6a\x6f\144\157\x68\x6b\141\156"] = $this->cbt->getNomorSoalTerbesar($id_bank, 3);
        goto qeSrc;
        s42at:
        if ($jenis == "\x31") {
            goto yE5Gm;
        }
        goto xNFBs;
        AeyzB:
        $data["\x6a\x6d\154\137\151\x73\151\141\x6e"] = $this->cbt->getNomorSoalTerbesar($id_bank, 4);
        goto ppne5;
        g_xyd:
        gtkN5:
        goto Cvn6B;
        cYwBC:
        $_jns = $this->input->get("\x6a\156\x73", true);
        goto P3YwE;
        Qv49n:
        $data["\x74\x61\142\x5f\141\143\x74\x69\166\x65"] = $jenis;
        goto uK8zX;
        ANRge:
        $data["\160\x5f\156\x6f"] = $_no != null ? $_no : "\61";
        goto dKOnv;
        B6CdP:
        $data["\x70\137\x6a\x6e\163"] = $act_tab;
        goto ONU09;
        AUOG9:
        goto EXmJe;
        goto j5aNZ;
        SrT0r:
        $smt = $this->master->getSemesterActive();
        goto yDhob;
        j5aNZ:
        yE5Gm:
        goto hzM9e;
        CyzQN:
        $data = ["\x75\x73\x65\x72" => $user, "\152\x75\x64\165\154" => "\x42\165\141\x74\x20\x53\x6f\x61\x6c", "\x73\x75\142\x6a\165\144\x75\154" => "\x42\165\141\x74\x20\x53\157\x61\x6c"];
        goto gqug2;
        WARbf:
        $data["\152\155\154\x5f\145\163\163\141\x69"] = $this->cbt->getNomorSoalTerbesar($id_bank, 5);
        goto ZmsAe;
        bAq2n:
        if ($jenis == "\x34") {
            goto mgq6U;
        }
        goto d2P8u;
        r3OdS:
        $data_komplit = $this->cbt->cekSoalBelumKomplit($jenis, $bank->opsi);
        goto DJQ_6;
        ZmsAe:
        EXmJe:
        goto Y17Dk;
        DWAYU:
        $data["\163\x6f\x61\154"] = null;
        goto ZP_n0;
        Y17Dk:
        $data["\x62\141\x6e\x6b"] = $bank;
        goto WRyxb;
        WRyxb:
        $data["\x73\157\141\154\163"] = $this->cbt->getAllSoalByBank($id_bank, $jenis);
        goto u63SF;
        Zo7Ri:
        mgq6U:
        goto AeyzB;
        sGJEc:
        $data["\154\x65\166\145\x6c"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto m35Gh;
        qeSrc:
        goto EXmJe;
        goto Zo7Ri;
        P5sSH:
        $_no = $this->input->get("\x6e\157", true);
        goto cYwBC;
        uK8zX:
        $bank = $this->cbt->getDataBankById($id_bank);
        goto DWAYU;
        ppne5:
        goto EXmJe;
        goto VTLZn;
        ZP_n0:
        $data["\163\x6f\x61\x6c\x5f\x61\144\x61"] = $this->cbt->cekSoalAda($id_bank, $jenis);
        goto r3OdS;
        Rw3LU:
        $this->load->view("\137\164\145\x6d\160\x6c\141\164\145\163\x2f\144\x61\x73\x68\x62\x6f\x61\x72\x64\x2f\137\150\x65\141\x64\145\162", $data);
        goto ocutv;
        E_hGZ:
    }
    public function getSoalByNomor()
    {
        goto aZlYT;
        j0Lck:
        AlV_G:
        goto l3U9V;
        aZlYT:
        $bank_id = $this->input->get("\142\x61\156\x6b\x5f\x69\144", true);
        goto CjrnZ;
        RzRfV:
        if ($data != null) {
            goto MnB57;
        }
        goto iqQTb;
        Y2PVU:
        $t = @unserialize($soal->opsi_a);
        goto zx3mL;
        A200A:
        BcGhc:
        goto FaCsQ;
        xSGOw:
        if ($jenis == "\63") {
            goto FlXuE;
        }
        goto tuJ33;
        R3oDg:
        ANxAP:
        goto K0fr2;
        mNnE5:
        $data->jawaban = false;
        goto UuZEc;
        iqQTb:
        if (!($nomor != 1)) {
            goto qOKzh;
        }
        goto UYkO1;
        VzN14:
        if ($jenis == "\x32") {
            goto PzFMF;
        }
        goto xSGOw;
        iPcYQ:
        goto BcGhc;
        goto bxCSG;
        wBg1V:
        goto AlV_G;
        goto R3oDg;
        FjABV:
        $data = $soal;
        goto RzRfV;
        XUEo0:
        PzFMF:
        goto Y2PVU;
        bxCSG:
        FlXuE:
        goto KK43B;
        I2kfB:
        goto b53eJ;
        goto TSWyx;
        UuZEc:
        goto zWM8d;
        goto J1woZ;
        FaCsQ:
        b53eJ:
        goto eDoTU;
        J1woZ:
        cLMlH:
        goto ho8ev;
        ZQ0O9:
        if ($j !== false) {
            goto rt8is;
        }
        goto ti0WG;
        ti0WG:
        $data->jawaban = false;
        goto qcLte;
        rtmS4:
        $jenis = $this->input->get("\152\145\156\151\x73", true);
        goto ix8zo;
        tuJ33:
        goto BcGhc;
        goto XUEo0;
        p26SC:
        $data->opsi_a = false;
        goto wBg1V;
        b9gF8:
        qOKzh:
        goto I2kfB;
        zx3mL:
        if ($t !== false) {
            goto ANxAP;
        }
        goto p26SC;
        TSWyx:
        MnB57:
        goto muLWD;
        eDoTU:
        $this->output_json($data);
        goto Kk0zI;
        jYhG1:
        zWM8d:
        goto A200A;
        JrmVS:
        if ($j !== false) {
            goto cLMlH;
        }
        goto mNnE5;
        K0fr2:
        $data->opsi_a = $t;
        goto j0Lck;
        KK43B:
        $j = @unserialize($soal->jawaban);
        goto JrmVS;
        R4MzR:
        $data->jawaban = $j;
        goto Yscms;
        muLWD:
        $data->file = unserialize($soal->file);
        goto VzN14;
        UYkO1:
        $data = ["\x62\141\156\153\x5f\151\144" => $bank_id, "\152\145\x6e\151\163" => $jenis, "\156\157\x6d\x6f\162\137\x73\157\141\x6c" => $nomor];
        goto b9gF8;
        Yscms:
        LJRAi:
        goto iPcYQ;
        CjrnZ:
        $nomor = $this->input->get("\x6e\x6f\155\x6f\162", true);
        goto rtmS4;
        qcLte:
        goto LJRAi;
        goto BNo4q;
        l3U9V:
        $j = @unserialize($soal->jawaban);
        goto ZQ0O9;
        BNo4q:
        rt8is:
        goto R4MzR;
        ho8ev:
        $data->jawaban = $j;
        goto jYhG1;
        ix8zo:
        $soal = $this->cbt->getSoalByNomor($bank_id, $nomor, $jenis);
        goto FjABV;
        Kk0zI:
    }
    public function tambahSoal()
    {
        goto xUnMm;
        Oj6xx:
        $this->output_json($insert);
        goto NwKkH;
        xUnMm:
        $bank = $this->input->post("\142\x61\x6e\x6b", true);
        goto wsHJe;
        ep2sX:
        $data = ["\x62\141\x6e\x6b\137\151\x64" => $bank, "\156\157\x6d\x6f\x72\x5f\x73\157\x61\154" => $nomor, "\152\145\x6e\151\x73" => $jenis, "\164\x61\x6d\x70\x69\x6c\x6b\x61\x6e" => 0, "\x63\x72\145\141\164\x65\144\x5f\157\156" => time(), "\165\160\x64\x61\164\145\x64\137\x6f\156" => time()];
        goto VxYPw;
        vQRpY:
        $jenis = $this->input->post("\x6a\x65\x6e\151\163", true);
        goto ep2sX;
        VxYPw:
        $insert = $this->db->insert("\143\x62\x74\137\163\x6f\x61\154", $data);
        goto Oj6xx;
        wsHJe:
        $nomor = $this->input->post("\156\x6f\155\157\162", true);
        goto vQRpY;
        NwKkH:
    }
    public function importsoal($id)
    {
        goto O_iS_;
        YQU6l:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto PSE5o;
        oYPCt:
        $this->load->view("\x6d\x65\155\x62\145\162\x73\x2f\147\165\x72\165\x2f\x74\x65\x6d\x70\154\141\x74\x65\163\57\x66\x6f\157\164\x65\162");
        goto EoXoa;
        sWZdJ:
        hcd5d:
        goto iF7Lc;
        kAwBk:
        $this->load->view("\143\x62\x74\x2f\142\x61\156\x6b\163\x6f\141\154\57\151\x6d\160\x6f\x72\x74");
        goto acp6Z;
        jG2zF:
        $data["\x6a\145\x6e\x69\x73"] = $this->cbt->getAllJenisUjian();
        goto xGVqm;
        vtgZb:
        $data = ["\165\x73\145\x72" => $user, "\152\165\x64\x75\x6c" => "\111\155\160\x6f\162\x74\x20\x42\141\156\x6b\x20\x53\157\x61\x6c", "\x73\165\142\152\165\x64\x75\x6c" => "\x49\x6d\160\x6f\162\164\40\x42\141\156\x6b\x20\123\x6f\141\154"];
        goto Q9NgL;
        iuifC:
        $data["\x67\165\x72\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto ikJzV;
        O_iS_:
        $user = $this->ion_auth->user()->row();
        goto M65b2;
        acp6Z:
        $this->load->view("\137\x74\145\155\160\154\x61\x74\x65\163\x2f\144\141\163\x68\142\157\x61\x72\144\x2f\x5f\146\x6f\157\164\145\x72");
        goto bUj1l;
        Uq1uQ:
        $data["\164\x70\x5f\141\x63\x74\151\x76\145"] = $tp;
        goto YQU6l;
        PSE5o:
        $data["\x73\x6d\x74\x5f\141\x63\164\x69\x76\x65"] = $smt;
        goto FFRLO;
        iWhcu:
        $this->load->view("\x5f\164\145\155\x70\x6c\141\164\145\163\57\x64\141\x73\x68\142\x6f\x61\x72\x64\57\137\x68\145\x61\x64\145\162", $data);
        goto kAwBk;
        F5K3C:
        $this->load->view("\143\x62\x74\x2f\x62\141\x6e\x6b\163\x6f\x61\154\x2f\151\155\160\x6f\162\164");
        goto oYPCt;
        M65b2:
        $setting = $this->dashboard->getSetting();
        goto vtgZb;
        E4BZH:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto Uq1uQ;
        FFRLO:
        $data["\x73\145\x74\164\151\x6e\x67"] = $setting;
        goto FwQHN;
        U2KPx:
        $smt = $this->master->getSemesterActive();
        goto E4BZH;
        wqKjM:
        if ($this->ion_auth->is_admin()) {
            goto hcd5d;
        }
        goto iuifC;
        iF7Lc:
        $data["\x70\x72\157\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto iWhcu;
        ikJzV:
        $this->load->view("\155\x65\155\142\145\x72\x73\57\x67\165\x72\165\57\164\145\155\160\x6c\x61\x74\x65\163\57\150\145\141\144\145\162", $data);
        goto F5K3C;
        m1Hyi:
        $data["\x6c\x65\166\x65\154"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto FoWD3;
        FoWD3:
        $data["\153\145\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto wqKjM;
        bUj1l:
        kRS0q:
        goto bigfb;
        xGVqm:
        $data["\152\165\162\x75\x73\x61\x6e"] = $this->cbt->getAllJurusan();
        goto m1Hyi;
        EoXoa:
        goto kRS0q;
        goto sWZdJ;
        FwQHN:
        $data["\142\141\156\x6b"] = $this->cbt->getDataBankById($id);
        goto jG2zF;
        Q9NgL:
        $tp = $this->master->getTahunActive();
        goto U2KPx;
        bigfb:
    }
    public function previewExcel()
    {
        goto a52Ov;
        hhCJD:
        if (!($sheetData[$i][0] != null)) {
            goto Pbs27;
        }
        goto IP6eB;
        NP0x3:
        $ext = $this->upload->data("\146\151\x6c\x65\137\x65\x78\x74");
        goto GhwHL;
        oU5_9:
        EIAre:
        goto bPUs5;
        l2ZLa:
        unlink($file);
        goto z3h3u;
        xov6T:
        pIGUj:
        goto Yu3vZ;
        QJjfE:
        $i = 1;
        goto oU5_9;
        ednTD:
        $spreadsheet = $reader->load($file);
        goto qE0_3;
        z3h3u:
        echo json_encode($data);
        goto bOOZq;
        sSRMv:
        $config["\145\x6e\x63\x72\x79\160\x74\x5f\x6e\141\x6d\145"] = true;
        goto Wyxt_;
        IP6eB:
        $data[] = ["\x6e\x61\155\141" => $sheetData[$i][1], "\x6e\151\160" => $sheetData[$i][2], "\153\157\144\x65" => $sheetData[$i][3], "\x75\163\x65\x72\x6e\x61\155\x65" => $sheetData[$i][4], "\160\x61\163\163\x77\157\162\x64" => $sheetData[$i][5]];
        goto d5xi9;
        Yu3vZ:
        $error = $this->upload->display_errors();
        goto LM8Xn;
        KuMuY:
        $config["\155\x61\x78\x5f\x73\x69\172\x65"] = 2048;
        goto sSRMv;
        sSi75:
        if (!$this->upload->do_upload("\x75\x70\x6c\x6f\x61\x64\x5f\x66\151\x6c\145")) {
            goto pIGUj;
        }
        goto PZLLB;
        d5xi9:
        Pbs27:
        goto jxaMj;
        Wyxt_:
        $this->load->library("\165\x70\x6c\x6f\x61\144", $config);
        goto sSi75;
        GhwHL:
        switch ($ext) {
            case "\x2e\x78\154\x73\170":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto i53nN;
            case "\x2e\170\x6c\163":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto i53nN;
            case "\56\143\163\x76":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto i53nN;
            default:
                echo "\165\x6e\153\x6e\157\167\x6e\40\x66\x69\154\x65\x20\145\x78\x74";
                die;
        }
        goto GcMka;
        it2Qp:
        i53nN:
        goto ednTD;
        LM8Xn:
        echo $error;
        goto pL5jX;
        a52Ov:
        $config["\x75\160\x6c\x6f\141\x64\137\160\x61\x74\150"] = "\x2e\57\165\x70\x6c\157\x61\x64\163\57\x69\155\x70\x6f\x72\x74\57";
        goto g2CHe;
        VXEXQ:
        $data = [];
        goto QJjfE;
        pL5jX:
        die;
        goto Wa96d;
        jxaMj:
        y68i2:
        goto hAnDn;
        PZLLB:
        $file = $this->upload->data("\146\165\154\x6c\137\160\x61\164\150");
        goto NP0x3;
        GcMka:
        qexzg:
        goto it2Qp;
        qE0_3:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto VXEXQ;
        hAnDn:
        $i++;
        goto GStPL;
        g2CHe:
        $config["\x61\x6c\x6c\157\167\145\144\137\x74\171\x70\145\x73"] = "\x78\154\x73\174\170\154\163\x78\x7c\x63\163\x76";
        goto KuMuY;
        bPUs5:
        if (!($i < count($sheetData))) {
            goto JPfkI;
        }
        goto hhCJD;
        bOOZq:
        goto c9NsX;
        goto xov6T;
        GStPL:
        goto EIAre;
        goto nNJOc;
        nNJOc:
        JPfkI:
        goto l2ZLa;
        Wa96d:
        c9NsX:
        goto qOxC3;
        qOxC3:
    }
    public function previewWord($id_bank)
    {
        goto Ln3U0;
        GIvhR:
        $this->upload->initialize($config);
        goto ppVm4;
        KOwyk:
        die;
        goto ry5R0;
        rSuiJ:
        goto ujzEk;
        goto ozvKp;
        Pd5TZ:
        $text = file_get_contents("\56\x2f\x75\x70\x6c\157\x61\144\163\57\164\x65\155\x70\57\144\x6f\x63\x2e\x68\164\x6d\x6c");
        goto IR3Xv;
        IN7uq:
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        goto iXV6O;
        QtZfL:
        $dataInsert = json_decode(json_encode($newhtml));
        goto D2FWP;
        tHXVT:
        $dom->preserveWhiteSpace = false;
        goto cYm4l;
        X9ZHV:
        echo $error;
        goto KOwyk;
        Kq5al:
        $file = $this->upload->data("\x66\x75\x6c\x6c\137\160\x61\164\150");
        goto rYPEi;
        wLjAA:
        $config["\155\141\170\x5f\163\151\x7a\145"] = 2048;
        goto LYyOi;
        lRWPZ:
        $dom->loadHTML($text);
        goto BbA1i;
        IR3Xv:
        $dom = new DOMDocument();
        goto tHXVT;
        MsMtI:
        $this->output_json($result);
        goto Fzlpj;
        tmJCk:
        $result["\x74\171\160\x65"] = "\150\164\155\x6c";
        goto rSuiJ;
        iXV6O:
        try {
            $htmlWriter->save("\x2e\x2f\165\x70\x6c\x6f\141\x64\163\x2f\164\145\x6d\x70\x2f\x64\x6f\143\x2e\150\164\155\154");
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
        }
        goto GJBxa;
        cYm4l:
        $dom->formatOutput = true;
        goto lRWPZ;
        baAMY:
        $numimg = 1;
        goto oOVo6;
        ozvKp:
        i2cTL:
        goto nCEho;
        u9LHc:
        YeYQ6:
        goto cNbHT;
        GJBxa:
        unlink($file);
        goto Pd5TZ;
        ppVm4:
        if (!$this->upload->do_upload("\165\x70\x6c\157\x61\144\137\146\x69\154\x65")) {
            goto i2cTL;
        }
        goto Kq5al;
        BbA1i:
        $images = $dom->getElementsByTagName("\x69\x6d\x67");
        goto baAMY;
        nCEho:
        $error = $this->upload->display_errors();
        goto X9ZHV;
        LYyOi:
        $config["\145\156\143\x72\171\160\x74\x5f\x6e\x61\x6d\x65"] = true;
        goto GIvhR;
        ry5R0:
        ujzEk:
        goto MsMtI;
        cNbHT:
        $newhtml = $dom->saveHTML();
        goto QtZfL;
        D2FWP:
        $result["\160\147"] = $dataInsert;
        goto tmJCk;
        Ln3U0:
        $config["\x75\x70\x6c\x6f\141\x64\x5f\x70\x61\x74\150"] = "\56\57\165\x70\x6c\157\141\144\x73\x2f\x69\x6d\160\x6f\x72\164";
        goto iJNPS;
        rYPEi:
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($file);
        goto IN7uq;
        iJNPS:
        $config["\141\154\154\x6f\x77\x65\144\137\164\x79\x70\145\x73"] = "\x64\157\143\170";
        goto wLjAA;
        oOVo6:
        foreach ($images as $image) {
            goto sx_wo;
            GvATG:
            wQMbE:
            goto z3m0d;
            RzXBj:
            $extension = "\152\x70\147";
            goto UbT5J;
            C9ICi:
            $image->setAttribute("\x73\x72\x63", "\165\x70\154\x6f\141\x64\x73\57\142\141\156\153\x5f\163\157\x61\154\57" . $output_file);
            goto bQvtU;
            MuDOz:
            $mime_split = explode("\57", $mime_split_without_base64[0], 2);
            goto izrAP;
            iDN5S:
            $extension = $mime_split[1];
            goto E0i1f;
            q6bIe:
            $mime_split_without_base64 = explode("\x3b", $mime, 2);
            goto MuDOz;
            bQvtU:
            $numimg++;
            goto GvATG;
            b2FQk:
            $output_file = "\151\155\147\137" . $id_bank . date("\131\x6d\144\x48\151\163") . $numimg . "\x2e" . $extension;
            goto H5cad;
            sx_wo:
            $base64_image_string = $image->getAttribute("\x73\162\143");
            goto KhBvm;
            E0i1f:
            if (!($extension == "\x6a\160\145\x67")) {
                goto putKy;
            }
            goto RzXBj;
            EJBrt:
            file_put_contents("\56\x2f\x75\x70\x6c\157\141\144\163\x2f\142\141\x6e\x6b\x5f\163\157\141\154\x2f" . $output_file, base64_decode($data));
            goto C9ICi;
            UbT5J:
            putKy:
            goto b2FQk;
            t2LUs:
            $mime = $splited[0];
            goto h6AXP;
            h6AXP:
            $data = $splited[1];
            goto q6bIe;
            H5cad:
            VygYg:
            goto EJBrt;
            izrAP:
            if (!(count($mime_split) == 2)) {
                goto VygYg;
            }
            goto iDN5S;
            KhBvm:
            $splited = explode("\x2c", substr($base64_image_string, 5), 2);
            goto t2LUs;
            z3m0d:
        }
        goto u9LHc;
        Fzlpj:
    }
    public function import()
    {
        goto DWRLo;
        mjSEI:
        $obj = json_decode($str);
        goto CgP8S;
        Ssd3j:
        $result["\163\157\x61\x6c"] = $obj;
        goto vHADZ;
        DWRLo:
        $bank_id = $this->input->post("\x62\141\156\x6b\137\x69\x64", true);
        goto hYk_3;
        U3Sb7:
        $str = preg_replace("\357\273\xbf", '', $input);
        goto mjSEI;
        hYk_3:
        $bank = $this->cbt->getDataBankById($bank_id);
        goto ApJYZ;
        CgP8S:
        $json = json_decode(preg_replace("\57\133\x5c\170\x30\60\x2d\x5c\170\61\x46\x5c\170\x38\60\x2d\134\170\x46\106\x5d\57", '', $input), true);
        goto KAkhk;
        vHADZ:
        $this->output_json($result);
        goto Be3W6;
        DGJqy:
        $soal = json_decode(json_encode($json));
        goto Ssd3j;
        ApJYZ:
        $input = $this->input->post("\147\x61\x6e\x64\x61");
        goto U3Sb7;
        KAkhk:
        $result["\x65\x72\162\157\162"] = json_last_error_msg();
        goto DGJqy;
        Be3W6:
    }
    public function export($bank_id)
    {
        goto g9FTI;
        Gcoj2:
        $table->addCell($width)->addText($this->cleanString($html), $fontStyle, $align);
        goto ULYic;
        ckZ6a:
        $align = array("\x61\154\151\147\156" => "\154\x65\x66\x74", "\163\x70\x61\x63\x65" => array("\142\x65\x66\157\162\x65" => 50, "\141\x66\164\145\x72" => 50), "\x69\156\144\x65\156\164\x61\x74\151\x6f\156" => array("\154\145\x66\164" => 100, "\162\x69\147\x68\164" => 100));
        goto sMaH_;
        TabMN:
        if ($c == 1) {
            goto eVe57;
        }
        goto NjLEx;
        k_U9f:
        $tagRemoved = strip_tags($arrVal[$c]);
        goto OdjV0;
        CZvD2:
        $section = $phpWord->addSection();
        goto Eh7QF;
        wMm_1:
        o7R2d:
        goto sNllC;
        L3ptu:
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        goto CZvD2;
        Qd0ae:
        $table->addCell($width)->addText($no, $fontStyle, $align);
        goto wKU4q;
        Q_A4d:
        goto lhZgG;
        goto mbA7r;
        AgPl8:
        $essai = array_merge($ess, $listEss);
        goto L3ptu;
        EwxBF:
        $c = 1;
        goto wMm_1;
        Mqr1D:
        $soal = $soals[$r - 1];
        goto p5GEL;
        zOqcH:
        $section->addPageBreak();
        goto ckhu2;
        C1_sZ:
        $soal[] = json_decode(json_encode(["\x73\157\x61\x6c" => '', "\157\160\x73\151\x5f\x61" => '', "\x6f\160\x73\151\x5f\x62" => '', "\x6f\x70\x73\151\x5f\x63" => '', "\x6f\160\x73\x69\x5f\144" => '', "\157\x70\x73\151\x5f\145" => '', "\x6a\x61\x77\x61\x62\141\x6e" => '']));
        goto QZmFw;
        bHOQ1:
        if ($c == 2) {
            goto IY0Tg;
        }
        goto SUpIM;
        iBtvV:
        $arrHeader = ['', "\116\x4f", "\x53\117\101\114", "\x4a\x41\x57\x41\102\101\x4e\x20\x41", "\112\101\127\101\102\101\116\40\102", "\112\x41\127\x41\102\x41\x4e\x20\x43", "\112\101\x57\101\x42\x41\116\x20\x44", "\x4a\x41\x57\101\102\x41\x4e\40\x45", "\x4a\x41\127\101\102\x41\116\x20\x42\x45\116\x41\x52"];
        goto QGTSp;
        ev3Rg:
        $no = $r - 1;
        goto R1MkR;
        bKqQm:
        $soal = $essai[$r - 1];
        goto SmMQs;
        CKcLc:
        $align = array("\x61\x6c\151\x67\x6e" => "\154\x65\x66\164", "\163\x70\141\x63\x65" => array("\142\x65\x66\157\162\145" => 50, "\x61\x66\x74\145\x72" => 50), "\151\156\144\x65\x6e\164\141\x74\x69\157\x6e" => array("\154\145\146\x74" => 100, "\162\151\x67\150\x74" => 100));
        goto iGRV4;
        gfbMB:
        l4jBd:
        goto iwWMe;
        kzsX1:
        $arrHeader = ['', "\x4e\117", "\x53\117\101\x4c", "\112\x41\127\101\x42\x41\116"];
        goto nNygQ;
        eIyJR:
        IY0Tg:
        goto OxhBR;
        wKU4q:
        Al0z1:
        goto E1Ue_;
        milr4:
        $r = 1;
        goto K9y1L;
        vS2BK:
        if ($c == 1) {
            goto HDnjr;
        }
        goto k_U9f;
        BZHed:
        if ($c == 1) {
            goto Qexip;
        }
        goto tdKSR;
        mHFlx:
        goto cBKI7;
        goto QL36c;
        yvMlj:
        $ess[] = json_decode(json_encode(["\x73\157\x61\154" => '', "\152\141\x77\x61\142\141\x6e" => '']));
        goto Rg14D;
        SmMQs:
        $arrVal = ['', '', isset($soal) ? $soal->soal : '', isset($soal) ? $soal->jawaban : ''];
        goto ndqLm;
        uihmO:
        $objWriter->save("\x70\150\160\72\x2f\x2f\x6f\x75\164\x70\x75\164");
        goto UChK4;
        ECuVG:
        trTq2:
        goto ILZO7;
        iwWMe:
        if ($r == 1) {
            goto Fzh2O;
        }
        goto TabMN;
        LQc0x:
        $tableStyle = array("\142\x6f\x72\x64\x65\162\123\151\x7a\x65" => 6, "\x62\157\x72\144\145\x72\x43\157\x6c\157\x72" => "\60\60\60\60\60\60");
        goto cbhpZ;
        kdleW:
        if (!($c <= $cols)) {
            goto GUSfN;
        }
        goto uKt6g;
        OxhBR:
        $width = 8000;
        goto Kj3YX;
        a2sg8:
        $align = array("\x61\x6c\151\147\156" => "\x63\145\x6e\x74\145\162", "\x73\x70\141\143\145" => array("\x62\145\x66\x6f\162\145" => 50, "\141\x66\164\x65\162" => 50), "\151\156\x64\x65\156\x74\141\164\151\157\x6e" => array("\154\x65\x66\x74" => 100, "\162\x69\x67\150\164" => 100));
        goto OfH0u;
        ToG92:
        $no = "\116\x4f";
        goto m5ydp;
        QGTSp:
        $cols = 8;
        goto EV6nl;
        sNllC:
        if (!($c <= $cols)) {
            goto ykfdo;
        }
        goto PTFBk;
        R1MkR:
        if (!($r == 1)) {
            goto D5tK5;
        }
        goto xJASJ;
        p6Q4T:
        $table->addCell($width)->addText($arrHeader[$c], $fontStyle, $align);
        goto Q_A4d;
        uaH_b:
        $align = array("\141\154\151\147\x6e" => "\143\145\156\x74\145\162", "\163\x70\x61\143\145" => array("\142\x65\146\x6f\162\x65" => 50, "\141\x66\x74\145\x72" => 50), "\x69\x6e\x64\x65\x6e\164\141\164\151\157\156" => array("\x6c\x65\x66\164" => 50, "\x72\x69\147\x68\164" => 50));
        goto H5m0d;
        dNn44:
        goto cBKI7;
        goto BNjhC;
        Wd0Lb:
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, "\127\x6f\162\x64\62\x30\x30\x37");
        goto WpfpO;
        Gq2rX:
        NuWWI:
        goto uiiXu;
        dXuw0:
        cBKI7:
        goto IWgsu;
        uKt6g:
        $width = 4000;
        goto ckZ6a;
        bykbD:
        $table->addCell($width)->addText($no, $fontStyle, $align);
        goto PJ83T;
        EZcXf:
        $table = $section->addTable("\164\x61\142\x20\x73\164\x79\x6c\145");
        goto milr4;
        YsBFN:
        RWmvr:
        goto kdleW;
        EyHCl:
        if ($c == 2) {
            goto xhYey;
        }
        goto mHFlx;
        dGP7F:
        $c++;
        goto pPqh3;
        adMgH:
        Fzh2O:
        goto BZHed;
        W26zH:
        if (!($r == 1)) {
            goto l4jBd;
        }
        goto ToG92;
        kb1eW:
        $table->addCell($width)->addText($no, $fontStyle, $align);
        goto ECuVG;
        iGRV4:
        if ($c == 1) {
            goto NuWWI;
        }
        goto bHOQ1;
        Kj3YX:
        CRyA2:
        goto pvqux;
        hhy30:
        vwp0k:
        goto KlxN2;
        m5ydp:
        $align = array("\x61\x6c\x69\x67\156" => "\143\x65\x6e\164\x65\162", "\x73\x70\x61\143\145" => array("\142\145\146\x6f\162\x65" => 50, "\x61\x66\164\145\162" => 50), "\151\x6e\x64\145\x6e\x74\x61\164\x69\157\156" => array("\154\x65\x66\164" => 50, "\x72\151\147\150\x74" => 50));
        goto FCknM;
        ehrQy:
        eVe57:
        goto kb1eW;
        E1Ue_:
        goto w_UVG;
        goto HP3wg;
        XyLqH:
        ykfdo:
        goto KcHM6;
        mRjG3:
        HK0db:
        goto dGP7F;
        gGd8M:
        HDnjr:
        goto Qd0ae;
        ZT0qW:
        $table->addCell($width)->addText($no, $fontStyle, $align);
        goto x3H4G;
        pPqh3:
        goto RWmvr;
        goto LWgtc;
        uiiXu:
        $align = array("\141\154\x69\x67\156" => "\x63\145\x6e\x74\145\162", "\163\x70\141\x63\x65" => array("\142\x65\146\x6f\162\145" => 50, "\141\146\164\145\x72" => 50), "\151\156\144\x65\156\164\141\x74\151\157\x6e" => array("\154\x65\146\164" => 100, "\x72\x69\147\150\x74" => 100));
        goto gr96l;
        WpfpO:
        header("\103\x6f\156\x74\x65\x6e\x74\x2d\104\x69\163\x70\x6f\163\151\x74\x69\x6f\156\x3a\40\x61\x74\x74\141\x63\x68\x6d\145\156\x74\x3b\40\146\x69\x6c\x65\x6e\x61\155\145\75\x53\157\x61\154\40" . $bank->nama_mapel . "\56\144\x6f\x63\170");
        goto uihmO;
        S2a4M:
        if ($c == 1) {
            goto ZCOOa;
        }
        goto p6Q4T;
        EV6nl:
        $section->addText("\x49\x2e\40\120\111\114\x49\x48\101\x4e\x20\107\x41\116\104\101", $header);
        goto LQc0x;
        x3H4G:
        lhZgG:
        goto nk1Jl;
        NjLEx:
        $tagRemoved = strip_tags($arrVal[$c]);
        goto Yv9we;
        SN1t_:
        if (!($r <= count($essai))) {
            goto jYKY3;
        }
        goto bKqQm;
        sMaH_:
        if ($c == 1) {
            goto dCd1F;
        }
        goto EyHCl;
        SUpIM:
        goto CRyA2;
        goto Gq2rX;
        ULYic:
        goto Al0z1;
        goto gGd8M;
        TfKkb:
        jYKY3:
        goto Wd0Lb;
        HP3wg:
        HPK26:
        goto S2a4M;
        J0y8n:
        $table = $section->addTable("\164\141\142\40\x73\x74\171\x6c\145");
        goto ekbtQ;
        ckhu2:
        $section->addText("\111\x49\x2e\x20\x45\x53\x53\x41\x49", $header);
        goto kzsX1;
        ndqLm:
        $table->addRow();
        goto EwxBF;
        PJ83T:
        xxvvs:
        goto RLOcO;
        K45i8:
        $phpWord->addTableStyle("\164\x61\x62\x20\163\164\x79\154\x65", $tableStyle);
        goto J0y8n;
        mtdCV:
        $width = 8000;
        goto dXuw0;
        K9y1L:
        Z1tex:
        goto C3iJM;
        gVHrm:
        $table->addCell($width)->addText($this->cleanString($html), $fontStyle, $align);
        goto xlXlt;
        cbhpZ:
        $phpWord->addTableStyle("\164\x61\x62\40\163\164\x79\154\x65", $tableStyle);
        goto EZcXf;
        Yv9we:
        $html = htmlspecialchars($tagRemoved);
        goto gVHrm;
        C3iJM:
        if (!($r <= count($soals))) {
            goto aGCAt;
        }
        goto Mqr1D;
        xlXlt:
        goto trTq2;
        goto ehrQy;
        A4w1B:
        knjX4:
        goto SN1t_;
        OfH0u:
        $width = 500;
        goto dNn44;
        tdKSR:
        $table->addCell($width)->addText($arrHeader[$c], $fontStyle, $align);
        goto Q9k6J;
        bhrY1:
        aGCAt:
        goto zOqcH;
        cADru:
        goto CRyA2;
        goto eIyJR;
        g9FTI:
        $bank = $this->cbt->getDataBankById($bank_id);
        goto C1_sZ;
        VJeaG:
        D5tK5:
        goto GC9Ye;
        PTFBk:
        $width = 4000;
        goto CKcLc;
        GC9Ye:
        if ($r == 1) {
            goto HPK26;
        }
        goto vS2BK;
        AQAQW:
        Qexip:
        goto bykbD;
        LelT8:
        $soals = array_merge($soal, $list);
        goto yvMlj;
        pvqux:
        $fontStyle = array("\163\x69\x7a\x65" => 10, "\142\157\154\144" => false);
        goto uYihX;
        gr96l:
        $width = 500;
        goto cADru;
        OdjV0:
        $html = htmlspecialchars($tagRemoved);
        goto Gcoj2;
        bbq8U:
        goto o7R2d;
        goto XyLqH;
        cve81:
        Mws6b:
        goto DZu5f;
        uYihX:
        $no = $r - 1;
        goto W26zH;
        BNjhC:
        xhYey:
        goto mtdCV;
        nNygQ:
        $cols = 3;
        goto K45i8;
        ZaBK7:
        $r++;
        goto CAJqh;
        QZmFw:
        $list = $this->cbt->getAllSoalByBank($bank_id, "\x31");
        goto LelT8;
        IWgsu:
        $fontStyle = array("\163\x69\x7a\145" => 10, "\142\157\154\144" => false);
        goto ev3Rg;
        p5GEL:
        $arrVal = ['', '', isset($soal) ? $soal->soal : '', isset($soal) ? $soal->opsi_a : '', isset($soal) ? $soal->opsi_b : '', isset($soal) ? $soal->opsi_c : '', isset($soal) ? $soal->opsi_d : '', isset($soal) ? $soal->opsi_e : '', isset($soal) ? $soal->jawaban : ''];
        goto B06fn;
        KlxN2:
        $r++;
        goto cv3lD;
        DZu5f:
        $c++;
        goto bbq8U;
        H5m0d:
        $fontStyle = array("\163\x69\172\x65" => 10, "\142\157\154\144" => true);
        goto VJeaG;
        B06fn:
        $table->addRow();
        goto bP73A;
        QL36c:
        dCd1F:
        goto a2sg8;
        LWgtc:
        GUSfN:
        goto hhy30;
        Eh7QF:
        $header = array("\x73\151\x7a\145" => 10, "\x62\157\154\x64" => true);
        goto iBtvV;
        Rg14D:
        $listEss = $this->cbt->getAllSoalByBank($bank_id, "\62");
        goto AgPl8;
        ILZO7:
        goto TLCAX;
        goto adMgH;
        RLOcO:
        TLCAX:
        goto cve81;
        FCknM:
        $fontStyle = array("\163\x69\172\145" => 10, "\x62\157\154\144" => true);
        goto gfbMB;
        CAJqh:
        goto knjX4;
        goto TfKkb;
        mbA7r:
        ZCOOa:
        goto ZT0qW;
        KcHM6:
        B18P4:
        goto ZaBK7;
        bP73A:
        $c = 1;
        goto YsBFN;
        Q9k6J:
        goto xxvvs;
        goto AQAQW;
        nk1Jl:
        w_UVG:
        goto mRjG3;
        ekbtQ:
        $r = 1;
        goto A4w1B;
        cv3lD:
        goto Z1tex;
        goto bhrY1;
        xJASJ:
        $no = "\x4e\117";
        goto uaH_b;
        UChK4:
    }
    public function getSoalSiswa($id_bank)
    {
        goto JQqaq;
        BZ06y:
        $this->output_json($data);
        goto gfLiD;
        JQqaq:
        $soals = $this->cbt->getAllSoalByBank($id_bank);
        goto i4ARe;
        h0Iuf:
        xOTMw:
        goto ZpEpF;
        ZpEpF:
        $data["\163\x6f\141\154"] = $soals;
        goto BZ06y;
        i4ARe:
        foreach ($soals as $soal) {
            goto GbG5M;
            dn6l0:
            $soal->jawaban = unserialize($soal->jawaban);
            goto A6XXy;
            GbG5M:
            $soal->file = unserialize($soal->file);
            goto xZptc;
            V0ZcB:
            goto WTEt2;
            goto HkgSG;
            xZptc:
            if ($soal->jenis == "\x32") {
                goto x83IA;
            }
            goto dm1lM;
            wri3U:
            goto WTEt2;
            goto yo6UV;
            yo6UV:
            OWZGi:
            goto cVtAJ;
            cVtAJ:
            $soal->jawaban = unserialize($soal->jawaban);
            goto vEs8V;
            vEs8V:
            WTEt2:
            goto DWwja;
            A6XXy:
            $soal->opsi_a = unserialize($soal->opsi_a);
            goto wri3U;
            dm1lM:
            if ($soal->jenis == "\x33") {
                goto OWZGi;
            }
            goto V0ZcB;
            HkgSG:
            x83IA:
            goto dn6l0;
            DWwja:
            KJjvB:
            goto OtrR3;
            OtrR3:
        }
        goto h0Iuf;
        gfLiD:
    }
    function innerXML($node)
    {
        goto GflTU;
        GflTU:
        $doc = $node->ownerDocument;
        goto jOvki;
        wsOea:
        foreach ($node->childNodes as $child) {
            $frag->appendChild($child->cloneNode(TRUE));
            x36cG:
        }
        goto I7Y23;
        jOvki:
        $frag = $doc->createDocumentFragment();
        goto wsOea;
        K_TI0:
        return $doc->saveXML($frag);
        goto d2vCf;
        I7Y23:
        GBXG_:
        goto K_TI0;
        d2vCf:
    }
    public function file_config()
    {
        goto rmJ0i;
        BQZaR:
        return $this->load->library("\x75\160\x6c\x6f\141\x64", $config);
        goto oop2e;
        depJ4:
        $config["\145\156\143\x72\171\160\x74\137\156\141\155\x65"] = TRUE;
        goto BQZaR;
        ZwNCF:
        $config["\x75\160\154\x6f\x61\x64\137\160\141\164\x68"] = FCPATH . "\x75\x70\154\157\141\x64\x73\57\142\x61\156\x6b\x5f\163\157\141\x6c\x2f";
        goto qDPeU;
        rmJ0i:
        $allowed_type = ["\151\x6d\x61\147\x65\x2f\152\x70\145\147", "\x69\x6d\x61\147\145\x2f\152\160\x67", "\x69\x6d\141\147\145\57\x70\x6e\x67", "\151\155\x61\x67\145\57\x67\x69\x66", "\141\165\144\151\157\x2f\x6d\160\x65\147", "\x61\165\x64\x69\157\57\155\x70\x67", "\x61\165\144\151\157\x2f\155\160\x65\x67\63", "\141\x75\x64\151\157\57\x6d\160\x33", "\141\x75\144\151\157\x2f\x78\x2d\x77\141\x76", "\x61\165\x64\151\x6f\57\167\141\166\x65", "\x61\165\x64\151\x6f\x2f\167\141\166", "\166\151\144\145\157\57\155\160\64", "\141\x70\x70\154\151\x63\141\x74\151\x6f\156\x2f\157\x63\164\145\164\x2d\x73\x74\162\145\x61\x6d"];
        goto ZwNCF;
        qDPeU:
        $config["\141\x6c\154\x6f\x77\145\x64\x5f\164\171\x70\x65\x73"] = "\152\x70\x65\x67\x7c\x6a\160\147\x7c\160\156\x67\174\147\x69\146\x7c\155\160\x65\147\174\155\160\147\174\155\x70\x65\147\x33\x7c\155\160\x33\x7c\167\x61\166\174\x77\141\x76\145\174\155\x70\64";
        goto depJ4;
        oop2e:
    }
    public function validasi($jenis)
    {
        goto LoBOY;
        mwRgm:
        if ($jenis == 4) {
            goto jqel2;
        }
        goto DT_fd;
        LoBOY:
        $this->form_validation->set_rules("\163\157\141\154", "\x53\157\x61\154", "\162\145\161\165\151\162\145\144");
        goto n4YbK;
        xdA2O:
        $this->form_validation->set_rules("\152\x61\167\141\142\141\x6e\137\160\147", "\x4b\165\x6e\x63\151\40\x4a\x61\x77\x61\x62\141\156", "\x72\x65\161\165\151\162\x65\x64");
        goto yPAZB;
        n4YbK:
        if ($jenis == 1) {
            goto PQXTZ;
        }
        goto HVnPK;
        ddsAI:
        sh7hs:
        goto ZuLxf;
        ZQTW1:
        goto oDxLV;
        goto ddsAI;
        kkmBS:
        jyDGr:
        goto iV85R;
        Wnw6X:
        $this->form_validation->set_rules("\x6a\141\167\x61\142\141\x6e\x5f\x62\x65\x6e\x61\162\x5f\160\x67\62\133\135", "\x4b\x75\156\143\151\x20\112\x61\x77\141\142\x61\156", "\162\145\x71\165\151\x72\x65\x64");
        goto ZQTW1;
        Wbyey:
        goto oDxLV;
        goto IUTi2;
        iV85R:
        $this->form_validation->set_rules("\152\141\x77\x61\x62\141\156\x32\137\141", "\x4b\x75\156\x63\151\40\112\x61\x77\141\x62\141\156", "\x72\x65\x71\165\x69\x72\145\144");
        goto Wnw6X;
        kziW3:
        oDxLV:
        goto dFn4H;
        yPAZB:
        goto oDxLV;
        goto kkmBS;
        iV_l6:
        goto oDxLV;
        goto F0IU7;
        DT_fd:
        $this->form_validation->set_rules("\152\141\167\141\142\141\156\x5f\x65\163\x73\x61\x69", "\x4b\x75\x6e\x63\151\40\x4a\141\x77\x61\x62\141\x6e", "\x72\145\x71\165\x69\162\x65\144");
        goto Wbyey;
        ZuLxf:
        $this->form_validation->set_rules("\152\x61\167\141\142\x61\156\137\152\157\144\157\x68\153\x61\156", "\x4b\x75\x6e\143\151\x20\112\141\x77\x61\142\141\x6e", "\162\145\x71\165\x69\162\145\144");
        goto iV_l6;
        EhWWr:
        if ($jenis == 3) {
            goto sh7hs;
        }
        goto mwRgm;
        IUTi2:
        PQXTZ:
        goto xdA2O;
        HVnPK:
        if ($jenis == 2) {
            goto jyDGr;
        }
        goto EhWWr;
        F0IU7:
        jqel2:
        goto aBgcw;
        aBgcw:
        $this->form_validation->set_rules("\152\141\x77\141\142\x61\x6e\137\151\x73\151\x61\156", "\x4b\x75\x6e\143\x69\x20\x4a\141\167\x61\x62\x61\156", "\x72\145\x71\x75\151\x72\145\144");
        goto kziW3;
        dFn4H:
    }
    public function saveSoal()
    {
        goto aDGgD;
        xHM8V:
        OTm4Q:
        goto LDSTd;
        c5AKA:
        $abjad = ["\141", "\142", "\x63", "\144", "\145"];
        goto w_EI5;
        nBYiq:
        ojCxF:
        goto RxgP9;
        YXJii:
        $opsis[chr($i)] = $op;
        goto LjfRI;
        zw2cb:
        V07pS:
        goto rcwc9;
        F6dwN:
        $data["\152\x61\x77\141\142\x61\156"] = serialize($jawabans);
        goto ihPcg;
        K2f3l:
        if ($method === "\141\144\x64") {
            goto S1vCT;
        }
        goto ToQvS;
        C_rEz:
        S1vCT:
        goto PZ5Ff;
        ID3kj:
        goto T2oTR;
        goto xHM8V;
        Qzf5Z:
        FktCb:
        goto c5AKA;
        LjfRI:
        H0q06:
        goto zw2cb;
        hQsdC:
        if (!($i <= $jwb_pg2)) {
            goto E09xq;
        }
        goto CEXXP;
        JcQRw:
        R4Tsj:
        goto w6iJm;
        xKRY3:
        $this->logging->saveLog(4, "\155\x65\156\147\145\x64\x69\x74\x20\163\x6f\141\154");
        goto KG9Nq;
        pK2tW:
        $i = 97;
        goto JcQRw;
        w6iJm:
        if (!($i < 117)) {
            goto NV19m;
        }
        goto HAT3m;
        yuGEi:
        if ($jenis == 4) {
            goto ojCxF;
        }
        goto YihVY;
        LDSTd:
        $opsis = [];
        goto pK2tW;
        CwaiD:
        T2oTR:
        goto ezNul;
        oenX9:
        sucOb:
        goto rXGby;
        NQjlm:
        SZJ7j:
        goto kwGn7;
        E0bEw:
        if ($jenis == 2) {
            goto OTm4Q;
        }
        goto Nmzys;
        KG9Nq:
        hhn4f:
        goto ROWgw;
        kcNHl:
        $data["\152\x61\x77\x61\x62\x61\156"] = serialize($jwb_jodohkan);
        goto SYzti;
        gJDZk:
        $i = 0;
        goto Nlwts;
        cExls:
        goto hhn4f;
        goto ZkmWI;
        PHeyg:
        NV19m:
        goto TYkbG;
        ezNul:
        if ($this->form_validation->run() === FALSE) {
            goto sucOb;
        }
        goto K2f3l;
        KiRFD:
        $result["\x74\x65\163\x74"] = $decoded;
        goto feJo0;
        PZ5Ff:
        $data["\x63\162\x65\x61\x74\145\x64\x5f\x6f\156"] = time();
        goto a9mqH;
        rXGby:
        $result["\x73\164\141\x74\x75\163"] = "\x65\x72\x72\157\x72";
        goto Ej0A3;
        Nlwts:
        yC10g:
        goto hQsdC;
        w_EI5:
        foreach ($abjad as $abj) {
            $data["\157\160\163\151\x5f" . $abj] = $this->input->post("\152\x61\167\x61\x62\x61\156\x5f" . $abj, false);
            vJnJX:
        }
        goto NQjlm;
        TF3_U:
        $i++;
        goto lPUMH;
        ZkmWI:
        vIQgj:
        goto rcUYq;
        O5Z4S:
        $this->logging->saveLog(3, "\x6d\x65\155\142\165\x61\x74\x20\x73\157\x61\154");
        goto MMYvd;
        Nmzys:
        if ($jenis == 3) {
            goto kI1yH;
        }
        goto yuGEi;
        pZlxk:
        E09xq:
        goto F6dwN;
        Ej0A3:
        s6OLu:
        goto KiRFD;
        fmjGA:
        $result["\x73\164\x61\x74\x75\163"] = "\x34\x30\60\x20\115\x65\164\150\x6f\x64\40\156\157\164\40\x66\157\165\156\x64";
        goto cExls;
        YihVY:
        $data["\x6a\141\167\x61\x62\141\x6e"] = $this->input->post("\x6a\x61\167\x61\142\141\156\x5f\x65\x73\163\141\151", true);
        goto B3Yki;
        rdkIr:
        $result["\x73\164\x61\164\x75\163"] = "\123\x6f\x61\154\40\x62\145\162\150\141\x73\151\x6c\x20\x64\151\x62\165\x61\x74";
        goto O5Z4S;
        O2lQQ:
        kI1yH:
        goto mvHzy;
        feJo0:
        $this->output_json($result);
        goto w2fHk;
        Gbp8V:
        w5m9d:
        goto TF3_U;
        rcUYq:
        $id_soal = $this->input->post("\x73\157\141\x6c\x5f\x69\x64", true);
        goto ZnzmT;
        JBFYS:
        $decoded = json_decode($jawaban_jodohkan);
        goto TITf4;
        ToQvS:
        if ($method === "\145\144\151\x74") {
            goto vIQgj;
        }
        goto fmjGA;
        lPUMH:
        goto yC10g;
        goto pZlxk;
        vcA2z:
        array_push($jawabans, $jwb);
        goto Gbp8V;
        mvHzy:
        $jwb_jodohkan = ["\x6d\x6f\x64\145\154" => $this->input->post("\x6d\x6f\144\145\154", true), "\164\171\x70\145" => $this->input->post("\164\171\x70\145", true), "\x6a\141\x77\x61\142\x61\156" => json_decode($this->input->post("\x6a\141\x77\x61\142\141\156\x5f\x6a\157\x64\x6f\150\x6b\141\156", false))];
        goto kcNHl;
        RxgP9:
        $data["\152\x61\167\141\x62\141\156"] = $this->input->post("\152\141\x77\x61\x62\x61\x6e\x5f\x69\163\151\141\x6e", true);
        goto CwaiD;
        AlT9I:
        $jawabans = [];
        goto lrzGQ;
        B3Yki:
        goto T2oTR;
        goto Qzf5Z;
        UW71Y:
        $this->master->create("\143\x62\x74\137\x73\157\141\154", $data);
        goto rdkIr;
        CEXXP:
        $jwb = $this->input->post("\152\141\x77\x61\x62\x61\156\x5f\142\145\156\x61\162\137\x70\x67\62\x5b" . $i . "\135", true);
        goto vcA2z;
        tgPiV:
        $this->validasi($jenis);
        goto IuKVv;
        TITf4:
        $data = ["\142\x61\156\153\x5f\x69\x64" => $this->input->post("\142\141\x6e\x6b\x5f\151\x64", true), "\152\145\x6e\x69\x73" => $jenis, "\156\157\155\x6f\x72\x5f\x73\x6f\x61\154" => $this->input->post("\x6e\157\x6d\157\162\x5f\163\157\x61\154", true), "\163\157\x61\154" => $this->input->post("\x73\x6f\141\154", false)];
        goto Gnx3b;
        lrzGQ:
        $jwb_pg2 = count($this->input->post("\152\x61\167\x61\142\x61\x6e\137\142\145\x6e\141\x72\x5f\x70\147\x32", true));
        goto gJDZk;
        ROQ2G:
        $jenis = $this->input->post("\152\x65\156\151\x73", true);
        goto tgPiV;
        Gnx3b:
        if ($jenis == 1) {
            goto FktCb;
        }
        goto E0bEw;
        IuKVv:
        $this->file_config();
        goto xJd7P;
        gUNfo:
        $this->master->update("\x63\x62\x74\137\x73\x6f\x61\154", $data, "\151\144\x5f\x73\157\141\x6c", $id_soal);
        goto xuKx4;
        nbyb2:
        if (!($op != null)) {
            goto H0q06;
        }
        goto YXJii;
        ihPcg:
        goto T2oTR;
        goto O2lQQ;
        a9mqH:
        $data["\165\160\x64\x61\x74\145\144\137\x6f\156"] = time();
        goto UW71Y;
        xJd7P:
        $jawaban_jodohkan = $this->input->post("\x6a\141\x77\141\x62\141\156\x5f\152\x6f\144\x6f\150\x6b\141\156", false);
        goto JBFYS;
        ROWgw:
        goto UqWLJ;
        goto C_rEz;
        tycp7:
        goto R4Tsj;
        goto PHeyg;
        aDGgD:
        $method = $this->input->post("\155\x65\x74\150\157\144", true);
        goto ROQ2G;
        kwGn7:
        $data["\x6a\x61\167\x61\142\x61\156"] = $this->input->post("\x6a\x61\x77\x61\142\x61\156\137\x70\x67", true);
        goto ID3kj;
        rcwc9:
        $i++;
        goto tycp7;
        SYzti:
        goto T2oTR;
        goto nBYiq;
        xuKx4:
        $result["\x73\164\141\x74\x75\x73"] = "\x53\x6f\x61\x6c\40\x62\x65\162\150\141\163\151\x6c\40\144\151\x75\x70\144\x61\164\x65";
        goto xKRY3;
        ZnzmT:
        $data["\165\160\x64\x61\164\x65\x64\137\157\x6e"] = time();
        goto gUNfo;
        MMYvd:
        UqWLJ:
        goto bSYOL;
        HAT3m:
        $op = $this->input->post("\x6a\x61\x77\x61\142\x61\156\x32\x5f" . chr($i), false);
        goto nbyb2;
        bSYOL:
        goto s6OLu;
        goto oenX9;
        TYkbG:
        $data["\157\x70\163\151\137\x61"] = serialize($opsis);
        goto AlT9I;
        w2fHk:
    }
    function base64_to_jpeg($base64_string, $output_file)
    {
        goto pD0Rp;
        InneV:
        return $output_file;
        goto mOUM9;
        pD0Rp:
        $ifp = fopen($output_file, "\x77\x62");
        goto cNHQz;
        cNHQz:
        $data = explode("\x2c", $base64_string);
        goto fZT05;
        fZT05:
        fwrite($ifp, base64_decode($data[1]));
        goto WIPL0;
        WIPL0:
        fclose($ifp);
        goto InneV;
        mOUM9:
    }
    public function hapusSoal()
    {
        goto lqX_Q;
        H8XsT:
        $nomor = $result->nomor_soal;
        goto cyojx;
        Fqwx1:
        $this->output_json($deleted);
        goto BSS7i;
        vHCrG:
        $this->db->where("\151\144\137\x73\157\141\154", $id_soal);
        goto B6zt6;
        MJkYv:
        Vzkb_:
        goto Fqwx1;
        HI6f0:
        foreach ($all_soal as $soal) {
            goto fXOdU;
            DQj2u:
            $update[] = ["\x69\144\x5f\x73\x6f\x61\154" => $soal->id_soal, "\156\x6f\x6d\157\x72\137\x73\157\x61\154" => (int) $soal->nomor_soal - 1];
            goto anPF4;
            fXOdU:
            if (!((int) $soal->nomor_soal > (int) $nomor)) {
                goto JfnW8;
            }
            goto DQj2u;
            dvt4v:
            eS20Q:
            goto mfvmg;
            anPF4:
            JfnW8:
            goto dvt4v;
            mfvmg:
        }
        goto SQyjK;
        lqX_Q:
        $id_soal = $this->input->post("\163\157\x61\154\137\151\x64", true);
        goto jxARy;
        kHozR:
        $this->db->update_batch("\143\x62\x74\137\x73\x6f\x61\x6c", $update, "\151\x64\x5f\163\x6f\x61\x6c");
        goto MJkYv;
        SQyjK:
        f2L3E:
        goto kHozR;
        mmOH5:
        if (!$deleted) {
            goto Vzkb_;
        }
        goto HI6f0;
        B6zt6:
        $deleted = $this->db->delete("\143\x62\x74\x5f\163\157\x61\x6c");
        goto mmOH5;
        jxARy:
        $result = $this->cbt->getNomorSoalById($id_soal);
        goto EVBzT;
        cyojx:
        $update = [];
        goto vHCrG;
        EVBzT:
        $all_soal = $this->cbt->getNomorSoalByBankJenis($result->bank_id, $result->jenis);
        goto H8XsT;
        BSS7i:
    }
    function uploadFile()
    {
        goto JPucz;
        waL3x:
        MqVRl:
        goto m49k8;
        CjpDO:
        $data["\x66\151\154\145\156\x61\155\145"] = $nama_file_asal;
        goto GjkJw;
        DCNs2:
        $this->db->where("\x69\144\137\163\x6f\141\154", $id_soal);
        goto Tc2W0;
        dzVlc:
        Aw0aU:
        goto qXjBZ;
        yOVlA:
        $files = $soal == null || $soal->file == null ? [] : unserialize($soal->file);
        goto msthk;
        bkrPa:
        $src = "\x75\160\154\157\x61\144\x73\57\x62\x61\156\x6b\x5f\163\x6f\x61\x6c\57" . $kode_file . "\56" . $ext;
        goto JhH3O;
        dBIKi:
        $this->db->set("\146\151\154\x65", serialize($files));
        goto DCNs2;
        zQ3wX:
        $nama_file_asal = $_FILES["\146\151\154\145\x5f\x75\x70\154\x6f\141\x64\163"]["\156\x61\155\145"];
        goto k5JvL;
        fCeyf:
        $data["\163\x6f\141\154"] = $soal;
        goto NAJCW;
        D158o:
        $config["\x61\154\154\x6f\167\145\144\x5f\164\x79\x70\145\x73"] = "\x6d\x70\145\x67\x7c\x6d\160\x67\x7c\155\x70\145\147\x33\174\x6d\x70\x33\174\x77\141\166\x7c\167\x61\166\145\x7c\155\x70\x34\174\141\x76\x69";
        goto ppgfk;
        msthk:
        if (!isset($_FILES["\146\x69\154\145\x5f\x75\x70\x6c\x6f\141\x64\163"]["\x6e\141\155\x65"])) {
            goto VLGOD;
        }
        goto zQ3wX;
        p2Rme:
        $file = $this->upload->data();
        goto t6z3d;
        m49k8:
        $data["\163\x74\x61\164\x75\x73"] = false;
        goto MwwxB;
        IQGfK:
        $data["\164\x79\x70\x65"] = $type;
        goto Ntyp8;
        RRbnL:
        $config["\165\160\154\157\141\x64\x5f\x70\141\164\150"] = "\56\57\x75\x70\x6c\x6f\141\x64\163\57\142\141\156\153\137\163\x6f\141\154\x2f";
        goto D158o;
        AEElk:
        $data["\163\x72\143"] = $this->upload->display_errors();
        goto dzVlc;
        T9AGo:
        goto Aw0aU;
        goto waL3x;
        XLgEh:
        $this->output_json($data);
        goto I03jp;
        t6z3d:
        $ext = pathinfo($file["\x66\x69\154\145\137\156\x61\155\x65"], PATHINFO_EXTENSION);
        goto bkrPa;
        NDKEa:
        $data["\146\x69\154\x65\x73"] = $files;
        goto XLgEh;
        JhH3O:
        $data["\163\x72\143"] = $src;
        goto CjpDO;
        NAJCW:
        $files[] = ["\146\151\154\145\x5f\156\141\x6d\145" => $nama_file_asal, "\141\x6c\x69\141\163" => $kode_file, "\x73\162\x63" => $src, "\x74\171\x70\x65" => $type];
        goto dBIKi;
        Tc2W0:
        $this->db->update("\x63\142\x74\x5f\x73\x6f\141\154");
        goto T9AGo;
        lPuVl:
        $this->upload->initialize($config);
        goto ZKZdU;
        GjkJw:
        $data["\x73\x74\x61\164\x75\163"] = true;
        goto q2mXk;
        k5JvL:
        $kode_file = $id_soal . "\x5f" . time();
        goto RRbnL;
        Ntyp8:
        $data["\163\x69\x7a\x65"] = $_FILES["\146\151\154\x65\137\165\x70\x6c\157\141\x64\x73"]["\163\x69\172\145"];
        goto fCeyf;
        ZKZdU:
        if (!$this->upload->do_upload("\146\151\x6c\145\137\165\x70\x6c\x6f\141\144\x73")) {
            goto MqVRl;
        }
        goto p2Rme;
        z45oF:
        $soal = $this->cbt->getFileSoalById($id_soal);
        goto yOVlA;
        JPucz:
        $id_soal = $this->input->get("\x69\x64\x5f\163\x6f\141\154", true);
        goto z45oF;
        qXjBZ:
        VLGOD:
        goto NDKEa;
        ppgfk:
        $config["\146\x69\x6c\x65\x5f\156\141\x6d\145"] = $kode_file;
        goto lPuVl;
        q2mXk:
        $type = $_FILES["\146\151\x6c\x65\x5f\x75\x70\154\157\x61\144\163"]["\x74\171\x70\x65"];
        goto IQGfK;
        XYz0v:
        $filename = '';
        goto AEElk;
        MwwxB:
        $src = '';
        goto XYz0v;
        I03jp:
    }
    function upload_image()
    {
        goto ZO6Ff;
        tYr9b:
        if (!$this->upload->do_upload("\146\151\154\145")) {
            goto ADAvF;
        }
        goto kK7t5;
        L7CL2:
        vL4Rz:
        goto Q3v23;
        c8Z36:
        if (!isset($_FILES["\x66\151\x6c\x65"]["\156\141\x6d\x65"])) {
            goto hPT0A;
        }
        goto v1LDf;
        FdcJF:
        $this->upload->initialize($config);
        goto tYr9b;
        NHwGE:
        goto vL4Rz;
        goto fgWmU;
        fgWmU:
        ADAvF:
        goto EgL9R;
        kK7t5:
        $uploaded = $this->upload->data();
        goto TqmE2;
        lTFp5:
        $status = true;
        goto NHwGE;
        ZO6Ff:
        $status = false;
        goto c8Z36;
        EgL9R:
        $this->upload->display_errors();
        goto jACgM;
        Q3v23:
        hPT0A:
        goto UssPn;
        TqmE2:
        $data["\x66\x69\154\145\156\x61\x6d\x65"] = "\165\x70\x6c\157\x61\144\163\x2f\x62\141\156\153\137\x73\157\141\154\x2f" . $uploaded["\146\x69\x6c\145\x5f\156\141\155\x65"];
        goto lTFp5;
        nmjMi:
        $this->output_json($data);
        goto Vmqzz;
        QFfk9:
        $config["\x61\154\x6c\157\x77\x65\x64\x5f\x74\x79\x70\145\x73"] = "\x6a\160\x67\x7c\x6a\160\145\147\174\x70\x6e\x67\x7c\x67\151\146\174\x6d\160\63\174\x6f\147\147\174\167\x61\166\174\x6d\160\64\174\x6d\160\145\147\174\167\145\142\155";
        goto EFDw5;
        jACgM:
        $status = false;
        goto L7CL2;
        v1LDf:
        $config["\165\160\154\x6f\x61\x64\x5f\x70\141\x74\x68"] = "\x2e\57\x75\160\154\x6f\141\x64\163\x2f\142\141\156\153\137\163\157\x61\x6c\57";
        goto QFfk9;
        EFDw5:
        $config["\146\151\154\x65\x5f\x6e\x61\155\x65"] = "\146\151\x6c\145\137" . date("\131\x6d\144\110\151\x73");
        goto FdcJF;
        UssPn:
        $data["\x73\x74\141\x74\x75\x73"] = $status;
        goto nmjMi;
        Vmqzz:
    }
    function uploadSoalImage()
    {
        goto evYHf;
        leLDb:
        str_replace("\x25\x32\102", "\x2b", $src);
        goto wEeYd;
        jj2q6:
        $data["\163\162\x63"] = "\165\x70\154\157\x61\x64\163\x2f\x62\x61\x6e\x6b\137\x73\x6f\141\x6c\57" . $name;
        goto l3kOZ;
        wEeYd:
        $data["\163\x74\x61\x74\165\x73"] = file_put_contents("\56\57\165\x70\x6c\x6f\x61\x64\x73\57\x62\x61\x6e\x6b\x5f\163\157\x61\154\x2f" . $name, base64_decode($src));
        goto jj2q6;
        l3kOZ:
        $this->output_json($data);
        goto xE109;
        fdcwU:
        $src = $this->input->post("\163\162\143");
        goto leLDb;
        evYHf:
        $name = $this->input->post("\x6e\141\x6d\x65");
        goto fdcwU;
        xE109:
    }
    function deleteFile()
    {
        goto Fg0Di;
        pyuKE:
        UVLr6:
        goto Xa2rR;
        Fg0Di:
        $src = $this->input->post("\163\x72\x63");
        goto Ce9oz;
        gmu5S:
        if (!unlink($file_name)) {
            goto UVLr6;
        }
        goto zB3iC;
        zB3iC:
        echo "\106\151\154\145\x20\104\x65\154\145\x74\x65\40\123\x75\143\x63\x65\163\x73\x66\165\154\154\x79";
        goto pyuKE;
        Ce9oz:
        $file_name = str_replace(base_url(), '', $src);
        goto gmu5S;
        Xa2rR:
    }
    function cleanString($text)
    {
        goto M7aih;
        mV9lf:
        ksort($trans);
        goto jKx9D;
        QLwLT:
        $trans[chr(132)] = "\46\142\144\161\165\157\73";
        goto yHjd6;
        BxcAP:
        $trans[chr(134)] = "\46\x64\141\147\147\145\162\73";
        goto W4pie;
        ZQ1sF:
        $trans[chr(148)] = "\x26\162\144\161\165\x6f\73";
        goto mQSkM;
        OvBUb:
        $targets = array("\x5c\162\134\156", "\134\156", "\134\162", "\x5c\x74");
        goto UoTk9;
        M7aih:
        $text = preg_replace("\x2f\133\303\xa1\303\xa0\303\xa2\xc3\xa3\302\xaa\303\xa4\x5d\57\165", "\141", $text);
        goto Ovib1;
        T7C7J:
        $trans[chr(152)] = "\46\164\x69\154\144\x65\73";
        goto GhAJe;
        mQSkM:
        $trans[chr(149)] = "\x26\x62\x75\x6c\154\73";
        goto IcTGv;
        xKhFp:
        atTCN:
        goto CUw7R;
        imYmk:
        $trans[chr(155)] = "\46\162\163\141\161\165\x6f\73";
        goto R6eKT;
        vXhrh:
        $trans[chr(136)] = "\46\x63\x69\162\x63\73";
        goto v_Fsu;
        avbyf:
        $trans[chr(151)] = "\46\x6d\x64\141\x73\x68\73";
        goto T7C7J;
        apCI_:
        $text = str_replace("\40", "\x20", $text);
        goto A3gd4;
        W4pie:
        $trans[chr(135)] = "\x26\104\141\147\x67\x65\162\73";
        goto vXhrh;
        Ovib1:
        $text = preg_replace("\57\x5b\303\x81\303\200\303\x82\303\203\303\x84\135\57\165", "\101", $text);
        goto sbvxb;
        A3gd4:
        $text = str_replace("\303\247", "\143", $text);
        goto wOzlO;
        WqLaJ:
        $trans["\145\165\162\x6f"] = "\46\145\165\162\157\x3b";
        goto mV9lf;
        Bp0l0:
        $text = preg_replace("\x2f\133\xe2\200\x9c\342\x80\235\xc2\xab\302\273\xe2\x80\x9e\x5d\x2f\x75", "\x22", $text);
        goto NqPrL;
        lqMYN:
        $text = preg_replace("\x2f\x5b\303\232\xc3\x99\xc3\x9b\xc3\x9c\x5d\57\165", "\125", $text);
        goto b1Otd;
        eeyxO:
        $trans[chr(138)] = "\46\x53\x63\x61\162\x6f\156\73";
        goto Dcdov;
        yHjd6:
        $trans[chr(133)] = "\46\x68\x65\x6c\154\151\x70\73";
        goto BxcAP;
        g6eMJ:
        $trans[chr(145)] = "\x26\154\163\161\165\157\73";
        goto RQWCj;
        BT28U:
        $trans[chr(140)] = "\x26\117\105\x6c\151\147\73";
        goto g6eMJ;
        okAeT:
        $trans[chr(131)] = "\x26\x66\156\157\146\73";
        goto QLwLT;
        llBrw:
        $trans[chr(154)] = "\46\163\x63\x61\162\x6f\x6e\73";
        goto imYmk;
        I12Iw:
        $text = preg_replace("\57\x5b\xc3\211\xc3\x88\303\x8a\xc3\x8b\x5d\x2f\x75", "\105", $text);
        goto tl7ue;
        NxCpK:
        $trans[chr(147)] = "\x26\x6c\x64\x71\165\x6f\x3b";
        goto ZQ1sF;
        NqPrL:
        $text = str_replace("\xe2\x80\223", "\55", $text);
        goto apCI_;
        I2SrU:
        $text = str_replace("\xc3\x91", "\116", $text);
        goto CIIXq;
        vw3ox:
        $text = str_replace($targets, $results, $text);
        goto gur4n;
        Dcdov:
        $trans[chr(139)] = "\46\154\163\141\161\x75\x6f\x3b";
        goto BT28U;
        k90ZH:
        $text = preg_replace("\x2f\x5b\xc3\223\303\222\303\224\xc3\x95\303\x96\135\x2f\165", "\x4f", $text);
        goto iW0aE;
        C8oyJ:
        $trans[chr(130)] = "\46\163\x62\x71\165\157\x3b";
        goto okAeT;
        qjmeg:
        $text = preg_replace("\57\133\xc3\xad\xc3\254\303\xae\xc3\257\x5d\57\x75", "\x69", $text);
        goto xAIp1;
        tl7ue:
        $text = preg_replace("\x2f\x5b\303\xb3\xc3\xb2\xc3\264\303\xb5\xc2\272\303\xb6\135\x2f\x75", "\x6f", $text);
        goto k90ZH;
        IcTGv:
        $trans[chr(150)] = "\x26\156\144\x61\163\x68\x3b";
        goto avbyf;
        b1Otd:
        $text = preg_replace("\57\x5b\342\x80\231\xe2\x80\x98\342\200\xb9\342\200\xba\342\200\x9a\135\57\165", "\x27", $text);
        goto Bp0l0;
        GhAJe:
        $trans[chr(153)] = "\x26\x74\x72\x61\144\x65\73";
        goto llBrw;
        v_Fsu:
        $trans[chr(137)] = "\x26\160\145\162\x6d\151\154\x3b";
        goto eeyxO;
        HVjgK:
        $trans[chr(159)] = "\46\x59\x75\155\154\x3b";
        goto WqLaJ;
        q3zrg:
        $text = html_entity_decode($text);
        goto k5Rh0;
        gur4n:
        return $text;
        goto tfXho;
        wOzlO:
        $text = str_replace("\303\x87", "\103", $text);
        goto WfuPG;
        k5Rh0:
        $text = preg_replace("\x2f\x5b\x5e\50\134\170\62\60\55\134\170\x37\106\x29\135\x2a\57", '', $text);
        goto OvBUb;
        xAIp1:
        $text = preg_replace("\x2f\133\xc3\251\303\xa8\303\xaa\303\253\135\57\x75", "\145", $text);
        goto I12Iw;
        WfuPG:
        $text = str_replace("\303\xb1", "\156", $text);
        goto I2SrU;
        iW0aE:
        $text = preg_replace("\57\133\xc3\272\303\xb9\xc3\xbb\xc3\xbc\135\57\x75", "\x75", $text);
        goto lqMYN;
        UoTk9:
        $results = array("\x20", "\40", "\40", '');
        goto vw3ox;
        sbvxb:
        $text = preg_replace("\57\x5b\xc3\215\303\x8c\xc3\216\xc3\217\135\57\165", "\x49", $text);
        goto qjmeg;
        R6eKT:
        $trans[chr(156)] = "\x26\157\x65\154\151\147\73";
        goto HVjgK;
        jKx9D:
        foreach ($trans as $k => $v) {
            $text = str_replace($v, $k, $text);
            Oe24B:
        }
        goto xKhFp;
        CIIXq:
        $trans = get_html_translation_table(HTML_ENTITIES);
        goto C8oyJ;
        RQWCj:
        $trans[chr(146)] = "\46\x72\163\x71\x75\x6f\x3b";
        goto NxCpK;
        CUw7R:
        $text = strip_tags($text);
        goto q3zrg;
        tfXho:
    }
    function cleanHTML($html)
    {
        goto TKwhZ;
        kTTjx:
        $doc->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR | LIBXML_NOWARNING);
        goto sbUy7;
        sbUy7:
        return $doc->saveHTML();
        goto ujjln;
        TKwhZ:
        $doc = new DOMDocument();
        goto kTTjx;
        ujjln:
    }
    function addNamespaces($xml)
    {
        goto NemAx;
        SB4Mk:
        return $root;
        goto aUYsX;
        zNIPK:
        $root .= "\x3c\x2f\167\72\167\157\162\144\104\157\x63\x75\155\x65\156\164\x3e";
        goto SB4Mk;
        NemAx:
        $root = "\74\167\72\167\157\162\144\104\157\x63\165\155\145\x6e\x74\xd\12\40\40\40\40\40\x20\x20\40\170\x6d\154\156\163\x3a\167\75\x22\x68\x74\164\160\x3a\x2f\57\x73\143\150\145\155\141\x73\56\155\x69\x63\162\x6f\163\x6f\146\x74\56\x63\x6f\155\57\157\x66\146\151\143\145\57\167\157\162\144\57\x32\60\60\x33\x2f\167\x6f\162\144\x6d\154\x22\15\12\40\40\40\40\40\40\x20\x20\170\155\154\x6e\163\x3a\167\170\x3d\42\x68\164\164\x70\72\x2f\57\x73\x63\x68\145\x6d\x61\x73\x2e\x6d\x69\x63\x72\157\163\157\x66\x74\56\143\157\x6d\57\157\146\x66\x69\143\x65\57\x77\157\x72\x64\x2f\62\60\60\x33\57\141\165\170\x48\x69\x6e\164\42\15\12\40\x20\40\40\40\x20\x20\40\170\x6d\x6c\x6e\x73\72\x6f\75\42\x75\162\x6e\x3a\x73\143\150\x65\x6d\x61\x73\55\x6d\x69\x63\162\157\x73\157\x66\x74\55\143\x6f\x6d\72\x6f\146\x66\x69\x63\145\72\x6f\x66\x66\151\x63\x65\x22\x3e";
        goto WxHzy;
        WxHzy:
        $root .= $xml;
        goto zNIPK;
        aUYsX:
    }
    function doImport()
    {
        goto ZG8x7;
        ZG8x7:
        $bank_id = $this->input->post("\151\144\x5f\x62\141\156\x6b", true);
        goto IxWxA;
        yUapD:
        Bsyi3:
        goto cX6cP;
        cX6cP:
        $data_insert = [];
        goto zq4Mt;
        BoQYO:
        $data["\164\157\164\141\154"] = count($inserted);
        goto vhT2F;
        IxWxA:
        $string = $this->input->post("\x64\x61\x74\x61", false);
        goto KHSSl;
        DfVV4:
        $data["\x64\x61\164\x61\x5f\151\x6e\x73\x65\x72\x74"] = $inserted;
        goto BoQYO;
        v2MkJ:
        $this->output_json($data);
        goto Fx6ps;
        G6AuZ:
        a1Rem:
        goto GmSte;
        xEzMQ:
        $data["\151\x6e\163\x65\162\164"] = $this->db->insert_batch("\143\142\x74\x5f\x73\x6f\141\154", $inserted);
        goto wWZAY;
        jM3v4:
        $jml_seharusnya = $bank->tampil_pg + $bank->tampil_kompleks + $bank->tampil_jodohkan + $bank->tampil_isian + $bank->tampil_esai;
        goto mD0hV;
        P7ZuY:
        $total_soal = count($data_insert);
        goto R5Hj9;
        w9Ey1:
        goto mjL56;
        goto rhPeT;
        wWZAY:
        B_xW0:
        goto nHMLZ;
        ZA1oW:
        $data["\151\156\163\145\162\x74"] = 0;
        goto w9Ey1;
        R5Hj9:
        foreach ($data_insert as $dins) {
            $inserted[] = ["\142\141\x6e\x6b\x5f\151\x64" => $bank_id, "\x6a\x65\156\x69\163" => $dins["\152\x65\156\151\x73"], "\156\157\155\x6f\162\137\163\x6f\141\x6c" => $dins["\156\157\155\x6f\162\x5f\x73\157\141\x6c"], "\163\x6f\141\x6c" => $dins["\x73\157\141\x6c"], "\144\145\163\153\162\x69\x70\x73\x69" => '', "\x6b\x65\163\165\154\x69\x74\x61\156" => "\x38", "\x74\x69\155\145\162" => "\60", "\x74\x69\x6d\x65\162\137\155\145\156\x69\164" => "\x30", "\x66\151\x6c\x65" => $dins["\x66\x69\154\145"], "\164\x61\155\160\x69\154\x6b\x61\x6e" => "\x30", "\x63\x72\x65\141\x74\145\144\137\157\156" => time(), "\x75\160\x64\x61\164\x65\x64\137\157\x6e" => time(), "\157\x70\163\151\x5f\141" => isset($dins["\157\x70\x73\x69\137\x61"]) ? $dins["\x6f\160\163\151\137\x61"] : '', "\157\160\x73\x69\137\x62" => isset($dins["\x6f\160\x73\x69\137\x62"]) ? $dins["\157\160\163\151\137\x62"] : '', "\x6f\x70\x73\151\137\143" => isset($dins["\x6f\x70\163\151\x5f\143"]) ? $dins["\157\160\x73\151\x5f\143"] : '', "\x6f\160\163\151\x5f\x64" => isset($dins["\x6f\x70\163\151\x5f\144"]) ? $dins["\157\160\x73\151\x5f\144"] : '', "\x6f\160\163\151\x5f\x65" => isset($dins["\x6f\160\x73\151\137\145"]) ? $dins["\157\160\x73\151\x5f\x65"] : '', "\152\141\x77\x61\x62\141\x6e" => $dins["\152\141\167\x61\142\x61\156"], "\x74\141\x6d\x70\151\x6c\x6b\x61\x6e" => $total_soal == $jml_seharusnya ? "\61" : "\x30"];
            MUovo:
        }
        goto VOLeS;
        IizXH:
        $jml = [];
        goto BX3kX;
        wKk_q:
        $datas = [];
        goto IizXH;
        rhPeT:
        Yx5HP:
        goto z01Xb;
        nHMLZ:
        mjL56:
        goto v2MkJ;
        dXaKa:
        if (!$this->db->delete("\143\x62\164\137\x73\157\x61\154")) {
            goto B_xW0;
        }
        goto xEzMQ;
        VOLeS:
        ImLR8:
        goto DfVV4;
        BX3kX:
        foreach ($json as $jenis => $values) {
            goto U9EtH;
            M0chg:
            foreach ($values as $val) {
                goto uGmBH;
                vjQwN:
                if (!(isset($val->KUNCI) && strtolower($val->KUNCI) == "\x76")) {
                    goto k9QfH;
                }
                goto Y1Pj2;
                i5FOD:
                XUuMZ:
                goto W5kd0;
                PgiN_:
                if (!isset($val->KUNCI)) {
                    goto unqqx;
                }
                goto TVt9C;
                pNGtr:
                if ($jenis == "\x33") {
                    goto YcUui;
                }
                goto D74gs;
                MWBEk:
                goto qVisw;
                goto njT6O;
                Y1Pj2:
                $data_soal[$no]["\x6b\165\156\x63\x69"][strtolower($val->KUNCI)] = strtoupper($val->OPSI);
                goto G4ou2;
                t57VL:
                urWAe:
                goto kCzzh;
                gJT20:
                uWtGY:
                goto bXLnn;
                PmxpY:
                eK8qn:
                goto AZPMt;
                ufeKA:
                By25M:
                goto QnuC2;
                R8EkS:
                $data_soal[$no]["\x73\157\x61\x6c"] = $val->SOAL;
                goto ufeKA;
                KToFa:
                if (!(isset($val->KUNCI) && strtolower($val->KUNCI) == "\166")) {
                    goto XUuMZ;
                }
                goto CIt6b;
                Uj76b:
                $data_soal[$no]["\153\x75\156\143\x69"] = $val->KUNCI;
                goto gJT20;
                ALdyF:
                if (!isset($val->KD_KOLOM)) {
                    goto QVOc0;
                }
                goto ZFlN5;
                InfrP:
                $data_soal[$no]["\x6f\160\x73\151"][strtoupper($val->OPSI)] = $val->JAWABAN;
                goto KToFa;
                D74gs:
                if (!isset($val->KUNCI)) {
                    goto uWtGY;
                }
                goto Uj76b;
                h9xKy:
                if (!(isset($val->SOAL) && $val->SOAL != '')) {
                    goto By25M;
                }
                goto R8EkS;
                NZ6SO:
                qVisw:
                goto PmxpY;
                CIt6b:
                $data_soal[$no]["\x6b\165\156\143\151"][strtoupper($val->OPSI)] = strtolower($val->KUNCI);
                goto i5FOD;
                ynRXy:
                QVOc0:
                goto NZ6SO;
                bXLnn:
                goto qVisw;
                goto ylzPF;
                uGmBH:
                if (!isset($val->NO)) {
                    goto eK8qn;
                }
                goto UL3GU;
                q4G_3:
                if ($jenis == "\62") {
                    goto ZuP_o;
                }
                goto pNGtr;
                YqiKZ:
                X6K3X:
                goto ALdyF;
                tEEnv:
                unqqx:
                goto YqiKZ;
                QnuC2:
                if ($jenis == "\61") {
                    goto aevzF;
                }
                goto q4G_3;
                Ko5mq:
                ZuP_o:
                goto p3ZW6;
                W5kd0:
                Ea6Tv:
                goto MWBEk;
                AZPMt:
                f8fHM:
                goto tM_lU;
                TVt9C:
                $data_soal[$no]["\x6b\x75\x6e\143\x69"][strtoupper($val->KD_KUNCI)] = strtoupper($val->KUNCI);
                goto tEEnv;
                NGb_U:
                $data_soal[$no]["\x62\141\162\x69\163"][strtoupper($val->KD_BARIS)] = $val->BARIS;
                goto PgiN_;
                p3ZW6:
                if (!isset($val->OPSI)) {
                    goto Ea6Tv;
                }
                goto InfrP;
                ylzPF:
                aevzF:
                goto wc6IL;
                ZFlN5:
                $data_soal[$no]["\x6b\157\154\x6f\155"][strtoupper($val->KD_KOLOM)] = $val->KOLOM;
                goto ynRXy;
                sB1vm:
                if (!isset($val->KD_BARIS)) {
                    goto X6K3X;
                }
                goto NGb_U;
                kh9nS:
                $data_soal[$no]["\157\160\x73\151"][strtoupper($val->OPSI)] = $val->JAWABAN;
                goto vjQwN;
                wc6IL:
                if (!isset($val->OPSI)) {
                    goto urWAe;
                }
                goto kh9nS;
                kCzzh:
                goto qVisw;
                goto Ko5mq;
                UL3GU:
                $no = trim($val->NO);
                goto h9xKy;
                njT6O:
                YcUui:
                goto sB1vm;
                G4ou2:
                k9QfH:
                goto t57VL;
                tM_lU:
            }
            goto P0nvg;
            U9EtH:
            $data_soal = [];
            goto M0chg;
            P0nvg:
            C0PE_:
            goto eZwyF;
            sIq8f:
            DUfY5:
            goto ZDZf4;
            eZwyF:
            $datas[$jenis] = $data_soal;
            goto sIq8f;
            ZDZf4:
        }
        goto yUapD;
        Gtqhp:
        if (count($inserted) > 0) {
            goto Yx5HP;
        }
        goto ZA1oW;
        vhT2F:
        $data["\152\163\x6f\x6e"] = $json;
        goto Gtqhp;
        mD0hV:
        $json = json_decode($string);
        goto wKk_q;
        z01Xb:
        $this->db->where("\x62\141\156\x6b\x5f\151\144", $bank_id);
        goto dXaKa;
        KHSSl:
        $bank = $this->cbt->getDataBankById($bank_id);
        goto jM3v4;
        GmSte:
        $inserted = [];
        goto P7ZuY;
        zq4Mt:
        foreach ($datas as $jenis => $keys) {
            goto RQhN7;
            BsRdA:
            bp2P4:
            goto vYwtH;
            vYwtH:
            tUbc9:
            goto xUEti;
            RQhN7:
            foreach ($keys as $no => $v) {
                goto oAX7J;
                rjrtP:
                foreach ($v["\x6b\x6f\x6c\x6f\155"] as $kd_kol => $kol) {
                    goto iOpfB;
                    p1FN_:
                    foreach ($v["\x6b\165\x6e\x63\151"] as $kd_bar => $kd_kol) {
                        goto gZQzP;
                        EqjIq:
                        $arrKol[$kd_bar] = explode("\54", $kd_kol);
                        goto Ij4xh;
                        gZQzP:
                        if (!($kd_kol != '')) {
                            goto dSuRx;
                        }
                        goto EqjIq;
                        JB6QM:
                        UvBua:
                        goto ZiCWQ;
                        Ij4xh:
                        dSuRx:
                        goto JB6QM;
                        ZiCWQ:
                    }
                    goto IX48r;
                    QnhNO:
                    array_push($header, $kol);
                    goto lRbh1;
                    oWNRR:
                    AS9m2:
                    goto tmV2W;
                    iOpfB:
                    $kolom[$kd_kol] = $kol;
                    goto D7diK;
                    lRbh1:
                    tls5J:
                    goto p1FN_;
                    D7diK:
                    if (!($kol != '')) {
                        goto tls5J;
                    }
                    goto QnhNO;
                    IX48r:
                    b0Gh3:
                    goto oWNRR;
                    tmV2W:
                }
                goto RaIfc;
                GIs6A:
                $jwbnBaris = [];
                goto nnTqS;
                FadcY:
                $insert["\157\160\x73\151\137\141"] = serialize($opsis);
                goto Ks3p1;
                stWyX:
                wOTvo:
                goto z5Kwx;
                gfg5M:
                $jwb_jodohkan = ["\155\x6f\x64\145\154" => $jml_baris == $jml_kolom ? "\61" : "\62", "\x74\171\x70\x65" => $type, "\x6a\x61\167\141\x62\141\156" => $baris];
                goto ZBlim;
                mwZbo:
                q11ct:
                goto fgsxj;
                ElSKx:
                O81gx:
                goto JEDSI;
                ScgIo:
                X1_Ff:
                goto hN0mP;
                Ks3p1:
                $insert["\152\x61\x77\x61\142\x61\156"] = serialize($kuncis);
                goto WDn2m;
                U3Rit:
                goto wOTvo;
                goto EVfla;
                QkHjm:
                array_push($baris, $header);
                goto GIs6A;
                Gbn4h:
                $header = [];
                goto wrA51;
                R0a90:
                QSDrW:
                goto RHiRL;
                Ku3PW:
                $insert["\152\141\167\x61\142\x61\156"] = $v["\153\x75\156\143\x69"];
                goto BGKud;
                jKmkK:
                $insert["\x6a\141\x77\141\x62\x61\156"] = strip_tags($v["\x6b\x75\x6e\x63\151"]);
                goto ZvBWq;
                LVJLz:
                if (!isset($v["\x6f\160\163\151"])) {
                    goto QSDrW;
                }
                goto LInne;
                ZvBWq:
                gydUx:
                goto stWyX;
                N1iB7:
                g53et:
                goto R0a90;
                WmY9g:
                if (!($isi_soal != '')) {
                    goto vsd8s;
                }
                goto svre4;
                ZBlim:
                $insert["\x6a\x61\x77\x61\142\141\x6e"] = serialize($jwb_jodohkan);
                goto vqDQB;
                v7dEk:
                $opsis = [];
                goto BslVl;
                Nt2Dz:
                $jml_baris = count($baris);
                goto tIAiv;
                f2JyZ:
                $insert["\157\160\163\x69\137\x64"] = isset($v["\x6f\x70\x73\151"]) && isset($v["\157\x70\x73\x69"]["\x44"]) ? $v["\157\160\x73\151"]["\x44"] : '';
                goto lST5N;
                Fn9GN:
                $arrKol = [];
                goto rjrtP;
                tIAiv:
                $jml_kolom = count($baris[0]);
                goto gfg5M;
                svre4:
                $insert = ["\x6a\145\156\151\x73" => $jenis, "\x6e\x6f\x6d\157\162\137\163\x6f\x61\x6c" => $no, "\163\157\141\154" => $isi_soal, "\146\151\154\x65" => serialize([])];
                goto WWVmf;
                RtBdw:
                $kolom = [];
                goto Gbn4h;
                jLK35:
                goto wOTvo;
                goto mwZbo;
                DuRU1:
                foreach ($jwbnBaris as $brs => $jml) {
                    goto M_3Bt;
                    FO3NZ:
                    array_push($types, "\143\x68\x65\x63\153\x62\157\x78");
                    goto h5WzW;
                    xqJUL:
                    if (!(isset($jmlType[1]) && $jmlType[1] > 1)) {
                        goto UyfOS;
                    }
                    goto FO3NZ;
                    h5WzW:
                    UyfOS:
                    goto dBrv0;
                    dBrv0:
                    UCpPQ:
                    goto iiAcu;
                    M_3Bt:
                    $jmlType = array_count_values($jml);
                    goto xqJUL;
                    iiAcu:
                }
                goto YSJLc;
                d5No5:
                ZXWWM:
                goto deWGH;
                TQcv0:
                if (!isset($v["\x6b\x75\x6e\x63\151"])) {
                    goto gydUx;
                }
                goto jKmkK;
                f8S2q:
                foreach ($v["\153\x75\156\x63\x69"] as $kunci => $jawaban) {
                    goto A8kam;
                    H3mhO:
                    Kw9Ei:
                    goto KiJlf;
                    KiJlf:
                    Kl1bS:
                    goto WhK66;
                    OA8wp:
                    $kuncis[] = strtolower($kunci);
                    goto H3mhO;
                    A8kam:
                    if (!($jawaban == "\x76")) {
                        goto Kw9Ei;
                    }
                    goto OA8wp;
                    WhK66:
                }
                goto Vk1nC;
                gVYrx:
                if ($jenis == "\64") {
                    goto QMKlT;
                }
                goto YWY5u;
                G7pBC:
                QMKlT:
                goto TQcv0;
                WDn2m:
                goto wOTvo;
                goto ScgIo;
                YSJLc:
                P40Tv:
                goto oWvRb;
                z6Ztj:
                vsd8s:
                goto d5No5;
                BGKud:
                KhJKR:
                goto jLK35;
                EVfla:
                Mp1fa:
                goto v7dEk;
                RHiRL:
                if (!isset($v["\153\x75\x6e\x63\151"])) {
                    goto R1r4_;
                }
                goto f8S2q;
                LInne:
                foreach ($v["\x6f\160\x73\x69"] as $opsi => $jawaban) {
                    $opsis[strtolower($opsi)] = $jawaban;
                    HO7wH:
                }
                goto N1iB7;
                PFFjX:
                $insert["\x6a\141\167\x61\142\x61\x6e"] = isset($v["\153\x75\x6e\x63\x69"]) && isset($v["\x6b\x75\156\x63\x69"]["\x76"]) ? $v["\153\x75\156\143\151"]["\166"] : '';
                goto U3Rit;
                DrxVP:
                if ($jenis == "\63") {
                    goto X1_Ff;
                }
                goto gVYrx;
                JEDSI:
                $types = [];
                goto DuRU1;
                gUNR1:
                if ($jenis == "\62") {
                    goto Mp1fa;
                }
                goto DrxVP;
                z5Kwx:
                $data_insert[] = $insert;
                goto z6Ztj;
                PkIRJ:
                R1r4_:
                goto FadcY;
                hN0mP:
                $baris = [];
                goto RtBdw;
                oWvRb:
                $type = count($types) > 0 ? "\x31" : "\x32";
                goto Nt2Dz;
                fgsxj:
                $insert["\157\x70\163\151\x5f\141"] = isset($v["\x6f\160\163\151"]) && isset($v["\157\x70\x73\151"]["\x41"]) ? $v["\x6f\x70\163\151"]["\x41"] : '';
                goto x819W;
                BslVl:
                $kuncis = [];
                goto LVJLz;
                oAX7J:
                $isi_soal = isset($v["\x73\157\141\x6c"]) ? $v["\x73\157\141\154"] : '';
                goto WmY9g;
                lST5N:
                $insert["\157\160\163\151\x5f\145"] = isset($v["\157\160\163\151"]) && isset($v["\x6f\x70\163\151"]["\105"]) ? $v["\x6f\160\163\151"]["\105"] : '';
                goto PFFjX;
                Vk1nC:
                IRciO:
                goto PkIRJ;
                nnTqS:
                foreach ($v["\x62\141\x72\151\163"] as $kd_bar => $bar) {
                    goto AzE25;
                    AzE25:
                    $jwbn = [];
                    goto EUgF0;
                    fIv9r:
                    y9IXi:
                    goto kto1H;
                    bVhmW:
                    xkLEO:
                    goto ZSk6j;
                    GYd0r:
                    BExEP:
                    goto Zzesr;
                    sRVOZ:
                    if (!(count($jwbn) > 0)) {
                        goto y9IXi;
                    }
                    goto aPh3d;
                    kto1H:
                    if (!($kd_bar != '')) {
                        goto xkLEO;
                    }
                    goto Ok2yR;
                    pp92h:
                    array_push($jwbn, $bar);
                    goto GYd0r;
                    Ok2yR:
                    array_shift($jwbn);
                    goto L7IHF;
                    L7IHF:
                    $jwbnBaris[$kd_bar] = $jwbn;
                    goto bVhmW;
                    ZSk6j:
                    q_7hb:
                    goto s1JUv;
                    Zzesr:
                    foreach ($kolom as $kk => $val) {
                        goto Ghs5_;
                        AyPtm:
                        hIgMY:
                        goto ZNBlk;
                        Ghs5_:
                        if (!($kd_bar != '' && $val != '' && isset($arrKol[$kd_bar]))) {
                            goto hIgMY;
                        }
                        goto XLRO9;
                        ZNBlk:
                        FLLKd:
                        goto MtFWZ;
                        XLRO9:
                        $match = in_array($kk, $arrKol[$kd_bar]);
                        goto i7UPB;
                        i7UPB:
                        array_push($jwbn, $match ? "\61" : "\60");
                        goto AyPtm;
                        MtFWZ:
                    }
                    goto vaUkc;
                    vaUkc:
                    IkvDT:
                    goto sRVOZ;
                    aPh3d:
                    array_push($baris, $jwbn);
                    goto fIv9r;
                    EUgF0:
                    if (!($kd_bar != '')) {
                        goto BExEP;
                    }
                    goto pp92h;
                    s1JUv:
                }
                goto ElSKx;
                x819W:
                $insert["\x6f\160\x73\151\x5f\x62"] = isset($v["\x6f\160\163\151"]) && isset($v["\157\160\x73\x69"]["\x42"]) ? $v["\x6f\x70\x73\151"]["\102"] : '';
                goto v36r_;
                RaIfc:
                Hdusa:
                goto QkHjm;
                v36r_:
                $insert["\x6f\160\163\151\137\143"] = isset($v["\x6f\x70\163\151"]) && isset($v["\157\160\x73\x69"]["\x43"]) ? $v["\157\160\163\151"]["\103"] : '';
                goto f2JyZ;
                WWVmf:
                if ($jenis == "\x31") {
                    goto q11ct;
                }
                goto gUNR1;
                vqDQB:
                goto wOTvo;
                goto G7pBC;
                YWY5u:
                if (!isset($v["\x6b\x75\156\x63\x69"])) {
                    goto KhJKR;
                }
                goto Ku3PW;
                wrA51:
                array_push($header, "\x23");
                goto Fn9GN;
                deWGH:
            }
            goto BsRdA;
            xUEti:
        }
        goto G6AuZ;
        Fx6ps:
    }
    function uploadSoal()
    {
        goto PUQZc;
        AE3Ac:
        foreach ($datas as $jenis => $nomor) {
            goto Sjqsi;
            Sjqsi:
            foreach ($nomor as $no => $v) {
                goto dEkW5;
                cqEtV:
                if ($jenis == "\63") {
                    goto Ub4lF;
                }
                goto qzpUJ;
                lIwmS:
                Nnca9:
                goto t89Ex;
                QXtEo:
                SR_8Q:
                goto gJbSJ;
                m8FLF:
                $types = [];
                goto KX2iz;
                jVINk:
                goto OJS7M;
                goto JMCIN;
                kBIzf:
                $insert["\157\160\x73\x69\x5f\x64"] = isset($v["\x6f\160\163\x69"]) && isset($v["\x6f\x70\x73\151"]["\104"]) ? rawurldecode($v["\x6f\160\x73\151"]["\104"]) : '';
                goto r9OMv;
                dX8Vd:
                OJS7M:
                goto aPeb8;
                aII9H:
                $jml_spg1++;
                goto gG2VR;
                JMCIN:
                rhRIl:
                goto iFFKR;
                I7JVR:
                foreach ($v["\153\x6f\154\157\x6d"] as $kd_kol => $kol) {
                    goto Xj2w9;
                    d4du9:
                    if (!($kol != '')) {
                        goto SlrEk;
                    }
                    goto rdQmV;
                    cPbfG:
                    SlrEk:
                    goto Gt3pF;
                    Xj2w9:
                    $kolom[$kd_kol] = $kol;
                    goto d4du9;
                    rdQmV:
                    array_push($header, $kol);
                    goto cPbfG;
                    gjxL7:
                    RkAS8:
                    goto oEta_;
                    oEta_:
                    SMxi9:
                    goto SJINU;
                    Gt3pF:
                    foreach ($v["\x6b\165\x6e\143\151"] as $kd_bar => $kd_kol) {
                        goto Y0jLj;
                        X7y37:
                        koZrV:
                        goto oflbI;
                        RkrIQ:
                        $arrKol[$kd_bar] = explode("\x2c", $kd_kol);
                        goto CniJK;
                        CniJK:
                        drPsB:
                        goto X7y37;
                        Y0jLj:
                        if (!($kd_kol != '')) {
                            goto drPsB;
                        }
                        goto RkrIQ;
                        oflbI:
                    }
                    goto gjxL7;
                    SJINU:
                }
                goto n1QQC;
                spihm:
                $insert["\157\160\x73\151\x5f\x62"] = isset($v["\157\160\x73\x69"]) && isset($v["\157\x70\x73\151"]["\x42"]) ? rawurldecode($v["\x6f\160\163\x69"]["\102"]) : '';
                goto QCW1X;
                K8PEM:
                gWyW1:
                goto SHD_C;
                BgPZ7:
                foreach ($v["\142\x61\x72\x69\163"] as $kd_bar => $bar) {
                    goto kQaJj;
                    V1Pch:
                    array_shift($jwbn);
                    goto W638N;
                    zc_VW:
                    if (!($kd_bar != '')) {
                        goto jdSIU;
                    }
                    goto V1Pch;
                    fRXLh:
                    array_push($jwbn, $bar);
                    goto c8C5s;
                    OEdm1:
                    jdSIU:
                    goto R82Ze;
                    W638N:
                    $jwbnBaris[$kd_bar] = $jwbn;
                    goto OEdm1;
                    qf1jo:
                    M_KI_:
                    goto oQ6XX;
                    B40pQ:
                    HiTyU:
                    goto zc_VW;
                    o3jiU:
                    foreach ($kolom as $kk => $val) {
                        goto j0Xaf;
                        j0Xaf:
                        if (!($kd_bar != '' && $val != '' && isset($arrKol[$kd_bar]))) {
                            goto ctdoS;
                        }
                        goto LKajn;
                        LKajn:
                        $match = in_array($kk, $arrKol[$kd_bar]);
                        goto tXldh;
                        yLIOi:
                        Y1tCm:
                        goto t4Trn;
                        UqVpi:
                        ctdoS:
                        goto yLIOi;
                        tXldh:
                        array_push($jwbn, $match ? "\x31" : "\60");
                        goto UqVpi;
                        t4Trn:
                    }
                    goto qf1jo;
                    kQaJj:
                    $jwbn = [];
                    goto bGgKL;
                    c8C5s:
                    mUjgz:
                    goto o3jiU;
                    fwKor:
                    array_push($baris, $jwbn);
                    goto B40pQ;
                    oQ6XX:
                    if (!(count($jwbn) > 0)) {
                        goto HiTyU;
                    }
                    goto fwKor;
                    bGgKL:
                    if (!($kd_bar != '')) {
                        goto mUjgz;
                    }
                    goto fRXLh;
                    R82Ze:
                    M6Vzx:
                    goto DhLur;
                    DhLur:
                }
                goto ewREN;
                y1x03:
                nFRNq:
                goto PEiZi;
                L1HAe:
                qUNFv:
                goto tCUya;
                aGtkO:
                $header = [];
                goto gvOFy;
                BgKYq:
                foreach ($v["\x6f\x70\x73\x69"] as $opsi => $jawaban) {
                    $opsis[strtolower($opsi)] = rawurldecode($jawaban);
                    sEPAD:
                }
                goto dXlwu;
                PEiZi:
                BUg07:
                goto MTEdY;
                cAVgy:
                $insert["\152\141\167\x61\x62\141\156"] = rawurldecode($v["\x6b\165\156\x63\x69"]);
                goto QXtEo;
                LI4kt:
                Ub4lF:
                goto SJCFb;
                BYR24:
                $jml_spg2++;
                goto dF7SL;
                aOh6w:
                $jwbnBaris = [];
                goto BgPZ7;
                luZFV:
                if (!isset($v["\153\x75\156\x63\151"])) {
                    goto SR_8Q;
                }
                goto cAVgy;
                G4oI_:
                $jml_kolom = count($baris[0]);
                goto eA3Vb;
                nJlfy:
                array_push($baris, $header);
                goto aOh6w;
                I1aVG:
                $insert = ["\152\x65\x6e\x69\163" => $jenis, "\156\x6f\x6d\x6f\162\x5f\163\x6f\141\x6c" => $no, "\x73\x6f\x61\x6c" => $isi_soal, "\146\151\154\x65" => serialize([])];
                goto z78Cc;
                SJCFb:
                $baris = [];
                goto q6axf;
                R0Duv:
                $arrKol = [];
                goto I7JVR;
                gvOFy:
                array_push($header, "\43");
                goto R0Duv;
                bA4bF:
                goto OJS7M;
                goto L1HAe;
                r9OMv:
                $insert["\x6f\x70\x73\x69\x5f\145"] = isset($v["\157\x70\x73\151"]) && isset($v["\x6f\x70\163\151"]["\x45"]) ? rawurldecode($v["\157\160\163\x69"]["\105"]) : '';
                goto ptAA0;
                LHZ9G:
                if (!isset($v["\x6b\165\156\143\151"])) {
                    goto BUg07;
                }
                goto tPkdE;
                q6axf:
                $kolom = [];
                goto aGtkO;
                ptAA0:
                $insert["\152\141\x77\141\142\141\x6e"] = isset($v["\153\165\156\143\x69"]) && count($v["\x6b\x75\x6e\143\151"]) > 0 ? $v["\153\165\156\143\151"][0] : '';
                goto aII9H;
                gJbSJ:
                $jml_sess++;
                goto jVINk;
                J8pHQ:
                xxhVW:
                goto u9sVS;
                c2Q7J:
                LXze3:
                goto xas6M;
                bfNVk:
                $kuncis = [];
                goto mhLU5;
                tCUya:
                if (!isset($v["\x6b\165\156\x63\x69"])) {
                    goto LXze3;
                }
                goto UsA2u;
                z78Cc:
                if ($jenis == 1) {
                    goto rhRIl;
                }
                goto li8Z7;
                QCW1X:
                $insert["\x6f\160\x73\151\137\143"] = isset($v["\x6f\x70\163\151"]) && isset($v["\157\x70\x73\151"]["\x43"]) ? rawurldecode($v["\x6f\160\x73\x69"]["\103"]) : '';
                goto kBIzf;
                EgonZ:
                $insert["\x6a\x61\x77\x61\x62\141\156"] = serialize($kuncis);
                goto BYR24;
                PatTn:
                if (!($isi_soal != '')) {
                    goto cPobt;
                }
                goto I1aVG;
                qzpUJ:
                if ($jenis == "\64") {
                    goto qUNFv;
                }
                goto luZFV;
                aPeb8:
                $data_insert[] = $insert;
                goto TD2a0;
                mhLU5:
                if (!isset($v["\157\x70\x73\x69"])) {
                    goto raXXp;
                }
                goto BgKYq;
                YAX4O:
                $insert["\152\141\x77\141\x62\141\156"] = serialize($jwb_jodohkan);
                goto KJ6D_;
                MTEdY:
                $insert["\x6f\x70\x73\x69\x5f\141"] = serialize($opsis);
                goto EgonZ;
                iFFKR:
                $insert["\x6f\x70\x73\x69\137\141"] = isset($v["\157\160\x73\x69"]) && isset($v["\x6f\x70\163\x69"]["\101"]) ? rawurldecode($v["\x6f\x70\163\x69"]["\x41"]) : '';
                goto spihm;
                KJ6D_:
                $jml_sjod++;
                goto bA4bF;
                UsA2u:
                $insert["\x6a\141\167\141\x62\141\156"] = strip_tags(rawurldecode($v["\153\165\156\x63\x69"]));
                goto c2Q7J;
                li8Z7:
                if ($jenis == "\x32") {
                    goto gWyW1;
                }
                goto cqEtV;
                t89Ex:
                $type = count($types) > 0 ? "\x31" : "\62";
                goto Nkpgv;
                Nkpgv:
                $jml_baris = count($baris);
                goto G4oI_;
                dEkW5:
                $isi_soal = isset($v["\163\157\x61\154"]) ? rawurldecode($v["\x73\157\x61\x6c"]) : '';
                goto PatTn;
                n1QQC:
                RzgUO:
                goto nJlfy;
                rme2m:
                raXXp:
                goto LHZ9G;
                gG2VR:
                goto OJS7M;
                goto K8PEM;
                dXlwu:
                letgm:
                goto rme2m;
                TD2a0:
                cPobt:
                goto J8pHQ;
                xas6M:
                $jml_siss++;
                goto dX8Vd;
                dF7SL:
                goto OJS7M;
                goto LI4kt;
                SHD_C:
                $opsis = [];
                goto bfNVk;
                ewREN:
                FfkW9:
                goto m8FLF;
                KX2iz:
                foreach ($jwbnBaris as $brs => $jml) {
                    goto kvfdG;
                    F27mg:
                    SgUok:
                    goto qioux;
                    kvfdG:
                    $jmlType = array_count_values($jml);
                    goto tFfS8;
                    oZsj6:
                    array_push($types, "\x63\150\145\x63\x6b\x62\157\170");
                    goto zbTBL;
                    zbTBL:
                    kRht0:
                    goto F27mg;
                    tFfS8:
                    if (!(isset($jmlType[1]) && $jmlType[1] > 1)) {
                        goto kRht0;
                    }
                    goto oZsj6;
                    qioux:
                }
                goto lIwmS;
                eA3Vb:
                $jwb_jodohkan = ["\x6d\x6f\x64\x65\154" => $jml_baris == $jml_kolom ? "\61" : "\62", "\x74\171\x70\x65" => $type, "\152\x61\167\x61\142\x61\x6e" => $baris];
                goto YAX4O;
                tPkdE:
                foreach ($v["\x6b\165\x6e\x63\151"] as $jawaban) {
                    array_push($kuncis, strtolower($jawaban));
                    DxwP_:
                }
                goto y1x03;
                u9sVS:
            }
            goto kXa95;
            kXa95:
            rgaFd:
            goto wwh7c;
            wwh7c:
            Hyuh_:
            goto ZdzkJ;
            ZdzkJ:
        }
        goto lOP5A;
        AaLG9:
        $total_soal = count($data_insert);
        goto OcY1Z;
        B1oWw:
        $tmpl["\x34"] = $jml_siss == $bank->tampil_isian ? "\61" : "\60";
        goto v2ICe;
        NP7my:
        EZREj:
        goto tXK9E;
        v0i4V:
        goto brFS4;
        goto wUsMz;
        v2ICe:
        $tmpl["\x35"] = $jml_sess == $bank->tampil_esai ? "\61" : "\x30";
        goto GRbNu;
        tXCbH:
        $data["\x64\x61\x74\x61\137\x69\x6e\163\x65\x72\164"] = $inserted;
        goto AMKd_;
        Y0RKS:
        $bank = $this->cbt->getDataBankById($bank_id);
        goto b5GIf;
        GRbNu:
        $inserted = [];
        goto AaLG9;
        W1Ktf:
        $tmpl["\x33"] = $jml_sjod == $bank->tampil_jodohkan ? "\61" : "\60";
        goto B1oWw;
        Fg9hf:
        $data_insert = [];
        goto AE3Ac;
        IA28P:
        $this->db->set("\163\x74\141\164\x75\163\137\163\157\141\154", $status_soal);
        goto DJdgW;
        v12qQ:
        if (!count($inserted)) {
            goto h5HZv;
        }
        goto IvNmb;
        b5GIf:
        $jml_spg1 = 0;
        goto z8jRZ;
        v7iIu:
        $soal_updated = $this->db->update("\143\142\x74\137\142\141\x6e\x6b\137\163\157\141\x6c");
        goto c9GH1;
        PUQZc:
        $bank_id = $this->input->post("\x69\x64\x5f\x62\141\x6e\x6b", true);
        goto NrzPp;
        yb5EL:
        h5HZv:
        goto yjxYf;
        c9GH1:
        $data["\163\x65\x6c\x65\163\141\x69"] = $soal_updated;
        goto yb5EL;
        AQQhE:
        $this->db->where("\142\x61\x6e\x6b\x5f\x69\x64", $bank_id);
        goto druzq;
        OcY1Z:
        foreach ($data_insert as $dins) {
            $inserted[] = ["\142\x61\156\153\x5f\x69\x64" => $bank_id, "\152\145\156\x69\163" => $dins["\x6a\145\156\151\x73"], "\156\157\155\x6f\162\137\163\x6f\x61\x6c" => $dins["\x6e\157\x6d\x6f\x72\137\x73\157\141\x6c"], "\163\157\141\154" => $dins["\163\x6f\x61\x6c"], "\x64\145\163\x6b\162\x69\x70\x73\x69" => '', "\153\145\163\165\154\151\x74\x61\156" => "\x38", "\164\151\x6d\145\x72" => "\x30", "\x74\x69\x6d\x65\162\137\155\x65\x6e\x69\164" => "\x30", "\146\x69\x6c\145" => $dins["\x66\151\154\145"], "\143\162\145\141\x74\145\x64\x5f\x6f\x6e" => time(), "\165\x70\x64\x61\x74\x65\144\x5f\157\x6e" => time(), "\157\160\x73\151\x5f\x61" => isset($dins["\157\x70\x73\151\137\141"]) ? $dins["\157\x70\163\x69\137\141"] : '', "\157\160\x73\151\137\142" => isset($dins["\157\x70\163\151\x5f\142"]) ? $dins["\x6f\160\x73\151\x5f\x62"] : '', "\x6f\160\163\151\x5f\x63" => isset($dins["\x6f\160\163\x69\137\143"]) ? $dins["\157\160\x73\x69\137\x63"] : '', "\157\x70\163\x69\x5f\x64" => isset($dins["\157\160\x73\151\x5f\144"]) ? $dins["\157\x70\163\x69\x5f\144"] : '', "\x6f\160\x73\151\x5f\x65" => isset($dins["\157\160\x73\151\137\145"]) ? $dins["\157\160\x73\x69\x5f\x65"] : '', "\152\x61\x77\141\x62\x61\156" => $dins["\x6a\x61\x77\x61\142\141\x6e"], "\164\x61\155\x70\x69\154\153\141\x6e" => $tmpl[$dins["\x6a\x65\x6e\x69\x73"]]];
            KKlmh:
        }
        goto OWtX9;
        nFeHV:
        $tmpl["\62"] = $jml_spg2 == $bank->tampil_kompleks ? "\x31" : "\60";
        goto W1Ktf;
        wUsMz:
        sHa_t:
        goto AQQhE;
        rkaic:
        $jml_siss = 0;
        goto fReiU;
        druzq:
        if (!$this->db->delete("\143\142\164\x5f\x73\x6f\141\x6c")) {
            goto EZREj;
        }
        goto pb3j9;
        pb3j9:
        $data["\151\x6e\x73\x65\x72\x74"] = $this->db->insert_batch("\x63\142\164\137\x73\157\141\154", $inserted);
        goto NP7my;
        z8jRZ:
        $jml_spg2 = 0;
        goto vAH9t;
        AMKd_:
        $data["\164\157\x74\141\154"] = count($inserted);
        goto dDbXh;
        Tfo41:
        $data["\151\x6e\163\x65\x72\x74"] = 0;
        goto v0i4V;
        yjxYf:
        $this->output_json($data);
        goto uWn9Q;
        RDdX8:
        $tmpl["\x31"] = $jml_spg1 == $bank->tampil_pg ? "\x31" : "\60";
        goto nFeHV;
        NrzPp:
        $datas = $this->input->post("\x73\x6f\141\x6c", false);
        goto Y0RKS;
        lOP5A:
        hu1wb:
        goto RDdX8;
        OWtX9:
        SRRP3:
        goto tXCbH;
        DJdgW:
        $this->db->where("\x69\144\137\x62\141\x6e\x6b", $bank_id);
        goto v7iIu;
        IvNmb:
        $status_soal = $tmpl["\61"] == "\61" && $tmpl["\x32"] == "\x31" && $tmpl["\x33"] == "\x31" && $tmpl["\64"] == "\61" && $tmpl["\x35"] == "\x31" ? "\x31" : "\60";
        goto IA28P;
        vAH9t:
        $jml_sjod = 0;
        goto rkaic;
        fReiU:
        $jml_sess = 0;
        goto Fg9hf;
        dDbXh:
        if (count($inserted) > 0) {
            goto sHa_t;
        }
        goto Tfo41;
        tXK9E:
        brFS4:
        goto v12qQ;
        uWn9Q:
    }
}
