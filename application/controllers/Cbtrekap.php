<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtrekap extends CI_Controller
{
    public function __construct()
    {
        goto C8lY5;
        u3uiN:
        $this->load->library("\165\x70\x6c\157\141\144");
        goto tZHaa;
        GS1pk:
        goto rVLuU;
        goto pmQuI;
        q_JbT:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\165"))) {
            goto C2pbv;
        }
        goto KPYn6;
        bkLSo:
        C2pbv:
        goto GS1pk;
        o_SM7:
        rVLuU:
        goto ECh8q;
        fpP1h:
        $this->load->model("\x43\x62\x74\x5f\155\x6f\x64\x65\x6c", "\143\x62\x74");
        goto KBDDS;
        KBDDS:
        $this->load->model("\x44\x72\157\x70\144\157\167\156\x5f\x6d\157\x64\x65\154", "\x64\x72\157\160\x64\x6f\x77\156");
        goto hZXSl;
        KOcxG:
        $this->load->model("\104\x61\163\x68\x62\x6f\x61\162\144\x5f\155\x6f\144\x65\154", "\144\141\163\150\x62\x6f\141\x72\144");
        goto fpP1h;
        tZHaa:
        $this->load->model("\115\x61\x73\164\145\x72\x5f\x6d\157\144\x65\x6c", "\x6d\141\x73\x74\x65\162");
        goto KOcxG;
        pmQuI:
        XdtMo:
        goto c6_pd;
        c6_pd:
        redirect("\x61\x75\x74\150");
        goto o_SM7;
        hZXSl:
        $this->form_validation->set_error_delimiters('', '');
        goto KvTKS;
        C8lY5:
        parent::__construct();
        goto OiFHq;
        KPYn6:
        show_error("\x48\141\x6e\x79\x61\40\101\144\155\151\x6e\x69\163\x74\x72\141\x74\157\162\x20\171\x61\156\x67\40\x64\x69\142\145\x72\151\40\150\x61\x6b\40\165\x6e\164\165\153\x20\155\x65\156\x67\x61\x6b\x73\145\163\x20\150\141\x6c\141\x6d\x61\156\x20\x69\156\x69\54\40\74\x61\40\150\x72\145\146\75\42" . base_url("\144\141\x73\150\142\x6f\141\162\144") . "\42\76\113\145\x6d\x62\141\x6c\x69\40\x6b\145\40\155\145\x6e\x75\x20\x61\167\141\154\74\57\141\x3e", 403, "\x41\153\163\x65\163\x20\x54\145\162\x6c\x61\x72\x61\156\147");
        goto bkLSo;
        ECh8q:
        $this->load->library(["\144\141\x74\x61\164\x61\x62\x6c\x65\163", "\146\x6f\162\155\x5f\x76\141\154\151\x64\141\164\x69\x6f\156"]);
        goto u3uiN;
        OiFHq:
        if (!$this->ion_auth->logged_in()) {
            goto XdtMo;
        }
        goto q_JbT;
        KvTKS:
    }
    public function output_json($data, $encode = true)
    {
        goto fj3Pl;
        M7Il_:
        $this->output->set_content_type("\141\160\160\154\x69\143\141\164\151\x6f\x6e\57\152\163\x6f\x6e")->set_output($data);
        goto U_P8t;
        fj3Pl:
        if (!$encode) {
            goto iWkgG;
        }
        goto LBsqn;
        LBsqn:
        $data = json_encode($data);
        goto t7Gko;
        t7Gko:
        iWkgG:
        goto M7Il_;
        U_P8t:
    }
    public function index()
    {
        goto VO5Mm;
        NgepF:
        $rekapJadwal = $data_jadwal;
        goto mTlzK;
        c3Yjm:
        $data["\160\x72\x6f\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto HYXHo;
        ZiJqY:
        $tp = $this->master->getTahunActive();
        goto ylIOu;
        w2vRP:
        $data["\147\x75\x72\165"] = $guru;
        goto H2Tvc;
        nFvnu:
        $rekaps = array_merge($rekapJadwal, $rekapNilai);
        goto GgfKm;
        rf9bY:
        $data["\142\141\156\153\x73"] = $this->cbt->getAllBankSoal();
        goto KEScL;
        WLA1v:
        $data = ["\165\x73\x65\x72" => $user, "\x6a\x75\x64\x75\x6c" => "\122\145\153\141\x70\x20\x48\x61\x73\x69\154\40\x50\x65\x6e\151\x6c\141\x69\x61\x6e", "\x73\x75\x62\152\165\144\165\154" => "\x50\145\x6e\x69\x6c\x61\x69\141\156", "\163\x65\164\x74\151\x6e\147" => $this->dashboard->getSetting()];
        goto ZiJqY;
        ypA6w:
        $data["\x6a\x65\x6e\151\163"] = $this->cbt->getDistinctJenisUjian();
        goto lTFCH;
        Gro99:
        $data["\x73\155\x74\x5f\141\143\164\151\x76\x65"] = $smt;
        goto ypA6w;
        R7VeX:
        if ($this->ion_auth->is_admin()) {
            goto kMz0N;
        }
        goto dA68u;
        zJ0Dn:
        $rekapJadwal = $data_jadwal;
        goto nFvnu;
        cx95M:
        $data["\153\157\162\145\153\163\151"] = $koreksi;
        goto JflTt;
        H2Tvc:
        $this->load->view("\155\145\155\142\145\162\163\x2f\x67\x75\162\165\x2f\164\145\155\x70\x6c\x61\x74\145\163\57\150\x65\x61\144\x65\162", $data);
        goto Ge_oX;
        KEScL:
        $koreksi = $this->cbt->getTotalKoreksi();
        goto cx95M;
        ylIOu:
        $smt = $this->master->getSemesterActive();
        goto NQQhn;
        GgfKm:
        $data["\162\x65\153\x61\x70\163"] = $rekaps;
        goto f6alJ;
        Ge_oX:
        $this->load->view("\x63\142\x74\57\162\x65\153\x61\x70\x2f\144\141\164\x61");
        goto rjAu7;
        dA68u:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto q2uvB;
        wTOPy:
        $data["\x6b\x65\154\x61\163\145\163"] = $this->cbt->getKelas();
        goto rf9bY;
        v29gW:
        $data["\164\160\137\141\x63\164\x69\166\145"] = $tp;
        goto t4Xio;
        f6alJ:
        $data["\141\144\141\137\x72\145\153\141\x70"] = $this->cbt->getAllRekap();
        goto CKE3H;
        xcl7D:
        $data["\x74\x61\150\x75\x6e\x73"] = $this->cbt->getDistinctTahun();
        goto Fsslm;
        A3Z32:
        $rekapNilai = $this->cbt->getRekapJadwal($guru->id_guru);
        goto hL0RC;
        lX2mP:
        $rekapNilai = $this->cbt->getRekapJadwal();
        goto MtL0v;
        fSRZB:
        $this->load->view("\x5f\164\145\155\x70\x6c\x61\x74\x65\163\57\x64\141\x73\x68\x62\157\x61\x72\144\x2f\x5f\x66\x6f\x6f\x74\x65\162");
        goto oqChL;
        I0lzm:
        $this->load->view("\x63\142\164\x2f\162\x65\153\x61\160\57\x64\x61\x74\141");
        goto fSRZB;
        bwSPG:
        kMz0N:
        goto c3Yjm;
        hdZco:
        $data["\141\x64\x61\137\162\x65\x6b\141\160"] = $this->cbt->getAllRekap($guru->id_guru);
        goto w2vRP;
        Z085s:
        BzKRG:
        goto NgepF;
        dq27E:
        $data["\x73\x65\163\x69\x73"] = $this->dropdown->getAllSesi();
        goto wTOPy;
        CKE3H:
        $this->load->view("\137\164\x65\155\x70\154\141\164\x65\163\57\144\141\x73\x68\x62\x6f\141\162\144\57\137\x68\x65\x61\144\145\x72", $data);
        goto I0lzm;
        NQQhn:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto v29gW;
        lTFCH:
        $data["\153\x65\154\141\x73"] = $this->cbt->getDistinctKelas();
        goto xcl7D;
        q2uvB:
        $data_jadwal = $this->cbt->getDataJadwal($tp->id_tp, $smt->id_smt, $guru->id_guru);
        goto A3Z32;
        hL0RC:
        foreach ($data_jadwal as $rekap) {
            goto K8HfZ;
            AViW5:
            $rekap->dikoreksi = false;
            goto ZZO5J;
            zUwKz:
            $rekap->mengerjakan = $terpakai;
            goto nfq4k;
            KpbAP:
            $rekap->dikoreksi = true;
            goto sUd3z;
            nfq4k:
            $hanya_pg = $rekap->tampil_pg > 0 && $rekap->tampil_kompleks == 0 && $rekap->tampil_jodohkan == 0 && $rekap->tampil_isian == 0 && $rekap->tampil_esai == 0;
            goto Kx3wE;
            Kx3wE:
            $rekap->hanya_pg = $hanya_pg;
            goto Mcwl0;
            ZZO5J:
            VS_uJ:
            goto pbW51;
            pbW51:
            KWzQ5:
            goto yHY09;
            J0u11:
            XnHgh:
            goto AViW5;
            Mcwl0:
            if (!$hanya_pg && isset($koreksi[$rekap->id_jadwal]) && isset($koreksi[$rekap->id_jadwal][0])) {
                goto XnHgh;
            }
            goto KpbAP;
            sUd3z:
            goto VS_uJ;
            goto J0u11;
            K8HfZ:
            $terpakai = isset($jadwal_dikerjakan[$rekap->id_jadwal]) ? count($jadwal_dikerjakan[$rekap->id_jadwal]) : 0;
            goto zUwKz;
            yHY09:
        }
        goto Z085s;
        XqcDR:
        $data["\x72\x75\141\x6e\147\x73"] = $this->cbt->getAllRuang();
        goto dq27E;
        VO5Mm:
        $user = $this->ion_auth->user()->row();
        goto WLA1v;
        JflTt:
        $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai();
        goto R7VeX;
        xllka:
        $data["\162\145\x6b\141\160\x73"] = $rekaps;
        goto hdZco;
        Fsslm:
        $data["\x73\x65\155\145\163\x74\145\162"] = $this->cbt->getDistinctSmt();
        goto XqcDR;
        MtL0v:
        foreach ($data_jadwal as $rekap) {
            goto V015Q;
            uaWZG:
            EfEnN:
            goto HPNF5;
            R4rOy:
            $rekap->hanya_pg = $hanya_pg;
            goto AG9XI;
            PKxlY:
            n6hkK:
            goto qYtNI;
            AdSai:
            goto EfEnN;
            goto PKxlY;
            HPNF5:
            p18yI:
            goto P37Xj;
            LirBV:
            $hanya_pg = $rekap->tampil_pg > 0 && $rekap->tampil_kompleks == 0 && $rekap->tampil_jodohkan == 0 && $rekap->tampil_isian == 0 && $rekap->tampil_esai == 0;
            goto R4rOy;
            g3dU0:
            $rekap->mengerjakan = $terpakai;
            goto LirBV;
            V015Q:
            $terpakai = isset($jadwal_dikerjakan[$rekap->id_jadwal]) ? count($jadwal_dikerjakan[$rekap->id_jadwal]) : 0;
            goto g3dU0;
            Aywcw:
            $rekap->dikoreksi = true;
            goto AdSai;
            qYtNI:
            $rekap->dikoreksi = false;
            goto uaWZG;
            AG9XI:
            if (!$hanya_pg && isset($koreksi[$rekap->id_jadwal]) && isset($koreksi[$rekap->id_jadwal][0])) {
                goto n6hkK;
            }
            goto Aywcw;
            P37Xj:
        }
        goto OwB76;
        OwB76:
        kMzLF:
        goto zJ0Dn;
        HYXHo:
        $data_jadwal = $this->cbt->getDataJadwal($tp->id_tp, $smt->id_smt);
        goto lX2mP;
        F0mcz:
        goto BP5ky;
        goto bwSPG;
        mTlzK:
        $rekaps = array_merge($rekapJadwal, $rekapNilai);
        goto xllka;
        t4Xio:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto Gro99;
        oqChL:
        BP5ky:
        goto VlKxR;
        rjAu7:
        $this->load->view("\155\145\155\x62\x65\162\163\x2f\147\165\x72\165\x2f\164\145\x6d\x70\x6c\141\x74\x65\163\x2f\146\x6f\157\x74\x65\x72");
        goto F0mcz;
        VlKxR:
    }
    public function perMapel()
    {
        goto f2XJt;
        UmsHx:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto H1hk8;
        EdRPd:
        $this->load->view("\x5f\164\x65\155\160\x6c\x61\x74\145\163\x2f\x64\x61\163\x68\x62\x6f\x61\162\144\57\x5f\x66\157\x6f\x74\x65\162");
        goto RNpz3;
        OK6DI:
        $this->load->view("\143\x62\164\57\162\x65\x6b\141\160\x2f\160\145\x72\155\141\x70\145\x6c");
        goto j4ok3;
        ytpbD:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto I3D7h;
        j4ok3:
        $this->load->view("\x6d\145\x6d\142\x65\162\163\x2f\147\165\162\x75\x2f\164\145\x6d\x70\154\141\x74\x65\163\57\x66\157\157\x74\x65\162");
        goto EEgpn;
        EEgpn:
        goto BIDr4;
        goto cDFaq;
        DKcgZ:
        $tp = $this->master->getTahunActive();
        goto Hwtiy;
        DFT3f:
        $data["\153\145\154\141\x73"] = $this->cbt->getDistinctKelas();
        goto qfDRY;
        cDFaq:
        ns_VJ:
        goto UuAOr;
        Hwtiy:
        $smt = $this->master->getSemesterActive();
        goto UmsHx;
        aAQzZ:
        $this->load->view("\x63\x62\164\57\x72\x65\153\x61\x70\57\160\x65\162\x6d\141\x70\x65\154");
        goto EdRPd;
        I3D7h:
        $data["\x73\x6d\164\137\141\x63\164\151\x76\x65"] = $smt;
        goto N_lHQ;
        N_lHQ:
        $data["\x6a\145\x6e\x69\163"] = $this->cbt->getDistinctJenisUjian();
        goto DFT3f;
        pgFc3:
        $data["\x67\165\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto eMT4f;
        f2XJt:
        $user = $this->ion_auth->user()->row();
        goto h5t30;
        FBuh7:
        $this->load->view("\137\164\x65\x6d\x70\154\141\x74\x65\163\57\144\x61\163\150\x62\x6f\141\162\x64\x2f\x5f\x68\x65\141\x64\x65\162", $data);
        goto aAQzZ;
        eVVO4:
        $data["\163\145\155\x65\163\x74\x65\162"] = $this->cbt->getDistinctSmt();
        goto ZwXF2;
        H1hk8:
        $data["\x74\160\x5f\x61\143\x74\x69\166\x65"] = $tp;
        goto ytpbD;
        h5t30:
        $data = ["\x75\x73\145\162" => $user, "\152\x75\x64\165\154" => "\110\x61\x73\151\154\40\x53\x69\163\x77\141", "\x73\165\142\152\165\144\165\x6c" => "\x53\x74\x61\x74\165\x73\x20\123\x69\163\x77\x61", "\163\145\x74\x74\x69\156\147" => $this->dashboard->getSetting()];
        goto DKcgZ;
        eMT4f:
        $this->load->view("\155\145\x6d\x62\x65\162\x73\57\147\165\162\x75\57\x74\x65\155\160\154\x61\164\x65\x73\x2f\x68\145\x61\144\145\162", $data);
        goto OK6DI;
        RNpz3:
        BIDr4:
        goto dNjXW;
        UuAOr:
        $data["\x70\162\x6f\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto FBuh7;
        ZwXF2:
        if ($this->ion_auth->is_admin()) {
            goto ns_VJ;
        }
        goto pgFc3;
        qfDRY:
        $data["\x74\x61\150\165\156"] = $this->cbt->getDistinctTahun();
        goto eVVO4;
        dNjXW:
    }
    public function backupNilai($id_jadwal)
    {
        goto naWUN;
        lYxsF:
        $isb = [];
        goto Cq5ev;
        HpnTT:
        NfS7h:
        goto Gyg84;
        unt2j:
        $save = $this->master->create("\x63\142\x74\137\162\145\153\x61\160\x5f\x6e\151\154\x61\151", $nilai, true);
        goto FBTMa;
        OuN9v:
        $this->db->where("\x69\x64\x5f\152\141\144\167\141\154", $id_jadwal);
        goto a9FSZ;
        ACVI1:
        $soal_essai = ["\x74\x61\155\x70\151\154" => $jadwal->tampil_esai, "\142\157\x62\157\164" => $jadwal->bobot_esai, "\x6a\141\x77\141\142\x61\156" => $esb];
        goto tqBNF;
        Yhgxr:
        $generated = $this->generateNilaiUjian($id_jadwal);
        goto s1BfW;
        eHDOW:
        $insert = ["\x69\144\137\164\x70" => $id_tp->id_tp, "\x74\160" => $tahun, "\x69\144\x5f\163\x6d\x74" => $id_smt->id_smt, "\163\155\x74" => $smt, "\x69\144\137\x6a\x61\x64\x77\141\x6c" => $id_jadwal, "\x69\144\137\x6a\x65\156\x69\163" => $jadwal->id_jenis, "\x6b\x6f\x64\x65\x5f\152\145\x6e\151\x73" => $jadwal->kode_jenis, "\151\x64\137\142\141\x6e\x6b" => $jadwal->id_bank, "\x62\141\x6e\x6b\137\153\157\144\x65" => $jadwal->bank_kode, "\142\141\x6e\153\137\x6b\x65\x6c\141\163" => $jadwal->bank_kelas, "\156\x61\155\x61\x5f\153\145\154\x61\x73" => serialize($nama_kelas), "\142\141\x6e\x6b\x5f\x6c\x65\166\x65\x6c" => $jadwal->bank_level, "\151\144\x5f\x6d\x61\x70\x65\x6c" => $jadwal->id_mapel, "\x6e\x61\155\x61\137\155\x61\x70\145\154" => $jadwal->nama_mapel, "\153\157\144\x65" => $jadwal->kode, "\164\147\x6c\x5f\155\165\x6c\141\151" => $jadwal->tgl_mulai, "\164\x67\x6c\137\x73\145\x6c\x65\x73\x61\x69" => $jadwal->tgl_selesai, "\164\141\155\x70\151\154\137\x70\147" => $jadwal->tampil_pg, "\x6a\141\x77\141\x62\141\156\x5f\160\147" => serialize($pgb), "\142\157\142\157\164\x5f\160\147" => $jadwal->bobot_pg, "\163\x6f\x61\154\x5f\153\x6f\x6d\x70\x6c\x65\x6b\163" => serialize($soal_kompleks), "\x73\x6f\141\154\x5f\x6a\157\x64\157\150\x6b\141\x6e" => serialize($soal_jodohkan), "\x73\157\141\154\137\151\x73\x69\x61\156" => serialize($soal_isian), "\163\157\x61\154\x5f\x65\x73\x73\x61\x69" => serialize($soal_essai), "\x69\144\137\147\165\162\x75" => $jadwal->id_guru, "\156\141\155\141\137\147\165\162\x75" => $jadwal->nama_guru];
        goto oNlB8;
        IN76L:
        $soal_jodohkan = ["\164\141\155\160\x69\154" => $jadwal->tampil_jodohkan, "\142\x6f\x62\x6f\164" => $jadwal->bobot_jodohkan, "\x6a\x61\167\x61\142\x61\x6e" => $jodb];
        goto yZOV6;
        u_QPC:
        foreach ($siswas as $siswa) {
            array_push($arrSiswa, $siswa->id_siswa);
            wMi5m:
        }
        goto LFU3z;
        TSOqE:
        $this->db->set("\x72\145\153\141\160", 1);
        goto nWFI8;
        oh6pJ:
        $nilais = $this->cbt->getAllNilaiSiswa($id_jadwal);
        goto CoY4J;
        Btbgl:
        $terpakai = isset($jadwal_dikerjakan[$id_jadwal]) && count($jadwal_dikerjakan[$id_jadwal]) > 0;
        goto Yhgxr;
        FBTMa:
        $this->db->trans_complete();
        goto cYSmB;
        s1BfW:
        if ($terpakai && $generated) {
            goto K9uj3;
        }
        goto mknCs;
        LFU3z:
        FcWuw:
        goto RlDsZ;
        N54eQ:
        CtlT3:
        goto QLbdh;
        L9SEO:
        $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai();
        goto Btbgl;
        R_MuD:
        e36ra:
        goto aZ0pb;
        Mx0m9:
        $smt = $id_smt->nama_smt;
        goto M4y6t;
        tqBNF:
        $this->db->where("\151\144\x5f\x6a\141\144\167\x61\154", $id_jadwal);
        goto H_DLb;
        uISt3:
        foreach ($kelass as $kls) {
            goto dhJPG;
            CvGsB:
            ea_qb:
            goto ZGgix;
            dhJPG:
            if (!($kls["\x6b\145\x6c\141\163\x5f\151\144"] != null)) {
                goto R3fTL;
            }
            goto GOrl8;
            wN3hz:
            R3fTL:
            goto CvGsB;
            GOrl8:
            array_push($arrkelas, $kls["\x6b\145\x6c\x61\x73\x5f\151\144"]);
            goto wN3hz;
            ZGgix:
        }
        goto pwfah;
        xIr0t:
        if (!$result) {
            goto mOAHV;
        }
        goto TSOqE;
        yZOV6:
        $soal_isian = ["\x74\x61\x6d\160\x69\154" => $jadwal->tampil_isian, "\x62\157\142\157\164" => $jadwal->bobot_isian, "\152\x61\167\x61\x62\x61\x6e" => $isb];
        goto ACVI1;
        a9FSZ:
        $this->db->delete("\x63\142\x74\x5f\162\145\x6b\x61\160\x5f\156\151\x6c\141\x69");
        goto unt2j;
        rrzss:
        $id_smt = $this->dashboard->getSemesterById($jadwal->id_smt);
        goto yQ1qM;
        nub4o:
        $save = isset($jadwal_dikerjakan[$id_jadwal]) ? count($jadwal_dikerjakan[$id_jadwal]) : 0;
        goto TwdqK;
        oNlB8:
        $result = $this->db->insert("\143\142\164\137\162\x65\x6b\x61\x70", $insert);
        goto xIr0t;
        eNgjW:
        $jadwal = $this->cbt->getJadwalById($id_jadwal);
        goto r3eA3;
        LLSGL:
        $pg2b = [];
        goto fedfI;
        vfiR1:
        $arrkelas = [];
        goto uISt3;
        ZPSfk:
        $this->db->trans_start();
        goto eNgjW;
        hoh87:
        K9uj3:
        goto ZPSfk;
        pwfah:
        FhPEM:
        goto m_rqk;
        M4y6t:
        $kelass = unserialize($jadwal->bank_kelas);
        goto vfiR1;
        DlsdW:
        if ($generated && $result) {
            goto NfS7h;
        }
        goto z3XiS;
        RlDsZ:
        $durasies = $this->cbt->getIdSiswaFromDurasiByJadwal($id_jadwal);
        goto WXF8C;
        nWFI8:
        $this->db->where("\x69\x64\x5f\x6a\141\x64\x77\x61\154", $id_jadwal);
        goto f61qi;
        Gyg84:
        $this->session->set_flashdata("\x72\x65\x6b\x61\160\156\151\154\x61\x69", "\x3c\144\151\x76\x20\x69\x64\75\42\146\x6c\x61\163\150\144\x61\164\x61\x22\40\x63\x6c\141\x73\x73\75\42\x61\x6c\145\x72\164\x20\x61\x6c\x65\162\164\x2d\144\145\146\x61\x75\154\164\55\x73\165\143\x63\x65\x73\x73\x20\x61\154\x69\147\156\x2d\x63\x6f\x6e\164\145\x6e\164\x2d\x63\x65\x6e\164\145\162\x20\167\55\61\x30\60\x22\40\162\x6f\154\x65\x3d\42\141\x6c\x65\162\164\x22\76\x20\102\145\162\150\141\163\x69\x6c\x20\x6d\145\x72\145\153\x61\160\x20\x6e\x69\x6c\x61\151\40" . $save . "\x20\163\x69\x73\167\141\74\x2f\x64\x69\x76\x3e");
        goto N54eQ;
        f61qi:
        $this->db->update("\143\x62\164\137\x6a\x61\x64\167\x61\x6c");
        goto k3eKB;
        k3eKB:
        mOAHV:
        goto UX_lN;
        Cq5ev:
        $esb = [];
        goto kFykT;
        TwdqK:
        goto Eilq8;
        goto hoh87;
        UX_lN:
        $siswas = $this->cbt->getSiswaByKelasArray($id_tp->id_tp, $id_smt->id_smt, $arrkelas);
        goto Pc0rA;
        WXF8C:
        $jawabans = $this->cbt->getIdSiswaFromJawabanByJadwal($id_jadwal);
        goto oh6pJ;
        Z8IF1:
        goto CtlT3;
        goto HpnTT;
        yQ1qM:
        $tahun = $id_tp->tahun;
        goto Mx0m9;
        m_rqk:
        $nama_kelas = $this->dropdown->getAllKelasByArrayId($id_tp->id_tp, $id_smt->id_smt, $arrkelas);
        goto jby6N;
        naWUN:
        $result = false;
        goto L9SEO;
        jby6N:
        $pgb = [];
        goto LLSGL;
        z3XiS:
        $this->session->set_flashdata("\x72\x65\153\x61\x70\x6e\151\x6c\x61\x69", "\74\144\151\166\40\151\x64\x3d\x22\x66\x6c\x61\x73\150\144\x61\x74\141\x22\x20\143\154\x61\x73\163\75\x22\x61\x6c\x65\x72\x74\40\x61\154\x65\162\164\x2d\144\x65\x66\141\x75\x6c\x74\x2d\144\x61\x6e\147\145\162\x20\x61\x6c\151\x67\x6e\x2d\x63\157\x6e\x74\145\x6e\x74\x2d\x63\145\x6e\164\145\x72\40\167\55\61\x30\60\x22\x20\162\157\154\145\x3d\42\141\x6c\145\162\164\x22\x3e\x4a\141\x64\x77\x61\154\x20\x55\152\151\141\x6e\40\155\141\x73\151\x68\40\142\145\x72\154\x61\x6e\147\163\165\x6e\147\x2c\x20" . $save . "\40\156\x69\154\x61\151\x20\x73\151\x73\x77\x61\40\142\x65\x72\150\x61\163\151\x6c\40\x64\151\x72\x65\x6b\x61\x70\56\74\142\x72\x3e\x42\145\142\145\x72\141\x70\141\40\163\x69\x73\167\141\40\x62\x65\154\x75\x6d\40\163\x65\x6c\x65\163\x61\151\x20\x61\164\141\165\x20\142\x65\154\165\155\x20\x64\x69\x6b\x6f\x72\145\x6b\x73\x69\74\x2f\144\151\166\76");
        goto Z8IF1;
        Gqs2j:
        foreach ($siswas as $siswa) {
            goto IPeSB;
            V8Vtg:
            hwQ7D:
            goto O2hko;
            HotW5:
            if (!isset($nilais[$siswa->id_siswa])) {
                goto hwQ7D;
            }
            goto AtL1X;
            AMQcn:
            AUQlP:
            goto HCFk7;
            kcbl7:
            $soal_jod = ["\x62\x6f\142\x6f\x74" => $jadwal->bobot_jodohkan, "\152\141\167\x61\x62\141\x6e" => $jods, "\156\x69\x6c\141\x69" => $skor_jod];
            goto Av9D_;
            MQW3a:
            $skor_pg = $nilais[$siswa->id_siswa]->pg_nilai;
            goto vMbBW;
            vMbBW:
            $skor_pg2 = $nilais[$siswa->id_siswa]->kompleks_nilai;
            goto WIAo7;
            sqViT:
            $jods = [];
            goto H2ejT;
            Emxw9:
            $skor_pg = 0;
            goto FrS_J;
            eucDO:
            ZtfDn:
            goto aIr_F;
            O2hko:
            $pgs = [];
            goto BmbZP;
            WIAo7:
            $skor_jod = $nilais[$siswa->id_siswa]->jodohkan_nilai;
            goto K3kvU;
            YcDqe:
            $benar_pg = $nilais[$siswa->id_siswa]->pg_benar;
            goto EftwL;
            FrS_J:
            $skor_pg2 = 0;
            goto ZJMUh;
            H2ejT:
            $iss = [];
            goto ALrN3;
            qEyz1:
            $skor_es = 0;
            goto HotW5;
            XcxSl:
            $skor_es = $nilais[$siswa->id_siswa]->essai_nilai;
            goto V8Vtg;
            hHJ_e:
            $salah_pg = 0;
            goto Emxw9;
            UqYTt:
            ScA7L:
            goto eucDO;
            QaXs1:
            $soal_es = ["\x62\x6f\142\x6f\x74" => $jadwal->bobot_esai, "\152\x61\x77\141\142\141\x6e" => $ess, "\x6e\x69\x6c\141\x69" => $skor_es];
            goto FTKaY;
            ZJMUh:
            $skor_jod = 0;
            goto yVRmj;
            EftwL:
            $salah_pg = $jadwal->tampil_pg - $benar_pg;
            goto MQW3a;
            BmbZP:
            $pg2s = [];
            goto sqViT;
            FTKaY:
            $nilai[] = ["\x69\144\x5f\152\x61\x64\x77\141\154" => $id_jadwal, "\x69\144\137\x74\x70" => $id_tp->id_tp, "\x74\x70" => $tahun, "\151\144\x5f\163\155\164" => $id_smt->id_smt, "\163\x6d\x74" => $smt, "\151\x64\137\x6a\145\156\x69\x73" => $jadwal->id_jenis, "\153\x6f\x64\x65\x5f\x6a\x65\156\x69\x73" => $jadwal->kode_jenis, "\x69\144\x5f\142\141\x6e\153" => $jadwal->id_bank, "\151\x64\x5f\x6d\141\x70\145\154" => $jadwal->id_mapel, "\x69\x64\x5f\163\151\x73\167\141" => $siswa->id_siswa, "\x6e\141\155\141\x5f\x73\x69\163\167\141" => $siswa->nama, "\x6e\x6f\137\160\145\x73\145\162\x74\x61" => $siswa->nomor_peserta, "\151\144\137\x6b\145\x6c\141\163" => $siswa->id_kelas, "\153\x65\x6c\141\163" => $siswa->nama_kelas, "\x6d\165\x6c\141\x69" => isset($durasies[$siswa->id_siswa]) ? $durasies[$siswa->id_siswa]->mulai : '', "\x73\145\154\145\163\141\151" => isset($durasies[$siswa->id_siswa]) ? $durasies[$siswa->id_siswa]->selesai : '', "\144\x75\162\141\x73\x69" => isset($durasies[$siswa->id_siswa]) ? $durasies[$siswa->id_siswa]->lama_ujian : '', "\x62\x6f\142\x6f\164\137\x70\147" => $jadwal->bobot_pg, "\152\141\x77\x61\x62\x61\156\x5f\x70\x67" => serialize($pgs), "\156\151\154\141\151\x5f\160\x67" => round($skor_pg, 2), "\x73\157\141\154\137\x6b\157\x6d\x70\x6c\145\153\x73" => serialize($soal_pg2), "\163\157\x61\x6c\137\x6a\x6f\144\x6f\x68\x6b\x61\156" => serialize($soal_jod), "\x73\157\141\x6c\x5f\151\x73\x69\x61\156" => serialize($soal_is), "\163\157\x61\154\137\145\163\x73\141\151" => serialize($soal_es), "\151\x64\137\147\165\162\x75" => $jadwal->id_guru];
            goto AMQcn;
            yVRmj:
            $skor_is = 0;
            goto qEyz1;
            j7vuV:
            $benar_pg = 0;
            goto hHJ_e;
            AJFdf:
            if (!isset($jawabans[$siswa->id_siswa])) {
                goto ZtfDn;
            }
            goto x5VTq;
            IPeSB:
            $dikoreksi = [];
            goto j7vuV;
            K3kvU:
            $skor_is = $nilais[$siswa->id_siswa]->isian_nilai;
            goto XcxSl;
            Av9D_:
            $soal_is = ["\x62\157\x62\x6f\x74" => $jadwal->bobot_isian, "\152\x61\167\x61\142\x61\x6e" => $iss, "\156\151\154\141\151" => $skor_is];
            goto QaXs1;
            ALrN3:
            $ess = [];
            goto AJFdf;
            AtL1X:
            array_push($dikoreksi, $nilais[$siswa->id_siswa]->dikoreksi);
            goto YcDqe;
            x5VTq:
            foreach ($jawabans[$siswa->id_siswa] as $jawaban) {
                goto B56kf;
                pTaDE:
                array_push($iss, ["\156\157\137\163\x6f\x61\154" => $jawaban->id_soal, "\x6a\141\x77\141\142" => $jawaban->jawaban_siswa]);
                goto mw8AX;
                o2Gz7:
                goto k_Jgn;
                goto GoTKG;
                numjw:
                array_push($pgs, ["\x6e\x6f\137\x73\157\x61\x6c" => $jawaban->id_soal, "\152\141\x77\141\x62" => $jawaban->jawaban_siswa]);
                goto DS61n;
                Auc41:
                wflMM:
                goto wpgGZ;
                mw8AX:
                goto k_Jgn;
                goto RQ3Op;
                wpgGZ:
                array_push($pg2s, ["\x6e\x6f\x5f\163\157\141\154" => $jawaban->id_soal, "\152\141\167\x61\x62" => $jawaban->jawaban_siswa]);
                goto o2Gz7;
                TSfbj:
                array_push($jods, ["\156\157\x5f\x73\157\141\x6c" => $jawaban->id_soal, "\x6a\x61\x77\141\x62" => $jawaban->jawaban_siswa]);
                goto dQcex;
                mP6ih:
                xAZ40:
                goto HUjjF;
                R0rpT:
                MY_KX:
                goto pTaDE;
                VCKtB:
                if ($jawaban->jenis_soal == "\x34") {
                    goto MY_KX;
                }
                goto B0p1K;
                RMtmj:
                array_push($ess, ["\156\157\137\163\157\x61\154" => $jawaban->id_soal, "\152\x61\167\141\142" => $jawaban->jawaban_siswa]);
                goto s8DAK;
                s8DAK:
                k_Jgn:
                goto mP6ih;
                jWU26:
                if ($jawaban->jenis_soal == "\62") {
                    goto wflMM;
                }
                goto FjcUL;
                FjcUL:
                if ($jawaban->jenis_soal == "\63") {
                    goto EyqOg;
                }
                goto VCKtB;
                dQcex:
                goto k_Jgn;
                goto R0rpT;
                DS61n:
                goto k_Jgn;
                goto Auc41;
                B0p1K:
                if ($jawaban->jenis_soal == "\65") {
                    goto b_uU2;
                }
                goto MvM__;
                lO6Jk:
                YpzUo:
                goto numjw;
                GoTKG:
                EyqOg:
                goto TSfbj;
                B56kf:
                if ($jawaban->jenis_soal == "\x31") {
                    goto YpzUo;
                }
                goto jWU26;
                RQ3Op:
                b_uU2:
                goto RMtmj;
                MvM__:
                goto k_Jgn;
                goto lO6Jk;
                HUjjF:
            }
            goto UqYTt;
            aIr_F:
            $soal_pg2 = ["\x62\157\142\x6f\164" => $jadwal->bobot_kompleks, "\x6a\x61\x77\141\142\141\x6e" => $pg2s, "\156\151\x6c\141\151" => $skor_pg2];
            goto kcbl7;
            HCFk7:
        }
        goto I_QZu;
        CoY4J:
        $nilai = [];
        goto Gqs2j;
        cYSmB:
        Eilq8:
        goto DlsdW;
        mknCs:
        $result = false;
        goto nub4o;
        r3eA3:
        $soals = $this->cbt->getNomorSoalByBank($jadwal->id_bank);
        goto QwSNh;
        fedfI:
        $jodb = [];
        goto lYxsF;
        I_QZu:
        PB6SB:
        goto OuN9v;
        QLbdh:
        $this->output_json(true);
        goto NwBmX;
        Pc0rA:
        $arrSiswa = [];
        goto u_QPC;
        kFykT:
        foreach ($soals as $id => $soal) {
            goto ZUZIy;
            QTiNM:
            J5aKs:
            goto Wgy9D;
            Sw5sP:
            goto SHo9_;
            goto TKVQc;
            wMwNN:
            e3DyU:
            goto leONf;
            WYvr9:
            H2my3:
            goto Ytbdf;
            Ytbdf:
            array_push($isb, ["\x6e\157\x5f\x73\157\x61\x6c" => $id, "\152\x61\167\x61\142" => $soal->jawaban]);
            goto Sw5sP;
            KnhIi:
            goto SHo9_;
            goto sUSwa;
            nwr0b:
            if ($soal->jenis == "\62") {
                goto J5aKs;
            }
            goto RuSwG;
            z2Gb0:
            if ($soal->jenis == "\x34") {
                goto H2my3;
            }
            goto uXSYn;
            TKVQc:
            sFyXo:
            goto AH0fP;
            rTx1T:
            SHo9_:
            goto wMwNN;
            DtqUt:
            array_push($pgb, ["\x6e\157\x5f\x73\157\x61\x6c" => $id, "\152\141\x77\x61\x62" => $soal->jawaban]);
            goto BpBVL;
            Z1Hru:
            goto SHo9_;
            goto uib6n;
            RuSwG:
            if ($soal->jenis == "\63") {
                goto pf3x1;
            }
            goto z2Gb0;
            ZUZIy:
            if ($soal->jenis == "\x31") {
                goto Gk4s1;
            }
            goto nwr0b;
            Wgy9D:
            array_push($pg2b, ["\x6e\x6f\137\x73\157\141\154" => $id, "\x6a\141\x77\141\x62" => $soal->jawaban]);
            goto KnhIi;
            bQXTO:
            goto SHo9_;
            goto WYvr9;
            JX_B_:
            array_push($jodb, ["\156\157\137\x73\157\141\154" => $id, "\x6a\x61\167\x61\142" => $soal->jawaban]);
            goto bQXTO;
            uXSYn:
            if ($soal->jenis == "\x35") {
                goto sFyXo;
            }
            goto Z1Hru;
            AH0fP:
            array_push($esb, ["\156\x6f\137\163\157\x61\x6c" => $id, "\x6a\x61\167\x61\x62" => $soal->jawaban]);
            goto rTx1T;
            sUSwa:
            pf3x1:
            goto JX_B_;
            uib6n:
            Gk4s1:
            goto DtqUt;
            BpBVL:
            goto SHo9_;
            goto QTiNM;
            leONf:
        }
        goto R_MuD;
        H_DLb:
        $this->db->delete("\143\142\164\137\162\145\x6b\x61\160");
        goto eHDOW;
        aZ0pb:
        $soal_kompleks = ["\164\141\x6d\x70\151\154" => $jadwal->tampil_kompleks, "\142\x6f\142\157\x74" => $jadwal->bobot_kompleks, "\x6a\141\x77\141\x62\141\156" => $pg2b];
        goto IN76L;
        QwSNh:
        $id_tp = $this->dashboard->getTahunById($jadwal->id_tp);
        goto rrzss;
        NwBmX:
    }
    public function bulkBackup()
    {
        goto oLV28;
        II39j:
        $data["\164\157\x74\x61\x6c"] = count($ids);
        goto pzS1n;
        zD71b:
        sleep(1);
        goto II39j;
        pFlhz:
        $jadwals = $this->cbt->getJadwalByArrId($ids);
        goto j2srW;
        Dj3qy:
        GxYWV:
        goto iQxlf;
        pzS1n:
        $this->db->trans_start();
        goto sbRz_;
        rOY9k:
        foreach ($jadwals as $jadwal) {
            goto BooSO;
            gCSdV:
            if (!$gen) {
                goto CFrDf;
            }
            goto wnj6O;
            Sfw2U:
            $gen = $this->generateNilaiUjian($jadwal->id_jadwal);
            goto gCSdV;
            Ci6B_:
            foreach ($soals as $id => $soal) {
                goto eoN3R;
                YwTgk:
                array_push($pg2b, ["\x6e\157\x5f\163\157\x61\154" => $id, "\x6a\x61\167\x61\x62" => $soal->jawaban]);
                goto P4qJ5;
                ztTXw:
                goto UL1Og;
                goto Y_aJa;
                fGZ_c:
                aed8u:
                goto wdoYe;
                cAIPo:
                xcXMi:
                goto aDE2K;
                E5D05:
                KuxF5:
                goto YwTgk;
                P4qJ5:
                goto UL1Og;
                goto YylAG;
                mDnbP:
                goto UL1Og;
                goto fGZ_c;
                wgDkI:
                if ($soal->jenis == "\x35") {
                    goto aed8u;
                }
                goto ztTXw;
                EqQ6Y:
                if ($soal->jenis == "\64") {
                    goto xcXMi;
                }
                goto wgDkI;
                wdoYe:
                array_push($esb, ["\x6e\x6f\137\x73\x6f\141\154" => $id, "\x6a\141\167\x61\x62" => $soal->jawaban]);
                goto M9v2J;
                BL8Bn:
                goto UL1Og;
                goto cAIPo;
                W3Dbw:
                if ($soal->jenis == "\x33") {
                    goto Wd8_o;
                }
                goto EqQ6Y;
                aDE2K:
                array_push($isb, ["\x6e\x6f\137\x73\x6f\x61\x6c" => $id, "\152\x61\167\141\x62" => $soal->jawaban]);
                goto mDnbP;
                Y_aJa:
                hKnUi:
                goto JRs05;
                T2jWA:
                if ($soal->jenis == "\x32") {
                    goto KuxF5;
                }
                goto W3Dbw;
                ZlLBj:
                gBwTd:
                goto sGccU;
                VfnKa:
                goto UL1Og;
                goto E5D05;
                M9v2J:
                UL1Og:
                goto ZlLBj;
                TfLVb:
                array_push($jodb, ["\x6e\157\137\x73\x6f\141\154" => $id, "\152\141\x77\x61\x62" => $soal->jawaban]);
                goto BL8Bn;
                eoN3R:
                if ($soal->jenis == "\61") {
                    goto hKnUi;
                }
                goto T2jWA;
                YylAG:
                Wd8_o:
                goto TfLVb;
                JRs05:
                array_push($pgb, ["\x6e\x6f\x5f\163\x6f\x61\x6c" => $id, "\152\x61\167\x61\142" => $soal->jawaban]);
                goto VfnKa;
                sGccU:
            }
            goto f4Wxf;
            XbhVv:
            $arrkelas = [];
            goto atCNc;
            mudaN:
            $jawabans = $this->cbt->getIdSiswaFromJawabanByJadwal($jadwal->id_jadwal);
            goto WSiVA;
            r7rCi:
            P09Wf:
            goto GhRM_;
            hG_Iy:
            $isb = [];
            goto W8PSf;
            Vl5tj:
            $pg2b = [];
            goto hU9V5;
            pvN0j:
            if (!$terpakai) {
                goto GHO67;
            }
            goto Sfw2U;
            Q5dGS:
            $tahun = $id_tp->tahun;
            goto Nwj01;
            xh9ZL:
            $id_smt = $this->dashboard->getSemesterById($jadwal->id_smt);
            goto Q5dGS;
            l7SAG:
            $nilai = [];
            goto Q9lvR;
            NDIPi:
            $durasies = $this->cbt->getIdSiswaFromDurasiByJadwal($jadwal->id_jadwal);
            goto mudaN;
            jhjc_:
            $soal_kompleks = ["\164\141\155\x70\151\154" => $jadwal->tampil_kompleks, "\142\157\x62\x6f\x74" => $jadwal->bobot_kompleks, "\x6a\x61\167\x61\x62\x61\x6e" => $pg2b];
            goto oy6jz;
            Lx_NI:
            $arrSiswa = [];
            goto Fq3Ls;
            I8p8d:
            $this->db->delete("\x63\142\x74\137\x72\x65\x6b\x61\x70");
            goto IBQHP;
            nutJT:
            $soals = $this->cbt->getNomorSoalByBank($jadwal->id_bank);
            goto xuymO;
            zQcA6:
            CFrDf:
            goto nutJT;
            f4Wxf:
            pT1Hs:
            goto jhjc_;
            B2Iv8:
            $this->db->where("\151\144\137\x6a\141\x64\167\x61\154", $jadwal->id_jadwal);
            goto gEMy6;
            GhRM_:
            $this->db->where("\x69\144\x5f\152\141\144\x77\x61\154", $jadwal->id_jadwal);
            goto GCgZu;
            bblG3:
            $result = $this->db->insert("\143\x62\x74\137\x72\x65\x6b\141\160", $insert);
            goto dhHnL;
            CahuG:
            GHMXB:
            goto NDIPi;
            W8PSf:
            $esb = [];
            goto Ci6B_;
            atCNc:
            foreach ($kelass as $kls) {
                goto UN95F;
                UN95F:
                if (!($kls["\153\145\154\141\163\137\151\144"] != null)) {
                    goto QMhZS;
                }
                goto Taopt;
                gBWOm:
                QMhZS:
                goto OTaFg;
                OTaFg:
                JMjzm:
                goto U8p_i;
                Taopt:
                array_push($arrkelas, $kls["\x6b\x65\154\x61\x73\x5f\x69\x64"]);
                goto gBWOm;
                U8p_i:
            }
            goto YhCsA;
            gEMy6:
            $this->db->update("\143\142\x74\x5f\x6a\141\144\167\141\154");
            goto bka6I;
            zXlFO:
            $this->db->where("\x69\144\x5f\152\141\144\167\141\x6c", $jadwal->id_jadwal);
            goto I8p8d;
            GCgZu:
            $this->db->delete("\x63\x62\164\x5f\x72\145\x6b\141\x70\x5f\156\x69\154\141\x69");
            goto IOXrY;
            QCrPW:
            $this->db->set("\162\145\x6b\x61\x70", 1);
            goto B2Iv8;
            IBQHP:
            $insert = ["\x69\144\x5f\x74\x70" => $id_tp->id_tp, "\x74\160" => $tahun, "\151\x64\137\163\155\x74" => $id_smt->id_smt, "\x73\x6d\164" => $smt, "\151\144\x5f\152\141\x64\x77\x61\154" => $jadwal->id_jadwal, "\x69\x64\137\x6a\145\156\151\163" => $jadwal->id_jenis, "\153\x6f\x64\x65\137\x6a\x65\x6e\x69\x73" => $jadwal->kode_jenis, "\151\x64\137\x62\x61\x6e\x6b" => $jadwal->id_bank, "\142\x61\156\x6b\137\x6b\x6f\x64\x65" => $jadwal->bank_kode, "\x62\141\156\153\137\153\145\x6c\x61\163" => $jadwal->bank_kelas, "\156\x61\155\141\x5f\x6b\x65\154\x61\x73" => serialize($nama_kelas), "\142\x61\x6e\x6b\137\154\145\x76\145\x6c" => $jadwal->bank_level, "\x69\x64\137\155\x61\160\145\154" => $jadwal->id_mapel, "\156\141\155\x61\137\155\141\160\145\154" => $jadwal->nama_mapel, "\153\157\x64\x65" => $jadwal->kode, "\x74\147\x6c\137\155\x75\154\141\x69" => $jadwal->tgl_mulai, "\x74\x67\154\137\x73\x65\154\x65\163\x61\151" => $jadwal->tgl_selesai, "\x74\141\155\x70\151\x6c\137\160\x67" => $jadwal->tampil_pg, "\x6a\x61\167\x61\x62\141\x6e\x5f\160\x67" => serialize($pgb), "\x62\x6f\142\157\x74\x5f\x70\x67" => $jadwal->bobot_pg, "\163\x6f\141\154\137\153\x6f\155\x70\154\x65\x6b\x73" => serialize($soal_kompleks), "\x73\157\x61\154\x5f\x6a\157\144\157\150\153\x61\156" => serialize($soal_jodohkan), "\163\x6f\x61\154\x5f\x69\163\151\141\x6e" => serialize($soal_isian), "\x73\x6f\x61\154\137\145\x73\163\141\151" => serialize($soal_essai), "\151\x64\137\x67\165\x72\165" => $jadwal->id_guru, "\156\141\x6d\141\137\x67\165\x72\165" => $jadwal->nama_guru];
            goto bblG3;
            MsXj8:
            $kelass = unserialize($jadwal->bank_kelas);
            goto XbhVv;
            hU9V5:
            $jodb = [];
            goto hG_Iy;
            dhHnL:
            if (!$result) {
                goto u3BSh;
            }
            goto QCrPW;
            oy6jz:
            $soal_jodohkan = ["\x74\x61\x6d\160\x69\154" => $jadwal->tampil_jodohkan, "\x62\157\x62\x6f\x74" => $jadwal->bobot_jodohkan, "\152\141\x77\x61\x62\141\x6e" => $jodb];
            goto RCZcc;
            KFNTa:
            $siswas = $this->cbt->getSiswaByKelasArray($id_tp->id_tp, $id_smt->id_smt, $arrkelas);
            goto Lx_NI;
            IOXrY:
            $save = $this->master->create("\143\x62\x74\137\x72\x65\x6b\141\160\137\156\x69\154\x61\x69", $nilai, true);
            goto Ea4RX;
            Nwj01:
            $smt = $id_smt->nama_smt;
            goto MsXj8;
            KAAOB:
            $nama_kelas = $this->dropdown->getAllKelasByArrayId($id_tp->id_tp, $id_smt->id_smt, $arrkelas);
            goto TJRbZ;
            bka6I:
            u3BSh:
            goto KFNTa;
            BooSO:
            $terpakai = isset($jadwal_dikerjakan[$jadwal->id_jadwal]) && count($jadwal_dikerjakan[$jadwal->id_jadwal]) > 0;
            goto pvN0j;
            YhCsA:
            WtAsJ:
            goto KAAOB;
            Q9lvR:
            foreach ($siswas as $siswa) {
                goto q5g2U;
                yD6U7:
                $skor_is = $nilais[$siswa->id_siswa]->isian_nilai;
                goto jfqij;
                M_xFp:
                $jods = [];
                goto QVmGu;
                laYs_:
                MCkkB:
                goto vIsCH;
                jfqij:
                $skor_es = $nilais[$siswa->id_siswa]->essai_nilai;
                goto laYs_;
                KDUEk:
                $skor_jod = 0;
                goto MjAcC;
                hGRcK:
                AgXI7:
                goto anybf;
                HTjn1:
                $soal_es = ["\142\x6f\x62\x6f\164" => $jadwal->bobot_esai, "\x6a\x61\x77\141\142\141\156" => $ess, "\x6e\151\x6c\x61\151" => $skor_es];
                goto N8Yza;
                oA3lW:
                $benar_pg = 0;
                goto UggL2;
                MjAcC:
                $skor_is = 0;
                goto eXY6g;
                N8Yza:
                $nilai[] = ["\x69\144\137\152\x61\x64\167\141\x6c" => $jadwal->id_jadwal, "\151\x64\x5f\x74\160" => $id_tp->id_tp, "\164\x70" => $tahun, "\x69\x64\x5f\163\x6d\x74" => $id_smt->id_smt, "\x73\x6d\164" => $smt, "\151\144\137\152\x65\x6e\151\163" => $jadwal->id_jenis, "\x6b\x6f\x64\145\x5f\152\145\156\x69\x73" => $jadwal->kode_jenis, "\x69\144\137\142\x61\156\153" => $jadwal->id_bank, "\151\x64\137\x6d\x61\160\x65\154" => $jadwal->id_mapel, "\151\x64\137\163\151\163\167\141" => $siswa->id_siswa, "\x6e\x61\155\141\x5f\x73\151\x73\x77\141" => $siswa->nama, "\156\157\x5f\160\145\163\x65\x72\164\141" => $siswa->nomor_peserta, "\151\x64\x5f\x6b\145\154\x61\x73" => $siswa->id_kelas, "\x6b\145\x6c\141\163" => $siswa->nama_kelas, "\x6d\165\x6c\x61\x69" => isset($durasies[$siswa->id_siswa]) ? $durasies[$siswa->id_siswa]->mulai : '', "\x73\145\154\145\x73\x61\151" => isset($durasies[$siswa->id_siswa]) ? $durasies[$siswa->id_siswa]->selesai : '', "\x64\165\162\x61\163\x69" => isset($durasies[$siswa->id_siswa]) ? $durasies[$siswa->id_siswa]->lama_ujian : '', "\x62\x6f\142\x6f\164\x5f\x70\147" => $jadwal->bobot_pg, "\152\141\167\141\142\x61\156\137\x70\x67" => serialize($pgs), "\x6e\151\154\x61\151\137\x70\147" => round($skor_pg, 2), "\163\157\141\154\x5f\x6b\x6f\155\x70\154\x65\x6b\163" => serialize($soal_pg2), "\163\x6f\x61\154\137\x6a\157\x64\x6f\150\153\x61\x6e" => serialize($soal_jod), "\x73\x6f\x61\x6c\x5f\x69\x73\x69\x61\156" => serialize($soal_is), "\x73\157\141\x6c\x5f\x65\x73\163\141\151" => serialize($soal_es), "\x69\x64\137\147\165\x72\x75" => $jadwal->id_guru];
                goto Dw3FL;
                p3K3w:
                if (!isset($jawabans[$siswa->id_siswa])) {
                    goto YiNBN;
                }
                goto VRCQq;
                QVmGu:
                $iss = [];
                goto i1eoT;
                vIsCH:
                $pgs = [];
                goto PhrEf;
                PhrEf:
                $pg2s = [];
                goto M_xFp;
                UggL2:
                $salah_pg = 0;
                goto ShypM;
                anybf:
                YiNBN:
                goto lxXhR;
                s8xwj:
                $skor_pg = $nilais[$siswa->id_siswa]->pg_nilai;
                goto DSzeC;
                LscyT:
                $soal_is = ["\x62\157\142\157\164" => $jadwal->bobot_isian, "\152\x61\167\141\x62\x61\156" => $iss, "\156\x69\x6c\141\151" => $skor_is];
                goto HTjn1;
                r2p2L:
                array_push($dikoreksi, $nilais[$siswa->id_siswa]->dikoreksi);
                goto lRdL8;
                lxXhR:
                $soal_pg2 = ["\142\x6f\x62\x6f\164" => $jadwal->bobot_kompleks, "\x6a\141\x77\141\x62\141\x6e" => $pg2s, "\x6e\x69\x6c\x61\x69" => $skor_pg2];
                goto hto7K;
                RWrHA:
                $salah_pg = $jadwal->tampil_pg - $benar_pg;
                goto s8xwj;
                tyePj:
                if (!isset($nilais[$siswa->id_siswa])) {
                    goto MCkkB;
                }
                goto r2p2L;
                Dw3FL:
                Yx8sL:
                goto vc5po;
                eXY6g:
                $skor_es = 0;
                goto tyePj;
                lQNpV:
                $skor_jod = $nilais[$siswa->id_siswa]->jodohkan_nilai;
                goto yD6U7;
                DSzeC:
                $skor_pg2 = $nilais[$siswa->id_siswa]->kompleks_nilai;
                goto lQNpV;
                lRdL8:
                $benar_pg = $nilais[$siswa->id_siswa]->pg_benar;
                goto RWrHA;
                i1eoT:
                $ess = [];
                goto p3K3w;
                hto7K:
                $soal_jod = ["\142\157\x62\x6f\x74" => $jadwal->bobot_jodohkan, "\152\141\167\x61\142\141\156" => $jods, "\x6e\x69\154\141\151" => $skor_jod];
                goto LscyT;
                ShypM:
                $skor_pg = 0;
                goto nRIMn;
                nRIMn:
                $skor_pg2 = 0;
                goto KDUEk;
                VRCQq:
                foreach ($jawabans[$siswa->id_siswa] as $jawaban) {
                    goto b7vvv;
                    QF0NV:
                    goto GScMo;
                    goto UvS8w;
                    Akru5:
                    if ($jawaban->jenis_soal == "\x33") {
                        goto gs916;
                    }
                    goto FS0zo;
                    gC2gW:
                    goto GScMo;
                    goto NL_zB;
                    DS07u:
                    goto GScMo;
                    goto nC8VA;
                    x7NiV:
                    if ($jawaban->jenis_soal == "\x32") {
                        goto CToGK;
                    }
                    goto Akru5;
                    NL_zB:
                    CToGK:
                    goto cv12y;
                    LeqUf:
                    array_push($jods, ["\156\x6f\x5f\x73\x6f\x61\x6c" => $jawaban->id_soal, "\x6a\x61\x77\x61\142" => $jawaban->jawaban_siswa]);
                    goto Sgu2b;
                    Sgu2b:
                    goto GScMo;
                    goto rxiy0;
                    lxIH0:
                    array_push($iss, ["\x6e\x6f\x5f\x73\157\x61\154" => $jawaban->id_soal, "\x6a\141\x77\141\x62" => $jawaban->jawaban_siswa]);
                    goto DS07u;
                    UvS8w:
                    n0Qxy:
                    goto pSlT3;
                    A8qiS:
                    if ($jawaban->jenis_soal == "\x35") {
                        goto tXAId;
                    }
                    goto QF0NV;
                    K8Cxn:
                    vRj7I:
                    goto A3Msu;
                    cv12y:
                    array_push($pg2s, ["\156\x6f\137\x73\x6f\x61\154" => $jawaban->id_soal, "\152\141\167\x61\x62" => $jawaban->jawaban_siswa]);
                    goto th2Th;
                    b7vvv:
                    if ($jawaban->jenis_soal == "\61") {
                        goto n0Qxy;
                    }
                    goto x7NiV;
                    rxiy0:
                    jJwn5:
                    goto lxIH0;
                    FS0zo:
                    if ($jawaban->jenis_soal == "\64") {
                        goto jJwn5;
                    }
                    goto A8qiS;
                    pSlT3:
                    array_push($pgs, ["\156\x6f\137\163\157\141\154" => $jawaban->id_soal, "\152\x61\x77\141\x62" => $jawaban->jawaban_siswa]);
                    goto gC2gW;
                    nC8VA:
                    tXAId:
                    goto WSqiY;
                    th2Th:
                    goto GScMo;
                    goto CnjLa;
                    CnjLa:
                    gs916:
                    goto LeqUf;
                    kQMa7:
                    GScMo:
                    goto K8Cxn;
                    WSqiY:
                    array_push($ess, ["\x6e\157\137\x73\x6f\x61\x6c" => $jawaban->id_soal, "\x6a\x61\167\141\x62" => $jawaban->jawaban_siswa]);
                    goto kQMa7;
                    A3Msu:
                }
                goto hGRcK;
                q5g2U:
                $dikoreksi = [];
                goto oA3lW;
                vc5po:
            }
            goto r7rCi;
            xuymO:
            $id_tp = $this->dashboard->getTahunById($jadwal->id_tp);
            goto xh9ZL;
            WSiVA:
            $nilais = $this->cbt->getAllNilaiSiswa($jadwal->id_jadwal);
            goto l7SAG;
            TJRbZ:
            $pgb = [];
            goto Vl5tj;
            RCZcc:
            $soal_isian = ["\x74\141\x6d\160\151\x6c" => $jadwal->tampil_isian, "\x62\x6f\142\157\164" => $jadwal->bobot_isian, "\x6a\x61\167\x61\x62\141\156" => $isb];
            goto PE3Xf;
            Ea4RX:
            GHO67:
            goto EPpgJ;
            Fq3Ls:
            foreach ($siswas as $siswa) {
                array_push($arrSiswa, $siswa->id_siswa);
                vaitH:
            }
            goto CahuG;
            EPpgJ:
            Y6wNh:
            goto XlGQ4;
            PE3Xf:
            $soal_essai = ["\x74\x61\155\160\151\154" => $jadwal->tampil_esai, "\142\x6f\x62\157\164" => $jadwal->bobot_esai, "\152\141\x77\141\142\x61\x6e" => $esb];
            goto zXlFO;
            wnj6O:
            $generated++;
            goto zQcA6;
            XlGQ4:
        }
        goto R_reW;
        XzLFk:
        $result = false;
        goto uDClH;
        iQxlf:
        $this->output_json(true);
        goto R36O8;
        Huq8R:
        $this->session->set_flashdata("\x72\145\x6b\141\160\156\x69\154\141\151", "\x3c\x64\151\x76\40\x69\144\x3d\x22\x66\154\x61\163\x68\144\141\164\x61\42\40\143\154\141\163\x73\x3d\42\x61\x6c\x65\x72\x74\x20\x61\x6c\145\162\x74\x2d\144\145\146\141\165\x6c\x74\x2d\x73\165\143\143\145\163\163\40\x61\x6c\151\147\x6e\x2d\x63\x6f\x6e\164\x65\x6e\x74\x2d\x63\x65\156\x74\x65\x72\x20\x77\55\61\x30\60\x22\x20\x72\157\x6c\x65\x3d\42\x61\x6c\145\x72\x74\42\76\x20\102\x65\162\x68\141\163\151\x6c\x20\155\x65\x72\145\153\141\x70\x20\74\142\x3e" . count($ids) . "\x3c\57\142\76\x20\x6e\151\154\141\x69\x20\x3c\57\x64\x69\166\76");
        goto Dj3qy;
        oLV28:
        $ids = json_decode($this->input->post("\x69\x64\x73", true));
        goto zD71b;
        v01yP:
        $this->db->trans_complete();
        goto vzImd;
        R_reW:
        ExANq:
        goto v01yP;
        BnErR:
        $this->session->set_flashdata("\x72\x65\x6b\141\160\x6e\x69\x6c\x61\151", "\x3c\x64\x69\166\40\151\x64\x3d\42\x66\x6c\141\163\150\x64\x61\x74\x61\42\40\x63\154\x61\x73\163\75\42\x61\154\x65\x72\x74\40\x61\x6c\x65\x72\164\55\x64\145\x66\141\x75\154\x74\55\x64\x61\x6e\147\145\162\40\141\154\x69\147\156\x2d\143\157\156\x74\x65\156\164\x2d\143\145\x6e\164\x65\162\40\x77\55\x31\x30\x30\42\x20\162\x6f\154\x65\75\42\141\x6c\145\162\164\42\76\x4a\x61\x64\x77\141\154\40\x55\152\151\x61\x6e\40\x6d\x61\x73\x69\150\x20\142\x65\x72\x6c\141\x6e\x67\163\165\156\147\x2c\40" . $save . "\x20\x6e\x69\154\141\151\40\163\x69\x73\x77\141\x20\x62\145\x72\150\x61\x73\151\x6c\x20\x64\x69\x72\145\x6b\x61\160\56\x3c\x62\x72\x3e\x42\x65\x62\145\x72\141\160\141\40\163\x69\x73\167\x61\x20\x62\x65\154\165\155\40\x73\145\154\x65\x73\x61\x69\40\141\164\x61\165\x20\142\x65\x6c\x75\155\40\x64\151\153\157\162\x65\x6b\163\x69\x3c\57\144\151\x76\x3e");
        goto uiqQl;
        uDClH:
        $save = false;
        goto sg_Kg;
        Rp2qF:
        if ($generated > 0 && $result) {
            goto O5vcH;
        }
        goto BnErR;
        vzImd:
        $sukses = $generated > 0 && $result;
        goto Rp2qF;
        CzTW8:
        O5vcH:
        goto Huq8R;
        sbRz_:
        $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai();
        goto pFlhz;
        uiqQl:
        goto GxYWV;
        goto CzTW8;
        sg_Kg:
        $generated = 0;
        goto rOY9k;
        j2srW:
        $data["\x6a\x61\x64\167\x61\154"] = $jadwals;
        goto XzLFk;
        R36O8:
    }
    public function hapusRekap()
    {
        goto YvrwG;
        YrgdR:
        goto aEC5v;
        goto oWwg4;
        bS4m9:
        if ($delNilai && $delRekap) {
            goto Il3HQ;
        }
        goto Cx8Un;
        oWwg4:
        Il3HQ:
        goto KYqIL;
        fdkt3:
        $this->output_json($data);
        goto vCKgH;
        sP9BK:
        $delRekap = $this->db->delete("\x63\142\x74\137\162\145\153\141\x70");
        goto mRiDl;
        JnGSQ:
        $data["\164\x6f\164\141\x6c"] = count($ids);
        goto NsZFL;
        eJ2Zl:
        sleep(1);
        goto JnGSQ;
        NsZFL:
        $this->db->where_in("\x69\144\137\152\141\144\x77\x61\x6c", $ids);
        goto sP9BK;
        mRiDl:
        $this->db->where_in("\151\x64\137\x6a\141\144\x77\141\154", $ids);
        goto oT_10;
        Pakgg:
        aEC5v:
        goto EkF6j;
        EkF6j:
        $data["\x73\x75\x63\143\x65\163\163"] = $delNilai && $delRekap;
        goto fdkt3;
        Cx8Un:
        $this->session->set_flashdata("\x72\x65\153\141\160\x6e\x69\154\141\x69", "\x3c\144\151\x76\x20\151\x64\x3d\42\x66\x6c\141\x73\x68\144\x61\164\x61\x22\x20\143\154\x61\163\x73\x3d\42\141\x6c\145\x72\164\x20\x61\154\x65\162\x74\x2d\144\x65\x66\x61\x75\154\x74\55\x64\141\x6e\147\x65\162\x20\x61\x6c\x69\x67\x6e\x2d\143\x6f\x6e\x74\x65\156\164\x2d\x63\145\156\x74\145\162\x20\167\55\61\60\60\42\x20\162\157\154\x65\x3d\x22\141\154\x65\x72\164\x22\x3e\40\x48\x61\160\x75\163\x20\x6e\151\154\x61\x69\40\147\x61\x67\141\154\x20\74\57\x64\151\166\x3e");
        goto YrgdR;
        oT_10:
        $delNilai = $this->db->delete("\143\142\x74\137\162\x65\x6b\x61\160\x5f\x6e\x69\154\141\x69");
        goto bS4m9;
        KYqIL:
        $this->session->set_flashdata("\162\145\153\x61\160\x6e\x69\154\x61\x69", "\74\x64\151\166\40\151\x64\x3d\x22\x66\154\x61\x73\x68\144\141\x74\141\x22\x20\x63\x6c\141\x73\x73\75\x22\141\x6c\145\162\x74\40\141\x6c\145\x72\x74\55\144\145\x66\x61\x75\x6c\x74\55\163\165\x63\x63\x65\163\163\x20\x61\x6c\x69\x67\156\55\143\157\x6e\x74\145\156\164\55\143\145\156\x74\145\x72\x20\x77\x2d\x31\60\60\x22\40\x72\157\x6c\x65\75\42\x61\x6c\x65\x72\164\x22\x3e\40\x42\x65\x72\150\x61\x73\151\154\40\x6d\145\x6e\147\150\141\160\165\x73\40\x3c\142\x3e" . count($ids) . "\x3c\x2f\x62\x3e\x20\x6e\x69\154\141\151\x20\74\57\x64\151\166\x3e");
        goto Pakgg;
        YvrwG:
        $ids = json_decode($this->input->post("\151\144\163", true));
        goto eJ2Zl;
        vCKgH:
    }
    function getDataFromArray1ByUserId($array, $userId)
    {
        goto KAoED;
        HBj2n:
        Ea4bb:
        goto hdsyX;
        KAoED:
        foreach ($array as $key => $data) {
            goto BT0sT;
            l5a8K:
            VaMSF:
            goto ckJpt;
            BT0sT:
            if (!($data->id_siswa == $userId)) {
                goto JLh1N;
            }
            goto ANonY;
            L5Jpm:
            JLh1N:
            goto l5a8K;
            ANonY:
            return $array;
            goto L5Jpm;
            ckJpt:
        }
        goto HBj2n;
        hdsyX:
        return array();
        goto uHrg6;
        uHrg6:
    }
    public function getJenisPenilaian()
    {
        goto zCHw5;
        a0hfu:
        $jadwals = $this->cbt->getJenisRekap($tahun, $smt);
        goto VGLOW;
        uhVQr:
        $smt = $this->input->get("\163\x6d\x74");
        goto a0hfu;
        zCHw5:
        $tahun = $this->input->get("\x74\141\150\x75\x6e");
        goto uhVQr;
        VGLOW:
    }
    public function getNilaiKelas()
    {
        goto S3d32;
        C4HlX:
        $data["\x73\x69\163\167\141"] = $arrSiswa;
        goto J2CT6;
        VzPXr:
        SpgDq:
        goto lGBU6;
        Z9lmG:
        $smtg = $this->dashboard->getSemesterByNama($smt);
        goto a5_pu;
        KUTDN:
        $level = $this->master->getKelasById($kelas);
        goto B3G04;
        LTlCF:
        EU9iK:
        goto C4HlX;
        Eyo5b:
        if ($this->ion_auth->is_admin()) {
            goto nF0ug;
        }
        goto V1Acf;
        MVk5g:
        $mapel = $this->input->get("\x6d\x61\x70\145\x6c");
        goto nnf8X;
        lZUNA:
        goto Fyah2;
        goto vG47y;
        WId0i:
        $arrNilai = [];
        goto mEgNe;
        S3d32:
        $kelas = $this->input->get("\153\145\154\141\163");
        goto KUTDN;
        KRIE8:
        $jadwals = $this->cbt->getAllRekapByJenis($tahun, $smt, $jenis, $level->level_id, $mapel);
        goto LZeWl;
        nnf8X:
        $user = $this->ion_auth->user()->row();
        goto Eyo5b;
        RnbnE:
        $smt = $this->input->get("\163\155\164");
        goto MVk5g;
        V1Acf:
        $tpg = $this->dashboard->getTahunByTahun($tahun);
        goto Z9lmG;
        eUWA_:
        $data["\x69\x6e\146\x6f"] = array_values($jadwals);
        goto NG3dR;
        NG3dR:
        $this->output_json($data);
        goto j39Os;
        LZeWl:
        foreach ($jadwals as $key => $jadwal) {
            goto DYpzG;
            vacSq:
            if (in_array($kelas, $ids)) {
                goto g_nbk;
            }
            goto nnDhU;
            DYpzG:
            $jadwal->bank_kelas = unserialize($jadwal->bank_kelas);
            goto ysLOD;
            omDC5:
            $jadwal->jawaban_esai = unserialize($jadwal->jawaban_esai);
            goto QdP55;
            bCJgd:
            dG4gi:
            goto vacSq;
            QdP55:
            $ids = [];
            goto S9svb;
            nnDhU:
            unset($jadwals[$key]);
            goto JEWZy;
            JEWZy:
            g_nbk:
            goto O10R4;
            ysLOD:
            $jadwal->jawaban_pg = unserialize($jadwal->jawaban_pg);
            goto omDC5;
            O10R4:
            UpGGn:
            goto GsveA;
            S9svb:
            foreach ($jadwal->bank_kelas as $id) {
                array_push($ids, $id["\153\145\154\141\x73\x5f\151\x64"]);
                vQa2R:
            }
            goto bCJgd;
            GsveA:
        }
        goto gyU33;
        J0gVq:
        usort($arrSiswa, function ($a, $b) {
            return $a["\x6e\141\155\x61"] <=> $b["\x6e\141\155\141"];
        });
        goto WId0i;
        ZgQIU:
        Fyah2:
        goto FceLq;
        MjpaX:
        foreach ($jadwals as $key => $jadwal) {
            goto ey0v9;
            ey0v9:
            $jadwal->bank_kelas = unserialize($jadwal->bank_kelas);
            goto PwL3I;
            ZAxpd:
            unset($jadwals[$key]);
            goto ctM4D;
            iO66B:
            $ids = [];
            goto t2SNU;
            xBD7f:
            $jadwal->jawaban_esai = unserialize($jadwal->jawaban_esai);
            goto iO66B;
            t2SNU:
            foreach ($jadwal->bank_kelas as $id) {
                array_push($ids, $id["\153\x65\x6c\x61\163\x5f\x69\144"]);
                WA23l:
            }
            goto FpoXJ;
            PwL3I:
            $jadwal->jawaban_pg = unserialize($jadwal->jawaban_pg);
            goto xBD7f;
            ctM4D:
            ODI8A:
            goto rb1GS;
            FpoXJ:
            H1Yum:
            goto qv6xn;
            qv6xn:
            if (in_array($kelas, $ids)) {
                goto ODI8A;
            }
            goto ZAxpd;
            rb1GS:
            Cjui7:
            goto ZsgnS;
            ZsgnS:
        }
        goto cJZ0E;
        tNdFA:
        foreach ($rekaps as $rekap) {
            goto TfyF3;
            d4XtZ:
            $rekap->soal_jodohkan = json_decode(json_encode(unserialize($rekap->soal_jodohkan)));
            goto RLV2q;
            ZEigk:
            $arrSiswa[$rekap->id_siswa] = ["\x69\144\x5f\x73\x69\x73\x77\141" => $rekap->id_siswa, "\x6e\157\155\157\162\137\x70\x65\x73\x65\x72\x74\x61" => $rekap->nomor_peserta, "\x6e\141\x6d\141" => $rekap->nama];
            goto Jdfp7;
            Jdfp7:
            jlbVS:
            goto cIphL;
            KVtMb:
            $rekap->soal_essai = json_decode(json_encode(unserialize($rekap->soal_essai)));
            goto ZEigk;
            OESmy:
            $rekap->soal_kompleks = json_decode(json_encode(unserialize($rekap->soal_kompleks)));
            goto d4XtZ;
            TfyF3:
            $rekap->jawaban_pg = $this->unserialize_with_key($rekap->jawaban_pg);
            goto OESmy;
            RLV2q:
            $rekap->soal_isian = json_decode(json_encode(unserialize($rekap->soal_isian)));
            goto KVtMb;
            cIphL:
        }
        goto VzPXr;
        FceLq:
        $arrSiswa = [];
        goto FZbyk;
        lGBU6:
        p0f2r:
        goto J0gVq;
        uQ4pq:
        $rekaps = $this->cbt->getAllNilaiRekapByJenis($tahun, $smt, $jenis, $kelas, $mapel, null, $guru->id_guru);
        goto lZUNA;
        jSpvJ:
        $rekaps = $this->cbt->getAllNilaiRekapByJenis($tahun, $smt, $jenis, $kelas, $mapel);
        goto ZgQIU;
        B3G04:
        $jenis = $this->input->get("\x6a\145\x6e\x69\163");
        goto kkpKg;
        FZbyk:
        if (!(count($rekaps) > 0)) {
            goto p0f2r;
        }
        goto tNdFA;
        kkpKg:
        $tahun = $this->input->get("\x74\141\x68\x75\156");
        goto RnbnE;
        a5_pu:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tpg->id_tp, $smtg->id_smt);
        goto Ctyly;
        cJZ0E:
        a_23q:
        goto uQ4pq;
        gyU33:
        t4Egf:
        goto jSpvJ;
        vG47y:
        nF0ug:
        goto KRIE8;
        mEgNe:
        foreach ($rekaps as $key => $item) {
            $arrNilai[$item->id_siswa][$item->id_mapel] = $item;
            yq5wQ:
        }
        goto LTlCF;
        Ctyly:
        $jadwals = $this->cbt->getAllRekapByJenis($tahun, $smt, $jenis, $level->level_id, $mapel, null, $guru->id_guru);
        goto MjpaX;
        J2CT6:
        $data["\156\x69\x6c\x61\151"] = $arrNilai;
        goto eUWA_;
        j39Os:
    }
    public function olahNilai()
    {
        goto pzh4V;
        kneoO:
        $smt = $this->dashboard->getSemesterActive();
        goto qf2F3;
        NZKMe:
        if (!($ya != null)) {
            goto wrtzc;
        }
        goto MGuD4;
        Qo1Jf:
        $data["\160\x72\x6f\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto zhmz0;
        mgdDA:
        $xb = $this->input->get("\170\142");
        goto NZKMe;
        SSUUe:
        $data["\153\x65\x6c\141\x73\137\x73\145\x6c\x65\x63\164\145\144"] = $kelas;
        goto gSeiB;
        X10RF:
        BdDMK:
        goto SNPXB;
        dHnjM:
        $rekap->soal_kompleks = json_decode(json_encode(unserialize($rekap->soal_kompleks)));
        goto ddwhf;
        gSeiB:
        $data["\152\x61\144\x77\x61\x6c\137\163\x65\154\145\x63\164\x65\144"] = $jadwal;
        goto xD34I;
        R8Ear:
        wrtzc:
        goto CXeGh;
        wO2NP:
        if ($this->ion_auth->is_admin()) {
            goto yYBxV;
        }
        goto HaCNj;
        Vi0Qc:
        foreach ($siswas as $siswa) {
            goto rbouT;
            wpAmV:
            $siswa->soal_jodohkan = json_decode(json_encode(unserialize($siswa->soal_jodohkan)));
            goto q0Lw_;
            rbouT:
            $siswa->jawaban_pg = $this->unserialize_with_key($siswa->jawaban_pg);
            goto UkrnG;
            q0Lw_:
            $siswa->soal_isian = json_decode(json_encode(unserialize($siswa->soal_isian)));
            goto hgagT;
            tqshK:
            GAJze:
            goto QK3tM;
            hgagT:
            $siswa->soal_essai = json_decode(json_encode(unserialize($siswa->soal_essai)));
            goto tqshK;
            UkrnG:
            $siswa->soal_kompleks = json_decode(json_encode(unserialize($siswa->soal_kompleks)));
            goto wpAmV;
            QK3tM:
        }
        goto oKxdU;
        G__Es:
        $this->load->view("\x63\142\x74\x2f\162\145\x6b\141\160\x2f\x6f\x6c\141\x68");
        goto rp_Zt;
        r0d4I:
        $data = ["\165\x73\x65\x72" => $user, "\x6a\x75\x64\165\x6c" => "\105\x6b\x73\x70\157\x72\x20\x48\141\x73\151\154\x20\123\151\x73\x77\x61", "\163\x75\142\x6a\x75\x64\x75\x6c" => "\105\x6b\163\x70\157\162\x20\110\141\163\151\x6c\x20\x53\151\x73\167\x61", "\163\x65\164\164\151\x6e\x67" => $this->dashboard->getSetting()];
        goto ikHHS;
        cppdH:
        $data["\x6d\x61\x70\x65\154"] = $rekap->id_mapel;
        goto X7HbI;
        uHRQT:
        $rekap->soal_essai = json_decode(json_encode(unserialize($rekap->soal_essai)));
        goto AE2_q;
        rp_Zt:
        $this->load->view("\x6d\x65\155\142\x65\x72\x73\57\x67\x75\162\x75\x2f\164\x65\155\160\154\141\x74\x65\163\x2f\x66\157\157\x74\145\x72");
        goto i19wh;
        M61yf:
        if (!($rekap != null)) {
            goto Exj5J;
        }
        goto vxQ8Y;
        osprx:
        $siswas = $this->cbt->getAllNilaiRekapByJenis($rekap->tp, $rekap->smt, $rekap->kode_jenis, $kelas, "\x30", $jadwal, $guru->id_guru);
        goto Vi0Qc;
        NinB8:
        $this->load->view("\137\164\145\x6d\160\x6c\x61\164\x65\x73\x2f\144\x61\x73\x68\142\157\141\x72\144\x2f\137\146\157\157\x74\145\162");
        goto iIOPU;
        pzh4V:
        $kelas = $this->input->get("\x6b\145\154\141\163");
        goto rnQnk;
        ICWTT:
        $data["\x67\165\162\x75"] = $guru;
        goto qeGXP;
        ZBlrh:
        $yb = $this->input->get("\x79\x62");
        goto e0K08;
        Cox8b:
        $jadwal = $this->input->get("\x6a\x61\x64\x77\x61\154");
        goto FlK2K;
        b4Q80:
        $data["\x73\x6d\x74\x5f\x61\x63\x74\151\166\x65"] = $smt;
        goto SSUUe;
        EEhZZ:
        $xa = $this->input->get("\x78\141");
        goto Sf08N;
        oKxdU:
        iczUR:
        goto VTwJm;
        hX4xN:
        Exj5J:
        goto wO2NP;
        AccCj:
        $this->load->view("\x5f\x74\x65\155\160\x6c\141\x74\x65\163\57\x64\141\163\150\x62\157\x61\x72\144\57\x5f\150\145\141\144\x65\162", $data);
        goto E0BBC;
        qeGXP:
        if (!($kelas != null)) {
            goto lUlAf;
        }
        goto osprx;
        X1ecJ:
        $yb = $this->input->get("\x79\142");
        goto EEhZZ;
        XhEde:
        $convert = ["\x79\x61" => $ya, "\x79\x62" => $yb, "\x78\141" => $xa, "\x78\142" => $xb];
        goto LbUky;
        Sf08N:
        $xb = $this->input->get("\x78\142");
        goto Vf2Ix;
        X7HbI:
        $data["\x6e\141\x6d\141\x5f\x6b\x65\x6c\141\x73"] = $kelas == null ? "\123\151\x6c\x61\x68\153\141\x6e\40\160\151\x6c\151\x68\x20\x6b\x65\x6c\141\163" : $kls[$kelas];
        goto hX4xN;
        jbTw0:
        $data["\143\157\156\x76\x65\162\164"] = $convert;
        goto R8Ear;
        CXeGh:
        AWNbW:
        goto Qo1Jf;
        AE2_q:
        $data["\x72\145\153\x61\x70"] = $rekap;
        goto cppdH;
        ddwhf:
        $rekap->soal_jodohkan = json_decode(json_encode(unserialize($rekap->soal_jodohkan)));
        goto E5VDS;
        DaKOP:
        $data["\164\x70\137\141\x63\164\x69\166\x65"] = $tp;
        goto JdQiH;
        VTwJm:
        $data["\163\151\163\167\x61\x73"] = $siswas;
        goto TkiAD;
        fTADe:
        $data["\x6b\145\154\141\x73"] = $kls;
        goto M61yf;
        mzlPk:
        yYBxV:
        goto uhDNo;
        FlK2K:
        $user = $this->ion_auth->user()->row();
        goto NcOu9;
        TkiAD:
        $ya = $this->input->get("\171\141");
        goto X1ecJ;
        ikHHS:
        $tp = $this->dashboard->getTahunActive();
        goto kneoO;
        HaCNj:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto ICWTT;
        LqDco:
        foreach ($siswas as $siswa) {
            goto kUiGk;
            zWOAL:
            $siswa->soal_jodohkan = json_decode(json_encode(unserialize($siswa->soal_jodohkan)));
            goto RPaSv;
            OqIeT:
            $siswa->soal_essai = json_decode(json_encode(unserialize($siswa->soal_essai)));
            goto jEypP;
            AQTEF:
            $siswa->soal_kompleks = json_decode(json_encode(unserialize($siswa->soal_kompleks)));
            goto zWOAL;
            kUiGk:
            $siswa->jawaban_pg = $this->unserialize_with_key($siswa->jawaban_pg);
            goto AQTEF;
            RPaSv:
            $siswa->soal_isian = json_decode(json_encode(unserialize($siswa->soal_isian)));
            goto OqIeT;
            jEypP:
            VWBQ2:
            goto HOyFu;
            HOyFu:
        }
        goto CfO1K;
        e0K08:
        $xa = $this->input->get("\170\x61");
        goto mgdDA;
        E5VDS:
        $rekap->soal_isian = json_decode(json_encode(unserialize($rekap->soal_isian)));
        goto uHRQT;
        rnQnk:
        $level = $this->master->getKelasById($kelas);
        goto Cox8b;
        akf3f:
        $data["\x6a\x61\144\167\x61\154"] = $this->dropdown->getAllJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru);
        goto nwcAX;
        iIOPU:
        JbzL0:
        goto JdFBQ;
        E0BBC:
        $this->load->view("\x63\x62\x74\57\x72\x65\x6b\x61\x70\x2f\x6f\x6c\141\150");
        goto NinB8;
        CfO1K:
        c7dyF:
        goto TtQUL;
        q5LLO:
        $siswas = $this->cbt->getAllNilaiRekapByJenis($rekap->tp, $rekap->smt, $rekap->kode_jenis, $kelas, "\x30", $jadwal);
        goto LqDco;
        SNPXB:
        lUlAf:
        goto akf3f;
        qf2F3:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto DaKOP;
        Vf2Ix:
        if (!($ya != null)) {
            goto BdDMK;
        }
        goto XhEde;
        EPKXJ:
        $ya = $this->input->get("\171\141");
        goto ZBlrh;
        TtQUL:
        $data["\163\151\163\167\141\163"] = $siswas;
        goto EPKXJ;
        zhmz0:
        $data["\152\141\144\x77\141\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt);
        goto AccCj;
        NcOu9:
        $rekap = $this->cbt->getRekapByJadwalKelas($jadwal);
        goto r0d4I;
        LbUky:
        $data["\143\x6f\156\166\145\x72\164"] = $convert;
        goto X10RF;
        MGuD4:
        $convert = ["\x79\x61" => $ya, "\171\142" => $yb, "\170\x61" => $xa, "\x78\x62" => $xb];
        goto jbTw0;
        xD34I:
        $kls = @unserialize($rekap->nama_kelas);
        goto fTADe;
        vxQ8Y:
        $rekap->jawaban_pg = $this->unserialize_with_key($rekap->jawaban_pg);
        goto dHnjM;
        i19wh:
        goto JbzL0;
        goto mzlPk;
        JdQiH:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto b4Q80;
        uhDNo:
        if (!($kelas != null)) {
            goto AWNbW;
        }
        goto q5LLO;
        nwcAX:
        $this->load->view("\155\145\x6d\x62\145\162\x73\57\147\165\162\x75\x2f\x74\x65\x6d\x70\154\x61\164\x65\163\57\150\145\x61\x64\x65\162", $data);
        goto G__Es;
        JdFBQ:
    }
    function unserialize_with_key($serialized)
    {
        goto X3G3H;
        X3G3H:
        $arr = unserialize($serialized);
        goto f3iZF;
        f3iZF:
        $result = [];
        goto Xc1im;
        B3zjA:
        return $result;
        goto LIG5H;
        AtuUZ:
        d8guY:
        goto B3zjA;
        Xc1im:
        foreach ($arr as $value) {
            $result[$value["\x6e\x6f\137\163\157\x61\x6c"]] = $value["\x6a\141\x77\141\142"];
            Rn2Ei:
        }
        goto AtuUZ;
        LIG5H:
    }
    public function export()
    {
        goto LkuaS;
        BGyUh:
        $data = ["\x75\x73\x65\162" => $user, "\x6a\165\144\165\x6c" => "\105\153\163\160\157\162\x20\x48\x61\x73\151\x6c\40\120\145\156\x69\x6c\141\151\141\x6e", "\x73\165\x62\x6a\x75\x64\165\154" => "\105\x6b\163\160\157\x72\40\x4e\x69\x6c\141\x69", "\x73\145\x74\x74\151\156\x67" => $this->dashboard->getSetting()];
        goto a_X_G;
        a_X_G:
        $tp = $this->master->getTahunActive();
        goto QE_WA;
        dmjIf:
        $this->load->view("\x6d\x65\x6d\x62\145\x72\163\57\147\x75\x72\165\x2f\164\145\x6d\x70\154\141\164\x65\163\57\x66\x6f\157\164\x65\x72");
        goto u6Csw;
        d8x3G:
        $this->load->view("\x5f\164\x65\x6d\160\x6c\x61\x74\x65\x73\x2f\144\141\163\150\142\157\x61\162\x64\x2f\x5f\146\x6f\157\x74\145\x72");
        goto T1j0f;
        ueFjF:
        $data["\163\155\164\137\x61\143\164\x69\x76\x65"] = $smt;
        goto OiHuM;
        CcDvG:
        $this->load->view("\155\145\x6d\x62\x65\162\163\57\x67\165\162\165\x2f\164\145\155\x70\154\141\x74\145\x73\57\150\x65\141\x64\x65\x72", $data);
        goto q0LBV;
        yUVQP:
        $this->load->view("\137\x74\145\x6d\x70\154\141\164\145\x73\x2f\144\141\x73\150\142\x6f\141\x72\x64\57\137\x68\145\x61\x64\x65\x72", $data);
        goto OXVEK;
        diB1b:
        $data["\x72\145\x6b\141\160\x73"] = $jadwals;
        goto xDrB6;
        AHF0h:
        $data["\x67\165\162\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto CcDvG;
        zqUeS:
        $data["\162\145\153\x61\x70\163"] = $jadwals;
        goto AHF0h;
        u6Csw:
        goto Rdv9Q;
        goto YCK95;
        xDrB6:
        $data["\160\162\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto yUVQP;
        OeNRE:
        $jadwals = $this->cbt->getAllRekap($guru->id_guru);
        goto P8278;
        OiHuM:
        $data["\152\x65\156\x69\x73"] = $this->cbt->getDistinctJenisUjian();
        goto T_ANE;
        R0FJ9:
        foreach ($jadwals as $jadwal) {
            goto wdBsZ;
            wdBsZ:
            $jadwal->bank_kelas = unserialize($jadwal->bank_kelas);
            goto ygDAw;
            KITY0:
            ZaNXg:
            goto QIhF1;
            ygDAw:
            $jadwal->nama_kelas = unserialize($jadwal->nama_kelas);
            goto KITY0;
            QIhF1:
        }
        goto cNKGo;
        EVgKr:
        if ($this->ion_auth->is_admin()) {
            goto dS_NL;
        }
        goto VqI82;
        xzsPc:
        $data["\x74\x61\x68\x75\x6e\x73"] = $this->cbt->getDistinctTahun();
        goto UqLHP;
        l91a4:
        $jadwals = $this->cbt->getAllRekap();
        goto R0FJ9;
        YCK95:
        dS_NL:
        goto l91a4;
        yohxz:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto ueFjF;
        cNKGo:
        z9KlH:
        goto diB1b;
        P8278:
        foreach ($jadwals as $key => $jadwal) {
            goto URF3U;
            URF3U:
            $jadwal->bank_kelas = unserialize($jadwal->bank_kelas);
            goto Bllhw;
            Mdl1N:
            tZntJ:
            goto WwUk1;
            Bllhw:
            $jadwal->nama_kelas = unserialize($jadwal->nama_kelas);
            goto Mdl1N;
            WwUk1:
        }
        goto yQmlI;
        VqI82:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto OeNRE;
        QE_WA:
        $smt = $this->master->getSemesterActive();
        goto OCYcE;
        OXVEK:
        $this->load->view("\143\142\x74\x2f\162\x65\153\141\160\57\x65\x6b\163\160\157\x72");
        goto d8x3G;
        T_ANE:
        $data["\153\145\x6c\141\163"] = $this->cbt->getDistinctKelas();
        goto xzsPc;
        T1j0f:
        Rdv9Q:
        goto znRT0;
        yQmlI:
        Hvepf:
        goto zqUeS;
        q4phX:
        $data["\164\160\137\141\143\x74\151\x76\x65"] = $tp;
        goto yohxz;
        UqLHP:
        $data["\x73\x65\155\145\163\x74\145\x72"] = $this->cbt->getDistinctSmt();
        goto EVgKr;
        q0LBV:
        $this->load->view("\143\x62\164\57\162\x65\153\x61\160\x2f\145\153\163\160\x6f\x72");
        goto dmjIf;
        OCYcE:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto q4phX;
        LkuaS:
        $user = $this->ion_auth->user()->row();
        goto BGyUh;
        znRT0:
    }
    public function generateNilaiUjian($jadwal)
    {
        goto Ml1NA;
        XU7x3:
        $bagi_jodoh = $info->tampil_jodohkan / 100;
        goto MPsTU;
        yOMg3:
        $bobot_isian = $info->bobot_isian / 100;
        goto b0Br2;
        j2NsN:
        $jawabans = $this->cbt->getJawabanByBank($info->id_bank);
        goto ttgBn;
        aj2cx:
        foreach ($siswas as $siswa) {
            goto y6JAX;
            bn6TY:
            $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\x35"] : [];
            goto vdjcu;
            lAet6:
            $input_is = 0;
            goto UpBN4;
            lBQwB:
            $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal, $siswa->id_siswa);
            goto S60Ds;
            oGdIO:
            x8i6Q:
            goto sGQtF;
            wYvcM:
            if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) {
                goto H_3Je;
            }
            goto jbUhc;
            aWWUj:
            $benar_is = 0;
            goto hDYmH;
            n3lEE:
            J8tGr:
            goto CIsP3;
            iwKwh:
            QIRtm:
            goto kO0nH;
            My4GH:
            $skor_koreksi_pg2 = 0.0;
            goto lwTdi;
            dMH4t:
            $insert["\160\x67\x5f\156\151\x6c\141\x69"] = round($skor_pg, 2);
            goto GFq91;
            irNsX:
            $input_is = $nilai_input->isian_nilai;
            goto oGdIO;
            BcCoK:
            $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\63"]);
            goto SiKoZ;
            jbUhc:
            $input_pg2 = $nilai_input->kompleks_nilai;
            goto uL6Do;
            f8XuZ:
            $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian;
            goto lAet6;
            UpBN4:
            if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
                goto x8i6Q;
            }
            goto irNsX;
            GoTDJ:
            if (!($info->tampil_esai > 0)) {
                goto Q0wYQ;
            }
            goto FKe9s;
            saZaD:
            if (!(count($jawaban_pg2) > 0)) {
                goto zi7W0;
            }
            goto zdMxK;
            oVl2Z:
            if (!($info->tampil_isian > 0)) {
                goto SvYxq;
            }
            goto ZzUi2;
            lW1tq:
            if (!($info->tampil_kompleks > 0)) {
                goto jGC8p;
            }
            goto saZaD;
            uj140:
            $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh;
            goto XCg56;
            cIIXY:
            if (!($info->tampil_pg > 0)) {
                goto eDVl0;
            }
            goto FBN93;
            KK9Tz:
            pB7rd:
            goto e_nFk;
            anwc_:
            $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x31"]);
            goto aogXT;
            UEEow:
            $skor_koreksi_es = 0.0;
            goto a1THL;
            vdjcu:
            $benar_es = 0;
            goto UEEow;
            Abj6F:
            $input_es = $nilai_input->essai_nilai;
            goto n3lEE;
            hjYjm:
            $benar_pg2 = 0;
            goto My4GH;
            Lhf72:
            $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\x31"] : [];
            goto OBOVf;
            j1Isv:
            foreach ($jawaban_jodoh as $num => $jawab_jod) {
                goto zEFQV;
                OTyns:
                RIX1b:
                goto ACp3Q;
                X3x7E:
                foreach ($arrSoal as $kolSoal) {
                    goto LQrUg;
                    ZSR04:
                    $jwb->title = array_shift($kolSoal);
                    goto K2hvk;
                    ZLl0W:
                    xZ3IZ:
                    goto ZSR04;
                    lhRLs:
                    W0cwf:
                    goto cCWrs;
                    LQrUg:
                    $jwb = new stdClass();
                    goto r59L_;
                    K2hvk:
                    array_push($arrJwbSoal, $jwb);
                    goto lhRLs;
                    r59L_:
                    foreach ($kolSoal as $pos => $kol) {
                        goto e1Emp;
                        FXyfe:
                        PLP64:
                        goto qLTBe;
                        S3nzc:
                        $items++;
                        goto FXyfe;
                        SfJn6:
                        $jwb->subtitle[] = $headSoal[$pos];
                        goto S3nzc;
                        qLTBe:
                        s5ffQ:
                        goto k9OSv;
                        e1Emp:
                        if (!($kol == "\x31")) {
                            goto PLP64;
                        }
                        goto SfJn6;
                        k9OSv:
                    }
                    goto ZLl0W;
                    cCWrs:
                }
                goto OTyns;
                zEFQV:
                $skor_koreksi_jod += $jawab_jod->nilai_koreksi;
                goto OOQ1A;
                Vkanf:
                $headSoal = array_shift($arrSoal);
                goto nyW9E;
                xyRJg:
                $item_salah = 0;
                goto Ac0YO;
                d6ZeO:
                $otomatis_jod = $jawab_jod->nilai_otomatis;
                goto Vkmn6;
                Vkmn6:
                Cdnrw:
                goto BI349;
                OOQ1A:
                $arrSoal = $jawab_jod->jawaban->jawaban;
                goto Vkanf;
                UZdwo:
                p577y:
                goto m2bVo;
                TaxmS:
                $benar_jod += 1 / $items * $item_benar;
                goto d6ZeO;
                lFhfU:
                phcJk:
                goto TaxmS;
                Farg3:
                $items = 0;
                goto X3x7E;
                Ac0YO:
                foreach ($arrJwbJawab as $p => $ajjs) {
                    goto a60VI;
                    e2JFH:
                    V37Jl:
                    goto c1MYf;
                    RNNdc:
                    VYysT:
                    goto hETDe;
                    c1MYf:
                    G8C6O:
                    goto RNNdc;
                    a60VI:
                    if (!(isset($ajjs->subtitle) && count($ajjs->subtitle) > 0)) {
                        goto G8C6O;
                    }
                    goto hzLun;
                    hzLun:
                    foreach ($ajjs->subtitle as $pp => $ajs) {
                        goto FZ2HX;
                        xQE4D:
                        $item_benar++;
                        goto H8uJ7;
                        FZ2HX:
                        if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) {
                            goto sOOxi;
                        }
                        goto Pxcxp;
                        Pxcxp:
                        $item_salah++;
                        goto L_9Pj;
                        H8uJ7:
                        DeShz:
                        goto xs9ig;
                        xs9ig:
                        mjtIu:
                        goto FvXC5;
                        Z0mmy:
                        sOOxi:
                        goto xQE4D;
                        L_9Pj:
                        goto DeShz;
                        goto Z0mmy;
                        FvXC5:
                    }
                    goto e2JFH;
                    hETDe:
                }
                goto lFhfU;
                XSymQ:
                foreach ($arrJawab as $kolJawab) {
                    goto BWMXi;
                    KMOxf:
                    array_push($arrJwbJawab, $jwbs);
                    goto jG2eR;
                    jG2eR:
                    gaRJ4:
                    goto OBq8W;
                    BWMXi:
                    $jwbs = new stdClass();
                    goto dsZNW;
                    oc9w6:
                    G4tb2:
                    goto KMOxf;
                    dsZNW:
                    foreach ($kolJawab as $po => $kol) {
                        goto r4_BP;
                        r4_BP:
                        if (!($kol == "\61")) {
                            goto C9Gw1;
                        }
                        goto kTM2S;
                        aMozL:
                        HyEQ1:
                        goto qhXDG;
                        mZaIy:
                        $jwbs->subtitle[] = $sub;
                        goto ZUjcz;
                        ZUjcz:
                        C9Gw1:
                        goto aMozL;
                        kTM2S:
                        $sub = $headJawab[$po];
                        goto mZaIy;
                        qhXDG:
                    }
                    goto oc9w6;
                    OBq8W:
                }
                goto UZdwo;
                m2bVo:
                $item_benar = 0;
                goto xyRJg;
                nyW9E:
                $arrJwbSoal = [];
                goto Farg3;
                FIyFt:
                $headJawab = array_shift($arrJawab);
                goto mhQ9C;
                ACp3Q:
                $arrJawab = $jawab_jod->jawaban_siswa->jawaban;
                goto FIyFt;
                mhQ9C:
                $arrJwbJawab = [];
                goto XSymQ;
                BI349:
            }
            goto Piv4P;
            TGj49:
            GKYVB:
            goto z3m80;
            I7K2H:
            $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg;
            goto P7gFW;
            sGQtF:
            $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is);
            goto bn6TY;
            WJs2c:
            $input_es = 0;
            goto qGhRz;
            aogXT:
            $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x32"]);
            goto BcCoK;
            lwTdi:
            $otomatis_pg2 = 0;
            goto lW1tq;
            ghwni:
            $input_pg2 = 0;
            goto wYvcM;
            ZzUi2:
            if (!(count($jawaban_is) > 0)) {
                goto pB7rd;
            }
            goto tmoPx;
            JEyiT:
            if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) {
                goto xsVpf;
            }
            goto BtOys;
            AWTsM:
            $insert["\x69\144\x5f\156\151\154\x61\151"] = $siswa->id_siswa . $jadwal;
            goto t8WFT;
            e_nFk:
            SvYxq:
            goto f8XuZ;
            XCg56:
            $input_jod = 0;
            goto JEyiT;
            SiKoZ:
            $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x34"]);
            goto D_1cl;
            a_O33:
            $salah_pg = 0;
            goto cIIXY;
            OBOVf:
            $benar_pg = 0;
            goto a_O33;
            VdaVy:
            $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2);
            goto oU_uF;
            FKe9s:
            if (!(count($jawaban_es) > 0)) {
                goto nQVbE;
            }
            goto R7CMm;
            a1THL:
            $otomatis_es = 0;
            goto GoTDJ;
            I2onS:
            d7GmR:
            goto Gx2xy;
            GFq91:
            $insert["\x6b\157\155\160\x6c\145\x6b\x73\137\156\151\154\x61\151"] = round($skor_pg2, 2);
            goto CmW1q;
            cTI2d:
            $insert["\x70\x67\x5f\142\145\x6e\x61\x72"] = $benar_pg;
            goto dMH4t;
            P7gFW:
            $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\62"] : [];
            goto hjYjm;
            fqtgS:
            if (!($info->tampil_jodohkan > 0)) {
                goto i2zoZ;
            }
            goto Vy9n4;
            qB_rz:
            foreach ($jawaban_pg as $jwb_pg) {
                goto MdzSV;
                uLbq5:
                goto XZ70j;
                goto d_bpU;
                c4YNq:
                if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban)) {
                    goto XErf4;
                }
                goto xBUhx;
                DEDcj:
                XZ70j:
                goto CHqNp;
                xBUhx:
                $salah_pg += 1;
                goto uLbq5;
                d_bpU:
                XErf4:
                goto WyaR_;
                WyaR_:
                $benar_pg += 1;
                goto DEDcj;
                CHqNp:
                e22vn:
                goto Mzpkw;
                Mzpkw:
                biVwE:
                goto jXvpb;
                MdzSV:
                if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) {
                    goto e22vn;
                }
                goto c4YNq;
                jXvpb:
            }
            goto TGj49;
            t8WFT:
            $insert["\151\x64\137\163\151\163\167\141"] = $siswa->id_siswa;
            goto Rv3Tp;
            qGhRz:
            if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
                goto J8tGr;
            }
            goto Abj6F;
            FBN93:
            if (!(count($jawaban_pg) > 0)) {
                goto vF3Bb;
            }
            goto qB_rz;
            fBsz8:
            eDVl0:
            goto I7K2H;
            Vdpe2:
            BeclV:
            goto KK9Tz;
            MtK5D:
            jGC8p:
            goto J7dc0;
            BtOys:
            $input_jod = $nilai_input->jodohkan_nilai;
            goto s92Rx;
            s92Rx:
            xsVpf:
            goto mdyxM;
            WvKOc:
            $otomatis_is = 0;
            goto oVl2Z;
            JpTbg:
            zi7W0:
            goto MtK5D;
            c3z1U:
            $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\x34"] : [];
            goto aWWUj;
            Vy9n4:
            if (!(count($jawaban_jodoh) > 0)) {
                goto QIRtm;
            }
            goto j1Isv;
            Rv3Tp:
            $insert["\151\144\137\152\141\x64\x77\141\x6c"] = $jadwal;
            goto cTI2d;
            zd1w6:
            nQVbE:
            goto AYLqj;
            BtKwb:
            $skor_koreksi_jod = 0.0;
            goto ltKEQ;
            n1HbO:
            uryFX:
            goto JpTbg;
            CIsP3:
            $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es);
            goto AWTsM;
            z3m80:
            vF3Bb:
            goto fBsz8;
            ltKEQ:
            $otomatis_jod = 0;
            goto fqtgS;
            S60Ds:
            if (!($nilai_input != null && $nilai_input->dikoreksi == "\x31")) {
                goto d7GmR;
            }
            goto Lhf72;
            CmW1q:
            $insert["\x6a\x6f\144\157\150\153\141\156\137\x6e\x69\154\x61\x69"] = round($skor_jod, 2);
            goto d9iQR;
            uL6Do:
            H_3Je:
            goto VdaVy;
            tmoPx:
            foreach ($jawaban_is as $num => $jawab_is) {
                goto mVPdp;
                QzOue:
                $otomatis_is = $jawab_is->nilai_otomatis;
                goto v8UO8;
                XzQRR:
                iTuBD:
                goto QzOue;
                CpezZ:
                $benar_is++;
                goto XzQRR;
                v8UO8:
                azIZK:
                goto sWiKv;
                jkZGm:
                $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban);
                goto J3aLw;
                mVPdp:
                $skor_koreksi_is += $jawab_is->nilai_koreksi;
                goto jkZGm;
                J3aLw:
                if (!$benar) {
                    goto iTuBD;
                }
                goto CpezZ;
                sWiKv:
            }
            goto Vdpe2;
            hDYmH:
            $skor_koreksi_is = 0.0;
            goto WvKOc;
            dQGMS:
            $benar_jod = 0;
            goto BtKwb;
            JbtCq:
            $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai;
            goto WJs2c;
            Gx2xy:
            tA1ny:
            goto aPthV;
            Piv4P:
            HaOEl:
            goto iwKwh;
            D_1cl:
            $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x35"]);
            goto lBQwB;
            mdyxM:
            $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod);
            goto c3z1U;
            AYLqj:
            Q0wYQ:
            goto JbtCq;
            d9iQR:
            $insert["\151\163\151\x61\x6e\x5f\156\x69\x6c\x61\x69"] = round($skor_is, 2);
            goto WFl94;
            dLglJ:
            array_push($insets, $insert);
            goto I2onS;
            kO0nH:
            i2zoZ:
            goto uj140;
            y6JAX:
            $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]);
            goto anwc_;
            WFl94:
            $insert["\145\x73\163\141\151\x5f\156\x69\x6c\x61\151"] = round($skor_es, 2);
            goto dLglJ;
            bPOq0:
            rp9mt:
            goto zd1w6;
            oU_uF:
            $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\x33"] : [];
            goto dQGMS;
            J7dc0:
            $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2;
            goto ghwni;
            R7CMm:
            foreach ($jawaban_es as $num => $jawab_es) {
                goto HmhsP;
                HmhsP:
                $skor_koreksi_es += $jawab_es->nilai_koreksi;
                goto XbvIJ;
                c0Bsa:
                rUYOt:
                goto MaYpu;
                nAK6j:
                if (!$benar) {
                    goto rUYOt;
                }
                goto aJrbh;
                anXzH:
                pOQly:
                goto RdUEN;
                XbvIJ:
                $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban);
                goto nAK6j;
                MaYpu:
                $otomatis_es = $jawab_es->nilai_otomatis;
                goto anXzH;
                aJrbh:
                $benar_es++;
                goto c0Bsa;
                RdUEN:
            }
            goto bPOq0;
            zdMxK:
            foreach ($jawaban_pg2 as $num => $jawab_pg2) {
                goto nrGQk;
                W8I6E:
                $benar_pg2 += 1 / count($jawab_pg2->jawaban) * count($arr_benar);
                goto ytX59;
                nrGQk:
                $otomatis_pg2 = $jawab_pg2->nilai_otomatis;
                goto MzKpz;
                wpZOj:
                $arr_benar = [];
                goto kBUyW;
                ytX59:
                gasQW:
                goto wgLBG;
                MzKpz:
                $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi;
                goto wpZOj;
                kBUyW:
                foreach ($jawab_pg2->jawaban_siswa as $js) {
                    goto LMzS8;
                    l7IIo:
                    d93Y3:
                    goto y3dom;
                    Airdi:
                    array_push($arr_benar, true);
                    goto WH1sE;
                    LMzS8:
                    if (!in_array($js, $jawab_pg2->jawaban)) {
                        goto NQJDn;
                    }
                    goto Airdi;
                    WH1sE:
                    NQJDn:
                    goto l7IIo;
                    y3dom:
                }
                goto CeAKX;
                CeAKX:
                HF21J:
                goto W8I6E;
                wgLBG:
            }
            goto n1HbO;
            aPthV:
        }
        goto t47lp;
        ttgBn:
        $soal = [];
        goto MB5G0;
        YJ3Mn:
        $bobot_pg = $info->bobot_pg / 100;
        goto a2Vzn;
        zJbtn:
        foreach ($jawabans as $jawaban_siswa) {
            goto Auanb;
            nbtnA:
            $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa));
            goto m6lpM;
            a1W8p:
            $jawaban_siswa->jawaban = @unserialize($jawaban_siswa->jawaban);
            goto nbtnA;
            eJ26O:
            $jawaban_siswa->jawaban_benar = array_map("\163\x74\162\164\157\x75\160\x70\x65\162", $jawaban_siswa->jawaban_benar);
            goto gCVWu;
            kyU_u:
            $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a);
            goto ls_u3;
            sfHA1:
            $jawaban_siswa->jawaban = array_filter($jawaban_siswa->jawaban, "\163\164\x72\x6c\x65\156");
            goto sssCk;
            Gphnw:
            $jawaban_siswa->jawaban = json_decode(json_encode($jawaban_siswa->jawaban));
            goto LNdsy;
            AFR_e:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto TUfLf;
            ViYdo:
            ojhoA:
            goto rMmWW;
            gCVWu:
            $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\x73\164\x72\154\145\x6e");
            goto lzjBF;
            V92H8:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto a1W8p;
            lzjBF:
            $jawaban_siswa->jawaban = array_map("\x73\164\x72\164\157\165\x70\160\145\162", $jawaban_siswa->jawaban);
            goto sfHA1;
            sssCk:
            ZbNZ9:
            goto acIm2;
            Auanb:
            if (!($jawaban_siswa->jawaban_siswa != null)) {
                goto ojhoA;
            }
            goto YP3OQ;
            eOmGJ:
            $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto ViYdo;
            TUfLf:
            $jawaban_siswa->jawaban = @unserialize($jawaban_siswa->jawaban);
            goto eJ26O;
            m6lpM:
            $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar));
            goto Gphnw;
            YP3OQ:
            if (!($jawaban_siswa->jenis_soal == "\x32")) {
                goto ZbNZ9;
            }
            goto kyU_u;
            mypfv:
            $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto eOmGJ;
            ls_u3:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto AFR_e;
            Uj9Dz:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto V92H8;
            acIm2:
            if (!($jawaban_siswa->jenis_soal == "\63")) {
                goto QMoWr;
            }
            goto Uj9Dz;
            LNdsy:
            QMoWr:
            goto mypfv;
            rMmWW:
            FWFjz:
            goto Fa7uu;
            Fa7uu:
        }
        goto jycTB;
        t47lp:
        PVGUf:
        goto ENslw;
        WVHPt:
        return $update;
        goto VLw_g;
        Ml1NA:
        $info = $this->cbt->getJadwalById($jadwal);
        goto w2E53;
        b0Br2:
        $bagi_essai = $info->tampil_esai / 100;
        goto cVO_3;
        tmVYy:
        W0161:
        goto qmD1p;
        iO7mz:
        $kelases = [];
        goto zwq0I;
        MPsTU:
        $bobot_jodoh = $info->bobot_jodohkan / 100;
        goto ByFpX;
        nBtJ2:
        $update = true;
        goto lj02y;
        w2E53:
        $bagi_pg = $info->tampil_pg / 100;
        goto YJ3Mn;
        ByFpX:
        $bagi_isian = $info->tampil_isian / 100;
        goto yOMg3;
        f7sVc:
        $siswas = $this->cbt->getSiswaByKelas($info->id_tp, $info->id_smt, $kelases);
        goto j2NsN;
        GKZ6d:
        goto rnMUD;
        goto tmVYy;
        zwq0I:
        foreach ($kelas_bank as $key => $value) {
            array_push($kelases, $value["\x6b\145\x6c\141\x73\137\151\144"]);
            oe1fj:
        }
        goto r4D4T;
        qmD1p:
        $this->db->update_batch("\143\142\164\x5f\x6e\151\x6c\x61\x69", $insets, "\x69\x64\137\156\151\154\141\151");
        goto nBtJ2;
        MB5G0:
        $jawabans_siswa = [];
        goto zJbtn;
        KBSoV:
        $update = false;
        goto GKZ6d;
        lj02y:
        rnMUD:
        goto WVHPt;
        cVO_3:
        $bobot_essai = $info->bobot_esai / 100;
        goto tXA26;
        iHwn6:
        $bobot_pg2 = $info->bobot_kompleks / 100;
        goto XU7x3;
        ENslw:
        if (count($insets) > 0) {
            goto W0161;
        }
        goto KBSoV;
        XmySo:
        $insets = [];
        goto aj2cx;
        tXA26:
        $kelas_bank = unserialize($info->bank_kelas);
        goto iO7mz;
        jycTB:
        nG6KC:
        goto XmySo;
        a2Vzn:
        $bagi_pg2 = $info->tampil_kompleks / 100;
        goto iHwn6;
        r4D4T:
        PVW03:
        goto f7sVc;
        VLw_g:
    }
}
