<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\101\x53\105\x50\101\124\x48") or exit("\x4e\x6f\40\144\151\x72\145\143\164\x20\x73\x63\x72\151\160\164\40\141\x63\143\x65\x73\x73\40\141\x6c\154\157\x77\145\144");
class Users_model extends CI_Model
{
    public function getDatausers($id = null)
    {
        goto ggGqp;
        QDiAY:
        $this->datatables->select("\165\x73\145\162\163\56\x69\x64\54\x20\165\163\x65\x72\156\x61\155\x65\54\40\146\151\x72\163\164\137\x6e\x61\155\x65\x2c\x20\154\x61\x73\x74\x5f\x6e\141\155\x65\x2c\x20\145\x6d\x61\151\154\54\40\106\122\x4f\115\137\x55\116\x49\x58\124\x49\x4d\105\x28\x63\162\x65\141\x74\x65\x64\137\157\156\x29\40\141\163\40\143\162\x65\x61\x74\145\x64\137\157\x6e\x2c\x20\x6c\x61\163\x74\137\154\157\x67\151\x6e\54\x20\x61\x63\x74\x69\166\x65\x2c\x20\147\162\x6f\165\160\x73\56\156\x61\155\145\x20\141\163\x20\x6c\145\166\x65\x6c");
        goto dUybH;
        N5KsF:
        if (!($id !== null)) {
            goto tdxzW;
        }
        goto sYE2F;
        ofP3I:
        $this->datatables->join("\147\162\157\165\160\x73", "\165\x73\x65\162\163\137\x67\x72\x6f\165\160\x73\x2e\147\x72\157\x75\x70\x5f\x69\x64\75\x67\162\157\165\160\163\56\x69\x64");
        goto N5KsF;
        NwDS1:
        tdxzW:
        goto sTEnp;
        bNBSZ:
        $this->datatables->join("\x75\163\145\162\x73", "\165\163\145\162\x73\137\147\x72\x6f\165\160\163\56\x75\x73\x65\x72\137\151\144\x3d\165\163\145\162\x73\56\x69\144");
        goto ofP3I;
        dUybH:
        $this->datatables->from("\165\163\145\x72\x73\x5f\147\162\157\x75\160\163");
        goto bNBSZ;
        sYE2F:
        $this->datatables->where("\165\x73\145\x72\x73\x2e\151\x64\40\41\75", $id);
        goto NwDS1;
        sTEnp:
        return $this->datatables->generate();
        goto eX4ef;
        ggGqp:
        $this->db->query("\123\105\x54\40\123\121\x4c\137\102\111\x47\x5f\x53\105\114\x45\x43\x54\123\x3d\61");
        goto QDiAY;
        eX4ef:
    }
    public function getLevelGuru()
    {
        $query = $this->db->get("\x6c\145\x76\145\154\x5f\147\x75\162\165")->result();
        return $query;
    }
    public function getDataadmin()
    {
        goto JCqE0;
        qKadi:
        $this->datatables->where("\147\x72\x6f\x75\x70\x5f\x69\x64\x20\x3d", 1);
        goto LaClf;
        EImFA:
        $this->datatables->from("\165\x73\x65\162\163\137\147\162\157\x75\160\163");
        goto XMP6s;
        w2xV2:
        $this->datatables->join("\147\162\x6f\165\x70\163", "\x75\163\x65\162\163\137\x67\162\157\165\160\163\x2e\147\162\x6f\x75\x70\x5f\151\144\75\x67\162\157\x75\160\x73\56\x69\144");
        goto qKadi;
        R0iR8:
        $this->datatables->select("\x75\163\145\x72\163\56\x69\144\x2c\x20\x75\163\x65\162\156\141\x6d\x65\x2c\40\x66\x69\162\163\164\x5f\x6e\141\x6d\x65\x2c\40\x6c\141\163\164\x5f\156\141\155\x65\54\x20\145\x6d\141\x69\x6c\54\40\106\122\x4f\x4d\137\125\116\111\x58\124\x49\x4d\x45\50\x63\162\145\141\164\145\144\x5f\x6f\x6e\x29\40\141\x73\x20\x63\162\145\141\x74\x65\144\x5f\x6f\x6e\54\x20\x6c\x61\x73\x74\x5f\x6c\x6f\147\x69\x6e\x2c\40\x61\x63\164\151\166\x65\54\x20\147\x72\x6f\165\160\x73\x2e\x6e\141\155\x65\x20\141\163\x20\154\145\x76\x65\154");
        goto EImFA;
        XMP6s:
        $this->datatables->join("\x75\x73\x65\162\x73", "\165\163\145\x72\x73\137\147\x72\x6f\165\160\x73\x2e\x75\163\x65\x72\137\151\144\75\x75\x73\x65\162\x73\56\x69\x64");
        goto w2xV2;
        JCqE0:
        $this->db->query("\123\105\124\40\123\x51\x4c\137\102\111\107\x5f\x53\105\x4c\105\103\124\123\x3d\x31");
        goto R0iR8;
        LaClf:
        return $this->datatables->generate();
        goto ykUCT;
        ykUCT:
    }
    public function getUserGuru($tp, $smt)
    {
        goto EWSdq;
        EWSdq:
        $this->db->query("\123\x45\124\40\123\121\114\137\102\111\107\137\x53\105\114\x45\103\124\123\75\61");
        goto gVj_4;
        B1i41:
        $this->datatables->join("\165\x73\145\162\163\x20\145", "\x61\56\165\163\x65\162\156\x61\155\x65\x3d\x65\56\x75\x73\145\162\156\141\155\x65", "\x6c\x65\x66\164");
        goto h5wZe;
        rEg1r:
        $this->datatables->join("\x6c\145\x76\145\154\137\x67\x75\162\x75\x20\x63", "\142\56\x69\144\x5f\x6a\141\142\141\x74\141\x6e\75\x63\x2e\151\144\x5f\x6c\145\166\145\154", "\x6c\145\146\164");
        goto B1i41;
        AmuN1:
        $this->datatables->from("\155\141\163\x74\145\162\137\147\165\x72\165\x20\141");
        goto GzjMC;
        gVj_4:
        $this->datatables->select("\141\56\151\144\137\x67\x75\x72\165\x2c\x20\141\56\156\x61\155\141\137\x67\x75\x72\165\x2c\40\x61\56\165\x73\145\162\x6e\141\x6d\145\54\40\141\x2e\160\x61\x73\x73\x77\x6f\162\144\x2c\x20\143\56\x6c\x65\x76\x65\154\x2c\40\x65\x2e\x69\144\54\x20\x28\x53\105\x4c\x45\x43\124\40\x43\x4f\125\x4e\124\x28\151\x64\x29\40\106\x52\117\115\40\x75\x73\145\x72\x73\40\x57\110\x45\x52\x45\40\x65\56\x75\163\145\x72\x6e\141\x6d\145\x20\75\x20\141\56\x75\x73\x65\162\x6e\141\155\145\51\x20\x41\x53\x20\x61\x6b\x74\151\x66");
        goto AmuN1;
        h5wZe:
        return $this->datatables->generate();
        goto L6GfO;
        GzjMC:
        $this->datatables->join("\152\x61\x62\141\x74\x61\156\x5f\147\x75\x72\165\x20\142", "\141\56\x69\144\137\x67\165\x72\x75\x3d\x62\x2e\x69\x64\137\147\165\162\165\40\x41\116\x44\x20\x62\x2e\x69\144\137\164\160\x3d" . $tp . "\40\101\x4e\104\40\x62\56\151\144\x5f\x73\x6d\x74\75" . $smt . '', "\154\x65\146\164");
        goto rEg1r;
        L6GfO:
    }
    public function getDataGuru($id)
    {
        goto E9rZQ;
        bFWSR:
        $this->db->where("\151\x64\137\147\165\162\165", $id);
        goto Aul2z;
        rwU_d:
        $this->db->from("\155\x61\163\x74\145\x72\137\147\x75\x72\165");
        goto bFWSR;
        QeMnG:
        return $query;
        goto SLsJZ;
        Aul2z:
        $query = $this->db->get()->row();
        goto QeMnG;
        E9rZQ:
        $this->db->select("\x2a");
        goto rwU_d;
        SLsJZ:
    }
    public function getDetailGuru($id)
    {
        goto E7IGf;
        eh3Ww:
        $this->db->join("\x75\163\145\x72\x73\40\x65", "\x61\x2e\165\x73\145\x72\x6e\141\155\145\75\145\x2e\x75\163\x65\x72\x6e\141\155\x65", "\154\x65\x66\164");
        goto Tr3xk;
        I5lUW:
        $this->db->from("\155\141\x73\x74\x65\x72\137\x67\165\x72\165\x20\x61");
        goto C9t9l;
        E7IGf:
        $this->db->query("\x53\105\124\40\x53\x51\x4c\137\x42\111\x47\137\123\x45\x4c\105\x43\x54\123\x3d\61");
        goto Rxgwl;
        geg9h:
        return $query;
        goto IjS7f;
        HhlfU:
        $this->db->join("\x6c\145\x76\x65\x6c\x5f\147\x75\162\165\40\x63", "\142\56\151\x64\137\152\x61\142\141\x74\141\156\x3d\x63\x2e\x69\x64\x5f\154\x65\166\x65\x6c", "\x6c\145\x66\x74");
        goto eh3Ww;
        C9t9l:
        $this->db->join("\152\141\x62\141\x74\141\x6e\x5f\147\165\x72\x75\40\x62", "\x61\56\151\144\x5f\x67\x75\162\165\75\142\56\x69\x64\x5f\147\x75\x72\x75", "\154\145\x66\164");
        goto HhlfU;
        Tr3xk:
        $this->db->where("\x61\x2e\151\x64\137\147\165\x72\165", $id);
        goto UPNA1;
        Rxgwl:
        $this->db->select("\141\x2e\151\x64\x5f\147\x75\x72\165\54\x20\141\x2e\x6e\x61\x6d\x61\x5f\x67\165\x72\165\54\x20\141\56\x75\x73\x65\x72\156\x61\155\145\54\x20\x61\56\x70\x61\163\x73\x77\157\162\x64\x2c\40\x61\x2e\145\155\x61\x69\154\54\x20\143\x2e\x6c\145\x76\145\x6c\54\40\x65\56\x69\144\54\40\x28\123\105\114\x45\103\x54\40\103\x4f\x55\116\x54\x28\x69\144\x29\40\x46\x52\117\115\x20\x75\x73\x65\x72\163\40\127\x48\x45\x52\105\40\145\56\x75\163\x65\162\156\141\155\x65\40\x3d\40\x61\x2e\165\x73\x65\x72\156\x61\x6d\145\x29\40\x41\x53\x20\x61\153\164\151\146");
        goto I5lUW;
        UPNA1:
        $query = $this->db->get()->row();
        goto geg9h;
        IjS7f:
    }
    public function getGuruByUsername($username)
    {
        goto pPa7k;
        pPa7k:
        $this->db->where("\x75\163\x65\x72\x6e\x61\x6d\x65", $username);
        goto ScKP8;
        ScKP8:
        $query = $this->db->get("\155\x61\163\164\145\x72\137\147\x75\162\165")->row();
        goto JMLgt;
        JMLgt:
        return $query;
        goto So1Ck;
        So1Ck:
    }
    public function getSiswaByUsername($username)
    {
        goto xshmP;
        os62l:
        $query = $this->db->get("\x6d\x61\x73\x74\145\162\x5f\x73\151\163\167\x61")->row();
        goto s4gqx;
        xshmP:
        $this->db->where("\165\x73\x65\162\x6e\x61\155\x65", $username);
        goto os62l;
        s4gqx:
        return $query;
        goto xdmXw;
        xdmXw:
    }
    public function getUsers($username)
    {
        goto nDaEq;
        OD7fB:
        return $query;
        goto hWkuk;
        nDaEq:
        $this->db->where("\165\163\145\x72\x6e\141\155\x65", $username);
        goto yUUgA;
        yUUgA:
        $query = $this->db->get("\x75\163\145\162\x73")->row();
        goto OD7fB;
        hWkuk:
    }
    public function getGroupSiswa()
    {
        goto PjBjA;
        PjBjA:
        $this->db->select("\x2a");
        goto t4unt;
        vxC4U:
        $this->db->join("\165\x73\x65\162\163\40\x62", "\x61\x2e\165\x73\145\x72\137\x69\144\x3d\x62\x2e\x69\x64", "\x6c\145\146\164");
        goto Fcqqn;
        Fcqqn:
        $this->db->where("\147\x72\x6f\165\160\x5f\151\144", 3);
        goto CaVRM;
        yEVej:
        return $query;
        goto HhU5e;
        t4unt:
        $this->db->from("\165\163\145\162\163\x5f\147\162\157\x75\160\x73\40\x61");
        goto vxC4U;
        CaVRM:
        $query = $this->db->get()->result();
        goto yEVej;
        HhU5e:
    }
    public function getKelas($tp, $smt)
    {
        goto YUC5V;
        ehNLA:
        $this->db->where("\151\144\x5f\x73\x6d\x74", $smt);
        goto aSpU5;
        YUC5V:
        $this->db->where("\x69\x64\137\164\160", $tp);
        goto ehNLA;
        aSpU5:
        $query = $this->db->get("\x6d\x61\x73\164\145\x72\x5f\x6b\x65\154\141\x73")->result();
        goto pwtbK;
        pwtbK:
        return $query;
        goto ii3SU;
        ii3SU:
    }
    public function getMapel()
    {
        $query = $this->db->get("\155\x61\163\164\145\x72\x5f\x6d\141\x70\x65\154")->result();
        return $query;
    }
    public function getUserSiswaPage($id_tp, $id_smt, $offset, $limit, $search = null, $sort = null, $order = null)
    {
        goto Pem3v;
        Crfr4:
        $this->db->or_like("\141\56\156\x69\163", $search);
        goto Ws5Z0;
        ptJK1:
        $this->db->like("\141\56\156\141\155\x61", $search);
        goto Crfr4;
        k11Il:
        $this->db->from("\x6d\141\163\x74\x65\162\x5f\x73\151\x73\x77\141\40\x61");
        goto o2co0;
        E1vwt:
        $this->db->join("\x6b\145\x6c\x61\163\x5f\163\x69\163\167\141\x20\144", "\x64\x2e\x69\x64\x5f\163\151\163\167\141\75\x61\x2e\x69\144\137\163\151\163\x77\x61\x20\101\x4e\104\x20\144\x2e\151\x64\x5f\164\160\40\x3d\40" . $id_tp . "\x20\101\116\104\x20\144\x2e\x69\144\137\x73\155\164\x20\x3d\40" . $id_smt . '', "\154\x65\x66\164");
        goto Ivbt1;
        jG105:
        $this->db->order_by("\111\123\116\x55\x4c\x4c\x28\x66\x2e\154\145\166\145\x6c\x5f\x69\144\51\54\40\146\x2e\154\145\166\x65\x6c\x5f\x69\x64\x20\101\x53\103");
        goto DgQRk;
        DgQRk:
        $this->db->order_by("\x66\56\156\141\155\141\x5f\153\x65\x6c\141\x73", "\101\x53\103");
        goto OiDPq;
        WdDfk:
        return $this->db->get()->result();
        goto uEAOQ;
        o2co0:
        $this->db->limit($limit, $offset);
        goto E1vwt;
        fCNSZ:
        iTzEP:
        goto WdDfk;
        Ws5Z0:
        $this->db->or_like("\141\56\x6e\151\x73\156", $search);
        goto fCNSZ;
        Pem3v:
        $this->db->select("\141\x2e\x69\x64\x5f\163\151\163\167\x61\54\40\141\56\156\x69\163\x2c\40\x61\x2e\146\x6f\x74\x6f\x2c\40\141\x2e\156\141\155\141\x2c\x20\x61\56\165\163\x65\162\x6e\x61\155\145\x2c\x20\x61\x2e\160\141\x73\x73\167\x6f\162\144\x2c\40\144\56\x69\144\137\x6b\145\x6c\141\163\x2c\40" . "\146\x2e\156\x61\x6d\x61\137\153\x65\x6c\141\163\54\x20\x28\123\x45\114\105\103\124\x20\x43\117\x55\x4e\124\50\x69\x64\x29\40\106\x52\x4f\x4d\x20\165\163\145\162\163\40\x57\x48\x45\x52\x45\x20\165\163\x65\162\163\x2e\165\x73\145\x72\156\141\x6d\145\40\x3d\x20\x61\56\165\163\145\x72\x6e\x61\x6d\x65\x29\x20\101\123\x20\x61\x6b\x74\151\146");
        goto k11Il;
        AKNZ6:
        if (!($search != null)) {
            goto iTzEP;
        }
        goto ptJK1;
        Ivbt1:
        $this->db->join("\155\x61\x73\164\x65\162\x5f\x6b\x65\154\x61\x73\x20\x66", "\146\56\151\144\x5f\x6b\x65\x6c\x61\163\75\x64\x2e\151\x64\x5f\153\145\x6c\x61\x73", "\x6c\x65\146\164");
        goto jG105;
        OiDPq:
        $this->db->order_by("\141\x2e\x6e\141\x6d\141", "\101\123\x43");
        goto AKNZ6;
        uEAOQ:
    }
    public function getUserSiswaTotalPage($search = null)
    {
        goto MNT2U;
        FWkIJ:
        TGVtl:
        goto Os3CX;
        sklC5:
        $this->db->from("\x6d\x61\163\164\x65\x72\x5f\163\x69\163\x77\x61");
        goto JLud3;
        Jju3H:
        $this->db->like("\x6e\141\x6d\141", $search);
        goto xAy4Y;
        vaYMP:
        $this->db->or_like("\156\151\x73\156", $search);
        goto FWkIJ;
        Os3CX:
        return $this->db->get()->num_rows();
        goto s0aV8;
        xAy4Y:
        $this->db->or_like("\156\151\163", $search);
        goto vaYMP;
        MNT2U:
        $this->db->select("\151\144\137\x73\151\x73\167\141");
        goto sklC5;
        JLud3:
        if (!($search != null)) {
            goto TGVtl;
        }
        goto Jju3H;
        s0aV8:
    }
    public function getUserSiswa($tp, $smt)
    {
        goto d0qLJ;
        VY067:
        $this->datatables->from("\x6d\141\x73\x74\145\162\x5f\x73\151\x73\x77\141\x20\x61");
        goto tuzFT;
        gpB0x:
        return $this->datatables->generate();
        goto sJvhS;
        vaWmu:
        $this->datatables->join("\165\x73\145\x72\163\x20\x64", "\x64\x2e\x75\x73\145\x72\x6e\x61\155\x65\x3d\x61\x2e\x75\x73\145\x72\156\141\x6d\145", "\154\145\146\164");
        goto gpB0x;
        d0qLJ:
        $this->db->query("\123\x45\124\40\123\x51\x4c\137\102\x49\107\x5f\123\105\114\105\103\124\x53\75\x31");
        goto XF9m6;
        A35h6:
        $this->datatables->join("\x6d\x61\163\164\145\162\x5f\x6b\x65\x6c\141\x73\x20\x63", "\x63\56\x69\144\137\153\145\154\x61\x73\75\142\56\151\144\137\x6b\x65\154\x61\163", "\x6c\x65\146\x74");
        goto vaWmu;
        XF9m6:
        $this->datatables->select("\x61\56\151\144\137\163\x69\x73\x77\141\x2c\x20\141\x2e\x6e\151\x73\x2c\x2e\141\x2e\x6e\x61\x6d\141\x2c\40\x61\x2e\165\x73\145\x72\156\x61\x6d\x65\x2c\x20\141\56\160\x61\163\163\x77\157\x72\144\54\40\143\x2e\x6e\141\x6d\141\x5f\153\145\154\x61\163\x2c\40\x64\56\x69\144\x2c\40\50\x53\105\114\x45\103\x54\40\103\117\125\x4e\124\50\151\144\51\x20\106\122\117\x4d\x20\165\x73\x65\x72\163\40\x57\x48\105\122\x45\40\144\x2e\x75\x73\145\x72\156\141\x6d\145\40\x3d\x20\141\56\x75\163\x65\x72\x6e\x61\155\145\x29\40\x41\x53\x20\141\153\164\x69\146");
        goto VY067;
        tuzFT:
        $this->datatables->join("\x6b\145\154\141\x73\137\x73\x69\163\167\141\x20\x62", "\142\56\x69\144\x5f\x73\x69\x73\167\141\x3d\141\x2e\151\144\x5f\x73\x69\163\167\x61\x20\x41\x4e\x44\x20\x62\56\x69\x64\x5f\x74\x70\x3d" . $tp . "\x20\x41\116\104\40\142\x2e\151\x64\x5f\x73\x6d\x74\75" . $smt . '', "\x6c\x65\x66\x74");
        goto A35h6;
        sJvhS:
    }
    public function getDataSiswa($id)
    {
        goto S1ukF;
        kTDdl:
        $query = $this->db->get()->row();
        goto mGWe4;
        mGWe4:
        return $query;
        goto RUPBS;
        S1ukF:
        $this->db->select("\x6e\151\163\x2c\x20\x6e\x69\163\156\54\x20\156\141\155\x61\x2c\40\165\x73\x65\x72\x6e\x61\155\145\54\x20\160\141\163\163\167\157\162\x64");
        goto Dg2KP;
        Dg2KP:
        $this->db->from("\x6d\x61\163\164\145\x72\137\x73\x69\163\167\x61");
        goto yPh0V;
        yPh0V:
        $this->db->where("\151\x64\137\163\x69\x73\x77\x61", $id);
        goto kTDdl;
        RUPBS:
    }
    public function getSiswaAktif()
    {
        goto Govtf;
        Govtf:
        $this->db->select("\x61\x2e\151\x64\137\x73\151\x73\167\x61\54\40\x61\x2e\x6e\151\163\x2c\x20\141\x2e\x6e\x69\x73\x6e\x2c\x20\141\x2e\x75\x73\x65\162\156\x61\x6d\x65\x2c\x20\141\56\160\141\x73\163\x77\157\162\144\x2c\x20\x61\x2e\156\141\155\x61\54\40\x63\56\x69\144\54\40\50\x53\105\114\105\x43\124\40\x43\x4f\x55\x4e\x54\50\x69\x64\x29\x20\106\x52\x4f\115\x20\x75\x73\x65\x72\x73\x20\x57\x48\x45\x52\x45\40\x75\x73\145\x72\163\x2e\x75\163\145\162\x6e\141\155\x65\40\75\x20\x61\56\165\x73\145\162\x6e\141\x6d\x65\51\x20\101\123\x20\x61\153\164\x69\146");
        goto yPUHa;
        RyroJ:
        return $this->db->get("\155\x61\x73\164\145\x72\137\163\x69\163\x77\141\40\x61")->result();
        goto Znlni;
        yPUHa:
        $this->db->join("\x75\x73\x65\x72\163\x20\143", "\x61\x2e\165\x73\145\x72\156\141\155\145\x3d\x63\x2e\165\163\145\162\156\141\x6d\x65", "\x6c\145\146\x74");
        goto RyroJ;
        Znlni:
    }
    public function getGuruAktif()
    {
        goto PERkl;
        Un0rL:
        return $this->db->get("\155\x61\x73\164\x65\x72\x5f\x67\x75\162\165\x20\x61")->result();
        goto hBVEa;
        UBhPC:
        $this->db->join("\x75\x73\x65\x72\163\x20\x63", "\141\x2e\165\163\145\162\x6e\x61\x6d\x65\x3d\x63\56\x75\163\145\162\156\141\x6d\x65", "\x6c\x65\x66\164");
        goto Un0rL;
        PERkl:
        $this->db->select("\141\56\151\144\137\x67\165\x72\165\x2c\40\143\x2e\x69\144\x2c\40\50\x53\105\x4c\x45\103\124\x20\x43\x4f\x55\116\x54\x28\151\144\x29\40\106\x52\x4f\x4d\x20\x75\x73\x65\162\163\x20\127\110\105\x52\x45\40\x75\163\x65\162\163\x2e\x75\163\x65\162\156\141\155\x65\x20\x3d\x20\x61\x2e\x75\163\x65\162\156\x61\x6d\145\x29\40\x41\x53\40\141\153\164\151\146");
        goto UBhPC;
        hBVEa:
    }
}
