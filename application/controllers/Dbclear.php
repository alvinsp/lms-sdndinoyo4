<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\123\x45\120\101\124\110") or exit("\116\157\x20\144\151\162\145\143\164\40\163\x63\x72\151\x70\x74\x20\141\x63\x63\x65\163\163\40\141\x6c\154\x6f\x77\x65\x64");
class Dbclear extends CI_Controller
{
    public function __construct()
    {
        goto XEhmn;
        Dl1fW:
        $this->load->helper("\144\x69\x72\x65\x63\164\x6f\162\171");
        goto UvAqQ;
        uNF9E:
        redirect("\141\165\x74\150");
        goto mzxde;
        iTp3G:
        if ($this->ion_auth->is_admin()) {
            goto bcYuV;
        }
        goto wqzHc;
        XEhmn:
        parent::__construct();
        goto U_PBG;
        U_PBG:
        if (!$this->ion_auth->logged_in()) {
            goto z_FDu;
        }
        goto iTp3G;
        SURrI:
        $this->load->model("\104\x61\163\150\142\157\141\x72\144\x5f\x6d\157\144\145\x6c", "\144\x61\163\150\x62\x6f\x61\162\x64");
        goto Dl1fW;
        LSqrh:
        $this->load->model("\x53\145\164\164\x69\x6e\x67\x73\137\155\x6f\x64\145\154", "\x73\x65\x74\x74\x69\156\x67\163");
        goto SURrI;
        eZZ0v:
        $this->load->library("\165\x70\x6c\157\141\x64");
        goto rB3GN;
        uFyuW:
        bcYuV:
        goto wJd_d;
        wqzHc:
        show_error("\110\x61\x6e\171\141\40\101\x64\155\151\x6e\40\x79\141\156\147\x20\x62\x6f\x6c\x65\x68\x20\x6d\x65\156\147\141\x6b\163\145\163\40\150\141\154\x61\x6d\x61\x6e\40\x69\x6e\x69", 403, "\101\x6b\x73\145\x73\40\x64\151\154\x61\162\x61\x6e\x67");
        goto uFyuW;
        sg5TK:
        z_FDu:
        goto uNF9E;
        wJd_d:
        goto jOD4Q;
        goto sg5TK;
        mzxde:
        jOD4Q:
        goto eZZ0v;
        rB3GN:
        $this->load->dbforge();
        goto LSqrh;
        UvAqQ:
    }
    public function output_json($data, $encode = true)
    {
        goto Vnnpq;
        Vnnpq:
        if (!$encode) {
            goto cwUCJ;
        }
        goto Lr84E;
        iJdMT:
        cwUCJ:
        goto VaWnJ;
        Lr84E:
        $data = json_encode($data);
        goto iJdMT;
        VaWnJ:
        $this->output->set_content_type("\141\x70\160\x6c\151\x63\x61\164\151\157\x6e\57\x6a\163\157\x6e")->set_output($data);
        goto o43er;
        o43er:
    }
    public function index()
    {
        goto Ja8NI;
        Jnmj_:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto Cft1C;
        y0fo7:
        $this->load->view("\x73\145\164\164\x69\156\147\x2f\155\x61\x6e\x61\x67\x65");
        goto sdjWS;
        zd7nQ:
        $json = (array) $json;
        goto FMlPI;
        TfV3Z:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto xR4ow;
        FMlPI:
        $user = $this->ion_auth->user()->row();
        goto FMfRX;
        ZxVCo:
        $data["\164\x61\142\154\145\163"] = $data_tables;
        goto uyn3A;
        sdjWS:
        $this->load->view("\137\164\145\155\x70\x6c\141\x74\145\x73\x2f\144\141\x73\150\142\x6f\141\162\144\57\x5f\x66\x6f\x6f\x74\x65\x72");
        goto K1bpA;
        gIYZ6:
        hrAZu:
        goto ZxVCo;
        xR4ow:
        $data["\164\160\x5f\x61\143\x74\x69\166\145"] = $this->dashboard->getTahunActive();
        goto Jnmj_;
        FMfRX:
        $data = ["\x75\163\x65\162" => $user, "\x6a\x75\144\x75\154" => "\102\x65\162\163\x69\150\x6b\141\156\x20\104\141\x74\141", "\163\x75\x62\152\165\144\x75\154" => "\x48\x61\160\165\x73\40\104\141\x74\x61", "\x70\162\157\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\x6e\147" => $this->dashboard->getSetting()];
        goto TfV3Z;
        TvthP:
        $data_tables = [];
        goto OFKKB;
        OFKKB:
        $tables = $this->db->list_tables();
        goto gDoF1;
        YpHwu:
        $excludes = ["\x62\x75\x6b\x75\137\x69\156\144\165\153", "\141\x70\151\137\163\x65\164\164\x69\x6e\147", "\x61\x70\x69\137\164\157\153\x65\x6e", "\142\x75\154\x61\x6e", "\x68\x61\x72\151", "\163\x65\164\164\151\156\x67", "\143\x62\164\x5f\152\145\156\151\x73", "\143\142\x74\x5f\162\x75\x61\x6e\x67", "\143\x62\164\137\x73\x65\x73\x69", "\x63\142\164\137\x74\157\153\x65\156", "\x6c\145\166\145\x6c\137\x67\x75\x72\165", "\x6c\x65\x76\145\x6c\x5f\153\x65\x6c\x61\163", "\x6d\x61\x73\x74\145\162\137\164\160", "\x6d\141\163\164\145\162\137\163\x6d\164", "\x6d\141\163\x74\145\162\137\150\141\x72\x69\137\145\146\x65\x6b\164\x69\x66", "\165\163\x65\162\163", "\x67\162\157\x75\160\x73", "\x75\x73\145\162\x73\x5f\x67\x72\x6f\165\160\163", "\154\157\x67\x69\156\x5f\x61\164\x74\145\155\160\x74\x73", "\x75\163\145\x72\163\x5f\160\162\x6f\x66\x69\x6c\x65", "\x72\x61\x70\157\162\x5f\141\144\155\151\156\x5f\x73\x65\164\x74\151\156\147", "\x72\165\x6e\156\x69\x6e\x67\x5f\x74\145\170\164"];
        goto TvthP;
        Ja8NI:
        $json = file_get_contents("\x2e\57\x61\x73\163\145\164\x73\57\x61\160\x70\57\x64\142\57\x64\x61\x74\x61\x62\141\x73\x65\56\x6a\163\157\156");
        goto JEENO;
        Cft1C:
        $data["\163\155\x74\x5f\x61\143\x74\x69\166\x65"] = $this->dashboard->getSemesterActive();
        goto YpHwu;
        JEENO:
        $json = json_decode($json);
        goto zd7nQ;
        uyn3A:
        $this->load->view("\x5f\164\145\x6d\160\154\x61\x74\x65\x73\57\x64\x61\x73\150\142\x6f\141\162\x64\57\x5f\x68\x65\x61\x64\145\162", $data);
        goto y0fo7;
        gDoF1:
        foreach ($tables as $table) {
            goto R6sBh;
            qYBVd:
            goto D3KiQ;
            goto AsfAK;
            ZnnwS:
            LGMSm:
            goto dDLmi;
            FFIfL:
            if (!($nums == 0)) {
                goto vhZzh;
            }
            goto m3JFl;
            Au_Fw:
            if ($table == "\142\165\153\x75\x5f\x6e\x69\x6c\x61\151") {
                goto F9CnB;
            }
            goto w6KII;
            cpLpd:
            k1qkQ:
            goto xZ94_;
            ofmSi:
            if (in_array($table, $excludes)) {
                goto c28ao;
            }
            goto Au_Fw;
            R6sBh:
            if (isset($json[$table])) {
                goto av4ZU;
            }
            goto ofmSi;
            CgRuu:
            vhZzh:
            goto ZnnwS;
            w6KII:
            $this->dbforge->drop_table($table, true);
            goto WfJs1;
            xZ94_:
            D3KiQ:
            goto FiaWg;
            m3JFl:
            $this->dbforge->drop_table("\142\x75\x6b\165\x5f\156\x69\154\141\x69", true);
            goto CgRuu;
            dDLmi:
            c28ao:
            goto qYBVd;
            WfJs1:
            goto LGMSm;
            goto I91ue;
            AsfAK:
            av4ZU:
            goto HLmM7;
            FiaWg:
            qadEq:
            goto U1Eg5;
            I91ue:
            F9CnB:
            goto tf2uG;
            ZaPZv:
            $data_tables[$table_info["\153\x65\164"]][] = $table_info;
            goto cpLpd;
            HLmM7:
            if (in_array($table, $excludes)) {
                goto k1qkQ;
            }
            goto uLMqG;
            uLMqG:
            $name = str_replace("\137", "\x20", $table);
            goto oBCNi;
            tf2uG:
            $nums = $this->db->get("\x62\165\x6b\165\x5f\x6e\151\154\x61\x69")->num_rows();
            goto FFIfL;
            oBCNi:
            $table_info = ["\x6b\x65\x74" => $this->keterangan()[$table], "\x73\151\172\145" => $this->settings->rowSize($table), "\x74\141\142\154\145" => $table, "\x6e\x61\155\x65" => ucwords($name)];
            goto ZaPZv;
            U1Eg5:
        }
        goto gIYZ6;
        K1bpA:
    }
    public function hapusTable()
    {
        goto Hj0Jp;
        ZUUQH:
        $this->load->dbutil();
        goto G0pgO;
        voiwc:
        $this->output_json(["\x74\171\x70\145" => "\144\141\x74\141\142\141\163\x65", "\155\x65\x73\x73\x61\x67\x65" => "\104\x61\164\141\x62\x61\x73\x65\x20\x62\x65\162\x68\x61\x73\151\154\40\x64\151\x68\141\160\x75\x73"]);
        goto rplts;
        jq3b7:
        $backup = $this->dbutil->backup(array($prefs));
        goto m7QDp;
        m7QDp:
        $this->load->helper("\x66\x69\x6c\x65");
        goto pHGDA;
        coyWK:
        $this->db->truncate($table);
        goto voiwc;
        Hj0Jp:
        $table = $this->input->post("\x74\141\x62\x6c\145", true);
        goto ZUUQH;
        G0pgO:
        $prefs = ["\164\x61\142\154\145\x73" => array($table), "\x69\x67\156\x6f\162\x65" => array(), "\x66\x6f\x72\x6d\141\x74" => "\x74\x78\x74", "\146\151\x6c\x65\x6e\x61\x6d\145" => $table . "\56\163\x71\x6c", "\141\144\x64\x5f\144\x72\x6f\x70" => TRUE, "\141\x64\144\x5f\x69\156\x73\145\162\164" => TRUE, "\156\x65\x77\x6c\x69\x6e\145" => "\xa"];
        goto jq3b7;
        pHGDA:
        write_file("\x2e\57\142\141\143\153\x75\x70\x73\57\142\x61\x63\153\x75\x70\137" . $table . "\x5f" . date("\x59\x5f\x6d\137\x64\137\110\x5f\151\x5f\163") . "\56\163\161\154", $backup);
        goto coyWK;
        rplts:
    }
    public function truncate()
    {
        goto X67MQ;
        X67MQ:
        $tables = $this->db->list_tables();
        goto QCuCw;
        j470i:
        $this->output_json(["\163\164\141\x74\x75\x73" => true]);
        goto gBCvm;
        QCuCw:
        $this->settings->truncate($tables);
        goto j470i;
        gBCvm:
    }
    private function keterangan()
    {
        $data = ["\x61\x70\151\x5f\x73\x65\x74\x74\151\x6e\x67" => "\61", "\141\x70\151\x5f\x74\157\x6b\x65\x6e" => "\61", "\142\x75\153\165\x5f\151\x6e\144\x75\153" => "\61", "\142\165\154\x61\x6e" => "\60", "\143\x62\164\137\142\x61\x6e\x6b\137\x73\157\141\x6c" => "\62", "\x63\142\164\137\144\x75\162\141\x73\151\137\x73\x69\163\167\141" => "\62", "\x63\x62\x74\x5f\x6a\x61\144\x77\141\x6c" => "\62", "\x63\142\x74\x5f\152\141\x64\167\141\x6c\x5f\165\x6a\151\141\156" => "\x32", "\x63\142\164\x5f\152\x65\x6e\x69\x73" => "\x30", "\143\x62\x74\x5f\153\x65\x6c\x61\163\137\162\165\141\x6e\x67" => "\62", "\x63\142\164\x5f\153\157\160\137\x61\142\x73\x65\x6e\x73\x69" => "\61", "\x63\142\164\x5f\x6b\157\x70\x5f\x62\145\x72\x69\164\x61" => "\61", "\143\142\x74\x5f\x6b\x6f\x70\x5f\153\x61\x72\x74\165" => "\x31", "\143\x62\x74\137\x6e\x69\x6c\x61\151" => "\62", "\143\142\x74\x5f\x6e\157\x6d\x6f\162\137\160\x65\x73\x65\162\164\x61" => "\x32", "\143\x62\x74\x5f\x70\x65\156\x67\141\x77\141\x73" => "\x32", "\x63\142\164\137\162\x65\153\x61\160" => "\x32", "\x63\x62\164\137\x72\x65\153\x61\160\137\x6e\x69\154\x61\x69" => "\x32", "\x63\x62\164\137\x72\165\141\156\147" => "\61", "\143\x62\164\137\x73\x65\163\151" => "\61", "\x63\x62\164\x5f\x73\145\163\x69\x5f\163\x69\163\x77\141" => "\62", "\143\x62\x74\x5f\163\x6f\141\154" => "\x32", "\x63\142\164\x5f\x73\157\141\154\137\x73\151\x73\x77\141" => "\x32", "\143\x62\x74\137\164\x6f\153\145\156" => "\61", "\147\162\157\x75\160\x73" => "\60", "\x68\x61\x72\151" => "\60", "\152\141\142\141\x74\141\156\137\147\165\x72\165" => "\x31", "\x6b\x65\154\141\163\x5f\143\x61\x74\141\164\x61\156\x5f\155\x61\160\145\x6c" => "\x32", "\153\x65\x6c\x61\163\137\x63\141\x74\x61\164\x61\156\137\x77\141\154\x69" => "\62", "\x6b\x65\x6c\141\x73\137\x65\153\163\x74\162\141" => "\x31", "\153\x65\154\141\x73\137\152\x61\144\x77\x61\x6c\137\153\x62\155" => "\x32", "\x6b\x65\154\141\x73\x5f\x6a\x61\x64\x77\x61\x6c\137\155\141\x70\145\x6c" => "\x32", "\153\x65\x6c\x61\163\x5f\x6a\141\x64\167\141\x6c\137\x6d\141\164\x65\162\151" => "\x32", "\153\145\x6c\141\163\137\152\141\144\167\141\154\x5f\x74\x75\x67\x61\x73" => "\x32", "\153\x65\x6c\x61\163\137\x6d\x61\164\x65\x72\x69" => "\62", "\x6b\x65\154\x61\x73\137\163\151\x73\167\x61" => "\x32", "\153\x65\x6c\141\x73\x5f\163\x74\162\x75\x6b\x74\165\162" => "\x32", "\153\145\x6c\141\x73\137\x74\x75\x67\141\163" => "\x32", "\x6c\145\166\145\x6c\x5f\147\165\162\x75" => "\60", "\154\x65\166\145\154\137\x6b\145\x6c\141\163" => "\60", "\x6c\x6f\147" => "\62", "\154\x6f\x67\x69\x6e\137\x61\164\164\x65\x6d\x70\164\x73" => "\60", "\x6c\157\x67\x5f\155\x61\x74\x65\162\151" => "\62", "\x6c\157\x67\x5f\x74\165\x67\x61\x73" => "\x32", "\x6c\157\x67\137\165\152\x69\x61\x6e" => "\x32", "\x6d\141\163\164\145\162\x5f\x65\x6b\x73\x74\162\x61" => "\61", "\155\x61\163\164\x65\x72\137\x67\165\x72\x75" => "\x31", "\x6d\141\x73\x74\145\x72\x5f\150\141\x72\x69\137\145\x66\145\153\164\151\x66" => "\x31", "\155\x61\163\164\145\x72\x5f\x6a\165\x72\165\163\x61\156" => "\x31", "\x6d\141\x73\x74\145\162\137\153\145\x6c\141\x73" => "\x31", "\x6d\x61\163\x74\x65\x72\137\153\x65\x6c\157\155\x70\x6f\x6b\x5f\x6d\x61\160\x65\x6c" => "\61", "\155\141\163\164\x65\162\137\x6d\141\x70\x65\x6c" => "\61", "\155\x61\163\164\x65\162\137\163\x69\163\167\141" => "\61", "\x6d\141\163\x74\x65\x72\x5f\x73\x6d\x74" => "\60", "\155\141\x73\164\x65\x72\x5f\x74\160" => "\60", "\160\157\x73\x74" => "\62", "\x70\x6f\163\164\137\x63\157\x6d\x6d\145\x6e\164\x73" => "\x32", "\x70\x6f\x73\164\x5f\x72\145\x70\154\171" => "\x32", "\162\x61\x70\157\x72\137\x61\144\x6d\x69\156\x5f\163\x65\164\x74\x69\156\147" => "\x31", "\x72\141\160\x6f\162\x5f\x63\141\x74\x61\164\x61\156\137\167\x61\x6c\x69" => "\x31", "\x72\x61\x70\157\162\x5f\x64\141\x74\x61\x5f\143\x61\x74\x61\164\x61\156" => "\x31", "\162\x61\x70\157\162\137\144\141\x74\141\137\146\x69\163\x69\x6b" => "\x31", "\x72\x61\160\157\x72\137\144\141\164\141\137\163\151\x6b\141\x70" => "\x31", "\162\x61\x70\157\162\137\146\x69\x73\151\x6b" => "\x31", "\x72\x61\x70\x6f\x72\x5f\x6b\x69\153\x64" => "\x31", "\162\x61\x70\157\x72\137\x6b\x6b\155" => "\61", "\162\x61\160\157\162\137\156\141\x69\x6b" => "\61", "\x72\141\x70\x6f\162\137\156\x69\154\x61\151\137\141\x6b\x68\151\162" => "\61", "\x72\x61\160\157\x72\137\x6e\151\154\x61\151\137\x65\x6b\x73\164\162\141" => "\x31", "\162\x61\160\x6f\162\x5f\156\151\154\x61\x69\x5f\150\141\162\151\141\x6e" => "\x31", "\162\x61\x70\157\162\x5f\x6e\151\154\x61\151\137\x70\164\x73" => "\61", "\x72\141\x70\157\x72\x5f\x6e\x69\x6c\x61\151\x5f\163\x69\153\141\160" => "\61", "\162\141\160\x6f\162\x5f\x70\x72\x65\x73\164\141\163\151" => "\x31", "\x72\x75\156\x6e\x69\x6e\147\x5f\164\145\x78\164" => "\x31", "\163\145\x74\164\151\156\x67" => "\61", "\165\163\145\x72\163" => "\x30", "\165\163\145\162\x73\x5f\147\162\x6f\x75\160\x73" => "\60", "\x75\x73\x65\x72\x73\137\160\x72\x6f\x66\x69\x6c\x65" => "\x30"];
        return $data;
    }
}
