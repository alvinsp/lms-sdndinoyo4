<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelascatatan extends CI_Controller
{
    public function __construct()
    {
        goto CXgvQ;
        CXgvQ:
        parent::__construct();
        goto vQHLD;
        iZW_L:
        $this->form_validation->set_error_delimiters('', '');
        goto kscOl;
        G7xp9:
        $this->load->model("\x4b\x65\x6c\x61\x73\137\155\157\144\145\154", "\x6b\145\154\141\x73");
        goto iZW_L;
        HBi6_:
        $this->load->library(["\x64\x61\164\x61\164\x61\x62\154\x65\x73", "\146\x6f\x72\x6d\137\166\141\x6c\151\144\141\x74\151\x6f\156"]);
        goto LFi3N;
        omeud:
        goto BopUI;
        goto u_ang;
        kQcdy:
        redirect("\x61\x75\x74\x68");
        goto M2dVT;
        FBBXt:
        show_error("\x48\x61\x6e\x79\141\x20\101\x64\x6d\151\x6e\151\x73\164\x72\141\164\x6f\x72\40\171\141\156\x67\40\144\151\142\145\x72\x69\x20\150\x61\153\x20\165\156\x74\x75\153\x20\155\x65\156\147\141\x6b\x73\145\x73\x20\x68\x61\x6c\141\155\x61\x6e\x20\x69\156\x69\x2c\40\x3c\141\x20\x68\x72\x65\146\x3d\x22" . base_url("\144\x61\x73\150\x62\157\x61\162\x64") . "\x22\x3e\x4b\145\x6d\142\x61\x6c\151\x20\153\145\40\155\x65\x6e\x75\40\x61\x77\141\154\x3c\57\141\76", 403, "\101\153\163\x65\x73\40\124\x65\x72\x6c\x61\162\x61\x6e\x67");
        goto E2xdF;
        NZNrW:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\165"))) {
            goto cvJUv;
        }
        goto FBBXt;
        u_ang:
        N_UAd:
        goto kQcdy;
        M2dVT:
        BopUI:
        goto HBi6_;
        hhgjh:
        $this->load->model("\104\162\157\160\x64\x6f\x77\x6e\x5f\155\x6f\144\x65\x6c", "\144\x72\x6f\160\x64\157\167\x6e");
        goto G7xp9;
        LFi3N:
        $this->load->model("\x4d\141\163\164\145\x72\x5f\155\157\144\145\x6c", "\155\141\x73\x74\145\162");
        goto Z9S3g;
        E2xdF:
        cvJUv:
        goto omeud;
        vQHLD:
        if (!$this->ion_auth->logged_in()) {
            goto N_UAd;
        }
        goto NZNrW;
        Z9S3g:
        $this->load->model("\104\x61\x73\150\142\x6f\x61\162\144\x5f\x6d\157\144\x65\x6c", "\x64\x61\x73\150\142\x6f\x61\x72\x64");
        goto hhgjh;
        kscOl:
    }
    public function output_json($data, $encode = true)
    {
        goto J29M4;
        J29M4:
        if (!$encode) {
            goto avpz6;
        }
        goto A7RXH;
        Vus2r:
        $this->output->set_content_type("\x61\160\x70\154\x69\x63\141\164\151\x6f\x6e\57\x6a\163\157\156")->set_output($data);
        goto EEofj;
        Ma8nK:
        avpz6:
        goto Vus2r;
        A7RXH:
        $data = json_encode($data);
        goto Ma8nK;
        EEofj:
    }
    public function index()
    {
        goto tom86;
        BSbgr:
        $id_mapel = $this->input->get("\x6d\x61\160\x65\x6c", true);
        goto KZiEo;
        oFSco:
        zXCkg:
        goto gtL3Y;
        xdID1:
        $data["\147\165\x72\165"] = $guru;
        goto iQ8Nd;
        ZhLB5:
        if (!($mapel != null)) {
            goto t6Jfj;
        }
        goto zTW03;
        xJp_M:
        puMKK:
        goto oFSco;
        Hv0mv:
        $id_kelas = $this->input->get("\153\145\x6c\141\163", true);
        goto BSbgr;
        p0yKD:
        OtfH2:
        goto XiGIp;
        RIsb3:
        Clq69:
        goto vYIXF;
        yFndH:
        WTpxl:
        goto CnIt7;
        RIsT3:
        $this->load->view("\x5f\164\x65\x6d\x70\154\141\x74\145\x73\x2f\x64\141\x73\150\142\x6f\141\162\x64\x2f\137\x66\x6f\x6f\164\x65\x72");
        goto N4Ckm;
        sGs3O:
        IMDf2:
        goto XpXKJ;
        E7TXw:
        $this->load->view("\155\145\155\142\145\162\163\x2f\x67\x75\162\x75\57\x74\145\x6d\160\154\141\x74\x65\163\57\150\x65\x61\x64\145\162", $data);
        goto jKn83;
        jKn83:
        $this->load->view("\155\x65\x6d\142\145\x72\x73\x2f\x67\x75\162\165\57\153\x65\154\x61\163\57\143\141\164\x61\x74\x61\x6e\x2f\x64\141\x74\141");
        goto YnUwF;
        XiGIp:
        t6Jfj:
        goto VlN29;
        zzfMS:
        $data["\163\x6d\164\x5f\x61\x63\x74\x69\x76\x65"] = $smt;
        goto Hv0mv;
        d6yec:
        $data["\x6b\x65\154\141\x73"] = $arrKelas;
        goto E7TXw;
        zL16F:
        $this->load->view("\x5f\164\x65\x6d\x70\154\141\x74\x65\x73\57\144\x61\x73\150\x62\x6f\x61\162\144\57\137\150\145\x61\144\x65\x72", $data);
        goto aVE54;
        iQ8Nd:
        $data["\151\x64\x5f\147\x75\162\165"] = $guru->id_guru;
        goto afQCQ;
        afQCQ:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto DlA8B;
        xcr1G:
        $smt = $this->dashboard->getSemesterActive();
        goto Q0h6C;
        bdbl0:
        $data["\x74\x70\137\141\x63\x74\151\x76\x65"] = $tp;
        goto M__6C;
        KZiEo:
        $data["\153\145\x6c\x61\163\137\163\145\x6c\145\x63\164\x65\x64"] = $id_kelas;
        goto Zun3_;
        DlA8B:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto opu9E;
        Pl15R:
        $arrKelas = [];
        goto y_51D;
        Zun3_:
        $data["\x6d\141\160\145\x6c\137\163\x65\154\145\143\x74\x65\x64"] = $id_mapel;
        goto OaYOs;
        XW1Dk:
        foreach ($cat_kelas as $ck) {
            $ck->reading = unserialize($ck->reading);
            CNP8Z:
        }
        goto RIsb3;
        Qsd0O:
        if ($this->ion_auth->is_admin()) {
            goto WTpxl;
        }
        goto ouSj6;
        trnh4:
        $setting = $this->dashboard->getSetting();
        goto aG9BH;
        XpXKJ:
        $arrMapel = [];
        goto Pl15R;
        VlN29:
        $kelasses = [];
        goto TzZDk;
        tom86:
        $user = $this->ion_auth->user()->row();
        goto trnh4;
        TzZDk:
        if (!(count($arrId) > 0)) {
            goto IMDf2;
        }
        goto AuWQR;
        FSCSO:
        $data["\x6b\145\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto zL16F;
        hkdij:
        $tp = $this->dashboard->getTahunActive();
        goto xcr1G;
        eVaCW:
        $data["\x63\141\164\137\163\151\x73\x77\141"] = $this->kelas->getCatatanMapelSiswa($tp->id_tp, $smt->id_smt, $id_kelas, $id_mapel);
        goto ecnpG;
        ouSj6:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto xdID1;
        ecnpG:
        VIPbr:
        goto Qsd0O;
        OaYOs:
        if (!($id_kelas != null)) {
            goto VIPbr;
        }
        goto XlgbW;
        zTW03:
        foreach ($mapel as $mpl) {
            goto cTrnw;
            cTrnw:
            foreach ($mpl->kelas_mapel as $id_mapel) {
                array_push($arrId, $id_mapel->kelas);
                RGmdC:
            }
            goto uYItH;
            xsI0m:
            YmDso:
            goto YZT1I;
            uYItH:
            KnJBK:
            goto xsI0m;
            YZT1I:
        }
        goto p0yKD;
        gtL3Y:
        $data["\x6d\141\160\x65\154"] = $arrMapel;
        goto d6yec;
        Q0h6C:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto bdbl0;
        R9AU5:
        foreach ($mapel as $m) {
            goto Zweg2;
            dtfcf:
            foreach ($m->kelas_mapel as $kls_mapel) {
                goto RlGun;
                RlGun:
                foreach ($kelasses as $key => $kelass) {
                    goto TffgJ;
                    TffgJ:
                    if (!($kls_mapel->kelas == $key)) {
                        goto iYc6m;
                    }
                    goto WShmF;
                    T61vd:
                    cuPad:
                    goto A2bqn;
                    WShmF:
                    $arrKelas[$m->id_mapel][$key] = $kelass;
                    goto KE0QI;
                    KE0QI:
                    iYc6m:
                    goto T61vd;
                    A2bqn:
                }
                goto QecqM;
                QecqM:
                shqUT:
                goto z4TS9;
                z4TS9:
                EjP7r:
                goto Ih0rl;
                Ih0rl:
            }
            goto FNE54;
            j8w2W:
            Nr8aG:
            goto CSYsI;
            Zweg2:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto dtfcf;
            FNE54:
            v4XHp:
            goto j8w2W;
            CSYsI:
        }
        goto xJp_M;
        YnUwF:
        $this->load->view("\155\145\155\x62\x65\x72\163\57\147\x75\x72\165\57\164\x65\155\160\x6c\141\164\145\x73\x2f\146\x6f\x6f\164\x65\x72");
        goto GN2b_;
        aG9BH:
        $data = ["\165\163\145\162" => $user, "\152\x75\x64\165\x6c" => "\x43\141\x74\141\164\141\156\x20\107\x75\162\165", "\x73\x75\x62\152\x75\144\165\x6c" => "\x43\x61\164\x61\x74\141\156\x20\x53\x65\x6c\141\155\x61\x20\120\x65\155\142\x65\154\x61\152\x61\162\141\x6e", "\163\x65\x74\x74\x69\x6e\x67" => $setting];
        goto hkdij;
        AuWQR:
        $kelasses = $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId);
        goto sGs3O;
        aVE54:
        $this->load->view("\x6d\x65\x6d\x62\145\x72\163\57\x67\165\162\165\x2f\x6b\145\x6c\141\163\57\143\x61\x74\x61\x74\141\x6e\x2f\x64\141\x74\x61");
        goto RIsT3;
        y_51D:
        if (!($mapel != null)) {
            goto zXCkg;
        }
        goto R9AU5;
        vYIXF:
        $data["\x63\x61\x74\137\x6b\145\154\x61\x73"] = $cat_kelas;
        goto eVaCW;
        CnIt7:
        $data["\x70\162\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto pssd5;
        opu9E:
        $arrId = [];
        goto ZhLB5;
        M__6C:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto zzfMS;
        N4Ckm:
        TzoG2:
        goto v0_O3;
        GN2b_:
        goto TzoG2;
        goto yFndH;
        pssd5:
        $data["\x6d\141\x70\x65\x6c"] = $this->dropdown->getAllMapel();
        goto FSCSO;
        XlgbW:
        $cat_kelas = $this->kelas->getCatatanMapelKelas($id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt);
        goto XW1Dk;
        v0_O3:
    }
    public function siswa()
    {
        goto hPPjJ;
        tk2ae:
        $this->load->view("\x5f\x74\x65\155\x70\154\141\164\x65\163\x2f\x64\141\163\150\142\x6f\141\162\144\x2f\137\150\x65\141\x64\145\x72", $data);
        goto YSKL3;
        AVv1t:
        $id_mapel = $this->input->get("\155\x61\x70\x65\x6c");
        goto fDzEO;
        fDzEO:
        $id_kelas = $this->input->get("\153\x65\x6c\141\163");
        goto Ozp41;
        Q0_hV:
        $tp = $this->master->getTahunActive();
        goto KE6CQ;
        zEJ1g:
        $data["\x67\165\162\x75"] = $guru;
        goto N1x83;
        hPPjJ:
        $id_siswa = $this->input->get("\151\x64");
        goto AVv1t;
        GAyDS:
        $data["\160\x72\x6f\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto tk2ae;
        XAgV9:
        if ($this->ion_auth->is_admin()) {
            goto w2tvH;
        }
        goto MTj0J;
        N1x83:
        $this->load->view("\x6d\145\x6d\142\x65\x72\163\57\147\165\162\165\x2f\x74\145\x6d\160\x6c\x61\x74\x65\163\x2f\150\x65\x61\144\x65\x72", $data);
        goto N4pUp;
        XcKii:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto dtC0h;
        iSZH0:
        $this->load->view("\x6d\145\155\x62\x65\x72\x73\x2f\147\165\162\165\57\x74\x65\155\x70\154\x61\x74\x65\x73\57\x66\x6f\157\164\x65\x72");
        goto v_MU3;
        v_MU3:
        goto FN07x;
        goto JuuZn;
        c0biY:
        $data["\x73\x69\x73\x77\x61"] = $this->master->getSiswaById($id_siswa);
        goto URTSx;
        QHmrM:
        FN07x:
        goto H6naO;
        geTde:
        $data["\x6d\141\x70\x65\x6c"] = $id_mapel;
        goto wrivz;
        CMtyh:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto RL1uc;
        YSKL3:
        $this->load->view("\x6d\x65\x6d\x62\145\x72\x73\57\x67\165\x72\165\x2f\153\145\154\141\163\x2f\143\x61\x74\141\x74\141\x6e\57\160\x65\x72\x73\x69\163\167\141");
        goto mTc4P;
        RL1uc:
        $data["\x73\x6d\x74\137\141\143\164\x69\x76\145"] = $smt;
        goto c0biY;
        dtC0h:
        $data["\164\160\x5f\x61\143\x74\151\x76\145"] = $tp;
        goto CMtyh;
        mTc4P:
        $this->load->view("\137\x74\x65\x6d\160\154\x61\164\x65\163\57\x64\x61\163\x68\142\x6f\141\162\x64\57\137\x66\x6f\157\164\x65\x72");
        goto QHmrM;
        KE6CQ:
        $smt = $this->master->getSemesterActive();
        goto XcKii;
        bH37J:
        $data = ["\165\163\145\x72" => $user, "\x6a\x75\144\165\154" => "\x43\141\x74\x61\164\x61\156\x20\123\x69\163\x77\x61", "\x73\165\x62\152\x75\x64\165\154" => "\103\x61\164\x61\164\x61\156\40\123\151\163\167\141", "\163\145\164\164\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto Q0_hV;
        N4pUp:
        $this->load->view("\155\145\x6d\142\145\162\163\57\x67\165\162\165\x2f\153\145\154\141\163\57\143\141\164\x61\x74\x61\x6e\x2f\x70\x65\x72\x73\151\x73\167\141");
        goto iSZH0;
        JuuZn:
        w2tvH:
        goto GAyDS;
        URTSx:
        $data["\x63\141\164\x61\164\141\x6e\137\x73\151\163\x77\141"] = $this->kelas->getAllCatatanMapelSiswa($id_siswa, $id_mapel, $tp->id_tp, $smt->id_smt);
        goto geTde;
        Ozp41:
        $user = $this->ion_auth->user()->row();
        goto bH37J;
        MTj0J:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto zEJ1g;
        wrivz:
        $data["\x6b\145\x6c\141\163"] = $id_kelas;
        goto XAgV9;
        H6naO:
    }
    public function saveCatatanKelas()
    {
        goto CRfZp;
        m39y0:
        $user = $this->ion_auth->user()->row();
        goto cXwr7;
        KMmRh:
        $id_kelas = $this->input->post("\x69\x64\x5f\x6b\x65\x6c\141\163");
        goto PtGbp;
        cXwr7:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto KMmRh;
        b0CEm:
        $level = $this->input->post("\x6c\145\166\x65\154", true);
        goto Qbz70;
        ffODs:
        $insert = $this->master->create("\153\145\154\141\x73\x5f\x63\x61\164\141\164\141\x6e\x5f\155\141\160\x65\154", $data);
        goto eor6D;
        eor6D:
        $this->output_json($insert);
        goto Z3uzp;
        CRfZp:
        $tp = $this->dashboard->getTahunActive();
        goto i3Bzj;
        hVQMB:
        $text = $this->input->post("\x74\x65\x78\164", true);
        goto b0CEm;
        fcv71:
        $data = ["\151\144\x5f\x74\160" => $tp->id_tp, "\151\x64\x5f\163\x6d\164" => $smt->id_smt, "\164\171\x70\x65" => "\61", "\151\x64\x5f\155\141\160\145\154" => $id_mapel, "\151\144\137\153\x65\154\x61\163" => $id_kelas, "\151\x64\x5f\x67\x75\x72\x75" => $guru->id_guru, "\154\x65\x76\145\154" => $level, "\x74\x65\170\x74" => $text, "\162\x65\x61\x64\x69\x6e\x67" => serialize([])];
        goto ffODs;
        PtGbp:
        $id_mapel = $this->input->post("\151\x64\137\x6d\141\160\x65\x6c", true);
        goto hVQMB;
        i3Bzj:
        $smt = $this->dashboard->getSemesterActive();
        goto m39y0;
        Qbz70:
        $tgl = date("\131\x2d\x6d\x2d\144");
        goto fcv71;
        Z3uzp:
    }
    public function saveCatatanSiswa()
    {
        goto wYjoQ;
        OYgmV:
        $id_mapel = $this->input->post("\x69\144\x5f\x6d\x61\x70\x65\154", true);
        goto xHYrN;
        KYlkn:
        $user = $this->ion_auth->user()->row();
        goto FrVii;
        iji4I:
        $data = ["\x69\x64\137\164\160" => $tp->id_tp, "\x69\x64\x5f\163\x6d\x74" => $smt->id_smt, "\164\x79\160\145" => "\62", "\151\144\x5f\x6d\x61\x70\145\154" => $id_mapel, "\x69\144\x5f\x73\x69\163\167\x61" => $id_siswa, "\151\144\x5f\147\165\162\165" => $guru->id_guru, "\154\145\x76\x65\x6c" => $level, "\x74\x65\170\x74" => $text, "\x72\145\x61\x64\x69\156\147" => serialize([])];
        goto lJuq1;
        f28cT:
        $id_siswa = $this->input->post("\151\144\137\163\x69\163\x77\x61");
        goto OYgmV;
        uh2dZ:
        $this->output_json($insert);
        goto Uz2gq;
        xHYrN:
        $text = $this->input->post("\164\x65\x78\164", true);
        goto cInsA;
        cInsA:
        $level = $this->input->post("\154\145\x76\x65\154", true);
        goto iji4I;
        kNeT1:
        $smt = $this->dashboard->getSemesterActive();
        goto KYlkn;
        lJuq1:
        $insert = $this->master->create("\153\x65\154\141\x73\137\x63\141\164\x61\164\141\x6e\137\155\141\160\x65\x6c", $data);
        goto uh2dZ;
        FrVii:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto f28cT;
        wYjoQ:
        $tp = $this->dashboard->getTahunActive();
        goto kNeT1;
        Uz2gq:
    }
    public function hapus($id_catatan)
    {
        $delete = $this->master->delete("\x6b\145\x6c\x61\163\x5f\x63\x61\164\141\164\141\156\x5f\x6d\141\x70\x65\x6c", $id_catatan, "\x69\x64\137\143\141\164\141\164\141\156");
        $this->output_json($delete);
    }
}
