<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\101\123\x45\120\101\x54\x48") or exit("\116\x6f\40\x64\151\x72\x65\143\164\x20\163\143\162\151\160\x74\x20\x61\x63\143\x65\163\x73\40\141\x6c\154\157\167\x65\x64");
class Luckysheet extends CI_Controller
{
    public function __construct()
    {
        goto YS2Ku;
        YS2Ku:
        parent::__construct();
        goto UM_Ac;
        W12iD:
        $this->form_validation->set_error_delimiters('', '');
        goto zcPlx;
        FwZ1y:
        Kf5Iw:
        goto Kf693;
        ETRj3:
        $this->load->model("\113\145\154\141\163\x5f\155\157\144\x65\x6c", "\153\x65\154\x61\163");
        goto Ryb_O;
        Je1Dg:
        OR_kj:
        goto cyZin;
        Lalxt:
        show_error("\110\x61\156\171\141\40\x41\144\x6d\151\x6e\x69\163\x74\x72\141\x74\x6f\x72\40\x79\x61\x6e\147\x20\x64\151\142\145\x72\x69\40\150\141\x6b\x20\x75\156\164\165\x6b\x20\x6d\x65\x6e\x67\x61\x6b\x73\x65\x73\x20\150\141\154\141\x6d\141\x6e\x20\x69\156\x69\54\x20\x3c\x61\x20\150\162\145\146\75\x22" . base_url("\x64\x61\163\x68\142\x6f\141\x72\x64") . "\42\76\x4b\145\155\142\x61\154\x69\x20\x6b\x65\40\x6d\145\156\165\40\141\x77\141\x6c\74\x2f\141\76", 403, "\x41\153\163\145\x73\x20\x54\145\162\154\141\162\x61\156\147");
        goto Je1Dg;
        Kf693:
        redirect("\x61\165\164\x68");
        goto ZZlAx;
        QGIBQ:
        $this->load->model("\104\x61\x73\150\142\x6f\x61\162\x64\x5f\155\157\x64\x65\154", "\x64\x61\163\150\142\x6f\141\x72\144");
        goto P6fW3;
        Ryb_O:
        $this->load->model("\x44\162\157\x70\144\157\167\156\x5f\155\x6f\x64\145\x6c", "\144\x72\x6f\160\x64\x6f\x77\x6e");
        goto B6Bqt;
        ZZlAx:
        QZj2M:
        goto kupZX;
        kupZX:
        $this->load->library(["\x64\x61\x74\x61\164\141\142\154\x65\163", "\x66\x6f\x72\155\137\166\141\154\x69\144\141\164\x69\157\x6e"]);
        goto QGIBQ;
        cyZin:
        goto QZj2M;
        goto FwZ1y;
        B6Bqt:
        $this->load->model("\115\141\x73\x74\145\x72\x5f\x6d\x6f\x64\145\x6c", "\155\141\x73\x74\x65\x72");
        goto W12iD;
        UM_Ac:
        if (!$this->ion_auth->logged_in()) {
            goto Kf5Iw;
        }
        goto My8Rt;
        P6fW3:
        $this->load->model("\122\141\x70\157\x72\x5f\155\x6f\x64\x65\x6c", "\162\x61\x70\x6f\162");
        goto ETRj3;
        My8Rt:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) {
            goto OR_kj;
        }
        goto Lalxt;
        zcPlx:
    }
    public function output_json($data, $encode = true)
    {
        goto DPrVw;
        gV9HD:
        $this->output->set_content_type("\x61\x70\x70\154\x69\x63\141\x74\151\157\156\57\x6a\163\x6f\156")->set_output($data);
        goto QmePz;
        YCuQ9:
        HKI2j:
        goto gV9HD;
        EPE9h:
        $data = json_encode($data);
        goto YCuQ9;
        DPrVw:
        if (!$encode) {
            goto HKI2j;
        }
        goto EPE9h;
        QmePz:
    }
    public function index()
    {
        goto fraYP;
        KatFm:
        $this->load->view("\155\x65\x6d\142\145\x72\163\57\x67\165\162\x75\x2f\164\x65\155\160\154\x61\x74\x65\x73\x2f\150\x65\141\144\145\162", $data);
        goto MmVtg;
        MmVtg:
        $this->load->view("\155\x65\155\142\145\162\163\57\x67\165\x72\165\x2f\154\x75\143\153\x79\x76\151\145\x77");
        goto AhmeR;
        riv1A:
        $data["\164\160\137\x61\x63\164\x69\166\x65"] = $tp;
        goto NOvvl;
        m20T5:
        $data["\147\x75\x72\x75"] = $guru;
        goto KatFm;
        NOvvl:
        $data["\163\155\x74"] = $this->dashboard->getSemester();
        goto y8Wc9;
        dDKnE:
        $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt);
        goto m20T5;
        fraYP:
        $user = $this->ion_auth->user()->row();
        goto lX2vG;
        KAJiW:
        $smt = $this->dashboard->getSemesterActive();
        goto ArN3z;
        AhmeR:
        $this->load->view("\155\145\x6d\142\x65\x72\x73\57\x67\165\162\165\x2f\x74\x65\x6d\160\x6c\141\x74\145\163\x2f\x66\x6f\157\164\x65\162");
        goto vZefN;
        ArN3z:
        $data["\x74\x70"] = $this->dashboard->getTahun();
        goto riv1A;
        lX2vG:
        $data = ["\x75\163\x65\x72" => $user, "\x6a\x75\144\x75\154" => "\125\163\x65\162\40\115\x61\156\x61\147\x65\x6d\145\156\x74", "\163\x75\x62\x6a\x75\x64\x75\x6c" => "\104\141\x74\141\40\125\163\x65\162\x20\x53\x69\163\167\141", "\x73\145\164\164\151\x6e\147" => $this->dashboard->getSetting()];
        goto HJfB7;
        HJfB7:
        $tp = $this->dashboard->getTahunActive();
        goto KAJiW;
        y8Wc9:
        $data["\163\155\x74\x5f\141\143\164\x69\166\145"] = $smt;
        goto dDKnE;
        vZefN:
    }
}
