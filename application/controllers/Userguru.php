<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\123\105\120\x41\x54\110") or exit("\x4e\x6f\40\x64\x69\162\x65\143\164\40\x73\x63\162\151\x70\164\x20\141\143\143\145\x73\x73\40\x61\x6c\x6c\157\x77\145\144");
class Userguru extends CI_Controller
{
    public function __construct()
    {
        goto OlLhT;
        x62Oy:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\165"))) {
            goto FD3PQ;
        }
        goto I29GN;
        Vz4F0:
        goto RbitI;
        goto f5TCR;
        maCA9:
        $this->load->model("\115\141\x73\x74\145\x72\x5f\x6d\x6f\144\x65\x6c", "\x6d\x61\163\x74\145\162");
        goto XaJrR;
        VtTCr:
        $this->load->library(["\x64\141\x74\141\164\141\142\154\x65\163", "\x66\x6f\162\x6d\x5f\166\141\x6c\151\x64\141\x74\151\x6f\156"]);
        goto Di1ni;
        f5TCR:
        UbP_K:
        goto AS5On;
        XaJrR:
        $this->load->model("\x44\x61\x73\x68\x62\157\141\x72\144\137\x6d\157\x64\x65\154", "\144\141\163\150\142\157\x61\162\144");
        goto sb03r;
        Di1ni:
        $this->load->model("\125\163\145\162\163\x5f\155\157\144\x65\154", "\x75\x73\145\x72\163");
        goto maCA9;
        OlLhT:
        parent::__construct();
        goto LKl1s;
        I29GN:
        show_error("\x48\x61\156\x79\141\x20\101\144\155\151\156\x69\x73\164\x72\141\x74\157\162\40\x79\x61\156\147\40\144\x69\142\x65\x72\151\40\150\x61\x6b\x20\165\x6e\x74\165\x6b\x20\155\145\156\147\x61\153\163\x65\x73\x20\x68\141\154\141\155\141\156\40\x69\156\x69\54\x20\x3c\x61\x20\150\162\145\146\75\x22" . base_url("\x64\x61\163\150\142\x6f\141\162\144") . "\42\x3e\x4b\x65\x6d\142\x61\154\x69\40\x6b\x65\40\x6d\145\156\165\x20\x61\167\x61\154\74\57\x61\76", 403, "\x41\x6b\163\x65\x73\x20\124\x65\162\x6c\141\162\x61\156\147");
        goto iFiMg;
        AS5On:
        redirect("\x61\165\164\150");
        goto dKcez;
        dKcez:
        RbitI:
        goto VtTCr;
        LKl1s:
        if (!$this->ion_auth->logged_in()) {
            goto UbP_K;
        }
        goto x62Oy;
        sb03r:
        $this->form_validation->set_error_delimiters('', '');
        goto I6bow;
        iFiMg:
        FD3PQ:
        goto Vz4F0;
        I6bow:
    }
    public function output_json($data, $encode = true)
    {
        goto PxaAl;
        NV3r0:
        $this->output->set_content_type("\141\160\x70\x6c\x69\x63\x61\164\x69\x6f\156\x2f\x6a\163\x6f\156")->set_output($data);
        goto s_kg_;
        jAwl3:
        cpCZ4:
        goto NV3r0;
        BPKe0:
        $data = json_encode($data);
        goto jAwl3;
        PxaAl:
        if (!$encode) {
            goto cpCZ4;
        }
        goto BPKe0;
        s_kg_:
    }
    public function data()
    {
        goto XDIHq;
        XDIHq:
        $tp = $this->dashboard->getTahunActive();
        goto H3CIl;
        H3CIl:
        $smt = $this->dashboard->getSemesterActive();
        goto tBI7T;
        tBI7T:
        $this->output_json($this->users->getUserGuru($tp->id_tp, $smt->id_smt), false);
        goto wToYo;
        wToYo:
    }
    public function index()
    {
        goto Rxb4z;
        K0Ktg:
        $data["\163\x6d\x74\x5f\141\x63\x74\151\x76\x65"] = $this->dashboard->getSemesterActive();
        goto ERAwB;
        DIjPS:
        $this->load->view("\137\164\x65\x6d\x70\x6c\x61\x74\145\x73\57\x64\141\163\x68\142\x6f\x61\162\144\x2f\137\x66\x6f\157\164\145\162");
        goto Rt8CA;
        Rt8CA:
        ZKR6C:
        goto PQ4HG;
        yHgUc:
        goto ZKR6C;
        goto Xwbf7;
        jly2G:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto GctTT;
        N7XRf:
        $id = $this->users->getGuruByUsername($user->username);
        goto Vsfds;
        Xwbf7:
        q1XmF:
        goto jly2G;
        Rxb4z:
        $user = $this->ion_auth->user()->row();
        goto edYE7;
        ERAwB:
        $this->load->view("\x5f\164\145\155\x70\x6c\141\x74\145\x73\x2f\x64\141\x73\150\142\x6f\x61\162\144\x2f\137\x68\145\141\x64\x65\162", $data);
        goto VM1H2;
        wcXrM:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto K0Ktg;
        gFrRv:
        if ($group === "\141\144\155\x69\156") {
            goto q1XmF;
        }
        goto N7XRf;
        Vsfds:
        $this->edit($id->id_guru);
        goto yHgUc;
        GctTT:
        $data["\164\x70\x5f\x61\x63\164\x69\x76\x65"] = $this->dashboard->getTahunActive();
        goto wcXrM;
        VM1H2:
        $this->load->view("\x75\163\145\162\x73\x2f\147\165\162\x75\57\x64\141\164\141");
        goto DIjPS;
        edYE7:
        $group = $this->ion_auth->get_users_groups($user->id)->row()->name;
        goto y3lOf;
        y3lOf:
        $data = ["\165\x73\145\x72" => $user, "\x6a\165\144\x75\154" => "\x55\163\x65\162\x20\x4d\x61\x6e\141\147\145\x6d\x65\x6e\x74", "\x73\x75\142\152\165\144\x75\154" => "\104\x61\x74\141\x20\x55\163\145\162\40\x47\x75\162\165", "\160\162\x6f\x66\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto gFrRv;
        PQ4HG:
    }
    public function activate($id)
    {
        goto EWv8l;
        eekMN:
        goto XkKWg;
        goto t5ZqO;
        fy3wp:
        $id_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto nhw0I;
        vpmFZ:
        $this->db->where("\151\x64\x5f\x67\165\162\165", $id);
        goto bNJcC;
        Wd4j2:
        aLYiH:
        goto mFD7W;
        wHRr3:
        XkKWg:
        goto ZsteS;
        ZOl62:
        $this->output_json($data);
        goto XQtz6;
        NDuZR:
        $this->db->set("\151\144\x5f\165\163\x65\162", $id_user);
        goto vpmFZ;
        nUBoc:
        $last_name = count($nama) > 2 ? $nama[1] : end($nama);
        goto mmKih;
        j9Owv:
        $additional_data = ["\x66\x69\x72\x73\x74\137\156\141\155\x65" => $first_name, "\x6c\x61\x73\x74\137\156\141\155\145" => $last_name];
        goto zlVhF;
        FDuVl:
        if ($this->ion_auth->username_check($username)) {
            goto aLYiH;
        }
        goto OodaA;
        zlVhF:
        $group = array("\62");
        goto FDuVl;
        EWv8l:
        $guru = $this->users->getDataGuru($id);
        goto irJve;
        mFD7W:
        $data = ["\163\164\x61\x74\x75\x73" => false, "\155\x73\x67" => "\x55\163\145\x72\156\141\155\145\x20" . $username . "\40\164\151\144\x61\x6b\40\164\145\162\x73\145\x64\x69\141\x20\50\x73\165\x64\141\150\40\144\151\147\165\x6e\x61\x6b\x61\156\51\x2e"];
        goto P1D8V;
        ZsteS:
        goto FXRCR;
        goto Wd4j2;
        bNJcC:
        $this->db->update("\155\141\x73\164\145\x72\x5f\x67\165\162\165");
        goto eekMN;
        oQNoJ:
        $data = ["\x73\164\141\x74\x75\x73" => false, "\x6d\x73\147" => "\125\x73\x65\x72\156\141\155\x65\x20" . $email . "\x20\x74\151\144\x61\153\40\164\145\162\163\145\x64\151\x61\x20\x28\x73\165\x64\141\x68\40\x64\151\147\165\156\x61\x6b\141\156\x29\56"];
        goto wHRr3;
        OodaA:
        if ($this->ion_auth->email_check($email)) {
            goto Os4P7;
        }
        goto fy3wp;
        PmC40:
        $first_name = $nama[0];
        goto nUBoc;
        XROTJ:
        $password = trim($guru->password);
        goto VC2T4;
        NSoAi:
        $data["\x70\x61\x73\x73"] = $password;
        goto ZOl62;
        VC2T4:
        $email = strtolower($guru->username) . "\x40\x67\x75\162\x75\x2e\x63\x6f\155";
        goto j9Owv;
        nhw0I:
        $data = ["\163\x74\x61\164\165\163" => true, "\x6d\x73\x67" => "\x41\153\165\x6e\x20" . $guru->nama_guru . "\x20\x64\151\x61\x6b\x74\151\x66\153\x61\156\56"];
        goto NDuZR;
        irJve:
        $nama = explode("\x20", $guru->nama_guru);
        goto PmC40;
        t5ZqO:
        Os4P7:
        goto oQNoJ;
        mmKih:
        $username = trim($guru->username);
        goto XROTJ;
        P1D8V:
        FXRCR:
        goto NSoAi;
        XQtz6:
    }
    public function deactivate($id = NULL)
    {
        goto EbEgz;
        U86jL:
        $data = ["\163\164\141\x74\165\163" => false, "\x6d\163\x67" => "\x59\157\x75\x20\x6d\165\x73\x74\x20\x62\x65\40\141\156\x20\141\x64\x6d\151\156\x69\163\x74\162\141\164\157\162\x20\x74\x6f\40\166\x69\x65\x77\x20\x74\x68\x69\x73\x20\x70\141\147\x65\x2e"];
        goto qpn0p;
        qpn0p:
        jgx6I:
        goto EqeGs;
        tHoOk:
        $data = ["\163\164\x61\164\165\163" => $deleted, "\x6d\x73\147" => "\x74\145\154\141\150\x20\144\x69\156\x6f\x6e\141\x6b\164\151\146\x6b\x61\156\x2e"];
        goto b0X52;
        gIuhD:
        $deleted = $this->ion_auth->delete_user($id);
        goto tHoOk;
        Kf8vs:
        $id = (int) $id;
        goto sIFBW;
        sIFBW:
        if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
            goto I2SnW;
        }
        goto Yyl2e;
        EqeGs:
        $this->output_json($data);
        goto XfNPj;
        K9vdu:
        A6HZk:
        goto U86jL;
        xCO4V:
        goto pGDy6;
        goto E3JZT;
        g8jSw:
        goto jgx6I;
        goto K9vdu;
        E3JZT:
        I2SnW:
        goto gIuhD;
        Yyl2e:
        $data = ["\x73\164\x61\164\x75\163" => false, "\155\163\147" => "\101\156\x64\x61\x20\142\x75\x6b\x61\156\x20\x61\x64\155\151\x6e\x2e"];
        goto xCO4V;
        EbEgz:
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            goto A6HZk;
        }
        goto Kf8vs;
        b0X52:
        pGDy6:
        goto g8jSw;
        XfNPj:
    }
    public function aktifkanSemua()
    {
        goto hP2lR;
        RWIS0:
        $jum = 0;
        goto z8VlB;
        z8VlB:
        foreach ($guruAktif as $guru) {
            goto gBnpV;
            ZsEdA:
            goto JUJXJ;
            goto e53Q1;
            gBnpV:
            if ($guru->aktif > 0) {
                goto IIICD;
            }
            goto SYZ3y;
            llv34:
            goto GIBQi;
            goto TXoFU;
            TXoFU:
            IIICD:
            goto ZsEdA;
            JFyqk:
            JUJXJ:
            goto ZH6en;
            e53Q1:
            GIBQi:
            goto RqC9J;
            SYZ3y:
            $this->activate($guru->id_guru);
            goto llv34;
            RqC9J:
            $jum += 1;
            goto JFyqk;
            ZH6en:
        }
        goto OYLYF;
        hP2lR:
        $guruAktif = $this->users->getGuruAktif();
        goto RWIS0;
        gg9XR:
        $data = ["\163\x74\141\x74\165\x73" => true, "\152\x75\x6d\154\141\x68" => $jum, "\x6d\163\x67" => $jum . "\x20\x47\165\x72\165\x20\144\x69\x61\x6b\x74\151\146\x6b\x61\156\x2e"];
        goto aFOKQ;
        aFOKQ:
        $this->output_json($data);
        goto bztIp;
        OYLYF:
        tnzFV:
        goto gg9XR;
        bztIp:
    }
    public function nonaktifkanSemua()
    {
        goto Et8dk;
        l5Ahz:
        $data = ["\x73\x74\141\164\x75\x73" => true, "\152\x75\x6d\x6c\141\x68" => $jum, "\155\x73\x67" => $jum . "\x20\x47\165\162\165\x20\144\151\156\x6f\156\x61\153\164\x69\146\x6b\x61\156\x2e"];
        goto MJjgC;
        WcLxM:
        Patur:
        goto l5Ahz;
        RVQEN:
        $jum = 0;
        goto PywXc;
        PywXc:
        foreach ($guruAktif as $guru) {
            goto d1Iti;
            aszDR:
            $jum += 1;
            goto gjpcM;
            yLAvT:
            goto vbiYW;
            goto PYdT3;
            d1Iti:
            if ($guru->aktif > 0) {
                goto TqP44;
            }
            goto yLAvT;
            oo4Mz:
            $this->output_json($del);
            goto v_aJm;
            AYgaP:
            $del = $this->deactivate($guru->id, '');
            goto oo4Mz;
            PYdT3:
            goto czIOZ;
            goto jcGdE;
            jcGdE:
            TqP44:
            goto AYgaP;
            gjpcM:
            vbiYW:
            goto ad63G;
            v_aJm:
            czIOZ:
            goto aszDR;
            ad63G:
        }
        goto WcLxM;
        Et8dk:
        $guruAktif = $this->users->getGuruAktif();
        goto RVQEN;
        MJjgC:
        $this->output_json($data);
        goto tY_at;
        tY_at:
    }
    public function edit($id)
    {
        goto IFIMA;
        mKFd7:
        $data["\x74\x70\137\141\143\x74\x69\x76\x65"] = $tp;
        goto gXXZB;
        zIFZv:
        $data["\165\x73\x65\162\163"] = $users;
        goto LlMy1;
        McuBP:
        $this->load->view("\155\x65\155\x62\145\162\x73\57\x67\x75\x72\x75\57\x74\145\x6d\x70\x6c\x61\x74\145\x73\57\146\x6f\x6f\x74\145\162");
        goto nhnVs;
        gXXZB:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto fH34e;
        IFIMA:
        $tp = $this->dashboard->getTahunActive();
        goto Q0kDt;
        ZUpY0:
        $data["\x67\162\x6f\165\160\163"] = $this->ion_auth->groups()->result();
        goto yKyp7;
        apw7C:
        j5y8r:
        goto V8dfO;
        LlMy1:
        $data["\x67\165\x72\x75"] = $guru;
        goto gbz6s;
        fH34e:
        $data["\163\x6d\x74\x5f\x61\143\164\x69\166\x65"] = $smt;
        goto g0_FK;
        uJk8e:
        $this->load->view("\x5f\x74\145\x6d\x70\x6c\x61\164\145\163\x2f\x64\x61\x73\150\142\157\x61\162\x64\57\137\x68\x65\x61\144\x65\162", $data);
        goto cRCXp;
        UBGL8:
        cO1dW:
        goto OQTE8;
        iaX_a:
        $users = $this->users->getUsers($guru->username);
        goto YaLfx;
        HKJFT:
        if ($group === "\x61\144\155\151\156") {
            goto j5y8r;
        }
        goto QC4Iu;
        Q0kDt:
        $smt = $this->dashboard->getSemesterActive();
        goto LYu_t;
        nhnVs:
        goto cO1dW;
        goto apw7C;
        LYu_t:
        $guru = $this->users->getDetailGuru($id);
        goto iaX_a;
        KorCw:
        $data["\154\x65\166\145\154\163"] = $this->users->getLevelGuru();
        goto uJk8e;
        O0dN9:
        $data["\155\141\160\x65\154\x73"] = $this->users->getMapel();
        goto KorCw;
        yKyp7:
        $data["\153\x65\154\x61\x73\163"] = $this->users->getKelas($tp->id_tp, $smt->id_smt);
        goto O0dN9;
        cRCXp:
        $this->load->view("\165\x73\x65\162\x73\57\147\165\162\x75\57\145\144\x69\x74");
        goto ll9bF;
        JPZUr:
        $this->load->view("\x75\163\x65\162\163\x2f\147\165\162\165\x2f\x65\144\151\x74");
        goto McuBP;
        V8dfO:
        $data["\x70\x72\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto ZUpY0;
        gbz6s:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto mKFd7;
        YaLfx:
        $user = $this->ion_auth->user()->row();
        goto ARiUf;
        ll9bF:
        $this->load->view("\137\x74\x65\x6d\x70\x6c\x61\x74\x65\163\57\x64\x61\163\150\142\157\141\162\144\57\x5f\146\x6f\157\x74\x65\162");
        goto UBGL8;
        ARiUf:
        $data = ["\165\x73\145\162" => $user, "\x6a\165\x64\x75\154" => "\x55\163\145\162\40\115\141\156\x61\147\145\x6d\x65\156\x74", "\163\x75\x62\152\165\144\x75\x6c" => "\x45\144\x69\164\x20\x44\x61\x74\141\x20\x55\x73\145\x72", "\x73\x65\164\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto zIFZv;
        QC4Iu:
        $this->load->view("\x6d\145\x6d\x62\x65\162\x73\x2f\147\x75\162\165\57\x74\145\x6d\160\x6c\x61\164\x65\163\x2f\x68\145\x61\144\145\x72", $data);
        goto JPZUr;
        g0_FK:
        $group = $this->ion_auth->get_users_groups($user->id)->row()->name;
        goto HKJFT;
        OQTE8:
    }
    public function editLogin()
    {
        goto yYlNS;
        hVNQ0:
        if ($guru_lain && $guru_lain->id_guru != $id_guru) {
            goto nw8Bv;
        }
        goto UVT0Y;
        qq83q:
        $group = array("\x32");
        goto ML0HD;
        WXPie:
        $this->form_validation->set_rules("\x6e\145\167\137\143\157\x6e\146\x69\162\155", $this->lang->line("\143\x68\x61\x6e\147\x65\137\x70\141\163\163\167\x6f\162\144\x5f\x76\141\x6c\x69\x64\x61\x74\x69\157\x6e\137\x6e\x65\x77\137\x70\141\163\163\167\x6f\162\144\137\x63\x6f\x6e\x66\x69\162\155\x5f\x6c\141\x62\145\154"), "\x72\x65\161\165\x69\162\145\144");
        goto hVNQ0;
        R3Kob:
        $status = false;
        goto Zp0lD;
        zC5mO:
        $this->db->where("\x69\144\x5f\x67\165\x72\x75", $id_guru);
        goto PiJEn;
        mizWC:
        $msg = $status ? "\125\x70\144\x61\x74\145\x20\142\x65\162\150\141\x73\x69\154" : "\x47\141\x67\141\x6c\40\x6d\145\156\x67\x67\x61\x6e\164\151\40\x75\163\x65\x72\156\x61\x6d\145\57\160\x61\163\163\163\x77\x6f\x72\144";
        goto XRj_k;
        AjPb4:
        if ($deleted) {
            goto dmZj8;
        }
        goto R3Kob;
        yAHNO:
        $additional_data = ["\x66\151\x72\x73\164\137\156\x61\155\145" => $first_name, "\154\x61\163\x74\137\156\141\155\x65" => $last_name];
        goto qq83q;
        cRdo1:
        dmZj8:
        goto JxMEs;
        Yt3C7:
        $deleted = $this->ion_auth->delete_user((int) $user_guru->id);
        goto hEuKx;
        JxMEs:
        $id_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto J2Pa3;
        hEuKx:
        TletA:
        goto AjPb4;
        yVwMh:
        $password = trim($pass);
        goto FFGtA;
        yYlNS:
        $id_guru = $this->input->post("\151\x64\x5f\x67\x75\162\165", true);
        goto kKApH;
        BNbcM:
        $this->output_json($data);
        goto RZQUx;
        XRj_k:
        q2d1E:
        goto cuzlm;
        ML0HD:
        $user_guru = $this->db->get_where("\165\163\145\x72\163", "\x65\x6d\141\x69\154\x3d\42" . $email . "\42")->row();
        goto Xa73x;
        C7CsD:
        $this->form_validation->set_rules("\x6f\154\x64", $this->lang->line("\x63\x68\141\x6e\x67\x65\137\x70\141\x73\163\167\157\x72\x64\x5f\166\141\154\x69\x64\x61\164\x69\x6f\156\137\157\154\x64\x5f\x70\141\x73\163\167\x6f\162\144\x5f\x6c\x61\x62\145\154"), "\x72\145\x71\165\x69\x72\145\x64");
        goto WW7ya;
        UVT0Y:
        if ($this->form_validation->run() === FALSE) {
            goto P6OH7;
        }
        goto usBfy;
        ki4Ie:
        $this->db->set("\x70\141\x73\x73\x77\x6f\162\144", $password);
        goto koeey;
        sWLql:
        $first_name = $nama[0];
        goto nRjwH;
        nHSMb:
        wUe6Q:
        goto BNbcM;
        AWpkH:
        $data = ["\163\164\x61\164\x75\163" => false, "\145\x72\x72\157\x72\x73" => ["\x75\x73\x65\162\156\141\x6d\145" => "\125\163\145\x72\156\x61\x6d\145\x20\x73\165\144\141\150\40\x64\151\x67\165\156\141\x6b\x61\x6e"]];
        goto PTRcB;
        Zp0lD:
        $msg = "\x47\x61\x67\x61\x6c\40\x6d\145\156\147\147\141\x6e\x74\x69\40\x75\163\145\x72\x6e\x61\155\x65\x2f\160\141\163\x73\163\x77\x6f\x72\x64";
        goto hbMQU;
        J2Pa3:
        $this->db->set("\x75\x73\x65\x72\156\141\x6d\145", $username);
        goto ki4Ie;
        cuzlm:
        $data["\163\164\x61\x74\x75\x73"] = $status;
        goto TdlXn;
        U9jWj:
        $guru_lain = $this->master->getUserIdGuruByUsername($username);
        goto C7CsD;
        usBfy:
        $guru = $this->db->get_where("\x6d\x61\x73\164\x65\x72\x5f\147\x75\x72\165", "\x69\x64\x5f\x67\165\x72\165\x3d\x22" . $id_guru . "\42")->row();
        goto f3fbE;
        WJU00:
        P6OH7:
        goto rYXxk;
        D28mY:
        $username = trim($username);
        goto yVwMh;
        pa_oQ:
        if (!($user_guru != null)) {
            goto TletA;
        }
        goto Yt3C7;
        koeey:
        $this->db->set("\151\x64\x5f\165\x73\145\162", $id_user);
        goto zC5mO;
        xhRQr:
        $pass = $this->input->post("\156\145\167", true);
        goto U9jWj;
        f3fbE:
        $nama = explode("\40", $guru->nama_guru);
        goto sWLql;
        FFGtA:
        $email = strtolower($username) . "\x40\x67\165\162\x75\x2e\x63\157\155";
        goto yAHNO;
        rYXxk:
        $data = ["\163\164\x61\x74\x75\x73" => false, "\x65\162\x72\x6f\162\163" => ["\157\154\144" => form_error("\157\x6c\144"), "\x6e\145\x77" => form_error("\156\145\x77"), "\156\145\167\x5f\x63\x6f\156\146\151\162\x6d" => form_error("\x6e\x65\167\x5f\143\157\156\146\x69\x72\x6d")]];
        goto nHSMb;
        hbMQU:
        goto q2d1E;
        goto cRdo1;
        nRjwH:
        $last_name = end($nama);
        goto D28mY;
        kKApH:
        $username = $this->input->post("\x75\163\x65\162\156\x61\x6d\x65", true);
        goto xhRQr;
        Xa73x:
        $deleted = true;
        goto pa_oQ;
        WW7ya:
        $this->form_validation->set_rules("\156\x65\x77", $this->lang->line("\143\150\141\156\147\x65\137\x70\x61\163\x73\x77\157\162\x64\x5f\166\141\154\151\144\141\x74\151\157\x6e\137\156\145\x77\137\x70\x61\163\163\167\x6f\x72\x64\x5f\x6c\x61\142\145\x6c"), "\x72\145\161\165\x69\x72\145\x64\174\155\x69\x6e\x5f\154\x65\156\147\x74\150\133" . $this->config->item("\x6d\151\156\x5f\x70\x61\163\163\x77\157\x72\x64\137\154\145\156\147\x74\x68", "\151\157\x6e\137\141\165\x74\x68") . "\135\x7c\155\141\164\x63\x68\145\x73\133\x6e\x65\x77\x5f\x63\x6f\156\x66\151\162\x6d\x5d");
        goto WXPie;
        PTRcB:
        goto wUe6Q;
        goto WJU00;
        PiJEn:
        $status = $this->db->update("\x6d\x61\x73\164\x65\x72\137\x67\x75\162\x75");
        goto mizWC;
        y6tjm:
        nw8Bv:
        goto AWpkH;
        TdlXn:
        $data["\x74\145\x78\164"] = $msg;
        goto gXQKa;
        gXQKa:
        goto wUe6Q;
        goto y6tjm;
        RZQUx:
    }
    function buangspasi($teks)
    {
        goto bO_SF;
        gDhh4:
        RUHaN:
        goto fngKM;
        bO_SF:
        $teks = trim($teks);
        goto qBexC;
        P3NvQ:
        return $hasil;
        goto CIUc6;
        eU0nL:
        goto RUHaN;
        goto bop9g;
        EshjZ:
        $remove[] = "\x20";
        goto QX6OI;
        qBexC:
        $hasil = $teks;
        goto gDhh4;
        htnqv:
        $remove[] = "\47";
        goto rZR0j;
        bop9g:
        FJ0kW:
        goto P3NvQ;
        rZR0j:
        $remove[] = "\56";
        goto EshjZ;
        fngKM:
        if (!strpos($teks, "\40")) {
            goto FJ0kW;
        }
        goto htnqv;
        QX6OI:
        $hasil = str_replace($remove, '', $teks);
        goto eU0nL;
        CIUc6:
    }
    private function registerGuru($username, $password, $email, $additional_data, $group)
    {
        goto YCa84;
        f7Vju:
        Qsjm5:
        goto BLp4B;
        YCa84:
        $reg = $this->ion_auth->register($username, $password, $email, $additional_data, $group);
        goto InaKp;
        QkK68:
        $data["\151\144"] = $reg;
        goto aCJ0E;
        aCJ0E:
        if (!($reg == false)) {
            goto Qsjm5;
        }
        goto cGexM;
        BLp4B:
        return $data;
        goto b8srB;
        InaKp:
        $data["\163\164\141\164\x75\163"] = true;
        goto QkK68;
        cGexM:
        $data["\163\x74\x61\164\165\163"] = false;
        goto f7Vju;
        b8srB:
    }
}
