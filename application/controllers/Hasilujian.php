<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\x53\105\x50\x41\x54\110") or exit("\x4e\x6f\x20\144\x69\x72\x65\x63\164\40\163\143\x72\151\x70\164\x20\141\143\143\145\163\163\x20\x61\154\154\x6f\x77\x65\x64");
class HasilUjian extends CI_Controller
{
    public function __construct()
    {
        goto uxqOO;
        vkLbo:
        EoP0P:
        goto bMfWB;
        KfC84:
        redirect("\141\x75\x74\150");
        goto vkLbo;
        Q060q:
        if ($this->ion_auth->logged_in()) {
            goto EoP0P;
        }
        goto KfC84;
        pYL3j:
        $this->load->model("\x4d\141\163\x74\145\162\137\x6d\157\144\145\154", "\155\x61\x73\x74\x65\x72");
        goto mHKD7;
        bMfWB:
        $this->load->library(["\x64\141\x74\141\x74\141\142\154\x65\x73"]);
        goto pYL3j;
        uxqOO:
        parent::__construct();
        goto Q060q;
        mHKD7:
        $this->load->model("\125\152\x69\x61\x6e\x5f\x6d\157\x64\x65\x6c", "\x75\x6a\151\141\x6e");
        goto Zey1Z;
        Zey1Z:
        $this->user = $this->ion_auth->user()->row();
        goto UnBDX;
        UnBDX:
    }
    public function output_json($data, $encode = true)
    {
        goto a8tE2;
        iCxaK:
        $data = json_encode($data);
        goto h0ccO;
        a8tE2:
        if (!$encode) {
            goto pg49D;
        }
        goto iCxaK;
        sKgJa:
        $this->output->set_content_type("\x61\160\160\x6c\x69\x63\141\x74\x69\x6f\x6e\57\152\163\x6f\156")->set_output($data);
        goto p93gu;
        h0ccO:
        pg49D:
        goto sKgJa;
        p93gu:
    }
    public function data()
    {
        goto ubHVJ;
        exyqg:
        if (!$this->ion_auth->in_group("\147\x75\x72\165")) {
            goto NpVo0;
        }
        goto MqOBr;
        MqOBr:
        $nip_guru = $this->user->username;
        goto tEG8h;
        ubHVJ:
        $nip_guru = null;
        goto exyqg;
        tEG8h:
        NpVo0:
        goto ifJth;
        ifJth:
        $this->output_json($this->ujian->getHasilUjian($nip_guru), false);
        goto FAGjJ;
        FAGjJ:
    }
    public function NilaiMhs($id)
    {
        $this->output_json($this->ujian->HslUjianById($id, true), false);
    }
    public function index()
    {
        goto p_4y_;
        mE3L5:
        $this->load->view("\137\x74\x65\155\x70\x6c\x61\164\145\163\x2f\x64\x61\163\x68\142\x6f\141\162\x64\57\x5f\150\x65\x61\144\x65\x72\56\x70\150\160", $data);
        goto cBTfC;
        cBTfC:
        $this->load->view("\165\152\x69\x61\x6e\57\150\x61\163\x69\x6c");
        goto lf8TJ;
        p_4y_:
        $data = ["\x75\163\145\162" => $this->user, "\152\165\x64\165\x6c" => "\x55\152\151\x61\x6e", "\x73\165\x62\152\165\x64\x75\x6c" => "\x48\141\163\x69\154\x20\x55\x6a\151\141\x6e"];
        goto mE3L5;
        lf8TJ:
        $this->load->view("\x5f\164\x65\155\160\x6c\x61\x74\145\163\x2f\144\141\x73\150\142\x6f\x61\162\x64\57\x5f\146\x6f\157\x74\145\162\x2e\160\150\160");
        goto B7Sv7;
        B7Sv7:
    }
    public function detail($id)
    {
        goto LgxOZ;
        OlFF_:
        $this->load->view("\137\x74\x65\x6d\160\x6c\141\x74\145\163\x2f\x64\x61\163\x68\142\x6f\x61\162\144\57\137\150\145\x61\x64\x65\162\x2e\160\x68\x70", $data);
        goto TztEJ;
        TztEJ:
        $this->load->view("\165\152\151\141\156\57\x64\x65\x74\141\151\154\137\x68\141\163\151\154");
        goto tidCz;
        b_bYV:
        $data = ["\x75\x73\145\162" => $this->user, "\x6a\x75\144\x75\x6c" => "\125\152\x69\141\156", "\163\x75\x62\152\x75\144\x75\x6c" => "\104\x65\164\x61\x69\154\40\110\141\x73\x69\154\40\125\152\x69\141\156", "\x75\152\x69\141\156" => $ujian, "\156\151\154\141\x69" => $nilai];
        goto OlFF_;
        jlkSs:
        $nilai = $this->ujian->bandingNilai($id);
        goto b_bYV;
        LgxOZ:
        $ujian = $this->ujian->getUjianById($id);
        goto jlkSs;
        tidCz:
        $this->load->view("\x5f\x74\x65\x6d\160\154\141\x74\145\x73\57\144\141\163\150\x62\x6f\x61\x72\144\x2f\x5f\x66\x6f\157\x74\145\x72\56\160\150\160");
        goto QLSxn;
        QLSxn:
    }
    public function cetak($id)
    {
        goto qL4BH;
        JWrXO:
        $ujian = $this->ujian->getUjianById($id);
        goto dwGMU;
        qL4BH:
        $mhs = $this->ujian->getIdMahasiswa($this->user->username);
        goto s7AOY;
        dwGMU:
        $data = ["\165\152\151\141\x6e" => $ujian, "\150\x61\x73\151\154" => $hasil, "\155\x68\x73" => $mhs];
        goto avtYv;
        s7AOY:
        $hasil = $this->ujian->HslUjian($id, $mhs->id_siswa)->row();
        goto JWrXO;
        avtYv:
        $this->load->view("\x75\152\x69\141\156\57\x63\145\164\x61\153", $data);
        goto P959r;
        P959r:
    }
    public function cetak_detail($id)
    {
        goto yvCy_;
        yvCy_:
        $ujian = $this->ujian->getUjianById($id);
        goto cDh1u;
        pWDmg:
        $data = ["\165\x6a\x69\141\156" => $ujian, "\x6e\151\154\x61\151" => $nilai, "\x68\141\x73\151\x6c" => $hasil];
        goto L2cPO;
        cDh1u:
        $nilai = $this->ujian->bandingNilai($id);
        goto GDnjc;
        L2cPO:
        $this->load->view("\165\x6a\151\141\x6e\x2f\x63\x65\164\141\153\x5f\144\145\164\141\151\154", $data);
        goto h7lvt;
        GDnjc:
        $hasil = $this->ujian->HslUjianById($id)->result();
        goto pWDmg;
        h7lvt:
    }
}
