<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\x41\x53\x45\120\x41\124\110") or exit("\116\x6f\40\x64\x69\162\145\x63\x74\x20\x73\x63\x72\x69\x70\x74\40\141\x63\x63\145\x73\x73\x20\x61\154\x6c\157\167\145\144");
class Settings extends CI_Controller
{
    public function __construct()
    {
        goto oIHUt;
        mWZwI:
        goto vw9Lx;
        goto iRAPl;
        HfA3o:
        $this->load->model("\x53\145\x74\x74\x69\x6e\147\x73\x5f\155\x6f\144\x65\x6c", "\x73\x65\164\164\x69\x6e\147\x73");
        goto hXQc5;
        oIHUt:
        parent::__construct();
        goto aY0zz;
        H25pe:
        vw9Lx:
        goto fx7Bl;
        K6aE6:
        show_error("\110\141\x6e\x79\x61\40\x41\x64\x6d\x69\x6e\40\x79\x61\x6e\147\x20\142\x6f\x6c\x65\x68\40\x6d\x65\156\147\141\153\x73\145\x73\x20\150\x61\x6c\141\x6d\x61\156\40\151\x6e\151", 403, "\x41\153\163\x65\x73\x20\144\x69\154\x61\162\141\156\147");
        goto tGwoU;
        aY0zz:
        if (!$this->ion_auth->logged_in()) {
            goto qFMyM;
        }
        goto o97LM;
        tGwoU:
        E4Qpk:
        goto mWZwI;
        iRAPl:
        qFMyM:
        goto ybBMX;
        YTLSl:
        $this->load->helper("\144\x69\x72\145\x63\164\x6f\x72\171");
        goto X_xIF;
        hXQc5:
        $this->load->model("\x44\x61\x73\x68\142\157\x61\x72\144\137\x6d\157\144\x65\154", "\x64\141\163\x68\142\x6f\x61\162\x64");
        goto YTLSl;
        ybBMX:
        redirect("\x61\x75\164\x68");
        goto H25pe;
        fx7Bl:
        $this->load->library("\165\x70\x6c\157\x61\x64");
        goto HfA3o;
        o97LM:
        if ($this->ion_auth->is_admin()) {
            goto E4Qpk;
        }
        goto K6aE6;
        X_xIF:
    }
    public function output_json($data, $encode = true)
    {
        goto uMJ7A;
        tElId:
        RAZxn:
        goto MbFDK;
        MbFDK:
        $this->output->set_content_type("\x61\160\160\154\x69\x63\x61\164\151\x6f\156\x2f\x6a\x73\157\156")->set_output($data);
        goto NqtfI;
        Nm6q3:
        $data = json_encode($data);
        goto tElId;
        uMJ7A:
        if (!$encode) {
            goto RAZxn;
        }
        goto Nm6q3;
        NqtfI:
    }
    public function index()
    {
        goto Yf9FL;
        L3t57:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto N0fTX;
        HX9g5:
        $this->load->view("\137\x74\x65\x6d\160\154\x61\164\145\163\x2f\x64\141\163\150\x62\157\x61\162\x64\57\x5f\146\157\157\x74\145\162");
        goto Ikvba;
        wYNDT:
        $data["\x73\x6d\x74\137\141\x63\x74\151\x76\145"] = $this->dashboard->getSemesterActive();
        goto ePv8V;
        QUAG7:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto wYNDT;
        N0fTX:
        $data["\164\160\x5f\x61\x63\164\151\166\145"] = $this->dashboard->getTahunActive();
        goto QUAG7;
        E9uPJ:
        $this->load->view("\x73\145\x74\x74\x69\156\x67\x2f\x64\x61\164\x61");
        goto HX9g5;
        jRC3m:
        $data = ["\x75\x73\x65\x72" => $user, "\x6a\165\144\x75\x6c" => "\x50\x72\x6f\146\151\x6c\145\x20\123\x65\x6b\x6f\x6c\x61\x68", "\163\165\142\x6a\165\144\x75\154" => '', "\160\x72\157\x66\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto L3t57;
        Yf9FL:
        $user = $this->ion_auth->user()->row();
        goto jRC3m;
        ePv8V:
        $this->load->view("\137\x74\145\x6d\x70\x6c\141\x74\x65\163\57\x64\x61\x73\x68\x62\157\x61\x72\x64\57\x5f\x68\x65\141\x64\x65\162", $data);
        goto E9uPJ;
        Ikvba:
    }
    public function dbManager()
    {
        goto qXXzy;
        X2E6s:
        $data["\x6c\x69\x73\x74"] = directory_map("\x2e\x2f\x62\x61\143\x6b\165\160\163\x2f");
        goto amhvc;
        g9OB3:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto T2aAO;
        wYkFu:
        $data["\x73\145\x74\x74\x69\x6e\147"] = $this->settings->getSetting();
        goto X2E6s;
        fJXeK:
        $this->load->view("\137\164\x65\x6d\160\x6c\x61\x74\145\x73\57\144\141\163\x68\142\x6f\141\162\x64\57\x5f\146\157\x6f\x74\145\162");
        goto id6hM;
        qXXzy:
        $data = ["\165\x73\145\x72" => $this->ion_auth->user()->row(), "\x6a\165\144\x75\154" => "\x42\141\x63\153\165\160\x20\x64\x61\156\x20\122\145\x73\x74\157\x72\145", "\x73\165\x62\x6a\x75\144\x75\154" => "\102\141\143\x6b\x75\x70\40\144\x61\x6e\x20\x52\145\x73\x74\157\162\x65"];
        goto g9OB3;
        VGIEf:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto mv9FI;
        T2aAO:
        $data["\164\x70\x5f\141\143\x74\151\x76\x65"] = $this->dashboard->getTahunActive();
        goto VGIEf;
        amhvc:
        $this->load->view("\x5f\164\x65\155\x70\x6c\x61\x74\x65\x73\57\x64\141\x73\150\x62\157\x61\162\144\x2f\137\x68\145\141\144\145\x72", $data);
        goto Bu4Ho;
        Bu4Ho:
        $this->load->view("\163\145\164\164\151\156\x67\57\144\142");
        goto fJXeK;
        mv9FI:
        $data["\x73\x6d\x74\137\141\143\x74\151\x76\x65"] = $this->dashboard->getSemesterActive();
        goto wYkFu;
        id6hM:
    }
    function uploadFile($logo)
    {
        goto qi2Gy;
        LLegj:
        $data["\x73\164\141\x74\x75\x73"] = false;
        goto I8WoS;
        Pdzvt:
        $this->output_json($data);
        goto to5tp;
        iGzPO:
        $data["\163\x72\143"] = base_url() . "\165\x70\154\x6f\x61\x64\163\57\x73\x65\x74\x74\x69\156\147\x73\x2f" . $result["\146\151\154\x65\x5f\x6e\x61\155\x65"];
        goto AVY3G;
        Il0QB:
        $data["\x74\171\x70\x65"] = $_FILES["\x6c\x6f\147\x6f"]["\x74\x79\x70\145"];
        goto V0dM2;
        U912E:
        $config["\x6f\166\145\x72\x77\162\x69\164\x65"] = true;
        goto OW8_Z;
        qAmwf:
        goto RURp0;
        goto kVKrp;
        I8WoS:
        $data["\163\x72\143"] = $this->upload->display_errors();
        goto CgukP;
        idJhw:
        $data["\x73\164\x61\164\x75\x73"] = true;
        goto qAmwf;
        AVY3G:
        $data["\x66\x69\x6c\145\x6e\x61\155\x65"] = pathinfo($result["\x66\x69\154\x65\137\x6e\x61\x6d\x65"], PATHINFO_FILENAME);
        goto idJhw;
        kVKrp:
        W55Mz:
        goto LLegj;
        Mh1oQ:
        HN220:
        goto EAOtS;
        OW8_Z:
        $config["\x66\x69\154\x65\137\x6e\x61\x6d\x65"] = $logo;
        goto ScsNI;
        V0dM2:
        $data["\163\x69\172\145"] = $_FILES["\154\x6f\x67\157"]["\163\x69\172\x65"];
        goto dqXXm;
        ouPL2:
        $config["\141\154\154\157\167\145\144\137\x74\x79\x70\145\x73"] = "\x67\151\x66\174\152\160\x67\174\160\x6e\147\x7c\x6a\x70\145\x67\174\x4a\120\105\x47\x7c\112\120\x47\x7c\120\x4e\107\174\107\x49\x46";
        goto U912E;
        qi2Gy:
        if (isset($_FILES["\x6c\x6f\x67\157"]["\156\141\x6d\145"])) {
            goto HN220;
        }
        goto zOtnf;
        EAOtS:
        $config["\x75\160\154\x6f\141\144\137\160\x61\164\x68"] = "\x2e\x2f\165\160\154\x6f\141\x64\x73\57\163\x65\x74\164\x69\x6e\147\x73\57";
        goto ouPL2;
        CgukP:
        RURp0:
        goto Il0QB;
        cdmQA:
        $result = $this->upload->data();
        goto iGzPO;
        uaJKr:
        if (!$this->upload->do_upload("\x6c\x6f\x67\x6f")) {
            goto W55Mz;
        }
        goto cdmQA;
        Nqvbe:
        goto eckQ1;
        goto Mh1oQ;
        zOtnf:
        $data["\x73\162\x63"] = '';
        goto Nqvbe;
        ScsNI:
        $this->upload->initialize($config);
        goto uaJKr;
        dqXXm:
        eckQ1:
        goto Pdzvt;
        to5tp:
    }
    function deleteFile()
    {
        goto BzmNh;
        HDQ1c:
        echo "\106\x69\x6c\x65\40\104\145\x6c\145\x74\x65\40\123\x75\x63\x63\145\163\163\x66\x75\x6c\x6c\171";
        goto mV66q;
        OSYsH:
        $file_name = str_replace(base_url(), '', $src);
        goto qhOFL;
        BzmNh:
        $src = $this->input->post("\x73\162\x63");
        goto OSYsH;
        qhOFL:
        if (!unlink($file_name)) {
            goto XykL5;
        }
        goto HDQ1c;
        mV66q:
        XykL5:
        goto uoVkN;
        uoVkN:
    }
    public function saveSetting()
    {
        goto whuUx;
        TpRgd:
        $insert = ["\x73\x65\x6b\157\x6c\141\x68" => $sekolah, "\x6e\x73\x73" => $nss, "\x6e\160\163\x6e" => $npsn, "\152\x65\x6e\152\141\x6e\147" => $jenjang, "\163\141\x74\x75\x61\x6e\137\160\x65\156\144\151\144\151\153\141\156" => $satuan_pendidikan, "\141\x6c\141\x6d\141\164" => $alamat, "\x64\145\163\x61" => $desa, "\153\x6f\164\x61" => $kota, "\x6b\x65\x63\x61\155\x61\x74\141\156" => $kec, "\153\x6f\x64\145\x5f\x70\157\x73" => $kodepos, "\160\162\x6f\x76\x69\x6e\x73\151" => $prov, "\x77\145\142" => $web, "\146\x61\x78" => $fax, "\145\155\x61\x69\x6c" => $email, "\x74\145\x6c\160" => $tlp, "\x6b\145\x70\x73\x65\x6b" => $kepsek, "\x6e\151\160" => $nip, "\164\141\156\144\x61\137\164\x61\x6e\x67\x61\x6e" => str_replace(base_url(), '', $tanda_tangan), "\x6e\x61\x6d\x61\137\141\x70\154\151\153\x61\163\x69" => $nama_aplikasi, "\x6c\157\x67\x6f\137\153\141\x6e\x61\156" => str_replace(base_url(), '', $logo_kanan), "\x6c\x6f\147\x6f\x5f\x6b\151\x72\x69" => str_replace(base_url(), '', $logo_kiri)];
        goto e9frw;
        e9frw:
        $this->db->where("\151\x64\x5f\x73\x65\164\164\151\156\147", 1);
        goto J8lab;
        mqvq4:
        $logo_kiri = $this->input->post("\154\x6f\x67\157\x5f\153\x69\x72\x69", true);
        goto TpRgd;
        rDhWh:
        $kodepos = $this->input->post("\153\157\144\145\137\160\x6f\x73", true);
        goto Au__7;
        tjPf2:
        $kec = $this->input->post("\153\145\143", true);
        goto zHh32;
        m0zo5:
        $tanda_tangan = $this->input->post("\x74\x61\x6e\144\141\x5f\x74\141\x6e\147\x61\156", true);
        goto sOHR3;
        zHh32:
        $prov = $this->input->post("\x70\x72\157\166\151\156\163\x69", true);
        goto rDhWh;
        oHR0U:
        $satuan_pendidikan = $this->input->post("\x73\x61\164\165\x61\156\137\160\x65\x6e\144\151\x64\151\153\141\156", true);
        goto g2tI1;
        qbhiD:
        $email = $this->input->post("\x65\155\x61\151\x6c", true);
        goto X_o4P;
        J8lab:
        $update = $this->db->update("\x73\145\x74\x74\151\156\x67", $insert);
        goto gd2Dg;
        hQX9U:
        $jenjang = $this->input->post("\x6a\x65\156\152\x61\x6e\x67", true);
        goto oHR0U;
        LUNga:
        $kota = $this->input->post("\x6b\x6f\164\x61", true);
        goto Ux6PN;
        wWPXA:
        $logo_kanan = $this->input->post("\154\x6f\147\157\137\x6b\141\x6e\x61\x6e", true);
        goto mqvq4;
        g2tI1:
        $alamat = $this->input->post("\x61\x6c\x61\155\x61\164", true);
        goto LUNga;
        ATeS4:
        $fax = $this->input->post("\x66\141\170", true);
        goto qbhiD;
        IpgdH:
        $nip = $this->input->post("\156\151\160", true);
        goto m0zo5;
        gd2Dg:
        $this->output_json($update);
        goto twL2O;
        V8JfG:
        $nss = $this->input->post("\x6e\163\x73", true);
        goto PqVRl;
        X_o4P:
        $kepsek = $this->input->post("\x6b\x65\x70\x73\145\x6b", true);
        goto IpgdH;
        sOHR3:
        $nama_aplikasi = $this->input->post("\156\x61\x6d\x61\x5f\x61\160\154\151\x6b\x61\x73\151", true);
        goto wWPXA;
        PqVRl:
        $npsn = $this->input->post("\x6e\160\x73\x6e", true);
        goto hQX9U;
        fYvEE:
        $web = $this->input->post("\x77\145\x62", true);
        goto ATeS4;
        Ux6PN:
        $desa = $this->input->post("\144\x65\x73\141", true);
        goto tjPf2;
        whuUx:
        $sekolah = $this->input->post("\x6e\141\x6d\x61\x5f\163\x65\153\x6f\154\x61\150", true);
        goto V8JfG;
        Au__7:
        $tlp = $this->input->post("\164\154\x70", true);
        goto fYvEE;
        twL2O:
    }
}
