<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Bukurapor extends CI_Controller
{
    public function __construct()
    {
        goto N0sgD;
        N0sgD:
        parent::__construct();
        goto k_VJR;
        xiSRr:
        eU99x:
        goto MCU9K;
        DXEsF:
        show_error("\x48\141\156\x79\141\40\x41\144\155\x69\x6e\x69\x73\x74\x72\141\164\x6f\x72\x20\171\x61\156\147\40\144\151\142\x65\162\151\x20\x68\141\x6b\40\165\156\x74\x75\x6b\x20\x6d\x65\x6e\147\x61\153\x73\145\163\40\150\141\154\x61\155\x61\x6e\40\151\x6e\151\54\x20\x3c\x61\x20\x68\x72\145\146\x3d\42" . base_url("\x64\x61\x73\150\x62\157\141\x72\x64") . "\x22\76\113\145\155\x62\x61\154\151\40\153\x65\40\x6d\x65\x6e\x75\x20\x61\x77\141\154\x3c\x2f\141\x3e", 403, "\x41\x6b\x73\145\x73\40\124\x65\x72\154\x61\x72\x61\156\x67");
        goto Ud9fE;
        k_VJR:
        if (!$this->ion_auth->logged_in()) {
            goto saHUR;
        }
        goto jGLrh;
        jGLrh:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) {
            goto oXEiO;
        }
        goto DXEsF;
        Rr0fs:
        $this->load->model("\x4b\145\154\141\x73\137\155\157\144\145\x6c", "\153\x65\x6c\141\x73");
        goto WcyEI;
        MCU9K:
        $this->load->library(["\144\141\x74\x61\x74\x61\x62\x6c\x65\x73", "\x66\x6f\x72\155\137\166\141\154\x69\144\141\x74\x69\157\x6e"]);
        goto yffjE;
        yffjE:
        $this->load->model("\104\141\163\x68\x62\x6f\141\162\x64\x5f\x6d\157\144\145\154", "\x64\141\163\150\142\x6f\x61\162\144");
        goto gocgi;
        gocgi:
        $this->load->model("\122\141\x70\157\162\137\x6d\157\144\x65\154", "\x72\x61\x70\x6f\162");
        goto Rr0fs;
        WcyEI:
        $this->load->model("\x44\162\157\x70\144\x6f\167\156\137\155\x6f\x64\x65\x6c", "\144\162\x6f\x70\x64\157\x77\156");
        goto D_AUy;
        K88gV:
        goto eU99x;
        goto IAdTG;
        Ud9fE:
        oXEiO:
        goto K88gV;
        IAdTG:
        saHUR:
        goto aSS20;
        D_AUy:
        $this->load->model("\115\141\163\x74\145\x72\137\x6d\157\x64\145\x6c", "\x6d\141\x73\164\145\x72");
        goto kYSjK;
        aSS20:
        redirect("\141\x75\x74\150");
        goto xiSRr;
        kYSjK:
        $this->form_validation->set_error_delimiters('', '');
        goto OhaVj;
        OhaVj:
    }
    public function output_json($data, $encode = true)
    {
        goto Vu4NY;
        SjKa6:
        NQ0k_:
        goto UHfp7;
        UHfp7:
        $this->output->set_content_type("\x61\x70\x70\154\x69\143\x61\164\151\x6f\x6e\x2f\x6a\x73\157\156")->set_output($data);
        goto fUUgO;
        Vu4NY:
        if (!$encode) {
            goto NQ0k_;
        }
        goto dxVCy;
        dxVCy:
        $data = json_encode($data);
        goto SjKa6;
        fUUgO:
    }
    public function index()
    {
        goto ngtck;
        cKWOV:
        goto elJnT;
        goto nZU5Y;
        dINJW:
        $data["\x70\x72\157\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto UpxzV;
        z96Kh:
        $data["\147\165\162\x75"] = $guru;
        goto nJ8Jn;
        WJlot:
        $data["\163\155\x74\x5f\x6e\141\x6d\145"] = $id_smt != null ? $this->dashboard->getSemesterById($id_smt) : null;
        goto jZ7VL;
        kUqYa:
        $data["\164\160\137\x73\145\x6c\145\x63\164\145\144"] = $id_tp;
        goto Y7AF1;
        Gu9Z9:
        $data["\x6c\x76\x6c\137\153\x65\x6c\x61\x73"] = $kelas != null ? $kelas->level_id : '';
        goto MQVlK;
        dFor0:
        $settingRapor = $this->rapor->getRaporSetting($id_tp, $id_smt);
        goto tsPNy;
        fQjWg:
        yK_tU:
        goto TziA5;
        pLC8D:
        $dummyAbsen = ["\x73" => "\40\55\x20", "\x69" => "\x20\x2d\x20", "\141" => "\40\55\40", "\163\141\162\141\156" => ''];
        goto l_jHb;
        UvkuR:
        if (count($nilai_sikap) > 0) {
            goto iKGtD;
        }
        goto O8TGY;
        N2G0F:
        $user = $this->ion_auth->user()->row();
        goto Gcmks;
        DSlLT:
        dPSpE:
        goto O11vw;
        lsGnP:
        pRoIC:
        goto m9Pf2;
        UrrLj:
        $kelompoks = $this->master->getKodeKelompokMapel();
        goto xylug;
        xp0nz:
        $tp_active = $this->dashboard->getTahunActive();
        goto KCOGu;
        FavBV:
        $data["\163\151\x6b\x61\160"] = $sikap;
        goto NcbwH;
        tsPNy:
        $sikap = [];
        goto qTEKz;
        vUQeS:
        YfhYI:
        goto C1fAj;
        MQVlK:
        $data["\x6d\x61\x70\145\x6c\x73"] = $mapels;
        goto zPRpa;
        dt4ae:
        foreach ($kategori_mapel as $kk => $km) {
            goto fxhuS;
            AoGDU:
            array_push($arrk, $km->kode_kel_mapel);
            goto zBAZQ;
            fxhuS:
            if (in_array($km, $arrk)) {
                goto E_BWW;
            }
            goto AoGDU;
            xtl0y:
            MQheK:
            goto JWrft;
            zBAZQ:
            E_BWW:
            goto xtl0y;
            JWrft:
        }
        goto fQjWg;
        tGG8G:
        RP3_k:
        goto YEgSU;
        GJcvb:
        if ($id_tp != null && $id_smt != null) {
            goto AXv2v;
        }
        goto PzOui;
        NtUQs:
        $desks = [];
        goto xEZwv;
        velyE:
        $data["\x6e\141\x69\x6b"] = $this->rapor->getKenaikanRapor($id_kelas, $id_tp, $id_smt);
        goto tAkrl;
        nw3GK:
        $i++;
        goto cKWOV;
        ECD_Z:
        $this->load->view("\155\x65\155\142\145\x72\x73\x2f\147\165\162\x75\x2f\164\145\155\x70\154\141\x74\x65\x73\57\150\145\x61\x64\145\x72", $data);
        goto DH3sy;
        rM6ya:
        $kelas = isset($all_kls[$id_tp]) && isset($all_kls[$id_tp][$id_smt]) && isset($all_kls[$id_tp][$id_smt][$id_kelas]) ? $all_kls[$id_tp][$id_smt][$id_kelas] : null;
        goto UjliD;
        Jp6JJ:
        $catatans = $this->rapor->getCatatanWaliByKelas($id_kelas, $id_tp, $id_smt);
        goto keuGS;
        XmHIZ:
        zB0vw:
        goto hHYwa;
        MUuVb:
        $mapelEkstra = [];
        goto d6pmB;
        kM15W:
        q0EgK:
        goto RpRc_;
        TziA5:
        $mapels = $this->master->getAllStatusMapel(empty($arrk) ? null : $arrk, isset($jurusan->mapel_peminatan) ? $jurusan->mapel_peminatan : null);
        goto u8Sp6;
        BJPXH:
        iXDUF:
        goto eFEEL;
        wgjcl:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $id_tp, $id_smt);
        goto z96Kh;
        PmNSB:
        $data["\153\x6c\x73\137\x73\x65\154\145\x63\164\x65\x64"] = $id_kelas;
        goto AxARq;
        ZGhnS:
        $fisik[$siswa->id_siswa] = $nf != null ? ["\153\x6f\156\144\x69\163\x69" => unserialize($nf->kondisi), "\x73\155\x74" . $nf->id_smt => ["\164\151\156\147\147\151" => $nf->tinggi, "\x62\145\162\141\164" => $nf->berat], "\163\155\164" . $other => ["\x74\151\156\147\x67\x69" => $nf2 != null ? $nf2->tinggi : '', "\x62\x65\162\x61\164" => $nf2 != null ? $nf2->berat : '']] : $dummyFisik;
        goto YcAdY;
        c8KER:
        $data["\155\141\160\x65\x6c\x5f\x65\153\163\164\162\x61"] = $mapelEkstra;
        goto VmnSC;
        l9I5u:
        $data["\x73\x6d\164\x5f\x61\x63\164\x69\166\145"] = $this->dashboard->getSemesterActive();
        goto kUqYa;
        E6YLr:
        $jurusan = $this->kelas->getJurusanById($kelas->id_jurusan);
        goto UrrLj;
        sDE0s:
        foreach ($nilai_sikap as $nls) {
            goto aitSc;
            m8vfq:
            oqI1h:
            goto XpGAC;
            FOVrk:
            if (!($nls->id_siswa == $id_siswa && $nls->jenis == "\x32")) {
                goto oqI1h;
            }
            goto pqZwu;
            brKby:
            $sikap[$id_siswa][1] = ["\144\145\163\x6b\x72\151\x70\x73\151" => $nls == null ? '' : $nls->deskripsi, "\x70\x72\x65\144\151\153\x61\164" => $nls == null ? $dummySikap : unserialize($nls->nilai)];
            goto icns3;
            pqZwu:
            $sikap[$id_siswa][2] = ["\x64\x65\x73\153\x72\151\160\x73\151" => $nls == null ? '' : $nls->deskripsi, "\160\162\x65\x64\x69\x6b\x61\164" => $nls == null ? $dummySikap : unserialize($nls->nilai)];
            goto m8vfq;
            icns3:
            haONi:
            goto FOVrk;
            aitSc:
            if (!($nls->id_siswa == $id_siswa && $nls->jenis == "\x31")) {
                goto haONi;
            }
            goto brKby;
            XpGAC:
            vp5xa:
            goto oRn7z;
            oRn7z:
        }
        goto XZUR2;
        B_5jl:
        $siswa = $siswas[$i];
        goto Qai_o;
        p6Ydq:
        $data["\152\141\142\x61\x74\x61\x6e"] = null;
        goto dINJW;
        a17tW:
        $data["\153\x65\154\x61\163"] = $kelas != null ? $kelas->nama_kelas : '';
        goto Gu9Z9;
        GP5FE:
        kQJWb:
        goto G52kt;
        zPRpa:
        $data["\x6b\x65\x6c\157\x6d\x70\x6f\x6b\163"] = $kelompoks;
        goto FavBV;
        qTEKz:
        $nilai = [];
        goto HDzZj;
        PzOui:
        $data["\x6b\145\154\141\163\145\163"] = [];
        goto xEVtL;
        CXX7X:
        $this->restoreNilai();
        goto kM15W;
        wXC3W:
        $all_kls = [];
        goto Htrg0;
        SDlKz:
        foreach ($kelases as $key => $row) {
            $all_kls[$row->id_tp][$row->id_smt][$row->id_kelas] = $row;
            OhJzJ:
        }
        goto okRle;
        Zx1km:
        $kelases = $this->kelas->getAllKelas();
        goto wXC3W;
        fuz9P:
        $this->load->view("\x6d\145\x6d\x62\x65\162\x73\57\147\165\x72\165\57\164\145\x6d\x70\154\141\x74\x65\x73\x2f\x66\157\x6f\164\145\162");
        goto wootc;
        j2q2Z:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp_active->id_tp, $smt_active->id_smt);
        goto KUdRg;
        ZOepZ:
        $total = $this->dashboard->total("\142\x75\153\x75\x5f\x6e\151\x6c\x61\x69");
        goto xpw2N;
        eFEEL:
        $nilai_sikap = $this->rapor->getNilaiSikapByKelas($id_kelas, $id_tp, $id_smt);
        goto Vp8H6;
        xylug:
        $siswas = $this->rapor->getDetailSiswa($id_kelas, $id_tp, $id_smt);
        goto ydg8B;
        YEgSU:
        $data["\x67\165\162\x75"] = $kelas == null ? '' : $this->dashboard->getDataGuruById($kelas->id_guru, $id_tp, $id_smt);
        goto GJcvb;
        bf0DF:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto eZQX3;
        BD5B1:
        AXv2v:
        goto liS99;
        bmKbf:
        $kkm = $this->rapor->getAllKkmRaporAkhir($id_kelas, $id_tp, $id_smt);
        goto bf0DF;
        Qai_o:
        $id_siswa = $siswa->id_siswa;
        goto bmThH;
        lMprw:
        elJnT:
        goto j4hw1;
        xpw2N:
        if (!($total > 0)) {
            goto q0EgK;
        }
        goto CXX7X;
        nBVUu:
        if ($id_tp != null && $id_smt != null) {
            goto i5UCA;
        }
        goto xp0nz;
        Htrg0:
        if (!$kelases) {
            goto kQJWb;
        }
        goto SDlKz;
        fQhv3:
        $dummyDesks = ["\x72\x61\156\153\x69\x6e\147" => '', "\x72\141\156\153\x5f\144\145\163\153\162\x69\160\163\151" => '', "\160\61" => '', "\160\x31\137\144\x65\163\153" => '', "\160\62" => '', "\x70\62\x5f\x64\145\x73\153" => '', "\160\63" => '', "\160\63\x5f\144\x65\163\153" => ''];
        goto pLC8D;
        l_jHb:
        $desks[$id_siswa] = isset($prestasis[$id_siswa]) ? $prestasis[$id_siswa] : $dummyDesks;
        goto XVKaT;
        hHYwa:
        xydOV:
        goto nw3GK;
        jF7iT:
        $this->load->view("\x5f\164\145\155\160\x6c\x61\x74\x65\163\x2f\144\x61\163\150\x62\x6f\x61\x72\x64\57\137\146\157\x6f\x74\145\x72");
        goto vUQeS;
        DH3sy:
        $this->load->view("\162\141\x70\x6f\x72\57\141\x72\163\x69\x70\162\141\160\157\162");
        goto fuz9P;
        nZU5Y:
        su05n:
        goto bmKbf;
        XZUR2:
        byWnT:
        goto lsGnP;
        G52kt:
        $siswas = [];
        goto bzOUJ;
        u8Sp6:
        $ekstras = $this->kelas->getKelasEkskul($id_kelas, $id_tp, $id_smt);
        goto vEWwm;
        bmThH:
        $dummySikap = ["\160\162\145\x64\x69\x6b\141\x74" => ''];
        goto UvkuR;
        e1bt1:
        $data["\153\145\154\x61\x73\x65\x73"] = [];
        goto g1j_V;
        E2khB:
        $data["\156\151\154\x61\151\137\x72\141\x70\157\162"] = $nilai_rapor;
        goto bVB_E;
        OYzW3:
        $id_kelas = $this->input->get("\153\154\x73", true);
        goto N2G0F;
        XVkpd:
        $data["\x6a\x61\142\x61\164\141\156"] = $this->master->getAllJabatanGuru($guru->id_guru);
        goto ECD_Z;
        okRle:
        fuvgS:
        goto GP5FE;
        Gcmks:
        $setting = $this->dashboard->getSetting();
        goto n4qXw;
        xEVtL:
        goto xzasz;
        goto BD5B1;
        PlbRA:
        $data["\x66\151\163\x69\x6b"] = $fisik;
        goto EOUqH;
        I33Le:
        $nf = $this->rapor->getFisikKelas($id_kelas, $siswa->id_siswa, $id_tp, $id_smt);
        goto lnkhS;
        Bi5NB:
        if ($id_smt === "\61") {
            goto it1w8;
        }
        goto yM9At;
        keuGS:
        foreach ($catatans as $catatan) {
            $catatan->nilai = unserialize($catatan->nilai);
            jixUo:
        }
        goto DSlLT;
        qecYX:
        $data["\x61\142\x73\145\x6e\163\151"] = $absensi;
        goto PlbRA;
        RpRc_:
        vUrwq:
        goto x0Vvd;
        WxpuE:
        i_qcf:
        goto fQhv3;
        LP81B:
        $dummyFisik = ["\153\157\156\144\151\x73\151" => ["\x74\145\154\x69\156\147\x61" => '', "\155\141\164\141" => '', "\x67\x69\147\151" => '', "\154\141\151\156" => ''], "\x73\155\164" . $id_smt => ["\x74\151\156\147\147\151" => '', "\142\x65\x72\x61\164" => '', "\164\x70" => $id_tp], "\163\x6d\164" . $other => ["\x74\151\156\147\147\x69" => '', "\x62\145\162\x61\164" => '', "\x74\160" => $id_tp]];
        goto I33Le;
        HDzZj:
        $fisik = [];
        goto NtUQs;
        wootc:
        goto YfhYI;
        goto tGG8G;
        M_69i:
        $data["\162\141\x70\157\162"] = $settingRapor;
        goto velyE;
        GqgQd:
        $this->load->view("\x72\141\x70\x6f\162\x2f\141\x72\x73\151\x70\x72\x61\x70\x6f\162");
        goto jF7iT;
        O8TGY:
        $sikap[$id_siswa][1] = ["\x64\145\163\153\162\x69\160\163\x69" => '', "\x70\162\x65\x64\x69\x6b\141\x74" => $dummySikap];
        goto b4DiH;
        RMNYi:
        i5UCA:
        goto wgjcl;
        KUdRg:
        $data["\x67\165\x72\x75"] = $guru;
        goto e1bt1;
        H33xA:
        $other = "\x32";
        goto BJPXH;
        u1JQr:
        iKGtD:
        goto sDE0s;
        AxARq:
        $data["\x74\160\x5f\x6e\x61\x6d\145"] = $id_tp != null ? $this->dashboard->getTahunById($id_tp) : null;
        goto WJlot;
        vbzr1:
        $prestasis = $this->rapor->getPrestasiByKelas($id_kelas, $id_tp, $id_smt);
        goto Jp6JJ;
        jZ7VL:
        $data["\163\151\x73\x77\141\x73"] = $siswas;
        goto a17tW;
        C7vkV:
        it1w8:
        goto H33xA;
        ydg8B:
        $kategori_mapel = $this->master->getKategoriKelompokMapel();
        goto zO513;
        nUIgh:
        $id_smt = $this->input->get("\x73\x6d\x74", true);
        goto OYzW3;
        eZQX3:
        $data["\x74\x70\x5f\x61\143\x74\151\x76\145"] = $this->dashboard->getTahunActive();
        goto BWsSk;
        tAkrl:
        if ($this->ion_auth->is_admin()) {
            goto RP3_k;
        }
        goto nBVUu;
        x0Vvd:
        $id_tp = $this->input->get("\164\160", true);
        goto nUIgh;
        I_FVq:
        $kelompoks = [];
        goto rM6ya;
        ngtck:
        if (!$this->db->table_exists("\142\x75\153\x75\137\x6e\x69\154\141\151")) {
            goto vUrwq;
        }
        goto ZOepZ;
        n4qXw:
        $data = ["\x75\x73\145\x72" => $user, "\x6a\165\x64\165\x6c" => "\113\x75\x6d\x70\165\x6c\141\156\x20\116\151\x6c\x61\x69\40\x52\141\x70\x6f\162", "\x73\x75\x62\152\165\144\165\x6c" => "\116\x69\x6c\141\x69\x20\x52\141\160\x6f\x72\40\123\151\163\x77\x61", "\163\145\164\x74\151\x6e\147" => $setting];
        goto Zx1km;
        zO513:
        $arrk = [];
        goto dt4ae;
        VfKQ3:
        uY2dp:
        goto XVkpd;
        b4DiH:
        $sikap[$id_siswa][2] = ["\x64\145\163\153\162\x69\x70\x73\151" => '', "\x70\162\x65\144\151\153\141\164" => $dummySikap];
        goto jj0bT;
        BWsSk:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto l9I5u;
        bVB_E:
        $data["\144\x65\163\153\x72\x69\160\163\x69"] = $desks;
        goto qecYX;
        j4hw1:
        if (!($i < count($siswas))) {
            goto su05n;
        }
        goto B_5jl;
        bzOUJ:
        $mapels = [];
        goto I_FVq;
        Vp8H6:
        $nilai_rapor = $this->rapor->getNilaiRaporByKelas($id_kelas, $id_tp, $id_smt);
        goto vbzr1;
        yM9At:
        $other = "\x31";
        goto OAIT3;
        m9Pf2:
        foreach ($mapels as $mapel) {
            goto hMk6g;
            MPPgN:
            $nr = $nilai_rapor[$key_mapel];
            goto wMavU;
            sQOv9:
            ScZHl:
            goto SM7fW;
            npOfQ:
            $key_mapel = array_search($mapel->id_mapel . $id_kelas . $id_siswa . $id_tp . $id_smt, array_column($nilai_rapor, "\x69\144\x5f\x6e\151\x6c\141\151\x5f\x68\x61\x72\151\141\x6e"));
            goto UkEFn;
            hMk6g:
            $dummyNilai = ["\160\137\144\145\163\x6b\162\x69\160\163\151" => '', "\153\137\162\x61\164\141\137\162\141\x74\x61" => '', "\x6b\x5f\144\145\x73\153\162\x69\160\x73\x69" => '', "\153\137\160\x72\145\144\x69\153\141\x74" => '', "\x6e\151\x6c\x61\151" => '', "\x70\x72\x65\x64\x69\x6b\141\x74" => ''];
            goto npOfQ;
            wMavU:
            $nilai[$id_siswa][$mapel->id_mapel] = $nr;
            goto sQOv9;
            SM7fW:
            iIQ_2:
            goto Yq7eD;
            UkEFn:
            if (!($key_mapel !== false)) {
                goto ScZHl;
            }
            goto MPPgN;
            Yq7eD:
        }
        goto WxpuE;
        OAIT3:
        goto iXDUF;
        goto C7vkV;
        EOUqH:
        $data["\x6e\x69\154\x61\x69\137\145\x6b\163\164\162\141"] = $nilaiEkstra;
        goto c8KER;
        KCOGu:
        $smt_active = $this->dashboard->getSemesterActive();
        goto j2q2Z;
        YcAdY:
        foreach ($ekstras as $ext) {
            goto Cu4wh;
            ZtDmP:
            agVI_:
            goto OHwli;
            u7bX6:
            $arrEkstra = json_decode(json_encode(unserialize($ext->ekstra)));
            goto apx_6;
            apx_6:
            foreach ($arrEkstra as $ar) {
                goto E6t0m;
                A0UFp:
                $ne = $this->rapor->getEkstraKelas($id_ekstra, $siswa->id_siswa, $id_tp, $id_smt);
                goto F9Kz8;
                R3j3j:
                vLgmL:
                goto lMjGw;
                Q7yq4:
                $mapelEkstra[$id_ekstra] = $this->kelas->getEkskulById($id_ekstra);
                goto dC4zf;
                lMjGw:
                N8F74:
                goto KeJ4_;
                dC4zf:
                if (!($id_ekstra != null)) {
                    goto vLgmL;
                }
                goto A0UFp;
                E6t0m:
                $id_ekstra = $ar->ekstra;
                goto Q7yq4;
                F9Kz8:
                $nilaiEkstra[$id_siswa][$id_ekstra] = $ne == null ? $dummyEkstra : $ne;
                goto R3j3j;
                KeJ4_:
            }
            goto ZtDmP;
            OHwli:
            qM3ID:
            goto cHb10;
            Cu4wh:
            $dummyEkstra = ["\x64\x65\163\153\162\x69\160\x73\x69" => '', "\x6e\x69\154\141\x69" => '', "\x70\162\145\144\x69\x6b\141\x74" => ''];
            goto u7bX6;
            cHb10:
        }
        goto XmHIZ;
        O11vw:
        $i = 0;
        goto lMprw;
        d6pmB:
        $nilaiEkstra = [];
        goto Bi5NB;
        NcbwH:
        $data["\x6e\151\x6c\x61\x69"] = $nilai;
        goto E2khB;
        xEZwv:
        $absensi = [];
        goto MUuVb;
        jj0bT:
        goto pRoIC;
        goto u1JQr;
        Gk0Y5:
        xzasz:
        goto p6Ydq;
        liS99:
        $data["\x6b\145\x6c\x61\x73\145\x73"] = $this->dropdown->getAllKelas($id_tp, $id_smt);
        goto Gk0Y5;
        lnkhS:
        $nf2 = $this->rapor->getFisikKelas($id_kelas, $siswa->id_siswa, $id_tp, $other);
        goto ZGhnS;
        UjliD:
        if (!($kelas != null)) {
            goto IjRon;
        }
        goto E6YLr;
        vEWwm:
        IjRon:
        goto dFor0;
        XVKaT:
        $absensi[$id_siswa] = isset($catatans[$id_siswa]) ? $catatans[$id_siswa] : ["\156\x69\154\x61\x69" => $dummyAbsen];
        goto LP81B;
        g1j_V:
        goto uY2dp;
        goto RMNYi;
        UpxzV:
        $this->load->view("\x5f\164\x65\x6d\x70\x6c\x61\164\145\x73\x2f\x64\x61\x73\x68\142\x6f\x61\x72\x64\57\137\150\x65\x61\x64\145\x72", $data);
        goto GqgQd;
        nJ8Jn:
        $data["\x6b\145\154\141\x73\x65\163"] = $this->dropdown->getAllKelasByArrayId($id_tp, $id_smt, $guru->wali_kelas);
        goto VfKQ3;
        Y7AF1:
        $data["\x73\155\x74\x5f\x73\145\x6c\145\x63\164\145\144"] = $id_smt;
        goto PmNSB;
        VmnSC:
        $data["\153\x6b\x6d"] = $kkm;
        goto M_69i;
        C1fAj:
    }
    public function editNilaiRapor()
    {
        goto Q4Voo;
        Kay3a:
        sOJfL:
        goto MoC2P;
        wGUEh:
        $data["\x69\144\137\x73\x69\x73\x77\141"] = $id_siswa;
        goto zvraz;
        C2Lkk:
        eqkJt:
        goto Np42c;
        Mr09h:
        v9nY8:
        goto bOX4M;
        rr138:
        $data["\163\151\153\141\x70"] = $this->rapor->getNilaiSikapBySiswa($id_siswa, $id_tp, $id_smt);
        goto pC9iD;
        E10g3:
        $data["\x73\151\x73\x77\x61"] = $this->rapor->getDetailSiswaById($id_siswa, $id_tp, $id_smt);
        goto MbQrz;
        RfzFD:
        $data["\x6d\157\x64\x65"] = $mode;
        goto wGUEh;
        qI2ky:
        $this->load->view("\137\164\145\155\160\154\141\164\x65\x73\x2f\x64\x61\163\150\x62\157\141\162\x64\x2f\x5f\x68\x65\141\144\x65\162", $data);
        goto RaaPG;
        jY92P:
        if ($mode == "\x34") {
            goto v9nY8;
        }
        goto t_s5e;
        t_s5e:
        goto jBs2G;
        goto hEkQ1;
        pC9iD:
        goto jBs2G;
        goto sJR6B;
        pfXmD:
        $arrTp = $this->dashboard->getTahun();
        goto Mufly;
        T1CzS:
        $tp = $this->dashboard->getTahunActive();
        goto IR8B1;
        gLahI:
        $id_smt = $this->input->get("\163\155\x74", true);
        goto QiOGg;
        bOX4M:
        $data["\x65\x78\164\162\141"] = $this->rapor->getNilaiSikapBySiswa($id_siswa, $id_tp, $id_smt);
        goto oaPId;
        uks2n:
        if ($mode == "\62") {
            goto kfHBX;
        }
        goto q0fnw;
        sJR6B:
        kfHBX:
        goto EESGF;
        S1QSw:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto Dc3_0;
        Mufly:
        $arrSmt = $this->dashboard->getSemester();
        goto T1CzS;
        UnQ0Z:
        $this->load->view("\x5f\164\x65\x6d\x70\x6c\141\x74\145\163\57\x64\x61\163\x68\142\157\141\x72\144\x2f\x5f\x66\157\157\x74\x65\x72");
        goto Kay3a;
        IZ16w:
        $setting = $this->dashboard->getSetting();
        goto foeto;
        Dc3_0:
        $data["\x67\165\x72\x75"] = $guru;
        goto B4CD5;
        foeto:
        $data = ["\x75\163\145\x72" => $user, "\152\x75\x64\165\x6c" => "\x42\x75\153\x75\x20\111\x6e\x64\x75\x6b", "\163\x75\x62\152\165\x64\165\154" => "\x42\x75\x6b\165\40\111\156\x64\165\153", "\163\x65\164\x74\151\x6e\147" => $setting];
        goto pfXmD;
        kOA0m:
        $data["\164\160\137\141\x63\164\151\166\145"] = $tp;
        goto SXo2g;
        EESGF:
        $data["\160\x65\x6e\147\145\x74\141\x68\165\x61\156"] = $this->rapor->getNilaiSikapBySiswa($id_siswa, $id_tp, $id_smt);
        goto w70kr;
        q0fnw:
        if ($mode == "\63") {
            goto oRrFv;
        }
        goto jY92P;
        iYklX:
        oRrFv:
        goto HG_8K;
        oaPId:
        jBs2G:
        goto ao_H2;
        hEkQ1:
        Lpd9J:
        goto rr138;
        HG_8K:
        $data["\153\145\x74\145\x72\141\x6d\x70\x69\x6c\141\156"] = $this->rapor->getNilaiSikapBySiswa($id_siswa, $id_tp, $id_smt);
        goto fPSO5;
        ao_H2:
        if ($this->ion_auth->is_admin()) {
            goto eqkJt;
        }
        goto S1QSw;
        w70kr:
        goto jBs2G;
        goto iYklX;
        QiOGg:
        $mode = $this->input->get("\x6d\157\x64\145", true);
        goto DtRit;
        Q4Voo:
        $user = $this->ion_auth->user()->row();
        goto IZ16w;
        wjXQC:
        $this->load->view("\x72\x61\160\157\162\x2f\145\144\x69\164\162\x61\160\157\x72");
        goto g5FsB;
        auN4V:
        $data["\x73\155\164\137\141\x63\x74\x69\x76\145"] = $smt;
        goto E10g3;
        QMAnh:
        $id_siswa = $this->input->get("\163\x69\163\167\141", true);
        goto S3wXS;
        g5FsB:
        $this->load->view("\x6d\x65\155\x62\145\x72\x73\57\x67\165\x72\x75\57\164\145\155\x70\154\141\x74\145\163\x2f\146\157\x6f\x74\145\162");
        goto Q94kN;
        Np42c:
        $data["\x70\162\157\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto qI2ky;
        B4CD5:
        $this->load->view("\155\x65\x6d\142\145\162\x73\57\147\165\x72\x75\x2f\164\x65\x6d\x70\x6c\x61\164\x65\x73\x2f\x68\145\x61\144\145\162", $data);
        goto wjXQC;
        S3wXS:
        $id_tp = $this->input->get("\164\160", true);
        goto gLahI;
        MbQrz:
        if ($mode == "\x31") {
            goto Lpd9J;
        }
        goto uks2n;
        fuswG:
        $data["\x73\x6d\x74\x5f\163\145\x6c"] = $id_smt != null ? $this->dashboard->getSemesterById($id_smt) : null;
        goto RfzFD;
        fPSO5:
        goto jBs2G;
        goto Mr09h;
        zvraz:
        $data["\164\x70"] = $arrTp;
        goto kOA0m;
        RaaPG:
        $this->load->view("\x72\141\x70\157\x72\x2f\x65\x64\x69\164\162\x61\x70\157\x72");
        goto UnQ0Z;
        DtRit:
        $data["\164\x70\137\163\145\x6c"] = $id_tp != null ? $this->dashboard->getTahunById($id_tp) : null;
        goto fuswG;
        Q94kN:
        goto sOJfL;
        goto C2Lkk;
        SXo2g:
        $data["\x73\x6d\164"] = $arrSmt;
        goto auN4V;
        IR8B1:
        $smt = $this->dashboard->getSemesterActive();
        goto QMAnh;
        MoC2P:
    }
    public function getDataKelas()
    {
        goto WutS3;
        pO_FJ:
        $id_kelas = $this->input->get("\153\154\x73", true);
        goto Th5o8;
        V3GL0:
        iRaF_:
        goto i15QK;
        YiPc_:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto bSGFC;
        WutS3:
        $id_tp = $this->input->get("\164\160", true);
        goto gBXUb;
        Ktc0J:
        goto k0ysY;
        goto V3GL0;
        i15QK:
        $kelass = $this->dropdown->getAllKelas($id_tp, $id_smt);
        goto P0Yf6;
        gBXUb:
        $id_smt = $this->input->get("\163\x6d\164", true);
        goto pO_FJ;
        WinTM:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $id_tp, $id_smt);
        goto YiPc_;
        bJPzM:
        $jabatan_guru = $this->master->getAllJabatanGuru($guru->id_guru);
        goto Ktc0J;
        aKHvn:
        $this->output_json(["\153\145\x6c\141\x73" => $kelass, "\x6a\x61\x62\141\x74\141\x6e" => $jabatan_guru]);
        goto ksSOG;
        Th5o8:
        $user = $this->ion_auth->user()->row();
        goto N6vpW;
        bSGFC:
        $kelass = $this->dropdown->getAllKelasByArrayId($id_tp, $id_smt, [$id_kelas]);
        goto bJPzM;
        dAQqZ:
        if ($this->ion_auth->is_admin()) {
            goto iRaF_;
        }
        goto WinTM;
        P0Yf6:
        k0ysY:
        goto aKHvn;
        N6vpW:
        $jabatan_guru = null;
        goto dAQqZ;
        ksSOG:
    }
    public function backupNilai()
    {
        goto IZI5P;
        WRKAb:
        vFY_g:
        goto uhueu;
        vgGuk:
        $kelas_ekstra = $this->rapor->getAllEkstra();
        goto IASmc;
        dek09:
        $nilai_ekstra = [];
        goto liFdJ;
        Ndvhl:
        UiMNX:
        goto kQAPf;
        kQAPf:
        $insert = [];
        goto Lq81_;
        uhueu:
        $this->db->trans_complete();
        goto Kn74F;
        vNQRd:
        $this->output_json($res);
        goto mfUtb;
        gxlM2:
        $res["\151\156\163\x65\x72\x74"] = $insert;
        goto LlR_C;
        EZXeq:
        $nilai_hpas = [];
        goto IK_MJ;
        NJwvz:
        $kkms = $this->rapor->getAllKkm();
        goto jT2qS;
        Dkn3w:
        if (!(count($insert) > 0)) {
            goto vFY_g;
        }
        goto TGS6i;
        QBSDM:
        $all_nilai = [];
        goto vgGuk;
        i5OTk:
        $smts = $this->dashboard->getSemester();
        goto QmWBt;
        IZI5P:
        $setting = $this->dashboard->getSetting();
        goto GyGjj;
        QjlLT:
        $this->db->trans_start();
        goto Dkn3w;
        kYiKS:
        $nilai_hpts = [];
        goto EZXeq;
        c1zM5:
        $rapor_fisik = $this->rapor->getAllFisik();
        goto V7cUB;
        V7cUB:
        $nilai_hph = [];
        goto kYiKS;
        yLX5u:
        $mapels = $this->master->getAllMapel();
        goto QBSDM;
        liFdJ:
        foreach ($nilai_rapor as $nilai) {
            goto ZAkiC;
            BED90:
            vdKte:
            goto NWON5;
            txEoj:
            $sosial = isset($nilai_sikap[$nilai->id_tp][$nilai->id_smt][$nilai->id_siswa][2]) ? $nilai_sikap[$nilai->id_tp][$nilai->id_smt][$nilai->id_siswa][2] : null;
            goto HC6E9;
            IuHTn:
            mspK0:
            goto RvFxw;
            QX51P:
            YxjSs:
            goto x3fQq;
            KifY7:
            Z4T4B:
            goto szol3;
            ic7qm:
            foreach ($nilai_extra[$nilai->id_tp][$nilai->id_smt][$nilai->id_siswa] as $ekstra) {
                goto sytyE;
                Tf9yH:
                $nilai_ekstra[$nilai->id_siswa][] = ["\x6d\141\x70\145\154" => $ekstra->kode_ekstra, "\151\x64\137\x65\x6b\x73\164\x72\141" => $ekstra->id_ekstra, "\x6e\141\155\x61\x5f\x65\x6b\x73\164\x72\x61" => $ekstra->nama_ekstra, "\153\153\155" => $kkm_tunggal ? $setting_rapor[$nilai->id_tp][$nilai->id_smt]->kkm : $kkm_ekstra, "\156\x69\x6c\141\x69" => $ekstra->nilai, "\160\162\145\x64" => $ekstra->predikat, "\x64\x65\x73\153" => $ekstra->deskripsi];
                goto fk5zl;
                sytyE:
                $kkm_ekstra = '';
                goto sHZ8I;
                sHZ8I:
                if (!(isset($all_kkm[2]) && isset($all_kkm[2][$ekstra->id_ekstra]))) {
                    goto yjzeR;
                }
                goto Whnbf;
                fk5zl:
                liZI0:
                goto ZDmh2;
                dDgGQ:
                yjzeR:
                goto Tf9yH;
                Whnbf:
                $kkm_ekstra = $all_kkm[2][$ekstra->id_ekstra]->kkm;
                goto dDgGQ;
                ZDmh2:
            }
            goto GqPyG;
            CYDzH:
            mLkaN:
            goto r_xZ5;
            JMSx3:
            $all_kkm = $kkms[$nilai->id_tp][$nilai->id_smt][$nilai->id_kelas];
            goto r8jHM;
            uualR:
            $sosial = null;
            goto j4igD;
            r_xZ5:
            foreach ($mapels as $mapel) {
                goto fB5kW;
                l1ZXs:
                $nilai_nr[$nilai->id_siswa][] = ["\151\x64\x5f\155\x61\x70\x65\x6c" => $nilai->id_mapel, "\x6d\141\160\x65\x6c" => $nilai->mapel, "\x6b\153\155" => $kkm_tunggal ? $setting_rapor[$nilai->id_tp][$nilai->id_smt]->kkm : ($kkm_mapel == null ? '' : $kkm_mapel->kkm), "\156\151\154\x61\151" => $nilai->nilai_rapor, "\160\162\145\x64" => $nilai->rapor_predikat];
                goto CW7oi;
                CGqWI:
                $nilai_hpas[$nilai->id_siswa][] = ["\x69\144\x5f\155\141\x70\145\x6c" => $nilai->id_mapel, "\155\x61\x70\145\x6c" => $nilai->mapel, "\x6b\153\x6d" => $kkm_tunggal ? $setting_rapor[$nilai->id_tp][$nilai->id_smt]->kkm : ($kkm_mapel == null ? '' : $kkm_mapel->kkm), "\x6e\151\154\x61\x69" => $nilai->nilai_pas];
                goto l1ZXs;
                vLA12:
                $nilai_hpts[$nilai->id_siswa][] = ["\151\144\x5f\155\141\160\x65\x6c" => $nilai->id_mapel, "\155\x61\x70\x65\x6c" => $nilai->mapel, "\153\153\155" => $kkm_tunggal ? $setting_rapor[$nilai->id_tp][$nilai->id_smt]->kkm : ($kkm_mapel == null ? '' : $kkm_mapel->kkm), "\156\x69\x6c\x61\151" => $nilai->nilai_pts, "\x70\162\x65\x64" => $nilai->pts_predikat];
                goto CGqWI;
                h3z0L:
                CjeVi:
                goto t5kTq;
                B_1Oz:
                $nilai_hph[$nilai->id_siswa][] = ["\x69\x64\137\155\141\160\145\x6c" => $nilai->id_mapel, "\x6d\141\160\145\x6c" => $nilai->mapel, "\153\153\x6d" => $kkm_tunggal ? $setting_rapor[$nilai->id_tp][$nilai->id_smt]->kkm : ($kkm_mapel == null ? '' : $kkm_mapel->kkm), "\160\x5f\156\151\x6c\141\151" => $nilai->p_rata_rata, "\x70\137\160\x72\x65\144" => $nilai->p_predikat, "\160\x5f\144\145\163\x6b" => $nilai->p_deskripsi, "\x6b\137\x6e\x69\154\141\151" => $nilai->k_rata_rata, "\153\x5f\160\162\145\144" => $nilai->k_predikat, "\x6b\137\144\x65\163\153" => $nilai->k_deskripsi];
                goto vLA12;
                CW7oi:
                IJ_zb:
                goto h3z0L;
                fB5kW:
                if (!($mapel->id_mapel == $nilai->id_mapel)) {
                    goto IJ_zb;
                }
                goto B_1Oz;
                t5kTq:
            }
            goto QX51P;
            qWrxw:
            $kkm_mapel = null;
            goto KOVZ_;
            GqPyG:
            uBc_b:
            goto BED90;
            SxJyS:
            $fisik[] = $rapor_fisik[$nilai->id_siswa][$nilai->id_tp][$nilai->id_smt];
            goto KifY7;
            xNq9l:
            if (!(isset($kkms[$nilai->id_tp]) && isset($kkms[$nilai->id_tp][$nilai->id_smt]) && isset($kkms[$nilai->id_tp][$nilai->id_smt][$nilai->id_kelas]))) {
                goto mLkaN;
            }
            goto JMSx3;
            hYiy_:
            $fisik = [];
            goto pMSsx;
            KOVZ_:
            $all_kkm = [];
            goto xNq9l;
            Vqi3m:
            if (!(isset($nilai_extra[$nilai->id_tp]) && isset($nilai_extra[$nilai->id_tp][$nilai->id_smt]) && isset($nilai_extra[$nilai->id_tp][$nilai->id_smt][$nilai->id_siswa]))) {
                goto vdKte;
            }
            goto ic7qm;
            pMSsx:
            if (!isset($rapor_fisik[$nilai->id_siswa])) {
                goto Z4T4B;
            }
            goto SxJyS;
            szol3:
            $all_nilai[$nilai->id_tp][$nilai->id_smt][$nilai->id_siswa] = ["\x75\x69\144" => $nilai->uid, "\x69\144\x5f\163\151\x73\x77\141" => $nilai->id_siswa, "\x74\160" => $nilai->tahun, "\163\155\x74" => $nilai->nama_smt, "\153\x65\154\141\x73" => $nilai->nama_kelas, "\x6c\145\166\x65\154" => $nilai->level_id, "\167\141\154\x69\x5f\x6b\145\x6c\x61\163" => $nilai->nama_guru, "\152\165\x72\165\163\x61\x6e" => $nilai->nama_jurusan, "\150\160\x68" => serialize(isset($nilai_hph[$nilai->id_siswa]) ? $nilai_hph[$nilai->id_siswa] : []), "\x68\x70\164\163" => serialize(isset($nilai_hpts[$nilai->id_siswa]) ? $nilai_hpts[$nilai->id_siswa] : []), "\x68\x70\141\x73" => serialize(isset($nilai_hpas[$nilai->id_siswa]) ? $nilai_hpas[$nilai->id_siswa] : []), "\156\151\154\x61\151\x5f\x72\141\160\157\162" => serialize(isset($nilai_nr[$nilai->id_siswa]) ? $nilai_nr[$nilai->id_siswa] : []), "\145\x6b\x73\164\162\x61" => serialize(isset($nilai_ekstra[$nilai->id_siswa]) ? $nilai_ekstra[$nilai->id_siswa] : ''), "\163\160\162\x69\x74\165\x61\154" => $spiritual == null ? serialize([]) : serialize(["\144\x65\163\x6b" => $spiritual->deskripsi, "\156\151\154\x61\151" => unserialize($spiritual->nilai)["\160\x72\145\144\x69\x6b\141\164"]]), "\x73\157\163\x69\x61\154" => $sosial == null ? serialize([]) : serialize(["\x64\145\x73\153" => $sosial->deskripsi, "\156\x69\x6c\141\x69" => unserialize($sosial->nilai)["\160\x72\145\x64\x69\153\141\164"]]), "\x72\x61\x6e\x6b" => serialize(["\x72\x61\x6e\x6b" => $nilai->ranking, "\163\x61\x72\x61\156" => $nilai->rank_deskripsi]), "\x70\162\145\x73\x74\x61\x73\151" => serialize([["\x6e\x69\154\x61\151" => $nilai->p1, "\144\x65\x73\153" => $nilai->p1_desk], ["\156\151\154\x61\151" => $nilai->p2, "\x64\145\163\153" => $nilai->p2_desk], ["\156\x69\x6c\141\151" => $nilai->p3, "\x64\x65\x73\153" => $nilai->p3_desk]]), "\141\x62\x73\145\x6e" => $nilai->absen != null ? $nilai->absen : serialize([]), "\163\141\x72\141\x6e" => $nilai->saran != null ? $nilai->saran : "\55", "\146\x69\163\151\x6b" => serialize($fisik), "\156\x61\x69\x6b" => $nilai->naik != null ? $nilai->naik : "\61", "\163\145\164\x74\151\x6e\x67\137\x72\x61\160\157\x72" => serialize((array) $setting_rapor[$nilai->id_tp][$nilai->id_smt]), "\163\145\x74\164\151\156\147\x5f\155\141\160\145\154" => serialize((array) $mapels)];
            goto IuHTn;
            ZAkiC:
            $kkm_tunggal = $setting_rapor[$nilai->id_tp][$nilai->id_smt]->kkm_tunggal == "\61";
            goto qWrxw;
            j4igD:
            if (!(isset($nilai_sikap[$nilai->id_tp]) && isset($nilai_sikap[$nilai->id_tp][$nilai->id_smt]) && isset($nilai_sikap[$nilai->id_tp][$nilai->id_smt][$nilai->id_siswa]))) {
                goto PubNq;
            }
            goto Z3Jfd;
            x3fQq:
            $nilai_ekstra = [];
            goto Vqi3m;
            Z3Jfd:
            $spiritual = isset($nilai_sikap[$nilai->id_tp][$nilai->id_smt][$nilai->id_siswa][1]) ? $nilai_sikap[$nilai->id_tp][$nilai->id_smt][$nilai->id_siswa][1] : null;
            goto txEoj;
            r8jHM:
            $kkm_mapel = isset($all_kkm[1]) && isset($all_kkm[1][$nilai->id_mapel]) ? $all_kkm[1][$nilai->id_mapel] : null;
            goto CYDzH;
            HC6E9:
            PubNq:
            goto hYiy_;
            NWON5:
            $spiritual = null;
            goto uualR;
            RvFxw:
        }
        goto Ndvhl;
        TGS6i:
        $this->db->insert_batch("\142\x75\x6b\x75\137\x6e\151\154\x61\x69", $insert);
        goto m7dzo;
        Kn74F:
        $res["\156\151\154\141\x69\137\x65\x6b\x73\x74\x72\x61"] = $mapels;
        goto YdAPs;
        IASmc:
        $setting_rapor = $this->rapor->getAllRaporSetting();
        goto NJwvz;
        Lq81_:
        $ids_siswa = [];
        goto PlM9m;
        sLX7s:
        $nilai_sikap = $this->rapor->getAllNilaiSikap();
        goto c1zM5;
        YdAPs:
        $res["\141\x6c\x6c\x5f\156\x69\x6c\141\151"] = $all_nilai;
        goto gxlM2;
        Sr8ky:
        bFRAE:
        goto QjlLT;
        PlM9m:
        foreach ($tps as $tp) {
            goto V2bvS;
            V2bvS:
            foreach ($smts as $smt) {
                goto E9bsP;
                hKZ2Z:
                kt6f3:
                goto wF3gc;
                I5mI7:
                foreach ($all_nilai[$tp->id_tp][$smt->id_smt] as $nilai) {
                    goto FkKCF;
                    pQMgZ:
                    I_1JN:
                    goto N4YU0;
                    Tsr86:
                    $insert[] = $nilai;
                    goto BQOcx;
                    lmapF:
                    if ($this->rapor->exists($nilai["\x75\x69\x64"], $nilai["\x74\x70"], $nilai["\163\155\164"], $nilai["\x6b\x65\x6c\141\163"])) {
                        goto baTb3;
                    }
                    goto Tsr86;
                    BQOcx:
                    baTb3:
                    goto pQMgZ;
                    FkKCF:
                    $ids_siswa[$nilai["\x69\x64\137\163\x69\x73\x77\x61"]] = $nilai["\151\144\x5f\x73\x69\163\x77\x61"];
                    goto lmapF;
                    N4YU0:
                }
                goto hKZ2Z;
                E9bsP:
                if (!(isset($all_nilai[$tp->id_tp]) && isset($all_nilai[$tp->id_tp][$smt->id_smt]))) {
                    goto eK5dF;
                }
                goto I5mI7;
                TzXnf:
                eR1rz:
                goto T3RA7;
                wF3gc:
                eK5dF:
                goto TzXnf;
                T3RA7:
            }
            goto fp_vo;
            acHtE:
            wXQKu:
            goto Y5XuQ;
            fp_vo:
            oPCCe:
            goto acHtE;
            Y5XuQ:
        }
        goto Sr8ky;
        QmWBt:
        $gurus = $this->master->getAllWaliKelas();
        goto yLX5u;
        jT2qS:
        $nilai_rapor = $this->rapor->getAllNilaiRapor();
        goto N6kbH;
        GyGjj:
        $tps = $this->dashboard->getTahun();
        goto i5OTk;
        m7dzo:
        $this->rapor->deleteNilaiRapor();
        goto WRKAb;
        IK_MJ:
        $nilai_nr = [];
        goto dek09;
        N6kbH:
        $nilai_extra = $this->rapor->getAllNilaiEkstra();
        goto sLX7s;
        LlR_C:
        $res["\x69\144\x73"] = $ids_siswa;
        goto vNQRd;
        mfUtb:
    }
    public function restoreNilai()
    {
        goto f_ANs;
        C8aPU:
        if (!(count($spritual_insert) > 0)) {
            goto mzGWl;
        }
        goto YEnFi;
        UWmTu:
        if (!(count($rank_insert) > 0)) {
            goto gF2i_;
        }
        goto vTa8S;
        MtPLP:
        $smts = $this->dashboard->getSemester();
        goto ZhheN;
        cyM2F:
        aWhsx:
        goto Gaylw;
        k7DVy:
        $prestasi = [];
        goto COCc0;
        AqFfC:
        $fisik_insert = [];
        goto aw5Xj;
        EjNWD:
        $absen_insert = [];
        goto AqFfC;
        p0lYv:
        $res += $this->db->insert_batch("\162\x61\160\x6f\x72\x5f\156\151\154\141\x69\137\141\x6b\x68\151\x72", $hpas_insert);
        goto qakps;
        O0qik:
        $sosial_insert = [];
        goto WI4PA;
        MBvI1:
        PKbdi:
        goto hLRZx;
        TxbdN:
        $res += $this->db->insert_batch("\x72\141\160\x6f\162\x5f\x6e\151\x6c\x61\151\x5f\x68\x61\x72\x69\141\x6e", $hph_insert);
        goto aHvBd;
        f_ANs:
        $tps = $this->dashboard->getTahun();
        goto MtPLP;
        aw5Xj:
        foreach ($tps as $tp) {
            goto mov5T;
            GctGS:
            wConE:
            goto GEudo;
            mov5T:
            foreach ($smts as $smt) {
                goto ry6C7;
                ry6C7:
                if (!(isset($hph[$tp->id_tp]) && isset($hph[$tp->id_tp][$smt->id_smt]))) {
                    goto YcdaK;
                }
                goto LWk4K;
                OwtbC:
                if (!(isset($spritual[$tp->id_tp]) && isset($spritual[$tp->id_tp][$smt->id_smt]))) {
                    goto SR11l;
                }
                goto oRQ0G;
                Gtw0R:
                if (!(isset($sosial[$tp->id_tp]) && isset($sosial[$tp->id_tp][$smt->id_smt]))) {
                    goto IJbyN;
                }
                goto l_d0J;
                oRQ0G:
                foreach ($spritual[$tp->id_tp][$smt->id_smt] as $id => $pht) {
                    goto nm7Qu;
                    nm7Qu:
                    foreach ($pht as $kls => $nilai) {
                        goto DMhmG;
                        l2bJb:
                        $spritual_insert[] = $vals;
                        goto GMilT;
                        GMilT:
                        qgxm3:
                        goto bk6po;
                        DMhmG:
                        $vals = ["\x69\144\x5f\x6e\151\x6c\x61\x69\x5f\x73\151\153\141\x70" => $kls . $id . $tp->id_tp . $smt->id_smt . "\x31", "\x69\144\x5f\x73\x69\163\167\141" => $id, "\x69\x64\x5f\153\x65\x6c\141\163" => $kls, "\x69\x64\x5f\x74\160" => $tp->id_tp, "\x69\x64\x5f\x73\155\x74" => $smt->id_smt, "\152\145\x6e\151\x73" => "\x31", "\x6e\x69\154\141\x69" => serialize(["\x70\162\145\144\151\x6b\141\x74" => $nilai["\156\151\154\x61\151"], "\163\x6c\61" => '', "\163\x6c\x32" => '', "\x73\x6c\x33" => '', "\155\x62\61" => '', "\155\142\62" => '', "\155\x62\x33" => '']), "\144\145\163\153\162\x69\160\163\151" => $nilai["\x64\x65\163\153"]];
                        goto l2bJb;
                        bk6po:
                    }
                    goto vrNss;
                    vrNss:
                    KaNpb:
                    goto Jjn8L;
                    Jjn8L:
                    PrF3z:
                    goto gs0XH;
                    gs0XH:
                }
                goto dXazB;
                sqiCP:
                uPVvV:
                goto EhFzg;
                HyxGn:
                foreach ($hpas[$tp->id_tp][$smt->id_smt] as $id => $pha) {
                    goto mk2_s;
                    F1l2C:
                    HdQk4:
                    goto jYrxC;
                    jYrxC:
                    vnocT:
                    goto PsPCy;
                    mk2_s:
                    foreach ($pha as $kls => $nilai) {
                        goto aw89e;
                        VbfoR:
                        cY9YO:
                        goto k3FYL;
                        aw89e:
                        foreach ($nilai as $ph) {
                            goto PXdcO;
                            sl8Bi:
                            $hpas_insert[] = $vals;
                            goto q3eTM;
                            M12Pr:
                            $index = array_search($ph["\151\144\x5f\155\x61\x70\x65\x6c"], array_column($nr, "\151\x64\x5f\155\x61\160\x65\154"));
                            goto hex1I;
                            q3eTM:
                            WgCNa:
                            goto VhBIu;
                            PXdcO:
                            $nr = $nilai_rapor[$tp->id_tp][$smt->id_smt][$id][$kls];
                            goto M12Pr;
                            IIExk:
                            $vals = ["\151\x64\x5f\156\x69\154\141\151\x5f\141\x6b\150\x69\x72" => $ph["\x69\144\x5f\155\x61\x70\x65\x6c"] . $kls . $id . $tp->id_tp . $smt->id_smt, "\151\x64\137\x73\151\x73\167\x61" => $id, "\x69\x64\137\x6d\x61\160\x65\x6c" => $ph["\151\144\137\x6d\x61\x70\145\x6c"], "\151\x64\x5f\153\x65\154\x61\163" => $kls, "\151\144\x5f\164\x70" => $tp->id_tp, "\x69\x64\x5f\163\x6d\164" => $smt->id_smt, "\x6e\151\x6c\141\151" => $ph["\156\x69\154\x61\x69"], "\141\x6b\150\151\x72" => $hnr["\156\151\154\141\x69"], "\160\162\x65\x64\x69\153\141\x74" => $hnr["\x70\x72\x65\144"]];
                            goto sl8Bi;
                            hex1I:
                            $hnr = $nr[$index];
                            goto IIExk;
                            VhBIu:
                        }
                        goto OPGtK;
                        OPGtK:
                        Zdz9x:
                        goto VbfoR;
                        k3FYL:
                    }
                    goto F1l2C;
                    PsPCy:
                }
                goto digNI;
                sjib8:
                IJbyN:
                goto Sb4Wa;
                Sb4Wa:
                if (!(isset($rank[$tp->id_tp]) && isset($rank[$tp->id_tp][$smt->id_smt]))) {
                    goto rMGFX;
                }
                goto T5EGH;
                pWyYX:
                if (!(isset($absen[$tp->id_tp]) && isset($absen[$tp->id_tp][$smt->id_smt]))) {
                    goto eU84J;
                }
                goto Lnze7;
                FxwUz:
                WSbLk:
                goto E94qX;
                jQ4Dl:
                Cv3Xz:
                goto Ew9n3;
                B06Kv:
                IjWFK:
                goto sjib8;
                digNI:
                hKK4y:
                goto Qeohc;
                Lnze7:
                foreach ($absen[$tp->id_tp][$smt->id_smt] as $id => $pht) {
                    goto MTzSw;
                    jOjK6:
                    hjXOp:
                    goto tc5zq;
                    MTzSw:
                    foreach ($pht as $kls => $nilai) {
                        goto g3xJn;
                        YCy7m:
                        vTQiO:
                        goto vsRhV;
                        g3xJn:
                        $vals = ["\151\x64\x5f\143\141\x74\141\x74\141\x6e\x5f\167\x61\x6c\151" => $kls . $id . $tp->id_tp . $smt->id_smt, "\x69\x64\137\x73\151\x73\x77\141" => $id, "\151\x64\137\153\x65\x6c\x61\163" => $kls, "\x69\144\x5f\x74\x70" => $tp->id_tp, "\151\x64\137\163\155\164" => $smt->id_smt, "\156\151\154\141\x69" => $nilai["\x6e\151\154\141\151"], "\144\x65\x73\x6b\x72\151\x70\x73\151" => $nilai["\144\x65\x73\x6b\162\151\160\x73\151"]];
                        goto Q64WF;
                        Q64WF:
                        $absen_insert[] = $vals;
                        goto YCy7m;
                        vsRhV:
                    }
                    goto JUAhQ;
                    JUAhQ:
                    Hr9MG:
                    goto jOjK6;
                    tc5zq:
                }
                goto sqiCP;
                AVg0A:
                foreach ($hpts[$tp->id_tp][$smt->id_smt] as $id => $pht) {
                    goto HSVrh;
                    lIrWy:
                    NisNx:
                    goto nmIFg;
                    nmIFg:
                    rFrlX:
                    goto BaBIc;
                    HSVrh:
                    foreach ($pht as $kls => $nilai) {
                        goto BoTr2;
                        RToe1:
                        wtKwL:
                        goto H_Cfc;
                        oVVtK:
                        XgNFP:
                        goto RToe1;
                        BoTr2:
                        foreach ($nilai as $ph) {
                            goto Nep85;
                            itT1J:
                            $hpts_insert[] = $vals;
                            goto MXp9B;
                            MXp9B:
                            czln0:
                            goto bR6av;
                            Nep85:
                            $vals = ["\151\144\x5f\156\x69\154\x61\x69\137\x70\x74\x73" => $ph["\151\x64\x5f\x6d\x61\160\x65\x6c"] . $kls . $id . $tp->id_tp . $smt->id_smt, "\x69\144\137\163\151\163\167\141" => $id, "\x69\144\137\155\x61\x70\145\x6c" => $ph["\x69\x64\x5f\155\141\x70\x65\x6c"], "\x69\x64\x5f\153\145\154\x61\x73" => $kls, "\x69\x64\x5f\x74\160" => $tp->id_tp, "\151\x64\x5f\x73\x6d\x74" => $smt->id_smt, "\156\151\154\141\x69" => $ph["\x6e\151\x6c\x61\x69"], "\160\162\145\x64\151\x6b\x61\x74" => $ph["\x70\x72\145\x64"]];
                            goto itT1J;
                            bR6av:
                        }
                        goto oVVtK;
                        H_Cfc:
                    }
                    goto lIrWy;
                    BaBIc:
                }
                goto NB4t6;
                b1iDY:
                G1sbn:
                goto TBdC4;
                Ew9n3:
                rMGFX:
                goto pWyYX;
                R75On:
                KVS2w:
                goto EHfqz;
                l_d0J:
                foreach ($sosial[$tp->id_tp][$smt->id_smt] as $id => $pht) {
                    goto fSrvX;
                    xgF68:
                    G978d:
                    goto WatOc;
                    fSrvX:
                    foreach ($pht as $kls => $nilai) {
                        goto yK3iA;
                        yK3iA:
                        $vals = ["\x69\x64\137\x6e\151\x6c\x61\151\137\x73\151\x6b\141\160" => $kls . $id . $tp->id_tp . $smt->id_smt . "\62", "\151\144\x5f\163\x69\x73\167\141" => $id, "\x69\144\x5f\153\x65\154\141\x73" => $kls, "\x69\144\x5f\x74\x70" => $tp->id_tp, "\151\144\137\163\x6d\164" => $smt->id_smt, "\x6a\x65\x6e\151\163" => "\x32", "\156\x69\x6c\141\x69" => serialize(["\x70\162\145\144\x69\153\141\164" => $nilai["\156\x69\154\x61\x69"], "\163\154\61" => '', "\163\154\x32" => '', "\x73\x6c\x33" => '', "\x6d\x62\x31" => '', "\155\x62\62" => '', "\x6d\x62\x33" => '']), "\x64\145\163\x6b\162\x69\x70\163\151" => $nilai["\144\145\x73\x6b"]];
                        goto pda1x;
                        pda1x:
                        $sosial_insert[] = $vals;
                        goto BE1_B;
                        BE1_B:
                        RuOS_:
                        goto V_BKk;
                        V_BKk:
                    }
                    goto xgF68;
                    WatOc:
                    nXsHF:
                    goto JoYMk;
                    JoYMk:
                }
                goto B06Kv;
                NB4t6:
                NkNJj:
                goto R75On;
                T5EGH:
                foreach ($rank[$tp->id_tp][$smt->id_smt] as $id => $pht) {
                    goto a1u80;
                    a1u80:
                    foreach ($pht as $kls => $nilai) {
                        goto kLaw1;
                        kLaw1:
                        $prt = $prestasi[$tp->id_tp][$smt->id_smt][$id][$kls];
                        goto kF_Fk;
                        YccSX:
                        $rank_insert[] = $vals;
                        goto Xhd3i;
                        kF_Fk:
                        $vals = ["\151\x64\x5f\x72\141\156\153\151\x6e\x67" => $kls . $id . $tp->id_tp . $smt->id_smt, "\151\144\137\163\151\163\167\141" => $id, "\x69\144\x5f\153\x65\154\x61\x73" => $kls, "\x69\144\137\164\160" => $tp->id_tp, "\151\144\x5f\x73\x6d\164" => $smt->id_smt, "\x72\x61\x6e\x6b\151\156\x67" => $nilai["\x72\x61\156\153"], "\x64\145\163\x6b\162\x69\x70\x73\x69" => $nilai["\163\141\162\x61\156"], "\x70\x31" => $prt[0]["\156\x69\x6c\141\151"], "\x70\61\137\x64\145\163\153" => $prt[0]["\144\145\163\x6b"], "\x70\x32" => $prt[1]["\156\x69\x6c\x61\151"], "\160\62\x5f\144\145\x73\153" => $prt[1]["\x64\x65\x73\153"], "\x70\x33" => $prt[2]["\x6e\151\154\x61\x69"], "\x70\63\137\x64\x65\163\153" => $prt[2]["\144\145\163\x6b"]];
                        goto YccSX;
                        Xhd3i:
                        fcd4r:
                        goto ZWc3k;
                        ZWc3k:
                    }
                    goto CiiTw;
                    j2J1X:
                    ciQWs:
                    goto PHuxB;
                    CiiTw:
                    CXu49:
                    goto j2J1X;
                    PHuxB:
                }
                goto jQ4Dl;
                bluxJ:
                y90Gc:
                goto TxE3g;
                dXazB:
                D5_X5:
                goto zWyPS;
                Qeohc:
                cYmhQ:
                goto tXohU;
                WbJYk:
                if (!(isset($hpts[$tp->id_tp]) && isset($hpts[$tp->id_tp][$smt->id_smt]))) {
                    goto KVS2w;
                }
                goto AVg0A;
                TeUS9:
                foreach ($ekstra[$tp->id_tp][$smt->id_smt] as $id => $pha) {
                    goto ujb07;
                    PiWV_:
                    y0EbJ:
                    goto YVeSm;
                    ujb07:
                    foreach ($pha as $kls => $nilai) {
                        goto L15kz;
                        pTDC5:
                        jN9XC:
                        goto r0wk9;
                        k9ggF:
                        foreach ($nilai as $ph) {
                            goto oJVtA;
                            r7LX2:
                            $ekstra_insert[] = $vals;
                            goto tBbU3;
                            tBbU3:
                            WwDBk:
                            goto rL0JR;
                            oJVtA:
                            $vals = ["\151\144\x5f\x6e\151\x6c\x61\151\x5f\145\x6b\163\x74\x72\x61" => $ph["\151\144\137\x65\x6b\x73\x74\162\141"] . $kls . $id . $tp->id_tp . $smt->id_smt, "\x69\x64\137\163\x69\x73\167\141" => $id, "\x69\x64\137\x65\x6b\163\164\x72\x61" => $ph["\151\x64\137\145\x6b\163\x74\162\x61"], "\x69\x64\x5f\153\145\x6c\141\x73" => $kls, "\151\x64\137\x74\160" => $tp->id_tp, "\151\x64\x5f\x73\155\x74" => $smt->id_smt, "\x6e\x69\154\141\151" => $ph["\156\151\x6c\x61\x69"], "\160\162\x65\x64\x69\153\141\164" => $ph["\x70\x72\x65\144"], "\x64\145\163\x6b\x72\151\160\x73\x69" => $ph["\x64\145\163\x6b"]];
                            goto r7LX2;
                            rL0JR:
                        }
                        goto YNqMu;
                        L15kz:
                        if (!($nilai != '')) {
                            goto yELWI;
                        }
                        goto k9ggF;
                        nzmO9:
                        yELWI:
                        goto pTDC5;
                        YNqMu:
                        Igs5q:
                        goto nzmO9;
                        r0wk9:
                    }
                    goto WHTxt;
                    WHTxt:
                    ZfYoS:
                    goto PiWV_;
                    YVeSm:
                }
                goto b1iDY;
                LWk4K:
                foreach ($hph[$tp->id_tp][$smt->id_smt] as $id => $phs) {
                    goto TGWXC;
                    kj3cs:
                    LRROf:
                    goto aUA_1;
                    TGWXC:
                    foreach ($phs as $kls => $nilai) {
                        goto TaVL7;
                        p9HQ7:
                        fIF3S:
                        goto w4N5G;
                        TaVL7:
                        foreach ($nilai as $ph) {
                            goto JRGWK;
                            b6XRE:
                            $vals = ["\x69\x64\137\x6e\151\x6c\x61\x69\137\x68\x61\x72\x69\141\x6e" => $ph["\x69\144\x5f\155\141\x70\x65\154"] . $kls . $id . $tp->id_tp . $smt->id_smt, "\x69\144\137\x73\151\163\167\x61" => $id, "\x69\x64\x5f\155\x61\160\145\154" => $ph["\x69\144\x5f\x6d\x61\x70\145\154"], "\151\144\x5f\153\145\x6c\x61\x73" => $kls, "\x69\x64\137\164\x70" => $tp->id_tp, "\x69\x64\x5f\163\155\164" => $smt->id_smt, "\x70\x5f\162\x61\164\141\137\x72\x61\164\x61" => $p_rata, "\160\x31" => $p_rata + 1, "\160\x32" => $p_rata - 1, "\160\63" => $p_rata, "\160\x34" => '', "\x70\65" => '', "\x70\66" => '', "\x70\67" => '', "\x70\70" => '', "\160\137\160\x72\x65\x64\x69\153\x61\x74" => $ph["\x70\137\160\x72\145\144"], "\160\137\144\x65\163\153\162\151\160\x73\151" => $ph["\x70\137\144\x65\163\x6b"], "\153\x5f\162\x61\x74\x61\137\162\x61\164\141" => $k_rata, "\x6b\61" => $k_rata + 1, "\x6b\62" => $k_rata - 1, "\x6b\63" => $k_rata, "\153\x34" => '', "\153\x35" => '', "\153\x36" => '', "\153\x37" => '', "\153\70" => '', "\153\137\x70\x72\145\x64\151\x6b\x61\x74" => $ph["\153\137\x70\x72\145\x64"], "\x6b\137\x64\x65\163\153\x72\x69\160\163\151" => $ph["\x6b\137\x64\145\163\x6b"], "\x6a\x6d\154" => ''];
                            goto H2As9;
                            zHnI0:
                            $k_rata = (int) $ph["\x6b\137\156\x69\154\141\151"];
                            goto b6XRE;
                            H2As9:
                            $hph_insert[] = $vals;
                            goto yZuEp;
                            JRGWK:
                            $p_rata = (int) $ph["\160\137\156\151\154\141\151"];
                            goto zHnI0;
                            yZuEp:
                            O0PCN:
                            goto hR65D;
                            hR65D:
                        }
                        goto GfTAg;
                        GfTAg:
                        hc0UY:
                        goto p9HQ7;
                        w4N5G:
                    }
                    goto kj3cs;
                    aUA_1:
                    rxsuh:
                    goto ExZW_;
                    ExZW_:
                }
                goto bluxJ;
                EHfqz:
                if (!(isset($hpas[$tp->id_tp]) && isset($hpas[$tp->id_tp][$smt->id_smt]))) {
                    goto cYmhQ;
                }
                goto HyxGn;
                tXohU:
                if (!(isset($ekstra[$tp->id_tp]) && isset($ekstra[$tp->id_tp][$smt->id_smt]))) {
                    goto iOGmk;
                }
                goto TeUS9;
                EhFzg:
                eU84J:
                goto FxwUz;
                TBdC4:
                iOGmk:
                goto OwtbC;
                zWyPS:
                SR11l:
                goto Gtw0R;
                TxE3g:
                YcdaK:
                goto WbJYk;
                E94qX:
            }
            goto GctGS;
            GEudo:
            fY_RU:
            goto z_gvO;
            z_gvO:
        }
        goto cyM2F;
        o59Oj:
        if (!(count($hph_insert) > 0)) {
            goto j0WJE;
        }
        goto TxbdN;
        zx3O_:
        $hpas = [];
        goto mKFhv;
        Fyudg:
        $ekstra_insert = [];
        goto VNplF;
        dTIBB:
        if (!$res) {
            goto Nc_eY;
        }
        goto an6e6;
        Rujcs:
        $hpas_insert = [];
        goto Fyudg;
        an6e6:
        $this->db->empty_table("\x62\x75\x6b\x75\137\x6e\151\x6c\141\151");
        goto KfU2t;
        COCc0:
        $absen = [];
        goto REdyT;
        lsuzq:
        mzGWl:
        goto S9cpF;
        cusx8:
        $sosial = [];
        goto drl1Y;
        zln2P:
        $kelass = $this->kelas->getAllKelas();
        goto TePJ0;
        aHvBd:
        j0WJE:
        goto C8aPU;
        GzpH2:
        W210N:
        goto o59Oj;
        hLRZx:
        $hph_insert = [];
        goto FlmIF;
        pZzWt:
        $spritual = [];
        goto cusx8;
        qakps:
        IgpZA:
        goto Oyqk7;
        NtruQ:
        $hpts = [];
        goto zx3O_;
        S9cpF:
        if (!(count($sosial_insert) > 0)) {
            goto X9D4f;
        }
        goto hc3Dy;
        QeDCv:
        $res += $this->db->insert_batch("\x72\x61\x70\157\162\137\x6e\151\154\141\x69\x5f\x70\164\163", $hpts_insert);
        goto GzpH2;
        pLIfb:
        erxAZ:
        goto M4k1T;
        Edy6t:
        $ekstra = [];
        goto pZzWt;
        vTa8S:
        $res += $this->db->insert_batch("\x72\x61\160\x6f\162\x5f\160\x72\x65\x73\164\141\163\151", $rank_insert);
        goto XnFb4;
        Lnf5b:
        $res += $this->db->insert_batch("\162\141\x70\x6f\162\137\143\x61\x74\141\164\141\156\137\167\141\154\x69", $absen_insert);
        goto qYMdv;
        TePJ0:
        $hph = [];
        goto NtruQ;
        qYMdv:
        KWh9j:
        goto e1SxK;
        REdyT:
        $fisik = [];
        goto BEoMy;
        LZYKn:
        return $res;
        goto r28CP;
        Yk1j8:
        $mapels = $this->master->getAllMapel();
        goto NtcCg;
        Oyqk7:
        if (!(count($hpts_insert) > 0)) {
            goto W210N;
        }
        goto QeDCv;
        on2_b:
        X9D4f:
        goto dTIBB;
        YEnFi:
        $res += $this->db->insert_batch("\162\141\x70\157\162\x5f\156\151\154\141\151\x5f\163\151\153\141\x70", $spritual_insert);
        goto lsuzq;
        hc3Dy:
        $res += $this->db->insert_batch("\x72\141\x70\x6f\x72\137\x6e\x69\154\141\x69\x5f\163\151\153\141\160", $sosial_insert);
        goto on2_b;
        NtcCg:
        $siswas = $this->rapor->getDataKumpulanRapor();
        goto zln2P;
        KfU2t:
        Nc_eY:
        goto pAdja;
        e1SxK:
        if (!(count($ekstra_insert) > 0)) {
            goto erxAZ;
        }
        goto dRyUo;
        FlmIF:
        $hpts_insert = [];
        goto Rujcs;
        M4k1T:
        if (!(count($hpas_insert) > 0)) {
            goto IgpZA;
        }
        goto p0lYv;
        VNplF:
        $spritual_insert = [];
        goto O0qik;
        WI4PA:
        $rank_insert = [];
        goto EjNWD;
        BEoMy:
        foreach ($siswas as $id => $siswa) {
            goto CMv0x;
            Ak7ZG:
            $prestasi[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->prestasi);
            goto OrRMr;
            ilOuu:
            DXeQa:
            goto eorfk;
            LtTV4:
            $rank[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->rank);
            goto Ak7ZG;
            fxYGZ:
            $nilai_rapor[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->nilai_rapor);
            goto vmC9C;
            AaJ72:
            $index_smt = array_search($siswa->smt, array_column($smts, "\156\x61\x6d\141\x5f\x73\155\x74"));
            goto I48ED;
            rhvWx:
            $fisik[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->fisik);
            goto jnsJb;
            SLrS3:
            $spritual[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->spritual);
            goto BSbtA;
            hhrz_:
            $id_kelas = '';
            goto nstj1;
            BSbtA:
            $sosial[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->sosial);
            goto LtTV4;
            qg06X:
            fNXjU:
            goto LYl_C;
            I48ED:
            $smt = $smts[$index_smt];
            goto hhrz_;
            jnsJb:
            foreach ($fisik[$tp->id_tp][$smt->id_smt][$id][$id_kelas] as $value) {
                $value->kondisi = unserialize($value->kondisi);
                PhFSU:
            }
            goto dA6hB;
            OrRMr:
            $absen[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = ["\x6e\151\x6c\141\x69" => $siswa->absen, "\x64\x65\163\153\x72\151\160\163\151" => $siswa->saran];
            goto rhvWx;
            NIKzC:
            $hpas[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->hpas);
            goto fxYGZ;
            eorfk:
            $hph[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->hph);
            goto BReAQ;
            vmC9C:
            $ekstra[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->ekstra);
            goto SLrS3;
            kXx6A:
            $tp = $tps[$index_tp];
            goto AaJ72;
            nstj1:
            foreach ($kelass as $kelas) {
                goto kxnB1;
                eKfh3:
                Ml1bA:
                goto eR7OX;
                drt5g:
                $id_kelas = $kelas->id_kelas;
                goto eKfh3;
                kxnB1:
                if (!($kelas->id_tp == $tp->id_tp && $kelas->id_smt == $smt->id_smt && $kelas->nama_kelas == $siswa->kelas)) {
                    goto Ml1bA;
                }
                goto drt5g;
                eR7OX:
                UWXPi:
                goto vYG7T;
                vYG7T:
            }
            goto ilOuu;
            dA6hB:
            qOhM1:
            goto qg06X;
            BReAQ:
            $hpts[$tp->id_tp][$smt->id_smt][$id][$id_kelas] = unserialize($siswa->hpts);
            goto NIKzC;
            CMv0x:
            $index_tp = array_search($siswa->tp, array_column($tps, "\164\x61\x68\165\156"));
            goto kXx6A;
            LYl_C:
        }
        goto MBvI1;
        pAdja:
        $this->db->trans_complete();
        goto LZYKn;
        mKFhv:
        $nilai_rapor = [];
        goto Edy6t;
        ZhheN:
        $gurus = $this->master->getAllWaliKelas();
        goto Yk1j8;
        drl1Y:
        $rank = [];
        goto k7DVy;
        Gaylw:
        $this->db->trans_start();
        goto MurB5;
        MurB5:
        $res = 0;
        goto UWmTu;
        CYaOy:
        if (!(count($absen_insert) > 0)) {
            goto KWh9j;
        }
        goto Lnf5b;
        XnFb4:
        gF2i_:
        goto CYaOy;
        dRyUo:
        $res += $this->db->insert_batch("\162\141\x70\x6f\162\137\x6e\x69\154\141\x69\x5f\145\x6b\163\x74\x72\141", $ekstra_insert);
        goto pLIfb;
        r28CP:
    }
    public function edit()
    {
        goto torKZ;
        mldAN:
        $tahun = $this->input->get("\x74\x61\150\x75\x6e", true);
        goto nBB7N;
        O88ca:
        GzxoQ:
        goto lW2rs;
        Fc4j3:
        $data["\163\151\x73\x77\141\x73"] = $siswas;
        goto xxp_q;
        XmSlv:
        $this->load->view("\137\164\x65\155\x70\x6c\141\x74\x65\x73\x2f\x64\x61\x73\150\x62\157\x61\162\144\x2f\x5f\x68\145\x61\x64\145\x72", $data);
        goto rrbRw;
        vh2nn:
        $siswas = $this->rapor->getDataKumpulanRapor($kelas, $tahun, $semester);
        goto InRh4;
        olx2A:
        $this->load->view("\137\164\x65\x6d\x70\154\141\164\x65\x73\x2f\144\141\x73\150\142\x6f\x61\x72\x64\57\137\146\157\157\164\145\162");
        goto Ofs_9;
        YbQSD:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto jg6wJ;
        Heiey:
        $tp = $this->dashboard->getTahunActive();
        goto KRFmI;
        WySeP:
        goto haMUv;
        goto O88ca;
        lobhO:
        $data["\147\165\x72\165"] = $guru;
        goto O_tQh;
        xabmb:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto aQoDK;
        q1g7B:
        $user = $this->ion_auth->user()->row();
        goto OEzzO;
        rrbRw:
        $this->load->view("\x73\x65\x74\x74\151\x6e\x67\x2f\x64\141\164\141\x72\x61\160\157\x72");
        goto olx2A;
        aQoDK:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto lobhO;
        kEgfB:
        $data["\164\x70\137\x61\143\164\151\166\145"] = $tp;
        goto YbQSD;
        Ofs_9:
        haMUv:
        goto KI_mw;
        vzyDT:
        fodKo:
        goto Fc4j3;
        O_tQh:
        $this->load->view("\155\145\155\x62\145\162\163\57\x67\165\162\165\x2f\164\145\x6d\160\154\x61\x74\145\163\x2f\150\x65\x61\x64\x65\162", $data);
        goto RjA20;
        InRh4:
        foreach ($siswas as $siswa) {
            goto htwd5;
            htwd5:
            $siswa->hph = unserialize($siswa->hph);
            goto mTz8w;
            sohcw:
            $siswa->nilai_rapor = unserialize($siswa->nilai_rapor);
            goto f5B2r;
            HFiQ3:
            lhFhI:
            goto EjZOD;
            xWIDD:
            $siswa->setting_mapel = unserialize($siswa->setting_mapel);
            goto HFiQ3;
            OB0uu:
            foreach ($siswa->fisik as $value) {
                $value->kondisi = unserialize($value->kondisi);
                FKLvn:
            }
            goto zdet6;
            f5B2r:
            $siswa->ekstra = unserialize($siswa->ekstra);
            goto zz4iS;
            mTz8w:
            $siswa->hpts = unserialize($siswa->hpts);
            goto NfL3n;
            zz4iS:
            $siswa->spritual = unserialize($siswa->spritual);
            goto x1oXy;
            x1oXy:
            $siswa->sosial = unserialize($siswa->sosial);
            goto Thrxn;
            Thrxn:
            $siswa->rank = unserialize($siswa->rank);
            goto SsQOV;
            SsQOV:
            $siswa->prestasi = unserialize($siswa->prestasi);
            goto qAxQs;
            NfL3n:
            $siswa->hpas = unserialize($siswa->hpas);
            goto sohcw;
            jD84L:
            $siswa->fisik = unserialize($siswa->fisik);
            goto OB0uu;
            zdet6:
            GcEsL:
            goto m0hUf;
            qAxQs:
            $siswa->absen = unserialize($siswa->absen);
            goto jD84L;
            m0hUf:
            $siswa->setting_rapor = unserialize($siswa->setting_rapor);
            goto xWIDD;
            EjZOD:
        }
        goto vzyDT;
        zDgTR:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto kEgfB;
        xxp_q:
        if ($this->ion_auth->is_admin()) {
            goto GzxoQ;
        }
        goto xabmb;
        torKZ:
        $kelas = $this->input->get("\153\145\x6c\x61\x73", true);
        goto mldAN;
        KRFmI:
        $smt = $this->dashboard->getSemesterActive();
        goto zDgTR;
        RjA20:
        $this->load->view("\163\x65\164\164\x69\156\x67\x2f\x64\141\164\141\162\141\160\157\x72");
        goto zNM1y;
        EcVX1:
        $data = ["\x75\x73\145\x72" => $user, "\x6a\165\144\165\154" => "\x45\x64\x69\164\x20\116\151\x6c\x61\x69", "\163\x75\142\x6a\x75\144\165\154" => "\x4e\151\x6c\x61\x69\x20\122\141\160\x6f\162\x20\x4b\145\x6c\x61\163\40" . $kelas . "\x2c\40\124\x50\72" . $tahun . "\x2c\40\x53\x4d\x54\x3a" . $semester, "\163\145\x74\164\151\156\147" => $setting];
        goto Heiey;
        zNM1y:
        $this->load->view("\x6d\x65\x6d\x62\145\x72\x73\x2f\147\165\162\165\x2f\x74\x65\155\160\x6c\141\x74\x65\x73\57\x66\157\x6f\164\145\x72");
        goto WySeP;
        jg6wJ:
        $data["\x73\x6d\x74\x5f\x61\x63\x74\151\x76\145"] = $smt;
        goto vh2nn;
        lW2rs:
        $data["\160\x72\157\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto XmSlv;
        nBB7N:
        $semester = $this->input->get("\163\x65\x6d\145\x73\164\x65\162", true);
        goto q1g7B;
        OEzzO:
        $setting = $this->dashboard->getSetting();
        goto EcVX1;
        KI_mw:
    }
    public function ledger()
    {
        goto lsuhd;
        U1S6q:
        $this->load->view("\137\x74\145\x6d\160\154\141\164\145\x73\x2f\144\x61\163\x68\142\157\141\162\144\57\x5f\x66\x6f\157\x74\145\x72");
        goto vLd5o;
        jwuYT:
        $siswas = $this->rapor->getDataKumpulanRapor($kelas, $tahun, $semester);
        goto p26A3;
        xuuCG:
        $this->load->view("\x6d\x65\x6d\142\145\162\163\57\147\165\x72\165\x2f\164\x65\155\160\x6c\141\x74\x65\x73\x2f\146\157\157\x74\x65\x72");
        goto fca8S;
        j0L_l:
        $data["\164\x70\x5f\x61\x63\x74\151\166\x65"] = $tp;
        goto N93WU;
        Zjw3y:
        if ($this->ion_auth->is_admin()) {
            goto SqXRZ;
        }
        goto lnLBN;
        vLd5o:
        kUKvz:
        goto Eb1XP;
        p26A3:
        foreach ($siswas as $siswa) {
            goto WGckD;
            WGckD:
            $siswa->hph = unserialize($siswa->hph);
            goto Mt0JS;
            uKi42:
            $siswa->fisik = unserialize($siswa->fisik);
            goto Vqpfk;
            muMuI:
            $siswa->setting_mapel = unserialize($siswa->setting_mapel);
            goto mwNlU;
            Ye5hN:
            $siswa->absen = unserialize($siswa->absen);
            goto uKi42;
            BQ7t_:
            k5m70:
            goto KEeHy;
            AkIY3:
            $siswa->nilai_rapor = unserialize($siswa->nilai_rapor);
            goto Zx6pd;
            lwv_6:
            $siswa->sosial = unserialize($siswa->sosial);
            goto oAmRe;
            Zx6pd:
            $siswa->ekstra = unserialize($siswa->ekstra);
            goto hQ20_;
            Vqpfk:
            foreach ($siswa->fisik as $value) {
                $value->kondisi = unserialize($value->kondisi);
                Bc8G0:
            }
            goto BQ7t_;
            mwNlU:
            aDNXd:
            goto jTl79;
            aUHxw:
            $siswa->hpas = unserialize($siswa->hpas);
            goto AkIY3;
            KEeHy:
            $siswa->setting_rapor = unserialize($siswa->setting_rapor);
            goto muMuI;
            hQ20_:
            $siswa->spritual = unserialize($siswa->spritual);
            goto lwv_6;
            IWYNF:
            $siswa->prestasi = unserialize($siswa->prestasi);
            goto Ye5hN;
            oAmRe:
            $siswa->rank = unserialize($siswa->rank);
            goto IWYNF;
            Mt0JS:
            $siswa->hpts = unserialize($siswa->hpts);
            goto aUHxw;
            jTl79:
        }
        goto O6jMr;
        LmPoE:
        $data["\163\151\x73\167\141\x73"] = $siswas;
        goto Zjw3y;
        VY2Qh:
        $tahun = $this->input->get("\x74\141\150\165\156", true);
        goto EJwSh;
        i_05U:
        $smt = $this->dashboard->getSemesterActive();
        goto IRilk;
        fca8S:
        goto kUKvz;
        goto UfqoG;
        N93WU:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto eFJUr;
        Mpmj5:
        $setting = $this->dashboard->getSetting();
        goto Ply6i;
        pvJuP:
        $tp = $this->dashboard->getTahunActive();
        goto i_05U;
        prs2U:
        $data["\160\x72\157\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto zwOFO;
        EJwSh:
        $semester = $this->input->get("\x73\x65\x6d\145\x73\164\145\162", true);
        goto n7FQ1;
        UfqoG:
        SqXRZ:
        goto prs2U;
        ArjRd:
        $data["\147\165\x72\x75"] = $guru;
        goto c20gO;
        cbbUc:
        $this->load->view("\x73\145\x74\x74\x69\156\147\57\x64\x61\164\x61\x72\141\x70\157\162");
        goto xuuCG;
        lnLBN:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto BD_gp;
        IRilk:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto j0L_l;
        O6jMr:
        X3NLD:
        goto LmPoE;
        lsuhd:
        $kelas = $this->input->get("\x6b\145\x6c\141\163", true);
        goto VY2Qh;
        BD_gp:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto ArjRd;
        c20gO:
        $this->load->view("\x6d\x65\x6d\142\145\x72\163\57\x67\x75\x72\165\57\x74\x65\155\160\154\x61\x74\x65\x73\57\x68\145\141\144\145\x72", $data);
        goto cbbUc;
        Ply6i:
        $data = ["\165\x73\145\162" => $user, "\x6a\165\144\165\x6c" => "\105\144\151\x74\x20\x4e\151\154\x61\x69", "\163\x75\142\152\165\x64\x75\x6c" => "\x4e\151\154\141\x69\40\122\x61\160\157\162\40\113\x65\154\141\163\x20" . $kelas . "\x2c\x20\124\120\72" . $tahun . "\54\x20\123\x4d\124\x3a" . $semester, "\163\x65\164\164\x69\156\x67" => $setting];
        goto pvJuP;
        T0St4:
        $this->load->view("\x73\145\164\x74\151\x6e\147\57\144\x61\x74\x61\x72\x61\x70\157\x72");
        goto U1S6q;
        zwOFO:
        $this->load->view("\x5f\164\x65\155\160\x6c\x61\164\145\163\x2f\144\141\x73\x68\142\157\x61\x72\144\x2f\137\x68\x65\x61\144\x65\x72", $data);
        goto T0St4;
        eFJUr:
        $data["\163\x6d\164\137\141\x63\x74\x69\x76\x65"] = $smt;
        goto jwuYT;
        n7FQ1:
        $user = $this->ion_auth->user()->row();
        goto Mpmj5;
        Eb1XP:
    }
    public function dkn()
    {
        goto b0EmS;
        Oiryg:
        $siswas = $this->rapor->getDataKumpulanRapor($kelas, $tahun, $semester);
        goto LzOYX;
        jmusx:
        $data = ["\x75\x73\145\162" => $user, "\x6a\x75\x64\x75\154" => "\x45\x64\151\164\x20\116\151\154\x61\151", "\163\165\142\152\165\x64\x75\x6c" => "\116\x69\x6c\x61\x69\40\122\x61\160\157\162\x20\113\145\154\141\x73\40" . $kelas . "\x2c\40\124\120\x3a" . $tahun . "\54\40\x53\x4d\124\x3a" . $semester, "\163\145\x74\164\151\x6e\x67" => $setting];
        goto uhNAA;
        fJgDp:
        $data["\147\165\x72\x75"] = $guru;
        goto KAxvP;
        lY2U9:
        $tahun = $this->input->get("\x74\x61\x68\x75\x6e", true);
        goto hMtGW;
        oF15B:
        if ($this->ion_auth->is_admin()) {
            goto EPdrL;
        }
        goto I4kng;
        bcXYa:
        $this->load->view("\x5f\x74\x65\x6d\160\x6c\x61\164\145\x73\x2f\144\141\x73\150\142\157\x61\x72\144\x2f\x5f\x68\145\141\144\x65\162", $data);
        goto XzNOx;
        XigIJ:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto NnHFe;
        xgqE8:
        $data["\x74\160\x5f\x61\143\164\151\166\145"] = $tp;
        goto XigIJ;
        uhNAA:
        $tp = $this->dashboard->getTahunActive();
        goto lQAyP;
        M7fU6:
        TkKPf:
        goto Ey_K8;
        Okp_L:
        S07WE:
        goto wK1VC;
        NnHFe:
        $data["\x73\155\x74\137\141\x63\x74\x69\166\x65"] = $smt;
        goto Oiryg;
        RUFFj:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto fJgDp;
        P7cZ2:
        $setting = $this->dashboard->getSetting();
        goto jmusx;
        b0EmS:
        $kelas = $this->input->get("\x6b\x65\x6c\141\x73", true);
        goto lY2U9;
        XzNOx:
        $this->load->view("\x73\145\164\164\x69\156\x67\57\x64\x61\x74\x61\162\x61\x70\157\x72");
        goto h0Pik;
        EjgAy:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto xgqE8;
        Twd8l:
        $this->load->view("\x73\145\x74\164\151\x6e\147\57\x64\x61\x74\x61\162\141\160\x6f\162");
        goto eXv_4;
        KAxvP:
        $this->load->view("\x6d\145\x6d\x62\x65\162\x73\x2f\x67\x75\x72\x75\x2f\x74\145\155\160\x6c\x61\x74\145\x73\57\150\145\141\144\x65\x72", $data);
        goto Twd8l;
        NFCbc:
        $data["\160\162\x6f\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto bcXYa;
        wK1VC:
        $data["\x73\151\163\167\x61\x73"] = $siswas;
        goto oF15B;
        I4kng:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto RUFFj;
        lQAyP:
        $smt = $this->dashboard->getSemesterActive();
        goto EjgAy;
        eXv_4:
        $this->load->view("\155\x65\155\x62\145\x72\163\x2f\147\x75\x72\x75\57\164\x65\155\160\x6c\141\164\145\x73\x2f\x66\157\x6f\x74\x65\162");
        goto GdFRr;
        eKwCQ:
        EPdrL:
        goto NFCbc;
        GdFRr:
        goto TkKPf;
        goto eKwCQ;
        LzOYX:
        foreach ($siswas as $siswa) {
            goto WC9OR;
            meC1L:
            f_5Gl:
            goto c1pwo;
            GeyO3:
            $siswa->setting_mapel = unserialize($siswa->setting_mapel);
            goto ozpdU;
            KZrjP:
            $siswa->spritual = unserialize($siswa->spritual);
            goto pc5uA;
            ae4_v:
            $siswa->hpts = unserialize($siswa->hpts);
            goto pxbAu;
            c1pwo:
            $siswa->setting_rapor = unserialize($siswa->setting_rapor);
            goto GeyO3;
            vFDPa:
            $siswa->nilai_rapor = unserialize($siswa->nilai_rapor);
            goto dlRC7;
            CoVNA:
            $siswa->absen = unserialize($siswa->absen);
            goto RRb3J;
            ozpdU:
            T2XyW:
            goto Vk2Az;
            WC9OR:
            $siswa->hph = unserialize($siswa->hph);
            goto ae4_v;
            YziJl:
            $siswa->prestasi = unserialize($siswa->prestasi);
            goto CoVNA;
            RxS74:
            $siswa->rank = unserialize($siswa->rank);
            goto YziJl;
            oG4sP:
            foreach ($siswa->fisik as $value) {
                $value->kondisi = unserialize($value->kondisi);
                a2NbM:
            }
            goto meC1L;
            pxbAu:
            $siswa->hpas = unserialize($siswa->hpas);
            goto vFDPa;
            dlRC7:
            $siswa->ekstra = unserialize($siswa->ekstra);
            goto KZrjP;
            pc5uA:
            $siswa->sosial = unserialize($siswa->sosial);
            goto RxS74;
            RRb3J:
            $siswa->fisik = unserialize($siswa->fisik);
            goto oG4sP;
            Vk2Az:
        }
        goto Okp_L;
        h0Pik:
        $this->load->view("\x5f\x74\145\155\160\x6c\141\164\145\x73\57\144\x61\163\x68\142\x6f\141\x72\144\x2f\x5f\x66\157\157\164\145\162");
        goto M7fU6;
        Prno_:
        $user = $this->ion_auth->user()->row();
        goto P7cZ2;
        hMtGW:
        $semester = $this->input->get("\163\x65\155\145\163\x74\x65\162", true);
        goto Prno_;
        Ey_K8:
    }
    function group_by($key, $data)
    {
        goto sxVFU;
        XVYS6:
        return $result;
        goto T4KX3;
        sxVFU:
        $result = array();
        goto xm7ic;
        xm7ic:
        foreach ($data as $val) {
            goto q1Ch_;
            RA8V5:
            Izeb4:
            goto hmiqc;
            WFOoB:
            goto Izeb4;
            goto d6dGr;
            hmiqc:
            s_4fG:
            goto uXioQ;
            wwe5I:
            $result[$val->{$key}][] = $val;
            goto RA8V5;
            q1Ch_:
            if (array_key_exists($key, $val)) {
                goto YElL7;
            }
            goto DCCJi;
            DCCJi:
            $result[''][] = $val;
            goto WFOoB;
            d6dGr:
            YElL7:
            goto wwe5I;
            uXioQ:
        }
        goto hkOdQ;
        hkOdQ:
        keEO9:
        goto XVYS6;
        T4KX3:
    }
}
