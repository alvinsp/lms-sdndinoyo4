<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Siswa extends CI_Controller
{
    public function __construct()
    {
        goto JSyWL;
        ijsIY:
        if ($this->ion_auth->logged_in()) {
            goto QtTWo;
        }
        goto KgLDW;
        KgLDW:
        redirect("\141\165\164\x68");
        goto LmzBu;
        JSyWL:
        parent::__construct();
        goto ijsIY;
        UnZLM:
        $this->load->model("\x44\x72\157\x70\144\157\167\156\x5f\x6d\x6f\144\x65\154", "\144\162\x6f\160\x64\x6f\167\x6e");
        goto Jgi0n;
        Y2WEY:
        $this->load->library("\165\160\x6c\x6f\x61\x64");
        goto yWLXs;
        msKe4:
        $this->load->model("\103\142\x74\x5f\155\157\x64\145\x6c", "\143\x62\x74");
        goto HmZiS;
        CEQzU:
        $this->load->model("\120\x6f\x73\x74\x5f\x6d\x6f\x64\145\154", "\160\x6f\x73\x74");
        goto T4L3A;
        T4L3A:
        $this->form_validation->set_error_delimiters('', '');
        goto JFf0g;
        AqA3z:
        $this->load->model("\115\141\x73\164\x65\162\137\155\157\144\x65\154", "\155\141\x73\164\145\x72");
        goto O_Fuh;
        HmZiS:
        $this->load->model("\x4c\x6f\x67\x5f\x6d\157\x64\x65\x6c", "\x6c\x6f\x67\x67\x69\x6e\x67");
        goto CEQzU;
        yWLXs:
        $this->load->library(["\x64\x61\x74\141\164\141\x62\154\x65\x73", "\x66\x6f\x72\x6d\137\166\x61\x6c\151\144\x61\164\151\x6f\x6e"]);
        goto AqA3z;
        O_Fuh:
        $this->load->model("\x44\x61\163\x68\x62\x6f\x61\x72\144\137\155\157\144\x65\x6c", "\x64\141\163\x68\x62\x6f\141\x72\144");
        goto UnZLM;
        LmzBu:
        QtTWo:
        goto Y2WEY;
        Jgi0n:
        $this->load->model("\x4b\145\154\x61\163\137\x6d\157\x64\x65\x6c", "\x6b\x65\154\141\x73");
        goto msKe4;
        JFf0g:
    }
    public function output_json($data, $encode = true)
    {
        goto YoFjo;
        Nqh1N:
        $this->output->set_content_type("\141\160\x70\x6c\x69\x63\x61\x74\x69\157\x6e\57\152\163\x6f\156")->set_output($data);
        goto LOXBn;
        PUWM2:
        Sl_YB:
        goto Nqh1N;
        McteM:
        $data = json_encode($data);
        goto PUWM2;
        YoFjo:
        if (!$encode) {
            goto Sl_YB;
        }
        goto McteM;
        LOXBn:
    }
    public function index()
    {
    }
    public function getPost()
    {
        goto pcBuZ;
        gfYZx:
        $this->output_json($post);
        goto Cc4xY;
        zlDhT:
        $post = $this->post->getPostForUser("\x27\x25\x73\x69\x73\x77\141\x25\47", "\47\45" . $kode . "\45\x27");
        goto gfYZx;
        pcBuZ:
        $kode = $this->input->get("\153\145\154\x61\x73", true);
        goto zlDhT;
        Cc4xY:
    }
    public function getComment($id_post, $page)
    {
        goto Q3zsM;
        hQM1e:
        $this->output_json($comment);
        goto MJ_0c;
        n2kQs:
        $this->db->limit($perPage, $offset);
        goto QW1Ei;
        DvWZ2:
        $this->db->join("\155\141\163\164\x65\x72\x5f\x67\165\162\165\x20\x62", "\141\x2e\x64\141\162\151\75\142\x2e\151\x64\x5f\x67\x75\x72\165", "\x6c\145\146\164");
        goto GULx3;
        G4jRa:
        $this->db->order_by("\x61\56\x74\x61\156\147\x67\x61\154", "\144\x65\x73\x63");
        goto smHxn;
        u5YSW:
        $this->db->query("\123\105\x54\x20\123\x51\x4c\x5f\102\x49\x47\137\123\105\x4c\105\103\x54\x53\75\x31");
        goto fBX1B;
        gRTir:
        $offset = $page * $perPage;
        goto u5YSW;
        Q3zsM:
        $perPage = 5;
        goto gRTir;
        GULx3:
        $this->db->join("\x6d\141\163\164\x65\162\x5f\x73\x69\163\x77\141\40\143", "\141\x2e\144\x61\x72\x69\75\143\56\x69\144\x5f\163\151\163\x77\141", "\154\145\x66\164");
        goto G4jRa;
        QW1Ei:
        $comment = $this->db->get()->result();
        goto hQM1e;
        fBX1B:
        $this->db->select("\x61\x2e\52\x2c\x20\x62\x2e\156\x61\155\141\x5f\x67\x75\162\165\54\x20\x62\56\146\157\164\x6f\54\40\x63\56\x6e\141\155\141\40\x61\x73\40\156\141\155\141\x5f\x73\x69\x73\x77\x61\x2c\40\x63\56\146\x6f\164\157\40\141\x73\x20\x66\x6f\164\157\137\163\151\x73\x77\x61\54\x20\x28\x53\x45\114\x45\x43\124\40\x43\x4f\125\116\124\50\x70\x6f\x73\x74\137\162\x65\160\154\171\56\x69\x64\137\x72\x65\160\x6c\x79\x29\x20\x46\x52\x4f\115\40\x70\157\x73\164\137\162\145\x70\x6c\x79\40\127\110\x45\x52\105\40\x61\x2e\151\144\x5f\x63\x6f\155\x6d\x65\156\164\x20\75\x20\x70\x6f\163\164\137\162\x65\160\x6c\171\56\151\144\137\x63\x6f\x6d\x6d\x65\156\x74\51\40\x41\x53\40\x6a\x6d\154");
        goto R_qur;
        R_qur:
        $this->db->from("\160\x6f\163\164\x5f\x63\x6f\155\x6d\x65\x6e\x74\163\x20\x61");
        goto DvWZ2;
        smHxn:
        $this->db->where("\x61\x2e\x69\144\x5f\x70\x6f\163\164", $id_post);
        goto n2kQs;
        MJ_0c:
    }
    public function getReplies($id_comment, $page)
    {
        goto Ked1p;
        cqufV:
        $this->db->limit($perPage, $offset);
        goto qwBIt;
        qigs4:
        $this->db->join("\155\x61\163\164\145\x72\x5f\x73\151\x73\167\x61\x20\x63", "\x61\56\x64\141\162\151\75\143\56\x69\x64\137\x73\151\x73\167\x61", "\154\145\x66\164");
        goto u2f1d;
        dZOVb:
        $this->db->where("\141\x2e\151\144\137\x63\x6f\155\155\x65\x6e\164", $id_comment);
        goto cqufV;
        txr8u:
        $this->db->select("\141\x2e\x2a\x2c\40\142\x2e\156\141\155\x61\x5f\147\x75\162\x75\x2c\x20\142\x2e\146\x6f\x74\157\54\x20\x63\x2e\156\141\155\x61\x20\x61\x73\40\x6e\141\155\141\x5f\163\x69\x73\x77\141\54\x20\x63\56\146\x6f\164\x6f\40\x61\163\40\146\157\164\157\137\163\x69\163\167\141");
        goto TzUm6;
        u2f1d:
        $this->db->order_by("\x61\x2e\x74\x61\x6e\147\x67\141\x6c", "\x64\145\x73\143");
        goto dZOVb;
        pfenw:
        $this->output_json($replies);
        goto o_8qr;
        Ked1p:
        $perPage = 5;
        goto HFmV0;
        BRwQ4:
        $this->db->join("\155\x61\x73\x74\145\162\137\147\165\162\x75\40\142", "\141\x2e\x64\141\162\x69\x3d\x62\x2e\151\144\x5f\x67\x75\x72\165", "\x6c\x65\146\164");
        goto qigs4;
        CiFmD:
        $this->db->query("\x53\x45\x54\x20\123\121\114\137\x42\111\x47\x5f\123\x45\114\x45\103\x54\x53\x3d\61");
        goto txr8u;
        qwBIt:
        $replies = $this->db->get()->result();
        goto pfenw;
        TzUm6:
        $this->db->from("\x70\157\163\x74\x5f\162\x65\x70\x6c\x79\40\141");
        goto BRwQ4;
        HFmV0:
        $offset = $page * $perPage;
        goto CiFmD;
        o_8qr:
    }
    public function saveKomentar()
    {
        goto Nkp3G;
        nJuKL:
        $data = ["\x74\x79\x70\x65" => "\61", "\x69\144\x5f\160\x6f\163\x74" => $this->input->post("\x69\144\x5f\x70\157\163\164"), "\x64\x61\162\x69" => $dari, "\144\x61\x72\x69\137\x67\x72\157\x75\160" => $dari_group, "\164\145\x78\x74" => $this->input->post("\164\x65\x78\164")];
        goto VLxPY;
        Nkp3G:
        $tp = $this->dashboard->getTahunActive();
        goto oRWDk;
        qRhuU:
        $dari_group = 3;
        goto nJuKL;
        vD1CU:
        $this->db->join("\155\x61\163\164\145\x72\137\147\165\x72\165\40\x62", "\141\x2e\x64\141\x72\151\x3d\x62\56\151\144\x5f\147\x75\x72\x75", "\x6c\x65\x66\x74");
        goto XqZBH;
        n9MmX:
        $this->output_json($comment);
        goto BerkM;
        yBb1Z:
        $this->db->from("\160\157\163\x74\137\143\x6f\x6d\x6d\x65\x6e\164\x73\40\x61");
        goto vD1CU;
        Sjuoz:
        $this->db->query("\123\105\124\40\123\x51\114\137\102\111\x47\137\x53\x45\x4c\105\103\x54\123\x3d\x31");
        goto u6Eq7;
        m8Iu0:
        $comment = $this->db->get()->result();
        goto n9MmX;
        XqZBH:
        $this->db->join("\155\x61\x73\164\145\x72\137\163\151\163\167\141\x20\x63", "\141\56\144\141\x72\151\x3d\x63\56\x69\x64\137\163\x69\x73\x77\x61", "\x6c\145\x66\164");
        goto QIf3J;
        laxaV:
        $dari = $siswa->id_siswa;
        goto qRhuU;
        yVrIz:
        $this->db->where("\x61\x2e\151\144\x5f\x63\x6f\x6d\x6d\x65\156\x74", $id);
        goto m8Iu0;
        oRWDk:
        $smt = $this->dashboard->getSemesterActive();
        goto KRKh0;
        KRKh0:
        $user = $this->ion_auth->user()->row();
        goto ArZmB;
        QIf3J:
        $this->db->order_by("\x61\x2e\164\141\x6e\147\147\x61\154", "\144\145\x73\x63");
        goto yVrIz;
        ArZmB:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto laxaV;
        VLxPY:
        $insert = $this->db->replace("\x70\x6f\x73\164\x5f\143\157\x6d\155\145\x6e\164\163", $data);
        goto IIQVr;
        u6Eq7:
        $this->db->select("\x61\56\x2a\54\40\x62\x2e\156\x61\155\x61\137\x67\x75\162\x75\x2c\40\x62\56\146\157\x74\157\x2c\x20\143\56\x6e\x61\x6d\x61\x20\x61\163\40\x6e\x61\155\141\137\163\151\163\167\x61\54\40\143\56\146\157\x74\x6f\x20\141\163\40\146\x6f\x74\x6f\137\x73\x69\x73\167\141\54\x20\x28\x53\105\114\105\x43\x54\x20\x43\x4f\125\x4e\x54\x28\x70\x6f\x73\164\x5f\162\x65\160\x6c\x79\56\x69\x64\137\x72\x65\160\x6c\171\51\40\x46\x52\117\115\x20\x70\x6f\163\x74\137\162\x65\x70\x6c\x79\x20\127\x48\105\x52\105\x20\x61\x2e\151\144\137\x63\x6f\155\155\145\x6e\164\40\x3d\40\x70\x6f\x73\x74\137\162\x65\x70\x6c\x79\x2e\x69\144\x5f\143\157\155\x6d\145\x6e\x74\51\40\101\x53\x20\x6a\155\154");
        goto yBb1Z;
        IIQVr:
        $id = $this->db->insert_id();
        goto Sjuoz;
        BerkM:
    }
    public function saveBalasan()
    {
        goto HNvon;
        lBKmd:
        $user = $this->ion_auth->user()->row();
        goto OtJu9;
        nM3_n:
        $id = $this->db->insert_id();
        goto kZs62;
        Yf_fj:
        $replies = $this->db->get()->result();
        goto ECCLk;
        XA0sX:
        $this->db->where("\141\56\x69\144\137\162\x65\160\154\171", $id);
        goto Yf_fj;
        dz_sX:
        $data = ["\x69\x64\x5f\x63\157\x6d\x6d\x65\x6e\164" => $this->input->post("\x69\144\137\x63\x6f\155\155\x65\156\x74"), "\x64\x61\162\x69" => $dari, "\144\x61\x72\151\137\x67\162\x6f\165\160" => $dari_group, "\164\145\x78\x74" => $this->input->post("\x74\145\x78\164")];
        goto y7EWN;
        HNvon:
        $tp = $this->dashboard->getTahunActive();
        goto n7mVC;
        OtJu9:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto Gppre;
        kZs62:
        $this->db->query("\x53\105\x54\x20\123\x51\x4c\x5f\x42\x49\107\137\x53\105\x4c\x45\x43\124\x53\x3d\x31");
        goto kzm0y;
        kzm0y:
        $this->db->select("\x61\56\52\54\40\142\56\156\141\x6d\x61\x5f\147\x75\162\165\x2c\x20\142\56\x66\x6f\x74\x6f\54\x20\x63\56\156\141\155\x61\40\x61\163\x20\x6e\141\x6d\141\137\x73\151\x73\x77\x61\54\x20\x63\56\x66\x6f\x74\x6f\40\x61\163\x20\x66\x6f\x74\x6f\x5f\x73\x69\x73\x77\x61");
        goto wlrJT;
        Gppre:
        $dari = $siswa->id_siswa;
        goto BCEit;
        uHXXq:
        $this->db->order_by("\x61\x2e\x74\141\156\x67\147\141\x6c", "\x64\145\x73\x63");
        goto XA0sX;
        y7EWN:
        $insert = $this->db->replace("\x70\x6f\163\x74\x5f\x72\x65\160\x6c\171", $data);
        goto nM3_n;
        ECCLk:
        $this->output_json($replies);
        goto vl44o;
        jd6ZE:
        $this->db->join("\x6d\141\x73\x74\x65\162\x5f\x73\x69\163\x77\x61\x20\143", "\141\56\x64\141\162\x69\x3d\x63\56\151\x64\x5f\x73\x69\x73\x77\x61", "\x6c\145\x66\164");
        goto uHXXq;
        wlrJT:
        $this->db->from("\x70\x6f\163\x74\x5f\162\145\160\x6c\171\40\x61");
        goto Od28o;
        Od28o:
        $this->db->join("\x6d\141\163\x74\145\162\x5f\x67\x75\162\165\x20\x62", "\x61\56\144\141\162\x69\75\x62\x2e\151\x64\137\x67\165\x72\x75", "\x6c\145\146\164");
        goto jd6ZE;
        n7mVC:
        $smt = $this->dashboard->getSemesterActive();
        goto lBKmd;
        BCEit:
        $dari_group = 3;
        goto dz_sX;
        vl44o:
    }
    public function jadwalPelajaran()
    {
        goto SY7na;
        IHIPe:
        $i = 0;
        goto h3ELc;
        DX3u_:
        Jr9er:
        goto QXoNG;
        pKWDD:
        $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari;
        goto gAhFT;
        A0UMQ:
        $data["\162\x75\x6e\x6e\x69\x6e\x67\137\164\x65\x78\x74"] = $this->dashboard->getRunningText();
        goto TOROz;
        goYSR:
        goto MWheK;
        goto OwIxH;
        mQu3t:
        $data["\x69\144\137\153\145\x6c\141\163"] = $siswa->id_kelas;
        goto s9bAl;
        yyvh1:
        $data["\x6d\145\x74\x68\157\144"] = "\x65\x64\151\x74";
        goto w6F1z;
        oheOu:
        $data["\x6d\x61\160\145\154\x73"] = $this->master->getAllMapel();
        goto JNHxO;
        L6q9V:
        foreach ($jadm as $j) {
            $jadwal_mapel[] = ["\x6a\141\x64\x77\x61\x6c" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $siswa->id_kelas)];
            C3ROF:
        }
        goto Ti81O;
        TxQ7d:
        GhYxv:
        goto TZyOX;
        XVlry:
        $data["\164\160\x5f\x61\x63\164\151\166\145"] = $tp;
        goto bC_Ch;
        TZyOX:
        $i++;
        goto P3NYW;
        QXoNG:
        $data["\x6a\x61\144\x77\x61\x6c\x5f\x6d\x61\x70\145\154"] = $jadwal_mapel;
        goto oheOu;
        PLrN8:
        $data["\155\145\164\x68\x6f\144"] = "\141\x64\144";
        goto DX3u_;
        TvWqx:
        $this->load->view("\x6d\145\155\x62\x65\x72\x73\57\x73\151\163\x77\141\57\164\145\x6d\x70\x6c\141\x74\145\163\x2f\x68\145\141\144\145\x72", $data);
        goto d9QdQ;
        JNHxO:
        $data["\x72\165\x6e\x6e\x69\x6e\x67\x5f\164\145\x78\164"] = $this->dashboard->getRunningText();
        goto TvWqx;
        Ti81O:
        GuiTW:
        goto yyvh1;
        YQ0VL:
        $data["\163\155\164\x5f\x61\x63\x74\151\x76\x65"] = $smt;
        goto A0UMQ;
        s9bAl:
        $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $siswa->id_kelas);
        goto pKWDD;
        h3ELc:
        Nzm4u:
        goto Dutl8;
        d9QdQ:
        $this->load->view("\155\x65\155\x62\145\x72\x73\x2f\x73\x69\x73\167\x61\x2f\152\141\x64\x77\141\154\57\x64\141\164\x61");
        goto bZolx;
        OwIxH:
        RJxTt:
        goto K3648;
        qpUuj:
        CnC9I:
        goto PLrN8;
        bC_Ch:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto YQ0VL;
        GRVqm:
        $jadwal_mapel[] = ["\152\141\144\x77\141\x6c" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $siswa->id_kelas)];
        goto TxQ7d;
        KFOJr:
        Gk2Yg:
        goto IHIPe;
        bZolx:
        $this->load->view("\155\145\x6d\x62\x65\162\x73\57\163\x69\x73\x77\141\x2f\164\145\x6d\x70\154\141\x74\x65\x73\57\146\157\x6f\x74\x65\x72");
        goto yHUiN;
        d3Bal:
        $data = ["\x75\163\145\x72" => $user, "\163\151\163\x77\x61" => $siswa, "\152\165\144\165\154" => "\x4a\141\144\167\141\x6c\x20\120\145\x6c\x61\152\141\x72\x61\x6e", "\x73\x75\x62\152\x75\x64\165\x6c" => "\123\x65\164\x20\x4a\x61\144\x77\x61\154\x20\120\x65\x6c\x61\x6a\x61\x72\141\156", "\x73\x65\164\164\x69\156\147" => $this->dashboard->getSetting()];
        goto y4fVk;
        tloNV:
        $smt = $this->dashboard->getSemesterActive();
        goto Z0NL8;
        Dutl8:
        if (!($i < $jml_mapel)) {
            goto CnC9I;
        }
        goto GRVqm;
        SY7na:
        $tp = $this->dashboard->getTahunActive();
        goto tloNV;
        P3NYW:
        goto Nzm4u;
        goto qpUuj;
        uQL45:
        MWheK:
        goto mQu3t;
        k1uwB:
        $setting = $this->dashboard->getSetting();
        goto d3Bal;
        E_coc:
        if ($jadk == null) {
            goto RJxTt;
        }
        goto X_YTm;
        gAhFT:
        if ($jadm == null) {
            goto Gk2Yg;
        }
        goto L6q9V;
        TOROz:
        $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $siswa->id_kelas);
        goto E_coc;
        y4fVk:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto XVlry;
        K3648:
        $data["\152\141\144\167\x61\154\137\x6b\142\155"] = json_decode(json_encode(["\151\144\137\x74\x70" => $tp->tahun, "\x69\144\x5f\x73\155\164" => $smt->smt, "\x69\144\137\153\145\154\x61\x73" => $siswa->id_kelas, "\153\x62\x6d\x5f\152\x61\x6d\x5f\160\x65\x6c" => '', "\153\142\x6d\137\x6a\x61\x6d\137\155\165\x6c\x61\151" => '', "\x6b\142\x6d\x5f\x6a\155\154\x5f\155\x61\160\x65\154\x5f\x68\141\162\151" => '', "\x69\x73\164\x69\162\141\150\141\x74" => serialize([]), "\x61\144\x61" => false]));
        goto uQL45;
        X_YTm:
        $data["\152\141\144\167\141\x6c\x5f\x6b\142\155"] = $jadk;
        goto goYSR;
        Z0NL8:
        $user = $this->ion_auth->user()->row();
        goto u0y7g;
        w6F1z:
        goto Jr9er;
        goto KFOJr;
        u0y7g:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto k1uwB;
        yHUiN:
    }
    public function kehadiran()
    {
        goto BKz51;
        ir_K9:
        $tgl = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
        goto IWWUY;
        sEiEr:
        $kbm = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt, $siswa->id_kelas);
        goto bI4ua;
        PMnr7:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto g2Bt8;
        Coe9Q:
        if (!($i < $tgl)) {
            goto AoeOR;
        }
        goto q4Kvb;
        Bgco0:
        $smt = $this->dashboard->getSemesterActive();
        goto KL0dY;
        PEeH0:
        $i++;
        goto Ov3wI;
        Qypj7:
        $this->load->view("\155\145\x6d\x62\x65\162\x73\57\163\151\x73\x77\x61\x2f\141\x62\x73\145\x6e\x73\151\57\144\141\164\x61");
        goto eSgyq;
        KCDnJ:
        $bulan = date("\155");
        goto Mqyk4;
        eMEA2:
        $i = 0;
        goto q_b8h;
        G4VKE:
        $data["\x6a\141\x64\167\x61\x6c\163"] = $jadwals;
        goto t6xmg;
        L8oyt:
        if ($kbm != null) {
            goto Mdph2;
        }
        goto pnP_b;
        xW52O:
        $arrIdMapel = [];
        goto lr0Ln;
        BBqWr:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto sAOry;
        Un5K0:
        goto luJnX;
        goto HE46g;
        OxDbw:
        $day = date("\116", strtotime($today));
        goto sEiEr;
        OANEi:
        $kbm->istirahat = unserialize($kbm->istirahat);
        goto Yg9fF;
        JNP6q:
        foreach ($result as $row) {
            $jadwals[$row->id_hari][$row->jam_ke] = $row;
            fZGwx:
        }
        goto Seu18;
        HE46g:
        Mdph2:
        goto KCDnJ;
        q4Kvb:
        $t = $i + 1 < 10 ? "\60" . ($i + 1) : $i + 1;
        goto axFrh;
        WGwbO:
        $jadwals = [];
        goto JNP6q;
        BKz51:
        $tp = $this->dashboard->getTahunActive();
        goto Bgco0;
        axFrh:
        $materi_sebulan[$t] = $this->kelas->getAllMateriByTgl($siswa->id_kelas, $tahun . "\55" . $bulan . "\55" . $t, $arrIdMapel);
        goto ax_1d;
        GBz4c:
        AoeOR:
        goto OANEi;
        bri82:
        $data["\164\160\137\141\143\x74\151\x76\x65"] = $tp;
        goto PMnr7;
        pYh2T:
        $data["\x73\x65\142\x75\x6c\x61\156"] = ["\x6c\157\147" => isset($logs[$siswa->id_siswa]) ? $logs[$siswa->id_siswa] : [], "\x6d\141\164\145\162\x69\x73" => $materi_sebulan];
        goto qoF0l;
        dNZkx:
        $today = date("\131\55\x6d\x2d\144");
        goto OxDbw;
        pyGSp:
        $this->load->view("\x6d\x65\x6d\x62\145\x72\163\57\163\x69\163\x77\141\x2f\x74\145\155\160\154\141\x74\x65\163\x2f\150\145\x61\x64\x65\x72", $data);
        goto Qypj7;
        eSgyq:
        $this->load->view("\x6d\145\155\x62\x65\162\163\57\x73\151\163\167\x61\x2f\x74\145\x6d\160\154\141\x74\145\163\x2f\146\157\x6f\164\145\162");
        goto S2jdQ;
        qoF0l:
        luJnX:
        goto sPx0w;
        Mqyk4:
        $tahun = date("\x59");
        goto ir_K9;
        sAOry:
        $data = ["\165\x73\145\x72" => $user, "\163\x69\163\x77\141" => $siswa, "\x6a\165\x64\x75\154" => "\x41\142\x73\x65\x6e\x73\x69", "\163\x75\142\x6a\x75\x64\165\x6c" => "\x4b\x65\x68\x61\144\x69\162\x61\156\40\x53\x69\x73\167\x61", "\x73\145\164\x74\x69\x6e\147" => $this->dashboard->getSetting()];
        goto dNZkx;
        N55nr:
        yew4u:
        goto L8oyt;
        dyTn4:
        $mapels = $this->master->getAllMapel();
        goto xW52O;
        Yg9fF:
        $logs = $this->kelas->getRekapBulananSiswa(null, $siswa->id_kelas, $tahun, $bulan);
        goto pYh2T;
        IWWUY:
        $materi_sebulan = [];
        goto eMEA2;
        pnP_b:
        $data["\163\145\x62\x75\x6c\x61\156"] = ["\154\x6f\147" => [], "\155\x61\x74\145\x72\x69\x73" => []];
        goto Un5K0;
        bI4ua:
        $result = $this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, $siswa->id_kelas, null);
        goto WGwbO;
        KL0dY:
        $user = $this->ion_auth->user()->row();
        goto BBqWr;
        ax_1d:
        BBoYV:
        goto PEeH0;
        lr0Ln:
        foreach ($mapels as $mpl) {
            array_push($arrIdMapel, $mpl->id_mapel);
            BUqaC:
        }
        goto N55nr;
        Ov3wI:
        goto m_j7P;
        goto GBz4c;
        q_b8h:
        m_j7P:
        goto Coe9Q;
        Seu18:
        dvUev:
        goto dyTn4;
        cXwSj:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto bri82;
        hnPTz:
        $data["\x72\165\x6e\156\x69\x6e\147\x5f\164\x65\170\x74"] = $this->dashboard->getRunningText();
        goto pyGSp;
        g2Bt8:
        $data["\163\155\x74\137\141\x63\164\151\x76\x65"] = $smt;
        goto hnPTz;
        t6xmg:
        $data["\152\141\x64\x77\141\x6c"] = isset($jadwals[$day]) && $day != 7 ? $jadwals[$day] : [];
        goto cXwSj;
        MjhjW:
        $data["\155\141\160\145\154\x73"] = $mapels;
        goto G4VKE;
        sPx0w:
        $data["\153\x62\155"] = $kbm;
        goto MjhjW;
        S2jdQ:
    }
    public function materi()
    {
        return $this->getTugasMateri("\61");
    }
    public function tugas()
    {
        return $this->getTugasMateri("\x32");
    }
    private function getTugasMateri($jenis)
    {
        goto sk0_A;
        h1Qqv:
        $jenis == null ? "\61" : "\62";
        goto zsyx6;
        Yz0l1:
        $data["\152\141\x64\167\x61\x6c\163"] = $jadwal_seminggu;
        goto uN8NA;
        OkeiP:
        $data["\152\165\x72\165\x73\141\x6e"] = $this->dropdown->getAllJurusan();
        goto CapuT;
        YPWhi:
        $logs = [];
        goto aIeJj;
        L2Wm1:
        $data["\x74\160\x5f\141\143\164\151\x76\145"] = $tp;
        goto r9tEV;
        gHr1W:
        $this->load->view("\155\x65\x6d\142\145\x72\163\57\163\x69\x73\167\141\57\164\x65\x6d\x70\154\141\x74\x65\x73\x2f\150\145\x61\144\145\x72", $data);
        goto OI3Bm;
        sua11:
        $data["\154\157\x67\x73"] = $logs;
        goto Q0vZc;
        rgjy3:
        $setting = $this->dashboard->getSetting();
        goto grQH3;
        wd8Ky:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto rgjy3;
        OI3Bm:
        $this->load->view("\x6d\145\x6d\142\145\162\163\x2f\x73\151\163\x77\141\57\155\x61\164\145\162\x69\57\144\x61\164\141");
        goto P4jAk;
        Q0vZc:
        $data["\152\145\156\151\x73"] = $jenis;
        goto tGzEB;
        zsyx6:
        $today = date("\131\55\155\55\144");
        goto u8v_0;
        beBN4:
        $last_week = [date("\x59\55\155\55\x64", strtotime("\55\67\40\144\x61\x79\x73")), date("\x59\x2d\155\x2d\144", strtotime("\x2d\66\40\x64\141\171\x73")), date("\x59\x2d\x6d\x2d\144", strtotime("\x2d\65\x20\144\x61\171\x73")), date("\x59\55\155\x2d\144", strtotime("\55\x34\x20\x64\141\x79\163")), date("\131\x2d\155\x2d\x64", strtotime("\x2d\x33\x20\x64\141\x79\163")), date("\x59\x2d\155\x2d\144", strtotime("\55\62\x20\x64\141\x79\x73")), date("\x59\55\155\55\144", strtotime("\55\x31\x20\x64\x61\171\163")), date("\131\55\x6d\x2d\144")];
        goto KGdIx;
        gfMKO:
        $materi_seminggu = $this->kelas->getMateriSiswaSeminggu($tp->id_tp, $smt->id_smt, $siswa->id_kelas, $jenis);
        goto mmkc7;
        r7tSc:
        $data["\x73\155\x74\137\x61\x63\164\151\166\x65"] = $smt;
        goto OkeiP;
        P4jAk:
        $this->load->view("\x6d\x65\155\142\x65\162\x73\x2f\x73\x69\x73\x77\141\x2f\x74\145\x6d\x70\154\141\x74\x65\163\x2f\x66\157\x6f\164\x65\162");
        goto qdq45;
        bQ8c2:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto L2Wm1;
        sk0_A:
        $tp = $this->dashboard->getTahunActive();
        goto Aoavv;
        F07ei:
        $user = $this->ion_auth->user()->row();
        goto wd8Ky;
        Aoavv:
        $smt = $this->dashboard->getSemesterActive();
        goto F07ei;
        u8v_0:
        $jadwal_seminggu = $this->kelas->loadJadwalSiswaSeminggu($tp->id_tp, $smt->id_smt, $siswa->id_kelas);
        goto gfMKO;
        grQH3:
        $data = ["\x75\163\145\162" => $user, "\x73\151\163\167\x61" => $siswa, "\x6a\x75\x64\165\x6c" => $jenis == "\x31" ? "\x4d\141\x74\x65\x72\151" : "\x54\x75\147\141\x73", "\x73\x75\x62\152\x75\x64\x75\x6c" => $jenis == "\x31" ? "\155\x61\x74\145\162\151" : "\x74\x75\x67\x61\x73", "\x73\145\164\164\x69\x6e\147" => $setting];
        goto h1Qqv;
        CapuT:
        $data["\154\x65\166\x65\154"] = $this->dropdown->getAllLevel($setting->jenjang);
        goto UsoGI;
        W2c5X:
        pS_oq:
        goto mgsBM;
        uN8NA:
        $data["\x6d\x61\164\x65\x72\151\x73"] = $materis;
        goto sua11;
        r9tEV:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto r7tSc;
        aIeJj:
        foreach ($last_week as $day) {
            goto kuCVL;
            ypDFO:
            if (!isset($jadwal_seminggu[$idhari])) {
                goto jxbQo;
            }
            goto gkBjX;
            ooppp:
            gd3bF:
            goto WYkgo;
            WoQtN:
            $arrIdKjms = [];
            goto PR65y;
            kuCVL:
            $idhari = date("\x4e", strtotime($day));
            goto nu9S3;
            WYkgo:
            $log = [];
            goto qUion;
            nu9S3:
            $materis[$day] = [];
            goto ypDFO;
            AdlTb:
            zqh7Q:
            goto aXhGt;
            V8CeM:
            tPzvr:
            goto WoQtN;
            ar4eJ:
            B1jY1:
            goto woz8R;
            PR65y:
            foreach ($materis[$day] as $mtr) {
                goto j3m6c;
                Q6cXS:
                JEuce:
                goto SbcTo;
                j3m6c:
                if (!isset($mtr->id_kjm)) {
                    goto JEuce;
                }
                goto SsnEb;
                SsnEb:
                array_push($arrIdKjms, $mtr->id_kjm);
                goto Q6cXS;
                SbcTo:
                w90_h:
                goto qRbKT;
                qRbKT:
            }
            goto ooppp;
            gkBjX:
            foreach ($jadwal_seminggu[$idhari] as $kjam => $val) {
                goto csW3B;
                b68kM:
                $dummy->id_mapel = $val->id_mapel;
                goto Vct0O;
                Z6FFV:
                DH6f0:
                goto msTiU;
                Vct0O:
                $dummy->id_jadwal = $val->id_jadwal;
                goto m0SDu;
                YSLuF:
                $materis[$day][$kjam] = isset($materi_seminggu[$day]) && isset($materi_seminggu[$day][$kjam]) ? $materi_seminggu[$day][$kjam] : $dummy;
                goto Z6FFV;
                m0SDu:
                $dummy->nama_mapel = isset($mapels[$val->id_mapel]) ? $mapels[$val->id_mapel] : '';
                goto YSLuF;
                csW3B:
                $dummy = new stdClass();
                goto b68kM;
                msTiU:
            }
            goto V8CeM;
            woz8R:
            $logs[$day] = $log;
            goto SSqdz;
            qUion:
            if (!(count($arrIdKjms) > 0)) {
                goto B1jY1;
            }
            goto mSYHN;
            SSqdz:
            jxbQo:
            goto AdlTb;
            mSYHN:
            $log = $this->kelas->getStatusMateriSiswaByJadwal($siswa->id_siswa, $arrIdKjms);
            goto ar4eJ;
            aXhGt:
        }
        goto W2c5X;
        pqF82:
        $data["\x72\165\x6e\x6e\x69\156\147\137\164\145\x78\x74"] = $this->dashboard->getRunningText();
        goto gHr1W;
        KGdIx:
        $materis = [];
        goto YPWhi;
        UsoGI:
        $data["\x6b\145\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto pqF82;
        mmkc7:
        $mapels = $this->dropdown->getAllMapel();
        goto beBN4;
        tGzEB:
        $data["\x6b\142\155"] = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $siswa->id_kelas);
        goto bQ8c2;
        mgsBM:
        $data["\x77\145\x65\153"] = $last_week;
        goto Yz0l1;
        qdq45:
    }
    public function seminggu()
    {
        goto imjCB;
        KbQ2V:
        $materi["\x6a\x61\144\167\141\x6c"] = $jadwal;
        goto tx0nQ;
        uh3du:
        $today = date($tgl);
        goto sWSCc;
        jNTrb:
        $materi = [];
        goto ho1W5;
        AEeKe:
        $mapels = $this->dropdown->getAllMapel();
        goto OzXVI;
        sCJty:
        $id_kelas = $this->input->get("\x69\144\x5f\153\145\x6c\x61\163", true);
        goto kO_UW;
        imjCB:
        $id_siswa = $this->input->get("\151\x64\x5f\163\151\x73\x77\141", true);
        goto sCJty;
        BSKhe:
        $materi_hari_ini = $this->kelas->getMateriSiswa($id_kelas, $today, $jenis);
        goto jNTrb;
        A1NaO:
        foreach ($materi["\155\x61\x74\x65\162\151"] as $mtr) {
            goto XbApH;
            gwqPi:
            array_push($arrIdKjm, $mtr->id_kjm);
            goto PRZHN;
            PRZHN:
            Rr8a_:
            goto tlv85;
            XbApH:
            if (!isset($mtr->id_kjm)) {
                goto Rr8a_;
            }
            goto gwqPi;
            tlv85:
            E6zYb:
            goto OPRTY;
            OPRTY:
        }
        goto pMkQ8;
        pMkQ8:
        zsfh2:
        goto xqjh4;
        jO_ib:
        $arrIdKjm = [];
        goto A1NaO;
        OzXVI:
        $tp = $this->dashboard->getTahunActive();
        goto cm7LI;
        tx0nQ:
        $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $id_kelas);
        goto swFlS;
        cm7LI:
        $smt = $this->dashboard->getSemesterActive();
        goto uh3du;
        ho1W5:
        foreach ($jadwal as $key => $value) {
            $materi["\x6d\x61\164\x65\162\x69"][$key] = isset($materi_hari_ini[$key]) ? $materi_hari_ini[$key] : ["\x69\144\137\x6d\x61\160\145\154" => $value->id_mapel, "\x69\144\x5f\152\141\144\x77\x61\154" => $value->id_jadwal, "\156\141\x6d\x61\137\x6d\141\160\145\154" => isset($mapels[$value->id_mapel]) ? $mapels[$value->id_mapel] : ''];
            Bi8sg:
        }
        goto x7m6R;
        YktiZ:
        $materi["\163\145\x6d\x69\x6e\x67\x67\x75"] = $this->kelas->loadJadwalSiswaSeminggu($tp->id_tp, $smt->id_smt, $id_kelas);
        goto O5DCE;
        xkruM:
        $materi["\x6c\x6f\147\x73"] = (array) $this->kelas->getStatusMateriSiswaByJadwal($id_siswa, $arrIdKjm);
        goto F21QK;
        sWSCc:
        $numday = date("\116", strtotime($tgl));
        goto xwp8E;
        vWGUC:
        $materi["\x6b\142\155"] = $jadk;
        goto YktiZ;
        x7m6R:
        I577z:
        goto jO_ib;
        F21QK:
        gtCbZ:
        goto KbQ2V;
        O5DCE:
        $this->output_json($materi);
        goto d63NQ;
        xwp8E:
        $jadwal = $this->kelas->loadJadwalSiswaHariIni($tp->id_tp, $smt->id_smt, $id_kelas, $numday);
        goto BSKhe;
        kO_UW:
        $tgl = $this->input->get("\x74\147\154", true);
        goto zHKwe;
        zHKwe:
        $jenis = $this->input->get("\x6a\x65\156\151\x73", true);
        goto AEeKe;
        xqjh4:
        if (!(count($arrIdKjm) > 0)) {
            goto gtCbZ;
        }
        goto xkruM;
        swFlS:
        $jadk->istirahat = unserialize($jadk->istirahat);
        goto vWGUC;
        d63NQ:
    }
    public function bukaMateri($id_kjm, $jamke)
    {
        return $this->bukaTugasMateri($id_kjm, $jamke, "\x31");
    }
    public function bukaTugas($id_kjm, $jamke)
    {
        return $this->bukaTugasMateri($id_kjm, $jamke, "\x32");
    }
    private function bukaTugasMateri($id_kjm, $jamke, $jenis)
    {
        goto P2yct;
        ALrxz:
        $data["\x6c\157\x67\x73"] = isset($logs[$siswa->id_siswa]) ? $logs[$siswa->id_siswa] : null;
        goto TERb2;
        S2gJ0:
        $this->load->view("\155\x65\x6d\142\145\162\163\57\x73\x69\163\x77\x61\57\155\x61\164\x65\162\151\x2f\x76\x69\145\x77");
        goto uwzzD;
        BRF_g:
        $smt = $this->dashboard->getSemesterActive();
        goto uXCHB;
        qtx9Z:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto oE396;
        WrfIo:
        $logs = $this->kelas->getStatusMateriSiswa($id_kjm);
        goto SdxFC;
        oE396:
        $data = ["\x75\x73\145\x72" => $user, "\163\151\x73\167\x61" => $siswa, "\152\165\x64\x75\154" => $jenis == "\x31" ? "\x4d\141\164\x65\162\x69" : "\124\165\147\x61\x73", "\x73\x75\x62\x6a\x75\x64\165\x6c" => "\x4b\x65\x72\x6a\x61\153\x61\x6e", "\x73\145\x74\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto W0laq;
        xWlvw:
        $this->load->view("\x6d\x65\x6d\x62\x65\x72\163\57\163\151\x73\167\x61\x2f\164\145\x6d\160\x6c\141\x74\x65\x73\57\150\x65\141\x64\x65\x72", $data);
        goto S2gJ0;
        kjmp0:
        $logs[$siswa->id_siswa]->file = unserialize($logs[$siswa->id_siswa]->file);
        goto ucaCZ;
        s6SV3:
        $data["\164\x70\x5f\x61\x63\164\x69\166\x65"] = $tp;
        goto bWgSB;
        bWgSB:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto Gifu3;
        uwzzD:
        $this->load->view("\155\145\155\x62\x65\162\163\x2f\x73\151\163\167\x61\x2f\x74\x65\x6d\160\154\x61\x74\145\x73\57\x66\x6f\x6f\x74\145\x72");
        goto AqhI4;
        SdxFC:
        if (!isset($logs[$siswa->id_siswa])) {
            goto Wdjzs;
        }
        goto kjmp0;
        W0laq:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto s6SV3;
        ucaCZ:
        Wdjzs:
        goto XpFxl;
        j5WQO:
        $data["\152\x61\x6d\x6b\x65"] = $jamke;
        goto wxrQc;
        TERb2:
        $data["\162\x75\x6e\x6e\151\156\x67\137\x74\x65\170\164"] = $this->dashboard->getRunningText();
        goto xWlvw;
        Gifu3:
        $data["\163\x6d\x74\x5f\x61\x63\164\151\166\145"] = $smt;
        goto j5WQO;
        wxrQc:
        $data["\x6d\x61\164\145\x72\x69"] = $this->kelas->getMateriKelasSiswa($id_kjm, $jenis);
        goto WrfIo;
        P2yct:
        $tp = $this->dashboard->getTahunActive();
        goto BRF_g;
        uXCHB:
        $user = $this->ion_auth->user()->row();
        goto qtx9Z;
        XpFxl:
        $data["\x6b\x6a\155"] = $id_kjm;
        goto ALrxz;
        AqhI4:
    }
    public function saveLogMateri()
    {
        goto k840t;
        v4uIp:
        $this->output_json($this->kelas->saveLog("\154\157\147\137\x6d\x61\164\145\162\151", $id_siswa, $id_kjm, $jamke, $mapel, "\x4d\145\x6d\x62\165\153\x61\40\155\x61\x74\x65\162\151"));
        goto Jt76y;
        FoRR2:
        $jamke = $this->input->get("\x6a\141\x6d\x6b\x65", true);
        goto Xhra7;
        Xhra7:
        $mapel = $this->input->get("\155\141\160\145\x6c", true);
        goto v4uIp;
        R7ZCX:
        $id_kjm = $this->input->get("\151\x64\137\153\152\x6d", true);
        goto FoRR2;
        k840t:
        $id_siswa = $this->input->get("\151\144\x5f\x73\151\x73\x77\141", true);
        goto R7ZCX;
        Jt76y:
    }
    public function saveLogTugas()
    {
        goto u36d3;
        j4Tyt:
        $mapel = $this->input->get("\x6d\x61\160\x65\154", true);
        goto v6F_m;
        rjoUV:
        $id_kjm = $this->input->get("\151\144\137\x6b\152\x6d", true);
        goto ARtuM;
        ARtuM:
        $jamke = $this->input->get("\152\141\x6d\x6b\145", true);
        goto j4Tyt;
        v6F_m:
        $this->output_json($this->kelas->saveLog("\154\x6f\x67\137\x6d\141\x74\145\x72\x69", $id_siswa, $id_kjm, $jamke, $mapel, "\115\x65\155\x62\165\153\x61\40\164\165\x67\141\163"));
        goto GB7he;
        u36d3:
        $id_siswa = $this->input->get("\x69\x64\x5f\x73\x69\163\167\141", true);
        goto rjoUV;
        GB7he:
    }
    public function saveFileMateriSelesai()
    {
        goto Ub8Uo;
        dqQIO:
        NI0L8:
        goto dbcVO;
        Ub8Uo:
        $id_siswa = $this->input->post("\x69\x64\137\x73\151\163\167\x61", true);
        goto OfNSs;
        I77oZ:
        foreach ($attach as $at) {
            goto WcG9M;
            WcG9M:
            if (!($at->name != null)) {
                goto lbIzA;
            }
            goto CK9A1;
            dgZ4q:
            lbIzA:
            goto GTl1x;
            CK9A1:
            $src_file[] = ["\x73\162\x63" => $at->src, "\163\151\x7a\145" => $at->size, "\x74\171\160\x65" => $at->type, "\x6e\141\x6d\x65" => $at->name];
            goto dgZ4q;
            GTl1x:
            R5fLj:
            goto hmes9;
            hmes9:
        }
        goto mVeNZ;
        ovj1i:
        qOAb_:
        goto Wh3Di;
        aoO7M:
        $attach = json_decode($this->input->post("\141\164\164\141\143\x68", true));
        goto W_7Ea;
        ok0AN:
        $jamke = $this->input->post("\152\x61\155\x6b\145", true);
        goto aoO7M;
        BRelT:
        $q = $this->db->get("\154\x6f\x67\x5f\155\141\x74\145\x72\151");
        goto Grx1T;
        OcFH8:
        $update = $this->db->insert("\154\157\x67\x5f\155\141\x74\145\162\x69", $insert);
        goto hWrst;
        mVeNZ:
        g9bSy:
        goto uhLNV;
        us2Pd:
        $this->output_json($data);
        goto nUAi7;
        hWrst:
        goto qOAb_;
        goto dqQIO;
        Grx1T:
        if ($q->num_rows() > 0) {
            goto NI0L8;
        }
        goto r8Cn_;
        r8Cn_:
        $this->db->set("\151\144\x5f\x6c\157\x67", $id_log);
        goto OcFH8;
        dbcVO:
        $this->db->where("\x69\x64\x5f\x6c\157\147", $id_log);
        goto hPwTR;
        u6cOG:
        $this->db->where("\x69\x64\x5f\154\157\x67", $id_log);
        goto BRelT;
        uhLNV:
        $id_log = $id_siswa . $id_kjm;
        goto Tr5uw;
        OfNSs:
        $id_kjm = $this->input->post("\x69\144\x5f\153\x6a\x6d", true);
        goto ju_pv;
        Wh3Di:
        $data["\163\x74\141\x74\x75\x73"] = $update;
        goto us2Pd;
        Tr5uw:
        $insert = ["\151\x64\x5f\163\151\x73\167\x61" => $id_siswa, "\151\x64\137\x6d\141\164\145\162\151" => $id_kjm, "\146\151\156\151\x73\x68\137\164\151\x6d\145" => date("\x59\x2d\x6d\x2d\x64\40\x48\x3a\x69\x3a\x73"), "\x6a\x61\155\x5f\x6b\145" => $jamke, "\x6c\x6f\x67\x5f\144\145\x73\x63" => "\115\x65\x6e\171\145\154\145\x73\x61\x69\x6b\x61\156\x20\155\141\x74\x65\162\x69", "\x74\145\170\164" => $isi_materi, "\146\151\154\x65" => serialize($src_file)];
        goto u6cOG;
        ju_pv:
        $isi_materi = $this->input->post("\151\x73\151\137\x6d\141\164\145\x72\x69", true);
        goto ok0AN;
        W_7Ea:
        $src_file = [];
        goto I77oZ;
        hPwTR:
        $update = $this->db->update("\154\x6f\x67\137\x6d\141\x74\145\x72\x69", $insert);
        goto ovj1i;
        nUAi7:
    }
    public function saveFileTugasSelesai()
    {
        goto hRngK;
        v9CZt:
        $src_file = [];
        goto Cjr5Z;
        eIAlQ:
        $this->db->where("\x69\144\x5f\x6c\x6f\147", $id_log);
        goto xyu16;
        UhyOm:
        $update = $this->db->insert("\x6c\157\x67\x5f\x74\x75\147\141\x73", $insert);
        goto ztbO2;
        Cjr5Z:
        foreach ($attach as $at) {
            goto ZjrZ1;
            ZjrZ1:
            if (!($at->name != null)) {
                goto ODYiA;
            }
            goto Te8U6;
            Te8U6:
            $src_file[] = ["\163\x72\143" => $at->src, "\x73\x69\172\145" => $at->size, "\x74\171\x70\145" => $at->type, "\156\x61\155\145" => $at->name];
            goto gq11o;
            rflq5:
            HBxS0:
            goto meCIa;
            gq11o:
            ODYiA:
            goto rflq5;
            meCIa:
        }
        goto QIXoF;
        fsQ_N:
        $id_kjm = $this->input->post("\x69\x64\x5f\153\x6a\155", true);
        goto q3ii7;
        BEohr:
        $attach = json_decode($this->input->post("\141\164\x74\141\143\x68", true));
        goto v9CZt;
        yANgf:
        $insert = ["\x69\x64\x5f\x73\x69\x73\x77\141" => $id_siswa, "\x69\x64\137\155\x61\164\x65\x72\151" => $id_kjm, "\x6a\x61\x6d\x5f\x6b\145" => $jamke, "\154\157\147\x5f\x64\x65\x73\x63" => "\x4d\x65\x6e\x79\145\x6c\x65\163\141\151\x6b\x61\x6e\x20\x74\x75\147\x61\163", "\164\145\x78\x74" => $isi_tugas, "\146\151\154\145" => serialize($src_file)];
        goto eIAlQ;
        ZyOrS:
        $update = $this->db->update("\154\x6f\x67\x5f\164\x75\147\141\x73", $insert);
        goto t_nZW;
        q3ii7:
        $isi_tugas = $this->input->post("\151\163\151\137\x74\x75\147\141\x73", true);
        goto SEFoU;
        QIXoF:
        f_9RD:
        goto WCmt2;
        t_nZW:
        IFaMu:
        goto KkTSR;
        hRngK:
        $id_siswa = $this->input->post("\151\x64\137\x73\x69\x73\167\x61", true);
        goto fsQ_N;
        WCmt2:
        $id_log = $id_siswa . $id_kjm;
        goto yANgf;
        SEFoU:
        $jamke = $this->input->post("\x6a\141\x6d\153\x65", true);
        goto BEohr;
        r8XlY:
        if ($q->num_rows() > 0) {
            goto y0D0k;
        }
        goto I9MBI;
        aZhkL:
        $this->output_json($data);
        goto q_NPM;
        xyu16:
        $q = $this->db->get("\x6c\157\147\x5f\164\165\x67\x61\x73");
        goto r8XlY;
        I9MBI:
        $this->db->set("\151\144\137\x6c\x6f\147", $id_log);
        goto UhyOm;
        r9wIG:
        $this->db->where("\151\144\137\x6c\x6f\x67", $id_log);
        goto ZyOrS;
        Ff53X:
        y0D0k:
        goto r9wIG;
        ztbO2:
        goto IFaMu;
        goto Ff53X;
        KkTSR:
        $data["\x73\x74\141\x74\165\163"] = $update;
        goto aZhkL;
        q_NPM:
    }
    function uploadFile()
    {
        goto nPwfM;
        EbHLW:
        $result = $this->upload->data();
        goto NcYte;
        UMWWZ:
        if (!$this->upload->do_upload("\x66\151\154\145\137\165\160\x6c\x6f\141\x64\x73")) {
            goto b7G70;
        }
        goto EbHLW;
        IIcuE:
        $config["\155\x61\x78\x5f\163\x69\x7a\x65"] = $max_size;
        goto tRl08;
        NcYte:
        $data["\x73\x72\143"] = "\165\x70\x6c\x6f\x61\x64\x73\57\146\151\154\145\137\163\x69\163\x77\141\57" . $result["\x66\x69\x6c\145\137\156\141\x6d\145"];
        goto G9is6;
        RnG8l:
        $this->upload->initialize($config);
        goto UMWWZ;
        MTiYP:
        $this->output_json($data);
        goto xdpDN;
        AY351:
        goto c5ekn;
        goto LE7Ax;
        ddUBt:
        c5ekn:
        goto fSUxa;
        tRl08:
        $config["\x6f\x76\145\x72\167\x72\151\164\145"] = FALSE;
        goto RnG8l;
        NkwJ5:
        if (!isset($_FILES["\146\151\154\145\x5f\165\160\x6c\157\x61\144\x73"]["\x6e\x61\155\x65"])) {
            goto a8vJb;
        }
        goto CEdGH;
        VGE4I:
        a8vJb:
        goto MTiYP;
        G9is6:
        $data["\x66\x69\x6c\x65\x6e\x61\x6d\x65"] = pathinfo($result["\x66\x69\x6c\x65\137\156\141\155\x65"], PATHINFO_FILENAME);
        goto tma87;
        nPwfM:
        $max_size = $this->input->post("\x6d\x61\170\x2d\163\x69\x7a\x65", true);
        goto NkwJ5;
        fSUxa:
        $data["\x74\x79\x70\x65"] = $_FILES["\146\151\x6c\145\137\x75\160\154\157\x61\x64\x73"]["\x74\171\x70\x65"];
        goto slWi6;
        slWi6:
        $data["\163\151\172\x65"] = $_FILES["\x66\151\x6c\x65\x5f\x75\160\154\157\x61\144\x73"]["\163\x69\x7a\x65"];
        goto VGE4I;
        kHTus:
        $data["\x73\164\x61\164\x75\163"] = false;
        goto EDkEM;
        CEdGH:
        $config["\x75\x70\x6c\x6f\141\x64\x5f\160\141\x74\x68"] = "\56\57\165\x70\x6c\x6f\x61\x64\163\57\x66\x69\154\145\137\163\x69\163\167\x61\57";
        goto SLfuk;
        tma87:
        $data["\163\164\141\x74\165\x73"] = true;
        goto AY351;
        SLfuk:
        $config["\141\154\154\157\x77\145\x64\x5f\164\x79\160\x65\x73"] = "\152\160\147\174\x6a\160\145\x67\174\x70\156\147\174\147\151\146\174\x6d\160\145\147\174\x6d\160\147\x7c\x6d\160\x65\147\63\x7c\155\160\x33\174\167\x61\x76\174\167\141\166\145\174\x6d\x70\x34\x7c\x61\166\x69\174\x64\157\x63\174\144\x6f\143\x78\x7c\170\154\x73\174\170\x6c\163\170\174\x70\x70\164\x7c\160\x70\x74\x78\x7c\x63\163\166\x7c\160\x64\x66\174\162\x74\x66\174\164\170\x74";
        goto IIcuE;
        EDkEM:
        $data["\x73\x72\x63"] = $this->upload->display_errors();
        goto ddUBt;
        LE7Ax:
        b7G70:
        goto kHTus;
        xdpDN:
    }
    function deleteFile()
    {
        goto tE4yp;
        CCcp4:
        fFdrx:
        goto OZm3u;
        tE4yp:
        $src = $this->input->post("\163\162\143");
        goto QDrO7;
        YwVV8:
        echo "\x46\151\154\x65\40\x44\145\x6c\x65\164\145\40\x53\x75\x63\x63\145\163\x73\146\x75\154\x6c\171";
        goto CCcp4;
        QDrO7:
        if (!unlink($src)) {
            goto fFdrx;
        }
        goto YwVV8;
        OZm3u:
    }
    public function cbt()
    {
        goto z2b1s;
        pkBjC:
        $data = ["\165\163\145\162" => $user, "\163\151\x73\167\141" => $siswa, "\x6a\165\144\165\x6c" => "\x50\x65\x6e\151\x6c\x61\151\x61\156", "\x73\145\x74\x74\x69\156\147" => $this->dashboard->getSetting()];
        goto EdDnL;
        GUTYg:
        $data["\x65\x6c\141\x70\163\145\144"] = $timer;
        goto omUx6;
        l6z0h:
        $user = $this->ion_auth->user()->row();
        goto Upnv0;
        jVPl5:
        $data["\x63\142\x74\137\x6a\x61\x64\167\x61\x6c"] = $jadwal_ujian_aktif;
        goto MuEcg;
        Upnv0:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto pkBjC;
        b5azc:
        $timer = [];
        goto v7Fpq;
        PTuqc:
        $data["\163\145\163\x69"] = $this->dropdown->getAllWaktuSesi();
        goto GUTYg;
        dsFrX:
        $cbt_jadwal = $this->cbt->getJadwalCbt($tp->id_tp, $smt->id_smt, $siswa->level_id);
        goto KXAFq;
        pEpWi:
        $this->load->view("\x6d\x65\x6d\142\145\x72\x73\57\163\151\x73\167\141\x2f\x74\145\x6d\x70\154\x61\164\x65\163\x2f\146\x6f\x6f\164\145\162");
        goto M9v62;
        omUx6:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto EmxFR;
        EmxFR:
        $data["\164\160\137\x61\143\x74\x69\166\145"] = $tp;
        goto Rr9s5;
        nhkYS:
        $data["\163\x6d\x74\x5f\141\x63\x74\151\x76\x65"] = $smt;
        goto XzaBB;
        o4jz7:
        $this->load->view("\155\x65\x6d\142\x65\x72\x73\x2f\x73\151\163\x77\141\57\x74\145\155\160\x6c\x61\x74\x65\163\x2f\150\145\141\144\145\162", $data);
        goto bCmHe;
        z2b1s:
        $tp = $this->dashboard->getTahunActive();
        goto qNTIA;
        o_cjO:
        $cbt_info = $this->cbt->getSiswaCbtInfo($siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto qR6P1;
        MuEcg:
        $data["\147\x75\x72\x75"] = $this->cbt->getDataGuru();
        goto PTuqc;
        KXAFq:
        $jadwal_ujian_aktif = [];
        goto b5azc;
        QFv8q:
        zKaby:
        goto M7rXX;
        M7rXX:
        $data["\143\142\x74\137\151\x6e\146\157"] = $cbt_info;
        goto jVPl5;
        XzaBB:
        $data["\162\x75\156\x6e\x69\x6e\x67\x5f\164\x65\170\164"] = $this->dashboard->getRunningText();
        goto o4jz7;
        Rr9s5:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto nhkYS;
        qNTIA:
        $smt = $this->dashboard->getSemesterActive();
        goto l6z0h;
        EdDnL:
        $today = strtotime(date("\x59\55\x6d\55\x64"));
        goto o_cjO;
        v7Fpq:
        foreach ($cbt_jadwal as $key => $jadwal) {
            goto g_OUp;
            SapyJ:
            foreach ($kk as $k) {
                array_push($arrKelasCbt, $k["\153\145\x6c\141\163\137\x69\x64"]);
                fW8mV:
            }
            goto Ha274;
            uzWNV:
            krh20:
            goto xCWqv;
            qs9P3:
            if (!($today >= $mulai && $today <= $selesai)) {
                goto krh20;
            }
            goto tEpJ4;
            fDHtz:
            $mulai = strtotime($jadwal->tgl_mulai);
            goto vq4Rb;
            vq4Rb:
            $selesai = strtotime($jadwal->tgl_selesai);
            goto qs9P3;
            tEpJ4:
            if (!($jadwal->soal_agama == "\55" || $jadwal->soal_agama == "\60" || $jadwal->soal_agama == $siswa->agama)) {
                goto yaBIi;
            }
            goto I97om;
            Ko1eI:
            $jadwal_ujian_aktif[$jadwal->tgl_mulai] = [];
            goto tLl2R;
            Ha274:
            Z9Lzc:
            goto ln90c;
            pO047:
            ncXjj:
            goto ecwDZ;
            p_1CP:
            goto XMLgm;
            goto pO047;
            my37O:
            $arrKelasCbt = [];
            goto SapyJ;
            NnDYM:
            XMLgm:
            goto dH4Kg;
            I97om:
            if (isset($jadwal_ujian_aktif[$jadwal->tgl_mulai])) {
                goto ncXjj;
            }
            goto Ko1eI;
            ecwDZ:
            array_push($jadwal_ujian_aktif[$jadwal->tgl_mulai], $jadwal);
            goto NnDYM;
            Nj7k4:
            WSvZG:
            goto pLdAj;
            R8Cva:
            $timer[$jadwal->id_jadwal] = $this->cbt->getElapsed($siswa->id_siswa . "\60" . $jadwal->id_jadwal);
            goto Nj7k4;
            g_OUp:
            $kk = unserialize($jadwal->bank_kelas);
            goto my37O;
            ln90c:
            if (!($cbt_info != null && in_array($cbt_info->id_kelas, $arrKelasCbt) && $jadwal->status === "\61")) {
                goto EoDqG;
            }
            goto fDHtz;
            tLl2R:
            array_push($jadwal_ujian_aktif[$jadwal->tgl_mulai], $jadwal);
            goto p_1CP;
            xCWqv:
            EoDqG:
            goto R8Cva;
            dH4Kg:
            yaBIi:
            goto uzWNV;
            pLdAj:
        }
        goto QFv8q;
        qR6P1:
        $cbt_info->no_peserta = $this->cbt->getNomorPeserta($siswa->id_siswa);
        goto dsFrX;
        bCmHe:
        $this->load->view("\x6d\x65\x6d\142\145\162\x73\57\x73\151\x73\x77\x61\57\143\142\164\57\x64\x61\164\141");
        goto pEpWi;
        M9v62:
    }
    public function konfirmasi($id_jadwal)
    {
        goto aMl7U;
        KeLjW:
        $guru = $this->cbt->getDataGuru();
        goto HVAh3;
        UTCVF:
        $curr_agent = $this->agent->mobile();
        goto vTgWJ;
        BQz_H:
        $this->db->set("\x64\x65\166\x69\x63\x65", $curr_device);
        goto fVwld;
        ZLGdl:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto zx9PO;
        t0Gux:
        $data["\x73\155\164\x5f\x61\143\x74\x69\166\x65"] = $smt;
        goto Wpd_W;
        lEs9k:
        if ($log != null) {
            goto mIDHF;
        }
        goto nSBLe;
        XXn9i:
        if (!($pengawass != null && count(explode("\x2c", $pengawass->id_guru)) > 0)) {
            goto rNxAD;
        }
        goto gtyiB;
        OCMUK:
        $data["\163\155\164"] = $this->dashboard->getSemester();
        goto t0Gux;
        hbON2:
        rNxAD:
        goto dtEVq;
        K_Dyb:
        $bank = $this->cbt->getCbt($id_jadwal);
        goto b1Ckg;
        azHLR:
        $curr_agent = "\x75\x6e\x6b\156\x6f\167\156";
        goto ynOvG;
        eNFUm:
        $data["\x76\x61\x6c\x69\x64"] = $valid;
        goto UAHDi;
        e5ooN:
        $curr_address = $this->input->ip_address();
        goto cXUDr;
        YXgfs:
        goto V2YTE;
        goto hjlnx;
        fVwld:
        $this->db->set("\x72\145\x73\x65\164", 0);
        goto YAAKZ;
        mCoyA:
        Bb77f:
        goto pC5JW;
        SGFux:
        mIDHF:
        goto w5shv;
        s4kXW:
        yJXmP:
        goto PIJmH;
        PIJmH:
        $log = $this->db->where("\151\x64\137\154\157\147", $siswa->id_siswa . "\60" . $id_jadwal . "\61")->get("\x6c\157\x67\x5f\165\x6a\151\141\x6e")->row();
        goto mtPnN;
        b1Ckg:
        $data["\x6b\145\154\141\x73"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt);
        goto KeLjW;
        AzB4S:
        $curr_device = $this->agent->platform();
        goto YrGbe;
        pC5JW:
        $this->load->view("\x6d\x65\x6d\142\x65\x72\x73\57\x73\x69\x73\167\141\x2f\x74\x65\155\x70\154\x61\x74\145\163\x2f\150\x65\x61\x64\145\x72", $data);
        goto DJha8;
        Wpd_W:
        $data["\x72\x75\x6e\x6e\x69\156\147\x5f\x74\145\170\164"] = $this->dashboard->getRunningText();
        goto e5ooN;
        ygle7:
        $pengawas = [];
        goto XXn9i;
        mtPnN:
        if (!($log != null && $log->reset == 1)) {
            goto E6C3E;
        }
        goto Exgt1;
        YAAKZ:
        $this->db->where("\x69\x64\137\154\157\x67", $siswa->id_siswa . "\x30" . $id_jadwal . "\x31");
        goto tTxx_;
        tTxx_:
        if (!$this->db->update("\x6c\157\x67\137\165\152\x69\141\x6e")) {
            goto MJZj8;
        }
        goto iPDBp;
        US7Jq:
        $data = ["\165\163\x65\x72" => $user, "\163\x69\x73\167\x61" => $siswa, "\x6a\x75\144\165\x6c" => "\120\145\x6e\x69\x6c\x61\x69\x61\156", "\x73\x65\164\x74\151\x6e\x67" => $this->dashboard->getSetting()];
        goto ZLGdl;
        Edwm4:
        d0Qmx:
        goto CsbQu;
        zx9PO:
        $data["\164\160\137\x61\143\x74\x69\166\145"] = $tp;
        goto OCMUK;
        AKvDt:
        goto HDgnT;
        goto s4kXW;
        hjlnx:
        B_Erk:
        goto UTCVF;
        YrGbe:
        $data["\x73\165\160\160\157\x72\x74"] = $curr_agent != "\165\x6e\153\x6e\x6f\x77\x6e";
        goto mIPS3;
        dtEVq:
        $data["\x62\x61\x6e\x6b"] = $bank;
        goto b3ILK;
        zTPhz:
        HDgnT:
        goto eNFUm;
        gtyiB:
        $pengawas = $this->master->getGuruByArrId(explode("\54", $pengawass->id_guru));
        goto hbON2;
        BWNyU:
        goto PdF0w;
        goto SGFux;
        jKf7l:
        $smt = $this->dashboard->getSemesterActive();
        goto yD_3X;
        iPDBp:
        $log = $this->db->where("\151\x64\x5f\x6c\x6f\147", $siswa->id_siswa . "\60" . $id_jadwal . "\61")->get("\x6c\x6f\147\x5f\x75\x6a\151\141\156")->row();
        goto XljZu;
        CsbQu:
        $curr_agent = $this->agent->browser() . "\x20" . $this->agent->version();
        goto YXgfs;
        b3ILK:
        $data["\x67\165\x72\x75"] = $guru;
        goto zddvJ;
        HVAh3:
        $cbt_info = $this->cbt->getSiswaCbtInfo($siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto au36K;
        zl9R3:
        E6C3E:
        goto lEs9k;
        yD_3X:
        $user = $this->ion_auth->user()->row();
        goto nuC89;
        nuC89:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto US7Jq;
        ynOvG:
        goto V2YTE;
        goto Edwm4;
        vkBn0:
        $valid = true;
        goto AKvDt;
        Exgt1:
        $this->db->set("\x61\x64\144\x72\145\163\x73", $curr_address);
        goto PzG5N;
        XljZu:
        MJZj8:
        goto zl9R3;
        PzG5N:
        $this->db->set("\141\x67\x65\156\164", $curr_agent);
        goto BQz_H;
        lQjbD:
        if ($info->reset_login == "\x31") {
            goto yJXmP;
        }
        goto vkBn0;
        AFZvh:
        PdF0w:
        goto zTPhz;
        nSBLe:
        $valid = true;
        goto BWNyU;
        RNQNN:
        $this->load->view("\155\145\x6d\x62\x65\162\163\57\x73\151\163\167\x61\57\x74\145\155\160\x6c\141\164\145\x73\57\x66\157\157\164\145\162");
        goto njWzY;
        vTgWJ:
        V2YTE:
        goto AzB4S;
        au36K:
        $pengawass = $this->cbt->getPengawas($tp->id_tp . $smt->id_smt . $id_jadwal . $cbt_info->id_ruang . $cbt_info->id_sesi);
        goto ygle7;
        KgNdn:
        if ($this->agent->is_mobile()) {
            goto B_Erk;
        }
        goto azHLR;
        UAHDi:
        if (!$valid) {
            goto Bb77f;
        }
        goto K_Dyb;
        DJha8:
        $this->load->view("\155\145\155\142\145\x72\x73\x2f\x73\151\x73\167\141\57\x63\x62\164\57\x6b\x6f\x6e\x66\151\x72\x6d\x61\x73\x69");
        goto RNQNN;
        w5shv:
        $valid = $log->address == $curr_address && $log->agent == $curr_agent && $log->device == $curr_device;
        goto AFZvh;
        aMl7U:
        $tp = $this->dashboard->getTahunActive();
        goto jKf7l;
        cXUDr:
        if ($this->agent->is_browser()) {
            goto d0Qmx;
        }
        goto KgNdn;
        zddvJ:
        $data["\160\x65\x6e\147\x61\167\141\x73"] = $pengawas;
        goto mCoyA;
        mIPS3:
        $info = $this->cbt->getJadwalById($id_jadwal);
        goto lQjbD;
        njWzY:
    }
    public function validasiSiswa()
    {
        goto CFxbS;
        NDSEq:
        $this->db->trans_start();
        goto l4hI2;
        mxIii:
        $id_siswa = $this->input->post("\x73\x69\163\x77\141");
        goto lol1Y;
        atUbC:
        $mulai_baru = true;
        goto R6fgs;
        i2rO8:
        $inserted = $this->cbt->saveLog($id_siswa, $id_jadwal, 1, "\115\145\x6d\x75\154\x61\151\x20\125\152\x69\141\x6e");
        goto h3ur6;
        XM0iV:
        $interval = $mulai->diff(new DateTime());
        goto NpqO8;
        O6JuL:
        $this->db->set("\x6c\141\x6d\141\x5f\165\x6a\x69\x61\x6e", "\60\60\x3a\60\60\x3a\x30\x30");
        goto MwCvc;
        Jtzzy:
        eA1Yk:
        goto NG3R5;
        NB9L0:
        $this->db->where("\x69\144\x5f\x64\x75\x72\141\x73\x69", $id_siswa . "\60" . $id_jadwal);
        goto jGPAX;
        CFxbS:
        $id_jadwal = $this->input->post("\152\x61\x64\x77\141\154");
        goto mxIii;
        rropc:
        $this->db->where("\x69\144\x5f\x64\165\x72\141\163\151", $id_siswa . "\x30" . $id_jadwal);
        goto BdzT6;
        W5Q8t:
        EImFH:
        goto uYxZ0;
        JJ6PH:
        goto orgl1;
        goto NOymM;
        w0ljC:
        Tz5Ok:
        goto RKYKO;
        zNU6b:
        $this->db->set("\162\145\x73\145\164", 0);
        goto SOPr2;
        j2XCz:
        if (!(count($nomor_soal) > 0)) {
            goto fkvZ5;
        }
        goto RY5yG;
        EWDKq:
        zobvN:
        goto q6tIb;
        jGPAX:
        $data["\165\160\x64\141\x74\x65\137\x72\145\x73\145\x74"] = $this->db->update("\x63\142\x74\x5f\144\165\162\141\x73\151\137\163\x69\163\167\x61");
        goto E8lKN;
        BdzT6:
        $data["\x75\x70\144\141\164\x65\137\162\x65\x73\145\164"] = $this->db->update("\x63\142\x74\137\144\165\x72\141\163\151\x5f\x73\x69\x73\167\x61");
        goto vhVrp;
        Tg3o0:
        $mulai = new DateTime($elapsed->mulai);
        goto XM0iV;
        iaU8N:
        $this->db->set("\155\x75\x6c\x61\151", date("\x59\x2d\155\55\144\x20\x48\72\151\72\x73"));
        goto i6VP9;
        KV1Of:
        $this->db->insert("\143\142\x74\137\x64\165\162\141\163\151\137\163\151\163\167\x61", $insert);
        goto W5Q8t;
        da3_H:
        $mulai_baru_d = false;
        goto e7aCB;
        yqbaA:
        $mulai_baru_d = $elapsed->reset == "\63";
        goto JSZuY;
        ey83U:
        if ($this->agent->is_mobile()) {
            goto X_Btq;
        }
        goto zy8sh;
        nRvEQ:
        $support = $curr_agent != "\x75\x6e\153\x6e\x6f\x77\156";
        goto WvhN1;
        zy8sh:
        $curr_agent = "\x75\156\x6b\x6e\157\167\156";
        goto qhsV1;
        TvWqV:
        orgl1:
        goto No7dJ;
        NO_o0:
        $data["\x65\154\x61\160\x73\145\144"] = $this->cbt->getElapsed($id_siswa . "\60" . $id_jadwal);
        goto mrJZq;
        BzT9p:
        TQa7P:
        goto SHmDP;
        mmHHT:
        $log = $this->db->where("\x69\144\137\x6c\157\x67", $id_siswa . "\60" . $id_jadwal . "\x31")->get("\x6c\x6f\x67\x5f\165\x6a\151\x61\156")->row();
        goto AkA5w;
        bTWhT:
        fkvZ5:
        goto BzT9p;
        C_jty:
        $curr_agent = $this->agent->browser() . "\x20" . $this->agent->version();
        goto cY9ff;
        NG3R5:
        $token_valid = false;
        goto StPdH;
        SOPr2:
        $this->db->where("\x69\x64\137\144\x75\x72\x61\163\x69", $id_siswa . "\x30" . $id_jadwal);
        goto OE2mw;
        Ny7FX:
        yI5F3:
        goto AjOnm;
        tZOHU:
        $insert = ["\x69\x64\x5f\x64\165\162\x61\x73\151" => $id_siswa . "\60" . $id_jadwal, "\151\144\x5f\x73\151\x73\167\x61" => $id_siswa, "\x69\x64\137\152\141\144\x77\x61\154" => $id_jadwal, "\163\x74\x61\x74\x75\x73" => 1, "\155\x75\154\141\151" => date("\131\x2d\x6d\55\x64\x20\110\72\151\72\163"), "\154\141\x6d\141\x5f\x75\152\x69\141\156" => "\60\x30\x3a\x30\60\72\x30\60", "\162\x65\163\145\x74" => 0];
        goto KV1Of;
        o7x1C:
        $mulai_baru = false;
        goto TvWqV;
        CilaF:
        $this->db->set("\141\x64\x64\x72\145\x73\x73", $curr_address);
        goto ChdG5;
        Vt3PR:
        goto FOr6v;
        goto Jtzzy;
        seXr2:
        $data["\164\x6f\153\x65\x6e"] = $token_valid;
        goto zyf5Q;
        SnQOS:
        $data["\164\x6f\153\145\x6e\x5f\x6d\163\x67"] = $token_valid ? '' : "\x54\157\x6b\x65\x6e\x20\x73\x61\x6c\141\x68";
        goto Vt3PR;
        gOZ7f:
        $izinkan = true;
        goto bYHAD;
        NpqO8:
        $minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;
        goto mubAI;
        BUiID:
        $this->db->delete("\x63\142\164\137\x73\x6f\141\x6c\x5f\163\151\163\x77\141", array("\151\144\137\152\141\x64\x77\141\154" => $id_jadwal, "\151\x64\x5f\163\x69\x73\167\x61" => $id_siswa, "\x69\x64\137\x62\141\156\x6b" => $id_bank));
        goto xbARu;
        tna6A:
        goto o_2wD;
        goto wM7ke;
        MwCvc:
        $this->db->set("\155\x75\x6c\141\x69", date("\x59\55\x6d\x2d\x64\x20\110\72\151\72\163"));
        goto u_FIZ;
        mrJZq:
        if (!$ada_waktu) {
            goto Ojck6;
        }
        goto LOipR;
        p_HxR:
        $izinkan = true;
        goto GHPVW;
        Hqb6u:
        lUaJI:
        goto gOZ7f;
        SAbcu:
        if ($log->reset == "\x30") {
            goto b_ybr;
        }
        goto CilaF;
        GI7XR:
        $data["\x6a\x6d\x6c\137\x73\x6f\141\154"] = $this->cbt->getJumlahSoalSiswa($id_bank, $id_siswa);
        goto Dv2Nh;
        eH0Z7:
        goto t6cU4;
        goto w0ljC;
        ECzsC:
        $this->db->set("\144\x65\166\151\x63\145", $curr_device);
        goto fi9el;
        Dv2Nh:
        Ojck6:
        goto tYRwB;
        Bb8Nt:
        if ($soal > 0) {
            goto tE7Lz;
        }
        goto dXcrv;
        UKe7N:
        $mulai_baru = false;
        goto mmHHT;
        hvbXg:
        $ada_waktu = true;
        goto O6JuL;
        z9Gs6:
        goto m09rY;
        goto Krp86;
        bsc1h:
        $mulai_baru = false;
        goto JJ6PH;
        MhFyX:
        TTkYm:
        goto C_jty;
        kVXLT:
        $data["\x61\144\x61\137\x77\x61\x6b\x74\x75"] = $ada_waktu;
        goto NO_o0;
        uYxZ0:
        yRulN:
        goto kVXLT;
        vv2mq:
        tE7Lz:
        goto rUvx6;
        oBlsA:
        $ada_waktu = true;
        goto I9l9C;
        ZuZHv:
        if ($this->db->update("\x6c\157\x67\x5f\x75\x6a\x69\x61\x6e")) {
            goto Kcbnr;
        }
        goto t0_Cm;
        TjT5H:
        goto EImFH;
        goto Ny7FX;
        IZP_Z:
        b_ybr:
        goto zpa6g;
        GHPVW:
        $mulai_baru = false;
        goto tna6A;
        x7VF7:
        $token = $this->cbt->getToken();
        goto BQHQv;
        vhVrp:
        goto m09rY;
        goto XNTcU;
        JSZuY:
        if ($elapsed->reset == "\x31") {
            goto DYCev;
        }
        goto cYP9L;
        Xka3M:
        $mulai_baru_d = true;
        goto tZOHU;
        rUvx6:
        if (!($mulai_baru && $mulai_baru_d)) {
            goto TQa7P;
        }
        goto BUiID;
        XX4Q9:
        $curr_device = $this->agent->platform();
        goto nRvEQ;
        BrBkF:
        $izinkan = false;
        goto YNBik;
        I6Fhv:
        Od2zy:
        goto oBlsA;
        cYP9L:
        if ($elapsed->reset == "\x32") {
            goto TzV03;
        }
        goto VXjG1;
        zpa6g:
        $izinkan = false;
        goto EWDKq;
        BQHQv:
        if ($token == null) {
            goto eA1Yk;
        }
        goto kJV6V;
        qhsV1:
        goto h9HwP;
        goto MhFyX;
        kJV6V:
        $token_valid = $token->token == $token_siswa ? true : false;
        goto SnQOS;
        mubAI:
        $data["\151\x6e\164\145\x72\x76\x61\x6c"] = ["\x64\141\171\163" => $interval->days, "\150\x61\x72\x69" => $interval->d, "\152\x61\155" => $interval->h, "\x6d\145\156\151\164" => $interval->i, "\144\x65\x74\151\153" => $interval->s, "\x74\x6f\x74\x61\x6c" => $minutes];
        goto aRNew;
        OE2mw:
        $data["\x75\160\x64\x61\x74\145\x5f\x72\x65\163\145\x74"] = $this->db->update("\x63\x62\x74\x5f\x64\165\x72\141\163\x69\137\x73\x69\163\167\x61");
        goto WkFBX;
        hmq01:
        X_Btq:
        goto fdJZV;
        No7dJ:
        goto zobvN;
        goto IZP_Z;
        RY5yG:
        $this->db->insert_batch("\143\142\164\137\x73\x6f\141\x6c\137\163\151\x73\167\x61", $nomor_soal);
        goto bTWhT;
        u_FIZ:
        $this->db->set("\x72\145\x73\x65\x74", 0);
        goto rropc;
        IUVtO:
        $elapsed = $this->cbt->getElapsed($id_siswa . "\60" . $id_jadwal);
        goto tS0nb;
        lol1Y:
        $id_bank = $this->input->post("\x62\141\156\153");
        goto MatRA;
        fi9el:
        $this->db->set("\x72\x65\163\x65\x74", 0);
        goto KYWrN;
        t0_Cm:
        $izinkan = false;
        goto bsc1h;
        Or60B:
        $token_valid = true;
        goto R0LoE;
        StPdH:
        $data["\164\157\x6b\145\x6e\x5f\155\x73\x67"] = "\x54\x6f\153\145\x6e\40\x74\151\144\x61\153\40\x61\144\x61";
        goto z5nsQ;
        KYWrN:
        $this->db->where("\151\144\137\x6c\x6f\x67", $id_siswa . "\x30" . $id_jadwal . "\61");
        goto ZuZHv;
        NOymM:
        Kcbnr:
        goto IW4la;
        z5nsQ:
        FOr6v:
        goto jJL0R;
        Jgwf3:
        $curr_address = $this->input->ip_address();
        goto lFau9;
        ChdG5:
        $this->db->set("\141\147\x65\x6e\x74", $curr_agent);
        goto ECzsC;
        eSZuV:
        $this->db->insert_batch("\x63\142\164\x5f\163\157\x61\154\137\x73\x69\163\167\x61", $nomor_soal);
        goto hyTW5;
        wM7ke:
        Q6hj3:
        goto TriVc;
        fdJZV:
        $curr_agent = $this->agent->mobile();
        goto e0w04;
        l4hI2:
        $info = $this->cbt->getJadwalById($id_jadwal);
        goto Or60B;
        WvhN1:
        $data["\163\x75\x70\160\x6f\162\x74"] = $support;
        goto JVvLM;
        xbARu:
        $nomor_soal = $this->createQueueNumber($id_siswa, $id_bank, $id_jadwal);
        goto j2XCz;
        i6VP9:
        $this->db->set("\x72\x65\163\x65\x74", 0);
        goto NB9L0;
        q6tIb:
        goto hGp1I;
        goto Hqb6u;
        e7aCB:
        $ada_waktu = false;
        goto n5Tcs;
        JVvLM:
        if (!$support) {
            goto wpYWZ;
        }
        goto UKe7N;
        E8lKN:
        m09rY:
        goto TjT5H;
        XNTcU:
        TzV03:
        goto AhjGa;
        e4gRm:
        $data["\x69\172\x69\x6e\x6b\x61\x6e"] = $izinkan;
        goto PV2as;
        m3sxp:
        if (!(count($nomor_soal) > 0)) {
            goto E0tCs;
        }
        goto eSZuV;
        hyTW5:
        E0tCs:
        goto X1QX7;
        YvAHK:
        jIi0E:
        goto i2rO8;
        AhjGa:
        $ada_waktu = true;
        goto zNU6b;
        X1QX7:
        goto Q1Zi8;
        goto vv2mq;
        RKYKO:
        $log = $this->db->where("\151\x64\x5f\154\x6f\x67", $id_siswa . "\x30" . $id_jadwal . "\61")->get("\x6c\157\x67\x5f\x75\152\151\x61\x6e")->row();
        goto wWEKc;
        PV2as:
        $data["\154\157\x67"] = $log;
        goto da3_H;
        DNyDV:
        $data["\167\141\x72\x6e"] = ["\x64\x75\x72\141\163\151\137\165\x6a\x69\x61\156" => $info->durasi_ujian, "\x73\x69\163\x77\x61\137\x6d\165\x6c\141\x69" => $elapsed->mulai, "\144\165\x72\141\163\x69\137\163\151\163\167\141" => $elapsed->lama_ujian, "\164\151\155\x65\x72\137\145\x6c\141\x70\x73\x65\x64" => $minutes, "\164\x65\162\154\x61\x6d\x70\141\165\x69" => $minutes - $info->durasi_ujian, "\x73\x74\141\x74\x75\163" => $ada_waktu ? 0 : 1, "\x6d\x73\x67" => $ada_waktu ? '' : "\x57\x61\x6b\164\x75\x20\165\152\x69\141\156\40\x73\165\144\x61\150\x20\150\x61\142\151\x73"];
        goto z9Gs6;
        tS0nb:
        if ($elapsed == null) {
            goto yI5F3;
        }
        goto yqbaA;
        AkA5w:
        if ($log == null) {
            goto jIi0E;
        }
        goto F43Ek;
        dXcrv:
        $nomor_soal = $this->createQueueNumber($id_siswa, $id_bank, $id_jadwal);
        goto m3sxp;
        R6fgs:
        t6cU4:
        goto J9osd;
        utrhy:
        gqtFK:
        goto b237d;
        tYRwB:
        wpYWZ:
        goto utrhy;
        VbqUH:
        goto aq3P5;
        goto YvAHK;
        J9osd:
        aq3P5:
        goto e4gRm;
        I9l9C:
        $this->db->set("\x6c\141\x6d\x61\x5f\165\x6a\x69\x61\x6e", "\x30\60\x3a\60\x30\x3a\60\60");
        goto iaU8N;
        b237d:
        $this->db->trans_complete();
        goto T5aOc;
        WkFBX:
        goto m09rY;
        goto I6Fhv;
        lFau9:
        if ($this->agent->is_browser()) {
            goto TTkYm;
        }
        goto ey83U;
        poLgH:
        o_2wD:
        goto VbqUH;
        YNBik:
        $mulai_baru = false;
        goto eH0Z7;
        wWEKc:
        $izinkan = true;
        goto atUbC;
        R0LoE:
        if (!($info->token == "\x31")) {
            goto QG4tU;
        }
        goto x7VF7;
        TriVc:
        if ($log->address == $curr_address && $log->agent == $curr_agent && $log->device == $curr_device) {
            goto lUaJI;
        }
        goto SAbcu;
        e0w04:
        h9HwP:
        goto XX4Q9;
        iG43B:
        $izinkan = true;
        goto o7x1C;
        MatRA:
        $token_siswa = $this->input->post("\x74\x6f\x6b\145\156");
        goto NDSEq;
        LOipR:
        $soal = $this->cbt->getJumlahSoalSiswa($id_bank, $id_siswa);
        goto Bb8Nt;
        SHmDP:
        Q1Zi8:
        goto GI7XR;
        IW4la:
        $log = $this->db->where("\151\x64\x5f\154\x6f\x67", $id_siswa . "\x30" . $id_jadwal . "\x31")->get("\x6c\157\147\x5f\165\x6a\x69\141\156")->row();
        goto iG43B;
        h3ur6:
        if ($inserted) {
            goto Tz5Ok;
        }
        goto BrBkF;
        cY9ff:
        goto h9HwP;
        goto hmq01;
        AjOnm:
        $ada_waktu = true;
        goto Xka3M;
        T5aOc:
        $this->output_json($data);
        goto q1Irh;
        zyf5Q:
        if (!$token_valid) {
            goto gqtFK;
        }
        goto Jgwf3;
        aRNew:
        $ada_waktu = $minutes < $info->durasi_ujian;
        goto DNyDV;
        Krp86:
        DYCev:
        goto hvbXg;
        jJL0R:
        QG4tU:
        goto seXr2;
        n5Tcs:
        if (!$izinkan) {
            goto yRulN;
        }
        goto IUVtO;
        VXjG1:
        if ($elapsed->reset == "\63") {
            goto Od2zy;
        }
        goto Tg3o0;
        F43Ek:
        if ($info->reset_login == "\x31") {
            goto Q6hj3;
        }
        goto p_HxR;
        bYHAD:
        $mulai_baru = false;
        goto I9piW;
        I9piW:
        hGp1I:
        goto poLgH;
        q1Irh:
    }
    public function createQueueNumber($id_siswa, $id_bank, $id_jadwal)
    {
        goto oX869;
        YYjt5:
        $ada3 = $num3 == (int) $jadwal->tampil_jodohkan;
        goto Bjt16;
        gmKwH:
        $num2 = isset($cek_soal["\x32"]) ? count($cek_soal["\x32"]) : 0;
        goto JY_8X;
        IkdHx:
        if ($opsis == "\x34") {
            goto evRAO;
        }
        goto n1LkX;
        nMwZb:
        goto ZnXyl;
        goto Hv9SX;
        hTaOe:
        return [];
        goto i7z6F;
        C5BX2:
        xLK0s:
        goto Y1HVo;
        maFY0:
        $arrOpsi = ["\101", "\102", "\x43", "\104"];
        goto KEfuk;
        MdFuR:
        if ($opsis == "\63") {
            goto ZM9Yi;
        }
        goto IkdHx;
        Q3rQM:
        $num4 = isset($cek_soal["\x34"]) ? count($cek_soal["\x34"]) : 0;
        goto mXBoP;
        YLg1H:
        $ada5 = $num5 == (int) $jadwal->tampil_esai;
        goto cWwbv;
        Hv9SX:
        ZM9Yi:
        goto WHohy;
        cWwbv:
        if ($ada1 && $ada2 && $ada3 && $ada4 && $ada5) {
            goto SV5XW;
        }
        goto hTaOe;
        mXBoP:
        $num5 = isset($cek_soal["\65"]) ? count($cek_soal["\65"]) : 0;
        goto nSSN3;
        i7z6F:
        goto xLK0s;
        goto NJYSo;
        tZpvp:
        $items = [];
        goto WXeQt;
        CW5LX:
        shuffle($arrNum);
        goto mjqu3;
        rMmuz:
        return $items;
        goto C5BX2;
        z1Zpi:
        foreach ($cek_soal as $jenis => $soals) {
            goto A811R;
            UgSrz:
            a2xdr:
            goto SKblJ;
            A811R:
            foreach ($soals as $soal) {
                goto p1Bmo;
                imLfE:
                $item_soal["\x73\157\141\154\137\x65\156\144"] = $j + 1 === count($arrNum) ? "\x31" : "\x30";
                goto TuHi7;
                p1Bmo:
                if (!($jenis == "\x31")) {
                    goto LdsW8;
                }
                goto QJBhK;
                GBCwz:
                SLe1T:
                goto sB54u;
                sB54u:
                $item_soal["\157\x70\163\151\137\x61\x6c\x69\141\163\x5f\x61"] = "\x41";
                goto HPIRT;
                QJBhK:
                if (!($jadwal->acak_opsi == "\x31")) {
                    goto F_G1f;
                }
                goto DvIEk;
                g2WR_:
                $item_soal["\x70\157\151\x6e\x74\137\x73\x6f\x61\154"] = $jadwal->bobot_pg > 0 ? round($jadwal->bobot_pg / $jadwal->tampil_pg, 2) : 0;
                goto zf198;
                VsQGd:
                h4Eco:
                goto FGHWi;
                p6osj:
                goto tvTGB;
                goto UIuro;
                daJYB:
                if ($jenis == "\x35") {
                    goto s8R9W;
                }
                goto tjXME;
                kysFG:
                $item_soal["\x70\x6f\x69\156\x74\137\x73\x6f\x61\x6c"] = $jadwal->bobot_jodohkan > 0 ? round($jadwal->bobot_jodohkan / $jadwal->tampil_jodohkan, 2) : 0;
                goto ZMulC;
                dyWmV:
                if ($jenis == "\x34") {
                    goto h4Eco;
                }
                goto daJYB;
                UIuro:
                j8CmJ:
                goto kysFG;
                AgYFo:
                $item_soal["\152\x61\167\x61\x62\141\156\x5f\142\x65\156\141\x72"] = $soal->jawaban;
                goto imLfE;
                wwxBh:
                zvLev:
                goto W49ao;
                ZMulC:
                goto tvTGB;
                goto VsQGd;
                shFpT:
                $item_soal["\x69\144\137\163\x6f\x61\x6c\137\163\x69\x73\167\141"] = $id_siswa . "\60" . $id_jadwal . $id_bank . $arrNum[$j];
                goto mVjBu;
                uP0I0:
                $item_soal["\x6f\x70\163\151\x5f\141\154\151\x61\x73\x5f\x65"] = '';
                goto hrl8b;
                A1hSR:
                $item_soal["\151\144\137\x73\151\163\167\x61"] = $id_siswa;
                goto qborY;
                plmkl:
                $item_soal["\x6f\x70\x73\x69\x5f\141\x6c\x69\141\163\137\144"] = '';
                goto uP0I0;
                fqdnu:
                X3atV:
                goto N1pNY;
                J2j0p:
                $item_soal["\x6f\x70\163\x69\137\141\x6c\x69\x61\163\137\142"] = $arrOpsi[1];
                goto j8imP;
                HuSfB:
                $item_soal["\x70\x6f\151\x6e\164\137\x73\x6f\141\x6c"] = $jadwal->bobot_esai > 0 ? round($jadwal->bobot_esai / $jadwal->tampil_esai, 2) : 0;
                goto S1zy4;
                iaHFi:
                $item_soal["\151\x64\x5f\152\x61\x64\167\x61\x6c"] = $id_jadwal;
                goto X_xNZ;
                WJMGK:
                goto tvTGB;
                goto ONDO3;
                hrl8b:
                $item_soal["\160\x6f\x69\x6e\164\137\x73\x6f\141\x6c"] = $jadwal->bobot_kompleks > 0 ? round($jadwal->bobot_kompleks / $jadwal->tampil_kompleks, 2) : 0;
                goto p6osj;
                xGxJe:
                if ($jenis == "\63") {
                    goto j8CmJ;
                }
                goto dyWmV;
                FGHWi:
                $item_soal["\x70\x6f\151\x6e\164\137\163\x6f\x61\154"] = $jadwal->bobot_isian > 0 ? round($jadwal->bobot_isian / $jadwal->tampil_isian, 2) : 0;
                goto WJMGK;
                SdjSU:
                F_G1f:
                goto IOCZy;
                i03YN:
                $item_soal["\x6e\157\x5f\163\x6f\x61\154\137\141\x6c\151\141\x73"] = $arrNum[$j];
                goto R5_N2;
                mVjBu:
                $item_soal["\151\x64\x5f\x62\141\156\153"] = $id_bank;
                goto iaHFi;
                S1zy4:
                tvTGB:
                goto AgYFo;
                DvIEk:
                shuffle($arrOpsi);
                goto SdjSU;
                ONDO3:
                s8R9W:
                goto HuSfB;
                qborY:
                $item_soal["\152\x65\x6e\x69\163\137\x73\157\x61\x6c"] = $jenis;
                goto i03YN;
                SQD6f:
                if ($jenis == "\62") {
                    goto SLe1T;
                }
                goto xGxJe;
                IOCZy:
                LdsW8:
                goto shFpT;
                HPIRT:
                $item_soal["\157\x70\163\x69\137\x61\x6c\x69\141\x73\137\142"] = '';
                goto BQMFU;
                RYlsO:
                $item_soal["\157\x70\x73\151\137\141\x6c\x69\141\163\x5f\145"] = isset($arrOpsi[4]) ? $arrOpsi[4] : '';
                goto g2WR_;
                TuHi7:
                array_push($items, $item_soal);
                goto HoPXo;
                j8imP:
                $item_soal["\157\x70\163\151\137\x61\154\x69\141\x73\x5f\x63"] = isset($arrOpsi[2]) ? $arrOpsi[2] : '';
                goto jK4aA;
                jK4aA:
                $item_soal["\x6f\x70\163\151\x5f\x61\154\x69\x61\163\x5f\x64"] = isset($arrOpsi[3]) ? $arrOpsi[3] : '';
                goto RYlsO;
                BQMFU:
                $item_soal["\x6f\160\x73\151\137\x61\154\x69\x61\x73\x5f\143"] = '';
                goto plmkl;
                tjXME:
                goto tvTGB;
                goto fqdnu;
                HoPXo:
                $j++;
                goto wwxBh;
                R5_N2:
                if ($jenis == "\x31") {
                    goto X3atV;
                }
                goto SQD6f;
                zf198:
                goto tvTGB;
                goto GBCwz;
                N1pNY:
                $item_soal["\x6f\160\x73\151\137\x61\x6c\151\x61\163\137\141"] = $arrOpsi[0];
                goto J2j0p;
                X_xNZ:
                $item_soal["\151\x64\137\x73\x6f\x61\154"] = $soal->id_soal;
                goto A1hSR;
                W49ao:
            }
            goto dTXhL;
            dTXhL:
            otDW8:
            goto UgSrz;
            SKblJ:
        }
        goto AhJ2l;
        nSSN3:
        $total = $num1 + $num2 + $num3 + $num4 + $num5;
        goto vDalB;
        KEfuk:
        ZnXyl:
        goto jitpk;
        n1LkX:
        $arrOpsi = ["\101", "\102", "\103", "\x44", "\105"];
        goto u6Jiq;
        L72do:
        if ($opsis == "\x32") {
            goto o1n32;
        }
        goto MdFuR;
        NJYSo:
        SV5XW:
        goto ylVwe;
        k6PVi:
        $ada2 = $num2 == (int) $jadwal->tampil_kompleks;
        goto YYjt5;
        AhJ2l:
        p1u4W:
        goto Uut8D;
        Bjt16:
        $ada4 = $num4 == (int) $jadwal->tampil_isian;
        goto YLg1H;
        ylVwe:
        $opsis = $jadwal->opsi;
        goto L72do;
        oX869:
        $cek_soal = $this->cbt->getAllIdSoal($id_bank);
        goto DCiKy;
        uq0_j:
        o1n32:
        goto DXlDy;
        bJO91:
        $num1 = isset($cek_soal["\x31"]) ? count($cek_soal["\x31"]) : 0;
        goto gmKwH;
        DCiKy:
        $jadwal = $this->cbt->getInfoJadwal($id_bank);
        goto bJO91;
        mjqu3:
        kYchA:
        goto tZpvp;
        R0bI6:
        if (!($jadwal->acak_soal == "\x31")) {
            goto kYchA;
        }
        goto CW5LX;
        H4_s5:
        evRAO:
        goto maFY0;
        i71zZ:
        goto ZnXyl;
        goto H4_s5;
        WHohy:
        $arrOpsi = ["\x41", "\x42", "\103"];
        goto i71zZ;
        Uut8D:
        usort($items, function ($a, $b) {
            return $a["\x6e\157\x5f\x73\x6f\141\x6c\137\x61\154\151\141\163"] <=> $b["\156\x6f\137\163\x6f\141\x6c\x5f\141\154\151\x61\x73"];
        });
        goto rMmuz;
        DXlDy:
        $arrOpsi = ["\101", "\102"];
        goto nMwZb;
        vDalB:
        $ada1 = $num1 == (int) $jadwal->tampil_pg;
        goto k6PVi;
        WXeQt:
        $j = 0;
        goto z1Zpi;
        JY_8X:
        $num3 = isset($cek_soal["\63"]) ? count($cek_soal["\63"]) : 0;
        goto Q3rQM;
        jitpk:
        $arrNum = range(1, $total);
        goto R0bI6;
        u6Jiq:
        goto ZnXyl;
        goto uq0_j;
        Y1HVo:
    }
    public function penilaian($id_jadwal)
    {
        goto oC1Z1;
        BPhOO:
        $id_durasi = $siswa->id_siswa . "\60" . $id_jadwal;
        goto P0n7K;
        gMG6B:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto vnoHD;
        f2pg3:
        $data["\152\x61\144\x77\141\154"] = $this->cbt->getCbt($id_jadwal);
        goto BPhOO;
        fOyzU:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto j7tpX;
        rhIQY:
        redirect("\x73\x69\163\167\x61\x2f\x63\142\x74");
        goto tUNmm;
        QZ91e:
        $data["\x65\154\x61\x70\163\x65\144"] = $durasi;
        goto X4h84;
        tUNmm:
        V3Sqn:
        goto QZ91e;
        oC1Z1:
        $tp = $this->dashboard->getTahunActive();
        goto UB7T9;
        NJ8Tm:
        $data["\162\x75\x6e\156\x69\156\147\x5f\164\x65\x78\x74"] = $this->dashboard->getRunningText();
        goto f2pg3;
        UB7T9:
        $smt = $this->dashboard->getSemesterActive();
        goto nNXv1;
        X_uWI:
        $this->load->view("\x6d\x65\x6d\142\x65\162\x73\x2f\163\151\x73\x77\x61\57\x63\142\x74\57\165\x6a\x69\x61\156");
        goto RHdGn;
        X4h84:
        $this->load->view("\155\145\x6d\142\145\x72\163\57\163\x69\163\x77\141\57\x74\145\155\160\154\x61\164\x65\163\x2f\x68\145\x61\144\145\162", $data);
        goto X_uWI;
        kp1iS:
        $data = ["\x75\x73\x65\x72" => $user, "\163\151\163\167\141" => $siswa, "\152\165\x64\165\154" => "\120\145\156\151\154\141\x69\x61\x6e", "\163\x65\164\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto fOyzU;
        PDm2h:
        $diff = $mulai->diff(new DateTime());
        goto DwLsC;
        vnoHD:
        $data["\x73\x6d\164\x5f\x61\143\164\151\166\145"] = $smt;
        goto NJ8Tm;
        kqG5L:
        $mulai = new DateTime($durasi->mulai);
        goto PDm2h;
        RHdGn:
        $this->load->view("\x6d\145\x6d\x62\145\x72\163\57\x73\151\x73\x77\141\x2f\164\x65\155\x70\x6c\141\x74\145\163\x2f\146\x6f\x6f\164\x65\162");
        goto Q_jFn;
        DwLsC:
        $durasi->diff = ["\144\x61\x79\163" => $diff->days, "\150\141\x72\151" => $diff->d, "\x6a\141\155" => $diff->h, "\x6d\x65\156\x69\x74" => $diff->i, "\x64\145\164\x69\153" => $diff->s, "\146\157\x72\x6d\x61\164" => $diff->format("\45\x48\72\x25\x49\x3a\x25\123")];
        goto BuRKN;
        BuRKN:
        if (!($durasi == null || $durasi->selesai != null)) {
            goto V3Sqn;
        }
        goto rhIQY;
        P0n7K:
        $durasi = $this->cbt->getElapsed($id_durasi);
        goto kqG5L;
        j7tpX:
        $data["\164\x70\137\x61\x63\164\151\x76\x65"] = $tp;
        goto gMG6B;
        tXELm:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto kp1iS;
        nNXv1:
        $user = $this->ion_auth->user()->row();
        goto tXELm;
        Q_jFn:
    }
    public function checkTimer($id_siswa, $id_jadwal)
    {
        goto qz_D8;
        PPm60:
        return $durasi;
        goto N7YJG;
        R4124:
        $this->db->update("\143\142\x74\137\x64\165\162\x61\x73\151\137\x73\151\x73\x77\x61");
        goto Z3oew;
        qMpfO:
        $this->db->where("\151\x64\137\x64\x75\162\x61\x73\x69", $id_durasi);
        goto jn1o5;
        Fxqum:
        $this->db->where("\x69\144\x5f\144\x75\x72\141\163\x69", $id_durasi);
        goto E_Bau;
        jPNVN:
        $durasi = $this->cbt->getElapsed($id_durasi);
        goto i1qJP;
        nKdZM:
        $mulai = new DateTime($durasi->mulai);
        goto wsTbQ;
        cNhUM:
        svx2N:
        goto nKdZM;
        DygYj:
        $durasi = false;
        goto eocF4;
        VB9g7:
        $durasi = $this->cbt->getElapsed($id_durasi);
        goto xtA1c;
        xtA1c:
        if ($durasi != null) {
            goto svx2N;
        }
        goto O_t1i;
        O_t1i:
        $durasi = false;
        goto msKe5;
        Z3oew:
        $durasi = $this->cbt->getElapsed($id_durasi);
        goto L6VOS;
        OfRko:
        SSWxI:
        goto PPm60;
        L6VOS:
        goto WBAn5;
        goto DMRVd;
        DMRVd:
        HR9HU:
        goto zf8FW;
        dtRQL:
        v3iru:
        goto DygYj;
        a8vXU:
        ED23p:
        goto e5jzg;
        Kr7te:
        $this->db->set("\162\x65\x73\145\x74", 0);
        goto qMpfO;
        oqNkK:
        if ($durasi->reset == "\60") {
            goto HR9HU;
        }
        goto dYBRf;
        dYBRf:
        if ($durasi->reset == "\61") {
            goto ED23p;
        }
        goto CVloq;
        msKe5:
        goto SSWxI;
        goto cNhUM;
        E_Bau:
        $this->db->update("\143\142\164\137\x64\165\x72\141\x73\151\x5f\x73\151\163\x77\x61");
        goto g6cuY;
        zf8FW:
        $this->db->set("\x6c\141\155\x61\137\x75\152\151\x61\x6e", $elapsed);
        goto Fxqum;
        eocF4:
        WBAn5:
        goto OfRko;
        EhePE:
        $this->db->set("\154\141\x6d\x61\x5f\x75\x6a\x69\x61\x6e", $elapsed);
        goto VwZqv;
        jn1o5:
        $this->db->update("\143\142\x74\137\144\x75\x72\x61\163\151\x5f\163\151\163\167\141");
        goto jPNVN;
        g6cuY:
        $durasi = $this->cbt->getElapsed($id_durasi);
        goto Wz8uQ;
        VwZqv:
        $this->db->set("\162\x65\163\x65\x74", 0);
        goto XY_UB;
        i1qJP:
        goto WBAn5;
        goto dtRQL;
        e5jzg:
        $this->db->set("\154\x61\155\x61\x5f\165\152\151\141\x6e", "\x30\60\x3a\x30\x30\72\60\60");
        goto Kr7te;
        XY_UB:
        $this->db->where("\x69\x64\137\x64\165\162\x61\x73\151", $id_durasi);
        goto R4124;
        wsTbQ:
        $diff = $mulai->diff(new DateTime());
        goto LdA6n;
        LdA6n:
        $elapsed = $diff->format("\x25\x48\72\x25\111\72\45\x53");
        goto oqNkK;
        CVloq:
        if ($durasi->reset == "\63") {
            goto v3iru;
        }
        goto EhePE;
        Wz8uQ:
        goto WBAn5;
        goto a8vXU;
        qz_D8:
        $id_durasi = $id_siswa . "\x30" . $id_jadwal;
        goto VB9g7;
        N7YJG:
    }
    public function loadNomorSoal()
    {
        goto eLdRE;
        nqFyw:
        $timer = $this->input->post("\x74\151\155\x65\x72");
        goto Lhy4O;
        eLdRE:
        $id_siswa = $this->input->post("\x73\x69\x73\x77\x61");
        goto L0jao;
        y5j50:
        XSTKa:
        goto IK44L;
        jS2fZ:
        $max_jawaban = [count(array_filter(unserialize($item_soal->jawaban)))];
        goto BRX0_;
        XXy3G:
        $data["\x73\157\141\154\x5f\x61\x6b\x68\x69\162"] = $modal;
        goto B4ajS;
        BRX0_:
        $item_soal->opsi_a = unserialize($item_soal->opsi_a);
        goto u5yjL;
        QoG9h:
        $item_soal = $soals[$ind_soal];
        goto kAqlb;
        Tz17q:
        $opsis = ["\164\x68\145\x61\x64" => $theader, "\164\x62\x6f\144\x79" => $tbody, "\x6d\157\x64\x65\154" => isset($item_soal->jawaban["\x6d\157\144\145\154"]) ? $item_soal->jawaban["\155\x6f\x64\145\x6c"] : "\x32", "\164\171\160\x65" => $item_soal->jawaban["\x74\x79\160\145"]];
        goto M0VgY;
        wlpD1:
        if ($item_soal->jenis_soal == "\x32") {
            goto U6RwO;
        }
        goto UX3eC;
        UWgDv:
        UifAq:
        goto y5j50;
        G_XQY:
        $data["\163\157\x61\154\x5f\x74\157\164\141\x6c"] = count($soals);
        goto kdVjk;
        M3Be6:
        $ind_soal = array_search($id_soal_siswa, array_column($soals, "\151\x64\137\x73\x6f\141\x6c\x5f\163\151\x73\x77\x61"));
        goto QoG9h;
        BDKwJ:
        $data["\163\x6f\141\154\x5f\x6a\x61\x77\x61\x62\x61\156\137\163\x69\x73\167\x61"] = $item_soal->jawaban_siswa;
        goto eXlIV;
        KFhaW:
        if (!isset($jwbs["\152\141\x77\x61\x62\x61\x6e"])) {
            goto XSTKa;
        }
        goto CclMS;
        ljdXw:
        $nomor = $this->input->post("\x6e\157\155\x6f\162");
        goto nqFyw;
        u218N:
        $data["\164\x69\155\145\x72"] = $timer;
        goto Zekp2;
        DPUqT:
        $jwbSiswa = $item_soal->jawaban_siswa != null ? strtoupper($item_soal->jawaban_siswa) : '';
        goto L3tou;
        Lhy4O:
        $durasi = $this->checkTimer($id_siswa, $id_jadwal);
        goto XGn9f;
        L0jao:
        $id_jadwal = $this->input->post("\152\141\144\167\141\154");
        goto i0qCD;
        uZx2n:
        Irs_l:
        goto EGszC;
        sH_7L:
        $jwbs = unserialize($item_soal->jawaban);
        goto KFhaW;
        NH8tI:
        rGn9i:
        goto unWFz;
        unWFz:
        usort($opsis, function ($a, $b) {
            return $a["\166\141\154\165\x65"] <=> $b["\166\x61\154\x75\x65"];
        });
        goto TMM6r;
        u5yjL:
        $item_soal->jawaban_siswa = unserialize($item_soal->jawaban_siswa);
        goto WFMZB;
        HIL97:
        U6RwO:
        goto jS2fZ;
        leciF:
        $theader = [];
        goto ylC6e;
        U0jTd:
        $arrJawaban = [];
        goto LgWkX;
        c6RP1:
        $opsis = [];
        goto WhK6R;
        tzg_z:
        XR6hT:
        goto DPUqT;
        eXlIV:
        $data["\x6d\141\170\137\152\141\167\x61\142\141\156"] = $max_jawaban;
        goto U0jTd;
        WhK6R:
        foreach ($item_soal->opsi_a as $key => $opsi) {
            goto CqkvE;
            wsTTn:
            Ko_vb:
            goto yPHyM;
            CqkvE:
            $item = ["\157\x70\x73\151" => $opsi, "\x76\x61\x6c\x75\x65" => $key, "\143\x68\x65\143\153\145\x64" => in_array(strtoupper($key), $jwbSiswa) ? "\143\150\x65\x63\153\x65\x64\x3d\42\x74\x72\165\x65\x22" : ''];
            goto g_IGU;
            g_IGU:
            array_push($opsis, $item);
            goto wsTTn;
            yPHyM:
        }
        goto NH8tI;
        U0JeK:
        $siswa = $this->cbt->getDataSiswaById($tp->id_tp, $smt->id_smt, $id_siswa);
        goto n3aN5;
        je_jv:
        $data["\x73\157\141\154\x5f\x73\157\141\154"] = $item_soal->soal;
        goto k6T9O;
        t_3sf:
        $ada_jawab = $item_soal->jawaban_siswa != null;
        goto s2ZMU;
        EGszC:
        $modal .= "\74\57\x64\x69\x76\x3e";
        goto Ukf39;
        kAqlb:
        $max_jawaban = [];
        goto sQeDx;
        Ukf39:
        $data["\163\157\x61\x6c\137\x6d\x6f\144\x61\x6c"] = $modal;
        goto G_XQY;
        YKtpi:
        goto V9iTv;
        goto HIL97;
        vSeGw:
        usort($opsis, function ($a, $b) {
            return $a["\x76\141\x6c\101\x6c\151\141\x73"] <=> $b["\x76\x61\154\101\x6c\x69\141\x73"];
        });
        goto YKtpi;
        YLu23:
        goto V9iTv;
        goto tzg_z;
        i0qCD:
        $id_bank = $this->input->post("\142\x61\x6e\x6b");
        goto ljdXw;
        k6T9O:
        $data["\x73\157\141\x6c\137\157\x70\x73\x69"] = json_decode(json_encode($opsis));
        goto BDKwJ;
        ylC6e:
        $tbody = [];
        goto Ls662;
        B4ajS:
        $this->output_json($data);
        goto kQSV5;
        XGn9f:
        $tp = $this->dashboard->getTahunActive();
        goto I8Pse;
        WUwjt:
        $id_soal_siswa = $siswa->id_siswa . "\60" . $id_jadwal . $id_bank . $nomor;
        goto M3Be6;
        I8Pse:
        $smt = $this->dashboard->getSemesterActive();
        goto U0JeK;
        kdVjk:
        $data["\x73\x6f\x61\x6c\x5f\164\145\x72\x6a\x61\x77\x61\142"] = count($arrJawaban);
        goto XXy3G;
        yzmjJ:
        cJhOG:
        goto aZ2sP;
        YrH2b:
        $data["\163\157\141\x6c\x5f\156\157\x6d\157\x72\137\x61\163\154\151"] = $item_soal->nomor_soal;
        goto IOd2L;
        CclMS:
        foreach ($jwbs["\x6a\141\x77\x61\x62\141\156"] as $jwb) {
            goto GJwHU;
            W4gLq:
            if (!($i < count($jwb))) {
                goto V5EAm;
            }
            goto nTcLC;
            qcSi1:
            $i++;
            goto HUTBg;
            SmQle:
            V5EAm:
            goto tbzlv;
            BoX0x:
            JjrIZ:
            goto qcSi1;
            JaMIP:
            nBdiO:
            goto BoX0x;
            GJwHU:
            $max_jawaban[$jwb[0]] = 0;
            goto Yui5y;
            dllEs:
            $max_jawaban[$jwb[0]] += 1;
            goto JaMIP;
            nTcLC:
            if (!($jwb[$i] == "\61")) {
                goto nBdiO;
            }
            goto dllEs;
            Yui5y:
            $i = 1;
            goto oTLkk;
            tbzlv:
            YNkwN:
            goto R_acO;
            oTLkk:
            ewhjG:
            goto W4gLq;
            HUTBg:
            goto ewhjG;
            goto SmQle;
            R_acO:
        }
        goto UWgDv;
        n3aN5:
        $soals = $this->cbt->getALLSoalSiswa($id_bank, $siswa->id_siswa);
        goto WUwjt;
        ltrOF:
        oMoaV:
        goto Tz17q;
        Mt6KF:
        $data["\144\165\162\x61\163\x69"] = $durasi;
        goto u218N;
        s2ZMU:
        if (!$ada_jawab) {
            goto cJhOG;
        }
        goto fpZ1C;
        w823c:
        foreach ($soals as $key => $soal) {
            goto lKgoi;
            VNjI3:
            if (!($soal->jawaban_siswa != null && $soal->jawaban_siswa != '')) {
                goto Dcxux;
            }
            goto dzt_X;
            dzt_X:
            $txt_badge = $soal->jenis_soal == "\61" ? $soal->jawaban_alias : "\x26\143\x68\145\x63\x6b\x3b";
            goto SxxI2;
            eZmWY:
            $modal .= "\74\57\x64\x69\x76\x3e\74\57\144\151\166\x3e";
            goto DAjY_;
            SxxI2:
            array_push($arrJawaban, $soal->jawaban_alias);
            goto zEn4O;
            zEn4O:
            $modal .= "\74\x64\151\166\40\151\144\x3d\x22\142\x61\x64\147\x65" . $soal->no_soal_alias . "\42\x20\x63\x6c\141\x73\x73\x3d\42\142\x61\x64\147\x65\40\x62\141\144\x67\145\x2d\160\x69\x6c\x6c\x20\x62\141\x64\147\145\55\163\x75\143\143\x65\x73\x73\40\142\x6f\162\144\145\162\x20\142\157\162\144\145\162\55\144\x61\162\153\x22" . "\x20\163\x74\x79\154\145\75\x22\146\x6f\x6e\164\x2d\x73\x69\172\145\72\61\x32\x70\x74\x3b\40\x77\x69\144\164\x68\72\x20\63\x30\x70\170\x3b\x20\150\x65\151\147\x68\x74\x3a\x20\63\x30\160\x78\73\x20\155\141\x72\147\151\156\x2d\164\x6f\160\x3a\x20\55\x36\60\160\170\73\x20\x6d\141\162\x67\151\x6e\55\154\145\146\x74\x3a\40\63\60\x70\170\x3b\x22\76" . $txt_badge . "\x3c\x2f\144\x69\x76\76";
            goto HJo3n;
            DAjY_:
            A8V2x:
            goto meuiD;
            HJo3n:
            Dcxux:
            goto eZmWY;
            AmiWf:
            $selected = $nomor == $soal->no_soal_alias ? "\141\x63\x74\x69\166\145" : '';
            goto W3yWP;
            W3yWP:
            $modal .= "\x3c\x64\151\x76\x20\143\x6c\x61\163\163\x3d\42\155\x62\x2d\x34\x22\x3e" . "\x3c\144\151\x76\x20\151\144\x3d\x22\x62\157\170" . $soal->no_soal_alias . "\x22\40\143\154\141\163\x73\x3d\42\144\55\146\x6c\x65\x78\40\146\154\x65\170\55\x63\x6f\154\165\x6d\x6e\x22\x20\163\x74\171\x6c\x65\x3d\42\167\x69\x64\x74\150\x3a\40\x37\60\x70\170\x3b\x20\x68\x65\151\x67\x68\x74\x3a\x20\x36\60\160\x78\73\42\76" . "\x3c\142\165\x74\x74\x6f\156\x20\x69\x64\x3d\42\142\164\156" . $soal->no_soal_alias . "\x22\40\x63\x6c\141\x73\163\x3d\x22\x62\164\x6e\40\x62\x74\156\55" . $color . "\40\x62\x6f\162\x64\x65\162\x20\142\157\x72\x64\145\x72\x2d\144\x61\x72\x6b\40" . $selected . "\x22\x20" . "\x64\141\164\141\x2d\x70\157\163\x3d\42" . $key . "\x22\40\144\141\x74\141\x2d\156\157\x6d\157\x72\x73\x6f\141\154\75\42" . $soal->no_soal_alias . "\x22\x20" . "\144\x61\164\x61\x2d\x69\x64\163\157\141\x6c\75\x22" . $soal->id_soal . "\42\x20\x64\141\x74\141\55\152\x65\x6e\151\163\x3d\x22" . $soal->jenis_soal . "\x22\x20" . "\x6f\156\143\x6c\151\143\x6b\75\42\154\157\x61\x64\123\157\141\154\x28\164\x68\x69\x73\51\42\40" . "\x73\164\171\x6c\x65\75\x22\x77\x69\144\x74\x68\72\x20\65\60\160\x78\73\40\150\145\151\147\x68\x74\x3a\x20\65\x30\x70\170\x3b\42\76" . "\x3c\163\160\141\156\40\163\164\x79\154\145\75\x22\146\x6f\x6e\164\55\163\x69\172\x65\x3a\x20\61\x34\x70\x74\42\x3e\74\x62\76" . $soal->no_soal_alias . "\x3c\x2f\142\x3e\74\x2f\163\160\x61\x6e\x3e" . "\74\57\x62\x75\164\x74\x6f\156\76";
            goto VNjI3;
            lKgoi:
            $color = $soal->jawaban_siswa == null && $soal->jawaban_siswa == '' ? "\157\x75\x74\154\151\x6e\x65\55\163\x65\x63\157\x6e\144\141\x72\x79" : "\160\162\151\x6d\141\162\171";
            goto AmiWf;
            meuiD:
        }
        goto uZx2n;
        fpZ1C:
        $item_soal->jawaban_siswa = unserialize($item_soal->jawaban_siswa);
        goto yzmjJ;
        KIkGz:
        $data["\163\157\141\154\x5f\x73\151\163\x77\x61\x5f\x69\x64"] = $item_soal->id_soal_siswa;
        goto Ds4N9;
        WCez4:
        byHqU:
        goto sH_7L;
        M0VgY:
        V9iTv:
        goto Mt6KF;
        UX3eC:
        if ($item_soal->jenis_soal == "\63") {
            goto byHqU;
        }
        goto b4j3t;
        PMy9j:
        BuLL3:
        goto ltrOF;
        IOd2L:
        $data["\163\x6f\141\154\137\x6a\145\156\x69\163"] = $item_soal->jenis_soal;
        goto je_jv;
        Ds4N9:
        $data["\163\x6f\x61\154\x5f\156\157\x6d\x6f\x72"] = $item_soal->no_soal_alias;
        goto YrH2b;
        mv7wc:
        foreach ($jawaban_siswa->jawaban as $key => $jawaban) {
            goto mXgzj;
            SvLjK:
            bzYTg:
            goto NRBfu;
            vY9jl:
            goto QIahn;
            goto v3nD4;
            Xetk_:
            zpvhV:
            goto vY9jl;
            F0x97:
            X_Gvp:
            goto dHDV8;
            v3nD4:
            RcOIU:
            goto q7Z7E;
            rsWGq:
            Sl0j5:
            goto RkwN0;
            RkwN0:
            array_push($tbody, $jawaban);
            goto Xetk_;
            mXgzj:
            if ($key === 0) {
                goto RcOIU;
            }
            goto LhRn1;
            EcqOT:
            QIahn:
            goto F0x97;
            dOzhz:
            foreach ($jawaban as $index => $nbaris) {
                goto CJLA1;
                oqVhX:
                array_push($tbody[$key], $nbaris);
                goto Y1lso;
                BFaxw:
                array_push($tbody[$key], '');
                goto BHuYf;
                BHuYf:
                goto OI7eq;
                goto EwTBl;
                oCDF7:
                kdVmV:
                goto AVXut;
                Y1lso:
                OI7eq:
                goto oCDF7;
                CJLA1:
                if ($index === 0) {
                    goto BoqIG;
                }
                goto BFaxw;
                EwTBl:
                BoqIG:
                goto oqVhX;
                AVXut:
            }
            goto SvLjK;
            q7Z7E:
            $theader = $jawaban;
            goto EcqOT;
            LhRn1:
            if ($ada_jawab) {
                goto Sl0j5;
            }
            goto y_M_Z;
            NRBfu:
            goto zpvhV;
            goto rsWGq;
            y_M_Z:
            $tbody[$key] = [];
            goto dOzhz;
            dHDV8:
        }
        goto PMy9j;
        b4j3t:
        $opsis = [];
        goto YLu23;
        Zekp2:
        $data["\163\157\x61\x6c\x5f\x69\144"] = $item_soal->id_soal;
        goto KIkGz;
        TMM6r:
        goto V9iTv;
        goto WCez4;
        WFMZB:
        $jwbSiswa = $item_soal->jawaban_siswa != null ? $item_soal->jawaban_siswa : [];
        goto c6RP1;
        sQeDx:
        if ($item_soal->jenis_soal == "\x31") {
            goto XR6hT;
        }
        goto wlpD1;
        aZ2sP:
        $jawaban_siswa = $ada_jawab ? $item_soal->jawaban_siswa : json_decode(json_encode($item_soal->jawaban));
        goto leciF;
        Ls662:
        if (!isset($jawaban_siswa->jawaban)) {
            goto oMoaV;
        }
        goto mv7wc;
        L3tou:
        $opsis = [["\x76\x61\154\x41\x6c\x69\x61\x73" => $item_soal->opsi_alias_a, "\x6f\160\x73\x69" => $item_soal->opsi_a, "\x76\141\154\165\x65" => "\x41", "\x63\x68\145\143\153\x65\144" => "\101" === $jwbSiswa ? "\143\150\x65\143\153\145\144" : ''], ["\166\141\154\x41\154\151\x61\x73" => $item_soal->opsi_alias_b, "\157\x70\x73\x69" => $item_soal->opsi_b, "\166\x61\154\x75\x65" => "\102", "\143\150\145\x63\x6b\x65\x64" => "\102" === $jwbSiswa ? "\143\x68\x65\x63\x6b\x65\144" : ''], ["\x76\x61\154\101\x6c\x69\141\x73" => $item_soal->opsi_alias_c, "\157\160\x73\x69" => $item_soal->opsi_c, "\166\x61\x6c\x75\145" => "\103", "\143\150\145\143\153\x65\x64" => "\x43" === $jwbSiswa ? "\143\x68\x65\x63\153\145\x64" : ''], ["\x76\x61\x6c\101\x6c\151\141\163" => $item_soal->opsi_alias_d, "\x6f\160\163\x69" => $item_soal->opsi_d, "\166\x61\x6c\x75\145" => "\104", "\143\150\145\143\x6b\145\144" => "\x44" === $jwbSiswa ? "\x63\x68\x65\143\153\145\144" : ''], ["\x76\141\154\x41\154\x69\141\x73" => $item_soal->opsi_alias_e, "\157\160\x73\151" => $item_soal->opsi_e, "\166\141\x6c\165\145" => "\105", "\143\150\x65\x63\153\x65\x64" => "\105" === $jwbSiswa ? "\x63\x68\145\x63\153\x65\144" : '']];
        goto vSeGw;
        IK44L:
        $item_soal->jawaban = unserialize($item_soal->jawaban);
        goto t_3sf;
        LgWkX:
        $modal = "\x3c\144\x69\x76\40\x63\x6c\141\163\163\75\42\144\55\x66\154\145\170\40\x66\154\145\x78\55\167\162\x61\160\x20\x6a\x75\x73\x74\x69\146\x79\x2d\x63\157\156\x74\145\x6e\164\55\x63\x65\x6e\164\145\x72\x20\x67\x72\151\x64\55\x6e\x6f\155\157\x72\x2d\160\147\x22\x3e";
        goto w823c;
        kQSV5:
    }
    public function saveSoalSiswa()
    {
        goto GX477;
        z8Eau:
        $id_siswa = $shuffle[0]->id_siswa;
        goto biJh3;
        A15f6:
        foreach ($shuffle as $s) {
            goto dbJTI;
            X5uSG:
            if ($jml > 0) {
                goto bbI8b;
            }
            goto l7owY;
            fRkt2:
            bbI8b:
            goto QvvLa;
            l7owY:
            $insert = ["\x69\144\137\x73\157\x61\154\137\x73\x69\x73\167\x61" => $id_siswa . "\60" . $id_jadwal . $id_bank . $jenis . $nomor, "\x69\144\x5f\x62\x61\x6e\x6b" => $id_bank, "\x69\144\x5f\152\x61\144\167\x61\x6c" => $id_jadwal, "\151\x64\x5f\163\157\x61\x6c" => $id_soal, "\x69\144\x5f\x73\151\163\x77\141" => $id_siswa, "\x6a\145\156\151\163\x5f\x73\x6f\x61\x6c" => $jenis, "\x6e\x6f\x5f\x73\157\141\x6c\137\141\x6c\151\x61\x73" => $s->no_soal_alias, "\157\160\x73\x69\137\x61\154\151\x61\163\137\141" => isset($s->opsi_alias_a) ? $s->opsi_alias_a : null, "\157\160\x73\151\x5f\x61\154\x69\141\x73\x5f\142" => isset($s->opsi_alias_b) ? $s->opsi_alias_b : null, "\x6f\160\x73\x69\137\x61\154\x69\x61\163\x5f\x63" => isset($s->opsi_alias_c) ? $s->opsi_alias_c : null, "\157\160\163\x69\137\141\154\x69\141\163\137\x64" => isset($s->opsi_alias_d) ? $s->opsi_alias_d : null, "\x6f\x70\x73\151\x5f\x61\154\x69\141\x73\137\145" => isset($s->opsi_alias_e) ? $s->opsi_alias_e : null, "\x6a\x61\167\x61\x62\x61\x6e\137\x62\x65\x6e\141\x72" => $soal->jawaban, "\x73\157\x61\154\x5f\145\156\144" => $s->soal_end];
            goto i_FMk;
            Qz8Of:
            $soal = $this->cbt->getSoalByNomor($id_bank, $nomor, $jenis);
            goto jAUcr;
            Lok7N:
            $nomor = $s->nomor_soal;
            goto Qz8Of;
            yIS6B:
            WrESj:
            goto xKwQU;
            dbJTI:
            $id_siswa = $s->id_siswa;
            goto yjhsc;
            QvvLa:
            $insert = ["\x69\x64\x5f\x62\x61\x6e\x6b" => $id_bank, "\x69\144\x5f\152\x61\x64\167\141\154" => $id_jadwal, "\151\x64\137\x73\x6f\x61\x6c" => $id_soal, "\151\144\x5f\x73\151\x73\x77\141" => $id_siswa, "\152\145\x6e\x69\x73\x5f\x73\157\x61\x6c" => $jenis, "\x6e\157\137\x73\x6f\141\x6c\x5f\x61\154\x69\x61\x73" => $s->no_soal_alias, "\x6f\160\163\151\x5f\x61\x6c\151\x61\163\x5f\x61" => isset($s->opsi_alias_a) ? $s->opsi_alias_a : null, "\157\160\163\151\x5f\141\x6c\151\x61\x73\137\x62" => isset($s->opsi_alias_b) ? $s->opsi_alias_b : null, "\157\160\163\x69\137\x61\154\x69\x61\163\x5f\143" => isset($s->opsi_alias_c) ? $s->opsi_alias_c : null, "\157\160\x73\151\x5f\141\154\151\141\x73\x5f\x64" => isset($s->opsi_alias_d) ? $s->opsi_alias_d : null, "\157\160\163\151\137\141\154\151\141\x73\137\145" => isset($s->opsi_alias_e) ? $s->opsi_alias_e : null, "\x6a\141\x77\141\142\141\156\x5f\x62\x65\x6e\141\x72" => $soal->jawaban, "\x73\x6f\141\154\x5f\145\x6e\144" => $s->soal_end];
            goto dr3M9;
            nr8Oc:
            $jenis = $s->jenis;
            goto Lok7N;
            xNr0B:
            $id_bank = $s->id_bank;
            goto nr8Oc;
            xRC1c:
            $jml = $this->db->get("\x63\x62\164\137\163\x6f\141\154\x5f\163\151\x73\x77\141")->num_rows();
            goto X5uSG;
            jAUcr:
            $id_soal = $soal->id_soal;
            goto Zki1D;
            dr3M9:
            $this->master->update("\143\x62\x74\137\163\x6f\141\x6c\x5f\x73\151\163\x77\x61", $insert, "\151\x64\137\x73\x6f\141\x6c\x5f\163\151\163\x77\x61", $id_siswa . "\x30" . $id_jadwal . $id_bank . $jenis . $nomor);
            goto dL2qD;
            i_FMk:
            $this->master->create("\x63\142\164\x5f\x73\x6f\141\x6c\137\x73\x69\x73\x77\x61", $insert, false);
            goto Z161U;
            dL2qD:
            ocB35:
            goto yIS6B;
            yjhsc:
            $id_jadwal = $s->id_jadwal;
            goto xNr0B;
            Z161U:
            goto ocB35;
            goto fRkt2;
            Zki1D:
            $this->db->where("\151\144\x5f\163\157\141\154\137\x73\151\x73\167\x61", $id_siswa . "\x30" . $id_jadwal . $id_bank . $jenis . $nomor);
            goto xRC1c;
            xKwQU:
        }
        goto Kw40R;
        Kw40R:
        kYATb:
        goto z8Eau;
        biJh3:
        $id_bank = $shuffle[0]->id_bank;
        goto QXqUZ;
        QXqUZ:
        $data["\163\x6f\141\154\163"] = $this->cbt->getSoalSiswa($id_bank, $id_siswa);
        goto Q109v;
        GX477:
        $shuffle = json_decode($this->input->post("\x73\x68\x75\146\146\154\145", false));
        goto A15f6;
        Q109v:
        $this->output_json($data);
        goto d_KOI;
        d_KOI:
    }
    public function saveLogUjian($id_siswa, $id_jadwal)
    {
        $this->output_json($this->cbt->saveLog($id_siswa, $id_jadwal, 1, "\115\145\x6d\165\x6c\x61\151\40\x55\152\151\141\x6e"));
    }
    public function saveJawaban()
    {
        goto Yt24j;
        tER1_:
        $data["\163\x74\x61\164\x75\163"] = $update;
        goto NL0_n;
        K3UoQ:
        if (!($update && $timer != null)) {
            goto ByxPi;
        }
        goto QRCaO;
        Im1AK:
        $this->db->where("\x69\x64\137\144\x75\x72\141\163\151", $id_durasi);
        goto csATh;
        Ab3Rt:
        if ($jawab->jenis == 1) {
            goto ByKR1;
        }
        goto xKjuW;
        jcqHH:
        $update = true;
        goto Ynm0T;
        EMIM2:
        goto kEzYn;
        goto YNyW6;
        csATh:
        $this->db->update("\143\142\164\137\x64\x75\x72\x61\163\x69\137\163\x69\163\x77\141");
        goto HcuWx;
        zMvUR:
        $update = $this->db->update("\x63\142\164\x5f\163\157\x61\154\x5f\163\x69\163\167\141");
        goto KXQPF;
        YbpDk:
        $this->db->set("\152\141\x77\141\142\x61\156\137\x73\x69\x73\167\x61", serialize($jawab->jawaban_siswa));
        goto EMIM2;
        Nkv2K:
        if (!($jawab != null && isset($jawab->jenis))) {
            goto y9_Wb;
        }
        goto Ab3Rt;
        lvoTZ:
        $this->db->set("\152\x61\167\x61\x62\141\x6e\137\141\x6c\x69\141\163", '');
        goto krux2;
        ftXRe:
        $timer = $this->input->post("\x77\141\x6b\x74\165", true);
        goto Fsn5j;
        oT6qI:
        $arrJawaban = [];
        goto QKbMB;
        Yt24j:
        $id_bank = $this->input->post("\x62\x61\x6e\153", true);
        goto ftXRe;
        HcuWx:
        rn_Kb:
        goto jcqHH;
        N8z2M:
        foreach ($terjawab as $jawab) {
            goto ToMUZ;
            rbB1k:
            mrbID:
            goto RAswV;
            KkjpH:
            xfZwv:
            goto rbB1k;
            ToMUZ:
            if (!($jawab->jawaban_siswa != null && $jawab->jawaban_siswa != '')) {
                goto xfZwv;
            }
            goto at0mP;
            at0mP:
            array_push($arrJawaban, $jawab);
            goto KkjpH;
            RAswV:
        }
        goto Vl_XD;
        XmVxr:
        $this->db->set("\152\x61\x77\141\x62\x61\156\x5f\141\154\151\x61\163", '');
        goto qb15p;
        dLLdQ:
        ByKR1:
        goto YgAzk;
        FuNei:
        goto kEzYn;
        goto N6Feo;
        UCdXe:
        $jawab_essai = $this->input->post("\152\141\x77\141\x62\x61\156", false);
        goto lvoTZ;
        vZN6r:
        $id_durasi = $id_siswa . "\x30" . $id_jadwal;
        goto GmxmN;
        c2Vsn:
        $elapsed = $this->input->post("\145\154\x61\160\x73\x65\x64", true);
        goto vZN6r;
        SEJTE:
        $this->db->set("\154\141\x6d\x61\137\x75\x6a\x69\141\156", $elapsed);
        goto Im1AK;
        QRCaO:
        $this->selesaiUjian();
        goto KhY9z;
        YgAzk:
        $this->db->set("\x6a\141\x77\141\142\x61\x6e\x5f\141\154\x69\141\163", $jawab->jawaban_alias);
        goto NPb67;
        id0u8:
        $this->db->where("\x69\144\x5f\x73\x6f\x61\x6c\137\x73\x69\x73\167\x61", $jawab->id_soal_siswa);
        goto zMvUR;
        krux2:
        $this->db->set("\x6a\x61\167\x61\x62\x61\156\x5f\x73\151\163\x77\x61", $jawab_essai);
        goto xtOsP;
        SxMn0:
        $this->db->set("\152\141\167\x61\142\141\x6e\x5f\141\x6c\x69\141\163", '');
        goto YbpDk;
        xtOsP:
        goto kEzYn;
        goto dLLdQ;
        NL0_n:
        if (!($update && $id_bank != null)) {
            goto aN9Hf;
        }
        goto oT6qI;
        Ynm0T:
        $jawab = json_decode($this->input->post("\x64\141\164\x61", false));
        goto Nkv2K;
        GmxmN:
        if (!($elapsed != "\x30")) {
            goto rn_Kb;
        }
        goto SEJTE;
        vJxDU:
        $id_jadwal = $this->input->post("\x6a\141\144\167\x61\x6c", true);
        goto c2Vsn;
        betHQ:
        if ($jawab->jenis == 3) {
            goto NICXu;
        }
        goto UCdXe;
        YNyW6:
        NICXu:
        goto XmVxr;
        Vl_XD:
        p38pa:
        goto kgavd;
        kgavd:
        $data["\x73\x6f\x61\154\137\x74\145\162\x6a\x61\x77\x61\142"] = count($arrJawaban);
        goto SmFN2;
        nHuuW:
        kEzYn:
        goto id0u8;
        JUd5U:
        $this->output_json($data);
        goto i7wOW;
        KXQPF:
        y9_Wb:
        goto tER1_;
        N6Feo:
        vnuae:
        goto SxMn0;
        Fsn5j:
        $id_siswa = $this->input->post("\163\x69\163\x77\141", true);
        goto vJxDU;
        NPb67:
        $this->db->set("\152\x61\x77\141\142\x61\x6e\137\163\x69\163\x77\x61", $jawab->jawaban_siswa);
        goto FuNei;
        xKjuW:
        if ($jawab->jenis == 2) {
            goto vnuae;
        }
        goto betHQ;
        KhY9z:
        ByxPi:
        goto JUd5U;
        qb15p:
        $this->db->set("\x6a\141\167\x61\142\141\x6e\x5f\163\151\x73\x77\x61", serialize($jawab->jawaban_siswa));
        goto nHuuW;
        SmFN2:
        aN9Hf:
        goto K3UoQ;
        QKbMB:
        $terjawab = $this->cbt->getJumlahJawaban($id_bank, $id_siswa);
        goto N8z2M;
        i7wOW:
    }
    public function selesaiUjian()
    {
        goto bPnay;
        REc7t:
        $id_jadwal = $this->input->post("\x6a\x61\x64\167\141\154");
        goto O48yd;
        bPnay:
        $id_siswa = $this->input->post("\x73\151\163\167\x61");
        goto REc7t;
        pyAWR:
        $update = $this->db->update("\x63\x62\164\137\144\x75\162\x61\x73\x69\137\163\151\x73\167\141");
        goto DnDue;
        kg1PR:
        $this->db->set("\x73\x65\154\x65\163\141\x69", date("\131\55\155\x2d\144\x20\x48\72\151\72\x73"));
        goto eZL3S;
        O48yd:
        $data["\163\x74\x61\x74\165\x73\137\x6e\x69\x6c\x61\x69"] = $this->olahNilai($id_siswa, $id_jadwal);
        goto kg1PR;
        bEt5y:
        $this->db->where("\151\144\137\x64\x75\162\x61\163\x69", $id_siswa . "\x30" . $id_jadwal);
        goto pyAWR;
        nqdf4:
        $data["\x73\164\141\164\x75\x73"] = $update;
        goto X0pRu;
        DnDue:
        $this->cbt->saveLog($id_siswa, $id_jadwal, 2, "\x4d\x65\156\171\145\154\x65\163\x61\151\x6b\141\156\x20\x55\x6a\151\x61\x6e");
        goto nqdf4;
        eZL3S:
        $this->db->set("\163\x74\x61\164\x75\163", 2);
        goto bEt5y;
        X0pRu:
        $this->output_json($data);
        goto XUUYs;
        XUUYs:
    }
    public function resetTimer()
    {
        goto TpqTD;
        xE4oS:
        $this->db->set("\x6c\141\155\x61\x5f\165\x6a\151\x61\156", "\x30\x30\x3a\x30\x30\x3a\60\60");
        goto BEGYP;
        KLvLQ:
        $this->db->set("\162\x65\x73\x65\164", $reset);
        goto jbKw1;
        T4p_w:
        $this->output_json($data);
        goto Ha2kr;
        Roj3Q:
        $update = $this->db->update("\x63\x62\x74\x5f\x64\x75\x72\141\163\x69\x5f\163\x69\163\x77\141");
        goto iceA1;
        jbKw1:
        $this->db->where("\151\144\137\x64\x75\x72\141\x73\151", $id_durasi);
        goto Roj3Q;
        vyVlW:
        if (!($reset == "\x31")) {
            goto OyKre;
        }
        goto xE4oS;
        BEGYP:
        OyKre:
        goto KLvLQ;
        E2uvH:
        $reset = $this->input->post("\x72\145\x73\x65\164", true);
        goto vyVlW;
        iceA1:
        $data["\163\x74\x61\164\x75\163"] = $update;
        goto T4p_w;
        TpqTD:
        $id_durasi = $this->input->post("\x69\144\x5f\144\x75\x72\x61\163\151", true);
        goto E2uvH;
        Ha2kr:
    }
    public function ulangiUjian($id_durasi, $id_bank)
    {
        goto kJfx_;
        rgjG1:
        goto MtDPR;
        goto GjUxP;
        Ojxsf:
        if (!($i < 2)) {
            goto OycLj;
        }
        goto kOEh6;
        kOEh6:
        foreach ($soals as $soal) {
            goto KzeE3;
            pi8Tz:
            R3cXp:
            goto nq9lV;
            KzeE3:
            $this->db->where("\151\x64\137\163\x6f\x61\154\x5f\163\151\x73\167\141", $id_durasi . $id_bank . ($i + 1) . $soal->nomor_soal);
            goto eR7SR;
            eR7SR:
            $this->db->delete("\143\142\164\x5f\163\157\141\154\137\163\151\x73\x77\141");
            goto pi8Tz;
            nq9lV:
        }
        goto em9Jb;
        kJfx_:
        $soals = $this->cbt->getAllSoalByBank($id_bank);
        goto JrTHu;
        WXfUf:
        MtDPR:
        goto Ojxsf;
        p9F8o:
        Eaoxh:
        goto BrAEj;
        em9Jb:
        YaEvg:
        goto PU_0f;
        GjUxP:
        OycLj:
        goto HQXBa;
        BrAEj:
        $i = 0;
        goto WXfUf;
        HQXBa:
        $data["\x73\164\x61\x74\x75\163"] = true;
        goto gMtwP;
        otns9:
        $i++;
        goto rgjG1;
        mDL1g:
        goto H0l2A;
        goto p9F8o;
        gMtwP:
        H0l2A:
        goto kUSSF;
        JrTHu:
        if ($this->master->delete("\x63\142\164\137\144\x75\162\141\163\x69\137\x73\151\x73\x77\141", $id_durasi, "\151\x64\137\144\x75\162\141\x73\151")) {
            goto Eaoxh;
        }
        goto MwGGL;
        kUSSF:
        $this->output_json($data);
        goto mbVnc;
        MwGGL:
        $data["\163\x74\x61\x74\x75\163"] = false;
        goto mDL1g;
        PU_0f:
        gOdVB:
        goto otns9;
        mbVnc:
    }
    public function applyAction()
    {
        goto dUUIp;
        CeRjR:
        IslEs:
        goto oRJMA;
        jSMve:
        $this->db->set("\162\x65\163\x65\x74", 3);
        goto AXMhT;
        GCVJk:
        $data["\x75\160\x64\x61\164\145\x5f\x75\154\141\x6e\x67\151"] = $this->db->delete("\x63\x62\x74\137\x73\157\141\154\x5f\163\x69\x73\x77\141");
        goto owD1o;
        icuVu:
        $data["\165\154\141\156\x67\151"] = true;
        goto TST3s;
        IFP1H:
        $this->db->update("\x6c\x6f\147\137\x75\152\151\x61\156");
        goto FwtbY;
        dUUIp:
        $json = json_decode($this->input->post("\141\x6b\x73\x69", true));
        goto AQ0xc;
        oRJMA:
        $this->db->trans_complete();
        goto VsPeI;
        bckQj:
        $this->db->where("\x69\x64\x5f\152\141\x64\x77\141\x6c", $id_jadwal);
        goto b6Ae1;
        s8zfM:
        $this->db->where("\151\x64\137\152\x61\144\x77\x61\154", $id_jadwal);
        goto Si18e;
        Si18e:
        $this->db->where_in("\151\x64\x5f\x73\x69\x73\x77\141", $json->ulang);
        goto GCVJk;
        WvFaJ:
        if (!$this->db->delete("\x6c\x6f\147\137\165\x6a\151\141\156")) {
            goto HhazL;
        }
        goto s8zfM;
        H67aE:
        if (!(count($json->ulang) > 0)) {
            goto IslEs;
        }
        goto icuVu;
        wU0aD:
        $this->db->trans_start();
        goto TOd6A;
        hTied:
        foreach ($json->log as $ids) {
            goto GxbId;
            igmyi:
            F3blN:
            goto PyIEG;
            m1M5c:
            $this->cbt->saveLog($ids, $id_jadwal, 2, "\x4d\145\x6e\171\x65\154\145\163\x61\x69\x6b\141\x6e\x20\x55\x6a\x69\141\x6e");
            goto igmyi;
            GxbId:
            $data["\x73\x74\141\164\165\163\x5f\x6e\x69\154\x61\x69"] = $this->olahNilai($ids, $id_jadwal);
            goto m1M5c;
            PyIEG:
        }
        goto uJZ72;
        uJZ72:
        LaISD:
        goto us8Eo;
        KQDWB:
        $data["\x72\x65\163\x65\164"] = true;
        goto lJb6X;
        AQ0xc:
        $id_jadwal = $this->input->post("\x6a\141\144\167\141\154", true);
        goto wU0aD;
        owD1o:
        HhazL:
        goto pzVtn;
        b6Ae1:
        $this->db->where_in("\151\x64\x5f\x73\x69\163\x77\141", $json->ulang);
        goto WvFaJ;
        k7X6x:
        $data["\165\x70\144\141\164\145\x5f\163\x65\154\145\x73\x61\x69"] = true;
        goto bPHsY;
        AXMhT:
        $this->db->where_in("\x69\144\137\x64\165\162\x61\163\151", $json->force);
        goto NfuYm;
        D80Vi:
        $this->db->set("\163\x74\x61\x74\x75\163", 2);
        goto jSMve;
        fbj1L:
        $data["\x75\x70\x64\x61\x74\145\137\x75\x6c\x61\x6e\147\x69"] = true;
        goto H67aE;
        TST3s:
        $this->db->where_in("\x69\x64\x5f\144\x75\x72\141\163\151", $json->hapus);
        goto eM8SF;
        GnwGr:
        $data["\x73\x65\x6c\x65\x73\x61\151"] = true;
        goto hTied;
        pzVtn:
        lDnEO:
        goto CeRjR;
        us8Eo:
        $this->db->set("\x73\145\x6c\145\x73\x61\x69", date("\131\x2d\x6d\x2d\144\x20\110\x3a\x69\72\163"));
        goto D80Vi;
        TOd6A:
        $data["\165\160\144\141\164\145\137\x72\145\x73\x65\x74"] = true;
        goto tDxzV;
        tDxzV:
        if (!(count($json->reset) > 0)) {
            goto WsZEs;
        }
        goto KQDWB;
        iDozm:
        $this->db->where_in("\x69\x64\x5f\x6c\157\x67", $json->reset);
        goto IFP1H;
        kHSN5:
        zWz7d:
        goto fbj1L;
        FwtbY:
        WsZEs:
        goto k7X6x;
        eM8SF:
        if (!$this->db->delete("\143\142\164\x5f\x64\x75\162\141\163\x69\x5f\x73\151\x73\x77\141")) {
            goto lDnEO;
        }
        goto bckQj;
        bPHsY:
        if (!(count($json->force) > 0)) {
            goto zWz7d;
        }
        goto GnwGr;
        lJb6X:
        $this->db->set("\x72\145\163\x65\x74", 1);
        goto iDozm;
        VsPeI:
        $this->output_json($data);
        goto i2NFb;
        NfuYm:
        $data["\165\x70\x64\x61\x74\x65\x5f\x73\x65\154\145\x73\x61\151"] = $this->db->update("\x63\142\164\x5f\x64\165\x72\x61\163\151\137\x73\x69\163\167\141");
        goto kHSN5;
        i2NFb:
    }
    public function olahNilai($id_siswa, $id_jadwal)
    {
        goto lSI_a;
        jl7ms:
        if (!($info->tampil_jodohkan > 0)) {
            goto S9xzu;
        }
        goto P1Ppo;
        vu9ON:
        Uw55f:
        goto CO4sA;
        Kt3j6:
        $skor_koreksi_jod = 0.0;
        goto SvW4q;
        wwVcb:
        SgEMK:
        goto VsigA;
        CkSH4:
        $benar_es = 0;
        goto qh93D;
        VsigA:
        cjYfp:
        goto yvYQC;
        c3jNB:
        $bagi_isian = $info->tampil_isian / 100;
        goto n7i29;
        UYYNB:
        $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh;
        goto dTdiH;
        rR2NT:
        $jawaban_pg = isset($jawabans_siswa["\x31"]) ? $jawabans_siswa["\x31"] : [];
        goto Ej1hQ;
        FbWJ_:
        $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa["\x34"] : [];
        goto xOq4y;
        Ej1hQ:
        $benar_pg = 0;
        goto UjEu4;
        tUFp0:
        $skor_koreksi_is = 0.0;
        goto VQu6S;
        Yh85R:
        $jawabans = $this->cbt->getJawabanByBank($info->id_bank, $id_siswa);
        goto JgvP1;
        yLqEa:
        t_fJk:
        goto GQvnO;
        lSI_a:
        $info = $this->cbt->getJadwalById($id_jadwal);
        goto Yh85R;
        uBPdg:
        if (!(count($jawaban_es) > 0)) {
            goto yoKKX;
        }
        goto z8OIn;
        pPLXk:
        $ada_jawaban_isian = isset($jawabans_siswa["\64"]);
        goto Srqe0;
        Ea0hi:
        OFRhu:
        goto vu9ON;
        kMDEQ:
        foreach ($jawaban_is as $num => $jawab_is) {
            goto Y8UwW;
            Y8UwW:
            $skor_koreksi_is += $jawab_is->nilai_koreksi;
            goto EKv9l;
            Nmxxf:
            lnCtb:
            goto g43A0;
            EKv9l:
            $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban_benar);
            goto ra8iU;
            S4PP1:
            $benar_is++;
            goto LGaP9;
            O3_iN:
            $otomatis_is = $jawab_is->nilai_otomatis;
            goto Nmxxf;
            LGaP9:
            MozvO:
            goto O3_iN;
            ra8iU:
            if (!$benar) {
                goto MozvO;
            }
            goto S4PP1;
            g43A0:
        }
        goto DkkqZ;
        rfu6n:
        if (!($info->tampil_pg > 0)) {
            goto MwM08;
        }
        goto nYZ06;
        SvW4q:
        $otomatis_jod = 0;
        goto jl7ms;
        ocy0n:
        if (!($info->tampil_kompleks > 0)) {
            goto cjYfp;
        }
        goto Rsjh1;
        Yw41j:
        $jawaban_pg2 = isset($jawabans_siswa["\x32"]) ? $jawabans_siswa["\62"] : [];
        goto cFBuz;
        Rsjh1:
        if (!(count($jawaban_pg2) > 0)) {
            goto SgEMK;
        }
        goto Fa30L;
        HFE3b:
        foreach ($jawaban_pg as $jwb_pg) {
            goto UBIxu;
            thvzK:
            j91QD:
            goto tL4Zi;
            clrwg:
            yz54o:
            goto m7Z0Y;
            UBIxu:
            if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) {
                goto nEVTE;
            }
            goto pvyyB;
            tL4Zi:
            nEVTE:
            goto clrwg;
            zEZbw:
            $benar_pg += 1;
            goto thvzK;
            IL92_:
            g0CUz:
            goto zEZbw;
            H7pUn:
            goto j91QD;
            goto IL92_;
            glJAd:
            $salah_pg += 1;
            goto H7pUn;
            pvyyB:
            if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban_benar)) {
                goto g0CUz;
            }
            goto glJAd;
            m7Z0Y:
        }
        goto Ea0hi;
        PaL81:
        $bobot_essai = $info->bobot_esai / 100;
        goto rR2NT;
        HA2ZV:
        $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian;
        goto X9h_U;
        h0CJe:
        $bobot_pg2 = $info->bobot_kompleks / 100;
        goto dqnNY;
        XtM3e:
        kX8XP:
        goto uRHHN;
        IZRsw:
        $otomatis_pg2 = 0;
        goto ocy0n;
        uRHHN:
        tst6u:
        goto HA2ZV;
        FeUSb:
        return $this->db->replace("\x63\x62\x74\x5f\156\151\x6c\141\x69", $insert);
        goto Dwtx7;
        cFBuz:
        $benar_pg2 = 0;
        goto Z7UtP;
        OAVxw:
        gZn7B:
        goto Jnpao;
        DkkqZ:
        hTP4V:
        goto XtM3e;
        qfaAn:
        $bagi_essai = $info->tampil_esai / 100;
        goto PaL81;
        AJ6J5:
        $otomatis_es = 0;
        goto W2NJ3;
        dqnNY:
        $bagi_jodoh = $info->tampil_jodohkan / 100;
        goto n6cZR;
        JgvP1:
        $jawabans_siswa = [];
        goto n7ueK;
        ueg7Y:
        c3K1P:
        goto pPLXk;
        Fa30L:
        foreach ($jawaban_pg2 as $num => $jawab_pg2) {
            goto WQuP8;
            p03GD:
            if (!(count($jawab_pg2->jawaban_benar) > 0)) {
                goto bYt75;
            }
            goto xaIuE;
            gYarD:
            l4sP_:
            goto p03GD;
            WQuP8:
            $otomatis_pg2 = $jawab_pg2->nilai_otomatis;
            goto yvj_U;
            yvj_U:
            $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi;
            goto CmdVG;
            xaIuE:
            $benar_pg2 += 1 / count($jawab_pg2->jawaban_benar) * count($arr_benar);
            goto eBxXk;
            eBxXk:
            bYt75:
            goto SL_XJ;
            SL_XJ:
            LVxj9:
            goto zu7I5;
            oGOO7:
            foreach ($jawab_pg2->jawaban_siswa as $js) {
                goto ZKUS4;
                SIldl:
                cwvy1:
                goto rT3ch;
                fpTb5:
                qwUv9:
                goto SIldl;
                vf8uF:
                array_push($arr_benar, true);
                goto fpTb5;
                ZKUS4:
                if (!in_array($js, $jawab_pg2->jawaban_benar)) {
                    goto qwUv9;
                }
                goto vf8uF;
                rT3ch:
            }
            goto gYarD;
            CmdVG:
            $arr_benar = [];
            goto oGOO7;
            zu7I5:
        }
        goto EOYMJ;
        qh93D:
        $skor_koreksi_es = 0.0;
        goto AJ6J5;
        cbNGA:
        $bobot_pg = $info->bobot_pg / 100;
        goto S6FRr;
        DRWk4:
        if (!($info->tampil_isian > 0)) {
            goto tst6u;
        }
        goto W8ddZ;
        CO4sA:
        MwM08:
        goto qTLqB;
        vBWiu:
        $skor_pg2 = $otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2;
        goto N1xEd;
        lsJJf:
        S9xzu:
        goto UYYNB;
        qTLqB:
        $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg;
        goto Yw41j;
        N1xEd:
        $jawaban_jodoh = isset($jawabans_siswa["\x33"]) ? $jawabans_siswa["\63"] : [];
        goto fj5z4;
        yvYQC:
        $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2;
        goto vBWiu;
        P1Ppo:
        if (!(count($jawaban_jodoh) > 0)) {
            goto ul0wU;
        }
        goto Zc4vd;
        W8ddZ:
        if (!(count($jawaban_is) > 0)) {
            goto kX8XP;
        }
        goto kMDEQ;
        sg_Ep:
        $total = $skor_pg + $skor_pg2 + $skor_jod + $skor_is + $skor_es;
        goto GnCD3;
        n7ueK:
        foreach ($jawabans as $jawaban_siswa) {
            goto E_VGt;
            Rd4fY:
            oiOA3:
            goto aZCXY;
            BnAkj:
            $jawabans_siswa[$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto Rd4fY;
            KNsMV:
            $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa));
            goto N108A;
            RUoUb:
            $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a);
            goto ltVTN;
            y4Icx:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto G_7kY;
            N108A:
            $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar));
            goto BdiMB;
            BdiMB:
            WFQSl:
            goto BnAkj;
            S3eVA:
            $jawaban_siswa->jawaban_benar = array_map("\163\164\162\164\157\x75\160\160\145\x72", $jawaban_siswa->jawaban_benar);
            goto oUrRn;
            n228f:
            gNQZO:
            goto QHdKR;
            QHdKR:
            if (!($jawaban_siswa->jenis_soal == "\63")) {
                goto WFQSl;
            }
            goto y4Icx;
            kUC5c:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto S3eVA;
            ltVTN:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto kUC5c;
            oUrRn:
            $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\163\164\162\154\145\156");
            goto n228f;
            G_7kY:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto KNsMV;
            E_VGt:
            if (!($jawaban_siswa->jenis_soal == "\62")) {
                goto gNQZO;
            }
            goto RUoUb;
            aZCXY:
        }
        goto ueg7Y;
        dTdiH:
        $skor_jod = $otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod;
        goto FbWJ_;
        Jnpao:
        $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai;
        goto A5at6;
        W2NJ3:
        if (!($info->tampil_esai > 0)) {
            goto gZn7B;
        }
        goto uBPdg;
        cZQUk:
        $bagi_pg = $info->tampil_pg / 100;
        goto cbNGA;
        VQu6S:
        $otomatis_is = 0;
        goto DRWk4;
        EOYMJ:
        M2gVv:
        goto wwVcb;
        S6FRr:
        $bagi_pg2 = $info->tampil_kompleks / 100;
        goto h0CJe;
        GnCD3:
        $insert = ["\x69\x64\x5f\156\151\x6c\141\x69" => $id_siswa . "\60" . $id_jadwal, "\151\144\x5f\163\151\x73\x77\x61" => $id_siswa, "\151\144\x5f\152\x61\144\x77\x61\x6c" => $id_jadwal, "\160\x67\137\142\145\156\x61\162" => $benar_pg, "\x70\147\x5f\x6e\x69\154\141\151" => round($skor_pg, 2), "\153\157\155\x70\154\x65\153\163\137\x6e\x69\154\x61\151" => round($skor_pg2, 2), "\x6a\x6f\x64\x6f\150\153\x61\156\137\156\151\x6c\141\x69" => round($skor_jod, 2), "\151\163\151\141\156\137\156\151\154\141\151" => round($skor_is, 2), "\145\163\x73\141\151\x5f\156\151\x6c\x61\x69" => round($skor_es, 2)];
        goto FeUSb;
        Z7UtP:
        $skor_koreksi_pg2 = 0.0;
        goto IZRsw;
        A5at6:
        $skor_es = $otomatis_es == 0 ? $s_es : $skor_koreksi_es;
        goto sg_Ep;
        n7i29:
        $bobot_isian = $info->bobot_isian / 100;
        goto qfaAn;
        z8OIn:
        foreach ($jawaban_es as $num => $jawab_es) {
            goto xrFc0;
            DnENq:
            $otomatis_es = $jawab_es->nilai_otomatis;
            goto JuYx2;
            rMT6r:
            $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban_benar);
            goto gM2yb;
            JuYx2:
            Z_5du:
            goto C1kVZ;
            dwIuZ:
            $benar_es++;
            goto PIXJ2;
            xrFc0:
            $skor_koreksi_es += $jawab_es->nilai_koreksi;
            goto rMT6r;
            PIXJ2:
            CaEk1:
            goto DnENq;
            gM2yb:
            if (!$benar) {
                goto CaEk1;
            }
            goto dwIuZ;
            C1kVZ:
        }
        goto yLqEa;
        UjEu4:
        $salah_pg = 0;
        goto rfu6n;
        X9h_U:
        $skor_is = $otomatis_is == 0 ? $s_is : $skor_koreksi_is;
        goto Z1yUT;
        nYZ06:
        if (!(count($jawaban_pg) > 0)) {
            goto Uw55f;
        }
        goto HFE3b;
        GQvnO:
        yoKKX:
        goto OAVxw;
        Zc4vd:
        foreach ($jawaban_jodoh as $num => $jawab_jod) {
            goto L3oH_;
            uYTPd:
            $headJawab = array_shift($arrJawab);
            goto D8lPq;
            oiE4i:
            Gf7Gt:
            goto Obf9f;
            qJmOD:
            foreach ($arrSoal as $kolSoal) {
                goto bXV87;
                AH2KY:
                foreach ($kolSoal as $pos => $kol) {
                    goto ANl0c;
                    kMn0J:
                    $jwb->subtitle[] = $headSoal[$pos];
                    goto q276g;
                    xud3N:
                    umY0K:
                    goto HkovD;
                    q276g:
                    $items++;
                    goto VaaE3;
                    VaaE3:
                    oOJ9G:
                    goto xud3N;
                    ANl0c:
                    if (!($kol == "\61")) {
                        goto oOJ9G;
                    }
                    goto kMn0J;
                    HkovD:
                }
                goto sTAoJ;
                SYbik:
                wdi3k:
                goto SZCuu;
                lpx5w:
                $jwb->title = array_shift($kolSoal);
                goto ZOntc;
                bXV87:
                $jwb = new stdClass();
                goto AH2KY;
                ZOntc:
                array_push($arrJwbSoal, $jwb);
                goto SYbik;
                sTAoJ:
                SBZoW:
                goto lpx5w;
                SZCuu:
            }
            goto oiE4i;
            rK_Lw:
            kaULM:
            goto uaxXm;
            dpNqq:
            $item_salah = 0;
            goto yPqA5;
            pHnRS:
            aEqgE:
            goto yaE_W;
            n5fDA:
            $arrJwbSoal = [];
            goto CPs49;
            D8lPq:
            $arrJwbJawab = [];
            goto KEb5J;
            Obf9f:
            $arrJawab = $jawab_jod->jawaban_siswa->jawaban;
            goto uYTPd;
            KEb5J:
            foreach ($arrJawab as $kolJawab) {
                goto hO8DB;
                n1HQ9:
                foreach ($kolJawab as $po => $kol) {
                    goto NktOy;
                    pvHgN:
                    Tb1YK:
                    goto iCUk7;
                    NktOy:
                    if (!($kol == "\x31")) {
                        goto PgV1K;
                    }
                    goto JcK6m;
                    Hmbul:
                    PgV1K:
                    goto pvHgN;
                    JcK6m:
                    $sub = $headJawab[$po];
                    goto BJBd8;
                    BJBd8:
                    $jwbs->subtitle[] = $sub;
                    goto Hmbul;
                    iCUk7:
                }
                goto CPqBu;
                hO8DB:
                $jwbs = new stdClass();
                goto n1HQ9;
                CPqBu:
                w8sUG:
                goto YbGfo;
                TAb_b:
                xDi3q:
                goto jX4sM;
                YbGfo:
                array_push($arrJwbJawab, $jwbs);
                goto TAb_b;
                jX4sM:
            }
            goto rK_Lw;
            yPqA5:
            foreach ($arrJwbJawab as $p => $ajjs) {
                goto bY0Q0;
                bhd7A:
                IK1PZ:
                goto ujY1z;
                bY0Q0:
                if (!isset($ajjs->subtitle)) {
                    goto J4Eh3;
                }
                goto q6Rxm;
                mi6zO:
                J4Eh3:
                goto bhd7A;
                q6Rxm:
                foreach ($ajjs->subtitle as $pp => $ajs) {
                    goto ai3GK;
                    IC3W8:
                    goto JUkyb;
                    goto o10T8;
                    ai3GK:
                    if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) {
                        goto HAVd2;
                    }
                    goto KI7tR;
                    KI7tR:
                    $item_salah++;
                    goto IC3W8;
                    GxeMH:
                    $item_benar++;
                    goto MDe5D;
                    p3o3D:
                    xSmRf:
                    goto vcJZJ;
                    o10T8:
                    HAVd2:
                    goto GxeMH;
                    MDe5D:
                    JUkyb:
                    goto p3o3D;
                    vcJZJ:
                }
                goto F9xRu;
                F9xRu:
                YEshF:
                goto mi6zO;
                ujY1z:
            }
            goto pHnRS;
            pSvqK:
            WobQD:
            goto ig_iq;
            uaxXm:
            $item_benar = 0;
            goto dpNqq;
            yy6IM:
            $otomatis_jod = $jawab_jod->nilai_otomatis;
            goto pSvqK;
            CPs49:
            $items = 0;
            goto qJmOD;
            yaE_W:
            $benar_jod += 1 / $items * $item_benar;
            goto yy6IM;
            wOsHF:
            $arrSoal = $jawab_jod->jawaban_benar->jawaban;
            goto q8wCa;
            L3oH_:
            $skor_koreksi_jod += $jawab_jod->nilai_koreksi;
            goto wOsHF;
            q8wCa:
            $headSoal = array_shift($arrSoal);
            goto n5fDA;
            ig_iq:
        }
        goto ERLuz;
        n6cZR:
        $bobot_jodoh = $info->bobot_jodohkan / 100;
        goto c3jNB;
        ERLuz:
        wD1iZ:
        goto Ov7Q7;
        Z1yUT:
        $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa["\65"] : [];
        goto CkSH4;
        Srqe0:
        $ada_jawaban_essai = isset($jawabans_siswa["\x35"]);
        goto cZQUk;
        fj5z4:
        $benar_jod = 0;
        goto Kt3j6;
        Ov7Q7:
        ul0wU:
        goto lsJJf;
        xOq4y:
        $benar_is = 0;
        goto tUFp0;
        Dwtx7:
    }
    public function hasil()
    {
        goto XrgAt;
        tyytS:
        $this->load->view("\x6d\x65\155\142\145\162\x73\57\x73\x69\x73\x77\141\57\x6e\x69\x6c\141\x69\57\144\141\x74\x61");
        goto fmjEJ;
        r9JOA:
        $data["\163\155\x74\x5f\141\143\164\x69\166\x65"] = $smt;
        goto qgnvk;
        aiy8I:
        $data["\156\151\154\141\151\137\155\141\x74\x65\162\x69"] = isset($logs[1]) ? $logs[1] : [];
        goto b0_WK;
        FsQcA:
        $this->db->trans_complete();
        goto RGPI4;
        fmjEJ:
        $this->load->view("\155\145\155\x62\x65\162\x73\x2f\163\151\163\167\141\57\x74\145\155\x70\154\141\164\x65\x73\x2f\146\x6f\x6f\x74\145\x72");
        goto HqakX;
        OTvuW:
        $skors = [];
        goto aXLl1;
        phv8b:
        $this->load->view("\x6d\x65\x6d\x62\x65\162\163\57\163\x69\163\x77\x61\57\164\145\x6d\160\x6c\x61\x74\145\x73\57\150\x65\141\144\145\x72", $data);
        goto tyytS;
        XrL7g:
        $logs = $this->kelas->getNilaiMateriSiswa($siswa->id_siswa);
        goto aiy8I;
        b0_WK:
        $data["\156\x69\x6c\x61\151\137\164\x75\x67\141\163"] = isset($logs[2]) ? $logs[2] : [];
        goto vwfsR;
        qgnvk:
        $data["\162\x75\x6e\156\151\156\x67\137\164\x65\x78\x74"] = $this->dashboard->getRunningText();
        goto phv8b;
        Gd8iG:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto t1E37;
        RGPI4:
        $data["\x73\153\157\x72"] = $skors;
        goto HYKcF;
        kr2E2:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto oDHI1;
        HYKcF:
        $data["\144\x75\162\141\163\151"] = $durasies;
        goto z_mDN;
        wtO6w:
        $data["\x6a\141\x77\141\x62\141\x6e"] = $jawabans;
        goto Gd8iG;
        bTt4K:
        $jawabans = [];
        goto tKMiz;
        IdFoO:
        kkfmk:
        goto FsQcA;
        tKMiz:
        foreach ($jadwals as $jadwal) {
            goto ED6Sg;
            n0qD6:
            $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh;
            goto tZQi9;
            ioENs:
            $otomatis_is = 0;
            goto z59dn;
            YWcVQ:
            $skor->benar_jodohkan = round($benar_jod, 2);
            goto cShpu;
            F_Qls:
            $skor->skor_isian = round($skor_is, 2);
            goto dPbUS;
            gk4sS:
            $skor = new stdClass();
            goto myaQj;
            Es3Bs:
            $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod);
            goto PUODS;
            CobWc:
            $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\x35"] : [];
            goto IiBqk;
            ExCnS:
            if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) {
                goto N9Srh;
            }
            goto hcNQA;
            CqStq:
            $benar_jod = 0;
            goto rUBhW;
            UeH7R:
            $bagi_pg = $info->tampil_pg / 100;
            goto Tpg_d;
            myaQj:
            $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal->id_jadwal, $siswa->id_siswa);
            goto oc9b5;
            Yhvd0:
            g7tNf:
            goto s4IKC;
            YR8OB:
            $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x34"]);
            goto GsF4a;
            dHGxR:
            lWYn4:
            goto l0NEN;
            VIS1t:
            $skor->skor_pg = $skor_pg = $bagi_pg == 0 ? 0 : round($benar_pg / $bagi_pg * $bobot_pg, 2);
            goto oSGfz;
            UIzxo:
            $skor->skor_essai = round($skor_es, 2);
            goto u55y1;
            GR_qg:
            DTTLU:
            goto Es3Bs;
            gKWLp:
            zKed2:
            goto YFxNv;
            dqMBx:
            $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is);
            goto F_Qls;
            adixy:
            KuI7c:
            goto HkogW;
            IiBqk:
            $benar_es = 0;
            goto eNWSl;
            pHZT3:
            if (!($info->tampil_jodohkan > 0)) {
                goto X2nFj;
            }
            goto DR6gw;
            A6EbS:
            $bobot_pg2 = $info->bobot_kompleks / 100;
            goto JRhm8;
            g_LYC:
            $input_es = $nilai_input->essai_nilai;
            goto zYwcv;
            PUODS:
            $skor->skor_jodohkan = round($skor_jod, 2);
            goto YWcVQ;
            tZQi9:
            $input_jod = 0;
            goto OSe7a;
            Gaeie:
            $benar_pg = 0;
            goto MgLfb;
            hcNQA:
            $input_pg2 = $nilai_input->kompleks_nilai;
            goto RkASo;
            dPbUS:
            $skor->benar_isian = $benar_is;
            goto CobWc;
            ED6Sg:
            $jadwal->bank_kelas = unserialize($jadwal->bank_kelas);
            goto k8GwB;
            JRhm8:
            $bagi_jodoh = $info->tampil_jodohkan / 100;
            goto pZZtE;
            YFxNv:
            $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian;
            goto kdqxE;
            ki9lm:
            X2nFj:
            goto n0qD6;
            pc4s5:
            $durasies[$jadwal->id_jadwal] = $this->cbt->getDurasiSiswaByJadwal($jadwal->id_jadwal, $siswa->id_siswa);
            goto ayhRi;
            rUBhW:
            $skor_koreksi_jod = 0.0;
            goto WBbcL;
            tzWM1:
            Tf7HX:
            goto i2Iyh;
            KsXVb:
            $benar_is = 0;
            goto lP1aa;
            Lgh0Q:
            v6Vdd:
            goto zt7eh;
            OvMyM:
            $bobot_essai = $info->bobot_esai / 100;
            goto hiwZ3;
            dPabV:
            foreach ($jawabans as $jawaban_siswa) {
                goto qq5XF;
                QlnzP:
                $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
                goto m9W7J;
                D7wfw:
                $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
                goto PHlVU;
                x_bjM:
                $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a);
                goto QlnzP;
                uLfH_:
                $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\163\x74\x72\154\x65\x6e");
                goto PAecj;
                o8Dja:
                UCX1d:
                goto TcVsf;
                y8aTs:
                $jawaban_siswa->jawaban = @unserialize($jawaban_siswa->jawaban);
                goto j_CDp;
                Wr7Ls:
                $jawaban_siswa->jawaban = array_filter($jawaban_siswa->jawaban, "\163\164\162\154\145\156");
                goto o8Dja;
                rZ96g:
                $jawaban_siswa->jawaban = json_decode(json_encode($jawaban_siswa->jawaban));
                goto msWXT;
                ifcuu:
                $jawaban_siswa->jawaban = @unserialize($jawaban_siswa->jawaban);
                goto hJ7YZ;
                skUhP:
                $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar));
                goto rZ96g;
                PAecj:
                $jawaban_siswa->jawaban = array_map("\x73\164\x72\164\157\x75\160\160\x65\162", $jawaban_siswa->jawaban);
                goto Wr7Ls;
                m9W7J:
                $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
                goto y8aTs;
                TcVsf:
                if (!($jawaban_siswa->jenis_soal == "\x33")) {
                    goto HuMwJ;
                }
                goto D7wfw;
                n5TZQ:
                $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
                goto mku89;
                hJ7YZ:
                $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa));
                goto skUhP;
                qq5XF:
                if (!($jawaban_siswa->jenis_soal == "\x32")) {
                    goto UCX1d;
                }
                goto x_bjM;
                msWXT:
                HuMwJ:
                goto n5TZQ;
                j_CDp:
                $jawaban_siswa->jawaban_benar = array_map("\163\x74\x72\x74\157\165\x70\160\145\162", $jawaban_siswa->jawaban_benar);
                goto uLfH_;
                mku89:
                eMohe:
                goto blpe7;
                PHlVU:
                $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
                goto ifcuu;
                blpe7:
            }
            goto tzWM1;
            f1ieC:
            if (!(count($jawaban_es) > 0)) {
                goto UUPuR;
            }
            goto cINC6;
            cKKlp:
            $bobot_isian = $info->bobot_isian / 100;
            goto Myh2M;
            AxVho:
            $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es);
            goto UIzxo;
            WBbcL:
            $otomatis_jod = 0;
            goto pHZT3;
            vQAqT:
            $skor->dikoreksi = $nilai_input->dikoreksi;
            goto adixy;
            Te2BR:
            $input_is = $nilai_input->isian_nilai;
            goto uNK1D;
            OzZ43:
            foreach ($jawaban_pg2 as $num => $jawab_pg2) {
                goto zwnCl;
                Q8AuK:
                $point_item = count($jawab_pg2->jawaban) > 0 ? $point_benar / count($jawab_pg2->jawaban) : 0;
                goto qYFPa;
                zwnCl:
                $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi;
                goto a3wT9;
                w8VTa:
                EU44o:
                goto oS7c8;
                kKKxX:
                $otomatis_pg2 = $jawab_pg2->nilai_otomatis;
                goto w8VTa;
                nHp0X:
                JbXJu:
                goto zml5c;
                zml5c:
                if (!(count($jawab_pg2->jawaban) > 0)) {
                    goto SM5Fe;
                }
                goto ZrIq8;
                ToT5E:
                qVb4A:
                goto nHp0X;
                qYFPa:
                $pk = $point_item * count($arr_benar);
                goto k_ZBF;
                ZrIq8:
                $benar_pg2 += 1 / count($jawab_pg2->jawaban) * count($arr_benar);
                goto n8FD7;
                k_ZBF:
                $jml_benar = count($arr_benar);
                goto kKKxX;
                pnQe2:
                if (!$jawab_pg2->jawaban_siswa) {
                    goto JbXJu;
                }
                goto oV0pZ;
                a3wT9:
                $arr_benar = [];
                goto pnQe2;
                HaNfS:
                $point_benar = $info->bobot_kompleks > 0 ? round($info->bobot_kompleks / $info->tampil_kompleks, 2) : 0;
                goto Q8AuK;
                n8FD7:
                SM5Fe:
                goto HaNfS;
                oV0pZ:
                foreach ($jawab_pg2->jawaban_siswa as $js) {
                    goto A_t3u;
                    hXYkm:
                    enXcw:
                    goto bxbSN;
                    P2pVY:
                    MTV2F:
                    goto hXYkm;
                    A_t3u:
                    if (!in_array($js, $jawab_pg2->jawaban)) {
                        goto MTV2F;
                    }
                    goto u00y9;
                    u00y9:
                    array_push($arr_benar, true);
                    goto P2pVY;
                    bxbSN:
                }
                goto ToT5E;
                oS7c8:
            }
            goto EfahB;
            RkASo:
            N9Srh:
            goto w2Isa;
            zZsWx:
            $input_es = 0;
            goto PQEsZ;
            oc9b5:
            if (!($nilai_input != null)) {
                goto KuI7c;
            }
            goto vQAqT;
            u0b9C:
            if (!($info->tampil_pg > 0)) {
                goto InTMn;
            }
            goto P0HbI;
            zYwcv:
            s3atW:
            goto AxVho;
            vKFFs:
            if (!($info->tampil_kompleks > 0)) {
                goto aF_Hs;
            }
            goto FJvDy;
            Myh2M:
            $bagi_essai = $info->tampil_esai / 100;
            goto OvMyM;
            cINC6:
            foreach ($jawaban_es as $num => $jawab_es) {
                goto DZJ6e;
                xoyZ0:
                $benar_es++;
                goto qjLAF;
                kUL_e:
                $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban);
                goto pxOWM;
                yQLz5:
                $otomatis_es = $jawab_es->nilai_otomatis;
                goto OyKWX;
                qjLAF:
                SuTI9:
                goto yQLz5;
                OyKWX:
                RPkLe:
                goto h1AJc;
                pxOWM:
                if (!$benar) {
                    goto SuTI9;
                }
                goto xoyZ0;
                DZJ6e:
                $skor_koreksi_es += $jawab_es->nilai_koreksi;
                goto kUL_e;
                h1AJc:
            }
            goto B2sl9;
            au9KK:
            $skor->skor_kompleks = round($skor_pg2, 2);
            goto rlXT1;
            Mn0Ki:
            foreach ($jawaban_jodoh as $num => $jawab_jod) {
                goto FPPhx;
                qxDhC:
                SLjP3:
                goto N9hmO;
                nlyLJ:
                $item_lebih = 0;
                goto lRe7Y;
                KEz4x:
                yAIRU:
                goto DbfJG;
                RD5yg:
                Wnnj0:
                goto FzVjf;
                foVP9:
                $item_kurang = 0;
                goto lLEZE;
                Eu1Or:
                foreach ($arrJwbSoal as $ps => $ajj) {
                    goto L1eb3;
                    YlbYW:
                    foreach ($ajj->subtitle as $pps => $aj) {
                        goto wPK8S;
                        uXRQ9:
                        XyfH5:
                        goto YAEoM;
                        YAEoM:
                        Xya29:
                        goto K9ZaA;
                        WbTSi:
                        $item_kurang++;
                        goto uXRQ9;
                        laXxk:
                        $kk++;
                        goto zPQyQ;
                        wPK8S:
                        if (!(isset($arrJwbJawab[$ps]) && !isset($arrJwbJawab[$ps]->subtitle[$pps]))) {
                            goto XyfH5;
                        }
                        goto laXxk;
                        zPQyQ:
                        $arrBenar[$ps]->kurang = $kk;
                        goto WbTSi;
                        K9ZaA:
                    }
                    goto uOOQC;
                    PGb_m:
                    $point_soal += $point_subitem * $arrBenar[$ps]->benar;
                    goto aPY3s;
                    L1eb3:
                    if (!isset($ajj->subtitle)) {
                        goto JqzUA;
                    }
                    goto qMgl2;
                    aPY3s:
                    KU978:
                    goto Eu3wP;
                    qMgl2:
                    $point_subitem = $point_item / count((array) $ajj->subtitle);
                    goto zklJR;
                    eU7kp:
                    JqzUA:
                    goto Z3mui;
                    uOOQC:
                    LXMvT:
                    goto eU7kp;
                    Eu3wP:
                    $kk = 0;
                    goto YlbYW;
                    zklJR:
                    if (!isset($arrBenar[$ps]->benar)) {
                        goto KU978;
                    }
                    goto PGb_m;
                    Z3mui:
                    x8cgT:
                    goto zm_1P;
                    zm_1P:
                }
                goto tAFyd;
                o3fJd:
                $arrJawab = $jawab_jod->jawaban_siswa->jawaban;
                goto gocrV;
                QNrva:
                rQeTL:
                goto z2dTR;
                gocrV:
                $headJawab = array_shift($arrJawab);
                goto RD5yg;
                wmCcb:
                $item_benar = 0;
                goto EUqxE;
                EUqxE:
                $item_salah = 0;
                goto nlyLJ;
                FzVjf:
                $arrJwbJawab = [];
                goto hNWN_;
                Od5G2:
                $headSoal = array_shift($arrSoal);
                goto W_vWs;
                ltm9F:
                if (!isset($jawab_jod->jawaban_siswa->jawaban)) {
                    goto Wnnj0;
                }
                goto o3fJd;
                tAFyd:
                QLXnN:
                goto N_sB7;
                ROJd0:
                $point_benar = $info->bobot_jodohkan > 0 ? round($info->bobot_jodohkan / $info->tampil_jodohkan, 2) : 0;
                goto k9O1i;
                N_sB7:
                $otomatis_jod = $jawab_jod->nilai_otomatis;
                goto Z6vUt;
                lLEZE:
                $point_soal = 0;
                goto Eu1Or;
                N9hmO:
                $arrBenar = [];
                goto wmCcb;
                FPPhx:
                $skor_koreksi_jod += $jawab_jod->nilai_koreksi;
                goto nnVp1;
                k9O1i:
                $point_item = $point_benar / count($arrSoal);
                goto foVP9;
                DbfJG:
                $arrJawab = [];
                goto ltm9F;
                bIUbp:
                foreach ($arrSoal as $kolSoal) {
                    goto w0J_v;
                    QR_OV:
                    VSM6s:
                    goto Yk04e;
                    N3Q6M:
                    j7UBw:
                    goto SCAyG;
                    w0J_v:
                    $jwb = new stdClass();
                    goto YW9fA;
                    Yk04e:
                    $jwb->title = array_shift($kolSoal);
                    goto cGLbp;
                    cGLbp:
                    array_push($arrJwbSoal, $jwb);
                    goto N3Q6M;
                    YW9fA:
                    foreach ($kolSoal as $pos => $kol) {
                        goto fpki0;
                        zSUJl:
                        $items++;
                        goto PjUZC;
                        EYTmF:
                        $jwb->subtitle[] = $headSoal[$pos];
                        goto zSUJl;
                        fpki0:
                        if (!($kol == "\x31")) {
                            goto We79p;
                        }
                        goto EYTmF;
                        g6k3J:
                        Jnt98:
                        goto rAjTt;
                        PjUZC:
                        We79p:
                        goto g6k3J;
                        rAjTt:
                    }
                    goto QR_OV;
                    SCAyG:
                }
                goto KEz4x;
                i0m12:
                $arrSoal = $jawab_jod->jawaban->jawaban;
                goto Od5G2;
                W_vWs:
                $arrJwbSoal = [];
                goto FSO2N;
                FSO2N:
                $items = 0;
                goto bIUbp;
                hNWN_:
                foreach ($arrJawab as $kolJawab) {
                    goto CtPKE;
                    ah4gI:
                    $jwbs->title = array_shift($kolJawab);
                    goto KBr3E;
                    EAXNk:
                    foreach ($kolJawab as $po => $kol) {
                        goto OrYeu;
                        OrYeu:
                        if (!($kol == "\61")) {
                            goto lE_KA;
                        }
                        goto SE874;
                        F8Ls3:
                        $jwbs->subtitle[] = $sub;
                        goto qTZjV;
                        SE874:
                        $sub = $headJawab[$po];
                        goto F8Ls3;
                        LpPdr:
                        TRykn:
                        goto eb5wy;
                        qTZjV:
                        lE_KA:
                        goto LpPdr;
                        eb5wy:
                    }
                    goto QLenD;
                    QLenD:
                    xH_hd:
                    goto ah4gI;
                    KBr3E:
                    array_push($arrJwbJawab, $jwbs);
                    goto p2ZFy;
                    p2ZFy:
                    bu9JC:
                    goto jdkrn;
                    CtPKE:
                    $jwbs = new stdClass();
                    goto EAXNk;
                    jdkrn:
                }
                goto qxDhC;
                nnVp1:
                $typeSoal = $jawab_jod->jawaban->type;
                goto i0m12;
                Z6vUt:
                UgfLS:
                goto GaEx7;
                z2dTR:
                $benar_jod += 1 / $items * $item_benar;
                goto ROJd0;
                lRe7Y:
                foreach ($arrJwbJawab as $p => $ajjs) {
                    goto hqTMC;
                    hqTMC:
                    $ll = 0;
                    goto aQHmY;
                    KD8zb:
                    G2O51:
                    goto Fjm4N;
                    wMsWJ:
                    $ss = 0;
                    goto qFvPn;
                    SHjFN:
                    s1e0T:
                    goto KD8zb;
                    aQHmY:
                    $bb = 0;
                    goto wMsWJ;
                    vZLmY:
                    foreach ($ajjs->subtitle as $pp => $ajs) {
                        goto e7RFz;
                        CLR9Z:
                        $arrBenar[$p]->benar = $bb;
                        goto Frh_h;
                        cpiqs:
                        I1mKV:
                        goto ikJRZ;
                        qLiwm:
                        if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) {
                            goto HZjlt;
                        }
                        goto T1VbK;
                        Frh_h:
                        $item_benar++;
                        goto cpiqs;
                        J8SsD:
                        $arrBenar[$p]->lebih = $ll;
                        goto ZLegK;
                        Z75ZJ:
                        $ll++;
                        goto J8SsD;
                        xnuaj:
                        ai8Or:
                        goto MoqXM;
                        ZLegK:
                        $item_lebih++;
                        goto zZLqz;
                        zZLqz:
                        d3U1k:
                        goto RVaQv;
                        mPlQE:
                        $arrBenar[$p]->salah = $ss;
                        goto jI4bo;
                        IiKGK:
                        goto I1mKV;
                        goto RJxPI;
                        T1VbK:
                        $ss++;
                        goto mPlQE;
                        ikJRZ:
                        r_PtF:
                        goto xnuaj;
                        B3Iub:
                        $bb++;
                        goto CLR9Z;
                        jI4bo:
                        $item_salah++;
                        goto IiKGK;
                        RJxPI:
                        HZjlt:
                        goto B3Iub;
                        e7RFz:
                        if (!(isset($arrJwbSoal[$p]) && !isset($arrJwbSoal[$p]->subtitle[$pp]))) {
                            goto d3U1k;
                        }
                        goto Z75ZJ;
                        RVaQv:
                        if (!(isset($arrJwbSoal[$p]) && isset($arrJwbSoal[$p]->subtitle))) {
                            goto r_PtF;
                        }
                        goto qLiwm;
                        MoqXM:
                    }
                    goto SHjFN;
                    qFvPn:
                    $arrBenar[$p] = new stdClass();
                    goto DQkJP;
                    Fjm4N:
                    Af7rK:
                    goto rjSx2;
                    DQkJP:
                    if (!isset($ajjs->subtitle)) {
                        goto G2O51;
                    }
                    goto vZLmY;
                    rjSx2:
                }
                goto QNrva;
                GaEx7:
            }
            goto Yhvd0;
            s4IKC:
            uXybr:
            goto ki9lm;
            u55y1:
            $skor->benar_esai = $benar_es;
            goto WBVGb;
            SdHx7:
            if (!($info->tampil_esai > 0)) {
                goto jsFHE;
            }
            goto f1ieC;
            TJZWi:
            KreWO:
            goto gKWLp;
            cShpu:
            $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\x34"] : [];
            goto KsXVb;
            iCind:
            $jawabans_siswa = [];
            goto dPabV;
            l0uOv:
            gjONf:
            goto TJZWi;
            z59dn:
            if (!($info->tampil_isian > 0)) {
                goto zKed2;
            }
            goto OWQ1i;
            HkogW:
            $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\61"] : [];
            goto Gaeie;
            w2Isa:
            $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2);
            goto au9KK;
            DLJBJ:
            $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2;
            goto PEGwY;
            e2U_G:
            $skor->skor_total = round($total, 2);
            goto EV5Oi;
            pknZu:
            foreach ($jawaban_pg as $num => $jwb_pg) {
                goto RNBgo;
                VoDyg:
                $benar = false;
                goto nY6ZZ;
                RNBgo:
                $benar = false;
                goto XhSdx;
                XhSdx:
                if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) {
                    goto R1fK7;
                }
                goto jKe28;
                jkPgW:
                YNqXh:
                goto Cmapy;
                nY6ZZ:
                goto muEm8;
                goto jkPgW;
                nGa5b:
                muEm8:
                goto bFrlG;
                bFrlG:
                R1fK7:
                goto hAw_v;
                Cmapy:
                $benar_pg += 1;
                goto MaRy1;
                jKe28:
                if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban)) {
                    goto YNqXh;
                }
                goto SElD0;
                hAw_v:
                AROWu:
                goto qZ0oi;
                SElD0:
                $salah_pg += 1;
                goto VoDyg;
                MaRy1:
                $benar = true;
                goto nGa5b;
                qZ0oi:
            }
            goto j6xbY;
            Tpg_d:
            $bobot_pg = $info->bobot_pg / 100;
            goto sG7eZ;
            sG7eZ:
            $bagi_pg2 = $info->tampil_kompleks / 100;
            goto A6EbS;
            WLAV0:
            $otomatis_es = 0;
            goto SdHx7;
            adeXu:
            UUPuR:
            goto VQQDq;
            VQQDq:
            jsFHE:
            goto bO286;
            OWQ1i:
            if (!(count($jawaban_is) > 0)) {
                goto KreWO;
            }
            goto Ar1RJ;
            hiwZ3:
            $jawabans = $this->cbt->getJawabanSiswaByJadwal($jadwal->id_jadwal, $siswa->id_siswa);
            goto iCind;
            PQEsZ:
            if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
                goto s3atW;
            }
            goto g_LYC;
            rlXT1:
            $skor->benar_kompleks = round($benar_pg2, 2);
            goto ShxiK;
            B2sl9:
            HH7u0:
            goto adeXu;
            PEGwY:
            $input_pg2 = 0;
            goto ExCnS;
            eNWSl:
            $skor_koreksi_es = 0.0;
            goto WLAV0;
            H2QSS:
            $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\61"]);
            goto MIkYN;
            eZKBZ:
            if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
                goto BJths;
            }
            goto Te2BR;
            bO286:
            $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai;
            goto zZsWx;
            k8GwB:
            $info = $jadwal;
            goto UeH7R;
            MIkYN:
            $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\62"]);
            goto r9P8C;
            oSGfz:
            $skor->benar_pg = $benar_pg;
            goto GmkxR;
            yw_kr:
            $benar_pg2 = 0;
            goto Lfjiu;
            tRnYg:
            $otomatis_pg2 = 0;
            goto vKFFs;
            i0jzz:
            $input_jod = $nilai_input->jodohkan_nilai;
            goto GR_qg;
            OSe7a:
            if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) {
                goto DTTLU;
            }
            goto i0jzz;
            Kh_Gj:
            $bagi_isian = $info->tampil_isian / 100;
            goto cKKlp;
            lP1aa:
            $skor_koreksi_is = 0.0;
            goto ioENs;
            kdqxE:
            $input_is = 0;
            goto eZKBZ;
            DR6gw:
            if (!(count($jawaban_jodoh) > 0)) {
                goto uXybr;
            }
            goto Mn0Ki;
            FJvDy:
            if (!(count($jawaban_pg2) > 0)) {
                goto v6Vdd;
            }
            goto OzZ43;
            i2Iyh:
            $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]);
            goto H2QSS;
            GsF4a:
            $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\65"]);
            goto gk4sS;
            pZZtE:
            $bobot_jodoh = $info->bobot_jodohkan / 100;
            goto Kh_Gj;
            j6xbY:
            qfxU7:
            goto dHGxR;
            ayhRi:
            Ws1oI:
            goto jPau1;
            l0NEN:
            InTMn:
            goto VIS1t;
            r9P8C:
            $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x33"]);
            goto YR8OB;
            Ar1RJ:
            foreach ($jawaban_is as $num => $jawab_is) {
                goto n6m9U;
                Ii_Mj:
                $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban);
                goto iaFOP;
                KlOlS:
                $benar_is++;
                goto euVwy;
                WbFQ3:
                nzleq:
                goto zlycE;
                BfEFg:
                $otomatis_is = $jawab_is->nilai_otomatis;
                goto WbFQ3;
                euVwy:
                MDVvi:
                goto BfEFg;
                iaFOP:
                if (!$benar) {
                    goto MDVvi;
                }
                goto KlOlS;
                n6m9U:
                $skor_koreksi_is += $jawab_is->nilai_koreksi;
                goto Ii_Mj;
                zlycE:
            }
            goto l0uOv;
            ShxiK:
            $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\63"] : [];
            goto CqStq;
            EV5Oi:
            $skors[$jadwal->id_jadwal] = $skor;
            goto pc4s5;
            P0HbI:
            if (!(count($jawaban_pg) > 0)) {
                goto lWYn4;
            }
            goto pknZu;
            zt7eh:
            aF_Hs:
            goto DLJBJ;
            Lfjiu:
            $skor_koreksi_pg2 = 0.0;
            goto tRnYg;
            uNK1D:
            BJths:
            goto dqMBx;
            EfahB:
            DMYtZ:
            goto Lgh0Q;
            GmkxR:
            $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\x32"] : [];
            goto yw_kr;
            WBVGb:
            $total = $skor_pg + $skor_pg2 + $skor_jod + $skor_is + $skor_es;
            goto e2U_G;
            MgLfb:
            $salah_pg = 0;
            goto u0b9C;
            jPau1:
        }
        goto IdFoO;
        XrgAt:
        $tp = $this->dashboard->getTahunActive();
        goto ajZRj;
        oDHI1:
        $data = ["\165\163\145\162" => $user, "\163\151\x73\x77\x61" => $siswa, "\152\165\144\x75\154" => "\x4e\x69\x6c\141\151", "\163\165\142\152\165\144\165\154" => "\116\151\154\141\x69\40\110\141\x73\151\x6c\40\x42\145\x6c\x61\152\x61\162", "\x73\145\x74\164\151\156\x67" => $this->dashboard->getSetting()];
        goto XrL7g;
        t1E37:
        $data["\x74\160\137\141\143\x74\151\166\145"] = $tp;
        goto IKC6c;
        vwfsR:
        $this->db->trans_start();
        goto GyWC9;
        GyWC9:
        $jadwals = $this->cbt->getJadwalByKelas($tp->id_tp, $smt->id_smt, $siswa->id_kelas);
        goto OTvuW;
        ajZRj:
        $smt = $this->dashboard->getSemesterActive();
        goto ihAOa;
        ihAOa:
        $user = $this->ion_auth->user()->row();
        goto kr2E2;
        z_mDN:
        $data["\x6a\x61\144\x77\141\154"] = $jadwals;
        goto wtO6w;
        IKC6c:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto r9JOA;
        aXLl1:
        $durasies = [];
        goto bTt4K;
        HqakX:
    }
    public function catatan()
    {
        goto M2fk1;
        xlBAU:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto wmKTZ;
        OYfPf:
        $catatan_mapel = $this->kelas->getCatatanMapelBySiswa($siswa->id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto apMla;
        uGl0h:
        $data["\x63\x61\164\141\x74\x61\156"] = (array) json_decode(json_encode($catatan));
        goto wBqb_;
        wBqb_:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto kqOGq;
        HCjzh:
        $this->load->view("\x6d\145\x6d\142\145\162\163\57\163\x69\163\x77\141\57\x74\x65\155\160\154\141\164\x65\x73\57\150\145\141\x64\145\x72", $data);
        goto v9fJz;
        qeGa8:
        foreach ($catatan_siswa as $cat) {
            $catatan[] = ["\x69\144\137\x63\141\164\x61\x74\x61\156" => $cat->id_catatan, "\156\x61\x6d\x61\137\x67\x75\162\x75" => $cat->nama_guru, "\151\144\x5f\163\151\163\167\141" => $siswa->id_siswa, "\164\x67\154" => $cat->tgl, "\x74\x61\x62\154\x65" => "\167\141\154\x69", "\154\x65\x76\145\154" => $cat->level, "\162\x65\141\144\145\x64" => $cat->readed, "\164\171\160\145" => $cat->type, "\162\145\141\144\151\156\x67" => unserialize($cat->reading)];
            Qv8Ve:
        }
        goto X_YSD;
        nP2gd:
        D600L:
        goto B28H8;
        kqOGq:
        $data["\x74\160\137\141\x63\164\151\x76\x65"] = $tp;
        goto f7j52;
        qVfdm:
        $this->load->view("\x6d\145\x6d\x62\x65\x72\x73\57\163\151\163\167\141\57\x74\x65\x6d\x70\x6c\x61\164\145\x73\57\146\157\x6f\x74\x65\x72");
        goto VrXmf;
        wmKTZ:
        $data = ["\x75\x73\x65\x72" => $user, "\x73\151\x73\x77\x61" => $siswa, "\x6a\165\x64\x75\x6c" => "\x43\x61\x74\141\164\141\x6e", "\163\x75\142\x6a\165\144\x75\x6c" => "\103\x61\x74\141\x74\x61\156\x20\x44\x61\x72\x69\40\107\x75\162\x75", "\x73\145\x74\x74\x69\156\147" => $this->dashboard->getSetting()];
        goto OYfPf;
        f7j52:
        $data["\x73\155\164"] = $this->dashboard->getSemester();
        goto sBH4L;
        M2fk1:
        $tp = $this->dashboard->getTahunActive();
        goto p8G7g;
        B28H8:
        $catatan_siswa = $this->kelas->getCatatanSiswaBySiswa($siswa->id_kelas, $siswa->id_siswa, $tp->id_tp, $smt->id_smt);
        goto qeGa8;
        h4nsP:
        foreach ($catatan_mapel as $cat) {
            $catatan[] = ["\151\x64\137\x63\141\164\x61\x74\141\x6e" => $cat->id_catatan, "\156\x61\x6d\x61\137\147\165\162\165" => $cat->nama_guru, "\151\x64\137\x73\151\163\167\x61" => $siswa->id_siswa, "\164\147\x6c" => $cat->tgl, "\164\141\142\x6c\145" => "\x6d\141\x70\145\154", "\x6c\x65\166\145\x6c" => $cat->level, "\164\171\x70\x65" => $cat->type, "\x72\145\141\144\x65\x64" => $cat->readed, "\x72\145\141\144\151\156\x67" => unserialize($cat->reading)];
            XPTNq:
        }
        goto nP2gd;
        v9fJz:
        $this->load->view("\155\145\x6d\142\145\162\x73\x2f\163\x69\163\x77\x61\x2f\143\141\x74\141\x74\141\x6e\57\144\141\164\141");
        goto qVfdm;
        S1FE4:
        rsort($catatan);
        goto uGl0h;
        p8G7g:
        $smt = $this->dashboard->getSemesterActive();
        goto viK37;
        viK37:
        $user = $this->ion_auth->user()->row();
        goto xlBAU;
        sBH4L:
        $data["\x73\x6d\164\137\x61\143\164\x69\166\x65"] = $smt;
        goto RcISS;
        RcISS:
        $data["\x72\x75\156\156\x69\x6e\147\137\164\x65\170\x74"] = $this->dashboard->getRunningText();
        goto HCjzh;
        apMla:
        $catatan = [];
        goto h4nsP;
        X_YSD:
        B_ajr:
        goto S1FE4;
        VrXmf:
    }
    public function detailCatatan($table, $id_catatan)
    {
        goto VKU6u;
        riqoH:
        $user = $this->ion_auth->user()->row();
        goto BlQUu;
        BlQUu:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto gN5y3;
        K0FlI:
        goto wKAMz;
        goto df3jI;
        gN5y3:
        if ($table == "\155\141\160\x65\154") {
            goto eC5SJ;
        }
        goto g3q2b;
        g3q2b:
        $detail = $this->kelas->getCatatanKelasSiswaDetail($id_catatan);
        goto K0FlI;
        U2l7z:
        $reading = $detail->reading != null ? unserialize($detail->reading) : [];
        goto yaAo6;
        CJUQq:
        wKAMz:
        goto NctE2;
        df3jI:
        eC5SJ:
        goto mQiHn;
        VKU6u:
        $tp = $this->dashboard->getTahunActive();
        goto fTBL0;
        fTBL0:
        $smt = $this->dashboard->getSemesterActive();
        goto riqoH;
        mQiHn:
        $detail = $this->kelas->getCatatanMapelSiswaDetail($id_catatan);
        goto CJUQq;
        yaAo6:
        $this->output_json(["\x72\145\141\144\x69\156\x67" => $reading, "\x64\x65\164\141\x69\x6c" => $detail]);
        goto LDMYW;
        NctE2:
        $detail->id_siswa = $siswa->id_siswa;
        goto U2l7z;
        LDMYW:
    }
    public function readed($table, $id_catatan)
    {
        goto m8wpI;
        ExtBO:
        $this->output_json($update);
        goto v0P6n;
        GHDDj:
        if (in_array($siswa->id_siswa, $reading)) {
            goto bnZFw;
        }
        goto ZHogD;
        uqMn4:
        AJDhZ:
        goto YkN7X;
        mfosP:
        $smt = $this->dashboard->getSemesterActive();
        goto wAQEb;
        EzaHq:
        vwobr:
        goto VSgt7;
        NrXW1:
        if ($cat->type == "\61") {
            goto hKilV;
        }
        goto eTqGj;
        rK422:
        goto CDJ_p;
        goto y5szN;
        gsVBu:
        $this->db->set("\x72\x65\141\x64\151\156\x67", serialize($reading));
        goto ik4O0;
        y5szN:
        hKilV:
        goto C0mgs;
        m8wpI:
        $tp = $this->dashboard->getTahunActive();
        goto mfosP;
        JFuFq:
        $this->db->where("\151\144\137\143\x61\x74\x61\164\141\156", $id_catatan);
        goto tnJ3P;
        ZxyeM:
        bnZFw:
        goto gsVBu;
        eTqGj:
        $this->db->set("\162\x65\141\144\x65\144", $readed);
        goto rK422;
        asSc1:
        if ($table == "\x6d\141\160\145\154") {
            goto vwobr;
        }
        goto OOD1h;
        YkN7X:
        $cat = $this->kelas->getReading($tbl, $id_catatan);
        goto rjsUC;
        C0mgs:
        $reading = unserialize($cat->reading);
        goto GHDDj;
        OOD1h:
        $tbl = "\x6b\145\x6c\141\163\x5f\143\x61\164\141\x74\x61\x6e\x5f\x77\x61\x6c\x69";
        goto TAUjo;
        ik4O0:
        CDJ_p:
        goto JFuFq;
        ZHogD:
        array_push($reading, $siswa->id_siswa);
        goto ZxyeM;
        tnJ3P:
        $update = $this->db->update($tbl);
        goto ExtBO;
        TAUjo:
        goto AJDhZ;
        goto EzaHq;
        rjsUC:
        $readed = $cat->readed == "\x30" ? date("\131\x2d\x6d\55\144\40\110\x3a\151\72\x73") : "\60";
        goto NrXW1;
        urvOn:
        $siswa = $this->cbt->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt);
        goto asSc1;
        wAQEb:
        $user = $this->ion_auth->user()->row();
        goto urvOn;
        VSgt7:
        $tbl = "\x6b\x65\x6c\141\163\137\143\141\x74\141\164\x61\156\137\155\x61\x70\x65\x6c";
        goto uqMn4;
        v0P6n:
    }
    public function getTimer($id_siswa, $id_jadwal)
    {
        $data["\x64\x75\x72\x61\163\x69"] = $this->cbt->getDurasiSiswa($id_siswa . "\x30" . $id_jadwal);
        $this->output_json($data);
    }
    function total_hari($id_day, $bulan, $taun)
    {
        goto JSdT9;
        Baliz:
        zHxCZ:
        goto d5K_j;
        BiaRs:
        WnBit:
        goto OZjqq;
        CzL7a:
        $i = 1;
        goto Olrv3;
        d5K_j:
        zq8V0:
        goto P6tea;
        JSdT9:
        $days = 0;
        goto UV0yK;
        T27XE:
        $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun);
        goto qBPdF;
        sOhfk:
        array_push($dates, date("\131\x2d\x6d\x2d\x64", strtotime($taun . "\x2d" . $bulan . "\55" . $i)));
        goto Baliz;
        hdFgl:
        $days++;
        goto sOhfk;
        HHIwA:
        if (!($i < $total_days)) {
            goto WnBit;
        }
        goto aucrf;
        Olrv3:
        GCxtQ:
        goto HHIwA;
        OZjqq:
        return $dates;
        goto T9YFs;
        aucrf:
        if (!(date("\116", strtotime($taun . "\55" . $bulan . "\55" . $i)) == $idday)) {
            goto zHxCZ;
        }
        goto hdFgl;
        P6tea:
        $i++;
        goto hIEHH;
        qBPdF:
        $idday = $id_day == "\x37" ? 0 : $id_day;
        goto CzL7a;
        hIEHH:
        goto GCxtQ;
        goto BiaRs;
        UV0yK:
        $dates = [];
        goto T27XE;
        T9YFs:
    }
}
