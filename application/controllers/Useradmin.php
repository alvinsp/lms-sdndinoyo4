<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\x41\x53\x45\120\101\124\x48") or exit("\x4e\x6f\40\144\x69\x72\145\143\164\x20\x73\x63\x72\x69\x70\x74\x20\x61\143\x63\145\163\x73\x20\141\x6c\154\x6f\x77\x65\144");
class Useradmin extends CI_Controller
{
    public function __construct()
    {
        goto UOBX2;
        HTa3T:
        if (!$this->ion_auth->logged_in()) {
            goto wfEkO;
        }
        goto w7U5O;
        gJDgH:
        $this->form_validation->set_error_delimiters('', '');
        goto GY3Ns;
        mx0N4:
        show_error("\x48\141\156\x79\x61\40\x41\144\155\x69\156\x69\163\164\162\141\x74\x6f\x72\x20\171\x61\156\x67\40\x64\x69\142\x65\x72\x69\40\x68\141\x6b\40\165\x6e\164\165\153\x20\155\x65\x6e\147\x61\153\x73\145\163\40\x68\x61\154\x61\155\x61\156\40\x69\156\151\54\40\x3c\x61\x20\x68\x72\145\146\75\42" . base_url("\x64\x61\x73\x68\142\x6f\141\x72\144") . "\42\x3e\x4b\x65\155\x62\x61\x6c\151\x20\x6b\x65\x20\155\145\156\165\x20\141\x77\141\x6c\x3c\57\141\x3e", 403, "\101\153\163\145\163\x20\124\x65\162\154\141\162\141\x6e\147");
        goto U2610;
        w7U5O:
        if ($this->ion_auth->is_admin()) {
            goto i1wOX;
        }
        goto mx0N4;
        U2610:
        i1wOX:
        goto x42TD;
        obGPQ:
        $this->load->model("\125\x73\145\162\163\137\x6d\157\x64\145\154", "\165\x73\145\x72\163");
        goto Fwb9p;
        V7MSH:
        $this->load->library(["\144\141\x74\141\164\141\142\x6c\x65\163", "\x66\x6f\162\x6d\137\x76\x61\x6c\x69\144\x61\x74\x69\157\x6e"]);
        goto obGPQ;
        Xc8YY:
        redirect("\141\x75\164\150");
        goto Pw33M;
        UOBX2:
        parent::__construct();
        goto HTa3T;
        Pw33M:
        YyqPt:
        goto TMIBh;
        x42TD:
        goto YyqPt;
        goto GbXN8;
        JyDLy:
        $this->load->model("\104\141\x73\x68\x62\x6f\141\162\144\x5f\155\x6f\144\145\x6c", "\x64\x61\x73\x68\142\x6f\141\162\144");
        goto gJDgH;
        Fwb9p:
        $this->load->model("\115\141\x73\x74\x65\162\x5f\x6d\157\x64\x65\x6c", "\x6d\x61\x73\x74\145\162");
        goto JyDLy;
        TMIBh:
        $this->load->library("\165\x70\x6c\157\x61\x64");
        goto V7MSH;
        GbXN8:
        wfEkO:
        goto Xc8YY;
        GY3Ns:
    }
    public function is_admin()
    {
        goto qVUp6;
        qVUp6:
        if ($this->ion_auth->is_admin()) {
            goto K2Oew;
        }
        goto hDW5Z;
        UbLU2:
        K2Oew:
        goto hGrHG;
        hDW5Z:
        show_error("\110\141\156\x79\141\x20\101\x64\155\x69\x6e\151\x73\x74\162\x61\x74\x6f\x72\40\171\141\x6e\147\40\x64\x69\142\145\x72\x69\x20\150\141\x6b\40\x75\156\x74\x75\x6b\40\x6d\x65\x6e\x67\x61\153\163\145\x73\x20\x68\x61\x6c\x61\x6d\x61\x6e\x20\x69\156\x69\54\40\74\x61\x20\x68\x72\145\x66\75\x22" . base_url("\144\x61\x73\x68\142\157\141\x72\144") . "\x22\76\113\145\x6d\x62\141\x6c\151\40\153\x65\40\x6d\x65\x6e\x75\40\x61\x77\x61\154\x3c\x2f\x61\76", 403, "\x41\153\x73\x65\x73\x20\124\x65\x72\154\x61\x72\x61\156\x67");
        goto UbLU2;
        hGrHG:
    }
    public function output_json($data, $encode = true)
    {
        goto ypXF_;
        vt6Qw:
        $data = json_encode($data);
        goto uyeXw;
        ypXF_:
        if (!$encode) {
            goto SbqjE;
        }
        goto vt6Qw;
        KmHWI:
        $this->output->set_content_type("\141\x70\160\x6c\x69\x63\141\x74\x69\157\x6e\x2f\152\x73\x6f\156")->set_output($data);
        goto BIl_D;
        uyeXw:
        SbqjE:
        goto KmHWI;
        BIl_D:
    }
    public function data()
    {
        $this->is_admin();
        $this->output_json($this->users->getDataadmin(), false);
    }
    public function index()
    {
        goto J_YZY;
        aDE0u:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto WkLqX;
        eavs1:
        $user = $this->ion_auth->user()->row();
        goto bFSVf;
        TkhhA:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto VoYgK;
        VoYgK:
        $data["\163\155\x74\137\x61\x63\164\x69\166\x65"] = $this->dashboard->getSemesterActive();
        goto gDYEK;
        J_YZY:
        $this->is_admin();
        goto eavs1;
        bFSVf:
        $data = ["\x75\163\145\162" => $user, "\152\x75\x64\x75\154" => "\101\x64\x6d\x69\x6e\x20\115\x61\156\x61\147\145\x6d\x65\x6e\x74", "\x73\x75\x62\152\x75\x64\x75\x6c" => "\x44\141\x74\141\x20\x41\x64\x6d\151\x6e", "\x70\162\157\146\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\164\151\156\147" => $this->dashboard->getSetting()];
        goto aDE0u;
        WkLqX:
        $data["\x74\160\x5f\x61\x63\164\151\166\145"] = $this->dashboard->getTahunActive();
        goto TkhhA;
        gDYEK:
        $this->load->view("\137\x74\145\x6d\x70\154\141\x74\x65\163\x2f\x64\x61\x73\x68\x62\x6f\141\162\144\x2f\137\150\145\141\x64\145\162\x2e\x70\x68\x70", $data);
        goto TzIM2;
        TzIM2:
        $this->load->view("\x75\x73\x65\162\163\x2f\x61\x64\x6d\x69\x6e\57\144\141\164\141");
        goto aZ3w1;
        aZ3w1:
        $this->load->view("\x5f\164\145\155\x70\154\141\164\145\163\57\x64\x61\x73\150\142\157\141\162\x64\x2f\x5f\146\157\157\164\x65\162\x2e\160\x68\x70");
        goto obHNx;
        obHNx:
    }
    public function edit($id)
    {
        goto AB2wI;
        AB2wI:
        $level = $this->ion_auth->get_users_groups($id)->result();
        goto gh2eX;
        jH6x8:
        $data["\164\160\137\x61\x63\x74\x69\166\145"] = $this->dashboard->getTahunActive();
        goto PV9aF;
        Z0KF9:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto jH6x8;
        PV9aF:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto onaj1;
        lI8fo:
        $this->load->view("\137\x74\x65\x6d\160\154\x61\x74\145\163\57\144\x61\x73\x68\142\x6f\x61\162\144\x2f\x5f\150\x65\x61\144\x65\162\56\160\150\160", $data);
        goto L3ieu;
        G2VLu:
        $data = ["\165\163\145\x72" => $user, "\152\x75\144\x75\x6c" => "\x41\144\155\151\156\x69\163\x74\162\141\164\x6f\162", "\163\x75\x62\x6a\165\x64\165\x6c" => "\x45\x64\x69\x74\x20\x44\141\x74\x61\x20\x41\144\x6d\x69\156", "\165\x73\145\162\163" => $this->ion_auth->user($id)->row(), "\x67\x72\x6f\x75\x70\x73" => $this->ion_auth->groups()->result(), "\x6c\x65\166\x65\x6c" => $level[0], "\x70\x72\x6f\146\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()];
        goto Z0KF9;
        fOKts:
        $this->load->view("\137\164\145\155\160\x6c\x61\x74\145\x73\x2f\144\141\163\150\x62\x6f\x61\162\x64\x2f\x5f\146\157\157\x74\145\162\56\x70\x68\160");
        goto YrvoS;
        L3ieu:
        $this->load->view("\x75\163\145\162\x73\x2f\x61\144\x6d\151\x6e\57\145\x64\x69\164");
        goto fOKts;
        onaj1:
        $data["\x73\155\x74\137\x61\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive();
        goto lI8fo;
        gh2eX:
        $user = $this->ion_auth->user()->row();
        goto G2VLu;
        YrvoS:
    }
    public function create()
    {
        goto KnAqp;
        Aet3a:
        $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto m7Vt7;
        LJk_u:
        IeD9i:
        goto lns7k;
        wTUrb:
        $additional_data = ["\x66\x69\x72\163\164\x5f\156\x61\x6d\x65" => $this->input->post("\x66\151\162\163\x74\x5f\156\141\x6d\145", true), "\x6c\141\x73\164\137\156\141\x6d\x65" => $this->input->post("\x6c\141\163\164\137\x6e\141\155\x65", true)];
        goto smAVV;
        q6lDt:
        $this->form_validation->set_rules("\146\151\162\x73\x74\137\x6e\141\x6d\x65", "\106\151\162\x73\x74\x20\116\141\x6d\145", "\162\145\161\x75\151\162\145\x64");
        goto dqJSb;
        FXggm:
        if ($this->ion_auth->username_check($username)) {
            goto x6hgX;
        }
        goto MVyCX;
        U_2kz:
        $data["\x73\164\x61\164\165\163"] = false;
        goto FVoT_;
        ZIu22:
        fUBvV:
        goto f0R_O;
        QP3pA:
        R4Loq:
        goto vegg2;
        tk9DW:
        $this->form_validation->set_rules("\x63\x6f\156\146\151\162\x6d\137\x70\141\x73\x73\x77\x6f\162\144", "\x43\x6f\156\146\x69\162\155\x20\160\141\163\x73\167\157\162\x64", "\164\162\x69\x6d\174\155\141\164\143\x68\x65\163\133\160\141\163\x73\x77\x6f\162\144\x5d\174\x72\145\161\x75\x69\x72\145\x64");
        goto V2Hw7;
        omhSB:
        pUXG_:
        goto U_2kz;
        E7a45:
        $username = $this->input->post("\165\x73\145\162\x6e\141\155\145", true);
        goto kH3KH;
        Cf60l:
        x6hgX:
        goto hu1Yv;
        kH3KH:
        $password = $this->input->post("\160\141\163\x73\167\157\162\144", true);
        goto c0Uhs;
        vegg2:
        goto IeD9i;
        goto Cf60l;
        AV9bR:
        $this->form_validation->set_rules("\x75\163\x65\162\156\x61\x6d\145", "\x55\163\145\162\156\141\x6d\x65", "\162\x65\x71\x75\x69\162\145\144");
        goto q6lDt;
        m7Vt7:
        $data = ["\x73\x74\x61\164\165\x73" => true, "\x6d\x73\147" => "\x55\163\x65\162\40\142\x65\x72\x68\141\163\151\154\x20\144\151\142\x75\x61\x74\56\x20\116\x49\120\40\144\x69\147\165\x6e\x61\153\141\156\x20\x73\145\x62\141\x67\x61\151\x20\160\x61\163\163\x77\x6f\x72\144\40\160\141\144\141\40\x73\x61\x61\x74\x20\x6c\157\x67\151\156\56"];
        goto w_ePt;
        w_ePt:
        goto R4Loq;
        goto W8NO6;
        f0R_O:
        $this->output_json($data);
        goto As590;
        QShQG:
        $this->form_validation->set_rules("\x70\141\163\x73\167\x6f\162\x64", "\x50\141\x73\163\x77\x6f\x72\x64", "\164\162\151\x6d\174\x6d\151\x6e\x5f\154\x65\x6e\147\164\x68\x5b\x36\x5d\174\x6d\141\x78\x5f\x6c\x65\x6e\147\164\x68\x5b\x32\60\135\174\162\x65\161\x75\x69\162\x65\144");
        goto tk9DW;
        V2Hw7:
        if ($this->form_validation->run() === FALSE) {
            goto pUXG_;
        }
        goto E7a45;
        KnAqp:
        $this->is_admin();
        goto AV9bR;
        dqJSb:
        $this->form_validation->set_rules("\x6c\x61\x73\164\137\156\x61\x6d\x65", "\114\141\163\164\x20\x4e\x61\155\x65", "\x72\145\161\165\x69\162\145\x64");
        goto wfZNB;
        smAVV:
        $group = array("\x31");
        goto FXggm;
        c0Uhs:
        $email = $this->input->post("\x65\x6d\x61\x69\154", true);
        goto wTUrb;
        W8NO6:
        R_dID:
        goto ashkr;
        MVyCX:
        if ($this->ion_auth->email_check($email)) {
            goto R_dID;
        }
        goto Aet3a;
        FVoT_:
        $data["\145\x72\162\157\162\163"] = ["\165\x73\x65\x72\156\141\155\145" => form_error("\165\x73\145\x72\156\x61\155\145"), "\x66\151\162\x73\164\x5f\x6e\x61\x6d\x65" => form_error("\146\x69\x72\163\164\137\156\141\x6d\145"), "\154\x61\x73\164\x5f\x6e\x61\155\145" => form_error("\x6c\x61\163\164\137\x6e\x61\x6d\145"), "\x65\155\141\151\x6c" => form_error("\145\155\141\151\154"), "\x70\x61\x73\x73\x77\157\162\x64" => form_error("\x70\x61\163\x73\x77\157\162\144"), "\143\157\156\x66\151\x72\x6d\x5f\x70\x61\163\x73\167\x6f\x72\144" => form_error("\143\x6f\156\146\x69\162\x6d\137\160\x61\163\163\167\x6f\x72\x64")];
        goto ZIu22;
        hu1Yv:
        $data = ["\x73\164\141\164\x75\x73" => false, "\x6d\163\x67" => "\125\163\x65\x72\156\x61\x6d\x65\x20\x74\x69\x64\x61\153\40\164\145\x72\163\145\144\151\x61\40\x28\x73\165\x64\x61\x68\x20\x64\151\147\x75\156\x61\x6b\x61\156\x29\56"];
        goto LJk_u;
        lns7k:
        goto fUBvV;
        goto omhSB;
        wfZNB:
        $this->form_validation->set_rules("\x65\x6d\x61\x69\x6c", "\x45\155\x61\151\x6c", "\x72\145\x71\x75\151\162\x65\x64\x7c\166\x61\154\x69\x64\x5f\x65\155\x61\x69\154");
        goto QShQG;
        ashkr:
        $data = ["\163\x74\x61\x74\x75\163" => false, "\155\163\x67" => "\x45\x6d\x61\x69\154\40\x74\x69\x64\x61\153\40\x74\x65\x72\163\145\144\151\x61\40\x28\x73\165\144\x61\x68\40\x64\151\x67\x75\x6e\x61\153\x61\x6e\x29\56"];
        goto QP3pA;
        As590:
    }
    public function edit_info()
    {
        goto bJkRd;
        bJkRd:
        $this->is_admin();
        goto xfo3k;
        PilHn:
        $data["\x65\162\162\x6f\x72\163"] = ["\x75\x73\x65\162\156\x61\x6d\145" => form_error("\165\x73\x65\x72\156\x61\x6d\x65"), "\146\151\162\x73\164\x5f\x6e\141\x6d\145" => form_error("\x66\x69\162\x73\164\137\156\141\x6d\x65"), "\x6c\141\163\164\137\x6e\x61\155\x65" => form_error("\x6c\141\x73\164\x5f\x6e\141\x6d\x65"), "\x65\155\141\151\154" => form_error("\x65\155\141\151\154")];
        goto gr1bA;
        gr1bA:
        cUhUK:
        goto Y1eob;
        xI7RM:
        $id = $this->input->post("\x69\144", true);
        goto AEL0g;
        gdlUG:
        $data["\x73\x74\141\164\165\163"] = $update ? true : false;
        goto DU8PB;
        AEL0g:
        $input = ["\x75\163\x65\162\156\x61\x6d\145" => $this->input->post("\x75\x73\x65\162\x6e\x61\155\145", true), "\146\x69\x72\163\x74\137\156\141\x6d\145" => $this->input->post("\x66\x69\162\x73\x74\x5f\x6e\x61\x6d\x65", true), "\x6c\141\163\164\x5f\x6e\141\x6d\x65" => $this->input->post("\x6c\x61\163\164\x5f\x6e\x61\x6d\145", true), "\145\x6d\x61\151\154" => $this->input->post("\145\x6d\141\x69\x6c", true)];
        goto FLQNb;
        xfo3k:
        $this->form_validation->set_rules("\x75\163\145\x72\156\x61\x6d\x65", "\125\x73\x65\162\156\141\x6d\x65", "\x72\x65\x71\165\x69\x72\x65\144");
        goto iW_ht;
        Y1eob:
        $this->output_json($data);
        goto pQxUy;
        FLQNb:
        $update = $this->master->update("\x75\163\x65\x72\x73", $input, "\151\x64", $id);
        goto gdlUG;
        DU8PB:
        goto cUhUK;
        goto pXcNg;
        nfKZ3:
        $this->form_validation->set_rules("\x6c\x61\163\164\137\156\x61\x6d\x65", "\x4c\141\x73\x74\40\x4e\141\x6d\145", "\x72\145\x71\165\x69\162\x65\144");
        goto X1MrQ;
        OvJzK:
        $data["\x73\x74\141\x74\x75\163"] = false;
        goto PilHn;
        w_0kx:
        if ($this->form_validation->run() === FALSE) {
            goto MWN7J;
        }
        goto xI7RM;
        iW_ht:
        $this->form_validation->set_rules("\146\x69\x72\x73\x74\x5f\x6e\x61\x6d\145", "\106\x69\162\163\x74\40\x4e\141\x6d\x65", "\x72\x65\161\165\x69\x72\x65\144");
        goto nfKZ3;
        pXcNg:
        MWN7J:
        goto OvJzK;
        X1MrQ:
        $this->form_validation->set_rules("\x65\155\x61\x69\154", "\105\155\141\151\x6c", "\x72\x65\x71\x75\x69\x72\145\x64\174\x76\x61\154\151\x64\x5f\x65\x6d\141\151\154");
        goto w_0kx;
        pQxUy:
    }
    public function edit_status()
    {
        goto BMd19;
        RuTQR:
        $data["\x65\162\162\157\x72\x73"] = ["\163\x74\141\164\x75\163" => form_error("\163\164\x61\164\x75\163")];
        goto ng7aI;
        mvzh2:
        $id = $this->input->post("\151\x64", true);
        goto NYWJd;
        nOHS2:
        $update = $this->master->update("\165\x73\145\x72\163", $input, "\x69\x64", $id);
        goto I0c5N;
        BMd19:
        $this->is_admin();
        goto i3qW1;
        uqQ04:
        if ($this->form_validation->run() === FALSE) {
            goto hmzOG;
        }
        goto mvzh2;
        DfIHh:
        $this->output_json($data);
        goto frPBc;
        I0c5N:
        $data["\163\164\x61\x74\165\163"] = $update ? true : false;
        goto gnDYj;
        HhnGN:
        hmzOG:
        goto Z7cKa;
        ng7aI:
        V1Eeq:
        goto DfIHh;
        Z7cKa:
        $data["\x73\x74\141\164\165\x73"] = false;
        goto RuTQR;
        NYWJd:
        $input = ["\141\143\x74\x69\x76\145" => $this->input->post("\x73\164\x61\164\x75\x73", true)];
        goto nOHS2;
        i3qW1:
        $this->form_validation->set_rules("\163\164\141\164\165\x73", "\123\x74\141\x74\165\x73", "\x72\145\x71\165\x69\162\145\144");
        goto uqQ04;
        gnDYj:
        goto V1Eeq;
        goto HhnGN;
        frPBc:
    }
    public function edit_level()
    {
        goto uKQnt;
        uKQnt:
        $this->is_admin();
        goto UHgPR;
        Dv0AZ:
        $input = ["\x67\162\157\x75\160\137\151\144" => $this->input->post("\154\145\166\x65\x6c", true)];
        goto E13DE;
        qJfLX:
        GILYi:
        goto c9EKX;
        UHgPR:
        $this->form_validation->set_rules("\x6c\145\x76\145\x6c", "\x4c\x65\166\x65\x6c", "\162\145\x71\165\151\162\x65\x64");
        goto IZhTX;
        S60iy:
        $data["\x73\x74\141\x74\165\163"] = false;
        goto ZoztA;
        ZoztA:
        $data["\145\x72\x72\157\162\x73"] = ["\x6c\145\x76\145\x6c" => form_error("\154\145\166\x65\x6c")];
        goto qJfLX;
        E13DE:
        $update = $this->master->update("\165\x73\x65\162\163\137\x67\x72\157\x75\x70\163", $input, "\x75\x73\145\x72\137\151\144", $id);
        goto ijonM;
        IZhTX:
        if ($this->form_validation->run() === FALSE) {
            goto kPTd3;
        }
        goto q0Rzd;
        c9EKX:
        $this->output_json($data);
        goto qw2zE;
        q0Rzd:
        $id = $this->input->post("\151\144", true);
        goto Dv0AZ;
        M42_A:
        goto GILYi;
        goto BMn0e;
        ijonM:
        $data["\163\164\x61\x74\x75\x73"] = $update ? true : false;
        goto M42_A;
        BMn0e:
        kPTd3:
        goto S60iy;
        qw2zE:
    }
    public function change_password()
    {
        goto P3qR6;
        GXn7Y:
        $data = ["\x73\x74\141\164\x75\x73" => false, "\145\x72\162\x6f\162\x73" => ["\x6f\154\144" => form_error("\x6f\154\144"), "\x6e\x65\167" => form_error("\156\x65\x77"), "\x6e\145\167\137\x63\157\x6e\146\151\x72\155" => form_error("\x6e\x65\167\x5f\143\x6f\156\x66\151\x72\x6d")]];
        goto JbJ8k;
        xzPPC:
        $this->form_validation->set_rules("\x6e\145\167", $this->lang->line("\143\x68\x61\156\x67\145\137\x70\141\x73\x73\x77\x6f\x72\144\137\x76\141\154\151\x64\141\x74\x69\157\x6e\x5f\x6e\145\x77\x5f\x70\141\x73\163\x77\x6f\162\x64\137\154\141\x62\x65\154"), "\x72\x65\x71\165\151\x72\145\x64\x7c\155\151\156\x5f\x6c\145\x6e\x67\x74\x68\133" . $this->config->item("\x6d\151\156\x5f\160\x61\163\163\x77\157\162\x64\137\x6c\x65\156\147\x74\x68", "\151\157\x6e\137\x61\165\164\x68") . "\135\x7c\x6d\141\164\143\150\x65\163\133\x6e\145\x77\137\143\x6f\156\x66\151\162\x6d\x5d");
        goto FLLhz;
        Y8KuI:
        $identity = $this->session->userdata("\x69\144\145\x6e\164\151\164\x79");
        goto QgBdv;
        P3qR6:
        $this->form_validation->set_rules("\x6f\154\144", $this->lang->line("\143\150\x61\156\147\x65\137\x70\141\163\x73\167\157\162\144\x5f\166\141\x6c\x69\x64\141\164\151\157\x6e\x5f\157\x6c\144\137\x70\x61\163\163\167\157\162\144\x5f\154\x61\x62\x65\x6c"), "\x72\x65\161\x75\151\162\x65\x64");
        goto xzPPC;
        rf5_p:
        if ($this->form_validation->run() === FALSE) {
            goto tmT_x;
        }
        goto Y8KuI;
        dbtug:
        goto aUISr;
        goto lq5KR;
        g8gAN:
        kFIti:
        goto dbtug;
        JbJ8k:
        aUISr:
        goto pdhL9;
        eJ43S:
        goto kFIti;
        goto Wxy8y;
        lq5KR:
        tmT_x:
        goto GXn7Y;
        FLLhz:
        $this->form_validation->set_rules("\x6e\145\x77\137\143\157\156\x66\151\162\155", $this->lang->line("\x63\150\x61\x6e\147\145\137\x70\141\x73\163\167\157\162\144\137\x76\141\x6c\x69\x64\x61\x74\151\157\156\137\x6e\x65\167\137\x70\141\163\163\167\157\162\x64\137\x63\x6f\156\x66\151\x72\155\x5f\154\x61\142\x65\x6c"), "\x72\145\x71\165\x69\x72\145\x64");
        goto rf5_p;
        mH9by:
        $data = ["\163\x74\141\x74\x75\163" => false, "\x6d\163\x67" => $this->ion_auth->errors()];
        goto eJ43S;
        Wxy8y:
        L7wb5:
        goto SmIfE;
        pdhL9:
        $this->output_json($data);
        goto gid2A;
        mM0UL:
        if ($change) {
            goto L7wb5;
        }
        goto mH9by;
        SmIfE:
        $data["\x73\164\141\x74\x75\x73"] = true;
        goto g8gAN;
        QgBdv:
        $change = $this->ion_auth->change_password($identity, $this->input->post("\157\154\x64"), $this->input->post("\x6e\145\167"));
        goto mM0UL;
        gid2A:
    }
    public function delete($id)
    {
        goto MnvjB;
        V80aV:
        $this->output_json($data);
        goto RFX1G;
        yDg8T:
        $data["\x73\x74\x61\x74\165\163"] = $this->ion_auth->delete_user($id) ? true : false;
        goto V80aV;
        MnvjB:
        $this->is_admin();
        goto yDg8T;
        RFX1G:
    }
    function uploadFile($id_user)
    {
        goto Tqc3F;
        FvFdn:
        $data["\163\x72\x63"] = '';
        goto XniQp;
        kHbrO:
        $data["\x66\151\154\x65\x6e\x61\155\145"] = pathinfo($result["\146\x69\154\x65\137\156\141\x6d\x65"], PATHINFO_FILENAME);
        goto spjoH;
        XniQp:
        goto bCsvi;
        goto k49tX;
        bgOvH:
        aeTVt:
        goto JpTPs;
        tuYBR:
        $result = $this->upload->data();
        goto IqDbD;
        k49tX:
        qpnwY:
        goto Ehyb6;
        wbFD0:
        $data["\163\164\141\x74\x75\163"] = false;
        goto GkkdG;
        IqDbD:
        $data["\x73\x72\143"] = base_url() . "\x75\x70\154\x6f\141\x64\x73\x2f\x70\162\x6f\146\x69\x6c\x65\x73\x2f" . $result["\x66\151\154\x65\137\x6e\x61\x6d\145"];
        goto kHbrO;
        gu4EJ:
        $data["\163\x69\x7a\145"] = $_FILES["\x66\x6f\164\157"]["\x73\x69\x7a\x65"];
        goto TTy9L;
        x3UOK:
        if (!$this->upload->do_upload("\x66\x6f\x74\x6f")) {
            goto z5yka;
        }
        goto tuYBR;
        S_8uH:
        $this->output_json($data);
        goto lYmID;
        XXNZR:
        $config["\x61\154\154\x6f\167\145\144\x5f\x74\x79\x70\x65\x73"] = "\147\151\x66\174\x6a\x70\x67\x7c\160\156\147\174\152\x70\x65\147\x7c\x4a\120\x45\107\x7c\112\120\107\x7c\120\x4e\x47\174\107\111\106";
        goto ZQQQs;
        NTuJ8:
        z5yka:
        goto wbFD0;
        CtVZr:
        goto aeTVt;
        goto NTuJ8;
        TTy9L:
        bCsvi:
        goto S_8uH;
        u8FR6:
        $config["\146\x69\154\145\137\156\x61\x6d\x65"] = "\x66\x6f\164\x6f\137" . $id_user;
        goto gShzF;
        gShzF:
        $this->upload->initialize($config);
        goto x3UOK;
        GkkdG:
        $data["\x73\162\143"] = $this->upload->display_errors();
        goto bgOvH;
        Ehyb6:
        $config["\165\x70\x6c\157\x61\x64\x5f\x70\141\x74\x68"] = "\x2e\x2f\165\160\154\157\141\x64\x73\x2f\160\162\157\146\x69\154\x65\x73\x2f";
        goto XXNZR;
        spjoH:
        $data["\x73\164\x61\x74\165\163"] = true;
        goto CtVZr;
        ZQQQs:
        $config["\x6f\x76\145\x72\167\x72\151\x74\145"] = true;
        goto u8FR6;
        JpTPs:
        $data["\164\171\x70\x65"] = $_FILES["\146\x6f\x74\157"]["\x74\171\160\145"];
        goto gu4EJ;
        Tqc3F:
        if (isset($_FILES["\146\157\164\x6f"]["\x6e\x61\x6d\145"])) {
            goto qpnwY;
        }
        goto FvFdn;
        lYmID:
    }
    function deleteFile()
    {
        goto SfzG8;
        nfzet:
        if (!unlink($file_name)) {
            goto c9bP0;
        }
        goto TQP1H;
        Ddp0a:
        $file_name = str_replace(base_url(), '', $src);
        goto nfzet;
        NrBrY:
        c9bP0:
        goto MSIBU;
        TQP1H:
        echo "\x46\x69\x6c\145\x20\104\145\x6c\x65\x74\x65\x20\x53\x75\x63\143\x65\163\x73\146\165\154\x6c\x79";
        goto NrBrY;
        SfzG8:
        $src = $this->input->post("\x73\162\x63");
        goto Ddp0a;
        MSIBU:
    }
    function saveProfile()
    {
        goto F6frN;
        NzZ_C:
        $res["\163\x74\141\164\165\x73"] = $update;
        goto ttGV9;
        tKHaw:
        $user = $this->ion_auth->user()->row();
        goto yA3gw;
        iw3MY:
        $foto = $this->input->post("\146\157\x74\x6f");
        goto tKHaw;
        QZI2J:
        $jabatan = $this->input->post("\152\141\x62\141\x74\x61\x6e");
        goto iw3MY;
        ttGV9:
        $this->output_json($res);
        goto Z6Qz8;
        ycMGa:
        $update = $this->db->replace("\x75\x73\x65\162\x73\137\x70\162\x6f\x66\151\154\x65", $insert);
        goto NzZ_C;
        F6frN:
        $nama = $this->input->post("\x6e\141\x6d\x61\137\x6c\145\x6e\147\x6b\x61\x70");
        goto QZI2J;
        yA3gw:
        $insert = ["\151\x64\137\x75\163\145\162" => $user->id, "\x6e\x61\155\141\x5f\154\145\156\x67\153\x61\160" => $nama, "\x6a\141\x62\x61\164\x61\156" => $jabatan, "\146\x6f\164\157" => str_replace(base_url(), '', $foto)];
        goto ycMGa;
        Z6Qz8:
    }
}
