<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Post_model extends CI_Model
{
    public function getPostUser($id_user)
    {
        goto fyBc_;
        oVZo8:
        $posts = $this->db->get()->result();
        goto Kl2Xh;
        Dh7gQ:
        $this->db->join("\155\x61\163\x74\145\162\137\147\165\162\x75\40\x62", "\141\x2e\x64\x61\x72\x69\x3d\142\56\151\x64\x5f\x67\165\x72\165", "\154\145\146\164");
        goto SeRIF;
        w2j0b:
        $this->db->where("\141\x2e\x64\141\x72\x69", $id_user);
        goto zfhzz;
        zfhzz:
        YHcUk:
        goto nj6IT;
        fyBc_:
        $this->db->select("\141\56\x2a\54\x20\142\x2e\156\141\x6d\141\x5f\147\165\x72\165\x2c\40\x62\56\x66\157\164\x6f\54\40\x28\x53\105\114\x45\x43\124\x20\103\117\125\116\124\50\160\x6f\x73\x74\x5f\143\157\155\155\145\x6e\x74\163\56\x69\x64\137\x63\157\155\x6d\145\x6e\x74\51\40\106\122\117\115\40\x70\157\x73\x74\x5f\143\x6f\x6d\155\x65\x6e\x74\163\x20\x57\x48\x45\x52\105\40\141\56\151\x64\x5f\160\157\x73\164\40\x3d\x20\x70\157\163\x74\137\143\157\155\155\145\156\x74\x73\x2e\x69\144\137\x70\157\163\164\51\40\x41\123\x20\152\x6d\x6c");
        goto iFVOU;
        Kl2Xh:
        return $posts;
        goto UvRhL;
        nj6IT:
        $this->db->order_by("\141\56\165\x70\144\x61\x74\145\x64", "\144\x65\163\x63");
        goto oVZo8;
        iFVOU:
        $this->db->from("\x70\x6f\163\x74\40\141");
        goto Dh7gQ;
        SeRIF:
        if (!($id_user != 0)) {
            goto YHcUk;
        }
        goto w2j0b;
        UvRhL:
    }
    public function getPostForUser($kepada, $kelas = null)
    {
        goto qvycq;
        qvycq:
        $this->db->select("\x61\56\x2a\54\x20\142\56\x6e\141\x6d\x61\x5f\147\x75\x72\165\x2c\40\142\x2e\146\x6f\164\157\x2c\40\x28\x53\105\x4c\105\103\124\x20\103\117\125\x4e\x54\x28\x70\157\163\x74\137\x63\157\155\x6d\x65\x6e\x74\163\x2e\151\x64\137\x63\x6f\x6d\x6d\x65\x6e\164\51\40\x46\122\117\x4d\x20\160\157\x73\x74\x5f\143\157\x6d\155\x65\x6e\164\x73\x20\127\110\x45\x52\x45\40\141\56\151\x64\x5f\160\157\163\x74\40\x3d\40\160\x6f\x73\x74\137\x63\x6f\x6d\x6d\x65\156\164\x73\x2e\151\x64\137\x70\157\x73\164\51\40\x41\123\40\x6a\155\x6c");
        goto F0Roz;
        Iq77H:
        $this->db->order_by("\141\x2e\165\160\x64\x61\x74\145\x64", "\x64\x65\163\x63");
        goto Cqv1s;
        dAiFC:
        $this->db->where("\50\x61\56\x6b\x65\160\x61\x64\141\x20\114\x49\113\105\40" . $kepada . "\x29\40\x4f\x52\x20\50\141\x2e\x6b\x65\x70\x61\144\141\x20\x4c\x49\113\105\40" . $kelas . "\x29");
        goto PYCbs;
        gtlwH:
        if (!($kepada != null)) {
            goto v51vM;
        }
        goto dAiFC;
        S7CkB:
        $this->db->join("\155\141\163\164\x65\162\137\147\165\x72\x75\40\142", "\141\x2e\144\141\162\151\x3d\142\56\151\x64\x5f\x67\x75\x72\165", "\154\x65\146\164");
        goto gtlwH;
        PYCbs:
        v51vM:
        goto Iq77H;
        DB12S:
        return $posts;
        goto vukR2;
        F0Roz:
        $this->db->from("\x70\x6f\163\164\x20\x61");
        goto S7CkB;
        Cqv1s:
        $posts = $this->db->get()->result();
        goto DB12S;
        vukR2:
    }
    public function getIdComments($id_post)
    {
        goto fHdbL;
        eTXZ6:
        return $ids;
        goto PEzVn;
        fHdbL:
        $this->db->select("\151\144\x5f\x63\x6f\155\x6d\145\x6e\164");
        goto KrCSh;
        t3udz:
        $ids = $this->db->get("\160\157\163\x74\x5f\143\x6f\x6d\x6d\x65\x6e\x74\163")->result();
        goto eTXZ6;
        KrCSh:
        $this->db->where("\x69\144\137\160\x6f\163\x74", $id_post);
        goto t3udz;
        PEzVn:
    }
    public function getIdReplies($id_comment)
    {
        goto Hm_8U;
        Hm_8U:
        $this->db->select("\x69\144\137\x72\x65\x70\x6c\x79");
        goto zn0Q7;
        zn0Q7:
        if (is_array($id_comment)) {
            goto AioMd;
        }
        goto gic00;
        gic00:
        $this->db->where("\x69\144\137\143\x6f\155\155\145\x6e\x74", $id_comment);
        goto Jz12O;
        fbsec:
        return $ids;
        goto Hmwd5;
        pXbi3:
        ilBOL:
        goto jNwhT;
        jNwhT:
        $ids = $this->db->get("\x70\x6f\x73\x74\x5f\x72\x65\160\154\171")->result();
        goto fbsec;
        Yser2:
        $this->db->where_in("\x69\x64\137\x63\157\155\155\x65\x6e\164", $id_comment);
        goto pXbi3;
        Jz12O:
        goto ilBOL;
        goto kCQFd;
        kCQFd:
        AioMd:
        goto Yser2;
        Hmwd5:
    }
}
