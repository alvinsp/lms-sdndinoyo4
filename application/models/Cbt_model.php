<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbt_model extends CI_Model
{
    public function get_where($table, $pk, $id, $join = null, $order = null)
    {
        goto RV4d1;
        YfZjq:
        KG_Fg:
        goto SJAMb;
        kSZ1k:
        foreach ($order as $field => $sort) {
            $this->db->order_by($field, $sort);
            BGpqt:
        }
        goto YfZjq;
        bE9lo:
        if (!($join !== null)) {
            goto p_UDq;
        }
        goto VDplZ;
        Uzv3i:
        $this->db->where($pk, $id);
        goto bE9lo;
        VDplZ:
        foreach ($join as $table => $field) {
            $this->db->join($table, $field);
            R_mhI:
        }
        goto Z6Uhj;
        Z6Uhj:
        J80Bl:
        goto UV7SR;
        RV4d1:
        $this->db->select("\52");
        goto QOUhb;
        jb_rk:
        if (!($order !== null)) {
            goto Ed3k9;
        }
        goto kSZ1k;
        GFsZN:
        return $query;
        goto lKvIH;
        UV7SR:
        p_UDq:
        goto jb_rk;
        QOUhb:
        $this->db->from($table);
        goto Uzv3i;
        a29wT:
        $query = $this->db->get();
        goto GFsZN;
        SJAMb:
        Ed3k9:
        goto a29wT;
        lKvIH:
    }
    public function saveLog($id_siswa, $id_jadwal, $type, $desc)
    {
        goto f6SsT;
        JtnFw:
        $ip = $this->input->ip_address();
        goto tMWfK;
        tAzN2:
        if ($agent == "\x75\156\x6b\x6e\x6f\x77\156") {
            goto pYml_;
        }
        goto zstRk;
        zstRk:
        $os = $this->agent->platform();
        goto JtnFw;
        DB1Y8:
        pYml_:
        goto EcInN;
        PFaUM:
        goto sBDo7;
        goto DB1Y8;
        ovEs6:
        $agent = $this->agent->mobile();
        goto P2J8I;
        aCIzX:
        goto tp8vY;
        goto B3sT6;
        B3sT6:
        tJmzJ:
        goto ovEs6;
        ZSJCZ:
        $agent = "\165\156\153\x6e\x6f\x77\x6e";
        goto S6wrG;
        S6wrG:
        goto tp8vY;
        goto bGxiI;
        bGxiI:
        HtwID:
        goto oWQ3d;
        P2J8I:
        tp8vY:
        goto tAzN2;
        f6SsT:
        if ($this->agent->is_browser()) {
            goto HtwID;
        }
        goto Is5PR;
        oWQ3d:
        $agent = $this->agent->browser() . "\40" . $this->agent->version();
        goto aCIzX;
        Is5PR:
        if ($this->agent->is_mobile()) {
            goto tJmzJ;
        }
        goto ZSJCZ;
        EcInN:
        return "\145\162\162\157\162";
        goto lzMiz;
        lzMiz:
        sBDo7:
        goto Bl_jD;
        tMWfK:
        return $this->insertLog($id_siswa, $id_jadwal, $type, $desc, $agent, $os, $ip);
        goto PFaUM;
        Bl_jD:
    }
    private function insertLog($id_siswa, $id_jadwal, $type, $desc, $agent, $os, $ip)
    {
        goto FCb2m;
        gZCzz:
        return $insert;
        goto VP5Oc;
        wzWwg:
        $insert = $this->db->update("\x6c\157\147\x5f\165\152\151\x61\156");
        goto xD65y;
        rFm4P:
        A9hMj:
        goto ZnJyX;
        xD65y:
        thwTS:
        goto gZCzz;
        TaNAm:
        $data = array("\x69\144\x5f\x6c\x6f\x67" => $id_siswa . "\x30" . $id_jadwal . $type, "\151\144\x5f\x73\151\x73\167\141" => $id_siswa, "\151\144\x5f\x6a\141\x64\x77\141\154" => $id_jadwal, "\x6c\x6f\x67\137\x74\171\160\x65" => $type, "\x6c\x6f\x67\137\144\145\163\x63" => $desc, "\141\x64\x64\162\x65\x73\x73" => $ip, "\x61\x67\145\x6e\164" => $agent, "\x64\x65\x76\x69\143\145" => $os);
        goto uJoKx;
        gO_sf:
        $this->db->where("\151\144\x5f\x6c\157\x67", $id_siswa . "\60" . $id_jadwal . $type);
        goto wzWwg;
        ZnJyX:
        $this->db->set("\x6c\x6f\x67\x5f\164\171\x70\145", $type);
        goto S3B3q;
        uJoKx:
        $insert = $this->db->insert("\x6c\157\x67\137\x75\152\x69\x61\156", $data);
        goto qzDSI;
        qzDSI:
        goto thwTS;
        goto rFm4P;
        FCb2m:
        $log = $this->db->where("\x69\144\x5f\x6c\x6f\147", $id_siswa . "\x30" . $id_jadwal . $type)->get("\x6c\157\147\137\x75\x6a\x69\x61\x6e")->row();
        goto Fnwl8;
        S3B3q:
        $this->db->set("\154\157\x67\x5f\x64\x65\x73\x63", $desc);
        goto gO_sf;
        Fnwl8:
        if ($log != null) {
            goto A9hMj;
        }
        goto TaNAm;
        VP5Oc:
    }
    public function getDataSiswa($username, $id_tp, $id_smt)
    {
        goto Z0fuU;
        Dtl_i:
        $this->db->join("\x6d\x61\163\164\x65\162\137\x6b\145\x6c\x61\163\40\x63", "\x62\x2e\151\144\137\x6b\145\154\141\163\75\143\x2e\151\x64\x5f\153\x65\x6c\x61\x73\x20\x41\x4e\104\x20\x63\x2e\x69\144\x5f\164\x70\x3d" . $id_tp . "\40\101\116\x44\40\143\56\151\x64\137\x73\155\x74\75" . $id_smt, "\154\145\x66\164");
        goto sjVqM;
        MB1bE:
        $query = $this->db->get()->row();
        goto aSkwB;
        aSkwB:
        return $query;
        goto cLXVy;
        ViM3W:
        $this->db->from("\155\141\163\164\145\x72\x5f\163\151\163\x77\141\40\x61");
        goto tp_l1;
        tp_l1:
        $this->db->join("\x6b\x65\154\x61\163\x5f\x73\x69\x73\x77\141\x20\x62", "\141\56\151\x64\137\163\x69\163\x77\x61\x3d\142\56\x69\x64\x5f\x73\151\163\167\141\x20\101\116\104\x20\x62\x2e\x69\x64\x5f\x74\160\x3d" . $id_tp . "\40\x41\116\x44\x20\x62\56\x69\144\137\x73\x6d\164\75" . $id_smt, "\154\145\x66\164");
        goto Dtl_i;
        sjVqM:
        $this->db->join("\143\x62\x74\x5f\x73\x65\x73\151\x5f\163\151\x73\167\x61\40\144", "\141\56\151\144\x5f\x73\x69\x73\x77\141\x3d\144\56\163\x69\x73\167\141\137\x69\x64", "\x6c\x65\x66\x74");
        goto Mfzlj;
        Z0fuU:
        $this->db->select("\x61\56\151\x64\x5f\163\151\163\x77\x61\x2c\x20\141\x2e\x6e\x69\163\x6e\54\40\141\56\156\151\x73\x2c\x20\x61\56\x6e\141\155\x61\54\x20\141\56\152\x65\x6e\x69\163\x5f\153\x65\x6c\x61\x6d\x69\156\x2c\x20\141\56\165\x73\x65\x72\156\x61\155\x65\54\x20\141\56\x70\x61\163\x73\167\x6f\x72\x64\x2c\x20\x61\x2e\x61\x67\141\x6d\141\54\40\x61\56\146\x6f\x74\157\54" . "\x20\x62\x2e\x69\x64\137\x6b\x65\x6c\141\163\x5f\x73\x69\163\x77\141\54\40\142\56\x69\x64\137\x74\160\x2c\40\142\x2e\x69\144\x5f\x73\x6d\164\54\40\142\56\151\x64\x5f\163\151\163\167\x61\54\40\142\x2e\x69\x64\137\x6b\145\x6c\141\x73\x2c" . "\x20\x63\56\x6e\141\155\x61\137\x6b\x65\154\x61\x73\54\40\143\56\x6b\x6f\144\145\x5f\x6b\x65\x6c\x61\x73\x2c\x20\x63\56\x6c\145\x76\145\154\x5f\151\x64\x2c\40" . "\40\144\56\x6b\x65\154\x61\x73\137\x69\x64\x2c\x20\144\56\162\165\141\156\x67\x5f\x69\144\x2c\40\x64\56\x73\145\x73\151\x5f\151\144");
        goto ViM3W;
        Mfzlj:
        $this->db->where("\x75\x73\x65\x72\x6e\x61\155\x65", $username);
        goto MB1bE;
        cLXVy:
    }
    public function getDataSiswaById($id_tp, $id_smt, $idSiswa)
    {
        goto Fee3b;
        Kvc2A:
        $this->db->join("\x63\142\x74\x5f\162\165\141\x6e\x67\x20\151", "\x69\x2e\x69\144\x5f\162\165\x61\x6e\147\x3d\150\56\x69\144\137\x72\165\x61\156\x67", "\154\145\x66\x74");
        goto v2WLN;
        q4a0w:
        $this->db->join("\143\x62\164\137\x6b\145\x6c\x61\163\137\162\x75\141\156\x67\40\x68", "\x68\x2e\151\x64\x5f\x6b\x65\x6c\141\x73\75\x61\56\151\x64\137\153\x65\x6c\141\163", "\x6c\145\x66\x74");
        goto Kvc2A;
        cJBIF:
        $this->db->join("\155\141\163\x74\x65\x72\137\163\151\x73\167\141\x20\142", "\142\56\151\144\x5f\163\x69\163\x77\141\75\x61\56\x69\x64\137\163\x69\x73\167\x61", "\x6c\145\146\x74");
        goto ijFiC;
        ijFiC:
        $this->db->join("\x63\x62\164\137\163\145\163\x69\137\x73\151\163\167\141\40\143", "\143\x2e\163\151\x73\167\141\137\x69\x64\x3d\x61\56\151\144\137\x73\151\x73\x77\141", "\x6c\145\146\164");
        goto P92Jz;
        da9aF:
        $this->db->join("\x6d\x61\163\164\145\x72\137\x6b\x65\154\x61\163\40\x66", "\146\x2e\x69\x64\137\x6b\x65\x6c\x61\163\x3d\141\56\151\144\137\x6b\x65\x6c\x61\163", "\x6c\x65\x66\164");
        goto al7SH;
        VRZ6f:
        return $this->db->get()->row();
        goto skZkT;
        yDVxb:
        $this->db->join("\x63\x62\x74\x5f\163\145\163\x69\40\x65", "\145\56\151\144\x5f\163\x65\x73\x69\75\x63\x2e\x73\145\x73\x69\137\151\144", "\154\145\x66\x74");
        goto da9aF;
        P92Jz:
        $this->db->join("\143\142\x74\137\162\x75\141\156\147\x20\x64", "\x64\x2e\x69\144\x5f\162\x75\x61\x6e\147\x3d\143\56\x72\x75\x61\156\x67\x5f\x69\144", "\x6c\145\146\x74");
        goto yDVxb;
        v2WLN:
        $this->db->join("\x63\x62\164\x5f\163\145\163\x69\x20\x6a", "\152\x2e\151\144\137\163\x65\163\x69\x3d\x68\x2e\x69\144\x5f\163\145\163\x69", "\154\x65\x66\x74");
        goto tJdfY;
        m2rD1:
        $this->db->where("\141\56\151\144\x5f\163\x69\x73\x77\141", $idSiswa);
        goto VRZ6f;
        al7SH:
        $this->db->join("\x63\x62\164\137\156\157\155\x6f\x72\x5f\x70\145\163\145\162\164\x61\x20\x67", "\x67\56\151\144\137\x73\151\163\167\x61\x3d\141\56\151\x64\x5f\x73\151\x73\167\x61\x20\x41\x4e\104\x20\x67\x2e\151\144\137\164\160\75" . $id_tp, "\x6c\x65\x66\164");
        goto q4a0w;
        iGx70:
        $this->db->where("\141\x2e\x69\144\137\163\155\x74", $id_smt);
        goto m2rD1;
        tJdfY:
        $this->db->where("\x61\56\151\x64\137\164\160", $id_tp);
        goto iGx70;
        q94u6:
        $this->db->from("\153\x65\x6c\141\x73\137\163\x69\x73\x77\x61\40\141");
        goto cJBIF;
        Fee3b:
        $this->db->select("\x62\x2e\x69\x64\137\x73\x69\163\167\x61\x2c\40\142\x2e\x6e\x61\155\141\x2c\40\x62\x2e\152\x65\156\151\x73\137\153\145\154\141\x6d\151\156\x2c\x20\142\56\x6e\151\163\x2c\x20\142\x2e\x6e\x69\163\156\x2c\40\142\56\x75\x73\145\162\156\x61\155\145\x2c\x20\x62\x2e\160\x61\163\x73\167\157\162\144\x2c" . "\x20\x62\x2e\146\x6f\x74\x6f\54\40\x63\x2e\163\x65\x73\151\x5f\151\144\54\x20\x64\x2e\x6b\x6f\x64\145\137\162\x75\141\x6e\x67\x2c\x20\145\56\x6b\x6f\x64\145\x5f\163\145\x73\151\54\40\x66\56\x6e\x61\x6d\x61\137\153\x65\154\141\x73\x2c\40\x67\x2e\x6e\157\x6d\157\x72\x5f\160\145\x73\145\x72\x74\x61\54" . "\40\x68\x2e\x73\145\164\x5f\x73\x69\163\167\141\x2c\x20\151\x2e\153\x6f\x64\x65\x5f\162\x75\x61\x6e\147\x20\x61\163\40\162\165\x61\x6e\147\137\153\145\x6c\141\163\x2c\x20\152\56\153\x6f\x64\145\137\163\x65\x73\x69\x20\x61\163\x20\x73\x65\x73\151\137\153\x65\154\141\x73");
        goto q94u6;
        skZkT:
    }
    public function getWaktuSesiById($id_sesi)
    {
        goto TUNqm;
        cjkhZ:
        $result = $this->db->get("\x63\x62\164\137\x73\x65\163\x69")->row();
        goto Aei3L;
        TUNqm:
        $this->db->select("\x2a");
        goto dbEvG;
        dbEvG:
        $this->db->where("\x69\144\137\x73\145\x73\x69", $id_sesi);
        goto cjkhZ;
        Aei3L:
        return $result;
        goto VxUzX;
        VxUzX:
    }
    public function getAllRuang()
    {
        goto fJnDe;
        fJnDe:
        $result = $this->db->get("\x63\142\164\137\x72\165\x61\156\x67")->result();
        goto c4L5o;
        BzUTW:
        foreach ($result as $key => $row) {
            $ret[$row->id_ruang] = $row->kode_ruang;
            koWBb:
        }
        goto y7A0b;
        wtMih:
        if (!$result) {
            goto diSwK;
        }
        goto BzUTW;
        y7A0b:
        vLWe8:
        goto FmKmy;
        SELhl:
        return $ret;
        goto izLCN;
        c4L5o:
        $ret = [];
        goto wtMih;
        FmKmy:
        diSwK:
        goto SELhl;
        izLCN:
    }
    public function getKelasByLevel($level, $arrKelas)
    {
        goto mayez;
        dZwaL:
        $this->db->where("\x6c\x65\x76\x65\x6c\x5f\151\x64", $level);
        goto CCn0U;
        PvHjw:
        $result = $this->db->get("\x6d\x61\163\x74\x65\162\137\153\x65\154\x61\x73")->result();
        goto TMEfh;
        TMEfh:
        return $result;
        goto EnU13;
        mayez:
        $this->db->select("\151\x64\137\x6b\145\x6c\x61\x73\x2c\40\153\157\144\145\x5f\153\145\x6c\x61\x73");
        goto dZwaL;
        CCn0U:
        $this->db->where_in("\151\x64\x5f\153\145\154\141\163", $arrKelas);
        goto PvHjw;
        EnU13:
    }
    public function getAllJurusan()
    {
        goto y5zT6;
        X01i4:
        EZ470:
        goto z11BL;
        CNdwk:
        if (!$result) {
            goto IkR2T;
        }
        goto rEGdG;
        rEGdG:
        foreach ($result as $key => $row) {
            $ret[$row->id_jurusan] = $row->kode_jurusan;
            A1uHJ:
        }
        goto X01i4;
        vGN7c:
        return $ret;
        goto d0_Od;
        y5zT6:
        $result = $this->db->get("\155\141\163\164\x65\x72\x5f\152\x75\x72\165\x73\141\156")->result();
        goto CNdwk;
        z11BL:
        IkR2T:
        goto vGN7c;
        d0_Od:
    }
    public function getPengawas($id_pengawas)
    {
        goto KyT7T;
        KyT7T:
        $this->db->select("\x69\144\x5f\160\145\x6e\147\141\167\141\x73\54\40\151\x64\137\152\141\x64\167\x61\154\54\x20\x69\144\137\164\x70\54\40\151\144\x5f\163\x6d\164\54\x20\151\144\137\x72\x75\x61\156\x67\x2c\40\x69\144\x5f\163\x65\163\151\x2c\x20\x69\144\x5f\147\165\162\165");
        goto Qvy6Z;
        Qvy6Z:
        $this->db->from("\x63\142\164\137\160\145\156\x67\141\x77\x61\x73");
        goto XAQ9Q;
        XAQ9Q:
        $this->db->where("\x69\144\x5f\x70\x65\x6e\x67\x61\167\141\163", $id_pengawas);
        goto kwh7t;
        kwh7t:
        return $this->db->get()->row();
        goto yU7fp;
        yU7fp:
    }
    public function getPengawasByGuru($tp, $smt, $id_guru)
    {
        goto Bnmap;
        gC8Aq:
        $this->db->where("\x61\56\151\x64\137\x73\x6d\164", $smt);
        goto csrAw;
        csrAw:
        $this->db->like("\141\x2e\151\x64\x5f\x67\165\162\165", $id_guru);
        goto WW227;
        XLtIA:
        $this->db->join("\143\142\x74\x5f\x62\141\x6e\x6b\137\x73\157\x61\x6c\40\x63", "\142\x2e\151\x64\137\142\141\156\x6b\75\143\x2e\x69\x64\137\x62\x61\x6e\153");
        goto fvTd5;
        fvTd5:
        return $this->db->get()->result();
        goto S19Lf;
        kYGL3:
        $this->db->where("\x61\x2e\x69\144\x5f\164\160", $tp);
        goto gC8Aq;
        WW227:
        $this->db->join("\x63\x62\x74\137\x6a\141\x64\x77\x61\154\40\142", "\x62\x2e\x69\144\x5f\152\x61\x64\x77\141\x6c\x3d\141\x2e\151\x64\x5f\152\x61\144\x77\141\154");
        goto XLtIA;
        Bnmap:
        $this->db->select("\141\x2e\x69\144\x5f\x70\145\156\147\141\167\x61\x73\x2c\x20\141\x2e\x69\x64\137\x6a\x61\144\167\x61\154\x2c\x20\x61\56\151\144\137\164\x70\54\x20\x61\56\x69\144\137\x73\x6d\164\x2c\40\x61\56\x69\144\137\162\165\141\x6e\147\54\40\x61\56\151\x64\137\x73\x65\x73\x69\x2c\x20\x61\56\151\x64\x5f\x67\x75\x72\165\54" . "\40\142\x2e\151\144\x5f\x6a\141\144\167\141\154\x2c\40\x62\x2e\x74\147\154\137\x6d\165\154\141\x69\x2c\x20\x62\x2e\164\x67\x6c\x5f\163\x65\154\x65\163\141\151\x2c\x20\x63\x2e\x62\x61\x6e\153\137\x6b\157\x64\x65");
        goto OMaMS;
        OMaMS:
        $this->db->from("\143\142\164\137\160\145\x6e\x67\x61\x77\x61\x73\x20\x61");
        goto kYGL3;
        S19Lf:
    }
    public function getPengawasByJadwal($tp, $smt, $id_jadwal, $sesi = null, $ruang = null)
    {
        goto g2Brm;
        b9tuP:
        $this->db->from("\x63\x62\164\x5f\160\x65\x6e\x67\141\167\141\x73");
        goto DrT2v;
        DrT2v:
        $this->db->where("\151\x64\137\x74\x70", $tp);
        goto V56pB;
        jvQlO:
        return $result;
        goto B4RQG;
        V56pB:
        $this->db->where("\x69\x64\x5f\163\x6d\164", $smt);
        goto ymkVp;
        boq4u:
        $result = $this->db->get()->result();
        goto jvQlO;
        ymkVp:
        $this->db->where("\x69\144\137\152\x61\x64\x77\141\x6c", $id_jadwal);
        goto fL8ph;
        YVPFq:
        $this->db->where("\x69\x64\137\x73\145\x73\151", $sesi);
        goto SjuQg;
        fL8ph:
        if (!($sesi != null)) {
            goto zjZIs;
        }
        goto YVPFq;
        PSlus:
        if (!($ruang != null)) {
            goto Cankt;
        }
        goto y2X8j;
        QHeY4:
        Cankt:
        goto boq4u;
        y2X8j:
        $this->db->where("\x69\144\x5f\x72\x75\x61\x6e\x67", $ruang);
        goto QHeY4;
        g2Brm:
        $this->db->select("\x69\x64\x5f\x70\x65\156\147\x61\x77\x61\163\x2c\40\x69\144\137\147\165\x72\165");
        goto b9tuP;
        SjuQg:
        zjZIs:
        goto PSlus;
        B4RQG:
    }
    public function getAllPengawas($tp, $smt, $ruang = null, $sesi = null)
    {
        goto XF7ZU;
        B42Ej:
        $result = $this->db->get()->result();
        goto QtB4W;
        ejtz3:
        foreach ($result as $key => $row) {
            $ret[$row->id_jadwal][$row->id_ruang][$row->id_sesi] = $row;
            snSf8:
        }
        goto HP2Yr;
        ianzc:
        mjdUZ:
        goto MDPwk;
        iMTeb:
        $this->db->from("\143\142\x74\x5f\x70\145\x6e\x67\141\x77\x61\163");
        goto zgAVQ;
        MDPwk:
        return $ret;
        goto Y4Xw4;
        xfDj0:
        qBdVz:
        goto cVLB3;
        wy6su:
        if (!($ruang != null)) {
            goto qBdVz;
        }
        goto M7LZW;
        iavgo:
        $this->db->where("\151\x64\137\x73\x6d\164", $smt);
        goto wy6su;
        XF7ZU:
        $this->db->select("\151\x64\x5f\160\145\x6e\147\x61\x77\x61\x73\x2c\x20\x69\144\x5f\x6a\141\x64\x77\141\x6c\x2c\40\x69\x64\137\162\x75\x61\x6e\147\x2c\40\x69\x64\137\163\x65\163\x69\x2c\x20\x69\144\137\147\x75\162\165");
        goto iMTeb;
        N_UP6:
        $this->db->where("\151\144\x5f\x73\145\x73\151", $sesi);
        goto JSsSO;
        H7Sw0:
        if (!$result) {
            goto mjdUZ;
        }
        goto ejtz3;
        M7LZW:
        $this->db->where("\151\x64\x5f\162\165\141\x6e\147", $ruang);
        goto xfDj0;
        zgAVQ:
        $this->db->where("\x69\x64\137\164\160", $tp);
        goto iavgo;
        HP2Yr:
        QV9bP:
        goto ianzc;
        cVLB3:
        if (!($sesi != null)) {
            goto Iekbf;
        }
        goto N_UP6;
        JSsSO:
        Iekbf:
        goto B42Ej;
        QtB4W:
        $ret = [];
        goto H7Sw0;
        Y4Xw4:
    }
    public function getDistinctRuang($tp, $smt, $arrKelas)
    {
        goto zvMRn;
        mn9Rj:
        $this->db->select("\141\56\x72\165\x61\156\147\x5f\x69\144\54\x20\141\56\163\x65\163\151\x5f\151\x64\x2c\40\x62\56\153\157\144\x65\x5f\x72\165\x61\156\x67\54\x20\x62\x2e\x6e\141\155\x61\137\162\x75\x61\156\147\x2c\40\x63\56\153\157\144\x65\137\x73\145\163\151\x2c\x20\x63\x2e\x6e\141\x6d\141\137\x73\x65\x73\x69");
        goto H2exr;
        guQUw:
        $this->db->where_in("\153\145\154\141\163\x5f\x69\x64", $arrKelas);
        goto ggCoh;
        BxhTV:
        $this->db->join("\143\x62\x74\137\x73\145\x73\x69\40\143", "\x63\56\x69\x64\137\x73\x65\163\x69\75\x61\x2e\x73\145\163\x69\x5f\151\144");
        goto EmHWd;
        Piulw:
        $ret = [];
        goto Xb6Mi;
        wqSq1:
        EsSDZ:
        goto p2Qvc;
        LcjeZ:
        foreach ($result as $key => $row) {
            $ret[$row->ruang_id][$row->sesi_id] = $row;
            BtisS:
        }
        goto wqSq1;
        DM20D:
        $this->db->order_by("\143\56\x6e\x61\155\141\x5f\x73\145\x73\151", "\x41\123\103");
        goto ztzvH;
        H2exr:
        $this->db->from("\143\142\164\137\163\x65\163\151\137\163\x69\163\167\141\x20\x61");
        goto xOBwN;
        zvMRn:
        $this->db->distinct("\x61\56\162\x75\x61\156\147\x5f\x69\x64");
        goto mn9Rj;
        p2Qvc:
        I424D:
        goto Y5g_K;
        ggCoh:
        FpeLt:
        goto Bh_4l;
        ztzvH:
        $result = $this->db->get()->result();
        goto Piulw;
        xOBwN:
        $this->db->join("\143\x62\164\x5f\162\x75\141\x6e\147\x20\142", "\142\x2e\151\144\x5f\x72\165\141\x6e\x67\75\141\56\x72\x75\x61\156\147\137\151\x64");
        goto BxhTV;
        Bh_4l:
        $this->db->order_by("\x62\56\156\141\155\141\x5f\x72\x75\141\x6e\147", "\x41\x53\x43");
        goto DM20D;
        Y5g_K:
        return $ret;
        goto t3oEF;
        Xb6Mi:
        if (!$result) {
            goto I424D;
        }
        goto LcjeZ;
        EmHWd:
        if (!(count($arrKelas) > 0)) {
            goto FpeLt;
        }
        goto guQUw;
        t3oEF:
    }
    public function getKelasUjian($kelas_id)
    {
        goto itaEx;
        Edlse:
        rRwDS:
        goto TJeFo;
        EUO0y:
        if (!$result) {
            goto uOSX5;
        }
        goto PmFot;
        itaEx:
        $this->db->select("\x6b\x65\154\x61\163\137\x69\144\x2c\40\162\165\141\156\147\137\x69\x64\x2c\x20\163\x65\163\151\137\151\144");
        goto Ai8VN;
        TXjqY:
        $ret = [];
        goto EUO0y;
        Zqwg6:
        $result = $this->db->get()->result();
        goto TXjqY;
        Ai8VN:
        $this->db->from("\x63\x62\x74\x5f\163\145\163\151\137\163\151\163\167\141");
        goto AzWOU;
        PmFot:
        foreach ($result as $key => $row) {
            $ret[$row->ruang_id][$row->sesi_id][] = $row->kelas_id;
            LseSV:
        }
        goto Edlse;
        AzWOU:
        $this->db->where("\153\x65\154\141\163\137\x69\144", $kelas_id);
        goto Zqwg6;
        dIRQH:
        return $ret;
        goto oCMRv;
        TJeFo:
        uOSX5:
        goto dIRQH;
        oCMRv:
    }
    public function getDistinctKelasLevel($tp, $smt, $arrLevel)
    {
        goto LxXru;
        ezh5H:
        $this->db->from("\x6d\x61\x73\x74\145\x72\137\153\145\x6c\x61\x73");
        goto QFffS;
        QFffS:
        $this->db->where("\x69\x64\137\164\x70", $tp);
        goto rZuTR;
        lZkD0:
        return $result;
        goto vHQmP;
        nYFSu:
        $result = $this->db->get()->result();
        goto lZkD0;
        LxXru:
        $this->db->select("\151\144\137\x6b\x65\154\141\163\x2c\x20\x6c\145\166\x65\x6c\137\x69\x64");
        goto tVKyJ;
        tVKyJ:
        $this->db->distinct();
        goto ezh5H;
        rZuTR:
        $this->db->where("\151\144\x5f\163\x6d\164", $smt);
        goto QcnJA;
        QcnJA:
        $this->db->where_in("\154\x65\x76\145\154\x5f\x69\x64", $arrLevel);
        goto nYFSu;
        vHQmP:
    }
    public function getAllJenisUjian()
    {
        goto VduaV;
        VduaV:
        $result = $this->db->get("\x63\142\x74\137\x6a\145\156\x69\163")->result();
        goto sOFlQ;
        lzC11:
        if (!$result) {
            goto H2Jl1;
        }
        goto H80Ew;
        sOFlQ:
        $ret[''] = "\112\145\x6e\x69\x73\40\x50\x65\x6e\151\154\141\151\x61\x6e\40\x3a";
        goto lzC11;
        Vhc7R:
        return $ret;
        goto yUjNL;
        xNYFr:
        H2Jl1:
        goto Vhc7R;
        R3RAq:
        XEEOe:
        goto xNYFr;
        H80Ew:
        foreach ($result as $key => $row) {
            $ret[$row->id_jenis] = $row->kode_jenis;
            oC7pX:
        }
        goto R3RAq;
        yUjNL:
    }
    public function getAllJenisUjianByArrJenis($arrJenis)
    {
        goto foLa5;
        foLa5:
        $this->db->where_in("\x69\144\x5f\152\x65\156\x69\163", $arrJenis);
        goto xUe2q;
        TVB3b:
        return $ret;
        goto L4h13;
        aFKW6:
        $ret[''] = "\112\x65\156\x69\x73\x20\x50\145\x6e\151\x6c\x61\151\141\156\x20\x3a";
        goto x3l5A;
        xUe2q:
        $result = $this->db->get("\x63\x62\x74\137\152\x65\x6e\151\163")->result();
        goto aFKW6;
        x3l5A:
        if (!$result) {
            goto HJNen;
        }
        goto AKkez;
        lmoUU:
        HJNen:
        goto TVB3b;
        Dn2lc:
        umaWf:
        goto lmoUU;
        AKkez:
        foreach ($result as $key => $row) {
            $ret[$row->id_jenis] = $row->kode_jenis;
            MXqra:
        }
        goto Dn2lc;
        L4h13:
    }
    public function getPengawasHariIni($tgl)
    {
        goto CsHVA;
        stE6v:
        return $this->db->get()->result();
        goto iZN5H;
        XdiTN:
        $this->db->join("\x63\142\x74\137\x70\x65\x6e\147\x61\x77\141\163\x20\x62", "\142\56\151\x64\x5f\x6a\141\144\167\x61\x6c\x3d\x61\56\x69\x64\137\x6a\x61\x64\x77\141\154");
        goto Nd7o2;
        hMIlV:
        $this->db->where("\x61\56\164\x67\x6c\137\x6d\x75\x6c\x61\x69\40\x3c\x3d\x20\47{$tgl}\x27\40\101\116\x44\x20\x61\x2e\164\x67\154\x5f\x73\145\x6c\145\163\x61\151\x20\76\x3d\40\x27{$tgl}\47");
        goto XdiTN;
        CsHVA:
        $this->db->from("\x63\142\164\137\x6a\x61\144\167\141\154\40\x61");
        goto hMIlV;
        Nd7o2:
        $this->db->where("\x73\x74\x61\x74\165\163", "\61");
        goto stE6v;
        iZN5H:
    }
    public function getJadwalGuru($tp, $smt, $guru)
    {
        goto ns4ad;
        hGXp3:
        $this->db->where("\x61\x2e\151\144\x5f\163\x6d\x74", $smt);
        goto J11WJ;
        ns4ad:
        $this->db->select("\x61\x2e\x69\144\x5f\152\141\x64\x77\141\154\54\x20\x61\56\x74\147\x6c\x5f\x6d\x75\154\141\x69\54\x20\x62\56\x62\141\x6e\x6b\x5f\153\x6f\x64\145\x2c\x20\x62\56\x62\x61\156\153\x5f\153\x65\154\x61\x73");
        goto KGVH7;
        KGVH7:
        $this->db->from("\x63\x62\x74\x5f\x6a\x61\x64\167\141\x6c\40\141");
        goto nz829;
        J11WJ:
        return $this->db->get()->result();
        goto ZYPTa;
        iS5m6:
        $this->db->where("\x61\x2e\151\144\x5f\x74\160", $tp);
        goto hGXp3;
        nz829:
        $this->db->join("\x63\142\164\137\x62\141\x6e\x6b\137\163\157\x61\154\40\x62", "\142\x2e\151\144\137\142\141\156\x6b\75\141\56\x69\144\137\x62\x61\x6e\x6b\40\x41\116\x44\x20\142\x2e\142\141\156\153\137\x67\x75\x72\165\137\151\x64\75" . $guru);
        goto iS5m6;
        ZYPTa:
    }
    public function getJadwalKelas($tp, $smt)
    {
        goto YjShu;
        dpnxs:
        $this->db->from("\x63\x62\164\x5f\x6a\141\144\x77\141\154\40\x61");
        goto kLxFc;
        KzuO8:
        $this->db->where("\x61\56\151\144\137\x74\160", $tp);
        goto Rp6Ki;
        YjShu:
        $this->db->select("\x61\56\x69\144\x5f\x6a\141\x64\x77\141\154\x2c\40\x61\x2e\164\147\x6c\137\x6d\x75\x6c\141\x69\x2c\x20\142\56\142\x61\x6e\x6b\x5f\x6b\x6f\x64\x65\x2c\40\142\x2e\x62\x61\x6e\153\x5f\153\x65\x6c\141\163");
        goto dpnxs;
        dtQgz:
        return $this->db->get()->result();
        goto o16rk;
        Rp6Ki:
        $this->db->where("\141\56\151\144\x5f\x73\x6d\x74", $smt);
        goto dtQgz;
        kLxFc:
        $this->db->join("\x63\142\164\137\142\141\x6e\x6b\137\163\157\141\x6c\40\142", "\x62\x2e\x69\144\137\x62\x61\x6e\x6b\x3d\141\x2e\x69\144\x5f\x62\x61\x6e\153");
        goto KzuO8;
        o16rk:
    }
    public function getJadwalByJenis($jenis, $level, $dari, $sampai)
    {
        goto rRing;
        t1PpD:
        $this->db->order_by("\x61\56\152\x61\x6d\137\153\x65", "\101\x53\x43");
        goto EBvmU;
        rRing:
        $this->db->select("\x61\56\x69\x64\x5f\x6a\141\144\167\141\x6c\x2c\40\141\56\x69\144\x5f\x62\x61\156\153\x2c\x20\x61\x2e\x69\144\137\x6a\x65\x6e\x69\163\x2c\40\141\56\164\x67\154\137\155\x75\x6c\141\151\54\x20\x61\56\164\147\154\x5f\x73\x65\154\x65\163\x61\x69\54\x20\x61\x2e\x6a\x61\x6d\x5f\x6b\x65\54" . "\40\143\56\x62\x61\x6e\x6b\137\153\157\144\145\x2c\40\x63\56\142\x61\x6e\x6b\137\154\145\166\x65\154\54\40\x63\56\x62\141\156\153\137\x6b\x65\x6c\x61\x73\54\40\142\56\x6b\x6f\144\145\137\x6a\x65\x6e\x69\x73\x2c\x20\142\x2e\156\x61\x6d\141\x5f\152\x65\156\x69\163\54\x20\144\x2e\153\157\144\x65\x2c\40\x64\x2e\156\141\x6d\x61\x5f\x6d\x61\x70\145\x6c");
        goto Yvu8r;
        U0XXc:
        $this->db->where("\x61\x2e\x74\147\154\137\155\x75\154\141\x69\40\x3c\75", $sampai);
        goto eySq8;
        eySq8:
        x9vJE:
        goto CCcBf;
        CLkCc:
        $this->db->where("\x61\x2e\164\147\x6c\x5f\155\165\154\141\x69\40\76\x3d", $dari);
        goto D37TD;
        cjLVp:
        FxcJ6:
        goto HmEg5;
        CCcBf:
        $this->db->order_by("\141\x2e\x74\147\x6c\x5f\x6d\165\x6c\x61\x69", "\101\123\103");
        goto t1PpD;
        oIh_t:
        return $result;
        goto HHC8D;
        gt8gN:
        if (!($sampai != null)) {
            goto x9vJE;
        }
        goto U0XXc;
        Y0wXJ:
        $this->db->join("\155\x61\x73\x74\145\x72\137\x6d\141\x70\145\x6c\x20\x64", "\x64\x2e\151\144\x5f\155\141\160\145\x6c\x3d\x63\x2e\x62\141\x6e\x6b\137\x6d\141\160\145\x6c\x5f\151\x64");
        goto DxnKA;
        Ktevq:
        $this->db->join("\143\142\164\137\x6a\145\x6e\151\163\40\x62", "\x62\x2e\151\x64\137\x6a\145\x6e\151\x73\x3d\141\56\151\x64\x5f\x6a\x65\156\151\x73");
        goto RPyW6;
        pptKH:
        $this->db->where("\143\x2e\142\x61\x6e\x6b\137\x6c\145\x76\145\x6c", $level);
        goto cjLVp;
        EBvmU:
        $result = $this->db->get()->result();
        goto oIh_t;
        HmEg5:
        if (!($dari != null)) {
            goto ZMGCA;
        }
        goto CLkCc;
        R7Rag:
        if (!($level != "\x30")) {
            goto FxcJ6;
        }
        goto pptKH;
        DxnKA:
        $this->db->where("\x61\56\151\x64\x5f\x6a\x65\156\151\x73", $jenis);
        goto R7Rag;
        RPyW6:
        $this->db->join("\x63\142\x74\137\x62\x61\x6e\x6b\x5f\163\x6f\141\x6c\40\x63", "\x63\56\151\x64\x5f\x62\x61\156\153\x3d\141\x2e\151\x64\137\142\x61\x6e\x6b");
        goto Y0wXJ;
        Yvu8r:
        $this->db->from("\x63\x62\164\x5f\152\x61\x64\167\x61\x6c\40\x61");
        goto Ktevq;
        D37TD:
        ZMGCA:
        goto gt8gN;
        HHC8D:
    }
    public function getAllJadwalByJenis($jenis, $tp, $smt)
    {
        goto cZFor;
        SmwyJ:
        xGqpz:
        goto CM_Gl;
        MpxtV:
        $this->db->where("\x61\56\x69\144\x5f\x73\x6d\164", $smt);
        goto J0umV;
        xAwkz:
        $this->db->order_by("\x61\x2e\152\141\155\137\153\x65", "\x41\123\103");
        goto qQ2zf;
        qQ2zf:
        $this->db->order_by("\143\56\142\141\156\x6b\x5f\x6c\145\166\x65\x6c", "\101\x53\x43");
        goto pbDOW;
        z9GOm:
        $this->db->from("\x63\142\x74\137\x6a\141\144\x77\x61\154\x20\x61");
        goto WUThf;
        WJP9D:
        $ret = [];
        goto P8bO_;
        juo2x:
        foreach ($result as $key => $row) {
            $ret[$row->tgl_mulai][$row->id_mapel][] = $row;
            TkChQ:
        }
        goto E8tLl;
        UEgnx:
        s6sLz:
        goto KLxU_;
        pbDOW:
        $result = $this->db->get()->result();
        goto WJP9D;
        cZFor:
        $this->db->select("\x61\x2e\151\144\137\152\x61\144\167\x61\x6c\x2c\x20\141\x2e\151\144\137\152\x65\156\x69\163\54\40\141\x2e\x74\147\x6c\137\x6d\165\154\x61\x69\x2c\x20" . "\x63\x2e\x62\x61\156\x6b\137\x6b\x6f\x64\x65\54\40\143\x2e\142\141\156\x6b\137\x6c\145\166\145\154\x2c\x20\x63\x2e\142\x61\156\153\137\x6b\x65\154\x61\163\x2c\40\x62\x2e\x6b\157\x64\145\x5f\152\145\x6e\151\x73\x2c\x20\142\56\156\x61\x6d\141\x5f\152\x65\156\x69\163\x2c\x20\x64\56\151\x64\137\x6d\141\x70\145\154\54\40\144\56\153\157\144\x65\x2c\x20\144\56\x6e\x61\155\x61\137\x6d\x61\x70\145\154");
        goto z9GOm;
        QCXKJ:
        $this->db->where("\141\56\x69\x64\x5f\x6a\145\156\151\x73", $jenis);
        goto SmwyJ;
        WUThf:
        $this->db->join("\x63\x62\164\137\152\x65\156\151\x73\40\x62", "\x62\56\151\144\137\x6a\145\x6e\x69\163\75\x61\56\151\x64\x5f\152\x65\156\x69\x73");
        goto C43Of;
        CM_Gl:
        $this->db->where("\x61\56\x69\x64\x5f\164\160", $tp);
        goto MpxtV;
        C43Of:
        $this->db->join("\143\x62\164\x5f\x62\x61\156\153\137\x73\x6f\141\x6c\40\x63", "\x63\x2e\x69\x64\x5f\142\x61\x6e\x6b\75\x61\x2e\x69\144\137\x62\141\x6e\x6b");
        goto oOtpJ;
        E8tLl:
        Jw141:
        goto UEgnx;
        oOtpJ:
        $this->db->join("\155\x61\163\164\145\x72\137\155\x61\160\145\x6c\x20\x64", "\144\x2e\151\144\x5f\x6d\141\x70\x65\154\75\143\56\x62\141\156\x6b\137\155\141\x70\x65\x6c\x5f\x69\x64");
        goto oILmf;
        oILmf:
        if (!($jenis != null)) {
            goto xGqpz;
        }
        goto QCXKJ;
        KLxU_:
        return $ret;
        goto Me1Xb;
        P8bO_:
        if (!$result) {
            goto s6sLz;
        }
        goto juo2x;
        J0umV:
        $this->db->order_by("\x61\x2e\x74\x67\x6c\x5f\x6d\165\x6c\141\151", "\101\x53\103");
        goto xAwkz;
        Me1Xb:
    }
    public function getAllBankSoal($guru = null)
    {
        goto dWmm2;
        fb8MQ:
        if (!$result) {
            goto DyXAu;
        }
        goto Y21Wo;
        Ih7ZG:
        d7yPE:
        goto QbANU;
        Hgd3N:
        y7HoG:
        goto esPJ2;
        dWmm2:
        $this->db->select("\151\x64\137\x62\141\156\153\x2c\x20\142\x61\x6e\x6b\x5f\x6b\157\144\x65");
        goto Yoab5;
        Y21Wo:
        foreach ($result as $key => $row) {
            $ret[$row->id_bank] = $row->bank_kode;
            h32We:
        }
        goto Hgd3N;
        Yoab5:
        if (!($guru !== null)) {
            goto d7yPE;
        }
        goto K5X30;
        QbANU:
        $result = $this->db->get("\x63\x62\x74\x5f\x62\x61\x6e\153\137\x73\x6f\141\154")->result();
        goto GUyFb;
        K5X30:
        $this->db->where("\x62\141\156\x6b\137\x67\x75\162\x75\x5f\x69\x64", $guru);
        goto Ih7ZG;
        GUyFb:
        $ret["\x30"] = "\120\151\154\151\x68\x20\x42\x61\x6e\x6b\40\123\157\141\x6c\x20\72";
        goto fb8MQ;
        esPJ2:
        DyXAu:
        goto Ss7Rb;
        Ss7Rb:
        return $ret;
        goto SNbB3;
        SNbB3:
    }
    public function getAllBankSoalByTp($id_tp, $id_smt, $guru = null)
    {
        goto OVAJB;
        onqJt:
        $this->db->where("\x62\141\156\153\137\x67\x75\162\x75\137\151\x64", $guru);
        goto TxbXv;
        RZ8TN:
        $result = $this->db->get("\x63\142\x74\137\x62\x61\x6e\153\x5f\163\x6f\x61\154")->result();
        goto q_2jk;
        TQhQX:
        return $ret;
        goto fjVZU;
        q_2jk:
        $ret = [];
        goto CN0Tx;
        OVAJB:
        $this->db->select("\151\x64\x5f\x62\x61\156\153\x2c\40\x62\141\156\x6b\137\153\157\x64\145\x2c\x20\142\141\x6e\x6b\137\155\141\160\145\154\x5f\151\x64\x2c\x20\164\141\x6d\160\151\154\x5f\x70\x67\x2c\x20\164\x61\x6d\160\151\x6c\x5f\x6b\x6f\x6d\x70\154\x65\153\163\x2c\x20\164\141\155\x70\x69\x6c\x5f\152\157\144\157\150\x6b\x61\x6e\x2c\x20\164\x61\x6d\x70\151\x6c\137\151\x73\151\141\156\54\40\x74\141\x6d\160\x69\x6c\x5f\x65\x73\x61\151");
        goto VLJEA;
        H2YyY:
        foreach ($result as $key => $row) {
            $ret[$row->id_bank] = $row;
            sZwLi:
        }
        goto XMR_x;
        AurCu:
        $this->db->where("\x73\x74\141\164\165\163\137\x73\x6f\x61\154", "\x31");
        goto E1Z2C;
        TxbXv:
        TXsr3:
        goto RZ8TN;
        VLJEA:
        $this->db->where("\x69\x64\137\164\160", $id_tp);
        goto U0_iU;
        CN0Tx:
        if (!$result) {
            goto W2Rl2;
        }
        goto H2YyY;
        E1Z2C:
        if (!($guru !== null)) {
            goto TXsr3;
        }
        goto onqJt;
        Di72a:
        $this->db->where("\x73\x74\141\164\x75\163", "\61");
        goto AurCu;
        g3R7b:
        W2Rl2:
        goto TQhQX;
        XMR_x:
        HohLb:
        goto g3R7b;
        U0_iU:
        $this->db->where("\151\x64\137\x73\x6d\164", $id_smt);
        goto Di72a;
        fjVZU:
    }
    public function getAllBankSoalByMapel($id_tp, $id_smt, $mapel)
    {
        goto lVyIC;
        WcDSv:
        $ret = [];
        goto d94GT;
        VxpML:
        $this->db->where("\163\164\x61\x74\x75\x73", "\61");
        goto X1FnO;
        vMVAX:
        $this->db->from("\143\x62\164\x5f\142\141\156\x6b\137\163\x6f\x61\154");
        goto uDGjT;
        ZxV32:
        foreach ($result as $key => $row) {
            $ret[$row->id_bank] = $row;
            zNEAK:
        }
        goto xzpY5;
        X1FnO:
        $result = $this->db->get()->result();
        goto WcDSv;
        TdggA:
        return $ret;
        goto hKpHC;
        zymlI:
        $this->db->where("\x62\141\x6e\153\x5f\x6d\x61\160\145\x6c\x5f\x69\x64", $mapel);
        goto VxpML;
        d94GT:
        if (!$result) {
            goto ui_tk;
        }
        goto ZxV32;
        PJWrp:
        $this->db->where("\151\x64\137\163\x6d\164", $id_smt);
        goto zymlI;
        disyy:
        ui_tk:
        goto TdggA;
        uDGjT:
        $this->db->where("\x69\x64\x5f\164\x70", $id_tp);
        goto PJWrp;
        lVyIC:
        $this->db->select("\151\x64\137\142\141\156\153\x2c\x20\142\141\156\x6b\x5f\x6b\157\144\145\54\40\142\141\x6e\x6b\x5f\x6d\x61\160\145\154\x5f\151\x64\54\40\x74\141\x6d\x70\151\x6c\x5f\x70\x67\x2c\40\x74\x61\x6d\x70\151\154\x5f\x6b\x6f\x6d\x70\154\x65\x6b\163\x2c\40\164\x61\x6d\x70\x69\x6c\x5f\152\x6f\144\157\x68\153\x61\156\x2c\40\164\x61\x6d\160\x69\154\x5f\151\163\151\x61\x6e\x2c\x20\x74\x61\155\x70\x69\154\x5f\x65\163\141\x69\x2c\40\163\164\x61\x74\165\x73");
        goto vMVAX;
        xzpY5:
        YPmoW:
        goto disyy;
        hKpHC:
    }
    public function getJumlahJenisSoal($id_bank)
    {
        goto CRZdr;
        oxZu8:
        foreach ($result as $row) {
            $ret[$row->jenis][] = $row;
            HAo8r:
        }
        goto fb4KG;
        b_s3t:
        $this->db->where("\164\x61\x6d\160\x69\x6c\x6b\141\156", "\x31");
        goto e1MfD;
        TXpGv:
        $this->db->where("\142\x61\x6e\153\x5f\151\144", $id_bank);
        goto b_s3t;
        PVZwO:
        if (!$result) {
            goto Wrufm;
        }
        goto oxZu8;
        fb4KG:
        Fmd1p:
        goto nmuc_;
        zIKF4:
        return $ret;
        goto cXB5U;
        nmuc_:
        Wrufm:
        goto zIKF4;
        BYgVk:
        $this->db->from("\x63\x62\x74\x5f\163\157\141\x6c");
        goto TXpGv;
        BpfEI:
        $ret = [];
        goto PVZwO;
        CRZdr:
        $this->db->select("\151\144\x5f\163\157\x61\154\54\x20\152\x65\156\151\163");
        goto BYgVk;
        e1MfD:
        $result = $this->db->get()->result();
        goto BpfEI;
        cXB5U:
    }
    public function getJenis()
    {
        goto dduyU;
        ftHi8:
        return $this->datatables->generate();
        goto LWfxF;
        dduyU:
        $this->datatables->select("\x2a");
        goto HFSW1;
        HFSW1:
        $this->datatables->from("\x63\x62\164\137\x6a\145\156\x69\x73");
        goto ftHi8;
        LWfxF:
    }
    public function getJenisById($id)
    {
        goto gGrlY;
        YZWAA:
        $this->db->from("\143\x62\x74\137\152\x65\x6e\151\163");
        goto RzXMt;
        gGrlY:
        $this->db->select("\x69\x64\x5f\x6a\x65\156\151\x73\54\x20\156\x61\x6d\141\x5f\x6a\145\x6e\x69\x73\x2c\40\x6b\157\144\x65\137\x6a\x65\x6e\151\x73");
        goto YZWAA;
        sHz7D:
        return $this->db->get()->row();
        goto Pzggx;
        RzXMt:
        $this->db->where(["\x69\x64\137\152\145\156\x69\163" => $id]);
        goto sHz7D;
        Pzggx:
    }
    function updateJenis()
    {
        goto JCGkU;
        NxXxU:
        $name = $this->input->post("\x6e\141\155\x61\137\x6a\145\x6e\151\163", true);
        goto uCtzI;
        zDQcS:
        $this->db->set("\x6e\x61\155\141\137\x6a\x65\x6e\x69\163", $name);
        goto CyOrN;
        CyOrN:
        $this->db->set("\x6b\157\144\145\x5f\152\x65\156\x69\x73", $kode);
        goto REOun;
        uCtzI:
        $kode = $this->input->post("\x6b\157\144\x65\137\152\145\x6e\x69\163", true);
        goto zDQcS;
        JCGkU:
        $id = $this->input->post("\151\x64\137\152\x65\156\151\x73");
        goto NxXxU;
        pWOm7:
        return $this->db->update("\143\x62\x74\137\x6a\145\156\x69\163");
        goto vqciL;
        REOun:
        $this->db->where("\151\x64\x5f\152\145\x6e\151\x73", $id);
        goto pWOm7;
        vqciL:
    }
    public function getRuang()
    {
        goto D7wr3;
        R3wAJ:
        $this->datatables->from("\x63\x62\164\x5f\162\165\x61\x6e\x67");
        goto vv02u;
        vv02u:
        return $this->datatables->generate();
        goto OllQL;
        D7wr3:
        $this->datatables->select("\52\54\40\50\123\x45\114\x45\103\124\40\x43\117\x55\x4e\124\x28\x69\144\137\x73\145\163\151\x29\x20\x46\x52\117\x4d\x20\x63\142\x74\137\163\145\163\x69\x29\40\x41\x53\x20\x6a\x75\155\137\x73\145\x73\151");
        goto R3wAJ;
        OllQL:
    }
    public function getRuangById($id)
    {
        goto J8gpR;
        EtcCD:
        $this->db->from("\x63\142\x74\x5f\162\165\141\x6e\x67");
        goto DAvpr;
        DAvpr:
        $this->db->where(["\151\x64\137\162\165\141\156\x67" => $id]);
        goto w9EoC;
        w9EoC:
        return $this->db->get()->row();
        goto tT3Ll;
        J8gpR:
        $this->db->select("\151\144\x5f\162\165\141\156\x67\x2c\x20\156\141\x6d\141\x5f\x72\165\x61\156\147\54\x20\153\157\144\x65\137\162\x75\x61\x6e\147");
        goto EtcCD;
        tT3Ll:
    }
    public function getRuangSesi($tp, $smt)
    {
        goto uRhB4;
        Lg8ky:
        L6HlQ:
        goto P_nzR;
        w1lWs:
        foreach ($result as $row) {
            $ret[$row->sesi_id][$row->ruang_id][$row->kelas_id] = $row->nama_kelas;
            iyuja:
        }
        goto QUbCh;
        KiAsd:
        $this->db->join("\x63\142\x74\x5f\162\x75\141\156\147\40\x62", "\x62\x2e\x69\144\x5f\x72\x75\x61\156\147\x3d\x61\x2e\x72\165\141\156\x67\137\151\x64");
        goto OGOXm;
        vAv7Y:
        if (!$result) {
            goto L6HlQ;
        }
        goto w1lWs;
        OGOXm:
        $this->db->join("\x63\x62\164\x5f\x73\145\163\x69\40\143", "\x63\x2e\x69\x64\137\x73\x65\x73\151\x3d\141\56\163\145\x73\x69\x5f\151\x64");
        goto VTp9E;
        uRhB4:
        $this->db->select("\141\56\163\x69\x73\x77\x61\137\151\144\54\x20\141\56\x73\x65\163\x69\137\151\144\54\40\141\x2e\x72\x75\141\156\147\137\x69\144\54\40\141\56\x6b\x65\x6c\141\x73\x5f\151\x64\54\40" . "\x62\x2e\156\x61\155\141\x5f\x72\165\x61\156\x67\54\40\142\56\x6b\157\x64\x65\137\162\x75\141\x6e\x67\54\40\x63\x2e\156\141\x6d\x61\137\163\145\x73\151\54\40\143\x2e\153\157\144\145\137\163\145\163\151\x2c\x20\x64\56\x6e\x61\x6d\141\137\153\x65\x6c\141\x73");
        goto mS2z3;
        QUbCh:
        RJLdV:
        goto Lg8ky;
        P_nzR:
        return $ret;
        goto dVZki;
        aP7Hg:
        $ret = [];
        goto vAv7Y;
        VTp9E:
        $this->db->join("\x6d\141\x73\x74\145\x72\x5f\153\145\x6c\141\163\x20\x64", "\x64\x2e\x69\144\x5f\153\145\x6c\x61\163\75\141\x2e\153\145\x6c\141\x73\x5f\x69\x64");
        goto GGKD3;
        mS2z3:
        $this->db->from("\x63\142\x74\x5f\x73\x65\163\x69\x5f\x73\151\163\x77\141\40\x61");
        goto KiAsd;
        Jff1o:
        $result = $this->db->get()->result();
        goto aP7Hg;
        GGKD3:
        $this->db->order_by("\142\56\156\x61\x6d\141\137\162\x75\141\x6e\147", "\x41\x53\103");
        goto siydQ;
        siydQ:
        $this->db->order_by("\143\x2e\x6e\141\x6d\141\137\163\x65\x73\151", "\101\123\103");
        goto Jff1o;
        dVZki:
    }
    function updateRuang()
    {
        goto Gbgl2;
        aiSVX:
        $name = $this->input->post("\x6e\x61\155\x61\x5f\x72\x75\141\x6e\147", true);
        goto M2wG8;
        Gbgl2:
        $id = $this->input->post("\x69\x64\x5f\162\165\141\156\147");
        goto aiSVX;
        ieOEb:
        $this->db->where("\x69\x64\x5f\162\x75\141\156\147", $id);
        goto LA2fl;
        LA2fl:
        return $this->db->update("\143\142\x74\x5f\x72\165\141\156\x67");
        goto KynpV;
        Y3nVj:
        $this->db->set("\x6e\141\x6d\x61\x5f\x72\x75\x61\156\147", $name);
        goto Z_Lt_;
        M2wG8:
        $kode = $this->input->post("\x6b\x6f\144\x65\137\162\x75\141\x6e\147", true);
        goto Y3nVj;
        Z_Lt_:
        $this->db->set("\x6b\x6f\144\x65\x5f\162\x75\141\x6e\147", $kode);
        goto ieOEb;
        KynpV:
    }
    public function getSesi()
    {
        goto cZjIb;
        cZjIb:
        $this->datatables->select("\52");
        goto qIt5P;
        QD_1n:
        return $this->datatables->generate();
        goto ZK4Zp;
        qIt5P:
        $this->datatables->from("\x63\x62\164\x5f\163\145\x73\151\40\x63");
        goto QD_1n;
        ZK4Zp:
    }
    public function getAllKodeSesi()
    {
        goto V7B0V;
        gI6X9:
        $this->db->from("\143\x62\x74\x5f\163\145\163\x69");
        goto AEJe1;
        hOITb:
        if (!$result) {
            goto W6Jhn;
        }
        goto Mx6yY;
        V7B0V:
        $this->db->select("\x69\144\x5f\163\x65\163\151\x2c\x20\156\141\x6d\141\x5f\163\x65\163\x69\x2c\x20\x6b\157\x64\x65\137\x73\x65\x73\151");
        goto gI6X9;
        kA9av:
        return $ret;
        goto fp1A2;
        Mx6yY:
        foreach ($result as $row) {
            $ret[$row->kode_sesi] = $row;
            AqXso:
        }
        goto Zi2Db;
        K7E94:
        $ret = [];
        goto hOITb;
        Zi2Db:
        XOZbA:
        goto kjnJH;
        AEJe1:
        $result = $this->db->get()->result();
        goto K7E94;
        kjnJH:
        W6Jhn:
        goto kA9av;
        fp1A2:
    }
    public function getSesiById($id)
    {
        goto vcn5L;
        fAM_9:
        $this->db->where(["\x69\x64\137\x73\x65\163\151" => $id]);
        goto h38sP;
        gd8XJ:
        $this->db->from("\x63\x62\164\137\x73\145\163\151");
        goto fAM_9;
        h38sP:
        return $this->db->get()->row();
        goto SwLyy;
        vcn5L:
        $this->db->select("\x69\x64\x5f\x73\145\x73\151\54\x20\156\141\155\141\x5f\163\145\x73\x69\54\40\x6b\157\144\x65\x5f\163\145\x73\x69\x2c\40\x77\141\x6b\x74\165\137\x6d\165\x6c\x61\151\54\40\x77\141\153\x74\165\137\141\x6b\x68\151\162");
        goto gd8XJ;
        SwLyy:
    }
    public function getSesiBySiswa($siswa_id)
    {
        goto KFEBA;
        gZMN9:
        return $query;
        goto vRfHq;
        KFEBA:
        $this->db->where("\163\x69\163\167\141\137\151\x64", $siswa_id);
        goto bPHkG;
        bPHkG:
        $query = $this->db->get("\x73\151\163\167\x61\137\163\x65\x73\151")->result();
        goto gZMN9;
        vRfHq:
    }
    function updateSesi()
    {
        goto pmG0M;
        ZDLEj:
        $mulai = $this->input->post("\167\141\x6b\x74\165\137\x6d\x75\x6c\141\x69", true);
        goto Qbj22;
        o9MfN:
        $this->db->set("\x77\x61\x6b\164\x75\x5f\x6d\x75\x6c\x61\x69", $mulai);
        goto usAHz;
        beHDi:
        $name = $this->input->post("\156\141\x6d\141\x5f\x73\145\163\151", true);
        goto GZPnY;
        Ct_g1:
        $this->db->where("\151\x64\x5f\163\x65\x73\x69", $id);
        goto NrSSz;
        WXe5K:
        $this->db->set("\156\141\x6d\141\x5f\x73\145\163\151", $name);
        goto VlRNP;
        VlRNP:
        $this->db->set("\153\157\x64\x65\x5f\163\145\163\151", $kode);
        goto o9MfN;
        NrSSz:
        return $this->db->update("\143\142\x74\x5f\163\145\163\151");
        goto GHyHA;
        pmG0M:
        $id = $this->input->post("\x69\144\x5f\163\145\x73\151");
        goto beHDi;
        Qbj22:
        $akhir = $this->input->post("\x77\x61\153\x74\165\137\141\153\150\x69\x72", true);
        goto WXe5K;
        DDjS4:
        $this->db->set("\141\x6b\x74\151\x66", 1);
        goto Ct_g1;
        usAHz:
        $this->db->set("\x77\x61\x6b\x74\165\137\x61\153\x68\151\x72", $akhir);
        goto DDjS4;
        GZPnY:
        $kode = $this->input->post("\153\157\144\x65\x5f\x73\x65\163\x69", true);
        goto ZDLEj;
        GHyHA:
    }
    public function getSiswaCbtInfo($id_siswa, $id_tp, $id_smt)
    {
        goto QysmJ;
        pkNRT:
        $this->db->from("\x6b\x65\x6c\x61\x73\137\163\151\163\167\x61\40\x61");
        goto sPtwl;
        qftQ2:
        $this->db->where("\x61\x2e\151\x64\x5f\x74\x70", $id_tp);
        goto eNdN2;
        QysmJ:
        $this->db->select("\141\x2e\151\x64\137\153\145\x6c\x61\163\x5f\x73\151\163\167\141\x2c\x20\141\x2e\151\x64\137\164\x70\54\x20\x61\56\x69\144\x5f\163\x6d\164\54\40\141\x2e\151\144\x5f\163\151\163\167\141\54\x20\141\x2e\x69\x64\x5f\153\145\x6c\141\x73\x2c" . "\x20\x62\x2e\x73\151\163\167\141\x5f\151\144\x2c\40\142\56\x6b\145\x6c\x61\163\137\x69\144\x2c\x20\x62\56\162\165\x61\x6e\147\x5f\x69\144\54\40\142\x2e\163\x65\163\151\x5f\x69\x64\54" . "\x20\162\153\x2e\151\144\137\x72\165\141\x6e\147\54\x20\x72\x6b\x2e\156\x61\x6d\x61\137\x72\x75\141\x6e\147\54\40\162\x6b\56\x6b\157\144\145\x5f\x72\165\141\156\147\54" . "\x20\163\x6b\x2e\x69\144\x5f\163\145\163\151\54\40\x73\153\x2e\x6e\141\155\141\137\x73\145\163\151\x2c\x20\163\153\x2e\153\157\144\x65\x5f\163\145\163\151\54\40\x73\x6b\x2e\x77\x61\153\x74\x75\137\x6d\x75\x6c\x61\151\x2c\x20\163\153\56\167\141\x6b\x74\165\137\x61\153\x68\151\x72");
        goto pkNRT;
        eNdN2:
        $this->db->where("\141\56\x69\144\137\163\x6d\x74", $id_smt);
        goto qW4T1;
        i73T4:
        $this->db->join("\143\x62\x74\x5f\x73\x65\163\x69\40\163\x6b", "\x62\x2e\x73\x65\x73\151\137\x69\144\x3d\x73\x6b\x2e\x69\144\137\x73\x65\163\x69", "\x6c\x65\146\x74");
        goto ACroI;
        ACroI:
        $this->db->where("\x61\x2e\x69\144\137\163\151\163\x77\x61", $id_siswa);
        goto qftQ2;
        sPtwl:
        $this->db->join("\x63\x62\164\137\163\x65\163\x69\137\x73\151\x73\167\x61\x20\142", "\x61\56\x69\144\x5f\163\x69\x73\x77\x61\x3d\142\x2e\163\x69\163\167\141\x5f\x69\x64", "\154\x65\x66\164");
        goto Ema50;
        qW4T1:
        return $this->db->get()->row();
        goto JJTE4;
        Ema50:
        $this->db->join("\x63\142\x74\x5f\x72\165\141\x6e\x67\x20\162\153", "\x62\56\x72\x75\x61\x6e\147\x5f\151\144\75\162\x6b\56\151\x64\x5f\162\x75\x61\x6e\147", "\154\x65\146\x74");
        goto i73T4;
        JJTE4:
    }
    public function getRuangSesiSiswa($id_kelas, $id_tp, $id_smt)
    {
        goto e3cGi;
        Y3XpH:
        $this->db->where("\141\56\x69\x64\x5f\x6b\x65\x6c\141\x73", $id_kelas);
        goto DLSo1;
        uT27c:
        $this->db->order_by("\x62\56\156\x61\155\141", "\x41\x53\103");
        goto g3St1;
        JI8su:
        $this->db->join("\143\142\164\137\162\165\x61\x6e\147\x20\162\x6b", "\145\x2e\162\x75\x61\156\147\x5f\151\144\75\162\x6b\56\x69\x64\x5f\x72\x75\x61\x6e\x67", "\154\145\x66\164");
        goto BS8eC;
        DLSo1:
        $this->db->where("\x61\x2e\x69\x64\x5f\164\x70", $id_tp);
        goto iV0Dl;
        iV0Dl:
        $this->db->where("\141\x2e\x69\144\x5f\163\x6d\x74", $id_smt);
        goto uT27c;
        g3St1:
        return $this->db->get()->result();
        goto QAeOh;
        qzjdP:
        $this->db->join("\x62\165\x6b\x75\x5f\x69\156\144\165\x6b\x20\151", "\151\x2e\151\x64\137\x73\x69\x73\167\x61\75\x61\x2e\151\144\137\163\x69\x73\167\x61\x20\101\x4e\x44\40\x3d\x69\56\163\x74\x61\164\x75\163\x3d\61");
        goto Y3XpH;
        FYHZo:
        $this->db->join("\155\x61\163\164\x65\162\x5f\153\145\x6c\x61\x73\x20\143", "\x61\x2e\x69\x64\137\153\x65\x6c\141\x73\75\x63\56\151\x64\137\x6b\145\154\141\x73", "\x6c\x65\x66\164");
        goto ol0AY;
        BS8eC:
        $this->db->join("\x63\142\x74\x5f\163\145\x73\x69\x20\163\x6b", "\x65\x2e\163\145\163\151\137\x69\144\x3d\x73\153\x2e\151\144\137\163\x65\163\151", "\x6c\145\x66\164");
        goto qzjdP;
        gEoUa:
        $this->db->join("\x6d\x61\x73\164\145\x72\x5f\x73\x69\163\x77\x61\40\x62", "\x61\x2e\151\x64\137\x73\151\163\167\x61\75\142\x2e\x69\x64\x5f\x73\151\163\x77\141", "\x6c\x65\x66\x74");
        goto FYHZo;
        e3cGi:
        $this->db->select("\x61\x2e\151\144\x5f\x73\x69\x73\167\141\x2c\x20\141\x2e\x69\144\x5f\153\x65\x6c\141\163\54" . "\x20\142\56\156\141\x6d\141\54\x20\x62\x2e\x6e\151\x73\x2c\40\x62\56\x75\163\145\x72\x6e\x61\155\x65\x2c" . "\40\143\x2e\x6e\x61\x6d\x61\x5f\153\145\154\x61\x73\x2c\40\143\56\x6b\157\144\x65\x5f\x6b\x65\154\x61\x73\54" . "\40\145\56\x73\145\x73\151\x5f\x69\x64\54\40\145\x2e\x72\x75\x61\x6e\147\137\151\x64\x2c" . "\40\162\x6b\x2e\x69\x64\137\x72\165\x61\156\x67\x2c\x20\162\x6b\x2e\153\157\x64\x65\137\162\x75\141\156\x67\54" . "\40\163\x6b\56\x69\144\137\x73\x65\163\151\54\x20\163\x6b\56\x6b\x6f\144\x65\x5f\x73\x65\x73\151");
        goto zOtbF;
        zOtbF:
        $this->db->from("\x6b\145\154\x61\163\137\x73\x69\x73\167\x61\40\141");
        goto gEoUa;
        ol0AY:
        $this->db->join("\x63\142\x74\137\163\x65\x73\x69\137\x73\x69\x73\x77\x61\40\145", "\x61\x2e\x69\x64\x5f\163\151\x73\x77\141\75\145\x2e\x73\x69\x73\167\x61\137\151\144", "\x6c\x65\x66\x74");
        goto JI8su;
        QAeOh:
    }
    public function getSiswaByKelas($id_tp, $id_smt, $id_kelas)
    {
        goto hKOhP;
        tmQP1:
        Iqlvs:
        goto XmnUh;
        qmQWn:
        $this->db->order_by("\x62\56\x6e\x61\155\141", "\x41\123\x43");
        goto X3LRF;
        UXt8h:
        $this->db->where("\x63\56\163\151\x73\167\x61\137\x69\144\40\151\x73\x20\116\x4f\x54\x20\116\x55\114\x4c", NULL, FALSE);
        goto Crbjo;
        Tp6ro:
        $this->db->where("\x67\x2e\x69\144\x5f\x73\x69\163\167\141\x20\x69\163\x20\116\117\x54\40\116\x55\114\x4c", NULL, FALSE);
        goto ipOfs;
        UWzmO:
        $this->db->where("\x61\56\x69\144\x5f\163\155\x74", $id_smt);
        goto pDGjK;
        lUKV6:
        $this->db->join("\x63\x62\x74\x5f\162\x75\141\156\x67\x20\x64", "\144\56\x69\144\x5f\x72\x75\x61\156\x67\x3d\x63\x2e\x72\x75\141\x6e\147\x5f\151\144", "\x6c\145\146\x74");
        goto I8AsZ;
        I8AsZ:
        $this->db->join("\143\142\x74\x5f\163\145\x73\151\x20\145", "\x65\56\x69\x64\x5f\x73\x65\x73\x69\x3d\x63\56\x73\145\x73\151\x5f\x69\144", "\154\145\x66\x74");
        goto qANTE;
        qANTE:
        $this->db->join("\155\141\163\x74\x65\162\137\153\x65\154\141\163\x20\146", "\x66\56\151\x64\x5f\x6b\x65\x6c\x61\163\x3d\141\56\x69\144\x5f\x6b\145\x6c\x61\x73", "\154\x65\146\164");
        goto BYIHX;
        BYIHX:
        $this->db->join("\x63\142\x74\x5f\x6e\x6f\155\x6f\x72\137\160\145\163\145\162\164\x61\x20\x67", "\x67\x2e\151\x64\137\x73\151\163\167\141\75\141\x2e\151\144\137\163\151\163\x77\x61\x20\x41\x4e\x44\40\147\56\x69\144\137\164\x70\x3d" . $id_tp, "\x6c\x65\146\x74");
        goto d5q62;
        hKOhP:
        $this->db->select("\x62\x2e\151\144\x5f\x73\151\x73\x77\x61\54\40\142\56\x6e\141\x6d\141\x2c\40\x62\56\x6e\x69\x73\x2c\40\x62\56\156\151\x73\x6e\x2c\40\142\56\165\163\x65\162\156\141\x6d\145\54\40\x62\x2e\160\x61\x73\x73\x77\157\162\144\x2c" . "\x20\142\56\146\157\x74\157\x2c\40\144\56\153\x6f\x64\x65\x5f\162\165\141\156\x67\54\40\x65\x2e\153\157\x64\x65\137\x73\145\x73\151\54\x20\146\x2e\x6e\141\x6d\141\137\153\145\x6c\x61\x73\x2c\x20\146\x2e\153\x6f\x64\145\137\153\x65\154\141\x73\x2c\x20\147\56\156\157\155\157\x72\137\160\145\163\x65\162\164\141");
        goto dlHq7;
        pAs3K:
        goto jRPIc;
        goto tmQP1;
        oTzD5:
        $this->db->where("\141\x2e\151\x64\137\x74\160", $id_tp);
        goto UWzmO;
        QzoRs:
        $this->db->where("\x62\x2e\151\144\137\x73\151\163\x77\x61\x20\x69\x73\x20\116\x4f\124\x20\x4e\125\114\x4c", NULL, FALSE);
        goto UXt8h;
        GLBP4:
        $this->db->join("\x6d\141\x73\164\145\x72\x5f\163\x69\x73\x77\x61\x20\x62", "\142\56\151\144\137\x73\151\163\x77\141\75\x61\x2e\151\144\x5f\163\x69\x73\x77\141", "\x6c\x65\146\164");
        goto lnx7F;
        Crbjo:
        $this->db->where("\146\x2e\163\151\x73\167\141\x5f\151\x64\x20\151\163\x20\116\117\124\x20\116\125\x4c\114", NULL, FALSE);
        goto Tp6ro;
        lnx7F:
        $this->db->join("\x63\142\x74\137\x73\145\x73\x69\x5f\x73\x69\163\167\x61\40\x63", "\143\56\x73\x69\163\167\141\137\x69\x64\75\141\x2e\151\x64\137\163\151\163\167\x61", "\154\145\x66\164");
        goto lUKV6;
        X3LRF:
        return $this->db->get()->result();
        goto R624z;
        dlHq7:
        $this->db->from("\x6b\145\154\x61\163\137\163\151\x73\x77\141\x20\x61");
        goto GLBP4;
        pDGjK:
        $this->db->where("\x61\x2e\151\x64\137\x73\x69\163\167\x61\x20\151\163\x20\x4e\x4f\124\40\116\x55\114\x4c", NULL, FALSE);
        goto QzoRs;
        d5q62:
        $this->db->join("\142\x75\x6b\165\x5f\151\x6e\144\165\x6b\40\x69", "\151\56\x69\144\137\163\151\x73\167\x61\75\141\x2e\151\144\x5f\x73\151\x73\x77\x61\40\x41\x4e\x44\x20\x3d\x69\x2e\163\164\141\164\x75\x73\x3d\61");
        goto oTzD5;
        epyWh:
        $this->db->where("\x61\x2e\151\x64\137\x6b\x65\x6c\141\x73", $id_kelas);
        goto pAs3K;
        XmnUh:
        $this->db->where_in("\x61\56\151\144\137\153\x65\x6c\141\163", $id_kelas);
        goto nCqKH;
        ipOfs:
        if (is_array($id_kelas)) {
            goto Iqlvs;
        }
        goto epyWh;
        nCqKH:
        jRPIc:
        goto qmQWn;
        R624z:
    }
    public function getSiswaById($id_tp, $id_smt, $idSiswa)
    {
        goto KNGtk;
        TlZL8:
        $this->db->join("\x63\x62\164\x5f\163\x65\x73\151\40\152", "\x6a\x2e\151\144\x5f\x73\x65\x73\151\x3d\x68\56\151\x64\x5f\163\145\x73\x69", "\x6c\145\146\x74");
        goto QiavQ;
        QiavQ:
        $this->db->where("\x61\x2e\x69\x64\137\164\x70", $id_tp);
        goto TXzXn;
        ixCqI:
        $this->db->join("\143\x62\164\x5f\x73\145\163\151\40\x65", "\145\56\151\144\137\163\x65\163\x69\75\143\56\x73\145\163\x69\x5f\151\x64", "\x6c\145\x66\164");
        goto nz0Xm;
        hRt5J:
        $this->db->from("\x6b\145\154\141\x73\x5f\163\151\163\167\x61\40\141");
        goto br4gr;
        TXzXn:
        $this->db->where("\141\x2e\x69\144\x5f\x73\155\x74", $id_smt);
        goto fhNb1;
        fhNb1:
        $this->db->where("\141\x2e\x69\144\x5f\x73\151\163\x77\x61", $idSiswa);
        goto mJkix;
        RxxB0:
        $this->db->join("\143\142\x74\137\x72\165\x61\156\147\x20\151", "\151\x2e\x69\144\137\x72\165\141\x6e\147\x3d\150\56\151\144\x5f\162\165\x61\156\x67", "\154\x65\x66\x74");
        goto TlZL8;
        peYU3:
        $this->db->join("\143\142\x74\x5f\153\x65\x6c\x61\x73\137\x72\x75\x61\156\x67\x20\x68", "\150\56\151\x64\137\153\145\154\x61\x73\75\141\56\x69\x64\x5f\153\145\x6c\141\x73", "\x6c\145\x66\x74");
        goto RxxB0;
        KNGtk:
        $this->db->select("\142\56\151\x64\x5f\x73\x69\163\167\x61\54\40\x62\56\x6e\141\x6d\x61\54\x20\142\56\x6e\151\163\x2c\40\142\x2e\x6e\151\163\x6e\54\x20\x62\56\165\x73\145\x72\156\141\x6d\x65\54\x20\x62\56\160\x61\x73\x73\167\157\162\144\54" . "\x20\142\x2e\146\157\x74\157\54\x20\144\x2e\153\157\x64\x65\x5f\x72\165\x61\156\x67\54\40\x65\56\x6b\157\x64\145\x5f\163\x65\163\x69\x2c\40\x66\56\156\x61\155\x61\137\x6b\145\x6c\x61\163\x2c\40\146\x2e\x6b\157\x64\145\x5f\x6b\145\x6c\141\x73\54\40\147\x2e\156\x6f\x6d\x6f\162\x5f\x70\x65\163\x65\x72\x74\141\54" . "\40\150\x2e\163\145\164\x5f\x73\151\163\x77\141\54\40\151\x2e\153\x6f\144\145\x5f\162\165\x61\156\x67\40\x61\163\x20\162\x75\x61\156\147\137\153\145\154\141\x73\x2c\40\152\56\x6b\x6f\144\x65\x5f\163\x65\163\151\x20\141\x73\x20\x73\145\163\x69\137\153\x65\x6c\x61\x73");
        goto hRt5J;
        b6Z78:
        $this->db->join("\143\142\164\x5f\156\x6f\x6d\157\162\137\x70\x65\163\x65\x72\x74\x61\x20\x67", "\x67\56\x69\x64\137\163\x69\x73\x77\x61\x3d\x61\56\x69\x64\x5f\x73\x69\x73\x77\x61\40\101\116\x44\x20\147\x2e\151\x64\137\x74\160\x3d" . $id_tp, "\154\145\146\164");
        goto peYU3;
        lyMPC:
        $this->db->join("\143\x62\x74\x5f\163\x65\163\x69\137\163\x69\x73\167\x61\40\143", "\143\x2e\163\151\x73\167\141\x5f\151\x64\x3d\x61\x2e\x69\x64\137\163\151\x73\x77\x61", "\154\145\146\x74");
        goto gsML9;
        mJkix:
        return $this->db->get()->row();
        goto Vpmyb;
        br4gr:
        $this->db->join("\x6d\141\163\x74\145\x72\x5f\163\151\163\x77\x61\40\142", "\x62\x2e\151\144\137\163\x69\x73\x77\141\x3d\141\x2e\151\144\137\x73\151\163\x77\141", "\x6c\x65\146\x74");
        goto lyMPC;
        gsML9:
        $this->db->join("\143\x62\x74\137\162\x75\141\x6e\x67\x20\144", "\144\56\151\144\x5f\162\165\141\156\147\x3d\143\x2e\x72\165\141\x6e\147\x5f\151\x64", "\154\145\146\x74");
        goto ixCqI;
        nz0Xm:
        $this->db->join("\x6d\x61\163\x74\x65\x72\137\153\x65\x6c\141\x73\40\146", "\146\x2e\x69\x64\137\x6b\145\154\141\x73\x3d\141\56\151\x64\137\x6b\145\154\x61\163", "\x6c\145\x66\164");
        goto b6Z78;
        Vpmyb:
    }
    public function getAllPesertaByRuang($id_tp, $id_smt)
    {
        goto nw1Hl;
        o18j_:
        $this->db->join("\x62\165\x6b\x75\x5f\151\x6e\x64\165\x6b\40\x69", "\x69\x2e\151\x64\x5f\x73\151\163\167\x61\75\142\x2e\151\x64\137\163\x69\x73\167\141\40\101\x4e\104\x20\75\151\x2e\x73\x74\x61\164\x75\163\x3d\61");
        goto meKfD;
        uSWNc:
        $this->db->join("\x63\142\164\137\156\x6f\155\157\x72\x5f\160\x65\163\145\x72\x74\141\40\147", "\x67\56\x69\x64\137\x73\151\x73\x77\x61\75\141\56\x73\151\x73\x77\141\137\151\x64\40\x41\116\104\40\147\x2e\151\x64\137\x74\160\75" . $id_tp, "\x6c\x65\x66\x74");
        goto laB1Q;
        QTl1g:
        $this->db->join("\155\141\163\164\x65\162\137\x6b\145\154\141\163\40\x66", "\x66\56\x69\144\x5f\x6b\x65\154\x61\163\75\x63\56\x69\144\x5f\153\145\154\x61\163");
        goto o18j_;
        JPpyj:
        return $ret;
        goto F2_sU;
        HSh5T:
        $this->db->from("\143\x62\x74\137\163\145\163\151\137\x73\151\163\167\x61\x20\x61");
        goto qh6Mg;
        JtdWJ:
        $this->db->order_by("\x65\56\x6b\157\x64\145\137\163\x65\x73\151");
        goto mFXkm;
        forik:
        $this->db->join("\153\x65\x6c\141\163\137\163\151\x73\167\141\x20\x63", "\x63\x2e\151\x64\x5f\163\x69\163\167\x61\75\142\56\x69\144\x5f\x73\x69\x73\x77\141\x20\x41\x4e\x44\40\143\x2e\x69\x64\137\x74\x70\x3d" . $id_tp . "\40\101\116\x44\x20\143\56\x69\x64\x5f\x73\x6d\164\75" . $id_smt . '');
        goto QTl1g;
        D8Be4:
        foreach ($result as $row) {
            $ret[$row->kode_ruang][$row->kode_sesi][] = $row;
            vqck7:
        }
        goto i1WF2;
        lR2DX:
        $this->db->join("\x63\x62\164\x5f\162\165\x61\x6e\147\x20\x64", "\x64\x2e\151\144\x5f\162\x75\x61\156\147\x3d\141\x2e\x72\165\141\x6e\147\x5f\x69\x64", "\x6c\x65\146\x74");
        goto uSWNc;
        toji7:
        $this->db->order_by("\146\x2e\x6b\x6f\x64\145\137\153\145\x6c\x61\163");
        goto Rlk3O;
        L_nT5:
        $ret = [];
        goto D8Be4;
        i1WF2:
        BrKlP:
        goto JPpyj;
        XPxRX:
        $result = $this->db->get()->result();
        goto L_nT5;
        meKfD:
        $this->db->order_by("\144\x2e\153\x6f\x64\145\x5f\x72\x75\141\156\147");
        goto JtdWJ;
        Rlk3O:
        $this->db->order_by("\x62\56\x6e\x61\x6d\141");
        goto XPxRX;
        mFXkm:
        $this->db->order_by("\x66\x2e\x6c\145\166\145\x6c\137\x69\x64");
        goto toji7;
        qh6Mg:
        $this->db->join("\155\x61\163\x74\x65\x72\x5f\163\x69\163\x77\141\x20\142", "\142\56\151\x64\137\163\x69\163\x77\x61\x3d\141\x2e\x73\151\x73\x77\x61\137\151\x64", "\154\145\x66\164");
        goto lR2DX;
        laB1Q:
        $this->db->join("\143\x62\164\x5f\x73\x65\x73\151\40\145", "\145\56\151\x64\137\163\145\x73\x69\75\x61\56\x73\145\163\x69\137\151\x64", "\x6c\x65\x66\x74");
        goto forik;
        nw1Hl:
        $this->db->select("\x62\56\151\144\137\163\151\x73\x77\x61\54\40\x62\x2e\x6e\141\x6d\x61\54\x20\x62\56\156\151\x73\x2c\x20\x62\x2e\156\151\163\156\x2c\x20\142\56\165\163\145\x72\156\x61\x6d\145\x2c\x20\142\x2e\160\x61\x73\x73\x77\x6f\x72\144\54\40\x62\56\146\x6f\164\157\x2c\40\146\56\x6c\145\x76\145\x6c\x5f\x69\x64\x2c" . "\40\x66\x2e\156\141\155\x61\x5f\153\145\154\141\x73\x2c\x20\x66\x2e\x6b\157\x64\x65\x5f\153\x65\154\x61\x73\x2c" . "\40\x64\x2e\x6e\x61\x6d\x61\x5f\x72\x75\141\x6e\147\x2c\x20\144\56\x6b\x6f\144\145\137\x72\165\141\156\x67\x2c" . "\x20\145\56\x6b\157\x64\x65\137\163\145\163\x69\x2c\x20\145\56\156\x61\x6d\x61\x5f\163\x65\163\x69\54" . "\x20\147\x2e\156\x6f\155\x6f\x72\x5f\160\x65\x73\145\x72\x74\141");
        goto HSh5T;
        F2_sU:
    }
    public function getAllPesertaByKelas($id_tp, $id_smt)
    {
        goto bJfQi;
        uNDjR:
        $this->db->join("\x63\x62\164\x5f\162\x75\141\156\x67\40\x64", "\x64\x2e\x69\x64\137\162\x75\x61\156\x67\x3d\141\x2e\x72\x75\141\156\147\x5f\151\x64", "\154\145\146\164");
        goto uHFbB;
        c5L0g:
        $this->db->join("\x6d\141\163\x74\x65\x72\137\x73\151\x73\x77\x61\x20\x62", "\x62\x2e\151\x64\x5f\x73\151\163\167\x61\75\x61\56\163\x69\163\x77\x61\137\x69\144", "\x6c\x65\146\164");
        goto uNDjR;
        nlgR9:
        $this->db->join("\x62\x75\x6b\x75\137\x69\x6e\x64\165\x6b\40\151", "\151\x2e\x69\144\x5f\x73\151\163\x77\x61\x3d\x62\56\x69\144\137\163\x69\x73\167\x61\40\x41\116\104\40\75\151\x2e\x73\x74\x61\x74\x75\x73\x3d\x31");
        goto NuljV;
        UDVnw:
        $this->db->join("\x6b\145\x6c\141\163\137\163\x69\163\x77\x61\40\x63", "\x63\56\151\x64\x5f\x73\151\163\x77\141\x3d\x62\56\x69\x64\137\163\x69\163\x77\141\x20\x41\x4e\x44\40\x63\56\151\x64\137\x74\160\x3d" . $id_tp . "\x20\101\116\x44\40\143\56\x69\x64\137\163\155\x74\75" . $id_smt . '');
        goto Z7F1G;
        bJfQi:
        $this->db->select("\142\56\x69\x64\137\x73\x69\163\x77\x61\x2c\40\x62\56\156\141\x6d\141\x2c\40\142\x2e\x6e\x69\x73\54\40\x62\56\156\151\163\156\x2c\x20\x62\56\x75\163\x65\162\x6e\141\155\145\x2c\40\x62\56\160\141\x73\x73\167\157\x72\144\x2c\40\x62\x2e\x66\157\164\x6f\54" . "\x20\146\56\x6e\x61\155\x61\x5f\153\x65\x6c\141\x73\54\40\x66\56\153\x6f\144\145\137\153\x65\154\141\163\54" . "\x20\144\56\156\x61\x6d\x61\x5f\x72\165\141\156\147\x2c\x20\144\56\153\157\144\x65\x5f\162\165\x61\x6e\147\x2c" . "\40\145\56\x6b\157\x64\x65\137\x73\145\163\x69\54\x20\x65\56\156\x61\155\x61\x5f\x73\145\x73\151\x2c" . "\40\147\x2e\x6e\157\155\x6f\x72\x5f\x70\145\x73\145\x72\164\x61");
        goto ABwOn;
        UZRkC:
        $this->db->join("\x63\x62\164\137\x73\x65\163\x69\40\x65", "\x65\56\x69\144\x5f\163\x65\163\151\x3d\141\x2e\163\145\163\x69\137\x69\x64", "\154\145\146\x74");
        goto UDVnw;
        DA9sr:
        $this->db->order_by("\x62\56\156\141\x6d\x61");
        goto J2vcL;
        xJYZx:
        return $ret;
        goto E5Xki;
        koB_W:
        p14xN:
        goto xJYZx;
        ABwOn:
        $this->db->from("\x63\142\164\137\163\x65\x73\x69\137\163\151\163\x77\141\x20\141");
        goto c5L0g;
        J2vcL:
        $result = $this->db->get()->result();
        goto sZ0A0;
        Z7F1G:
        $this->db->join("\155\141\x73\x74\145\162\137\153\145\154\141\x73\40\x66", "\146\x2e\151\x64\137\x6b\x65\x6c\141\163\x3d\143\x2e\x69\144\137\153\145\x6c\x61\163");
        goto nlgR9;
        h_0Jw:
        $this->db->order_by("\x66\56\x6b\x6f\x64\145\137\153\x65\154\x61\163");
        goto DA9sr;
        sZ0A0:
        $ret = [];
        goto d9k_m;
        d9k_m:
        foreach ($result as $row) {
            $ret[$row->kode_kelas][] = $row;
            CvFJf:
        }
        goto koB_W;
        NuljV:
        $this->db->order_by("\146\x2e\154\145\x76\x65\154\137\x69\x64");
        goto h_0Jw;
        uHFbB:
        $this->db->join("\143\x62\x74\x5f\x6e\157\x6d\x6f\x72\x5f\x70\x65\163\145\162\x74\141\x20\x67", "\x67\56\x69\144\x5f\x73\151\x73\167\141\75\x61\x2e\x73\x69\163\x77\141\137\x69\144\40\x41\x4e\x44\40\147\56\151\x64\x5f\x74\160\x3d" . $id_tp, "\154\x65\x66\x74");
        goto UZRkC;
        E5Xki:
    }
    public function getSiswaByRuang($id_tp, $id_smt, $id_ruang, $sesi)
    {
        goto xKzzL;
        pXDFz:
        $this->db->order_by("\142\x2e\x6e\141\x6d\x61");
        goto Ezoqi;
        dNloh:
        $this->db->join("\155\141\163\164\x65\x72\137\163\x69\163\x77\141\40\142", "\142\56\x69\144\137\x73\x69\163\x77\141\75\141\56\163\151\x73\167\141\137\151\x64", "\x6c\145\x66\164");
        goto Tg4yK;
        CbKfm:
        $this->db->where("\141\56\163\145\x73\151\137\151\144", $sesi);
        goto pXDFz;
        lI5Yx:
        $this->db->join("\153\x65\x6c\x61\163\137\x73\151\163\167\x61\40\x63", "\x63\56\151\x64\x5f\163\151\x73\167\x61\x3d\x62\56\151\x64\137\x73\151\163\167\141\40\101\x4e\x44\40\143\x2e\x69\144\x5f\164\160\75" . $id_tp . "\40\101\116\104\40\x63\56\x69\x64\137\x73\x6d\164\x3d" . $id_smt . '');
        goto GTKa2;
        l81yl:
        $this->db->join("\x63\x62\x74\x5f\163\145\163\151\x20\x65", "\x65\56\x69\x64\137\163\x65\x73\x69\x3d\141\56\x73\x65\x73\151\137\151\x64", "\x6c\145\x66\x74");
        goto lI5Yx;
        xKzzL:
        $this->db->select("\141\56\x72\x75\141\156\147\137\151\x64\x2c\x20\141\56\x73\145\x73\x69\x5f\151\x64\54\x20\x62\x2e\x69\x64\x5f\x73\151\163\167\141\54\x20\142\x2e\x6e\141\155\141\54\40\x62\x2e\156\151\163\x2c\x20\x62\x2e\156\151\163\x6e\x2c\40\x62\x2e\x75\163\145\162\x6e\141\155\x65\54\x20\x62\56\160\141\163\163\167\x6f\x72\x64\54\x20\142\x2e\146\157\164\x6f\54" . "\x20\x66\x2e\151\x64\137\153\x65\154\141\163\54\x20\146\56\x6e\141\x6d\x61\x5f\x6b\x65\154\x61\x73\54\x20\x66\56\x6b\157\144\x65\137\x6b\x65\154\x61\163\x2c" . "\40\x64\x2e\156\141\155\x61\x5f\162\x75\141\156\x67\x2c\x20\144\x2e\x6b\157\144\145\137\162\x75\141\x6e\147\54" . "\x20\145\56\153\157\x64\145\137\x73\x65\x73\151\54\x20\145\56\156\141\155\x61\x5f\x73\x65\x73\151\54" . "\40\x67\56\x6e\x6f\x6d\157\x72\x5f\160\x65\163\x65\x72\164\141");
        goto kdybN;
        Ezoqi:
        return $this->db->get()->result();
        goto MBE3N;
        gwRoj:
        $this->db->join("\x63\x62\x74\137\156\x6f\155\157\162\137\x70\145\163\x65\x72\164\x61\40\147", "\x67\56\x69\144\x5f\163\x69\x73\167\x61\x3d\x61\x2e\x73\x69\163\167\141\x5f\x69\144\x20\x41\x4e\104\40\x67\56\151\144\x5f\164\x70\75" . $id_tp, "\154\x65\146\x74");
        goto l81yl;
        Tg4yK:
        $this->db->join("\x63\142\x74\x5f\162\165\x61\156\x67\x20\x64", "\144\x2e\x69\144\x5f\162\165\141\156\147\75\141\x2e\162\165\141\156\147\x5f\151\144", "\x6c\145\x66\x74");
        goto gwRoj;
        j4B7S:
        $this->db->join("\142\165\x6b\x75\137\x69\156\x64\x75\x6b\x20\151", "\151\56\x69\144\x5f\x73\x69\x73\x77\141\75\x62\x2e\151\x64\x5f\163\151\x73\x77\141\40\101\116\104\40\x3d\151\56\x73\x74\141\164\x75\163\x3d\61");
        goto hIVgq;
        kdybN:
        $this->db->from("\143\x62\164\137\163\145\163\151\x5f\x73\151\163\x77\141\x20\141");
        goto dNloh;
        hIVgq:
        $this->db->where("\x61\x2e\x72\x75\141\156\x67\x5f\x69\144", $id_ruang);
        goto CbKfm;
        GTKa2:
        $this->db->join("\155\x61\163\x74\145\162\137\x6b\145\154\x61\x73\40\x66", "\x66\56\x69\x64\137\x6b\x65\154\141\x73\75\143\56\x69\144\137\x6b\145\x6c\x61\x73");
        goto j4B7S;
        MBE3N:
    }
    public function getRuangSiswaByKelas($id_tp, $id_smt, $kelas, $sesi)
    {
        goto OafJm;
        flZpl:
        $this->db->join("\x63\x62\x74\x5f\156\x6f\x6d\157\x72\137\160\145\163\145\162\x74\141\x20\147", "\x67\56\x69\144\x5f\163\x69\x73\x77\141\x3d\x61\56\163\151\x73\x77\141\137\151\144\40\x41\116\104\x20\x67\56\151\x64\137\164\x70\75" . $id_tp, "\154\x65\146\x74");
        goto j9_IW;
        RJ6bz:
        $this->db->from("\143\142\164\x5f\163\145\x73\x69\x5f\163\151\x73\167\x61\x20\141");
        goto h0Sn1;
        d4mi_:
        $this->db->join("\153\145\x6c\141\x73\137\x73\151\163\167\141\x20\143", "\x63\56\x69\x64\x5f\163\x69\x73\x77\x61\x3d\142\x2e\x69\x64\x5f\x73\x69\163\167\x61\x20\x41\x4e\104\x20\x63\56\x69\x64\137\x74\160\x3d" . $id_tp . "\40\x41\116\x44\40\x63\x2e\151\x64\137\x73\x6d\x74\x3d" . $id_smt . '');
        goto eG3X7;
        j9_IW:
        $this->db->join("\x63\x62\164\x5f\163\x65\x73\x69\40\x65", "\x65\x2e\x69\x64\x5f\163\x65\163\x69\75\x61\56\163\x65\x73\151\137\x69\144", "\154\x65\x66\x74");
        goto d4mi_;
        o3qRi:
        kXt6x:
        goto KfxzS;
        h20TL:
        return $this->db->get()->result();
        goto emQM4;
        b7Xq0:
        $this->db->where_in("\x61\x2e\153\x65\154\141\x73\137\x69\x64", $kelas);
        goto bqj1O;
        OafJm:
        $this->db->select("\x62\x2e\151\144\x5f\x73\151\163\167\141\x2c\40\x62\56\x6e\141\155\141\54\x20\x62\x2e\156\x69\163\54\40\x62\x2e\x6e\151\x73\156\54\x20\x62\56\165\x73\x65\162\x6e\141\x6d\x65\x2c\x20\142\56\160\x61\x73\x73\167\x6f\x72\144\x2c\x20\x62\56\x66\x6f\164\x6f\x2c" . "\40\146\x2e\x6e\141\x6d\141\x5f\x6b\x65\x6c\x61\163\x2c\x20\146\56\153\157\144\145\137\x6b\145\154\141\x73\x2c" . "\x20\x64\x2e\x6e\141\x6d\x61\x5f\162\x75\141\156\147\54\x20\144\56\x6b\x6f\144\x65\x5f\x72\x75\141\x6e\147\54" . "\40\x65\56\153\x6f\x64\145\x5f\x73\x65\163\x69\x2c\x20\x65\x2e\156\141\155\141\x5f\163\145\x73\x69\x2c" . "\x20\x67\x2e\156\x6f\x6d\157\x72\x5f\160\145\163\x65\162\x74\141");
        goto RJ6bz;
        WrZ3K:
        $this->db->where("\141\56\163\145\163\x69\x5f\x69\x64", $sesi);
        goto o3qRi;
        eG3X7:
        $this->db->join("\155\141\163\x74\145\x72\137\153\145\154\141\163\40\x66", "\146\x2e\151\x64\x5f\x6b\145\154\x61\163\x3d\143\x2e\151\144\137\153\145\154\x61\163");
        goto N7jaZ;
        KfxzS:
        $this->db->order_by("\142\56\x6e\x61\x6d\141");
        goto h20TL;
        UFo6e:
        $this->db->join("\143\142\164\x5f\162\165\141\x6e\x67\40\x64", "\x64\x2e\151\x64\137\162\x75\x61\x6e\147\75\141\x2e\162\165\141\x6e\147\x5f\151\144", "\154\x65\146\164");
        goto flZpl;
        bqj1O:
        if (!($sesi != null)) {
            goto kXt6x;
        }
        goto WrZ3K;
        h0Sn1:
        $this->db->join("\155\x61\x73\x74\x65\x72\x5f\163\151\163\167\141\x20\142", "\142\56\151\x64\x5f\x73\x69\x73\x77\x61\75\141\56\163\151\163\167\141\x5f\x69\x64", "\x6c\x65\x66\x74");
        goto UFo6e;
        N7jaZ:
        $this->db->join("\142\x75\153\165\x5f\x69\x6e\x64\165\x6b\40\x69", "\151\56\x69\x64\x5f\163\x69\x73\167\x61\x3d\x62\x2e\151\x64\x5f\x73\x69\163\167\141\40\101\116\104\x20\75\x69\x2e\163\x74\x61\x74\x75\x73\75\61");
        goto b7Xq0;
        emQM4:
    }
    public function getSiswaByKelasArray($id_tp, $id_smt, $arr_kelas)
    {
        goto iycdm;
        r3eME:
        $this->db->join("\x6d\141\x73\164\x65\162\137\153\x65\154\141\x73\40\146", "\146\56\x69\144\137\x6b\145\154\141\163\75\x61\x2e\x69\x64\137\x6b\145\154\141\163");
        goto I_kbx;
        XsnZv:
        $this->db->order_by("\x6c\x2e\154\x65\x76\x65\x6c", "\101\x53\x43");
        goto d838W;
        N5hwO:
        xamTo:
        goto ORKGx;
        I_kbx:
        $this->db->join("\154\145\x76\x65\154\137\x6b\145\x6c\x61\x73\x20\x6c", "\154\x2e\x69\x64\x5f\154\x65\166\145\x6c\x3d\x66\56\x6c\x65\x76\145\x6c\x5f\x69\144");
        goto KoDQ1;
        ql0S7:
        $this->db->from("\x6b\145\x6c\141\163\137\x73\151\x73\x77\x61\x20\141");
        goto fX4_z;
        QAnK_:
        $this->db->join("\x62\x75\153\165\x5f\x69\x6e\x64\165\x6b\40\151", "\x69\x2e\151\x64\137\163\151\163\x77\x61\75\x61\x2e\x69\144\x5f\x73\x69\x73\x77\141\40\x41\116\104\40\x3d\151\56\163\164\141\x74\165\x73\x3d\x31");
        goto Ru3bw;
        y9h3H:
        $this->db->where("\x61\x2e\x69\144\137\163\155\x74", $id_smt);
        goto XsnZv;
        S29rJ:
        return $this->db->get()->result();
        goto hzWmx;
        KoDQ1:
        $this->db->join("\143\142\x74\x5f\156\157\155\x6f\x72\137\160\145\x73\x65\x72\164\141\x20\147", "\x67\x2e\151\x64\137\x73\151\163\x77\141\75\x61\x2e\151\x64\137\163\151\x73\167\141\40\101\116\x44\x20\147\x2e\151\x64\x5f\164\x70\75" . $id_tp, "\154\145\146\164");
        goto QAnK_;
        fX4_z:
        $this->db->join("\x6d\141\x73\x74\145\162\137\x73\151\163\x77\x61\40\x62", "\x62\x2e\x69\144\137\163\x69\x73\167\141\x3d\141\56\x69\x64\x5f\163\151\163\167\141");
        goto r3eME;
        ZBRGW:
        $this->db->where_in("\141\56\151\144\x5f\x6b\x65\154\141\x73", $arr_kelas);
        goto N5hwO;
        d838W:
        $this->db->order_by("\x66\56\153\157\144\x65\x5f\x6b\x65\x6c\x61\163", "\101\123\x43");
        goto HX2O7;
        Ru3bw:
        if (in_array("\123\x65\155\x75\x61", $arr_kelas)) {
            goto xamTo;
        }
        goto ZBRGW;
        ORKGx:
        $this->db->where("\141\56\151\144\x5f\x74\160", $id_tp);
        goto y9h3H;
        iycdm:
        $this->db->select("\141\56\151\x64\137\x73\x69\x73\x77\x61\x2c" . "\40\142\x2e\156\x61\x6d\x61\x2c\x20\142\x2e\x6e\x69\x73\54\40\142\x2e\156\x69\163\x6e\54\40\142\56\165\163\x65\x72\x6e\141\x6d\145\54\x20\x62\x2e\x70\141\163\x73\167\157\x72\144\x2c" . "\40\146\x2e\156\141\x6d\x61\x5f\x6b\145\154\141\163\x2c\x20\146\x2e\153\x6f\x64\x65\x5f\x6b\145\154\x61\163\54\x20\154\56\154\x65\166\145\154\54\x20\147\x2e\x6e\157\155\x6f\162\137\x70\145\163\145\162\x74\x61");
        goto ql0S7;
        HX2O7:
        $this->db->order_by("\x62\x2e\156\141\x6d\x61", "\x41\x53\x43");
        goto S29rJ;
        hzWmx:
    }
    public function getKelasList($tp, $smt)
    {
        goto ijAg2;
        f6fsG:
        $this->db->join("\x6d\141\163\x74\x65\x72\137\x6a\x75\162\165\163\141\x6e\x20\143", "\x63\x2e\x69\x64\x5f\x6a\165\x72\165\163\x61\156\x3d\x61\x2e\x6a\x75\162\x75\x73\x61\x6e\137\151\144", "\154\145\146\164");
        goto d0bZd;
        EpFJS:
        $this->db->where("\x61\56\151\x64\x5f\163\x6d\164", $smt);
        goto Oxj91;
        NlTPt:
        $this->db->order_by("\141\56\156\141\155\x61\x5f\x6b\145\154\141\x73", "\101\123\103");
        goto EY75n;
        st0of:
        $this->db->from("\x6d\x61\163\164\x65\162\x5f\x6b\x65\154\x61\163\40\141");
        goto oDIpG;
        EY75n:
        $query = $this->db->get();
        goto kSC1O;
        kSC1O:
        return $query->result();
        goto B88yo;
        ijAg2:
        $this->db->select("\x61\x2e\151\144\137\153\x65\x6c\141\163\54\x20\x61\56\x6e\141\155\141\137\x6b\x65\154\x61\163\x2c\40\x61\56\153\157\144\x65\x5f\x6b\x65\154\x61\163\x2c\40\143\x2e\x6e\x61\x6d\141\137\152\x75\162\x75\163\141\x6e\x2c\40\142\56\151\144\x5f\x72\x75\141\156\147\x2c\x20\x62\x2e\151\144\137\163\145\163\151\54\40\x62\56\163\x65\164\137\163\151\x73\x77\141");
        goto st0of;
        d0bZd:
        $this->db->join("\154\x65\166\145\154\x5f\153\x65\x6c\x61\x73\40\x64", "\144\56\x69\x64\137\154\x65\x76\x65\154\75\x61\56\x6c\x65\166\145\154\137\x69\x64", "\154\145\146\x74");
        goto WziPI;
        WziPI:
        $this->db->where("\x61\56\x69\144\137\164\x70", $tp);
        goto EpFJS;
        oDIpG:
        $this->db->join("\x63\x62\164\x5f\x6b\x65\x6c\x61\163\137\x72\x75\x61\156\147\40\142", "\141\56\x69\144\x5f\x6b\x65\x6c\x61\163\x3d\142\x2e\x69\x64\x5f\153\145\x6c\x61\x73", "\154\145\x66\x74");
        goto f6fsG;
        Oxj91:
        $this->db->order_by("\x61\x2e\x6c\145\x76\145\154\x5f\x69\144", "\101\x53\103");
        goto NlTPt;
        B88yo:
    }
    public function getKelas($tp = null, $smt = null)
    {
        goto Bew5N;
        Bew5N:
        $this->db->select("\x61\56\x69\x64\x5f\x6b\145\154\141\x73\x2c\x20\x61\56\156\x61\x6d\141\137\x6b\145\x6c\141\163\54\x20\x61\x2e\x6b\157\144\145\x5f\153\x65\154\141\163\x2c\x20\142\x2e\x6c\x65\166\145\x6c");
        goto qxAm5;
        Ta5t6:
        $this->db->order_by("\x61\x2e\156\141\155\x61\137\153\x65\154\x61\x73", "\101\123\103");
        goto MEoOl;
        JT6wL:
        $this->db->where("\141\x2e\x69\x64\x5f\x74\x70", $tp);
        goto MpMIh;
        XvxZz:
        $this->db->join("\x6c\145\x76\x65\x6c\137\153\x65\154\141\x73\40\142", "\x62\x2e\x69\144\137\154\x65\x76\x65\x6c\x3d\141\x2e\154\145\166\145\x6c\x5f\x69\144", "\154\145\x66\x74");
        goto sPWY1;
        O_Eal:
        u0Csk:
        goto Ta5t6;
        sPWY1:
        if (!($tp != null)) {
            goto k3lka;
        }
        goto JT6wL;
        Sw3c2:
        if (!($smt != null)) {
            goto u0Csk;
        }
        goto zoL_X;
        zoL_X:
        $this->db->where("\x61\x2e\151\144\137\163\x6d\x74", $smt);
        goto O_Eal;
        MEoOl:
        return $this->db->get()->result();
        goto eOgLO;
        MpMIh:
        k3lka:
        goto Sw3c2;
        qxAm5:
        $this->db->from("\155\x61\163\164\145\162\x5f\x6b\x65\x6c\x61\x73\40\141");
        goto XvxZz;
        eOgLO:
    }
    public function getDataTableBank($guru = null)
    {
        goto oD01t;
        ta560:
        $this->datatables->join("\155\141\163\164\x65\162\x5f\152\x75\162\x75\x73\141\156\x20\x64", "\x64\56\151\x64\x5f\x6a\x75\162\x75\163\x61\156\75\141\x2e\142\141\x6e\x6b\x5f\152\x75\162\x75\163\141\x6e\x5f\x69\144", "\x6c\x65\146\x74");
        goto OmSKR;
        IDY1A:
        $this->datatables->from("\x63\142\x74\x5f\x62\141\x6e\x6b\137\163\157\141\154\40\141");
        goto rEMXA;
        Wm18c:
        $this->datatables->join("\x6d\x61\163\x74\x65\x72\137\147\165\x72\165\x20\143", "\143\x2e\151\x64\137\147\165\162\165\x3d\x61\56\x62\x61\156\x6b\x5f\147\165\162\x75\137\x69\144", "\x6c\145\x66\164");
        goto ta560;
        OmSKR:
        $this->datatables->join("\143\142\x74\137\x6a\145\156\151\x73\40\x65", "\145\x2e\x69\x64\x5f\x6a\x65\156\x69\163\75\x61\56\x62\x61\156\153\x5f\152\x65\156\151\x73\x5f\151\144", "\154\x65\x66\164");
        goto kafl_;
        rEMXA:
        $this->datatables->join("\x6d\x61\163\x74\x65\162\x5f\155\x61\160\145\x6c\x20\x62", "\142\56\x69\144\x5f\155\141\x70\145\x6c\75\141\x2e\x62\141\x6e\153\x5f\x6d\x61\160\145\154\x5f\x69\x64", "\x6c\145\146\x74");
        goto Wm18c;
        oD01t:
        $this->datatables->select("\141\56\151\144\137\x62\141\x6e\x6b\x2c\x20\x61\56\142\141\156\153\x5f\153\157\x64\x65\x2c\x20\141\56\142\x61\156\153\x5f\154\145\166\145\x6c\54\40\x61\56\164\141\x6d\x70\151\154\137\160\147\x2c\x20\x61\56\x74\x61\155\x70\151\154\x5f\145\163\x61\151\54\x20\141\56\x73\x74\141\164\x75\163\x2c\40\142\x2e\x6e\141\x6d\141\137\x6d\141\160\x65\154\54\40\143\x2e\x6e\141\155\x61\137\x67\165\162\x75");
        goto IDY1A;
        ePjlE:
        return $this->datatables->generate();
        goto nOVCB;
        kafl_:
        if (!($guru !== null)) {
            goto tRFo8;
        }
        goto HJ0cC;
        MdOCj:
        tRFo8:
        goto ePjlE;
        HJ0cC:
        $this->datatables->where("\x61\56\142\141\156\x6b\137\147\165\162\165\137\151\x64", $guru);
        goto MdOCj;
        nOVCB:
    }
    public function getDataBank($guru = null, $mapel = null, $level = null)
    {
        goto CFVUx;
        XEAE0:
        wyD65:
        goto ilU4X;
        gkauX:
        $this->db->join("\x6d\x61\163\x74\x65\162\x5f\155\141\160\x65\154\40\x62", "\142\56\151\144\137\x6d\x61\160\x65\x6c\75\x61\56\142\x61\156\153\x5f\x6d\x61\x70\145\x6c\x5f\x69\x64", "\154\x65\146\x74");
        goto nHgZ2;
        ysqjo:
        if (!($mapel !== null)) {
            goto ReQkz;
        }
        goto cqEk1;
        NA32d:
        $this->db->where("\x61\x2e\x62\141\x6e\x6b\137\x6c\x65\166\x65\154", $level);
        goto S22wu;
        UtDp0:
        $result = $this->db->get()->result();
        goto EHSZQ;
        PL2jK:
        mUaw5:
        goto ysqjo;
        wKPvo:
        $this->db->from("\143\142\164\137\x62\x61\156\153\137\x73\157\x61\x6c\40\141");
        goto gkauX;
        dYm1t:
        if (!($level !== null)) {
            goto Yw79N;
        }
        goto NA32d;
        ilU4X:
        return $ret;
        goto YzhxQ;
        CFVUx:
        $this->db->select("\141\56\x69\144\137\142\141\x6e\x6b\54\40\141\x2e\x69\144\x5f\x74\x70\x2c\x20\141\56\x69\x64\137\x73\x6d\x74\54\x20\x61\x2e\x62\141\x6e\x6b\x5f\153\157\x64\x65\54\x20\141\x2e\142\x61\156\153\x5f\x6c\145\x76\x65\x6c\x2c\40\x61\56\x62\x61\156\x6b\x5f\153\145\x6c\141\x73\54" . "\40\x61\56\164\x61\155\x70\151\x6c\x5f\x70\x67\x2c\x20\141\56\164\x61\x6d\160\151\x6c\137\x6b\x6f\x6d\160\x6c\x65\153\163\x2c\40\x61\x2e\x74\x61\155\x70\151\x6c\x5f\152\x6f\144\x6f\x68\153\x61\x6e\x2c\40\141\56\164\x61\155\x70\151\154\137\x69\x73\x69\141\156\54\x20\x61\56\164\141\x6d\160\x69\x6c\x5f\145\x73\x61\x69\54\x20\x61\56\142\x61\x6e\x6b\x5f\x67\165\162\x75\137\151\x64\x2c" . "\40\x62\x2e\x6e\x61\x6d\141\137\155\x61\160\x65\x6c\54\40\x63\56\x69\144\137\x67\165\162\x75\54" . "\40\x28\x53\105\114\x45\103\124\40\103\x4f\x55\x4e\124\50\151\x64\137\163\x6f\x61\154\x29\40\x46\122\x4f\115\x20\143\x62\x74\x5f\163\157\141\154\40\127\x48\105\122\105\x20\x63\142\x74\x5f\x73\x6f\141\x6c\x2e\142\141\156\x6b\x5f\x69\x64\40\75\x20\141\x2e\x69\x64\x5f\x62\x61\156\x6b\51\x20\101\123\x20\164\x6f\x74\x61\154\137\x73\x6f\x61\154\54" . "\40\50\123\x45\114\x45\x43\x54\40\103\117\125\x4e\x54\50\151\144\x5f\152\x61\x64\167\141\154\x29\x20\106\122\117\115\40\143\x62\x74\x5f\152\141\144\x77\x61\x6c\40\x57\110\105\x52\x45\x20\143\142\x74\137\152\141\x64\x77\x61\154\x2e\x69\x64\137\x62\x61\x6e\153\40\x3d\40\141\56\151\144\x5f\x62\x61\x6e\153\40\x41\x4e\x44\40\x63\142\x74\x5f\152\x61\144\x77\141\154\x2e\x73\x74\x61\164\x75\163\75\42\x31\42\51\x20\101\123\40\144\x69\147\x75\156\141\153\x61\156");
        goto wKPvo;
        G4Qmz:
        ReQkz:
        goto dYm1t;
        Gdur7:
        if (!($guru !== null)) {
            goto mUaw5;
        }
        goto fxEkw;
        EHSZQ:
        $ret = [];
        goto o9Nyd;
        JSc8C:
        $this->db->order_by("\x61\x2e\x62\x61\x6e\x6b\x5f\154\145\166\x65\154", "\x41\x53\103");
        goto UtDp0;
        o9Nyd:
        foreach ($result as $row) {
            $ret[$row->id_tp][$row->id_smt][] = $row;
            ueRQx:
        }
        goto XEAE0;
        nHgZ2:
        $this->db->join("\x6d\141\163\x74\145\162\x5f\147\165\162\165\x20\143", "\x63\56\151\x64\x5f\x67\165\162\x75\75\x61\x2e\142\141\x6e\153\137\147\165\162\165\137\151\x64", "\154\x65\146\x74");
        goto Gdur7;
        S22wu:
        Yw79N:
        goto JSc8C;
        cqEk1:
        $this->db->where("\x61\56\x62\x61\x6e\153\137\155\141\x70\x65\x6c\x5f\x69\x64", $mapel);
        goto G4Qmz;
        fxEkw:
        $this->db->where("\141\x2e\142\141\156\153\137\x67\165\x72\x75\x5f\151\144", $guru);
        goto PL2jK;
        YzhxQ:
    }
    public function getDataBankById($id)
    {
        goto Mhwrl;
        h5Fjc:
        $this->db->where("\141\x2e\x69\144\137\142\x61\156\153", $id);
        goto jATBc;
        jATBc:
        return $this->db->get()->row();
        goto CGCx5;
        xG8hR:
        $this->db->join("\x6d\141\163\164\145\162\x5f\147\165\x72\165\40\143", "\x63\56\x69\144\x5f\x67\165\x72\x75\x3d\x61\56\x62\141\x6e\153\x5f\147\x75\x72\165\137\x69\144", "\154\145\x66\164");
        goto lONzf;
        lONzf:
        $this->db->join("\155\141\x73\x74\x65\x72\x5f\152\x75\x72\x75\163\141\x6e\x20\x64", "\x64\x2e\151\144\x5f\152\x75\162\165\x73\x61\x6e\x3d\x61\56\142\141\156\153\x5f\x6a\165\162\x75\x73\x61\x6e\137\151\144", "\x6c\145\146\164");
        goto h5Fjc;
        zQ8FR:
        $this->db->from("\143\x62\164\137\x62\141\156\x6b\137\x73\x6f\141\x6c\x20\141");
        goto eAxEa;
        Mhwrl:
        $this->db->select("\141\56\x2a\54\x20\142\56\x6e\141\x6d\x61\137\155\x61\160\x65\154\54\40\142\x2e\x6b\x6f\x64\x65\54\x20\143\x2e\x6e\141\155\141\x5f\x67\165\x72\165\x2c\x20\x64\x2e\156\x61\x6d\141\137\x6a\x75\x72\x75\163\x61\156\54\x20\144\x2e\x6b\157\144\145\137\x6a\165\162\165\163\x61\156\54" . "\x20\50\x53\105\114\105\x43\124\40\x43\x4f\x55\116\x54\50\151\x64\x5f\x6a\141\x64\x77\141\154\x29\40\x46\122\117\115\x20\143\x62\x74\x5f\x6a\x61\x64\167\141\x6c\x20\127\x48\x45\x52\105\40\x63\142\164\137\x6a\141\144\167\141\154\x2e\151\x64\x5f\x62\x61\x6e\x6b\40\75\x20\x61\56\151\x64\137\x62\141\156\153\x20\101\x4e\x44\x20\143\x62\x74\137\152\x61\x64\x77\141\x6c\x2e\x73\x74\x61\164\165\163\x3d\42\x31\42\51\40\101\123\x20\x64\151\147\x75\156\141\153\141\x6e");
        goto zQ8FR;
        eAxEa:
        $this->db->join("\155\141\163\164\145\162\137\x6d\141\160\x65\x6c\40\142", "\x62\56\x69\x64\137\155\x61\x70\145\154\75\x61\56\x62\141\x6e\153\137\x6d\141\x70\145\x6c\x5f\151\144", "\154\x65\146\164");
        goto xG8hR;
        CGCx5:
    }
    public function getTotalSoal($id_bank, $jenis = null)
    {
        goto HEEKo;
        Gs68q:
        return $this->db->get("\x63\x62\164\137\x73\157\x61\154")->num_rows();
        goto duYqb;
        HEEKo:
        $this->db->where("\x62\x61\x6e\x6b\x5f\x69\x64", $id_bank);
        goto TeT7E;
        jXrzN:
        $this->db->where("\152\145\x6e\151\x73", $jenis);
        goto SHMhI;
        TeT7E:
        if (!($jenis != null)) {
            goto oPuY6;
        }
        goto jXrzN;
        SHMhI:
        oPuY6:
        goto Gs68q;
        duYqb:
    }
    public function getNomorSoalById($id_soal)
    {
        goto kCEVx;
        DjXPW:
        $this->db->where("\151\x64\x5f\x73\157\141\x6c", $id_soal);
        goto iCXnk;
        iCXnk:
        return $this->db->get("\143\142\164\137\163\157\141\x6c")->row();
        goto kgHwX;
        kCEVx:
        $this->db->select("\156\157\x6d\157\162\137\163\x6f\141\154\x2c\x20\x6a\145\156\151\x73\54\x20\x62\141\156\153\137\151\x64");
        goto DjXPW;
        kgHwX:
    }
    public function getFileSoalById($id_soal)
    {
        goto qE8Ct;
        CA02X:
        return $this->db->get("\x63\x62\164\x5f\163\x6f\x61\x6c")->row();
        goto IxVeW;
        RVAC3:
        $this->db->where("\151\144\137\163\x6f\x61\x6c", $id_soal);
        goto CA02X;
        qE8Ct:
        $this->db->select("\x66\x69\154\x65");
        goto RVAC3;
        IxVeW:
    }
    public function getSoalByBank($id_bank)
    {
        goto tDIKt;
        MOHHj:
        $this->db->order_by("\156\157\x6d\157\162\x5f\x73\157\141\154");
        goto pDrqt;
        mK2Mv:
        $ret = [];
        goto zZX_1;
        h8Xvz:
        firKf:
        goto BvwEd;
        m4rwu:
        $this->db->from("\143\142\x74\x5f\x73\x6f\x61\154");
        goto hQZU4;
        zZX_1:
        foreach ($result as $row) {
            $ret[$row->jenis][$row->nomor_soal] = $row;
            PPIuI:
        }
        goto h8Xvz;
        WrNDr:
        $this->db->order_by("\x6a\x65\x6e\x69\163");
        goto MOHHj;
        tDIKt:
        $this->db->select("\151\144\137\163\x6f\x61\x6c\54\x20\x62\141\x6e\x6b\x5f\x69\x64\54\40\x6d\x61\160\x65\x6c\x5f\151\x64\x2c\x20\152\145\156\x69\x73\x2c\x20\156\157\155\157\162\137\x73\157\x61\x6c\x2c\x20\163\x6f\x61\x6c\54\40\157\160\x73\x69\137\141\54\40\x6f\160\x73\151\137\x62\54\x20\157\x70\x73\151\x5f\x63\x2c\x20\x6f\160\163\151\137\144\x2c\40\157\160\x73\151\137\145\x2c\40\x6a\x61\167\x61\x62\141\x6e");
        goto m4rwu;
        BvwEd:
        return $ret;
        goto xAAp3;
        pDrqt:
        $result = $this->db->get()->result();
        goto mK2Mv;
        hQZU4:
        $this->db->where("\142\x61\x6e\x6b\x5f\x69\144", $id_bank);
        goto WrNDr;
        xAAp3:
    }
    public function getAllSoalByBank($id_bank, $jenis = null)
    {
        goto AUuSL;
        M679H:
        return $this->db->get("\143\142\164\137\163\x6f\141\154")->result();
        goto M196V;
        bfGRj:
        $this->db->where("\152\145\x6e\151\x73", $jenis);
        goto P5J5Y;
        P5J5Y:
        Xh1RV:
        goto M679H;
        AUuSL:
        $this->db->select("\x69\x64\x5f\163\157\x61\154\x2c\x20\142\x61\156\153\x5f\x69\144\x2c\x20\x6d\141\x70\145\154\137\151\144\54\40\x6a\145\x6e\x69\x73\54\40\156\x6f\x6d\157\x72\x5f\x73\157\141\x6c\54\x20\163\157\141\x6c\x2c\40\157\x70\x73\x69\x5f\141\x2c\x20\157\x70\x73\x69\137\x62\54\40\x6f\x70\x73\x69\x5f\143\x2c\40\157\x70\x73\x69\x5f\x64\54\x20\x6f\x70\163\x69\x5f\145\x2c\40\152\141\167\141\x62\x61\156\x2c\x20\x74\141\155\x70\x69\x6c\153\141\x6e");
        goto CPD5A;
        Y0mAs:
        if (!($jenis != null)) {
            goto Xh1RV;
        }
        goto bfGRj;
        CPD5A:
        $this->db->where("\x62\x61\156\153\137\151\144", $id_bank);
        goto Y0mAs;
        M196V:
    }
    public function getSoalByNomor($id_bank, $nomor, $jenis)
    {
        goto v4xAC;
        qx856:
        $this->db->where("\156\x6f\x6d\157\x72\x5f\163\157\141\154", $nomor);
        goto pd1CR;
        sz0NU:
        return $this->db->get("\x63\142\164\137\163\x6f\x61\154")->row();
        goto oV49t;
        pd1CR:
        $this->db->where("\x6a\x65\156\151\x73", $jenis);
        goto sz0NU;
        CLxyr:
        $this->db->where("\x62\x61\156\153\x5f\151\x64", $id_bank);
        goto qx856;
        v4xAC:
        $this->db->select("\x2a");
        goto CLxyr;
        oV49t:
    }
    public function getNomorSoalByBankJenis($id_bank, $jenis)
    {
        goto TFW4d;
        jb3Fo:
        Q_wmx:
        goto Xibng;
        ExiMH:
        foreach ($result as $key => $row) {
            $ret[$row->nomor_soal] = $row;
            wq55G:
        }
        goto jb3Fo;
        fJM1m:
        $this->db->where("\152\145\x6e\x69\163", $jenis);
        goto QDWFK;
        nZLS0:
        $ret = [];
        goto ExiMH;
        Xibng:
        return $ret;
        goto b6xjV;
        TFW4d:
        $this->db->select("\x69\x64\137\x73\x6f\141\x6c\54\40\152\x65\156\x69\163\54\x20\x6e\157\155\x6f\162\x5f\x73\x6f\141\x6c");
        goto jQl05;
        QDWFK:
        $result = $this->db->get("\x63\142\x74\x5f\x73\x6f\141\x6c")->result();
        goto nZLS0;
        jQl05:
        $this->db->where("\x62\141\156\x6b\x5f\151\x64", $id_bank);
        goto fJM1m;
        b6xjV:
    }
    public function getNomorSoalByBank($id_bank, $jenis = null)
    {
        goto ugUmv;
        mn_6g:
        foreach ($result as $key => $row) {
            $ret[$row->id_soal] = $row;
            nqc2h:
        }
        goto QNkIU;
        W8ERD:
        $this->db->where("\164\x61\155\x70\x69\154\x6b\141\156", "\x31");
        goto ecc7t;
        vjopV:
        $result = $this->db->get("\143\x62\164\x5f\163\x6f\141\154")->result();
        goto AD3cs;
        ecc7t:
        if (!($jenis != null)) {
            goto SVwLr;
        }
        goto DUgkt;
        evxJj:
        SVwLr:
        goto vjopV;
        ugUmv:
        $this->db->select("\151\x64\x5f\x73\x6f\141\154\54\x20\x6a\x65\x6e\x69\x73\x2c\40\x6e\x6f\155\x6f\x72\137\163\x6f\141\x6c\54\x20\x6a\x61\x77\x61\x62\141\x6e");
        goto qJySk;
        VN6k9:
        return $ret;
        goto Sf1Vh;
        AD3cs:
        $ret = [];
        goto mn_6g;
        DUgkt:
        $this->db->where("\152\x65\156\x69\x73", $jenis);
        goto evxJj;
        QNkIU:
        yPhd3:
        goto VN6k9;
        qJySk:
        $this->db->where("\142\141\x6e\x6b\137\151\144", $id_bank);
        goto W8ERD;
        Sf1Vh:
    }
    public function getNomorSoalByArrIdBank($arr_id_bank, $jenis = null)
    {
        goto OeKdG;
        lm5_R:
        $this->db->where("\x6a\x65\x6e\x69\x73", $jenis);
        goto pyr4Y;
        K1_iS:
        if (!($jenis != null)) {
            goto aLca_;
        }
        goto lm5_R;
        OeKdG:
        $this->db->select("\151\x64\137\163\x6f\141\x6c\54\x20\152\145\156\151\163\x2c\40\x6e\x6f\x6d\157\162\x5f\163\x6f\141\154\x2c\40\152\141\x77\x61\x62\x61\156");
        goto MkOB1;
        BY8gM:
        return $this->db->get("\x63\x62\x74\x5f\x73\157\141\154")->result();
        goto ZPGZ4;
        MkOB1:
        $this->db->where_in("\142\141\156\x6b\x5f\151\x64", $arr_id_bank);
        goto K1_iS;
        pyr4Y:
        aLca_:
        goto BY8gM;
        ZPGZ4:
    }
    public function cekSoalAda($id_bank, $jenis)
    {
        goto kxhcZ;
        kxhcZ:
        $this->db->select("\x69\x64\x5f\x73\x6f\x61\x6c\x2c\x20\142\x61\x6e\153\137\151\144\x2c\x20\x6a\x65\156\151\x73\x2c\40\156\x6f\x6d\x6f\162\x5f\163\x6f\x61\154");
        goto PoGRT;
        PoGRT:
        $this->db->where("\142\x61\x6e\153\137\151\144", $id_bank);
        goto FNaiz;
        FNaiz:
        $this->db->where("\152\x65\x6e\151\x73", $jenis);
        goto r2f02;
        r2f02:
        return $this->db->get("\143\142\x74\x5f\163\157\x61\154")->result();
        goto x5WWR;
        x5WWR:
    }
    public function cekSoalKomplit($id_bank, $jenjang)
    {
        goto q_Sm0;
        ih5F6:
        $this->db->where("\x62\x61\x6e\x6b\x5f\x69\144", $id_bank)->where("\163\157\141\x6c\40\116\x4f\124\x20\116\125\x4c\114")->or_where("\x6f\160\x73\x69\x5f\x61\x20\116\x4f\x54\x20\116\125\x4c\114")->or_where("\157\160\x73\151\137\x62\40\x4e\x4f\124\40\x4e\125\114\x4c")->or_where("\x6f\x70\163\151\137\143\40\x4e\117\x54\40\116\x55\114\x4c")->or_where("\157\x70\163\151\x5f\144\x20\x4e\x4f\x54\40\116\125\114\114")->or_where("\152\x61\167\x61\x62\141\156\x20\116\x4f\x54\x20\116\125\x4c\x4c");
        goto g6Gov;
        q_Sm0:
        $this->db->select("\151\x64\137\163\157\x61\154\54\40\x62\141\x6e\x6b\137\x69\x64\x2c\x20\x6a\x65\x6e\x69\163\54\40\x6e\x6f\155\x6f\162\137\x73\157\141\154");
        goto ih5F6;
        Nx7KK:
        $this->db->or_where("\x6f\x70\x73\151\137\145\40\x4e\x4f\x54\40\116\125\114\114");
        goto jhPcf;
        qvBy2:
        return $this->db->get("\143\x62\x74\x5f\163\157\141\x6c")->result();
        goto VmLmb;
        g6Gov:
        if (!($jenjang == "\63")) {
            goto dnUgD;
        }
        goto Nx7KK;
        jhPcf:
        dnUgD:
        goto qvBy2;
        VmLmb:
    }
    public function cekSoalBelumKomplit($jenis, $opsi_ganda)
    {
        goto AcFbF;
        ohp0B:
        $this->db->where("\152\x65\x6e\151\163", $jenis);
        goto xqDBt;
        XK6Vp:
        if (!($jenis == "\x31")) {
            goto trzX8;
        }
        goto lKdV4;
        wOxLH:
        $this->db->where("\157\160\x73\x69\x5f\x64\x20\x49\x53\x20\x4e\x55\x4c\114")->or_where("\157\160\x73\151\x5f\144\x20\x3d\42\42");
        goto dMoTx;
        lKdV4:
        $this->db->where("\x6f\160\163\151\137\x61\40\x49\x53\40\116\125\x4c\x4c")->or_where("\157\160\163\151\137\141\x20\75\42\x22");
        goto qJWpl;
        xqDBt:
        $this->db->where("\163\157\x61\154\x20\111\x53\x20\x4e\x55\114\114")->or_where("\x73\x6f\x61\154\40\75\x22\42");
        goto XK6Vp;
        Rscdz:
        XUaNM:
        goto kj6gI;
        EHDQL:
        $result = $this->db->get()->result();
        goto Nn1we;
        prZix:
        $this->db->where("\157\160\x73\x69\137\143\40\x49\x53\x20\116\125\x4c\x4c")->or_where("\157\160\x73\x69\137\143\x20\75\42\42");
        goto WCspx;
        SnR23:
        if (!($opsi_ganda == "\65")) {
            goto vQpnu;
        }
        goto cqxdh;
        u8iup:
        $this->db->where("\x6f\160\163\x69\x5f\x65\x20\x49\123\40\116\x55\x4c\114")->or_where("\x6f\160\x73\151\137\145\40\x3d\x22\42");
        goto rPVwu;
        rPVwu:
        vQpnu:
        goto oRd8I;
        wOgLR:
        $this->db->where("\x6f\x70\163\x69\137\141\40\x49\x53\x20\x4e\x55\114\x4c")->or_where("\157\160\x73\151\x5f\141\x20\75\x22\x22");
        goto Es3ng;
        AcFbF:
        $this->db->select("\151\144\137\x73\x6f\x61\154\54\x20\142\x61\x6e\153\x5f\x69\x64\54\40\x6a\x65\x6e\151\163\x2c\40\156\x6f\155\x6f\x72\137\163\x6f\141\x6c\x2c\40\x6d\141\160\x65\x6c\x5f\151\x64");
        goto vQcdT;
        o66BA:
        if (!($jenis == "\x32")) {
            goto R5CeH;
        }
        goto wOgLR;
        Es3ng:
        R5CeH:
        goto nNWvn;
        mREE0:
        $ret = [];
        goto EHDQL;
        dMoTx:
        yx8pJ:
        goto SnR23;
        kj6gI:
        return $ret;
        goto F3wWW;
        nNWvn:
        $this->db->where("\152\x61\x77\141\142\141\156\x20\111\x53\x20\116\x55\114\114")->or_where("\x6a\141\167\x61\142\141\156\x20\x3d\42\42");
        goto mREE0;
        Nn1we:
        foreach ($result as $key => $row) {
            $ret[$row->bank_id][] = $row;
            UCMWI:
        }
        goto Rscdz;
        cqxdh:
        $this->db->where("\157\x70\x73\x69\x5f\x64\x20\x49\123\x20\x4e\x55\x4c\114")->or_where("\x6f\160\x73\151\137\x64\40\x3d\42\x22");
        goto u8iup;
        oRd8I:
        trzX8:
        goto o66BA;
        vQcdT:
        $this->db->from("\x63\142\x74\137\x73\x6f\x61\154");
        goto ohp0B;
        WCspx:
        if (!($opsi_ganda == "\64")) {
            goto yx8pJ;
        }
        goto wOxLH;
        qJWpl:
        $this->db->where("\157\x70\163\x69\137\142\x20\x49\x53\40\x4e\x55\114\114")->or_where("\x6f\x70\163\x69\137\142\40\75\42\x22");
        goto prZix;
        F3wWW:
    }
    public function getNomorSoalTerbesar($id_bank, $jenis)
    {
        goto TcgLA;
        Ve1Va:
        return $this->db->get("\143\142\164\137\163\157\141\154")->row();
        goto WRrEA;
        TcgLA:
        $this->db->select("\156\x6f\155\157\162\x5f\x73\157\x61\154");
        goto xzlC7;
        xzlC7:
        $this->db->where("\x62\141\x6e\x6b\137\x69\x64", $id_bank)->where("\x6a\x65\156\151\x73", $jenis);
        goto P2XGT;
        P2XGT:
        $this->db->order_by("\x6e\157\155\157\x72\x5f\x73\x6f\141\x6c", "\104\x45\x53\x43");
        goto Ve1Va;
        WRrEA:
    }
    public function dummy($jenjang)
    {
        $data = array("\x69\144\x5f\142\141\x6e\153" => '', "\x62\141\156\x6b\137\x6a\x65\x6e\x69\163\x5f\151\x64" => '', "\142\141\x6e\153\137\x6b\x6f\144\145" => '', "\x62\141\156\153\x5f\155\141\x70\145\x6c\x5f\x69\x64" => '', "\x62\141\x6e\x6b\x5f\x6c\145\166\145\x6c" => '', "\x62\141\156\x6b\137\x6b\145\x6c\141\163" => serialize([]), "\x62\x61\156\153\x5f\147\x75\162\165\x5f\151\x64" => '', "\x6a\155\154\x5f\163\x6f\x61\x6c" => "\x30", "\x62\157\142\157\164\137\x70\147" => "\x30", "\x74\141\x6d\160\x69\x6c\x5f\160\147" => "\x30", "\x6f\x70\163\x69" => $jenjang == "\61" ? "\x33" : ($jenjang == "\62" ? "\x34" : ($jenjang == "\63" ? "\x35" : '')), "\152\x6d\x6c\137\153\157\155\160\154\145\153\163" => "\60", "\x74\141\155\x70\x69\x6c\137\x6b\157\x6d\x70\x6c\x65\153\x73" => "\x30", "\x62\x6f\142\157\x74\x5f\153\x6f\x6d\x70\154\145\153\163" => "\60", "\x6a\155\154\x5f\152\157\x64\157\150\153\x61\x6e" => "\x30", "\x74\x61\x6d\160\151\154\137\152\157\x64\157\150\x6b\141\156" => "\60", "\x62\x6f\142\x6f\164\x5f\x6a\157\x64\157\150\x6b\x61\156" => "\60", "\152\155\x6c\x5f\151\x73\151\x61\x6e" => "\60", "\164\x61\x6d\160\151\x6c\137\151\x73\151\141\156" => "\60", "\x62\157\x62\157\x74\137\x69\163\151\x61\x6e" => "\60", "\152\x6d\x6c\137\x65\x73\141\x69" => "\x30", "\142\x6f\142\x6f\x74\137\145\x73\x61\151" => "\x30", "\x74\141\x6d\x70\x69\154\137\x65\163\x61\151" => "\x30", "\153\x6b\155" => '', "\x73\157\x61\x6c\137\141\x67\141\x6d\141" => "\x2d", "\163\164\x61\164\165\163" => "\x31");
        return $data;
    }
    public function saveBankSoal($tp, $smt)
    {
        goto u6We7;
        a8Ho5:
        $this->db->insert("\143\142\164\x5f\142\x61\x6e\153\x5f\x73\x6f\141\154", $data);
        goto LU0Fn;
        b1r6S:
        if (!$id) {
            goto KZdQO;
        }
        goto s6Qyg;
        Hz08H:
        fOhrI:
        goto omwa9;
        Z4sdz:
        goto yqdOp;
        goto rDUWl;
        rPBNW:
        $kelas = [];
        goto VzmWi;
        MrwTr:
        yqdOp:
        goto AUBsB;
        qgqOj:
        $rows = count($this->input->post("\153\x65\x6c\x61\163", true));
        goto rPBNW;
        p0OS5:
        Fn6hN:
        goto kD6Au;
        Lq2mn:
        $jumlah = serialize($kelas);
        goto xL5QN;
        xL5QN:
        $data = array("\151\x64\137\164\x70" => $tp, "\151\144\x5f\x73\x6d\x74" => $smt, "\142\x61\x6e\153\137\x6b\157\x64\x65" => strip_tags($this->input->post("\153\x6f\x64\x65", TRUE)), "\x62\x61\156\153\137\x6a\145\156\x69\x73\137\x69\144" => strip_tags($this->input->post("\152\x65\156\x69\x73", TRUE)), "\142\141\156\153\x5f\155\141\x70\145\154\137\x69\x64" => strip_tags($this->input->post("\x6d\x61\160\x65\154", TRUE)), "\142\141\x6e\x6b\137\x6b\x65\x6c\141\163" => $jumlah, "\x62\x61\156\153\x5f\154\145\x76\145\x6c" => $this->input->post("\x6c\x65\x76\x65\154", TRUE), "\x62\141\x6e\x6b\137\147\x75\x72\165\x5f\x69\144" => strip_tags($this->input->post("\147\x75\x72\165", TRUE)), "\152\x6d\154\x5f\x73\x6f\x61\x6c" => strip_tags($this->input->post("\164\141\155\160\151\154\137\160\147", TRUE)), "\x74\141\155\x70\x69\154\137\160\147" => strip_tags($this->input->post("\x74\x61\x6d\x70\x69\x6c\137\160\x67", TRUE)), "\x62\x6f\142\x6f\164\137\x70\x67" => strip_tags($this->input->post("\x62\157\x62\x6f\164\137\x70\147", TRUE)), "\x6f\160\x73\151" => strip_tags($this->input->post("\x6f\160\x73\x69", TRUE)), "\x6a\x6d\x6c\137\153\x6f\155\160\154\145\153\163" => strip_tags($this->input->post("\164\141\155\x70\151\154\x5f\153\x6f\155\x70\154\145\x6b\163", TRUE)), "\164\x61\155\160\x69\154\137\153\x6f\155\x70\x6c\x65\x6b\163" => strip_tags($this->input->post("\x74\141\x6d\x70\151\x6c\x5f\x6b\x6f\155\160\x6c\145\x6b\x73", TRUE)), "\x62\157\142\157\164\137\153\157\155\160\154\x65\153\x73" => strip_tags($this->input->post("\x62\x6f\x62\157\164\x5f\153\x6f\155\160\154\x65\x6b\163", TRUE)), "\152\x6d\x6c\137\x6a\157\144\157\150\153\141\x6e" => strip_tags($this->input->post("\x74\141\155\x70\x69\154\137\x6a\x6f\144\157\x68\153\x61\156", TRUE)), "\x74\141\155\160\151\154\137\x6a\157\144\157\150\x6b\141\x6e" => strip_tags($this->input->post("\164\141\x6d\x70\151\154\x5f\x6a\157\144\x6f\x68\153\x61\156", TRUE)), "\142\157\142\x6f\164\x5f\x6a\157\144\x6f\x68\x6b\141\x6e" => strip_tags($this->input->post("\x62\157\x62\x6f\164\137\x6a\x6f\144\157\150\x6b\x61\156", TRUE)), "\152\155\154\137\x69\x73\151\x61\x6e" => strip_tags($this->input->post("\164\141\155\x70\151\154\137\151\163\x69\141\x6e", TRUE)), "\x74\141\x6d\x70\x69\x6c\x5f\x69\x73\151\141\x6e" => strip_tags($this->input->post("\x74\141\155\x70\x69\x6c\x5f\x69\x73\x69\141\x6e", TRUE)), "\142\157\142\157\x74\x5f\151\163\x69\141\x6e" => strip_tags($this->input->post("\x62\x6f\x62\x6f\x74\x5f\x69\163\x69\141\x6e", TRUE)), "\x6a\155\x6c\x5f\145\163\141\151" => strip_tags($this->input->post("\142\x6f\142\157\x74\137\145\x73\x61\x69", TRUE)), "\x62\x6f\x62\x6f\x74\137\145\163\x61\151" => strip_tags($this->input->post("\142\x6f\x62\157\164\x5f\x65\x73\x61\151", TRUE)), "\164\141\x6d\x70\151\154\137\145\x73\141\151" => strip_tags($this->input->post("\164\x61\x6d\x70\151\154\137\x65\x73\141\151", TRUE)), "\x73\164\141\x74\165\x73" => strip_tags($this->input->post("\163\164\141\164\x75\163", TRUE)), "\163\x6f\141\x6c\x5f\x61\x67\x61\x6d\x61" => strip_tags($this->input->post("\163\157\x61\154\137\141\147\x61\155\x61", TRUE)));
        goto b1r6S;
        LU0Fn:
        $insert_id = $this->db->insert_id();
        goto dMcGt;
        OxoqK:
        l8GC4:
        goto Lq2mn;
        UCRrr:
        return $this->db->update("\x63\x62\x74\137\x62\141\156\153\x5f\163\x6f\x61\154", $data);
        goto Z4sdz;
        rDUWl:
        KZdQO:
        goto a8Ho5;
        Ieyv6:
        $kelas[] = ["\153\145\x6c\x61\x73\x5f\x69\x64" => $this->input->post("\153\145\154\x61\x73\x5b" . $i . "\135", true)];
        goto p0OS5;
        omwa9:
        if (!($i <= $rows)) {
            goto l8GC4;
        }
        goto Ieyv6;
        kD6Au:
        $i++;
        goto MsNl4;
        s6Qyg:
        $this->db->where("\x69\x64\x5f\x62\x61\156\153", $id);
        goto UCRrr;
        VzmWi:
        $i = 0;
        goto Hz08H;
        u6We7:
        $id = $this->input->post("\151\144\x5f\142\x61\x6e\x6b", true);
        goto qgqOj;
        MsNl4:
        goto fOhrI;
        goto OxoqK;
        dMcGt:
        return $insert_id;
        goto MrwTr;
        AUBsB:
    }
    public function dummyJadwal()
    {
        $data = array("\x69\x64\x5f\x62\x61\156\x6b" => '', "\151\144\137\x6a\x61\144\167\x61\154" => '', "\151\x64\137\152\145\x6e\151\163" => '', "\x74\x67\x6c\x5f\x6d\x75\154\x61\x69" => '', "\164\x67\154\137\163\145\x6c\x65\163\x61\x69" => '', "\144\x75\x72\141\x73\151\x5f\x75\152\151\x61\156" => '', "\142\x61\156\153\x5f\153\x65\154\141\x73" => serialize([]), "\141\143\141\153\137\x73\x6f\141\x6c" => '', "\141\x63\x61\153\x5f\157\x70\x73\151" => '', "\x68\x61\x73\151\x6c\137\164\141\x6d\160\x69\x6c" => '', "\164\157\x6b\145\156" => '', "\x73\x74\141\x74\165\x73" => '', "\x75\x6c\x61\x6e\x67" => '', "\152\141\x72\x61\x6b" => '', "\162\x65\x73\145\164\137\x6c\x6f\x67\x69\x6e" => '');
        return $data;
    }
    public function getDistinctJenisJadwal($tp, $smt)
    {
        goto sueg4;
        GOt_i:
        $result = $this->db->get()->result();
        goto vvcBw;
        BSfLm:
        $this->db->where("\x69\144\x5f\x73\155\164", $smt);
        goto GOt_i;
        sueg4:
        $this->db->select("\x69\x64\137\152\x65\156\x69\163");
        goto lf9br;
        OPukt:
        $this->db->from("\x63\142\164\137\152\141\x64\x77\x61\x6c");
        goto wDzwi;
        wDzwi:
        $this->db->where("\x69\x64\x5f\164\x70", $tp);
        goto BSfLm;
        vvcBw:
        return $result;
        goto c7Vfw;
        lf9br:
        $this->db->distinct();
        goto OPukt;
        c7Vfw:
    }
    public function getDataJadwal($tp, $smt, $guru = null, $rekap = null)
    {
        goto UNi5f;
        e6V_p:
        $this->db->where("\x61\56\162\145\153\x61\160", $rekap);
        goto Ff4sS;
        N4liL:
        if (!($rekap !== null)) {
            goto KNGjW;
        }
        goto e6V_p;
        ZjKW1:
        PesMd:
        goto N4liL;
        hajMO:
        $this->db->join("\x6d\141\163\164\145\162\x5f\164\x70\x20\x65", "\x61\x2e\x69\x64\137\x74\160\x3d\x65\x2e\x69\144\x5f\x74\160");
        goto PgkkP;
        PTd9k:
        if (!($guru !== null)) {
            goto PesMd;
        }
        goto xdo7_;
        nXHoK:
        $query = $this->db->get()->result();
        goto kEKVi;
        tHABe:
        $this->db->order_by("\142\56\x62\x61\156\153\x5f\154\145\166\x65\x6c", "\101\x53\103");
        goto nXHoK;
        w8QcC:
        $this->db->join("\154\x65\x76\x65\x6c\x5f\153\x65\154\141\163\x20\147", "\x62\x2e\142\x61\x6e\153\137\x6c\145\x76\145\x6c\x3d\147\x2e\x69\x64\137\x6c\145\x76\x65\154");
        goto PTd9k;
        glNHj:
        $this->db->join("\x63\x62\x74\137\152\x65\156\151\163\x20\x63", "\143\x2e\151\144\x5f\152\145\156\x69\163\75\x61\x2e\151\x64\x5f\x6a\145\156\x69\x73", "\154\x65\x66\164");
        goto vfjlb;
        vfjlb:
        $this->db->join("\155\x61\x73\x74\145\x72\137\155\x61\x70\145\154\x20\x64", "\x64\56\151\144\137\x6d\x61\160\145\x6c\75\142\x2e\x62\141\156\153\137\155\x61\160\145\x6c\137\151\x64", "\x6c\145\146\x74");
        goto hajMO;
        xdo7_:
        $this->db->where("\x62\56\x62\141\x6e\x6b\x5f\147\165\x72\x75\137\151\x64", $guru);
        goto ZjKW1;
        Ff4sS:
        KNGjW:
        goto AWBQI;
        PgkkP:
        $this->db->join("\155\141\163\164\x65\x72\x5f\x73\155\x74\x20\x66", "\141\56\151\x64\x5f\163\x6d\x74\x3d\146\x2e\151\x64\137\x73\155\x74");
        goto w8QcC;
        kEKVi:
        return $query;
        goto sgbXc;
        Dd3j7:
        $this->db->join("\x63\x62\x74\x5f\x62\x61\x6e\153\x5f\x73\157\141\x6c\x20\x62", "\142\56\x69\x64\137\x62\141\156\153\x3d\x61\56\x69\144\x5f\142\141\156\x6b", "\154\145\x66\164");
        goto glNHj;
        UNi5f:
        $this->db->select("\141\x2e\151\x64\x5f\152\141\144\167\141\x6c\54\x20\x61\x2e\151\x64\137\x74\160\x2c\x20\x61\x2e\x69\x64\x5f\x73\x6d\x74\54\x20\x61\56\x69\x64\137\142\x61\156\153\54\40\141\x2e\151\144\x5f\152\x65\156\x69\x73\54\40\141\x2e\164\x67\154\x5f\155\x75\x6c\141\151\54" . "\x20\x61\x2e\164\147\x6c\x5f\x73\x65\x6c\x65\163\141\151\54\x20\141\x2e\163\x74\141\x74\x75\x73\54\x20\x61\56\165\154\141\156\x67\54\x20\141\x2e\x72\145\163\145\x74\x5f\x6c\x6f\147\x69\156\54\x20\141\56\x72\x65\153\141\160\54\40\x61\x2e\152\x61\x6d\x5f\x6b\x65\x2c" . "\x20\x65\56\151\x64\137\164\160\54\x20\x65\x2e\164\x61\x68\165\x6e\54\40\146\x2e\151\144\137\163\x6d\x74\x2c\40\x66\x2e\x6e\x61\x6d\141\137\163\x6d\164\x2c\x20\147\x2e\x6c\x65\166\145\x6c\x2c\x20\142\56\x62\x61\156\x6b\137\x6b\x6f\144\x65\x2c\x20\x62\56\142\141\156\153\137\154\145\166\145\x6c\x2c\40\x62\56\142\x61\156\x6b\137\153\x65\154\x61\163\x2c" . "\x20\x63\56\153\x6f\144\x65\x5f\x6a\145\156\x69\163\x2c\40\x64\56\x6b\157\144\145\x2c\x20\x64\x2e\156\141\155\141\x5f\155\141\160\145\x6c\54" . "\40\x62\56\164\x61\155\160\x69\154\137\x70\147\x2c\x20\142\56\x74\141\155\160\151\x6c\137\x6b\x6f\x6d\160\154\x65\153\163\x2c\x20\142\x2e\164\141\155\x70\151\x6c\x5f\x6a\x6f\144\157\x68\153\x61\156\x2c\x20\142\x2e\164\141\155\160\151\x6c\137\x69\x73\x69\x61\156\54\40\x62\x2e\164\141\155\x70\x69\154\x5f\x65\x73\141\x69\54\x20\142\56\x62\141\156\153\137\x67\x75\162\x75\137\151\144\54" . "\40\50\x53\x45\114\x45\x43\x54\40\x43\x4f\125\x4e\x54\x28\x69\144\137\163\157\x61\x6c\51\x20\x46\x52\117\115\40\143\x62\164\x5f\x73\x6f\141\154\x20\x57\110\105\x52\105\40\x63\142\164\137\163\157\141\154\56\x62\141\x6e\x6b\x5f\151\x64\x20\x3d\40\x61\56\151\x64\137\x62\x61\x6e\153\51\40\101\123\x20\x74\157\164\141\x6c\x5f\163\x6f\x61\154");
        goto xaPet;
        xaPet:
        $this->db->from("\143\x62\164\137\x6a\x61\x64\x77\x61\154\40\141");
        goto Dd3j7;
        AWBQI:
        $this->db->order_by("\x61\56\164\x67\x6c\137\x6d\x75\154\x61\151", "\x44\105\x53\103");
        goto tHABe;
        sgbXc:
    }
    public function getAllDataJadwal($guru = null, $mapel = null, $level = null)
    {
        goto x8JvT;
        bEGOj:
        X1H2H:
        goto MKS4X;
        WSnzF:
        if (!($mapel !== null)) {
            goto PJ6nW;
        }
        goto Eif_v;
        EYbuf:
        $this->db->join("\x6d\x61\x73\x74\x65\162\x5f\x73\155\x74\40\146", "\141\x2e\x69\x64\137\x73\x6d\164\x3d\x66\56\x69\x64\x5f\163\155\164");
        goto g6r6r;
        g6r6r:
        $this->db->join("\154\x65\x76\145\x6c\x5f\153\145\x6c\x61\x73\40\147", "\142\x2e\142\141\x6e\153\137\x6c\x65\166\x65\154\x3d\x67\x2e\151\144\x5f\154\x65\166\x65\x6c");
        goto dE1r3;
        F3oEj:
        $this->db->where("\x62\56\142\x61\156\x6b\137\x6c\x65\x76\145\154", $level);
        goto O6PHV;
        CZZhN:
        if (!($level !== null)) {
            goto elVHc;
        }
        goto F3oEj;
        KB1KR:
        $this->db->join("\143\142\164\137\x62\x61\156\153\137\163\x6f\141\x6c\x20\x62", "\142\x2e\x69\144\x5f\x62\141\x6e\x6b\75\x61\56\x69\144\137\x62\141\x6e\x6b");
        goto X1S8l;
        bVAHP:
        $this->db->where("\142\56\142\141\156\153\137\x67\x75\x72\x75\137\x69\x64", $guru);
        goto e5V_Q;
        yXsh3:
        PJ6nW:
        goto CZZhN;
        O6PHV:
        elVHc:
        goto DOW2K;
        X1S8l:
        $this->db->join("\x63\x62\x74\137\x6a\x65\156\x69\x73\40\143", "\x63\56\151\x64\x5f\152\x65\156\x69\163\x3d\141\56\x69\144\137\x6a\145\156\151\x73", "\x6c\x65\146\x74");
        goto YRfKU;
        qKLdn:
        $ret = [];
        goto INolh;
        x8JvT:
        $this->db->select("\x61\x2e\x69\144\x5f\152\141\x64\x77\x61\x6c\x2c\x20\141\x2e\x74\147\154\137\155\x75\x6c\141\151\x2c\40\x61\56\164\147\154\x5f\x73\x65\154\145\x73\x61\x69\54\40\141\x2e\x73\x74\x61\x74\x75\163\x2c\40\x61\x2e\144\x75\x72\141\163\151\x5f\165\x6a\151\x61\x6e\x2c\x20\141\x2e\x61\143\141\153\x5f\163\157\x61\x6c\54" . "\x20\141\x2e\x61\x63\x61\x6b\x5f\x6f\160\163\151\x2c\x20\x61\56\x69\144\137\142\141\x6e\153\x2c\x20\x61\56\x69\144\x5f\x6a\x65\156\151\x73\x2c\40\141\x2e\x68\141\x73\x69\154\x5f\x74\x61\x6d\x70\x69\154\x2c\x20\141\x2e\163\164\141\164\165\x73\x2c\40\141\56\165\154\x61\156\x67\x2c\40\x61\56\x72\x65\163\x65\x74\x5f\154\157\x67\151\156\54\40\141\56\x72\x65\x6b\141\x70\x2c" . "\40\x61\x2e\x6a\141\x6d\x5f\x6b\145\x2c\40\x61\56\x74\x6f\153\x65\156\54\x20\x65\x2e\164\x61\x68\x75\156\54\40\146\x2e\156\141\x6d\141\137\163\155\164\54\40\x67\x2e\154\145\x76\x65\154\x2c\40\x62\x2e\142\x61\x6e\x6b\137\x6b\x6f\x64\145\x2c\x20\142\56\142\x61\156\x6b\137\154\x65\x76\145\x6c\54\40\142\x2e\142\141\156\x6b\x5f\153\x65\x6c\141\163\54\40\x63\x2e\x6b\157\144\x65\x5f\152\x65\156\x69\163\x2c\40\x64\x2e\x6b\x6f\x64\145\54\40\144\x2e\156\141\155\141\x5f\155\x61\x70\145\x6c\x2c" . "\x20\x62\x2e\x74\x61\155\x70\x69\154\137\160\147\54\x20\142\56\x74\x61\155\x70\x69\x6c\x5f\153\157\x6d\160\x6c\145\x6b\163\54\x20\142\56\164\141\155\160\151\x6c\137\152\x6f\144\157\150\x6b\x61\156\x2c\40\x62\56\164\x61\x6d\160\x69\154\137\151\163\x69\x61\x6e\x2c\40\x62\x2e\164\x61\155\x70\x69\154\x5f\145\x73\x61\x69\x2c\40\x62\x2e\x62\x61\156\x6b\137\147\165\x72\x75\x5f\151\144\54" . "\x20\x28\123\x45\x4c\105\103\x54\x20\x43\117\x55\116\124\x28\x69\144\x5f\x73\157\x61\154\51\40\x46\122\117\x4d\x20\143\x62\164\x5f\163\x6f\x61\154\40\127\x48\105\122\105\x20\143\x62\164\x5f\x73\x6f\141\x6c\x2e\142\141\x6e\x6b\x5f\151\x64\40\75\x20\x61\56\x69\144\137\142\x61\x6e\x6b\x29\40\101\x53\40\x74\157\x74\x61\154\x5f\x73\157\141\154");
        goto WAZnm;
        WAZnm:
        $this->db->from("\143\x62\x74\x5f\x6a\x61\x64\x77\141\154\40\x61");
        goto KB1KR;
        Eif_v:
        $this->db->where("\x62\56\x62\x61\156\153\x5f\155\x61\160\x65\x6c\x5f\x69\x64", $mapel);
        goto yXsh3;
        j70ZI:
        $this->db->join("\x6d\141\x73\164\x65\x72\137\164\160\x20\145", "\x61\x2e\x69\x64\137\x74\x70\x3d\x65\x2e\x69\144\x5f\x74\x70");
        goto EYbuf;
        LvFe1:
        $this->db->order_by("\141\56\151\144\x5f\x73\x6d\x74", "\x44\105\x53\103");
        goto xcUIW;
        lyULk:
        $this->db->order_by("\141\x2e\x69\x64\x5f\164\x70", "\x44\x45\123\x43");
        goto LvFe1;
        e5V_Q:
        RahlK:
        goto WSnzF;
        MKS4X:
        return $ret;
        goto ADO7m;
        INolh:
        foreach ($query as $key => $row) {
            $ret["\74\x62\76" . $row->kode_jenis . "\x3c\x2f\142\x3e\x20\40" . $row->tahun . "\40\x73\x6d\x74\40" . $row->nama_smt][$row->level][] = $row;
            lKymA:
        }
        goto bEGOj;
        DOW2K:
        $this->db->order_by("\142\x2e\x62\x61\156\153\137\154\145\x76\145\x6c", "\101\x53\103");
        goto lyULk;
        dE1r3:
        if (!($guru !== null)) {
            goto RahlK;
        }
        goto bVAHP;
        YRfKU:
        $this->db->join("\x6d\141\x73\164\145\x72\x5f\x6d\141\x70\x65\154\x20\x64", "\144\x2e\151\x64\137\x6d\141\160\145\154\x3d\x62\x2e\x62\x61\x6e\153\137\x6d\141\160\x65\x6c\137\x69\x64", "\x6c\x65\x66\x74");
        goto j70ZI;
        xcUIW:
        $query = $this->db->get()->result();
        goto qKLdn;
        ADO7m:
    }
    public function getJadwalTerpakai($id_jadwal = null)
    {
        goto XHgy0;
        Jgwcm:
        $result = $this->db->get()->result();
        goto DGKd0;
        i0RJw:
        $this->db->where("\151\x64\x5f\x6a\141\x64\x77\x61\x6c", $id_jadwal);
        goto R1Orw;
        DGKd0:
        $ret = [];
        goto LXAU5;
        ZChSp:
        if (!($id_jadwal != null)) {
            goto alZFH;
        }
        goto i0RJw;
        Vttwv:
        dqiaV:
        goto rZ94P;
        R1Orw:
        alZFH:
        goto Jgwcm;
        XHgy0:
        $this->db->from("\x63\x62\164\x5f\x73\x6f\x61\x6c\x5f\x73\x69\163\167\141");
        goto ZChSp;
        LXAU5:
        foreach ($result as $key => $row) {
            $ret[$row->id_jadwal][$row->id_siswa] = $row;
            RUMMi:
        }
        goto Vttwv;
        rZ94P:
        return $ret;
        goto CKzdF;
        CKzdF:
    }
    public function getBankTerpakai($id_bank = null)
    {
        goto buUi4;
        buUi4:
        $this->db->from("\x63\x62\164\137\x73\157\141\x6c\x5f\163\151\163\x77\x61");
        goto Gnf1O;
        yjol3:
        foreach ($result as $key => $row) {
            $ret[$row->id_bank][$row->id_siswa] = $row;
            kq1GL:
        }
        goto mVaH4;
        MDzfP:
        t93Gl:
        goto tWMYi;
        X13As:
        return $ret;
        goto w0n1e;
        tWMYi:
        $result = $this->db->get()->result();
        goto zmAKI;
        Gnf1O:
        if (!($id_bank != null)) {
            goto t93Gl;
        }
        goto t9DEX;
        zmAKI:
        $ret = [];
        goto yjol3;
        mVaH4:
        j78rk:
        goto X13As;
        t9DEX:
        $this->db->where("\x69\144\x5f\142\141\156\x6b", $id_bank);
        goto MDzfP;
        w0n1e:
    }
    public function getRekapByJadwalKelas($jadwal, $guru = null)
    {
        goto oWeyb;
        w1E76:
        $this->db->where("\x69\144\137\x6a\141\144\167\141\154", $jadwal);
        goto lctfb;
        v9TKK:
        $this->db->where("\151\144\137\147\x75\162\165", $guru);
        goto Hs8ag;
        oWeyb:
        $this->db->from("\x63\142\x74\x5f\162\x65\153\141\x70");
        goto w1E76;
        hLI0J:
        $result = $this->db->get()->row();
        goto oGgJq;
        Hs8ag:
        vquOL:
        goto hLI0J;
        lctfb:
        if (!($guru !== null)) {
            goto vquOL;
        }
        goto v9TKK;
        oGgJq:
        return $result;
        goto MD2Pq;
        MD2Pq:
    }
    public function getRekapJadwal($guru = null)
    {
        goto lbVux;
        lbVux:
        $this->db->select("\52");
        goto oXzlf;
        aduJC:
        ed0OG:
        goto z5UGj;
        g72vx:
        if (!($guru !== null)) {
            goto ed0OG;
        }
        goto N0izk;
        dZ9Ul:
        return $query->result();
        goto ATq3F;
        oXzlf:
        $this->db->from("\x63\x62\x74\137\x72\x65\x6b\x61\x70");
        goto g72vx;
        Vcf_j:
        $query = $this->db->get();
        goto dZ9Ul;
        N0izk:
        $this->db->where("\151\x64\137\x67\165\162\x75", $guru);
        goto aduJC;
        z5UGj:
        $this->db->order_by("\164\x67\154\137\155\x75\154\x61\151", "\x44\x45\x53\x43");
        goto Vcf_j;
        ATq3F:
    }
    public function getAllRekapByJenis($tp, $smt, $jenis, $level, $mapel, $jadwal = null, $guru = null)
    {
        goto WG8NS;
        mcSMj:
        $this->db->where("\142\141\156\153\137\154\x65\166\x65\x6c", $level);
        goto jDyDI;
        qzWkx:
        if (!($guru != null)) {
            goto Ve3Mk;
        }
        goto H6HXS;
        kUh6v:
        if (!($mapel != "\60")) {
            goto dPZxO;
        }
        goto Kvk2b;
        Kvk2b:
        $this->db->where("\x69\144\x5f\155\141\160\145\154", $mapel);
        goto bCCHg;
        jDyDI:
        $this->db->order_by("\x69\x64\x5f\x6d\x61\160\145\x6c", "\x41\x53\103");
        goto bD2Xp;
        qDCvX:
        $this->db->where("\163\155\x74", $smt);
        goto OQtUK;
        VnPHH:
        if (!($jadwal != null)) {
            goto g1izn;
        }
        goto i1FiH;
        b3VuG:
        Ve3Mk:
        goto PPFnt;
        AfLtS:
        g1izn:
        goto qzWkx;
        PPFnt:
        $this->db->where("\164\x70", $tp);
        goto qDCvX;
        CQtWq:
        return $result;
        goto UMutu;
        bCCHg:
        dPZxO:
        goto VnPHH;
        bD2Xp:
        $result = $this->db->get()->result();
        goto CQtWq;
        WG8NS:
        $this->db->from("\x63\142\x74\137\162\x65\x6b\x61\x70");
        goto kUh6v;
        OQtUK:
        $this->db->where("\153\x6f\144\x65\137\x6a\145\156\x69\163", $jenis);
        goto mcSMj;
        H6HXS:
        $this->db->where("\x69\144\137\x67\165\x72\165", $guru);
        goto b3VuG;
        i1FiH:
        $this->db->where("\151\144\137\152\141\144\x77\x61\x6c", $jadwal);
        goto AfLtS;
        UMutu:
    }
    public function getAllNilaiRekapByJenis($tp, $smt, $jenis, $kelas, $mapel, $jadwal = null, $guru = null)
    {
        goto gUFB1;
        w2s6h:
        $this->db->where("\x61\56\164\160", $tp);
        goto Yy1qc;
        x7SEs:
        $this->db->where("\141\56\x6b\157\x64\145\137\x6a\145\156\x69\x73", $jenis);
        goto SBGM0;
        BGM5M:
        $this->db->join("\142\x75\153\165\137\x69\x6e\x64\165\153\40\x69", "\151\x2e\151\144\137\163\151\x73\167\141\75\141\x2e\x69\144\137\x73\x69\x73\x77\141\40\101\x4e\x44\40\x3d\x69\56\163\x74\x61\x74\165\x73\x3d\61");
        goto W67_D;
        X9Vsv:
        BCpgd:
        goto by9A2;
        TXHuG:
        if (!($guru != null)) {
            goto BCpgd;
        }
        goto aGQAl;
        gUFB1:
        $this->db->select("\x61\56\x2a\54\40\142\x2e\156\x6f\x6d\157\x72\x5f\160\x65\x73\145\x72\x74\141\x2c\40\143\56\x6e\141\x6d\x61");
        goto as0aw;
        zfOFh:
        return $result;
        goto lNmTW;
        aGQAl:
        $this->db->where("\x61\56\151\144\x5f\147\x75\x72\x75", $guru);
        goto X9Vsv;
        v3HE8:
        if (!($jadwal != null)) {
            goto xvc16;
        }
        goto b38AW;
        y1ZAs:
        $result = $this->db->get()->result();
        goto zfOFh;
        by9A2:
        $this->db->where("\141\x2e\x69\144\x5f\x6b\145\154\x61\x73", $kelas);
        goto w2s6h;
        Yy1qc:
        $this->db->where("\x61\x2e\163\155\164", $smt);
        goto x7SEs;
        as0aw:
        $this->db->from("\143\x62\164\x5f\162\x65\153\141\x70\137\x6e\151\154\x61\151\40\141");
        goto JxNBp;
        RY5H7:
        QBZ0b:
        goto v3HE8;
        S7IWY:
        $this->db->join("\x6d\141\163\x74\145\x72\x5f\163\x69\163\x77\x61\x20\143", "\143\x2e\151\144\137\163\151\x73\167\x61\x3d\x61\56\x69\144\137\x73\x69\x73\x77\141", "\154\x65\146\x74");
        goto BGM5M;
        SBGM0:
        $this->db->order_by("\x63\x2e\156\x61\155\x61", "\101\x53\x43");
        goto y1ZAs;
        zcIxs:
        $this->db->where("\x61\x2e\x69\x64\x5f\155\141\160\x65\x6c", $mapel);
        goto RY5H7;
        JxNBp:
        $this->db->join("\x63\x62\164\x5f\x6e\x6f\x6d\x6f\162\137\x70\145\163\x65\162\164\141\40\142", "\x62\56\151\x64\x5f\163\x69\x73\x77\x61\x3d\x61\56\151\x64\137\x73\151\x73\x77\x61\40\101\x4e\104\x20\142\56\151\144\x5f\164\160\75\x61\x2e\151\144\137\164\x70", "\x6c\x65\146\x74");
        goto S7IWY;
        E5HSZ:
        xvc16:
        goto TXHuG;
        b38AW:
        $this->db->where("\x61\x2e\151\144\137\152\141\x64\x77\x61\154", $jadwal);
        goto E5HSZ;
        W67_D:
        if (!($mapel != "\x30")) {
            goto QBZ0b;
        }
        goto zcIxs;
        lNmTW:
    }
    public function getAllRekap($guru = null)
    {
        goto YiLzO;
        j5wpl:
        foreach ($result as $key => $row) {
            $ret[$row->id_jadwal] = $row;
            dNIgf:
        }
        goto gVLjt;
        gVLjt:
        x0yOq:
        goto fHBoy;
        fOnr3:
        $ret = [];
        goto j5wpl;
        AjZJ1:
        $this->db->where("\x69\x64\x5f\x67\165\x72\165", $guru);
        goto LfpNF;
        D1vwh:
        $this->db->from("\143\142\164\x5f\162\x65\153\x61\160");
        goto H6x19;
        LfpNF:
        PC390:
        goto dCq2b;
        YiLzO:
        $this->db->select("\x69\144\x5f\x72\x65\x6b\x61\160\x2c\x20\151\144\x5f\x74\160\x2c\x20\x74\x70\54\40\151\x64\137\163\x6d\x74\x2c\x20\163\x6d\x74\54\40\151\x64\x5f\x6a\141\x64\x77\x61\x6c\x2c\x20\151\x64\x5f\x6a\x65\x6e\x69\x73\x2c\x20\x6b\x6f\x64\x65\137\x6a\x65\156\x69\x73\x2c\40\151\144\137\x62\x61\x6e\x6b\54\x20\142\x61\x6e\x6b\x5f\x6b\145\154\141\163\x2c\40\x6e\x61\155\x61\137\153\x65\x6c\x61\x73\54\x20\x62\x61\156\153\137\x6b\x6f\x64\145\54\x20\x62\141\156\153\137\154\x65\x76\145\x6c\54\40\151\144\137\155\141\x70\145\154\54\x20\x6e\x61\x6d\x61\137\x6d\x61\x70\145\x6c\54\40\153\x6f\144\145\54\x20\x74\x67\x6c\x5f\x6d\x75\x6c\141\151\54\x20\x74\x67\x6c\137\x73\145\x6c\x65\x73\141\x69\54\40\x69\x64\137\x67\x75\x72\165\54\40\x6e\x61\x6d\141\137\147\x75\162\165");
        goto D1vwh;
        fHBoy:
        return $ret;
        goto rOYjM;
        H6x19:
        if (!($guru != null)) {
            goto PC390;
        }
        goto AjZJ1;
        dCq2b:
        $result = $this->db->get()->result();
        goto fOnr3;
        rOYjM:
    }
    public function getJadwalById($id_jadwal, $sesi = null)
    {
        goto RuBSA;
        VfPIm:
        $this->db->join("\x63\x62\x74\137\x62\x61\x6e\153\x5f\163\x6f\x61\154\40\x62", "\x62\56\x69\x64\137\142\x61\x6e\x6b\x3d\141\x2e\151\144\137\142\141\x6e\x6b", "\x6c\145\146\164");
        goto PdxRL;
        M69IK:
        if (!($sesi != null)) {
            goto Py467;
        }
        goto E6Lq_;
        edvR5:
        $this->db->join("\155\141\x73\164\145\x72\137\155\x61\160\145\x6c\x20\x64", "\144\x2e\151\144\137\155\141\160\145\x6c\75\x62\x2e\x62\x61\x6e\153\x5f\155\141\160\145\x6c\137\151\144", "\x6c\145\146\164");
        goto M69IK;
        sfPlx:
        $this->db->join("\155\141\163\x74\145\x72\x5f\147\165\162\x75\40\146", "\146\x2e\x69\144\137\147\x75\162\165\75\x62\56\142\x61\156\x6b\x5f\147\165\x72\x75\137\151\144", "\154\145\x66\x74");
        goto hoO5E;
        E6Lq_:
        $this->db->join("\x63\x62\164\x5f\163\145\163\x69\40\x65", "\145\56\x69\144\x5f\x73\x65\x73\151\75" . $sesi, "\x6c\145\x66\x74");
        goto iDk6Y;
        iDk6Y:
        Py467:
        goto sfPlx;
        PNTc3:
        return $query;
        goto X9YzK;
        hoO5E:
        $this->db->where("\141\x2e\x69\144\137\x6a\x61\144\x77\x61\x6c", $id_jadwal);
        goto GAyHe;
        PURLK:
        $this->db->from("\x63\x62\x74\x5f\152\x61\x64\167\x61\154\40\141");
        goto VfPIm;
        RuBSA:
        $this->db->select("\141\x2e\52\x2c\40\x62\56\157\x70\163\151\54\40\142\x2e\142\141\156\153\137\x6b\x6f\144\145\x2c\x20\142\56\142\141\x6e\153\137\x6c\x65\166\145\x6c\54\40\x62\x2e\142\141\x6e\x6b\137\x6b\x65\154\x61\x73\x2c" . "\40\x62\56\164\x61\155\160\151\x6c\137\x70\147\54\40\x62\56\x74\x61\155\160\x69\x6c\137\153\x6f\x6d\160\x6c\x65\153\163\54\x20\142\x2e\x74\x61\x6d\x70\x69\x6c\x5f\152\157\144\157\x68\x6b\141\x6e\54\40\142\x2e\x74\141\155\x70\151\x6c\137\x69\x73\x69\x61\x6e\54\x20\142\x2e\164\x61\155\160\x69\x6c\x5f\x65\163\141\x69\x2c" . "\40\142\56\x62\x6f\142\157\164\x5f\160\147\x2c\40\142\x2e\x62\x6f\x62\157\x74\x5f\x6b\x6f\x6d\160\x6c\145\153\163\x2c\40\142\x2e\142\x6f\142\x6f\x74\x5f\x6a\x6f\144\157\150\x6b\x61\x6e\54\40\142\56\x62\157\142\x6f\164\x5f\x69\163\x69\x61\156\54\40\142\56\x62\157\x62\157\164\x5f\145\163\141\x69\x2c" . "\x20\142\56\151\144\x5f\x62\141\x6e\x6b\x2c\40\x62\56\142\141\x6e\153\137\x67\x75\x72\165\137\151\x64\54\x20\143\56\x6b\x6f\144\145\137\152\145\x6e\x69\163\54\x20\143\56\x6e\141\155\x61\x5f\x6a\x65\x6e\x69\x73\54" . "\40\x64\56\151\x64\137\155\141\160\145\154\x2c\40\144\56\x6b\x6f\144\x65\54\x20\144\56\x6e\x61\x6d\x61\x5f\155\x61\x70\145\154\54\40\146\x2e\x69\x64\x5f\x67\165\162\165\x2c\x20\146\56\x6e\141\x6d\141\x5f\x67\x75\x72\165");
        goto PURLK;
        PdxRL:
        $this->db->join("\143\142\164\x5f\x6a\145\x6e\151\163\40\x63", "\143\x2e\151\144\x5f\x6a\x65\156\151\x73\75\x61\56\151\144\137\152\x65\x6e\x69\x73", "\154\x65\146\164");
        goto edvR5;
        GAyHe:
        $query = $this->db->get()->row();
        goto PNTc3;
        X9YzK:
    }
    public function getJadwalByIdBank($id_bank)
    {
        goto NDmIk;
        qMxlC:
        $this->db->join("\x6d\x61\163\x74\145\x72\137\155\x61\x70\x65\154\40\x64", "\x64\56\x69\x64\x5f\x6d\141\x70\145\154\75\142\56\x62\141\x6e\x6b\x5f\x6d\x61\x70\x65\154\x5f\x69\144", "\x6c\145\146\164");
        goto sgwpl;
        Yfqca:
        $this->db->where("\141\56\151\144\137\142\x61\x6e\x6b", $id_bank);
        goto e63gf;
        sGRZ0:
        return $query;
        goto y79Cq;
        NDmIk:
        $this->db->select("\x61\x2e\x2a\54\x20\x62\56\157\160\x73\151\x2c\x20\142\56\142\141\156\x6b\x5f\153\157\144\145\x2c\40\142\x2e\142\x61\x6e\153\x5f\x6c\x65\166\x65\154\54\40\x62\56\142\141\x6e\153\137\x6b\145\154\x61\163\54" . "\40\142\56\x74\x61\155\x70\151\154\137\x70\147\x2c\40\142\x2e\x74\x61\x6d\x70\151\x6c\137\x6b\x6f\x6d\x70\x6c\x65\x6b\x73\x2c\40\142\56\164\141\155\x70\x69\154\137\x6a\157\144\157\x68\x6b\141\156\54\40\142\56\164\x61\155\x70\151\x6c\137\151\x73\x69\141\156\54\40\142\x2e\164\141\155\x70\x69\154\137\145\163\141\x69\x2c" . "\x20\x62\56\x62\157\142\157\x74\137\x70\x67\54\x20\x62\56\x62\x6f\x62\157\x74\137\x6b\x6f\155\x70\154\145\x6b\163\x2c\x20\x62\x2e\x62\x6f\x62\157\x74\137\x6a\157\144\157\150\153\141\x6e\x2c\x20\x62\56\x62\x6f\142\157\164\137\151\163\x69\x61\x6e\54\40\142\56\142\157\142\x6f\x74\137\x65\163\x61\x69\54" . "\40\x62\56\151\144\137\x62\141\x6e\153\x2c\x20\x62\56\142\x61\x6e\153\137\x67\165\x72\x75\x5f\151\x64\x2c\40\x63\56\153\157\x64\x65\137\x6a\x65\156\151\x73\54\x20\x63\56\x6e\x61\155\141\137\x6a\145\x6e\151\x73\x2c" . "\40\x64\56\x69\144\x5f\x6d\x61\x70\145\154\x2c\40\144\x2e\153\157\x64\145\x2c\x20\144\x2e\x6e\141\155\x61\x5f\155\x61\x70\x65\154\x2c\40\x66\56\151\x64\x5f\147\x75\x72\x75\54\x20\x66\56\156\x61\155\141\137\147\165\162\x75");
        goto JISpM;
        HM_43:
        $this->db->join("\x63\x62\x74\x5f\152\x65\156\x69\x73\40\143", "\143\x2e\151\144\x5f\152\145\x6e\151\163\75\x61\x2e\151\x64\x5f\x6a\145\x6e\151\x73", "\154\145\146\x74");
        goto qMxlC;
        sgwpl:
        $this->db->join("\x6d\x61\163\164\145\x72\x5f\x67\165\162\x75\40\146", "\x66\56\151\144\137\147\165\162\x75\75\142\56\x62\x61\x6e\153\x5f\147\x75\162\165\x5f\x69\x64", "\154\x65\146\164");
        goto Yfqca;
        JISpM:
        $this->db->from("\143\142\x74\137\x6a\x61\x64\167\141\x6c\40\x61");
        goto hPnWN;
        hPnWN:
        $this->db->join("\x63\x62\164\137\x62\x61\x6e\153\137\x73\157\x61\x6c\x20\142", "\x62\x2e\x69\144\x5f\x62\x61\x6e\x6b\75\x61\x2e\x69\x64\137\142\141\x6e\153", "\x6c\145\x66\164");
        goto HM_43;
        e63gf:
        $query = $this->db->get()->row();
        goto sGRZ0;
        y79Cq:
    }
    public function getAllJadwal($tp, $smt, $id_guru = null)
    {
        goto QFmkV;
        Nsm8k:
        return $this->db->get()->result();
        goto wI7OE;
        FJ6ef:
        $this->db->where("\142\56\x69\144\137\164\x70", $tp);
        goto ZXENA;
        NwZmK:
        $this->db->where("\x61\56\142\x61\156\153\x5f\147\x75\162\165\x5f\x69\144", $id_guru);
        goto efI51;
        ZXENA:
        $this->db->where("\142\x2e\x69\144\137\163\155\x74", $smt);
        goto Nsm8k;
        I3OaJ:
        $this->db->join("\x63\142\x74\x5f\152\x61\144\x77\141\154\40\142", "\x62\56\x69\x64\137\142\x61\x6e\x6b\75\x61\56\x69\144\137\x62\141\x6e\x6b");
        goto nka63;
        efI51:
        hD_WH:
        goto FJ6ef;
        QFmkV:
        $this->db->select("\x61\x2e\142\x61\x6e\x6b\137\153\x6f\144\x65\54\x20\141\56\142\141\156\x6b\x5f\153\x65\154\x61\x73\54\x20\x62\x2e\151\x64\x5f\x6a\141\144\x77\x61\154");
        goto EgX41;
        EgX41:
        $this->db->from("\143\x62\164\x5f\x62\x61\156\153\137\x73\157\141\x6c\x20\141");
        goto I3OaJ;
        nka63:
        if (!($id_guru != null)) {
            goto hD_WH;
        }
        goto NwZmK;
        wI7OE:
    }
    public function getJadwalByArrId($arr_id_jadwal, $sesi = null)
    {
        goto lRktK;
        cfZYv:
        $this->db->where_in("\141\56\151\144\137\x6a\141\x64\x77\141\x6c", $arr_id_jadwal);
        goto Bydza;
        FhzH0:
        $this->db->join("\x63\x62\x74\137\152\x65\x6e\x69\163\40\x63", "\x63\56\151\144\x5f\152\145\x6e\x69\163\x3d\141\56\151\x64\137\152\x65\156\151\163", "\154\145\146\164");
        goto oBjdP;
        oBjdP:
        $this->db->join("\x6d\141\163\164\145\162\x5f\x6d\x61\x70\145\154\x20\144", "\144\56\151\144\137\x6d\x61\160\145\154\75\x62\56\142\141\x6e\153\x5f\155\x61\160\x65\154\137\x69\x64", "\154\145\x66\164");
        goto t83Jh;
        qsRsc:
        $this->db->from("\x63\x62\164\137\x6a\x61\x64\167\x61\x6c\40\141");
        goto TD2Q3;
        lRktK:
        $this->db->select("\x61\x2e\x2a\54\40\x62\56\x6f\x70\163\x69\54\40\142\56\142\141\x6e\153\137\153\157\x64\x65\54\x20\x62\x2e\142\141\156\x6b\137\154\145\166\145\154\54\40\x62\56\x62\x61\x6e\153\137\x6b\145\x6c\x61\x73\54" . "\x20\142\x2e\x74\141\155\160\151\x6c\x5f\x70\x67\x2c\40\142\56\164\141\x6d\x70\151\x6c\137\x6b\157\x6d\160\x6c\145\x6b\163\54\x20\142\x2e\164\x61\155\160\x69\154\x5f\152\x6f\x64\x6f\x68\153\141\x6e\54\x20\x62\56\164\141\155\160\151\154\137\151\163\x69\x61\x6e\54\x20\142\x2e\x74\141\x6d\160\x69\154\x5f\145\163\141\x69\x2c" . "\x20\142\56\142\157\x62\x6f\164\137\160\x67\x2c\x20\142\x2e\142\x6f\x62\x6f\x74\x5f\x6b\157\155\160\154\145\x6b\163\54\40\142\x2e\142\157\x62\x6f\x74\137\152\157\x64\157\x68\153\x61\x6e\54\40\x62\x2e\x62\157\142\x6f\x74\137\x69\x73\x69\141\x6e\x2c\40\142\56\142\x6f\x62\x6f\x74\x5f\x65\x73\x61\x69\x2c" . "\40\142\56\151\x64\x5f\142\x61\156\153\x2c\40\x62\56\142\x61\x6e\x6b\x5f\147\x75\162\x75\x5f\x69\144\54\x20\x63\x2e\153\157\144\145\137\152\x65\x6e\x69\x73\x2c\x20\143\56\x6e\x61\155\x61\137\152\x65\x6e\x69\163\x2c" . "\x20\144\x2e\151\x64\x5f\x6d\x61\x70\145\x6c\54\x20\144\x2e\153\x6f\x64\145\54\40\x64\56\x6e\x61\155\x61\137\155\x61\x70\145\x6c\54\40\146\56\151\x64\x5f\x67\x75\162\165\54\x20\x66\56\156\141\x6d\141\x5f\x67\x75\162\165");
        goto qsRsc;
        up_1a:
        $this->db->join("\x63\142\164\x5f\x73\145\163\151\x20\x65", "\x65\x2e\151\144\x5f\163\145\x73\151\75" . $sesi, "\x6c\x65\x66\164");
        goto jDezZ;
        Bydza:
        $query = $this->db->get()->result();
        goto idXiD;
        z9hMW:
        $this->db->join("\155\141\163\164\x65\x72\x5f\147\165\x72\165\40\146", "\146\56\x69\144\x5f\147\165\162\x75\75\142\56\142\141\156\153\x5f\147\165\162\x75\x5f\151\x64", "\x6c\145\146\164");
        goto cfZYv;
        t83Jh:
        if (!($sesi != null)) {
            goto YVCbt;
        }
        goto up_1a;
        idXiD:
        return $query;
        goto hteTv;
        jDezZ:
        YVCbt:
        goto z9hMW;
        TD2Q3:
        $this->db->join("\143\142\x74\x5f\142\x61\156\x6b\x5f\163\157\x61\154\40\142", "\x62\x2e\x69\144\137\142\141\x6e\x6b\75\x61\x2e\151\144\137\142\x61\156\x6b", "\x6c\145\x66\x74");
        goto FhzH0;
        hteTv:
    }
    public function cekJadwalBankSoal($id_bank)
    {
        goto Nlahl;
        VSvfV:
        $query = $this->db->get()->num_rows();
        goto mCN6f;
        qTaTg:
        $this->db->from("\143\142\x74\137\152\x61\144\167\x61\x6c");
        goto p8B8Q;
        QV6hl:
        goto AeIiU;
        goto d5Kb5;
        Nlahl:
        $this->db->select("\x69\x64\137\142\x61\156\153");
        goto qTaTg;
        UWt68:
        $this->db->where("\151\144\137\142\x61\x6e\x6b", $id_bank);
        goto QV6hl;
        d5Kb5:
        vNWqx:
        goto IAVnL;
        mCN6f:
        return $query;
        goto j7RAa;
        IAVnL:
        $this->db->where_in("\x69\144\137\x62\x61\x6e\x6b", $id_bank);
        goto xkheJ;
        xkheJ:
        AeIiU:
        goto VSvfV;
        p8B8Q:
        if (is_array($id_bank)) {
            goto vNWqx;
        }
        goto UWt68;
        j7RAa:
    }
    public function cekJadwalSudahMulai($id_jadwal)
    {
        $query = $this->get_where("\x63\x62\x74\x5f\x64\x75\162\x61\x73\151\137\163\151\x73\x77\x61", "\x69\144\x5f\152\x61\x64\167\141\x6c", $id_jadwal)->num_rows();
        return $query;
    }
    public function saveJadwalUjian($id_tp, $id_smt)
    {
        goto gSVnS;
        A48W3:
        $bank_id = strip_tags($this->input->post("\x62\x61\x6e\153\x5f\151\144", TRUE));
        goto xCw0t;
        Rv3pl:
        return $this->db->update("\x63\x62\164\137\x6a\x61\144\x77\141\x6c", $data);
        goto cSeo_;
        MIm1j:
        $status = $this->input->post("\x73\164\x61\164\x75\x73", TRUE);
        goto Id_5A;
        D5Mag:
        goto X4p7v;
        goto Zypj9;
        s6JJZ:
        if ($id == '') {
            goto wqN9W;
        }
        goto FW3hK;
        dPdxq:
        return false;
        goto ImLq0;
        Ivoqh:
        $data = array("\151\144\x5f\x74\160" => $id_tp, "\x69\x64\x5f\x73\x6d\164" => $id_smt, "\x69\144\137\142\141\156\153" => $bank_id, "\x69\x64\x5f\x6a\x65\x6e\x69\163" => $jenis_id, "\164\147\x6c\x5f\x6d\165\154\141\151" => $mulai, "\164\x67\x6c\137\x73\145\154\x65\163\141\151" => $selesai, "\144\x75\x72\141\163\x69\x5f\x75\152\x69\141\x6e" => $durasi, "\152\x61\x72\x61\153" => $jarak, "\141\x63\141\x6b\137\x73\x6f\141\154" => !$acak_soal ? "\60" : $acak_soal, "\141\143\141\x6b\137\x6f\160\163\x69" => !$acak_opsi ? "\x30" : $acak_opsi, "\150\x61\x73\x69\x6c\x5f\x74\x61\x6d\x70\151\x6c" => !$hasil_tampil ? "\60" : $hasil_tampil, "\x74\x6f\x6b\145\x6e" => !$token ? "\60" : $token, "\163\164\141\164\165\x73" => !$status ? "\60" : $status, "\162\145\x73\x65\164\137\154\x6f\x67\151\156" => !$reset_login ? "\60" : $reset_login);
        goto s6JJZ;
        Id_5A:
        $reset_login = $this->input->post("\x72\145\x73\x65\x74\x5f\x6c\x6f\147\x69\156", TRUE);
        goto A48W3;
        ImLq0:
        ppYF8:
        goto D5Mag;
        Zypj9:
        wqN9W:
        goto goSZ2;
        FW3hK:
        if ($check != null && $check->id_jadwal != $id) {
            goto Hoput;
        }
        goto RAqn1;
        Vr4lH:
        $jarak = strip_tags($this->input->post("\x6a\141\x72\141\x6b", TRUE));
        goto Qmfxd;
        cSeo_:
        goto ppYF8;
        goto h5dDf;
        uGGyO:
        X4p7v:
        goto Z9cSZ;
        syRN_:
        return false;
        goto XUfM0;
        XUfM0:
        TY9Mh:
        goto uGGyO;
        ah5BB:
        DwIwt:
        goto syRN_;
        e2hsB:
        return $insert_id;
        goto ktrNB;
        lU7iZ:
        $token = $this->input->post("\x74\157\153\145\156", TRUE);
        goto MIm1j;
        ktrNB:
        goto TY9Mh;
        goto ah5BB;
        goSZ2:
        if ($check != null) {
            goto DwIwt;
        }
        goto HTe9E;
        X2Hsu:
        $durasi = strip_tags($this->input->post("\144\165\162\x61\163\151\137\165\x6a\151\x61\x6e", TRUE));
        goto Vr4lH;
        NAurA:
        $insert_id = $this->db->insert_id();
        goto e2hsB;
        ixcWw:
        $acak_opsi = $this->input->post("\x61\143\141\153\137\x6f\160\163\151", TRUE);
        goto w6NU1;
        FrinE:
        $selesai = strip_tags($this->input->post("\164\147\154\x5f\163\x65\154\145\x73\141\151", TRUE));
        goto X2Hsu;
        gSVnS:
        $id = $this->input->post("\151\x64\x5f\x6a\x61\x64\167\141\154", true);
        goto D3BPr;
        w6NU1:
        $hasil_tampil = $this->input->post("\150\x61\163\151\154\137\164\x61\x6d\x70\151\154", TRUE);
        goto lU7iZ;
        RAqn1:
        $this->db->where("\151\x64\x5f\x6a\141\144\x77\x61\154", $id);
        goto Rv3pl;
        cKWRE:
        $mulai = strip_tags($this->input->post("\x74\147\x6c\137\155\x75\154\141\x69", TRUE));
        goto FrinE;
        xCw0t:
        $jenis_id = strip_tags($this->input->post("\152\x65\156\151\x73\x5f\151\144", TRUE));
        goto cKWRE;
        Qmfxd:
        $check = $this->db->where("\151\144\137\x62\x61\156\x6b", $bank_id)->where("\151\x64\137\152\145\x6e\x69\x73", $jenis_id)->get("\143\142\x74\x5f\152\141\x64\167\141\154")->row();
        goto Ivoqh;
        h5dDf:
        Hoput:
        goto dPdxq;
        D3BPr:
        $acak_soal = $this->input->post("\x61\143\x61\153\x5f\x73\157\141\154", TRUE);
        goto ixcWw;
        HTe9E:
        $this->db->insert("\x63\142\164\137\152\141\144\x77\x61\x6c", $data);
        goto NAurA;
        Z9cSZ:
    }
    public function getJadwalTgl($guru = null)
    {
        goto L3U_m;
        IshHS:
        return $query->result();
        goto wSP6N;
        L3U_m:
        $this->db->distinct();
        goto ZLTWa;
        MaRe2:
        $query = $this->db->get();
        goto IshHS;
        ZLTWa:
        $this->db->select("\x74\x67\x6c\137\155\x75\154\x61\x69");
        goto qil8_;
        qil8_:
        $this->db->from("\143\142\164\x5f\x6a\x61\144\x77\x61\x6c");
        goto MaRe2;
        wSP6N:
    }
    public function getDataJadwalByTgl($tgl)
    {
        goto Zfvlx;
        E_lUr:
        $query = $this->db->get();
        goto TIrop;
        Zfvlx:
        $this->db->distinct();
        goto B51L7;
        B51L7:
        $this->db->select("\x74\x67\154\x5f\x6d\165\x6c\x61\151\x2c\x20\164\x67\x6c\137\x73\x65\x6c\x65\163\x61\x69");
        goto BB3JZ;
        tXiPf:
        $this->db->where("\164\147\154\137\155\x75\154\x61\x69\x20\x3c\75\x20\x27{$tgl}\47\x20\101\x4e\x44\40\164\147\x6c\137\x73\x65\x6c\x65\163\141\151\40\x3e\x3d\40\47{$tgl}\x27");
        goto E_lUr;
        BB3JZ:
        $this->db->from("\143\x62\x74\x5f\x6a\141\144\x77\141\154");
        goto tXiPf;
        TIrop:
        return $query->result();
        goto aHUzZ;
        aHUzZ:
    }
    public function getDataGuru()
    {
        goto yB7JR;
        vVYSl:
        $query = $this->db->get()->result();
        goto pLrEQ;
        pLrEQ:
        return $query;
        goto hHWu0;
        yB7JR:
        $this->db->select("\x61\56\x69\144\137\147\165\162\x75\54\x20\141\56\x6e\141\155\141\x5f\147\x75\x72\165\x2c\40\142\56\x69\144\x5f\x70\x65\156\x67\141\x77\x61\163\54\x20\142\56\151\144\x5f\152\x61\x64\x77\x61\154");
        goto U8Wcz;
        KBRnN:
        $this->db->join("\x63\x62\164\x5f\x70\145\156\147\x61\x77\141\x73\x20\142", "\142\56\151\144\137\147\165\x72\165\40\x3d\x20\x61\56\x69\144\x5f\x67\165\x72\165", "\154\145\146\x74");
        goto vVYSl;
        U8Wcz:
        $this->db->from("\x6d\141\x73\x74\145\x72\x5f\147\x75\162\165\40\x61");
        goto KBRnN;
        hHWu0:
    }
    public function saveToken($post_token)
    {
        goto Q8aJY;
        p3O9K:
        goto Xw6Ls;
        goto xWw3u;
        Eg5I4:
        $this->db->where("\x69\144\x5f\x74\x6f\153\145\x6e", $id);
        goto aXaHQ;
        lxG2j:
        $jarak = $post_token->jarak;
        goto p6fyx;
        p6fyx:
        $data = array("\x74\x6f\153\145\x6e" => $tkn, "\x61\x75\x74\157" => $auto, "\x6a\141\162\141\153" => $jarak, "\x75\x70\144\x61\x74\145\x64" => $post_token->updated);
        goto D5xce;
        DQivR:
        Xw6Ls:
        goto rtx7q;
        aXaHQ:
        return $this->db->update("\x63\x62\164\x5f\164\157\x6b\x65\156", $data);
        goto p3O9K;
        D5xce:
        if (!$id) {
            goto iYOet;
        }
        goto Eg5I4;
        xWw3u:
        iYOet:
        goto MeLns;
        sqmzV:
        $auto = $post_token->auto;
        goto lxG2j;
        Q8aJY:
        $id = isset($post_token->id_token) ? $post_token->id_token : false;
        goto ABICs;
        MeLns:
        $this->db->insert("\143\142\x74\x5f\164\157\x6b\145\x6e", $data);
        goto uKs4b;
        uKs4b:
        $insert_id = $this->db->insert_id();
        goto L9pl5;
        ABICs:
        $tkn = $post_token->token;
        goto sqmzV;
        L9pl5:
        return $insert_id;
        goto DQivR;
        rtx7q:
    }
    public function updateToken($token, $auto)
    {
        goto lJgwp;
        kwSNf:
        return $result;
        goto RJ1P6;
        lJgwp:
        $this->db->set("\x61\165\x74\x6f", $auto, FALSE);
        goto XZB_d;
        XZB_d:
        $this->db->where("\x74\x6f\x6b\145\x6e", $token);
        goto R3LFs;
        R3LFs:
        $this->db->update("\143\x62\164\x5f\164\157\153\145\156");
        goto MUKPb;
        MUKPb:
        $result = $this->db->get("\143\x62\x74\x5f\x74\x6f\153\145\156")->row();
        goto kwSNf;
        RJ1P6:
    }
    public function getToken()
    {
        $result = $this->db->get("\x63\142\164\137\164\x6f\153\x65\156")->row();
        return $result;
    }
    public function getJadwalCbtKelas($id_tp, $id_smt)
    {
        goto VFM1q;
        XPBOE:
        $this->db->join("\x63\x62\164\x5f\x62\141\x6e\153\x5f\163\157\x61\154\40\142", "\x62\x2e\151\x64\137\142\x61\x6e\x6b\x3d\141\x2e\151\x64\x5f\x62\141\156\153");
        goto Mf5gI;
        ZzT4Q:
        $this->db->where("\x61\x2e\x69\x64\x5f\163\x6d\x74", $id_smt);
        goto C6zHb;
        VFM1q:
        $this->db->select("\141\56\x69\144\137\152\141\x64\167\x61\x6c\54\x20\142\56\x62\141\x6e\153\137\x6b\145\154\141\x73");
        goto QEHy3;
        C6zHb:
        return $this->db->get()->result();
        goto mgw_7;
        QEHy3:
        $this->db->from("\x63\x62\x74\x5f\x6a\x61\x64\167\x61\x6c\x20\x61");
        goto XPBOE;
        Mf5gI:
        $this->db->where("\141\x2e\151\x64\x5f\164\160", $id_tp);
        goto ZzT4Q;
        mgw_7:
    }
    public function getInfoJadwal($id_bank)
    {
        goto aYXKp;
        aYXKp:
        $this->db->select("\x61\56\151\144\x5f\x62\x61\x6e\x6b\54\x20\x62\x2e\x61\143\x61\x6b\x5f\x73\157\x61\154\x2c\x20\142\x2e\141\x63\141\x6b\x5f\x6f\x70\x73\151\x2c\40\x61\x2e\157\160\163\x69\x2c" . "\40\x61\x2e\164\141\155\160\x69\154\137\x70\147\54\40\141\x2e\x74\x61\x6d\x70\x69\x6c\x5f\x6b\x6f\x6d\160\154\x65\153\x73\x2c\x20\141\x2e\x74\141\155\x70\x69\x6c\137\x6a\x6f\x64\157\x68\153\141\x6e\x2c\x20\x61\x2e\164\141\155\x70\151\x6c\137\x69\163\x69\x61\x6e\54\40\141\56\x74\141\x6d\160\151\154\137\x65\163\141\x69\54" . "\40\141\x2e\x62\x6f\x62\x6f\164\137\160\x67\x2c\x20\x20\x61\x2e\142\x6f\142\x6f\164\x5f\153\x6f\155\x70\154\x65\153\x73\x2c\40\x20\141\56\x62\x6f\142\x6f\164\137\152\x6f\x64\157\x68\x6b\x61\x6e\x2c\40\x20\141\56\142\x6f\x62\x6f\164\137\x69\163\151\x61\x6e\x2c\x20\40\141\56\x62\157\x62\157\x74\x5f\x65\163\141\151");
        goto esaLQ;
        DsF_Z:
        return $this->db->get()->row();
        goto zieNp;
        esaLQ:
        $this->db->from("\143\142\164\137\142\x61\156\153\137\x73\x6f\141\154\40\141");
        goto gDS5c;
        gDS5c:
        $this->db->join("\x63\142\164\137\152\x61\x64\x77\141\x6c\40\x62", "\141\56\151\144\x5f\142\x61\x6e\x6b\75\x62\56\151\x64\x5f\x62\x61\156\x6b");
        goto Q8IzT;
        Q8IzT:
        $this->db->where("\141\56\151\144\x5f\x62\x61\x6e\153", $id_bank);
        goto DsF_Z;
        zieNp:
    }
    public function getAllIdSoal($id_bank)
    {
        goto Glni3;
        gN1G9:
        $ret = [];
        goto tXN8E;
        ywV7Q:
        $this->db->where("\x62\x61\156\x6b\137\151\x64", $id_bank);
        goto q__0K;
        OUz7c:
        foreach ($result as $row) {
            $ret[$row->jenis][] = $row;
            mH6Xp:
        }
        goto Q5enY;
        Szt7W:
        $this->db->where("\164\141\155\160\151\x6c\153\141\156", "\x31");
        goto ywV7Q;
        Mn0AL:
        $this->db->from("\143\x62\x74\x5f\163\x6f\x61\154");
        goto Szt7W;
        PV73U:
        DZxS3:
        goto X9Hq3;
        q__0K:
        $result = $this->db->get()->result();
        goto gN1G9;
        Glni3:
        $this->db->select("\x69\144\x5f\163\157\x61\x6c\x2c\x20\x6a\x65\x6e\151\163\54\x20\x6a\141\167\141\142\141\156");
        goto Mn0AL;
        X9Hq3:
        return $ret;
        goto D3tZ4;
        tXN8E:
        if (!$result) {
            goto DZxS3;
        }
        goto OUz7c;
        Q5enY:
        oZNkx:
        goto PV73U;
        D3tZ4:
    }
    public function getJadwalCbt($id_tp, $id_smt, $level)
    {
        goto pESGn;
        j2Qim:
        $this->db->where("\141\56\163\164\141\164\x75\163", "\x31");
        goto NS6oe;
        lW65V:
        $this->db->where("\x61\x2e\x69\x64\x5f\164\160", $id_tp);
        goto j2Qim;
        rEoRi:
        $result = $this->db->get()->result();
        goto zJK6L;
        pESGn:
        $this->db->select("\x61\x2e\151\144\x5f\x6a\141\144\167\141\154\x2c\40\141\56\x69\144\x5f\164\x70\54\x20\x61\x2e\151\x64\137\x73\x6d\164\54\40\x61\x2e\x69\144\x5f\142\x61\156\153\x2c\x20\x61\56\151\x64\137\152\145\x6e\x69\x73\54\x20\x61\56\x74\147\154\137\155\x75\154\x61\151\x2c\40\141\56\164\x67\154\137\163\x65\154\x65\163\141\x69\54" . "\40\141\x2e\x64\x75\162\141\163\151\137\165\x6a\151\x61\x6e\x2c\x20\x61\56\x70\145\x6e\x67\141\167\x61\163\x2c\x20\141\56\141\143\141\153\x5f\x73\157\x61\154\54\x20\141\x2e\141\x63\x61\153\x5f\157\160\x73\x69\x2c\40\141\x2e\x68\x61\163\x69\154\x5f\164\x61\x6d\160\151\x6c\x2c\40\141\x2e\164\157\153\x65\156\x2c\40\141\56\163\x74\x61\x74\165\x73\54\40\141\x2e\x75\x6c\x61\156\147\x2c" . "\40\141\x2e\162\145\163\145\164\137\x6c\x6f\x67\x69\x6e\x2c\x20\x61\56\162\145\x6b\x61\160\54\x20\141\x2e\x6a\141\x6d\137\153\x65\x2c\40\141\56\x6a\x61\162\x61\153\x2c" . "\40\143\56\142\141\x6e\x6b\x5f\153\x6f\144\x65\54\x20\x63\56\x62\x61\156\x6b\x5f\154\x65\x76\x65\154\54\x20\143\56\142\141\x6e\153\x5f\153\145\x6c\141\163\54\x20\x63\x2e\x74\141\155\x70\x69\154\x5f\x70\x67\x2c\x20\143\56\x74\x61\x6d\160\x69\x6c\137\153\x6f\x6d\x70\154\145\x6b\163\54\40\143\x2e\x74\141\x6d\160\x69\154\x5f\152\157\x64\x6f\x68\153\x61\x6e\x2c" . "\40\x63\x2e\x74\141\x6d\x70\x69\154\137\x69\163\151\x61\156\54\40\143\x2e\x74\141\155\160\151\x6c\137\x65\163\x61\151\54\x20\143\x2e\x73\x6f\x61\154\137\141\147\x61\x6d\x61\x2c\40" . "\x20\x63\x2e\x62\157\x62\157\164\x5f\160\x67\x2c\x20\x63\56\142\157\142\157\x74\137\153\x6f\155\160\x6c\145\153\163\54\x20\143\56\x62\x6f\x62\157\164\x5f\x6a\x6f\144\x6f\x68\153\141\x6e\x2c\x20\143\x2e\x62\x6f\142\157\164\x5f\x69\163\x69\141\x6e\54\40\143\56\x62\157\x62\x6f\x74\x5f\x65\163\141\x69\x2c\x20\142\x2e\x6b\x6f\x64\x65\137\x6a\145\156\151\163\54" . "\x20\142\56\x6e\x61\155\141\x5f\152\x65\156\151\163\x2c\x20\144\56\153\x6f\x64\x65\54\x20\144\56\x6e\x61\x6d\x61\137\155\x61\160\x65\x6c");
        goto FRsFp;
        FRsFp:
        $this->db->from("\x63\x62\x74\137\x6a\141\144\x77\141\x6c\x20\x61");
        goto ODwDm;
        NS6oe:
        $this->db->where("\141\56\151\x64\137\x73\x6d\164", $id_smt);
        goto mHoAJ;
        yjIWd:
        foreach ($result as $row) {
            $retur[$row->id_jadwal] = $row;
            C3IGL:
        }
        goto xFcxd;
        wF7UC:
        $this->db->where("\143\x2e\163\164\141\164\x75\x73\x5f\163\x6f\141\154", "\x31");
        goto n_EsM;
        xFcxd:
        adrnB:
        goto t5zsV;
        n_EsM:
        $this->db->where("\x63\56\142\141\x6e\x6b\x5f\x6c\145\x76\145\154", $level);
        goto C3b_C;
        Al9rb:
        $this->db->join("\143\x62\x74\137\x62\x61\156\x6b\x5f\x73\157\141\154\40\x63", "\143\x2e\151\144\137\x62\x61\156\x6b\75\x61\56\151\144\x5f\142\x61\x6e\x6b");
        goto uFMFB;
        zJK6L:
        $retur = [];
        goto yjIWd;
        mHoAJ:
        $this->db->where("\x63\56\163\x74\141\x74\165\163", "\x31");
        goto wF7UC;
        ODwDm:
        $this->db->join("\143\x62\x74\137\152\145\156\151\x73\x20\x62", "\x62\x2e\151\144\137\152\145\x6e\151\x73\x3d\x61\56\151\x64\137\x6a\x65\x6e\151\x73");
        goto Al9rb;
        t5zsV:
        return $retur;
        goto p0H6L;
        uFMFB:
        $this->db->join("\155\x61\163\164\145\162\137\155\141\160\145\154\x20\x64", "\x64\56\x69\x64\137\155\x61\160\x65\x6c\x3d\x63\x2e\142\x61\156\x6b\x5f\155\141\160\145\x6c\137\151\144");
        goto lW65V;
        C3b_C:
        $this->db->order_by("\141\56\152\141\155\x5f\153\145");
        goto rEoRi;
        p0H6L:
    }
    public function getJadwalByKelas($id_tp, $id_smt, $kelas)
    {
        goto cdUta;
        E_RYA:
        $this->db->where("\x61\56\151\x64\137\164\160", $id_tp);
        goto eopGi;
        eopGi:
        $this->db->where("\x61\56\x73\164\141\164\x75\x73", "\x31");
        goto tB3Ol;
        cdUta:
        $this->db->select("\x61\x2e\x69\144\x5f\x6a\141\x64\x77\141\x6c\x2c\40\x61\56\x69\x64\x5f\x74\x70\x2c\40\141\56\x69\x64\137\163\155\x74\54\x20\141\x2e\151\144\137\x62\141\x6e\x6b\54\x20\x61\x2e\x69\144\137\152\x65\156\x69\x73\x2c\x20\x61\x2e\164\x67\x6c\137\155\x75\154\x61\x69\54\x20\x61\56\164\x67\154\137\x73\145\x6c\145\x73\141\151\x2c" . "\40\x61\56\144\165\x72\141\163\x69\x5f\x75\152\151\x61\x6e\x2c\40\x61\56\x70\145\x6e\x67\x61\x77\141\x73\x2c\40\x61\x2e\x61\143\x61\153\137\163\157\x61\154\x2c\x20\x61\56\x61\x63\141\x6b\137\x6f\160\x73\151\x2c\x20\x61\x2e\x68\141\x73\151\154\x5f\164\141\155\x70\151\154\54\x20\x61\x2e\x74\x6f\153\x65\x6e\54\x20\141\x2e\163\164\x61\x74\x75\163\x2c\40\x61\x2e\165\154\141\156\x67\54" . "\x20\141\56\162\145\163\x65\164\x5f\154\157\147\x69\x6e\54\40\x61\56\x72\x65\153\x61\160\x2c\x20\141\x2e\152\x61\155\x5f\153\145\x2c\x20\141\56\x6a\141\x72\x61\x6b\x2c" . "\40\x63\56\x62\141\x6e\153\x5f\153\157\x64\145\54\40\x63\56\142\x61\x6e\153\137\x6c\x65\166\x65\x6c\54\40\143\x2e\x62\141\x6e\x6b\x5f\153\x65\x6c\x61\x73\54\x20\143\x2e\x74\x61\155\160\x69\x6c\x5f\x70\x67\x2c\x20\x63\x2e\x74\141\155\160\x69\154\x5f\153\157\x6d\x70\154\x65\153\163\54\40\x63\56\x74\141\x6d\x70\x69\x6c\137\152\x6f\144\157\x68\153\x61\x6e\x2c" . "\40\x63\x2e\164\141\155\160\x69\154\137\151\163\x69\141\156\54\x20\143\56\164\x61\x6d\160\x69\154\x5f\x65\163\141\151\54\x20\x63\56\x73\157\x61\154\x5f\x61\x67\141\x6d\141\54\x20" . "\x20\x63\x2e\142\x6f\x62\x6f\x74\x5f\160\x67\54\x20\x63\x2e\x62\157\x62\157\164\x5f\x6b\x6f\x6d\x70\154\145\153\x73\x2c\40\x63\x2e\x62\157\142\157\x74\x5f\152\157\x64\157\x68\x6b\141\156\x2c\x20\143\x2e\x62\x6f\142\x6f\164\x5f\151\163\x69\x61\x6e\54\x20\143\x2e\142\157\x62\157\x74\x5f\x65\163\x61\x69\x2c\x20\x62\x2e\153\157\144\145\137\152\145\x6e\151\x73\x2c" . "\40\x62\56\156\141\x6d\x61\x5f\x6a\x65\x6e\x69\x73\x2c\x20\144\x2e\153\x6f\x64\145\54\40\x64\56\x6e\141\x6d\141\x5f\x6d\141\x70\x65\154");
        goto eEwEk;
        JZHkG:
        $this->db->where("\143\x2e\x73\x74\141\x74\165\x73", "\x31");
        goto HOReX;
        cGmL0:
        $this->db->like("\x63\56\x62\141\x6e\153\137\x6b\145\x6c\x61\x73", $kelas);
        goto DgfKA;
        QkcmC:
        $retur = [];
        goto v1ddD;
        dAerE:
        return $retur;
        goto DKFSC;
        v1ddD:
        foreach ($result as $row) {
            $retur[$row->id_jadwal] = $row;
            duNxA:
        }
        goto fSMSs;
        eEwEk:
        $this->db->from("\x63\x62\x74\x5f\152\x61\144\167\x61\x6c\x20\x61");
        goto So12G;
        Di8Fc:
        $this->db->join("\x63\x62\164\137\x62\x61\x6e\153\137\x73\x6f\141\x6c\40\143", "\143\56\151\144\137\x62\x61\156\x6b\x3d\x61\56\151\x64\137\x62\x61\156\x6b");
        goto Bu_V0;
        Bu_V0:
        $this->db->join("\x6d\141\163\x74\x65\x72\137\155\141\160\x65\x6c\x20\x64", "\144\x2e\x69\x64\137\155\141\160\145\154\x3d\143\56\142\x61\156\x6b\x5f\155\141\160\x65\x6c\x5f\x69\x64");
        goto E_RYA;
        DgfKA:
        $this->db->order_by("\141\x2e\152\x61\x6d\x5f\x6b\x65");
        goto OGOXX;
        So12G:
        $this->db->join("\143\142\x74\x5f\152\x65\156\x69\163\x20\x62", "\x62\x2e\x69\x64\x5f\152\x65\156\x69\163\x3d\x61\x2e\151\x64\137\152\145\x6e\x69\x73");
        goto Di8Fc;
        OGOXX:
        $result = $this->db->get()->result();
        goto QkcmC;
        tB3Ol:
        $this->db->where("\x61\56\151\144\137\163\x6d\164", $id_smt);
        goto JZHkG;
        HOReX:
        $this->db->where("\x63\x2e\163\164\x61\x74\x75\163\x5f\163\157\x61\154", "\61");
        goto cGmL0;
        fSMSs:
        E5iAd:
        goto dAerE;
        DKFSC:
    }
    public function getCbt($id_jadwal)
    {
        goto mS8ve;
        x4F2D:
        $this->db->join("\155\x61\163\x74\x65\x72\x5f\147\165\162\x75\x20\x65", "\x65\x2e\x69\x64\x5f\147\x75\x72\x75\75\143\x2e\142\x61\156\x6b\x5f\147\x75\162\165\137\151\x64", "\154\x65\x66\x74");
        goto BH3JF;
        ZC5ie:
        $this->db->join("\143\142\x74\x5f\x62\x61\x6e\x6b\x5f\x73\157\x61\x6c\x20\143", "\143\56\151\x64\x5f\x62\x61\x6e\153\75\x61\56\x69\x64\137\142\141\x6e\x6b", "\154\x65\x66\164");
        goto LBs0K;
        vPRrO:
        $this->db->from("\x63\142\164\137\x6a\141\144\x77\x61\x6c\40\141");
        goto IgVam;
        VOOy7:
        return $this->db->get()->row();
        goto tw_NF;
        BH3JF:
        $this->db->join("\155\x61\163\164\145\162\137\x6a\x75\x72\165\x73\141\156\40\146", "\146\x2e\151\x64\137\152\x75\x72\x75\163\141\156\75\143\x2e\142\x61\x6e\x6b\137\152\165\x72\x75\163\x61\156\137\x69\144", "\x6c\145\x66\164");
        goto rdAKL;
        DNmLT:
        $this->db->join("\x6d\141\x73\x74\145\x72\137\163\155\x74\x20\150", "\150\x2e\151\144\137\163\155\164\75\x61\x2e\x69\144\137\x73\155\x74", "\154\x65\x66\164");
        goto HnGOS;
        mS8ve:
        $this->db->select("\x61\x2e\151\x64\x5f\152\141\144\167\141\154\x2c\40\x61\x2e\151\x64\137\164\160\x2c\x20\141\56\x69\144\x5f\163\155\x74\x2c\x20\x61\56\151\144\137\142\x61\x6e\x6b\x2c\x20\141\56\x69\144\x5f\152\x65\x6e\151\163\54\x20\x61\56\164\147\154\137\155\165\x6c\x61\151\x2c\40\x61\x2e\164\x67\x6c\x5f\163\x65\154\145\163\x61\151\54" . "\40\x61\x2e\144\165\162\141\x73\151\137\x75\x6a\151\x61\156\54\40\141\x2e\160\x65\x6e\147\141\x77\x61\x73\54\40\141\56\x61\143\x61\x6b\137\x73\157\141\154\x2c\40\141\x2e\141\x63\141\x6b\x5f\157\x70\163\x69\54\40\141\56\150\141\x73\151\x6c\137\164\x61\155\x70\x69\x6c\54\x20\141\x2e\164\157\x6b\145\156\x2c\40\x61\x2e\163\x74\x61\164\165\x73\x2c\x20\x61\x2e\x75\x6c\x61\x6e\x67\x2c" . "\x20\141\56\x72\145\x73\x65\164\x5f\x6c\157\x67\151\156\x2c\40\141\x2e\x72\145\x6b\141\x70\x2c\x20\141\56\x6a\x61\x6d\x5f\x6b\145\x2c\x20\141\x2e\152\x61\162\141\153\x2c" . "\40\142\x2e\156\141\155\x61\137\x6a\x65\x6e\x69\x73\x2c\40\142\56\153\x6f\144\145\137\152\145\156\x69\163\54" . "\x20\x63\x2e\142\141\156\x6b\x5f\x6b\x6f\x64\145\54\40\x63\x2e\x62\141\x6e\153\x5f\x6c\145\166\145\154\x2c\40\143\56\142\141\156\x6b\137\x6b\145\x6c\141\x73\54\x20\x63\x2e\142\141\x6e\x6b\x5f\x6d\x61\160\x65\x6c\137\x69\144\54\x20\143\56\x62\141\156\x6b\137\152\165\x72\165\163\141\x6e\x5f\x69\144\x2c" . "\x20\x63\56\x62\141\156\x6b\x5f\x67\x75\x72\x75\x5f\x69\144\x2c\40\x63\56\142\141\156\153\x5f\156\x61\155\x61\x2c\40\x63\56\152\155\x6c\137\163\157\141\x6c\x2c\40\x63\x2e\x6a\x6d\154\137\x65\163\141\x69\x2c\40\143\x2e\x74\x61\155\160\x69\x6c\137\x70\x67\54\40\x63\x2e\164\x61\x6d\160\x69\x6c\x5f\x65\x73\141\151\x2c\x20\x63\x2e\142\157\142\157\164\x5f\x70\147\x2c" . "\40\143\56\142\157\142\157\x74\137\x65\163\x61\151\54\40\143\x2e\157\x70\x73\x69\x2c\40\x63\56\144\x61\164\x65\54\x20\143\x2e\163\x74\141\x74\x75\x73\x2c\40\143\56\x73\x6f\141\154\x5f\141\147\141\x6d\x61\54\x20\x63\x2e\x69\144\x5f\x74\160\54\x20\x63\x2e\151\x64\137\163\155\164\54\40\x63\x2e\144\x65\x73\153\162\x69\160\163\151\x2c\x20\x63\x2e\152\x6d\154\x5f\x6b\x6f\x6d\x70\x6c\145\x6b\x73\x2c" . "\40\x63\x2e\x74\x61\155\160\x69\154\137\x6b\157\155\x70\x6c\145\153\x73\54\x20\x63\56\x62\157\x62\157\164\137\x6b\x6f\155\x70\154\x65\x6b\163\54\40\x63\x2e\x6a\x6d\154\137\152\157\144\x6f\150\x6b\141\156\x2c\40\x63\56\164\141\x6d\160\x69\x6c\x5f\152\x6f\144\x6f\x68\153\x61\x6e\54\x20\143\x2e\x62\157\142\x6f\x74\x5f\152\157\x64\x6f\150\x6b\141\156\54\x20\143\x2e\x6a\x6d\x6c\137\151\163\x69\x61\x6e\x2c" . "\40\143\56\x74\x61\155\x70\x69\154\x5f\151\163\151\x61\156\x2c\x20\143\x2e\x62\157\142\x6f\x74\x5f\151\x73\151\141\x6e\54\x20\x63\x2e\x73\x74\141\x74\165\163\137\163\157\x61\x6c\x2c" . "\40\x64\56\x69\x64\137\155\141\160\x65\154\x2c\x20\144\56\x6e\141\155\x61\x5f\x6d\x61\x70\145\154\54\40\144\x2e\153\x6f\x64\145\54" . "\40\x65\x2e\x69\144\137\x67\x75\162\x75\x2c\40\145\x2e\156\x61\155\141\137\147\x75\162\x75\54" . "\40\146\x2e\x69\144\137\152\x75\162\x75\x73\141\156\54\40\x66\56\156\141\155\141\137\x6a\x75\162\165\163\141\x6e\54\40\146\56\153\x6f\144\x65\x5f\x6a\165\x72\x75\x73\x61\156\x2c" . "\40\147\x2e\164\x61\x68\x75\x6e\54" . "\x20\x68\x2e\x73\x6d\164\54\x20\150\x2e\x6e\141\x6d\x61\137\163\x6d\x74\54" . "\x20\50\123\x45\x4c\x45\x43\124\x20\x43\x4f\125\x4e\124\x28\x69\x64\x5f\x73\x6f\x61\x6c\x29\x20\x46\122\117\x4d\x20\x63\142\x74\137\163\157\141\x6c\x20\127\110\105\122\105\40\143\x62\164\x5f\x73\x6f\x61\154\x2e\x62\x61\156\x6b\x5f\151\x64\x20\x3d\40\x61\56\x69\x64\x5f\142\141\156\153\x29\x20\x41\123\x20\164\157\164\141\x6c\x5f\163\x6f\x61\x6c");
        goto vPRrO;
        IgVam:
        $this->db->join("\143\x62\164\137\152\145\156\x69\163\x20\142", "\x62\x2e\151\144\x5f\152\x65\x6e\x69\163\75\141\x2e\151\x64\137\152\x65\156\x69\x73", "\x6c\145\146\x74");
        goto ZC5ie;
        rdAKL:
        $this->db->join("\x6d\x61\x73\164\145\162\137\x74\160\40\x67", "\147\x2e\151\144\137\164\x70\75\x61\x2e\151\x64\x5f\164\160", "\x6c\145\146\164");
        goto DNmLT;
        HnGOS:
        $this->db->where("\141\x2e\x69\x64\137\x6a\x61\144\x77\x61\154", $id_jadwal);
        goto VOOy7;
        LBs0K:
        $this->db->join("\155\x61\x73\164\145\162\137\x6d\x61\x70\x65\x6c\40\144", "\144\x2e\x69\144\x5f\155\141\x70\145\x6c\x3d\143\x2e\x62\141\156\153\x5f\155\x61\160\145\154\x5f\x69\144", "\x6c\x65\x66\164");
        goto x4F2D;
        tw_NF:
    }
    public function getCbtById($id_jadwal)
    {
        goto CV1Xz;
        soFOO:
        $this->db->from("\x63\x62\164\x5f\152\141\x64\x77\141\154");
        goto hZU4h;
        CV1Xz:
        $this->db->select("\x2a");
        goto soFOO;
        XXczg:
        return $this->db->get()->row();
        goto Ztg33;
        hZU4h:
        $this->db->where("\151\144\137\152\x61\144\x77\141\154", $id_jadwal);
        goto XXczg;
        Ztg33:
    }
    public function getIdRuangById($array)
    {
        goto b5OjU;
        TyxM8:
        if (!$result) {
            goto mxfD_;
        }
        goto n1ejT;
        b5OjU:
        $this->db->select("\x6e\141\x6d\x61\x5f\x72\165\141\156\x67");
        goto sD06d;
        GuDhc:
        mxfD_:
        goto nLp5q;
        lJzwY:
        $this->db->where("\x69\x64\x5f\162\165\141\x6e\x67", $array);
        goto X9PVN;
        wqjJ5:
        WQM_f:
        goto GuDhc;
        X9PVN:
        $result = $this->db->get()->result();
        goto TyxM8;
        n1ejT:
        foreach ($result as $key => $row) {
            $ret[$row->id_ruang] = $row->kode_ruang;
            v6DgL:
        }
        goto wqjJ5;
        nLp5q:
        return $ret;
        goto xehID;
        sD06d:
        $this->db->from("\143\x62\x74\137\x72\165\x61\156\x67");
        goto lJzwY;
        xehID:
    }
    public function getNamaRuangById($id)
    {
        goto rWceY;
        XISVE:
        goto Ih_kR;
        goto opydq;
        opydq:
        GImfH:
        goto a7LIb;
        RybpK:
        $result = $this->db->get()->row();
        goto xID0S;
        aCTIA:
        Ih_kR:
        goto CD9Qu;
        BNqbk:
        return '';
        goto XISVE;
        pZ8_M:
        $this->db->from("\143\142\x74\x5f\162\x75\141\x6e\x67");
        goto y2tcc;
        rWceY:
        $this->db->select("\x6e\x61\155\x61\x5f\x72\165\141\x6e\147");
        goto pZ8_M;
        y2tcc:
        $this->db->where("\x69\x64\x5f\x72\x75\141\x6e\147", $id);
        goto RybpK;
        xID0S:
        if ($result) {
            goto GImfH;
        }
        goto BNqbk;
        a7LIb:
        return $result->nama_ruang;
        goto aCTIA;
        CD9Qu:
    }
    public function getNamaSesiById($id)
    {
        goto vyN_G;
        vyN_G:
        $this->db->select("\156\x61\155\141\x5f\x73\145\163\151");
        goto i3lnn;
        N4h1h:
        return $this->db->get()->row()->nama_sesi;
        goto GxIkw;
        i3lnn:
        $this->db->from("\x63\x62\x74\x5f\x73\x65\x73\x69");
        goto wpzDq;
        wpzDq:
        $this->db->where(["\151\x64\137\x73\x65\163\151" => $id]);
        goto N4h1h;
        GxIkw:
    }
    public function getNamaKelasById($id)
    {
        goto MxcwH;
        cKL9G:
        return $this->db->get()->row()->nama_kelas;
        goto or1_b;
        MxcwH:
        $this->db->select("\x6e\141\155\141\137\x6b\145\x6c\x61\163");
        goto ebLcY;
        ebLcY:
        $this->db->from("\x6d\x61\163\164\145\162\137\153\145\154\x61\163");
        goto yz2U4;
        yz2U4:
        $this->db->where(["\151\144\137\x6b\145\x6c\141\x73" => $id]);
        goto cKL9G;
        or1_b:
    }
    public function getNamaGuruById($id)
    {
        goto x89wr;
        U0x0f:
        $this->db->where("\151\144\x5f\x67\165\162\165", $id);
        goto juVH0;
        RnThr:
        $this->db->from("\x6d\x61\x73\164\x65\162\137\147\x75\x72\165");
        goto U0x0f;
        juVH0:
        return $this->db->get()->row()->nama_guru;
        goto zwO48;
        x89wr:
        $this->db->select("\156\x61\155\141\x5f\x67\x75\162\x75");
        goto RnThr;
        zwO48:
    }
    public function getElapsed($id)
    {
        goto sY9H9;
        uZ0X3:
        $this->db->from("\x63\142\164\x5f\144\x75\x72\x61\163\151\137\x73\x69\x73\167\x61");
        goto UWy7K;
        UWy7K:
        $this->db->where("\x69\144\x5f\x64\165\x72\x61\163\x69", $id);
        goto Ndky1;
        sY9H9:
        $this->db->select("\x69\144\137\144\165\x72\141\x73\151\x2c\40\x69\144\137\x73\x69\163\x77\x61\54\x20\x69\144\x5f\152\141\144\x77\x61\154\x2c\40\x73\164\x61\164\165\x73\54\40\x6c\x61\x6d\x61\x5f\x75\x6a\151\x61\x6e\54\x20\155\165\x6c\141\151\x2c\40\x73\x65\x6c\145\163\x61\x69\x2c\x20\x72\145\x73\x65\x74");
        goto uZ0X3;
        Ndky1:
        return $this->db->get()->row();
        goto FmSw_;
        FmSw_:
    }
    public function getSoalSiswa($id_bank, $id_siswa)
    {
        goto drTyd;
        Pdr3w:
        $this->db->from("\143\x62\x74\137\x73\157\x61\x6c\137\163\x69\163\x77\141\40\141");
        goto H3_2k;
        lGDmf:
        $this->db->where("\x61\56\x69\x64\x5f\x73\151\x73\167\x61", $id_siswa);
        goto pI4Iz;
        tZlbU:
        $this->db->order_by("\141\56\x6e\x6f\x5f\163\157\141\154\x5f\x61\154\x69\141\163");
        goto AFU1b;
        pI4Iz:
        $this->db->order_by("\141\x2e\x6a\145\156\151\163\137\163\x6f\x61\x6c");
        goto tZlbU;
        drTyd:
        $this->db->select("\141\x2e\52\54\x20\x62\56\x6a\x65\x6e\x69\163\x2c\x20\142\56\156\157\155\157\x72\137\163\157\x61\154\x2c\x20\x62\56\x6a\x61\x77\x61\142\141\156");
        goto Pdr3w;
        bYSfa:
        $this->db->where("\141\x2e\151\x64\x5f\142\141\x6e\x6b", $id_bank);
        goto lGDmf;
        AFU1b:
        return $this->db->get()->result();
        goto DDeny;
        H3_2k:
        $this->db->join("\143\142\x74\x5f\163\157\x61\154\x20\x62", "\x62\x2e\151\144\137\163\x6f\141\154\75\x61\x2e\x69\144\x5f\163\x6f\x61\154", "\154\145\146\x74");
        goto bYSfa;
        DDeny:
    }
    public function getJumlahSoalSiswa($id_bank, $id_siswa)
    {
        goto jpkf5;
        uNvgC:
        $result = $this->db->get()->num_rows();
        goto pj6Fj;
        jpkf5:
        $this->db->select("\151\x64\137\163\x6f\141\154\x5f\x73\151\x73\x77\141");
        goto sicOg;
        pj6Fj:
        return $result;
        goto WVmE_;
        HjkP0:
        $this->db->where("\x69\144\x5f\142\141\x6e\x6b", $id_bank);
        goto fXqU2;
        sicOg:
        $this->db->from("\143\142\164\137\x73\157\141\154\137\x73\x69\x73\167\141");
        goto HjkP0;
        fXqU2:
        $this->db->where("\x69\144\x5f\163\151\x73\x77\x61", $id_siswa);
        goto uNvgC;
        WVmE_:
    }
    public function getALLSoalSiswa($id_bank, $id_siswa)
    {
        goto AG_MF;
        mcirB:
        $this->db->where("\141\56\151\x64\x5f\x73\151\x73\x77\141", $id_siswa);
        goto OCTLj;
        H5eL8:
        $this->db->where("\141\x2e\151\x64\137\x62\141\156\153", $id_bank);
        goto mcirB;
        AG_MF:
        $this->db->select("\x61\56\151\144\137\163\157\x61\154\137\x73\151\x73\x77\141\54\x20\141\56\x69\144\x5f\142\x61\x6e\x6b\54\40\x61\x2e\x69\144\137\152\x61\x64\167\141\x6c\54\40\x61\x2e\151\144\x5f\163\157\x61\154\54\40\141\x2e\x69\144\x5f\163\x69\x73\x77\141\54\40\141\x2e\x6a\x65\x6e\151\163\x5f\x73\157\x61\x6c\54" . "\x20\141\56\156\157\137\x73\x6f\141\154\x5f\141\x6c\151\141\163\54\x20\141\x2e\x6f\160\163\x69\x5f\x61\154\x69\x61\163\x5f\x61\x2c\x20\x61\56\157\x70\x73\151\x5f\141\x6c\x69\141\x73\x5f\x62\54\x20\x61\56\157\x70\x73\x69\x5f\x61\154\151\x61\163\x5f\143\x2c\40\x61\x2e\x6f\x70\x73\x69\137\x61\154\151\141\163\x5f\x64\x2c\x20\x61\56\x6f\160\x73\151\x5f\141\x6c\x69\x61\163\137\145\x2c" . "\40\141\56\152\x61\x77\x61\x62\x61\x6e\x5f\141\154\151\141\x73\54\40\141\56\x6a\x61\x77\141\142\x61\x6e\137\x73\x69\x73\x77\x61\54\40\x61\56\x6a\141\x77\x61\x62\141\x6e\x5f\x62\x65\x6e\141\x72\54\x20\141\56\x70\157\x69\156\x74\137\x65\x73\x73\141\x69\54\x20\141\56\163\157\x61\x6c\137\x65\x6e\x64\54\40\x61\x2e\160\x6f\x69\x6e\x74\137\x73\157\141\154\54" . "\x20\x62\x2e\151\144\137\163\157\141\x6c\54\40\x62\x2e\156\157\155\x6f\162\137\x73\x6f\x61\x6c\x2c\40\142\56\x73\x6f\141\x6c\x2c\x20\142\56\x6a\141\x77\141\142\x61\x6e\54\x20\142\56\157\x70\x73\151\x5f\141\x2c\x20\142\x2e\157\160\x73\151\137\x62\x2c\x20\142\56\x6f\160\163\151\137\x63\x2c\40\x62\x2e\x6f\160\163\151\x5f\x64\54" . "\40\142\56\157\160\x73\151\137\x65\54\40\142\x2e\164\141\x6d\160\151\x6c\x6b\x61\x6e");
        goto D1wsg;
        ccCdw:
        $result = $this->db->get()->result();
        goto KCE3u;
        D1wsg:
        $this->db->from("\x63\142\164\137\x73\x6f\141\154\x5f\x73\151\x73\x77\141\x20\141");
        goto lFx2k;
        OCTLj:
        $this->db->order_by("\141\56\x6e\157\137\x73\157\x61\x6c\137\141\154\151\x61\x73");
        goto ccCdw;
        KCE3u:
        return $result;
        goto yE_43;
        lFx2k:
        $this->db->join("\x63\x62\164\137\x73\157\141\154\x20\x62", "\x62\56\151\144\137\163\157\141\x6c\75\141\x2e\x69\144\137\163\x6f\x61\x6c");
        goto H5eL8;
        yE_43:
    }
    public function getJumlahJawaban($id_bank, $id_siswa)
    {
        goto D3kim;
        mqsJE:
        $result = $this->db->get()->result();
        goto QExft;
        BSFih:
        $this->db->where("\x69\144\x5f\163\x69\163\167\x61", $id_siswa);
        goto mqsJE;
        Ot9tT:
        $this->db->where("\x69\144\x5f\x62\x61\156\153", $id_bank);
        goto BSFih;
        cZZx4:
        $this->db->from("\x63\x62\x74\137\x73\157\141\x6c\137\163\151\x73\x77\x61");
        goto Ot9tT;
        D3kim:
        $this->db->select("\x6a\141\167\x61\142\x61\156\137\x73\151\x73\167\x61\54\x20\151\144\x5f\163\x69\x73\167\141\54\40\x69\144\x5f\x62\x61\x6e\153");
        goto cZZx4;
        QExft:
        return $result;
        goto HWAW_;
        HWAW_:
    }
    public function getSoalSiswaByJadwal($id_jadwal, $id_siswa)
    {
        goto WB8_h;
        DgSHP:
        return $this->db->get()->result();
        goto oqPC6;
        PrCVt:
        $this->db->from("\x63\142\x74\x5f\x73\157\141\154\137\x73\x69\163\x77\x61\40\141");
        goto xjFF8;
        BJex1:
        $this->db->order_by("\141\x2e\x6a\x65\156\151\x73\x5f\x73\x6f\x61\x6c");
        goto jhAKS;
        xjFF8:
        $this->db->join("\143\142\x74\137\x73\x6f\x61\154\x20\142", "\x62\x2e\x69\144\x5f\163\157\x61\x6c\x3d\141\56\151\x64\x5f\x73\157\x61\x6c");
        goto xCxQ7;
        fI2hV:
        $this->db->where("\x61\56\151\144\x5f\x73\x69\x73\167\141", $id_siswa);
        goto XiYZv;
        xCxQ7:
        $this->db->where("\141\x2e\x69\x64\x5f\x6a\141\x64\x77\141\x6c", $id_jadwal);
        goto fI2hV;
        WB8_h:
        $this->db->select("\141\x2e\x2a\x2c\40\142\x2e\x6a\145\x6e\x69\163\54\40\x62\56\x6e\157\x6d\157\162\x5f\163\x6f\x61\154\x2c\40\142\56\163\157\x61\x6c\x2c\x20\142\56\x6a\141\x77\141\x62\141\156\54\40\x62\x2e\157\160\163\151\137\x61\54\x20\142\x2e\157\160\x73\151\x5f\142\54\x20\142\x2e\157\160\163\x69\x5f\x63\54\x20\142\56\x6f\x70\163\151\137\144\x2c\40\142\56\x6f\x70\163\x69\137\x65");
        goto PrCVt;
        XiYZv:
        $this->db->where("\x62\x2e\x74\x61\x6d\160\151\x6c\x6b\x61\156", "\x31");
        goto BJex1;
        jhAKS:
        $this->db->order_by("\x62\56\x6e\x6f\155\157\x72\x5f\x73\x6f\x61\x6c");
        goto DgSHP;
        oqPC6:
    }
    public function getSoalSiswaByNomor($id_soal_siswa)
    {
        goto QaVX0;
        EHzLl:
        return $this->db->get()->row();
        goto xETFR;
        QaVX0:
        $this->db->select("\x61\56\151\144\137\163\x6f\141\x6c\x5f\x73\151\163\x77\x61\54\x20\x61\x2e\x69\x64\137\x62\x61\156\153\54\40\141\56\157\x70\x73\x69\137\141\x6c\x69\141\163\x5f\141\x2c\x20\x61\56\157\160\x73\151\x5f\141\x6c\x69\x61\x73\137\x62\x2c\x20\141\x2e\x6f\160\163\x69\137\x61\x6c\151\x61\x73\x5f\x63\54\x20\x61\x2e\x6f\x70\x73\151\x5f\141\154\x69\141\x73\x5f\x64\x2c" . "\40\x61\56\x6f\x70\x73\x69\x5f\141\154\151\x61\x73\137\x65\54\x20\141\56\x6e\x6f\137\x73\157\x61\154\x5f\141\x6c\x69\x61\163\x2c\x20\141\56\152\x61\167\141\142\x61\156\x5f\x61\x6c\x69\141\x73\x2c\40\x61\56\x73\157\x61\x6c\137\x65\156\x64\54\40\141\x2e\152\141\167\141\142\141\156\137\x73\x69\x73\167\x61\54" . "\40\x62\56\x69\x64\x5f\163\157\x61\154\x2c\40\142\x2e\x6a\145\156\151\163\54\x20\x62\x2e\156\x6f\x6d\157\x72\137\163\x6f\x61\154\x2c\40\x62\56\163\x6f\141\154\54\x20\142\56\x6a\141\x77\141\x62\141\x6e\x2c\x20\142\x2e\x6f\160\163\151\137\141\x2c\x20\x62\56\x6f\160\163\x69\x5f\x62\54\40\142\56\157\x70\x73\x69\137\x63\x2c\40\x62\x2e\x6f\160\x73\x69\137\x64\54\x20\142\x2e\157\x70\163\151\x5f\x65\x2c\40\x62\56\x74\x61\x6d\x70\x69\x6c\x6b\x61\x6e\54" . "\40\x63\56\164\x61\155\160\151\x6c\137\x70\147\x2c\40\x63\56\x74\141\155\160\x69\154\137\x6b\x6f\x6d\160\154\145\x6b\x73\54\40\x63\x2e\164\x61\155\160\x69\154\x5f\x6a\157\x64\157\150\153\141\156\x2c\x20\143\56\x74\141\x6d\x70\151\x6c\x5f\x69\163\151\141\156\x2c\x20\143\56\164\141\x6d\160\151\154\137\x65\x73\x61\x69\x2c");
        goto XyQvW;
        dbsdl:
        $this->db->join("\x63\x62\x74\x5f\142\141\x6e\153\x5f\163\x6f\x61\x6c\40\143", "\142\x2e\151\144\x5f\142\141\156\153\75\141\56\x69\144\x5f\x62\141\x6e\x6b");
        goto TJr0D;
        TJr0D:
        $this->db->where("\141\x2e\x69\x64\x5f\163\157\141\154\x5f\163\x69\x73\x77\141", $id_soal_siswa);
        goto E38uM;
        XyQvW:
        $this->db->from("\x63\142\164\137\163\x6f\141\154\137\x73\x69\x73\x77\141\40\141");
        goto MYpXI;
        MYpXI:
        $this->db->join("\x63\x62\x74\137\163\x6f\141\x6c\x20\142", "\x62\56\x69\144\137\x73\x6f\141\x6c\x3d\141\56\x69\x64\137\163\x6f\x61\x6c");
        goto dbsdl;
        E38uM:
        $this->db->order_by("\x61\x2e\x6e\157\x5f\163\x6f\141\154\137\x61\154\x69\x61\x73");
        goto EHzLl;
        xETFR:
    }
    public function getSettingKartu()
    {
        goto OZKE_;
        uZmDd:
        return $this->db->get()->row();
        goto gw3dS;
        n68z_:
        $this->db->from("\143\142\x74\137\153\157\160\137\x6b\141\162\x74\165");
        goto uZmDd;
        OZKE_:
        $this->db->select("\x2a");
        goto n68z_;
        gw3dS:
    }
    public function getSettingKopAbsensi()
    {
        goto pHF0R;
        s5KiK:
        $this->db->join("\x73\x65\164\164\x69\x6e\x67\40\x62", "\x62\x2e\x69\144\137\x73\145\x74\164\x69\156\x67\75\61", "\154\x65\146\x74");
        goto x2FyK;
        culxd:
        $this->db->from("\143\x62\164\137\x6b\157\x70\x5f\x61\x62\163\x65\156\163\151\40\x61");
        goto s5KiK;
        x2FyK:
        return $this->db->get()->row();
        goto qHR0L;
        pHF0R:
        $this->db->select("\x61\x2e\52\x2c\x20\x62\56\154\x6f\x67\x6f\x5f\x6b\141\x6e\x61\x6e\54\40\x62\x2e\x6c\157\x67\x6f\137\153\151\162\x69\54\x20\x62\56\153\145\160\163\x65\153\x2c\x20\142\x2e\x74\x61\x6e\x64\x61\137\164\x61\156\x67\x61\156");
        goto culxd;
        qHR0L:
    }
    public function getSettingKopBeritaAcara()
    {
        goto mtydb;
        v3DWa:
        return $this->db->get()->row();
        goto n7tGw;
        mtydb:
        $this->db->select("\141\x2e\52\x2c\x20\x64\x2e\154\157\147\x6f\x5f\153\141\156\x61\156\x2c\x20\x64\56\154\157\147\x6f\x5f\x6b\151\x72\x69\54\40\x64\x2e\153\x65\160\163\145\x6b\x2c\40\x64\x2e\x6e\x69\x70\x2c\40\144\x2e\164\141\x6e\144\x61\137\164\x61\x6e\147\141\156\x2c\40\144\x2e\x73\145\x6b\157\154\141\150");
        goto uy4pI;
        ocGsi:
        $this->db->join("\163\x65\x74\164\x69\x6e\x67\40\x64", "\x64\x2e\x69\144\x5f\163\x65\164\x74\x69\156\147\x3d\61", "\x6c\145\x66\x74");
        goto v3DWa;
        uy4pI:
        $this->db->from("\x63\142\x74\137\x6b\x6f\160\137\x62\145\x72\151\164\141\40\x61");
        goto ocGsi;
        n7tGw:
    }
    public function getDurasiSiswa($id)
    {
        return $this->db->get_where("\143\x62\164\x5f\144\165\x72\141\163\151\x5f\163\x69\x73\167\x61", "\x69\x64\137\144\165\162\141\x73\x69\75" . $id)->row();
    }
    public function getFilterJawabanSiswa($jadwal, $arrIdSiswa)
    {
        goto P49vZ;
        QMzZD:
        return $this->db->get("\143\x62\x74\x5f\x73\x6f\141\154\x5f\x73\151\x73\x77\x61")->result();
        goto S3gQe;
        kztt9:
        $this->db->where_in("\151\x64\x5f\163\151\163\x77\x61", $arrIdSiswa);
        goto QMzZD;
        P49vZ:
        $this->db->where("\x69\144\137\152\x61\x64\167\141\154", $jadwal);
        goto kztt9;
        S3gQe:
    }
    public function getFilterDurasiSiswa($jadwal, $arrIdSiswa)
    {
        goto TJW_P;
        NgE3M:
        foreach ($result as $key => $row) {
            $ret[$row->id_durasi] = $row;
            EF8Dg:
        }
        goto rtIez;
        sSVQV:
        return $ret;
        goto qb7lD;
        ILv_e:
        $result = $this->db->get_where("\143\142\x74\x5f\x64\x75\x72\x61\x73\151\x5f\163\151\x73\167\x61")->result();
        goto OFmrA;
        OFmrA:
        $ret = [];
        goto NgE3M;
        TJW_P:
        $this->db->where("\151\x64\137\x6a\x61\144\167\x61\x6c", $jadwal);
        goto ILv_e;
        rtIez:
        JR2YK:
        goto sSVQV;
        qb7lD:
    }
    public function getJawabanByBank($id_bank, $id_siswa = null)
    {
        goto PoHaR;
        mO6gw:
        $result = $this->db->get()->result();
        goto RhLR0;
        RhLR0:
        return $result;
        goto EEKaz;
        C3O8s:
        $this->db->join("\143\x62\164\x5f\163\157\x61\154\x20\x62", "\x62\x2e\x69\144\137\x73\157\x61\154\75\141\56\x69\x64\x5f\163\x6f\x61\x6c");
        goto WsrLA;
        zH65d:
        $this->db->where("\x61\56\x69\x64\x5f\x62\x61\x6e\153\75", $id_bank);
        goto mO6gw;
        cYxy1:
        $this->db->where("\x61\x2e\151\144\137\163\151\x73\167\141\75", $id_siswa);
        goto JwXnX;
        JwXnX:
        ei12u:
        goto zH65d;
        BnLQl:
        $this->db->from("\143\142\x74\x5f\163\x6f\141\x6c\137\163\151\x73\167\x61\x20\141");
        goto C3O8s;
        WsrLA:
        if (!($id_siswa != null)) {
            goto ei12u;
        }
        goto cYxy1;
        PoHaR:
        $this->db->select("\141\56\x2a\x2c\40\142\x2e\156\157\155\x6f\162\x5f\x73\157\141\154\54\40\142\56\x6a\141\x77\141\142\141\x6e");
        goto BnLQl;
        EEKaz:
    }
    public function getJawabanSiswa($id)
    {
        goto dYHuS;
        dYHuS:
        $this->db->select("\x69\144\137\163\x6f\x61\x6c\137\x73\x69\x73\167\141\x2c\40\151\144\x5f\x62\141\156\x6b\54\40\151\x64\x5f\152\141\144\167\141\x6c\54\x20\151\144\x5f\x73\x6f\141\154\x2c\40\x69\144\137\163\151\163\x77\141\54\40\x6a\145\156\x69\x73\x5f\x73\x6f\141\x6c\54\x20\156\x6f\x5f\x73\157\x61\x6c\137\x61\x6c\x69\x61\x73\54\x20\x6f\x70\x73\151\137\x61\x6c\x69\x61\163\137\141\54\x20\x6f\x70\x73\x69\x5f\141\154\x69\x61\163\x5f\x62\54\x20\157\x70\163\151\x5f\141\154\x69\141\x73\x5f\143\x2c\x20\x6f\x70\x73\x69\137\141\154\x69\x61\163\x5f\x64\54\x20\x6f\x70\163\151\x5f\x61\x6c\151\141\163\x5f\x65\54\40\x6a\141\x77\141\142\x61\x6e\137\141\x6c\x69\x61\x73\x2c\x20\152\141\167\141\x62\x61\156\x5f\x73\x69\163\x77\x61\x2c\x20\152\x61\x77\141\x62\141\x6e\137\142\x65\156\141\x72\54\40\x70\157\x69\156\164\137\x73\157\141\x6c");
        goto o3LlQ;
        o3LlQ:
        $this->db->from("\x63\x62\x74\x5f\x73\x6f\x61\x6c\x5f\x73\x69\x73\167\x61");
        goto t4oUc;
        t4oUc:
        $this->db->where("\151\x64\137\163\x6f\x61\x6c\x5f\163\x69\x73\167\x61\75", $id);
        goto JyAj9;
        JyAj9:
        return $this->db->get()->row();
        goto Z1RHg;
        Z1RHg:
    }
    public function getJawabanSiswaByJadwal($id_jadwal, $id_siswa = null)
    {
        goto pW8SW;
        nCFa2:
        lFc7l:
        goto DCE75;
        nz7dj:
        $this->db->join("\x63\142\164\137\163\x6f\141\x6c\x20\x62", "\x62\56\x69\x64\137\x73\157\141\154\75\x61\x2e\151\144\137\x73\x6f\141\154");
        goto r7aPa;
        x8Rzn:
        $this->db->where("\x62\x2e\164\141\x6d\x70\x69\x6c\153\141\x6e", "\x31");
        goto X1GMr;
        T9Y6o:
        goto NSc96;
        goto nCFa2;
        z6oK6:
        $this->db->where("\x61\56\151\x64\137\x6a\141\144\167\141\x6c\x3d", $id_jadwal);
        goto x8Rzn;
        Ss1Nk:
        $this->db->from("\143\x62\164\x5f\163\157\x61\154\137\x73\x69\x73\x77\x61\x20\141");
        goto nz7dj;
        X1GMr:
        $this->db->order_by("\x61\56\x6a\145\x6e\x69\163\137\x73\157\141\x6c");
        goto Jx6Ty;
        insG2:
        if (is_array($id_siswa)) {
            goto lFc7l;
        }
        goto MSWnh;
        aoyn_:
        NSc96:
        goto Jw_lz;
        DCE75:
        $this->db->where_in("\x61\x2e\151\x64\137\x73\x69\163\167\141", $id_siswa);
        goto aoyn_;
        MSWnh:
        $this->db->where("\141\56\x69\x64\x5f\x73\x69\x73\167\141", $id_siswa);
        goto T9Y6o;
        Jx6Ty:
        $this->db->order_by("\142\x2e\x6e\x6f\x6d\157\x72\x5f\163\x6f\x61\x6c");
        goto DbF9T;
        r7aPa:
        if (!($id_siswa != null)) {
            goto UbVGm;
        }
        goto insG2;
        pW8SW:
        $this->db->select("\141\x2e\52\x2c\40\x62\56\152\145\x6e\151\x73\x2c\40\142\x2e\x6e\x6f\155\157\x72\x5f\x73\157\x61\154\x2c\x20\142\x2e\163\157\x61\154\x2c\x20\x62\56\x6a\141\167\x61\x62\141\x6e\x2c\40\142\x2e\x6f\x70\x73\x69\137\x61\x2c\40\x62\56\157\160\x73\151\x5f\142\x2c\40\x62\56\x6f\x70\x73\x69\x5f\x63\x2c\40\142\56\157\160\x73\151\137\144\x2c\x20\x62\56\x6f\160\x73\151\137\x65\54\40\142\x2e\x74\141\155\x70\151\154\x6b\x61\x6e");
        goto Ss1Nk;
        Jw_lz:
        UbVGm:
        goto z6oK6;
        DbF9T:
        return $this->db->get()->result();
        goto yQRto;
        yQRto:
    }
    public function getIdSiswaFromJawabanByJadwal($id_jadwal)
    {
        goto lqLKl;
        lqLKl:
        $result = $this->db->get_where("\x63\x62\x74\137\163\157\x61\154\x5f\163\151\163\167\141", "\151\x64\137\152\x61\x64\167\x61\x6c\75" . $id_jadwal)->result();
        goto pv4gY;
        ZfVJH:
        return $retur;
        goto LxEeL;
        Ux19J:
        qXHoD:
        goto ZfVJH;
        pv4gY:
        $retur = [];
        goto wKOZY;
        wKOZY:
        foreach ($result as $row) {
            $retur[$row->id_siswa][] = $row;
            G0POW:
        }
        goto Ux19J;
        LxEeL:
    }
    public function getDurasiSiswaByJadwal($id_jadwal, $id_siswa = null)
    {
        goto U1D4a;
        i14bG:
        if (!($id_siswa != null)) {
            goto fwhSH;
        }
        goto zuuUv;
        MKR3g:
        return $this->db->get()->result();
        goto uKqtX;
        zuuUv:
        $this->db->where("\151\x64\x5f\x73\x69\163\167\x61\75", $id_siswa);
        goto OcGRM;
        U1D4a:
        $this->db->select("\x69\144\137\x64\x75\162\x61\163\151\54\40\151\x64\x5f\163\x69\x73\x77\x61\x2c\40\x69\x64\137\152\141\x64\167\141\x6c\x2c\40\163\x74\141\x74\x75\163\x2c\x20\154\x61\155\141\137\x75\x6a\151\141\x6e\x2c\40\155\x75\x6c\x61\151\x2c\40\x73\145\154\145\x73\141\x69\x2c\40\x72\145\163\145\164");
        goto RHi_f;
        OcGRM:
        fwhSH:
        goto MKR3g;
        rzOFP:
        $this->db->where("\151\144\x5f\x6a\141\144\167\141\x6c\75", $id_jadwal);
        goto i14bG;
        RHi_f:
        $this->db->from("\143\x62\x74\137\144\165\162\141\163\151\x5f\x73\x69\x73\167\x61");
        goto rzOFP;
        uKqtX:
    }
    public function getIdSiswaFromDurasiByJadwal($id_jadwal)
    {
        goto XCq_d;
        ovD4Q:
        FVNbR:
        goto mXMgl;
        mXMgl:
        return $retur;
        goto rLcXz;
        lvSNk:
        foreach ($result as $row) {
            $retur[$row->id_siswa] = $row;
            T36p6:
        }
        goto ovD4Q;
        wejGj:
        $retur = [];
        goto lvSNk;
        XCq_d:
        $result = $this->db->get_where("\x63\142\164\137\144\x75\162\141\x73\151\137\x73\x69\x73\x77\x61", "\151\144\137\x6a\141\144\167\141\x6c\x3d" . $id_jadwal)->result();
        goto wejGj;
        rLcXz:
    }
    public function getLogUjianByJadwal($id_jadwal)
    {
        goto vnQnb;
        k0cyN:
        $this->db->where("\x69\x64\137\x6a\141\144\x77\x61\154\x3d", $id_jadwal);
        goto Xmj68;
        Xmj68:
        return $this->db->get()->result();
        goto m1gI4;
        ac7Wj:
        $this->db->from("\154\x6f\x67\137\x75\152\151\x61\x6e");
        goto k0cyN;
        vnQnb:
        $this->db->select("\151\x64\x5f\x6c\157\x67\x2c\x20\154\x6f\x67\137\164\x69\155\145\54\40\151\144\x5f\x73\x69\x73\x77\141\x2c\x20\x69\144\137\x6a\x61\144\x77\x61\x6c\x2c\x20\x6c\157\x67\x5f\164\x79\x70\x65\54\40\154\x6f\147\x5f\144\145\163\143\x2c\x20\x61\144\x64\162\145\163\x73\54\x20\x61\x67\145\156\164\x2c\x20\x64\145\166\x69\143\x65\54\40\x72\145\163\145\x74");
        goto ac7Wj;
        m1gI4:
    }
    public function getIdSiswaFromLogUjianByJadwal($id_jadwal)
    {
        goto XisYv;
        xXCr0:
        $retur = [];
        goto qeglD;
        zv3Gu:
        return $retur;
        goto YcKlh;
        qeglD:
        foreach ($result as $row) {
            $retur[$row->id_siswa] = $row;
            OFIAg:
        }
        goto YgJ5k;
        YgJ5k:
        h8q8u:
        goto zv3Gu;
        XisYv:
        $result = $this->db->get_where("\154\157\x67\137\165\152\x69\141\x6e", "\151\144\137\x6a\x61\x64\167\x61\x6c\75" . $id_jadwal)->result();
        goto xXCr0;
        YcKlh:
    }
    public function getNilaiSiswa($arr_jadwal, $id_siswa)
    {
        goto gKj9z;
        ghK0Y:
        foreach ($result as $row) {
            $retur[$row->id_jadwal] = $row;
            LWnlC:
        }
        goto jlSXn;
        a1uYK:
        return $retur;
        goto qiaKe;
        hJ7YC:
        $retur = [];
        goto ghK0Y;
        gKj9z:
        $this->db->select("\52");
        goto YdIAm;
        RPFcq:
        $this->db->where_in("\x69\x64\137\x6a\141\144\x77\141\154", $arr_jadwal);
        goto B8H2Q;
        YdIAm:
        $this->db->from("\x63\x62\164\x5f\156\151\154\141\151");
        goto RPFcq;
        jlSXn:
        oSxqZ:
        goto a1uYK;
        B8H2Q:
        $this->db->where("\x69\x64\137\x73\151\163\167\141", $id_siswa);
        goto EiQga;
        EiQga:
        $result = $this->db->get()->result();
        goto hJ7YC;
        qiaKe:
    }
    public function getNilaiSiswaByJadwal($id_jadwal, $id_siswa)
    {
        goto yQ5Vx;
        D0UEe:
        return $result;
        goto S96AD;
        TrfNU:
        $this->db->where("\x69\x64\137\x73\x69\x73\167\x61", $id_siswa);
        goto QqSVm;
        tMwA_:
        $this->db->where("\x69\x64\x5f\152\x61\x64\167\141\x6c", $id_jadwal);
        goto TrfNU;
        QqSVm:
        $result = $this->db->get()->row();
        goto D0UEe;
        eEMzh:
        $this->db->from("\143\142\164\x5f\x6e\151\x6c\x61\x69");
        goto tMwA_;
        yQ5Vx:
        $this->db->select("\52");
        goto eEMzh;
        S96AD:
    }
    public function getNilaiAllSiswa($arr_jadwal, $arr_id_siswa)
    {
        goto Qafmx;
        yRy0j:
        $this->db->from("\143\142\x74\137\x6e\151\154\x61\x69");
        goto r_bMO;
        Qafmx:
        $this->db->select("\x2a");
        goto yRy0j;
        FanbG:
        sp4C2:
        goto J2euD;
        o8YE1:
        $result = $this->db->get()->result();
        goto NMMDd;
        hAFOL:
        $this->db->where_in("\151\x64\137\163\151\163\167\141", $arr_id_siswa);
        goto o8YE1;
        NMMDd:
        $retur = [];
        goto h4JgV;
        J2euD:
        return $retur;
        goto WptGx;
        r_bMO:
        $this->db->where_in("\151\x64\x5f\x6a\141\x64\167\141\154", $arr_jadwal);
        goto hAFOL;
        h4JgV:
        foreach ($result as $row) {
            $retur[$row->id_siswa] = $row;
            DqaVQ:
        }
        goto FanbG;
        WptGx:
    }
    public function getAllNilaiSiswa($id_jadwal)
    {
        goto KR4Ht;
        CA6Ri:
        rN1Qc:
        goto AjH7w;
        ZkzxO:
        foreach ($result as $row) {
            $retur[$row->id_siswa] = $row;
            eP6pv:
        }
        goto CA6Ri;
        AjH7w:
        return $retur;
        goto CUq10;
        n_l6O:
        $retur = [];
        goto ZkzxO;
        ro4kE:
        $this->db->where("\151\144\x5f\x6a\x61\x64\x77\141\154", $id_jadwal);
        goto owmTK;
        KR4Ht:
        $this->db->select("\52");
        goto zuhW9;
        zuhW9:
        $this->db->from("\x63\142\x74\x5f\x6e\x69\x6c\x61\x69");
        goto ro4kE;
        owmTK:
        $result = $this->db->get()->result();
        goto n_l6O;
        CUq10:
    }
    public function getTotalKoreksi()
    {
        goto v2sn_;
        eM_Ui:
        foreach ($result as $row) {
            goto MkUXH;
            MkUXH:
            if (!($row->id_siswa != null)) {
                goto Fcl7w;
            }
            goto Me1z3;
            Me1z3:
            $retur[$row->id_jadwal][$row->dikoreksi][] = $row->id_siswa;
            goto cPMri;
            cPMri:
            Fcl7w:
            goto u3zUo;
            u3zUo:
            CDJkH:
            goto F2mKx;
            F2mKx:
        }
        goto Xgoas;
        wDBaP:
        $this->db->from("\143\142\164\137\156\151\x6c\141\x69");
        goto ztaQu;
        Xgoas:
        AKFKw:
        goto wq4Lc;
        FBIhw:
        $retur = [];
        goto eM_Ui;
        ztaQu:
        $result = $this->db->get()->result();
        goto FBIhw;
        v2sn_:
        $this->db->select("\151\144\x5f\x6a\x61\144\x77\x61\x6c\54\x20\144\x69\153\157\162\x65\x6b\x73\x69\54\40\151\x64\x5f\163\x69\x73\x77\141");
        goto wDBaP;
        wq4Lc:
        return $retur;
        goto Gc1dW;
        Gc1dW:
    }
    public function getNilaiAnalisis($id_jadwal)
    {
        return $this->db->get_where("\x63\142\164\137\156\151\x6c\x61\151", "\151\144\x5f\152\x61\144\167\141\x6c\75" . $id_jadwal)->result();
    }
    public function getLogUjian($siswa_id, $id_jadwal)
    {
        return $this->db->get_where("\x6c\157\x67\x5f\165\152\x69\x61\156", "\151\144\x5f\x73\x69\x73\167\x61\x3d" . $siswa_id . "\x20\x41\x4e\104\x20\x69\x64\x5f\152\x61\x64\x77\x61\154\x3d" . $id_jadwal)->result();
    }
    public function getNomorPeserta($id_siswa)
    {
        return $this->db->get_where("\143\x62\164\x5f\156\157\155\157\x72\137\x70\145\163\x65\162\x74\141", "\151\144\137\x73\x69\163\167\141\x3d" . $id_siswa)->row();
    }
    public function getAllNomorPeserta()
    {
        goto ZknCl;
        xa7Zh:
        foreach ($result as $row) {
            $ret[$row->id_siswa] = $row;
            DHqD0:
        }
        goto OVBVO;
        ZknCl:
        $this->db->select("\52");
        goto Taj9T;
        uKkHs:
        return $ret;
        goto F9pEQ;
        Gy2hw:
        $ret = [];
        goto xa7Zh;
        OVBVO:
        AfNi2:
        goto uKkHs;
        Taj9T:
        $result = $this->db->get("\x63\142\164\137\156\157\x6d\x6f\162\x5f\160\145\x73\145\162\x74\x61")->result();
        goto Gy2hw;
        F9pEQ:
    }
    public function getDistinctTahun()
    {
        goto tN3x7;
        DmVNY:
        $result = $this->db->get("\x63\142\x74\137\162\x65\153\x61\160\x5f\x6e\x69\x6c\x61\151")->result();
        goto LA8Iq;
        tN3x7:
        $this->db->select("\x74\x70");
        goto BWK38;
        R__rR:
        return $ret;
        goto lnKrA;
        LA8Iq:
        $ret = [];
        goto c4DnD;
        c4DnD:
        foreach ($result as $row) {
            $ret[$row->tp] = $row->tp;
            XZrda:
        }
        goto baTpD;
        baTpD:
        D4j8e:
        goto R__rR;
        BWK38:
        $this->db->distinct();
        goto DmVNY;
        lnKrA:
    }
    public function getDistinctSmt()
    {
        goto ZW5Dp;
        H2B5U:
        return $ret;
        goto QL19y;
        ZX_Wv:
        foreach ($result as $row) {
            $ret[$row->smt] = $row->smt;
            hsjsO:
        }
        goto WZCdG;
        ZW5Dp:
        $this->db->select("\x73\155\164");
        goto vExvT;
        mxlcH:
        $ret = [];
        goto ZX_Wv;
        WZCdG:
        nV2mQ:
        goto H2B5U;
        vExvT:
        $this->db->distinct();
        goto sKFHv;
        sKFHv:
        $result = $this->db->get("\x63\142\x74\137\x72\x65\x6b\141\x70\x5f\x6e\151\154\141\x69")->result();
        goto mxlcH;
        QL19y:
    }
    public function getDistinctJenisUjian()
    {
        goto xRdDd;
        Dr64V:
        iosxP:
        goto MOfVn;
        MOfVn:
        return $ret;
        goto ZSoNK;
        xRdDd:
        $this->db->select("\164\x70\54\x20\163\155\164\x2c\x20\153\x6f\x64\x65\x5f\152\145\156\151\x73");
        goto LS0qY;
        LS0qY:
        $this->db->distinct();
        goto kwRzn;
        kwRzn:
        $result = $this->db->get("\143\142\164\x5f\162\x65\x6b\x61\160\137\x6e\x69\x6c\141\151")->result();
        goto CdDWE;
        PTS0J:
        foreach ($result as $row) {
            $ret[$row->tp][$row->smt][$row->kode_jenis] = $row->kode_jenis;
            gFzeu:
        }
        goto Dr64V;
        CdDWE:
        $ret = [];
        goto PTS0J;
        ZSoNK:
    }
    public function getDistinctJenis($tp, $smt)
    {
        goto MOH8d;
        LGlvC:
        ibiSq:
        goto TPT19;
        VPa9B:
        $this->db->distinct();
        goto u_fke;
        MOH8d:
        $this->db->select("\x6b\157\x64\x65\137\x6a\x65\156\151\163");
        goto VPa9B;
        D7B2h:
        $ret = [];
        goto CJAnK;
        CJAnK:
        foreach ($result as $row) {
            $ret[$row->kode_jenis] = $row->kode_jenis;
            suQbB:
        }
        goto LGlvC;
        u_fke:
        $result = $this->db->get("\x63\x62\x74\137\162\x65\153\141\x70\137\156\x69\x6c\x61\x69")->result();
        goto D7B2h;
        TPT19:
        return $ret;
        goto PUSzF;
        PUSzF:
    }
    public function getDistinctKelas($id_jadwal = null)
    {
        goto tS4pT;
        tS4pT:
        $this->db->select("\x61\56\164\x70\54\40\x61\x2e\x73\155\164\x2c\40\141\x2e\x6b\157\x64\145\137\x6a\145\156\151\x73\54\x20\141\x2e\151\x64\x5f\153\x65\154\x61\163\x2c\x20\142\56\x6e\x61\x6d\141\x5f\153\145\154\x61\163");
        goto mbpQU;
        pSBkJ:
        $this->db->where("\x69\144\x5f\x6a\141\x64\167\x61\x6c", $id_jadwal);
        goto GgYCg;
        akJn0:
        xLM54:
        goto pvJHn;
        eu_ZR:
        $result = $this->db->get()->result();
        goto hEcEJ;
        pvJHn:
        return $ret;
        goto MfWsq;
        Iwd1e:
        $this->db->join("\x6d\141\x73\164\x65\x72\x5f\x6b\145\154\x61\x73\40\x62", "\x62\x2e\x69\x64\x5f\x6b\145\x6c\x61\x73\75\141\x2e\x69\144\137\153\145\x6c\x61\x73");
        goto eu_ZR;
        GgYCg:
        KBuQ8:
        goto Iwd1e;
        qIZ1F:
        if (!($id_jadwal != null)) {
            goto KBuQ8;
        }
        goto pSBkJ;
        mbpQU:
        $this->db->distinct();
        goto be0v8;
        ATO23:
        foreach ($result as $row) {
            goto dzbU2;
            y22Ov:
            $ret[$row->tp][$row->smt][$row->kode_jenis][$row->id_kelas] = $row->nama_kelas;
            goto w5p5a;
            w5p5a:
            yhjO7:
            goto seAXH;
            seAXH:
            dL7eU:
            goto W52NF;
            dzbU2:
            if (!($row->id_kelas != '')) {
                goto yhjO7;
            }
            goto y22Ov;
            W52NF:
        }
        goto akJn0;
        hEcEJ:
        $ret = [];
        goto ATO23;
        be0v8:
        $this->db->from("\143\x62\164\137\162\145\x6b\141\160\x5f\156\151\154\141\151\40\141");
        goto qIZ1F;
        MfWsq:
    }
}
