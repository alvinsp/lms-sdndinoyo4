<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\123\x45\120\x41\124\x48") or exit("\116\157\x20\144\x69\x72\145\x63\x74\x20\163\143\162\x69\x70\x74\x20\141\x63\143\x65\163\163\40\141\154\x6c\157\167\x65\x64");

use alhimik1986\PhpExcelTemplator\PhpExcelTemplator;

class Datasiswa extends CI_Controller
{
    public function __construct()
    {
        goto ubpWl;
        PgOq3:
        hqrWC:
        goto ZPlBG;
        ubpWl:
        parent::__construct();
        goto ny7WT;
        I1AnD:
        $this->load->model("\x44\x61\163\150\142\x6f\x61\162\144\x5f\x6d\x6f\x64\x65\154", "\144\x61\163\150\142\x6f\x61\x72\x64");
        goto f9fAd;
        kP95M:
        show_error("\x48\x61\156\171\x61\x20\101\x64\x6d\151\x6e\151\x73\164\162\141\x74\x6f\x72\x20\171\x61\x6e\x67\x20\x64\151\x62\x65\x72\x69\40\x68\141\x6b\x20\x75\x6e\164\165\153\x20\155\x65\x6e\147\x61\153\163\x65\163\40\x68\x61\x6c\x61\155\141\156\x20\x69\156\151\54\40\x3c\141\40\x68\162\x65\146\x3d\42" . base_url("\144\141\x73\x68\142\x6f\x61\x72\x64") . "\42\76\x4b\x65\x6d\x62\141\154\151\x20\153\x65\40\x6d\145\x6e\165\40\x61\x77\141\154\74\57\x61\76", 403, "\101\x6b\163\x65\163\x20\x54\x65\x72\154\141\162\x61\x6e\x67");
        goto PgOq3;
        ny7WT:
        if (!$this->ion_auth->logged_in()) {
            goto ALIhU;
        }
        goto Ptukg;
        xBP84:
        redirect("\x61\165\x74\x68");
        goto ONxwU;
        G2cY6:
        $this->load->library("\165\160\x6c\157\141\144");
        goto IMQT4;
        IMQT4:
        $this->load->library(["\x64\141\164\141\x74\141\142\x6c\x65\163", "\146\x6f\x72\x6d\x5f\x76\x61\154\151\x64\141\x74\151\x6f\156"]);
        goto ojhjX;
        ojhjX:
        $this->load->model("\x4d\141\x73\164\145\162\x5f\x6d\157\x64\x65\154", "\x6d\141\x73\x74\x65\162");
        goto I1AnD;
        qOPtj:
        $this->form_validation->set_error_delimiters('', '');
        goto GbMhr;
        Tpavr:
        ALIhU:
        goto xBP84;
        ZPlBG:
        goto tVyY5;
        goto Tpavr;
        f9fAd:
        $this->load->model("\104\x72\157\x70\x64\x6f\167\156\x5f\155\x6f\144\145\154", "\x64\x72\x6f\x70\x64\x6f\167\156");
        goto qOPtj;
        ONxwU:
        tVyY5:
        goto G2cY6;
        Ptukg:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) {
            goto hqrWC;
        }
        goto kP95M;
        GbMhr:
    }
    public function output_json($data, $encode = true)
    {
        goto onxsk;
        onxsk:
        if (!$encode) {
            goto x7hAg;
        }
        goto J_nl8;
        Lc_U1:
        $this->output->set_content_type("\141\x70\160\154\x69\x63\141\164\151\157\156\57\152\163\157\156")->set_output($data);
        goto g1h_0;
        J_nl8:
        $data = json_encode($data);
        goto TtdkZ;
        TtdkZ:
        x7hAg:
        goto Lc_U1;
        g1h_0:
    }
    public function index()
    {
        goto XcfKm;
        EFC6L:
        $data["\x73\x6d\164"] = $smt;
        goto FqNvd;
        zipkT:
        $tpAktif = $tp[$searchTp];
        goto J5NT2;
        J5NT2:
        $smtAktif = $smt[$searchSmt];
        goto uKdHP;
        hn2HK:
        $data["\x74\160"] = $tp;
        goto EFC6L;
        PPKSp:
        $tp = $this->dashboard->getTahun();
        goto IITzm;
        FqNvd:
        $searchTp = array_search("\61", array_column($tp, "\x61\143\x74\x69\166\145"));
        goto ZbeOi;
        XcfKm:
        $user = $this->ion_auth->user()->row();
        goto G97GO;
        uKdHP:
        $data["\164\x70\137\141\x63\x74\x69\x76\x65"] = $tpAktif;
        goto axQOf;
        M9AXR:
        $this->load->view("\x6d\x61\163\164\145\x72\57\x73\x69\163\x77\141\57\x64\x61\x74\x61");
        goto Rvb0E;
        hiUtD:
        $data["\160\x72\x6f\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto Ge7Qm;
        IITzm:
        $smt = $this->dashboard->getSemester();
        goto hn2HK;
        Rvb0E:
        $this->load->view("\x5f\x74\145\155\160\154\x61\164\x65\163\57\144\x61\163\x68\x62\x6f\x61\x72\144\57\137\146\x6f\x6f\164\x65\x72");
        goto tB1fg;
        ZbeOi:
        $searchSmt = array_search("\61", array_column($smt, "\x61\143\164\x69\166\145"));
        goto zipkT;
        axQOf:
        $data["\x73\155\164\x5f\141\x63\x74\x69\x76\x65"] = $smtAktif;
        goto hiUtD;
        qcMv9:
        $this->load->view("\137\x74\x65\155\160\154\x61\164\145\163\57\144\x61\x73\150\x62\157\x61\x72\x64\x2f\x5f\x68\x65\141\x64\145\x72", $data);
        goto M9AXR;
        G97GO:
        $data = ["\165\x73\145\162" => $user, "\152\165\144\165\154" => "\x53\x69\x73\167\141", "\x73\165\142\x6a\x75\x64\165\x6c" => "\104\141\x74\141\x20\123\x69\x73\x77\141", "\x73\x65\164\x74\x69\156\147" => $this->dashboard->getSetting()];
        goto PPKSp;
        Ge7Qm:
        $data["\153\x65\x6c\141\x73\163"] = $this->dropdown->getAllKelas($tpAktif->id_tp, $smtAktif->id_smt);
        goto qcMv9;
        tB1fg:
    }
    public function data()
    {
        goto khke3;
        khke3:
        $tp = $this->dashboard->getTahunActive();
        goto s2v5R;
        WVUiQ:
        $this->output_json($this->master->getDataSiswa($tp->id_tp, $smt->id_smt), false);
        goto lU_Ms;
        s2v5R:
        $smt = $this->dashboard->getSemesterActive();
        goto WVUiQ;
        lU_Ms:
    }
    public function list()
    {
        goto xMWBU;
        Jh8V5:
        $count_siswa = $this->master->getSiswaTotalPage($search);
        goto YlMfl;
        VnbC3:
        $data = ["\x6c\151\163\164\163" => $lists, "\164\x6f\164\x61\154" => $count_siswa, "\x70\141\x67\x65\163" => ceil($count_siswa / $limit), "\163\x65\141\162\x63\150" => $search, "\x70\x65\x72\x70\x61\147\145" => $limit];
        goto iaDaP;
        iaDaP:
        $this->output_json($data);
        goto iPQiA;
        FOaNw:
        $tp = $this->dashboard->getTahunActive();
        goto am90E;
        FljKY:
        $search = $this->input->post("\163\145\141\x72\143\150", true);
        goto BejDK;
        BejDK:
        $offset = ($page - 1) * $limit;
        goto FOaNw;
        IzYcR:
        $limit = $this->input->post("\154\151\x6d\151\164", true);
        goto FljKY;
        YlMfl:
        $lists = $this->master->getSiswaPage($tp->id_tp, $smt->id_smt, $offset, $limit, $search);
        goto VnbC3;
        xMWBU:
        $page = $this->input->post("\x70\141\147\x65", true);
        goto IzYcR;
        am90E:
        $smt = $this->dashboard->getSemesterActive();
        goto Jh8V5;
        iPQiA:
    }
    public function add()
    {
        goto j6qR2;
        TRPUp:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto mxz2N;
        qkpQD:
        $this->load->view("\137\x74\x65\155\x70\154\141\164\x65\x73\x2f\x64\x61\163\150\142\157\141\x72\x64\x2f\x5f\146\157\x6f\x74\x65\x72");
        goto VYjp5;
        Ak41k:
        $this->load->view("\x5f\164\x65\155\x70\154\141\164\145\163\57\144\x61\x73\150\142\x6f\x61\x72\x64\57\x5f\150\145\x61\144\145\162", $data);
        goto a32TI;
        mxz2N:
        $data["\x74\x70\137\x61\143\164\151\x76\x65"] = $this->dashboard->getTahunActive();
        goto durtM;
        CSfXt:
        $data = ["\x75\x73\x65\162" => $user, "\152\x75\x64\x75\154" => "\123\151\x73\x77\141", "\x73\x75\x62\x6a\x75\144\x75\154" => "\124\x61\x6d\142\141\150\40\104\141\x74\141\40\123\x69\x73\x77\x61", "\x73\x65\x74\x74\x69\156\147" => $this->dashboard->getSetting()];
        goto TRPUp;
        LLPJP:
        $data["\163\x6d\x74\137\x61\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive();
        goto byOSV;
        DFXGM:
        $data["\164\151\160\145"] = "\x61\144\144";
        goto Ak41k;
        byOSV:
        $data["\160\162\x6f\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto DFXGM;
        j6qR2:
        $user = $this->ion_auth->user()->row();
        goto CSfXt;
        durtM:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto LLPJP;
        a32TI:
        $this->load->view("\155\141\163\164\145\162\57\163\x69\163\x77\x61\x2f\141\x64\144");
        goto qkpQD;
        VYjp5:
    }
    public function create()
    {
        goto oIPUK;
        L3r0t:
        $nisn = $this->input->post("\x6e\151\163\156", true);
        goto MROAl;
        TIg2T:
        goto ydw9O;
        goto LFwja;
        IdtHk:
        $u_name = "\174\151\163\x5f\x75\x6e\151\x71\x75\x65\133\x6d\x61\x73\164\145\162\x5f\x73\x69\x73\x77\x61\56\165\x73\145\162\156\x61\x6d\x65\135";
        goto izt96;
        cVXXQ:
        $this->db->set("\165\151\x64", "\x55\125\x49\x44\50\x29", FALSE);
        goto nAMXH;
        MROAl:
        $username = $this->input->post("\x75\x73\x65\x72\x6e\x61\x6d\145", true);
        goto TZnTQ;
        SoQCj:
        $this->db->insert("\142\x75\x6b\x75\x5f\x69\x6e\x64\165\153", $induk);
        goto em6Bs;
        oIPUK:
        $nis = $this->input->post("\x6e\x69\163", true);
        goto L3r0t;
        DLzqs:
        $this->output_json($data);
        goto D2OTI;
        iSkSs:
        $id = $this->db->insert_id();
        goto su_Im;
        izt96:
        $this->form_validation->set_rules("\x6e\x69\x73", "\x4e\x49\x53", "\162\145\161\165\x69\x72\145\x64\174\156\165\155\145\x72\151\143\x7c\x74\162\x69\155\x7c\x6d\x69\x6e\x5f\154\145\x6e\x67\164\x68\x5b\x36\135\x7c\x6d\x61\170\x5f\154\x65\156\x67\164\x68\133\63\60\x5d" . $u_nis);
        goto gghKp;
        su_Im:
        $siswa = $this->master->getSiswaById($id);
        goto Y5tvc;
        Tab5X:
        $this->form_validation->set_rules("\x75\163\x65\162\x6e\x61\x6d\145", "\125\163\x65\162\156\x61\x6d\x65", "\x72\145\161\x75\151\x72\x65\144\x7c\164\162\151\155" . $u_name);
        goto p9KQM;
        em6Bs:
        $data["\x74\145\x78\x74"] = "\x53\x69\x73\167\x61\40\142\x65\162\150\141\163\x69\154\x20\x64\x69\x74\x61\155\x62\x61\150\153\141\156";
        goto TIg2T;
        TZnTQ:
        $u_nis = "\174\x69\x73\x5f\x75\156\151\161\165\x65\x5b\x6d\141\163\x74\145\162\x5f\x73\151\x73\x77\x61\x2e\x6e\151\x73\135";
        goto f8kRB;
        Y5tvc:
        $induk = ["\x69\144\137\163\151\x73\167\x61" => $id, "\x75\151\x64" => $siswa->uid, "\x73\164\141\164\x75\163" => 1];
        goto SoQCj;
        nAMXH:
        $data["\x69\156\163\145\162\164"] = $this->db->insert("\x6d\141\163\164\145\x72\x5f\x73\x69\x73\x77\x61", $insert);
        goto iSkSs;
        p9KQM:
        if ($this->form_validation->run() == FALSE) {
            goto XzTw5;
        }
        goto rIm9R;
        LFwja:
        XzTw5:
        goto GXNz9;
        GXNz9:
        $data["\x69\x6e\163\145\162\164"] = false;
        goto jzrH2;
        gghKp:
        $this->form_validation->set_rules("\x6e\151\163\156", "\x4e\x49\123\116", "\x72\x65\x71\165\x69\162\x65\144\174\x6e\165\x6d\145\x72\x69\143\174\164\x72\151\155\174\155\151\156\x5f\x6c\x65\156\x67\164\150\133\66\x5d\174\x6d\x61\x78\x5f\x6c\145\156\147\x74\150\133\62\60\135" . $u_nisn);
        goto Tab5X;
        jzrH2:
        $data["\164\145\x78\x74"] = "\104\141\x74\141\40\x53\x75\x64\141\150\x20\x61\144\x61\x2c\x20\x50\141\163\x74\151\x6b\x61\x6e\40\116\111\x53\x2c\x20\116\x49\123\x4e\x20\144\141\156\x20\125\163\145\x72\x6e\141\x6d\x65\40\x62\x65\154\165\x6d\40\144\151\x67\x75\156\x61\153\141\x6e\x20\163\151\163\167\141\40\x6c\141\x69\156";
        goto O5rI5;
        O5rI5:
        ydw9O:
        goto DLzqs;
        rIm9R:
        $insert = ["\156\x61\155\141" => $this->input->post("\x6e\x61\x6d\x61\x5f\163\151\163\167\141", true), "\x6e\151\163" => $nis, "\156\151\163\x6e" => $nisn, "\x6a\x65\x6e\x69\x73\x5f\153\145\x6c\141\155\151\156" => $this->input->post("\x6a\145\x6e\151\x73\x5f\153\145\x6c\141\x6d\151\x6e", true), "\x6b\145\x6c\x61\163\x5f\x61\167\x61\154" => $this->input->post("\x6b\145\x6c\141\x73\137\x61\x77\x61\154", true), "\x74\141\x68\165\156\137\155\141\163\165\153" => $this->input->post("\164\x61\150\x75\156\137\155\141\163\165\x6b", true), "\x75\x73\x65\x72\156\141\x6d\x65" => $username, "\160\x61\x73\163\167\157\x72\144" => $this->input->post("\x70\141\x73\163\x77\157\x72\144", true), "\146\x6f\164\157" => "\x75\x70\154\x6f\141\144\163\57\146\x6f\x74\x6f\x5f\x73\151\x73\167\141\57" . $nis . "\x6a\160\147"];
        goto cVXXQ;
        f8kRB:
        $u_nisn = "\174\151\x73\137\x75\156\151\x71\x75\x65\133\x6d\141\163\164\145\162\137\163\151\x73\167\x61\x2e\x6e\x69\x73\x6e\x5d";
        goto IdtHk;
        D2OTI:
    }
    public function edit($id)
    {
        goto TAah9;
        lXD93:
        $data["\164\x70\x5f\141\143\164\151\x76\145"] = $tp;
        goto ieFe3;
        Aj0uJ:
        $inputBio = [["\156\x61\155\x65" => "\164\x65\155\x70\141\164\137\x6c\141\150\x69\x72", "\x6c\x61\142\x65\154" => "\x54\x65\155\x70\x61\164\40\114\x61\x68\151\162", "\166\141\154\165\x65" => $siswa->tempat_lahir, "\151\143\x6f\x6e" => "\146\x61\162\40\146\141\x2d\x6d\x61\x70", "\143\x6c\x61\x73\163" => '', "\164\171\x70\x65" => "\164\145\170\x74"], ["\x6e\141\155\145" => "\164\x61\x6e\x67\x67\x61\x6c\x5f\154\141\x68\x69\162", "\154\x61\x62\145\154" => "\124\x61\156\x67\147\x61\154\40\114\x61\150\151\x72", "\166\x61\154\165\x65" => $siswa->tanggal_lahir, "\x69\x63\157\x6e" => "\146\x61\x72\x20\146\141\55\x63\x61\154\x65\x6e\x64\141\x72", "\143\154\141\x73\x73" => "\x74\x61\150\x75\x6e", "\164\171\x70\145" => "\x74\x65\x78\x74"], ["\143\154\141\163\163" => '', "\156\x61\x6d\x65" => "\141\147\x61\155\x61", "\154\141\142\x65\154" => "\101\147\x61\155\x61", "\x76\x61\154\x75\x65" => $siswa->agama, "\151\143\157\156" => "\x66\x61\x72\x20\x66\x61\55\x63\x61\154\145\156\144\141\162", "\x74\171\x70\145" => "\164\x65\x78\164"], ["\143\x6c\x61\x73\x73" => '', "\x6e\x61\x6d\145" => "\x61\x6c\141\155\141\x74", "\x6c\141\x62\145\x6c" => "\101\x6c\x61\155\x61\x74", "\166\141\154\x75\145" => $siswa->alamat, "\x69\143\x6f\x6e" => "\x66\x61\x72\x20\146\x61\55\x75\163\x65\162", "\164\171\x70\145" => "\164\145\x78\x74"], ["\143\154\x61\x73\x73" => '', "\156\x61\x6d\x65" => "\x72\164", "\x6c\x61\142\145\x6c" => "\x52\164", "\166\141\x6c\x75\145" => $siswa->rt, "\x69\x63\x6f\x6e" => "\146\x61\162\40\x66\x61\x2d\165\163\x65\x72", "\x74\171\160\145" => "\x74\x65\x78\x74"], ["\143\154\x61\163\163" => '', "\156\x61\x6d\x65" => "\x72\167", "\154\x61\x62\145\154" => "\122\x77", "\x76\x61\x6c\165\x65" => $siswa->rw, "\x69\x63\157\156" => "\146\141\162\x20\146\141\x2d\x75\163\145\162", "\x74\x79\x70\145" => "\164\145\170\x74"], ["\143\154\141\x73\163" => '', "\x6e\x61\155\x65" => "\153\145\x6c\x75\x72\x61\150\x61\x6e", "\154\141\142\x65\154" => "\113\145\x6c\x75\x72\x61\x68\x61\156\x2f\x44\145\163\x61", "\x76\141\x6c\x75\x65" => $siswa->kelurahan, "\151\143\x6f\x6e" => "\x66\141\x72\x20\146\x61\55\x75\163\x65\x72", "\164\x79\x70\145" => "\x74\x65\x78\164"], ["\143\154\141\163\x73" => '', "\156\x61\155\145" => "\x6b\145\143\x61\x6d\x61\164\x61\156", "\154\141\142\x65\x6c" => "\x4b\x65\x63\141\155\141\x74\141\156", "\166\x61\x6c\x75\145" => $siswa->kecamatan, "\151\x63\157\x6e" => "\x66\x61\162\40\146\141\x2d\165\163\x65\x72", "\x74\171\x70\x65" => "\164\145\170\x74"], ["\143\154\141\163\163" => '', "\156\x61\x6d\x65" => "\x6b\141\142\x75\x70\141\x74\145\x6e", "\x6c\141\x62\x65\154" => "\113\141\x62\x75\x70\141\164\145\x6e\x2f\x4b\x6f\164\x61", "\166\x61\x6c\x75\145" => $siswa->kabupaten, "\151\x63\157\x6e" => "\x66\141\162\40\146\x61\55\x75\x73\x65\x72", "\x74\x79\160\145" => "\164\x65\170\x74"], ["\143\x6c\x61\163\163" => '', "\x6e\141\x6d\145" => "\x6b\x6f\x64\145\137\x70\157\163", "\154\141\142\145\x6c" => "\x4b\157\x64\145\40\120\x6f\163", "\x76\141\154\x75\x65" => $siswa->kode_pos, "\151\x63\x6f\x6e" => "\146\x61\x72\x20\146\x61\55\x75\x73\145\162", "\x74\171\x70\x65" => "\164\x65\170\x74"], ["\143\x6c\x61\163\x73" => '', "\x6e\x61\155\x65" => "\x68\x70", "\x6c\141\x62\x65\154" => "\x48\160", "\166\x61\x6c\165\145" => $siswa->hp, "\151\x63\157\156" => "\x66\x61\x72\40\146\x61\x2d\x75\163\x65\x72", "\x74\171\160\x65" => "\164\145\170\x74"]];
        goto GXDkC;
        f6GZ3:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto lXD93;
        QyRp5:
        $smt = $this->master->getSemesterActive();
        goto PomDB;
        RtJgY:
        $user = $this->ion_auth->user()->row();
        goto oW30_;
        Jg9QH:
        lj_Qj:
        goto ucT56;
        Wzfgq:
        $inputData = [["\154\x61\x62\x65\154" => "\x4e\x61\x6d\141\x20\x4c\145\156\147\153\x61\x70", "\x6e\x61\155\145" => "\156\141\x6d\x61", "\x76\141\x6c\x75\x65" => $siswa->nama, "\151\x63\157\156" => "\x66\141\162\40\146\141\55\165\x73\145\x72", "\x63\x6c\141\163\x73" => '', "\x74\x79\x70\145" => "\x74\x65\x78\x74"], ["\x6c\141\x62\x65\154" => "\116\111\123", "\x6e\x61\155\145" => "\x6e\x69\163", "\x76\141\x6c\x75\145" => $siswa->nis, "\151\143\x6f\156" => "\146\141\x72\x20\x66\141\x2d\151\144\x2d\143\141\162\x64", "\143\154\x61\x73\x73" => '', "\x74\x79\160\145" => "\156\x75\155\142\x65\162"], ["\x6e\141\155\145" => "\156\x69\x73\x6e", "\154\x61\x62\145\x6c" => "\x4e\111\x53\x4e", "\166\x61\154\x75\145" => $siswa->nisn, "\x69\x63\157\156" => "\x66\x61\162\x20\146\x61\x2d\x69\144\x2d\x63\141\162\144", "\143\x6c\x61\163\163" => '', "\164\171\160\145" => "\x74\145\x78\x74"], ["\154\141\142\x65\x6c" => "\x4a\145\x6e\151\x73\40\113\x65\x6c\x61\155\x69\x6e", "\156\141\x6d\145" => "\152\x65\156\x69\163\x5f\153\145\154\141\155\151\156", "\166\141\154\x75\145" => $siswa->jenis_kelamin, "\151\x63\x6f\x6e" => "\146\x61\x73\x20\x66\x61\x2d\166\145\x6e\165\163\55\155\141\162\163", "\x63\154\x61\163\163" => '', "\x74\x79\x70\x65" => "\164\x65\x78\164"], ["\x6e\x61\155\145" => "\153\145\x6c\141\x73\137\141\167\141\x6c", "\154\x61\142\x65\154" => "\x44\x69\x74\145\162\x69\155\x61\40\144\151\40\153\145\154\141\163", "\x76\x61\154\165\145" => $siswa->kelas_awal, "\x69\143\157\x6e" => "\146\x61\163\x20\146\x61\x2d\x67\x72\x61\x64\165\141\x74\151\157\156\x2d\x63\141\160", "\143\154\141\x73\x73" => '', "\x74\171\x70\x65" => "\x74\x65\170\164"], ["\x6e\141\155\145" => "\x74\141\x68\x75\156\137\x6d\141\163\165\153", "\x6c\141\x62\145\x6c" => "\124\147\x6c\40\144\x69\164\x65\162\x69\155\x61", "\166\x61\x6c\x75\x65" => $siswa->tahun_masuk, "\x69\143\157\156" => "\x74\141\150\x75\156\x20\x66\141\162\x20\146\x61\x2d\x63\x61\154\x65\156\144\x61\x72\x2d\141\x6c\164", "\x63\x6c\141\x73\x73" => "\x74\141\x68\x75\x6e", "\x74\171\160\145" => "\164\145\x78\164"], ["\156\141\155\145" => "\x73\145\x6b\x6f\154\141\x68\137\141\163\x61\x6c", "\154\141\x62\145\x6c" => "\123\145\x6b\157\x6c\x61\x68\x20\101\x73\141\x6c", "\166\141\x6c\165\x65" => $siswa->sekolah_asal, "\151\x63\157\156" => "\146\x61\x73\x20\x66\x61\55\x67\162\x61\x64\165\141\164\x69\x6f\x6e\x2d\x63\x61\x70", "\143\154\141\x73\x73" => '', "\164\171\x70\x65" => "\x74\145\170\164"], ["\x6e\x61\x6d\x65" => "\163\x74\141\164\165\163", "\154\x61\142\x65\x6c" => "\x53\145\164\x61\x74\x75\x73", "\166\x61\154\165\145" => $siswa->status, "\x69\x63\x6f\156" => "\x66\x61\162\40\x66\x61\x2d\165\163\x65\x72", "\143\x6c\x61\x73\x73" => "\163\164\141\x74\x75\163", "\x74\171\160\x65" => "\x74\145\170\164"]];
        goto Aj0uJ;
        qLbLW:
        $this->load->view("\155\141\163\164\145\x72\x2f\x73\151\x73\167\141\x2f\145\x64\151\164");
        goto POM63;
        nujEW:
        AAkrG:
        goto zJB0V;
        flY8f:
        $data["\x70\x72\x6f\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto C0mN3;
        VaA_Z:
        goto AAkrG;
        goto Jg9QH;
        GXDkC:
        $inputOrtu = [["\156\141\x6d\145" => "\x73\164\141\164\165\163\137\153\x65\154\165\141\x72\147\x61", "\154\141\x62\145\154" => "\123\x74\x61\x74\165\163\40\x4b\145\154\x75\141\x72\147\141", "\166\x61\154\165\x65" => $siswa->status_keluarga, "\x69\143\x6f\x6e" => "\146\x61\162\40\x66\141\x2d\165\x73\145\162", "\x74\171\160\145" => "\x74\x65\170\x74"], ["\x6e\x61\155\x65" => "\141\156\x61\153\x5f\153\x65", "\154\x61\x62\x65\154" => "\101\156\x61\x6b\40\x6b\145", "\x76\x61\154\x75\x65" => $siswa->anak_ke, "\151\x63\157\156" => "\x66\141\162\x20\146\x61\55\165\163\x65\162", "\x74\171\160\x65" => "\156\165\x6d\x62\x65\162"], ["\x6e\141\155\x65" => "\x6e\x61\155\x61\x5f\x61\171\141\x68", "\154\x61\x62\x65\x6c" => "\116\x61\x6d\x61\x20\101\x79\x61\150", "\166\141\x6c\x75\x65" => $siswa->nama_ayah, "\x69\143\157\x6e" => "\x66\141\x72\x20\146\141\x2d\x75\163\145\x72", "\164\171\160\145" => "\x74\145\x78\164"], ["\x6e\x61\155\145" => "\160\145\153\145\162\x6a\141\141\156\137\141\171\x61\x68", "\x6c\x61\x62\145\x6c" => "\x50\x65\153\x65\162\152\141\x61\x6e\x20\x41\171\x61\x68", "\x76\141\154\x75\x65" => $siswa->pekerjaan_ayah, "\x69\143\x6f\x6e" => "\146\x61\x72\40\x66\x61\55\x75\x73\145\x72", "\x74\x79\x70\145" => "\164\x65\170\x74"], ["\156\141\155\145" => "\x61\154\x61\155\x61\x74\137\141\x79\141\150", "\154\141\142\145\x6c" => "\x41\x6c\x61\155\141\164\40\101\171\141\x68", "\166\141\154\165\x65" => $siswa->alamat_ayah, "\151\x63\157\x6e" => "\x66\x61\162\40\x66\x61\55\165\163\x65\x72", "\x74\x79\160\145" => "\x74\x65\x78\164"], ["\x6e\141\155\x65" => "\x6e\157\x68\x70\137\x61\x79\141\150", "\154\141\142\145\154" => "\x4e\x6f\56\x20\110\x50\40\x41\x79\141\x68", "\166\141\x6c\x75\x65" => $siswa->nohp_ayah, "\151\x63\157\156" => "\x66\141\x72\x20\x66\x61\55\x75\x73\x65\162", "\164\171\160\x65" => "\156\x75\155\142\x65\162"], ["\x6e\141\155\145" => "\x6e\141\155\141\137\151\x62\x75", "\154\x61\x62\x65\154" => "\x4e\141\155\x61\x20\111\x62\x75", "\x76\141\154\x75\145" => $siswa->nama_ibu, "\151\x63\x6f\x6e" => "\146\x61\x72\x20\x66\x61\55\165\163\145\162", "\164\x79\160\145" => "\164\145\x78\x74"], ["\156\141\155\x65" => "\160\145\x6b\145\162\x6a\x61\x61\x6e\x5f\151\142\x75", "\154\141\x62\145\154" => "\x50\x65\153\x65\x72\x6a\141\x61\156\40\111\x62\x75", "\166\x61\x6c\x75\145" => $siswa->pekerjaan_ibu, "\151\143\x6f\156" => "\146\x61\162\40\146\141\x2d\x75\x73\145\x72", "\x74\x79\x70\145" => "\164\145\170\164"], ["\x6e\x61\x6d\145" => "\x61\x6c\x61\155\141\x74\x5f\x69\142\x75", "\154\x61\142\x65\x6c" => "\x41\154\141\x6d\141\x74\x20\111\x62\165", "\166\x61\x6c\165\x65" => $siswa->alamat_ibu, "\x69\x63\x6f\x6e" => "\x66\x61\162\x20\146\141\x2d\x75\163\145\x72", "\x74\x79\x70\x65" => "\x74\x65\170\x74"], ["\156\x61\155\x65" => "\x6e\157\x68\x70\137\151\x62\165", "\154\141\142\145\154" => "\116\x6f\x2e\x20\110\x50\40\x49\x62\165", "\166\141\154\x75\145" => $siswa->nohp_ibu, "\151\143\x6f\156" => "\146\x61\x72\x20\x66\x61\x2d\x75\163\x65\x72", "\164\x79\160\145" => "\156\x75\x6d\142\x65\x72"]];
        goto zEsj0;
        Qey30:
        $data["\x69\156\x70\x75\x74\x5f\x62\151\x6f"] = json_decode(json_encode($inputBio), FALSE);
        goto T4Z_Y;
        PomDB:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto f6GZ3;
        U0Okc:
        $data["\147\165\162\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto xWcyI;
        zEsj0:
        $inputWali = [["\x6e\x61\x6d\x65" => "\x6e\141\155\x61\137\x77\141\154\x69", "\x6c\x61\x62\145\x6c" => "\116\x61\155\x61\x20\127\x61\154\151", "\x76\x61\154\x75\x65" => $siswa->nama_wali, "\x69\143\x6f\x6e" => "\146\141\162\x20\146\141\55\165\163\145\x72", "\164\171\160\x65" => "\x74\x65\170\x74"], ["\x6e\x61\x6d\145" => "\160\x65\153\145\162\152\x61\141\156\x5f\x77\141\154\151", "\x6c\x61\142\x65\x6c" => "\120\x65\153\x65\x72\152\x61\141\x6e\x20\127\x61\x6c\x69", "\166\x61\x6c\165\145" => $siswa->pekerjaan_wali, "\x69\x63\x6f\x6e" => "\x66\141\x72\40\x66\x61\55\165\163\x65\162", "\164\x79\160\x65" => "\x74\x65\x78\x74"], ["\x6e\x61\x6d\145" => "\x61\154\x61\155\x61\164\137\x77\141\154\x69", "\x6c\x61\x62\x65\154" => "\x41\x6c\x61\155\x61\164\40\127\x61\x6c\151", "\x76\x61\x6c\165\x65" => $siswa->alamat_wali, "\x69\x63\157\156" => "\x66\141\162\40\146\x61\x2d\165\163\x65\162", "\x74\x79\160\x65" => "\x74\x65\x78\x74"], ["\x6e\141\155\x65" => "\156\x6f\x68\x70\137\167\141\x6c\151", "\x6c\141\142\x65\154" => "\x4e\x6f\56\x20\x48\x50\x20\127\x61\154\151", "\x76\x61\x6c\165\145" => $siswa->nohp_wali, "\151\143\x6f\x6e" => "\146\141\x72\x20\146\141\x2d\x75\163\145\162", "\x74\171\160\x65" => "\156\x75\x6d\142\145\x72"]];
        goto RtJgY;
        T4Z_Y:
        $data["\151\x6e\160\165\164\x5f\157\162\164\165"] = json_decode(json_encode($inputOrtu), FALSE);
        goto ZpGNT;
        xWcyI:
        $this->load->view("\155\145\155\x62\145\x72\x73\57\147\x75\x72\x75\57\x74\x65\155\160\154\x61\x74\x65\x73\57\x68\x65\141\x64\x65\162", $data);
        goto qLbLW;
        JBYrk:
        $tp = $this->master->getTahunActive();
        goto QyRp5;
        POM63:
        $this->load->view("\x6d\x65\x6d\142\x65\x72\x73\x2f\x67\165\x72\x75\x2f\x74\x65\155\160\x6c\x61\164\145\x73\57\146\157\x6f\164\145\x72");
        goto VaA_Z;
        oW30_:
        $data = ["\165\163\145\162" => $user, "\152\165\x64\165\x6c" => "\123\151\163\167\141", "\x73\x75\142\x6a\165\x64\x75\x6c" => "\x45\144\x69\164\x20\x44\x61\x74\141\x20\x53\x69\163\167\141", "\163\151\163\167\141" => $siswa, "\x73\x65\x74\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto JBYrk;
        lUQZa:
        $this->load->view("\137\x74\x65\x6d\160\x6c\x61\164\x65\163\57\x64\x61\x73\x68\142\157\x61\162\x64\57\137\x66\157\x6f\164\x65\162");
        goto nujEW;
        ZpGNT:
        $data["\x69\156\x70\x75\x74\137\x77\x61\x6c\151"] = json_decode(json_encode($inputWali), FALSE);
        goto flY8f;
        OCu9V:
        $data["\151\x6e\x70\x75\x74\x5f\x64\141\164\x61"] = json_decode(json_encode($inputData), FALSE);
        goto Qey30;
        C0mN3:
        if ($this->ion_auth->is_admin()) {
            goto lj_Qj;
        }
        goto U0Okc;
        pWF23:
        $this->load->view("\155\x61\163\164\x65\162\57\x73\151\x73\x77\x61\57\x65\x64\151\x74");
        goto lUQZa;
        ucT56:
        $this->load->view("\x5f\164\145\155\160\154\141\164\x65\163\57\x64\x61\163\x68\142\x6f\x61\162\x64\x2f\x5f\150\x65\141\144\145\x72", $data);
        goto pWF23;
        ieFe3:
        $data["\163\x6d\164\137\141\x63\164\151\x76\x65"] = $smt;
        goto OCu9V;
        TAah9:
        $siswa = $this->master->getSiswaById($id);
        goto Wzfgq;
        zJB0V:
    }
    public function updateData()
    {
        goto hftS0;
        tGCBq:
        $nis = $this->input->post("\x6e\151\x73", true);
        goto eRixx;
        Z9o6o:
        $this->db->update("\x62\165\153\x75\x5f\151\x6e\144\x75\153");
        goto M85a_;
        d6SF7:
        $this->db->where("\x69\144\x5f\163\151\163\167\x61", $siswa->id_siswa);
        goto Z9o6o;
        J7SOw:
        $u_nisn = $siswa->nisn === $nisn ? '' : "\174\x69\x73\137\165\x6e\151\x71\165\x65\133\x6d\141\x73\164\x65\x72\x5f\163\151\x73\167\x61\56\156\x69\x73\156\135";
        goto Gy61B;
        hefV3:
        I3yxE:
        goto qjI1l;
        ipFUX:
        $siswa = $this->master->getSiswaById($id_siswa);
        goto rG9UO;
        Gy61B:
        $this->form_validation->set_rules("\x6e\x69\163", "\x4e\x49\x53", "\x72\x65\161\x75\151\162\x65\x64\174\x6e\165\x6d\145\x72\151\x63\174\164\x72\151\x6d\174\155\x69\156\x5f\154\x65\156\147\x74\x68\x5b\66\x5d\x7c\155\x61\170\x5f\154\145\156\x67\x74\x68\133\x33\60\135" . $u_nis);
        goto jdbTS;
        X3xI0:
        $tgl_lahir = $this->input->post("\164\141\156\x67\147\x61\x6c\x5f\154\141\150\151\162", true);
        goto Hglza;
        qjI1l:
        $data["\x69\156\163\145\x72\164"] = false;
        goto emRYs;
        wbc6A:
        $data["\164\145\x78\x74"] = "\x53\151\x73\167\141\x20\142\145\162\x68\x61\163\151\154\x20\144\x69\160\x65\162\x62\x61\150\x61\x72\165\151";
        goto cTfE4;
        z8xYN:
        $this->output_json($data);
        goto EmbTx;
        M85a_:
        $data["\x69\156\163\145\162\164"] = $input;
        goto wbc6A;
        hftS0:
        $id_siswa = $this->input->post("\x69\x64\x5f\x73\151\x73\x77\141", true);
        goto tGCBq;
        rG9UO:
        $u_nis = $siswa->nis === $nis ? '' : "\174\151\163\137\165\x6e\x69\161\x75\145\133\x6d\x61\163\164\145\162\137\x73\x69\163\x77\x61\56\x6e\151\163\x5d";
        goto J7SOw;
        ru8ET:
        $this->db->set("\163\x74\x61\164\x75\163", $this->input->post("\x73\164\x61\164\165\x73", true));
        goto d6SF7;
        fU_Mo:
        $this->master->update("\x6d\141\163\164\x65\x72\137\163\x69\x73\167\141", $input, "\151\x64\137\163\x69\163\167\x61", $id_siswa);
        goto ru8ET;
        emRYs:
        $data["\164\145\x78\x74"] = "\x4e\x49\x53\40\153\165\x72\x61\156\147\40\144\x61\162\x69\40\66\x20\141\156\x67\153\141\54\x20\x61\164\x61\165\40\144\x61\x74\141\x20\x53\165\x64\141\150\x20\141\x64\141\x2c\40\x50\141\163\164\151\x6b\x61\x6e\40\x4e\111\123\x2c\40\x64\141\156\40\x4e\x49\x53\x4e\40\x62\x65\154\x75\155\x20\x64\151\147\x75\156\141\x6b\141\x6e\40\x73\151\163\x77\141\x20\154\x61\151\156";
        goto EePal;
        EePal:
        bfWMt:
        goto z8xYN;
        eRixx:
        $nisn = $this->input->post("\156\x69\x73\156", true);
        goto ipFUX;
        Hglza:
        $tgl_masuk = $this->input->post("\x74\x61\x68\x75\156\x5f\x6d\141\x73\x75\x6b", true);
        goto AL501;
        AL501:
        $input = ["\x6e\151\x73\x6e" => $this->input->post("\156\x69\x73\x6e", true), "\x6e\151\163" => $this->input->post("\156\151\163", true), "\x6e\x61\155\141" => $this->input->post("\156\141\155\141", true), "\152\x65\156\x69\163\137\x6b\145\154\141\x6d\x69\156" => $this->input->post("\x6a\x65\156\x69\163\137\x6b\x65\x6c\x61\155\151\156", true), "\x74\145\155\x70\x61\x74\x5f\x6c\141\x68\151\x72" => $this->input->post("\x74\145\155\x70\x61\x74\137\154\141\x68\151\x72", true), "\164\x61\x6e\147\147\141\154\137\x6c\x61\x68\x69\162" => $this->strContains($tgl_lahir, "\x30\x30\x30\60\x2d") ? null : $tgl_lahir, "\141\147\141\155\141" => $this->input->post("\141\x67\x61\155\x61", true), "\x73\164\141\x74\x75\x73\137\153\145\154\x75\141\162\147\141" => $this->input->post("\163\x74\141\164\x75\163\x5f\x6b\x65\x6c\165\x61\162\147\141", true), "\x61\x6e\141\153\137\153\x65" => $this->input->post("\x61\x6e\x61\x6b\x5f\153\145", true), "\141\154\x61\155\141\164" => $this->input->post("\x61\x6c\x61\x6d\141\164", true), "\x72\164" => $this->input->post("\x72\x74", true), "\x72\167" => $this->input->post("\x72\x77", true), "\x6b\145\154\x75\x72\141\150\x61\x6e" => $this->input->post("\153\x65\x6c\165\x72\141\x68\141\156", true), "\153\145\143\141\155\x61\164\141\156" => $this->input->post("\153\x65\x63\141\x6d\x61\164\141\x6e", true), "\x6b\141\142\x75\160\141\x74\x65\x6e" => $this->input->post("\153\x61\x62\165\160\141\164\145\156", true), "\160\162\157\166\151\156\163\x69" => $this->input->post("\160\x72\157\166\x69\x6e\x73\x69", true), "\x6b\157\144\x65\x5f\x70\157\x73" => $this->input->post("\153\157\144\x65\x5f\x70\157\x73", true), "\x68\160" => $this->input->post("\150\160", true), "\x6e\x61\x6d\x61\137\x61\x79\x61\150" => $this->input->post("\156\x61\155\141\x5f\x61\x79\x61\150", true), "\x6e\x6f\150\160\x5f\141\171\141\150" => $this->input->post("\x6e\157\x68\x70\x5f\x61\x79\141\x68", true), "\160\x65\x6e\144\x69\x64\x69\x6b\141\156\x5f\141\171\x61\x68" => $this->input->post("\160\145\x6e\x64\x69\x64\x69\153\x61\156\137\x61\x79\x61\150", true), "\160\x65\153\145\162\152\x61\x61\156\x5f\141\x79\x61\150" => $this->input->post("\160\145\153\x65\162\x6a\x61\141\x6e\x5f\141\x79\x61\x68", true), "\x61\154\x61\x6d\141\x74\137\x61\171\x61\150" => $this->input->post("\141\x6c\x61\155\141\x74\137\x61\x79\141\150", true), "\156\x61\155\141\137\151\x62\x75" => $this->input->post("\x6e\141\155\x61\x5f\x69\142\x75", true), "\156\157\x68\x70\137\x69\x62\165" => $this->input->post("\x6e\x6f\150\x70\x5f\x69\142\x75", true), "\x70\145\156\144\x69\144\151\153\x61\156\137\x69\142\165" => $this->input->post("\x70\145\x6e\x64\x69\x64\x69\x6b\141\156\137\151\142\165", true), "\x70\x65\153\x65\x72\x6a\141\x61\156\137\x69\x62\x75" => $this->input->post("\x70\x65\153\145\x72\x6a\x61\x61\x6e\137\x69\x62\165", true), "\141\x6c\141\x6d\x61\x74\x5f\x69\142\165" => $this->input->post("\x61\x6c\x61\155\141\164\137\x69\x62\x75", true), "\x6e\x61\x6d\x61\x5f\x77\x61\154\151" => $this->input->post("\156\x61\155\141\137\x77\x61\154\151", true), "\160\x65\156\x64\x69\x64\x69\153\141\156\x5f\167\141\154\x69" => $this->input->post("\x70\x65\x6e\144\151\144\x69\153\141\156\137\x77\x61\x6c\x69", true), "\x70\145\153\x65\162\x6a\x61\141\156\x5f\x77\x61\154\151" => $this->input->post("\160\145\x6b\x65\x72\x6a\x61\x61\156\137\167\141\x6c\x69", true), "\x6e\x6f\150\160\x5f\167\141\x6c\151" => $this->input->post("\x6e\157\x68\160\137\167\141\x6c\151", true), "\x61\154\141\155\x61\x74\x5f\167\141\154\151" => $this->input->post("\x61\154\141\155\141\x74\x5f\x77\x61\x6c\x69", true), "\x74\x61\150\x75\x6e\x5f\155\141\x73\165\x6b" => $this->strContains($tgl_masuk, "\x30\x30\x30\x30\55") ? null : $tgl_masuk, "\x6b\x65\154\141\x73\x5f\x61\x77\141\154" => $this->input->post("\153\x65\x6c\141\163\x5f\x61\x77\x61\x6c", true), "\x74\147\154\137\x6c\x61\x68\151\x72\137\x61\x79\141\150" => $this->input->post("\x74\x67\x6c\x5f\154\x61\150\151\x72\137\x61\171\141\150", true), "\x74\147\154\x5f\154\141\x68\x69\162\x5f\x69\x62\x75" => $this->input->post("\164\147\x6c\x5f\x6c\x61\x68\151\x72\137\x69\x62\165", true), "\x74\147\154\x5f\154\141\x68\x69\x72\137\x77\141\x6c\151" => $this->input->post("\164\147\x6c\137\154\141\150\x69\x72\137\x77\141\154\151", true), "\163\145\153\157\154\x61\x68\137\141\x73\x61\x6c" => $this->input->post("\x73\145\x6b\157\x6c\141\x68\137\141\x73\141\x6c", true), "\146\157\x74\157" => $siswa->foto != null && $siswa->foto != '' ? $siswa->foto : "\165\x70\154\x6f\x61\144\163\57\x66\x6f\x74\x6f\137\163\151\x73\x77\x61\57" . $nis . "\56\x6a\x70\x67"];
        goto fU_Mo;
        jdbTS:
        if ($this->form_validation->run() == FALSE) {
            goto I3yxE;
        }
        goto X3xI0;
        cTfE4:
        goto bfWMt;
        goto hefV3;
        EmbTx:
    }
    function strContains($string, $val)
    {
        return strpos($string, $val) !== false;
    }
    function uploadFile($id_siswa)
    {
        goto BzlnZ;
        AqzWq:
        goto y0s0X;
        goto amwXA;
        PhblH:
        if (!$this->upload->do_upload("\146\157\164\x6f")) {
            goto o4LCN;
        }
        goto SPmez;
        RsKcZ:
        o4LCN:
        goto dJ7bh;
        UD7IM:
        bC70j:
        goto kcjid;
        BzlnZ:
        $siswa = $this->master->getSiswaById($id_siswa);
        goto G6XGY;
        NNqc9:
        $data["\x73\x72\x63"] = '';
        goto AqzWq;
        LPr0_:
        goto bC70j;
        goto RsKcZ;
        djMig:
        $data["\163\164\x61\164\x75\163"] = true;
        goto TS9H0;
        QNd3W:
        $config["\165\x70\x6c\x6f\141\x64\137\x70\141\164\150"] = "\x2e\57\x75\160\x6c\157\141\144\x73\x2f\146\157\x74\x6f\x5f\x73\151\163\x77\x61\57";
        goto YIuwr;
        QIxDv:
        $config["\x66\151\154\x65\x5f\x6e\141\x6d\145"] = $siswa->nis;
        goto Trbxw;
        kcjid:
        $data["\164\x79\160\x65"] = $_FILES["\146\157\164\157"]["\164\171\160\145"];
        goto rVy1O;
        YIuwr:
        $config["\141\x6c\154\157\167\x65\144\137\164\171\160\145\163"] = "\147\x69\x66\x7c\x6a\x70\147\174\160\156\x67\174\152\160\x65\147\174\112\x50\105\x47\x7c\112\120\x47\174\x50\116\107\174\x47\x49\x46";
        goto BIvmy;
        vxQ81:
        $this->output_json($data);
        goto yHKhA;
        CvJx2:
        $this->db->update("\155\141\x73\x74\145\x72\x5f\x73\x69\163\167\141");
        goto LPr0_;
        Trbxw:
        $this->upload->initialize($config);
        goto PhblH;
        TS9H0:
        $this->db->set("\x66\157\x74\x6f", "\x75\160\154\157\x61\x64\x73\57\x66\x6f\164\x6f\137\x73\x69\163\x77\141\57" . $result["\x66\x69\x6c\x65\x5f\156\x61\x6d\x65"]);
        goto wXA6p;
        SPmez:
        $result = $this->upload->data();
        goto wWlqd;
        V2Ubi:
        $data["\x66\151\x6c\145\156\141\155\145"] = pathinfo($result["\146\151\154\x65\137\156\141\155\x65"], PATHINFO_FILENAME);
        goto djMig;
        amwXA:
        hJnO1:
        goto QNd3W;
        wXA6p:
        $this->db->where("\x69\144\x5f\x73\151\163\x77\x61", $id_siswa);
        goto CvJx2;
        dJ7bh:
        $data["\x73\x74\x61\x74\165\163"] = false;
        goto xwKtZ;
        BIvmy:
        $config["\x6f\x76\145\162\167\162\x69\164\x65"] = true;
        goto QIxDv;
        iuGgC:
        y0s0X:
        goto vxQ81;
        wWlqd:
        $data["\x73\162\x63"] = base_url() . "\x75\x70\154\x6f\141\x64\x73\57\x66\157\164\x6f\137\x73\x69\163\x77\141\x2f" . $result["\146\151\x6c\x65\137\x6e\x61\155\x65"];
        goto V2Ubi;
        xwKtZ:
        $data["\x73\x72\143"] = $this->upload->display_errors();
        goto UD7IM;
        G6XGY:
        if (isset($_FILES["\146\157\164\157"]["\156\141\155\x65"])) {
            goto hJnO1;
        }
        goto NNqc9;
        rVy1O:
        $data["\163\x69\x7a\x65"] = $_FILES["\146\157\164\x6f"]["\x73\x69\x7a\145"];
        goto iuGgC;
        yHKhA:
    }
    function deleteFile($id_siswa)
    {
        goto NP9kC;
        AgLJx:
        echo "\x46\x69\154\145\x20\104\x65\x6c\x65\x74\x65\40\123\x75\143\x63\x65\x73\163\x66\x75\x6c\x6c\x79";
        goto GJpj3;
        NP9kC:
        $src = $this->input->post("\163\162\x63");
        goto UozEF;
        uSoh1:
        $this->db->set("\x66\157\x74\x6f", '');
        goto ytfd2;
        UozEF:
        $file_name = str_replace(base_url(), '', $src);
        goto jhRqT;
        jhRqT:
        if (!($file_name != "\141\x73\x73\145\164\x73\57\x69\x6d\147\x2f\x73\x69\x73\167\x61\56\160\156\x67")) {
            goto oBiB2;
        }
        goto J0ZLS;
        ytfd2:
        $this->db->where("\151\144\x5f\x73\x69\163\167\141", $id_siswa);
        goto sllOb;
        J0ZLS:
        if (!unlink($file_name)) {
            goto y3pSW;
        }
        goto uSoh1;
        sllOb:
        $this->db->update("\x6d\141\163\x74\145\162\x5f\163\x69\x73\167\141");
        goto AgLJx;
        GJpj3:
        y3pSW:
        goto zmQ02;
        zmQ02:
        oBiB2:
        goto dqKmG;
        dqKmG:
    }
    public function delete()
    {
        goto PAcGo;
        rSUJs:
        $this->output_json(["\163\x74\141\164\x75\163" => false]);
        goto uTRND;
        Ahjyx:
        $this->master->delete("\142\165\153\165\137\x69\156\144\x75\x6b", $chk, "\x69\x64\137\x73\151\163\x77\141");
        goto n7mZZ;
        n7mZZ:
        $this->output_json(["\x73\x74\141\164\165\163" => true, "\164\157\x74\x61\x6c" => count($chk)]);
        goto qtu0T;
        uTRND:
        J7d6u:
        goto Flb8n;
        sTsMQ:
        if (!$this->master->delete("\155\141\x73\x74\x65\162\x5f\163\151\163\x77\x61", $chk, "\151\144\x5f\x73\151\163\x77\x61")) {
            goto iU0VY;
        }
        goto Ahjyx;
        PAcGo:
        $chk = $this->input->post("\143\x68\145\143\x6b\x65\x64", true);
        goto ydAU8;
        DyS24:
        goto J7d6u;
        goto qk3iw;
        qk3iw:
        NHlk6:
        goto rSUJs;
        ydAU8:
        if (!$chk) {
            goto NHlk6;
        }
        goto sTsMQ;
        qtu0T:
        iU0VY:
        goto DyS24;
        Flb8n:
    }
    public function previewExcel()
    {
        goto J6mr0;
        I0ImT:
        switch ($ext) {
            case "\56\x78\x6c\163\170":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto EGvmT;
            case "\56\x78\154\x73":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto EGvmT;
            case "\56\143\163\166":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto EGvmT;
            default:
                echo "\165\x6e\x6b\156\x6f\x77\156\x20\146\x69\154\x65\40\145\x78\164";
                die;
        }
        goto UNnGl;
        GYVpQ:
        $file = $this->upload->data("\x66\x75\154\x6c\137\160\141\x74\x68");
        goto Gvcih;
        XfoZT:
        $i++;
        goto s8FSJ;
        hzTUo:
        $error = $this->upload->display_errors();
        goto g9nPK;
        H50rF:
        $config["\155\141\170\137\x73\151\x7a\145"] = 2048;
        goto fjRWK;
        CL1n5:
        fYEXS:
        goto BARoY;
        J6mr0:
        $config["\x75\x70\154\x6f\141\144\137\x70\x61\x74\150"] = "\x2e\x2f\x75\160\x6c\x6f\x61\144\x73\x2f\x69\x6d\160\157\x72\x74\x2f";
        goto w2F7b;
        TC3es:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto E3yZd;
        gT3GX:
        Wj0Ae:
        goto GgJ7K;
        qoMiR:
        $i = 1;
        goto gT3GX;
        w2F7b:
        $config["\141\x6c\154\x6f\x77\x65\x64\137\164\171\160\x65\163"] = "\170\154\163\x7c\170\154\x73\170\x7c\x63\x73\x76";
        goto H50rF;
        s8FSJ:
        goto Wj0Ae;
        goto ehvtD;
        nvON_:
        $spreadsheet = $reader->load($file);
        goto TC3es;
        WFL9c:
        goto xkxwp;
        goto VsBHd;
        Q6pmP:
        $this->upload->initialize($config);
        goto p789O;
        nqB6Z:
        EGvmT:
        goto nvON_;
        g9nPK:
        echo $error;
        goto bDm1T;
        Gvcih:
        $ext = $this->upload->data("\x66\x69\154\145\x5f\x65\x78\x74");
        goto I0ImT;
        GgJ7K:
        if (!($i < count($sheetData))) {
            goto KWFX5;
        }
        goto LF6Ax;
        E3yZd:
        $data = [];
        goto qoMiR;
        ehvtD:
        KWFX5:
        goto Yi9me;
        p789O:
        if (!$this->upload->do_upload("\x75\x70\154\x6f\x61\x64\137\x66\151\154\145")) {
            goto XFm_6;
        }
        goto GYVpQ;
        fjRWK:
        $config["\145\x6e\x63\x72\x79\160\x74\137\x6e\x61\x6d\x65"] = true;
        goto Q6pmP;
        UNnGl:
        X9ZsN:
        goto nqB6Z;
        bDm1T:
        die;
        goto Oe2eP;
        LF6Ax:
        if (!($sheetData[$i][0] != null)) {
            goto fYEXS;
        }
        goto x_BlH;
        x_BlH:
        $data[] = ["\156\x69\163\x6e" => str_replace("\47", '', $sheetData[$i][1]), "\x6e\x69\163" => str_replace("\47", '', $sheetData[$i][2]), "\156\x61\155\141" => $sheetData[$i][3], "\152\x65\x6e\151\x73\x5f\x6b\145\x6c\x61\x6d\x69\156" => $sheetData[$i][4], "\165\163\145\162\x6e\x61\x6d\145" => $sheetData[$i][5], "\160\x61\163\x73\x77\157\x72\144" => $sheetData[$i][6], "\164\145\x6d\x70\x61\x74\x5f\154\x61\x68\x69\x72" => $sheetData[$i][10], "\x74\141\x6e\x67\147\141\x6c\137\154\141\150\151\x72" => $sheetData[$i][11], "\x61\x67\141\155\141" => $sheetData[$i][12], "\x73\x74\141\x74\x75\163\x5f\x6b\145\x6c\x75\141\162\x67\141" => $sheetData[$i][16], "\x61\156\x61\x6b\137\153\x65" => $sheetData[$i][15], "\x61\x6c\x61\155\141\x74" => $sheetData[$i][17], "\x72\x74" => $sheetData[$i][18], "\x72\167" => $sheetData[$i][19], "\153\x65\154\x75\162\141\150\141\x6e" => $sheetData[$i][20], "\153\145\x63\141\x6d\x61\164\141\156" => $sheetData[$i][21], "\153\141\142\165\x70\141\x74\x65\156" => $sheetData[$i][22], "\x70\162\157\166\151\x6e\x73\151" => $sheetData[$i][23], "\x6b\157\144\x65\x5f\160\x6f\x73" => $sheetData[$i][24], "\x68\x70" => str_replace("\x27", '', $sheetData[$i][13]), "\x6e\141\x6d\x61\x5f\x61\171\x61\x68" => $sheetData[$i][25], "\156\157\150\x70\137\x61\171\141\x68" => str_replace("\x27", '', $sheetData[$i][29]), "\x70\145\156\144\151\x64\151\x6b\141\x6e\137\x61\x79\141\x68" => $sheetData[$i][27], "\x70\x65\x6b\x65\162\x6a\141\141\156\x5f\141\x79\141\150" => $sheetData[$i][28], "\141\x6c\141\x6d\x61\x74\137\141\171\x61\150" => $sheetData[$i][30], "\x6e\141\155\x61\137\151\x62\165" => $sheetData[$i][31], "\x6e\157\x68\x70\x5f\x69\142\x75" => str_replace("\47", '', $sheetData[$i][35]), "\160\x65\156\x64\151\x64\x69\153\141\156\137\151\142\165" => $sheetData[$i][33], "\160\x65\x6b\145\x72\x6a\141\x61\156\x5f\x69\x62\165" => $sheetData[$i][34], "\x61\154\x61\155\141\x74\137\x69\142\x75" => $sheetData[$i][36], "\x6e\x61\x6d\141\x5f\167\141\154\151" => $sheetData[$i][37], "\160\145\156\x64\x69\x64\x69\153\141\156\137\167\x61\154\151" => $sheetData[$i][39], "\160\145\153\145\162\152\x61\141\156\x5f\167\x61\154\151" => $sheetData[$i][40], "\156\157\150\160\137\167\141\x6c\151" => str_replace("\47", '', $sheetData[$i][41]), "\141\x6c\x61\155\141\164\x5f\x77\141\154\151" => $sheetData[$i][42], "\164\x61\150\165\x6e\137\x6d\141\163\165\153" => $sheetData[$i][8], "\153\145\x6c\141\x73\x5f\141\x77\x61\x6c" => $sheetData[$i][7], "\164\147\x6c\x5f\154\141\150\151\x72\x5f\141\x79\x61\150" => $sheetData[$i][26], "\164\x67\154\x5f\x6c\141\x68\151\x72\137\151\142\x75" => $sheetData[$i][32], "\164\147\x6c\137\154\x61\x68\151\x72\x5f\167\141\x6c\151" => $sheetData[$i][38], "\163\x65\153\157\154\141\x68\x5f\141\x73\x61\x6c" => $sheetData[$i][9], "\x69\x64\x5f\163\x69\x73\x77\141" => isset($sheetData[$i][43]) ? $sheetData[$i][43] : ''];
        goto CL1n5;
        Yi9me:
        unlink($file);
        goto rYOWr;
        VsBHd:
        XFm_6:
        goto hzTUo;
        Oe2eP:
        xkxwp:
        goto CkyPJ;
        rYOWr:
        echo json_encode($data);
        goto WFL9c;
        BARoY:
        BQ24g:
        goto XfoZT;
        CkyPJ:
    }
    public function do_import()
    {
        goto UGOyb;
        JrgOO:
        iIf7M:
        goto Ic_Bc;
        VH0KG:
        $this->output->set_content_type("\x61\160\x70\154\x69\143\x61\x74\151\x6f\x6e\x2f\x6a\x73\157\x6e")->set_output($save);
        goto edLOE;
        bllgA:
        $this->db->trans_start();
        goto S3K39;
        mHKvq:
        foreach ($uids as $uid) {
            goto DdlEm;
            b_BJm:
            $this->db->insert("\142\x75\153\165\137\151\156\x64\165\x6b", $uid);
            goto W3uDa;
            W3uDa:
            OSq3x:
            goto lki_D;
            lki_D:
            mW7PE:
            goto bHT4g;
            jT6FV:
            if (!($check->get()->num_rows() == 0)) {
                goto OSq3x;
            }
            goto b_BJm;
            DdlEm:
            $check = $this->db->select("\151\144\x5f\163\151\x73\167\x61")->from("\142\x75\153\x75\137\151\x6e\144\x75\x6b")->where("\151\144\137\x73\151\x73\167\141", $uid->id_siswa);
            goto jT6FV;
            bHT4g:
        }
        goto ZTfVR;
        S3K39:
        foreach ($input as $key1 => $val1) {
            goto bU6Kf;
            bU6Kf:
            $data = [];
            goto Xr1Sy;
            dI4K2:
            QyIAQ:
            goto SxAaN;
            SxAaN:
            $data["\x66\157\164\x6f"] = "\165\160\154\157\x61\x64\163\57\x66\x6f\164\157\x5f\x73\151\x73\167\141\x2f" . $data["\156\x69\x73"] . "\x2e\152\x70\x67";
            goto vsfg5;
            v8J6U:
            $save = $this->db->insert("\x6d\x61\x73\x74\145\162\137\163\x69\x73\x77\x61", $data);
            goto SlHN7;
            Xr1Sy:
            foreach (((array) $input)[$key1] as $key => $val) {
                goto Np18G;
                Np18G:
                if ($key == "\x73\x74\141\164\x75\x73\x5f\x6b\145\154\165\x61\162\147\141" && $val == null) {
                    goto NK6sl;
                }
                goto WHp4Q;
                jJtPr:
                IYMNM:
                goto q3KyF;
                q3KyF:
                rb1uX:
                goto rChws;
                cER6c:
                NK6sl:
                goto KayNK;
                WHp4Q:
                $data[$key] = $val;
                goto ldFOh;
                ldFOh:
                goto IYMNM;
                goto cER6c;
                KayNK:
                $data[$key] = "\61";
                goto jJtPr;
                rChws:
            }
            goto dI4K2;
            vsfg5:
            $this->db->set("\165\151\144", "\x55\125\x49\104\50\51", FALSE);
            goto v8J6U;
            SlHN7:
            qcQFr:
            goto rhd4w;
            rhd4w:
        }
        goto JrgOO;
        Ic_Bc:
        $uids = $this->db->select("\x69\144\137\x73\x69\x73\x77\x61\54\40\x75\151\144")->from("\x6d\141\163\164\145\162\137\163\x69\163\x77\x61")->get()->result();
        goto mHKvq;
        UGOyb:
        $input = json_decode($this->input->post("\x73\x69\x73\167\x61", true));
        goto bllgA;
        ZTfVR:
        dnZSm:
        goto UkIMH;
        UkIMH:
        $this->db->trans_complete();
        goto VH0KG;
        edLOE:
    }
    public function update()
    {
        goto vDaz4;
        P62ww:
        $data["\160\162\157\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto nnbN0;
        nnbN0:
        $data["\164\x69\x70\145"] = "\165\160\x64\x61\164\145";
        goto Icjml;
        IOdGv:
        $data = ["\165\x73\145\162" => $user, "\x6a\x75\144\x75\154" => "\125\160\x64\141\x74\x65\x20\x44\x61\x74\x61\40\123\151\x73\x77\x61", "\x73\x75\x62\x6a\165\144\165\154" => "\125\160\x64\x61\164\x65\40\x44\x61\x74\141\x20\x53\x69\x73\167\x61", "\163\x65\x74\164\151\156\x67" => $this->dashboard->getSetting()];
        goto LJ5Od;
        rHZUR:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto P62ww;
        CSmGF:
        $this->load->view("\155\x61\x73\x74\145\x72\x2f\163\x69\163\x77\x61\57\165\x70\144\x61\x74\145");
        goto JEz9v;
        JEz9v:
        $this->load->view("\137\164\145\x6d\x70\x6c\x61\x74\x65\x73\57\x64\x61\x73\150\142\157\x61\x72\x64\57\x5f\x66\157\157\164\x65\162");
        goto L2OGC;
        Yjy39:
        $data["\x73\155\164\137\x61\143\164\x69\x76\x65"] = $smt;
        goto HU1iS;
        WCyXz:
        $this->load->view("\137\x74\x65\x6d\160\x6c\x61\x74\x65\163\x2f\144\x61\163\x68\142\x6f\x61\162\144\57\137\150\x65\141\x64\145\162", $data);
        goto CSmGF;
        vDaz4:
        $user = $this->ion_auth->user()->row();
        goto IOdGv;
        amtXx:
        $data["\164\160\137\141\143\x74\151\166\145"] = $tp;
        goto Yjy39;
        LJ5Od:
        $tp = $this->dashboard->getTahunActive();
        goto g_c0p;
        Icjml:
        $data["\x6b\145\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto WCyXz;
        HU1iS:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto rHZUR;
        g_c0p:
        $smt = $this->dashboard->getSemesterActive();
        goto amtXx;
        L2OGC:
    }
    public function downloadData($id_kelas)
    {
        goto uDPZA;
        QCGf6:
        $siswa = $siswas[$i];
        goto w5DER;
        b0S45:
        $pendidikan_ayah[] = $siswa->pendidikan_ayah;
        goto kSNlm;
        w5d6w:
        $jk[] = $siswa->jenis_kelamin;
        goto vyJVs;
        CNsTV:
        $rw = [];
        goto zD6TV;
        YbbGp:
        $nis[] = "\47" . $siswa->nis;
        goto LXGXt;
        AEWSP:
        $tlp_wali = [];
        goto E4jRC;
        bk7wi:
        bi0A8:
        goto llUyt;
        lQ5iL:
        $kode_pos = [];
        goto y0e4d;
        w85tr:
        $pekerjaan_ibu = [];
        goto XS39F;
        B4vsp:
        $tgl_lahir = [];
        goto zTZSC;
        kSNlm:
        $pekerjaan_ayah[] = $siswa->pekerjaan_ayah;
        goto rWX9l;
        DkGYc:
        $nisn = [];
        goto hfzMn;
        onxll:
        $pendidikan_wali = [];
        goto aiUbl;
        aiUbl:
        $pekerjaan_wali = [];
        goto AEWSP;
        PW0Mk:
        $siswas = $this->master->getSiswaByKelas($tp->id_tp, $smt->id_smt, $id_kelas);
        goto NGhN4;
        GzsbV:
        $pendidikan_ibu = [];
        goto w85tr;
        gqesB:
        $alamat_siswa = [];
        goto bKmET;
        Cfulb:
        $smt = $this->master->getSemesterActive();
        goto ytuad;
        w5DER:
        $no[] = $i + 1;
        goto hc_Ds;
        FCORo:
        $fileName = "\104\x61\x74\x61\x20\x53\x69\163\167\141\40\113\145\154\x61\163\40" . $kelas->nama_kelas . "\56\x78\154\163\x78";
        goto xJeLn;
        AlPH_:
        nJQ9e:
        goto RLWbn;
        OQQax:
        $tlp_siswa[] = "\x27" . $siswa->hp;
        goto ya_DU;
        XS39F:
        $tlp_ibu = [];
        goto BbxRI;
        Y1R4V:
        $tlp_ibu[] = "\47" . $siswa->nohp_ibu;
        goto K1Px7;
        O44MC:
        $pekerjaan_ayah = [];
        goto gWoOy;
        FjRYR:
        $nama_ibu[] = $siswa->nama_ibu;
        goto Mus8A;
        xJeLn:
        $no = [];
        goto OYP70;
        E4jRC:
        $alamat_wali = [];
        goto bjtRv;
        Xvryc:
        $pendidikan_ibu[] = $siswa->pendidikan_ibu;
        goto hQIZy;
        RLWbn:
        $params = ["\x5b\151\x64\135" => $ids, "\133\x6e\x6f\135" => $no, "\133\x6e\151\163\x5d" => $nis, "\x5b\156\151\x73\156\135" => $nisn, "\x5b\156\141\x6d\141\x5d" => $nama, "\133\x6a\153\135" => $jk, "\x5b\165\163\145\162\156\x61\x6d\145\135" => $username, "\133\x70\x61\x73\x73\x77\x6f\162\144\x5d" => $password, "\x5b\153\145\154\x61\163\137\141\167\141\x6c\135" => $kelas_awal, "\133\x74\x67\154\137\x64\x69\164\x65\162\151\x6d\141\x5d" => $tgl_diterima, "\x5b\163\x65\153\x6f\154\x61\150\137\x61\163\x61\154\135" => $sekolah_asal, "\x5b\x74\x65\155\x70\141\164\137\x6c\141\x68\151\162\135" => $tempat_lahir, "\133\164\x67\x6c\137\x6c\x61\150\151\162\135" => $tgl_lahir, "\x5b\141\147\x61\x6d\141\x5d" => $agama, "\133\164\x6c\160\137\x73\x69\163\x77\x61\135" => $tlp_siswa, "\x5b\x65\x6d\x61\x69\154\x5d" => $email, "\x5b\x61\156\x61\x6b\137\153\145\x5d" => $anak_ke, "\x5b\163\164\141\x74\x75\x73\137\153\145\x6c\165\x61\162\147\141\x5d" => $status_keluarga, "\x5b\141\154\x61\x6d\141\x74\x5f\x73\x69\x73\167\141\135" => $alamat_siswa, "\133\x72\164\x5d" => $rt, "\133\x72\167\x5d" => $rw, "\x5b\153\145\154\135" => $kel, "\x5b\153\145\x63\135" => $kec, "\133\x6b\141\142\x5d" => $kab, "\x5b\160\162\157\x76\135" => $prov, "\133\153\x6f\x64\x65\137\160\x6f\163\135" => $kode_pos, "\x5b\x6e\141\x6d\141\137\x61\x79\141\150\135" => $nama_ayah, "\133\164\147\x6c\x5f\154\x61\150\151\x72\x5f\x61\171\141\x68\135" => $tgl_lahir_ayah, "\x5b\160\x65\x6e\144\151\x64\151\153\141\x6e\x5f\x61\171\141\150\135" => $pendidikan_ayah, "\x5b\x70\145\x6b\x65\162\x6a\x61\141\x6e\x5f\141\171\x61\x68\135" => $pekerjaan_ayah, "\133\164\x6c\160\x5f\141\171\x61\x68\135" => $tlp_ayah, "\133\141\x6c\141\x6d\141\x74\x5f\141\x79\141\150\x5d" => $alamat_ayah, "\133\156\x61\x6d\x61\x5f\x69\142\165\135" => $nama_ibu, "\x5b\x74\x67\154\137\x6c\x61\150\151\x72\137\151\x62\x75\135" => $tgl_lahir_ibu, "\x5b\160\145\x6e\144\x69\144\x69\153\141\x6e\137\x69\x62\165\135" => $pendidikan_ibu, "\133\x70\x65\x6b\x65\162\x6a\x61\141\156\137\x69\142\165\x5d" => $pekerjaan_ibu, "\133\x74\154\x70\x5f\151\142\165\135" => $tlp_ibu, "\x5b\141\x6c\141\155\141\x74\x5f\x69\142\x75\135" => $alamat_ibu, "\x5b\156\x61\x6d\x61\x5f\167\x61\154\151\135" => $nama_wali, "\133\164\x67\x6c\137\154\141\x68\x69\x72\x5f\167\x61\x6c\x69\135" => $tgl_lahir_wali, "\133\160\145\156\x64\151\144\x69\153\141\x6e\137\167\141\x6c\x69\135" => $pendidikan_wali, "\x5b\x70\145\153\145\x72\x6a\x61\x61\156\x5f\167\141\154\151\135" => $pekerjaan_wali, "\133\164\154\x70\137\x77\x61\154\151\135" => $tlp_wali, "\133\141\x6c\x61\155\x61\x74\x5f\x77\141\x6c\x69\135" => $alamat_wali];
        goto F1JOz;
        kW7BN:
        $password = [];
        goto YgSf_;
        zyRXz:
        $sekolah_asal[] = $siswa->sekolah_asal;
        goto pG78G;
        hfzMn:
        $nama = [];
        goto Ek68w;
        Yo2F6:
        $nama_wali = [];
        goto xxKD9;
        KQAL3:
        $alamat_wali[] = $siswa->alamat_wali;
        goto bk7wi;
        rpcrE:
        $status_keluarga = [];
        goto gqesB;
        haD0K:
        $tgl_lahir_ayah[] = $siswa->tgl_lahir_ayah;
        goto b0S45;
        qotnV:
        $tgl_diterima = [];
        goto NLpaC;
        JiDkt:
        $tgl_lahir_ayah = [];
        goto XJGy6;
        WCBhO:
        $tgl_lahir_ibu = [];
        goto GzsbV;
        zD6TV:
        $kel = [];
        goto XsFXU;
        uXPcm:
        $username = [];
        goto kW7BN;
        bKmET:
        $rt = [];
        goto CNsTV;
        hTrlO:
        $kel[] = $siswa->kelurahan;
        goto HvgL7;
        zTZSC:
        $agama = [];
        goto FSP_8;
        vyJVs:
        $username[] = $siswa->username;
        goto Mne78;
        HvgL7:
        $kec[] = $siswa->kecamatan;
        goto Jo8Ww;
        pG78G:
        $tempat_lahir[] = $siswa->tempat_lahir;
        goto dlY4D;
        BCMQv:
        $alamat_ayah[] = $siswa->alamat_ayah;
        goto FjRYR;
        hc_Ds:
        $ids[] = $siswa->id_siswa;
        goto YbbGp;
        wjhNm:
        $anak_ke = [];
        goto rpcrE;
        hQIZy:
        $pekerjaan_ibu[] = $siswa->pekerjaan_ibu;
        goto Y1R4V;
        XsFXU:
        $kec = [];
        goto gmT3_;
        DoMvh:
        KlF5T:
        goto y_alC;
        d8rhI:
        $rw[] = $siswa->rw;
        goto hTrlO;
        Mus8A:
        $tgl_lahir_ibu[] = $siswa->tgl_lahir_ibu;
        goto Xvryc;
        Jo8Ww:
        $kab[] = $siswa->kabupaten;
        goto rlRgw;
        ya_DU:
        $anak_ke[] = $siswa->anak_ke;
        goto OYFdi;
        y0e4d:
        $nama_ayah = [];
        goto JiDkt;
        eeW2c:
        $email[] = $siswa->email;
        goto w5d6w;
        ZndRn:
        $kode_pos[] = $siswa->kode_pos;
        goto GePns;
        mS7d5:
        $tempat_lahir = [];
        goto B4vsp;
        AlgGC:
        $rt[] = $siswa->rt;
        goto d8rhI;
        XJGy6:
        $pendidikan_ayah = [];
        goto O44MC;
        YgSf_:
        $kelas_awal = [];
        goto qotnV;
        fOUKC:
        $alamat_siswa[] = $siswa->alamat;
        goto AlgGC;
        ZTB__:
        $pekerjaan_wali[] = $siswa->pekerjaan_wali;
        goto R6gOT;
        gWoOy:
        $tlp_ayah = [];
        goto n2LAw;
        OYFdi:
        $status_keluarga[] = $siswa->status_keluarga;
        goto fOUKC;
        F1JOz:
        PhpExcelTemplator::outputToFile($template, $fileName, $params);
        goto aMEVQ;
        uDPZA:
        $tp = $this->master->getTahunActive();
        goto Cfulb;
        QcnfP:
        $nama_wali[] = $siswa->nama_wali;
        goto Gb92s;
        xxKD9:
        $tgl_lahir_wali = [];
        goto onxll;
        NGhN4:
        $template = "\x2e\x2f\x75\160\154\x6f\x61\x64\x73\57\151\155\x70\x6f\x72\x74\57\x66\157\x72\x6d\x61\164\x2f\146\x6f\162\155\141\x74\137\x75\160\x64\x61\x74\x65\x5f\x73\x69\163\167\141\56\170\x6c\x73\x78";
        goto FCORo;
        rWX9l:
        $tlp_ayah[] = "\47" . $siswa->nohp_ayah;
        goto BCMQv;
        R6gOT:
        $tlp_wali[] = "\47" . $siswa->nohp_wali;
        goto KQAL3;
        y_alC:
        if (!($i < count($siswas))) {
            goto nJQ9e;
        }
        goto QCGf6;
        ytuad:
        $kelas = $this->master->getKelasById($id_kelas);
        goto PW0Mk;
        Wmu6i:
        $tgl_diterima[] = $siswa->tahun_masuk;
        goto zyRXz;
        Ek68w:
        $jk = [];
        goto uXPcm;
        ek7Me:
        $email = [];
        goto wjhNm;
        R8khv:
        $nama_ibu = [];
        goto WCBhO;
        GePns:
        $nama_ayah[] = $siswa->nama_ayah;
        goto haD0K;
        LXGXt:
        $nisn[] = "\47" . $siswa->nisn;
        goto d2AF9;
        NLpaC:
        $sekolah_asal = [];
        goto mS7d5;
        bjtRv:
        $i = 0;
        goto DoMvh;
        n2LAw:
        $alamat_ayah = [];
        goto R8khv;
        BbxRI:
        $alamat_ibu = [];
        goto Yo2F6;
        Mne78:
        $password[] = $siswa->password;
        goto WYJJI;
        rlRgw:
        $prov[] = $siswa->provinsi;
        goto ZndRn;
        UXF9s:
        $nis = [];
        goto DkGYc;
        UpGVE:
        goto KlF5T;
        goto AlPH_;
        BNkrE:
        $prov = [];
        goto lQ5iL;
        gmT3_:
        $kab = [];
        goto BNkrE;
        FSP_8:
        $tlp_siswa = [];
        goto ek7Me;
        dlY4D:
        $tgl_lahir[] = $siswa->tanggal_lahir;
        goto GKkdc;
        llUyt:
        $i++;
        goto UpGVE;
        PWtOy:
        $pendidikan_wali[] = $siswa->pendidikan_wali;
        goto ZTB__;
        WYJJI:
        $kelas_awal[] = $siswa->kelas_awal;
        goto Wmu6i;
        Gb92s:
        $tgl_lahir_wali[] = $siswa->tgl_lahir_wali;
        goto PWtOy;
        OYP70:
        $ids = [];
        goto UXF9s;
        GKkdc:
        $agama[] = $siswa->agama;
        goto OQQax;
        K1Px7:
        $alamat_ibu[] = $siswa->alamat_ibu;
        goto QcnfP;
        d2AF9:
        $nama[] = $siswa->nama;
        goto eeW2c;
        aMEVQ:
    }
    public function updateAll()
    {
        goto WQe3x;
        XSRiw:
        $this->db->trans_start();
        goto eW_P0;
        ctX0k:
        $this->db->trans_complete();
        goto TfArz;
        TfArz:
        $this->output_json($save);
        goto YOsYY;
        WQe3x:
        $input = json_decode($this->input->post("\163\151\x73\x77\x61", true));
        goto XSRiw;
        as5c4:
        zE0mK:
        goto ctX0k;
        eW_P0:
        foreach ($input as $key1 => $val1) {
            goto a32BK;
            MAg_r:
            $id_siswa = "\60";
            goto BYk0G;
            dgvXo:
            $save = $this->db->update("\155\x61\x73\164\145\x72\137\x73\x69\163\167\x61", $data, array("\151\144\x5f\x73\151\163\x77\141" => $id_siswa));
            goto YJtgT;
            SuRtn:
            JaAWR:
            goto dgvXo;
            maC37:
            $kid = "\x69\x64\137\163\x69\163\x77\141";
            goto MAg_r;
            BYk0G:
            foreach (((array) $input)[$key1] as $key => $val) {
                goto CJQWK;
                C9Jyd:
                $data["\x66\x6f\x74\157"] = "\x75\x70\154\157\141\144\x73\57\146\157\x74\157\x5f\163\x69\x73\x77\141\x2f" . $val . "\x2e\x6a\x70\147";
                goto tv40b;
                CJQWK:
                if ($key == $kid) {
                    goto f38dY;
                }
                goto zmz00;
                o4hRE:
                $id_siswa = $val;
                goto qdZRn;
                P4h1z:
                goto qPbIc;
                goto yMjwL;
                zmz00:
                $data[$key] = $val;
                goto napSI;
                yMjwL:
                f38dY:
                goto o4hRE;
                qdZRn:
                qPbIc:
                goto WfHsL;
                WfHsL:
                SWKkE:
                goto QpO_o;
                tv40b:
                k6udb:
                goto P4h1z;
                napSI:
                if (!($key == "\156\x69\x73")) {
                    goto k6udb;
                }
                goto C9Jyd;
                QpO_o:
            }
            goto SuRtn;
            YJtgT:
            DdnqN:
            goto fdkTD;
            a32BK:
            $data = [];
            goto maC37;
            fdkTD:
        }
        goto as5c4;
        YOsYY:
    }
    public function previewExcelNis()
    {
        goto vY75m;
        GP5VL:
        $this->upload->initialize($config);
        goto lUU41;
        y9X2l:
        $data = [];
        goto JPRoY;
        K_Fed:
        QRDqz:
        goto esTSK;
        vx3x5:
        $data[] = ["\x6e\151\163\x6e" => str_replace("\x27", '', $sheetData[$i][1]), "\x6e\x69\x73" => str_replace("\47", '', $sheetData[$i][2])];
        goto zDrHw;
        YXDPZ:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto y9X2l;
        VIRnT:
        if (!($i < count($sheetData))) {
            goto yPDH9;
        }
        goto H5JHR;
        OHpvy:
        goto R71rK;
        goto K_Fed;
        ISwO9:
        goto xz_L7;
        goto lxC30;
        k4E39:
        $config["\x6d\x61\170\x5f\163\151\x7a\x65"] = 2048;
        goto lJY3x;
        v2b3O:
        unlink($file);
        goto fu3b6;
        fl8Ma:
        $ext = $this->upload->data("\x66\x69\154\x65\137\145\x78\164");
        goto Q8d9P;
        fu3b6:
        echo json_encode($data);
        goto OHpvy;
        esTSK:
        $error = $this->upload->display_errors();
        goto CiqJD;
        H5JHR:
        if (!($sheetData[$i][0] != null)) {
            goto gAZI0;
        }
        goto vx3x5;
        vu7CI:
        xz_L7:
        goto VIRnT;
        M38gp:
        tqpJl:
        goto wTmK3;
        uI_AX:
        $file = $this->upload->data("\x66\165\154\154\x5f\x70\x61\x74\150");
        goto fl8Ma;
        lxC30:
        yPDH9:
        goto v2b3O;
        vY75m:
        $config["\165\160\x6c\157\x61\x64\x5f\x70\x61\164\150"] = "\56\57\165\160\x6c\x6f\x61\144\163\57\151\155\160\157\162\164\57";
        goto nsUBt;
        JPRoY:
        $i = 1;
        goto vu7CI;
        jgS32:
        $i++;
        goto ISwO9;
        Y18hV:
        SYVQB:
        goto jgS32;
        nsUBt:
        $config["\x61\x6c\154\x6f\x77\145\144\x5f\x74\x79\160\x65\x73"] = "\170\x6c\163\174\170\x6c\x73\170\x7c\143\x73\166";
        goto k4E39;
        Q8d9P:
        switch ($ext) {
            case "\x2e\x78\x6c\163\x78":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto tqpJl;
            case "\56\170\154\x73":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto tqpJl;
            case "\x2e\x63\x73\x76":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto tqpJl;
            default:
                echo "\165\x6e\x6b\x6e\157\167\x6e\x20\x66\151\154\145\40\x65\x78\164";
                die;
        }
        goto dxky6;
        lJY3x:
        $config["\x65\156\143\x72\x79\160\x74\137\x6e\x61\155\x65"] = true;
        goto GP5VL;
        JlK9V:
        R71rK:
        goto v0qMK;
        CiqJD:
        echo $error;
        goto FNHUs;
        lUU41:
        if (!$this->upload->do_upload("\165\160\154\157\x61\144\x5f\x66\151\154\145")) {
            goto QRDqz;
        }
        goto uI_AX;
        FNHUs:
        die;
        goto JlK9V;
        wTmK3:
        $spreadsheet = $reader->load($file);
        goto YXDPZ;
        zDrHw:
        gAZI0:
        goto Y18hV;
        dxky6:
        YQNXp:
        goto M38gp;
        v0qMK:
    }
    public function updateNisByNisn()
    {
        goto uevN_;
        ufM0r:
        IujCi:
        goto YPKN_;
        twTkj:
        foreach ($input as $val) {
            goto t6vtb;
            ierHF:
            $save = $this->db->update("\155\x61\163\x74\x65\162\137\x73\151\x73\167\x61");
            goto NWKrI;
            t6vtb:
            $this->db->set("\156\x69\x73", trim($val->nis));
            goto lfprX;
            NWKrI:
            ifdW8:
            goto U6VGQ;
            lfprX:
            $this->db->where("\156\x69\163\156", trim($val->nisn));
            goto ierHF;
            U6VGQ:
        }
        goto ufM0r;
        uevN_:
        $input = json_decode($this->input->post("\x73\x69\x73\x77\141", true));
        goto twTkj;
        UB8iJ:
        $this->output_json($save);
        goto clfc1;
        YPKN_:
        $this->db->trans_complete();
        goto UB8iJ;
        clfc1:
    }
    public function editLogin()
    {
        goto WgSFJ;
        LWsDL:
        $last_name = end($nama);
        goto AFUdL;
        y6V0m:
        $additional_data = ["\146\151\x72\x73\x74\137\156\x61\x6d\145" => $first_name, "\x6c\141\163\164\137\156\x61\155\x65" => $last_name];
        goto yPsYM;
        YSzb7:
        xTJvj:
        goto qMyoo;
        nnspb:
        YbzoA:
        goto cTDvw;
        mXZuB:
        $deleted = $this->ion_auth->delete_user($user_siswa->id);
        goto VT5SH;
        oq9vA:
        $email = $siswa->nis . "\x40\163\151\x73\167\x61\x2e\143\x6f\x6d";
        goto y6V0m;
        sqS8Z:
        $siswa = $this->db->get_where("\155\x61\163\x74\x65\162\x5f\x73\151\x73\167\x61", "\151\144\137\x73\x69\x73\x77\x61\75\x22" . $id_siswa . "\42")->row();
        goto mJ0Tc;
        tqdu5:
        if ($siswa_lain && $siswa_lain->id_siswa != $id_siswa) {
            goto xTJvj;
        }
        goto CY9aK;
        U5_Hz:
        $data["\164\145\x78\x74"] = $msg;
        goto n8Wb0;
        AFUdL:
        $username = trim($username);
        goto F3rPD;
        mJ0Tc:
        $nama = explode("\x20", $siswa->nama);
        goto tNher;
        bpO40:
        $this->db->set("\x70\141\163\x73\167\157\162\144", $password);
        goto MMiDu;
        EMQgw:
        c3xJd:
        goto NtvJ4;
        ziWzQ:
        abMf9:
        goto oKHl0;
        ytkXP:
        $this->output_json($data);
        goto HOpR4;
        ZSVFN:
        $deleted = true;
        goto Z7Oj0;
        TtXe7:
        $username = $this->input->post("\165\x73\145\x72\x6e\141\155\x65", true);
        goto SQgpd;
        qMyoo:
        $data = ["\163\164\141\164\165\x73" => false, "\145\162\162\x6f\x72\163" => ["\165\163\145\x72\156\x61\x6d\x65" => "\125\163\145\x72\x6e\141\x6d\145\x20\x73\x75\x64\x61\x68\40\144\151\147\x75\156\141\153\x61\x6e"]];
        goto U2JOA;
        n8Wb0:
        goto QjUIA;
        goto YSzb7;
        aZa8s:
        QjUIA:
        goto ytkXP;
        tNher:
        $first_name = $nama[0];
        goto LWsDL;
        SQgpd:
        $pass = $this->input->post("\x6e\x65\167", true);
        goto G1oiL;
        WgSFJ:
        $id_siswa = $this->input->post("\151\x64\x5f\x73\x69\x73\167\141", true);
        goto TtXe7;
        A9NwO:
        $user_siswa = $this->db->get_where("\165\163\145\x72\x73", "\x65\155\141\x69\154\x3d\x22" . $email . "\42")->row();
        goto ZSVFN;
        G56A8:
        $smt = $this->master->getSemesterActive();
        goto lIy4q;
        Z7Oj0:
        if (!($user_siswa != null)) {
            goto YqAb0;
        }
        goto mXZuB;
        yPsYM:
        $group = array("\63");
        goto A9NwO;
        TbN9T:
        $this->form_validation->set_rules("\x6f\x6c\x64", $this->lang->line("\x63\x68\141\156\x67\145\137\x70\x61\163\163\x77\157\x72\144\137\166\x61\154\x69\x64\141\164\151\x6f\156\x5f\x6f\x6c\144\x5f\x70\141\163\163\167\x6f\162\144\x5f\x6c\x61\x62\x65\x6c"), "\x72\x65\161\x75\x69\162\x65\x64");
        goto rR3gh;
        U2JOA:
        goto QjUIA;
        goto ziWzQ;
        HbmEa:
        $status = false;
        goto nH9XE;
        F3rPD:
        $password = trim($pass);
        goto oq9vA;
        peofs:
        $status = $this->db->update("\155\141\163\x74\x65\162\x5f\163\x69\163\167\x61");
        goto iEdJX;
        NtvJ4:
        $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto DGDP7;
        G1oiL:
        $tp = $this->master->getTahunActive();
        goto G56A8;
        VT5SH:
        YqAb0:
        goto Asz9z;
        MMiDu:
        $this->db->where("\151\x64\137\163\x69\163\167\x61", $id_siswa);
        goto peofs;
        CY9aK:
        if ($this->form_validation->run() === FALSE) {
            goto abMf9;
        }
        goto sqS8Z;
        lIy4q:
        $siswa_lain = $this->dashboard->getDataSiswa($username, $tp->id_tp, $smt->id_smt);
        goto TbN9T;
        cTDvw:
        $data["\x73\x74\x61\164\x75\x73"] = $status;
        goto U5_Hz;
        rR3gh:
        $this->form_validation->set_rules("\x6e\x65\167", $this->lang->line("\143\150\141\x6e\x67\145\137\160\141\163\x73\x77\x6f\x72\144\x5f\x76\x61\154\151\144\141\x74\x69\157\156\x5f\x6e\x65\x77\x5f\160\141\163\x73\167\x6f\162\144\137\154\x61\x62\145\x6c"), "\x72\x65\161\x75\151\162\145\144\x7c\155\x69\x6e\137\154\x65\156\147\x74\150\133" . $this->config->item("\155\x69\x6e\x5f\160\141\163\x73\x77\x6f\x72\x64\137\154\145\156\x67\164\150", "\151\x6f\156\x5f\x61\165\164\x68") . "\135\174\x6d\141\x74\143\150\x65\x73\133\156\x65\x77\x5f\143\157\x6e\146\x69\162\155\135");
        goto cX7cg;
        oKHl0:
        $data = ["\x73\x74\141\x74\165\163" => false, "\145\x72\x72\x6f\x72\x73" => ["\x6f\x6c\144" => form_error("\157\154\144"), "\156\145\x77" => form_error("\156\x65\x77"), "\x6e\x65\167\x5f\x63\157\156\146\x69\162\x6d" => form_error("\156\x65\x77\x5f\x63\x6f\x6e\x66\151\162\x6d")]];
        goto aZa8s;
        cX7cg:
        $this->form_validation->set_rules("\156\x65\x77\x5f\143\x6f\x6e\146\151\x72\x6d", $this->lang->line("\x63\x68\141\156\x67\145\137\x70\x61\x73\x73\167\157\x72\x64\x5f\166\141\x6c\151\144\141\164\x69\x6f\156\x5f\x6e\145\x77\137\160\x61\163\x73\167\x6f\x72\x64\x5f\x63\x6f\156\146\151\162\x6d\x5f\x6c\x61\142\145\154"), "\162\x65\x71\x75\x69\162\145\x64");
        goto tqdu5;
        iEdJX:
        $msg = !$status ? "\107\141\x67\141\x6c\40\155\145\156\x67\x67\141\156\x74\151\40\165\163\x65\162\x6e\141\155\145\57\160\x61\x73\x73\x73\167\157\162\144\56" : "\142\145\162\150\141\163\151\x6c\40\155\145\156\147\x67\x61\156\x74\151\40\x75\x73\145\162\156\141\x6d\x65\57\160\141\x73\163\x73\167\157\162\144\56";
        goto nnspb;
        DGDP7:
        $this->db->set("\x75\x73\145\x72\x6e\x61\x6d\145", $username);
        goto bpO40;
        nH9XE:
        $msg = "\107\141\147\x61\x6c\40\x6d\145\x6e\x67\147\x61\x6e\x74\x69\40\x75\163\145\162\156\x61\155\145\57\x70\x61\163\x73\x73\167\x6f\162\x64\x2e";
        goto wYkoH;
        Asz9z:
        if ($deleted) {
            goto c3xJd;
        }
        goto HbmEa;
        wYkoH:
        goto YbzoA;
        goto EMQgw;
        HOpR4:
    }
    private function registerSiswa($username, $password, $email, $additional_data, $group)
    {
        goto FuP6m;
        dTmpi:
        $data["\151\x64"] = $reg;
        goto rzKjo;
        zi2b0:
        $data["\x73\x74\141\164\165\x73"] = true;
        goto dTmpi;
        A9cdx:
        return $data;
        goto QPF1N;
        FuP6m:
        $reg = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto zi2b0;
        A_5uX:
        $data["\163\164\x61\x74\x75\x73"] = false;
        goto FZojt;
        rzKjo:
        if (!($reg == false)) {
            goto k1OY2;
        }
        goto A_5uX;
        FZojt:
        k1OY2:
        goto A9cdx;
        QPF1N:
    }
}
