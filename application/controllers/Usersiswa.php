<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\x53\105\120\101\x54\x48") or exit("\x4e\x6f\x20\144\151\x72\145\143\x74\x20\x73\x63\x72\151\x70\164\x20\141\x63\x63\x65\163\163\40\141\154\x6c\x6f\167\145\x64");
class Usersiswa extends CI_Controller
{
    public function __construct()
    {
        goto N9M_b;
        CJ78q:
        $this->load->model("\x4d\141\163\164\145\x72\x5f\155\x6f\x64\x65\154", "\x6d\141\163\164\x65\x72");
        goto buUjH;
        LooSK:
        if ($this->ion_auth->logged_in()) {
            goto koaDk;
        }
        goto YeghE;
        buUjH:
        $this->load->model("\104\141\x73\150\x62\x6f\141\x72\x64\137\x6d\157\x64\x65\154", "\x64\141\163\x68\x62\x6f\x61\162\x64");
        goto ck3fs;
        AKAjC:
        $this->load->model("\125\163\x65\x72\163\137\155\x6f\x64\145\x6c", "\165\163\x65\x72\163");
        goto CJ78q;
        ck3fs:
        $this->form_validation->set_error_delimiters('', '');
        goto jV1LW;
        YeghE:
        redirect("\x61\165\164\x68");
        goto FW8SD;
        N9M_b:
        parent::__construct();
        goto LooSK;
        FW8SD:
        koaDk:
        goto syuJy;
        syuJy:
        $this->load->library(["\x64\x61\x74\141\x74\141\x62\x6c\x65\x73", "\146\157\x72\155\137\166\x61\154\x69\144\x61\x74\x69\157\156"]);
        goto AKAjC;
        jV1LW:
    }
    public function is_has_access()
    {
        goto udneB;
        udneB:
        $user_id = $this->ion_auth->user()->row()->id;
        goto rZsCR;
        P3O70:
        show_error("\x48\141\x6e\171\x61\x20\x41\144\x6d\151\x6e\151\163\x74\162\141\164\x6f\162\40\171\x61\156\x67\40\x64\151\142\145\x72\x69\40\x68\141\x6b\x20\x75\156\x74\x75\x6b\40\x6d\145\156\147\x61\x6b\x73\145\163\40\150\141\x6c\141\x6d\x61\156\40\151\156\151\54\x20\74\x61\x20\x68\x72\145\146\x3d\x22" . base_url("\x64\141\x73\150\142\157\x61\162\x64") . "\x22\x3e\113\145\x6d\x62\x61\x6c\151\x20\x6b\145\x20\155\x65\x6e\x75\40\x61\167\x61\154\x3c\x2f\x61\76", 403, "\x41\x6b\163\x65\163\40\x54\x65\162\154\141\x72\141\x6e\147");
        goto R8mjb;
        FcXoV:
        if (!(!$group === "\x61\x64\x6d\x69\x6e" or !$group === "\147\165\162\165")) {
            goto KMTdh;
        }
        goto P3O70;
        rZsCR:
        $group = $this->ion_auth->get_users_groups($user_id)->row()->name;
        goto FcXoV;
        R8mjb:
        KMTdh:
        goto mSkDo;
        mSkDo:
    }
    public function output_json($data, $encode = true)
    {
        goto oIhC2;
        Q4cHt:
        L0hnK:
        goto xUjYH;
        oIhC2:
        if (!$encode) {
            goto L0hnK;
        }
        goto vZNM9;
        vZNM9:
        $data = json_encode($data);
        goto Q4cHt;
        xUjYH:
        $this->output->set_content_type("\141\x70\x70\154\x69\143\141\164\x69\x6f\x6e\x2f\x6a\x73\x6f\156")->set_output($data);
        goto lNxQx;
        lNxQx:
    }
    public function data()
    {
        goto ITCfC;
        EIjtc:
        $this->output_json($this->users->getUserSiswa($tp->id_tp, $smt->id_smt), false);
        goto fuNhx;
        KtSIc:
        $smt = $this->dashboard->getSemesterActive();
        goto EIjtc;
        ITCfC:
        $this->is_has_access();
        goto bdqIs;
        bdqIs:
        $tp = $this->dashboard->getTahunActive();
        goto KtSIc;
        fuNhx:
    }
    public function index()
    {
        goto YGX1v;
        outVj:
        $data["\x73\x6d\164\137\141\x63\x74\151\166\x65"] = $this->dashboard->getSemesterActive();
        goto uZ1yQ;
        qrEa6:
        $this->load->view("\137\164\x65\x6d\x70\x6c\x61\x74\145\x73\x2f\x64\x61\x73\150\x62\157\x61\x72\144\x2f\137\x66\x6f\157\164\x65\x72");
        goto tODkn;
        d_q2I:
        $user = $this->ion_auth->user()->row();
        goto NcCFT;
        uZ1yQ:
        $this->load->view("\x5f\x74\x65\155\x70\154\x61\x74\x65\x73\x2f\144\141\x73\150\142\157\141\x72\x64\x2f\137\150\x65\141\x64\x65\x72", $data);
        goto T0Bs5;
        NcCFT:
        $data = ["\165\x73\x65\x72" => $user, "\152\165\x64\x75\x6c" => "\x55\x73\145\162\40\x4d\141\156\141\x67\x65\x6d\x65\156\164", "\163\x75\142\x6a\165\x64\x75\154" => "\x44\x61\x74\x61\x20\125\163\x65\x72\x20\x53\151\x73\167\x61", "\160\162\157\146\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()];
        goto mJ6ZQ;
        u8vtO:
        $data["\164\x70\x5f\141\143\x74\151\166\145"] = $this->dashboard->getTahunActive();
        goto R2WHq;
        YGX1v:
        $this->is_has_access();
        goto d_q2I;
        mJ6ZQ:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto u8vtO;
        R2WHq:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto outVj;
        T0Bs5:
        $this->load->view("\x75\x73\x65\x72\163\57\163\x69\163\x77\141\57\144\x61\164\x61");
        goto qrEa6;
        tODkn:
    }
    public function list()
    {
        goto SOZR0;
        I0kTb:
        $lists = $this->users->getUserSiswaPage($tp->id_tp, $smt->id_smt, $offset, $limit, $search);
        goto v4e1z;
        v4e1z:
        $data = ["\x6c\151\x73\164\163" => $lists, "\164\157\x74\141\154" => $count_siswa, "\x70\141\x67\145\163" => ceil($count_siswa / $limit), "\x73\145\141\x72\x63\x68" => $search, "\x70\x65\x72\x70\141\147\145" => $limit];
        goto X5gKq;
        SOZR0:
        $page = $this->input->post("\160\x61\147\x65", true);
        goto AWqq4;
        dh1sS:
        $count_siswa = $this->users->getUserSiswaTotalPage($search);
        goto I0kTb;
        ESOjI:
        $smt = $this->dashboard->getSemesterActive();
        goto dh1sS;
        X5gKq:
        $this->output_json($data);
        goto TViGX;
        q9NWp:
        $tp = $this->dashboard->getTahunActive();
        goto ESOjI;
        btfkl:
        $offset = ($page - 1) * $limit;
        goto q9NWp;
        ZCGK8:
        $search = $this->input->post("\163\x65\x61\x72\143\x68", true);
        goto btfkl;
        AWqq4:
        $limit = $this->input->post("\154\151\155\151\x74", true);
        goto ZCGK8;
        TViGX:
    }
    private function registerSiswa($username, $password, $email, $additional_data, $group)
    {
        goto KftYT;
        ern3L:
        $data["\x73\x74\141\x74\x75\163"] = false;
        goto zhfNw;
        mCCJJ:
        $data["\x69\144"] = $reg;
        goto HpBwv;
        KftYT:
        $reg = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto n9qze;
        zhfNw:
        fGMYQ:
        goto i_hBy;
        n9qze:
        $data["\x73\164\x61\x74\165\163"] = true;
        goto mCCJJ;
        HpBwv:
        if (!($reg == false)) {
            goto fGMYQ;
        }
        goto ern3L;
        i_hBy:
        return $data;
        goto N5eCq;
        N5eCq:
    }
    private function aktifkan($siswa)
    {
        goto DLtP4;
        laSX7:
        $first_name = $nama[0];
        goto MNK6u;
        VduZo:
        $deleted = true;
        goto RSnpL;
        VJrRs:
        $user_siswa = $this->db->get_where("\x75\163\x65\162\x73", "\x65\x6d\x61\151\x6c\75\42" . $email . "\42")->row();
        goto VduZo;
        otJUB:
        $reg = $this->registerSiswa($username, $password, $email, $additional_data, $group);
        goto Ou2AR;
        zDBwV:
        return $data;
        goto faOle;
        hhVn_:
        if ($deleted) {
            goto aCIuy;
        }
        goto I1nDU;
        E25d2:
        z3YND:
        goto hhVn_;
        MNK6u:
        $last_name = end($nama);
        goto DHJIi;
        eDpSx:
        $deleted = $this->ion_auth->delete_user($user_siswa->id);
        goto E25d2;
        cnXsf:
        aCIuy:
        goto otJUB;
        I1nDU:
        $data = ["\163\x74\141\164\x75\163" => false, "\155\x73\x67" => "\x41\153\x75\156\40\163\151\163\x77\141\x20\x74\151\144\141\x6b\x20\164\145\x72\x73\145\144\151\x61\x20\50\x73\165\x64\141\x68\x20\144\x69\147\165\156\x61\x6b\141\156\x29\56"];
        goto dpDxt;
        DHJIi:
        $username = trim($siswa->username);
        goto i2gon;
        IOZGd:
        $email = $siswa->nis . "\x40\163\x69\163\167\x61\x2e\143\x6f\x6d";
        goto IAlNO;
        IAlNO:
        $additional_data = ["\146\x69\x72\x73\164\137\x6e\141\x6d\145" => $first_name, "\x6c\x61\163\x74\x5f\x6e\x61\x6d\145" => $last_name];
        goto DVBcG;
        dpDxt:
        goto HGZij;
        goto cnXsf;
        RSnpL:
        if (!($user_siswa != null)) {
            goto z3YND;
        }
        goto eDpSx;
        hujdK:
        HGZij:
        goto zDBwV;
        DVBcG:
        $group = array("\63");
        goto VJrRs;
        Ou2AR:
        $data = ["\163\164\x61\164\x75\163" => $reg, "\x6d\163\147" => !$reg ? "\x41\153\x75\x6e\40" . $siswa->nama . "\x20\147\141\x67\x61\154\40\x64\151\x61\153\164\x69\x66\153\141\x6e\56" : "\101\153\165\x6e\x20" . $siswa->nama . "\x20\x64\151\141\153\164\x69\146\153\141\x6e\56"];
        goto hujdK;
        i2gon:
        $password = trim($siswa->password);
        goto IOZGd;
        DLtP4:
        $nama = explode("\x20", $siswa->nama);
        goto laSX7;
        faOle:
    }
    public function activate($id)
    {
        goto f1Qfa;
        f1Qfa:
        $siswa = $this->users->getDataSiswa($id);
        goto bL1lX;
        bL1lX:
        $data = $this->aktifkan($siswa);
        goto ExefE;
        ExefE:
        $this->output_json($data);
        goto tmUpE;
        tmUpE:
    }
    public function aktifkanSemua()
    {
        goto hevPb;
        QLywu:
        $this->output_json($data);
        goto EJBiG;
        mDzzk:
        $jum = 0;
        goto ikjFh;
        hevPb:
        $siswaAktif = $this->users->getSiswaAktif();
        goto mDzzk;
        lV5l2:
        ePiqg:
        goto KWu4M;
        KWu4M:
        $data = ["\163\164\x61\x74\x75\x73" => true, "\152\165\x6d\x6c\141\x68" => $jum, "\x6d\x73\147" => $jum . "\40\x73\x69\163\x77\x61\40\x64\151\x61\153\164\151\x66\x6b\x61\156\x2e"];
        goto QLywu;
        ikjFh:
        foreach ($siswaAktif as $siswa) {
            goto k6UPd;
            vFZlv:
            ayMMk:
            goto hkRxJ;
            k6UPd:
            if (!($siswa->aktif == 0)) {
                goto ayMMk;
            }
            goto Ny6vr;
            hkRxJ:
            m0Ct5:
            goto riGjL;
            Ny6vr:
            $this->aktifkan($siswa);
            goto Z5q0z;
            Z5q0z:
            $jum += 1;
            goto vFZlv;
            riGjL:
        }
        goto lV5l2;
        EJBiG:
    }
    private function nonaktifkan($user, $nama)
    {
        goto HPRMh;
        lxx7k:
        $data = ["\163\164\x61\164\x75\x73" => false, "\x6d\163\x67" => "\x41\x6e\x64\x61\40\x62\x75\x6b\x61\156\x20\x61\x64\155\151\x6e\x2e"];
        goto IFXAZ;
        HPRMh:
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            goto r6XC0;
        }
        goto o35wj;
        gyteM:
        goto DEB2h;
        goto Xg1eX;
        VEuy1:
        $deleted = $this->ion_auth->delete_user($user->id);
        goto CIbp8;
        NuozH:
        return $data;
        goto MIY5N;
        daOHN:
        DEB2h:
        goto NuozH;
        IFXAZ:
        goto XBU5P;
        goto L1ooX;
        CIbp8:
        $data = ["\163\x74\141\x74\165\163" => $deleted, "\155\x73\147" => $deleted ? "\x53\x69\x73\167\x61\x20" . urldecode($nama) . "\x20\x64\151\x6e\x6f\x6e\x61\x6b\164\x69\x66\153\141\x6e\x2e" : "\x53\x69\163\x77\141\x20" . urldecode($nama) . "\40\147\141\x67\x61\x6c\x20\x64\x69\x6e\157\x6e\141\x6b\164\x69\146\x6b\141\x6e\x2e"];
        goto ysm2q;
        L1ooX:
        x0edM:
        goto VEuy1;
        o35wj:
        if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
            goto x0edM;
        }
        goto lxx7k;
        F00fs:
        $data = ["\163\x74\141\x74\165\x73" => false, "\155\x73\147" => "\x59\157\165\x20\155\x75\x73\164\40\x62\x65\40\141\x6e\x20\x61\x64\155\x69\156\x69\x73\164\162\x61\x74\157\162\x20\164\x6f\40\166\151\145\x77\x20\164\x68\x69\x73\40\x70\141\147\145\56"];
        goto daOHN;
        Xg1eX:
        r6XC0:
        goto F00fs;
        ysm2q:
        XBU5P:
        goto gyteM;
        MIY5N:
    }
    public function deactivate($username, $nama)
    {
        goto ptqft;
        DY65d:
        qgMUm:
        goto rgGYi;
        zZP1l:
        $data = $this->nonaktifkan($user, $nama);
        goto UFQVQ;
        dpDaK:
        $user = $this->users->getUsers($username);
        goto zZP1l;
        z0o_M:
        tLssu:
        goto EUvlp;
        rgGYi:
        $data = ["\163\x74\x61\x74\x75\163" => false, "\155\163\147" => "\131\157\x75\40\x6d\x75\163\164\40\142\x65\40\141\x6e\40\x61\x64\155\x69\156\x69\x73\164\x72\x61\164\157\162\40\x74\x6f\x20\166\151\145\167\40\x74\x68\x69\163\x20\160\x61\147\x65\x2e"];
        goto z0o_M;
        UFQVQ:
        goto tLssu;
        goto DY65d;
        ptqft:
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            goto qgMUm;
        }
        goto dpDaK;
        EUvlp:
        $this->output_json($data, true);
        goto VGLcV;
        VGLcV:
    }
    public function nonaktifkanSemua()
    {
        goto l4Tee;
        oahES:
        XsBfu:
        goto BHKsr;
        BHKsr:
        $data = ["\x73\164\x61\x74\165\163" => true, "\x6a\x75\x6d\154\x61\x68" => $jum, "\155\163\147" => $jum . "\x20\163\x69\163\167\x61\x20\144\x69\156\157\x6e\141\x6b\x74\x69\146\x6b\141\156\56"];
        goto pZp57;
        pZp57:
        $this->output_json($data);
        goto R_8NW;
        H3Fp9:
        $jum = 0;
        goto GnIqK;
        GnIqK:
        foreach ($siswaAktif as $siswa) {
            goto fxPLd;
            Hw_Fs:
            JZk2_:
            goto mAL1w;
            lgnn3:
            $this->output_json($del);
            goto HmrGq;
            kx1jp:
            if ($del["\x73\164\x61\x74\165\163"]) {
                goto bT4Hb;
            }
            goto lgnn3;
            d5IoE:
            $del = $this->nonaktifkan($siswa, $siswa->nama);
            goto kx1jp;
            HmrGq:
            goto HSVQu;
            goto VmJ6b;
            e3038:
            $jum += 1;
            goto WtmoS;
            xSqBr:
            nwkM9:
            goto Hw_Fs;
            fxPLd:
            if (!($siswa->aktif > 0)) {
                goto nwkM9;
            }
            goto d5IoE;
            VmJ6b:
            bT4Hb:
            goto e3038;
            WtmoS:
            HSVQu:
            goto xSqBr;
            mAL1w:
        }
        goto oahES;
        l4Tee:
        $siswaAktif = $this->users->getSiswaAktif();
        goto H3Fp9;
        R_8NW:
    }
    public function edit($id)
    {
        goto NB0Pk;
        F2LwI:
        $data = ["\165\x73\x65\x72" => $user, "\152\x75\144\x75\154" => "\125\x73\x65\x72\40\115\141\156\x61\x67\x65\155\x65\156\164", "\x73\x75\142\x6a\x75\x64\165\154" => "\105\x64\151\x74\40\x44\x61\164\141\40\x55\163\145\x72", "\163\x65\164\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto kjLYM;
        vSmKj:
        $smt = $this->dashboard->getSemesterActive();
        goto Ge0ZU;
        XtiD1:
        $user = $this->ion_auth->user()->row();
        goto F2LwI;
        NB0Pk:
        $tp = $this->dashboard->getTahunActive();
        goto vSmKj;
        s6j5k:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto vBdi8;
        Ge0ZU:
        $siswa = $this->master->getDataSiswaById($tp->id_tp, $smt->id_smt, $id);
        goto XtiD1;
        t3vUq:
        $data["\x70\x72\x6f\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto hFxFl;
        clDMn:
        $this->load->view("\x6d\145\155\x62\x65\x72\x73\x2f\147\x75\162\165\x2f\x74\x65\155\x70\154\141\164\x65\x73\x2f\146\157\x6f\x74\145\x72");
        goto XNI61;
        I1q11:
        $data["\x67\x75\162\x75"] = $guru;
        goto TRsob;
        kjLYM:
        $data["\x73\151\163\x77\141"] = $siswa;
        goto s6j5k;
        sFVLX:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto WiADy;
        ONHOq:
        $this->load->view("\165\x73\x65\162\163\x2f\x73\x69\x73\167\x61\x2f\x65\x64\x69\164");
        goto clDMn;
        XNI61:
        goto v8r3a;
        goto elKiJ;
        XGxYw:
        $this->load->view("\165\163\x65\162\163\x2f\163\151\x73\167\141\x2f\x65\144\151\x74");
        goto j41OG;
        TRsob:
        $this->load->view("\155\x65\x6d\x62\145\162\x73\57\147\165\162\165\57\164\145\x6d\160\x6c\141\164\x65\x73\x2f\x68\x65\x61\144\x65\162", $data);
        goto ONHOq;
        vBdi8:
        $data["\164\160\137\141\x63\164\x69\x76\x65"] = $tp;
        goto sFVLX;
        Mxa59:
        if ($this->ion_auth->is_admin()) {
            goto yvl3S;
        }
        goto Rspob;
        WiADy:
        $data["\x73\x6d\x74\x5f\141\143\164\x69\166\145"] = $smt;
        goto Mxa59;
        j41OG:
        $this->load->view("\x5f\164\145\x6d\x70\x6c\141\164\x65\x73\x2f\x64\x61\x73\x68\x62\157\141\x72\x64\57\x5f\x66\157\x6f\164\x65\162");
        goto lfrHI;
        lfrHI:
        v8r3a:
        goto SVVX8;
        elKiJ:
        yvl3S:
        goto t3vUq;
        hFxFl:
        $this->load->view("\x5f\x74\x65\x6d\160\x6c\141\164\145\163\57\x64\x61\163\x68\x62\157\x61\x72\x64\57\137\x68\145\141\x64\145\162", $data);
        goto XGxYw;
        Rspob:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto I1q11;
        SVVX8:
    }
    public function update()
    {
        goto KiXFr;
        ESE2i:
        $this->form_validation->set_rules("\165\163\145\x72\x6e\x61\x6d\145", "\x55\163\x65\162\156\141\155\x65", "\x72\145\161\x75\x69\162\x65\144\x7c\156\x75\x6d\145\162\x69\x63\x7c\164\162\x69\x6d\x7c\155\151\156\x5f\x6c\145\x6e\x67\164\x68\133\x36\135\174\x69\x73\x5f\x75\156\151\161\x75\145\x5b\x6d\x61\x73\164\x65\162\137\x73\151\163\x77\x61\x2e\165\163\145\162\x6e\x61\x6d\145\x5d");
        goto obo0P;
        KiXFr:
        $id_siswa = $this->input->post("\151\x64\137\x73\151\163\167\141", true);
        goto rQHbH;
        rQHbH:
        $username = $this->input->post("\165\163\145\162\x6e\x61\155\145", true);
        goto Deb3M;
        obo0P:
        $this->form_validation->set_rules("\x6f\154\x64", "\120\x61\x73\x73\167\157\x72\x64\x20\x4c\x61\155\x61", "\x72\x65\x71\165\151\x72\145\x64\x7c\x6e\x75\x6d\x65\x72\x69\x63\174\x74\x72\x69\x6d\x7c\155\151\x6e\x5f\154\145\x6e\x67\x74\150\133\66\x5d");
        goto PF4U_;
        AjFZ5:
        $newPass = $this->input->post("\156\x65\167", true);
        goto ESE2i;
        Deb3M:
        $oldPass = $this->input->post("\x6f\x6c\144", true);
        goto AjFZ5;
        PF4U_:
        $this->form_validation->set_rules("\156\145\167", "\120\x61\163\163\x77\157\x72\x64\x20\102\141\x72\165", "\x72\145\x71\165\151\162\145\144\174\x6e\x75\x6d\145\162\x69\x63\x7c\164\162\x69\155\x7c\155\151\156\x5f\154\145\156\x67\164\150\133\66\x5d");
        goto fd4U6;
        fd4U6:
    }
    public function change_password()
    {
        goto jgQpJ;
        yiqwg:
        goto Qog6D;
        goto wV5pN;
        eqQbK:
        $identity = $this->session->userdata("\151\x64\x65\156\164\x69\164\171");
        goto Hb6Qs;
        b4AoV:
        vklmW:
        goto PS29D;
        HPX1K:
        if ($this->form_validation->run() === FALSE) {
            goto QBNxM;
        }
        goto eqQbK;
        Djsdl:
        $data["\163\164\x61\164\165\163"] = true;
        goto KwAEk;
        s0qHT:
        QBNxM:
        goto nsdJb;
        PS29D:
        $this->output_json($data);
        goto H6RFp;
        V11Rx:
        if ($change) {
            goto JNTpI;
        }
        goto wNE21;
        wV5pN:
        JNTpI:
        goto Djsdl;
        jgQpJ:
        $this->form_validation->set_rules("\157\x6c\x64", $this->lang->line("\x63\150\x61\156\147\145\137\160\x61\163\163\x77\157\162\x64\x5f\166\141\x6c\x69\x64\141\x74\x69\x6f\156\137\157\154\x64\x5f\160\141\163\163\167\x6f\162\144\x5f\x6c\141\x62\145\x6c"), "\x72\145\161\165\x69\162\x65\x64");
        goto q9PVK;
        KwAEk:
        Qog6D:
        goto e_mGW;
        q9PVK:
        $this->form_validation->set_rules("\x6e\x65\167", $this->lang->line("\143\x68\x61\x6e\x67\x65\x5f\160\x61\163\163\x77\x6f\x72\144\x5f\x76\x61\154\151\x64\x61\x74\151\x6f\x6e\x5f\156\145\167\x5f\160\141\x73\163\167\157\x72\x64\x5f\154\x61\x62\x65\154"), "\x72\x65\161\165\x69\x72\x65\x64\x7c\155\x69\x6e\x5f\154\145\156\147\164\x68\133" . $this->config->item("\155\x69\x6e\137\x70\141\163\x73\167\x6f\x72\144\137\154\145\x6e\147\x74\x68", "\151\x6f\x6e\137\141\165\x74\x68") . "\x5d\x7c\x6d\141\164\143\x68\145\163\133\156\x65\167\x5f\x63\157\156\146\151\x72\155\x5d");
        goto IawUZ;
        IawUZ:
        $this->form_validation->set_rules("\156\145\167\137\x63\x6f\x6e\146\x69\162\155", $this->lang->line("\143\x68\x61\x6e\x67\x65\x5f\x70\x61\x73\x73\167\x6f\x72\144\137\166\x61\x6c\151\144\141\164\151\157\x6e\137\x6e\145\x77\137\160\x61\x73\163\167\157\162\x64\137\x63\157\156\146\x69\162\155\137\154\141\x62\x65\154"), "\162\145\x71\165\151\x72\145\x64");
        goto HPX1K;
        nsdJb:
        $data = ["\x73\164\141\164\x75\163" => false, "\145\162\x72\x6f\162\x73" => ["\x6f\154\x64" => form_error("\157\x6c\x64"), "\156\x65\x77" => form_error("\156\x65\167"), "\x6e\x65\167\x5f\143\x6f\x6e\x66\151\162\x6d" => form_error("\156\x65\x77\x5f\143\157\x6e\x66\x69\x72\155")]];
        goto b4AoV;
        e_mGW:
        goto vklmW;
        goto s0qHT;
        wNE21:
        $data = ["\x73\164\x61\164\x75\x73" => false, "\155\x73\147" => $this->ion_auth->errors()];
        goto yiqwg;
        Hb6Qs:
        $change = $this->ion_auth->change_password($identity, $this->input->post("\157\154\x64"), $this->input->post("\x6e\145\x77"));
        goto V11Rx;
        H6RFp:
    }
    public function delete($id)
    {
        goto RtRhY;
        rr1vC:
        $data["\163\164\x61\x74\x75\163"] = $this->ion_auth->delete_user($id) ? true : false;
        goto eAJCh;
        RtRhY:
        $this->is_has_access();
        goto rr1vC;
        eAJCh:
        $this->output_json($data);
        goto RfScs;
        RfScs:
    }
    private function hash_password($password)
    {
        goto sgOOv;
        P7Q0R:
        return FALSE;
        goto aa3Hw;
        fT1wc:
        return password_hash($password, PASSWORD_BCRYPT);
        goto JsXpR;
        aa3Hw:
        GGMZ9:
        goto fT1wc;
        sgOOv:
        if (!(empty($password) || strpos($password, "\x0") !== FALSE || strlen($password) > 4096)) {
            goto GGMZ9;
        }
        goto P7Q0R;
        JsXpR:
    }
}
