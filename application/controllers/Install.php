<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\x41\x53\x45\120\x41\x54\110") or exit("\x4e\157\x20\x64\x69\x72\145\x63\164\x20\x73\143\x72\x69\160\164\x20\141\143\x63\x65\163\163\40\x61\154\x6c\157\x77\145\x64");
class Install extends CI_Controller
{
    function __construct()
    {
        goto rhK2e;
        O4x8l:
        $this->load->model("\111\156\x73\x74\x61\154\x6c\x5f\x6d\x6f\144\x65\154", "\x69\156\163\x74\141\x6c\x6c");
        goto modmf;
        modmf:
        $this->load->model("\104\x61\163\x68\x62\x6f\141\162\144\137\x6d\x6f\144\145\154", "\x64\x61\163\x68\x62\157\x61\162\x64");
        goto mj1it;
        RxiNr:
        $this->load->database();
        goto H4X0V;
        b5SCo:
        if (!($db["\144\145\x66\141\x75\x6c\x74"]["\x64\x61\164\141\142\x61\163\145"] != '')) {
            goto NC9HB;
        }
        goto RxiNr;
        QltCH:
        NC9HB:
        goto O4x8l;
        rhK2e:
        parent::__construct();
        goto qdynx;
        H4X0V:
        $this->load->dbforge();
        goto QltCH;
        qdynx:
        include APPPATH . "\143\157\x6e\146\151\x67\57\x64\x61\x74\141\142\141\163\x65\x2e\160\150\x70";
        goto b5SCo;
        mj1it:
    }
    public function output_json($data, $encode = true)
    {
        goto P_JJo;
        vCHVR:
        $this->output->set_content_type("\x61\160\160\x6c\x69\x63\x61\x74\151\x6f\156\57\x6a\163\157\156")->set_output($data);
        goto PD3Wg;
        fDkRY:
        $data = json_encode($data);
        goto yGNrG;
        yGNrG:
        ud3R1:
        goto vCHVR;
        P_JJo:
        if (!$encode) {
            goto ud3R1;
        }
        goto fDkRY;
        PD3Wg:
    }
    public function index()
    {
        goto rcBaI;
        dwo09:
        xugE8:
        goto Lj_CH;
        uZJ0w:
        goto r84pT;
        goto dwo09;
        F6T6W:
        $data["\x6d\x73\147"] = "\x62\x65\x6c\165\x6d\40\x61\144\141\x20\141\x64\155\x69\156\x69\163\x74\x72\x61\164\x6f\162";
        goto Bzsrm;
        LYpVR:
        $this->load->view("\x69\156\x73\x74\x61\154\154\57\150\x65\141\144\x65\x72", ["\144\141\164\141" => $data]);
        goto Fp7YT;
        Dba3u:
        $this->load->view("\151\x6e\163\x74\141\x6c\x6c\x2f\146\157\157\164\x65\162");
        goto uZJ0w;
        fzdy5:
        goto F87Nd;
        goto WdvS7;
        Bzsrm:
        F87Nd:
        goto cegG7;
        ldggZ:
        if ($res == "\63") {
            goto V9Qm9;
        }
        goto XuOhP;
        xu51k:
        V9Qm9:
        goto F6T6W;
        rcBaI:
        $res = $this->install->check_installer();
        goto bVVwp;
        fwhPt:
        $data->error = $res;
        goto LYpVR;
        Fp7YT:
        $this->load->view("\151\156\163\x74\141\154\154\57\163\x74\x65\x70");
        goto Dba3u;
        cegG7:
        $data = $this->getSaved();
        goto fwhPt;
        m9d9Z:
        if ($res == "\62") {
            goto GCj8w;
        }
        goto ldggZ;
        jqvYZ:
        r84pT:
        goto uqzYD;
        WdvS7:
        GCj8w:
        goto XFtJt;
        bVVwp:
        if ($res == "\x30") {
            goto xugE8;
        }
        goto m9d9Z;
        XFtJt:
        $data["\x6d\x73\x67"] = "\x73\x65\x62\141\x67\x69\x61\x6e\40\x74\141\x62\145\x6c\x20\x62\145\x6c\165\155\x20\144\151\x62\165\141\164";
        goto ulHbL;
        ulHbL:
        goto F87Nd;
        goto xu51k;
        Lj_CH:
        redirect("\165\160\144\x61\164\145");
        goto jqvYZ;
        XuOhP:
        $data["\x6d\x73\147"] = "\x62\145\154\x75\155\40\x61\x64\x61\x20\144\141\x74\x61\x20\x73\145\153\x6f\154\x61\x68";
        goto fzdy5;
        uqzYD:
    }
    function getSaved()
    {
        goto l0uMJ;
        LfkU8:
        if ($this->db->table_exists("\x75\x73\x65\162\163")) {
            goto PoJzX;
        }
        goto ivgJg;
        XlZIC:
        $data["\x6b\x6f\164\x61"] = '';
        goto sqhGg;
        XEdai:
        $data["\x68\x6f\x73\164\156\141\155\x65"] = $db["\x64\145\x66\141\165\x6c\164"]["\150\157\163\x74\x6e\x61\x6d\x65"];
        goto LztXN;
        Ln2EP:
        $data["\141\x70\154\x69\x6b\141\163\151"] = $setting->nama_aplikasi;
        goto BsPpt;
        HNcjc:
        $data["\163\x61\x74\x75\141\156"] = '';
        goto yvC_8;
        LztXN:
        $data["\165\163\x65\162\156\x61\x6d\145"] = $db["\144\x65\x66\141\165\x6c\x74"]["\165\x73\x65\x72\156\141\x6d\x65"];
        goto miMoY;
        PqcOT:
        $current_page = 2;
        goto LfkU8;
        YVd3L:
        if (!($setting != null)) {
            goto w4bNp;
        }
        goto Ln2EP;
        O3KbZ:
        if (!($admin != null)) {
            goto S0Fvq;
        }
        goto ltQVE;
        cAN7a:
        $data["\165\x73\x65\x72\137\x61\144\x6d\x69\x6e"] = '';
        goto cmJu9;
        AJbPc:
        $database = $db["\144\145\146\141\x75\x6c\164"]["\144\x61\x74\141\142\141\163\145"];
        goto XEdai;
        jhDZg:
        $data["\x70\141\x73\x73\x5f\141\144\155\151\156"] = $admin->password;
        goto kE2T0;
        UqMc0:
        $data["\141\154\141\x6d\x61\164"] = '';
        goto LxZVC;
        ltQVE:
        $data["\x6e\141\155\141\x5f\x61\144\x6d\x69\156"] = $admin->first_name . "\x20" . $admin->last_name;
        goto H3rtF;
        oCqg5:
        $data["\156\x61\155\141\x5f\141\x64\x6d\x69\x6e"] = '';
        goto cAN7a;
        q5SOR:
        $data["\x63\x75\x72\162\145\156\164\x5f\160\x61\147\x65"] = $current_page;
        goto E5Dc3;
        eZxQs:
        $data["\x6a\x65\x6e\x6a\x61\x6e\x67"] = $setting->jenjang;
        goto PEwhj;
        yvC_8:
        $data["\153\x65\160\163\x65\153"] = '';
        goto UqMc0;
        o3K5U:
        $admin = $this->db->get("\165\x73\145\x72\x73")->row();
        goto O3KbZ;
        l0uMJ:
        include APPPATH . "\143\x6f\156\146\x69\x67\x2f\x64\x61\x74\141\142\x61\163\x65\x2e\160\x68\x70";
        goto AJbPc;
        HIZ4c:
        $data["\163\x65\x6b\x6f\x6c\x61\x68"] = '';
        goto LoDEb;
        H3rtF:
        $data["\x75\x73\145\x72\137\141\x64\155\x69\156"] = $admin->username;
        goto jhDZg;
        PfSZQ:
        PoJzX:
        goto o3K5U;
        U9eEg:
        $data["\x64\145\x73\x61"] = $setting->desa;
        goto d52kl;
        PEwhj:
        $data["\x73\x61\x74\165\x61\156"] = $setting->satuan_pendidikan;
        goto cQqK1;
        cmJu9:
        $data["\160\x61\163\163\137\141\x64\x6d\x69\156"] = '';
        goto nrw3B;
        sqhGg:
        $data["\160\162\157\x76"] = '';
        goto PqcOT;
        helGh:
        w4bNp:
        goto Ne7RU;
        Pq2uj:
        $data["\153\145\x63"] = '';
        goto XlZIC;
        LoDEb:
        $data["\152\145\156\x6a\x61\156\x67"] = '';
        goto HNcjc;
        hcyJj:
        $data["\x64\141\x74\141\x62\x61\163\x65"] = $database;
        goto oCqg5;
        hX836:
        goto xSicH;
        goto PfSZQ;
        w3B4R:
        $data["\160\162\x6f\x76"] = $setting->provinsi;
        goto helGh;
        Xr4wV:
        $data["\x6d\163\147"] = "\x54\x61\142\154\145\40\140\165\163\x65\x72\x73\x60\40\142\145\x6c\x75\x6d\x20\144\151\x62\165\141\164";
        goto hX836;
        E5Dc3:
        return json_decode(json_encode($data));
        goto tGPUF;
        cQqK1:
        $data["\153\x65\x70\x73\x65\153"] = $setting->kepsek;
        goto HZ8e2;
        LxZVC:
        $data["\144\x65\163\141"] = '';
        goto Pq2uj;
        miMoY:
        $data["\x70\x61\163\x73\x77\x6f\162\144"] = $db["\x64\x65\146\x61\165\154\x74"]["\x70\x61\163\x73\x77\157\162\144"];
        goto hcyJj;
        BsPpt:
        $data["\x73\145\153\x6f\x6c\x61\x68"] = $setting->sekolah;
        goto eZxQs;
        Vw2P6:
        $setting = $this->dashboard->getSetting();
        goto YVd3L;
        Ne7RU:
        $current_page = $admin == null ? 2 : ($setting == null ? 3 : 4);
        goto rrm27;
        n0KEe:
        $data["\153\157\x74\x61"] = $setting->kota;
        goto w3B4R;
        d52kl:
        $data["\x6b\x65\143"] = $setting->kecamatan;
        goto n0KEe;
        rrm27:
        xSicH:
        goto q5SOR;
        nrw3B:
        $data["\x61\160\154\x69\153\x61\x73\151"] = '';
        goto HIZ4c;
        HZ8e2:
        $data["\x61\x6c\141\x6d\141\x74"] = $setting->alamat;
        goto U9eEg;
        kE2T0:
        S0Fvq:
        goto Vw2P6;
        ivgJg:
        $current_page = 2;
        goto Xr4wV;
        tGPUF:
    }
    public function steps()
    {
        goto MESBI;
        MESBI:
        $data = $this->getSaved();
        goto Xu4Im;
        ukeCS:
        $this->load->view("\x69\x6e\x73\x74\141\154\154\57\x73\x74\145\x70");
        goto WDjzZ;
        WDjzZ:
        $this->load->view("\151\156\163\x74\141\x6c\x6c\57\x66\157\x6f\164\x65\x72");
        goto VBFu2;
        Xu4Im:
        $this->load->view("\x69\156\163\x74\141\x6c\154\57\x68\145\141\x64\145\x72", ["\144\x61\164\x61" => $data]);
        goto ukeCS;
        VBFu2:
    }
    public function checkDatabase()
    {
        goto khHQy;
        mAFEs:
        $data["\150\x6f\x73\164"] = true;
        goto cL2Up;
        ykKNy:
        $data["\x68\157\x73\164\x5f\x6d\163\x67"] = "\164\151\144\x61\153\x20\141\144\x61\x20\141\x6b\163\145\163\x20\153\145\x20\x66\x69\x6c\x65\x20\x64\x61\164\x61\x62\141\x73\145\56\160\150\x70\54\40\x70\x61\x73\164\151\153\x61\156\x20\x70\145\x72\x6d\x69\x73\163\151\x6f\x6e\40\x73\165\x64\141\150\x20\x64\151\172\151\x6e\x6b\141\x6e";
        goto yneSb;
        HbCM4:
        goto AUVV_;
        goto KNlzq;
        eeNK_:
        jWt8q:
        goto ckpGD;
        w0Q7E:
        @chmod($output_path, 0777);
        goto XnvvQ;
        MpZ4G:
        $data["\x68\x6f\x73\164"] = true;
        goto grLZx;
        qlXJQ:
        $new = str_replace("\45\104\101\x54\x41\102\101\123\105\45", $database, $new);
        goto Jl0gs;
        KPgPE:
        if ($this->validate_host($hostname, $hostuser, $database)) {
            goto R__MQ;
        }
        goto d90JN;
        XuLHj:
        $hostuser = $this->input->post("\x68\157\163\164\x75\163\145\162", true);
        goto ZwCDx;
        Ycusf:
        if (fwrite($handle, $new)) {
            goto pQrZ_;
        }
        goto wUVM0;
        aOtPw:
        $data["\x74\141\x62\154\x65"] = $this->create_tables($hostname, $hostuser, $hostpass, $database);
        goto MpZ4G;
        lWsRS:
        $data["\150\x6f\x73\x74\x5f\x6d\x73\147"] = "\164\x69\144\141\153\x20\142\157\154\145\x68\40\x61\144\141\40\171\x61\156\x67\40\x6b\x6f\x73\x6f\x6e\147";
        goto HbCM4;
        b3g3s:
        $new = str_replace("\x25\120\101\123\123\127\x4f\122\104\45", $hostpass, $new);
        goto qlXJQ;
        r92zC:
        $this->output_json($data);
        goto GAm4H;
        sRhc2:
        goto L5s5b;
        goto YmTHm;
        KNlzq:
        R__MQ:
        goto RfnVQ;
        XnvvQ:
        if (is_writable($output_path)) {
            goto wat9q;
        }
        goto EJnjW;
        aCqcW:
        L5s5b:
        goto eeNK_;
        khHQy:
        $hostname = $this->input->post("\150\x6f\x73\164\x6e\x61\x6d\145", true);
        goto XuLHj;
        Jl0gs:
        $handle = fopen($output_path, "\x77\x2b");
        goto w0Q7E;
        grLZx:
        $data["\150\x6f\163\x74\x5f\155\163\147"] = "\x73\165\153\x73\x65\x73";
        goto Sn7Ma;
        hFI71:
        $database_file = file_get_contents($template_path);
        goto UDdHz;
        d90JN:
        $data["\x68\x6f\163\x74"] = false;
        goto lWsRS;
        Clptb:
        $database = $this->input->post("\x64\x61\x74\x61\x62\x61\x73\x65", true);
        goto KPgPE;
        yzEX3:
        $new = str_replace("\x25\125\123\x45\122\x4e\x41\115\105\45", $hostuser, $new);
        goto b3g3s;
        rwEgM:
        wat9q:
        goto Ycusf;
        wUVM0:
        $data["\x68\x6f\163\164"] = false;
        goto U4ZMR;
        YmTHm:
        pQrZ_:
        goto mAFEs;
        MR8cK:
        $data["\144\x61\164\x61\x62\141\163\145"] = $this->create_database($hostname, $hostuser, $hostpass, $database);
        goto aOtPw;
        Sn7Ma:
        $data["\x64\141\x74\141\x62\141\163\145"] = true;
        goto aCqcW;
        ckpGD:
        AUVV_:
        goto r92zC;
        ZwCDx:
        $hostpass = $this->input->post("\x68\x6f\163\164\x70\x61\x73\x73", true);
        goto Clptb;
        cL2Up:
        $data["\150\157\x73\164\137\x6d\163\147"] = "\x62\x65\150\141\163\x69\154";
        goto MR8cK;
        RfnVQ:
        $template_path = "\x2e\x2f\x61\163\x73\145\164\163\x2f\x61\160\x70\57\144\142\57\x64\141\x74\141\x62\x61\x73\145\56\160\x68\x70";
        goto QiLsM;
        U4ZMR:
        $data["\150\157\163\x74\137\155\x73\x67"] = "\147\x61\147\x61\x6c\40\x6d\145\155\x62\x75\141\164\40\x6e\x61\155\141\x20\x64\141\x74\x61\142\141\x73\145";
        goto sRhc2;
        QiLsM:
        $output_path = APPPATH . "\x63\x6f\156\146\x69\147\57\x64\x61\164\141\x62\x61\163\x65\56\x70\x68\x70";
        goto hFI71;
        EJnjW:
        $data["\x68\157\x73\x74"] = false;
        goto ykKNy;
        yneSb:
        goto jWt8q;
        goto rwEgM;
        UDdHz:
        $new = str_replace("\x25\x48\117\x53\124\116\101\115\105\45", $hostname, $database_file);
        goto yzEX3;
        GAm4H:
    }
    public function createDb()
    {
        goto dhIVJ;
        DYyYe:
        $data["\x68\157\163\x74"] = true;
        goto o3Q0X;
        F1x5l:
        goto FFMYc;
        goto ALtAt;
        Xltm5:
        if ($page == "\x30") {
            goto ap0X4;
        }
        goto DYyYe;
        oyHZS:
        $data["\x74\x61\x62\154\145"] = false;
        goto F1x5l;
        aRsz3:
        $this->output_json($data);
        goto dK4I3;
        dhIVJ:
        $page = $this->input->post("\x70\141\x67\x65", true);
        goto Xltm5;
        T4lJw:
        $data["\x74\x61\x62\154\145"] = $this->create_tables($hostname, $hostuser, $hostpass, $database);
        goto kRv8M;
        iIjro:
        FFMYc:
        goto aRsz3;
        Mvy51:
        $hostname = $this->input->post("\x68\x6f\x73\x74\156\141\x6d\145", true);
        goto TjI4T;
        V7jDn:
        $data["\144\x61\x74\x61\142\x61\163\145"] = true;
        goto iIjro;
        o3Q0X:
        $data["\x68\x6f\163\164\137\155\163\147"] = "\163\x74\145\x70\40\x73\141\x6c\141\150";
        goto AaVSV;
        v_jpv:
        $database = $this->input->post("\144\x61\164\x61\142\141\x73\x65", true);
        goto T4lJw;
        QaDKG:
        $data["\150\157\163\164\137\x6d\163\147"] = "\x73\165\153\x73\x65\x73";
        goto V7jDn;
        kRv8M:
        $data["\150\x6f\x73\164"] = true;
        goto QaDKG;
        ygePs:
        $hostpass = $this->input->post("\150\157\x73\164\x70\141\163\163", true);
        goto v_jpv;
        AaVSV:
        $data["\144\141\164\x61\x62\x61\163\x65"] = false;
        goto oyHZS;
        TjI4T:
        $hostuser = $this->input->post("\x68\157\163\x74\x75\163\x65\162", true);
        goto ygePs;
        ALtAt:
        ap0X4:
        goto Mvy51;
        dK4I3:
    }
    function validate_host($host, $usr, $db)
    {
        return !empty($host) && !empty($usr) && !empty($db);
    }
    function create_database($hostname, $hostuser, $hostpass, $database)
    {
        goto EMptE;
        JQq2L:
        return true;
        goto tHEOj;
        GXGUD:
        $mysqli->close();
        goto JQq2L;
        EMptE:
        $mysqli = new mysqli($hostname, $hostuser, $hostpass, '');
        goto fiAiC;
        I3Ss9:
        Xy1Zp:
        goto KC8G1;
        fiAiC:
        if (!mysqli_connect_errno()) {
            goto Xy1Zp;
        }
        goto YZ86o;
        YZ86o:
        return false;
        goto I3Ss9;
        KC8G1:
        $mysqli->query("\x43\x52\x45\101\x54\x45\x20\x44\101\x54\x41\102\x41\x53\x45\x20\111\106\40\116\x4f\x54\40\x45\130\x49\123\x54\x53\40" . $database);
        goto GXGUD;
        tHEOj:
    }
    function create_tables($hostname, $hostuser, $hostpass, $database)
    {
        goto Cpsof;
        Cpsof:
        $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database);
        goto HPHV3;
        HPHV3:
        if (!mysqli_connect_errno()) {
            goto orsoG;
        }
        goto pCxVO;
        Y2TRF:
        $query = file_get_contents("\56\57\141\163\163\145\164\x73\x2f\141\160\x70\57\x64\142\x2f\x6d\141\163\x74\x65\x72\x2e\x73\161\x6c");
        goto Urs2E;
        ISCg0:
        return true;
        goto kT1bB;
        pCxVO:
        return false;
        goto DuQeo;
        DuQeo:
        orsoG:
        goto Y2TRF;
        Urs2E:
        $mysqli->multi_query($query);
        goto w9kzs;
        w9kzs:
        $mysqli->close();
        goto ISCg0;
        kT1bB:
    }
    public function createSetting()
    {
        goto hfwY2;
        x_9mR:
        $kota = $this->input->post("\153\157\164\141", true);
        goto RqFjp;
        YvNln:
        $this->output_json($data);
        goto uCvGl;
        cdC3q:
        $alamat = $this->input->post("\141\x6c\141\x6d\141\x74", true);
        goto x_9mR;
        XHcD8:
        $sekolah = $this->input->post("\156\x61\155\141\x5f\x73\x65\153\x6f\154\x61\150", true);
        goto sVkNu;
        sVkNu:
        $jenjang = $this->input->post("\x6a\x65\x6e\152\x61\x6e\147", true);
        goto jqu6l;
        iRsZK:
        $tlp = $this->input->post("\x74\154\x70", true);
        goto LKNkr;
        zgFpk:
        $desa = $this->input->post("\144\x65\x73\141", true);
        goto iRsZK;
        hfwY2:
        $nama_aplikasi = $this->input->post("\156\x61\155\141\x5f\141\x70\154\x69\x6b\141\x73\x69", true);
        goto XHcD8;
        LKNkr:
        $insert = ["\151\144\137\163\145\164\164\x69\x6e\147" => 1, "\x73\x65\153\x6f\154\x61\x68" => $sekolah, "\x6a\x65\156\x6a\x61\156\147" => $jenjang, "\x73\141\x74\165\141\x6e\x5f\x70\x65\156\144\x69\144\x69\153\141\156" => $satuan_pendidikan, "\x61\x6c\x61\x6d\141\164" => $alamat, "\144\x65\163\141" => $desa, "\153\x6f\x74\x61" => $kota, "\x6b\x65\x63\141\x6d\141\164\x61\156" => $kec, "\x74\x65\x6c\x70" => $tlp, "\x6b\145\160\163\x65\153" => $kepsek, "\x6e\141\x6d\141\x5f\141\160\x6c\151\x6b\x61\163\151" => $nama_aplikasi];
        goto YzrMO;
        YzrMO:
        $data["\151\156\163\x65\162\164"] = $this->db->insert("\x73\145\164\164\151\156\x67", $insert);
        goto mKtNY;
        AzXvi:
        $kepsek = $this->input->post("\x6b\145\160\163\x65\x6b", true);
        goto cdC3q;
        mKtNY:
        $data["\x73\141\166\145\x64"] = $this->getSaved();
        goto YvNln;
        RqFjp:
        $kec = $this->input->post("\153\145\143", true);
        goto zgFpk;
        jqu6l:
        $satuan_pendidikan = $this->input->post("\163\141\x74\165\x61\x6e\137\x70\145\x6e\x64\x69\144\151\x6b\x61\156", true);
        goto AzXvi;
        uCvGl:
    }
    public function createAdmin()
    {
        goto HxrwW;
        wbUDp:
        $additional_data = ["\x66\151\x72\x73\164\x5f\x6e\141\x6d\x65" => $first_name, "\x6c\141\x73\x74\137\x6e\141\155\x65" => $last_name];
        goto ZulzW;
        sEx2x:
        $last_name = end($namaAdmin);
        goto wbUDp;
        HxrwW:
        $nama = $this->input->post("\156\x61\155\141\x5f\154\x65\x6e\147\153\x61\x70", true);
        goto kvQ3x;
        x7tJT:
        $email = strtolower($nama) . "\100\x61\x64\x6d\x69\x6e\56\x63\x6f\x6d";
        goto W6gsh;
        WNi2x:
        $this->output_json($data);
        goto meEWT;
        lM5sH:
        $namaAdmin = explode("\x20", $nama);
        goto B165u;
        ywU38:
        $password = $this->input->post("\160\x61\163\x73\167\157\162\144", true);
        goto lM5sH;
        B165u:
        $first_name = $namaAdmin[0];
        goto sEx2x;
        W6gsh:
        $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto EDJf6;
        EDJf6:
        $data["\141\x64\155\x69\156"] = $create;
        goto WNi2x;
        ZulzW:
        $group = array("\x31");
        goto x7tJT;
        kvQ3x:
        $username = $this->input->post("\x75\x73\145\162\x6e\x61\x6d\x65", true);
        goto ywU38;
        meEWT:
    }
    public function createApp()
    {
        goto DBYIV;
        i4A7A:
        $this->output_json($data);
        goto ti1eI;
        vYiA_:
        $group = array("\x31");
        goto ps1VQ;
        DVnLZ:
        $last_name = end($namaAdmin);
        goto sehjm;
        Oj8ON:
        $data["\x61\x64\155\151\156"] = $create;
        goto i4A7A;
        UCo8T:
        $create = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto Ra86D;
        ps1VQ:
        $email = strtolower($nama) . "\100\141\144\x6d\x69\156\56\x63\x6f\x6d";
        goto UCo8T;
        geA92:
        $nama_aplikasi = $this->input->post("\x6e\x61\x6d\x61\x5f\x61\160\154\151\x6b\x61\x73\x69", true);
        goto Y2lbW;
        Y2HY5:
        $insert = ["\x69\x64\x5f\163\145\164\164\x69\156\x67" => 1, "\163\x65\153\x6f\154\141\150" => $sekolah, "\152\x65\156\x6a\141\x6e\147" => $jenjang, "\x73\141\x74\165\141\x6e\x5f\x70\145\156\x64\x69\x64\x69\153\x61\x6e" => $satuan_pendidikan, "\141\x6c\141\x6d\141\x74" => $alamat, "\144\145\163\141" => $desa, "\153\x6f\x74\x61" => $kota, "\153\x65\x63\x61\155\141\164\141\156" => $kec, "\x70\162\157\x76\x69\x6e\x73\151" => $prov, "\153\x65\x70\x73\145\153" => $kepsek, "\x6e\x61\155\141\x5f\141\160\x6c\151\x6b\141\163\x69" => $nama_aplikasi];
        goto JlHnu;
        A_hwT:
        $password = $this->input->post("\160\141\163\x73\x77\x6f\162\x64", true);
        goto geA92;
        DBYIV:
        $nama = $this->input->post("\x6e\x61\155\x61\137\154\x65\x6e\147\153\141\x70", true);
        goto kizbw;
        Ra86D:
        $data["\151\156\x73\145\x72\x74"] = $this->db->insert("\x73\145\x74\x74\x69\x6e\x67", $insert);
        goto Oj8ON;
        O2kNs:
        $kota = $this->input->post("\x6b\x6f\164\x61", true);
        goto KdZhU;
        Y2lbW:
        $sekolah = $this->input->post("\156\x61\x6d\141\x5f\163\145\x6b\157\x6c\x61\150", true);
        goto FXBte;
        kNKEX:
        $satuan_pendidikan = $this->input->post("\x73\x61\164\165\x61\x6e", true);
        goto u_mWF;
        YU11H:
        $alamat = $this->input->post("\141\x6c\x61\x6d\x61\164", true);
        goto O2kNs;
        gAI6q:
        $desa = $this->input->post("\x64\x65\163\x61", true);
        goto ZHxau;
        ZHxau:
        $prov = $this->input->post("\x70\162\x6f\166", true);
        goto Y2HY5;
        kizbw:
        $username = $this->input->post("\165\x73\x65\162\x6e\x61\x6d\145", true);
        goto A_hwT;
        gvWBz:
        $first_name = $namaAdmin[0];
        goto DVnLZ;
        sehjm:
        $additional_data = ["\x66\x69\162\x73\x74\137\156\x61\x6d\x65" => $first_name, "\154\x61\x73\x74\137\156\x61\x6d\145" => $last_name];
        goto vYiA_;
        JlHnu:
        $namaAdmin = explode("\40", $nama);
        goto gvWBz;
        u_mWF:
        $kepsek = $this->input->post("\x6b\x65\160\x73\x65\x6b", true);
        goto YU11H;
        FXBte:
        $jenjang = $this->input->post("\x6a\x65\156\x6a\x61\156\x67", true);
        goto kNKEX;
        KdZhU:
        $kec = $this->input->post("\x6b\x65\143", true);
        goto gAI6q;
        ti1eI:
    }
}
