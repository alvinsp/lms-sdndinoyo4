<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\123\105\x50\101\124\110") or exit("\116\x6f\40\x64\151\162\x65\143\x74\40\163\143\162\x69\x70\x74\x20\141\x63\x63\x65\x73\x73\40\x61\x6c\154\157\x77\x65\x64");
class Master_model extends CI_Model
{
    public function create($table, $data, $batch = false)
    {
        goto qil_x;
        wKRyP:
        goto NBlwB;
        goto Yi67C;
        z2xEz:
        NBlwB:
        goto sc6VO;
        Go8uU:
        $insert = $this->db->insert_batch($table, $data);
        goto wKRyP;
        U833K:
        $insert = $this->db->insert($table, $data);
        goto z2xEz;
        sc6VO:
        return $insert;
        goto iYT6t;
        qil_x:
        if ($batch === false) {
            goto Y41PB;
        }
        goto Go8uU;
        Yi67C:
        Y41PB:
        goto U833K;
        iYT6t:
    }
    public function update($table, $data, $pk, $id = null, $batch = false)
    {
        goto pcHbT;
        aLuLA:
        YGiCs:
        goto e6KiM;
        PgGfV:
        tGysk:
        goto CSdP_;
        CSdP_:
        $insert = $this->db->update($table, $data, array($pk => $id));
        goto aLuLA;
        jRKf5:
        $insert = $this->db->update_batch($table, $data, $pk);
        goto sRu4c;
        e6KiM:
        return $insert;
        goto o_7A0;
        pcHbT:
        if ($batch === false) {
            goto tGysk;
        }
        goto jRKf5;
        sRu4c:
        goto YGiCs;
        goto PgGfV;
        o_7A0:
    }
    public function delete($table, $data, $pk)
    {
        $this->db->where_in($pk, $data);
        return $this->db->delete($table);
    }
    public function delete_not($table, $data, $pk, $col, $not)
    {
        goto vkMOE;
        M_i42:
        $this->db->where($col . "\41\x3d" . $not);
        goto oIHgA;
        oIHgA:
        return $this->db->delete($table);
        goto co77q;
        vkMOE:
        $this->db->where_in($pk, $data);
        goto M_i42;
        co77q:
    }
    public function getDataKelas()
    {
        goto sbMn2;
        bT4bE:
        return $this->datatables->generate();
        goto GBE1L;
        fpXuM:
        $this->datatables->join("\x6d\141\163\164\145\162\x5f\152\165\162\x75\x73\141\x6e", "\x6a\165\x72\x75\163\141\x6e\x5f\x69\144\x3d\x69\x64\137\x6a\x75\162\165\x73\141\156");
        goto er3IN;
        er3IN:
        $this->datatables->add_column("\x62\x75\x6c\153\137\163\x65\154\x65\x63\x74", "\x3c\x64\x69\x76\x20\x63\154\141\x73\163\75\42\x74\x65\170\x74\x2d\143\x65\156\164\x65\162\x22\x3e\74\151\x6e\x70\x75\x74\40\x74\x79\160\x65\x3d\42\143\150\145\x63\153\x62\x6f\170\x22\x20\x63\154\141\163\x73\x3d\x22\143\150\x65\143\x6b\x22\40\156\x61\155\x65\75\x22\143\150\145\143\153\x65\144\x5b\x5d\42\x20\166\x61\154\x75\145\x3d\42\44\61\x22\57\x3e\74\x2f\x64\151\166\x3e", "\x69\x64\x5f\153\145\154\141\163\x2c\40\156\141\155\141\x5f\153\145\154\141\163\54\40\x69\x64\x5f\152\165\x72\x75\163\141\x6e\x2c\40\x6e\141\155\x61\137\152\165\162\x75\163\x61\156");
        goto bT4bE;
        mxxJI:
        $this->datatables->from("\x6d\141\163\x74\145\x72\137\x6b\145\154\141\x73");
        goto fpXuM;
        sbMn2:
        $this->datatables->select("\151\x64\x5f\153\x65\x6c\x61\x73\54\40\x6e\x61\155\x61\x5f\x6b\145\x6c\141\163\54\x20\x69\144\137\152\165\x72\x75\163\x61\156\x2c\x20\156\x61\x6d\x61\x5f\x6a\x75\x72\165\x73\141\x6e");
        goto mxxJI;
        GBE1L:
    }
    public function getKelasById($id)
    {
        goto zf4VV;
        mNsiF:
        $this->db->where("\151\x64\x5f\153\145\x6c\141\163", $id);
        goto ZqWYP;
        kppzn:
        $this->db->from("\155\x61\163\x74\145\x72\137\153\145\154\x61\x73");
        goto mNsiF;
        KRjVF:
        $query = $this->db->get()->row();
        goto a7L7z;
        ZqWYP:
        $this->db->order_by("\x6e\x61\x6d\141\x5f\x6b\145\x6c\141\x73");
        goto KRjVF;
        zf4VV:
        $this->db->select("\x69\144\137\x6b\x65\x6c\x61\x73\54\x20\x6e\x61\x6d\x61\x5f\153\145\x6c\141\x73\54\40\x6c\145\166\x65\x6c\x5f\x69\144");
        goto kppzn;
        a7L7z:
        return $query;
        goto tQoVe;
        tQoVe:
    }
    public function getDataJurusan()
    {
        goto Gb9b4;
        tUPEj:
        $result = $this->db->get()->result();
        goto RQRz_;
        RQRz_:
        return $result;
        goto SWFzO;
        HJTcG:
        $this->db->from("\x6d\x61\163\164\x65\x72\x5f\x6a\x75\x72\165\x73\x61\156");
        goto tUPEj;
        Gb9b4:
        $this->db->select("\x2a");
        goto HJTcG;
        SWFzO:
    }
    public function getDataJurusanMapel($arrIds)
    {
        goto I4yDl;
        DZsR8:
        $this->db->where_in("\x69\x64\x5f\x6d\141\160\145\154", $arrIds);
        goto rjb3J;
        hY2b4:
        foreach ($result as $key => $row) {
            $ret[$row->id_mapel] = $row->nama_mapel;
            u68lv:
        }
        goto Ck1BI;
        RbPQi:
        MgqEK:
        goto w33ty;
        FYoyZ:
        $ret = [];
        goto Uwt_F;
        I4yDl:
        $this->db->select("\x69\144\137\x6d\141\160\145\154\54\40\x6e\x61\x6d\x61\x5f\155\x61\x70\145\154");
        goto EUJVs;
        Uwt_F:
        if (!$result) {
            goto MgqEK;
        }
        goto hY2b4;
        w33ty:
        return $ret;
        goto f50AV;
        EUJVs:
        $this->db->from("\155\x61\x73\164\145\162\x5f\155\141\160\145\x6c");
        goto DZsR8;
        Ck1BI:
        FT3RL:
        goto RbPQi;
        rjb3J:
        $result = $this->db->get()->result();
        goto FYoyZ;
        f50AV:
    }
    public function getDataTableJurusan()
    {
        goto R4FKz;
        R4FKz:
        $this->datatables->select("\52");
        goto XLssR;
        LBmib:
        $this->db->order_by("\x69\x64\137\152\165\x72\x75\x73\x61\156");
        goto tUuTT;
        XLssR:
        $this->datatables->from("\x6d\141\x73\x74\145\162\137\x6a\165\x72\165\x73\141\x6e");
        goto LBmib;
        tUuTT:
        return $this->datatables->generate();
        goto KzsdA;
        KzsdA:
    }
    public function getJurusanById($id)
    {
        goto DAXOx;
        DAXOx:
        $this->db->where_in("\x69\144\137\x6a\165\x72\x75\163\x61\156", $id);
        goto u5MMS;
        u5MMS:
        $this->db->order_by("\156\x61\155\x61\x5f\152\x75\x72\165\163\x61\156");
        goto bzHzb;
        U73Rs:
        return $query;
        goto oDiSV;
        bzHzb:
        $query = $this->db->get("\155\141\163\164\145\x72\x5f\152\x75\162\x75\163\141\156")->result();
        goto U73Rs;
        oDiSV:
    }
    function updateJurusan()
    {
        goto ZTANI;
        UCkOX:
        $row_mapels = count($this->input->post("\155\141\x70\145\x6c", true));
        goto YmDkS;
        UQRTV:
        $check_mapel = $this->input->post("\x6d\x61\x70\x65\x6c", true);
        goto KG6m0;
        OqKUZ:
        k9EBX:
        goto WYXs6;
        iuE_a:
        $this->db->set("\155\141\160\145\154\x5f\x70\x65\x6d\151\156\141\164\141\156", implode("\54", $mapels));
        goto DRsg0;
        WYXs6:
        $i++;
        goto k4HYo;
        r3ujB:
        $this->db->set("\153\x6f\144\x65\x5f\x6a\165\162\165\x73\141\x6e", $kode);
        goto iuE_a;
        DRsg0:
        $this->db->set("\163\164\x61\164\x75\163", "\x31");
        goto Zis8i;
        AAtXR:
        $this->db->set("\x6e\141\x6d\141\x5f\x6a\165\x72\x75\x73\141\x6e", $name);
        goto r3ujB;
        PyHgs:
        array_push($mapels, $this->input->post("\155\141\x70\145\x6c\133" . $i . "\x5d", true));
        goto OqKUZ;
        vNONs:
        c1C3J:
        goto cPXOo;
        YmDkS:
        $i = 0;
        goto vNONs;
        vM1yN:
        QKx2e:
        goto WJ95B;
        cPXOo:
        if (!($i <= $row_mapels)) {
            goto QKx2e;
        }
        goto PyHgs;
        hlpL7:
        $name = $this->input->post("\x6e\x61\155\141\x5f\152\x75\x72\165\x73\141\156", true);
        goto c5Y5C;
        Zis8i:
        $this->db->where("\x69\144\137\x6a\x75\x72\x75\x73\x61\x6e", $id);
        goto U8m7i;
        k4HYo:
        goto c1C3J;
        goto vM1yN;
        pTVq0:
        $mapels = [];
        goto UQRTV;
        KG6m0:
        if (!$check_mapel) {
            goto LgQoB;
        }
        goto UCkOX;
        WJ95B:
        LgQoB:
        goto AAtXR;
        ZTANI:
        $id = $this->input->post("\x69\x64\x5f\152\165\162\x75\x73\x61\156");
        goto hlpL7;
        U8m7i:
        return $this->db->update("\155\x61\163\164\145\x72\x5f\152\x75\x72\x75\163\141\156");
        goto yoz6s;
        c5Y5C:
        $kode = $this->input->post("\x6b\157\144\145\x5f\152\165\162\165\163\x61\156", true);
        goto pTVq0;
        yoz6s:
    }
    public function inputJurusan()
    {
        $data = ["\x6e\141\155\141\x5f\152\165\x72\x75\x73\x61\x6e" => $this->input->post("\156\141\x6d\141\x5f\152\165\x72\x75\x73\x61\156", true), "\x6b\x6f\144\x65\x5f\x6a\165\x72\165\x73\x61\156" => $this->input->post("\x6b\x6f\x64\145\137\x6a\165\162\x75\x73\x61\156", true)];
        return $this->db->insert("\x6d\141\163\164\x65\162\x5f\152\165\x72\165\x73\141\156", $data);
    }
    public function getAllDataSiswa($id_tp, $id_smt)
    {
        goto lqhYv;
        IIFcZ:
        $this->db->order_by("\x62\56\151\x64\x5f\x6b\x65\154\141\163");
        goto anplK;
        anplK:
        $this->db->order_by("\141\x2e\156\141\x6d\141");
        goto DkhJ8;
        sLf5j:
        $this->db->select("\141\56\52\x2c\40\143\56\x6e\141\x6d\141\x5f\153\x65\154\141\163");
        goto J3BEy;
        J3BEy:
        $this->db->from("\x6d\141\163\164\145\162\x5f\x73\x69\163\x77\141\40\141");
        goto q5DMT;
        HVZDg:
        return $query->result();
        goto U7wS7;
        DkhJ8:
        $query = $this->db->get();
        goto HVZDg;
        kkJg2:
        $this->db->join("\x6d\x61\163\164\145\x72\137\153\145\x6c\141\x73\x20\143", "\143\x2e\x69\144\x5f\x6b\145\x6c\141\163\75\x62\56\151\144\x5f\153\x65\154\x61\x73", "\x6c\x65\146\x74");
        goto IIFcZ;
        lqhYv:
        $this->db->query("\123\x45\124\x20\123\121\114\x5f\x42\111\x47\137\x53\105\114\x45\x43\124\123\x3d\61");
        goto sLf5j;
        q5DMT:
        $this->db->join("\x6b\145\x6c\141\x73\137\163\x69\x73\x77\141\40\x62", "\142\56\151\144\137\x73\151\x73\167\141\x3d\x61\x2e\151\144\137\163\151\x73\167\x61\40\101\116\x44\40\x62\56\x69\x64\x5f\x74\x70\75" . $id_tp . "\x20\x41\x4e\104\40\x62\x2e\151\144\x5f\x73\155\x74\x3d" . $id_smt . '', "\x6c\x65\x66\164");
        goto kkJg2;
        U7wS7:
    }
    public function getSiswaByKelas($id_tp, $id_smt, $id_kelas)
    {
        goto XBsXX;
        d675d:
        $this->db->from("\153\145\x6c\141\x73\137\x73\x69\x73\167\x61\40\141");
        goto bw023;
        iHl_g:
        $this->db->where("\141\56\x69\144\x5f\163\155\164", $id_smt);
        goto awPPp;
        bw023:
        $this->db->join("\155\x61\x73\x74\145\x72\x5f\x73\x69\163\167\x61\x20\142", "\142\x2e\151\x64\x5f\x73\x69\163\x77\x61\75\141\56\x69\x64\x5f\163\151\163\x77\141");
        goto K85bd;
        fi6wp:
        $this->db->where("\141\56\151\x64\137\x6b\145\154\x61\163", $id_kelas);
        goto jziR0;
        K2d0N:
        $this->db->where("\x62\x2e\151\x64\x5f\x73\x69\x73\167\141\x20\151\x73\40\116\x4f\124\40\x4e\125\114\114", NULL, FALSE);
        goto fi6wp;
        awPPp:
        $this->db->where("\x61\56\x69\x64\x5f\163\x69\163\167\x61\x20\x69\163\40\x4e\x4f\124\x20\x4e\125\114\x4c", NULL, FALSE);
        goto K2d0N;
        K85bd:
        $this->db->where("\x61\56\151\x64\137\x74\160", $id_tp);
        goto iHl_g;
        XBsXX:
        $this->db->select("\142\x2e\x2a");
        goto d675d;
        jziR0:
        $this->db->order_by("\x62\56\156\x61\155\x61", "\x41\x53\103");
        goto y6noA;
        y6noA:
        return $this->db->get()->result();
        goto W6OIv;
        W6OIv:
    }
    public function getDataSiswa($id_tp, $id_smt)
    {
        goto GYyWE;
        KQJXY:
        $this->datatables->select("\x61\x2e\151\144\x5f\163\x69\163\167\141\54\40\141\56\146\157\164\x6f\54\40\141\x2e\x6e\141\x6d\x61\54\40\141\56\x6e\151\163\54\x20\x61\x2e\x6e\151\x73\x6e\54\x20\141\x2e\x6a\x65\156\151\163\137\153\145\154\x61\155\x69\156\54\40\x66\x2e\154\x65\x76\x65\x6c\x5f\x69\x64\54\40\146\x2e\156\x61\155\141\x5f\153\x65\x6c\x61\163\54\x20\x62\56\163\164\141\x74\165\x73");
        goto U9N6S;
        U9N6S:
        $this->datatables->from("\x6d\x61\x73\x74\x65\162\x5f\x73\x69\x73\x77\141\40\x61");
        goto LmpVe;
        L2cmF:
        $this->db->order_by("\x62\x2e\163\x74\x61\164\x75\x73", "\101\123\103");
        goto FXIS0;
        z_mmx:
        $this->db->order_by("\111\123\116\125\x4c\114\50\146\x2e\154\145\x76\x65\x6c\137\x69\144\51\54\40\x66\x2e\x6c\x65\166\145\x6c\137\x69\144\x20\101\123\103");
        goto oGErY;
        aZYUq:
        $this->datatables->join("\x6d\x61\163\164\x65\x72\137\x6b\x65\154\x61\x73\40\x66", "\x66\x2e\151\x64\137\x6b\x65\154\x61\x73\75\x64\56\x69\x64\137\x6b\145\154\141\x73", "\x6c\x65\x66\x74");
        goto z_mmx;
        oGErY:
        $this->db->order_by("\146\x2e\156\141\x6d\x61\x5f\153\145\154\141\163", "\x41\x53\103");
        goto L2cmF;
        bZo_K:
        $this->datatables->join("\x6b\x65\x6c\x61\163\137\163\x69\x73\167\141\x20\144", "\x64\56\151\144\x5f\x73\x69\x73\167\141\40\75\40\141\x2e\151\144\x5f\x73\151\163\167\x61\x20\101\116\x44\40\144\56\x69\144\137\x74\x70\x20\x3d\x20" . $id_tp . "\40\x41\116\x44\40\144\x2e\x69\144\137\x73\x6d\x74\x20\75\40" . $id_smt . '', "\x6c\145\146\x74");
        goto aZYUq;
        UDxAj:
        $this->datatables->join("\165\x73\145\162\163\x20\x63", "\141\x2e\x75\x73\x65\162\x6e\141\x6d\145\75\x63\56\x75\163\145\162\x6e\141\155\x65");
        goto bZo_K;
        LmpVe:
        $this->datatables->join("\142\165\x6b\x75\137\151\x6e\x64\x75\153\40\x62", "\x61\x2e\151\144\137\163\151\163\167\x61\75\x62\56\x69\x64\137\163\151\163\167\141", "\154\145\x66\x74");
        goto UDxAj;
        FXIS0:
        return $this->datatables->generate();
        goto N_Pdq;
        GYyWE:
        $this->db->query("\x53\x45\x54\x20\123\x51\x4c\137\102\x49\x47\137\123\105\x4c\x45\x43\x54\123\x3d\61");
        goto KQJXY;
        N_Pdq:
    }
    public function getAllSiswa($id_tp, $id_smt, $offset, $limit, $search = null, $sort = null, $order = null)
    {
        goto sDI7b;
        zKrG3:
        $this->db->or_like("\x61\x2e\x6e\151\x73", $search);
        goto EIwf1;
        jGOL2:
        $this->db->limit($limit, $offset);
        goto rWQA_;
        JZg11:
        AbuA_:
        goto ochxp;
        sDI7b:
        $this->db->select("\x61\56\151\144\137\x73\151\x73\x77\x61\x2c\40\141\56\146\157\164\157\54\40\x61\56\x6e\x61\x6d\x61\x2c\40\141\x2e\156\x69\163\x2c\40\141\56\x6e\151\x73\156\54\x20\x61\56\152\145\x6e\x69\x73\137\x6b\145\x6c\x61\x6d\151\x6e\x2c\x20\x66\x2e\x6c\145\166\x65\x6c\137\151\x64\54\40\146\x2e\x6e\x61\x6d\x61\x5f\x6b\x65\154\x61\x73\x2c" . "\40\50\123\x45\x4c\105\x43\x54\x20\x43\117\125\116\x54\x28\x69\x64\51\40\x46\x52\117\x4d\x20\x75\x73\x65\x72\163\x20\127\x48\105\x52\x45\40\165\163\145\x72\163\56\165\163\x65\x72\x6e\x61\155\x65\x20\75\40\x61\x2e\x75\x73\x65\162\x6e\x61\155\145\x29\40\x41\x53\x20\163\164\x61\x74\165\x73");
        goto OIkDt;
        uOPOt:
        if (!($search != null)) {
            goto AbuA_;
        }
        goto i1mhr;
        W0HPs:
        $this->db->join("\153\x65\154\141\x73\137\163\151\x73\167\141\40\x64", "\x64\x2e\151\x64\137\x73\x69\x73\x77\x61\40\x3d\x20\141\x2e\x69\144\137\163\x69\163\x77\141\40\x41\x4e\104\x20\144\56\151\x64\137\164\x70\x20\x3d\40" . $id_tp . "\40\x41\116\x44\40\x64\56\x69\x64\x5f\163\x6d\164\x20\75\40" . $id_smt . '', "\x6c\145\146\x74");
        goto MDgX8;
        rWQA_:
        $this->db->order_by("\141\x2e\156\x61\x6d\x61", "\x41\123\103");
        goto W0HPs;
        MDgX8:
        $this->db->join("\x6d\x61\x73\164\145\x72\x5f\x6b\145\154\x61\163\40\x66", "\146\56\151\144\137\x6b\x65\154\x61\163\75\x64\x2e\151\144\x5f\153\x65\x6c\141\163", "\154\145\146\164");
        goto uOPOt;
        OIkDt:
        $this->db->from("\x6d\141\163\164\x65\162\x5f\163\151\x73\167\141\40\x61");
        goto jGOL2;
        i1mhr:
        $this->db->like("\141\x2e\x6e\141\155\x61", $search);
        goto zKrG3;
        ochxp:
        return $this->db->get()->result();
        goto TChRx;
        EIwf1:
        $this->db->or_like("\141\x2e\156\x69\163\x6e", $search);
        goto JZg11;
        TChRx:
    }
    public function getSiswaPage($id_tp, $id_smt, $offset, $limit, $search = null, $sort = null, $order = null)
    {
        goto d5x92;
        OzAgK:
        $this->db->from("\155\141\x73\164\145\162\137\x73\151\163\x77\x61\40\141");
        goto yDt3S;
        hK1i5:
        $this->db->like("\141\x2e\156\x61\x6d\x61", $search);
        goto F0ToP;
        F0ToP:
        $this->db->or_like("\x61\56\156\151\x73", $search);
        goto b5sn2;
        am7w3:
        J49_C:
        goto hcVqP;
        hcVqP:
        return $this->db->get()->result();
        goto N6glA;
        d5x92:
        $this->db->select("\x61\56\x69\x64\x5f\163\151\163\167\x61\x2c\40\x61\56\146\157\164\157\54\40\x61\56\156\x61\x6d\141\54\x20\141\56\x6e\x69\163\54\x20\x61\56\x6e\x69\163\x6e\54\x20\141\x2e\x6a\x65\156\151\163\x5f\153\145\154\x61\155\151\156\x2c\40\x64\x2e\151\144\137\153\145\154\x61\x73\x2c\40" . "\146\56\156\141\155\141\137\x6b\145\x6c\141\163\x2c\40\50\123\x45\114\105\103\x54\x20\103\117\125\x4e\124\50\x69\x64\51\x20\x46\x52\117\x4d\40\x75\163\x65\x72\163\40\127\110\x45\122\x45\40\165\x73\145\x72\x73\x2e\x75\163\145\x72\156\141\x6d\145\40\x3d\40\141\56\165\x73\x65\162\x6e\141\x6d\x65\x29\x20\x41\123\40\141\x6b\164\151\x66");
        goto OzAgK;
        UDzqF:
        $this->db->order_by("\146\x2e\156\141\155\x61\137\x6b\145\154\141\x73", "\x41\x53\103");
        goto x_b13;
        JZk68:
        $this->db->join("\155\x61\x73\x74\x65\x72\x5f\153\145\154\x61\163\x20\146", "\x66\56\151\x64\137\153\145\x6c\141\163\x3d\144\56\151\x64\x5f\x6b\145\x6c\x61\x73", "\x6c\x65\146\x74");
        goto Ic3M7;
        ARgPM:
        if (!($search != null)) {
            goto J49_C;
        }
        goto hK1i5;
        uWB9q:
        $this->db->join("\x6b\145\x6c\141\163\137\x73\x69\x73\x77\141\40\x64", "\144\x2e\151\144\x5f\x73\x69\163\167\x61\75\x61\x2e\151\144\x5f\x73\151\x73\x77\141\x20\x41\x4e\104\40\x64\x2e\151\x64\137\164\160\40\x3d\x20" . $id_tp . "\x20\101\116\x44\x20\x64\x2e\x69\x64\x5f\163\155\x74\40\75\40" . $id_smt . '', "\154\x65\x66\x74");
        goto JZk68;
        x_b13:
        $this->db->order_by("\x61\x2e\156\141\x6d\141", "\x41\x53\103");
        goto ARgPM;
        Ic3M7:
        $this->db->order_by("\x49\123\x4e\x55\x4c\x4c\50\x66\56\154\x65\x76\x65\x6c\137\x69\144\51\x2c\x20\x66\56\154\145\x76\145\x6c\137\151\144\x20\x41\123\103");
        goto UDzqF;
        b5sn2:
        $this->db->or_like("\x61\56\156\151\163\156", $search);
        goto am7w3;
        yDt3S:
        $this->db->limit($limit, $offset);
        goto uWB9q;
        N6glA:
    }
    public function getSiswaTotalPage($search = null)
    {
        goto TONWY;
        bVyc7:
        if (!($search != null)) {
            goto DvlCV;
        }
        goto RWmGM;
        qGQZs:
        return $this->db->get()->num_rows();
        goto u145H;
        TONWY:
        $this->db->select("\x69\144\137\163\151\163\167\141");
        goto KZvFg;
        kitQY:
        $this->db->or_like("\156\151\x73", $search);
        goto vIuF2;
        vIuF2:
        $this->db->or_like("\156\151\x73\156", $search);
        goto uPjOQ;
        uPjOQ:
        DvlCV:
        goto qGQZs;
        KZvFg:
        $this->db->from("\x6d\x61\163\164\x65\162\x5f\163\151\x73\167\141");
        goto bVyc7;
        RWmGM:
        $this->db->like("\x6e\x61\x6d\141", $search);
        goto kitQY;
        u145H:
    }
    public function getDataSiswaByKelas($id_tp, $id_smt, $id_kelas, $offset, $limit, $search = null, $sort = null, $order = null)
    {
        goto zTU7q;
        huD2X:
        if (!($search != null)) {
            goto z0IRS;
        }
        goto QAv4H;
        eMiGE:
        $this->db->where("\x61\x2e\x69\x64\x5f\x6b\145\x6c\x61\x73", $id_kelas);
        goto WIb8Y;
        TAVPi:
        $this->db->limit($limit, $offset);
        goto zSa6M;
        cniZK:
        $this->db->from("\x6b\145\x6c\141\163\137\163\151\163\x77\x61\40\x61");
        goto TAVPi;
        M8jej:
        $this->db->or_like("\x62\x2e\156\151\163\156", $search);
        goto cXNo2;
        QAv4H:
        $this->db->like("\x62\56\156\x61\x6d\141", $search);
        goto sLyz7;
        WIb8Y:
        return $this->db->get()->result();
        goto gr4xd;
        sLyz7:
        $this->db->or_like("\x62\56\x6e\151\x73", $search);
        goto M8jej;
        cXNo2:
        z0IRS:
        goto HSPm0;
        B5dV2:
        $this->db->join("\x6d\x61\x73\x74\x65\162\137\x6b\145\154\x61\163\40\146", "\x66\56\151\144\x5f\153\x65\x6c\141\163\x3d\x61\x2e\151\144\137\153\145\154\x61\163");
        goto F0NOI;
        blO2e:
        $this->db->where("\x61\x2e\151\144\x5f\163\155\x74", $id_smt);
        goto eMiGE;
        HSPm0:
        $this->db->where("\x61\x2e\x69\x64\x5f\164\x70", $id_tp);
        goto blO2e;
        zTU7q:
        $this->db->select("\142\x2e\x69\144\137\163\151\x73\167\141\x2c\40\x62\x2e\156\141\155\x61\54\40\x62\x2e\x6e\151\x73\x2c\x20\x62\x2e\156\151\163\156\54\x20\x62\x2e\152\145\x6e\x69\x73\137\153\x65\154\x61\x6d\x69\x6e\x2c\x20\142\x2e\165\163\145\162\156\x61\155\145\x2c\x20\142\56\160\141\163\x73\167\x6f\x72\144\54\x20\x62\56\x66\x6f\164\157\54\x20\x66\56\x6e\x61\155\x61\137\153\145\154\x61\163");
        goto cniZK;
        zSa6M:
        $this->db->join("\155\141\x73\164\x65\x72\137\163\151\163\167\x61\40\x62", "\142\x2e\x69\144\x5f\x73\x69\163\167\x61\x3d\x61\x2e\151\x64\x5f\x73\x69\x73\x77\x61");
        goto B5dV2;
        F0NOI:
        $this->db->join("\165\163\145\162\x73\40\x75", "\165\x2e\x75\x73\x65\162\x6e\x61\155\145\x3d\x62\x2e\x75\x73\145\162\156\x61\x6d\x65", "\x6c\x65\146\164");
        goto huD2X;
        gr4xd:
    }
    public function getDataSiswaByKelasPage($id_tp, $id_smt, $id_kelas, $search = null)
    {
        goto pJf7z;
        voKrf:
        if (!($search != null)) {
            goto LUQSO;
        }
        goto d2KtZ;
        EN27f:
        $this->db->where("\x61\x2e\151\x64\137\x73\x6d\164", $id_smt);
        goto dkjt2;
        dUgTS:
        LUQSO:
        goto xYUZi;
        pJf7z:
        $this->db->select("\141\x2e\151\144\x5f\x73\x69\163\167\141");
        goto hJjwa;
        dkjt2:
        $this->db->where("\x61\56\151\144\x5f\x6b\145\x6c\141\x73", $id_kelas);
        goto NowZh;
        trgQ3:
        $this->db->or_like("\x62\56\x6e\151\163\x6e", $search);
        goto dUgTS;
        xYUZi:
        return $this->db->get()->num_rows();
        goto uEQQZ;
        d2KtZ:
        $this->db->like("\x62\56\156\x61\155\x61", $search);
        goto knI__;
        NowZh:
        $this->db->join("\155\141\163\164\x65\162\137\x73\151\163\167\x61\40\142", "\x62\56\151\144\x5f\x73\x69\163\167\141\75\141\56\151\x64\137\x73\x69\163\167\141");
        goto voKrf;
        knI__:
        $this->db->or_like("\142\x2e\x6e\x69\x73", $search);
        goto trgQ3;
        hJjwa:
        $this->db->from("\153\x65\154\141\163\137\x73\x69\x73\x77\141\x20\141");
        goto qsPha;
        qsPha:
        $this->db->where("\x61\x2e\x69\x64\x5f\164\x70", $id_tp);
        goto EN27f;
        uEQQZ:
    }
    public function getSiswaById($id)
    {
        goto EbECw;
        PCNDd:
        return $this->db->get()->row();
        goto u374J;
        EbECw:
        $this->db->select("\141\x2e\52\x2c\40\x62\x2e\163\x74\141\x74\165\163");
        goto CSAuG;
        DNynR:
        $this->db->where("\141\56\151\x64\137\163\x69\x73\167\x61", $id);
        goto PCNDd;
        CSAuG:
        $this->db->from("\x6d\141\x73\164\145\162\x5f\x73\151\x73\167\141\40\x61");
        goto G3ItO;
        G3ItO:
        $this->db->join("\142\165\153\x75\x5f\x69\156\144\x75\153\x20\x62", "\141\x2e\151\144\x5f\x73\x69\x73\167\x61\75\142\56\x69\x64\x5f\x73\x69\x73\167\141", "\x6c\145\146\x74");
        goto DNynR;
        u374J:
    }
    public function getSiswaKelasBaru($id_tp, $id_smt)
    {
        goto d_YUH;
        m6IfE:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa] = $row;
            l1GEC:
        }
        goto cA7sm;
        QSdHM:
        $this->db->select("\x62\56\x69\x64\x5f\163\151\163\x77\x61\x2c\40\142\x2e\156\141\155\x61\54\40\x66\x2e\x69\144\137\x6b\x65\154\141\x73\x2c\x20\146\56\156\x61\155\141\x5f\153\145\x6c\x61\163\x2c\x20\x66\56\x6b\x6f\144\145\x5f\x6b\x65\154\x61\x73");
        goto abobz;
        mbftB:
        $this->db->where("\x61\x2e\151\x64\x5f\x73\155\x74", $id_smt);
        goto Vod83;
        d_YUH:
        $this->db->query("\123\x45\124\40\123\x51\114\x5f\102\111\x47\137\123\105\114\x45\103\124\123\x3d\x31");
        goto QSdHM;
        hrv5V:
        $this->db->join("\x6d\x61\x73\164\145\162\x5f\153\x65\154\141\x73\40\146", "\x66\x2e\151\x64\137\x6b\x65\x6c\141\163\75\141\x2e\x69\144\137\x6b\145\154\141\x73");
        goto RmY1U;
        aSyQ8:
        return $ret;
        goto m1P5j;
        IVijK:
        $this->db->join("\x6d\x61\x73\x74\x65\x72\x5f\163\x69\163\167\x61\x20\142", "\142\56\x69\144\x5f\163\151\x73\167\141\x3d\141\x2e\151\144\x5f\163\x69\x73\x77\x61");
        goto hrv5V;
        cA7sm:
        TzIXT:
        goto rmd_C;
        RmY1U:
        $this->db->where("\141\56\151\144\x5f\x74\160", $id_tp);
        goto mbftB;
        rmd_C:
        LJDGd:
        goto aSyQ8;
        Vod83:
        $result = $this->db->get()->result();
        goto jrnzW;
        abobz:
        $this->db->from("\153\145\154\x61\x73\x5f\x73\151\x73\x77\x61\40\x61");
        goto IVijK;
        jrnzW:
        $ret = [];
        goto ZJ6EN;
        ZJ6EN:
        if (!$result) {
            goto LJDGd;
        }
        goto m6IfE;
        m1P5j:
    }
    public function getDataSiswaById($id_tp, $id_smt, $idSiswa)
    {
        goto SkiJP;
        Sq9wM:
        $this->db->join("\x6d\x61\x73\164\145\x72\x5f\153\x65\154\141\x73\x20\x66", "\x66\x2e\x69\144\x5f\153\145\x6c\141\163\x3d\x61\x2e\x69\144\137\153\x65\154\141\x73", "\x6c\x65\x66\x74");
        goto EU6nK;
        AZSrH:
        $this->db->join("\143\x62\164\137\x72\165\141\156\x67\40\x64", "\144\56\x69\144\x5f\162\x75\141\x6e\147\x3d\x63\56\x72\165\141\x6e\147\x5f\151\144", "\154\145\x66\x74");
        goto JMjtw;
        lSSnZ:
        $this->db->join("\x6d\x61\x73\164\x65\x72\x5f\163\x69\x73\167\141\x20\142", "\142\x2e\x69\144\x5f\x73\151\x73\167\x61\75\x61\56\x69\x64\x5f\163\151\x73\167\141", "\x6c\145\146\164");
        goto QpbEe;
        KqZZJ:
        $this->db->join("\143\x62\164\x5f\163\x65\163\x69\40\152", "\152\56\151\x64\x5f\163\145\163\x69\75\150\x2e\151\144\137\x73\x65\x73\151", "\x6c\145\146\164");
        goto f5TIP;
        RkEtz:
        $this->db->join("\143\x62\x74\x5f\x72\x75\x61\x6e\147\x20\151", "\151\56\151\144\x5f\x72\x75\141\x6e\147\x3d\150\56\x69\x64\x5f\x72\x75\141\x6e\x67", "\x6c\x65\x66\x74");
        goto KqZZJ;
        ty9ti:
        $this->db->where("\x61\x2e\x69\x64\x5f\x73\x6d\164", $id_smt);
        goto A2QN5;
        GnaPU:
        $this->db->from("\153\x65\x6c\x61\x73\137\x73\x69\x73\167\141\40\x61");
        goto lSSnZ;
        T_p5x:
        return $this->db->get()->row();
        goto ZeORI;
        QpbEe:
        $this->db->join("\143\142\164\137\x73\145\x73\x69\x5f\x73\x69\x73\167\141\40\x63", "\x63\x2e\163\x69\x73\x77\x61\137\151\x64\x3d\141\56\x69\144\x5f\x73\151\163\167\141", "\x6c\x65\146\x74");
        goto AZSrH;
        JMjtw:
        $this->db->join("\x63\x62\164\137\163\145\x73\x69\40\x65", "\x65\56\x69\x64\x5f\x73\x65\x73\151\x3d\143\x2e\163\145\163\x69\x5f\x69\x64", "\x6c\145\146\164");
        goto Sq9wM;
        xPxdO:
        $this->db->join("\143\x62\x74\x5f\153\x65\x6c\141\x73\x5f\162\165\x61\x6e\147\40\x68", "\x68\x2e\151\x64\137\153\145\x6c\141\163\75\x61\x2e\x69\x64\x5f\153\145\x6c\x61\163", "\x6c\x65\x66\164");
        goto RkEtz;
        EU6nK:
        $this->db->join("\143\142\x74\137\156\157\155\157\162\x5f\160\145\x73\145\162\x74\x61\40\x67", "\147\x2e\151\144\137\163\x69\163\167\x61\x3d\141\56\151\144\x5f\x73\151\x73\167\141\x20\x41\x4e\x44\40\x67\x2e\151\144\x5f\x74\x70\75" . $id_tp, "\x6c\x65\x66\164");
        goto xPxdO;
        tWVCx:
        $this->db->select("\x62\x2e\151\144\x5f\163\x69\x73\x77\x61\x2c\x20\142\x2e\x6e\x61\155\141\54\x20\142\56\152\145\x6e\x69\163\137\153\145\154\141\155\151\156\54\x20\x62\x2e\156\151\163\54\40\142\56\156\x69\163\x6e\54\40\x62\x2e\x75\163\145\x72\156\x61\155\145\x2c\x20\142\56\x70\x61\163\163\x77\157\x72\x64\x2c" . "\x20\142\56\146\157\x74\x6f\54\40\x63\x2e\163\x65\x73\151\x5f\151\144\54\x20\x64\x2e\153\157\144\x65\137\x72\165\141\x6e\147\x2c\x20\145\56\x6b\157\144\145\x5f\163\145\163\151\x2c\40\146\x2e\156\141\x6d\141\x5f\x6b\145\x6c\x61\163\54\40\147\x2e\x6e\157\x6d\x6f\162\x5f\160\x65\x73\x65\x72\x74\141\54" . "\40\150\56\x73\x65\164\x5f\163\x69\x73\x77\141\x2c\x20\151\x2e\x6b\x6f\144\x65\137\162\x75\x61\156\147\40\141\x73\40\162\165\x61\x6e\147\137\153\145\x6c\x61\163\54\40\x6a\56\153\157\144\x65\x5f\163\145\x73\151\40\x61\x73\40\163\145\163\151\137\153\145\x6c\x61\x73");
        goto GnaPU;
        f5TIP:
        $this->db->where("\x61\x2e\x69\x64\x5f\x74\160", $id_tp);
        goto ty9ti;
        SkiJP:
        $this->db->query("\123\x45\x54\40\x53\121\x4c\137\102\111\107\x5f\x53\x45\114\105\x43\x54\x53\75\61");
        goto tWVCx;
        A2QN5:
        $this->db->where("\x61\x2e\151\144\137\x73\x69\x73\167\141", $idSiswa);
        goto T_p5x;
        ZeORI:
    }
    public function getAgamaSiswa()
    {
        goto KwXTu;
        uSjrR:
        XQOuF:
        goto NDI59;
        V_lIY:
        $this->db->distinct();
        goto BqCtS;
        KwXTu:
        $this->db->select("\141\147\141\155\141");
        goto V_lIY;
        P70UP:
        $this->db->not_like("\141\56\x61\x67\141\155\x61", "\120\x69\x6c\151\x68");
        goto eXEm1;
        BqCtS:
        $this->db->from("\x6d\x61\x73\164\145\162\x5f\163\151\163\167\141\x20\x61");
        goto VIrsB;
        VIrsB:
        $this->db->where("\141\x2e\141\x67\x61\155\141\40\151\x73\40\x4e\x4f\124\x20\x4e\x55\x4c\x4c", NULL, FALSE);
        goto k8R73;
        NjpQ6:
        $ret["\55"] = "\x42\165\x6b\x61\156\40\115\x61\x70\145\x6c\40\x41\x67\141\x6d\141";
        goto Hri5A;
        k8R73:
        $this->db->where("\x61\x2e\x61\147\x61\x6d\141\x20\41\x3d\40\42\60\42", NULL, FALSE);
        goto P70UP;
        NDI59:
        return $ret;
        goto L0M0R;
        eXEm1:
        $result = $this->db->get()->result();
        goto NjpQ6;
        Hri5A:
        foreach ($result as $row) {
            $ret[$row->agama] = $row->agama;
            rMGMQ:
        }
        goto uSjrR;
        L0M0R:
    }
    public function getJurusan()
    {
        goto UTBws;
        E0QDx:
        $this->db->order_by("\x6e\141\155\141\137\152\x75\162\x75\163\x61\x6e", "\101\x53\x43");
        goto qAlwW;
        GpgKr:
        return $query->result();
        goto RaPDR;
        HhbpB:
        $this->db->join("\x6d\x61\163\x74\x65\x72\137\x6a\x75\162\x75\x73\141\156", "\152\x75\162\x75\163\x61\156\x5f\151\144\x3d\151\x64\x5f\x6a\x75\162\x75\163\x61\156");
        goto E0QDx;
        jpAL7:
        $query = $this->db->get();
        goto GpgKr;
        UTBws:
        $this->db->select("\x69\x64\137\x6a\x75\x72\165\x73\x61\x6e\54\40\156\x61\x6d\x61\x5f\152\x75\x72\165\x73\141\x6e");
        goto SkGPR;
        qAlwW:
        $this->db->group_by("\151\x64\x5f\x6a\x75\162\x75\163\141\x6e");
        goto jpAL7;
        SkGPR:
        $this->db->from("\155\x61\163\164\145\162\x5f\153\145\x6c\x61\163");
        goto HhbpB;
        RaPDR:
    }
    public function getAllJurusan($id = null)
    {
        goto QOrAW;
        I7Ijd:
        y3dLL:
        goto Zs3N8;
        WeffZ:
        gzUM4:
        goto x31lF;
        osDGh:
        $this->db->where("\155\x61\x70\145\154\137\151\x64", $id);
        goto Jb0Il;
        jMt1V:
        foreach ($jurusan as $j) {
            $id_jurusan[] = $j->jurusan_id;
            BdEWx:
        }
        goto KsClQ;
        x31lF:
        $this->db->order_by("\x6e\x61\x6d\141\x5f\x6a\x75\x72\x75\163\141\x6e", "\x41\x53\x43");
        goto Bj1lQ;
        KsClQ:
        kB6US:
        goto drBaR;
        ozX7W:
        return $mapel;
        goto i43fc;
        t_zkS:
        $id_jurusan = null;
        goto r40VG;
        Ir1nw:
        $this->db->from("\152\x75\x72\x75\x73\141\x6e\x5f\155\141\x70\x65\x6c");
        goto osDGh;
        CpKTj:
        $this->db->from("\x6d\141\x73\164\x65\x72\137\x6a\x75\x72\x75\x73\x61\156");
        goto v83A3;
        QOrAW:
        if ($id === null) {
            goto gzUM4;
        }
        goto m1YBj;
        rEqDT:
        $this->db->select("\52");
        goto CpKTj;
        xVqWS:
        $id_jurusan = [];
        goto jMt1V;
        Jb0Il:
        $jurusan = $this->db->get()->result();
        goto xVqWS;
        m1YBj:
        $this->db->select("\x6a\x75\162\165\x73\x61\x6e\137\151\144");
        goto Ir1nw;
        QREsQ:
        $mapel = $this->db->get()->result();
        goto ozX7W;
        v83A3:
        $this->db->where_not_in("\151\x64\x5f\x6a\x75\x72\x75\163\141\156", $id_jurusan);
        goto QREsQ;
        r40VG:
        wb4bc:
        goto rEqDT;
        Bj1lQ:
        return $this->db->get("\152\165\x72\x75\x73\x61\x6e")->result();
        goto I7Ijd;
        i43fc:
        goto y3dLL;
        goto WeffZ;
        drBaR:
        if (!($id_jurusan === [])) {
            goto wb4bc;
        }
        goto t_zkS;
        Zs3N8:
    }
    public function getKelasByJurusan($id)
    {
        $query = $this->db->get_where("\x6d\x61\163\164\145\162\x5f\x6b\145\x6c\141\x73", array("\152\165\162\165\x73\x61\x6e\137\151\144" => $id));
        return $query->result();
    }
    public function getDataGuru($tp, $smt)
    {
        goto JRlx2;
        vfr0z:
        $this->datatables->join("\152\x61\142\141\x74\141\156\x5f\147\x75\x72\165\40\142", "\x61\56\x69\x64\x5f\x67\x75\162\165\75\x62\56\151\144\137\x67\x75\162\165\40\101\x4e\x44\40\142\56\151\144\137\164\160\x3d" . $tp . "\x20\x41\116\x44\x20\142\x2e\151\144\137\163\x6d\x74\x3d" . $smt . '', "\154\145\x66\164");
        goto iBXl0;
        tFN8A:
        $this->datatables->join("\x6d\141\163\164\145\x72\x5f\x73\155\x74\40\146", "\x62\56\151\144\137\163\155\164\75\x66\x2e\x69\144\137\163\x6d\164", "\154\x65\146\x74");
        goto VICah;
        JRlx2:
        $this->db->query("\x53\105\x54\40\123\x51\x4c\137\102\111\107\137\x53\105\x4c\x45\103\124\x53\75\61");
        goto EHKUh;
        EHKUh:
        $this->datatables->select("\141\56\151\144\137\x67\x75\x72\165\54\x20\141\56\156\x61\x6d\141\x5f\x67\165\162\165\54\x20\x61\x2e\156\151\x70\x2c\x20\141\x2e\153\157\144\x65\x5f\147\165\x72\x75\54\40\141\56\152\145\156\151\163\x5f\x6b\145\154\141\x6d\151\x6e\x2c\40\x61\56\146\157\x74\x6f\x2c\40\x62\56\x69\x64\137\152\x61\142\141\x74\141\156\54\x20\142\56\x69\x64\x5f\153\x65\x6c\x61\x73\x2c\x20\142\x2e\155\x61\x70\145\x6c\137\x6b\x65\154\x61\x73\x2c\40\x63\x2e\x69\x64\x5f\154\145\166\145\x6c\x2c\x20\x63\56\x6c\145\166\145\154\x2c\x20\x64\56\x6e\x61\155\x61\137\153\145\x6c\141\163\54\x20\x65\x2e\x74\141\150\165\x6e\x2c\x20\x66\x2e\x6e\141\x6d\141\x5f\163\155\164");
        goto dcdCa;
        xf0JN:
        $this->datatables->join("\x6d\141\163\x74\x65\162\x5f\164\x70\40\x65", "\x62\x2e\151\x64\137\164\x70\75\x65\x2e\x69\144\x5f\164\x70", "\x6c\145\x66\x74");
        goto tFN8A;
        jtvzK:
        $this->datatables->join("\155\141\163\x74\x65\162\x5f\x6b\145\x6c\x61\163\40\x64", "\142\56\x69\144\x5f\x6b\x65\x6c\x61\x73\75\144\56\151\144\x5f\x6b\x65\x6c\141\163\40\101\116\x44\x20\x64\x2e\x69\x64\137\164\x70\75" . $tp . "\x20\x41\x4e\x44\x20\x64\x2e\151\144\137\x73\x6d\164\x3d" . $smt . '', "\x6c\x65\146\164");
        goto xf0JN;
        VICah:
        return $this->datatables->generate();
        goto ca0Ls;
        dcdCa:
        $this->datatables->from("\155\x61\163\164\145\x72\x5f\x67\x75\x72\165\x20\x61");
        goto vfr0z;
        iBXl0:
        $this->datatables->join("\x6c\x65\166\145\x6c\x5f\147\x75\162\165\x20\143", "\142\56\151\x64\x5f\152\x61\x62\x61\164\141\156\x3d\x63\56\x69\144\x5f\154\x65\x76\145\154", "\154\x65\x66\x74");
        goto jtvzK;
        ca0Ls:
    }
    public function getAllDataGuru($tp, $smt)
    {
        goto d7Y5M;
        As4bZ:
        $this->db->join("\155\141\x73\x74\145\162\137\153\x65\x6c\x61\163\40\144", "\142\56\151\144\137\x6b\x65\x6c\x61\163\75\x64\56\151\x64\x5f\153\x65\154\141\163\x20\x41\x4e\104\x20\144\56\151\x64\137\164\160\75" . $tp . "\40\101\x4e\104\40\x64\x2e\x69\x64\137\163\x6d\x74\x3d" . $smt . '', "\154\145\146\x74");
        goto LU4Zz;
        Nzl5P:
        $this->db->order_by("\x63\x2e\x69\x64\x5f\154\145\x76\x65\x6c", "\x64\x65\163\143");
        goto KnHC0;
        HInx9:
        $this->db->select("\x61\x2e\x69\144\x5f\x67\x75\162\165\54\40\x61\56\156\141\x6d\141\x5f\x67\165\x72\165\54\40\141\x2e\x6e\151\160\54\40\141\56\153\x6f\144\145\x5f\147\x75\x72\x75\x2c\40\141\56\152\x65\156\x69\x73\137\153\x65\154\141\x6d\x69\x6e\54\x20\x61\56\x66\x6f\x74\x6f\54\40\x62\56\151\x64\137\x6a\x61\142\141\164\141\156\x2c\40\x62\56\x69\x64\x5f\x6b\x65\x6c\141\x73\54\40\142\56\x6d\x61\x70\x65\x6c\x5f\153\x65\154\x61\163\54\40\x62\x2e\145\x6b\x73\164\x72\141\137\153\x65\x6c\141\x73\x2c\x20\143\x2e\151\144\x5f\154\x65\x76\145\154\x2c\40\143\56\154\x65\x76\145\x6c\54\x20\x64\x2e\x6e\141\x6d\141\137\153\145\154\x61\163\x2c\x20\x65\x2e\x74\141\x68\x75\x6e\x2c\x20\146\56\156\141\x6d\x61\137\x73\155\164\54\40\x28\x53\x45\114\x45\x43\x54\x20\103\117\x55\116\124\x28\x69\x64\x29\40\106\x52\x4f\x4d\x20\x75\x73\x65\x72\x73\40\x65\x20\127\x48\x45\x52\x45\x20\x65\56\165\x73\x65\x72\x6e\x61\155\145\x20\75\40\x61\56\165\163\x65\x72\x6e\x61\x6d\x65\51\40\101\x53\x20\163\x74\x61\x74\165\x73");
        goto XwUg3;
        KnHC0:
        $this->db->order_by("\x61\56\151\x64\x5f\x67\165\162\x75", "\141\163\143");
        goto Pzhje;
        XwUg3:
        $this->db->from("\x6d\x61\x73\x74\145\x72\x5f\147\165\x72\165\x20\141");
        goto J7r_b;
        nDY8n:
        $this->db->join("\155\141\163\164\145\x72\137\163\155\164\40\x66", "\142\x2e\x69\x64\x5f\x73\x6d\x74\x3d\146\56\151\144\137\163\155\x74", "\x6c\x65\146\x74");
        goto Nzl5P;
        d7Y5M:
        $this->db->query("\x53\105\x54\40\x53\x51\x4c\137\x42\x49\107\137\123\x45\114\105\103\x54\123\75\61");
        goto HInx9;
        LU4Zz:
        $this->db->join("\155\141\x73\164\x65\162\x5f\x74\160\40\145", "\x62\x2e\x69\x64\137\x74\x70\x3d\145\56\151\x64\137\x74\x70", "\154\145\x66\164");
        goto nDY8n;
        Pzhje:
        return $this->db->get()->result();
        goto momZX;
        f680w:
        $this->db->join("\154\145\x76\x65\x6c\137\147\165\x72\x75\40\143", "\142\x2e\151\x64\137\x6a\x61\x62\141\x74\x61\156\x3d\143\56\151\x64\x5f\x6c\145\x76\x65\154", "\154\145\x66\x74");
        goto As4bZ;
        J7r_b:
        $this->db->join("\152\x61\x62\x61\x74\141\156\x5f\147\x75\162\x75\40\142", "\141\x2e\x69\x64\x5f\x67\x75\162\165\x3d\142\56\x69\144\x5f\147\x75\162\x75\x20\x41\x4e\x44\40\142\56\x69\x64\x5f\164\160\75" . $tp . "\40\x41\x4e\x44\40\x62\56\151\144\137\x73\x6d\164\75" . $smt . '', "\154\145\x66\164");
        goto f680w;
        momZX:
    }
    public function getGuruById($id, $id_tp = null, $id_smt = null)
    {
        goto q_x48;
        yLsW8:
        $this->db->join("\155\x61\163\164\145\162\137\153\145\154\x61\163\x20\144", "\141\x2e\151\144\x5f\x67\165\x72\165\x3d\144\x2e\147\165\x72\165\x5f\x69\x64\x20\101\x4e\104\x20\x64\x2e\151\x64\x5f\x74\x70\x3d" . $id_tp . "\x20\x41\116\x44\40\144\56\151\x64\x5f\x73\x6d\164\75" . $id_smt, "\x6c\x65\x66\164");
        goto iAjXS;
        iAjXS:
        Apbcr:
        goto uyIPw;
        uyIPw:
        $this->db->where("\x61\56\151\144\137\x67\165\x72\x75", $id);
        goto Li1t1;
        uiOQD:
        if (!($id_tp != null && $id_smt != null)) {
            goto Apbcr;
        }
        goto yLsW8;
        FT3Pi:
        $this->db->join("\x6c\x65\x76\145\154\x5f\147\x75\162\165\x20\x63", "\142\56\x69\x64\137\x6a\141\x62\x61\164\x61\156\x3d\x63\56\151\144\x5f\x6c\145\166\145\x6c", "\x6c\x65\146\x74");
        goto uiOQD;
        lpqhm:
        $this->db->join("\152\x61\x62\x61\164\141\x6e\x5f\x67\165\162\x75\40\142", "\141\56\x69\144\137\x67\x75\x72\x75\75\x62\56\151\144\x5f\147\165\162\165", "\x6c\145\146\164");
        goto FT3Pi;
        q_x48:
        $this->db->query("\123\105\124\x20\x53\x51\114\x5f\x42\111\107\x5f\x53\105\114\x45\x43\x54\x53\75\61");
        goto TtI4f;
        TtI4f:
        $this->db->select("\x2a");
        goto j10xN;
        j10xN:
        $this->db->from("\x6d\x61\x73\164\145\162\137\x67\165\x72\165\40\x61");
        goto lpqhm;
        Li1t1:
        return $this->db->get()->row();
        goto dnItF;
        dnItF:
    }
    public function getGuruByArrId($arr_id)
    {
        goto D8I3v;
        aSegh:
        return $this->db->get()->result();
        goto rU5nE;
        lhfqr:
        if (!(count($arr_id) > 0)) {
            goto i_ItN;
        }
        goto gYaxD;
        o389I:
        i_ItN:
        goto aSegh;
        gYaxD:
        $this->db->where_in("\151\x64\x5f\147\165\x72\165", $arr_id);
        goto o389I;
        h5l3G:
        $this->db->from("\x6d\141\163\x74\x65\162\x5f\147\x75\x72\x75");
        goto lhfqr;
        D8I3v:
        $this->db->select("\x6e\x61\x6d\x61\x5f\x67\x75\x72\165");
        goto h5l3G;
        rU5nE:
    }
    public function getUserIdGuruByUsername($username)
    {
        goto rkY1Q;
        cBv3d:
        return $this->db->get()->row();
        goto T7gvA;
        bl6nG:
        $this->db->join("\x6a\141\x62\x61\164\x61\156\x5f\147\x75\x72\x75\40\142", "\x61\x2e\x69\x64\x5f\x67\x75\x72\x75\75\142\56\x69\144\137\147\x75\x72\165", "\x6c\x65\146\x74");
        goto iCxZg;
        jeRVD:
        $this->db->where("\x61\56\165\163\x65\162\156\141\x6d\x65", $username);
        goto cBv3d;
        rkY1Q:
        $this->db->query("\123\x45\124\x20\123\121\114\x5f\x42\111\x47\137\123\x45\114\105\x43\x54\x53\75\61");
        goto ej2d6;
        iCxZg:
        $this->db->join("\154\x65\x76\145\154\137\x67\x75\x72\165\40\x63", "\x62\56\151\x64\137\152\x61\x62\x61\164\141\x6e\75\x63\x2e\x69\144\x5f\x6c\x65\166\x65\x6c", "\154\145\146\x74");
        goto jeRVD;
        ej2d6:
        $this->db->select("\52");
        goto VYAp6;
        VYAp6:
        $this->db->from("\155\x61\x73\x74\x65\162\137\x67\x75\162\165\40\x61");
        goto bl6nG;
        T7gvA:
    }
    public function getDetailJabatanGuru($id_guru)
    {
        goto kE1CF;
        smyOY:
        $this->db->join("\154\x65\166\145\x6c\137\x67\165\162\x75\40\x63", "\x62\x2e\x69\144\x5f\152\x61\142\141\x74\141\156\x3d\x63\x2e\151\144\137\154\x65\166\145\154", "\x6c\x65\x66\164");
        goto qlEON;
        Cvoyz:
        $this->db->from("\155\x61\163\164\x65\162\x5f\147\x75\162\165\40\x61");
        goto iy4L5;
        I9jwN:
        $this->db->select("\x61\x2e\x69\x64\137\x67\165\162\x75\54\40\141\56\156\x61\155\141\137\147\x75\x72\165\54\x20\142\x2e\151\x64\x5f\164\x70\x2c\40\x62\x2e\x69\x64\x5f\x73\x6d\x74\x2c\40\142\x2e\155\x61\x70\145\154\137\x6b\145\x6c\141\163\54\x20\142\x2e\145\x6b\x73\164\162\x61\137\x6b\145\154\x61\163\x2c\40\x63\56\x69\x64\x5f\154\145\x76\145\x6c\54\40\x63\x2e\154\145\166\145\x6c\x2c\40\144\56\x69\144\x5f\153\145\x6c\141\x73\54\x20\x64\56\x6e\141\x6d\x61\137\x6b\x65\x6c\x61\163");
        goto Cvoyz;
        iy4L5:
        $this->db->join("\152\x61\x62\x61\x74\141\x6e\137\147\x75\x72\x75\40\x62", "\141\x2e\x69\x64\137\x67\165\x72\x75\75\142\56\151\x64\x5f\147\165\162\x75", "\154\145\x66\x74");
        goto smyOY;
        KgE0z:
        GpQt0:
        goto xlqJw;
        IZSw_:
        $result = $this->db->get()->result();
        goto haMtb;
        LnaAo:
        foreach ($result as $row) {
            $ret[$row->id_tp][$row->id_smt] = $row;
            FV0JN:
        }
        goto KgE0z;
        kE1CF:
        $this->db->query("\123\x45\124\x20\123\x51\x4c\137\x42\111\107\x5f\123\105\x4c\x45\x43\x54\123\x3d\61");
        goto I9jwN;
        qlEON:
        $this->db->join("\155\141\x73\164\145\x72\137\x6b\145\x6c\141\x73\40\144", "\142\56\151\144\x5f\x6b\x65\x6c\x61\163\x3d\144\x2e\x69\144\137\x6b\145\x6c\x61\163", "\x6c\145\x66\164");
        goto TRsmO;
        xlqJw:
        return $ret;
        goto cUI6G;
        TRsmO:
        $this->db->where("\x61\x2e\x69\144\x5f\147\165\162\165", $id_guru);
        goto IZSw_;
        haMtb:
        $ret = [];
        goto LnaAo;
        cUI6G:
    }
    public function getJabatanGuru($id_guru, $tp, $smt)
    {
        goto K1URW;
        FWOBW:
        $this->db->join("\155\x61\163\164\145\x72\137\x6b\x65\154\x61\x73\40\x64", "\x62\56\x69\144\x5f\x6b\145\154\x61\x73\x3d\x64\56\x69\144\137\153\145\x6c\x61\x73\x20\x41\x4e\x44\x20\144\x2e\x69\144\x5f\x74\x70\x3d" . $tp . "\x20\101\116\x44\40\144\x2e\151\x64\x5f\163\x6d\x74\x3d" . $smt . '', "\x6c\x65\146\164");
        goto KaSRt;
        Lvseg:
        $this->db->select("\x61\56\151\144\x5f\x67\x75\162\165\54\x20\141\x2e\156\141\155\141\x5f\x67\x75\x72\165\x2c\x20\142\56\155\x61\x70\145\x6c\137\153\x65\154\141\163\x2c\x20\x62\x2e\145\153\163\164\x72\141\x5f\153\145\154\141\x73\x2c\40\x63\56\x69\144\x5f\154\x65\x76\145\x6c\x2c\40\x63\56\154\x65\x76\145\x6c\54\40\144\56\x69\144\137\x6b\145\154\141\x73\54\40\144\56\x6e\x61\x6d\x61\x5f\153\x65\x6c\141\x73");
        goto dnLy6;
        dnLy6:
        $this->db->from("\x6d\x61\x73\164\x65\162\137\147\165\162\x75\x20\141");
        goto EmeAs;
        hBkD9:
        return $query;
        goto xqMS0;
        I817U:
        $query = $this->db->get()->row();
        goto hBkD9;
        KaSRt:
        $this->db->where("\141\56\151\x64\137\147\165\162\165", $id_guru);
        goto I817U;
        K1URW:
        $this->db->query("\x53\105\x54\40\x53\121\114\137\x42\111\107\137\123\x45\114\x45\x43\124\123\x3d\x31");
        goto Lvseg;
        EmeAs:
        $this->db->join("\x6a\x61\142\x61\164\141\x6e\x5f\147\165\x72\x75\x20\x62", "\141\56\151\x64\137\147\x75\162\165\x3d\x62\56\151\x64\137\x67\x75\x72\x75\40\x41\116\x44\x20\142\x2e\x69\x64\137\x74\160\x3d" . $tp . "\x20\x41\116\x44\x20\142\56\151\144\137\x73\x6d\x74\75" . $smt . '', "\x6c\145\146\x74");
        goto syrES;
        syrES:
        $this->db->join("\154\x65\166\x65\154\137\x67\165\162\165\x20\x63", "\142\56\x69\x64\137\x6a\141\x62\141\164\x61\156\x3d\x63\56\151\144\137\x6c\x65\x76\x65\154", "\x6c\x65\146\164");
        goto FWOBW;
        xqMS0:
    }
    public function getGuruMapel($tp, $smt)
    {
        goto ywFAE;
        tSsnL:
        $query = $this->db->get()->result();
        goto skYP0;
        yt5Tm:
        $this->db->join("\155\x61\x73\x74\x65\x72\x5f\x67\165\162\165\x20\142", "\x61\56\151\144\137\x67\x75\162\165\75\142\x2e\x69\x64\137\x67\165\x72\x75");
        goto r653y;
        IiKCP:
        $this->db->where("\141\56\151\144\137\163\x6d\164", $smt);
        goto tSsnL;
        qFwWS:
        $this->db->from("\152\141\x62\x61\164\141\156\137\x67\x75\162\165\40\x61");
        goto yt5Tm;
        ywFAE:
        $this->db->select("\141\x2e\x6d\141\160\x65\x6c\137\153\145\154\x61\163\54\40\141\x2e\x65\x6b\163\x74\x72\x61\137\153\145\x6c\141\163\54\x20\x61\x2e\x69\x64\137\152\x61\142\x61\x74\x61\156\54\x20\141\56\151\144\137\153\145\x6c\x61\163\x2c\40\x62\x2e\x69\x64\137\147\x75\x72\x75\54\40\142\56\156\141\155\x61\137\x67\x75\162\x75");
        goto qFwWS;
        r653y:
        $this->db->where("\x61\x2e\x69\144\x5f\x74\160", $tp);
        goto IiKCP;
        skYP0:
        return $query;
        goto AMhq_;
        AMhq_:
    }
    public function getKodeKelompokMapel()
    {
        goto ZT02f;
        muJWM:
        foreach ($result as $row) {
            $ret[$row->kode_kel_mapel] = $row;
            oEcnl:
        }
        goto syUk_;
        syUk_:
        PM309:
        goto w0cWO;
        ZT02f:
        $this->db->select("\52");
        goto IANyS;
        W8yNo:
        $this->db->order_by("\x6b\x6f\144\145\x5f\x6b\145\x6c\x5f\x6d\141\x70\145\x6c");
        goto ZC5cv;
        F3PCb:
        $ret = [];
        goto muJWM;
        ZC5cv:
        $result = $this->db->get()->result();
        goto F3PCb;
        w0cWO:
        return $ret;
        goto YWK7s;
        IANyS:
        $this->db->from("\155\x61\x73\x74\x65\162\x5f\153\145\x6c\x6f\x6d\x70\x6f\153\x5f\x6d\141\x70\145\x6c");
        goto W8yNo;
        YWK7s:
    }
    public function getDataKelompokMapel()
    {
        goto U3VmJ;
        RNHns:
        $result = $this->db->get()->result();
        goto XAmQj;
        A7Rtv:
        jiq7Y:
        goto oYnfK;
        U3VmJ:
        $this->db->select("\52");
        goto dNGxO;
        dNGxO:
        $this->db->from("\155\x61\163\x74\x65\x72\x5f\x6b\x65\154\x6f\155\x70\157\x6b\137\x6d\141\160\x65\154");
        goto p4iuw;
        p4iuw:
        $this->db->where("\x69\x64\137\160\x61\x72\145\156\164", "\x30");
        goto anZSs;
        TZTCM:
        foreach ($result as $row) {
            $ret[$row->id_kel_mapel] = $row;
            jc3ow:
        }
        goto A7Rtv;
        anZSs:
        $this->db->order_by("\x6b\157\x64\145\137\153\x65\x6c\x5f\155\x61\x70\145\x6c");
        goto RNHns;
        XAmQj:
        $ret = [];
        goto TZTCM;
        oYnfK:
        return $ret;
        goto gSj5A;
        gSj5A:
    }
    public function getKategoriKelompokMapel()
    {
        goto ojg9C;
        EXj_C:
        return $result;
        goto Rn3Pg;
        tGcd8:
        $this->db->where("\153\141\164\145\x67\157\x72\x69", "\x57\101\112\111\102")->or_where("\x6b\x61\x74\x65\x67\157\162\151", "\x50\x41\111\40\x28\x4b\x65\x6d\145\156\x61\x67\x29");
        goto N6ydE;
        N6ydE:
        $this->db->from("\155\141\163\164\145\162\x5f\x6b\145\x6c\x6f\155\x70\x6f\153\x5f\x6d\141\160\x65\x6c");
        goto X0flW;
        ojg9C:
        $this->db->select("\x6b\157\x64\145\137\x6b\145\154\x5f\155\x61\x70\x65\154\54\x20\153\141\x74\145\x67\157\162\151");
        goto tGcd8;
        X0flW:
        $result = $this->db->get()->result();
        goto EXj_C;
        Rn3Pg:
    }
    public function getDataSubKelompokMapel()
    {
        goto m76ua;
        f17Q2:
        $this->db->order_by("\153\157\144\145\x5f\x6b\x65\154\x5f\x6d\141\x70\x65\154");
        goto MD2C2;
        f3Q9Z:
        $ret = [];
        goto f_aVZ;
        m76ua:
        $this->db->select("\52");
        goto V_Q_3;
        MD2C2:
        $result = $this->db->get()->result();
        goto f3Q9Z;
        V_Q_3:
        $this->db->from("\x6d\x61\163\x74\x65\x72\x5f\x6b\x65\154\x6f\155\160\x6f\153\137\x6d\141\160\145\154");
        goto Ek1la;
        Ek1la:
        $this->db->where("\151\x64\x5f\160\141\x72\145\156\x74\40\74\x3e\40\60");
        goto f17Q2;
        f_aVZ:
        foreach ($result as $row) {
            $ret[$row->id_kel_mapel] = $row;
            xAs0M:
        }
        goto Dpr87;
        Gm8vt:
        return $ret;
        goto SVPrH;
        Dpr87:
        F93UV:
        goto Gm8vt;
        SVPrH:
    }
    public function getDataMapel()
    {
        goto QrzVW;
        bx3JY:
        return $this->datatables->generate();
        goto JA0Pz;
        QrzVW:
        $this->datatables->select("\x69\x64\137\155\141\160\x65\154\x2c\40\x6e\x61\x6d\x61\x5f\x6d\141\160\145\x6c\54\x20\153\157\x64\145");
        goto bjM3d;
        bjM3d:
        $this->datatables->from("\155\141\x73\164\145\162\137\x6d\141\x70\145\x6c");
        goto bx3JY;
        JA0Pz:
    }
    public function getAllMapel($arrKelompok = null, $arrMapel = null)
    {
        goto vQVXV;
        iUWX2:
        $this->db->or_where_in("\151\144\137\155\141\x70\145\x6c", explode("\x2c", $arrMapel));
        goto B1BOQ;
        vQVXV:
        if (!($arrMapel != null)) {
            goto ACr6u;
        }
        goto u6qmL;
        MIIxg:
        return $this->db->get("\155\141\163\164\x65\x72\x5f\x6d\141\x70\x65\154")->result();
        goto Fp6Wg;
        hvl6x:
        if (!($arrMapel != null)) {
            goto Ryctd;
        }
        goto iUWX2;
        mgKRU:
        $this->db->order_by("\165\162\x75\164\x61\x6e\x5f\x74\141\155\x70\151\154");
        goto MIIxg;
        Tn6iN:
        $this->db->where("\x73\x74\x61\x74\x75\163", "\x31");
        goto mgKRU;
        B1BOQ:
        Ryctd:
        goto Tn6iN;
        MY2il:
        ACr6u:
        goto hvl6x;
        u6qmL:
        $this->db->where_in("\x6b\145\x6c\x6f\155\160\157\x6b", $arrKelompok);
        goto MY2il;
        Fp6Wg:
    }
    public function getAllStatusMapel($arrKelompok = null, $arrMapel = null)
    {
        goto gtlbB;
        kz7mF:
        return $this->db->get("\155\x61\x73\x74\145\x72\137\x6d\141\x70\x65\154")->result();
        goto FD0pQ;
        AjMoV:
        rNBC3:
        goto ls7r0;
        Mk9zi:
        kRdwZ:
        goto ff2D2;
        ls7r0:
        $this->db->order_by("\x75\x72\165\x74\x61\x6e\137\x74\x61\155\160\x69\x6c");
        goto kz7mF;
        rpDxQ:
        $this->db->or_where_in("\151\x64\137\155\141\160\145\154", explode("\x2c", $arrMapel));
        goto AjMoV;
        ff2D2:
        if (!($arrMapel != null)) {
            goto rNBC3;
        }
        goto rpDxQ;
        gtlbB:
        if (!($arrMapel != null)) {
            goto kRdwZ;
        }
        goto KDFdR;
        KDFdR:
        $this->db->where_in("\153\145\154\x6f\155\x70\x6f\x6b", $arrKelompok);
        goto Mk9zi;
        FD0pQ:
    }
    public function getAllMapelByKelompok($jenjang)
    {
        goto f0Yfw;
        VOHaB:
        foreach ($result as $row) {
            $ret[$row->kelompok][] = $row;
            Rwui8:
        }
        goto i3lif;
        j9FP2:
        $this->db->order_by("\165\162\x75\164\x61\x6e\137\x74\141\155\x70\x69\154");
        goto madIt;
        OffHj:
        $ret = [];
        goto VOHaB;
        UG1ZC:
        return $ret;
        goto k47rW;
        nH6HN:
        $this->db->order_by("\x75\x72\x75\164\141\156");
        goto j9FP2;
        i3lif:
        dywiU:
        goto UG1ZC;
        f0Yfw:
        $this->db->where("\163\164\x61\164\165\163", "\61");
        goto nH6HN;
        madIt:
        $result = $this->db->get("\155\141\x73\164\145\x72\x5f\x6d\141\x70\145\154")->result();
        goto OffHj;
        k47rW:
    }
    public function getAllMapelNonAktif($jenjang)
    {
        $this->db->where("\163\x74\x61\x74\165\x73", "\x30");
        return $this->db->get("\x6d\x61\163\x74\x65\x72\x5f\155\141\x70\145\154")->result();
    }
    public function getMapelById($id, $single = false)
    {
        goto YjKQU;
        utE6S:
        qxDru:
        goto ATmST;
        PBpkR:
        $this->db->where_in("\x69\x64\137\x6d\141\x70\145\154", $id);
        goto vPr3v;
        FN1HC:
        goto qxDru;
        goto NF9Du;
        YjKQU:
        if ($single === false) {
            goto KhADa;
        }
        goto MTi2t;
        NF9Du:
        KhADa:
        goto PBpkR;
        MTi2t:
        $query = $this->db->get_where("\x6d\x61\x73\164\145\162\x5f\x6d\141\x70\x65\154", array("\x69\x64\x5f\155\x61\160\145\x6c" => $id))->row();
        goto FN1HC;
        ATmST:
        return $query;
        goto ZwO03;
        Ecq1Y:
        $query = $this->db->get("\155\x61\163\164\145\x72\137\x6d\141\x70\x65\x6c")->result();
        goto utE6S;
        vPr3v:
        $this->db->order_by("\156\141\155\141\137\x6d\x61\160\145\x6c");
        goto Ecq1Y;
        ZwO03:
    }
    function updateMapel()
    {
        goto VWCvC;
        EzxgD:
        $this->db->set("\163\x74\x61\164\165\163", $status);
        goto bU1Ks;
        zJLid:
        if (!($kelompok != null)) {
            goto rGHwt;
        }
        goto k4FDq;
        Dh671:
        $status = $this->input->post("\163\x74\x61\164\x75\x73", true);
        goto oBSjy;
        NcdG8:
        return $this->db->update("\x6d\x61\x73\164\145\162\137\155\141\x70\145\154");
        goto T21sv;
        aGJwI:
        $kelompok = $this->input->post("\x6b\145\x6c\157\x6d\160\157\x6b", true);
        goto Dh671;
        VWCvC:
        $id = $this->input->post("\x69\144\137\155\141\160\x65\154");
        goto SV4UN;
        bwjOe:
        $this->db->where("\x69\144\137\x6d\x61\160\145\x6c", $id);
        goto NcdG8;
        CRclH:
        rGHwt:
        goto EzxgD;
        SV4UN:
        $name = $this->input->post("\156\141\155\141\x5f\x6d\x61\160\x65\154", true);
        goto Jc_9G;
        xfMpt:
        $this->db->set("\153\157\144\145", $kode);
        goto zJLid;
        bU1Ks:
        $this->db->set("\165\x72\165\164\141\156\x5f\164\x61\x6d\160\x69\x6c", $urut);
        goto bwjOe;
        HEfH0:
        $this->db->set("\x6e\141\155\141\137\x6d\141\160\145\x6c", $name);
        goto xfMpt;
        k4FDq:
        $this->db->set("\153\x65\154\157\x6d\160\157\153", $kelompok);
        goto CRclH;
        Jc_9G:
        $kode = $this->input->post("\x6b\x6f\144\x65\137\x6d\x61\160\145\154", true);
        goto aGJwI;
        oBSjy:
        $urut = $this->input->post("\x75\162\x75\x74\x61\x6e\137\164\141\155\x70\151\x6c", true);
        goto HEfH0;
        T21sv:
    }
    public function getAllEkstra()
    {
        return $this->db->get("\155\x61\163\164\145\x72\137\x65\x6b\163\x74\162\141")->result();
    }
    public function getEkstraById($id, $single = false)
    {
        goto sJyJ5;
        vH4iM:
        IO7Wu:
        goto b2d0Y;
        sJyJ5:
        if ($single === false) {
            goto eEUdH;
        }
        goto PxV7t;
        sdqLT:
        eEUdH:
        goto IqKhi;
        KVpWm:
        $query = $this->db->get("\x6d\141\x73\164\145\x72\x5f\x65\153\163\164\x72\x61")->result();
        goto vH4iM;
        b2d0Y:
        return $query;
        goto jWZT_;
        PxV7t:
        $query = $this->db->get_where("\155\141\163\164\145\x72\137\x65\x6b\x73\x74\162\x61", array("\151\144\x5f\145\153\x73\164\x72\141" => $id))->row();
        goto SKzLw;
        nTfFC:
        $this->db->order_by("\x6e\x61\x6d\x61\x5f\145\x6b\x73\x74\162\141");
        goto KVpWm;
        IqKhi:
        $this->db->where_in("\x69\x64\x5f\x65\153\163\164\x72\141", $id);
        goto nTfFC;
        SKzLw:
        goto IO7Wu;
        goto sdqLT;
        jWZT_:
    }
    function updateEkstra()
    {
        goto t4CTm;
        t4CTm:
        $id = $this->input->post("\x69\144\x5f\145\153\163\164\162\141");
        goto NU3re;
        kVvGI:
        $kode = $this->input->post("\153\157\144\x65\x5f\x65\153\x73\x74\x72\x61", true);
        goto xrrKC;
        yO61B:
        $this->db->set("\153\x6f\x64\x65\137\145\153\163\164\x72\141", $kode);
        goto Liisl;
        NU3re:
        $name = $this->input->post("\x6e\x61\155\141\x5f\x65\153\x73\164\162\x61", true);
        goto kVvGI;
        G5f44:
        return $this->db->update("\x6d\141\163\x74\x65\162\x5f\x65\153\x73\x74\x72\x61");
        goto EgQ3m;
        Liisl:
        $this->db->where("\151\144\137\145\x6b\163\x74\x72\141", $id);
        goto G5f44;
        xrrKC:
        $this->db->set("\156\141\x6d\x61\x5f\145\153\x73\x74\162\141", $name);
        goto yO61B;
        EgQ3m:
    }
    public function getKelasGuru()
    {
        goto Q3d8u;
        UFqW3:
        return $this->datatables->generate();
        goto fa9DI;
        ix0_p:
        $this->datatables->group_by("\x67\x75\x72\x75\x2e\x6e\141\x6d\x61\x5f\x67\x75\162\x75");
        goto UFqW3;
        N0UZb:
        $this->datatables->join("\155\141\x73\164\145\162\137\153\145\154\x61\163", "\153\145\x6c\x61\x73\137\x69\x64\x3d\151\144\137\153\145\154\141\x73");
        goto HurOm;
        DmucT:
        $this->datatables->from("\153\145\x6c\x61\x73\x5f\147\x75\x72\165");
        goto N0UZb;
        Y_GEB:
        $this->datatables->select("\x6b\145\154\x61\163\137\x67\165\x72\165\56\151\144\54\40\x67\165\162\x75\x2e\x69\x64\x5f\x67\165\162\165\54\x20\x67\x75\x72\165\x2e\x6e\x69\x70\x2c\40\147\165\162\x75\56\x6e\x61\x6d\141\137\147\165\162\x75\x2c\x20\107\122\x4f\125\120\x5f\103\117\116\x43\101\x54\50\x6d\141\163\x74\x65\x72\137\x6b\x65\x6c\141\x73\56\156\141\155\x61\137\153\x65\x6c\141\x73\51\x20\x61\x73\40\153\145\154\141\x73");
        goto DmucT;
        Q3d8u:
        $this->db->query("\123\105\x54\x20\123\121\x4c\x5f\102\x49\x47\x5f\x53\105\x4c\x45\103\124\123\x3d\61");
        goto Y_GEB;
        HurOm:
        $this->datatables->join("\x6d\x61\x73\x74\x65\162\x5f\147\165\x72\x75", "\147\x75\162\165\137\151\x64\x3d\x69\144\x5f\147\x75\x72\x75");
        goto ix0_p;
        fa9DI:
    }
    public function getKelasByGuru($id)
    {
        goto WVb8T;
        MeG6v:
        $this->db->join("\155\x61\x73\x74\145\162\x5f\x6b\x65\154\141\163", "\x6b\x65\154\141\163\x5f\x67\165\162\x75\x2e\153\145\x6c\141\163\x5f\151\144\x3d\153\x65\x6c\x61\x73\56\x69\144\137\x6b\x65\x6c\141\163");
        goto lv_ZI;
        q28QF:
        $query = $this->db->get()->result();
        goto McE_K;
        McE_K:
        return $query;
        goto AF4z6;
        lv_ZI:
        $this->db->where("\147\165\162\165\x5f\151\x64", $id);
        goto q28QF;
        WVb8T:
        $this->db->select("\153\145\154\x61\x73\56\x69\144\137\153\x65\154\x61\163");
        goto yYqqx;
        yYqqx:
        $this->db->from("\x6b\145\x6c\141\163\137\147\165\x72\x75");
        goto MeG6v;
        AF4z6:
    }
    public function getAllJabatanGuru($id)
    {
        goto BhCpK;
        FGo2C:
        return $ret;
        goto sWVQi;
        WBoyH:
        foreach ($result as $key => $row) {
            $ret[$row->id_tp][$row->id_smt] = $row->id_kelas;
            MgEWI:
        }
        goto nVxlC;
        uTnF4:
        H77bJ:
        goto FGo2C;
        khA0A:
        if (!$result) {
            goto H77bJ;
        }
        goto WBoyH;
        BhCpK:
        $result = $this->db->get_where("\152\141\142\141\164\141\156\137\x67\165\162\x75", "\x69\144\x5f\147\165\162\x75\x3d" . $id)->result();
        goto khA0A;
        nVxlC:
        VWrYJ:
        goto uTnF4;
        sWVQi:
    }
    public function getJurusanMapel()
    {
        goto VDwaF;
        TsYzw:
        $this->datatables->group_by("\x6d\141\163\164\x65\162\x5f\x6d\x61\x70\145\x6c\x2e\x6e\x61\x6d\x61\x5f\155\x61\x70\x65\154");
        goto i61Qy;
        VDwaF:
        $this->db->query("\123\x45\124\40\x53\121\x4c\137\102\x49\107\137\x53\105\114\x45\x43\124\x53\75\x31");
        goto I7JdB;
        i61Qy:
        return $this->datatables->generate();
        goto DZFqF;
        tL0F6:
        $this->datatables->join("\155\141\163\x74\145\162\137\x6a\x75\162\165\x73\x61\x6e", "\x6a\165\162\165\x73\141\156\137\x69\144\x3d\151\x64\137\x6a\x75\x72\x75\163\141\156");
        goto TsYzw;
        PR10V:
        $this->datatables->join("\x6d\x61\163\x74\x65\x72\x5f\155\x61\160\145\x6c", "\155\141\160\145\154\137\151\x64\75\151\144\137\x6d\x61\160\145\154");
        goto tL0F6;
        I7JdB:
        $this->datatables->select("\152\x75\162\x75\163\141\x6e\137\x6d\141\x70\145\x6c\56\151\x64\x2c\40\x6d\141\160\145\x6c\56\x69\144\137\x6d\141\160\x65\154\54\40\155\141\x70\x65\154\56\x6e\x61\155\141\x5f\x6d\141\160\145\x6c\54\40\152\165\x72\x75\163\141\x6e\56\x69\x64\137\152\x75\162\x75\163\141\x6e\54\40\x47\122\x4f\125\120\x5f\x43\117\x4e\x43\x41\x54\x28\152\165\162\x75\163\x61\156\56\156\x61\155\x61\137\x6a\165\162\165\x73\141\156\51\40\141\x73\40\156\141\155\141\x5f\152\165\162\165\x73\x61\156");
        goto dHaR3;
        dHaR3:
        $this->datatables->from("\152\165\x72\x75\163\141\156\x5f\x6d\x61\160\x65\154");
        goto PR10V;
        DZFqF:
    }
    public function getMapel($id = null)
    {
        goto mNOn2;
        Y74ym:
        $this->db->from("\155\141\x73\164\145\162\137\x6d\141\160\x65\154");
        goto yYxA7;
        hs1rM:
        G51ml:
        goto HRREz;
        lz8wg:
        foreach ($mapel as $d) {
            $id_mapel[] = $d->mapel_id;
            B6O4p:
        }
        goto sR9lO;
        waXPa:
        $this->db->from("\152\165\162\165\163\x61\x6e\x5f\x6d\141\x70\x65\x6c");
        goto KY3y7;
        yYxA7:
        $this->db->where_not_in("\x69\x64\x5f\x6d\x61\x70\x65\x6c", $id_mapel);
        goto yl3je;
        QuWPM:
        if (!($id_mapel === [])) {
            goto G51ml;
        }
        goto kMcH3;
        qVReU:
        $id_mapel = [];
        goto lz8wg;
        yl3je:
        return $this->db->get()->result();
        goto IbgQD;
        hDLnv:
        $this->db->where_not_in("\x6d\x61\x70\x65\154\x5f\151\x64", [$id]);
        goto s1Up3;
        s1Up3:
        zMdwD:
        goto FzzAj;
        kMcH3:
        $id_mapel = null;
        goto hs1rM;
        HRREz:
        $this->db->select("\151\144\137\155\x61\160\145\x6c\x2c\x20\156\141\155\141\x5f\x6d\141\160\x65\x6c");
        goto Y74ym;
        FzzAj:
        $mapel = $this->db->get()->result();
        goto qVReU;
        mNOn2:
        $this->db->select("\155\141\x70\145\154\x5f\x69\x64");
        goto waXPa;
        KY3y7:
        if (!($id !== null)) {
            goto zMdwD;
        }
        goto hDLnv;
        sR9lO:
        zljfm:
        goto QuWPM;
        IbgQD:
    }
    public function getJurusanByIdMapel($id)
    {
        goto RAwY2;
        xXiTA:
        $this->db->from("\x6a\x75\162\165\163\x61\x6e\137\x6d\141\x70\x65\154");
        goto QfjsR;
        KmY1X:
        return $query;
        goto CbsfZ;
        BTOf9:
        $this->db->where("\155\141\160\145\x6c\x5f\151\144", $id);
        goto TyTsu;
        QfjsR:
        $this->db->join("\155\x61\163\x74\x65\x72\x5f\152\165\162\165\x73\x61\156", "\152\165\x72\x75\163\x61\156\137\155\x61\160\145\154\56\x6a\x75\162\x75\163\141\156\137\x69\144\75\152\x75\x72\165\163\x61\x6e\x2e\151\x64\137\152\165\162\x75\163\141\x6e");
        goto BTOf9;
        TyTsu:
        $query = $this->db->get()->result();
        goto KmY1X;
        RAwY2:
        $this->db->select("\x6a\165\162\165\163\x61\156\56\151\144\137\x6a\165\162\165\163\x61\x6e");
        goto xXiTA;
        CbsfZ:
    }
    public function getTahunActive()
    {
        goto j7rR0;
        GYqFP:
        return $result;
        goto HMFCx;
        j7rR0:
        $this->db->select("\x69\144\137\164\x70\54\40\x74\141\150\x75\x6e");
        goto LNXJE;
        LNXJE:
        $this->db->from("\x6d\x61\163\164\145\x72\x5f\x74\x70");
        goto eqtoh;
        YvI9S:
        $result = $this->db->get()->row();
        goto GYqFP;
        eqtoh:
        $this->db->where("\141\143\164\151\166\145", 1);
        goto YvI9S;
        HMFCx:
    }
    public function getSemesterActive()
    {
        goto a9190;
        J04v2:
        $this->db->where("\x61\143\x74\151\166\x65", 1);
        goto cckNF;
        a9190:
        $this->db->select("\151\x64\x5f\163\x6d\164\x2c\40\x6e\x61\x6d\141\x5f\163\155\x74\54\40\163\x6d\x74");
        goto uZDaH;
        Pugzx:
        return $result;
        goto FOxxz;
        uZDaH:
        $this->db->from("\155\x61\163\x74\145\x72\137\163\x6d\x74");
        goto J04v2;
        cckNF:
        $result = $this->db->get()->row();
        goto Pugzx;
        FOxxz:
    }
    public function getJmlHariEfektif($id)
    {
        goto Cgtwd;
        Cgtwd:
        $this->db->select("\52");
        goto pMGww;
        finwk:
        $result = $this->db->get()->row();
        goto lsFML;
        lsFML:
        return $result;
        goto ssJUK;
        wMvkh:
        $this->db->where("\151\144\137\x68\141\162\151\137\x65\x66\x65\x6b\164\151\146", $id);
        goto finwk;
        pMGww:
        $this->db->from("\x6d\141\x73\164\145\x72\x5f\150\141\x72\x69\x5f\x65\146\145\153\164\x69\146");
        goto wMvkh;
        ssJUK:
    }
    public function getDistinctTahunLulus()
    {
        goto DZ8qP;
        xV0S3:
        $result = $this->db->get("\142\x75\x6b\165\x5f\151\x6e\x64\x75\x6b")->result();
        goto TgZ_D;
        cj7YS:
        foreach ($result as $row) {
            goto hC0xf;
            WEpKA:
            $ret[$row->tahun_lulus] = $row->tahun_lulus;
            goto Ho08m;
            Ho08m:
            TKMNU:
            goto eZeHH;
            hC0xf:
            if (!($row->tahun_lulus != '')) {
                goto TKMNU;
            }
            goto WEpKA;
            eZeHH:
            LFqcH:
            goto xqAYd;
            xqAYd:
        }
        goto Smu95;
        NOVyv:
        return $ret;
        goto AuFnX;
        A3_Ov:
        $this->db->distinct();
        goto xV0S3;
        Smu95:
        gx4Dl:
        goto NOVyv;
        TgZ_D:
        $ret = [];
        goto cj7YS;
        DZ8qP:
        $this->db->select("\164\141\x68\165\x6e\x5f\x6c\165\x6c\x75\x73");
        goto A3_Ov;
        AuFnX:
    }
    public function getDistinctKelasAkhir()
    {
        goto J0zCK;
        cHlsB:
        return $ret;
        goto hSJlE;
        hVd6O:
        foreach ($result as $row) {
            goto qK35H;
            Cx9cH:
            YoOIO:
            goto yNMwA;
            qK35H:
            if (!($row->kelas_akhir != '')) {
                goto YoOIO;
            }
            goto B2ZRj;
            B2ZRj:
            $ret[$row->kelas_akhir] = $row->kelas_akhir;
            goto Cx9cH;
            yNMwA:
            HgSt8:
            goto fn6Et;
            fn6Et:
        }
        goto zaZcy;
        ftr5C:
        $this->db->distinct();
        goto lB_za;
        Dzfe1:
        $ret = [];
        goto hVd6O;
        zaZcy:
        H_lDb:
        goto cHlsB;
        J0zCK:
        $this->db->select("\153\x65\x6c\x61\163\x5f\x61\x6b\x68\x69\x72");
        goto ftr5C;
        lB_za:
        $result = $this->db->get("\142\x75\x6b\x75\137\x69\x6e\x64\x75\153")->result();
        goto Dzfe1;
        hSJlE:
    }
    public function getAlumniByTahun($tahun, $kelas = null)
    {
        goto DTvjX;
        CzRj9:
        $this->db->join("\155\141\x73\x74\145\162\137\x73\x69\163\167\x61\40\142", "\x61\x2e\151\x64\x5f\x73\151\x73\167\141\75\142\x2e\x69\x64\x5f\163\x69\x73\167\141");
        goto OGQCD;
        UdFL6:
        $this->db->where("\x61\56\153\145\x6c\x61\163\x5f\141\x6b\x68\151\x72", $kelas);
        goto xnfOJ;
        OGQCD:
        $this->db->where("\141\56\x74\141\150\x75\x6e\137\154\165\x6c\165\163", $tahun);
        goto BILwh;
        DTvjX:
        $this->db->select("\x2a");
        goto fq95W;
        fq95W:
        $this->db->from("\142\x75\153\x75\137\151\156\144\x75\x6b\40\141");
        goto CzRj9;
        xnfOJ:
        wRuID:
        goto MMbZX;
        BILwh:
        if (!($kelas != null)) {
            goto wRuID;
        }
        goto UdFL6;
        MMbZX:
        return $this->db->get()->result();
        goto xzRla;
        xzRla:
    }
    public function getAlumniById($id)
    {
        goto zg0Cj;
        p_fl1:
        $this->db->join("\x62\165\x6b\x75\x5f\x69\x6e\144\x75\x6b\40\x62", "\141\56\x69\144\x5f\163\x69\x73\x77\141\x3d\x62\56\151\x64\137\x73\x69\x73\x77\x61");
        goto IVEoy;
        W8S3S:
        $this->db->from("\x6d\141\163\164\x65\162\x5f\163\x69\x73\167\141\40\141");
        goto p_fl1;
        u3oa4:
        return $this->db->get()->row();
        goto JBFUm;
        zg0Cj:
        $this->db->select("\x2a");
        goto W8S3S;
        IVEoy:
        $this->db->where("\141\x2e\151\144\137\163\x69\163\x77\141", $id);
        goto u3oa4;
        JBFUm:
    }
    public function getAllWaliKelas()
    {
        goto Cgaqj;
        yWHBj:
        $this->db->from("\152\x61\x62\141\x74\141\156\x5f\147\x75\162\165\40\x61");
        goto JRHYJ;
        JRHYJ:
        $this->db->join("\155\141\163\x74\145\x72\137\147\165\162\x75\x20\x62", "\x61\56\x69\x64\137\x67\165\x72\165\75\142\56\x69\144\x5f\147\165\162\165", "\154\x65\x66\164");
        goto KJ4Nx;
        TxWwF:
        o6BVm:
        goto YqzS5;
        KJ4Nx:
        $this->db->join("\x6c\x65\x76\145\x6c\137\x67\x75\x72\165\40\x63", "\x61\56\151\144\x5f\x6a\x61\x62\141\164\x61\156\75\x63\x2e\151\x64\137\x6c\145\166\145\x6c", "\x6c\145\x66\164");
        goto sOApk;
        bqMsE:
        $this->db->select("\x61\56\151\144\137\164\160\x2c\x20\141\56\151\144\x5f\163\x6d\x74\x2c\x20\141\56\151\x64\x5f\147\x75\x72\165\54\x20\142\56\156\141\155\x61\137\147\165\x72\165\x2c\x20\x63\x2e\x69\144\x5f\154\145\166\145\x6c\x2c\x20\143\56\154\145\166\145\154\x2c\x20\x64\x2e\x69\x64\x5f\x6b\145\x6c\141\x73\x2c\40\x64\56\156\141\x6d\x61\137\x6b\x65\x6c\x61\x73");
        goto yWHBj;
        Cgaqj:
        $this->db->query("\x53\105\124\x20\x53\x51\114\137\102\x49\x47\137\123\x45\114\x45\x43\124\x53\x3d\x31");
        goto bqMsE;
        sOApk:
        $this->db->join("\x6d\x61\x73\x74\145\x72\x5f\153\x65\x6c\x61\x73\40\x64", "\x61\56\151\x64\x5f\153\x65\x6c\141\163\75\x64\56\151\144\x5f\153\145\x6c\141\163", "\154\x65\x66\x74");
        goto jUwh_;
        j1jm3:
        foreach ($result as $key => $row) {
            goto VALN9;
            t_1Kx:
            LWllC:
            goto ytWxE;
            Wm2WN:
            $ret[$row->id_tp][$row->id_smt][$row->id_kelas] = $row;
            goto t_1Kx;
            VALN9:
            if (!($row->id_level == "\64")) {
                goto LWllC;
            }
            goto Wm2WN;
            ytWxE:
            oy3D0:
            goto sdyrg;
            sdyrg:
        }
        goto TxWwF;
        jUwh_:
        $result = $this->db->get()->result();
        goto tqF9c;
        tqF9c:
        $ret = [];
        goto PwO1C;
        SENqY:
        return $ret;
        goto ICjPe;
        YqzS5:
        RiTRq:
        goto SENqY;
        PwO1C:
        if (!$result) {
            goto RiTRq;
        }
        goto j1jm3;
        ICjPe:
    }
    public function getAllGuru()
    {
        goto lZHSa;
        iYy2F:
        $this->db->from("\x6d\x61\163\164\x65\162\x5f\147\x75\162\x75");
        goto CZPKO;
        lZHSa:
        $this->db->select("\151\144\137\147\x75\x72\165");
        goto IYmFx;
        zmbNi:
        $this->db->select("\x69\x64\137\x67\x75\162\165\x2c\40\156\x69\x70\x2c\40\156\x61\x6d\x61\137\147\165\x72\x75");
        goto iYy2F;
        g8We3:
        foreach ($guru as $d) {
            $id_guru[] = $d->id_guru;
            eAqK4:
        }
        goto jK28N;
        autou:
        $guru = $this->db->get()->result();
        goto P3YrL;
        dtHr2:
        return $this->db->get()->result();
        goto II7jm;
        IYmFx:
        $this->db->from("\x6a\x61\142\x61\x74\141\156\137\147\x75\x72\165");
        goto autou;
        jK28N:
        Wxpuv:
        goto zmbNi;
        P3YrL:
        $id_guru = [];
        goto g8We3;
        CZPKO:
        $this->db->where_in("\x69\144\137\147\x75\x72\x75", $id_guru);
        goto dtHr2;
        II7jm:
    }
    public function getAllKelas($tp = null, $smt = null)
    {
        goto w7Olc;
        C653z:
        $this->db->join("\x6d\141\x73\x74\x65\162\x5f\152\x75\x72\x75\x73\x61\x6e\x20\x62", "\x61\56\152\x75\162\165\163\141\x6e\x5f\151\144\x3d\142\x2e\x69\144\137\152\x75\162\165\163\x61\156", "\x6c\x65\x66\164");
        goto KZnb9;
        ebWyC:
        PEHqW:
        goto GWgXI;
        Hg7uB:
        WzY_p:
        goto SaXSC;
        w7Olc:
        $this->db->query("\x53\105\x54\40\x53\x51\114\137\x42\x49\x47\x5f\123\x45\x4c\x45\103\x54\x53\x3d\x31");
        goto dVdP2;
        KZnb9:
        $this->db->join("\155\x61\163\x74\145\162\137\x67\165\x72\165\40\x63", "\x66\56\x69\x64\x5f\147\x75\x72\165\x3d\143\x2e\151\144\x5f\x67\x75\x72\165", "\x6c\145\x66\164");
        goto rA88x;
        dVdP2:
        $this->db->select("\x61\56\x69\144\x5f\153\145\x6c\141\163\x2c\x20\141\x2e\151\144\x5f\164\160\54\x20\141\56\x69\x64\137\x73\x6d\x74\54\40\x61\x2e\156\x61\155\x61\137\153\x65\x6c\141\x73\x2c\x20\141\x2e\153\157\x64\x65\137\x6b\x65\x6c\141\x73\54\40\x61\56\154\145\166\145\154\137\x69\144\x2c\x20\142\x2e\x6e\141\155\x61\137\152\x75\x72\x75\163\141\x6e\x2c\40\142\x2e\x6b\x6f\144\x65\137\152\x75\162\x75\x73\141\156\x2c\x20\143\x2e\x6e\x61\155\141\137\x67\x75\x72\x75");
        goto BVwXV;
        mWLA6:
        if (!($tp != null && $smt != null)) {
            goto PEHqW;
        }
        goto JwDsm;
        tcWiz:
        if (!$result) {
            goto KugW0;
        }
        goto M9V1q;
        rA88x:
        $this->db->order_by("\x61\56\156\141\x6d\141\137\153\x65\x6c\141\163");
        goto f2YDg;
        s7cmu:
        $ret = [];
        goto tAyfx;
        M9V1q:
        foreach ($result as $key => $row) {
            $ret[$row->id_tp][$row->id_smt][$row->id_kelas] = $row;
            LREZG:
        }
        goto BTajX;
        JwDsm:
        $this->db->where("\x61\x2e\151\144\137\x74\x70", $tp)->where("\141\x2e\151\144\x5f\x73\155\164", $smt);
        goto ebWyC;
        f2YDg:
        $result = $this->db->get()->result();
        goto s7cmu;
        BTajX:
        EPfBu:
        goto VI8GH;
        VUs7J:
        OrHOc:
        goto Hg7uB;
        tAyfx:
        if ($tp != null && $smt != null) {
            goto Iki75;
        }
        goto tcWiz;
        SaXSC:
        return $ret;
        goto IJTVE;
        VI8GH:
        KugW0:
        goto JS9VH;
        BVwXV:
        $this->db->from("\x6d\x61\163\164\145\162\137\153\145\x6c\x61\163\x20\x61");
        goto mWLA6;
        JS9VH:
        goto WzY_p;
        goto Lemnf;
        U7MBF:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas] = $row;
            WyAYv:
        }
        goto hBpDL;
        Lemnf:
        Iki75:
        goto q5VrO;
        q5VrO:
        if (!$result) {
            goto OrHOc;
        }
        goto U7MBF;
        GWgXI:
        $this->db->join("\x6a\x61\142\x61\164\141\x6e\x5f\x67\165\x72\x75\40\146", "\x66\x2e\x69\144\x5f\153\145\154\x61\163\75\141\x2e\151\x64\x5f\153\x65\154\x61\x73", "\154\145\146\x74");
        goto C653z;
        hBpDL:
        TPN91:
        goto VUs7J;
        IJTVE:
    }
    public function getAllKelasSiswa()
    {
        goto M1wZC;
        NODVI:
        cpK0W:
        goto dTK1G;
        awAOQ:
        $ret = [];
        goto uEZ4j;
        zx4V1:
        $this->db->from("\x6b\x65\154\x61\163\137\x73\151\x73\167\141");
        goto LYDeg;
        dTK1G:
        return $ret;
        goto F3zqJ;
        uEZ4j:
        if (!$result) {
            goto cpK0W;
        }
        goto tcNT2;
        tcNT2:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas][$row->id_siswa] = $row;
            RuA8p:
        }
        goto uv9nI;
        M1wZC:
        $this->db->select("\52");
        goto zx4V1;
        LYDeg:
        $result = $this->db->get()->result();
        goto awAOQ;
        uv9nI:
        sHcTK:
        goto NODVI;
        F3zqJ:
    }
    public function getDataInduk()
    {
        goto fvf0R;
        q1FHl:
        $ret = [];
        goto V3nEI;
        B0RlW:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa] = $row;
            PWHKr:
        }
        goto SxSLH;
        h5Bcl:
        fX0de:
        goto SnSI0;
        ZRXAy:
        $this->db->from("\155\141\x73\164\145\162\137\x73\x69\x73\x77\x61\40\x61");
        goto GT86D;
        k19XN:
        $result = $this->db->get()->result();
        goto q1FHl;
        SxSLH:
        Do4U4:
        goto h5Bcl;
        HrL7R:
        $this->db->order_by("\141\56\x6e\x61\155\x61", "\x41\123\x43");
        goto k19XN;
        fvf0R:
        $this->db->select("\141\56\x2a\54\40\x62\x2e\52\54");
        goto ZRXAy;
        SnSI0:
        return $ret;
        goto bAj2z;
        V3nEI:
        if (!$result) {
            goto fX0de;
        }
        goto B0RlW;
        GT86D:
        $this->db->join("\x62\x75\153\x75\137\151\156\x64\x75\x6b\40\x62", "\141\x2e\x69\x64\137\163\x69\x73\167\141\x3d\x62\x2e\151\x64\x5f\163\x69\x73\x77\141", "\x6c\145\146\164");
        goto HrL7R;
        bAj2z:
    }
}
