<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\101\x53\105\120\101\x54\x48") or exit("\x4e\x6f\40\144\151\162\x65\x63\x74\x20\163\143\162\x69\x70\x74\40\x61\x63\x63\145\x73\x73\40\x61\154\x6c\x6f\x77\145\x64");
class Ion_auth_model extends CI_Model
{
    const MAX_COOKIE_LIFETIME = 63072000;
    const MAX_PASSWORD_SIZE_BYTES = 4096;
    public $tables = array();
    public $activation_code;
    public $new_password;
    public $identity;
    public $_ion_where = array();
    public $_ion_select = array();
    public $_ion_like = array();
    public $_ion_limit = NULL;
    public $_ion_offset = NULL;
    public $_ion_order_by = NULL;
    public $_ion_order = NULL;
    protected $_ion_hooks;
    protected $response = NULL;
    protected $messages;
    protected $errors;
    protected $error_start_delimiter;
    protected $error_end_delimiter;
    public $_cache_user_in_group = array();
    protected $_cache_groups = array();
    protected $db;
    public function __construct()
    {
        goto GC8Oh;
        anVgK:
        $this->load->library("\x66\x6f\162\155\x5f\x76\x61\x6c\x69\144\x61\164\151\x6f\156");
        goto B7XIr;
        FX8JW:
        eBj9s:
        goto GXn3g;
        NFHxP:
        $this->trigger_events("\x6d\x6f\144\145\x6c\137\x63\157\156\x73\x74\x72\165\x63\164\x6f\x72");
        goto TrQMN;
        gYVB3:
        $this->identity_column = $this->config->item("\x69\x64\x65\x6e\x74\x69\164\x79", "\x69\157\x6e\137\x61\x75\164\150");
        goto uRuFs;
        V35ZT:
        $this->db = $CI->db;
        goto pa68g;
        Mw2YQ:
        $this->tables = $this->config->item("\x74\141\142\x6c\x65\163", "\x69\157\156\x5f\x61\x75\164\150");
        goto gYVB3;
        RYJML:
        $this->message_end_delimiter = $this->error_end_delimiter;
        goto FX8JW;
        lNony:
        $this->message_end_delimiter = $this->config->item("\155\x65\163\163\x61\x67\145\x5f\x65\x6e\x64\137\144\x65\154\151\x6d\x69\164\145\x72", "\x69\x6f\x6e\137\141\165\164\150");
        goto dI32_;
        mK5W9:
        $group_name = $this->config->item("\144\141\164\141\x62\141\x73\x65\137\147\x72\157\165\160\137\156\141\x6d\x65", "\151\x6f\x6e\x5f\141\165\x74\x68");
        goto qnMhe;
        wMILh:
        $this->error_end_delimiter = $this->config->item("\x65\162\x72\157\162\x5f\145\x6e\144\x5f\x64\x65\x6c\x69\155\x69\x74\145\162", "\151\x6f\156\x5f\x61\x75\164\150");
        goto k71G2;
        I1xO7:
        $this->message_start_delimiter = $this->config->item("\x6d\145\x73\163\141\147\145\137\163\164\x61\x72\x74\x5f\144\145\x6c\x69\x6d\151\x74\145\162", "\151\157\156\x5f\141\165\x74\150");
        goto lNony;
        Sj4Pc:
        $error_prefix->setAccessible(TRUE);
        goto ItaBW;
        dI32_:
        $this->error_start_delimiter = $this->config->item("\145\x72\162\x6f\162\137\x73\164\141\162\x74\137\144\145\154\x69\x6d\x69\x74\x65\x72", "\151\157\156\x5f\x61\165\x74\150");
        goto wMILh;
        GC8Oh:
        $this->config->load("\x69\157\x6e\137\141\x75\x74\x68", TRUE);
        goto CJriK;
        tOZng:
        $error_suffix->setAccessible(TRUE);
        goto jY86Q;
        YDIW5:
        $this->load->helper("\144\141\x74\145");
        goto oT8P0;
        ClU8Q:
        $this->hash_method = $this->config->item("\150\x61\x73\x68\x5f\x6d\x65\x74\150\x6f\x64", "\x69\157\x6e\137\x61\165\164\x68");
        goto pSy3P;
        CChBH:
        $this->db = $this->load->database($group_name, TRUE, TRUE);
        goto Vx1fJ;
        q8zno:
        HNnhW:
        goto anVgK;
        pISdC:
        eBxck:
        goto aI6kL;
        jY86Q:
        $this->error_end_delimiter = $error_suffix->getValue($this->form_validation);
        goto RYJML;
        ItaBW:
        $this->error_start_delimiter = $error_prefix->getValue($this->form_validation);
        goto y0016;
        CJriK:
        $this->load->helper("\143\x6f\157\153\151\145");
        goto YDIW5;
        pSy3P:
        $this->messages = [];
        goto EYZdX;
        uRuFs:
        $this->join = $this->config->item("\x6a\157\x69\x6e", "\x69\x6f\x6e\x5f\141\165\x74\150");
        goto ClU8Q;
        pa68g:
        m5VFL:
        goto Mw2YQ;
        y0016:
        $this->message_start_delimiter = $this->error_start_delimiter;
        goto c_2cH;
        c_2cH:
        $error_suffix = $form_validation_class->getProperty("\x5f\x65\162\162\x6f\162\137\163\x75\146\x66\x69\x78");
        goto tOZng;
        QuSqp:
        $delimiters_source = $this->config->item("\x64\145\154\x69\155\151\164\x65\x72\x73\x5f\163\x6f\165\162\x63\145", "\x69\x6f\156\x5f\141\x75\x74\150");
        goto XCVzI;
        XCVzI:
        if ($delimiters_source === "\146\x6f\x72\155\137\166\141\x6c\x69\144\x61\164\151\x6f\156") {
            goto HNnhW;
        }
        goto I1xO7;
        Vx1fJ:
        goto m5VFL;
        goto pISdC;
        EYZdX:
        $this->errors = [];
        goto QuSqp;
        qnMhe:
        if (empty($group_name)) {
            goto eBxck;
        }
        goto CChBH;
        tbIqT:
        $error_prefix = $form_validation_class->getProperty("\x5f\145\162\x72\157\x72\137\x70\x72\x65\x66\151\x78");
        goto Sj4Pc;
        oT8P0:
        $this->lang->load("\x69\157\x6e\x5f\x61\165\164\x68");
        goto mK5W9;
        k71G2:
        goto eBj9s;
        goto q8zno;
        B7XIr:
        $form_validation_class = new ReflectionClass("\x43\x49\137\106\x6f\x72\155\x5f\166\x61\x6c\x69\144\141\164\151\x6f\156");
        goto tbIqT;
        GXn3g:
        $this->_ion_hooks = new stdClass();
        goto NFHxP;
        aI6kL:
        $CI = &get_instance();
        goto V35ZT;
        TrQMN:
    }
    public function db()
    {
        return $this->db;
    }
    public function hash_password($password, $identity = NULL)
    {
        goto WKcmf;
        bpHaN:
        return password_hash($password, $algo, $params);
        goto aAN28;
        aAN28:
        GCvBJ:
        goto e5cto;
        ugty1:
        r1H_F:
        goto bBLhg;
        bBLhg:
        $algo = $this->_get_hash_algo();
        goto bo0_0;
        bo0_0:
        $params = $this->_get_hash_parameters($identity);
        goto P6TUj;
        e5cto:
        return FALSE;
        goto DPoVk;
        WKcmf:
        if (!(empty($password) || strpos($password, "\x0") !== FALSE || strlen($password) > self::MAX_PASSWORD_SIZE_BYTES)) {
            goto r1H_F;
        }
        goto dgT22;
        P6TUj:
        if (!($algo !== FALSE && $params !== FALSE)) {
            goto GCvBJ;
        }
        goto bpHaN;
        dgT22:
        return FALSE;
        goto ugty1;
        DPoVk:
    }
    public function verify_password($password, $hash_password_db, $identity = NULL)
    {
        goto MYJSc;
        h9SYJ:
        goto rUUCL;
        goto rhI4F;
        rhI4F:
        uUlPu:
        goto BeBvg;
        MYJSc:
        if (!(empty($password) || empty($hash_password_db) || strpos($password, "\x0") !== FALSE || strlen($password) > self::MAX_PASSWORD_SIZE_BYTES)) {
            goto Do5vm;
        }
        goto XppYG;
        kKpcX:
        Do5vm:
        goto qwhal;
        BeBvg:
        return password_verify($password, $hash_password_db);
        goto RX67A;
        RX67A:
        rUUCL:
        goto szbUD;
        RCv5x:
        return $this->_password_verify_sha1_legacy($identity, $password, $hash_password_db);
        goto h9SYJ;
        XppYG:
        return FALSE;
        goto kKpcX;
        qwhal:
        if (strpos($hash_password_db, "\x24") === 0) {
            goto uUlPu;
        }
        goto RCv5x;
        szbUD:
    }
    public function rehash_password_if_needed($hash, $identity, $password)
    {
        goto GqBOW;
        nOHqJ:
        $this->trigger_events(["\x72\x65\x68\x61\163\x68\137\x70\x61\x73\x73\167\x6f\162\144", "\162\145\x68\141\163\x68\x5f\160\141\x73\x73\x77\x6f\162\144\137\x75\x6e\x73\165\143\143\x65\x73\x73\146\165\x6c"]);
        goto RMMUb;
        Y43ps:
        OxHzv:
        goto Ee29D;
        bp6zF:
        if (!password_needs_rehash($hash, $algo, $params)) {
            goto E1rf7;
        }
        goto pIMaw;
        GqBOW:
        $algo = $this->_get_hash_algo();
        goto MOkYE;
        WvB0u:
        E1rf7:
        goto Y43ps;
        JEO2B:
        if (!($algo !== FALSE && $params !== FALSE)) {
            goto OxHzv;
        }
        goto bp6zF;
        MOkYE:
        $params = $this->_get_hash_parameters($identity);
        goto JEO2B;
        qL9VT:
        $this->trigger_events(["\162\x65\150\x61\x73\x68\137\x70\x61\x73\x73\167\x6f\x72\144", "\162\x65\x68\x61\163\x68\x5f\160\141\x73\163\167\157\x72\144\137\x73\x75\143\x63\145\x73\x73\146\165\154"]);
        goto bGGdK;
        bGGdK:
        OGws1:
        goto WvB0u;
        GTSAb:
        GW1u0:
        goto qL9VT;
        RMMUb:
        goto OGws1;
        goto GTSAb;
        pIMaw:
        if ($this->_set_password_db($identity, $password)) {
            goto GW1u0;
        }
        goto nOHqJ;
        Ee29D:
    }
    public function get_user_by_activation_code($user_code)
    {
        goto X4KJs;
        DL1VI:
        return FALSE;
        goto ams5m;
        p_g7o:
        c9ZfT:
        goto JOjE2;
        X4KJs:
        $token = $this->_retrieve_selector_validator_couple($user_code);
        goto W0JpC;
        W2q1k:
        if (!$user) {
            goto d1Vo0;
        }
        goto ZGSz3;
        ZGSz3:
        if (!$this->verify_password($token->validator, $user->activation_code)) {
            goto c9ZfT;
        }
        goto s7i2z;
        JOjE2:
        d1Vo0:
        goto DL1VI;
        W0JpC:
        $user = $this->where("\x61\143\164\151\166\141\x74\151\x6f\156\137\163\x65\154\x65\x63\164\157\162", $token->selector)->users()->row();
        goto W2q1k;
        s7i2z:
        return $user;
        goto p_g7o;
        ams5m:
    }
    public function activate($id, $code = FALSE)
    {
        goto yEbkh;
        Wjma6:
        xl7HH:
        goto uc2b7;
        uc2b7:
        dvAzc:
        goto xTBIS;
        v_PA9:
        V3U2q:
        goto RvlJR;
        wnUuZ:
        $this->set_error("\x61\x63\x74\151\166\141\x74\x65\137\165\x6e\163\x75\143\x63\x65\x73\163\146\x75\154");
        goto HXZnl;
        Djrhl:
        $user = $this->get_user_by_activation_code($code);
        goto v_PA9;
        dZ3g0:
        $this->set_message("\141\143\164\151\166\141\x74\x65\137\163\165\x63\x63\145\x73\163\x66\x75\x6c");
        goto Z8uot;
        yEbkh:
        $this->trigger_events("\160\x72\145\137\x61\x63\x74\151\166\x61\x74\x65");
        goto NGW6R;
        odcHW:
        $this->trigger_events("\145\170\164\162\141\137\167\150\145\x72\145");
        goto goCJN;
        RvlJR:
        if (!($code === FALSE || $user && $user->id === $id)) {
            goto dvAzc;
        }
        goto O3Y5L;
        goCJN:
        $this->db->update($this->tables["\x75\163\145\x72\x73"], $data, ["\x69\x64" => $id]);
        goto YNukD;
        NGW6R:
        if (!($code !== FALSE)) {
            goto V3U2q;
        }
        goto Djrhl;
        xTBIS:
        $this->trigger_events(["\160\157\x73\x74\137\141\143\x74\x69\166\x61\164\145", "\160\157\x73\164\x5f\141\143\x74\151\x76\x61\x74\145\x5f\165\x6e\163\165\x63\x63\x65\163\163\x66\x75\154"]);
        goto wnUuZ;
        Z8uot:
        return TRUE;
        goto Wjma6;
        HXZnl:
        return FALSE;
        goto xTEX3;
        Lmra0:
        $this->trigger_events(["\160\157\163\164\x5f\x61\143\x74\151\x76\141\164\145", "\160\x6f\163\164\137\141\143\x74\x69\166\141\164\x65\137\163\165\x63\143\x65\x73\163\x66\x75\154"]);
        goto dZ3g0;
        O3Y5L:
        $data = ["\x61\x63\164\x69\x76\141\164\151\157\156\137\x73\x65\154\145\143\x74\157\162" => NULL, "\141\143\x74\151\x76\x61\164\x69\x6f\x6e\137\143\157\144\145" => NULL, "\141\x63\164\151\166\145" => 1];
        goto odcHW;
        YNukD:
        if (!($this->db->affected_rows() === 1)) {
            goto xl7HH;
        }
        goto Lmra0;
        xTEX3:
    }
    public function deactivate($id = NULL)
    {
        goto j3zmW;
        HrWTK:
        u2jJd:
        goto MkISV;
        yuwvs:
        if (!isset($id)) {
            goto kRVtg;
        }
        goto xvWey;
        IPIwN:
        $this->set_error("\x64\145\141\143\164\x69\166\x61\x74\x65\x5f\x75\156\x73\x75\x63\143\x65\163\x73\x66\x75\154");
        goto mwcwk;
        XKGNj:
        return $return;
        goto tAM_Y;
        xxdPB:
        ouiw6:
        goto XKGNj;
        nF7B8:
        BXI7l:
        goto CH5ZZ;
        EHL79:
        $this->set_error("\x64\145\141\x63\x74\151\x76\x61\164\x65\x5f\x75\156\x73\x75\x63\x63\x65\x73\x73\x66\x75\154");
        goto BJ_A4;
        CH5ZZ:
        goto FWWbd;
        goto d1ruO;
        mwcwk:
        return FALSE;
        goto fl_nv;
        fl_nv:
        FWWbd:
        goto Srem8;
        SS42u:
        $this->activation_code = $token->user_code;
        goto Ec_C9;
        Srem8:
        $token = $this->_generate_selector_validator_couple(20, 40);
        goto SS42u;
        Ec_C9:
        $data = ["\x61\x63\x74\x69\x76\141\164\151\157\156\x5f\x73\145\x6c\145\x63\x74\x6f\162" => $token->selector, "\x61\143\x74\x69\x76\x61\164\x69\157\x6e\x5f\x63\157\x64\x65" => $token->validator_hashed, "\141\143\164\151\166\x65" => 0];
        goto p0cli;
        deekA:
        $this->db->update($this->tables["\x75\x73\x65\x72\x73"], $data, ["\151\x64" => $id]);
        goto FUiq6;
        FUiq6:
        $return = $this->db->affected_rows() == 1;
        goto kWs7M;
        xvWey:
        if (!($this->ion_auth->logged_in() && $this->user()->row()->id == $id)) {
            goto BXI7l;
        }
        goto LJd56;
        BJ_A4:
        goto ouiw6;
        goto HrWTK;
        MkISV:
        $this->set_message("\144\x65\141\143\x74\151\x76\141\x74\x65\x5f\x73\x75\x63\143\x65\x73\x73\146\165\x6c");
        goto xxdPB;
        p0cli:
        $this->trigger_events("\x65\170\164\x72\141\x5f\x77\x68\x65\x72\x65");
        goto deekA;
        dnx_o:
        return FALSE;
        goto nF7B8;
        d1ruO:
        kRVtg:
        goto IPIwN;
        LJd56:
        $this->set_error("\144\x65\x61\143\164\151\x76\x61\164\x65\x5f\x63\165\x72\162\145\156\x74\x5f\165\163\145\162\137\x75\x6e\163\165\143\143\145\163\x73\x66\x75\154");
        goto dnx_o;
        j3zmW:
        $this->trigger_events("\x64\145\141\x63\164\x69\166\141\x74\145");
        goto yuwvs;
        kWs7M:
        if ($return) {
            goto u2jJd;
        }
        goto EHL79;
        tAM_Y:
    }
    public function clear_forgotten_password_code($identity)
    {
        goto A_3Hh;
        A_3Hh:
        if (!empty($identity)) {
            goto R62Gc;
        }
        goto Xxd4m;
        Eb8yz:
        R62Gc:
        goto I1iFd;
        o5bKz:
        return TRUE;
        goto jWbjP;
        dirMr:
        $this->db->update($this->tables["\x75\163\x65\x72\x73"], $data, [$this->identity_column => $identity]);
        goto o5bKz;
        Xxd4m:
        return FALSE;
        goto Eb8yz;
        I1iFd:
        $data = ["\x66\157\162\x67\x6f\x74\164\x65\x6e\x5f\160\141\163\163\167\x6f\162\144\x5f\163\145\154\x65\143\x74\157\x72" => NULL, "\146\x6f\x72\x67\157\164\164\x65\x6e\x5f\160\141\x73\163\x77\x6f\x72\x64\x5f\143\x6f\x64\145" => NULL, "\x66\x6f\x72\x67\157\164\x74\145\156\x5f\x70\141\163\163\x77\x6f\162\144\x5f\164\x69\155\x65" => NULL];
        goto dirMr;
        jWbjP:
    }
    public function clear_remember_code($identity)
    {
        goto NR0gb;
        WJVVK:
        $this->db->update($this->tables["\165\x73\145\x72\163"], $data, [$this->identity_column => $identity]);
        goto N7DDk;
        H_g3G:
        t53Rz:
        goto cI41O;
        cI41O:
        $data = ["\x72\145\155\145\x6d\x62\x65\162\x5f\163\x65\x6c\x65\143\164\157\x72" => NULL, "\x72\x65\155\x65\155\x62\x65\162\x5f\143\157\144\145" => NULL];
        goto WJVVK;
        wppGI:
        return FALSE;
        goto H_g3G;
        N7DDk:
        return TRUE;
        goto H2n1Z;
        NR0gb:
        if (!empty($identity)) {
            goto t53Rz;
        }
        goto wppGI;
        H2n1Z:
    }
    public function reset_password($identity, $new)
    {
        goto pjdEc;
        WdFGp:
        $this->trigger_events(["\160\157\163\164\x5f\x63\150\x61\x6e\147\x65\x5f\160\141\x73\x73\167\x6f\x72\x64", "\160\157\163\x74\137\143\150\141\156\147\145\137\x70\x61\163\x73\x77\x6f\162\144\x5f\x75\156\163\165\143\x63\145\163\163\x66\x75\x6c"]);
        goto vLls9;
        vLls9:
        $this->set_error("\160\x61\x73\163\x77\157\x72\144\137\x63\150\x61\x6e\x67\145\137\165\156\x73\x75\x63\x63\145\x73\x73\146\165\x6c");
        goto secmJ;
        dvEPj:
        $return = $this->_set_password_db($identity, $new);
        goto hs_6X;
        wdebZ:
        fYzWy:
        goto Y9vH7;
        vE7g6:
        u69dl:
        goto dvEPj;
        Aj70Y:
        return FALSE;
        goto vE7g6;
        hs_6X:
        if ($return) {
            goto fYzWy;
        }
        goto WdFGp;
        sfH5x:
        $this->trigger_events(["\x70\157\x73\164\137\143\150\x61\156\147\145\137\x70\x61\163\x73\167\157\x72\144", "\x70\157\x73\164\137\x63\x68\141\x6e\x67\x65\x5f\160\141\x73\x73\x77\x6f\x72\144\x5f\165\156\x73\x75\x63\x63\x65\163\x73\146\165\x6c"]);
        goto Aj70Y;
        secmJ:
        goto S78mm;
        goto wdebZ;
        qcb64:
        if ($this->identity_check($identity)) {
            goto u69dl;
        }
        goto sfH5x;
        Y9vH7:
        $this->trigger_events(["\x70\x6f\163\164\x5f\x63\150\x61\156\x67\x65\137\160\x61\x73\163\x77\157\x72\x64", "\160\157\163\x74\137\x63\150\x61\156\x67\145\137\x70\x61\163\x73\167\x6f\x72\144\137\163\165\x63\143\145\x73\163\146\165\x6c"]);
        goto ZRIZF;
        bfenL:
        S78mm:
        goto LcHHZ;
        ZRIZF:
        $this->set_message("\x70\x61\x73\x73\167\x6f\x72\x64\x5f\x63\x68\x61\156\147\x65\137\163\x75\143\143\145\x73\163\146\x75\154");
        goto bfenL;
        pjdEc:
        $this->trigger_events("\160\x72\145\x5f\x63\x68\x61\156\x67\x65\137\x70\141\x73\x73\167\157\162\x64");
        goto qcb64;
        LcHHZ:
        return $return;
        goto EDl8y;
        EDl8y:
    }
    public function change_password($identity, $old, $new)
    {
        goto H5M29;
        ACgup:
        jJSMC:
        goto p99L2;
        p99L2:
        $this->set_error("\160\x61\163\x73\167\x6f\x72\144\x5f\x63\x68\x61\x6e\147\145\x5f\x75\156\163\x75\x63\x63\x65\163\163\146\165\x6c");
        goto IwMDM;
        AgDRd:
        oNIkp:
        goto q06PF;
        eT5dE:
        $this->trigger_events("\145\x78\164\x72\141\137\167\150\145\x72\145");
        goto L9Zi_;
        H5M29:
        $this->trigger_events("\160\x72\x65\137\x63\150\141\x6e\147\145\x5f\160\141\x73\x73\167\x6f\x72\144");
        goto eT5dE;
        v05C5:
        $this->set_error("\160\141\163\163\167\x6f\162\144\137\x63\150\x61\156\147\145\137\x75\x6e\x73\x75\143\143\145\x73\x73\x66\x75\154");
        goto PxuEt;
        dtX0N:
        $this->trigger_events(["\160\157\163\x74\137\143\x68\x61\x6e\x67\x65\137\x70\141\x73\x73\167\x6f\162\x64", "\x70\x6f\x73\164\x5f\143\150\x61\156\147\145\137\x70\141\163\x73\x77\x6f\x72\x64\x5f\x75\x6e\x73\165\143\x63\x65\163\x73\146\x75\154"]);
        goto mwZPE;
        xgc5t:
        if (!$this->verify_password($old, $user->password, $identity)) {
            goto jJSMC;
        }
        goto HXAeY;
        PxuEt:
        goto tL8Pm;
        goto A92kz;
        Q4ntU:
        if ($result) {
            goto Zu5yt;
        }
        goto RsPwJ;
        IwMDM:
        return FALSE;
        goto fPWIr;
        RsPwJ:
        $this->trigger_events(["\160\x6f\x73\x74\137\x63\150\x61\156\147\145\x5f\160\x61\x73\x73\x77\157\x72\144", "\x70\x6f\163\164\x5f\x63\x68\x61\156\147\x65\x5f\x70\x61\x73\163\167\x6f\162\x64\137\165\156\x73\x75\143\143\x65\x73\x73\x66\165\154"]);
        goto v05C5;
        iKCF5:
        return $result;
        goto ACgup;
        cChgn:
        tL8Pm:
        goto iKCF5;
        A92kz:
        Zu5yt:
        goto eYDtN;
        HXAeY:
        $result = $this->_set_password_db($identity, $new);
        goto Q4ntU;
        L9Zi_:
        $query = $this->db->select("\x69\x64\54\40\160\141\163\163\x77\x6f\x72\x64")->where($this->identity_column, $identity)->limit(1)->order_by("\x69\x64", "\144\x65\x73\143")->get($this->tables["\165\x73\145\x72\163"]);
        goto muIX1;
        muIX1:
        if (!($query->num_rows() !== 1)) {
            goto oNIkp;
        }
        goto dtX0N;
        q06PF:
        $user = $query->row();
        goto xgc5t;
        olfLp:
        return FALSE;
        goto AgDRd;
        ZKYSL:
        $this->set_message("\160\x61\163\x73\167\x6f\x72\x64\137\143\150\141\156\147\145\x5f\163\x75\143\143\145\x73\163\x66\x75\x6c");
        goto cChgn;
        mwZPE:
        $this->set_error("\160\x61\163\x73\x77\x6f\162\x64\x5f\x63\150\141\x6e\147\x65\x5f\165\x6e\163\x75\143\x63\145\x73\163\x66\165\x6c");
        goto olfLp;
        eYDtN:
        $this->trigger_events(["\x70\x6f\x73\x74\x5f\143\150\141\156\147\145\x5f\x70\x61\163\163\167\157\162\x64", "\x70\x6f\163\x74\x5f\143\150\x61\156\147\145\137\x70\141\163\x73\167\157\x72\144\137\x73\x75\143\x63\x65\163\x73\146\165\154"]);
        goto ZKYSL;
        fPWIr:
    }
    public function username_check($username = '')
    {
        goto FKrpn;
        c_ha5:
        $this->trigger_events("\145\170\164\x72\141\137\x77\x68\145\162\x65");
        goto EB6Vc;
        v3N3p:
        return FALSE;
        goto ntrsb;
        ntrsb:
        X8Asu:
        goto c_ha5;
        pZfD1:
        if (!empty($username)) {
            goto X8Asu;
        }
        goto v3N3p;
        FKrpn:
        $this->trigger_events("\x75\163\x65\162\x6e\x61\155\145\x5f\143\x68\x65\143\x6b");
        goto pZfD1;
        EB6Vc:
        return $this->db->where("\x75\x73\145\x72\x6e\141\155\x65", $username)->limit(1)->count_all_results($this->tables["\165\163\145\162\163"]) > 0;
        goto Rn3kn;
        Rn3kn:
    }
    public function email_check($email = '')
    {
        goto qT9Dz;
        oXkfP:
        if (!empty($email)) {
            goto miZW6;
        }
        goto NnzQ4;
        NnzQ4:
        return FALSE;
        goto WkxO7;
        whSWF:
        $this->trigger_events("\145\x78\164\162\x61\x5f\x77\x68\145\162\x65");
        goto E5WWl;
        WkxO7:
        miZW6:
        goto whSWF;
        E5WWl:
        return $this->db->where("\145\155\x61\x69\154", $email)->limit(1)->count_all_results($this->tables["\x75\x73\x65\162\163"]) > 0;
        goto RSXEM;
        qT9Dz:
        $this->trigger_events("\145\155\x61\151\154\137\143\x68\145\x63\153");
        goto oXkfP;
        RSXEM:
    }
    public function identity_check($identity = '')
    {
        goto W4jcE;
        cfcj1:
        NLXxD:
        goto nSALY;
        leL_2:
        return FALSE;
        goto cfcj1;
        nSALY:
        return $this->db->where($this->identity_column, $identity)->limit(1)->count_all_results($this->tables["\165\x73\145\x72\163"]) > 0;
        goto fb2I6;
        zJ_0A:
        if (!empty($identity)) {
            goto NLXxD;
        }
        goto leL_2;
        W4jcE:
        $this->trigger_events("\151\x64\x65\156\x74\x69\164\x79\137\143\150\145\143\153");
        goto zJ_0A;
        fb2I6:
    }
    public function get_user_id_from_identity($identity = '')
    {
        goto T5A_X;
        T5A_X:
        if (!empty($identity)) {
            goto xoCDD;
        }
        goto OCqmZ;
        VtugC:
        $user = $query->row();
        goto o1ecX;
        z75OQ:
        xoCDD:
        goto VFPnA;
        cjcru:
        return FALSE;
        goto Y3Eqp;
        OCqmZ:
        return FALSE;
        goto z75OQ;
        o1ecX:
        return $user->id;
        goto CuoaC;
        Y3Eqp:
        qBuKw:
        goto VtugC;
        Ya2P8:
        if (!($query->num_rows() !== 1)) {
            goto qBuKw;
        }
        goto cjcru;
        VFPnA:
        $query = $this->db->select("\151\x64")->where($this->identity_column, $identity)->limit(1)->get($this->tables["\165\163\145\162\163"]);
        goto Ya2P8;
        CuoaC:
    }
    public function forgotten_password($identity)
    {
        goto kqoVp;
        sFbNU:
        $token = $this->_generate_selector_validator_couple(20, 80);
        goto lRqgf;
        tHo5V:
        return FALSE;
        goto A6Umo;
        w3vHh:
        $this->db->update($this->tables["\165\x73\145\162\x73"], $update, [$this->identity_column => $identity]);
        goto ZBd4b;
        fIwRN:
        $this->trigger_events(["\x70\157\x73\164\137\146\157\162\147\157\164\x74\145\156\x5f\160\141\x73\x73\167\157\162\x64", "\160\157\163\x74\x5f\146\x6f\x72\147\x6f\164\x74\145\x6e\137\x70\141\163\163\x77\x6f\162\144\x5f\x73\x75\x63\x63\x65\163\x73\x66\x75\154"]);
        goto iA5x6;
        lRqgf:
        $update = ["\146\x6f\x72\147\157\x74\x74\x65\156\x5f\x70\x61\x73\163\x77\x6f\x72\144\137\163\x65\x6c\x65\143\164\x6f\x72" => $token->selector, "\146\x6f\162\147\157\x74\x74\x65\x6e\137\x70\141\163\x73\167\157\x72\x64\137\143\157\x64\x65" => $token->validator_hashed, "\x66\157\x72\147\x6f\x74\164\x65\156\x5f\x70\x61\x73\163\167\x6f\162\x64\x5f\164\x69\x6d\x65" => time()];
        goto dkdVh;
        ZBd4b:
        if ($this->db->affected_rows() === 1) {
            goto kwLK8;
        }
        goto Qe93e;
        IkHvv:
        YO3u3:
        goto q3GUR;
        rV6Cm:
        UvAuO:
        goto sFbNU;
        Qe93e:
        $this->trigger_events(["\x70\157\x73\x74\137\146\x6f\162\147\x6f\164\x74\x65\x6e\x5f\160\141\x73\163\167\157\x72\x64", "\160\157\x73\x74\137\146\157\x72\147\x6f\x74\164\x65\156\137\160\141\163\163\x77\157\x72\x64\137\165\x6e\x73\x75\143\x63\x65\163\163\x66\165\154"]);
        goto tHo5V;
        A6Umo:
        goto YO3u3;
        goto ayw0E;
        kqoVp:
        if (!empty($identity)) {
            goto UvAuO;
        }
        goto aHu1U;
        ayw0E:
        kwLK8:
        goto fIwRN;
        aHu1U:
        $this->trigger_events(["\x70\157\x73\164\x5f\x66\157\x72\x67\157\x74\164\x65\156\x5f\160\x61\163\163\167\157\162\x64", "\x70\x6f\x73\164\x5f\x66\157\162\147\157\164\164\x65\x6e\x5f\x70\141\x73\x73\x77\x6f\162\144\x5f\x75\156\x73\165\x63\x63\x65\163\x73\x66\x75\x6c"]);
        goto Y8Ag3;
        dkdVh:
        $this->trigger_events("\x65\170\x74\162\x61\137\167\150\145\162\145");
        goto w3vHh;
        iA5x6:
        return $token->user_code;
        goto IkHvv;
        Y8Ag3:
        return FALSE;
        goto rV6Cm;
        q3GUR:
    }
    public function get_user_by_forgotten_password_code($user_code)
    {
        goto mjb02;
        c8izX:
        $user = $this->where("\x66\157\x72\147\157\x74\x74\x65\156\x5f\x70\141\163\163\167\x6f\x72\144\x5f\163\145\154\x65\143\x74\x6f\x72", $token->selector)->users()->row();
        goto t8n0x;
        fANBW:
        if (!$this->verify_password($token->validator, $user->forgotten_password_code)) {
            goto lS4sl;
        }
        goto bsB_y;
        PoFWT:
        return FALSE;
        goto WGA2l;
        mjb02:
        $token = $this->_retrieve_selector_validator_couple($user_code);
        goto c8izX;
        ihu6p:
        fOrxc:
        goto PoFWT;
        Wi6qp:
        lS4sl:
        goto ihu6p;
        bsB_y:
        return $user;
        goto Wi6qp;
        t8n0x:
        if (!$user) {
            goto fOrxc;
        }
        goto fANBW;
        WGA2l:
    }
    public function register($identity, $password, $email, $additional_data = array(), $groups = array())
    {
        goto rzB1h;
        MPiae:
        rNuvK:
        goto I7iI8;
        SB39p:
        return FALSE;
        goto EMzeX;
        wgVmW:
        foreach ($groups as $group) {
            $this->add_to_group($group, $id);
            NtHFN:
        }
        goto O3tFp;
        e4R_N:
        $this->set_error("\x61\143\x63\x6f\x75\156\164\x5f\143\162\x65\x61\x74\x69\x6f\156\137\151\156\x76\x61\154\151\144\x5f\144\x65\x66\141\x75\154\164\x5f\147\162\x6f\x75\160");
        goto s7wLk;
        lrxqd:
        $this->trigger_events("\160\157\163\164\x5f\162\145\x67\151\163\164\x65\x72");
        goto c_MXW;
        jjm0m:
        $manual_activation = $this->config->item("\x6d\x61\156\x75\141\154\x5f\x61\x63\x74\x69\166\x61\164\x69\157\x6e", "\x69\x6f\x6e\x5f\x61\165\164\150");
        goto uXNhS;
        g5Ojm:
        return FALSE;
        goto eiU_K;
        baFOY:
        goto GMkQU;
        goto MPiae;
        nxSXE:
        $password = $this->hash_password($password);
        goto Zghc2;
        S7J_q:
        $id = $this->db->insert_id($this->tables["\x75\x73\145\x72\163"] . "\x5f\151\x64\x5f\x73\x65\x71");
        goto hFvr9;
        Lnj6r:
        $this->trigger_events("\145\x78\x74\162\141\137\163\145\164");
        goto rzd0H;
        NcELF:
        if (!(!isset($query->id) && empty($groups))) {
            goto pwi9H;
        }
        goto e4R_N;
        uXNhS:
        if ($this->identity_check($identity)) {
            goto rNuvK;
        }
        goto KdBFA;
        Tm35m:
        pwi9H:
        goto mh45q;
        uorqZ:
        GMkQU:
        goto L3mwu;
        O3tFp:
        j51Vn:
        goto OCaKV;
        rzd0H:
        $this->db->insert($this->tables["\165\x73\145\162\163"], $user_data);
        goto S7J_q;
        s7wLk:
        return FALSE;
        goto Tm35m;
        akuuG:
        $data = [$this->identity_column => $identity, "\x75\163\x65\x72\x6e\x61\x6d\x65" => $identity, "\160\141\163\163\167\157\x72\144" => $password, "\x65\x6d\141\x69\154" => $email, "\x69\x70\137\141\144\144\x72\x65\x73\x73" => $ip_address, "\x63\162\x65\141\164\145\144\137\x6f\156" => time(), "\x61\x63\x74\x69\x76\x65" => $manual_activation === FALSE ? 1 : 0];
        goto HLFcV;
        XIDgY:
        $groups[] = $default_group->id;
        goto GuWLo;
        c_MXW:
        return isset($id) ? $id : FALSE;
        goto PU3U7;
        eiU_K:
        IwVDg:
        goto akuuG;
        OCaKV:
        ua_kp:
        goto lrxqd;
        Zghc2:
        if (!($password === FALSE)) {
            goto IwVDg;
        }
        goto yjeFq;
        S6D9Y:
        $ip_address = $this->input->ip_address();
        goto nxSXE;
        hFvr9:
        if (!(isset($default_group->id) && empty($groups))) {
            goto EXaDq;
        }
        goto XIDgY;
        HLFcV:
        $user_data = array_merge($this->_filter_data($this->tables["\165\163\145\162\x73"], $additional_data), $data);
        goto Lnj6r;
        yjeFq:
        $this->set_error("\x61\143\x63\157\x75\156\164\137\x63\x72\145\x61\x74\x69\x6f\x6e\x5f\165\156\163\165\143\143\145\163\x73\146\x75\x6c");
        goto g5Ojm;
        aU1lB:
        return FALSE;
        goto uorqZ;
        I7iI8:
        $this->set_error("\x61\143\143\157\x75\x6e\x74\x5f\x63\162\x65\141\164\x69\157\x6e\x5f\144\165\160\154\x69\x63\x61\164\x65\137\x69\x64\145\156\164\151\164\171");
        goto aU1lB;
        rzB1h:
        $this->trigger_events("\x70\x72\x65\137\162\145\147\151\163\164\145\162");
        goto jjm0m;
        EMzeX:
        eS5Eh:
        goto baFOY;
        L3mwu:
        $query = $this->db->get_where($this->tables["\147\162\x6f\x75\x70\163"], ["\x6e\x61\155\145" => $this->config->item("\144\145\146\x61\x75\x6c\164\x5f\147\162\x6f\x75\x70", "\151\x6f\156\x5f\x61\165\x74\x68")], 1)->row();
        goto NcELF;
        mh45q:
        $default_group = $query;
        goto S6D9Y;
        GuWLo:
        EXaDq:
        goto ZOb6Q;
        GbdF8:
        $this->set_error("\141\x63\x63\x6f\165\156\164\137\x63\x72\x65\141\x74\x69\x6f\156\137\x6d\x69\x73\x73\151\x6e\147\137\x64\145\146\141\165\x6c\164\137\x67\162\157\x75\160");
        goto SB39p;
        ZOb6Q:
        if (empty($groups)) {
            goto ua_kp;
        }
        goto wgVmW;
        KdBFA:
        if (!(!$this->config->item("\144\145\x66\141\165\154\164\x5f\147\162\157\165\160", "\151\157\156\x5f\x61\165\x74\x68") && empty($groups))) {
            goto eS5Eh;
        }
        goto GbdF8;
        PU3U7:
    }
    public function login($identity, $password, $remember = FALSE)
    {
        goto PUsqO;
        HkocA:
        if (!$this->verify_password($password, $user->password, $identity)) {
            goto HMy0_;
        }
        goto Kgu8w;
        XwgMN:
        NMfgm:
        goto iSjjG;
        z5WuW:
        $this->set_message("\x6c\157\147\x69\156\x5f\163\165\143\143\145\163\163\x66\x75\x6c");
        goto Fcmqa;
        w64Bu:
        if (!(empty($identity) || empty($password))) {
            goto NMfgm;
        }
        goto T_Xwc;
        mL0PV:
        if (!$this->is_max_login_attempts_exceeded($identity)) {
            goto gDMC4;
        }
        goto VIPGf;
        Gw5ma:
        $this->trigger_events("\160\x6f\163\x74\137\x6c\157\x67\151\x6e\137\x75\156\x73\165\x63\143\145\163\163\x66\x75\x6c");
        goto E4YbJ;
        DHiJd:
        return FALSE;
        goto OMEfG;
        swYO8:
        f2lGX:
        goto UaSFY;
        U6Y4w:
        return FALSE;
        goto swYO8;
        nGkiu:
        $this->clear_remember_code($identity);
        goto wknQO;
        JkwV7:
        $this->increase_login_attempts($identity);
        goto Gw5ma;
        aDjdH:
        $query = $this->db->select($this->identity_column . "\54\40\145\155\141\151\x6c\x2c\40\x69\144\54\40\160\x61\163\163\167\157\x72\x64\54\x20\141\143\x74\151\x76\145\x2c\x20\154\x61\x73\164\137\154\x6f\x67\x69\156")->where($this->identity_column, $identity)->limit(1)->order_by("\x69\x64", "\x64\x65\x73\x63")->get($this->tables["\x75\163\x65\x72\163"]);
        goto mL0PV;
        T_Xwc:
        $this->set_error("\154\157\x67\151\x6e\137\165\x6e\163\x75\143\143\x65\163\x73\146\165\154");
        goto WM5zS;
        RmpGA:
        HCfWh:
        goto Mt_eI;
        puZFu:
        $this->session->sess_regenerate(FALSE);
        goto lxpSP;
        UaSFY:
        $this->set_session($user);
        goto dpeGr;
        WM5zS:
        return FALSE;
        goto XwgMN;
        QaN4U:
        $this->clear_login_attempts($identity);
        goto L_xdS;
        Fxk0j:
        $this->set_error("\x6c\157\x67\x69\x6e\x5f\x74\x69\x6d\145\157\165\x74");
        goto DHiJd;
        Km9DO:
        $this->rehash_password_if_needed($user->password, $identity, $password);
        goto puZFu;
        E4YbJ:
        $this->set_error("\154\157\147\x69\x6e\x5f\165\156\x73\165\x63\x63\x65\163\x73\146\x75\x6c");
        goto XM_If;
        wknQO:
        goto Wfm3r;
        goto NJpM4;
        Ztxhl:
        $this->remember_user($identity);
        goto SB4bX;
        NJpM4:
        G_LT2:
        goto Ztxhl;
        PUsqO:
        $this->trigger_events("\160\162\145\x5f\154\157\x67\x69\156");
        goto w64Bu;
        fp07w:
        $this->trigger_events("\160\x6f\x73\x74\137\x6c\x6f\147\x69\156\137\165\x6e\x73\x75\143\143\145\163\x73\x66\165\154");
        goto Fxk0j;
        dpeGr:
        $this->update_last_login($user->id);
        goto QaN4U;
        SB4bX:
        Wfm3r:
        goto wuzjz;
        K_9JR:
        if ($remember) {
            goto G_LT2;
        }
        goto nGkiu;
        L_xdS:
        $this->clear_forgotten_password_code($identity);
        goto UyOJB;
        Fcmqa:
        return TRUE;
        goto MKi3X;
        iSjjG:
        $this->trigger_events("\x65\170\x74\162\x61\137\x77\150\x65\x72\x65");
        goto aDjdH;
        Mt_eI:
        $this->hash_password($password);
        goto JkwV7;
        VIPGf:
        $this->hash_password($password);
        goto fp07w;
        wuzjz:
        e58oA:
        goto Km9DO;
        m9Y0B:
        $this->trigger_events("\160\157\x73\164\x5f\154\157\147\x69\x6e\x5f\x75\x6e\x73\x75\x63\x63\145\x73\x73\x66\165\154");
        goto toS6e;
        UxUFi:
        if (!($query->num_rows() === 1)) {
            goto HCfWh;
        }
        goto v7qOl;
        lxpSP:
        $this->trigger_events(["\160\157\163\164\137\x6c\x6f\147\151\x6e", "\x70\x6f\163\x74\137\154\x6f\x67\x69\x6e\137\x73\x75\143\x63\x65\163\163\146\165\154"]);
        goto z5WuW;
        Kgu8w:
        if (!($user->active == 0)) {
            goto f2lGX;
        }
        goto m9Y0B;
        OMEfG:
        gDMC4:
        goto UxUFi;
        toS6e:
        $this->set_error("\154\x6f\147\x69\x6e\x5f\165\x6e\x73\x75\143\143\x65\163\163\x66\x75\x6c\137\x6e\157\x74\x5f\x61\143\x74\151\x76\145");
        goto U6Y4w;
        v7qOl:
        $user = $query->row();
        goto HkocA;
        MKi3X:
        HMy0_:
        goto RmpGA;
        XM_If:
        return FALSE;
        goto Lv67l;
        UyOJB:
        if (!$this->config->item("\162\145\155\x65\x6d\142\145\x72\x5f\x75\163\145\x72\x73", "\151\x6f\x6e\137\x61\165\x74\150")) {
            goto e58oA;
        }
        goto K_9JR;
        Lv67l:
    }
    public function recheck_session()
    {
        goto s0Uek;
        s0Uek:
        $recheck = NULL !== $this->config->item("\x72\145\143\x68\145\x63\x6b\137\164\x69\155\145\162", "\x69\x6f\156\x5f\141\165\x74\x68") ? $this->config->item("\162\x65\x63\x68\x65\143\153\137\x74\x69\155\145\162", "\x69\157\156\x5f\x61\x75\x74\150") : 0;
        goto zQHZb;
        qX12T:
        $this->trigger_events("\x6c\x6f\x67\x6f\165\164");
        goto r1lM5;
        t1Q2K:
        $query = $this->db->select("\x69\144")->where([$this->identity_column => $this->session->userdata("\151\144\145\x6e\164\151\164\x79"), "\141\x63\x74\x69\166\145" => "\61"])->limit(1)->order_by("\151\144", "\x64\145\163\143")->get($this->tables["\165\163\145\162\163"]);
        goto kMv6J;
        kMv6J:
        if ($query->num_rows() === 1) {
            goto oMJnO;
        }
        goto qX12T;
        B2O23:
        aH5qF:
        goto ws2dF;
        JTeNK:
        if (!($last_login + $recheck < time())) {
            goto LoGA0;
        }
        goto t1Q2K;
        R21ud:
        $last_login = $this->session->userdata("\x6c\x61\x73\x74\x5f\143\150\x65\143\153");
        goto JTeNK;
        ws2dF:
        LoGA0:
        goto auECS;
        IYGbm:
        oMJnO:
        goto bwje4;
        auECS:
        na9VR:
        goto TLcso;
        TLcso:
        return (bool) $this->session->userdata("\151\144\x65\x6e\x74\x69\164\171");
        goto V80hO;
        hOuh4:
        $this->session->unset_userdata([$identity, "\151\x64", "\x75\x73\145\162\x5f\151\144"]);
        goto RZyHu;
        bwje4:
        $this->session->set_userdata("\154\x61\163\164\x5f\x63\x68\x65\x63\x6b", time());
        goto B2O23;
        zQHZb:
        if (!($recheck !== 0)) {
            goto na9VR;
        }
        goto R21ud;
        r1lM5:
        $identity = $this->config->item("\151\144\x65\x6e\164\x69\164\171", "\151\157\x6e\137\141\165\164\x68");
        goto hOuh4;
        RZyHu:
        return FALSE;
        goto gtfsU;
        gtfsU:
        goto aH5qF;
        goto IYGbm;
        V80hO:
    }
    public function is_max_login_attempts_exceeded($identity, $ip_address = NULL)
    {
        goto YKJK2;
        YKJK2:
        if (!$this->config->item("\164\x72\141\x63\153\x5f\154\157\147\x69\156\x5f\141\x74\164\x65\155\160\x74\x73", "\x69\x6f\156\x5f\x61\165\164\150")) {
            goto f1ZUX;
        }
        goto NjYRd;
        aii33:
        if (!($max_attempts > 0)) {
            goto Xdj4A;
        }
        goto V1vci;
        yUcLX:
        Xdj4A:
        goto Ob0NV;
        V1vci:
        $attempts = $this->get_attempts_num($identity, $ip_address);
        goto yzceY;
        NjYRd:
        $max_attempts = $this->config->item("\x6d\x61\170\151\x6d\165\155\137\154\157\147\x69\x6e\x5f\141\x74\x74\145\155\x70\164\x73", "\x69\157\x6e\137\x61\x75\x74\x68");
        goto aii33;
        yzceY:
        return $attempts >= $max_attempts;
        goto yUcLX;
        eJxJH:
        return FALSE;
        goto fe1r7;
        Ob0NV:
        f1ZUX:
        goto eJxJH;
        fe1r7:
    }
    public function get_attempts_num($identity, $ip_address = NULL)
    {
        goto gZ0HH;
        gZ0HH:
        if (!$this->config->item("\x74\x72\141\x63\x6b\x5f\154\x6f\147\151\156\x5f\x61\x74\164\x65\155\x70\164\163", "\x69\157\156\x5f\x61\165\164\150")) {
            goto CQNQi;
        }
        goto v5HTU;
        ZudQc:
        $this->db->where("\151\160\137\x61\144\144\x72\145\163\163", $ip_address);
        goto gVQbp;
        mjxfr:
        gJp3S:
        goto ZudQc;
        wPJ6V:
        return $qres->num_rows();
        goto NCjJn;
        NCjJn:
        CQNQi:
        goto ISrGv;
        v5HTU:
        $this->db->select("\x31", FALSE);
        goto GrMEI;
        ijR72:
        if (!$this->config->item("\x74\x72\x61\143\153\137\154\x6f\147\151\156\137\x69\x70\137\x61\x64\x64\162\145\163\163", "\x69\157\x6e\x5f\141\165\x74\x68")) {
            goto hisVL;
        }
        goto rk2n_;
        ucQYc:
        $this->db->where("\x74\x69\x6d\x65\x20\76", time() - $this->config->item("\x6c\x6f\x63\153\157\165\164\137\x74\151\155\145", "\151\157\156\137\x61\165\164\150"), FALSE);
        goto RDY_p;
        rk2n_:
        if (isset($ip_address)) {
            goto gJp3S;
        }
        goto fDs6R;
        RDY_p:
        $qres = $this->db->get($this->tables["\x6c\157\147\151\x6e\x5f\x61\x74\164\x65\155\x70\x74\x73"]);
        goto wPJ6V;
        ISrGv:
        return 0;
        goto QHxVJ;
        gVQbp:
        hisVL:
        goto ucQYc;
        fDs6R:
        $ip_address = $this->input->ip_address();
        goto mjxfr;
        GrMEI:
        $this->db->where("\x6c\157\147\151\x6e", $identity);
        goto ijR72;
        QHxVJ:
    }
    public function get_last_attempt_time($identity, $ip_address = NULL)
    {
        goto y03U4;
        MvtxK:
        $qres = $this->db->get($this->tables["\x6c\x6f\x67\151\x6e\x5f\141\164\x74\x65\155\160\x74\x73"], 1);
        goto pXYSa;
        pXYSa:
        if (!($qres->num_rows() > 0)) {
            goto TIQWJ;
        }
        goto qAyFb;
        BjEtB:
        TIQWJ:
        goto hp2SQ;
        Dvrek:
        $this->db->where("\x6c\157\147\151\156", $identity);
        goto gHGSW;
        PpWpf:
        $this->db->select("\x74\x69\155\145");
        goto Dvrek;
        hFqk_:
        return 0;
        goto n5__6;
        bu4yz:
        $ip_address = $this->input->ip_address();
        goto ZYnYr;
        xhz6z:
        $this->db->where("\151\160\137\141\x64\144\x72\145\x73\x73", $ip_address);
        goto w8Xkp;
        gHGSW:
        if (!$this->config->item("\164\x72\x61\x63\x6b\137\154\x6f\147\x69\156\x5f\151\160\x5f\141\144\x64\x72\x65\163\163", "\151\x6f\156\x5f\141\x75\164\150")) {
            goto QCGon;
        }
        goto d0FT0;
        d0FT0:
        if (isset($ip_address)) {
            goto ytn3d;
        }
        goto bu4yz;
        y03U4:
        if (!$this->config->item("\x74\x72\141\143\x6b\137\154\x6f\x67\151\x6e\137\x61\164\164\145\x6d\x70\164\163", "\x69\x6f\156\x5f\141\165\164\x68")) {
            goto Z_RGv;
        }
        goto PpWpf;
        hp2SQ:
        Z_RGv:
        goto hFqk_;
        w8Xkp:
        QCGon:
        goto AZrTZ;
        ZYnYr:
        ytn3d:
        goto xhz6z;
        AZrTZ:
        $this->db->order_by("\151\x64", "\x64\145\x73\x63");
        goto MvtxK;
        qAyFb:
        return $qres->row()->time;
        goto BjEtB;
        n5__6:
    }
    public function get_last_attempt_ip($identity)
    {
        goto OL45V;
        sii1x:
        $this->db->where("\154\157\x67\x69\156", $identity);
        goto IhoE0;
        OL45V:
        if (!($this->config->item("\164\162\x61\143\153\x5f\x6c\x6f\147\151\156\137\x61\164\164\x65\155\160\x74\163", "\151\157\x6e\137\141\165\164\x68") && $this->config->item("\x74\162\141\143\153\x5f\154\157\147\151\156\137\x69\x70\x5f\141\144\144\x72\145\163\163", "\151\157\x6e\137\x61\165\164\x68"))) {
            goto lJXbW;
        }
        goto n5tsH;
        QIlPh:
        if (!($qres->num_rows() > 0)) {
            goto GTiAk;
        }
        goto XTIcG;
        FBAae:
        lJXbW:
        goto hRjfs;
        n5tsH:
        $this->db->select("\x69\x70\137\141\x64\x64\162\145\x73\163");
        goto sii1x;
        Saj0J:
        GTiAk:
        goto FBAae;
        IhoE0:
        $this->db->order_by("\151\x64", "\x64\145\x73\143");
        goto EoPym;
        hRjfs:
        return '';
        goto bI66C;
        XTIcG:
        return $qres->row()->ip_address;
        goto Saj0J;
        EoPym:
        $qres = $this->db->get($this->tables["\x6c\157\147\x69\x6e\x5f\x61\x74\164\x65\155\160\164\163"], 1);
        goto QIlPh;
        bI66C:
    }
    public function increase_login_attempts($identity)
    {
        goto x3a3p;
        WTG4g:
        return FALSE;
        goto wLLp1;
        x3a3p:
        if (!$this->config->item("\x74\162\x61\x63\x6b\x5f\154\x6f\147\x69\156\x5f\x61\x74\x74\145\x6d\160\x74\163", "\x69\157\156\137\141\165\x74\150")) {
            goto rVEfJ;
        }
        goto Ws163;
        L0MJD:
        if (!$this->config->item("\x74\x72\x61\143\x6b\x5f\x6c\x6f\147\x69\156\137\x69\x70\137\141\144\144\162\x65\x73\163", "\151\157\x6e\137\141\165\164\x68")) {
            goto hxW0e;
        }
        goto YRkjw;
        TPoG4:
        rVEfJ:
        goto WTG4g;
        Ws163:
        $data = ["\x69\160\x5f\141\144\x64\x72\x65\x73\x73" => '', "\x6c\157\x67\151\x6e" => $identity, "\164\151\155\x65" => time()];
        goto L0MJD;
        g0p71:
        return $this->db->insert($this->tables["\x6c\157\x67\x69\x6e\137\141\x74\x74\x65\155\x70\164\163"], $data);
        goto TPoG4;
        YRkjw:
        $data["\x69\x70\137\141\144\x64\x72\145\163\163"] = $this->input->ip_address();
        goto eHse9;
        eHse9:
        hxW0e:
        goto g0p71;
        wLLp1:
    }
    public function clear_login_attempts($identity, $old_attempts_expire_period = 86400, $ip_address = NULL)
    {
        goto aS0PZ;
        zaTEj:
        if (!$this->config->item("\164\x72\141\x63\x6b\x5f\154\x6f\147\151\156\137\151\x70\137\x61\x64\144\x72\x65\163\163", "\151\x6f\x6e\x5f\x61\x75\x74\x68")) {
            goto PYLJt;
        }
        goto BBDML;
        BBDML:
        if (isset($ip_address)) {
            goto tSFan;
        }
        goto K_wxy;
        Jxo44:
        PYLJt:
        goto gaLBf;
        qoIjH:
        $old_attempts_expire_period = max($old_attempts_expire_period, $this->config->item("\x6c\x6f\x63\x6b\157\x75\164\137\164\x69\x6d\145", "\x69\157\156\x5f\x61\165\x74\x68"));
        goto NzDvH;
        K_wxy:
        $ip_address = $this->input->ip_address();
        goto fIVNd;
        NzDvH:
        $this->db->where("\x6c\x6f\147\x69\x6e", $identity);
        goto zaTEj;
        D3mnz:
        return $this->db->delete($this->tables["\154\x6f\x67\x69\156\x5f\141\x74\x74\145\x6d\x70\164\163"]);
        goto oORkr;
        y2oHC:
        $this->db->where("\x69\x70\137\x61\x64\x64\x72\145\x73\163", $ip_address);
        goto Jxo44;
        oORkr:
        N8LGb:
        goto qYXG6;
        fIVNd:
        tSFan:
        goto y2oHC;
        aS0PZ:
        if (!$this->config->item("\x74\162\141\x63\153\x5f\154\157\147\151\156\x5f\141\x74\164\145\x6d\x70\x74\x73", "\x69\157\x6e\137\141\165\x74\x68")) {
            goto N8LGb;
        }
        goto qoIjH;
        qYXG6:
        return FALSE;
        goto ZHwmv;
        gaLBf:
        $this->db->or_where("\164\151\x6d\x65\40\74", time() - $old_attempts_expire_period, FALSE);
        goto D3mnz;
        ZHwmv:
    }
    public function limit($limit)
    {
        goto sUg7I;
        sUg7I:
        $this->trigger_events("\x6c\151\155\x69\x74");
        goto qcPXr;
        qcPXr:
        $this->_ion_limit = $limit;
        goto co33g;
        co33g:
        return $this;
        goto S6ayt;
        S6ayt:
    }
    public function offset($offset)
    {
        goto VT2WW;
        VT2WW:
        $this->trigger_events("\x6f\146\146\x73\145\x74");
        goto U6Kdk;
        U6Kdk:
        $this->_ion_offset = $offset;
        goto KtmMA;
        KtmMA:
        return $this;
        goto WPdL1;
        WPdL1:
    }
    public function where($where, $value = NULL)
    {
        goto Lzm78;
        hgkKA:
        if (is_array($where)) {
            goto ATGJq;
        }
        goto JGZ8y;
        MX4_A:
        return $this;
        goto gZalp;
        JGZ8y:
        $where = [$where => $value];
        goto dRhDQ;
        dRhDQ:
        ATGJq:
        goto h2Ff1;
        h2Ff1:
        array_push($this->_ion_where, $where);
        goto MX4_A;
        Lzm78:
        $this->trigger_events("\167\150\145\x72\x65");
        goto hgkKA;
        gZalp:
    }
    public function like($like, $value = NULL, $position = "\142\x6f\164\x68")
    {
        goto iEOX3;
        iEOX3:
        $this->trigger_events("\x6c\x69\153\x65");
        goto z5Na3;
        z5Na3:
        array_push($this->_ion_like, ["\x6c\151\153\x65" => $like, "\x76\141\x6c\x75\145" => $value, "\x70\157\163\x69\x74\151\x6f\156" => $position]);
        goto kLdxa;
        kLdxa:
        return $this;
        goto ge7fB;
        ge7fB:
    }
    public function select($select)
    {
        goto UtKP3;
        P7mKc:
        $this->_ion_select[] = $select;
        goto rf2FA;
        rf2FA:
        return $this;
        goto OkJHd;
        UtKP3:
        $this->trigger_events("\163\145\154\x65\x63\164");
        goto P7mKc;
        OkJHd:
    }
    public function order_by($by, $order = "\x64\x65\163\143")
    {
        goto DtFkC;
        pwIvY:
        return $this;
        goto wAg_U;
        DtFkC:
        $this->trigger_events("\157\162\144\145\x72\x5f\x62\x79");
        goto YlTY1;
        YlTY1:
        $this->_ion_order_by = $by;
        goto wtKTa;
        wtKTa:
        $this->_ion_order = $order;
        goto pwIvY;
        wAg_U:
    }
    public function row()
    {
        goto MCxUe;
        sYXAT:
        return $row;
        goto j9gni;
        MCxUe:
        $this->trigger_events("\162\x6f\167");
        goto Mzgoq;
        Mzgoq:
        $row = $this->response->row();
        goto sYXAT;
        j9gni:
    }
    public function row_array()
    {
        goto twX1k;
        UzxfD:
        return $row;
        goto YmLEu;
        codRR:
        $row = $this->response->row_array();
        goto UzxfD;
        twX1k:
        $this->trigger_events(["\162\157\167", "\x72\x6f\167\137\141\x72\162\141\x79"]);
        goto codRR;
        YmLEu:
    }
    public function result()
    {
        goto K6J2I;
        DtXQq:
        $result = $this->response->result();
        goto hRcjV;
        K6J2I:
        $this->trigger_events("\162\145\163\x75\154\x74");
        goto DtXQq;
        hRcjV:
        return $result;
        goto OO22a;
        OO22a:
    }
    public function result_array()
    {
        goto t0g0W;
        t0g0W:
        $this->trigger_events(["\x72\145\x73\x75\154\164", "\x72\145\163\165\x6c\164\137\x61\162\x72\x61\171"]);
        goto g72uJ;
        jGIKw:
        return $result;
        goto ehgct;
        g72uJ:
        $result = $this->response->result_array();
        goto jGIKw;
        ehgct:
    }
    public function num_rows()
    {
        goto Dhhq5;
        jG0qK:
        return $result;
        goto Kmf3V;
        bNnEP:
        $result = $this->response->num_rows();
        goto jG0qK;
        Dhhq5:
        $this->trigger_events(["\x6e\x75\155\x5f\162\157\x77\163"]);
        goto bNnEP;
        Kmf3V:
    }
    public function users($groups = NULL)
    {
        goto yJ4ih;
        QrMH5:
        v0rdX:
        goto owbkl;
        IyRQf:
        $this->_ion_select = [];
        goto Kdw38;
        FVxKU:
        $this->trigger_events("\145\170\164\162\x61\137\x77\x68\145\x72\145");
        goto USx2m;
        twi1y:
        if (!isset($groups)) {
            goto nhAfz;
        }
        goto gR40M;
        wv_Rk:
        nhAfz:
        goto FVxKU;
        moyiE:
        if (!isset($this->_ion_limit)) {
            goto JMu4g;
        }
        goto hxKTB;
        BGFfT:
        mecTX:
        goto TU5Br;
        u1zvE:
        goto hQLZQ;
        goto vXZjF;
        gft2g:
        $this->response = $this->db->get($this->tables["\x75\x73\145\x72\x73"]);
        goto UaPKW;
        y0ZDq:
        Ib56X:
        goto u5wqi;
        n3XjM:
        if (empty($group_names)) {
            goto RLSjh;
        }
        goto AzS3A;
        bCeyH:
        $this->_ion_order = NULL;
        goto doQGG;
        rqeD2:
        $this->db->order_by($this->_ion_order_by, $this->_ion_order);
        goto bCeyH;
        W2QGi:
        if (!(isset($groups) && !empty($groups))) {
            goto oHI60;
        }
        goto r40T7;
        TU5Br:
        if (isset($this->_ion_limit) && isset($this->_ion_offset)) {
            goto a9tUK;
        }
        goto moyiE;
        USx2m:
        if (!(isset($this->_ion_where) && !empty($this->_ion_where))) {
            goto qVhdc;
        }
        goto IBa5D;
        fUBbj:
        oHI60:
        goto L9CW7;
        aVXt9:
        $this->db->{$or_where_in}($this->tables["\165\x73\x65\162\163\137\x67\162\x6f\165\x70\x73"] . "\56" . $this->join["\x67\x72\x6f\x75\160\x73"], $group_ids);
        goto hCS1_;
        UaPKW:
        return $this;
        goto gDQYH;
        tBZs2:
        a9tUK:
        goto htkGi;
        htkGi:
        $this->db->limit($this->_ion_limit, $this->_ion_offset);
        goto FHbFH;
        MN52w:
        LO5O1:
        goto DF1Uu;
        Kdw38:
        hQLZQ:
        goto twi1y;
        V_Mq_:
        $this->db->join($this->tables["\165\x73\x65\x72\163\137\147\162\157\165\x70\163"], $this->tables["\x75\x73\x65\x72\163\137\147\162\x6f\x75\x70\163"] . "\56" . $this->join["\x75\x73\145\162\163"] . "\75" . $this->tables["\165\163\x65\x72\163"] . "\56\x69\x64", "\151\x6e\x6e\145\162");
        goto fUBbj;
        S2Ozx:
        wbxUd:
        goto IyRQf;
        doQGG:
        $this->_ion_order_by = NULL;
        goto LFH33;
        DF1Uu:
        $this->_ion_where = [];
        goto tHsHv;
        Dp85p:
        foreach ($this->_ion_select as $select) {
            $this->db->select($select);
            y2Fvk:
        }
        goto S2Ozx;
        L9CW7:
        $group_ids = [];
        goto WagIx;
        KCoPt:
        if (!(isset($this->_ion_order_by) && isset($this->_ion_order))) {
            goto P5c8c;
        }
        goto rqeD2;
        FrZyF:
        if (empty($group_ids)) {
            goto K6U2p;
        }
        goto aVXt9;
        vXZjF:
        C8U11:
        goto Dp85p;
        XXvoL:
        goto JbQme;
        goto tBZs2;
        FHbFH:
        $this->_ion_limit = NULL;
        goto mEAzi;
        hCS1_:
        K6U2p:
        goto wv_Rk;
        mEAzi:
        $this->_ion_offset = NULL;
        goto Jmdfx;
        LFH33:
        P5c8c:
        goto gft2g;
        hxKTB:
        $this->db->limit($this->_ion_limit);
        goto stOFq;
        uIxVI:
        rX7m4:
        goto W2QGi;
        gR40M:
        if (is_array($groups)) {
            goto rX7m4;
        }
        goto OU1fU;
        OU1fU:
        $groups = [$groups];
        goto uIxVI;
        LKpjE:
        RLSjh:
        goto FrZyF;
        u5wqi:
        $this->_ion_like = [];
        goto BGFfT;
        UiAnC:
        if (isset($this->_ion_select) && !empty($this->_ion_select)) {
            goto C8U11;
        }
        goto s5Y4u;
        v8jIW:
        JMu4g:
        goto XXvoL;
        AzS3A:
        $this->db->join($this->tables["\x67\x72\157\165\x70\163"], $this->tables["\x75\163\145\x72\163\x5f\x67\162\157\x75\x70\x73"] . "\56" . $this->join["\x67\x72\x6f\165\160\x73"] . "\40\x3d\40" . $this->tables["\147\x72\x6f\165\160\163"] . "\x2e\151\x64", "\x69\156\156\x65\162");
        goto dIkoY;
        stOFq:
        $this->_ion_limit = NULL;
        goto v8jIW;
        b3k4X:
        if (!(isset($this->_ion_like) && !empty($this->_ion_like))) {
            goto mecTX;
        }
        goto SWsNi;
        owbkl:
        $or_where_in = !empty($group_ids) && !empty($group_names) ? "\x6f\x72\137\x77\x68\145\x72\x65\x5f\151\x6e" : "\x77\x68\x65\x72\145\x5f\151\156";
        goto n3XjM;
        r40T7:
        $this->db->distinct();
        goto V_Mq_;
        dIkoY:
        $this->db->where_in($this->tables["\147\x72\x6f\x75\x70\x73"] . "\56\x6e\x61\155\x65", $group_names);
        goto LKpjE;
        yJ4ih:
        $this->trigger_events("\x75\163\x65\162\x73");
        goto UiAnC;
        WagIx:
        $group_names = [];
        goto YMiLo;
        IBa5D:
        foreach ($this->_ion_where as $where) {
            $this->db->where($where);
            j6f5k:
        }
        goto MN52w;
        s5Y4u:
        $this->db->select([$this->tables["\165\163\x65\162\163"] . "\56\x2a", $this->tables["\x75\163\145\162\163"] . "\56\x69\144\40\x61\163\40\151\x64", $this->tables["\x75\163\145\162\163"] . "\x2e\151\x64\40\x61\x73\40\x75\163\145\162\x5f\x69\x64"]);
        goto u1zvE;
        YMiLo:
        foreach ($groups as $group) {
            goto YyiF1;
            YyiF1:
            if (is_numeric($group)) {
                goto gMO1s;
            }
            goto AYPcE;
            OTwyE:
            gMO1s:
            goto B4o1z;
            KMpRd:
            goto Lq3hQ;
            goto OTwyE;
            B4o1z:
            $group_ids[] = $group;
            goto t18Y5;
            N13lO:
            D_9FQ:
            goto rur3U;
            AYPcE:
            $group_names[] = $group;
            goto KMpRd;
            t18Y5:
            Lq3hQ:
            goto N13lO;
            rur3U:
        }
        goto QrMH5;
        tHsHv:
        qVhdc:
        goto b3k4X;
        Jmdfx:
        JbQme:
        goto KCoPt;
        SWsNi:
        foreach ($this->_ion_like as $like) {
            $this->db->or_like($like["\154\151\x6b\145"], $like["\x76\x61\x6c\x75\x65"], $like["\160\x6f\163\x69\x74\x69\x6f\x6e"]);
            dwwwN:
        }
        goto y0ZDq;
        gDQYH:
    }
    public function user($id = NULL)
    {
        goto E_rWi;
        xR3cf:
        return $this;
        goto rHwL1;
        RVR8j:
        $this->order_by($this->tables["\165\x73\x65\x72\x73"] . "\x2e\x69\144", "\x64\x65\163\143");
        goto muGdW;
        AtCKr:
        $this->limit(1);
        goto RVR8j;
        CrJ2r:
        $this->users();
        goto xR3cf;
        E_rWi:
        $this->trigger_events("\165\163\145\x72");
        goto al0pr;
        al0pr:
        $id = isset($id) ? $id : $this->session->userdata("\x75\x73\145\162\137\151\144");
        goto AtCKr;
        muGdW:
        $this->where($this->tables["\165\163\145\162\x73"] . "\x2e\x69\x64", $id);
        goto CrJ2r;
        rHwL1:
    }
    public function get_users_groups($id = FALSE)
    {
        goto Dm6fk;
        Dm6fk:
        $this->trigger_events("\147\145\164\137\165\x73\145\162\x73\137\147\162\x6f\165\160");
        goto zY2oI;
        h7pP5:
        return $this->db->select($this->tables["\x75\x73\145\x72\x73\137\x67\x72\x6f\x75\160\163"] . "\56" . $this->join["\x67\162\157\165\160\163"] . "\x20\141\163\x20\151\144\54\x20" . $this->tables["\147\162\x6f\165\x70\x73"] . "\56\x6e\x61\155\x65\x2c\x20" . $this->tables["\147\x72\x6f\x75\160\x73"] . "\56\x64\x65\x73\143\162\x69\x70\x74\151\157\x6e")->where($this->tables["\x75\x73\145\x72\163\x5f\147\x72\157\165\x70\163"] . "\x2e" . $this->join["\165\163\145\162\163"], $id)->join($this->tables["\x67\162\157\165\x70\x73"], $this->tables["\165\x73\x65\x72\163\137\x67\x72\157\165\160\163"] . "\56" . $this->join["\x67\x72\x6f\x75\x70\x73"] . "\75" . $this->tables["\147\162\157\165\x70\x73"] . "\x2e\151\144")->get($this->tables["\165\x73\145\162\x73\137\147\x72\x6f\165\160\x73"]);
        goto FdtlL;
        zY2oI:
        $id || ($id = $this->session->userdata("\165\163\x65\x72\137\151\144"));
        goto h7pP5;
        FdtlL:
    }
    public function in_group($check_group, $id = FALSE, $check_all = FALSE)
    {
        goto cQ7E3;
        N01he:
        goto cdLFG;
        goto ns6nZ;
        RJXLm:
        $users_groups = $this->get_users_groups($id)->result();
        goto uWV29;
        x0Tmw:
        cdLFG:
        goto qSXGo;
        LGQhw:
        return $check_all;
        goto VAgxs;
        cQ7E3:
        $this->trigger_events("\151\156\137\x67\162\x6f\x75\x70");
        goto VQwXT;
        PEN04:
        foreach ($users_groups as $group) {
            $groups_array[$group->id] = $group->name;
            f29qw:
        }
        goto MejyQ;
        ns6nZ:
        g_zOu:
        goto E343F;
        mXImm:
        $this->_cache_user_in_group[$id] = $groups_array;
        goto N01he;
        tc5bI:
        h8K2D:
        goto SN2mx;
        qSXGo:
        foreach ($check_group as $key => $value) {
            goto Wcp05;
            rLKz_:
            uKDXw:
            goto hc1Qg;
            mKRmI:
            if (!(in_array($value, $groups) xor $check_all)) {
                goto AtsJn;
            }
            goto v1tQu;
            v1tQu:
            return !$check_all;
            goto L6zkq;
            Wcp05:
            $groups = is_numeric($value) ? array_keys($groups_array) : $groups_array;
            goto mKRmI;
            L6zkq:
            AtsJn:
            goto rLKz_;
            hc1Qg:
        }
        goto X7VKE;
        MejyQ:
        Y3ghk:
        goto mXImm;
        VQwXT:
        $id || ($id = $this->session->userdata("\165\163\x65\162\137\x69\x64"));
        goto Uz8mk;
        lUAiR:
        $check_group = [$check_group];
        goto tc5bI;
        uWV29:
        $groups_array = [];
        goto PEN04;
        SN2mx:
        if (isset($this->_cache_user_in_group[$id])) {
            goto g_zOu;
        }
        goto RJXLm;
        Uz8mk:
        if (is_array($check_group)) {
            goto h8K2D;
        }
        goto lUAiR;
        X7VKE:
        eB56e:
        goto LGQhw;
        E343F:
        $groups_array = $this->_cache_user_in_group[$id];
        goto x0Tmw;
        VAgxs:
    }
    public function add_to_group($group_ids, $user_id = FALSE)
    {
        goto a0Tg7;
        J7H2Y:
        foreach ($group_ids as $group_id) {
            goto qMt2v;
            gp0dW:
            goto yURr7;
            goto JrNRv;
            TuRPe:
            g5bZc:
            goto B89tU;
            zE3Sb:
            yURr7:
            goto z9W4k;
            qMt2v:
            if (!$this->db->insert($this->tables["\x75\x73\x65\162\x73\137\x67\x72\157\165\160\x73"], [$this->join["\x67\162\x6f\165\x70\x73"] => (float) $group_id, $this->join["\x75\x73\x65\162\x73"] => (float) $user_id])) {
                goto fjmSJ;
            }
            goto lNt7U;
            fDG_E:
            $this->_cache_groups[$group_id] = $group_name;
            goto gp0dW;
            z9W4k:
            $this->_cache_user_in_group[$user_id][$group_id] = $group_name;
            goto gUnks;
            lNt7U:
            if (isset($this->_cache_groups[$group_id])) {
                goto CDw5C;
            }
            goto g_wI3;
            gUnks:
            $return++;
            goto xTi6k;
            YTeaq:
            $group_name = $this->_cache_groups[$group_id];
            goto zE3Sb;
            g_wI3:
            $group = $this->group($group_id)->result();
            goto hbCqM;
            xTi6k:
            fjmSJ:
            goto TuRPe;
            JrNRv:
            CDw5C:
            goto YTeaq;
            hbCqM:
            $group_name = $group[0]->name;
            goto fDG_E;
            B89tU:
        }
        goto RUYin;
        j3qGR:
        return $return;
        goto Sg19M;
        qWqk_:
        $return = 0;
        goto J7H2Y;
        E1M3q:
        zE1gS:
        goto qWqk_;
        CcF3L:
        $user_id || ($user_id = $this->session->userdata("\x75\x73\145\162\137\151\144"));
        goto A1nk1;
        a0Tg7:
        $this->trigger_events("\x61\x64\x64\137\164\x6f\137\147\162\x6f\x75\x70");
        goto CcF3L;
        RUYin:
        lRxPk:
        goto j3qGR;
        A1nk1:
        if (is_array($group_ids)) {
            goto zE1gS;
        }
        goto lC0oM;
        lC0oM:
        $group_ids = [$group_ids];
        goto E1M3q;
        Sg19M:
    }
    public function remove_from_group($group_ids = FALSE, $user_id = FALSE)
    {
        goto N3K4W;
        dpQJ9:
        $this->_cache_user_in_group[$user_id] = [];
        goto yytkL;
        N3K4W:
        $this->trigger_events("\x72\145\155\x6f\166\x65\137\x66\x72\x6f\x6d\x5f\x67\162\x6f\x75\x70");
        goto JEXDu;
        s9a32:
        goto E9uIg;
        goto O5eQe;
        yytkL:
        I81gJ:
        goto s9a32;
        FXZr5:
        E9uIg:
        goto WZyB3;
        JEXDu:
        if (!empty($user_id)) {
            goto AtZBE;
        }
        goto MGUB6;
        m_PVg:
        if (!empty($group_ids)) {
            goto m20h2;
        }
        goto i_a4C;
        J7sAF:
        $return = TRUE;
        goto FXZr5;
        MGUB6:
        return FALSE;
        goto nmtdP;
        i_a4C:
        if (!($return = $this->db->delete($this->tables["\165\x73\x65\x72\x73\x5f\147\162\x6f\x75\x70\163"], [$this->join["\x75\x73\145\x72\163"] => (float) $user_id]))) {
            goto I81gJ;
        }
        goto dpQJ9;
        QEOo1:
        yPZ5F:
        goto nvgLy;
        O5eQe:
        m20h2:
        goto JiPrw;
        WZyB3:
        return $return;
        goto Jn35o;
        nvgLy:
        foreach ($group_ids as $group_id) {
            goto lpnc8;
            ZzNbt:
            pXcuZ:
            goto vnoT_;
            vh8qu:
            if (!(isset($this->_cache_user_in_group[$user_id]) && isset($this->_cache_user_in_group[$user_id][$group_id]))) {
                goto pXcuZ;
            }
            goto YYs82;
            YYs82:
            unset($this->_cache_user_in_group[$user_id][$group_id]);
            goto ZzNbt;
            lpnc8:
            $this->db->delete($this->tables["\x75\163\x65\x72\163\x5f\x67\162\157\165\x70\x73"], [$this->join["\147\x72\157\165\x70\x73"] => (float) $group_id, $this->join["\165\163\x65\x72\x73"] => (float) $user_id]);
            goto vh8qu;
            vnoT_:
            HdqY8:
            goto fPHX_;
            fPHX_:
        }
        goto OeoFD;
        QPRXr:
        $group_ids = [$group_ids];
        goto QEOo1;
        JiPrw:
        if (is_array($group_ids)) {
            goto yPZ5F;
        }
        goto QPRXr;
        nmtdP:
        AtZBE:
        goto m_PVg;
        OeoFD:
        GtzmI:
        goto J7sAF;
        Jn35o:
    }
    public function groups()
    {
        goto S1xwP;
        anMaw:
        $this->db->limit($this->_ion_limit, $this->_ion_offset);
        goto VyncM;
        zS11D:
        goto llQwp;
        goto sD0li;
        Wx07h:
        if (!isset($this->_ion_limit)) {
            goto bTGE9;
        }
        goto jHrV0;
        LZsK7:
        foreach ($this->_ion_where as $where) {
            $this->db->where($where);
            TGIsf:
        }
        goto kXHFe;
        S1xwP:
        $this->trigger_events("\147\162\x6f\x75\160\x73");
        goto q0OtA;
        T8EcB:
        $this->db->order_by($this->_ion_order_by, $this->_ion_order);
        goto QbArG;
        WTnBf:
        llQwp:
        goto mVzRf;
        mVzRf:
        if (!(isset($this->_ion_order_by) && isset($this->_ion_order))) {
            goto TqwyK;
        }
        goto T8EcB;
        SrsxF:
        yPJ6A:
        goto B3Beu;
        B3Beu:
        if (isset($this->_ion_limit) && isset($this->_ion_offset)) {
            goto uimnJ;
        }
        goto Wx07h;
        VRXHO:
        return $this;
        goto dnpFs;
        jHrV0:
        $this->db->limit($this->_ion_limit);
        goto vcE30;
        vcE30:
        $this->_ion_limit = NULL;
        goto k2_Wh;
        VyncM:
        $this->_ion_limit = NULL;
        goto SIAlv;
        q0OtA:
        if (!(isset($this->_ion_where) && !empty($this->_ion_where))) {
            goto yPJ6A;
        }
        goto LZsK7;
        sD0li:
        uimnJ:
        goto anMaw;
        kXHFe:
        E_WNi:
        goto MfYBM;
        k2_Wh:
        bTGE9:
        goto zS11D;
        T5TH1:
        $this->response = $this->db->get($this->tables["\147\162\x6f\x75\160\163"]);
        goto VRXHO;
        QbArG:
        TqwyK:
        goto T5TH1;
        MfYBM:
        $this->_ion_where = [];
        goto SrsxF;
        SIAlv:
        $this->_ion_offset = NULL;
        goto WTnBf;
        dnpFs:
    }
    public function group($id = NULL)
    {
        goto TfHxv;
        b3SUm:
        $this->order_by("\x69\x64", "\x64\x65\163\x63");
        goto bRsLW;
        gfsn0:
        $this->where($this->tables["\x67\162\157\x75\160\163"] . "\x2e\151\x64", $id);
        goto D6AMp;
        B2YYs:
        if (!isset($id)) {
            goto fqPa3;
        }
        goto gfsn0;
        OxiRD:
        $this->limit(1);
        goto b3SUm;
        D6AMp:
        fqPa3:
        goto OxiRD;
        TfHxv:
        $this->trigger_events("\x67\162\x6f\x75\x70");
        goto B2YYs;
        bRsLW:
        return $this->groups();
        goto Tg50F;
        Tg50F:
    }
    public function update($id, array $data)
    {
        goto Gm0W0;
        Gm0W0:
        $this->trigger_events("\x70\162\x65\x5f\165\160\144\x61\164\145\x5f\165\x73\x65\162");
        goto TKyNZ;
        HxqLn:
        if (!(array_key_exists($this->identity_column, $data) || array_key_exists("\x70\x61\163\x73\167\157\x72\x64", $data) || array_key_exists("\145\x6d\x61\x69\154", $data))) {
            goto FbgVC;
        }
        goto o1LKC;
        OYroX:
        $this->db->trans_rollback();
        goto mH2Rl;
        kw4I1:
        FbgVC:
        goto MyiYv;
        ilGGo:
        return FALSE;
        goto ZzrrS;
        CA90w:
        unset($data["\160\141\x73\163\167\x6f\x72\144"]);
        goto UTkgC;
        mQJNT:
        return TRUE;
        goto fA0L0;
        H97CG:
        $this->set_message("\165\160\144\x61\164\x65\137\163\x75\143\x63\x65\163\163\146\165\x6c");
        goto mQJNT;
        c7zVz:
        J0PNm:
        goto Z1FDP;
        RQPgc:
        $this->trigger_events(["\160\157\x73\x74\137\165\160\x64\141\164\145\x5f\165\163\145\162", "\x70\157\163\164\137\x75\x70\x64\x61\x74\x65\x5f\165\x73\x65\x72\137\x75\156\163\x75\x63\143\145\163\163\146\165\154"]);
        goto G2cxT;
        fY9sS:
        $this->trigger_events(["\160\157\x73\164\x5f\165\160\x64\141\x74\145\x5f\165\x73\145\x72", "\160\157\163\164\137\165\160\x64\141\164\145\137\165\163\145\x72\x5f\x75\156\x73\x75\x63\x63\145\x73\163\146\165\154"]);
        goto PUQq3;
        NF9Zu:
        $this->db->update($this->tables["\165\x73\x65\x72\x73"], $data, ["\x69\144" => $user->id]);
        goto qZ7ma;
        dagV2:
        GKAtF:
        goto DEiFx;
        PUQq3:
        $this->set_error("\165\x70\144\141\x74\x65\x5f\x75\156\x73\x75\x63\x63\x65\x73\163\146\165\154");
        goto ilGGo;
        pXxe2:
        $this->trigger_events(["\x70\x6f\163\164\137\165\x70\144\141\x74\x65\x5f\x75\163\145\x72", "\x70\157\163\164\137\x75\160\144\141\164\x65\137\165\163\145\162\137\x73\165\x63\x63\145\x73\x73\146\x75\x6c"]);
        goto H97CG;
        fPMlC:
        $this->trigger_events(["\x70\157\x73\x74\137\x75\x70\x64\x61\x74\145\x5f\x75\x73\x65\162", "\160\157\163\x74\x5f\165\160\144\141\164\145\137\x75\163\145\162\137\x75\x6e\163\x75\x63\x63\x65\x73\163\146\x75\154"]);
        goto ad9Q9;
        l3qlm:
        if (!empty($data["\x70\x61\x73\x73\167\x6f\162\x64"])) {
            goto J0PNm;
        }
        goto CA90w;
        MyiYv:
        $this->trigger_events("\145\x78\164\162\141\x5f\x77\x68\x65\162\145");
        goto NF9Zu;
        ad9Q9:
        $this->set_error("\165\x70\x64\x61\164\145\137\165\x6e\163\165\x63\x63\145\163\163\x66\x75\x6c");
        goto l4moN;
        rcYQU:
        wBuJd:
        goto G29F1;
        Uqst8:
        $this->db->trans_rollback();
        goto fY9sS;
        G2cxT:
        $this->set_error("\x75\160\144\141\164\x65\x5f\x75\156\163\x75\143\143\x65\163\x73\146\x75\154");
        goto uoVG8;
        mH2Rl:
        $this->set_error("\x61\143\143\157\x75\156\164\137\x63\x72\x65\141\164\151\157\x6e\x5f\144\x75\160\154\x69\143\x61\x74\x65\137\151\144\x65\156\164\151\x74\x79");
        goto RQPgc;
        TKyNZ:
        $user = $this->user($id)->row();
        goto hRwkn;
        G29F1:
        $data = $this->_filter_data($this->tables["\165\163\x65\x72\163"], $data);
        goto HxqLn;
        OlJDb:
        Uj0ht:
        goto dagV2;
        kZTY4:
        if (!($data["\160\x61\163\x73\167\157\162\144"] === FALSE)) {
            goto Uj0ht;
        }
        goto mD7Pl;
        DEiFx:
        MXoA2:
        goto kw4I1;
        qZ7ma:
        if (!($this->db->trans_status() === FALSE)) {
            goto REfQQ;
        }
        goto Uqst8;
        Z1FDP:
        $data["\160\141\x73\x73\x77\x6f\162\x64"] = $this->hash_password($data["\160\141\x73\163\167\157\162\x64"], $user->{$this->identity_column});
        goto kZTY4;
        uoVG8:
        return FALSE;
        goto rcYQU;
        ZzrrS:
        REfQQ:
        goto Ots2W;
        o1LKC:
        if (!array_key_exists("\160\141\x73\163\167\157\162\x64", $data)) {
            goto MXoA2;
        }
        goto l3qlm;
        hRwkn:
        $this->db->trans_begin();
        goto RpBxF;
        Ots2W:
        $this->db->trans_commit();
        goto pXxe2;
        l4moN:
        return FALSE;
        goto OlJDb;
        mD7Pl:
        $this->db->trans_rollback();
        goto fPMlC;
        RpBxF:
        if (!(array_key_exists($this->identity_column, $data) && $this->identity_check($data[$this->identity_column]) && $user->{$this->identity_column} !== $data[$this->identity_column])) {
            goto wBuJd;
        }
        goto OYroX;
        UTkgC:
        goto GKAtF;
        goto c7zVz;
        fA0L0:
    }
    public function delete_user($id)
    {
        goto keUhT;
        FMSTx:
        $this->db->trans_rollback();
        goto F6mtG;
        tuOWK:
        $this->db->trans_commit();
        goto UmMs1;
        F6xHq:
        jCsRP:
        goto tuOWK;
        UmMs1:
        $this->trigger_events(["\160\x6f\163\164\x5f\x64\145\x6c\x65\x74\x65\x5f\165\163\x65\162", "\x70\x6f\163\164\x5f\x64\x65\x6c\145\164\x65\137\x75\163\x65\162\x5f\x73\165\x63\143\145\x73\163\x66\x75\154"]);
        goto egu9D;
        F6mtG:
        $this->trigger_events(["\x70\157\x73\164\137\144\145\x6c\145\x74\145\x5f\165\163\145\162", "\160\157\163\x74\137\144\145\x6c\145\x74\145\137\x75\163\x65\162\x5f\x75\x6e\163\x75\x63\143\145\x73\x73\146\165\154"]);
        goto fIvYg;
        kbvm1:
        return TRUE;
        goto H8E4V;
        egu9D:
        $this->set_message("\144\x65\154\145\x74\145\137\x73\x75\143\143\x65\163\163\x66\x75\x6c");
        goto kbvm1;
        LvVFd:
        $this->db->delete($this->tables["\165\x73\145\x72\x73"], ["\x69\x64" => $id]);
        goto Dc1Vn;
        Dc1Vn:
        if (!($this->db->trans_status() === FALSE)) {
            goto jCsRP;
        }
        goto FMSTx;
        kVaS4:
        $this->db->trans_begin();
        goto OAlnY;
        OAlnY:
        $this->remove_from_group(NULL, $id);
        goto LvVFd;
        fIvYg:
        $this->set_error("\144\x65\x6c\x65\x74\x65\137\165\156\163\165\x63\x63\x65\x73\x73\x66\165\x6c");
        goto m2K8u;
        m2K8u:
        return FALSE;
        goto F6xHq;
        keUhT:
        $this->trigger_events("\x70\x72\x65\x5f\144\x65\154\145\x74\x65\x5f\165\x73\x65\x72");
        goto kVaS4;
        H8E4V:
    }
    public function update_last_login($id)
    {
        goto GVhc8;
        brNIN:
        $this->db->update($this->tables["\x75\x73\x65\x72\x73"], ["\x6c\141\x73\164\137\154\157\x67\151\x6e" => time()], ["\151\144" => $id]);
        goto P4UeI;
        wLa5i:
        $this->trigger_events("\x65\x78\164\x72\x61\137\x77\150\145\162\145");
        goto brNIN;
        GVhc8:
        $this->trigger_events("\165\x70\x64\x61\x74\145\x5f\154\141\x73\x74\137\154\x6f\147\x69\x6e");
        goto vE8O2;
        P4UeI:
        return $this->db->affected_rows() == 1;
        goto uwube;
        vE8O2:
        $this->load->helper("\x64\x61\164\x65");
        goto wLa5i;
        uwube:
    }
    public function set_lang($lang = "\x65\156")
    {
        goto K_SIY;
        SPyTB:
        if ($this->config->item("\x75\163\x65\x72\137\145\170\x70\151\x72\145", "\x69\x6f\x6e\137\x61\x75\x74\150") === 0) {
            goto dq4Wa;
        }
        goto CTKhw;
        K_SIY:
        $this->trigger_events("\x73\145\164\137\x6c\141\156\147");
        goto SPyTB;
        OpoDZ:
        H3Anb:
        goto YoGCs;
        D01s0:
        dq4Wa:
        goto aoXPS;
        CTKhw:
        $expire = $this->config->item("\165\163\x65\162\137\x65\x78\160\x69\162\145", "\x69\157\x6e\137\141\x75\x74\150");
        goto gktij;
        gktij:
        goto H3Anb;
        goto D01s0;
        YoGCs:
        set_cookie(["\156\141\155\x65" => "\x6c\x61\156\x67\x5f\143\157\144\145", "\x76\141\154\165\x65" => $lang, "\145\170\x70\151\x72\145" => $expire]);
        goto YGm26;
        aoXPS:
        $expire = self::MAX_COOKIE_LIFETIME;
        goto OpoDZ;
        YGm26:
        return TRUE;
        goto SnQ6I;
        SnQ6I:
    }
    public function set_session($user)
    {
        goto N06D1;
        N06D1:
        $this->trigger_events("\x70\x72\x65\137\x73\145\x74\x5f\x73\x65\x73\163\151\x6f\156");
        goto Wm_Do;
        Wm_Do:
        $session_data = ["\x69\x64\145\x6e\x74\151\164\x79" => $user->{$this->identity_column}, $this->identity_column => $user->{$this->identity_column}, "\x65\x6d\x61\x69\154" => $user->email, "\165\x73\x65\x72\x5f\151\x64" => $user->id, "\157\154\144\x5f\154\141\163\x74\137\x6c\157\x67\151\156" => $user->last_login, "\x6c\141\x73\x74\x5f\x63\x68\x65\143\153" => time()];
        goto PEWnu;
        PEWnu:
        $this->session->set_userdata($session_data);
        goto eb7Fb;
        eb7Fb:
        $this->trigger_events("\x70\x6f\163\164\x5f\163\145\164\137\163\x65\x73\163\x69\157\156");
        goto gSK52;
        gSK52:
        return TRUE;
        goto luM69;
        luM69:
    }
    public function remember_user($identity)
    {
        goto pDh8o;
        Uniut:
        return FALSE;
        goto rhP2p;
        F2Xtk:
        $expire = $this->config->item("\165\163\145\x72\x5f\145\170\160\151\x72\x65", "\151\157\x6e\x5f\x61\165\x74\150");
        goto eTiyf;
        icFli:
        Lggql:
        goto lIUpY;
        fDHMw:
        return TRUE;
        goto ArVnE;
        vcffU:
        if ($identity) {
            goto oPLQr;
        }
        goto Uniut;
        DZHTL:
        set_cookie(["\x6e\x61\155\145" => $this->config->item("\162\145\155\x65\x6d\x62\x65\162\137\143\x6f\157\153\x69\x65\137\156\141\155\145", "\151\x6f\x6e\137\141\165\x74\150"), "\166\x61\x6c\x75\145" => $token->user_code, "\x65\x78\x70\151\x72\x65" => $expire]);
        goto k9fIH;
        HKYnx:
        k8lXV:
        goto DZHTL;
        j3q2t:
        return FALSE;
        goto lJVhL;
        pDh8o:
        $this->trigger_events("\x70\x72\x65\137\x72\145\155\145\155\142\x65\162\x5f\165\x73\145\x72");
        goto vcffU;
        Zdi6K:
        $this->trigger_events(["\160\x6f\x73\x74\137\x72\x65\155\145\155\x62\x65\162\x5f\x75\163\145\162", "\162\x65\x6d\145\155\142\x65\x72\x5f\165\163\145\x72\137\165\x6e\x73\165\x63\143\x65\163\x73\x66\x75\154"]);
        goto j3q2t;
        eTiyf:
        goto k8lXV;
        goto icFli;
        tjheS:
        yhYd8:
        goto Zdi6K;
        Y8vB9:
        if (!($this->db->affected_rows() > -1)) {
            goto maSWt;
        }
        goto gb5Pl;
        lIUpY:
        $expire = self::MAX_COOKIE_LIFETIME;
        goto HKYnx;
        ArVnE:
        maSWt:
        goto tjheS;
        rhP2p:
        oPLQr:
        goto rPB2T;
        oilV9:
        if (!$token->validator_hashed) {
            goto yhYd8;
        }
        goto hD0Sh;
        gb5Pl:
        if ($this->config->item("\165\x73\x65\162\x5f\x65\x78\x70\151\x72\x65", "\151\157\x6e\x5f\141\x75\x74\150") === 0) {
            goto Lggql;
        }
        goto F2Xtk;
        rPB2T:
        $token = $this->_generate_selector_validator_couple();
        goto oilV9;
        k9fIH:
        $this->trigger_events(["\160\157\x73\164\137\162\x65\155\145\155\142\x65\x72\137\165\163\x65\x72", "\x72\145\x6d\x65\155\142\x65\162\137\165\163\x65\162\137\163\x75\143\143\145\x73\163\x66\165\x6c"]);
        goto fDHMw;
        hD0Sh:
        $this->db->update($this->tables["\x75\163\145\162\x73"], ["\162\145\155\145\x6d\142\x65\x72\137\163\145\154\145\x63\164\157\162" => $token->selector, "\x72\x65\155\145\155\142\x65\162\x5f\143\157\x64\x65" => $token->validator_hashed], [$this->identity_column => $identity]);
        goto Y8vB9;
        lJVhL:
    }
    public function login_remembered_user()
    {
        goto e2wip;
        Ujo5l:
        return TRUE;
        goto JsV1w;
        DfY6w:
        $this->clear_forgotten_password_code($identity);
        goto bzmTj;
        IFA2o:
        $token = $this->_retrieve_selector_validator_couple($remember_cookie);
        goto PCsXm;
        ZbAhB:
        ldinC:
        goto k7vWQ;
        xtRKC:
        $query = $this->db->select($this->identity_column . "\54\x20\151\x64\x2c\40\145\x6d\141\x69\154\x2c\x20\x72\x65\x6d\x65\155\142\145\162\137\x63\157\x64\x65\54\40\154\141\x73\x74\137\x6c\157\x67\151\156")->where("\162\145\x6d\x65\155\x62\145\162\137\163\145\x6c\x65\143\x74\157\x72", $token->selector)->where("\x61\143\x74\x69\166\x65", 1)->limit(1)->get($this->tables["\x75\x73\145\162\x73"]);
        goto q4Z4O;
        JsV1w:
        qgwGS:
        goto TDix_;
        vcyZ9:
        $this->trigger_events(["\160\x6f\x73\x74\x5f\154\x6f\x67\x69\x6e\x5f\162\x65\x6d\x65\x6d\x62\145\x72\145\x64\x5f\x75\x73\x65\x72", "\160\157\x73\164\137\x6c\157\x67\x69\156\137\162\145\x6d\145\x6d\x62\x65\162\x65\x64\x5f\165\163\x65\162\137\x73\165\x63\x63\x65\x73\163\146\x75\x6c"]);
        goto Ujo5l;
        bzmTj:
        if (!$this->config->item("\x75\x73\x65\x72\x5f\145\x78\x74\x65\156\x64\137\x6f\x6e\x5f\x6c\157\x67\x69\156", "\151\x6f\156\x5f\x61\x75\x74\x68")) {
            goto ldinC;
        }
        goto x9JdN;
        tTf9E:
        TsDpS:
        goto eHPPI;
        nnEYl:
        $this->update_last_login($user->id);
        goto O2BQO;
        VrCgB:
        return FALSE;
        goto KnA9X;
        LflGX:
        $identity = $user->{$this->identity_column};
        goto y3A5Q;
        k7vWQ:
        $this->session->sess_regenerate(FALSE);
        goto vcyZ9;
        y3A5Q:
        if (!$this->verify_password($token->validator, $user->remember_code, $identity)) {
            goto qgwGS;
        }
        goto nnEYl;
        X4CsD:
        return FALSE;
        goto tTf9E;
        sGQp1:
        $this->trigger_events(["\160\157\163\164\137\154\157\x67\151\x6e\x5f\x72\145\155\x65\x6d\142\145\x72\145\144\137\x75\x73\x65\162", "\x70\x6f\163\164\137\x6c\x6f\x67\151\x6e\x5f\x72\145\155\145\x6d\142\145\162\x65\144\137\165\x73\x65\x72\x5f\165\156\163\165\x63\143\145\x73\x73\146\165\x6c"]);
        goto X4CsD;
        eHPPI:
        $this->trigger_events("\x65\170\x74\162\x61\137\167\150\145\162\x65");
        goto xtRKC;
        q4Z4O:
        if (!($query->num_rows() === 1)) {
            goto Ooy0i;
        }
        goto N5nlC;
        O2BQO:
        $this->set_session($user);
        goto DfY6w;
        ojVlM:
        $this->trigger_events(["\x70\157\x73\164\x5f\x6c\157\x67\151\x6e\137\x72\145\155\x65\x6d\142\145\162\145\144\137\165\163\x65\162", "\160\x6f\163\164\137\x6c\x6f\x67\x69\156\137\x72\x65\x6d\x65\x6d\142\145\x72\x65\x64\137\x75\x73\145\162\x5f\x75\x6e\163\x75\143\143\x65\x73\x73\146\165\x6c"]);
        goto VrCgB;
        N5nlC:
        $user = $query->row();
        goto LflGX;
        c5yzg:
        delete_cookie($this->config->item("\162\145\x6d\145\x6d\142\x65\162\x5f\143\x6f\x6f\x6b\x69\145\x5f\156\141\155\x65", "\151\157\x6e\x5f\141\165\x74\x68"));
        goto ojVlM;
        x9JdN:
        $this->remember_user($identity);
        goto ZbAhB;
        cmNTf:
        $remember_cookie = get_cookie($this->config->item("\162\x65\155\x65\155\142\145\162\137\143\157\x6f\153\x69\145\x5f\156\141\x6d\145", "\151\157\156\137\x61\165\164\x68"));
        goto IFA2o;
        PCsXm:
        if (!($token === FALSE)) {
            goto TsDpS;
        }
        goto sGQp1;
        TDix_:
        Ooy0i:
        goto c5yzg;
        e2wip:
        $this->trigger_events("\160\162\x65\137\154\x6f\x67\151\156\137\x72\145\155\145\x6d\142\145\x72\x65\144\x5f\165\x73\145\162");
        goto cmNTf;
        KnA9X:
    }
    public function create_group($group_name = FALSE, $group_description = '', $additional_data = array())
    {
        goto opRwT;
        IO7vv:
        $data = ["\156\x61\x6d\145" => $group_name, "\x64\145\163\x63\162\151\160\164\x69\157\x6e" => $group_description];
        goto sYrAz;
        PbNqj:
        $group_id = $this->db->insert_id($this->tables["\x67\x72\157\165\160\x73"] . "\x5f\151\x64\137\163\x65\161");
        goto smWA5;
        tQR2x:
        return $group_id;
        goto Ey2X7;
        F09sH:
        $existing_group = $this->db->get_where($this->tables["\147\162\x6f\x75\160\163"], ["\156\141\155\x65" => $group_name])->num_rows();
        goto h5gFQ;
        rzZGR:
        HQwjk:
        goto Tkwlh;
        Q98vs:
        $this->set_error("\147\x72\157\165\x70\137\x61\154\162\145\x61\144\171\137\x65\170\151\x73\x74\163");
        goto Vepv5;
        Tkwlh:
        $this->trigger_events("\145\170\x74\162\141\137\147\162\x6f\165\x70\137\163\x65\x74");
        goto B137e;
        smWA5:
        $this->set_message("\x67\162\157\x75\160\x5f\x63\162\145\x61\164\x69\157\x6e\137\x73\x75\x63\x63\x65\x73\163\146\165\x6c");
        goto tQR2x;
        h5gFQ:
        if (!($existing_group !== 0)) {
            goto ZvSGl;
        }
        goto Q98vs;
        Vepv5:
        return FALSE;
        goto ML4D4;
        u5jtr:
        zn0IN:
        goto F09sH;
        Go1yp:
        return FALSE;
        goto u5jtr;
        oRaSc:
        $data = array_merge($this->_filter_data($this->tables["\147\x72\x6f\x75\x70\x73"], $additional_data), $data);
        goto rzZGR;
        ML4D4:
        ZvSGl:
        goto IO7vv;
        opRwT:
        if ($group_name) {
            goto zn0IN;
        }
        goto V9DSi;
        B137e:
        $this->db->insert($this->tables["\147\x72\x6f\165\x70\x73"], $data);
        goto PbNqj;
        V9DSi:
        $this->set_error("\x67\162\x6f\165\x70\137\156\x61\155\145\x5f\162\x65\x71\x75\151\162\145\x64");
        goto Go1yp;
        sYrAz:
        if (empty($additional_data)) {
            goto HQwjk;
        }
        goto oRaSc;
        Ey2X7:
    }
    public function update_group($group_id = FALSE, $group_name = FALSE, $additional_data = array())
    {
        goto JEsnS;
        JEsnS:
        if (!empty($group_id)) {
            goto aNJIV;
        }
        goto V0QaH;
        R1a6f:
        return FALSE;
        goto lhbE8;
        k1_jf:
        $this->set_error("\x67\162\157\x75\x70\x5f\x61\154\x72\x65\141\x64\x79\x5f\x65\170\x69\163\164\163");
        goto OYrQM;
        JmoK8:
        wSnKy:
        goto ZrDjV;
        OYrQM:
        return FALSE;
        goto a3qoU;
        kzXmi:
        $this->set_error("\x67\x72\157\165\160\x5f\156\x61\x6d\x65\x5f\x61\x64\x6d\x69\156\137\x6e\x6f\164\137\x61\154\x74\145\x72");
        goto R1a6f;
        LusBm:
        if (!($this->config->item("\141\x64\x6d\x69\156\x5f\147\x72\x6f\165\160", "\151\157\156\137\141\x75\x74\150") === $group->name && $group_name !== $group->name)) {
            goto cOOhq;
        }
        goto kzXmi;
        t2wKc:
        if (!(isset($existing_group->id) && $existing_group->id != $group_id)) {
            goto iri6n;
        }
        goto k1_jf;
        lhbE8:
        cOOhq:
        goto w7sJN;
        w7sJN:
        if (empty($additional_data)) {
            goto wSnKy;
        }
        goto yQdME;
        GzxlP:
        if (empty($group_name)) {
            goto g0SN1;
        }
        goto Pa9qW;
        Pa9qW:
        $existing_group = $this->db->get_where($this->tables["\x67\x72\x6f\165\160\163"], ["\x6e\141\155\145" => $group_name])->row();
        goto t2wKc;
        TFpvp:
        g0SN1:
        goto WaJB4;
        GEe54:
        return TRUE;
        goto YW0rK;
        F1zUz:
        $this->set_message("\x67\162\x6f\165\x70\137\x75\160\144\x61\164\145\x5f\x73\165\x63\143\145\x73\x73\146\x75\154");
        goto GEe54;
        ZrDjV:
        $this->db->update($this->tables["\x67\x72\157\x75\x70\x73"], $data, ["\151\x64" => $group_id]);
        goto F1zUz;
        a3qoU:
        iri6n:
        goto iYdSV;
        V0QaH:
        return FALSE;
        goto Kff4N;
        iYdSV:
        $data["\156\x61\155\145"] = $group_name;
        goto TFpvp;
        dzFF_:
        $data = [];
        goto GzxlP;
        yQdME:
        $data = array_merge($this->_filter_data($this->tables["\x67\x72\157\x75\x70\163"], $additional_data), $data);
        goto JmoK8;
        Kff4N:
        aNJIV:
        goto dzFF_;
        WaJB4:
        $group = $this->db->get_where($this->tables["\147\162\x6f\x75\x70\163"], ["\151\x64" => $group_id])->row();
        goto LusBm;
        YW0rK:
    }
    public function delete_group($group_id = FALSE)
    {
        goto DnchK;
        hTK7C:
        SgjL1:
        goto e9wRQ;
        PxFur:
        $this->db->trans_commit();
        goto sEuuO;
        coW31:
        $group = $this->group($group_id)->row();
        goto rSJkf;
        K__0S:
        $this->set_error("\x67\x72\x6f\x75\160\137\x64\145\154\145\x74\x65\x5f\156\x6f\x74\x61\154\154\157\167\145\144");
        goto I0VQE;
        I0QvL:
        $this->db->delete($this->tables["\165\x73\x65\162\x73\137\x67\162\x6f\165\160\x73"], [$this->join["\147\x72\x6f\165\160\163"] => $group_id]);
        goto H5hO7;
        H5hO7:
        $this->db->delete($this->tables["\x67\162\157\x75\x70\163"], ["\x69\x64" => $group_id]);
        goto ktwVx;
        gP5eC:
        return FALSE;
        goto aSbAu;
        BpgFL:
        return FALSE;
        goto nOC1V;
        sEuuO:
        $this->trigger_events(["\x70\x6f\163\164\137\x64\145\154\x65\x74\x65\x5f\x67\x72\x6f\x75\x70", "\x70\157\163\164\x5f\144\x65\154\145\164\x65\x5f\x67\162\x6f\165\x70\137\163\165\143\143\145\x73\163\146\165\x6c"]);
        goto SJsiz;
        EoS97:
        $this->db->trans_rollback();
        goto q2kJ9;
        ZSVlV:
        $this->trigger_events(["\x70\157\163\164\x5f\144\x65\x6c\x65\x74\145\x5f\x67\162\x6f\165\x70", "\160\157\163\x74\x5f\x64\145\154\145\164\145\137\x67\x72\157\165\x70\137\x6e\x6f\x74\x61\x6c\x6c\x6f\x77\145\144"]);
        goto K__0S;
        aSbAu:
        Ci4wx:
        goto coW31;
        rSJkf:
        if (!($group->name == $this->config->item("\x61\144\x6d\x69\x6e\137\147\x72\x6f\x75\160", "\151\157\x6e\x5f\141\165\x74\150"))) {
            goto SgjL1;
        }
        goto ZSVlV;
        nOC1V:
        gz5MO:
        goto PxFur;
        q2kJ9:
        $this->trigger_events(["\x70\157\163\164\137\144\145\154\x65\164\x65\x5f\147\162\x6f\x75\x70", "\160\x6f\x73\x74\x5f\x64\145\154\145\164\145\137\147\162\x6f\165\x70\x5f\165\x6e\x73\x75\143\x63\x65\x73\163\x66\x75\154"]);
        goto WRAOT;
        ktwVx:
        if (!($this->db->trans_status() === FALSE)) {
            goto gz5MO;
        }
        goto EoS97;
        I0VQE:
        return FALSE;
        goto hTK7C;
        ku308:
        $this->db->trans_begin();
        goto I0QvL;
        e9wRQ:
        $this->trigger_events("\x70\x72\x65\137\144\145\154\145\x74\x65\137\147\162\x6f\x75\160");
        goto ku308;
        WRAOT:
        $this->set_error("\147\x72\x6f\x75\x70\137\x64\145\154\145\164\145\x5f\165\x6e\163\165\x63\x63\145\163\163\146\165\x6c");
        goto BpgFL;
        DnchK:
        if (!(!$group_id || empty($group_id))) {
            goto Ci4wx;
        }
        goto gP5eC;
        SJsiz:
        $this->set_message("\x67\x72\157\x75\x70\x5f\x64\145\x6c\x65\x74\145\x5f\163\165\x63\143\x65\x73\163\x66\x75\x6c");
        goto d63OS;
        d63OS:
        return TRUE;
        goto PxapZ;
        PxapZ:
    }
    public function set_hook($event, $name, $class, $method, $arguments)
    {
        goto Jh8DR;
        CQ0wV:
        $this->_ion_hooks->{$event}[$name]->class = $class;
        goto D8D7B;
        D8D7B:
        $this->_ion_hooks->{$event}[$name]->method = $method;
        goto Rdo23;
        Jh8DR:
        $this->_ion_hooks->{$event}[$name] = new stdClass();
        goto CQ0wV;
        Rdo23:
        $this->_ion_hooks->{$event}[$name]->arguments = $arguments;
        goto XiQ3T;
        XiQ3T:
    }
    public function remove_hook($event, $name)
    {
        goto tnzOP;
        be0vz:
        unset($this->_ion_hooks->{$event}[$name]);
        goto hVSWF;
        tnzOP:
        if (!isset($this->_ion_hooks->{$event}[$name])) {
            goto U5UrG;
        }
        goto be0vz;
        hVSWF:
        U5UrG:
        goto ZjTO4;
        ZjTO4:
    }
    public function remove_hooks($event)
    {
        goto AR_uG;
        JpICN:
        yF7gp:
        goto EccjC;
        pK4DO:
        unset($this->_ion_hooks->{$event});
        goto JpICN;
        AR_uG:
        if (!isset($this->_ion_hooks->{$event})) {
            goto yF7gp;
        }
        goto pK4DO;
        EccjC:
    }
    protected function _call_hook($event, $name)
    {
        goto sfxW3;
        sfxW3:
        if (!(isset($this->_ion_hooks->{$event}[$name]) && method_exists($this->_ion_hooks->{$event}[$name]->class, $this->_ion_hooks->{$event}[$name]->method))) {
            goto qw2qe;
        }
        goto Cx64c;
        Y3fY2:
        return call_user_func_array([$hook->class, $hook->method], $hook->arguments);
        goto tGiYQ;
        Cx64c:
        $hook = $this->_ion_hooks->{$event}[$name];
        goto Y3fY2;
        tGiYQ:
        qw2qe:
        goto AR9em;
        AR9em:
        return FALSE;
        goto COMjD;
        COMjD:
    }
    public function trigger_events($events)
    {
        goto djktW;
        gyvCN:
        dTso5:
        goto Dddqq;
        djktW:
        if (is_array($events) && !empty($events)) {
            goto KcccZ;
        }
        goto rQbQe;
        YtfFr:
        KcccZ:
        goto r_dx5;
        rQbQe:
        if (!(isset($this->_ion_hooks->{$events}) && !empty($this->_ion_hooks->{$events}))) {
            goto a1DeL;
        }
        goto SSIvt;
        SSIvt:
        foreach ($this->_ion_hooks->{$events} as $name => $hook) {
            $this->_call_hook($events, $name);
            dnva8:
        }
        goto gyvCN;
        Dddqq:
        a1DeL:
        goto RS7iG;
        RS7iG:
        goto pzBdA;
        goto YtfFr;
        XYmkL:
        pzBdA:
        goto HsBKm;
        r_dx5:
        foreach ($events as $event) {
            $this->trigger_events($event);
            wguQI:
        }
        goto PoiHb;
        PoiHb:
        ytrRN:
        goto XYmkL;
        HsBKm:
    }
    public function set_message_delimiters($start_delimiter, $end_delimiter)
    {
        goto MvokB;
        uBSL7:
        $this->message_end_delimiter = $end_delimiter;
        goto jUN5m;
        MvokB:
        $this->message_start_delimiter = $start_delimiter;
        goto uBSL7;
        jUN5m:
        return TRUE;
        goto G2GzY;
        G2GzY:
    }
    public function set_error_delimiters($start_delimiter, $end_delimiter)
    {
        goto F0Skn;
        F0Skn:
        $this->error_start_delimiter = $start_delimiter;
        goto b4owY;
        OxoeB:
        return TRUE;
        goto UeXRD;
        b4owY:
        $this->error_end_delimiter = $end_delimiter;
        goto OxoeB;
        UeXRD:
    }
    public function set_message($message)
    {
        $this->messages[] = $message;
        return $message;
    }
    public function messages()
    {
        goto fBo1q;
        twaui:
        WfPaW:
        goto aBY0u;
        z0SSm:
        foreach ($this->messages as $message) {
            goto vE5_c;
            vE5_c:
            $messageLang = $this->lang->line($message) ? $this->lang->line($message) : "\x23\43" . $message . "\x23\43";
            goto SRBrH;
            SRBrH:
            $_output .= $this->message_start_delimiter . $messageLang . $this->message_end_delimiter;
            goto ZPKBX;
            ZPKBX:
            MMhZI:
            goto UpceT;
            UpceT:
        }
        goto twaui;
        fBo1q:
        $_output = '';
        goto z0SSm;
        aBY0u:
        return $_output;
        goto c_W62;
        c_W62:
    }
    public function messages_array($langify = TRUE)
    {
        goto T8oXI;
        KMQaP:
        return $_output;
        goto seNz5;
        dTLa3:
        return $this->messages;
        goto cFID9;
        q8ioi:
        foreach ($this->messages as $message) {
            goto vmd3J;
            vmd3J:
            $messageLang = $this->lang->line($message) ? $this->lang->line($message) : "\43\43" . $message . "\x23\x23";
            goto hIEVZ;
            hIEVZ:
            $_output[] = $this->message_start_delimiter . $messageLang . $this->message_end_delimiter;
            goto T0pal;
            T0pal:
            iyaQS:
            goto RJlxj;
            RJlxj:
        }
        goto NkDnJ;
        NkDnJ:
        c3M33:
        goto KMQaP;
        JtOuQ:
        $_output = [];
        goto q8ioi;
        cFID9:
        goto w5M3C;
        goto CCjzA;
        seNz5:
        w5M3C:
        goto XSEYM;
        T8oXI:
        if ($langify) {
            goto lArEN;
        }
        goto dTLa3;
        CCjzA:
        lArEN:
        goto JtOuQ;
        XSEYM:
    }
    public function clear_messages()
    {
        $this->messages = [];
        return TRUE;
    }
    public function set_error($error)
    {
        $this->errors[] = $error;
        return $error;
    }
    public function errors()
    {
        goto PWYPi;
        PWYPi:
        $_output = '';
        goto I0iSS;
        FPlFq:
        return $_output;
        goto ysESM;
        I0iSS:
        foreach ($this->errors as $error) {
            goto tJe1E;
            dAfe_:
            OSVJI:
            goto a9SXW;
            tFJTN:
            $_output .= $this->error_start_delimiter . $errorLang . $this->error_end_delimiter;
            goto dAfe_;
            tJe1E:
            $errorLang = $this->lang->line($error) ? $this->lang->line($error) : "\x23\43" . $error . "\x23\x23";
            goto tFJTN;
            a9SXW:
        }
        goto CE2dN;
        CE2dN:
        sqxlD:
        goto FPlFq;
        ysESM:
    }
    public function errors_array($langify = TRUE)
    {
        goto YgIOY;
        YgIOY:
        if ($langify) {
            goto tNrBB;
        }
        goto fxd73;
        fxd73:
        return $this->errors;
        goto II_D4;
        KW0yG:
        tNrBB:
        goto BoPey;
        UHakf:
        tnRs0:
        goto mFb5h;
        BoPey:
        $_output = [];
        goto F5joY;
        II_D4:
        goto CtiRM;
        goto KW0yG;
        mFb5h:
        return $_output;
        goto hQUV6;
        F5joY:
        foreach ($this->errors as $error) {
            goto yqmbF;
            SLGpH:
            J0oQS:
            goto VAY1I;
            nlfIA:
            $_output[] = $this->error_start_delimiter . $errorLang . $this->error_end_delimiter;
            goto SLGpH;
            yqmbF:
            $errorLang = $this->lang->line($error) ? $this->lang->line($error) : "\43\43" . $error . "\43\43";
            goto nlfIA;
            VAY1I:
        }
        goto UHakf;
        hQUV6:
        CtiRM:
        goto Eku5x;
        Eku5x:
    }
    public function clear_errors()
    {
        $this->errors = [];
        return TRUE;
    }
    protected function _set_password_db($identity, $password)
    {
        goto HJK0i;
        gJ__g:
        $data = ["\160\141\x73\x73\x77\157\x72\144" => $hash, "\162\x65\155\x65\x6d\x62\x65\x72\x5f\x63\x6f\144\145" => NULL, "\x66\x6f\x72\x67\x6f\164\x74\145\156\137\160\141\163\163\x77\157\162\144\x5f\143\x6f\x64\x65" => NULL, "\146\x6f\162\147\157\164\164\x65\x6e\x5f\160\x61\163\x73\x77\157\x72\x64\137\164\151\155\x65" => NULL];
        goto tZ_26;
        dBsq_:
        rB0gT:
        goto gJ__g;
        lAeHr:
        if (!($hash === FALSE)) {
            goto rB0gT;
        }
        goto zIG9w;
        HJK0i:
        $hash = $this->hash_password($password, $identity);
        goto lAeHr;
        zIG9w:
        return FALSE;
        goto dBsq_;
        VQIKt:
        return $this->db->affected_rows() == 1;
        goto ODM__;
        tZ_26:
        $this->trigger_events("\145\170\x74\162\141\137\x77\150\145\x72\x65");
        goto H0Ran;
        H0Ran:
        $this->db->update($this->tables["\x75\163\145\162\163"], $data, [$this->identity_column => $identity]);
        goto VQIKt;
        ODM__:
    }
    protected function _filter_data($table, $data)
    {
        goto W2H8r;
        Qeh35:
        $columns = $this->db->list_fields($table);
        goto CFBzy;
        CFBzy:
        if (!is_array($data)) {
            goto sSzbi;
        }
        goto MLQHb;
        W2H8r:
        $filtered_data = [];
        goto Qeh35;
        MLQHb:
        foreach ($columns as $column) {
            goto Lwp0O;
            VsQPY:
            z7mFo:
            goto Fltao;
            c18JT:
            kK6vP:
            goto VsQPY;
            ioJMl:
            $filtered_data[$column] = $data[$column];
            goto c18JT;
            Lwp0O:
            if (!array_key_exists($column, $data)) {
                goto kK6vP;
            }
            goto ioJMl;
            Fltao:
        }
        goto W59cz;
        H8L3l:
        return $filtered_data;
        goto iiFx6;
        W59cz:
        vjdQx:
        goto ZGnvJ;
        ZGnvJ:
        sSzbi:
        goto H8L3l;
        iiFx6:
    }
    protected function _random_token($result_length = 32)
    {
        goto m916X;
        ERNB7:
        $result_length = 32;
        goto aJlXf;
        s3phH:
        return bin2hex(openssl_random_pseudo_bytes($result_length / 2));
        goto nHAev;
        qGwq8:
        if (!function_exists("\162\141\x6e\x64\157\155\x5f\142\x79\164\x65\163")) {
            goto iistO;
        }
        goto s6JfQ;
        aJlXf:
        YXWuY:
        goto qGwq8;
        CGREK:
        if (!function_exists("\157\x70\145\156\x73\163\x6c\x5f\162\141\x6e\x64\x6f\155\137\160\163\x65\165\x64\x6f\137\x62\171\164\145\x73")) {
            goto DZkLX;
        }
        goto s3phH;
        ztjRm:
        bYh4r:
        goto CGREK;
        MIh1S:
        return FALSE;
        goto nwt1U;
        nHAev:
        DZkLX:
        goto MIh1S;
        m916X:
        if (!(!isset($result_length) || intval($result_length) <= 8)) {
            goto YXWuY;
        }
        goto ERNB7;
        AH7og:
        if (!function_exists("\155\x63\x72\x79\x70\164\137\x63\162\x65\141\x74\145\137\x69\x76")) {
            goto bYh4r;
        }
        goto l985_;
        l985_:
        return bin2hex(mcrypt_create_iv($result_length / 2, MCRYPT_DEV_URANDOM));
        goto ztjRm;
        KVzSj:
        iistO:
        goto AH7og;
        s6JfQ:
        return bin2hex(random_bytes($result_length / 2));
        goto KVzSj;
        nwt1U:
    }
    protected function _get_hash_parameters($identity = NULL)
    {
        goto ODJxk;
        sNyXO:
        wEJfj:
        goto Jp7CE;
        r4098:
        Ecw3G:
        goto aX9hX;
        BWvPD:
        if (!$identity) {
            goto KwOkM;
        }
        goto XvkEi;
        NVk0c:
        M7NtY:
        goto r4098;
        MbP3A:
        $is_admin = TRUE;
        goto sNyXO;
        xY4b7:
        if (!($user_id && $this->in_group($this->config->item("\141\144\x6d\151\x6e\137\147\x72\157\165\160", "\151\x6f\x6e\x5f\x61\x75\x74\x68"), $user_id))) {
            goto wEJfj;
        }
        goto MbP3A;
        ZClp8:
        switch ($this->hash_method) {
            case "\142\143\x72\171\x70\x74":
                $params = ["\143\157\163\164" => $is_admin ? $this->config->item("\x62\x63\162\x79\160\164\x5f\141\144\155\x69\x6e\137\143\x6f\163\164", "\151\157\x6e\137\141\165\x74\150") : $this->config->item("\x62\x63\x72\x79\x70\164\137\x64\x65\146\x61\165\154\164\x5f\143\157\163\164", "\151\157\x6e\x5f\141\x75\164\150")];
                goto Ecw3G;
            case "\141\x72\147\x6f\156\x32":
                $params = $is_admin ? $this->config->item("\141\162\x67\x6f\x6e\62\x5f\141\x64\x6d\151\156\137\160\x61\x72\141\x6d\163", "\151\x6f\156\137\x61\165\x74\150") : $this->config->item("\141\162\147\x6f\156\62\137\144\x65\x66\141\x75\154\164\137\x70\x61\162\x61\155\x73", "\151\x6f\156\137\x61\x75\164\150");
                goto Ecw3G;
            default:
        }
        goto NVk0c;
        ODJxk:
        $is_admin = FALSE;
        goto BWvPD;
        Jp7CE:
        KwOkM:
        goto z73fc;
        z73fc:
        $params = FALSE;
        goto ZClp8;
        XvkEi:
        $user_id = $this->get_user_id_from_identity($identity);
        goto xY4b7;
        aX9hX:
        return $params;
        goto yoTN5;
        yoTN5:
    }
    protected function _get_hash_algo()
    {
        goto jpfAR;
        O3CIY:
        return $algo;
        goto AAA0D;
        ZSkBb:
        switch ($this->hash_method) {
            case "\x62\143\162\171\160\164":
                $algo = PASSWORD_BCRYPT;
                goto hH2MM;
            case "\141\x72\147\157\156\x32":
                $algo = PASSWORD_ARGON2I;
                goto hH2MM;
            default:
        }
        goto q4ym8;
        oBiw7:
        hH2MM:
        goto O3CIY;
        jpfAR:
        $algo = FALSE;
        goto ZSkBb;
        q4ym8:
        Hxwxj:
        goto oBiw7;
        AAA0D:
    }
    protected function _generate_selector_validator_couple($selector_size = 40, $validator_size = 128)
    {
        goto tx8_2;
        Zdip9:
        $validator = $this->_random_token($validator_size);
        goto GUIIv;
        GIvIc:
        return (object) ["\163\145\x6c\x65\143\164\x6f\162" => $selector, "\166\x61\154\151\x64\141\164\x6f\x72\137\150\x61\x73\150\145\144" => $validator_hashed, "\165\163\145\x72\137\143\157\144\x65" => $user_code];
        goto ZI6nd;
        xxhvH:
        $user_code = "{$selector}\x2e{$validator}";
        goto GIvIc;
        GUIIv:
        $validator_hashed = $this->hash_password($validator);
        goto xxhvH;
        tx8_2:
        $selector = $this->_random_token($selector_size);
        goto Zdip9;
        ZI6nd:
    }
    protected function _retrieve_selector_validator_couple($user_code)
    {
        goto IEJsr;
        FneyH:
        if (!(count($tokens) === 2)) {
            goto QyiUM;
        }
        goto nwjzg;
        nwjzg:
        return (object) ["\x73\x65\154\145\x63\x74\x6f\162" => $tokens[0], "\x76\x61\154\151\x64\x61\164\x6f\162" => $tokens[1]];
        goto uJBoY;
        IEJsr:
        if (!$user_code) {
            goto LDWwG;
        }
        goto goiRq;
        uJBoY:
        QyiUM:
        goto S6pt3;
        SzaE6:
        return FALSE;
        goto sEuRz;
        S6pt3:
        LDWwG:
        goto SzaE6;
        goiRq:
        $tokens = explode("\56", $user_code);
        goto FneyH;
        sEuRz:
    }
    protected function _password_verify_sha1_legacy($identity, $password, $hashed_password_db)
    {
        goto ISQV2;
        gW_B6:
        $salt_length = $this->config->item("\163\141\x6c\x74\137\x6c\x65\156\x67\x74\x68", "\151\x6f\156\x5f\141\x75\164\150");
        goto Fi36b;
        aRBRP:
        $salt_db = $query->row();
        goto etl_f;
        t3HVE:
        if ($this->config->item("\x73\164\x6f\x72\x65\137\163\x61\154\x74", "\151\x6f\x6e\x5f\x61\x75\x74\150")) {
            goto JdEHE;
        }
        goto gW_B6;
        BkImy:
        $this->trigger_events(["\x70\157\x73\164\137\163\x68\141\x31\137\160\141\163\x73\167\157\x72\x64\x5f\x6d\151\x67\162\x61\164\151\x6f\x6e", "\x70\x6f\163\164\x5f\163\x68\x61\61\137\x70\141\163\163\x77\x6f\162\144\x5f\x6d\x69\147\162\x61\x74\x69\157\x6e\137\163\x75\143\143\x65\x73\x73\x66\x75\154"]);
        goto Sz9GX;
        cyKol:
        $hashed_password = sha1($password . $salt_db->salt);
        goto SW1xV;
        PvYDS:
        $hashed_password = $salt . substr(sha1($salt . $password), 0, -$salt_length);
        goto e8IKH;
        J5eLK:
        $result = $this->_set_password_db($identity, $password);
        goto bowFC;
        eiQLF:
        $salt = substr($hashed_password_db, 0, $salt_length);
        goto PvYDS;
        AEu9a:
        ot0Xf:
        goto J5eLK;
        Sz9GX:
        RoglQ:
        goto CUc56;
        bowFC:
        if ($result) {
            goto OpLMp;
        }
        goto YMMfs;
        CnLYM:
        Mvacx:
        goto erx43;
        LRnDY:
        CyL3d:
        goto cyKol;
        ISQV2:
        $this->trigger_events("\160\x72\145\x5f\x73\150\141\61\137\x70\x61\x73\163\167\157\162\144\137\155\151\147\x72\141\x74\151\x6f\x6e");
        goto t3HVE;
        FIwKF:
        JdEHE:
        goto ssI53;
        CUc56:
        return $result;
        goto CnLYM;
        Q6pHp:
        goto Mvacx;
        goto AEu9a;
        SW1xV:
        SnmGj:
        goto ACPf0;
        r6zuk:
        j57ql:
        goto eiQLF;
        etl_f:
        if (!($query->num_rows() !== 1)) {
            goto CyL3d;
        }
        goto iqfsY;
        W7fQf:
        return FALSE;
        goto r6zuk;
        e8IKH:
        goto SnmGj;
        goto FIwKF;
        Y7sR6:
        OpLMp:
        goto BkImy;
        ssI53:
        $query = $this->db->select("\x73\141\154\x74")->where($this->identity_column, $identity)->limit(1)->get($this->tables["\x75\163\x65\x72\163"]);
        goto aRBRP;
        iqfsY:
        $this->trigger_events(["\160\157\x73\164\x5f\163\150\x61\x31\137\x70\x61\x73\163\x77\157\162\144\x5f\x6d\151\x67\x72\x61\x74\151\157\156", "\x70\x6f\x73\164\x5f\x73\x68\141\x31\137\x70\141\163\x73\167\x6f\162\x64\x5f\155\x69\x67\x72\x61\x74\151\157\x6e\x5f\x75\156\163\165\143\x63\x65\x73\163\146\x75\154"]);
        goto mpLlm;
        hIhWZ:
        $this->trigger_events(["\x70\x6f\163\x74\x5f\163\150\141\x31\x5f\x70\141\163\163\x77\157\x72\x64\x5f\x6d\x69\x67\162\141\x74\x69\157\156", "\160\x6f\163\164\x5f\x73\x68\141\x31\x5f\x70\x61\163\163\167\157\162\144\x5f\155\x69\147\x72\x61\x74\x69\157\156\x5f\x75\x6e\x73\x75\x63\143\x65\x73\163\146\x75\x6c"]);
        goto a3Krr;
        Fi36b:
        if ($salt_length) {
            goto j57ql;
        }
        goto VBX0b;
        VBX0b:
        $this->trigger_events(["\160\x6f\x73\x74\x5f\163\x68\141\61\x5f\x70\141\x73\163\167\x6f\x72\144\x5f\x6d\x69\x67\162\141\164\151\157\x6e", "\x70\x6f\163\x74\x5f\163\x68\141\x31\137\x70\141\x73\x73\x77\x6f\x72\144\137\155\151\x67\x72\141\x74\x69\x6f\x6e\x5f\x75\156\163\165\143\143\x65\x73\163\146\165\x6c"]);
        goto W7fQf;
        wDcSr:
        goto RoglQ;
        goto Y7sR6;
        YMMfs:
        $this->trigger_events(["\160\157\163\x74\137\163\x68\x61\x31\137\x70\141\163\x73\x77\x6f\162\144\x5f\155\151\x67\162\141\x74\x69\157\x6e", "\160\x6f\163\164\137\163\x68\x61\x31\x5f\x70\x61\x73\x73\167\x6f\162\x64\137\155\151\x67\x72\141\164\x69\157\156\137\165\156\x73\165\143\143\145\163\163\x66\x75\154"]);
        goto wDcSr;
        mpLlm:
        return FALSE;
        goto LRnDY;
        ACPf0:
        if ($hashed_password === $hashed_password_db) {
            goto ot0Xf;
        }
        goto hIhWZ;
        a3Krr:
        return FALSE;
        goto Q6pHp;
        erx43:
    }
}
