<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\101\x53\x45\x50\101\124\110") or exit("\x4e\157\x20\x64\151\162\145\143\164\40\x73\x63\162\x69\x70\x74\40\x61\x63\143\145\x73\x73\40\x61\x6c\x6c\157\167\x65\x64");
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        goto jLTAq;
        XJLJB:
        $this->load->model("\104\x72\157\x70\x64\157\x77\156\x5f\155\157\144\145\x6c", "\x64\x72\x6f\x70\144\157\167\156");
        goto jC3vD;
        az8Wy:
        $this->load->model("\104\x61\x73\x68\x62\157\x61\162\x64\137\x6d\x6f\144\145\154", "\x64\x61\x73\x68\x62\157\x61\162\144");
        goto M21CS;
        jLTAq:
        parent::__construct();
        goto vdsvt;
        iLj_p:
        $this->load->model("\x4d\x61\163\164\145\162\137\155\x6f\x64\x65\154", "\x6d\141\163\164\145\x72");
        goto az8Wy;
        IlMx_:
        SORmP:
        goto iLj_p;
        Uje2S:
        redirect("\x61\165\164\150");
        goto IlMx_;
        M21CS:
        $this->load->model("\114\157\147\137\155\157\x64\145\154", "\x6c\157\x67\x67\x69\156\147");
        goto XJLJB;
        vdsvt:
        if ($this->ion_auth->logged_in()) {
            goto SORmP;
        }
        goto Uje2S;
        jC3vD:
        $this->load->model("\103\x62\164\137\155\x6f\x64\145\154", "\x63\x62\164");
        goto UB5Ik;
        UB5Ik:
    }

    public function admin_box()
    {
        goto uSaAb;
        uSaAb:
        $setting = $this->dashboard->getSetting();
        goto h5ToN;
        h5ToN:
        $where = '';
        goto Ud11h;
        iIvKS:
        return $info_box;
        goto HOBzH;
        oEE16:
        rVd2F:
        goto qcSg_;
        CnpiL:
        goto mdy6_;
        goto JgFy1;
        qcSg_:
        $where = "\x6a\x65\x6e\152\x61\156\147\75\x32\x20\117\x52\x20\x6a\145\x6e\152\141\156\147\x3d\61";
        goto BhTqm;
        Ud11h:
        if ($setting->jenjang == "\61") {
            goto tPedE;
        }
        goto X18Gh;
        BhTqm:
        mdy6_:
        goto Tv5pi;
        Tv5pi:
        $box = [["\x62\157\170" => "\142\x6c\165\145", "\x74\157\x74\141\154" => $this->dashboard->total("\155\x61\x73\164\x65\162\137\x73\151\x73\x77\x61"), "\x74\x69\164\x6c\x65" => "\x53\151\x73\x77\141", "\165\x72\154" => "\x64\x61\164\141\163\x69\163\167\141", "\151\143\157\156" => "\165\163\x65\x72\x73"], ["\142\157\170" => "\x63\x79\x61\156", "\x74\157\x74\x61\x6c" => $this->dashboard->total("\155\x61\163\x74\145\162\x5f\x6b\x65\154\141\x73"), "\x74\x69\x74\x6c\145" => "\122\x6f\155\142\145\x6c", "\x75\162\x6c" => "\144\141\x74\x61\x6b\x65\154\141\163", "\x69\143\157\x6e" => "\x62\145\x6c\154"], ["\x62\x6f\x78" => "\x74\145\141\154", "\164\x6f\164\141\154" => $this->dashboard->total("\155\141\163\164\x65\162\x5f\147\x75\x72\x75"), "\x74\x69\164\154\145" => "\x47\165\162\x75", "\x75\162\154" => "\x64\x61\164\x61\x67\x75\x72\x75", "\151\143\x6f\x6e" => "\x75\163\x65\x72"], ["\x62\157\x78" => "\146\x75\143\x68\x73\151\x61", "\164\x6f\x74\141\154" => $this->dashboard->totalWaliKelas(), "\164\151\x74\154\x65" => "\x57\x61\154\x69\40\x4b\145\x6c\x61\163", "\165\162\x6c" => "\x64\x61\164\141\x67\x75\162\x75", "\x69\x63\157\x6e" => "\x75\x73\x65\x72"], ["\142\x6f\x78" => "\163\x75\x63\x63\145\x73\163", "\164\157\x74\x61\x6c" => $this->dashboard->total("\155\141\x73\x74\x65\162\x5f\x6d\141\160\145\x6c", $where), "\164\x69\164\154\145" => "\x4d\141\x70\145\154", "\x75\x72\x6c" => "\x64\141\x74\141\x6d\x61\160\145\154", "\x69\143\157\156" => "\x62\157\157\153"], ["\142\x6f\170" => "\x79\x65\x6c\x6c\157\x77", "\x74\x6f\164\x61\154" => $this->dashboard->total("\155\141\x73\164\x65\x72\x5f\145\x6b\x73\164\162\141"), "\164\x69\164\154\x65" => "\105\x6b\x73\164\162\141\153\x75\162\x69\153\165\154\x65\x72", "\x75\x72\x6c" => "\x64\x61\x74\x61\x65\x6b\x73\164\162\141", "\151\x63\157\156" => "\x62\x6f\x6f\x6b"]];
        goto pp0Fo;
        pp0Fo:
        $info_box = json_decode(json_encode($box), FALSE);
        goto iIvKS;
        LhcKv:
        goto mdy6_;
        goto oEE16;
        X18Gh:
        if ($setting->jenjang == "\x32") {
            goto rVd2F;
        }
        goto CnpiL;
        JgFy1:
        tPedE:
        goto bwicx;
        bwicx:
        $where = "\x6a\145\156\152\141\x6e\147\x3d\60\x20\x4f\122\40\152\145\x6e\x6a\141\156\147\x3d\x31";
        goto LhcKv;
        HOBzH:
    }
    public function guru_box()
    {
        goto zzH7d;
        U4skO:
        $where = "\152\x65\x6e\152\x61\156\147\75\60\x20\x4f\x52\x20\152\145\156\x6a\141\156\x67\x3d\61";
        goto Zb7GQ;
        zzH7d:
        $setting = $this->dashboard->getSetting();
        goto RiQuz;
        l0AuS:
        goto Vu6hl;
        goto wJT6s;
        RiQuz:
        $where = '';
        goto epUSk;
        MzKyi:
        return $info_box;
        goto YkonB;
        glWHo:
        $info_box = json_decode(json_encode($box), FALSE);
        goto MzKyi;
        lnDD2:
        $box = [["\x62\x6f\x78" => "\x74\x65\141\154", "\x74\157\x74\141\x6c" => $this->dashboard->total("\155\x61\163\x74\x65\x72\137\153\145\154\141\x73"), "\164\x69\x74\154\x65" => "\122\157\x6d\142\x65\154", "\x69\143\x6f\x6e" => "\165\x73\145\162"], ["\142\157\170" => "\142\154\165\x65", "\x74\x6f\164\141\154" => $this->dashboard->total("\x6d\141\163\164\145\162\137\163\151\163\167\141"), "\x74\x69\x74\154\x65" => "\x53\x69\163\x77\141", "\x69\x63\x6f\x6e" => "\165\x73\x65\x72\163"], ["\142\x6f\x78" => "\146\x75\143\x68\163\151\141", "\x74\157\x74\141\x6c" => $this->dashboard->total("\x6d\141\x73\164\145\162\137\x67\x75\162\x75"), "\164\x69\164\x6c\x65" => "\107\165\162\x75", "\x69\143\x6f\156" => "\x75\x73\x65\162"], ["\142\157\x78" => "\163\x75\143\143\x65\163\x73", "\164\x6f\164\141\x6c" => $this->dashboard->total("\x6d\141\163\x74\145\162\137\155\141\x70\x65\x6c", $where), "\164\151\x74\154\x65" => "\115\x61\160\x65\x6c", "\151\x63\157\x6e" => "\x62\157\157\153"]];
        goto glWHo;
        wJT6s:
        B5P8W:
        goto U4skO;
        epUSk:
        if ($setting->jenjang == "\61") {
            goto B5P8W;
        }
        goto iHe4u;
        Zb7GQ:
        goto Vu6hl;
        goto xYH02;
        iHe4u:
        if ($setting->jenjang == "\x32") {
            goto KFYA_;
        }
        goto l0AuS;
        xYH02:
        KFYA_:
        goto K10JS;
        jBgSo:
        Vu6hl:
        goto lnDD2;
        K10JS:
        $where = "\x6a\145\x6e\x6a\141\156\147\75\62\40\117\122\x20\x6a\x65\156\152\x61\x6e\x67\75\x31";
        goto jBgSo;
        YkonB:
    }
    public function ujian_box()
    {
        goto ANLzc;
        TRrMF:
        return $info_box;
        goto KaoQd;
        ANLzc:
        $box = [["\142\157\x78" => "\x69\x6e\x64\x69\x67\157", "\164\x6f\164\141\x6c" => $this->dashboard->total("\143\142\x74\137\162\x75\141\156\x67"), "\164\x69\164\x6c\145" => "\x52\165\141\x6e\x67\40\125\x6a\x69\x61\x6e", "\x75\x72\x6c" => "\143\142\164\162\x75\141\156\x67", "\x69\143\157\x6e" => "\x73\x63\x68\157\157\154"], ["\x62\157\x78" => "\155\141\162\x6f\x6f\x6e", "\164\157\x74\141\x6c" => $this->dashboard->total("\x63\142\x74\x5f\163\x65\x73\151"), "\x74\x69\164\154\145" => "\x53\145\163\x69", "\165\162\x6c" => "\143\x62\164\x73\145\x73\151", "\x69\143\x6f\156" => "\143\154\x6f\143\x6b"], ["\142\157\170" => "\x67\162\145\145\x6e", "\164\157\164\141\x6c" => $this->dashboard->total("\143\x62\x74\137\142\141\156\153\137\163\157\x61\154"), "\x74\x69\x74\154\x65" => "\102\141\x6e\153\40\123\x6f\141\x6c", "\x75\162\154" => "\x63\142\x74\x62\141\156\x6b\x73\x6f\141\x6c", "\151\143\x6f\x6e" => "\146\x6f\x6c\144\x65\162"], ["\142\x6f\170" => "\164\145\141\154", "\x74\157\x74\141\x6c" => $this->dashboard->totalJadwal(), "\164\151\164\x6c\x65" => "\112\x61\x64\x77\141\154", "\x75\x72\x6c" => "\x63\x62\x74\152\141\144\167\x61\154", "\151\x63\157\156" => "\143\154\x6f\143\153"]];
        goto ZmWb2;
        ZmWb2:
        $info_box = json_decode(json_encode($box), FALSE);
        goto TRrMF;
        KaoQd:
    }
    public function menu_siswa_box()
    {
        goto CnFtj;
        KRwjF:
        $info_box = json_decode(json_encode($box), FALSE);
        goto JxfWo;
        CnFtj:
        $box = [["\164\x69\164\154\145" => "\x4a\141\x64\x77\141\x6c\40\x50\x65\x6c\x61\x6a\x61\162\141\x6e", "\x69\143\157\156" => "\151\143\x5f\x6f\156\154\151\156\x65\x2e\x70\x6e\147", "\x6c\x69\156\x6b" => "\163\x69\163\167\x61\x2f\152\141\x64\x77\x61\x6c\x70\145\x6c\x61\152\141\162\x61\x6e"], ["\x74\x69\x74\154\x65" => "\x4d\x61\x74\145\x72\x69", "\151\x63\157\156" => "\151\x63\x5f\x65\x6c\145\141\x72\x6e\151\x6e\x67\56\160\x6e\x67", "\x6c\x69\x6e\153" => "\163\151\163\x77\x61\x2f\155\x61\164\x65\x72\151"], ["\164\151\164\x6c\x65" => "\124\165\147\x61\x73", "\x69\143\157\156" => "\151\x63\137\x71\x75\x65\163\x74\x69\x6f\156\163\56\x70\156\147", "\154\x69\x6e\153" => "\163\x69\x73\167\141\x2f\x74\165\147\141\x73"], ["\x74\x69\x74\154\x65" => "\x55\152\x69\x61\156\x20\x2f\40\x55\154\141\156\x67\141\x6e", "\x69\143\157\x6e" => "\x69\x63\137\x71\x75\145\163\x74\151\x6f\156\56\160\x6e\147", "\154\x69\156\x6b" => "\x73\x69\x73\x77\x61\x2f\143\x62\x74"], ["\164\151\164\x6c\145" => "\116\x69\154\x61\x69\40\110\141\x73\151\x6c", "\x69\x63\157\x6e" => "\151\x63\137\x65\170\141\155\56\160\x6e\x67", "\154\151\156\153" => "\163\x69\163\x77\141\x2f\150\x61\163\x69\154"], ["\164\151\x74\154\145" => "\x41\x62\163\x65\156\x73\x69", "\x69\143\x6f\156" => "\x69\143\137\x63\x6c\x69\x70\x62\x6f\141\x72\x64\56\x70\156\x67", "\x6c\151\x6e\x6b" => "\x73\151\x73\167\141\57\153\x65\x68\x61\144\x69\x72\141\x6e"], ["\x74\151\164\154\x65" => "\x43\141\164\141\164\141\156\x20\107\165\162\x75", "\x69\143\x6f\x6e" => "\151\x63\137\163\x74\x75\144\145\156\164\56\x70\156\147", "\x6c\x69\x6e\153" => "\163\151\x73\x77\x61\x2f\x63\x61\x74\141\164\x61\156"]];
        goto KRwjF;
        JxfWo:
        return $info_box;
        goto UO5FT;
        UO5FT:
    }
    public function index()
    {
        goto e1uuK;
        oo6He:
        $data["\x74\x70\137\x61\143\164\151\166\x65"] = $tp;
        goto qgC_Y;
        P9E0I:
        urK_n:
        goto M88He;
        D_ZWn:
        $data["\152\141\144\167\x61\154\163"] = $arrJadwalKelas[$siswa->id_kelas] ?? [];
        goto LV5Wk;
        AMlmt:
        lVuqs:
        goto rnmZG;
        YKbzs:
        $user = $this->ion_auth->user()->row();
        goto Ar6IX;
        NIUbv:
        $smt = $this->dashboard->getSemesterActive();
        goto GwGrC;
        aVT7i:
        $tglJadwals = $this->cbt->getAllJadwalByJenis(null, $tp->id_tp, $smt->id_smt);
        goto ljiph;
        y0BJP:
        bNUN6:
        goto Rr501;
        PVs9z:
        $data["\x69\x6e\x66\x6f\137\142\x6f\170"] = $this->admin_box();
        goto NQPe8;
        Ph1KD:
        $day = date("\x4e", strtotime(date("\x59\55\155\x2d\x64")));
        goto lh3YV;
        zJebs:
        Xlo3c:
        goto l5ClH;
        sqf8r:
        $data["\x70\145\156\x67\141\x77\x61\x73"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt, null, null);
        goto MwQIi;
        LV5Wk:
        $data["\162\165\156\x6e\151\x6e\147\x5f\x74\x65\x78\164"] = $this->dashboard->getRunningText();
        goto mOqZs;
        OVNR8:
        CGpyd:
        goto y0BJP;
        n2jXv:
        $tkn["\164\x6f\x6b\145\x6e"] = '';
        goto OFv2N;
        n3kc7:
        $this->load->view("\155\x65\x6d\142\x65\162\x73\x2f\x67\x75\162\x75\x2f\164\x65\x6d\x70\154\141\x74\x65\163\57\x68\x65\141\144\145\162", $data);
        goto z6MgT;
        e1uuK:
        $setting = $this->dashboard->getSetting();
        goto YKbzs;
        h84Dd:
        $this->load->view("\144\151\x73\141\142\154\x65\137\154\x6f\147\151\x6e", $data);
        goto OVNR8;
        Cepf6:
        goto eUHvH;
        goto szhHM;
        nfy8J:
        eUHvH:
        goto P9E0I;
        uoNPD:
        $arrKbm = [];
        goto J7oaB;
        wLU51:
        $data["\153\145\154\141\x73\145\163"] = $kelass;
        goto Ph1KD;
        wQDod:
        $data["\151\x6e\146\157\137\x62\x6f\x78"] = $this->admin_box();
        goto PQq59;
        qgC_Y:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto Ag_ck;
        PJmod:
        foreach ($jadwal as $key => $item) {
            $arrJadwalKelas[$item->id_kelas][$item->jam_ke] = $item;
            g6nPg:
        }
        goto rr21v;
        r26La:
        pND_E:
        goto PVs9z;
        EdFee:
        goto bNUN6;
        goto Qjc_J;
        NQPe8:
        $data["\x75\x6a\151\141\x6e\137\142\157\x78"] = $this->ujian_box();
        goto LsUgi;
        eWU9p:
        $kbms = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt);
        goto P_g2h;
        Jwy55:
        $data["\x6b\x62\155\x73"] = $arrKbm[$siswa->id_kelas] ?? null;
        goto D_ZWn;
        Rr501:
        goto urK_n;
        goto TB9s3;
        tIJX6:
        if ($this->ion_auth->is_admin()) {
            goto pND_E;
        }
        goto bbMqZ;
        MwQIi:
        $data["\162\165\x61\156\x67\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []);
        goto vm91n;
        hC7bZ:
        UbP0q:
        goto wLU51;
        fuEV6:
        $data["\x6a\x61\144\167\x61\154\163"] = $arrJadwalKelas;
        goto VoAY2;
        mBVok:
        if (!($tp != null)) {
            goto UbP0q;
        }
        goto EQrb9;
        GwGrC:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto oo6He;
        DBiHX:
        $kelass = [];
        goto mBVok;
        VoAY2:
        $data["\x6b\x62\155\163"] = $arrKbm;
        goto C2qRm;
        yVGpK:
        $this->load->view("\x6d\145\x6d\142\x65\x72\163\57\x73\x69\163\167\x61\x2f\164\145\155\160\154\141\164\x65\x73\x2f\146\157\157\x74\145\162");
        goto Cepf6;
        lh3YV:
        $jadwal = $this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, null, $day);
        goto eWU9p;
        NnuTy:
        goto bNUN6;
        goto r26La;
        vm91n:
        $data["\x67\x75\x72\x75\163"] = $this->dropdown->getAllGuru();
        goto tIJX6;
        xHHdZ:
        $data["\141\x64\x61\x5f\x75\x6a\151\141\x6e"] = $this->cbt->getDataJadwalByTgl(date("\x59\55\x6d\x2d\144"));
        goto fuEV6;
        rgHgz:
        if ($siswa == null) {
            goto OiLU0;
        }
        goto JLJ9c;
        JLJ9c:
        $data["\163\x69\163\167\141"] = $siswa;
        goto E_vYA;
        wWFKe:
        $this->load->view("\x64\141\163\150\142\157\x61\x72\144");
        goto IJiZ0;
        E3Zbz:
        $data["\164\157\x6b\x65\156"] = $token != null ? $token : json_decode(json_encode($tkn));
        goto xHHdZ;
        FVVr4:
        $this->load->view("\144\x69\x73\x61\x62\154\x65\x5f\x6c\x6f\x67\151\x6e", $data);
        goto nfy8J;
        rr21v:
        XZGtM:
        goto uoNPD;
        F2XV8:
        $token = $this->cbt->getToken();
        goto n2jXv;
        J7oaB:
        foreach ($kbms as $key => $item) {
            $arrKbm[$item->id_kelas] = $item;
            uhjWd:
        }
        goto AMlmt;
        Qjc_J:
        euIDU:
        goto fe2bI;
        E_vYA:
        $data["\155\x65\156\165"] = $this->menu_siswa_box();
        goto Jwy55;
        sSLBI:
        $siswa = $this->dashboard->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto rgHgz;
        skNlN:
        $data["\147\x75\162\x75"] = $guru;
        goto n3kc7;
        aXmQA:
        $this->load->view("\137\164\x65\x6d\160\154\x61\164\145\x73\x2f\144\x61\x73\150\142\157\x61\162\x64\x2f\137\x68\x65\141\144\x65\x72", $data);
        goto wWFKe;
        OFv2N:
        $tkn["\141\x75\164\x6f"] = "\x30";
        goto YqpfQ;
        l5ClH:
        $data["\152\x61\x64\167\x61\x6c\163\137\165\x6a\x69\x61\x6e"] = $tglJadwals;
        goto sqf8r;
        jEm0C:
        $arrJadwalKelas = [];
        goto PJmod;
        PMfSI:
        if ($guru == null) {
            goto ChjBF;
        }
        goto wQDod;
        ljiph:
        foreach ($tglJadwals as $tgl => $jadwalss) {
            goto K9CHD;
            FMo71:
            G_tIb:
            goto L5zo_;
            L5zo_:
            kwMfc:
            goto Ma0R3;
            K9CHD:
            foreach ($jadwalss as $mpl => $jadwals) {
                goto vKA8y;
                xsr1D:
                xAxtM:
                goto faRtS;
                vKA8y:
                foreach ($jadwals as $jadwal) {
                    goto oisXc;
                    j00Yy:
                    foreach ($jadwal->bank_kelas as $kb) {
                        goto PzpU5;
                        cRJZx:
                        AdJlv:
                        goto fYUEr;
                        pqtUP:
                        $jadwal->peserta[] = $p;
                        goto TXFPd;
                        n_Ozk:
                        $p = $this->cbt->getKelasUjian($kb["\153\x65\x6c\141\163\137\151\144"]);
                        goto pqtUP;
                        TXFPd:
                        iJoDu:
                        goto cRJZx;
                        PzpU5:
                        if (!($kb["\x6b\145\x6c\141\163\137\151\x64"] != '')) {
                            goto iJoDu;
                        }
                        goto n_Ozk;
                        fYUEr:
                    }
                    goto w06f6;
                    T_Weg:
                    X1i0D:
                    goto dEOoa;
                    oisXc:
                    $jadwal->bank_kelas = unserialize($jadwal->bank_kelas);
                    goto j00Yy;
                    w06f6:
                    uj3Pb:
                    goto T_Weg;
                    dEOoa:
                }
                goto PsjS5;
                PsjS5:
                jUh_F:
                goto xsr1D;
                faRtS:
            }
            goto FMo71;
            Ma0R3:
        }
        goto zJebs;
        P_g2h:
        foreach ($kbms as $kbm) {
            $kbm->istirahat = unserialize($kbm->istirahat);
            Bgux4:
        }
        goto IxgFp;
        rnmZG:
        if ($this->ion_auth->in_group("\163\151\163\167\141")) {
            goto vR3Md;
        }
        goto F2XV8;
        C2qRm:
        $data["\155\x61\x70\x65\154\x73"] = $this->master->getAllMapel();
        goto aVT7i;
        mOqZs:
        $this->load->view("\155\x65\155\142\145\162\163\57\x73\x69\163\x77\x61\x2f\x74\145\x6d\x70\x6c\141\164\x65\x73\57\150\x65\x61\x64\x65\x72", $data);
        goto cxriS;
        adwnz:
        ChjBF:
        goto h84Dd;
        sOjjL:
        goto CGpyd;
        goto adwnz;
        IxgFp:
        BZ6HI:
        goto jEm0C;
        EQrb9:
        $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto hC7bZ;
        cxriS:
        $this->load->view("\x6d\145\155\x62\x65\162\163\x2f\163\x69\163\167\x61\x2f\x64\x61\163\150\x62\x6f\141\x72\144");
        goto yVGpK;
        kmZFm:
        $tkn["\145\x6c\141\160\163\x65\x64"] = "\60\x30\x3a\60\x30\x3a\x30\60";
        goto E3Zbz;
        vqi75:
        $this->load->view("\x6d\145\155\142\x65\162\163\57\147\x75\162\165\x2f\164\x65\155\160\x6c\141\x74\145\163\x2f\146\157\157\x74\145\x72");
        goto sOjjL;
        TB9s3:
        vR3Md:
        goto sSLBI;
        IJiZ0:
        $this->load->view("\137\x74\x65\155\160\x6c\141\x74\145\163\x2f\144\141\163\x68\x62\157\x61\162\x64\x2f\x5f\x66\x6f\x6f\x74\x65\x72");
        goto EdFee;
        fe2bI:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto PMfSI;
        LsUgi:
        $data["\160\x72\157\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto aXmQA;
        Ar6IX:
        $data = ["\165\163\145\x72" => $user, "\152\165\144\x75\154" => "\x42\145\x72\x61\156\x64\x61", "\x73\165\142\x6a\165\144\x75\x6c" => "\x48\x61\154\x61\155\141\156\x20\125\x74\x61\x6d\x61", "\x73\x65\x74\x74\151\x6e\147" => $setting];
        goto Es3w2;
        Es3w2:
        $tp = $this->dashboard->getTahunActive();
        goto NIUbv;
        bbMqZ:
        if ($this->ion_auth->in_group("\x67\165\x72\x75")) {
            goto euIDU;
        }
        goto NnuTy;
        PQq59:
        $data["\165\152\x69\x61\156\x5f\142\157\x78"] = $this->ujian_box();
        goto skNlN;
        YqpfQ:
        $tkn["\152\141\x72\141\x6b"] = "\x31";
        goto kmZFm;
        szhHM:
        OiLU0:
        goto FVVr4;
        z6MgT:
        $this->load->view("\155\145\x6d\x62\145\162\163\57\x67\165\x72\x75\57\x64\x61\x73\x68\142\x6f\141\x72\144");
        goto vqi75;
        Ag_ck:
        $data["\163\x6d\x74\x5f\141\x63\164\151\x76\145"] = $smt;
        goto DBiHX;
        M88He:
    }
    public function checkTokenJadwal()
    {
        goto RNmld;
        JLc1g:
        $this->output_json($data);
        goto dRLXO;
        ebT1h:
        $token->now = date("\144\55\155\55\x59\x20\110\72\151\x3a\x73");
        goto B0wuv;
        RNmld:
        $data["\x61\144\x61\x5f\x75\x6a\151\x61\156"] = $this->cbt->getDataJadwalByTgl(date("\131\55\x6d\x2d\144"));
        goto Yyze7;
        B0wuv:
        $data["\164\x6f\x6b\145\156"] = $token;
        goto JLc1g;
        Yyze7:
        $token = $this->cbt->getToken();
        goto ebT1h;
        dRLXO:
    }
    public function output_json($data, $encode = true)
    {
        goto yoQuv;
        wVeVD:
        FFESP:
        goto TPfjX;
        yoQuv:
        if (!$encode) {
            goto FFESP;
        }
        goto IkKYT;
        TPfjX:
        $this->output->set_content_type("\141\160\x70\x6c\x69\x63\141\x74\151\157\156\57\x6a\x73\x6f\156")->set_output($data);
        goto Mtxlg;
        IkKYT:
        $data = json_encode($data);
        goto wVeVD;
        Mtxlg:
    }
    public function gantiTahun()
    {
        goto fQclb;
        r1BEm:
        qRohO:
        goto caflh;
        jAIZv:
        if ($id_tp === $aktif) {
            goto mxnWN;
        }
        goto kmbAM;
        CkYqb:
        $data["\x75\x70\x64\141\164\x65"] = $update;
        goto cX6qa;
        rOHpC:
        $i++;
        goto NnXQ8;
        odWWk:
        $this->logging->saveLog(4, "\155\145\x6e\147\147\141\156\164\151\40\164\x61\150\165\156\x20\x61\x6a\x61\x72\141\x6e\x20\x61\x6b\x74\x69\146");
        goto rwWV3;
        kmbAM:
        $active = 0;
        goto rMAh7;
        g_NhT:
        $id_tp = $this->input->post("\x69\x64\137\x74\x70\133" . $i . "\135", true);
        goto KBMOw;
        YMb5I:
        $rows = count($this->input->post("\164\141\x68\165\156", true));
        goto SUj3D;
        NzEA_:
        dNBrI:
        goto rOHpC;
        rMAh7:
        goto qRohO;
        goto B6qV7;
        cX6qa:
        $data["\163\164\x61\x74\165\163"] = true;
        goto odWWk;
        SUj3D:
        $i = 0;
        goto SxuDe;
        caflh:
        $update[] = array("\x69\x64\x5f\164\160" => $id_tp, "\x74\141\x68\x75\156" => $tahun, "\141\x63\x74\151\x76\145" => $active);
        goto NzEA_;
        WFqZW:
        $active = 1;
        goto r1BEm;
        xprcN:
        fBlYO:
        goto e0O12;
        rwWV3:
        $this->output_json($data);
        goto LlOHB;
        SxuDe:
        PjMUG:
        goto MUxF0;
        NnXQ8:
        goto PjMUG;
        goto xprcN;
        fQclb:
        $aktif = $this->input->post("\141\143\x74\x69\x76\145", true);
        goto YMb5I;
        MUxF0:
        if (!($i <= $rows)) {
            goto fBlYO;
        }
        goto g_NhT;
        KBMOw:
        $tahun = $this->input->post("\x74\141\x68\x75\156\x5b" . $i . "\135", true);
        goto jAIZv;
        B6qV7:
        mxnWN:
        goto WFqZW;
        e0O12:
        $this->dashboard->update("\155\x61\x73\164\145\162\x5f\164\160", $update, "\x69\144\x5f\x74\160", null, true);
        goto CkYqb;
        LlOHB:
    }
    public function gantiSemester()
    {
        goto wE8Lo;
        tzmt5:
        FkCgn:
        goto dhWBB;
        gQxuF:
        if ($id_smt === $aktif) {
            goto C2_NU;
        }
        goto MX1na;
        RdhSI:
        $this->logging->saveLog(4, "\x6d\x65\156\x67\147\x61\156\164\x69\x20\163\145\155\x65\163\x74\x65\x72\x20\x61\x6b\164\x69\146");
        goto jn7Ek;
        FA0Df:
        NpjWq:
        goto PFBos;
        o_vuv:
        $rows = count($this->input->post("\x73\x6d\164", true));
        goto y7mx2;
        MX1na:
        $active = 0;
        goto iXdTH;
        y7mx2:
        $i = 1;
        goto tzmt5;
        ltF0p:
        C2_NU:
        goto ypxOE;
        qD6Ld:
        $this->dashboard->update("\155\x61\x73\164\145\162\x5f\x73\x6d\164", $update, "\151\144\x5f\x73\x6d\x74", null, true);
        goto OkqxX;
        tw9sR:
        pN3JL:
        goto qD6Ld;
        OTvbw:
        $data["\x73\164\141\164\x75\x73"] = true;
        goto RdhSI;
        M5tzc:
        $smt = $this->input->post("\163\155\x74\x5b" . $i . "\x5d", true);
        goto gQxuF;
        ADZYB:
        RRiSH:
        goto o0pnn;
        wE8Lo:
        $aktif = $this->input->post("\141\143\x74\x69\x76\145", true);
        goto o_vuv;
        hN8H1:
        goto FkCgn;
        goto tw9sR;
        ypxOE:
        $active = 1;
        goto ADZYB;
        OkqxX:
        $data["\165\160\144\x61\x74\145"] = $update;
        goto OTvbw;
        dhWBB:
        if (!($i <= $rows)) {
            goto pN3JL;
        }
        goto qbFkQ;
        o0pnn:
        $update[] = array("\x69\144\137\x73\x6d\x74" => $id_smt, "\163\x6d\164" => $smt, "\x61\143\x74\151\166\x65" => $active);
        goto FA0Df;
        jn7Ek:
        $this->output_json($data);
        goto Pkovq;
        PFBos:
        $i++;
        goto hN8H1;
        qbFkQ:
        $id_smt = $this->input->post("\x69\144\x5f\163\155\164\133" . $i . "\x5d", true);
        goto M5tzc;
        iXdTH:
        goto RRiSH;
        goto ltF0p;
        Pkovq:
    }
    public function getNotifikasi()
    {
    }
    public function getLog($limit)
    {
        $this->output_json($this->logging->loadAktifitas($limit));
    }
    public function hapusLog()
    {
        goto pXA3M;
        pXA3M:
        $this->db->trans_start();
        goto ASutT;
        g1vx4:
        hYzyC:
        goto ip2DG;
        I9tIx:
        gxIGR:
        goto m2K25;
        dRPxp:
        $this->output_json($deleted);
        goto wGzEb;
        jKtNT:
        goto hYzyC;
        goto I9tIx;
        m2K25:
        $deleted = ["\x73\164\x61\x74\x75\x73" => true, "\x6d\145\163\x73\141\x67\145" => "\x62\x65\x72\x68\141\163\151\154"];
        goto g1vx4;
        vFeX_:
        $deleted = ["\x73\164\x61\164\x75\x73" => false, "\155\x65\x73\163\141\147\145" => "\147\141\x67\141\x6c"];
        goto jKtNT;
        ip2DG:
        $this->db->trans_complete();
        goto dRPxp;
        ASutT:
        if ($this->db->empty_table("\x6c\157\x67")) {
            goto gxIGR;
        }
        goto vFeX_;
        wGzEb:
    }
    public function getLogSiswa($limit)
    {
        $this->output_json($this->logging->loadAktifitasSiswa($limit));
    }
    public function getPengumuman($for)
    {
        $this->output_json($this->dashboard->loadPengumuman($for));
    }
    public function getJadwalHariIni($id_kelas, $id_hari)
    {
        goto PqL61;
        ePm0i:
        $this->output_json($this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, $id_kelas, $id_hari));
        goto Ab8Sm;
        PqL61:
        $tp = $this->dashboard->getTahunActive();
        goto dfDsZ;
        dfDsZ:
        $smt = $this->dashboard->getSemesterActive();
        goto ePm0i;
        Ab8Sm:
    }
    public function getJadwalKbm($id_kelas)
    {
        goto quMzk;
        quMzk:
        $tp = $this->dashboard->getTahunActive();
        goto C48qz;
        C48qz:
        $smt = $this->dashboard->getSemesterActive();
        goto rD6Rt;
        HmSg_:
        $istirahat = unserialize($jadwal->istirahat);
        goto mV0iE;
        rD6Rt:
        $jadwal = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt, $id_kelas);
        goto HmSg_;
        mV0iE:
        $this->output_json(array("\x6a\x61\x64\x77\x61\x6c" => $jadwal, "\x69\163\164\x69\x72\141\150\141\164" => $istirahat));
        goto GY4Ag;
        GY4Ag:
    }
}
