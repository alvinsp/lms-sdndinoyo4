<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbttoken extends CI_Controller
{
    public function __construct()
    {
        goto f35gh;
        u01CW:
        show_error("\x48\141\156\x79\x61\x20\x41\144\155\151\x6e\151\x73\164\162\141\164\157\162\40\x79\141\x6e\x67\40\x64\x69\142\145\162\151\x20\x68\141\153\x20\165\156\164\x75\x6b\x20\x6d\x65\x6e\147\141\153\163\x65\x73\x20\x68\x61\154\141\155\141\156\x20\151\156\151\x2c\40\74\141\x20\150\162\145\x66\x3d\42" . base_url("\x64\141\x73\x68\142\x6f\x61\162\144") . "\42\76\113\145\155\x62\x61\x6c\x69\40\x6b\x65\40\x6d\145\156\x75\40\x61\x77\x61\154\x3c\x2f\x61\x3e", 403, "\x41\153\x73\145\163\x20\x54\x65\x72\x6c\141\162\141\x6e\x67");
        goto QRE2z;
        GCR6q:
        FyBtD:
        goto tzHTD;
        oXx90:
        $this->load->model("\x44\x61\x73\x68\x62\157\141\x72\x64\x5f\x6d\157\x64\x65\x6c", "\x64\x61\163\150\x62\x6f\x61\162\x64");
        goto xJFp1;
        cZ9CY:
        $this->form_validation->set_error_delimiters('', '');
        goto vAc_y;
        xFbxd:
        $this->load->dbforge();
        goto Oq3cw;
        tzHTD:
        $this->load->library(["\x64\x61\164\141\x74\x61\x62\x6c\x65\x73", "\x66\x6f\162\x6d\137\x76\141\154\x69\144\x61\x74\151\x6f\x6e"]);
        goto W1YXl;
        W1YXl:
        $this->load->model("\115\141\163\164\145\x72\x5f\x6d\x6f\144\x65\x6c", "\155\x61\163\x74\x65\162");
        goto oXx90;
        xJFp1:
        $this->load->model("\103\142\x74\x5f\155\x6f\144\x65\154", "\143\142\x74");
        goto aMRgl;
        f35gh:
        parent::__construct();
        goto xFbxd;
        QRE2z:
        GGOah:
        goto PN0Gc;
        aMRgl:
        $this->load->model("\x4c\157\x67\137\155\157\144\145\x6c", "\x6c\x6f\x67\x67\151\x6e\x67");
        goto cZ9CY;
        PN0Gc:
        goto FyBtD;
        goto GgLcq;
        Oq3cw:
        if (!$this->ion_auth->logged_in()) {
            goto Le_x8;
        }
        goto ufwGR;
        GgLcq:
        Le_x8:
        goto eR6L3;
        ufwGR:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\165"))) {
            goto GGOah;
        }
        goto u01CW;
        eR6L3:
        redirect("\141\x75\164\150");
        goto GCR6q;
        vAc_y:
    }
    public function output_json($data, $encode = true)
    {
        goto an7LH;
        YB2NM:
        n94tD:
        goto DmMel;
        DmMel:
        $this->output->set_content_type("\141\x70\x70\154\151\x63\x61\164\151\157\x6e\57\152\163\x6f\x6e")->set_output($data);
        goto nJxDs;
        VIbUT:
        $data = json_encode($data);
        goto YB2NM;
        an7LH:
        if (!$encode) {
            goto n94tD;
        }
        goto VIbUT;
        nJxDs:
    }
    public function index()
    {
        goto pchpm;
        qkLJT:
        $data["\147\165\162\165"] = $guru;
        goto OcMLa;
        IyBOi:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto aZTa8;
        n6Sgi:
        $tp = $this->master->getTahunActive();
        goto k44AY;
        YyH8X:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto qkLJT;
        Cowni:
        $tkn["\164\x6f\x6b\145\156"] = '';
        goto UvlGn;
        US9h9:
        goto TtMPS;
        goto jGO1c;
        Cyche:
        $data["\164\x6f\153\145\156"] = $token != null ? $token : json_decode(json_encode($tkn));
        goto oXxsk;
        CjZA3:
        $data["\163\155\164\137\x61\143\164\151\166\x65"] = $smt;
        goto qentj;
        k44AY:
        $smt = $this->master->getSemesterActive();
        goto IyBOi;
        oXxsk:
        if ($this->ion_auth->is_admin()) {
            goto ncMGM;
        }
        goto YyH8X;
        pchpm:
        $user = $this->ion_auth->user()->row();
        goto j8YoH;
        tONuC:
        $this->load->view("\137\x74\145\x6d\x70\x6c\141\164\145\x73\x2f\x64\141\163\150\x62\x6f\x61\x72\x64\x2f\x5f\x66\157\x6f\x74\x65\x72");
        goto QxDZu;
        OcMLa:
        $this->load->view("\x6d\x65\155\x62\145\162\x73\57\x67\165\162\165\x2f\x74\x65\155\160\154\141\x74\145\163\57\150\x65\141\x64\x65\162", $data);
        goto HRC2y;
        j8YoH:
        $data = ["\165\x73\145\162" => $user, "\x6a\165\144\165\154" => "\x54\157\153\x65\x6e\x20\x55\152\x69\141\x6e", "\x73\165\142\x6a\165\144\165\154" => "\x54\157\x6b\145\x6e", "\x73\145\x74\164\151\156\147" => $this->dashboard->getSetting()];
        goto n6Sgi;
        HRC2y:
        $this->load->view("\155\x65\155\142\145\162\x73\57\147\165\162\x75\x2f\143\x62\164\57\x74\157\153\x65\x6e\x2f\144\x61\x74\x61");
        goto Dca9m;
        elbrj:
        $this->load->view("\x63\142\x74\57\x74\x6f\x6b\145\156\x2f\x64\141\x74\x61");
        goto tONuC;
        rjSqx:
        $tkn["\152\141\162\x61\x6b"] = "\x31";
        goto A9_hg;
        hGpOL:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto CjZA3;
        UvlGn:
        $tkn["\141\165\x74\x6f"] = "\x30";
        goto rjSqx;
        A9_hg:
        $tkn["\x65\x6c\x61\x70\163\x65\x64"] = "\60\x30\x3a\60\60\72\60\60";
        goto Cyche;
        EAaez:
        $this->load->view("\137\x74\x65\x6d\x70\x6c\x61\x74\x65\x73\57\144\x61\163\x68\x62\x6f\x61\162\x64\x2f\x5f\x68\145\141\x64\x65\x72", $data);
        goto elbrj;
        AkahL:
        $data["\x70\x72\157\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto EAaez;
        Dca9m:
        $this->load->view("\155\x65\x6d\x62\x65\x72\163\x2f\147\165\x72\x75\x2f\x74\x65\x6d\x70\x6c\x61\x74\x65\163\57\146\157\x6f\164\145\162");
        goto US9h9;
        jGO1c:
        ncMGM:
        goto AkahL;
        aZTa8:
        $data["\164\x70\137\141\x63\x74\x69\166\145"] = $tp;
        goto hGpOL;
        qentj:
        $token = $this->cbt->getToken();
        goto Cowni;
        QxDZu:
        TtMPS:
        goto LyOQt;
        LyOQt:
    }
    public function generateToken()
    {
        goto W5M9P;
        LjJ5x:
        $post_token->token = $new;
        goto T4iL8;
        Szyo7:
        $token->now = $updated;
        goto b6hq7;
        gLg40:
        $total_minutes += $diff->i;
        goto j5D5a;
        EWCPD:
        goto ykmIi;
        goto Puabm;
        b6hq7:
        $this->output_json($token);
        goto J4HzN;
        VQ_Bo:
        $force = $this->input->get("\x66\157\x72\x63\x65");
        goto EJwJU;
        xBoiP:
        $mulai = new DateTime($token->updated);
        goto RtNf8;
        W5M9P:
        $post_token = json_decode($this->input->get("\144\141\x74\141"));
        goto VQ_Bo;
        T4iL8:
        $post_token->updated = $updated;
        goto bZqMk;
        KBduJ:
        $total_minutes = $diff->days * 24 * 60;
        goto HxlWq;
        Puabm:
        XScmF:
        goto PC468;
        nq0X2:
        $this->cbt->saveToken($post_token);
        goto Vsl65;
        PC468:
        $new = $this->createNewToken();
        goto LjJ5x;
        HxlWq:
        $total_minutes += $diff->h * 60;
        goto gLg40;
        j5D5a:
        if (!($total_minutes >= $post_token->jarak)) {
            goto ad0DM;
        }
        goto b48UY;
        QBdZ1:
        $post_token->token = $new;
        goto R3hQy;
        R3hQy:
        $post_token->updated = $updated;
        goto nq0X2;
        d2QVP:
        $updated = date("\x59\x2d\155\55\x64\40\x48\72\x69\72\163");
        goto Tyw4s;
        Tyw4s:
        if ($force == "\x31") {
            goto XScmF;
        }
        goto xBoiP;
        HcjGS:
        ykmIi:
        goto dY5FT;
        Vsl65:
        ad0DM:
        goto EWCPD;
        bZqMk:
        $this->cbt->saveToken($post_token);
        goto HcjGS;
        RtNf8:
        $diff = $mulai->diff(new DateTime());
        goto KBduJ;
        dY5FT:
        $token = $this->cbt->getToken();
        goto Szyo7;
        EJwJU:
        $token = $this->cbt->getToken();
        goto d2QVP;
        b48UY:
        $new = $this->createNewToken();
        goto QBdZ1;
        J4HzN:
    }
    public function loadToken()
    {
        goto HzBRs;
        xEAaN:
        $table_changed = false;
        goto hMVrT;
        Lyo3g:
        if ($token == null) {
            goto DeC6S;
        }
        goto jLJIB;
        oetOm:
        DeC6S:
        goto r7zFw;
        a8W6j:
        $this->output_json($data);
        goto TEj1l;
        HzBRs:
        $dataflds = $this->db->field_data("\x63\x62\164\137\x74\157\153\145\x6e");
        goto xEAaN;
        TEj1l:
        SCSr6:
        goto hJ9uM;
        H3FVY:
        $data["\141\x75\164\x6f"] = "\60";
        goto uqBHZ;
        xcEgI:
        $token = $this->cbt->getToken();
        goto Lyo3g;
        gYuBr:
        goto SCSr6;
        goto oetOm;
        DzspP:
        $this->output_json($token);
        goto gYuBr;
        uqBHZ:
        $data["\145\x6c\x61\160\x73\145\144"] = "\60\x30\72\x30\60\x3a\x30\x30";
        goto a8W6j;
        jLJIB:
        $token->now = date("\x59\x2d\155\x2d\144\40\110\x3a\151\x3a\x73");
        goto DzspP;
        hMVrT:
        foreach ($dataflds as $fild) {
            goto ZtPPV;
            JLD7r:
            HK9dd:
            goto isSQ0;
            yrsgg:
            cvgyP:
            goto JLD7r;
            pQ0Vs:
            if (!($fild->type != "\166\x61\162\x63\150\141\162")) {
                goto cvgyP;
            }
            goto jZCwz;
            Fodyc:
            $table_changed = $this->dbforge->modify_column("\x63\x62\x74\x5f\x74\x6f\153\x65\156", $field);
            goto yrsgg;
            jZCwz:
            $field = ["\x75\160\144\141\x74\x65\144" => array("\x74\x79\x70\145" => "\x56\101\122\103\110\x41\x52", "\x63\x6f\x6e\163\x74\x72\141\151\156\164" => 20, "\144\x65\146\141\165\154\x74" => '')];
            goto Fodyc;
            ZtPPV:
            if (!($fild->name == "\x75\160\x64\141\164\145\144")) {
                goto HK9dd;
            }
            goto pQ0Vs;
            isSQ0:
            iauXu:
            goto miaMn;
            miaMn:
        }
        goto u1r78;
        u1r78:
        P7EwM:
        goto xcEgI;
        r7zFw:
        $data["\x74\x6f\x6b\x65\x6e"] = '';
        goto H3FVY;
        hJ9uM:
    }
    private function createNewToken()
    {
        goto rWASl;
        EnP7L:
        goto JwpzN;
        goto bJeyw;
        bJeyw:
        R5NOI:
        goto Hpc4a;
        gGXVj:
        v1r0K:
        goto yMGHG;
        QEi6u:
        $i = 0;
        goto fnSxR;
        fnSxR:
        JwpzN:
        goto A8Xwc;
        Hpc4a:
        return $new_token;
        goto cVD4F;
        rWASl:
        $chars = "\101\102\x43\104\105\106\x47\x48\111\112\113\114\x4d\x4e\x4f\120\121\122\123\124\125\x56\127\x58\x59\x5a";
        goto eb4DQ;
        eb4DQ:
        $input_length = strlen($chars);
        goto iL2kT;
        GM6ns:
        $new_token .= $random_character;
        goto gGXVj;
        yMGHG:
        $i++;
        goto EnP7L;
        A8Xwc:
        if (!($i < 6)) {
            goto R5NOI;
        }
        goto QoLVx;
        QoLVx:
        $random_character = $chars[mt_rand(0, $input_length - 1)];
        goto GM6ns;
        iL2kT:
        $new_token = '';
        goto QEi6u;
        cVD4F:
    }
}
