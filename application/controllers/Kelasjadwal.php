<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelasjadwal extends CI_Controller
{
    public function __construct()
    {
        goto QTll5;
        RtXFh:
        $this->form_validation->set_error_delimiters('', '');
        goto UC1f2;
        QZg_Q:
        redirect("\141\165\x74\x68");
        goto NGHMl;
        boIKh:
        $this->load->model("\x4b\x65\154\141\163\137\155\157\144\145\x6c", "\x6b\145\154\141\x73");
        goto Pep3E;
        VV0QK:
        $this->load->library(["\144\x61\x74\141\x74\x61\x62\154\x65\x73", "\146\157\162\x6d\x5f\166\141\154\151\x64\141\164\151\157\156"]);
        goto TbwAI;
        QTll5:
        parent::__construct();
        goto bDToT;
        TbwAI:
        $this->load->model("\x4d\x61\163\x74\x65\162\x5f\155\x6f\x64\x65\154", "\155\x61\x73\x74\x65\162");
        goto g1lMl;
        jGO_v:
        $this->load->model("\x4c\157\x67\x5f\155\x6f\x64\x65\x6c", "\154\157\147\x67\151\156\x67");
        goto boIKh;
        Jmf2_:
        $this->load->model("\103\x62\x74\x5f\x6d\157\144\145\x6c", "\x63\142\164");
        goto jGO_v;
        bDToT:
        if ($this->ion_auth->logged_in()) {
            goto vW4Ud;
        }
        goto QZg_Q;
        g1lMl:
        $this->load->model("\104\141\x73\x68\142\x6f\x61\162\144\x5f\155\157\144\x65\154", "\x64\x61\163\150\x62\x6f\x61\162\144");
        goto Jmf2_;
        Pep3E:
        $this->load->model("\104\x72\x6f\160\144\x6f\x77\156\137\x6d\157\x64\145\154", "\144\162\157\x70\144\x6f\x77\156");
        goto RtXFh;
        NGHMl:
        vW4Ud:
        goto VV0QK;
        UC1f2:
    }
    public function output_json($data, $encode = true)
    {
        goto EkUJu;
        Ujs6M:
        $this->output->set_content_type("\x61\160\160\x6c\151\143\141\x74\x69\x6f\x6e\57\x6a\163\157\x6e")->set_output($data);
        goto l29N3;
        a6HHG:
        $data = json_encode($data);
        goto qSE0h;
        EkUJu:
        if (!$encode) {
            goto VzVqE;
        }
        goto a6HHG;
        qSE0h:
        VzVqE:
        goto Ujs6M;
        l29N3:
    }
    public function index()
    {
        goto lG0cx;
        FgqWP:
        $this->load->view("\x6d\145\155\x62\145\x72\x73\57\147\165\x72\x75\x2f\x74\145\x6d\160\x6c\x61\x74\145\x73\x2f\x66\x6f\157\x74\145\x72");
        goto lGNPo;
        hrrOM:
        $smt = $this->dashboard->getSemesterActive();
        goto xQcxz;
        cu0aK:
        goto HCHpm;
        goto istRr;
        pCDPb:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto Raga9;
        G1sMY:
        $data["\x6a\155\154\111\x73\164"] = [];
        goto tlqtd;
        tlqtd:
        $data["\152\x6d\x6c\x4d\x61\x70\x65\154"] = [];
        goto wjPu3;
        xQcxz:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto j5Rif;
        j5Rif:
        $data["\x74\x70\x5f\141\x63\x74\151\166\x65"] = $tp;
        goto KaMWe;
        YnHLL:
        $data["\x6b\145\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto p0_3f;
        lEho3:
        ol5_0:
        goto pCDPb;
        lGNPo:
        HCHpm:
        goto UQ5H5;
        hf6G6:
        goto HCHpm;
        goto lEho3;
        Raga9:
        $data["\147\165\x72\165"] = $guru;
        goto t9NAr;
        d0NcF:
        $data["\163\x6d\x74\x5f\x61\x63\x74\x69\166\x65"] = $smt;
        goto YnHLL;
        t9NAr:
        $this->load->view("\x6d\145\x6d\142\x65\x72\x73\x2f\147\x75\x72\165\x2f\164\145\155\160\154\141\x74\x65\163\x2f\x68\x65\141\x64\145\x72", $data);
        goto zpxpI;
        istRr:
        syNjC:
        goto KKo0J;
        KaMWe:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto d0NcF;
        vz2Sy:
        $this->load->view("\137\164\x65\155\160\154\x61\164\145\163\x2f\x64\x61\163\150\x62\157\141\162\144\x2f\x5f\150\145\x61\x64\145\162", $data);
        goto TYFJ7;
        KKo0J:
        $data["\x70\162\x6f\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto vz2Sy;
        zpxpI:
        $this->load->view("\155\145\155\142\145\162\x73\x2f\147\165\x72\165\x2f\153\x65\154\x61\163\57\x6a\141\x64\x77\x61\x6c\x2f\144\x61\x74\141");
        goto FgqWP;
        lG0cx:
        $user = $this->ion_auth->user()->row();
        goto RT_bt;
        TYFJ7:
        $this->load->view("\153\x65\x6c\x61\163\x2f\x6a\141\x64\167\141\x6c\x2f\x64\x61\x74\x61");
        goto FCu5D;
        p0_3f:
        $data["\151\144\x5f\153\145\154\x61\163"] = "\x30";
        goto LhioV;
        wjPu3:
        if ($this->ion_auth->is_admin()) {
            goto syNjC;
        }
        goto Rs8IS;
        CuiIA:
        $tp = $this->dashboard->getTahunActive();
        goto hrrOM;
        FCu5D:
        $this->load->view("\x5f\164\145\155\160\x6c\x61\164\145\163\x2f\144\141\163\x68\x62\157\x61\162\144\x2f\x5f\146\157\x6f\x74\x65\x72");
        goto hf6G6;
        LhioV:
        $data["\x6d\145\x74\x68\x6f\144"] = '';
        goto G1sMY;
        RT_bt:
        $data = ["\x75\x73\x65\162" => $user, "\x6a\x75\x64\x75\154" => "\112\141\x64\167\141\x6c\40\x50\145\154\x61\x6a\x61\x72\141\x6e", "\x73\x75\x62\x6a\165\144\x75\x6c" => "\x53\145\x74\40\x4a\x61\x64\x77\x61\154\40\120\145\154\x61\x6a\x61\162\141\156", "\163\145\x74\x74\151\x6e\147" => $this->dashboard->getSetting()];
        goto CuiIA;
        Rs8IS:
        if ($this->ion_auth->in_group("\147\165\x72\165")) {
            goto ol5_0;
        }
        goto cu0aK;
        UQ5H5:
    }
    public function kelas($kelas)
    {
        goto H61VF;
        ZI0p5:
        $this->load->view("\155\145\155\142\145\162\x73\57\147\x75\x72\x75\x2f\164\x65\x6d\160\154\141\x74\x65\163\57\x66\157\x6f\164\145\x72");
        goto PWjHN;
        MEj9K:
        $i = 0;
        goto suIcP;
        LGAh_:
        $data["\x6a\x61\144\x77\141\x6c\137\x6b\142\155"] = $jadk;
        goto vnwsl;
        XRbwA:
        $smt = $this->dashboard->getSemesterActive();
        goto dgaKA;
        lQocG:
        $data["\x74\x70\137\141\143\164\151\x76\145"] = $tp;
        goto EOTGn;
        rJNTJ:
        $data["\x6d\x65\x74\x68\x6f\144"] = "\x61\144\x64";
        goto YDy0l;
        OQkHi:
        $data["\x6d\141\160\145\154\x73"] = $this->dropdown->getAllKodeMapel();
        goto oTLBt;
        W18mG:
        $data["\x73\155\164\137\141\x63\x74\151\x76\145"] = $smt;
        goto ssI4_;
        E_zst:
        $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas);
        goto QKerE;
        vnX5a:
        ZSdDK:
        goto MEj9K;
        ssI4_:
        $data["\x6b\145\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto sVWMc;
        LgFvg:
        $data["\x6d\x65\164\x68\x6f\x64"] = "\145\x64\x69\x74";
        goto a4avM;
        u8Yy6:
        if ($jadk == null) {
            goto YY6n3;
        }
        goto LGAh_;
        PWjHN:
        Y_Dtd:
        goto Svvre;
        WZr5j:
        $this->load->view("\x5f\164\145\x6d\x70\x6c\141\164\145\x73\x2f\x64\x61\163\150\142\157\141\x72\x64\57\x5f\150\145\x61\144\145\x72", $data);
        goto xEeOZ;
        lKN4f:
        goto Y_Dtd;
        goto QUb1G;
        dgaKA:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto lQocG;
        H61VF:
        $user = $this->ion_auth->user()->row();
        goto D_eHA;
        z2s3d:
        $data["\x6a\141\x64\x77\141\x6c\x5f\x6b\142\x6d"] = json_decode(json_encode(["\151\x64\137\164\x70" => $tp->tahun, "\151\x64\137\163\155\164" => $smt->smt, "\151\144\x5f\x6b\x65\154\141\163" => $kelas, "\x6b\142\x6d\x5f\152\x61\x6d\137\160\145\x6c" => '', "\153\142\155\x5f\x6a\141\x6d\x5f\155\165\x6c\141\151" => '', "\x6b\142\x6d\137\x6a\x6d\154\x5f\x6d\141\x70\145\x6c\x5f\x68\141\162\151" => '', "\x69\x73\164\x69\x72\x61\x68\141\x74" => serialize([]), "\x61\x64\141" => false]));
        goto LJ1v3;
        W394T:
        $data["\160\x72\157\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto WZr5j;
        ZbOD3:
        f0BGr:
        goto ZJL5h;
        WzxoP:
        $data["\x69\144\137\153\145\154\x61\163"] = $kelas;
        goto E_zst;
        FM_uy:
        YY6n3:
        goto z2s3d;
        QUb1G:
        NmyvO:
        goto W394T;
        HYXLi:
        JMDFa:
        goto LgFvg;
        Onbui:
        $tp = $this->dashboard->getTahunActive();
        goto XRbwA;
        suIcP:
        PTFF3:
        goto KLoHQ;
        sGeRG:
        foreach ($jadm as $j) {
            $jadwal_mapel[] = ["\x6a\x61\x64\x77\x61\x6c" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)];
            isTTm:
        }
        goto HYXLi;
        D_eHA:
        $setting = $this->dashboard->getSetting();
        goto Hv4Rl;
        PHd7u:
        $this->load->view("\x5f\164\145\155\x70\154\141\x74\x65\x73\x2f\x64\141\x73\150\x62\x6f\x61\x72\x64\57\137\x66\157\157\x74\x65\162");
        goto K2z_n;
        Mse0Q:
        PmRx3:
        goto MiVTg;
        oTLBt:
        if ($this->ion_auth->is_admin()) {
            goto NmyvO;
        }
        goto ExzoL;
        Br_XU:
        if ($jadm == null) {
            goto ZSdDK;
        }
        goto sGeRG;
        sVWMc:
        $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas);
        goto u8Yy6;
        YDy0l:
        xB56O:
        goto OwPFR;
        nyn_e:
        QCbxb:
        goto rJNTJ;
        ExzoL:
        if ($this->ion_auth->in_group("\147\165\162\x75")) {
            goto f0BGr;
        }
        goto lKN4f;
        Hv4Rl:
        $data = ["\x75\163\145\162" => $user, "\152\165\144\165\x6c" => "\112\x61\x64\167\141\x6c\x20\x50\x65\x6c\141\152\141\162\x61\156", "\x73\165\142\152\x75\144\x75\154" => "\123\145\x74\x20\112\x61\x64\x77\141\154\x20\120\145\154\141\152\141\x72\141\156", "\163\x65\x74\x74\151\x6e\147" => $setting];
        goto Onbui;
        ZJL5h:
        $data["\147\x75\x72\x75"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto UyW6K;
        OwPFR:
        $data["\x6a\141\144\167\x61\154\137\155\x61\x70\x65\x6c"] = $jadwal_mapel;
        goto OQkHi;
        a4avM:
        goto xB56O;
        goto vnX5a;
        EOTGn:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto W18mG;
        glCPj:
        $this->load->view("\x6d\145\155\142\x65\x72\163\57\147\165\162\165\57\x6b\145\x6c\x61\163\x2f\x6a\141\144\167\x61\154\x2f\x64\141\x74\x61");
        goto ZI0p5;
        MYfLf:
        $jadwal_mapel[] = ["\x6a\x61\x64\x77\141\154" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)];
        goto Mse0Q;
        oaV_0:
        goto PTFF3;
        goto nyn_e;
        KLoHQ:
        if (!($i < $jml_mapel)) {
            goto QCbxb;
        }
        goto MYfLf;
        LJ1v3:
        cWlwb:
        goto WzxoP;
        vnwsl:
        goto cWlwb;
        goto FM_uy;
        UyW6K:
        $this->load->view("\x6d\145\155\142\145\x72\163\x2f\147\x75\x72\x75\57\x74\145\155\x70\154\x61\164\145\163\x2f\150\x65\141\x64\x65\162", $data);
        goto glCPj;
        MiVTg:
        $i++;
        goto oaV_0;
        K2z_n:
        goto Y_Dtd;
        goto ZbOD3;
        QKerE:
        $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari;
        goto Br_XU;
        xEeOZ:
        $this->load->view("\x6b\x65\x6c\x61\163\57\x6a\141\144\167\x61\154\57\144\141\x74\141");
        goto PHd7u;
        Svvre:
    }
    public function setJadwal()
    {
        goto jC4Sf;
        bWOUr:
        $insert = ["\x69\144\137\x6b\x62\x6d" => $id_tp . $id_smt . $id_kelas, "\151\x64\x5f\x74\x70" => $id_tp, "\151\144\x5f\x73\x6d\x74" => $id_smt, "\151\144\x5f\153\145\154\x61\x73" => $id_kelas, "\153\142\155\x5f\x6a\141\x6d\x5f\x70\145\154" => $this->input->post("\x6a\141\x6d\x5f\155\x61\x70\145\x6c", true), "\153\142\x6d\137\152\141\x6d\137\x6d\x75\154\141\151" => $this->input->post("\x6a\x61\155\x5f\x6d\165\x6c\x61\x69", true), "\x6b\x62\155\x5f\x6a\x6d\x6c\x5f\155\141\x70\x65\154\x5f\x68\141\162\151" => $this->input->post("\x6a\155\x6c\x5f\155\141\x70\145\154", true), "\151\x73\x74\x69\162\141\x68\x61\x74" => serialize($istirahat)];
        goto resMz;
        zmH3v:
        qIPl9:
        goto OoBTa;
        zAqDx:
        $jamke = $this->input->post("\x69\x73\x74" . $i, true);
        goto cjU9h;
        htWlk:
        s04uO:
        goto wGPjo;
        cjU9h:
        $durasi = $this->input->post("\x64\x75\x72\137\x69\x73\x74" . $i, true);
        goto X1rRx;
        cHDty:
        $istirahat[] = ["\151\163\x74" => $jamke, "\144\x75\162" => $durasi];
        goto zmH3v;
        HJoPH:
        $i++;
        goto UjXOu;
        resMz:
        $update = $this->db->replace("\153\x65\x6c\x61\x73\x5f\x6a\141\x64\167\x61\154\137\x6b\142\155", $insert);
        goto pvRdE;
        jJoND:
        $data["\163\164\x61\x74\165\x73"] = $update;
        goto uLJbe;
        rI0F3:
        $i = 1;
        goto KWOtk;
        UjXOu:
        goto xpz10;
        goto htWlk;
        HbfQL:
        $id_kelas = $this->input->post("\151\x64\137\153\145\x6c\x61\x73", true);
        goto bWOUr;
        X1rRx:
        if (!$jamke) {
            goto qIPl9;
        }
        goto cHDty;
        pvRdE:
        $this->logging->saveLog(3, "\155\145\162\x75\x62\x61\x68\x20\x6a\141\144\x77\x61\x6c\x20\x70\145\x6c\x61\x6a\141\162\x61\x6e");
        goto jJoND;
        KWOtk:
        xpz10:
        goto d00TL;
        wHWmm:
        $id_smt = $this->master->getSemesterActive()->id_smt;
        goto HbfQL;
        OoBTa:
        J55CV:
        goto HJoPH;
        jC4Sf:
        $istirahat = [];
        goto rI0F3;
        wGPjo:
        $id_tp = $this->master->getTahunActive()->id_tp;
        goto wHWmm;
        uLJbe:
        $this->output_json($data);
        goto eH_KN;
        d00TL:
        if (!($i < 5)) {
            goto s04uO;
        }
        goto zAqDx;
        eH_KN:
    }
    public function setMapel()
    {
        goto mYB4W;
        ae73X:
        $this->db->where($array);
        goto UD5nv;
        MOju_:
        $this->output_json($res);
        goto ePC40;
        ua68B:
        LOzQd:
        goto S7LMd;
        cZRNp:
        foreach ($input as $d) {
            $data[] = ["\151\144\137\152\141\144\167\141\x6c" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\144\137\164\160" => $d->id_tp, "\x69\x64\x5f\x73\x6d\x74" => $d->id_smt, "\151\x64\x5f\x6b\x65\x6c\141\163" => $id_kelas, "\x69\144\x5f\x68\141\x72\x69" => $d->id_hari, "\x6a\141\155\137\x6b\x65" => $d->jam_ke, "\151\x64\137\x6d\x61\x70\145\x6c" => $d->id_mapel];
            RDDeP:
        }
        goto ua68B;
        bPVbs:
        $id_kelas = $this->input->post("\151\x64\137\153\145\154\141\x73", true);
        goto XPW0R;
        in0M6:
        $res["\x73\164\x61\164\x75\x73"] = $update;
        goto MOju_;
        mYB4W:
        $input = json_decode($this->input->post("\x64\x61\x74\x61", true));
        goto bPVbs;
        vlBsg:
        $data = [];
        goto cZRNp;
        S7LMd:
        $update = $this->db->insert_batch("\153\145\154\141\163\137\x6a\141\144\167\141\154\x5f\x6d\x61\x70\x65\x6c", $data);
        goto in0M6;
        UD5nv:
        $this->db->delete("\x6b\145\154\141\163\137\x6a\141\144\167\x61\154\137\155\141\x70\x65\x6c");
        goto vlBsg;
        XPW0R:
        $array = array("\x69\x64\137\x74\x70" => $input[0]->id_tp, "\151\x64\x5f\163\x6d\x74" => $input[0]->id_smt, "\x69\144\x5f\153\x65\x6c\x61\163" => $id_kelas);
        goto ae73X;
        ePC40:
    }
}
