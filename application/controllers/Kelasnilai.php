<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelasnilai extends CI_Controller
{
    public function __construct()
    {
        goto lp8ng;
        lp8ng:
        parent::__construct();
        goto Qyw2R;
        Ex9nw:
        M8SNb:
        goto nAlNl;
        l1gH8:
        Z02fK:
        goto maLBq;
        maLBq:
        goto M8SNb;
        goto JbLPa;
        YsxYX:
        $this->load->model("\x4d\x61\163\x74\x65\162\x5f\x6d\x6f\144\145\154", "\155\x61\163\164\x65\x72");
        goto N3Piz;
        rljTU:
        $this->load->model("\x44\162\157\160\x64\157\167\156\137\155\x6f\x64\145\154", "\x64\x72\x6f\160\x64\x6f\167\156");
        goto M5ikb;
        N3Piz:
        $this->load->model("\x44\x61\163\150\142\x6f\x61\x72\144\137\x6d\x6f\x64\x65\x6c", "\144\141\163\x68\x62\157\141\x72\144");
        goto rljTU;
        Qyw2R:
        if (!$this->ion_auth->logged_in()) {
            goto sbuY7;
        }
        goto VyXh1;
        B144k:
        redirect("\x61\x75\x74\150");
        goto Ex9nw;
        nAlNl:
        $this->load->library(["\x64\x61\x74\x61\x74\x61\142\x6c\x65\x73", "\x66\x6f\162\155\x5f\166\x61\154\x69\x64\141\x74\x69\x6f\156"]);
        goto YsxYX;
        VyXh1:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) {
            goto Z02fK;
        }
        goto xx7pF;
        M5ikb:
        $this->load->model("\x4b\x65\154\x61\x73\x5f\155\x6f\x64\145\x6c", "\x6b\x65\154\x61\x73");
        goto w3X0K;
        xx7pF:
        show_error("\x48\x61\156\x79\x61\40\101\144\155\151\x6e\151\x73\164\x72\141\164\157\x72\40\171\x61\156\x67\x20\x64\151\142\x65\162\x69\40\x68\141\x6b\40\165\x6e\x74\x75\x6b\x20\x6d\x65\156\x67\x61\153\163\x65\x73\40\150\x61\154\141\155\x61\156\40\151\156\x69\x2c\x20\x3c\141\x20\150\x72\145\146\75\42" . base_url("\x64\x61\163\x68\x62\x6f\141\x72\x64") . "\x22\x3e\x4b\145\x6d\x62\x61\x6c\151\x20\153\x65\x20\155\x65\x6e\165\x20\141\x77\141\x6c\x3c\57\141\76", 403, "\x41\153\163\145\163\x20\124\145\x72\x6c\141\x72\x61\x6e\x67");
        goto l1gH8;
        w3X0K:
        $this->form_validation->set_error_delimiters('', '');
        goto K27d8;
        JbLPa:
        sbuY7:
        goto B144k;
        K27d8:
    }
    public function output_json($data, $encode = true)
    {
        goto aWkOV;
        BwyAE:
        rLhN6:
        goto kTwUe;
        ehP0V:
        $data = json_encode($data);
        goto BwyAE;
        kTwUe:
        $this->output->set_content_type("\141\160\160\154\x69\143\141\164\x69\x6f\x6e\x2f\x6a\x73\157\156")->set_output($data);
        goto L_Z9G;
        aWkOV:
        if (!$encode) {
            goto rLhN6;
        }
        goto ehP0V;
        L_Z9G:
    }
    public function index()
    {
        goto Bn875;
        SDhI9:
        $data["\147\x75\x72\x75"] = $guru;
        goto EWl36;
        EWl36:
        $data["\x69\144\137\147\165\162\165"] = $guru->id_guru;
        goto XasTE;
        Dvw5g:
        u7AQy:
        goto PNOwF;
        Bk3U0:
        $tp = $this->dashboard->getTahunActive();
        goto aDMCt;
        kt_n7:
        $this->load->view("\137\164\x65\155\x70\x6c\x61\x74\145\163\x2f\x64\141\163\150\x62\157\141\x72\x64\57\137\x68\145\141\x64\145\162", $data);
        goto O30Ei;
        PpHJz:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto tuneT;
        kzOzB:
        $data["\160\x72\157\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto JtA2e;
        e9iZ2:
        Hrc40:
        goto UsQ5M;
        XWDV7:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto qBmCk;
        VgtkJ:
        if ($this->ion_auth->is_admin()) {
            goto Qnq11;
        }
        goto rIpNM;
        YqNxE:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto h04XS;
        nQzea:
        $data["\155\x61\x70\145\154"] = $arrMapel;
        goto D6Yku;
        iRKBX:
        BZA34:
        goto e9iZ2;
        KfivK:
        $data = ["\x75\163\145\x72" => $user, "\x6a\165\144\165\x6c" => "\122\x61\x6b\x61\x70\151\x74\165\x6c\x61\163\x69\40\116\151\x6c\x61\x69\x20\x53\151\x73\x77\141", "\x73\x75\x62\152\x75\144\x75\x6c" => "\x4e\151\x6c\x61\x69\40\144\x61\x6c\x61\155\40\163\x61\164\x75\40\163\145\155\145\x73\164\145\162", "\x73\x65\164\x74\151\x6e\147" => $this->dashboard->getSetting()];
        goto Bk3U0;
        Bn875:
        $user = $this->ion_auth->user()->row();
        goto KfivK;
        yMCcL:
        if (!($mapel != null)) {
            goto Hrc40;
        }
        goto O68CQ;
        p1ILn:
        $this->load->view("\x6b\x65\x6c\141\163\57\x6e\x69\154\x61\151\57\x64\x61\164\x61");
        goto vy0LV;
        iCmkH:
        $this->load->view("\155\x65\x6d\x62\x65\162\x73\57\147\165\162\x75\x2f\x74\x65\155\160\x6c\x61\164\145\x73\57\150\145\141\x64\145\x72", $data);
        goto p1ILn;
        aDMCt:
        $smt = $this->dashboard->getSemesterActive();
        goto PpHJz;
        XasTE:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto XWDV7;
        DdyFW:
        if (!($mapel != null)) {
            goto D0H66;
        }
        goto f27cL;
        syNSZ:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto SDhI9;
        pjzTn:
        D0H66:
        goto nQzea;
        rIpNM:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto syNSZ;
        qNu8P:
        $this->load->view("\x5f\164\x65\x6d\x70\154\141\164\145\x73\x2f\x64\x61\163\150\142\x6f\141\162\x64\57\137\x66\x6f\157\x74\145\162");
        goto Dvw5g;
        cygS6:
        $data["\153\145\154\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto kt_n7;
        kui04:
        $data["\x6b\x65\154\141\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : [];
        goto iCmkH;
        JtA2e:
        $data["\x6d\141\160\x65\154"] = $this->dropdown->getAllMapel();
        goto cygS6;
        UsQ5M:
        $arrId = [];
        goto DdyFW;
        f27cL:
        foreach ($mapel[0]->kelas_mapel as $id_mapel) {
            array_push($arrId, $id_mapel->kelas);
            MJxpA:
        }
        goto sfiwD;
        vy0LV:
        $this->load->view("\x6d\145\x6d\x62\145\x72\x73\57\147\x75\x72\165\57\164\x65\x6d\x70\x6c\141\164\145\x73\x2f\146\157\157\x74\x65\x72");
        goto AgS0J;
        O30Ei:
        $this->load->view("\x6b\x65\154\141\163\x2f\x6e\x69\x6c\141\151\x2f\x64\141\164\x61");
        goto qNu8P;
        O68CQ:
        foreach ($mapel as $m) {
            goto PpNLc;
            els9v:
            foreach ($m->kelas_mapel as $kls) {
                $arrKelas[$m->id_mapel][] = ["\151\144\137\x6b\x65\154\141\x73" => $kls->kelas, "\156\x61\155\141\137\153\x65\154\141\x73" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)];
                cqwZs:
            }
            goto ZZG_F;
            ZZG_F:
            xSJVT:
            goto L68aA;
            PpNLc:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto els9v;
            L68aA:
            LFics:
            goto JUzPC;
            JUzPC:
        }
        goto iRKBX;
        AgS0J:
        goto u7AQy;
        goto JsdXt;
        sfiwD:
        vx0Av:
        goto pjzTn;
        qBmCk:
        $arrMapel = [];
        goto Cu0_R;
        Cu0_R:
        $arrKelas = [];
        goto yMCcL;
        JsdXt:
        Qnq11:
        goto kzOzB;
        tuneT:
        $data["\x74\160\137\x61\143\164\x69\x76\x65"] = $tp;
        goto YqNxE;
        h04XS:
        $data["\163\x6d\x74\137\141\143\164\x69\x76\x65"] = $smt;
        goto VgtkJ;
        D6Yku:
        $data["\x61\162\x72\153\145\x6c\x61\x73"] = $arrKelas;
        goto kui04;
        PNOwF:
    }
    public function loadNilaiMapel()
    {
        goto vf0rF;
        Ah526:
        $log = [];
        goto irR89;
        AKmS0:
        $data["\155\x61\160\145\x6c\163"] = [];
        goto yxKie;
        deYuw:
        $jadwal_materi = [];
        goto O7LjH;
        duT0s:
        $arrBulan = ["\x30\x31", "\60\62", "\60\x33", "\60\x34", "\60\65", "\60\x36"];
        goto szA1l;
        M2hEv:
        foreach ($siswa as $s) {
            $log[$s->id_siswa] = ["\x6e\x61\x6d\x61" => $s->nama, "\x6e\151\163" => $s->nis, "\x6b\x65\x6c\141\163" => $s->nama_kelas, "\x6e\151\x6c\141\x69\137\x6d\x61\x74\145\x72\151" => isset($log_siswa[1][$s->id_siswa]) ? $log_siswa[1][$s->id_siswa] : [], "\156\151\x6c\141\x69\137\164\x75\x67\141\163" => isset($log_siswa[2][$s->id_siswa]) ? $log_siswa[2][$s->id_siswa] : []];
            VhF9L:
        }
        goto psDQG;
        sQ6Hx:
        $data = ["\154\157\x67" => $log, "\155\x61\164\145\162\x69" => $jadwal_materi, "\x62\165\x6c\141\x6e\x73" => $arrBulan, "\x6d\x61\x70\145\154\x73" => $jadwal_per_bulan, "\x6e\151\x6c\x61\151" => $log_siswa, "\143\157\154\x73" => $cols];
        goto oXGdz;
        Wz5o2:
        qzhf0:
        goto MCCrC;
        tWroF:
        if ($smt == "\61") {
            goto N_kFl;
        }
        goto duT0s;
        KLsE2:
        $namaHari = ["\115\151\156\147\147\165", "\x53\145\156\x69\156", "\123\x65\154\141\x73\141", "\x52\x61\x62\x75", "\x4b\141\x6d\x69\163", "\112\x75\x6d\x61\164", "\123\x61\x62\164\x75"];
        goto P9qlE;
        P9qlE:
        $infos = $this->kelas->getJadwalMapelByMapel($kelas, $mapel, $tahun, $smt);
        goto UWiex;
        Ka44X:
        N_kFl:
        goto i0BKa;
        t3V7P:
        $tahun = $this->input->get("\x74\141\150\165\156");
        goto mvclI;
        irR89:
        if (count($siswa) > 0 && count($jadwal_per_bulan) > 0) {
            goto HzSLz;
        }
        goto AKmS0;
        mvclI:
        $smt = $this->input->get("\163\x6d\x74");
        goto blDN4;
        i0BKa:
        $arrBulan = ["\x30\x37", "\60\70", "\60\71", "\61\60", "\61\61", "\x31\x32"];
        goto Wz5o2;
        O7LjH:
        $log_materi = [];
        goto QTUvG;
        vf0rF:
        $kelas = $this->input->get("\x6b\x65\154\x61\163");
        goto PEdfN;
        IWRwQ:
        $this->output_json($data);
        goto qid3e;
        szA1l:
        goto qzhf0;
        goto Ka44X;
        MCCrC:
        $namaBulan = ['', "\112\x61\x6e\x75\141\162\x69", "\x46\145\x62\x72\x75\141\162\151", "\x4d\141\162\145\x74", "\101\x70\162\x69\x6c", "\x4d\145\151", "\x4a\165\156\x69", "\x4a\x75\x6c\151", "\x41\x67\x75\163\x74\x75\163", "\123\145\x70\x74\x65\x6d\142\145\x72", "\117\153\164\x6f\x62\145\162", "\116\x6f\160\145\155\142\x65\x72", "\x44\x65\x73\145\155\x62\145\162"];
        goto KLsE2;
        oXGdz:
        HG6ZJ:
        goto IWRwQ;
        KZQPA:
        HzSLz:
        goto M2hEv;
        RVjdz:
        LUURO:
        goto Ah526;
        blDN4:
        $stahun = $this->input->get("\x73\164\141\x68\165\x6e");
        goto Rhuxt;
        yxKie:
        goto HG6ZJ;
        goto KZQPA;
        oFDIT:
        $jadwal_per_bulan = [];
        goto deYuw;
        psDQG:
        B5zEB:
        goto sQ6Hx;
        UWiex:
        $log_siswa = $this->kelas->getRekapMateriSemester();
        goto oFDIT;
        PEdfN:
        $mapel = $this->input->get("\155\x61\160\145\154");
        goto t3V7P;
        QTUvG:
        $cols = 0;
        goto BYgZR;
        BYgZR:
        foreach ($arrBulan as $bulan) {
            goto OV8Il;
            FX3vl:
            QvVH8:
            goto ughWZ;
            QOjgq:
            rnD2d:
            goto FX3vl;
            OV8Il:
            foreach ($infos as $info) {
                goto Hh1wi;
                Hh1wi:
                $jadwal_per_bulan[$info->id_hari][$info->jam_ke] = $info;
                goto IObe4;
                g2UU7:
                foreach ($dates as $date) {
                    goto w0ZHf;
                    obaWo:
                    kQMjA:
                    goto Nose2;
                    f4dV2:
                    $cols++;
                    goto obaWo;
                    a3j1U:
                    $mtr = isset($jj[$mapel]) && isset($jj[$mapel][$info->jam_ke]) && isset($jj[$mapel][$info->jam_ke][1]) ? $jj[$mapel][$info->jam_ke][1] : null;
                    goto E4KS9;
                    RGWm4:
                    $t = $d[2];
                    goto ELDV6;
                    ELDV6:
                    $jj = $this->kelas->getAllMateriByTgl($kelas, $date, [$mapel]);
                    goto a3j1U;
                    V1wGu:
                    $jadwal_materi[$b][$t][$info->jam_ke][2] = $tgs;
                    goto f4dV2;
                    gaQ9B:
                    $b = $d[1];
                    goto RGWm4;
                    w0ZHf:
                    $d = explode("\55", $date);
                    goto gaQ9B;
                    E4KS9:
                    $tgs = isset($jj[$mapel]) && isset($jj[$mapel][$info->jam_ke]) && isset($jj[$mapel][$info->jam_ke][2]) ? $jj[$mapel][$info->jam_ke][2] : null;
                    goto ijt5U;
                    ijt5U:
                    $jadwal_materi[$b][$t][$info->jam_ke][1] = $mtr;
                    goto V1wGu;
                    Nose2:
                }
                goto oMZt_;
                RSxS0:
                KseEF:
                goto PciE1;
                KiTM1:
                $tgs = null;
                goto g2UU7;
                IObe4:
                $dates = $this->total_hari($info->id_hari, $bulan, $stahun);
                goto FIVyU;
                FIVyU:
                $mtr = null;
                goto KiTM1;
                oMZt_:
                LRBlR:
                goto RSxS0;
                PciE1:
            }
            goto QOjgq;
            ughWZ:
        }
        goto RVjdz;
        Rhuxt:
        $siswa = $this->kelas->getKelasSiswa($kelas, $tahun, $smt);
        goto tWroF;
        qid3e:
    }
    function total_hari($id_day, $bulan, $taun)
    {
        goto RdZy0;
        RJszd:
        $days++;
        goto oB8Cs;
        gyIKt:
        return $dates;
        goto TijV3;
        jW3_1:
        $i++;
        goto A0MMV;
        A0MMV:
        goto yRwzg;
        goto ySOny;
        p77Ij:
        $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun);
        goto B02_R;
        qClsJ:
        $i = 1;
        goto K7JSZ;
        BZGds:
        if (!($i < $total_days)) {
            goto ViXk2;
        }
        goto QqcJM;
        XuIUL:
        ly9q4:
        goto g3Xq8;
        ySOny:
        ViXk2:
        goto gyIKt;
        oB8Cs:
        array_push($dates, date("\x59\x2d\x6d\x2d\x64", strtotime($taun . "\55" . $bulan . "\x2d" . $i)));
        goto XuIUL;
        B02_R:
        $idday = $id_day == "\x37" ? 0 : $id_day;
        goto qClsJ;
        RdZy0:
        $days = 0;
        goto gHz37;
        QqcJM:
        if (!(date("\x4e", strtotime($taun . "\55" . $bulan . "\x2d" . $i)) == $idday)) {
            goto ly9q4;
        }
        goto RJszd;
        g3Xq8:
        t7pJM:
        goto jW3_1;
        K7JSZ:
        yRwzg:
        goto BZGds;
        gHz37:
        $dates = [];
        goto p77Ij;
        TijV3:
    }
}
