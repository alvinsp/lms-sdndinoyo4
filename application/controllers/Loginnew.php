<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\x41\123\x45\120\x41\124\110") or exit("\x4e\157\40\144\151\x72\x65\x63\x74\40\163\x63\x72\151\160\164\40\x61\143\x63\x65\163\163\x20\141\154\x6c\x6f\167\145\144");
class Loginnew extends CI_Controller
{
    public function __construct()
    {
        goto k8k5m;
        ZsMjo:
        bwkyC:
        goto OFS1K;
        vzDkJ:
        $this->load->model("\x44\141\163\150\142\157\141\x72\x64\137\155\157\144\145\x6c", "\144\141\x73\150\142\x6f\141\162\x64");
        goto uwZMM;
        f6w1s:
        if (!$this->ion_auth->logged_in()) {
            goto Nxvqw;
        }
        goto cFSFW;
        MFcj_:
        Nxvqw:
        goto eFJnS;
        k8k5m:
        parent::__construct();
        goto f6w1s;
        Di7Dy:
        show_error("\110\141\156\x79\141\x20\x41\x64\155\x69\x6e\151\x73\164\162\x61\x74\x6f\x72\40\x79\x61\156\x67\x20\144\x69\142\145\162\x69\40\150\141\x6b\x20\x75\156\164\x75\153\40\x6d\145\156\x67\141\x6b\163\145\163\40\150\141\154\141\x6d\141\x6e\40\x69\156\151\x2c\x20\x3c\141\40\150\x72\145\x66\75\42" . base_url("\144\x61\163\150\142\157\141\162\144") . "\x22\x3e\x4b\x65\155\142\x61\154\x69\40\153\x65\x20\x6d\145\x6e\x75\40\141\167\141\x6c\74\x2f\x61\76", 403, "\101\x6b\163\145\163\x20\x54\145\162\x6c\x61\162\x61\156\147");
        goto ZsMjo;
        OFS1K:
        goto zCzxg;
        goto MFcj_;
        teD6z:
        zCzxg:
        goto b04dt;
        eFJnS:
        redirect("\x61\x75\164\150");
        goto teD6z;
        uwZMM:
        $this->form_validation->set_error_delimiters('', '');
        goto d_uxN;
        b04dt:
        $this->load->library(["\x64\x61\x74\x61\164\141\142\x6c\145\163", "\x66\157\x72\155\x5f\166\141\154\x69\144\141\164\151\157\x6e"]);
        goto vzDkJ;
        cFSFW:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\x75"))) {
            goto bwkyC;
        }
        goto Di7Dy;
        d_uxN:
    }
    public function output_json($data, $encode = true)
    {
        goto mG1q2;
        Klupe:
        ZPFWI:
        goto cbt9c;
        mG1q2:
        if (!$encode) {
            goto ZPFWI;
        }
        goto LoxVr;
        LoxVr:
        $data = json_encode($data);
        goto Klupe;
        cbt9c:
        $this->output->set_content_type("\141\160\160\x6c\151\143\141\164\151\157\156\x2f\152\x73\157\x6e")->set_output($data);
        goto it5Ij;
        it5Ij:
    }
    public function index()
    {
        goto lErnc;
        jl_aO:
        $data = ["\x75\x73\x65\x72" => $user, "\x6a\x75\x64\165\154" => "\125\163\x65\162\40\115\141\156\x61\x67\145\155\145\156\x74", "\163\165\x62\152\x75\x64\165\x6c" => "\x44\x61\x74\141\x20\125\163\145\162\x20\123\x69\x73\x77\x61", "\163\x65\164\164\151\156\x67" => $this->dashboard->getSetting()];
        goto X8Su1;
        ASaur:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto UbXqL;
        wsnKo:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto de3P1;
        W_q4h:
        $this->load->view("\141\165\x74\150\57\156\145\167\137\154\157\147\151\156", $data);
        goto y5O2H;
        XXurM:
        $smt = $this->dashboard->getSemesterActive();
        goto ASaur;
        lErnc:
        $user = $this->ion_auth->user()->row();
        goto jl_aO;
        vsUQx:
        $data["\x70\162\x6f\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto W_q4h;
        X8Su1:
        $tp = $this->dashboard->getTahunActive();
        goto XXurM;
        de3P1:
        $data["\163\x6d\164\137\x61\143\x74\x69\x76\145"] = $smt;
        goto vsUQx;
        UbXqL:
        $data["\x74\x70\x5f\141\x63\x74\151\166\145"] = $tp;
        goto wsnKo;
        y5O2H:
    }
}
