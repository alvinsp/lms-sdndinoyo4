<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtstatus extends CI_Controller
{
    public function __construct()
    {
        goto QdX2n;
        qb5pL:
        goto gxaIE;
        goto iBFk1;
        za_nq:
        $this->load->model("\104\162\157\x70\144\x6f\167\156\137\x6d\x6f\x64\145\154", "\x64\x72\157\x70\x64\157\x77\156");
        goto za235;
        d8PGB:
        $this->load->model("\103\142\164\x5f\x6d\x6f\144\x65\154", "\143\x62\164");
        goto za_nq;
        QdX2n:
        parent::__construct();
        goto nOwQK;
        iAbl9:
        gxaIE:
        goto Hl6nu;
        dyCbu:
        show_error("\110\x61\x6e\x79\141\40\x41\x64\155\x69\156\151\x73\x74\x72\x61\x74\157\x72\x20\171\x61\x6e\x67\x20\144\x69\142\145\162\151\x20\x68\x61\153\40\x75\156\164\165\153\40\x6d\x65\x6e\x67\x61\153\x73\x65\x73\x20\x68\141\x6c\141\x6d\x61\x6e\x20\x69\x6e\151\x2c\40\x3c\x61\x20\150\162\145\146\x3d\x22" . base_url("\144\141\x73\x68\x62\x6f\x61\162\x64") . "\42\76\113\x65\155\142\141\x6c\x69\x20\153\x65\40\155\x65\156\165\x20\x61\167\x61\154\74\x2f\141\76", 403, "\101\x6b\163\145\x73\40\124\145\162\x6c\x61\162\141\156\x67");
        goto ro5NM;
        oKbFM:
        $this->load->model("\104\141\x73\150\142\x6f\141\x72\144\x5f\155\x6f\144\145\x6c", "\x64\x61\163\150\142\157\x61\x72\x64");
        goto d8PGB;
        za235:
        $this->form_validation->set_error_delimiters('', '');
        goto lNDF7;
        WGQ64:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\x75"))) {
            goto oItB3;
        }
        goto dyCbu;
        yzdAO:
        $this->load->model("\x4d\141\x73\164\x65\x72\x5f\x6d\157\x64\145\154", "\155\x61\x73\164\145\x72");
        goto oKbFM;
        nOwQK:
        if (!$this->ion_auth->logged_in()) {
            goto S4Nba;
        }
        goto WGQ64;
        Iw2uv:
        $this->load->library("\x75\x70\x6c\x6f\x61\144");
        goto yzdAO;
        iBFk1:
        S4Nba:
        goto v6IB0;
        v6IB0:
        redirect("\x61\x75\x74\x68");
        goto iAbl9;
        ro5NM:
        oItB3:
        goto qb5pL;
        Hl6nu:
        $this->load->library(["\x64\x61\164\141\164\x61\142\154\145\x73", "\x66\x6f\x72\155\x5f\x76\x61\154\151\144\141\x74\x69\x6f\x6e"]);
        goto Iw2uv;
        lNDF7:
    }
    public function output_json($data, $encode = true)
    {
        goto awN9v;
        s_Ykt:
        $this->output->set_content_type("\x61\160\160\x6c\151\143\141\164\151\x6f\156\x2f\x6a\163\157\156")->set_output($data);
        goto ZaxWF;
        awN9v:
        if (!$encode) {
            goto rHjg4;
        }
        goto y2Hrs;
        y2Hrs:
        $data = json_encode($data);
        goto eP_X0;
        eP_X0:
        rHjg4:
        goto s_Ykt;
        ZaxWF:
    }
    public function index()
    {
        goto UoSqz;
        Fc5wy:
        $this->load->view("\137\x74\x65\x6d\160\154\141\x74\x65\x73\x2f\144\x61\x73\x68\142\x6f\141\162\144\57\137\146\157\x6f\x74\145\162");
        goto DOClQ;
        jFqzx:
        $data["\164\160\137\x61\143\x74\151\166\x65"] = $tp;
        goto JEqXs;
        sbUUJ:
        $this->load->view("\x6d\x65\155\142\145\x72\x73\57\x67\165\x72\x75\x2f\164\x65\x6d\160\154\141\164\x65\x73\57\150\145\x61\x64\145\x72", $data);
        goto RerMm;
        Dtw1z:
        $tp = $this->dashboard->getTahunActive();
        goto iNhF9;
        DYEX1:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto y8ISi;
        o9rGG:
        if ($this->ion_auth->is_admin()) {
            goto d04vp;
        }
        goto DYEX1;
        g8zsE:
        $this->load->view("\x6d\x65\155\142\145\162\163\57\x67\165\x72\x75\57\164\145\x6d\160\154\x61\x74\x65\x73\x2f\146\x6f\157\x74\145\x72");
        goto TsTvS;
        aUE_9:
        $data["\162\165\x61\x6e\x67"] = $this->dropdown->getAllRuang();
        goto X1hVI;
        X1hVI:
        $data["\x73\x65\163\x69"] = $this->dropdown->getAllSesi();
        goto ABWQU;
        TsTvS:
        goto RY7I5;
        goto UMEXK;
        ZUK2B:
        foreach ($jadwals as $jad) {
            goto Tbm0S;
            nz1pf:
            pwUzA:
            goto BKCTh;
            Tbm0S:
            $kls = unserialize($jad->bank_kelas);
            goto HOvp0;
            HOvp0:
            foreach ($kls as $kl) {
                array_push($arrKls, $kl["\153\x65\154\141\x73\137\x69\144"]);
                N9NV9:
            }
            goto nz1pf;
            BKCTh:
            DwKu2:
            goto xdas9;
            xdas9:
        }
        goto mLtnC;
        nQMrT:
        $data["\x72\x75\x61\x6e\147\x73"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls);
        goto sbUUJ;
        W7T2C:
        $this->load->view("\143\142\164\57\163\164\141\x74\165\x73\x2f\144\141\x74\141");
        goto Fc5wy;
        VZSmn:
        $data["\x73\145\x73\x69"] = $this->dropdown->getAllSesi();
        goto Zpwqy;
        gHun3:
        $data["\x70\162\x6f\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto dGhrP;
        UMEXK:
        d04vp:
        goto gHun3;
        JEqXs:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto WrGLv;
        IxlO3:
        foreach ($jadwals as $jad) {
            goto vfz99;
            IvU3Q:
            Ave8y:
            goto FLhN2;
            f_f4M:
            foreach ($kls as $kl) {
                array_push($arrKls, $kl["\x6b\145\154\x61\x73\x5f\151\x64"]);
                BwgK3:
            }
            goto IvU3Q;
            vfz99:
            $kls = unserialize($jad->bank_kelas);
            goto f_f4M;
            FLhN2:
            a52bU:
            goto atMN3;
            atMN3:
        }
        goto xf6Zp;
        e5LSc:
        $data["\162\165\141\x6e\147"] = $this->dropdown->getAllRuang();
        goto VZSmn;
        iNhF9:
        $smt = $this->dashboard->getSemesterActive();
        goto zJhHs;
        mLtnC:
        nR65P:
        goto nQMrT;
        LRqV7:
        $jadwals = $this->cbt->getJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru);
        goto kjmtc;
        k5lHW:
        $this->load->view("\137\164\x65\155\160\154\141\164\x65\163\x2f\144\141\163\x68\142\157\x61\x72\x64\x2f\137\150\x65\141\144\145\x72", $data);
        goto W7T2C;
        dGhrP:
        $data["\x6a\141\144\x77\141\x6c"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt);
        goto e5LSc;
        ABWQU:
        $data["\160\145\x6e\147\141\x77\x61\163"] = $this->cbt->getPengawasByGuru($tp->id_tp, $smt->id_smt, $guru->id_guru);
        goto LRqV7;
        xf6Zp:
        kt9BS:
        goto e11KI;
        xx21b:
        $data = ["\x75\163\145\x72" => $user, "\152\165\144\165\154" => "\123\x74\141\x74\165\x73\x20\125\x6a\x69\x61\x6e\x20\x53\151\x73\167\141", "\x73\x75\142\152\x75\144\x75\154" => "\123\x74\141\164\165\x73\40\123\151\163\x77\141", "\x73\x65\x74\164\x69\x6e\147" => $this->dashboard->getSetting()];
        goto Dtw1z;
        y8ISi:
        $data["\147\x75\x72\x75"] = $guru;
        goto DjFr6;
        DjFr6:
        $data["\152\x61\x64\x77\141\154"] = $this->dropdown->getAllJadwalGuru($tp->id_tp, $smt->id_smt, $guru->id_guru);
        goto aUE_9;
        zJhHs:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto jFqzx;
        Zpwqy:
        $jadwals = $this->cbt->getJadwalKelas($tp->id_tp, $smt->id_smt);
        goto r4YfW;
        DOClQ:
        RY7I5:
        goto kU0xk;
        e11KI:
        $data["\162\x75\141\156\x67\x73"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls);
        goto k5lHW;
        kjmtc:
        $arrKls = [];
        goto ZUK2B;
        WrGLv:
        $data["\x73\155\164\137\141\x63\x74\x69\166\145"] = $smt;
        goto o9rGG;
        UoSqz:
        $user = $this->ion_auth->user()->row();
        goto xx21b;
        r4YfW:
        $arrKls = [];
        goto IxlO3;
        RerMm:
        $this->load->view("\155\145\155\142\145\162\163\x2f\x67\x75\162\x75\57\143\x62\x74\x2f\x73\x74\x61\164\165\163\x2f\x64\x61\164\x61");
        goto g8zsE;
        kU0xk:
    }
    public function statusRuang()
    {
        goto rpvEG;
        Lk8o_:
        $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi);
        goto OWdwA;
        rFa36:
        $data["\144\165\x72\x61\163\151\137\x73\x69\163\x77\x61"] = $arrDur;
        goto pLxwF;
        a9b7X:
        $sesi = $this->input->get("\163\145\x73\151");
        goto fG4B_;
        UqeFn:
        $this->load->view("\155\145\155\142\145\x72\163\x2f\x67\165\x72\x75\x2f\x74\145\155\160\154\x61\x74\x65\163\x2f\x66\x6f\x6f\164\x65\x72");
        goto wcLIu;
        Xwrs3:
        foreach ($siswas as $siswa) {
            goto K_4nz;
            pvdud:
            foreach ($logs as $log) {
                goto fRKgz;
                aK072:
                YBc68:
                goto xDObM;
                YnooB:
                VK12m:
                goto aK072;
                elksT:
                array_push($log_siswa, $log);
                goto YnooB;
                fRKgz:
                if (!($log->id_siswa == $siswa->id_siswa)) {
                    goto VK12m;
                }
                goto elksT;
                xDObM:
            }
            goto qnTUd;
            K_4nz:
            $dur_siswa = null;
            goto RDOX7;
            l8hnK:
            $arrDur[$siswa->id_siswa] = ["\x64\x75\x72" => $dur_siswa, "\x6c\x6f\147" => $log_siswa];
            goto Yv45U;
            qnTUd:
            Mjj6b:
            goto l8hnK;
            Q99lx:
            Botte:
            goto JGjtF;
            JGjtF:
            $log_siswa = [];
            goto pvdud;
            RDOX7:
            foreach ($durasies as $durasi) {
                goto KBO7B;
                Ytekl:
                $dd = $ej . $em;
                goto wXQav;
                CROxm:
                $dur_siswa = $durasi;
                goto Qud5_;
                wXQav:
                $durasi->lama_ujian = $dd == '' ? "\60\40\x6d" : $dd;
                goto Kibdq;
                wLNZ3:
                osMG8:
                goto rjcex;
                Kibdq:
                K3l9n:
                goto CROxm;
                KBO7B:
                if (!($durasi->id_siswa == $siswa->id_siswa)) {
                    goto PfCTY;
                }
                goto RQGC_;
                hfpX9:
                $em = $elap[1] == "\x30\60" ? '' : intval($elap[1]) + $ed . "\40\155";
                goto Ytekl;
                dMVQo:
                if (strpos($lamanya, "\72") !== false) {
                    goto osMG8;
                }
                goto grdDm;
                xs3n3:
                $ed = $elap[2] == "\60\60" ? 0 : 1;
                goto SNYBr;
                k2wp6:
                goto K3l9n;
                goto wLNZ3;
                Qud5_:
                PfCTY:
                goto bYKQH;
                SNYBr:
                $ej = $elap[0] == "\x30\60" ? '' : intval($elap[0]) . "\40\x6a\40";
                goto hfpX9;
                rjcex:
                $elap = explode("\x3a", $lamanya);
                goto xs3n3;
                RQGC_:
                $lamanya = $durasi->lama_ujian;
                goto dMVQo;
                bYKQH:
                IqjPx:
                goto wI6ji;
                grdDm:
                $durasi->lama_ujian .= "\x6d";
                goto k2wp6;
                wI6ji:
            }
            goto Q99lx;
            Yv45U:
            fzxoM:
            goto YFy6E;
            YFy6E:
        }
        goto AuX3k;
        GA03w:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto Mb2Cj;
        Wz5hm:
        $data["\160\x65\x6e\x67\141\x77\x61\x73"] = $this->master->getGuruByArrId($ids_pengawas);
        goto EGD0R;
        fG4B_:
        $jadwal = $this->input->get("\152\141\144\167\141\x6c");
        goto kd_96;
        OWdwA:
        $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal);
        goto JewMC;
        yKm7L:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto F2tAE;
        F2tAE:
        $data["\163\155\x74\x5f\141\x63\x74\151\x76\x65"] = $smt;
        goto GA03w;
        pLxwF:
        $data["\151\x6e\x66\157"] = $info;
        goto E1MiB;
        vC7ya:
        $data["\x74\x70\x5f\x61\x63\164\151\166\145"] = $tp;
        goto yKm7L;
        Cun7f:
        $smt = $this->dashboard->getSemesterActive();
        goto PwiRo;
        EGD0R:
        $this->load->view("\155\145\155\x62\x65\162\x73\x2f\147\165\x72\x75\x2f\164\145\x6d\x70\x6c\x61\x74\x65\x73\57\150\x65\x61\144\145\x72", $data);
        goto TsE2Y;
        pKDmY:
        $tp = $this->dashboard->getTahunActive();
        goto Cun7f;
        P8i6t:
        foreach ($pengawas as $pws) {
            $ids_pengawas = explode("\x2c", $pws->id_guru);
            Q4Jgp:
        }
        goto LDkSy;
        LA87m:
        $arrDur = [];
        goto Xwrs3;
        AuX3k:
        yqfK4:
        goto CcmW1;
        CcmW1:
        $this->db->trans_complete();
        goto QhX9Y;
        TsE2Y:
        $this->load->view("\155\x65\155\x62\145\x72\x73\x2f\147\x75\162\165\x2f\x63\142\x74\57\x73\164\x61\x74\165\163\57\x73\164\141\x74\x75\163");
        goto UqeFn;
        kd_96:
        $user = $this->ion_auth->user()->row();
        goto NPzMq;
        p2p8i:
        $pengawas = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal, $sesi, $ruang);
        goto OUjHu;
        NPzMq:
        $data = ["\x75\163\145\x72" => $user, "\x6a\x75\144\165\x6c" => "\123\x74\x61\164\165\x73\40\125\x6a\151\x61\156\40\123\x69\163\167\141", "\x73\x75\142\x6a\165\x64\x75\x6c" => "\x53\164\x61\164\165\163\40\x53\151\163\167\141", "\x73\x65\164\164\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto mhcfb;
        LDkSy:
        kMF1t:
        goto LA87m;
        QhX9Y:
        $data["\163\151\163\167\141"] = $siswas;
        goto rFa36;
        hwkbo:
        $info = $this->cbt->getJadwalById($jadwal);
        goto Lk8o_;
        Mb2Cj:
        $data["\147\x75\162\165"] = $guru;
        goto hwkbo;
        OUjHu:
        $ids_pengawas = [];
        goto P8i6t;
        mhcfb:
        $this->db->trans_start();
        goto pKDmY;
        rpvEG:
        $ruang = $this->input->get("\162\x75\x61\156\147");
        goto a9b7X;
        E1MiB:
        $data["\151\x64\163\137\x70\x65\156\x67\141\167\x61\163"] = $ids_pengawas;
        goto Wz5hm;
        JewMC:
        $logs = $this->cbt->getLogUjianByJadwal($jadwal);
        goto p2p8i;
        PwiRo:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto vC7ya;
        wcLIu:
    }
    public function getJadwalUjianByJadwal()
    {
        goto Khp_o;
        ZCruw:
        $tp = $this->dashboard->getTahunActive();
        goto RUtHJ;
        m_LXk:
        foreach ($kelas as $key => $value) {
            $kelases[$value["\153\145\x6c\x61\163\x5f\x69\144"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\x6b\x65\154\x61\163\137\151\144"]);
            WSx35:
        }
        goto Y1Htj;
        tTOP5:
        $data["\163\x6d\x74\137\141\143\164\x69\x76\x65"] = $smt;
        goto YI9gv;
        FTCdQ:
        $data["\164\x70\x5f\x61\x63\x74\x69\166\x65"] = $tp;
        goto QsObA;
        YUi1C:
        $info = $this->cbt->getJadwalById($jadwal);
        goto ZCruw;
        YI9gv:
        $kelas = unserialize($info->bank_kelas);
        goto D8LMg;
        D8LMg:
        $kelases = [];
        goto m_LXk;
        IWAmO:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto FTCdQ;
        SZY4v:
        $this->output_json($kelases);
        goto DF_aK;
        QsObA:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto tTOP5;
        RUtHJ:
        $smt = $this->dashboard->getSemesterActive();
        goto IWAmO;
        Khp_o:
        $jadwal = $this->input->get("\151\x64\137\x6a\x61\x64\167\141\154");
        goto YUi1C;
        Y1Htj:
        OXanM:
        goto SZY4v;
        DF_aK:
    }
    public function getJadwalUjianByKelas()
    {
        goto JkVVS;
        G3b4g:
        foreach ($jadwals as $jadwal) {
            goto VZkFS;
            C99es:
            foreach ($kls as $kl) {
                goto RJV6l;
                Mk1_r:
                Vgd4G:
                goto Zc3nC;
                RJV6l:
                if (!($kl["\x6b\145\x6c\x61\163\x5f\151\x64"] == $kelas)) {
                    goto iZwuE;
                }
                goto VHQmN;
                VHQmN:
                $jdwl[$jadwal->id_jadwal] = $jadwal->bank_kode;
                goto Zhkwe;
                Zhkwe:
                iZwuE:
                goto Mk1_r;
                Zc3nC:
            }
            goto cAc12;
            VZkFS:
            $kls = unserialize($jadwal->bank_kelas);
            goto C99es;
            EtlTB:
            XTuHV:
            goto Ta63o;
            cAc12:
            jSrbV:
            goto EtlTB;
            Ta63o:
        }
        goto Faf_g;
        Wp9lr:
        $jadwals = $this->cbt->getAllJadwal($tp->id_tp, $smt->id_smt, $id_guru);
        goto hWmv6;
        q3pjp:
        $this->output_json($jdwl);
        goto y565q;
        Faf_g:
        tUEUM:
        goto q3pjp;
        a96fO:
        if ($this->ion_auth->in_group("\147\x75\x72\165")) {
            goto ZWgc0;
        }
        goto Ta3ca;
        jPp9k:
        $user = $this->ion_auth->user()->row();
        goto oj141;
        oj141:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto bViZL;
        u32bq:
        BccMb:
        goto Wp9lr;
        bViZL:
        $id_guru = $guru->id_guru;
        goto u32bq;
        Ta3ca:
        $id_guru = null;
        goto A3u6U;
        slDx0:
        $smt = $this->dashboard->getSemesterActive();
        goto a96fO;
        JkVVS:
        $kelas = $this->input->get("\x69\x64\x5f\153\145\x6c\x61\x73");
        goto wiYnm;
        A3u6U:
        goto BccMb;
        goto bDUJe;
        bDUJe:
        ZWgc0:
        goto jPp9k;
        hWmv6:
        $jdwl = [];
        goto G3b4g;
        wiYnm:
        $tp = $this->dashboard->getTahunActive();
        goto slDx0;
        y565q:
    }
    public function getSiswaKelas()
    {
        goto aAZZ7;
        kyoTZ:
        $data["\x64\x75\x72\x61\x73\x69"] = $arrDur;
        goto oavjx;
        kqKrf:
        $arrDur = [];
        goto sqFRJ;
        bssZt:
        $pengawas = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal);
        goto Pr9oI;
        rFVLA:
        $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal);
        goto x_PPL;
        ejiqc:
        K83s4:
        goto dgkb8;
        c02Hv:
        $tp = $this->dashboard->getTahunActive();
        goto Mc22I;
        w8K2H:
        foreach ($pengawas as $pws) {
            $ids_pengawas = explode("\54", $pws->id_guru);
            UE91h:
        }
        goto nGOUS;
        krgFZ:
        $info = $this->cbt->getJadwalById($jadwal);
        goto aBdyJ;
        dgkb8:
        $this->db->trans_complete();
        goto MCx3u;
        Br6Dm:
        $this->output_json($data);
        goto YBIhp;
        p0nok:
        $jadwal = $this->input->get("\x6a\141\144\167\x61\154");
        goto H7SRS;
        odE8F:
        $data["\160\x65\156\x67\x61\167\141\163"] = $this->master->getGuruByArrId($ids_pengawas);
        goto Br6Dm;
        oavjx:
        $data["\151\156\146\x6f"] = $info;
        goto odE8F;
        aAZZ7:
        $kelas = $this->input->get("\x6b\145\x6c\141\x73");
        goto p0nok;
        nGOUS:
        XNISf:
        goto kqKrf;
        MCx3u:
        $data["\163\x69\163\167\x61"] = $siswas;
        goto kyoTZ;
        aBdyJ:
        $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas);
        goto rFVLA;
        Mc22I:
        $smt = $this->dashboard->getSemesterActive();
        goto krgFZ;
        x_PPL:
        $logs = $this->cbt->getLogUjianByJadwal($jadwal);
        goto bssZt;
        H7SRS:
        $this->db->trans_start();
        goto c02Hv;
        Pr9oI:
        $ids_pengawas = [];
        goto w8K2H;
        sqFRJ:
        foreach ($siswas as $siswa) {
            goto bVj8k;
            h0Vvn:
            foreach ($durasies as $durasi) {
                goto XkCnS;
                pLlgy:
                $dur_siswa = $durasi;
                goto a8dPA;
                XkCnS:
                if (!($durasi->id_siswa == $siswa->id_siswa)) {
                    goto lk4G3;
                }
                goto ppAUp;
                hQ44f:
                if (strpos($lamanya, "\x3a") !== false) {
                    goto v2SN4;
                }
                goto B3THc;
                OTM3P:
                v2SN4:
                goto pFQ4w;
                Py6jG:
                $ed = $elap[2] == "\x30\60" ? 0 : 1;
                goto FjjTa;
                U6ZLD:
                goto ddNqc;
                goto OTM3P;
                qAmDV:
                way5D:
                goto yd1P8;
                pFQ4w:
                $elap = explode("\x3a", $lamanya);
                goto Py6jG;
                a22mS:
                ddNqc:
                goto pLlgy;
                ppAUp:
                $lamanya = $durasi->lama_ujian;
                goto hQ44f;
                oxhg2:
                $durasi->lama_ujian = $dd == '' ? "\60\x20\x6d" : $dd;
                goto a22mS;
                a8dPA:
                lk4G3:
                goto qAmDV;
                M_o24:
                $em = $elap[1] == "\x30\60" ? '' : intval($elap[1]) + $ed . "\x20\x6d";
                goto F3Zp2;
                FjjTa:
                $ej = $elap[0] == "\x30\x30" ? '' : intval($elap[0]) . "\40\x6a\40";
                goto M_o24;
                B3THc:
                $durasi->lama_ujian .= "\x6d";
                goto U6ZLD;
                F3Zp2:
                $dd = $ej . $em;
                goto oxhg2;
                yd1P8:
            }
            goto c3xjj;
            P_Fly:
            $log_siswa = [];
            goto zkf1v;
            c3xjj:
            fkrCP:
            goto P_Fly;
            DBjxR:
            ZGnj_:
            goto K33l8;
            iaKpR:
            JrUob:
            goto OgcLt;
            K33l8:
            $arrDur[$siswa->id_siswa] = ["\144\x75\x72" => $dur_siswa, "\154\157\x67" => $log_siswa];
            goto iaKpR;
            zkf1v:
            foreach ($logs as $log) {
                goto xYcz0;
                xYcz0:
                if (!($log->id_siswa == $siswa->id_siswa)) {
                    goto hEby0;
                }
                goto SnrOe;
                oYYns:
                sQ5gr:
                goto kT1hZ;
                SnrOe:
                array_push($log_siswa, $log);
                goto eBX93;
                eBX93:
                hEby0:
                goto oYYns;
                kT1hZ:
            }
            goto DBjxR;
            bVj8k:
            $dur_siswa = null;
            goto h0Vvn;
            OgcLt:
        }
        goto ejiqc;
        YBIhp:
    }
    public function getSiswaRuang()
    {
        goto ktyPa;
        am0kE:
        $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $sesi);
        goto fBJaD;
        sQtJD:
        $data["\x73\151\x73\167\x61"] = $siswas;
        goto pCRk4;
        vkJxh:
        $jadwal = $this->input->get("\x6a\141\x64\167\141\x6c");
        goto mcI0S;
        Btm4V:
        $logs = $this->cbt->getLogUjianByJadwal($jadwal);
        goto OS04A;
        mMlLu:
        $this->db->trans_complete();
        goto sQtJD;
        kP8u9:
        $data["\151\156\x66\x6f"] = $info;
        goto OPB6D;
        ktyPa:
        $ruang = $this->input->get("\x72\x75\141\156\147");
        goto cMK09;
        kZ9bj:
        $info = $this->cbt->getJadwalById($jadwal);
        goto am0kE;
        fBJaD:
        $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal);
        goto Btm4V;
        OS04A:
        $arrDur = [];
        goto yxW3v;
        OPB6D:
        $this->output_json($data);
        goto Vh93W;
        mcI0S:
        $this->db->trans_start();
        goto B2erF;
        ii8zd:
        $smt = $this->dashboard->getSemesterActive();
        goto kZ9bj;
        B2erF:
        $tp = $this->dashboard->getTahunActive();
        goto ii8zd;
        pCRk4:
        $data["\x64\x75\162\141\x73\x69"] = $arrDur;
        goto kP8u9;
        mqEyE:
        BUqzf:
        goto mMlLu;
        cMK09:
        $sesi = $this->input->get("\163\x65\x73\151");
        goto vkJxh;
        yxW3v:
        foreach ($siswas as $siswa) {
            goto k5_du;
            K7lOt:
            ONc2S:
            goto VIE0s;
            Gylfm:
            $log_siswa = [];
            goto FLvoB;
            tsQVL:
            foreach ($durasies as $durasi) {
                goto LnQHT;
                OoJP1:
                $ej = $elap[0] == "\60\x30" ? '' : intval($elap[0]) . "\40\x6a\40";
                goto gO9oA;
                djmbn:
                zYy3z:
                goto qGL2i;
                B2bnu:
                $durasi->ada_waktu = $minutes < $info->durasi_ujian;
                goto TLrHp;
                mlm_B:
                tZ0ni:
                goto ua1_y;
                GLHNL:
                syIGT:
                goto mlm_B;
                qO54X:
                Tg2MH:
                goto taOK4;
                IvYXV:
                $durasi->lama_ujian = $dd == '' ? "\x30\40\155" : $dd;
                goto qO54X;
                gSct4:
                $interval = $mulai->diff(new DateTime());
                goto MThlt;
                xhToa:
                $mulai = new DateTime($durasi->mulai);
                goto gSct4;
                TdCgM:
                $durasi->lama_ujian .= "\155";
                goto KcDRJ;
                taOK4:
                $dur_siswa = $durasi;
                goto GLHNL;
                qGL2i:
                $elap = explode("\72", $lamanya);
                goto YKkLt;
                QczJC:
                $dd = $ej . $em;
                goto IvYXV;
                LnQHT:
                if (!($durasi->id_siswa == $siswa->id_siswa)) {
                    goto syIGT;
                }
                goto gO21e;
                MThlt:
                $minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;
                goto B2bnu;
                KcDRJ:
                goto Tg2MH;
                goto djmbn;
                gO9oA:
                $em = $elap[1] == "\x30\x30" ? '' : intval($elap[1]) + $ed . "\40\x6d";
                goto QczJC;
                gO21e:
                $lamanya = $durasi->lama_ujian;
                goto xhToa;
                TLrHp:
                if (strpos($lamanya, "\x3a") !== false) {
                    goto zYy3z;
                }
                goto TdCgM;
                YKkLt:
                $ed = $elap[2] == "\60\x30" ? 0 : 1;
                goto OoJP1;
                ua1_y:
            }
            goto y9jPp;
            JUBvw:
            c4Ljr:
            goto o4lQ4;
            o4lQ4:
            $arrDur[$siswa->id_siswa] = ["\x64\165\x72" => $dur_siswa, "\x6c\157\147" => $log_siswa];
            goto K7lOt;
            k5_du:
            $dur_siswa = null;
            goto tsQVL;
            y9jPp:
            OHPZT:
            goto Gylfm;
            FLvoB:
            foreach ($logs as $log) {
                goto gnzmj;
                gnzmj:
                if (!($log->id_siswa == $siswa->id_siswa)) {
                    goto v3JTE;
                }
                goto InvJK;
                InvJK:
                array_push($log_siswa, $log);
                goto bmeWw;
                bmeWw:
                v3JTE:
                goto pvdnv;
                pvdnv:
                Z7wR2:
                goto pdyqI;
                pdyqI:
            }
            goto JUBvw;
            VIE0s:
        }
        goto mqEyE;
        Vh93W:
    }
    public function detail()
    {
        goto kGEWI;
        sd7vT:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto rlPAM;
        DyJ67:
        T4kG5:
        goto asU9n;
        LAKEx:
        $data["\x73\x6d\164\137\141\143\164\151\166\145"] = $smt;
        goto mrswL;
        x5P4r:
        $data["\163\157\141\154"] = $this->cbt->getSoalSiswaByJadwal($jadwal, $siswa);
        goto URyI5;
        B0p56:
        $data["\164\x70\x5f\141\143\164\x69\166\x65"] = $tp;
        goto O2AM1;
        fSdN7:
        $this->load->view("\x63\x62\164\57\x73\164\141\164\x75\x73\x2f\x64\145\164\141\x69\x6c");
        goto TzRBG;
        mrswL:
        $data["\163\151\163\x77\x61"] = $this->master->getSiswaById($siswa);
        goto x5P4r;
        naQFJ:
        $this->load->view("\x5f\x74\x65\x6d\x70\154\141\164\x65\x73\57\x64\x61\x73\150\142\157\x61\162\x64\x2f\x5f\150\x65\x61\x64\145\162", $data);
        goto Z78Ib;
        Gpumd:
        $this->load->view("\137\x74\145\x6d\x70\154\141\x74\x65\163\57\144\141\163\x68\142\157\141\x72\x64\x2f\x5f\146\157\x6f\164\145\162");
        goto BDc2_;
        fCwS_:
        $data = ["\x75\163\x65\x72" => $user, "\152\x75\144\x75\x6c" => "\104\145\164\141\x69\154\40\x53\164\141\164\165\163\x20\123\x69\x73\167\141", "\x73\165\x62\152\165\x64\x75\154" => "\123\164\141\x74\x75\x73\x20\x53\x69\x73\167\141", "\x73\145\x74\164\151\156\147" => $this->dashboard->getSetting()];
        goto j0rPF;
        j0rPF:
        $tp = $this->dashboard->getTahunActive();
        goto p2UID;
        IhkDf:
        $jadwal = $this->input->get("\152\x61\x64\167\141\x6c");
        goto NHTuN;
        O2AM1:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto LAKEx;
        JtgN2:
        $this->load->view("\155\x65\x6d\x62\x65\x72\163\x2f\147\x75\x72\165\x2f\164\145\155\x70\x6c\141\164\145\x73\57\x68\x65\x61\x64\145\x72", $data);
        goto fSdN7;
        TzRBG:
        $this->load->view("\x6d\x65\155\142\145\x72\163\x2f\x67\165\162\x75\x2f\x74\x65\x6d\160\154\141\x74\145\x73\57\x66\157\x6f\x74\x65\x72");
        goto Te2tk;
        Te2tk:
        goto yQIEd;
        goto DyJ67;
        BDc2_:
        yQIEd:
        goto wptFq;
        kGEWI:
        $siswa = $this->input->get("\163\x69\163\x77\x61");
        goto IhkDf;
        o1grf:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto B0p56;
        asU9n:
        $data["\x70\162\157\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto naQFJ;
        NHTuN:
        $user = $this->ion_auth->user()->row();
        goto fCwS_;
        rlPAM:
        $data["\147\x75\162\x75"] = $guru;
        goto JtgN2;
        p2UID:
        $smt = $this->dashboard->getSemesterActive();
        goto o1grf;
        Z78Ib:
        $this->load->view("\x63\x62\x74\57\163\x74\141\164\165\163\57\x64\145\164\141\151\x6c");
        goto Gpumd;
        URyI5:
        if ($this->ion_auth->is_admin()) {
            goto T4kG5;
        }
        goto sd7vT;
        wptFq:
    }
}
