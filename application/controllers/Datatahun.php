<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\x53\x45\x50\x41\x54\110") or exit("\x4e\157\40\144\151\162\145\x63\x74\x20\163\143\162\x69\x70\164\40\x61\143\143\145\x73\163\x20\x61\154\x6c\157\x77\x65\x64");
class Datatahun extends CI_Controller
{
    public function __construct()
    {
        goto Oh957;
        SXHM7:
        ek7z7:
        goto P8GkL;
        rLYZF:
        m4v8G:
        goto b4MMQ;
        wnTuf:
        $this->load->model("\x4d\141\x73\x74\145\162\137\155\157\x64\145\x6c", "\155\141\163\164\x65\162");
        goto W1EOU;
        P8GkL:
        goto m4v8G;
        goto o6pF8;
        MGVFY:
        if ($this->ion_auth->is_admin()) {
            goto ek7z7;
        }
        goto DxNg9;
        Oh957:
        parent::__construct();
        goto nqv1f;
        SPIln:
        $this->form_validation->set_error_delimiters('', '');
        goto L7FcV;
        W1EOU:
        $this->load->model("\x44\141\163\150\x62\157\141\x72\144\137\155\x6f\x64\145\154", "\x64\141\163\x68\x62\x6f\x61\x72\x64");
        goto v5mrF;
        v5mrF:
        $this->load->model("\x4c\x6f\147\x5f\x6d\x6f\x64\x65\154", "\154\157\x67\x67\x69\x6e\x67");
        goto SPIln;
        nqv1f:
        if (!$this->ion_auth->logged_in()) {
            goto KzyUf;
        }
        goto MGVFY;
        o6pF8:
        KzyUf:
        goto QD1Ea;
        DxNg9:
        show_error("\x48\141\x6e\171\x61\x20\x41\144\x6d\151\156\151\x73\x74\x72\141\164\x6f\x72\x20\x79\x61\x6e\147\40\x64\x69\142\x65\162\151\x20\150\x61\x6b\40\x75\156\x74\x75\153\40\x6d\x65\x6e\x67\x61\x6b\163\x65\163\x20\150\x61\154\141\x6d\141\156\x20\151\x6e\x69\x2c\x20\x3c\x61\40\150\x72\x65\146\x3d\42" . base_url("\x64\141\x73\x68\142\x6f\141\162\144") . "\42\x3e\x4b\x65\155\x62\x61\154\x69\40\x6b\x65\x20\x6d\x65\x6e\x75\x20\141\x77\x61\x6c\74\57\141\x3e", 403, "\x41\153\x73\145\x73\x20\x54\145\x72\x6c\141\162\x61\x6e\147");
        goto SXHM7;
        b4MMQ:
        $this->load->library(["\x64\141\x74\141\x74\141\142\154\145\x73", "\146\157\x72\155\137\166\141\x6c\151\144\x61\x74\151\157\156"]);
        goto wnTuf;
        QD1Ea:
        redirect("\141\x75\x74\x68");
        goto rLYZF;
        L7FcV:
    }
    public function output_json($data, $encode = true)
    {
        goto DLw43;
        DLw43:
        if (!$encode) {
            goto HCcG2;
        }
        goto Y5cmR;
        CDIoG:
        HCcG2:
        goto drEDr;
        drEDr:
        $this->output->set_content_type("\x61\x70\160\154\151\143\x61\164\x69\x6f\x6e\x2f\152\x73\x6f\156")->set_output($data);
        goto dC43z;
        Y5cmR:
        $data = json_encode($data);
        goto CDIoG;
        dC43z:
    }
    public function index()
    {
        goto v6v1d;
        Mk1Mo:
        $data["\x74\x70\x5f\x61\143\x74\x69\x76\x65"] = $tp;
        goto WoFgG;
        dBXr6:
        $data["\163\x6d\164\x5f\141\x63\164\151\x76\x65"] = $smt;
        goto PdgcP;
        pXIyk:
        $this->load->view("\x5f\x74\145\155\x70\154\x61\x74\x65\163\57\x64\141\x73\x68\142\x6f\x61\x72\144\x2f\137\x68\145\x61\x64\145\x72", $data);
        goto r3zHS;
        uxhIq:
        $data = ["\x75\x73\145\x72" => $user, "\152\165\144\x75\154" => "\x54\141\150\x75\156\40\120\145\154\141\x6a\x61\x72\x61\x6e\40\144\141\x6e\x20\123\145\155\x65\163\164\145\162", "\x73\165\x62\x6a\x75\x64\x75\x6c" => "\101\164\165\162\x20\x54\141\x68\x75\156\40\120\x65\x6c\141\152\x61\x72\141\156\40\x64\x61\x6e\x20\x53\x65\x6d\145\x73\164\145\x72", "\160\x72\157\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()];
        goto OMR7m;
        uOcM0:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto Mk1Mo;
        PdgcP:
        $jml = $this->master->getJmlHariEfektif($tp->id_tp . $smt->id_smt);
        goto qkqrr;
        OMR7m:
        $tp = $this->dashboard->getTahunActive();
        goto CY7yG;
        qkqrr:
        $data["\x6a\155\x6c\x5f\x68\141\162\x69"] = $jml == null ? "\60" : $jml->jml_hari_efektif;
        goto pXIyk;
        CY7yG:
        $smt = $this->dashboard->getSemesterActive();
        goto uOcM0;
        v6v1d:
        $user = $this->ion_auth->user()->row();
        goto uxhIq;
        r3zHS:
        $this->load->view("\155\x61\x73\164\x65\162\57\164\x61\x68\x75\x6e\x2f\x64\141\164\x61");
        goto Ux79r;
        WoFgG:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto dBXr6;
        Ux79r:
        $this->load->view("\x5f\x74\x65\155\160\x6c\141\x74\x65\x73\57\x64\x61\x73\x68\x62\157\141\162\144\x2f\x5f\146\x6f\x6f\164\145\x72");
        goto FgtSE;
        FgtSE:
    }
    public function data()
    {
        $this->output_json($this->dashboard->getDataTahun(), false);
    }
    public function gantiTahun()
    {
        goto sZmbr;
        h14of:
        $this->output_json($data);
        goto eZl_K;
        aX5sX:
        foreach ($inputTp as $tps) {
            goto sQPpP;
            KHiMp:
            $tahun = $tps->tp;
            goto PzWp5;
            YUuQz:
            kbZNy:
            goto Sfz9a;
            WSgVb:
            $active = 1;
            goto Qrkjw;
            yUACb:
            $active = 0;
            goto Rq9E3;
            PzWp5:
            if ($id_tp === $aktif) {
                goto Vlyi2;
            }
            goto yUACb;
            Rq9E3:
            goto wTxBE;
            goto iDkHy;
            Qrkjw:
            wTxBE:
            goto aTRDK;
            aTRDK:
            $update[] = array("\x69\144\x5f\x74\x70" => $id_tp, "\x74\x61\x68\x75\156" => $tahun, "\141\143\164\x69\166\145" => $active);
            goto YUuQz;
            sQPpP:
            $id_tp = $tps->id;
            goto KHiMp;
            iDkHy:
            Vlyi2:
            goto WSgVb;
            Sfz9a:
        }
        goto psk3h;
        HXj9t:
        $this->logging->saveLog(4, "\x6d\x65\x6e\x67\147\x61\156\x74\151\40\164\x61\150\165\x6e\40\141\x6a\141\162\141\156\x20\x61\x6b\164\151\146");
        goto h14of;
        psk3h:
        RJ6a5:
        goto AXEul;
        xT16n:
        $data["\155\x73\x67"] = "\x4d\x65\x72\x75\142\141\150\x20\124\141\150\165\156\x20\101\153\x74\x69\146";
        goto vzdRg;
        vzdRg:
        $data["\x75\x70\x64\141\x74\145"] = $update;
        goto xZS4h;
        xZS4h:
        $data["\x73\x74\x61\164\165\163"] = true;
        goto HXj9t;
        sZmbr:
        $aktif = $this->input->post("\141\143\164\151\166\145", true);
        goto fMkcZ;
        fMkcZ:
        $inputTp = json_decode($this->input->post("\x74\x61\150\x75\156", false));
        goto aX5sX;
        AXEul:
        $this->dashboard->update("\155\141\x73\x74\x65\x72\137\164\160", $update, "\151\x64\x5f\x74\x70", null, true);
        goto xT16n;
        eZl_K:
    }
    public function gantiSemester()
    {
        goto AS0Zj;
        xhpbY:
        $inputSmt = json_decode($this->input->post("\163\x65\x6d\145\163\164\145\162", false));
        goto FQPmN;
        FQPmN:
        foreach ($inputSmt as $tps) {
            goto IFdFz;
            y0zWq:
            $smt = $tps->Semester;
            goto dqUT4;
            tjdTr:
            $active = 1;
            goto DEbH_;
            i4g8E:
            CEFAr:
            goto ykEWx;
            wCSsV:
            $active = 0;
            goto Re9YR;
            veyyQ:
            KbdZO:
            goto tjdTr;
            Re9YR:
            goto iTdb8;
            goto veyyQ;
            IFdFz:
            $id_smt = $tps->id;
            goto y0zWq;
            DEbH_:
            iTdb8:
            goto ziISW;
            ziISW:
            $update[] = array("\151\x64\x5f\x73\155\x74" => $id_smt, "\x73\x6d\x74" => $smt, "\141\x63\164\151\x76\x65" => $active);
            goto i4g8E;
            dqUT4:
            if ($id_smt === $aktif) {
                goto KbdZO;
            }
            goto wCSsV;
            ykEWx:
        }
        goto NXbv4;
        gtGCj:
        $this->logging->saveLog(4, "\155\x65\156\147\147\x61\156\164\x69\40\163\145\155\145\163\x74\145\x72\40\x61\153\164\x69\x66");
        goto ef2OU;
        NXbv4:
        Efx39:
        goto N6CCq;
        Y44E8:
        $data["\165\160\144\141\164\145"] = $update;
        goto HjFoJ;
        bZpLi:
        $data["\155\163\x67"] = "\x4d\x65\162\165\142\x61\x68\x20\123\x65\x6d\145\163\164\145\162\x20\101\153\x74\151\146";
        goto Y44E8;
        ef2OU:
        $this->output_json($data);
        goto A7aMD;
        AS0Zj:
        $aktif = $this->input->post("\x61\x63\x74\151\x76\x65", true);
        goto xhpbY;
        N6CCq:
        $this->dashboard->update("\x6d\141\163\164\x65\162\137\x73\x6d\164", $update, "\x69\144\137\163\155\x74", null, true);
        goto bZpLi;
        HjFoJ:
        $data["\x73\164\141\164\x75\x73"] = true;
        goto gtGCj;
        A7aMD:
    }
    public function add()
    {
        goto pPJMJ;
        jt061:
        e783o:
        goto H2siF;
        TN6A3:
        if ($method === "\141\x64\x64") {
            goto C1FmX;
        }
        goto Ul2aS;
        NxC2V:
        $this->logging->saveLog(3, "\x6d\145\x6e\141\x6d\x62\141\x68\40\164\x61\x68\x75\156\x20\160\145\x6c\141\152\x61\162\x61\156");
        goto jt061;
        cyV2t:
        $data = $this->master->create("\155\x61\163\x74\x65\x72\x5f\x74\x70", $insert);
        goto NxC2V;
        trOPP:
        $update = array("\151\144\x5f\x74\160" => $id, "\164\141\150\165\x6e" => $tahun);
        goto upU0c;
        hOUWQ:
        $this->logging->saveLog(4, "\155\145\156\147\x65\x64\x69\x74\40\x74\x61\150\x75\x6e\x20\x70\145\154\x61\x6a\141\x72\x61\x6e");
        goto WGOR2;
        aXvmZ:
        $insert = ["\164\141\x68\x75\156" => $tahun];
        goto cyV2t;
        Ul2aS:
        $id = $this->input->post("\151\x64\x5f\164\x61\150\x75\156", true);
        goto trOPP;
        CA9d1:
        $tahun = $this->input->post("\164\141\150\x75\156", true);
        goto TN6A3;
        pPJMJ:
        $method = $this->input->post("\155\x65\164\x68\157\x64", true);
        goto CA9d1;
        WGOR2:
        goto e783o;
        goto Jnp6z;
        H2siF:
        $this->output->set_content_type("\141\160\160\154\x69\x63\141\x74\151\157\x6e\x2f\152\x73\x6f\156")->set_output($data);
        goto AXSqv;
        Jnp6z:
        C1FmX:
        goto aXvmZ;
        upU0c:
        $data = $this->master->update("\x6d\141\x73\x74\145\x72\x5f\164\x70", $update, "\x69\144\x5f\x74\160", $id);
        goto hOUWQ;
        AXSqv:
    }
    public function saveHariEfektif()
    {
        goto TXAnk;
        tit7P:
        $update = $this->db->replace("\x6d\x61\163\x74\145\162\137\x68\x61\x72\151\x5f\x65\x66\145\x6b\x74\151\146", $input);
        goto HCzVj;
        TXAnk:
        $tp = $this->dashboard->getTahunActive();
        goto sIqiI;
        sIqiI:
        $smt = $this->dashboard->getSemesterActive();
        goto ET9Yh;
        TyVbH:
        $this->output_json($data);
        goto UrzmT;
        HCzVj:
        $data["\x73\164\x61\x74\x75\163"] = $update;
        goto TyVbH;
        ET9Yh:
        $input = ["\151\x64\137\150\x61\x72\151\x5f\x65\146\145\x6b\164\x69\146" => $tp->id_tp . $smt->id_smt, "\152\155\154\x5f\x68\141\x72\151\137\x65\x66\145\x6b\x74\x69\x66" => $this->input->post("\152\x6d\154\x5f\x68\141\162\x69", true)];
        goto tit7P;
        UrzmT:
    }
    public function hapusTahun()
    {
        goto dNy11;
        cKaXl:
        $data["\x73\164\141\164\x75\x73"] = true;
        goto ziwpT;
        iDIKu:
        a_3Kr:
        goto n1y5g;
        Nqfhu:
        goto C9odI;
        goto iDIKu;
        n1y5g:
        $this->logging->saveLog(5, "\x6d\x65\x6e\x67\150\141\160\165\163\x20\164\141\x68\165\x6e\x20\160\x65\154\x61\152\141\162\x61\x6e");
        goto cKaXl;
        dNy11:
        $id = $this->input->post("\150\x61\160\165\163", true);
        goto tUUpu;
        GNNWX:
        $data["\155\163\147"] = "\115\x65\156\147\150\141\160\165\x73\40\124\141\150\x75\x6e\40\x50\x65\x6c\141\x6a\x61\x72\141\x6e";
        goto AKjTz;
        ziwpT:
        C9odI:
        goto GNNWX;
        AKjTz:
        $this->output_json($data);
        goto QjmH4;
        tUUpu:
        if ($this->dashboard->hapus("\155\x61\163\164\x65\162\x5f\164\x70", $id, "\x69\144\x5f\164\x70")) {
            goto a_3Kr;
        }
        goto NnJwv;
        NnJwv:
        $data["\163\164\141\x74\165\x73"] = false;
        goto Nqfhu;
        QjmH4:
    }
    public function hapus()
    {
        goto MD4SF;
        Moodj:
        X5GWs:
        goto hE4HH;
        rhc4F:
        if (!$chk) {
            goto X5GWs;
        }
        goto CK3Rt;
        jVT4W:
        goto hhAfm;
        goto Moodj;
        EnGpr:
        hhAfm:
        goto gZ07V;
        hE4HH:
        $this->output_json(["\163\164\141\x74\x75\163" => false]);
        goto EnGpr;
        z8oRb:
        $this->logging->saveLog(5, "\155\x65\x6e\147\150\141\160\x75\x73\x20\x74\x61\x68\x75\156\x20\x70\x65\x6c\x61\152\141\x72\141\x6e");
        goto lKAfd;
        rnjx2:
        POFVp:
        goto jVT4W;
        MD4SF:
        $chk = $this->input->post("\x63\150\145\143\153\145\x64", true);
        goto rhc4F;
        lKAfd:
        $this->output_json(["\163\x74\141\164\165\163" => true, "\164\157\164\x61\x6c" => count($chk)]);
        goto rnjx2;
        CK3Rt:
        if (!$this->dashboard->hapus("\155\x61\x73\x74\145\162\137\164\160", $chk, "\x69\x64\x5f\x74\160")) {
            goto POFVp;
        }
        goto z8oRb;
        gZ07V:
    }
}
