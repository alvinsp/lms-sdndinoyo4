<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/

use alhimik1986\PhpExcelTemplator\PhpExcelTemplator;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Rapor extends CI_Controller
{
    public function __construct()
    {
        goto TT3vo;
        WMSHg:
        goto teDgT;
        goto T_aAH;
        RNl1r:
        $this->load->model("\x44\141\163\150\x62\157\141\x72\144\137\x6d\157\x64\x65\x6c", "\144\x61\x73\150\142\x6f\141\x72\x64");
        goto sjGji;
        D4R68:
        redirect("\141\165\164\x68");
        goto qHhn4;
        c699w:
        $this->load->model("\104\x72\x6f\160\144\x6f\x77\156\137\x6d\157\x64\145\154", "\144\162\x6f\x70\144\x6f\167\156");
        goto AfjoL;
        RgflR:
        MOEcy:
        goto WMSHg;
        XULVc:
        if (!$this->ion_auth->logged_in()) {
            goto HFmC4;
        }
        goto Cotkl;
        Cotkl:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\165"))) {
            goto MOEcy;
        }
        goto W_ggv;
        xEPbl:
        $this->load->library(["\x64\x61\x74\141\x74\x61\x62\154\x65\x73", "\146\x6f\x72\155\137\x76\x61\x6c\151\x64\141\164\x69\x6f\x6e"]);
        goto RNl1r;
        GSqci:
        $this->load->dbforge();
        goto Gu5sP;
        E7Igl:
        $this->form_validation->set_error_delimiters('', '');
        goto I0Hs7;
        sjGji:
        $this->load->model("\x52\141\160\x6f\x72\x5f\155\x6f\144\x65\x6c", "\x72\141\x70\157\162");
        goto BMoPp;
        AfjoL:
        $this->load->model("\x4d\141\x73\164\x65\162\137\155\157\144\145\154", "\x6d\x61\x73\164\x65\162");
        goto E7Igl;
        Gu5sP:
        $this->load->database();
        goto xEPbl;
        T_aAH:
        HFmC4:
        goto D4R68;
        qHhn4:
        teDgT:
        goto GSqci;
        TT3vo:
        parent::__construct();
        goto XULVc;
        W_ggv:
        show_error("\x48\x61\x6e\x79\141\40\101\x64\155\x69\x6e\151\163\164\x72\141\x74\x6f\x72\40\171\x61\156\x67\x20\144\x69\142\x65\162\151\40\150\141\153\40\x75\x6e\164\165\153\40\155\x65\x6e\147\141\153\x73\145\163\x20\150\141\154\x61\155\x61\x6e\40\151\156\151\54\40\74\x61\40\x68\162\145\x66\x3d\x22" . base_url("\144\141\x73\x68\x62\157\141\x72\144") . "\x22\76\113\145\155\142\141\154\x69\40\x6b\x65\40\x6d\x65\x6e\x75\40\141\x77\x61\154\74\x2f\141\x3e", 403, "\101\153\x73\x65\163\x20\124\145\162\x6c\x61\x72\141\156\147");
        goto RgflR;
        BMoPp:
        $this->load->model("\113\x65\154\141\x73\x5f\x6d\x6f\144\145\x6c", "\x6b\x65\x6c\141\163");
        goto c699w;
        I0Hs7:
    }
    public function output_json($data, $encode = true)
    {
        goto lc0zN;
        AJOSo:
        $data = json_encode($data);
        goto sEpb2;
        j56bJ:
        $this->output->set_content_type("\x61\160\x70\154\x69\143\x61\164\x69\157\x6e\57\x6a\x73\157\x6e")->set_output($data);
        goto g7lqF;
        lc0zN:
        if (!$encode) {
            goto Zccyh;
        }
        goto AJOSo;
        sEpb2:
        Zccyh:
        goto j56bJ;
        g7lqF:
    }
    public function index()
    {
        goto QA1IX;
        ngYw5:
        $field = array("\x6e\151\x70\x5f\x6b\145\160\x73\145\153" => array("\x74\x79\160\x65" => "\x69\x6e\x74", "\143\157\x6e\163\x74\162\141\x69\x6e\x74" => 1, "\144\145\146\141\x75\154\164" => 0), "\156\151\x70\137\167\x61\x6c\151\x6b\145\x6c\x61\163" => array("\164\x79\160\145" => "\151\156\164", "\143\x6f\x6e\163\164\162\141\151\156\164" => 1, "\144\x65\x66\141\165\154\164" => 0));
        goto M5kxn;
        XmL2E:
        $data["\x74\x70\x5f\x61\143\164\151\x76\145"] = $tp;
        goto C9rFA;
        Hf4Q9:
        $this->load->view("\x73\x65\164\164\151\156\147\x2f\x72\x61\x70\157\x72");
        goto EGMhy;
        LOxVQ:
        $user = $this->ion_auth->user()->row();
        goto Lgqee;
        NrN92:
        vp3W_:
        goto nfs__;
        QA1IX:
        $no_update = $this->db->field_exists("\156\151\x70\x5f\153\x65\160\x73\x65\153", "\x72\x61\160\157\x72\x5f\141\x64\155\x69\156\x5f\163\x65\164\x74\151\x6e\147");
        goto LZcKv;
        ACLPF:
        $smt = $this->dashboard->getSemesterActive();
        goto H4KdR;
        C9rFA:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto Y6Dtb;
        zbL_4:
        if ($this->ion_auth->is_admin()) {
            goto Rh4P8;
        }
        goto dhlKn;
        mOAeA:
        $data["\160\162\157\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto q08kk;
        LZcKv:
        if ($no_update) {
            goto UyeP2;
        }
        goto ngYw5;
        ZlBjA:
        goto vp3W_;
        goto q0mxC;
        M5kxn:
        $this->dbforge->add_column("\162\x61\x70\x6f\162\137\x61\x64\155\151\156\x5f\163\145\164\x74\151\156\147", $field);
        goto cm9p4;
        q0mxC:
        Rh4P8:
        goto t0q31;
        Y6Dtb:
        $data["\163\x6d\164\x5f\x61\x63\x74\151\x76\x65"] = $smt;
        goto mOAeA;
        tc6w5:
        $tp = $this->dashboard->getTahunActive();
        goto ACLPF;
        cm9p4:
        UyeP2:
        goto LOxVQ;
        EGMhy:
        $this->load->view("\x5f\164\145\155\160\154\141\164\145\163\57\144\141\x73\x68\x62\x6f\141\x72\144\x2f\x5f\146\157\157\164\145\162");
        goto NrN92;
        H4KdR:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto XmL2E;
        q08kk:
        $data["\x72\141\160\157\162"] = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto eZ1p6;
        t0q31:
        $this->load->view("\x5f\x74\x65\x6d\x70\x6c\141\164\145\163\x2f\144\141\163\150\x62\x6f\x61\x72\x64\57\x5f\x68\145\x61\144\x65\162", $data);
        goto Hf4Q9;
        eZ1p6:
        $data["\153\153\155\137\144\x72\x6f\160"] = ["\x54\x69\144\x61\x6b", "\131\x61"];
        goto zbL_4;
        dhlKn:
        redirect("\162\x61\x70\x6f\x72\57\x72\141\x70\x6f\x72\x6b\153\155");
        goto ZlBjA;
        Lgqee:
        $data = ["\165\x73\145\162" => $user, "\x6a\x75\x64\165\x6c" => "\120\x65\x6e\147\x61\x74\x75\x72\x61\156\40\122\141\x70\157\x72", "\163\165\x62\x6a\165\144\x75\154" => "\x50\x65\x6e\x67\141\164\165\162\141\x6e\40\x52\x61\160\x6f\162", "\x73\x65\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto tc6w5;
        nfs__:
    }
    public function saveRaporAdmin()
    {
        goto W4dPl;
        W4dPl:
        $tp = $this->dashboard->getTahunActive();
        goto bAnZ4;
        aQr_G:
        $update = $this->db->replace("\x72\x61\160\157\x72\137\141\144\155\x69\x6e\x5f\x73\145\x74\164\151\x6e\x67", $input);
        goto nB5aV;
        nB5aV:
        $data["\x73\x74\x61\164\165\x73"] = $update;
        goto pIRC3;
        bAnZ4:
        $smt = $this->dashboard->getSemesterActive();
        goto Q_BpV;
        Q_BpV:
        $input = ["\x69\x64\137\x73\145\x74\164\x69\156\x67" => $tp->id_tp . $smt->id_smt, "\151\x64\137\164\160" => $tp->id_tp, "\151\144\x5f\x73\x6d\x74" => $smt->id_smt, "\164\147\x6c\x5f\x72\x61\x70\x6f\x72\137\x70\164\163" => $this->input->post("\164\147\154\137\x72\x61\160\157\x72\137\160\x74\x73", true), "\x6e\151\160\x5f\x6b\145\x70\x73\x65\x6b" => $this->input->post("\x6e\151\x70\x5f\153\x65\x70\x73\145\x6b", true), "\x6e\x69\160\x5f\167\x61\x6c\151\153\145\154\x61\x73" => $this->input->post("\x6e\x69\x70\x5f\167\x61\154\151\x6b\145\154\x61\x73", true), "\164\x67\154\x5f\x72\141\x70\x6f\162\x5f\141\153\150\151\162" => $this->input->post("\x74\x67\154\137\162\x61\x70\157\x72\x5f\141\x6b\150\x69\162", true), "\164\147\x6c\x5f\162\x61\x70\x6f\x72\137\x6b\145\x6c\141\x73\x5f\141\153\150\x69\x72" => $this->input->post("\164\x67\x6c\137\162\x61\x70\157\162\x5f\x6b\145\154\x61\x73\137\x61\x6b\x68\151\162", true), "\153\x6b\155\137\164\x75\x6e\147\x67\141\154" => $this->input->post("\153\153\155\137\x74\x75\156\147\x67\141\x6c", true), "\153\153\155" => $this->input->post("\153\x6b\x6d", true), "\x62\x6f\x62\157\164\137\160\x68" => $this->input->post("\x62\157\142\157\164\x5f\160\x68", true), "\142\x6f\142\157\x74\x5f\160\164\163" => $this->input->post("\x62\x6f\x62\157\x74\137\x70\x74\163", true), "\142\157\x62\x6f\x74\x5f\160\141\x73" => $this->input->post("\x62\157\x62\157\x74\137\x70\x61\x73", true)];
        goto aQr_G;
        pIRC3:
        $this->output_json($data);
        goto poNa6;
        poNa6:
    }
    public function raporkkm()
    {
        goto XYYAW;
        ZUymG:
        $data["\145\153\x73\164\x72\x61"] = $arrEkstra;
        goto T6ZDD;
        oKBKc:
        $arrKelasEkstra = [];
        goto dKMGf;
        d1mVC:
        $mapel = $mapel_guru->mapel_kelas != null ? json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))) : [];
        goto qPdVo;
        E122y:
        $data["\155\x61\x70\x65\x6c"] = $arrMapel;
        goto m3zZ7;
        IsgNM:
        foreach ($ekstra as $m) {
            goto TkHgR;
            TkHgR:
            $arrEkstra[$m->id_ekstra] = $m->nama_ekstra;
            goto wLjiO;
            wLjiO:
            foreach ($m->kelas_ekstra as $kls) {
                goto cFxw_;
                SxMDu:
                if (!($key_kelas !== false)) {
                    goto jVGIf;
                }
                goto cGAO0;
                cGAO0:
                $arrKelasEkstra[$m->id_ekstra][] = ["\151\144\137\153\x65\154\141\163" => $kls->kelas, "\x6e\141\x6d\x61\x5f\153\x65\x6c\141\x73" => $kelases[$key_kelas]->nama_kelas];
                goto qXeYR;
                cFxw_:
                $key_kelas = array_search($kls->kelas, array_column($kelases, "\151\144\137\153\x65\x6c\141\x73"));
                goto SxMDu;
                VDXpk:
                dYtBH:
                goto xrLs5;
                qXeYR:
                jVGIf:
                goto VDXpk;
                xrLs5:
            }
            goto ITmBr;
            TwXKq:
            j92cn:
            goto wscqU;
            ITmBr:
            cHaOd:
            goto TwXKq;
            wscqU:
        }
        goto YPhaV;
        dKMGf:
        if (!(count($ekstra) > 0)) {
            goto rLqvx;
        }
        goto IsgNM;
        m3zZ7:
        $data["\x6b\x65\x6c\x61\163"] = $arrKelas;
        goto vz5SM;
        wsOwS:
        $tp = $this->dashboard->getTahunActive();
        goto d7r0H;
        aaD7r:
        $data["\x73\x6d\164\x5f\x61\x63\x74\x69\166\145"] = $smt;
        goto gnBWr;
        vDrFT:
        $arrEkstra = [];
        goto oKBKc;
        kRMcB:
        foreach ($mapel as $m) {
            goto qMZMh;
            npVVT:
            foreach ($m->kelas_mapel as $kls) {
                goto SuMVL;
                AIvgm:
                c0BcH:
                goto uWL0_;
                Q4V6M:
                jNdxj:
                goto AIvgm;
                SuMVL:
                $key_kelas = array_search($kls->kelas, array_column($kelases, "\x69\x64\137\153\145\154\x61\163"));
                goto IlYk_;
                NLEDO:
                $arrKelas[$m->id_mapel][] = ["\151\144\x5f\x6b\145\154\x61\x73" => $kls->kelas, "\x6e\141\155\141\137\x6b\145\154\x61\x73" => $kelases[$key_kelas]->nama_kelas];
                goto Q4V6M;
                IlYk_:
                if (!($key_kelas !== false)) {
                    goto jNdxj;
                }
                goto NLEDO;
                uWL0_:
            }
            goto Pr4QE;
            Pgv0G:
            fJMmq:
            goto JWvmo;
            qMZMh:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto npVVT;
            Pr4QE:
            CoCM1:
            goto Pgv0G;
            JWvmo:
        }
        goto W18qh;
        vz5SM:
        $ekstra = $mapel_guru->ekstra_kelas != null ? json_decode(json_encode(unserialize($mapel_guru->ekstra_kelas))) : [];
        goto vDrFT;
        Oy_w1:
        $this->load->view("\x6d\145\155\142\145\162\x73\57\147\x75\162\x75\57\x72\x61\160\157\x72\57\x6b\x6b\x6d\x2f\x64\141\x74\x61");
        goto eZHlE;
        d7r0H:
        $smt = $this->dashboard->getSemesterActive();
        goto O25sb;
        gnBWr:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto bNTjk;
        W18qh:
        dxEhY:
        goto MWxmD;
        cEH4p:
        $arrKelas = [];
        goto J1V8I;
        XYYAW:
        $user = $this->ion_auth->user()->row();
        goto K7icb;
        lKQIF:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto aaD7r;
        T6ZDD:
        $data["\x6b\x65\154\x61\163\137\145\x6b\x73\x74\162\141"] = $arrKelasEkstra;
        goto jUzLj;
        MWxmD:
        $data["\147\x75\162\165"] = $guru;
        goto E122y;
        eZHlE:
        $this->load->view("\x6d\x65\155\142\145\x72\163\x2f\x67\x75\162\x75\57\x74\x65\155\x70\154\x61\x74\x65\x73\57\x66\x6f\x6f\164\145\x72");
        goto bkQM2;
        O25sb:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto d9GPU;
        bNTjk:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto d1mVC;
        qPdVo:
        $arrMapel = [];
        goto cEH4p;
        d9GPU:
        $data["\x74\160\x5f\x61\x63\164\151\166\x65"] = $tp;
        goto lKQIF;
        YPhaV:
        vehQu:
        goto Ks0Uj;
        Ks0Uj:
        rLqvx:
        goto ZUymG;
        jUzLj:
        $this->load->view("\x6d\145\155\142\145\x72\x73\x2f\147\x75\162\x75\57\x74\145\x6d\x70\154\141\164\145\x73\57\150\145\141\144\x65\162", $data);
        goto Oy_w1;
        J1V8I:
        $kelases = $this->kelas->getKelasList($tp->id_tp, $smt->id_smt);
        goto kRMcB;
        K7icb:
        $data = ["\165\163\x65\x72" => $user, "\x6a\165\x64\x75\154" => "\113\x4b\x4d\x20\x64\x61\x6e\40\102\157\x62\x6f\x74", "\x73\x75\142\152\165\x64\x75\154" => "\x49\156\x70\x75\x74\x20\113\x4b\x4d\40\x64\141\x6e\x20\x42\x6f\142\157\x74\x20\x4e\x69\154\x61\x69", "\x73\x65\x74\x74\151\x6e\x67" => $this->dashboard->getSetting()];
        goto wsOwS;
        bkQM2:
    }
    public function datakkm($mapel, $kelas)
    {
        goto OFjKF;
        F0Iv2:
        $data["\163\155\164"] = $smt->id_smt;
        goto JjuVU;
        Y_WRb:
        $kkm = '';
        goto jrmx7;
        uE0l0:
        $data["\x6b\145\154\x61\x73"] = $kelas;
        goto I3lpr;
        cGLM3:
        $data["\x6d\141\160\x65\154"] = $mapel;
        goto uE0l0;
        knG2U:
        $data["\x74\x70"] = $tp->id_tp;
        goto F0Iv2;
        ofhR1:
        $kkm = $this->rapor->getKkm($mapel . $kelas . $tp->id_tp . $smt->id_smt . "\61");
        goto OzFlN;
        HVx8x:
        $smt = $this->dashboard->getSemesterActive();
        goto Y_WRb;
        jrmx7:
        if (!($kelas != null)) {
            goto wRMNY;
        }
        goto ofhR1;
        OFjKF:
        $tp = $this->dashboard->getTahunActive();
        goto HVx8x;
        I3lpr:
        $data["\x6b\x6b\x6d"] = $kkm;
        goto knG2U;
        BgeE9:
        $this->output_json($data);
        goto mY1Mn;
        OzFlN:
        wRMNY:
        goto cGLM3;
        JjuVU:
        $data["\x73\x65\x74\x74\151\x6e\x67"] = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto BgeE9;
        mY1Mn:
    }
    public function datakkmEkstra($ekstra, $kelas)
    {
        goto rZ2uB;
        Wo8lp:
        Yupsp:
        goto H0kRS;
        omrqf:
        $kkm = $this->rapor->getKkm($ekstra . $kelas . $tp->id_tp . $smt->id_smt . "\62");
        goto Wo8lp;
        S9JWG:
        $kkm = '';
        goto h9qMY;
        SYSyV:
        $data["\x6b\145\154\141\163"] = $kelas;
        goto JmhBW;
        eNSFS:
        $smt = $this->dashboard->getSemesterActive();
        goto S9JWG;
        rZ2uB:
        $tp = $this->dashboard->getTahunActive();
        goto eNSFS;
        Q15Ru:
        $data["\163\x65\164\x74\x69\156\x67"] = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto s18wv;
        N1fdA:
        $data["\163\155\x74"] = $smt->id_smt;
        goto Q15Ru;
        s18wv:
        $this->output_json($data);
        goto tMsUT;
        H0kRS:
        $data["\x65\x6b\163\164\x72\x61"] = $ekstra;
        goto SYSyV;
        JmhBW:
        $data["\x6b\153\x6d"] = $kkm;
        goto rpGYl;
        rpGYl:
        $data["\x74\160"] = $tp->id_tp;
        goto N1fdA;
        h9qMY:
        if (!($kelas != null)) {
            goto Yupsp;
        }
        goto omrqf;
        tMsUT:
    }
    public function saveKkm()
    {
        goto oOg0I;
        C3N8C:
        $smt = $this->dashboard->getSemesterActive();
        goto ku3Bw;
        ku3Bw:
        $input = ["\151\144\137\x6b\x6b\155" => $this->input->post("\151\x64\137\x6b\153\155", true), "\x69\x64\137\164\x70" => $tp->id_tp, "\x69\x64\137\x73\x6d\164" => $smt->id_smt, "\x62\157\x62\157\x74\x5f\160\x68" => $this->input->post("\x62\x6f\x62\157\164\137\x70\150", true), "\x62\x6f\x62\157\164\137\x70\x74\163" => $this->input->post("\x62\157\x62\157\164\137\160\x74\163", true), "\142\157\x62\157\x74\137\x70\x61\163" => $this->input->post("\142\157\x62\x6f\164\137\x70\141\163", true), "\x6b\153\155" => $this->input->post("\153\153\x6d", true), "\x62\145\142\141\x6e\x5f\x6a\141\155" => $this->input->post("\x62\145\142\x61\x6e", true), "\x6a\x65\156\x69\163" => $this->input->post("\152\x65\x6e\151\163\137\x6b\x6b\x6d", true), "\151\x64\x5f\x6b\x65\154\141\163" => $this->input->post("\151\x64\x5f\x6b\x65\x6c\141\163", true), "\151\144\137\x6d\141\160\x65\154" => $this->input->post("\151\144\x5f\x6d\x61\160\145\x6c", true)];
        goto rKRkG;
        b58WK:
        $data["\163\x74\x61\x74\165\x73"] = $update;
        goto vcLIi;
        vcLIi:
        $this->output_json($data);
        goto gYpqW;
        rKRkG:
        $update = $this->db->replace("\162\141\160\157\x72\x5f\153\x6b\155", $input);
        goto b58WK;
        oOg0I:
        $tp = $this->dashboard->getTahunActive();
        goto C3N8C;
        gYpqW:
    }
    public function raporkikd()
    {
        goto RQVxo;
        Lhlfw:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto SaWAs;
        RQVxo:
        $user = $this->ion_auth->user()->row();
        goto i72rc;
        xAmW9:
        $arrMapel = [];
        goto KUJFd;
        Io89u:
        foreach ($mapel as $m) {
            goto umn1a;
            qxx0S:
            IVQ7T:
            goto t2409;
            C4bl5:
            foreach ($m->kelas_mapel as $kls) {
                goto NEQRA;
                EJuHc:
                if (!($key_kelas !== false)) {
                    goto wmhiS;
                }
                goto KF5dU;
                NEQRA:
                $key_kelas = array_search($kls->kelas, array_column($kelases, "\x69\x64\x5f\x6b\x65\x6c\x61\163"));
                goto EJuHc;
                KDKhw:
                wmhiS:
                goto l92n6;
                l92n6:
                tli3r:
                goto GurM_;
                KF5dU:
                $arrKelas[$m->id_mapel][] = ["\151\144\x5f\153\145\x6c\141\x73" => $kls->kelas, "\156\141\155\141\137\x6b\145\x6c\x61\163" => $kelases[$key_kelas]->nama_kelas];
                goto KDKhw;
                GurM_:
            }
            goto qxx0S;
            t2409:
            q6zKM:
            goto NLJAU;
            umn1a:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto C4bl5;
            NLJAU:
        }
        goto ecyn6;
        KnBBa:
        $data["\155\141\x70\145\x6c"] = $arrMapel;
        goto ywa6P;
        vId55:
        $this->load->view("\x6d\145\x6d\x62\x65\x72\x73\57\x67\x75\162\165\x2f\164\x65\x6d\160\x6c\x61\164\145\163\x2f\x68\x65\141\x64\x65\x72", $data);
        goto qAbg5;
        GrPRZ:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto W9ULm;
        W9ULm:
        $data["\x74\160\137\141\143\x74\x69\x76\145"] = $tp;
        goto Lhlfw;
        EsJGh:
        $this->load->view("\155\145\x6d\x62\x65\162\x73\57\147\x75\x72\x75\57\164\145\x6d\160\x6c\141\x74\145\x73\x2f\146\157\x6f\164\x65\162");
        goto utcOH;
        OFjar:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto OMG4f;
        i72rc:
        $data = ["\x75\163\x65\162" => $user, "\x6a\x75\x64\x75\x6c" => "\111\x6e\x64\x69\153\141\x74\x6f\x72\x20\x4b\104", "\163\x75\x62\x6a\x75\x64\165\x6c" => "\x52\151\x6e\x67\x6b\x61\163\141\x6e\x20\115\141\164\x65\x72\151\40\x50\145\156\151\x6c\141\151\x61\x6e", "\x73\145\x74\164\151\x6e\x67" => $this->dashboard->getSetting()];
        goto lujtf;
        EL9AF:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto xAmW9;
        tr8bt:
        pYa5Z:
        goto IBE7S;
        o4x2P:
        if (!($mapel != null)) {
            goto pYa5Z;
        }
        goto Io89u;
        IBE7S:
        $data["\x67\x75\x72\165"] = $guru;
        goto KnBBa;
        pLf_0:
        $smt = $this->dashboard->getSemesterActive();
        goto GrPRZ;
        lujtf:
        $tp = $this->dashboard->getTahunActive();
        goto pLf_0;
        OMG4f:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto EL9AF;
        UyD7K:
        $kelases = $this->kelas->getKelasList($tp->id_tp, $smt->id_smt);
        goto o4x2P;
        SaWAs:
        $data["\163\155\164\137\x61\143\164\151\166\145"] = $smt;
        goto OFjar;
        ecyn6:
        SOqXJ:
        goto tr8bt;
        qAbg5:
        $this->load->view("\x6d\145\x6d\x62\145\x72\x73\57\x67\165\162\165\57\x72\141\x70\x6f\x72\57\x6b\151\x6b\144\57\144\141\164\x61");
        goto EsJGh;
        ywa6P:
        $data["\153\145\x6c\x61\163"] = $arrKelas;
        goto vId55;
        KUJFd:
        $arrKelas = [];
        goto UyD7K;
        utcOH:
    }
    public function datakikd($mapel, $kelas)
    {
        goto RK570;
        E5ynK:
        $smt = $this->dashboard->getSemesterActive();
        goto gcURY;
        DApZy:
        xyr0M:
        goto e9dQa;
        OjUi1:
        r4R8v:
        goto DApZy;
        e9dQa:
        $data["\155\141\160\x65\x6c"] = $mapel;
        goto uvYqP;
        ejwdD:
        $data["\153\x69\x6b\x64"] = $arrKiKd;
        goto bs8fy;
        bs8fy:
        $this->output_json($data);
        goto XNb_s;
        dFAon:
        $arrKiKd[] = [];
        goto s1cHg;
        RK570:
        $tp = $this->dashboard->getTahunActive();
        goto E5ynK;
        gcURY:
        $kikds = $this->rapor->getKikdMapelKelas($mapel, $kelas, $tp->id_tp, $smt->id_smt);
        goto dFAon;
        uvYqP:
        $data["\153\145\x6c\141\163"] = $kelas;
        goto ejwdD;
        s1cHg:
        if (!($kelas != null)) {
            goto xyr0M;
        }
        goto vaBjj;
        vaBjj:
        $aspek = ["\x31", "\x32"];
        goto PYd2r;
        PYd2r:
        foreach ($aspek as $asp) {
            goto NqwdD;
            oyYtL:
            vNArc:
            goto JDjxa;
            Xw2W6:
            $key_ki = array_search($mapel . $kelas . $asp . $no, array_column($kikds, "\151\144\x5f\153\x69\x6b\x64"));
            goto WDcfv;
            F4A8C:
            N1oZr:
            goto LPmEp;
            U0dqE:
            $arrKiKd[$asp][$mapel . $kelas . $asp . $no] = $kikds[$key_ki];
            goto CdmnN;
            g2_T1:
            goto bzaJj;
            goto SOJAg;
            SOJAg:
            p03lv:
            goto U0dqE;
            ADSOS:
            AN2A_:
            goto X_feg;
            aKu7j:
            $arrKiKd[$asp][$mapel . $kelas . $asp . $no] = ["\155\x61\164\145\x72\x69\x5f\153\151\153\144" => ''];
            goto g2_T1;
            NqwdD:
            $i = 0;
            goto oyYtL;
            JDjxa:
            if (!($i < 8)) {
                goto AWvxz;
            }
            goto kYt4D;
            cS0pn:
            AWvxz:
            goto ADSOS;
            WDcfv:
            if ($key_ki !== false) {
                goto p03lv;
            }
            goto aKu7j;
            DAOLZ:
            goto vNArc;
            goto cS0pn;
            LPmEp:
            $i++;
            goto DAOLZ;
            CdmnN:
            bzaJj:
            goto F4A8C;
            kYt4D:
            $no = $i + 1;
            goto Xw2W6;
            X_feg:
        }
        goto OjUi1;
        XNb_s:
    }
    public function saveKikd()
    {
        goto WiCfq;
        my4F2:
        $smt = $this->dashboard->getSemesterActive();
        goto isSrE;
        WiCfq:
        $sjson = $this->input->post("\x6d\141\164\145\x72\x69", true);
        goto RFOon;
        RO3Mu:
        $data["\x73\x74\x61\164\x75\x73"] = $updated;
        goto exHOM;
        RFOon:
        $tp = $this->dashboard->getTahunActive();
        goto my4F2;
        exHOM:
        $data["\x6a\x73\x6f\x6e"] = $sjson;
        goto q6b7g;
        Z3aMd:
        foreach ((array) $sjson as $aspek => $mapel_kelas) {
            goto MMyaZ;
            A783y:
            DCHEF:
            goto JDiuE;
            MMyaZ:
            foreach ($mapel_kelas as $idmk => $kikd) {
                goto hpFNG;
                KwUuz:
                Mex6E:
                goto yQQGL;
                yQQGL:
                oMYXd:
                goto aAr8o;
                hpFNG:
                foreach ($kikd as $id => $materi) {
                    goto JTcPG;
                    JfCpT:
                    $updated = $this->db->replace("\162\141\x70\x6f\162\x5f\153\x69\153\x64", $input);
                    goto DYJb3;
                    DYJb3:
                    tDeII:
                    goto rN79f;
                    JTcPG:
                    $input = ["\151\144\137\x6b\151\153\x64" => $id, "\x69\x64\137\155\141\x70\145\154\137\x6b\x65\x6c\x61\x73" => $idmk, "\141\163\160\x65\153" => $aspek, "\x69\144\137\x74\160" => $tp->id_tp, "\x69\x64\x5f\x73\x6d\164" => $smt->id_smt, "\x6d\x61\164\x65\x72\151\137\x6b\x69\x6b\x64" => $materi];
                    goto JfCpT;
                    rN79f:
                }
                goto KwUuz;
                aAr8o:
            }
            goto A783y;
            JDiuE:
            jN4YM:
            goto Z_vIs;
            Z_vIs:
        }
        goto wLtX_;
        wLtX_:
        o0ItW:
        goto RO3Mu;
        isSrE:
        $updated = false;
        goto Z3aMd;
        q6b7g:
        $this->output_json($data);
        goto l70Zv;
        l70Zv:
    }
    public function raporNilai()
    {
        goto AbdvI;
        nZRAN:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto k2CJB;
        uOzVt:
        $data["\160\x74\163"] = $pts;
        goto N9yeb;
        tPFHe:
        GuDAX:
        goto aKQUG;
        XhSDB:
        $ekstra = $mapel_guru->ekstra_kelas != null ? json_decode(json_encode(unserialize($mapel_guru->ekstra_kelas))) : [];
        goto qYLNI;
        a2amf:
        $data["\x68\141\162\151\141\156"] = $harian;
        goto uOzVt;
        cUQb1:
        $data["\x73\151\x73\167\141\145"] = $siswae;
        goto l4wiS;
        Ei24B:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto epb8G;
        GeHrl:
        $data["\145\x6b\163\x74\162\141\163"] = $ektras;
        goto cUQb1;
        qYLNI:
        $arrEkstra = [];
        goto glrwk;
        l4wiS:
        $data["\145\153\x73\x74\162\x61"] = $arrEkstra;
        goto cKkBG;
        TKVnT:
        $data["\154\x65\x76\145\x6c"] = array_unique($levelsMapel);
        goto BTLdi;
        Ik0pD:
        $pts = [];
        goto tRr9X;
        IT2UY:
        $data = ["\x75\x73\x65\x72" => $user, "\152\165\x64\165\x6c" => "\x49\156\x70\165\164\40\x4e\151\154\x61\x69", "\163\x75\142\x6a\x75\144\165\154" => "\x49\156\160\165\164\x20\x4e\151\154\141\151\40\122\x61\x70\x6f\x72", "\x73\145\x74\164\x69\156\147" => $this->dashboard->getSetting()];
        goto oLR6j;
        F1vrm:
        ZemjN:
        goto IlhLk;
        cKkBG:
        $data["\x6b\145\154\141\x73\x5f\145\153\163\164\x72\141"] = $arrKelasEkstra;
        goto HgjGe;
        k2CJB:
        $data["\x73\x6d\164\x5f\141\143\164\x69\x76\145"] = $smt;
        goto xox6Q;
        BTLdi:
        $data["\x73\x69\x73\x77\141\163"] = $siswas;
        goto a2amf;
        Ka2a8:
        foreach ($ekstra as $m) {
            goto O62AQ;
            eJPMW:
            jAAVb:
            goto C7IVB;
            tP3IK:
            foreach ($m->kelas_ekstra as $kls) {
                goto E5Nv3;
                E5Nv3:
                $kelas_guru = $this->kelas->get_one($kls->kelas);
                goto Y1eFQ;
                RhHN5:
                RaokK:
                goto yAEl1;
                lp3N6:
                $ektras[$m->id_ekstra][$kelas_guru->nama_kelas] = $this->rapor->cekNilaiEkstraKelas($m->id_ekstra, $kelas_guru->id_kelas, $tp->id_tp, $smt->id_smt);
                goto RhHN5;
                dDCEc:
                $siswae[$m->id_ekstra][$kelas_guru->nama_kelas] = count($this->kelas->getKelasSiswa($kelas_guru->id_kelas, $tp->id_tp, $smt->id_smt));
                goto lp3N6;
                yAEl1:
                Pbp0j:
                goto VJsxd;
                gP7Ki:
                $arrKelasEkstra[$m->id_ekstra][] = ["\x69\144\x5f\153\x65\154\x61\163" => $kelas_guru->id_kelas, "\x6c\x65\166\x65\x6c" => $kelas_guru->level_id, "\x6e\x61\x6d\141\x5f\153\145\x6c\x61\x73" => $kelas_guru->nama_kelas];
                goto dDCEc;
                Y1eFQ:
                if (!($kelas_guru != null)) {
                    goto RaokK;
                }
                goto gP7Ki;
                VJsxd:
            }
            goto w0lgk;
            O62AQ:
            $arrEkstra[$m->id_ekstra] = $m->nama_ekstra;
            goto tP3IK;
            w0lgk:
            S4oTw:
            goto eJPMW;
            C7IVB:
        }
        goto F1vrm;
        xox6Q:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto gQlFl;
        aKQUG:
        $data["\x6d\141\160\x65\154"] = $arrMapel;
        goto jXH8_;
        PL6Pq:
        $this->load->view("\x6d\x65\155\x62\x65\162\x73\x2f\x67\x75\x72\x75\57\164\x65\x6d\x70\154\x61\x74\145\163\x2f\150\145\x61\x64\x65\x72", $data);
        goto hu26g;
        VqfXq:
        $smt = $this->dashboard->getSemesterActive();
        goto Ei24B;
        y2ce0:
        $levelsMapel = [];
        goto npyQS;
        N9yeb:
        $data["\x70\141\x73"] = $pas;
        goto XhSDB;
        SJjX1:
        $this->load->view("\x6d\145\x6d\x62\x65\x72\163\x2f\147\165\x72\165\x2f\164\x65\x6d\x70\x6c\x61\164\x65\x73\x2f\146\157\157\164\145\x72");
        goto jC_XY;
        Xz1JR:
        $mapel = $mapel_guru->mapel_kelas != null ? json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))) : [];
        goto K5ZfV;
        glrwk:
        $arrKelasEkstra = [];
        goto MngSC;
        ny_RW:
        $arrMapel = [];
        goto TGnRZ;
        npyQS:
        $harian = [];
        goto Ik0pD;
        K5ZfV:
        $siswas = [];
        goto ny_RW;
        epb8G:
        $data["\x74\x70\137\x61\x63\164\151\166\145"] = $tp;
        goto nZRAN;
        oLR6j:
        $tp = $this->dashboard->getTahunActive();
        goto VqfXq;
        MngSC:
        $ektras = [];
        goto Pk_OS;
        tRr9X:
        $pas = [];
        goto lrBpI;
        HgjGe:
        $data["\x67\165\162\x75"] = $guru;
        goto PL6Pq;
        IlhLk:
        KPidl:
        goto GeHrl;
        TGnRZ:
        $arrKelasMapel = [];
        goto y2ce0;
        lrBpI:
        foreach ($mapel as $m) {
            goto cLdml;
            cLdml:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto sL7hR;
            sL7hR:
            foreach ($m->kelas_mapel as $kls) {
                goto rIGkl;
                NxoA7:
                $levelsMapel[] = $kelas_guru->level_id;
                goto fuvDG;
                rIGkl:
                $kelas_guru = $this->kelas->get_one($kls->kelas);
                goto KmjJb;
                KmjJb:
                if (!($kelas_guru != null)) {
                    goto e6_Dw;
                }
                goto NxoA7;
                fAloy:
                $siswas[$m->id_mapel][$kelas_guru->nama_kelas] = count($this->kelas->getKelasSiswa($kelas_guru->id_kelas, $tp->id_tp, $smt->id_smt));
                goto hhJyl;
                ULVbf:
                $pts[$m->id_mapel][$kelas_guru->nama_kelas] = $this->rapor->cekNilaiPtsKelas($m->id_mapel, $kelas_guru->id_kelas, $tp->id_tp, $smt->id_smt);
                goto UvWBS;
                xD_wo:
                QEZyD:
                goto Wl3ig;
                AHlmx:
                e6_Dw:
                goto xD_wo;
                UvWBS:
                $pas[$m->id_mapel][$kelas_guru->nama_kelas] = $this->rapor->cekNilaiAkhirKelas($m->id_mapel, $kelas_guru->id_kelas, $tp->id_tp, $smt->id_smt);
                goto AHlmx;
                fuvDG:
                $arrKelasMapel[$m->id_mapel][] = ["\x69\x64\137\153\x65\x6c\x61\163" => $kelas_guru->id_kelas, "\x6c\145\x76\145\154" => $kelas_guru->level_id, "\x6e\141\x6d\x61\x5f\153\145\x6c\x61\163" => $kelas_guru->nama_kelas];
                goto fAloy;
                hhJyl:
                $harian[$m->id_mapel][$kelas_guru->nama_kelas] = $this->rapor->cekNilaiHarianKelas($m->id_mapel, $kelas_guru->id_kelas, $tp->id_tp, $smt->id_smt);
                goto ULVbf;
                Wl3ig:
            }
            goto EvPaD;
            B2zct:
            QXXkZ:
            goto CTso8;
            EvPaD:
            AqfVE:
            goto B2zct;
            CTso8:
        }
        goto tPFHe;
        hu26g:
        $this->load->view("\x6d\x65\155\x62\145\x72\x73\x2f\x67\165\x72\x75\57\162\x61\x70\157\x72\57\156\151\154\141\x69\x2f\144\x61\x74\141");
        goto SJjX1;
        iTY6R:
        if (!(count($ekstra) > 0)) {
            goto KPidl;
        }
        goto Ka2a8;
        jXH8_:
        $data["\153\x65\154\x61\x73\137\155\x61\x70\x65\x6c"] = $arrKelasMapel;
        goto TKVnT;
        Pk_OS:
        $siswae = [];
        goto iTY6R;
        AbdvI:
        $user = $this->ion_auth->user()->row();
        goto IT2UY;
        gQlFl:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto Xz1JR;
        jC_XY:
    }
    public function raporNilaiGuru($filter = null, $id_mapel = null)
    {
        goto ivNFo;
        V46X7:
        $data["\145\x6b\163\164\x72\141\x5f\163\145\154\145\x63\164\x65\x64"] = $id_mapel;
        goto TkFQA;
        C2Kqx:
        NOK1j:
        goto H9j7y;
        o7KvV:
        foreach ($jabatan_guru as $jab) {
            goto ZON6k;
            J3GMy:
            vKG2G:
            goto Ac2Dz;
            ysF6N:
            vVDuH:
            goto J3GMy;
            ZON6k:
            foreach ($jab->ekstra_kelas as $mk) {
                goto CvVk9;
                CvVk9:
                if (!($mk["\151\144\x5f\145\153\x73\x74\162\141"] == $id_mapel)) {
                    goto uYoke;
                }
                goto ZOLpy;
                p_IoJ:
                Dg5z3:
                goto QPi8d;
                ZOLpy:
                foreach ($mk["\x6b\145\154\141\163\137\x65\x6b\x73\164\x72\141"] as $km) {
                    goto byAo0;
                    a4imU:
                    vpQRC:
                    goto D0IIT;
                    QLesH:
                    $guru_mapel = $jab->nama_guru;
                    goto lsOk1;
                    byAo0:
                    if (!($km["\x6b\145\154\x61\163"] == $guru->wali_kelas)) {
                        goto WmkFS;
                    }
                    goto QLesH;
                    lsOk1:
                    WmkFS:
                    goto a4imU;
                    D0IIT:
                }
                goto d3SI9;
                fCNsF:
                uYoke:
                goto p_IoJ;
                d3SI9:
                N_QlB:
                goto fCNsF;
                QPi8d:
            }
            goto ysF6N;
            Ac2Dz:
        }
        goto PEqDR;
        cLxmK:
        $setting = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto C95Yy;
        v3XvX:
        s21Ts:
        goto q9Hm9;
        hH5ed:
        $data["\x66\151\x6c\164\x65\162\137\x73\x65\154\145\x63\x74\145\x64"] = $filter;
        goto AcOLV;
        AL1Z9:
        $tp = $this->dashboard->getTahunActive();
        goto LXGmE;
        uQfy7:
        $nilai[$siswa->id_siswa] = $ns == null ? json_decode(json_encode($dummyNilai)) : $ns;
        goto rW9Ep;
        MTlmD:
        qosRw:
        goto JRTjN;
        XAxh6:
        $this->load->view("\x6d\145\155\x62\145\162\x73\x2f\x67\x75\x72\165\x2f\162\141\x70\157\x72\57\156\151\154\141\x69\57\156\x69\x6c\x61\x69\147\x75\x72\x75");
        goto YRvRD;
        RRtur:
        $arrKiKd[] = [];
        goto AxuOn;
        ne91N:
        foreach ($aspek as $asp) {
            goto Dx1kv;
            eo9rc:
            agRPl:
            goto PCrir;
            frmgz:
            $i++;
            goto xwvLS;
            PCrir:
            BFo_f:
            goto gPXye;
            XjEGD:
            if (!($i < 8)) {
                goto agRPl;
            }
            goto ox0Rc;
            LGVpU:
            $arrKiKd[$asp][$id_mapel . $guru->wali_kelas . $asp . $no] = $this->rapor->getKikdMapel($id_mapel . $guru->wali_kelas . $asp . $no, $tp->id_tp, $smt->id_smt);
            goto ksdW2;
            kmC2P:
            adUPp:
            goto XjEGD;
            ksdW2:
            FK_jG:
            goto frmgz;
            Dx1kv:
            $i = 0;
            goto kmC2P;
            xwvLS:
            goto adUPp;
            goto eo9rc;
            ox0Rc:
            $no = $i + 1;
            goto LGVpU;
            gPXye:
        }
        goto r0yF3;
        pZML1:
        $data["\146\151\x6c\164\x65\x72"] = ['' => "\106\151\154\164\x65\162\x20\x62\x65\162\144\141\163\x61\162\153\141\x6e", "\x31" => "\x4d\141\164\x61\40\120\145\154\141\x6a\141\x72\141\x6e", "\x32" => "\105\x6b\x73\164\x72\141\x6b\165\x72\x69\153\x75\x6c\145\162"];
        goto V46X7;
        Bnd1e:
        sh7Xq:
        goto KWO_K;
        r0yF3:
        RsvkU:
        goto HbslS;
        in3jI:
        goto C168n;
        goto e0KGW;
        TD1bl:
        $ne = $this->rapor->getEkstraKelas($id_mapel, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto oHHPU;
        qTS1x:
        aj5Ag:
        goto UPAF1;
        YRmKL:
        $data["\x73\151\x73\x77\x61"] = $siswas;
        goto ZXA0I;
        P8YUr:
        goto aj5Ag;
        goto Yxmk1;
        ivNFo:
        $user = $this->ion_auth->user()->row();
        goto eGzqs;
        AcOLV:
        $jabatan_guru = $this->master->getGuruMapel($tp->id_tp, $smt->id_smt);
        goto SeiKm;
        fPhcC:
        $kkm_ekstra = $setting;
        goto Bnd1e;
        JRTjN:
        if (!($i < count($siswas))) {
            goto NOK1j;
        }
        goto Vntz3;
        NuMQA:
        $kkm = $this->rapor->getKkm($id_mapel . $guru->wali_kelas . $tp->id_tp . $smt->id_smt . "\61");
        goto cb6v4;
        tBZIX:
        $data["\153\x6b\155"] = $kkm;
        goto VZcVv;
        H9j7y:
        C168n:
        goto YRmKL;
        cb6v4:
        $kkm_ekstra = $this->rapor->getKkm($id_mapel . $guru->wali_kelas . $tp->id_tp . $smt->id_smt . "\62");
        goto sCOVa;
        cLR_8:
        MMpat:
        goto v4j3b;
        AgPgA:
        $dropEskul = $this->dropdown->getAllEkskul();
        goto tcFNj;
        M90cH:
        $kkm = $setting;
        goto fPhcC;
        w78ce:
        $dropMapel = $this->dropdown->getAllMapel();
        goto G2YMK;
        Yxmk1:
        b7R0u:
        goto in3jI;
        o8RDY:
        Icb6H:
        goto FqAVx;
        v4j3b:
        if (!($id_mapel != null)) {
            goto u85Lc;
        }
        goto cLxmK;
        QMdZP:
        $data["\147\165\162\x75\137\155\x61\x70\145\154"] = $guru_mapel;
        goto qVR5s;
        G2YMK:
        $data["\x6d\x61\x70\x65\154"] = $ret + $dropMapel;
        goto cxwM_;
        pLv2c:
        $data["\164\160\137\141\143\164\151\166\145"] = $tp;
        goto KeRwo;
        hpCBH:
        $dummyEkstra = ["\x64\145\x73\x6b\162\x69\x70\163\151" => '', "\156\x69\154\x61\x69" => '', "\x70\x72\145\x64\x69\153\141\x74" => ''];
        goto BM9AT;
        rW9Ep:
        C6XvR:
        goto x19OY;
        DMMtu:
        $data["\163\x6d\x74\137\x61\x63\164\151\x76\145"] = $smt;
        goto JR7pI;
        ctE4P:
        $aspek = ["\61", "\62"];
        goto ne91N;
        JR7pI:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto F7BVs;
        pPawQ:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto pLv2c;
        qVR5s:
        u85Lc:
        goto biAvU;
        tjvf7:
        $guru_mapel = '';
        goto G1pDM;
        biAvU:
        $this->load->view("\x6d\x65\x6d\x62\145\x72\163\x2f\147\165\x72\x75\x2f\x74\x65\155\160\x6c\141\164\x65\163\x2f\x68\145\141\144\x65\x72", $data);
        goto XAxh6;
        F7BVs:
        $data["\147\x75\x72\x75"] = $guru;
        goto B5g8r;
        TkFQA:
        $data["\155\x61\x70\145\x6c\x5f\x73\x65\154\145\x63\x74\145\144"] = $id_mapel;
        goto hH5ed;
        G1pDM:
        foreach ($jabatan_guru as $jab) {
            goto B9eJ1;
            B9eJ1:
            foreach ($jab->mapel_kelas as $mk) {
                goto H7XeF;
                H7XeF:
                if (!($mk["\151\144\137\x6d\x61\160\145\x6c"] == $id_mapel)) {
                    goto ZzTm2;
                }
                goto iIKYg;
                i5Lf3:
                PqDXq:
                goto lfZA9;
                eiIji:
                ZzTm2:
                goto i5Lf3;
                iIKYg:
                foreach ($mk["\x6b\145\154\141\x73\x5f\155\x61\160\x65\x6c"] as $km) {
                    goto sBY_C;
                    wcrur:
                    $guru_mapel = $jab->nama_guru;
                    goto obUfq;
                    sBY_C:
                    if (!($km["\153\145\x6c\x61\163"] == $guru->wali_kelas)) {
                        goto Hu49S;
                    }
                    goto wcrur;
                    ax0pX:
                    cdLEE:
                    goto FJzZS;
                    obUfq:
                    Hu49S:
                    goto ax0pX;
                    FJzZS:
                }
                goto g3x9f;
                g3x9f:
                C4ha9:
                goto eiIji;
                lfZA9:
            }
            goto GD2xv;
            PkZbq:
            QAnZB:
            goto c8sRY;
            GD2xv:
            ixX1x:
            goto PkZbq;
            c8sRY:
        }
        goto v3XvX;
        iwyPy:
        UMU67:
        goto M90cH;
        BM9AT:
        $i = 0;
        goto qTS1x;
        q9Hm9:
        $i = 0;
        goto MTlmD;
        gUzLU:
        if ($filter == "\61") {
            goto Y9Ts0;
        }
        goto zDNBc;
        HbslS:
        mamnQ:
        goto gUzLU;
        oHHPU:
        $nilai[$siswa->id_siswa] = $ne == null ? json_decode(json_encode($dummyEkstra)) : $ne;
        goto o8RDY;
        LXGmE:
        $smt = $this->dashboard->getSemesterActive();
        goto pPawQ;
        e0KGW:
        Y9Ts0:
        goto tjvf7;
        UPAF1:
        if (!($i < count($siswas))) {
            goto b7R0u;
        }
        goto zulb5;
        zDNBc:
        $guru_mapel = '';
        goto o7KvV;
        PEqDR:
        AJwh7:
        goto hpCBH;
        eGzqs:
        $data = ["\x75\x73\x65\x72" => $user, "\152\165\144\x75\154" => "\123\145\x6d\165\x61\x20\x4e\151\154\141\x69", "\x73\x75\142\x6a\165\x64\x75\154" => "\x53\x65\155\165\141\40\116\x69\154\141\x69\x20\x52\x61\160\157\x72", "\x73\145\x74\164\151\156\147" => $this->dashboard->getSetting()];
        goto AL1Z9;
        FqAVx:
        $i++;
        goto P8YUr;
        x19OY:
        $i++;
        goto C2scv;
        YRvRD:
        $this->load->view("\155\145\155\142\145\x72\x73\57\x67\165\162\x75\x2f\x74\145\155\160\154\141\164\145\163\x2f\x66\157\x6f\x74\x65\162");
        goto Y9Eza;
        C95Yy:
        if ($setting->kkm_tunggal == "\x31") {
            goto UMU67;
        }
        goto NuMQA;
        cxwM_:
        $ret[''] = "\120\151\154\151\150\40\x45\x73\153\x75\x6c";
        goto AgPgA;
        tcFNj:
        $data["\145\x6b\163\x74\162\x61"] = $ret + $dropEskul;
        goto pZML1;
        zulb5:
        $siswa = $siswas[$i];
        goto TD1bl;
        VZcVv:
        $data["\x6b\x6b\x6d\x5f\145\153\x73\x74\x72\x61"] = $kkm_ekstra;
        goto QMdZP;
        qVBwN:
        $ns = $this->rapor->getNilaiHarianKelas($id_mapel, $guru->wali_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto uQfy7;
        KeRwo:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto DMMtu;
        AxuOn:
        if (!($guru->wali_kelas != null)) {
            goto mamnQ;
        }
        goto ctE4P;
        B5g8r:
        $ret[''] = "\x50\151\154\151\x68\40\115\x61\160\145\x6c";
        goto w78ce;
        sCOVa:
        goto sh7Xq;
        goto iwyPy;
        Vntz3:
        $siswa = $siswas[$i];
        goto MDyp4;
        MDyp4:
        $dummyNilai = ["\x70\61" => '', "\160\62" => '', "\x70\63" => '', "\x70\x34" => '', "\160\65" => '', "\160\x36" => '', "\x70\67" => '', "\160\70" => '', "\x70\x5f\x72\x61\164\x61\x5f\x72\x61\164\141" => '', "\x70\x5f\x70\x72\x65\x64\x69\153\x61\164" => "\x3d", "\x70\x5f\x64\x65\x73\x6b\162\x69\x70\x73\x69" => '', "\x6b\x31" => '', "\x6b\x32" => '', "\x6b\x33" => '', "\153\64" => '', "\153\x35" => '', "\153\66" => '', "\153\67" => '', "\x6b\x38" => '', "\153\137\x72\141\164\x61\137\162\141\x74\x61" => '', "\153\137\x70\162\x65\144\151\x6b\x61\164" => '', "\153\137\144\145\x73\153\x72\151\160\163\151" => ''];
        goto qVBwN;
        SeiKm:
        foreach ($jabatan_guru as $jabatan) {
            goto nr72m;
            Sn93U:
            il3L8:
            goto o0I5m;
            m0Wwn:
            $jabatan->ekstra_kelas = $jabatan->ekstra_kelas == null ? [] : unserialize($jabatan->ekstra_kelas);
            goto Sn93U;
            nr72m:
            $jabatan->mapel_kelas = $jabatan->mapel_kelas == null ? [] : unserialize($jabatan->mapel_kelas);
            goto m0Wwn;
            o0I5m:
        }
        goto cLR_8;
        C2scv:
        goto qosRw;
        goto C2Kqx;
        ZXA0I:
        $data["\156\151\154\x61\151"] = $nilai;
        goto tBZIX;
        eoI1Z:
        $nilai = [];
        goto RRtur;
        KWO_K:
        $siswas = $this->kelas->getKelasSiswa($guru->wali_kelas, $tp->id_tp, $smt->id_smt);
        goto eoI1Z;
        Y9Eza:
    }
    public function raporCekNilai($filter = null, $id_mapel = null)
    {
        goto hfxAu;
        Gmmle:
        $aspek = ["\61", "\62"];
        goto i9N3a;
        mYLmh:
        $data["\x73\151\x73\x77\x61"] = $siswas;
        goto piEBX;
        ih9Di:
        if (!($guru->wali_kelas != null)) {
            goto jq13E;
        }
        goto Gmmle;
        Co2KJ:
        $i++;
        goto UFU3P;
        i9N3a:
        foreach ($aspek as $asp) {
            goto Ql0R1;
            aIHAJ:
            EkCRX:
            goto PslPj;
            M2r0W:
            goto hAD7J;
            goto TV58_;
            wKyNM:
            hAD7J:
            goto CE3iA;
            LC0L_:
            ZpAjB:
            goto vGDhG;
            vGDhG:
            $i++;
            goto M2r0W;
            CE3iA:
            if (!($i < 8)) {
                goto lJ2rg;
            }
            goto buylj;
            Ql0R1:
            $i = 0;
            goto wKyNM;
            TV58_:
            lJ2rg:
            goto aIHAJ;
            k9twL:
            $arrKiKd[$asp][$id_mapel . $guru->wali_kelas . $asp . $no] = $this->rapor->getKikdMapel($id_mapel . $guru->wali_kelas . $asp . $no, $tp->id_tp, $smt->id_smt);
            goto LC0L_;
            buylj:
            $no = $i + 1;
            goto k9twL;
            PslPj:
        }
        goto KPiZb;
        jRteO:
        $tp = $this->dashboard->getTahunActive();
        goto Nk5fa;
        MFLCi:
        $dummyEkstra = ["\x64\x65\x73\153\x72\x69\160\x73\x69" => '', "\156\x69\x6c\x61\x69" => '', "\x70\162\145\x64\x69\x6b\141\x74" => ''];
        goto F8CwS;
        gDS1f:
        $this->load->view("\x6d\145\155\142\x65\162\x73\x2f\147\165\162\165\57\x72\141\x70\157\x72\57\156\151\154\x61\x69\x2f\160\x65\162\151\153\x73\141");
        goto ejWUL;
        DjW_x:
        $data["\146\151\x6c\164\x65\162\137\163\x65\154\x65\143\164\x65\144"] = $filter;
        goto Amv5o;
        viFym:
        $arrKiKd[] = [];
        goto ih9Di;
        LZtYM:
        foreach ($jabatan_guru as $jab) {
            goto fg2JQ;
            haTWv:
            apTVl:
            goto d5_P3;
            d5_P3:
            pLR0y:
            goto sImU6;
            fg2JQ:
            foreach ($jab->ekstra_kelas as $mk) {
                goto CRPuT;
                nq_SN:
                C7GFo:
                goto aUVwU;
                aUVwU:
                gJw5Q:
                goto dNXU9;
                JZNTt:
                foreach ($mk["\x6b\x65\x6c\x61\163\x5f\145\153\x73\164\162\141"] as $km) {
                    goto lSXRQ;
                    lSXRQ:
                    if (!($km["\153\x65\x6c\141\x73"] == $guru->wali_kelas)) {
                        goto QWedU;
                    }
                    goto r3tSh;
                    ArCWc:
                    QWedU:
                    goto GFFc2;
                    r3tSh:
                    $guru_mapel = $jab->nama_guru;
                    goto ArCWc;
                    GFFc2:
                    SiiMv:
                    goto yQGCD;
                    yQGCD:
                }
                goto nq_SN;
                dNXU9:
                adhRR:
                goto d01Js;
                CRPuT:
                if (!($mk["\x69\x64\x5f\145\x6b\x73\164\x72\x61"] == $id_mapel)) {
                    goto gJw5Q;
                }
                goto JZNTt;
                d01Js:
            }
            goto haTWv;
            sImU6:
        }
        goto u9ETR;
        JBFHr:
        $i = 0;
        goto X4pAo;
        XhWBA:
        $setting = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto ziMay;
        GawhZ:
        $data["\164\x70\x5f\x61\x63\164\x69\x76\145"] = $tp;
        goto wwhx3;
        fX6Mn:
        foreach ($jabatan_guru as $jab) {
            goto LLwke;
            h_l6n:
            MOJrz:
            goto dZJ4v;
            LLwke:
            foreach ($jab->mapel_kelas as $mk) {
                goto bp36_;
                ndoBj:
                ibJ5r:
                goto pI0rz;
                uO3X4:
                foreach ($mk["\x6b\x65\x6c\141\163\x5f\155\x61\160\145\154"] as $km) {
                    goto wLSPO;
                    wLSPO:
                    if (!($km["\153\145\154\x61\163"] == $guru->wali_kelas)) {
                        goto cr9W1;
                    }
                    goto PL2st;
                    PL2st:
                    $guru_mapel = $jab->nama_guru;
                    goto tvRAn;
                    tvRAn:
                    cr9W1:
                    goto PrvTH;
                    PrvTH:
                    LhelK:
                    goto nFXl7;
                    nFXl7:
                }
                goto ndoBj;
                pI0rz:
                EDU7q:
                goto MmZXP;
                bp36_:
                if (!($mk["\151\144\x5f\155\x61\160\x65\x6c"] == $id_mapel)) {
                    goto EDU7q;
                }
                goto uO3X4;
                MmZXP:
                dzBD5:
                goto zR4NU;
                zR4NU:
            }
            goto W083g;
            W083g:
            v07lH:
            goto h_l6n;
            dZJ4v:
        }
        goto DX1Y5;
        HJ8Vn:
        $data["\145\153\x73\164\162\141\137\163\145\154\145\143\164\145\x64"] = $id_mapel;
        goto aUQVe;
        ucSpU:
        WWK6R:
        goto Co2KJ;
        av2JN:
        $jenis = $filter == "\61" ? "\61" : "\62";
        goto td0Z9;
        aUQVe:
        $data["\x6d\x61\x70\145\x6c\x5f\163\x65\154\x65\143\x74\145\x64"] = $id_mapel;
        goto DjW_x;
        QvDKs:
        $data["\153\153\155"] = $kkm;
        goto Ee6AS;
        nczOu:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto GawhZ;
        q9m20:
        foreach ($jabatan_guru as $jabatan) {
            goto CB37E;
            CB37E:
            $jabatan->mapel_kelas = $jabatan->mapel_kelas == null ? [] : unserialize($jabatan->mapel_kelas);
            goto DUMBI;
            iPzwn:
            x8VH2:
            goto VFs_j;
            DUMBI:
            $jabatan->ekstra_kelas = $jabatan->ekstra_kelas == null ? [] : unserialize($jabatan->ekstra_kelas);
            goto iPzwn;
            VFs_j:
        }
        goto C3sM6;
        jravk:
        $kkm = $setting;
        goto vqMP2;
        ZkkSS:
        goto S7VXR;
        goto HD0Vb;
        PcWq6:
        $data = ["\x75\x73\x65\x72" => $user, "\x6a\x75\x64\x75\x6c" => "\x53\145\155\165\141\40\x4e\151\154\141\151", "\x73\165\x62\152\165\x64\165\x6c" => "\x53\x65\x6d\165\141\x20\116\151\x6c\141\151\40\122\x61\160\157\162", "\x73\145\164\x74\151\x6e\x67" => $this->dashboard->getSetting(), "\147\165\x72\165" => $guru];
        goto nczOu;
        lj7GH:
        $siswa = $siswas[$i];
        goto fEh48;
        fEh48:
        $ne = $this->rapor->getEkstraKelas($id_mapel, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto DWLRM;
        DWLRM:
        $nilai[$siswa->id_siswa] = $ne == null ? json_decode(json_encode($dummyEkstra)) : $ne;
        goto ils5L;
        Nk5fa:
        $smt = $this->dashboard->getSemesterActive();
        goto ELjRC;
        CNOZw:
        $data["\155\141\x70\x65\154"] = $ret + $dropMapel;
        goto DGJrO;
        Amv5o:
        $jabatan_guru = $this->master->getGuruMapel($tp->id_tp, $smt->id_smt);
        goto q9m20;
        X4pAo:
        HaPSx:
        goto lMNif;
        ils5L:
        mMBpP:
        goto o6Pqr;
        ziMay:
        if ($setting->kkm_tunggal == "\61") {
            goto Tm_Uo;
        }
        goto av2JN;
        vqMP2:
        PV1mA:
        goto f2djf;
        oTuHq:
        $data["\146\151\x6c\x74\x65\162"] = ['' => "\106\151\x6c\164\145\162\x20\x62\145\x72\x64\x61\x73\141\x72\153\x61\x6e", "\61" => "\115\141\x74\x61\40\x50\x65\x6c\x61\x6a\x61\162\141\x6e", "\62" => "\x45\x6b\x73\x74\162\x61\153\165\162\x69\x6b\x75\x6c\145\162"];
        goto HJ8Vn;
        mf6N0:
        $this->load->view("\x6d\x65\x6d\142\x65\162\163\57\147\x75\162\165\x2f\x74\x65\x6d\x70\x6c\x61\x74\x65\163\x2f\150\145\141\144\145\162", $data);
        goto gDS1f;
        oEKvw:
        S7VXR:
        goto mYLmh;
        wb6iz:
        $data["\x65\x6b\x73\164\162\x61"] = $ret + $dropEskul;
        goto oTuHq;
        b38Tr:
        $dummyNilai = ["\160\x31" => '', "\160\x32" => '', "\160\x33" => '', "\160\x34" => '', "\160\65" => '', "\160\66" => '', "\160\67" => '', "\x70\x38" => '', "\160\137\x72\141\164\141\x5f\162\141\x74\x61" => '', "\160\137\x70\x72\x65\144\x69\x6b\x61\x74" => "\75", "\x70\x5f\144\x65\x73\x6b\162\151\x70\163\151" => '', "\x6b\x31" => '', "\153\62" => '', "\153\x33" => '', "\x6b\x34" => '', "\x6b\65" => '', "\153\66" => '', "\x6b\x37" => '', "\153\x38" => '', "\x6b\137\162\x61\x74\141\137\x72\141\x74\x61" => '', "\x6b\137\x70\x72\145\144\151\153\x61\x74" => '', "\x6b\137\144\145\x73\x6b\x72\x69\x70\163\151" => ''];
        goto tkpgk;
        piEBX:
        $data["\x6e\151\x6c\x61\x69"] = $nilai;
        goto QvDKs;
        o6Pqr:
        $i++;
        goto VLkXj;
        ZV0Hr:
        $mapels = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto PcWq6;
        ffCI7:
        $dropMapel = $this->dropdown->getAllMapel();
        goto CNOZw;
        KPiZb:
        tx1Cj:
        goto rXDz4;
        Gxban:
        qXJfB:
        goto ZkkSS;
        Ee6AS:
        $data["\x67\x75\x72\165\137\155\x61\160\145\154"] = $guru_mapel;
        goto szpR7;
        F8CwS:
        $i = 0;
        goto x94ak;
        lMNif:
        if (!($i < count($siswas))) {
            goto dw2ir;
        }
        goto XPN0P;
        YwNlM:
        Tm_Uo:
        goto jravk;
        wwhx3:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto K308I;
        XPN0P:
        $siswa = $siswas[$i];
        goto b38Tr;
        U6ogZ:
        $nilai[$siswa->id_siswa] = $ns == null ? json_decode(json_encode($dummyNilai)) : $ns;
        goto ucSpU;
        f2djf:
        $siswas = $this->kelas->getKelasSiswa($guru->wali_kelas, $tp->id_tp, $smt->id_smt);
        goto MyIFk;
        DGJrO:
        $ret[''] = "\x50\151\154\x69\x68\x20\105\x73\153\x75\154";
        goto uhpFT;
        VRyiV:
        dw2ir:
        goto oEKvw;
        KfNx_:
        $ret[''] = "\120\x69\x6c\x69\150\40\x4d\141\160\145\x6c";
        goto ffCI7;
        hfxAu:
        $user = $this->ion_auth->user()->row();
        goto jRteO;
        td0Z9:
        $kkm = $this->rapor->getKkm($id_mapel . $guru->wali_kelas . $tp->id_tp . $smt->id_smt . $jenis);
        goto TZO85;
        tkpgk:
        $ns = $this->rapor->getNilaiHarianKelas($id_mapel, $guru->wali_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto U6ogZ;
        cjbdX:
        if (!($id_mapel != null)) {
            goto fKOot;
        }
        goto XhWBA;
        HD0Vb:
        uwGNa:
        goto chUVg;
        C3sM6:
        EQmV7:
        goto cjbdX;
        Y8ZDU:
        if ($filter == "\61") {
            goto uwGNa;
        }
        goto d84bP;
        ELjRC:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto JdzCr;
        ejWUL:
        $this->load->view("\155\x65\155\x62\x65\x72\x73\x2f\147\x75\x72\x75\57\164\x65\x6d\x70\x6c\x61\164\145\x73\x2f\x66\157\157\164\145\x72");
        goto LljA5;
        d84bP:
        $guru_mapel = '';
        goto LZtYM;
        Stgo2:
        if (!($i < count($siswas))) {
            goto qXJfB;
        }
        goto lj7GH;
        JdzCr:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto ZV0Hr;
        UFU3P:
        goto HaPSx;
        goto VRyiV;
        MyIFk:
        $nilai = [];
        goto viFym;
        chUVg:
        $guru_mapel = '';
        goto fX6Mn;
        x94ak:
        IuwQU:
        goto Stgo2;
        szpR7:
        fKOot:
        goto mf6N0;
        TZO85:
        goto PV1mA;
        goto YwNlM;
        u9ETR:
        lCjDY:
        goto MFLCi;
        rXDz4:
        jq13E:
        goto Y8ZDU;
        uhpFT:
        $dropEskul = $this->dropdown->getAllEkskul();
        goto wb6iz;
        K308I:
        $data["\x73\x6d\x74\137\x61\x63\x74\x69\x76\x65"] = $smt;
        goto KfNx_;
        DX1Y5:
        nonR6:
        goto JBFHr;
        VLkXj:
        goto IuwQU;
        goto Gxban;
        LljA5:
    }
    public function inputHarian($id_mapel, $id_kelas)
    {
        goto EGXik;
        loAau:
        foreach ($aspek as $asp) {
            goto iQ03v;
            r42fe:
            $r = $this->rapor->getKikdMapel($id_mapel . $id_kelas . $asp . $no, $tp->id_tp, $smt->id_smt);
            goto Qhggo;
            P9Waq:
            $i++;
            goto nckKK;
            iQ03v:
            $i = 0;
            goto fSVeb;
            WEUZw:
            $no = $i + 1;
            goto r42fe;
            Qhggo:
            if (!($r == null)) {
                goto rAR1I;
            }
            goto CU5nq;
            qM3Jh:
            JHC74:
            goto P9Waq;
            NRV_H:
            $arrKiKd[$asp][$id_mapel . $id_kelas . $asp . $no] = $r;
            goto qM3Jh;
            f1FMt:
            rAR1I:
            goto NRV_H;
            r6n8i:
            UwTpP:
            goto rXAKP;
            CU5nq:
            $r = $this->rapor->getKikdMapel($id_mapel . $id_kelas . $asp . $no, $tp->id_tp - 1, $smt->id_smt);
            goto f1FMt;
            nckKK:
            goto YkG3Y;
            goto N7Qfu;
            fSVeb:
            YkG3Y:
            goto Ecprn;
            N7Qfu:
            BTinq:
            goto r6n8i;
            Ecprn:
            if (!($i < 8)) {
                goto BTinq;
            }
            goto WEUZw;
            rXAKP:
        }
        goto rzmeS;
        L_6u1:
        $arrKiKd[] = [];
        goto xS1_N;
        EGXik:
        $user = $this->ion_auth->user()->row();
        goto zeCKY;
        hjyKP:
        $data = ["\165\x73\x65\x72" => $user, "\x6a\165\x64\165\x6c" => "\x4e\x69\x6c\x61\x69\x20\110\x61\162\151\141\x6e\x20\x4b\145\x6c\141\163\40", "\163\165\142\x6a\165\144\x75\154" => "\x49\x6e\x70\165\x74\x20\x4e\151\x6c\x61\x69\x20\110\x61\x72\151\141\x6e\x20\115\x61\160\x65\154\x20", "\163\145\164\164\151\156\x67" => $this->dashboard->getSetting(), "\x67\165\162\165" => $guru, "\155\141\x70\x65\x6c" => $mapel, "\x6b\x65\x6c\141\x73" => $kelas, "\163\151\x73\167\141" => $siswas, "\x6e\151\154\x61\x69" => $nilai, "\x6b\153\x6d" => $kkm];
        goto iC76T;
        ugVBS:
        $this->load->view("\155\x65\155\142\x65\162\x73\x2f\x67\x75\x72\165\57\x72\141\x70\157\162\x2f\156\151\154\x61\x69\x2f\x68\x61\x72\x69\x61\156");
        goto ORwGj;
        ISWAZ:
        nksjk:
        goto L_6u1;
        PrR4l:
        $data["\x73\x6d\164\x5f\141\143\x74\x69\x76\x65"] = $smt;
        goto UID_N;
        RU4Dk:
        $ns = $this->rapor->getNilaiHarianKelas($id_mapel, $id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto nryDQ;
        g9oM8:
        $i = 0;
        goto UiU3H;
        CUuQC:
        $aspek = ["\61", "\62"];
        goto loAau;
        y0VAE:
        aKPRO:
        goto tGVhP;
        rzmeS:
        GyY_2:
        goto R07JW;
        hCQZv:
        foreach ($mapels as $m) {
            goto jPB0D;
            qpr96:
            $mapel = ["\x69\144\x5f\155\141\160\145\x6c" => $m->id_mapel, "\156\x61\x6d\x61\x5f\x6d\141\x70\x65\154" => $m->nama_mapel];
            goto VRxgh;
            jPB0D:
            if (!($m->id_mapel === $id_mapel)) {
                goto t3gPt;
            }
            goto qpr96;
            y0ExG:
            z3kUP:
            goto zm0gd;
            HBoSa:
            xmVlZ:
            goto y0ExG;
            zJTK0:
            foreach ($m->kelas_mapel as $kls) {
                goto YOfeJ;
                i25ld:
                Fovv9:
                goto JG2i2;
                YOfeJ:
                if (!($kls->kelas === $id_kelas)) {
                    goto Fovv9;
                }
                goto Pn9Pb;
                Pn9Pb:
                $kelas = ["\151\144\137\153\x65\x6c\x61\x73" => $kls->kelas, "\x6e\141\155\141\137\x6b\145\154\141\163" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)];
                goto i25ld;
                JG2i2:
                rc5yf:
                goto X65ii;
                X65ii:
            }
            goto HBoSa;
            VRxgh:
            t3gPt:
            goto zJTK0;
            zm0gd:
        }
        goto rgWCg;
        Bt9_t:
        n65hW:
        goto ISWAZ;
        hZvtl:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto raTs3;
        iaO1O:
        goto z43fV;
        goto br70m;
        DvJ6l:
        if (!($setting != null)) {
            goto nksjk;
        }
        goto KphZw;
        B_RhY:
        $mapel = '';
        goto dqc6V;
        Xqcsz:
        $setting = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto kw_ZU;
        Mfxc2:
        $smt = $this->dashboard->getSemesterActive();
        goto W5Tpn;
        nryDQ:
        $nilai[$siswa->id_siswa] = $ns == null ? $dummyNilai : $ns;
        goto cDLT9;
        W5Tpn:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto DaJse;
        nXpCo:
        $kkm = $this->rapor->getKkm($id_mapel . $id_kelas . $tp->id_tp . $smt->id_smt . "\61");
        goto BCMTi;
        cZglJ:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto PrR4l;
        KphZw:
        if ($setting->kkm_tunggal == "\x31") {
            goto aKPRO;
        }
        goto nXpCo;
        br70m:
        LtG7A:
        goto Xqcsz;
        BCMTi:
        goto n65hW;
        goto y0VAE;
        UiU3H:
        z43fV:
        goto SIHK2;
        DaJse:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto ccS9R;
        ORwGj:
        $this->load->view("\x6d\145\155\142\x65\162\x73\x2f\x67\x75\162\165\57\x74\145\155\x70\154\141\164\x65\163\57\146\157\x6f\164\145\162");
        goto St22m;
        UID_N:
        $data["\x6b\151\x6b\144"] = $arrKiKd;
        goto fz4IL;
        tg2Ra:
        $i++;
        goto iaO1O;
        R07JW:
        cbLJn:
        goto hjyKP;
        SIHK2:
        if (!($i < count($siswas))) {
            goto LtG7A;
        }
        goto glmFQ;
        fz4IL:
        $data["\x73\x65\x74\x74\x69\x6e\x67\x5f\x72\x61\x70\157\162"] = $setting;
        goto qDVmx;
        cDLT9:
        hNP2B:
        goto tg2Ra;
        qDVmx:
        $this->load->view("\155\x65\x6d\x62\145\x72\x73\x2f\147\x75\162\x75\x2f\164\145\x6d\160\x6c\x61\x74\x65\x73\57\150\145\141\x64\x65\x72", $data);
        goto ugVBS;
        rgWCg:
        l9WOH:
        goto hZvtl;
        dqc6V:
        $kelas = [];
        goto hCQZv;
        x4fYy:
        $data["\164\160\137\x61\143\x74\x69\x76\145"] = $tp;
        goto cZglJ;
        raTs3:
        $nilai = [];
        goto g9oM8;
        iC76T:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto x4fYy;
        zeCKY:
        $tp = $this->dashboard->getTahunActive();
        goto Mfxc2;
        tGVhP:
        $kkm = $setting;
        goto Bt9_t;
        oN_zi:
        $dummyNilai = ["\160\x31" => '', "\160\x32" => '', "\x70\x33" => '', "\160\x34" => '', "\160\x35" => '', "\160\x36" => '', "\160\x37" => '', "\160\x38" => '', "\x70\x5f\162\141\164\x61\137\x72\141\164\x61" => '', "\x70\x5f\x70\162\x65\x64\x69\x6b\141\x74" => "\75", "\x70\137\144\x65\x73\153\x72\x69\160\x73\x69" => '', "\153\x31" => '', "\x6b\x32" => '', "\x6b\63" => '', "\x6b\64" => '', "\x6b\65" => '', "\x6b\x36" => '', "\153\x37" => '', "\153\70" => '', "\153\137\162\141\x74\141\x5f\x72\x61\164\141" => '', "\x6b\137\x70\x72\x65\x64\x69\x6b\x61\x74" => '', "\x6b\137\144\145\x73\153\x72\151\160\163\x69" => ''];
        goto RU4Dk;
        xS1_N:
        if (!($id_kelas != null)) {
            goto cbLJn;
        }
        goto CUuQC;
        kw_ZU:
        $kkm = null;
        goto DvJ6l;
        glmFQ:
        $siswa = $siswas[$i];
        goto oN_zi;
        ccS9R:
        $mapels = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto B_RhY;
        St22m:
    }
    public function downloadTemplateHarian($id_mapel, $id_kelas)
    {
        goto y0s0A;
        zWrB2:
        if (!($i < count($siswas))) {
            goto NN8nF;
        }
        goto AHcT6;
        y0s0A:
        $tp = $this->dashboard->getTahunActive();
        goto koWvW;
        RKT93:
        $k4 = [];
        goto Izha5;
        kKJ3Y:
        $p2 = [];
        goto gJC9N;
        AiCjl:
        $k5[] = $nilai->k5;
        goto nBwY0;
        rvrVB:
        $nisn[] = $no_induk;
        goto NlAxi;
        yf6ST:
        $isi_kik = [];
        goto dn5QU;
        TIRQG:
        GI2G9:
        goto lELRs;
        ZWdCH:
        $fileName = "\116\x69\154\141\151\x5f\x48\x61\x72\151\x61\x6e\x20" . $mapel->kode . "\40" . $kelas[$id_kelas] . "\x2e\170\x6c\163\x78";
        goto TDNg9;
        V_pZv:
        dLEo1:
        goto ontGv;
        ZKbBQ:
        $ns = $this->rapor->getNilaiHarianKelas($id_mapel, $id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto VBrwQ;
        NAsR3:
        $mapel = $this->master->getMapelById($id_mapel, true);
        goto N1Rwn;
        Iqkii:
        $p5[] = $nilai->p5;
        goto dt4J7;
        v1cNL:
        $p4[] = $nilai->p4;
        goto Iqkii;
        tahqa:
        $p1[] = $nilai->p1;
        goto WU9Xk;
        G4ySk:
        $k4[] = $nilai->k4;
        goto AiCjl;
        Ih9sy:
        $i = 0;
        goto BUxPY;
        SsFyN:
        $k7 = [];
        goto dt21J;
        ontGv:
        $kelas = $this->kelas->getNamaKelasById([$id_kelas]);
        goto NAsR3;
        VBrwQ:
        $nilais[$siswa->id_siswa] = $ns == null ? json_decode(json_encode($dummyNilai)) : $ns;
        goto xXzW_;
        vdDBz:
        FyvA6:
        goto zWrB2;
        lcc8K:
        $no_kik = [];
        goto lBRGa;
        MpUTM:
        $k3 = [];
        goto RKT93;
        xXzW_:
        X2lP2:
        goto C70Uq;
        KZUjq:
        $k1[] = $nilai->k1;
        goto ZvrXP;
        LbiuB:
        $k2 = [];
        goto MpUTM;
        CCZ6p:
        foreach ($kikds as $ki) {
            goto VJ7k7;
            Ke2RX:
            $isi_kip[] = $ki->materi_kikd;
            goto CaGT4;
            NO8C1:
            $isi_kik[] = $ki->materi_kikd;
            goto P4Np3;
            Njhav:
            $no_kip[] = $nn;
            goto g54wZ;
            ySt5m:
            $nn = substr($ki->id_kikd, -1);
            goto Njhav;
            hlKsv:
            $kode_kik[] = "\113" . $nn;
            goto NO8C1;
            b19Gw:
            $nn = substr($ki->id_kikd, -1);
            goto MgI70;
            P4Np3:
            goto pR4lB;
            goto NfeKI;
            CaGT4:
            pR4lB:
            goto tVBBq;
            g54wZ:
            $kode_kip[] = "\120" . $nn;
            goto Ke2RX;
            VJ7k7:
            if ($ki->aspek == 1) {
                goto nvlUK;
            }
            goto b19Gw;
            NfeKI:
            nvlUK:
            goto ySt5m;
            MgI70:
            $no_kik[] = $nn;
            goto hlKsv;
            tVBBq:
            ThAEW:
            goto xIMyL;
            xIMyL:
        }
        goto ktjrp;
        aj63Y:
        $p1 = [];
        goto kKJ3Y;
        TDNg9:
        $no = [];
        goto zTgIg;
        N0AJt:
        $p8[] = $nilai->p8;
        goto KZUjq;
        OAHYr:
        if (!(count($no_kik) == 0)) {
            goto u20po;
        }
        goto cFgHP;
        Izha5:
        $k5 = [];
        goto fSRMu;
        dn5QU:
        $no_kip = [];
        goto ruKrc;
        j82P4:
        if (!($i < count($siswas))) {
            goto dLEo1;
        }
        goto w0_l4;
        Jsnx_:
        $p7 = [];
        goto eWAON;
        C70Uq:
        $i++;
        goto MUl5H;
        FVcbA:
        $k7[] = $nilai->k7;
        goto jv2kb;
        axP7u:
        $p4 = [];
        goto yzCmD;
        Ez7UC:
        $p3[] = $nilai->p3;
        goto v1cNL;
        wsYq0:
        if (!(count($no_kip) == 0)) {
            goto N5qR8;
        }
        goto PIn_o;
        BUxPY:
        Qt9hC:
        goto j82P4;
        dt21J:
        $k8 = [];
        goto eZsbr;
        Y_JHz:
        $no_induk = $siswa->nisn != null ? "\x27" . $siswa->nisn : "\x27" . $siswa->nis;
        goto w3_LG;
        Jw9cB:
        $isi_kip[] = "\115\141\164\145\x72\151\40\171\141\x6e\147\40\144\151\x6e\x69\x6c\141\x69\40\x28\154\x69\150\x61\164\x20\x74\141\x62\145\154\40\x4b\101\124\101\x20\x4b\x45\122\112\101\x20\163\x65\142\x65\x6c\x61\x68\x20\x6b\141\x6e\141\156\x29";
        goto aoFfF;
        w3_LG:
        $no[] = $i + 1;
        goto rvrVB;
        AHcT6:
        $siswa = $siswas[$i];
        goto lIOR6;
        MUl5H:
        goto Qt9hC;
        goto V_pZv;
        eZsbr:
        $i = 0;
        goto vdDBz;
        dtE1C:
        $params = ["\133\x6e\x6f\135" => $no, "\133\x6e\151\163\x6e\135" => $nisn, "\x5b\x6e\x61\155\141\135" => $nama, "\133\x70\x31\135" => $p1, "\x5b\160\x32\x5d" => $p2, "\x5b\x70\63\135" => $p3, "\x5b\x70\64\135" => $p4, "\133\160\x35\x5d" => $p5, "\133\160\x36\x5d" => $p6, "\x5b\160\67\135" => $p7, "\x5b\x70\70\x5d" => $p8, "\x5b\x6b\61\135" => $k1, "\133\153\x32\135" => $k2, "\133\153\x33\x5d" => $k3, "\x5b\153\x34\135" => $k4, "\x5b\x6b\x35\135" => $k5, "\x5b\153\x36\x5d" => $k6, "\x5b\153\x37\135" => $k7, "\x5b\153\70\x5d" => $k8, "\133\156\157\160\x5d" => $no_kip, "\x5b\x6b\x6f\144\x65\x70\x5d" => $kode_kip, "\x5b\160\x65\x6e\x67\145\164\141\150\165\x61\156\135" => $isi_kip, "\x5b\156\x6f\x6b\x5d" => $no_kik, "\x5b\153\157\x64\145\153\135" => $kode_kik, "\133\x6b\x65\x74\x65\x72\141\155\160\151\154\x61\x6e\x5d" => $isi_kik, "\x7b\x6d\x61\160\x65\154\175" => $mapel->kode];
        goto SOIUO;
        dt4J7:
        $p6[] = $nilai->p6;
        goto todaH;
        aoFfF:
        N5qR8:
        goto OAHYr;
        G2YTJ:
        NN8nF:
        goto FuTQQ;
        UV45O:
        u20po:
        goto dtE1C;
        FuTQQ:
        $kikds = $this->rapor->getKikdMapelKelas($id_mapel, $id_kelas, $tp->id_tp, $smt->id_smt);
        goto lcc8K;
        E7b7_:
        $nama = [];
        goto aj63Y;
        eWAON:
        $p8 = [];
        goto I0Ce0;
        ZvrXP:
        $k2[] = $nilai->k2;
        goto W9cUQ;
        pvmv_:
        goto FyvA6;
        goto G2YTJ;
        SOIUO:
        PhpExcelTemplator::outputToFile($template, $fileName, $params);
        goto KWxzZ;
        I0Ce0:
        $k1 = [];
        goto LbiuB;
        jo8oa:
        $p6 = [];
        goto Jsnx_;
        w0_l4:
        $siswa = $siswas[$i];
        goto gOVP0;
        W9cUQ:
        $k3[] = $nilai->k3;
        goto G4ySk;
        PIn_o:
        $no_kip[] = 1;
        goto nFPhM;
        lELRs:
        $i++;
        goto pvmv_;
        WU9Xk:
        $p2[] = $nilai->p2;
        goto Ez7UC;
        TgwHQ:
        $isi_kip = [];
        goto CCZ6p;
        gJC9N:
        $p3 = [];
        goto axP7u;
        lIOR6:
        $nilai = $nilais[$siswa->id_siswa];
        goto Y_JHz;
        N1Rwn:
        $template = "\56\57\165\x70\x6c\x6f\x61\x64\x73\57\x69\155\160\157\162\x74\x2f\x66\x6f\x72\155\141\x74\57\x74\145\155\160\154\x61\164\145\137\150\141\x72\151\x61\x6e\56\x78\154\163\170";
        goto ZWdCH;
        gOVP0:
        $dummyNilai = ["\160\61" => '', "\x70\62" => '', "\x70\63" => '', "\160\64" => '', "\160\65" => '', "\160\66" => '', "\x70\x37" => '', "\160\70" => '', "\x6b\61" => '', "\x6b\x32" => '', "\x6b\x33" => '', "\153\64" => '', "\x6b\65" => '', "\x6b\x36" => '', "\x6b\67" => '', "\x6b\70" => ''];
        goto ZKbBQ;
        jv2kb:
        $k8[] = $nilai->k8;
        goto TIRQG;
        yzCmD:
        $p5 = [];
        goto jo8oa;
        todaH:
        $p7[] = $nilai->p7;
        goto N0AJt;
        zTgIg:
        $nisn = [];
        goto E7b7_;
        HdJX2:
        $nilais = [];
        goto Ih9sy;
        cFgHP:
        $no_kik[] = 1;
        goto BgQvr;
        bQAoj:
        $isi_kik[] = "\120\162\141\x6b\x74\151\x6b\x2f\x50\x6f\162\x74\157\x66\157\154\151\157\x2f\120\x72\157\x79\145\153\x20\171\x61\156\147\40\144\x69\156\151\x6c\x61\x69\40\50\154\x69\150\141\x74\x20\x74\141\142\x65\x6c\x20\x4b\x41\x54\101\40\x4b\x45\122\112\101\x20\x73\145\x62\x65\154\x61\150\40\153\x61\x6e\x61\x6e\x29";
        goto UV45O;
        nFPhM:
        $kode_kip[] = "\120\61";
        goto Jw9cB;
        ktjrp:
        h1yaW:
        goto wsYq0;
        BgQvr:
        $kode_kik[] = "\113\x31";
        goto bQAoj;
        JoRH4:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto HdJX2;
        lBRGa:
        $kode_kik = [];
        goto yf6ST;
        NlAxi:
        $nama[] = $siswa->nama;
        goto tahqa;
        fSRMu:
        $k6 = [];
        goto SsFyN;
        nBwY0:
        $k6[] = $nilai->k6;
        goto FVcbA;
        koWvW:
        $smt = $this->dashboard->getSemesterActive();
        goto JoRH4;
        ruKrc:
        $kode_kip = [];
        goto TgwHQ;
        KWxzZ:
    }
    public function uploadHarian($id_mapel, $id_kelas)
    {
        goto ANjsg;
        BEEI2:
        $error = $this->upload->display_errors();
        goto AWJRU;
        I75F9:
        foreach ($kikdk as $kik) {
            goto uKvXh;
            oIh09:
            vAvXd:
            goto Dqsaj;
            uKvXh:
            if (!($kik != null)) {
                goto O524U;
            }
            goto UoqvW;
            UoqvW:
            $this->db->replace("\162\x61\x70\157\162\137\x6b\151\153\144", $kik);
            goto ZU_2l;
            ZU_2l:
            O524U:
            goto oIh09;
            Dqsaj:
        }
        goto VL2Ux;
        c1y51:
        unlink($file);
        goto G_vN7;
        nfXTj:
        yy_xG:
        goto iMVXs;
        tr8sx:
        echo json_encode($updated);
        goto FrpfQ;
        Wx7zx:
        $this->db->trans_complete();
        goto tr8sx;
        ANjsg:
        $config["\165\160\x6c\x6f\x61\144\137\x70\x61\164\150"] = "\56\x2f\165\160\x6c\x6f\x61\x64\x73\x2f\x69\155\160\x6f\x72\x74\x2f";
        goto RCUgL;
        ylJUN:
        if (!$this->upload->do_upload("\165\x70\154\157\x61\x64\x5f\146\151\154\x65")) {
            goto ouhmW;
        }
        goto NuNTH;
        PCjaM:
        G5hv_:
        goto OO32O;
        FrpfQ:
        goto yy_xG;
        goto h2r3o;
        r9bIo:
        GC_p1:
        goto lkZVk;
        kEX3c:
        pOOyO:
        goto I75F9;
        EOj2b:
        $smt = $this->dashboard->getSemesterActive();
        goto tM_Ih;
        PeoNv:
        die;
        goto nfXTj;
        N8wWr:
        foreach ($siswas as $siswa) {
            goto NuAIP;
            yYdxh:
            if (!($nok != '')) {
                goto SxTPQ;
            }
            goto CEdPC;
            GigH9:
            $readed++;
            goto cobZU;
            aB8yf:
            $kikdp[] = ["\x69\144\137\153\x69\153\144" => $id_mapel . $id_kelas . "\x31" . $nop, "\x69\144\137\x6d\x61\160\145\154\137\153\145\x6c\x61\163" => $id_mapel . $id_kelas, "\141\163\x70\145\153" => 1, "\x69\x64\x5f\x74\160" => $tp->id_tp, "\151\144\137\x73\x6d\x74" => $smt->id_smt, "\x6d\141\x74\145\x72\151\137\153\151\x6b\x64" => $sheetData[$i][22] != null ? strip_tags($sheetData[$i][22]) : ''];
            goto c4dLW;
            lnymi:
            Kt17v:
            goto jFE70;
            CEdPC:
            $kikdk[] = ["\x69\144\137\153\151\153\144" => $id_mapel . $id_kelas . "\62" . $nok, "\x69\x64\137\155\x61\x70\x65\x6c\137\153\145\154\141\163" => $id_mapel . $id_kelas, "\141\x73\160\145\153" => 2, "\151\x64\137\x74\x70" => $tp->id_tp, "\151\144\x5f\163\x6d\164" => $smt->id_smt, "\155\x61\x74\145\x72\151\x5f\153\x69\x6b\144" => $sheetData[$i][26] != null ? strip_tags($sheetData[$i][26]) : ''];
            goto gyG4o;
            aV53B:
            if (!($nop != '')) {
                goto o2_Q6;
            }
            goto aB8yf;
            rE2KD:
            $datas[] = ["\151\144\x5f\156\x69\154\141\x69\137\x68\141\x72\151\141\x6e" => $id_mapel . $id_kelas . $siswa->id_siswa . $tp->id_tp . $smt->id_smt, "\151\144\x5f\163\x69\x73\x77\141" => $siswa->id_siswa, "\x69\x64\137\x6d\x61\x70\x65\154" => $id_mapel, "\151\x64\137\153\145\x6c\x61\163" => $id_kelas, "\x69\144\x5f\164\160" => $tp->id_tp, "\x69\144\137\x73\x6d\x74" => $smt->id_smt, "\160\61" => $sheetData[$i][3], "\160\62" => $sheetData[$i][4], "\x70\63" => $sheetData[$i][5], "\160\64" => $sheetData[$i][6], "\160\x35" => $sheetData[$i][7], "\160\x36" => $sheetData[$i][8], "\160\67" => $sheetData[$i][9], "\160\70" => $sheetData[$i][10], "\153\61" => $sheetData[$i][11], "\153\62" => $sheetData[$i][12], "\x6b\x33" => $sheetData[$i][13], "\153\64" => $sheetData[$i][14], "\153\65" => $sheetData[$i][15], "\x6b\66" => $sheetData[$i][16], "\x6b\67" => $sheetData[$i][17], "\153\x38" => $sheetData[$i][18]];
            goto lnymi;
            cobZU:
            $nisn = $sheetData[$i][1];
            goto MMWlN;
            c4dLW:
            o2_Q6:
            goto P0E_6;
            O76kX:
            Eu7iO:
            goto f0o68;
            esbPM:
            goto gE9jA;
            goto HobJ1;
            JuImU:
            if (!($no_induk == $nisn)) {
                goto Kt17v;
            }
            goto rE2KD;
            P0E_6:
            $nok = $sheetData[$i][24];
            goto yYdxh;
            gyG4o:
            SxTPQ:
            goto WK_kC;
            tMRdj:
            CArD_:
            goto tjvq0;
            B8X1A:
            gE9jA:
            goto R151k;
            jFE70:
            $nop = $sheetData[$i][20];
            goto aV53B;
            MMWlN:
            $no_induk = $siswa->nisn != null ? "\47" . $siswa->nisn : "\47" . $siswa->nis;
            goto JuImU;
            R151k:
            if (!($i < count($sheetData))) {
                goto uP9c2;
            }
            goto o0qzg;
            HobJ1:
            uP9c2:
            goto tMRdj;
            f0o68:
            $i++;
            goto esbPM;
            WK_kC:
            RPCo4:
            goto O76kX;
            NuAIP:
            $i = 1;
            goto B8X1A;
            o0qzg:
            if (!($sheetData[$i][0] != null)) {
                goto RPCo4;
            }
            goto GigH9;
            tjvq0:
        }
        goto tCnP8;
        DyIdO:
        $kikdp = [];
        goto e5KvG;
        SZsgJ:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto BdTd1;
        G_vN7:
        $updated = 0;
        goto wkmdT;
        xVFIB:
        foreach ($datas as $data) {
            goto kV2qx;
            FX1Xg:
            if (!$update) {
                goto weHlf;
            }
            goto E0DRj;
            xy6jY:
            to4mO:
            goto RjrJD;
            kV2qx:
            $update = $this->db->replace("\162\x61\x70\x6f\x72\137\156\x69\x6c\x61\x69\137\x68\x61\x72\x69\141\x6e", $data);
            goto FX1Xg;
            E0DRj:
            $updated++;
            goto hEIJN;
            hEIJN:
            weHlf:
            goto xy6jY;
            RjrJD:
        }
        goto PCjaM;
        tCnP8:
        SRjL2:
        goto c1y51;
        lkZVk:
        $tp = $this->dashboard->getTahunActive();
        goto EOj2b;
        BMwDf:
        $config["\x6d\141\170\x5f\163\x69\x7a\145"] = 2048;
        goto P1iAb;
        BdTd1:
        $datas = [];
        goto DyIdO;
        P1iAb:
        $config["\x65\156\x63\162\171\x70\x74\137\156\141\x6d\145"] = true;
        goto jdTEi;
        h2r3o:
        ouhmW:
        goto BEEI2;
        jdTEi:
        $this->load->library("\165\160\x6c\x6f\x61\x64", $config);
        goto ylJUN;
        ZIWGC:
        $ext = $this->upload->data("\146\151\x6c\145\x5f\x65\x78\x74");
        goto mFHtd;
        tgEAV:
        nGuch:
        goto r9bIo;
        OO32O:
        foreach ($kikdp as $kip) {
            goto F6sbd;
            F6sbd:
            if (!($kip != null)) {
                goto Lpf8H;
            }
            goto TwEH_;
            TwEH_:
            $this->db->replace("\x72\x61\x70\x6f\x72\x5f\153\x69\153\x64", $kip);
            goto v9u_x;
            v9u_x:
            Lpf8H:
            goto e33ph;
            e33ph:
            dUYx4:
            goto WIHug;
            WIHug:
        }
        goto kEX3c;
        mFHtd:
        switch ($ext) {
            case "\x2e\170\x6c\x73\x78":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto GC_p1;
            case "\x2e\170\154\163":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto GC_p1;
            case "\x2e\x63\x73\166":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto GC_p1;
            default:
                echo "\165\x6e\x6b\156\157\x77\156\40\146\151\154\x65\x20\145\170\164";
                die;
        }
        goto tgEAV;
        i6EUr:
        $readed = 0;
        goto N8wWr;
        Zncj9:
        $spreadsheet = $reader->load($file);
        goto SZsgJ;
        AWJRU:
        echo $error;
        goto PeoNv;
        tM_Ih:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto Zncj9;
        NuNTH:
        $file = $this->upload->data("\146\165\x6c\154\x5f\160\141\164\150");
        goto ZIWGC;
        VL2Ux:
        xrYlU:
        goto Wx7zx;
        RCUgL:
        $config["\141\154\x6c\x6f\167\145\x64\137\164\171\160\145\163"] = "\170\154\163\x7c\170\x6c\x73\x78\x7c\143\x73\x76";
        goto BMwDf;
        wkmdT:
        $this->db->trans_start();
        goto xVFIB;
        e5KvG:
        $kikdk = [];
        goto i6EUr;
        iMVXs:
    }
    public function importHarian()
    {
        goto J1Pha;
        FC_Uo:
        foreach ((array) $posts as $data) {
            goto a23xF;
            a23xF:
            $update = $this->db->replace("\162\141\x70\x6f\x72\137\156\x69\x6c\x61\151\137\150\x61\x72\x69\141\x6e", $data);
            goto sB9dZ;
            I7vJL:
            e2ogu:
            goto wMVhZ;
            iwroZ:
            pRG60:
            goto I7vJL;
            sB9dZ:
            if (!$update) {
                goto pRG60;
            }
            goto kSeKg;
            kSeKg:
            $updated++;
            goto iwroZ;
            wMVhZ:
        }
        goto lfZyT;
        cjGGw:
        $data["\x75\160\x64\x61\164\145\x64"] = $updated;
        goto uDWx2;
        onrXY:
        $this->db->trans_start();
        goto FC_Uo;
        RsPh8:
        $updated = 0;
        goto onrXY;
        oQ5bA:
        $this->db->trans_complete();
        goto cjGGw;
        lfZyT:
        Vvqfw:
        goto oQ5bA;
        uDWx2:
        $this->output_json($data);
        goto kGFU5;
        J1Pha:
        $posts = $this->input->post("\163\151\163\167\141", true);
        goto RsPh8;
        kGFU5:
    }
    public function inputPts($id_mapel, $id_kelas)
    {
        goto qJVtb;
        Xuobj:
        $siswa = $siswas[$i];
        goto s8oWF;
        s8oWF:
        $dummyNilai = ["\x70\x31" => '', "\x70\x32" => '', "\160\63" => '', "\160\64" => '', "\160\65" => '', "\x70\66" => '', "\x70\67" => '', "\x70\x38" => '', "\x70\x5f\162\x61\x74\141\137\x72\x61\164\x61" => '', "\160\137\x70\162\145\144\151\x6b\141\x74" => "\75", "\x70\137\x64\145\163\x6b\x72\x69\x70\x73\x69" => '', "\x6b\61" => '', "\153\x32" => '', "\153\63" => '', "\153\x34" => '', "\x6b\x35" => '', "\x6b\66" => '', "\153\67" => '', "\153\70" => '', "\x6b\x5f\x72\x61\x74\x61\137\x72\x61\164\x61" => '', "\153\137\x70\x72\x65\x64\x69\x6b\141\x74" => '', "\153\x5f\144\145\x73\153\x72\x69\160\163\x69" => ''];
        goto RnSh5;
        hnx9b:
        goto LwjBd;
        goto IH0Ho;
        QqOdB:
        foreach ($mapels as $m) {
            goto PQSFT;
            dgId5:
            wwta2:
            goto fAziu;
            mDb2r:
            dX2y2:
            goto dgId5;
            w7Cvm:
            MMM2m:
            goto CEsc1;
            vejQp:
            $mapel = ["\x69\x64\x5f\155\141\160\145\154" => $m->id_mapel, "\x6e\141\155\141\x5f\155\x61\x70\x65\x6c" => $m->nama_mapel];
            goto w7Cvm;
            CEsc1:
            foreach ($m->kelas_mapel as $kls) {
                goto PtbUL;
                iquih:
                PbWOr:
                goto XmPAO;
                UNbLP:
                $kelas = ["\x69\144\x5f\x6b\145\154\x61\163" => $kls->kelas, "\156\141\x6d\x61\x5f\153\x65\154\141\x73" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)];
                goto R47Ja;
                R47Ja:
                YD0dD:
                goto iquih;
                PtbUL:
                if (!($kls->kelas === $id_kelas)) {
                    goto YD0dD;
                }
                goto UNbLP;
                XmPAO:
            }
            goto mDb2r;
            PQSFT:
            if (!($m->id_mapel === $id_mapel)) {
                goto MMM2m;
            }
            goto vejQp;
            fAziu:
        }
        goto PFIvC;
        KAYMD:
        goto ZJZXC;
        goto UTzRK;
        Z_ROr:
        if (!($setting != null)) {
            goto B6JDO;
        }
        goto zqEKw;
        zqEKw:
        if ($setting->kkm_tunggal == "\x31") {
            goto Jk9_O;
        }
        goto qvzYu;
        XjmzW:
        $data["\x74\160\x5f\141\x63\164\151\166\145"] = $tp;
        goto hc_eq;
        DkenK:
        $this->load->view("\x6d\145\x6d\x62\x65\x72\x73\57\147\165\x72\x75\x2f\x74\x65\155\160\x6c\141\164\145\163\x2f\146\x6f\157\x74\x65\x72");
        goto Dtva2;
        E8_Pg:
        $kkm = null;
        goto Z_ROr;
        EvBIq:
        $data["\163\155\x74\137\141\143\x74\151\x76\145"] = $smt;
        goto bt8_k;
        qRGTf:
        $nilai = [];
        goto dcdRK;
        lHYtb:
        $kkm = $setting;
        goto aQaFi;
        df1lj:
        $smt = $this->dashboard->getSemesterActive();
        goto c2wWx;
        xrRBU:
        $nilai[$siswa->id_siswa] = $ns == null ? $dummyNilai : $ns;
        goto AWv4g;
        yBu0N:
        ZJZXC:
        goto pIfpG;
        s57PA:
        $setting = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto E8_Pg;
        UTzRK:
        S1rON:
        goto s57PA;
        Ycs3y:
        $this->load->view("\155\x65\x6d\142\x65\x72\163\x2f\147\x75\x72\x75\57\x74\145\155\x70\154\141\x74\145\x73\x2f\x68\x65\x61\x64\145\162", $data);
        goto wv2av;
        Ibiuh:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto XjmzW;
        QBE8D:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto qRGTf;
        wv2av:
        $this->load->view("\x6d\x65\x6d\142\145\162\x73\57\147\x75\162\x75\57\162\141\x70\x6f\162\x2f\x6e\x69\x6c\141\151\57\x70\164\163");
        goto DkenK;
        bkTGR:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto iMXhx;
        IH0Ho:
        Jk9_O:
        goto lHYtb;
        LJwPj:
        B6JDO:
        goto b1aCk;
        qvzYu:
        $kkm = $this->rapor->getKkm($id_mapel . $id_kelas . $tp->id_tp . $smt->id_smt . "\x31");
        goto hnx9b;
        dcdRK:
        $i = 0;
        goto yBu0N;
        RnSh5:
        $ns = $this->rapor->getNilaiPtsKelas($id_mapel, $id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto xrRBU;
        c2wWx:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto bkTGR;
        kohvg:
        $i++;
        goto KAYMD;
        bt8_k:
        $data["\x73\x65\164\164\151\x6e\147\137\162\141\160\x6f\x72"] = $setting;
        goto Ycs3y;
        aQaFi:
        LwjBd:
        goto LJwPj;
        PFIvC:
        gocJ_:
        goto QBE8D;
        qJVtb:
        $user = $this->ion_auth->user()->row();
        goto lAy01;
        iMXhx:
        $mapels = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto E5z32;
        hc_eq:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto EvBIq;
        b1aCk:
        $data = ["\165\x73\x65\162" => $user, "\152\165\144\165\x6c" => "\116\151\x6c\141\151\x20\x50\x54\123\x20\x4b\145\x6c\141\163\40", "\x73\x75\x62\152\x75\x64\165\154" => "\x49\x6e\160\165\164\x20\116\151\x6c\141\151\x20\120\124\x53\40\x4d\x61\160\x65\x6c\x20", "\163\145\x74\164\151\x6e\147" => $this->dashboard->getSetting(), "\x67\x75\162\165" => $guru, "\155\x61\x70\x65\154" => $mapel, "\x6b\x65\154\141\163" => $kelas, "\163\151\163\167\141" => $siswas, "\x6e\151\x6c\141\151" => $nilai, "\153\153\155" => $kkm];
        goto Ibiuh;
        AWv4g:
        ltXQq:
        goto kohvg;
        pIfpG:
        if (!($i < count($siswas))) {
            goto S1rON;
        }
        goto Xuobj;
        E5z32:
        $mapel = '';
        goto kTsn3;
        lAy01:
        $tp = $this->dashboard->getTahunActive();
        goto df1lj;
        kTsn3:
        $kelas = [];
        goto QqOdB;
        Dtva2:
    }
    public function downloadTemplatePts($id_mapel, $id_kelas)
    {
        goto qz1S1;
        FvL8U:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto ohIau;
        hY1j9:
        $nilai = $nilais[$siswa->id_siswa];
        goto vWb5U;
        x3xfM:
        $p1 = [];
        goto wBsxC;
        LFJA2:
        goto ThUu2;
        goto O4W_6;
        bbMDc:
        $nilais[$siswa->id_siswa] = $ns == null ? json_decode(json_encode($dummyNilai)) : $ns;
        goto Vq4tV;
        emz05:
        PhpExcelTemplator::outputToFile($template, $fileName, $params);
        goto gtGfr;
        DoZ2H:
        if (!($i < count($siswas))) {
            goto HWmDn;
        }
        goto lIsOi;
        omiqo:
        $i = 0;
        goto FILfh;
        E0rjT:
        $i++;
        goto LFJA2;
        O4W_6:
        ZEozM:
        goto B8h6h;
        jo6YX:
        $smt = $this->dashboard->getSemesterActive();
        goto FvL8U;
        F1c_H:
        $fileName = "\116\x69\x6c\141\x69\137\x50\x54\123\40" . $mapel->kode . "\40" . $kelas[$id_kelas] . "\56\170\154\163\x78";
        goto qvLIE;
        oJId_:
        goto Nwucy;
        goto jmJK9;
        qLtz5:
        $nisn[] = $no_induk;
        goto eGmla;
        m8qS8:
        $p1[] = $nilai->nilai;
        goto V8N3X;
        lrBP9:
        $siswa = $siswas[$i];
        goto hY1j9;
        UFu4w:
        $no[] = $i + 1;
        goto qLtz5;
        I3UuH:
        $nisn = [];
        goto XQXH7;
        jmJK9:
        HWmDn:
        goto VPErr;
        vWb5U:
        $no_induk = $siswa->nisn != null ? "\x27" . $siswa->nisn : "\x27" . $siswa->nis;
        goto UFu4w;
        B8h6h:
        $params = ["\173\155\x61\x70\145\154\175" => $mapel->kode, "\x7b\x6b\x65\x6c\x61\x73\x7d" => $kelas[$id_kelas], "\x5b\x6e\x6f\135" => $no, "\x5b\156\151\x73\156\135" => $nisn, "\133\x6e\x61\x6d\x61\x5d" => $nama, "\x5b\x6e\x69\154\x61\151\135" => $p1];
        goto emz05;
        T5JGQ:
        ThUu2:
        goto jrQHu;
        Vq4tV:
        FDGbD:
        goto mKHqY;
        qvLIE:
        $no = [];
        goto I3UuH;
        V8N3X:
        Qgoyz:
        goto E0rjT;
        VPErr:
        $kelas = $this->kelas->getNamaKelasById([$id_kelas]);
        goto s8_Oy;
        ohIau:
        $nilais = [];
        goto omiqo;
        jrQHu:
        if (!($i < count($siswas))) {
            goto ZEozM;
        }
        goto lrBP9;
        s8_Oy:
        $mapel = $this->master->getMapelById($id_mapel, true);
        goto GypMs;
        eGmla:
        $nama[] = $siswa->nama;
        goto m8qS8;
        wBsxC:
        $i = 0;
        goto T5JGQ;
        GypMs:
        $template = "\56\x2f\165\160\x6c\x6f\141\144\163\x2f\x69\x6d\160\157\x72\164\x2f\146\x6f\162\155\141\164\57\x74\x65\155\x70\x6c\x61\x74\145\137\x70\x74\163\x2e\170\x6c\163\x78";
        goto F1c_H;
        hZErO:
        $dummyNilai = ["\156\x69\154\x61\151" => ''];
        goto v1gfG;
        qz1S1:
        $tp = $this->dashboard->getTahunActive();
        goto jo6YX;
        mKHqY:
        $i++;
        goto oJId_;
        FILfh:
        Nwucy:
        goto DoZ2H;
        XQXH7:
        $nama = [];
        goto x3xfM;
        v1gfG:
        $ns = $this->rapor->getNilaiPtsKelas($id_mapel, $id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto bbMDc;
        lIsOi:
        $siswa = $siswas[$i];
        goto hZErO;
        gtGfr:
    }
    public function uploadPts($id_mapel, $id_kelas)
    {
        goto Yez2l;
        r9Ybc:
        $config["\145\x6e\143\x72\171\160\164\x5f\x6e\x61\x6d\x65"] = true;
        goto crHc7;
        vL3to:
        XBvSh:
        goto qoh86;
        bA9br:
        unlink($file);
        goto ZxDvS;
        HG1A2:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto UXfG4;
        OEjwk:
        $ext = $this->upload->data("\146\151\154\x65\137\145\170\x74");
        goto tV6ZU;
        ekYuR:
        goto V0OEu;
        goto ey8xM;
        Hbp3p:
        LPBQy:
        goto nt8zJ;
        ey8xM:
        oEftF:
        goto RJ_4t;
        zgWVb:
        $config["\155\141\x78\x5f\x73\x69\172\145"] = 2048;
        goto r9Ybc;
        Yez2l:
        $config["\165\160\x6c\x6f\141\x64\137\x70\x61\x74\150"] = "\x2e\57\165\160\x6c\x6f\x61\x64\163\57\151\155\x70\157\x72\x74\57";
        goto TXKY0;
        fwJaE:
        echo $error;
        goto It5DV;
        l8MRm:
        if (!$this->upload->do_upload("\x75\160\154\157\x61\144\137\146\x69\x6c\x65")) {
            goto oEftF;
        }
        goto gY327;
        TXKY0:
        $config["\x61\154\154\157\x77\x65\144\x5f\x74\x79\160\145\163"] = "\x78\x6c\163\x7c\170\x6c\x73\x78\174\x63\163\x76";
        goto zgWVb;
        gY327:
        $file = $this->upload->data("\x66\x75\x6c\154\137\160\141\x74\150");
        goto OEjwk;
        LHSDb:
        $tp = $this->dashboard->getTahunActive();
        goto c6Wzz;
        c6Wzz:
        $smt = $this->dashboard->getSemesterActive();
        goto HG1A2;
        XqewA:
        $datas = [];
        goto XNmvi;
        ZxDvS:
        $updated = 0;
        goto eDU0v;
        UXfG4:
        $spreadsheet = $reader->load($file);
        goto B6tng;
        M7uIR:
        V0OEu:
        goto ub6o1;
        qoh86:
        L9gd_:
        goto LHSDb;
        AGu6l:
        xwL7S:
        goto bA9br;
        B6tng:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto XqewA;
        tV6ZU:
        switch ($ext) {
            case "\56\x78\x6c\x73\x78":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto L9gd_;
            case "\56\170\154\163":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto L9gd_;
            case "\56\143\163\166":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto L9gd_;
            default:
                echo "\x75\156\x6b\x6e\157\x77\x6e\x20\x66\x69\x6c\145\x20\145\170\x74";
                die;
        }
        goto vL3to;
        It5DV:
        die;
        goto M7uIR;
        XNmvi:
        $readed = 0;
        goto mIIC5;
        eDU0v:
        foreach ($datas as $data) {
            goto eg1Vm;
            GYPUL:
            CpjsV:
            goto l41KN;
            eg1Vm:
            $update = $this->db->replace("\162\x61\160\157\x72\x5f\x6e\151\x6c\x61\151\137\x70\x74\x73", $data);
            goto SMLh3;
            l41KN:
            IYXlj:
            goto EpHKn;
            DGZ3M:
            $updated++;
            goto GYPUL;
            SMLh3:
            if (!$update) {
                goto CpjsV;
            }
            goto DGZ3M;
            EpHKn:
        }
        goto Hbp3p;
        mIIC5:
        foreach ($siswas as $siswa) {
            goto fAy1q;
            EXvZL:
            foQqe:
            goto dXMdd;
            IxCMT:
            $datas[] = ["\151\x64\137\156\x69\x6c\141\x69\x5f\160\164\x73" => $id_mapel . $id_kelas . $siswa->id_siswa . $tp->id_tp . $smt->id_smt, "\151\144\137\x73\151\163\x77\141" => $siswa->id_siswa, "\151\x64\x5f\x6d\x61\x70\145\x6c" => $id_mapel, "\x69\x64\137\153\145\x6c\x61\163" => $id_kelas, "\x6e\x69\x6c\141\151" => $sheetData[$i][3]];
            goto zp9_e;
            fAy1q:
            $i = 1;
            goto HJN0O;
            buT1f:
            $nisn = $sheetData[$i][1];
            goto mEVkc;
            HJN0O:
            muWsz:
            goto i5UGq;
            dXMdd:
            $i++;
            goto Bkkdj;
            i5UGq:
            if (!($i < count($sheetData))) {
                goto rhUyy;
            }
            goto OzFvt;
            Bkkdj:
            goto muWsz;
            goto XEH03;
            ewDx6:
            s5XDC:
            goto EXvZL;
            XEH03:
            rhUyy:
            goto Em1zg;
            zp9_e:
            G3ozS:
            goto ewDx6;
            zvx3b:
            $readed++;
            goto buT1f;
            Em1zg:
            tcxrB:
            goto uOolg;
            jzT0u:
            if (!($no_induk == $nisn)) {
                goto G3ozS;
            }
            goto IxCMT;
            mEVkc:
            $no_induk = $siswa->nisn != null ? "\x27" . $siswa->nisn : "\47" . $siswa->nis;
            goto jzT0u;
            OzFvt:
            if (!($sheetData[$i][0] != null)) {
                goto s5XDC;
            }
            goto zvx3b;
            uOolg:
        }
        goto AGu6l;
        nt8zJ:
        echo json_encode($updated);
        goto ekYuR;
        crHc7:
        $this->load->library("\165\x70\x6c\x6f\141\x64", $config);
        goto l8MRm;
        RJ_4t:
        $error = $this->upload->display_errors();
        goto fwJaE;
        ub6o1:
    }
    public function importPts()
    {
        goto nD2Wa;
        siySP:
        $this->db->trans_start();
        goto L2_M6;
        hGF0D:
        yLs0y:
        goto P5z5W;
        P5z5W:
        $this->db->trans_complete();
        goto WRW4G;
        L2_M6:
        foreach ($inputs as $data) {
            goto XqxGI;
            ePy2v:
            $updated++;
            goto DvE1i;
            XqxGI:
            $update = $this->db->replace("\x72\141\x70\157\162\x5f\156\151\154\x61\151\x5f\x70\x74\x73", $data);
            goto cQ9Gv;
            QuV5L:
            kC1Ae:
            goto Bzimy;
            DvE1i:
            Oc1zK:
            goto QuV5L;
            cQ9Gv:
            if (!$update) {
                goto Oc1zK;
            }
            goto ePy2v;
            Bzimy:
        }
        goto hGF0D;
        nD2Wa:
        $inputs = $this->input->post("\x73\x69\163\167\141", true);
        goto w8S6S;
        w8S6S:
        $updated = 0;
        goto siySP;
        WRW4G:
        echo json_encode($updated);
        goto d2DOD;
        d2DOD:
    }
    public function inputPas($id_mapel, $id_kelas)
    {
        goto CvuHF;
        JDTbh:
        $i++;
        goto J809o;
        u2TOG:
        RvKtC:
        goto RAOdS;
        EE6nK:
        $this->load->view("\155\x65\x6d\142\x65\x72\x73\57\147\165\x72\x75\x2f\162\x61\x70\157\x72\x2f\156\151\x6c\141\x69\57\x70\x61\x73");
        goto F1Giw;
        sRZaA:
        $kkm = null;
        goto urwbF;
        OuudJ:
        $tp = $this->dashboard->getTahunActive();
        goto jB8MC;
        ANZer:
        $kelas = [];
        goto HCPEn;
        xL7a6:
        berOg:
        goto oVpGq;
        Ml6iX:
        $data["\x73\155\164\137\141\x63\164\151\166\145"] = $smt;
        goto T4P_3;
        HCPEn:
        foreach ($mapels as $m) {
            goto qcwU5;
            LdiXY:
            P3woc:
            goto FrmaT;
            ZqKNg:
            $mapel = ["\x69\x64\137\x6d\x61\x70\x65\x6c" => $m->id_mapel, "\x6e\x61\155\x61\x5f\155\x61\x70\145\x6c" => $m->nama_mapel];
            goto Oib5Y;
            c0yDU:
            G06BC:
            goto LdiXY;
            Oib5Y:
            fKW8_:
            goto TnNpn;
            qcwU5:
            if (!($m->id_mapel === $id_mapel)) {
                goto fKW8_;
            }
            goto ZqKNg;
            TnNpn:
            foreach ($m->kelas_mapel as $kls) {
                goto Kkeva;
                q9ifX:
                kc5E8:
                goto PZCh4;
                csVWG:
                $kelas = ["\151\144\x5f\x6b\145\x6c\141\163" => $kls->kelas, "\x6e\x61\x6d\x61\x5f\153\x65\154\141\163" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)];
                goto q9ifX;
                Kkeva:
                if (!($kls->kelas === $id_kelas)) {
                    goto kc5E8;
                }
                goto csVWG;
                PZCh4:
                Qlge_:
                goto sdAgg;
                sdAgg:
            }
            goto c0yDU;
            FrmaT:
        }
        goto kPk0K;
        Hm1iU:
        $mapels = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto cxRiQ;
        B6jju:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto Hm1iU;
        f9u_S:
        if (!($i < count($siswas))) {
            goto rqwXN;
        }
        goto XvfYk;
        cKZ4A:
        $setting = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto sRZaA;
        ZbYHl:
        $kkm = $this->rapor->getKkm($id_mapel . $id_kelas . $tp->id_tp . $smt->id_smt . "\61");
        goto dgok6;
        cxRiQ:
        $mapel = '';
        goto ANZer;
        T4P_3:
        $this->load->view("\x6d\x65\x6d\x62\x65\x72\163\57\147\x75\x72\165\x2f\164\145\x6d\160\x6c\141\x74\145\x73\x2f\x68\145\x61\x64\x65\x72", $data);
        goto EE6nK;
        F1Giw:
        $this->load->view("\155\145\155\142\x65\x72\x73\57\x67\165\162\x75\x2f\164\x65\x6d\160\x6c\141\x74\145\x73\57\x66\x6f\x6f\x74\145\162");
        goto Dt7uw;
        J809o:
        goto M9BXD;
        goto PNxx6;
        OzC6U:
        $nilai = [];
        goto VSFCB;
        RdBsY:
        $data = ["\x75\163\x65\x72" => $user, "\152\x75\144\x75\x6c" => "\116\x69\154\x61\151\x20\x41\153\150\x69\162\x20\x4b\145\x6c\x61\x73\40", "\163\x75\x62\x6a\x75\x64\x75\x6c" => "\111\x6e\160\x75\164\x20\116\151\154\141\x69\x20\x41\153\150\151\x72\x20\115\141\x70\x65\x6c\40", "\x73\145\164\164\151\156\x67" => $this->dashboard->getSetting(), "\x67\x75\162\165" => $guru, "\x6d\x61\160\145\x6c" => $mapel, "\153\x65\x6c\141\163" => $kelas, "\163\x69\163\167\141" => $siswas, "\x6e\x69\154\x61\151" => $nilai, "\153\x6b\x6d" => $kkm, "\163\145\x74\x74\x69\156\x67\x5f\x72\141\x70\x6f\162" => $setting];
        goto evqHW;
        N3EjO:
        $nilai[$siswa->id_siswa] = $ns == null ? $dummyNilai : $ns;
        goto IXx8D;
        urwbF:
        if (!($setting != null)) {
            goto LTUp4;
        }
        goto MBIl3;
        oF2CX:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto B6jju;
        jB8MC:
        $smt = $this->dashboard->getSemesterActive();
        goto oF2CX;
        IXx8D:
        v0LYR:
        goto JDTbh;
        il0jg:
        $ns = $this->rapor->getNilaiAkhirKelas($id_mapel, $id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto N3EjO;
        oK2WI:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto Ml6iX;
        dgok6:
        goto berOg;
        goto u2TOG;
        VSFCB:
        $i = 0;
        goto TsDuD;
        XvfYk:
        $siswa = $siswas[$i];
        goto LhVGo;
        evqHW:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto cUOVj;
        oVpGq:
        LTUp4:
        goto RdBsY;
        LhVGo:
        $dummyNilai = ["\x6e\x68\141\x72" => '', "\x6e\x70\164\x73" => '', "\x6e\160\141\163" => ''];
        goto il0jg;
        CvuHF:
        $user = $this->ion_auth->user()->row();
        goto OuudJ;
        TsDuD:
        M9BXD:
        goto f9u_S;
        RAOdS:
        $kkm = $setting;
        goto xL7a6;
        PNxx6:
        rqwXN:
        goto cKZ4A;
        kPk0K:
        bK33A:
        goto D8agn;
        MBIl3:
        if ($setting->kkm_tunggal == "\61") {
            goto RvKtC;
        }
        goto ZbYHl;
        cUOVj:
        $data["\x74\160\137\141\143\164\151\x76\145"] = $tp;
        goto oK2WI;
        D8agn:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto OzC6U;
        Dt7uw:
    }
    public function downloadTemplatePas($id_mapel, $id_kelas)
    {
        goto gIoGe;
        IOacK:
        $kelas = $this->kelas->getNamaKelasById([$id_kelas]);
        goto yExJE;
        gIoGe:
        $tp = $this->dashboard->getTahunActive();
        goto VPF72;
        qnJPA:
        $p1 = [];
        goto FhrId;
        V7RG1:
        $template = "\x2e\57\x75\160\154\157\x61\x64\163\x2f\x69\x6d\160\x6f\x72\164\x2f\x66\157\x72\155\x61\164\x2f\164\x65\x6d\x70\x6c\141\x74\145\x5f\x70\141\x73\x2e\x78\x6c\x73\x78";
        goto ZkuIG;
        L8yfL:
        $i++;
        goto L57wI;
        VPF72:
        $smt = $this->dashboard->getSemesterActive();
        goto vPbPO;
        PZcNw:
        $nilai = $nilais[$siswa->id_siswa];
        goto aw9BV;
        SFcQZ:
        $nama[] = $siswa->nama;
        goto kPILB;
        vPbPO:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto Q_TLc;
        FhrId:
        $i = 0;
        goto lkm3C;
        M1FlY:
        $no = [];
        goto ZaUvN;
        GmMwf:
        $siswa = $siswas[$i];
        goto PQNxQ;
        cuFCD:
        $ns = $this->rapor->getNilaiAkhirKelas($id_mapel, $id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto Sorqf;
        T7Abk:
        $siswa = $siswas[$i];
        goto PZcNw;
        ZyMDR:
        ZCLGt:
        goto wKQKZ;
        r0i1I:
        $nama = [];
        goto qnJPA;
        SIzKg:
        $no[] = $i + 1;
        goto hk8Pd;
        L8le6:
        PhpExcelTemplator::outputToFile($template, $fileName, $params);
        goto GJdsT;
        Q_TLc:
        $nilais = [];
        goto EKekZ;
        L57wI:
        goto tgCqr;
        goto ZyMDR;
        bHvm5:
        XpYVM:
        goto L8yfL;
        UEyBh:
        $i++;
        goto rJrrT;
        ZkuIG:
        $fileName = "\x4e\x69\154\141\x69\137\x50\101\x53\40" . $mapel->kode . "\x20" . $kelas[$id_kelas] . "\56\170\154\x73\170";
        goto M1FlY;
        rJrrT:
        goto fIjGi;
        goto yAtbv;
        aw9BV:
        $no_induk = $siswa->nisn != null ? "\47" . $siswa->nisn : "\x27" . $siswa->nis;
        goto SIzKg;
        yAtbv:
        k1zpC:
        goto IOacK;
        feJd7:
        if (!($i < count($siswas))) {
            goto k1zpC;
        }
        goto GmMwf;
        ZaUvN:
        $nisn = [];
        goto r0i1I;
        wKQKZ:
        $params = ["\173\155\x61\x70\x65\x6c\175" => $mapel->kode, "\173\x6b\x65\154\141\x73\x7d" => $kelas[$id_kelas], "\133\x6e\x6f\x5d" => $no, "\x5b\x6e\151\x73\156\x5d" => $nisn, "\133\156\141\x6d\x61\135" => $nama, "\133\x6e\x69\154\x61\x69\135" => $p1];
        goto L8le6;
        VeEgP:
        fIjGi:
        goto feJd7;
        yExJE:
        $mapel = $this->master->getMapelById($id_mapel, true);
        goto V7RG1;
        IsKlW:
        if (!($i < count($siswas))) {
            goto ZCLGt;
        }
        goto T7Abk;
        kPILB:
        $p1[] = $nilai->npas;
        goto bHvm5;
        lkm3C:
        tgCqr:
        goto IsKlW;
        EKekZ:
        $i = 0;
        goto VeEgP;
        hk8Pd:
        $nisn[] = $no_induk;
        goto SFcQZ;
        PQNxQ:
        $dummyNilai = ["\x6e\x69\154\x61\151" => '', "\156\x70\x61\163" => ''];
        goto cuFCD;
        E1rYF:
        EaIYj:
        goto UEyBh;
        Sorqf:
        $nilais[$siswa->id_siswa] = $ns == null ? json_decode(json_encode($dummyNilai)) : $ns;
        goto E1rYF;
        GJdsT:
    }
    public function uploadPas($id_mapel, $id_kelas)
    {
        goto c84mN;
        OkoGk:
        $config["\x6d\x61\170\137\x73\x69\172\x65"] = 2048;
        goto oeQoI;
        zwYnm:
        G3aIT:
        goto lyPtu;
        zEWu5:
        $smt = $this->dashboard->getSemesterActive();
        goto EzVLT;
        vIwb7:
        switch ($ext) {
            case "\56\x78\x6c\x73\x78":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto znNXc;
            case "\56\170\x6c\x73":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto znNXc;
            case "\x2e\143\x73\166":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto znNXc;
            default:
                echo "\165\x6e\x6b\x6e\x6f\x77\x6e\x20\146\x69\x6c\x65\40\145\170\x74";
                die;
        }
        goto y3Drb;
        ZYdU4:
        goto Od59w;
        goto zwYnm;
        zRatU:
        foreach ($datas as $data) {
            goto Gu7Dn;
            Gu7Dn:
            $update = $this->db->replace("\x72\141\x70\157\162\137\156\151\154\x61\x69\x5f\141\x6b\150\x69\x72", $data);
            goto Dwkbe;
            Dwkbe:
            if (!$update) {
                goto j0ZYo;
            }
            goto t7e07;
            sKF2T:
            o6b55:
            goto ASxrY;
            gfUwc:
            j0ZYo:
            goto sKF2T;
            t7e07:
            $updated++;
            goto gfUwc;
            ASxrY:
        }
        goto WDhuY;
        z2wLK:
        Od59w:
        goto qsbFU;
        JFuyU:
        die;
        goto z2wLK;
        TEnSo:
        $readed = 0;
        goto n8QC0;
        EzVLT:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto NlbGf;
        f_mdS:
        $config["\141\154\x6c\x6f\167\145\x64\x5f\164\x79\160\145\x73"] = "\170\154\163\x7c\x78\154\x73\170\174\x63\163\166";
        goto OkoGk;
        lyPtu:
        $error = $this->upload->display_errors();
        goto M_9Zx;
        H3gmh:
        $updated = 0;
        goto zRatU;
        qN_TN:
        $ext = $this->upload->data("\x66\x69\x6c\145\x5f\x65\x78\x74");
        goto vIwb7;
        PYmBg:
        echo json_encode($updated);
        goto ZYdU4;
        xnCFw:
        if (!$this->upload->do_upload("\x75\160\x6c\x6f\x61\144\x5f\x66\151\x6c\145")) {
            goto G3aIT;
        }
        goto dStBq;
        WDhuY:
        IErDD:
        goto PYmBg;
        dStBq:
        $file = $this->upload->data("\x66\x75\x6c\x6c\137\160\x61\164\x68");
        goto qN_TN;
        y3Drb:
        rs66J:
        goto uoc4t;
        uoc4t:
        znNXc:
        goto fksgm;
        fksgm:
        $tp = $this->dashboard->getTahunActive();
        goto zEWu5;
        c84mN:
        $config["\165\160\154\x6f\141\144\137\160\x61\164\150"] = "\56\57\165\x70\x6c\157\x61\x64\x73\57\x69\x6d\x70\x6f\x72\164\x2f";
        goto f_mdS;
        NlbGf:
        $spreadsheet = $reader->load($file);
        goto MTLcQ;
        Trj8o:
        $this->load->library("\x75\x70\154\x6f\141\x64", $config);
        goto xnCFw;
        b7Pvt:
        $datas = [];
        goto TEnSo;
        Lsr5g:
        XffAv:
        goto kcgCg;
        MTLcQ:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto b7Pvt;
        kcgCg:
        unlink($file);
        goto H3gmh;
        oeQoI:
        $config["\x65\x6e\143\x72\171\x70\x74\137\156\141\x6d\x65"] = true;
        goto Trj8o;
        n8QC0:
        foreach ($siswas as $siswa) {
            goto VR6mV;
            TdQkX:
            if (!($i < count($sheetData))) {
                goto QTQJG;
            }
            goto UbzI6;
            Pf6hN:
            $readed++;
            goto esOGh;
            z8jow:
            $datas[] = ["\x69\x64\137\156\x69\x6c\141\x69\137\141\153\150\151\162" => $id_mapel . $id_kelas . $siswa->id_siswa . $tp->id_tp . $smt->id_smt, "\151\x64\x5f\x73\x69\163\167\x61" => $siswa->id_siswa, "\151\x64\x5f\x6d\141\160\145\x6c" => $id_mapel, "\x69\x64\137\x6b\x65\x6c\141\x73" => $id_kelas, "\x6e\x69\x6c\x61\x69" => $sheetData[$i][3]];
            goto dEpI4;
            HGr2B:
            RtLwd:
            goto qF87a;
            Rf07Q:
            if (!($no_induk == $nisn)) {
                goto OWWcj;
            }
            goto z8jow;
            th48l:
            goto xfy6O;
            goto sqJFT;
            sqJFT:
            QTQJG:
            goto xCGwd;
            esOGh:
            $nisn = $sheetData[$i][1];
            goto gvnln;
            VR6mV:
            $i = 1;
            goto j31Ih;
            gvnln:
            $no_induk = $siswa->nisn != null ? "\x27" . $siswa->nisn : "\47" . $siswa->nis;
            goto Rf07Q;
            xCGwd:
            TgJsl:
            goto G_I9O;
            dEpI4:
            OWWcj:
            goto HGr2B;
            j31Ih:
            xfy6O:
            goto TdQkX;
            qF87a:
            ZbOk4:
            goto jYcad;
            UbzI6:
            if (!($sheetData[$i][0] != null)) {
                goto RtLwd;
            }
            goto Pf6hN;
            jYcad:
            $i++;
            goto th48l;
            G_I9O:
        }
        goto Lsr5g;
        M_9Zx:
        echo $error;
        goto JFuyU;
        qsbFU:
    }
    public function importPas()
    {
        goto MOiYq;
        S1pD7:
        $updated = 0;
        goto EbKLF;
        MOiYq:
        $inputs = $this->input->post("\163\151\x73\167\x61", true);
        goto S1pD7;
        EbKLF:
        $this->db->trans_start();
        goto r51Nt;
        zKDzM:
        echo json_encode($updated);
        goto Y5jHu;
        AGFYN:
        QV_zO:
        goto z2Txt;
        z2Txt:
        $this->db->trans_complete();
        goto zKDzM;
        r51Nt:
        foreach ($inputs as $data) {
            goto ff7F1;
            c29Ge:
            if (!$update) {
                goto IsAsg;
            }
            goto hLG2B;
            hLG2B:
            $updated++;
            goto UnNjJ;
            UnNjJ:
            IsAsg:
            goto Mfk0_;
            Mfk0_:
            EQRxK:
            goto eO79O;
            ff7F1:
            $update = $this->db->replace("\162\141\160\157\x72\x5f\156\151\154\141\151\137\141\x6b\x68\151\x72", $data);
            goto c29Ge;
            eO79O:
        }
        goto AGFYN;
        Y5jHu:
    }
    public function inputEkstra($id_ekstra, $id_kelas)
    {
        goto WIsfA;
        l94ix:
        $ekstra = '';
        goto fj6DY;
        kWRxE:
        $kkm = $this->rapor->getKkm($id_ekstra . $id_kelas . $tp->id_tp . $smt->id_smt . "\x32");
        goto ALpAB;
        PlgmC:
        $nilai = [];
        goto RDDJ7;
        i5PSy:
        C4Nec:
        goto rFLXe;
        iJ62U:
        $this->load->view("\x6d\145\155\x62\145\x72\x73\x2f\147\165\x72\x75\x2f\164\x65\155\160\154\x61\x74\x65\x73\57\150\145\141\x64\x65\162", $data);
        goto V78WW;
        kMCHN:
        $data["\164\160\137\x61\x63\164\151\x76\x65"] = $tp;
        goto u2O3t;
        eNEbY:
        goto AOOA5;
        goto NOLRm;
        fj6DY:
        $kelas = [];
        goto HEU0E;
        HEU0E:
        foreach ($ekstras as $m) {
            goto ZQp_l;
            sEC3y:
            foreach ($m->kelas_ekstra as $kls) {
                goto z0GRB;
                z0GRB:
                if (!($kls->kelas === $id_kelas)) {
                    goto BSMuA;
                }
                goto cUs8c;
                cUs8c:
                $kelas = ["\151\144\137\153\145\154\141\163" => $kls->kelas, "\156\141\155\141\x5f\153\145\x6c\x61\163" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)];
                goto Gz2V1;
                Gz2V1:
                BSMuA:
                goto z4mgp;
                z4mgp:
                JECWs:
                goto hMY7M;
                hMY7M:
            }
            goto iwM8s;
            vjBtu:
            $ekstra = ["\151\x64\137\x65\153\x73\164\x72\141" => $m->id_ekstra, "\156\x61\x6d\x61\x5f\x65\x6b\x73\164\x72\x61" => $m->nama_ekstra];
            goto QPecH;
            iwM8s:
            Llg9V:
            goto X2GiU;
            X2GiU:
            YfD3l:
            goto MML1U;
            QPecH:
            k375e:
            goto sEC3y;
            ZQp_l:
            if (!($m->id_ekstra === $id_ekstra)) {
                goto k375e;
            }
            goto vjBtu;
            MML1U:
        }
        goto HHIlM;
        knVpz:
        if (!($i < count($siswas))) {
            goto AgrJy;
        }
        goto vluLS;
        Fcp2H:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto RtMVg;
        BBNeU:
        $this->load->view("\155\145\155\142\145\162\x73\57\147\165\x72\165\57\x74\x65\155\x70\154\x61\x74\145\163\x2f\x66\157\157\164\145\x72");
        goto O3dcC;
        u2O3t:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto mXSXJ;
        KJ7PA:
        $data = ["\x75\163\x65\162" => $user, "\152\x75\144\x75\x6c" => "\116\151\x6c\x61\x69\x20\105\153\x73\164\x72\141\x6b\x75\x72\151\153\165\x6c\x65\x72\x20", "\163\x75\142\152\x75\x64\x75\x6c" => "\111\156\x70\x75\x74\40\x4e\151\x6c\141\x69\x20\120\124\x53\x20\105\153\x73\x74\162\141\40", "\x73\x65\x74\164\151\x6e\x67" => $this->dashboard->getSetting(), "\147\x75\162\165" => $guru, "\x65\153\163\x74\162\141" => $ekstra, "\153\145\154\141\163" => $kelas, "\163\x69\163\x77\141" => $siswas, "\x6e\151\154\141\x69" => $nilai, "\x6b\x6b\x6d" => $kkm];
        goto e7Hiz;
        mXSXJ:
        $data["\163\x6d\x74\137\141\143\x74\151\166\145"] = $smt;
        goto iJ62U;
        ALpAB:
        goto yTM1d;
        goto i5PSy;
        v3Q4h:
        AOOA5:
        goto knVpz;
        ZwUK1:
        $ns = $this->rapor->getNilaiEkstraKelas($id_ekstra, $id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto qOg3m;
        y0Gt0:
        $ekstras = json_decode(json_encode(unserialize($ekstra_guru->ekstra_kelas)));
        goto l94ix;
        AZqjo:
        $tp = $this->dashboard->getTahunActive();
        goto scZF7;
        HHIlM:
        QD24m:
        goto QnNvQ;
        ZY3De:
        $dummyNilai = ["\x70\x31" => '', "\x70\62" => '', "\x70\x33" => '', "\x70\x34" => '', "\160\65" => '', "\x70\66" => '', "\x70\x37" => '', "\160\70" => '', "\x70\x5f\162\x61\164\x61\137\162\141\x74\x61" => '', "\x70\x5f\160\x72\x65\x64\151\x6b\x61\164" => "\75", "\160\x5f\144\x65\163\153\162\x69\x70\x73\151" => '', "\x6b\x31" => '', "\153\62" => '', "\153\x33" => '', "\153\x34" => '', "\153\65" => '', "\153\66" => '', "\x6b\x37" => '', "\153\x38" => '', "\153\x5f\x72\141\164\141\137\162\141\x74\141" => '', "\x6b\137\x70\x72\x65\144\x69\x6b\141\164" => '', "\x6b\x5f\x64\145\x73\153\162\151\160\x73\x69" => ''];
        goto ZwUK1;
        rFLXe:
        $kkm = $setting;
        goto xU2q3;
        ttNME:
        DmJ_N:
        goto tafTk;
        vluLS:
        $siswa = $siswas[$i];
        goto ZY3De;
        tafTk:
        $i++;
        goto eNEbY;
        xU2q3:
        yTM1d:
        goto KJ7PA;
        RDDJ7:
        $i = 0;
        goto v3Q4h;
        qOg3m:
        $nilai[$siswa->id_siswa] = $ns == null ? $dummyNilai : $ns;
        goto ttNME;
        LFXvx:
        if ($setting->kkm_tunggal == "\61") {
            goto C4Nec;
        }
        goto kWRxE;
        scZF7:
        $smt = $this->dashboard->getSemesterActive();
        goto Fcp2H;
        QnNvQ:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto PlgmC;
        RtMVg:
        $ekstra_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto y0Gt0;
        WIsfA:
        $user = $this->ion_auth->user()->row();
        goto AZqjo;
        e7Hiz:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto kMCHN;
        PhEat:
        $setting = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto LFXvx;
        V78WW:
        $this->load->view("\x6d\145\x6d\142\x65\162\x73\x2f\x67\x75\x72\x75\57\x72\x61\160\x6f\x72\x2f\156\151\x6c\141\x69\57\x65\x6b\163\x74\162\x61");
        goto BBNeU;
        NOLRm:
        AgrJy:
        goto PhEat;
        O3dcC:
    }
    public function downloadTemplateEkstra($id_ekstra, $id_kelas)
    {
        goto Pcsnu;
        Pcsnu:
        $tp = $this->dashboard->getTahunActive();
        goto dd6Gj;
        tnLK2:
        $fileName = "\116\x69\154\x61\151\137\105\153\x73\164\162\x61\153\165\162\x69\153\x75\154\x65\162\40" . $ekstra->kode_ekstra . "\x20" . $kelas[$id_kelas] . "\x2e\x78\154\163\170";
        goto s_PRM;
        pm_Eu:
        goto YlAyG;
        goto BLnzg;
        stFYv:
        YlAyG:
        goto T2Hma;
        abvqU:
        if (!($i < count($siswas))) {
            goto UqTVn;
        }
        goto L67bw;
        Cpj5N:
        $nilais = [];
        goto TeJ7Y;
        nmT8a:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto Cpj5N;
        s_PRM:
        $no = [];
        goto mZXdw;
        jbwpM:
        $params = ["\173\155\141\x70\x65\x6c\175" => $ekstra->nama_ekstra, "\x7b\x6b\145\154\141\x73\x7d" => $kelas[$id_kelas], "\133\156\157\x5d" => $no, "\x5b\156\x69\163\x6e\135" => $nisn, "\133\x6e\141\155\x61\x5d" => $nama, "\133\156\151\x6c\x61\x69\135" => $p1];
        goto v8uuj;
        QEouO:
        UqTVn:
        goto jbwpM;
        Rhms_:
        $dummyNilai = ["\156\151\x6c\x61\151" => ''];
        goto Illxe;
        y3zTN:
        goto R4FPu;
        goto QEouO;
        Hn6zm:
        Q2gnt:
        goto ReRV9;
        ReRV9:
        $i++;
        goto y3zTN;
        rGFfi:
        $template = "\56\x2f\165\160\x6c\x6f\141\144\163\x2f\151\155\160\157\x72\x74\x2f\x66\157\x72\x6d\141\x74\x2f\x74\145\x6d\x70\x6c\141\x74\145\x5f\x65\x6b\163\164\162\x61\56\170\154\163\x78";
        goto tnLK2;
        x_zpd:
        $no_induk = $siswa->nisn != null ? "\x27" . $siswa->nisn : "\x27" . $siswa->nis;
        goto dnptN;
        RBMTF:
        R4FPu:
        goto abvqU;
        TeJ7Y:
        $i = 0;
        goto stFYv;
        IKAG7:
        $kelas = $this->kelas->getNamaKelasById([$id_kelas]);
        goto vsnjc;
        Illxe:
        $ns = $this->rapor->getNilaiEkstraKelas($id_ekstra, $id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto y_0DF;
        vsnjc:
        $ekstra = $this->master->getEkstraById($id_ekstra, true);
        goto rGFfi;
        xxzsM:
        $p1 = [];
        goto cPLUe;
        BLnzg:
        oBYnp:
        goto IKAG7;
        Xhiw_:
        $nisn[] = $no_induk;
        goto RhyvH;
        cPLUe:
        $i = 0;
        goto RBMTF;
        v8uuj:
        PhpExcelTemplator::outputToFile($template, $fileName, $params);
        goto q2SxT;
        T2Hma:
        if (!($i < count($siswas))) {
            goto oBYnp;
        }
        goto kftoj;
        kftoj:
        $siswa = $siswas[$i];
        goto Rhms_;
        RhyvH:
        $nama[] = $siswa->nama;
        goto Dv10q;
        mZXdw:
        $nisn = [];
        goto osXy5;
        IjTIJ:
        $p1[] = $nilai->nilai;
        goto s3a9Z;
        JdhpJ:
        $nilai = $nilais[$siswa->id_siswa];
        goto IjTIJ;
        osXy5:
        $nama = [];
        goto xxzsM;
        y_0DF:
        $nilais[$siswa->id_siswa] = $ns == null ? json_decode(json_encode($dummyNilai)) : $ns;
        goto X4sH9;
        dnptN:
        $no[] = $i + 1;
        goto Xhiw_;
        L67bw:
        $siswa = $siswas[$i];
        goto x_zpd;
        dd6Gj:
        $smt = $this->dashboard->getSemesterActive();
        goto nmT8a;
        Dv10q:
        if (!(count($nilais) > 0)) {
            goto UU89d;
        }
        goto JdhpJ;
        X4sH9:
        YP05i:
        goto WK3a9;
        WK3a9:
        $i++;
        goto pm_Eu;
        s3a9Z:
        UU89d:
        goto Hn6zm;
        q2SxT:
    }
    public function uploadEkstra($id_ekstra, $id_kelas)
    {
        goto fSfsN;
        yejuc:
        g4YgA:
        goto HygPA;
        YAhe6:
        goto g4YgA;
        goto ZGHbg;
        Nn1ke:
        $config["\155\x61\x78\137\x73\x69\172\x65"] = 2048;
        goto lAeRb;
        N2PNh:
        $error = $this->upload->display_errors();
        goto ZVq3L;
        fSfsN:
        $config["\165\160\x6c\157\x61\144\x5f\160\141\x74\x68"] = "\x2e\57\165\160\x6c\157\141\x64\163\57\x69\155\x70\x6f\x72\164\x2f";
        goto ihbyp;
        cSX3S:
        nbzil:
        goto gf3vn;
        t6LLp:
        if (!$this->upload->do_upload("\x75\160\x6c\x6f\141\144\137\x66\151\154\x65")) {
            goto dvWOt;
        }
        goto fJ2gI;
        fqOde:
        $tp = $this->dashboard->getTahunActive();
        goto ZTJEr;
        Bg3Rl:
        $readed = 0;
        goto m9_Qx;
        m9_Qx:
        foreach ($siswas as $siswa) {
            goto IVJf4;
            fsEdF:
            IpIJp:
            goto EzAlg;
            d2ort:
            w69el:
            goto Las82;
            rJqxd:
            I97Za:
            goto Cm7VR;
            Las82:
            gWfLG:
            goto FVTdi;
            iFd6c:
            if (!($no_induk == $nisn)) {
                goto U6jAe;
            }
            goto tlBcN;
            qIelX:
            U6jAe:
            goto fsEdF;
            hjvmW:
            if (!($sheetData[$i][0] != null)) {
                goto IpIJp;
            }
            goto oehWj;
            EzAlg:
            oHb6c:
            goto RCL6v;
            RCL6v:
            $i++;
            goto Zx9Od;
            Zx9Od:
            goto I97Za;
            goto d2ort;
            tlBcN:
            $datas[] = ["\x69\x64\x5f\x6e\151\x6c\x61\x69\137\145\x6b\x73\x74\x72\x61" => $id_ekstra . $id_kelas . $siswa->id_siswa . $tp->id_tp . $smt->id_smt, "\151\144\137\163\151\163\167\141" => $siswa->id_siswa, "\151\144\137\145\153\x73\x74\162\x61" => $id_ekstra, "\151\144\137\153\x65\154\141\x73" => $id_kelas, "\x6e\x69\154\x61\151" => $sheetData[$i][3]];
            goto qIelX;
            gIh_z:
            $no_induk = $siswa->nisn != null ? "\x27" . $siswa->nisn : "\47" . $siswa->nis;
            goto iFd6c;
            y7Vv3:
            $nisn = $sheetData[$i][1];
            goto gIh_z;
            Cm7VR:
            if (!($i < count($sheetData))) {
                goto w69el;
            }
            goto hjvmW;
            IVJf4:
            $i = 1;
            goto rJqxd;
            oehWj:
            $readed++;
            goto y7Vv3;
            FVTdi:
        }
        goto cSX3S;
        Tf4uE:
        foreach ($datas as $data) {
            goto G0K4F;
            ya4Lz:
            $updated++;
            goto A26HK;
            ztxdk:
            if (!$update) {
                goto gePnn;
            }
            goto ya4Lz;
            UBmya:
            GN2sx:
            goto BYB1I;
            A26HK:
            gePnn:
            goto UBmya;
            G0K4F:
            $update = $this->db->replace("\162\141\160\x6f\x72\137\156\x69\x6c\141\151\x5f\145\x6b\163\x74\x72\x61", $data);
            goto ztxdk;
            BYB1I:
        }
        goto ep1eB;
        R1Jku:
        echo json_encode($updated);
        goto YAhe6;
        vFP_O:
        hFeFX:
        goto aaG_B;
        ihbyp:
        $config["\x61\x6c\x6c\x6f\167\x65\x64\x5f\x74\171\x70\x65\x73"] = "\170\x6c\163\x7c\x78\154\x73\170\x7c\x63\163\166";
        goto Nn1ke;
        xOKnL:
        $this->load->library("\165\x70\154\x6f\x61\x64", $config);
        goto t6LLp;
        G3QUc:
        $datas = [];
        goto Bg3Rl;
        ep1eB:
        FF6aO:
        goto R1Jku;
        R4fu_:
        die;
        goto yejuc;
        fJ2gI:
        $file = $this->upload->data("\146\165\154\x6c\x5f\160\x61\x74\150");
        goto HZPhU;
        DZGtO:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto Oake7;
        ZTJEr:
        $smt = $this->dashboard->getSemesterActive();
        goto DZGtO;
        lAeRb:
        $config["\x65\x6e\143\162\171\160\164\137\156\141\x6d\x65"] = true;
        goto xOKnL;
        ZGHbg:
        dvWOt:
        goto N2PNh;
        Oake7:
        $spreadsheet = $reader->load($file);
        goto JGes6;
        gf3vn:
        unlink($file);
        goto I9Y4A;
        I9Y4A:
        $updated = 0;
        goto Tf4uE;
        JGes6:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto G3QUc;
        HZPhU:
        $ext = $this->upload->data("\x66\x69\154\x65\x5f\145\170\x74");
        goto POh_O;
        aaG_B:
        zCeiF:
        goto fqOde;
        POh_O:
        switch ($ext) {
            case "\x2e\170\x6c\163\170":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto zCeiF;
            case "\x2e\x78\x6c\x73":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto zCeiF;
            case "\56\143\163\x76":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto zCeiF;
            default:
                echo "\x75\x6e\x6b\x6e\157\167\156\x20\146\x69\x6c\x65\40\x65\x78\164";
                die;
        }
        goto vFP_O;
        ZVq3L:
        echo $error;
        goto R4fu_;
        HygPA:
    }
    public function importEkstra()
    {
        goto l5nC8;
        vM3x0:
        $updated = 0;
        goto ip7sM;
        zUBwx:
        echo json_encode($updated);
        goto jtNdx;
        i43n7:
        $this->db->trans_complete();
        goto zUBwx;
        DLryj:
        eXcoY:
        goto i43n7;
        ip7sM:
        $this->db->trans_start();
        goto KmoUq;
        l5nC8:
        $inputs = $this->input->post("\163\x69\163\167\141", true);
        goto vM3x0;
        KmoUq:
        foreach ($inputs as $data) {
            goto Fg4Cj;
            hkOqq:
            eJoh2:
            goto hLJgO;
            Fg4Cj:
            $update = $this->db->replace("\162\x61\160\x6f\162\x5f\156\x69\154\x61\x69\x5f\x65\x6b\x73\x74\x72\141", $data);
            goto rNHos;
            y9n5y:
            cQOSY:
            goto hkOqq;
            I0BDR:
            $updated++;
            goto y9n5y;
            rNHos:
            if (!$update) {
                goto cQOSY;
            }
            goto I0BDR;
            hLJgO:
        }
        goto DLryj;
        jtNdx:
    }
    public function raporSikap()
    {
        goto QYzmK;
        IsSUn:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto TnDqa;
        A3G3J:
        $this->load->view("\x6d\x65\155\x62\145\x72\163\x2f\147\165\162\165\57\162\141\x70\x6f\x72\x2f\x73\x69\x6b\x61\x70\x2f\144\x61\164\141");
        goto lsKFa;
        p6giL:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto eV80r;
        qf5t3:
        $no = $i + 1;
        goto Caub_;
        OB8Rd:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto odDJu;
        Q57Kw:
        $data["\x6b\145\x6c\x61\x73"] = $arrKelas;
        goto nnpQD;
        UkDqv:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto OVL9j;
        yBa2m:
        $no = $i + 1;
        goto mdWra;
        nP4Fx:
        if (!($i < 10)) {
            goto UrKQ3;
        }
        goto qf5t3;
        Iwqkz:
        $this->load->view("\x6d\x65\155\142\145\x72\163\57\147\165\162\x75\x2f\x74\x65\x6d\160\x6c\141\164\x65\x73\x2f\150\145\x61\144\145\162", $data);
        goto A3G3J;
        Gasbz:
        $i = 0;
        goto pv5Bn;
        pv5Bn:
        mvSyG:
        goto nP4Fx;
        o4E4a:
        $arrKelas = [];
        goto Dy2s6;
        QYzmK:
        $user = $this->ion_auth->user()->row();
        goto PNEes;
        sohP5:
        goto Zt3o0;
        goto Yy35T;
        xx_hc:
        UrKQ3:
        goto T1t4D;
        gq768:
        $tp = $this->dashboard->getTahunActive();
        goto VyY_3;
        SEoOb:
        OtApQ:
        goto InauS;
        OVL9j:
        $data["\x73\155\x74\x5f\141\143\164\x69\166\145"] = $smt;
        goto OB8Rd;
        edMOU:
        if (!($i < 10)) {
            goto cdeQ7;
        }
        goto yBa2m;
        nWU35:
        goto mvSyG;
        goto xx_hc;
        bBSmB:
        $i++;
        goto nWU35;
        TnDqa:
        $data["\164\x70\137\x61\143\x74\x69\x76\145"] = $tp;
        goto UkDqv;
        InauS:
        $dummySikap = [];
        goto Gasbz;
        FbNc6:
        array_push($dummySikap, $s);
        goto OSN3G;
        Yy35T:
        cdeQ7:
        goto Ji3Hz;
        qvRJ3:
        $sikap = json_decode(json_encode($dummySikap));
        goto AkNFJ;
        OSN3G:
        NKfGQ:
        goto iFz98;
        B5ik0:
        array_push($dummySikap, $s);
        goto iisag;
        PNEes:
        $data = ["\165\x73\145\x72" => $user, "\x6a\165\x64\165\154" => "\111\156\x70\165\x74\40\116\x69\x6c\141\151\40\x53\x69\153\x61\160", "\163\165\142\152\165\144\x75\x6c" => "\111\156\160\x75\164\x20\x4e\x69\x6c\141\151\x20\x53\x69\153\x61\x70", "\x73\145\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto gq768;
        t1ihI:
        Zt3o0:
        goto edMOU;
        D013I:
        $data["\x6d\x61\x70\145\154"] = $arrMapel;
        goto Q57Kw;
        mdWra:
        $s = ["\x69\x64\137\163\151\x6b\141\160" => 2 . $no, "\x6a\x65\x6e\151\x73" => "\x32", "\x6b\x6f\x64\145" => $no, "\163\x69\153\x61\x70" => ''];
        goto FbNc6;
        T1t4D:
        $i = 0;
        goto t1ihI;
        Ji3Hz:
        $sikap = $this->rapor->getDeskripsiSikap($id_kelas, $tp->id_tp, $smt->id_smt);
        goto VwXM3;
        VwXM3:
        if (!(count($sikap) === 0)) {
            goto AaqhH;
        }
        goto qvRJ3;
        AkNFJ:
        AaqhH:
        goto B0Wbh;
        B0Wbh:
        $data["\x67\165\x72\165"] = $guru;
        goto D013I;
        eV80r:
        $arrMapel = [];
        goto o4E4a;
        iFz98:
        $i++;
        goto sohP5;
        ELngg:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto p6giL;
        nnpQD:
        $data["\x73\x69\153\x61\160"] = $sikap;
        goto Iwqkz;
        odDJu:
        $id_kelas = $guru->wali_kelas;
        goto ELngg;
        VyY_3:
        $smt = $this->dashboard->getSemesterActive();
        goto IsSUn;
        Dy2s6:
        foreach ($mapel as $m) {
            goto b7cuI;
            b7cuI:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto TlMP0;
            oKSbG:
            gV513:
            goto QnZzy;
            rSLEg:
            VbfMa:
            goto oKSbG;
            TlMP0:
            foreach ($m->kelas_mapel as $kls) {
                $arrKelas[$m->id_mapel][] = ["\151\x64\x5f\x6b\145\154\x61\x73" => $kls->kelas, "\156\x61\155\141\x5f\153\x65\x6c\x61\x73" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)];
                pGLNP:
            }
            goto rSLEg;
            QnZzy:
        }
        goto SEoOb;
        lsKFa:
        $this->load->view("\x6d\145\155\x62\145\162\163\x2f\x67\165\x72\x75\x2f\164\145\155\x70\x6c\141\164\x65\163\57\x66\x6f\157\164\145\x72");
        goto FPlPO;
        iisag:
        lFmU7:
        goto bBSmB;
        Caub_:
        $s = ["\x69\x64\x5f\x73\151\153\141\160" => 1 . $no, "\152\x65\156\x69\x73" => "\61", "\153\157\144\x65" => $no, "\x73\x69\x6b\141\x70" => ''];
        goto B5ik0;
        FPlPO:
    }
    public function saveSikap()
    {
        goto ZIcIg;
        zbMDh:
        zia2e:
        goto zUhap;
        nQb1j:
        $smt = $this->dashboard->getSemesterActive();
        goto jmiai;
        jmiai:
        foreach ($input as $d) {
            goto aILZc;
            HPvqB:
            AUWV4:
            goto Ua5wq;
            aILZc:
            $data = ["\151\144\137\x73\151\x6b\x61\x70" => $d->id_sikap, "\x69\144\137\153\x65\x6c\141\163" => $d->kelas, "\152\145\x6e\151\x73" => $d->jenis, "\153\157\x64\x65" => $d->kode, "\163\151\x6b\141\160" => $d->sikap, "\151\144\137\164\160" => $tp->id_tp, "\x69\144\x5f\163\x6d\x74" => $smt->id_smt];
            goto AqJsI;
            AqJsI:
            $update = $this->db->replace("\x72\x61\x70\x6f\x72\137\x64\141\164\141\x5f\163\x69\153\141\x70", $data);
            goto HPvqB;
            Ua5wq:
        }
        goto zbMDh;
        ZIcIg:
        $input = json_decode($this->input->post("\x73\x69\x6b\x61\x70", true));
        goto NJi1X;
        xF7Bj:
        $this->output_json($data);
        goto kWK50;
        zUhap:
        $data["\x73\x74\x61\x74\x75\x73"] = $update;
        goto xF7Bj;
        NJi1X:
        $tp = $this->dashboard->getTahunActive();
        goto nQb1j;
        kWK50:
    }
    public function raporSpiritual()
    {
        goto OEETz;
        MKktv:
        Pjc_3:
        goto OWcrD;
        oEwrV:
        array_push($dummySpiritual, $s);
        goto xzAIB;
        FKPAF:
        $i++;
        goto d8QmF;
        vrwxh:
        goto Pjc_3;
        goto KzPII;
        FMyBn:
        $tp = $this->dashboard->getTahunActive();
        goto s0kGN;
        el4D2:
        $this->load->view("\155\145\155\x62\145\x72\163\57\147\x75\x72\165\57\162\141\x70\x6f\162\57\163\x69\x6b\141\160\57\163\x70\151\x72\x69\164\165\x61\x6c");
        goto BhGS0;
        TAdzc:
        $nilai = [];
        goto tlhaS;
        lCgYT:
        if (!($i < count($siswas))) {
            goto IyO6h;
        }
        goto LM1J9;
        KzPII:
        Kr1h9:
        goto tMleU;
        LtHrp:
        $no = $i + 1;
        goto Jmpxy;
        BhGS0:
        $this->load->view("\155\145\x6d\142\145\162\163\x2f\147\165\x72\165\x2f\164\x65\x6d\x70\154\x61\x74\145\163\x2f\x66\157\x6f\x74\145\162");
        goto BXelf;
        Ztof6:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto mBbR7;
        WuZii:
        $spiritual = json_decode(json_encode($dummySpiritual));
        goto aiGV7;
        aiGV7:
        D0GYt:
        goto WlMrS;
        OEETz:
        $user = $this->ion_auth->user()->row();
        goto FMyBn;
        OWcrD:
        if (!($i < 10)) {
            goto Kr1h9;
        }
        goto LtHrp;
        aEEIQ:
        $this->load->view("\x6d\x65\155\x62\x65\x72\163\57\147\x75\162\x75\x2f\x74\145\x6d\160\154\x61\x74\145\x73\57\x68\x65\x61\x64\145\162", $data);
        goto el4D2;
        v8ijm:
        $data["\163\155\164\x5f\x61\x63\x74\151\x76\145"] = $smt;
        goto aEEIQ;
        mBbR7:
        $data["\164\160\137\x61\143\164\x69\166\145"] = $tp;
        goto BPzr2;
        xATIJ:
        $dummySpiritual = [];
        goto y1F51;
        DLhBH:
        IyO6h:
        goto aWsN6;
        yganf:
        $id_kelas = $guru->wali_kelas;
        goto kpwsP;
        Td7BE:
        if (!(count($spiritual) === 0)) {
            goto D0GYt;
        }
        goto WuZii;
        d8QmF:
        goto Txckv;
        goto DLhBH;
        y1F51:
        $i = 0;
        goto MKktv;
        zUtOi:
        $ns = $this->rapor->getNilaiSikapKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt, "\x31");
        goto lPWwC;
        iqXfE:
        $i++;
        goto vrwxh;
        aWsN6:
        $data = ["\x75\x73\145\162" => $user, "\x6a\165\x64\x75\x6c" => "\x4e\151\154\x61\x69\40\x53\x70\x69\x72\151\164\165\x61\x6c\40\113\145\x6c\141\163\x20", "\163\x75\142\x6a\x75\144\x75\x6c" => "\x49\x6e\160\165\x74\40\116\151\154\x61\x69", "\x73\145\164\164\151\156\147" => $this->dashboard->getSetting(), "\147\x75\162\165" => $guru, "\153\145\154\141\163" => $kelas, "\x73\151\163\167\141" => $siswas, "\x6e\151\154\141\x69" => $nilai, "\163\160\151\x72\x69\x74\165\141\x6c" => $spiritual];
        goto Ztof6;
        LM1J9:
        $siswa = $siswas[$i];
        goto DdeZm;
        xzAIB:
        L4XZq:
        goto iqXfE;
        lPWwC:
        $nilai[$siswa->id_siswa] = $ns == null ? $dummyNilai : unserialize($ns->nilai);
        goto o7O58;
        hnKAN:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto yganf;
        o7O58:
        sa5EA:
        goto FKPAF;
        DdeZm:
        $dummyNilai = ["\x70\x72\145\x64\151\x6b\x61\164" => '', "\163\154\x31" => '', "\x73\154\62" => '', "\x73\x6c\x33" => '', "\x6d\x62\61" => '', "\x6d\142\x32" => '', "\x6d\142\x33" => ''];
        goto zUtOi;
        kpwsP:
        $kelas = $this->kelas->get_one($id_kelas, $tp->id_tp, $smt->id_smt);
        goto xATIJ;
        BPzr2:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto v8ijm;
        tlhaS:
        $i = 0;
        goto LPF1k;
        tMleU:
        $spiritual = $this->rapor->getDeskripsiSikapByJenis($id_kelas, "\61", $tp->id_tp, $smt->id_smt);
        goto Td7BE;
        s0kGN:
        $smt = $this->dashboard->getSemesterActive();
        goto hnKAN;
        WlMrS:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto TAdzc;
        LPF1k:
        Txckv:
        goto lCgYT;
        Jmpxy:
        $s = ["\151\x64\x5f\x73\x69\153\x61\160" => $id_kelas . 1 . $no, "\152\145\x6e\x69\x73" => "\x31", "\153\157\x64\145" => $no, "\x73\x69\x6b\141\x70" => $this->rapor->getDummyDeskripsiSpiritual()[$i]];
        goto oEwrV;
        BXelf:
    }
    public function importSpiritual($id_kelas)
    {
        goto iBfK8;
        PCL1X:
        T1zqh:
        goto EfQej;
        KC9n_:
        foreach ($input as $in) {
            goto oQF1h;
            BZ70O:
            s_lgV:
            goto ch2qi;
            nBVCA:
            $datas[] = ["\151\x64\x5f\156\x69\154\x61\151\137\x73\151\x6b\141\x70" => $id_kelas . $id_siswa . $tp->id_tp . $smt->id_smt . "\x31", "\x69\x64\137\x73\151\163\x77\x61" => $id_siswa, "\151\x64\x5f\x6b\x65\154\141\x73" => $id_kelas, "\x6a\x65\x6e\151\x73" => 1, "\156\x69\x6c\x61\x69" => serialize(["\x70\x72\x65\x64\x69\x6b\141\164" => $in[3], "\x73\154\x31" => $in[4], "\x73\154\62" => $in[5], "\x73\154\x33" => $in[6], "\155\x62\x31" => $in[7], "\x6d\142\x32" => $in[8], "\155\x62\x33" => $in[9]]), "\144\145\163\x6b\x72\x69\x70\x73\x69" => $in[10], "\151\144\137\x74\160" => $tp->id_tp, "\151\x64\137\x73\155\164" => $smt->id_smt];
            goto bn91J;
            oQF1h:
            $id_siswa = $in[11];
            goto lEDvz;
            bn91J:
            Y1RUV:
            goto BZ70O;
            lEDvz:
            if (!($id_siswa != "\151\x64")) {
                goto Y1RUV;
            }
            goto nBVCA;
            ch2qi:
        }
        goto PCL1X;
        goN02:
        foreach ($datas as $data) {
            goto vFIJC;
            CjDCz:
            $updated++;
            goto jxc13;
            jxc13:
            gx9jI:
            goto bo11P;
            Rtn4T:
            if (!$update) {
                goto gx9jI;
            }
            goto CjDCz;
            bo11P:
            Ia2EB:
            goto sP0Js;
            vFIJC:
            $update = $this->db->replace("\x72\x61\160\157\x72\x5f\156\151\x6c\141\x69\137\163\151\x6b\x61\x70", $data);
            goto Rtn4T;
            sP0Js:
        }
        goto Pm9xe;
        HzdDz:
        $datas = [];
        goto KC9n_;
        hilja:
        echo json_encode($updated);
        goto rQ0Ap;
        viWzu:
        $tp = $this->dashboard->getTahunActive();
        goto HxXCo;
        HxXCo:
        $smt = $this->dashboard->getSemesterActive();
        goto HzdDz;
        iBfK8:
        $input = json_decode($this->input->post("\x6e\151\x6c\141\x69", true));
        goto viWzu;
        EfQej:
        $updated = 0;
        goto goN02;
        Pm9xe:
        MWuGM:
        goto hilja;
        rQ0Ap:
    }
    public function raporSosial()
    {
        goto xrlvv;
        UpIBz:
        $i++;
        goto bvN4P;
        ZizAj:
        $no = $i + 1;
        goto ns9Tm;
        Hc7wC:
        r5vAY:
        goto UpIBz;
        TXKFL:
        if (!($i < count($siswas))) {
            goto R83_d;
        }
        goto nDK14;
        bvN4P:
        goto AeSNy;
        goto hLrvT;
        caWBC:
        array_push($dummySosial, $s);
        goto Hc7wC;
        XvFRi:
        $dummyNilai = ["\x70\x72\145\144\151\153\141\x74" => '', "\163\x6c\61" => '', "\163\154\x32" => '', "\x73\154\x33" => '', "\x6d\142\x31" => '', "\x6d\142\62" => '', "\x6d\x62\x33" => ''];
        goto DtDJb;
        DcaOS:
        $i = 0;
        goto phi1J;
        NBK4X:
        if (!($i < 10)) {
            goto S6pYp;
        }
        goto ZizAj;
        DtDJb:
        $ns = $this->rapor->getNilaiSikapKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt, "\x32");
        goto kHXJq;
        hLrvT:
        S6pYp:
        goto uvV_H;
        MDWak:
        $this->load->view("\155\x65\155\x62\145\x72\163\57\x67\165\x72\165\x2f\x74\145\x6d\x70\154\141\x74\145\x73\x2f\x66\157\x6f\x74\x65\162");
        goto n1Nuv;
        pwXyM:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto lGEas;
        xrlvv:
        $user = $this->ion_auth->user()->row();
        goto UaDik;
        tE2zg:
        $sosial = json_decode(json_encode($dummySosial));
        goto gRYzx;
        IKHkO:
        R83_d:
        goto nBTXB;
        jxq_Z:
        goto ZfP5r;
        goto IKHkO;
        oXPqP:
        if (!(count($sosial) === 0)) {
            goto AXIMs;
        }
        goto tE2zg;
        eFyll:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto w2Oge;
        sVicU:
        HNlBf:
        goto ZYqFs;
        xmXEK:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto F6MpI;
        DqfXw:
        $id_kelas = $guru->wali_kelas;
        goto gPP3Z;
        PHLp1:
        $this->load->view("\x6d\x65\x6d\142\x65\162\x73\57\x67\x75\162\165\57\x72\x61\x70\157\162\57\x73\x69\153\141\160\x2f\163\157\x73\151\141\x6c");
        goto MDWak;
        ZYqFs:
        $i++;
        goto jxq_Z;
        wTxF6:
        ZfP5r:
        goto TXKFL;
        CFGBW:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto DqfXw;
        ns9Tm:
        $s = ["\151\x64\137\163\151\x6b\141\x70" => $id_kelas . 2 . $no, "\152\145\156\x69\x73" => "\x32", "\x6b\x6f\x64\145" => $no, "\163\151\153\141\x70" => $this->rapor->getDummyDeskripsiSosial()[$i]];
        goto caWBC;
        UaDik:
        $tp = $this->dashboard->getTahunActive();
        goto RZAG1;
        nBTXB:
        $data = ["\x75\x73\x65\x72" => $user, "\x6a\x75\144\x75\154" => "\116\151\154\141\x69\40\123\x6f\x73\151\141\x6c\x20\x4b\x65\154\x61\x73\x20", "\163\x75\x62\x6a\x75\144\x75\154" => "\111\156\x70\165\164\x20\116\151\x6c\141\151\40\120\124\123\40\x4d\141\x70\x65\154\40", "\x73\x65\164\164\151\156\x67" => $this->dashboard->getSetting(), "\x67\165\162\165" => $guru, "\153\145\154\141\163" => $kelas, "\x73\151\x73\x77\x61" => $siswas, "\156\151\154\x61\x69" => $nilai, "\163\157\163\151\141\154" => $sosial];
        goto pwXyM;
        gPP3Z:
        $kelas = $this->kelas->get_one($id_kelas, $tp->id_tp, $smt->id_smt);
        goto X8Shn;
        RZAG1:
        $smt = $this->dashboard->getSemesterActive();
        goto CFGBW;
        lGEas:
        $data["\164\x70\137\141\143\164\x69\x76\x65"] = $tp;
        goto eFyll;
        X8Shn:
        $dummySosial = [];
        goto DcaOS;
        kHXJq:
        $nilai[$siswa->id_siswa] = $ns == null ? $dummyNilai : unserialize($ns->nilai);
        goto sVicU;
        kEngi:
        $i = 0;
        goto wTxF6;
        BFZpc:
        $this->load->view("\155\x65\x6d\x62\x65\162\163\x2f\x67\165\x72\x75\57\x74\145\x6d\x70\154\141\164\x65\x73\x2f\x68\145\141\144\145\162", $data);
        goto PHLp1;
        w2Oge:
        $data["\163\x6d\x74\137\x61\x63\x74\151\x76\x65"] = $smt;
        goto BFZpc;
        F6MpI:
        $nilai = [];
        goto kEngi;
        phi1J:
        AeSNy:
        goto NBK4X;
        gRYzx:
        AXIMs:
        goto xmXEK;
        nDK14:
        $siswa = $siswas[$i];
        goto XvFRi;
        uvV_H:
        $sosial = $this->rapor->getDeskripsiSikapByJenis($id_kelas, "\62", $tp->id_tp, $smt->id_smt);
        goto oXPqP;
        n1Nuv:
    }
    public function importSosial($id_kelas)
    {
        goto q1DtQ;
        iStSo:
        D5hcH:
        goto T5lhv;
        hOXu0:
        $smt = $this->dashboard->getSemesterActive();
        goto XC_JR;
        JupNx:
        $tp = $this->dashboard->getTahunActive();
        goto hOXu0;
        T5lhv:
        $updated = 0;
        goto pQqnl;
        pQqnl:
        foreach ($datas as $data) {
            goto VyCBm;
            SEK6A:
            CEMMt:
            goto lrzVz;
            YsqvQ:
            if (!$update) {
                goto uCX_F;
            }
            goto Vp8LD;
            pDdrN:
            uCX_F:
            goto SEK6A;
            Vp8LD:
            $updated++;
            goto pDdrN;
            VyCBm:
            $update = $this->db->replace("\x72\x61\160\x6f\162\x5f\156\151\x6c\x61\151\x5f\x73\x69\x6b\x61\x70", $data);
            goto YsqvQ;
            lrzVz:
        }
        goto RWM4h;
        RWM4h:
        AXU1N:
        goto Qo1kw;
        tM14c:
        foreach ($input as $in) {
            goto Fn0a5;
            Fn0a5:
            $id_siswa = $in[13];
            goto IXvji;
            IXvji:
            if (!($id_siswa != "\x69\x64")) {
                goto IG5d4;
            }
            goto bhUG9;
            YhOtP:
            IG5d4:
            goto ZpG3x;
            ZpG3x:
            mIwll:
            goto LzvOO;
            bhUG9:
            $datas[] = ["\x69\144\x5f\x6e\x69\154\141\151\x5f\163\x69\x6b\141\160" => $id_kelas . $id_siswa . $tp->id_tp . $smt->id_smt . "\62", "\x69\x64\137\163\151\163\167\x61" => $id_siswa, "\x69\x64\x5f\x6b\x65\x6c\141\163" => $id_kelas, "\x6a\x65\156\x69\x73" => 2, "\156\x69\x6c\x61\x69" => serialize(["\x70\162\145\144\x69\x6b\141\164" => $in[3], "\x61\61" => $in[4], "\x61\62" => $in[5], "\x61\63" => $in[6], "\x62\x31" => $in[7], "\142\x32" => $in[8], "\142\x33" => $in[9], "\x63\61" => $in[10], "\143\62" => $in[11]]), "\x64\145\x73\x6b\162\x69\160\x73\151" => $in[12], "\151\x64\137\x74\x70" => $tp->id_tp, "\151\x64\x5f\x73\155\164" => $smt->id_smt];
            goto YhOtP;
            LzvOO:
        }
        goto iStSo;
        XC_JR:
        $datas = [];
        goto tM14c;
        q1DtQ:
        $input = json_decode($this->input->post("\x6e\151\154\x61\151", true));
        goto JupNx;
        Qo1kw:
        echo json_encode($updated);
        goto inh1I;
        inh1I:
    }
    public function raporPrestasi()
    {
        goto pcv_1;
        mh7ek:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto zbfoB;
        Ebp__:
        $deskPrestasi = $this->rapor->getDeskripsiCatatanByJenis($id_kelas, "\x31", $tp->id_tp, $smt->id_smt);
        goto mlABE;
        pcv_1:
        $user = $this->ion_auth->user()->row();
        goto THKNy;
        QOTYo:
        $this->load->view("\155\x65\x6d\x62\145\162\x73\57\x67\x75\x72\165\57\164\x65\x6d\160\154\141\164\145\x73\57\150\x65\141\x64\x65\x72", $data);
        goto HQnOc;
        TeTU0:
        $nilai = [];
        goto SNkiu;
        CYeI8:
        $nilaiRata_k = [];
        goto wCWUT;
        wCWUT:
        $nilaiPts = [];
        goto VQxQ3;
        CFrrm:
        BEXYC:
        goto tm9H9;
        NWd8R:
        $no = $i + 1;
        goto xzhZ3;
        tm9H9:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto TeTU0;
        JQ4i0:
        $i++;
        goto ZR3oo;
        Ifs5T:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto nZTjt;
        JUr4m:
        $i = 0;
        goto sDdhA;
        sNc2c:
        $dummyKode = ["\61", "\64", "\61\x31", "\61\x36", "\62\x31", "\x32\66"];
        goto H_Wao;
        L2HdU:
        $dummyRank = ["\61\x20\x7e\x20\63", "\x34\40\176\40\x31\60", "\61\61\40\176\40\x31\65", "\61\66\x20\176\x20\x32\x30", "\62\61\40\x7e\40\x32\x35", "\62\x36\40\76\40\x3e"];
        goto sNc2c;
        O7Q9z:
        $dummyDeskSaran = [];
        goto L2HdU;
        oSYDb:
        $ns = $this->rapor->getRankingKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto U4Msb;
        Wodxu:
        $kelas = $this->kelas->get_one($id_kelas);
        goto O7Q9z;
        eY6pn:
        wiziu:
        goto dQsEx;
        Qn1aC:
        $nilaiRata_p = [];
        goto CYeI8;
        HQnOc:
        $this->load->view("\x6d\145\x6d\142\145\162\x73\57\x67\x75\162\x75\57\x72\x61\x70\x6f\x72\x2f\x70\162\x65\163\164\141\x73\x69\57\144\141\x74\x61");
        goto pwrV9;
        SNkiu:
        $nilaiHarian = [];
        goto Qn1aC;
        LlxEs:
        $id_siswa = $siswa->id_siswa;
        goto TBZc3;
        v9chF:
        DNngt:
        goto ImLxF;
        dQsEx:
        $nilaiRata[] = [];
        goto tMFF8;
        TTJ4x:
        goto uXCIj;
        goto eY6pn;
        nZTjt:
        $data["\x73\155\164\x5f\141\143\x74\x69\166\x65"] = $smt;
        goto QOTYo;
        sDdhA:
        uXCIj:
        goto RN32Q;
        bIOIG:
        B8k6Q:
        goto Ebp__;
        wz69U:
        $deskPrestasi = json_decode(json_encode($dummyDeskSaran));
        goto CFrrm;
        U4Msb:
        $nilai[$siswa->id_siswa] = $ns == null ? $dummyNilai : $ns;
        goto v9chF;
        xzhZ3:
        $s = ["\151\144\x5f\143\141\164\141\x74\141\x6e" => $id_kelas . 1 . $no, "\x6a\x65\156\151\163" => "\63", "\x6b\157\144\145" => $dummyKode[$i], "\144\x65\x73\x6b\162\x69\x70\x73\x69" => $this->rapor->getDummyDeskripsiRanking()[$i], "\x72\141\x6e\153" => $dummyRank[$i]];
        goto Xnqiq;
        mlABE:
        if (!(count($deskPrestasi) === 0)) {
            goto BEXYC;
        }
        goto wz69U;
        xZoNo:
        GepGq:
        goto oSYDb;
        VQxQ3:
        $nilaiPas = [];
        goto JUr4m;
        TBZc3:
        $dummyNilai = ["\x72\x61\156\x6b\x69\x6e\147" => '', "\144\145\x73\x6b\x72\x69\160\163\151" => '', "\160\x31" => '', "\x70\x31\x5f\x64\145\163\x6b" => '', "\160\62" => '', "\x70\x32\137\x64\x65\x73\153" => '', "\160\63" => '', "\160\x33\137\144\145\163\153" => ''];
        goto d4F9q;
        zbfoB:
        $data["\x74\x70\137\x61\143\x74\151\166\145"] = $tp;
        goto Ifs5T;
        ZR3oo:
        goto qlpbS;
        goto bIOIG;
        d4F9q:
        foreach ($mapels as $mapel) {
            goto jtwmL;
            De24w:
            $nilaiRata_p[$id_siswa][$mapel->id_mapel] = $h == null ? 0 : $h->p_rata_rata;
            goto qkjIG;
            DRrN6:
            $pas = $this->rapor->getNilaiMapelPasSiswa($mapel->id_mapel, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto Ibo47;
            qkjIG:
            $nilaiRata_k[$id_siswa][$mapel->id_mapel] = $h == null ? 0 : $h->k_rata_rata;
            goto DEiZE;
            bKuS1:
            $nilaiPts[$id_siswa][$mapel->id_mapel] = $pts == null ? 0 : $pts->nilai;
            goto DRrN6;
            q51TY:
            KHWfZ:
            goto sUcqS;
            VJtMZ:
            $nilaiHarian[$id_siswa][$mapel->id_mapel] = $h == null ? 0 : $h->jml;
            goto De24w;
            Ibo47:
            $nilaiPas[$id_siswa][$mapel->id_mapel] = $pas == null ? 0 : $pas->akhir;
            goto q51TY;
            DEiZE:
            $pts = $this->rapor->getNilaiMapelPtsSiswa($mapel->id_mapel, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto bKuS1;
            jtwmL:
            $h = $this->rapor->getJmlNilaiMapelHarianSiswa($mapel->id_mapel, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto VJtMZ;
            sUcqS:
        }
        goto xZoNo;
        eIODF:
        G2DRG:
        goto JQ4i0;
        g6yNC:
        qlpbS:
        goto ccPoA;
        Xnqiq:
        array_push($dummyDeskSaran, $s);
        goto eIODF;
        jSnij:
        $smt = $this->dashboard->getSemesterActive();
        goto EPZ84;
        tMFF8:
        $data = ["\x75\x73\x65\x72" => $user, "\x6a\165\144\x75\x6c" => "\x52\141\156\153\x69\x6e\147\40\46\x20\120\x72\x65\x73\x74\141\x73\x69\40\x4b\x65\x6c\x61\163\40", "\x73\x75\x62\152\165\144\165\x6c" => "\111\x6e\x70\165\x74\40\x4e\151\154\x61\151", "\x73\145\x74\164\151\156\147" => $this->dashboard->getSetting(), "\147\x75\162\165" => $guru, "\153\x65\154\x61\163" => $kelas, "\163\x69\163\x77\141" => $siswas, "\156\151\154\x61\151" => $nilai, "\156\x69\x6c\x61\x69\110\141\x72\151\x61\156" => $nilaiHarian, "\x6e\x69\154\141\x69\x52\x61\164\141\137\160" => $nilaiRata_p, "\x6e\x69\154\141\151\x52\x61\x74\141\x5f\153" => $nilaiRata_k, "\x6e\x69\x6c\141\151\x52\x61\164\x61" => $nilaiRata, "\156\x69\154\141\151\x50\164\x73" => $nilaiPts, "\156\151\154\141\151\120\x61\x73" => $nilaiPas, "\x64\145\x73\x6b\122\x61\156\x6b\151\x6e\x67" => $deskPrestasi, "\x6d\141\160\x65\154\x73" => $mapels];
        goto mh7ek;
        ccPoA:
        if (!($i < 6)) {
            goto B8k6Q;
        }
        goto NWd8R;
        T8Eip:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto lTTpt;
        aqKbL:
        $siswa = $siswas[$i];
        goto LlxEs;
        FKFCv:
        $mapels = $this->master->getAllMapel();
        goto T8Eip;
        pwrV9:
        $this->load->view("\x6d\x65\155\142\x65\162\163\x2f\147\x75\x72\x75\x2f\x74\145\155\x70\154\x61\x74\x65\x73\57\x66\157\157\x74\x65\162");
        goto vKo9a;
        THKNy:
        $tp = $this->dashboard->getTahunActive();
        goto jSnij;
        RN32Q:
        if (!($i < count($siswas))) {
            goto wiziu;
        }
        goto aqKbL;
        EPZ84:
        $setting = $this->dashboard->getSetting();
        goto FKFCv;
        lTTpt:
        $id_kelas = $guru->wali_kelas;
        goto Wodxu;
        H_Wao:
        $i = 0;
        goto g6yNC;
        ImLxF:
        $i++;
        goto TTJ4x;
        vKo9a:
    }
    public function savePrestasi()
    {
        goto LE6J5;
        L4w1o:
        foreach ($input as $d) {
            goto xtcLm;
            xtcLm:
            $data = ["\x69\x64\x5f\x63\x61\164\141\x74\x61\x6e" => $d->id_catatan, "\x69\144\x5f\153\145\x6c\141\x73" => $d->kelas, "\152\x65\x6e\151\x73" => $d->jenis, "\x6b\x6f\x64\145" => $d->kode, "\162\141\x6e\153" => $d->rank, "\x64\x65\163\x6b\x72\x69\160\163\151" => $d->deskripsi, "\151\144\x5f\164\160" => $tp->id_tp, "\151\144\137\163\155\x74" => $smt->id_smt];
            goto xux4d;
            f3CIp:
            McV5V:
            goto xLcn8;
            xux4d:
            $update = $this->db->replace("\162\x61\160\x6f\162\x5f\144\141\164\x61\x5f\143\141\x74\141\x74\x61\x6e", $data);
            goto f3CIp;
            xLcn8:
        }
        goto CxwYp;
        yN93u:
        $smt = $this->dashboard->getSemesterActive();
        goto L4w1o;
        dqJke:
        $data["\163\x74\x61\x74\x75\x73"] = $update;
        goto Eh7Er;
        bHBeW:
        $tp = $this->dashboard->getTahunActive();
        goto yN93u;
        LE6J5:
        $input = json_decode($this->input->post("\143\141\164\141\164\x61\156", true));
        goto bHBeW;
        CxwYp:
        rKYxD:
        goto dqJke;
        Eh7Er:
        $this->output_json($data);
        goto pmV5M;
        pmV5M:
    }
    public function importPrestasi($id_kelas)
    {
        goto UI4Vl;
        UqW3Y:
        $smt = $this->dashboard->getSemesterActive();
        goto dwtxb;
        ojuOl:
        foreach ($datas as $data) {
            goto L5X0e;
            ZuPkf:
            $updated++;
            goto HSIq5;
            a2J2C:
            c4545:
            goto CLcJZ;
            HSIq5:
            CMgqW:
            goto a2J2C;
            LfgfW:
            if (!$update) {
                goto CMgqW;
            }
            goto ZuPkf;
            L5X0e:
            $update = $this->db->replace("\x72\141\160\x6f\162\137\x70\x72\x65\163\164\141\x73\x69", $data);
            goto LfgfW;
            CLcJZ:
        }
        goto JwBhp;
        U5MPo:
        foreach ($input as $in) {
            goto RisTj;
            RisTj:
            $id_siswa = $in[12];
            goto B_pvW;
            B_pvW:
            $datas[] = ["\x69\x64\137\162\x61\156\153\151\x6e\147" => $id_kelas . $id_siswa . $tp->id_tp . $smt->id_smt, "\151\x64\137\x73\151\x73\167\x61" => $id_siswa, "\x69\x64\x5f\x6b\x65\x6c\x61\x73" => $id_kelas, "\x69\144\x5f\164\160" => $tp->id_tp, "\x69\144\137\x73\155\164" => $smt->id_smt, "\162\141\156\153\151\156\147" => $in[4], "\x64\145\163\153\162\x69\x70\163\151" => $in[5], "\x70\61" => $in[6], "\x70\61\137\144\145\x73\x6b" => $in[7], "\160\x32" => $in[8], "\x70\x32\x5f\x64\145\x73\153" => $in[9], "\x70\x33" => $in[10], "\x70\63\137\x64\145\x73\153" => $in[11]];
            goto zzPqK;
            zzPqK:
            aruZt:
            goto kxzdK;
            kxzdK:
        }
        goto h2N2q;
        JwBhp:
        Knv7V:
        goto CZHwy;
        h2N2q:
        fSFXg:
        goto hF8rG;
        CZHwy:
        echo json_encode($updated);
        goto lOEVz;
        UI4Vl:
        $input = json_decode($this->input->post("\156\151\x6c\141\x69", true));
        goto j3lAE;
        hF8rG:
        $updated = 0;
        goto ojuOl;
        j3lAE:
        $tp = $this->dashboard->getTahunActive();
        goto UqW3Y;
        dwtxb:
        $datas = [];
        goto U5MPo;
        lOEVz:
    }
    public function raporCatatan()
    {
        goto UmQwf;
        fQELA:
        if (!($i < count($siswas))) {
            goto QjwVY;
        }
        goto kC7uA;
        UmQwf:
        $user = $this->ion_auth->user()->row();
        goto YtQ_m;
        YtQ_m:
        $tp = $this->dashboard->getTahunActive();
        goto Rhlo3;
        lce_G:
        $dummyDeskAbsensi = [];
        goto h81xk;
        pJTL0:
        $s = ["\x69\144\x5f\163\151\153\x61\x70" => $id_kelas . 2 . $no, "\152\x65\156\151\x73" => "\62", "\x6b\157\x64\145" => $no, "\x64\x65\x73\153\x72\151\x70\163\x69" => $this->rapor->getDummyDeskripsiCatatan()[$i], "\x72\x61\156\153" => ''];
        goto BArkB;
        vAzOh:
        $i++;
        goto AWDS4;
        O0zaf:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto Gug4h;
        s09NQ:
        $deskCatatan = $this->rapor->getDeskripsiCatatanByJenis($id_kelas, "\x32", $tp->id_tp, $smt->id_smt);
        goto qKoU6;
        l1Kl_:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto zpbka;
        T4hEG:
        if (!(count($deskAbsensi) === 0)) {
            goto YUNzT;
        }
        goto RNccW;
        awzYv:
        ex4Cq:
        goto hsYrf;
        AWDS4:
        goto g4dbp;
        goto o71n1;
        MX6vt:
        $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\144\x75\154" => "\101\x62\x73\145\x6e\163\x69\x20\46\40\103\x61\164\x61\x74\141\x6e\x20\113\x65\154\x61\163\x20", "\x73\x75\142\x6a\165\144\x75\154" => "\111\x6e\160\165\x74\40\x4e\x69\154\x61\x69", "\x73\x65\x74\x74\151\156\x67" => $this->dashboard->getSetting(), "\x67\x75\162\165" => $guru, "\153\145\154\141\163" => $kelas, "\x73\x69\163\167\x61" => $siswas, "\x6e\151\154\141\151" => $nilai, "\x64\145\163\153\101\x62\x73\145\156\163\151" => $deskAbsensi, "\144\145\163\x6b\x43\141\164\141\164\141\x6e" => $deskCatatan];
        goto VEfv7;
        hsYrf:
        $deskAbsensi = $this->rapor->getDeskripsiCatatanByJenis($id_kelas, "\61", $tp->id_tp, $smt->id_smt);
        goto T4hEG;
        OZWl1:
        vCjgO:
        goto vAzOh;
        mBSAU:
        g4dbp:
        goto fQELA;
        M5g3x:
        $no = $i + 1;
        goto oH_R9;
        XyEL0:
        YUNzT:
        goto s09NQ;
        RNccW:
        $deskAbsensi = json_decode(json_encode($dummyDeskAbsensi));
        goto XyEL0;
        aOMBV:
        $i = 0;
        goto mBSAU;
        fexxY:
        $this->load->view("\x6d\x65\x6d\x62\x65\x72\x73\57\x67\165\x72\165\x2f\164\145\x6d\x70\x6c\x61\164\145\163\x2f\150\145\141\144\145\162", $data);
        goto CKtia;
        VFtUT:
        $this->load->view("\x6d\145\x6d\142\145\162\x73\x2f\147\165\162\x75\x2f\x74\x65\x6d\x70\x6c\141\164\x65\163\x2f\146\x6f\157\164\x65\x72");
        goto JA0lO;
        Rhlo3:
        $smt = $this->dashboard->getSemesterActive();
        goto I3fJs;
        Gug4h:
        $nilai = [];
        goto aOMBV;
        MlIBd:
        array_push($dummyDeskAbsensi, $s);
        goto zROZG;
        W_D1Y:
        $i++;
        goto clkc3;
        sLRJR:
        $data["\164\160\x5f\141\143\164\x69\166\145"] = $tp;
        goto l1Kl_;
        qKoU6:
        if (!(count($deskCatatan) === 0)) {
            goto iPTCV;
        }
        goto auhmz;
        Rtg5s:
        TpXGh:
        goto YTLdh;
        RAh0W:
        goto TpXGh;
        goto Si9k1;
        zROZG:
        LrWdF:
        goto GDLHG;
        LMG4o:
        $dummyDeskCatatan = [];
        goto Sm6Z_;
        GDLHG:
        $i++;
        goto RAh0W;
        zpbka:
        $data["\163\x6d\164\137\141\x63\164\x69\166\x65"] = $smt;
        goto fexxY;
        QJ9Sy:
        $i = 0;
        goto Rtg5s;
        GHRkL:
        $no = $i + 1;
        goto pJTL0;
        VEfv7:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto sLRJR;
        I3fJs:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto g5MnQ;
        u9YKL:
        $nilai[$siswa->id_siswa] = $ns == null ? $dummyNilai : unserialize($ns->nilai);
        goto OZWl1;
        kC7uA:
        $siswa = $siswas[$i];
        goto zPwXg;
        clkc3:
        goto ZKj7z;
        goto awzYv;
        Pf7Gd:
        wN6Gh:
        goto W_D1Y;
        zPwXg:
        $dummyNilai = ["\163" => '', "\151" => '', "\x61" => '', "\157\x70\61" => '', "\x6f\x70\62" => '', "\157\160\63" => ''];
        goto V3KU5;
        g5MnQ:
        $id_kelas = $guru->wali_kelas;
        goto ud0tb;
        BArkB:
        array_push($dummyDeskCatatan, $s);
        goto Pf7Gd;
        h81xk:
        $dummyRank = ["\61\40\176\x20\x33", "\64\x20\176\x20\x31\x30", "\61\x31\40\176\x20\x31\x35", "\61\x36\x20\76\40\x3e"];
        goto Ly5XL;
        V9abw:
        iPTCV:
        goto O0zaf;
        oH_R9:
        $s = ["\151\144\137\143\141\x74\141\164\141\x6e" => $id_kelas . 1 . $no, "\152\x65\156\x69\x73" => "\61", "\153\157\144\145" => $dummyKode[$i], "\144\145\x73\153\x72\151\x70\x73\x69" => $this->rapor->getDummyDeskripsiAbsensi()[$i], "\162\141\156\153" => $dummyRank[$i]];
        goto MlIBd;
        YTLdh:
        if (!($i < 4)) {
            goto MkFgd;
        }
        goto M5g3x;
        Si9k1:
        MkFgd:
        goto LMG4o;
        OEOzk:
        ZKj7z:
        goto SpQg2;
        SpQg2:
        if (!($i < 6)) {
            goto ex4Cq;
        }
        goto GHRkL;
        Sm6Z_:
        $i = 0;
        goto OEOzk;
        Ly5XL:
        $dummyKode = ["\61", "\64", "\61\x31", "\61\x36"];
        goto QJ9Sy;
        V3KU5:
        $ns = $this->rapor->getCatatanKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto u9YKL;
        CKtia:
        $this->load->view("\155\x65\x6d\142\145\x72\x73\57\x67\x75\162\x75\x2f\x72\x61\160\157\x72\57\x63\141\x74\141\164\141\156\57\144\141\164\x61");
        goto VFtUT;
        ud0tb:
        $kelas = $this->kelas->get_one($id_kelas);
        goto lce_G;
        auhmz:
        $deskCatatan = json_decode(json_encode($dummyDeskCatatan));
        goto V9abw;
        o71n1:
        QjwVY:
        goto MX6vt;
        JA0lO:
    }
    public function saveCatatan()
    {
        goto uraI7;
        eE2r_:
        $smt = $this->dashboard->getSemesterActive();
        goto Fbwuo;
        Y1PTi:
        $tp = $this->dashboard->getTahunActive();
        goto eE2r_;
        JL8UG:
        $data["\163\164\141\x74\x75\x73"] = $update;
        goto cEDF6;
        cEDF6:
        $this->output_json($data);
        goto kj8Ml;
        Fbwuo:
        foreach ($input as $d) {
            goto uQOGa;
            uQOGa:
            $data = ["\x69\144\137\143\x61\164\x61\164\141\156" => $d->id_catatan, "\151\144\137\153\x65\154\x61\163" => $d->kelas, "\x6a\x65\x6e\x69\x73" => $d->jenis, "\x6b\x6f\144\145" => $d->kode, "\162\141\156\153" => $d->rank, "\144\145\163\x6b\162\151\x70\163\x69" => $d->deskripsi, "\151\x64\x5f\x74\x70" => $tp->id_tp, "\x69\144\137\163\155\164" => $smt->id_smt];
            goto AGDaF;
            jPSbh:
            saGpH:
            goto zn2GP;
            AGDaF:
            $update = $this->db->replace("\162\141\x70\157\x72\x5f\144\x61\x74\x61\x5f\x63\x61\x74\x61\x74\141\x6e", $data);
            goto jPSbh;
            zn2GP:
        }
        goto HCAIS;
        uraI7:
        $input = json_decode($this->input->post("\143\141\164\x61\x74\141\x6e", true));
        goto Y1PTi;
        HCAIS:
        QuPOb:
        goto JL8UG;
        kj8Ml:
    }
    public function importCatatan($id_kelas)
    {
        goto fNRSX;
        fNRSX:
        $input = json_decode($this->input->post("\x6e\x69\x6c\x61\x69", true));
        goto knBzj;
        A91Gi:
        echo json_encode($updated);
        goto g4fws;
        roz1Z:
        h3OpI:
        goto A91Gi;
        oCQrB:
        $datas = [];
        goto lkS1g;
        lkS1g:
        foreach ($input as $in) {
            goto PLEwj;
            mUqn1:
            UoRtC:
            goto oA3Y4;
            wI31a:
            AzfDS:
            goto mUqn1;
            Ih2a7:
            if (!($id_siswa != "\151\x64")) {
                goto AzfDS;
            }
            goto v4Xfe;
            PLEwj:
            $id_siswa = $in[10];
            goto Ih2a7;
            v4Xfe:
            $datas[] = ["\x69\x64\x5f\143\x61\x74\141\x74\141\156\x5f\167\141\154\x69" => $id_kelas . $id_siswa . $tp->id_tp . $smt->id_smt, "\151\144\x5f\x73\151\163\167\x61" => $id_siswa, "\x69\144\137\153\145\154\141\x73" => $id_kelas, "\156\151\x6c\141\x69" => serialize(["\x6f\x70\61" => $in[3], "\x6f\160\x32" => $in[4], "\x6f\160\63" => $in[5], "\163" => $in[6], "\151" => $in[7], "\141" => $in[8]]), "\144\145\163\x6b\x72\x69\160\x73\x69" => $in[9], "\x69\x64\x5f\x74\160" => $tp->id_tp, "\151\x64\x5f\163\x6d\164" => $smt->id_smt];
            goto wI31a;
            oA3Y4:
        }
        goto AdcDK;
        Bbj6g:
        $smt = $this->dashboard->getSemesterActive();
        goto oCQrB;
        AUYbQ:
        $updated = 0;
        goto WicKG;
        WicKG:
        foreach ($datas as $data) {
            goto IyudD;
            VWeVo:
            WbnFD:
            goto FWTed;
            XE9HR:
            $updated++;
            goto gOUlv;
            IyudD:
            $update = $this->db->replace("\162\x61\160\157\x72\137\x63\141\x74\141\164\x61\x6e\137\x77\141\154\x69", $data);
            goto id10x;
            gOUlv:
            ClhDE:
            goto VWeVo;
            id10x:
            if (!$update) {
                goto ClhDE;
            }
            goto XE9HR;
            FWTed:
        }
        goto roz1Z;
        knBzj:
        $tp = $this->dashboard->getTahunActive();
        goto Bbj6g;
        AdcDK:
        iMDZL:
        goto AUYbQ;
        g4fws:
    }
    public function raporFisik()
    {
        goto U9nIo;
        FgYQP:
        $jenis = ["\x31", "\62", "\63", "\64"];
        goto nQ1Pc;
        zxyzB:
        Ur98G:
        goto RQ1o6;
        IWHWN:
        if ($smt->id_smt === "\61") {
            goto sBKKf;
        }
        goto cuL7O;
        yNUhG:
        $smt = $this->dashboard->getSemesterActive();
        goto GRlUE;
        iqd3G:
        OCJuV:
        goto RNAn3;
        kRgf1:
        $kelas = $this->kelas->get_one($id_kelas);
        goto maRrD;
        l0DHs:
        $i++;
        goto vWidL;
        LWwqU:
        G2TyC:
        goto l0DHs;
        Dy01v:
        $deskFisik = json_decode(json_encode($dummyDeskFisik));
        goto Mk3fo;
        XN_Cp:
        sMGZW:
        goto YAM7h;
        Z8UrD:
        $ns = $this->rapor->getFisikKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto ZYuuP;
        Zn_v1:
        $this->load->view("\x6d\145\155\142\x65\x72\x73\x2f\147\165\x72\x75\x2f\162\141\x70\157\x72\x2f\x66\151\163\x69\153\57\144\x61\x74\141");
        goto zqNfO;
        zLw3f:
        $no = $i + 1;
        goto nZmC1;
        cuL7O:
        $other = "\x31";
        goto QwwbF;
        iPIU5:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto euXT0;
        nZmC1:
        foreach ($jenis as $jns) {
            goto Jrgk3;
            AE9KX:
            array_push($dummyDeskFisik, $s);
            goto xpH5H;
            Jrgk3:
            $s = ["\151\x64\137\146\151\x73\151\x6b" => $id_kelas . $jns . $no, "\152\145\x6e\151\x73" => $jns, "\153\x6f\144\145" => $no, "\x64\x65\163\x6b\162\x69\x70\163\x69" => $this->rapor->getDummyDeskripsiFisik($jns)[$i]];
            goto AE9KX;
            xpH5H:
            SevuX:
            goto HKsrp;
            HKsrp:
        }
        goto xUGJX;
        GRlUE:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto vqgr4;
        f9oNx:
        $nilai = [];
        goto IWHWN;
        XscuT:
        $data["\x73\x6d\x74\x5f\x61\143\x74\x69\166\145"] = $smt;
        goto jYhdP;
        vqgr4:
        $id_kelas = $guru->wali_kelas;
        goto kRgf1;
        Uw8Po:
        sBKKf:
        goto WVs8n;
        ufA71:
        $dummyNilai = ["\153\x6f\x6e\144\x69\163\151" => ["\x74\x65\154\151\x6e\x67\x61" => '', "\155\141\x74\141" => '', "\x67\x69\x67\x69" => '', "\154\141\x69\x6e" => ''], "\x73\x6d\164" . $smt->id_smt => ["\164\151\156\147\x67\x69" => '', "\x62\x65\162\141\x74" => '', "\x74\160" => $tp->id_tp], "\163\155\x74" . $other => ["\164\151\x6e\x67\x67\151" => '', "\x62\x65\162\141\x74" => '', "\x74\160" => $tp->id_tp]];
        goto Z8UrD;
        Mk3fo:
        d9OzB:
        goto KcZTW;
        Zmvaj:
        $siswa = $siswas[$i];
        goto ufA71;
        rXpRC:
        $i++;
        goto hp963;
        RQ1o6:
        if (!($i < count($siswas))) {
            goto OCJuV;
        }
        goto Zmvaj;
        vWidL:
        goto sMGZW;
        goto EHROY;
        ZYuuP:
        $ns2 = $this->rapor->getFisikKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $other);
        goto OnnUk;
        maRrD:
        $dummyDeskFisik = [];
        goto FgYQP;
        U9nIo:
        $user = $this->ion_auth->user()->row();
        goto GIuPA;
        OB0xA:
        if (!($deskFisik == null)) {
            goto d9OzB;
        }
        goto Dy01v;
        xUGJX:
        Jsa_R:
        goto LWwqU;
        EHROY:
        I60dd:
        goto jpR2Y;
        KcZTW:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto f9oNx;
        hp963:
        goto Ur98G;
        goto iqd3G;
        QwwbF:
        goto OtrjD;
        goto Uw8Po;
        jpR2Y:
        $deskFisik = $this->rapor->getDeskripsiFisikKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto OB0xA;
        ucpbT:
        GzP8w:
        goto rXpRC;
        WVs8n:
        $other = "\62";
        goto Nqlo0;
        YAM7h:
        if (!($i < 4)) {
            goto I60dd;
        }
        goto zLw3f;
        jYhdP:
        $this->load->view("\x6d\x65\155\142\145\162\x73\x2f\x67\x75\x72\165\57\164\145\155\160\154\x61\164\145\163\x2f\x68\x65\x61\x64\145\x72", $data);
        goto Zn_v1;
        zqNfO:
        $this->load->view("\x6d\145\155\x62\x65\x72\x73\x2f\x67\x75\x72\165\x2f\x74\145\x6d\160\x6c\x61\164\145\x73\57\x66\157\x6f\x74\x65\162");
        goto HB7rQ;
        RNAn3:
        $data = ["\x75\x73\145\x72" => $user, "\152\x75\x64\165\x6c" => "\x41\142\x73\x65\x6e\163\x69\x20\x26\40\x43\x61\x74\141\164\141\x6e\40\113\x65\x6c\x61\163\40", "\x73\165\x62\152\165\x64\165\154" => "\x49\156\160\165\164\40\x4e\x69\x6c\x61\x69", "\163\x65\164\164\151\x6e\147" => $this->dashboard->getSetting(), "\x67\x75\x72\165" => $guru, "\153\145\154\141\x73" => $kelas, "\163\x69\163\167\x61" => $siswas, "\156\151\154\141\x69" => $nilai, "\144\x65\163\153\106\151\x73\151\153" => $deskFisik];
        goto iPIU5;
        nQ1Pc:
        $i = 0;
        goto XN_Cp;
        euXT0:
        $data["\x74\x70\137\141\x63\164\151\166\x65"] = $tp;
        goto GJA6D;
        Nqlo0:
        OtrjD:
        goto A2eoG;
        A2eoG:
        $i = 0;
        goto zxyzB;
        OnnUk:
        $nilai[$siswa->id_siswa] = $ns != null ? ["\153\x6f\156\144\151\x73\151" => unserialize($ns->kondisi), "\163\x6d\x74" . $ns->id_smt => ["\164\x69\x6e\147\147\x69" => $ns->tinggi, "\142\145\162\141\x74" => $ns->berat, "\164\160" => $ns->id_tp], "\163\155\x74" . $other => ["\164\x69\156\147\x67\x69" => $ns2 != null ? $ns2->tinggi : '', "\142\145\162\141\x74" => $ns2 != null ? $ns2->berat : '', "\164\x70" => $tp->id_tp]] : $dummyNilai;
        goto ucpbT;
        GJA6D:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto XscuT;
        GIuPA:
        $tp = $this->dashboard->getTahunActive();
        goto yNUhG;
        HB7rQ:
    }
    public function saveFisik()
    {
        goto JVQZX;
        uidwd:
        foreach ($input as $d) {
            goto QWzNv;
            yxAAf:
            $jns = $d[0];
            goto oVkxu;
            RI0dO:
            $update = $this->db->replace("\162\x61\160\x6f\162\137\144\x61\x74\x61\137\146\151\x73\x69\x6b", $data);
            goto YLL4I;
            oVkxu:
            $data = ["\x69\x64\137\x66\151\x73\x69\153" => $kelas . $jns . $kode, "\x69\x64\x5f\153\x65\x6c\x61\163" => $kelas, "\x6a\x65\156\x69\163" => $d->jenis, "\153\x6f\144\x65" => $d->kode, "\x64\145\x73\x6b\x72\151\x70\x73\x69" => $d->deskripsi, "\x69\x64\137\164\x70" => $tp->id_tp, "\x69\144\x5f\163\x6d\x74" => $smt->id_smt];
            goto RI0dO;
            YLL4I:
            IXU5N:
            goto pwwiT;
            QWzNv:
            $kode = $d[0];
            goto yxAAf;
            pwwiT:
        }
        goto dY2zO;
        FzCAa:
        $update = false;
        goto O0VX6;
        FutoZ:
        $smt = $this->dashboard->getSemesterActive();
        goto uidwd;
        O0VX6:
        $tp = $this->dashboard->getTahunActive();
        goto FutoZ;
        dY2zO:
        MQwvo:
        goto yzaRj;
        IKTAg:
        $this->output_json($data);
        goto r63Us;
        JVQZX:
        $kelas = $this->input->post("\x6b\x65\154\x61\163", true);
        goto EZQ_D;
        yzaRj:
        $data["\163\x74\141\x74\165\x73"] = $update;
        goto IKTAg;
        EZQ_D:
        $input = json_decode($this->input->post("\x66\x69\163\x69\x6b", true));
        goto FzCAa;
        r63Us:
    }
    public function importFisik($id_kelas)
    {
        goto DV25K;
        fw8IW:
        echo json_encode($updated);
        goto gMsi9;
        figcT:
        OK6KS:
        goto fw8IW;
        UJZZ0:
        $smt = $this->dashboard->getSemesterActive();
        goto vuyMX;
        Wksyj:
        $tp = $this->dashboard->getTahunActive();
        goto UJZZ0;
        FVz_a:
        csVO9:
        goto v_KmX;
        gcJjG:
        foreach ($input as $in) {
            goto nLkF4;
            KIfwe:
            $datas[] = ["\151\144\137\146\x69\163\x69\153" => $id_kelas . $id_siswa . $tp->id_tp . $smt->id_smt, "\x69\144\137\153\x65\x6c\x61\163" => $id_kelas, "\x69\x64\137\163\151\163\x77\141" => $id_siswa, "\151\x64\x5f\164\x70" => $tp->id_tp, "\x69\144\137\x73\x6d\164" => $smt->id_smt, "\x74\x69\x6e\147\147\x69" => $tinggi, "\x62\145\x72\x61\x74" => $berat, "\153\x6f\156\x64\x69\163\x69" => serialize(["\x74\145\154\x69\156\147\x61" => $in[7], "\155\141\x74\x61" => $in[8], "\147\151\x67\x69" => $in[9], "\154\x61\x69\156" => $in[10]])];
            goto a54Ur;
            a54Ur:
            y354m:
            goto h_35W;
            h_35W:
            q1uQ6:
            goto JHvim;
            uE0l9:
            if (!($id_siswa != "\x69\x64")) {
                goto y354m;
            }
            goto KIfwe;
            nLkF4:
            $id_siswa = $in[11];
            goto xTHij;
            OVrY0:
            $berat = $smt->id_smt == 1 ? $in[5] : $in[6];
            goto uE0l9;
            xTHij:
            $tinggi = $smt->id_smt == 1 ? $in[3] : $in[4];
            goto OVrY0;
            JHvim:
        }
        goto FVz_a;
        t56va:
        foreach ($datas as $data) {
            goto MfnXD;
            HKPjW:
            p60F8:
            goto oYxLn;
            F29tP:
            $updated++;
            goto HKPjW;
            oYxLn:
            DINmV:
            goto ujCht;
            MfnXD:
            $update = $this->db->replace("\x72\141\x70\x6f\162\137\146\151\163\151\153", $data);
            goto ELqBU;
            ELqBU:
            if (!$update) {
                goto p60F8;
            }
            goto F29tP;
            ujCht:
        }
        goto figcT;
        DV25K:
        $input = json_decode($this->input->post("\156\151\x6c\141\151", true));
        goto Wksyj;
        vuyMX:
        $datas = [];
        goto gcJjG;
        v_KmX:
        $updated = 0;
        goto t56va;
        gMsi9:
    }
    public function raporNaik()
    {
        goto hhQDS;
        MEPMX:
        $data["\163\x6d\x74\137\141\143\164\x69\x76\x65"] = $smt;
        goto KWUZj;
        StUQd:
        $this->load->view("\155\145\155\x62\x65\162\x73\57\x67\165\x72\165\57\x72\141\160\x6f\162\57\153\145\156\x61\151\153\x61\156\57\x64\x61\x74\x61");
        goto UaAe_;
        b84j5:
        $kelas = $this->kelas->get_one($id_kelas);
        goto oUuNu;
        eqJ0N:
        $data["\x74\160\137\141\x63\x74\151\x76\145"] = $tp;
        goto ctuDA;
        ce1ir:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto CE4TM;
        CapSx:
        $data = ["\x75\x73\145\162" => $user, "\152\165\x64\165\x6c" => "\113\x65\156\141\151\x6b\141\156\x20\113\145\x6c\x61\x73\x20", "\163\x75\x62\152\165\144\x75\154" => "\x53\151\x73\x77\x61\x20\113\145\154\x61\163\x20", "\x73\145\164\x74\151\x6e\147" => $this->dashboard->getSetting(), "\147\x75\x72\165" => $guru, "\153\x65\154\x61\x73" => $kelas, "\x73\x69\x73\167\x61\x73" => $siswas];
        goto VAaoc;
        VAaoc:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto eqJ0N;
        CE4TM:
        $id_kelas = $guru->wali_kelas;
        goto b84j5;
        oUuNu:
        $siswas = $this->rapor->getKenaikanSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto CapSx;
        UaAe_:
        $this->load->view("\155\x65\x6d\142\145\x72\163\57\147\x75\162\165\x2f\x74\145\155\160\154\141\x74\145\163\x2f\146\157\157\164\x65\162");
        goto HN6UJ;
        eUZ7z:
        $smt = $this->dashboard->getSemesterActive();
        goto ce1ir;
        ctuDA:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto MEPMX;
        hhQDS:
        $user = $this->ion_auth->user()->row();
        goto FhdRv;
        KWUZj:
        $this->load->view("\x6d\x65\x6d\x62\x65\162\163\57\x67\165\x72\x75\x2f\164\145\155\x70\154\x61\x74\x65\163\x2f\x68\145\x61\x64\x65\x72", $data);
        goto StUQd;
        FhdRv:
        $tp = $this->dashboard->getTahunActive();
        goto eUZ7z;
        HN6UJ:
    }
    public function saveNaik()
    {
        goto tiTuB;
        tiTuB:
        $input = json_decode($this->input->post("\156\x61\151\x6b", true));
        goto MJJ92;
        ck4kH:
        $updated = 0;
        goto PQc2w;
        T_lmF:
        echo json_encode($updated);
        goto Sel77;
        ZaerG:
        T9M4M:
        goto T_lmF;
        IGZid:
        $smt = $this->dashboard->getSemesterActive();
        goto ck4kH;
        PQc2w:
        foreach ($input as $d) {
            goto eaIr_;
            d3BoN:
            if (!$update) {
                goto B3HM2;
            }
            goto GcmOX;
            Ei67f:
            uX2Py:
            goto Ixs1k;
            um03k:
            B3HM2:
            goto Ei67f;
            eaIr_:
            $data = ["\151\x64\x5f\x6e\141\151\153" => $d->id_siswa . $tp->id_tp . $smt->id_smt, "\151\x64\137\163\x69\x73\x77\x61" => $d->id_siswa, "\x69\x64\x5f\164\160" => $tp->id_tp, "\x69\144\137\163\155\x74" => $smt->id_smt, "\x6e\x61\x69\x6b" => $d->naik];
            goto LTx15;
            LTx15:
            $update = $this->db->replace("\162\x61\x70\x6f\x72\137\x6e\x61\x69\x6b", $data);
            goto d3BoN;
            GcmOX:
            $updated++;
            goto um03k;
            Ixs1k:
        }
        goto ZaerG;
        MJJ92:
        $tp = $this->dashboard->getTahunActive();
        goto IGZid;
        Sel77:
    }
    public function cetakPts()
    {
        goto QBtju;
        kSmEF:
        $mapels = $this->master->getAllMapel(empty($arrk) ? null : $arrk, isset($jurusan->mapel_peminatan) ? $jurusan->mapel_peminatan : null);
        goto yEwCL;
        loEKA:
        $kelompoks = $this->master->getKodeKelompokMapel();
        goto IhEu6;
        nziAw:
        $data["\x6e\151\x6c\141\151\x5f\x68\141\162\151\141\x6e"] = $nilaiHarian;
        goto BRz2R;
        QBtju:
        $user = $this->ion_auth->user()->row();
        goto DnXdW;
        dOyZY:
        $data["\153\x65\154\x61\163"] = $kelas->nama_kelas;
        goto X31Hv;
        Jhp6n:
        tQ8ZU:
        goto gwIZe;
        lfoXf:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto yn64H;
        iiFxY:
        qr9pA:
        goto YpXQ3;
        H9ZCt:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto UZXrC;
        eeWE4:
        foreach ($kategori_mapel as $kk => $km) {
            goto KMA9x;
            KMA9x:
            if (in_array($km, $arrk)) {
                goto e_L9n;
            }
            goto ipO1S;
            jtL0G:
            doACs:
            goto JKMP8;
            ipO1S:
            array_push($arrk, $km->kode_kel_mapel);
            goto QlCSW;
            QlCSW:
            e_L9n:
            goto jtL0G;
            JKMP8:
        }
        goto LKfkj;
        yEwCL:
        $nilaiHarian = [];
        goto E1h54;
        Gk0to:
        $this->load->view("\x6d\145\x6d\x62\145\162\x73\57\x67\x75\162\x75\x2f\164\145\x6d\x70\x6c\x61\164\x65\x73\57\x66\x6f\157\164\x65\x72");
        goto pmjjB;
        wlqn3:
        $data["\x6e\x69\154\x61\151\x5f\160\164\x73"] = $nilaiPts;
        goto nziAw;
        y7XTJ:
        $data["\163\x69\x73\167\141\x73"] = $siswas;
        goto dOyZY;
        IK0NM:
        $i = 0;
        goto XfhfR;
        FDrsP:
        $arrk = [];
        goto eeWE4;
        BRz2R:
        $data["\x6b\x6b\x6d"] = $kkm;
        goto OiQk6;
        ARd3w:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto Ue5NX;
        yn64H:
        $id_kelas = $guru->wali_kelas;
        goto T5UDt;
        x4114:
        $dummyNilai = ["\160\x31" => '', "\x70\x32" => '', "\160\x33" => '', "\x70\x34" => '', "\x70\x35" => '', "\153\61" => '', "\x6b\x32" => '', "\x6b\x33" => '', "\x6b\x34" => '', "\x6b\x35" => ''];
        goto oJhJR;
        Ue5NX:
        $data["\164\160\137\x61\143\164\151\x76\145"] = $tp;
        goto ImbK8;
        jgcmp:
        dYXaT:
        goto Jhp6n;
        JBH4o:
        $kkm = [];
        goto IK0NM;
        OiQk6:
        $data["\162\x61\160\157\x72"] = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto Gleea;
        RVLIj:
        $tp = $this->dashboard->getTahunActive();
        goto ZoKgc;
        Gleea:
        $this->load->view("\x6d\145\x6d\x62\x65\x72\x73\x2f\147\x75\x72\165\x2f\x74\145\x6d\x70\x6c\141\x74\145\163\x2f\150\145\141\x64\x65\x72", $data);
        goto Gi05c;
        oJhJR:
        $settingRapor = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto JBH4o;
        DnXdW:
        $setting = $this->dashboard->getSetting();
        goto RVLIj;
        gwIZe:
        $i++;
        goto Y5ANj;
        cJZig:
        $siswa = $siswas[$i];
        goto x2xU3;
        UZXrC:
        $jurusan = $this->kelas->getJurusanById($kelas->jurusan_id);
        goto loEKA;
        dDO71:
        $data["\163\155\x74\x5f\x61\143\164\x69\x76\145"] = $smt;
        goto JRgVh;
        E1h54:
        $nilaiPts = [];
        goto x4114;
        JRgVh:
        $data["\147\165\162\x75"] = $guru;
        goto y7XTJ;
        T5UDt:
        $kelas = $this->kelas->get_one($id_kelas);
        goto H9ZCt;
        IhEu6:
        $kategori_mapel = $this->master->getKategoriKelompokMapel();
        goto FDrsP;
        YpXQ3:
        $data = ["\165\163\x65\x72" => $user, "\x6a\165\144\x75\x6c" => "\122\141\160\x6f\162\40\x50\x54\x53", "\163\165\x62\152\x75\144\x75\x6c" => "\x43\145\164\141\x6b\x20\122\x61\160\x6f\x72\x20\120\124\123", "\163\x65\x74\164\151\156\147" => $setting];
        goto ARd3w;
        LKfkj:
        aYvks:
        goto kSmEF;
        HiQdR:
        $data["\153\x65\154\x6f\155\160\x6f\x6b\163"] = $kelompoks;
        goto wlqn3;
        D1WpK:
        foreach ($mapels as $mapel) {
            goto p7urV;
            xZBVt:
            $nilaiPts[$id_siswa][$mapel->id_mapel] = $pts == null ? 0 : $pts->nilai;
            goto oWhxH;
            X51ef:
            Fkl9j:
            goto Fo5SN;
            Fo5SN:
            ZhFjP:
            goto NenXd;
            UKraI:
            goto Fkl9j;
            goto FmF_G;
            oWhxH:
            if (isset($settingRapor) && $settingRapor->kkm_tunggal == "\x31") {
                goto GicnC;
            }
            goto wIC3N;
            p7urV:
            $h = $this->rapor->getNilaiMapelHarianSiswa($mapel->id_mapel, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto rT16X;
            saI2u:
            $pts = $this->rapor->getNilaiMapelPtsSiswa($mapel->id_mapel, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto xZBVt;
            rT16X:
            $nilaiHarian[$id_siswa][$mapel->id_mapel] = $h == null ? json_decode(json_encode($dummyNilai)) : $h;
            goto saI2u;
            quT7Q:
            $kkm[$mapel->id_mapel] = $settingRapor;
            goto X51ef;
            wIC3N:
            $kkm[$mapel->id_mapel] = $this->rapor->getKkm($mapel->id_mapel . $id_kelas . $tp->id_tp . $smt->id_smt . "\x31");
            goto UKraI;
            FmF_G:
            GicnC:
            goto quT7Q;
            NenXd:
        }
        goto jgcmp;
        iVVg7:
        if (!($i < count($siswas))) {
            goto qr9pA;
        }
        goto cJZig;
        x2xU3:
        $id_siswa = $siswa->id_siswa;
        goto D1WpK;
        ZoKgc:
        $smt = $this->dashboard->getSemesterActive();
        goto lfoXf;
        Gi05c:
        $this->load->view("\155\145\155\142\x65\x72\x73\57\x67\x75\x72\165\x2f\x72\141\160\157\x72\x2f\x63\145\x74\141\153\57\160\164\163");
        goto Gk0to;
        X31Hv:
        $data["\155\x61\160\x65\x6c\x73"] = $mapels;
        goto HiQdR;
        XfhfR:
        cIBoy:
        goto iVVg7;
        Y5ANj:
        goto cIBoy;
        goto iiFxY;
        ImbK8:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto dDO71;
        pmjjB:
    }
    public function cetakAkhir()
    {
        goto GfjEw;
        dozZf:
        $settingRapor = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto ZjB0p;
        mtL0k:
        AUhEn:
        goto b4LdL;
        lVuQ7:
        $data["\x6c\x76\154\137\153\x65\x6c\x61\163"] = $kelas->level;
        goto j0o1k;
        j0o1k:
        $data["\x6d\x61\x70\145\x6c\x73"] = $mapels;
        goto c4CXa;
        ZjB0p:
        $kkm = [];
        goto WthE9;
        b_TPK:
        foreach ($kategori_mapel as $kk => $km) {
            goto TI_DV;
            U0mAL:
            array_push($arrk, $km->kode_kel_mapel);
            goto tVY2Q;
            tVY2Q:
            g1RDo:
            goto cAz9m;
            TI_DV:
            if (in_array($km, $arrk)) {
                goto g1RDo;
            }
            goto U0mAL;
            cAz9m:
            RQgRJ:
            goto ypb8a;
            ypb8a:
        }
        goto FbAom;
        jTGLt:
        $data["\153\x65\x6c\x61\163"] = $kelas->nama_kelas;
        goto lVuQ7;
        NsdnW:
        $nilaiEkstra = [];
        goto dlVDd;
        MlyDC:
        foreach ($ekstras as $ext) {
            goto KfTOC;
            NE5K4:
            OFqog:
            goto FjNh8;
            koCGy:
            $arrEkstra = json_decode(json_encode(unserialize($ext->ekstra)));
            goto cVFLB;
            FjNh8:
            MFEYu:
            goto rzoVM;
            cVFLB:
            foreach ($arrEkstra as $ar) {
                goto ZVahw;
                rRi0W:
                $mapelEkstra[$id_ekstra] = $this->kelas->getEkskulById($id_ekstra);
                goto IAQR3;
                ydWb1:
                fuAk6:
                goto XoP9Q;
                qD9yh:
                $ne = $this->rapor->getEkstraKelas($id_ekstra, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
                goto D6MCn;
                qM75h:
                PPz48:
                goto ydWb1;
                IAQR3:
                if (!($id_ekstra != null)) {
                    goto PPz48;
                }
                goto qD9yh;
                ZVahw:
                $id_ekstra = $ar->ekstra;
                goto rRi0W;
                D6MCn:
                $nilaiEkstra[$id_siswa][$id_ekstra] = $ne == null ? $dummyEkstra : $ne;
                goto qM75h;
                XoP9Q:
            }
            goto NE5K4;
            KfTOC:
            $dummyEkstra = ["\x64\145\163\153\162\x69\160\x73\151" => '', "\x6e\151\x6c\x61\151" => '', "\x70\x72\145\144\151\153\x61\x74" => ''];
            goto koCGy;
            rzoVM:
        }
        goto p_XA4;
        g6qpB:
        $data["\x61\142\x73\145\156\x73\151"] = $absensi;
        goto ShuCL;
        nUZOY:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto HmHew;
        x58nP:
        if (count($nilai_sikap) > 0) {
            goto ZbYpm;
        }
        goto v5c82;
        fioMv:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto Utk8G;
        HttUC:
        ByJA_:
        goto lNnLu;
        puZbW:
        $absensi = [];
        goto BdoQO;
        jRHBJ:
        $kelompoks = $this->master->getKodeKelompokMapel();
        goto TeWi6;
        GF8hT:
        cNSX3:
        goto zk4HE;
        NFi9_:
        t2gQs:
        goto zvnej;
        JwBiO:
        foreach ($nilai_sikap as $nls) {
            goto iLGRH;
            iLGRH:
            if (!($nls->id_siswa == $id_siswa && $nls->jenis == "\x31")) {
                goto srjgn;
            }
            goto bRIHf;
            bRIHf:
            $sikap[$id_siswa][1] = ["\x64\x65\x73\153\x72\x69\x70\163\x69" => $nls == null ? '' : $nls->deskripsi, "\160\162\145\x64\x69\x6b\141\x74" => $nls == null ? $dummySikap : unserialize($nls->nilai)];
            goto IOT1o;
            KctLw:
            icaXi:
            goto XBABI;
            fUfWe:
            $sikap[$id_siswa][2] = ["\x64\145\163\153\162\151\x70\163\151" => $nls == null ? '' : $nls->deskripsi, "\x70\162\x65\x64\x69\x6b\x61\x74" => $nls == null ? $dummySikap : unserialize($nls->nilai)];
            goto KctLw;
            XBABI:
            gfToy:
            goto dDGoZ;
            zkPI3:
            if (!($nls->id_siswa == $id_siswa && $nls->jenis == "\62")) {
                goto icaXi;
            }
            goto fUfWe;
            IOT1o:
            srjgn:
            goto zkPI3;
            dDGoZ:
        }
        goto EUETN;
        gaRRH:
        $siswa = $siswas[$i];
        goto rABKK;
        rXAqy:
        $kelas = $this->kelas->get_one($id_kelas);
        goto wLVnq;
        zk4HE:
        foreach ($mapels as $mapel) {
            goto d7HiB;
            ORQK8:
            $nilai[$id_siswa][$mapel->id_mapel] = $dummyNilai;
            goto opdFQ;
            POP9L:
            $nr = $nilai_rapor[$key_mapel];
            goto iKpBF;
            d7HiB:
            $dummyNilai = ["\160\x5f\144\x65\x73\153\x72\x69\160\x73\151" => '', "\153\x5f\x72\141\164\141\137\162\x61\x74\141" => '', "\x6b\137\x64\145\x73\x6b\x72\x69\x70\x73\151" => '', "\x6b\x5f\x70\162\x65\144\x69\x6b\x61\x74" => '', "\x6e\x69\x6c\141\x69" => '', "\x70\x72\145\144\x69\x6b\141\164" => ''];
            goto qtJJb;
            iKpBF:
            $nilai[$id_siswa][$mapel->id_mapel] = $nr;
            goto qlGHs;
            oJwrP:
            S4wkJ:
            goto POP9L;
            qlGHs:
            Cwiu3:
            goto hJj0N;
            AOAzp:
            if ($key_mapel !== false) {
                goto S4wkJ;
            }
            goto ORQK8;
            hJj0N:
            Niflk:
            goto Kg9OE;
            opdFQ:
            goto Cwiu3;
            goto oJwrP;
            qtJJb:
            $key_mapel = array_search($mapel->id_mapel . $id_kelas . $id_siswa . $tp->id_tp . $smt->id_smt, array_column($nilai_rapor, "\151\x64\x5f\156\151\x6c\x61\151\137\150\x61\x72\x69\141\x6e"));
            goto AOAzp;
            Kg9OE:
        }
        goto HttUC;
        vDTz0:
        $sikap[$id_siswa][2] = ["\144\x65\163\x6b\162\x69\x70\x73\151" => '', "\160\162\145\x64\x69\x6b\x61\164" => $dummySikap];
        goto WTT3o;
        D64SV:
        $setting = $this->dashboard->getSetting();
        goto mAM43;
        dgImP:
        Dk7b9:
        goto rGvGt;
        fQfgb:
        RI_PI:
        goto BTdEj;
        vUtrZ:
        $data["\153\153\155"] = $kkm;
        goto ULSl4;
        lNnLu:
        $dummyDesks = ["\x72\x61\156\153\x69\x6e\x67" => '', "\162\x61\x6e\153\137\144\145\163\x6b\x72\x69\160\163\x69" => '', "\160\61" => '', "\160\x31\x5f\144\145\x73\153" => '', "\x70\x32" => '', "\x70\62\137\x64\145\x73\x6b" => '', "\x70\x33" => '', "\x70\x33\137\144\145\x73\x6b" => ''];
        goto mnt55;
        s6VC2:
        $arrk = [];
        goto b_TPK;
        Is5Q2:
        $data["\x73\x6d\x74\x5f\x6e\x61\155\145"] = $this->dashboard->getSemesterById($smt->id_smt);
        goto SYU8w;
        RC7cV:
        $catatans = $this->rapor->getCatatanWaliByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto v75jM;
        p_XA4:
        OMstV:
        goto E2RVz;
        izUiT:
        $fisik = [];
        goto fN05h;
        A5245:
        $data["\156\x69\154\x61\151"] = $nilai;
        goto R_8ZO;
        t60GH:
        $data["\155\141\160\145\154\137\x65\153\163\164\x72\x61"] = $mapelEkstra;
        goto vUtrZ;
        ouzOb:
        ZbYpm:
        goto JwBiO;
        L95Ez:
        $this->load->view("\155\x65\x6d\x62\x65\162\163\x2f\147\165\x72\165\57\164\x65\x6d\x70\x6c\x61\x74\x65\163\x2f\146\x6f\x6f\164\x65\162");
        goto vxiKh;
        wpnVW:
        $smt = $this->dashboard->getSemesterActive();
        goto fioMv;
        kd1hR:
        $desks[$id_siswa] = isset($prestasis[$id_siswa]) ? $prestasis[$id_siswa] : $dummyDesks;
        goto Iqe3F;
        FbAom:
        LrPSi:
        goto CF6zf;
        DzVVk:
        $nf = $this->rapor->getFisikKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto YCNL7;
        uBsps:
        $other = "\x31";
        goto rHoAj;
        IJ6cd:
        $data = ["\165\163\145\162" => $user, "\152\x75\x64\x75\x6c" => "\x52\141\160\x6f\162\40\x41\x6b\x68\151\162", "\x73\x75\142\x6a\x75\x64\165\154" => "\x43\145\x74\141\153\40\x52\141\x70\157\x72\x20\x41\x6b\150\151\162", "\163\x65\x74\x74\x69\x6e\x67" => $setting];
        goto nUZOY;
        WTT3o:
        goto cNSX3;
        goto ouzOb;
        T44MU:
        $data["\x64\145\x73\x6b\162\x69\x70\x73\x69"] = $desks;
        goto g6qpB;
        rABKK:
        $id_siswa = $siswa->id_siswa;
        goto iP2ee;
        Utk8G:
        $id_kelas = $guru->wali_kelas;
        goto rXAqy;
        tOvvi:
        $data["\156\141\x69\x6b"] = $this->rapor->getKenaikanRapor($id_kelas, $tp->id_tp, $smt->id_smt);
        goto DVBYa;
        WthE9:
        $sikap = [];
        goto rGXR3;
        EUETN:
        SaTuk:
        goto GF8hT;
        wLVnq:
        $jurusan = $this->kelas->getJurusanById($kelas->jurusan_id);
        goto jRHBJ;
        qvtNd:
        b7O6B:
        goto zf6Mr;
        v75jM:
        foreach ($catatans as $catatan) {
            $catatan->nilai = unserialize($catatan->nilai);
            LZjXG:
        }
        goto mtL0k;
        b4LdL:
        $i = 0;
        goto fQfgb;
        HmHew:
        $data["\164\160\137\x61\143\x74\x69\x76\145"] = $tp;
        goto s1OEH;
        yJBCn:
        $dummyFisik = ["\153\157\156\144\x69\163\151" => ["\x74\x65\154\151\156\x67\x61" => '', "\x6d\141\164\141" => '', "\x67\x69\x67\151" => '', "\x6c\141\151\x6e" => ''], "\x73\155\164" . $smt->id_smt => ["\164\151\x6e\147\147\151" => '', "\142\x65\x72\x61\x74" => '', "\x74\x70" => $tp->id_tp], "\163\155\x74" . $other => ["\x74\151\156\x67\x67\151" => '', "\142\145\162\141\x74" => '', "\164\160" => $tp->id_tp]];
        goto DzVVk;
        Iqe3F:
        $absensi[$id_siswa] = isset($catatans[$id_siswa]) ? $catatans[$id_siswa] : ["\156\151\154\x61\151" => $dummyAbsen];
        goto yJBCn;
        E2RVz:
        UdIE2:
        goto nzZmr;
        BNltB:
        $ekstras = $this->kelas->getKelasEkskul($id_kelas, $tp->id_tp, $smt->id_smt);
        goto dozZf;
        DVBYa:
        $this->load->view("\155\x65\x6d\142\x65\x72\x73\57\147\x75\x72\165\57\x74\145\155\x70\154\141\x74\145\163\57\150\145\141\144\145\x72", $data);
        goto Ee8zW;
        nzZmr:
        $i++;
        goto H9xc8;
        mAM43:
        $tp = $this->dashboard->getTahunActive();
        goto wpnVW;
        v5c82:
        $sikap[$id_siswa][1] = ["\144\x65\x73\x6b\162\151\160\x73\151" => '', "\160\x72\x65\144\x69\x6b\x61\x74" => $dummySikap];
        goto vDTz0;
        H9xc8:
        goto RI_PI;
        goto NFi9_;
        bMQb1:
        $nilai_rapor = $this->rapor->getNilaiRaporByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto Ite22;
        mnt55:
        $dummyAbsen = ["\x73" => "\40\55\x20", "\151" => "\40\x2d\x20", "\141" => "\x20\x2d\x20", "\163\x61\162\x61\x6e" => ''];
        goto kd1hR;
        c4CXa:
        $data["\153\x65\154\x6f\x6d\160\x6f\153\163"] = $kelompoks;
        goto SQblJ;
        Ee8zW:
        $this->load->view("\x6d\x65\x6d\x62\145\x72\x73\57\147\165\162\x75\57\162\141\x70\157\162\x2f\143\x65\x74\x61\x6b\57\x61\x6b\150\x69\162");
        goto L95Ez;
        s1OEH:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto Flmcz;
        BdoQO:
        $mapelEkstra = [];
        goto NsdnW;
        dlVDd:
        if ($smt->id_smt === "\61") {
            goto Dk7b9;
        }
        goto uBsps;
        R_8ZO:
        $data["\x6e\151\x6c\x61\x69\x5f\x72\141\x70\157\x72"] = $nilai_rapor;
        goto T44MU;
        TeWi6:
        $siswas = $this->rapor->getDetailSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto iMn40;
        SYU8w:
        $data["\147\x75\162\x75"] = $guru;
        goto WSLNp;
        zf6Mr:
        $nilai_sikap = $this->rapor->getNilaiSikapByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto bMQb1;
        kPpOL:
        $data["\x6e\x69\x6c\141\151\x5f\x65\x6b\163\164\162\141"] = $nilaiEkstra;
        goto t60GH;
        Ite22:
        $prestasis = $this->rapor->getPrestasiByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto RC7cV;
        I1Qc9:
        $data["\164\x70\x5f\x6e\141\x6d\145"] = $this->dashboard->getTahunById($tp->id_tp);
        goto Is5Q2;
        rHoAj:
        goto b7O6B;
        goto dgImP;
        CF6zf:
        $mapels = $this->master->getAllMapel(empty($arrk) ? null : $arrk, isset($jurusan->mapel_peminatan) ? $jurusan->mapel_peminatan : null);
        goto BNltB;
        ShuCL:
        $data["\146\x69\163\x69\153"] = $fisik;
        goto kPpOL;
        ULSl4:
        $data["\162\x61\x70\x6f\x72"] = $settingRapor;
        goto tOvvi;
        Flmcz:
        $data["\x73\x6d\164\137\141\143\164\x69\166\x65"] = $smt;
        goto I1Qc9;
        WSLNp:
        $data["\163\151\x73\x77\141\163"] = $siswas;
        goto jTGLt;
        GfjEw:
        $user = $this->ion_auth->user()->row();
        goto D64SV;
        nPTl8:
        $fisik[$siswa->id_siswa] = $nf != null ? ["\x6b\x6f\x6e\x64\x69\163\x69" => unserialize($nf->kondisi), "\163\x6d\164" . $nf->id_smt => ["\x74\x69\156\x67\147\151" => $nf->tinggi, "\x62\145\x72\141\x74" => $nf->berat], "\x73\x6d\164" . $other => ["\164\x69\156\x67\147\x69" => $nf2 != null ? $nf2->tinggi : '', "\x62\145\162\141\x74" => $nf2 != null ? $nf2->berat : '']] : $dummyFisik;
        goto MlyDC;
        zvnej:
        $kkm = $this->rapor->getAllKkmRaporAkhir($id_kelas, $tp->id_tp, $smt->id_smt);
        goto IJ6cd;
        SQblJ:
        $data["\x73\x69\153\x61\160"] = $sikap;
        goto A5245;
        fN05h:
        $desks = [];
        goto puZbW;
        rGvGt:
        $other = "\x32";
        goto qvtNd;
        rGXR3:
        $nilai = [];
        goto izUiT;
        iMn40:
        $kategori_mapel = $this->master->getKategoriKelompokMapel();
        goto s6VC2;
        YCNL7:
        $nf2 = $this->rapor->getFisikKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $other);
        goto nPTl8;
        iP2ee:
        $dummySikap = ["\160\x72\x65\144\x69\x6b\141\164" => ''];
        goto x58nP;
        BTdEj:
        if (!($i < count($siswas))) {
            goto t2gQs;
        }
        goto gaRRH;
        vxiKh:
    }
    public function cetakLeger()
    {
        goto QizeI;
        PxWlP:
        $data["\155\141\x70\x65\154\x5f\x65\x6b\163\164\x72\x61"] = $mapelEkstra;
        goto acQY5;
        UGYj0:
        $ekstras = $this->kelas->getKelasEkskul($id_kelas, $tp->id_tp, $smt->id_smt);
        goto a693R;
        SnuWI:
        $data["\x74\160\137\141\143\164\x69\x76\x65"] = $tp;
        goto S3Aaw;
        QxcMT:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto SnuWI;
        Kylqr:
        $data["\x64\x65\x73\x6b\x72\x69\160\163\x69"] = $desks;
        goto iB5w1;
        DGIyl:
        foreach ($mapels as $mapel) {
            goto yZ6K8;
            cBgoq:
            $ns1 = $this->rapor->getNilaiSikapKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt, "\61");
            goto ceOh8;
            c4mH2:
            $nr = $this->rapor->getNilaiRapor($mapel->id_mapel, $id_kelas, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto igpIx;
            Uf_5N:
            htmTS:
            goto nNp5T;
            SdYMD:
            $pts = $this->rapor->getNilaiMapelPtsSiswa($mapel->id_mapel, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto SBkmX;
            fqWUX:
            $ns2 = $this->rapor->getNilaiSikapKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt, "\62");
            goto fhgHj;
            GQq3z:
            $dummyAbsen = ["\x73" => '', "\x69" => '', "\x61" => ''];
            goto W4NYp;
            bph1o:
            $kkm[$mapel->id_mapel] = $this->rapor->getKkm($mapel->id_mapel . $id_kelas . $tp->id_tp . $smt->id_smt . "\x31");
            goto y_73d;
            DYeS6:
            foreach ($ekstras as $ext) {
                goto LAP4J;
                LAP4J:
                $dummyEkstra = ["\x64\145\x73\x6b\162\151\x70\x73\x69" => '', "\x6e\x69\x6c\141\x69" => '', "\160\162\x65\144\151\x6b\x61\164" => ''];
                goto U3py2;
                qYfpi:
                CrVe8:
                goto i3uiQ;
                TnnY7:
                foreach ($arrEkstra as $ar) {
                    goto C1v79;
                    FSsb8:
                    $nilaiEkstra[$id_siswa][$id_ekstra] = $ne == null ? json_decode(json_encode($dummyEkstra)) : $ne;
                    goto pDAmC;
                    lpRd_:
                    if (!($id_ekstra != null)) {
                        goto nyG6Q;
                    }
                    goto lS7T2;
                    x9TrB:
                    $mapelEkstra[$id_ekstra] = $this->kelas->getEkskulById($id_ekstra);
                    goto lpRd_;
                    pDAmC:
                    nyG6Q:
                    goto IM15u;
                    C1v79:
                    $id_ekstra = $ar->ekstra;
                    goto x9TrB;
                    lS7T2:
                    $ne = $this->rapor->getEkstraKelas($id_ekstra, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
                    goto FSsb8;
                    IM15u:
                    Rhjj7:
                    goto D7J7p;
                    D7J7p:
                }
                goto E0Oca;
                E0Oca:
                hr3Vy:
                goto qYfpi;
                U3py2:
                $arrEkstra = json_decode(json_encode(unserialize($ext->ekstra)));
                goto TnnY7;
                i3uiQ:
            }
            goto eEDSe;
            SBkmX:
            $nilaiPts[$id_siswa][$mapel->id_mapel] = $pts == null ? 0 : $pts->nilai;
            goto GQq3z;
            eEDSe:
            DeXvA:
            goto oGz2M;
            oGz2M:
            IJES5:
            goto HwAdr;
            fhgHj:
            $sikap[$siswa->id_siswa][2] = ["\x64\145\x73\153\x72\151\x70\163\151" => $ns2 == null ? '' : $ns2->deskripsi, "\x70\162\x65\144\151\153\141\164" => $ns2 == null ? $dummySikap : unserialize($ns2->nilai)];
            goto QClzC;
            igpIx:
            $nilai[$id_siswa][$mapel->id_mapel] = $nr == null ? $dummyNilai : $nr;
            goto SdYMD;
            JEP9Y:
            if ($setting_rapor->kkm_tunggal == "\61") {
                goto htmTS;
            }
            goto bph1o;
            ceOh8:
            $sikap[$siswa->id_siswa][1] = ["\x64\145\x73\153\x72\x69\160\x73\x69" => $ns1 == null ? '' : $ns1->deskripsi, "\160\x72\145\144\x69\153\141\164" => $ns1 == null ? $dummySikap : unserialize($ns1->nilai)];
            goto fqWUX;
            oo6xy:
            JDhuO:
            goto DYeS6;
            QClzC:
            $dummyNilai = ["\153\x5f\x72\x61\x74\141\137\162\x61\164\141" => '', "\x6b\x5f\160\x72\x65\144\x69\x6b\x61\x74" => '', "\160\x5f\162\141\x74\x61\137\162\141\x74\141" => '', "\156\x69\x6c\x61\x69\x5f\160\141\x73" => '', "\156\151\x6c\141\151" => '', "\x70\x72\145\x64\151\153\141\164" => ''];
            goto c4mH2;
            W4NYp:
            $absensi[$id_siswa] = isset($catatans[$id_siswa]) ? $catatans[$id_siswa]->nilai : $dummyAbsen;
            goto JEP9Y;
            yZ6K8:
            $dummySikap = ["\160\x72\145\x64\x69\x6b\x61\164" => ''];
            goto cBgoq;
            nNp5T:
            $kkm[$mapel->id_mapel] = $setting_rapor;
            goto oo6xy;
            y_73d:
            goto JDhuO;
            goto Uf_5N;
            HwAdr:
        }
        goto LYVpt;
        LWKe4:
        $this->load->view("\155\145\x6d\142\x65\162\163\57\147\x75\x72\165\x2f\164\145\x6d\x70\154\141\164\x65\163\x2f\146\x6f\x6f\x74\x65\x72");
        goto qQ8u7;
        cy0Bt:
        $data["\155\141\x70\x65\x6c\163"] = $mapels;
        goto O_LgN;
        OQGPM:
        $data["\x73\x69\x6b\x61\160"] = $sikap;
        goto Kylqr;
        jGfFo:
        $this->load->view("\155\x65\155\142\x65\x72\x73\57\x67\165\x72\165\57\162\141\x70\x6f\162\x2f\x6c\x65\147\x65\162\x2f\x64\141\x74\141");
        goto LWKe4;
        LYVpt:
        K9vC3:
        goto pDx7u;
        sPaZl:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto x9t1z;
        EU90Y:
        $data["\153\x65\x6c\x61\x73\x65\163"] = $kelases;
        goto cy0Bt;
        uAbUL:
        $tp = $this->dashboard->getTahunActive();
        goto ipB2E;
        XlGTC:
        $this->load->view("\x6d\145\x6d\x62\x65\x72\163\57\147\x75\x72\x75\x2f\x74\x65\155\160\x6c\x61\164\x65\x73\57\x68\145\141\x64\x65\x72", $data);
        goto jGfFo;
        rAA_B:
        $data["\156\x69\154\141\151"] = (array) json_decode(json_encode($nilai));
        goto ARXu7;
        pDx7u:
        HQ1BO:
        goto lzpn4;
        iB5w1:
        $data["\x61\142\x73\145\156\x73\151"] = $absensi;
        goto iRy9z;
        ipB2E:
        $smt = $this->dashboard->getSemesterActive();
        goto sPaZl;
        O_LgN:
        $data["\163\x69\x73\x77\x61\163"] = $siswas;
        goto tJ6Rm;
        K0quu:
        $kkm = [];
        goto WugVY;
        acQY5:
        $data["\153\153\155"] = $kkm;
        goto ahOqS;
        d698H:
        $siswa = $siswas[$i];
        goto ClAvK;
        P336q:
        cTU3M:
        goto QxcMT;
        AOo_z:
        foreach ($catatans as $catatan) {
            $catatan->nilai = unserialize($catatan->nilai);
            bCXyO:
        }
        goto Larcm;
        ClAvK:
        $id_siswa = $siswa->id_siswa;
        goto DGIyl;
        Larcm:
        xIIax:
        goto ao3E1;
        a693R:
        $prestasis = $this->rapor->getPrestasiByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto k1NNR;
        vdVkJ:
        goto F0vb6;
        goto P336q;
        iRy9z:
        $data["\156\151\x6c\141\151\137\145\153\163\164\x72\141"] = $nilaiEkstra;
        goto PxWlP;
        XZ3np:
        $user = $this->ion_auth->user()->row();
        goto Og5ua;
        x9t1z:
        $id_kelas = $guru->wali_kelas;
        goto B1NEY;
        ao3E1:
        $setting_rapor = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto K0quu;
        bsfH3:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto fDfhN;
        tJ6Rm:
        $data["\x65\x6b\x73\x74\162\x61\x73"] = $ekstras;
        goto rAA_B;
        y21s9:
        F0vb6:
        goto tpM4X;
        k1NNR:
        $catatans = $this->rapor->getCatatanWaliByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto AOo_z;
        K_m1y:
        $absensi = [];
        goto jpQV2;
        QizeI:
        $setting = $this->dashboard->getSetting();
        goto XZ3np;
        Og5ua:
        $data = ["\165\163\x65\x72" => $user, "\152\x75\x64\165\x6c" => "\114\x65\x67\145\x72\40\x4b\x65\x6c\141\x73\40", "\163\165\x62\152\x75\144\x75\154" => "\103\x65\164\x61\153\40\114\x65\x67\x65\x72\x20\x4b\x65\x6c\141\x73\x20", "\x73\x65\164\164\x69\156\147" => $setting];
        goto uAbUL;
        lzpn4:
        $i++;
        goto vdVkJ;
        S3Aaw:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto dYpV_;
        yuKEL:
        $nilaiEkstra = [];
        goto n_HGF;
        tpM4X:
        if (!($i < count($siswas))) {
            goto cTU3M;
        }
        goto d698H;
        fDfhN:
        $mapels = $this->master->getAllMapel();
        goto UGYj0;
        xYyL4:
        $data["\156\141\x69\x6b"] = $this->rapor->getKenaikanRapor($id_kelas, $tp->id_tp, $smt->id_smt);
        goto XlGTC;
        ahOqS:
        $data["\x72\x61\160\157\x72"] = $setting_rapor;
        goto xYyL4;
        bIrC5:
        $data["\147\x75\162\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto EU90Y;
        ARXu7:
        $data["\156\x69\154\x61\151\x5f\160\x74\163"] = (array) json_decode(json_encode($nilaiPts));
        goto OQGPM;
        xiX0n:
        $desks = [];
        goto K_m1y;
        dYpV_:
        $data["\163\155\x74\137\x61\143\164\151\166\x65"] = $smt;
        goto bIrC5;
        B1NEY:
        $kelases = $this->kelas->get_one($id_kelas);
        goto bsfH3;
        SCDoN:
        $nilai = [];
        goto DIapq;
        WugVY:
        $sikap = [];
        goto SCDoN;
        DIapq:
        $nilaiPts = [];
        goto xiX0n;
        n_HGF:
        $i = 0;
        goto y21s9;
        jpQV2:
        $mapelEkstra = [];
        goto yuKEL;
        qQ8u7:
    }
    public function downloadLeger()
    {
        goto daQzp;
        m_fwD:
        if (!($i < count($siswas))) {
            goto nYv1j;
        }
        goto wXuxb;
        WcLYx:
        $nilaiEkstra = [];
        goto lQRt_;
        D2yNI:
        $i = 0;
        goto UaSO0;
        t7LVo:
        $data["\155\141\160\145\154\163"] = $mapels;
        goto w87n4;
        fQ1eX:
        $data["\144\x65\x73\153\x72\151\x70\x73\151"] = $desks;
        goto phPOb;
        eZouu:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto vmNm0;
        vmNm0:
        $data["\163\x6d\164\137\141\x63\164\x69\166\145"] = $smt;
        goto fr2gN;
        dBJ4C:
        $desks = [];
        goto crxx5;
        phPOb:
        $data["\141\142\x73\x65\156\x73\x69"] = $absensi;
        goto fZ31y;
        U9tAG:
        $data["\x6d\x61\x70\145\x6c\137\x65\153\163\164\x72\141"] = $mapelEkstra;
        goto GnqrJ;
        xP6gD:
        $k2[] = $nilai->k2;
        goto vNst_;
        cLfzw:
        Sb1bA:
        goto PkPs2;
        W8NV6:
        if (!($i < count($siswas))) {
            goto u5nqW;
        }
        goto S7PRJ;
        fZ31y:
        $data["\x6e\x69\x6c\141\x69\137\x65\153\163\x74\x72\x61"] = $nilaiEkstra;
        goto U9tAG;
        HKbvH:
        goto brCoY;
        goto L1JX1;
        qYGuQ:
        $setting = $this->dashboard->getSetting();
        goto H4D7Q;
        MqLcK:
        $k4[] = $nilai->k4;
        goto oAsVy;
        g7XaP:
        $kkm = [];
        goto vRXwb;
        f7Y4d:
        $mapels = $this->master->getAllMapel();
        goto P7QZB;
        Frtcz:
        $no = [];
        goto yn_sD;
        oghFN:
        $nilaiPts = [];
        goto dBJ4C;
        tuPEv:
        $id_kelas = $guru->wali_kelas;
        goto suHjU;
        rOM26:
        $nilai = [];
        goto oghFN;
        hnEii:
        $p7 = [];
        goto KKEkU;
        fr2s9:
        nYv1j:
        goto C5uKx;
        vRXwb:
        $sikap = [];
        goto rOM26;
        vPG2q:
        $k7 = [];
        goto eMqDk;
        sorfs:
        $k5 = [];
        goto cqpS9;
        H4qB4:
        $i++;
        goto l9G8Y;
        SL56H:
        foreach ($catatans as $catatan) {
            $catatan->nilai = unserialize($catatan->nilai);
            wTWr1:
        }
        goto ujqNj;
        GnqrJ:
        $data["\x6b\x6b\x6d"] = $kkm;
        goto YCrrB;
        PkPs2:
        $i++;
        goto HKbvH;
        EbtVo:
        $catatans = $this->rapor->getCatatanWaliByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto SL56H;
        c6T_B:
        $p5 = [];
        goto EvROl;
        S7PRJ:
        $siswa = $siswas[$i];
        goto MHVbI;
        ubKly:
        mvsfX:
        goto owsw7;
        HJCa2:
        $nisn[] = $siswa->nisn;
        goto JvSF8;
        zQGNl:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto f7Y4d;
        wXuxb:
        $siswa = $siswas[$i];
        goto fHSJh;
        AsvzL:
        $p1 = [];
        goto zVV2j;
        UegWn:
        $p3 = [];
        goto f2rzO;
        kuVPT:
        $data["\156\151\154\x61\151"] = (array) json_decode(json_encode($nilai));
        goto Zm2Au;
        MHVbI:
        $nilai = $nilai[$siswa->id_siswa];
        goto L4kqZ;
        bJlyx:
        $data["\164\160\x5f\x61\143\164\x69\x76\x65"] = $tp;
        goto eZouu;
        x5e5L:
        $k1 = [];
        goto oAPNI;
        TuWgD:
        $p2[] = $nilai->p2;
        goto Xp0eh;
        ZO2Zm:
        $p4[] = $nilai->p4;
        goto dMFvy;
        H4D7Q:
        $user = $this->ion_auth->user()->row();
        goto yWU8A;
        fr2gN:
        $data["\147\165\x72\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto fxnF2;
        bYGai:
        $k4 = [];
        goto sorfs;
        JL48G:
        $p6[] = $nilai->p6;
        goto nsTAV;
        nsTAV:
        $p7[] = $nilai->p7;
        goto kAEM5;
        vNst_:
        $k3[] = $nilai->k3;
        goto MqLcK;
        DGFtk:
        $prestasis = $this->rapor->getPrestasiByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto EbtVo;
        kAEM5:
        $p8[] = $nilai->p8;
        goto eflkf;
        P7QZB:
        $ekstras = $this->kelas->getKelasEkskul($id_kelas, $tp->id_tp, $smt->id_smt);
        goto DGFtk;
        eflkf:
        $k1[] = $nilai->k1;
        goto xP6gD;
        cqpS9:
        $k6 = [];
        goto vPG2q;
        G3yWq:
        $this->output_json($data);
        goto UZL9x;
        lQRt_:
        $i = 0;
        goto luZPj;
        aHgq4:
        $k8[] = $nilai->k8;
        goto cLfzw;
        efYiO:
        $data["\145\153\163\x74\162\x61\x73"] = $ekstras;
        goto kuVPT;
        daQzp:
        $tp = $this->dashboard->getTahunActive();
        goto jlGeD;
        g8NHh:
        $setting_rapor = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto g7XaP;
        f2rzO:
        $p4 = [];
        goto c6T_B;
        zVV2j:
        $p2 = [];
        goto UegWn;
        oAPNI:
        $k2 = [];
        goto H2pjR;
        crxx5:
        $absensi = [];
        goto eYw8t;
        vX03R:
        foreach ($mapels as $mapel) {
            goto R0Eap;
            oo4a4:
            aB53X:
            goto vwz1m;
            R0Eap:
            $dummySikap = ["\160\x72\145\144\x69\x6b\x61\164" => ''];
            goto VfmOL;
            V4O2R:
            $nilai[$id_siswa][$mapel->id_mapel] = $nr == null ? $dummyNilai : $nr;
            goto wNpwF;
            zX902:
            lT3j5:
            goto yRlc0;
            OmrZ5:
            if ($setting_rapor->kkm_tunggal == "\x31") {
                goto lT3j5;
            }
            goto lBTXs;
            B4_pE:
            $ns2 = $this->rapor->getNilaiSikapKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt, "\62");
            goto ly27t;
            Lt4pj:
            foreach ($ekstras as $ext) {
                goto sM_yW;
                BknfS:
                a7mtd:
                goto mbf2_;
                FQw00:
                $arrEkstra = json_decode(json_encode(unserialize($ext->ekstra)));
                goto Q4zDj;
                Q4zDj:
                foreach ($arrEkstra as $ar) {
                    goto YlvF2;
                    hKOwN:
                    if (!($id_ekstra != null)) {
                        goto XXdZG;
                    }
                    goto a1ZHA;
                    JB8_6:
                    XXdZG:
                    goto bsEhT;
                    bsEhT:
                    UGL7f:
                    goto yB1ji;
                    a1ZHA:
                    $ne = $this->rapor->getEkstraKelas($id_ekstra, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
                    goto SHuew;
                    SHuew:
                    $nilaiEkstra[$id_siswa][$id_ekstra] = $ne == null ? json_decode(json_encode($dummyEkstra)) : $ne;
                    goto JB8_6;
                    YlvF2:
                    $id_ekstra = $ar->ekstra;
                    goto oEBtU;
                    oEBtU:
                    $mapelEkstra[$id_ekstra] = $this->kelas->getEkskulById($id_ekstra);
                    goto hKOwN;
                    yB1ji:
                }
                goto BknfS;
                mbf2_:
                WkyB3:
                goto Jlliw;
                sM_yW:
                $dummyEkstra = ["\x64\x65\x73\153\x72\x69\160\163\151" => '', "\x6e\151\x6c\x61\151" => '', "\160\162\145\x64\x69\x6b\141\x74" => ''];
                goto FQw00;
                Jlliw:
            }
            goto AgJPu;
            rRAmr:
            $nilaiPts[$id_siswa][$mapel->id_mapel] = $pts == null ? 0 : $pts->nilai;
            goto RJaVk;
            dyX41:
            $sikap[$siswa->id_siswa][1] = ["\x64\x65\x73\153\162\151\160\163\151" => $ns1 == null ? '' : $ns1->deskripsi, "\x70\x72\x65\x64\151\x6b\141\x74" => $ns1 == null ? $dummySikap : unserialize($ns1->nilai)];
            goto B4_pE;
            Qjrj4:
            nBwhX:
            goto Lt4pj;
            FIo8J:
            $absensi[$id_siswa] = isset($catatans[$id_siswa]) ? $catatans[$id_siswa]->nilai : ["\x6e\x69\x6c\x61\151" => $dummyAbsen];
            goto OmrZ5;
            w2IIG:
            goto nBwhX;
            goto zX902;
            B7k0s:
            $dummyNilai = ["\153\137\162\x61\164\141\137\162\x61\164\141" => '', "\153\137\160\x72\145\144\x69\153\141\164" => '', "\160\137\x72\141\x74\141\x5f\x72\x61\164\x61" => '', "\156\x69\154\x61\151\x5f\160\x61\163" => '', "\x6e\151\x6c\141\x69" => '', "\x70\x72\x65\x64\151\x6b\141\164" => ''];
            goto udFCM;
            VfmOL:
            $ns1 = $this->rapor->getNilaiSikapKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt, "\x31");
            goto dyX41;
            wNpwF:
            $pts = $this->rapor->getNilaiMapelPtsSiswa($mapel->id_mapel, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto rRAmr;
            yRlc0:
            $kkm[$mapel->id_mapel] = $setting_rapor;
            goto Qjrj4;
            udFCM:
            $nr = $this->rapor->getNilaiRapor($mapel->id_mapel, $id_kelas, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto V4O2R;
            RJaVk:
            $dummyDesks = ["\x72\141\156\153\151\156\147" => '', "\x72\x61\156\x6b\137\144\x65\163\153\162\x69\160\x73\151" => '', "\x70\x31" => '', "\x70\61\x5f\144\145\163\153" => '', "\160\62" => '', "\160\x32\x5f\x64\145\163\x6b" => '', "\x70\x33" => '', "\160\63\x5f\x64\145\x73\x6b" => '', "\x73\141\162\141\156" => ''];
            goto NhUCZ;
            lBTXs:
            $kkm[$mapel->id_mapel] = $this->rapor->getKkm($mapel->id_mapel . $id_kelas . $tp->id_tp . $smt->id_smt . "\x31");
            goto w2IIG;
            AgJPu:
            gtLmL:
            goto oo4a4;
            NhUCZ:
            $dummyAbsen = ["\163" => '', "\x69" => '', "\141" => ''];
            goto FIo8J;
            ly27t:
            $sikap[$siswa->id_siswa][2] = ["\144\x65\163\153\162\x69\160\163\151" => $ns2 == null ? '' : $ns2->deskripsi, "\160\162\145\144\151\153\x61\x74" => $ns2 == null ? $dummySikap : unserialize($ns2->nilai)];
            goto B7k0s;
            vwz1m:
        }
        goto ubKly;
        w87n4:
        $data["\x73\x69\x73\167\x61\x73"] = $siswas;
        goto efYiO;
        eMqDk:
        $k8 = [];
        goto D2yNI;
        YCrrB:
        $data["\x72\x61\160\157\x72"] = $setting_rapor;
        goto t3F8w;
        EvROl:
        $p6 = [];
        goto hnEii;
        yWU8A:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto tuPEv;
        fxnF2:
        $data["\153\145\154\x61\x73\x65\163"] = $kelases;
        goto t7LVo;
        ujqNj:
        lllNL:
        goto g8NHh;
        suHjU:
        $kelases = $this->kelas->get_one($id_kelas);
        goto zQGNl;
        GTiAj:
        $k7[] = $nilai->k7;
        goto aHgq4;
        BQS8z:
        $k6[] = $nilai->k6;
        goto GTiAj;
        luZPj:
        X2iJ9:
        goto m_fwD;
        Zm2Au:
        $data["\156\151\x6c\141\x69\x5f\x70\164\x73"] = (array) json_decode(json_encode($nilaiPts));
        goto y84yG;
        l9G8Y:
        goto X2iJ9;
        goto fr2s9;
        dMFvy:
        $p5[] = $nilai->p5;
        goto JL48G;
        y84yG:
        $data["\x73\151\153\141\x70"] = $sikap;
        goto fQ1eX;
        yn_sD:
        $nisn = [];
        goto uwXi5;
        UaSO0:
        brCoY:
        goto W8NV6;
        Xp0eh:
        $p3[] = $nilai->p3;
        goto ZO2Zm;
        owsw7:
        Hqhbu:
        goto H4qB4;
        oAsVy:
        $k5[] = $nilai->k5;
        goto BQS8z;
        JvSF8:
        $nama[] = $siswa->nama;
        goto Gxz_Y;
        L4kqZ:
        $no[] = $i + 1;
        goto HJCa2;
        L1JX1:
        u5nqW:
        goto G3yWq;
        C5uKx:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto bJlyx;
        fHSJh:
        $id_siswa = $siswa->id_siswa;
        goto vX03R;
        H2pjR:
        $k3 = [];
        goto bYGai;
        jlGeD:
        $smt = $this->dashboard->getSemesterActive();
        goto qYGuQ;
        t3F8w:
        $data["\156\141\151\153"] = $this->rapor->getKenaikanRapor($id_kelas, $tp->id_tp, $smt->id_smt);
        goto Frtcz;
        KKEkU:
        $p8 = [];
        goto x5e5L;
        eYw8t:
        $mapelEkstra = [];
        goto WcLYx;
        Gxz_Y:
        $p1[] = $nilai->p1;
        goto TuWgD;
        uwXi5:
        $nama = [];
        goto AsvzL;
        UZL9x:
    }
    public function dkn()
    {
        goto U0qZJ;
        fJCIP:
        $data["\156\x69\154\x61\x69\137\x65\x6b\x73\x74\162\x61"] = $nilaiEkstra;
        goto ByK7m;
        a_4z5:
        $mapelEkstra = [];
        goto Mhc07;
        n16_m:
        $i = 0;
        goto Q3Xex;
        R_SZ3:
        $i++;
        goto G8NwP;
        rxBix:
        $data["\163\x6d\164\x5f\x61\143\164\151\x76\x65"] = $smt;
        goto PyWmm;
        OrtcS:
        $nilai = [];
        goto qoRmE;
        fKv1z:
        foreach ($catatans as $catatan) {
            $catatan->nilai = unserialize($catatan->nilai);
            fWY0f:
        }
        goto NBHAB;
        NiQJ4:
        $this->load->view("\x6d\145\155\x62\145\162\163\x2f\147\x75\x72\165\57\x74\145\x6d\160\x6c\x61\164\x65\x73\57\150\145\x61\144\145\162", $data);
        goto MUtFW;
        IcVUn:
        $id_siswa = $siswa->id_siswa;
        goto MyKBs;
        Mhc07:
        $nilaiEkstra = [];
        goto n16_m;
        KxNm7:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto rxBix;
        VYLwc:
        $user = $this->ion_auth->user()->row();
        goto q3paS;
        bC2xA:
        $data["\x6b\x6b\x6d"] = $kkm;
        goto MOvbV;
        M90Z8:
        $sikap = [];
        goto OrtcS;
        giBfR:
        Rn3tO:
        goto R_SZ3;
        q3paS:
        $data = ["\165\x73\145\x72" => $user, "\152\x75\x64\165\x6c" => "\104\141\x66\164\x61\162\x20\113\x75\155\160\165\154\141\x6e\x20\x4e\x69\154\x61\x69\40\113\x65\154\141\163\40", "\x73\165\142\152\x75\144\165\154" => "\x43\x65\x74\x61\153\x20\x44\x4b\116\x20", "\163\145\164\164\x69\x6e\147" => $setting];
        goto TWyPK;
        rgJHL:
        $prestasis = $this->rapor->getPrestasiByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto PDO0L;
        U0qZJ:
        $setting = $this->dashboard->getSetting();
        goto VYLwc;
        Agimn:
        $ekstras = $this->kelas->getKelasEkskul($id_kelas, $tp->id_tp, $smt->id_smt);
        goto rgJHL;
        OKex7:
        $kkm = [];
        goto M90Z8;
        ByK7m:
        $data["\155\141\x70\x65\154\137\x65\x6b\x73\164\162\x61"] = $mapelEkstra;
        goto bC2xA;
        Vmfq2:
        $absensi = [];
        goto a_4z5;
        MOvbV:
        $data["\162\x61\160\157\162"] = $setting_rapor;
        goto MGVhW;
        yX39O:
        $data["\156\151\154\141\151"] = $nilai;
        goto NHJQA;
        SpjcO:
        $siswa = $siswas[$i];
        goto IcVUn;
        MUtFW:
        $this->load->view("\155\145\x6d\142\x65\162\163\57\147\x75\162\165\57\x72\141\160\157\162\x2f\144\x6b\156\57\144\x61\x74\141");
        goto CXdhB;
        ofPmd:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto TeK8Q;
        coH6W:
        c0s60:
        goto ofPmd;
        fTPeW:
        $data["\155\x61\160\x65\154\163"] = $mapels;
        goto OoZGz;
        CXdhB:
        $this->load->view("\x6d\x65\155\x62\145\x72\163\x2f\x67\x75\162\165\57\x74\x65\155\160\x6c\x61\164\145\x73\x2f\146\157\157\164\145\162");
        goto p2upT;
        LyHpG:
        $data["\141\142\163\145\x6e\163\x69"] = $absensi;
        goto fJCIP;
        GDF5d:
        $data["\x73\151\153\x61\x70"] = $sikap;
        goto Ypec0;
        Vuux8:
        $data["\x65\153\x73\164\x72\x61\163"] = $ekstras;
        goto yX39O;
        Q3Xex:
        ci7PT:
        goto jvRk3;
        jNphm:
        $siswas = $this->kelas->getKelasSiswa($id_kelas, $tp->id_tp, $smt->id_smt);
        goto BGh6z;
        A32bI:
        $id_kelas = $guru->wali_kelas;
        goto Q910K;
        G8NwP:
        goto ci7PT;
        goto coH6W;
        oPsgZ:
        suq8D:
        goto giBfR;
        fAPvB:
        $setting_rapor = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt);
        goto OKex7;
        MyKBs:
        foreach ($mapels as $mapel) {
            goto Tgl6J;
            RKOa4:
            Dj85c:
            goto Fj36A;
            jLDgt:
            $nilai[$id_siswa][$mapel->id_mapel] = $nr == null ? $dummyNilai : $nr;
            goto skJe7;
            nsdR_:
            $nd = $this->rapor->getRaporDeskripsi($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
            goto m8_5Q;
            Fj36A:
            AirG8:
            goto Zsdri;
            skJe7:
            $pts = $this->rapor->getNilaiMapelPtsSiswa($mapel->id_mapel, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto spUuw;
            Nykwi:
            if ($setting_rapor->kkm_tunggal == "\61") {
                goto hPVPR;
            }
            goto H7kt3;
            MKGD2:
            $nr = $this->rapor->getNilaiRapor($mapel->id_mapel, $id_kelas, $id_siswa, $tp->id_tp, $smt->id_smt);
            goto vfiOt;
            DyZFa:
            $sikap[$siswa->id_siswa][2] = ["\x64\145\163\x6b\x72\x69\x70\x73\x69" => $ns2 == null ? '' : $ns2->deskripsi, "\x70\162\145\144\x69\x6b\141\x74" => $ns2 == null ? $dummySikap : unserialize($ns2->nilai)];
            goto SgAI_;
            H7kt3:
            $kkm[$mapel->id_mapel] = $this->rapor->getKkm($mapel->id_mapel . $id_kelas . $tp->id_tp . $smt->id_smt . "\x31");
            goto E83jl;
            pofJ9:
            $sikap[$siswa->id_siswa][1] = ["\144\145\163\153\x72\151\x70\163\x69" => $ns1 == null ? '' : $ns1->deskripsi, "\160\162\145\144\151\153\141\x74" => $ns1 == null ? $dummySikap : unserialize($ns1->nilai)];
            goto KjzCD;
            skawo:
            $absensi[$id_siswa] = $nd == null ? $dummyAbsen : unserialize($nd->nilai);
            goto Nykwi;
            Tgl6J:
            $dummySikap = ["\160\x72\x65\x64\151\x6b\x61\x74" => ''];
            goto DWyJE;
            FYic2:
            hPVPR:
            goto DSPjB;
            spUuw:
            $nilaiPts[$id_siswa][$mapel->id_mapel] = $pts == null ? 0 : $pts->nilai;
            goto WaS22;
            hibeP:
            jvB9B:
            goto SyWZL;
            SgAI_:
            $dummyNilai = ["\155\141\x70\145\x6c" => $mapel->nama_mapel, "\x6b\x5f\162\141\164\x61\x5f\162\141\164\x61" => '', "\x6b\x5f\x70\162\x65\144\x69\x6b\141\164" => '', "\160\x5f\162\x61\x74\141\137\x72\141\164\x61" => '', "\156\151\154\x61\x69\137\x70\141\x73" => '', "\x6e\x69\x6c\141\x69" => '', "\160\x72\x65\x64\x69\153\141\x74" => ''];
            goto MKGD2;
            SyWZL:
            foreach ($ekstras as $ext) {
                goto HB4aK;
                LCtJA:
                RFuQt:
                goto znZ7S;
                HB4aK:
                $dummyEkstra = ["\144\x65\x73\x6b\162\151\160\163\x69" => '', "\156\x69\154\x61\151" => '', "\x70\162\x65\x64\151\x6b\141\x74" => ''];
                goto qRf57;
                ylpqA:
                foreach ($arrEkstra as $ar) {
                    goto pv0cd;
                    P986t:
                    $nilaiEkstra[$id_siswa][$id_ekstra] = $ne == null ? json_decode(json_encode($dummyEkstra)) : $ne;
                    goto eckA5;
                    PkLXe:
                    $ne = $this->rapor->getEkstraKelas($id_ekstra, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
                    goto P986t;
                    zmEpY:
                    $mapelEkstra[$id_ekstra] = $this->kelas->getEkskulById($id_ekstra);
                    goto hrvH6;
                    hrvH6:
                    if (!($id_ekstra != null)) {
                        goto s1SmM;
                    }
                    goto PkLXe;
                    eckA5:
                    s1SmM:
                    goto a3ARU;
                    pv0cd:
                    $id_ekstra = $ar->ekstra;
                    goto zmEpY;
                    a3ARU:
                    dDdJk:
                    goto c1vL0;
                    c1vL0:
                }
                goto D7759;
                qRf57:
                $arrEkstra = json_decode(json_encode(unserialize($ext->ekstra)));
                goto ylpqA;
                D7759:
                EYP3E:
                goto LCtJA;
                znZ7S:
            }
            goto RKOa4;
            DWyJE:
            $ns1 = $this->rapor->getNilaiSikapKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt, "\61");
            goto pofJ9;
            HbLYx:
            $dummyAbsen = ["\x73" => '', "\x69" => '', "\x61" => ''];
            goto nsdR_;
            E83jl:
            goto jvB9B;
            goto FYic2;
            DSPjB:
            $kkm[$mapel->id_mapel] = $setting_rapor;
            goto hibeP;
            vfiOt:
            $nr["\x6d\x61\x70\x65\x6c"] = $mapel->nama_mapel;
            goto jLDgt;
            KjzCD:
            $ns2 = $this->rapor->getNilaiSikapKelas($id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt, "\x32");
            goto DyZFa;
            m8_5Q:
            $desks[$id_siswa] = $nd == null ? json_decode(json_encode($dummyDesks)) : $nd;
            goto skawo;
            WaS22:
            $dummyDesks = ["\x72\141\x6e\x6b\151\156\147" => '', "\162\141\156\x6b\137\144\x65\x73\x6b\x72\x69\x70\163\x69" => '', "\160\61" => '', "\x70\61\x5f\x64\145\x73\x6b" => '', "\x70\x32" => '', "\x70\62\137\144\145\x73\x6b" => '', "\x70\x33" => '', "\x70\x33\137\x64\145\163\x6b" => '', "\x73\x61\x72\141\156" => ''];
            goto HbLYx;
            Zsdri:
        }
        goto oPsgZ;
        PDO0L:
        $catatans = $this->rapor->getCatatanWaliByKelas($id_kelas, $tp->id_tp, $smt->id_smt);
        goto fKv1z;
        PyWmm:
        $data["\147\x75\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto Xkc7i;
        NBHAB:
        aZGVA:
        goto fAPvB;
        qoRmE:
        $nilaiPts = [];
        goto gr5nA;
        OoZGz:
        $data["\163\151\163\167\141\x73"] = $siswas;
        goto Vuux8;
        TWyPK:
        $tp = $this->dashboard->getTahunActive();
        goto Htafh;
        Htafh:
        $smt = $this->dashboard->getSemesterActive();
        goto s6pk_;
        gr5nA:
        $desks = [];
        goto Vmfq2;
        BGh6z:
        $mapels = $this->master->getAllMapel();
        goto Agimn;
        jvRk3:
        if (!($i < count($siswas))) {
            goto c0s60;
        }
        goto SpjcO;
        Xkc7i:
        $data["\x6b\145\x6c\x61\163\x65\x73"] = $kelases;
        goto fTPeW;
        TeK8Q:
        $data["\164\x70\x5f\x61\143\164\151\166\x65"] = $tp;
        goto KxNm7;
        Ypec0:
        $data["\x64\145\x73\153\162\151\x70\163\151"] = $desks;
        goto LyHpG;
        NHJQA:
        $data["\156\x69\x6c\x61\151\137\160\164\x73"] = $nilaiPts;
        goto GDF5d;
        Q910K:
        $kelases = $this->kelas->get_one($id_kelas);
        goto jNphm;
        s6pk_:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto A32bI;
        MGVhW:
        $data["\x6e\x61\151\153"] = $this->rapor->getKenaikanRapor($id_kelas, $tp->id_tp, $smt->id_smt);
        goto NiQJ4;
        p2upT:
    }
}
