<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\x42\101\x53\105\120\101\x54\110") or exit("\x4e\157\40\x64\151\162\145\x63\x74\x20\163\143\162\151\x70\164\40\141\x63\x63\x65\x73\163\40\141\154\154\x6f\x77\x65\144");
class Settings_model extends CI_Model
{
    public function not_admin()
    {
        goto cZafm;
        SrHKk:
        return $this->db->get()->result();
        goto f1wUf;
        dCS01:
        $this->db->where_not_in("\142\56\x67\162\x6f\x75\160\x5f\x69\144", ["\x31"]);
        goto SrHKk;
        W4E1S:
        $this->db->join("\165\x73\x65\x72\x73\x5f\x67\162\x6f\x75\160\163\x20\142", "\141\56\x69\x64\75\x62\56\x75\x73\x65\162\x5f\x69\144");
        goto dCS01;
        cZafm:
        $this->db->select("\x61\56\x69\x64");
        goto WA4G1;
        WA4G1:
        $this->db->from("\x75\163\x65\162\163\40\x61");
        goto W4E1S;
        f1wUf:
    }
    public function truncate($table)
    {
        goto qogkD;
        Crgoz:
        VCesI:
        goto QOGo2;
        CSxqM:
        $this->db->query("\x53\105\124\x20\x46\117\x52\x45\x49\x47\x4e\137\113\105\131\x5f\103\x48\105\x43\x4b\x53\40\x3d\x20\x30");
        goto Vt5Xi;
        Vt5Xi:
        foreach ($table as $tb) {
            $this->db->truncate($tb);
            fW8tt:
        }
        goto iyNsE;
        M87Z1:
        $users = $this->not_admin();
        goto w6f_s;
        qogkD:
        $this->load->helper("\146\x69\154\145");
        goto CSxqM;
        w6f_s:
        foreach ($users as $user) {
            $this->db->delete("\x75\163\x65\x72\163", array("\x69\144" => $user->id));
            ww9gb:
        }
        goto Crgoz;
        QOGo2:
        return;
        goto wMWE2;
        dsBPK:
        $this->db->query("\x53\x45\x54\x20\106\x4f\x52\x45\x49\x47\x4e\137\113\105\131\x5f\x43\x48\x45\103\113\x53\40\75\40\x31");
        goto f1IzV;
        iyNsE:
        tgK3t:
        goto dsBPK;
        f1IzV:
        delete_files("\x2e\57\x75\160\x6c\x6f\141\x64\x73\57\x62\x61\x6e\x6b\137\163\x6f\141\x6c\x2f");
        goto M87Z1;
        wMWE2:
    }
    public function getSetting()
    {
        return $this->db->get("\x73\x65\x74\164\x69\156\147")->row();
    }
    function toJSON($table)
    {
        $query = $this->db->get($table);
        return json_encode($query->result(), JSON_PRETTY_PRINT);
    }
    function rowSize($table)
    {
        $query = $this->db->get($table);
        return $query->num_rows();
    }
}
