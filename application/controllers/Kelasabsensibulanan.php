<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelasabsensibulanan extends CI_Controller
{
    public function __construct()
    {
        goto kqNXR;
        vkvpX:
        qByk_:
        goto eDvWt;
        YogJi:
        redirect("\141\165\164\x68");
        goto H5s1e;
        H5s1e:
        i0g3C:
        goto r6Ufx;
        r6Ufx:
        $this->load->library(["\144\x61\164\x61\x74\x61\x62\x6c\145\x73", "\146\x6f\x72\155\137\x76\141\x6c\x69\144\141\164\x69\157\156"]);
        goto jclsB;
        xMmV0:
        if (!$this->ion_auth->logged_in()) {
            goto JTqT5;
        }
        goto v6jJo;
        eDvWt:
        goto i0g3C;
        goto iCnVv;
        jclsB:
        $this->load->model("\115\141\163\164\145\162\x5f\x6d\157\144\x65\x6c", "\155\x61\163\164\x65\162");
        goto BNnlv;
        v6jJo:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\x75"))) {
            goto qByk_;
        }
        goto uvWnX;
        loCkd:
        $this->form_validation->set_error_delimiters('', '');
        goto Mhf1Y;
        uvWnX:
        show_error("\110\x61\156\x79\141\40\101\x64\x6d\151\156\151\163\164\162\141\x74\157\162\40\171\x61\156\x67\x20\144\151\142\x65\162\x69\40\x68\x61\x6b\x20\165\156\x74\x75\x6b\40\x6d\145\x6e\147\141\153\163\x65\163\40\150\141\x6c\141\x6d\141\x6e\x20\151\156\151\x2c\x20\74\141\40\150\162\x65\146\75\x22" . base_url("\x64\x61\x73\x68\x62\157\x61\162\144") . "\x22\76\113\145\155\142\141\154\x69\x20\x6b\145\x20\155\x65\156\x75\x20\141\167\x61\x6c\x3c\x2f\x61\76", 403, "\x41\x6b\x73\x65\163\40\x44\x69\x62\141\x74\141\x73\x69");
        goto vkvpX;
        kqNXR:
        parent::__construct();
        goto xMmV0;
        qhjG0:
        $this->load->model("\113\x65\x6c\141\x73\137\x6d\x6f\144\x65\154", "\x6b\145\154\141\x73");
        goto loCkd;
        EHd7P:
        $this->load->model("\x44\162\x6f\160\x64\x6f\x77\x6e\x5f\x6d\x6f\144\145\x6c", "\x64\162\x6f\160\x64\157\167\x6e");
        goto qhjG0;
        iCnVv:
        JTqT5:
        goto YogJi;
        BNnlv:
        $this->load->model("\104\141\163\x68\142\x6f\x61\x72\x64\x5f\155\x6f\x64\145\154", "\144\141\x73\150\142\157\141\x72\x64");
        goto EHd7P;
        Mhf1Y:
    }
    public function output_json($data, $encode = true)
    {
        goto eE9hT;
        eE9hT:
        if (!$encode) {
            goto J6aTh;
        }
        goto yhq1W;
        yhq1W:
        $data = json_encode($data);
        goto ZKlh_;
        ZKlh_:
        J6aTh:
        goto AhDam;
        AhDam:
        $this->output->set_content_type("\x61\160\x70\x6c\151\x63\141\164\x69\157\156\x2f\152\x73\x6f\x6e")->set_output($data);
        goto yCVvH;
        yCVvH:
    }
    public function index()
    {
        goto pIbRp;
        cxezw:
        foreach ($mapel[0]->kelas_mapel as $id_mapel) {
            array_push($arrId, $id_mapel->kelas);
            wzKwf:
        }
        goto U3viV;
        tXV6x:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto VSgyB;
        mrmMO:
        $data["\x67\165\x72\165"] = $guru;
        goto LOCfk;
        gGxUC:
        $data["\153\145\154\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto ourme;
        MMqn9:
        $data["\x6d\141\160\x65\154"] = $arrMapel;
        goto vXxje;
        WPGyB:
        $data["\163\155\164\x5f\141\143\x74\x69\166\145"] = $smt;
        goto S4QIt;
        ZippM:
        R4UMu:
        goto NVtO9;
        CuvR7:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto B_Nsv;
        tNemx:
        $this->load->view("\155\145\155\x62\145\162\163\57\147\x75\x72\165\57\164\x65\x6d\x70\x6c\x61\164\x65\x73\x2f\x66\x6f\x6f\164\x65\x72");
        goto hgVKm;
        VHX2q:
        $arrId = [];
        goto SLsNn;
        lF8h8:
        $arrMapel = [];
        goto QaPA1;
        amP4u:
        $this->load->view("\x5f\x74\x65\155\x70\154\x61\x74\145\x73\57\144\141\x73\x68\x62\x6f\x61\162\144\x2f\x5f\x68\x65\x61\x64\145\x72", $data);
        goto R6YnN;
        VSgyB:
        $data["\164\160\137\x61\x63\x74\x69\x76\x65"] = $tp;
        goto S1ot4;
        eCs_J:
        SI73H:
        goto MMqn9;
        uYayT:
        $data = ["\165\x73\145\162" => $user, "\152\x75\144\x75\x6c" => "\104\x61\146\164\x61\x72\x20\x48\141\144\151\x72\40\102\x75\x6c\x61\156\x61\156", "\x73\x75\142\x6a\165\144\x75\154" => "\104\x61\x66\164\141\162\x20\x48\x61\x64\x69\162\40\102\x75\x6c\141\x6e\141\x6e\x20\123\151\163\x77\141", "\163\x65\x74\164\x69\x6e\147" => $this->dashboard->getSetting()];
        goto sL7Mp;
        X5Ffv:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto mrmMO;
        ourme:
        $data["\x67\x75\x72\x75"] = $this->dropdown->getAllGuru();
        goto ArMk5;
        N3WOa:
        $this->load->view("\x6d\145\x6d\x62\x65\162\x73\x2f\x67\165\162\x75\57\164\145\x6d\160\x6c\x61\164\x65\163\x2f\150\x65\x61\x64\x65\162", $data);
        goto ov8Pj;
        SLsNn:
        if (!($mapel != null)) {
            goto SI73H;
        }
        goto cxezw;
        hgVKm:
        goto r_KBl;
        goto z6OmP;
        IMk1X:
        if (!($mapel != null)) {
            goto hnh26;
        }
        goto ciulP;
        S1ot4:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto WPGyB;
        ov8Pj:
        $this->load->view("\x6b\145\154\141\x73\57\141\x62\163\145\x6e\142\x75\x6c\141\x6e\141\x6e\57\x64\x61\x74\x61");
        goto tNemx;
        B_Nsv:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto lF8h8;
        LOCfk:
        $data["\151\144\137\x67\165\x72\x75"] = $guru->id_guru;
        goto CuvR7;
        S4QIt:
        $data["\x62\x75\154\141\156"] = $this->dropdown->getBulan();
        goto wnblm;
        z6OmP:
        ZtSvG:
        goto dYPB9;
        ArMk5:
        $data["\155\x61\x70\x65\x6c"] = $this->dropdown->getAllMapel();
        goto amP4u;
        R6YnN:
        $this->load->view("\x6b\145\154\141\x73\57\141\142\163\x65\156\x62\165\154\141\x6e\x61\156\57\144\x61\164\141");
        goto cSMEw;
        NVtO9:
        hnh26:
        goto VHX2q;
        X16AL:
        r_KBl:
        goto rNOaw;
        hPLzU:
        $smt = $this->master->getSemesterActive();
        goto tXV6x;
        jTyZX:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto X5Ffv;
        ciulP:
        foreach ($mapel as $m) {
            goto BefTG;
            rsW6j:
            foreach ($m->kelas_mapel as $kls) {
                $arrKelas[$m->id_mapel][] = ["\151\x64\x5f\x6b\145\x6c\141\x73" => $kls->kelas, "\x6e\x61\x6d\x61\x5f\x6b\145\x6c\x61\163" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)];
                WJGr_:
            }
            goto rvEaS;
            ME018:
            sv3g7:
            goto nD2C5;
            rvEaS:
            qKJRD:
            goto ME018;
            BefTG:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto rsW6j;
            nD2C5:
        }
        goto ZippM;
        vXxje:
        $data["\141\x72\x72\x6b\145\x6c\x61\x73"] = $arrKelas;
        goto bkqh9;
        QaPA1:
        $arrKelas = [];
        goto IMk1X;
        dYPB9:
        $data["\160\162\x6f\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto gGxUC;
        pIbRp:
        $user = $this->ion_auth->user()->row();
        goto uYayT;
        U3viV:
        itIRx:
        goto eCs_J;
        bkqh9:
        $data["\153\x65\154\x61\163"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : [];
        goto N3WOa;
        wnblm:
        if ($this->ion_auth->is_admin()) {
            goto ZtSvG;
        }
        goto jTyZX;
        sL7Mp:
        $tp = $this->master->getTahunActive();
        goto hPLzU;
        cSMEw:
        $this->load->view("\x5f\x74\x65\155\x70\x6c\141\x74\145\163\57\x64\x61\x73\150\x62\157\x61\x72\144\57\x5f\146\x6f\157\164\145\x72");
        goto X16AL;
        rNOaw:
    }
    public function loadAbsensiMapel()
    {
        goto VyTxg;
        EQjp1:
        $i = 0;
        goto ihrWt;
        nVifg:
        $id_mapel = $this->input->post("\155\141\x70\145\154", true);
        goto AlAfU;
        IeRAq:
        AOGB0:
        goto s5194;
        OdkGj:
        $jadwal_materi[$t] = (array) $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\55" . $b . "\x2d" . $t, [$id_mapel]);
        goto CTINO;
        NMXiZ:
        $bulan = $this->input->post("\x62\x6c\x6e", true);
        goto kTqsf;
        XRBNY:
        foreach ($siswa as $s) {
            goto F3E0_;
            F3E0_:
            $arrMateri = [];
            goto C68S1;
            QL6Gi:
            $b = $bulan < 10 ? "\60" . $bulan : $bulan;
            goto dT_Co;
            MyY1D:
            Inj8G:
            goto HphTN;
            VCty8:
            $t = $i + 1 < 10 ? "\60" . ($i + 1) : $i + 1;
            goto QL6Gi;
            hDWEA:
            $arrMateri[2][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][2]) && isset($materi_perbulan[$s->id_siswa][2][$tahun . "\x2d" . $b . "\55" . $t]) ? $materi_perbulan[$s->id_siswa][2][$tahun . "\55" . $b . "\x2d" . $t] : null;
            goto YpcN1;
            YVRuM:
            goto Inj8G;
            goto w58Pg;
            HphTN:
            if (!($i < $tgl)) {
                goto FSldX;
            }
            goto VCty8;
            Ev1Ly:
            X23Tm:
            goto Mc4Tf;
            C6gas:
            $i++;
            goto YVRuM;
            YpcN1:
            smX3O:
            goto C6gas;
            D8Hg_:
            $log[$s->id_siswa] = ["\x6e\141\x6d\141" => $s->nama, "\156\x69\163" => $s->nis, "\x6b\145\x6c\141\163" => $s->nama_kelas, "\155\x61\164\x65\x72\x69" => $arrMateri[1], "\x74\165\147\141\163" => $arrMateri[2]];
            goto Ev1Ly;
            C68S1:
            $i = 0;
            goto MyY1D;
            w58Pg:
            FSldX:
            goto D8Hg_;
            dT_Co:
            $arrMateri[1][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][1]) && isset($materi_perbulan[$s->id_siswa][1][$tahun . "\55" . $b . "\x2d" . $t]) ? $materi_perbulan[$s->id_siswa][1][$tahun . "\x2d" . $b . "\55" . $t] : null;
            goto hDWEA;
            Mc4Tf:
        }
        goto tY2Ok;
        vTzIk:
        $tgl = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
        goto GvbVX;
        LTeKa:
        goto tBhYS;
        goto IeRAq;
        AZgWL:
        $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt);
        goto XRBNY;
        s5194:
        $materi_perbulan = $this->kelas->getRekapBulananSiswa($id_mapel, $id_kelas, $tahun, $bulan);
        goto B_Gkn;
        xCa1R:
        VeN3y:
        goto mXKq6;
        AlAfU:
        $tahun = $this->input->post("\x74\x68\156", true);
        goto NMXiZ;
        g6ySF:
        goto NGdt0;
        goto HGM9q;
        VyTxg:
        $id_kelas = $this->input->post("\153\145\x6c\141\x73", true);
        goto nVifg;
        hencE:
        $jadwal = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas);
        goto fGCpK;
        q45xp:
        $jadwal->istirahat = unserialize($jadwal->istirahat);
        goto vTzIk;
        CTINO:
        YDWCr:
        goto NjvIy;
        NjvIy:
        $i++;
        goto LTeKa;
        ou6Os:
        $t = $i + 1 < 10 ? "\x30" . ($i + 1) : $i + 1;
        goto RxwO8;
        Gwhon:
        $id_smt = $this->master->getSemesterActive()->id_smt;
        goto hencE;
        tY2Ok:
        xqtGY:
        goto A9tef;
        HGM9q:
        WXtS_:
        goto q45xp;
        RXDFD:
        foreach ($infos as $info) {
            goto W_bad;
            WZ_QS:
            r1pyF:
            goto QCayz;
            PHoSr:
            KgPRk:
            goto WZ_QS;
            W_bad:
            $dates = $this->total_hari($info->id_hari, $bulan, $tahun);
            goto ETK_d;
            ETK_d:
            foreach ($dates as $date) {
                goto X28B_;
                X28B_:
                $d = explode("\x2d", $date);
                goto jsNHZ;
                jsNHZ:
                $mapel_bulan_ini[$d[2]][$info->jam_ke] = $date;
                goto lGztl;
                lGztl:
                QQfWo:
                goto p1W2E;
                p1W2E:
            }
            goto PHoSr;
            QCayz:
        }
        goto xCa1R;
        fGCpK:
        if ($jadwal != null) {
            goto WXtS_;
        }
        goto zYq2N;
        mXKq6:
        $this->output_json(["\x6c\x6f\147" => $log, "\x6a\141\144\x77\x61\x6c" => $jadwal, "\x6d\141\x74\x65\x72\x69" => $jadwal_materi, "\x6d\x61\x70\x65\x6c\x73" => $mapel_bulan_ini]);
        goto iEOjg;
        lcJ7D:
        if (!($i < $tgl)) {
            goto AOGB0;
        }
        goto ou6Os;
        J1aS_:
        $infos = $this->kelas->getJadwalMapelByMapel($id_kelas, $id_mapel, $id_tp, $id_smt);
        goto RXDFD;
        RxwO8:
        $b = $bulan < 10 ? "\x30" . $bulan : $bulan;
        goto OdkGj;
        iEOjg:
        NGdt0:
        goto sPKmt;
        zYq2N:
        $this->output_json(["\152\141\144\167\x61\x6c" => $jadwal]);
        goto g6ySF;
        kTqsf:
        $id_tp = $this->master->getTahunActive()->id_tp;
        goto Gwhon;
        ihrWt:
        tBhYS:
        goto lcJ7D;
        GvbVX:
        $jadwal_materi = [];
        goto EQjp1;
        B_Gkn:
        $log = [];
        goto AZgWL;
        A9tef:
        $mapel_bulan_ini = [];
        goto J1aS_;
        sPKmt:
    }
    function total_hari($id_day, $bulan, $taun)
    {
        goto di_HG;
        Ke9Ip:
        array_push($dates, date("\131\x2d\155\x2d\x64", strtotime($taun . "\x2d" . $bulan . "\55" . $i)));
        goto qMpAB;
        qMpAB:
        fw8mG:
        goto UGuMk;
        Hnf31:
        $i++;
        goto DhomP;
        pn9B9:
        zjb9X:
        goto fuim2;
        IBqLR:
        return $dates;
        goto j4M0T;
        gx4Ip:
        $i = 1;
        goto pn9B9;
        UGuMk:
        L9vMe:
        goto Hnf31;
        di_HG:
        $days = 0;
        goto OTgVO;
        fuim2:
        if (!($i < $total_days)) {
            goto kblFo;
        }
        goto GTLRR;
        B078Y:
        kblFo:
        goto IBqLR;
        I40pv:
        $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun);
        goto d0yNm;
        GTLRR:
        if (!(date("\116", strtotime($taun . "\x2d" . $bulan . "\x2d" . $i)) == $idday)) {
            goto fw8mG;
        }
        goto zuFKJ;
        zuFKJ:
        $days++;
        goto Ke9Ip;
        DhomP:
        goto zjb9X;
        goto B078Y;
        OTgVO:
        $dates = [];
        goto I40pv;
        d0yNm:
        $idday = $id_day == "\x37" ? 0 : $id_day;
        goto gx4Ip;
        j4M0T:
    }
}
