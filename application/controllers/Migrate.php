<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\x53\x45\x50\101\124\110") or exit("\x4e\x6f\x20\x64\x69\162\145\143\164\x20\x73\143\162\151\160\x74\x20\x61\143\143\x65\x73\x73\40\x61\x6c\154\x6f\x77\x65\144");
class Migrate extends CI_Controller
{
    public function index()
    {
        echo "\x43\157\156\x74\162\157\154\x6c\145\x72\40\146\151\x6c\x65\x20\151\x6e\x64\x65\x78\40\x6d\x65\x74\x68\157\144\x20\x72\165\156\56";
    }
    public function CreateMigration($version = "\62\x30\x32\63\x30\71\60\62\60\x30\x30\x30\60\x30")
    {
        goto nYea3;
        NUMdU:
        goto cThKw;
        goto eivsj;
        UQVsE:
        cThKw:
        goto OhFDv;
        ySEXm:
        if ($this->migration->current() === FALSE) {
            goto Q2nj4;
        }
        goto DVXfp;
        nYea3:
        $this->load->library("\x6d\151\x67\162\x61\x74\x69\x6f\156");
        goto ySEXm;
        fli9c:
        show_error($this->migration->error_string());
        goto UQVsE;
        DVXfp:
        echo "\124\x68\x65\x20\x6d\151\147\162\x61\x74\151\x6f\x6e\x20\x66\151\154\x65\x20\x68\141\x73\40\145\x78\x65\143\165\164\x65\x64\40\163\x75\143\x63\x65\163\x73\x66\x75\x6c\x6c\x79\56";
        goto NUMdU;
        eivsj:
        Q2nj4:
        goto fli9c;
        OhFDv:
    }
    public function undoMigration($version = NULL)
    {
        goto aE7lv;
        nUvEH:
        echo "\124\150\x65\x20\155\x69\147\x72\x61\164\x69\x6f\156\x20\x77\x69\164\150\x20\x73\x65\154\x65\x63\x74\x65\x64\40\x76\x65\162\163\x69\x6f\x6e\x20\x64\157\145\163\x6e\xe2\200\231\x74\40\145\170\x69\x73\x74\x2e";
        goto eclJD;
        YV53G:
        echo "\x43\x6f\x75\154\x64\156\x5c\xe2\x80\x99\x74\40\x72\x6f\x6c\x6c\x20\x62\141\x63\x6b\x20\164\x68\145\x20\155\151\147\162\141\164\x69\x6f\156\56";
        goto wUEyN;
        Bh7ZI:
        exit;
        goto MvfGy;
        bo2z8:
        echo "\124\x68\145\40\155\151\x67\162\x61\164\x69\157\x6e\40\x77\x61\163\x20\x75\x6e\144\157";
        goto lJLum;
        Edm6Q:
        goto fZBos;
        goto fve7k;
        ZCWWh:
        foreach ($migrations as $key => $migration) {
            $migrationKeys[] = $key;
            PsjEm:
        }
        goto LdJ2N;
        mfimi:
        echo "\124\150\x65\40\155\151\x67\x72\141\x74\x69\x6f\x6e\40\x68\x61\x73\40\142\145\x65\156\40\x72\x65\166\145\162\x74\145\144\40\163\x75\143\x63\145\163\163\146\x75\154\154\x79\x2e";
        goto Bh7ZI;
        YI9BM:
        goto owLmW;
        goto wxCAh;
        Nmrcm:
        $migrationKeys = array();
        goto ZCWWh;
        MvfGy:
        fZBos:
        goto YI9BM;
        c0Qwj:
        if (isset($version) && array_key_exists($version, $migrations) && $this->migration->version($version)) {
            goto Kw0Vt;
        }
        goto V3cqd;
        V3cqd:
        if (isset($version) && !array_key_exists($version, $migrations)) {
            goto GVj7w;
        }
        goto s0QPK;
        eclJD:
        owLmW:
        goto CmkvN;
        fve7k:
        Y7IZy:
        goto mfimi;
        lJLum:
        exit;
        goto gOd6B;
        SiSVo:
        $migrations = $this->migration->find_migrations();
        goto Nmrcm;
        wUEyN:
        exit;
        goto Edm6Q;
        Et3Yj:
        if ($this->migration->version($penultimate)) {
            goto Y7IZy;
        }
        goto YV53G;
        aE7lv:
        $this->load->library("\155\x69\147\x72\x61\x74\151\x6f\x6e");
        goto SiSVo;
        wxCAh:
        Kw0Vt:
        goto bo2z8;
        unGYp:
        GVj7w:
        goto nUvEH;
        gOd6B:
        goto owLmW;
        goto unGYp;
        s0QPK:
        $penultimate = sizeof($migrationKeys) == 1 ? 0 : $migrationKeys[sizeof($migrationKeys) - 2];
        goto Et3Yj;
        LdJ2N:
        hTX3S:
        goto c0Qwj;
        CmkvN:
    }
    public function resetMigration()
    {
        goto Lgxbe;
        HrTeH:
        if ($this->migration->current() !== FALSE) {
            goto cMwUV;
        }
        goto MqerF;
        M5vwM:
        cMwUV:
        goto DLOUe;
        Lgxbe:
        $this->load->library("\x6d\151\147\x72\x61\x74\x69\x6f\x6e");
        goto HrTeH;
        EejbM:
        show_error($this->migration->error_string());
        goto ao4X0;
        lpUZ5:
        goto A9X3J;
        goto M5vwM;
        MqerF:
        echo "\103\157\x75\x6c\144\x6e\134\xe2\x80\x99\164\40\162\145\163\145\x74\x20\155\151\147\x72\x61\164\151\157\156\56";
        goto EejbM;
        ao4X0:
        exit;
        goto lpUZ5;
        dJyw2:
        A9X3J:
        goto IFN6o;
        DLOUe:
        echo "\124\150\x65\40\155\151\147\162\x61\164\x69\157\156\x20\167\x61\163\40\162\x65\x76\145\162\164\x20\x74\x6f\40\x74\x68\x65\40\x76\x65\162\163\151\157\156\x20\163\145\x74\x20\x69\156\x20\164\150\145\40\x63\157\156\x66\x69\147\x20\146\151\x6c\145\56";
        goto QeN51;
        QeN51:
        return TRUE;
        goto dJyw2;
        IFN6o:
    }
    function make_base()
    {
        $this->load->library("\x63\x69\137\155\151\x67\x72\x61\x74\151\157\x6e\163\137\x67\x65\156\x65\162\x61\x74\x6f\162\57\x53\x71\x6c\x74\x6f\143\151");
        $this->sqltoci->generate("\153\145\154\x61\163\137\x6a\141\x64\167\x61\x6c\x5f\153\142\x6d");
    }
}
