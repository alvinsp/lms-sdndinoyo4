<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\x53\105\x50\101\x54\110") or exit("\x4e\157\40\x64\x69\162\x65\143\x74\40\163\x63\162\151\x70\x74\40\141\143\143\145\163\163\40\x61\x6c\154\x6f\x77\x65\x64");
class Update extends CI_Controller
{
    function __construct()
    {
        goto i9paC;
        ryNp2:
        $this->load->database();
        goto EWsSW;
        yw0xX:
        $this->load->dbforge();
        goto ryNp2;
        EWsSW:
        $this->load->library("\145\156\143\x72\x79\160\164\x69\x6f\156");
        goto jniSZ;
        i9paC:
        parent::__construct();
        goto cAhs0;
        cAhs0:
        include APPPATH . "\143\x6f\x6e\146\x69\147\x2f\x64\141\164\x61\142\141\163\x65\x2e\x70\150\160";
        goto yw0xX;
        jniSZ:
    }
    public function output_json($data, $encode = true)
    {
        goto N9zWa;
        j2efc:
        $this->output->set_content_type("\x61\x70\x70\x6c\151\x63\141\164\151\x6f\x6e\x2f\152\x73\x6f\x6e")->set_output($data);
        goto aCBta;
        V1bmK:
        i1KER:
        goto j2efc;
        SUXu8:
        $data = json_encode($data);
        goto V1bmK;
        N9zWa:
        if (!$encode) {
            goto i1KER;
        }
        goto SUXu8;
        aCBta:
    }
    public function index()
    {
        goto Etgsv;
        pci_g:
        $this->load->view("\151\x6e\163\x74\x61\154\154\x2f\150\x65\x61\x64\145\162", $data);
        goto Xd1G2;
        r0iFV:
        $json = json_decode($json);
        goto rSY6A;
        Etgsv:
        $json = file_get_contents("\x2e\x2f\141\163\163\x65\x74\x73\57\141\x70\x70\x2f\144\142\57\x64\141\x74\x61\x62\x61\163\x65\56\x6a\x73\157\x6e");
        goto r0iFV;
        rSY6A:
        $json = (array) $json;
        goto HZ9cb;
        HZ9cb:
        $data["\x6a\x73\x6f\x6e"] = $json;
        goto pci_g;
        Xd1G2:
        $this->load->view("\x69\x6e\x73\164\x61\154\154\57\x75\x70\144\x61\164\145");
        goto YvTJ2;
        YvTJ2:
        $this->load->view("\x69\156\x73\164\x61\x6c\154\57\146\x6f\157\164\x65\162");
        goto Jtz76;
        Jtz76:
    }
    function object_to_array($data)
    {
        goto WORr7;
        IEukp:
        Ogqtw:
        goto vB0vF;
        s4Jgc:
        n5W77:
        goto TWp6_;
        TWp6_:
        return $data;
        goto wkBG0;
        vB0vF:
        return $result;
        goto s4Jgc;
        Q55SI:
        $result = [];
        goto SRKgi;
        WORr7:
        if (!(is_array($data) || is_object($data))) {
            goto n5W77;
        }
        goto Q55SI;
        SRKgi:
        foreach ($data as $key => $value) {
            $result[$key] = is_array($data) || is_object($data) ? $this->object_to_array($value) : $value;
            s50lJ:
        }
        goto IEukp;
        wkBG0:
    }
    public function checkDatabase()
    {
        goto PBg1t;
        NqMcj:
        $currentDb = [];
        goto gvAkx;
        IOLrx:
        $json = file_get_contents("\56\x2f\x61\x73\x73\x65\x74\163\x2f\141\160\x70\x2f\x64\142\x2f\x64\x61\x74\x61\142\x61\x73\x65\x2e\x6a\163\x6f\x6e");
        goto WF_EX;
        dGfTC:
        dDLXv:
        goto KYI_P;
        sfTfL:
        $this->output_json($data);
        goto wRstC;
        lvtrp:
        $create_tables = [];
        goto Oe2ra;
        gvAkx:
        foreach ($tabless as $table) {
            goto NcinO;
            DfwYS:
            goto xsPZY;
            goto aClrC;
            QbLPt:
            $c = count($query);
            goto Du0Fa;
            gDAjq:
            ZkCed:
            goto EraP4;
            mOJJS:
            $fields[$table] = $datafld;
            goto gDAjq;
            rE4Mz:
            ev_ht:
            goto zbAAG;
            zbAAG:
            $retval[$i] = new stdClass();
            goto Gv4zI;
            ladwW:
            $currentDb[$table] = $retval;
            goto mOJJS;
            B9NTE:
            $datafld[$i]->auto_increment = true;
            goto uDE0J;
            Q5cFn:
            $datafld[$i]->extra = $query[$i]->extra;
            goto aCRZ6;
            kOmXC:
            $retval = array();
            goto q5A8u;
            UO4lW:
            UDiyT:
            goto rE4Mz;
            Du0Fa:
            xsPZY:
            goto yUk_n;
            q5A8u:
            $i = 0;
            goto QbLPt;
            Aitfn:
            $currentDb = FALSE;
            goto FUGw8;
            LfiWB:
            if (!($datafld[$i]->name == $query[$i]->column_name)) {
                goto ev_ht;
            }
            goto E8o5C;
            FUGw8:
            UtE37:
            goto JfdR6;
            E8o5C:
            if (!($query[$i]->extra != '')) {
                goto UDiyT;
            }
            goto ntcZE;
            aCRZ6:
            goto pS27a;
            goto V5h6Q;
            P8lb_:
            $retval[$i]->extra = $query[$i]->extra;
            goto g64ew;
            ntcZE:
            if ($query[$i]->extra == "\x61\165\x74\157\x5f\x69\x6e\143\162\145\155\145\156\164") {
                goto Hijc3;
            }
            goto Q5cFn;
            uDE0J:
            pS27a:
            goto UO4lW;
            g64ew:
            aaBga:
            goto NwbbT;
            yUk_n:
            if (!($i < $c)) {
                goto tGbFT;
            }
            goto LfiWB;
            cgtSC:
            if (!(($query = $this->db->query($sql)) === FALSE)) {
                goto UtE37;
            }
            goto Aitfn;
            aClrC:
            tGbFT:
            goto ladwW;
            Gv4zI:
            $retval[$i]->name = $query[$i]->column_name;
            goto P8lb_;
            NcinO:
            $datafld = $this->db->field_data($table);
            goto ceMLD;
            NwbbT:
            $i++;
            goto DfwYS;
            JfdR6:
            $query = $query->result_object();
            goto kOmXC;
            ceMLD:
            $sql = "\123\x45\x4c\105\x43\x54\x20\140\143\x6f\154\x75\155\156\137\156\141\155\x65\140\x2c\40\140\156\x75\155\145\162\151\x63\137\160\162\x65\143\x69\163\151\x6f\x6e\140\x2c\40\x60\x65\x78\x74\162\141\x60\54\40\140\151\x73\137\x6e\165\154\154\141\x62\154\x65\x60" . "\x20\106\122\117\115\40\x60\x69\x6e\146\157\x72\155\141\164\x69\157\156\137\x73\143\x68\145\x6d\141\x60\56\x60\143\x6f\154\165\155\x6e\163\140\x20\x57\110\105\x52\105\40\x74\x61\x62\154\x65\137\x73\x63\x68\145\155\x61\x20\x3d\40\42" . $this->db->database . "\42\40\101\x4e\104\x20\x74\x61\x62\x6c\145\x5f\156\x61\x6d\145\40\75\40\x22" . $table . "\42";
            goto cgtSC;
            V5h6Q:
            Hijc3:
            goto B9NTE;
            EraP4:
        }
        goto hd5E1;
        MWwoS:
        $json = (array) $json;
        goto FBi80;
        WF_EX:
        $json = json_decode($json);
        goto MWwoS;
        eFm9U:
        $tbl_ada = array_keys($fields);
        goto fmIr_;
        eK9_H:
        $data = ["\144\x62" => $fields, "\143\162\x65\141\x74\145" => $create_tables, "\155\157\x64\x69\146\x79" => $edit_columns, "\141\x64\x64" => $add_columns, "\143\x6f\165\x6e\164\x73" => $counts, "\x6a\x73\x6f\156" => $json, "\143\x75\162\162\145\156\x74" => $currentDb];
        goto sfTfL;
        WxFDg:
        $tabless = $this->db->list_tables();
        goto PL34n;
        hd5E1:
        A82dx:
        goto IOLrx;
        PBg1t:
        $db_debug = $this->db->db_debug;
        goto low3E;
        hBhUf:
        sort($full_tables);
        goto lvtrp;
        PL34n:
        $fields = [];
        goto NqMcj;
        Oe2ra:
        $add_columns = [];
        goto TBixt;
        JoPpn:
        foreach ($full_tables as $table) {
            goto Pmk_U;
            eLizH:
            goto CrkWI;
            goto fLHgg;
            fLHgg:
            mhw4h:
            goto r_kqp;
            Pmk_U:
            if ($this->db->table_exists($table)) {
                goto mhw4h;
            }
            goto jZ5jO;
            UoDYg:
            f5czc:
            goto wFp0k;
            BrJg_:
            Y65DT:
            goto cnDdI;
            QhMVv:
            foreach ($json[$table] as $jtbl) {
                goto Bn69G;
                Hyg2Y:
                Swb26:
                goto FkreN;
                FkreN:
                mRxBs:
                goto z3JMx;
                Bn69G:
                if ($this->db->field_exists($jtbl->name, $table)) {
                    goto S0Na2;
                }
                goto UPZ5B;
                z3JMx:
                CEgld:
                goto DM8iZ;
                uz3YU:
                foreach ($fields[$table] as $ftbl) {
                    goto ldJE7;
                    xvHQB:
                    $edit_columns[$table][] = $jtbl;
                    goto Dn5Y0;
                    Dn5Y0:
                    Ks1gA:
                    goto lUzPi;
                    ylPo7:
                    dKtrP:
                    goto KFhQ3;
                    lUzPi:
                    wZDzl:
                    goto ylPo7;
                    ldJE7:
                    if (!($jtbl->name == $ftbl->name)) {
                        goto wZDzl;
                    }
                    goto iT19n;
                    iT19n:
                    if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) {
                        goto Ks1gA;
                    }
                    goto xvHQB;
                    KFhQ3:
                }
                goto Hyg2Y;
                iHn2Q:
                goto mRxBs;
                goto khfRy;
                khfRy:
                S0Na2:
                goto uz3YU;
                UPZ5B:
                $add_columns[$table][] = $jtbl;
                goto iHn2Q;
                DM8iZ:
            }
            goto mTwZg;
            cnDdI:
            CrkWI:
            goto UoDYg;
            jZ5jO:
            $create_tables[$table] = $json[$table];
            goto eLizH;
            r_kqp:
            if (!isset($json[$table])) {
                goto Y65DT;
            }
            goto QhMVv;
            mTwZg:
            BNB_z:
            goto BrJg_;
            wFp0k:
        }
        goto dGfTC;
        low3E:
        $this->db->db_debug = FALSE;
        goto WxFDg;
        TBixt:
        $edit_columns = [];
        goto JoPpn;
        fmIr_:
        $full_tables = array_merge($tbl_baru, $tbl_ada);
        goto Rs3a1;
        KYI_P:
        $counts = count($create_tables) + count($add_columns) + count($edit_columns);
        goto eK9_H;
        FBi80:
        $tbl_baru = array_keys($json);
        goto eFm9U;
        Rs3a1:
        $full_tables = array_unique($full_tables);
        goto hBhUf;
        wRstC:
    }
    public function updateDatabase()
    {
        goto G1FwA;
        QlJL3:
        $tbl_ada = array_keys($fields);
        goto OmJVM;
        mXqnc:
        foreach ($tabless as $table) {
            $fields[$table] = $this->db->field_data($table);
            bN2rX:
        }
        goto azuBO;
        L1DfC:
        echo true;
        goto FbAze;
        gBlNw:
        $fields = [];
        goto mXqnc;
        vzEei:
        $tbl_baru = array_keys($json);
        goto QlJL3;
        D5lEA:
        sort($full_tables);
        goto Ov6Do;
        fVQBQ:
        $json = (array) $json;
        goto vzEei;
        OmJVM:
        $full_tables = array_merge($tbl_baru, $tbl_ada);
        goto Pgjjm;
        Pgjjm:
        $full_tables = array_unique($full_tables);
        goto D5lEA;
        azuBO:
        FJBZq:
        goto LbGsp;
        X7fTS:
        $json = json_decode($json);
        goto fVQBQ;
        Ov6Do:
        foreach ($full_tables as $table) {
            goto iS8K0;
            RnXry:
            $this->dbforge->create_table($table, TRUE);
            goto ORxEJ;
            NS8Xr:
            oNKui:
            goto IwUhu;
            T4AXN:
            tKyvY:
            goto KD9it;
            ORxEJ:
            $this->db->query("\101\x4c\x54\105\x52\x20\124\x41\x42\114\x45\x20\40\x60" . $table . "\140\x20\x45\116\x47\x49\116\105\x20\75\40\x49\156\156\157\x44\x42");
            goto NAXla;
            TWwjP:
            goto YNkEd;
            goto NS8Xr;
            rJAWT:
            FQfB7:
            goto T4AXN;
            KD9it:
            YNkEd:
            goto OikVB;
            hNo4m:
            if (!isset($json[$table])) {
                goto ybIec;
            }
            goto YK_v8;
            IwUhu:
            if (!isset($json[$table])) {
                goto tKyvY;
            }
            goto r6Reg;
            r6Reg:
            foreach ($json[$table] as $jtbl) {
                goto i7XdU;
                H3KrL:
                FDvDT:
                goto TxIF5;
                GMiGA:
                goto K5sj4;
                goto H3KrL;
                sTzgW:
                CqfBV:
                goto GMiGA;
                i7XdU:
                if ($this->db->field_exists($jtbl->name, $table)) {
                    goto FDvDT;
                }
                goto nRe4R;
                iuXxb:
                Q_Hax:
                goto k5fu0;
                O2zTa:
                $this->dbforge->add_column($table, $field);
                goto X3qM9;
                h5bEt:
                $field = array($jtbl->name => array("\x74\x79\160\145" => $jtbl->type, "\143\157\x6e\163\164\x72\x61\151\156\164" => $jtbl->max_length, "\156\x75\x6c\x6c" => false));
                goto ihX_r;
                X3qM9:
                goto CqfBV;
                goto jwaWd;
                ihX_r:
                $this->dbforge->add_key($jtbl->name, true);
                goto O2zTa;
                w3XRJ:
                $field = array($jtbl->name => array("\x74\x79\160\x65" => $jtbl->type, "\x63\157\156\163\x74\162\141\151\x6e\164" => $jtbl->max_length, "\144\145\146\x61\x75\154\164" => $jtbl->default));
                goto Vbd9r;
                esmqo:
                h7xW1:
                goto rEu0a;
                Vbd9r:
                $this->dbforge->add_column($table, $field);
                goto sTzgW;
                TxIF5:
                foreach ($fields[$table] as $ftbl) {
                    goto HQam8;
                    geObS:
                    if ($jtbl->auto_increment == true) {
                        goto Nk7io;
                    }
                    goto EAevm;
                    c07sX:
                    hFmlb:
                    goto e3IN8;
                    EAevm:
                    $field = array($jtbl->name => array("\164\171\160\145" => $jtbl->type, "\143\157\156\163\164\x72\x61\151\156\164" => $jtbl->max_length, "\x6e\x75\154\x6c" => false));
                    goto m32my;
                    YYIja:
                    otO12:
                    goto jFGAF;
                    e3IN8:
                    $this->dbforge->add_key($jtbl->name, true);
                    goto UPB2U;
                    CP0YM:
                    $field = array($jtbl->name => array("\x74\171\160\x65" => $jtbl->type, "\143\x6f\x6e\x73\x74\x72\x61\x69\156\x74" => $jtbl->max_length, "\144\145\x66\x61\x75\154\x74" => $jtbl->default));
                    goto fVSqZ;
                    HyWCJ:
                    wo3dM:
                    goto LtvV6;
                    jFGAF:
                    if ($jtbl->default == "\x43\125\x52\x52\105\x4e\124\137\x54\111\x4d\105\123\x54\101\x4d\120") {
                        goto R4Hqk;
                    }
                    goto CP0YM;
                    ZdpYH:
                    goto NDFzU;
                    goto YYIja;
                    W40L2:
                    if ($jtbl->primary_key == 0) {
                        goto otO12;
                    }
                    goto geObS;
                    OKH8S:
                    $field = array($jtbl->name => array("\x74\x79\160\x65" => $jtbl->type, "\143\157\x6e\163\164\162\x61\151\156\x74" => $jtbl->max_length, "\x6e\165\154\154" => false, "\x61\165\x74\x6f\137\x69\156\143\x72\145\155\145\x6e\164" => true));
                    goto c07sX;
                    H_AfL:
                    $onUpdate = isset($jtbl->extra) ? "\40" . strtolower($jtbl->extra) : '';
                    goto GpLeS;
                    dn1C4:
                    WXSfy:
                    goto G3f8w;
                    HQam8:
                    if (!($jtbl->name == $ftbl->name)) {
                        goto wo3dM;
                    }
                    goto Yg7Mq;
                    GpLeS:
                    $field = array($jtbl->name . "\x20\x64\x61\164\x65\x74\x69\155\x65\40\x64\145\146\x61\x75\154\x74\x20\x63\x75\x72\x72\145\x6e\164\137\164\151\x6d\x65\x73\x74\x61\x6d\160" . $onUpdate);
                    goto dn1C4;
                    Yg7Mq:
                    if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) {
                        goto JbJXo;
                    }
                    goto W40L2;
                    Q1i40:
                    R4Hqk:
                    goto H_AfL;
                    tk4yd:
                    JbJXo:
                    goto HyWCJ;
                    LtvV6:
                    SBMRk:
                    goto vzufb;
                    m32my:
                    goto hFmlb;
                    goto mhPGE;
                    fVSqZ:
                    goto WXSfy;
                    goto Q1i40;
                    G3f8w:
                    $this->dbforge->modify_column($table, $field);
                    goto oAsgD;
                    mhPGE:
                    Nk7io:
                    goto OKH8S;
                    UPB2U:
                    $this->dbforge->modify_column($table, $field);
                    goto ZdpYH;
                    oAsgD:
                    NDFzU:
                    goto tk4yd;
                    vzufb:
                }
                goto esmqo;
                nRe4R:
                if ($jtbl->primary_key == 0) {
                    goto DYEbg;
                }
                goto h5bEt;
                rEu0a:
                K5sj4:
                goto iuXxb;
                jwaWd:
                DYEbg:
                goto w3XRJ;
                k5fu0:
            }
            goto rJAWT;
            iS8K0:
            if ($this->db->table_exists($table)) {
                goto oNKui;
            }
            goto hNo4m;
            OikVB:
            pJNyv:
            goto tWXqE;
            NAXla:
            ybIec:
            goto TWwjP;
            YK_v8:
            foreach ($json[$table] as $tbl => $jtbl) {
                goto oq0yV;
                iSaIF:
                if (!($jtbl->primary_key == 1)) {
                    goto Iubvn;
                }
                goto dFM1R;
                Tn0_t:
                cR2cu:
                goto D64JD;
                oq0yV:
                $field = [$jtbl->name => ["\164\x79\160\x65" => $jtbl->type, "\143\157\x6e\x73\x74\x72\x61\151\x6e\x74" => $jtbl->max_length, "\x6e\165\x6c\x6c" => $jtbl->primary_key == 0]];
                goto jQ4I6;
                jQ4I6:
                $this->dbforge->add_field($field);
                goto iSaIF;
                dFM1R:
                $this->dbforge->add_key($jtbl->name, true);
                goto Mdwb5;
                Mdwb5:
                Iubvn:
                goto Tn0_t;
                D64JD:
            }
            goto fHnQB;
            fHnQB:
            v3_r3:
            goto RnXry;
            tWXqE:
        }
        goto E29HB;
        LbGsp:
        $json = file_get_contents("\56\x2f\x61\163\x73\x65\x74\163\57\141\160\160\x2f\144\142\x2f\144\141\x74\x61\142\141\x73\145\x2e\152\163\x6f\x6e");
        goto X7fTS;
        E29HB:
        Hc_lN:
        goto L1DfC;
        G1FwA:
        $tabless = $this->db->list_tables();
        goto gBlNw;
        FbAze:
    }
    public function checkDb()
    {
        goto g8j5m;
        Zjkc2:
        foreach ($full_tables as $table) {
            goto aXrUg;
            oHLqA:
            $create_tables[] = $json[$table];
            goto u1qrI;
            aXrUg:
            if (!$this->db->table_exists($table)) {
                goto hXzDc;
            }
            goto W25Vc;
            sh8VG:
            hXzDc:
            goto oHLqA;
            vlVxT:
            $script_create_table[$table] = $script;
            goto ZvyZZ;
            W25Vc:
            if (!isset($json[$table])) {
                goto ITJI3;
            }
            goto PWWrG;
            RR9mj:
            $script .= $pri . "\x29\x20\105\x4e\107\111\116\105\75\x49\x6e\x6e\x6f\x44\x42\x20\104\x45\x46\x41\125\114\124\40\103\110\101\122\x53\105\124\75\x75\164\146\70\x6d\x62\x34\73";
            goto vlVxT;
            YVb1H:
            $script_edit_column[$table] = "\101\114\124\x45\122\40\124\x41\x42\x4c\105\x20\140" . $table . "\140\40" . implode("\54\40", $modif_column) . "\x3b";
            goto GHb2d;
            TmAw7:
            T19RT:
            goto NNypI;
            UE6L6:
            foreach ($json[$table]->columns as $column) {
                goto fwWz6;
                tRJl4:
                $pri .= $column->primary != '' ? "\x50\x52\x49\x4d\101\x52\x59\40\x4b\x45\131\40\x28\x60" . $column->name . "\140\x29" : '';
                goto TLgIK;
                mWodA:
                $extra = $column->extra == '' ? '' : "\x20" . strtoupper($column->extra);
                goto Thknb;
                kaRQ1:
                Kg584:
                goto g0B2x;
                g0B2x:
                $nullable = $column->nullable == "\116\117" ? "\x20\116\x4f\x54\40\x4e\x55\114\x4c" : '';
                goto iZO7e;
                Thknb:
                $comment = $column->comment == '' ? '' : "\40\x43\117\x4d\115\x45\x4e\x54\x20\47" . $column->comment . "\x27";
                goto nmMrP;
                fwWz6:
                if ($column->max_length == null) {
                    goto ohjrZ;
                }
                goto B6uhf;
                NyZ1C:
                goto Kg584;
                goto wfudO;
                MlB1k:
                if ($column->type == "\151\x6e\164") {
                    goto asKkD;
                }
                goto TYWFO;
                vWsbo:
                $length = "\50" . ($column->max_length + 1) . "\51";
                goto gLUfs;
                iZO7e:
                $default = $column->default == null ? '' : "\40\x44\x45\106\101\125\x4c\124\40" . $column->default;
                goto mWodA;
                nmMrP:
                $script .= "\140" . $column->name . "\140\x20" . $column->type . $length . $nullable . $default . $extra . $comment . "\54\x20";
                goto tRJl4;
                AzcJz:
                goto JM9y3;
                goto gb1OY;
                gb1OY:
                asKkD:
                goto vWsbo;
                gLUfs:
                JM9y3:
                goto kaRQ1;
                wfudO:
                TJyD8:
                goto MlB1k;
                TYWFO:
                $length = "\x28" . $column->max_length . "\x29";
                goto AzcJz;
                EpzaE:
                $length = '';
                goto PQYyA;
                Z9XA5:
                $length = '';
                goto NyZ1C;
                JYh8Z:
                ohjrZ:
                goto Z9XA5;
                TLgIK:
                ln7nJ:
                goto qzm9M;
                B6uhf:
                if ($column->type != "\154\x6f\x6e\147\x74\x65\170\x74" && $column->type != "\x6d\145\x64\x69\x75\155\x74\x65\170\164" && $column->type != "\164\x65\x78\164") {
                    goto TJyD8;
                }
                goto EpzaE;
                PQYyA:
                goto Kg584;
                goto JYh8Z;
                qzm9M:
            }
            goto c5Gk0;
            PWWrG:
            $add_column = [];
            goto emFm4;
            KOsm2:
            $pri = '';
            goto UE6L6;
            GdllL:
            if (!(count($add_column) > 0)) {
                goto YxgJq;
            }
            goto cCwfX;
            c5Gk0:
            IlOMK:
            goto RR9mj;
            MGfaE:
            ITJI3:
            goto l4J3n;
            XGrrS:
            if (!(count($modif_column) > 0)) {
                goto Ewk3I;
            }
            goto YVb1H;
            QjZJr:
            foreach ($json[$table]->columns as $jtbl) {
                goto xWdMV;
                rbpDD:
                if ($jtbl->type == "\x69\x6e\x74") {
                    goto QAtO_;
                }
                goto b8c_m;
                QfC6_:
                $extra .= "\40\x50\x52\111\x4d\101\122\131\40\113\x45\x59";
                goto tJeyZ;
                n3WZx:
                foreach ($fields[$table]->columns as $ftbl) {
                    goto NdIGe;
                    n502f:
                    $comment = $jtbl->comment == '' ? '' : "\40\x43\x4f\x4d\x4d\105\x4e\124\40\x27" . $jtbl->comment . "\x27";
                    goto A94nj;
                    Yi3av:
                    if (!($jtbl->col_type != $ftbl->col_type || $jtbl->nullable != $ftbl->nullable || $jtbl->default != $ftbl->default || $jtbl->extra != $ftbl->extra || $jtbl->comment != $ftbl->comment)) {
                        goto DNtaV;
                    }
                    goto xQDYO;
                    m2aA4:
                    CCXf8:
                    goto Sjd4p;
                    gw3qD:
                    $jtbl->extra = strtoupper($jtbl->extra);
                    goto LC_Eq;
                    ngPCs:
                    $edit_columns[$table][$jtbl->name]["\144\x65\146\x61\x75\x6c\x74"] = $jtbl->default;
                    goto idJm2;
                    d3HKQ:
                    if (strtolower($jtbl->primary) == "\x75\x6e\x69") {
                        goto jhWeq;
                    }
                    goto BC_8r;
                    xQDYO:
                    $nullable = $jtbl->nullable == "\x4e\117" ? "\40\116\x4f\x54\40\x4e\x55\114\114" : '';
                    goto wbR0M;
                    hxLx2:
                    if (!($jtbl->extra != null)) {
                        goto Y0FFS;
                    }
                    goto HKXCl;
                    cD3rz:
                    dJiDT:
                    goto wz0zO;
                    HT5eE:
                    if (!($ftbl->extra != null)) {
                        goto CCXf8;
                    }
                    goto rsUxc;
                    Dmifb:
                    $edit_columns[$table][$jtbl->name]["\x63\157\154\137\164\x79\160\145"] = $jtbl->col_type;
                    goto dcSbV;
                    rqxB4:
                    $edit_columns[$table][$jtbl->name]["\x70\162\x69\x6d\141\x72\171"] = $jtbl->primary;
                    goto AEMGt;
                    EE6m3:
                    QhqNb:
                    goto aTRxm;
                    Ob94E:
                    DNtaV:
                    goto eDqwG;
                    wtLdv:
                    $extra = $jtbl->extra == '' ? '' : "\40" . strtoupper($jtbl->extra);
                    goto n502f;
                    AouxE:
                    if (!($ftbl->default != null)) {
                        goto R0SM8;
                    }
                    goto UsMTy;
                    ddaGf:
                    WjVxj:
                    goto uVzm4;
                    UsMTy:
                    $ftbl->default = str_replace("\50\51", '', $ftbl->default);
                    goto oDVkS;
                    wbR0M:
                    $default = $jtbl->default == null ? '' : "\40\x44\x45\106\101\125\114\x54\40" . $jtbl->default;
                    goto wtLdv;
                    LC_Eq:
                    Y0FFS:
                    goto HT5eE;
                    g3liF:
                    R0SM8:
                    goto zIc07;
                    dcSbV:
                    mv_Ig:
                    goto DJ8f2;
                    FbSry:
                    if (!($jtbl->comment != $ftbl->comment)) {
                        goto qA6sY;
                    }
                    goto nhIO0;
                    XmpYR:
                    $edit_columns[$table][$jtbl->name]["\x6e\165\x6c\x6c\141\142\154\145"] = $jtbl->nullable;
                    goto EE6m3;
                    E3jBI:
                    $ftbl->extra = strtoupper($ftbl->extra);
                    goto m2aA4;
                    BC_8r:
                    goto dJiDT;
                    goto wJcND;
                    LsdCP:
                    $jtbl->default = strtoupper($jtbl->default);
                    goto EBI3z;
                    idJm2:
                    DCzCG:
                    goto hxLx2;
                    Wday6:
                    iqBGP:
                    goto FbSry;
                    wz0zO:
                    PzQnQ:
                    goto Yi3av;
                    nDP0Q:
                    $jtbl->default = str_replace("\x28\x29", '', $jtbl->default);
                    goto LsdCP;
                    eDqwG:
                    LivNs:
                    goto ddaGf;
                    zIc07:
                    if (!($jtbl->default != $ftbl->default)) {
                        goto DCzCG;
                    }
                    goto ngPCs;
                    IqBsm:
                    qA6sY:
                    goto e0JLV;
                    A94nj:
                    array_push($modif_column, "\115\x4f\104\x49\x46\x59\x20\x60" . $jtbl->name . "\x60\x20" . $jtbl->col_type . $nullable . $default . $extra . $comment);
                    goto Ob94E;
                    zIaRI:
                    if (!($jtbl->col_type != $ftbl->col_type)) {
                        goto mv_Ig;
                    }
                    goto Dmifb;
                    HKXCl:
                    $jtbl->extra = str_replace("\50\x29", '', $jtbl->extra);
                    goto gw3qD;
                    XzJng:
                    array_push($modif_column, "\x41\x44\104\x20\x50\x52\x49\115\x41\x52\x59\40\x4b\x45\x59\40\x28\x60" . $jtbl->name . "\x60\51");
                    goto bc05J;
                    pi5f8:
                    $edit_columns[$table][$jtbl->name]["\145\x78\x74\x72\141"] = $jtbl->extra;
                    goto Wday6;
                    TFJmH:
                    jhWeq:
                    goto CkdAk;
                    bc05J:
                    goto dJiDT;
                    goto TFJmH;
                    oDVkS:
                    $ftbl->default = strtoupper($ftbl->default);
                    goto g3liF;
                    nhIO0:
                    $edit_columns[$table][$jtbl->name]["\x63\157\155\x6d\x65\156\x74"] = $jtbl->comment;
                    goto IqBsm;
                    DJ8f2:
                    if (!($jtbl->nullable != $ftbl->nullable)) {
                        goto QhqNb;
                    }
                    goto XmpYR;
                    wJcND:
                    wYsOZ:
                    goto XzJng;
                    e0JLV:
                    if (!($jtbl->primary != $ftbl->primary)) {
                        goto PzQnQ;
                    }
                    goto rqxB4;
                    AEMGt:
                    if (strtolower($jtbl->primary) == "\x70\162\151") {
                        goto wYsOZ;
                    }
                    goto d3HKQ;
                    rsUxc:
                    $ftbl->extra = str_replace("\50\51", '', $ftbl->extra);
                    goto E3jBI;
                    CkdAk:
                    array_push($modif_column, "\101\x44\x44\x20\x55\116\x49\x51\125\x45\40\113\105\x59\40\x60" . $jtbl->name . "\x60\40\x28\x60" . $jtbl->name . "\140\x29");
                    goto cD3rz;
                    NdIGe:
                    if (!($jtbl->name == $ftbl->name)) {
                        goto LivNs;
                    }
                    goto zIaRI;
                    aTRxm:
                    if (!($jtbl->default != null)) {
                        goto vHo4D;
                    }
                    goto nDP0Q;
                    Sjd4p:
                    if (!($jtbl->extra != $ftbl->extra)) {
                        goto iqBGP;
                    }
                    goto pi5f8;
                    EBI3z:
                    vHo4D:
                    goto AouxE;
                    uVzm4:
                }
                goto yu8HZ;
                KCErY:
                if (!(strtoupper($extra) == "\40\101\x55\x54\x4f\x5f\111\x4e\x43\x52\x45\x4d\x45\x4e\x54")) {
                    goto dqoX9;
                }
                goto QfC6_;
                Xkcuz:
                $extra = $jtbl->extra == '' ? '' : "\40" . strtoupper($jtbl->extra);
                goto KCErY;
                msw3N:
                $comment = $jtbl->comment == '' ? '' : "\x20\x43\x4f\115\115\x45\x4e\x54\40\47" . $jtbl->comment . "\47";
                goto SKlK5;
                mOvYH:
                $add_columns[$table][] = $jtbl;
                goto IDqpn;
                tJeyZ:
                dqoX9:
                goto msw3N;
                ArOMu:
                $length = '';
                goto yyZ5W;
                IDqpn:
                if ($jtbl->max_length == null) {
                    goto nwt2r;
                }
                goto QRKjg;
                d3EtS:
                $default = $jtbl->default == null ? '' : "\x20\104\x45\106\x41\125\114\x54\x20" . $jtbl->default;
                goto Xkcuz;
                vu1XZ:
                QAtO_:
                goto BSPQ2;
                QRKjg:
                if ($jtbl->type != "\x6c\x6f\x6e\147\x74\x65\170\164" && $jtbl->type != "\x6d\145\144\151\165\x6d\164\145\170\x74" && $jtbl->type != "\164\145\x78\x74") {
                    goto s2NRp;
                }
                goto ArOMu;
                o_NRD:
                $length = '';
                goto RPwBT;
                nSUQy:
                dcVmx:
                goto fchhs;
                AVZEh:
                Nzm7Y:
                goto XeOW3;
                yu8HZ:
                Qgovh:
                goto nSUQy;
                RPwBT:
                goto Nzm7Y;
                goto bu6Kd;
                xWdMV:
                if ($this->db->field_exists($jtbl->name, $table)) {
                    goto h4tUR;
                }
                goto mOvYH;
                ZsIWR:
                nwt2r:
                goto o_NRD;
                Io5Tb:
                oJnDR:
                goto AVZEh;
                XeOW3:
                $nullable = $jtbl->nullable == "\x4e\117" ? "\40\x4e\117\x54\x20\116\x55\x4c\x4c" : '';
                goto d3EtS;
                bu6Kd:
                s2NRp:
                goto rbpDD;
                b8c_m:
                $length = "\x28" . $jtbl->max_length . "\x29";
                goto nBDrD;
                yyZ5W:
                goto Nzm7Y;
                goto ZsIWR;
                XpAn7:
                h4tUR:
                goto n3WZx;
                SKlK5:
                array_push($add_column, "\101\104\x44\40\x60" . $jtbl->name . "\x60\40" . $jtbl->type . $length . $nullable . $default . $extra . $comment);
                goto XpAn7;
                nBDrD:
                goto oJnDR;
                goto vu1XZ;
                BSPQ2:
                $length = "\x28" . ($jtbl->max_length + 1) . "\51";
                goto Io5Tb;
                fchhs:
            }
            goto g3RFn;
            g3RFn:
            QnDZS:
            goto GdllL;
            l4J3n:
            goto OqnY6;
            goto sh8VG;
            BkB_3:
            YxgJq:
            goto XGrrS;
            ZvyZZ:
            OqnY6:
            goto TmAw7;
            GHb2d:
            Ewk3I:
            goto MGfaE;
            cCwfX:
            $script_create_column[$table] = "\101\x4c\x54\105\x52\40\x54\101\x42\x4c\x45\x20\140" . $table . "\x60\x20" . implode("\x2c\x20", $add_column) . "\x3b";
            goto BkB_3;
            u1qrI:
            $script = "\103\x52\x45\101\x54\105\40\124\x41\x42\x4c\105\x20\140" . $table . "\140\40\x28";
            goto KOsm2;
            emFm4:
            $modif_column = [];
            goto QjZJr;
            NNypI:
        }
        goto BDjKB;
        q4Uh7:
        $full_tables = array_unique($full_tables);
        goto HZfLJ;
        nHLzb:
        $data = ["\x66\x69\145\154\144\x73" => $fields, "\143\162\x65\x61\164\x65\x5f\x74\141\142\154\x65\163" => $create_tables, "\143\x6f\x75\x6e\164\x5f\x74\x62\154" => count($create_tables), "\141\x64\x64\x5f\x63\x6f\x6c\x75\155\156\x73\x5f\164\157\137\164\x61\142\x6c\x65" => $add_columns, "\x63\157\165\x6e\x74\137\143\x6f\154" => count($add_columns), "\x65\x64\151\x74\137\x63\157\154\x75\x6d\x6e\163" => $edit_columns, "\x63\x6f\x75\x6e\164\x5f\155\x6f\x64" => count($edit_columns), "\141\144\x64\x5f\164\142\154" => $this->encryption->encrypt(json_encode($script_create_table)), "\x61\144\x64\x5f\143\x6f\x6c" => $this->encryption->encrypt(json_encode($script_create_column)), "\155\157\x64\137\x63\x6f\154" => $this->encryption->encrypt(json_encode($script_edit_column))];
        goto TB5ph;
        tBhaS:
        $this->db->db_debug = FALSE;
        goto YKxRo;
        TB5ph:
        $this->output_json($data);
        goto KFjfa;
        BEFLZ:
        $script_create_table = [];
        goto ndebW;
        QC6rz:
        $tbl_seharusnya = array_keys($json);
        goto ac3TW;
        g8j5m:
        $db_debug = $this->db->db_debug;
        goto tBhaS;
        CAAlc:
        g_znV:
        goto X5j1G;
        bsZ08:
        $json = json_decode($json);
        goto iHFyW;
        zUj0I:
        $script_edit_column = [];
        goto Zjkc2;
        iHFyW:
        $json = (array) $json;
        goto QC6rz;
        lz6Wx:
        $script_create_column = [];
        goto nBNVW;
        nBNVW:
        $edit_columns = [];
        goto zUj0I;
        xCf1I:
        $this->db->db_debug = $db_debug;
        goto nHLzb;
        YKxRo:
        $tabless = $this->db->list_tables();
        goto XZMfg;
        X5j1G:
        $json = file_get_contents("\56\57\x61\163\163\145\x74\x73\57\x61\160\x70\57\x64\142\x2f\144\x61\164\141\142\x61\x73\145\56\152\163\x6f\x6e");
        goto bsZ08;
        x127h:
        foreach ($tabless as $table) {
            goto BbIGQ;
            Fd0JQ:
            $fields[$table] = (object) ["\x74\x61\142\154\145\137\x6e\x61\155\x65" => $table, "\143\x6f\x6c\x75\155\156\x73" => $retval];
            goto aw8uD;
            J9RdC:
            $retval[$i]->nullable = $query[$i]->is_nullable;
            goto PJgGk;
            Kk8FP:
            if (!(($query = $this->db->query($sql)) === FALSE)) {
                goto RMo0Q;
            }
            goto ETEYq;
            idcKK:
            GLBVU:
            goto iYN2m;
            GO_1T:
            $retval[$i]->col_type = $query[$i]->column_type;
            goto A5JQY;
            MIoGr:
            $retval[$i]->max_length = $query[$i]->character_maximum_length > 0 ? $query[$i]->character_maximum_length : $query[$i]->numeric_precision;
            goto cLOrJ;
            P4JzZ:
            Thb_A:
            goto q4GWC;
            lA0aq:
            $retval[$i] = new stdClass();
            goto kBYtA;
            lX41S:
            $i = 0;
            goto yd7Y0;
            lBoPv:
            goto Thb_A;
            goto lCNhE;
            aw8uD:
            L5ZuV:
            goto By4KP;
            ETEYq:
            $fields = FALSE;
            goto extwx;
            bGjl0:
            $query = $query->result_object();
            goto VkTj7;
            VkTj7:
            $retval = array();
            goto lX41S;
            YUtgB:
            $retval[$i]->extra = $query[$i]->extra;
            goto J9RdC;
            lCNhE:
            rkrx8:
            goto Fd0JQ;
            q4GWC:
            if (!($i < $c)) {
                goto rkrx8;
            }
            goto lA0aq;
            PJgGk:
            $retval[$i]->primary = $query[$i]->column_key;
            goto idcKK;
            extwx:
            RMo0Q:
            goto bGjl0;
            N6FXe:
            $retval[$i]->collation = $query[$i]->collation_name;
            goto MIoGr;
            jxPtT:
            $retval[$i]->comment = $query[$i]->column_comment;
            goto YUtgB;
            yd7Y0:
            $c = count($query);
            goto P4JzZ;
            A5JQY:
            $retval[$i]->type = $query[$i]->data_type;
            goto N6FXe;
            cLOrJ:
            $retval[$i]->default = $query[$i]->column_default;
            goto jxPtT;
            kBYtA:
            $retval[$i]->name = $query[$i]->column_name;
            goto GO_1T;
            iYN2m:
            $i++;
            goto lBoPv;
            BbIGQ:
            $sql = "\123\105\x4c\x45\103\124\40\x60\143\x6f\154\165\155\x6e\x5f\x6e\x61\x6d\145\140\54\x20\140\143\x6f\x6c\x75\x6d\x6e\137\164\x79\x70\145\x60\54\x20\140\143\157\x6c\x6c\x61\x74\151\x6f\156\x5f\156\x61\155\145\140\x2c\40\x60\144\141\164\x61\x5f\164\x79\x70\145\140\x2c\40\140\x63\150\141\x72\x61\x63\x74\145\x72\x5f\155\x61\x78\x69\x6d\x75\x6d\x5f\154\145\x6e\x67\x74\x68\140\54\40\x60\156\165\x6d\x65\x72\x69\143\x5f\x70\162\x65\x63\x69\163\151\157\156\x60\54" . "\40\140\x63\157\x6c\x75\155\x6e\137\144\x65\x66\x61\x75\x6c\164\x60\54\40\x60\143\157\154\165\x6d\156\137\153\x65\x79\x60\54\x20\140\x63\157\x6c\165\155\156\x5f\143\157\x6d\155\145\156\x74\x60\54\40\x60\x65\x78\164\x72\x61\140\54\40\140\x69\x73\x5f\x6e\x75\154\x6c\x61\142\154\x65\140\15\xa\11\11\11\x46\x52\x4f\x4d\40\140\151\156\146\x6f\x72\x6d\141\164\x69\157\x6e\x5f\x73\143\150\x65\x6d\141\140\56\140\143\x6f\154\165\155\x6e\163\140\40\x57\110\105\122\x45\x20\x74\141\x62\x6c\x65\x5f\x73\143\150\145\155\141\40\x3d\x20\42" . $this->db->database . "\42\x20\101\116\104\40\164\141\142\x6c\x65\137\x6e\141\155\x65\x20\x3d\x20\x22" . $table . "\x22";
            goto Kk8FP;
            By4KP:
        }
        goto CAAlc;
        XIKWp:
        $full_tables = array_merge($tbl_seharusnya, $tbl_ada);
        goto q4Uh7;
        BDjKB:
        OOmkb:
        goto xCf1I;
        ndebW:
        $add_columns = [];
        goto lz6Wx;
        ac3TW:
        $tbl_ada = array_keys($fields);
        goto XIKWp;
        FphJh:
        $create_tables = [];
        goto BEFLZ;
        XZMfg:
        $fields = [];
        goto x127h;
        HZfLJ:
        sort($full_tables);
        goto FphJh;
        KFjfa:
    }
    public function createTable()
    {
        goto UTqGd;
        UTqGd:
        $scripts = $this->input->post("\144\141\x74\141", true);
        goto FX3zV;
        eXh2f:
        $scripts = json_decode($this->encryption->decrypt($scripts));
        goto VSzPm;
        Iu8VV:
        foreach ($scripts as $script) {
            $queries .= $script;
            dMeor:
        }
        goto I5xaS;
        QLsV4:
        $data["\155\145\163\163\x61\x67\145"] = "\x55\160\144\141\164\x65\x20\153\x6f\154\x6f\155";
        goto MbTIV;
        vFelh:
        $data["\x73\x75\143\143\145\163\x73"] = $this->runQuery($queries);
        goto QLsV4;
        MbTIV:
        $this->output_json($data);
        goto kBjmf;
        HVxG8:
        sleep(1);
        goto eXh2f;
        FX3zV:
        str_replace("\x25\x32\x42", "\x2b", $scripts);
        goto HVxG8;
        VSzPm:
        $queries = '';
        goto Iu8VV;
        I5xaS:
        cYyJy:
        goto vFelh;
        kBjmf:
    }
    public function createColumn()
    {
        goto WM92s;
        h7VEw:
        foreach ($scripts as $script) {
            $queries .= $script;
            KZwnT:
        }
        goto iT8Hx;
        GdV1V:
        $scripts = json_decode($this->encryption->decrypt($scripts));
        goto oTIL8;
        bmslG:
        str_replace("\45\x32\x42", "\x2b", $scripts);
        goto hOBbJ;
        tqSjg:
        $this->updateUID();
        goto jrg08;
        KygHa:
        if (!(strpos("\140\165\x69\144\x60", $queries) !== false)) {
            goto Rnalr;
        }
        goto tqSjg;
        hOBbJ:
        sleep(1);
        goto GdV1V;
        iT8Hx:
        abeMU:
        goto KygHa;
        WM92s:
        $scripts = $this->input->post("\144\141\164\141", true);
        goto bmslG;
        jrg08:
        Rnalr:
        goto mx_BP;
        XKJjQ:
        $this->output_json($data);
        goto y0Ok0;
        oTIL8:
        $queries = '';
        goto h7VEw;
        bK4lS:
        $data["\x6d\x65\163\163\x61\x67\x65"] = "\115\157\x64\x69\x66\x79\40\153\157\x6c\157\155";
        goto XKJjQ;
        mx_BP:
        $data["\x73\165\x63\143\145\163\163"] = $this->runQuery($queries);
        goto bK4lS;
        y0Ok0:
    }
    public function editColumn()
    {
        goto yjuH2;
        B8Ch0:
        $data["\x6d\145\163\163\141\147\x65"] = "\125\x70\144\x61\x74\145\40\163\145\154\x65\x73\x61\151";
        goto JLvsi;
        hgk7k:
        sleep(1);
        goto C_eJU;
        C_eJU:
        $scripts = json_decode($this->encryption->decrypt($scripts));
        goto x3Ewf;
        yjuH2:
        $scripts = $this->input->post("\144\x61\x74\x61", true);
        goto GlO8v;
        QU8Hu:
        LMMeZ:
        goto LFQNx;
        EMTnE:
        foreach ($scripts as $script) {
            $queries .= $script;
            FNFVZ:
        }
        goto QU8Hu;
        JLvsi:
        $this->output_json($data);
        goto P4zBc;
        x3Ewf:
        $queries = '';
        goto EMTnE;
        GlO8v:
        str_replace("\45\x32\102", "\x2b", $scripts);
        goto hgk7k;
        LFQNx:
        $data["\x73\165\x63\x63\x65\x73\x73"] = $this->runQuery($queries);
        goto B8Ch0;
        P4zBc:
    }
    function runQuery($script)
    {
        goto qGEwk;
        HY665:
        $hostpass = $this->db->password;
        goto gOtnu;
        qGEwk:
        $hostname = $this->db->hostname;
        goto d_A3z;
        T_E4u:
        if (!mysqli_connect_errno()) {
            goto lqDCF;
        }
        goto HP0Zj;
        ZrRAr:
        return true;
        goto pNEDQ;
        hmhD2:
        $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database);
        goto T_E4u;
        tYcJT:
        $mysqli->multi_query($script);
        goto DyFXv;
        DyFXv:
        $mysqli->close();
        goto ZrRAr;
        gOtnu:
        $database = $this->db->database;
        goto hmhD2;
        HP0Zj:
        return mysqli_connect_errno();
        goto I3C7T;
        I3C7T:
        lqDCF:
        goto tYcJT;
        d_A3z:
        $hostuser = $this->db->username;
        goto HY665;
        pNEDQ:
    }
    function updateUID()
    {
        goto BuXJj;
        Z3AUH:
        $siswas = $this->db->get("\155\141\x73\x74\x65\x72\137\x73\x69\163\167\141")->result();
        goto YaLVe;
        YaLVe:
        $input = array();
        goto ClQEl;
        Ca7RF:
        tVbF5:
        goto t6rFL;
        ClQEl:
        foreach ($siswas as $siswa) {
            $input[] = array("\151\144\137\163\x69\163\x77\x61" => $siswa->id_siswa, "\165\151\x64" => $this->uuid->v4());
            zscE6:
        }
        goto Ca7RF;
        t6rFL:
        return $this->db->update_batch("\155\141\x73\x74\x65\162\137\163\x69\x73\167\141", $input, "\x69\x64\137\163\x69\163\x77\141");
        goto fQpck;
        BuXJj:
        $this->load->library("\125\165\x69\144", "\165\x75\x69\144");
        goto Z3AUH;
        fQpck:
    }
    function make_base()
    {
    }
}
