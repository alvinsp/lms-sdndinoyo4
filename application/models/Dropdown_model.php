<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Dropdown_model extends CI_Model
{
    public function getBulan()
    {
        goto VZlsn;
        nHHv1:
        return $ret;
        goto nq_mq;
        koCuS:
        A2k3r:
        goto nHHv1;
        O5Q3E:
        lSYlj:
        goto koCuS;
        VZlsn:
        $result = $this->db->get("\x62\x75\x6c\141\x6e")->result();
        goto CEa_K;
        CEa_K:
        $ret = [];
        goto mkQFy;
        T9uBo:
        foreach ($result as $key => $row) {
            $ret[$row->id_bln] = $row->nama_bln;
            ViNSi:
        }
        goto O5Q3E;
        mkQFy:
        if (!$result) {
            goto A2k3r;
        }
        goto T9uBo;
        nq_mq:
    }
    public function getAllSesi()
    {
        goto WMdgE;
        ft10O:
        return $ret;
        goto wwRGC;
        rxFjO:
        Tg47R:
        goto ft10O;
        DKZeD:
        HjUPA:
        goto rxFjO;
        K6CXq:
        foreach ($result as $key => $row) {
            $ret[$row->id_sesi] = $row->nama_sesi;
            i6_gm:
        }
        goto DKZeD;
        WMdgE:
        $result = $this->db->get("\x63\x62\164\137\163\x65\163\151")->result();
        goto pjMd3;
        pjMd3:
        if (!$result) {
            goto Tg47R;
        }
        goto K6CXq;
        wwRGC:
    }
    public function getAllRuang()
    {
        goto S7Drn;
        FQtMF:
        return $ret;
        goto AI4RM;
        Dxd0_:
        KJ26d:
        goto AEgP7;
        i0hqW:
        $ret = [];
        goto wSRk9;
        xictW:
        foreach ($result as $key => $row) {
            $ret[$row->id_ruang] = $row->nama_ruang;
            h4mMC:
        }
        goto Dxd0_;
        AEgP7:
        YkvRe:
        goto FQtMF;
        wSRk9:
        if (!$result) {
            goto YkvRe;
        }
        goto xictW;
        S7Drn:
        $result = $this->db->get("\143\x62\x74\x5f\x72\165\x61\156\x67")->result();
        goto i0hqW;
        AI4RM:
    }
    public function getAllWaktuSesi()
    {
        goto vnPae;
        ovhon:
        if (!$result) {
            goto XSMOE;
        }
        goto Dzc2W;
        bLz08:
        XSMOE:
        goto RRvdw;
        Dzc2W:
        foreach ($result as $key => $row) {
            $ret[$row->id_sesi] = ["\x6d\165\154\141\151" => $row->waktu_mulai, "\141\153\x68\x69\162" => $row->waktu_akhir];
            kBIgO:
        }
        goto vCPbM;
        vCPbM:
        ea2tA:
        goto bLz08;
        RRvdw:
        return $ret;
        goto cLvTh;
        vnPae:
        $result = $this->db->get("\143\142\164\137\163\x65\x73\x69")->result();
        goto ovhon;
        cLvTh:
    }
    public function getDataKelompokMapel()
    {
        goto Cr1eF;
        r9aSf:
        return $ret;
        goto VkJUK;
        pc_OU:
        NlVuj:
        goto r9aSf;
        poYAC:
        foreach ($result as $row) {
            $ret[$row->kode_kel_mapel] = $row->nama_kel_mapel;
            eWtht:
        }
        goto pc_OU;
        Cr1eF:
        $this->db->select("\x2a");
        goto KovkL;
        FcHfD:
        $this->db->order_by("\x6b\157\x64\x65\x5f\x6b\145\154\137\155\x61\x70\145\x6c");
        goto A1C2y;
        i6WvS:
        $ret = [];
        goto poYAC;
        KovkL:
        $this->db->from("\155\141\x73\x74\x65\162\x5f\x6b\145\x6c\x6f\155\160\157\x6b\137\x6d\x61\160\x65\154");
        goto FcHfD;
        A1C2y:
        $result = $this->db->get()->result();
        goto i6WvS;
        VkJUK:
    }
    public function getAllMapel()
    {
        goto evk4u;
        FJSXs:
        $this->db->where("\x73\x74\141\x74\x75\163", "\x31");
        goto U0dGZ;
        D2i0e:
        foreach ($result as $key => $row) {
            $ret[$row->id_mapel] = $row->nama_mapel;
            d2V8m:
        }
        goto aN6OG;
        t0K9H:
        return $ret;
        goto GkEAS;
        aN6OG:
        Ho6dF:
        goto U7PU3;
        U7PU3:
        rukuZ:
        goto t0K9H;
        evk4u:
        $this->db->order_by("\165\x72\x75\164\141\x6e\x5f\x74\x61\x6d\160\151\154");
        goto FJSXs;
        U0dGZ:
        $result = $this->db->get("\x6d\x61\x73\x74\145\162\137\x6d\141\x70\x65\154")->result();
        goto Cy0nm;
        Cy0nm:
        if (!$result) {
            goto rukuZ;
        }
        goto D2i0e;
        GkEAS:
    }
    public function getAllKodeMapel()
    {
        goto bVhIB;
        qiL0F:
        return $ret;
        goto J1XcA;
        MV5r1:
        ZGbe8:
        goto qiL0F;
        PQedf:
        Z5V36:
        goto MV5r1;
        PT8o_:
        $result = $this->db->get("\155\141\x73\x74\x65\x72\137\155\x61\x70\145\154")->result();
        goto Hqdh1;
        Hqdh1:
        $ret[''] = "\124\151\x64\141\x6b\40\141\144\141";
        goto LMR9_;
        Wz9cJ:
        foreach ($result as $key => $row) {
            $ret[$row->id_mapel] = $row->kode;
            xOQSl:
        }
        goto PQedf;
        Ad2DK:
        $this->db->where("\163\x74\141\164\165\163", "\61");
        goto PT8o_;
        LMR9_:
        if (!$result) {
            goto ZGbe8;
        }
        goto Wz9cJ;
        bVhIB:
        $this->db->order_by("\165\162\165\164\141\156\x5f\164\x61\155\160\151\154");
        goto Ad2DK;
        J1XcA:
    }
    public function getAllMapelPeminatan()
    {
        goto r8CAF;
        fpRIO:
        $this->db->where("\153\x61\x74\145\x67\x6f\x72\151\40\x3c\76\x20\42\127\101\112\x49\102\x22")->or_where("\153\x61\x74\x65\x67\x6f\x72\151\40\74\x3e\x20\42\x50\101\111\40\x28\113\x65\155\145\156\x61\x67\51\x22");
        goto u_rGU;
        mYmHX:
        $ress = [];
        goto XfVHs;
        XfVHs:
        if (!$res) {
            goto R0drT;
        }
        goto Zppnd;
        YnJza:
        $this->db->from("\x6d\x61\163\164\145\162\x5f\153\145\x6c\x6f\155\160\x6f\153\x5f\x6d\x61\x70\x65\154");
        goto fpRIO;
        daPOl:
        qeOs2:
        goto us6eh;
        u_rGU:
        $res = $this->db->get("\x6d\x61\x73\x74\145\x72\137\155\x61\160\x65\154")->result();
        goto mYmHX;
        pQ25P:
        G89CU:
        goto daPOl;
        r8CAF:
        $this->db->select("\52");
        goto YnJza;
        o8Az7:
        $result = $this->db->get("\155\141\163\164\x65\x72\x5f\155\141\x70\x65\154")->result();
        goto OIhiy;
        UxkuY:
        kPlEg:
        goto pQ25P;
        us6eh:
        return $ret;
        goto xD3le;
        WvUy5:
        $this->db->order_by("\165\162\165\164\141\x6e\137\x74\x61\x6d\160\151\154");
        goto o8Az7;
        SxYzq:
        $ret = [];
        goto x0qa8;
        x0qa8:
        if (!(count($ress) > 0)) {
            goto qeOs2;
        }
        goto Cwi8q;
        Zppnd:
        foreach ($res as $key => $row) {
            $ress[$row->id_kel_mapel] = $row->kode_kel_mapel;
            Wr1A6:
        }
        goto xOggn;
        xOggn:
        TFYNd:
        goto ZI79O;
        otPRt:
        foreach ($result as $key => $row) {
            $ret[$row->id_mapel] = $row->nama_mapel;
            EL6CA:
        }
        goto UxkuY;
        ZI79O:
        R0drT:
        goto SxYzq;
        OIhiy:
        if (!$result) {
            goto G89CU;
        }
        goto otPRt;
        Cwi8q:
        $this->db->where_in("\x6b\145\x6c\157\x6d\160\157\x6b", $ress);
        goto WvUy5;
        xD3le:
    }
    public function getAllLevel($jenjang)
    {
        goto VEPBh;
        VEPBh:
        $levels = [];
        goto nNkRd;
        Mjdsk:
        $levels = ["\61" => "\x31", "\x32" => "\x32", "\x33" => "\x33", "\64" => "\64", "\65" => "\x35", "\66" => "\x36"];
        goto YwL3F;
        yuTWJ:
        $levels = ["\x31\60" => "\61\60", "\x31\x31" => "\61\61", "\61\62" => "\61\x32"];
        goto jgmoV;
        xnXy1:
        jaYif:
        goto Mjdsk;
        kTWXL:
        return $levels;
        goto SMLpA;
        YwL3F:
        goto cW8D6;
        goto axq71;
        nNkRd:
        if ($jenjang == "\x31") {
            goto jaYif;
        }
        goto RBxNG;
        IIf_j:
        if ($jenjang == "\x33") {
            goto LmRtZ;
        }
        goto b6eJc;
        Syr07:
        LmRtZ:
        goto yuTWJ;
        RBxNG:
        if ($jenjang == "\x32") {
            goto eXu0u;
        }
        goto IIf_j;
        jgmoV:
        cW8D6:
        goto kTWXL;
        axq71:
        eXu0u:
        goto bdt31;
        yzBPS:
        goto cW8D6;
        goto Syr07;
        bdt31:
        $levels = ["\x37" => "\x37", "\x38" => "\70", "\71" => "\x39"];
        goto yzBPS;
        b6eJc:
        goto cW8D6;
        goto xnXy1;
        SMLpA:
    }
    public function getAllKelas($tp, $smt, $level = null)
    {
        goto bjhu6;
        MEUV0:
        if (!($level != null)) {
            goto TMBqX;
        }
        goto qDg1v;
        FvwSF:
        $this->db->order_by("\x6c\145\x76\x65\x6c\x5f\151\144", "\101\123\x43");
        goto T2D9R;
        T2D9R:
        $this->db->order_by("\x6e\x61\x6d\141\x5f\x6b\x65\154\141\x73", "\x41\x53\103");
        goto MEUV0;
        kZoux:
        $ret = [];
        goto tv_B1;
        bjhu6:
        $this->db->select("\52");
        goto lGbN8;
        lGbN8:
        $this->db->from("\x6d\141\163\164\x65\162\137\x6b\x65\154\x61\x73");
        goto uloiA;
        sqvSn:
        D1GBd:
        goto aB_hZ;
        uloiA:
        $this->db->where("\151\x64\137\x74\160", $tp);
        goto scShT;
        Jv8y0:
        $ret = [];
        goto FBNyJ;
        yTm7x:
        Jhx0_:
        goto z3tzt;
        z3tzt:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas] = $row->nama_kelas;
            FxOEb:
        }
        goto A1O63;
        scShT:
        $this->db->where("\151\144\x5f\163\x6d\164", $smt);
        goto FvwSF;
        T_CK5:
        $result = $this->db->get()->result();
        goto Jv8y0;
        qDg1v:
        $this->db->where("\x6c\x65\166\145\154\x5f\151\x64" . $level);
        goto GY9hZ;
        GY9hZ:
        TMBqX:
        goto T_CK5;
        FBNyJ:
        if ($result) {
            goto Jhx0_;
        }
        goto kZoux;
        A1O63:
        wbRPe:
        goto sqvSn;
        tv_B1:
        goto D1GBd;
        goto yTm7x;
        aB_hZ:
        return $ret;
        goto vMcu6;
        vMcu6:
    }
    public function getAllKeyKodeKelas($tp, $smt)
    {
        goto smYMp;
        t6eWw:
        $ret = [];
        goto U4eqT;
        m1bTG:
        $this->db->where("\151\144\137\164\x70", $tp);
        goto P8Qbk;
        uN3_0:
        return $ret;
        goto UtgbK;
        a4iN8:
        $this->db->from("\x6d\x61\163\164\x65\162\137\x6b\x65\154\141\163");
        goto m1bTG;
        Y3J3m:
        if ($result) {
            goto Nndxe;
        }
        goto t6eWw;
        WqjeI:
        i4ebb:
        goto uN3_0;
        smYMp:
        $this->db->select("\x2a");
        goto a4iN8;
        w7Vbk:
        foreach ($result as $key => $row) {
            $ret[$row->kode_kelas] = $row->nama_kelas;
            yw2ea:
        }
        goto SSGdW;
        vNZIk:
        $result = $this->db->get()->result();
        goto Y3J3m;
        SSGdW:
        bu8fm:
        goto WqjeI;
        U4eqT:
        goto i4ebb;
        goto VLUPc;
        VLUPc:
        Nndxe:
        goto w7Vbk;
        P8Qbk:
        $this->db->where("\151\x64\x5f\x73\x6d\164", $smt);
        goto vNZIk;
        UtgbK:
    }
    public function getAllKodeKelas($tp = null, $smt = null)
    {
        goto Wldl3;
        p9ICU:
        if (!($smt != null)) {
            goto cjuo8;
        }
        goto kNvAp;
        fLHx2:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas] = $row->kode_kelas;
            mP1XB:
        }
        goto IvB5k;
        FMXXu:
        cjuo8:
        goto AKUjl;
        ZekeG:
        $ret = [];
        goto Co2zv;
        hfFyZ:
        Zxcpw:
        goto p9ICU;
        IvB5k:
        UdhPD:
        goto Jao5x;
        dzQKD:
        $this->db->from("\155\141\x73\x74\145\162\137\153\145\x6c\141\x73");
        goto Gb0Ps;
        HmkrC:
        $this->db->where("\x69\x64\x5f\x74\x70", $tp);
        goto hfFyZ;
        jBSHe:
        if ($result) {
            goto Jdwuf;
        }
        goto ZekeG;
        MbetQ:
        Jdwuf:
        goto fLHx2;
        i9Lsz:
        return $ret;
        goto S5GgX;
        Wldl3:
        $this->db->select("\x2a");
        goto dzQKD;
        Jao5x:
        TUxT6:
        goto i9Lsz;
        Co2zv:
        goto TUxT6;
        goto MbetQ;
        AKUjl:
        $result = $this->db->get()->result();
        goto jBSHe;
        Gb0Ps:
        if (!($tp != null)) {
            goto Zxcpw;
        }
        goto HmkrC;
        kNvAp:
        $this->db->where("\x69\x64\137\163\155\164", $smt);
        goto FMXXu;
        S5GgX:
    }
    public function getNamaKelasById($tp, $smt, $id)
    {
        goto Ldd9e;
        pZiCN:
        return $result->nama_kelas;
        goto r6G5W;
        QiNMq:
        $result = $this->db->get("\155\141\x73\x74\145\x72\137\x6b\145\154\x61\163")->row();
        goto ACpAx;
        Se4MB:
        return null;
        goto pfeS0;
        XYUhf:
        $this->db->where("\151\144\x5f\163\x6d\164", $smt);
        goto QiNMq;
        r6G5W:
        MpcTD:
        goto LJc0r;
        uNF_B:
        $this->db->where("\151\x64\137\164\x70", $tp);
        goto XYUhf;
        pfeS0:
        goto MpcTD;
        goto EHXH2;
        Ldd9e:
        $this->db->select("\x6e\x61\x6d\141\x5f\x6b\x65\x6c\x61\163");
        goto pVTuN;
        ACpAx:
        if ($result != null) {
            goto K4R29;
        }
        goto Se4MB;
        pVTuN:
        $this->db->where("\151\144\x5f\x6b\145\x6c\x61\x73", $id);
        goto uNF_B;
        EHXH2:
        K4R29:
        goto pZiCN;
        LJc0r:
    }
    public function getAllKelasByArrayId($tp, $smt, $arrId)
    {
        goto k6K9L;
        eNton:
        QP6m3:
        goto gL0Hf;
        KL8sX:
        $this->db->from("\155\x61\163\164\x65\162\x5f\153\145\x6c\141\x73");
        goto kOHlB;
        kOHlB:
        $this->db->where("\x69\144\x5f\164\160", $tp);
        goto D0vTw;
        oXC04:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas] = $row->nama_kelas;
            gUHUs:
        }
        goto eNton;
        BU0a1:
        $result = $this->db->get()->result();
        goto BpEeQ;
        k6K9L:
        $this->db->select("\52");
        goto KL8sX;
        D0vTw:
        $this->db->where_in("\151\x64\137\x6b\x65\x6c\141\x73", $arrId);
        goto BU0a1;
        gL0Hf:
        JgzKV:
        goto xKp_5;
        JzpTx:
        if (!$result) {
            goto JgzKV;
        }
        goto oXC04;
        xKp_5:
        return $ret;
        goto Imb2A;
        BpEeQ:
        $ret = [];
        goto JzpTx;
        Imb2A:
    }
    public function getAllEkskul()
    {
        goto akqEj;
        p9_Om:
        YAfGd:
        goto V4i3q;
        LmBJq:
        gvYBf:
        goto p9_Om;
        oEwRF:
        foreach ($result as $key => $row) {
            $ret[$row->id_ekstra] = $row->nama_ekstra;
            W9jbY:
        }
        goto LmBJq;
        akqEj:
        $result = $this->db->get("\x6d\x61\x73\164\145\162\x5f\145\153\x73\164\162\x61")->result();
        goto KNk7N;
        V4i3q:
        return $ret;
        goto wbW_q;
        KNk7N:
        if (!$result) {
            goto YAfGd;
        }
        goto oEwRF;
        wbW_q:
    }
    public function getAllKodeEkskul()
    {
        goto Rd5xD;
        nqtyV:
        MoF7W:
        goto asTlh;
        asTlh:
        return $ret;
        goto aBIYq;
        KtzCG:
        foreach ($result as $key => $row) {
            $ret[$row->id_ekstra] = $row->kode_ekstra;
            JE4CK:
        }
        goto XbtTH;
        XbtTH:
        xDS6J:
        goto nqtyV;
        SeGGJ:
        if (!$result) {
            goto MoF7W;
        }
        goto KtzCG;
        Rd5xD:
        $result = $this->db->get("\155\x61\163\164\145\162\137\145\x6b\x73\x74\162\141")->result();
        goto SeGGJ;
        aBIYq:
    }
    public function getAllJurusan()
    {
        goto UzI2y;
        nnq1t:
        foreach ($result as $key => $row) {
            $ret[$row->id_jurusan] = $row->kode_jurusan;
            zLkJ_:
        }
        goto NihGA;
        NihGA:
        uByKC:
        goto LEVT9;
        UzI2y:
        $result = $this->db->get("\x6d\141\x73\x74\145\162\137\152\165\x72\x75\x73\141\156")->result();
        goto rMXCk;
        rMXCk:
        if (!$result) {
            goto fWFzQ;
        }
        goto nnq1t;
        VU0Xz:
        return $ret;
        goto MHl0W;
        LEVT9:
        fWFzQ:
        goto VU0Xz;
        MHl0W:
    }
    public function getAllGuru()
    {
        goto o7UB3;
        fvW5j:
        wpMVr:
        goto H7F6K;
        xJAga:
        $ret["\x30"] = "\120\x69\154\151\150\x20\107\165\162\165\40\x3a";
        goto YwHGs;
        H7F6K:
        YVJb9:
        goto JVLz0;
        JVLz0:
        return $ret;
        goto x3c8a;
        o7UB3:
        $this->db->select("\x61\56\x69\x64\x5f\x67\x75\x72\165\54\40\x61\56\x6e\141\x6d\141\137\147\x75\162\x75");
        goto EUCBB;
        u3xLI:
        foreach ($result as $key => $row) {
            $ret[$row->id_guru] = $row->nama_guru;
            WL02_:
        }
        goto fvW5j;
        Q5O7R:
        $this->db->join("\x75\x73\x65\x72\x73\40\x65", "\x61\56\165\163\x65\162\x6e\x61\x6d\x65\75\x65\56\x75\163\145\x72\156\141\155\145");
        goto uhc9r;
        EUCBB:
        $this->db->from("\155\141\x73\x74\145\x72\x5f\x67\165\x72\x75\x20\x61");
        goto Q5O7R;
        uhc9r:
        $result = $this->db->get()->result();
        goto xJAga;
        YwHGs:
        if (!$result) {
            goto YVJb9;
        }
        goto u3xLI;
        x3c8a:
    }
    public function getAllLevelGuru()
    {
        goto LcZZk;
        LcZZk:
        $result = $this->db->get("\x6c\x65\x76\x65\154\x5f\x67\x75\162\x75")->result();
        goto Lw6I_;
        X9wck:
        foreach ($result as $key => $row) {
            $ret[$row->id_level] = $row->level;
            dz6K9:
        }
        goto uIAvY;
        Zhnim:
        if (!$result) {
            goto BUl9G;
        }
        goto X9wck;
        Lw6I_:
        $ret[''] = "\x50\x69\x6c\151\x68\x20\x4a\x61\x62\x61\x74\x61\x6e\x20\x3a";
        goto Zhnim;
        uIAvY:
        G87xy:
        goto kG3cr;
        gfMQT:
        return $ret;
        goto DRnuG;
        kG3cr:
        BUl9G:
        goto gfMQT;
        DRnuG:
    }
    public function getAllJenisUjian()
    {
        goto q0nXt;
        QJeM8:
        if (!$result) {
            goto Y5jo_;
        }
        goto OtG9M;
        CYio7:
        Y5jo_:
        goto mrvgC;
        q0nXt:
        $result = $this->db->get("\x63\142\164\137\152\145\156\151\x73")->result();
        goto QJeM8;
        mrvgC:
        return $ret;
        goto yZzmK;
        OtG9M:
        foreach ($result as $key => $row) {
            $ret[$row->id_jenis] = $row->nama_jenis . "\x20\50" . $row->kode_jenis . "\51";
            ohl02:
        }
        goto vbzk6;
        vbzk6:
        Bx5TH:
        goto CYio7;
        yZzmK:
    }
    public function getAllBankSoal()
    {
        goto PaiI9;
        CNstr:
        $ret[''] = "\x50\x69\x6c\x69\150\40\102\x61\x6e\x6b\40\x53\157\x61\x6c\40\x3a";
        goto R70iS;
        toUQ0:
        ucl4x:
        goto HvmXQ;
        NFgLx:
        ujVnm:
        goto toUQ0;
        jrNfb:
        foreach ($result as $key => $row) {
            $ret[$row->id_bank] = $row->bank_kode;
            L9HtZ:
        }
        goto NFgLx;
        PaiI9:
        $result = $this->db->get("\143\142\x74\x5f\x62\141\156\x6b\137\163\x6f\x61\154")->result();
        goto CNstr;
        R70iS:
        if (!$result) {
            goto ucl4x;
        }
        goto jrNfb;
        HvmXQ:
        return $ret;
        goto PPjzp;
        PPjzp:
    }
    public function getAllJadwal($tp, $smt)
    {
        goto CVnC1;
        G5Iwg:
        $result = $this->db->get()->result();
        goto UV4Sj;
        vWmW0:
        if (!$result) {
            goto wm2pt;
        }
        goto eDu8Q;
        eDu8Q:
        foreach ($result as $key => $row) {
            $ret[$row->id_jadwal] = $row->bank_kode;
            ypeo9:
        }
        goto g1ppy;
        pon7J:
        $this->db->join("\x63\x62\164\x5f\x62\x61\x6e\x6b\137\163\x6f\141\154\x20\x62", "\x62\56\151\144\x5f\142\141\x6e\x6b\75\141\56\151\x64\137\142\141\156\x6b");
        goto m9Ywv;
        m9Ywv:
        $this->db->where("\x61\x2e\151\144\x5f\164\x70", $tp);
        goto XuJZT;
        CVnC1:
        $this->db->from("\143\142\x74\x5f\x6a\141\x64\167\x61\x6c\x20\x61");
        goto pon7J;
        UV4Sj:
        $ret = [];
        goto vWmW0;
        aOEW3:
        return $ret;
        goto PiEDF;
        XuJZT:
        $this->db->where("\x61\56\x69\144\x5f\x73\x6d\164", $smt);
        goto G5Iwg;
        Ld256:
        wm2pt:
        goto aOEW3;
        g1ppy:
        O12jb:
        goto Ld256;
        PiEDF:
    }
    public function getAllJadwalGuru($tp, $smt, $guru)
    {
        goto alvd9;
        QIZWc:
        $this->db->join("\x63\142\x74\137\x62\x61\156\153\137\x73\157\141\x6c\40\142", "\142\x2e\x69\144\x5f\142\141\x6e\x6b\x3d\141\56\x69\x64\137\142\141\x6e\x6b\x20\x41\x4e\x44\40\x62\56\142\x61\156\x6b\137\147\x75\x72\165\137\151\144\75" . $guru);
        goto rKR6n;
        mJsQR:
        $result = $this->db->get()->result();
        goto y6Iam;
        rKR6n:
        $this->db->where("\x61\56\151\x64\x5f\164\160", $tp);
        goto kpUEu;
        alvd9:
        $this->db->from("\143\x62\x74\137\152\x61\x64\x77\x61\x6c\x20\x61");
        goto QIZWc;
        h7yiL:
        return $ret;
        goto c6LGx;
        y6Iam:
        $ret = [];
        goto v0d4_;
        kpUEu:
        $this->db->where("\x61\x2e\151\x64\137\x73\x6d\164", $smt);
        goto mJsQR;
        oSil8:
        PrGUv:
        goto h7yiL;
        v0d4_:
        if (!$result) {
            goto PrGUv;
        }
        goto onREK;
        onREK:
        foreach ($result as $key => $row) {
            $ret[$row->id_jadwal] = $row->bank_kode;
            o4bYO:
        }
        goto WHovu;
        WHovu:
        uoC5W:
        goto oSil8;
        c6LGx:
    }
    public function getAllJenisJadwal($tp, $smt, $jenis, $mapel)
    {
        goto WJWXg;
        h0Ig_:
        qMAKi:
        goto pWTtz;
        Lfk95:
        $this->db->where("\x61\x2e\x69\144\137\163\155\164", $smt);
        goto dMBwN;
        cedyM:
        $ret = [];
        goto tlkxx;
        hUuU8:
        C7568:
        goto EUo3b;
        EUo3b:
        TigHd:
        goto yXtiM;
        MVYm3:
        if ($mapel == "\60") {
            goto qMAKi;
        }
        goto B3d47;
        NqsHP:
        $this->db->where("\x61\x2e\x69\144\x5f\x74\x70", $tp);
        goto Lfk95;
        OzeEk:
        lxRma:
        goto NqsHP;
        wu4PQ:
        goto lxRma;
        goto h0Ig_;
        QkD_p:
        foreach ($result as $key => $row) {
            $ret[$row->id_jadwal] = $row->bank_kode;
            rv8Xc:
        }
        goto hUuU8;
        tlkxx:
        if (!$result) {
            goto TigHd;
        }
        goto QkD_p;
        B3d47:
        $this->db->join("\x63\142\x74\137\x62\141\x6e\x6b\137\x73\x6f\141\154\40\x62", "\142\56\x69\x64\137\x62\141\156\x6b\x3d\141\56\151\x64\x5f\x62\x61\x6e\153\x20\101\x4e\104\x20\142\x2e\x62\141\x6e\153\x5f\x6d\x61\x70\145\154\137\151\x64\x3d" . $mapel . "\40");
        goto wu4PQ;
        pWTtz:
        $this->db->join("\143\142\164\x5f\142\x61\156\153\137\x73\x6f\141\154\40\142", "\x62\x2e\x69\x64\137\142\x61\x6e\x6b\x3d\141\x2e\151\144\137\142\x61\156\153");
        goto OzeEk;
        J3emN:
        $result = $this->db->get()->result();
        goto cedyM;
        yXtiM:
        return $ret;
        goto preKc;
        WJWXg:
        $this->db->from("\143\x62\164\x5f\x6a\141\x64\167\x61\x6c\40\141");
        goto MVYm3;
        dMBwN:
        $this->db->where("\x61\56\x69\x64\x5f\152\145\x6e\x69\163", $jenis);
        goto J3emN;
        preKc:
    }
}
