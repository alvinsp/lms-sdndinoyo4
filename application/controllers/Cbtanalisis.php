<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtanalisis extends CI_Controller
{
    public function __construct()
    {
        goto etqFv;
        W9wTY:
        $this->load->model("\114\x6f\x67\x5f\155\x6f\144\x65\154", "\x6c\x6f\x67\x67\x69\x6e\147");
        goto Xx5WK;
        nqb5v:
        UC8GP:
        goto juGWE;
        D0Vxz:
        redirect("\x61\165\x74\x68");
        goto VcmfK;
        PNOi_:
        $this->load->model("\103\x62\x74\x5f\155\x6f\144\145\x6c", "\x63\x62\x74");
        goto W9wTY;
        Ksfx7:
        $this->load->model("\x44\141\x73\x68\x62\x6f\141\x72\144\x5f\155\157\144\145\x6c", "\144\141\163\x68\142\x6f\x61\162\x64");
        goto PNOi_;
        VcmfK:
        cs2DN:
        goto ndvBz;
        kVdSx:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) {
            goto UC8GP;
        }
        goto eLSyO;
        ndvBz:
        $this->load->library(["\144\141\164\x61\164\x61\142\154\145\163", "\146\157\162\155\137\x76\141\x6c\151\144\141\x74\x69\x6f\x6e"]);
        goto EncvI;
        eLSyO:
        show_error("\x48\141\156\x79\141\x20\x41\144\155\x69\x6e\x69\163\x74\x72\x61\164\x6f\162\x20\171\141\156\x67\x20\144\x69\x62\145\162\151\x20\x68\x61\x6b\40\x75\156\164\x75\x6b\40\155\x65\156\x67\x61\x6b\163\x65\x73\40\150\x61\154\141\x6d\141\156\40\x69\156\151\54\40\74\x61\40\150\x72\145\146\75\42" . base_url("\144\141\x73\x68\x62\x6f\x61\162\x64") . "\x22\76\113\145\155\142\x61\x6c\151\40\x6b\145\x20\x6d\x65\156\x75\x20\x61\167\141\154\74\57\x61\76", 403, "\x41\x6b\163\x65\x73\x20\x54\145\x72\154\141\x72\141\156\147");
        goto nqb5v;
        DMe5g:
        if (!$this->ion_auth->logged_in()) {
            goto KTtBH;
        }
        goto kVdSx;
        EncvI:
        $this->load->model("\115\x61\x73\x74\145\162\x5f\x6d\157\144\x65\154", "\x6d\141\x73\164\x65\x72");
        goto Ksfx7;
        LBVDx:
        $this->form_validation->set_error_delimiters('', '');
        goto Eewjb;
        etqFv:
        parent::__construct();
        goto DMe5g;
        juGWE:
        goto cs2DN;
        goto dLVoR;
        Xx5WK:
        $this->load->model("\x44\162\157\x70\144\x6f\167\156\137\x6d\x6f\144\145\154", "\x64\x72\x6f\x70\x64\157\x77\x6e");
        goto LBVDx;
        dLVoR:
        KTtBH:
        goto D0Vxz;
        Eewjb:
    }
    public function output_json($data, $encode = true)
    {
        goto ffbM0;
        D_vZI:
        $this->output->set_content_type("\x61\160\x70\154\x69\143\x61\164\x69\157\156\57\x6a\x73\x6f\156")->set_output($data);
        goto BrNrB;
        ffbM0:
        if (!$encode) {
            goto gC2Lu;
        }
        goto e85jU;
        JAqlM:
        gC2Lu:
        goto D_vZI;
        e85jU:
        $data = json_encode($data);
        goto JAqlM;
        BrNrB:
    }
    public function index()
    {
        goto yV6Q9;
        ukXrO:
        VuBXM:
        goto Arrg4;
        fz_Dz:
        if ($this->ion_auth->is_admin()) {
            goto pcN65;
        }
        goto ZVeYO;
        feF8v:
        $data["\x6b\x6f\144\145\x6a\x61\144\x77\141\x6c"] = $this->dropdown->getAllJadwalGuru($thn_sel, $smt_sel, $guru->id_guru);
        goto AA0YY;
        VTrwk:
        $smt = $this->dashboard->getSemesterActive();
        goto oQ3DF;
        w5m0L:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto Lmztm;
        CNl7l:
        $thn_sel = $thn_sel == null ? $tp->id_tp : $thn_sel;
        goto kOdlq;
        yV6Q9:
        $user = $this->ion_auth->user()->row();
        goto bdH8t;
        Wubdj:
        if (!isset($all_soals[1])) {
            goto VuBXM;
        }
        goto Ynwbt;
        aQAJo:
        goto fZM76;
        goto gBqwa;
        xF2e2:
        $this->load->view("\143\x62\164\x2f\x61\156\x61\x6c\x69\163\151\x73\x2f\x64\x61\x74\x61");
        goto iM05C;
        LZQbY:
        $this->load->view("\x6d\x65\155\142\145\x72\163\57\147\165\162\165\57\x74\x65\155\x70\154\x61\164\x65\163\57\146\x6f\157\164\x65\x72");
        goto aQAJo;
        Lmztm:
        $data["\x73\155\164\x5f\141\x63\164\151\x76\145"] = $smt;
        goto eUST4;
        yaODn:
        $data["\153\157\144\145\x6a\141\144\167\x61\x6c"] = $this->dropdown->getAllJadwal($thn_sel, $smt_sel);
        goto j86bB;
        grHzx:
        $smt_sel = $this->input->get("\163\x6d\164");
        goto CNl7l;
        Arrg4:
        $data["\x69\156\146\x6f"] = $info;
        goto XSN1S;
        ZF5pB:
        $nguru[$guru->id_guru] = $guru->nama_guru;
        goto v1Qu0;
        v1Qu0:
        $data["\147\165\x72\165"] = $guru;
        goto feF8v;
        AMYPE:
        mOZFm:
        goto fz_Dz;
        gHEmA:
        $thn_sel = $this->input->get("\164\150\x6e");
        goto grHzx;
        XSN1S:
        $data["\163\157\x61\x6c\163"] = $all_soals;
        goto dpXHy;
        bdH8t:
        $data = ["\165\163\145\x72" => $user, "\152\165\144\165\154" => "\x41\x6e\141\154\151\163\141\40\123\157\141\154", "\x73\165\142\x6a\165\x64\x75\154" => "\101\x6e\141\154\x69\163\x61\x20\x53\x6f\141\154\40\x55\152\x69\141\x6e", "\x73\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()];
        goto gf_V7;
        W_MQF:
        duU2u:
        goto ukXrO;
        qoXxP:
        $jawabans_siswa = [];
        goto b0u5r;
        kOdlq:
        $smt_sel = $smt_sel == null ? $smt->id_smt : $smt_sel;
        goto TIdPR;
        AA0YY:
        $this->load->view("\x6d\145\155\x62\145\162\x73\57\147\x75\x72\165\57\x74\x65\155\160\154\x61\x74\145\163\57\x68\145\x61\x64\145\x72", $data);
        goto bEUb9;
        Ynwbt:
        foreach ($all_soals[1] as $no => $soal) {
            goto d81Zm;
            d81Zm:
            $soal->jawaban_siswa = [];
            goto aUlN5;
            kktsH:
            goto D3wwo;
            goto MgTME;
            MqJcf:
            $daya_pembeda = 0;
            goto tYUO1;
            UQhPf:
            $bagi_daya = $bagi > 0 ? $bagi : 1;
            goto xny5n;
            uwP0A:
            $soal->jumlah_salah = 0;
            goto pxlXM;
            RULi6:
            if ($kesukaran >= 0.7) {
                goto gs4IM;
            }
            goto ZJwYs;
            r_Val:
            wJ_9o:
            goto mmSpa;
            ORApZ:
            $soal->total_siswa = $total_siswa;
            goto vMc6D;
            tYUO1:
            cu8aM:
            goto exwMV;
            f7kkU:
            goto YPFxw;
            goto geI0p;
            H3J_H:
            $benar = $soal->jumlah_benar;
            goto q9tLt;
            QMKt7:
            if ($yng_benar_golonganatas != 0 && $yng_benar_golonganbawah == 0) {
                goto kaBFM;
            }
            goto SHj1J;
            geI0p:
            QWv9p:
            goto WfmZS;
            XJBPV:
            $soal->nilai_valid = $pearson;
            goto XrA_L;
            vMc6D:
            $soal->benar_atas = $yng_benar_golonganatas;
            goto HV6k_;
            dI1sm:
            $jwbn_siswa = isset($jawabans_siswa[1][$no]) && isset($jawabans_siswa[1][$no]) ? $jawabans_siswa[1][$no] : [];
            goto vAZFx;
            pA3tr:
            O7f0f:
            goto MqJcf;
            kJvIV:
            $pos_b = $bagi;
            goto r8GK3;
            eLTSl:
            $daya_pembeda = $yng_benar_golonganatas / $bagi_daya;
            goto vicc_;
            XrA_L:
            $soal->table_r = $this->nilaiSignifikansi($total_siswa);
            goto zODM3;
            vicc_:
            gSL2l:
            goto kktsH;
            et4Jb:
            goto VIiaA;
            goto QWMPx;
            HV6k_:
            $soal->benar_bawah = $yng_benar_golonganbawah;
            goto vDbnO;
            q9tLt:
            $salah = $soal->jumlah_salah;
            goto axufT;
            Zo2dS:
            YPFxw:
            goto xr4CL;
            vAZFx:
            foreach ($jwbn_siswa as $id => $jawab_siswa) {
                goto r9QIz;
                ELvWQ:
                $soal->jumlah_benar++;
                goto P5Yvc;
                glqKl:
                hf8K3:
                goto HTUDI;
                vFf6s:
                wF3wP:
                goto o_ZX4;
                RzXIi:
                TcT4q:
                goto k8Ai0;
                vmYfg:
                NnRyI:
                goto nAnuK;
                DNP09:
                if ($jawab_siswa == "\x41") {
                    goto hf8K3;
                }
                goto eGEC3;
                wSk1s:
                if ($jawab_siswa == "\x44") {
                    goto mISPF;
                }
                goto sA7h2;
                W4HHo:
                goto s1dNN;
                goto vFf6s;
                EVUHV:
                s1dNN:
                goto jG5lB;
                Zfa2v:
                goto s1dNN;
                goto vmYfg;
                Bdb_x:
                $soal->jawaban_siswa["\x6a\141\x77\x61\x62\x5f\x64"][$id] = $jawab_siswa;
                goto Zv80O;
                edwsy:
                array_push($x, 0);
                goto cS44z;
                P5Yvc:
                array_push($x, 1);
                goto YWSuf;
                r9QIz:
                $total_siswa++;
                goto JoONP;
                mouET:
                goto s1dNN;
                goto uWcwh;
                nAnuK:
                $soal->jawaban_siswa["\152\141\x77\x61\142\x5f\142"][$id] = $jawab_siswa;
                goto W4HHo;
                JoONP:
                if ($jawab_siswa == $soal->jawaban) {
                    goto P2Wci;
                }
                goto aY01J;
                k8Ai0:
                $soal->jawaban_siswa["\x6a\x61\167\141\142\x5f\x65"][$id] = $jawab_siswa;
                goto EVUHV;
                bIXG2:
                P2Wci:
                goto ELvWQ;
                ejfAy:
                if ($jawab_siswa == "\x43") {
                    goto wF3wP;
                }
                goto wSk1s;
                YWSuf:
                gNUhR:
                goto DNP09;
                cS44z:
                goto gNUhR;
                goto bIXG2;
                aY01J:
                $soal->jumlah_salah++;
                goto edwsy;
                sA7h2:
                if ($jawab_siswa == "\x45") {
                    goto TcT4q;
                }
                goto k3MBD;
                uWcwh:
                mISPF:
                goto Bdb_x;
                HTUDI:
                $soal->jawaban_siswa["\x6a\141\x77\141\x62\137\x61"][$id] = $jawab_siswa;
                goto Zfa2v;
                Zv80O:
                goto s1dNN;
                goto RzXIi;
                k3MBD:
                goto s1dNN;
                goto glqKl;
                eGEC3:
                if ($jawab_siswa == "\x42") {
                    goto NnRyI;
                }
                goto ejfAy;
                jG5lB:
                oQ7c6:
                goto Dpk9v;
                o_ZX4:
                $soal->jawaban_siswa["\x6a\x61\x77\x61\x62\137\143"][$id] = $jawab_siswa;
                goto mouET;
                Dpk9v:
            }
            goto YNj7y;
            PP__r:
            $yng_benar_golonganatas = 0;
            goto ljWfR;
            keOJ3:
            Nk6GI:
            goto hISu3;
            FFofm:
            goto cu8aM;
            goto pA3tr;
            fBwnj:
            $kesukaran = round($benar / $jml_siswa, 2);
            goto RULi6;
            pxlXM:
            $total_siswa = 0;
            goto ebmP2;
            CvBmt:
            $soal->status_kesukaran = $status_soal;
            goto RCe9X;
            g9EVg:
            $soal->jumlah_benar = 0;
            goto uwP0A;
            rTTU3:
            $pos_a = 0;
            goto kJvIV;
            cs3PP:
            $status_soal = "\155\x75\x64\141\150";
            goto bxvxA;
            SHj1J:
            if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah == 0) {
                goto O7f0f;
            }
            goto X6GBX;
            tmYL6:
            if (!($jml_siswa > 0)) {
                goto HGyD2;
            }
            goto fBwnj;
            vDbnO:
            $pearson = $this->pearson($x, $y);
            goto XJBPV;
            gGVE2:
            $status_soal = "\163\145\x64\141\156\x67";
            goto Zg_gT;
            YNj7y:
            DloOv:
            goto H3J_H;
            BvZG4:
            goto Nk6GI;
            goto CK0PT;
            RCe9X:
            $cek = $jml_siswa % 2;
            goto dkHDr;
            aUlN5:
            $soal->skor_siswa = [];
            goto g9EVg;
            Kx6ws:
            $daya_pembeda = 0 - $yng_benar_golonganbawah / $bagi_daya;
            goto fNQ2T;
            ex282:
            $jml_siswa--;
            goto HT7y4;
            bxvxA:
            jgVc5:
            goto XaTl2;
            CK0PT:
            dTxq3:
            goto pwA0C;
            YdkWt:
            foreach ($nilai_pg as $id => $nilai) {
                goto we_zM;
                ffYLz:
                $no++;
                goto kxSZ1;
                M52tP:
                scdK7:
                goto ffYLz;
                qnuAU:
                $yng_benar_golonganatas++;
                goto XMe1G;
                S_8rU:
                TSgTy:
                goto t6Lh6;
                ngux7:
                $yng_benar_golonganbawah++;
                goto CKzzq;
                W2GYw:
                if ($no <= $bagi) {
                    goto TSgTy;
                }
                goto mkX8I;
                kxSZ1:
                YJfJ4:
                goto p8OTw;
                we_zM:
                array_push($y, $nilai->pg_benar);
                goto dyNK0;
                CKzzq:
                jkfNm:
                goto Y_cCa;
                C9BbQ:
                $siswa_menjawab = $jwbn_siswa[$id];
                goto W2GYw;
                t6Lh6:
                if (!($siswa_menjawab == $soal->jawaban)) {
                    goto HkHpN;
                }
                goto qnuAU;
                mkX8I:
                if (!($siswa_menjawab == $soal->jawaban)) {
                    goto jkfNm;
                }
                goto ngux7;
                BbcMs:
                JEM3p:
                goto M52tP;
                dyNK0:
                if (!isset($jwbn_siswa[$id])) {
                    goto scdK7;
                }
                goto C9BbQ;
                Y_cCa:
                goto JEM3p;
                goto S_8rU;
                XMe1G:
                HkHpN:
                goto BbcMs;
                p8OTw:
            }
            goto u0L0S;
            Zg_gT:
            VIiaA:
            goto YgoL_;
            YgoL_:
            goto jgVc5;
            goto GWd4x;
            A0_4e:
            $status_soal = '';
            goto tmYL6;
            fNQ2T:
            D3wwo:
            goto tYY15;
            axufT:
            $jml_siswa = $total_siswa;
            goto rHDsk;
            hISu3:
            goto eMsYb;
            goto r_Val;
            xr4CL:
            PYrmD:
            goto K2GG5;
            X6GBX:
            $daya_pembeda = $yng_benar_golonganatas / $bagi_daya - $yng_benar_golonganbawah / $bagi_daya;
            goto FFofm;
            ZJwYs:
            if ($kesukaran >= 0.3) {
                goto WAqm5;
            }
            goto kpXl0;
            kpXl0:
            $status_soal = "\x73\165\153\141\x72";
            goto et4Jb;
            HjLZ3:
            if ($daya_pembeda >= 0.4) {
                goto wJ_9o;
            }
            goto mYavv;
            mmSpa:
            $soal->status_daya = "\102\x61\x69\x6b";
            goto I05ER;
            tYY15:
            $soal->daya_pembeda = $daya_pembeda;
            goto yVRW5;
            zODM3:
            $validitas = $this->nilaiSignifikansi($total_siswa) <= $pearson ? "\x56\x61\x6c\x69\144" : "\124\x69\x64\141\x6b\40\166\x61\x6c\x69\144";
            goto IMKuo;
            rHDsk:
            $kesukaran = 0;
            goto A0_4e;
            QWMPx:
            WAqm5:
            goto gGVE2;
            z00Vn:
            $bagi = $jml_siswa / 2;
            goto rTTU3;
            ljWfR:
            $yng_benar_golonganbawah = 0;
            goto qVopo;
            WfmZS:
            $soal->status_daya = "\102\x61\x69\153\x20\123\145\x6b\141\x6c\x69";
            goto Zo2dS;
            yVRW5:
            if ($daya_pembeda >= 0.7) {
                goto QWv9p;
            }
            goto HjLZ3;
            XaTl2:
            HGyD2:
            goto qeTn8;
            ebmP2:
            $x = [];
            goto dI1sm;
            GWd4x:
            gs4IM:
            goto cs3PP;
            IxF1t:
            $soal->status_daya = "\112\x65\154\x65\x6b";
            goto BvZG4;
            HT7y4:
            ji1dQ:
            goto z00Vn;
            u0L0S:
            CGR_N:
            goto ORApZ;
            MgTME:
            yCkzG:
            goto Kx6ws;
            dkHDr:
            if (!($cek == 1)) {
                goto ji1dQ;
            }
            goto ex282;
            mYavv:
            if ($daya_pembeda >= 0.2) {
                goto dTxq3;
            }
            goto IxF1t;
            qVopo:
            $no = 1;
            goto YdkWt;
            IMKuo:
            $soal->status_valid = $validitas;
            goto UQhPf;
            xny5n:
            if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah != 0) {
                goto yCkzG;
            }
            goto QMKt7;
            ShCYM:
            kaBFM:
            goto eLTSl;
            exwMV:
            goto gSL2l;
            goto ShCYM;
            r8GK3:
            $y = [];
            goto PP__r;
            qeTn8:
            $soal->tingkat_kesukaran = $kesukaran;
            goto CvBmt;
            pwA0C:
            $soal->status_daya = "\x43\165\153\x75\x70";
            goto keOJ3;
            I05ER:
            eMsYb:
            goto f7kkU;
            K2GG5:
        }
        goto W_MQF;
        iM05C:
        $this->load->view("\137\164\145\x6d\160\x6c\141\164\x65\x73\x2f\x64\x61\x73\150\142\x6f\141\x72\144\57\137\x66\x6f\x6f\x74\x65\162");
        goto nN5OO;
        dpXHy:
        $data["\x6e\x69\x6c\141\x69"] = $nilai_pg;
        goto AMYPE;
        oQ3DF:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto FsYiI;
        ZVeYO:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $thn_sel, $smt_sel);
        goto ZF5pB;
        nN5OO:
        fZM76:
        goto Pgxyc;
        bEUb9:
        $this->load->view("\x63\142\164\x2f\x61\x6e\141\154\x69\x73\x69\x73\57\144\141\x74\141");
        goto LZQbY;
        D2ej7:
        $nilai_pg = $this->cbt->getAllNilaiSiswa($jadwal);
        goto SASnZ;
        pXoPr:
        zJiYc:
        goto D2ej7;
        cEKGQ:
        $data["\163\x6d\x74\x5f\x73\x65\154\145\143\164\x65\x64"] = $smt_sel;
        goto VoDQC;
        gf_V7:
        $tp = $this->dashboard->getTahunActive();
        goto VTrwk;
        Qsqao:
        $info = $this->cbt->getJadwalById($jadwal);
        goto HNBYR;
        FsYiI:
        $data["\x74\x70\x5f\x61\143\164\151\166\x65"] = $tp;
        goto w5m0L;
        VoDQC:
        $data["\152\x61\x64\167\141\x6c\x5f\x73\145\154\145\x63\164\145\144"] = $jadwal;
        goto PHg7R;
        HNBYR:
        $all_jawaban = $this->cbt->getJawabanByBank($info->id_bank);
        goto qoXxP;
        gBqwa:
        pcN65:
        goto VH8Fk;
        VH8Fk:
        $data["\x70\x72\x6f\x66\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto yaODn;
        CAWz6:
        foreach ($all_jawaban as $jawaban_siswa) {
            goto GtKPd;
            NbvIt:
            $jawabans_siswa[$jawaban_siswa->jenis_soal][$jawaban_siswa->nomor_soal][$jawaban_siswa->id_siswa] = $jawaban_siswa->jawaban_siswa;
            goto rBwlz;
            rBwlz:
            sB105:
            goto KEcAP;
            GtKPd:
            array_push($ids, $jawaban_siswa->id_siswa);
            goto NbvIt;
            KEcAP:
        }
        goto pXoPr;
        SASnZ:
        $all_soals = $this->cbt->getSoalByBank($info->id_bank);
        goto Wubdj;
        eUST4:
        $jadwal = $this->input->get("\x6a\141\144\x77\x61\x6c");
        goto gHEmA;
        j86bB:
        $this->load->view("\x5f\x74\145\155\160\154\x61\164\145\163\57\x64\x61\163\150\142\157\x61\162\144\57\x5f\150\145\141\144\145\x72", $data);
        goto xF2e2;
        PHg7R:
        if (!($jadwal != null)) {
            goto mOZFm;
        }
        goto Qsqao;
        b0u5r:
        $ids = [];
        goto CAWz6;
        TIdPR:
        $data["\164\160\137\x73\145\154\145\x63\x74\145\144"] = $thn_sel;
        goto cEKGQ;
        Pgxyc:
    }
    private function pearson($x, $y)
    {
        goto vDbin;
        cVQ2u:
        if (!($cx > $cy)) {
            goto OSVzP;
        }
        goto X1KfT;
        DzZqj:
        if (!($cx < $cy)) {
            goto c_d61;
        }
        goto nT9iP;
        DqCZn:
        goto bdUsc;
        goto Hjgvi;
        WMTix:
        $b = sqrt($bx * $by);
        goto WatHL;
        aSJLb:
        return $ret;
        goto xOJNT;
        ia2Vc:
        $ys = array_sum($y) / count($y);
        goto nzDrQ;
        MTnG0:
        $i++;
        goto DqCZn;
        vDbin:
        $cx = count($x);
        goto oNlNt;
        Gfn8R:
        mhyqz:
        goto OraGv;
        MU_zT:
        bdUsc:
        goto X2Hum;
        VrVB6:
        $i++;
        goto Q2Mmi;
        J1jtp:
        EqSl7:
        goto WMTix;
        ScfaO:
        $i = 0;
        goto b0tXM;
        QJI87:
        $xs = array_sum($x) / count($x);
        goto ia2Vc;
        yw4_S:
        $yr = $y[$i] - $ys;
        goto JntP_;
        OraGv:
        $i++;
        goto eIkHs;
        eIkHs:
        goto y2Ego;
        goto wmrFX;
        bIEKf:
        y2Ego:
        goto QQlsU;
        JntP_:
        $a += $xr * $yr;
        goto NvOxm;
        YFwYR:
        moacm:
        goto aSJLb;
        H1_kB:
        $i = 0;
        goto MU_zT;
        PAJuC:
        $bx = 0;
        goto u3T0D;
        bUnLN:
        $xr = $x[$i] - $xs;
        goto yw4_S;
        ru5aj:
        array_pop($y);
        goto SUBEC;
        sSMgB:
        $x = array_values($x);
        goto Jax_v;
        Huimi:
        return -1;
        goto P7lJQ;
        smYR8:
        if (!(count($x) !== count($y))) {
            goto ZTMYT;
        }
        goto pI80L;
        nT9iP:
        $d = $cy - $cx;
        goto H1_kB;
        ocIMN:
        $i = 0;
        goto bIEKf;
        Q2Mmi:
        goto d3zZP;
        goto J1jtp;
        QQlsU:
        if (!($i < $d)) {
            goto HUV4X;
        }
        goto I4NWn;
        KeujU:
        m44t3:
        goto VrVB6;
        I4NWn:
        array_pop($x);
        goto Gfn8R;
        b0tXM:
        d3zZP:
        goto EUXwA;
        SUBEC:
        m1HwG:
        goto MTnG0;
        NvOxm:
        $bx += pow($xr, 2);
        goto GQNsd;
        wmrFX:
        HUV4X:
        goto vwMwV;
        nzDrQ:
        $a = 0;
        goto PAJuC;
        GQNsd:
        $by += pow($yr, 2);
        goto KeujU;
        Vkq5l:
        if (!($cx === 0 || $cy === 0)) {
            goto P3YyO;
        }
        goto Huimi;
        X1KfT:
        $d = $cx - $cy;
        goto ocIMN;
        NKhtJ:
        if (!($b > 0)) {
            goto moacm;
        }
        goto WQcss;
        oNlNt:
        $cy = count($y);
        goto Vkq5l;
        Hjgvi:
        IG8cU:
        goto bdGWB;
        WQcss:
        $ret = $a / $b;
        goto YFwYR;
        EUXwA:
        if (!($i < count($x))) {
            goto EqSl7;
        }
        goto bUnLN;
        Jax_v:
        $y = array_values($y);
        goto QJI87;
        tJoPP:
        ZTMYT:
        goto sSMgB;
        pI80L:
        return -1;
        goto tJoPP;
        X2Hum:
        if (!($i < $d)) {
            goto IG8cU;
        }
        goto ru5aj;
        u3T0D:
        $by = 0;
        goto ScfaO;
        WatHL:
        $ret = -1;
        goto NKhtJ;
        bdGWB:
        c_d61:
        goto cVQ2u;
        P7lJQ:
        P3YyO:
        goto DzZqj;
        vwMwV:
        OSVzP:
        goto smYR8;
        xOJNT:
    }
    public function getNilaiKelas()
    {
        goto ROJ9B;
        N4lRX:
        $arrDur = [];
        goto o3UUb;
        EpoHY:
        $this->output_json($data);
        goto OS46n;
        VVHMN:
        $data["\x6a\x61\x77\141\x62\x61\x6e"] = $arrDur;
        goto gjNhC;
        o3UUb:
        foreach ($siswas as $siswa) {
            goto og9OT;
            ysBMG:
            CDkQd:
            goto BTuQP;
            wYID5:
            $i++;
            goto QuN2n;
            TwoB1:
            mpUd8:
            goto V3O03;
            KAnQa:
            $arrJawab_essai = [];
            goto LZtqW;
            Sl19t:
            $arrJawab_essai[$siswa->id_siswa][] = $jawaban;
            goto ysBMG;
            a4TXz:
            if (!($j < $info->tampil_esai)) {
                goto QndQj;
            }
            goto Yjj6x;
            F_YKe:
            $j = 0;
            goto MCg1T;
            LvYM3:
            $j++;
            goto ohZow;
            I1LGY:
            if (!($i < $info->tampil_pg)) {
                goto oCmCw;
            }
            goto hiG0n;
            gBIO7:
            yfND6:
            goto wYID5;
            Yjj6x:
            $jawaban = $this->cbt->getJawabanSiswa($siswa->id_siswa . "\x30" . $jadwal . $info->id_bank . 2 . ($j + 1));
            goto EKAjf;
            ohZow:
            goto QNk3G;
            goto Nc6mR;
            LZtqW:
            $i = 0;
            goto XM2RS;
            XM2RS:
            rtBi7:
            goto I1LGY;
            Nc6mR:
            QndQj:
            goto JB0JV;
            Qj7RY:
            $arrJawab_essai[$siswa->id_siswa][] = array("\151\144\x5f\152\141\x77\x61\x62\x61\x6e" => 0, "\152\141\x77\141\142\141\x6e" => '', "\x6a\141\167\141\142\x61\x6e\137\142\x65\156\141\162" => '', "\153\x6f\162\x65\x6b\x73\x69" => 0);
            goto KEdrE;
            Xuioc:
            bmXYS:
            goto Sl19t;
            MCg1T:
            QNk3G:
            goto a4TXz;
            DcaKO:
            oCmCw:
            goto F_YKe;
            og9OT:
            $arrJawab_pg = [];
            goto KAnQa;
            hiG0n:
            $arrJawab_pg[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . "\60" . $jadwal . $info->id_bank . 1 . ($i + 1));
            goto gBIO7;
            JB0JV:
            $jawab_essai = isset($arrJawab_essai[$siswa->id_siswa]) ? $arrJawab_essai[$siswa->id_siswa] : [];
            goto qTz1p;
            BTuQP:
            MXoYF:
            goto LvYM3;
            EKAjf:
            if ($jawaban != null) {
                goto bmXYS;
            }
            goto Qj7RY;
            QuN2n:
            goto rtBi7;
            goto DcaKO;
            KEdrE:
            goto CDkQd;
            goto Xuioc;
            qTz1p:
            $arrDur[$siswa->id_siswa] = ["\144\x75\x72" => $this->cbt->getDurasiSiswa($siswa->id_siswa . "\60" . $jadwal), "\x6a\x61\167\x61\142\x5f\x70\x67" => $arrJawab_pg[$siswa->id_siswa], "\152\x61\x77\141\142\x5f\145\x73\x73\141\151" => $jawab_essai, "\154\x6f\147" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)];
            goto TwoB1;
            V3O03:
        }
        goto xp1CF;
        pW8_N:
        $sesi = $this->input->get("\163\x65\163\151");
        goto W13xz;
        dq7La:
        $tp = $this->dashboard->getTahunActive();
        goto StFdr;
        nKG92:
        $data["\163\151\163\167\141"] = $siswas;
        goto VVHMN;
        ROJ9B:
        $kelas = $this->input->get("\153\x65\154\141\163");
        goto pW8_N;
        W13xz:
        $jadwal = $this->input->get("\x6a\x61\144\x77\141\x6c");
        goto dq7La;
        StFdr:
        $smt = $this->dashboard->getSemesterActive();
        goto Nvecc;
        gjNhC:
        $data["\151\x6e\x66\x6f"] = $info;
        goto EpoHY;
        xp1CF:
        J95gG:
        goto nKG92;
        l8sf1:
        $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas);
        goto N4lRX;
        Nvecc:
        $info = $this->cbt->getJadwalById($jadwal, $sesi);
        goto l8sf1;
        OS46n:
    }
    public function getJadwalUjianByJadwal()
    {
        goto GAgGi;
        sEzON:
        $tp = $this->input->get("\x74\x68\156");
        goto jHqPI;
        IbaW5:
        $kelas = unserialize($info->bank_kelas);
        goto QqKnx;
        QqKnx:
        $kelases = [];
        goto o1Hho;
        TAKfx:
        $this->output_json($kelases);
        goto qsojt;
        JdwkM:
        $info = $this->cbt->getJadwalById($jadwal);
        goto IbaW5;
        oQ_6w:
        HS1wV:
        goto TAKfx;
        jHqPI:
        $smt = $this->input->get("\x73\155\x74");
        goto JdwkM;
        o1Hho:
        foreach ($kelas as $key => $value) {
            $kelases[$value["\x6b\145\154\x61\x73\x5f\151\144"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\153\145\154\141\163\137\x69\x64"]);
            j_qdu:
        }
        goto oQ_6w;
        GAgGi:
        $jadwal = $this->input->get("\x6a\141\144\167\x61\x6c");
        goto sEzON;
        qsojt:
    }
    public function kalkulasi()
    {
        goto KdJlg;
        AVAjT:
        $update = $this->generateNilaiUjian($jadwal);
        goto zlPAs;
        KdJlg:
        $jadwal = $this->input->get("\x6a\141\x64\x77\141\x6c");
        goto AVAjT;
        zlPAs:
        $this->output_json($update);
        goto iHlHE;
        iHlHE:
    }
    public function generateNilaiUjian($jadwal)
    {
        goto qEpzd;
        uGASn:
        $kelases = [];
        goto iaN5y;
        iaN5y:
        foreach ($kelas_bank as $key => $value) {
            array_push($kelases, $value["\153\x65\x6c\141\x73\x5f\151\144"]);
            SYqJi:
        }
        goto CXG2Y;
        EKvZF:
        return $update;
        goto gBMVf;
        a7nkg:
        $jawabans_siswa = [];
        goto Ow9gr;
        rxcTD:
        $bagi_isian = $info->tampil_isian / 100;
        goto LoQaJ;
        JsFje:
        N5Rjt:
        goto Y47Qd;
        omaGl:
        $soal = [];
        goto a7nkg;
        F_sWh:
        $bagi_pg2 = $info->tampil_kompleks / 100;
        goto opPHN;
        nnGwp:
        $jawabans = $this->cbt->getJawabanByBank($info->id_bank);
        goto omaGl;
        T4IpV:
        $bobot_pg = $info->bobot_pg / 100;
        goto F_sWh;
        GjbkC:
        $bagi_pg = $info->tampil_pg / 100;
        goto T4IpV;
        opPHN:
        $bobot_pg2 = $info->bobot_kompleks / 100;
        goto pM5VJ;
        JcOTC:
        $bobot_essai = $info->bobot_esai / 100;
        goto hjRhv;
        ydRAl:
        kdAdn:
        goto Eq1wR;
        Eq1wR:
        $insets = [];
        goto V0WYr;
        LoQaJ:
        $bobot_isian = $info->bobot_isian / 100;
        goto uigcS;
        V0WYr:
        foreach ($siswas as $siswa) {
            goto nd442;
            u_d24:
            foreach ($jawaban_jodoh as $num => $jawab_jod) {
                goto X_5Wy;
                v4yYU:
                $arrSoal = $jawab_jod->jawaban_benar->jawaban;
                goto QHge0;
                yie3D:
                $arrJwbSoal = [];
                goto EkK6E;
                ky0H0:
                foreach ($arrJawab as $kolJawab) {
                    goto G55sn;
                    tZl2U:
                    array_push($arrJwbJawab, $jwbs);
                    goto d6kff;
                    G55sn:
                    $jwbs = new stdClass();
                    goto uK0Pi;
                    d6kff:
                    YDj9W:
                    goto SI0W5;
                    uK0Pi:
                    foreach ($kolJawab as $po => $kol) {
                        goto g0YHL;
                        oQQ8I:
                        $sub = $headJawab[$po];
                        goto hW5r4;
                        mZT1F:
                        h7RL8:
                        goto PPBQX;
                        vgBdq:
                        J3Z0i:
                        goto mZT1F;
                        g0YHL:
                        if (!($kol == "\61")) {
                            goto J3Z0i;
                        }
                        goto oQQ8I;
                        hW5r4:
                        $jwbs->subtitle[] = $sub;
                        goto vgBdq;
                        PPBQX:
                    }
                    goto VF6t9;
                    VF6t9:
                    fLDW6:
                    goto tZl2U;
                    SI0W5:
                }
                goto bsOGt;
                ZGQ1o:
                $otomatis_jod = $jawab_jod->nilai_otomatis;
                goto JzoRF;
                EkK6E:
                $items = 0;
                goto vYqV1;
                TfUM7:
                $benar_jod += 1 / $items * $item_benar;
                goto ZGQ1o;
                PMwrF:
                $arrJawab = $jawab_jod->jawaban_siswa->jawaban;
                goto ktD0E;
                pSzMA:
                $item_salah = 0;
                goto ucMP3;
                TfRU1:
                $arrJwbJawab = [];
                goto ky0H0;
                X_5Wy:
                $skor_koreksi_jod += $jawab_jod->nilai_koreksi;
                goto v4yYU;
                Vctwh:
                nzdug:
                goto PMwrF;
                vYqV1:
                foreach ($arrSoal as $kolSoal) {
                    goto DNrzc;
                    DNrzc:
                    $jwb = new stdClass();
                    goto n2mo7;
                    htQGp:
                    xe46T:
                    goto nkHQs;
                    n2mo7:
                    foreach ($kolSoal as $pos => $kol) {
                        goto m8dBg;
                        m8dBg:
                        if (!($kol == "\61")) {
                            goto fLSa4;
                        }
                        goto F1DPY;
                        LCltk:
                        yRhAT:
                        goto T870E;
                        F1DPY:
                        $jwb->subtitle[] = $headSoal[$pos];
                        goto UN6XU;
                        FrRUJ:
                        fLSa4:
                        goto LCltk;
                        UN6XU:
                        $items++;
                        goto FrRUJ;
                        T870E:
                    }
                    goto htQGp;
                    nkHQs:
                    $jwb->title = array_shift($kolSoal);
                    goto q5B4U;
                    w7vT0:
                    TPdGE:
                    goto FiI5S;
                    q5B4U:
                    array_push($arrJwbSoal, $jwb);
                    goto w7vT0;
                    FiI5S:
                }
                goto Vctwh;
                QHge0:
                $headSoal = array_shift($arrSoal);
                goto yie3D;
                ucMP3:
                foreach ($arrJwbJawab as $p => $ajjs) {
                    goto GiEOn;
                    W4yRA:
                    M8Zel:
                    goto VLViz;
                    GiEOn:
                    foreach ($ajjs->subtitle as $pp => $ajs) {
                        goto GBH0B;
                        crCNr:
                        jt_JV:
                        goto kwWYs;
                        osgnl:
                        CGiP8:
                        goto azrFI;
                        nxsGQ:
                        $item_salah++;
                        goto bEHAF;
                        bEHAF:
                        goto McK1L;
                        goto crCNr;
                        LZlLX:
                        McK1L:
                        goto osgnl;
                        GBH0B:
                        if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) {
                            goto jt_JV;
                        }
                        goto nxsGQ;
                        kwWYs:
                        $item_benar++;
                        goto LZlLX;
                        azrFI:
                    }
                    goto W4yRA;
                    VLViz:
                    yKxY0:
                    goto LgTUd;
                    LgTUd:
                }
                goto qwpcT;
                bsOGt:
                bYL6J:
                goto c8vC2;
                c8vC2:
                $item_benar = 0;
                goto pSzMA;
                ktD0E:
                $headJawab = array_shift($arrJawab);
                goto TfRU1;
                JzoRF:
                RH7BH:
                goto P8K3E;
                qwpcT:
                zYU4u:
                goto TfUM7;
                P8K3E:
            }
            goto ZmyFq;
            UJymB:
            $skor_koreksi_pg2 = 0.0;
            goto mbIfW;
            KlLnP:
            if (!($info->tampil_jodohkan > 0)) {
                goto MqwMx;
            }
            goto n4p8U;
            i0Xuy:
            $benar_is = 0;
            goto Sq7t6;
            wSW3k:
            if (!($info->tampil_pg > 0)) {
                goto tp2zc;
            }
            goto byf8X;
            mbIfW:
            $otomatis_pg2 = 0;
            goto TDCot;
            xzMwU:
            $insert["\x70\147\137\x62\145\156\141\x72"] = $benar_pg;
            goto JZ5vb;
            tp2_N:
            stgyR:
            goto Hpzgc;
            GXrDP:
            $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\x31"] : [];
            goto ry3d7;
            ErOVZ:
            $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\63"]);
            goto wLd50;
            ry3d7:
            $benar_pg = 0;
            goto k8XrU;
            tjEEo:
            P_Ks7:
            goto fpo30;
            byf8X:
            if (!(count($jawaban_pg) > 0)) {
                goto bCAZs;
            }
            goto INphZ;
            skltA:
            $insert["\x69\144\x5f\x6e\151\x6c\x61\151"] = $siswa->id_siswa . "\x30" . $jadwal;
            goto gErms;
            Hezfg:
            $input_jod = $nilai_input->jodohkan_nilai;
            goto XHqww;
            Sq7t6:
            $skor_koreksi_is = 0.0;
            goto iD1Rc;
            IfP2C:
            Tzsep:
            goto tp2_N;
            gErms:
            $insert["\x69\144\137\x73\x69\163\167\x61"] = $siswa->id_siswa;
            goto Pn7mZ;
            hqSV6:
            if (!($info->tampil_esai > 0)) {
                goto XAEeZ;
            }
            goto nF538;
            Qhs4b:
            $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\x34"] : [];
            goto i0Xuy;
            P7BFi:
            $insert["\145\163\163\141\x69\137\x6e\151\x6c\x61\x69"] = round($skor_es, 2);
            goto PY1iO;
            lq0RN:
            if (!(count($jawaban_is) > 0)) {
                goto G13Vp;
            }
            goto NKTlm;
            HHCri:
            $insert["\151\163\x69\x61\156\x5f\156\x69\154\141\x69"] = round($skor_is, 2);
            goto P7BFi;
            kmUne:
            $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg;
            goto Fq0oE;
            CFX1k:
            GVOOL:
            goto GgQj3;
            wLd50:
            $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\64"]);
            goto Y34DP;
            TDCot:
            if (!($info->tampil_kompleks > 0)) {
                goto n200i;
            }
            goto EDy4p;
            Vl2OM:
            n200i:
            goto YFUwH;
            sQ93E:
            $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\63"] : [];
            goto fkdV2;
            Mu_cD:
            $skor_koreksi_es = 0.0;
            goto hDPA5;
            INphZ:
            foreach ($jawaban_pg as $jwb_pg) {
                goto N3Off;
                YnM3W:
                goto WWYJ3;
                goto tXagG;
                BkL0O:
                qhdET:
                goto w89nK;
                UJB4L:
                WWYJ3:
                goto BkL0O;
                N3Off:
                if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) {
                    goto qhdET;
                }
                goto TYYD5;
                u0JZa:
                $salah_pg += 1;
                goto YnM3W;
                w89nK:
                nigow:
                goto sMgAI;
                tXagG:
                u7KUP:
                goto exaYK;
                TYYD5:
                if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban_benar)) {
                    goto u7KUP;
                }
                goto u0JZa;
                exaYK:
                $benar_pg += 1;
                goto UJB4L;
                sMgAI:
            }
            goto CFX1k;
            VIEHP:
            foreach ($jawaban_es as $num => $jawab_es) {
                goto uKIQK;
                xssEB:
                $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban_benar);
                goto mvCxY;
                FgnCh:
                yz1gG:
                goto vkw2b;
                uKIQK:
                $skor_koreksi_es += $jawab_es->nilai_koreksi;
                goto xssEB;
                YARdF:
                $benar_es++;
                goto qxwy0;
                mvCxY:
                if (!$benar) {
                    goto dE5xu;
                }
                goto YARdF;
                qxwy0:
                dE5xu:
                goto ZN56E;
                ZN56E:
                $otomatis_es = $jawab_es->nilai_otomatis;
                goto FgnCh;
                vkw2b:
            }
            goto IfP2C;
            nd442:
            $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]);
            goto cC2NO;
            Pn7mZ:
            $insert["\151\144\137\x6a\x61\144\x77\141\x6c"] = $jadwal;
            goto xzMwU;
            HlxCG:
            FSVjK:
            goto pNv1x;
            lqFLj:
            $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x32"]);
            goto ErOVZ;
            g2URY:
            $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is);
            goto ajBFt;
            nF538:
            if (!(count($jawaban_es) > 0)) {
                goto stgyR;
            }
            goto VIEHP;
            Takst:
            if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) {
                goto gwlAK;
            }
            goto AkqY1;
            pNv1x:
            G13Vp:
            goto AaIex;
            PY1iO:
            array_push($insets, $insert);
            goto tjEEo;
            O46He:
            $benar_es = 0;
            goto Mu_cD;
            cSryi:
            foreach ($jawaban_pg2 as $num => $jawab_pg2) {
                goto mdmnK;
                UG_sH:
                fe3Aw:
                goto FLKdr;
                iX3yK:
                $benar_pg2 += 1 / count($jawab_pg2->jawaban_benar) * count($arr_benar);
                goto UG_sH;
                jYA25:
                wx6VX:
                goto iX3yK;
                UEuoG:
                foreach ($jawab_pg2->jawaban_siswa as $js) {
                    goto mQWvz;
                    mQWvz:
                    if (!in_array($js, $jawab_pg2->jawaban_benar)) {
                        goto zEwP1;
                    }
                    goto ZPd85;
                    xdPB3:
                    zEwP1:
                    goto ryjdf;
                    ZPd85:
                    array_push($arr_benar, true);
                    goto xdPB3;
                    ryjdf:
                    rrjth:
                    goto YvVfO;
                    YvVfO:
                }
                goto jYA25;
                mdmnK:
                $otomatis_pg2 = $jawab_pg2->nilai_otomatis;
                goto xzBZw;
                KOE5A:
                $arr_benar = [];
                goto UEuoG;
                xzBZw:
                $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi;
                goto KOE5A;
                FLKdr:
            }
            goto fc3DS;
            NKTlm:
            foreach ($jawaban_is as $num => $jawab_is) {
                goto SAuwZ;
                l52zy:
                iSgdl:
                goto NwfO3;
                xORdz:
                $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban_benar);
                goto N8LmO;
                r_QyJ:
                $benar_is++;
                goto HLLVm;
                HLLVm:
                opxgm:
                goto n_fQK;
                SAuwZ:
                $skor_koreksi_is += $jawab_is->nilai_koreksi;
                goto xORdz;
                N8LmO:
                if (!$benar) {
                    goto opxgm;
                }
                goto r_QyJ;
                n_fQK:
                $otomatis_is = $jawab_is->nilai_otomatis;
                goto l52zy;
                NwfO3:
            }
            goto HlxCG;
            b1D3E:
            $insert["\x6b\157\155\x70\x6c\x65\x6b\163\137\x6e\151\x6c\x61\x69"] = round($skor_pg2, 2);
            goto VtPHE;
            Y6OoQ:
            nxPVw:
            goto hisXH;
            d0TS8:
            zP31k:
            goto Vl2OM;
            AaIex:
            xH_3V:
            goto q0qHq;
            HopHV:
            $otomatis_jod = 0;
            goto KlLnP;
            rrm4s:
            tp2zc:
            goto kmUne;
            b82oQ:
            gwlAK:
            goto jrawW;
            tABfN:
            MqwMx:
            goto wTGZT;
            jrawW:
            $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2);
            goto sQ93E;
            hDPA5:
            $otomatis_es = 0;
            goto hqSV6;
            EDy4p:
            if (!(count($jawaban_pg2) > 0)) {
                goto zP31k;
            }
            goto cSryi;
            Hpzgc:
            XAEeZ:
            goto gXlJV;
            GJ2Di:
            $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod);
            goto Qhs4b;
            HYKZX:
            $input_is = 0;
            goto oZ7QF;
            k8XrU:
            $salah_pg = 0;
            goto wSW3k;
            oZ7QF:
            if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
                goto vfB17;
            }
            goto L4xIM;
            GgQj3:
            bCAZs:
            goto rrm4s;
            cC2NO:
            $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x31"]);
            goto lqFLj;
            R4RaL:
            $input_es = $nilai_input->essai_nilai;
            goto Y6OoQ;
            Fq0oE:
            $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\62"] : [];
            goto yKlmr;
            U22aC:
            $input_jod = 0;
            goto s2D2t;
            gO5Nk:
            $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal, $siswa->id_siswa);
            goto GXrDP;
            L4xIM:
            $input_is = $nilai_input->isian_nilai;
            goto KSAAI;
            hisXH:
            $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es);
            goto skltA;
            KSAAI:
            vfB17:
            goto g2URY;
            ipfhq:
            $skor_koreksi_jod = 0.0;
            goto HopHV;
            xVpSn:
            kk2mt:
            goto tABfN;
            Ee0VI:
            if (!($info->tampil_isian > 0)) {
                goto xH_3V;
            }
            goto lq0RN;
            XHqww:
            XuxK_:
            goto GJ2Di;
            n4p8U:
            if (!(count($jawaban_jodoh) > 0)) {
                goto kk2mt;
            }
            goto u_d24;
            wTGZT:
            $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh;
            goto U22aC;
            fc3DS:
            UbMcF:
            goto d0TS8;
            iD1Rc:
            $otomatis_is = 0;
            goto Ee0VI;
            JZ5vb:
            $insert["\160\x67\137\x6e\x69\154\141\x69"] = round($skor_pg, 2);
            goto b1D3E;
            gXlJV:
            $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai;
            goto jczkB;
            q0qHq:
            $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian;
            goto HYKZX;
            fkdV2:
            $benar_jod = 0;
            goto ipfhq;
            jczkB:
            $input_es = 0;
            goto HV95S;
            r1Bzv:
            $input_pg2 = 0;
            goto Takst;
            ajBFt:
            $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\65"] : [];
            goto O46He;
            AkqY1:
            $input_pg2 = $nilai_input->kompleks_nilai;
            goto b82oQ;
            Y34DP:
            $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\65"]);
            goto gO5Nk;
            ZmyFq:
            waVob:
            goto xVpSn;
            yKlmr:
            $benar_pg2 = 0;
            goto UJymB;
            VtPHE:
            $insert["\x6a\157\144\157\x68\153\141\x6e\x5f\x6e\151\x6c\141\151"] = round($skor_jod, 2);
            goto HHCri;
            s2D2t:
            if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) {
                goto XuxK_;
            }
            goto Hezfg;
            YFUwH:
            $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2;
            goto r1Bzv;
            HV95S:
            if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
                goto nxPVw;
            }
            goto R4RaL;
            fpo30:
        }
        goto JsFje;
        L88A9:
        $siswas = $this->cbt->getSiswaByKelas($info->id_tp, $info->id_smt, $kelases);
        goto oOhgG;
        oOhgG:
        $ids = [];
        goto gL7eJ;
        uigcS:
        $bagi_essai = $info->tampil_esai / 100;
        goto JcOTC;
        pM5VJ:
        $bagi_jodoh = $info->tampil_jodohkan / 100;
        goto UCqk9;
        Y47Qd:
        $update = $this->db->update_batch("\143\x62\x74\x5f\x6e\151\154\x61\151", $insets, "\151\144\137\x6e\x69\154\141\x69");
        goto EKvZF;
        CXG2Y:
        bKb2v:
        goto L88A9;
        M4MTN:
        IfPNR:
        goto nnGwp;
        Ow9gr:
        foreach ($jawabans as $jawaban_siswa) {
            goto DpHep;
            SHLOx:
            IYSVw:
            goto C7_FJ;
            DpHep:
            if (!($jawaban_siswa->jenis_soal == "\x32")) {
                goto IYSVw;
            }
            goto epb03;
            KwR8m:
            m32fe:
            goto UfJHq;
            yjk68:
            $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto GnJ90;
            GnJ90:
            Jijn0:
            goto S2A2r;
            epb03:
            $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a);
            goto QLWEe;
            C7_FJ:
            if (!($jawaban_siswa->jenis_soal == "\x33")) {
                goto m32fe;
            }
            goto QvmTA;
            xnTB8:
            $jawaban_siswa->jawaban_benar = array_map("\163\x74\162\164\157\165\x70\160\145\x72", $jawaban_siswa->jawaban_benar);
            goto oNO73;
            HU9xF:
            $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar));
            goto KwR8m;
            UfJHq:
            $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto yjk68;
            QvmTA:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto Ta5Wm;
            JUd8F:
            $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa));
            goto HU9xF;
            Ta5Wm:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto JUd8F;
            pF6ku:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto xnTB8;
            QLWEe:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto pF6ku;
            oNO73:
            $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\163\x74\162\154\x65\156");
            goto SHLOx;
            S2A2r:
        }
        goto ydRAl;
        hjRhv:
        $kelas_bank = unserialize($info->bank_kelas);
        goto uGASn;
        gL7eJ:
        foreach ($siswas as $key => $value) {
            array_push($ids, $value->id_siswa);
            KIkgx:
        }
        goto M4MTN;
        qEpzd:
        $info = $this->cbt->getJadwalById($jadwal);
        goto GjbkC;
        UCqk9:
        $bobot_jodoh = $info->bobot_jodohkan / 100;
        goto rxcTD;
        gBMVf:
    }
    private function nilaiSignifikansi($jml)
    {
        goto zcutZ;
        RVlwH:
        if (isset($list[$jml]["\x35"])) {
            goto rnUkQ;
        }
        goto y1EX6;
        zcutZ:
        $list = [3 => [5 => 0.997], [1 => 0.999], 4 => [5 => 0.95], [1 => 0.99], 5 => [5 => 0.878], [1 => 0.959], 6 => [5 => 0.8110000000000001], [1 => 0.917], 7 => [5 => 0.754], [1 => 0.874], 8 => [5 => 0.707], [1 => 0.834], 9 => [5 => 0.666], [1 => 0.798], 10 => [5 => 0.632], [1 => 0.765], 11 => [5 => 0.602], [1 => 0.735], 12 => [5 => 0.576], [1 => 0.708], 13 => [5 => 0.553], [1 => 0.6840000000000001], 14 => [5 => 0.532], [1 => 0.661], 15 => [5 => 0.514], [1 => 0.641], 16 => [5 => 0.497], [1 => 0.623], 17 => [5 => 0.482], [1 => 0.606], 18 => [5 => 0.468], [1 => 0.59], 19 => [5 => 0.456], [1 => 0.575], 20 => [5 => 0.444], [1 => 0.5610000000000001], 21 => [5 => 0.433], [1 => 0.549], 22 => [5 => 0.423], [1 => 0.537], 23 => [5 => 0.413], [1 => 0.526], 24 => [5 => 0.404], [1 => 0.515], 25 => [5 => 0.396], [1 => 0.505], 26 => [5 => 0.388], [1 => 0.496], 27 => [5 => 0.381], [1 => 0.487], 28 => [5 => 0.374], [1 => 0.478], 29 => [5 => 0.367], [1 => 0.47], 30 => [5 => 0.361], [1 => 0.463], 31 => [5 => 0.355], [1 => 0.456], 32 => [5 => 0.349], [1 => 0.449], 33 => [5 => 0.344], [1 => 0.442], 34 => [5 => 0.339], [1 => 0.436], 35 => [5 => 0.334], [1 => 0.43], 36 => [5 => 0.329], [1 => 0.424], 37 => [5 => 0.325], [1 => 0.418], 38 => [5 => 0.32], [1 => 0.413], 39 => [5 => 0.316], [1 => 0.408], 40 => [5 => 0.312], [1 => 0.403], 41 => [5 => 0.308], [1 => 0.398], 42 => [5 => 0.304], [1 => 0.393], 43 => [5 => 0.301], [1 => 0.389], 44 => [5 => 0.297], [1 => 0.384], 45 => [5 => 0.294], [1 => 0.38], 46 => [5 => 0.291], [1 => 0.376], 47 => [5 => 0.288], [1 => 0.372], 48 => [5 => 0.284], [1 => 0.368], 49 => [5 => 0.281], [1 => 0.364], 50 => [5 => 0.279], [1 => 0.361], 55 => [5 => 0.266], [1 => 0.345], 60 => [5 => 0.254], [1 => 0.33], 65 => [5 => 0.244], [1 => 0.317], 70 => [5 => 0.235], [1 => 0.306], 75 => [5 => 0.227], [1 => 0.296], 80 => [5 => 0.22], [1 => 0.286], 85 => [5 => 0.213], [1 => 0.278], 90 => [5 => 0.207], [1 => 0.27], 95 => [5 => 0.202], [1 => 0.263], 100 => [5 => 0.195], [1 => 0.256], 125 => [5 => 0.176], [1 => 0.23], 150 => [5 => 0.159], [1 => 0.21], 175 => [5 => 0.149], [1 => 0.194], 200 => [5 => 0.138], [1 => 0.191], 300 => [5 => 0.113], [1 => 0.181], 400 => [5 => 0.098], [1 => 0.148], 500 => [5 => 0.08799999999999999], [1 => 0.128], 600 => [5 => 0.08], [1 => 0.115], 700 => [5 => 0.074], [1 => 0.105], 800 => [5 => 0.07000000000000001], [1 => 0.091], 900 => [5 => 0.065], [1 => 0.08599999999999999], 1000 => [5 => 0.062], [1 => 0.081]];
        goto Ir_uX;
        rDTP1:
        goto SBW_W;
        goto del6n;
        IkiAS:
        $keys = $this->getClosest($jml, array_keys($list));
        goto afbhD;
        Ir_uX:
        if (isset($list[$jml])) {
            goto hLXxc;
        }
        goto IkiAS;
        jEmYk:
        $keys = 4;
        goto xAxC9;
        xAxC9:
        YBsK2:
        goto vMnOG;
        vMnOG:
        if (isset($list[$keys]["\x35"])) {
            goto u06r7;
        }
        goto CsV9o;
        TfRVi:
        u06r7:
        goto E2AuU;
        u_LZr:
        return $list[$jml]["\x35"];
        goto nQtYW;
        iymOB:
        goto dqzsh;
        goto TfRVi;
        y1EX6:
        return $list[$jml]["\61"];
        goto skKhE;
        asrvf:
        dqzsh:
        goto rDTP1;
        CsV9o:
        return $list[$keys]["\61"];
        goto iymOB;
        vIdOR:
        SBW_W:
        goto zJmOM;
        E2AuU:
        return $list[$keys]["\65"];
        goto asrvf;
        Sa9HD:
        rnUkQ:
        goto u_LZr;
        afbhD:
        if (!($keys < 4)) {
            goto YBsK2;
        }
        goto jEmYk;
        del6n:
        hLXxc:
        goto RVlwH;
        nQtYW:
        zDR_5:
        goto vIdOR;
        skKhE:
        goto zDR_5;
        goto Sa9HD;
        zJmOM:
    }
    function getClosest($search, $arr)
    {
        goto TQdKT;
        A16Nh:
        foreach ($arr as $item) {
            goto EDMhV;
            icry1:
            lDGBP:
            goto cU4XA;
            cU4XA:
            pPrJ1:
            goto PAGPd;
            wpAJG:
            $closest = $item;
            goto icry1;
            EDMhV:
            if (!($closest === null || abs($search - $closest) > abs($item - $search))) {
                goto lDGBP;
            }
            goto wpAJG;
            PAGPd:
        }
        goto XnUnP;
        TQdKT:
        $closest = null;
        goto A16Nh;
        XnUnP:
        yH6uY:
        goto OsLOP;
        OsLOP:
        return $closest;
        goto XauOZ;
        XauOZ:
    }
}
