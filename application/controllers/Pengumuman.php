<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        goto JFwEv;
        vglId:
        $this->load->model("\120\x6f\x73\164\137\155\x6f\x64\x65\x6c", "\160\157\163\x74");
        goto uzrTK;
        Hwq88:
        FM0iV:
        goto A5BAt;
        A5BAt:
        goto bfCft;
        goto q7JIL;
        JFwEv:
        parent::__construct();
        goto hibfc;
        QZqI3:
        $this->load->model("\113\145\154\141\x73\137\155\x6f\x64\145\154", "\153\145\154\141\x73");
        goto yUfS0;
        pYDDD:
        $this->load->model("\115\x61\x73\164\x65\162\x5f\155\x6f\144\x65\154", "\x6d\141\x73\164\145\x72");
        goto nkVqG;
        hibfc:
        if (!$this->ion_auth->logged_in()) {
            goto UXAKs;
        }
        goto MmyLe;
        nkVqG:
        $this->load->model("\104\141\163\x68\142\157\141\x72\144\137\x6d\x6f\144\x65\154", "\144\141\163\x68\142\x6f\141\x72\144");
        goto QZqI3;
        yUfS0:
        $this->load->model("\x44\162\x6f\160\144\157\167\156\x5f\155\x6f\144\145\x6c", "\x64\x72\157\x70\x64\157\167\156");
        goto vglId;
        rETTc:
        bfCft:
        goto DEu6E;
        q7JIL:
        UXAKs:
        goto RS9uw;
        rbh74:
        show_error("\x48\x61\x6e\171\x61\40\101\144\155\151\x6e\151\163\164\x72\141\164\x6f\162\x20\x64\x61\156\40\147\165\162\165\40\x79\141\x6e\147\40\x64\x69\142\x65\x72\x69\x20\x68\141\x6b\40\165\156\164\165\153\x20\x6d\x65\x6e\147\x61\x6b\163\x65\x73\x20\150\141\154\x61\155\x61\156\40\151\156\x69\x2c\40\74\x61\x20\150\162\x65\146\75\42" . base_url("\x64\141\x73\150\142\x6f\x61\x72\144") . "\42\76\113\145\155\x62\141\154\x69\40\153\145\40\155\145\156\x75\x20\141\x77\141\154\74\57\141\76", 403, "\x41\153\163\x65\x73\x20\124\x65\x72\154\x61\x72\x61\x6e\x67");
        goto Hwq88;
        DEu6E:
        $this->load->library(["\144\x61\x74\x61\164\x61\142\154\145\x73", "\146\x6f\162\155\137\x76\x61\x6c\x69\144\141\164\x69\157\x6e"]);
        goto pYDDD;
        uzrTK:
        $this->form_validation->set_error_delimiters('', '');
        goto wUPqW;
        MmyLe:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\x75"))) {
            goto FM0iV;
        }
        goto rbh74;
        RS9uw:
        redirect("\x61\165\164\150");
        goto rETTc;
        wUPqW:
    }
    public function output_json($data, $encode = true)
    {
        goto uehoo;
        uehoo:
        if (!$encode) {
            goto onY2C;
        }
        goto Py4E4;
        PyyVl:
        onY2C:
        goto tNA75;
        Py4E4:
        $data = json_encode($data);
        goto PyyVl;
        tNA75:
        $this->output->set_content_type("\x61\x70\x70\154\151\143\x61\x74\x69\x6f\x6e\57\152\163\157\x6e")->set_output($data);
        goto PwDYr;
        PwDYr:
    }
    public function index()
    {
        goto XMVQq;
        oRe1u:
        $data["\162\165\156\x6e\x69\156\147\137\x74\x65\170\164"] = $this->dashboard->getRunningText();
        goto jmKAH;
        ToJ5M:
        $data["\x74\160\137\x61\x63\164\151\166\x65"] = $tp;
        goto ecZ5h;
        X_1T1:
        FQ5tG:
        goto bxkU3;
        Ys09u:
        goto FQ5tG;
        goto EaF9P;
        B_79d:
        $this->load->view("\x70\x65\x6e\x67\165\x6d\x75\x6d\x61\x6e\57\144\x61\x74\141");
        goto RvYBg;
        W5K9B:
        $this->load->view("\x6d\x65\x6d\142\145\x72\163\57\147\x75\x72\165\57\164\x65\155\160\154\141\x74\x65\163\57\x68\x65\x61\x64\x65\162", $data);
        goto B_79d;
        SyHxG:
        $data["\163\x6d\x74\137\x61\143\x74\151\166\145"] = $smt;
        goto ggbgS;
        jmKAH:
        if ($this->ion_auth->is_admin()) {
            goto wwA3K;
        }
        goto AVARh;
        XMVQq:
        $user = $this->ion_auth->user()->row();
        goto SrcK2;
        LPM83:
        $data["\164\x70"] = $this->dashboard->getTahun();
        goto ToJ5M;
        EaF9P:
        wwA3K:
        goto aa30W;
        xN7Cz:
        $smt = $this->master->getSemesterActive();
        goto LPM83;
        CW7Vb:
        $kelas = $this->dropdown->getAllKeyKodeKelas($tp->id_tp, $smt->id_smt);
        goto RpFtL;
        qbV1R:
        $this->load->view("\137\x74\x65\x6d\160\x6c\x61\x74\x65\x73\57\x64\141\x73\x68\x62\157\x61\162\144\57\x5f\x68\145\x61\144\x65\x72", $data);
        goto F7hZL;
        aa30W:
        $data["\163\165\142\152\165\144\x75\154"] = "\123\145\155\165\x61\40\120\x65\156\x67\x75\x6d\165\155\x61\156";
        goto kI6b1;
        F7hZL:
        $this->load->view("\x70\x65\156\147\165\155\x75\x6d\x61\156\57\144\x61\164\141");
        goto EAxRh;
        AClJ8:
        $data["\147\165\x72\165"] = $guru;
        goto WgkG6;
        wpXAx:
        $data["\x70\x65\x6e\147\165\x6d\165\x6d\x61\x6e\x73"] = $this->post->getPostUser(0);
        goto qbV1R;
        SrcK2:
        $data = ["\165\x73\145\x72" => $user, "\x6a\165\144\x75\154" => "\x50\145\x6e\x67\165\155\x75\155\x61\x6e", "\163\145\x74\164\151\156\x67" => $this->dashboard->getSetting()];
        goto Iqizf;
        Iqizf:
        $tp = $this->master->getTahunActive();
        goto xN7Cz;
        AVARh:
        $data["\x73\165\x62\x6a\165\x64\165\x6c"] = "\120\x65\x6e\x67\x75\x6d\x75\155\141\156\x20\101\x6e\144\141";
        goto mVx_s;
        kI6b1:
        $data["\x70\162\157\x66\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto wpXAx;
        mVx_s:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto AClJ8;
        RvYBg:
        $this->load->view("\155\x65\155\x62\145\x72\163\57\x67\165\x72\165\57\x74\x65\155\x70\154\x61\x74\x65\x73\57\x66\157\x6f\164\145\x72");
        goto Ys09u;
        ggbgS:
        $data["\x67\x75\x72\165\163"] = $this->dropdown->getAllGuru();
        goto CW7Vb;
        WgkG6:
        $data["\x70\x65\156\147\165\155\165\155\x61\x6e\163"] = $this->post->getPostUser($guru->id_guru);
        goto W5K9B;
        EAxRh:
        $this->load->view("\x5f\x74\x65\155\x70\x6c\x61\164\145\163\57\144\x61\163\150\142\157\141\x72\144\x2f\x5f\x66\157\x6f\x74\145\x72");
        goto X_1T1;
        ecZ5h:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto SyHxG;
        RpFtL:
        $data["\x6b\x65\x6c\x61\x73"] = $kelas;
        goto oRe1u;
        bxkU3:
    }
    public function kepada($kepada, $id_kepada = null)
    {
        goto VIO0y;
        nSRQ6:
        $this->load->view("\160\145\x6e\x67\165\x6d\x75\155\x61\x6e\57\x64\x61\164\x61");
        goto qiOO0;
        sGt7M:
        $data["\153\x65\x70\141\144\x61"] = urldecode($kepada);
        goto YPleP;
        Ypp5j:
        $data = ["\165\163\145\162" => $user, "\x6a\165\x64\165\x6c" => "\120\x65\156\147\165\155\165\x6d\141\156", "\163\x75\x62\152\165\x64\x75\154" => "\x53\x65\x6d\165\x61\40\x50\x65\x6e\147\165\x6d\165\x6d\x61\156", "\163\x65\x74\164\151\x6e\x67" => $this->dashboard->getSetting()];
        goto ueIhb;
        ueIhb:
        $tp = $this->master->getTahunActive();
        goto XOzpN;
        luU_p:
        $data["\x67\165\x72\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto a59Cc;
        sLU4e:
        GRTAq:
        goto abpyo;
        LnwFz:
        $this->load->view("\x70\145\x6e\x67\x75\155\165\x6d\x61\156\x2f\144\141\x74\x61");
        goto rJNr3;
        HlSFt:
        $comments = [];
        goto z5JvF;
        mJ7pI:
        foreach ($pengumumans as $pengumuman) {
            goto pouI5;
            Bc4PT:
            $this->db->where("\141\56\x69\144\137\160\157\163\164", $pengumuman->id_post);
            goto lSSw1;
            xeqVY:
            $this->db->order_by("\x61\56\x74\x61\x6e\147\147\x61\x6c", "\144\145\163\143");
            goto Bc4PT;
            iCEqj:
            Yq7s3:
            goto Dilhn;
            z0dZU:
            $this->db->from("\160\157\x73\x74\x5f\143\x6f\155\155\145\156\164\x73\x20\x61");
            goto Yrp7M;
            lSSw1:
            $comment = $this->db->get()->result();
            goto P6GOc;
            Yrp7M:
            $this->db->join("\155\x61\163\x74\x65\x72\137\x67\165\162\165\40\x62", "\x61\x2e\x64\x61\x72\151\75\x62\x2e\x69\144\137\147\165\x72\165", "\154\x65\x66\164");
            goto xeqVY;
            EyFdW:
            $comments[$pengumuman->id_post] = $comment;
            goto iCEqj;
            pouI5:
            $this->db->select("\x61\56\x2a\x2c\40\142\x2e\156\141\x6d\141\137\x67\165\162\x75\x2c\x20\142\x2e\x66\157\164\x6f");
            goto z0dZU;
            NCqmU:
            cy74l:
            goto EyFdW;
            P6GOc:
            foreach ($comment as $comm) {
                goto D8ixx;
                GEZ8b:
                $balasan[$pengumuman->id_post][$comm->id_comment] = $this->db->get()->result();
                goto PeEVI;
                hg5Kt:
                $this->db->order_by("\x61\56\164\141\x6e\147\147\x61\x6c", "\144\145\x73\143");
                goto XS3Tu;
                PeEVI:
                fnNdV:
                goto tPuiL;
                sMUkc:
                $this->db->join("\x6d\x61\x73\164\145\x72\137\x67\165\x72\165\40\142", "\141\56\144\x61\162\x69\75\x62\56\151\x64\x5f\x67\165\162\x75", "\x6c\x65\146\x74");
                goto hg5Kt;
                ujpFz:
                $this->db->from("\x70\x6f\x73\164\x5f\x72\x65\160\x6c\171\40\141");
                goto sMUkc;
                D8ixx:
                $this->db->select("\141\x2e\x2a\x2c\x20\142\56\x6e\x61\x6d\x61\137\x67\x75\x72\165\54\40\142\x2e\x66\157\x74\157");
                goto ujpFz;
                XS3Tu:
                $this->db->where("\141\56\151\x64\x5f\143\x6f\155\x6d\x65\x6e\164", $comm->id_comment);
                goto GEZ8b;
                tPuiL:
            }
            goto NCqmU;
            Dilhn:
        }
        goto AO1um;
        Bmqyv:
        $data["\x74\160\137\141\143\164\151\x76\x65"] = $tp;
        goto q_Cgc;
        pMkpV:
        xla2s:
        goto m_GFB;
        Ovax1:
        $this->db->order_by("\x61\56\164\x61\x6e\147\x67\x61\154", "\144\145\x73\143");
        goto ngp98;
        ngp98:
        $pengumumans = $this->db->get()->result();
        goto HlSFt;
        OJXqH:
        $data["\x67\165\x72\165\x73"] = $this->dropdown->getAllGuru();
        goto GNmMo;
        Z8Mtu:
        $data["\153\x65\160\x61\144\141"] = "\x53\145\155\x75\x61\40\x47\165\162\165";
        goto ij1DN;
        XNd7k:
        $this->db->join("\x6d\141\x73\x74\145\x72\137\x67\165\162\x75\x20\x62", "\x61\x2e\144\141\162\x69\x3d\142\56\x69\x64\x5f\x67\x75\162\x75", "\x6c\x65\146\x74");
        goto Ovax1;
        AO1um:
        IRj5U:
        goto lUTat;
        YPleP:
        goto S_3z1;
        goto eUPg5;
        QvmuF:
        if ($kepada === "\163\145\x6d\165\x61\137\163\x69\x73\x77\141") {
            goto xla2s;
        }
        goto sGt7M;
        m_GFB:
        $data["\x6b\x65\x70\141\144\141"] = "\x53\x65\x6d\165\141\40\x53\151\163\x77\x61";
        goto nD2Ne;
        XOzpN:
        $smt = $this->master->getSemesterActive();
        goto CqDY_;
        ij1DN:
        goto S_3z1;
        goto pMkpV;
        IhNOx:
        $this->db->select("\141\x2e\x2a\x2c\x20\x62\x2e\156\x61\155\141\x5f\147\x75\162\165\x2c\40\x62\56\146\x6f\164\x6f");
        goto p0RM_;
        q_Cgc:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto qegD_;
        GNmMo:
        $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto L4GB_;
        rJNr3:
        $this->load->view("\137\x74\145\x6d\x70\x6c\x61\x74\x65\x73\x2f\x64\141\x73\x68\142\157\141\x72\144\57\137\x66\157\x6f\x74\145\x72");
        goto sLU4e;
        idBO2:
        if ($kepada === "\x73\145\155\165\141\x5f\147\x75\x72\x75") {
            goto y7PBD;
        }
        goto QvmuF;
        nD2Ne:
        S_3z1:
        goto A9D6A;
        PMqas:
        h8X8x:
        goto y2gSl;
        L4GB_:
        $data["\153\x65\x6c\141\x73"] = $kelas;
        goto IhNOx;
        qiOO0:
        $this->load->view("\x6d\x65\x6d\142\145\x72\x73\57\x67\165\162\x75\x2f\164\145\155\x70\154\141\164\x65\x73\x2f\x66\157\157\x74\145\162");
        goto bc4h1;
        eUPg5:
        y7PBD:
        goto Z8Mtu;
        VIO0y:
        $user = $this->ion_auth->user()->row();
        goto Ypp5j;
        A9D6A:
        if ($this->ion_auth->is_admin()) {
            goto h8X8x;
        }
        goto luU_p;
        a59Cc:
        $this->load->view("\155\145\155\142\145\162\163\57\x67\x75\x72\x75\x2f\x74\145\x6d\x70\154\141\x74\145\x73\x2f\x68\145\141\144\145\162", $data);
        goto nSRQ6;
        D5OKO:
        $data["\143\x6f\155\x6d\x65\x6e\x74\163"] = $comments;
        goto CzZbU;
        CqDY_:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto Bmqyv;
        bc4h1:
        goto GRTAq;
        goto PMqas;
        z5JvF:
        $balasan = [];
        goto mJ7pI;
        VBYos:
        $this->load->view("\x5f\164\145\x6d\160\154\x61\x74\145\163\x2f\144\x61\x73\150\x62\157\141\162\x64\57\137\x68\145\x61\144\x65\x72", $data);
        goto LnwFz;
        p0RM_:
        $this->db->from("\x70\157\163\164\40\141");
        goto XNd7k;
        lUTat:
        $data["\160\x65\156\x67\x75\155\165\155\141\x6e\163"] = $pengumumans;
        goto D5OKO;
        y2gSl:
        $data["\160\x72\157\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto VBYos;
        qegD_:
        $data["\x73\155\x74\137\x61\x63\164\x69\x76\x65"] = $smt;
        goto OJXqH;
        CzZbU:
        $data["\142\141\154\x61\x73\x61\x6e\163"] = $balasan;
        goto idBO2;
        abpyo:
    }
    public function getPost()
    {
        $post = $this->post->getPostForUser(null);
        $this->output_json($post);
    }
    public function getComment($id_post, $page)
    {
        goto oMQO4;
        ighXX:
        $this->db->select("\x61\x2e\x2a\54\x20\142\x2e\156\x61\155\x61\x5f\x67\165\x72\165\54\40\142\56\x66\157\164\157\x2c\40\x63\x2e\156\141\x6d\141\40\x61\x73\40\x6e\x61\155\141\137\163\x69\163\167\141\x2c\40\x63\56\x66\x6f\164\157\x20\141\x73\x20\146\157\x74\157\137\x73\x69\x73\167\141\x2c\x20\50\123\x45\114\x45\103\124\x20\x43\117\x55\116\124\50\160\x6f\x73\x74\137\162\145\x70\154\171\x2e\x69\x64\137\162\x65\x70\x6c\x79\x29\40\106\x52\117\x4d\x20\160\157\163\164\x5f\162\145\160\154\x79\x20\x57\110\105\122\105\x20\141\56\x69\144\137\143\x6f\x6d\x6d\x65\156\164\x20\x3d\x20\160\157\x73\x74\137\x72\145\x70\154\x79\56\151\x64\x5f\x63\157\155\155\145\x6e\x74\x29\40\x41\123\x20\152\x6d\x6c");
        goto zBvrc;
        Pqm4J:
        $this->db->join("\x6d\x61\163\164\x65\162\137\163\151\x73\x77\x61\40\x63", "\x61\x2e\144\x61\x72\x69\75\x63\56\151\x64\x5f\163\151\163\x77\141", "\x6c\145\146\164");
        goto XpEMF;
        ZRsOL:
        $this->db->limit($perPage, $offset);
        goto vEBkl;
        XpEMF:
        $this->db->order_by("\141\56\164\141\156\147\x67\x61\154", "\x64\145\163\x63");
        goto ldDzQ;
        oMQO4:
        $perPage = 5;
        goto lE6Qy;
        sL85L:
        $this->db->join("\x6d\141\163\164\145\162\x5f\147\165\x72\165\40\142", "\x61\x2e\144\141\x72\x69\75\142\56\151\144\x5f\x67\x75\162\165", "\x6c\x65\146\164");
        goto Pqm4J;
        Hn43P:
        $this->db->query("\123\105\x54\x20\123\x51\x4c\x5f\102\x49\107\x5f\x53\105\114\x45\x43\124\x53\x3d\x31");
        goto ighXX;
        vEBkl:
        $comment = $this->db->get()->result();
        goto IFBuf;
        ldDzQ:
        $this->db->where("\141\56\x69\144\137\x70\x6f\163\x74", $id_post);
        goto ZRsOL;
        IFBuf:
        $this->output_json($comment);
        goto vWjd7;
        zBvrc:
        $this->db->from("\x70\157\163\164\137\143\157\155\x6d\145\156\164\163\x20\x61");
        goto sL85L;
        lE6Qy:
        $offset = $page * $perPage;
        goto Hn43P;
        vWjd7:
    }
    public function getReplies($id_comment, $page)
    {
        goto e02Vs;
        bn3cE:
        $this->output_json($replies);
        goto VLpDu;
        oSkv8:
        $offset = $page * $perPage;
        goto ty3lt;
        YZGJc:
        $this->db->join("\155\x61\163\x74\x65\162\137\x73\151\x73\x77\141\40\143", "\x61\x2e\144\141\162\151\75\x63\56\x69\144\137\x73\x69\x73\x77\141", "\x6c\145\x66\164");
        goto AaiQ3;
        rfH_t:
        $this->db->from("\160\x6f\x73\x74\137\x72\145\160\x6c\x79\40\141");
        goto YkmEQ;
        ao8MN:
        $this->db->limit($perPage, $offset);
        goto OFZWs;
        e02Vs:
        $perPage = 5;
        goto oSkv8;
        Me0A6:
        $this->db->select("\x61\x2e\x2a\x2c\x20\x62\56\x6e\x61\x6d\x61\x5f\x67\165\162\165\54\x20\x62\56\x66\157\164\x6f\54\x20\x63\x2e\x6e\141\155\141\x20\x61\x73\40\156\x61\155\x61\x5f\163\151\x73\167\141\54\x20\x63\56\x66\x6f\x74\x6f\x20\x61\x73\40\146\157\164\x6f\x5f\163\x69\x73\x77\141");
        goto rfH_t;
        TeFZE:
        $this->db->where("\141\56\151\144\137\x63\x6f\155\x6d\x65\156\164", $id_comment);
        goto ao8MN;
        AaiQ3:
        $this->db->order_by("\x61\56\164\x61\156\147\x67\141\x6c", "\144\145\x73\x63");
        goto TeFZE;
        ty3lt:
        $this->db->query("\123\105\x54\40\x53\121\x4c\x5f\102\111\107\137\123\105\114\x45\103\124\123\75\x31");
        goto Me0A6;
        OFZWs:
        $replies = $this->db->get()->result();
        goto bn3cE;
        YkmEQ:
        $this->db->join("\x6d\141\x73\x74\145\x72\137\x67\165\162\x75\x20\142", "\x61\56\144\141\x72\x69\75\x62\56\x69\144\x5f\147\x75\x72\x75", "\x6c\x65\x66\x74");
        goto YZGJc;
        VLpDu:
    }
    public function save()
    {
        goto gwmsq;
        oA1Aj:
        $dari = $this->input->post("\144\x61\x72\x69");
        goto GUYKK;
        gwmsq:
        $kepada = json_decode(json_encode($this->input->post("\153\145\160\141\x64\x61\x5b\135", true)));
        goto oA1Aj;
        kLYOA:
        $this->output_json($insert);
        goto MSEtw;
        LghaP:
        $insert = $this->db->replace("\160\x6f\x73\164", $data);
        goto kLYOA;
        GUYKK:
        $data = ["\153\145\x70\x61\x64\x61" => serialize($kepada), "\x64\x61\162\x69" => $dari, "\x64\x61\162\151\137\x67\x72\x6f\165\160" => $dari == "\x30" ? "\61" : "\62", "\164\x65\170\164" => $this->input->post("\164\x65\x78\x74"), "\x74\x61\x6e\x67\147\141\154" => date("\x59\x2d\155\x2d\x64\x20\x48\72\x69\x3a\x73"), "\x75\160\x64\141\x74\x65\x64" => date("\131\x2d\x6d\x2d\144\40\x48\72\151\72\x73")];
        goto LghaP;
        MSEtw:
    }
    public function saveKomentar()
    {
        goto PR1Xr;
        SWAz_:
        $smt = $this->master->getSemesterActive();
        goto OmCxJ;
        fNwG9:
        $this->db->from("\160\157\163\164\x5f\x63\x6f\x6d\x6d\x65\x6e\164\163\x20\141");
        goto YXt96;
        NjW5e:
        $this->db->query("\123\x45\124\x20\x53\x51\x4c\x5f\102\111\107\137\123\105\x4c\x45\x43\124\123\x3d\61");
        goto r1wc3;
        gglb4:
        $tp = $this->master->getTahunActive();
        goto SWAz_;
        a5ZCN:
        fQ1Gy:
        goto xO3JE;
        VpXE9:
        $dari = $guru->id_guru;
        goto hwACX;
        hwACX:
        $dari_group = 2;
        goto a5ZCN;
        YXt96:
        $this->db->join("\x6d\141\163\x74\x65\162\x5f\x67\x75\162\165\40\142", "\x61\56\144\141\162\151\x3d\142\56\x69\x64\137\x67\165\x72\x75", "\154\145\x66\x74");
        goto KAeTT;
        tz8Od:
        $user = $this->ion_auth->user()->row();
        goto gglb4;
        rqzhf:
        if ($this->ion_auth->is_admin()) {
            goto fQ1Gy;
        }
        goto tz8Od;
        eqPxH:
        $dari_group = 1;
        goto rqzhf;
        uzwR5:
        $insert = $this->db->replace("\160\x6f\163\164\137\143\x6f\155\155\x65\x6e\x74\163", $data);
        goto Pej2x;
        KAeTT:
        $this->db->join("\x6d\141\x73\164\x65\162\137\x73\x69\163\x77\x61\40\x63", "\x61\56\144\x61\162\x69\75\x63\56\x69\144\x5f\163\151\163\x77\x61", "\x6c\145\x66\x74");
        goto xhQyK;
        PR1Xr:
        $dari = "\60";
        goto eqPxH;
        e9Opf:
        $comment = $this->db->get()->result();
        goto VPiun;
        qbgZe:
        $this->db->where("\x61\x2e\151\x64\x5f\143\157\155\x6d\145\x6e\164", $id);
        goto e9Opf;
        Pej2x:
        $id = $this->db->insert_id();
        goto NjW5e;
        OmCxJ:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto VpXE9;
        VPiun:
        $this->output_json($comment);
        goto FnwWQ;
        xO3JE:
        $data = ["\151\x64\137\160\157\163\164" => $this->input->post("\x69\x64\x5f\160\157\163\x74"), "\x64\x61\162\151" => $dari, "\x64\141\x72\151\x5f\147\x72\157\165\160" => $dari_group, "\x74\x65\170\164" => $this->input->post("\x74\x65\170\164")];
        goto uzwR5;
        xhQyK:
        $this->db->order_by("\x61\x2e\x74\x61\x6e\x67\x67\x61\x6c", "\144\145\x73\x63");
        goto qbgZe;
        r1wc3:
        $this->db->select("\141\x2e\52\x2c\x20\x62\56\156\141\x6d\x61\x5f\147\x75\162\x75\x2c\x20\142\x2e\x66\x6f\x74\x6f\x2c\x20\x63\x2e\156\x61\155\x61\40\141\163\x20\156\x61\155\x61\137\163\151\x73\167\141\x2c\40\143\x2e\146\x6f\164\157\x20\x61\x73\40\x66\x6f\164\157\137\163\151\163\x77\x61\x2c\40\50\x53\105\114\105\103\x54\40\x43\x4f\x55\116\x54\x28\x70\157\163\164\x5f\162\145\160\154\171\56\151\144\x5f\x72\x65\160\x6c\171\51\40\x46\x52\x4f\115\x20\x70\157\x73\x74\137\162\145\x70\x6c\x79\x20\x57\110\x45\x52\x45\40\141\x2e\151\x64\137\x63\157\x6d\x6d\x65\156\164\40\x3d\40\x70\x6f\163\164\x5f\x72\145\160\154\x79\x2e\x69\x64\137\143\x6f\155\x6d\x65\156\164\x29\40\101\123\40\152\155\154");
        goto fNwG9;
        FnwWQ:
    }
    public function saveBalasan()
    {
        goto IxxLR;
        Bt3fT:
        $this->db->order_by("\141\56\164\x61\156\x67\147\x61\154", "\144\145\163\x63");
        goto QW0s7;
        iL3ZM:
        $this->db->join("\155\141\x73\164\x65\x72\137\147\x75\162\x75\x20\x62", "\141\x2e\144\x61\x72\151\x3d\x62\x2e\151\144\137\147\165\x72\165", "\x6c\x65\146\164");
        goto jGMkh;
        iQi1N:
        $this->db->from("\x70\x6f\x73\164\137\162\145\160\x6c\x79\x20\x61");
        goto iL3ZM;
        Dpw5R:
        LU6oO:
        goto VQv_y;
        kbMqD:
        $user = $this->ion_auth->user()->row();
        goto ybu11;
        jGMkh:
        $this->db->join("\155\141\x73\164\145\x72\137\x73\151\x73\167\141\40\143", "\x61\56\x64\141\162\151\x3d\x63\x2e\151\144\137\x73\x69\163\x77\141", "\x6c\145\146\164");
        goto Bt3fT;
        wVtHh:
        $this->output_json($replies);
        goto nLHdi;
        b53Iu:
        $dari_group = 1;
        goto PQRAB;
        yXV1l:
        $replies = $this->db->get()->result();
        goto wVtHh;
        EiULQ:
        $dari = $guru->id_guru;
        goto TsLqA;
        PQRAB:
        if ($this->ion_auth->is_admin()) {
            goto LU6oO;
        }
        goto kbMqD;
        ybu11:
        $tp = $this->master->getTahunActive();
        goto Tz7lP;
        ow6En:
        $id = $this->db->insert_id();
        goto DYCMg;
        IxxLR:
        $dari = "\x30";
        goto b53Iu;
        DYCMg:
        $this->db->query("\x53\105\124\x20\123\121\114\137\102\111\107\137\x53\x45\x4c\105\103\124\123\x3d\x31");
        goto lW6Ha;
        VQv_y:
        $data = ["\151\x64\x5f\x63\x6f\x6d\x6d\145\156\x74" => $this->input->post("\151\x64\137\x63\157\x6d\x6d\x65\156\x74"), "\144\x61\x72\151" => $dari, "\144\x61\162\x69\x5f\x67\162\157\165\x70" => $dari_group, "\164\x65\170\x74" => $this->input->post("\x74\145\170\164")];
        goto XiSv1;
        XiSv1:
        $insert = $this->db->replace("\160\x6f\x73\x74\137\162\145\x70\154\171", $data);
        goto ow6En;
        lW6Ha:
        $this->db->select("\141\x2e\52\54\40\x62\56\x6e\141\155\x61\x5f\147\x75\162\x75\x2c\40\142\56\x66\157\x74\157\54\40\x63\x2e\x6e\x61\155\x61\40\141\x73\x20\x6e\141\x6d\141\x5f\163\151\x73\167\141\x2c\40\x63\56\x66\157\164\157\x20\141\163\40\146\x6f\x74\157\x5f\x73\151\x73\167\x61");
        goto iQi1N;
        TsLqA:
        $dari_group = 2;
        goto Dpw5R;
        QW0s7:
        $this->db->where("\x61\56\x69\144\137\x72\x65\160\x6c\x79", $id);
        goto yXV1l;
        Tz7lP:
        $smt = $this->master->getSemesterActive();
        goto Txcob;
        Txcob:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto EiULQ;
        nLHdi:
    }
    public function hapusPost($id_post)
    {
        goto OpgbC;
        C80CR:
        $this->db->where("\151\144\x5f\160\x6f\163\164", $id_post);
        goto mmqZ9;
        hywMG:
        foreach ($comments as $comment) {
            goto QAIrW;
            iTAEf:
            Qckxv:
            goto pTluh;
            vAl3H:
            $deleted["\x62\141\154\x61\x73\x61\x6e"] = $this->db->delete("\x70\x6f\163\164\x5f\x72\145\160\154\171");
            goto iTAEf;
            QAIrW:
            $this->db->where("\x69\144\137\x63\x6f\155\x6d\145\x6e\164", $comment->id_comment);
            goto vAl3H;
            pTluh:
        }
        goto M8FD6;
        IcL6a:
        $this->db->trans_complete();
        goto gyeKF;
        mmqZ9:
        if (!$this->db->delete("\160\157\x73\x74\x5f\143\x6f\x6d\x6d\x65\x6e\164\x73")) {
            goto bp0H5;
        }
        goto YgZ1N;
        B9Bb4:
        $deleted = $this->db->delete("\160\x6f\x73\164");
        goto lGx8Y;
        M8FD6:
        WxiQl:
        goto C80CR;
        lGx8Y:
        bp0H5:
        goto IcL6a;
        OpgbC:
        $this->db->trans_start();
        goto YHQAK;
        YgZ1N:
        $this->db->where("\151\x64\137\x70\x6f\163\164", $id_post);
        goto B9Bb4;
        YHQAK:
        $comments = $this->post->getIdComments($id_post);
        goto hywMG;
        gyeKF:
        $this->output_json($deleted);
        goto kmBXM;
        kmBXM:
    }
    public function hapusKomentar($id_comment)
    {
        goto fz62S;
        PZ82w:
        $this->db->trans_complete();
        goto C2b6E;
        C2b6E:
        $this->output_json($deleted);
        goto jCK5U;
        fz62S:
        $this->db->trans_start();
        goto nJHEV;
        RuB6_:
        $deleted["\x62\141\154\x61\163\x61\156"] = $this->db->delete("\160\x6f\x73\164\137\162\x65\160\154\171");
        goto PZ82w;
        nJHEV:
        $this->db->where("\x69\x64\x5f\x63\x6f\x6d\x6d\145\156\164", $id_comment);
        goto H8y2M;
        H8y2M:
        $deleted["\x6b\157\155\145\156\x74\x61\162"] = $this->db->delete("\x70\157\163\164\x5f\x63\157\155\x6d\x65\156\164\x73");
        goto puJ7A;
        puJ7A:
        $this->db->where("\x69\x64\137\143\157\x6d\155\x65\156\164", $id_comment);
        goto RuB6_;
        jCK5U:
    }
    public function hapusBalasan($id_reply)
    {
        goto lYSbf;
        DnmdU:
        $this->db->where("\151\x64\x5f\162\x65\160\x6c\171", $id_reply);
        goto xG0WL;
        gdX11:
        $this->output_json($deleted);
        goto BQ1CF;
        lYSbf:
        $this->db->trans_start();
        goto DnmdU;
        wktC1:
        $this->db->trans_complete();
        goto gdX11;
        xG0WL:
        $deleted["\142\x61\154\x61\x73\x61\x6e"] = $this->db->delete("\160\157\163\x74\137\162\145\x70\154\171");
        goto wktC1;
        BQ1CF:
    }
    public function getRunningText()
    {
        $data["\x72\x75\156\x6e\x69\156\x67\x5f\x74\145\170\x74"] = $this->dashboard->getRunningText();
        $this->output_json($data);
    }
    public function saveRunningText()
    {
        goto SrWXt;
        XUVk2:
        QamGL:
        goto pjoAb;
        pjoAb:
        $data["\x73\164\141\x74\x75\163"] = $updates;
        goto ct6za;
        AVd1G:
        foreach ($input as $d) {
            goto AfamP;
            rW9Z2:
            array_push($updates, $update);
            goto f3EHW;
            SpQvW:
            $update = $this->db->replace("\162\x75\x6e\156\x69\156\x67\x5f\x74\x65\170\x74", $data);
            goto rW9Z2;
            f3EHW:
            BUyFr:
            goto a9Wz4;
            AfamP:
            $data = ["\x69\144\137\x74\145\x78\x74" => $d->id_text, "\164\x65\x78\164" => $d->text];
            goto SpQvW;
            a9Wz4:
        }
        goto XUVk2;
        ct6za:
        $this->output_json($data);
        goto KSJRG;
        SrWXt:
        $input = json_decode($this->input->post("\164\145\170\164", true));
        goto pN8wD;
        pN8wD:
        $updates = [];
        goto AVd1G;
        KSJRG:
    }
    public function hapusRunningText($id)
    {
        goto yDCZf;
        yDCZf:
        $this->db->where("\x69\x64\x5f\x74\x65\x78\x74", $id);
        goto sP4fy;
        sP4fy:
        $deleted = $this->db->delete("\x72\x75\156\156\151\x6e\147\137\164\145\170\164");
        goto YU712;
        YU712:
        $this->output_json($deleted);
        goto j3Y88;
        j3Y88:
    }
}
