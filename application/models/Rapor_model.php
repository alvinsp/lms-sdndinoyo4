<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Rapor_model extends CI_Model
{
    public function getKikdMapel($id, $id_tp, $id_smt)
    {
        $this->db->where("\x69\x64\x5f\153\x69\x6b\x64", $id)->where("\151\144\137\x74\160", $id_tp)->where("\x69\x64\137\163\155\x74", $id_smt);
        return $this->db->get("\x72\x61\160\157\162\137\153\151\x6b\144")->row();
    }
    public function getKikdMapelKelas($id_mapel, $id_kelas, $id_tp, $id_smt)
    {
        $this->db->where("\151\144\137\x6d\x61\x70\x65\x6c\x5f\x6b\145\154\x61\163", $id_mapel . $id_kelas)->where("\x69\144\137\164\160", $id_tp)->where("\x69\x64\x5f\x73\x6d\x74", $id_smt);
        return $this->db->get("\x72\141\160\x6f\x72\137\x6b\151\x6b\144")->result();
    }
    public function getKkm($id)
    {
        $this->db->where("\151\144\x5f\153\153\x6d", $id);
        return $this->db->get("\x72\141\x70\157\162\x5f\153\153\x6d")->row();
    }
    public function getRaporSetting($id_tp, $id_smt)
    {
        $this->db->where("\151\x64\137\x74\x70", $id_tp)->where("\x69\144\137\163\155\164", $id_smt);
        return $this->db->get("\x72\x61\x70\x6f\x72\x5f\141\144\155\151\x6e\137\163\x65\x74\x74\151\x6e\x67")->row();
    }
    public function getDetailSiswa($id_kelas, $id_tp, $id_smt)
    {
        goto zBcl0;
        xIIBg:
        $this->db->order_by("\142\56\x6e\x61\155\x61", "\x41\123\x43");
        goto wpiN0;
        ra6Kt:
        $this->db->join("\x6d\x61\163\164\x65\162\x5f\x6b\x65\x6c\x61\x73\x20\x63", "\x61\x2e\151\x64\137\153\x65\x6c\141\x73\75\143\x2e\x69\144\137\153\145\154\141\163");
        goto kl4tI;
        OxJcb:
        $this->db->from("\x6b\145\x6c\141\x73\x5f\x73\151\x73\x77\x61\40\x61");
        goto oheIU;
        XS6FU:
        $this->db->where("\141\56\x69\x64\137\164\160", $id_tp);
        goto ZiN1X;
        ZiN1X:
        $this->db->where("\141\56\151\144\x5f\163\155\x74", $id_smt);
        goto xIIBg;
        wpiN0:
        return $this->db->get()->result();
        goto B6dD0;
        iU1C1:
        $this->db->select("\x61\x2e\x2a\x2c\x20\142\56\x2a\x2c\x20\x63\56\52");
        goto OxJcb;
        oheIU:
        $this->db->join("\155\141\x73\164\x65\x72\137\x73\x69\x73\x77\141\x20\x62", "\x61\56\x69\x64\137\x73\x69\163\167\141\x3d\142\56\x69\x64\137\163\151\x73\167\x61");
        goto ra6Kt;
        kl4tI:
        $this->db->where("\141\56\151\x64\137\153\145\x6c\x61\163", $id_kelas);
        goto XS6FU;
        zBcl0:
        $this->db->query("\123\105\124\x20\123\x51\114\137\x42\111\107\x5f\123\105\x4c\105\x43\x54\x53\x3d\61");
        goto iU1C1;
        B6dD0:
    }
    public function getDetailSiswaById($id_siswa, $id_tp, $id_smt)
    {
        goto VEi1c;
        t5ZQz:
        $this->db->order_by("\x61\x2e\156\141\x6d\x61", "\101\123\103");
        goto QOrj3;
        Ys411:
        $this->db->select("\141\x2e\x6e\141\x6d\141\54\x20\141\x2e\x6e\x69\163\54\x20\x61\56\156\151\163\156\x2c\x20\x63\x2e\x6e\141\x6d\141\137\153\x65\x6c\x61\x73");
        goto MHhVA;
        WY25J:
        $this->db->where("\142\56\x69\x64\137\x74\160", $id_tp);
        goto oTRJS;
        oTRJS:
        $this->db->where("\142\x2e\151\144\137\163\155\x74", $id_smt);
        goto t5ZQz;
        QOrj3:
        return $this->db->get()->row();
        goto WM7eW;
        Kw21z:
        $this->db->join("\153\x65\154\141\x73\137\x73\x69\x73\167\x61\x20\x62", "\141\56\151\x64\137\163\151\163\167\141\x3d\142\x2e\151\144\137\x73\x69\x73\167\x61");
        goto OvYne;
        VEi1c:
        $this->db->query("\123\x45\124\40\123\x51\x4c\137\102\x49\107\137\123\105\x4c\105\103\124\x53\75\61");
        goto Ys411;
        MHhVA:
        $this->db->from("\155\x61\x73\x74\x65\162\137\163\151\163\x77\141\40\141");
        goto Kw21z;
        OvYne:
        $this->db->join("\x6d\x61\x73\x74\145\162\137\x6b\145\x6c\x61\163\40\x63", "\x62\x2e\x69\x64\x5f\153\145\154\x61\163\x3d\143\x2e\151\x64\137\153\145\x6c\x61\x73");
        goto xHdIn;
        xHdIn:
        $this->db->where("\x61\x2e\151\144\x5f\x73\x69\x73\x77\x61", $id_siswa);
        goto WY25J;
        WM7eW:
    }
    public function cekNilaiHarianKelas($id_mapel, $id_kelas, $id_tp, $id_smt)
    {
        goto gIm3K;
        Inr_N:
        $this->db->where("\x69\x64\x5f\x74\160", $id_tp);
        goto kHRXD;
        gIm3K:
        $this->db->select("\160\x5f\162\141\x74\x61\x5f\x72\141\x74\x61");
        goto MMlXN;
        GA9_k:
        $this->db->where("\151\x64\x5f\x6b\145\154\x61\x73", $id_kelas);
        goto Inr_N;
        KcRak:
        $this->db->where("\151\x64\137\155\x61\x70\x65\x6c", $id_mapel);
        goto GA9_k;
        kHRXD:
        $this->db->where("\x69\144\137\163\x6d\x74", $id_smt);
        goto OIS2R;
        MMlXN:
        $this->db->from("\162\x61\160\157\162\137\156\x69\x6c\x61\x69\x5f\150\141\x72\151\x61\156");
        goto KcRak;
        OIS2R:
        $this->db->where("\x70\x5f\x72\141\164\141\x5f\162\141\164\x61\x20\41\x3d", "\x4e\125\x4c\114");
        goto Y0SdF;
        Y0SdF:
        return $this->db->get()->num_rows();
        goto Q8SOw;
        Q8SOw:
    }
    public function getNilaiHarianKelas($id_mapel, $id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto eUmm0;
        qhi7W:
        $this->db->from("\x72\141\x70\157\162\137\x6e\x69\154\x61\151\x5f\150\141\162\x69\x61\156");
        goto z82mU;
        e0krc:
        return $this->db->get()->row();
        goto WFfBk;
        z82mU:
        $this->db->where("\151\x64\x5f\x6e\151\154\141\151\137\x68\141\162\151\141\156", $id_mapel . $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto e0krc;
        eUmm0:
        $this->db->select("\x2a");
        goto qhi7W;
        WFfBk:
    }
    public function getAllNilaiHarianKelas($id_kelas)
    {
        goto zmsQn;
        zmsQn:
        $this->db->select("\52");
        goto FVqVR;
        rgn1u:
        $this->db->where("\x69\144\x5f\153\145\154\x61\163", $id_kelas);
        goto qZZI6;
        qZZI6:
        return $this->db->get()->result();
        goto xbfGz;
        FVqVR:
        $this->db->from("\x72\x61\160\x6f\x72\137\156\x69\154\x61\x69\x5f\150\x61\x72\x69\141\x6e");
        goto rgn1u;
        xbfGz:
    }
    public function cekNilaiPtsKelas($id_mapel, $id_kelas, $id_tp, $id_smt)
    {
        goto SDfOx;
        LkZd6:
        $this->db->where("\151\144\x5f\164\160", $id_tp);
        goto Kt5E9;
        Kt5E9:
        $this->db->where("\x69\144\137\163\x6d\164", $id_smt);
        goto Lb10b;
        SDfOx:
        $this->db->select("\x70\162\145\x64\x69\x6b\141\x74");
        goto ZUdbV;
        PwVya:
        return $this->db->get()->num_rows();
        goto KdR3V;
        ZUdbV:
        $this->db->from("\x72\141\160\157\162\137\x6e\x69\154\x61\151\137\x70\164\x73");
        goto FukY0;
        Lb10b:
        $this->db->where("\x70\x72\145\x64\x69\x6b\141\x74\40\41\x3d", "\116\x55\114\x4c");
        goto PwVya;
        FukY0:
        $this->db->where("\x69\x64\x5f\x6d\141\x70\x65\x6c", $id_mapel);
        goto VvII9;
        VvII9:
        $this->db->where("\151\144\x5f\153\145\154\x61\163", $id_kelas);
        goto LkZd6;
        KdR3V:
    }
    public function getIdNilaiPts($arr_id)
    {
        goto jMcz3;
        svZc_:
        $result = $this->db->get()->result();
        goto KHUvY;
        KHUvY:
        $ret = [];
        goto BXhwF;
        ihq5T:
        $this->db->from("\x72\x61\x70\157\x72\x5f\156\151\154\x61\x69\137\x70\x74\x73");
        goto sCvs9;
        NA_rC:
        ZwvWY:
        goto LR822;
        LR822:
        return $ret;
        goto eKtlR;
        VrzX7:
        foreach ($result as $key => $row) {
            $ret[$row->id_nilai_pts] = $row;
            TX1wS:
        }
        goto BH90X;
        jMcz3:
        $this->db->select("\x69\144\x5f\156\x69\154\x61\x69\137\x70\164\x73");
        goto ihq5T;
        sCvs9:
        $this->db->where_in("\x69\144\137\156\x69\x6c\x61\x69\137\160\164\163", $arr_id);
        goto svZc_;
        BXhwF:
        if (!$result) {
            goto ZwvWY;
        }
        goto VrzX7;
        BH90X:
        nCy5i:
        goto NA_rC;
        eKtlR:
    }
    public function getNilaiPtsKelas($id_mapel, $id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto PU094;
        hhyVY:
        return $this->db->get()->row();
        goto azgti;
        hTviP:
        $this->db->from("\x72\x61\160\157\162\x5f\156\151\x6c\141\151\137\160\x74\x73");
        goto WSm4y;
        WSm4y:
        $this->db->where("\x69\144\137\156\151\x6c\x61\x69\x5f\x70\164\x73", $id_mapel . $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto hhyVY;
        PU094:
        $this->db->select("\x2a");
        goto hTviP;
        azgti:
    }
    public function getAllNilaiPtsKelas($id_kelas)
    {
        goto arpgK;
        BgETx:
        $this->db->from("\x72\x61\160\x6f\x72\137\x6e\x69\x6c\141\x69\x5f\x70\164\163");
        goto geIlr;
        arpgK:
        $this->db->select("\52");
        goto BgETx;
        gMrTZ:
        return $this->db->get()->result();
        goto biVTG;
        geIlr:
        $this->db->where("\151\144\x5f\x6b\145\154\x61\x73", $id_kelas);
        goto gMrTZ;
        biVTG:
    }
    public function getEkstraKelas($id_mapel, $id_siswa, $id_tp, $id_smt)
    {
        goto bYFff;
        U7fwx:
        return $this->db->get()->row();
        goto fhPyl;
        bYFff:
        $this->db->select("\156\x69\x6c\x61\151\54\x20\160\x72\x65\x64\x69\x6b\x61\164\x2c\40\x64\145\163\153\x72\x69\x70\163\151");
        goto Oq2Sm;
        wesFT:
        $this->db->where("\151\144\x5f\x65\x6b\x73\164\162\141", $id_mapel);
        goto ieVZf;
        Oq2Sm:
        $this->db->from("\162\x61\x70\157\162\137\156\x69\154\141\151\x5f\x65\x6b\x73\164\x72\x61");
        goto wesFT;
        r1hfe:
        $this->db->where("\151\144\x5f\163\x6d\x74", $id_smt);
        goto U7fwx;
        SBrAf:
        $this->db->where("\x69\x64\x5f\x74\x70", $id_tp);
        goto r1hfe;
        ieVZf:
        $this->db->where("\x69\x64\x5f\163\x69\x73\167\x61", $id_siswa);
        goto SBrAf;
        fhPyl:
    }
    public function cekNilaiEkstraKelas($id_mapel, $id_kelas, $id_tp, $id_smt)
    {
        goto Dg3Bz;
        JCJVx:
        $this->db->where("\x69\144\x5f\x65\153\163\x74\x72\141", $id_mapel);
        goto INwEW;
        INwEW:
        $this->db->where("\x69\144\x5f\x6b\x65\x6c\x61\163", $id_kelas);
        goto gq_xh;
        fVDjM:
        $this->db->from("\x72\x61\160\x6f\162\137\156\x69\x6c\141\x69\x5f\145\153\x73\164\162\x61");
        goto JCJVx;
        Dg3Bz:
        $this->db->select("\x69\144\x5f\156\151\x6c\x61\151\137\x65\153\163\164\x72\141");
        goto fVDjM;
        OEKKC:
        $this->db->where("\x69\x64\x5f\x73\x6d\x74", $id_smt);
        goto EmluN;
        gq_xh:
        $this->db->where("\x69\144\137\164\160", $id_tp);
        goto OEKKC;
        EmluN:
        return $this->db->get()->num_rows();
        goto jMGgD;
        jMGgD:
    }
    public function getNilaiEkstraKelas($id_ekstra, $id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto QjPtE;
        QjPtE:
        $this->db->select("\x2a");
        goto DL7P8;
        VEzTT:
        return $this->db->get()->row();
        goto mmIH3;
        DL7P8:
        $this->db->from("\162\x61\x70\x6f\x72\x5f\156\151\x6c\141\x69\137\145\x6b\163\164\x72\141");
        goto vc2Eg;
        vc2Eg:
        $this->db->where("\151\x64\137\x6e\151\x6c\x61\x69\137\145\x6b\x73\x74\162\141", $id_ekstra . $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto VEzTT;
        mmIH3:
    }
    public function getAllNilaiEkstraKelas($id_kelas)
    {
        goto LQfpV;
        fJ56N:
        $this->db->from("\162\x61\x70\x6f\162\x5f\x6e\x69\x6c\141\x69\x5f\x65\x6b\x73\164\162\141");
        goto Rpr7i;
        LQfpV:
        $this->db->select("\x2a");
        goto fJ56N;
        Rpr7i:
        $this->db->where("\151\144\x5f\153\x65\x6c\x61\163", $id_kelas);
        goto HhX18;
        HhX18:
        return $this->db->get()->result();
        goto GWEju;
        GWEju:
    }
    public function cekNilaiAkhirKelas($id_mapel, $id_kelas, $id_tp, $id_smt)
    {
        goto C2mcC;
        C2mcC:
        $this->db->select("\x69\144\137\x6e\151\x6c\x61\151\137\x61\x6b\150\151\x72");
        goto jb42G;
        e5wJi:
        $this->db->where("\x69\144\x5f\x6b\145\154\141\163", $id_kelas);
        goto yexJ4;
        yPWa6:
        $this->db->where("\x69\144\137\x73\155\x74", $id_smt);
        goto R1pTA;
        R1pTA:
        return $this->db->get()->num_rows();
        goto p5jYo;
        yexJ4:
        $this->db->where("\x69\144\x5f\x74\160", $id_tp);
        goto yPWa6;
        jb42G:
        $this->db->from("\x72\141\x70\x6f\162\137\156\151\x6c\141\x69\137\141\x6b\x68\151\162");
        goto rTvt1;
        rTvt1:
        $this->db->where("\x69\144\x5f\155\141\x70\145\154", $id_mapel);
        goto e5wJi;
        p5jYo:
    }
    public function getNilaiAkhirKelas($id_mapel, $id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto F2N4c;
        F2N4c:
        $this->db->query("\x53\x45\x54\x20\x53\121\x4c\x5f\102\x49\x47\x5f\123\105\x4c\105\103\124\123\x3d\61");
        goto NKaos;
        o9tPD:
        $this->db->where("\x69\144\137\156\151\154\x61\151\x5f\x68\x61\x72\151\141\x6e", $id_mapel . $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto H2BQN;
        NQqM1:
        $this->db->join("\162\141\160\x6f\x72\x5f\x6e\151\154\x61\151\137\x70\164\163\x20\x62", "\142\56\x69\x64\137\156\x69\154\141\x69\x5f\x70\164\163\75\141\56\151\x64\137\156\x69\154\141\x69\x5f\x68\141\162\151\x61\x6e", "\x6c\x65\146\164");
        goto arEWj;
        H2BQN:
        return $this->db->get()->row();
        goto mZobW;
        NKaos:
        $this->db->select("\141\56\160\x5f\162\x61\164\141\137\162\141\164\x61\x20\141\x73\x20\x6e\150\141\x72\x2c\x20\141\56\160\137\x64\x65\163\x6b\162\x69\160\x73\x69\x2c\40\141\56\153\137\x72\x61\x74\141\137\x72\x61\x74\141\x2c\40\141\56\153\x5f\x70\162\145\144\151\153\141\x74\54\40\141\x2e\153\137\144\x65\x73\x6b\x72\151\160\x73\x69\54\40\x62\56\x6e\151\154\x61\x69\x20\141\163\40\156\160\x74\163\54\40\143\56\156\151\x6c\141\151\40\141\163\40\156\x70\x61\x73\54\40\143\56\160\x72\x65\x64\151\x6b\x61\x74");
        goto ah6sb;
        ah6sb:
        $this->db->from("\x72\141\160\157\162\x5f\x6e\x69\154\141\x69\x5f\x68\x61\162\151\x61\156\40\x61");
        goto NQqM1;
        arEWj:
        $this->db->join("\x72\x61\160\157\x72\x5f\156\x69\x6c\141\x69\x5f\x61\x6b\150\x69\x72\x20\143", "\143\56\151\144\x5f\156\x69\154\141\151\137\141\153\150\151\162\75\x61\x2e\x69\144\137\156\151\x6c\141\x69\x5f\150\141\x72\151\141\x6e", "\x6c\145\146\164");
        goto o9tPD;
        mZobW:
    }
    public function getAllNilaiAkhirKelas($id_kelas)
    {
        goto mp2Ib;
        RNn4x:
        $this->db->from("\162\x61\x70\x6f\x72\137\156\x69\x6c\x61\x69\137\141\x6b\x68\x69\x72");
        goto jybME;
        L_Ue2:
        return $this->db->get()->result();
        goto UJfQi;
        mp2Ib:
        $this->db->select("\52");
        goto RNn4x;
        jybME:
        $this->db->where("\151\x64\x5f\153\x65\x6c\141\163", $id_kelas);
        goto L_Ue2;
        UJfQi:
    }
    public function getNilaiAkhirByMapel($id_mapel, $id_kelas, $id_tp, $id_smt)
    {
        goto xO5uM;
        oDyHa:
        $this->db->join("\x72\x61\160\157\162\137\156\151\154\x61\x69\137\141\153\150\x69\162\40\x63", "\143\x2e\x69\x64\137\x6e\151\154\x61\151\x5f\x61\153\x68\x69\162\x3d\x61\56\151\x64\x5f\156\x69\154\x61\151\x5f\x68\141\x72\151\x61\156", "\x6c\x65\x66\164");
        goto yu3fd;
        q7Hp6:
        $this->db->where("\x61\x2e\151\144\137\x73\155\164", $id_smt);
        goto MxkEy;
        wFvyh:
        $this->db->select("\141\x2e\151\144\137\163\x69\163\167\x61\x2c\40\x61\x2e\160\x5f\162\x61\x74\141\x5f\x72\x61\164\x61\x20\x61\x73\x20\156\x68\141\162\x2c\x20\141\56\160\x5f\144\x65\163\153\x72\x69\160\163\x69\x2c\x20\x61\56\153\137\162\141\164\x61\x5f\x72\x61\x74\x61\x2c\x20\141\x2e\x6b\137\x70\162\x65\144\x69\153\141\164\x2c\40\x61\56\153\x5f\144\145\x73\153\x72\151\x70\163\151\x2c\40\x62\x2e\x6e\x69\154\x61\x69\x20\141\x73\x20\x6e\160\164\163\x2c\40\x63\x2e\156\151\154\x61\151\40\x61\163\40\x6e\x70\x61\x73\54\40\x63\56\x70\162\x65\x64\151\153\x61\164");
        goto SfErA;
        JesDV:
        $this->db->where("\141\56\x69\x64\x5f\x6b\x65\154\x61\x73", $id_kelas);
        goto Rrl8f;
        Kg2Y1:
        $this->db->join("\162\x61\160\157\x72\137\156\151\154\141\x69\137\160\164\163\x20\x62", "\x62\56\x69\x64\x5f\156\151\x6c\x61\151\137\160\x74\x73\x3d\141\56\151\x64\x5f\156\x69\x6c\x61\151\x5f\x68\141\x72\151\x61\x6e", "\x6c\x65\x66\164");
        goto oDyHa;
        MxkEy:
        return $this->db->get()->result();
        goto I8VoZ;
        yu3fd:
        $this->db->where("\x61\56\151\144\x5f\155\x61\x70\145\154", $id_mapel);
        goto JesDV;
        SfErA:
        $this->db->from("\x72\141\x70\157\162\137\156\x69\x6c\141\x69\x5f\x68\141\162\x69\141\x6e\40\141");
        goto Kg2Y1;
        xO5uM:
        $this->db->query("\x53\x45\124\40\x53\x51\114\137\x42\111\107\137\123\105\114\105\x43\124\123\x3d\61");
        goto wFvyh;
        Rrl8f:
        $this->db->where("\141\56\x69\144\x5f\164\x70", $id_tp);
        goto q7Hp6;
        I8VoZ:
    }
    public function getDeskripsiSikap($kelas, $id_tp, $id_smt)
    {
        $this->db->where("\x69\x64\137\x6b\x65\x6c\x61\x73", $kelas)->where("\151\144\x5f\164\x70", $id_tp)->where("\x69\144\x5f\x73\x6d\x74", $id_smt);
        return $this->db->get("\162\141\x70\x6f\162\x5f\144\141\164\141\137\x73\151\x6b\141\160")->result();
    }
    public function getAllDeskripsiSikap($kelas)
    {
        $this->db->where("\x69\x64\137\153\x65\x6c\141\163", $kelas);
        return $this->db->get("\x72\141\x70\x6f\x72\x5f\144\141\164\x61\x5f\163\151\153\141\160")->result();
    }
    public function getDeskripsiSikapByJenis($kelas, $jenis, $id_tp, $id_smt)
    {
        goto vEVdH;
        e5OhN:
        $this->db->where("\x69\x64\x5f\164\x70", $id_tp);
        goto VAJCw;
        x7Fz1:
        $this->db->from("\162\141\x70\157\x72\x5f\x64\141\x74\x61\x5f\x73\151\153\141\160");
        goto lEOx_;
        tY6ri:
        return $this->db->get()->result();
        goto fTfuH;
        vEVdH:
        $this->db->select("\x2a");
        goto x7Fz1;
        lEOx_:
        $this->db->where("\x69\144\x5f\153\x65\x6c\141\x73", $kelas);
        goto uMty7;
        VAJCw:
        $this->db->where("\x69\x64\x5f\163\x6d\x74", $id_smt);
        goto tY6ri;
        uMty7:
        $this->db->where("\152\x65\156\x69\x73", $jenis);
        goto e5OhN;
        fTfuH:
    }
    public function getNilaiSikapKelas($id_kelas, $id_siswa, $id_tp, $id_smt, $jenis)
    {
        goto lV37A;
        lV37A:
        $this->db->select("\52");
        goto xn4G1;
        xn4G1:
        $this->db->from("\x72\x61\x70\x6f\162\x5f\x6e\151\x6c\141\x69\137\x73\x69\x6b\141\160");
        goto Tk2IJ;
        javaV:
        return $this->db->get()->row();
        goto x0APD;
        Tk2IJ:
        $this->db->where("\151\144\x5f\x6e\151\154\x61\151\137\163\151\x6b\x61\160", $id_kelas . $id_siswa . $id_tp . $id_smt . $jenis);
        goto javaV;
        x0APD:
    }
    public function getAllNilaiSikapKelas($id_kelas)
    {
        goto UatDf;
        YB0WB:
        $this->db->from("\x72\141\x70\157\x72\x5f\156\151\154\141\x69\137\163\x69\153\141\x70");
        goto bq9rA;
        bq9rA:
        $this->db->where("\151\x64\x5f\153\145\x6c\x61\x73", $id_kelas);
        goto HJfmC;
        UatDf:
        $this->db->select("\52");
        goto YB0WB;
        HJfmC:
        return $this->db->get()->result();
        goto wbk_0;
        wbk_0:
    }
    public function getNilaiSikapByJenis($id_kelas, $jenis, $id_tp, $id_smt)
    {
        goto fHeXD;
        fhk3P:
        $this->db->where("\151\144\x5f\153\x65\154\141\x73", $id_kelas);
        goto H0ex4;
        KRz5s:
        return $this->db->get()->result();
        goto tq_8D;
        yMW0I:
        $this->db->where("\151\x64\x5f\163\x6d\x74", $id_smt);
        goto KRz5s;
        H0ex4:
        $this->db->where("\152\145\x6e\x69\163", $jenis);
        goto suVrZ;
        AShPd:
        $this->db->from("\162\141\x70\157\x72\137\156\x69\x6c\141\x69\137\x73\151\153\x61\x70");
        goto fhk3P;
        suVrZ:
        $this->db->where("\x69\144\x5f\164\x70", $id_tp);
        goto yMW0I;
        fHeXD:
        $this->db->select("\52");
        goto AShPd;
        tq_8D:
    }
    public function getNilaiSikapByKelas($id_kelas, $id_tp, $id_smt)
    {
        goto JsqvD;
        zkCVG:
        $this->db->from("\162\141\160\157\162\137\x6e\151\x6c\141\151\137\163\x69\153\x61\x70");
        goto IFyUg;
        JsqvD:
        $this->db->select("\52");
        goto zkCVG;
        DqhBo:
        return $this->db->get()->result();
        goto aKsTs;
        IFyUg:
        $this->db->where("\x69\x64\137\153\x65\x6c\x61\x73", $id_kelas);
        goto XMh8O;
        XMh8O:
        $this->db->where("\x69\144\x5f\164\160", $id_tp);
        goto WWJxZ;
        WWJxZ:
        $this->db->where("\151\x64\x5f\163\155\164", $id_smt);
        goto DqhBo;
        aKsTs:
    }
    public function getNilaiSikapBySiswa($id_siswa, $id_tp, $id_smt)
    {
        goto gab7a;
        czYn7:
        $this->db->where("\x69\144\137\x73\x6d\164", $id_smt);
        goto tIWGy;
        rgH2s:
        $this->db->where("\x69\144\137\163\x69\163\x77\141", $id_siswa);
        goto wnxf9;
        tIWGy:
        return $this->db->get()->result();
        goto Zdw6j;
        gab7a:
        $this->db->select("\52");
        goto pEca0;
        wnxf9:
        $this->db->where("\x69\144\x5f\x74\160", $id_tp);
        goto czYn7;
        pEca0:
        $this->db->from("\x72\141\160\157\x72\x5f\x6e\151\154\141\151\x5f\163\151\x6b\141\x70");
        goto rgH2s;
        Zdw6j:
    }
    public function getDeskripsiCatatanByJenis($kelas, $jenis, $id_tp, $id_smt)
    {
        $this->db->where("\152\x65\x6e\151\163", $jenis)->where("\x69\144\137\x6b\145\x6c\x61\x73", $kelas)->where("\151\144\137\164\160", $id_tp)->where("\151\x64\x5f\163\x6d\x74", $id_smt);
        return $this->db->get("\x72\x61\160\157\162\137\144\x61\x74\x61\137\x63\141\164\x61\164\x61\156")->result();
    }
    public function getCatatanKelas($id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto pSQkz;
        kwPA0:
        $this->db->from("\162\141\x70\x6f\162\x5f\x63\x61\x74\141\x74\x61\x6e\137\x77\141\154\151");
        goto tXfFG;
        gwL32:
        return $this->db->get()->row();
        goto tA8Wq;
        pSQkz:
        $this->db->select("\x2a");
        goto kwPA0;
        tXfFG:
        $this->db->where("\x69\144\137\x63\141\x74\x61\164\141\156\x5f\x77\141\x6c\x69", $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto gwL32;
        tA8Wq:
    }
    public function getAllCatatanKelas($id_kelas)
    {
        goto R0bsz;
        AyCUQ:
        $this->db->from("\162\x61\160\x6f\162\137\143\x61\164\141\x74\141\156\137\x77\x61\154\x69");
        goto lnI_7;
        R0bsz:
        $this->db->select("\x2a");
        goto AyCUQ;
        BbGAb:
        return $this->db->get()->result();
        goto YkOHH;
        lnI_7:
        $this->db->where("\151\144\x5f\x6b\145\x6c\x61\163", $id_kelas);
        goto BbGAb;
        YkOHH:
    }
    public function getRankingKelas($id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto SIokS;
        SIokS:
        $this->db->select("\52");
        goto qUH9m;
        qUH9m:
        $this->db->from("\162\x61\x70\x6f\x72\x5f\x70\x72\x65\x73\x74\x61\163\151");
        goto Kla9J;
        Kla9J:
        $this->db->where("\x69\x64\x5f\x72\x61\156\x6b\x69\156\x67", $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto m6cBy;
        m6cBy:
        return $this->db->get()->row();
        goto ukaRN;
        ukaRN:
    }
    public function getAllRankingKelas($id_kelas)
    {
        goto cEPwT;
        gUODS:
        $this->db->from("\162\141\160\157\162\x5f\160\x72\145\x73\164\x61\163\x69");
        goto CKUSc;
        osb8M:
        return $this->db->get()->result();
        goto WBQdc;
        cEPwT:
        $this->db->select("\x2a");
        goto gUODS;
        CKUSc:
        $this->db->where("\x69\144\137\x6b\x65\x6c\x61\163", $id_kelas);
        goto osb8M;
        WBQdc:
    }
    public function getAllDeskripsiFisikKelas()
    {
        goto QLX7W;
        wxDM5:
        wQ1Tp:
        goto FtpP3;
        RY7s3:
        if (!$result) {
            goto IRXBn;
        }
        goto quqDE;
        QLX7W:
        $result = $this->db->get("\162\141\x70\157\x72\x5f\144\x61\164\141\x5f\146\151\163\151\153")->result();
        goto LJggq;
        quqDE:
        foreach ($result as $key => $row) {
            $ret[$row->id_kelas][$row->id_tp][$row->id_smt] = $row;
            FI8mX:
        }
        goto wxDM5;
        Q6NjH:
        return $ret;
        goto KE1EQ;
        LJggq:
        $ret = [];
        goto RY7s3;
        FtpP3:
        IRXBn:
        goto Q6NjH;
        KE1EQ:
    }
    public function getAllRaporFisik()
    {
        goto MJ_5C;
        Y48Ii:
        $ret = [];
        goto pU02i;
        ZS1uM:
        n6Ttq:
        goto E2OSP;
        nF6Qw:
        return $ret;
        goto gO56O;
        E2OSP:
        Kz8RU:
        goto nF6Qw;
        pU02i:
        if (!$result) {
            goto Kz8RU;
        }
        goto vqnAQ;
        vqnAQ:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa][$row->id_tp][$row->id_smt] = $row;
            zqpf4:
        }
        goto ZS1uM;
        MJ_5C:
        $result = $this->db->get("\x72\141\160\x6f\x72\x5f\x66\151\163\x69\x6b")->result();
        goto Y48Ii;
        gO56O:
    }
    public function getDeskripsiFisikKelas($kelas, $id_tp, $id_smt)
    {
        $this->db->where("\151\x64\x5f\146\x69\163\x69\153", $kelas)->where("\x69\x64\x5f\164\x70", $id_tp)->where("\151\x64\137\x73\x6d\x74", $id_smt);
        return $this->db->get("\x72\141\160\157\162\137\144\x61\164\x61\137\x66\151\163\x69\x6b")->row();
    }
    public function getFisikKelas($id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto H3S_Z;
        JfGjG:
        $this->db->from("\x72\141\160\x6f\162\137\146\151\163\151\x6b");
        goto rXM7O;
        H3S_Z:
        $this->db->select("\52");
        goto JfGjG;
        rXM7O:
        $this->db->where("\151\x64\137\146\151\x73\x69\153", $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto Pvz_R;
        Pvz_R:
        return $this->db->get()->row();
        goto pNYIf;
        pNYIf:
    }
    public function getAllFisikKelas($id_kelas)
    {
        goto R2VYp;
        R2VYp:
        $this->db->select("\x2a");
        goto GurnQ;
        SfxfZ:
        $this->db->where("\151\x64\137\153\x65\154\141\x73", $id_kelas);
        goto EkD3F;
        EkD3F:
        return $this->db->get()->result();
        goto qIuN3;
        GurnQ:
        $this->db->from("\x72\141\x70\x6f\162\x5f\x66\x69\163\x69\153");
        goto SfxfZ;
        qIuN3:
    }
    public function getJmlNilaiMapelHarianSiswa($id_mapel, $id_siswa, $id_tp, $id_smt)
    {
        goto jBJHX;
        tvJ7i:
        $this->db->where("\151\144\x5f\x73\x6d\x74", $id_smt);
        goto haJBs;
        koIkK:
        $this->db->from("\162\x61\x70\157\x72\x5f\x6e\151\x6c\141\x69\137\150\x61\162\x69\x61\156");
        goto XXoeg;
        haJBs:
        return $this->db->get()->row();
        goto D5LrU;
        XXoeg:
        $this->db->where("\151\144\x5f\x6d\x61\x70\145\154", $id_mapel);
        goto Lo8r7;
        jBJHX:
        $this->db->select("\x70\137\x72\141\x74\x61\x5f\x72\x61\x74\x61\x2c\x20\153\137\x72\x61\x74\x61\137\x72\x61\x74\141\54\x20\152\x6d\x6c");
        goto koIkK;
        lPl71:
        $this->db->where("\151\x64\x5f\x74\x70", $id_tp);
        goto tvJ7i;
        Lo8r7:
        $this->db->where("\151\144\137\x73\151\163\x77\x61", $id_siswa);
        goto lPl71;
        D5LrU:
    }
    public function getNilaiMapelHarianSiswa($id_mapel, $id_siswa, $id_tp, $id_smt)
    {
        goto v7GHT;
        xfU9c:
        $this->db->where("\x69\144\137\x73\151\163\x77\x61", $id_siswa);
        goto tbs4k;
        tbs4k:
        $this->db->where("\x69\x64\x5f\164\160", $id_tp);
        goto LxRk8;
        LxRk8:
        $this->db->where("\151\144\137\163\x6d\x74", $id_smt);
        goto tHLom;
        EpCAn:
        $this->db->where("\151\144\137\155\141\x70\x65\x6c", $id_mapel);
        goto xfU9c;
        tHLom:
        return $this->db->get()->row();
        goto q22tM;
        v7GHT:
        $this->db->select("\x70\61\54\x70\62\54\160\63\54\x70\x34\x2c\160\x35\x2c\153\x31\54\x6b\x32\x2c\x6b\63\54\153\64\x2c\x6b\65");
        goto kyxpZ;
        kyxpZ:
        $this->db->from("\162\x61\160\157\x72\137\x6e\151\x6c\x61\151\x5f\x68\x61\162\151\x61\x6e");
        goto EpCAn;
        q22tM:
    }
    public function getNilaiMapelPtsSiswa($id_mapel, $id_siswa, $id_tp, $id_smt)
    {
        goto B8Jbf;
        FwvJS:
        return $this->db->get()->row();
        goto xTlDP;
        gcx8k:
        $this->db->where("\x69\144\x5f\163\155\164", $id_smt);
        goto FwvJS;
        B8Jbf:
        $this->db->select("\156\x69\154\x61\151");
        goto uR6al;
        Uz2WX:
        $this->db->where("\151\144\137\x74\x70", $id_tp);
        goto gcx8k;
        wvikz:
        $this->db->where("\x69\x64\x5f\x73\151\x73\x77\141", $id_siswa);
        goto Uz2WX;
        Oitxn:
        $this->db->where("\x69\144\137\x6d\x61\x70\145\154", $id_mapel);
        goto wvikz;
        uR6al:
        $this->db->from("\162\x61\160\x6f\x72\x5f\x6e\151\x6c\141\x69\137\x70\x74\x73");
        goto Oitxn;
        xTlDP:
    }
    public function getNilaiMapelPasSiswa($id_mapel, $id_siswa, $id_tp, $id_smt)
    {
        goto eM32G;
        eM32G:
        $this->db->select("\156\151\x6c\141\x69\x2c\141\x6b\x68\151\162");
        goto eumJL;
        VispX:
        $this->db->where("\151\x64\137\x73\155\164", $id_smt);
        goto jvs05;
        CSXRj:
        $this->db->where("\151\x64\137\164\x70", $id_tp);
        goto VispX;
        VPJ0q:
        $this->db->where("\x69\x64\x5f\163\151\163\167\x61", $id_siswa);
        goto CSXRj;
        eumJL:
        $this->db->from("\x72\x61\160\157\162\x5f\156\x69\154\141\151\x5f\x61\x6b\x68\151\162");
        goto w2rWy;
        w2rWy:
        $this->db->where("\151\x64\137\x6d\x61\160\x65\x6c", $id_mapel);
        goto VPJ0q;
        jvs05:
        return $this->db->get()->row();
        goto kS0v1;
        kS0v1:
    }
    public function getNilaiRapor($id_mapel, $id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto h0bvz;
        IGFlN:
        $this->db->join("\x72\141\x70\x6f\162\x5f\x6e\151\154\141\x69\137\141\153\x68\x69\162\x20\142", "\x62\56\151\x64\x5f\x6e\x69\154\x61\151\137\141\153\x68\151\x72\75\141\x2e\151\144\x5f\156\151\x6c\x61\151\x5f\150\141\x72\x69\141\x6e", "\x6c\x65\146\164");
        goto DSp2h;
        r2kYv:
        $this->db->from("\x72\x61\x70\157\162\137\x6e\151\154\x61\x69\x5f\x68\x61\162\151\141\x6e\40\x61");
        goto IGFlN;
        h0bvz:
        $this->db->select("\x61\56\160\x5f\x72\141\x74\141\137\x72\141\x74\x61\54\x20\141\56\x70\137\x64\145\x73\x6b\x72\x69\160\x73\x69\x2c\x20\141\56\x6b\137\x72\x61\164\x61\137\162\141\x74\x61\x2c\40\141\x2e\153\137\x70\162\x65\x64\151\x6b\x61\164\x2c\x20\x61\x2e\153\x5f\144\145\163\x6b\x72\151\x70\163\x69\54\40\142\56\x6e\x69\154\x61\x69\40\141\x73\x20\x6e\x69\x6c\141\x69\137\x70\x61\163\x2c\x20\x62\x2e\141\x6b\150\151\x72\x20\x61\163\40\x6e\151\x6c\141\151\x2c\40\x62\56\160\162\x65\144\151\153\141\x74");
        goto r2kYv;
        DSp2h:
        $this->db->where("\x61\x2e\151\144\x5f\x6e\151\154\141\x69\x5f\x68\x61\x72\x69\141\156", $id_mapel . $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto yfXSU;
        yfXSU:
        return $this->db->get()->row_array();
        goto xfxyj;
        xfxyj:
    }
    public function getNilaiMapelByKelas($id_mapel, $id_kelas, $id_tp, $id_smt)
    {
        goto OzS5B;
        MVOfn:
        $this->db->where("\141\x2e\x69\x64\x5f\153\x65\154\141\163", $id_kelas);
        goto YD8JF;
        SZtME:
        $this->db->from("\x72\x61\x70\x6f\x72\x5f\156\x69\x6c\x61\151\x5f\150\141\x72\151\x61\156\x20\x61");
        goto sVQhT;
        qjsyf:
        $this->db->where("\x61\56\x69\144\x5f\155\141\160\145\154", $id_mapel);
        goto MVOfn;
        cocG7:
        return $this->db->get()->result();
        goto KVH5u;
        YD8JF:
        $this->db->where("\x61\x2e\x69\144\137\x74\160", $id_tp);
        goto Nv37s;
        Nv37s:
        $this->db->where("\x61\56\151\x64\137\x73\x6d\x74", $id_smt);
        goto cocG7;
        OzS5B:
        $this->db->select("\x61\x2e\160\x5f\162\x61\164\x61\137\x72\x61\164\x61\x2c\40\141\56\160\x5f\144\x65\x73\x6b\x72\x69\160\x73\x69\54\x20\141\56\153\137\x72\141\164\x61\x5f\x72\141\164\x61\54\x20\x61\56\x6b\x5f\x70\162\145\x64\x69\x6b\x61\164\54\40\x61\56\153\137\144\x65\163\x6b\x72\x69\x70\x73\151\x2c\x20\x62\x2e\156\151\154\141\151\40\141\163\40\x6e\151\x6c\141\151\x5f\160\141\163\54\40\142\x2e\x61\153\x68\151\x72\40\141\x73\40\x6e\x69\154\141\151\54\x20\142\56\x70\162\x65\x64\151\x6b\x61\x74");
        goto SZtME;
        sVQhT:
        $this->db->join("\x72\x61\x70\157\162\x5f\x6e\151\154\x61\x69\x5f\141\153\x68\151\162\x20\142", "\142\56\x69\x64\137\x6e\151\154\x61\x69\137\x61\x6b\150\151\162\x3d\x61\56\x69\x64\137\x6e\x69\154\x61\151\137\150\141\162\x69\141\x6e", "\154\x65\x66\x74");
        goto qjsyf;
        KVH5u:
    }
    public function getNilaiRaporByKelas($id_kelas, $id_tp, $id_smt)
    {
        goto tPyuP;
        tPyuP:
        $this->db->select("\141\56\151\x64\x5f\156\151\154\141\x69\137\150\141\162\x69\141\156\x2c\40\x61\x2e\151\144\137\163\x69\x73\167\x61\54\40\141\56\x69\x64\x5f\x6d\x61\160\x65\154\x2c\x20\x61\x2e\160\137\x72\x61\x74\141\x5f\162\x61\164\141\54\x20\141\56\x70\137\x64\145\x73\x6b\x72\151\160\163\x69\x2c\40\x61\x2e\153\137\162\x61\x74\x61\137\162\141\164\x61\54\x20\141\x2e\x6b\x5f\160\x72\x65\144\x69\x6b\x61\164\54\40\141\56\153\137\x64\145\x73\x6b\162\151\x70\163\x69\x2c\x20\142\56\x6e\151\x6c\141\x69\40\141\163\40\156\151\154\x61\151\x5f\x70\x61\x73\54\40\142\56\x61\x6b\x68\x69\162\x20\x61\163\x20\x6e\151\154\141\151\x2c\40\142\56\160\x72\x65\x64\151\x6b\x61\164");
        goto VwpEV;
        VwpEV:
        $this->db->from("\x72\141\x70\x6f\x72\x5f\156\151\x6c\x61\x69\137\x68\141\x72\151\141\156\40\141");
        goto lNJDq;
        nYED0:
        $this->db->where("\141\56\151\144\137\x73\155\164", $id_smt);
        goto uqxeu;
        uqxeu:
        return $this->db->get()->result();
        goto l4cO1;
        P0XLG:
        $this->db->where("\141\x2e\x69\144\x5f\153\145\x6c\x61\163", $id_kelas);
        goto sI7z4;
        lNJDq:
        $this->db->join("\x72\141\x70\157\162\x5f\156\x69\154\x61\x69\137\x61\153\x68\151\x72\x20\142", "\x62\56\x69\x64\137\156\x69\x6c\x61\x69\137\x61\x6b\x68\x69\x72\75\141\56\151\144\x5f\156\x69\154\141\x69\137\150\x61\162\x69\x61\156", "\154\145\146\x74");
        goto P0XLG;
        sI7z4:
        $this->db->where("\x61\56\151\144\137\x74\160", $id_tp);
        goto nYED0;
        l4cO1:
    }
    public function getPrestasiByKelas($id_kelas, $id_tp, $id_smt)
    {
        goto N6Tq6;
        UY0OQ:
        $this->db->where("\x69\144\x5f\x6b\145\154\x61\163", $id_kelas);
        goto xchKV;
        ko8Hx:
        return $rest;
        goto M1Yc3;
        DEGX3:
        $rest = [];
        goto z8UQ6;
        FfRz8:
        Uhf_R:
        goto ko8Hx;
        DpDgk:
        $this->db->where("\x69\144\137\x73\155\164", $id_smt);
        goto byQ2N;
        z8UQ6:
        foreach ($ranks as $rank) {
            $rest[$rank->id_siswa] = $rank;
            cPF1s:
        }
        goto FfRz8;
        byQ2N:
        $ranks = $this->db->get()->result();
        goto DEGX3;
        N6Tq6:
        $this->db->select("\x69\x64\x5f\163\x69\x73\x77\141\54\40\x72\141\x6e\153\x69\x6e\147\54\40\x64\145\163\153\x72\151\160\163\x69\x20\x61\x73\40\162\x61\156\153\137\x64\145\163\153\x72\151\x70\163\151\54\x20\160\61\x2c\x20\x70\61\137\144\x65\x73\153\x2c\40\x70\62\54\40\160\x32\137\x64\145\x73\153\x2c\x20\160\63\54\x20\x70\63\x5f\x64\x65\163\153");
        goto Keb99;
        xchKV:
        $this->db->where("\151\x64\x5f\164\x70", $id_tp);
        goto DpDgk;
        Keb99:
        $this->db->from("\162\x61\160\x6f\162\x5f\x70\x72\145\163\164\x61\x73\151");
        goto UY0OQ;
        M1Yc3:
    }
    public function getCatatanWaliByKelas($id_kelas, $id_tp, $id_smt)
    {
        goto vHqG9;
        b75G4:
        $desks = $this->db->get()->result();
        goto aZNV3;
        aZNV3:
        $rest = [];
        goto Ex0T8;
        ytgbp:
        $this->db->from("\x72\141\160\x6f\162\137\143\141\164\141\164\141\156\137\167\141\154\x69");
        goto odFW4;
        lxss1:
        return $rest;
        goto jUn5g;
        Ex0T8:
        foreach ($desks as $desk) {
            $rest[$desk->id_siswa] = $desk;
            sMJWT:
        }
        goto Pbs8x;
        Pbs8x:
        l4GLh:
        goto lxss1;
        gLb2v:
        $this->db->where("\x69\x64\137\x73\x6d\164", $id_smt);
        goto b75G4;
        vHqG9:
        $this->db->select("\x69\x64\x5f\163\151\x73\167\141\x2c\x20\156\x69\154\141\151\x2c\x20\144\145\163\153\162\x69\x70\163\151\x20\141\163\x20\x73\x61\162\x61\156");
        goto ytgbp;
        odFW4:
        $this->db->where("\x69\144\137\x6b\145\154\141\163", $id_kelas);
        goto EkUkw;
        EkUkw:
        $this->db->where("\x69\144\137\x74\160", $id_tp);
        goto gLb2v;
        jUn5g:
    }
    public function getRaporDeskripsi($id_kelas, $id_siswa, $id_tp, $id_smt)
    {
        goto LcLCn;
        dtV_u:
        $this->db->join("\x72\x61\160\157\162\x5f\143\x61\164\141\x74\x61\156\x5f\x77\x61\x6c\x69\40\x63", "\143\56\x69\144\137\x63\x61\164\x61\164\x61\156\137\x77\x61\154\151\x3d\142\x2e\151\x64\x5f\x72\141\x6e\153\x69\156\x67", "\154\x65\x66\x74");
        goto sFqai;
        LcLCn:
        $this->db->select("\x62\x2e\162\141\x6e\x6b\x69\x6e\x67\54\40\142\x2e\x64\145\163\x6b\162\x69\x70\163\151\x20\141\x73\40\x72\141\156\x6b\x5f\144\x65\x73\153\x72\151\160\163\151\54\x20\x62\56\160\61\54\40\x62\x2e\x70\61\x5f\144\x65\163\153\x2c\x20\x62\56\160\x32\x2c\x20\142\56\160\62\x5f\144\145\x73\x6b\x2c\40\142\56\160\x33\54\x20\x62\x2e\x70\x33\137\x64\145\163\153\x2c" . "\x20\143\56\x6e\x69\x6c\x61\151\54\40\x63\x2e\144\145\163\153\x72\x69\x70\163\x69\x20\141\163\x20\x73\141\x72\x61\x6e");
        goto JaZIj;
        Cesha:
        return $this->db->get()->row();
        goto NfP5M;
        sFqai:
        $this->db->where("\x62\56\x69\x64\x5f\x72\x61\x6e\153\x69\156\x67", $id_kelas . $id_siswa . $id_tp . $id_smt);
        goto Cesha;
        JaZIj:
        $this->db->from("\x72\141\160\x6f\x72\137\x70\162\145\163\164\x61\x73\151\x20\x62");
        goto dtV_u;
        NfP5M:
    }
    public function getDummyDeskripsiSpiritual()
    {
        return ["\x62\x65\162\144\x6f\x61\x20\x73\145\142\x65\154\165\x6d\40\144\x61\156\40\163\x65\163\165\144\141\x68\x20\x6d\145\x6c\141\x6b\165\x6b\x61\156\40\x6b\145\x67\x69\x61\x74\141\156", "\155\x65\x6e\x6a\x61\x6c\x61\x6e\x6b\x61\x6e\40\151\142\141\x64\x61\x68\40\x73\x65\163\165\141\x69\40\x64\145\156\x67\x61\156\x20\x61\x67\x61\x6d\141\x6e\x79\141", "\155\x65\155\142\145\x72\x69\40\163\x61\x6c\x61\x6d\40\160\141\144\x61\x20\163\x61\141\164\40\141\167\141\154\x20\144\x61\156\40\141\x6b\150\x69\x72\40\153\145\147\151\141\164\141\156", "\142\145\162\x73\x79\165\153\x75\162\x20\141\164\141\x73\x20\x6e\x69\x6b\155\141\164\x20\x64\x61\x6e\x20\153\141\162\x75\x6e\x69\x61\40\124\x75\x68\x61\x6e\x20\x59\141\x6e\147\x20\115\x61\x68\141\x20\105\163\x61", "\x6d\145\156\x73\x79\165\x6b\x75\162\x69\x20\153\x65\155\x61\x6d\160\165\x61\156\40\155\141\156\x75\163\x69\141\x20\x64\141\154\141\x6d\40\x6d\145\156\147\145\156\144\x61\154\x69\x6b\x61\156\x20\144\151\x72\x69", "\142\145\162\163\171\165\x6b\165\162\x20\153\145\x74\x69\153\141\40\x62\145\162\150\x61\x73\x69\x6c\40\x6d\x65\156\147\x65\x72\152\x61\x6b\141\156\x20\163\145\x73\165\141\164\165", "\x62\145\x72\x73\145\162\x61\x68\x20\x64\151\x72\151\x20\x28\x74\x61\x77\x61\x6b\141\154\x29\x20\x6b\145\x70\x61\x64\141\40\x54\x75\150\141\156\40\163\145\164\x65\x6c\141\x68\x20\142\x65\x72\151\153\150\164\151\x61\162\40\x61\164\x61\x75\40\x6d\x65\154\141\x6b\x75\x6b\141\156\x20\165\163\x61\150\141", "\155\145\x6d\145\154\x69\x68\x61\162\x61\x20\150\x75\142\165\x6e\x67\141\156\x20\142\141\x69\153\40\x64\x65\156\147\141\x6e\x20\163\145\x73\141\x6d\141\x20\x75\155\141\x74", "\142\145\x72\x73\x79\x75\x6b\165\x72\x20\x73\145\142\x61\147\141\x69\x20\x62\x61\x6e\x67\163\x61\x20\x49\x6e\x64\x6f\156\145\163\x69\x61", "\155\145\x6e\147\x68\157\162\155\x61\164\151\x20\157\162\x61\156\x67\x20\x6c\x61\x69\x6e\x20\x79\x61\156\147\40\155\145\156\152\141\154\141\x6e\x6b\141\x6e\x20\x69\x62\141\x64\x61\150\40\163\145\x73\165\141\x69\40\144\145\x6e\147\141\156\40\141\147\x61\155\x61\x6e\171\x61"];
    }
    public function getDummyDeskripsiSosial()
    {
        return ["\152\x75\152\x75\162", "\144\x69\x73\151\x70\154\151\x6e", "\164\141\x6e\x67\147\x75\156\147\40\x6a\141\x77\x61\x62", "\163\x61\x6e\x74\165\x6e", "\160\x65\162\143\141\171\141\40\144\x69\162\x69", "\160\x65\144\x75\154\151", "\x74\x6f\154\145\162\x61\x6e\163\x69", "\x67\157\164\157\x6e\x67\x20\x72\x6f\171\x6f\x6e\147", "\162\141\152\151\156", "\x74\151\x64\x61\x6b\x20\x6d\x75\144\x61\150\x20\155\x65\156\171\x65\162\x61\x68"];
    }
    public function getDummyDeskripsiAbsensi()
    {
        return ["\113\x65\150\141\x64\x69\x72\141\x6e\40\143\x75\x6b\165\160\x20\x62\x61\151\153\x20\156\141\155\165\156\x20\x70\x65\x72\x6c\x75\x20\x64\x69\x74\151\156\147\153\x61\164\x6b\141\x6e\56", "\125\163\x61\x68\141\x6b\141\x6e\40\150\141\144\151\x72\x20\163\x65\164\x69\141\x70\x20\x68\x61\x72\151\56", "\x4a\141\156\x67\x61\156\40\x74\x65\x72\154\x61\154\x75\40\142\x61\156\171\141\153\40\x61\x6c\160\141\x2c\x20\x64\x69\150\141\x72\141\x70\x6b\x61\156\40\163\x65\x6c\x61\154\165\40\x68\x61\144\151\x72\40\153\x65\40\163\145\153\x6f\154\141\x68", "\x4b\145\150\141\144\x69\162\141\x6e\155\x75\x20\x73\141\156\147\x61\164\40\152\141\162\141\156\147\40\x73\145\153\141\154\151"];
    }
    public function getDummyDeskripsiCatatan()
    {
        return ["\123\x65\x6c\x61\154\165\40\142\x65\162\165\163\141\x68\x61\x20\x75\156\x74\x75\153\x20\155\x65\155\141\164\x75\150\x69\x20\164\141\164\x61\x20\164\x65\162\x74\151\x62\x20\x73\145\x6b\x6f\x6c\x61\x68\40\x64\x61\x6e\x20\x70\141\x74\x75\x68\40\164\145\x72\x68\141\x64\141\160\40\107\x75\162\x75\56", "\x53\x65\154\x61\x6c\x75\40\142\145\x72\x75\163\x61\x68\141\x20\165\156\x74\165\153\x20\x6d\x61\156\x64\x69\162\151\x20\x64\141\156\40\x74\x65\160\141\x74\40\x77\x61\x6b\164\x75\x20\x64\141\154\141\x6d\40\x6d\x65\156\x67\x65\162\152\x61\153\141\156\40\x74\x75\x67\x61\163\x2e", "\115\145\155\x70\165\156\x79\x61\x69\x20\153\x65\x6d\x61\x6d\160\165\141\156\x20\x64\x61\156\x20\155\x6f\164\x69\166\141\x73\151\x20\x79\141\156\x67\40\164\x69\x6e\x67\x67\151\40\165\156\x74\165\153\x20\x6d\x65\156\147\147\165\x6e\141\x6b\141\156\x20\167\x61\153\x74\x75\40\163\x65\x63\141\x72\141\40\x65\146\x69\163\x69\x65\156\56", "\104\151\150\x61\162\x61\x70\x6b\141\156\40\x6d\145\x72\165\x62\141\x68\x20\x70\145\x6e\141\155\x70\151\154\x61\156\156\171\x61\40\x6d\x65\156\x6a\x61\144\x69\x20\x6c\x65\142\151\150\x20\162\141\160\151\54\x20\x73\145\x70\145\x72\x74\x69\40\164\x65\x6e\x74\141\156\x67\x20\160\x6f\164\157\x6e\147\x20\x72\x61\155\142\x75\x74\x20\x64\141\156\x20\x63\141\162\141\x20\142\x65\162\160\x61\x6b\141\151\x61\156\56", "\x4d\x61\163\151\x68\x20\160\145\x72\x6c\165\40\x6d\145\155\160\x65\162\x62\x61\x6e\x79\x61\153\x20\x74\145\x6d\x61\156\x20\142\x65\x72\147\141\x75\x6c\40\144\141\156\40\x74\x65\155\141\156\x20\144\x69\x73\x6b\165\163\151\x2c\x20\x6b\165\162\141\x6e\147\x69\40\141\153\x74\151\146\x69\x74\x61\163\40\155\145\x6e\171\145\x6e\144\x69\162\151\56", "\104\x69\x68\141\162\x61\160\x6b\141\156\x20\144\141\x70\x61\x74\40\155\145\156\x69\156\x67\x6b\141\164\153\141\156\40\x6b\x6f\x6d\151\x74\155\145\x6e\156\171\x61\x20\x75\x6e\164\165\x6b\x20\x6c\145\142\151\x68\40\163\x65\162\151\165\163\x20\x73\x61\x61\x74\40\x6d\145\x6e\147\145\162\152\141\x6b\141\x6e\40\x74\x75\x67\x61\x73\x20\x64\141\x6e\40\164\151\144\x61\153\x20\155\x75\144\141\150\x20\x6d\x65\x6e\171\145\x72\x61\150\x2e"];
    }
    public function getDummyDeskripsiRanking()
    {
        return ["\x50\162\x65\x73\x74\141\x73\151\156\x79\141\40\163\141\156\147\x61\164\x20\142\141\x69\x6b\x2c\x20\160\x65\x72\x6c\x75\40\144\151\160\x65\162\x74\x61\150\141\x6e\x6b\141\x6e\x2e", "\x50\x72\x65\163\164\141\163\x69\40\142\141\151\x6b\54\40\160\145\x72\154\x75\x20\144\x69\160\x65\x72\x74\141\x68\x61\156\x6b\141\x6e\x20\144\x61\156\40\x64\164\x69\156\147\153\141\164\x6b\141\156\x2e", "\x50\x72\x65\163\164\x61\x73\151\x20\x63\x75\153\165\x70\x2c\x20\160\x65\162\x6c\165\x20\x64\x69\x74\x69\156\x67\153\x61\x74\153\141\156\40\142\x65\x6c\x61\x6a\x61\162\40\144\141\156\40\x62\x65\162\x64\157\x61\56", "\x50\145\x72\x6c\165\40\144\x69\x74\x69\x6e\x67\x6b\141\x74\x6b\x61\156\40\142\x65\x6c\x61\152\x61\x72\x6e\x79\141\x2c\x20\x6a\x61\x6e\147\141\156\x20\154\x75\160\x61\x20\x62\x65\162\x64\157\141\56", "\x50\145\x72\154\165\x20\144\151\155\x61\153\x73\x69\x6d\141\x6c\x6b\x61\x6e\40\x62\145\x6c\141\x6a\141\x72\156\171\x61\54\x20\x75\163\141\150\141\x20\153\x65\x72\x61\x73\40\x64\141\156\40\x62\x65\x72\x64\x6f\x61\x2e", "\120\x65\x72\154\x75\x20\165\x73\141\x68\x61\x20\153\x65\162\x61\x73\54\x20\x6d\x61\153\x73\x69\155\141\154\x6b\141\x6e\x20\x62\x65\154\141\152\141\162\x6e\171\x61\x2c\40\154\x65\x62\151\x68\40\x67\x69\x61\x74\x20\x62\x65\x72\x64\157\141\40\x64\x61\156\x20\142\x65\162\x69\142\141\144\x61\150\56"];
    }
    public function getDummyDeskripsiFisik($jenis)
    {
        goto IfQiq;
        yfrn3:
        KVyVs:
        goto lS0si;
        lm8op:
        return ["\x54\165\x62\x75\x68\40\163\x65\150\x61\164\40\144\x61\x6e\x20\153\165\x61\x74", "\115\x75\144\x61\150\x20\153\x65\x63\141\160\145\x6b\x61\156", "\x4b\145\142\x65\162\x73\x69\x68\x61\x6e\40\142\141\x64\141\156\40\153\x75\x72\141\x6e\147\x20\x74\x65\x72\x6a\x61\147\141", ''];
        goto fXHs2;
        CTIcx:
        return ["\102\x61\x69\153", "\x4b\165\x72\141\156\x67\40\x70\x65\153\141", "\124\x65\x6c\x69\156\147\141\40\160\145\x72\154\165\x20\144\x69\142\x65\x72\x73\151\x68\x6b\x61\x6e", ''];
        goto WSQhD;
        whiIe:
        b41Gx:
        goto aZFx_;
        aZFx_:
        return ["\102\141\151\x6b", "\123\145\162\151\156\147\40\x62\x65\162\141\x69\x72", "\x4b\165\162\141\x6e\x67\40\152\x65\x6c\141\x73\x20\152\151\x6b\x61\x20\x6d\145\154\151\x68\141\164\x20\x6a\x61\162\141\x6b\x20\x6a\x61\x75\x68", ''];
        goto Zsvpp;
        Zsvpp:
        goto JR9ul;
        goto yfrn3;
        fXHs2:
        goto JR9ul;
        goto UYYTl;
        UYYTl:
        fSZzb:
        goto CTIcx;
        lS0si:
        return ["\102\x61\x69\x6b\x2c\40\x6e\141\x6d\x70\x61\x6b\x20\160\165\164\151\x68\40\x64\141\x6e\x20\x62\145\162\x73\151\x68", "\x54\x65\x72\x64\141\160\141\164\x20\x67\x69\147\x69\40\x79\141\156\147\40\147\x69\x67\x69\163", "\x4b\145\142\145\x72\163\x69\x68\141\x6e\40\147\151\x67\x69\x20\153\x75\x72\x61\x6e\x67\x20\x74\x65\x72\152\x61\147\141", "\101\x64\141\40\147\151\147\151\x20\x79\x61\x6e\x67\40\x6d\x61\x75\40\164\141\x6e\147\147\x61\154"];
        goto amZap;
        amZap:
        JR9ul:
        goto Jk7hL;
        IKfQr:
        if ($jenis == "\63") {
            goto KVyVs;
        }
        goto lm8op;
        A4Ev5:
        if ($jenis == "\62") {
            goto b41Gx;
        }
        goto IKfQr;
        IfQiq:
        if ($jenis == "\61") {
            goto fSZzb;
        }
        goto A4Ev5;
        WSQhD:
        goto JR9ul;
        goto whiIe;
        Jk7hL:
    }
    public function getKenaikanSiswa($id_kelas, $id_tp, $id_smt, $level = null)
    {
        goto lN6oh;
        neEGG:
        return $this->db->get()->result();
        goto OXCJC;
        zln3c:
        $this->db->join("\x6d\141\x73\x74\145\x72\x5f\x6b\145\154\141\x73\40\x63", "\141\56\x69\x64\137\x6b\145\x6c\x61\x73\75\143\56\x69\144\137\x6b\145\154\x61\163", "\154\145\x66\x74");
        goto czhd4;
        czhd4:
        $this->db->join("\162\141\160\x6f\x72\x5f\156\x61\x69\153\x20\144", "\141\x2e\151\144\137\163\151\x73\167\141\x3d\144\x2e\x69\144\x5f\x73\x69\x73\x77\141\x20\x41\116\104\40\x61\x2e\151\x64\137\x74\160\75\144\56\x69\x64\x5f\164\160\x20\x41\116\104\x20\x61\x2e\x69\144\x5f\163\x6d\164\75\x64\56\151\x64\137\163\155\x74", "\x6c\145\x66\x74");
        goto yzMY7;
        Q2ArL:
        sC00Y:
        goto t9uis;
        XDzNx:
        $this->db->select("\141\x2e\52\x2c\40\x62\x2e\x6e\141\x6d\x61\x2c\x20\x62\56\x6e\151\163\54\x20\142\56\x6e\x69\163\x6e\x2c\x20\x62\56\165\163\145\162\x6e\141\155\145\54\40\x63\56\x69\144\137\x6b\x65\x6c\141\163\54\x20\143\x2e\156\x61\155\141\137\x6b\x65\154\x61\x73\54\x20\143\x2e\x6c\x65\166\x65\x6c\x5f\151\144\54\x20\x64\x2e\x6e\141\151\x6b");
        goto TyzmI;
        t9uis:
        if (!($id_kelas != null)) {
            goto couJ7;
        }
        goto l35hA;
        F6Tr9:
        $this->db->where("\x63\x2e\154\145\x76\145\x6c\x5f\151\x64", $level);
        goto Q2ArL;
        yzMY7:
        if (!($level != null)) {
            goto sC00Y;
        }
        goto F6Tr9;
        afNuu:
        $this->db->where("\x61\x2e\151\x64\x5f\163\x6d\164", $id_smt);
        goto neEGG;
        bxy2f:
        $this->db->join("\x6d\141\x73\x74\145\x72\137\x73\151\163\167\x61\x20\142", "\141\x2e\151\144\137\163\x69\x73\167\141\x3d\x62\x2e\151\x64\x5f\x73\x69\x73\x77\x61", "\x6c\x65\146\164");
        goto zln3c;
        l35hA:
        $this->db->where("\141\x2e\x69\x64\137\153\x65\x6c\x61\x73", $id_kelas);
        goto dNTVh;
        lN6oh:
        $this->db->query("\x53\x45\124\40\123\121\x4c\137\x42\x49\107\x5f\123\105\114\105\x43\x54\x53\x3d\x31");
        goto XDzNx;
        ZaDhY:
        $this->db->where("\x61\x2e\x69\x64\137\164\x70", $id_tp);
        goto afNuu;
        dNTVh:
        couJ7:
        goto ZaDhY;
        TyzmI:
        $this->db->from("\153\x65\154\141\163\x5f\163\151\163\167\x61\x20\x61");
        goto bxy2f;
        OXCJC:
    }
    public function getSiswaLulus($id_tp, $id_smt, $level)
    {
        goto RHf2M;
        sl12u:
        $this->db->where("\x63\x2e\154\145\x76\145\154\137\151\144", $level);
        goto ZRQ5f;
        rPcP3:
        return $this->db->get()->result();
        goto x1yKR;
        EYRr9:
        $this->db->from("\153\145\154\x61\x73\137\x73\x69\x73\x77\x61\x20\x61");
        goto XPdli;
        X1JIM:
        $this->db->join("\155\141\x73\164\145\x72\137\153\x65\154\x61\x73\40\x63", "\x61\x2e\151\x64\137\x6b\145\154\x61\163\75\143\x2e\151\x64\x5f\153\145\x6c\x61\x73", "\x6c\x65\146\x74");
        goto KDkuZ;
        Nnp19:
        $this->db->where("\141\x2e\151\144\137\163\x6d\164", $id_smt);
        goto rPcP3;
        XPdli:
        $this->db->join("\x6d\141\x73\164\x65\x72\137\x73\x69\x73\x77\x61\40\x62", "\x61\56\151\x64\x5f\163\151\x73\x77\141\75\x62\56\x69\144\137\x73\151\163\x77\x61", "\154\145\x66\x74");
        goto X1JIM;
        VEZRa:
        $this->db->select("\142\56\x2a\54\40\143\56\x6e\141\x6d\x61\x5f\153\x65\x6c\141\163\40\x61\x73\40\x6b\145\x6c\141\x73\137\x61\153\x68\151\x72\54\x20\x64\56\156\141\x69\x6b");
        goto EYRr9;
        KDkuZ:
        $this->db->join("\162\141\160\157\162\137\x6e\x61\x69\x6b\40\x64", "\141\56\x69\x64\x5f\x73\x69\x73\x77\x61\75\144\x2e\x69\x64\137\163\151\163\167\141\x20\101\x4e\104\x20\141\x2e\151\x64\137\x74\x70\x3d\x64\x2e\151\x64\x5f\164\160\40\x41\x4e\x44\x20\141\56\x69\x64\137\163\x6d\164\75\144\56\151\x64\x5f\x73\155\164", "\x6c\145\146\x74");
        goto sl12u;
        RHf2M:
        $this->db->query("\123\105\124\x20\123\x51\x4c\137\x42\x49\x47\x5f\x53\105\x4c\x45\103\x54\123\x3d\61");
        goto VEZRa;
        ZRQ5f:
        $this->db->where("\x61\x2e\151\144\137\164\x70", $id_tp);
        goto Nnp19;
        x1yKR:
    }
    public function getJumlahLulus($id_tp, $id_smt, $level)
    {
        goto Bj7YZ;
        uebjs:
        $this->db->select("\141\56\52\x2c\x20\142\x2e\156\141\x6d\141\54\x20\142\56\156\151\x73\x2c\x20\142\x2e\x6e\x69\x73\156\54\40\x62\x2e\x75\163\x65\x72\156\x61\x6d\145\x2c\40\x63\56\x69\144\137\x6b\145\x6c\141\x73\x2c\x20\x63\x2e\156\x61\155\141\x5f\153\145\x6c\x61\163\x2c\40\x63\56\154\x65\166\145\x6c\137\151\x64\x2c\x20\144\x2e\156\x61\151\x6b");
        goto lF9jz;
        Vm8Ft:
        $this->db->join("\x6d\x61\x73\x74\x65\x72\x5f\153\145\154\x61\x73\x20\143", "\x61\x2e\151\144\x5f\153\x65\154\141\163\75\x63\56\151\x64\x5f\x6b\x65\154\141\x73", "\154\x65\x66\x74");
        goto eCAW1;
        kXb0I:
        $this->db->where("\x61\x2e\x69\144\137\163\x6d\x74", $id_smt);
        goto bUA8O;
        lF9jz:
        $this->db->from("\x6b\x65\154\141\163\x5f\163\151\163\167\141\x20\x61");
        goto Vm8Ft;
        jRf9w:
        $this->db->where("\x61\56\151\x64\x5f\x74\160", $id_tp);
        goto kXb0I;
        wspL7:
        $this->db->where("\143\x2e\154\x65\166\x65\154\137\x69\144", $level);
        goto jRf9w;
        Bj7YZ:
        $this->db->query("\123\x45\124\x20\x53\x51\114\x5f\x42\x49\x47\137\123\105\x4c\x45\103\x54\x53\75\61");
        goto uebjs;
        bUA8O:
        return $this->db->count_all_results();
        goto mV_g4;
        eCAW1:
        $this->db->join("\x72\141\x70\157\x72\137\x6e\x61\x69\x6b\40\x64", "\141\x2e\151\x64\x5f\x73\x69\163\x77\141\75\144\x2e\151\x64\x5f\163\151\163\x77\141\40\101\x4e\104\x20\141\x2e\x69\144\137\x74\160\x3d\144\x2e\x69\x64\137\164\x70\40\101\116\x44\x20\141\56\151\144\x5f\x73\155\164\75\x64\x2e\x69\144\137\163\x6d\164", "\x6c\x65\x66\164");
        goto wspL7;
        mV_g4:
    }
    public function getKenaikanRapor($id_kelas, $id_tp, $id_smt)
    {
        goto PKNnD;
        dGTMD:
        $this->db->join("\x72\x61\160\x6f\162\137\156\141\x69\153\x20\144", "\x61\x2e\151\x64\x5f\x73\151\163\x77\141\x3d\144\x2e\x69\x64\137\x73\151\x73\x77\141\40\x41\116\x44\x20\141\56\x69\x64\137\x74\160\x3d\144\x2e\x69\x64\137\164\160\40\x41\x4e\x44\40\141\x2e\x69\x64\137\163\x6d\x74\x3d\144\x2e\151\x64\137\x73\x6d\x74", "\x6c\x65\146\x74");
        goto z3XVs;
        z3XVs:
        $this->db->where("\x61\x2e\151\144\137\x6b\145\154\141\163", $id_kelas);
        goto s1ZCL;
        s1ZCL:
        $this->db->where("\x61\x2e\x69\144\x5f\164\x70", $id_tp);
        goto Q6EaQ;
        PKNnD:
        $this->db->select("\141\x2e\x69\x64\x5f\153\x65\x6c\141\163\54\x20\x61\x2e\151\x64\137\163\x69\163\167\x61\x2c\40\144\x2e\156\141\x69\x6b");
        goto uXZ9e;
        jdy6m:
        rmKFP:
        goto zQ34G;
        uXZ9e:
        $this->db->from("\153\x65\x6c\141\x73\x5f\163\151\163\167\141\x20\141");
        goto dGTMD;
        zQ34G:
        return $ret;
        goto kcGUC;
        Q6EaQ:
        $this->db->where("\141\x2e\151\x64\x5f\163\155\164", $id_smt);
        goto NxZzT;
        TGZFA:
        $ret = [];
        goto Y9Cct;
        NxZzT:
        $ress = $this->db->get()->result();
        goto TGZFA;
        Y9Cct:
        foreach ($ress as $res) {
            $ret[$res->id_siswa] = $res->naik;
            Qw_Sl:
        }
        goto jdy6m;
        kcGUC:
    }
    public function getAllRaporSetting()
    {
        goto vitEI;
        iWDeh:
        return $ret;
        goto YwrjT;
        e0ZxZ:
        foreach ($result as $key => $row) {
            $ret[$row->id_tp][$row->id_smt] = $row;
            mM1aU:
        }
        goto Uz5b3;
        Y43PB:
        IyVWN:
        goto iWDeh;
        CQ0zY:
        if (!$result) {
            goto IyVWN;
        }
        goto e0ZxZ;
        vitEI:
        $result = $this->db->get("\162\x61\160\x6f\x72\137\141\144\x6d\151\156\x5f\x73\x65\164\x74\x69\x6e\x67")->result();
        goto BKtvD;
        Uz5b3:
        re2f1:
        goto Y43PB;
        BKtvD:
        $ret = [];
        goto CQ0zY;
        YwrjT:
    }
    public function getAllKkm()
    {
        goto XZ1Qf;
        DRg_7:
        E4JQ2:
        goto waB6S;
        zMYu8:
        $ret = [];
        goto ILCPi;
        XZ1Qf:
        $result = $this->db->get("\162\x61\x70\157\162\137\153\x6b\155")->result();
        goto zMYu8;
        waB6S:
        return $ret;
        goto XEVjW;
        ILCPi:
        foreach ($result as $res) {
            $ret[$res->id_tp][$res->id_smt][$res->id_kelas][$res->jenis][$res->id_mapel] = $res;
            CYxLC:
        }
        goto DRg_7;
        XEVjW:
    }
    public function getAllKkmRaporAkhir($kelas, $id_tp, $id_smt)
    {
        goto cVCuU;
        ZGiUf:
        return $ret;
        goto kF5R_;
        Oct1q:
        foreach ($result as $res) {
            $ret[$res->jenis][$res->id_mapel] = $res;
            mGV21:
        }
        goto qw5fz;
        TijMY:
        $ret = [];
        goto Oct1q;
        cVCuU:
        $this->db->where("\x69\144\x5f\153\145\x6c\x61\163", $kelas)->where("\x69\144\137\164\160", $id_tp)->where("\x69\x64\x5f\x73\155\x74", $id_smt);
        goto MWDj2;
        qw5fz:
        rIlIC:
        goto ZGiUf;
        MWDj2:
        $result = $this->db->get("\162\x61\160\x6f\162\x5f\153\x6b\x6d")->result();
        goto TijMY;
        kF5R_:
    }
    public function getAllNilaiAkhir()
    {
        goto n3BhD;
        NXEpH:
        $this->db->join("\x72\x61\160\x6f\162\x5f\x6e\151\154\x61\151\137\141\153\x68\151\162\40\143", "\x63\56\151\x64\137\x6e\151\x6c\141\x69\137\x61\153\x68\151\x72\x3d\x61\x2e\151\x64\x5f\x6e\151\154\141\151\x5f\x68\x61\162\x69\x61\156", "\154\145\x66\x74");
        goto WMWDV;
        NuZby:
        $this->db->from("\162\141\x70\x6f\162\x5f\x6e\151\x6c\x61\151\x5f\x68\141\x72\x69\141\156\x20\x61");
        goto c4ULt;
        by6Ym:
        foreach ($result as $res) {
            $ret[$res->id_tp][$res->id_smt][$res->id_siswa] = $res;
            KS8JI:
        }
        goto wwmb5;
        wQZlQ:
        return $ret;
        goto zsE8E;
        jOeUb:
        $this->db->select("\x61\x2e\151\x64\x5f\164\x70\54\40\x61\56\151\144\x5f\x73\155\x74\x2c\x20\141\x2e\x69\144\x5f\163\151\x73\x77\141\54\x20\x61\56\160\x5f\x72\141\x74\141\x5f\162\x61\x74\x61\40\141\163\40\x6e\150\141\x72\54\x20\x61\56\x70\x5f\144\x65\x73\x6b\162\151\160\163\151\54\40\141\x2e\153\137\162\141\164\141\x5f\162\141\x74\141\54" . "\x20\x61\56\x6b\137\x70\x72\x65\x64\x69\153\141\164\54\x20\x61\56\153\x5f\144\x65\163\x6b\162\x69\x70\163\151\x2c\40\x62\x2e\x6e\x69\154\x61\x69\40\x61\x73\40\x6e\160\164\x73\54\40\x63\x2e\156\151\x6c\x61\x69\40\141\x73\40\x6e\160\x61\x73\54\x20\x63\x2e\160\x72\x65\x64\x69\x6b\141\x74");
        goto NuZby;
        wQiqd:
        $ret = [];
        goto by6Ym;
        WMWDV:
        $result = $this->db->get()->result();
        goto wQiqd;
        wwmb5:
        KygAZ:
        goto wQZlQ;
        n3BhD:
        $this->db->query("\x53\x45\124\x20\123\x51\114\x5f\102\x49\107\137\123\x45\x4c\105\103\x54\123\75\61");
        goto jOeUb;
        c4ULt:
        $this->db->join("\162\141\x70\157\x72\137\156\x69\154\x61\151\137\160\164\163\40\x62", "\142\56\151\x64\137\156\151\154\141\151\x5f\x70\x74\x73\x3d\141\x2e\151\x64\x5f\x6e\x69\x6c\x61\151\x5f\150\x61\x72\x69\x61\156", "\x6c\145\146\164");
        goto NXEpH;
        zsE8E:
    }
    public function getDistinctTahunBukuNilai()
    {
        goto KOxIW;
        KOxIW:
        $this->db->select("\x74\x70");
        goto eq0wt;
        Sao2b:
        foreach ($result as $row) {
            $ret[$row->tp] = $row->tp;
            MpanW:
        }
        goto RbpfF;
        RbpfF:
        n0YeW:
        goto DZp7i;
        vPmrN:
        $result = $this->db->get("\142\165\x6b\165\x5f\156\151\154\141\x69")->result();
        goto DFcGa;
        DZp7i:
        return $ret;
        goto wwSIR;
        DFcGa:
        $ret = [];
        goto Sao2b;
        eq0wt:
        $this->db->distinct();
        goto vPmrN;
        wwSIR:
    }
    public function getDistinctSmtBukuNilai()
    {
        goto YoZKs;
        bqt0K:
        $result = $this->db->get("\x62\165\153\x75\x5f\156\151\154\x61\x69")->result();
        goto okGZX;
        uU4sl:
        foreach ($result as $row) {
            $ret[$row->smt] = $row->smt;
            CkYC_:
        }
        goto zw60U;
        okGZX:
        $ret = [];
        goto uU4sl;
        YoZKs:
        $this->db->select("\x73\x6d\164");
        goto u5fJ1;
        xjvie:
        return $ret;
        goto R8Xct;
        zw60U:
        q_69q:
        goto xjvie;
        u5fJ1:
        $this->db->distinct();
        goto bqt0K;
        R8Xct:
    }
    public function getDistinctKelasBukuNilai()
    {
        goto Tm6kM;
        b26c6:
        $this->db->distinct();
        goto F95iB;
        Tm6kM:
        $this->db->select("\x6b\145\x6c\141\x73");
        goto b26c6;
        cfvrN:
        $ret = [];
        goto vw1Da;
        vw1Da:
        foreach ($result as $row) {
            $ret[$row->kelas] = $row->kelas;
            XLNYs:
        }
        goto iZ9ZG;
        F95iB:
        $result = $this->db->get("\142\165\153\165\x5f\x6e\151\154\141\151")->result();
        goto cfvrN;
        iZ9ZG:
        JP00D:
        goto bI0Bf;
        bI0Bf:
        return $ret;
        goto s3Q0c;
        s3Q0c:
    }
    public function getFisikBySiswa($id_siswa)
    {
        goto EAM9I;
        EAM9I:
        $this->db->select("\x74\160\x2c\x20\146\x69\163\x69\x6b");
        goto R5bAC;
        IPNob:
        $ret = [];
        goto aNm50;
        R5bAC:
        $this->db->from("\142\x75\153\165\x5f\156\x69\x6c\141\x69");
        goto g1cCn;
        azvkm:
        foreach ($result as $key => $row) {
            $ret[$row->tp] = $row;
            iUox_:
        }
        goto WlyD1;
        wyMU4:
        $result = $this->db->get()->result();
        goto IPNob;
        aUCun:
        return $ret;
        goto sVirr;
        g1cCn:
        $this->db->where("\x69\x64\137\x73\151\x73\x77\141", $id_siswa);
        goto wyMU4;
        WlyD1:
        OQjBg:
        goto PoyYA;
        PoyYA:
        ymPw8:
        goto aUCun;
        aNm50:
        if (!$result) {
            goto ymPw8;
        }
        goto azvkm;
        sVirr:
    }
    public function getDataKumpulanRapor($kelas = null, $tp = null, $smt = null)
    {
        goto PHaX2;
        LG1kb:
        $this->db->where("\141\56\153\x65\154\x61\163", $kelas);
        goto ktJZU;
        j6Jgl:
        $this->db->join("\x6d\x61\163\164\145\x72\x5f\x73\x69\163\x77\x61\x20\x62", "\141\x2e\x69\x64\137\x73\151\x73\167\x61\75\142\x2e\x69\144\137\x73\151\163\167\x61");
        goto CZ12L;
        CZ12L:
        if (!($tp != null)) {
            goto GxKKG;
        }
        goto QIl42;
        QIl42:
        $this->db->where("\141\56\164\x70", $tp);
        goto REeyC;
        PNOJx:
        if (!$result) {
            goto CtGcq;
        }
        goto sTCO2;
        vAgcd:
        POGPk:
        goto V2TKb;
        Uvu2y:
        $this->db->from("\x62\x75\153\165\137\156\x69\x6c\x61\151\40\x61");
        goto j6Jgl;
        FPE_l:
        $this->db->where("\141\56\x73\155\164", $smt);
        goto NzBg4;
        REeyC:
        GxKKG:
        goto BwpJt;
        NzBg4:
        nms8S:
        goto YL_Sv;
        ktJZU:
        XPpqb:
        goto J5fRz;
        RdybL:
        return $ret;
        goto LN5eI;
        sTCO2:
        foreach ($result as $key => $row) {
            $ret[$row->id_siswa] = $row;
            cESFk:
        }
        goto vAgcd;
        BwpJt:
        if (!($smt != null)) {
            goto nms8S;
        }
        goto FPE_l;
        YL_Sv:
        if (!($kelas != null)) {
            goto XPpqb;
        }
        goto LG1kb;
        O0E4I:
        $ret = [];
        goto PNOJx;
        J5fRz:
        $result = $this->db->get()->result();
        goto O0E4I;
        PHaX2:
        $this->db->select("\x2a");
        goto Uvu2y;
        V2TKb:
        CtGcq:
        goto RdybL;
        LN5eI:
    }
    public function deleteNilaiRapor()
    {
        goto mvLuT;
        Df75O:
        $this->db->empty_table("\x72\141\160\x6f\162\137\x63\141\x74\141\164\141\x6e\137\167\141\x6c\x69");
        goto uNfCh;
        FTmmx:
        $this->db->empty_table("\x72\x61\160\x6f\x72\x5f\160\162\x65\x73\x74\x61\163\151");
        goto Df75O;
        uNfCh:
        $this->db->empty_table("\162\141\x70\157\x72\137\x66\x69\x73\x69\x6b");
        goto B8u5k;
        AWYGr:
        $this->db->empty_table("\162\x61\x70\157\162\x5f\x6e\151\154\x61\x69\x5f\163\151\153\141\x70");
        goto rpkmf;
        KxzD_:
        $this->db->empty_table("\162\x61\160\157\162\x5f\156\151\x6c\x61\151\137\x70\x74\163");
        goto FTmmx;
        OtbMI:
        $this->db->empty_table("\x72\x61\160\x6f\162\137\x6e\x69\x6c\141\x69\137\x61\153\x68\x69\x72");
        goto q2WOH;
        B8u5k:
        $this->db->empty_table("\162\x61\160\x6f\x72\x5f\x6e\151\x6c\x61\x69\x5f\145\x6b\x73\164\x72\x61");
        goto AWYGr;
        mvLuT:
        $this->db->empty_table("\162\141\x70\x6f\x72\137\156\x69\154\141\x69\x5f\x68\141\162\x69\141\156");
        goto OtbMI;
        q2WOH:
        $this->db->empty_table("\162\141\x70\x6f\x72\137\x6e\141\x69\153");
        goto KxzD_;
        rpkmf:
    }
    public function getAllNilaiRapor($ids_siswa = null)
    {
        goto BERl6;
        KeQ2l:
        return $result;
        goto b1iqZ;
        T_C5v:
        $this->db->join("\x6d\x61\x73\x74\x65\x72\x5f\164\160\x20\143", "\x63\56\151\144\x5f\x74\160\75\141\x2e\x69\x64\x5f\164\x70", "\154\145\x66\x74");
        goto uIlD_;
        HOH_b:
        $this->db->select("\x61\56\x69\x64\137\x74\160\x2c\x20\141\x2e\151\144\137\163\x6d\x74\54\40\x61\56\x69\144\x5f\155\141\x70\x65\154\54\x20\141\x2e\151\x64\x5f\163\151\163\167\x61\x2c\x20\141\56\x70\x5f\x72\141\164\141\137\x72\x61\164\x61\54\x20\141\x2e\x70\137\160\162\145\144\x69\x6b\x61\164\x2c\40\x61\56\160\x5f\144\145\163\153\162\151\x70\x73\x69\54" . "\40\141\56\153\x5f\x72\141\x74\141\137\162\141\x74\x61\54\40\x61\56\x6b\137\160\x72\145\x64\x69\x6b\x61\164\x2c\40\141\56\153\137\144\x65\163\153\162\x69\x70\x73\151\x2c" . "\x20\x62\x2e\x6e\x69\154\141\x69\40\x61\163\x20\156\x69\154\x61\x69\137\x70\x61\163\54\40\x62\56\x61\x6b\150\x69\162\40\141\x73\40\156\151\x6c\x61\151\x5f\162\x61\160\x6f\x72\54\x20\x62\56\x70\162\145\144\151\x6b\x61\x74\40\141\163\40\162\141\x70\157\162\x5f\160\x72\x65\x64\x69\x6b\141\164\54" . "\x20\x63\x2e\52\54\x20\x64\56\x2a\x2c\40\x65\x2e\40\156\x61\155\x61\54\40\145\56\165\151\x64\x2c\x20\x66\56\156\x61\151\x6b\x2c" . "\40\147\x2e\156\x69\x6c\x61\151\40\141\x73\x20\x6e\151\154\x61\151\x5f\160\x74\x73\54\x20\147\56\x70\162\145\x64\151\x6b\141\164\x20\x61\163\x20\x70\x74\163\137\x70\x72\x65\144\151\x6b\x61\x74\x2c" . "\40\150\56\x20\x69\x64\137\153\x65\154\x61\163\54\x20\x68\56\156\141\x6d\141\x5f\x6b\145\154\x61\x73\54\x20\150\56\x6c\145\166\145\154\x5f\x69\x64\54\x20\151\56\156\x61\x6d\x61\137\x6a\x75\x72\x75\x73\141\x6e\54\x20\x6b\x2e\156\x61\155\x61\137\147\x75\162\165\x2c" . "\40\x6c\56\x72\141\x6e\x6b\x69\x6e\147\54\40\x6c\x2e\x64\x65\x73\x6b\x72\x69\x70\x73\x69\40\141\163\40\162\x61\x6e\x6b\137\x64\145\x73\153\162\x69\x70\x73\151\x2c\40\x6c\x2e\160\x31\54\40\x6c\56\160\61\137\144\145\x73\x6b\x2c\40\154\x2e\x70\x32\54\x20\x6c\x2e\x70\x32\x5f\x64\x65\x73\x6b\54\40\x6c\x2e\160\63\x2c\x20\154\56\160\63\137\144\x65\163\153\54" . "\x20\x6d\x2e\156\x69\154\x61\x69\40\141\x73\x20\141\x62\163\145\x6e\54\40\x6d\x2e\x64\145\163\153\162\x69\160\163\x69\40\x61\x73\40\x73\x61\x72\x61\156\x2c\40\x6e\x2e\153\157\156\x64\151\163\151\54\40\156\x2e\164\151\x6e\147\x67\151\x2c\40\x6e\56\142\145\162\x61\164\54\x20\x70\x2e\153\x6f\x64\x65\40\x61\163\40\x6d\x61\160\145\x6c");
        goto HM3Rh;
        PpPtE:
        $this->db->where_in("\x61\56\x69\x64\137\163\x69\163\x77\x61", $ids_siswa);
        goto KAbC_;
        Cw2AG:
        $this->db->join("\x6d\x61\163\x74\x65\162\137\152\165\x72\165\163\141\156\40\151", "\x68\x2e\152\165\162\x75\x73\141\x6e\x5f\x69\144\75\151\x2e\151\x64\137\152\x75\x72\x75\x73\x61\156", "\x6c\x65\146\164");
        goto Vb5Q1;
        YZr7n:
        if (!($ids_siswa != null)) {
            goto NCXyn;
        }
        goto PpPtE;
        HM3Rh:
        $this->db->from("\162\141\x70\x6f\x72\x5f\x6e\x69\x6c\141\x69\137\150\x61\x72\x69\x61\x6e\40\141");
        goto qd0I7;
        deXHC:
        $this->db->join("\x6d\141\163\x74\x65\x72\x5f\163\151\163\167\141\x20\145", "\145\x2e\x69\x64\x5f\x73\151\x73\x77\141\x3d\x61\56\151\144\x5f\163\151\x73\x77\141", "\x6c\145\x66\164");
        goto CPqaz;
        LaRof:
        $this->db->join("\155\141\163\x74\x65\x72\137\147\165\x72\165\x20\153", "\x6a\x2e\x69\x64\x5f\147\x75\162\165\x3d\x6b\x2e\151\x64\x5f\147\x75\x72\165", "\154\x65\x66\x74");
        goto Ehfog;
        uIlD_:
        $this->db->join("\x6d\141\x73\x74\145\162\x5f\163\155\x74\40\x64", "\144\56\151\144\x5f\163\155\164\75\141\x2e\x69\144\x5f\163\x6d\164", "\154\145\x66\164");
        goto deXHC;
        z2xDG:
        $this->db->join("\155\x61\163\164\145\162\137\x6d\141\x70\145\154\x20\160", "\141\56\151\144\x5f\155\141\x70\x65\154\75\x70\x2e\151\x64\x5f\x6d\x61\160\145\154", "\x6c\x65\x66\x74");
        goto YZr7n;
        KAbC_:
        NCXyn:
        goto lmfPC;
        alcvf:
        $this->db->join("\x72\141\160\x6f\x72\x5f\x6e\x69\154\x61\151\137\x70\164\x73\x20\147", "\x67\x2e\x69\144\137\156\x69\154\x61\151\137\160\164\x73\x3d\141\x2e\x69\x64\137\x6e\x69\154\x61\x69\137\150\x61\x72\x69\x61\156", "\154\x65\146\x74");
        goto jVz_J;
        Vb5Q1:
        $this->db->join("\x6a\141\142\141\x74\x61\x6e\137\147\x75\162\x75\x20\152", "\141\56\x69\x64\137\153\x65\154\x61\163\x3d\152\x2e\151\144\137\x6b\x65\x6c\141\x73\x20\x41\x4e\x44\x20\141\56\x69\x64\x5f\x74\160\75\x6a\x2e\151\144\x5f\x74\x70\40\101\116\104\x20\x61\x2e\151\144\x5f\x73\155\x74\75\152\x2e\x69\144\x5f\x73\x6d\x74", "\x6c\x65\146\164");
        goto LaRof;
        BERl6:
        $this->db->query("\123\x45\124\x20\123\121\x4c\x5f\102\111\107\x5f\x53\x45\114\105\103\x54\x53\75\x31");
        goto HOH_b;
        Ehfog:
        $this->db->join("\162\141\x70\157\x72\x5f\160\x72\x65\163\x74\x61\163\x69\x20\154", "\141\56\151\144\x5f\163\151\163\167\141\x3d\154\x2e\151\144\137\163\x69\163\x77\x61\x20\101\x4e\x44\x20\141\x2e\x69\144\x5f\x74\160\75\154\x2e\x69\144\137\164\x70\40\x41\x4e\104\40\x61\56\x69\x64\137\x73\155\x74\75\154\x2e\x69\x64\x5f\x73\155\164", "\154\x65\x66\164");
        goto Up4bk;
        Jy48I:
        $this->db->join("\x72\x61\x70\157\162\137\x66\151\x73\151\x6b\x20\x6e", "\141\56\x69\x64\x5f\x73\151\163\x77\141\75\x6e\56\x69\x64\x5f\163\x69\163\x77\x61\40\101\x4e\104\40\141\x2e\151\144\x5f\x74\x70\x3d\156\x2e\151\x64\137\164\x70\x20\101\116\x44\x20\141\x2e\x69\x64\x5f\163\x6d\x74\x3d\156\x2e\x69\x64\x5f\163\x6d\x74", "\154\x65\146\164");
        goto z2xDG;
        jVz_J:
        $this->db->join("\x6d\141\x73\164\145\x72\x5f\153\145\154\x61\x73\x20\150", "\141\x2e\151\144\137\x6b\145\x6c\x61\163\x3d\150\x2e\151\x64\137\153\x65\x6c\x61\163\x20\101\116\x44\x20\x61\56\151\144\137\164\160\x3d\150\56\x69\144\137\164\160\x20\x41\x4e\104\40\141\x2e\x69\x64\137\163\155\164\75\x68\56\x69\x64\137\163\155\164", "\x6c\145\146\164");
        goto Cw2AG;
        CPqaz:
        $this->db->join("\162\141\160\157\x72\x5f\156\x61\151\153\40\x66", "\141\56\x69\144\137\163\151\x73\167\x61\x3d\146\56\x69\144\137\x73\151\163\167\x61\40\101\116\x44\x20\141\x2e\151\144\137\164\x70\x3d\146\56\x69\x64\x5f\x74\x70\x20\101\116\104\40\x61\x2e\151\144\x5f\x73\155\x74\75\146\x2e\x69\144\x5f\x73\155\164", "\154\x65\x66\x74");
        goto alcvf;
        Up4bk:
        $this->db->join("\x72\x61\x70\x6f\x72\x5f\143\x61\164\x61\164\x61\156\x5f\x77\x61\x6c\x69\x20\155", "\141\x2e\x69\144\x5f\163\x69\x73\x77\141\75\x6d\x2e\151\144\x5f\x73\x69\x73\x77\x61\40\x41\x4e\104\x20\141\x2e\151\x64\137\x74\x70\x3d\155\x2e\x69\144\x5f\164\160\40\101\116\x44\40\141\56\x69\144\137\163\x6d\x74\75\155\x2e\151\144\137\x73\x6d\x74", "\x6c\145\146\x74");
        goto Jy48I;
        qd0I7:
        $this->db->join("\162\141\x70\157\162\x5f\156\151\154\141\x69\x5f\141\x6b\x68\x69\x72\40\142", "\x62\56\x69\x64\137\156\x69\154\x61\151\137\x61\153\150\151\x72\75\x61\x2e\x69\x64\x5f\x6e\x69\154\141\151\x5f\x68\x61\162\151\141\156", "\154\145\x66\164");
        goto T_C5v;
        lmfPC:
        $result = $this->db->get()->result();
        goto KeQ2l;
        b1iqZ:
    }
    public function getAllEkstra()
    {
        goto L1zVw;
        taSj5:
        if (!$result) {
            goto J8Yog;
        }
        goto P84LQ;
        L1zVw:
        $this->db->select("\x2a");
        goto nhmPS;
        GjZqB:
        $result = $this->db->get()->result();
        goto wkR5Q;
        nhmPS:
        $this->db->from("\x6b\145\154\141\x73\x5f\x65\153\x73\x74\162\141");
        goto GjZqB;
        P84LQ:
        foreach ($result as $key => $row) {
            $ret[$row->id_tp][$row->id_smt][$row->id_kelas] = unserialize($row->ekstra);
            Ybumc:
        }
        goto CJHQf;
        mHRUL:
        return $ret;
        goto JFALU;
        I4T0W:
        J8Yog:
        goto mHRUL;
        CJHQf:
        hW3WZ:
        goto I4T0W;
        wkR5Q:
        $ret = [];
        goto taSj5;
        JFALU:
    }
    public function getAllNilaiEkstra($ids_siswa = null)
    {
        goto QYW8R;
        zD17B:
        $this->db->where_in("\141\x2e\151\x64\x5f\x73\151\163\167\141", $ids_siswa);
        goto emFgh;
        qTTnL:
        $ret = [];
        goto pvagE;
        QYW8R:
        $this->db->select("\x61\56\x2a\54\40\x62\x2e\x6e\x61\155\x61\x5f\x65\x6b\163\164\162\x61\x2c\x20\x62\x2e\x6b\x6f\144\x65\137\145\153\163\164\x72\141");
        goto oalrq;
        AKCyP:
        $result = $this->db->get()->result();
        goto qTTnL;
        AdwX7:
        if (!($ids_siswa != null)) {
            goto a9dzU;
        }
        goto zD17B;
        nFL97:
        $this->db->join("\x6d\x61\x73\x74\x65\162\x5f\145\x6b\x73\x74\162\141\x20\142", "\x61\56\x69\144\x5f\x65\x6b\163\x74\162\x61\x3d\x62\56\x69\144\x5f\145\153\x73\x74\162\141", "\x6c\145\146\x74");
        goto AdwX7;
        tudcN:
        return $ret;
        goto GGXoU;
        Qv6CS:
        EXUtp:
        goto tudcN;
        oalrq:
        $this->db->from("\162\x61\x70\x6f\162\137\156\151\154\141\151\137\x65\x6b\x73\164\162\141\x20\141");
        goto nFL97;
        pvagE:
        foreach ($result as $res) {
            $ret[$res->id_tp][$res->id_smt][$res->id_siswa][] = $res;
            AGo7I:
        }
        goto Qv6CS;
        emFgh:
        a9dzU:
        goto AKCyP;
        GGXoU:
    }
    public function getAllNilaiSikap($ids_siswa = null)
    {
        goto T9yuH;
        Vjp1z:
        return $ret;
        goto UheMA;
        LaDWN:
        $this->db->where_in("\151\x64\x5f\163\151\163\x77\x61", $ids_siswa);
        goto Uw5JX;
        r_igC:
        foreach ($result as $res) {
            $ret[$res->id_tp][$res->id_smt][$res->id_siswa][$res->jenis] = $res;
            PN6rW:
        }
        goto DpsMo;
        T9yuH:
        $this->db->select("\x2a");
        goto cgubS;
        cgubS:
        $this->db->from("\162\x61\160\157\x72\137\156\x69\154\141\x69\x5f\x73\151\153\x61\x70");
        goto phJTI;
        Uw5JX:
        VbxXt:
        goto XF3N3;
        qsMXR:
        $ret = [];
        goto r_igC;
        DpsMo:
        DAbmt:
        goto Vjp1z;
        phJTI:
        if (!($ids_siswa != null)) {
            goto VbxXt;
        }
        goto LaDWN;
        XF3N3:
        $result = $this->db->get()->result();
        goto qsMXR;
        UheMA:
    }
    public function getAllFisik($ids_siswa = null)
    {
        goto Ve7YX;
        NK4M7:
        D53LQ:
        goto WcAUj;
        Ve7YX:
        $this->db->select("\x69\144\137\164\x70\x2c\x20\151\x64\137\x73\155\164\54\x20\x69\x64\137\163\x69\x73\x77\141\54\x20\153\157\x6e\x64\151\163\x69\54\x20\164\151\x6e\147\x67\151\x2c\x20\x62\145\x72\141\x74");
        goto lRx4n;
        MwF3p:
        $ret = [];
        goto a3y8n;
        KWKYU:
        $result = $this->db->get()->result();
        goto MwF3p;
        WcAUj:
        return $ret;
        goto RdROH;
        uG1L6:
        aNcdh:
        goto KWKYU;
        hhdYM:
        $this->db->where_in("\151\144\x5f\x73\x69\163\167\141", $ids_siswa);
        goto uG1L6;
        a3y8n:
        foreach ($result as $res) {
            $ret[$res->id_siswa][$res->id_tp][$res->id_smt] = $res;
            JIWwn:
        }
        goto NK4M7;
        VT3R0:
        if (!($ids_siswa != null)) {
            goto aNcdh;
        }
        goto hhdYM;
        lRx4n:
        $this->db->from("\x72\x61\x70\157\162\x5f\x66\x69\163\151\153");
        goto VT3R0;
        RdROH:
    }
    function exists($uid, $tp, $smt, $kelas)
    {
        goto b1e5L;
        viLGh:
        return true;
        goto CGmu0;
        NLYDj:
        if ($query->num_rows() > 0) {
            goto HTSxm;
        }
        goto WU3Oi;
        CGmu0:
        g_JRl:
        goto cJtuv;
        qM_Vc:
        $query = $this->db->get("\x62\165\153\165\x5f\156\x69\154\x61\151");
        goto NLYDj;
        rHcW3:
        HTSxm:
        goto viLGh;
        b1e5L:
        $this->db->where("\x75\151\144", $uid)->where("\164\160", $tp)->where("\x73\x6d\x74", $smt)->where("\x6b\x65\x6c\x61\x73", $kelas);
        goto qM_Vc;
        GUY4d:
        goto g_JRl;
        goto rHcW3;
        WU3Oi:
        return false;
        goto GUY4d;
        cJtuv:
    }
}
