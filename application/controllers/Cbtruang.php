<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtruang extends CI_Controller
{
    public function __construct()
    {
        goto PE5Lb;
        I61hS:
        Xa1VH:
        goto Lt23Z;
        HkScz:
        $this->load->library(["\144\141\164\141\x74\x61\142\154\145\x73", "\146\157\x72\155\137\x76\141\x6c\x69\144\x61\x74\151\x6f\156"]);
        goto Pbc28;
        qr3HP:
        $this->form_validation->set_error_delimiters('', '');
        goto Sh2tv;
        Lt23Z:
        goto mAc7a;
        goto qQQ4B;
        G7g3J:
        $this->load->model("\104\141\x73\x68\142\157\x61\x72\x64\137\x6d\x6f\144\145\x6c", "\x64\141\163\150\142\x6f\x61\162\144");
        goto l6Rzs;
        Ldj9b:
        if (!$this->ion_auth->logged_in()) {
            goto LuDCG;
        }
        goto pvgKD;
        YWPAu:
        mAc7a:
        goto HkScz;
        OGHMB:
        redirect("\141\x75\164\x68");
        goto YWPAu;
        pvgKD:
        if ($this->ion_auth->is_admin()) {
            goto Xa1VH;
        }
        goto Zq8JA;
        Zq8JA:
        show_error("\110\141\x6e\171\x61\40\101\144\x6d\x69\156\151\x73\164\x72\141\x74\x6f\162\x20\171\x61\x6e\x67\40\x64\x69\142\x65\x72\x69\x20\x68\141\x6b\x20\x75\156\164\x75\x6b\40\x6d\145\156\x67\141\153\x73\145\x73\40\150\x61\154\141\x6d\141\x6e\40\151\x6e\x69\54\40\x3c\141\40\x68\x72\x65\x66\75\x22" . base_url("\144\x61\163\x68\x62\x6f\x61\162\x64") . "\x22\76\113\145\x6d\142\141\154\151\x20\153\x65\40\x6d\145\x6e\165\40\x61\167\141\x6c\74\57\141\x3e", 403, "\x41\x6b\x73\x65\163\40\x54\145\162\154\141\x72\x61\156\x67");
        goto I61hS;
        l6Rzs:
        $this->load->model("\x43\142\164\137\155\157\x64\x65\x6c", "\143\x62\164");
        goto qr3HP;
        PE5Lb:
        parent::__construct();
        goto Ldj9b;
        Pbc28:
        $this->load->model("\115\141\163\164\145\162\137\155\x6f\144\x65\x6c", "\x6d\x61\163\164\145\162");
        goto G7g3J;
        qQQ4B:
        LuDCG:
        goto OGHMB;
        Sh2tv:
    }
    public function output_json($data, $encode = true)
    {
        goto TcZdv;
        Svzq9:
        $data = json_encode($data);
        goto XJ3Bi;
        TcZdv:
        if (!$encode) {
            goto j4qtB;
        }
        goto Svzq9;
        XJ3Bi:
        j4qtB:
        goto iiz_E;
        iiz_E:
        $this->output->set_content_type("\141\160\160\154\x69\x63\141\164\x69\157\x6e\57\152\163\x6f\x6e")->set_output($data);
        goto H_WxD;
        H_WxD:
    }
    public function index()
    {
        goto ITi71;
        cGwJ2:
        $this->load->view("\143\142\164\x2f\x72\x75\141\x6e\147\57\x64\141\164\x61");
        goto hygoi;
        G986w:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto UKcTs;
        hygoi:
        $this->load->view("\x5f\x74\x65\155\160\154\x61\x74\145\163\x2f\144\141\x73\150\x62\x6f\141\162\x64\57\137\x66\x6f\157\164\x65\162");
        goto juyQf;
        ITi71:
        $user = $this->ion_auth->user()->row();
        goto q6hS1;
        REcUw:
        $data["\x73\x6d\x74\137\x61\x63\x74\151\x76\x65"] = $this->dashboard->getSemesterActive();
        goto NN34j;
        q6hS1:
        $data = ["\165\163\x65\x72" => $user, "\152\165\x64\165\154" => "\x52\165\x61\156\x67\40\125\x6a\x69\141\x6e", "\163\165\142\152\x75\144\165\x6c" => "\104\x61\x74\x61\x20\x52\x75\141\x6e\x67\40\x55\152\151\141\156", "\160\162\157\146\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\151\x6e\x67" => $this->dashboard->getSetting()];
        goto G986w;
        UKcTs:
        $data["\x74\160\x5f\141\143\164\151\x76\x65"] = $this->dashboard->getTahunActive();
        goto kcUBh;
        kcUBh:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto REcUw;
        NN34j:
        $this->load->view("\137\164\x65\155\160\154\x61\164\x65\163\x2f\x64\x61\163\150\142\x6f\141\x72\x64\57\x5f\x68\145\x61\x64\x65\162", $data);
        goto cGwJ2;
        juyQf:
    }
    public function data()
    {
        $this->output_json($this->cbt->getRuang(), false);
    }
    public function add()
    {
        goto REEFB;
        REEFB:
        $insert = ["\156\141\155\x61\x5f\x72\165\x61\x6e\147" => $this->input->post("\x6e\141\x6d\x61\137\162\165\141\x6e\x67", true), "\x6b\157\x64\x65\137\x72\165\141\x6e\147" => $this->input->post("\153\x6f\144\x65\x5f\162\x75\141\x6e\147", true)];
        goto EXsms;
        EXsms:
        $this->master->create("\x63\142\x74\137\162\165\x61\x6e\147", $insert, false);
        goto g0xk2;
        g0xk2:
        $data["\163\x74\x61\164\165\163"] = $insert;
        goto ICavp;
        ICavp:
        $this->output_json($data);
        goto CIJM6;
        CIJM6:
    }
    public function update()
    {
        $data = $this->cbt->updateRuang();
        $this->output->set_content_type("\141\x70\160\154\151\143\141\x74\x69\x6f\156\57\x6a\163\157\156")->set_output($data);
    }
    public function delete()
    {
        goto esdpS;
        AYg9_:
        P_3y5:
        goto sltJp;
        ECP4m:
        $this->output_json(["\x73\164\x61\164\165\163" => true, "\x74\157\x74\141\x6c" => count($chk)]);
        goto EDngR;
        EDngR:
        neH2k:
        goto bwS13;
        bwS13:
        goto P_3y5;
        goto aY6hY;
        aY6hY:
        ufGQ3:
        goto Wb1eN;
        esdpS:
        $chk = $this->input->post("\x63\150\x65\x63\153\x65\x64", true);
        goto Is8Kk;
        Is8Kk:
        if (!$chk) {
            goto ufGQ3;
        }
        goto L1XxY;
        L1XxY:
        if (!$this->master->delete("\x63\x62\x74\137\x72\x75\141\156\147", $chk, "\x69\144\x5f\x72\165\141\156\x67")) {
            goto neH2k;
        }
        goto ECP4m;
        Wb1eN:
        $this->output_json(["\x73\164\x61\x74\165\163" => false]);
        goto AYg9_;
        sltJp:
    }
}
