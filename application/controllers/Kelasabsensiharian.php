<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelasabsensiharian extends CI_Controller
{
    public function __construct()
    {
        goto v5flg;
        a02I0:
        if (!$this->ion_auth->logged_in()) {
            goto gT25k;
        }
        goto ArF4s;
        KmYXT:
        gT25k:
        goto cqdGa;
        IulO3:
        IymKF:
        goto CvGgS;
        pCvFA:
        $this->form_validation->set_error_delimiters('', '');
        goto wNtPd;
        kkuDw:
        Sh2Nq:
        goto BlUg8;
        ib0g3:
        $this->load->model("\113\145\x6c\x61\x73\x5f\155\157\144\x65\x6c", "\x6b\145\154\x61\163");
        goto pCvFA;
        thHBA:
        $this->load->model("\104\x61\163\x68\142\157\x61\162\x64\x5f\155\x6f\x64\x65\x6c", "\144\141\x73\x68\142\x6f\141\162\144");
        goto tw9fL;
        ArF4s:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\165"))) {
            goto IymKF;
        }
        goto Q1dUZ;
        BlUg8:
        $this->load->library(["\x64\x61\x74\x61\x74\x61\x62\x6c\x65\163", "\x66\x6f\162\x6d\x5f\166\141\154\151\144\141\x74\x69\x6f\156"]);
        goto eAqFA;
        Q1dUZ:
        show_error("\110\x61\x6e\171\141\x20\101\x64\155\151\x6e\151\x73\164\162\141\x74\157\162\40\x79\x61\x6e\147\40\144\x69\142\145\162\151\40\150\x61\x6b\40\x75\156\164\x75\153\x20\155\145\156\x67\x61\x6b\163\145\163\x20\150\141\154\x61\x6d\x61\x6e\x20\x69\x6e\151\54\x20\74\141\x20\150\x72\145\146\75\x22" . base_url("\144\141\x73\150\142\x6f\x61\162\x64") . "\42\x3e\x4b\145\155\142\x61\154\x69\x20\153\145\40\x6d\x65\x6e\x75\x20\141\167\x61\154\74\57\x61\76", 403, "\x41\153\x73\145\163\x20\x54\145\162\x6c\141\x72\141\x6e\147");
        goto IulO3;
        v5flg:
        parent::__construct();
        goto a02I0;
        tw9fL:
        $this->load->model("\x44\x72\157\160\144\x6f\167\x6e\137\155\x6f\144\x65\154", "\144\x72\x6f\x70\144\157\167\156");
        goto ib0g3;
        cqdGa:
        redirect("\141\165\x74\x68");
        goto kkuDw;
        CvGgS:
        goto Sh2Nq;
        goto KmYXT;
        eAqFA:
        $this->load->model("\x4d\141\163\164\x65\162\x5f\155\x6f\x64\x65\x6c", "\155\x61\163\164\145\162");
        goto thHBA;
        wNtPd:
    }
    public function output_json($data, $encode = true)
    {
        goto R2CJg;
        ssdUr:
        $data = json_encode($data);
        goto Ahuqq;
        qYmBE:
        $this->output->set_content_type("\x61\160\160\154\x69\143\x61\164\x69\x6f\156\57\x6a\x73\157\x6e")->set_output($data);
        goto EPTjS;
        R2CJg:
        if (!$encode) {
            goto g12N4;
        }
        goto ssdUr;
        Ahuqq:
        g12N4:
        goto qYmBE;
        EPTjS:
    }
    public function index()
    {
        goto UoO2D;
        IkrrW:
        $this->load->view("\x5f\x74\145\x6d\160\x6c\141\164\145\163\57\144\141\163\x68\x62\157\141\x72\144\57\137\x66\157\157\164\145\162");
        goto SOK4O;
        Jc1vP:
        $data = ["\x75\x73\x65\x72" => $user, "\152\x75\x64\x75\x6c" => "\113\145\x68\141\144\x69\x72\141\156\x20\110\x61\162\151\x61\156\x20\123\151\x73\x77\141", "\x73\x75\x62\152\165\x64\165\154" => "\104\141\164\x61\40\x4b\x65\x68\141\144\x69\x72\141\156\40\123\x69\163\x77\x61", "\x73\x65\164\x74\151\156\x67" => $this->dashboard->getSetting()];
        goto duvJG;
        O1Cvi:
        $data["\147\165\162\x75"] = $guru;
        goto zSsCS;
        TRIxp:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto gPs8r;
        XILke:
        $data["\x6d\x61\160\x65\x6c"] = $this->dropdown->getAllMapel();
        goto y1OxX;
        C1uWs:
        UoLK5:
        goto fnJpm;
        fTwK3:
        $this->load->view("\137\164\145\x6d\x70\154\x61\164\x65\x73\x2f\x64\141\x73\x68\142\x6f\x61\x72\144\57\137\x68\145\x61\x64\x65\162", $data);
        goto R4rjI;
        fnJpm:
        $data["\160\162\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto ipXvs;
        eC5BQ:
        $this->load->view("\155\145\x6d\x62\x65\x72\163\57\147\x75\162\165\57\x74\145\x6d\160\154\141\x74\x65\x73\x2f\150\145\141\x64\x65\162", $data);
        goto okagM;
        y1OxX:
        if ($this->ion_auth->is_admin()) {
            goto UoLK5;
        }
        goto jtzIo;
        DqUld:
        $this->load->view("\155\x65\155\x62\145\x72\x73\x2f\x67\x75\x72\x75\x2f\x74\145\155\160\154\x61\164\x65\x73\x2f\x66\x6f\157\164\145\162");
        goto DU7rt;
        duvJG:
        $tp = $this->master->getTahunActive();
        goto dyCr_;
        jtzIo:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto ZmZjC;
        w31AW:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto wPjmp;
        G44A_:
        $data["\x6b\x65\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto XILke;
        dyCr_:
        $smt = $this->master->getSemesterActive();
        goto w31AW;
        R4rjI:
        $this->load->view("\x6b\x65\154\x61\x73\57\x61\x62\x73\145\156\150\141\x72\151\141\156\x2f\x64\x61\x74\x61");
        goto IkrrW;
        UoO2D:
        $user = $this->ion_auth->user()->row();
        goto Jc1vP;
        ZmZjC:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto O1Cvi;
        okagM:
        $this->load->view("\x6b\x65\154\x61\163\57\141\142\x73\145\x6e\x68\x61\162\151\x61\x6e\x2f\144\141\164\141");
        goto DqUld;
        DU7rt:
        goto s_5Nk;
        goto C1uWs;
        SOK4O:
        s_5Nk:
        goto Sb3kd;
        zSsCS:
        $data["\x69\144\137\147\x75\x72\x75"] = $guru->id_guru;
        goto eC5BQ;
        gPs8r:
        $data["\163\x6d\x74\137\x61\143\164\x69\x76\x65"] = $smt;
        goto G44A_;
        ipXvs:
        $data["\147\165\162\165"] = $this->dropdown->getAllGuru();
        goto fTwK3;
        wPjmp:
        $data["\164\160\137\x61\x63\x74\x69\166\x65"] = $tp;
        goto TRIxp;
        Sb3kd:
    }
    public function loadAbsensi()
    {
        goto cpsJf;
        WHWJC:
        goto Wwmvp;
        goto I4c6K;
        LIU09:
        G_xLn:
        goto TIHAO;
        Np0sF:
        if ($info != null) {
            goto AfeEk;
        }
        goto LvzW2;
        vGOU5:
        foreach ($siswa as $s) {
            goto sZd9r;
            Uid7O:
            foreach ($status_materi as $stat) {
                $status[$stat->jam_ke][$stat->id_mapel][$stat->jenis] = $stat;
                iEt_m:
            }
            goto ZgTmO;
            WiPkZ:
            $status_materi = $this->kelas->getRekapStatusMateri($s->id_siswa, $arrIdKjm);
            goto SKVO4;
            b0OdX:
            if (!(count($arrIdKjm) > 0)) {
                goto n7Wh_;
            }
            goto WiPkZ;
            DxPyP:
            iwNnv:
            goto bnjSy;
            SKVO4:
            n7Wh_:
            goto Eh3ys;
            Eh3ys:
            $status = [];
            goto Uid7O;
            sZd9r:
            $status_materi = [];
            goto b0OdX;
            ZgTmO:
            AMpoS:
            goto L1Xuo;
            L1Xuo:
            $log[$s->id_siswa] = ["\156\x61\155\x61" => $s->nama, "\156\151\x73" => $s->nis, "\153\x65\x6c\141\x73" => $s->nama_kelas, "\x73\164\141\x74\x75\x73" => $status];
            goto DxPyP;
            bnjSy:
        }
        goto nPuc6;
        EP7x9:
        $bulan = $this->input->post("\x62\154\156", true);
        goto y5KKh;
        ZRTNH:
        if (!(count($arrIdMapel) > 0)) {
            goto yv_eJ;
        }
        goto PkNDH;
        MbJC4:
        wodaj:
        goto tUE4Y;
        gUC9U:
        $tanggal = str_pad($tanggal, 2, "\x30", STR_PAD_LEFT);
        goto QrdSf;
        s2Oe_:
        $jadwal = $this->dashboard->loadJadwalHariIni($id_tp, $id_smt, $id_kelas, $hari);
        goto RzYrL;
        MFPwd:
        $id_tp = $this->master->getTahunActive()->id_tp;
        goto xB3nZ;
        tUE4Y:
        $jadwal_materi = [];
        goto ZRTNH;
        qgTvd:
        Alnvf:
        goto yWeXy;
        LvzW2:
        $istirahat = [];
        goto WHWJC;
        uclwf:
        yv_eJ:
        goto O0DLf;
        vdV2t:
        foreach ($jadwal as $jd) {
            array_push($arrIdMapel, $jd->id_mapel);
            AnUtJ:
        }
        goto MbJC4;
        RzYrL:
        $arrIdMapel = [];
        goto vdV2t;
        xB3nZ:
        $id_smt = $this->master->getSemesterActive()->id_smt;
        goto tt8JE;
        VwapK:
        Wwmvp:
        goto s2Oe_;
        I4c6K:
        AfeEk:
        goto DAyOJ;
        LvcUI:
        foreach ($jadwal_materi as $jmtr) {
            goto yGOyo;
            fj5An:
            ohvKM:
            goto tCuoW;
            yGOyo:
            foreach ($jmtr as $jam) {
                goto KVh2D;
                l0RBi:
                cYKUW:
                goto eWwoG;
                zTd2W:
                UyLrY:
                goto l0RBi;
                KVh2D:
                foreach ($jam as $jns) {
                    array_push($arrIdKjm, $jns->id_kjm);
                    GR_3e:
                }
                goto zTd2W;
                eWwoG:
            }
            goto rx_tu;
            rx_tu:
            z3Vwx:
            goto fj5An;
            tCuoW:
        }
        goto qgTvd;
        uqur4:
        $log = [];
        goto QxBr0;
        PkNDH:
        $jadwal_materi = $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\55" . $bulan . "\x2d" . $tanggal, $arrIdMapel);
        goto uclwf;
        tt8JE:
        $bulan = str_pad($bulan, 2, "\x30", STR_PAD_LEFT);
        goto gUC9U;
        cpsJf:
        $id_kelas = $this->input->post("\x6b\145\x6c\141\163", true);
        goto AlslQ;
        DAyOJ:
        $istirahat = unserialize($info->istirahat);
        goto VwapK;
        nPuc6:
        vYHTP:
        goto LIU09;
        QxBr0:
        if (!($info != null)) {
            goto G_xLn;
        }
        goto vGOU5;
        QrdSf:
        $info = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas);
        goto Np0sF;
        yWeXy:
        $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt);
        goto uqur4;
        y5KKh:
        $tanggal = $this->input->post("\164\x67\x6c", true);
        goto JZEqX;
        O0DLf:
        $arrIdKjm = [];
        goto LvcUI;
        AlslQ:
        $tahun = $this->input->post("\x74\x68\156", true);
        goto EP7x9;
        TIHAO:
        $this->output_json(array("\x74\x65\163\164" => [$id_kelas, $tahun . "\55" . $bulan . "\x2d" . $tanggal, $arrIdMapel], "\x6c\x6f\147" => $log, "\x69\x6e\146\x6f" => $info, "\152\141\144\x77\141\154" => $jadwal, "\x6d\x61\164\145\162\151" => $jadwal_materi, "\151\163\x74\x69\x72\x61\x68\141\164" => $istirahat));
        goto mrfFF;
        JZEqX:
        $hari = $this->input->post("\x68\141\162\x69", true);
        goto MFPwd;
        mrfFF:
    }
}
