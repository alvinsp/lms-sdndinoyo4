<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Walistruktur extends CI_Controller
{
    public function __construct()
    {
        goto p62ah;
        WZvoL:
        if (!$this->ion_auth->logged_in()) {
            goto YcPLG;
        }
        goto fSQj3;
        QmJj2:
        $this->load->library(["\x64\141\164\x61\164\141\x62\154\145\163", "\146\157\162\155\x5f\166\141\154\151\144\x61\164\x69\x6f\156"]);
        goto mcbl5;
        fSQj3:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\x75"))) {
            goto RyXaY;
        }
        goto jXnHl;
        ZcRy8:
        goto UXB08;
        goto QdFT6;
        hUmBW:
        $this->load->model("\x44\141\163\150\142\x6f\141\162\x64\x5f\155\157\x64\x65\154", "\x64\x61\x73\x68\142\157\141\x72\144");
        goto BSjla;
        p62ah:
        parent::__construct();
        goto WZvoL;
        mcbl5:
        $this->load->model("\115\141\x73\x74\x65\x72\137\155\157\144\x65\154", "\x6d\x61\163\x74\145\162");
        goto hUmBW;
        jXnHl:
        show_error("\110\141\x6e\x79\141\x20\x41\x64\x6d\x69\156\151\163\164\162\141\x74\157\162\x20\x64\141\x6e\x20\x67\165\x72\165\40\x79\x61\156\147\x20\x64\151\142\145\x72\151\40\150\141\153\x20\x75\x6e\x74\x75\153\40\155\x65\x6e\x67\141\153\x73\145\163\40\x68\x61\x6c\x61\x6d\x61\156\40\151\x6e\151\54\x20\x3c\141\40\x68\x72\x65\x66\x3d\42" . base_url("\x64\x61\x73\x68\x62\x6f\141\x72\x64") . "\x22\x3e\x4b\145\155\x62\x61\154\151\40\x6b\x65\x20\x6d\145\156\165\40\x61\x77\141\154\74\57\x61\76", 403, "\x41\153\x73\145\163\40\x54\x65\162\154\141\162\141\156\x67");
        goto sQwRB;
        sQwRB:
        RyXaY:
        goto ZcRy8;
        cQmBg:
        $this->load->model("\104\x72\157\x70\144\x6f\167\156\137\x6d\x6f\x64\145\x6c", "\144\162\x6f\160\144\x6f\167\156");
        goto JELG7;
        JELG7:
        $this->form_validation->set_error_delimiters('', '');
        goto XwYHk;
        QdFT6:
        YcPLG:
        goto cqCSd;
        cqCSd:
        redirect("\141\x75\x74\x68");
        goto c3aP6;
        BSjla:
        $this->load->model("\113\x65\x6c\141\163\x5f\x6d\x6f\144\x65\x6c", "\x6b\145\154\141\x73");
        goto cQmBg;
        c3aP6:
        UXB08:
        goto QmJj2;
        XwYHk:
    }
    public function output_json($data, $encode = true)
    {
        goto hx5q6;
        b0zAC:
        $this->output->set_content_type("\141\160\160\x6c\x69\143\x61\x74\151\157\156\57\152\163\157\156")->set_output($data);
        goto XNweM;
        Xa5Zu:
        $data = json_encode($data);
        goto MREs5;
        hx5q6:
        if (!$encode) {
            goto Mn5RC;
        }
        goto Xa5Zu;
        MREs5:
        Mn5RC:
        goto b0zAC;
        XNweM:
    }
    public function index()
    {
        goto B3vpo;
        t0eEG:
        $siswa = $this->kelas->getKelasSiswa($guru->wali_kelas, $tp->id_tp, $smt->id_smt);
        goto I1IM6;
        o4KB2:
        $data["\147\x75\162\165\163"] = $this->dropdown->getAllGuru();
        goto t0eEG;
        afdd9:
        foreach ($siswa as $key => $value) {
            $siswas[$value->id_siswa] = $value->nama;
            DxnGi:
        }
        goto cVhQJ;
        jHoau:
        FVCok:
        goto Dtk9s;
        Dtk9s:
        $data["\163\x74\x72\165\153\164\165\162"] = json_decode(json_encode($this->kelas->dummyStruktur()));
        goto PgDqL;
        ayQtz:
        $tp = $this->master->getTahunActive();
        goto Rszqp;
        kiYoG:
        $data["\151\x64\x5f\x6b\145\154\141\163"] = $guru->wali_kelas;
        goto ih0Pz;
        B3vpo:
        $user = $this->ion_auth->user()->row();
        goto cyTlM;
        dzM8F:
        if ($struktur == null) {
            goto FVCok;
        }
        goto REeYh;
        Jaiq7:
        $data["\164\x70\x5f\141\143\x74\x69\166\145"] = $tp;
        goto X7LQM;
        X7LQM:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto gtM20;
        Yx1ae:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto Jaiq7;
        Rszqp:
        $smt = $this->master->getSemesterActive();
        goto Yx1ae;
        zoui0:
        $this->load->view("\155\x65\x6d\x62\x65\162\x73\57\x67\165\x72\165\57\x77\141\x6c\151\x2f\163\164\x72\165\x6b\164\x75\x72");
        goto f_hwe;
        f_hwe:
        $this->load->view("\155\145\x6d\142\x65\162\x73\57\147\x75\162\165\x2f\x74\145\x6d\x70\x6c\141\164\x65\x73\x2f\146\157\x6f\164\145\162");
        goto zHd2Q;
        mMd9R:
        $data["\x73\151\x73\167\141\163"] = $siswas;
        goto kiYoG;
        p9lGh:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto MCOtc;
        ih0Pz:
        $this->load->view("\x6d\x65\155\142\145\x72\x73\57\x67\x75\x72\165\57\x74\145\x6d\x70\154\x61\x74\x65\x73\x2f\150\145\141\144\x65\162", $data);
        goto zoui0;
        FnJMd:
        goto oTJfF;
        goto jHoau;
        MCOtc:
        $struktur = $this->kelas->getStrukturKelas($guru->wali_kelas);
        goto dzM8F;
        REeYh:
        $data["\163\164\x72\x75\153\x74\165\162"] = $struktur;
        goto FnJMd;
        I1IM6:
        $siswas[''] = "\x50\151\x6c\151\150\40\123\x69\x73\167\x61";
        goto afdd9;
        PgDqL:
        oTJfF:
        goto s7nQP;
        gtM20:
        $data["\x73\x6d\164\137\141\x63\x74\x69\x76\145"] = $smt;
        goto p9lGh;
        cVhQJ:
        T9Ruz:
        goto mMd9R;
        cyTlM:
        $data = ["\x75\x73\x65\162" => $user, "\x6a\165\x64\165\154" => "\x53\164\x72\165\153\x74\x75\162\40\x4f\x72\x67\x61\x6e\x69\x73\141\x73\151", "\163\x75\142\x6a\165\144\x75\154" => "\123\x74\x72\x75\x6b\164\165\162\40\x4f\x72\x67\x61\x6e\x69\163\x61\163\151", "\163\x65\164\x74\151\156\x67" => $this->dashboard->getSetting()];
        goto ayQtz;
        s7nQP:
        $data["\x67\165\162\x75"] = $guru;
        goto o4KB2;
        zHd2Q:
    }
    public function save()
    {
        goto lnC_i;
        jJ1L9:
        $this->output_json($insert);
        goto SMhXZ;
        lnC_i:
        $data = ["\151\x64\x5f\153\x65\154\x61\x73" => $this->input->post("\151\144\x5f\153\145\x6c\x61\x73"), "\153\x65\x74\x75\x61" => $this->input->post("\x6b\x65\164\x75\x61"), "\167\141\x6b\151\154\137\x6b\x65\164\165\x61" => $this->input->post("\x77\141\x6b\151\x6c\137\153\145\164\x75\141"), "\x73\145\153\162\x65\164\x61\162\151\x73\x5f\x31" => $this->input->post("\163\x65\x6b\162\x65\164\x61\x72\x69\x73\x5f\61"), "\x73\x65\153\162\145\x74\x61\162\x69\x73\137\62" => $this->input->post("\163\x65\x6b\x72\145\x74\x61\162\151\163\137\x32"), "\x62\x65\156\x64\x61\x68\141\162\141\x5f\x31" => $this->input->post("\142\x65\x6e\x64\141\x68\x61\x72\141\137\61"), "\x62\145\x6e\x64\141\x68\141\162\x61\x5f\x32" => $this->input->post("\x62\145\156\144\141\150\141\162\141\137\x32"), "\163\151\145\x5f\x65\153\163\164\x72\141\x6b\x75\x72\151\x6b\x75\x6c\x65\162" => $this->input->post("\163\x69\x65\137\145\153\x73\164\x72\141\153\x75\162\151\153\x75\154\x65\162"), "\x73\151\x65\137\x75\160\x61\x63\x61\x72\x61" => $this->input->post("\163\151\x65\137\x75\x70\141\143\141\x72\x61"), "\163\151\145\137\157\154\x61\x68\x72\x61\147\141" => $this->input->post("\163\x69\x65\x5f\157\x6c\141\x68\x72\x61\147\x61"), "\x73\x69\145\137\x6b\145\x61\147\x61\x6d\141\141\156" => $this->input->post("\x73\151\x65\137\153\145\141\x67\141\155\141\x61\x6e"), "\163\x69\x65\137\153\145\x61\x6d\141\x6e\141\x6e" => $this->input->post("\163\151\x65\x5f\153\145\141\155\141\x6e\141\156"), "\x73\151\145\137\153\x65\x74\x65\x72\x74\x69\142\x61\x6e" => $this->input->post("\x73\151\x65\x5f\x6b\145\x74\x65\162\164\151\142\x61\x6e"), "\163\x69\x65\137\x6b\x65\142\x65\x72\x73\151\x68\141\x6e" => $this->input->post("\163\151\145\137\x6b\x65\x62\x65\162\x73\x69\150\141\x6e"), "\163\151\145\x5f\153\145\151\x6e\x64\x61\150\141\x6e" => $this->input->post("\163\x69\145\137\x6b\145\x69\x6e\x64\x61\150\141\156"), "\163\151\x65\x5f\153\145\x73\145\x68\x61\x74\141\156" => $this->input->post("\163\151\145\x5f\x6b\145\163\x65\150\141\x74\x61\156"), "\x73\x69\x65\137\x6b\x65\153\145\x6c\x75\141\162\147\x61\141\156" => $this->input->post("\163\x69\145\x5f\x6b\x65\153\x65\154\165\x61\x72\147\141\x61\x6e"), "\x73\x69\x65\137\x68\165\x6d\x61\163" => $this->input->post("\x73\x69\145\x5f\150\x75\x6d\x61\163")];
        goto bh9MT;
        bh9MT:
        $insert = $this->db->replace("\x6b\145\x6c\141\x73\x5f\163\x74\162\x75\x6b\x74\165\x72", $data);
        goto jJ1L9;
        SMhXZ:
    }
}
