<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Log_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("\165\163\145\162\x5f\141\x67\145\x6e\x74");
    }
    public function saveLog($type, $desc)
    {
        goto qqNN2;
        inrzk:
        $ip = $this->input->ip_address();
        goto W2TaF;
        pRRIE:
        if ($this->agent->is_browser()) {
            goto pgoSa;
        }
        goto cQUB1;
        RIMem:
        goto OpWsU;
        goto OnURj;
        W2TaF:
        $this->insertLog($user_id, $group->id, $group->name, $type, $desc, $agent, $os, $ip);
        goto MSEw3;
        owsxO:
        $agent = "\x44\141\x74\x61\x20\165\x73\x65\162\x20\147\x61\147\x61\154\40\x64\151\x20\x64\141\x70\141\164\153\141\156";
        goto sdjMZ;
        E8C6W:
        $agent = $this->agent->browser() . "\40" . $this->agent->version();
        goto RIMem;
        hN6vZ:
        $agent = $this->agent->mobile();
        goto xz5Tl;
        XJSFL:
        $os = $this->agent->platform();
        goto inrzk;
        qqNN2:
        $user_id = $this->ion_auth->user()->row()->id;
        goto mrUq8;
        xz5Tl:
        OpWsU:
        goto XJSFL;
        QCbOF:
        pgoSa:
        goto E8C6W;
        OnURj:
        yhiJi:
        goto hN6vZ;
        mrUq8:
        $group = $this->ion_auth->get_users_groups($user_id)->row();
        goto pRRIE;
        sdjMZ:
        goto OpWsU;
        goto QCbOF;
        cQUB1:
        if ($this->agent->is_mobile()) {
            goto yhiJi;
        }
        goto owsxO;
        MSEw3:
    }
    private function insertLog($id_user, $group_id, $group_name, $type, $desc, $agent, $os, $ip)
    {
        $data = array("\x69\x64\137\165\x73\x65\x72" => $id_user, "\151\144\x5f\147\x72\157\165\x70" => $group_id, "\x6e\141\155\x65\x5f\x67\x72\x6f\165\x70" => $group_name, "\154\x6f\147\137\x64\x65\163\143" => $desc, "\x61\144\x64\x72\x65\x73\163" => $ip, "\141\x67\145\x6e\x74" => $agent, "\x64\145\x76\x69\143\x65" => $os);
        $this->db->insert("\x6c\x6f\x67", $data);
    }
    public function loadNotifikasi()
    {
    }
    public function loadChat()
    {
    }
    public function loadAktifitas($limit = null)
    {
        goto meViN;
        zT7sZ:
        $this->db->from("\154\x6f\147\x20\x61");
        goto ldpBQ;
        hNBm7:
        $this->db->select("\x61\x2e\52\x2c\40\x62\56\x66\x69\162\163\x74\137\156\141\x6d\145\54\40\142\x2e\x6c\x61\163\x74\x5f\x6e\141\x6d\x65\x2c\40\x64\x2e\x6e\x61\155\x65");
        goto zT7sZ;
        Q5mb9:
        $this->db->limit($limit, 0);
        goto sgtkw;
        OKI3f:
        $result = $this->db->get()->result();
        goto sDXLh;
        meViN:
        $this->db->query("\123\x45\x54\x20\x53\x51\x4c\137\102\x49\x47\137\x53\x45\114\x45\x43\x54\123\75\61");
        goto hNBm7;
        zsvq4:
        if (!($limit != null)) {
            goto NSZR7;
        }
        goto Q5mb9;
        AOos9:
        $this->db->join("\x67\162\157\165\x70\x73\x20\x64", "\144\x2e\x69\144\75\141\x2e\x69\x64\x5f\x67\x72\x6f\165\160");
        goto zsvq4;
        sDXLh:
        return $result;
        goto QJ0wk;
        sgtkw:
        NSZR7:
        goto mY81v;
        mY81v:
        $this->db->order_by("\141\x2e\x6c\157\x67\x5f\x74\151\155\x65", "\104\105\123\103");
        goto OKI3f;
        ldpBQ:
        $this->db->join("\x75\x73\x65\x72\163\x20\x62", "\x62\x2e\x69\144\75\141\56\151\x64\137\165\x73\x65\162", "\154\145\146\164");
        goto AOos9;
        QJ0wk:
    }
    public function loadAktifitasSiswa($limit = null)
    {
        goto kTFZ9;
        J5wXi:
        $this->db->where("\141\56\151\x64\137\x67\x72\157\165\x70", "\63");
        goto ZQbL6;
        UnFIJ:
        $this->db->select("\141\x2e\52\x2c\x20\x62\x2e\146\151\x72\163\x74\137\156\141\x6d\145\x2c\40\x62\x2e\154\x61\x73\x74\x5f\156\141\x6d\x65\54\x20\x64\56\x6e\x61\155\x65");
        goto tRkIe;
        rJtNs:
        if (!($limit != null)) {
            goto rtoWH;
        }
        goto JIqvd;
        YNm_D:
        $this->db->join("\x75\x73\145\162\163\40\142", "\142\56\x69\x64\75\141\x2e\x69\144\x5f\x75\x73\x65\162", "\154\145\x66\164");
        goto ggZkM;
        ZQbL6:
        $this->db->order_by("\x61\56\154\157\147\x5f\164\151\x6d\x65", "\x44\105\x53\103");
        goto af8rF;
        JIqvd:
        $this->db->limit($limit, 0);
        goto JNu3y;
        eYPHX:
        return $result;
        goto dCjtb;
        ggZkM:
        $this->db->join("\147\162\x6f\165\x70\x73\x20\144", "\x64\x2e\151\x64\x3d\x61\56\151\x64\137\147\x72\157\x75\160");
        goto rJtNs;
        tRkIe:
        $this->db->from("\x6c\157\147\40\141");
        goto YNm_D;
        JNu3y:
        rtoWH:
        goto J5wXi;
        kTFZ9:
        $this->db->query("\123\x45\x54\x20\123\121\114\x5f\102\x49\107\x5f\x53\x45\114\x45\x43\124\x53\75\61");
        goto UnFIJ;
        af8rF:
        $result = $this->db->get()->result();
        goto eYPHX;
        dCjtb:
    }
}
