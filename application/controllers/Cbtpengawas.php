<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtpengawas extends CI_Controller
{
    public function __construct()
    {
        goto zmL7A;
        xB7vz:
        redirect("\141\165\164\150");
        goto HnK0P;
        J8CTO:
        $this->load->model("\x44\162\x6f\x70\x64\x6f\167\x6e\x5f\155\157\144\x65\154", "\144\x72\157\x70\x64\x6f\167\156");
        goto IFkXt;
        C3Hbs:
        JsLOC:
        goto FlggP;
        zmL7A:
        parent::__construct();
        goto dGSFf;
        euz4m:
        $this->load->library(["\x64\141\x74\141\x74\141\142\x6c\145\x73", "\x66\157\x72\155\137\166\141\154\x69\x64\x61\164\x69\x6f\x6e"]);
        goto t7EXx;
        EKwGt:
        Q1mP2:
        goto xB7vz;
        JSVdB:
        if ($this->ion_auth->is_admin()) {
            goto JsLOC;
        }
        goto tdX2Q;
        IFkXt:
        $this->form_validation->set_error_delimiters('', '');
        goto Y2_Hg;
        HNV8J:
        $this->load->model("\x43\x62\164\x5f\155\157\144\145\x6c", "\x63\142\x74");
        goto J8CTO;
        t7EXx:
        $this->load->model("\x4d\x61\163\164\x65\162\137\x6d\157\144\x65\x6c", "\x6d\141\x73\164\145\162");
        goto UAbtF;
        UAbtF:
        $this->load->model("\x44\x61\x73\150\x62\x6f\141\x72\x64\x5f\x6d\157\144\x65\154", "\x64\141\163\x68\142\157\141\162\x64");
        goto HNV8J;
        HnK0P:
        gTX11:
        goto euz4m;
        FlggP:
        goto gTX11;
        goto EKwGt;
        dGSFf:
        if (!$this->ion_auth->logged_in()) {
            goto Q1mP2;
        }
        goto JSVdB;
        tdX2Q:
        show_error("\110\141\x6e\x79\x61\40\x41\x64\155\x69\156\151\x73\164\x72\141\x74\157\x72\40\171\141\x6e\147\x20\x64\x69\142\145\162\151\40\150\141\153\x20\165\156\x74\165\x6b\40\x6d\x65\x6e\x67\141\x6b\x73\145\x73\40\150\x61\154\141\x6d\x61\x6e\x20\151\156\x69\54\40\74\x61\x20\150\162\x65\146\75\42" . base_url("\x64\x61\x73\150\142\157\x61\x72\144") . "\42\x3e\113\x65\x6d\142\141\x6c\x69\40\153\x65\x20\155\145\156\165\40\x61\x77\141\x6c\74\x2f\141\x3e", 403, "\101\153\x73\145\x73\40\x54\145\x72\x6c\x61\x72\x61\x6e\x67");
        goto C3Hbs;
        Y2_Hg:
    }
    public function output_json($data, $encode = true)
    {
        goto EokAB;
        RgDYV:
        $data = json_encode($data);
        goto MWwTe;
        EokAB:
        if (!$encode) {
            goto tG1i3;
        }
        goto RgDYV;
        pib8W:
        $this->output->set_content_type("\x61\160\160\154\151\143\x61\x74\x69\x6f\156\x2f\x6a\163\157\156")->set_output($data);
        goto DcRSr;
        MWwTe:
        tG1i3:
        goto pib8W;
        DcRSr:
    }
    public function index()
    {
        goto vF30v;
        FoE7T:
        $data["\x72\x75\141\x6e\x67\x5f\x73\145\163\x69"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt);
        goto jdfhO;
        a4Voi:
        $this->load->view("\137\x74\145\x6d\160\x6c\141\x74\x65\163\x2f\144\x61\x73\150\142\x6f\141\162\x64\x2f\137\150\x65\141\x64\x65\x72", $data);
        goto QVeUv;
        uTz5i:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto Zbnka;
        EALKK:
        foreach ($id_jenis as $jenis) {
            array_push($ids, $jenis->id_jenis);
            iPYGQ:
        }
        goto ty4CV;
        Qbi0a:
        $data["\x72\165\x61\x6e\x67"] = $this->dropdown->getAllRuang();
        goto mI8Ar;
        Gbq65:
        $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt);
        goto z20mW;
        RgL0V:
        $data["\160\162\x6f\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto yRpYF;
        lDMkX:
        $data = ["\x75\163\145\162" => $user, "\x6a\x75\x64\165\x6c" => "\101\164\165\162\40\120\145\156\x67\x61\x77\141\x73", "\x73\165\142\x6a\x75\x64\165\x6c" => "\x50\x65\156\x67\x61\x77\x61\163\x20\125\152\x69\141\156\x2f\x55\154\141\156\147\141\156", "\x73\145\x74\x74\x69\x6e\x67" => $setting];
        goto T_rQF;
        HjnPD:
        $tglJadwals = [];
        goto f27FZ;
        c1FP9:
        $data["\164\x67\154\137\x6a\141\144\167\x61\x6c\x73"] = $tglJadwals;
        goto Qbi0a;
        dUnSs:
        $data["\160\145\156\x67\x61\x77\x61\163"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt);
        goto a4Voi;
        rND4D:
        $tglJadwals = $this->cbt->getAllJadwalByJenis($jenis_selected, $tp->id_tp, $smt->id_smt);
        goto aSnjZ;
        Zno3v:
        $data["\153\145\x6c\141\163"] = $kelass;
        goto RgL0V;
        T_rQF:
        $tp = $this->dashboard->getTahunActive();
        goto XwC6P;
        y36Bm:
        J0g8M:
        goto EqOh4;
        f27FZ:
        if (!($jenis_selected != null)) {
            goto J0Pkf;
        }
        goto rND4D;
        JNxuL:
        if (!(count($id_jenis) > 0)) {
            goto J0g8M;
        }
        goto EALKK;
        V2STu:
        $data["\x6a\x65\156\151\163"] = ['' => "\x62\x65\154\165\155\x20\x61\144\x61\x20\x6a\141\x64\167\141\x6c\x20\x75\x6a\x69\x61\156"];
        goto P6hdA;
        P6hdA:
        goto aP3Pg;
        goto ED9HU;
        jdfhO:
        $data["\x72\x75\x61\156\147\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []);
        goto dUnSs;
        vF30v:
        $user = $this->ion_auth->user()->row();
        goto Vhg9X;
        aSnjZ:
        foreach ($tglJadwals as $tgl => $jadwalss) {
            goto wzWMc;
            wzWMc:
            foreach ($jadwalss as $mpl => $jadwals) {
                goto Rsmpp;
                Rsmpp:
                foreach ($jadwals as $jadwal) {
                    goto vHvqJ;
                    BTDXJ:
                    uTQs5:
                    goto VjXvD;
                    VA59e:
                    RYs7o:
                    goto BTDXJ;
                    Or5lT:
                    foreach ($jadwal->bank_kelas as $kb) {
                        goto RCUPA;
                        gFp8_:
                        $jadwal->peserta[] = $klss;
                        goto zYQNi;
                        VZVl0:
                        $klss = $this->cbt->getKelasUjian($kb["\153\x65\x6c\141\163\137\x69\144"]);
                        goto gFp8_;
                        RCUPA:
                        if (!($kb["\x6b\145\154\141\x73\x5f\151\144"] != '')) {
                            goto v6uZJ;
                        }
                        goto VZVl0;
                        zYQNi:
                        v6uZJ:
                        goto puF61;
                        puF61:
                        NXxHb:
                        goto yaDcG;
                        yaDcG:
                    }
                    goto VA59e;
                    vHvqJ:
                    $jadwal->bank_kelas = unserialize($jadwal->bank_kelas);
                    goto Or5lT;
                    VjXvD:
                }
                goto c95bk;
                wxvgN:
                O4B1W:
                goto HrV31;
                c95bk:
                W7n_V:
                goto wxvgN;
                HrV31:
            }
            goto tolto;
            J0jPt:
            p7WyQ:
            goto aQO_S;
            tolto:
            cDAyi:
            goto J0jPt;
            aQO_S:
        }
        goto s9gHQ;
        z20mW:
        $ids = [];
        goto JNxuL;
        SNZdr:
        aP3Pg:
        goto t7PXl;
        ce4Qb:
        $data["\164\x70\x5f\x61\x63\164\151\166\x65"] = $tp;
        goto uTz5i;
        Vhg9X:
        $setting = $this->dashboard->getSetting();
        goto lDMkX;
        Dh7DY:
        J0Pkf:
        goto c1FP9;
        XwC6P:
        $smt = $this->dashboard->getSemesterActive();
        goto QU1MF;
        mI8Ar:
        $data["\x73\x65\x73\x69"] = $this->dropdown->getAllSesi();
        goto FoE7T;
        s9gHQ:
        KEvYn:
        goto Dh7DY;
        EqOh4:
        if (count($ids) > 0) {
            goto qTtFD;
        }
        goto V2STu;
        yRpYF:
        $data["\147\x75\x72\165\163"] = $this->dropdown->getAllGuru();
        goto Gbq65;
        QVeUv:
        $this->load->view("\143\x62\164\x2f\x70\x65\x6e\x67\141\x77\141\x73\57\x64\141\x74\141");
        goto Ziqtn;
        Zbnka:
        $data["\x73\155\164\x5f\141\x63\164\151\166\145"] = $smt;
        goto nutXi;
        v8WzQ:
        $data["\x6a\145\156\151\x73"] = $this->cbt->getAllJenisUjianByArrJenis($ids);
        goto SNZdr;
        ty4CV:
        kk0It:
        goto y36Bm;
        LIJKv:
        $data["\152\145\156\x69\x73\x5f\163\x65\154\145\x63\x74\145\x64"] = $jenis_selected;
        goto HjnPD;
        Ziqtn:
        $this->load->view("\137\x74\x65\155\x70\154\x61\164\145\x73\x2f\144\x61\163\150\x62\x6f\141\162\144\x2f\x5f\x66\x6f\157\x74\145\x72");
        goto zb_i5;
        ED9HU:
        qTtFD:
        goto v8WzQ;
        nutXi:
        $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto Zno3v;
        t7PXl:
        $jenis_selected = $this->input->get("\152\x65\156\151\x73", true);
        goto LIJKv;
        QU1MF:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto ce4Qb;
        zb_i5:
    }
    public function savePengawas()
    {
        goto oPimA;
        dHLgb:
        $data["\x73\x74\141\x74\x75\x73"] = $updated;
        goto SeTpB;
        M21cA:
        $id_tp = $tp->id_tp;
        goto eXJJh;
        K3JNo:
        foreach ($input as $d) {
            goto rL28d;
            vR_Fk:
            GckyC:
            goto R2L5g;
            fPJOY:
            $sesi = $d->sesi;
            goto Jwnlj;
            Dwmo6:
            $update = $this->db->replace("\x63\x62\x74\137\x70\145\156\x67\141\167\x61\163", $dataInsert);
            goto lqsPo;
            YiY7Z:
            $dataInsert = ["\x69\144\x5f\x70\145\156\x67\141\x77\x61\163" => $id_pengawas, "\151\x64\x5f\152\x61\144\x77\141\154" => $jadwal, "\x69\144\137\164\x70" => $id_tp, "\151\x64\137\163\155\x74" => $id_smt, "\x69\144\x5f\x72\165\141\156\x67" => $ruang, "\151\x64\x5f\163\145\x73\x69" => $sesi, "\x69\x64\137\147\x75\162\x75" => implode("\x2c", $d->guru)];
            goto Dwmo6;
            Jwnlj:
            $jadwal = $d->jadwal;
            goto pPaxr;
            pPaxr:
            $id_pengawas = $id_tp . $id_smt . $jadwal . $ruang . $sesi;
            goto YiY7Z;
            lTeNR:
            $updated++;
            goto ZEd7U;
            ZEd7U:
            uYLD0:
            goto vR_Fk;
            lqsPo:
            if (!$update) {
                goto uYLD0;
            }
            goto lTeNR;
            rL28d:
            $ruang = $d->ruang;
            goto fPJOY;
            R2L5g:
        }
        goto wWBNB;
        SeTpB:
        $this->output_json($data);
        goto YkqjO;
        qiNWx:
        $updated = 0;
        goto K3JNo;
        eXJJh:
        $id_smt = $smt->id_smt;
        goto qiNWx;
        oPimA:
        $input = json_decode($this->input->post("\x64\141\x74\141", true));
        goto cVz8g;
        wWBNB:
        bD8in:
        goto JNq_H;
        cVz8g:
        $tp = $this->dashboard->getTahunActive();
        goto eOYB9;
        eOYB9:
        $smt = $this->dashboard->getSemesterActive();
        goto M21cA;
        JNq_H:
        $data["\x65\162\x72\157\x72"] = "\x2d\55";
        goto dHLgb;
        YkqjO:
    }
}
