<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtalokasi extends CI_Controller
{
    public function __construct()
    {
        goto CRS0s;
        T7BMT:
        IiRk_:
        goto QyMMT;
        l0UOS:
        $this->load->model("\104\162\x6f\x70\144\x6f\167\156\137\155\x6f\x64\145\154", "\144\x72\157\160\144\157\x77\156");
        goto q_k0P;
        fX5V0:
        fEarp:
        goto tf9Wr;
        XRTCK:
        $this->load->model("\104\x61\x73\x68\142\x6f\x61\162\144\137\x6d\157\x64\145\154", "\x64\141\163\150\x62\157\x61\x72\x64");
        goto k4MNy;
        QyMMT:
        redirect("\x61\165\164\x68");
        goto fX5V0;
        IjUCs:
        O6Nhr:
        goto jjU1p;
        dyYj7:
        $this->load->model("\x4c\157\147\137\155\x6f\x64\x65\x6c", "\x6c\157\147\147\151\156\x67");
        goto l0UOS;
        jjU1p:
        goto fEarp;
        goto T7BMT;
        q_k0P:
        $this->form_validation->set_error_delimiters('', '');
        goto TuCb1;
        CRS0s:
        parent::__construct();
        goto aOFYq;
        tLBNI:
        if ($this->ion_auth->is_admin()) {
            goto O6Nhr;
        }
        goto KWAlv;
        aOFYq:
        if (!$this->ion_auth->logged_in()) {
            goto IiRk_;
        }
        goto tLBNI;
        KWAlv:
        show_error("\110\141\156\x79\141\x20\x41\144\155\x69\x6e\x69\163\x74\x72\141\x74\157\x72\x20\x79\141\156\147\40\x64\151\142\x65\162\151\x20\x68\141\x6b\x20\x75\x6e\164\165\153\x20\155\x65\x6e\147\141\153\x73\145\163\40\x68\141\x6c\141\155\x61\156\x20\x69\156\151\54\40\x3c\x61\40\x68\x72\145\x66\x3d\x22" . base_url("\144\x61\x73\150\142\157\x61\162\144") . "\x22\x3e\113\145\x6d\x62\x61\154\x69\x20\153\145\40\x6d\x65\156\x75\x20\x61\167\141\154\x3c\57\x61\x3e", 403, "\x41\153\163\x65\x73\40\x54\x65\x72\x6c\141\162\141\156\x67");
        goto IjUCs;
        nxaz8:
        $this->load->model("\115\x61\163\x74\x65\x72\x5f\x6d\157\x64\x65\x6c", "\155\x61\163\164\x65\162");
        goto XRTCK;
        tf9Wr:
        $this->load->library(["\x64\x61\164\x61\164\x61\x62\154\x65\x73", "\146\157\x72\x6d\137\166\141\154\x69\x64\x61\x74\151\x6f\156"]);
        goto nxaz8;
        k4MNy:
        $this->load->model("\103\142\164\137\155\157\x64\145\154", "\143\x62\x74");
        goto dyYj7;
        TuCb1:
    }
    public function output_json($data, $encode = true)
    {
        goto THeTk;
        THeTk:
        if (!$encode) {
            goto BRTYm;
        }
        goto tNneR;
        tNneR:
        $data = json_encode($data);
        goto wMV1i;
        wMV1i:
        BRTYm:
        goto XuaMT;
        XuaMT:
        $this->output->set_content_type("\x61\160\160\154\151\x63\141\164\x69\157\x6e\57\x6a\163\x6f\156")->set_output($data);
        goto jJz2k;
        jJz2k:
    }
    public function index()
    {
        goto MZAdT;
        Y5Q6N:
        GJhO4:
        goto mqWJZ;
        AtaOC:
        $this->load->view("\143\142\x74\57\x61\x6c\x6f\153\x61\x73\151\57\144\x61\164\141");
        goto pdBve;
        gmXbS:
        $tp = $this->dashboard->getTahunActive();
        goto lDCmi;
        rc3pn:
        WJLeA:
        goto KNV2l;
        hJHnZ:
        if ($setting->jenjang == "\x31") {
            goto qKFM9;
        }
        goto U21Jc;
        eNgzk:
        $filter_selected = $this->input->get("\146\151\x6c\164\x65\x72", true);
        goto ws2g2;
        Jzwpt:
        $jenis_selected = $this->input->get("\152\145\156\x69\x73", true);
        goto NsdCi;
        mqWJZ:
        $levels = ["\60" => "\120\151\x6c\151\x68\40\x4c\x65\166\145\x6c", "\61\60" => "\61\x30", "\x31\61" => "\x31\61", "\x31\x32" => "\x31\62"];
        goto RcE9x;
        HBfSy:
        $ids = [];
        goto RJ07a;
        Agcko:
        $this->load->view("\137\x74\145\155\x70\154\141\164\x65\163\x2f\144\x61\163\x68\x62\157\x61\162\x64\x2f\137\150\x65\x61\x64\x65\162", $data);
        goto AtaOC;
        KNV2l:
        $data["\152\x65\156\151\x73"] = $this->cbt->getAllJenisUjianByArrJenis($ids);
        goto D5Joz;
        RpNDq:
        $setting = $this->dashboard->getSetting();
        goto rQXSr;
        D0cZ6:
        $data["\x6b\145\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto zUHW3;
        bgGCw:
        goto o4mGL;
        goto Y5Q6N;
        RcE9x:
        o4mGL:
        goto NvC28;
        L6s4g:
        qKFM9:
        goto pTgE7;
        D5Joz:
        M5_eH:
        goto Jzwpt;
        QEUvI:
        $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, $level_selected, $dari_selected, $sampai_selected);
        goto ev8I2;
        EitYu:
        rcHsS:
        goto hbnGS;
        hFCvV:
        goto M5_eH;
        goto rc3pn;
        v5Lqf:
        $data["\x74\160\x5f\141\x63\164\x69\166\145"] = $tp;
        goto NjXGW;
        MRBOl:
        if (!($jenis_selected != null && $level_selected != null)) {
            goto BRmTS;
        }
        goto QEUvI;
        b7cM8:
        $data["\x6a\x61\x64\x77\x61\x6c\163"] = $jadwals;
        goto KHLCV;
        C3AEI:
        $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt);
        goto HBfSy;
        k7L3O:
        $data["\x73\x6d\x74\x5f\x61\143\164\151\166\x65"] = $smt;
        goto C3AEI;
        lDCmi:
        $smt = $this->dashboard->getSemesterActive();
        goto bDZG9;
        NjXGW:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto k7L3O;
        ws2g2:
        $dari_selected = $this->input->get("\144\x61\162\x69", true);
        goto NaeSP;
        U_Jq9:
        foreach ($jadwals as $key => $row) {
            goto xCRvh;
            wtY3x:
            $ret[$row->tgl_mulai] = [];
            goto UHXYH;
            xCRvh:
            if (isset($ret[$row->tgl_mulai])) {
                goto QWpyQ;
            }
            goto wtY3x;
            UHXYH:
            array_push($ret[$row->tgl_mulai], $row);
            goto a2bpe;
            lQEKW:
            QWpyQ:
            goto bQzhy;
            bQzhy:
            array_push($ret[$row->tgl_mulai], $row);
            goto lBpPx;
            lBpPx:
            EcKpF:
            goto JlOUh;
            JlOUh:
            uougi:
            goto NPH13;
            a2bpe:
            goto EcKpF;
            goto lQEKW;
            NPH13:
        }
        goto HkvHd;
        FBZcW:
        $data["\x64\x61\162\x69\x5f\163\x65\154\145\x63\x74\x65\144"] = $dari_selected;
        goto U4cTk;
        agY61:
        $data["\x6c\x65\166\145\154\x5f\x73\145\154\x65\x63\x74\x65\x64"] = $level_selected;
        goto T6ETI;
        E_dLM:
        goto o4mGL;
        goto L6s4g;
        ev8I2:
        BRmTS:
        goto D0cZ6;
        KrJJQ:
        $ret = [];
        goto U_Jq9;
        AJaQg:
        foreach ($id_jenis as $jenis) {
            array_push($ids, $jenis->id_jenis);
            No7_Z:
        }
        goto EitYu;
        FFgbo:
        $levels = ["\x30" => "\x50\151\154\151\x68\40\x4c\145\x76\145\154", "\x37" => "\67", "\x38" => "\x38", "\71" => "\71"];
        goto bgGCw;
        pTgE7:
        $levels = ["\x30" => "\x50\151\x6c\x69\150\40\114\x65\x76\x65\154", "\61" => "\61", "\x32" => "\62", "\x33" => "\x33", "\64" => "\x34", "\65" => "\65", "\66" => "\66"];
        goto bu9eD;
        MEBq3:
        if ($setting->jenjang == "\x33") {
            goto GJhO4;
        }
        goto E_dLM;
        pdBve:
        $this->load->view("\137\x74\145\155\160\x6c\141\x74\x65\163\57\x64\141\x73\x68\x62\x6f\141\x72\x64\x2f\137\x66\157\x6f\x74\x65\162");
        goto ZFAiD;
        Q2f7U:
        $levels = [];
        goto hJHnZ;
        jril_:
        $data["\152\x65\156\151\x73"] = ['' => "\x62\x65\x6c\x75\x6d\x20\x61\x64\141\x20\152\141\144\x77\x61\x6c\40\x75\152\151\141\x6e"];
        goto hFCvV;
        bu9eD:
        goto o4mGL;
        goto IHgjR;
        T6ETI:
        $data["\x66\151\x6c\x74\145\x72\137\163\145\x6c\x65\x63\x74\x65\x64"] = $filter_selected;
        goto FBZcW;
        MZAdT:
        $user = $this->ion_auth->user()->row();
        goto RpNDq;
        NaeSP:
        $sampai_selected = $this->input->get("\x73\x61\x6d\160\x61\x69", true);
        goto vyCHw;
        vyCHw:
        $data["\x66\151\154\164\x65\162"] = ["\x30" => "\x53\145\x6d\165\141", "\61" => "\124\141\x6e\147\147\141\154"];
        goto I2o7D;
        KHLCV:
        $data["\160\162\x6f\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto Agcko;
        NsdCi:
        $level_selected = $this->input->get("\x6c\x65\x76\145\154", true);
        goto eNgzk;
        NvC28:
        $data["\x6c\145\166\145\x6c\x73"] = $levels;
        goto KrJJQ;
        IHgjR:
        rxbqi:
        goto FFgbo;
        rQXSr:
        $data = ["\165\x73\145\x72" => $user, "\152\x75\144\165\x6c" => "\x41\x6c\157\153\141\x73\x69\40\x57\x61\x6b\164\x75", "\163\165\142\x6a\x75\144\165\x6c" => "\101\x6c\157\153\x61\x73\x69\40\127\x61\153\164\x75\40\125\x6a\151\x61\x6e", "\163\145\x74\164\x69\156\x67" => $setting];
        goto gmXbS;
        U4cTk:
        $data["\x73\141\155\160\x61\151\137\163\x65\x6c\145\x63\x74\145\144"] = $sampai_selected;
        goto et81P;
        faqPK:
        if (count($ids) > 0) {
            goto WJLeA;
        }
        goto jril_;
        I2o7D:
        $data["\152\x65\x6e\x69\x73\x5f\x73\x65\x6c\145\x63\164\x65\x64"] = $jenis_selected;
        goto agY61;
        bDZG9:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto v5Lqf;
        RJ07a:
        if (!(count($id_jenis) > 0)) {
            goto m1Pbb;
        }
        goto AJaQg;
        U21Jc:
        if ($setting->jenjang == "\62") {
            goto rxbqi;
        }
        goto MEBq3;
        HkvHd:
        dB7nC:
        goto b7cM8;
        et81P:
        $jadwals = [];
        goto MRBOl;
        zUHW3:
        $data["\162\x75\x61\x6e\x67"] = $this->dropdown->getAllRuang();
        goto Q2f7U;
        hbnGS:
        m1Pbb:
        goto faqPK;
        ZFAiD:
    }
    public function saveAlokasi()
    {
        goto lf2M4;
        BPysn:
        $data["\163\x74\x61\164\x75\163"] = $update;
        goto xThLq;
        NQxFy:
        $update = $this->db->update_batch("\143\142\164\137\x6a\x61\x64\x77\x61\154", $insert, "\151\x64\137\x6a\141\144\167\141\x6c");
        goto BPysn;
        jvsSj:
        $insert = [];
        goto Z0BnN;
        xThLq:
        $this->output_json($data);
        goto KRH34;
        Z0BnN:
        foreach ($input as $d) {
            goto GKruJ;
            HDbQn:
            ekWgp:
            goto lhwC1;
            IcPFY:
            Gqty4:
            goto HDbQn;
            fN9j0:
            array_push($insert, ["\x69\x64\137\x6a\x61\x64\x77\141\x6c" => $d->id_jadwal, "\152\x61\x6d\137\153\145" => $d->jam_ke]);
            goto IcPFY;
            GKruJ:
            if (!($d->id_jadwal != "\x30")) {
                goto Gqty4;
            }
            goto fN9j0;
            lhwC1:
        }
        goto ORLk5;
        lf2M4:
        $input = json_decode($this->input->post("\141\x6c\x6f\153\141\163\151", true));
        goto jvsSj;
        ORLk5:
        nVFWU:
        goto NQxFy;
        KRH34:
    }
}
