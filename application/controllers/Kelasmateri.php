<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelasmateri extends CI_Controller
{
    public function __construct()
    {
        goto krHis;
        q0j1T:
        $this->load->model("\x4d\141\163\x74\145\162\x5f\155\157\144\x65\154", "\x6d\141\x73\x74\145\x72");
        goto kD4oC;
        ZlklY:
        $this->load->helper("\x6d\171");
        goto q0j1T;
        ae167:
        Oseod:
        goto fejOZ;
        KE9gv:
        goto cgG_d;
        goto ae167;
        sCamx:
        cgG_d:
        goto K5hEU;
        HVanq:
        show_error("\110\x61\156\171\x61\x20\101\x64\155\151\156\x69\x73\x74\x72\141\164\157\162\40\144\x61\x6e\x20\x67\x75\162\165\40\x79\x61\x6e\x67\40\144\x69\142\x65\162\151\40\x68\x61\153\x20\165\156\164\x75\x6b\40\x6d\x65\x6e\147\141\x6b\x73\x65\163\40\x68\x61\x6c\x61\155\x61\x6e\x20\x69\156\151\x2c\40\x3c\141\40\x68\162\145\146\x3d\42" . base_url("\144\x61\163\x68\142\x6f\x61\x72\x64") . "\42\76\113\145\155\x62\x61\154\151\x20\153\x65\40\x6d\145\x6e\165\x20\141\167\x61\154\x3c\57\141\76", 403, "\101\x6b\x73\x65\163\x20\124\145\162\154\141\x72\x61\x6e\x67");
        goto lLSsk;
        lLSsk:
        ZIwEF:
        goto KE9gv;
        YEl7k:
        $this->load->model("\104\162\x6f\160\x64\x6f\x77\x6e\137\x6d\x6f\144\x65\154", "\x64\162\157\160\144\x6f\x77\156");
        goto zj1gP;
        krHis:
        parent::__construct();
        goto LEAH5;
        kD4oC:
        $this->load->model("\104\141\x73\x68\142\x6f\141\162\144\x5f\155\x6f\x64\x65\x6c", "\144\141\163\150\x62\157\141\x72\x64");
        goto cRiJa;
        ZZYrn:
        $this->form_validation->set_error_delimiters('', '');
        goto bF6dZ;
        fejOZ:
        redirect("\141\165\x74\150");
        goto sCamx;
        LEAH5:
        if (!$this->ion_auth->logged_in()) {
            goto Oseod;
        }
        goto uolVp;
        uolVp:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) {
            goto ZIwEF;
        }
        goto HVanq;
        eDccK:
        $this->load->library(["\144\x61\164\141\x74\x61\142\x6c\145\x73", "\x66\157\162\155\x5f\166\141\x6c\151\144\x61\x74\151\157\156"]);
        goto ZlklY;
        zj1gP:
        $this->load->model("\114\x6f\147\x5f\155\157\x64\145\x6c", "\154\157\147\147\151\156\x67");
        goto ZZYrn;
        cRiJa:
        $this->load->model("\x4b\x65\x6c\x61\x73\137\x6d\x6f\144\145\154", "\153\x65\154\141\x73");
        goto YEl7k;
        K5hEU:
        $this->load->library("\165\x70\x6c\157\x61\144");
        goto eDccK;
        bF6dZ:
    }
    public function output_json($data, $encode = true)
    {
        goto fRCUx;
        fRCUx:
        if (!$encode) {
            goto whzUW;
        }
        goto rmhQu;
        ur_cm:
        $this->output->set_content_type("\x61\x70\x70\154\x69\x63\x61\x74\x69\157\156\57\152\163\157\156")->set_output($data);
        goto VtJsS;
        ljQaj:
        whzUW:
        goto ur_cm;
        rmhQu:
        $data = json_encode($data);
        goto ljQaj;
        VtJsS:
    }
    public function index()
    {
        goto ZzdpR;
        TgAiV:
        FWqGY:
        goto nbIXO;
        G9fXL:
        EgCVy:
        goto VSKch;
        j1rcC:
        $data["\x67\x75\162\165\163"] = $allGuru;
        goto lp8xX;
        pTXNq:
        $setting = $this->dashboard->getSetting();
        goto B_6zu;
        Shjf0:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto u1Nm6;
        ozXWy:
        kaS5N:
        goto TMEDC;
        iSWer:
        $data["\155\141\x74\145\x72\151"] = $materi;
        goto nbM6H;
        EH7XL:
        $data["\x6a\x61\144\167\x61\x6c\x5f\155\141\x74\x65\162\x69"] = $jadwal_materi;
        goto HL5gF;
        nbIXO:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto bWIC2;
        nFYzW:
        $kelas_materi = [];
        goto L9VIF;
        y_QPx:
        $this->load->view("\x6d\145\155\x62\x65\x72\163\57\x67\165\x72\x75\57\x74\x65\x6d\160\154\x61\x74\145\163\57\x66\157\157\164\x65\x72");
        goto XNWtC;
        L9VIF:
        $jadwal_materi = [];
        goto zWigc;
        lNJaC:
        $kelas_materi = [];
        goto XCirH;
        I_3hT:
        SEDC0:
        goto SpERo;
        XNWtC:
        goto SEDC0;
        goto G9fXL;
        gGkdL:
        $user = $this->ion_auth->user()->row();
        goto pTXNq;
        VSKch:
        $id_guru = $this->input->get("\x69\144");
        goto p3RCF;
        Uq8t2:
        if ($this->ion_auth->is_admin()) {
            goto EgCVy;
        }
        goto RWtiV;
        ARk5B:
        $data["\x6b\x65\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto Uq8t2;
        iqSho:
        $materi = $this->kelas->getAllMateriKelas($guru->id_guru, "\x31");
        goto lNJaC;
        XCirH:
        $jadwal_materi = [];
        goto CCJYI;
        BEgmz:
        $this->load->view("\137\x74\x65\155\160\154\141\x74\x65\x73\x2f\x64\x61\163\150\x62\x6f\141\162\x64\x2f\137\x68\x65\141\x64\x65\162", $data);
        goto r1vz6;
        CCJYI:
        foreach ($materi as $m) {
            goto BjNCG;
            HuoO7:
            mrZZg:
            goto sPOgT;
            YAEFq:
            $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, $jenis, $tp->id_tp, $smt->id_smt);
            goto HuoO7;
            BjNCG:
            $kelas_materi[$m->id_materi] = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas));
            goto YAEFq;
            sPOgT:
        }
        goto TgAiV;
        B_6zu:
        $data = ["\x75\x73\x65\x72" => $user, "\152\x75\144\165\x6c" => "\115\x61\164\x65\x72\151\40\102\145\x6c\141\x6a\x61\162", "\163\165\x62\152\x75\144\x75\x6c" => "\x4d\x61\x74\145\x72\x69", "\163\145\x74\x74\x69\156\x67" => $setting];
        goto lj4q0;
        Rxjjh:
        $data["\147\165\162\x75"] = $guru;
        goto RK2SC;
        bWIC2:
        $data["\x67\165\162\x75\x73"] = $nguru;
        goto Rxjjh;
        HL5gF:
        $this->load->view("\x6d\145\x6d\x62\x65\162\x73\57\x67\x75\162\165\57\164\145\x6d\x70\x6c\141\164\x65\x73\57\150\x65\x61\144\145\162", $data);
        goto wacv_;
        GYLIa:
        $this->load->view("\x5f\164\145\155\x70\154\x61\x74\145\163\57\144\x61\x73\150\142\157\141\162\x64\x2f\x5f\146\x6f\157\164\145\x72");
        goto I_3hT;
        hwi9A:
        $data["\152\165\162\x75\163\141\x6e"] = $this->dropdown->getAllJurusan();
        goto zUK6D;
        lp8xX:
        $data["\151\144\137\x67\x75\x72\x75"] = $id_guru == null ? '' : $id_guru;
        goto PA2db;
        nM8Mh:
        $data["\x6d\141\x74\145\x72\x69"] = $materi;
        goto KrzTC;
        DIXF9:
        foreach ($materi as $m) {
            goto jXo67;
            BzEmx:
            Sbebg:
            goto ilL3q;
            ukIAm:
            if (!($km == null)) {
                goto Sbebg;
            }
            goto y3xmP;
            ilL3q:
            $kelas_materi[$m->id_materi] = $km;
            goto rBI_0;
            ifAjs:
            oNRtD:
            goto ZNccR;
            y3xmP:
            $km = $this->kelas->getNamaKelasByKode(unserialize($m->materi_kelas));
            goto BzEmx;
            jXo67:
            $km = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas));
            goto ukIAm;
            rBI_0:
            $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, $jenis, $tp->id_tp, $smt->id_smt);
            goto ifAjs;
            ZNccR:
        }
        goto ozXWy;
        u1Nm6:
        $data["\x73\155\x74\x5f\x61\x63\x74\x69\166\x65"] = $smt;
        goto hwi9A;
        zWigc:
        if (!($id_guru != null)) {
            goto N1SKr;
        }
        goto Gd6UM;
        N062k:
        $data["\x74\x70\x5f\141\x63\164\151\x76\x65"] = $tp;
        goto Shjf0;
        B33v1:
        $data["\152\x61\144\x77\x61\x6c\x5f\x6d\x61\164\145\x72\151"] = $jadwal_materi;
        goto BEgmz;
        fJN3C:
        array_unshift($allGuru, ["\60\x30" => "\123\145\x6d\x75\141\x20\107\x75\162\165"]);
        goto j1rcC;
        dbpwX:
        $allGuru = $this->dropdown->getAllGuru();
        goto fJN3C;
        PA2db:
        $materi = [];
        goto nFYzW;
        TMEDC:
        N1SKr:
        goto iSWer;
        RK2SC:
        $data["\x69\x64\x5f\147\165\162\165"] = $guru->id_guru;
        goto nM8Mh;
        r1vz6:
        $this->load->view("\x6b\145\154\x61\x73\x2f\x6d\141\x74\145\x72\x69\57\144\141\x74\141");
        goto GYLIa;
        p3RCF:
        $data["\160\162\x6f\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto dbpwX;
        KrzTC:
        $data["\153\x65\x6c\x61\x73\137\x6d\141\164\x65\x72\151"] = $kelas_materi;
        goto EH7XL;
        Gd6UM:
        $materi = $this->kelas->getAllMateriKelas($id_guru, "\x31");
        goto DIXF9;
        jmALq:
        $smt = $this->dashboard->getSemesterActive();
        goto dw3Ti;
        ZzdpR:
        $jenis = $this->input->get("\152\145\x6e\151\163");
        goto gGkdL;
        wacv_:
        $this->load->view("\x6b\x65\154\141\x73\x2f\155\x61\164\145\162\x69\x2f\144\x61\x74\x61");
        goto y_QPx;
        lj4q0:
        $tp = $this->dashboard->getTahunActive();
        goto jmALq;
        zUK6D:
        $data["\x6c\x65\x76\145\x6c"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto ARk5B;
        dw3Ti:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto N062k;
        RWtiV:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto iqSho;
        nbM6H:
        $data["\153\x65\154\141\163\137\155\x61\164\x65\162\151"] = $kelas_materi;
        goto B33v1;
        SpERo:
    }
    public function materi()
    {
        goto pzUSV;
        sAKti:
        $data["\147\165\162\x75"] = $guru;
        goto HZj5N;
        voDWk:
        dt3XF:
        goto gBnhg;
        ZSCRp:
        $data["\152\x61\x64\167\x61\x6c\137\155\x61\x74\145\x72\x69"] = $jadwal_materi;
        goto e0lzK;
        RXysc:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto eqoAT;
        fxjHC:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto EFL6E;
        T_6xF:
        $data["\x6a\x61\x64\167\x61\x6c\x5f\x6d\141\164\145\162\x69"] = $jadwal_materi;
        goto L8qh2;
        kSs6x:
        $data["\147\165\x72\x75\x73"] = $nguru;
        goto sAKti;
        h7Mgo:
        $materi = [];
        goto ZTUpm;
        xG55X:
        $jadmpl = $this->kelas->getJadwalMapel($tp->id_tp, $smt->id_smt);
        goto WFNC0;
        rBBVr:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto sFQSw;
        qUFbT:
        $data["\x6d\141\164\145\x72\151"] = $materi;
        goto u1HFg;
        zqyt4:
        goto baL36;
        goto Yqztb;
        gBnhg:
        sKNXR:
        goto gbokI;
        WFNC0:
        $data["\x6a\x61\x64\167\141\154\x5f\155\141\160\x65\x6c"] = $jadmpl;
        goto IYH6c;
        I93Hn:
        $allGuru = $this->dropdown->getAllGuru();
        goto hxyd9;
        cRqlj:
        $id_guru = $this->input->get("\151\144");
        goto qlAB5;
        IYH6c:
        $arr_h = [];
        goto dsQIq;
        hxyd9:
        $allGuru["\60\x30"] = "\123\x65\x6d\165\141\x20\107\x75\x72\x75";
        goto qIaYs;
        UK2LD:
        foreach ($materi as $m) {
            goto adYrW;
            yK38O:
            $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, "\61", $tp->id_tp, $smt->id_smt);
            goto HuGHQ;
            HuGHQ:
            djmwJ:
            goto plLbd;
            adYrW:
            $kelas_materi[$m->id_materi] = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas));
            goto yK38O;
            plLbd:
        }
        goto pcld0;
        EFL6E:
        $data["\163\x6d\164\x5f\x61\x63\x74\x69\166\145"] = $smt;
        goto Z3FTm;
        VlrGx:
        QG33O:
        goto r4INL;
        LPBo8:
        if (!($id_guru != null)) {
            goto sKNXR;
        }
        goto eN_AB;
        Qczi6:
        $smt = $this->dashboard->getSemesterActive();
        goto rBBVr;
        U7oAz:
        $this->load->view("\x5f\164\145\155\160\x6c\x61\164\145\163\x2f\144\141\163\150\142\157\141\162\144\x2f\x5f\x66\157\x6f\164\145\162");
        goto welDb;
        gSOsQ:
        $data = ["\x75\x73\145\x72" => $user, "\x6a\x75\144\165\x6c" => "\x4d\141\164\x65\162\x69\x20\x42\145\x6c\x61\152\x61\162", "\x73\165\x62\152\x75\x64\165\x6c" => "\115\141\x74\x65\162\x69", "\163\145\x74\164\151\156\x67" => $setting];
        goto g30n6;
        g30n6:
        $tp = $this->dashboard->getTahunActive();
        goto Qczi6;
        r4INL:
        $data["\164\x61\x6e\147\147\x61\x6c\137\x6a\x61\144\x77\x61\154"] = $arr_h;
        goto WPApP;
        qlAB5:
        $data["\x70\x72\x6f\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto I93Hn;
        djyuT:
        $kelas_materi = [];
        goto pYLuK;
        WPApP:
        if ($this->ion_auth->is_admin()) {
            goto GVnL_;
        }
        goto RXysc;
        dsQIq:
        foreach ($jadmpl as $j => $h) {
            goto ipNfI;
            SWXlU:
            Gh2OA:
            goto hhfs_;
            hhfs_:
            h7EvQ:
            goto RgaKc;
            ipNfI:
            foreach ($h as $v) {
                goto vp0AX;
                fAnKr:
                zU1iB:
                goto YJGob;
                b5kpm:
                OO0pk:
                goto fAnKr;
                vp0AX:
                foreach ($v as $kk => $vk) {
                    goto r8zOO;
                    Y9i8q:
                    $arr_h[$vk->id_mapel][$vk->id_kelas][$vk->id_hari][] = $vk->jam_ke;
                    goto NTzJ1;
                    geyZk:
                    if (in_array($vk->id_hari, $arr_h[$vk->id_mapel])) {
                        goto l7r37;
                    }
                    goto Y6XmA;
                    Fg_7k:
                    l7r37:
                    goto tVA24;
                    vZsiw:
                    Mfqcv:
                    goto KGy0N;
                    NTzJ1:
                    goto OLnSV;
                    goto uGBi4;
                    tVA24:
                    OLnSV:
                    goto vZsiw;
                    uGBi4:
                    yNcqh:
                    goto geyZk;
                    r8zOO:
                    if (isset($arr_h[$vk->id_mapel])) {
                        goto yNcqh;
                    }
                    goto UQHTQ;
                    Y6XmA:
                    $arr_h[$vk->id_mapel][$vk->id_kelas][$vk->id_hari][] = $vk->jam_ke;
                    goto Fg_7k;
                    UQHTQ:
                    $arr_h[$vk->id_mapel] = [];
                    goto Y9i8q;
                    KGy0N:
                }
                goto b5kpm;
                YJGob:
            }
            goto SWXlU;
            RgaKc:
        }
        goto VlrGx;
        welDb:
        baL36:
        goto BI8kg;
        sFQSw:
        $data["\x74\160\137\141\x63\x74\151\x76\x65"] = $tp;
        goto fxjHC;
        pYLuK:
        $jadwal_materi = [];
        goto UK2LD;
        HtqOc:
        $data["\152\x65\x6e\151\x73"] = "\x31";
        goto xG55X;
        pzUSV:
        $user = $this->ion_auth->user()->row();
        goto FjOkC;
        LNUoM:
        $data["\x6b\145\154\x61\163\x5f\x6d\141\x74\x65\162\x69"] = $kelas_materi;
        goto ZSCRp;
        E9hzU:
        foreach ($materi as $m) {
            goto X4okI;
            dO80t:
            if (!(count($arrKls) > 0)) {
                goto HJcbT;
            }
            goto DvIm2;
            m9CR6:
            $km = $this->kelas->getNamaKelasByKode(unserialize($m->materi_kelas));
            goto oCWib;
            X4okI:
            $arrKls = unserialize($m->materi_kelas);
            goto dO80t;
            DvIm2:
            $km = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas));
            goto AgiVn;
            oCWib:
            nCu4C:
            goto j1YP0;
            AgiVn:
            if (!($km == null)) {
                goto nCu4C;
            }
            goto m9CR6;
            VGqen:
            sYGPw:
            goto MU0LV;
            EIByx:
            HJcbT:
            goto VGqen;
            j1YP0:
            $kelas_materi[$m->id_materi] = $km;
            goto zEZ5n;
            zEZ5n:
            $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, "\61", $tp->id_tp, $smt->id_smt);
            goto EIByx;
            MU0LV:
        }
        goto voDWk;
        hfE4o:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto kSs6x;
        gbokI:
        $data["\155\141\x74\x65\x72\x69"] = $materi;
        goto LNUoM;
        u1HFg:
        $data["\x6b\x65\154\x61\x73\137\x6d\x61\x74\145\x72\151"] = $kelas_materi;
        goto T_6xF;
        FjOkC:
        $setting = $this->dashboard->getSetting();
        goto gSOsQ;
        L8qh2:
        $this->load->view("\155\145\155\x62\145\162\163\x2f\x67\x75\x72\165\57\164\x65\155\x70\x6c\x61\x74\x65\163\57\x68\145\x61\x64\145\x72", $data);
        goto IVU6d;
        XY07v:
        $jadwal_materi = [];
        goto LPBo8;
        qIaYs:
        $data["\x67\x75\x72\x75\x73"] = $allGuru;
        goto EkK99;
        eN_AB:
        $materi = $this->kelas->getAllMateriKelas($id_guru, "\61");
        goto E9hzU;
        EkK99:
        $data["\x69\144\x5f\x67\x75\162\x75"] = $id_guru == null ? '' : $id_guru;
        goto h7Mgo;
        HZj5N:
        $data["\x69\x64\137\x67\x75\162\165"] = $guru->id_guru;
        goto qUFbT;
        ZTUpm:
        $kelas_materi = [];
        goto XY07v;
        e0lzK:
        $this->load->view("\x5f\164\145\155\x70\x6c\141\x74\x65\163\x2f\144\x61\163\x68\x62\157\141\x72\x64\57\137\x68\145\x61\144\x65\x72", $data);
        goto ouFM1;
        ouFM1:
        $this->load->view("\x6b\x65\154\141\163\x2f\x6d\x61\164\x65\162\151\57\144\141\164\141");
        goto U7oAz;
        Yqztb:
        GVnL_:
        goto cRqlj;
        pcld0:
        KIm8X:
        goto hfE4o;
        oz4HI:
        $data["\x6b\x65\154\x61\163"] = $arr_kelas;
        goto HtqOc;
        IVU6d:
        $this->load->view("\153\x65\x6c\x61\x73\57\x6d\141\x74\145\162\x69\57\x64\x61\164\141");
        goto AOu_A;
        dcBU_:
        $data["\154\x65\166\145\x6c"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto LX2Ah;
        eqoAT:
        $materi = $this->kelas->getAllMateriKelas($guru->id_guru, "\x31");
        goto djyuT;
        LX2Ah:
        $arr_kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto oz4HI;
        Z3FTm:
        $data["\x6a\165\x72\x75\x73\x61\156"] = $this->dropdown->getAllJurusan();
        goto dcBU_;
        AOu_A:
        $this->load->view("\155\x65\x6d\142\x65\x72\x73\57\147\165\x72\165\x2f\x74\145\155\160\154\x61\164\x65\x73\x2f\x66\x6f\x6f\x74\x65\x72");
        goto zqyt4;
        BI8kg:
    }
    public function tugas()
    {
        goto nlzqg;
        GEFHV:
        $data["\x74\160\x5f\141\143\164\151\166\x65"] = $tp;
        goto G6rln;
        foQIz:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto GEFHV;
        ID7GP:
        sxu3V:
        goto LACBl;
        OU7Os:
        foreach ($materi as $m) {
            goto cM7VS;
            cM7VS:
            $kelas_materi[$m->id_materi] = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas));
            goto f9C3G;
            GaPEJ:
            jWi_1:
            goto gYUTJ;
            f9C3G:
            $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, "\x32", $tp->id_tp, $smt->id_smt);
            goto GaPEJ;
            gYUTJ:
        }
        goto eeeRs;
        N8X3Y:
        if ($this->ion_auth->is_admin()) {
            goto ZJOL3;
        }
        goto DrV5p;
        I8kqY:
        $materi = $this->kelas->getAllMateriKelas($guru->id_guru, "\x32");
        goto ihjLu;
        Isu7p:
        $allGuru["\60\60"] = "\x53\x65\155\x75\x61\x20\x47\165\162\165";
        goto GWN6H;
        QaJlX:
        $this->load->view("\137\164\145\155\x70\x6c\141\164\145\163\x2f\144\x61\x73\x68\x62\x6f\141\x72\x64\57\137\x68\x65\x61\x64\x65\x72", $data);
        goto GtO9y;
        s4azO:
        $data["\155\x61\x74\x65\162\x69"] = $materi;
        goto Npibt;
        e3u2U:
        $materi = $this->kelas->getAllMateriKelas($id_guru, "\x32");
        goto xxlsB;
        Wcmne:
        $data["\160\x72\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto A23NQ;
        NEGTT:
        $data["\164\141\156\147\x67\141\x6c\137\x6a\x61\x64\167\141\154"] = $arr_h;
        goto N8X3Y;
        oAduM:
        $data["\x6d\141\x74\145\x72\x69"] = $materi;
        goto GmSMP;
        n4FDS:
        $data["\151\x64\137\x67\165\162\165"] = $guru->id_guru;
        goto s4azO;
        vSQVZ:
        $data["\x6c\145\166\x65\154"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto AYP0u;
        p3brf:
        $data["\x6a\x61\144\x77\141\154\x5f\x6d\x61\x74\145\162\x69"] = $jadwal_materi;
        goto QaJlX;
        mH4eE:
        $smt = $this->dashboard->getSemesterActive();
        goto foQIz;
        RiJmI:
        $data["\x6a\x75\x72\x75\163\141\x6e"] = $this->dropdown->getAllJurusan();
        goto vSQVZ;
        pzeO2:
        $this->load->view("\155\x65\155\142\x65\162\163\x2f\147\165\162\x75\57\x74\145\x6d\x70\x6c\x61\164\145\x73\57\146\x6f\x6f\x74\x65\x72");
        goto cAkwt;
        LACBl:
        nEj6v:
        goto oAduM;
        kcMU0:
        $this->load->view("\137\x74\145\155\x70\154\x61\164\145\163\x2f\x64\x61\x73\150\x62\157\x61\162\144\57\137\146\157\157\164\x65\162");
        goto iR44K;
        QoeNk:
        $arr_h = [];
        goto hvWTB;
        xxlsB:
        foreach ($materi as $m) {
            goto HF_Mw;
            JwzZC:
            if (!($km == null)) {
                goto c20dB;
            }
            goto HOe17;
            Czubb:
            c20dB:
            goto S2RNK;
            ohe3B:
            MhUH_:
            goto M_4TX;
            S2RNK:
            $kelas_materi[$m->id_materi] = $km;
            goto HPTFz;
            HPTFz:
            $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, "\62", $tp->id_tp, $smt->id_smt);
            goto ohe3B;
            HOe17:
            $km = $this->kelas->getNamaKelasByKode(unserialize($m->materi_kelas));
            goto Czubb;
            OdGDF:
            if (!(count($arrKls) > 0)) {
                goto MhUH_;
            }
            goto CC5B6;
            M_4TX:
            uECiC:
            goto Ifimg;
            HF_Mw:
            $arrKls = unserialize($m->materi_kelas);
            goto OdGDF;
            CC5B6:
            $km = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas));
            goto JwzZC;
            Ifimg:
        }
        goto ID7GP;
        OiYIf:
        $data["\151\144\137\x67\165\162\165"] = $id_guru == null ? '' : $id_guru;
        goto pCSBQ;
        DrV5p:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto I8kqY;
        mYqzH:
        $data = ["\165\163\x65\162" => $user, "\152\x75\144\x75\x6c" => "\x54\x75\x67\x61\x73\x20\x4b\145\154\141\163", "\163\x75\142\x6a\165\144\165\154" => "\124\165\x67\141\163", "\163\x65\164\164\x69\x6e\147" => $setting];
        goto NLRTk;
        GtO9y:
        $this->load->view("\153\x65\154\141\163\x2f\x6d\x61\164\145\x72\x69\x2f\x64\x61\x74\x61");
        goto kcMU0;
        hvWTB:
        foreach ($jadmpl as $j => $h) {
            goto ezCRM;
            O0ImJ:
            vqOkI:
            goto zwzhf;
            ezCRM:
            foreach ($h as $v) {
                goto viLx4;
                viLx4:
                foreach ($v as $kk => $vk) {
                    goto Aa3MN;
                    Aa3MN:
                    if (isset($arr_h[$vk->id_mapel])) {
                        goto fZDsZ;
                    }
                    goto fAXHL;
                    kGXTb:
                    wvtq9:
                    goto ftikk;
                    fAXHL:
                    $arr_h[$vk->id_mapel] = [];
                    goto x4vJ9;
                    x4vJ9:
                    $arr_h[$vk->id_mapel][$vk->id_kelas][$vk->id_hari][] = $vk->jam_ke;
                    goto TKLP3;
                    TKLP3:
                    goto wvtq9;
                    goto Qo1Su;
                    smdPN:
                    $arr_h[$vk->id_mapel][$vk->id_kelas][$vk->id_hari][] = $vk->jam_ke;
                    goto TY4ek;
                    FZPTc:
                    if (in_array($vk->id_hari, $arr_h[$vk->id_mapel])) {
                        goto jLlaJ;
                    }
                    goto smdPN;
                    ftikk:
                    OsNc4:
                    goto MkUC6;
                    Qo1Su:
                    fZDsZ:
                    goto FZPTc;
                    TY4ek:
                    jLlaJ:
                    goto kGXTb;
                    MkUC6:
                }
                goto M3s8D;
                Hw1pC:
                zlrGP:
                goto kepbM;
                M3s8D:
                FPnDo:
                goto Hw1pC;
                kepbM:
            }
            goto PD3G1;
            PD3G1:
            oFdkg:
            goto O0ImJ;
            zwzhf:
        }
        goto YwZfE;
        hwVNV:
        $kelas_materi = [];
        goto zysXs;
        QYmUf:
        $data["\163\155\x74\x5f\141\143\164\x69\x76\x65"] = $smt;
        goto RiJmI;
        cAkwt:
        goto GTvLI;
        goto K3vDg;
        ovUhE:
        if (!($id_guru != null)) {
            goto nEj6v;
        }
        goto e3u2U;
        LABU1:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto Rg4MP;
        J_QQe:
        $this->load->view("\155\145\x6d\142\145\162\163\57\x67\165\162\165\57\164\145\155\x70\154\x61\164\145\163\x2f\150\x65\x61\x64\145\162", $data);
        goto Cx8Lz;
        iR44K:
        GTvLI:
        goto wf1Qs;
        GWN6H:
        $data["\147\165\162\165\x73"] = $allGuru;
        goto OiYIf;
        Npibt:
        $data["\x6b\x65\154\x61\163\x5f\x6d\x61\164\x65\162\x69"] = $kelas_materi;
        goto WjcNR;
        K3vDg:
        ZJOL3:
        goto QTqZg;
        v_24n:
        $data["\152\145\156\151\x73"] = "\62";
        goto IQE_U;
        Rg4MP:
        $data["\x67\165\x72\165\x73"] = $nguru;
        goto KaGGm;
        MP8om:
        $jadwal_materi = [];
        goto OU7Os;
        IQE_U:
        $jadmpl = $this->kelas->getJadwalMapel($tp->id_tp, $smt->id_smt);
        goto IyWWh;
        eeeRs:
        sBhEK:
        goto LABU1;
        zysXs:
        $jadwal_materi = [];
        goto ovUhE;
        A23NQ:
        $allGuru = $this->dropdown->getAllGuru();
        goto Isu7p;
        WjcNR:
        $data["\x6a\141\x64\167\141\x6c\137\155\x61\164\x65\162\151"] = $jadwal_materi;
        goto J_QQe;
        zPwrM:
        $setting = $this->dashboard->getSetting();
        goto mYqzH;
        Cx8Lz:
        $this->load->view("\x6b\145\x6c\x61\x73\57\155\x61\164\x65\162\151\x2f\144\x61\164\x61");
        goto pzeO2;
        nlzqg:
        $user = $this->ion_auth->user()->row();
        goto zPwrM;
        YwZfE:
        SfEzQ:
        goto NEGTT;
        ihjLu:
        $kelas_materi = [];
        goto MP8om;
        GmSMP:
        $data["\153\x65\154\x61\x73\x5f\x6d\x61\164\x65\162\x69"] = $kelas_materi;
        goto p3brf;
        QTqZg:
        $id_guru = $this->input->get("\151\x64");
        goto Wcmne;
        pCSBQ:
        $materi = [];
        goto hwVNV;
        IyWWh:
        $data["\152\141\x64\x77\x61\x6c\137\155\141\160\x65\x6c"] = $jadmpl;
        goto QoeNk;
        KaGGm:
        $data["\147\165\162\165"] = $guru;
        goto n4FDS;
        NLRTk:
        $tp = $this->dashboard->getTahunActive();
        goto mH4eE;
        G6rln:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto QYmUf;
        AYP0u:
        $data["\x6b\145\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto v_24n;
        wf1Qs:
    }
    public function data($guru = null)
    {
        goto ikLaH;
        W04P0:
        $this->output_json($this->kelas->getMateriKelas($guru, $tp->id_tp, $smt->id_smt), false);
        goto EAACV;
        r15Zl:
        $smt = $this->dashboard->getSemesterActive();
        goto W04P0;
        ikLaH:
        $tp = $this->dashboard->getTahunActive();
        goto r15Zl;
        EAACV:
    }
    public function add($jenis, $id_materi = null)
    {
        goto gv59R;
        l6X3H:
        Rj4dp:
        goto klXjM;
        emiBS:
        $data["\151\x64\x5f\147\x75\x72\165"] = '';
        goto tUjTj;
        oDlrT:
        $data["\x6a\x65\x6e\x69\x73"] = $jenis;
        goto mpfkv;
        OPMIR:
        $data["\x69\144\x5f\155\x61\164\x65\162\x69"] = $id_materi;
        goto oDlrT;
        iqdV3:
        Ifrww:
        goto XFjI9;
        PrbtF:
        $data = ["\x75\163\145\x72" => $user, "\x6a\x75\x64\x75\x6c" => $title, "\x73\165\142\152\165\144\165\154" => $id_materi == null ? "\102\165\x61\164\x20" . $title . "\40\x42\141\x72\165" : "\105\144\151\164\40" . $title, "\163\145\x74\164\x69\156\147" => $this->dashboard->getSetting()];
        goto rlhGO;
        klXjM:
        $data["\160\x72\x6f\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto Bx7_q;
        wA3cM:
        $data["\164\160\137\141\x63\x74\151\x76\x65"] = $tp;
        goto Dz4rX;
        H9YsV:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto IjHlG;
        VpT1s:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto e85aa;
        PafJb:
        $data["\x69\144\137\147\165\x72\165"] = $materi->id_guru;
        goto VZicR;
        JCU2r:
        $data["\x67\x75\162\165"] = $guru;
        goto xpYIs;
        fhRBM:
        $data["\153\145\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto OPMIR;
        VsLkI:
        $this->load->view("\x6d\x65\x6d\142\x65\162\163\57\147\165\162\165\x2f\x74\145\155\x70\x6c\141\164\145\x73\57\146\157\157\164\x65\162");
        goto l_4VA;
        UTUfU:
        $this->load->view("\x5f\164\145\x6d\160\x6c\x61\164\145\x73\x2f\x64\141\x73\x68\142\157\x61\x72\x64\57\x5f\150\145\141\x64\145\162", $data);
        goto rJQiH;
        LR3hP:
        jQhua:
        goto xE8sE;
        IjHlG:
        if ($id_materi == null) {
            goto aM82a;
        }
        goto hr8DY;
        VZicR:
        goto x0m0g;
        goto iqdV3;
        gv59R:
        $title = $jenis == "\61" ? "\115\141\164\145\x72\x69" : "\124\165\147\141\x73";
        goto aan3u;
        Wqn8b:
        goto lbdei;
        goto YYez2;
        yVGrt:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto wA3cM;
        YYez2:
        aM82a:
        goto bz6Kl;
        tUjTj:
        x0m0g:
        goto uFEFH;
        mpfkv:
        if ($this->ion_auth->is_admin()) {
            goto Rj4dp;
        }
        goto H9YsV;
        oYxzO:
        $this->load->view("\153\145\154\x61\x73\57\x6d\x61\x74\145\162\151\x2f\x61\x64\144");
        goto VsLkI;
        SXx4u:
        $this->load->view("\x6d\x65\x6d\142\x65\162\x73\57\x67\165\x72\165\x2f\164\x65\155\160\x6c\141\164\145\163\57\x68\145\x61\x64\145\x72", $data);
        goto oYxzO;
        WVXSH:
        $data["\x73\155\164\x5f\x61\143\x74\x69\x76\x65"] = $smt;
        goto fhRBM;
        e2qtd:
        lbdei:
        goto VpT1s;
        bz6Kl:
        $data["\x6d\141\x74\145\x72\151"] = json_decode(json_encode($this->kelas->getDummyMateri()));
        goto e2qtd;
        Zw5QD:
        $this->load->view("\137\164\145\155\160\154\141\164\x65\x73\57\144\x61\x73\150\142\157\141\x72\x64\57\137\x66\x6f\x6f\164\x65\x72");
        goto LR3hP;
        e85aa:
        $data["\147\165\x72\165\x73"] = $nguru;
        goto JCU2r;
        Bx7_q:
        if ($id_materi == null) {
            goto Ifrww;
        }
        goto aX8B3;
        Dz4rX:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto WVXSH;
        l_4VA:
        goto jQhua;
        goto l6X3H;
        aX8B3:
        $materi = $this->kelas->getMateriKelasById($id_materi, $jenis);
        goto w0wK2;
        bP6rJ:
        $smt = $this->dashboard->getSemesterActive();
        goto yVGrt;
        uFEFH:
        $data["\147\165\x72\165\163"] = $this->dropdown->getAllGuru();
        goto UTUfU;
        rJQiH:
        $this->load->view("\153\145\154\x61\163\57\x6d\x61\x74\x65\x72\151\57\x61\x64\144");
        goto Zw5QD;
        XFjI9:
        $data["\155\x61\164\x65\x72\151"] = json_decode(json_encode($this->kelas->getDummyMateri()));
        goto emiBS;
        w0wK2:
        $data["\155\x61\164\145\x72\151"] = $materi;
        goto PafJb;
        aan3u:
        $user = $this->ion_auth->user()->row();
        goto PrbtF;
        xpYIs:
        $data["\151\x64\137\147\165\162\165"] = $guru->id_guru;
        goto SXx4u;
        rlhGO:
        $tp = $this->dashboard->getTahunActive();
        goto bP6rJ;
        hr8DY:
        $data["\155\141\164\145\x72\x69"] = $this->kelas->getMateriKelasById($id_materi, $jenis);
        goto Wqn8b;
        xE8sE:
    }
    public function dataAddKelas($guru)
    {
        goto AYeq6;
        yXn2w:
        $kelas = unserialize($guru->mapel_kelas);
        goto rVWVR;
        Wlq13:
        $guru = $this->kelas->getGuruMapelKelas($guru, $tp->id_tp, $smt->id_smt);
        goto yXn2w;
        rVWVR:
        $this->output_json($kelas);
        goto u95V6;
        AYeq6:
        $tp = $this->dashboard->getTahunActive();
        goto m1NTR;
        m1NTR:
        $smt = $this->dashboard->getSemesterActive();
        goto Wlq13;
        u95V6:
    }
    public function dataAddJadwal()
    {
        goto ctMGx;
        qgFaZ:
        $mapel = $this->kelas->getJadwalMapelByMapel($id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt);
        goto jnYA0;
        q4NWu:
        $this->output_json(["\155\x61\160\145\x6c" => $mapel, "\x74\145\162\x69\163\x69" => $jadwal_terisi]);
        goto hFaCk;
        ctMGx:
        $id_kelas = $this->input->get("\153\145\x6c\141\x73");
        goto WZ1zE;
        WZ1zE:
        $id_mapel = $this->input->get("\x6d\141\160\145\154");
        goto K0TNf;
        K0TNf:
        $tp = $this->dashboard->getTahunActive();
        goto jsQDJ;
        jnYA0:
        $jadwal_terisi = $this->kelas->getJadwalTerisi("\153\x65\x6c\141\163\137\152\x61\144\x77\141\x6c\137\155\x61\x74\x65\x72\151", $id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt);
        goto q4NWu;
        jsQDJ:
        $smt = $this->dashboard->getSemesterActive();
        goto qgFaZ;
        hFaCk:
    }
    public function saveJadwal()
    {
        goto BtPsr;
        YvGXf:
        $id_mapel = $this->input->post("\151\x64\137\x6d\141\160\145\x6c", true);
        goto jNQ21;
        AVg8j:
        $this->logging->saveLog(3, "\x6d\x65\x72\x75\x62\141\x68\x20\x6a\x61\x64\x77\141\154\x20\x6d\x61\164\145\x72\x69");
        goto DPwt2;
        G5oRA:
        $smt = $this->dashboard->getSemesterActive();
        goto Vx_fq;
        tik5m:
        $jam_ke = $this->input->post("\152\141\155\x5f\x6b\145", true);
        goto MS4Sf;
        Vx_fq:
        $jdwl = str_replace("\55", '', $jadwal);
        goto Frnzp;
        MS4Sf:
        $jadwal = $this->input->post("\x6a\141\x64\167\141\154\x5f\x6d\x61\164\145\162\151", true);
        goto xUZqs;
        DPwt2:
        $this->output_json($update);
        goto D8s4f;
        jSMSa:
        $update = $this->db->replace("\x6b\145\x6c\x61\x73\137\152\141\x64\x77\141\154\x5f\155\141\x74\x65\162\x69", $insert);
        goto AVg8j;
        BtPsr:
        $id_materi = $this->input->post("\x69\144\137\155\x61\x74\x65\162\x69", true);
        goto YvGXf;
        jNQ21:
        $id_kelas = $this->input->post("\x69\144\137\153\x65\154\141\163", true);
        goto yzyC2;
        Frnzp:
        $insert = ["\151\144\137\x6b\152\x6d" => $id_kelas . $tp->id_tp . $smt->id_smt . $jdwl . $jam_ke . $jenis, "\151\144\137\x74\160" => $tp->id_tp, "\x69\144\x5f\x73\x6d\164" => $smt->id_smt, "\151\144\137\x6b\145\x6c\x61\x73" => $id_kelas, "\151\144\137\155\x61\164\x65\162\x69" => $id_materi, "\151\x64\x5f\155\141\x70\x65\x6c" => $id_mapel, "\152\141\x64\167\x61\154\x5f\155\141\x74\x65\162\x69" => $jadwal, "\x6a\145\156\151\x73" => $jenis];
        goto jSMSa;
        yzyC2:
        $jenis = $this->input->post("\x6a\x65\156\151\x73", true);
        goto tik5m;
        xUZqs:
        $tp = $this->dashboard->getTahunActive();
        goto G5oRA;
        D8s4f:
    }
    public function hapusJadwal($id)
    {
        goto fnPK8;
        fnPK8:
        $this->db->set("\151\144\x5f\x6d\x61\164\145\162\151", "\60");
        goto t6AZ8;
        sZXhW:
        $update = $this->db->update("\x6b\145\154\x61\163\x5f\x6a\x61\x64\x77\141\154\x5f\x6d\x61\164\x65\x72\x69");
        goto boKTz;
        t6AZ8:
        $this->db->where("\x69\x64\x5f\153\152\x6d", $id);
        goto sZXhW;
        boKTz:
        $this->output_json($update);
        goto KiceB;
        KiceB:
    }
    public function saveMateri()
    {
        goto hV6dZ;
        CPbUj:
        if (!($i < $kelas)) {
            goto GWPpZ;
        }
        goto OUZ6D;
        KXFga:
        Sh4n5:
        goto Co8bP;
        vtbAy:
        $tp = $this->dashboard->getTahunActive();
        goto ZDPZB;
        qHMq_:
        $images = $dom->getElementsByTagName("\151\155\147");
        goto H0_Wt;
        jhJjL:
        $data["\143\162\x65\x61\x74\x65\144\137\157\x6e"] = date("\131\55\155\55\144\40\x48\x3a\x69\72\163");
        goto HJtJ4;
        DrPKz:
        $src_file = [];
        goto tA3wa;
        hV6dZ:
        $jenis = $this->input->post("\152\x65\156\151\x73", true);
        goto gBswt;
        ji63Z:
        $cek_materi = $this->kelas->getMateriKelasById($id_materi, $jenis);
        goto lX31N;
        NRDl2:
        $result["\x73\x74\x61\164\165\163"] = $saved;
        goto atqAt;
        fWdNL:
        $i = 0;
        goto f8G5r;
        XcMHg:
        $i++;
        goto WHx6a;
        tM2w_:
        $result["\155\145\x73\x73\141\147\x65"] = "\x4d\x61\164\145\x72\x69\x20\142\x65\162\150\x61\163\151\154\x20\x64\151\142\165\x61\164";
        goto G4Qzu;
        pOUS6:
        $isi = preg_replace("\x23\134\x73\50\151\x64\174\143\154\141\x73\x73\51\75\42\133\x5e\42\x5d\53\x22\x23", '', $isi);
        goto vtbAy;
        x4dd7:
        b9PaU:
        goto U48CM;
        tG1BD:
        $data = ["\152\x65\156\x69\x73" => $jenis, "\x69\144\x5f\164\x70" => $tp->id_tp, "\151\x64\137\x73\155\x74" => $smt->id_smt, "\x6b\157\x64\145\137\x6d\x61\164\145\x72\x69" => $this->input->post("\153\x6f\x64\145\137\155\x61\x74\x65\x72\151", true), "\x69\144\x5f\x67\165\x72\165" => $this->input->post("\147\x75\x72\x75", true), "\x69\x64\137\x6d\141\x70\x65\154" => $this->input->post("\155\x61\x70\x65\154", true), "\x6a\165\x64\x75\x6c\137\155\141\x74\145\162\x69" => $this->input->post("\152\x75\144\165\154", true), "\x69\x73\x69\137\x6d\x61\x74\145\162\x69" => $isi, "\155\141\164\145\x72\151\137\x6b\x65\154\141\163" => serialize($id_kelas), "\146\151\154\145" => serialize($src_file)];
        goto zK2_L;
        afQZu:
        IuRSx:
        goto XcMHg;
        ZDPZB:
        $smt = $this->dashboard->getSemesterActive();
        goto tG1BD;
        ctadY:
        $isi = $dom->saveHTML();
        goto pOUS6;
        mw9CU:
        B1xtF:
        goto zbQ3j;
        bGlSk:
        $attach = json_decode($this->input->post("\x61\164\164\x61\143\150", true));
        goto DrPKz;
        Co8bP:
        $id_kelas = [];
        goto fWdNL;
        MIBPf:
        $saved = $this->master->update("\153\145\x6c\x61\163\137\x6d\141\x74\145\162\x69", $data, "\151\x64\x5f\155\x61\x74\x65\162\151", $id_materi);
        goto kta1M;
        WHx6a:
        goto b2lkv;
        goto BFkoL;
        tA3wa:
        foreach ($attach as $at) {
            goto auJuG;
            auJuG:
            if (!($at->name != null)) {
                goto iXDNd;
            }
            goto rIvnv;
            rIvnv:
            $src_file[] = ["\x73\162\143" => $at->src, "\x73\151\x7a\x65" => $at->size, "\164\x79\x70\x65" => $at->type, "\156\141\155\x65" => $at->name];
            goto lulqU;
            lulqU:
            iXDNd:
            goto hkfUu;
            hkfUu:
            dwJLv:
            goto v7LGz;
            v7LGz:
        }
        goto KXFga;
        snvhm:
        $kelas = count($this->input->post("\x6b\145\x6c\x61\x73", true));
        goto bGlSk;
        wHD3p:
        $dom = new DOMDocument();
        goto OClaj;
        RNG1N:
        IoQ_S:
        goto ctadY;
        DFbtr:
        goto b9PaU;
        goto tjzkb;
        zK2_L:
        if ($id_materi === '') {
            goto eLMT2;
        }
        goto ji63Z;
        BFkoL:
        GWPpZ:
        goto rCd6y;
        tjzkb:
        eLMT2:
        goto NgxRp;
        tPZqf:
        $saved = $this->master->create("\x6b\x65\154\141\163\x5f\x6d\141\164\x65\162\151", $data);
        goto iBw1l;
        Xi7RX:
        $data["\x75\x70\x64\x61\164\x65\x64\137\x6f\156"] = date("\x59\55\155\55\144\x20\110\x3a\151\x3a\163");
        goto tPZqf;
        Onl6E:
        goto XqJjN;
        goto mw9CU;
        HJtJ4:
        $data["\165\160\x64\141\x74\145\x64\x5f\157\156"] = date("\x59\55\155\x2d\144\x20\110\x3a\151\72\163");
        goto fbO9e;
        OUZ6D:
        $id_kelas[] = $this->input->post("\x6b\145\x6c\141\x73\x5b" . $i . "\x5d", true);
        goto afQZu;
        OClaj:
        $dom->loadHTML($isi_materi);
        goto qHMq_;
        RIWDO:
        foreach ($images as $image) {
            goto zqtQp;
            IE2K2:
            $data = $splited[1];
            goto KyzoA;
            v6k7p:
            apEe7:
            goto ySGAy;
            UxPs3:
            $pathUpload = "\x75\x70\154\157\141\144\x73";
            goto YnTHb;
            P2DlX:
            $extension = $mime_split[1];
            goto N2GxG;
            zqtQp:
            $base64_image_string = $image->getAttribute("\163\x72\143");
            goto xzS3Y;
            mywMn:
            $image->setAttribute("\163\162\x63", "\165\160\x6c\157\141\x64\163\57\155\141\164\145\x72\x69\57" . $output_file);
            goto a3kIy;
            LtjeC:
            $extension = "\x6a\160\147";
            goto v6k7p;
            a3kIy:
            $numimg++;
            goto pH1mp;
            N2GxG:
            if (!($extension == "\x6a\160\145\x67")) {
                goto apEe7;
            }
            goto LtjeC;
            m4dUu:
            $splited = explode("\54", substr($base64_image_string, 5), 2);
            goto q8H3_;
            i22Ug:
            slQy6:
            goto fonrI;
            FBlvy:
            file_put_contents("\x2e\57\165\160\154\157\x61\144\x73\x2f\155\x61\x74\145\162\151\x2f" . $output_file, base64_decode($data));
            goto mywMn;
            sP1NM:
            if (!(count($mime_split) == 2)) {
                goto o3iXz;
            }
            goto P2DlX;
            q8H3_:
            $mime = $splited[0];
            goto IE2K2;
            xzS3Y:
            if (strpos($base64_image_string, "\x68\x74\x74\160") !== false) {
                goto hjC_9;
            }
            goto m4dUu;
            fonrI:
            rKJto:
            goto npqW8;
            YnTHb:
            $forReplace = explode($pathUpload, $base64_image_string);
            goto Nw4ln;
            Nw4ln:
            $image->setAttribute("\x73\x72\x63", $pathUpload . $forReplace[1]);
            goto i22Ug;
            ZlJ_G:
            $output_file = '';
            goto sP1NM;
            KyzoA:
            $mime_split_without_base64 = explode("\73", $mime, 2);
            goto KSEfD;
            ySGAy:
            $output_file = "\x69\x6d\x67\x5f" . date("\x59\155\x64\110\x69\163") . $numimg . "\56" . $extension;
            goto wwMaB;
            LtFkO:
            hjC_9:
            goto UxPs3;
            wwMaB:
            o3iXz:
            goto FBlvy;
            pH1mp:
            goto slQy6;
            goto LtFkO;
            KSEfD:
            $mime_split = explode("\57", $mime_split_without_base64[0], 2);
            goto ZlJ_G;
            npqW8:
        }
        goto RNG1N;
        iBw1l:
        $result["\162\145\x73\165\x6c\164\x5f\x69\x64"] = $this->db->insert_id();
        goto NRDl2;
        f8G5r:
        b2lkv:
        goto CPbUj;
        S_Wn1:
        XqJjN:
        goto DFbtr;
        fbO9e:
        $saved = $this->master->create("\x6b\x65\154\x61\163\x5f\x6d\x61\x74\x65\x72\151", $data);
        goto AaDwb;
        NgxRp:
        $data["\x63\162\x65\x61\164\145\x64\137\157\156"] = date("\x59\55\155\55\144\40\110\x3a\151\72\x73");
        goto Xi7RX;
        G4Qzu:
        $this->logging->saveLog(3, "\155\x65\155\x62\165\x61\x74\x20\x6d\141\x74\x65\162\151");
        goto Onl6E;
        AaDwb:
        $result["\x73\x74\x61\x74\x75\163"] = $saved;
        goto tM2w_;
        H0_Wt:
        $numimg = 1;
        goto RIWDO;
        rCd6y:
        $isi_materi = $this->input->post("\x69\163\151\x5f\x6d\x61\164\145\162\x69", false);
        goto wHD3p;
        kta1M:
        $result["\163\164\141\164\x75\x73"] = $saved;
        goto oUNHo;
        oUNHo:
        $result["\x6d\145\x73\x73\x61\x67\x65"] = "\x4d\x61\164\x65\x72\151\x20\142\145\x72\150\141\x73\x69\154\x20\144\151\165\160\x64\x61\x74\145";
        goto XP4ZQ;
        XP4ZQ:
        $this->logging->saveLog(4, "\x6d\145\156\147\x65\x64\x69\x74\x20\155\x61\x74\x65\x72\151");
        goto S_Wn1;
        gBswt:
        $id_materi = $this->input->post("\x69\144\x5f\x6d\141\x74\x65\162\151", true);
        goto snvhm;
        z1mzX:
        $this->logging->saveLog(3, "\x6d\145\x6d\x62\165\141\164\40\155\141\x74\145\x72\x69");
        goto x4dd7;
        ElwiL:
        $data["\x69\144\137\x6d\x61\x74\145\x72\151"] = $id_materi;
        goto MIBPf;
        atqAt:
        $result["\x6d\x65\163\x73\141\147\x65"] = "\115\x61\164\145\162\x69\x20\142\145\x72\150\x61\163\151\x6c\x20\x64\x69\x62\165\141\164";
        goto z1mzX;
        lX31N:
        if ($cek_materi->id_tp == $tp->id_tp && $cek_materi->id_smt == $smt->id_smt) {
            goto B1xtF;
        }
        goto jhJjL;
        U48CM:
        $this->output_json($result);
        goto U3DI4;
        zbQ3j:
        $data["\165\x70\x64\141\164\145\144\137\157\x6e"] = date("\x59\55\155\55\x64\40\110\x3a\x69\x3a\x73");
        goto ElwiL;
        U3DI4:
    }
    public function copyMateri($id_materi, $jenis)
    {
        goto UgpPk;
        fs4f2:
        $data = ["\152\x65\x6e\151\163" => $jenis, "\x69\x64\137\x74\160" => $tp->id_tp, "\x69\144\x5f\163\155\164" => $smt->id_smt, "\153\x6f\x64\x65\137\155\x61\164\145\162\x69" => $materi->kode_materi, "\151\x64\x5f\147\165\162\x75" => $materi->id_guru, "\151\144\x5f\x6d\x61\160\x65\x6c" => $materi->id_mapel == null ? 0 : $materi->id_mapel, "\152\x75\144\x75\154\x5f\155\141\164\x65\162\151" => $materi->judul_materi, "\151\x73\151\137\x6d\x61\164\x65\162\151" => $materi->isi_materi, "\155\141\x74\x65\162\x69\137\153\x65\154\x61\x73" => $materi->materi_kelas, "\146\x69\154\145" => $materi->file, "\143\162\x65\x61\164\145\x64\137\x6f\156" => date("\131\55\x6d\x2d\x64\40\110\x3a\151\x3a\x73"), "\x75\160\144\141\x74\145\144\137\157\156" => date("\x59\55\155\x2d\x64\40\110\72\x69\x3a\163")];
        goto Q_ixn;
        PEQT2:
        $this->output_json($result);
        goto WiklS;
        Q_ixn:
        $result = $this->master->create("\x6b\x65\x6c\141\163\137\x6d\141\164\x65\x72\151", $data);
        goto QOBPt;
        p8NC2:
        $smt = $this->dashboard->getSemesterActive();
        goto oUgnJ;
        QOBPt:
        $this->logging->saveLog(3, "\x6d\145\155\x62\165\x61\164\x20\x6d\141\164\145\162\151");
        goto PEQT2;
        UgpPk:
        $tp = $this->dashboard->getTahunActive();
        goto p8NC2;
        oUgnJ:
        $materi = $this->kelas->getMateriKelasById($id_materi, $jenis);
        goto fs4f2;
        WiklS:
    }
    public function aktifkanMateri()
    {
        goto EkGRk;
        edtBy:
        $id = $this->input->post("\151\144\137\155\x61\x74\x65\x72\151", true);
        goto YTXbG;
        ym0Cf:
        $this->db->where("\151\x64\x5f\x6d\141\x74\145\x72\x69", $id);
        goto aFTjK;
        aFTjK:
        $this->db->update("\x6b\x65\x6c\x61\163\x5f\155\141\164\x65\x72\151");
        goto mkp3G;
        mkp3G:
        $this->logging->saveLog(3, "\x6d\145\x6e\147\141\x6b\x74\151\x66\x6b\x61\156\x20\x6d\141\x74\x65\162\151");
        goto wmfgl;
        AA9tB:
        $this->db->set("\x73\x74\x61\164\x75\x73", $stat);
        goto ym0Cf;
        wmfgl:
        $this->output_json(["\163\x74\141\x74\165\163" => true]);
        goto bs0kE;
        EkGRk:
        $method = $this->input->post("\155\145\164\150\x6f\x64", true);
        goto edtBy;
        YTXbG:
        $stat = $method == "\61" ? "\60" : "\x31";
        goto AA9tB;
        bs0kE:
    }
    public function hapusMateri()
    {
        goto I8TzF;
        VV92e:
        $this->logging->saveLog(5, "\155\x65\156\147\150\x61\x70\165\163\40\x6d\x61\164\x65\x72\151");
        goto gZoPo;
        I8TzF:
        $id = $this->input->post("\x69\144\137\x6d\x61\164\x65\x72\151", true);
        goto RQC3z;
        MsPaa:
        if (!$this->master->delete("\153\x65\154\141\x73\137\x6a\x61\144\x77\x61\154\x5f\x6d\x61\164\145\162\x69", $id, "\x69\x64\137\155\x61\164\145\162\151")) {
            goto OdYab;
        }
        goto VV92e;
        tOpC9:
        Jlg8c:
        goto pJpC7;
        gZoPo:
        $this->output_json(["\x73\164\x61\164\x75\163" => true]);
        goto jY73t;
        jY73t:
        OdYab:
        goto tOpC9;
        RQC3z:
        if (!$this->master->delete("\x6b\145\154\x61\163\137\x6d\x61\164\x65\x72\151", $id, "\x69\x64\137\155\141\164\x65\162\x69")) {
            goto Jlg8c;
        }
        goto MsPaa;
        pJpC7:
    }
    public function deleteAllMateri()
    {
        goto cQY_g;
        qN0Oy:
        ik11K:
        goto b4O6d;
        T4E8V:
        $this->logging->saveLog(5, "\155\x65\x6e\x67\x68\141\x70\x75\163\40\155\141\x74\x65\162\151");
        goto qN0Oy;
        cQY_g:
        $ids = json_decode($this->input->post("\151\144\x73", true));
        goto N61GG;
        b4O6d:
        $this->output_json(["\x73\x74\x61\x74\165\163" => true]);
        goto MYjUw;
        MYjUw:
        vjtBq:
        goto yXnKW;
        N61GG:
        if (!$this->master->delete("\x6b\x65\x6c\141\x73\x5f\x6d\x61\164\145\162\151", $ids, "\151\144\x5f\155\141\164\145\162\151")) {
            goto vjtBq;
        }
        goto gse6G;
        gse6G:
        if (!$this->master->delete("\x6b\145\x6c\141\163\x5f\152\x61\144\167\141\154\137\x6d\141\164\145\162\x69", $ids, "\x69\x64\137\x6d\141\164\x65\162\151")) {
            goto ik11K;
        }
        goto T4E8V;
        yXnKW:
    }
    function uploadFile()
    {
        goto BilRe;
        TIsRA:
        $config["\x61\x6c\154\157\x77\x65\144\137\164\171\160\145\163"] = "\152\x70\x67\174\152\160\145\x67\x7c\x70\156\147\174\147\x69\x66\x7c\155\160\x65\x67\174\155\160\x67\174\x6d\x70\x65\147\63\x7c\x6d\x70\63\174\167\x61\166\174\x77\x61\x76\x65\x7c\155\160\64\174\x61\x76\151\x7c\144\x6f\x63\x7c\144\157\x63\x78\x7c\x78\x6c\x73\174\170\x6c\163\x78\174\160\x70\164\174\160\160\x74\x78\174\143\163\x76\174\x70\x64\x66\x7c\162\164\x66\x7c\x74\170\x74";
        goto tBccu;
        jNoRZ:
        if (!isset($_FILES["\146\x69\154\x65\137\x75\160\x6c\x6f\x61\144\163"]["\156\x61\155\x65"])) {
            goto MAPIZ;
        }
        goto h50TG;
        dc_DA:
        if (!$this->upload->do_upload("\146\151\154\145\137\x75\160\154\x6f\x61\x64\163")) {
            goto YVphU;
        }
        goto fS0pn;
        h50TG:
        $config["\165\x70\154\157\x61\x64\x5f\x70\141\164\150"] = "\56\57\x75\x70\154\157\x61\x64\163\x2f\x6d\x61\x74\145\x72\x69\x2f";
        goto TIsRA;
        zqqhE:
        $data["\163\162\143"] = $this->upload->display_errors();
        goto qAXrN;
        kbhc1:
        $this->output_json($data);
        goto CLVb0;
        NXcwB:
        $data["\x66\x69\154\x65\x6e\x61\x6d\145"] = pathinfo($result["\146\151\154\x65\x5f\x6e\x61\155\145"], PATHINFO_FILENAME);
        goto JRbkS;
        fS0pn:
        $result = $this->upload->data();
        goto W3jKx;
        JRbkS:
        $data["\163\x74\x61\x74\165\x73"] = true;
        goto qq5P3;
        tBccu:
        $config["\155\141\170\137\x73\x69\172\145"] = $max_size;
        goto COxhu;
        gQ4eL:
        $data["\163\151\172\145"] = $_FILES["\x66\151\154\145\x5f\x75\x70\154\157\141\x64\163"]["\163\151\x7a\x65"];
        goto jAjPZ;
        laZ5O:
        $this->upload->initialize($config);
        goto dc_DA;
        W3jKx:
        $data["\163\162\143"] = "\x75\x70\x6c\x6f\141\x64\163\57\x6d\x61\164\x65\162\151\57" . $result["\146\151\x6c\145\x5f\156\x61\x6d\145"];
        goto NXcwB;
        u7nwJ:
        YVphU:
        goto aeHHX;
        jAjPZ:
        MAPIZ:
        goto kbhc1;
        COxhu:
        $config["\x6f\x76\x65\x72\167\x72\151\164\x65"] = TRUE;
        goto laZ5O;
        BilRe:
        $max_size = $this->input->post("\155\141\x78\55\x73\x69\172\145", true);
        goto jNoRZ;
        Bw4ZT:
        $data["\x74\x79\160\145"] = $_FILES["\x66\x69\x6c\145\137\x75\x70\154\x6f\141\x64\163"]["\164\x79\160\x65"];
        goto gQ4eL;
        qq5P3:
        goto wydyp;
        goto u7nwJ;
        qAXrN:
        wydyp:
        goto Bw4ZT;
        aeHHX:
        $data["\163\164\141\x74\x75\163"] = false;
        goto zqqhE;
        CLVb0:
    }
    function deleteFile()
    {
        goto TVuBB;
        MVqxM:
        echo "\106\151\x6c\145\40\104\x65\154\145\x74\145\x20\x53\x75\143\143\x65\x73\163\x66\165\x6c\x6c\x79";
        goto bybrr;
        bybrr:
        dRG2m:
        goto eyRF9;
        qva_c:
        echo "\107\141\x67\141\x6c";
        goto FgK03;
        TVuBB:
        $src = $this->input->post("\x73\162\143");
        goto dV77_;
        FgK03:
        goto dRG2m;
        goto jH1Zk;
        jH1Zk:
        hn1ev:
        goto MVqxM;
        dV77_:
        if (unlink($src)) {
            goto hn1ev;
        }
        goto qva_c;
        eyRF9:
    }
    function getListDate($day, $month, $year)
    {
        goto Vjq2Y;
        z4GJN:
        array_push($list, date("\x59\55\x6d\55\144", $time));
        goto HUb7q;
        btThI:
        goto LuB__;
        goto pGbgB;
        zYQYr:
        $d++;
        goto btThI;
        wrbyQ:
        $d = 1;
        goto GUCeA;
        KmjXY:
        $day_of_week = date("\x4e", $time);
        goto f43qM;
        pGbgB:
        otA6J:
        goto I6prO;
        NJTPw:
        $time = mktime(12, 0, 0, $month, $d, $year);
        goto KmjXY;
        Vjq2Y:
        $list = array();
        goto FCNIj;
        E1CBV:
        Kr87k:
        goto zYQYr;
        GUCeA:
        LuB__:
        goto K6i2u;
        FCNIj:
        $numdays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        goto wrbyQ;
        K6i2u:
        if (!($d <= $numdays)) {
            goto otA6J;
        }
        goto NJTPw;
        I6prO:
        return $list;
        goto rqD_o;
        HUb7q:
        K7PvK:
        goto E1CBV;
        f43qM:
        if (!(date("\155", $time) == $month && $day_of_week == $day)) {
            goto K7PvK;
        }
        goto z4GJN;
        rqD_o:
    }
}
