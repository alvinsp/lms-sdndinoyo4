<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\x41\x53\105\120\101\124\x48") or exit("\x4e\x6f\40\144\x69\162\x65\x63\x74\x20\163\x63\x72\x69\160\x74\40\141\143\143\x65\x73\x73\x20\141\154\x6c\157\x77\145\x64");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class Dataekstra extends CI_Controller
{
    public function __construct()
    {
        goto wtmkA;
        wtmkA:
        parent::__construct();
        goto ZCBKd;
        oNTcj:
        goto rv9kP;
        goto EG8Jc;
        i9Apr:
        $this->load->model("\x44\x61\163\150\x62\157\x61\162\x64\137\x6d\x6f\144\145\154", "\144\x61\x73\x68\142\157\141\162\144");
        goto BKGJp;
        gskFq:
        show_error("\x48\141\x6e\171\141\40\x41\144\155\151\x6e\151\x73\x74\162\x61\164\x6f\x72\40\x79\141\156\x67\x20\x64\151\x62\145\x72\x69\x20\x68\141\153\x20\165\x6e\x74\165\153\40\x6d\145\x6e\x67\x61\153\x73\145\x73\40\150\141\x6c\x61\x6d\141\156\x20\x69\156\x69\x2c\x20\x3c\x61\40\150\x72\145\146\x3d\42" . base_url("\x64\x61\163\x68\142\157\141\162\144") . "\x22\x3e\x4b\145\155\x62\141\x6c\151\x20\153\x65\40\x6d\145\156\165\40\141\167\141\x6c\74\x2f\141\x3e", 403, "\101\x6b\163\x65\x73\x20\124\x65\x72\x6c\141\x72\x61\x6e\147");
        goto ntHQd;
        dEhSL:
        $this->load->model("\113\x65\x6c\141\163\x5f\x6d\x6f\144\145\154", "\153\145\x6c\141\x73");
        goto nlpls;
        Xcl1b:
        if ($this->ion_auth->is_admin()) {
            goto ZMwUi;
        }
        goto gskFq;
        BKGJp:
        $this->load->model("\x44\x72\x6f\x70\144\157\x77\156\137\x6d\157\x64\145\154", "\144\x72\157\x70\x64\157\x77\156");
        goto dEhSL;
        ZCBKd:
        if (!$this->ion_auth->logged_in()) {
            goto znm66;
        }
        goto Xcl1b;
        EG8Jc:
        znm66:
        goto A8ZaL;
        nlpls:
        $this->form_validation->set_error_delimiters('', '');
        goto jFxHa;
        gSv_A:
        $this->load->library(["\144\141\x74\141\164\141\x62\x6c\x65\x73", "\146\157\162\155\x5f\x76\x61\x6c\151\144\x61\x74\x69\157\156"]);
        goto vbM_a;
        A8ZaL:
        redirect("\141\x75\164\x68");
        goto gbsuU;
        gbsuU:
        rv9kP:
        goto gSv_A;
        ntHQd:
        ZMwUi:
        goto oNTcj;
        vbM_a:
        $this->load->model("\115\x61\163\164\145\162\x5f\x6d\x6f\144\x65\x6c", "\155\141\163\x74\x65\x72");
        goto i9Apr;
        jFxHa:
    }
    public function output_json($data, $encode = true)
    {
        goto W_rFY;
        zJzJF:
        $this->output->set_content_type("\x61\160\160\x6c\x69\143\x61\164\151\157\156\x2f\152\x73\x6f\156")->set_output($data);
        goto MDkj1;
        Zzlxg:
        uHU5K:
        goto zJzJF;
        oXhYN:
        $data = json_encode($data);
        goto Zzlxg;
        W_rFY:
        if (!$encode) {
            goto uHU5K;
        }
        goto oXhYN;
        MDkj1:
    }
    public function index()
    {
        goto ZpO0j;
        wegi_:
        $data["\x65\x6b\x73\x6b\x75\x6c\x5f\x6b\145\x6c\x61\163"] = $kelasEks;
        goto mMAuF;
        HSpDR:
        $data["\164\160\x5f\x61\143\x74\x69\x76\x65"] = $tp;
        goto Y1rFI;
        zBTBv:
        $tp = $this->dashboard->getTahunActive();
        goto f8Z4G;
        Pw3G0:
        $data = ["\x75\163\145\x72" => $user, "\x6a\165\x64\165\x6c" => "\105\153\163\x74\162\141\x6b\165\x72\x69\153\165\x6c\x65\162", "\163\x75\x62\x6a\165\x64\165\x6c" => "\x44\x61\164\141\x20\x4d\x61\164\141\x20\120\x65\x6c\141\x6a\141\162\141\x6e", "\x70\162\x6f\146\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\164\151\x6e\x67" => $this->dashboard->getSetting()];
        goto zBTBv;
        ZpO0j:
        $user = $this->ion_auth->user()->row();
        goto Pw3G0;
        Y1rFI:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto dy1qF;
        PkTwP:
        $this->load->view("\x5f\164\145\x6d\160\154\141\164\x65\x73\57\144\141\x73\x68\142\x6f\x61\162\144\x2f\x5f\x66\x6f\157\x74\x65\162");
        goto opfs0;
        GH6w1:
        $kelasEks = [];
        goto tpeVz;
        jcdoW:
        $data["\160\145\155\x62\151\x6d\x62\x69\156\147"] = $this->dropdown->getAllGuru();
        goto VITR8;
        VITR8:
        $this->load->view("\x5f\164\145\155\160\154\141\x74\145\x73\57\x64\141\x73\150\142\x6f\141\x72\144\57\x5f\x68\145\141\144\x65\x72", $data);
        goto AweP_;
        imdKh:
        $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto GH6w1;
        dy1qF:
        $data["\x73\x6d\164\137\x61\143\x74\x69\x76\x65"] = $smt;
        goto mLh5U;
        AweP_:
        $this->load->view("\155\141\163\x74\145\x72\57\x65\153\x73\x74\x72\x61\x2f\x64\x61\164\x61");
        goto PkTwP;
        tpeVz:
        foreach ($kelas as $key => $kls) {
            $kelasEks[$key] = $this->kelas->getKelasEkskul($key, $tp->id_tp, $smt->id_smt);
            aFcUK:
        }
        goto IxD02;
        IxD02:
        GyXGL:
        goto wegi_;
        xZeI8:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto HSpDR;
        mMAuF:
        $data["\153\145\x6c\x61\163"] = $kelas;
        goto jcdoW;
        f8Z4G:
        $smt = $this->dashboard->getSemesterActive();
        goto xZeI8;
        mLh5U:
        $data["\x65\x6b\x73\x6b\x75\x6c"] = $this->dropdown->getAllEkskul();
        goto imdKh;
        opfs0:
    }
    public function create()
    {
        goto dZWZg;
        dZWZg:
        $insert = ["\x6e\x61\155\141\x5f\145\x6b\163\164\162\141" => $this->input->post("\156\141\x6d\141\x5f\x65\x6b\163\164\162\141", true), "\x6b\x6f\144\145\x5f\145\x6b\163\x74\x72\x61" => $this->input->post("\x6b\157\x64\x65\137\145\x6b\x73\164\x72\x61", true)];
        goto BDEvn;
        BDEvn:
        $data = $this->master->create("\155\141\x73\x74\145\x72\137\145\153\163\164\x72\141", $insert);
        goto w35qs;
        w35qs:
        $this->output->set_content_type("\141\x70\x70\154\151\143\x61\x74\x69\157\x6e\x2f\x6a\163\157\156")->set_output($data);
        goto CC4NH;
        CC4NH:
    }
    public function read()
    {
        goto rIZfh;
        ysFOi:
        echo $this->datatables->generate();
        goto vQGix;
        L52aH:
        $this->datatables->from("\x6d\141\x73\164\x65\x72\137\x65\153\163\164\x72\141");
        goto ysFOi;
        rIZfh:
        $this->datatables->select("\x2a");
        goto L52aH;
        vQGix:
    }
    public function update()
    {
        $data = $this->master->updateEkstra();
        $this->output->set_content_type("\141\160\x70\154\x69\143\141\164\151\157\156\57\x6a\x73\x6f\156")->set_output($data);
    }
    public function delete($id)
    {
        goto qsYD2;
        kecVD:
        AmFNq:
        goto q4c1M;
        BVCDF:
        pjoGV:
        goto jAGcr;
        HcOm1:
        Pn_eE:
        goto WkLQ4;
        WkLQ4:
        $this->output_json(["\x73\x74\141\164\x75\163" => false, "\164\x6f\x74\x61\154" => "\x4d\x61\x70\x65\154\40\x64\151\x67\165\156\x61\153\x61\156\40\x64\151\x20" . count($messages) . "\40\164\141\142\145\154\72\x3c\x62\162\x3e" . implode("\74\142\x72\76", $messages)]);
        goto vrMrd;
        Gv2R_:
        foreach ($tabless as $table) {
            goto QPqQW;
            zTc7j:
            foreach ($fields as $field) {
                goto y5S7Z;
                w4cZ8:
                array_push($tables, $table);
                goto ehgVk;
                y3rqG:
                TtTpW:
                goto mb0Ly;
                ehgVk:
                GDk_x:
                goto y3rqG;
                y5S7Z:
                if (!($field->name == "\x69\144\137\x65\x6b\x73\x74\x72\x61" || $field->name == "\x65\153\163\164\x72\x61\x5f\151\144")) {
                    goto GDk_x;
                }
                goto w4cZ8;
                mb0Ly:
            }
            goto hkE5Y;
            YZG3B:
            g6iRb:
            goto yDvku;
            hkE5Y:
            VsEGR:
            goto YZG3B;
            QPqQW:
            $fields = $this->db->field_data($table);
            goto zTc7j;
            yDvku:
        }
        goto BVCDF;
        FIP3A:
        $tables = [];
        goto eB_g5;
        rPOGK:
        $this->output_json(["\163\x74\141\164\165\x73" => false, "\155\145\163\x73\141\x67\x65" => "\x45\153\x73\153\x75\154\40\147\141\x67\141\x6c\x20\144\x69\150\x61\160\x75\x73"]);
        goto vboQU;
        QUm0S:
        GPoM9:
        goto eSntw;
        q4c1M:
        if (count($messages) > 0) {
            goto Pn_eE;
        }
        goto JfK2T;
        vrMrd:
        k4j_s:
        goto ULlHx;
        eSntw:
        goto k4j_s;
        goto HcOm1;
        qsYD2:
        $messages = [];
        goto FIP3A;
        vboQU:
        goto GPoM9;
        goto NDIHC;
        jAGcr:
        $this->output_json($tables);
        goto Z09G8;
        eB_g5:
        $tabless = $this->db->list_tables();
        goto Gv2R_;
        Z09G8:
        foreach ($tables as $table) {
            goto o8Gqt;
            bBbNZ:
            $this->db->where("\x69\144\x5f\145\x6b\163\164\x72\141", $id);
            goto Ob0fP;
            wGUWu:
            if (!($num > 0)) {
                goto fihKx;
            }
            goto gcNDs;
            H98ys:
            fihKx:
            goto dvs51;
            dvs51:
            LY3B2:
            goto BIWld;
            o8Gqt:
            if (!($table != "\155\x61\163\164\x65\162\x5f\x65\x6b\x73\164\x72\x61")) {
                goto LY3B2;
            }
            goto bBbNZ;
            BIWld:
            Jcnpp:
            goto S7ebg;
            Ob0fP:
            $num = $this->db->count_all_results($table);
            goto wGUWu;
            gcNDs:
            array_push($messages, $table);
            goto H98ys;
            S7ebg:
        }
        goto kecVD;
        JfK2T:
        if ($this->master->delete("\x6d\x61\x73\164\145\x72\137\145\x6b\x73\x74\162\141", [$id], "\151\x64\x5f\x65\x6b\163\x74\x72\141")) {
            goto y3XgW;
        }
        goto rPOGK;
        oQ0rT:
        $this->output_json(["\163\164\x61\x74\165\x73" => true, "\155\145\163\x73\x61\147\145" => "\x45\153\x73\153\x75\x6c\x20\x62\x65\162\150\141\x73\x69\154\40\144\151\x68\x61\x70\x75\163"]);
        goto QUm0S;
        NDIHC:
        y3XgW:
        goto oQ0rT;
        ULlHx:
    }
    public function save()
    {
        goto lRL0y;
        dXy6N:
        $smt = $this->master->getSemesterActive()->id_smt;
        goto hXTXJ;
        EJ1Li:
        $this->output_json($res);
        goto Nu6dc;
        zMRiG:
        $tp = $this->master->getTahunActive()->id_tp;
        goto dXy6N;
        mwIwq:
        $res["\163\x74\141\x74\165\x73"] = true;
        goto nJZRl;
        lW4Qn:
        fGLVy:
        goto mwIwq;
        nJZRl:
        $res["\165\160\144\x61\164\x65"] = $update;
        goto EJ1Li;
        LczrC:
        $update = [];
        goto J3Zg8;
        J3Zg8:
        foreach ($check_kelas as $key => $kls) {
            goto LuYGP;
            cDYT3:
            if (!$check_ekskul) {
                goto yAVE0;
            }
            goto EY93A;
            hFl7s:
            UNsua:
            goto fpHo7;
            rDCu_:
            $ekstra[] = ["\145\153\163\164\162\141" => $kelaseks];
            goto dvX64;
            lvF0A:
            $update[] = $this->db->replace("\x6b\x65\154\141\x73\x5f\x65\x6b\163\164\162\x61", $ekstras);
            goto I4dMD;
            fb_k5:
            $kelaseks = $this->input->post("\x65\153\163\153\165\x6c" . $kls->kls_id . "\133" . $j . "\135", true);
            goto rDCu_;
            SDsGc:
            $ekstras = ["\151\144\137\153\x65\x6c\141\163\x5f\145\x6b\163\x74\162\141" => $kls->kls_id . $tp . $smt, "\x69\x64\x5f\x6b\x65\154\x61\x73" => $kls->kls_id, "\151\144\x5f\164\160" => $tp, "\x69\x64\x5f\163\155\164" => $smt, "\145\153\163\164\162\x61" => serialize($ekstra)];
            goto lvF0A;
            EY93A:
            $row_ekskul = count($this->input->post("\145\x6b\x73\153\165\154" . $kls->kls_id, true));
            goto zC3X_;
            I4dMD:
            yAVE0:
            goto hFl7s;
            LuYGP:
            $check_ekskul = $this->input->post("\145\153\x73\x6b\165\154" . $kls->kls_id, true);
            goto cDYT3;
            FHZtR:
            goto SAHin;
            goto ODUUK;
            dvX64:
            NofPH:
            goto JOdIw;
            ODUUK:
            SFkr7:
            goto SDsGc;
            zC3X_:
            $ekstra = [];
            goto McYv4;
            vkJ_5:
            SAHin:
            goto XDoT_;
            JOdIw:
            $j++;
            goto FHZtR;
            XDoT_:
            if (!($j <= $row_ekskul)) {
                goto SFkr7;
            }
            goto fb_k5;
            McYv4:
            $j = 0;
            goto vkJ_5;
            fpHo7:
        }
        goto lW4Qn;
        lRL0y:
        $check_kelas = json_decode(json_encode(json_decode($this->input->post("\153\145\154\x61\163", true))));
        goto zMRiG;
        hXTXJ:
        $row_insert = 0;
        goto LczrC;
        Nu6dc:
    }
    public function import($import_data = null)
    {
        goto FAwZL;
        Gdblr:
        if (!($import_data != null)) {
            goto hysAO;
        }
        goto ZG6SB;
        jx_TB:
        $this->load->view("\137\164\145\155\160\x6c\141\x74\x65\x73\x2f\x64\x61\163\150\x62\157\x61\162\144\x2f\137\150\145\x61\144\x65\162", $data);
        goto DoQsm;
        sSJrd:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto qfntA;
        qfntA:
        $data["\x73\x6d\164\137\x61\x63\x74\x69\x76\x65"] = $this->dashboard->getSemesterActive();
        goto jx_TB;
        kqAQQ:
        hysAO:
        goto LGN9z;
        DoQsm:
        $this->load->view("\155\141\163\164\x65\162\x2f\145\x6b\x73\x74\162\x61\57\x69\x6d\x70\157\x72\x74");
        goto hv_34;
        EDUzu:
        $data = ["\x75\163\145\162" => $user, "\x6a\x75\144\x75\x6c" => "\x4d\141\164\x61\40\120\145\154\141\152\x61\x72\141\x6e", "\x73\x75\x62\152\165\x64\165\x6c" => "\x49\155\160\157\x72\x74\x20\x4d\141\x74\x61\40\x50\145\154\141\x6a\x61\x72\x61\x6e", "\160\162\157\146\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\164\151\156\147" => $this->dashboard->getSetting()];
        goto Gdblr;
        FAwZL:
        $user = $this->ion_auth->user()->row();
        goto EDUzu;
        Jk6Cf:
        $data["\x74\160\137\141\143\x74\151\x76\x65"] = $this->dashboard->getTahunActive();
        goto sSJrd;
        ZG6SB:
        $data["\151\x6d\160\157\162\164"] = $import_data;
        goto kqAQQ;
        LGN9z:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto Jk6Cf;
        hv_34:
        $this->load->view("\137\x74\x65\155\160\x6c\x61\x74\145\x73\x2f\x64\141\163\150\142\x6f\141\x72\x64\x2f\x5f\x66\157\x6f\164\145\162");
        goto OU8Zk;
        OU8Zk:
    }
}
