<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Walicatatan extends CI_Controller
{
    public function __construct()
    {
        goto dDHX0;
        zofdQ:
        $this->load->library(["\144\141\x74\141\164\x61\142\x6c\145\x73", "\x66\x6f\162\x6d\137\166\141\x6c\x69\144\x61\164\151\x6f\x6e"]);
        goto xfn33;
        BvquF:
        sch_q:
        goto wUOf1;
        DnRNV:
        show_error("\x48\141\x6e\171\141\x20\101\144\155\x69\156\151\x73\x74\162\x61\x74\x6f\x72\x20\x64\141\x6e\40\147\165\162\x75\40\x79\x61\156\x67\x20\144\x69\142\x65\x72\151\x20\150\x61\x6b\x20\x75\156\164\165\x6b\40\155\145\x6e\x67\141\x6b\163\x65\163\40\150\x61\x6c\141\x6d\x61\x6e\x20\151\156\151\x2c\40\74\141\40\150\x72\145\146\x3d\42" . base_url("\144\141\163\x68\142\157\141\162\144") . "\x22\76\113\x65\155\142\x61\154\x69\x20\153\145\x20\x6d\x65\156\165\x20\141\167\141\x6c\x3c\57\141\x3e", 403, "\101\x6b\x73\145\x73\x20\124\145\162\x6c\141\162\141\x6e\x67");
        goto xfnh0;
        xfnh0:
        IBXoj:
        goto QGdFQ;
        dDHX0:
        parent::__construct();
        goto Ypz1u;
        lqMI2:
        $this->load->model("\x44\x72\157\160\x64\157\167\x6e\137\x6d\x6f\x64\145\x6c", "\x64\162\157\x70\144\x6f\x77\156");
        goto mfMv2;
        xfn33:
        $this->load->model("\x4d\141\x73\x74\x65\x72\137\155\157\x64\x65\x6c", "\155\x61\163\x74\x65\162");
        goto PQNj4;
        wUOf1:
        redirect("\x61\165\x74\150");
        goto EpEkV;
        QGdFQ:
        goto JKJ8Y;
        goto BvquF;
        mfMv2:
        $this->form_validation->set_error_delimiters('', '');
        goto XtpXn;
        Ypz1u:
        if (!$this->ion_auth->logged_in()) {
            goto sch_q;
        }
        goto o3gM6;
        EpEkV:
        JKJ8Y:
        goto zofdQ;
        zTJAn:
        $this->load->model("\x4b\145\154\141\163\137\155\x6f\144\145\154", "\153\x65\x6c\141\163");
        goto lqMI2;
        PQNj4:
        $this->load->model("\x44\141\x73\150\x62\x6f\141\162\144\x5f\x6d\157\x64\145\x6c", "\144\x61\x73\150\x62\157\x61\x72\x64");
        goto zTJAn;
        o3gM6:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\165"))) {
            goto IBXoj;
        }
        goto DnRNV;
        XtpXn:
    }
    public function output_json($data, $encode = true)
    {
        goto yhMPB;
        OthPM:
        $this->output->set_content_type("\x61\160\160\x6c\x69\143\x61\x74\151\x6f\x6e\57\x6a\163\157\x6e")->set_output($data);
        goto Y2BP3;
        yhMPB:
        if (!$encode) {
            goto K1VrP;
        }
        goto CIuUu;
        BiaYO:
        K1VrP:
        goto OthPM;
        CIuUu:
        $data = json_encode($data);
        goto BiaYO;
        Y2BP3:
    }
    public function index()
    {
        goto iNLge;
        sIaP9:
        $tp = $this->master->getTahunActive();
        goto QEBAS;
        Cc01V:
        $this->load->view("\x6d\x65\x6d\142\x65\162\x73\x2f\x67\x75\x72\165\x2f\x77\141\154\x69\57\x63\141\164\x61\x74\x61\156");
        goto BWnsz;
        h1Ot_:
        $data = ["\x75\x73\x65\162" => $user, "\x6a\165\x64\165\154" => "\x43\x61\x74\x61\164\x61\156\x20\127\141\x6c\x69\x20\x4b\x65\x6c\x61\163", "\x73\165\142\x6a\x75\x64\x75\154" => "\103\141\164\141\164\x61\156\x20\113\145\x6c\141\163", "\163\x65\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto sIaP9;
        olq30:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto r7bu9;
        QEBAS:
        $smt = $this->master->getSemesterActive();
        goto olq30;
        BWnsz:
        $this->load->view("\155\x65\x6d\142\x65\x72\163\57\x67\165\162\x75\x2f\164\x65\x6d\x70\154\x61\164\x65\163\x2f\146\x6f\x6f\x74\145\x72");
        goto dJisX;
        dLWOD:
        $data["\147\165\x72\165"] = $guru;
        goto n4SNb;
        GJwJL:
        $data["\163\x6d\x74\x5f\x61\143\164\151\x76\x65"] = $smt;
        goto a6pqN;
        HmonE:
        $this->load->view("\155\x65\x6d\x62\145\162\163\x2f\147\165\162\165\57\x74\145\x6d\x70\x6c\141\164\145\163\57\x68\x65\141\144\145\x72", $data);
        goto Cc01V;
        H1emn:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto GJwJL;
        r7bu9:
        $data["\x74\160\137\x61\x63\x74\x69\x76\145"] = $tp;
        goto H1emn;
        a6pqN:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto dLWOD;
        iNLge:
        $user = $this->ion_auth->user()->row();
        goto h1Ot_;
        Duphv:
        $data["\143\x61\164\141\x74\141\x6e\x5f\x73\151\163\167\141"] = $this->kelas->getCatatanSiswa($tp->id_tp, $smt->id_smt, $guru->wali_kelas);
        goto HmonE;
        n4SNb:
        $data["\x63\141\164\x61\x74\x61\156\x5f\x6b\x65\154\141\163"] = $this->kelas->getCatatanKelas($guru->wali_kelas, $tp->id_tp, $smt->id_smt);
        goto Duphv;
        dJisX:
    }
    public function siswa()
    {
        goto a5q8X;
        UbjaE:
        $id_kelas = $this->input->get("\x69\x64\x5f\x6b\145\154\x61\163");
        goto tOp49;
        Pjg5w:
        $this->load->view("\155\x65\x6d\x62\x65\x72\163\x2f\x67\x75\162\x75\57\x74\x65\x6d\x70\x6c\x61\164\x65\x73\57\x66\157\x6f\x74\x65\162");
        goto hT4SS;
        tOp49:
        $user = $this->ion_auth->user()->row();
        goto VmrXL;
        a5q8X:
        $id_siswa = $this->input->get("\x69\x64\x5f\x73\151\163\x77\141");
        goto UbjaE;
        sJFnM:
        $tp = $this->master->getTahunActive();
        goto Fa33G;
        V6F8w:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto ozyk9;
        ER1C3:
        $data["\151\144\x5f\x6b\145\154\x61\x73"] = $id_kelas;
        goto BjxOL;
        ii0Tj:
        $data["\x73\x69\163\x77\141"] = $this->master->getSiswaById($id_siswa);
        goto gK1Xn;
        VmrXL:
        $data = ["\x75\163\x65\x72" => $user, "\152\x75\x64\165\x6c" => "\x43\141\164\x61\164\141\x6e\x20\x53\x69\x73\x77\x61", "\163\165\142\x6a\165\144\165\x6c" => "\103\141\x74\141\x74\x61\x6e\x20\x53\151\x73\167\141", "\x73\145\164\164\151\156\147" => $this->dashboard->getSetting()];
        goto sJFnM;
        gK1Xn:
        $data["\x63\x61\164\x61\x74\x61\x6e\137\x73\151\163\167\141"] = $this->kelas->getAllCatatanSiswa($id_siswa, $tp->id_tp, $smt->id_smt);
        goto ER1C3;
        ozyk9:
        $data["\x73\x6d\x74\x5f\141\x63\x74\151\166\x65"] = $smt;
        goto r6MNs;
        nvdeJ:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto FAP92;
        BjxOL:
        $this->load->view("\155\x65\155\142\x65\162\x73\x2f\147\165\162\x75\x2f\164\145\155\x70\x6c\141\164\145\x73\57\150\x65\x61\144\145\x72", $data);
        goto D93fl;
        r6MNs:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto sFx2t;
        sFx2t:
        $data["\147\165\162\x75"] = $guru;
        goto ii0Tj;
        D93fl:
        $this->load->view("\x6d\145\155\x62\x65\x72\x73\x2f\147\x75\162\x75\x2f\x77\x61\x6c\151\57\x70\145\162\x73\151\163\167\141");
        goto Pjg5w;
        Fa33G:
        $smt = $this->master->getSemesterActive();
        goto nvdeJ;
        FAP92:
        $data["\164\160\137\141\143\164\x69\x76\x65"] = $tp;
        goto V6F8w;
        hT4SS:
    }
    public function saveCatatanKelas()
    {
        goto rJoLE;
        O5Nzi:
        $user = $this->ion_auth->user()->row();
        goto OgAy8;
        OgAy8:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto hqvh1;
        lqxZr:
        $insert = $this->master->create("\153\145\154\141\163\x5f\x63\x61\x74\x61\x74\x61\x6e\x5f\x77\x61\154\151", $data);
        goto FLXqV;
        xQToh:
        $data = ["\x69\x64\137\164\x70" => $tp->id_tp, "\x69\x64\137\x73\x6d\x74" => $smt->id_smt, "\x74\x79\x70\x65" => "\x31", "\154\145\166\x65\154" => $level, "\x69\144\x5f\153\145\x6c\141\x73" => $guru->wali_kelas, "\x74\145\170\x74" => $text, "\x72\x65\141\x64\151\x6e\147" => serialize([])];
        goto lqxZr;
        mkWVq:
        $smt = $this->dashboard->getSemesterActive();
        goto O5Nzi;
        hqvh1:
        $text = $this->input->post("\164\145\170\164", true);
        goto tWXf1;
        rJoLE:
        $tp = $this->dashboard->getTahunActive();
        goto mkWVq;
        FLXqV:
        $this->output_json($insert);
        goto zHJDc;
        tWXf1:
        $level = $this->input->post("\x6c\x65\x76\145\x6c", true);
        goto xQToh;
        zHJDc:
    }
    public function saveCatatanSiswa()
    {
        goto kzfwP;
        uCPYu:
        $this->output_json($insert);
        goto Vm27o;
        kzfwP:
        $tp = $this->dashboard->getTahunActive();
        goto AMy6I;
        rqamI:
        $data = ["\151\x64\137\164\x70" => $tp->id_tp, "\151\144\137\163\155\x74" => $smt->id_smt, "\164\171\x70\145" => "\x32", "\154\x65\166\x65\154" => $level, "\x69\144\x5f\153\145\x6c\x61\163" => $guru->wali_kelas, "\x69\x64\x5f\163\x69\x73\167\x61" => $id_siswa, "\164\x65\170\x74" => $text, "\162\145\x61\x64\x69\156\147" => serialize([])];
        goto WhyFh;
        Ck50C:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto e0lYy;
        AMy6I:
        $smt = $this->dashboard->getSemesterActive();
        goto QoLwp;
        WhyFh:
        $insert = $this->master->create("\153\145\x6c\x61\x73\x5f\x63\x61\164\141\x74\141\156\x5f\167\141\x6c\x69", $data);
        goto uCPYu;
        e0lYy:
        $id_siswa = $this->input->post("\x69\144\137\163\151\x73\167\x61");
        goto cQiKz;
        cQiKz:
        $text = $this->input->post("\164\x65\170\164", true);
        goto DD7HT;
        DD7HT:
        $level = $this->input->post("\154\145\x76\145\x6c", true);
        goto rqamI;
        QoLwp:
        $user = $this->ion_auth->user()->row();
        goto Ck50C;
        Vm27o:
    }
    public function updateCatatanKelas()
    {
    }
    public function hapus($id_catatan)
    {
        $delete = $this->master->delete("\153\x65\x6c\141\x73\x5f\x63\141\164\141\x74\x61\x6e\x5f\x77\x61\154\x69", $id_catatan, "\151\x64\x5f\143\x61\x74\x61\x74\141\x6e");
        $this->output_json($delete);
    }
}
