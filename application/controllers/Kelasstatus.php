<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelasstatus extends CI_Controller
{
    public function __construct()
    {
        goto fTrsQ;
        rQ8E8:
        $this->load->library(["\x64\141\x74\141\x74\x61\142\154\145\x73", "\146\x6f\x72\155\137\x76\x61\154\x69\x64\141\164\x69\x6f\156"]);
        goto q0Snr;
        NTTLl:
        goto Yz_Hn;
        goto LkUMK;
        DrtJ8:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\162\x75"))) {
            goto h618a;
        }
        goto JggcA;
        LkUMK:
        Sl2HO:
        goto ia49J;
        razxz:
        Yz_Hn:
        goto rQ8E8;
        mzLnt:
        h618a:
        goto NTTLl;
        Fb6B7:
        $this->form_validation->set_error_delimiters('', '');
        goto QpSZh;
        h61H3:
        $this->load->model("\104\x61\x73\150\142\x6f\x61\162\x64\137\x6d\x6f\x64\145\154", "\x64\x61\x73\x68\x62\x6f\141\162\x64");
        goto cuabJ;
        fTrsQ:
        parent::__construct();
        goto QXA6D;
        cuabJ:
        $this->load->model("\104\162\x6f\x70\144\157\x77\x6e\x5f\155\x6f\x64\x65\154", "\144\162\157\x70\x64\x6f\167\156");
        goto PFTUY;
        ia49J:
        redirect("\141\x75\x74\x68");
        goto razxz;
        PFTUY:
        $this->load->model("\113\x65\154\x61\163\x5f\x6d\157\x64\145\154", "\x6b\145\x6c\x61\163");
        goto Fb6B7;
        QXA6D:
        if (!$this->ion_auth->logged_in()) {
            goto Sl2HO;
        }
        goto DrtJ8;
        q0Snr:
        $this->load->model("\115\x61\163\164\x65\x72\x5f\x6d\x6f\144\145\x6c", "\155\141\163\164\x65\x72");
        goto h61H3;
        JggcA:
        show_error("\110\x61\x6e\171\141\40\101\x64\155\x69\156\x69\163\164\162\x61\x74\x6f\x72\40\171\x61\156\147\40\144\x69\x62\145\162\x69\x20\150\141\x6b\40\x75\156\164\165\153\40\155\x65\156\147\x61\153\x73\145\163\40\x68\x61\x6c\141\155\x61\156\40\151\156\151\54\x20\74\141\x20\x68\x72\x65\x66\75\x22" . base_url("\144\x61\163\x68\x62\157\x61\x72\144") . "\42\x3e\x4b\145\x6d\142\x61\x6c\151\x20\x6b\145\40\x6d\145\156\165\40\141\167\141\x6c\x3c\x2f\x61\x3e", 403, "\x41\153\163\x65\x73\x20\124\x65\162\154\141\162\141\156\x67");
        goto mzLnt;
        QpSZh:
    }
    public function output_json($data, $encode = true)
    {
        goto g2xDH;
        S_KpB:
        $this->output->set_content_type("\x61\x70\160\154\x69\x63\141\164\x69\157\x6e\x2f\152\163\157\x6e")->set_output($data);
        goto uOnd5;
        g2xDH:
        if (!$encode) {
            goto cRolU;
        }
        goto IZRF3;
        IZRF3:
        $data = json_encode($data);
        goto v2v1i;
        v2v1i:
        cRolU:
        goto S_KpB;
        uOnd5:
    }
    public function index()
    {
        goto Q_4ND;
        mxbvE:
        $this->load->view("\153\x65\x6c\x61\163\x2f\x73\164\x61\x74\165\x73\x2f\x64\x61\x74\x61");
        goto Kapa1;
        a5gbg:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto wacaE;
        fYv08:
        $this->load->view("\137\x74\145\155\160\x6c\141\x74\145\x73\57\x64\141\163\x68\142\x6f\141\162\144\x2f\x5f\x66\x6f\x6f\164\145\x72");
        goto u9IA_;
        Mc7oO:
        foreach ($mapel as $m) {
            goto HOqrb;
            HOqrb:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto eU27F;
            hWE72:
            CqomY:
            goto y8dSy;
            iJ9DH:
            zGJfE:
            goto hWE72;
            eU27F:
            foreach ($m->kelas_mapel as $kls) {
                $arrKelas[$kls->kelas] = $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas);
                WZrW4:
            }
            goto iJ9DH;
            y8dSy:
        }
        goto v9DMY;
        l1Lvb:
        $data["\147\165\162\x75"] = $guru;
        goto h6RIh;
        HXVlY:
        $data["\x69\x64\137\147\x75\x72\x75"] = $guru->id_guru;
        goto rrXG_;
        vGZSp:
        $arrId = [];
        goto mrYLR;
        mrYLR:
        if (!($mapel != null)) {
            goto cNrtM;
        }
        goto hzQm8;
        oZis7:
        $this->load->view("\x6d\145\155\142\x65\x72\163\x2f\x67\x75\162\165\57\164\145\x6d\x70\x6c\x61\164\x65\163\x2f\x68\x65\x61\x64\145\162", $data);
        goto mxbvE;
        Q_4ND:
        $user = $this->ion_auth->user()->row();
        goto z228L;
        v9DMY:
        nFohR:
        goto T0TCE;
        NyXvq:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto Xpe0W;
        P0pYB:
        $data["\x67\165\x72\x75\163"] = $guru;
        goto jHcAf;
        h6RIh:
        $data["\x67\x75\x72\165\x73"] = $nguru;
        goto HXVlY;
        dw7Hr:
        if (!($mapel != null)) {
            goto R73he;
        }
        goto Mc7oO;
        rBOSK:
        cNrtM:
        goto aAQ2R;
        hzQm8:
        foreach ($mapel[0]->kelas_mapel as $id_mapel) {
            array_push($arrId, $id_mapel->kelas);
            rEbH7:
        }
        goto A30NT;
        Kapa1:
        $this->load->view("\x6d\x65\155\142\145\x72\163\57\x67\x75\x72\165\x2f\164\x65\155\160\154\141\x74\145\163\x2f\146\x6f\x6f\164\145\x72");
        goto x01bZ;
        wBQOK:
        $data["\x74\x70\137\141\143\164\x69\x76\145"] = $tp;
        goto a5gbg;
        dCtP7:
        $this->load->view("\137\x74\x65\x6d\160\154\141\164\x65\163\57\x64\x61\x73\150\142\157\141\x72\144\x2f\x5f\150\145\141\x64\x65\162", $data);
        goto CNUb5;
        NZyPf:
        $arrKelas = [];
        goto dw7Hr;
        z228L:
        $data = ["\165\x73\145\162" => $user, "\x6a\165\144\165\154" => "\x4e\151\154\x61\151\40\x48\x61\x72\151\x61\156\40\x53\151\x73\167\x61", "\x73\x75\x62\152\x75\x64\x75\154" => "\116\151\x6c\x61\x69", "\x73\x65\164\164\151\x6e\x67" => $this->dashboard->getSetting()];
        goto VQ1pn;
        wacaE:
        $data["\163\x6d\x74\137\141\143\164\151\166\145"] = $smt;
        goto TOEMC;
        sX9M8:
        $guru = $this->dropdown->getAllGuru();
        goto P0pYB;
        YRRKi:
        $data["\x6d\141\160\145\x6c\x73"] = $this->dropdown->getAllMapel();
        goto dCtP7;
        qP4p6:
        $smt = $this->dashboard->getSemesterActive();
        goto VU3PA;
        T0TCE:
        R73he:
        goto vGZSp;
        NNOmG:
        $data["\x70\162\157\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto sX9M8;
        x01bZ:
        goto G7t8R;
        goto qCVI5;
        aAQ2R:
        $data["\155\x61\x70\145\154\x73"] = $arrMapel;
        goto r830y;
        VQ1pn:
        $tp = $this->dashboard->getTahunActive();
        goto qP4p6;
        bSSbG:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto AzVci;
        r830y:
        $data["\x6b\x65\x6c\141\163"] = $arrKelas;
        goto oZis7;
        TOEMC:
        if ($this->ion_auth->is_admin()) {
            goto xxo4I;
        }
        goto NyXvq;
        CNUb5:
        $this->load->view("\153\145\154\x61\x73\57\x73\164\x61\x74\x75\x73\x2f\x64\x61\x74\x61");
        goto fYv08;
        qCVI5:
        xxo4I:
        goto NNOmG;
        Xpe0W:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto l1Lvb;
        rrXG_:
        $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt);
        goto bSSbG;
        A30NT:
        fPfqy:
        goto rBOSK;
        jHcAf:
        $data["\x6b\x65\154\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto YRRKi;
        AzVci:
        $arrMapel = [];
        goto NZyPf;
        VU3PA:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto wBQOK;
        u9IA_:
        G7t8R:
        goto QfH0T;
        QfH0T:
    }
    public function getMateriGuru()
    {
        goto z5TSJ;
        z5TSJ:
        $id_guru = $this->input->get("\x69\x64", true);
        goto VeC6e;
        Gxwwu:
        $materi = $this->kelas->getAllKodeMateri($tp->id_tp, $smt->id_smt, $id_guru);
        goto BXsZk;
        VeC6e:
        $tp = $this->dashboard->getTahunActive();
        goto b_hqT;
        GkkSW:
        k_Z0U:
        goto esO4c;
        oLaLG:
        foreach ($materi as $m) {
            goto LkUAr;
            LkUAr:
            $kode_mapel = $m->kode_mapel == null ? "\x2d\x2d" : $m->kode_mapel;
            goto Cfgl_;
            jq0OD:
            Qv3iM:
            goto gwNLc;
            L2aXj:
            goto Qv3iM;
            goto O0_zq;
            O0_zq:
            Lh2dv:
            goto hbvQ5;
            gwNLc:
            I8_LT:
            goto A_oux;
            hbvQ5:
            $arrKelasMateri[] = ["\151\x64\137\155\x61\x74\145\x72\x69" => $m->id_materi, "\151\x64\x5f\x6b\152\x6d" => $m->id_kjm, "\152\141\144\167\141\154" => $m->jadwal_materi, "\153\x6f\144\x65" => $m->kode_materi, "\155\141\160\x65\x6c" => $kode_mapel, "\153\145\x6c\141\163" => unserialize($m->materi_kelas)];
            goto jq0OD;
            Cfgl_:
            if ($m->jenis == "\61") {
                goto Lh2dv;
            }
            goto P1jxe;
            P1jxe:
            $arrKelasTugas[] = ["\x69\x64\137\155\141\x74\x65\162\151" => $m->id_materi, "\x69\144\137\x6b\x6a\x6d" => $m->id_kjm, "\x6a\x61\x64\167\x61\154" => $m->jadwal_materi, "\153\157\x64\145" => $m->kode_materi, "\155\141\x70\145\154" => $kode_mapel, "\x6b\145\154\x61\x73" => unserialize($m->materi_kelas)];
            goto L2aXj;
            A_oux:
        }
        goto GkkSW;
        BXsZk:
        $arrKelasMateri = [];
        goto uQm12;
        b_hqT:
        $smt = $this->dashboard->getSemesterActive();
        goto Gxwwu;
        uQm12:
        $arrKelasTugas = [];
        goto oLaLG;
        esO4c:
        $this->output_json(array("\x6d\141\164\x65\162\x69" => $arrKelasMateri, "\164\x75\147\x61\163" => $arrKelasTugas));
        goto bH2Pw;
        bH2Pw:
    }
    public function getMateriMapel()
    {
        goto CG6Kt;
        LbbmS:
        $arrKelasTugas = [];
        goto hI5P1;
        hI5P1:
        $arrKelas = [];
        goto Jt3G6;
        O7bxQ:
        $this->output_json(array("\x6d\x61\x74\145\162\x69" => $arrKelasMateri, "\x74\165\147\141\163" => $arrKelasTugas, "\153\145\x6c\x61\163" => $arrKelas));
        goto uSOUu;
        CG6Kt:
        $id_mapel = $this->input->get("\151\144", true);
        goto Ge1Ia;
        Ge1Ia:
        $tp = $this->dashboard->getTahunActive();
        goto BOcIH;
        h8DTF:
        JxSaJ:
        goto O7bxQ;
        J12RK:
        $materi = $this->kelas->getKodeMateriMapel($tp->id_tp, $smt->id_smt, $id_mapel);
        goto vaONY;
        vaONY:
        $arrKelasMateri = [];
        goto LbbmS;
        BOcIH:
        $smt = $this->dashboard->getSemesterActive();
        goto J12RK;
        Jt3G6:
        foreach ($materi as $m) {
            goto X11MD;
            jNlX9:
            n2d3d:
            goto CFbWR;
            l21sm:
            goto yjlnr;
            goto ZLd22;
            qU5Ft:
            IfYKz:
            goto YnBe_;
            R0h55:
            aYnxf:
            goto HXwNd;
            xb3FB:
            array_push($arrKelas[$m->jenis], $m->id_kelas);
            goto l21sm;
            y_8km:
            Z5jC3:
            goto myOFS;
            CQiyS:
            array_push($arrKelasMateri[$m->id_kelas], $arrMateri);
            goto aVI7K;
            aVuYU:
            if ($m->jenis == "\x31") {
                goto aYnxf;
            }
            goto OJ8Is;
            Ylt6Q:
            goto k3mW7;
            goto R0h55;
            CFbWR:
            yjlnr:
            goto VHqfD;
            HXwNd:
            $arrMateri = ["\x69\x64\137\155\141\164\145\x72\151" => $m->id_materi, "\x69\144\x5f\x6b\152\x6d" => $m->id_kjm, "\152\141\144\167\x61\x6c" => $m->jadwal_materi, "\x6b\x6f\144\x65" => $m->kode_materi, "\x6d\141\x70\x65\154" => $kode_mapel, "\x67\x75\162\165" => $m->nama_guru];
            goto Tz_EL;
            ZLd22:
            lRZgE:
            goto rYiuq;
            myOFS:
            array_push($arrKelasMateri[$m->id_kelas], $arrTugas);
            goto DIzwe;
            ika93:
            $arrKelasMateri[$m->id_kelas] = [];
            goto CQiyS;
            aKGQ6:
            array_push($arrKelasMateri[$m->id_kelas], $arrMateri);
            goto qU5Ft;
            cQfAy:
            $arrKelas[$m->jenis] = [];
            goto xb3FB;
            aVI7K:
            goto IfYKz;
            goto AVjOb;
            rYiuq:
            if (in_array($m->id_kelas, $arrKelas[$m->jenis])) {
                goto n2d3d;
            }
            goto viIf7;
            DIzwe:
            yccAf:
            goto Ylt6Q;
            SUJ1Z:
            array_push($arrKelasTugas[$m->id_kelas], $arrTugas);
            goto MRJ8T;
            VHqfD:
            plG61:
            goto hnxn1;
            X11MD:
            $kode_mapel = $m->kode_mapel == null ? "\x2d\55" : $m->kode_mapel;
            goto aVuYU;
            RhfKk:
            if (isset($arrKelas[$m->jenis])) {
                goto lRZgE;
            }
            goto cQfAy;
            AVjOb:
            QnRHn:
            goto aKGQ6;
            MRJ8T:
            goto yccAf;
            goto y_8km;
            E97tj:
            $arrKelasTugas[$m->id_kelas] = [];
            goto SUJ1Z;
            YnBe_:
            k3mW7:
            goto RhfKk;
            Tz_EL:
            if (isset($arrKelasMateri[$m->id_kelas])) {
                goto QnRHn;
            }
            goto ika93;
            OJ8Is:
            $arrTugas = ["\151\x64\x5f\x6d\x61\x74\145\162\151" => $m->id_materi, "\x69\x64\137\x6b\152\x6d" => $m->id_kjm, "\152\x61\x64\167\141\154" => $m->jadwal_materi, "\x6b\157\x64\x65" => $m->kode_materi, "\x6d\x61\160\x65\154" => $kode_mapel, "\x67\165\x72\x75" => $m->nama_guru];
            goto Y5Wag;
            Y5Wag:
            if (isset($arrKelasTugas[$m->id_kelas])) {
                goto Z5jC3;
            }
            goto E97tj;
            viIf7:
            array_push($arrKelas[$m->jenis], $m->id_kelas);
            goto jNlX9;
            hnxn1:
        }
        goto h8DTF;
        uSOUu:
    }
    public function loadStatus()
    {
        goto CyLPf;
        CyLPf:
        $label = $this->input->post("\154\141\x62\x65\x6c", true);
        goto OE5l_;
        dWcIQ:
        $this->output_json(["\154\x6f\x67" => $log, "\152\x61\x64\x77\x61\x6c" => $info]);
        goto sSVzc;
        UwXLX:
        $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt);
        goto Pl1w8;
        wv_9H:
        bgsIP:
        goto hnuMF;
        Pl1w8:
        $logs = $this->kelas->getStatusMateriSiswa($id_kjm);
        goto WxG8N;
        hnuMF:
        $info = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas);
        goto Sv8MC;
        Sv8MC:
        if (!($info != null)) {
            goto ZZ6Ym;
        }
        goto u5lbb;
        i9JoO:
        $id_tp = $this->master->getTahunActive()->id_tp;
        goto YhOfQ;
        uAWkq:
        ZZ6Ym:
        goto dWcIQ;
        YhOfQ:
        $id_smt = $this->master->getSemesterActive()->id_smt;
        goto UwXLX;
        OhfbE:
        $id_kjm = $this->input->post("\x69\144\x5f\153\152\x6d", true);
        goto i9JoO;
        u5lbb:
        $info->istirahat = unserialize($info->istirahat);
        goto uAWkq;
        OE5l_:
        $id_kelas = $this->input->post("\151\144\x5f\153\145\x6c\141\163", true);
        goto OhfbE;
        WxG8N:
        $log = [];
        goto OW1XQ;
        OW1XQ:
        foreach ($siswa as $s) {
            goto ag60c;
            DaaPG:
            $selesai = isset($logs[$s->id_siswa]) ? $logs[$s->id_siswa]->finish_time : null;
            goto XE7eh;
            XE7eh:
            $log[$s->id_siswa] = ["\x6e\x61\x6d\141" => $s->nama, "\x6e\151\163" => $s->nis, "\153\x65\154\x61\x73" => $s->nama_kelas, "\154\x6f\147\x69\x6e" => $this->kelas->getLoginSiswa($s->username), "\155\165\154\x61\151" => $mulai, "\163\145\x6c\145\163\x61\151" => $selesai, "\x74\x65\170\164" => isset($logs[$s->id_siswa]) ? $logs[$s->id_siswa]->text : '', "\156\151\154\141\151" => isset($logs[$s->id_siswa]) ? $logs[$s->id_siswa]->nilai : '', "\x63\141\164\x61\164\x61\156" => isset($logs[$s->id_siswa]) ? $logs[$s->id_siswa]->catatan : '', "\x6a\x61\x6d\x5f\x6b\145" => isset($logs[$s->id_siswa]) ? $logs[$s->id_siswa]->jam_ke : null, "\x6a\141\144\x77\x61\154\137\155\x61\164\x65\162\x69" => isset($logs[$s->id_siswa]) ? $logs[$s->id_siswa]->jadwal_materi : null, "\x66\151\154\145" => isset($logs[$s->id_siswa]) && $logs[$s->id_siswa]->file != null ? unserialize($logs[$s->id_siswa]->file) : []];
            goto Wxq2E;
            Wxq2E:
            fWsiT:
            goto raTFX;
            ag60c:
            $mulai = isset($logs[$s->id_siswa]) ? $logs[$s->id_siswa]->log_time : null;
            goto DaaPG;
            raTFX:
        }
        goto wv_9H;
        sSVzc:
    }
    public function saveNilai()
    {
        goto agbUi;
        FC7a1:
        $this->db->where("\x69\x64\137\154\x6f\147", $id_log);
        goto y5Oz1;
        UckYg:
        $update = $this->db->insert("\154\157\147\x5f\155\141\x74\x65\162\x69", $insert);
        goto hM128;
        bUF8S:
        Ik3M6:
        goto Zt1rz;
        zKjfb:
        $this->db->set("\151\x64\x5f\x6c\x6f\x67", $id_log);
        goto UckYg;
        v6Ix6:
        i3C46:
        goto f40DR;
        fWTYx:
        $label = $this->input->post("\154\x61\x62\145\x6c", true);
        goto Wz1BY;
        y5Oz1:
        $q = $this->db->get("\154\x6f\147\137\155\141\164\x65\162\151");
        goto Slfly;
        Zt1rz:
        $this->db->where("\x69\144\137\154\157\147", $id_log);
        goto RyJ_s;
        agbUi:
        $method = $this->input->post("\x6d\x65\x74\150\x6f\144", true);
        goto fWTYx;
        RyJ_s:
        $update = $this->db->update("\x6c\157\147\137\155\x61\164\145\x72\151", $insert);
        goto v6Ix6;
        xDj5N:
        $insert = ["\x6e\151\x6c\x61\151" => $nilai, "\x63\x61\164\141\x74\x61\156" => $catatan];
        goto FC7a1;
        Slfly:
        if ($q->num_rows() > 0) {
            goto Ik3M6;
        }
        goto zKjfb;
        aCUvC:
        $nilai = $this->input->post("\x6e\151\x6c\x61\x69", true);
        goto MqRSh;
        Wz1BY:
        $id_log = $this->input->post("\151\x64\x5f\x6c\157\x67", true);
        goto aCUvC;
        hM128:
        goto i3C46;
        goto bUF8S;
        f40DR:
        $this->output_json($update);
        goto EvVSE;
        MqRSh:
        $catatan = $this->input->post("\x63\x61\x74\x61\164\141\x6e", true);
        goto xDj5N;
        EvVSE:
    }
}
