<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\123\105\120\x41\x54\x48") or exit("\x4e\157\x20\144\151\x72\145\x63\164\x20\163\143\162\151\160\164\x20\141\143\x63\x65\x73\x73\40\141\x6c\154\157\x77\x65\x64");
class Dataalumni extends CI_Controller
{
    public function __construct()
    {
        goto szpTf;
        ux014:
        goto cCnRq;
        goto lhciN;
        PvOih:
        $this->load->model("\104\x61\163\150\x62\157\141\x72\x64\x5f\155\157\x64\x65\154", "\144\141\163\x68\x62\x6f\141\162\144");
        goto P1fkq;
        mNxgo:
        cCnRq:
        goto gwNIM;
        ILiv4:
        $this->load->library(["\x64\141\x74\141\x74\141\142\154\x65\x73", "\146\157\x72\x6d\137\166\x61\154\x69\x64\x61\x74\x69\x6f\156"]);
        goto raSzu;
        PRoeo:
        if ($this->ion_auth->is_admin()) {
            goto FCAGj;
        }
        goto KhNrO;
        ig5WO:
        $this->load->model("\x44\162\157\160\144\157\x77\x6e\x5f\155\x6f\144\x65\154", "\x64\162\x6f\x70\x64\x6f\167\x6e");
        goto RX6hW;
        RX6hW:
        $this->load->model("\x52\141\160\x6f\x72\x5f\155\157\x64\x65\x6c", "\x72\141\160\x6f\x72");
        goto JDHpH;
        WBqHA:
        redirect("\141\165\164\150");
        goto mNxgo;
        lhciN:
        d_E_0:
        goto WBqHA;
        KhNrO:
        show_error("\x48\141\156\x79\x61\x20\101\x64\x6d\151\156\151\x73\164\x72\141\x74\157\162\x20\x79\x61\156\x67\40\x64\151\142\x65\162\151\40\150\x61\153\40\x75\x6e\164\x75\x6b\40\x6d\145\156\x67\x61\153\x73\145\163\40\150\x61\154\141\x6d\141\x6e\x20\151\156\x69\54\40\74\x61\40\150\x72\x65\x66\75\x22" . base_url("\x64\141\x73\150\x62\157\141\162\x64") . "\42\x3e\113\145\155\x62\141\x6c\x69\40\153\145\x20\155\x65\x6e\x75\x20\141\x77\x61\x6c\x3c\x2f\x61\76", 403, "\x41\153\163\145\x73\x20\124\x65\162\154\x61\162\x61\156\x67");
        goto hP_eE;
        szpTf:
        parent::__construct();
        goto hb4JZ;
        raSzu:
        $this->load->model("\113\145\x6c\141\163\x5f\155\x6f\x64\145\154", "\x6b\145\154\x61\x73");
        goto PvOih;
        JDHpH:
        $this->form_validation->set_error_delimiters('', '');
        goto qfXpc;
        P1fkq:
        $this->load->model("\115\141\x73\164\x65\x72\137\155\x6f\x64\145\154", "\x6d\141\163\x74\145\162");
        goto ig5WO;
        gwNIM:
        $this->load->library("\x75\x70\154\157\x61\x64");
        goto ILiv4;
        hb4JZ:
        if (!$this->ion_auth->logged_in()) {
            goto d_E_0;
        }
        goto PRoeo;
        hP_eE:
        FCAGj:
        goto ux014;
        qfXpc:
    }
    public function output_json($data, $encode = true)
    {
        goto H5zeZ;
        Urd4e:
        VtWmD:
        goto pbDrY;
        QfTjj:
        $data = json_encode($data);
        goto Urd4e;
        pbDrY:
        $this->output->set_content_type("\x61\160\x70\x6c\151\x63\141\164\151\157\x6e\x2f\152\163\157\x6e")->set_output($data);
        goto r0OBl;
        H5zeZ:
        if (!$encode) {
            goto VtWmD;
        }
        goto QfTjj;
        r0OBl:
    }
    public function index()
    {
        goto rnEnF;
        qde8c:
        $data["\160\162\x6f\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto Ivs3L;
        Mcb3A:
        $data = ["\165\x73\145\x72" => $user, "\x6a\x75\144\x75\154" => "\x44\141\x74\141\x20\x4b\145\x6c\x75\x6c\165\163\x61\156\40\x26\x20\x41\x6c\165\155\156\x69", "\163\165\142\152\x75\x64\165\x6c" => "\104\141\x74\x61\40\101\154\165\155\x6e\x69", "\163\145\164\x74\x69\x6e\147" => $setting];
        goto B4AC7;
        EsX8q:
        $data["\153\145\154\x61\163\x5f\163\x65\x6c\x65\x63\x74\x65\x64"] = $kelas_akhir;
        goto aXdA0;
        ro9i6:
        $idSearch = array_search($tp->id_tp - 1, array_column($allTp, "\x69\x64\137\x74\x70"));
        goto ngw0H;
        UYMb5:
        zTP0f:
        goto HNiGr;
        B4AC7:
        $tp = $this->dashboard->getTahunActive();
        goto g0NyI;
        efApP:
        rYrJA:
        goto x30VI;
        Ivs3L:
        $data["\x74\x61\150\165\156\x5f\154\165\154\165\163"] = $this->master->getDistinctTahunLulus();
        goto TPuP2;
        RwtdS:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto gHtEf;
        L2yjA:
        $this->load->view("\155\x61\x73\164\145\162\x2f\x61\x6c\165\x6d\156\x69\x2f\x64\x61\164\141");
        goto M3zc5;
        brCPl:
        $kelas_akhir = $this->input->get("\x6b\x65\x6c\141\163", true);
        goto HnDhZ;
        RcDhO:
        $data["\164\141\150\x75\x6e\x5f\163\x65\154\145\143\164\145\144"] = $tahun;
        goto EsX8q;
        ciWaM:
        $setting = $this->dashboard->getSetting();
        goto Mcb3A;
        J1nz1:
        if (!($count_siswa > $count_induk)) {
            goto nknIN;
        }
        goto oAspe;
        HNiGr:
        $data["\152\165\x6d\154\x61\150\137\154\x75\154\x75\x73"] = $jumlah_lulus;
        goto WpYiO;
        eMvbr:
        $count_siswa = $this->db->count_all("\155\x61\x73\x74\x65\162\137\163\151\x73\x77\141");
        goto s9JR9;
        rnEnF:
        $tahun = $this->input->get("\x74\x61\x68\x75\x6e", true);
        goto brCPl;
        tL262:
        $data["\152\165\155\x6c\x61\150\x5f\154\165\154\x75\163"] = 0;
        goto KstYa;
        syQQV:
        if ($jumlah_lulus > count($alumnis)) {
            goto zTP0f;
        }
        goto tL262;
        KstYa:
        goto TgF8L;
        goto UYMb5;
        n5IVe:
        $allTp = $this->dashboard->getTahun();
        goto W3GbA;
        ngw0H:
        $tpBefore = $allTp[$idSearch]->tahun;
        goto JeZkU;
        hGeYO:
        vp3tN:
        goto eMvbr;
        aFcme:
        goto EaVlL;
        goto efApP;
        VP1N3:
        $jumlah_lulus = $this->rapor->getJumlahLulus($tp->id_tp - 1, "\62", $level);
        goto ro9i6;
        mvX13:
        goto EaVlL;
        goto hGeYO;
        x30VI:
        $data["\141\x6c\165\x6d\156\x69\163"] = $this->master->getAlumniByTahun($tahun, $kelas_akhir);
        goto wO2ez;
        HnDhZ:
        $user = $this->ion_auth->user()->row();
        goto ciWaM;
        TPuP2:
        $data["\x6b\145\154\141\x73\x5f\x61\153\x68\x69\x72"] = $this->master->getDistinctKelasAkhir();
        goto RcDhO;
        JeZkU:
        $splitTahun = explode("\x2f", $tpBefore);
        goto U3lrR;
        zhlXp:
        nknIN:
        goto aFcme;
        g0NyI:
        $smt = $this->dashboard->getSemesterActive();
        goto n5IVe;
        XP2eW:
        $data["\164\x70\137\x61\x63\x74\151\x76\145"] = $tp;
        goto RwtdS;
        hDnfd:
        if ($tahun != null && $tahun != '') {
            goto rYrJA;
        }
        goto mvX13;
        iRraR:
        foreach ($uids as $uid) {
            goto R3CFu;
            R3CFu:
            $check = $this->db->select("\151\144\137\x73\151\x73\x77\141")->from("\x62\165\153\x75\137\x69\x6e\x64\x75\x6b")->where("\x69\x64\x5f\163\151\163\167\141", $uid->id_siswa);
            goto sY8iH;
            sY8iH:
            if (!($check->get()->num_rows() == 0)) {
                goto Q9djD;
            }
            goto HZRYv;
            HZRYv:
            $this->db->insert("\x62\x75\x6b\x75\x5f\151\x6e\144\x75\153", $uid);
            goto oaQv9;
            cZtVI:
            uceNo:
            goto XKsqN;
            oaQv9:
            Q9djD:
            goto cZtVI;
            XKsqN:
        }
        goto lMFOx;
        s9JR9:
        $count_induk = $this->db->count_all("\x62\x75\x6b\x75\x5f\151\x6e\144\165\x6b");
        goto J1nz1;
        aXdA0:
        $level = $setting->jenjang == "\61" ? "\x36" : ($setting->jenjang == "\62" ? "\71" : ($setting->jenjang == "\x31" ? "\x33" : "\x31\62"));
        goto VP1N3;
        WpYiO:
        TgF8L:
        goto m1Pav;
        oAspe:
        $uids = $this->db->select("\151\144\137\x73\x69\163\x77\x61\54\40\x75\x69\144")->from("\x6d\x61\163\x74\145\x72\137\x73\x69\x73\167\x61")->get()->result();
        goto iRraR;
        M3zc5:
        $this->load->view("\x5f\x74\x65\155\x70\x6c\141\x74\x65\x73\x2f\x64\x61\x73\150\142\x6f\141\x72\144\57\137\146\157\x6f\164\x65\x72");
        goto UZnWr;
        wO2ez:
        EaVlL:
        goto AQoD8;
        AQoD8:
        $this->load->view("\137\x74\145\155\x70\154\x61\x74\x65\x73\x2f\x64\141\x73\150\x62\157\141\162\x64\x2f\x5f\x68\145\141\x64\x65\x72", $data);
        goto L2yjA;
        gHtEf:
        $data["\163\155\x74\x5f\x61\x63\x74\x69\166\x65"] = $smt;
        goto qde8c;
        lMFOx:
        KsvNY:
        goto zhlXp;
        W3GbA:
        $data["\164\160"] = $allTp;
        goto XP2eW;
        m1Pav:
        if ($tahun == null) {
            goto vp3tN;
        }
        goto hDnfd;
        U3lrR:
        $alumnis = $this->master->getAlumniByTahun($splitTahun[1]);
        goto syQQV;
        UZnWr:
    }
    public function generateAlumni()
    {
        goto otwKq;
        SF0NB:
        $this->db->trans_start();
        goto jfFmj;
        Mlr9o:
        $this->db->trans_complete();
        goto bFc3W;
        RVe3z:
        $splitTahun = explode("\57", $tpBefore);
        goto PqF_0;
        PqF_0:
        $level = $setting->jenjang == "\61" ? "\66" : ($setting->jenjang == "\x32" ? "\x39" : ($setting->jenjang == "\x31" ? "\x33" : "\61\x32"));
        goto ksdkE;
        ksdkE:
        $siswas = $this->rapor->getSiswaLulus($tp->id_tp - 1, "\62", $level);
        goto Koosv;
        aZx02:
        $idBefore = $allTp[$searchId - 1]->id_tp;
        goto kzY8h;
        otwKq:
        $setting = $this->dashboard->getSetting();
        goto cRtGq;
        EJ9dE:
        $allTp = $this->dashboard->getTahun();
        goto wIa5A;
        qxFff:
        rkEAt:
        goto Mlr9o;
        Koosv:
        $ids = [];
        goto SF0NB;
        kzY8h:
        $tpBefore = $allTp[$searchId - 1]->tahun;
        goto RVe3z;
        jfFmj:
        foreach ($siswas as $siswa) {
            goto VNKzM;
            cEIDk:
            goto gCGVE;
            goto FWnHX;
            WN1nj:
            $this->db->update("\x62\x75\153\x75\137\x69\156\x64\165\x6b");
            goto cEIDk;
            FWnHX:
            xzU61:
            goto kfYVI;
            C7QXb:
            $this->db->set("\x6b\x65\154\141\x73\137\x61\153\x68\x69\x72", $siswa->kelas_akhir);
            goto WN1nj;
            VNKzM:
            if ($siswa->naik != null && $siswa->naik == "\60") {
                goto xzU61;
            }
            goto znnhw;
            FJAcF:
            $this->db->set("\164\141\150\165\156\x5f\x6c\165\x6c\165\x73", $splitTahun[1]);
            goto cUS9E;
            znnhw:
            $ids[] = $siswa->id_siswa;
            goto daVXt;
            PLzN5:
            XgPzD:
            goto nQ5Ur;
            daVXt:
            $this->db->where("\151\x64\137\x73\151\x73\167\x61", $siswa->id_siswa);
            goto QtCqP;
            kfYVI:
            gCGVE:
            goto PLzN5;
            cUS9E:
            $this->db->set("\x6e\x6f\137\x69\152\141\172\141\150", "\55\40\55");
            goto C7QXb;
            QtCqP:
            $this->db->set("\x73\x74\141\164\x75\163", "\x32");
            goto FJAcF;
            nQ5Ur:
        }
        goto qxFff;
        bFc3W:
        $this->output_json($ids);
        goto SP_z5;
        wIa5A:
        $searchId = array_search("\61", array_column($allTp, "\x61\143\164\151\x76\x65"));
        goto aZx02;
        cRtGq:
        $tp = $this->dashboard->getTahunActive();
        goto O3lrq;
        O3lrq:
        $smt = $this->dashboard->getSemesterActive();
        goto EJ9dE;
        SP_z5:
    }
    public function luluskan()
    {
        goto dKqpM;
        dKqpM:
        $tp = $this->dashboard->getTahunActive();
        goto cspxp;
        Njd_M:
        $idkelases = array_unique($idkelases);
        goto wlnDJ;
        zAsDv:
        $mode = $this->input->post("\x6d\157\144\145", true);
        goto of902;
        bHdTF:
        Fi7rL:
        goto Njd_M;
        xZrVO:
        $posts = json_decode($this->input->post("\153\145\x6c\x61\x73", true));
        goto zAsDv;
        BRCpD:
        $data["\x72\145\x73"] = $alumnikelas;
        goto kISDp;
        L0n6a:
        foreach ($idkelases as $ik) {
            goto n8NKt;
            dVGJA:
            foreach ($idks as $idk) {
                goto L7C63;
                L7C63:
                foreach ($alumnikelas[$ik] as $s) {
                    goto cSeyC;
                    EhTZz:
                    $res[] = $this->db->replace("\153\145\154\141\x73\x5f\141\154\165\155\x6e\151", $insert);
                    goto D8sMw;
                    D8sMw:
                    DqQXO:
                    goto tZP6k;
                    cSeyC:
                    $insert = ["\151\x64\137\x6b\145\x6c\x61\x73\137\141\154\165\x6d\156\151" => $tp->id_tp . $smt->id_smt . $s["\x69\x64"], "\x69\144\x5f\x74\x70" => $tp->id_tp, "\x69\x64\x5f\x73\x6d\164" => $smt->id_smt, "\x69\144\x5f\x6b\x65\154\141\163" => $idk, "\x69\144\137\x73\x69\x73\x77\x61" => $s["\151\144"]];
                    goto EhTZz;
                    tZP6k:
                }
                goto iYHft;
                IOZe4:
                KRu61:
                goto b9doP;
                iYHft:
                fskcL:
                goto IOZe4;
                b9doP:
            }
            goto Ovf1C;
            rYrs1:
            $data = array("\156\141\x6d\x61\137\153\145\154\x61\163" => $kelas->nama_kelas, "\x6b\x6f\144\145\x5f\x6b\x65\154\141\x73" => $kelas->kode_kelas, "\x6a\165\x72\x75\x73\141\156\x5f\x69\144" => $kelas->jurusan_id, "\151\144\137\x74\x70" => $tp->id_tp, "\151\x64\137\x73\x6d\164" => $smt->id_smt, "\154\145\x76\x65\x6c\x5f\x69\x64" => $kelas->level_id, "\147\165\x72\165\137\151\x64" => $kelas->guru_id, "\141\x6c\165\155\x6e\151\137\x69\x64" => $kelas->alumni_id, "\152\165\155\x6c\141\150\x5f\x61\154\x75\155\x6e\x69" => $jumlah);
            goto YmiMm;
            XlRi0:
            if ($mode == "\160\x65\x72\x61\154\x75\x6d\x6e\151") {
                goto sTSZI;
            }
            goto BdYLf;
            sh9vl:
            $this->db->update("\155\x61\163\x74\x65\x72\x5f\153\x65\154\x61\163", $data);
            goto GpO9b;
            oTtsk:
            if ($kelas_baru == null) {
                goto Rt8G5;
            }
            goto XlRi0;
            MO2UM:
            $this->db->where("\151\x64\x5f\x6b\x65\154\141\163", $kelas_baru->id_kelas);
            goto sh9vl;
            B3klk:
            array_push($idks, $this->db->insert_id());
            goto qBxsm;
            ddK4x:
            Rt8G5:
            goto D7GJj;
            swgwH:
            $jmlLama = unserialize($kelas_baru->jumlah_alumni);
            goto nVIyR;
            BdYLf:
            $jumlah = serialize($alumnikelas[$ik]);
            goto iVbtV;
            I9_1g:
            $jumlah = serialize($jmlLama);
            goto rzX6l;
            Kx4Wb:
            sTSZI:
            goto swgwH;
            WXJWK:
            goto BrCEo;
            goto Kx4Wb;
            iVbtV:
            array_push($idks, $kelas_baru->id_kelas);
            goto WXJWK;
            jnqjy:
            x5QTv:
            goto I9_1g;
            D7GJj:
            $jumlah = serialize($alumnikelas[$ik]);
            goto rYrs1;
            rzX6l:
            BrCEo:
            goto iHL4W;
            iHL4W:
            $data = array("\156\x61\x6d\x61\x5f\153\x65\x6c\x61\x73" => $kelas->nama_kelas, "\x6b\157\x64\145\137\x6b\145\x6c\x61\x73" => $kelas->kode_kelas, "\152\x75\x72\165\163\x61\x6e\x5f\x69\x64" => $kelas->jurusan_id, "\x69\x64\x5f\164\160" => $tp->id_tp, "\x69\144\x5f\163\155\164" => $smt->id_smt, "\x6c\145\166\x65\x6c\137\x69\144" => $kelas->level_id, "\147\165\162\165\137\151\x64" => $kelas->guru_id, "\141\154\x75\155\x6e\151\x5f\151\x64" => $kelas->alumni_id, "\152\165\155\154\x61\x68\x5f\141\x6c\165\x6d\x6e\151" => $jumlah);
            goto MO2UM;
            dRTDO:
            $kelas_baru = $this->kelas->getKelasByNama($kelas->nama_kelas, $tp->id_tp, $smt->id_smt);
            goto oTtsk;
            Ovf1C:
            sdQvG:
            goto OS2gi;
            GpO9b:
            goto lyhRK;
            goto ddK4x;
            qBxsm:
            lyhRK:
            goto dVGJA;
            YmiMm:
            $this->db->insert("\x6d\x61\163\x74\145\x72\x5f\153\x65\x6c\141\x73", $data);
            goto B3klk;
            nVIyR:
            foreach ($alumnikelas[$ik] as $s) {
                goto mT6mQ;
                QZrCE:
                OApEd:
                goto jzVBQ;
                mT6mQ:
                foreach ($jmlLama as $lama) {
                    goto zH76I;
                    j4HXb:
                    QU5rN:
                    goto tStWC;
                    AhIR3:
                    array_push($idks, $kelas_baru->id_kelas);
                    goto j4HXb;
                    GX5zO:
                    array_push($jmlLama, ["\x69\144" => $s["\x69\x64"]]);
                    goto AhIR3;
                    tStWC:
                    DwIJN:
                    goto wpkSS;
                    zH76I:
                    if (!($lama["\151\x64"] != $s["\x69\144"])) {
                        goto QU5rN;
                    }
                    goto GX5zO;
                    wpkSS:
                }
                goto QZrCE;
                jzVBQ:
                Zik3K:
                goto M0mNE;
                M0mNE:
            }
            goto jnqjy;
            OS2gi:
            tNUOv:
            goto W4lhj;
            n8NKt:
            $kelas = $this->kelas->get_one($ik, $tp->id_tp - 1, "\62");
            goto dRTDO;
            W4lhj:
        }
        goto HUuPp;
        HUuPp:
        MI9Kk:
        goto BRCpD;
        kISDp:
        $this->output_json($data);
        goto PiPVF;
        cspxp:
        $smt = $this->dashboard->getSemesterActive();
        goto xZrVO;
        of902:
        $idkelases = [];
        goto TNrZq;
        TNrZq:
        $alumnikelas = [];
        goto L3PTR;
        wlnDJ:
        $res = [];
        goto T4QsO;
        T4QsO:
        $idks = [];
        goto L0n6a;
        L3PTR:
        foreach ($posts as $d) {
            goto PLlcT;
            PLlcT:
            $idkelases[] = $d->kelas_baru;
            goto GGocG;
            D2rCm:
            izV8O:
            goto oTiW5;
            GGocG:
            $alumnikelas[$d->kelas_baru][] = ["\151\144" => $d->id_siswa];
            goto D2rCm;
            oTiW5:
        }
        goto bHdTF;
        PiPVF:
    }
    public function detail($id)
    {
        goto kShpl;
        T9T0G:
        $inputOrtu = [["\156\141\155\145" => "\x6e\x61\155\141\x5f\141\171\141\x68", "\x6c\141\x62\x65\154" => "\x4e\x61\155\141\x20\x41\171\x61\150", "\x76\x61\x6c\165\x65" => $alumni->nama_ayah, "\151\x63\157\156" => "\146\x61\162\40\146\x61\55\x75\163\145\162", "\x74\x79\160\x65" => "\164\x65\x78\164"], ["\x6e\141\155\145" => "\160\x65\156\x64\x69\144\151\153\141\x6e\x5f\x61\171\x61\150", "\x6c\x61\x62\x65\154" => "\x50\145\156\144\x69\144\151\153\x61\156\40\101\x79\141\150", "\166\x61\x6c\165\145" => $alumni->pendidikan_ayah, "\151\143\157\156" => "\146\x61\162\x20\146\141\55\165\x73\x65\x72", "\x74\x79\x70\x65" => "\x74\x65\170\x74"], ["\x6e\x61\x6d\145" => "\x70\145\x6b\x65\162\152\x61\x61\x6e\137\141\x79\141\150", "\154\x61\x62\145\x6c" => "\x50\145\153\145\162\x6a\x61\x61\x6e\x20\101\171\x61\x68", "\x76\x61\154\165\145" => $alumni->pekerjaan_ayah, "\x69\x63\157\156" => "\x66\x61\x72\x20\146\141\x2d\165\163\145\x72", "\x74\x79\x70\x65" => "\x74\145\170\164"], ["\156\141\155\145" => "\x6e\157\x68\160\x5f\141\x79\141\150", "\x6c\x61\142\x65\154" => "\x4e\157\56\40\110\120\40\101\171\x61\x68", "\x76\x61\x6c\x75\x65" => $alumni->nohp_ayah, "\151\143\157\x6e" => "\146\141\162\x20\x66\141\x2d\x75\x73\x65\162", "\x74\x79\160\145" => "\x6e\x75\x6d\x62\145\x72"], ["\156\141\x6d\x65" => "\141\154\141\155\141\164\137\x61\171\141\x68", "\x6c\x61\x62\145\x6c" => "\x41\x6c\x61\155\141\x74\40\x41\171\141\x68", "\x76\141\x6c\x75\145" => $alumni->alamat_ayah, "\151\143\x6f\156" => "\x66\x61\162\40\x66\x61\x2d\165\x73\145\x72", "\x74\x79\x70\145" => "\x74\145\x78\x74"], ["\156\141\155\x65" => "\156\x61\x6d\141\x5f\x69\142\x75", "\x6c\x61\x62\145\x6c" => "\116\x61\155\141\x20\x49\142\x75", "\x76\x61\x6c\165\x65" => $alumni->nama_ibu, "\151\143\157\156" => "\146\x61\x72\x20\146\x61\x2d\165\x73\145\x72", "\164\x79\x70\x65" => "\x74\145\x78\164"], ["\x6e\x61\155\x65" => "\x70\145\156\144\151\x64\151\153\141\x6e\137\151\x62\165", "\154\141\142\145\154" => "\x50\x65\x6e\144\x69\x64\151\153\x61\x6e\40\111\142\165", "\x76\141\154\165\x65" => $alumni->pendidikan_ibu, "\151\x63\157\156" => "\x66\x61\162\x20\146\141\x2d\165\163\x65\162", "\x74\x79\160\145" => "\164\145\170\x74"], ["\156\141\x6d\x65" => "\160\x65\x6b\145\162\152\x61\x61\x6e\x5f\151\142\x75", "\x6c\141\x62\145\x6c" => "\x50\x65\x6b\x65\x72\x6a\141\141\156\x20\111\x62\165", "\166\x61\154\x75\145" => $alumni->pekerjaan_ibu, "\x69\143\157\156" => "\x66\x61\162\40\x66\x61\55\165\x73\145\x72", "\164\x79\160\145" => "\164\x65\x78\x74"], ["\x6e\141\x6d\x65" => "\x6e\157\150\160\x5f\x69\x62\x75", "\x6c\x61\142\145\154" => "\x4e\x6f\56\40\x48\x50\x20\x49\x62\165", "\166\141\x6c\x75\145" => $alumni->nohp_ibu, "\151\x63\157\156" => "\146\x61\x72\x20\146\x61\55\165\163\x65\x72", "\164\x79\x70\145" => "\x6e\165\155\142\x65\162"], ["\156\141\155\145" => "\141\x6c\141\155\x61\x74\x5f\x69\142\165", "\154\141\142\x65\154" => "\x41\x6c\141\155\141\164\x20\111\x62\x75", "\x76\x61\154\x75\x65" => $alumni->alamat_ibu, "\151\143\157\156" => "\x66\x61\x72\x20\146\141\55\x75\163\145\162", "\x74\x79\x70\x65" => "\x74\x65\170\164"]];
        goto g0Asd;
        Ze7P7:
        $user = $this->ion_auth->user()->row();
        goto E_fT3;
        uVbr9:
        $data["\151\156\160\165\164\137\x6f\x72\x74\165"] = json_decode(json_encode($inputOrtu), FALSE);
        goto cStma;
        vBRsE:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto khWa1;
        q3zon:
        $data["\x70\162\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto ltJKW;
        kShpl:
        $alumni = $this->master->getAlumniById($id);
        goto Jv13R;
        khWa1:
        $data["\x74\x70\x5f\141\x63\x74\151\x76\x65"] = $this->dashboard->getTahunActive();
        goto EphWO;
        cStma:
        $data["\151\x6e\160\x75\x74\137\x77\141\x6c\151"] = json_decode(json_encode($inputWali), FALSE);
        goto q3zon;
        v8u4x:
        $data["\x73\155\164\137\141\x63\164\151\166\145"] = $this->dashboard->getSemesterActive();
        goto ZXlT8;
        Xf6VL:
        $inputBio = [["\x6e\141\x6d\145" => "\164\145\155\x70\x61\164\x5f\x6c\141\x68\151\162", "\x6c\x61\x62\x65\154" => "\x54\x65\x6d\x70\141\x74\x20\x4c\141\150\x69\162", "\x76\141\x6c\165\145" => $alumni->tempat_lahir, "\x69\143\157\156" => "\x66\141\x72\x20\146\x61\x2d\155\141\x70", "\143\x6c\x61\x73\x73" => '', "\164\171\160\145" => "\164\x65\x78\164"], ["\156\141\x6d\145" => "\164\x61\x6e\x67\147\x61\x6c\137\x6c\141\150\x69\162", "\x6c\x61\x62\x65\x6c" => "\x54\141\x6e\x67\x67\x61\154\x20\x4c\x61\150\151\162", "\x76\141\x6c\x75\x65" => $alumni->tanggal_lahir, "\151\x63\x6f\x6e" => "\146\141\x72\x20\146\141\x2d\x63\141\154\145\x6e\144\x61\162", "\x63\154\x61\x73\x73" => "\x74\141\x68\165\156", "\x74\x79\x70\145" => "\x74\x65\170\164"], ["\x63\x6c\141\163\x73" => '', "\156\141\x6d\145" => "\141\147\141\x6d\141", "\x6c\141\142\x65\154" => "\x41\x67\x61\155\141", "\x76\141\x6c\165\145" => $alumni->agama, "\151\x63\157\156" => "\146\x61\x72\x20\x66\141\x2d\143\x61\154\x65\x6e\144\x61\162", "\164\x79\x70\x65" => "\x74\x65\x78\164"], ["\x63\x6c\x61\163\163" => '', "\156\141\x6d\x65" => "\x61\154\x61\x6d\x61\x74", "\x6c\141\142\x65\x6c" => "\x41\154\141\155\x61\x74", "\x76\141\x6c\x75\x65" => $alumni->alamat, "\x69\x63\157\156" => "\x66\141\162\x20\146\x61\x2d\x75\163\145\x72", "\x74\x79\x70\x65" => "\x74\x65\x78\x74"], ["\143\154\141\x73\x73" => '', "\x6e\141\155\x65" => "\x72\x74", "\x6c\x61\x62\x65\154" => "\122\164", "\166\141\154\x75\x65" => $alumni->rt, "\x69\143\x6f\x6e" => "\146\x61\162\x20\x66\141\55\165\163\x65\162", "\x74\171\160\x65" => "\164\145\x78\x74"], ["\143\154\x61\x73\163" => '', "\156\x61\x6d\145" => "\162\x77", "\x6c\141\142\145\154" => "\122\x77", "\166\141\154\x75\x65" => $alumni->rw, "\x69\x63\157\x6e" => "\146\141\162\x20\146\141\x2d\165\163\145\x72", "\x74\x79\x70\145" => "\164\145\170\x74"], ["\143\154\x61\163\163" => '', "\x6e\141\155\x65" => "\x6b\145\154\x75\x72\x61\x68\141\x6e", "\x6c\x61\x62\x65\x6c" => "\x4b\145\154\165\162\x61\x68\x61\156\x2f\x44\145\163\x61", "\x76\141\154\x75\x65" => $alumni->kelurahan, "\151\143\x6f\156" => "\x66\x61\x72\x20\146\x61\55\165\163\145\162", "\x74\x79\160\x65" => "\x74\x65\170\164"], ["\x63\154\141\163\x73" => '', "\x6e\x61\155\x65" => "\x6b\145\143\141\x6d\141\164\141\156", "\154\141\x62\x65\x6c" => "\x4b\145\x63\x61\x6d\x61\164\x61\156", "\x76\x61\x6c\x75\145" => $alumni->kecamatan, "\151\143\x6f\156" => "\x66\x61\x72\x20\146\x61\x2d\x75\163\145\162", "\x74\171\x70\145" => "\164\x65\x78\x74"], ["\x63\x6c\x61\163\x73" => '', "\156\x61\x6d\145" => "\x6b\x61\142\165\x70\141\164\145\x6e", "\154\141\x62\x65\x6c" => "\113\x61\x62\x75\x70\x61\164\145\x6e\57\x4b\157\164\141", "\x76\x61\x6c\165\x65" => $alumni->kabupaten, "\151\x63\x6f\x6e" => "\146\x61\162\x20\146\141\x2d\x75\x73\145\x72", "\x74\x79\160\x65" => "\164\145\x78\164"], ["\x63\154\141\163\x73" => '', "\x6e\141\155\x65" => "\153\157\x64\x65\x5f\x70\157\163", "\154\x61\x62\145\x6c" => "\113\x6f\144\145\40\x50\157\x73", "\166\141\x6c\x75\145" => $alumni->kode_pos, "\151\143\x6f\x6e" => "\146\141\162\x20\146\x61\55\x75\x73\145\x72", "\164\x79\x70\x65" => "\x74\145\x78\x74"], ["\143\x6c\x61\x73\163" => '', "\x6e\x61\155\145" => "\150\x70", "\154\x61\142\x65\x6c" => "\x48\160", "\x76\x61\x6c\165\145" => $alumni->hp, "\151\143\x6f\156" => "\146\141\162\x20\146\x61\55\165\x73\x65\x72", "\164\x79\x70\145" => "\x74\x65\x78\x74"]];
        goto T9T0G;
        u4SDb:
        $this->load->view("\137\x74\x65\x6d\160\x6c\141\x74\145\x73\x2f\x64\x61\x73\150\142\157\141\x72\144\x2f\137\146\x6f\157\164\145\162");
        goto pQjPn;
        ltJKW:
        $this->load->view("\137\x74\x65\x6d\x70\x6c\x61\x74\x65\x73\x2f\x64\141\163\150\x62\x6f\x61\x72\x64\57\137\150\145\141\144\145\162", $data);
        goto TLtpX;
        g0Asd:
        $inputWali = [["\156\141\155\x65" => "\156\x61\x6d\x61\137\x77\141\154\x69", "\154\141\142\x65\154" => "\116\x61\155\x61\x20\127\x61\154\x69", "\x76\141\154\x75\145" => $alumni->nama_wali, "\x69\143\157\156" => "\146\x61\162\x20\x66\141\x2d\165\163\145\162", "\164\171\x70\x65" => "\164\145\x78\x74"], ["\156\141\x6d\145" => "\160\x65\156\144\151\144\x69\153\x61\156\137\167\x61\154\151", "\154\141\x62\145\x6c" => "\x50\x65\x6e\x64\x69\x64\151\x6b\141\156\40\127\141\154\x69", "\x76\x61\x6c\165\x65" => $alumni->pendidikan_wali, "\151\x63\x6f\x6e" => "\146\x61\162\x20\146\x61\55\165\163\145\162", "\164\x79\x70\145" => "\164\x65\170\164"], ["\x6e\141\155\x65" => "\160\x65\x6b\x65\x72\x6a\x61\141\x6e\x5f\x77\x61\154\151", "\154\141\x62\x65\154" => "\x50\x65\153\145\x72\152\141\141\x6e\x20\x57\141\154\x69", "\166\141\x6c\165\145" => $alumni->pekerjaan_wali, "\151\x63\x6f\x6e" => "\146\141\x72\x20\146\x61\x2d\165\x73\x65\x72", "\x74\171\160\145" => "\x74\x65\170\x74"], ["\x6e\141\x6d\145" => "\x61\154\x61\x6d\141\164\x5f\x77\141\154\x69", "\154\x61\142\x65\154" => "\101\154\141\155\141\164\40\x57\141\154\151", "\166\141\154\165\145" => $alumni->alamat_wali, "\151\143\x6f\x6e" => "\x66\x61\162\40\146\141\x2d\x75\x73\145\162", "\x74\171\160\x65" => "\164\145\x78\164"], ["\x6e\141\x6d\x65" => "\156\x6f\150\x70\137\x77\141\x6c\x69", "\x6c\x61\x62\145\154" => "\116\x6f\56\40\110\120\40\x57\141\x6c\151", "\166\x61\x6c\165\145" => $alumni->nohp_wali, "\151\x63\157\x6e" => "\146\x61\162\x20\146\x61\x2d\x75\163\x65\x72", "\164\x79\160\x65" => "\x6e\x75\x6d\142\x65\162"]];
        goto Ze7P7;
        E_fT3:
        $data = ["\165\163\x65\162" => $user, "\x6a\165\x64\x75\x6c" => "\x41\154\x75\x6d\156\151", "\163\165\142\x6a\x75\x64\x75\x6c" => "\x45\144\151\x74\40\x44\141\x74\x61\40\101\154\165\x6d\x6e\151", "\141\154\165\155\x6e\151" => $alumni, "\x73\145\164\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto vBRsE;
        ZXlT8:
        $data["\151\156\x70\x75\164\137\x64\x61\x74\141"] = json_decode(json_encode($inputData), FALSE);
        goto GdHbv;
        TLtpX:
        $this->load->view("\x6d\141\x73\164\x65\x72\x2f\141\154\165\155\156\x69\57\145\x64\151\164");
        goto u4SDb;
        Jv13R:
        $inputData = [["\x6c\x61\142\145\154" => "\116\x61\x6d\141\40\114\x65\156\x67\153\x61\160", "\x6e\141\x6d\x65" => "\x6e\141\155\141", "\166\141\x6c\165\145" => $alumni->nama, "\151\x63\x6f\x6e" => "\146\141\x72\40\146\141\x2d\165\x73\x65\162", "\143\x6c\x61\163\x73" => '', "\x74\171\160\145" => "\164\145\170\164"], ["\154\x61\142\145\154" => "\x4e\x49\123", "\x6e\141\155\145" => "\156\x69\163", "\x76\141\x6c\165\x65" => $alumni->nis, "\151\x63\x6f\156" => "\x66\x61\x72\40\x66\141\x2d\151\144\x2d\143\141\162\144", "\x63\x6c\141\163\x73" => '', "\x74\x79\160\x65" => "\x6e\x75\155\x62\145\x72"], ["\156\141\155\145" => "\156\151\163\156", "\154\x61\142\145\154" => "\x4e\x49\123\116", "\166\141\154\165\x65" => $alumni->nisn, "\151\x63\x6f\156" => "\146\141\x72\x20\146\x61\55\151\144\x2d\143\141\162\144", "\143\154\x61\163\x73" => '', "\x74\171\x70\x65" => "\164\145\x78\164"], ["\x6c\141\x62\145\154" => "\x4a\145\156\151\163\40\x4b\145\154\x61\x6d\151\x6e", "\156\141\x6d\x65" => "\x6a\145\x6e\x69\x73\137\x6b\x65\154\x61\x6d\151\156", "\166\x61\154\165\x65" => $alumni->jenis_kelamin, "\x69\x63\157\x6e" => "\146\x61\x73\40\x66\x61\55\x76\x65\156\165\163\55\x6d\141\x72\163", "\x63\x6c\141\163\163" => '', "\x74\171\x70\145" => "\x74\145\x78\x74"], ["\x6e\141\155\x65" => "\x6b\145\x6c\141\163\137\x61\x77\x61\154", "\154\141\142\145\154" => "\x44\x69\x74\x65\162\151\x6d\x61\40\144\151\x20\153\x65\154\141\x73", "\x76\141\154\165\x65" => $alumni->kelas_awal, "\x69\143\157\156" => "\x66\x61\163\40\146\x61\x2d\x67\162\x61\144\165\141\164\x69\x6f\156\55\143\x61\160", "\x63\x6c\x61\163\163" => '', "\x74\x79\160\x65" => "\x74\145\170\x74"], ["\x6e\141\155\x65" => "\x74\x61\150\165\156\137\x6d\141\163\x75\x6b", "\x6c\x61\142\x65\x6c" => "\124\x67\154\x20\144\151\x74\x65\x72\x69\155\x61", "\166\141\x6c\165\145" => $alumni->tahun_masuk, "\x69\x63\x6f\156" => "\x74\141\150\x75\x6e\40\x66\141\x72\40\146\x61\55\x63\141\154\x65\156\144\141\162\55\x61\154\x74", "\x63\154\141\163\x73" => "\164\x61\x68\x75\156", "\164\171\x70\x65" => "\164\x65\170\164"]];
        goto Xf6VL;
        GdHbv:
        $data["\x69\x6e\x70\x75\164\x5f\142\151\157"] = json_decode(json_encode($inputBio), FALSE);
        goto uVbr9;
        EphWO:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto v8u4x;
        pQjPn:
    }
    public function add()
    {
        goto pxHSl;
        oa7A_:
        $data["\x74\x70\x5f\x61\x63\x74\x69\166\x65"] = $this->dashboard->getTahunActive();
        goto Tbr1A;
        Tbr1A:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto w93AY;
        XK_8S:
        $data = ["\165\x73\x65\162" => $user, "\x6a\x75\144\x75\x6c" => "\101\154\x75\x6d\156\151", "\163\x75\142\152\165\x64\x75\x6c" => "\124\x61\155\142\x61\150\x20\x44\141\x74\x61\40\x41\154\x75\155\156\x69", "\x73\x65\x74\x74\151\156\x67" => $this->dashboard->getSetting()];
        goto Xdgz7;
        sFDcU:
        $this->load->view("\x5f\x74\x65\x6d\x70\154\x61\164\145\x73\57\144\x61\x73\x68\x62\157\141\162\144\x2f\x5f\x68\145\x61\144\145\162", $data);
        goto FYOs4;
        Xdgz7:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto oa7A_;
        UPONm:
        $this->load->view("\137\164\145\155\160\154\141\x74\145\163\x2f\x64\141\163\150\x62\157\141\162\x64\57\137\146\157\157\x74\145\162");
        goto o6zI2;
        pxHSl:
        $user = $this->ion_auth->user()->row();
        goto XK_8S;
        FYOs4:
        $this->load->view("\155\141\x73\x74\145\162\57\x61\154\165\x6d\x6e\x69\57\x61\x64\144");
        goto UPONm;
        Y6NkG:
        $data["\160\x72\157\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto hnrW7;
        hnrW7:
        $data["\x74\x69\160\x65"] = "\x61\x64\144";
        goto sFDcU;
        w93AY:
        $data["\x73\155\164\137\141\143\x74\151\x76\145"] = $this->dashboard->getSemesterActive();
        goto Y6NkG;
        o6zI2:
    }
    public function create()
    {
        goto SIv1A;
        uD2Se:
        goto lBRF0;
        goto ogy6n;
        SIv1A:
        $nis = $this->input->post("\156\x69\x73", true);
        goto usMWk;
        qXKB2:
        $this->db->insert("\x6d\x61\163\x74\x65\162\137\163\x69\163\167\141", $insert);
        goto aq51e;
        Bi1ET:
        $data["\x69\x6e\x73\x65\162\164"] = $this->db->insert("\x62\x75\153\165\137\x69\x6e\x64\x75\x6b", $induk);
        goto MVW60;
        PlYYH:
        $insert = ["\156\141\155\x61" => $this->input->post("\156\141\155\x61\137\x61\x6c\x75\155\156\x69", true), "\x6e\x69\x73" => $nis, "\156\151\163\x6e" => $nisn, "\x6a\x65\156\x69\163\x5f\x6b\145\154\141\155\x69\x6e" => $this->input->post("\152\145\x6e\x69\x73\137\x6b\145\154\x61\x6d\151\156", true), "\146\x6f\x74\x6f" => "\x75\x70\x6c\157\x61\144\x73\x2f\146\x6f\x74\x6f\137\x73\x69\163\x77\x61\57" . $nis . "\152\160\147"];
        goto KmCCa;
        aq51e:
        $last_id = $this->db->insert_id();
        goto Ua_ix;
        whWg2:
        $this->form_validation->set_rules("\x6e\x69\163", "\x4e\111\123", "\162\x65\161\165\151\x72\x65\144\x7c\x6e\165\x6d\145\x72\151\143\174\164\162\x69\155\174\x6d\x69\156\x5f\154\x65\156\x67\x74\x68\133\66\135\174\x6d\x61\170\x5f\154\x65\x6e\x67\x74\150\x5b\63\x30\135" . $u_nis);
        goto mpIlk;
        KmCCa:
        $this->db->set("\165\151\x64", "\x55\125\111\104\50\51", FALSE);
        goto qXKB2;
        ls3_E:
        $induk = ["\x69\x64\137\x73\x69\163\x77\141" => $last_id, "\165\x69\144" => $uid->uid, "\153\x65\x6c\x61\x73\x5f\x61\153\150\x69\162" => $this->input->post("\153\x65\154\141\163\x5f\141\x6b\x68\151\162", true), "\164\x61\150\165\156\137\154\x75\154\x75\x73" => $this->input->post("\x74\141\150\165\156\137\x6c\x75\x6c\x75\x73", true), "\156\x6f\137\151\x6a\x61\x7a\x61\x68" => $this->input->post("\156\x6f\x5f\x69\x6a\141\x7a\x61\150", true), "\163\x74\141\x74\165\163" => 2];
        goto Bi1ET;
        AcTc2:
        $u_nisn = "\x7c\x69\x73\137\165\x6e\x69\x71\165\x65\133\155\x61\163\164\x65\x72\137\x73\151\x73\167\141\x2e\x6e\x69\163\x6e\x5d";
        goto whWg2;
        fh_hU:
        $data["\x69\156\x73\145\x72\x74"] = false;
        goto Ft2vj;
        d4ZVA:
        if ($this->form_validation->run() == FALSE) {
            goto p7vr3;
        }
        goto PlYYH;
        ogy6n:
        p7vr3:
        goto fh_hU;
        Ua_ix:
        $uid = $this->db->select("\165\151\x64")->from("\x6d\x61\163\164\x65\162\137\x73\151\163\167\141")->where("\151\144\x5f\x73\x69\163\x77\x61", $last_id)->get()->row();
        goto ls3_E;
        fdKHB:
        $this->output_json($data);
        goto IH94e;
        Ft2vj:
        $data["\x74\x65\x78\164"] = "\x44\141\x74\x61\40\123\x75\144\x61\150\40\x61\144\x61\x2c\x20\120\x61\x73\164\x69\153\141\x6e\40\x4e\x49\123\54\40\116\111\x53\116\40\144\x61\156\40\x55\x73\x65\x72\156\141\155\x65\x20\x62\145\154\165\155\x20\x64\151\x67\165\x6e\x61\153\141\x6e\40\x61\154\x75\x6d\x6e\151\x20\154\141\151\156";
        goto hsBti;
        mpIlk:
        $this->form_validation->set_rules("\x6e\151\163\156", "\x4e\111\x53\116", "\x72\145\161\165\x69\162\145\x64\174\x6e\165\x6d\145\162\151\x63\x7c\164\x72\x69\155\x7c\x6d\151\x6e\x5f\154\x65\156\x67\164\x68\133\x36\x5d\174\155\x61\170\x5f\x6c\145\156\147\x74\150\x5b\62\x30\x5d" . $u_nisn);
        goto d4ZVA;
        MVW60:
        $data["\164\x65\170\164"] = "\x41\x6c\x75\155\156\x69\40\142\145\162\x68\x61\163\x69\x6c\x20\x64\x69\164\141\x6d\x62\141\x68\x6b\x61\156";
        goto uD2Se;
        usMWk:
        $nisn = $this->input->post("\156\151\x73\x6e", true);
        goto PkoGg;
        PkoGg:
        $u_nis = "\174\x69\x73\137\165\x6e\151\x71\x75\x65\133\x6d\x61\163\x74\145\x72\x5f\163\x69\163\x77\x61\x2e\156\x69\163\135";
        goto AcTc2;
        hsBti:
        lBRF0:
        goto fdKHB;
        IH94e:
    }
    public function edit()
    {
        goto HnPmS;
        Tywik:
        $this->load->view("\x6d\141\x73\x74\145\162\57\x61\154\165\155\156\151\57\x65\144\151\x74");
        goto YyEYi;
        HnPmS:
        $id = $this->input->get("\x69\x64", true);
        goto xItiT;
        VstmP:
        $inputBio = [["\x6e\141\155\145" => "\164\x65\x6d\x70\141\x74\137\154\x61\x68\151\162", "\154\141\x62\x65\x6c" => "\x54\x65\x6d\x70\x61\164\40\x4c\x61\x68\151\x72", "\x76\141\x6c\x75\x65" => $alumni->tempat_lahir, "\151\143\157\x6e" => "\x66\141\x72\x20\146\x61\x2d\x6d\141\160", "\x63\x6c\x61\x73\163" => '', "\x74\171\x70\145" => "\x74\x65\170\164"], ["\156\141\155\145" => "\164\x61\156\147\147\x61\x6c\137\x6c\x61\150\151\162", "\x6c\x61\142\x65\x6c" => "\124\x61\x6e\147\147\x61\x6c\40\114\x61\x68\x69\x72", "\x76\x61\x6c\x75\x65" => $alumni->tanggal_lahir, "\x69\x63\157\156" => "\146\x61\x72\40\146\141\55\x63\141\x6c\145\156\144\x61\x72", "\x63\154\141\163\163" => "\164\x61\150\165\x6e", "\164\171\160\145" => "\164\145\x78\x74"], ["\143\x6c\x61\163\163" => '', "\156\x61\x6d\x65" => "\141\147\141\155\141", "\x6c\141\x62\145\154" => "\101\x67\x61\x6d\x61", "\x76\141\x6c\165\x65" => $alumni->agama, "\151\143\157\x6e" => "\x66\x61\x72\x20\146\141\55\143\141\154\145\156\x64\x61\162", "\x74\171\x70\145" => "\164\x65\170\x74"], ["\x63\x6c\141\x73\x73" => '', "\156\141\x6d\145" => "\x61\x6c\141\x6d\x61\164", "\154\141\142\145\x6c" => "\x41\154\x61\x6d\x61\x74", "\x76\x61\154\165\x65" => $alumni->alamat, "\x69\x63\x6f\156" => "\x66\141\162\40\146\x61\55\165\x73\x65\x72", "\x74\171\160\145" => "\x74\x65\170\164"], ["\x63\154\x61\x73\x73" => '', "\x6e\x61\155\145" => "\162\164", "\154\141\x62\145\x6c" => "\x52\x74", "\x76\x61\154\x75\145" => $alumni->rt, "\151\143\x6f\x6e" => "\x66\141\162\40\146\x61\55\165\163\145\162", "\164\171\x70\145" => "\x74\x65\x78\164"], ["\x63\x6c\x61\x73\163" => '', "\156\x61\155\x65" => "\162\x77", "\154\x61\142\145\154" => "\122\167", "\x76\x61\154\165\145" => $alumni->rw, "\151\x63\x6f\156" => "\x66\141\x72\40\146\141\55\165\163\x65\x72", "\x74\x79\x70\x65" => "\164\x65\x78\x74"], ["\143\154\141\163\163" => '', "\x6e\141\155\145" => "\x6b\145\154\x75\162\141\x68\141\x6e", "\x6c\x61\x62\x65\154" => "\113\145\x6c\x75\162\x61\x68\141\156\57\104\x65\163\141", "\166\141\x6c\165\145" => $alumni->kelurahan, "\151\x63\157\156" => "\x66\141\x72\x20\x66\x61\55\165\163\145\x72", "\164\171\x70\x65" => "\x74\x65\170\164"], ["\x63\154\x61\163\163" => '', "\x6e\141\155\145" => "\153\x65\143\141\155\x61\164\141\x6e", "\x6c\x61\142\x65\x6c" => "\113\145\x63\141\155\x61\164\x61\x6e", "\x76\x61\154\x75\145" => $alumni->kecamatan, "\151\143\x6f\x6e" => "\146\x61\x72\40\x66\141\x2d\x75\x73\x65\x72", "\164\171\160\x65" => "\164\x65\x78\164"], ["\143\x6c\x61\163\163" => '', "\x6e\141\155\145" => "\153\141\x62\x75\160\141\164\145\x6e", "\154\x61\142\x65\154" => "\x4b\x61\142\x75\160\x61\164\145\x6e\x2f\113\157\164\x61", "\x76\141\154\165\145" => $alumni->kabupaten, "\151\x63\157\x6e" => "\x66\x61\x72\x20\146\x61\55\165\163\x65\x72", "\164\171\x70\x65" => "\x74\145\x78\x74"], ["\143\154\x61\163\x73" => '', "\x6e\141\155\x65" => "\153\157\144\145\137\160\x6f\x73", "\x6c\x61\x62\x65\154" => "\113\157\144\x65\x20\x50\x6f\x73", "\x76\141\154\x75\x65" => $alumni->kode_pos, "\x69\x63\157\x6e" => "\x66\x61\162\40\x66\x61\55\x75\163\x65\x72", "\x74\x79\x70\x65" => "\164\145\170\x74"], ["\x63\154\x61\x73\163" => '', "\156\141\x6d\145" => "\x68\x70", "\154\x61\142\145\154" => "\110\160", "\166\x61\154\x75\145" => $alumni->hp, "\151\x63\157\x6e" => "\146\x61\162\40\146\x61\55\165\163\x65\x72", "\x74\171\160\145" => "\164\145\x78\164"]];
        goto dhqKZ;
        FtPLr:
        $data["\151\156\160\x75\164\x5f\x64\141\164\x61"] = json_decode(json_encode($inputData), FALSE);
        goto kC9zq;
        R3i6z:
        $data["\x69\156\160\165\164\137\157\162\164\165"] = json_decode(json_encode($inputOrtu), FALSE);
        goto Phi0S;
        MpzNT:
        $user = $this->ion_auth->user()->row();
        goto htmW4;
        LUECN:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto QqS6R;
        YyEYi:
        $this->load->view("\137\x74\145\x6d\x70\154\x61\x74\145\163\x2f\x64\x61\x73\150\x62\x6f\x61\162\x64\57\137\146\x6f\x6f\164\145\162");
        goto gn37d;
        JPmxI:
        $inputWali = [["\156\141\155\x65" => "\x6e\x61\x6d\x61\137\167\x61\154\x69", "\154\141\142\145\154" => "\116\141\155\141\40\127\141\x6c\151", "\x76\141\154\165\145" => $alumni->nama_wali, "\x69\x63\x6f\x6e" => "\x66\141\162\x20\x66\141\x2d\x75\163\145\162", "\164\x79\160\x65" => "\x74\x65\x78\x74"], ["\x6e\141\155\x65" => "\160\x65\156\x64\151\x64\151\153\141\156\x5f\x77\x61\x6c\x69", "\x6c\141\142\145\x6c" => "\120\145\156\x64\151\144\151\x6b\141\156\40\x57\141\x6c\151", "\166\141\154\165\x65" => $alumni->pendidikan_wali, "\151\x63\157\x6e" => "\x66\x61\162\x20\x66\141\55\x75\163\145\162", "\164\171\160\x65" => "\x74\x65\x78\x74"], ["\x6e\141\155\145" => "\x70\x65\x6b\145\x72\x6a\141\x61\x6e\x5f\167\x61\154\151", "\x6c\141\x62\x65\154" => "\x50\145\x6b\145\x72\152\x61\141\156\40\x57\x61\x6c\x69", "\166\141\x6c\x75\145" => $alumni->pekerjaan_wali, "\151\143\157\156" => "\x66\x61\x72\40\x66\x61\x2d\165\163\x65\162", "\x74\x79\160\145" => "\164\145\170\x74"], ["\x6e\141\155\145" => "\x61\x6c\141\x6d\x61\x74\137\167\141\154\x69", "\154\x61\x62\145\x6c" => "\101\x6c\x61\x6d\141\x74\40\127\x61\154\151", "\x76\x61\154\165\x65" => $alumni->alamat_wali, "\x69\143\x6f\x6e" => "\146\141\162\x20\x66\141\55\165\x73\145\162", "\x74\171\160\x65" => "\164\x65\170\164"], ["\156\x61\x6d\x65" => "\x6e\x6f\150\160\137\167\x61\154\x69", "\x6c\141\x62\x65\154" => "\116\157\56\x20\x48\x50\40\127\x61\x6c\151", "\x76\x61\154\165\145" => $alumni->nohp_wali, "\x69\x63\157\156" => "\146\141\162\40\146\141\55\165\x73\145\x72", "\164\171\x70\145" => "\x6e\165\155\x62\x65\162"]];
        goto MpzNT;
        GmZyz:
        $inputData = [["\154\141\142\145\154" => "\116\x61\155\141\40\x4c\x65\156\x67\x6b\141\x70", "\156\141\155\145" => "\156\x61\x6d\x61", "\166\141\x6c\x75\145" => $alumni->nama, "\151\143\x6f\x6e" => "\x66\141\162\40\146\141\55\x75\x73\145\x72", "\143\154\x61\x73\x73" => '', "\164\171\160\x65" => "\164\145\170\x74"], ["\154\x61\142\145\154" => "\116\x49\123", "\156\x61\x6d\145" => "\156\151\x73", "\166\x61\x6c\165\x65" => $alumni->nis, "\151\143\157\156" => "\146\141\162\x20\x66\141\55\x69\144\55\x63\x61\162\x64", "\143\x6c\x61\163\x73" => '', "\x74\171\160\x65" => "\x6e\x75\x6d\142\145\162"], ["\156\141\155\x65" => "\156\x69\x73\x6e", "\154\141\142\x65\154" => "\x4e\x49\123\x4e", "\x76\x61\x6c\x75\x65" => $alumni->nisn, "\x69\x63\x6f\156" => "\x66\x61\x72\x20\x66\x61\x2d\x69\144\55\143\x61\162\x64", "\x63\x6c\x61\163\x73" => '', "\164\171\x70\x65" => "\x74\x65\170\164"], ["\x6c\141\142\145\154" => "\x4a\145\x6e\151\x73\x20\x4b\x65\x6c\141\155\x69\156", "\x6e\x61\x6d\145" => "\152\145\156\x69\163\137\153\145\x6c\141\155\x69\x6e", "\166\x61\x6c\x75\145" => $alumni->jenis_kelamin, "\x69\x63\157\156" => "\x66\141\163\40\146\141\55\x76\145\156\165\163\55\155\141\162\163", "\x63\x6c\141\163\163" => '', "\164\x79\160\x65" => "\x74\145\x78\x74"], ["\156\x61\x6d\145" => "\153\x65\154\141\163\x5f\x61\x77\x61\154", "\154\x61\142\x65\x6c" => "\104\151\x74\x65\162\x69\x6d\141\x20\144\x69\x20\153\x65\154\141\163", "\x76\x61\x6c\x75\145" => $alumni->kelas_awal, "\x69\143\x6f\x6e" => "\x66\x61\163\40\x66\x61\55\147\162\141\144\x75\x61\x74\x69\x6f\156\55\143\x61\160", "\x63\154\141\x73\163" => '', "\x74\171\160\145" => "\164\145\170\164"], ["\156\x61\x6d\145" => "\x74\x61\150\165\156\x5f\x6d\141\x73\165\153", "\x6c\141\x62\145\154" => "\124\147\154\40\144\151\164\145\x72\151\155\x61", "\166\141\154\x75\145" => $alumni->tahun_masuk, "\151\x63\x6f\156" => "\164\141\x68\x75\x6e\x20\146\x61\x72\x20\x66\141\x2d\143\x61\x6c\145\x6e\x64\141\162\x2d\x61\154\164", "\143\x6c\x61\163\163" => "\x74\141\x68\x75\x6e", "\164\x79\160\x65" => "\164\x65\x78\x74"]];
        goto VstmP;
        cIhXB:
        $data["\163\155\164\137\x61\x63\164\x69\166\x65"] = $this->dashboard->getSemesterActive();
        goto FtPLr;
        JU04P:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto cIhXB;
        Y7qC4:
        $this->load->view("\x5f\x74\145\155\160\154\141\x74\145\163\57\144\x61\x73\x68\142\x6f\141\162\x64\57\x5f\150\145\141\x64\x65\162", $data);
        goto Tywik;
        Phi0S:
        $data["\151\156\x70\x75\164\x5f\x77\x61\x6c\151"] = json_decode(json_encode($inputWali), FALSE);
        goto fMHE0;
        fMHE0:
        $data["\160\x72\157\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto Y7qC4;
        htmW4:
        $data = ["\165\163\x65\x72" => $user, "\152\165\144\165\x6c" => "\101\x6c\165\155\156\x69", "\163\x75\142\152\x75\x64\165\x6c" => "\105\144\x69\x74\40\x44\x61\x74\x61\x20\x41\x6c\165\155\x6e\151", "\x61\154\165\x6d\156\151" => $alumni, "\x73\145\x74\x74\x69\x6e\147" => $this->dashboard->getSetting()];
        goto LUECN;
        kC9zq:
        $data["\x69\x6e\x70\165\164\x5f\142\151\157"] = json_decode(json_encode($inputBio), FALSE);
        goto R3i6z;
        QqS6R:
        $data["\x74\x70\x5f\141\x63\x74\151\x76\x65"] = $this->dashboard->getTahunActive();
        goto JU04P;
        dhqKZ:
        $inputOrtu = [["\x6e\141\x6d\145" => "\156\141\x6d\141\137\x61\x79\141\150", "\154\141\142\x65\154" => "\x4e\141\x6d\x61\x20\101\171\x61\150", "\166\141\x6c\x75\x65" => $alumni->nama_ayah, "\x69\143\x6f\x6e" => "\x66\141\x72\40\x66\x61\x2d\165\163\145\162", "\164\x79\x70\x65" => "\x74\x65\170\164"], ["\156\141\155\x65" => "\160\145\156\144\x69\x64\x69\x6b\141\x6e\x5f\x61\171\x61\150", "\x6c\x61\142\145\154" => "\120\x65\x6e\144\151\144\x69\x6b\141\156\x20\x41\171\x61\x68", "\166\x61\x6c\x75\145" => $alumni->pendidikan_ayah, "\x69\143\157\x6e" => "\x66\141\x72\x20\x66\x61\x2d\165\163\145\x72", "\164\171\x70\145" => "\164\145\x78\x74"], ["\156\x61\155\145" => "\x70\145\153\x65\162\x6a\x61\x61\156\137\x61\171\141\150", "\154\141\x62\145\154" => "\x50\x65\x6b\x65\x72\x6a\x61\141\156\x20\x41\171\141\150", "\x76\x61\x6c\165\145" => $alumni->pekerjaan_ayah, "\151\x63\x6f\156" => "\x66\141\x72\x20\146\141\x2d\165\x73\x65\x72", "\164\x79\160\x65" => "\164\145\170\x74"], ["\x6e\141\155\145" => "\x6e\157\x68\160\x5f\x61\171\141\150", "\154\x61\142\145\154" => "\x4e\x6f\56\40\x48\x50\40\101\171\x61\x68", "\166\x61\x6c\165\145" => $alumni->nohp_ayah, "\151\x63\x6f\x6e" => "\146\141\x72\40\x66\141\x2d\165\163\x65\x72", "\x74\171\x70\x65" => "\156\x75\155\x62\145\x72"], ["\x6e\x61\x6d\x65" => "\x61\154\x61\155\141\164\137\141\171\x61\x68", "\x6c\141\x62\145\154" => "\101\x6c\141\x6d\141\x74\x20\x41\171\x61\150", "\x76\141\154\165\145" => $alumni->alamat_ayah, "\x69\x63\157\156" => "\146\141\162\x20\146\x61\55\x75\x73\x65\162", "\x74\x79\160\x65" => "\x74\145\170\164"], ["\156\x61\x6d\145" => "\x6e\x61\x6d\141\137\151\x62\165", "\154\x61\142\145\x6c" => "\x4e\141\155\x61\x20\111\142\165", "\x76\x61\x6c\165\x65" => $alumni->nama_ibu, "\151\143\157\156" => "\146\141\x72\40\x66\141\55\x75\x73\145\162", "\x74\171\x70\x65" => "\164\x65\x78\x74"], ["\x6e\141\155\x65" => "\160\145\156\x64\151\x64\x69\153\x61\156\137\151\x62\165", "\154\x61\142\x65\154" => "\x50\x65\x6e\144\151\144\151\x6b\x61\156\40\111\142\165", "\x76\141\154\165\x65" => $alumni->pendidikan_ibu, "\x69\x63\157\156" => "\146\x61\x72\x20\146\x61\x2d\165\163\x65\162", "\x74\171\x70\145" => "\164\x65\x78\164"], ["\156\x61\155\145" => "\x70\145\153\145\162\x6a\141\141\x6e\x5f\151\142\165", "\154\x61\142\x65\154" => "\x50\145\x6b\x65\162\152\x61\x61\x6e\40\111\x62\x75", "\x76\x61\154\x75\145" => $alumni->pekerjaan_ibu, "\151\x63\157\x6e" => "\146\141\162\x20\146\141\55\x75\x73\x65\162", "\164\x79\x70\145" => "\164\x65\x78\164"], ["\156\x61\155\145" => "\x6e\x6f\x68\160\137\151\x62\165", "\154\x61\x62\145\x6c" => "\116\157\56\40\110\120\x20\x49\142\165", "\166\x61\x6c\165\x65" => $alumni->nohp_ibu, "\x69\x63\157\156" => "\146\x61\x72\x20\146\141\55\165\163\x65\x72", "\x74\x79\160\145" => "\156\165\x6d\x62\145\162"], ["\156\x61\155\145" => "\141\154\141\x6d\141\x74\137\151\142\165", "\154\141\x62\145\x6c" => "\x41\154\141\155\x61\164\40\111\x62\x75", "\166\x61\x6c\x75\145" => $alumni->alamat_ibu, "\x69\x63\157\x6e" => "\146\x61\162\40\x66\141\x2d\165\163\145\x72", "\164\x79\x70\x65" => "\x74\145\170\x74"]];
        goto JPmxI;
        xItiT:
        $alumni = $this->master->getAlumniById($id);
        goto GmZyz;
        gn37d:
    }
    public function updateData()
    {
        goto NPBs2;
        te3Wu:
        $action = $this->master->update("\x6d\141\x73\x74\x65\x72\x5f\x73\151\163\x77\x61", $input, "\x69\144\137\163\151\163\167\141", $id_siswa);
        goto aME2L;
        NrNrz:
        $input = ["\x6e\151\x73\156" => $this->input->post("\x6e\x69\163\x6e", true), "\x6e\x69\163" => $this->input->post("\156\x69\163", true), "\x6e\x61\x6d\x61" => $this->input->post("\x6e\x61\155\x61", true), "\152\x65\156\151\x73\x5f\153\x65\x6c\141\155\151\156" => $this->input->post("\x6a\145\156\151\x73\x5f\153\145\x6c\141\155\x69\156", true), "\164\145\x6d\x70\x61\x74\137\154\x61\x68\151\162" => $this->input->post("\164\x65\x6d\x70\x61\164\x5f\154\x61\150\151\x72", true), "\x74\141\x6e\147\147\x61\154\137\154\x61\150\x69\x72" => $this->input->post("\x74\x61\156\147\147\x61\x6c\137\x6c\x61\150\x69\x72", true), "\141\147\x61\x6d\x61" => $this->input->post("\x61\x67\x61\155\x61", true), "\x73\164\x61\164\x75\x73\x5f\x6b\145\x6c\x75\141\162\147\141" => $this->input->post("\163\164\x61\164\x75\x73\x5f\x6b\x65\154\165\x61\x72\147\x61", true), "\x61\x6e\141\153\x5f\153\x65" => $this->input->post("\x61\x6e\x61\153\x5f\x6b\x65", true), "\x61\x6c\141\155\141\164" => $this->input->post("\141\154\x61\155\141\164", true), "\162\x74" => $this->input->post("\162\x74", true), "\162\167" => $this->input->post("\x72\167", true), "\x6b\145\154\165\x72\141\150\x61\156" => $this->input->post("\153\x65\154\165\162\141\x68\141\156", true), "\153\145\143\141\x6d\141\164\x61\x6e" => $this->input->post("\x6b\145\143\141\155\x61\x74\x61\x6e", true), "\153\141\142\165\160\141\x74\145\x6e" => $this->input->post("\x6b\x61\142\x75\x70\x61\x74\x65\156", true), "\160\x72\157\x76\151\156\x73\151" => $this->input->post("\x70\x72\157\x76\x69\156\x73\x69", true), "\x6b\x6f\144\145\137\160\x6f\x73" => $this->input->post("\x6b\157\x64\x65\x5f\160\x6f\163", true), "\x68\x70" => $this->input->post("\150\x70", true), "\156\x61\155\141\137\141\x79\x61\x68" => $this->input->post("\x6e\x61\155\141\137\141\x79\x61\x68", true), "\x6e\x6f\150\160\137\141\x79\141\150" => $this->input->post("\x6e\157\150\160\137\141\x79\141\150", true), "\x70\x65\156\x64\x69\x64\x69\153\x61\156\x5f\141\x79\141\150" => $this->input->post("\x70\145\x6e\x64\151\144\151\x6b\x61\156\137\x61\171\x61\x68", true), "\x70\x65\x6b\x65\162\152\141\141\156\137\141\x79\141\150" => $this->input->post("\x70\145\x6b\145\162\152\x61\x61\x6e\x5f\x61\x79\x61\150", true), "\x61\x6c\141\155\141\164\137\x61\x79\141\x68" => $this->input->post("\x61\x6c\x61\x6d\x61\164\137\x61\171\141\x68", true), "\156\x61\x6d\x61\x5f\x69\142\165" => $this->input->post("\156\141\155\x61\137\151\x62\x75", true), "\156\x6f\x68\x70\137\151\x62\165" => $this->input->post("\156\157\150\160\x5f\x69\x62\x75", true), "\160\145\156\144\x69\x64\151\153\141\156\137\151\142\x75" => $this->input->post("\x70\x65\x6e\144\x69\144\151\x6b\141\156\137\x69\x62\x75", true), "\160\x65\x6b\145\162\152\x61\x61\x6e\137\x69\142\x75" => $this->input->post("\x70\x65\153\145\162\152\x61\141\x6e\x5f\x69\142\x75", true), "\141\154\x61\x6d\141\x74\137\151\x62\x75" => $this->input->post("\141\x6c\x61\x6d\x61\164\137\x69\x62\x75", true), "\156\141\x6d\141\137\x77\141\154\151" => $this->input->post("\156\141\155\x61\137\x77\x61\x6c\x69", true), "\x70\x65\156\144\151\x64\151\153\141\156\137\167\x61\x6c\151" => $this->input->post("\160\x65\x6e\144\151\x64\151\153\x61\x6e\x5f\x77\x61\154\151", true), "\x70\145\153\x65\x72\x6a\141\141\156\137\x77\x61\x6c\151" => $this->input->post("\160\x65\x6b\x65\x72\152\141\x61\x6e\x5f\x77\x61\154\x69", true), "\156\157\x68\x70\137\167\141\x6c\x69" => $this->input->post("\x6e\157\150\x70\137\167\x61\154\x69", true), "\141\x6c\x61\155\141\x74\137\x77\141\x6c\151" => $this->input->post("\141\154\x61\x6d\x61\x74\x5f\167\141\x6c\x69", true), "\164\141\150\x75\x6e\137\x6d\141\163\165\x6b" => $this->input->post("\164\141\150\165\x6e\137\x6d\141\x73\x75\x6b", true), "\x6b\145\x6c\141\x73\x5f\x61\167\141\154" => $this->input->post("\153\145\x6c\x61\163\x5f\x61\x77\141\154", true), "\x74\x67\154\137\154\141\150\x69\x72\x5f\141\x79\141\150" => $this->input->post("\x74\147\154\137\x6c\141\150\151\x72\x5f\141\x79\141\150", true), "\x74\x67\x6c\137\x6c\x61\x68\x69\162\x5f\151\x62\x75" => $this->input->post("\x74\x67\154\137\154\x61\x68\151\x72\x5f\151\142\165", true), "\x74\147\x6c\137\x6c\141\150\151\x72\x5f\167\x61\154\151" => $this->input->post("\164\x67\x6c\137\x6c\141\x68\151\x72\137\x77\141\154\x69", true), "\x73\x65\153\x6f\x6c\x61\x68\x5f\x61\163\x61\x6c" => $this->input->post("\x73\145\x6b\x6f\154\141\x68\137\x61\163\x61\154", true), "\146\157\164\157" => "\165\x70\x6c\157\x61\x64\163\57\x66\x6f\164\157\x5f\163\151\163\167\141\x2f" . $nis . "\56\152\x70\x67"];
        goto te3Wu;
        zE_gH:
        $data["\151\x6e\163\x65\162\x74"] = false;
        goto HNHqs;
        HNHqs:
        $data["\164\x65\170\x74"] = "\x44\141\x74\141\40\x53\165\x64\141\x68\40\141\x64\141\54\40\120\141\163\164\x69\x6b\141\156\x20\x4e\x49\x53\54\40\x64\x61\x6e\x20\116\111\x53\x4e\x20\x62\145\154\x75\155\40\x64\151\147\165\x6e\x61\153\x61\156\x20\x61\x6c\165\x6d\x6e\151\40\154\x61\x69\x6e";
        goto UKhLP;
        gn59P:
        R0aR6:
        goto zE_gH;
        gWS2w:
        if ($this->form_validation->run() == FALSE) {
            goto R0aR6;
        }
        goto NrNrz;
        aoVb9:
        $data["\x74\x65\170\x74"] = "\x41\154\x75\x6d\156\151\x20\x62\145\x72\x68\x61\163\x69\154\x20\x64\x69\160\x65\162\x62\141\150\x61\x72\165\151";
        goto hDQWv;
        fmqWk:
        $u_nisn = $alumni->nisn === $nisn ? '' : "\x7c\151\x73\137\165\156\x69\x71\165\x65\x5b\155\141\x74\x65\162\137\141\x6c\165\155\156\151\56\156\151\163\x6e\135";
        goto wunwz;
        zM6Xp:
        $alumni = $this->master->getAlumniById($id_siswa);
        goto DGC6g;
        hDQWv:
        goto ekCjp;
        goto gn59P;
        xGmy5:
        $nis = $this->input->post("\156\x69\163", true);
        goto OTbbn;
        DGC6g:
        $u_nis = $alumni->nis === $nis ? '' : "\x7c\151\x73\137\165\156\x69\x71\165\145\133\x6d\x61\x74\145\162\137\x61\154\x75\x6d\156\151\x2e\x6e\x69\x73\x5d";
        goto fmqWk;
        wunwz:
        $this->form_validation->set_rules("\156\151\163", "\116\111\x53", "\162\145\x71\x75\x69\x72\145\144\174\156\x75\x6d\x65\162\x69\143\x7c\x74\162\x69\155\174\155\x69\x6e\137\x6c\x65\x6e\147\164\150\x5b\66\x5d\x7c\x6d\141\x78\x5f\154\x65\x6e\147\164\x68\x5b\x33\60\x5d" . $u_nis);
        goto fC6eY;
        OTbbn:
        $nisn = $this->input->post("\156\151\163\156", true);
        goto zM6Xp;
        fC6eY:
        $this->form_validation->set_rules("\156\151\163\156", "\x4e\x49\x53\116", "\162\145\161\x75\x69\162\145\x64\174\x6e\165\155\145\162\151\x63\x7c\164\162\151\x6d\174\x6d\x69\156\x5f\154\x65\156\x67\x74\150\x5b\66\x5d\174\x6d\x61\170\x5f\x6c\145\x6e\x67\x74\x68\x5b\x32\x30\x5d" . $u_nisn);
        goto gWS2w;
        UKhLP:
        ekCjp:
        goto a2Lk2;
        NPBs2:
        $id_siswa = $this->input->post("\x69\x64\x5f\163\x69\163\x77\x61", true);
        goto xGmy5;
        aME2L:
        $data["\151\156\x73\x65\x72\x74"] = $input;
        goto aoVb9;
        a2Lk2:
        $this->output_json($data);
        goto pl7Qx;
        pl7Qx:
    }
    function uploadFile($id_siswa)
    {
        goto ebK5Y;
        F6mIZ:
        $this->db->update("\x6d\x61\163\164\145\x72\137\x73\x69\x73\167\x61");
        goto t9AJ3;
        TTNtJ:
        $config["\x66\x69\154\145\x5f\x6e\x61\155\x65"] = $alumni->nis;
        goto WeWKx;
        J2TvN:
        $data["\x66\x69\154\x65\156\141\x6d\145"] = pathinfo($result["\146\151\154\145\137\156\x61\155\145"], PATHINFO_FILENAME);
        goto CmzRT;
        U6aRF:
        $config["\157\x76\145\162\x77\162\151\164\145"] = true;
        goto TTNtJ;
        b0e_w:
        $this->db->set("\146\x6f\164\157", "\165\x70\x6c\x6f\141\144\163\57\146\157\x74\x6f\x5f\163\151\x73\x77\141\57" . $result["\x66\151\x6c\145\137\156\x61\x6d\x65"]);
        goto ibRHU;
        VEg11:
        $data["\x73\x72\x63"] = base_url() . "\165\x70\x6c\x6f\x61\x64\163\x2f\x66\x6f\164\x6f\x5f\x73\x69\163\x77\141\57" . $result["\146\151\154\145\x5f\x6e\x61\x6d\145"];
        goto J2TvN;
        YM1Bi:
        x9eEI:
        goto WFRDw;
        aUzk3:
        C0R2E:
        goto v9MHB;
        ebK5Y:
        $alumni = $this->master->getAlumniById($id_siswa);
        goto yk4kJ;
        VoNyw:
        $config["\x75\x70\154\157\141\144\137\160\x61\164\150"] = "\x2e\57\x75\x70\154\x6f\141\144\x73\57\x66\x6f\164\157\137\163\x69\163\x77\141\x2f";
        goto LgEBm;
        t9AJ3:
        goto bwUfL;
        goto aUzk3;
        ApnUN:
        $data["\x74\x79\x70\x65"] = $_FILES["\x66\x6f\x74\157"]["\x74\171\160\x65"];
        goto dhvhy;
        dhvhy:
        $data["\163\151\172\145"] = $_FILES["\146\157\x74\x6f"]["\x73\151\x7a\145"];
        goto YM1Bi;
        yk4kJ:
        if (isset($_FILES["\146\157\164\x6f"]["\x6e\x61\x6d\145"])) {
            goto dtDIJ;
        }
        goto dE_PD;
        cD77V:
        bwUfL:
        goto ApnUN;
        dE_PD:
        $data["\x73\162\x63"] = '';
        goto G8_pX;
        GdrY3:
        $data["\x73\x72\x63"] = $this->upload->display_errors();
        goto cD77V;
        GCw4q:
        $result = $this->upload->data();
        goto VEg11;
        ibRHU:
        $this->db->where("\151\144\x5f\x73\151\x73\167\141", $id_siswa);
        goto F6mIZ;
        LgEBm:
        $config["\x61\x6c\x6c\x6f\x77\145\144\137\x74\171\160\x65\x73"] = "\147\151\x66\x7c\152\x70\147\174\160\x6e\x67\174\152\x70\x65\147\x7c\112\120\105\107\x7c\112\x50\x47\x7c\120\x4e\x47\174\x47\x49\x46";
        goto U6aRF;
        G8_pX:
        goto x9eEI;
        goto PANUM;
        PANUM:
        dtDIJ:
        goto VoNyw;
        CmzRT:
        $data["\163\164\141\164\165\163"] = true;
        goto b0e_w;
        WvI6t:
        if (!$this->upload->do_upload("\x66\x6f\164\157")) {
            goto C0R2E;
        }
        goto GCw4q;
        WeWKx:
        $this->upload->initialize($config);
        goto WvI6t;
        v9MHB:
        $data["\163\x74\x61\x74\165\163"] = false;
        goto GdrY3;
        WFRDw:
        $this->output_json($data);
        goto cKDr0;
        cKDr0:
    }
    function deleteFoto()
    {
        goto zCUv9;
        rNE2b:
        $file_name = str_replace(base_url(), '', $src);
        goto ViB2c;
        gbTHq:
        echo "\x46\x69\154\x65\40\x44\x65\x6c\145\164\145\40\123\x75\x63\143\x65\163\x73\146\x75\154\154\171";
        goto sOPn_;
        ViB2c:
        unlink($file_name);
        goto gbTHq;
        zCUv9:
        $src = $this->input->post("\x73\x72\x63");
        goto rNE2b;
        sOPn_:
    }
    public function delete()
    {
        goto benrz;
        Ajjny:
        if (!$this->master->delete("\155\141\163\x74\x65\x72\x5f\x73\x69\x73\167\141", $chk, "\151\x64\137\x73\x69\x73\x77\x61")) {
            goto KR6A7;
        }
        goto ToHkq;
        benrz:
        $chk = $this->input->post("\x63\x68\x65\143\153\145\x64", true);
        goto WKn76;
        ToHkq:
        $this->output_json(["\163\x74\141\164\165\163" => true, "\x74\157\164\141\154" => count($chk)]);
        goto Xux63;
        lyL3R:
        $this->output_json(["\x73\x74\141\x74\165\x73" => false]);
        goto RHSqT;
        RHSqT:
        cujqP:
        goto nxALw;
        B01xX:
        p8gao:
        goto lyL3R;
        WKn76:
        if (!$chk) {
            goto p8gao;
        }
        goto Ajjny;
        Xux63:
        KR6A7:
        goto OY6Pg;
        OY6Pg:
        goto cujqP;
        goto B01xX;
        nxALw:
    }
    public function previewExcel()
    {
        goto USabK;
        lxLFI:
        goto wlVlb;
        goto ht5BR;
        U1nZV:
        $config["\145\x6e\143\162\x79\x70\x74\x5f\x6e\141\155\x65"] = true;
        goto mOi_H;
        UMs0M:
        die;
        goto sOave;
        OoL1z:
        $i = 1;
        goto EkHZa;
        efIDV:
        $data = [];
        goto OoL1z;
        sOave:
        alo31:
        goto hATnR;
        xLUd5:
        if (!$this->upload->do_upload("\165\160\x6c\157\x61\144\x5f\146\151\154\145")) {
            goto I7JhW;
        }
        goto Vg45J;
        nCnaT:
        switch ($ext) {
            case "\56\x78\x6c\x73\x78":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto TVM0s;
            case "\56\x78\154\x73":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto TVM0s;
            case "\56\x63\163\x76":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto TVM0s;
            default:
                echo "\x75\x6e\153\156\x6f\167\156\40\146\x69\154\145\x20\x65\170\x74";
                die;
        }
        goto z14SZ;
        tAxCf:
        $config["\x61\x6c\x6c\x6f\167\x65\x64\x5f\x74\x79\160\x65\x73"] = "\170\154\x73\174\x78\154\163\170\174\x63\163\166";
        goto WyrLB;
        vcGnL:
        $spreadsheet = $reader->load($file);
        goto Ax6vp;
        WyrLB:
        $config["\x6d\x61\x78\137\163\151\172\x65"] = 2048;
        goto U1nZV;
        tlIxB:
        TVM0s:
        goto vcGnL;
        d2Xtt:
        ULcLu:
        goto Cw7x1;
        tswUU:
        if (!($i < count($sheetData))) {
            goto WQrga;
        }
        goto POgny;
        L0DFg:
        $error = $this->upload->display_errors();
        goto n6kG9;
        egrD3:
        unlink($file);
        goto e8ClU;
        DJlLY:
        goto alo31;
        goto Fj47a;
        T60ZT:
        $ext = $this->upload->data("\146\151\154\x65\x5f\x65\x78\164");
        goto nCnaT;
        ht5BR:
        WQrga:
        goto egrD3;
        USabK:
        $config["\x75\x70\154\157\x61\144\x5f\160\141\164\150"] = "\x2e\57\x75\x70\x6c\x6f\x61\x64\x73\57\x69\155\160\157\162\x74\x2f";
        goto tAxCf;
        z14SZ:
        FmyTF:
        goto tlIxB;
        y2zUG:
        GYtPP:
        goto d2Xtt;
        POgny:
        if (!($sheetData[$i][0] != null)) {
            goto GYtPP;
        }
        goto RDC1j;
        Ax6vp:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto efIDV;
        Vg45J:
        $file = $this->upload->data("\146\x75\154\x6c\137\160\x61\x74\x68");
        goto T60ZT;
        mOi_H:
        $this->upload->initialize($config);
        goto xLUd5;
        Fj47a:
        I7JhW:
        goto L0DFg;
        RDC1j:
        $data[] = ["\x6e\151\x73\x6e" => str_replace("\x27", '', $sheetData[$i][1]), "\x6e\151\x73" => str_replace("\47", '', $sheetData[$i][2]), "\156\141\155\x61" => $sheetData[$i][3], "\x6a\145\x6e\x69\x73\x5f\153\x65\x6c\x61\155\x69\156" => $sheetData[$i][4], "\x75\x73\x65\162\x6e\141\x6d\x65" => $sheetData[$i][5], "\x70\141\x73\163\167\157\162\x64" => $sheetData[$i][6], "\x74\x65\155\x70\141\164\x5f\x6c\141\150\151\162" => $sheetData[$i][10], "\x74\141\156\x67\x67\x61\154\x5f\154\x61\x68\x69\x72" => $sheetData[$i][11], "\x61\147\141\155\141" => $sheetData[$i][12], "\x73\x74\141\164\165\x73\x5f\x6b\x65\x6c\165\141\x72\147\141" => $sheetData[$i][16], "\x61\x6e\x61\153\x5f\153\145" => $sheetData[$i][15], "\x61\154\x61\155\x61\164" => $sheetData[$i][17], "\162\164" => $sheetData[$i][18], "\x72\x77" => $sheetData[$i][19], "\153\x65\x6c\x75\x72\141\150\x61\x6e" => $sheetData[$i][20], "\x6b\145\143\141\x6d\x61\164\x61\x6e" => $sheetData[$i][21], "\x6b\x61\x62\165\x70\141\164\145\x6e" => $sheetData[$i][22], "\x70\x72\157\x76\151\156\x73\x69" => $sheetData[$i][23], "\x6b\157\144\x65\137\160\157\163" => $sheetData[$i][24], "\x68\x70" => str_replace("\x27", '', $sheetData[$i][13]), "\x6e\x61\155\x61\x5f\141\171\141\x68" => $sheetData[$i][25], "\156\157\150\x70\x5f\141\x79\x61\x68" => str_replace("\x27", '', $sheetData[$i][29]), "\160\x65\156\x64\x69\x64\151\153\141\156\137\141\x79\x61\x68" => $sheetData[$i][27], "\160\145\x6b\x65\x72\152\141\141\156\x5f\x61\x79\141\150" => $sheetData[$i][28], "\141\x6c\x61\x6d\x61\x74\137\x61\x79\141\150" => $sheetData[$i][30], "\156\x61\x6d\141\137\151\x62\x75" => $sheetData[$i][31], "\x6e\x6f\x68\x70\x5f\151\142\x75" => str_replace("\47", '', $sheetData[$i][35]), "\x70\x65\x6e\144\151\144\x69\153\x61\x6e\137\151\x62\165" => $sheetData[$i][33], "\x70\x65\153\145\x72\152\141\141\156\137\151\x62\165" => $sheetData[$i][34], "\141\x6c\x61\155\x61\x74\x5f\151\x62\165" => $sheetData[$i][36], "\156\141\155\x61\x5f\x77\141\154\151" => $sheetData[$i][37], "\x70\145\156\144\151\x64\x69\x6b\141\156\x5f\x77\141\154\x69" => $sheetData[$i][39], "\160\x65\153\x65\x72\x6a\x61\141\156\137\x77\x61\154\x69" => $sheetData[$i][40], "\x6e\157\150\x70\137\x77\x61\154\151" => str_replace("\x27", '', $sheetData[$i][41]), "\141\x6c\x61\155\x61\164\137\167\x61\154\x69" => $sheetData[$i][42], "\x74\141\150\x75\156\x5f\155\x61\x73\165\153" => $sheetData[$i][8], "\x6b\145\154\141\163\137\x61\167\x61\154" => $sheetData[$i][7], "\x74\147\154\137\x6c\x61\150\151\x72\137\141\x79\x61\150" => $sheetData[$i][26], "\x74\x67\154\x5f\x6c\141\150\x69\x72\137\x69\x62\165" => $sheetData[$i][32], "\x74\147\x6c\137\x6c\x61\x68\x69\x72\137\x77\141\x6c\x69" => $sheetData[$i][38], "\x73\x65\x6b\x6f\x6c\141\x68\x5f\x61\163\x61\154" => $sheetData[$i][9], "\151\144\x5f\x73\151\163\167\x61" => isset($sheetData[$i][43]) ? $sheetData[$i][43] : ''];
        goto y2zUG;
        EkHZa:
        wlVlb:
        goto tswUU;
        n6kG9:
        echo $error;
        goto UMs0M;
        Cw7x1:
        $i++;
        goto lxLFI;
        e8ClU:
        echo json_encode($data);
        goto DJlLY;
        hATnR:
    }
    public function do_import()
    {
        goto liLrH;
        liLrH:
        $input = json_decode($this->input->post("\141\154\x75\x6d\156\x69", true));
        goto aKyrX;
        XTDqr:
        foreach ($input as $key1 => $val1) {
            goto VPtA2;
            fhQEz:
            $data["\x66\157\164\157"] = "\x75\x70\154\x6f\x61\x64\163\57\x66\157\164\157\137\x73\151\163\167\141\x2f" . $data["\x6e\x69\x73"] . "\56\x6a\x70\x67";
            goto nHT0m;
            eimLS:
            rJZPO:
            goto fhQEz;
            Obktf:
            OJCUV:
            goto CgxF6;
            VPtA2:
            $data = [];
            goto vvmzc;
            nHT0m:
            $save = $this->db->insert("\x6d\x61\x73\x74\145\162\137\163\151\163\167\x61", $data);
            goto Obktf;
            vvmzc:
            foreach (((array) $input)[$key1] as $key => $val) {
                $data[$key] = $val;
                DaHqi:
            }
            goto eimLS;
            CgxF6:
        }
        goto xflZN;
        SzaI7:
        $this->db->trans_complete();
        goto cTjzO;
        aKyrX:
        $this->db->trans_start();
        goto XTDqr;
        cTjzO:
        $this->output->set_content_type("\141\x70\160\x6c\151\x63\x61\164\x69\157\156\57\x6a\x73\x6f\156")->set_output($save);
        goto Erso2;
        xflZN:
        pzvUQ:
        goto SzaI7;
        Erso2:
    }
    public function editKelulusan()
    {
        goto V3AZF;
        TfKDX:
        $this->db->set("\x6e\157\x5f\x69\x6a\141\172\141\150", $no_ijazah);
        goto pLRIC;
        sDU_k:
        $this->db->set("\x74\x61\x68\x75\156\137\x6c\x75\154\165\x73", $thn);
        goto TfKDX;
        HLelE:
        $status = $this->db->update("\x6d\x61\x73\164\145\162\137\x73\x69\x73\x77\141");
        goto Koek1;
        kxURi:
        $kelas_akhir = $this->input->post("\153\145\x6c\141\163\x5f\141\x6b\x68\151\x72", true);
        goto Kx5wt;
        IT9SA:
        $no_ijazah = $this->input->post("\x6e\x6f\x5f\151\x6a\141\172\141\x68", true);
        goto kxURi;
        pLRIC:
        $this->db->where("\151\144\x5f\163\151\x73\x77\141", $id_siswa);
        goto HLelE;
        Koek1:
        $data["\163\x74\x61\164\x75\163"] = $status;
        goto ipEVq;
        ipEVq:
        $this->output_json($data);
        goto gNyof;
        RGV1m:
        $thn = $this->input->post("\x74\141\x68\x75\156\x5f\x6c\165\154\x75\x73", true);
        goto IT9SA;
        V3AZF:
        $id_siswa = $this->input->post("\151\144\x5f\163\151\x73\x77\141", true);
        goto RGV1m;
        Kx5wt:
        $this->db->set("\x6b\145\154\141\x73\x5f\141\153\150\x69\162", $kelas_akhir);
        goto sDU_k;
        gNyof:
    }
}
