<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Install_model extends CI_Model
{
    function install_success()
    {
        return $this->check_installer();
    }
    function check_installer()
    {
        goto Tm88r;
        fI0eK:
        if ($CI->db->get("\163\x65\x74\x74\151\156\147")->row()) {
            goto ARFcN;
        }
        goto m9Zo6;
        rJQmw:
        $this->load->dbutil();
        goto F0YqY;
        FOyV3:
        return "\x35";
        goto bPdtX;
        l7jR1:
        Fb3mU:
        goto Z3ynH;
        I3pgv:
        return "\x32";
        goto cbTXt;
        urU9X:
        goto jH6zJ;
        goto l7jR1;
        WU1KA:
        y404m:
        goto cWwdo;
        ZTc5R:
        $CI = &get_instance();
        goto g3ceu;
        F1BpS:
        goto y404m;
        goto iSHn0;
        bPdtX:
        NzFMm:
        goto urU9X;
        OVgsF:
        goto NzFMm;
        goto XnlIx;
        GlES1:
        if ($CI->db->get("\x75\x73\x65\x72\163")->row()) {
            goto mbUXy;
        }
        goto MJ_nc;
        S8kte:
        if (!$this->dbutil->database_exists($database)) {
            goto IUpLa;
        }
        goto ZTc5R;
        Tm88r:
        include APPPATH . "\143\x6f\156\x66\151\x67\x2f\x64\141\x74\x61\142\141\x73\x65\x2e\160\150\160";
        goto TuX9t;
        cWwdo:
        ULJ1F:
        goto qmkjy;
        m9Zo6:
        return "\64";
        goto F1BpS;
        F0YqY:
        if ($database == '') {
            goto Fb3mU;
        }
        goto S8kte;
        waKqh:
        mbUXy:
        goto fI0eK;
        cbTXt:
        goto AAvUk;
        goto xbPGV;
        g3ceu:
        $CI->load->database();
        goto nVhD8;
        MJ_nc:
        return "\63";
        goto VdDqt;
        xbPGV:
        WUboS:
        goto GlES1;
        TuX9t:
        $database = $db["\144\145\146\x61\165\x6c\x74"]["\x64\x61\164\141\x62\141\x73\x65"];
        goto rJQmw;
        nVhD8:
        if ($CI->db->table_exists("\x75\163\x65\162\x73")) {
            goto WUboS;
        }
        goto I3pgv;
        qmkjy:
        AAvUk:
        goto OVgsF;
        VdDqt:
        goto ULJ1F;
        goto waKqh;
        Z_4Do:
        jH6zJ:
        goto xC3B3;
        iSHn0:
        ARFcN:
        goto mP1L1;
        mP1L1:
        return "\60";
        goto WU1KA;
        XnlIx:
        IUpLa:
        goto FOyV3;
        Z3ynH:
        return "\x31";
        goto Z_4Do;
        xC3B3:
    }
}
