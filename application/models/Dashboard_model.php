<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\x53\x45\120\x41\x54\x48") or exit("\x4e\157\x20\x64\151\162\145\x63\164\40\x73\x63\162\151\x70\164\40\141\x63\143\x65\163\163\x20\141\154\x6c\x6f\167\x65\144");
class Dashboard_model extends CI_Model
{
    public function getSetting()
    {
        return $this->db->get("\x73\145\164\164\151\x6e\147")->row();
    }
    public function getRunningText()
    {
        return $this->db->get("\162\x75\x6e\x6e\x69\x6e\x67\x5f\164\x65\170\164")->result();
    }
    public function total($table, $where = null)
    {
        goto WB72H;
        XlSkQ:
        return $query;
        goto JbP62;
        rljsI:
        $this->db->where($where);
        goto VuXZe;
        WB72H:
        if (!($where != null)) {
            goto LZ6RP;
        }
        goto rljsI;
        VuXZe:
        LZ6RP:
        goto gLIET;
        gLIET:
        $query = $this->db->get($table)->num_rows();
        goto XlSkQ;
        JbP62:
    }
    public function hapus($table, $data, $pk)
    {
        $this->db->where_in($pk, $data);
        return $this->db->delete($table);
    }
    public function getProfileAdmin($id_user)
    {
        goto V8EDZ;
        ShyMs:
        $this->db->where("\141\56\x69\144", $id_user);
        goto kpdic;
        bjUrC:
        $this->db->from("\x75\163\x65\x72\163\x20\141");
        goto Aahx2;
        kpdic:
        $query = $this->db->get()->row();
        goto dpxZp;
        V8EDZ:
        $this->db->select("\142\56\52");
        goto bjUrC;
        Aahx2:
        $this->db->join("\x75\x73\x65\x72\x73\x5f\x70\x72\x6f\x66\x69\x6c\145\40\142", "\141\x2e\x69\x64\x3d\x62\56\151\144\137\x75\163\x65\x72", "\x6c\x65\146\x74");
        goto ShyMs;
        dpxZp:
        return $query;
        goto C09cp;
        C09cp:
    }
    public function totalWaliKelas()
    {
        $query = $this->get_where("\152\x61\142\x61\x74\x61\156\x5f\x67\x75\162\165", "\151\x64\x5f\x6a\x61\142\x61\164\141\156", "\64")->num_rows();
        return $query;
    }
    public function totalSiswaKelas($id_kelas, $id_tp, $id_smt)
    {
        goto PTZwW;
        mtSYK:
        $query = $this->db->get()->num_rows();
        goto ZFlT1;
        TBsmH:
        $this->db->from("\153\x65\x6c\x61\x73\137\163\x69\163\x77\x61\x20\x61");
        goto nlhKw;
        qHTk0:
        $this->db->where("\141\56\x69\144\x5f\x6b\145\154\141\x73", $id_kelas);
        goto mtSYK;
        ZFlT1:
        return $query;
        goto sYhu8;
        nlhKw:
        $this->db->where("\x61\56\x69\144\137\x74\160", $id_tp);
        goto zlfVV;
        PTZwW:
        $this->db->select("\141\56\x69\144\x5f\163\151\163\167\141");
        goto TBsmH;
        zlfVV:
        $this->db->where("\x61\56\151\144\137\x73\x6d\164", $id_smt);
        goto qHTk0;
        sYhu8:
    }
    public function totalPengawas()
    {
        goto GHnuE;
        jvm_s:
        return $query;
        goto LR5Vr;
        HV9nZ:
        $this->db->where("\x69\144\x5f\x6a\x61\x64\167\x61\x6c\x20\41\x3d", "\x61\x3a\60\x3a\173\x7d");
        goto c5W3t;
        GHnuE:
        $this->db->select("\x2a");
        goto HV9nZ;
        c5W3t:
        $query = $this->db->get("\143\x62\164\x5f\160\x65\156\147\141\x77\x61\x73")->num_rows();
        goto jvm_s;
        LR5Vr:
    }
    public function totalJadwal()
    {
        goto Wtf3E;
        uzuRT:
        $query = $this->db->get("\x63\x62\164\x5f\x6a\x61\x64\x77\x61\x6c")->num_rows();
        goto n0vNG;
        Wtf3E:
        $this->db->select("\52");
        goto uzuRT;
        n0vNG:
        return $query;
        goto xmsm3;
        xmsm3:
    }
    public function getDataTahun()
    {
        goto w7wVi;
        QUAP4:
        return $this->datatables->generate();
        goto bUy59;
        w7wVi:
        $this->datatables->select("\x69\x64\x5f\164\160\x2c\x20\x74\x61\150\x75\156\x2c\40\x61\x63\x74\x69\x76\x65");
        goto u4AXn;
        u4AXn:
        $this->datatables->from("\155\x61\x73\x74\145\x72\137\x74\160");
        goto QUAP4;
        bUy59:
    }
    public function getTahun()
    {
        goto d9hSe;
        egN8x:
        return $result;
        goto KauQU;
        UKyAu:
        $result = $this->db->get("\x6d\141\x73\x74\x65\x72\137\164\160")->result();
        goto egN8x;
        d9hSe:
        $this->db->order_by("\164\141\150\165\x6e", "\x41\123\x43");
        goto UKyAu;
        KauQU:
    }
    public function getTahunById($id)
    {
        $result = $this->db->get_where("\x6d\x61\163\x74\145\x72\137\164\160", "\151\144\137\x74\x70\75" . $id)->row();
        return $result;
    }
    public function getTahunByTahun($tahun)
    {
        $result = $this->db->get_where("\x6d\x61\163\x74\x65\x72\x5f\x74\160", "\x74\141\150\165\x6e\75" . "\x22" . $tahun . "\x22")->row();
        return $result;
    }
    public function getTahunActive()
    {
        goto QbXQA;
        cOraM:
        $this->db->from("\x6d\141\x73\164\x65\x72\x5f\x74\160");
        goto RiQlw;
        SLtrD:
        $result = $this->db->get()->row();
        goto SSC93;
        SSC93:
        return $result;
        goto ZvvAD;
        QbXQA:
        $this->db->select("\x69\x64\137\x74\x70\54\40\164\141\150\165\156");
        goto cOraM;
        RiQlw:
        $this->db->where("\x61\x63\164\x69\x76\145", 1);
        goto SLtrD;
        ZvvAD:
    }
    public function getSemester()
    {
        goto rzXTo;
        aFgw5:
        return $result;
        goto ph4TY;
        rzXTo:
        $this->db->order_by("\x73\155\164", "\101\123\x43");
        goto YjC5C;
        YjC5C:
        $result = $this->db->get("\x6d\141\x73\x74\145\x72\137\163\155\164")->result();
        goto aFgw5;
        ph4TY:
    }
    public function getSemesterById($id)
    {
        $result = $this->db->get_where("\155\141\163\x74\x65\162\137\x73\x6d\164", "\x69\x64\x5f\x73\155\x74\x3d" . $id)->row();
        return $result;
    }
    public function getSemesterByNama($nama_smt)
    {
        $result = $this->db->get_where("\x6d\x61\x73\164\145\162\137\163\x6d\x74", "\x6e\x61\x6d\141\137\163\x6d\164\75" . "\42" . $nama_smt . "\x22")->row();
        return $result;
    }
    public function getSemesterActive()
    {
        goto Cgc97;
        SFs5E:
        $this->db->from("\x6d\x61\163\164\x65\x72\137\163\x6d\164");
        goto kho8k;
        Cgc97:
        $this->db->select("\x69\144\137\163\x6d\x74\54\x20\x6e\x61\x6d\x61\x5f\x73\x6d\x74\x2c\40\163\x6d\164");
        goto SFs5E;
        kho8k:
        $this->db->where("\x61\143\164\151\x76\145", 1);
        goto AboyH;
        GqwtQ:
        return $result;
        goto w1BPh;
        AboyH:
        $result = $this->db->get()->row();
        goto GqwtQ;
        w1BPh:
    }
    public function getDataGuruByUserId($id_user, $id_tp, $id_smt)
    {
        goto nb3Pb;
        aVKYX:
        $query = $this->db->get()->row();
        goto VIj2y;
        ite2F:
        $this->db->join("\155\x61\x73\x74\145\x72\137\153\145\154\x61\163\x20\x66", "\141\56\151\144\x5f\x67\165\162\165\x3d\x66\x2e\147\x75\162\165\x5f\x69\x64\40\x41\116\104\40\x66\56\151\x64\137\164\160\75" . $id_tp . "\40\x41\x4e\x44\40\x66\56\x69\x64\x5f\163\x6d\164\75" . $id_smt, "\x6c\145\x66\164");
        goto YAFCl;
        VIj2y:
        return $query;
        goto IJCjo;
        w941E:
        $this->db->from("\x6d\141\163\x74\145\162\x5f\x67\x75\162\165\40\x61");
        goto cTvU8;
        cTvU8:
        $this->db->join("\x6a\x61\x62\x61\164\141\156\x5f\x67\x75\162\165\40\142", "\141\x2e\151\144\137\x67\165\x72\x75\x3d\142\56\151\x64\x5f\x67\165\x72\165\40\101\116\104\40\142\x2e\x69\144\137\164\160\75" . $id_tp . "\40\101\116\104\40\x62\x2e\151\144\137\x73\155\x74\75" . $id_smt, "\154\145\x66\164");
        goto mnbiD;
        YAFCl:
        $this->db->join("\154\145\166\145\154\x5f\153\145\154\x61\163\x20\x67", "\146\56\154\145\x76\145\154\x5f\151\x64\x3d\x67\56\x69\x64\137\154\145\x76\145\154", "\154\145\146\x74");
        goto q6nYd;
        q6nYd:
        $this->db->where("\x61\56\x69\144\137\165\163\145\x72", $id_user);
        goto aVKYX;
        yvUx0:
        $this->db->select("\141\x2e\151\x64\x5f\x67\165\162\x75\x2c\40\x61\56\156\141\155\141\x5f\x67\165\162\x75\x2c\40\x61\x2e\156\x69\160\54\40\141\x2e\x69\x64\x5f\x75\163\145\x72\x2c\40\x61\56\x66\157\x74\x6f\54\x20\142\x2e\x69\144\x5f\x6a\141\x62\141\x74\141\156\54\x20\x62\56\x69\144\137\153\x65\154\x61\x73\40\x61\x73\40\167\141\x6c\x69\x5f\x6b\145\154\x61\163\x2c\x20\146\x2e\x6c\x65\x76\x65\154\x5f\151\144\54\40\147\x2e\x6c\x65\166\145\154");
        goto w941E;
        nb3Pb:
        $this->db->query("\x53\105\x54\40\123\121\x4c\137\x42\x49\107\x5f\123\x45\x4c\x45\x43\124\x53\75\x31");
        goto yvUx0;
        mnbiD:
        $this->db->join("\154\x65\x76\x65\x6c\137\x67\165\x72\165\40\x65", "\x62\56\151\144\137\152\x61\x62\x61\x74\141\156\x3d\145\x2e\x69\x64\137\x6c\145\x76\145\154", "\154\x65\x66\x74");
        goto ite2F;
        IJCjo:
    }
    public function getDataGuruById($id_guru, $id_tp, $id_smt)
    {
        goto tllwV;
        tllwV:
        $this->db->query("\123\x45\x54\40\123\121\x4c\137\102\x49\107\137\123\x45\114\x45\x43\124\x53\75\61");
        goto f6vLo;
        gumoR:
        $this->db->where("\141\56\151\x64\x5f\x67\165\162\165", $id_guru);
        goto M29Bd;
        uts3y:
        $this->db->join("\154\x65\x76\x65\x6c\x5f\x67\165\x72\165\40\x65", "\x62\56\x69\x64\x5f\x6a\141\x62\141\x74\141\156\75\145\56\x69\x64\x5f\154\145\x76\145\x6c", "\154\145\x66\x74");
        goto qT2gQ;
        f6vLo:
        $this->db->select("\x61\x2e\x69\x64\137\147\165\x72\x75\54\40\141\x2e\x6e\141\155\x61\137\147\165\162\165\54\x20\141\56\156\151\160\x2c\40\x61\x2e\x69\144\x5f\165\163\145\162\54\x20\141\56\x66\157\164\157\x2c\x20\142\56\x69\x64\x5f\x6a\141\142\x61\164\x61\156\x2c\x20\x62\x2e\x69\x64\137\153\x65\154\x61\x73\40\x61\x73\40\x77\141\x6c\x69\x5f\x6b\145\154\x61\x73\54\40\146\x2e\x6c\x65\x76\x65\x6c\x5f\151\144\54\x20\x67\x2e\x6c\145\x76\x65\x6c");
        goto gsmh_;
        gsmh_:
        $this->db->from("\155\x61\x73\164\x65\x72\137\147\165\162\x75\40\141");
        goto cHqsl;
        yu5Uq:
        $this->db->join("\x6c\x65\166\145\x6c\137\153\145\154\x61\x73\x20\147", "\x66\x2e\x6c\x65\x76\x65\154\x5f\151\x64\x3d\147\56\x69\x64\x5f\x6c\x65\166\145\x6c", "\x6c\x65\146\x74");
        goto gumoR;
        qT2gQ:
        $this->db->join("\155\x61\x73\164\145\162\x5f\153\x65\154\x61\163\x20\146", "\141\x2e\x69\144\137\x67\165\x72\x75\75\x66\x2e\147\165\x72\165\x5f\151\144\40\x41\x4e\x44\x20\x66\x2e\x69\144\x5f\x74\x70\75" . $id_tp . "\x20\101\116\x44\40\146\56\x69\x64\x5f\x73\155\x74\x3d" . $id_smt, "\154\145\x66\x74");
        goto yu5Uq;
        M29Bd:
        $query = $this->db->get()->row();
        goto dCimI;
        dCimI:
        return $query;
        goto MK2ab;
        cHqsl:
        $this->db->join("\152\141\142\141\164\141\156\137\147\165\x72\165\x20\142", "\x61\56\151\x64\x5f\x67\x75\162\x75\x3d\142\56\x69\x64\x5f\x67\x75\162\165\x20\101\x4e\x44\x20\x62\x2e\151\x64\137\x74\x70\x3d" . $id_tp . "\40\x41\x4e\x44\40\142\x2e\151\x64\x5f\163\155\164\x3d" . $id_smt, "\154\145\x66\x74");
        goto uts3y;
        MK2ab:
    }
    public function getListGuruByUserId($id_tp, $id_smt)
    {
        goto kBF_k;
        DxPZq:
        JWu5T:
        goto jPlxs;
        fe2i8:
        $this->db->select("\x61\x2e\151\x64\137\x67\165\162\x75\x2c\x20\x61\x2e\156\x61\155\141\137\x67\165\162\165\x2c\x20\141\56\151\144\137\165\x73\145\162\54\40\141\x2e\x66\157\x74\157\x2c\40\x62\x2e\x69\144\137\152\141\142\x61\164\x61\x6e\x2c\40\142\x2e\x69\x64\x5f\x6b\x65\154\141\x73\x20\141\163\40\x77\x61\154\151\137\153\145\x6c\x61\x73\54\40\x66\x2e\154\x65\x76\x65\154\x5f\151\x64\x2c\x20\x67\x2e\x6c\x65\166\x65\154");
        goto Btvno;
        D0a1_:
        foreach ($query as $guru) {
            $rest[$guru->id_guru] = $guru;
            hiWKH:
        }
        goto DxPZq;
        WNSw0:
        $rest = [];
        goto D0a1_;
        PLjU1:
        $this->db->join("\x6d\x61\163\164\145\x72\137\153\x65\154\141\163\40\x66", "\x61\x2e\x69\x64\137\147\x75\162\x75\x3d\x66\x2e\147\165\x72\x75\x5f\151\x64\40\101\116\104\40\x66\x2e\x69\144\x5f\164\x70\x3d" . $id_tp . "\40\x41\116\104\40\146\x2e\x69\144\137\x73\155\x74\75" . $id_smt, "\154\x65\146\164");
        goto rKZY5;
        rKZY5:
        $this->db->join("\154\x65\x76\145\x6c\x5f\x6b\x65\x6c\141\163\40\147", "\146\x2e\x6c\x65\x76\145\x6c\137\151\144\75\x67\x2e\151\144\137\154\145\x76\145\154", "\154\x65\146\x74");
        goto XEPM1;
        YAoPm:
        $this->db->join("\152\141\142\141\x74\x61\x6e\x5f\x67\x75\x72\165\40\142", "\x61\x2e\x69\144\137\147\165\162\x75\x3d\142\56\x69\144\137\x67\165\162\x75\x20\x41\x4e\104\40\x62\x2e\151\144\137\164\160\x3d" . $id_tp . "\x20\101\x4e\x44\40\x62\56\151\144\137\163\x6d\x74\x3d" . $id_smt, "\154\145\146\x74");
        goto cyhXA;
        XEPM1:
        $query = $this->db->get()->result();
        goto WNSw0;
        kBF_k:
        $this->db->query("\123\105\x54\x20\123\x51\114\x5f\x42\x49\107\137\x53\105\114\x45\103\124\123\75\x31");
        goto fe2i8;
        cyhXA:
        $this->db->join("\x6c\145\x76\x65\x6c\x5f\x67\165\162\x75\40\145", "\x62\x2e\151\144\x5f\x6a\141\142\141\x74\141\156\x3d\x65\x2e\x69\144\x5f\154\145\166\x65\154", "\154\x65\x66\x74");
        goto PLjU1;
        jPlxs:
        return $rest;
        goto m4IeM;
        Btvno:
        $this->db->from("\155\x61\x73\164\145\x72\137\147\x75\162\165\40\141");
        goto YAoPm;
        m4IeM:
    }
    public function getDetailGuruByUserId($id_user, $id_tp, $id_smt)
    {
        goto cyiov;
        RjOmj:
        $this->db->select("\x2a");
        goto M_Jko;
        r2Qpx:
        $query = $this->db->get()->row();
        goto PsInn;
        Kl6RE:
        $this->db->join("\x6a\141\x62\141\164\141\x6e\x5f\x67\x75\162\165\40\x62", "\x61\56\x69\144\x5f\x67\x75\162\x75\75\142\56\151\144\x5f\x67\165\x72\165\x20\101\116\104\40\142\56\151\144\x5f\164\x70\75" . $id_tp . "\x20\x41\116\x44\x20\142\56\x69\x64\x5f\163\x6d\164\x3d" . $id_smt, "\154\145\146\x74");
        goto MUoky;
        M_Jko:
        $this->db->from("\x6d\x61\163\164\x65\162\x5f\x67\165\x72\165\40\x61");
        goto Kl6RE;
        cyiov:
        $this->db->query("\x53\105\x54\x20\123\121\x4c\137\x42\x49\107\137\x53\x45\114\x45\x43\124\123\x3d\x31");
        goto RjOmj;
        Buviq:
        $this->db->where("\x61\x2e\x69\144\x5f\165\x73\145\162", $id_user);
        goto r2Qpx;
        PsInn:
        return $query;
        goto C70kY;
        MUoky:
        $this->db->join("\154\145\166\x65\154\x5f\x67\165\x72\x75\x20\x65", "\x62\56\151\144\137\152\141\142\141\x74\x61\x6e\75\145\x2e\x69\x64\x5f\154\145\x76\145\x6c", "\x6c\x65\x66\164");
        goto AoUG0;
        AoUG0:
        $this->db->join("\x6d\141\163\164\145\162\x5f\153\145\154\141\x73\x20\x66", "\141\56\x69\x64\x5f\147\x75\162\x75\75\146\x2e\x67\x75\162\x75\x5f\151\144\40\x41\116\104\40\146\x2e\151\144\x5f\164\x70\75" . $id_tp . "\40\101\x4e\x44\40\146\x2e\151\144\x5f\x73\x6d\x74\75" . $id_smt, "\x6c\145\x66\164");
        goto Buviq;
        C70kY:
    }
    public function getKelasByMapel($id_mapel = null)
    {
        goto baf2C;
        YdMTp:
        $this->db->join("\x6c\x65\166\145\x6c\137\147\x75\162\165\40\144", "\141\56\x6c\145\x76\145\x6c\x5f\x69\144\75\x64\x2e\151\x64\137\154\145\x76\x65\x6c", "\x6c\145\146\164");
        goto WF2v_;
        RY1Kd:
        $this->db->from("\x6d\141\163\x74\x65\162\137\x6b\145\154\x61\163");
        goto VGKF5;
        WF2v_:
        $query = $this->db->get()->row();
        goto Ag4fI;
        VGKF5:
        $this->db->join("\155\x61\163\164\x65\x72\137\155\141\160\145\x6c\x20\142", "\141\x2e\155\x61\x70\x65\154\x5f\151\x64\75\142\x2e\x69\x64\137\x6d\x61\160\145\154", "\154\x65\146\164");
        goto YdMTp;
        EBMIK:
        $this->db->select("\x2a");
        goto RY1Kd;
        Ag4fI:
        return $query;
        goto orld3;
        baf2C:
        $this->db->query("\x53\105\124\x20\x53\x51\x4c\137\102\111\107\x5f\123\105\114\105\103\x54\123\x3d\61");
        goto EBMIK;
        orld3:
    }
    public function get_where($table, $pk, $id, $join = null, $order = null)
    {
        goto bd1yW;
        ykAQ8:
        foreach ($order as $field => $sort) {
            $this->db->order_by($field, $sort);
            NzTEa:
        }
        goto QrX_i;
        pv0ws:
        $this->db->where($pk, $id);
        goto MU0v0;
        bd1yW:
        $this->db->select("\52");
        goto SJSlz;
        vKQ2y:
        Ts4J0:
        goto i4uoP;
        QrX_i:
        KoNhw:
        goto zQz0B;
        i4uoP:
        BhvNR:
        goto dpb7u;
        MU0v0:
        if (!($join !== null)) {
            goto BhvNR;
        }
        goto CFQG7;
        Xtd0b:
        return $query;
        goto z1RDH;
        zQz0B:
        A3jpI:
        goto GWQMi;
        CFQG7:
        foreach ($join as $table => $field) {
            $this->db->join($table, $field);
            xZefO:
        }
        goto vKQ2y;
        SJSlz:
        $this->db->from($table);
        goto pv0ws;
        GWQMi:
        $query = $this->db->get();
        goto Xtd0b;
        dpb7u:
        if (!($order !== null)) {
            goto A3jpI;
        }
        goto ykAQ8;
        z1RDH:
    }
    public function create($table, $data)
    {
        $insert = $this->db->insert($table, $data);
        return $insert;
    }
    public function update($table, $data, $pk, $id = null, $batch = false)
    {
        goto yQJRV;
        ef_hm:
        $insert = $this->db->update($table, $data, array($pk => $id));
        goto HSXHq;
        fXojw:
        $insert = $this->db->update_batch($table, $data, $pk);
        goto nSAku;
        HLhKG:
        kLSpU:
        goto ef_hm;
        nSAku:
        goto WBxcX;
        goto HLhKG;
        HSXHq:
        WBxcX:
        goto zJL50;
        yQJRV:
        if ($batch === false) {
            goto kLSpU;
        }
        goto fXojw;
        zJL50:
        return $insert;
        goto Pi6ws;
        Pi6ws:
    }
    public function getDataSiswa($username, $id_tp, $id_smt)
    {
        goto yUulX;
        pWBmZ:
        $query = $this->db->get()->row();
        goto nAbel;
        WbGOt:
        $this->db->where("\165\163\x65\162\x6e\141\155\145", $username);
        goto pWBmZ;
        WGABw:
        $this->db->join("\x6b\145\154\x61\163\137\x73\x69\163\x77\x61\x20\x62", "\x61\56\x69\x64\x5f\163\x69\163\x77\141\75\x62\56\151\144\137\163\151\x73\x77\x61\40\101\116\104\40\142\56\151\144\x5f\x74\x70\75" . $id_tp . "\x20\101\116\x44\40\x62\x2e\x69\144\x5f\x73\x6d\x74\x3d" . $id_smt, "\154\145\x66\x74");
        goto vzymv;
        nUh15:
        $this->db->from("\155\x61\163\164\145\x72\137\x73\x69\x73\167\141\40\x61");
        goto WGABw;
        HjtZV:
        $this->db->select("\x2a");
        goto nUh15;
        g8Zod:
        $this->db->join("\x63\x62\x74\x5f\163\x65\163\151\137\x73\151\x73\x77\x61\x20\144", "\141\56\151\144\137\163\151\163\x77\x61\x3d\144\x2e\x73\x69\x73\x77\x61\x5f\x69\x64", "\154\x65\146\164");
        goto WbGOt;
        vzymv:
        $this->db->join("\155\141\x73\164\x65\x72\137\153\145\x6c\x61\x73\40\x63", "\142\56\x69\x64\x5f\153\x65\154\x61\163\75\143\x2e\151\x64\137\x6b\145\x6c\x61\163\40\101\116\x44\x20\143\x2e\x69\x64\x5f\x74\160\x3d" . $id_tp . "\x20\x41\x4e\104\40\143\56\x69\144\x5f\x73\155\164\75" . $id_smt, "\154\x65\146\x74");
        goto g8Zod;
        nAbel:
        return $query;
        goto gidE2;
        yUulX:
        $this->db->query("\x53\105\124\40\x53\x51\114\137\x42\111\107\137\123\105\114\105\103\x54\x53\x3d\x31");
        goto HjtZV;
        gidE2:
    }
    public function loadPengumuman($id_for)
    {
        goto H2Odk;
        IYg7J:
        $this->db->join("\155\x61\x73\x74\145\x72\x5f\x67\165\162\165\40\x62", "\141\x2e\144\141\x72\x69\x3d\142\56\x69\144\x5f\147\165\162\165", "\x6c\x65\x66\x74");
        goto ZG52W;
        gI83G:
        $this->db->from("\160\145\x6e\147\165\x6d\x75\x6d\x61\x6e\x20\141");
        goto IYg7J;
        H2Odk:
        $this->db->select("\141\x2e\x2a\x2c\40\x62\56\156\141\x6d\x61\137\147\165\x72\165\54\40\x62\56\x66\x6f\164\157");
        goto gI83G;
        RPgKT:
        return $query;
        goto Wi3Gq;
        ZG52W:
        $this->db->where("\x6b\145\x70\141\144\x61", $id_for);
        goto PYFR1;
        PYFR1:
        $query = $this->db->get()->result();
        goto RPgKT;
        Wi3Gq:
    }
    public function loadJadwalHariIni($id_tp, $id_smt, $id_kelas = null, $id_hari = null)
    {
        goto eY2fp;
        Qp4vy:
        $this->db->where("\x61\56\151\x64\x5f\x6b\x65\x6c\141\163", $id_kelas);
        goto DCqvq;
        Uonw4:
        return $query;
        goto x_qg_;
        Kl5eH:
        if (!($id_kelas != null)) {
            goto OhZ20;
        }
        goto Qp4vy;
        zDJ21:
        $this->db->where("\141\56\151\x64\137\x68\x61\x72\x69", $id_hari);
        goto n1R1A;
        FL3ZI:
        $this->db->join("\x6d\141\163\x74\x65\x72\137\x6d\141\x70\x65\154\40\x62", "\142\x2e\x69\x64\137\155\x61\160\145\154\75\x61\56\151\144\137\155\x61\x70\x65\154", "\154\145\146\x74");
        goto Yx1tb;
        DCqvq:
        OhZ20:
        goto RijNQ;
        eY2fp:
        $this->db->select("\x2a");
        goto ld89B;
        Nj70E:
        $query = $this->db->get()->result();
        goto Uonw4;
        n1R1A:
        SPyyA:
        goto Nj70E;
        Yx1tb:
        $this->db->where("\141\x2e\x69\144\x5f\x74\160", $id_tp);
        goto GoQh6;
        RijNQ:
        if (!($id_hari != null)) {
            goto SPyyA;
        }
        goto zDJ21;
        GoQh6:
        $this->db->where("\x61\x2e\151\144\x5f\163\155\x74", $id_smt);
        goto Kl5eH;
        ld89B:
        $this->db->from("\153\145\154\141\163\x5f\x6a\141\144\167\x61\154\x5f\x6d\141\160\145\x6c\40\141");
        goto FL3ZI;
        x_qg_:
    }
    public function getJadwalKbm($id_tp, $id_smt, $id_kelas = null)
    {
        goto UdF1u;
        AH1Jv:
        DggbL:
        goto g0QaC;
        g0QaC:
        return $query;
        goto Et893;
        F2FfQ:
        $query = $this->db->get()->row();
        goto AH1Jv;
        OPnGF:
        $this->db->where("\151\x64\137\x74\x70", $id_tp);
        goto GUpMX;
        v7gcW:
        $query = $this->db->get()->result();
        goto aHCxQ;
        b9jmQ:
        Vna3Z:
        goto qnQsD;
        lVWF1:
        if ($id_kelas != null) {
            goto Vna3Z;
        }
        goto v7gcW;
        UdF1u:
        $this->db->select("\x2a");
        goto QJzSx;
        qnQsD:
        $this->db->where("\151\x64\x5f\153\145\x6c\x61\x73", $id_kelas);
        goto F2FfQ;
        aHCxQ:
        goto DggbL;
        goto b9jmQ;
        QJzSx:
        $this->db->from("\153\x65\x6c\141\163\x5f\152\141\x64\x77\141\154\137\x6b\x62\155");
        goto OPnGF;
        GUpMX:
        $this->db->where("\x69\144\137\x73\x6d\164", $id_smt);
        goto lVWF1;
        Et893:
    }
}
