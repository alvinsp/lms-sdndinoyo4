<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtcetak extends CI_Controller
{
    public function __construct()
    {
        goto hHx4K;
        Gov6w:
        redirect("\x61\165\164\x68");
        goto pXtmc;
        rEcWV:
        $this->load->model("\x4d\141\163\x74\145\162\x5f\x6d\157\x64\145\x6c", "\155\x61\163\x74\145\x72");
        goto Yc0lw;
        OFa6K:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\x75"))) {
            goto bH9cW;
        }
        goto peI1h;
        wbUKC:
        $this->load->library("\x75\160\x6c\157\141\x64");
        goto rEcWV;
        PKwEe:
        if (!$this->ion_auth->logged_in()) {
            goto x56E_;
        }
        goto OFa6K;
        uT50t:
        $this->load->model("\x43\x62\x74\x5f\x6d\x6f\144\x65\154", "\x63\x62\x74");
        goto ff1m3;
        Yc0lw:
        $this->load->model("\x4b\145\154\x61\163\x5f\155\x6f\x64\x65\x6c", "\x6b\x65\154\141\x73");
        goto oHhVx;
        ZHBF8:
        $this->load->library(["\144\141\164\x61\164\141\x62\154\145\x73", "\x66\x6f\x72\155\x5f\166\x61\154\151\x64\141\x74\x69\157\156"]);
        goto wbUKC;
        ff1m3:
        $this->load->model("\x44\x72\x6f\160\x64\x6f\x77\156\137\x6d\157\x64\145\x6c", "\x64\162\157\x70\144\x6f\x77\x6e");
        goto flDr9;
        oHhVx:
        $this->load->model("\x44\x61\163\x68\142\x6f\141\162\x64\x5f\x6d\157\144\x65\154", "\144\x61\x73\x68\142\157\x61\x72\144");
        goto uT50t;
        flDr9:
        $this->load->model("\122\x61\x70\157\162\x5f\155\157\144\145\154", "\162\x61\x70\x6f\x72");
        goto xYM46;
        QFZ1q:
        goto Ld9bH;
        goto qt40D;
        xYM46:
        $this->form_validation->set_error_delimiters('', '');
        goto oHyiu;
        peI1h:
        show_error("\x48\x61\x6e\x79\141\40\x41\144\x6d\151\x6e\x69\x73\x74\162\x61\x74\157\162\40\x79\141\156\x67\x20\x64\151\x62\x65\x72\x69\x20\x68\141\153\40\x75\x6e\164\165\x6b\x20\x6d\145\156\147\x61\153\163\145\x73\40\x68\x61\x6c\141\x6d\141\156\40\x69\156\x69\x2c\40\x3c\141\40\150\x72\x65\x66\75\x22" . base_url("\144\x61\x73\150\142\x6f\141\162\x64") . "\42\x3e\113\145\x6d\142\x61\x6c\x69\x20\153\x65\40\x6d\145\156\x75\x20\141\167\x61\x6c\x3c\57\x61\76", 403, "\x41\x6b\x73\x65\163\40\124\x65\162\x6c\x61\162\x61\156\147");
        goto xxCIe;
        xxCIe:
        bH9cW:
        goto QFZ1q;
        qt40D:
        x56E_:
        goto Gov6w;
        pXtmc:
        Ld9bH:
        goto ZHBF8;
        hHx4K:
        parent::__construct();
        goto PKwEe;
        oHyiu:
    }
    public function output_json($data, $encode = true)
    {
        goto JR4Bh;
        EGNYy:
        zx1Ss:
        goto m91BT;
        r51vR:
        $data = json_encode($data);
        goto EGNYy;
        m91BT:
        $this->output->set_content_type("\x61\160\x70\154\x69\x63\141\x74\151\x6f\156\57\152\163\157\156")->set_output($data);
        goto OdjMn;
        JR4Bh:
        if (!$encode) {
            goto zx1Ss;
        }
        goto r51vR;
        OdjMn:
    }
    public function index()
    {
        goto MXum3;
        u_hNJ:
        tNAoY:
        goto Z23xr;
        QPYrm:
        $this->load->view("\137\x74\145\x6d\x70\154\141\x74\145\x73\x2f\x64\141\163\150\142\x6f\141\162\144\57\137\146\x6f\x6f\x74\145\x72");
        goto u_hNJ;
        UbwI0:
        $this->load->view("\x5f\x74\x65\155\x70\154\141\164\145\x73\57\144\x61\163\x68\142\x6f\x61\x72\144\x2f\137\150\x65\x61\144\145\162", $data);
        goto Iyhwq;
        LE0CL:
        $data["\x73\155\x74\x5f\x61\143\164\151\166\145"] = $smt;
        goto OA8gp;
        Iyhwq:
        $this->load->view("\x63\142\x74\57\143\x65\164\x61\153\57\x64\141\164\x61");
        goto QPYrm;
        NUIxT:
        duu41:
        goto EY4tc;
        OA8gp:
        $data["\x6b\157\x70"] = $this->cbt->getSettingKopAbsensi();
        goto pmOq_;
        BklxP:
        $this->load->view("\143\142\x74\57\x63\x65\164\x61\153\57\144\141\164\x61");
        goto TBExF;
        MXum3:
        $user = $this->ion_auth->user()->row();
        goto hvy6N;
        Ajokx:
        $pengawas = $this->cbt->getPengawasHariIni(date("\x59\55\155\55\x64"));
        goto lf3ND;
        wA7rd:
        $tp = $this->master->getTahunActive();
        goto iok6u;
        ZGAse:
        $ids_pengawas = [];
        goto TZBm3;
        L27BA:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto LE0CL;
        y__Nl:
        tspqL:
        goto UbwI0;
        M4CTa:
        $data["\147\x75\x72\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto Ajokx;
        xTq81:
        goto tNAoY;
        goto y__Nl;
        TZBm3:
        foreach ($pengawas as $pws) {
            goto mp9r1;
            P822j:
            foreach ($ids as $id) {
                goto EeSh8;
                EeSh8:
                if (!(!in_array($id, $ids_pengawas) && $id != '')) {
                    goto wiwwR;
                }
                goto mTlo6;
                mTlo6:
                $ids_pengawas[] = $id;
                goto zLDt0;
                HmPwk:
                XW2R1:
                goto pDqsI;
                zLDt0:
                wiwwR:
                goto HmPwk;
                pDqsI:
            }
            goto K3mov;
            mp9r1:
            $ids = explode("\54", $pws->id_guru);
            goto P822j;
            K3mov:
            M5LRX:
            goto SNZ7b;
            SNZ7b:
            c3rQa:
            goto yL1h_;
            yL1h_:
        }
        goto NUIxT;
        iok6u:
        $smt = $this->master->getSemesterActive();
        goto kdsjw;
        TBExF:
        $this->load->view("\155\145\x6d\142\145\x72\x73\57\x67\165\x72\x75\57\x74\x65\155\160\x6c\141\x74\145\163\x2f\146\157\157\x74\145\x72");
        goto xTq81;
        kdsjw:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto qZuVs;
        hvy6N:
        $data = ["\x75\163\145\162" => $user, "\152\165\x64\165\x6c" => "\103\x65\x74\x61\x6b\x20\104\x61\164\141\40\x50\145\156\151\x6c\x61\x69\x61\156", "\163\x75\142\x6a\x75\144\165\154" => "\x43\145\x74\x61\x6b", "\160\162\x6f\146\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\164\151\156\147" => $this->dashboard->getSetting()];
        goto wA7rd;
        qZuVs:
        $data["\164\x70\137\x61\143\x74\x69\166\x65"] = $tp;
        goto L27BA;
        pmOq_:
        if ($this->ion_auth->is_admin()) {
            goto tspqL;
        }
        goto M4CTa;
        EY4tc:
        $data["\x69\x64\163\x5f\160\145\x6e\x67\141\167\x61\x73"] = $ids_pengawas;
        goto dWSPS;
        lf3ND:
        $data["\160\145\x6e\x67\x61\167\x61\x73"] = $pengawas;
        goto ZGAse;
        dWSPS:
        $this->load->view("\x6d\x65\155\x62\x65\x72\163\x2f\147\165\162\165\x2f\x74\145\x6d\x70\x6c\141\164\x65\163\57\150\x65\x61\144\145\x72", $data);
        goto BklxP;
        Z23xr:
    }
    public function kartuPeserta()
    {
        goto SFxqB;
        piRKC:
        $this->load->view("\137\x74\x65\155\160\x6c\x61\164\x65\163\57\144\x61\163\150\142\x6f\x61\x72\144\x2f\137\x66\157\157\x74\145\162");
        goto lIyQP;
        OYa9w:
        $data = ["\165\x73\145\x72" => $user, "\152\x75\144\165\154" => "\103\145\x74\x61\153\40\113\141\x72\x74\x75\x20\120\x65\163\x65\162\164\x61", "\163\165\142\x6a\x75\x64\165\154" => "\103\145\x74\x61\153", "\x70\x72\157\146\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\x6e\147" => $this->dashboard->getSetting()];
        goto paOSi;
        xyBXk:
        $this->load->view("\143\142\164\57\x63\145\x74\141\x6b\x2f\153\141\162\164\x75");
        goto piRKC;
        DL8u7:
        $data["\x6b\x61\162\164\x75"] = $this->cbt->getSettingKartu();
        goto dHXSU;
        sZDgQ:
        $data["\x73\155\164\137\x61\x63\x74\x69\166\x65"] = $smt;
        goto DL8u7;
        CwtOC:
        $smt = $this->dashboard->getSemesterActive();
        goto J23im;
        SFxqB:
        $user = $this->ion_auth->user()->row();
        goto OYa9w;
        lLD3x:
        $this->load->view("\137\x74\145\x6d\160\x6c\141\164\145\x73\57\x64\141\x73\150\x62\157\x61\162\144\x2f\x5f\x68\145\x61\x64\x65\162", $data);
        goto xyBXk;
        paOSi:
        $tp = $this->dashboard->getTahunActive();
        goto CwtOC;
        Tw7_y:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto sZDgQ;
        i7XO1:
        $data["\x73\145\x74\164\151\x6e\147\x5f\x72\141\160\157\x72"] = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto lLD3x;
        prblP:
        $data["\164\x70\137\x61\x63\164\151\x76\x65"] = $tp;
        goto Tw7_y;
        dHXSU:
        $data["\153\x65\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto GxnFT;
        J23im:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto prblP;
        GxnFT:
        $data["\x72\165\x61\x6e\147"] = $this->dropdown->getAllRuang();
        goto i7XO1;
        lIyQP:
    }
    function uploadFile($logo)
    {
        goto UT7b4;
        UT7b4:
        if (isset($_FILES["\154\157\x67\157"]["\156\x61\x6d\145"])) {
            goto U6fbn;
        }
        goto XQVMT;
        n7G27:
        $config["\x61\x6c\x6c\157\167\145\144\137\164\171\160\145\163"] = "\x67\x69\146\174\x6a\x70\x67\174\x70\x6e\x67\x7c\x6a\x70\145\147\x7c\112\120\x45\107\174\x4a\x50\x47\174\120\x4e\x47\174\x47\x49\106";
        goto MT9Lh;
        rLVOf:
        vmDo3:
        goto gINKP;
        gINKP:
        $data["\x74\x79\x70\x65"] = $_FILES["\154\157\147\x6f"]["\x74\x79\160\x65"];
        goto If0Jv;
        au4mS:
        $this->upload->initialize($config);
        goto JUpQG;
        h0fx5:
        goto Lebs2;
        goto k9GOP;
        IaeWd:
        $data["\163\x74\141\164\x75\x73"] = true;
        goto KUFAQ;
        g9f5q:
        $config["\165\160\x6c\157\x61\144\x5f\160\141\x74\x68"] = "\x2e\x2f\x75\x70\154\x6f\141\144\x73\x2f\x73\x65\164\164\151\x6e\147\163\57";
        goto n7G27;
        KUFAQ:
        goto vmDo3;
        goto Fi7qx;
        B1rvd:
        Lebs2:
        goto UqGsC;
        zKzBB:
        $data["\146\x69\x6c\x65\x6e\141\155\x65"] = pathinfo($result["\x66\x69\x6c\145\x5f\x6e\141\x6d\145"], PATHINFO_FILENAME);
        goto IaeWd;
        a0GVO:
        $config["\146\151\x6c\145\x5f\x6e\x61\x6d\145"] = $logo;
        goto au4mS;
        XQVMT:
        $data["\163\162\143"] = '';
        goto h0fx5;
        MT9Lh:
        $config["\157\x76\145\x72\167\x72\151\x74\x65"] = true;
        goto a0GVO;
        If0Jv:
        $data["\x73\151\172\145"] = $_FILES["\x6c\x6f\147\157"]["\163\x69\172\x65"];
        goto B1rvd;
        JUpQG:
        if (!$this->upload->do_upload("\154\x6f\147\157")) {
            goto fChox;
        }
        goto cTEcR;
        UFrXw:
        $data["\163\x72\x63"] = base_url() . "\x75\x70\154\x6f\141\144\x73\57\163\145\x74\x74\151\x6e\147\163\x2f" . $result["\x66\x69\x6c\145\137\156\x61\x6d\145"];
        goto zKzBB;
        cTEcR:
        $result = $this->upload->data();
        goto UFrXw;
        Fi7qx:
        fChox:
        goto M45ev;
        k9GOP:
        U6fbn:
        goto g9f5q;
        Zl9t1:
        $data["\163\x72\x63"] = $this->upload->display_errors();
        goto rLVOf;
        M45ev:
        $data["\163\x74\x61\x74\x75\x73"] = false;
        goto Zl9t1;
        UqGsC:
        $this->output_json($data);
        goto RFbkJ;
        RFbkJ:
    }
    function deleteFile()
    {
        goto Hg_Hl;
        gJmZU:
        echo "\x46\x69\x6c\145\40\104\x65\x6c\145\164\x65\x20\123\165\x63\x63\145\163\x73\x66\165\154\x6c\171";
        goto mwuh3;
        wQgTh:
        if (!unlink($file_name)) {
            goto VtIJc;
        }
        goto gJmZU;
        MbwXf:
        $file_name = str_replace(base_url(), '', $src);
        goto wQgTh;
        mwuh3:
        VtIJc:
        goto K5oo1;
        Hg_Hl:
        $src = $this->input->post("\163\162\x63");
        goto MbwXf;
        K5oo1:
    }
    public function saveKartu()
    {
        goto J0NpJ;
        fxOSi:
        $update = $this->db->replace("\x63\x62\164\x5f\153\x6f\x70\137\153\x61\x72\164\165", $insert);
        goto vsGj7;
        J0NpJ:
        $header_1 = $this->input->post("\150\145\141\144\145\x72\x5f\x31", true);
        goto oM3Cc;
        vsGj7:
        $this->output_json($update);
        goto mVOS4;
        gAWFw:
        $header_4 = $this->input->post("\x68\145\141\144\x65\162\137\x34", true);
        goto njYDl;
        qfdEk:
        $insert = ["\151\144\137\163\145\164\x5f\x6b\141\x72\x74\165" => 123456, "\150\145\x61\144\145\162\137\x31" => $header_1, "\x68\145\x61\144\x65\162\x5f\x32" => $header_2, "\150\145\141\x64\145\162\x5f\63" => $header_3, "\150\x65\x61\144\x65\x72\x5f\64" => $header_4, "\x74\x61\156\x67\147\x61\x6c" => $tanggal];
        goto fxOSi;
        oM3Cc:
        $header_2 = $this->input->post("\x68\x65\x61\x64\x65\x72\137\62", true);
        goto D_CLg;
        D_CLg:
        $header_3 = $this->input->post("\150\145\141\144\x65\162\137\63", true);
        goto gAWFw;
        njYDl:
        $tanggal = $this->input->post("\x74\x61\x6e\147\147\x61\x6c", true);
        goto qfdEk;
        mVOS4:
    }
    public function getSiswaKelas()
    {
        goto RT5Eo;
        Y0MBI:
        $kelas = $this->input->get("\153\x65\x6c\x61\163");
        goto wK92e;
        DAw2_:
        if (!($jadwal != null && $jadwal != "\156\165\154\154")) {
            goto osHEi;
        }
        goto QuZnv;
        NfZz7:
        $isesi = null;
        goto k8jn5;
        wK92e:
        if ($kelas == "\141\154\x6c") {
            goto x0lnh;
        }
        goto iRi_t;
        GFUCj:
        $ijadwal = $this->cbt->getJadwalById($jadwal, $s);
        goto LfbFf;
        YYUjG:
        $jadwal = $this->input->get("\152\141\x64\167\141\x6c");
        goto hDRkz;
        iRi_t:
        $ikelas = $this->master->getKelasById($kelas);
        goto EnxTC;
        Z59iG:
        $ijadwal = null;
        goto zmdPw;
        gY1tH:
        $isesi = $this->cbt->getSesiById($s);
        goto fh3E9;
        NiEto:
        foreach ($siswas as $siswa) {
            array_push($data["\163\151\x73\167\x61"], $siswa);
            ybfeB:
        }
        goto jexJs;
        zmdPw:
        $pengawas = [];
        goto DAw2_;
        DhrsD:
        $siswas = $this->cbt->getRuangSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas, $s);
        goto NiEto;
        CVdCd:
        hV91Y:
        goto GFUCj;
        RT5Eo:
        $sesi = $this->input->get("\163\145\x73\x69");
        goto YYUjG;
        A0GyB:
        $s = !$sesi ? null : $sesi;
        goto NfZz7;
        hDRkz:
        $tp = $this->dashboard->getTahunActive();
        goto AYxFR;
        AYxFR:
        $smt = $this->dashboard->getSemesterActive();
        goto Y0MBI;
        BicZd:
        foreach ($pengawass as $p) {
            goto U2Q1n;
            CxtL9:
            nHstO:
            goto tvFzX;
            U2Q1n:
            if (!(count(explode("\x2c", $p->id_guru)) > 0)) {
                goto nHstO;
            }
            goto q286y;
            tvFzX:
            bcTDB:
            goto ETxog;
            q286y:
            array_push($pengawas, $this->master->getGuruByArrId(explode("\x2c", $p->id_guru)));
            goto CxtL9;
            ETxog:
        }
        goto CVdCd;
        jexJs:
        TStTw:
        goto rKlBM;
        EnxTC:
        goto N4glU;
        goto r6wR3;
        uNWRR:
        $this->output_json($data);
        goto ydkpR;
        ILLUP:
        $pengawas = [];
        goto BicZd;
        U01dR:
        $pengawass = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal, $sesi);
        goto ILLUP;
        zN2FU:
        $data["\x73\x69\x73\167\x61"] = [];
        goto DhrsD;
        UwnOK:
        $smt = $this->dashboard->getSemesterActive();
        goto U01dR;
        p3tAc:
        N4glU:
        goto A0GyB;
        fh3E9:
        hYOAc:
        goto Z59iG;
        r6wR3:
        x0lnh:
        goto WOSjD;
        LfbFf:
        osHEi:
        goto zN2FU;
        dy4sW:
        $kelas = $ikelas;
        goto p3tAc;
        k8jn5:
        if (!($s != null)) {
            goto hYOAc;
        }
        goto gY1tH;
        rKlBM:
        $data["\151\156\146\x6f"] = ["\x6b\145\x6c\141\x73" => $ikelas, "\163\x65\x73\x69" => $isesi, "\152\x61\144\x77\141\x6c" => $ijadwal, "\x70\x65\156\147\x61\x77\141\x73" => $pengawas];
        goto uNWRR;
        QuZnv:
        $tp = $this->dashboard->getTahunActive();
        goto UwnOK;
        WOSjD:
        $ikelas = $this->kelas->getIdKelas($tp->id_tp, $smt->id_smt);
        goto dy4sW;
        ydkpR:
    }
    public function getSiswaRuang()
    {
        goto lydmX;
        T8MGC:
        $pengawass = $this->cbt->getPengawas($tp->id_tp . $smt->id_smt . $jadwal . $ruang . $sesi);
        goto o9r9B;
        qQwj2:
        $data["\151\x6e\146\x6f"] = ["\x72\165\141\x6e\x67" => $iruang, "\x73\x65\163\151" => $isesi, "\x6a\x61\144\x77\141\x6c" => $ijadwal, "\160\145\156\147\141\167\141\x73" => $pengawas];
        goto Q7Zz7;
        SgOyJ:
        $sesi = $this->input->get("\x73\145\163\x69");
        goto IRljd;
        u1v1Z:
        if (!($s != null)) {
            goto oolR2;
        }
        goto lcvuI;
        sUYtK:
        $tp = $this->dashboard->getTahunActive();
        goto bbhXi;
        lydmX:
        $ruang = $this->input->get("\162\x75\x61\x6e\147");
        goto SgOyJ;
        uyUI3:
        $isesi = null;
        goto u1v1Z;
        eqh0L:
        $iruang = $this->cbt->getRuangById($ruang);
        goto CN_f1;
        UQAby:
        if (!($jadwal != null && $jadwal != "\156\165\154\x6c")) {
            goto v8M65;
        }
        goto jBgVx;
        CN_f1:
        $s = $sesi == "\156\165\154\x6c" ? null : $sesi;
        goto uyUI3;
        FyVmC:
        v8M65:
        goto T8MGC;
        bOh1B:
        Tnrim:
        goto q17Ep;
        Q7Zz7:
        $this->output_json($data);
        goto yh6st;
        jBgVx:
        $ijadwal = $this->cbt->getJadwalById($jadwal, $s);
        goto FyVmC;
        q17Ep:
        $data["\x73\x69\x73\x77\141"] = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $s);
        goto qQwj2;
        RbEaE:
        $pengawas = $this->master->getGuruByArrId(explode("\x2c", $pengawass->id_guru));
        goto bOh1B;
        WmIDV:
        if (!($pengawass != null && count(explode("\x2c", $pengawass->id_guru)) > 0)) {
            goto Tnrim;
        }
        goto RbEaE;
        IRljd:
        $jadwal = $this->input->get("\152\141\x64\x77\141\154");
        goto sUYtK;
        fH0mH:
        oolR2:
        goto iX13x;
        lcvuI:
        $isesi = $this->cbt->getSesiById($s);
        goto fH0mH;
        o9r9B:
        $pengawas = [];
        goto WmIDV;
        iX13x:
        $ijadwal = null;
        goto UQAby;
        bbhXi:
        $smt = $this->dashboard->getSemesterActive();
        goto eqh0L;
        yh6st:
    }
    public function saveKop()
    {
        goto LLvfr;
        krHOz:
        $header_2 = $this->input->post("\x68\x65\x61\x64\x65\x72\x5f\x32", true);
        goto zblrS;
        r1tUO:
        $proktor = $this->input->post("\160\x72\x6f\x6b\x74\157\162", true);
        goto mgrIu;
        HEEhc:
        $insert = ["\x69\144\137\153\157\x70" => 123456, "\150\x65\141\x64\145\x72\x5f\61" => $header_1, "\150\x65\141\x64\145\x72\x5f\62" => $header_2, "\x68\145\x61\x64\x65\x72\137\x33" => $header_3, "\150\x65\x61\144\145\x72\x5f\64" => $header_4, "\160\162\157\x6b\x74\x6f\162" => $proktor, "\x70\145\156\x67\141\x77\141\163\137\61" => $pengawas_1, "\160\x65\156\147\x61\167\141\163\137\62" => $pengawas_2];
        goto t2qVR;
        vkxr9:
        $pengawas_2 = $this->input->post("\160\145\156\147\141\x77\141\163\137\x32", true);
        goto HEEhc;
        LLvfr:
        $header_1 = $this->input->post("\x68\x65\141\144\145\162\137\x31", true);
        goto krHOz;
        zblrS:
        $header_3 = $this->input->post("\x68\145\x61\144\x65\x72\137\63", true);
        goto ZFv5H;
        t2qVR:
        $update = $this->db->replace("\143\142\x74\x5f\153\157\x70\137\x61\x62\x73\x65\x6e\x73\151", $insert);
        goto zium3;
        zium3:
        $this->output_json($update);
        goto tUjks;
        mgrIu:
        $pengawas_1 = $this->input->post("\160\145\x6e\147\141\167\141\x73\137\61", true);
        goto vkxr9;
        ZFv5H:
        $header_4 = $this->input->post("\150\145\141\x64\x65\x72\137\64", true);
        goto r1tUO;
        tUjks:
    }
    public function absenPeserta()
    {
        goto Kz1oV;
        L13wd:
        $data["\x72\x75\141\x6e\147"] = $this->dropdown->getAllRuang();
        goto mZsEL;
        sx7Th:
        $data["\153\145\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto L13wd;
        gDgif:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto lwAwF;
        UnnLz:
        $this->load->view("\x5f\164\x65\x6d\x70\154\x61\164\x65\x73\57\x64\141\163\150\x62\157\x61\x72\144\57\x5f\150\145\x61\x64\145\162", $data);
        goto QT0oX;
        vGC69:
        $data["\x74\160\137\141\143\x74\151\x76\145"] = $tp;
        goto gDgif;
        QeI17:
        $data["\x6a\x61\x64\167\141\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt);
        goto sx7Th;
        DexvD:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto vGC69;
        MOxx3:
        $smt = $this->dashboard->getSemesterActive();
        goto DexvD;
        QT0oX:
        $this->load->view("\143\142\164\x2f\143\145\x74\141\153\57\x61\x62\x73\x65\156");
        goto Jmfl0;
        KIkhh:
        $tp = $this->dashboard->getTahunActive();
        goto MOxx3;
        T8ER3:
        $data = ["\x75\x73\145\x72" => $user, "\152\165\x64\165\x6c" => "\x43\145\164\x61\153\x20\104\141\146\x74\x61\x72\40\113\145\x68\x61\144\x69\162\141\156", "\163\165\142\152\165\x64\165\x6c" => "\x43\145\164\141\153", "\x70\162\x6f\146\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto KIkhh;
        c05ds:
        $data["\153\x6f\160"] = $this->cbt->getSettingKopAbsensi();
        goto UnnLz;
        lwAwF:
        $data["\163\x6d\x74\x5f\141\143\164\x69\166\x65"] = $smt;
        goto QeI17;
        Kz1oV:
        $user = $this->ion_auth->user()->row();
        goto T8ER3;
        mZsEL:
        $data["\163\145\163\x69"] = $this->dropdown->getAllSesi();
        goto c05ds;
        Jmfl0:
        $this->load->view("\137\164\x65\155\x70\x6c\x61\x74\145\x73\57\x64\x61\163\150\x62\x6f\x61\162\x64\57\x5f\146\x6f\157\164\145\162");
        goto ChLUO;
        ChLUO:
    }
    public function beritaAcara()
    {
        goto wby6z;
        h4ojY:
        $data["\152\141\x64\x77\x61\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt);
        goto Z3GQA;
        DDr6A:
        $data["\153\x6f\x70"] = $this->cbt->getSettingKopBeritaAcara();
        goto BNMwV;
        HNGIk:
        $data["\164\160\137\x61\x63\x74\151\166\145"] = $tp;
        goto YFRzH;
        Z3GQA:
        $data["\153\145\154\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto XjuG6;
        cShc2:
        $data["\x73\145\x73\x69"] = $this->dropdown->getAllSesi();
        goto DDr6A;
        vE0IZ:
        $this->load->view("\137\x74\x65\155\160\154\x61\164\145\x73\x2f\x64\x61\x73\150\x62\x6f\x61\x72\144\57\137\146\x6f\x6f\x74\x65\x72");
        goto X8FUh;
        wby6z:
        $user = $this->ion_auth->user()->row();
        goto JAqBC;
        YFRzH:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto mWx5n;
        ZYE5f:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto HNGIk;
        mWx5n:
        $data["\x73\155\164\137\141\x63\x74\151\166\145"] = $smt;
        goto h4ojY;
        JAqBC:
        $data = ["\165\163\x65\162" => $user, "\152\165\144\x75\x6c" => "\103\x65\164\x61\x6b\x20\x42\x65\162\151\164\141\40\101\x63\141\162\x61", "\163\x75\142\152\x75\x64\x75\x6c" => "\103\x65\164\x61\x6b", "\x70\x72\x6f\x66\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\164\151\x6e\147" => $this->dashboard->getSetting()];
        goto OcqpM;
        XjuG6:
        $data["\162\x75\141\x6e\x67"] = $this->dropdown->getAllRuang();
        goto cShc2;
        BNMwV:
        $this->load->view("\137\x74\145\155\x70\154\141\164\145\x73\x2f\x64\x61\163\150\x62\157\141\162\144\57\x5f\x68\145\141\x64\x65\162", $data);
        goto GvvTe;
        GvvTe:
        $this->load->view("\x63\x62\x74\x2f\x63\x65\x74\141\x6b\57\142\145\162\151\164\141\x61\x63\x61\162\x61");
        goto vE0IZ;
        OcqpM:
        $tp = $this->dashboard->getTahunActive();
        goto lXihg;
        lXihg:
        $smt = $this->dashboard->getSemesterActive();
        goto ZYE5f;
        X8FUh:
    }
    public function saveKopBerita()
    {
        goto F5NQj;
        sj5My:
        $this->output_json($update);
        goto I91RP;
        tRuC5:
        $header_4 = $this->input->post("\x68\145\141\x64\145\162\137\x34", true);
        goto wQO3z;
        F5NQj:
        $header_1 = $this->input->post("\150\x65\x61\144\x65\162\137\61", true);
        goto eX5JP;
        P7WsO:
        $update = $this->db->replace("\x63\x62\x74\x5f\x6b\x6f\160\x5f\142\145\162\x69\x74\141", $insert);
        goto sj5My;
        eX5JP:
        $header_2 = $this->input->post("\x68\145\141\144\x65\x72\x5f\x32", true);
        goto bRmD9;
        bRmD9:
        $header_3 = $this->input->post("\150\145\x61\144\145\x72\x5f\x33", true);
        goto tRuC5;
        wQO3z:
        $insert = ["\x69\144\x5f\x6b\x6f\x70" => 123456, "\150\145\x61\144\x65\162\x5f\x31" => $header_1, "\x68\145\141\144\x65\162\x5f\62" => $header_2, "\150\x65\x61\x64\145\x72\x5f\x33" => $header_3, "\x68\145\x61\x64\x65\162\x5f\x34" => $header_4];
        goto P7WsO;
        I91RP:
    }
    public function pesertaUjian($mode = null)
    {
        goto STe70;
        LPmHB:
        $data["\x72\x75\141\156\147\163"] = $this->dropdown->getAllRuang();
        goto RKUc_;
        VRTkW:
        $data["\163\155\164\x5f\x61\x63\x74\151\166\x65"] = $smt;
        goto Q4sGQ;
        d2Du6:
        $data["\164\160\137\x61\143\164\x69\x76\145"] = $tp;
        goto gqvQz;
        YK8Uu:
        $tp = $this->dashboard->getTahunActive();
        goto QPWiP;
        QPWiP:
        $smt = $this->dashboard->getSemesterActive();
        goto gTa3h;
        WpMz6:
        $data["\x6d\157\144\145"] = $mode;
        goto M2HjS;
        vizI6:
        $this->load->view("\x63\142\164\57\143\x65\x74\141\153\57\160\145\163\x65\x72\164\141\x75\x6a\x69\x61\156");
        goto bL0x5;
        Ju0we:
        $data["\x73\x69\x73\167\141"] = $this->cbt->getAllPesertaByKelas($tp->id_tp, $smt->id_smt);
        goto HyP9w;
        o6iZA:
        OUEAp:
        goto DfxY_;
        bL0x5:
        $this->load->view("\x5f\164\x65\155\160\154\x61\x74\145\x73\x2f\x64\x61\x73\150\142\157\141\162\x64\57\137\x66\x6f\157\164\x65\162");
        goto jDsea;
        HyP9w:
        goto cCHaR;
        goto o6iZA;
        uWVoH:
        cCHaR:
        goto F9M7q;
        gqvQz:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto VRTkW;
        RKUc_:
        $data["\163\145\163\x69\163"] = $this->cbt->getAllKodeSesi();
        goto YrhFE;
        F9M7q:
        $this->load->view("\137\164\145\x6d\160\x6c\x61\164\145\163\57\144\141\x73\x68\x62\x6f\141\162\144\x2f\137\x68\x65\141\x64\x65\162", $data);
        goto vizI6;
        vDcIZ:
        $data["\165\x6a\151\x61\x6e"] = $this->dropdown->getAllJenisUjian();
        goto WpMz6;
        DfxY_:
        $data["\x73\x69\163\167\141"] = $this->cbt->getAllPesertaByRuang($tp->id_tp, $smt->id_smt);
        goto uWVoH;
        Q4sGQ:
        $data["\153\145\154\x61\163\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto LPmHB;
        gTa3h:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto d2Du6;
        M2HjS:
        if ($mode == "\61" || $mode == null) {
            goto OUEAp;
        }
        goto Ju0we;
        YrhFE:
        $data["\x6b\x6f\160"] = $this->dashboard->getSetting();
        goto vDcIZ;
        CKQBn:
        $data = ["\165\x73\145\162" => $user, "\152\165\x64\x75\154" => "\x43\x65\164\141\x6b\x20\104\x61\x66\164\141\x72\x20\120\145\x73\x65\x72\164\x61", "\x73\x75\142\152\x75\x64\x75\x6c" => "\103\145\164\141\x6b", "\x70\162\157\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\164\151\x6e\x67" => $this->dashboard->getSetting()];
        goto YK8Uu;
        STe70:
        $user = $this->ion_auth->user()->row();
        goto CKQBn;
        jDsea:
    }
    public function pengawas()
    {
        goto tsbu0;
        qGo8S:
        $data["\152\x65\x6e\151\x73\137\x75\152\151\x61\156"] = $jenis_ujian;
        goto URHhB;
        HS5x1:
        vxPtB:
        goto GrtSp;
        jrOSf:
        $data["\x73\141\155\x70\x61\151\137\x73\x65\154\x65\x63\164\x65\x64"] = $sampai_selected;
        goto kgkxR;
        hrOkR:
        $data["\152\145\156\x69\x73"] = ['' => "\142\x65\x6c\x75\x6d\x20\141\144\x61\x20\x6a\141\144\x77\x61\x6c\x20\165\x6a\151\141\156"];
        goto Of8tl;
        jwXsr:
        $perRuang = [];
        goto vW9CS;
        cEgjh:
        $data["\144\x61\162\151\x5f\163\145\154\x65\x63\x74\145\144"] = $dari_selected;
        goto jrOSf;
        Z6evS:
        VOIjP:
        goto lFFHd;
        ANDwm:
        $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt);
        goto jZmDB;
        rlJCB:
        $sampai_selected = $this->input->get("\x73\x61\x6d\160\141\x69", true);
        goto KsnrT;
        peKr9:
        foreach ($jadwal_pengawas as $jadwal_pengawa) {
            goto Z0LoC;
            Z0LoC:
            foreach ($jadwal_pengawa as $r => $jp) {
                goto A2zxD;
                saHf6:
                tw3DJ:
                goto wQ61i;
                wQ61i:
                csYdY:
                goto Rr3oA;
                A2zxD:
                foreach ($jp as $s => $j) {
                    goto O5f_f;
                    O5f_f:
                    foreach ($j as $m => $km) {
                        goto jUJ7_;
                        Rj_qR:
                        goto xQwYs;
                        goto CHX7F;
                        h9XQi:
                        $jpp = count($sel);
                        goto XUscd;
                        MHeNt:
                        $jp = 0;
                        goto h9XQi;
                        CHX7F:
                        w8Oxi:
                        goto bf0ww;
                        HHl8F:
                        $sel = isset($pengawas[$km->id_jadwal]) && isset($pengawas[$km->id_jadwal][$ir]) && isset($pengawas[$km->id_jadwal][$ir][$is]) ? explode("\x2c", $pengawas[$km->id_jadwal][$ir][$is]->id_guru) : [];
                        goto MHeNt;
                        NZXrG:
                        pduFT:
                        goto maNj6;
                        TJzS0:
                        $ir = $ruangs[$r][$s]->ruang_id;
                        goto p76MS;
                        KIrB1:
                        array_push($perRuang[$forAdd->ruang], $forAdd);
                        goto Rj_qR;
                        XUscd:
                        $pw = '';
                        goto sbbWC;
                        lsioN:
                        $forAdd = json_decode(json_encode(["\152\x6d\x6c\x5f\x73\151\x73\x77\141" => count($siswas), "\x74\x61\x6e\147\147\141\x6c" => $km->tgl_mulai, "\162\x75\141\x6e\147" => $nr, "\163\x65\163\151" => $ns, "\x6d\x61\160\x65\x6c" => $km->nama_mapel, "\167\141\153\164\x75" => $km->jam_ke, "\x70\145\x6e\147\141\x77\x61\163" => $pw]));
                        goto KPxjE;
                        dEWNJ:
                        bHANJ:
                        goto uM0wo;
                        WyMWt:
                        $perRuang[$forAdd->ruang] = [];
                        goto KIrB1;
                        zx2m8:
                        xQwYs:
                        goto dEWNJ;
                        KPxjE:
                        array_push($result, $forAdd);
                        goto Yy8nF;
                        Yy8nF:
                        if (isset($perRuang[$forAdd->ruang])) {
                            goto w8Oxi;
                        }
                        goto WyMWt;
                        maNj6:
                        $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ir, $is);
                        goto lsioN;
                        sbbWC:
                        foreach ($sel as $p) {
                            goto fBnMV;
                            TApjl:
                            $pw .= $gurus[$p];
                            goto N54QY;
                            gcFX8:
                            VKdWO:
                            goto IMLaU;
                            IMLaU:
                            Cfh69:
                            goto geECd;
                            Fxl_S:
                            $pw .= "\x3c\142\x72\x3e";
                            goto FjUts;
                            N54QY:
                            $jp += 1;
                            goto uu7Mu;
                            uu7Mu:
                            if (!($jp < $jpp)) {
                                goto hsJOo;
                            }
                            goto Fxl_S;
                            fBnMV:
                            if (!isset($gurus[$p])) {
                                goto VKdWO;
                            }
                            goto TApjl;
                            FjUts:
                            hsJOo:
                            goto gcFX8;
                            geECd:
                        }
                        goto NZXrG;
                        Wt_Jf:
                        $ns = $ruangs[$r][$s]->nama_sesi;
                        goto TJzS0;
                        p76MS:
                        $is = $ruangs[$r][$s]->sesi_id;
                        goto HHl8F;
                        bf0ww:
                        array_push($perRuang[$forAdd->ruang], $forAdd);
                        goto zx2m8;
                        jUJ7_:
                        $nr = $ruangs[$r][$s]->nama_ruang;
                        goto Wt_Jf;
                        uM0wo:
                    }
                    goto ClJ4V;
                    TxVHO:
                    rHChg:
                    goto Vg_k5;
                    ClJ4V:
                    FSXOh:
                    goto TxVHO;
                    Vg_k5:
                }
                goto saHf6;
                Rr3oA:
            }
            goto Q1mhi;
            Q1mhi:
            ZOkTg:
            goto cMmjo;
            cMmjo:
            JzkoX:
            goto TbNif;
            TbNif:
        }
        goto nUazf;
        NULr3:
        $data["\160\162\157\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto fUIBC;
        ECVJj:
        $data["\163\x6d\x74\137\141\143\164\x69\x76\x65"] = $smt;
        goto ANDwm;
        m7QHP:
        $pengawas = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt);
        goto YwUMp;
        ZTGz_:
        $this->load->view("\x5f\164\145\x6d\160\154\x61\x74\x65\163\57\144\x61\163\150\142\x6f\x61\x72\x64\x2f\137\x68\145\x61\144\145\162", $data);
        goto yuIw1;
        GrtSp:
        $data["\x6a\x65\156\x69\163"] = $this->cbt->getAllJenisUjianByArrJenis($ids);
        goto WW3s9;
        julBX:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto QdpNU;
        lFFHd:
        vVQJ9:
        goto jwXsr;
        kgkxR:
        $pengawas = [];
        goto AtLRs;
        BMhel:
        $data["\x6a\x61\x64\x77\x61\154\x73\x5f\162\165\141\x6e\147"] = $perRuang;
        goto NULr3;
        V8_Pk:
        $arrLevel = [];
        goto q3fvd;
        vFkyS:
        $this->load->view("\137\164\x65\155\160\154\141\x74\x65\x73\x2f\144\141\x73\x68\x62\x6f\141\x72\x64\57\137\146\157\x6f\x74\145\162");
        goto B9QOi;
        ENGNH:
        if (!(count($id_jenis) > 0)) {
            goto nzt_w;
        }
        goto dj5Kv;
        nLuIu:
        if (count($ids) > 0) {
            goto vxPtB;
        }
        goto hrOkR;
        zaA_9:
        $dari_selected = $this->input->get("\144\x61\162\x69", true);
        goto rlJCB;
        M3xu8:
        Ozagy:
        goto GF0W3;
        QdpNU:
        $data["\x74\x70\x5f\x61\x63\164\151\x76\x65"] = $tp;
        goto jCa22;
        q3fvd:
        foreach ($jadwals as $jadwal) {
            goto xr7gS;
            ciLws:
            RrLxo:
            goto ezu_e;
            xngnq:
            array_push($arrLevel, $jadwal->bank_level);
            goto L4481;
            xr7gS:
            if (in_array($jadwal->bank_level, $arrLevel)) {
                goto FzD5q;
            }
            goto xngnq;
            L4481:
            FzD5q:
            goto ciLws;
            ezu_e:
        }
        goto M3xu8;
        WWtSk:
        $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, "\60", $dari_selected, $sampai_selected);
        goto SWx7t;
        AtLRs:
        if (!($jenis_selected != null)) {
            goto bPBnD;
        }
        goto m7QHP;
        B9p3L:
        $gurus = $this->dropdown->getAllGuru();
        goto k7OvW;
        fj4jD:
        $tp = $this->dashboard->getTahunActive();
        goto I0B1m;
        SWx7t:
        blsPi:
        goto V8_Pk;
        Kii9a:
        $data["\x72\x75\x61\156\147"] = $ruangs;
        goto DseH6;
        Of8tl:
        goto EhIzB;
        goto HS5x1;
        GF0W3:
        $kelas_level = [];
        goto AJJeE;
        AJJeE:
        if (!(count($arrLevel) > 0)) {
            goto Oh27g;
        }
        goto m03YW;
        tsbu0:
        $user = $this->ion_auth->user()->row();
        goto v7qOG;
        l2dE4:
        P97B2:
        goto aV_tL;
        nUazf:
        OUX90:
        goto hiod3;
        URHhB:
        $data["\146\151\154\164\145\x72\137\x73\x65\x6c\x65\143\164\145\x64"] = $filter_selected;
        goto cEgjh;
        vW9CS:
        $result = [];
        goto peKr9;
        a5lCQ:
        $arrKls = [];
        goto EWGcK;
        dj5Kv:
        foreach ($id_jenis as $jenis) {
            array_push($ids, $jenis->id_jenis);
            U3NGr:
        }
        goto aEjb9;
        m03YW:
        $kelas_level = $this->cbt->getDistinctKelasLevel($tp->id_tp, $smt->id_smt, $arrLevel);
        goto pEOam;
        jZmDB:
        $ids = [];
        goto ENGNH;
        v7qOG:
        $setting = $this->dashboard->getSetting();
        goto vh8fJ;
        Ovmtz:
        $data["\160\145\156\147\141\x77\x61\x73"] = $pengawas;
        goto B9p3L;
        BOP0a:
        $data = ["\165\x73\x65\162" => $user, "\152\165\x64\165\x6c" => "\x4a\x61\x64\167\141\154\x20\x50\x65\x6e\147\141\167\141\x73", "\163\x75\x62\x6a\x75\144\165\154" => "\103\145\164\x61\153\x20\x4a\x61\144\167\141\154\40\x50\x65\x6e\x67\141\x77\141\163", "\163\145\x74\x74\x69\156\147" => $setting];
        goto fj4jD;
        gKBZv:
        $ruangs = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls);
        goto Kii9a;
        vh8fJ:
        $jenis_selected = $this->input->get("\152\x65\x6e\151\163", true);
        goto fLW6N;
        yuIw1:
        $this->load->view("\143\x62\164\x2f\x63\x65\164\141\153\57\160\x65\156\147\141\x77\x61\163");
        goto vFkyS;
        fUIBC:
        $data["\162\165\x61\x6e\147\137\x73\x65\163\151"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt);
        goto uQ49o;
        BDyE0:
        if (!($jenis_selected != null)) {
            goto blsPi;
        }
        goto WWtSk;
        fLW6N:
        $jenis_ujian = $this->cbt->getJenisById($jenis_selected);
        goto BOP0a;
        aV_tL:
        $jadwal_pengawas = [];
        goto cQyg_;
        JRdzw:
        Oh27g:
        goto a5lCQ;
        k7OvW:
        $jadwals = [];
        goto BDyE0;
        aEjb9:
        xrNO_:
        goto Abo76;
        jCa22:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto ECVJj;
        KsnrT:
        $data["\x66\x69\154\164\x65\162"] = ["\60" => "\x53\145\155\165\141", "\x31" => "\124\x61\156\x67\147\141\x6c"];
        goto vLUx3;
        I0B1m:
        $smt = $this->dashboard->getSemesterActive();
        goto julBX;
        uQ49o:
        $data["\163\145\163\151"] = $this->dropdown->getAllSesi();
        goto ZTGz_;
        vLUx3:
        $data["\152\145\x6e\x69\163\137\x73\145\x6c\x65\x63\x74\x65\144"] = $jenis_selected;
        goto qGo8S;
        WW3s9:
        EhIzB:
        goto vKM_I;
        vKM_I:
        $filter_selected = $this->input->get("\x66\151\x6c\164\145\x72", true);
        goto zaA_9;
        pEOam:
        $data["\x6b\x65\154\x61\163\137\x6c\145\166\x65\154"] = $kelas_level;
        goto JRdzw;
        YwUMp:
        bPBnD:
        goto Ovmtz;
        EWGcK:
        foreach ($kelas_level as $kl) {
            array_push($arrKls, $kl->id_kelas);
            OqOgF:
        }
        goto l2dE4;
        cQyg_:
        if (!(count($arrKls) > 0)) {
            goto vVQJ9;
        }
        goto gKBZv;
        Abo76:
        nzt_w:
        goto nLuIu;
        DseH6:
        foreach ($ruangs as $id_ruang => $ruang) {
            goto DgEtH;
            pZCop:
            gtrO7:
            goto qAFnr;
            DgEtH:
            foreach ($ruang as $id_sesi => $sesi) {
                goto wlSpg;
                wlSpg:
                foreach ($kelas_level as $kl) {
                    goto D7aJH;
                    D7aJH:
                    foreach ($jadwals as $jadwal) {
                        goto hRWqn;
                        tkXRj:
                        $jadwal_pengawas[$jadwal->tgl_mulai][$id_ruang][$id_sesi][$jadwal->kode] = $jadwal;
                        goto R__Qf;
                        R__Qf:
                        Oj7zH:
                        goto rHd3u;
                        hRWqn:
                        if (!($jadwal->bank_level == $kl->level_id)) {
                            goto Oj7zH;
                        }
                        goto tkXRj;
                        rHd3u:
                        roB03:
                        goto B0m50;
                        B0m50:
                    }
                    goto JJveT;
                    JJveT:
                    hlmUT:
                    goto zxzbc;
                    zxzbc:
                    UwOb_:
                    goto NgaH8;
                    NgaH8:
                }
                goto kpbS1;
                fuJnY:
                WTW02:
                goto b6B1E;
                kpbS1:
                OSILw:
                goto fuJnY;
                b6B1E:
            }
            goto ybZdn;
            ybZdn:
            y6pGJ:
            goto pZCop;
            qAFnr:
        }
        goto Z6evS;
        hiod3:
        $data["\x6a\x61\x64\167\x61\x6c\x73"] = $result;
        goto BMhel;
        B9QOi:
    }
}
