<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtnomorpeserta extends CI_Controller
{
    public function __construct()
    {
        goto R0aK8;
        DZA62:
        UEROk:
        goto fm49u;
        R0aK8:
        parent::__construct();
        goto YbAsx;
        BxkEQ:
        show_error("\110\141\156\x79\x61\40\x41\x64\x6d\x69\156\x69\163\x74\162\141\x74\x6f\x72\40\171\x61\x6e\147\x20\144\151\142\145\162\x69\40\150\141\x6b\x20\x75\x6e\164\x75\x6b\40\x6d\x65\x6e\x67\x61\x6b\x73\145\163\x20\150\141\154\141\155\x61\156\40\x69\x6e\151\54\x20\x3c\141\40\x68\162\x65\146\x3d\x22" . base_url("\144\x61\x73\150\142\157\141\x72\144") . "\42\x3e\113\145\155\x62\141\154\x69\40\x6b\145\40\155\x65\x6e\x75\40\x61\167\141\154\x3c\57\x61\76", 403, "\x41\x6b\x73\145\x73\x20\x54\145\x72\154\x61\x72\141\156\x67");
        goto e3CPi;
        DPz8d:
        $this->load->model("\x44\162\157\160\144\157\167\156\137\155\157\144\145\x6c", "\x64\x72\x6f\x70\144\x6f\x77\x6e");
        goto X_sr7;
        y13V4:
        if ($this->ion_auth->is_admin()) {
            goto QOYsO;
        }
        goto BxkEQ;
        NRoc1:
        $this->load->model("\103\x62\164\137\155\x6f\144\x65\154", "\143\142\x74");
        goto DPz8d;
        X_sr7:
        $this->form_validation->set_error_delimiters('', '');
        goto y9kBi;
        e3CPi:
        QOYsO:
        goto yczxy;
        dLlsd:
        xdtbt:
        goto GFjhJ;
        YbAsx:
        if (!$this->ion_auth->logged_in()) {
            goto xdtbt;
        }
        goto y13V4;
        GFjhJ:
        redirect("\141\x75\164\x68");
        goto DZA62;
        vrWfH:
        $this->load->model("\x4d\141\x73\164\x65\162\x5f\155\157\144\145\x6c", "\155\x61\163\164\145\162");
        goto SUMnb;
        SUMnb:
        $this->load->model("\x44\141\x73\x68\142\157\141\162\144\x5f\155\x6f\x64\x65\154", "\144\x61\x73\x68\x62\x6f\x61\x72\144");
        goto NRoc1;
        yczxy:
        goto UEROk;
        goto dLlsd;
        fm49u:
        $this->load->library(["\144\x61\x74\141\x74\141\x62\154\x65\163", "\146\157\162\x6d\x5f\x76\x61\x6c\151\144\141\164\151\x6f\156"]);
        goto D6uK3;
        D6uK3:
        $this->load->library("\x75\160\x6c\157\141\x64");
        goto vrWfH;
        y9kBi:
    }
    public function output_json($data, $encode = true)
    {
        goto CRR20;
        dLrEg:
        $data = json_encode($data);
        goto ET_KD;
        CRR20:
        if (!$encode) {
            goto gr7ru;
        }
        goto dLrEg;
        ET_KD:
        gr7ru:
        goto KYm1O;
        KYm1O:
        $this->output->set_content_type("\141\x70\x70\x6c\x69\x63\141\164\151\157\156\57\x6a\x73\x6f\x6e")->set_output($data);
        goto xjuq3;
        xjuq3:
    }
    public function index()
    {
        goto dEN3O;
        qLIFA:
        $smt = $this->dashboard->getSemesterActive();
        goto X02jz;
        Ops31:
        $this->load->view("\x63\x62\164\57\x6e\x6f\155\x6f\x72\x70\x65\163\145\x72\x74\141\57\x64\141\x74\141");
        goto dcctv;
        dcctv:
        $this->load->view("\137\x74\145\x6d\160\x6c\x61\x74\145\163\57\x64\141\x73\x68\x62\x6f\141\162\x64\x2f\x5f\x66\x6f\157\164\x65\162");
        goto gMaSW;
        xC2cY:
        $data = ["\x75\163\x65\x72" => $user, "\x6a\165\x64\x75\154" => "\x4e\x6f\x6d\157\162\40\x50\x65\x73\145\162\x74\x61", "\x73\x75\x62\x6a\165\x64\x75\154" => "\x47\145\x6e\145\x72\x61\164\145\40\116\x6f\155\x6f\162\x20\120\x65\x73\x65\x72\164\141\40\125\152\151\x61\x6e", "\160\x72\157\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\164\164\151\x6e\x67" => $this->dashboard->getSetting()];
        goto K7u3r;
        X02jz:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto ZefES;
        sh5Jb:
        $data["\163\145\163\x69"] = $this->dropdown->getAllSesi();
        goto R1orv;
        JWGee:
        $data["\x6a\141\x64\x77\x61\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt);
        goto gGuGa;
        ZefES:
        $data["\x74\x70\137\141\x63\164\x69\166\x65"] = $tp;
        goto jg4U0;
        LsGvX:
        $data["\x73\x6d\164\x5f\x61\x63\164\x69\x76\145"] = $smt;
        goto JWGee;
        FvCJ8:
        $data["\x72\x75\141\x6e\147"] = $this->dropdown->getAllRuang();
        goto sh5Jb;
        K7u3r:
        $tp = $this->dashboard->getTahunActive();
        goto qLIFA;
        gGuGa:
        $data["\x6b\145\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto FvCJ8;
        dEN3O:
        $user = $this->ion_auth->user()->row();
        goto xC2cY;
        jg4U0:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto LsGvX;
        R1orv:
        $this->load->view("\137\x74\145\155\x70\154\141\x74\x65\163\x2f\144\x61\x73\150\142\157\141\162\x64\57\x5f\x68\x65\x61\x64\145\x72", $data);
        goto Ops31;
        gMaSW:
    }
    public function saveNomor()
    {
        goto e8QeU;
        ohFhL:
        J9qI0:
        goto g4uXG;
        mblqh:
        $arrNomor = $this->cbt->getAllNomorPeserta();
        goto tMiIM;
        g4uXG:
        $this->output_json($update);
        goto Ra6FE;
        e8QeU:
        $input = json_decode($this->input->post("\x73\x69\x73\x77\141", true));
        goto mblqh;
        lI0YF:
        $update = false;
        goto zMAea;
        tMiIM:
        $tp = $this->dashboard->getTahunActive();
        goto lI0YF;
        zMAea:
        foreach ($input as $in) {
            goto gyulE;
            QCgD4:
            $update = false;
            goto ySuxp;
            KSgom:
            V8fLD:
            goto QCgD4;
            kZAmH:
            IikNh:
            goto ppmHk;
            ySuxp:
            FTSCV:
            goto kZAmH;
            WEvK5:
            $update = $this->db->replace("\x63\x62\x74\137\x6e\157\155\x6f\162\x5f\160\x65\x73\145\x72\164\141", $insert);
            goto jylsL;
            jylsL:
            goto FTSCV;
            goto KSgom;
            Yg9hz:
            $insert = ["\151\x64\x5f\x6e\157\x6d\157\x72" => $in->id . $tp->id_tp, "\151\144\137\x73\151\163\x77\141" => $in->id, "\151\x64\x5f\164\160" => $tp->id_tp, "\x6e\x6f\x6d\157\162\137\x70\145\163\145\x72\164\141" => $in->nomor];
            goto WEvK5;
            gyulE:
            $nomorAda = isset($arrNomor[$in->id]) ? $arrNomor[$in->id] : null;
            goto D7XZF;
            D7XZF:
            if ($nomorAda != null && $nomorAda->nomor_peserta == $in->nomor && $nomorAda->id_siswa != $in->id) {
                goto V8fLD;
            }
            goto Yg9hz;
            ppmHk:
        }
        goto ohFhL;
        Ra6FE:
    }
    public function resetNomor()
    {
        goto DcRk9;
        PUOsR:
        IvTyD:
        goto DDGfq;
        McVyf:
        $this->output_json($res);
        goto aUm8H;
        DciMF:
        foreach ($siswas as $siswa) {
            goto S88iw;
            S88iw:
            $insert = ["\151\x64\137\x6e\157\155\x6f\162" => $siswa->id_siswa . $tp->id_tp, "\151\x64\137\x73\151\163\x77\141" => $siswa->id_siswa, "\151\x64\137\x74\160" => $tp->id_tp, "\x6e\x6f\x6d\157\162\x5f\x70\145\x73\145\162\164\x61" => ''];
            goto eKIc2;
            oKDZh:
            LEF4d:
            goto AaZLB;
            eKIc2:
            $update = $this->db->replace("\143\142\x74\137\156\157\155\x6f\x72\x5f\160\145\163\x65\x72\164\141", $insert);
            goto oKDZh;
            AaZLB:
        }
        goto PUOsR;
        DDGfq:
        $res["\163\164\x61\164\165\163"] = $update;
        goto McVyf;
        mZ1Om:
        $tp = $this->dashboard->getTahunActive();
        goto tLHEQ;
        tLHEQ:
        $smt = $this->dashboard->getSemesterActive();
        goto KPswh;
        KPswh:
        $siswas = $this->cbt->getSiswaByKelasArray($tp->id_tp, $smt->id_smt, $input);
        goto DciMF;
        DcRk9:
        $input = json_decode($this->input->get("\153\145\154\x61\x73", true));
        goto mZ1Om;
        aUm8H:
    }
    public function getSiswaKelas($arr_kelas)
    {
        goto LluFH;
        LluFH:
        $tp = $this->dashboard->getTahunActive();
        goto TvCKW;
        MN80I:
        $this->output_json($data);
        goto C8xki;
        l830i:
        $kelas = json_decode(urldecode($arr_kelas));
        goto HwvFq;
        qVFJ0:
        $data["\163\x69\163\167\141"] = $siswas;
        goto FxGYQ;
        YIn7Z:
        $arrNomor = $this->cbt->getAllNomorPeserta();
        goto qVFJ0;
        HwvFq:
        $siswas = $this->cbt->getSiswaByKelasArray($tp->id_tp, $smt->id_smt, $kelas);
        goto YIn7Z;
        TvCKW:
        $smt = $this->dashboard->getSemesterActive();
        goto l830i;
        FxGYQ:
        $data["\x6e\157\x6d\x6f\162"] = $arrNomor;
        goto MN80I;
        C8xki:
    }
}
