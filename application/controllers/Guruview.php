<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\x53\105\120\101\124\110") or exit("\x4e\157\x20\x64\x69\x72\145\143\164\x20\x73\143\162\151\160\x74\40\141\143\143\145\x73\163\40\x61\x6c\154\x6f\167\x65\x64");
class Guruview extends CI_Controller
{
    public function __construct()
    {
        goto lJXfU;
        pQy2r:
        $this->load->library(["\x64\x61\x74\x61\x74\141\142\x6c\x65\x73", "\x66\157\162\155\x5f\166\141\154\x69\x64\x61\164\x69\x6f\x6e"]);
        goto Xgky9;
        Xgky9:
        $this->form_validation->set_error_delimiters('', '');
        goto QB9ue;
        n9znX:
        $this->load->model("\x4d\x61\163\x74\145\x72\x5f\155\157\144\x65\154", "\x6d\141\x73\x74\145\162");
        goto bWv_J;
        lJXfU:
        parent::__construct();
        goto KdfxF;
        iBrZ0:
        redirect("\x61\165\164\x68");
        goto ROARV;
        QB9ue:
        $this->load->model("\x44\141\x73\x68\142\157\x61\162\144\x5f\155\x6f\144\x65\x6c", "\144\x61\x73\150\x62\157\x61\162\x64");
        goto n9znX;
        Uj4E0:
        $this->load->library("\x75\160\x6c\157\141\144");
        goto pQy2r;
        KdfxF:
        if ($this->ion_auth->logged_in()) {
            goto xM0_F;
        }
        goto iBrZ0;
        ROARV:
        xM0_F:
        goto Uj4E0;
        bWv_J:
    }
    public function output_json($data, $encode = true)
    {
        goto sZpTn;
        QKklB:
        $data = json_encode($data);
        goto gDaPS;
        gDaPS:
        BXfcW:
        goto IR0Fb;
        sZpTn:
        if (!$encode) {
            goto BXfcW;
        }
        goto QKklB;
        IR0Fb:
        $this->output->set_content_type("\x61\160\160\154\x69\143\x61\164\x69\x6f\x6e\x2f\152\163\157\156")->set_output($data);
        goto LIS5C;
        LIS5C:
    }
    public function index()
    {
        goto tISK1;
        uhPcc:
        $this->load->view("\155\x65\x6d\142\x65\162\x73\x2f\x67\x75\x72\165\57\x74\145\155\160\x6c\x61\164\145\x73\x2f\x66\157\x6f\164\145\162");
        goto VRsbK;
        II7hk:
        $data["\x74\x70\137\x61\x63\164\151\166\145"] = $tp;
        goto ArLWG;
        LywRJ:
        $data["\x69\156\160\165\x74\137\141\x6c\x61\x6d\141\x74"] = json_decode(json_encode($inputsAlamat), FALSE);
        goto SYHkx;
        GWrXl:
        hBORX:
        goto PynSm;
        yr3E0:
        $smt = $this->master->getSemesterActive();
        goto q5TUN;
        SYHkx:
        $this->load->view("\155\x65\x6d\142\145\x72\163\x2f\147\x75\x72\165\x2f\164\145\155\160\x6c\x61\x74\x65\x73\57\150\145\141\144\x65\x72", $data);
        goto Nx7GL;
        Cuiz2:
        $data["\x69\156\160\165\x74\x5f\160\x72\157\146\x69\154\x65"] = json_decode(json_encode($inputsProfile), FALSE);
        goto LywRJ;
        zWACk:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto II7hk;
        q5TUN:
        $user = $this->ion_auth->user()->row();
        goto dfMCT;
        tISK1:
        $tp = $this->master->getTahunActive();
        goto yr3E0;
        RppxH:
        redirect("\x61\165\x74\150");
        goto GWrXl;
        ArLWG:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto BTvvz;
        dfMCT:
        $guru = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto LEJo6;
        Nx7GL:
        $this->load->view("\155\x65\155\142\145\x72\163\57\147\x75\x72\165\57\160\x72\x6f\x66\151\x6c\x65");
        goto uhPcc;
        BTvvz:
        $data["\163\155\164\x5f\x61\143\x74\151\166\145"] = $smt;
        goto zvjwE;
        LEJo6:
        if (!($user == null)) {
            goto hBORX;
        }
        goto RppxH;
        PynSm:
        $data = ["\x75\163\145\x72" => $user, "\152\165\144\165\x6c" => "\120\162\x6f\146\x69\154\x65", "\x73\x75\x62\x6a\165\x64\x75\x6c" => "\x50\162\x6f\x66\x69\x6c\145\40\x53\x61\x79\141", "\x73\x65\164\164\151\156\x67" => $this->dashboard->getSetting()];
        goto zWACk;
        OuV2M:
        $inputsProfile = [["\154\141\142\x65\154" => "\116\x61\x6d\x61\40\114\145\x6e\x67\153\x61\160", "\x6e\141\155\x65" => "\x6e\141\155\141\x5f\147\165\162\165", "\166\x61\154\x75\x65" => $guru->nama_guru, "\x69\143\157\156" => "\x66\x61\x72\x20\146\x61\55\x75\x73\x65\162", "\164\x79\160\145" => "\x74\145\170\x74"], ["\x6c\141\142\x65\154" => "\105\155\141\151\154", "\x6e\x61\x6d\145" => "\145\x6d\x61\151\x6c", "\x76\x61\154\x75\x65" => $guru->email, "\151\x63\x6f\x6e" => "\x66\x61\162\x20\x66\141\x2d\x65\x6e\x76\145\154\x6f\160\x65", "\164\x79\160\x65" => "\x74\x65\x78\x74"], ["\x6c\141\x62\x65\x6c" => "\116\111\x50\40\x2f\x20\116\125\120\x54\113", "\x6e\x61\155\x65" => "\x6e\151\x70", "\166\141\x6c\x75\x65" => $guru->nip, "\x69\x63\x6f\x6e" => "\146\x61\x72\x20\x66\141\x2d\151\x64\x2d\x63\141\x72\x64", "\x74\x79\160\x65" => "\156\165\155\142\145\162"], ["\154\x61\x62\x65\154" => "\112\145\156\151\x73\x20\x4b\x65\154\x61\x6d\x69\x6e", "\x6e\x61\155\145" => "\x6a\145\x6e\151\x73\137\x6b\x65\x6c\141\155\151\x6e", "\166\x61\154\x75\x65" => $guru->jenis_kelamin, "\x69\x63\157\156" => "\146\x61\163\40\x66\141\x2d\166\x65\156\x75\163\55\x6d\141\162\x73", "\164\171\160\145" => "\164\145\x78\164"], ["\154\141\142\x65\154" => "\x4e\157\56\x20\110\x61\156\x64\x70\x68\157\156\145", "\156\141\x6d\x65" => "\156\x6f\x5f\x68\160", "\166\x61\x6c\x75\145" => $guru->no_hp, "\x69\x63\x6f\x6e" => "\x66\x61\x20\146\x61\55\160\150\x6f\x6e\x65", "\164\171\160\145" => "\156\165\x6d\142\145\x72"], ["\x6c\x61\x62\145\154" => "\x41\147\x61\155\141", "\156\x61\155\x65" => "\x61\x67\141\x6d\x61", "\166\x61\154\165\145" => $guru->agama, "\x69\143\x6f\156" => "\146\x61\162\40\146\x61\55\165\x73\x65\x72", "\x74\x79\x70\145" => "\x74\x65\x78\x74"]];
        goto Uz0DW;
        Uz0DW:
        $inputsAlamat = [["\154\141\142\145\x6c" => "\116\111\113", "\156\141\x6d\x65" => "\156\x6f\x5f\x6b\x74\160", "\x76\141\x6c\x75\x65" => $guru->no_ktp, "\151\x63\x6f\156" => "\146\x61\162\40\x66\x61\x2d\151\x64\55\143\141\x72\144", "\x74\171\160\x65" => "\156\165\x6d\142\145\162"], ["\154\x61\x62\145\154" => "\x54\x65\x6d\x70\x61\x74\x20\x4c\141\150\x69\162", "\156\x61\x6d\145" => "\164\x65\x6d\x70\141\x74\137\154\x61\x68\x69\x72", "\x76\141\154\x75\x65" => $guru->tempat_lahir, "\x69\x63\157\x6e" => "\146\141\x20\x66\x61\x2d\155\x61\x70\55\x6d\x61\162\153\145\x72", "\x74\x79\x70\145" => "\x74\x65\170\x74"], ["\154\141\x62\x65\x6c" => "\x54\147\x6c\x2e\x20\x4c\x61\x68\x69\162", "\x6e\x61\x6d\x65" => "\164\x67\154\x5f\x6c\141\150\x69\162", "\166\x61\x6c\165\x65" => $guru->tgl_lahir, "\x69\143\x6f\156" => "\146\x61\x20\x66\141\55\x63\x61\x6c\x65\156\x64\x61\x72", "\x74\x79\160\x65" => "\x74\145\x78\x74"], ["\x6c\141\x62\145\x6c" => "\x41\x6c\141\155\141\x74", "\156\141\155\145" => "\x61\x6c\x61\155\141\164\x5f\x6a\141\154\141\156", "\x76\141\154\x75\x65" => $guru->alamat_jalan, "\151\x63\x6f\x6e" => "\146\141\x20\x66\141\55\x6d\141\x70\x2d\x6d\x61\162\x6b\x65\162", "\x74\171\x70\145" => "\164\145\x78\x74"], ["\154\x61\x62\x65\x6c" => "\113\145\143\141\155\141\164\141\x6e", "\x6e\x61\x6d\x65" => "\153\x65\143\141\155\x61\x74\141\x6e", "\166\x61\x6c\165\145" => $guru->kecamatan, "\151\x63\x6f\156" => "\x66\141\40\146\x61\55\155\141\160\x2d\155\x61\162\153\x65\x72", "\x74\x79\160\145" => "\164\x65\170\164"], ["\154\141\142\x65\154" => "\113\157\x74\141\57\113\x61\142\x2e", "\x6e\141\x6d\145" => "\153\x61\142\165\160\141\164\145\156", "\166\141\154\x75\x65" => $guru->kabupaten, "\151\x63\x6f\156" => "\146\x61\x20\x66\x61\x2d\155\141\160\x2d\155\141\x72\153\x65\162", "\x74\171\x70\145" => "\164\145\x78\x74"], ["\x6c\x61\142\x65\154" => "\x50\x72\157\166\x69\x6e\163\151", "\x6e\141\155\145" => "\160\x72\157\x76\x69\x6e\x73\151", "\x76\x61\154\x75\x65" => $guru->provinsi, "\151\x63\157\156" => "\146\141\40\x66\141\x2d\155\141\160\55\155\141\162\153\x65\x72", "\x74\171\160\x65" => "\x74\145\x78\164"], ["\154\x61\142\145\x6c" => "\113\x6f\x64\145\40\120\157\x73", "\x6e\141\x6d\145" => "\153\157\x64\145\137\160\157\x73", "\x76\141\154\165\145" => $guru->kode_pos, "\x69\x63\x6f\156" => "\146\x61\x20\146\141\x2d\x65\156\x76\145\154\x6f\160\145", "\164\x79\160\x65" => "\156\165\155\142\145\162"]];
        goto Cuiz2;
        zvjwE:
        $data["\x67\x75\162\165"] = $guru;
        goto OuV2M;
        VRsbK:
    }
    public function save()
    {
        goto zBL0p;
        Lxhsn:
        $input = ["\x6e\x69\160" => $nip, "\x6e\x61\155\141\137\x67\x75\x72\x75" => $nama_guru, "\x65\155\141\x69\154" => $email, "\x6a\145\156\x69\x73\137\153\145\154\x61\x6d\x69\x6e" => $jenis_kelamin, "\156\157\x5f\x68\160" => $no_hp, "\141\147\x61\x6d\x61" => $agama, "\x6e\x6f\137\x6b\164\x70" => $no_ktp, "\x74\x65\x6d\160\x61\164\137\x6c\x61\150\x69\x72" => $tempat_lahir, "\x74\x67\x6c\x5f\154\141\x68\151\162" => $this->strContains($tgl_lahir, "\60\60\x30\x30\55") ? null : $tgl_lahir, "\x61\x6c\x61\155\x61\164\x5f\x6a\141\154\x61\x6e" => $alamat_jalan, "\x6b\145\143\x61\155\141\164\141\156" => $kecamatan, "\153\141\142\x75\160\x61\x74\x65\x6e" => $kabupaten, "\160\x72\157\166\x69\x6e\x73\151" => $provinsi, "\x6b\157\x64\145\137\x70\x6f\x73" => $kode_pos];
        goto gFMHl;
        uf_KU:
        if ($this->form_validation->run() == FALSE) {
            goto a1hcn;
        }
        goto Lxhsn;
        fJhLZ:
        $agama = $this->input->post("\141\x67\141\155\141", true);
        goto XGLVW;
        Nuw1p:
        $tp = $this->master->getTahunActive();
        goto g0qtZ;
        FS8Yo:
        $dbdata = $this->master->getGuruById($id_guru, $tp->id_tp, $smt->id_smt);
        goto UgvwQ;
        Gprjt:
        $provinsi = $this->input->post("\160\162\x6f\x76\x69\x6e\163\151", true);
        goto HkzmZ;
        fHY3d:
        $tempat_lahir = $this->input->post("\164\145\155\x70\141\x74\x5f\154\x61\150\x69\x72", true);
        goto yWN1Y;
        xIhUP:
        $no_hp = $this->input->post("\156\157\x5f\x68\160", true);
        goto fJhLZ;
        arS4g:
        l2PB5:
        goto S5v3t;
        g0qtZ:
        $smt = $this->master->getSemesterActive();
        goto FS8Yo;
        Tg1DV:
        goto l2PB5;
        goto l4_7t;
        yWN1Y:
        $tgl_lahir = $this->input->post("\x74\147\x6c\x5f\x6c\x61\x68\151\162", true);
        goto HkAGG;
        XGLVW:
        $no_ktp = $this->input->post("\x6e\157\x5f\x6b\x74\x70", true);
        goto fHY3d;
        dEa4l:
        $this->output_json(["\x73\164\x61\164\x75\163" => false]);
        goto Tg1DV;
        lHIV8:
        $this->output_json($data);
        goto mSkUL;
        CIs82:
        $this->form_validation->set_rules("\156\x69\x70", "\116\x49\x50", "\162\145\161\x75\x69\162\145\x64\x7c\x6e\165\x6d\145\x72\151\x63\174\164\x72\151\155\174\x6d\x69\156\x5f\x6c\145\156\147\x74\x68\133\x38\135\174\155\141\x78\x5f\154\x65\x6e\147\x74\150\x5b\x33\x30\x5d" . $u_nip);
        goto fTtX0;
        gvEg6:
        $email = $this->input->post("\145\x6d\x61\x69\154", true);
        goto Was4m;
        qywxS:
        $nama_guru = $this->input->post("\x6e\141\x6d\x61\x5f\147\x75\x72\165", true);
        goto gvEg6;
        Was4m:
        $jenis_kelamin = $this->input->post("\152\145\156\151\163\x5f\x6b\x65\x6c\141\x6d\151\x6e", true);
        goto xIhUP;
        fTtX0:
        $this->form_validation->set_rules("\x6e\141\155\x61\x5f\x67\x75\162\x75", "\x4e\x61\155\x61\40\107\x75\x72\x75", "\162\145\161\x75\151\x72\145\x64\x7c\164\x72\x69\155\174\x6d\151\x6e\137\x6c\145\x6e\x67\x74\150\x5b\61\135\174\155\141\170\137\154\145\156\147\164\x68\133\x35\x30\135");
        goto uf_KU;
        l4_7t:
        MUPjT:
        goto G_z1D;
        UgvwQ:
        $u_nip = $dbdata->nip === $nip ? '' : "\174\x69\x73\137\165\x6e\x69\161\x75\145\x5b\155\141\x73\x74\x65\x72\x5f\x67\165\162\x75\56\x6e\x69\x70\135";
        goto CIs82;
        zBL0p:
        $id_guru = $this->input->post("\151\x64\137\x67\x75\x72\x75", true);
        goto vCoxU;
        S5v3t:
        goto EKa_z;
        goto VjMZp;
        G_z1D:
        $this->output_json(["\163\x74\x61\164\x75\x73" => true]);
        goto arS4g;
        HkAGG:
        $alamat_jalan = $this->input->post("\x61\x6c\x61\x6d\x61\164\137\x6a\x61\154\141\x6e", true);
        goto NAAO0;
        mSkUL:
        EKa_z:
        goto nOxAb;
        cbbDg:
        $data = ["\x73\x74\141\x74\x75\163" => false, "\x65\x72\162\157\162\x73" => ["\x6e\x69\x70" => form_error("\156\x69\x70"), "\x6e\x61\155\141\137\147\x75\x72\165" => form_error("\156\141\155\x61\x5f\x67\x75\162\x75")]];
        goto lHIV8;
        NAAO0:
        $kecamatan = $this->input->post("\x6b\145\x63\141\155\141\x74\x61\x6e", true);
        goto IKWUk;
        x68M4:
        if ($action) {
            goto MUPjT;
        }
        goto dEa4l;
        VjMZp:
        a1hcn:
        goto cbbDg;
        HkzmZ:
        $kode_pos = $this->input->post("\153\157\144\145\x5f\160\157\163", true);
        goto Nuw1p;
        gFMHl:
        $action = $this->master->update("\x6d\141\x73\164\145\162\x5f\x67\x75\x72\x75", $input, "\151\x64\137\x67\x75\x72\x75", $id_guru);
        goto x68M4;
        vCoxU:
        $nip = $this->input->post("\156\151\160", true);
        goto qywxS;
        IKWUk:
        $kabupaten = $this->input->post("\153\141\x62\165\160\141\x74\x65\x6e", true);
        goto Gprjt;
        nOxAb:
    }
    function strContains($string, $val)
    {
        return strpos($string, $val) !== false;
    }
    function uploadFile($id_guru)
    {
        goto EY7gF;
        AGtps:
        $this->upload->initialize($config);
        goto rMCCn;
        pAwQk:
        $this->output_json($data);
        goto l0IUr;
        v6qr9:
        if (isset($_FILES["\146\157\x74\x6f"]["\x6e\141\x6d\145"])) {
            goto D3tIx;
        }
        goto hKcKY;
        C6pdX:
        goto AEcEN;
        goto Yx13c;
        cEibT:
        fn_Dr:
        goto bmU5j;
        Fudiv:
        goto WcKZQ;
        goto cEibT;
        Yx13c:
        D3tIx:
        goto ugmvZ;
        rMCCn:
        if (!$this->upload->do_upload("\x66\157\x74\157")) {
            goto fn_Dr;
        }
        goto b51Cd;
        srh_z:
        $config["\x66\151\154\x65\137\x6e\141\155\x65"] = $guru->nip;
        goto AGtps;
        hKcKY:
        $data["\163\x72\143"] = '';
        goto C6pdX;
        kuvyq:
        $data["\163\162\x63"] = $this->upload->display_errors();
        goto nP0oc;
        b51Cd:
        $result = $this->upload->data();
        goto sEz8M;
        SJomh:
        $this->db->update("\155\x61\x73\x74\145\x72\137\x67\x75\162\165");
        goto Fudiv;
        r0aO0:
        $data["\x73\164\141\164\x75\x73"] = true;
        goto rznxo;
        rznxo:
        $this->db->set("\146\157\x74\x6f", "\165\x70\154\x6f\141\144\x73\57\x70\x72\x6f\x66\x69\x6c\x65\163\x2f" . $result["\146\151\154\145\x5f\156\x61\155\145"]);
        goto IT1yI;
        PMm03:
        $data["\x73\151\x7a\145"] = $_FILES["\146\157\x74\157"]["\163\x69\x7a\145"];
        goto V20F_;
        DvJbk:
        $config["\157\166\145\162\167\x72\x69\164\145"] = true;
        goto srh_z;
        IT1yI:
        $this->db->where("\151\x64\x5f\147\x75\162\x75", $id_guru);
        goto SJomh;
        sEz8M:
        $data["\163\162\143"] = base_url() . "\165\160\x6c\157\141\144\x73\x2f\160\162\x6f\x66\x69\154\145\163\x2f" . $result["\x66\x69\x6c\x65\137\x6e\x61\x6d\145"];
        goto F_Phf;
        ugmvZ:
        $config["\165\x70\x6c\x6f\x61\x64\137\160\x61\164\150"] = "\56\57\165\160\x6c\x6f\141\144\x73\x2f\160\162\x6f\146\x69\x6c\145\x73\x2f";
        goto Kbaqw;
        EY7gF:
        $guru = $this->master->getGuruById($id_guru);
        goto v6qr9;
        V20F_:
        AEcEN:
        goto pAwQk;
        nP0oc:
        WcKZQ:
        goto r2f8g;
        F_Phf:
        $data["\146\151\154\x65\x6e\x61\155\145"] = pathinfo($result["\x66\151\154\145\x5f\156\141\155\145"], PATHINFO_FILENAME);
        goto r0aO0;
        bmU5j:
        $data["\x73\164\x61\x74\165\163"] = false;
        goto kuvyq;
        r2f8g:
        $data["\164\171\160\145"] = $_FILES["\x66\157\x74\x6f"]["\164\x79\x70\145"];
        goto PMm03;
        Kbaqw:
        $config["\x61\x6c\x6c\157\x77\145\x64\137\164\171\x70\145\163"] = "\147\x69\146\x7c\x6a\x70\x67\174\160\156\x67\174\152\160\x65\147\x7c\x4a\x50\105\107\x7c\112\120\x47\x7c\120\x4e\x47\x7c\x47\x49\106";
        goto DvJbk;
        l0IUr:
    }
    function deleteFile($id_guru)
    {
        goto IEnTF;
        iOhLS:
        $this->db->update("\155\141\x73\164\145\x72\x5f\147\x75\162\x75");
        goto OPDlp;
        IQqDf:
        $this->db->set("\x66\x6f\x74\157", '');
        goto FA5GL;
        HPOGp:
        $file_name = str_replace(base_url(), '', $src);
        goto iFUdo;
        IEnTF:
        $src = $this->input->get("\x73\162\x63");
        goto HPOGp;
        iFUdo:
        if (!($file_name != "\x75\x73\x65\162\x2e\x6a\160\147")) {
            goto iTe3K;
        }
        goto duvsE;
        duvsE:
        if (!unlink($file_name)) {
            goto shjLG;
        }
        goto IQqDf;
        LQU9W:
        iTe3K:
        goto v2sgc;
        FA5GL:
        $this->db->where("\x69\144\137\147\165\162\x75", $id_guru);
        goto iOhLS;
        Yq5sX:
        shjLG:
        goto LQU9W;
        OPDlp:
        echo "\106\x69\154\145\40\x44\145\x6c\x65\164\x65\x20\123\165\143\x63\145\x73\163\x66\x75\x6c\x6c\171";
        goto Yq5sX;
        v2sgc:
    }
}
