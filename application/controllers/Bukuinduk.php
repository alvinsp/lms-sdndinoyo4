<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Bukuinduk extends CI_Controller
{
    public function __construct()
    {
        goto SDiQs;
        PV5Jg:
        $this->load->library(["\144\x61\x74\141\164\141\x62\x6c\x65\163", "\x66\157\x72\x6d\137\166\141\154\151\x64\x61\164\x69\x6f\156"]);
        goto JdWhY;
        XUbXJ:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) {
            goto dogdA;
        }
        goto wvn7L;
        SDiQs:
        parent::__construct();
        goto sacYg;
        JdWhY:
        $this->load->model("\104\141\163\x68\x62\x6f\141\162\x64\x5f\x6d\x6f\x64\145\154", "\144\x61\x73\150\142\157\141\x72\144");
        goto Vm4dG;
        D7s5B:
        $this->load->model("\x44\x72\157\x70\144\x6f\167\156\x5f\x6d\x6f\144\145\154", "\144\x72\157\160\x64\x6f\x77\156");
        goto aLX85;
        wvn7L:
        show_error("\110\141\156\x79\141\40\x41\144\155\x69\156\151\163\x74\162\x61\x74\x6f\x72\x20\171\141\x6e\147\40\x64\151\x62\145\162\151\40\x68\141\153\40\x75\x6e\164\165\153\x20\155\145\156\x67\x61\153\x73\145\x73\x20\150\x61\154\x61\x6d\141\x6e\40\151\x6e\x69\54\x20\74\141\x20\x68\x72\145\146\75\x22" . base_url("\x64\141\x73\x68\x62\x6f\x61\x72\144") . "\42\x3e\113\145\x6d\142\141\x6c\x69\40\x6b\x65\x20\x6d\x65\156\x75\x20\141\167\141\x6c\74\57\x61\x3e", 403, "\101\x6b\x73\145\x73\40\x54\x65\162\154\141\x72\141\x6e\x67");
        goto VCfO6;
        aLX85:
        $this->load->model("\115\141\x73\164\x65\162\137\x6d\157\x64\x65\154", "\155\x61\163\164\x65\162");
        goto E2mj5;
        QJ4Bz:
        q2C8c:
        goto KH8j2;
        Vm4dG:
        $this->load->model("\122\141\x70\157\x72\x5f\155\157\x64\145\154", "\x72\x61\x70\157\x72");
        goto yrc_o;
        KH8j2:
        redirect("\x61\165\x74\x68");
        goto Nd7rk;
        VCfO6:
        dogdA:
        goto tW3PH;
        E2mj5:
        $this->form_validation->set_error_delimiters('', '');
        goto MGk97;
        sacYg:
        if (!$this->ion_auth->logged_in()) {
            goto q2C8c;
        }
        goto XUbXJ;
        yrc_o:
        $this->load->model("\113\145\154\x61\163\137\x6d\157\x64\x65\154", "\x6b\145\x6c\x61\163");
        goto D7s5B;
        tW3PH:
        goto SDFs1;
        goto QJ4Bz;
        Nd7rk:
        SDFs1:
        goto PV5Jg;
        MGk97:
    }
    public function output_json($data, $encode = true)
    {
        goto Y8KPH;
        p6ta8:
        $this->output->set_content_type("\141\160\160\x6c\151\143\x61\164\151\157\156\x2f\152\x73\157\156")->set_output($data);
        goto RVdiQ;
        Y8KPH:
        if (!$encode) {
            goto ws3m0;
        }
        goto yshkU;
        yshkU:
        $data = json_encode($data);
        goto Ah5d7;
        Ah5d7:
        ws3m0:
        goto p6ta8;
        RVdiQ:
    }
    function generateTahunMasuk($tp, $level)
    {
        goto sBjWj;
        mj9Zz:
        return $thn;
        goto TM_9s;
        OLmpe:
        if ($level == 7) {
            goto RMI22;
        }
        goto epYqN;
        Fc0T6:
        $thn = $tahun;
        goto FPU1r;
        sBjWj:
        $tahun = explode("\x2f", $tp)[0];
        goto W_LA2;
        YYqiE:
        if ($level == 9) {
            goto tXqDZ;
        }
        goto fk5Rm;
        jjocU:
        tXqDZ:
        goto sXNpb;
        sXNpb:
        $thn = $tahun - 2;
        goto poaKS;
        mwvFn:
        RMI22:
        goto Fc0T6;
        epYqN:
        goto LOBK8;
        goto jjocU;
        FPU1r:
        LOBK8:
        goto mj9Zz;
        erVNz:
        KQR9d:
        goto jCaJN;
        W_LA2:
        $thn = $tahun;
        goto YYqiE;
        jCaJN:
        $thn = $tahun - 1;
        goto Vd01O;
        poaKS:
        goto LOBK8;
        goto erVNz;
        Vd01O:
        goto LOBK8;
        goto mwvFn;
        fk5Rm:
        if ($level == 8) {
            goto KQR9d;
        }
        goto OLmpe;
        TM_9s:
    }
    public function index()
    {
        goto tdBTJ;
        RCeDk:
        $count_induk = $this->db->count_all("\x62\165\153\165\x5f\x69\156\x64\165\153");
        goto kDTTt;
        UB9LN:
        foreach ($uids as $uid) {
            goto P_bby;
            Y754F:
            BOklt:
            goto liuKi;
            C8ngJ:
            if (!($check->get()->num_rows() == 0)) {
                goto BOklt;
            }
            goto bmu6p;
            liuKi:
            n_bie:
            goto W9TKX;
            P_bby:
            $check = $this->db->select("\151\144\x5f\163\151\x73\x77\141")->from("\x62\165\x6b\165\x5f\151\x6e\144\165\x6b")->where("\x69\144\137\163\151\x73\x77\141", $uid->id_siswa);
            goto C8ngJ;
            bmu6p:
            $this->db->insert("\142\165\x6b\165\137\x69\156\x64\165\153", $uid);
            goto Y754F;
            W9TKX:
        }
        goto s6Tlb;
        Ig1Ge:
        $thn_siswa = [];
        goto wV3Eq;
        mMT3y:
        $data_siswa = [];
        goto Ig1Ge;
        HAwwW:
        $uids = $this->db->select("\151\144\x5f\x73\151\163\167\x61\54\x20\x75\151\144")->from("\155\141\163\164\x65\162\x5f\163\151\x73\x77\x61")->get()->result();
        goto UB9LN;
        lqJYx:
        SIi5V:
        goto hVSWo;
        uV3G3:
        $arrSmt = $this->dashboard->getSemester();
        goto NOISY;
        VSw2U:
        $data["\163\155\164"] = $arrSmt;
        goto I4gFf;
        hVSWo:
        $siswas = $this->master->getDataInduk();
        goto g07kO;
        zSagA:
        $fisik_siswa = $this->rapor->getAllRaporFisik();
        goto mMT3y;
        bqp5f:
        aEnDv:
        goto Ayi2q;
        I4gFf:
        $data["\x73\x6d\164\137\x61\143\164\x69\166\x65"] = $smt;
        goto UN8dy;
        yqzcY:
        $data = ["\165\163\145\x72" => $user, "\x6a\165\x64\165\154" => "\x42\165\153\165\x20\111\x6e\x64\x75\x6b", "\163\165\x62\x6a\165\144\x75\x6c" => "\x42\165\153\x75\x20\111\156\x64\x75\x6b", "\163\145\164\164\x69\156\147" => $setting];
        goto RD9hZ;
        z_QOA:
        $data["\x64\x65\164\x61\x69\x6c"] = $data_siswa;
        goto k4hoa;
        g07kO:
        $deskFisik = $this->rapor->getAllDeskripsiFisikKelas();
        goto zSagA;
        N8fc4:
        $this->load->view("\137\164\x65\155\160\x6c\141\x74\145\163\x2f\x64\141\x73\x68\142\x6f\x61\162\x64\x2f\x5f\x66\157\x6f\164\x65\x72");
        goto Ax_Mx;
        kDTTt:
        if (!($count_siswa > $count_induk)) {
            goto SIi5V;
        }
        goto HAwwW;
        k4hoa:
        $data["\x61\162\162\137\x74\x65\x73\x74"] = $thn_siswa;
        goto HC9uw;
        Ayi2q:
        $data["\162\141\160\x6f\162\137\x66\x69\163\151\153"] = $rapor_fisik;
        goto aO0Iz;
        wEimf:
        $this->load->view("\163\x65\164\164\x69\156\147\57\x69\156\x64\x75\153");
        goto N8fc4;
        uXjnz:
        $data["\164\x70"] = $arrTp;
        goto D1gx_;
        NOISY:
        $tp = $this->dashboard->getTahunActive();
        goto iwJuX;
        XcQjP:
        $data["\x6a\165\155\x6c\x61\150\x5f\154\x75\x6c\165\163"] = $this->rapor->getJumlahLulus($tp->id_tp - 1, "\x32", $level);
        goto L63Qs;
        L63Qs:
        $this->load->view("\137\x74\x65\x6d\x70\x6c\141\164\145\x73\x2f\144\x61\163\x68\x62\157\141\162\144\x2f\137\150\145\141\144\145\162", $data);
        goto wEimf;
        aO0Iz:
        $data["\156\157\x69\x6e\x64\x75\x6b"] = $noinduk;
        goto O_h8u;
        yUd_B:
        $count_siswa = $this->db->count_all("\x6d\141\x73\164\145\x72\x5f\163\x69\163\x77\x61");
        goto RCeDk;
        tdBTJ:
        $user = $this->ion_auth->user()->row();
        goto mSlYQ;
        wV3Eq:
        foreach ($siswas as $id_siswa => $siswa) {
            goto lsJXa;
            gb4nW:
            $data_tahun = [intval($tahunMasuk) . "\x2f" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\x2f" . (intval($tahunMasuk) + 3)];
            goto MSV55;
            oiwmY:
            EX2JZ:
            goto Vr2Sf;
            rGeBP:
            y_7bd:
            goto QK3tq;
            MSV55:
            goto dMOlW;
            goto rGeBP;
            s4vKq:
            $tahunMasuk = '';
            goto FQfae;
            oeb6F:
            $penyakit = [];
            goto dLYKy;
            FQfae:
            goto EX2JZ;
            goto KYJ20;
            FEab6:
            dMOlW:
            goto deZZp;
            Vr2Sf:
            if ($setting->jenjang == "\61") {
                goto y_7bd;
            }
            goto gb4nW;
            P4056:
            X1rP9:
            goto CSaip;
            PPjLC:
            $noinduk[$siswa->id_siswa] = ["\x6e\151\x73" => $siswa->nis, "\x6e\151\x73\x6e" => $siswa->nisn];
            goto jSA0q;
            lcDR0:
            if ($siswa->tahun_masuk != null) {
                goto Ttkbn;
            }
            goto s4vKq;
            QK3tq:
            $data_tahun = [intval($tahunMasuk) . "\x2f" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\x2f" . (intval($tahunMasuk) + 3), intval($tahunMasuk) + 3 . "\57" . (intval($tahunMasuk) + 4), intval($tahunMasuk) + 4 . "\57" . (intval($tahunMasuk) + 5), intval($tahunMasuk) + 5 . "\57" . (intval($tahunMasuk) + 6)];
            goto FEab6;
            KYJ20:
            Ttkbn:
            goto G0gLm;
            bBhhe:
            xbHWS:
            goto lcDR0;
            mLSuD:
            $tinggi = [];
            goto oeb6F;
            dLYKy:
            $kelainan = [];
            goto vegCI;
            deZZp:
            $berat = [];
            goto mLSuD;
            lsJXa:
            $rapor_fisik = isset($fisik_siswa[$id_siswa]) ? $fisik_siswa[$id_siswa] : [];
            goto sx2HN;
            vegCI:
            foreach ($data_tahun as $dtp) {
                goto JnePF;
                DOjiF:
                $penyakit[$dtp][2] = '';
                goto h_rqs;
                h_rqs:
                $kelainan[$dtp][1] = '';
                goto XQ3Yo;
                yEHsm:
                $tinggi[$dtp][2] = '';
                goto kcFwO;
                h6KoX:
                YyiwU:
                goto yfs3i;
                vtsgi:
                We2Yn:
                goto l4WfE;
                kcFwO:
                $penyakit[$dtp][1] = '';
                goto DOjiF;
                II5Kt:
                $tinggi[$dtp][1] = '';
                goto yEHsm;
                yfs3i:
                nK8Ve:
                goto vtsgi;
                JnePF:
                $berat[$dtp][1] = '';
                goto xz5Ld;
                zSM0D:
                if (!isset($rapor_fisik[$dtp])) {
                    goto nK8Ve;
                }
                goto CPVxa;
                CPVxa:
                foreach ($rapor_fisik[$dtp]->fisik as $rf) {
                    goto mQFWv;
                    mQFWv:
                    $berat[$dtp][$rf->id_smt] = $rf->berat;
                    goto vFcPI;
                    vFcPI:
                    $tinggi[$dtp][$rf->id_smt] = $rf->tinggi;
                    goto BgTFz;
                    BgTFz:
                    Oeah8:
                    goto bdk4X;
                    bdk4X:
                }
                goto h6KoX;
                XQ3Yo:
                $kelainan[$dtp][2] = '';
                goto zSM0D;
                xz5Ld:
                $berat[$dtp][2] = '';
                goto II5Kt;
                l4WfE:
            }
            goto tt9VZ;
            jSA0q:
            $data_siswa[$siswa->id_siswa] = ["\x6e\x69\163" => $siswa->nis, "\156\151\x73\x6e" => $siswa->nisn, "\160\141\x67\x65\x31" => ["\x41" => ["\164\151\164\x6c\145" => "\113\105\124\105\x52\x41\116\107\x41\116\x20\x54\x45\x4e\124\x41\116\x47\40\x44\111\x52\111\40\x53\x49\x53\x57\101", "\x76\x61\154\x75\145" => ["\x4e\x61\155\141\x20\123\x69\163\167\x61" => ["\x4e\141\155\141\x20\114\x65\156\x67\x6b\x61\160" => $siswa->nama, "\116\x61\155\141\x20\x50\x61\x6e\147\x67\151\x6c\141\x6e" => ''], "\x4a\x65\x6e\151\x73\40\113\145\x6c\141\x6d\x69\156" => $siswa->jenis_kelamin, "\x54\x65\155\x70\x61\x74\40\x64\141\x6e\40\x54\147\x6c\x20\x4c\141\150\151\x72" => $siswa->tempat_lahir, "\x41\147\x61\x6d\x61" => $siswa->agama, "\113\x65\x77\141\162\147\141\156\145\147\x61\x72\141\x61\x6e" => $siswa->warga_negara, "\x41\156\141\x6b\x20\153\x65" => $siswa->anak_ke, "\x4a\165\x6d\x6c\x61\x68\40\123\x64\162\x2e\40\113\141\x6e\144\165\x6e\147" => '', "\x4a\x75\x6d\x6c\x61\150\x20\x53\144\162\56\x20\124\x69\x72\151" => '', "\112\x75\155\154\141\150\40\x53\144\162\x2e\40\101\156\147\153\x61\164" => '', "\x41\x6e\x61\153\x20\131\x61\x74\151\x6d\57\x59\x61\164\x69\x6d\x20\120\x69\x61\x74\165" => '', "\x42\x61\x68\x61\163\x61\x20\x53\145\x68\141\162\x69\55\150\x61\x72\x69" => '']], "\102" => ["\x74\151\164\x6c\145" => "\113\x45\124\x45\122\101\116\x47\101\116\x20\x54\x45\115\x50\101\124\40\x54\111\116\x47\107\101\x4c", "\x76\x61\x6c\x75\145" => ["\x41\154\x61\x6d\x61\164" => $siswa->alamat, "\x4e\x6f\155\x6f\x72\40\124\x65\x6c\x65\160\157\156" => $siswa->hp, "\x54\151\156\147\147\x61\154\x20\x42\145\x72\163\x61\x6d\x61" => '', "\112\141\162\141\153\40\x6b\145\x20\123\x65\x6b\x6f\154\x61\x68" => '']], "\103" => ["\164\151\x74\x6c\145" => "\113\x45\124\105\x52\101\116\x47\x41\116\x20\x4b\x45\x53\105\110\x41\124\101\x4e", "\166\x61\x6c\x75\x65" => ["\107\157\154\157\156\147\x61\x6e\40\104\141\x72\141\x68" => '', "\x4b\x65\141\144\x61\141\156\x20\x4a\141\x73\x6d\141\156\x69" => "\133\x74\141\x62\154\145\135"], "\164\x61\x62\x6c\145" => ["\x74\141\x68\165\156" => $data_tahun, "\x62\145\x72\x61\x74" => $berat, "\x74\x69\x6e\x67\x67\x69" => $tinggi, "\160\145\x6e\171\141\x6b\x69\x74" => $penyakit, "\153\x65\154\x61\x69\156\141\156" => $kelainan]], "\x44" => ["\164\151\164\x6c\x65" => "\x4b\105\x54\105\x52\x41\116\x47\101\x4e\x20\x50\x45\x4e\104\111\104\111\113\101\x4e", "\x76\x61\154\x75\145" => ["\120\x65\156\144\151\x64\x69\x6b\141\156\x20\x53\x65\x62\x65\154\x75\x6d\x6e\x79\x61" => ["\x4c\x75\154\165\163\x61\156\40\104\141\x72\x69" => $siswa->sekolah_asal, "\116\x6f\x6d\x6f\162\40\x49\x6a\141\172\141\x68" => ''], "\x50\151\x6e\x64\x61\x68\x61\x6e" => ["\x44\x61\x72\151\40\123\x65\x6b\157\154\x61\150" => '', "\101\154\141\x73\141\156" => ''], "\104\x69\164\145\162\151\x6d\141\40\104\151\163\x65\x6b\x6f\x6c\141\150\x20\111\x6e\151" => ["\x44\151\x20\x54\151\x6e\x67\x6b\141\164" => $siswa->kelas_awal, "\x4b\x65\x6c\157\155\160\157\x6b" => '', "\112\165\x72\165\163\x61\x6e" => '', "\124\141\156\x67\x67\141\x6c" => $siswa->tahun_masuk]]]], "\160\141\147\145\62" => ["\105" => ["\164\151\164\x6c\x65" => "\x4b\x45\x54\x45\x52\101\116\107\101\116\x20\x54\105\116\124\101\x4e\107\40\x41\x59\101\x48\40\113\101\116\104\x55\116\107", "\166\141\x6c\165\x65" => ["\116\141\x6d\x61" => $siswa->nama_ayah, "\x54\x65\x6d\160\141\x74\40\144\141\156\40\x54\141\156\147\x67\141\x6c\40\x4c\x61\x68\x69\x72" => $siswa->tgl_lahir_ayah, "\101\x67\141\x6d\141" => '', "\113\x65\167\x61\x72\x67\x61\x6e\x65\x67\141\x72\x61\141\x6e" => '', "\x50\145\156\144\x69\x64\x69\x6b\x61\x6e" => $siswa->pendidikan_ayah, "\x50\145\x6b\x65\162\152\141\x61\156" => $siswa->pekerjaan_ayah, "\x50\x65\x6e\147\150\141\x73\151\154\x61\156\40\x70\145\x72\x20\x42\x75\154\x61\156" => '', "\101\154\141\155\141\164\40\x2f\40\116\157\x6d\157\162\40\x54\145\x6c\x65\x70\x6f\156" => $siswa->nohp_ayah, "\x4b\145\x62\x65\162\141\x64\x61\x61\x6e\x20\x41\171\x61\150" => "\x4d\x61\163\x69\x68\40\110\151\x64\165\160\x20\57\40\x4d\x65\x6e\151\156\x67\x67\141\154\40\x44\x75\x6e\x69\x61\40\x54\x61\150\165\156\72\40\56\56\56\56\56\x2e\56\x2e"]], "\106" => ["\x74\x69\x74\x6c\x65" => "\x4b\105\x54\x45\122\101\116\107\x41\x4e\40\124\105\x4e\124\101\x4e\x47\x20\111\x42\125\40\113\101\x4e\104\x55\x4e\107", "\166\141\x6c\x75\145" => ["\116\141\x6d\x61" => $siswa->nama_ayah, "\x54\145\155\x70\141\164\x20\x64\x61\156\x20\x54\141\x6e\x67\147\x61\x6c\40\x4c\x61\150\151\162" => $siswa->tgl_lahir_ayah, "\x41\147\x61\x6d\x61" => '', "\113\145\x77\141\162\147\x61\x6e\x65\x67\141\162\141\x61\156" => '', "\120\x65\156\x64\x69\x64\151\153\141\x6e" => $siswa->pendidikan_ayah, "\x50\145\153\145\x72\152\x61\x61\x6e" => $siswa->pekerjaan_ayah, "\x50\x65\156\147\150\x61\x73\x69\154\x61\156\40\x70\x65\162\x20\102\165\x6c\141\156" => '', "\101\x6c\141\x6d\141\x74\40\57\40\116\157\x6d\x6f\x72\x20\x54\x65\154\145\x70\x6f\x6e" => $siswa->nohp_ayah, "\x4b\x65\142\145\162\x61\144\x61\x61\x6e\40\x49\x62\165" => "\115\141\x73\x69\150\40\110\151\144\165\160\x20\57\40\115\x65\x6e\151\156\147\x67\x61\x6c\40\x44\165\156\151\141\40\x54\x61\x68\x75\156"]], "\107" => ["\164\x69\164\x6c\x65" => "\x4b\105\x54\105\x52\x41\116\x47\x41\116\x20\124\105\116\124\x41\x4e\x47\40\x57\101\x4c\111", "\x76\141\x6c\165\x65" => ["\116\141\x6d\141" => $siswa->nama_ayah, "\x54\x65\155\x70\141\164\x20\x64\141\156\x20\124\141\x6e\x67\147\x61\154\x20\x4c\141\150\x69\162" => $siswa->tgl_lahir_ayah, "\x41\x67\141\155\x61" => '', "\113\145\x77\x61\162\147\x61\156\x65\x67\x61\x72\x61\141\x6e" => '', "\120\145\156\144\151\144\x69\153\x61\156" => $siswa->pendidikan_ayah, "\x50\145\x6b\145\x72\x6a\x61\141\156" => $siswa->pekerjaan_ayah, "\120\x65\x6e\x67\150\141\163\x69\154\141\x6e\x20\160\145\x72\x20\x42\165\x6c\x61\156" => '', "\x41\x6c\141\x6d\x61\x74\40\x2f\x20\x4e\x6f\x6d\157\162\40\124\145\154\x65\x70\x6f\156" => $siswa->nohp_ayah]], "\x48" => ["\x74\151\x74\154\145" => "\113\x45\107\105\115\x41\x52\101\x4e\40\x53\111\x53\127\101", "\166\141\154\x75\x65" => ["\x4b\145\x73\145\x6e\151\141\x6e" => '', "\117\x6c\x61\150\x20\x52\141\147\x61" => '', "\x4f\x72\x67\x61\156\x69\163\141\163\151" => '', "\114\141\x69\156\342\x80\x93\154\141\x69\x6e" => '']]], "\160\141\147\x65\x33" => ["\111" => ["\164\x69\x74\154\145" => "\x4b\x45\124\105\122\x41\116\107\101\x4e\40\x50\x45\122\x4b\105\x4d\102\101\116\x47\101\x4e\40\123\x49\123\127\101", "\166\x61\x6c\165\x65" => ["\115\x65\156\x65\162\151\155\141\40\x42\145\141\40\x53\x69\x73\x77\141" => "\x5b\164\141\x68\165\x6e\x5d", "\115\145\156\151\156\x67\147\141\154\x6b\x61\156\x20\x53\x65\x6b\157\x6c\x61\x68" => ["\124\x61\x6e\x67\x67\x61\x6c" => '', "\x41\x6c\x61\x73\141\x6e" => ''], "\101\153\x68\x69\x72\x20\120\x65\156\x64\151\x64\151\153\x61\x6e" => ["\x54\x61\155\141\164\40\x42\145\x6c\x61\152\x61\162" => $siswa->tahun_lulus, "\x4e\157\155\x6f\x72\40\x49\152\x61\x7a\141\150" => $siswa->no_ijazah]], "\164\141\150\165\x6e" => ["\124\141\x68\165\x6e\x20\56\56\56\56\x2e\x2e\56\56\56\x2e\x2e\56\x2f\40\124\113\40\xe2\200\xa6\xe2\200\xa6\342\x80\246\xe2\200\246\xe2\x80\246\xe2\x80\xa6\xe2\200\xa6\342\x80\246\56\x2e\x64\141\x72\151\xe2\x80\246\xe2\200\xa6\342\200\246\xe2\x80\246\342\x80\xa6\xe2\x80\xa6\342\200\246\342\x80\xa6\56\56", "\x54\x61\x68\x75\x6e\40\x2e\x2e\x2e\x2e\56\x2e\56\x2e\56\x2e\56\x2e\57\x20\x54\113\x20\342\200\xa6\342\200\246\xe2\x80\xa6\xe2\x80\xa6\342\x80\xa6\xe2\200\xa6\342\200\246\xe2\200\xa6\x2e\56\x64\x61\x72\x69\xe2\200\xa6\342\x80\xa6\342\200\246\342\x80\246\xe2\200\xa6\xe2\200\xa6\342\200\xa6\xe2\200\246\56\56", "\x54\141\150\x75\x6e\40\x2e\56\56\x2e\56\56\x2e\x2e\x2e\x2e\x2e\56\57\x20\124\113\x20\342\200\xa6\342\x80\xa6\xe2\x80\xa6\xe2\200\xa6\342\x80\xa6\xe2\x80\246\342\x80\xa6\xe2\200\xa6\x2e\x2e\144\141\162\151\342\x80\246\342\x80\246\xe2\200\xa6\342\200\xa6\342\x80\246\xe2\x80\246\342\x80\246\xe2\200\246\x2e\x2e"]], "\112" => ["\164\x69\x74\154\x65" => "\x4b\105\x54\105\x52\101\116\x47\x41\116\x20\x53\x45\124\x45\114\x41\110\x20\x53\x45\114\x45\123\x41\x49\x20\120\105\x4e\x44\111\x44\111\113\x41\x4e", "\x76\x61\154\x75\145" => ["\115\145\154\141\x6e\152\x75\x74\153\141\x6e\40\x64\151" => '', "\102\x65\x6b\x65\x72\x6a\x61" => ["\124\x61\x6e\x67\147\141\x6c\40\115\165\x6c\x61\151\40\102\x65\153\x65\x72\x6a\141" => '', "\x4e\141\x6d\141\40\124\145\x6d\x70\x61\x74\x20\x42\x65\x6b\x65\x72\152\141" => '', "\120\x65\x6e\147\x68\141\163\151\x6c\x61\x6e" => '']]], "\x4b" => ["\x74\151\x74\x6c\x65" => "\114\x41\x49\116\40\342\200\x93\x20\x4c\x41\x49\116", "\166\141\154\x75\145" => ["\x43\x61\x74\x61\x74\x61\156\x20\x59\x61\x6e\x67\40\x50\x65\x6e\164\x69\x6e\147" => '']]]];
            goto P4056;
            tt9VZ:
            kUyla:
            goto PPjLC;
            G0gLm:
            $tahunMasuk = explode("\x2d", $siswa->tahun_masuk)[0];
            goto oiwmY;
            sx2HN:
            foreach ($rapor_fisik as $rf) {
                goto LPQhB;
                LPQhB:
                $rf->fisik = unserialize($rf->fisik);
                goto ZF5wA;
                sX5ew:
                XqSg5:
                goto aDUNq;
                ZF5wA:
                foreach ($rf->fisik as $value) {
                    $value->kondisi = unserialize($value->kondisi);
                    oTWal:
                }
                goto sX5ew;
                aDUNq:
                o_evx:
                goto SREoX;
                SREoX:
            }
            goto bBhhe;
            CSaip:
        }
        goto bqp5f;
        iwJuX:
        $smt = $this->dashboard->getSemesterActive();
        goto uXjnz;
        mSlYQ:
        $setting = $this->dashboard->getSetting();
        goto yqzcY;
        UN8dy:
        $data["\160\x72\x6f\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto yUd_B;
        HC9uw:
        $level = $setting->jenjang == "\x31" ? "\x36" : ($setting->jenjang == "\62" ? "\x39" : ($setting->jenjang == "\x31" ? "\x33" : "\x31\62"));
        goto XcQjP;
        RD9hZ:
        $arrTp = $this->dashboard->getTahun();
        goto uV3G3;
        D1gx_:
        $data["\164\160\x5f\x61\x63\164\151\166\x65"] = $tp;
        goto VSw2U;
        O_h8u:
        $data["\x73\151\163\167\141\163"] = $siswas;
        goto z_QOA;
        s6Tlb:
        gJQbE:
        goto lqJYx;
        Ax_Mx:
    }
}
