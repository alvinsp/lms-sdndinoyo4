<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtsesisiswa extends CI_Controller
{
    public function __construct()
    {
        goto TSG2N;
        O8Q0R:
        if ($this->ion_auth->is_admin()) {
            goto a_Af1;
        }
        goto bT__C;
        RfpIJ:
        a_Af1:
        goto Ickwj;
        O3MA4:
        Xx5vG:
        goto NKJYu;
        FKCWn:
        $this->load->model("\x4d\141\x73\x74\145\x72\137\155\x6f\x64\145\x6c", "\155\x61\x73\164\145\162");
        goto i7pQr;
        NKJYu:
        $this->load->library(["\x64\x61\x74\141\164\x61\142\x6c\x65\163", "\146\157\162\x6d\x5f\x76\x61\x6c\x69\x64\141\x74\x69\157\x6e"]);
        goto FKCWn;
        tGXiH:
        aiWKY:
        goto R2NjC;
        lmBJf:
        if (!$this->ion_auth->logged_in()) {
            goto aiWKY;
        }
        goto O8Q0R;
        x32QA:
        $this->load->model("\x4b\x65\x6c\141\163\x5f\155\x6f\x64\x65\x6c", "\153\145\154\141\x73");
        goto uyRq2;
        i7pQr:
        $this->load->model("\104\141\x73\x68\x62\x6f\141\x72\144\137\155\x6f\x64\145\154", "\144\141\163\150\x62\x6f\x61\x72\x64");
        goto zo0s8;
        Ickwj:
        goto Xx5vG;
        goto tGXiH;
        bT__C:
        show_error("\110\141\156\x79\x61\x20\101\144\x6d\151\x6e\151\x73\164\162\141\164\157\162\x20\x79\x61\x6e\147\40\144\151\x62\x65\162\151\40\x68\x61\x6b\40\x75\156\164\x75\x6b\40\155\145\156\147\x61\153\163\145\163\x20\150\x61\154\x61\x6d\x61\x6e\40\151\x6e\x69\x2c\x20\74\x61\40\x68\162\x65\x66\x3d\42" . base_url("\144\x61\163\150\x62\157\x61\x72\x64") . "\x22\76\113\x65\x6d\142\141\154\151\x20\x6b\x65\x20\x6d\145\x6e\x75\40\x61\x77\x61\x6c\74\57\x61\x3e", 403, "\x41\x6b\163\145\163\40\x54\145\x72\154\x61\x72\141\156\x67");
        goto RfpIJ;
        SN10K:
        $this->load->model("\x44\162\x6f\160\x64\x6f\167\156\137\x6d\x6f\144\145\x6c", "\x64\162\157\160\x64\x6f\167\156");
        goto x32QA;
        TSG2N:
        parent::__construct();
        goto lmBJf;
        R2NjC:
        redirect("\x61\165\x74\150");
        goto O3MA4;
        uyRq2:
        $this->form_validation->set_error_delimiters('', '');
        goto mZdZB;
        zo0s8:
        $this->load->model("\x43\142\164\137\x6d\x6f\x64\145\x6c", "\x63\x62\x74");
        goto SN10K;
        mZdZB:
    }
    public function output_json($data, $encode = true)
    {
        goto sb8y2;
        sb8y2:
        if (!$encode) {
            goto BG06e;
        }
        goto P6qmr;
        P6qmr:
        $data = json_encode($data);
        goto c6V_f;
        TSEdL:
        $this->output->set_content_type("\x61\x70\x70\x6c\151\143\x61\x74\151\157\156\57\152\163\157\156")->set_output($data);
        goto CPg77;
        c6V_f:
        BG06e:
        goto TSEdL;
        CPg77:
    }
    public function index()
    {
        goto Ui_Ru;
        pJYFI:
        if (!($kelas_selected != "\60")) {
            goto KIglN;
        }
        goto Y_cVE;
        MIYwg:
        $data["\x73\151\163\x77\141\x73"] = $siswas;
        goto bFSZ0;
        QU1ay:
        $siswas = [];
        goto pJYFI;
        oJpKp:
        $this->load->view("\143\x62\164\57\163\x65\163\151\163\151\163\167\141\57\x64\x61\164\x61");
        goto oIeOW;
        Og9mg:
        $user = $this->ion_auth->user()->row();
        goto Hs2KL;
        Ui_Ru:
        $tp = $this->dashboard->getTahunActive();
        goto qpvT1;
        W8uOp:
        $kls = $this->input->get("\x6b\154\x73", true);
        goto k64DG;
        Hs2KL:
        $data = ["\165\x73\145\x72" => $user, "\152\x75\144\165\x6c" => "\x41\x74\165\162\40\122\165\141\x6e\147\40\144\x61\156\40\x53\x65\x73\151\40\x53\151\163\167\x61", "\x73\x75\142\x6a\x75\x64\165\x6c" => "\122\x75\x61\156\x67\x20\x64\141\x6e\40\x53\x65\x73\x69\x20\123\151\163\x77\x61", "\163\145\x74\x74\151\156\x67" => $this->dashboard->getSetting(), "\153\145\x6c\141\x73" => $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt), "\162\x75\141\x6e\x67\x5f\153\145\x6c\141\x73" => $this->cbt->getKelasList($tp->id_tp, $smt->id_smt), "\163\x65\x73\x69" => $this->dropdown->getAllSesi(), "\162\165\141\x6e\x67" => $this->cbt->getAllRuang(), "\x74\x70" => $this->dashboard->getTahun(), "\164\160\x5f\141\x63\164\x69\166\145" => $tp, "\x73\155\164" => $this->dashboard->getSemester(), "\x73\155\164\x5f\x61\x63\x74\151\x76\x65" => $smt, "\160\x72\157\146\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id)];
        goto W8uOp;
        Y_cVE:
        $siswas = $this->cbt->getRuangSesiSiswa($kls, $tp->id_tp, $smt->id_smt);
        goto GKfIO;
        bsZ3E:
        $this->load->view("\137\164\x65\x6d\x70\x6c\141\164\x65\163\x2f\144\x61\x73\x68\142\157\141\x72\144\57\x5f\150\145\141\x64\145\162", $data);
        goto oJpKp;
        GKfIO:
        KIglN:
        goto MIYwg;
        k64DG:
        $kelas_selected = $kls != null ? $kls : "\60";
        goto QU1ay;
        bFSZ0:
        $data["\153\x65\x6c\141\x73\x5f\163\145\x6c\145\x63\x74\145\x64"] = $kelas_selected;
        goto bsZ3E;
        qpvT1:
        $smt = $this->dashboard->getSemesterActive();
        goto Og9mg;
        oIeOW:
        $this->load->view("\137\164\145\155\160\x6c\141\x74\145\x73\x2f\x64\141\163\150\x62\x6f\x61\x72\144\57\x5f\x66\157\157\x74\145\162");
        goto EmbJg;
        EmbJg:
    }
    public function getAllRuang()
    {
        $this->output_json($this->cbt->getAllRuang());
    }
    public function getAllSesi()
    {
        $this->output_json($this->dropdown->getAllSesi());
    }
    public function add()
    {
        goto j9G6B;
        Z2r8m:
        $this->master->create("\143\x62\164\137\163\145\163\x69", $insert, false);
        goto khqdK;
        khqdK:
        $data["\x73\164\141\x74\165\x73"] = $insert;
        goto fYbjz;
        fYbjz:
        $this->output_json($data);
        goto bYBOW;
        j9G6B:
        $insert = ["\156\141\155\141\x5f\163\x65\x73\x69" => $this->input->post("\156\141\155\x61\137\163\145\x73\151", true), "\153\157\144\145\x5f\x73\x65\x73\151" => $this->input->post("\153\x6f\x64\145\137\x73\x65\x73\x69", true), "\167\141\x6b\164\165\137\x6d\165\154\x61\151" => $this->input->post("\167\x61\x6b\164\x75\x5f\x6d\x75\x6c\x61\x69", true), "\167\x61\x6b\164\x75\137\x61\x6b\x68\x69\162" => $this->input->post("\x77\x61\x6b\164\165\x5f\141\x6b\x68\x69\162", true)];
        goto Z2r8m;
        bYBOW:
    }
    public function update()
    {
        $data = $this->cbt->updateSesi();
        $this->output->set_content_type("\141\160\x70\154\x69\143\141\164\151\x6f\156\57\x6a\163\x6f\x6e")->set_output($data);
    }
    public function delete()
    {
        goto s3hwj;
        RgqQt:
        if (!$chk) {
            goto QKdkH;
        }
        goto Cmei6;
        Cmei6:
        if (!$this->master->delete("\143\x62\164\137\163\x65\163\151", $chk, "\x69\144\137\163\145\x73\x69")) {
            goto bMhRL;
        }
        goto pHohl;
        RWX2H:
        fhVuo:
        goto gVS8d;
        Gegut:
        QKdkH:
        goto XH2Gv;
        pHohl:
        $this->output_json(["\x73\164\x61\164\x75\163" => true, "\x74\x6f\x74\141\x6c" => count($chk)]);
        goto FC8Oe;
        FC8Oe:
        bMhRL:
        goto o2YCw;
        s3hwj:
        $chk = $this->input->post("\x63\x68\x65\143\x6b\145\x64", true);
        goto RgqQt;
        XH2Gv:
        $this->output_json(["\x73\164\x61\164\x75\163" => false]);
        goto RWX2H;
        o2YCw:
        goto fhVuo;
        goto Gegut;
        gVS8d:
    }
    public function editsesisiswa()
    {
        goto vdatS;
        DRyAw:
        tPELS:
        goto Ii8XY;
        S_GRQ:
        $tp = $this->dashboard->getTahunActive();
        goto BnUzv;
        vdatS:
        $rs = $this->input->post("\x72\x75\141\156\x67\x2d\163\x65\163\151", true);
        goto S_GRQ;
        eCK4u:
        $this->output_json($data);
        goto OTNRo;
        zwXfl:
        $update = false;
        goto EYArn;
        BnUzv:
        $smt = $this->dashboard->getSemesterActive();
        goto zwXfl;
        EYArn:
        foreach ($rs as $id => $klss) {
            goto nX3g2;
            r5q5v:
            EXSqK:
            goto A2Ea3;
            A2Ea3:
            ZVg0t:
            goto SMsSf;
            nX3g2:
            foreach ($klss as $idkls => $kls) {
                goto cN4TL;
                MR4H0:
                $update = $this->db->replace("\x63\142\x74\137\x73\x65\163\x69\x5f\x73\151\x73\167\141", $data);
                goto AJ88I;
                AJ88I:
                DKvfj:
                goto Edtu9;
                cN4TL:
                $data = ["\163\151\x73\167\x61\137\x69\x64" => $id, "\153\x65\x6c\x61\163\137\151\144" => $idkls, "\162\x75\141\x6e\147\x5f\x69\x64" => $kls["\x72\165\x61\156\147"], "\163\x65\x73\151\137\151\144" => $kls["\x73\145\163\151"], "\x74\x70\x5f\x69\144" => $tp->id_tp, "\163\155\164\137\x69\144" => $smt->id_smt];
                goto MR4H0;
                Edtu9:
            }
            goto r5q5v;
            SMsSf:
        }
        goto DRyAw;
        Ii8XY:
        $data["\x73\164\141\x74\x75\163"] = $update;
        goto eCK4u;
        OTNRo:
    }
    public function editsesikelas()
    {
        goto lBm87;
        LLXlJ:
        gBc3f:
        goto xgWAi;
        yDBtX:
        foreach ($input as $d) {
            goto K0YnV;
            O9AVM:
            $data = ["\151\144\x5f\x6b\x65\x6c\x61\163\x5f\162\165\x61\156\x67" => $d->kelas_id . $tp->id_tp . $smt->id_smt, "\x69\144\x5f\153\x65\154\141\163" => $d->kelas_id, "\151\144\x5f\x72\x75\141\156\147" => $d->ruang_id, "\x69\x64\x5f\x73\145\163\151" => $d->sesi_id, "\151\x64\137\164\x70" => $tp->id_tp, "\151\x64\x5f\x73\x6d\x74" => $smt->id_smt, "\163\x65\164\x5f\x73\151\x73\167\x61" => $d->set_siswa];
            goto VReVT;
            Tkx6G:
            B2oEA:
            goto O9AVM;
            s8qzC:
            KLvKV:
            goto plmi7;
            VReVT:
            $update = $this->db->replace("\x63\142\164\137\153\x65\154\141\x73\137\162\165\x61\x6e\x67", $data);
            goto s8qzC;
            Cud0i:
            foreach ($siswas as $siswa) {
                goto rG2Tv;
                UyWxJ:
                LHLuM:
                goto uB75E;
                bgVrj:
                $this->db->replace("\x63\x62\x74\137\x73\x65\163\151\x5f\x73\151\x73\167\x61", $data);
                goto UyWxJ;
                rG2Tv:
                $data = ["\x73\x69\163\167\141\x5f\x69\x64" => $siswa->id_siswa, "\153\145\x6c\x61\163\137\151\144" => $siswa->id_kelas, "\162\x75\141\x6e\x67\x5f\151\144" => $d->ruang_id, "\x73\145\x73\151\137\151\144" => $d->sesi_id, "\x74\160\x5f\151\x64" => $tp->id_tp, "\163\x6d\164\137\x69\x64" => $smt->id_smt];
                goto bgVrj;
                uB75E:
            }
            goto Tkx6G;
            K0YnV:
            $siswas = $this->kelas->getKelasSiswa($d->kelas_id, $tp->id_tp, $smt->id_smt);
            goto Cud0i;
            plmi7:
        }
        goto LLXlJ;
        lq4CP:
        $tp = $this->dashboard->getTahunActive();
        goto DFHrM;
        DFHrM:
        $smt = $this->dashboard->getSemesterActive();
        goto yDBtX;
        lBm87:
        $input = json_decode($this->input->post("\x6b\145\154\x61\x73\137\x73\x65\163\x69", true));
        goto lq4CP;
        xgWAi:
        $data["\x73\x74\x61\x74\x75\163"] = $update;
        goto WC0VW;
        WC0VW:
        $this->output_json($data);
        goto Qwe0L;
        Qwe0L:
    }
}
