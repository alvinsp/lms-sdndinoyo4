<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Walisiswa extends CI_Controller
{
    public function __construct()
    {
        goto DYdeM;
        P7hUE:
        show_error("\110\x61\x6e\171\x61\x20\101\x64\155\151\156\151\163\164\x72\141\x74\x6f\x72\x20\x64\x61\x6e\x20\x67\x75\162\165\40\x79\141\x6e\147\40\144\x69\x62\145\162\x69\40\150\x61\153\40\165\x6e\164\165\x6b\40\155\145\x6e\x67\x61\x6b\163\145\163\x20\x68\x61\154\141\x6d\141\x6e\40\151\156\x69\54\40\x3c\141\x20\x68\x72\x65\x66\75\x22" . base_url("\144\x61\163\150\142\157\x61\x72\144") . "\42\76\113\x65\x6d\142\x61\154\151\x20\x6b\x65\x20\155\x65\156\165\40\141\x77\x61\154\74\x2f\141\x3e", 403, "\101\153\x73\x65\x73\40\x54\145\162\x6c\x61\x72\141\156\x67");
        goto cxQUh;
        cxQUh:
        bc1hR:
        goto WTEBL;
        OAI6C:
        if (!$this->ion_auth->logged_in()) {
            goto THEVc;
        }
        goto qe9gY;
        UObaE:
        GN36M:
        goto OesJ0;
        WTEBL:
        goto GN36M;
        goto yWCbi;
        KzkRN:
        $this->load->model("\115\x61\x73\164\x65\162\x5f\x6d\x6f\x64\x65\154", "\x6d\x61\163\x74\x65\x72");
        goto uf7XT;
        yWCbi:
        THEVc:
        goto loCs5;
        ZRJze:
        $this->form_validation->set_error_delimiters('', '');
        goto IQWFl;
        OesJ0:
        $this->load->library(["\144\x61\x74\141\x74\141\142\x6c\x65\163", "\146\157\x72\x6d\137\166\141\154\x69\x64\141\x74\x69\157\x6e"]);
        goto KzkRN;
        qe9gY:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) {
            goto bc1hR;
        }
        goto P7hUE;
        loCs5:
        redirect("\x61\165\x74\150");
        goto UObaE;
        DYdeM:
        parent::__construct();
        goto OAI6C;
        qUIxI:
        $this->load->model("\x43\x62\x74\137\155\x6f\x64\145\154", "\143\142\x74");
        goto ZRJze;
        uf7XT:
        $this->load->model("\104\x61\x73\150\x62\157\141\x72\144\x5f\155\157\144\145\154", "\x64\x61\x73\x68\x62\x6f\141\x72\x64");
        goto qUIxI;
        IQWFl:
    }
    public function output_json($data, $encode = true)
    {
        goto EVvvN;
        JRkAv:
        $data = json_encode($data);
        goto x09D0;
        x09D0:
        DKfY6:
        goto N2IIX;
        N2IIX:
        $this->output->set_content_type("\x61\x70\160\154\x69\x63\x61\164\151\157\156\57\152\x73\x6f\156")->set_output($data);
        goto Xd6kE;
        EVvvN:
        if (!$encode) {
            goto DKfY6;
        }
        goto JRkAv;
        Xd6kE:
    }
    public function index()
    {
        goto Z_c9E;
        lEcxW:
        $this->load->view("\x6d\145\155\x62\x65\x72\163\57\147\x75\x72\165\57\x74\x65\155\x70\x6c\x61\x74\x65\x73\x2f\x66\x6f\157\164\x65\x72");
        goto hI7Xq;
        FZ8kR:
        $tp = $this->master->getTahunActive();
        goto shfvO;
        l43Vq:
        $this->load->view("\155\x65\x6d\x62\145\x72\163\57\147\165\x72\165\x2f\167\x61\154\x69\57\x6b\x65\x6c\141\163");
        goto lEcxW;
        IFbGv:
        $data["\163\x6d\x74"] = $this->dashboard->getSemester();
        goto cTdXJ;
        cTdXJ:
        $data["\163\x6d\x74\x5f\141\x63\x74\151\166\145"] = $smt;
        goto XY16h;
        cH_us:
        $data = ["\x75\x73\145\x72" => $user, "\152\165\x64\x75\154" => "\x44\141\146\164\x61\162\40\x53\x69\163\167\x61", "\x73\165\142\x6a\x75\x64\165\x6c" => "\123\x69\163\167\141\x20\x4b\x65\154\x61\x73\40\x41\156\x64\141", "\x73\145\x74\164\x69\156\x67" => $this->dashboard->getSetting()];
        goto FZ8kR;
        XY16h:
        $data["\x67\165\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto HPdhf;
        K0coo:
        $data["\x74\160\137\141\143\164\x69\166\145"] = $tp;
        goto IFbGv;
        HPdhf:
        $this->load->view("\155\145\x6d\142\x65\162\x73\x2f\147\x75\162\x75\57\164\145\x6d\x70\x6c\141\164\x65\x73\57\x68\x65\141\144\x65\x72", $data);
        goto l43Vq;
        shfvO:
        $smt = $this->master->getSemesterActive();
        goto bkwVi;
        Z_c9E:
        $user = $this->ion_auth->user()->row();
        goto cH_us;
        bkwVi:
        $data["\x74\160"] = $this->dashboard->getTahun();
        goto K0coo;
        hI7Xq:
    }
    public function dataKelas()
    {
        goto c7ICE;
        hJdwy:
        $smt = $this->dashboard->getSemesterActive();
        goto c3xQV;
        c3xQV:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto zO2OR;
        aU0ph:
        $tp = $this->dashboard->getTahunActive();
        goto hJdwy;
        c7ICE:
        $user = $this->ion_auth->user()->row();
        goto aU0ph;
        zO2OR:
        $this->output_json($this->master->getDataSiswaByKelas($tp->id_tp, $smt->id_smt, $guru->wali_kelas), false);
        goto uRrY8;
        uRrY8:
    }
    public function list()
    {
        goto AzgxV;
        q63Ef:
        $offset = ($page - 1) * $limit;
        goto xtEFw;
        WHw59:
        $lists = $this->master->getDataSiswaByKelas($tp->id_tp, $smt->id_smt, $id_kelas, $offset, $limit, $search);
        goto hXF6V;
        xtEFw:
        $tp = $this->dashboard->getTahunActive();
        goto bm4g2;
        uCCvL:
        $count_siswa = $this->master->getDataSiswaByKelasPage($tp->id_tp, $smt->id_smt, $id_kelas, $search);
        goto WHw59;
        DSkp1:
        $search = $this->input->post("\x73\x65\x61\162\x63\x68", true);
        goto TVs3Z;
        TVs3Z:
        $id_kelas = $this->input->post("\x6b\145\154\x61\163", true);
        goto q63Ef;
        hXF6V:
        $data = ["\154\x69\163\x74\x73" => $lists, "\x74\x6f\164\141\154" => $count_siswa, "\160\141\147\x65\163" => ceil($count_siswa / $limit), "\x73\145\x61\162\x63\x68" => $search, "\160\x65\162\160\141\147\145" => $limit];
        goto DO_UX;
        DO_UX:
        $this->output_json($data);
        goto U5lRU;
        AzgxV:
        $page = $this->input->post("\160\x61\x67\145", true);
        goto RTUy1;
        bm4g2:
        $smt = $this->dashboard->getSemesterActive();
        goto uCCvL;
        RTUy1:
        $limit = $this->input->post("\154\x69\155\151\164", true);
        goto DSkp1;
        U5lRU:
    }
    public function edit($id)
    {
        goto wcayo;
        sPAoo:
        $tp = $this->master->getTahunActive();
        goto ZNB2g;
        wcayo:
        $siswa = $this->master->getSiswaById($id);
        goto GkcAw;
        KIyH2:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto k_MPK;
        k_MPK:
        $data["\164\160\137\141\x63\164\151\166\x65"] = $tp;
        goto BMZPT;
        p8qBp:
        $data["\151\x6e\160\x75\164\x5f\142\x69\x6f"] = json_decode(json_encode($inputBio), FALSE);
        goto Yi101;
        AGDCf:
        $data["\151\156\x70\165\x74\137\144\x61\x74\141"] = json_decode(json_encode($inputData), FALSE);
        goto p8qBp;
        xaqt7:
        $inputWali = [["\156\x61\x6d\x65" => "\x6e\x61\x6d\x61\137\x77\x61\154\x69", "\x6c\x61\142\x65\x6c" => "\116\141\155\141\x20\127\141\x6c\x69", "\166\x61\154\x75\145" => $siswa->nama_wali, "\x69\x63\x6f\156" => "\x66\141\x72\40\x66\x61\x2d\165\163\145\x72", "\x74\x79\160\145" => "\x74\x65\x78\x74"], ["\x6e\x61\155\x65" => "\x70\145\156\144\151\x64\x69\153\x61\x6e\137\167\x61\154\x69", "\x6c\141\142\145\x6c" => "\x50\145\156\144\x69\144\x69\153\141\156\40\x57\141\x6c\151", "\166\x61\154\x75\145" => $siswa->pendidikan_wali, "\151\143\x6f\156" => "\x66\141\162\40\146\141\55\165\x73\x65\x72", "\x74\171\x70\x65" => "\164\x65\x78\x74"], ["\156\141\x6d\x65" => "\x70\145\153\x65\162\x6a\141\x61\x6e\x5f\167\x61\x6c\x69", "\x6c\141\142\145\154" => "\x50\x65\x6b\x65\162\x6a\141\x61\156\40\127\141\x6c\x69", "\x76\x61\x6c\165\145" => $siswa->pekerjaan_wali, "\151\143\x6f\156" => "\146\141\162\x20\146\x61\x2d\x75\x73\145\x72", "\x74\171\160\145" => "\x74\x65\170\164"], ["\x6e\141\155\x65" => "\141\154\x61\155\x61\164\137\x77\x61\154\151", "\x6c\x61\x62\145\154" => "\x41\154\x61\155\x61\x74\x20\x57\141\154\x69", "\x76\141\x6c\x75\145" => $siswa->alamat_wali, "\x69\143\157\x6e" => "\146\141\162\40\x66\141\55\x75\163\x65\162", "\164\171\160\145" => "\x74\145\x78\x74"], ["\156\x61\155\145" => "\156\x6f\x68\160\x5f\x77\141\154\151", "\x6c\x61\142\145\154" => "\116\x6f\56\x20\x48\x50\x20\127\x61\x6c\x69", "\166\141\x6c\x75\145" => $siswa->nohp_wali, "\151\x63\157\156" => "\146\141\162\40\146\x61\55\x75\x73\145\x72", "\x74\x79\x70\145" => "\156\x75\x6d\x62\145\162"]];
        goto yGWLX;
        yGWLX:
        $user = $this->ion_auth->user()->row();
        goto nN8i5;
        TGeSi:
        $data["\147\165\162\x75"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto ifdCN;
        XCQfl:
        $inputOrtu = [["\156\141\x6d\x65" => "\x6e\x61\x6d\141\x5f\141\171\141\x68", "\154\141\142\x65\x6c" => "\x4e\141\155\141\40\x41\171\x61\x68", "\x76\141\154\165\145" => $siswa->nama_ayah, "\x69\143\157\156" => "\146\141\162\40\x66\x61\x2d\x75\163\x65\162", "\164\171\160\x65" => "\164\145\170\x74"], ["\156\141\x6d\x65" => "\160\x65\156\x64\151\144\x69\x6b\141\x6e\137\x61\171\x61\150", "\x6c\141\x62\x65\154" => "\x50\x65\x6e\x64\x69\144\151\x6b\141\156\x20\x41\171\141\150", "\166\x61\154\x75\145" => $siswa->pendidikan_ayah, "\151\143\157\156" => "\146\141\x72\x20\x66\x61\55\x75\x73\145\x72", "\164\x79\160\x65" => "\164\x65\x78\x74"], ["\156\x61\155\145" => "\x70\145\153\145\x72\x6a\141\141\156\x5f\x61\171\141\x68", "\x6c\x61\142\x65\x6c" => "\120\145\x6b\145\162\x6a\141\x61\x6e\x20\101\x79\141\x68", "\166\141\154\x75\145" => $siswa->pekerjaan_ayah, "\151\143\x6f\156" => "\146\x61\x72\x20\146\141\x2d\x75\x73\145\162", "\164\x79\x70\x65" => "\164\145\170\164"], ["\156\141\x6d\145" => "\156\157\x68\x70\137\x61\171\141\150", "\154\x61\x62\145\x6c" => "\x4e\x6f\56\x20\110\x50\x20\101\x79\141\150", "\x76\x61\x6c\x75\145" => $siswa->nohp_ayah, "\151\x63\157\x6e" => "\x66\141\x72\40\146\141\55\165\x73\x65\x72", "\x74\x79\x70\x65" => "\x6e\165\155\x62\145\x72"], ["\x6e\141\x6d\145" => "\141\154\x61\155\x61\x74\x5f\x61\171\141\x68", "\x6c\x61\x62\145\154" => "\x41\154\x61\x6d\x61\x74\40\101\171\x61\150", "\x76\141\154\165\x65" => $siswa->alamat_ayah, "\x69\143\x6f\156" => "\x66\x61\162\x20\146\x61\x2d\165\x73\145\x72", "\x74\171\x70\145" => "\x74\x65\x78\164"], ["\x6e\141\155\145" => "\156\x61\x6d\141\137\151\142\x75", "\x6c\x61\x62\145\154" => "\x4e\141\155\141\x20\x49\x62\x75", "\166\141\x6c\x75\x65" => $siswa->nama_ibu, "\151\143\x6f\156" => "\146\141\x72\40\x66\141\x2d\x75\163\x65\162", "\164\x79\x70\x65" => "\164\x65\x78\164"], ["\156\141\x6d\145" => "\160\x65\156\x64\151\144\x69\x6b\141\156\x5f\x69\142\165", "\x6c\x61\x62\x65\x6c" => "\x50\x65\156\x64\x69\144\151\x6b\x61\156\40\x49\142\x75", "\166\141\x6c\x75\x65" => $siswa->pendidikan_ibu, "\x69\x63\157\x6e" => "\x66\x61\162\x20\x66\x61\x2d\x75\163\145\x72", "\164\x79\x70\x65" => "\164\145\x78\164"], ["\x6e\x61\155\x65" => "\x70\145\153\145\x72\152\x61\141\156\x5f\151\142\165", "\x6c\x61\142\x65\154" => "\x50\145\153\x65\x72\152\x61\x61\156\40\x49\142\x75", "\x76\141\154\x75\145" => $siswa->pekerjaan_ibu, "\x69\143\157\156" => "\x66\141\x72\40\146\x61\x2d\165\x73\145\162", "\164\x79\x70\145" => "\x74\x65\x78\x74"], ["\156\141\155\145" => "\x6e\x6f\x68\x70\137\x69\142\x75", "\154\141\142\x65\x6c" => "\x4e\x6f\x2e\40\110\x50\x20\x49\x62\165", "\166\141\x6c\x75\x65" => $siswa->nohp_ibu, "\x69\143\x6f\x6e" => "\x66\141\162\x20\x66\141\x2d\x75\x73\x65\162", "\x74\x79\x70\145" => "\x6e\165\x6d\x62\x65\x72"], ["\x6e\141\x6d\x65" => "\x61\154\141\x6d\141\164\137\151\142\165", "\154\x61\142\145\154" => "\x41\154\x61\155\141\164\40\x49\142\165", "\x76\x61\x6c\x75\x65" => $siswa->alamat_ibu, "\151\143\157\156" => "\146\141\162\40\146\x61\x2d\x75\x73\145\x72", "\x74\x79\x70\x65" => "\x74\145\170\164"]];
        goto xaqt7;
        nN8i5:
        $data = ["\165\163\145\x72" => $user, "\x6a\x75\144\165\154" => "\123\x69\163\x77\141", "\x73\165\142\x6a\165\144\165\x6c" => "\x45\144\151\164\40\x44\141\164\x61\40\123\151\163\x77\x61", "\x73\x69\163\x77\x61" => $siswa, "\x73\x65\164\164\151\156\x67" => $this->dashboard->getSetting()];
        goto sPAoo;
        ifdCN:
        $this->load->view("\155\145\x6d\142\145\x72\163\x2f\x67\x75\x72\x75\57\164\145\155\160\x6c\x61\x74\145\163\57\x68\x65\141\144\145\x72", $data);
        goto aKE2x;
        ZNB2g:
        $smt = $this->master->getSemesterActive();
        goto KIyH2;
        aKE2x:
        $this->load->view("\x6d\145\x6d\142\145\x72\163\57\147\x75\162\165\57\167\141\x6c\151\57\145\x64\151\164");
        goto tRbiO;
        aXKPo:
        $data["\151\x6e\x70\165\164\137\167\x61\154\151"] = json_decode(json_encode($inputWali), FALSE);
        goto TGeSi;
        Ye983:
        $inputBio = [["\x6e\x61\x6d\x65" => "\x73\x74\x61\164\x75\x73\137\x6b\x65\154\165\x61\162\147\x61", "\x6c\141\x62\x65\x6c" => "\x53\x74\141\164\x75\163\x20\144\x61\x6c\141\x6d\40\x4b\145\154\165\141\162\147\x61", "\166\x61\x6c\165\145" => $siswa->status_keluarga == '' ? "\x31" : $siswa->status_keluarga, "\x69\x63\x6f\x6e" => "\x66\x61\162\x20\146\141\x2d\165\x73\145\x72", "\143\154\141\x73\x73" => '', "\x74\x79\160\145" => "\164\x65\x78\164"], ["\156\141\155\x65" => "\x61\156\141\153\x5f\x6b\145", "\x6c\x61\142\x65\154" => "\101\156\141\153\40\153\x65", "\166\x61\x6c\x75\x65" => $siswa->anak_ke, "\151\143\x6f\x6e" => "\146\141\162\x20\x66\x61\x2d\x75\x73\145\x72", "\143\154\x61\x73\x73" => '', "\164\x79\x70\x65" => "\x6e\x75\155\142\x65\162"], ["\x6e\x61\155\145" => "\164\x65\155\x70\x61\164\x5f\154\x61\x68\x69\x72", "\154\x61\x62\x65\154" => "\x54\145\155\x70\141\164\x20\x4c\x61\150\x69\162", "\166\x61\x6c\x75\x65" => $siswa->tempat_lahir, "\x69\143\157\156" => "\x66\141\162\40\x66\x61\x2d\x6d\141\160", "\143\154\141\x73\163" => '', "\164\x79\160\145" => "\164\145\x78\164"], ["\156\x61\155\145" => "\164\x61\x6e\147\147\141\154\x5f\154\141\150\151\162", "\x6c\141\x62\x65\154" => "\124\141\x6e\147\x67\x61\x6c\x20\x4c\141\150\151\x72", "\x76\x61\154\165\x65" => $siswa->tanggal_lahir, "\x69\x63\157\156" => "\x66\141\162\40\x66\141\x2d\x63\x61\154\145\x6e\144\x61\162", "\x63\x6c\141\163\x73" => "\x74\x61\150\165\156", "\164\x79\x70\145" => "\164\145\x78\x74"], ["\x63\154\141\163\x73" => '', "\156\x61\155\145" => "\141\x67\x61\155\141", "\x6c\x61\x62\145\154" => "\101\147\x61\x6d\x61", "\x76\x61\x6c\165\x65" => $siswa->agama, "\151\x63\157\x6e" => "\x66\x61\x72\x20\146\141\55\143\141\154\x65\156\x64\x61\x72", "\164\x79\x70\145" => "\164\145\x78\x74"], ["\x63\x6c\141\x73\163" => '', "\156\x61\155\145" => "\x61\x6c\x61\155\141\x74", "\x6c\x61\x62\x65\x6c" => "\x41\154\x61\x6d\x61\164", "\166\141\x6c\165\145" => $siswa->alamat, "\x69\x63\157\156" => "\x66\141\x72\x20\146\x61\x2d\165\163\x65\162", "\164\171\160\145" => "\x74\x65\x78\164"], ["\143\154\141\x73\x73" => '', "\156\x61\x6d\x65" => "\162\164", "\x6c\141\142\x65\154" => "\x52\x74", "\x76\x61\x6c\x75\145" => $siswa->rt, "\x69\143\157\x6e" => "\146\x61\x72\40\x66\141\55\165\x73\145\x72", "\164\x79\x70\145" => "\164\x65\x78\164"], ["\x63\x6c\141\x73\163" => '', "\156\141\x6d\145" => "\162\167", "\154\141\142\x65\154" => "\122\x77", "\166\x61\x6c\165\x65" => $siswa->rw, "\151\x63\x6f\x6e" => "\146\141\162\40\x66\x61\x2d\165\x73\x65\162", "\164\x79\160\x65" => "\x74\x65\170\164"], ["\143\x6c\141\x73\163" => '', "\156\141\155\x65" => "\153\x65\154\165\162\141\x68\141\156", "\x6c\141\x62\x65\154" => "\x4b\x65\154\165\162\141\x68\141\156\x2f\x44\x65\163\141", "\x76\141\x6c\165\x65" => $siswa->kelurahan, "\x69\143\157\x6e" => "\x66\141\162\x20\x66\x61\x2d\165\x73\x65\x72", "\164\171\x70\x65" => "\164\x65\170\164"], ["\143\x6c\x61\163\163" => '', "\156\141\155\x65" => "\153\145\143\141\x6d\x61\164\141\x6e", "\x6c\141\x62\x65\154" => "\113\145\x63\141\155\141\x74\x61\x6e", "\166\141\x6c\165\145" => $siswa->kecamatan, "\151\143\x6f\156" => "\146\x61\x72\40\x66\x61\x2d\165\163\x65\x72", "\x74\171\x70\145" => "\x74\145\170\x74"], ["\x63\x6c\x61\163\x73" => '', "\156\x61\x6d\145" => "\153\x61\x62\x75\160\x61\x74\145\156", "\154\141\x62\145\x6c" => "\x4b\x61\x62\165\160\141\164\x65\156\x2f\113\157\x74\141", "\166\141\154\165\145" => $siswa->kabupaten, "\x69\x63\157\156" => "\x66\x61\x72\40\146\x61\x2d\x75\163\x65\x72", "\x74\171\x70\x65" => "\x74\x65\x78\x74"], ["\x63\x6c\x61\163\163" => '', "\156\x61\155\145" => "\x70\162\x6f\166\151\156\163\x69", "\x6c\x61\x62\x65\x6c" => "\120\x72\x6f\166\x69\156\163\151", "\166\x61\154\x75\145" => $siswa->provinsi, "\151\143\157\x6e" => "\146\141\x72\x20\x66\141\55\x75\x73\145\x72", "\164\x79\160\x65" => "\x74\145\170\x74"], ["\143\x6c\141\x73\163" => '', "\x6e\x61\155\145" => "\153\x6f\144\x65\137\160\157\163", "\x6c\x61\142\145\x6c" => "\x4b\x6f\x64\145\x20\x50\x6f\x73", "\166\x61\154\x75\145" => $siswa->kode_pos, "\x69\143\157\x6e" => "\146\141\162\x20\146\141\55\165\163\145\162", "\164\x79\x70\x65" => "\x74\x65\170\164"], ["\x63\154\x61\163\x73" => '', "\156\x61\x6d\x65" => "\150\x70", "\154\x61\142\x65\154" => "\x48\160", "\166\x61\154\x75\x65" => $siswa->hp, "\151\x63\x6f\156" => "\146\x61\x72\40\x66\141\x2d\165\x73\x65\x72", "\164\x79\x70\145" => "\164\x65\x78\x74"]];
        goto XCQfl;
        GkcAw:
        $inputData = [["\154\x61\x62\x65\154" => "\x4e\x61\155\x61\40\x4c\x65\x6e\x67\153\141\x70", "\x6e\x61\155\x65" => "\x6e\x61\155\141", "\166\x61\154\x75\145" => $siswa->nama, "\x69\143\157\156" => "\x66\x61\x72\x20\x66\141\55\165\x73\145\x72", "\x72\145\161" => "\x72\x65\x71\x75\x69\162\145\144", "\x63\x6c\x61\x73\163" => '', "\x74\x79\x70\x65" => "\164\x65\x78\164"], ["\x6c\x61\142\145\x6c" => "\116\x49\123", "\x6e\x61\155\x65" => "\156\151\x73", "\166\141\x6c\165\145" => $siswa->nis, "\151\x63\157\156" => "\146\x61\162\40\146\141\55\151\144\x2d\x63\141\162\x64", "\162\x65\x71" => "\x72\x65\161\x75\x69\x72\x65\x64", "\x63\x6c\141\x73\x73" => '', "\x74\171\160\145" => "\156\x75\155\142\x65\162"], ["\x6e\141\x6d\145" => "\x6e\151\163\156", "\x6c\x61\x62\x65\154" => "\116\x49\123\116", "\166\x61\x6c\x75\145" => $siswa->nisn, "\151\x63\x6f\156" => "\x66\x61\162\40\146\141\55\151\144\55\x63\x61\162\144", "\x72\145\161" => '', "\143\154\x61\x73\163" => '', "\164\171\160\145" => "\x74\145\170\164"], ["\x6c\x61\142\145\154" => "\x4a\145\156\151\163\40\113\145\154\141\x6d\151\x6e", "\x6e\141\x6d\145" => "\x6a\145\156\151\x73\x5f\x6b\145\x6c\x61\155\151\156", "\x76\141\x6c\x75\145" => $siswa->jenis_kelamin, "\151\143\157\156" => "\x66\x61\163\x20\x66\141\55\x76\145\156\165\x73\55\155\x61\x72\163", "\x72\x65\161" => "\x72\x65\161\x75\151\162\145\144", "\x63\x6c\x61\163\163" => '', "\x74\171\x70\145" => "\x74\145\170\164"], ["\156\x61\x6d\x65" => "\x6b\145\154\141\x73\137\141\x77\141\154", "\x6c\x61\x62\145\154" => "\x44\x69\x74\145\162\151\155\x61\x20\144\x69\40\x6b\145\154\141\x73", "\x76\141\154\x75\145" => $siswa->kelas_awal, "\151\143\x6f\x6e" => "\x66\141\163\40\146\141\x2d\x67\162\141\144\x75\141\164\x69\x6f\156\55\143\x61\160", "\162\x65\x71" => "\x72\145\x71\165\151\162\145\144", "\143\x6c\x61\163\x73" => '', "\164\171\x70\x65" => "\x74\x65\x78\164"], ["\x6e\x61\155\145" => "\x74\141\x68\x75\156\x5f\x6d\x61\x73\x75\x6b", "\x6c\141\142\x65\154" => "\x54\147\154\40\144\151\164\x65\x72\x69\x6d\141", "\166\141\x6c\165\x65" => $siswa->tahun_masuk, "\151\143\157\156" => "\x74\141\x68\165\x6e\x20\x66\x61\162\40\146\141\55\143\141\154\x65\x6e\144\x61\162\55\x61\154\x74", "\162\145\161" => "\x72\145\161\165\151\x72\x65\x64", "\143\x6c\141\163\163" => "\x74\141\150\x75\x6e", "\164\171\x70\x65" => "\x74\x65\170\164"], ["\156\x61\155\145" => "\163\145\x6b\x6f\x6c\x61\150\x5f\x61\x73\141\x6c", "\154\x61\x62\x65\154" => "\123\145\153\x6f\x6c\141\x68\x20\101\163\141\x6c", "\x76\141\x6c\x75\145" => $siswa->sekolah_asal, "\151\143\x6f\x6e" => "\x66\141\163\x20\x66\x61\55\x67\162\x61\x64\165\141\164\151\157\156\x2d\143\141\160", "\x72\x65\161" => '', "\x63\x6c\x61\x73\163" => '', "\x74\171\x70\x65" => "\x74\x65\170\164"]];
        goto Ye983;
        tRbiO:
        $this->load->view("\155\x65\x6d\x62\145\162\x73\x2f\147\x75\x72\165\x2f\x74\145\155\160\x6c\x61\x74\145\163\57\146\x6f\157\164\145\162");
        goto pOftz;
        CoWQq:
        $data["\x73\155\x74\x5f\141\x63\164\151\166\145"] = $smt;
        goto AGDCf;
        Yi101:
        $data["\151\156\x70\x75\x74\x5f\157\162\x74\x75"] = json_decode(json_encode($inputOrtu), FALSE);
        goto aXKPo;
        BMZPT:
        $data["\x73\155\x74"] = $this->dashboard->getSemester();
        goto CoWQq;
        pOftz:
    }
    public function updateData()
    {
        goto tq5jw;
        Q7VIo:
        $input = ["\x6e\x69\163\x6e" => $this->input->post("\x6e\x69\x73\x6e", true), "\x6e\151\163" => $this->input->post("\156\151\163", true), "\156\x61\x6d\x61" => $this->input->post("\156\x61\x6d\x61", true), "\x6a\145\x6e\x69\163\137\x6b\145\154\x61\155\x69\x6e" => $this->input->post("\152\145\x6e\151\x73\x5f\x6b\x65\x6c\x61\155\151\156", true), "\x74\145\155\x70\x61\x74\x5f\x6c\x61\x68\151\162" => $this->input->post("\164\x65\x6d\x70\141\164\x5f\154\x61\x68\x69\x72", true), "\164\x61\156\x67\147\141\x6c\137\x6c\x61\150\x69\x72" => $this->input->post("\x74\x61\156\147\147\141\x6c\137\154\141\150\x69\162", true), "\x61\x67\x61\x6d\x61" => $this->input->post("\141\x67\141\155\141", true), "\163\164\x61\164\165\x73\137\153\145\154\x75\141\162\147\x61" => $this->input->post("\163\x74\141\x74\165\x73\x5f\153\145\x6c\165\141\x72\x67\x61", true), "\141\x6e\141\153\x5f\x6b\145" => $this->input->post("\141\156\x61\153\x5f\153\145", true), "\x61\154\x61\x6d\x61\x74" => $this->input->post("\x61\154\x61\x6d\x61\x74", true), "\x72\x74" => $this->input->post("\x72\x74", true), "\x72\167" => $this->input->post("\x72\x77", true), "\153\x65\154\x75\162\141\150\x61\156" => $this->input->post("\x6b\x65\x6c\165\x72\141\150\141\156", true), "\x6b\145\143\x61\x6d\x61\164\x61\156" => $this->input->post("\x6b\x65\x63\141\x6d\x61\x74\x61\156", true), "\153\141\142\x75\x70\141\x74\x65\156" => $this->input->post("\153\141\x62\x75\160\x61\x74\x65\x6e", true), "\x70\162\157\166\151\x6e\163\x69" => $this->input->post("\160\162\157\166\x69\x6e\x73\x69", true), "\153\x6f\144\145\x5f\x70\x6f\x73" => $this->input->post("\x6b\x6f\x64\145\137\160\x6f\163", true), "\150\160" => $this->input->post("\x68\x70", true), "\x6e\141\x6d\x61\x5f\x61\171\x61\x68" => $this->input->post("\156\x61\x6d\x61\137\x61\x79\x61\x68", true), "\x6e\x6f\x68\160\137\141\171\141\150" => $this->input->post("\x6e\157\x68\x70\x5f\141\171\141\150", true), "\x70\x65\156\x64\151\144\151\x6b\141\x6e\x5f\x61\x79\x61\x68" => $this->input->post("\x70\145\x6e\144\151\x64\151\x6b\141\x6e\137\x61\171\141\150", true), "\x70\145\x6b\x65\162\152\141\x61\x6e\137\141\x79\x61\x68" => $this->input->post("\x70\145\x6b\x65\x72\x6a\141\x61\x6e\x5f\x61\x79\x61\150", true), "\141\x6c\x61\x6d\x61\x74\x5f\x61\x79\141\150" => $this->input->post("\141\x6c\x61\x6d\141\164\x5f\141\171\x61\150", true), "\156\141\155\141\x5f\x69\x62\165" => $this->input->post("\x6e\141\155\141\137\151\x62\165", true), "\156\x6f\x68\x70\137\151\x62\165" => $this->input->post("\156\157\x68\160\137\x69\x62\x75", true), "\160\145\x6e\x64\x69\x64\151\153\x61\156\137\x69\x62\165" => $this->input->post("\x70\145\156\144\x69\144\151\153\x61\156\x5f\151\142\165", true), "\160\145\153\x65\162\152\141\x61\x6e\x5f\x69\x62\x75" => $this->input->post("\160\x65\x6b\145\162\x6a\x61\x61\x6e\137\151\x62\165", true), "\x61\154\141\x6d\x61\x74\137\x69\142\x75" => $this->input->post("\x61\154\141\x6d\141\164\x5f\151\142\165", true), "\x6e\x61\x6d\x61\137\167\141\154\x69" => $this->input->post("\156\x61\x6d\141\x5f\167\141\x6c\151", true), "\x70\x65\x6e\144\x69\x64\151\153\141\156\x5f\167\x61\x6c\151" => $this->input->post("\x70\145\156\144\x69\x64\151\153\141\156\137\167\x61\154\x69", true), "\x70\145\153\x65\162\x6a\141\141\x6e\x5f\167\x61\154\x69" => $this->input->post("\160\145\153\x65\162\152\x61\x61\156\x5f\167\141\x6c\151", true), "\156\x6f\x68\x70\x5f\x77\141\154\x69" => $this->input->post("\156\x6f\150\x70\137\167\x61\x6c\x69", true), "\141\x6c\141\x6d\x61\164\137\167\x61\x6c\x69" => $this->input->post("\141\x6c\141\155\141\164\x5f\167\141\x6c\x69", true), "\x74\141\x68\x75\156\137\x6d\x61\x73\165\x6b" => $this->input->post("\x74\x61\150\165\156\137\155\x61\x73\165\153", true), "\153\x65\154\141\163\137\x61\x77\x61\154" => $this->input->post("\x6b\x65\154\x61\163\137\141\x77\x61\154", true), "\x74\x67\x6c\x5f\154\x61\150\151\162\137\141\171\x61\x68" => $this->input->post("\x74\x67\x6c\x5f\x6c\141\150\x69\x72\137\x61\x79\141\150", true), "\164\147\x6c\137\x6c\x61\x68\151\162\137\151\142\x75" => $this->input->post("\x74\147\x6c\137\x6c\141\150\151\162\137\151\142\x75", true), "\164\147\x6c\137\x6c\x61\x68\151\162\x5f\167\141\x6c\x69" => $this->input->post("\164\x67\154\x5f\154\141\150\151\x72\x5f\x77\x61\x6c\x69", true), "\x73\145\x6b\x6f\154\141\x68\x5f\x61\x73\x61\154" => $this->input->post("\x73\145\153\x6f\154\141\150\137\x61\x73\x61\x6c", true), "\x66\157\x74\157" => "\x75\x70\154\157\141\144\163\x2f\x66\x6f\x74\157\137\163\x69\x73\x77\x61\57" . $nis . "\56\x6a\x70\x67"];
        goto HVEJM;
        I7Fbd:
        $this->form_validation->set_rules("\156\x69\163", "\x4e\111\123", "\x72\145\x71\x75\151\162\145\x64\174\156\165\155\x65\162\151\143\174\164\x72\151\155\x7c\x6d\x69\x6e\137\154\x65\156\147\164\x68\133\x36\135\174\155\141\170\x5f\x6c\x65\x6e\x67\x74\150\133\63\x30\135" . $u_nis);
        goto W5PN1;
        HVEJM:
        $action = $this->master->update("\155\141\x73\x74\145\x72\x5f\163\151\x73\x77\x61", $input, "\151\x64\137\x73\151\x73\x77\x61", $id_siswa);
        goto qbgYo;
        yTPtW:
        $data["\164\x65\x78\164"] = "\104\x61\164\x61\40\x53\x75\144\x61\150\x20\x61\x64\141\54\x20\120\x61\x73\x74\151\x6b\141\x6e\40\x4e\x49\x53\x2c\40\144\141\x6e\40\x4e\x49\123\116\40\x62\x65\x6c\165\155\x20\x64\x69\x67\x75\156\x61\x6b\141\156\40\x73\x69\x73\x77\x61\x20\x6c\141\151\x6e";
        goto O7xXh;
        ffrCE:
        $this->output_json($data);
        goto mQab2;
        G8_jY:
        $data["\164\x65\x78\164"] = "\123\x69\163\167\x61\40\x62\145\162\x68\141\163\x69\154\40\144\151\x70\145\162\142\141\150\141\x72\165\151";
        goto jOp0V;
        Dzgt4:
        $u_nis = $siswa->nis === $nis ? '' : "\x7c\x69\x73\137\x75\156\x69\161\x75\145\x5b\155\141\163\x74\145\162\137\x73\151\x73\167\141\56\156\151\x73\135";
        goto I7Fbd;
        uz12y:
        $nis = $this->input->post("\x6e\151\x73", true);
        goto TAeyb;
        W5PN1:
        if ($this->form_validation->run() == FALSE) {
            goto Wa_0X;
        }
        goto Q7VIo;
        uLscZ:
        $data["\x69\156\x73\x65\x72\x74"] = false;
        goto yTPtW;
        qbgYo:
        $data["\151\156\x73\145\162\x74"] = $input;
        goto G8_jY;
        O7xXh:
        X4rei:
        goto ffrCE;
        jOWY5:
        $siswa = $this->master->getSiswaById($id_siswa);
        goto Dzgt4;
        tq5jw:
        $id_siswa = $this->input->post("\151\x64\x5f\x73\x69\163\x77\x61", true);
        goto uz12y;
        jOp0V:
        goto X4rei;
        goto r2D_Q;
        TAeyb:
        $nisn = $this->input->post("\x6e\151\163\156", true);
        goto jOWY5;
        r2D_Q:
        Wa_0X:
        goto uLscZ;
        mQab2:
    }
    function uploadFile($id_siswa)
    {
        goto k1vhj;
        cZs78:
        $config["\x66\x69\154\x65\137\156\x61\155\x65"] = $siswa->nis;
        goto ruUqp;
        yhKGJ:
        J_AkC:
        goto PqZMU;
        PqZMU:
        $this->output_json($data);
        goto eeKpa;
        KAldW:
        $this->db->where("\x69\144\x5f\163\x69\x73\167\141", $id_siswa);
        goto dTedl;
        wUXr7:
        $data["\164\x79\x70\145"] = $_FILES["\x66\157\164\157"]["\164\x79\160\145"];
        goto y36k3;
        Mismc:
        $data["\163\164\x61\164\165\163"] = false;
        goto B8hWv;
        ZLq6p:
        $data["\146\151\154\145\156\141\155\x65"] = pathinfo($result["\x66\x69\x6c\145\x5f\x6e\141\x6d\x65"], PATHINFO_FILENAME);
        goto iiBgL;
        k1vhj:
        $siswa = $this->master->getSiswaById($id_siswa);
        goto WD8Z_;
        M2IBj:
        $data["\x73\162\x63"] = '';
        goto zfbC1;
        GXITX:
        agH19:
        goto aurCh;
        zfbC1:
        goto J_AkC;
        goto GXITX;
        iiBgL:
        $data["\x73\x74\x61\164\x75\163"] = true;
        goto G7ktM;
        aurCh:
        $config["\x75\x70\x6c\x6f\x61\144\137\160\x61\x74\x68"] = "\56\x2f\165\x70\154\x6f\x61\144\x73\x2f\146\x6f\164\157\137\163\x69\x73\167\141\x2f";
        goto GjLcL;
        GjLcL:
        $config["\141\154\154\157\167\145\144\x5f\x74\171\x70\x65\x73"] = "\x67\151\x66\x7c\x6a\x70\x67\x7c\160\156\147\174\152\x70\145\x67\x7c\112\x50\105\x47\x7c\x4a\120\x47\x7c\120\116\107\174\107\x49\x46";
        goto N0vZX;
        ruUqp:
        $this->upload->initialize($config);
        goto NGwrT;
        y36k3:
        $data["\163\151\172\145"] = $_FILES["\x66\157\164\x6f"]["\163\x69\x7a\x65"];
        goto yhKGJ;
        G7ktM:
        $this->db->set("\146\157\x74\157", "\165\160\x6c\x6f\141\x64\163\57\146\157\x74\157\x5f\x73\x69\163\167\x61\x2f" . $result["\x66\151\154\145\x5f\x6e\141\x6d\x65"]);
        goto KAldW;
        N0vZX:
        $config["\x6f\166\x65\162\x77\162\x69\164\145"] = true;
        goto cZs78;
        ePmVh:
        $data["\x73\x72\x63"] = base_url() . "\165\160\x6c\x6f\141\x64\x73\57\146\x6f\x74\157\137\x73\x69\x73\x77\141\57" . $result["\x66\151\154\145\x5f\156\141\155\x65"];
        goto ZLq6p;
        t1y33:
        pvI4B:
        goto Mismc;
        v4V7C:
        goto UqrZT;
        goto t1y33;
        dTedl:
        $this->db->update("\x6d\x61\x73\164\x65\x72\137\163\151\163\x77\141");
        goto v4V7C;
        xmSls:
        UqrZT:
        goto wUXr7;
        WD8Z_:
        if (isset($_FILES["\x66\157\164\x6f"]["\156\141\x6d\x65"])) {
            goto agH19;
        }
        goto M2IBj;
        NGwrT:
        if (!$this->upload->do_upload("\x66\157\x74\157")) {
            goto pvI4B;
        }
        goto ceNHs;
        B8hWv:
        $data["\x73\162\x63"] = $this->upload->display_errors();
        goto xmSls;
        ceNHs:
        $result = $this->upload->data();
        goto ePmVh;
        eeKpa:
    }
    function deleteFile($id_siswa)
    {
        goto aE989;
        il1OR:
        DHsmr:
        goto JZc3i;
        DzUow:
        echo "\106\x69\x6c\145\40\x44\145\154\145\164\145\x20\123\165\x63\x63\x65\x73\x73\x66\165\154\154\171";
        goto gGmTu;
        gGmTu:
        auaGv:
        goto il1OR;
        LSzyC:
        $this->db->update("\155\141\163\x74\145\x72\137\163\x69\x73\167\141");
        goto DzUow;
        VXHYW:
        $this->db->where("\151\144\x5f\x73\x69\x73\x77\x61", $id_siswa);
        goto LSzyC;
        aE989:
        $src = $this->input->post("\163\162\143");
        goto pJu2o;
        pJu2o:
        $file_name = str_replace(base_url(), '', $src);
        goto TO6xV;
        yaTSi:
        if (!unlink($file_name)) {
            goto auaGv;
        }
        goto ZhK0I;
        TO6xV:
        if (!($file_name != "\141\163\163\145\x74\x73\x2f\151\x6d\147\57\x73\x69\x73\167\x61\x2e\160\x6e\147")) {
            goto DHsmr;
        }
        goto yaTSi;
        ZhK0I:
        $this->db->set("\x66\157\164\157", '');
        goto VXHYW;
        JZc3i:
    }
    public function delete()
    {
        goto pva7m;
        fBp8y:
        eyr_b:
        goto IWNHN;
        YVRsh:
        $this->output_json(["\163\x74\141\164\x75\163" => true, "\x74\x6f\164\x61\154" => count($chk)]);
        goto oF8os;
        eJYFp:
        c0J5o:
        goto zFHE7;
        pva7m:
        $chk = $this->input->post("\x63\x68\145\143\x6b\x65\144", true);
        goto MPccS;
        vv22Q:
        goto c0J5o;
        goto fBp8y;
        oF8os:
        a4qI9:
        goto vv22Q;
        IWNHN:
        $this->output_json(["\163\164\141\164\x75\163" => false]);
        goto eJYFp;
        MPccS:
        if (!$chk) {
            goto eyr_b;
        }
        goto odWPT;
        pKXNn:
        $this->master->delete("\142\165\153\x75\137\151\156\144\x75\153", $chk, "\151\x64\137\x73\151\x73\x77\141");
        goto YVRsh;
        odWPT:
        if (!$this->master->delete("\x6d\x61\x73\x74\145\162\137\x73\x69\163\x77\x61", $chk, "\x69\x64\x5f\x73\x69\163\167\141")) {
            goto a4qI9;
        }
        goto pKXNn;
        zFHE7:
    }
}
