<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Kelas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function saveLog($table, $id_siswa, $id_kjm, $jamke, $mapel, $desc)
    {
        goto Y9J8p;
        eNc5q:
        return "\x65\x72\162\157\x72";
        goto QELMN;
        WIrHV:
        $agent = $this->agent->browser() . "\x20" . $this->agent->version();
        goto e8F6M;
        QELMN:
        Ff_7c:
        goto mjo_g;
        QwuIU:
        if ($this->agent->is_mobile()) {
            goto djf_4;
        }
        goto KIuF1;
        jYHX6:
        return $this->insertLog($table, $id_siswa, $id_kjm, $jamke, $mapel, $desc, $agent, $os, $ip);
        goto Tk0jz;
        KIuF1:
        $agent = "\x75\x6e\x6b\x6e\157\x77\156";
        goto jwohl;
        F0O9k:
        djf_4:
        goto UaFup;
        jwohl:
        goto kCSbP;
        goto JloVS;
        JloVS:
        oinyJ:
        goto WIrHV;
        bJKBF:
        $os = $this->agent->platform();
        goto jBRXI;
        Tk0jz:
        goto Ff_7c;
        goto P2PhC;
        jBRXI:
        $ip = $this->input->ip_address();
        goto jYHX6;
        w81mq:
        if ($agent == "\x75\x6e\153\156\x6f\x77\156") {
            goto zB9J3;
        }
        goto bJKBF;
        A1vwW:
        kCSbP:
        goto w81mq;
        UaFup:
        $agent = $this->agent->mobile();
        goto A1vwW;
        P2PhC:
        zB9J3:
        goto eNc5q;
        Y9J8p:
        if ($this->agent->is_browser()) {
            goto oinyJ;
        }
        goto QwuIU;
        e8F6M:
        goto kCSbP;
        goto F0O9k;
        mjo_g:
    }
    private function insertLog($table, $id_siswa, $id_kjm, $jamke, $mapel, $desc, $agent, $os, $ip)
    {
        goto WpI18;
        yWMzO:
        $insert = $this->db->insert($table, $data);
        goto Pny7Q;
        Pny7Q:
        return $insert;
        goto fi3sm;
        WpI18:
        $data = array("\x69\x64\x5f\154\157\147" => $id_siswa . $id_kjm, "\151\144\137\x73\x69\163\167\x61" => $id_siswa, "\x69\x64\x5f\x6d\x61\164\x65\x72\x69" => $id_kjm, "\151\x64\137\x6d\x61\x70\x65\154" => $mapel, "\x6a\141\x6d\x5f\x6b\x65" => $jamke, "\x6c\157\x67\x5f\x64\145\163\143" => $desc, "\x61\144\144\x72\145\x73\x73" => $ip, "\x61\147\145\x6e\x74" => $agent, "\x64\145\x76\151\143\145" => $os);
        goto yWMzO;
        fi3sm:
    }
    public function getKelasList($tp, $smt)
    {
        goto wwhyI;
        fzA3z:
        $this->db->join("\152\x61\x62\x61\164\x61\156\137\x67\165\162\x75\40\x66", "\x66\x2e\x69\144\x5f\153\x65\154\141\x73\75\141\56\151\144\x5f\153\x65\154\x61\163", "\154\145\x66\x74");
        goto w1hlm;
        x5h97:
        $this->db->join("\154\x65\166\145\x6c\x5f\153\x65\x6c\141\x73\x20\143", "\x63\x2e\x69\144\137\x6c\145\166\x65\x6c\75\x61\56\154\145\x76\x65\x6c\x5f\151\144", "\x6c\145\x66\164");
        goto fzA3z;
        X5hDM:
        $this->db->from("\155\141\163\x74\145\x72\x5f\153\145\154\x61\x73\40\141");
        goto rovL5;
        MwwWi:
        $this->db->join("\x6d\141\x73\x74\x65\x72\x5f\163\151\x73\167\x61\x20\145", "\x65\56\151\144\x5f\163\151\x73\167\x61\75\x61\x2e\163\151\163\167\x61\137\x69\144", "\x6c\x65\146\x74");
        goto cNVnw;
        mVTpl:
        $query = $this->db->get();
        goto Atp5H;
        cNVnw:
        $this->db->where("\x61\56\151\x64\137\x74\160", $tp);
        goto ZSOFx;
        Atp5H:
        return $query->result();
        goto gxAxW;
        rovL5:
        $this->db->join("\155\x61\163\x74\x65\x72\137\152\x75\162\165\163\x61\x6e\x20\142", "\142\x2e\151\144\x5f\x6a\x75\162\x75\x73\x61\156\x3d\x61\56\152\x75\x72\x75\163\x61\156\137\x69\x64", "\154\x65\x66\164");
        goto x5h97;
        qmNAK:
        $this->db->order_by("\x61\56\154\145\166\145\154\137\x69\x64", "\101\x53\103");
        goto IYlRz;
        ZSOFx:
        $this->db->where("\141\x2e\151\x64\x5f\x73\x6d\164", $smt);
        goto qmNAK;
        w1hlm:
        $this->db->join("\x6d\141\x73\164\145\x72\137\x67\x75\162\x75\40\144", "\144\x2e\x69\144\137\x67\165\162\x75\x3d\x66\x2e\151\144\137\147\165\162\165", "\154\145\x66\164");
        goto MwwWi;
        IYlRz:
        $this->db->order_by("\x61\56\156\x61\x6d\141\137\x6b\x65\x6c\141\x73", "\x41\x53\103");
        goto mVTpl;
        wwhyI:
        $this->db->select("\141\56\52\x2c\x20\142\x2e\x6e\141\x6d\141\x5f\152\x75\162\x75\163\141\156\54\40\x64\56\x6e\x61\155\x61\x5f\x67\x75\x72\165\x2c\x20\145\x2e\156\141\x6d\x61\54\40\x28\123\x45\114\105\103\124\x20\x43\117\125\116\x54\50\151\144\137\x6b\x65\154\141\x73\137\x73\x69\163\x77\141\51\40\106\122\x4f\115\40\153\x65\154\141\163\x5f\x73\x69\x73\167\141\40\153\40\127\x48\105\122\105\x20\x61\56\x69\144\x5f\x6b\x65\154\x61\x73\75\x6b\x2e\151\x64\x5f\x6b\x65\154\141\163\51\x20\x41\x53\40\152\155\154\x5f\x73\151\163\x77\x61");
        goto X5hDM;
        gxAxW:
    }
    public function getJmlSiswaKelas($id_kelas)
    {
        goto qGaH7;
        qGaH7:
        $this->db->from("\x6b\145\x6c\x61\163\x5f\163\151\x73\167\141");
        goto cWWU4;
        Y35oF:
        return $this->db->count_all_results();
        goto AyzTC;
        cWWU4:
        $this->db->where("\x69\144\x5f\153\145\154\x61\x73", $id_kelas);
        goto Y35oF;
        AyzTC:
    }
    public function get_all($limit, $offset)
    {
        goto ubQOR;
        pyQel:
        WvWDV:
        goto Eoyen;
        BAwHQ:
        goto WvWDV;
        goto uRM_H;
        uRM_H:
        Jz3Nq:
        goto ko2cP;
        FYIB2:
        return array();
        goto BAwHQ;
        dxGOU:
        if ($result->num_rows() > 0) {
            goto Jz3Nq;
        }
        goto FYIB2;
        ubQOR:
        $result = $this->db->get("\x6d\141\163\164\145\x72\x5f\x6b\x65\154\141\x73", $limit, $offset);
        goto dxGOU;
        ko2cP:
        return $result->result_array();
        goto pyQel;
        Eoyen:
    }
    public function getAllKelas()
    {
        goto Z6xKd;
        FGDOa:
        $this->db->from("\155\141\163\164\x65\x72\137\153\x65\154\141\163\40\x61");
        goto YXkvX;
        Z6xKd:
        $this->db->select("\141\56\151\x64\137\x6b\x65\154\141\x73\x2c\x20\141\56\151\x64\x5f\164\160\54\40\141\x2e\x69\x64\137\163\x6d\x74\54\x20\141\56\x6e\x61\x6d\x61\137\x6b\x65\x6c\141\x73\x2c\40\141\56\153\x6f\144\145\x5f\x6b\145\154\141\x73\x2c\40\141\56\154\x65\x76\x65\x6c\x5f\x69\x64\x2c\x20\142\56\x69\x64\137\x6a\x75\162\x75\163\x61\156\54\x20\x62\56\156\141\155\141\x5f\x6a\x75\162\x75\x73\x61\156\54\x20\142\x2e\153\157\x64\145\137\x6a\165\162\x75\x73\141\x6e\54\40\143\56\x69\144\137\x67\x75\162\165\x2c\x20\x63\56\156\141\x6d\141\x5f\147\x75\162\165");
        goto FGDOa;
        YXkvX:
        $this->db->join("\x6a\141\x62\x61\x74\x61\156\137\x67\165\162\165\40\146", "\146\56\151\x64\x5f\x6b\x65\x6c\141\163\x3d\141\x2e\x69\144\137\153\x65\x6c\x61\x73", "\x6c\x65\x66\x74");
        goto uidaW;
        uidaW:
        $this->db->join("\155\141\163\x74\145\x72\x5f\x6a\x75\x72\165\x73\x61\x6e\40\142", "\141\x2e\x6a\x75\162\x75\x73\141\156\x5f\x69\144\x3d\142\56\x69\144\137\152\165\162\165\163\x61\156", "\x6c\145\x66\x74");
        goto YtLq0;
        yyj2g:
        return $result;
        goto uWxaO;
        YtLq0:
        $this->db->join("\155\x61\163\164\x65\162\x5f\147\x75\x72\165\x20\x63", "\146\56\x69\x64\137\147\x75\162\x75\75\143\56\x69\144\137\x67\x75\162\x75", "\154\145\146\x74");
        goto ozqis;
        ozqis:
        $this->db->order_by("\x61\56\x6e\141\x6d\141\x5f\x6b\145\x6c\x61\x73");
        goto ndcXQ;
        ndcXQ:
        $result = $this->db->get()->result();
        goto yyj2g;
        uWxaO:
    }
    public function count_all()
    {
        $this->db->from("\155\141\163\164\x65\x72\x5f\x6b\145\154\x61\163");
        return $this->db->count_all_results();
    }
    public function get_search($limit, $offset)
    {
        goto OOl91;
        py51Z:
        goto Xe5Sw;
        goto WDwhq;
        QsOb7:
        $this->db->like("\156\141\x6d\141\x5f\x6b\x65\x6c\141\x73", $keyword);
        goto lFwGe;
        lFwGe:
        $this->db->like("\152\x75\x6d\x6c\141\150\137\x73\x69\163\167\141", $keyword);
        goto VlQee;
        WDwhq:
        YbDGm:
        goto glWHX;
        YJS7g:
        $result = $this->db->get("\155\x61\x73\x74\145\x72\137\x6b\145\154\x61\163");
        goto ap5tH;
        H11os:
        Xe5Sw:
        goto jwUVB;
        OOl91:
        $keyword = $this->session->userdata("\153\x65\x79\167\157\x72\x64");
        goto QsOb7;
        VlQee:
        $this->db->limit($limit, $offset);
        goto YJS7g;
        rBH0A:
        return array();
        goto py51Z;
        glWHX:
        return $result->result_array();
        goto H11os;
        ap5tH:
        if ($result->num_rows() > 0) {
            goto YbDGm;
        }
        goto rBH0A;
        jwUVB:
    }
    public function count_all_search()
    {
        goto XbxZr;
        QaLLh:
        $this->db->from("\x6d\141\163\x74\x65\x72\137\x6b\145\154\x61\163");
        goto orWDv;
        XbxZr:
        $keyword = $this->session->userdata("\153\x65\171\x77\157\162\x64");
        goto QaLLh;
        GcgD6:
        $this->db->like("\152\x75\x6d\x6c\141\150\137\x73\151\x73\167\x61", $keyword);
        goto aUIKM;
        aUIKM:
        return $this->db->count_all_results();
        goto Ts5fU;
        orWDv:
        $this->db->like("\x6e\x61\155\x61\x5f\153\145\154\141\x73", $keyword);
        goto GcgD6;
        Ts5fU:
    }
    public function get_one($id, $id_tp = null, $id_smt = null)
    {
        goto nPRJi;
        ywyfk:
        $this->db->join("\155\141\x73\x74\x65\162\137\163\x69\163\167\141\x20\163\x69", "\163\x69\x2e\151\144\x5f\x73\x69\163\x77\x61\x3d\x6b\56\x73\151\163\167\x61\x5f\x69\144", "\x6c\x65\146\x74");
        goto QOz3t;
        Qt1CJ:
        if (!($id_smt != null)) {
            goto o3RC0;
        }
        goto Fu4VV;
        RRWNt:
        o3RC0:
        goto luPGd;
        uh0Zx:
        $this->db->join("\x6c\x65\x76\145\x6c\137\153\x65\154\x61\163\40\x6c", "\154\x2e\151\144\137\x6c\145\x76\145\x6c\75\153\x2e\154\x65\x76\145\154\137\x69\144", "\154\x65\146\x74");
        goto y4g2x;
        F3ISd:
        if (!($id_tp != null)) {
            goto vXKfH;
        }
        goto dZ6J_;
        k5Vg4:
        $this->db->join("\155\141\x73\164\x65\162\137\147\x75\x72\x75\x20\147", "\147\x2e\x69\x64\137\x67\x75\x72\165\x3d\146\56\x69\x64\137\x67\x75\x72\165", "\154\x65\x66\x74");
        goto ywyfk;
        QOz3t:
        $this->db->order_by("\x6e\x61\155\x61\x5f\153\x65\x6c\141\x73", "\x41\123\x43");
        goto a0Dbi;
        Fu4VV:
        $this->db->where("\153\x2e\x69\x64\x5f\x73\155\164", $id_smt);
        goto RRWNt;
        Ws3Kl:
        $this->db->from("\155\141\163\164\145\162\x5f\153\145\154\141\163\40\x6b");
        goto Bjzgr;
        luPGd:
        return $this->db->get()->row();
        goto EdqTM;
        y4g2x:
        $this->db->join("\152\141\142\141\x74\x61\x6e\x5f\147\165\162\x75\x20\x66", "\x66\x2e\x69\x64\x5f\153\145\154\x61\163\x3d\153\56\151\144\x5f\153\x65\x6c\x61\x73", "\x6c\145\x66\164");
        goto k5Vg4;
        nPRJi:
        $this->db->select("\52");
        goto Ws3Kl;
        SWiCb:
        vXKfH:
        goto Qt1CJ;
        a0Dbi:
        $this->db->where("\153\x2e\x69\x64\137\x6b\x65\154\141\163", $id);
        goto F3ISd;
        Bjzgr:
        $this->db->join("\155\x61\x73\x74\x65\x72\x5f\x6a\165\162\165\x73\x61\x6e\40\x6a", "\152\x2e\x69\x64\137\152\165\x72\x75\x73\x61\x6e\75\x6b\x2e\152\x75\x72\x75\163\141\156\x5f\151\144", "\x6c\145\146\x74");
        goto uh0Zx;
        dZ6J_:
        $this->db->where("\x6b\56\x69\x64\137\164\160", $id_tp);
        goto SWiCb;
        EdqTM:
    }
    public function getKelasByNama($nama_kelas, $id_tp = null, $id_smt = null)
    {
        goto B6idW;
        FYVIQ:
        no5gf:
        goto IrFTB;
        d9XLc:
        if (!($id_smt != null)) {
            goto no5gf;
        }
        goto Owwq3;
        GR7Od:
        $this->db->order_by("\x6e\141\155\x61\137\153\145\154\141\163", "\x41\x53\x43");
        goto knOHm;
        IrFTB:
        return $this->db->get()->row();
        goto p17W1;
        OBvbI:
        q6Ty2:
        goto d9XLc;
        knOHm:
        $this->db->where("\x6b\x2e\156\x61\x6d\141\x5f\153\x65\154\141\x73", $nama_kelas);
        goto tJtig;
        FbHfo:
        $this->db->join("\x6d\x61\163\x74\x65\162\137\x6a\x75\162\165\x73\141\x6e\40\x6a", "\152\56\151\144\x5f\x6a\165\162\x75\163\141\x6e\x3d\x6b\x2e\x6a\x75\162\x75\163\x61\x6e\137\151\144", "\x6c\145\x66\x74");
        goto ElJqG;
        LNBU4:
        $this->db->from("\155\141\x73\x74\x65\x72\x5f\x6b\x65\x6c\141\x73\40\x6b");
        goto FbHfo;
        I6qxY:
        $this->db->join("\x6d\141\163\x74\x65\162\137\147\x75\162\165\x20\x67", "\147\x2e\151\144\137\147\x75\x72\165\75\x66\56\x69\x64\x5f\x67\x75\x72\165", "\x6c\145\146\164");
        goto fXBTx;
        ElJqG:
        $this->db->join("\154\145\x76\x65\154\x5f\153\145\x6c\141\163\x20\154", "\x6c\x2e\x69\144\137\x6c\145\166\145\154\75\x6b\x2e\x6c\x65\x76\145\x6c\x5f\x69\x64", "\x6c\x65\x66\164");
        goto zl6RY;
        Owwq3:
        $this->db->where("\153\56\151\144\x5f\163\155\x74", $id_smt);
        goto FYVIQ;
        B6idW:
        $this->db->select("\52");
        goto LNBU4;
        Ohon2:
        $this->db->where("\153\x2e\151\144\x5f\164\x70", $id_tp);
        goto OBvbI;
        fXBTx:
        $this->db->join("\x6d\141\163\164\145\x72\137\x73\x69\163\167\x61\40\163\x69", "\x73\151\56\151\x64\137\x73\x69\163\167\x61\x3d\x6b\56\163\151\x73\x77\x61\x5f\151\x64", "\x6c\145\x66\x74");
        goto GR7Od;
        tJtig:
        if (!($id_tp != null)) {
            goto q6Ty2;
        }
        goto Ohon2;
        zl6RY:
        $this->db->join("\152\x61\x62\141\x74\141\x6e\x5f\147\x75\x72\165\x20\146", "\146\x2e\x69\144\x5f\153\x65\154\141\163\x3d\x6b\56\151\144\137\x6b\145\154\x61\x73", "\x6c\145\x66\x74");
        goto I6qxY;
        p17W1:
    }
    public function getNamaKelasByNama($id_tp, $id_smt)
    {
        goto jz5hU;
        w_jar:
        $this->db->where("\151\x64\137\164\160", $id_tp);
        goto YVcxj;
        a3m68:
        dMg_i:
        goto ZpuOV;
        vH41N:
        if (!$result) {
            goto dMg_i;
        }
        goto SKBW4;
        GecxO:
        $this->db->from("\x6d\141\x73\164\x65\162\x5f\153\x65\x6c\x61\x73");
        goto w_jar;
        vwbqO:
        $result = $this->db->get()->result();
        goto mWc7M;
        SKBW4:
        foreach ($result as $row) {
            $ret[$row->nama_kelas] = $row->id_kelas;
            yEdzU:
        }
        goto VdBIo;
        jz5hU:
        $this->db->select("\151\x64\137\153\x65\154\x61\x73\54\40\156\141\x6d\x61\137\153\145\154\141\x73");
        goto GecxO;
        VdBIo:
        zgIoW:
        goto a3m68;
        ZpuOV:
        return $ret;
        goto IFy3D;
        mWc7M:
        $ret = [];
        goto vH41N;
        YVcxj:
        $this->db->where("\151\x64\x5f\163\x6d\164", $id_smt);
        goto vwbqO;
        IFy3D:
    }
    public function dummy()
    {
        $data = ["\x69\x64\137\x6b\x65\x6c\x61\x73" => '', "\156\x61\x6d\x61\x5f\153\145\154\x61\163" => '', "\x6b\x6f\144\145\137\153\145\154\x61\163" => '', "\152\x75\162\165\163\x61\156\x5f\x69\144" => '', "\x6c\145\166\145\x6c\x5f\151\144" => '', "\x67\x75\x72\x75\137\151\x64" => '', "\x73\x69\163\x77\x61\x5f\151\x64" => '', "\x6a\165\x6d\x6c\141\150\137\x73\151\x73\x77\141" => serialize([])];
        return $data;
    }
    public function dummyStruktur()
    {
        $data = array("\151\x64\137\x6b\145\x6c\141\163" => '', "\153\x65\x70\163\145\153" => '', "\x77\x61\153\x61" => '', "\x77\141\154\151" => '', "\x6b\x65\x74\x75\x61" => '', "\167\141\x6b\x69\154\137\x6b\145\164\165\x61" => '', "\x73\145\x6b\162\x65\164\141\x72\x69\x73\x5f\x31" => '', "\163\x65\153\x72\x65\164\141\162\151\x73\x5f\x32" => '', "\x62\x65\x6e\144\141\x68\141\162\141\137\x31" => '', "\142\x65\x6e\144\141\x68\141\x72\x61\137\x32" => '', "\x73\151\145\x5f\145\153\163\164\x72\x61\x6b\x75\x72\x69\153\165\154\x65\x72" => '', "\x73\x69\x65\x5f\x75\160\141\x63\141\162\x61" => '', "\163\x69\x65\137\x6f\154\x61\x68\162\x61\x67\x61" => '', "\x73\x69\x65\137\153\145\x61\147\141\155\x61\x61\156" => '', "\163\x69\145\137\153\145\x61\x6d\x61\x6e\141\x6e" => '', "\163\x69\145\137\153\145\164\x65\162\x74\151\142\141\x6e" => '', "\x73\x69\145\x5f\x6b\x65\x62\x65\x72\x73\151\x68\141\x6e" => '', "\163\x69\145\x5f\x6b\145\x69\156\144\x61\150\141\x6e" => '', "\163\151\x65\x5f\x6b\145\163\145\x68\x61\164\x61\156" => '', "\x73\x69\x65\x5f\x6b\x65\x6b\x65\154\x75\x61\162\x67\141\141\156" => '', "\163\x69\x65\x5f\150\x75\x6d\x61\163" => '');
        return $data;
    }
    public function destroy($id)
    {
        $this->db->where("\151\x64\x5f\153\x65\x6c\141\163", $id);
        $this->db->delete("\x6d\141\163\x74\x65\x72\x5f\153\145\x6c\x61\163");
    }
    public function get_jurusan()
    {
        goto job54;
        job54:
        $result = $this->db->get("\x6d\141\163\x74\145\x72\x5f\x6a\x75\x72\165\x73\x61\x6e")->result();
        goto QJSiF;
        guuiN:
        BbCqO:
        goto CxETl;
        CxETl:
        return $ret;
        goto Jdfc2;
        QJSiF:
        $ret[''] = "\x50\151\154\x69\150\40\112\165\x72\165\x73\141\x6e\x20\72";
        goto HKr8C;
        HKr8C:
        if (!$result) {
            goto BbCqO;
        }
        goto IJ8pG;
        IJ8pG:
        foreach ($result as $key => $row) {
            $ret[$row->id_jurusan] = $row->nama_jurusan;
            g7a8i:
        }
        goto VHxz8;
        VHxz8:
        T4Vfp:
        goto guuiN;
        Jdfc2:
    }
    public function getJurusanById($id)
    {
        goto VL_MJ;
        VL_MJ:
        $this->db->where("\x69\x64\x5f\x6a\x75\162\x75\x73\x61\x6e", $id);
        goto Ffmoc;
        Ffmoc:
        $result = $this->db->get("\x6d\x61\163\x74\x65\x72\137\x6a\x75\x72\165\163\141\x6e")->row();
        goto B8N3k;
        B8N3k:
        return $result;
        goto AmxLP;
        AmxLP:
    }
    public function get_level()
    {
        goto HPVAV;
        QBBmz:
        foreach ($result as $key => $row) {
            $ret[$row->id_level] = $row->level;
            KyHVJ:
        }
        goto rKzgS;
        ArwiW:
        return $ret;
        goto aSnpb;
        rKzgS:
        mDoP7:
        goto w6TDE;
        w6TDE:
        M3j4P:
        goto ArwiW;
        HPVAV:
        $result = $this->db->get("\x6c\145\166\x65\x6c\137\x6b\145\x6c\x61\163")->result();
        goto KvwvZ;
        KvwvZ:
        $ret[''] = "\120\x69\154\x69\150\x20\114\145\x76\145\154\40\72";
        goto hq1Fi;
        hq1Fi:
        if (!$result) {
            goto M3j4P;
        }
        goto QBBmz;
        aSnpb:
    }
    public function getLevel($jenjang)
    {
        goto KZqpU;
        IYwit:
        Xj3U3:
        goto L7S9h;
        L7S9h:
        $levels = ['' => "\120\x69\154\x69\x68\40\x4c\145\x76\145\154", "\x31\60" => "\61\60", "\61\61" => "\x31\x31", "\61\62" => "\61\x32"];
        goto w1wlV;
        fHaI8:
        goto bG5Ld;
        goto IYwit;
        ynH89:
        goto bG5Ld;
        goto Pq_QD;
        m1kMx:
        if ($jenjang == "\62") {
            goto KXaeb;
        }
        goto EGvI6;
        OQvSq:
        $levels = ['' => "\x50\151\154\151\x68\40\114\x65\x76\x65\154", "\x31" => "\61", "\62" => "\62", "\x33" => "\x33", "\64" => "\64", "\x35" => "\65", "\x36" => "\x36"];
        goto S42wk;
        S42wk:
        goto bG5Ld;
        goto IqzY5;
        NODHd:
        if ($jenjang == "\x31") {
            goto Hd_Mr;
        }
        goto m1kMx;
        E7Rjd:
        $levels = ['' => "\120\151\154\x69\x68\40\x4c\145\166\x65\x6c", "\67" => "\x37", "\x38" => "\x38", "\x39" => "\71"];
        goto fHaI8;
        EGvI6:
        if ($jenjang == "\x33") {
            goto Xj3U3;
        }
        goto ynH89;
        KZqpU:
        $levels = [];
        goto NODHd;
        Pq_QD:
        Hd_Mr:
        goto OQvSq;
        K6Poo:
        return $levels;
        goto sFnkE;
        w1wlV:
        bG5Ld:
        goto K6Poo;
        IqzY5:
        KXaeb:
        goto E7Rjd;
        sFnkE:
    }
    public function get_guru()
    {
        goto xkb3N;
        FePYl:
        return $ret;
        goto CHgjs;
        U9igj:
        foreach ($result as $key => $row) {
            $ret[$row->id_guru] = $row->nama_guru;
            eZmoJ:
        }
        goto y_YLd;
        Er1ZR:
        if (!$result) {
            goto Ab7O_;
        }
        goto U9igj;
        y_YLd:
        QcN9T:
        goto zlhuN;
        zlhuN:
        Ab7O_:
        goto FePYl;
        NfUXk:
        $ret[''] = "\x50\x69\x6c\151\150\x20\x47\x75\162\x75\40\72";
        goto Er1ZR;
        xkb3N:
        $result = $this->db->get("\x6d\x61\163\164\x65\x72\x5f\147\165\x72\x75")->result();
        goto NfUXk;
        CHgjs:
    }
    public function getWaliKelas($tp, $smt)
    {
        goto psjO0;
        MA_J3:
        $this->db->from("\x6a\x61\x62\x61\164\x61\156\137\147\x75\162\x75\x20\141");
        goto zKr1q;
        UOFlz:
        return $ret;
        goto xUxpW;
        duvHr:
        if (!$result) {
            goto aQR3Y;
        }
        goto PgPW5;
        PgPW5:
        foreach ($result as $key => $row) {
            $ret[$row->id_guru] = $row->nama_guru;
            F0Gqe:
        }
        goto f4oS3;
        psjO0:
        $this->db->select("\x61\x2e\151\x64\137\147\x75\162\165\54\x20\142\x2e\x6e\141\155\141\x5f\147\x75\x72\165");
        goto MA_J3;
        zKr1q:
        $this->db->join("\155\x61\163\164\x65\162\x5f\x67\x75\x72\x75\x20\x62", "\142\x2e\151\x64\137\147\165\x72\165\x3d\141\56\x69\144\137\x67\165\162\x75", "\154\145\x66\164");
        goto Ucrgk;
        ZZAVF:
        $ret[''] = "\120\x69\x6c\x69\x68\40\x47\x75\162\x75\40\x3a";
        goto duvHr;
        Ucrgk:
        $this->db->where("\151\x64\x5f\152\x61\142\141\x74\x61\156", "\64")->where("\151\x64\x5f\164\160", $tp)->where("\151\x64\137\163\155\x74", $smt);
        goto rgFy3;
        f4oS3:
        J1Fgm:
        goto KWv1e;
        rgFy3:
        $result = $this->db->get()->result();
        goto ZZAVF;
        KWv1e:
        aQR3Y:
        goto UOFlz;
        xUxpW:
    }
    public function getKelasEkskul($kelas, $tp, $smt)
    {
        goto ImWho;
        eZv92:
        $this->db->where("\151\x64\x5f\x73\x6d\x74", $smt);
        goto yOHJN;
        aOfhT:
        return $result;
        goto vngMn;
        ImWho:
        $this->db->select("\52");
        goto swlBR;
        swlBR:
        $this->db->from("\x6b\145\154\x61\163\x5f\145\153\163\x74\162\x61");
        goto nWFWx;
        nWFWx:
        $this->db->where("\x69\144\x5f\x6b\145\154\141\163", $kelas);
        goto ZvSu4;
        ZvSu4:
        $this->db->where("\151\144\x5f\164\160", $tp);
        goto eZv92;
        yOHJN:
        $result = $this->db->get()->result();
        goto aOfhT;
        vngMn:
    }
    public function getEkskulById($id)
    {
        goto zHuAI;
        fLWKQ:
        return $result;
        goto vMX5X;
        xA86y:
        $this->db->from("\x6d\x61\163\164\x65\x72\x5f\145\x6b\x73\164\162\x61");
        goto Rw4ge;
        zHuAI:
        $this->db->select("\x2a");
        goto xA86y;
        Rw4ge:
        $this->db->where("\151\144\137\145\153\163\x74\x72\141", $id);
        goto TuMAD;
        TuMAD:
        $result = $this->db->get()->row();
        goto fLWKQ;
        vMX5X:
    }
    public function getAllSiswa($tp, $smt)
    {
        goto GbX5I;
        ej1EO:
        $this->db->order_by("\141\x2e\156\x61\155\141", "\x41\123\103");
        goto zBDUk;
        zBDUk:
        $result = $this->db->get()->result();
        goto Y8qZj;
        W0E35:
        $this->db->from("\155\x61\163\164\x65\162\137\163\x69\163\167\x61\x20\141");
        goto HrI2V;
        HrI2V:
        $this->db->join("\153\x65\x6c\x61\163\x5f\x73\x69\x73\x77\x61\40\142", "\x62\x2e\x69\x64\x5f\x73\151\163\167\141\75\141\x2e\x69\144\x5f\x73\151\x73\167\x61\x20\x41\x4e\x44\x20\142\56\151\x64\x5f\x74\x70\75" . $tp . "\x20\x41\x4e\104\x20\142\x2e\x69\144\x5f\163\x6d\x74\x3d" . $smt, "\154\145\146\164");
        goto ERn1n;
        ERn1n:
        $this->db->join("\x62\165\153\x75\137\151\156\144\x75\153\40\143", "\143\56\x69\x64\x5f\163\151\x73\167\141\x3d\141\x2e\x69\x64\x5f\x73\151\163\167\141\x20\x41\116\104\x20\x63\x2e\163\164\x61\x74\x75\x73\75\61");
        goto ej1EO;
        Y8qZj:
        return $result;
        goto vUWOz;
        GbX5I:
        $this->db->select("\x61\x2e\151\x64\x5f\163\x69\163\167\x61\54\x20\141\x2e\x6e\141\155\x61\54\x20\x62\56\151\144\x5f\x6b\145\x6c\x61\163");
        goto W0E35;
        vUWOz:
    }
    public function get_siswa_kelas($id, $tp, $smt)
    {
        goto nma6y;
        Bl3BF:
        $this->db->join("\x62\x75\x6b\x75\x5f\x69\156\x64\x75\153\x20\151", "\x69\x2e\151\144\x5f\163\x69\x73\x77\x61\x3d\x61\56\151\144\137\x73\x69\x73\x77\x61\x20\101\116\104\x20\x69\x2e\163\164\x61\x74\x75\163\x3d\61");
        goto TNMIx;
        Bqpbp:
        $this->db->where("\x61\x2e\x69\x64\137\x74\x70", $tp);
        goto gvkKe;
        g3aAr:
        $result = $this->db->get()->result();
        goto f5Zjz;
        bdFuu:
        $this->db->from("\153\x65\154\141\x73\137\163\x69\163\x77\x61\40\141");
        goto ivUbt;
        f5Zjz:
        return $result;
        goto VXPXf;
        gvkKe:
        $this->db->where("\x61\56\x69\144\x5f\x73\155\164", $smt);
        goto Y4xqv;
        nma6y:
        $this->db->select("\141\x2e\x69\x64\x5f\163\x69\163\x77\141\x2c\40\x61\x2e\151\144\x5f\153\145\154\141\163\54\40\142\56\156\151\x73\54\x20\x62\x2e\156\x61\x6d\x61");
        goto bdFuu;
        TNMIx:
        $this->db->where_in("\x61\56\151\x64\137\153\145\154\x61\x73", $id);
        goto Bqpbp;
        Y4xqv:
        $this->db->order_by("\142\56\156\141\155\141", "\x41\x53\x43");
        goto g3aAr;
        ivUbt:
        $this->db->join("\x6d\141\x73\164\145\x72\137\163\151\163\167\x61\x20\x62", "\x62\56\x69\x64\x5f\x73\151\x73\x77\x61\x3d\x61\x2e\x69\x64\137\x73\151\x73\167\x61");
        goto Bl3BF;
        VXPXf:
    }
    public function get_status_siswa_kelas($id, $tp, $smt)
    {
        goto dh3QP;
        dh3QP:
        $this->db->select("\x61\x2e\x69\x64\137\x73\151\163\167\141\54\40\141\x2e\x69\144\137\x6b\x65\x6c\x61\x73");
        goto ZAy5o;
        gTUT5:
        V6NNH:
        goto uYvpE;
        cwIiQ:
        return $ret;
        goto Hlwjj;
        Jxcbu:
        if (!$result) {
            goto nQCYc;
        }
        goto I4p4e;
        ZrQ0B:
        $result = $this->db->get()->result();
        goto p4vho;
        j8eoF:
        $this->db->where_in("\x61\x2e\151\144\137\x6b\145\x6c\141\163", $id);
        goto Qf1GP;
        I4p4e:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa] = $row;
            zjYHb:
        }
        goto gTUT5;
        ZAy5o:
        $this->db->from("\153\145\154\x61\x73\x5f\163\151\x73\167\141\40\x61");
        goto j8eoF;
        KwKnm:
        $this->db->where("\141\56\151\144\x5f\x73\155\x74", $smt);
        goto ZrQ0B;
        Qf1GP:
        $this->db->where("\141\56\x69\x64\137\164\160", $tp);
        goto KwKnm;
        uYvpE:
        nQCYc:
        goto cwIiQ;
        p4vho:
        $ret = [];
        goto Jxcbu;
        Hlwjj:
    }
    public function getJadwalKbm($tp, $smt, $kelas)
    {
        goto JMCs4;
        JMCs4:
        $this->db->select("\52");
        goto SwGW6;
        deRkE:
        return $result;
        goto N28Yx;
        SwGW6:
        $this->db->from("\153\145\x6c\141\163\x5f\x6a\x61\144\x77\x61\154\137\153\x62\x6d");
        goto eMk3c;
        ReYam:
        $this->db->where("\x69\144\x5f\153\x65\154\x61\x73", $kelas);
        goto BZEgv;
        a2IH3:
        $this->db->where("\151\144\137\163\155\x74", $smt);
        goto ReYam;
        eMk3c:
        $this->db->where("\151\x64\137\x74\x70", $tp);
        goto a2IH3;
        BZEgv:
        $result = $this->db->get()->row();
        goto deRkE;
        N28Yx:
    }
    public function getJadwalKbmByArrKelas($tp, $smt, $arr_kelas)
    {
        goto cYv3x;
        bEm5X:
        $this->db->where("\x69\144\137\163\x6d\x74", $smt);
        goto vssrl;
        iS62R:
        foreach ($result as $key => $row) {
            goto Njw3i;
            Zq10k:
            goto v5EQH;
            goto SlHee;
            q8Se9:
            array_push($ret[$row->id_kelas], $row);
            goto e07Md;
            e07Md:
            v5EQH:
            goto u5YVm;
            SlHee:
            kVHIU:
            goto q8Se9;
            K5gWK:
            array_push($ret[$row->id_kelas], $row);
            goto Zq10k;
            Njw3i:
            if (isset($ret[$row->id_kelas])) {
                goto kVHIU;
            }
            goto WMeVo;
            u5YVm:
            xoQjd:
            goto yAhlR;
            WMeVo:
            $ret[$row->id_kelas] = [];
            goto K5gWK;
            yAhlR:
        }
        goto Bgk4D;
        bMIT2:
        P5rLA:
        goto BK37F;
        BK37F:
        return $ret;
        goto ffH7c;
        vssrl:
        $this->db->where_in("\151\x64\x5f\153\x65\x6c\x61\x73", $arr_kelas);
        goto o03HS;
        RD8mp:
        $this->db->where("\151\144\x5f\164\x70", $tp);
        goto bEm5X;
        cYv3x:
        $this->db->select("\52");
        goto kskrk;
        o03HS:
        $result = $this->db->get()->result();
        goto VFM7o;
        opcz0:
        if (!$result) {
            goto P5rLA;
        }
        goto iS62R;
        Bgk4D:
        NCrFT:
        goto bMIT2;
        kskrk:
        $this->db->from("\x6b\x65\x6c\141\x73\x5f\x6a\141\144\167\141\x6c\137\153\x62\155");
        goto RD8mp;
        VFM7o:
        $ret = [];
        goto opcz0;
        ffH7c:
    }
    public function getJadwalMapel($tp, $smt)
    {
        goto ark8C;
        hz3rA:
        return $ret;
        goto woSxI;
        f3vL8:
        $this->db->join("\155\x61\163\x74\x65\x72\137\x6d\x61\x70\145\x6c\40\142", "\x61\x2e\x69\144\137\155\141\x70\x65\x6c\x3d\142\56\151\x64\x5f\155\x61\x70\x65\154", "\154\145\x66\164");
        goto RVboh;
        VUHnG:
        $result = $this->db->get()->result();
        goto mqfDq;
        mGGXN:
        foreach ($result as $key => $row) {
            goto TNKAj;
            qqVpt:
            array_push($ret[$row->id_mapel][$row->id_kelas], $row);
            goto dHPbk;
            jYHkA:
            array_push($ret[$row->id_mapel][$row->id_kelas], $row);
            goto UEpzn;
            erBsQ:
            $ret[$row->id_mapel][$row->id_kelas] = [];
            goto jYHkA;
            xLfZx:
            tmq7s:
            goto qqVpt;
            pf3eC:
            L59PZ:
            goto VCotV;
            UEpzn:
            goto BlYgi;
            goto xLfZx;
            dHPbk:
            BlYgi:
            goto eC9VU;
            TNKAj:
            if (!($row->id_mapel != '')) {
                goto WHonW;
            }
            goto i5beh;
            eC9VU:
            WHonW:
            goto pf3eC;
            i5beh:
            if (isset($ret[$row->id_mapel][$row->id_kelas])) {
                goto tmq7s;
            }
            goto erBsQ;
            VCotV:
        }
        goto kaCkL;
        kaCkL:
        ZgHFc:
        goto XF_hR;
        RVboh:
        $this->db->where("\151\144\137\x74\160", $tp);
        goto neQ2I;
        XF_hR:
        HAXrr:
        goto hz3rA;
        neQ2I:
        $this->db->where("\151\x64\x5f\x73\155\164", $smt);
        goto VUHnG;
        ark8C:
        $this->db->select("\52");
        goto UfSM5;
        UfSM5:
        $this->db->from("\x6b\x65\x6c\x61\x73\x5f\152\x61\144\167\141\x6c\137\x6d\141\160\x65\x6c\40\x61");
        goto f3vL8;
        WuRmn:
        if (!$result) {
            goto HAXrr;
        }
        goto mGGXN;
        mqfDq:
        $ret = [];
        goto WuRmn;
        woSxI:
    }
    public function getJadwalMapelGroupHari($tp, $smt)
    {
        goto RnPXU;
        sKoiv:
        $this->db->from("\x6b\145\x6c\x61\163\x5f\152\141\144\x77\x61\x6c\137\x6d\141\160\x65\154");
        goto g_FBo;
        qFYLg:
        $result = $this->db->get()->result();
        goto tUILz;
        qsFuk:
        $this->db->group_by("\151\x64\x5f\x68\141\x72\151");
        goto qFYLg;
        tUILz:
        return $result;
        goto nkjTp;
        RnPXU:
        $this->db->select("\x69\x64\137\x74\160\x2c\40\151\x64\137\x73\x6d\x74\x2c\40\x4d\x41\x58\x28\151\144\137\x68\141\x72\x69\51\40\141\x73\40\151\144\x5f\150\x61\162\151\x2c\x20\x4d\101\x58\x28\152\x61\155\x5f\x6b\145\x29\x20\141\x73\40\x6a\x61\x6d\137\x6b\x65");
        goto sKoiv;
        g_FBo:
        $this->db->where("\151\144\x5f\x74\160", $tp, FALSE);
        goto QZ_I0;
        QZ_I0:
        $this->db->where("\x69\x64\x5f\163\155\164", $smt, FALSE);
        goto qsFuk;
        nkjTp:
    }
    public function getJadwalMapelGroupJam($tp, $smt, $kelas)
    {
        goto rmAhN;
        gKb9y:
        $this->db->from("\x6b\x65\154\141\163\x5f\x6a\x61\144\x77\x61\x6c\x5f\155\141\160\145\x6c");
        goto MwOjL;
        MwOjL:
        $this->db->where("\x69\x64\137\x74\x70", $tp, FALSE);
        goto V6PvZ;
        V6PvZ:
        $this->db->where("\x69\x64\137\163\x6d\x74", $smt, FALSE);
        goto xZUyv;
        P5jmh:
        $result = $this->db->get()->result();
        goto zihbd;
        xZUyv:
        $this->db->where("\x69\144\x5f\x6b\x65\x6c\x61\x73", $kelas, FALSE);
        goto IbmQQ;
        rmAhN:
        $this->db->select("\x69\144\x5f\x74\x70\x2c\40\x69\x64\x5f\x73\x6d\x74\x2c\40\115\x41\130\x28\151\144\x5f\x68\x61\x72\151\51\40\141\x73\40\151\144\x5f\150\141\x72\x69\54\40\x69\144\x5f\x6b\x65\x6c\141\163\54\x20\x4d\x41\x58\50\x6a\x61\155\137\153\145\x29\40\x61\x73\x20\152\x61\x6d\137\x6b\x65");
        goto gKb9y;
        IbmQQ:
        $this->db->group_by("\x6a\x61\155\137\153\145");
        goto P5jmh;
        zihbd:
        return $result;
        goto Wzjv_;
        Wzjv_:
    }
    public function getJadwalMapelByJam($hari)
    {
        goto WodEE;
        uZrEX:
        $this->db->from("\153\145\154\x61\163\137\x6a\x61\x64\167\x61\154\137\x6d\141\160\145\154\x20\x61");
        goto G7SRp;
        q1ehC:
        $this->db->where("\151\144\137\x68\x61\x72\151", $hari, FALSE);
        goto qBI3a;
        G7SRp:
        $this->db->join("\155\x61\163\x74\145\162\137\x6d\x61\x70\145\154\x20\142", "\x61\56\x69\144\137\x6d\x61\160\x65\154\x3d\142\56\151\144\137\155\141\160\x65\154", "\154\x65\x66\x74");
        goto q1ehC;
        qBI3a:
        $result = $this->db->get()->result();
        goto YR51l;
        WodEE:
        $this->db->select("\52");
        goto uZrEX;
        YR51l:
        return $result;
        goto prfhK;
        prfhK:
    }
    public function getJadwalMapelByMapel($kelas, $mapel = null, $tp, $smt)
    {
        goto zQ2br;
        fnqjR:
        $this->db->from("\x6b\145\154\141\163\x5f\152\x61\x64\x77\x61\x6c\x5f\x6d\141\x70\x65\x6c\x20\x61");
        goto QIEmz;
        XLwsS:
        $this->db->where_in("\141\56\x69\144\x5f\153\x65\x6c\141\163", $kelas);
        goto BBIwN;
        v1PyS:
        return $result;
        goto ZFFWc;
        QIEmz:
        $this->db->join("\155\141\163\164\x65\x72\137\155\141\160\145\154\x20\x62", "\141\56\x69\144\137\x6d\141\160\x65\x6c\75\x62\56\x69\144\x5f\155\141\x70\145\154", "\154\x65\146\x74");
        goto vuadJ;
        BBIwN:
        $result = $this->db->get()->result();
        goto v1PyS;
        GMwOo:
        $this->db->where("\x61\x2e\151\144\x5f\x73\155\x74", $smt, FALSE);
        goto NDqiv;
        O4GEP:
        ImD2L:
        goto XLwsS;
        vuadJ:
        $this->db->where("\x61\56\151\x64\x5f\x74\160", $tp, FALSE);
        goto GMwOo;
        zQ2br:
        $this->db->select("\x2a");
        goto fnqjR;
        NDqiv:
        if (!($mapel != null)) {
            goto ImD2L;
        }
        goto ly_ip;
        ly_ip:
        $this->db->where("\x61\56\151\144\137\155\x61\160\145\x6c", $mapel, FALSE);
        goto O4GEP;
        ZFFWc:
    }
    public function getJadwalTerisi($table, $kelas, $mapel, $tp, $smt)
    {
        goto SHkq7;
        vH8rw:
        $this->db->where("\151\144\x5f\x74\x70", $tp, FALSE);
        goto to6G3;
        to6G3:
        $this->db->where("\151\x64\x5f\163\x6d\x74", $smt, FALSE);
        goto klw28;
        SHkq7:
        $this->db->select("\x2a");
        goto Lfvcw;
        gxqhf:
        return $result;
        goto Q4eJi;
        fKbd7:
        $this->db->where_in("\x69\x64\x5f\153\x65\154\x61\163", $kelas);
        goto A_cEj;
        A_cEj:
        $result = $this->db->get()->result();
        goto gxqhf;
        Lfvcw:
        $this->db->from($table);
        goto vH8rw;
        klw28:
        $this->db->where("\151\144\137\x6d\141\x70\x65\154", $mapel, FALSE);
        goto fKbd7;
        Q4eJi:
    }
    public function getJadwalMapelByHari($tp, $smt, $jam, $kelas)
    {
        goto hWgZw;
        hWgZw:
        $this->db->select("\x2a");
        goto laAPL;
        n1V2_:
        $this->db->join("\155\x61\163\164\x65\162\137\x6d\141\x70\x65\x6c\40\x62", "\x61\56\151\144\137\x6d\141\x70\145\x6c\x3d\x62\x2e\x69\x64\137\x6d\141\160\x65\154", "\x6c\x65\146\x74");
        goto U1X9v;
        AG00y:
        $result = $this->db->get()->result();
        goto F6Xgc;
        fP8NK:
        $this->db->where("\x69\x64\137\164\160", $tp, FALSE);
        goto Orubo;
        F6Xgc:
        return $result;
        goto pDBPo;
        Orubo:
        $this->db->where("\x69\x64\137\163\155\x74", $smt, FALSE);
        goto BfAa2;
        BfAa2:
        $this->db->where("\151\x64\137\153\x65\x6c\x61\x73", $kelas, FALSE);
        goto AG00y;
        U1X9v:
        $this->db->where("\x6a\141\155\x5f\x6b\145", $jam, FALSE);
        goto fP8NK;
        laAPL:
        $this->db->from("\x6b\145\x6c\141\x73\137\x6a\141\x64\167\141\x6c\137\x6d\x61\160\x65\x6c\x20\x61");
        goto n1V2_;
        pDBPo:
    }
    public function getDummyJadwalMapel($tp, $smt, $jam, $kelas)
    {
        goto c3OQK;
        RrjvS:
        array_push($inputData, $data);
        goto AMPWt;
        c3OQK:
        $inputData = [];
        goto Ep9lq;
        apHk7:
        if (!($i < 7)) {
            goto HeFDO;
        }
        goto Hd10n;
        okvam:
        $i++;
        goto SgWDG;
        SgWDG:
        goto nVGTF;
        goto V5PhP;
        V5PhP:
        HeFDO:
        goto VvnsI;
        Tmk9_:
        nVGTF:
        goto apHk7;
        Hd10n:
        $data = json_decode(json_encode(["\x69\144\x5f\x74\x70" => $tp, "\x69\144\x5f\x73\x6d\x74" => $smt, "\151\144\137\x68\x61\x72\x69" => $i, "\x6a\x61\x6d\137\153\x65" => $jam, "\x69\x64\x5f\x6b\x65\154\x61\163" => $kelas, "\x69\144\x5f\155\x61\x70\x65\154" => "\60", "\x6e\141\155\141\137\155\141\160\x65\154" => '', "\153\157\144\145" => '']));
        goto RrjvS;
        AMPWt:
        yEjvx:
        goto okvam;
        Ep9lq:
        $i = 1;
        goto Tmk9_;
        VvnsI:
        return $inputData;
        goto FvnH7;
        FvnH7:
    }
    public function getDummyMateri()
    {
        $data = array("\151\144\137\x6d\141\x74\145\x72\x69" => '', "\153\x6f\144\x65\137\x6d\141\164\x65\162\x69" => '', "\x69\144\137\147\x75\x72\x75" => '', "\151\x64\137\x6d\x61\160\x65\x6c" => '', "\151\144\x5f\x6a\x61\x64\x77\141\154" => '', "\x6d\x61\x74\x65\162\x69\137\x6b\x65\154\x61\163" => serialize([]), "\x6b\145\x6c\141\x73\137\147\x75\162\x75" => serialize([]), "\152\165\x64\165\154\137\155\x61\164\145\162\x69" => '', "\151\x73\151\x5f\x6d\x61\164\x65\162\151" => '', "\x66\x69\154\145" => '', "\154\151\156\153\137\x66\x69\x6c\x65" => '', "\x74\147\154\x5f\x6d\x75\154\141\x69" => '', "\x63\162\145\141\164\145\144\x5f\x6f\x6e" => '', "\x75\x70\x64\141\164\145\144\137\157\x6e" => '');
        return $data;
    }
    public function getTableMateriKelas($id_guru = null)
    {
        goto TJU1r;
        TJU1r:
        $this->datatables->select("\52");
        goto TvPp6;
        KKQPM:
        $this->datatables->join("\x6b\145\x6c\x61\163\x5f\x6a\x61\144\167\141\x6c\x5f\x6d\141\160\x65\x6c\x20\x64", "\x61\x2e\x69\x64\x5f\155\141\x70\145\x6c\x3d\144\56\x69\x64\x5f\x6d\141\x70\x65\x6c");
        goto kItgg;
        TvPp6:
        $this->datatables->from("\x6b\x65\154\141\163\x5f\x6d\x61\164\x65\162\151\40\141");
        goto Cqg0j;
        IbtF2:
        $this->datatables->join("\152\141\x62\x61\x74\x61\156\x5f\x67\x75\162\x75\40\x63", "\x61\56\x69\x64\x5f\x67\x75\162\165\75\x63\56\x69\x64\x5f\x67\x75\x72\165");
        goto KKQPM;
        Cqg0j:
        $this->datatables->join("\155\x61\x73\x74\x65\x72\137\x67\165\x72\165\x20\142", "\141\x2e\x69\x64\137\147\x75\x72\x75\75\142\56\151\144\137\147\x75\x72\x75");
        goto IbtF2;
        kItgg:
        return $this->datatables->generate();
        goto ekjLQ;
        ekjLQ:
    }
    public function getMateriKelas($id_guru, $tp, $smt)
    {
        goto FDclL;
        ALVQt:
        return $result;
        goto GaiwI;
        PVM44:
        $this->db->order_by("\x61\x2e\x63\162\x65\x61\x74\x65\144\137\157\x6e", "\x44\105\123\x43");
        goto tojpC;
        tojpC:
        $result = $this->db->get()->result();
        goto ALVQt;
        GHHQ2:
        $this->db->where("\141\56\x69\144\137\x67\165\x72\165", $id_guru);
        goto VHJZr;
        C5PT3:
        $this->db->from("\153\x65\154\141\x73\x5f\x6d\141\164\x65\162\x69\40\x61");
        goto zlr75;
        FDclL:
        $this->db->select("\141\x2e\151\144\137\x6d\x61\x74\x65\162\151\54\x20\x61\56\x6b\x6f\144\145\x5f\x6d\x61\164\x65\162\151\54\40\141\56\153\x6f\144\x65\137\155\141\160\x65\x6c\54\40\x61\x2e\x6a\x75\x64\x75\x6c\137\x6d\141\x74\x65\162\x69\x2c\x20\x61\x2e\x6d\141\x74\145\162\151\137\153\x65\x6c\141\163\x2c\x20\x66\56\156\x61\155\x61\x5f\163\155\x74\x2c\40\x65\x2e\x74\x61\150\x75\x6e\54" . "\40\x61\x2e\x69\144\137\x6d\x61\160\145\154\x2c\40\x61\56\143\x72\145\141\164\x65\x64\x5f\157\156\54\40\x61\x2e\x75\160\x64\141\164\145\x64\137\157\x6e\x2c\40\141\56\146\x69\x6c\145\x2c\x20\x61\56\x73\x74\141\164\x75\x73\x2c\40\x61\56\151\144\137\164\x70\x2c\x20\141\56\151\144\x5f\x73\155\x74\54\x20\x62\x2e\x6e\x61\x6d\x61\137\x67\165\x72\165\x2c\40\144\x2e\x6e\141\x6d\x61\x5f\155\x61\160\145\154\54\x20\144\x2e\x6b\157\x64\x65");
        goto C5PT3;
        EnpbE:
        $this->db->join("\x6d\141\x73\164\145\162\x5f\x74\x70\40\145", "\141\x2e\x69\144\137\x74\x70\x3d\x65\56\151\144\137\x74\x70");
        goto kGtGm;
        dgpFy:
        $this->db->join("\155\141\163\164\x65\162\137\155\141\160\145\x6c\x20\x64", "\141\x2e\151\144\x5f\155\x61\x70\145\x6c\75\x64\56\x69\144\137\x6d\141\160\x65\154", "\x6c\145\146\x74");
        goto EnpbE;
        t5FGZ:
        $this->db->where("\x61\56\151\144\137\x73\155\x74", $smt);
        goto PVM44;
        zlr75:
        $this->db->join("\155\141\163\164\x65\162\137\x67\165\162\x75\x20\x62", "\x61\56\x69\144\x5f\147\165\162\x75\x3d\142\x2e\x69\144\137\147\x75\x72\x75");
        goto dgpFy;
        VHJZr:
        $this->db->where("\x61\x2e\151\144\137\164\160", $tp);
        goto t5FGZ;
        kGtGm:
        $this->db->join("\155\x61\x73\164\145\x72\x5f\163\x6d\x74\40\x66", "\141\x2e\x69\x64\x5f\163\x6d\x74\75\146\56\151\144\x5f\x73\155\x74");
        goto GHHQ2;
        GaiwI:
    }
    public function getAllMateriByKelas($tp, $smt)
    {
        goto Wbq6j;
        VZGV9:
        $this->db->from("\x6b\x65\154\141\x73\x5f\x6d\141\x74\145\x72\151\40\141");
        goto kKvfp;
        wNpLP:
        $this->db->where("\141\x2e\163\164\141\164\x75\x73", "\61");
        goto L6orP;
        L6orP:
        $this->db->where("\x61\x2e\x69\144\x5f\164\x70", $tp);
        goto M0cWo;
        kKvfp:
        $this->db->join("\x6d\141\163\164\145\x72\137\x67\165\162\165\x20\142", "\x61\x2e\x69\x64\x5f\147\165\x72\165\x3d\142\56\151\x64\x5f\147\165\162\x75");
        goto KcZeD;
        weSzY:
        ITlHw:
        goto RkfhX;
        oFcYo:
        foreach ($result as $key => $row) {
            $ret[$row->id_mapel][$row->jenis][$row->id_materi] = $row->kode_materi;
            VCKep:
        }
        goto Wu9Zt;
        Wu9Zt:
        HgiB5:
        goto weSzY;
        vnPFj:
        $this->db->order_by("\x61\x2e\x63\x72\x65\141\164\145\144\x5f\x6f\156", "\104\x45\x53\103");
        goto n_b_A;
        RkfhX:
        return $ret;
        goto d878q;
        Qbgb7:
        if (!$result) {
            goto ITlHw;
        }
        goto oFcYo;
        KcZeD:
        $this->db->join("\155\141\163\x74\145\162\137\x6d\141\160\145\x6c\x20\143", "\x61\x2e\151\x64\137\155\141\160\x65\154\x3d\143\x2e\x69\144\x5f\155\141\x70\145\x6c", "\x6c\x65\146\x74");
        goto wNpLP;
        n_b_A:
        $result = $this->db->get()->result();
        goto uSveY;
        Wbq6j:
        $this->db->select("\x61\x2e\x6a\x65\156\151\x73\54\x20\x61\x2e\151\x64\x5f\x6d\141\x70\145\x6c\x2c\40\x61\x2e\x69\144\137\x6d\141\x74\145\162\x69\x2c\x20\x61\56\153\x6f\144\145\x5f\155\141\x74\145\x72\151");
        goto VZGV9;
        M0cWo:
        $this->db->where("\x61\56\x69\x64\137\x73\x6d\164", $smt);
        goto vnPFj;
        uSveY:
        $ret = [];
        goto Qbgb7;
        d878q:
    }
    public function getAllJadwalMateriByKelas($tp, $smt)
    {
        goto u9eEk;
        czBsP:
        $this->db->join("\x6d\141\163\164\145\162\x5f\x6d\141\x70\x65\x6c\x20\144", "\x61\x2e\151\x64\x5f\x6d\x61\160\145\154\x3d\x64\56\x69\144\x5f\x6d\141\x70\145\154", "\154\145\146\164");
        goto wD3Y0;
        VrT1a:
        $this->db->where("\141\56\x69\144\137\x73\x6d\x74", $smt);
        goto lOl7D;
        ZHHPA:
        $result = $this->db->get()->result();
        goto sr7XA;
        KYODs:
        if (!$result) {
            goto XEXMP;
        }
        goto OZWts;
        OZWts:
        foreach ($result as $key => $row) {
            $ret[$row->jenis][$row->id_kjm] = $row;
            mjO4N:
        }
        goto b8uZR;
        wD3Y0:
        $this->db->where("\141\56\151\144\137\x74\x70", $tp);
        goto VrT1a;
        b8uZR:
        YOXXF:
        goto s0IbF;
        s0IbF:
        XEXMP:
        goto SQC7f;
        sr7XA:
        $ret = [];
        goto KYODs;
        SQC7f:
        return $ret;
        goto B2XdI;
        Bqzsz:
        $this->db->join("\x6d\141\163\x74\145\x72\137\x67\x75\x72\165\x20\x62", "\143\56\151\144\137\147\x75\162\165\75\142\x2e\x69\144\137\147\x75\x72\165");
        goto czBsP;
        TJYPG:
        $this->db->from("\x6b\x65\154\x61\163\137\152\x61\144\167\x61\154\137\x6d\141\x74\x65\162\151\40\141");
        goto hKxCI;
        u9eEk:
        $this->db->select("\x61\56\x6a\x65\x6e\151\x73\54\40\x61\x2e\x69\144\x5f\155\141\x74\145\x72\151\x2c\40\141\x2e\x69\x64\137\x74\160\x2c\x20\141\56\x69\x64\x5f\x73\x6d\x74\x2c\x20\141\x2e\151\144\137\x6d\x61\160\x65\154\54\x20\x61\x2e\x69\144\137\x6b\152\x6d\x2c\x20\x61\56\151\x64\137\x6b\x65\154\x61\x73\54\40\x61\56\x6a\x61\144\x77\141\x6c\x5f\155\141\164\x65\162\151\54" . "\x20\x63\x2e\x6b\x6f\x64\x65\137\155\x61\164\x65\x72\151\54\x20\143\x2e\x6a\165\144\165\154\x5f\155\141\x74\145\x72\x69\x2c\x20\x63\x2e\143\x72\145\141\164\x65\144\x5f\157\x6e\54\x20\x63\x2e\165\160\x64\141\x74\145\144\137\157\156\54\40\143\x2e\x66\151\x6c\145\x2c\x20\x63\56\163\x74\x61\164\165\x73\54" . "\40\142\x2e\156\141\x6d\x61\x5f\x67\165\162\165\x2c\x20\144\56\156\x61\155\x61\137\155\141\x70\x65\154\x2c\40\144\56\x6b\x6f\144\145");
        goto TJYPG;
        lOl7D:
        $this->db->order_by("\x63\56\x63\162\x65\141\x74\x65\x64\137\x6f\156", "\104\x45\x53\103");
        goto ZHHPA;
        hKxCI:
        $this->db->join("\153\x65\154\141\x73\137\x6d\141\x74\145\162\151\x20\143", "\x61\56\151\144\137\x6d\x61\x74\x65\162\x69\75\x63\56\151\144\x5f\x6d\x61\x74\x65\162\151", "\154\x65\146\x74");
        goto Bqzsz;
        B2XdI:
    }
    public function getAllMateriKelas($id_guru, $jenis)
    {
        goto iBDZl;
        mzwyl:
        $this->db->order_by("\x61\56\143\x72\x65\x61\164\x65\144\137\157\x6e", "\x44\105\123\103");
        goto cM2DX;
        r3EWa:
        return $result;
        goto TkVCA;
        cM2DX:
        $result = $this->db->get()->result();
        goto r3EWa;
        JcMfP:
        NvD_f:
        goto mzwyl;
        qUIYn:
        $this->db->join("\155\141\x73\164\145\x72\137\x73\155\x74\40\x66", "\x61\x2e\x69\x64\137\163\x6d\x74\75\146\x2e\151\144\137\163\155\164", "\154\145\x66\164");
        goto fOrCr;
        iBDZl:
        $this->db->select("\x61\56\151\x64\137\x6d\x61\164\145\162\151\x2c\x20\141\x2e\153\x6f\x64\x65\x5f\155\141\x74\145\x72\151\x2c\40\141\56\153\x6f\x64\x65\137\x6d\141\x70\x65\x6c\54\x20\141\56\x6a\x75\x64\165\154\137\x6d\x61\x74\x65\162\151\54\40\x61\56\x6d\141\x74\x65\x72\151\137\153\x65\154\x61\x73\x2c\40\146\56\156\x61\155\141\137\x73\x6d\164\54\40\x65\56\164\x61\x68\165\x6e\x2c\40\x66\x2e\x73\155\x74\54" . "\40\x61\x2e\x69\x64\137\155\141\160\145\154\54\40\141\x2e\x63\x72\x65\x61\164\145\x64\137\157\x6e\54\x20\x61\56\x75\x70\144\141\x74\145\144\137\157\x6e\x2c\40\x61\x2e\146\151\154\x65\54\x20\x61\56\x73\x74\x61\164\x75\163\54\x20\141\56\151\144\137\x74\x70\x2c\x20\141\56\x69\x64\137\163\155\164\54\x20\142\x2e\156\141\155\141\137\147\x75\162\165\x2c\40\144\56\x6e\141\x6d\x61\x5f\x6d\x61\x70\145\154\x2c\x20\144\56\153\157\144\x65");
        goto KXtr3;
        KXtr3:
        $this->db->from("\153\145\x6c\x61\x73\x5f\155\x61\164\145\162\x69\x20\x61");
        goto HIg2R;
        HIg2R:
        $this->db->join("\155\141\163\164\x65\x72\137\147\x75\x72\x75\x20\x62", "\141\x2e\151\x64\137\x67\165\x72\165\75\142\x2e\x69\144\x5f\x67\165\162\x75", "\x6c\x65\146\x74");
        goto idYr9;
        Un4um:
        $this->db->join("\x6d\x61\163\164\x65\162\137\164\160\40\x65", "\141\x2e\151\144\x5f\164\x70\x3d\x65\x2e\x69\x64\x5f\164\x70", "\154\x65\x66\x74");
        goto qUIYn;
        MsoOr:
        if (!($id_guru != "\60")) {
            goto NvD_f;
        }
        goto vdFIJ;
        vdFIJ:
        $this->db->where("\x61\56\151\x64\137\147\x75\x72\165", $id_guru);
        goto JcMfP;
        idYr9:
        $this->db->join("\x6d\x61\x73\x74\x65\162\x5f\155\x61\160\x65\154\x20\144", "\141\x2e\x69\144\137\155\x61\160\145\x6c\x3d\x64\56\x69\144\137\155\141\x70\145\x6c\40\117\x52\40\x61\x2e\153\157\x64\145\137\x6d\141\x70\x65\154\75\144\56\x6b\x6f\x64\x65", "\x6c\x65\146\164");
        goto Un4um;
        fOrCr:
        $this->db->where("\141\56\x6a\145\156\x69\163", $jenis);
        goto MsoOr;
        TkVCA:
    }
    public function getMateriKelasById($id_materi, $jenis)
    {
        goto cfbU1;
        eYOgv:
        $result = $this->db->get()->row();
        goto Q13HE;
        ZFY9L:
        $this->db->where("\141\56\151\x64\137\x6d\x61\164\145\162\x69", $id_materi);
        goto iKyyJ;
        cfbU1:
        $this->db->select("\141\x2e\52\x2c\x20\x62\x2e\156\x61\155\x61\137\147\x75\x72\165\54\x20\x62\x2e\x66\157\x74\x6f\54\x20\144\56\x69\x64\x5f\155\x61\160\x65\x6c\x2c\40\144\56\156\x61\155\x61\137\x6d\x61\160\x65\x6c\x2c\x20\143\56\x6d\141\x70\145\x6c\x5f\x6b\145\154\x61\163\40\x61\163\40\x6b\145\154\141\x73\137\x67\x75\162\165");
        goto ZYqaC;
        tPwif:
        $this->db->join("\152\x61\142\141\x74\141\156\137\x67\x75\x72\x75\40\x63", "\x61\56\x69\x64\x5f\x67\165\x72\x75\75\x63\56\x69\x64\x5f\147\x75\x72\x75", "\x6c\x65\x66\164");
        goto a1N27;
        iKyyJ:
        $this->db->where("\141\x2e\152\145\156\151\x73", $jenis);
        goto eYOgv;
        ZYqaC:
        $this->db->from("\153\x65\x6c\141\x73\137\x6d\141\164\x65\x72\x69\x20\141");
        goto nbSWT;
        nbSWT:
        $this->db->join("\155\141\163\164\x65\x72\137\x67\165\162\x75\x20\142", "\141\56\151\144\x5f\147\x75\162\165\75\142\x2e\151\144\x5f\x67\x75\162\165", "\154\x65\146\x74");
        goto tPwif;
        a1N27:
        $this->db->join("\x6d\x61\x73\x74\145\x72\137\155\x61\160\x65\154\x20\144", "\141\x2e\151\x64\x5f\x6d\x61\160\145\x6c\x3d\x64\56\151\x64\137\x6d\141\160\x65\x6c", "\154\x65\146\x74");
        goto ZFY9L;
        Q13HE:
        return $result;
        goto xVE_a;
        xVE_a:
    }
    public function getMateriKelasSiswa($id_kjm, $jenis)
    {
        goto C8DKh;
        iOWK4:
        $result = $this->db->get()->row();
        goto rfCJ0;
        Ldb_K:
        $this->db->from("\x6b\145\154\x61\x73\x5f\152\141\144\x77\x61\x6c\137\155\141\x74\x65\162\151\40\141");
        goto SJCO6;
        Vo1NF:
        $this->db->where("\141\x2e\x6a\x65\156\x69\x73", $jenis);
        goto rdCV2;
        NvkH7:
        $this->db->join("\152\x61\x62\x61\x74\x61\x6e\x5f\147\165\162\x75\40\144", "\142\56\x69\x64\x5f\147\165\162\x75\75\144\56\151\144\x5f\147\165\162\165");
        goto h9acs;
        C8DKh:
        $this->db->select("\141\56\151\x64\137\x6b\x6a\155\x2c\x20\141\56\151\x64\x5f\155\141\164\x65\162\151\x2c\40\142\x2e\52\x2c\40\143\x2e\x6e\x61\155\141\x5f\x67\165\x72\165\54\x20\x63\x2e\x66\157\x74\x6f\x2c\x20\145\56\x69\144\137\x6d\x61\x70\x65\154\x2c\x20\x65\56\156\141\x6d\x61\x5f\155\141\160\x65\x6c\x2c\x20\x64\56\155\x61\x70\145\154\137\x6b\145\x6c\141\163\40\141\x73\x20\x6b\x65\154\141\163\137\x67\x75\x72\x75");
        goto Ldb_K;
        SJCO6:
        $this->db->join("\153\x65\x6c\141\163\x5f\155\x61\x74\x65\x72\x69\40\142", "\141\x2e\151\144\x5f\155\141\164\x65\x72\151\x3d\x62\56\151\x64\x5f\155\x61\164\x65\162\151");
        goto ox01C;
        rdCV2:
        $this->db->where("\141\x2e\x69\144\x5f\153\152\x6d", $id_kjm);
        goto iOWK4;
        rfCJ0:
        return $result;
        goto u_Zwn;
        ox01C:
        $this->db->join("\155\141\x73\164\x65\x72\137\147\165\x72\x75\40\143", "\x62\56\151\x64\x5f\147\165\162\x75\x3d\143\56\x69\144\x5f\x67\165\x72\165");
        goto NvkH7;
        h9acs:
        $this->db->join("\155\x61\x73\164\145\x72\137\155\x61\160\x65\154\x20\x65", "\x62\x2e\151\144\137\155\x61\x70\x65\154\x3d\x65\x2e\x69\144\137\155\141\160\145\x6c");
        goto Vo1NF;
        u_Zwn:
    }
    public function getGuruMapelKelas($id_guru, $tp, $smt)
    {
        goto UuzRU;
        tJ5bF:
        $this->db->where("\141\56\x69\x64\x5f\x67\165\x72\165", $id_guru);
        goto lKhIj;
        m9HOF:
        $this->db->join("\155\x61\163\x74\x65\162\x5f\x6b\145\x6c\141\163\40\144", "\142\x2e\151\x64\137\153\145\x6c\x61\163\x3d\144\56\151\144\137\153\145\154\x61\x73\x20\101\x4e\104\x20\x64\x2e\151\144\137\164\x70\75" . $tp . "\x20\x41\116\104\x20\144\x2e\151\x64\x5f\163\x6d\x74\75" . $smt . '', "\x6c\145\146\164");
        goto tJ5bF;
        oUo5H:
        $this->db->join("\x6a\x61\142\141\x74\x61\156\x5f\x67\x75\162\165\40\142", "\141\x2e\x69\x64\x5f\147\165\162\165\x3d\x62\56\151\x64\x5f\147\x75\x72\165\x20\101\x4e\x44\40\x62\x2e\x69\x64\x5f\164\160\75" . $tp . "\x20\x41\116\104\x20\x62\56\151\x64\x5f\x73\x6d\164\x3d" . $smt . '', "\154\145\x66\164");
        goto fMj_N;
        UuzRU:
        $this->db->select("\x61\56\x69\144\x5f\x67\x75\162\165\x2c\40\x61\56\156\x61\x6d\x61\137\147\x75\x72\x75\x2c\x20\141\x2e\153\x6f\144\145\x5f\x67\x75\x72\x75\54\x20\x62\56\155\x61\160\x65\154\137\153\x65\154\x61\163\x2c\40\142\56\145\x6b\163\164\x72\141\x5f\x6b\x65\x6c\x61\163\54\x20\x64\x2e\x6e\141\x6d\141\137\153\x65\154\x61\x73");
        goto Ek6v_;
        ENmY5:
        return $result;
        goto g5VRd;
        lKhIj:
        $result = $this->db->get()->row();
        goto ENmY5;
        fMj_N:
        $this->db->join("\x6c\145\x76\x65\x6c\x5f\147\x75\x72\x75\x20\143", "\x62\56\x69\x64\x5f\x6a\141\142\x61\164\x61\x6e\x3d\143\x2e\151\144\137\154\145\x76\145\154", "\154\x65\x66\x74");
        goto m9HOF;
        Ek6v_:
        $this->db->from("\x6d\x61\x73\164\145\162\137\x67\x75\x72\x75\40\141");
        goto oUo5H;
        g5VRd:
    }
    public function getMapelGuruKelas($tp, $smt)
    {
        goto DN37R;
        cAE0T:
        $this->db->join("\152\141\142\141\164\x61\x6e\x5f\147\x75\x72\x75\x20\x62", "\x61\x2e\151\x64\137\147\165\x72\165\75\x62\56\x69\x64\x5f\x67\x75\x72\165\40\x41\x4e\104\40\142\x2e\151\x64\x5f\x74\x70\x3d" . $tp . "\40\101\x4e\104\x20\142\x2e\151\144\137\163\x6d\164\x3d" . $smt . '', "\154\x65\146\x74");
        goto OTjkS;
        eBjTa:
        $result = $this->db->get()->result();
        goto cisji;
        DivJh:
        $this->db->from("\x6d\x61\163\x74\145\162\137\x67\165\x72\x75\40\141");
        goto cAE0T;
        OTjkS:
        $this->db->join("\154\x65\166\145\x6c\x5f\147\165\x72\165\x20\143", "\142\56\151\x64\x5f\x6a\141\x62\141\164\141\x6e\75\x63\56\151\144\x5f\154\145\166\x65\x6c", "\154\x65\146\x74");
        goto Ums4M;
        cisji:
        return $result;
        goto iAo8z;
        DN37R:
        $this->db->select("\x61\x2e\x69\144\x5f\x67\x75\x72\x75\x2c\40\141\x2e\x6e\141\155\x61\137\147\x75\x72\x75\x2c\40\141\x2e\x6b\157\144\x65\137\x67\165\x72\165\54\x20\x62\x2e\155\x61\x70\145\154\x5f\153\145\154\x61\x73\x2c\x20\x62\56\x65\x6b\x73\164\x72\x61\137\x6b\145\x6c\141\x73\54\40\144\56\156\x61\x6d\141\137\153\145\x6c\x61\x73");
        goto DivJh;
        Ums4M:
        $this->db->join("\155\141\163\x74\x65\162\x5f\x6b\x65\x6c\x61\163\40\144", "\x62\x2e\151\144\x5f\153\x65\x6c\x61\x73\x3d\x64\56\151\144\x5f\153\x65\154\141\163\x20\101\116\x44\x20\144\x2e\x69\x64\137\164\160\x3d" . $tp . "\x20\x41\116\x44\40\144\x2e\151\x64\x5f\x73\x6d\164\75" . $smt . '', "\154\x65\146\164");
        goto eBjTa;
        iAo8z:
    }
    public function getListGuruMapelKelas($tp, $smt)
    {
        goto JCgpa;
        ixvEr:
        return $rest;
        goto hcO8E;
        kSegm:
        foreach ($result as $guru) {
            $rest[$guru->id_guru] = $guru;
            VOiiv:
        }
        goto kS4Ll;
        Jon97:
        $result = $this->db->get()->result();
        goto dkcgR;
        kS4Ll:
        Ot43q:
        goto ixvEr;
        OoOmH:
        $this->db->join("\152\x61\x62\141\164\x61\156\x5f\x67\165\162\x75\x20\x62", "\141\56\x69\144\137\x67\x75\x72\x75\x3d\x62\56\151\144\137\x67\x75\x72\165\40\101\x4e\x44\x20\x62\56\x69\x64\x5f\x74\160\x3d" . $tp . "\x20\x41\x4e\104\x20\x62\56\151\x64\137\x73\155\x74\75" . $smt . '', "\x6c\x65\146\164");
        goto kqrp_;
        FiSHe:
        $this->db->from("\155\x61\163\x74\145\x72\137\147\x75\x72\165\x20\x61");
        goto OoOmH;
        dkcgR:
        $rest = [];
        goto kSegm;
        kqrp_:
        $this->db->join("\x6c\x65\x76\145\x6c\x5f\x67\x75\162\165\40\x63", "\142\x2e\x69\144\x5f\x6a\x61\x62\141\x74\x61\x6e\x3d\143\56\151\144\137\x6c\145\x76\145\x6c", "\154\145\x66\x74");
        goto SF3yG;
        JCgpa:
        $this->db->select("\141\56\x69\x64\137\x67\x75\x72\x75\x2c\40\141\x2e\x6e\141\x6d\141\x5f\x67\x75\x72\165\x2c\x20\x61\x2e\153\x6f\144\145\x5f\147\165\162\x75\x2c\40\x62\56\155\x61\x70\x65\x6c\137\153\145\154\141\x73\54\x20\x62\x2e\145\x6b\163\x74\x72\x61\137\x6b\x65\x6c\141\x73\54\x20\144\56\x6e\141\x6d\x61\x5f\153\x65\x6c\141\163");
        goto FiSHe;
        SF3yG:
        $this->db->join("\x6d\141\x73\164\145\162\x5f\x6b\x65\x6c\x61\x73\x20\x64", "\x62\x2e\151\144\x5f\x6b\145\x6c\141\163\x3d\144\56\x69\144\137\153\x65\x6c\x61\163\x20\101\116\x44\x20\x64\56\x69\x64\x5f\x74\x70\75" . $tp . "\40\101\x4e\104\x20\144\56\151\144\x5f\163\155\x74\75" . $smt . '', "\154\145\146\164");
        goto Jon97;
        hcO8E:
    }
    public function getIdKelas($tp, $smt)
    {
        goto B6tv1;
        icplD:
        $this->db->where("\x69\x64\137\x74\x70", $tp);
        goto Kj9Lm;
        B6tv1:
        $this->db->select("\151\x64\x5f\x6b\x65\x6c\141\x73");
        goto icplD;
        Brvhz:
        xrrHQ:
        goto o6J9a;
        Kj9Lm:
        $this->db->where("\x69\144\x5f\163\155\x74", $smt);
        goto pNLz0;
        Haxll:
        foreach ($result as $key => $row) {
            array_push($ret, $row->id_kelas);
            oDqxa:
        }
        goto Brvhz;
        B1gnu:
        if (!$result) {
            goto QTyRr;
        }
        goto Haxll;
        A_pCA:
        $ret = [];
        goto B1gnu;
        kufsJ:
        return $ret;
        goto AJfFi;
        pNLz0:
        $result = $this->db->get("\x6d\x61\x73\164\x65\x72\137\x6b\x65\154\x61\x73")->result();
        goto A_pCA;
        o6J9a:
        QTyRr:
        goto kufsJ;
        AJfFi:
    }
    public function getNamaKelasById($arr_id)
    {
        goto BF17H;
        EHLGK:
        if (!$result) {
            goto CLqHJ;
        }
        goto zbtc3;
        ajRIv:
        CLqHJ:
        goto KmRmM;
        V_8yi:
        bbLF7:
        goto ajRIv;
        BF17H:
        $this->db->select("\151\x64\x5f\153\145\x6c\141\163\x2c\40\x6e\x61\x6d\141\x5f\153\x65\x6c\141\163");
        goto IwMOx;
        zbtc3:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas] = $row->nama_kelas;
            nwEMM:
        }
        goto V_8yi;
        IwMOx:
        $this->db->where_in("\x69\x64\x5f\153\x65\x6c\x61\163", $arr_id);
        goto nJSz8;
        nJSz8:
        $result = $this->db->get("\155\141\163\x74\x65\x72\x5f\x6b\145\x6c\141\x73")->result();
        goto UYe71;
        UYe71:
        $ret = null;
        goto EHLGK;
        KmRmM:
        return $ret;
        goto ZryAG;
        ZryAG:
    }
    public function getNamaKelasByKode($arr_kode)
    {
        goto J0p_X;
        faFsc:
        $result = $this->db->get("\x6d\x61\x73\164\x65\x72\x5f\x6b\145\154\141\163")->result();
        goto dn2LH;
        QHqr6:
        SjwG_:
        goto I7CXT;
        tM8Rw:
        return $ret;
        goto CfvV0;
        agIUj:
        $this->db->where_in("\153\x6f\144\145\137\x6b\x65\154\x61\163", $arr_kode);
        goto faFsc;
        I7CXT:
        AfsEb:
        goto tM8Rw;
        J0p_X:
        $this->db->select("\151\144\x5f\x6b\x65\x6c\x61\163\x2c\x20\x6e\141\x6d\141\137\153\145\x6c\141\163");
        goto agIUj;
        C75Ec:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas] = $row->nama_kelas;
            hbCN0:
        }
        goto QHqr6;
        dn2LH:
        $ret = null;
        goto qqvst;
        qqvst:
        if (!$result) {
            goto AfsEb;
        }
        goto C75Ec;
        CfvV0:
    }
    public function getJadwalByMateri($id, $jenis, $tp, $smt)
    {
        goto eIirB;
        HIZNd:
        rvpr_:
        goto mFNLW;
        Q22_3:
        $ret = [];
        goto Y2gHO;
        ns0mk:
        $this->db->where("\x69\144\137\164\160", $tp);
        goto WW1t2;
        gADWK:
        $this->db->where("\x6a\x65\x6e\x69\163", $jenis);
        goto ns0mk;
        qaYtk:
        $result = $this->db->get("\x6b\145\154\141\x73\137\x6a\x61\144\167\x61\154\137\155\141\164\145\x72\151")->result();
        goto Q22_3;
        uDU7B:
        foreach ($result as $key => $row) {
            goto XONqZ;
            XONqZ:
            if (isset($ret[$row->id_kelas])) {
                goto iO0cS;
            }
            goto XSiwO;
            MtLAL:
            array_push($ret[$row->id_kelas], $row);
            goto TfBQv;
            rVV_v:
            array_push($ret[$row->id_kelas], $row);
            goto ks6i9;
            c1AJb:
            iO0cS:
            goto rVV_v;
            ks6i9:
            W4wsx:
            goto SGZxU;
            SGZxU:
            rXHuK:
            goto x6N_6;
            TfBQv:
            goto W4wsx;
            goto c1AJb;
            XSiwO:
            $ret[$row->id_kelas] = [];
            goto MtLAL;
            x6N_6:
        }
        goto HIZNd;
        eIirB:
        $this->db->select("\x69\x64\x5f\x6b\x6a\155\x2c\40\151\144\137\x6b\145\154\141\163\x2c\40\152\141\144\167\x61\154\x5f\155\x61\x74\145\x72\151\x2c\x20\50\123\105\x4c\x45\103\x54\x20\103\117\125\x4e\x54\50\151\x64\x5f\x6d\141\164\x65\x72\151\x29\x20\106\122\117\115\40\154\x6f\x67\137\155\141\164\145\x72\x69\40\x57\110\105\x52\x45\x20\153\145\x6c\x61\x73\x5f\152\x61\x64\167\141\154\x5f\x6d\x61\164\145\162\151\56\151\x64\137\153\152\x6d\x3d\154\157\x67\x5f\155\141\x74\x65\162\151\x2e\151\x64\x5f\155\141\164\145\x72\x69\51\40\101\x53\40\152\x6d\154\x5f\163\151\x73\x77\x61");
        goto XDdvL;
        XDdvL:
        $this->db->where("\x69\x64\137\x6d\x61\x74\x65\162\x69", $id);
        goto gADWK;
        jWlh_:
        return $ret;
        goto V2TkM;
        mFNLW:
        n9zmo:
        goto jWlh_;
        Y2gHO:
        if (!$result) {
            goto n9zmo;
        }
        goto uDU7B;
        WW1t2:
        $this->db->where("\151\144\137\163\x6d\x74", $smt);
        goto qaYtk;
        V2TkM:
    }
    public function getKodeMateriMapel($id_tp, $id_smt, $id_mapel)
    {
        goto tHXFX;
        Qjfrh:
        $this->db->join("\x6d\141\x73\164\x65\162\137\147\165\162\x75\x20\x64", "\141\56\151\144\137\147\x75\162\x75\x3d\x64\56\x69\144\137\147\165\162\165");
        goto HKZsO;
        Aquas:
        $this->db->join("\155\141\x73\x74\145\162\137\x6d\141\160\x65\x6c\40\142", "\142\56\151\144\137\155\141\x70\145\x6c\x3d\x61\x2e\151\x64\137\155\x61\160\x65\x6c", "\154\x65\146\x74");
        goto MUyiy;
        tHXFX:
        $this->db->select("\x61\56\151\144\x5f\155\141\160\x65\x6c\x2c\x20\141\56\151\144\137\155\141\x74\x65\x72\151\x2c\40\141\x2e\152\145\x6e\x69\163\x2c\40\x61\x2e\153\157\x64\145\x5f\155\141\164\145\162\x69\54\x20\x61\x2e\155\x61\164\145\162\x69\x5f\153\x65\x6c\x61\163\54\x20\x61\x2e\x69\144\137\x67\x75\162\165\x2c\x20\x62\56\153\157\x64\x65\40\141\x73\40\x6b\157\x64\x65\x5f\155\x61\160\x65\154\54\40\x63\x2e\151\x64\x5f\x6b\152\x6d\x2c\x20\143\x2e\152\x61\x64\x77\x61\x6c\x5f\x6d\x61\x74\145\x72\x69\x2c\x20\143\x2e\x69\144\x5f\x6b\x65\154\141\163\54\40\x64\56\156\x61\155\141\x5f\x67\165\162\x75");
        goto MHvzE;
        fKyii:
        $this->db->where("\x61\56\x69\x64\x5f\164\x70", $id_tp);
        goto lEK6L;
        MHvzE:
        $this->db->from("\x6b\145\x6c\141\163\x5f\155\141\164\145\x72\x69\40\x61");
        goto Aquas;
        KpG2l:
        $result = $this->db->get()->result();
        goto z9gVA;
        z9gVA:
        return $result;
        goto EWCyV;
        MUyiy:
        $this->db->join("\153\145\154\x61\x73\137\x6a\141\144\x77\x61\x6c\137\x6d\141\164\x65\x72\151\40\143", "\141\x2e\x69\144\x5f\x6d\141\x74\x65\162\151\75\x63\56\151\x64\x5f\155\x61\164\x65\162\151");
        goto Qjfrh;
        HKZsO:
        $this->db->where("\141\56\x69\144\x5f\155\x61\x70\145\154", $id_mapel);
        goto fKyii;
        lEK6L:
        $this->db->where("\x61\x2e\151\144\x5f\163\155\x74", $id_smt);
        goto KpG2l;
        EWCyV:
    }
    public function getAllKodeMateri($id_tp, $id_smt, $id_guru = null)
    {
        goto kTgJY;
        kTgJY:
        $this->db->select("\x61\56\151\x64\137\155\141\x70\145\x6c\54\40\141\56\x69\x64\137\x6d\x61\164\145\x72\151\54\x20\x61\x2e\x6a\145\x6e\x69\163\54\x20\141\x2e\x6b\x6f\x64\145\137\x6d\x61\x74\x65\x72\x69\54\x20\141\x2e\155\x61\164\145\x72\151\x5f\153\145\154\x61\x73\x2c\40\141\56\x69\144\x5f\x67\x75\x72\x75\x2c\40\142\x2e\x6b\157\x64\x65\x20\x61\163\x20\x6b\x6f\x64\145\137\x6d\141\160\x65\x6c\54\40\x63\56\151\144\137\x6b\x6a\x6d\x2c\x20\143\56\152\141\144\x77\x61\154\x5f\155\x61\x74\x65\x72\x69");
        goto aJJ3S;
        Mq0Yv:
        $result = $this->db->get()->result();
        goto uB7FA;
        UM0xd:
        q1ryN:
        goto HUrh4;
        yanBA:
        $this->db->join("\153\145\154\141\x73\x5f\x6a\141\x64\x77\x61\x6c\137\x6d\141\164\x65\x72\x69\x20\x63", "\x61\x2e\x69\144\137\155\141\164\145\162\151\75\143\x2e\151\144\137\x6d\x61\x74\x65\162\151");
        goto p7IxH;
        uB7FA:
        return $result;
        goto XGbz1;
        Pu3h1:
        $this->db->where("\x61\x2e\151\x64\x5f\x67\165\162\165", $id_guru);
        goto UM0xd;
        Zoshh:
        $this->db->join("\x6d\141\163\164\x65\162\137\155\141\160\145\x6c\x20\x62", "\142\x2e\151\144\137\155\x61\160\145\x6c\x3d\x61\x2e\151\144\137\155\x61\160\145\x6c", "\x6c\x65\146\164");
        goto yanBA;
        EJDYK:
        $this->db->where("\141\56\x69\x64\137\x73\x6d\x74", $id_smt);
        goto Mq0Yv;
        HUrh4:
        $this->db->where("\141\x2e\x69\x64\137\164\160", $id_tp);
        goto EJDYK;
        p7IxH:
        if (!($id_guru != null)) {
            goto q1ryN;
        }
        goto Pu3h1;
        aJJ3S:
        $this->db->from("\x6b\x65\154\141\163\137\155\x61\164\145\162\151\x20\141");
        goto Zoshh;
        XGbz1:
    }
    public function getKelasSiswa($id_kelas, $id_tp, $id_smt)
    {
        goto SiAQ2;
        mpotJ:
        $this->db->where("\x61\56\x69\144\137\164\x70", $id_tp);
        goto S_9En;
        S_9En:
        $this->db->where("\141\56\x69\144\x5f\163\x6d\x74", $id_smt);
        goto JCb4i;
        I9aSV:
        $this->db->join("\x6d\141\163\164\x65\162\137\153\x65\154\141\163\40\x63", "\x61\x2e\151\x64\137\153\145\154\141\163\75\x63\56\x69\x64\x5f\153\145\x6c\141\x73");
        goto Ipayx;
        JCb4i:
        $this->db->order_by("\142\x2e\x6e\141\155\x61", "\101\123\103");
        goto XeH_a;
        XeH_a:
        return $this->db->get()->result();
        goto ewVeu;
        SiAQ2:
        $this->db->select("\x61\56\x2a\x2c\x20\x62\x2e\156\x61\x6d\x61\x2c\x20\x62\56\156\x69\163\54\x20\x62\x2e\156\x69\163\x6e\x2c\40\142\56\x75\x73\145\x72\x6e\141\x6d\145\x2c\x20\142\56\x6a\x65\156\151\163\x5f\x6b\x65\154\141\155\x69\156\x2c\x20\x63\x2e\156\141\155\x61\x5f\153\145\x6c\141\163\x2c\40\143\56\154\145\x76\x65\x6c\137\151\144");
        goto YPdgW;
        ae7xV:
        $this->db->join("\155\141\163\164\145\162\x5f\163\151\163\x77\x61\40\142", "\x61\x2e\151\x64\137\x73\x69\x73\167\141\x3d\142\x2e\x69\144\137\163\151\x73\167\141");
        goto I9aSV;
        YPdgW:
        $this->db->from("\153\145\154\x61\163\x5f\x73\151\x73\x77\x61\40\x61");
        goto ae7xV;
        Ipayx:
        $this->db->where("\x61\56\151\x64\x5f\153\x65\154\x61\x73", $id_kelas);
        goto mpotJ;
        ewVeu:
    }
    public function getKelasSiswaDuaSmt($id_kelas, $id_tp, $id_smt)
    {
        goto ihUeq;
        YIGCl:
        return $this->db->get()->result();
        goto WNYRN;
        DbATY:
        $this->db->where("\141\56\x69\144\137\163\155\164", $id_smt);
        goto YIGCl;
        NUa5z:
        $this->db->from("\153\x65\x6c\141\x73\x5f\x73\x69\x73\167\x61\40\141");
        goto GuGsL;
        Veb34:
        $this->db->where("\141\x2e\151\144\x5f\164\160", $id_tp);
        goto DbATY;
        VMabt:
        $this->db->join("\155\141\163\x74\145\162\137\153\x65\154\x61\163\40\x63", "\x61\x2e\x69\144\x5f\153\x65\x6c\141\163\x3d\x63\56\x69\x64\x5f\x6b\x65\x6c\141\163", "\x6c\145\x66\x74");
        goto ZmSN4;
        ihUeq:
        $this->db->select("\x61\x2e\52\x2c\40\x62\56\x6e\x61\x6d\x61\54\x20\142\56\x6e\x69\x73\54\x20\142\56\x6e\x69\163\156\x2c\40\142\x2e\165\163\145\162\156\141\155\x65\x2c\x20\143\x2e\x6e\x61\x6d\x61\x5f\153\145\154\141\163\x2c\x20\143\56\x6c\x65\x76\x65\x6c\x5f\151\144");
        goto NUa5z;
        GuGsL:
        $this->db->join("\x6d\x61\163\x74\145\x72\x5f\x73\x69\163\x77\x61\x20\x62", "\141\x2e\x69\144\137\163\x69\x73\167\141\x3d\142\56\x69\x64\x5f\x73\151\x73\167\141", "\154\145\146\x74");
        goto VMabt;
        ZmSN4:
        $this->db->where("\141\56\x69\144\137\x6b\145\x6c\141\163", $id_kelas);
        goto Veb34;
        WNYRN:
    }
    public function getStatusMateriSiswaByJadwal($id_siswa, $arr_id_kjm)
    {
        goto SknG6;
        d_de1:
        rhRcz:
        goto vYgU8;
        SknG6:
        $this->db->select("\52");
        goto DJLc7;
        YX3I4:
        $result = $this->db->get()->result();
        goto qxqM1;
        vYgU8:
        return $ret;
        goto LX6h0;
        wD_q_:
        foreach ($result as $key => $row) {
            $ret[$row->id_materi] = $row;
            FGD5a:
        }
        goto MWGUr;
        NtPd2:
        $this->db->where_in("\151\x64\x5f\x6d\141\164\x65\x72\151", $arr_id_kjm);
        goto lMfzb;
        MWGUr:
        Ksqkd:
        goto d_de1;
        DJLc7:
        $this->db->from("\154\x6f\147\x5f\x6d\x61\164\145\162\x69");
        goto NtPd2;
        qxqM1:
        $ret = [];
        goto tWO4j;
        lMfzb:
        $this->db->where("\151\x64\x5f\x73\x69\x73\167\x61", $id_siswa);
        goto YX3I4;
        tWO4j:
        if (!$result) {
            goto rhRcz;
        }
        goto wD_q_;
        LX6h0:
    }
    public function getStatusMateriSiswa($id_kjm = null)
    {
        goto t94jc;
        N1aSj:
        $this->db->join("\x6b\145\x6c\x61\163\x5f\x6a\141\x64\x77\x61\x6c\x5f\x6d\x61\x74\x65\162\151\x20\x62", "\x62\x2e\151\x64\137\153\152\x6d\75\x61\56\151\144\x5f\x6d\141\164\145\162\151");
        goto Ubk9l;
        zAEn1:
        RirdU:
        goto eCoWe;
        BO2Pu:
        if (!$result) {
            goto RirdU;
        }
        goto Ppm3L;
        FaJY0:
        MqGwH:
        goto ICG8o;
        ICG8o:
        $result = $this->db->get()->result();
        goto m3iY3;
        m3iY3:
        $ret = [];
        goto BO2Pu;
        t94jc:
        $this->db->select("\141\56\52\x2c\40\142\56\x6a\x61\x64\167\141\x6c\x5f\155\x61\x74\145\x72\151");
        goto JJ3ls;
        Ppm3L:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa] = $row;
            aLjkE:
        }
        goto FL84H;
        eCoWe:
        return $ret;
        goto erdzK;
        Ubk9l:
        if (!($id_kjm != null)) {
            goto MqGwH;
        }
        goto m7aSw;
        m7aSw:
        $this->db->where("\x61\56\x69\x64\x5f\155\141\164\145\162\x69", $id_kjm);
        goto FaJY0;
        FL84H:
        q64IS:
        goto zAEn1;
        JJ3ls:
        $this->db->from("\154\x6f\147\137\155\141\164\145\x72\x69\40\141");
        goto N1aSj;
        erdzK:
    }
    public function getNilaiMateriSiswa($id_siswa)
    {
        goto bXER3;
        p5N3e:
        foreach ($result as $key => $row) {
            $ret[$row->jenis][] = $row;
            MpRoF:
        }
        goto jaIrO;
        dMGum:
        $this->db->join("\153\145\154\141\x73\137\x6d\141\x74\x65\x72\x69\x20\x63", "\142\x2e\x69\144\x5f\155\141\x74\x65\x72\x69\x3d\143\56\x69\x64\x5f\155\x61\164\145\x72\x69");
        goto FlboC;
        ECtnm:
        return $ret;
        goto jj4jJ;
        FlboC:
        $this->db->join("\155\141\163\x74\145\162\137\x6d\x61\160\145\x6c\x20\144", "\143\x2e\x69\144\x5f\155\141\160\145\154\x3d\144\x2e\151\144\137\155\x61\160\x65\154");
        goto OsjsZ;
        OsjsZ:
        $this->db->where("\x61\56\x69\144\137\163\x69\163\167\x61", $id_siswa);
        goto ASFuk;
        XR_Se:
        $ret = [];
        goto KB0MU;
        Ly3Zv:
        $this->db->join("\153\145\154\x61\x73\137\152\x61\144\x77\141\154\x5f\155\141\x74\145\x72\151\40\142", "\141\56\x69\144\x5f\x6d\141\164\145\162\151\x3d\142\x2e\151\144\137\153\152\x6d");
        goto dMGum;
        ASFuk:
        $result = $this->db->get()->result();
        goto XR_Se;
        KB0MU:
        if (!$result) {
            goto R0Nnt;
        }
        goto p5N3e;
        jaIrO:
        VMpbj:
        goto JzdAf;
        Wyx1x:
        $this->db->from("\154\157\x67\137\155\x61\164\145\162\x69\40\x61");
        goto Ly3Zv;
        bXER3:
        $this->db->select("\141\56\156\x69\x6c\x61\151\54\40\141\x2e\143\x61\x74\x61\164\141\x6e\54\x20\142\56\x6a\x61\144\x77\x61\154\137\155\141\x74\145\162\151\54\x20\x63\56\153\x6f\144\x65\137\155\x61\164\x65\162\x69\x2c\x20\143\56\152\x75\x64\x75\154\x5f\x6d\141\x74\145\x72\151\x2c\x20\143\x2e\x6a\145\156\x69\163\x2c\x20\x64\x2e\156\x61\155\x61\x5f\155\x61\160\145\154\54\40\144\56\153\x6f\x64\145");
        goto Wyx1x;
        JzdAf:
        R0Nnt:
        goto ECtnm;
        jj4jJ:
    }
    public function getStatusSiswaByMapel($table, $id_mapel)
    {
        goto PGBiK;
        mt7tr:
        $this->db->where("\x69\144\x5f\155\141\x70\145\x6c", $id_mapel);
        goto qRcHd;
        PGBiK:
        $this->db->select("\x2a");
        goto k3AY9;
        k3AY9:
        $this->db->from($table);
        goto mt7tr;
        qRcHd:
        return $this->db->get()->result();
        goto BAQpG;
        BAQpG:
    }
    public function getLogFileSiswa($table, $id_log)
    {
        goto Zv5Q6;
        o0SD6:
        $this->db->where("\151\144\x5f\154\157\147", $id_log);
        goto NoQDU;
        NoQDU:
        $query = $this->db->get();
        goto r9Wxg;
        r9Wxg:
        return $query->row();
        goto iOC5P;
        qtZDb:
        $this->db->from($table);
        goto o0SD6;
        Zv5Q6:
        $this->db->select("\x2a");
        goto qtZDb;
        iOC5P:
    }
    public function getLoginSiswa($username)
    {
        goto BNf_0;
        kXdq_:
        return null;
        goto D4Sff;
        FlEwF:
        yJZwR:
        goto PSi1Y;
        BNf_0:
        $this->db->select("\141\56\151\x64\x2c\40\x62\x2e\52");
        goto yakZN;
        D4Sff:
        goto yJZwR;
        goto TuYHh;
        wA8kt:
        $this->db->where("\141\x2e\165\163\x65\x72\156\141\155\x65", $username);
        goto KHRbH;
        yakZN:
        $this->db->from("\165\x73\x65\162\x73\x20\141");
        goto A_mEu;
        bGMYt:
        if ($query->num_rows() > 0) {
            goto fS5f_;
        }
        goto kXdq_;
        NfyJS:
        $query = $this->db->get();
        goto bGMYt;
        TuYHh:
        fS5f_:
        goto NTq1j;
        KHRbH:
        $this->db->order_by("\x62\56\x6c\157\x67\x5f\164\x69\155\x65", "\x44\105\123\103");
        goto NfyJS;
        NTq1j:
        return $query->row()->log_time;
        goto FlEwF;
        A_mEu:
        $this->db->join("\x6c\x6f\x67\x20\142", "\141\56\x69\144\75\x62\x2e\x69\x64\137\x75\x73\145\x72", "\154\x65\146\x74");
        goto wA8kt;
        PSi1Y:
    }
    public function loadJadwalSiswaHariIni($id_tp, $id_smt, $id_kelas, $id_hari)
    {
        goto V1paL;
        QQd1i:
        $this->db->where("\141\x2e\151\144\x5f\x73\155\x74", $id_smt);
        goto TAsJE;
        KYbin:
        return $ret;
        goto BVohp;
        TAsJE:
        $this->db->where("\x61\x2e\x69\x64\137\153\x65\154\141\x73", $id_kelas);
        goto xCATa;
        Xj9ll:
        if (!$result) {
            goto xZvcX;
        }
        goto ZvegS;
        mPhVk:
        $this->db->join("\x6d\x61\163\164\145\x72\137\x6d\141\160\x65\154\40\x62", "\142\56\151\x64\x5f\x6d\x61\x70\145\154\75\x61\56\151\x64\x5f\155\141\160\145\x6c", "\x6c\145\x66\x74");
        goto tQsIV;
        LEYsi:
        $this->db->from("\x6b\x65\154\141\163\x5f\152\141\144\167\141\154\137\155\141\160\145\x6c\40\x61");
        goto mPhVk;
        V1paL:
        $this->db->select("\52");
        goto LEYsi;
        l_06p:
        $result = $this->db->get()->result();
        goto aGR0M;
        xCATa:
        $this->db->where("\x61\56\x69\144\x5f\150\x61\162\151", $id_hari);
        goto l_06p;
        A6Kvg:
        o6ORd:
        goto PiKfU;
        PiKfU:
        xZvcX:
        goto KYbin;
        aGR0M:
        $ret = [];
        goto Xj9ll;
        ZvegS:
        foreach ($result as $key => $row) {
            $ret[$row->jam_ke] = $row;
            t5SXD:
        }
        goto A6Kvg;
        tQsIV:
        $this->db->where("\141\x2e\151\x64\137\x74\160", $id_tp);
        goto QQd1i;
        BVohp:
    }
    public function loadJadwalSiswaSeminggu($id_tp, $id_smt, $id_kelas)
    {
        goto ItTkh;
        RujWh:
        return $ret;
        goto uQmD8;
        Tpc4k:
        $result = $this->db->get()->result();
        goto lHyi2;
        Q5Q1u:
        $this->db->where("\141\x2e\151\x64\x5f\x74\x70", $id_tp);
        goto jJNN_;
        zYCHp:
        $this->db->from("\153\145\x6c\141\163\x5f\x6a\x61\144\x77\x61\154\x5f\155\x61\x70\145\154\x20\x61");
        goto lLyx6;
        SuJGP:
        $this->db->where("\x61\56\x69\144\137\x6b\x65\154\x61\163", $id_kelas);
        goto Tpc4k;
        yZmcf:
        b3VN8:
        goto RujWh;
        ItTkh:
        $this->db->select("\52");
        goto zYCHp;
        G4ObH:
        if (!$result) {
            goto b3VN8;
        }
        goto jYYuA;
        lHyi2:
        $ret = [];
        goto G4ObH;
        bQPhp:
        Nf5Ty:
        goto yZmcf;
        jJNN_:
        $this->db->where("\x61\56\x69\144\137\x73\155\x74", $id_smt);
        goto SuJGP;
        lLyx6:
        $this->db->join("\155\141\163\164\145\162\137\155\141\x70\145\x6c\x20\x62", "\x62\x2e\151\x64\137\155\x61\160\145\x6c\x3d\141\x2e\151\x64\x5f\155\141\x70\x65\154", "\x6c\145\x66\164");
        goto Q5Q1u;
        jYYuA:
        foreach ($result as $key => $row) {
            $ret[$row->id_hari][$row->jam_ke] = $row;
            h8gQr:
        }
        goto bQPhp;
        uQmD8:
    }
    public function getMateriSiswa($id_kelas, $tgl, $jenis)
    {
        goto PKtcC;
        SwIjV:
        $this->db->join("\x6b\x65\154\141\x73\x5f\155\x61\164\x65\162\151\x20\x62", "\x61\x2e\x69\x64\137\x6d\x61\x74\145\162\151\x3d\x62\x2e\151\144\137\x6d\141\164\x65\x72\151\40\x41\116\x44\40\x62\x2e\x73\164\x61\164\x75\x73\75\x31");
        goto E69p4;
        q2BWH:
        if (!$result) {
            goto NUzRt;
        }
        goto rXFco;
        yhplq:
        $ret = [];
        goto q2BWH;
        rXFco:
        foreach ($result as $key => $row) {
            goto OMqOg;
            YE1N0:
            RUGaf:
            goto FXjKg;
            OMqOg:
            $jam = substr($row->id_kjm, strlen($row->id_kjm) - 2, 1);
            goto n_Aa9;
            n_Aa9:
            $ret[$jam] = $row;
            goto YE1N0;
            FXjKg:
        }
        goto oJ2tB;
        fjHUs:
        $result = $this->db->get()->result();
        goto yhplq;
        OsXUs:
        $this->db->where("\141\x2e\152\x61\144\x77\141\x6c\x5f\x6d\x61\164\145\x72\151", $tgl);
        goto fUK5m;
        zASH3:
        NUzRt:
        goto NyuIJ;
        EAm9N:
        $this->db->join("\x6d\x61\163\x74\145\162\137\155\141\160\x65\x6c\x20\144", "\x62\56\151\x64\x5f\x6d\141\160\145\154\75\144\56\x69\x64\x5f\x6d\x61\x70\145\154", "\x6c\145\x66\x74");
        goto m2OvP;
        oJ2tB:
        ujz73:
        goto zASH3;
        fUK5m:
        $this->db->where("\x61\x2e\151\144\x5f\153\x65\x6c\141\163", $id_kelas);
        goto fjHUs;
        m2OvP:
        $this->db->where("\141\56\x6a\145\156\x69\163", $jenis);
        goto OsXUs;
        E69p4:
        $this->db->join("\x6d\141\x73\x74\145\x72\x5f\x67\165\x72\165\40\x63", "\142\56\151\144\137\147\x75\x72\165\75\143\56\x69\x64\137\147\165\x72\165", "\154\145\x66\x74");
        goto EAm9N;
        NyuIJ:
        return $ret;
        goto HvPKa;
        PKtcC:
        $this->db->select("\141\56\x2a\x2c\40\142\x2e\151\144\x5f\x6d\x61\x74\x65\162\x69\x2c\40\142\x2e\153\x6f\x64\x65\137\x6d\141\164\x65\162\x69\x2c\x20\x62\56\x6a\x75\144\165\x6c\137\155\x61\164\145\x72\x69\x2c\x20\x62\56\x6d\x61\164\x65\x72\151\x5f\153\x65\154\x61\163\x2c\x20\142\x2e\x74\x67\x6c\x5f\155\165\x6c\141\x69\54\x20\143\x2e\156\141\155\141\137\x67\165\x72\x75\54\40\144\56\x6e\x61\x6d\x61\137\x6d\x61\160\x65\154");
        goto qxx2F;
        qxx2F:
        $this->db->from("\x6b\145\154\x61\x73\137\152\x61\144\x77\141\x6c\137\155\141\164\145\x72\x69\x20\141");
        goto SwIjV;
        HvPKa:
    }
    public function getMateriSiswaSeminggu($id_tp, $id_smt, $id_kelas, $jenis)
    {
        goto jcpKj;
        wUqLB:
        $this->db->where("\141\x2e\x69\x64\x5f\164\160", $id_tp);
        goto CLfru;
        c8ZDV:
        $this->db->where("\x61\x2e\x69\x64\137\153\145\154\x61\163", $id_kelas);
        goto Kw3Yk;
        QuSLr:
        return $ret;
        goto eRwtB;
        CLfru:
        $this->db->where("\141\x2e\151\x64\x5f\x73\155\164", $id_smt);
        goto T5wJP;
        lvwLh:
        zprqK:
        goto QuSLr;
        jcpKj:
        $this->db->select("\x61\56\52\x2c\x20\x62\x2e\151\x64\137\x6d\x61\164\145\162\151\54\40\142\56\x6b\157\x64\x65\x5f\x6d\141\x74\145\x72\151\54\x20\142\56\x6a\165\144\x75\154\137\x6d\141\164\145\x72\151\54\40\142\x2e\x6d\x61\164\x65\162\151\x5f\x6b\x65\154\x61\163\54\x20\x62\56\164\x67\x6c\137\x6d\165\x6c\x61\x69\54\40\143\x2e\156\141\x6d\x61\x5f\147\165\162\165\54\x20\144\56\156\x61\155\141\137\155\141\x70\x65\154");
        goto nTm0a;
        N851Z:
        yfEEO:
        goto lvwLh;
        nTm0a:
        $this->db->from("\x6b\x65\154\141\x73\x5f\152\x61\144\x77\141\x6c\137\155\x61\x74\145\x72\151\x20\141");
        goto n9d2z;
        z9A_C:
        $ret = [];
        goto lo6Zy;
        zzKS7:
        foreach ($result as $key => $row) {
            goto J1N5f;
            debus:
            FjRlX:
            goto T_5Zl;
            J1N5f:
            $jam = substr($row->id_kjm, strlen($row->id_kjm) - 2, 1);
            goto t_Vhq;
            t_Vhq:
            $ret[$row->jadwal_materi][$jam] = $row;
            goto debus;
            T_5Zl:
        }
        goto N851Z;
        INW5q:
        $this->db->join("\x6d\141\x73\x74\x65\x72\x5f\x67\165\162\x75\x20\x63", "\x62\x2e\151\x64\137\x67\165\x72\165\x3d\143\x2e\x69\144\x5f\x67\165\x72\165", "\154\145\146\x74");
        goto pGS9r;
        pGS9r:
        $this->db->join("\155\141\163\x74\x65\x72\x5f\x6d\141\x70\x65\x6c\40\x64", "\x62\x2e\x69\144\x5f\155\x61\x70\145\154\x3d\x64\x2e\x69\144\x5f\x6d\x61\160\x65\x6c", "\x6c\145\x66\164");
        goto wUqLB;
        Kw3Yk:
        $result = $this->db->get()->result();
        goto z9A_C;
        T5wJP:
        $this->db->where("\x61\56\152\x65\x6e\x69\x73", $jenis);
        goto c8ZDV;
        n9d2z:
        $this->db->join("\153\x65\154\141\x73\137\x6d\x61\164\x65\x72\151\x20\142", "\141\x2e\x69\144\x5f\155\x61\164\145\x72\151\x3d\x62\x2e\151\x64\x5f\155\x61\x74\145\x72\x69\x20\101\x4e\x44\40\142\x2e\163\164\141\164\x75\163\x3d\61");
        goto INW5q;
        lo6Zy:
        if (!$result) {
            goto zprqK;
        }
        goto zzKS7;
        eRwtB:
    }
    public function getAllMateriByTgl($id_kelas, $tgl, $arr_mapel)
    {
        goto AcbkN;
        ehowr:
        return $ret;
        goto mD1F5;
        AcbkN:
        $this->db->select("\141\56\52\54\x20\x62\56\151\144\x5f\155\141\x74\x65\162\x69\54\x20\142\56\153\157\144\x65\x5f\155\141\x74\145\x72\151\x2c\40\142\x2e\155\x61\x74\145\x72\x69\x5f\x6b\x65\x6c\x61\163\54\x20\x62\x2e\x74\x67\x6c\137\x6d\x75\x6c\x61\151\54\x20\143\x2e\156\x61\155\141\137\147\165\162\x75\x2c\40\144\56\x6b\x6f\144\x65\54\40\x64\56\156\141\155\x61\x5f\155\x61\160\x65\154");
        goto BTOKr;
        Z0nYS:
        foreach ($result as $key => $row) {
            goto xyVKu;
            HR4rV:
            $row->materi_kelas = unserialize($row->materi_kelas);
            goto w0WvJ;
            xyVKu:
            $jam = substr($row->id_kjm, strlen($row->id_kjm) - 2, 1);
            goto HR4rV;
            YlNy7:
            vNj7_:
            goto QySRa;
            w0WvJ:
            $ret[$row->id_mapel][$jam][$row->jenis] = $row;
            goto YlNy7;
            QySRa:
        }
        goto nob01;
        ssX47:
        $ret = [];
        goto cnVaw;
        cnVaw:
        if (!$result) {
            goto BxB8H;
        }
        goto Z0nYS;
        u0LEU:
        $this->db->where_in("\x61\56\x69\x64\x5f\x6d\141\160\x65\154", $arr_mapel);
        goto eYuIz;
        AsiVb:
        $this->db->where("\141\x2e\151\x64\137\x6b\x65\x6c\141\x73", $id_kelas);
        goto rewnc;
        BTOKr:
        $this->db->from("\x6b\145\x6c\x61\163\x5f\152\x61\x64\x77\141\x6c\137\155\x61\164\x65\162\x69\x20\x61");
        goto Sys9q;
        yXcoG:
        $this->db->join("\155\141\163\x74\145\x72\137\147\x75\x72\x75\x20\x63", "\142\56\151\x64\x5f\147\165\x72\165\x3d\143\56\151\x64\x5f\147\x75\162\165", "\154\145\146\164");
        goto o3L60;
        fC1Ad:
        $this->db->where("\141\56\152\141\144\167\141\154\x5f\x6d\x61\164\x65\x72\151", $tgl);
        goto XVmae;
        Sys9q:
        $this->db->join("\x6b\145\x6c\x61\163\x5f\155\x61\164\x65\162\x69\40\x62", "\x61\x2e\x69\144\x5f\155\x61\164\x65\x72\x69\x3d\142\x2e\151\144\137\155\141\x74\145\162\151\40\x41\x4e\104\40\x62\x2e\163\x74\x61\x74\165\x73\75\61");
        goto yXcoG;
        nob01:
        TwdiK:
        goto CdK0j;
        XVmae:
        if (!(count($arr_mapel) > 0)) {
            goto s0sea;
        }
        goto u0LEU;
        CdK0j:
        BxB8H:
        goto ehowr;
        rewnc:
        $result = $this->db->get()->result();
        goto ssX47;
        o3L60:
        $this->db->join("\x6d\x61\x73\164\x65\162\137\x6d\x61\x70\145\154\40\x64", "\142\56\x69\x64\137\155\141\160\145\x6c\x3d\144\56\151\144\137\x6d\x61\160\x65\154", "\154\x65\x66\x74");
        goto fC1Ad;
        eYuIz:
        s0sea:
        goto AsiVb;
        mD1F5:
    }
    public function getRekapStatusMapel($id_siswa, $date, $id_mapel)
    {
        goto sRlCf;
        uMAli:
        $this->db->join("\x6b\x65\154\141\x73\x5f\152\141\x64\167\x61\154\x5f\x6d\141\x74\x65\x72\151\x20\142", "\x61\x2e\x69\x64\x5f\x6d\141\x74\x65\x72\151\75\x62\56\151\144\137\x6b\x6a\155", "\x6c\145\x66\x74");
        goto VShai;
        M6ux9:
        $this->db->where("\x61\x2e\x69\x64\137\155\141\160\145\154", $id_mapel);
        goto DN9rT;
        DN9rT:
        $query = $this->db->get()->result();
        goto q2agH;
        Qe3sz:
        $this->db->where("\104\x41\124\105\x28\141\x2e\x6c\x6f\147\137\x74\x69\x6d\x65\x29", $date);
        goto vaJpG;
        sRlCf:
        $this->db->select("\x61\56\152\141\x6d\x5f\153\x65\x2c\40\x61\56\154\x6f\x67\x5f\x74\x69\155\x65\x2c\x20\x63\x2e\152\x65\156\151\163\54\x20\x44\101\x59\x4f\x46\115\117\x4e\x54\x48\x28\141\x2e\154\157\147\137\164\151\x6d\x65\51\40\141\163\40\x74\141\156\x67\147\141\154\x2c\40\115\117\x4e\x54\110\50\141\x2e\154\157\147\x5f\x74\x69\x6d\x65\x29\x20\141\163\40\142\x75\x6c\x61\x6e\54\40\131\105\101\122\x28\x61\x2e\154\157\147\x5f\x74\151\155\145\51\x20\141\163\40\164\141\150\165\156\x2c\40\x54\111\x4d\105\x5f\106\x4f\122\x4d\x41\x54\50\141\x2e\154\x6f\147\x5f\164\151\155\145\x2c\40\42\45\110\x3a\x25\151\42\x29\40\x61\163\x20\152\141\x6d\x2c\40\144\x2e\156\141\155\x61\137\x6d\141\160\x65\154\x2c\x20\x64\x2e\x6b\x6f\x64\x65\x2c\x20\144\x2e\151\x64\x5f\x6d\x61\x70\145\x6c");
        goto jBIm1;
        VShai:
        $this->db->join("\153\145\154\141\163\137\x6d\141\x74\145\162\x69\40\x63", "\142\56\x69\144\x5f\x6d\141\164\145\162\x69\75\143\x2e\x69\144\137\155\x61\164\x65\162\151", "\x6c\145\146\x74");
        goto Lt70A;
        q2agH:
        return $query;
        goto y7gJV;
        vaJpG:
        $this->db->where("\x61\x2e\151\x64\137\163\151\x73\x77\x61", $id_siswa);
        goto M6ux9;
        Lt70A:
        $this->db->join("\155\x61\x73\x74\145\162\x5f\x6d\141\160\x65\x6c\40\144", "\143\x2e\151\144\137\155\141\x70\x65\154\75\x64\x2e\x69\144\x5f\x6d\141\160\145\154", "\154\x65\x66\x74");
        goto Qe3sz;
        jBIm1:
        $this->db->from("\154\157\x67\137\155\141\164\145\162\x69\40\x61");
        goto uMAli;
        y7gJV:
    }
    public function getRekapStatusMateri($id_siswa, $arr_id_kjm)
    {
        goto lSKSU;
        owTo4:
        $query = $this->db->get()->result();
        goto Yn9Xw;
        XLYdQ:
        $this->db->join("\155\x61\163\164\x65\x72\137\x6d\x61\160\145\154\x20\x64", "\x63\56\x69\x64\137\x6d\x61\x70\x65\154\x3d\x64\x2e\151\x64\x5f\155\x61\160\x65\x6c", "\154\145\x66\x74");
        goto CTDQh;
        jsneL:
        $this->db->from("\154\157\147\x5f\155\141\x74\x65\x72\151\40\x61");
        goto stFw_;
        T0oeQ:
        $this->db->where_in("\141\x2e\x69\144\137\155\141\164\x65\162\x69", $arr_id_kjm);
        goto owTo4;
        Yn9Xw:
        return $query;
        goto cM8Wv;
        lSKSU:
        $this->db->select("\141\56\x6a\x61\155\x5f\x6b\145\x2c\x20\x61\56\154\x6f\x67\x5f\164\151\155\145\x2c\x20\x61\56\146\151\156\x69\163\150\x5f\164\x69\x6d\145\54\x20\x63\x2e\x6a\x65\156\151\163\x2c\x20\104\x41\x59\117\x46\115\x4f\x4e\124\x48\x28\141\56\x6c\x6f\147\137\x74\151\x6d\145\x29\40\x61\x73\40\164\x61\x6e\147\147\141\x6c\54\40\x4d\x4f\x4e\x54\x48\50\x61\56\154\x6f\147\x5f\164\151\155\x65\51\40\141\x73\40\x62\165\154\141\156\54\40\x59\x45\x41\x52\x28\141\x2e\154\157\x67\137\164\x69\155\145\51\40\x61\x73\x20\x74\141\x68\165\156\54\40\x54\x49\115\x45\x5f\106\x4f\x52\x4d\101\124\x28\141\56\x6c\x6f\147\137\x74\x69\155\145\x2c\x20\x22\45\x48\72\x25\151\x22\51\40\x61\x73\x20\152\141\155\54\40\x64\56\156\x61\155\x61\137\155\141\x70\145\x6c\54\x20\144\56\x6b\x6f\144\x65\54\40\144\x2e\x69\144\137\x6d\x61\x70\145\154");
        goto jsneL;
        stFw_:
        $this->db->join("\153\145\154\141\163\137\x6a\x61\x64\167\141\x6c\137\x6d\141\164\145\162\x69\x20\x62", "\141\x2e\151\x64\x5f\155\141\x74\x65\x72\x69\75\142\x2e\x69\144\x5f\153\x6a\x6d", "\154\x65\x66\x74");
        goto x8915;
        CTDQh:
        $this->db->where("\141\x2e\x69\x64\x5f\x73\x69\163\x77\x61", $id_siswa);
        goto T0oeQ;
        x8915:
        $this->db->join("\153\x65\154\x61\163\137\x6d\141\x74\x65\162\x69\x20\143", "\142\56\x69\144\x5f\x6d\141\164\x65\162\x69\75\143\x2e\x69\144\x5f\155\x61\164\145\x72\x69", "\154\145\x66\164");
        goto XLYdQ;
        cM8Wv:
    }
    public function getRekapBulananMapel($id_siswa, $bulan)
    {
        goto y5yaX;
        QZS0n:
        $this->db->where("\x4d\x4f\116\x54\x48\50\141\56\154\157\147\137\164\151\155\145\51", $bulan);
        goto eqsb8;
        WwUfi:
        $this->db->from("\x6c\x6f\147\137\155\x61\164\x65\x72\151\40\x61");
        goto QZS0n;
        THcKU:
        return $query;
        goto ec8uS;
        eqsb8:
        $this->db->where("\141\x2e\x69\144\137\163\x69\163\x77\141", $id_siswa);
        goto V9QFH;
        V9QFH:
        $query = $this->db->get()->result();
        goto THcKU;
        y5yaX:
        $this->db->select("\x61\x2e\x6c\157\147\x5f\164\151\x6d\145\40\x61\x73\x20\x6d\x61\x74\145\162\x69\x2c\x20\x44\x41\131\117\106\x4d\x4f\x4e\124\x48\50\141\56\x6c\157\147\137\164\x69\x6d\145\x29\x20\x61\163\40\164\141\156\x67\x67\141\154\x2c\40\x4d\x4f\116\124\110\x28\x61\56\154\157\x67\137\164\151\x6d\145\x29\40\x61\163\40\x62\165\x6c\x61\x6e\x2c\x20\131\105\x41\122\x28\x61\x2e\154\157\147\x5f\x74\151\x6d\145\x29\40\141\163\40\x74\x61\150\x75\x6e\x2c\40\x54\111\115\x45\x5f\106\117\x52\115\101\124\50\x61\x2e\x6c\157\x67\x5f\x74\151\x6d\x65\54\x20\42\x25\110\x3a\x25\151\42\x29\40\141\x73\40\x6a\x61\x6d\x5f\x6d\141\x74\145\x72\151");
        goto WwUfi;
        ec8uS:
    }
    public function getRekapBulananSiswa($id_mapel = null, $id_kelas, $tahun, $bulan)
    {
        goto seYaJ;
        xSyOX:
        $this->db->join("\x6c\x6f\x67\x5f\x6d\x61\164\145\162\x69\40\x62", "\142\56\151\144\137\155\141\x74\x65\162\x69\75\141\x2e\x69\x64\137\153\152\155");
        goto v136g;
        jh_fX:
        $result = $this->db->get()->result();
        goto ANfCM;
        ANfCM:
        $ret = [];
        goto iD0O9;
        U4K30:
        OwUaP:
        goto l6jmy;
        ZA3lI:
        return $ret;
        goto JDN_8;
        v136g:
        $this->db->where("\141\56\151\x64\137\x6b\145\154\x61\x73", $id_kelas);
        goto PwBjR;
        aZj_Z:
        V8iIq:
        goto bTo2u;
        nHYgz:
        $this->db->from("\153\145\x6c\x61\x73\x5f\x6a\141\x64\x77\x61\x6c\x5f\155\x61\x74\145\x72\x69\x20\x61");
        goto xSyOX;
        iD0O9:
        if (!$result) {
            goto vPpaE;
        }
        goto QWSgo;
        seYaJ:
        $this->db->select("\x61\x2e\x2a\54\40\x62\x2e\154\157\x67\x5f\x74\151\155\145\x2c\40\142\x2e\x66\151\156\x69\x73\x68\x5f\164\x69\155\x65\54\40\142\x2e\x69\x64\137\x73\x69\163\x77\x61\x2c\x20\142\56\x6a\141\155\x5f\153\145\54\x20\104\x41\131\117\106\x4d\x4f\116\x54\x48\x28\x62\x2e\x6c\x6f\x67\137\x74\151\x6d\145\51\x20\x61\x73\x20\164\x61\x6e\147\147\x61\x6c\x2c\40\115\117\116\x54\110\x28\142\x2e\154\x6f\x67\x5f\x74\x69\x6d\145\x29\40\141\163\40\142\x75\x6c\x61\156\x2c\40\131\x45\101\122\x28\142\x2e\x6c\157\x67\137\164\x69\x6d\145\x29\40\141\x73\40\x74\141\150\165\x6e\x2c\x20\124\111\115\x45\137\106\x4f\122\x4d\101\x54\50\142\x2e\x6c\x6f\x67\137\x74\151\155\x65\54\x20\42\45\x48\x3a\45\151\x22\x29\x20\x61\x73\40\x6a\141\155");
        goto nHYgz;
        PwBjR:
        if (!($id_mapel != null)) {
            goto OwUaP;
        }
        goto n3RNn;
        n3RNn:
        $this->db->where("\x61\56\151\x64\x5f\x6d\141\x70\145\x6c", $id_mapel);
        goto U4K30;
        l6jmy:
        $this->db->where("\115\117\116\124\110\x28\x61\56\152\x61\x64\x77\141\154\x5f\x6d\x61\x74\x65\162\151\51", $bulan)->where("\131\105\101\x52\x28\141\56\x6a\141\x64\167\141\154\x5f\x6d\x61\x74\x65\x72\151\x29", $tahun);
        goto jh_fX;
        QWSgo:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa][$row->jenis][$row->jadwal_materi][$row->jam_ke] = $row;
            osaHZ:
        }
        goto aZj_Z;
        bTo2u:
        vPpaE:
        goto ZA3lI;
        JDN_8:
    }
    public function getRekapBulananMateri($id_siswa, $date, $id_materi)
    {
        goto SMxMm;
        ltie6:
        $this->db->from("\154\x6f\147\x5f\x6d\x61\x74\145\162\151\40\x61");
        goto y0pqK;
        oJp45:
        $this->db->where("\141\x2e\x69\144\137\x73\x69\163\x77\141", $id_siswa);
        goto T0RIr;
        SMxMm:
        $this->db->select("\x61\56\154\157\x67\x5f\x74\151\x6d\x65\54\40\104\101\131\x4f\x46\115\117\x4e\124\110\50\141\56\x6c\x6f\x67\x5f\x74\x69\155\145\x29\x20\x61\163\40\164\141\x6e\x67\147\141\154\54\x20\x4d\x4f\116\124\110\50\x61\x2e\x6c\x6f\147\x5f\x74\151\x6d\x65\x29\40\x61\x73\x20\x62\165\x6c\141\156\x2c\40\131\105\x41\122\50\141\56\x6c\x6f\x67\x5f\x74\x69\155\145\51\x20\x61\163\x20\x74\141\150\x75\x6e\x2c\40\x54\111\115\105\137\x46\117\122\x4d\x41\x54\50\141\56\x6c\157\147\137\164\x69\x6d\x65\54\x20\42\45\x48\x3a\45\151\42\x29\40\x61\163\x20\x6a\141\155");
        goto ltie6;
        V99ci:
        ttm4f:
        goto L8a6z;
        ZcNyG:
        xtiAI:
        goto V99ci;
        T0RIr:
        $this->db->where("\141\56\x69\144\137\155\x61\164\145\x72\x69", $id_materi);
        goto FRYpC;
        L8a6z:
        return $ret;
        goto V18xG;
        FRYpC:
        $result = $this->db->get()->row();
        goto o1l2n;
        y0pqK:
        $this->db->where("\104\x41\124\x45\x28\x61\x2e\154\157\147\x5f\164\151\x6d\145\x29", $date);
        goto oJp45;
        tMvl0:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa] = $row;
            fPJFL:
        }
        goto ZcNyG;
        EPB7M:
        if (!$result) {
            goto ttm4f;
        }
        goto tMvl0;
        o1l2n:
        $ret = [];
        goto EPB7M;
        V18xG:
    }
    public function getRekapMateriSemester($id_materi = null)
    {
        goto SfGS1;
        Sq515:
        if (!$result) {
            goto ViEcs;
        }
        goto ntHEA;
        k2pAm:
        return $ret;
        goto aPEvo;
        ntHEA:
        foreach ($result as $key => $row) {
            goto u_H_m;
            O04Nq:
            TybH4:
            goto AXOEz;
            u_H_m:
            $bulan = substr($row->id_materi, strlen($row->id_materi) - 6, 2);
            goto OvKEA;
            R7P9d:
            $ret[$jenis][$row->id_siswa][$bulan][$tgl][$jam] = $row;
            goto O04Nq;
            MCjZW:
            $jenis = substr($row->id_materi, strlen($row->id_materi) - 1, 1);
            goto R7P9d;
            QUqcu:
            $jam = substr($row->id_materi, strlen($row->id_materi) - 2, 1);
            goto MCjZW;
            OvKEA:
            $tgl = substr($row->id_materi, strlen($row->id_materi) - 4, 2);
            goto QUqcu;
            AXOEz:
        }
        goto xgLAG;
        ahvFv:
        $this->db->where("\x69\x64\x5f\x6d\141\164\x65\x72\151", $id_materi);
        goto FiuEx;
        mYJAH:
        if (!($id_materi != null)) {
            goto LYAP3;
        }
        goto ahvFv;
        SfGS1:
        $this->db->select("\x69\144\137\163\151\163\x77\141\54\40\151\x64\137\154\x6f\147\54\40\x6c\157\147\137\x74\151\155\145\x2c\x20\146\151\156\x69\x73\150\137\164\151\x6d\145\x2c\x20\x69\144\137\x6d\141\x74\x65\162\x69\54" . "\40\104\101\x59\117\106\x4d\x4f\x4e\124\x48\50\x6c\157\147\x5f\164\151\155\145\51\40\141\163\40\x74\x61\x6e\x67\147\x61\154\x2c" . "\x20\115\x4f\x4e\124\110\50\154\x6f\147\x5f\x74\x69\155\x65\x29\40\x61\163\40\142\165\x6c\141\156\54" . "\40\131\x45\x41\x52\50\154\157\x67\137\x74\x69\x6d\x65\x29\x20\141\163\40\x74\x61\x68\165\x6e\54" . "\x20\x54\111\115\105\x5f\106\x4f\x52\115\101\x54\x28\x6c\x6f\x67\x5f\164\151\155\x65\x2c\x20\42\x25\x48\x3a\45\151\x22\x29\x20\141\x73\40\x6a\141\155\54" . "\x20\156\151\154\141\x69");
        goto EA2es;
        xgLAG:
        w4jiP:
        goto l43xN;
        ja9Rd:
        $result = $this->db->get()->result();
        goto ZQ91t;
        l43xN:
        ViEcs:
        goto k2pAm;
        EA2es:
        $this->db->from("\154\157\147\x5f\155\x61\164\145\x72\x69");
        goto mYJAH;
        ZQ91t:
        $ret = [];
        goto Sq515;
        FiuEx:
        LYAP3:
        goto ja9Rd;
        aPEvo:
    }
    public function getStrukturKelas($kelas)
    {
        $this->db->where("\x69\x64\137\153\145\154\x61\163", $kelas);
        return $this->db->get("\153\145\154\x61\x73\x5f\x73\x74\x72\x75\x6b\x74\165\162")->row();
    }
    public function getCatatanKelas($kelas, $id_tp, $id_smt)
    {
        goto KBddc;
        R6SDk:
        $this->db->where("\x74\171\160\x65", "\61");
        goto eUBUj;
        O7plA:
        return $this->db->get("\x6b\145\154\x61\163\137\143\x61\x74\141\164\x61\x6e\137\x77\x61\x6c\151")->result();
        goto VIIm9;
        KBddc:
        $this->db->where("\x69\144\x5f\153\145\154\x61\163", $kelas);
        goto R6SDk;
        eUBUj:
        $this->db->where("\x69\144\137\x74\x70", $id_tp);
        goto SesAD;
        SesAD:
        $this->db->where("\151\144\x5f\x73\x6d\164", $id_smt);
        goto O7plA;
        VIIm9:
    }
    public function getCatatanSiswa($id_tp, $id_smt, $id_kelas)
    {
        goto NFjre;
        KMCwA:
        $this->db->join("\x6d\141\163\x74\x65\162\x5f\163\x69\x73\x77\141\40\142", "\x62\56\x69\144\137\163\151\163\x77\141\75\x61\56\151\144\137\x73\x69\163\x77\x61");
        goto IIwFY;
        IIwFY:
        $this->db->where("\x61\56\151\144\137\x74\160", $id_tp);
        goto ENV2d;
        kNnYS:
        return $this->db->get()->result();
        goto qzzy9;
        MKccO:
        $this->db->where("\x61\56\x69\x64\x5f\153\145\154\141\x73", $id_kelas);
        goto kNnYS;
        ENV2d:
        $this->db->where("\141\56\x69\144\137\x73\155\164", $id_smt);
        goto MKccO;
        Y0VMS:
        $this->db->from("\x6b\145\x6c\141\163\x5f\163\151\x73\x77\141\x20\141");
        goto KMCwA;
        NFjre:
        $this->db->select("\x62\x2e\151\144\x5f\163\x69\163\167\141\54\x20\142\56\156\x61\155\x61\54\40\142\56\156\151\x73\x2c\40\142\x2e\156\x69\163\x6e\x2c\x20\142\x2e\x66\x6f\164\157\54" . "\x20\x28\123\x45\114\105\103\x54\40\x43\117\x55\x4e\124\50\151\144\x5f\x73\x69\163\167\141\51\x20\106\122\117\115\x20\153\145\x6c\x61\163\137\x63\141\164\x61\x74\141\156\137\167\x61\154\151\x20\x63\40\x57\x48\x45\122\x45\40\x63\56\x69\144\x5f\x73\x69\x73\x77\x61\40\x3d\x20\142\56\151\144\x5f\163\151\163\x77\141\x20\101\x4e\104\40\143\56\164\171\x70\x65\40\x3d\40\x27\62\x27\51\40\101\x53\x20\x6a\x6d\154\137\x63\141\x74\x61\x74\x61\x6e");
        goto Y0VMS;
        qzzy9:
    }
    public function getCatatanMapelBySiswa($id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto o5qkn;
        Rkzmx:
        return $this->db->get()->result();
        goto MHue0;
        DwRq8:
        $this->db->where("\x61\x2e\151\144\x5f\153\x65\154\x61\163", $id_kelas);
        goto p6YkJ;
        oGHdl:
        $this->db->join("\155\141\163\x74\145\x72\x5f\147\x75\162\165\40\142", "\x62\56\151\144\137\147\165\162\165\75\141\56\x69\144\137\147\165\x72\165");
        goto DwRq8;
        aJYIv:
        $this->db->from("\x6b\145\x6c\x61\x73\x5f\143\x61\164\x61\164\x61\x6e\x5f\155\x61\x70\x65\154\x20\x61");
        goto oGHdl;
        o5qkn:
        $this->db->select("\141\x2e\52\54\x20\142\x2e\x6e\x61\x6d\141\x5f\147\165\x72\x75");
        goto aJYIv;
        p6YkJ:
        $this->db->or_where("\x61\56\x69\144\x5f\163\x69\x73\167\x61", $id_siswa);
        goto S75hG;
        S75hG:
        $this->db->where("\141\x2e\151\x64\137\x74\x70", $id_tp);
        goto vMSlv;
        vMSlv:
        $this->db->where("\x61\56\151\x64\137\x73\155\164", $id_smt);
        goto Rkzmx;
        MHue0:
    }
    public function getCatatanSiswaBySiswa($id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto SJ8Im;
        Z9QTO:
        $this->db->join("\x6a\x61\142\x61\164\x61\x6e\137\147\x75\x72\165\x20\x62", "\142\56\151\144\137\153\x65\x6c\141\163\x3d\x61\56\x69\x64\137\x6b\145\x6c\141\163");
        goto gK85x;
        lKmQx:
        $this->db->or_where("\141\56\151\144\x5f\x73\x69\163\x77\x61", $id_siswa);
        goto diksy;
        SJ8Im:
        $this->db->select("\x61\56\x2a\x2c\x20\143\56\156\x61\x6d\x61\137\x67\x75\162\x75");
        goto rD2aX;
        Toqte:
        return $this->db->get()->result();
        goto dJS6V;
        rD2aX:
        $this->db->from("\153\145\x6c\141\x73\x5f\x63\x61\x74\141\x74\141\156\x5f\x77\x61\x6c\x69\x20\x61");
        goto Z9QTO;
        diksy:
        $this->db->where("\141\x2e\151\144\137\x74\160", $id_tp);
        goto lc4PM;
        gK85x:
        $this->db->join("\x6d\141\163\x74\145\162\x5f\x67\165\x72\x75\40\x63", "\x63\x2e\151\x64\x5f\147\165\x72\x75\x3d\142\56\x69\x64\137\x67\x75\x72\165");
        goto WH5qM;
        WH5qM:
        $this->db->where("\x61\56\x69\x64\137\x6b\145\x6c\x61\x73", $id_kelas);
        goto lKmQx;
        lc4PM:
        $this->db->where("\141\x2e\151\x64\137\x73\x6d\164", $id_smt);
        goto Toqte;
        dJS6V:
    }
    public function getAllCatatanSiswa($id_siswa, $id_tp, $id_smt)
    {
        goto K0000;
        MidQN:
        $this->db->where("\151\x64\x5f\x73\x6d\164", $id_smt);
        goto Y8rfu;
        Op6cV:
        $this->db->where("\x69\x64\x5f\163\151\x73\167\141", $id_siswa);
        goto Ld9Jz;
        Emn0D:
        $this->db->from("\153\145\x6c\x61\163\137\x63\x61\164\141\164\141\156\137\167\x61\154\x69");
        goto Op6cV;
        K0000:
        $this->db->select("\52");
        goto Emn0D;
        Y8rfu:
        return $this->db->get()->result();
        goto crApO;
        Ld9Jz:
        $this->db->where("\151\x64\x5f\164\x70", $id_tp);
        goto MidQN;
        crApO:
    }
    public function getCatatanMapelKelas($kelas, $mapel, $id_tp, $id_smt)
    {
        goto vB9N7;
        gRl1K:
        $this->db->order_by("\164\x67\x6c", "\104\x45\x53\103");
        goto SnObj;
        GYarC:
        $this->db->where("\151\144\x5f\x6d\x61\160\145\154", $mapel);
        goto HDYYl;
        J3l_1:
        $this->db->where("\151\144\137\x73\x6d\x74", $id_smt);
        goto gRl1K;
        hLlA4:
        $this->db->where("\151\x64\x5f\x74\160", $id_tp);
        goto J3l_1;
        HDYYl:
        $this->db->where("\x74\171\x70\145", "\61");
        goto hLlA4;
        SnObj:
        return $this->db->get("\x6b\x65\x6c\x61\x73\137\143\141\164\x61\x74\x61\156\137\155\x61\160\x65\154")->result();
        goto CAHeX;
        vB9N7:
        $this->db->where("\151\x64\x5f\153\145\154\141\163", $kelas);
        goto GYarC;
        CAHeX:
    }
    public function getCatatanMapelSiswa($id_tp, $id_smt, $id_kelas, $id_mapel)
    {
        goto XusAi;
        tsQpW:
        $this->db->where("\141\56\x69\x64\137\163\155\164", $id_smt);
        goto Y3o0m;
        JyEIA:
        return $this->db->get()->result();
        goto LxLeU;
        pamAf:
        $this->db->from("\x6b\145\x6c\x61\x73\137\163\151\x73\167\141\40\141");
        goto N19Bq;
        N19Bq:
        $this->db->join("\x6d\141\x73\x74\x65\x72\x5f\x73\151\163\x77\141\x20\x62", "\142\x2e\x69\x64\137\x73\151\163\x77\141\75\141\x2e\151\x64\137\163\151\163\x77\x61", "\x6c\x65\146\164");
        goto yqJzK;
        yqJzK:
        $this->db->where("\x61\56\151\x64\x5f\164\160", $id_tp);
        goto tsQpW;
        Y3o0m:
        $this->db->where("\141\x2e\x69\x64\137\153\x65\x6c\141\163", $id_kelas);
        goto JyEIA;
        XusAi:
        $this->db->select("\142\x2e\x69\144\137\163\x69\x73\167\x61\x2c\x20\x62\56\156\x61\155\x61\54\40\x62\x2e\x6e\151\x73\x2c\x20\x62\56\156\151\x73\x6e\54\40\x62\56\146\x6f\x74\157\54" . "\x20\x28\x53\x45\114\105\x43\124\x20\x43\x4f\125\x4e\124\x28\151\x64\x5f\x73\151\x73\167\141\x29\x20\106\x52\117\x4d\x20\153\x65\154\x61\x73\x5f\143\x61\x74\x61\164\x61\x6e\137\155\x61\160\145\154\x20\x63\40\x57\x48\x45\x52\105\x20\x63\x2e\x69\144\137\163\x69\163\x77\141\40\x3d\40\142\x2e\151\x64\x5f\x73\x69\163\167\x61\40\101\x4e\104\40\x63\x2e\x69\x64\137\155\141\160\145\154\x20\x3d\40" . $id_mapel . "\40\x41\116\104\x20\143\56\164\171\160\145\40\x3d\x20\47\62\47\51\x20\101\123\40\x6a\x6d\154\137\x63\141\x74\x61\x74\141\x6e");
        goto pamAf;
        LxLeU:
    }
    public function getAllCatatanMapelSiswa($id_siswa, $id_mapel, $id_tp, $id_smt)
    {
        goto rMLx_;
        xM5I3:
        $this->db->from("\153\x65\x6c\x61\163\137\x63\x61\x74\141\164\x61\x6e\x5f\x6d\x61\160\145\154");
        goto rFVh1;
        rFVh1:
        $this->db->where("\151\144\x5f\x73\x69\163\x77\141", $id_siswa);
        goto xury7;
        ryA0r:
        $this->db->where("\x69\x64\137\163\155\x74", $id_smt);
        goto V1Fw9;
        V1Fw9:
        $this->db->order_by("\164\147\x6c", "\x44\105\x53\x43");
        goto jgsCP;
        jgsCP:
        return $this->db->get()->result();
        goto rfu7n;
        gAr4e:
        $this->db->where("\x69\x64\137\x74\x70", $id_tp);
        goto ryA0r;
        rMLx_:
        $this->db->select("\52");
        goto xM5I3;
        xury7:
        $this->db->where("\x69\x64\137\155\x61\160\145\154", $id_mapel);
        goto gAr4e;
        rfu7n:
    }
    public function getCatatanMapelSiswaDetail($id_catatan)
    {
        goto NV9Sv;
        Nxvjb:
        return $this->db->get()->row();
        goto ueQZe;
        HfjfQ:
        $this->db->join("\155\x61\x73\164\x65\x72\x5f\x67\165\162\165\x20\x62", "\142\x2e\151\144\x5f\x67\165\162\165\75\x61\x2e\x69\x64\x5f\x67\x75\162\x75");
        goto q9l6Y;
        YVAMn:
        $this->db->where("\x61\56\151\x64\x5f\x63\x61\164\x61\164\141\x6e", $id_catatan);
        goto Nxvjb;
        NVMPy:
        $this->db->join("\154\145\166\x65\154\x5f\x67\x75\x72\x75\x20\144", "\144\x2e\151\144\137\154\x65\x76\x65\154\75\x63\56\x69\x64\x5f\x6a\x61\x62\x61\164\141\156");
        goto DPnH7;
        q9l6Y:
        $this->db->join("\x6a\x61\142\141\164\x61\x6e\x5f\x67\165\162\x75\40\x63", "\x63\x2e\x69\x64\137\x67\165\162\x75\75\141\x2e\151\144\x5f\147\x75\162\165");
        goto NVMPy;
        DPnH7:
        $this->db->join("\x6d\141\x73\x74\x65\x72\137\x6d\141\x70\x65\154\x20\x65", "\145\x2e\x69\x64\137\x6d\x61\x70\145\154\x3d\x61\x2e\151\144\137\155\141\x70\x65\x6c");
        goto YVAMn;
        kiaSk:
        $this->db->from("\x6b\x65\x6c\141\163\x5f\143\x61\x74\141\164\141\x6e\137\x6d\x61\x70\x65\x6c\x20\141");
        goto HfjfQ;
        NV9Sv:
        $this->db->select("\141\x2e\52\54\40\x62\x2e\156\141\x6d\x61\x5f\147\165\162\x75\54\40\144\56\154\x65\x76\145\x6c\x20\141\x73\x20\152\x61\x62\x61\164\x61\x6e\x2c\x20\x65\x2e\x6e\141\x6d\141\137\155\x61\x70\145\x6c\x2c\40\145\56\153\157\144\145");
        goto kiaSk;
        ueQZe:
    }
    public function getCatatanKelasSiswaDetail($id_catatan)
    {
        goto Zu7L_;
        Fo_qT:
        $this->db->join("\x6d\141\x73\164\x65\x72\x5f\x67\x75\x72\x75\40\143", "\143\x2e\151\144\x5f\147\x75\162\x75\x3d\x62\56\x69\x64\137\x67\x75\162\165");
        goto ZVawl;
        QBtXn:
        $this->db->where("\x61\x2e\151\x64\137\143\141\x74\x61\x74\x61\x6e", $id_catatan);
        goto qhSB3;
        tGExS:
        $this->db->from("\153\145\x6c\x61\x73\x5f\x63\141\x74\x61\164\x61\156\x5f\x77\x61\x6c\151\40\141");
        goto NYmrQ;
        JODKv:
        $this->db->join("\155\x61\x73\164\x65\162\137\153\x65\x6c\141\163\40\146", "\x66\x2e\x69\x64\137\x6b\145\x6c\x61\x73\75\141\x2e\x69\x64\x5f\x6b\145\x6c\x61\163");
        goto QBtXn;
        Zu7L_:
        $this->db->select("\x61\x2e\52\54\40\143\x2e\156\x61\155\x61\x5f\147\165\162\165\54\x20\145\x2e\154\145\166\145\154\x20\x61\x73\40\152\x61\x62\141\164\x61\x6e\54\40\146\56\x6e\x61\155\141\137\153\x65\154\x61\x73");
        goto tGExS;
        ZVawl:
        $this->db->join("\154\145\x76\x65\154\x5f\147\165\x72\x75\40\145", "\x65\x2e\151\x64\137\154\x65\166\x65\x6c\x3d\x64\x2e\151\x64\137\x6a\x61\142\x61\x74\x61\x6e");
        goto JODKv;
        qhSB3:
        return $this->db->get()->row();
        goto XqBC0;
        NYmrQ:
        $this->db->join("\152\x61\x62\x61\x74\141\156\x5f\147\165\x72\165\x20\x62", "\142\56\151\x64\137\x6b\x65\154\141\x73\x3d\141\56\151\144\x5f\153\145\154\141\163");
        goto Fo_qT;
        XqBC0:
    }
    public function getReading($table, $id_catatan)
    {
        goto xz6zF;
        g0n0B:
        return $this->db->get($table)->row();
        goto KQzct;
        bdNDI:
        $this->db->where("\x69\x64\x5f\143\x61\x74\141\164\141\x6e", $id_catatan);
        goto g0n0B;
        xz6zF:
        $this->db->select("\162\145\141\144\151\156\147\54\x20\164\171\x70\145\x2c\40\162\145\141\x64\x65\144");
        goto bdNDI;
        KQzct:
    }
}
