<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtsesi extends CI_Controller
{
    public function __construct()
    {
        goto nSbq6;
        nzXbM:
        show_error("\x48\141\x6e\171\141\40\x41\144\155\x69\x6e\151\163\164\162\141\164\x6f\162\x20\x79\x61\x6e\147\x20\144\151\x62\145\x72\151\40\150\x61\153\x20\x75\x6e\164\165\153\40\x6d\145\156\147\x61\153\x73\x65\x73\x20\x68\x61\x6c\141\155\141\156\40\x69\x6e\x69\x2c\x20\x3c\141\40\150\x72\145\146\x3d\x22" . base_url("\144\141\163\150\142\x6f\141\x72\x64") . "\x22\x3e\113\145\155\142\x61\154\151\40\x6b\145\x20\155\145\156\165\x20\x61\x77\x61\x6c\x3c\57\x61\x3e", 403, "\101\x6b\x73\145\163\x20\x54\x65\162\x6c\x61\162\141\x6e\147");
        goto qX2lZ;
        dPz3x:
        if (!$this->ion_auth->logged_in()) {
            goto EEWSB;
        }
        goto v1SNL;
        SD2lO:
        $this->form_validation->set_error_delimiters('', '');
        goto u0gCy;
        v1SNL:
        if ($this->ion_auth->is_admin()) {
            goto AdskY;
        }
        goto nzXbM;
        dFtBU:
        goto OSlbT;
        goto Cvzcy;
        nSbq6:
        parent::__construct();
        goto dPz3x;
        E2_ue:
        $this->load->model("\x4d\x61\x73\164\145\162\x5f\x6d\x6f\x64\x65\x6c", "\155\x61\x73\164\x65\162");
        goto ySiwJ;
        ySiwJ:
        $this->load->model("\104\141\x73\x68\142\x6f\x61\x72\144\137\x6d\157\144\x65\x6c", "\x64\141\163\x68\x62\x6f\141\x72\x64");
        goto QRCm0;
        QRCm0:
        $this->load->model("\x43\142\164\137\155\x6f\144\x65\154", "\143\142\164");
        goto SD2lO;
        mHLPB:
        OSlbT:
        goto eiy0g;
        nsHtF:
        redirect("\141\x75\164\x68");
        goto mHLPB;
        eiy0g:
        $this->load->library(["\144\x61\164\x61\x74\x61\x62\x6c\x65\163", "\146\157\162\x6d\x5f\x76\141\154\x69\x64\x61\x74\x69\157\x6e"]);
        goto E2_ue;
        qX2lZ:
        AdskY:
        goto dFtBU;
        Cvzcy:
        EEWSB:
        goto nsHtF;
        u0gCy:
    }
    public function output_json($data, $encode = true)
    {
        goto s3vYt;
        s3vYt:
        if (!$encode) {
            goto XixIj;
        }
        goto qXnyb;
        qXnyb:
        $data = json_encode($data);
        goto P2aHy;
        P2aHy:
        XixIj:
        goto qmJxL;
        qmJxL:
        $this->output->set_content_type("\x61\x70\x70\154\x69\143\x61\164\151\x6f\x6e\x2f\152\163\157\156")->set_output($data);
        goto Q0zDB;
        Q0zDB:
    }
    public function index()
    {
        goto X33jP;
        X33jP:
        $user = $this->ion_auth->user()->row();
        goto Ja2oe;
        VbmPy:
        $this->load->view("\x5f\x74\145\x6d\x70\154\141\164\x65\163\x2f\144\x61\163\150\142\x6f\141\162\144\x2f\x5f\146\157\x6f\x74\145\162");
        goto tjqW2;
        Ja2oe:
        $data = ["\x75\x73\145\162" => $user, "\152\165\144\165\x6c" => "\123\x65\x73\x69\x20\x55\152\151\141\x6e", "\x73\165\142\x6a\x75\144\165\x6c" => "\x44\x61\x74\141\40\123\145\x73\x69\x20\125\x6a\151\141\156", "\160\x72\157\x66\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto pBf9x;
        gJrDR:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto qDcLD;
        D1Hbj:
        $this->load->view("\x5f\164\x65\155\x70\x6c\x61\x74\x65\x73\57\144\x61\x73\150\x62\157\x61\162\x64\57\137\x68\x65\141\144\x65\162", $data);
        goto ZX7wT;
        pBf9x:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto m1tQ7;
        ZX7wT:
        $this->load->view("\x63\142\x74\x2f\163\x65\x73\151\57\x64\x61\164\x61");
        goto VbmPy;
        m1tQ7:
        $data["\164\x70\137\141\x63\164\x69\166\x65"] = $this->dashboard->getTahunActive();
        goto gJrDR;
        qDcLD:
        $data["\x73\155\x74\137\141\x63\164\151\x76\x65"] = $this->dashboard->getSemesterActive();
        goto D1Hbj;
        tjqW2:
    }
    public function data()
    {
        $this->output_json($this->cbt->getSesi(), false);
    }
    public function add()
    {
        goto HI_hm;
        fashd:
        $data["\163\x74\x61\x74\x75\163"] = $insert;
        goto bx4Ox;
        HI_hm:
        $insert = ["\156\141\155\141\137\x73\145\163\151" => $this->input->post("\156\x61\155\x61\x5f\x73\x65\x73\x69", true), "\153\x6f\144\x65\x5f\163\145\x73\x69" => $this->input->post("\x6b\x6f\144\x65\x5f\x73\145\x73\x69", true), "\x77\141\153\164\x75\x5f\x6d\x75\154\141\151" => $this->input->post("\167\x61\153\x74\x75\x5f\155\x75\154\141\151", true), "\x77\x61\153\164\165\x5f\x61\x6b\150\x69\162" => $this->input->post("\x77\x61\153\x74\165\137\141\x6b\150\151\162", true)];
        goto vaa9J;
        bx4Ox:
        $this->output_json($data);
        goto xL2Wi;
        vaa9J:
        $this->master->create("\143\x62\164\x5f\163\x65\x73\x69", $insert, false);
        goto fashd;
        xL2Wi:
    }
    public function update()
    {
        $data = $this->cbt->updateSesi();
        $this->output->set_content_type("\x61\x70\160\154\x69\x63\141\x74\x69\157\x6e\x2f\152\x73\157\156")->set_output($data);
    }
    public function edit($id)
    {
        goto RysQf;
        BTaPY:
        $data["\x74\x70\137\x61\x63\164\151\x76\145"] = $tp;
        goto RO6dU;
        RO6dU:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto zPhxQ;
        RysQf:
        $tp = $this->dashboard->getTahunActive();
        goto aOgX1;
        xgVI3:
        $this->load->view("\137\164\145\155\160\154\x61\x74\x65\163\57\x64\x61\163\150\142\x6f\x61\x72\144\57\137\146\157\x6f\164\145\x72");
        goto HR5MG;
        D1JV7:
        $this->load->view("\137\164\145\x6d\x70\x6c\x61\x74\x65\x73\x2f\144\x61\163\x68\x62\157\x61\162\x64\57\137\150\145\x61\x64\145\162", $data);
        goto RpSNM;
        aOgX1:
        $smt = $this->dashboard->getSemesterActive();
        goto BGrUP;
        T4zXB:
        $data = ["\165\163\x65\x72" => $this->ion_auth->user()->row(), "\152\x75\x64\x75\154" => "\x53\145\x73\151\x20\x53\151\163\x77\x61", "\163\x75\142\152\165\x64\165\x6c" => "\x41\164\165\162\x20\x53\145\x73\151\40\123\151\x73\x77\x61", "\163\145\163\151" => $this->cbt->getSesiById($id)];
        goto D1JV7;
        RpSNM:
        $this->load->view("\143\142\164\57\163\145\163\x69\x2f\x65\144\x69\164");
        goto xgVI3;
        BGrUP:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto BTaPY;
        zPhxQ:
        $data["\163\x6d\164\x5f\x61\143\x74\151\x76\145"] = $smt;
        goto T4zXB;
        HR5MG:
    }
    public function delete()
    {
        goto shKeu;
        NezVy:
        $this->output_json(["\163\x74\141\x74\x75\x73" => false]);
        goto Jtk0F;
        AfWJ5:
        cMIvu:
        goto SqbbY;
        Jtk0F:
        bue1B:
        goto SbkE3;
        xGno6:
        cHQjQ:
        goto NezVy;
        r4JPE:
        if (!$chk) {
            goto cHQjQ;
        }
        goto nJXNN;
        nJXNN:
        if (!$this->master->delete("\x63\142\x74\137\163\x65\163\151", $chk, "\x69\x64\137\163\145\x73\x69")) {
            goto cMIvu;
        }
        goto fe2HJ;
        shKeu:
        $chk = $this->input->post("\143\x68\x65\143\153\x65\144", true);
        goto r4JPE;
        fe2HJ:
        $this->output_json(["\163\164\141\x74\165\x73" => true, "\164\157\164\141\x6c" => count($chk)]);
        goto AfWJ5;
        SqbbY:
        goto bue1B;
        goto xGno6;
        SbkE3:
    }
    public function sesisiswa()
    {
        goto zdjJC;
        O6pro:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto MIzYL;
        IsQSG:
        $this->load->view("\x5f\x74\145\x6d\x70\154\x61\x74\145\x73\x2f\144\x61\163\150\142\x6f\141\162\x64\57\x5f\x66\x6f\157\164\145\x72");
        goto y08Sc;
        zdjJC:
        $data = ["\x75\163\145\x72" => $this->ion_auth->user()->row(), "\x6a\165\144\x75\154" => "\123\145\x73\151\x20\x55\152\151\x61\156", "\163\165\142\152\165\x64\x75\x6c" => "\104\141\164\x61\x20\123\x65\163\151\x20\125\152\151\x61\156"];
        goto O6pro;
        MIzYL:
        $data["\x74\160\x5f\141\x63\164\x69\166\x65"] = $this->dashboard->getTahunActive();
        goto aVnHx;
        aVnHx:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto yq0DJ;
        NycsU:
        $this->load->view("\x63\x62\x74\57\x73\145\x73\151\163\151\x73\x77\141\57\x64\x61\x74\141");
        goto IsQSG;
        GjCwY:
        $this->load->view("\x5f\x74\145\155\x70\x6c\x61\164\145\163\57\x64\x61\x73\150\142\x6f\141\162\x64\x2f\x5f\150\x65\x61\144\x65\162", $data);
        goto NycsU;
        yq0DJ:
        $data["\163\x6d\164\137\141\143\x74\151\x76\x65"] = $this->dashboard->getSemesterActive();
        goto GjCwY;
        y08Sc:
    }
}
