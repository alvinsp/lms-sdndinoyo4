<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\x53\x45\120\101\124\110") or exit("\116\x6f\x20\x64\151\162\145\143\164\x20\x73\x63\x72\151\x70\164\x20\x61\143\143\145\x73\163\40\x61\154\154\157\x77\x65\x64");
class Dbmanager extends CI_Controller
{
    public function __construct()
    {
        goto cHq9P;
        N_yq7:
        $this->load->helper("\144\151\x72\145\143\x74\x6f\162\171");
        goto hnyXm;
        BLhkz:
        show_error("\x48\x61\156\171\x61\40\101\144\x6d\151\x6e\x20\x79\x61\156\147\40\x62\157\154\145\150\x20\155\x65\x6e\x67\141\153\x73\x65\x73\40\150\141\x6c\141\155\141\156\40\151\x6e\151", 403, "\x41\x6b\x73\145\x73\x20\x64\x69\x6c\141\x72\141\156\147");
        goto GjmoX;
        FzTPP:
        FGeSW:
        goto FSqlL;
        svXTR:
        goto FGeSW;
        goto zEpS3;
        FOIh2:
        if ($this->ion_auth->is_admin()) {
            goto eKR89;
        }
        goto BLhkz;
        K9lC1:
        $this->load->model("\104\x61\163\x68\x62\157\141\x72\144\x5f\x6d\x6f\x64\x65\154", "\144\x61\x73\150\142\157\x61\162\144");
        goto N_yq7;
        cHq9P:
        parent::__construct();
        goto qpEsL;
        lwNNQ:
        $this->load->model("\x53\x65\164\164\151\x6e\x67\163\137\155\x6f\x64\145\x6c", "\x73\145\x74\164\151\x6e\147\163");
        goto K9lC1;
        FSqlL:
        $this->load->library("\165\x70\x6c\x6f\141\144");
        goto lwNNQ;
        zEpS3:
        HZTyH:
        goto H8i26;
        H8i26:
        redirect("\141\165\x74\150");
        goto FzTPP;
        qpEsL:
        if (!$this->ion_auth->logged_in()) {
            goto HZTyH;
        }
        goto FOIh2;
        GjmoX:
        eKR89:
        goto svXTR;
        hnyXm:
    }
    public function output_json($data, $encode = true)
    {
        goto W_Yho;
        nSzuU:
        wPTDU:
        goto omL2C;
        uI1iC:
        $data = json_encode($data);
        goto nSzuU;
        omL2C:
        $this->output->set_content_type("\141\160\x70\154\151\143\141\164\151\x6f\x6e\x2f\152\x73\x6f\x6e")->set_output($data);
        goto bNwn5;
        W_Yho:
        if (!$encode) {
            goto wPTDU;
        }
        goto uI1iC;
        bNwn5:
    }
    public function index()
    {
        goto zd8K_;
        KnLnN:
        $data["\x74\x61\142\x6c\x65\x73"] = $this->db->list_tables();
        goto VHvZp;
        MnI2D:
        rry0w:
        goto WX9ws;
        vXy_T:
        $data = ["\x75\163\145\162" => $user, "\152\165\144\x75\x6c" => "\x42\x61\143\x6b\x75\160\x20\144\x61\156\40\122\x65\x73\x74\x6f\162\x65", "\x73\165\x62\x6a\165\144\165\154" => "\102\141\143\153\165\x70\x20\123\145\155\165\x61\40\104\141\164\141\x62\141\163\145\x20\x64\141\156\40\x46\151\154\145", "\x70\x72\x6f\x66\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()];
        goto BDA0t;
        ni7dK:
        $this->load->view("\137\164\145\155\x70\x6c\141\x74\x65\x73\x2f\144\141\x73\x68\x62\157\141\x72\x64\57\x5f\146\x6f\x6f\x74\x65\x72");
        goto KJUYM;
        VHvZp:
        $this->load->view("\137\164\x65\x6d\x70\154\141\x74\145\163\x2f\x64\x61\x73\x68\142\x6f\141\162\x64\x2f\137\x68\145\x61\x64\x65\162", $data);
        goto AcHUk;
        h9d27:
        $data["\164\160\137\x61\143\164\151\x76\145"] = $this->dashboard->getTahunActive();
        goto u0Szk;
        u0Szk:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto l1kr6;
        AcHUk:
        $this->load->view("\x73\x65\x74\x74\x69\156\147\57\x64\x62");
        goto ni7dK;
        BDA0t:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto h9d27;
        qZq4A:
        foreach ($list as $key => $value) {
            goto C_2VF;
            v5EVa:
            $tgl = filemtime("\56\x2f\142\141\x63\x6b\x75\160\x73\57" . $value);
            goto FXOo_;
            C_2VF:
            $nfile = explode("\x2e", $value);
            goto bxG_c;
            HxzQr:
            $type = $nfile[1];
            goto v5EVa;
            i1oP2:
            $arrFile[$key] = ["\x74\171\x70\x65" => $type, "\x6e\141\x6d\141" => $nama, "\x74\147\x6c" => $tgl, "\x73\x69\x7a\x65" => $size, "\x73\162\x63" => $value];
            goto Y9FI8;
            FXOo_:
            $size = $this->formatSizeUnits(filesize("\56\57\x62\x61\143\x6b\x75\160\163\57" . $value));
            goto i1oP2;
            bxG_c:
            $nama = $nfile[0];
            goto HxzQr;
            Y9FI8:
            i8fsG:
            goto vs0on;
            vs0on:
        }
        goto MnI2D;
        YfVw3:
        $arrFile = [];
        goto qZq4A;
        WX9ws:
        $data["\x6c\x69\163\x74"] = $arrFile;
        goto KnLnN;
        S5U_3:
        $list = directory_map("\x2e\x2f\142\141\143\153\x75\x70\163\57");
        goto YfVw3;
        zd8K_:
        $user = $this->ion_auth->user()->row();
        goto vXy_T;
        l1kr6:
        $data["\x73\155\164\x5f\141\x63\164\x69\166\145"] = $this->dashboard->getSemesterActive();
        goto S5U_3;
        KJUYM:
    }
    public function manage()
    {
        goto oGhzq;
        bllQ5:
        $this->load->view("\137\164\x65\x6d\160\154\141\x74\x65\163\x2f\144\141\x73\x68\142\157\x61\162\x64\57\x5f\x66\157\x6f\x74\145\162");
        goto A7U2E;
        jYygI:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto htAeF;
        oGhzq:
        $user = $this->ion_auth->user()->row();
        goto fE9El;
        eVxGT:
        foreach ($tables as $table) {
            $data_tables[$table] = $this->settings->toJSON($table);
            VjNM3:
        }
        goto Y96Ve;
        yceIF:
        $this->load->view("\x5f\164\x65\x6d\x70\154\141\164\145\163\57\144\141\x73\150\142\x6f\x61\x72\144\x2f\x5f\150\x65\141\144\x65\x72", $data);
        goto VuCoJ;
        htAeF:
        $data["\x73\155\x74\137\141\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive();
        goto GJCaS;
        pnNNd:
        $tables = $this->db->list_tables();
        goto eVxGT;
        Y96Ve:
        vUXEy:
        goto wS0si;
        b_v3D:
        $data["\164\x70\137\141\x63\164\151\x76\x65"] = $this->dashboard->getTahunActive();
        goto jYygI;
        faBKo:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto b_v3D;
        VuCoJ:
        $this->load->view("\163\x65\x74\x74\151\156\147\x2f\x6d\x61\156\x61\147\x65");
        goto bllQ5;
        fE9El:
        $data = ["\x75\163\x65\162" => $user, "\152\165\x64\165\x6c" => "\x42\145\162\x73\151\x68\153\141\156\x20\x44\141\164\141", "\x73\165\142\x6a\x75\144\x75\154" => "\110\141\x70\x75\163\40\104\141\164\x61", "\x70\x72\157\x66\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\164\151\156\x67" => $this->dashboard->getSetting()];
        goto faBKo;
        wS0si:
        $data["\164\141\142\154\145\x73"] = $data_tables;
        goto yceIF;
        GJCaS:
        $data_tables = [];
        goto pnNNd;
        A7U2E:
    }
    public function truncate()
    {
        goto OcnQx;
        CDirY:
        $this->settings->truncate($tables);
        goto XMzbX;
        XMzbX:
        $this->output_json(["\163\x74\x61\x74\x75\x73" => true]);
        goto s2BE2;
        OcnQx:
        $tables = $this->db->list_tables();
        goto CDirY;
        s2BE2:
    }
    public function backupDb()
    {
        goto ECD2i;
        bNZ5e:
        $this->output_json(["\x74\x79\160\x65" => "\x64\x61\164\141\142\141\x73\145", "\x6d\x65\163\x73\x61\x67\145" => "\104\141\x74\141\x62\141\163\x65\x20\142\145\162\150\x61\163\x69\x6c\x20\144\151\x62\141\x63\153\x75\x70"]);
        goto rs0ah;
        hspx1:
        write_file("\x2e\57\142\x61\143\x6b\x75\160\163\57\x62\x61\143\x6b\x75\x70\x2d\144\142\x2d" . date("\131\x2d\155\55\144\x2d\110\x2d\x69\55\163") . "\x2e\163\161\154\x2e\172\x69\x70", $backup);
        goto bNZ5e;
        Zu_3u:
        $this->dbutil->optimize_database();
        goto MUHou;
        upP0r:
        $backup = $this->dbutil->backup($prefs);
        goto bSTVo;
        bSTVo:
        $this->load->helper("\146\x69\x6c\145");
        goto hspx1;
        MUHou:
        $prefs = ["\x74\141\x62\154\x65\x73" => $this->db->list_tables(), "\151\147\x6e\x6f\x72\x65" => array(), "\146\157\x72\155\141\x74" => "\172\x69\160", "\x66\151\x6c\x65\156\141\x6d\145" => "\142\x61\143\x6b\165\160\x2e\x73\x71\x6c", "\x61\x64\144\x5f\x64\x72\157\160" => TRUE, "\141\144\144\x5f\x69\156\163\x65\x72\164" => TRUE, "\x6e\145\x77\154\x69\156\145" => "\xa"];
        goto upP0r;
        ECD2i:
        $this->load->dbutil();
        goto Zu_3u;
        rs0ah:
    }
    public function backupData()
    {
        goto hB1Je;
        oMkEy:
        $this->zip->read_dir("\x75\x70\x6c\157\x61\x64\163");
        goto do3iX;
        do3iX:
        $this->zip->archive("\x2e\57\142\x61\143\153\x75\160\163\57\142\x61\x63\x6b\x75\160\x2d\146\151\154\x65\55" . date("\x59\x2d\x6d\x2d\x64\x2d\110\55\151\55\163") . "\56\172\x69\x70");
        goto Hx4Le;
        hB1Je:
        $this->load->library("\172\151\160");
        goto oMkEy;
        Hx4Le:
        $this->output_json(["\164\x79\160\145" => "\146\151\x6c\145", "\155\145\x73\163\141\147\145" => "\106\x69\x6c\145\40\x64\x61\x74\x61\x20\x62\145\x72\150\x61\x73\x69\154\40\x64\x69\142\141\x63\x6b\x75\160"]);
        goto OYost;
        OYost:
    }
    public function hapusBackup($src)
    {
        goto RogDp;
        h9IVR:
        $this->output_json(["\163\164\x61\164\165\163" => true, "\x6d\x65\x73\x73\x61\147\145" => "\x42\141\143\x6b\x75\x70\40\142\x65\x72\150\141\163\x69\x6c\x20\144\x69\x68\x61\x70\165\x73"]);
        goto Eb4Ag;
        KkN5d:
        LhwZL:
        goto h9IVR;
        RogDp:
        if (unlink("\x2e\x2f\x62\x61\143\x6b\165\x70\x73\x2f" . $src)) {
            goto LhwZL;
        }
        goto eYw0u;
        eYw0u:
        $this->output_json(["\163\164\141\x74\165\163" => false, "\155\x65\x73\163\141\147\x65" => "\107\x61\x67\141\154\x20\155\x65\156\x67\x68\x61\160\x75\x73\40\142\141\x63\153\165\x70"]);
        goto KdQ2P;
        KdQ2P:
        goto oWbb9;
        goto KkN5d;
        Eb4Ag:
        oWbb9:
        goto vg2cj;
        vg2cj:
    }
    function formatSizeUnits($bytes)
    {
        goto lF0oj;
        K8Rj_:
        goto nCTAI;
        goto uPZBw;
        lNXNw:
        FqPbM:
        goto E7fb6;
        E7fb6:
        $bytes = number_format($bytes / 1024, 2) . "\40\x4b\102";
        goto ZUHNU;
        IQukm:
        goto nCTAI;
        goto PAUn6;
        HBJTT:
        goto nCTAI;
        goto kzf30;
        PAUn6:
        AxlZ2:
        goto gteJH;
        qPoSj:
        nCTAI:
        goto WKAtR;
        kzf30:
        hThaR:
        goto DKPqo;
        X9cKW:
        if ($bytes == 1) {
            goto nxs4B;
        }
        goto slWaF;
        WKAtR:
        return $bytes;
        goto GNSHu;
        Tg77X:
        if ($bytes >= 1024) {
            goto FqPbM;
        }
        goto ESvCd;
        NMpDw:
        if ($bytes >= 1048576) {
            goto hThaR;
        }
        goto Tg77X;
        ESvCd:
        if ($bytes > 1) {
            goto HEEy1;
        }
        goto X9cKW;
        uPZBw:
        nxs4B:
        goto u71hD;
        LhqFN:
        $bytes = $bytes . "\40\142\171\164\x65\163";
        goto K8Rj_;
        Dj07r:
        HEEy1:
        goto LhqFN;
        lF0oj:
        if ($bytes >= 1073741824) {
            goto AxlZ2;
        }
        goto NMpDw;
        DKPqo:
        $bytes = number_format($bytes / 1048576, 2) . "\40\115\102";
        goto bGDO5;
        slWaF:
        $bytes = "\x30\40\x62\171\x74\x65\163";
        goto IQukm;
        bGDO5:
        goto nCTAI;
        goto lNXNw;
        gteJH:
        $bytes = number_format($bytes / 1073741824, 2) . "\40\x47\102";
        goto HBJTT;
        u71hD:
        $bytes = $bytes . "\40\142\171\x74\145";
        goto qPoSj;
        ZUHNU:
        goto nCTAI;
        goto Dj07r;
        GNSHu:
    }
}
