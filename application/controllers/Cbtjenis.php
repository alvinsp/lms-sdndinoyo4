<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtjenis extends CI_Controller
{
    public function __construct()
    {
        goto QAUxK;
        QAUxK:
        parent::__construct();
        goto g9731;
        QdC2i:
        $this->load->model("\114\157\x67\137\155\x6f\144\x65\x6c", "\x6c\157\147\147\151\156\x67");
        goto Welzk;
        To8PW:
        tDSpe:
        goto KU5df;
        pUdMh:
        $this->load->model("\104\x61\x73\150\x62\x6f\141\x72\144\137\155\157\144\145\x6c", "\x64\x61\x73\x68\142\x6f\x61\x72\x64");
        goto AqDoi;
        uPVWX:
        redirect("\x61\x75\164\150");
        goto To8PW;
        Z0pp_:
        if ($this->ion_auth->is_admin()) {
            goto VPQDo;
        }
        goto cW4Y5;
        Welzk:
        $this->form_validation->set_error_delimiters('', '');
        goto D5Yw7;
        y6dQc:
        npIj1:
        goto uPVWX;
        L8Z88:
        VPQDo:
        goto tQEt7;
        g9731:
        if (!$this->ion_auth->logged_in()) {
            goto npIj1;
        }
        goto Z0pp_;
        cW4Y5:
        show_error("\x48\141\156\171\141\40\101\144\x6d\x69\x6e\151\x73\x74\162\x61\x74\x6f\x72\40\x79\x61\156\147\x20\x64\x69\142\x65\x72\x69\x20\x68\141\153\x20\165\156\x74\x75\x6b\40\155\145\156\x67\141\x6b\x73\145\163\x20\x68\x61\x6c\141\x6d\x61\156\40\151\x6e\x69\x2c\40\74\141\x20\150\x72\145\x66\x3d\x22" . base_url("\144\141\163\150\142\x6f\x61\162\x64") . "\42\76\113\x65\155\142\141\x6c\151\40\153\145\x20\x6d\145\156\165\x20\x61\167\x61\154\x3c\x2f\x61\76", 403, "\x41\x6b\x73\x65\x73\x20\x54\x65\x72\x6c\x61\x72\141\156\x67");
        goto L8Z88;
        tQEt7:
        goto tDSpe;
        goto y6dQc;
        AqDoi:
        $this->load->model("\x43\142\x74\x5f\x6d\157\x64\x65\154", "\143\x62\164");
        goto QdC2i;
        eE9wO:
        $this->load->model("\x4d\141\163\164\145\x72\x5f\x6d\157\x64\145\154", "\x6d\x61\x73\164\145\x72");
        goto pUdMh;
        KU5df:
        $this->load->library(["\x64\141\x74\x61\x74\141\142\154\x65\163", "\146\157\162\155\137\166\x61\154\x69\x64\141\164\x69\157\156"]);
        goto eE9wO;
        D5Yw7:
    }
    public function output_json($data, $encode = true)
    {
        goto pRa3f;
        Y3i2B:
        $data = json_encode($data);
        goto bF2CR;
        bF2CR:
        xZqg4:
        goto uLb0d;
        pRa3f:
        if (!$encode) {
            goto xZqg4;
        }
        goto Y3i2B;
        uLb0d:
        $this->output->set_content_type("\141\160\160\x6c\151\143\141\x74\151\x6f\156\57\152\x73\x6f\x6e")->set_output($data);
        goto AY10z;
        AY10z:
    }
    public function index()
    {
        goto TL7Up;
        mfVhL:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto hCaKT;
        hCaKT:
        $data["\163\155\x74\137\141\143\x74\x69\x76\145"] = $this->dashboard->getSemesterActive();
        goto vPUbL;
        K_svw:
        $data["\164\x70\x5f\x61\143\164\x69\x76\145"] = $this->dashboard->getTahunActive();
        goto mfVhL;
        OZL09:
        $data = ["\165\x73\145\162" => $user, "\152\165\144\165\x6c" => "\x4a\145\x6e\x69\x73\40\x55\152\151\x61\x6e", "\163\x75\142\x6a\x75\x64\165\x6c" => "\104\141\x74\x61\40\112\x65\x6e\x69\163\x20\125\152\151\x61\x6e", "\x70\162\157\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\151\x6e\147" => $this->dashboard->getSetting()];
        goto nqhIU;
        vPUbL:
        $this->load->view("\137\164\x65\155\x70\x6c\141\164\145\163\57\x64\x61\163\150\142\x6f\141\x72\x64\57\x5f\150\x65\x61\x64\145\162", $data);
        goto C0vIN;
        TL7Up:
        $user = $this->ion_auth->user()->row();
        goto OZL09;
        nqhIU:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto K_svw;
        C0vIN:
        $this->load->view("\143\142\164\x2f\x6a\145\x6e\151\163\57\x64\141\x74\x61");
        goto YpTMq;
        YpTMq:
        $this->load->view("\x5f\x74\x65\x6d\x70\x6c\x61\x74\145\163\57\144\141\x73\150\142\x6f\x61\x72\144\x2f\x5f\146\x6f\157\164\145\x72");
        goto rsCx1;
        rsCx1:
    }
    public function data()
    {
        $this->output_json($this->cbt->getJenis(), false);
    }
    public function add()
    {
        goto Xv3Vy;
        cTh7S:
        $this->master->create("\x63\x62\164\x5f\x6a\x65\156\x69\x73", $insert, false);
        goto iwF69;
        Xv3Vy:
        $insert = ["\156\x61\x6d\x61\137\152\145\x6e\x69\x73" => $this->input->post("\156\141\x6d\x61\x5f\x6a\x65\x6e\151\163", true), "\153\x6f\x64\x65\x5f\152\x65\x6e\151\x73" => $this->input->post("\153\157\x64\x65\x5f\152\x65\156\151\x73", true)];
        goto cTh7S;
        iwF69:
        $data["\163\x74\x61\x74\x75\163"] = $insert;
        goto JwYgc;
        JwYgc:
        $this->output_json($data);
        goto YUE2H;
        YUE2H:
    }
    public function update()
    {
        $data = $this->cbt->updateJenis();
        $this->output->set_content_type("\141\x70\x70\x6c\151\143\141\x74\151\157\x6e\57\x6a\x73\x6f\156")->set_output($data);
    }
    public function delete()
    {
        goto OS7KJ;
        sYk8v:
        Ucm5j:
        goto Gd81x;
        OS7KJ:
        $chk = $this->input->post("\143\x68\x65\143\153\145\144", true);
        goto LoYND;
        vjYvI:
        xeGdY:
        goto ytliF;
        ytliF:
        goto O9K9M;
        goto sYk8v;
        WbG6w:
        O9K9M:
        goto UM_bL;
        RR87p:
        if (!$this->master->delete("\143\x62\164\x5f\x6a\145\156\151\x73", $chk, "\x69\x64\x5f\152\145\156\x69\163")) {
            goto xeGdY;
        }
        goto dMile;
        Gd81x:
        $this->output_json(["\x73\x74\x61\164\165\163" => false]);
        goto WbG6w;
        LoYND:
        if (!$chk) {
            goto Ucm5j;
        }
        goto RR87p;
        dMile:
        $this->output_json(["\x73\164\141\x74\165\163" => true, "\164\157\164\x61\x6c" => count($chk)]);
        goto vjYvI;
        UM_bL:
    }
    public function saveLog($type, $desc)
    {
        $user = $this->ion_auth->user()->row();
        $this->logging->createLog($user->id, $type, $desc);
    }
}
