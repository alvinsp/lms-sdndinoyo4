<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Cbtnilai extends CI_Controller
{
    public function __construct()
    {
        goto WMPmu;
        QgpVB:
        $this->load->model("\x44\162\x6f\x70\x64\157\x77\x6e\x5f\155\157\x64\145\x6c", "\x64\x72\x6f\160\x64\x6f\x77\156");
        goto JR8ZW;
        WjCSV:
        $this->form_validation->set_error_delimiters('', '');
        goto Lmbmt;
        FHsY9:
        $this->load->library(["\x64\x61\164\x61\164\x61\x62\x6c\x65\163", "\x66\x6f\162\x6d\x5f\x76\x61\154\x69\x64\141\x74\x69\157\156"]);
        goto kBQly;
        vcMdI:
        $this->load->model("\103\142\x74\x5f\155\157\x64\145\154", "\143\x62\x74");
        goto QgpVB;
        ofOuR:
        hWpKK:
        goto RV_he;
        WMPmu:
        parent::__construct();
        goto sL4Dr;
        GTyrH:
        show_error("\x48\x61\156\x79\141\x20\x41\x64\x6d\151\x6e\151\x73\x74\162\x61\x74\x6f\x72\x20\x79\x61\156\147\x20\x64\x69\142\x65\x72\151\x20\x68\141\153\40\165\156\164\x75\153\x20\155\145\x6e\x67\141\153\x73\x65\x73\40\x68\x61\154\x61\x6d\141\x6e\x20\x69\x6e\x69\x2c\40\74\x61\x20\x68\x72\145\146\x3d\x22" . base_url("\144\x61\163\150\x62\x6f\141\162\144") . "\x22\76\x4b\x65\155\x62\141\154\151\40\153\145\x20\155\145\156\165\x20\141\x77\x61\154\x3c\57\x61\x3e", 403, "\101\x6b\163\145\163\40\124\x65\x72\154\x61\x72\x61\x6e\x67");
        goto bSecp;
        RV_he:
        redirect("\141\165\164\150");
        goto kvBCj;
        kvBCj:
        voaak:
        goto FHsY9;
        Cb159:
        $this->load->model("\x44\141\x73\150\142\157\141\x72\x64\x5f\155\x6f\x64\145\154", "\x64\x61\x73\x68\142\157\141\x72\x64");
        goto vcMdI;
        tsWZt:
        goto voaak;
        goto ofOuR;
        bSecp:
        LLOUn:
        goto tsWZt;
        XeY5e:
        $this->load->model("\x4d\x61\x73\x74\x65\x72\x5f\x6d\x6f\144\x65\154", "\x6d\x61\x73\x74\145\162");
        goto Cb159;
        UmUY9:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\x75"))) {
            goto LLOUn;
        }
        goto GTyrH;
        kBQly:
        $this->load->library("\165\x70\x6c\157\x61\144");
        goto XeY5e;
        sL4Dr:
        if (!$this->ion_auth->logged_in()) {
            goto hWpKK;
        }
        goto UmUY9;
        JR8ZW:
        $this->load->model("\x4b\145\154\141\163\x5f\x6d\157\x64\x65\x6c", "\153\x65\x6c\141\x73");
        goto WjCSV;
        Lmbmt:
    }
    public function output_json($data, $encode = true)
    {
        goto yuowG;
        mCQrD:
        $data = json_encode($data);
        goto d6DNF;
        YJMRg:
        $this->output->set_content_type("\x61\x70\160\x6c\x69\143\x61\164\x69\157\156\57\x6a\x73\157\156")->set_output($data);
        goto BlqOr;
        d6DNF:
        Z7KZK:
        goto YJMRg;
        yuowG:
        if (!$encode) {
            goto Z7KZK;
        }
        goto mCQrD;
        BlqOr:
    }
    public function index()
    {
        goto at1gU;
        hZHDi:
        if ($this->ion_auth->in_group("\147\165\162\x75")) {
            goto Whjq7;
        }
        goto SzBbE;
        MF7am:
        pnpjs:
        goto kbIh6;
        dKH0l:
        $kelas_bank = unserialize($info->bank_kelas);
        goto Hcyjw;
        gkpBA:
        Hc6v_:
        goto Kasis;
        YuOCi:
        foreach ($jawabans as $jawaban_siswa) {
            goto Ye1v9;
            J1lIQ:
            $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\163\164\x72\154\x65\156");
            goto QlsRu;
            NSFWI:
            $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto MVk5a;
            f4Oqr:
            $jawaban_siswa->jawaban = @unserialize($jawaban_siswa->jawaban);
            goto hAmOx;
            DEzeJ:
            $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a);
            goto MHw6D;
            Ye1v9:
            if (!($jawaban_siswa->jenis_soal == "\62")) {
                goto F5LTi;
            }
            goto DEzeJ;
            ML3QV:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto QgRyi;
            v4Yhk:
            $jawaban_siswa->jawaban_benar = array_map("\x73\x74\x72\x74\157\x75\x70\160\145\x72", $jawaban_siswa->jawaban_benar);
            goto cEx1c;
            QD8F2:
            iCOsj:
            goto CHZGU;
            M_l2N:
            if (!($jawaban_siswa->jenis_soal == "\x33")) {
                goto ddflL;
            }
            goto ML3QV;
            NNJqR:
            ddflL:
            goto NSFWI;
            hAmOx:
            $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa));
            goto cXPBh;
            a5QOV:
            $jawaban_siswa->jawaban = json_decode(json_encode($jawaban_siswa->jawaban));
            goto NNJqR;
            cEx1c:
            $jawaban_siswa->jawaban = array_map("\163\164\162\x74\x6f\165\160\x70\145\162", $jawaban_siswa->jawaban);
            goto J1lIQ;
            MVk5a:
            $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto QD8F2;
            MHw6D:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto nZwB3;
            alIfC:
            $jawaban_siswa->jawaban = @unserialize($jawaban_siswa->jawaban);
            goto v4Yhk;
            nZwB3:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto alIfC;
            QgRyi:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto f4Oqr;
            QlsRu:
            $jawaban_siswa->jawaban = array_filter($jawaban_siswa->jawaban, "\x73\164\x72\154\145\x6e");
            goto QCT_s;
            QCT_s:
            F5LTi:
            goto M_l2N;
            cXPBh:
            $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar));
            goto a5QOV;
            CHZGU:
        }
        goto UbBN5;
        R60FS:
        L3KyK:
        goto dKH0l;
        dweLE:
        $info = $this->cbt->getJadwalById($jadwal_selected);
        goto etzeJ;
        IWvmj:
        $data["\x63\x6f\x6e\166\145\162\x74"] = $convert;
        goto R60FS;
        ADTfc:
        $bobot_essai = $info->bobot_esai / 100;
        goto ZdD4O;
        Bymgj:
        $id_guru = $guru->id_guru;
        goto nU9_f;
        DnRWA:
        nETnJ:
        goto coyjr;
        CNVX3:
        $bagi_essai = $info->tampil_esai / 100;
        goto ADTfc;
        SZD41:
        $bagi_pg2 = $info->tampil_kompleks / 100;
        goto bXC9n;
        TiuCk:
        $this->load->view("\137\x74\x65\155\160\154\141\x74\x65\163\57\x64\x61\x73\x68\x62\157\141\162\x64\57\137\150\x65\x61\144\x65\162", $data);
        goto FNcZk;
        rGekp:
        $data["\x73\x6d\164"] = $this->dashboard->getSemester();
        goto QchYi;
        nuWXV:
        $jawabans = $this->cbt->getJawabanSiswaByJadwal($jadwal_selected, $ids);
        goto cIc1r;
        KRSDs:
        if (!($ya != null)) {
            goto L3KyK;
        }
        goto TRwEP;
        F64PV:
        $data = ["\165\x73\145\162" => $user, "\x6a\165\x64\165\154" => "\x48\x61\x73\x69\x6c\40\125\152\151\x61\156\40\x53\x69\163\167\141", "\163\x75\x62\x6a\165\144\x75\x6c" => "\x4e\151\154\141\151\40\123\151\x73\x77\x61", "\x73\145\164\164\151\156\x67" => $this->dashboard->getSetting()];
        goto o38nz;
        cIc1r:
        $soal = [];
        goto jVxUo;
        XW7VT:
        $data["\153\145\x6c\x61\163\137\163\145\x6c\145\x63\x74\x65\144"] = $kelas_selected;
        goto NaPy_;
        B04KY:
        goto Q1zwF;
        goto MF7am;
        zkMP0:
        $smt = $this->dashboard->getSemesterActive();
        goto rWVzt;
        YKk_W:
        $data["\153\145\154\x61\163"] = $arrKelas;
        goto XsZ61;
        YebQE:
        Q1zwF:
        goto xfjcm;
        Kasis:
        $data["\x69\x6e\146\157"] = $info;
        goto GUM29;
        bXHbf:
        pKv7B:
        goto nuWXV;
        GUM29:
        $data["\163\x69\163\x77\141\x73"] = $siswas;
        goto KRSDs;
        dBGtE:
        $data["\164\x70\137\x61\143\x74\151\x76\x65"] = $tp;
        goto rGekp;
        N4UVV:
        foreach ($mapel as $m) {
            goto HhYbL;
            KAbYB:
            foreach ($m->kelas_mapel as $kls) {
                $arrKelas[$kls->kelas] = $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas);
                jA156:
            }
            goto NVR5x;
            Mb6lF:
            e3RGt:
            goto GazgW;
            HhYbL:
            $arrMapel[$m->id_mapel] = $m->nama_mapel;
            goto KAbYB;
            NVR5x:
            TkyQU:
            goto Mb6lF;
            GazgW:
        }
        goto uKkx2;
        K7Pg8:
        $ids = [];
        goto gXp8l;
        ZGR0r:
        foreach ($siswas as $siswa) {
            goto RJdl2;
            raGJj:
            goto wVrc6;
            goto vFu82;
            UcJu6:
            FTbGc:
            goto SK3g4;
            xMCaI:
            $input_pg2 = 0;
            goto PWdfb;
            rhrv2:
            $siswa->dikoreksi = $nilai_input->dikoreksi;
            goto BhhVw;
            SK3g4:
            $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is);
            goto OUFhQ;
            lWKZy:
            $benar_jod = 0;
            goto KF4bQ;
            PWdfb:
            if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) {
                goto oLss_;
            }
            goto UikMF;
            zWmFc:
            if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
                goto FTbGc;
            }
            goto RljqG;
            ynHLl:
            foreach ($jawaban_es as $num => $jawab_es) {
                goto QN1cx;
                f_OI2:
                $point = !$benar ? 0 : ($info->bobot_esai > 0 ? round($info->bobot_esai / $info->tampil_esai, 2) : 0);
                goto ntCfM;
                ptnmL:
                $benar_es++;
                goto dY_uH;
                vA9P0:
                $soal[5][$ks]->point_otomatis = $point;
                goto XtPKR;
                XM0FD:
                $soal[5][$ks]->point = $point;
                goto EC9WS;
                Jklt5:
                $soal[5][$ks]->point_koreksi = $jawab_es->nilai_koreksi;
                goto vA9P0;
                kKj78:
                if (!$benar) {
                    goto JQmda;
                }
                goto ptnmL;
                zLHKl:
                $soal[5][$ks]->point = $jawab_es->nilai_koreksi;
                goto AYs75;
                dY_uH:
                JQmda:
                goto HoLh0;
                XtPKR:
                $otomatis_es = $jawab_es->nilai_otomatis;
                goto lyG0O;
                AYs75:
                goto lTN7p;
                goto e1G_6;
                lyG0O:
                WOuGQ:
                goto f23ou;
                HoLh0:
                $ks = array_search($jawab_es->nomor_soal, array_column($soal[5], "\x6e\x6f\155\x6f\162\137\x73\157\x61\154"));
                goto f_OI2;
                Us_rU:
                $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban);
                goto kKj78;
                e1G_6:
                eTWRl:
                goto XM0FD;
                QN1cx:
                $skor_koreksi_es += (int) $jawab_es->nilai_koreksi;
                goto Us_rU;
                EC9WS:
                lTN7p:
                goto Jklt5;
                ntCfM:
                if ($jawab_es->nilai_otomatis == "\60") {
                    goto eTWRl;
                }
                goto zLHKl;
                f23ou:
            }
            goto LXO14;
            fmuxB:
            $siswa->skor_total = round($total, 2);
            goto fEVfj;
            ZgV6R:
            foreach ($jawaban_pg as $num => $jwb_pg) {
                goto jjxRV;
                z01ji:
                $benar = true;
                goto uwlyh;
                MR3k4:
                $arrJawabanPg[$num] = ["\152\141\167\x61\x62\141\156" => strtoupper($jwb_pg->jawaban_siswa), "\142\x65\x6e\x61\x72" => $benar];
                goto BJOlI;
                HRJ8D:
                if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) {
                    goto ChxC1;
                }
                goto rmG6c;
                Ch8dN:
                goto TvuYO;
                goto xsy56;
                muTGu:
                $benar_pg += 1;
                goto z01ji;
                xsy56:
                qHElT:
                goto muTGu;
                bRH_J:
                $benar = false;
                goto Ch8dN;
                jjxRV:
                $benar = false;
                goto HRJ8D;
                Z8M37:
                ChxC1:
                goto MR3k4;
                rmG6c:
                if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban)) {
                    goto qHElT;
                }
                goto bRH_J;
                BJOlI:
                QZHqJ:
                goto c2Mmn;
                uwlyh:
                TvuYO:
                goto Z8M37;
                c2Mmn:
            }
            goto CHvWC;
            XhSyE:
            $skor_koreksi_pg2 = 0.0;
            goto LtM48;
            Q0ByF:
            rp3eB:
            goto ofloc;
            e4lVo:
            $benar_is = 0;
            goto aIiQh;
            rn6pr:
            goto gMyMN;
            goto n121Z;
            w1zVk:
            $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\61"]);
            goto b1Tlt;
            lftzL:
            $siswa->lama_ujian = $loading . $dur_siswa;
            goto VNlWe;
            EfQCk:
            goto A_ZPc;
            goto T56aa;
            U3Se6:
            t6tZu:
            goto qZFl8;
            b3nby:
            $skor_pg = $benar_pg / $bagi_pg * $bobot_pg;
            goto ZIaDe;
            b9Upg:
            $siswa->skor_pg = round($skor_pg, 2);
            goto d4tDF;
            Eld2O:
            $input_jod = 0;
            goto yeo0R;
            Jrzja:
            if (!($info->tampil_esai > 0)) {
                goto N2Rcs;
            }
            goto ynHLl;
            WSXfx:
            $benar_pg2 = 0;
            goto XhSyE;
            AWY1n:
            NWLqM:
            goto Oj9FQ;
            Jesmx:
            oLss_:
            goto aBqi1;
            I1sHJ:
            $siswa->skor_kompleks = round($skor_pg2, 2);
            goto tan3R;
            RN7oR:
            $siswa->mulai_ujian = $mulai;
            goto Obcq0;
            kXbwP:
            if (!($info->tampil_kompleks > 0)) {
                goto DLdtU;
            }
            goto SYfrE;
            RJdl2:
            $dur_siswa = '';
            goto fxO81;
            ny6T6:
            $otomatis_is = 0;
            goto e4lVo;
            LtM48:
            $otomatis_pg2 = 0;
            goto kXbwP;
            fxO81:
            $lamanya = '';
            goto P2gvk;
            M15xl:
            ZlTZi:
            goto uj42u;
            tiP6A:
            $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]);
            goto w1zVk;
            LBxOK:
            $benar_pg = 0;
            goto iZX5Q;
            Xdrud:
            $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\x34"] : [];
            goto qr2Z0;
            l8Egz:
            $skor_koreksi_es = 0.0;
            goto WGSJc;
            QBx0W:
            $loading = '';
            goto SkRDL;
            NKMxY:
            ld0Sg:
            goto Uz__p;
            RljqG:
            $input_is = $nilai_input->isian_nilai;
            goto UcJu6;
            lxEhZ:
            $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod);
            goto POmAy;
            N1SN1:
            $arrJawabanPg = [];
            goto v7isD;
            YqPNc:
            $input_es = $nilai_input->essai_nilai;
            goto Q0ByF;
            zYnM3:
            $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian;
            goto any2G;
            KF4bQ:
            if (!($info->tampil_jodohkan > 0)) {
                goto NWLqM;
            }
            goto mbzMV;
            z8vwQ:
            ewAXp:
            goto lxEhZ;
            AxlKn:
            $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x33"]);
            goto LFmEy;
            ofloc:
            $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es);
            goto aWLH1;
            O3Fnz:
            if (!($n < $info->tampil_pg)) {
                goto UugrB;
            }
            goto GayFn;
            u0zOf:
            $selesai = "\x2d\40\55\x20\x20\x3a\x20\x20\55\x20\x2d";
            goto deYdl;
            TE_1i:
            $otomatis_jod = 0;
            goto lWKZy;
            uj42u:
            if (!($total < $xb)) {
                goto z5JKr;
            }
            goto rWLh7;
            gFGE9:
            if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
                goto rp3eB;
            }
            goto YqPNc;
            GayFn:
            $arrJawabanPg[$n + 1] = ["\x6a\x61\x77\x61\x62\141\x6e" => '', "\x62\x65\156\x61\162" => false];
            goto NKMxY;
            ZIaDe:
            tyXry:
            goto Na8xS;
            T56aa:
            DY7xL:
            goto ZgV6R;
            tBLfm:
            if (!($total > $xa)) {
                goto ZlTZi;
            }
            goto ZwXlp;
            rAeT0:
            nUmCw:
            goto QBx0W;
            FHM1a:
            kpvH8:
            goto NHTnW;
            H5lzg:
            $input_jod = $nilai_input->jodohkan_nilai;
            goto z8vwQ;
            SYfrE:
            foreach ($jawaban_pg2 as $num => $jawab_pg2) {
                goto u4_UM;
                uEVX3:
                hdph3:
                goto pKPKT;
                K114D:
                if (!(count($jawab_pg2->jawaban) > 0)) {
                    goto f97Ss;
                }
                goto wW0nl;
                G9WDK:
                $soal[2][$ks]->point_otomatis = $point;
                goto aF1nj;
                wW0nl:
                $benar_pg2 += 1 / count($jawab_pg2->jawaban) * count($arr_benar);
                goto Wd2gO;
                tdltl:
                S0BSP:
                goto K114D;
                Tjspb:
                $point_item = count($jawab_pg2->jawaban) > 0 ? $point_benar / count($jawab_pg2->jawaban) : 0;
                goto FYH0h;
                FYH0h:
                $pk = $point_item * count($arr_benar);
                goto WMhuK;
                pJiVv:
                CaPaD:
                goto PoHJ2;
                WnISc:
                qazSc:
                goto KTM3G;
                CdzgZ:
                $arr_benar = [];
                goto ZNPa_;
                mIGZa:
                if ($jawab_pg2->nilai_otomatis == "\x30") {
                    goto hdph3;
                }
                goto DJrfG;
                pKPKT:
                $soal[2][$ks]->point = $point;
                goto pJiVv;
                d7CQ8:
                $point_benar = $info->bobot_kompleks > 0 ? round($info->bobot_kompleks / $info->tampil_kompleks, 2) : 0;
                goto Tjspb;
                CGcFS:
                $point = round($pk, 2);
                goto mIGZa;
                ZNPa_:
                if (!$jawab_pg2->jawaban_siswa) {
                    goto S0BSP;
                }
                goto PoARX;
                u4_UM:
                $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi;
                goto CdzgZ;
                PoHJ2:
                $soal[2][$ks]->point_koreksi = $jawab_pg2->nilai_koreksi;
                goto G9WDK;
                PoARX:
                foreach ($jawab_pg2->jawaban_siswa as $js) {
                    goto oGlO3;
                    UL7n2:
                    array_push($arr_benar, true);
                    goto k_JPk;
                    k_JPk:
                    O5BFA:
                    goto fly_H;
                    fly_H:
                    ME_Xc:
                    goto gJmeg;
                    oGlO3:
                    if (!in_array($js, $jawab_pg2->jawaban)) {
                        goto O5BFA;
                    }
                    goto UL7n2;
                    gJmeg:
                }
                goto QpOLe;
                QpOLe:
                STzZd:
                goto tdltl;
                WMhuK:
                $ks = array_search($jawab_pg2->nomor_soal, array_column($soal[2], "\x6e\157\x6d\157\162\137\163\157\x61\154"));
                goto CGcFS;
                DJrfG:
                $soal[2][$ks]->point = $jawab_pg2->nilai_koreksi;
                goto AKw0k;
                AKw0k:
                goto CaPaD;
                goto uEVX3;
                Wd2gO:
                f97Ss:
                goto d7CQ8;
                aF1nj:
                $otomatis_pg2 = $jawab_pg2->nilai_otomatis;
                goto WnISc;
                KTM3G:
            }
            goto U3Se6;
            NHTnW:
            tobOg:
            goto zYnM3;
            rWLh7:
            $xb = $total;
            goto NUW1F;
            qZFl8:
            DLdtU:
            goto x3NJr;
            NUW1F:
            z5JKr:
            goto cShlN;
            CHvWC:
            VfmcZ:
            goto WQ13J;
            UikMF:
            $input_pg2 = $nilai_input->kompleks_nilai;
            goto Jesmx;
            POmAy:
            $siswa->skor_jodohkan = round($skor_jod, 2);
            goto Xdrud;
            deYdl:
            foreach ($logs as $log) {
                goto KHg6B;
                d8r1q:
                $sudahSelesai = false;
                goto fgPZc;
                UjpOB:
                $sudahSelesai = true;
                goto mQALi;
                rXINa:
                RcM0a:
                goto Hx1WT;
                fgPZc:
                if ($log->log_type == "\x31") {
                    goto RcM0a;
                }
                goto WXgHH;
                o2GaE:
                $sudahMulai = true;
                goto PSIAN;
                UB5gJ:
                $sudahMulai = false;
                goto d8r1q;
                WXgHH:
                if (!($log != null)) {
                    goto W3Yix;
                }
                goto r7DN9;
                PSIAN:
                zbWyn:
                goto EWmRx;
                st9fP:
                $mulai = date("\110\x3a\x69", strtotime($log->log_time));
                goto o2GaE;
                CJRoH:
                vOkIn:
                goto pDFiz;
                KHg6B:
                if (!($log->id_siswa == $siswa->id_siswa)) {
                    goto hQpOS;
                }
                goto UB5gJ;
                t5Xby:
                hQpOS:
                goto CJRoH;
                r7DN9:
                $selesai = date("\110\x3a\151", strtotime($log->log_time));
                goto UjpOB;
                EWmRx:
                arPBw:
                goto kNo26;
                Hg75V:
                goto arPBw;
                goto rXINa;
                Hx1WT:
                if (!($log != null)) {
                    goto zbWyn;
                }
                goto st9fP;
                mQALi:
                W3Yix:
                goto Hg75V;
                kNo26:
                $loading = $sudahSelesai ? "\x3c\x69\x20\x63\x6c\141\x73\x73\x3d\x22\x66\x61\x20\x66\141\x2d\x63\150\145\x63\153\x22\x3e\74\57\x69\76\40" : ($sudahMulai ? "\74\x69\40\143\x6c\141\x73\163\x3d\x22\146\x61\40\146\141\55\163\160\x69\x6e\156\145\x72\40\x66\x61\55\x73\160\151\x6e\x22\76\x3c\x2f\151\x3e\40" : '');
                goto t5Xby;
                pDFiz:
            }
            goto XpuTw;
            Uz__p:
            $n++;
            goto raGJj;
            tan3R:
            $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\x33"] : [];
            goto OMzhq;
            jLgmr:
            duH9s:
            goto AWY1n;
            WaoUB:
            if (count($jawaban_pg) > 0) {
                goto DY7xL;
            }
            goto G8jlA;
            aIiQh:
            if (!($info->tampil_isian > 0)) {
                goto tobOg;
            }
            goto xEGLC;
            mbzMV:
            foreach ($jawaban_jodoh as $num => $jawab_jod) {
                goto W5VFx;
                ZySDU:
                foreach ($arrSoal as $kolSoal) {
                    goto uH3n0;
                    fERJg:
                    foreach ($kolSoal as $pos => $kol) {
                        goto gYNNO;
                        gYNNO:
                        if (!($kol == "\x31")) {
                            goto CJQO6;
                        }
                        goto mSLnu;
                        C5R9m:
                        CJQO6:
                        goto e80YE;
                        mSLnu:
                        $jwb->subtitle[] = $headSoal[$pos];
                        goto QQoN1;
                        e80YE:
                        avHI8:
                        goto joO4s;
                        QQoN1:
                        $items++;
                        goto C5R9m;
                        joO4s:
                    }
                    goto H16V0;
                    WD1dj:
                    YfHWI:
                    goto t0vim;
                    fVQf0:
                    array_push($arrJwbSoal, $jwb);
                    goto WD1dj;
                    uH3n0:
                    $jwb = new stdClass();
                    goto fERJg;
                    XPSI3:
                    $jwb->title = array_shift($kolSoal);
                    goto fVQf0;
                    H16V0:
                    OX22x:
                    goto XPSI3;
                    t0vim:
                }
                goto JErvB;
                b5ynE:
                foreach ($arrJawab as $kolJawab) {
                    goto KRv87;
                    KRv87:
                    $jwbs = new stdClass();
                    goto BtyPZ;
                    MNU0F:
                    array_push($arrJwbJawab, $jwbs);
                    goto VpBNm;
                    YDcmy:
                    K8QYI:
                    goto TSdFC;
                    TSdFC:
                    $jwbs->title = array_shift($kolJawab);
                    goto MNU0F;
                    VpBNm:
                    pfQWJ:
                    goto g0By9;
                    BtyPZ:
                    foreach ($kolJawab as $po => $kol) {
                        goto KUUSs;
                        sLqWm:
                        $sub = $headJawab[$po];
                        goto ihRsL;
                        BATvv:
                        WbvBR:
                        goto RywKO;
                        RywKO:
                        FuyYM:
                        goto x6WZJ;
                        ihRsL:
                        $jwbs->subtitle[] = $sub;
                        goto BATvv;
                        KUUSs:
                        if (!($kol == "\x31")) {
                            goto WbvBR;
                        }
                        goto sLqWm;
                        x6WZJ:
                    }
                    goto YDcmy;
                    g0By9:
                }
                goto CaIaa;
                tHBKE:
                $headSoal = array_shift($arrSoal);
                goto jEPWD;
                zQmZ3:
                CWzcI:
                goto RSyRi;
                jEPWD:
                $arrJwbSoal = [];
                goto doMHf;
                gd62m:
                $item_kurang = 0;
                goto NH9Nh;
                NH9Nh:
                $point_soal = 0;
                goto NVzgO;
                d1hS2:
                goto cs_gI;
                goto zQmZ3;
                rBBRG:
                $item_benar = 0;
                goto up2N6;
                TaBxd:
                if (!isset($jawab_jod->jawaban_siswa->jawaban)) {
                    goto TPL9c;
                }
                goto CRnIU;
                Jk5uH:
                TPL9c:
                goto TpayI;
                hv0is:
                $typeSoal = $jawab_jod->jawaban->type;
                goto KNYs7;
                xF4p9:
                $headJawab = array_shift($arrJawab);
                goto Jk5uH;
                J0aK4:
                zHgPT:
                goto UIt9c;
                xi1eT:
                $soal[3][$ks]->tabel_jawab = $arrJwbJawab;
                goto Zu39M;
                Z3qko:
                cs_gI:
                goto FvMB1;
                TpayI:
                $arrJwbJawab = [];
                goto b5ynE;
                HQaUe:
                $ks = array_search($jawab_jod->nomor_soal, array_column($soal[3], "\x6e\x6f\x6d\x6f\162\137\x73\157\x61\154"));
                goto YEOUE;
                FvMB1:
                $soal[3][$ks]->point_koreksi = $jawab_jod->nilai_koreksi;
                goto Bfc8K;
                V9e1o:
                if ($jawab_jod->nilai_otomatis == "\60") {
                    goto CWzcI;
                }
                goto E0U9N;
                doMHf:
                $items = 0;
                goto ZySDU;
                YEOUE:
                $soal[3][$ks]->type_soal = $typeSoal;
                goto GYyUr;
                UIt9c:
                $benar_jod += 1 / $items * $item_benar;
                goto Dnkv_;
                KDp7O:
                $otomatis_jod = $jawab_jod->nilai_otomatis;
                goto iuExQ;
                iuExQ:
                dwL_k:
                goto baS8m;
                TL0yG:
                $soal[3][$ks]->point_soal = $point_soal;
                goto qsW6i;
                E6oWB:
                $item_lebih = 0;
                goto yGPQW;
                RSyRi:
                $soal[3][$ks]->point = $point;
                goto Z3qko;
                NVzgO:
                foreach ($arrJwbSoal as $ps => $ajj) {
                    goto LgjxW;
                    eszsI:
                    $point_subitem = $point_item / count((array) $ajj->subtitle);
                    goto t15iu;
                    HaR8l:
                    EGz8b:
                    goto T6uYO;
                    t15iu:
                    if (!isset($arrBenar[$ps]->benar)) {
                        goto MBlqP;
                    }
                    goto Oo4vn;
                    gm74Q:
                    MBlqP:
                    goto FJN2Z;
                    T6uYO:
                    gVo9h:
                    goto tPaeG;
                    SPo1K:
                    a5I8A:
                    goto HaR8l;
                    Oo4vn:
                    $point_soal += $point_subitem * $arrBenar[$ps]->benar;
                    goto gm74Q;
                    FJN2Z:
                    $kk = 0;
                    goto IiJ9U;
                    LgjxW:
                    if (!isset($ajj->subtitle)) {
                        goto EGz8b;
                    }
                    goto eszsI;
                    IiJ9U:
                    foreach ($ajj->subtitle as $pps => $aj) {
                        goto B2v3M;
                        UCnlh:
                        t9O_d:
                        goto l1X42;
                        dS2ZG:
                        $kk++;
                        goto UTnZV;
                        UTnZV:
                        $arrBenar[$ps]->kurang = $kk;
                        goto uENYT;
                        uENYT:
                        $item_kurang++;
                        goto aA8sw;
                        aA8sw:
                        lSQq3:
                        goto UCnlh;
                        B2v3M:
                        if (!(isset($arrJwbJawab[$ps]) && !isset($arrJwbJawab[$ps]->subtitle[$pps]))) {
                            goto lSQq3;
                        }
                        goto dS2ZG;
                        l1X42:
                    }
                    goto SPo1K;
                    tPaeG:
                }
                goto isb4r;
                up2N6:
                $item_salah = 0;
                goto E6oWB;
                x2Ymn:
                $soal[3][$ks]->tabel_benar = $arrBenar;
                goto TL0yG;
                Zu39M:
                $arrBenar = [];
                goto rBBRG;
                yGPQW:
                foreach ($arrJwbJawab as $p => $ajjs) {
                    goto EklAc;
                    EklAc:
                    $ll = 0;
                    goto uAUBm;
                    uAUBm:
                    $bb = 0;
                    goto FaWto;
                    baP7B:
                    if (!isset($ajjs->subtitle)) {
                        goto Kxy6x;
                    }
                    goto Dm8q3;
                    sT6Wr:
                    DDykn:
                    goto lXl5u;
                    YRZSr:
                    EKx9M:
                    goto qMBac;
                    FaWto:
                    $ss = 0;
                    goto PXzb6;
                    Dm8q3:
                    foreach ($ajjs->subtitle as $pp => $ajs) {
                        goto JjrmQ;
                        Jlq87:
                        if (!(isset($arrJwbSoal[$p]) && isset($arrJwbSoal[$p]->subtitle))) {
                            goto i0Jdz;
                        }
                        goto WP1oc;
                        y31NI:
                        M5qtS:
                        goto RYwmO;
                        xNTtH:
                        $ll++;
                        goto Q8yxO;
                        PJRet:
                        $ss++;
                        goto nicc7;
                        xpond:
                        $bb++;
                        goto xrkxW;
                        adCNN:
                        AW66v:
                        goto Jlq87;
                        Sp2iW:
                        goto M5qtS;
                        goto w8GKm;
                        RYwmO:
                        i0Jdz:
                        goto hr_TT;
                        Q8yxO:
                        $arrBenar[$p]->lebih = $ll;
                        goto HCc_b;
                        HCc_b:
                        $item_lebih++;
                        goto adCNN;
                        WP1oc:
                        if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) {
                            goto q7seQ;
                        }
                        goto PJRet;
                        JjrmQ:
                        if (!(isset($arrJwbSoal[$p]) && !isset($arrJwbSoal[$p]->subtitle[$pp]))) {
                            goto AW66v;
                        }
                        goto xNTtH;
                        Ux2cd:
                        $item_benar++;
                        goto y31NI;
                        nicc7:
                        $arrBenar[$p]->salah = $ss;
                        goto UX3Y7;
                        hr_TT:
                        SMd3y:
                        goto BAejL;
                        xrkxW:
                        $arrBenar[$p]->benar = $bb;
                        goto Ux2cd;
                        UX3Y7:
                        $item_salah++;
                        goto Sp2iW;
                        w8GKm:
                        q7seQ:
                        goto xpond;
                        BAejL:
                    }
                    goto YRZSr;
                    qMBac:
                    Kxy6x:
                    goto sT6Wr;
                    PXzb6:
                    $arrBenar[$p] = new stdClass();
                    goto baP7B;
                    lXl5u:
                }
                goto J0aK4;
                JErvB:
                ef2Rr:
                goto HQaUe;
                CaIaa:
                c82C1:
                goto xi1eT;
                qsW6i:
                $point = round($point_soal, 2);
                goto V9e1o;
                uE8b0:
                $point_item = $point_benar / count($arrSoal);
                goto gd62m;
                KNYs7:
                $arrSoal = $jawab_jod->jawaban->jawaban;
                goto tHBKE;
                CRnIU:
                $arrJawab = $jawab_jod->jawaban_siswa->jawaban;
                goto xF4p9;
                Bfc8K:
                $soal[3][$ks]->point_otomatis = $point;
                goto KDp7O;
                W5VFx:
                $skor_koreksi_jod += $jawab_jod->nilai_koreksi;
                goto hv0is;
                E0U9N:
                $soal[3][$ks]->point = $jawab_jod->nilai_koreksi;
                goto d1hS2;
                VyWCi:
                $arrJawab = [];
                goto TaBxd;
                GYyUr:
                $soal[3][$ks]->tabel_soal = $arrJwbSoal;
                goto VyWCi;
                Dnkv_:
                $point_benar = $info->bobot_jodohkan > 0 ? round($info->bobot_jodohkan / $info->tampil_jodohkan, 2) : 0;
                goto uE8b0;
                isb4r:
                GWIVa:
                goto x2Ymn;
                baS8m:
            }
            goto jLgmr;
            LXO14:
            FWgNA:
            goto U_G5X;
            h3aOL:
            $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\62"] : [];
            goto WSXfx;
            Obcq0:
            $siswa->selesai_ujian = $selesai;
            goto lftzL;
            JK5DL:
            gMyMN:
            goto SZSZu;
            aBqi1:
            $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2);
            goto I1sHJ;
            OUFhQ:
            $siswa->skor_isian = round($skor_is, 2);
            goto OyrdQ;
            f28XU:
            if (!($nilai_input != null)) {
                goto PaTvP;
            }
            goto rhrv2;
            P2gvk:
            foreach ($durasies as $durasi) {
                goto tCa9I;
                iGQF1:
                $elap = explode("\x3a", $lamanya);
                goto uqVaX;
                eG0eK:
                $em = $elap[1] == "\x30\60" ? '' : intval($elap[1]) + $ed . "\155";
                goto rTrdK;
                qFvtr:
                wFFSD:
                goto iGQF1;
                A0BU5:
                $lamanya = $durasi->lama_ujian;
                goto P2vzE;
                Yb1xp:
                mQOBM:
                goto AF3_y;
                auSxB:
                WFMhx:
                goto Yb1xp;
                tCa9I:
                if (!($durasi->id_siswa == $siswa->id_siswa)) {
                    goto WFMhx;
                }
                goto A0BU5;
                uqVaX:
                $ed = $elap[2] == "\x30\x30" ? 0 : 1;
                goto N7sWy;
                N7sWy:
                $ej = $elap[0] == "\60\x30" ? '' : intval($elap[0]) . "\x6a\40";
                goto eG0eK;
                rTrdK:
                $dd = $ej . $em;
                goto RsVsa;
                CVnoo:
                do9yO:
                goto auSxB;
                ec8ak:
                goto do9yO;
                goto qFvtr;
                P2vzE:
                if (strpos($lamanya, "\x3a") !== false) {
                    goto wFFSD;
                }
                goto x8zrS;
                RsVsa:
                $dur_siswa = $dd == '' ? "\60\x20\155" : $dd;
                goto CVnoo;
                x8zrS:
                $dur_siswa = $durasi->lama_ujian . "\40\155";
                goto ec8ak;
                AF3_y:
            }
            goto rAeT0;
            d4tDF:
            $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal_selected, $siswa->id_siswa);
            goto f28XU;
            G8jlA:
            $n = 0;
            goto zHMXu;
            VNlWe:
            $siswa->durasi_ujian = $lamanya;
            goto tiP6A;
            V3gqX:
            $siswa->skor_katrol = '';
            goto rn6pr;
            MFP5B:
            $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x35"]);
            goto N1SN1;
            zHMXu:
            wVrc6:
            goto O3Fnz;
            qr2Z0:
            $skor_koreksi_is = 0.0;
            goto ny6T6;
            xEGLC:
            foreach ($jawaban_is as $num => $jawab_is) {
                goto KtJq5;
                KtJq5:
                $skor_koreksi_is += $jawab_is->nilai_koreksi;
                goto o_4qP;
                u0NJM:
                $soal[4][$ks]->point_koreksi = $jawab_is->nilai_koreksi;
                goto H79BU;
                ETds4:
                V5pUY:
                goto u0NJM;
                ImtzM:
                $otomatis_is = $jawab_is->nilai_otomatis;
                goto qFtH1;
                b0tVs:
                $benar_is++;
                goto paEMh;
                M1ZeM:
                $point = !$benar ? 0 : ($info->bobot_isian > 0 ? round($info->bobot_isian / $info->tampil_isian, 2) : 0);
                goto NLk0u;
                LfoJe:
                $soal[4][$ks]->point = $jawab_is->nilai_koreksi;
                goto z0kzp;
                CPA3h:
                if (!$benar) {
                    goto xwe6F;
                }
                goto b0tVs;
                paEMh:
                xwe6F:
                goto ZsscX;
                ZsscX:
                $ks = array_search($jawab_is->nomor_soal, array_column($soal[4], "\x6e\x6f\155\157\162\137\x73\x6f\x61\154"));
                goto M1ZeM;
                NLk0u:
                if ($jawab_is->nilai_otomatis == "\60") {
                    goto i3S62;
                }
                goto LfoJe;
                PUd7x:
                $soal[4][$ks]->point = $point;
                goto ETds4;
                WshA6:
                i3S62:
                goto PUd7x;
                qFtH1:
                ShAC9:
                goto VK7Pw;
                o_4qP:
                $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban);
                goto CPA3h;
                z0kzp:
                goto V5pUY;
                goto WshA6;
                H79BU:
                $soal[4][$ks]->point_otomatis = $point;
                goto ImtzM;
                VK7Pw:
            }
            goto FHM1a;
            iZX5Q:
            $skor_pg = 0;
            goto WXqJX;
            NcuZG:
            $total = $skor_pg + $skor_pg2 + $skor_jod + $skor_is + $skor_es;
            goto fmuxB;
            cShlN:
            $siswa->skor_katrol = round(($ya - $yb) / 100 * $total + $yb, 2);
            goto JK5DL;
            any2G:
            $input_is = 0;
            goto zWmFc;
            V1EfB:
            $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai;
            goto JTFOU;
            BhhVw:
            PaTvP:
            goto h3aOL;
            Na8xS:
            $siswa->jawaban_pg = $arrJawabanPg;
            goto b9Upg;
            SZSZu:
            YSNFA:
            goto Qi049;
            OMzhq:
            $skor_koreksi_jod = 0.0;
            goto TE_1i;
            fEVfj:
            if ($ya != null) {
                goto jgaaH;
            }
            goto V3gqX;
            vFu82:
            UugrB:
            goto EfQCk;
            XpuTw:
            ThqBf:
            goto RN7oR;
            OyrdQ:
            $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\x35"] : [];
            goto l8Egz;
            n121Z:
            jgaaH:
            goto tBLfm;
            U_G5X:
            N2Rcs:
            goto V1EfB;
            Oj9FQ:
            $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh;
            goto Eld2O;
            SkRDL:
            $mulai = "\55\40\x2d\40\x20\x3a\x20\40\55\40\x2d";
            goto u0zOf;
            aWLH1:
            $siswa->skor_essai = round($skor_es, 2);
            goto NcuZG;
            WGSJc:
            $otomatis_es = 0;
            goto ZqJAX;
            LFmEy:
            $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x34"]);
            goto MFP5B;
            x3NJr:
            $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2;
            goto xMCaI;
            yeo0R:
            if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) {
                goto ewAXp;
            }
            goto H5lzg;
            ZwXlp:
            $xa = $total;
            goto M15xl;
            ZqJAX:
            $benar_es = 0;
            goto Jrzja;
            JTFOU:
            $input_es = 0;
            goto gFGE9;
            b1Tlt:
            $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x32"]);
            goto AxlKn;
            WQ13J:
            A_ZPc:
            goto b3nby;
            v7isD:
            $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\x31"] : [];
            goto LBxOK;
            WXqJX:
            if (!($info->tampil_pg > 0)) {
                goto tyXry;
            }
            goto WaoUB;
            Qi049:
        }
        goto gkpBA;
        uXUxu:
        $this->load->view("\x63\142\x74\57\156\151\x6c\141\x69\57\144\141\x74\141");
        goto Qqet5;
        qgw5Y:
        $kelas_selected = $this->input->get("\x6b\x65\x6c\141\x73");
        goto QblUO;
        lM0W3:
        $this->load->view("\x5f\164\145\155\x70\154\141\164\145\x73\57\144\141\x73\150\142\157\x61\162\144\57\137\146\157\157\x74\x65\162");
        goto YebQE;
        bXC9n:
        $bobot_pg2 = $info->bobot_kompleks / 100;
        goto pUiR2;
        Rhfgl:
        if ($jadwal_selected != null) {
            goto TgA_M;
        }
        goto ES2uc;
        Shbva:
        $data["\x73\x65\163\151"] = $this->dropdown->getAllSesi();
        goto qgw5Y;
        G7hfD:
        $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal_selected);
        goto i3gYP;
        JxWJT:
        BODfg:
        goto J4V4O;
        FNcZk:
        $this->load->view("\x63\x62\x74\57\156\151\x6c\141\x69\57\x64\141\x74\141");
        goto lM0W3;
        uKkx2:
        Goe6k:
        goto zOjNs;
        ZAFDp:
        $yb = $this->input->get("\x79\x62");
        goto jqPEV;
        vUgfP:
        Whjq7:
        goto H9dVh;
        Qqet5:
        $this->load->view("\155\x65\x6d\142\145\x72\163\57\147\x75\x72\165\57\164\145\155\160\x6c\x61\x74\x65\x73\57\146\x6f\x6f\164\x65\162");
        goto B04KY;
        HnGe4:
        goto OnCm5;
        goto xp_X6;
        at1gU:
        $user = $this->ion_auth->user()->row();
        goto SeAWn;
        TRwEP:
        $convert = ["\171\x61" => $ya, "\x79\142" => $yb, "\x78\x61" => $xa, "\170\142" => $xb];
        goto IWvmj;
        gXp8l:
        foreach ($siswas as $key => $value) {
            array_push($ids, $value->id_siswa);
            I2flB:
        }
        goto bXHbf;
        rWVzt:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto dBGtE;
        tbS99:
        $bobot_isian = $info->bobot_isian / 100;
        goto CNVX3;
        UW6Ce:
        if (!($mapel != null)) {
            goto UZdvV;
        }
        goto N4UVV;
        J4V4O:
        $jadwals = $this->cbt->getAllJadwal($tp->id_tp, $smt->id_smt, $id_guru);
        goto i2zes;
        i3gYP:
        $logs = $this->cbt->getLogUjianByJadwal($jadwal_selected);
        goto ZGR0r;
        SzBbE:
        $id_guru = null;
        goto ZgfJW;
        qz7HO:
        $data["\x6b\x65\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt);
        goto TiuCk;
        z74MW:
        $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas)));
        goto QAt0o;
        cnjJS:
        $data["\152\x61\144\x77\141\x6c\x5f\163\145\x6c\x65\143\164\x65\144"] = $jadwal_selected;
        goto qz7HO;
        o38nz:
        $tp = $this->dashboard->getTahunActive();
        goto zkMP0;
        UbBN5:
        KB6JY:
        goto G7hfD;
        Hcyjw:
        $kelases = [];
        goto G_Hh7;
        QchYi:
        $data["\163\x6d\x74\137\x61\x63\x74\151\x76\x65"] = $smt;
        goto i3VpB;
        RFKzY:
        $mapel_guru = $this->kelas->getGuruMapelKelas($id_guru, $tp->id_tp, $smt->id_smt);
        goto z74MW;
        mtkFp:
        foreach ($jadwals as $jadwal) {
            goto JLGXk;
            KaJyb:
            YD8_m:
            goto ZKqIq;
            yRQoK:
            foreach ($kls as $kl) {
                goto X7bt5;
                X7bt5:
                if (!($kl["\x6b\x65\x6c\141\x73\137\x69\x64"] == $kelas_selected)) {
                    goto JyivW;
                }
                goto pmCEa;
                Xyz8j:
                JyivW:
                goto idiBm;
                idiBm:
                U3GDK:
                goto a22YQ;
                pmCEa:
                $jdwl[$jadwal->id_jadwal] = $jadwal->bank_kode;
                goto Xyz8j;
                a22YQ:
            }
            goto lv68H;
            lv68H:
            RQDul:
            goto KaJyb;
            JLGXk:
            $kls = unserialize($jadwal->bank_kelas);
            goto yRQoK;
            ZKqIq:
        }
        goto DnRWA;
        QAt0o:
        $data["\152\x61\x64\x77\141\154\137\163\x65\x6c\145\x63\164\x65\144"] = $jadwal_selected;
        goto Hvyse;
        G_Hh7:
        foreach ($kelas_bank as $key => $value) {
            goto MIzq7;
            pyFqO:
            YP645:
            goto FdT91;
            MIzq7:
            if (!($value["\153\145\154\141\x73\137\151\x64"] != '')) {
                goto SWXWX;
            }
            goto NiDZa;
            NiDZa:
            $kelases[$value["\x6b\145\x6c\x61\163\137\x69\x64"]] = $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $value["\153\145\154\141\163\x5f\151\144"]);
            goto ZqF5Y;
            ZqF5Y:
            SWXWX:
            goto pyFqO;
            FdT91:
        }
        goto JxWJT;
        ES2uc:
        $data["\152\141\x64\167\x61\x6c"] = [];
        goto HnGe4;
        SeAWn:
        $this->db->trans_start();
        goto F64PV;
        etzeJ:
        $bagi_pg = $info->tampil_pg / 100;
        goto UJEC_;
        QblUO:
        $jadwal_selected = $this->input->get("\152\141\x64\167\141\154");
        goto XW7VT;
        i2zes:
        $jdwl = [];
        goto mtkFp;
        NaPy_:
        $ya = $this->input->get("\171\141");
        goto ZAFDp;
        jqPEV:
        $xa = $this->input->get("\x78\x61");
        goto w0DHT;
        xp_X6:
        TgA_M:
        goto dweLE;
        kbIh6:
        $data["\160\x72\x6f\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id);
        goto cnjJS;
        ZgfJW:
        goto A3BHt;
        goto vUgfP;
        UJEC_:
        $bobot_pg = $info->bobot_pg / 100;
        goto SZD41;
        i3VpB:
        $data["\x72\x75\141\x6e\147"] = $this->dropdown->getAllRuang();
        goto Shbva;
        jVxUo:
        $jawabans_siswa = [];
        goto YuOCi;
        ZdD4O:
        $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas_selected);
        goto K7Pg8;
        SveGp:
        $bobot_jodoh = $info->bobot_jodohkan / 100;
        goto dOfP0;
        pUiR2:
        $bagi_jodoh = $info->tampil_jodohkan / 100;
        goto SveGp;
        H9dVh:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto il8wC;
        il8wC:
        $data["\147\x75\x72\x75"] = $guru;
        goto Bymgj;
        URewm:
        $this->db->trans_complete();
        goto OLvLa;
        W7Xnp:
        OnCm5:
        goto URewm;
        w0DHT:
        $xb = $this->input->get("\x78\142");
        goto hZHDi;
        XsZ61:
        $this->load->view("\155\x65\x6d\142\145\x72\163\57\x67\165\x72\x75\x2f\164\x65\155\x70\x6c\x61\x74\x65\x73\57\x68\145\141\144\x65\x72", $data);
        goto uXUxu;
        zOjNs:
        UZdvV:
        goto YKk_W;
        Hvyse:
        $arrKelas = [];
        goto UW6Ce;
        nU9_f:
        A3BHt:
        goto Rhfgl;
        dOfP0:
        $bagi_isian = $info->tampil_isian / 100;
        goto tbS99;
        coyjr:
        $data["\152\141\144\167\x61\154"] = $jdwl;
        goto W7Xnp;
        OLvLa:
        if ($this->ion_auth->is_admin()) {
            goto pnpjs;
        }
        goto RFKzY;
        xfjcm:
    }
    public function detail()
    {
        goto OejrA;
        nCvpG:
        foreach ($jawaban_is as $num => $jawab_is) {
            goto IIhyk;
            yjwE0:
            $soal[4][$ks]->point = $jawab_is->nilai_koreksi;
            goto U5d7y;
            AlHms:
            $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban);
            goto gSsWW;
            fr2ZE:
            boCci:
            goto pu66o;
            U5d7y:
            goto eFyT6;
            goto fr2ZE;
            yRhMO:
            e0Kuw:
            goto PsV0S;
            oXT43:
            $soal[4][$ks]->point_otomatis = $point;
            goto jOqoX;
            lPXH0:
            goto e0Kuw;
            goto SvFr2;
            lBNWv:
            J91vy:
            goto x8RWs;
            sIKwL:
            eFyT6:
            goto Y9Lxi;
            pu66o:
            $soal[4][$ks]->point = $point;
            goto sIKwL;
            Y9Lxi:
            $soal[4][$ks]->point_koreksi = $jawab_is->nilai_koreksi;
            goto oXT43;
            zJwb4:
            $otomatis_is = $jawab_is->nilai_otomatis;
            goto lBNWv;
            uqr3i:
            $analisa = "\74\x69\40\x63\154\141\163\x73\75\x22\x66\141\x20\146\x61\55\x63\x68\x65\x63\x6b\55\x63\151\162\143\154\145\x20\x74\145\x78\164\x2d\x67\x72\145\145\156\x20\164\145\170\164\55\154\x67\42\76\74\57\x69\76";
            goto yRhMO;
            Xs30r:
            $benar_is++;
            goto apenZ;
            IIhyk:
            $skor_koreksi_is += $jawab_is->nilai_koreksi;
            goto AlHms;
            gSsWW:
            if (!$benar) {
                goto Qid9Q;
            }
            goto Xs30r;
            cEBr7:
            if ($jawab_is->nilai_otomatis == "\60") {
                goto boCci;
            }
            goto yjwE0;
            jOqoX:
            if ($benar) {
                goto m8gtR;
            }
            goto V6m4q;
            V6m4q:
            $analisa = "\x3c\x69\x20\143\x6c\141\x73\163\75\x22\x66\x61\40\146\141\x2d\x74\151\155\145\163\55\x63\151\162\143\x6c\x65\40\164\145\x78\164\55\x79\x65\x6c\154\157\x77\x20\164\x65\170\x74\x2d\x6c\147\42\76\74\x2f\x69\x3e";
            goto lPXH0;
            SvFr2:
            m8gtR:
            goto uqr3i;
            AuyV3:
            $ks = array_search($jawab_is->nomor_soal, array_column($soal[4], "\x6e\x6f\x6d\x6f\x72\137\x73\x6f\x61\154"));
            goto COEEK;
            PsV0S:
            $soal[4][$ks]->analisa = $analisa;
            goto zJwb4;
            COEEK:
            $point = !$benar ? 0 : ($info->bobot_isian > 0 ? round($info->bobot_isian / $info->tampil_isian, 2) : 0);
            goto cEBr7;
            apenZ:
            Qid9Q:
            goto AuyV3;
            x8RWs:
        }
        goto V8Z3M;
        YshVU:
        if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) {
            goto c3cV1;
        }
        goto sDUOd;
        rDPye:
        BjES5:
        goto K2vdk;
        Pw2ZT:
        $salah_pg = 0;
        goto dS5Wx;
        eLn35:
        VtHFy:
        goto DX4A4;
        iRspA:
        foreach ($durasies as $durasi) {
            goto rnqRq;
            LoMrj:
            $dur_siswa = $durasi;
            goto dc173;
            dc173:
            waecH:
            goto eqvtU;
            eqvtU:
            S1Pbs:
            goto kJGPL;
            rnqRq:
            if (!($durasi->id_siswa == $siswa->id_siswa)) {
                goto waecH;
            }
            goto LoMrj;
            kJGPL:
        }
        goto ABxTX;
        xRhBo:
        foreach ($jawaban_es as $num => $jawab_es) {
            goto Uuk2M;
            plECA:
            $point = !$benar ? 0 : ($info->bobot_esai > 0 ? round($info->bobot_esai / $info->tampil_esai, 2) : 0);
            goto liKdk;
            aAJ3P:
            $soal[5][$ks]->point_koreksi = $jawab_es->nilai_koreksi;
            goto JTSpt;
            Mel6C:
            if ($benar) {
                goto atyYH;
            }
            goto qeI9U;
            lkG2h:
            D_dCV:
            goto SYMvV;
            C9kHd:
            if (!$benar) {
                goto D_dCV;
            }
            goto U1wRd;
            N96Qi:
            $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban);
            goto C9kHd;
            sBvtp:
            $soal[5][$ks]->point = $jawab_es->nilai_koreksi;
            goto W9g8Q;
            cqMaD:
            atyYH:
            goto CAC4S;
            qeI9U:
            $analisa = "\x3c\x69\x20\x63\154\141\x73\x73\x3d\x22\146\x61\x20\146\x61\x2d\x74\151\x6d\x65\x73\55\x63\x69\162\143\154\x65\40\x74\145\170\x74\55\171\145\154\154\x6f\167\40\x74\145\170\164\55\154\x67\x22\x3e\x3c\57\x69\x3e";
            goto OlA2V;
            OluZk:
            wF5hn:
            goto Z3Tvs;
            rvI6W:
            $soal[5][$ks]->analisa = $analisa;
            goto ie3Or;
            JTSpt:
            $soal[5][$ks]->point_otomatis = $point;
            goto Mel6C;
            CAC4S:
            $analisa = "\74\x69\40\143\x6c\141\x73\163\75\x22\146\141\x20\x66\141\x2d\143\150\145\143\153\55\x63\x69\162\143\x6c\x65\40\164\x65\x78\164\x2d\147\x72\145\145\x6e\x20\164\x65\170\x74\x2d\x6c\147\x22\x3e\74\57\151\76";
            goto PZ4pX;
            Uuk2M:
            $skor_koreksi_es += $jawab_es->nilai_koreksi;
            goto N96Qi;
            W9g8Q:
            goto kQUPk;
            goto OluZk;
            PZ4pX:
            HsTae:
            goto rvI6W;
            U1wRd:
            $benar_es++;
            goto lkG2h;
            SYMvV:
            $ks = array_search($jawab_es->nomor_soal, array_column($soal[5], "\x6e\x6f\155\x6f\x72\137\163\157\x61\x6c"));
            goto plECA;
            ie3Or:
            $otomatis_es = $jawab_es->nilai_otomatis;
            goto X90tz;
            OlA2V:
            goto HsTae;
            goto cqMaD;
            X90tz:
            FMTCM:
            goto kw7JC;
            Z3Tvs:
            $soal[5][$ks]->point = $point;
            goto WkmTI;
            WkmTI:
            kQUPk:
            goto aAJ3P;
            liKdk:
            if ($jawab_es->nilai_otomatis == "\60") {
                goto wF5hn;
            }
            goto sBvtp;
            kw7JC:
        }
        goto IRgSx;
        q_gvj:
        $data["\x73\151\x73\167\141"] = $siswa;
        goto cpOtC;
        OejrA:
        $tp = $this->dashboard->getTahunActive();
        goto dbHTz;
        z3TpI:
        $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod);
        goto DIm5O;
        UdU0e:
        $bagi_pg2 = $info->tampil_kompleks / 100;
        goto FKSqV;
        cH5ew:
        $skor->skor_pg = $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg;
        goto PYOFy;
        gZldg:
        $otomatis_pg2 = 0;
        goto KkgEP;
        J5MoS:
        foreach ($jawaban_pg as $num => $jwb_pg) {
            goto YRZ4P;
            g2zfS:
            if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) {
                goto YIw9G;
            }
            goto hoBi8;
            zDo1G:
            $ks = array_search($jwb_pg->nomor_soal, array_column($soal[1], "\x6e\x6f\x6d\x6f\162\x5f\163\157\x61\154"));
            goto EVgXt;
            EVgXt:
            $soal[1][$ks]->point = !$benar ? 0 : ($info->bobot_pg > 0 ? round($info->bobot_pg / $info->tampil_pg, 2) : 0);
            goto mKeHm;
            Cfo3c:
            rZudV:
            goto Lc7XJ;
            mKeHm:
            $analisa = $benar ? "\x3c\x69\x20\143\x6c\141\163\x73\x3d\x22\146\141\40\x66\x61\x2d\x63\x68\145\143\153\x2d\143\151\x72\x63\154\x65\x20\x74\x65\x78\164\55\147\162\x65\x65\156\x20\x74\x65\x78\164\x2d\154\147\x22\x3e\74\x2f\x69\76" : "\x3c\x69\40\143\x6c\141\163\x73\x3d\42\x66\141\40\x66\x61\x2d\164\x69\155\145\163\55\x63\x69\162\143\154\x65\40\164\x65\x78\x74\x2d\162\145\144\x20\x74\145\170\164\55\154\147\x22\76\x3c\57\x69\x3e";
            goto zMqWA;
            hoBi8:
            if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban)) {
                goto RnNh0;
            }
            goto ASAEC;
            ASAEC:
            $salah_pg += 1;
            goto Wb6yD;
            YRZ4P:
            $benar = false;
            goto g2zfS;
            Wb6yD:
            $benar = false;
            goto qCdRZ;
            SoMZM:
            RnNh0:
            goto T4RiV;
            U48hv:
            $benar = true;
            goto Cfo3c;
            zMqWA:
            $soal[1][$ks]->analisa = $analisa;
            goto PZJ62;
            qCdRZ:
            goto rZudV;
            goto SoMZM;
            T4RiV:
            $benar_pg += 1;
            goto U48hv;
            Lc7XJ:
            YIw9G:
            goto zDo1G;
            PZJ62:
            YtiOw:
            goto dDj2Q;
            dDj2Q:
        }
        goto qKhL2;
        yWkCr:
        $jadwal = $this->input->get("\x6a\141\x64\x77\x61\154");
        goto wycc4;
        pm416:
        if (!(count($jawaban_es) > 0)) {
            goto A_4cD;
        }
        goto xRhBo;
        Lq9OD:
        $user = $this->ion_auth->user()->row();
        goto xMYoM;
        w65D2:
        $bobot_pg = $info->bobot_pg / 100;
        goto UdU0e;
        mY5EF:
        $data["\151\156\x66\x6f"] = $info;
        goto q_gvj;
        zwoVk:
        $input_pg2 = $nilai_input->kompleks_nilai;
        goto I8qX8;
        B8L69:
        $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es);
        goto auHZ2;
        Ppyxn:
        foreach ($jawaban_jodoh as $num => $jawab_jod) {
            goto qUFi2;
            YqPJR:
            $soal[3][$ks]->tabel_benar = $arrBenar;
            goto kVSxJ;
            i_wt2:
            B4Kte:
            goto o14f4;
            HGr_N:
            $soal[3][$ks]->point_otomatis = $point;
            goto JyBGJ;
            xX5Je:
            Lu7PG:
            goto aJqgp;
            aVkne:
            $arrBenar = [];
            goto E7Z4K;
            Pv5Vp:
            $point_soal = 0;
            goto R0XMD;
            Hk68h:
            $soal[3][$ks]->tabel_soal = $arrJwbSoal;
            goto wQVQu;
            q4c0V:
            $soal[3][$ks]->type_soal = $typeSoal;
            goto Hk68h;
            wHxzL:
            goto gJtV3;
            goto xX5Je;
            Eon3t:
            G0FA_:
            goto YqPJR;
            PeY4B:
            foreach ($arrJwbJawab as $p => $ajjs) {
                goto XJxD2;
                M7C8p:
                $arrBenar[$p] = new stdClass();
                goto Do_x_;
                XJxD2:
                $ll = 0;
                goto jOI98;
                OCciE:
                ZZFug:
                goto bjcEO;
                SCKnI:
                XbSbp:
                goto cOiZY;
                qfzNN:
                $ss = 0;
                goto M7C8p;
                cOiZY:
                YbxKS:
                goto OCciE;
                jOI98:
                $bb = 0;
                goto qfzNN;
                Do_x_:
                if (!isset($ajjs->subtitle)) {
                    goto YbxKS;
                }
                goto fMKsx;
                fMKsx:
                foreach ($ajjs->subtitle as $pp => $ajs) {
                    goto nRlbD;
                    yLj4Q:
                    $ll++;
                    goto NinnN;
                    IrFh0:
                    $item_lebih++;
                    goto nJ0he;
                    DxnB_:
                    $bb++;
                    goto oDDJO;
                    nJ0he:
                    L_62K:
                    goto B6yto;
                    B6yto:
                    if (!(isset($arrJwbSoal[$p]) && isset($arrJwbSoal[$p]->subtitle))) {
                        goto tBNN1;
                    }
                    goto EaoQr;
                    V_ORq:
                    $arrBenar[$p]->salah = $ss;
                    goto juxuX;
                    jB9ko:
                    $item_benar++;
                    goto S06lU;
                    KRTLD:
                    $ss++;
                    goto V_ORq;
                    NinnN:
                    $arrBenar[$p]->lebih = $ll;
                    goto IrFh0;
                    CzkTd:
                    tBNN1:
                    goto plmnk;
                    S06lU:
                    doOih:
                    goto CzkTd;
                    C2bsZ:
                    goto doOih;
                    goto H5IEj;
                    EaoQr:
                    if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) {
                        goto zFQDV;
                    }
                    goto KRTLD;
                    plmnk:
                    AL7tn:
                    goto hkjNN;
                    oDDJO:
                    $arrBenar[$p]->benar = $bb;
                    goto jB9ko;
                    nRlbD:
                    if (!(isset($arrJwbSoal[$p]) && !isset($arrJwbSoal[$p]->subtitle[$pp]))) {
                        goto L_62K;
                    }
                    goto yLj4Q;
                    H5IEj:
                    zFQDV:
                    goto DxnB_;
                    juxuX:
                    $item_salah++;
                    goto C2bsZ;
                    hkjNN:
                }
                goto SCKnI;
                bjcEO:
            }
            goto ZcOuH;
            OS0Cz:
            $soal[3][$ks]->analisa = $analisa;
            goto b2J59;
            o18dZ:
            $arrJawab = $jawab_jod->jawaban_siswa->jawaban;
            goto NzKDU;
            CEh7Y:
            $arrJwbJawab = [];
            goto ca8oP;
            NzKDU:
            $headJawab = array_shift($arrJawab);
            goto duPX8;
            Yx5uG:
            $arrJwbSoal = [];
            goto O02AC;
            qyaC0:
            LmjmX:
            goto xEsFH;
            JkFG4:
            $typeSoal = $jawab_jod->jawaban->type;
            goto hh2yL;
            E7Z4K:
            $item_benar = 0;
            goto ICIy1;
            C1XbP:
            gJtV3:
            goto OS0Cz;
            nyxGv:
            $point = round($point_soal, 2);
            goto o252c;
            xEsFH:
            $ks = array_search($jawab_jod->nomor_soal, array_column($soal[3], "\x6e\157\155\157\162\137\x73\157\x61\x6c"));
            goto q4c0V;
            VoC4p:
            $benar_jod += 1 / $items * $item_benar;
            goto xooT4;
            q0FHn:
            if (!isset($jawab_jod->jawaban_siswa->jawaban)) {
                goto HB55j;
            }
            goto o18dZ;
            JyBGJ:
            if ($item_benar == $items && $item_salah == 0 && $item_lebih == 0 && $item_kurang == 0) {
                goto B4Kte;
            }
            goto zUdVg;
            ugrE_:
            JGe87:
            goto J1Iu_;
            ICIy1:
            $item_salah = 0;
            goto Bn0UH;
            VkZW_:
            $soal[3][$ks]->point_koreksi = $jawab_jod->nilai_koreksi;
            goto HGr_N;
            hh2yL:
            $arrSoal = $jawab_jod->jawaban->jawaban;
            goto v2ddJ;
            TKlu6:
            $point_item = $point_benar / count($arrSoal);
            goto WYJG9;
            GOYE0:
            goto gJtV3;
            goto i_wt2;
            ca8oP:
            foreach ($arrJawab as $kolJawab) {
                goto Q1hH9;
                LuMXi:
                foreach ($kolJawab as $po => $kol) {
                    goto kNHng;
                    Jqoo3:
                    Q852b:
                    goto wISwO;
                    j9fqj:
                    $sub = $headJawab[$po];
                    goto fCDNx;
                    kNHng:
                    if (!($kol == "\x31")) {
                        goto Q852b;
                    }
                    goto j9fqj;
                    fCDNx:
                    $jwbs->subtitle[] = $sub;
                    goto Jqoo3;
                    wISwO:
                    Nv1kV:
                    goto usZRd;
                    usZRd:
                }
                goto VLsec;
                Q1hH9:
                $jwbs = new stdClass();
                goto LuMXi;
                VLsec:
                JYcVj:
                goto jE09R;
                Wtttn:
                array_push($arrJwbJawab, $jwbs);
                goto Y_2MB;
                jE09R:
                $jwbs->title = array_shift($kolJawab);
                goto Wtttn;
                Y_2MB:
                jMjjU:
                goto gs7Tb;
                gs7Tb:
            }
            goto ugrE_;
            VCck1:
            $analisa = "\x3c\151\x20\143\x6c\141\163\163\x3d\42\x66\x61\x20\146\x61\x2d\x74\x69\155\145\x73\x2d\143\151\x72\x63\154\145\40\x74\x65\170\164\55\x79\x65\x6c\154\x6f\x77\40\164\x65\x78\164\x2d\x6c\147\42\x3e\74\57\151\76";
            goto GOYE0;
            zUdVg:
            if ($item_benar == 0) {
                goto Lu7PG;
            }
            goto VCck1;
            Bb6P9:
            $soal[3][$ks]->point = $jawab_jod->nilai_koreksi;
            goto Zw8AP;
            qUFi2:
            $skor_koreksi_jod += $jawab_jod->nilai_koreksi;
            goto JkFG4;
            wQVQu:
            $arrJawab = [];
            goto q0FHn;
            G3HvW:
            RTUto:
            goto DQgmP;
            mns54:
            foreach ($arrSoal as $kolSoal) {
                goto Kvkzc;
                WGfQE:
                foreach ($kolSoal as $pos => $kol) {
                    goto zpy2C;
                    SnU1u:
                    $items++;
                    goto n8ABC;
                    gLdem:
                    TYPoS:
                    goto cpbbm;
                    zpy2C:
                    if (!($kol == "\61")) {
                        goto erfwj;
                    }
                    goto f3rDs;
                    f3rDs:
                    $jwb->subtitle[] = $headSoal[$pos];
                    goto SnU1u;
                    n8ABC:
                    erfwj:
                    goto gLdem;
                    cpbbm:
                }
                goto NxsWw;
                Kvkzc:
                $jwb = new stdClass();
                goto WGfQE;
                nnqCo:
                array_push($arrJwbSoal, $jwb);
                goto XAzR0;
                qLmrH:
                $jwb->title = array_shift($kolSoal);
                goto nnqCo;
                XAzR0:
                DsJzb:
                goto qGcIu;
                NxsWw:
                hiQva:
                goto qLmrH;
                qGcIu:
            }
            goto qyaC0;
            kVSxJ:
            $soal[3][$ks]->point_soal = $point_soal;
            goto nyxGv;
            b2J59:
            $otomatis_jod = $jawab_jod->nilai_otomatis;
            goto G3HvW;
            sM3tC:
            CKkRS:
            goto VPMmi;
            duPX8:
            HB55j:
            goto CEh7Y;
            aJqgp:
            $analisa = "\74\151\40\x63\154\141\x73\163\x3d\x22\x66\141\x20\x66\141\x2d\164\x69\x6d\145\163\x2d\143\x69\x72\143\x6c\145\40\164\x65\170\164\x2d\162\x65\x64\40\164\x65\170\164\55\154\147\x22\x3e\x3c\57\151\x3e";
            goto C1XbP;
            Zw8AP:
            goto Awn9A;
            goto sM3tC;
            xooT4:
            $point_benar = $info->bobot_jodohkan > 0 ? round($info->bobot_jodohkan / $info->tampil_jodohkan, 2) : 0;
            goto TKlu6;
            O02AC:
            $items = 0;
            goto mns54;
            WYJG9:
            $item_kurang = 0;
            goto Pv5Vp;
            o14f4:
            $analisa = "\x3c\x69\40\143\154\x61\163\x73\x3d\x22\146\141\x20\146\141\55\x63\x68\x65\143\x6b\55\143\x69\162\x63\x6c\145\40\x74\x65\x78\x74\x2d\x67\x72\x65\145\x6e\40\x74\145\x78\164\x2d\154\x67\42\x3e\74\57\151\x3e";
            goto wHxzL;
            ZcOuH:
            DlmmN:
            goto VoC4p;
            Bn0UH:
            $item_lebih = 0;
            goto PeY4B;
            v2ddJ:
            $headSoal = array_shift($arrSoal);
            goto Yx5uG;
            J1Iu_:
            $soal[3][$ks]->tabel_jawab = $arrJwbJawab;
            goto aVkne;
            o252c:
            if ($jawab_jod->nilai_otomatis == "\x30") {
                goto CKkRS;
            }
            goto Bb6P9;
            R0XMD:
            foreach ($arrJwbSoal as $ps => $ajj) {
                goto nQyMc;
                PZXtn:
                EnW0y:
                goto VaUdX;
                VaUdX:
                lBds5:
                goto CHM1b;
                CHM1b:
                DymHx:
                goto R0uRK;
                t9Izy:
                $point_subitem = $point_item / count((array) $ajj->subtitle);
                goto Fi86l;
                Fi86l:
                if (!isset($arrBenar[$ps]->benar)) {
                    goto JdIq8;
                }
                goto P9My5;
                p7yUx:
                JdIq8:
                goto XLvGS;
                P9My5:
                $point_soal += $point_subitem * $arrBenar[$ps]->benar;
                goto p7yUx;
                nQyMc:
                if (!isset($ajj->subtitle)) {
                    goto lBds5;
                }
                goto t9Izy;
                XLvGS:
                $kk = 0;
                goto rOywp;
                rOywp:
                foreach ($ajj->subtitle as $pps => $aj) {
                    goto ejtBE;
                    P7fBI:
                    $kk++;
                    goto HvC72;
                    ff_9d:
                    $item_kurang++;
                    goto DhwHI;
                    ejtBE:
                    if (!(isset($arrJwbJawab[$ps]) && !isset($arrJwbJawab[$ps]->subtitle[$pps]))) {
                        goto JIlTB;
                    }
                    goto P7fBI;
                    kmn0E:
                    DmPHo:
                    goto cQXuo;
                    DhwHI:
                    JIlTB:
                    goto kmn0E;
                    HvC72:
                    $arrBenar[$ps]->kurang = $kk;
                    goto ff_9d;
                    cQXuo:
                }
                goto PZXtn;
                R0uRK:
            }
            goto Eon3t;
            VPMmi:
            $soal[3][$ks]->point = $point;
            goto lMWTw;
            lMWTw:
            Awn9A:
            goto VkZW_;
            DQgmP:
        }
        goto eVIi3;
        ZVJG3:
        if (!($info->tampil_jodohkan > 0)) {
            goto GB0k4;
        }
        goto aDE_l;
        ikXs3:
        gQEKQ:
        goto PmZLF;
        Ah2tx:
        $data["\163\x6d\164"] = $this->dashboard->getSemester();
        goto m_3Ye;
        PYOFy:
        $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\62"] : [];
        goto WLu73;
        wW2_J:
        FkTkM:
        goto mwd0A;
        t1m4s:
        vZkUC:
        goto fHZwo;
        P1OTN:
        $skor->skor_total = $total;
        goto f3W91;
        qzN94:
        $data["\x67\165\x72\165"] = $guru;
        goto zSVpq;
        fjgVo:
        A_4cD:
        goto Sr_o3;
        FKSqV:
        $bobot_pg2 = $info->bobot_kompleks / 100;
        goto Vqy4n;
        Cr8W4:
        AfeWV:
        goto pc8vh;
        mCj2U:
        if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) {
            goto mnIOS;
        }
        goto zwoVk;
        ghxKS:
        $jawabans = $this->cbt->getJawabanSiswaByJadwal($jadwal, $siswa->id_siswa);
        goto gSVHv;
        gSVHv:
        $soal = [];
        goto nAXA1;
        I8qX8:
        mnIOS:
        goto n_0uY;
        bsFxe:
        $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\61"]);
        goto tqfIq;
        OzUOG:
        $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2;
        goto Z4JLr;
        fz6zi:
        $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\64"]);
        goto XiZAN;
        Kf3rZ:
        $bagi_essai = $info->tampil_esai / 100;
        goto Q18Oc;
        Sr_o3:
        rYs8C:
        goto m6zf3;
        mjxAE:
        $this->load->view("\143\142\164\57\156\151\154\141\x69\57\144\x65\164\141\x69\154");
        goto Lb_4k;
        qKhL2:
        VwU7p:
        goto wW2_J;
        zfC9m:
        $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\64"] : [];
        goto aF2fg;
        K2vdk:
        $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]);
        goto bsFxe;
        RTjkp:
        $skor_koreksi_es = 0.0;
        goto LpVfd;
        aF2fg:
        $benar_is = 0;
        goto Vobl4;
        EcQwI:
        if (!($info->tampil_isian > 0)) {
            goto AfeWV;
        }
        goto b7W6V;
        kPalw:
        $input_is = $nilai_input->isian_nilai;
        goto ikXs3;
        eVIi3:
        peQzm:
        goto eLn35;
        KkgEP:
        if (!($info->tampil_kompleks > 0)) {
            goto U0G1b;
        }
        goto Iu24g;
        Vqy4n:
        $bagi_jodoh = $info->tampil_jodohkan / 100;
        goto mo0Ij;
        eSnMn:
        $this->load->view("\x5f\164\x65\x6d\x70\154\x61\x74\145\x73\57\144\141\163\x68\142\157\141\x72\x64\57\137\146\x6f\x6f\164\145\x72");
        goto t1m4s;
        Q18Oc:
        $bobot_essai = $info->bobot_esai / 100;
        goto ghxKS;
        m6zf3:
        $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai;
        goto mwoFn;
        KcZUH:
        foreach ($logs as $log) {
            goto mX1p7;
            VsD5T:
            array_push($log_siswa, $log);
            goto lyokO;
            lyokO:
            Oe0Yp:
            goto RbGJl;
            RbGJl:
            i8jAa:
            goto xPGzx;
            mX1p7:
            if (!($log->id_siswa == $siswa->id_siswa)) {
                goto Oe0Yp;
            }
            goto VsD5T;
            xPGzx:
        }
        goto w4EDM;
        djDzZ:
        $skor = new stdClass();
        goto KguxX;
        LRNRl:
        $input_jod = 0;
        goto YshVU;
        rb4sw:
        $bagi_isian = $info->tampil_isian / 100;
        goto HAn6x;
        DX4A4:
        GB0k4:
        goto ca30Y;
        wbKtz:
        $dur_siswa = null;
        goto iRspA;
        k5JlY:
        if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
            goto gQEKQ;
        }
        goto kPalw;
        V8Z3M:
        SoY_I:
        goto I8plo;
        oWOfQ:
        SruA1:
        goto YhZM_;
        dS5Wx:
        if (!($info->tampil_pg > 0)) {
            goto PA0iu;
        }
        goto Gq4pM;
        IaEvK:
        if (!($nilai_input != null && $nilai_input->isian_nilai != null)) {
            goto UQGH6;
        }
        goto WKt00;
        auHZ2:
        $skor->skor_essai = $skor_es;
        goto GjDUv;
        mwoFn:
        $input_es = 0;
        goto IaEvK;
        w4EDM:
        plNlH:
        goto Lq9OD;
        KguxX:
        $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal, $siswa->id_siswa);
        goto rmI26;
        dbHTz:
        $smt = $this->dashboard->getSemesterActive();
        goto hfb0D;
        Lb_4k:
        $this->load->view("\155\x65\155\x62\145\x72\163\x2f\x67\x75\162\x75\57\164\145\155\x70\154\x61\x74\x65\163\x2f\146\157\x6f\x74\x65\162");
        goto AWGHA;
        ABxTX:
        KlyMX:
        goto XHO8Q;
        rmI26:
        if (!($nilai_input != null)) {
            goto Vcad6;
        }
        goto toUru;
        m_3Ye:
        $data["\163\x6d\164\x5f\x61\143\x74\151\x76\145"] = $smt;
        goto mY5EF;
        F4gkK:
        Vcad6:
        goto Y23Ze;
        cpOtC:
        $data["\x73\x6f\x61\154"] = $soal;
        goto qEFfS;
        A1G6g:
        $benar_jod = 0;
        goto edYTj;
        XzFR2:
        $otomatis_is = 0;
        goto EcQwI;
        IKjxq:
        foreach ($jawaban_pg2 as $num => $jawab_pg2) {
            goto GcwdN;
            LTlCR:
            $soal[2][$ks]->point = $point;
            goto oO3ox;
            Kw0f9:
            $soal[2][$ks]->point_koreksi = $jawab_pg2->nilai_koreksi;
            goto PThZF;
            jEF3K:
            $otomatis_pg2 = $jawab_pg2->nilai_otomatis;
            goto XyjzB;
            qAsh6:
            goto Zy2Nk;
            goto dxAj2;
            EQW91:
            if ($jml_benar > 0 && $jml_benar < count($jawab_pg2->jawaban)) {
                goto v7Xrg;
            }
            goto TJ9MR;
            ZJ9sC:
            if ($jml_benar == count($jawab_pg2->jawaban)) {
                goto XcL5c;
            }
            goto EQW91;
            gsoXt:
            Zy2Nk:
            goto KTUBK;
            WbydO:
            $analisa = "\74\x69\x20\x63\x6c\x61\x73\x73\75\x22\146\x61\40\x66\141\55\x74\151\x6d\145\163\x2d\143\x69\162\x63\154\145\40\164\x65\170\x74\55\x79\145\154\x6c\157\167\40\x74\x65\x78\x74\x2d\x6c\147\x22\x3e\x3c\57\151\76";
            goto gsoXt;
            XyjzB:
            p0YfO:
            goto G85nh;
            LgWyE:
            if ($jawab_pg2->nilai_otomatis == "\x30") {
                goto hby2m;
            }
            goto OJVHS;
            kCz4l:
            goto Zy2Nk;
            goto a7Zbp;
            DqE3P:
            hby2m:
            goto LTlCR;
            vIdxr:
            $arr_benar = [];
            goto iSGmr;
            a7Zbp:
            XcL5c:
            goto W_2fe;
            AYI8O:
            $jml_benar = count($arr_benar);
            goto ZJ9sC;
            P73hh:
            $benar_pg2 += 1 / count($jawab_pg2->jawaban) * count($arr_benar);
            goto HrnU9;
            hUlnb:
            dDXkR:
            goto cTyAL;
            KTUBK:
            $ks = array_search($jawab_pg2->nomor_soal, array_column($soal[2], "\156\x6f\155\x6f\162\x5f\163\157\141\154"));
            goto M8nnr;
            cTyAL:
            deDh2:
            goto Ey6Ue;
            L_xPw:
            foreach ($jawab_pg2->jawaban_siswa as $js) {
                goto JnrLs;
                I8yij:
                array_push($arr_benar, true);
                goto C1IJc;
                ciAx_:
                HfUoC:
                goto Wc2wq;
                C1IJc:
                WlRZH:
                goto ciAx_;
                JnrLs:
                if (!in_array($js, $jawab_pg2->jawaban)) {
                    goto WlRZH;
                }
                goto I8yij;
                Wc2wq:
            }
            goto hUlnb;
            OJVHS:
            $soal[2][$ks]->point = $jawab_pg2->nilai_koreksi;
            goto Bue8S;
            dxAj2:
            v7Xrg:
            goto WbydO;
            HrnU9:
            rt68U:
            goto LxR_N;
            Ey6Ue:
            if (!(count($jawab_pg2->jawaban) > 0)) {
                goto rt68U;
            }
            goto P73hh;
            oO3ox:
            NXgSB:
            goto Kw0f9;
            PThZF:
            $soal[2][$ks]->point_otomatis = $point;
            goto jEF3K;
            Bue8S:
            goto NXgSB;
            goto DqE3P;
            L4cmW:
            $point_item = count($jawab_pg2->jawaban) > 0 ? $point_benar / count($jawab_pg2->jawaban) : 0;
            goto cZ1lV;
            LxR_N:
            $point_benar = $info->bobot_kompleks > 0 ? round($info->bobot_kompleks / $info->tampil_kompleks, 2) : 0;
            goto L4cmW;
            GcwdN:
            $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi;
            goto vIdxr;
            cZ1lV:
            $pk = $point_item * count($arr_benar);
            goto AYI8O;
            W_2fe:
            $analisa = "\74\x69\x20\x63\x6c\141\x73\163\x3d\42\146\x61\40\x66\141\x2d\x63\x68\x65\x63\153\x2d\143\x69\x72\143\154\145\x20\164\x65\170\164\55\x67\x72\x65\145\156\40\164\145\x78\x74\x2d\154\x67\x22\76\x3c\x2f\x69\x3e";
            goto qAsh6;
            Wg9XG:
            $soal[2][$ks]->analisa = $analisa;
            goto LgWyE;
            iSGmr:
            if (!$jawab_pg2->jawaban_siswa) {
                goto deDh2;
            }
            goto L_xPw;
            TJ9MR:
            $analisa = "\74\151\x20\x63\x6c\x61\163\163\75\x22\146\141\x20\x66\x61\55\x74\x69\x6d\145\x73\55\143\151\162\x63\154\x65\x20\164\145\x78\164\55\x72\x65\x64\x20\164\145\170\x74\55\154\147\42\76\x3c\x2f\x69\76";
            goto kCz4l;
            M8nnr:
            $point = round($pk, 2);
            goto Wg9XG;
            G85nh:
        }
        goto KOBQx;
        aDE_l:
        if (!(count($jawaban_jodoh) > 0)) {
            goto VtHFy;
        }
        goto Ppyxn;
        TDcyL:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto qzN94;
        KOBQx:
        Eeu6k:
        goto oWOfQ;
        nAXA1:
        $jawabans_siswa = [];
        goto xnEW4;
        WqxcL:
        if (!($info->tampil_esai > 0)) {
            goto rYs8C;
        }
        goto pm416;
        AWGHA:
        goto vZkUC;
        goto Sh3Zt;
        xZMiG:
        $bagi_pg = $info->tampil_pg / 100;
        goto w65D2;
        cgrNq:
        $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\63"]);
        goto fz6zi;
        LgSyO:
        $benar_es = 0;
        goto RTjkp;
        LpVfd:
        $otomatis_es = 0;
        goto WqxcL;
        Iu24g:
        if (!(count($jawaban_pg2) > 0)) {
            goto SruA1;
        }
        goto IKjxq;
        lrWUq:
        $skor->skor_isian = $skor_is;
        goto eJIEm;
        xMYoM:
        $data = ["\x75\x73\x65\162" => $user, "\152\165\x64\x75\154" => "\113\x6f\x72\x65\153\163\151\40\110\141\163\151\154\x20\123\x69\x73\167\141", "\x73\x75\x62\152\165\x64\x75\154" => "\x48\x61\163\x69\154\40\123\x69\163\x77\141", "\163\145\164\164\x69\156\147" => $this->dashboard->getSetting(), "\144\x75\162\141\x73\x69" => $dur_siswa, "\154\x6f\x67" => $log_siswa];
        goto OpUym;
        wQNrZ:
        $data["\x70\162\x6f\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto fTuOM;
        WLu73:
        $benar_pg2 = 0;
        goto daOXX;
        GjDUv:
        $total = $skor_pg + $skor_pg2 + $skor_jod + $skor_is + $skor_es;
        goto P1OTN;
        YhZM_:
        U0G1b:
        goto OzUOG;
        Y23Ze:
        $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\61"] : [];
        goto OLnPc;
        WKt00:
        $input_es = $nilai_input->essai_nilai;
        goto BPFi9;
        XHO8Q:
        $log_siswa = [];
        goto KcZUH;
        xMxhF:
        $logs = $this->cbt->getLogUjianByJadwal($jadwal);
        goto wbKtz;
        PmZLF:
        $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is);
        goto lrWUq;
        qEFfS:
        $data["\x73\153\157\x72"] = $skor;
        goto p0AIP;
        DIm5O:
        $skor->skor_jodohkan = $skor_jod;
        goto zfC9m;
        toUru:
        $skor->dikoreksi = $nilai_input->dikoreksi;
        goto F4gkK;
        zSVpq:
        $this->load->view("\x6d\x65\155\142\145\x72\x73\x2f\147\x75\x72\x75\57\x74\145\x6d\x70\154\141\164\145\x73\57\150\x65\141\144\145\162", $data);
        goto mjxAE;
        f3W91:
        $durasies = $this->cbt->getDurasiSiswaByJadwal($jadwal);
        goto xMxhF;
        IRgSx:
        EtC0N:
        goto fjgVo;
        eJIEm:
        $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\x35"] : [];
        goto LgSyO;
        OpUym:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto zQfcr;
        Vobl4:
        $skor_koreksi_is = 0.0;
        goto XzFR2;
        wycc4:
        $info = $this->cbt->getJadwalById($jadwal);
        goto xZMiG;
        hfb0D:
        $siswa = $this->cbt->getSiswaById($tp->id_tp, $smt->id_smt, $this->input->get("\x73\151\x73\167\x61"));
        goto yWkCr;
        XiZAN:
        $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\65"]);
        goto djDzZ;
        BPFi9:
        UQGH6:
        goto B8L69;
        edYTj:
        $skor_koreksi_jod = 0.0;
        goto B6GPY;
        Gq4pM:
        if (!(count($jawaban_pg) > 0)) {
            goto FkTkM;
        }
        goto J5MoS;
        Aeoxv:
        $input_is = 0;
        goto k5JlY;
        OLnPc:
        $benar_pg = 0;
        goto Pw2ZT;
        iyqaB:
        c3cV1:
        goto z3TpI;
        pc8vh:
        $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian;
        goto Aeoxv;
        fTuOM:
        $this->load->view("\x5f\164\x65\155\x70\x6c\x61\164\x65\163\57\144\x61\163\x68\x62\157\x61\x72\144\57\137\150\x65\x61\x64\x65\162", $data);
        goto K0BNe;
        daOXX:
        $skor_koreksi_pg2 = 0.0;
        goto gZldg;
        S2aPq:
        $skor->skor_kompleks = $skor_pg2;
        goto h3dXL;
        h3dXL:
        $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\63"] : [];
        goto A1G6g;
        b7W6V:
        if (!(count($jawaban_is) > 0)) {
            goto f5eIR;
        }
        goto nCvpG;
        K0BNe:
        $this->load->view("\143\142\164\x2f\156\x69\x6c\x61\x69\x2f\144\145\x74\141\x69\154");
        goto eSnMn;
        Z4JLr:
        $input_pg2 = 0;
        goto mCj2U;
        I8plo:
        f5eIR:
        goto Cr8W4;
        zQfcr:
        $data["\164\x70\137\141\143\164\x69\x76\145"] = $tp;
        goto Ah2tx;
        tqfIq:
        $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\62"]);
        goto cgrNq;
        mwd0A:
        PA0iu:
        goto cH5ew;
        sDUOd:
        $input_jod = $nilai_input->jodohkan_nilai;
        goto iyqaB;
        xnEW4:
        foreach ($jawabans as $jawaban_siswa) {
            goto BMwIN;
            mrgAE:
            $jawaban_siswa->jawaban = json_decode(json_encode($jawaban_siswa->jawaban));
            goto NaCLM;
            Hl3pE:
            $jawaban_siswa->jawaban = @unserialize($jawaban_siswa->jawaban);
            goto VQhWQ;
            nzxAl:
            $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto bbYCm;
            A9C5I:
            vXuwE:
            goto sQ20J;
            MoRuQ:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto GezKe;
            Ht0s1:
            $jawaban_siswa->jawaban_benar = array_map("\163\x74\x72\164\x6f\x75\x70\160\145\x72", $jawaban_siswa->jawaban_benar);
            goto UTDVp;
            GezKe:
            $jawaban_siswa->jawaban = @unserialize($jawaban_siswa->jawaban);
            goto Ht0s1;
            WCZw8:
            $jawaban_siswa->jawaban = array_filter($jawaban_siswa->jawaban, "\163\164\x72\154\x65\x6e");
            goto A9C5I;
            zObHA:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto nHjT3;
            yC2hy:
            $jawaban_siswa->jawaban = array_map("\163\x74\x72\164\x6f\165\x70\160\145\x72", $jawaban_siswa->jawaban);
            goto WCZw8;
            zllpK:
            $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa);
            goto MoRuQ;
            UTDVp:
            $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\163\x74\x72\x6c\x65\x6e");
            goto yC2hy;
            LZgAM:
            $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar));
            goto mrgAE;
            CDofC:
            $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa;
            goto nzxAl;
            VQhWQ:
            $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa));
            goto LZgAM;
            bbYCm:
            qsLCP:
            goto NN871;
            BMwIN:
            if (!($jawaban_siswa->jenis_soal == "\x32")) {
                goto vXuwE;
            }
            goto av1wf;
            nHjT3:
            $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar);
            goto Hl3pE;
            sQ20J:
            if (!($jawaban_siswa->jenis_soal == "\x33")) {
                goto Frrja;
            }
            goto zObHA;
            NaCLM:
            Frrja:
            goto CDofC;
            av1wf:
            $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a);
            goto zllpK;
            NN871:
        }
        goto rDPye;
        ca30Y:
        $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh;
        goto LRNRl;
        n_0uY:
        $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2);
        goto S2aPq;
        mo0Ij:
        $bobot_jodoh = $info->bobot_jodohkan / 100;
        goto rb4sw;
        B6GPY:
        $otomatis_jod = 0;
        goto ZVJG3;
        HAn6x:
        $bobot_isian = $info->bobot_isian / 100;
        goto Kf3rZ;
        p0AIP:
        if ($this->ion_auth->is_admin()) {
            goto Iy9la;
        }
        goto TDcyL;
        Sh3Zt:
        Iy9la:
        goto wQNrZ;
        fHZwo:
    }
    public function simpanKoreksi()
    {
        goto tybHi;
        tybHi:
        $siswa = $this->input->post("\163\151\x73\167\x61", true);
        goto VdO8b;
        GKbB0:
        $updated = [];
        goto l6Lud;
        XXOfu:
        $this->db->set($jenis, $jml);
        goto SnADC;
        l6Lud:
        $ids = [];
        goto JwTC2;
        ptmmC:
        rqMDB:
        goto djOWn;
        PLYnp:
        foreach ($nilais as $nilai) {
            goto xWj1a;
            xWj1a:
            array_push($ids, $nilai->id_soal);
            goto qOgc1;
            YFSmZ:
            cdOHu:
            goto AcXqr;
            qOgc1:
            $jml += $nilai->koreksi;
            goto i5tnN;
            i5tnN:
            $updated[] = ["\151\x64\x5f\x73\157\x61\x6c\x5f\x73\151\x73\x77\x61" => $nilai->id_soal, "\156\x69\x6c\x61\x69\x5f\x6b\157\162\145\153\x73\x69" => $nilai->koreksi, "\x6e\151\154\x61\151\137\157\x74\157\155\141\x74\x69\163" => 1];
            goto YFSmZ;
            AcXqr:
        }
        goto F16LX;
        niCfg:
        if (!$updated) {
            goto rqMDB;
        }
        goto XXOfu;
        F16LX:
        OcNxZ:
        goto BeN56;
        CELoR:
        $this->db->update("\x63\142\164\x5f\156\151\x6c\141\x69");
        goto ptmmC;
        zZH3s:
        $jenis = $this->input->post("\152\x65\x6e\x69\x73", true);
        goto DpB67;
        DpB67:
        $nilais = json_decode($this->input->post("\156\x69\154\x61\151", true));
        goto GKbB0;
        JwTC2:
        $jml = 0;
        goto PLYnp;
        SnADC:
        $this->db->where("\151\x64\x5f\156\x69\x6c\141\151", $siswa . "\60" . $jadwal);
        goto CELoR;
        BeN56:
        $updated = $this->db->update_batch("\x63\x62\164\137\163\x6f\x61\x6c\137\163\151\163\167\141", $updated, "\151\x64\137\x73\157\141\x6c\x5f\163\x69\x73\x77\141");
        goto niCfg;
        opjeN:
        $this->output_json($data);
        goto sDVkZ;
        djOWn:
        $data["\x73\165\143\x63\x65\x73\163"] = $updated;
        goto opjeN;
        VdO8b:
        $jadwal = $this->input->post("\x6a\x61\144\167\x61\x6c", true);
        goto zZH3s;
        sDVkZ:
    }
    public function tandaiKoreksi()
    {
        goto HtPSN;
        ZXkHi:
        $this->db->set("\x64\x69\153\x6f\x72\145\153\163\151", 1);
        goto LU90X;
        BzICb:
        $jadwal = $this->input->post("\x6a\141\144\x77\141\154", true);
        goto ZXkHi;
        HtPSN:
        $siswa = $this->input->post("\x73\151\x73\x77\x61", true);
        goto BzICb;
        BPcFm:
        $data["\x73\165\143\143\x65\163\x73"] = $updated;
        goto sxUKr;
        VtdCm:
        $updated = $this->db->update("\x63\x62\164\x5f\156\x69\x6c\141\151");
        goto BPcFm;
        LU90X:
        $this->db->where("\151\x64\x5f\156\x69\154\141\x69", $siswa . "\x30" . $jadwal);
        goto VtdCm;
        sxUKr:
        $this->output_json($data);
        goto chP0b;
        chP0b:
    }
    public function inputEssai()
    {
        goto BVLV0;
        UfcQW:
        $smt = $this->dashboard->getSemesterActive();
        goto w474M;
        PIffx:
        $this->load->view("\143\x62\x74\57\x6e\x69\154\x61\x69\x2f\x6e\151\154\x61\x69\137\x65\x73\x73\x61\151");
        goto kaVu1;
        AREXx:
        $jadwal_selected = $this->input->get("\152\x61\144\167\141\x6c");
        goto ouygC;
        zh08j:
        $data["\x6a\x61\x64\167\x61\x6c"] = $info;
        goto mdPae;
        HMnDo:
        $user = $this->ion_auth->user()->row();
        goto EoqUQ;
        teK8m:
        $ids = [];
        goto i0gjR;
        JFHjb:
        $data["\152\141\144\x77\141\154\x5f\163\145\154\x65\143\164\145\144"] = $jadwal_selected;
        goto zh08j;
        BuMb5:
        foreach ($siswas as $siswa) {
            goto OR3nO;
            VYw4m:
            n3btK:
            goto PvuOB;
            WaEYv:
            $siswa->skor_jod = isset($nilai[$siswa->id_siswa]) ? $nilai[$siswa->id_siswa]->jodohkan_nilai : "\x30";
            goto vSybw;
            vSybw:
            $siswa->skor_isian = isset($nilai[$siswa->id_siswa]) ? $nilai[$siswa->id_siswa]->isian_nilai : "\60";
            goto fsLri;
            QArYU:
            $siswa->skor_pg2 = isset($nilai[$siswa->id_siswa]) ? $nilai[$siswa->id_siswa]->kompleks_nilai : "\60";
            goto WaEYv;
            fsLri:
            $siswa->skor_essai = isset($nilai[$siswa->id_siswa]) ? $nilai[$siswa->id_siswa]->essai_nilai : "\60";
            goto VYw4m;
            OR3nO:
            $siswa->skor_pg = isset($nilai[$siswa->id_siswa]) ? $nilai[$siswa->id_siswa]->pg_nilai : "\60";
            goto QArYU;
            PvuOB:
        }
        goto aIhNt;
        mdPae:
        $data["\x73\x69\x73\167\141\163"] = $siswas;
        goto SaLXM;
        HBOBw:
        $tp = $this->dashboard->getTahunActive();
        goto UfcQW;
        SaLXM:
        $this->load->view("\137\x74\145\x6d\160\x6c\x61\164\x65\x73\57\144\141\163\150\142\x6f\x61\162\144\x2f\x5f\150\x65\x61\144\145\162", $data);
        goto PIffx;
        kaVu1:
        $this->load->view("\x5f\x74\145\155\160\154\x61\164\145\163\57\144\141\x73\x68\142\157\141\x72\144\57\x5f\x66\x6f\157\164\x65\x72");
        goto Fy4Cq;
        EoqUQ:
        $data = ["\165\163\x65\162" => $user, "\152\x75\144\165\x6c" => "\x49\x6e\160\x75\164\x20\x4e\151\154\141\151\40\x4d\x61\156\165\x61\x6c", "\163\165\x62\152\165\x64\x75\154" => '', "\x70\x72\157\146\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto SscXR;
        Gq7cb:
        $data["\x73\x6d\x74\137\x61\143\x74\x69\x76\x65"] = $smt;
        goto Yh5_e;
        BVLV0:
        $kelas_selected = $this->input->get("\153\x65\x6c\x61\x73");
        goto AREXx;
        ouygC:
        $info = $this->cbt->getJadwalById($jadwal_selected);
        goto HBOBw;
        Yh5_e:
        $data["\156\141\155\141\x5f\153\x65\154\141\x73"] = $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kelas_selected);
        goto Wef9o;
        i0gjR:
        foreach ($siswas as $key => $val) {
            array_push($ids, $val->id_siswa);
            EFVej:
        }
        goto NNS6j;
        iwdBW:
        $data["\164\x70\137\141\x63\x74\x69\x76\145"] = $tp;
        goto Gq7cb;
        SscXR:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto cfFqH;
        w474M:
        $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas_selected);
        goto teK8m;
        NNS6j:
        F3U96:
        goto lghMZ;
        cfFqH:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto iwdBW;
        aIhNt:
        abUnT:
        goto HMnDo;
        Wef9o:
        $data["\x6b\145\154\x61\x73\137\x73\145\154\145\x63\164\x65\x64"] = $kelas_selected;
        goto JFHjb;
        lghMZ:
        $nilai = $this->cbt->getNilaiAllSiswa([$jadwal_selected], $ids);
        goto BuMb5;
        Fy4Cq:
    }
    public function simpanKoreksiEssai()
    {
        goto NIL32;
        vLE5h:
        $nilais = json_decode($this->input->post("\156\x69\154\x61\151", true));
        goto SugWP;
        SugWP:
        $update = 0;
        goto JflNX;
        Xk5oZ:
        $this->output_json($data);
        goto XCSdB;
        ume_2:
        $data["\163\165\x63\x63\145\x73\163"] = $update;
        goto ixPHC;
        F6eBL:
        $data["\x62\x6c\155\x5f\x73\x65\x6c\x65\x73\141\151"] = count($blm_selesai);
        goto Xk5oZ;
        JflNX:
        $blm_selesai = [];
        goto l8ZtE;
        l8ZtE:
        foreach ($nilais as $nilai) {
            goto QuBCb;
            BkSE7:
            c0kHJ:
            goto aUceM;
            pCYoR:
            goto zQ1bL;
            goto Z6rzh;
            b8Gyn:
            $up = $this->db->replace("\143\142\x74\x5f\x6e\151\154\141\151", $replace);
            goto pe77J;
            zVpZ0:
            $replace = ["\x69\144\137\156\151\154\141\x69" => $nilai_siswa->id_nilai, "\151\144\137\x73\x69\x73\167\x61" => $nilai_siswa->id_siswa, "\151\144\x5f\152\141\144\x77\x61\x6c" => $nilai_siswa->id_jadwal, "\x70\x67\137\142\145\x6e\141\162" => $nilai_siswa->pg_benar, "\x70\x67\137\156\151\x6c\141\x69" => $nilai_siswa->pg_nilai, "\x6b\157\x6d\x70\154\x65\x6b\163\x5f\x6e\x69\x6c\x61\x69" => isset($nilai->kompleks_nilai) && $nilai->kompleks_nilai != null ? $nilai->kompleks_nilai : "\60", "\x6a\x6f\144\157\x68\153\141\156\137\x6e\151\x6c\141\151" => isset($nilai->jodohkan_nilai) && $nilai->jodohkan_nilai != null ? $nilai->jodohkan_nilai : "\60", "\151\x73\x69\141\156\x5f\156\x69\154\141\151" => isset($nilai->isian_nilai) && $nilai->isian_nilai != null ? $nilai->isian_nilai : "\60", "\145\163\163\141\x69\x5f\x6e\151\154\141\151" => isset($nilai->essai_nilai) && $nilai->essai_nilai != null ? $nilai->essai_nilai : "\60", "\x64\x69\x6b\157\162\145\x6b\x73\x69" => "\61"];
            goto b8Gyn;
            Z6rzh:
            JrK8z:
            goto zVpZ0;
            Gbv8Z:
            array_push($blm_selesai, $nilai->id_siswa);
            goto pCYoR;
            o73FG:
            $update++;
            goto BkSE7;
            aUceM:
            zQ1bL:
            goto DtAVm;
            pe77J:
            if (!$up) {
                goto c0kHJ;
            }
            goto o73FG;
            DtAVm:
            fTEEF:
            goto YUq0x;
            QuBCb:
            $nilai_siswa = $this->cbt->getNilaiSiswaByJadwal($jadwal, $nilai->id_siswa);
            goto SbiQP;
            SbiQP:
            if ($nilai_siswa != null) {
                goto JrK8z;
            }
            goto Gbv8Z;
            YUq0x:
        }
        goto PLh5D;
        ixPHC:
        $data["\x64\141\x74\x61"] = $nilais;
        goto F6eBL;
        PLh5D:
        V2P5k:
        goto ume_2;
        NIL32:
        $jadwal = $this->input->post("\152\x61\144\x77\141\154", true);
        goto vLE5h;
        XCSdB:
    }
}
