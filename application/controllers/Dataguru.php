<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\x41\x53\x45\120\x41\x54\x48") or exit("\116\157\x20\x64\x69\x72\145\143\164\x20\x73\143\162\x69\160\164\40\141\143\x63\145\163\x73\x20\x61\x6c\154\x6f\167\145\144");
class Dataguru extends CI_Controller
{
    public function __construct()
    {
        goto aLKDX;
        GiGKj:
        $this->load->model("\x44\162\157\x70\x64\x6f\x77\156\x5f\x6d\x6f\144\x65\154", "\x64\x72\157\x70\x64\157\167\x6e");
        goto Nibui;
        Z7uLt:
        show_error("\x48\141\x6e\x79\141\x20\101\144\x6d\151\156\151\x73\164\162\x61\164\x6f\x72\40\x79\141\x6e\x67\40\144\x69\142\145\x72\x69\40\150\141\x6b\40\x75\156\164\165\x6b\40\x6d\x65\x6e\147\x61\x6b\x73\x65\x73\x20\x68\x61\154\141\155\141\x6e\x20\x69\156\151\54\x20\x3c\x61\x20\150\162\145\x66\x3d\42" . base_url("\x64\141\163\x68\x62\x6f\x61\162\x64") . "\42\76\113\x65\x6d\142\x61\x6c\151\x20\153\145\40\155\x65\x6e\165\x20\x61\167\x61\154\x3c\57\141\76", 403, "\101\x6b\x73\145\x73\x20\x54\145\162\x6c\x61\162\141\x6e\x67");
        goto Bf8l_;
        Bf8l_:
        phBtM:
        goto NHk0v;
        aLKDX:
        parent::__construct();
        goto NLvlq;
        flIa9:
        $this->load->model("\x55\163\x65\x72\x73\x5f\x6d\157\x64\x65\154", "\x75\x73\x65\162\x73");
        goto EOA2x;
        ImM7I:
        m6wKX:
        goto I1T3I;
        MqxDk:
        uWFWO:
        goto XkT7Y;
        I1T3I:
        redirect("\x61\x75\164\150");
        goto MqxDk;
        WJNjX:
        if ($this->ion_auth->is_admin()) {
            goto phBtM;
        }
        goto Z7uLt;
        EOA2x:
        $this->load->model("\x4b\x65\154\x61\x73\x5f\x6d\157\x64\145\154", "\x6b\145\154\x61\163");
        goto dhXPg;
        Nibui:
        $this->load->model("\x4d\141\163\x74\x65\162\x5f\x6d\157\x64\145\154", "\155\x61\x73\x74\145\162");
        goto QFhaZ;
        NHk0v:
        goto uWFWO;
        goto ImM7I;
        qFadu:
        $this->form_validation->set_error_delimiters('', '');
        goto FWQY9;
        QFhaZ:
        $this->load->model("\104\141\163\150\142\157\x61\x72\144\x5f\155\x6f\144\145\154", "\x64\x61\x73\150\142\157\x61\162\x64");
        goto flIa9;
        XkT7Y:
        $this->load->library(["\x64\x61\x74\x61\x74\141\142\x6c\145\x73", "\146\157\162\x6d\137\166\x61\x6c\x69\144\x61\x74\151\x6f\156"]);
        goto GiGKj;
        dhXPg:
        $this->load->model("\103\x62\164\137\155\x6f\x64\x65\154", "\x63\142\x74");
        goto qFadu;
        NLvlq:
        if (!$this->ion_auth->logged_in()) {
            goto m6wKX;
        }
        goto WJNjX;
        FWQY9:
    }
    public function output_json($data, $encode = true)
    {
        goto TZCdm;
        TZCdm:
        if (!$encode) {
            goto tT29H;
        }
        goto hlKin;
        q4GtC:
        tT29H:
        goto TFQXW;
        hlKin:
        $data = json_encode($data);
        goto q4GtC;
        TFQXW:
        $this->output->set_content_type("\x61\x70\x70\154\151\143\x61\x74\x69\x6f\156\57\152\163\157\x6e")->set_output($data);
        goto yjmG0;
        yjmG0:
    }
    public function index()
    {
        goto jtIl0;
        mkB2k:
        $smt = $this->dashboard->getSemesterActive();
        goto W50Xe;
        yk986:
        $setting = $this->dashboard->getSetting();
        goto aRijJ;
        HenEw:
        $tp = $this->dashboard->getTahunActive();
        goto mkB2k;
        pOmcZ:
        $this->load->view("\137\x74\x65\155\160\x6c\141\x74\145\163\x2f\x64\x61\163\150\x62\x6f\x61\162\144\57\x5f\x66\157\x6f\164\x65\162");
        goto hTUOy;
        aRijJ:
        $data = ["\165\x73\145\162" => $user, "\152\x75\x64\x75\x6c" => "\x47\165\162\165", "\x73\x75\x62\x6a\x75\144\x75\154" => "\x44\141\x74\141\40\x47\165\x72\165", "\x70\162\x6f\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\164\x69\x6e\x67" => $setting];
        goto HenEw;
        VTW0q:
        $user = $this->ion_auth->user()->row();
        goto yk986;
        V3S_z:
        $data["\164\x70\x5f\141\143\164\151\166\145"] = $tp;
        goto mMu0h;
        W50Xe:
        $data["\155\157\144\145"] = $mode == null ? "\61" : "\x32";
        goto h8_hc;
        YUV02:
        $data["\147\x75\x72\165\x73"] = $this->master->getAllDataGuru($tp->id_tp, $smt->id_smt);
        goto d1o3o;
        L52SL:
        foreach ($mapels as $key => $row) {
            $ret[$row->id_mapel] = $row;
            lNYkx:
        }
        goto P4iwt;
        d1o3o:
        $this->load->view("\137\164\145\x6d\x70\154\x61\x74\145\163\57\144\141\163\150\142\157\x61\162\x64\57\137\150\x65\141\144\145\162", $data);
        goto ZiHjv;
        r_udt:
        $data["\153\145\154\141\x73\x73"] = $this->master->getAllKelas($tp->id_tp, $smt->id_smt);
        goto YUV02;
        jtIl0:
        $mode = $this->input->get("\155\157\144\145", true);
        goto VTW0q;
        mMu0h:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto LIZGz;
        wlNMc:
        Hrc7_:
        goto bI2vK;
        T2Cw3:
        $mapels = $this->master->getAllMapel();
        goto OrbBI;
        efeLf:
        if (!$mapels) {
            goto Hrc7_;
        }
        goto L52SL;
        uA75e:
        $data["\x65\x78\164\162\x61\x73"] = $this->dropdown->getAllKodeEkskul();
        goto r_udt;
        LIZGz:
        $data["\x73\x6d\x74\x5f\141\x63\x74\x69\166\145"] = $smt;
        goto T2Cw3;
        P4iwt:
        h_xsv:
        goto wlNMc;
        h8_hc:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto V3S_z;
        OrbBI:
        $ret = [];
        goto efeLf;
        bI2vK:
        $data["\155\141\x70\x65\x6c\x73"] = $ret;
        goto uA75e;
        ZiHjv:
        $this->load->view("\155\141\x73\164\145\x72\x2f\147\165\162\165\57\144\x61\x74\x61");
        goto pOmcZ;
        hTUOy:
    }
    public function data()
    {
        goto UuiDO;
        EURYx:
        $this->output_json($this->master->getDataGuru($tp->id_tp, $smt->id_smt), false);
        goto kjJb6;
        xl_34:
        $smt = $this->dashboard->getSemesterActive();
        goto EURYx;
        UuiDO:
        $tp = $this->dashboard->getTahunActive();
        goto xl_34;
        kjJb6:
    }
    public function edit($id)
    {
        goto efAkU;
        HIbxa:
        $guru = $this->master->getGuruById($id, $tp->id_tp, $smt->id_smt);
        goto qBioc;
        K0pS6:
        $data["\x73\155\x74\x5f\141\143\164\x69\x76\145"] = $smt;
        goto yi4g_;
        aSmfj:
        $this->load->view("\155\x61\x73\x74\x65\162\57\x67\x75\162\165\x2f\145\x64\151\x74");
        goto SPOvE;
        PM48d:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto TaKha;
        GB3x4:
        $setting = $this->dashboard->getSetting();
        goto misQs;
        DlnYm:
        $data["\x69\x6e\160\165\x74\137\x70\x72\x6f\146\x69\154\145"] = json_decode(json_encode($inputsProfile), FALSE);
        goto OED0Y;
        qBioc:
        $data = ["\165\x73\x65\x72" => $user, "\x6a\165\x64\x75\x6c" => "\105\x64\x69\164\40\107\165\162\165", "\163\x75\x62\152\x75\x64\x75\154" => "\x45\x64\x69\164\40\104\141\x74\x61\x20\107\165\x72\x75", "\155\141\x70\x65\154" => $this->master->getAllMapel(), "\147\165\162\x75" => $guru, "\x70\x72\157\146\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\x74\x69\x6e\147" => $setting];
        goto PM48d;
        krO6x:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto K0pS6;
        efAkU:
        $user = $this->ion_auth->user()->row();
        goto GB3x4;
        SPOvE:
        $this->load->view("\x5f\x74\x65\x6d\x70\154\x61\x74\145\x73\x2f\x64\141\163\x68\x62\157\141\162\x64\x2f\137\146\157\157\164\145\x72");
        goto WUToM;
        misQs:
        $tp = $this->master->getTahunActive();
        goto FQ2ka;
        FQ2ka:
        $smt = $this->master->getSemesterActive();
        goto HIbxa;
        OED0Y:
        $data["\x69\x6e\160\x75\x74\137\x61\x6c\x61\155\141\164"] = json_decode(json_encode($inputsAlamat), FALSE);
        goto LFKn5;
        LFKn5:
        $this->load->view("\x5f\164\x65\x6d\x70\x6c\x61\164\145\163\x2f\x64\x61\163\x68\x62\x6f\x61\x72\x64\57\137\150\145\141\x64\145\x72", $data);
        goto aSmfj;
        TaKha:
        $data["\x74\160\x5f\x61\x63\x74\151\166\x65"] = $tp;
        goto krO6x;
        hif1t:
        $inputsAlamat = [["\x6c\141\x62\145\154" => "\116\x49\x4b", "\156\141\x6d\x65" => "\156\157\137\x6b\164\160", "\166\x61\154\165\x65" => $guru->no_ktp, "\x69\143\x6f\x6e" => "\x66\141\162\40\x66\141\x2d\x69\144\55\x63\141\x72\x64", "\164\x79\x70\x65" => "\x6e\x75\155\142\145\x72"], ["\154\x61\142\x65\154" => "\124\145\155\x70\141\164\40\114\x61\x68\x69\162", "\x6e\141\x6d\x65" => "\164\x65\x6d\160\141\164\137\154\x61\150\151\x72", "\x76\x61\x6c\165\145" => $guru->tempat_lahir, "\151\143\157\156" => "\x66\x61\40\146\x61\x2d\155\141\160\55\155\141\x72\153\145\162", "\x74\x79\160\145" => "\164\145\170\164"], ["\154\141\x62\x65\x6c" => "\124\147\154\x2e\x20\x4c\x61\x68\151\x72", "\156\x61\155\145" => "\164\x67\x6c\x5f\x6c\141\150\151\162", "\x76\x61\154\165\x65" => $guru->tgl_lahir, "\x69\143\x6f\x6e" => "\146\141\x20\x66\141\x2d\143\x61\154\145\x6e\x64\x61\x72", "\164\x79\160\145" => "\164\x65\170\x74"], ["\154\141\142\x65\x6c" => "\101\154\x61\x6d\141\164", "\156\141\x6d\x65" => "\141\x6c\141\x6d\141\164\137\152\141\154\x61\156", "\x76\x61\154\165\x65" => $guru->alamat_jalan, "\x69\143\x6f\x6e" => "\x66\x61\x20\146\x61\55\155\141\x70\55\155\x61\162\x6b\x65\x72", "\x74\x79\160\x65" => "\x74\x65\x78\x74"], ["\x6c\x61\142\145\x6c" => "\x4b\145\x63\141\155\x61\164\141\x6e", "\x6e\x61\x6d\145" => "\153\x65\x63\x61\x6d\x61\x74\141\156", "\166\x61\x6c\165\145" => $guru->kecamatan, "\151\x63\157\x6e" => "\x66\141\x20\146\x61\x2d\x6d\141\x70\x2d\x6d\x61\x72\153\145\x72", "\164\x79\160\x65" => "\x74\x65\170\x74"], ["\154\141\x62\145\154" => "\x4b\157\164\x61\x2f\x4b\x61\142\56", "\156\141\x6d\x65" => "\153\x61\142\x75\160\141\164\x65\x6e", "\x76\x61\x6c\x75\x65" => $guru->kabupaten, "\x69\143\x6f\x6e" => "\146\x61\40\x66\141\55\x6d\x61\160\55\x6d\141\x72\x6b\x65\x72", "\x74\171\160\x65" => "\x74\145\x78\164"], ["\154\141\x62\145\x6c" => "\120\x72\157\166\x69\x6e\163\x69", "\156\141\x6d\145" => "\160\162\157\166\x69\x6e\163\151", "\x76\x61\154\165\x65" => $guru->provinsi, "\151\x63\x6f\x6e" => "\146\x61\x20\146\x61\55\155\x61\x70\x2d\x6d\141\x72\153\145\x72", "\164\x79\160\x65" => "\x74\x65\x78\164"], ["\154\141\x62\x65\x6c" => "\x4b\157\x64\x65\x20\120\157\x73", "\156\x61\155\145" => "\153\157\x64\145\137\x70\x6f\163", "\166\141\x6c\x75\x65" => $guru->kode_pos, "\x69\143\x6f\156" => "\x66\141\40\x66\x61\x2d\145\x6e\x76\x65\x6c\157\160\145", "\164\x79\160\145" => "\156\165\155\x62\145\x72"]];
        goto DlnYm;
        yi4g_:
        $inputsProfile = [["\x6c\141\x62\x65\x6c" => "\116\x61\155\141\40\114\145\156\147\153\x61\x70", "\156\141\x6d\145" => "\156\x61\x6d\x61\x5f\x67\x75\162\x75", "\x76\141\x6c\x75\x65" => $guru->nama_guru, "\x69\143\157\x6e" => "\146\141\x72\40\146\x61\x2d\x75\x73\x65\162", "\x74\171\160\145" => "\164\x65\x78\x74"], ["\x6c\141\x62\x65\154" => "\105\x6d\141\151\154", "\156\141\155\145" => "\x65\x6d\141\151\x6c", "\166\141\x6c\165\145" => $guru->email, "\151\x63\157\156" => "\x66\x61\x72\x20\x66\141\x2d\x65\x6e\166\145\154\x6f\x70\145", "\x74\x79\160\x65" => "\164\x65\x78\164"], ["\x6c\141\142\x65\154" => "\116\111\120\x20\x2f\40\116\x55\x50\124\113", "\156\x61\x6d\x65" => "\x6e\x69\x70", "\x76\x61\x6c\165\x65" => $guru->nip, "\151\143\x6f\x6e" => "\x66\141\162\40\x66\x61\x2d\151\x64\55\143\141\162\144", "\164\x79\x70\145" => "\x6e\165\155\x62\145\162"], ["\x6c\141\x62\145\154" => "\112\x65\156\x69\x73\40\113\145\154\x61\x6d\x69\x6e", "\x6e\141\x6d\x65" => "\152\145\x6e\151\163\137\153\x65\154\x61\x6d\151\156", "\166\x61\154\165\145" => $guru->jenis_kelamin, "\x69\x63\x6f\156" => "\146\141\x73\x20\146\141\55\x76\145\156\x75\x73\55\x6d\141\x72\163", "\x74\171\x70\x65" => "\x74\x65\x78\164"], ["\154\141\142\x65\x6c" => "\x4e\x6f\x2e\x20\x48\x61\156\144\160\x68\157\156\x65", "\x6e\141\155\145" => "\156\x6f\x5f\150\x70", "\166\x61\154\x75\145" => $guru->no_hp, "\151\143\x6f\x6e" => "\146\x61\40\146\x61\55\160\150\x6f\x6e\145", "\x74\x79\x70\x65" => "\156\x75\155\142\x65\162"], ["\x6c\141\x62\145\x6c" => "\101\147\141\155\141", "\156\x61\155\x65" => "\141\x67\141\155\141", "\166\141\x6c\165\x65" => $guru->agama, "\151\143\x6f\x6e" => "\x66\141\162\40\146\x61\x2d\165\163\x65\162", "\164\x79\x70\x65" => "\164\x65\x78\x74"]];
        goto hif1t;
        WUToM:
    }
    public function create()
    {
        goto ODvzB;
        b16ul:
        $u_nip = "\x69\x73\x5f\x75\156\151\x71\165\145\133\x6d\x61\x73\164\145\162\137\x67\165\162\x75\56\x6e\151\x70\135";
        goto zUfuF;
        LhsBA:
        $this->output_json(["\163\x74\x61\164\165\x73" => false]);
        goto N02uY;
        WDLE0:
        $this->form_validation->set_rules("\x75\163\x65\x72\x6e\x61\155\145", "\x55\x73\145\x72\x6e\x61\x6d\x65", "\x72\x65\161\165\151\162\x65\x64\x7c\164\162\151\x6d" . $u_username);
        goto yK9La;
        XUyq8:
        $input = ["\156\151\160" => trim($nip), "\x6e\x61\x6d\141\137\x67\165\x72\165" => trim($nama_guru), "\165\163\x65\162\156\x61\x6d\x65" => trim($username), "\160\141\163\x73\x77\157\162\144" => trim($password), "\x66\157\164\157" => "\165\160\154\x6f\141\144\163\57\x70\x72\157\146\x69\154\145\x73\x2f" . trim($nip) . "\x2e\152\160\147"];
        goto JcLBb;
        OvSCQ:
        wz7lo:
        goto Ze3iz;
        RJe0y:
        H0v8N:
        goto Z3O2p;
        J3UJZ:
        $nama_guru = $this->input->post("\x6e\x61\x6d\141\137\x67\165\162\165", true);
        goto YadlQ;
        LVNZl:
        $this->form_validation->set_rules("\x6e\x61\155\x61\137\147\x75\x72\x75", "\116\141\x6d\x61\40\107\165\162\165", "\162\145\161\165\x69\162\x65\144\174\164\x72\x69\x6d\x7c\x6d\x69\156\137\154\x65\x6e\x67\x74\150\133\x32\135");
        goto WDLE0;
        QXpzp:
        if ($action) {
            goto H0v8N;
        }
        goto LhsBA;
        yK9La:
        $this->form_validation->set_rules("\160\141\163\x73\x77\157\x72\x64", "\120\x61\x73\163\167\x6f\162\144", "\x72\145\x71\x75\151\162\x65\144");
        goto qS1Hx;
        KCnaf:
        $password = $this->input->post("\160\x61\163\163\x77\157\x72\x64", true);
        goto b16ul;
        qS1Hx:
        if ($this->form_validation->run() == FALSE) {
            goto wz7lo;
        }
        goto XUyq8;
        L97RI:
        Rywx5:
        goto fZzGw;
        Z3O2p:
        $this->output_json(["\163\164\x61\164\x75\163" => true]);
        goto lIj0j;
        ahoXv:
        goto Rywx5;
        goto OvSCQ;
        YadlQ:
        $username = $this->input->post("\165\x73\145\162\x6e\x61\x6d\x65", true);
        goto KCnaf;
        YCy4q:
        $this->output_json($data);
        goto L97RI;
        lIj0j:
        LlZih:
        goto ahoXv;
        Ze3iz:
        $data = ["\x73\164\x61\x74\165\163" => false, "\145\162\162\157\x72\x73" => ["\156\x69\160" => form_error("\156\x69\x70"), "\x6e\141\155\x61\137\147\165\162\x75" => form_error("\x6e\x61\x6d\x61\x5f\x67\165\x72\165"), "\x75\x73\145\162\156\141\x6d\x65" => form_error("\165\163\145\x72\156\141\x6d\x65"), "\160\x61\x73\163\x77\157\x72\144" => form_error("\x70\141\163\x73\167\x6f\x72\x64")]];
        goto YCy4q;
        zUfuF:
        $u_username = "\174\151\163\x5f\x75\x6e\x69\161\x75\145\x5b\x6d\141\x73\x74\145\x72\137\147\165\x72\x75\56\x75\x73\145\x72\x6e\x61\x6d\x65\135";
        goto JKJy6;
        ODvzB:
        $nip = $this->input->post("\x6e\x69\160", true);
        goto J3UJZ;
        JKJy6:
        $this->form_validation->set_rules("\x6e\151\x70", "\116\111\120", "\x72\x65\x71\x75\151\162\x65\x64\174\x6e\165\155\145\162\151\x63\174\164\x72\x69\155\x7c" . $u_nip);
        goto LVNZl;
        N02uY:
        goto LlZih;
        goto RJe0y;
        JcLBb:
        $action = $this->master->create("\155\141\163\164\145\162\137\x67\x75\162\165", $input);
        goto QXpzp;
        fZzGw:
    }
    public function save()
    {
        goto mbCBF;
        UdOql:
        goto U7S2O;
        goto xDcju;
        FHcMy:
        $u_email = "\174\x69\x73\137\165\156\x69\x71\x75\145\x5b\x67\165\x72\165\x2e\x65\x6d\141\151\154\x5d";
        goto PcJON;
        Exe9T:
        $this->form_validation->set_rules("\145\x6d\x61\151\154", "\105\x6d\141\151\x6c", "\x72\x65\x71\165\x69\x72\x65\144\174\x74\x72\x69\155\174\166\141\154\x69\x64\137\x65\x6d\141\151\x6c" . $u_email);
        goto jDgav;
        qGyS6:
        $action = $this->master->create("\x6d\x61\163\x74\x65\x72\x5f\x67\165\162\165", $input);
        goto XeAY4;
        vcHO_:
        $mapel = $this->input->post("\x70\x61\163\x73\x77\157\x72\x64", true);
        goto eceNn;
        PcJON:
        HN4Vq:
        goto D8UFN;
        uXRdc:
        if (!($method === "\145\x64\151\164")) {
            goto dLOw3;
        }
        goto E10m3;
        lsYaW:
        $this->output_json(["\163\164\x61\x74\x75\163" => true]);
        goto t46Ya;
        t46Ya:
        qbd5i:
        goto ZSX2y;
        RjmVh:
        hjeBj:
        goto Qa4sB;
        aq19W:
        goto HN4Vq;
        goto Wnki5;
        iqs4L:
        $email = $this->input->post("\145\155\x61\x69\154", true);
        goto vcHO_;
        Wnki5:
        qa6k3:
        goto GIYWt;
        E10m3:
        $action = $this->master->update("\155\141\x73\x74\145\162\x5f\147\x75\162\x75", $input, "\151\144\x5f\147\165\x72\x75", $id_guru);
        goto UGaDt;
        v2Pyw:
        $nip = $this->input->post("\156\151\160", true);
        goto HPQyh;
        ONeXm:
        $dbdata = $this->master->getGuruById($id_guru);
        goto DHxEY;
        XeAY4:
        U7S2O:
        goto OJFik;
        ZSX2y:
        goto ygtfH;
        goto RjmVh;
        D8UFN:
        $this->form_validation->set_rules("\156\151\x70", "\x4e\111\x50", "\162\145\x71\x75\x69\x72\145\144\174\x6e\x75\x6d\145\x72\x69\x63\x7c\164\162\x69\x6d\x7c\155\151\156\x5f\154\x65\x6e\147\x74\x68\x5b\x38\x5d" . $u_nip);
        goto Dpuaq;
        MNwuC:
        ygtfH:
        goto M6QZn;
        ciu7E:
        $this->output_json($data);
        goto MNwuC;
        zIozN:
        $id_guru = $this->input->post("\x69\144\137\x67\x75\x72\165", true);
        goto v2Pyw;
        mbCBF:
        $method = $this->input->post("\x6d\145\164\150\157\x64", true);
        goto zIozN;
        Qa4sB:
        $data = ["\163\164\x61\164\165\x73" => false, "\x65\x72\x72\157\x72\163" => ["\x6e\x69\x70" => form_error("\156\151\x70"), "\156\x61\155\x61\x5f\147\x75\x72\x75" => form_error("\156\x61\x6d\x61\x5f\x67\165\162\165"), "\x65\155\x61\x69\x6c" => form_error("\145\x6d\x61\151\x6c"), "\x6d\141\x70\x65\154" => form_error("\x6d\141\160\145\154")]];
        goto ciu7E;
        HPQyh:
        $nama_guru = $this->input->post("\156\141\155\x61\x5f\x67\x75\x72\x75", true);
        goto iqs4L;
        xDcju:
        ga1Z1:
        goto qGyS6;
        GIYWt:
        $u_nip = "\x7c\x69\163\137\x75\156\151\161\x75\145\x5b\147\x75\162\x75\56\x6e\151\160\x5d";
        goto FHcMy;
        eceNn:
        if ($method == "\x61\x64\144") {
            goto qa6k3;
        }
        goto ONeXm;
        bEEOa:
        kHAhd:
        goto lsYaW;
        So2_U:
        $u_email = $dbdata->email === $email ? '' : "\x7c\x69\x73\x5f\165\156\x69\161\165\145\133\x67\x75\x72\165\x2e\x65\155\141\151\x6c\135";
        goto aq19W;
        Dpuaq:
        $this->form_validation->set_rules("\156\141\155\141\x5f\147\x75\x72\165", "\116\141\155\x61\40\x47\x75\162\165", "\x72\x65\x71\x75\151\x72\x65\144\x7c\x74\x72\x69\155\x7c\x6d\151\156\x5f\x6c\x65\x6e\147\x74\x68\x5b\63\x5d");
        goto Exe9T;
        d80MJ:
        goto qbd5i;
        goto bEEOa;
        jDgav:
        $this->form_validation->set_rules("\155\141\160\x65\x6c", "\115\x61\164\x61\x20\113\x75\154\x69\x61\150", "\x72\x65\161\x75\151\x72\145\x64");
        goto klkb3;
        UGaDt:
        dLOw3:
        goto UdOql;
        OJFik:
        if ($action) {
            goto kHAhd;
        }
        goto sf4et;
        WaVdr:
        $input = ["\x6e\x69\x70" => $nip, "\x6e\141\x6d\141\x5f\x67\165\162\165" => $nama_guru, "\145\155\x61\x69\x6c" => $email, "\155\x61\x70\145\x6c\x5f\x69\x64" => $mapel];
        goto AhT62;
        sf4et:
        $this->output_json(["\x73\164\x61\164\165\163" => false]);
        goto d80MJ;
        DHxEY:
        $u_nip = $dbdata->nip === $nip ? '' : "\x7c\x69\x73\137\165\x6e\151\x71\x75\145\133\147\165\162\165\x2e\x6e\151\160\135";
        goto So2_U;
        klkb3:
        if ($this->form_validation->run() == FALSE) {
            goto hjeBj;
        }
        goto WaVdr;
        AhT62:
        if ($method === "\x61\144\x64") {
            goto ga1Z1;
        }
        goto uXRdc;
        M6QZn:
    }
    public function deleteGuru()
    {
        goto zuaw5;
        Whjz7:
        $tables = [];
        goto nK7d0;
        QC7KI:
        $this->output_json($data);
        goto QbOem;
        QbOem:
        goto K8ap6;
        goto ab7B9;
        QOyuC:
        if (count($messages) > 0) {
            goto TUz7D;
        }
        goto IRJEs;
        oxt8a:
        foreach ($tabless as $table) {
            goto dAMPa;
            dAMPa:
            $fields = $this->db->field_data($table);
            goto LXnWm;
            Fq_jA:
            r4RS5:
            goto xNu6Q;
            LXnWm:
            foreach ($fields as $field) {
                goto CAHOv;
                JMK1N:
                array_push($tables, $table);
                goto kIbZS;
                kIbZS:
                YP3eT:
                goto KyMl1;
                CAHOv:
                if (!($field->name == "\151\x64\137\x67\165\x72\x75" || $field->name == "\147\165\162\165\x5f\x69\x64")) {
                    goto YP3eT;
                }
                goto JMK1N;
                KyMl1:
                pGZNB:
                goto Fv0vl;
                Fv0vl:
            }
            goto Fq_jA;
            xNu6Q:
            lJ_vg:
            goto vuRhn;
            vuRhn:
        }
        goto mvBWF;
        YeR3u:
        K8ap6:
        goto MVVpA;
        ab7B9:
        TUz7D:
        goto wKWu8;
        sbQLy:
        qpVjm:
        goto QOyuC;
        IccSy:
        foreach ($tables as $table) {
            goto l4qHk;
            BcYME:
            array_push($messages, $table);
            goto GQynV;
            Uyi4p:
            peazp:
            goto lgmB9;
            PRFXu:
            $num = $this->db->count_all_results($table);
            goto ptm6b;
            QZNFo:
            a1mV7:
            goto SsFM0;
            SsFM0:
            mwZ14:
            goto Kwpjn;
            cNJMe:
            if (!($num > 0)) {
                goto AIYBe;
            }
            goto BcYME;
            ItWoJ:
            $this->db->where("\x69\144\x5f\x67\x75\x72\x75", $chk);
            goto PRFXu;
            T10wC:
            if ($table == "\155\x61\x73\164\145\x72\137\153\x65\x6c\141\163") {
                goto peazp;
            }
            goto ItWoJ;
            GQynV:
            AIYBe:
            goto QZNFo;
            dJn9m:
            bHBn1:
            goto cNJMe;
            yiSH4:
            $num = $this->db->count_all_results($table);
            goto dJn9m;
            lgmB9:
            $this->db->where("\147\x75\x72\165\137\151\144", $chk);
            goto yiSH4;
            ptm6b:
            goto bHBn1;
            goto Uyi4p;
            l4qHk:
            if (!($table != "\155\x61\x73\x74\145\162\x5f\x67\165\x72\165")) {
                goto a1mV7;
            }
            goto T10wC;
            Kwpjn:
        }
        goto sbQLy;
        zuaw5:
        $chk = $this->input->post("\x69\144\137\x67\x75\162\165", true);
        goto O8eDT;
        nK7d0:
        $tabless = $this->db->list_tables();
        goto oxt8a;
        wKWu8:
        $this->output_json(["\x63\x6f\165\x6e\x74" => count($messages), "\x73\x74\x61\164\165\x73" => false, "\x6d\145\x73\163\x61\147\145" => "\x44\x61\x74\141\40\x67\x75\x72\x75\40\x64\151\147\165\x6e\x61\x6b\x61\x6e\40\144\151\40" . count($messages) . "\x20\x74\141\142\x65\154\72\74\x62\162\76" . implode("\x3c\x62\162\76", $messages)]);
        goto YeR3u;
        mvBWF:
        DBr0r:
        goto IccSy;
        IRJEs:
        $data["\x73\164\141\x74\x75\x73"] = $this->master->delete("\x6d\141\163\x74\x65\162\x5f\x67\x75\162\x75", $chk, "\x69\144\137\x67\x75\162\x75");
        goto QC7KI;
        O8eDT:
        $messages = [];
        goto Whjz7;
        MVVpA:
    }
    public function detail($id_guru)
    {
        goto FIkim;
        DYi7r:
        $data["\x67\x75\x72\165"] = ["\x64\145\164\141\x69\154" => $this->master->getGuruByArrId([$id_guru])[0], "\x6a\x61\142\x61\164\x61\156" => $this->master->getDetailJabatanGuru($id_guru), "\x6d\141\164\x65\x72\x69" => $this->db->get_where("\153\145\154\141\163\x5f\x6d\141\x74\145\x72\151", "\x69\144\137\147\x75\162\165\75" . $id_guru)->num_rows(), "\x63\141\x74\141\x74\x61\156\137\x6d\141\160\145\x6c" => $this->db->get_where("\x6b\145\154\141\x73\137\143\141\164\x61\164\141\x6e\x5f\x6d\x61\x70\145\154", "\x69\x64\137\x67\x75\x72\x75\x3d" . $id_guru)->num_rows(), "\x62\141\x6e\x6b\137\163\x6f\x61\154" => $this->db->get_where("\143\x62\x74\137\142\141\x6e\x6b\137\x73\157\x61\x6c", "\142\141\x6e\153\137\x67\165\x72\165\x5f\x69\144\75" . $id_guru)->num_rows(), "\160\145\156\147\141\167\x61\163" => $this->db->get_where("\143\142\164\137\x70\145\156\147\141\167\x61\x73", "\x69\144\137\x67\165\x72\165\x20\114\111\113\105\x20\42\x25" . $id_guru . "\x25\42")->num_rows(), "\x70\157\163\164\x73" => $this->db->get_where("\x70\157\x73\x74", "\144\x61\x72\x69\x3d" . $id_guru)->num_rows(), "\x63\157\x6d\155\x65\156\x74\163" => $this->db->get_where("\160\x6f\163\x74\x5f\x63\157\155\x6d\145\156\164\x73", "\144\141\162\151\75" . $id_guru)->num_rows(), "\162\145\160\154\151\145\163" => $this->db->get_where("\x70\x6f\x73\164\x5f\162\145\160\154\x79", "\x64\141\x72\151\75" . $id_guru)->num_rows()];
        goto U0r7x;
        FIkim:
        $user = $this->ion_auth->user()->row();
        goto DgmkP;
        nLH2Q:
        $data["\x74\160\x5f\141\x63\164\x69\x76\145"] = $this->dashboard->getTahunActive();
        goto ox5oM;
        qd7JF:
        $data = ["\165\163\x65\162" => $user, "\152\165\144\165\x6c" => "\x44\145\x74\141\x69\154\40\107\165\162\x75", "\x73\165\142\152\x75\x64\165\x6c" => "\111\x6e\x66\157\x20\112\x61\x62\x61\164\x61\156\40\x47\x75\162\x75", "\155\141\160\145\154" => $this->master->getAllMapel(), "\160\x72\x6f\x66\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\151\156\x67" => $setting];
        goto RS_o1;
        A6pgb:
        $this->load->view("\155\141\x73\164\x65\162\x2f\147\165\162\165\x2f\x64\x65\164\141\151\x6c");
        goto UkNMX;
        UkNMX:
        $this->load->view("\137\x74\x65\x6d\160\154\x61\164\145\x73\57\x64\141\163\150\142\157\x61\x72\144\57\x5f\146\x6f\x6f\x74\145\x72");
        goto yYddh;
        U0r7x:
        $this->load->view("\137\x74\145\155\160\154\x61\x74\145\x73\57\x64\141\163\150\x62\157\x61\x72\144\57\137\150\x65\141\144\x65\x72", $data);
        goto A6pgb;
        RS_o1:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto nLH2Q;
        DgmkP:
        $setting = $this->dashboard->getSetting();
        goto qd7JF;
        e_HCG:
        $data["\x6b\x65\x6c\141\163"] = $this->master->getAllKelas();
        goto cJywj;
        cJywj:
        $data["\x69\144\x5f\147\x75\x72\165"] = $id_guru;
        goto DYi7r;
        yv1HS:
        $data["\163\x6d\164\x5f\x61\143\164\x69\166\x65"] = $this->dashboard->getSemesterActive();
        goto e_HCG;
        ox5oM:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto yv1HS;
        yYddh:
    }
    public function delete()
    {
        goto ZGYWf;
        ibDq5:
        if (!$this->master->delete("\155\141\x73\164\145\x72\x5f\147\165\162\x75", $chk, "\151\x64\137\x67\165\x72\x75")) {
            goto rbQwG;
        }
        goto B681j;
        B681j:
        $this->output_json(["\163\x74\x61\x74\165\163" => true, "\164\157\164\x61\154" => count($chk)]);
        goto lf02A;
        zZg2g:
        goto SWk7M;
        goto fX1_9;
        ZGYWf:
        $chk = $this->input->post("\x63\150\x65\x63\x6b\145\x64", true);
        goto pHyPd;
        fX1_9:
        Z9fPz:
        goto aUT0h;
        OqzWY:
        SWk7M:
        goto XFB9t;
        aUT0h:
        $this->output_json(["\163\164\x61\164\165\163" => false]);
        goto OqzWY;
        lf02A:
        rbQwG:
        goto zZg2g;
        pHyPd:
        if (!$chk) {
            goto Z9fPz;
        }
        goto ibDq5;
        XFB9t:
    }
    public function forceDelete()
    {
        goto eqEx1;
        fJJOK:
        $data["\163\164\x61\x74\165\163"] = $this->master->delete("\155\141\x73\x74\x65\x72\x5f\147\165\162\x75", $id_guru, "\x69\144\137\147\165\162\165");
        goto aMXF1;
        eqEx1:
        $id_guru = $this->input->post("\151\x64\137\147\165\162\x75", true);
        goto fJJOK;
        aMXF1:
        $this->output_json($data);
        goto zSRNV;
        zSRNV:
    }
    public function create_user()
    {
        goto e8fzr;
        dhYBa:
        $last_name = end($nama);
        goto Livq1;
        jObEw:
        U99Py:
        goto G2OXF;
        G2OXF:
        $data = ["\163\164\x61\164\165\163" => false, "\x6d\163\x67" => "\x45\155\x61\x69\x6c\x20\x74\x69\x64\141\153\40\x74\145\162\163\145\x64\151\141\x20\x28\x73\165\x64\x61\x68\x20\144\x69\x67\165\x6e\x61\153\x61\156\51\56"];
        goto uIY73;
        uOygD:
        $group = array("\62");
        goto qPPvY;
        OYZnz:
        ZnTxq:
        goto b6XFc;
        C7l1d:
        $email = $data->email;
        goto GbchG;
        GbchG:
        $additional_data = ["\x66\x69\162\x73\x74\137\x6e\x61\x6d\x65" => $first_name, "\154\141\163\x74\137\x6e\x61\x6d\x65" => $last_name];
        goto uOygD;
        e8fzr:
        $id = $this->input->get("\151\x64", true);
        goto eBxuO;
        Livq1:
        $username = $data->nip;
        goto kS5s7;
        qPPvY:
        if ($this->ion_auth->username_check($username)) {
            goto zr3qD;
        }
        goto wgD7M;
        i1tb1:
        goto uoh38;
        goto jObEw;
        uIY73:
        uoh38:
        goto tZFfL;
        kS5s7:
        $password = $data->nip;
        goto C7l1d;
        j5cGy:
        $first_name = $nama[0];
        goto dhYBa;
        eBxuO:
        $data = $this->master->getGuruById($id);
        goto HjYrW;
        HjYrW:
        $nama = explode("\x20", $data->nama_guru);
        goto j5cGy;
        f1Bc9:
        $data = ["\163\164\141\164\x75\163" => true, "\155\x73\147" => "\x55\x73\x65\162\x20\x62\145\x72\x68\x61\x73\151\154\x20\x64\151\142\x75\141\x74\x2e\x20\x4e\x49\120\x20\x64\151\147\165\156\141\x6b\141\156\40\163\145\x62\x61\147\x61\151\40\160\x61\163\x73\x77\157\x72\x64\x20\160\141\x64\141\40\x73\x61\x61\164\x20\x6c\157\x67\x69\156\56"];
        goto i1tb1;
        wgD7M:
        if ($this->ion_auth->email_check($email)) {
            goto U99Py;
        }
        goto wBg7Q;
        bV5Tx:
        $data = ["\163\164\x61\164\165\x73" => false, "\155\x73\x67" => "\125\x73\x65\162\x6e\141\x6d\145\x20\164\x69\x64\x61\x6b\x20\164\x65\x72\x73\145\144\151\141\40\50\163\165\144\x61\x68\x20\x64\151\x67\165\x6e\x61\153\x61\x6e\x29\x2e"];
        goto OYZnz;
        wBg7Q:
        $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto f1Bc9;
        b6XFc:
        $this->output_json($data);
        goto OiYlI;
        tZFfL:
        goto ZnTxq;
        goto vgROy;
        vgROy:
        zr3qD:
        goto bV5Tx;
        OiYlI:
    }
    public function previewExcel()
    {
        goto e03Dz;
        awOeM:
        BR5u7:
        goto Fbk_n;
        tmBY4:
        if (!$this->upload->do_upload("\x75\160\154\x6f\141\144\x5f\146\x69\x6c\x65")) {
            goto bmez_;
        }
        goto vgtxR;
        ZeJtR:
        elomh:
        goto wJRO9;
        Xhnlo:
        goto dHCe6;
        goto Lo3uP;
        FtTQR:
        zllU2:
        goto cjJlQ;
        i5zYW:
        $data = [];
        goto RMtcJ;
        e03Dz:
        $config["\165\160\154\157\141\144\137\x70\141\164\150"] = "\56\57\165\x70\x6c\157\x61\x64\163\57\x69\155\x70\x6f\162\x74\57";
        goto Csqw8;
        tCV63:
        $config["\x6d\141\170\137\163\x69\172\x65"] = 2048;
        goto QbjB_;
        m8Lna:
        if (!($sheetData[$i][0] != null)) {
            goto F8Qfj;
        }
        goto LaA7n;
        cjJlQ:
        TBBPS:
        goto MPWwc;
        Fbk_n:
        unlink($file);
        goto kXmPR;
        LaA7n:
        $data[] = ["\x6e\141\x6d\x61" => $sheetData[$i][1], "\x6e\x69\160" => $sheetData[$i][2], "\x6b\x6f\x64\145" => $sheetData[$i][3], "\165\x73\x65\x72\x6e\141\155\145" => $sheetData[$i][4], "\x70\141\x73\x73\167\157\x72\144" => $sheetData[$i][5]];
        goto PsA5u;
        PsA5u:
        F8Qfj:
        goto MfAK6;
        RMtcJ:
        $i = 1;
        goto ZeJtR;
        NDlyZ:
        echo $error;
        goto ZFfme;
        wJRO9:
        if (!($i < count($sheetData))) {
            goto BR5u7;
        }
        goto m8Lna;
        g8G48:
        goto elomh;
        goto awOeM;
        vgtxR:
        $file = $this->upload->data("\x66\165\154\x6c\137\160\141\164\x68");
        goto BSGYR;
        mMUbe:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto i5zYW;
        Csqw8:
        $config["\141\x6c\154\157\x77\145\144\x5f\x74\171\x70\145\163"] = "\170\154\x73\174\x78\154\x73\x78\x7c\143\163\166";
        goto tCV63;
        MPWwc:
        $spreadsheet = $reader->load($file);
        goto mMUbe;
        fhht8:
        switch ($ext) {
            case "\56\x78\154\x73\x78":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto TBBPS;
            case "\56\x78\x6c\163":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto TBBPS;
            case "\56\x63\x73\x76":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto TBBPS;
            default:
                echo "\165\156\x6b\156\x6f\167\156\40\146\x69\x6c\145\x20\x65\x78\164";
                die;
        }
        goto FtTQR;
        IBawf:
        $i++;
        goto g8G48;
        lcouV:
        dHCe6:
        goto l0sqY;
        kXmPR:
        echo json_encode($data);
        goto Xhnlo;
        C1d7F:
        $error = $this->upload->display_errors();
        goto NDlyZ;
        BSGYR:
        $ext = $this->upload->data("\x66\x69\154\145\x5f\x65\x78\164");
        goto fhht8;
        MfAK6:
        VV5ud:
        goto IBawf;
        sQWIQ:
        $this->load->library("\x75\x70\x6c\157\x61\x64", $config);
        goto tmBY4;
        QbjB_:
        $config["\x65\x6e\x63\x72\x79\160\x74\137\x6e\141\x6d\x65"] = true;
        goto sQWIQ;
        ZFfme:
        die;
        goto lcouV;
        Lo3uP:
        bmez_:
        goto C1d7F;
        l0sqY:
    }
    public function previewWord()
    {
        goto NTZ6q;
        cnrUq:
        $config["\141\x6c\154\157\167\x65\x64\137\x74\x79\x70\145\163"] = "\x64\157\143\170";
        goto Dq4yE;
        Dq4yE:
        $config["\x6d\141\x78\x5f\x73\x69\172\145"] = 2048;
        goto foB38;
        J64NL:
        echo json_encode($data);
        goto C0ZTG;
        ejjKy:
        if (!$this->upload->do_upload("\165\x70\x6c\157\x61\144\137\146\151\x6c\145")) {
            goto khyRY;
        }
        goto ySMq9;
        l4vT_:
        $this->load->library("\165\160\x6c\x6f\x61\x64", $config);
        goto ejjKy;
        kZ0jS:
        khyRY:
        goto bOtF8;
        Mv6Nu:
        $data = [];
        goto SWgkg;
        N9YRx:
        goto KuWux;
        goto spyPZ;
        ySMq9:
        $file = $this->upload->data("\x66\165\154\x6c\x5f\160\141\164\x68");
        goto NCyip;
        UUfzZ:
        $i = 1;
        goto DSC_n;
        LBtd6:
        FZsZ6:
        goto dVfgt;
        CYvW8:
        $dom = new DOMDocument();
        goto leYLe;
        O80XD:
        die;
        goto F5n51;
        Yc8MW:
        $data[] = ["\x6e\x61\x6d\x61" => $cols->item(1)->nodeValue, "\x6e\x69\x70" => $cols->item(2)->nodeValue, "\x6b\x6f\x64\145" => $cols->item(3)->nodeValue, "\x75\163\x65\162\156\x61\x6d\x65" => $cols->item(4)->nodeValue, "\x70\141\x73\163\167\157\162\x64" => $cols->item(5)->nodeValue];
        goto LBtd6;
        DSC_n:
        KuWux:
        goto uZ9U1;
        QpP3j:
        echo $error;
        goto O80XD;
        C0ZTG:
        goto lxhYc;
        goto kZ0jS;
        NTZ6q:
        $config["\x75\160\154\157\141\144\x5f\160\x61\164\x68"] = "\56\x2f\x75\x70\x6c\x6f\x61\x64\x73\57\x69\x6d\160\x6f\x72\x74\x2f";
        goto cnrUq;
        foB38:
        $config["\x65\x6e\x63\x72\x79\x70\x74\137\156\141\x6d\x65"] = true;
        goto l4vT_;
        bnYTW:
        $rows = $tables->item(0)->getElementsByTagName("\x74\162");
        goto UUfzZ;
        leYLe:
        $dom->loadHTML($text);
        goto Mv6Nu;
        bOtF8:
        $error = $this->upload->display_errors();
        goto QpP3j;
        spyPZ:
        lmEm4:
        goto J64NL;
        FpDYc:
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        goto EGodK;
        zRAgX:
        $cols = $rows[$i]->getElementsByTagName("\x74\x64");
        goto Yc8MW;
        dVfgt:
        $i++;
        goto N9YRx;
        nUahN:
        $text = file_get_contents("\x2e\x2f\165\x70\x6c\157\x61\x64\163\x2f\164\x65\155\160\x2f\x64\157\x63\56\150\x74\x6d\x6c");
        goto CYvW8;
        NCyip:
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($file);
        goto FpDYc;
        P9llS:
        unlink($file);
        goto nUahN;
        wozYv:
        $tables = $dom->getElementsByTagName("\x74\x61\x62\154\145");
        goto bnYTW;
        SWgkg:
        $dom->preserveWhiteSpace = false;
        goto wozYv;
        uZ9U1:
        if (!($i < $rows->count())) {
            goto lmEm4;
        }
        goto zRAgX;
        F5n51:
        lxhYc:
        goto CJ25J;
        EGodK:
        try {
            $htmlWriter->save("\56\57\165\160\154\x6f\x61\x64\163\x2f\164\x65\x6d\160\x2f\x64\x6f\143\x2e\150\164\x6d\x6c");
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
        }
        goto P9llS;
        CJ25J:
    }
    public function import($import_data = null)
    {
        goto n8Fon;
        LbXTn:
        $setting = $this->dashboard->getSetting();
        goto L_7q6;
        L_7q6:
        $data = ["\x75\x73\145\x72" => $user, "\x6a\165\x64\x75\x6c" => "\107\165\162\165", "\x73\165\x62\152\165\x64\165\x6c" => "\x54\x61\155\142\141\150\x20\104\x61\164\141\40\x47\165\162\x75", "\155\x61\x70\145\154" => $this->master->getAllMapel(), "\160\162\x6f\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\x74\151\156\147" => $setting];
        goto NvwXE;
        kXyk2:
        Miu7B:
        goto hlWv4;
        ZHK_m:
        $data["\164\x70\137\141\143\164\151\166\x65"] = $this->dashboard->getTahunActive();
        goto CmRtm;
        Xl2pn:
        $data["\x73\155\x74\x5f\x61\143\164\151\x76\x65"] = $this->dashboard->getSemesterActive();
        goto uQXtv;
        sLBAa:
        $this->load->view("\x6d\x61\163\x74\145\x72\57\147\x75\162\x75\57\x61\144\144");
        goto jOka8;
        CmRtm:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto Xl2pn;
        n8Fon:
        $user = $this->ion_auth->user()->row();
        goto LbXTn;
        NvwXE:
        if (!($import_data != null)) {
            goto Miu7B;
        }
        goto y4X3W;
        hlWv4:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto ZHK_m;
        jOka8:
        $this->load->view("\x5f\x74\145\x6d\160\154\141\164\x65\163\57\144\x61\x73\x68\142\x6f\141\162\x64\57\137\146\157\157\164\145\x72");
        goto pl75R;
        uQXtv:
        $this->load->view("\x5f\x74\x65\x6d\160\x6c\141\x74\145\x73\x2f\144\x61\x73\x68\x62\157\x61\162\x64\57\137\150\x65\x61\144\145\x72", $data);
        goto sLBAa;
        y4X3W:
        $data["\x69\155\160\x6f\162\164"] = $import_data;
        goto kXyk2;
        pl75R:
    }
    public function preview()
    {
        goto J6ySO;
        pPNnN:
        SjTvq:
        goto eHHcr;
        Lrxdv:
        iwxuS:
        goto VwipB;
        ZvPoc:
        $config["\x61\154\154\x6f\x77\145\x64\137\x74\x79\160\145\163"] = "\x78\154\x73\174\170\154\163\170\174\x63\163\x76";
        goto XfOAQ;
        qu2c7:
        $config["\145\x6e\143\x72\171\160\x74\137\156\x61\x6d\x65"] = true;
        goto p8o1T;
        qld93:
        v7ZaE:
        goto KYrw1;
        K2h25:
        goto iwxuS;
        goto T9OST;
        YvL9b:
        die;
        goto Lrxdv;
        TPx3i:
        goto YW6FW;
        goto pPNnN;
        hFP1g:
        DCBMS:
        goto hozOT;
        ar2Up:
        $i = 1;
        goto jcjG0;
        yuJiE:
        $error = $this->upload->display_errors();
        goto bvzSf;
        c7pCw:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto CCdqL;
        J1pee:
        if (!$this->upload->do_upload("\x75\x70\154\x6f\141\144\x5f\146\151\154\145")) {
            goto XW8j9;
        }
        goto M7GKj;
        D47dr:
        $this->import($data);
        goto K2h25;
        T9OST:
        XW8j9:
        goto yuJiE;
        Iz8Vv:
        wFj3w:
        goto hFP1g;
        T3BSp:
        $data[] = ["\x6e\151\160" => $sheetData[$i][0], "\156\141\x6d\141\137\147\165\162\x75" => $sheetData[$i][1], "\145\155\x61\x69\154" => $sheetData[$i][2], "\x6d\x61\160\145\154\x5f\151\x64" => $sheetData[$i][3]];
        goto qld93;
        XfOAQ:
        $config["\x6d\141\x78\x5f\163\x69\x7a\145"] = 2048;
        goto qu2c7;
        J6ySO:
        $config["\165\x70\x6c\157\x61\x64\x5f\160\141\x74\x68"] = "\x2e\57\165\160\154\157\x61\144\163\57\x69\155\160\x6f\162\x74\57";
        goto ZvPoc;
        eHHcr:
        unlink($file);
        goto D47dr;
        CCdqL:
        $data = [];
        goto ar2Up;
        p8o1T:
        $this->load->library("\x75\160\154\157\141\144", $config);
        goto J1pee;
        hozOT:
        $spreadsheet = $reader->load($file);
        goto c7pCw;
        QQM9h:
        $ext = $this->upload->data("\x66\151\154\x65\137\x65\170\x74");
        goto xAxuH;
        jcjG0:
        YW6FW:
        goto dPrER;
        KYrw1:
        $i++;
        goto TPx3i;
        dPrER:
        if (!($i < count($sheetData))) {
            goto SjTvq;
        }
        goto T3BSp;
        xAxuH:
        switch ($ext) {
            case "\x2e\x78\x6c\x73\x78":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto DCBMS;
            case "\x2e\x78\154\x73":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto DCBMS;
            case "\56\x63\x73\166":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto DCBMS;
            default:
                echo "\x75\156\x6b\156\x6f\167\156\x20\x66\x69\x6c\x65\40\x65\170\x74";
                die;
        }
        goto Iz8Vv;
        M7GKj:
        $file = $this->upload->data("\x66\x75\x6c\x6c\137\x70\141\164\x68");
        goto QQM9h;
        bvzSf:
        echo $error;
        goto YvL9b;
        VwipB:
    }
    public function do_import()
    {
        goto aunsm;
        aunsm:
        $input = json_decode($this->input->post("\147\165\x72\165", true));
        goto mZAGK;
        JUt70:
        $this->output->set_content_type("\141\x70\160\x6c\151\143\x61\x74\x69\157\156\x2f\152\163\157\x6e")->set_output($save);
        goto vEW40;
        mZAGK:
        $data = [];
        goto cBQgP;
        lZnep:
        $save = $this->master->create("\155\141\163\x74\x65\x72\137\147\165\x72\x75", $data, true);
        goto JUt70;
        cBQgP:
        foreach ($input as $d) {
            $data[] = ["\x6e\141\x6d\141\x5f\147\x75\162\x75" => trim($d->nama), "\156\151\x70" => trim($d->nip), "\x75\x73\145\162\156\141\155\x65" => trim($d->username), "\x70\141\163\163\167\x6f\162\x64" => trim($d->password), "\146\157\x74\157" => "\165\160\x6c\157\x61\x64\163\x2f\160\x72\157\146\151\x6c\x65\x73\57" . trim($d->nip) . "\x2e\x6a\160\x67"];
            Y9bBv:
        }
        goto YDgpD;
        YDgpD:
        XzAYm:
        goto lZnep;
        vEW40:
    }
    public function editJabatan($id)
    {
        goto KMoeV;
        Fnp77:
        $data["\x6b\x75\162"] = $smt;
        goto yO4PJ;
        fCISY:
        $data["\x74\x70\137\x61\x63\x74\151\x76\145"] = $tp;
        goto gjK94;
        yO4PJ:
        $smt2 = $smt->id_smt == "\61" ? "\x32" : "\61";
        goto NhlwI;
        HdyLL:
        if (!($group === "\141\x64\155\151\x6e")) {
            goto TlhBb;
        }
        goto XbVMk;
        Vvrux:
        $user = $this->ion_auth->user()->row();
        goto CbO_5;
        BRKQR:
        $this->load->view("\137\164\145\155\160\154\141\164\x65\x73\x2f\144\141\x73\150\142\157\141\162\x64\x2f\x5f\146\157\x6f\164\x65\x72");
        goto EeWwo;
        zi_UN:
        $smt = $this->dashboard->getSemesterActive();
        goto UZSEf;
        NhlwI:
        $tp2 = $smt->id_smt == "\x31" ? $tp->id_tp - 1 : $tp->id_tp;
        goto wqcyt;
        rQn1y:
        $this->load->view("\x6d\x61\x73\x74\x65\162\57\x67\165\162\165\57\145\144\x69\164\x6d\141\160\145\x6c");
        goto BRKQR;
        l9J7Z:
        TlhBb:
        goto THI7G;
        UZSEf:
        $guru = $this->master->getJabatanGuru($id, $tp->id_tp, $smt->id_smt);
        goto Vvrux;
        CbO_5:
        $data = ["\165\163\145\x72" => $user, "\x6a\165\x64\165\x6c" => "\x4a\x61\142\x61\164\x61\156\40\107\x75\162\x75", "\163\165\x62\152\165\144\165\x6c" => "\105\x64\x69\164\x20\112\x61\x62\x61\164\x61\x6e\40\107\x75\x72\165", "\x70\162\x6f\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()];
        goto InUy5;
        KMoeV:
        $tp = $this->dashboard->getTahunActive();
        goto zi_UN;
        rxULy:
        $data["\145\153\163\153\165\x6c"] = $this->dropdown->getAllEkskul();
        goto Fnp77;
        Qb4Tp:
        $data["\163\x6d\164\x5f\141\x63\164\x69\166\x65"] = $smt;
        goto NIk0E;
        NIk0E:
        $group = $this->ion_auth->get_users_groups($user->id)->row()->name;
        goto HdyLL;
        H42QE:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto fCISY;
        InUy5:
        $data["\x67\165\162\165"] = $guru;
        goto H42QE;
        gjK94:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto Qb4Tp;
        PIvpY:
        $guru_before->ekstra_kelas = json_decode(json_encode(unserialize($guru_before->ekstra_kelas)));
        goto XqLcC;
        THI7G:
        $data["\153\x65\154\141\x73\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto CZL2n;
        iNXt1:
        $data["\154\x65\x76\145\154\x73"] = $this->dropdown->getAllLevelGuru();
        goto rxULy;
        XbVMk:
        $data["\x67\162\x6f\165\160\163"] = $this->ion_auth->groups()->result();
        goto l9J7Z;
        YCwOW:
        $guru_before->mapel_kelas = json_decode(json_encode(unserialize($guru_before->mapel_kelas)));
        goto PIvpY;
        r0She:
        $this->load->view("\x5f\x74\145\x6d\160\154\x61\x74\x65\163\x2f\144\x61\163\x68\142\157\x61\162\x64\x2f\x5f\x68\x65\141\x64\145\162", $data);
        goto rQn1y;
        CZL2n:
        $data["\155\x61\x70\145\154\163"] = $this->dropdown->getAllMapel();
        goto iNXt1;
        XqLcC:
        $data["\x62\x65\x66\x6f\162\145"] = ["\153\x65\154\x61\x73\163" => $this->dropdown->getAllKelas($tp2, $smt2), "\147\x75\162\165" => $guru_before];
        goto r0She;
        wqcyt:
        $guru_before = $this->master->getJabatanGuru($id, $tp2, $smt2);
        goto YCwOW;
        EeWwo:
    }
    public function saveJabatan()
    {
        goto kWl9x;
        tOHrJ:
        zYxIh:
        goto ILEaT;
        e2mFL:
        wdhAt:
        goto dFNx8;
        IDV3h:
        $i++;
        goto vABHg;
        LZYE_:
        FvZKI:
        goto JHbbJ;
        f4p9B:
        zZqfW:
        goto og30h;
        FJHek:
        if (!isset($kelass2[$kelasmapel])) {
            goto wdhAt;
        }
        goto GhfJy;
        A1Go0:
        $id_level = $this->input->post("\x6c\145\166\145\154", true);
        goto hv4qa;
        ONMZ6:
        $mapel = $this->input->post("\x6d\141\x70\145\x6c\133" . $i . "\135", true);
        goto NnOep;
        Izw8s:
        $i = 0;
        goto luu0k;
        cWrJ0:
        s7UAd:
        goto h00SI;
        QU13R:
        $smt = $this->master->getSemesterActive();
        goto dV9nr;
        KrM5_:
        $res["\163\164\141\x74\x75\163"] = FALSE;
        goto X87a_;
        qgZ2B:
        QGr0T:
        goto IVLC7;
        SN3c8:
        $row_kelas = count($this->input->post("\x6b\145\x6c\x61\x73\x65\153\x73\164\162\x61" . $ekstra, true));
        goto kwCaH;
        L7tb0:
        o9qir:
        goto Pp5XV;
        RR2R7:
        if (!($i <= $row_ekstras)) {
            goto N6eRN;
        }
        goto SI7ag;
        bY9W6:
        $kelas = [];
        goto BS1uC;
        EdoVu:
        if ($this->input->post()) {
            goto slsA9;
        }
        goto KrM5_;
        PpXOL:
        $kelas[] = ["\153\x65\x6c\141\163" => $kelasekstra];
        goto hjVyZ;
        Qn1Yj:
        $kelas_wali = $kelass1[$tmp_wali];
        goto d0IDH;
        geUrM:
        $j++;
        goto A4umI;
        MX9bT:
        boBNN:
        goto U683p;
        vABHg:
        goto jSHS6;
        goto MMv83;
        dV9nr:
        $smt2 = $smt->id_smt == "\61" ? "\x32" : "\61";
        goto GIeiB;
        CVm2R:
        $mapels = [];
        goto EITv7;
        vVeyW:
        $kelass1 = $this->kelas->getNamaKelasByNama($tp->id_tp, $smt->id_smt);
        goto O7w7r;
        mh2CU:
        $i = 0;
        goto av93E;
        og30h:
        s_TwT:
        goto IDV3h;
        lqe7h:
        $j = 0;
        goto L7tb0;
        UW5tB:
        $tp = $this->master->getTahunActive();
        goto QU13R;
        PU9wx:
        BLWrY:
        goto FJHek;
        IVLC7:
        $this->output_json($res);
        goto Se0Sp;
        Z3BvV:
        if (!isset($kelass1[$tmp_nama])) {
            goto Gr1P0;
        }
        goto PUWhj;
        MMv83:
        GD17V:
        goto tOHrJ;
        A4umI:
        goto Qd7uR;
        goto vN0xM;
        mBXPS:
        if ($copy) {
            goto heUEW;
        }
        goto UJXdt;
        clKl7:
        N6eRN:
        goto QWa20;
        U94dL:
        goto ZnClv;
        goto PU9wx;
        vN0xM:
        CVeqT:
        goto UeOjt;
        GZW6b:
        goto o9qir;
        goto cWrJ0;
        hjVyZ:
        goto Xh21W;
        goto V0RFA;
        QWa20:
        CZ450:
        goto AhgbD;
        B1nLv:
        heUEW:
        goto lzQdp;
        hv4qa:
        $wali = $this->input->post("\x6b\145\154\x61\163\137\x77\x61\154\151", true);
        goto Q0gSi;
        g6Nn7:
        $kelas[] = ["\153\x65\154\x61\x73" => $kelass1[$tmp_nama2]];
        goto LZYE_;
        wv3TX:
        $res["\163\164\x61\164\x75\163"] = $update;
        goto NyCN4;
        dFNx8:
        ZnClv:
        goto dkhQA;
        kwCaH:
        $kelas = [];
        goto lqe7h;
        A_NTJ:
        slsA9:
        goto D8VLv;
        p0cfC:
        $nama_ekstra = $this->input->post("\156\x61\x6d\x61\137\145\153\163\x74\162\x61" . $ekstra, true);
        goto FM7x7;
        lzQdp:
        $tmp_wali = $kelass2[$wali];
        goto Qn1Yj;
        N75r0:
        goto QGr0T;
        goto A_NTJ;
        AhgbD:
        $kelas_ekstra_guru = serialize($ekstras);
        goto wFzjI;
        SbSOg:
        $i++;
        goto Yf4rL;
        EITv7:
        $check_mapel = $this->input->post("\155\x61\x70\145\154", true);
        goto eMCWv;
        H5Znv:
        $row_ekstras = count($this->input->post("\x65\x6b\163\x74\x72\x61", true));
        goto Izw8s;
        PUWhj:
        $kelas[] = ["\153\x65\154\141\163" => $kelass1[$tmp_nama]];
        goto Lpcn4;
        UJXdt:
        $kelas_wali = $wali;
        goto Gpd5y;
        fiwvw:
        h29Iw:
        goto Vf861;
        b7pH0:
        $kelasmapel = $this->input->post("\153\145\x6c\141\163\155\x61\160\x65\x6c" . $mapel . "\x5b" . $j . "\x5d", true);
        goto MmAhG;
        oqdA7:
        $row_mapels = count($this->input->post("\x6d\x61\x70\x65\154", true));
        goto mh2CU;
        U683p:
        QN7Wf:
        goto SbSOg;
        Lgikn:
        $kelas[] = ["\153\x65\154\141\x73" => $kelasmapel];
        goto U94dL;
        JHbbJ:
        Xh21W:
        goto fiwvw;
        eMCWv:
        if (!$check_mapel) {
            goto zYxIh;
        }
        goto oqdA7;
        h00SI:
        $ekstras[] = ["\151\x64\137\145\x6b\x73\x74\x72\x61" => $ekstra, "\156\141\155\x61\x5f\145\x6b\163\x74\x72\141" => $nama_ekstra, "\x6b\x65\x6c\x61\x73\137\x65\153\163\164\x72\141" => $kelas];
        goto MX9bT;
        ILEaT:
        $kelas_mapel_guru = serialize($mapels);
        goto JAinb;
        GIeiB:
        $tp2 = $smt->id_smt == "\x31" ? $tp->id_tp - 1 : $tp->id_tp;
        goto vVeyW;
        mPIU7:
        $check = $this->input->post("\153\x65\x6c\141\163\x6d\x61\160\145\x6c" . $mapel, true);
        goto fRCNw;
        kWl9x:
        $id_guru = $this->input->post("\x69\x64\137\x67\x75\x72\x75", true);
        goto A1Go0;
        luu0k:
        FF7Ux:
        goto RR2R7;
        WbRoq:
        if (!$check) {
            goto boBNN;
        }
        goto SN3c8;
        Lpcn4:
        Gr1P0:
        goto e2mFL;
        V0RFA:
        phZKt:
        goto IMDo_;
        fRCNw:
        if (!$check) {
            goto zZqfW;
        }
        goto m4wwA;
        NnOep:
        $nama_mapel = $this->input->post("\x6e\141\155\x61\x5f\x6d\x61\x70\x65\x6c" . $mapel, true);
        goto mPIU7;
        eRn_r:
        $kelasekstra = $this->input->post("\x6b\x65\154\x61\x73\145\153\x73\164\162\141" . $ekstra . "\133" . $j . "\135", true);
        goto rk2C9;
        WFQbL:
        if (!($i <= $row_mapels)) {
            goto GD17V;
        }
        goto ONMZ6;
        NyCN4:
        $res["\x6d\163\147"] = $update ? "\104\x61\164\x61\x20\142\145\x72\150\141\163\x69\154\40\144\151\x73\x69\155\x70\141\156" : "\x47\141\x67\141\154\x20\x6d\x65\156\x79\x69\155\160\141\156\40\144\x61\x74\x61";
        goto qgZ2B;
        rk2C9:
        if ($copy) {
            goto phZKt;
        }
        goto PpXOL;
        m4wwA:
        $row_kelas = count($this->input->post("\153\145\154\141\163\155\x61\160\x65\x6c" . $mapel, true));
        goto bY9W6;
        UeOjt:
        $mapels[] = ["\x69\144\137\x6d\141\160\145\x6c" => $mapel, "\x6e\x61\x6d\x61\137\x6d\141\x70\x65\154" => $nama_mapel, "\x6b\x65\x6c\141\163\x5f\x6d\x61\x70\x65\x6c" => $kelas];
        goto f4p9B;
        IMDo_:
        if (!isset($kelass2[$kelasekstra])) {
            goto FvZKI;
        }
        goto MwUIN;
        GhfJy:
        $tmp_nama = $kelass2[$kelasmapel];
        goto Z3BvV;
        tBOF0:
        $check_ekstra = $this->input->post("\145\153\163\x74\x72\141", true);
        goto rW3cZ;
        O7w7r:
        $kelass2 = $this->dropdown->getAllKelas($tp2, $smt2);
        goto mBXPS;
        X87a_:
        $res["\x6d\x73\x67"] = "\105\162\162\x6f\x72\x20\160\x6f\x73\164\40\x64\x61\164\x61";
        goto N75r0;
        rW3cZ:
        if (!$check_ekstra) {
            goto CZ450;
        }
        goto H5Znv;
        dkhQA:
        Mcj9h:
        goto geUrM;
        JAinb:
        $ekstras = [];
        goto tBOF0;
        Gpd5y:
        goto acgJG;
        goto B1nLv;
        d0IDH:
        acgJG:
        goto CVm2R;
        s00S8:
        Qd7uR:
        goto sl4Lh;
        MmAhG:
        if ($copy) {
            goto BLWrY;
        }
        goto Lgikn;
        Q0gSi:
        $copy = $this->input->post("\143\x6f\x70\171", true) != null;
        goto UW5tB;
        Pp5XV:
        if (!($j <= $row_kelas)) {
            goto s7UAd;
        }
        goto eRn_r;
        MwUIN:
        $tmp_nama2 = $kelass2[$kelasekstra];
        goto g6Nn7;
        Yf4rL:
        goto FF7Ux;
        goto clKl7;
        av93E:
        jSHS6:
        goto WFQbL;
        SI7ag:
        $ekstra = $this->input->post("\145\153\x73\x74\162\141\133" . $i . "\135", true);
        goto p0cfC;
        FM7x7:
        $check = $this->input->post("\153\x65\x6c\x61\163\145\x6b\x73\164\x72\x61" . $ekstra, true);
        goto WbRoq;
        D8VLv:
        $update = $this->db->replace("\152\x61\142\141\164\141\156\x5f\x67\x75\162\x75", $data);
        goto wv3TX;
        sl4Lh:
        if (!($j <= $row_kelas)) {
            goto CVeqT;
        }
        goto b7pH0;
        Vf861:
        $j++;
        goto GZW6b;
        wFzjI:
        $data = ["\x69\144\x5f\x6a\141\x62\x61\x74\141\x6e\137\147\x75\x72\165" => $id_guru . $tp->id_tp . $smt->id_smt, "\x69\144\137\x67\x75\162\x75" => $id_guru, "\151\x64\137\152\x61\142\x61\164\141\x6e" => $id_level, "\x69\144\x5f\x6b\145\x6c\x61\x73" => $kelas_wali == null ? 0 : $kelas_wali, "\155\x61\160\145\154\137\153\x65\x6c\141\x73" => $kelas_mapel_guru, "\145\x6b\x73\164\162\141\137\x6b\x65\x6c\x61\163" => $kelas_ekstra_guru, "\x69\x64\x5f\x74\x70" => $tp->id_tp, "\151\144\x5f\x73\155\x74" => $smt->id_smt];
        goto EdoVu;
        BS1uC:
        $j = 0;
        goto s00S8;
        Se0Sp:
    }
    public function getDataKelas()
    {
        goto IU8DD;
        IWZwN:
        $jabatans = $this->master->getGuruMapel($tp->id_tp, $smt->id_smt);
        goto zwhoF;
        I5J9S:
        $data["\152\141\142\x61\164\x61\156"] = $jbtn;
        goto VfZPv;
        ybfic:
        $jbtn = [];
        goto KnAmh;
        w9Ahf:
        C1XgU:
        goto I5J9S;
        u_0V0:
        $this->output_json($data);
        goto dvFaq;
        j8Fa7:
        $data["\145\x6b\x73\137\x74\145\162\151\x73\151"] = $ekstra_terisi;
        goto zLz35;
        zLz35:
        $data["\x6b\145\x6c\141\x73"] = $this->users->getKelas($tp->id_tp, $smt->id_smt);
        goto u_0V0;
        NXZbT:
        $smt = $this->dashboard->getSemesterActive();
        goto IWZwN;
        KnAmh:
        foreach ($jabatans as $jabatan) {
            goto khtB8;
            OHx41:
            syzsI:
            goto ndhHe;
            m1zPi:
            foreach ($eks_kls as $eks) {
                goto KBd7p;
                neUx2:
                YBucq:
                goto oeIjN;
                BY2Bs:
                foreach ($eks->kelas_ekstra as $ek) {
                    $klse[] = $ek->kelas;
                    x_Of0:
                }
                goto jXX47;
                zcVDI:
                $ekstra_terisi[$eks->id_ekstra][$jabatan->id_guru] = ["\151\144\137\x67\x75\x72\x75" => $jabatan->id_guru, "\x67\165\162\165" => $jabatan->nama_guru, "\153\x65\154\141\x73" => $klse];
                goto neUx2;
                KBd7p:
                $klse = [];
                goto BY2Bs;
                jXX47:
                arJGh:
                goto zcVDI;
                oeIjN:
            }
            goto e6Lli;
            e6Lli:
            g08qi:
            goto GOQcY;
            J11xc:
            AdVdo:
            goto m1zPi;
            GOQcY:
            $jbtn[$jabatan->id_jabatan][$jabatan->id_kelas] = ["\x6e\x61\155\141" => $jabatan->nama_guru, "\x69\144" => $jabatan->id_guru];
            goto OHx41;
            NXcz_:
            foreach ($mpl_kls as $mpls) {
                goto vBYLp;
                QB4FD:
                foreach ($mpls->kelas_mapel as $mpl) {
                    $klss[] = $mpl->kelas;
                    FBEhU:
                }
                goto PidC8;
                jM3WG:
                l7g8y:
                goto Rn19w;
                PidC8:
                tGgKR:
                goto rhl0g;
                rhl0g:
                $mapel_terisi[$mpls->id_mapel][$jabatan->id_guru] = ["\x69\x64\x5f\x67\165\162\165" => $jabatan->id_guru, "\147\x75\x72\165" => $jabatan->nama_guru, "\153\145\154\x61\x73" => $klss];
                goto jM3WG;
                vBYLp:
                $klss = [];
                goto QB4FD;
                Rn19w:
            }
            goto J11xc;
            QJsp_:
            $eks_kls = $jabatan->ekstra_kelas = json_decode(json_encode(unserialize($jabatan->ekstra_kelas)));
            goto NXcz_;
            khtB8:
            $mpl_kls = $jabatan->mapel_kelas = json_decode(json_encode(unserialize($jabatan->mapel_kelas)));
            goto QJsp_;
            ndhHe:
        }
        goto w9Ahf;
        zwhoF:
        $mapel_terisi = [];
        goto IWpL9;
        IU8DD:
        $tp = $this->dashboard->getTahunActive();
        goto NXZbT;
        VfZPv:
        $data["\155\160\x6c\137\x74\145\x72\151\x73\x69"] = $mapel_terisi;
        goto j8Fa7;
        IWpL9:
        $ekstra_terisi = [];
        goto ybfic;
        dvFaq:
    }
    public function addjabatan()
    {
        goto mCHQ_;
        zwodm:
        $this->output_json($data);
        goto rsXIs;
        SJXXa:
        goto dJFx6;
        goto qMosU;
        wz_Qd:
        $data = ["\x73\165\143\143\145\163\163" => $replaced, "\x6d\x73\147" => $replaced ? "\123\165\x6b\163\145\x73\x20" . $s_mode . "\40\x6a\x61\142\x61\x74\141\156" : "\x47\x61\x67\x61\x6c\40" . $s_mode . "\x20\152\141\x62\x61\x74\141\156"];
        goto zwodm;
        ObAZV:
        $replaced = $this->db->delete("\x6c\x65\166\x65\x6c\137\x67\165\162\165", "\x69\x64\137\154\x65\166\145\x6c\75" . $id);
        goto SJXXa;
        Ha_PZ:
        $insert = ["\151\144\137\x6c\x65\166\x65\154" => $id, "\154\x65\x76\145\x6c" => $this->input->post("\154\145\166\x65\x6c", true)];
        goto n7XQ9;
        BQDKV:
        dJFx6:
        goto wz_Qd;
        qMosU:
        nD8rC:
        goto Ha_PZ;
        Xg2_m:
        $id = $this->input->post("\151\x64\137\154\x65\166\x65\154", true);
        goto JZOmv;
        cszJY:
        if ($mode == "\61") {
            goto nD8rC;
        }
        goto ObAZV;
        JZOmv:
        $s_mode = $mode == "\x31" ? "\x6d\145\x6e\x79\151\155\x70\x61\x6e" : "\x6d\145\156\147\150\141\160\165\x73";
        goto cszJY;
        mCHQ_:
        $mode = $this->input->post("\x6d\157\x64\145", true);
        goto Xg2_m;
        n7XQ9:
        $replaced = $this->db->replace("\154\145\166\x65\x6c\137\147\165\162\x75", $insert);
        goto BQDKV;
        rsXIs:
    }
}
