<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\101\x53\x45\x50\x41\124\110") or exit("\116\x6f\40\x64\x69\162\145\x63\x74\40\163\143\x72\x69\160\164\x20\141\x63\143\145\x73\163\x20\141\x6c\154\x6f\167\x65\144");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class Datamapel extends CI_Controller
{
    public function __construct()
    {
        goto gTmuu;
        gTmuu:
        parent::__construct();
        goto w4OIG;
        S2tlU:
        if ($this->ion_auth->is_admin()) {
            goto Wb_1w;
        }
        goto XBgLd;
        ZprHd:
        $this->load->model("\x44\x72\157\x70\144\157\x77\x6e\137\x6d\157\x64\x65\x6c", "\x64\162\x6f\160\x64\x6f\167\x6e");
        goto tOv3G;
        BXU1o:
        UEwI5:
        goto MuygA;
        wqhS1:
        Mv8aG:
        goto BlJg7;
        mjHq1:
        Wb_1w:
        goto OVc8P;
        BlJg7:
        redirect("\x61\x75\164\150");
        goto BXU1o;
        w4OIG:
        if (!$this->ion_auth->logged_in()) {
            goto Mv8aG;
        }
        goto S2tlU;
        Mc4KS:
        $this->load->model("\104\x61\x73\x68\x62\157\x61\162\x64\x5f\x6d\157\144\145\154", "\x64\141\163\150\142\x6f\141\x72\144");
        goto ZprHd;
        XBgLd:
        show_error("\110\x61\156\x79\141\x20\x41\x64\x6d\151\156\x69\x73\164\x72\x61\x74\x6f\162\40\x79\x61\x6e\x67\40\144\x69\142\145\162\151\x20\x68\141\153\x20\x75\156\x74\x75\153\x20\x6d\145\156\x67\141\x6b\x73\145\x73\x20\x68\141\x6c\141\x6d\141\156\40\151\x6e\151\54\40\x3c\141\40\x68\162\145\x66\x3d\42" . base_url("\144\141\x73\x68\142\x6f\x61\162\144") . "\42\76\x4b\x65\x6d\142\x61\154\x69\x20\153\145\40\x6d\x65\x6e\x75\40\x61\x77\141\x6c\74\x2f\x61\76", 403, "\101\x6b\x73\x65\x73\x20\x54\x65\x72\x6c\141\162\141\x6e\147");
        goto mjHq1;
        OVc8P:
        goto UEwI5;
        goto wqhS1;
        MuygA:
        $this->load->dbforge();
        goto zZy0y;
        nni1M:
        $this->load->model("\115\x61\163\164\x65\162\x5f\155\x6f\144\145\154", "\155\141\x73\164\x65\x72");
        goto Mc4KS;
        tOv3G:
        $this->form_validation->set_error_delimiters('', '');
        goto UTS1U;
        zZy0y:
        $this->load->library(["\x64\x61\x74\141\164\141\142\154\145\163", "\146\157\x72\x6d\137\166\x61\x6c\151\144\141\164\x69\157\x6e"]);
        goto nni1M;
        UTS1U:
    }
    public function output_json($data, $encode = true)
    {
        goto ltVQk;
        xi1Nx:
        $this->output->set_content_type("\141\160\x70\154\151\x63\x61\x74\x69\x6f\x6e\57\x6a\x73\x6f\x6e")->set_output($data);
        goto t6zoo;
        TL1Wm:
        M2EaL:
        goto xi1Nx;
        r31CG:
        $data = json_encode($data);
        goto TL1Wm;
        ltVQk:
        if (!$encode) {
            goto M2EaL;
        }
        goto r31CG;
        t6zoo:
    }
    private function updateUrutanTampil()
    {
        goto Nbzv_;
        HxMsH:
        if (!(count($insert) > 0)) {
            goto N2hkF;
        }
        goto FvYyC;
        B3uU0:
        foreach ($mapels as $mapel) {
            $insert = ["\151\144\x5f\155\141\160\x65\154" => $mapel->id_mapel, "\x6e\x61\155\141\x5f\x6d\141\160\x65\154" => $mapel->id_mapel, "\x6b\157\144\145" => $mapel->id_mapel, "\x6b\145\x6c\157\x6d\160\157\153" => $mapel->id_mapel, "\142\157\142\x6f\x74\137\160" => $mapel->id_mapel, "\142\157\142\x6f\164\x5f\x6b" => $mapel->id_mapel, "\x6a\145\x6e\x6a\141\x6e\x67" => $mapel->id_mapel, "\165\x72\x75\164\x61\156" => $mapel->id_mapel, "\x75\x72\x75\x74\141\156\x5f\x74\x61\155\160\x69\x6c" => $mapel->id_mapel, "\x73\x74\x61\x74\x75\x73" => $mapel->id_mapel, "\144\145\154\145\164\141\x62\154\x65" => $mapel->id_mapel];
            BEgvb:
        }
        goto LdtGz;
        LWOzw:
        $insert = [];
        goto B3uU0;
        Nbzv_:
        $mapels = $this->db->select("\x2a")->from("\155\x61\x73\x74\x65\162\x5f\x6d\x61\160\x65\x6c")->get()->result();
        goto LWOzw;
        MglYa:
        N2hkF:
        goto oCaEO;
        LdtGz:
        gZKJV:
        goto HxMsH;
        FvYyC:
        $this->db->update_batch("\155\141\x73\x74\x65\162\137\x6d\x61\x70\x65\154", $insert);
        goto MglYa;
        oCaEO:
    }
    public function index()
    {
        goto QSZOS;
        YkYVr:
        $this->load->view("\x5f\164\x65\x6d\x70\x6c\x61\164\145\x73\57\x64\x61\x73\x68\x62\157\141\x72\144\x2f\x5f\150\145\141\x64\x65\x72", $data);
        goto boXcS;
        hIp8Q:
        $data["\164\x70\137\x61\x63\x74\x69\x76\x65"] = $this->dashboard->getTahunActive();
        goto jdncz;
        JIY_t:
        $data["\x6d\141\x70\145\154\x5f\156\157\156\x5f\x61\x6b\164\x69\146"] = $this->master->getAllMapelNonAktif($setting->jenjang);
        goto YkYVr;
        jH15f:
        $data["\153\141\164\145\147\x6f\162\x69"] = ["\127\101\112\111\102", "\120\101\x49\x20\50\x4b\145\x6d\x65\156\x61\147\x29", "\120\x45\115\x49\116\101\x54\x41\x4e\40\x41\113\101\x44\105\115\111\113", "\x41\113\x41\x44\105\115\x49\113\40\113\x45\112\125\x52\x55\x41\x4e", "\114\111\116\x54\x41\x53\40\x4d\x49\x4e\x41\124", "\115\x55\114\117\113"];
        goto BZ4f0;
        zvfhN:
        $setting = $this->dashboard->getSetting();
        goto l9QRg;
        ppoqU:
        $user = $this->ion_auth->user()->row();
        goto zvfhN;
        QSZOS:
        if ($this->db->field_exists("\165\x72\x75\x74\x61\x6e\x5f\x74\x61\x6d\x70\151\154", "\x6d\141\x73\x74\145\x72\137\155\x61\160\145\x6c")) {
            goto hi4Br;
        }
        goto K16wO;
        K16wO:
        $fields = array("\165\x72\x75\164\141\x6e\137\x74\x61\x6d\x70\151\154" => array("\164\x79\160\x65" => "\x69\156\x74\50\x33\51", "\x61\146\164\145\162" => "\165\x72\165\x74\141\x6e"));
        goto JEl0u;
        boXcS:
        $this->load->view("\155\141\163\x74\x65\162\57\155\141\x70\145\x6c\x2f\144\141\x74\x61");
        goto jqG_F;
        ks9I3:
        $data["\x73\155\164\137\x61\143\x74\x69\x76\x65"] = $this->dashboard->getSemesterActive();
        goto jH15f;
        JEl0u:
        $this->dbforge->add_column("\x6d\x61\x73\164\145\x72\137\155\141\x70\145\154", $fields);
        goto JG3sh;
        jdncz:
        $data["\x73\x6d\x74"] = $this->dashboard->getSemester();
        goto ks9I3;
        m6fy9:
        $data["\x73\x74\141\164\165\x73"] = ["\x4e\157\x6e\x61\153\x74\151\x66", "\101\153\164\x69\146"];
        goto JIY_t;
        A5OYc:
        $data["\164\160"] = $this->dashboard->getTahun();
        goto hIp8Q;
        grGkK:
        $data["\x6b\145\x6c\x6f\155\x70\157\x6b"] = $this->dropdown->getDataKelompokMapel();
        goto m6fy9;
        BZ4f0:
        $data["\x6b\145\x6c\x6f\155\160\x6f\x6b\x5f\x6d\141\160\145\154"] = $this->master->getDataKelompokMapel();
        goto DgqfG;
        jqG_F:
        $this->load->view("\137\x74\145\x6d\160\x6c\141\164\x65\x73\x2f\x64\141\x73\150\142\x6f\141\162\144\57\x5f\x66\x6f\x6f\x74\145\x72");
        goto AALch;
        JG3sh:
        hi4Br:
        goto ppoqU;
        l9QRg:
        $data = ["\165\x73\145\162" => $user, "\x6a\x75\x64\165\x6c" => "\x4d\x61\164\141\40\x50\x65\154\141\152\x61\x72\141\156", "\163\165\x62\152\x75\144\165\154" => "\x44\x61\146\164\141\x72\x20\x4d\141\164\x61\40\x50\x65\154\141\152\x61\162\141\156", "\x70\x72\157\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\x69\156\147" => $setting];
        goto A5OYc;
        DgqfG:
        $data["\x73\x75\x62\137\x6b\x65\x6c\x6f\x6d\160\157\x6b\137\x6d\x61\x70\x65\154"] = $this->master->getDataSubKelompokMapel();
        goto grGkK;
        AALch:
    }
    public function addKelompokMapel()
    {
        goto HlmIt;
        Xu2hL:
        $insert = ["\x6e\x61\155\x61\x5f\x6b\145\154\137\155\141\x70\x65\154" => $this->input->post("\156\141\x6d\x61\x5f\x6b\x65\154\137\155\141\x70\145\154", true), "\153\157\144\145\x5f\153\x65\x6c\x5f\x6d\x61\x70\x65\x6c" => $this->input->post("\x6b\157\x64\145\x5f\153\x65\x6c\137\155\141\x70\145\x6c", true), "\x6b\141\x74\x65\147\157\162\x69" => $this->input->post("\x6b\x61\x74\x65\x67\x6f\162\151", true), "\x69\144\x5f\x70\x61\x72\145\x6e\x74" => $this->input->post("\x69\x64\x5f\160\141\162\x65\156\x74", true)];
        goto It5dQ;
        dYyuS:
        ihbUb:
        goto b9L1K;
        doUvh:
        $data = $this->db->update("\155\x61\x73\164\145\162\137\153\145\x6c\157\155\160\157\x6b\x5f\155\x61\160\x65\x6c", $insert);
        goto dYyuS;
        CKWiA:
        $data = $this->master->create("\x6d\141\x73\x74\145\x72\x5f\x6b\x65\154\157\x6d\x70\x6f\x6b\137\155\x61\160\145\154", $insert);
        goto E0X_2;
        It5dQ:
        if ($id != null) {
            goto KTsvC;
        }
        goto CKWiA;
        b9L1K:
        $this->output->set_content_type("\x61\x70\x70\x6c\x69\x63\x61\x74\151\x6f\x6e\57\x6a\x73\157\x6e")->set_output($data);
        goto MIEaU;
        mMHOA:
        $this->db->where("\x69\x64\137\153\x65\154\x5f\x6d\x61\x70\x65\154", $id);
        goto doUvh;
        E0X_2:
        goto ihbUb;
        goto bdS1p;
        bdS1p:
        KTsvC:
        goto mMHOA;
        HlmIt:
        $id = $this->input->post("\x69\x64\137\x6b\145\x6c\137\155\x61\x70\x65\154");
        goto Xu2hL;
        MIEaU:
    }
    public function hapusKelompok()
    {
        goto kiO2k;
        VynB3:
        if (!($nums > 0)) {
            goto UQTCt;
        }
        goto K0rGn;
        TpWVT:
        U67bR:
        goto Zpw43;
        ykG3S:
        array_push($messages, "\115\141\x74\x61\40\x50\x65\154\x61\x6a\x61\x72\x61\156");
        goto TpWVT;
        mIBL4:
        if (!($numm > 0)) {
            goto U67bR;
        }
        goto ykG3S;
        G64bP:
        $numm = $this->db->count_all_results("\155\x61\x73\164\x65\x72\x5f\155\x61\x70\145\x6c");
        goto mIBL4;
        I9M3F:
        if (count($messages) > 0) {
            goto gyO8P;
        }
        goto Z9FIj;
        pxT_X:
        $kode = $this->input->post("\x6b\157\144\x65");
        goto Bqp4K;
        RzFER:
        $this->db->where_in("\x6b\145\x6c\157\155\x70\x6f\x6b", $kode);
        goto G64bP;
        Zpw43:
        $this->db->where_in("\x69\144\x5f\160\141\162\145\156\x74", $id);
        goto OBBmN;
        OBBmN:
        $nums = $this->db->count_all_results("\155\x61\x73\x74\x65\x72\137\x6b\x65\154\157\155\x70\157\x6b\x5f\155\x61\x70\x65\x6c");
        goto VynB3;
        u0zxy:
        GLt85:
        goto rar2H;
        qhT5Z:
        goto GLt85;
        goto IXRbR;
        Z9FIj:
        if (!$this->master->delete("\x6d\141\163\x74\x65\x72\137\x6b\145\154\x6f\x6d\x70\157\153\x5f\155\141\x70\145\154", $id, "\151\x64\137\x6b\x65\x6c\137\x6d\x61\160\145\154")) {
            goto ng1i9;
        }
        goto JIvTb;
        JQPI0:
        $messages = [];
        goto RzFER;
        K0rGn:
        array_push($messages, "\x53\x75\142\x20\x4b\x65\154\x6f\x6d\x70\x6f\x6b");
        goto Fdf19;
        Bqp4K:
        $id_parent = $this->input->post("\x69\144\137\160\x61\162\x65\x6e\x74");
        goto JQPI0;
        Fdf19:
        UQTCt:
        goto I9M3F;
        corBI:
        $this->output_json(["\x73\x74\x61\x74\x75\x73" => false, "\155\145\163\x73\x61\147\x65" => "\x4b\145\154\157\155\x70\157\153\40\x4d\x61\x70\x65\x6c\40\144\x69\147\x75\156\x61\153\141\x6e\x20\x64\x69\x20" . count($messages) . "\x20\x74\141\142\x65\x6c\72\x3c\142\x72\76" . implode("\x3c\142\x72\76", $messages)]);
        goto u0zxy;
        JIvTb:
        $this->output_json(["\163\164\x61\164\x75\163" => true, "\155\145\x73\x73\x61\x67\145" => "\142\x65\162\150\141\163\x69\154"]);
        goto TAsHS;
        IXRbR:
        gyO8P:
        goto corBI;
        TAsHS:
        ng1i9:
        goto qhT5Z;
        kiO2k:
        $id = $this->input->post("\151\x64\137\x6b\145\x6c");
        goto pxT_X;
        rar2H:
    }
    public function create()
    {
        goto RAqOI;
        UYGZF:
        $insert = ["\x6e\x61\x6d\x61\x5f\x6d\141\x70\145\154" => $this->input->post("\156\x61\x6d\x61\137\x6d\x61\x70\x65\x6c", true), "\153\157\x64\x65" => $this->input->post("\x6b\x6f\144\x65\137\155\141\x70\x65\154", true), "\x6b\x65\x6c\157\155\160\x6f\153" => $this->input->post("\153\x65\x6c\x6f\155\160\x6f\x6b", true), "\x75\162\x75\164\x61\156\x5f\x74\141\155\x70\151\154" => $this->input->post("\165\x72\165\x74\x61\x6e\137\x74\141\x6d\160\151\154", true), "\x6a\x65\x6e\x6a\x61\156\147" => $setting->jenjang];
        goto aObgR;
        c52MQ:
        $this->output->set_content_type("\141\x70\160\x6c\151\x63\141\164\151\157\156\57\152\x73\157\156")->set_output($data);
        goto lMIJR;
        aObgR:
        $data = $this->master->create("\155\x61\163\164\145\x72\137\155\x61\x70\x65\x6c", $insert);
        goto c52MQ;
        RAqOI:
        $setting = $this->dashboard->getSetting();
        goto UYGZF;
        lMIJR:
    }
    public function getDataKelompok()
    {
        goto tbzyZ;
        dFG2p:
        $this->datatables->where("\x69\144\137\160\x61\x72\x65\x6e\x74", "\x30");
        goto xrxw4;
        CJsV2:
        $this->datatables->from("\x6d\141\x73\164\145\x72\137\153\x65\154\x6f\155\160\157\153\x5f\155\141\x70\x65\x6c");
        goto dFG2p;
        tbzyZ:
        $this->datatables->select("\52");
        goto CJsV2;
        xrxw4:
        $this->db->order_by("\153\x6f\144\145\x5f\153\x65\154\137\x6d\x61\160\x65\154");
        goto SvoGI;
        SvoGI:
        echo $this->datatables->generate();
        goto WH17N;
        WH17N:
    }
    public function getDataSubKelompok()
    {
        goto XP7J7;
        fYB4L:
        echo $this->datatables->generate();
        goto egGkt;
        Xtn9A:
        $this->datatables->from("\155\141\x73\x74\x65\x72\137\153\145\x6c\157\155\160\x6f\x6b\x5f\x6d\141\160\x65\154");
        goto y6Bar;
        y6Bar:
        $this->datatables->where("\x69\x64\x5f\160\141\x72\145\x6e\164\x20\x3c\76\40\x30");
        goto ve8qu;
        ve8qu:
        $this->db->order_by("\153\157\144\145\x5f\x6b\145\x6c\137\x6d\141\x70\x65\154");
        goto fYB4L;
        XP7J7:
        $this->datatables->select("\x2a");
        goto Xtn9A;
        egGkt:
    }
    public function read()
    {
        goto cEzjw;
        YCi2k:
        $this->db->order_by("\153\145\x6c\x6f\x6d\x70\157\153");
        goto IkUmc;
        qjTQn:
        $this->datatables->select("\x69\144\x5f\x6d\141\x70\145\x6c\54\40\x75\x72\165\164\x61\156\137\x74\141\x6d\x70\151\x6c\x2c\x20\156\x61\x6d\141\x5f\x6d\141\160\x65\x6c\54\40\x6b\157\x64\x65\54\x20\153\x65\154\x6f\155\x70\157\153\54\x20\144\145\154\x65\x74\141\x62\x6c\145\54\x20\163\164\x61\164\x75\163");
        goto jO_7x;
        cEzjw:
        $setting = $this->dashboard->getSetting();
        goto qjTQn;
        SuMsn:
        echo $this->datatables->generate();
        goto DcXwg;
        IkUmc:
        $this->db->order_by("\165\x72\165\164\141\x6e\137\164\x61\155\160\x69\x6c");
        goto SuMsn;
        jO_7x:
        $this->datatables->from("\x6d\141\163\164\145\162\x5f\x6d\141\x70\145\x6c");
        goto YCi2k;
        DcXwg:
    }
    public function update()
    {
        $data = $this->master->updateMapel();
        $this->output->set_content_type("\141\x70\x70\154\x69\143\141\164\x69\157\x6e\x2f\152\163\157\156")->set_output($data);
    }
    public function aktifkan($id)
    {
        goto Nq1YV;
        cDTyd:
        $this->db->where("\151\144\137\155\x61\x70\145\x6c", $id);
        goto kmzd6;
        kmzd6:
        $update = $this->db->update("\155\141\x73\164\145\162\x5f\x6d\141\x70\145\x6c");
        goto zD5O1;
        Nq1YV:
        $this->db->set("\163\x74\141\164\x75\x73", "\61");
        goto cDTyd;
        zD5O1:
        $this->output_json($update);
        goto nZe2T;
        nZe2T:
    }
    public function delete()
    {
        goto xi7K7;
        sMXVh:
        if (count($messages) > 0) {
            goto bwM86;
        }
        goto EuM4k;
        pzq1h:
        RQgWX:
        goto QMBWr;
        zCJ_0:
        $tables = [];
        goto J0fTo;
        FiyR9:
        $this->output_json(["\x73\164\141\x74\x75\x73" => true, "\164\157\164\141\x6c" => count($chk)]);
        goto STQHp;
        VEemK:
        EGJ5S:
        goto sMXVh;
        uyMb0:
        bwM86:
        goto kquNr;
        w1lD8:
        $messages = [];
        goto zCJ_0;
        EuM4k:
        if (!$this->master->delete("\x6d\x61\163\x74\145\x72\x5f\155\x61\160\x65\154", $chk, "\151\144\137\x6d\x61\x70\x65\x6c")) {
            goto ceO0z;
        }
        goto FiyR9;
        J0fTo:
        $tabless = $this->db->list_tables();
        goto bgP5o;
        OCKNH:
        if (!$chk) {
            goto RQgWX;
        }
        goto w1lD8;
        jWdDe:
        ny0Gu:
        goto c0Zzq;
        RY6H5:
        goto ny0Gu;
        goto uyMb0;
        kquNr:
        $this->output_json(["\x73\164\x61\164\x75\x73" => false, "\164\x6f\164\x61\x6c" => "\x4d\141\160\145\154\x20\144\151\x67\165\156\141\153\141\x6e\40\144\x69\40" . count($messages) . "\40\164\141\x62\x65\x6c\72\74\x62\x72\x3e" . implode("\x3c\142\162\76", $messages)]);
        goto jWdDe;
        bgP5o:
        foreach ($tabless as $table) {
            goto bXRtX;
            bXRtX:
            $fields = $this->db->field_data($table);
            goto xW5hQ;
            xW5hQ:
            foreach ($fields as $field) {
                goto j8EUT;
                LjUvj:
                array_push($tables, $table);
                goto Z6vVc;
                l_Ix6:
                HnWSz:
                goto KKgGh;
                Z6vVc:
                IwkvL:
                goto l_Ix6;
                j8EUT:
                if (!($field->name == "\x69\144\137\155\141\x70\145\x6c" || $field->name == "\x6d\141\x70\x65\x6c\x5f\151\144")) {
                    goto IwkvL;
                }
                goto LjUvj;
                KKgGh:
            }
            goto fhN7I;
            fhN7I:
            DafZU:
            goto A0UsO;
            A0UsO:
            dXKt7:
            goto o740R;
            o740R:
        }
        goto hwccM;
        sml9T:
        AoW3g:
        goto i_NSh;
        xi7K7:
        $chk = $this->input->post("\143\x68\145\x63\x6b\x65\144", true);
        goto OCKNH;
        QMBWr:
        $this->output_json(["\163\164\x61\x74\165\163" => false, "\164\x6f\x74\x61\x6c" => "\124\151\144\141\153\40\x61\x64\141\x20\x64\x61\x74\x61\x20\x79\x61\156\147\x20\x64\151\x70\151\154\151\150\x21"]);
        goto sml9T;
        hwccM:
        B6ZXH:
        goto RZ7dg;
        c0Zzq:
        goto AoW3g;
        goto pzq1h;
        STQHp:
        ceO0z:
        goto RY6H5;
        RZ7dg:
        foreach ($tables as $table) {
            goto ttT65;
            gIlRh:
            gjD8c:
            goto BNwNe;
            PcLY1:
            if ($table == "\x63\x62\164\137\163\x6f\x61\x6c") {
                goto FHdRH;
            }
            goto aDYAP;
            BNwNe:
            JDzqV:
            goto EVZJB;
            pFxJR:
            FHdRH:
            goto ti9hK;
            pHlWi:
            BMfQW:
            goto oUv5D;
            aDYAP:
            $this->db->where_in("\x69\x64\x5f\x6d\x61\x70\x65\x6c", $chk);
            goto JSiCj;
            oUv5D:
            if (!($num > 0)) {
                goto gjD8c;
            }
            goto XbO7v;
            JSiCj:
            $num = $this->db->count_all_results($table);
            goto Bc95U;
            XbO7v:
            array_push($messages, $table);
            goto gIlRh;
            ti9hK:
            $this->db->where_in("\155\x61\160\145\x6c\137\151\144", $chk);
            goto pEMd6;
            EVZJB:
            o6v51:
            goto UpE02;
            pEMd6:
            $num = $this->db->count_all_results($table);
            goto pHlWi;
            Bc95U:
            goto BMfQW;
            goto pFxJR;
            ttT65:
            if (!($table != "\x6d\141\163\x74\145\162\137\155\141\x70\145\154")) {
                goto JDzqV;
            }
            goto PcLY1;
            UpE02:
        }
        goto VEemK;
        i_NSh:
    }
    public function import($import_data = null)
    {
        goto zpnPY;
        RZdk_:
        $this->load->view("\137\164\145\x6d\x70\154\x61\x74\x65\163\x2f\x64\141\163\150\x62\157\x61\x72\x64\x2f\137\x66\157\x6f\164\x65\162");
        goto Vrm7o;
        rnDAL:
        $data["\x74\x70\x5f\141\143\164\x69\x76\x65"] = $this->dashboard->getTahunActive();
        goto EaETf;
        q5Kry:
        $data = ["\x75\x73\145\x72" => $user, "\x6a\165\x64\x75\154" => "\x4d\x61\164\x61\x20\x50\145\x6c\x61\x6a\141\x72\141\156", "\x73\x75\x62\152\165\144\x75\154" => "\x49\155\x70\157\162\x74\40\115\x61\x74\141\x20\x50\145\x6c\141\152\141\x72\141\156", "\x70\162\x6f\x66\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\x74\151\x6e\147" => $this->dashboard->getSetting()];
        goto Vlj0R;
        zpnPY:
        $user = $this->ion_auth->user()->row();
        goto q5Kry;
        EaETf:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto WNp2J;
        WNp2J:
        $data["\x73\x6d\x74\137\x61\x63\164\x69\x76\x65"] = $this->dashboard->getSemesterActive();
        goto AMnFQ;
        S_z9a:
        $data["\x69\155\160\x6f\162\164"] = $import_data;
        goto MeO8_;
        AMnFQ:
        $this->load->view("\x5f\x74\145\155\x70\154\x61\164\x65\163\57\x64\141\163\x68\142\157\x61\x72\144\57\x5f\150\x65\141\144\x65\162", $data);
        goto oi1xP;
        oi1xP:
        $this->load->view("\x6d\x61\x73\164\145\162\x2f\155\x61\160\145\x6c\x2f\151\x6d\x70\x6f\x72\x74");
        goto RZdk_;
        MeO8_:
        kcZYG:
        goto B9xRK;
        Vlj0R:
        if (!($import_data != null)) {
            goto kcZYG;
        }
        goto S_z9a;
        B9xRK:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto rnDAL;
        Vrm7o:
    }
    public function previewExcel()
    {
        goto giawY;
        sXOvi:
        IeU5K:
        goto xBTt2;
        fwq1I:
        $this->load->library("\165\x70\x6c\157\141\x64", $config);
        goto dZ5cg;
        xBTt2:
        xyigS:
        goto Meisz;
        Meisz:
        $i++;
        goto KAxlp;
        HBxN3:
        $config["\155\141\170\x5f\x73\x69\172\145"] = 2048;
        goto VE86o;
        Yv8pA:
        die;
        goto VlpyW;
        RNpOB:
        $file = $this->upload->data("\x66\165\x6c\154\137\x70\141\164\x68");
        goto u1H0s;
        FpI2o:
        switch ($ext) {
            case "\x2e\170\x6c\x73\170":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                goto GRWJC;
            case "\x2e\170\154\163":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                goto GRWJC;
            case "\56\143\163\166":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                goto GRWJC;
            default:
                echo "\165\156\x6b\x6e\157\x77\156\x20\x66\x69\154\x65\x20\x65\170\x74";
                die;
        }
        goto BqOnp;
        kd91H:
        $spreadsheet = $reader->load($file);
        goto M8Xbu;
        uFbFd:
        unlink($file);
        goto Q3lpc;
        zGTfr:
        GRWJC:
        goto kd91H;
        ieYQc:
        $i = 1;
        goto MsSNS;
        dZ5cg:
        if (!$this->upload->do_upload("\165\x70\x6c\x6f\141\144\137\x66\151\x6c\x65")) {
            goto Kyk5p;
        }
        goto RNpOB;
        MsSNS:
        YPhe_:
        goto G37eV;
        mAAD3:
        echo $error;
        goto Yv8pA;
        ebiTe:
        psSSz:
        goto uFbFd;
        giawY:
        $config["\x75\x70\154\x6f\x61\144\x5f\x70\x61\164\150"] = "\x2e\57\x75\160\x6c\157\141\x64\x73\57\151\x6d\160\x6f\162\x74\57";
        goto Ekc_B;
        BqOnp:
        jFkdd:
        goto zGTfr;
        IwuUz:
        $data = [];
        goto ieYQc;
        Q3lpc:
        echo json_encode($data);
        goto bEIjC;
        bEIjC:
        goto gEu6O;
        goto wE0AG;
        wE0AG:
        Kyk5p:
        goto D7dDp;
        Ekc_B:
        $config["\x61\x6c\154\157\167\x65\x64\x5f\x74\171\160\x65\x73"] = "\170\154\163\174\170\154\x73\x78\174\x63\163\166";
        goto HBxN3;
        G37eV:
        if (!($i < count($sheetData))) {
            goto psSSz;
        }
        goto bLjM1;
        VE86o:
        $config["\x65\x6e\x63\162\171\x70\x74\x5f\156\x61\155\x65"] = true;
        goto fwq1I;
        bLjM1:
        if (!($sheetData[$i][1] != null)) {
            goto IeU5K;
        }
        goto MUbQ9;
        MUbQ9:
        $data[] = ["\156\141\155\x61" => $sheetData[$i][1], "\x6b\157\x64\145" => $sheetData[$i][2]];
        goto sXOvi;
        D7dDp:
        $error = $this->upload->display_errors();
        goto mAAD3;
        KAxlp:
        goto YPhe_;
        goto ebiTe;
        M8Xbu:
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        goto IwuUz;
        u1H0s:
        $ext = $this->upload->data("\146\151\x6c\x65\x5f\x65\x78\164");
        goto FpI2o;
        VlpyW:
        gEu6O:
        goto Sq6Uk;
        Sq6Uk:
    }
    public function previewWord()
    {
        goto qO9ES;
        oJZZ2:
        goto Hj7mb;
        goto HqcFT;
        G5xbf:
        $i = 1;
        goto fE53b;
        XRlCO:
        rR1aw:
        goto Wduol;
        PiR0W:
        $data[] = ["\x6e\141\155\141" => $cols->item(1)->nodeValue, "\153\157\144\x65" => $cols->item(2)->nodeValue];
        goto XRlCO;
        O5MDq:
        $rows = $tables->item(0)->getElementsByTagName("\x74\162");
        goto G5xbf;
        tENHH:
        $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        goto zhECq;
        YTxVm:
        die;
        goto dgmxX;
        U_482:
        $data = [];
        goto dDOxq;
        otBzA:
        goto cNMT9;
        goto jyDVV;
        f0Vre:
        $dom->loadHTML($text);
        goto U_482;
        tmZ19:
        $config["\145\x6e\143\162\x79\x70\x74\137\x6e\x61\x6d\x65"] = true;
        goto cQ60o;
        dDOxq:
        $dom->preserveWhiteSpace = false;
        goto K66ai;
        Wduol:
        $i++;
        goto oJZZ2;
        Mn55L:
        $dom = new DOMDocument();
        goto f0Vre;
        zhECq:
        try {
            $htmlWriter->save("\56\x2f\165\160\x6c\157\141\x64\x73\57\x74\145\x6d\160\x2f\144\x6f\143\x2e\x68\x74\155\154");
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
        }
        goto pVgsV;
        oBRaM:
        $error = $this->upload->display_errors();
        goto HcrCE;
        cQ60o:
        $this->load->library("\165\160\154\157\141\144", $config);
        goto XpbFH;
        QvCge:
        $cols = $rows[$i]->getElementsByTagName("\164\x64");
        goto PiR0W;
        HqcFT:
        PRhSy:
        goto itRDW;
        jyDVV:
        pr9Sp:
        goto oBRaM;
        HcrCE:
        echo $error;
        goto YTxVm;
        dgmxX:
        cNMT9:
        goto PeemJ;
        pVgsV:
        unlink($file);
        goto qe8mW;
        k6Jro:
        $file = $this->upload->data("\x66\165\x6c\154\x5f\x70\141\164\150");
        goto kLCjk;
        kLCjk:
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($file);
        goto tENHH;
        qO9ES:
        $config["\x75\160\154\x6f\141\x64\137\x70\141\164\150"] = "\x2e\x2f\165\160\154\157\x61\x64\163\x2f\151\155\x70\157\162\164\57";
        goto XbqiG;
        K66ai:
        $tables = $dom->getElementsByTagName("\164\x61\x62\x6c\145");
        goto O5MDq;
        XbqiG:
        $config["\x61\x6c\x6c\157\167\x65\x64\x5f\x74\x79\x70\145\x73"] = "\144\157\x63\x78";
        goto dD44C;
        OXLxD:
        if (!($i < $rows->count())) {
            goto PRhSy;
        }
        goto QvCge;
        dD44C:
        $config["\x6d\141\170\137\x73\151\x7a\x65"] = 2048;
        goto tmZ19;
        XpbFH:
        if (!$this->upload->do_upload("\x75\x70\x6c\157\141\x64\137\x66\x69\x6c\145")) {
            goto pr9Sp;
        }
        goto k6Jro;
        itRDW:
        echo json_encode($data);
        goto otBzA;
        fE53b:
        Hj7mb:
        goto OXLxD;
        qe8mW:
        $text = file_get_contents("\56\57\x75\160\154\x6f\141\x64\x73\x2f\164\145\x6d\160\57\144\x6f\143\56\150\x74\x6d\154");
        goto Mn55L;
        PeemJ:
    }
    public function do_import()
    {
        goto ULXFA;
        AdeFa:
        FTinp:
        goto ga6A0;
        UcdNm:
        $mapel = [];
        goto wdpVz;
        ga6A0:
        $save = $this->master->create("\155\141\x73\x74\145\162\137\155\x61\x70\145\154", $mapel, true);
        goto zhFor;
        zhFor:
        $this->output->set_content_type("\x61\160\x70\154\151\x63\141\x74\x69\157\156\x2f\x6a\163\x6f\156")->set_output($save);
        goto C8l6V;
        wdpVz:
        foreach ($data as $j) {
            $mapel[] = ["\156\x61\x6d\x61\x5f\155\141\160\145\x6c" => $j->nama, "\x6b\157\144\x65" => $j->kode];
            Y2x_g:
        }
        goto AdeFa;
        ULXFA:
        $data = json_decode($this->input->post("\155\x61\x70\x65\154", true));
        goto UcdNm;
        C8l6V:
    }
}
