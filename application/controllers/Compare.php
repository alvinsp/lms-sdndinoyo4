<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
goto gpuiH;
Y_leE:
exit("\x4e\157\40\x64\151\x72\145\143\x74\x20\x73\143\x72\x69\160\164\x20\141\143\x63\x65\163\x73\40\141\154\x6c\x6f\167\x65\x64");
goto HOS3h;
gpuiH:
if (defined("\102\x41\x53\105\120\101\124\x48")) {
    goto yqE2w;
}
goto Y_leE;
HOS3h:
yqE2w:
goto qTQX_;
qTQX_:
class Compare extends CI_Controller
{
    function __construct()
    {
        goto o8Tfq;
        tR764:
        $this->CHARACTER_SET = "\x75\164\x66\70\x20\103\x4f\114\114\x41\x54\105\40\x75\164\x66\70\137\147\145\x6e\x65\x72\x61\x6c\137\x63\x69";
        goto COe_b;
        o8Tfq:
        parent::__construct();
        goto tR764;
        COe_b:
        $this->DB1 = $this->load->database("\155\141\x69\x6e\x5f\147\141\x72\165\x64\141", TRUE);
        goto sW0lg;
        sW0lg:
        $this->DB2 = $this->load->database("\x6c\151\166\x65", TRUE);
        goto nNAuh;
        nNAuh:
    }
    function index()
    {
        goto s0cGf;
        VdEjC:
        $tables_to_update = $this->compare_table_structures($development_tables, $live_tables);
        goto HMKXU;
        v_f58:
        echo "\74\160\x3e\124\x68\145\40\x66\157\x6c\154\157\167\x69\x6e\147\x20\123\121\114\40\143\157\155\x6d\141\x6e\x64\163\x20\156\x65\145\144\40\164\157\40\142\x65\40\x65\170\145\x63\x75\x74\145\x64\x20\x74\x6f\x20\x62\162\x69\156\147\40\164\150\x65\x20\114\151\166\x65\40\144\141\x74\141\x62\141\x73\145\x20\164\x61\x62\x6c\145\163\x20\165\160\40\164\157\x20\x64\141\x74\145\72\40\74\x2f\160\x3e\12";
        goto I1lyi;
        bXg5a:
        P4th1:
        goto LVTzk;
        vwpIK:
        $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\143\x72\145\141\x74\145")) : array();
        goto bRsF9;
        gZm3v:
        $live_tables = $this->DB2->list_tables();
        goto aZRhn;
        aZRhn:
        $tables_to_create = array_diff($development_tables, $live_tables);
        goto hezA1;
        qQF0b:
        $development_tables = $this->DB1->list_tables();
        goto gZm3v;
        HMKXU:
        $tables_to_update = array_diff($tables_to_update, $tables_to_create);
        goto WzXfv;
        fQv1o:
        TY6T2:
        goto kOtws;
        s0cGf:
        $sql_commands_to_run = array();
        goto qQF0b;
        Jb09l:
        echo "\74\160\162\x65\x3e\12";
        goto fQv1o;
        WzXfv:
        $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : '';
        goto QHJHg;
        LVTzk:
        echo "\74\x68\x32\x3e\x54\150\145\40\144\x61\164\x61\142\141\x73\x65\x20\151\163\x20\x6f\165\x74\x20\x6f\x66\x20\x53\x79\x6e\x63\41\74\57\x68\62\x3e\xa";
        goto v_f58;
        I1lyi:
        echo "\74\x70\162\x65\40\x73\x74\171\x6c\x65\x3d\x27\x70\x61\144\x64\151\x6e\147\72\40\x32\60\x70\170\x3b\x20\142\141\x63\x6b\147\162\157\165\156\x64\x2d\143\x6f\x6c\157\x72\x3a\40\43\106\x46\106\x41\106\x30\73\x27\76\12";
        goto s9irh;
        QHJHg:
        if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) {
            goto P4th1;
        }
        goto wXLHd;
        wXLHd:
        echo "\74\150\62\x3e\124\150\145\40\144\141\164\141\x62\x61\163\x65\x20\141\160\160\145\141\162\163\40\x74\157\x20\x62\145\40\x75\x70\40\x74\157\40\144\141\164\145\x3c\57\150\62\x3e\12";
        goto qYBAe;
        xyrGJ:
        Var8N:
        goto Jb09l;
        qYBAe:
        goto TY6T2;
        goto bXg5a;
        s9irh:
        foreach ($sql_commands_to_run as $sql_command) {
            echo "{$sql_command}\xa";
            BP6tv:
        }
        goto xyrGJ;
        bRsF9:
        $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\x64\x72\x6f\160")) : array();
        goto VdEjC;
        hezA1:
        $tables_to_drop = array_diff($live_tables, $development_tables);
        goto vwpIK;
        kOtws:
    }
    function manage_tables($tables, $action)
    {
        goto Sm74B;
        hCZBK:
        F6KYX:
        goto ljISN;
        i2OSp:
        XFLmK:
        goto gru2n;
        ljISN:
        iLocC:
        goto qxHtJ;
        tTZZP:
        if (!($action == "\143\x72\145\x61\164\145")) {
            goto rZ_Oz;
        }
        goto SzEfW;
        SzEfW:
        foreach ($tables as $table) {
            goto jOlQG;
            a6aVB:
            l9Hnj:
            goto U4MTQ;
            OeQf3:
            $sql_commands_to_run[] = $table_structure["\103\x72\x65\x61\164\x65\x20\124\x61\142\x6c\145"] . "\x3b";
            goto a6aVB;
            dVbxv:
            $table_structure = $query->row_array();
            goto OeQf3;
            jOlQG:
            $query = $this->DB1->query("\123\110\x4f\127\x20\x43\122\105\x41\x54\x45\x20\124\101\102\x4c\105\40\x60{$table}\x60\x20\x2d\55\x20\143\162\x65\x61\x74\145\40\164\x61\142\x6c\x65\x73");
            goto dVbxv;
            U4MTQ:
        }
        goto i2OSp;
        gru2n:
        rZ_Oz:
        goto W0dpZ;
        Sm74B:
        $sql_commands_to_run = array();
        goto tTZZP;
        pLko_:
        foreach ($tables as $table) {
            $sql_commands_to_run[] = "\x44\122\117\x50\40\x54\101\102\114\x45\x20{$table}\73";
            U8439:
        }
        goto hCZBK;
        W0dpZ:
        if (!($action == "\x64\x72\157\x70")) {
            goto iLocC;
        }
        goto pLko_;
        qxHtJ:
        return $sql_commands_to_run;
        goto iFGcD;
        iFGcD:
    }
    function compare_table_structures($development_tables, $live_tables)
    {
        goto DFa6K;
        DFa6K:
        $tables_need_updating = array();
        goto mHyJx;
        Nj3tc:
        foreach ($development_tables as $table) {
            goto u716Y;
            ZKUfB:
            $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : '';
            goto Uek6c;
            Uek6c:
            if (!($this->count_differences($development_table, $live_table) > 0)) {
                goto sOZHa;
            }
            goto VRl3_;
            u716Y:
            $development_table = $development_table_structures[$table];
            goto ZKUfB;
            VRl3_:
            $tables_need_updating[] = $table;
            goto caDug;
            caDug:
            sOZHa:
            goto e5RGj;
            e5RGj:
            jRalc:
            goto Vjpta;
            Vjpta:
        }
        goto qqlJS;
        l5EQg:
        ULuuJ:
        goto arTRj;
        qqlJS:
        jNv0Y:
        goto nAeh_;
        nAeh_:
        return $tables_need_updating;
        goto nvMiN;
        mHyJx:
        $live_table_structures = $development_table_structures = array();
        goto iaIk8;
        z1jk6:
        ssLia:
        goto Nj3tc;
        arTRj:
        foreach ($live_tables as $table) {
            goto NEWsd;
            NEWsd:
            $query = $this->DB2->query("\x53\x48\117\127\x20\103\122\105\101\x54\x45\x20\x54\101\x42\114\105\40\140{$table}\140\40\x2d\55\40\x6c\151\x76\145");
            goto U_X7n;
            DSWzi:
            $live_table_structures[$table] = $table_structure["\103\x72\x65\x61\x74\145\x20\124\141\x62\154\x65"];
            goto y5iVt;
            y5iVt:
            HiKON:
            goto gO_9o;
            U_X7n:
            $table_structure = $query->row_array();
            goto DSWzi;
            gO_9o:
        }
        goto z1jk6;
        iaIk8:
        foreach ($development_tables as $table) {
            goto UTqUW;
            XS2Sj:
            $table_structure = $query->row_array();
            goto ZWR3d;
            ZWR3d:
            $development_table_structures[$table] = $table_structure["\103\x72\145\141\x74\x65\x20\x54\141\x62\154\145"];
            goto A8K2b;
            UTqUW:
            $query = $this->DB1->query("\x53\x48\x4f\x57\40\x43\122\x45\x41\x54\x45\40\124\101\102\x4c\105\40\x60{$table}\x60\x20\x2d\55\x20\144\145\166");
            goto XS2Sj;
            A8K2b:
            oYCnP:
            goto Yz8zN;
            Yz8zN:
        }
        goto l5EQg;
        nvMiN:
    }
    function count_differences($old, $new)
    {
        goto y2uIE;
        pO1ZC:
        oAJsj:
        goto Asq3X;
        p5Hfk:
        return $differences;
        goto JHwq4;
        y2uIE:
        $differences = 0;
        goto g8ZU7;
        r3H6m:
        $old = explode("\40", $old);
        goto Ppey4;
        IelTh:
        goto Kn6VN;
        goto eWrul;
        Ppey4:
        $new = explode("\40", $new);
        goto NJtsu;
        damMe:
        if (!($old[$i] != $new[$i])) {
            goto oAJsj;
        }
        goto FVcU6;
        eWrul:
        JTB8O:
        goto p5Hfk;
        J9VgE:
        if (!($old == $new)) {
            goto tx_GF;
        }
        goto Eqmqu;
        tX1Y9:
        tx_GF:
        goto r3H6m;
        P3qMT:
        $i++;
        goto IelTh;
        oSKyz:
        $new = trim(preg_replace("\57\x5c\x73\x2b\x2f", '', $new));
        goto J9VgE;
        Asq3X:
        EK3rq:
        goto P3qMT;
        Oe3wA:
        $i = 0;
        goto UlMKa;
        Eqmqu:
        return $differences;
        goto tX1Y9;
        NJtsu:
        $length = max(count($old), count($new));
        goto Oe3wA;
        g8ZU7:
        $old = trim(preg_replace("\x2f\x5c\x73\x2b\57", '', $old));
        goto oSKyz;
        UlMKa:
        Kn6VN:
        goto xj3UL;
        FVcU6:
        $differences++;
        goto pO1ZC;
        xj3UL:
        if (!($i < $length)) {
            goto JTB8O;
        }
        goto damMe;
        JHwq4:
    }
    function update_existing_tables($tables)
    {
        goto dxqCj;
        ZROnZ:
        MQVdR:
        goto xR5Gi;
        olmsr:
        foreach ($tables as $table) {
            goto TEiDU;
            TEiDU:
            $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table);
            goto LI46B;
            LI46B:
            $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table);
            goto Emy8k;
            Emy8k:
            G9r8O:
            goto Jtvqv;
            Jtvqv:
        }
        goto mzb7c;
        dxqCj:
        $sql_commands_to_run = array();
        goto rje1C;
        rje1C:
        $table_structure_development = array();
        goto qy1EH;
        SLBD3:
        if (!(is_array($tables) && !empty($tables))) {
            goto MQVdR;
        }
        goto olmsr;
        xR5Gi:
        $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live));
        goto GIjK7;
        qy1EH:
        $table_structure_live = array();
        goto SLBD3;
        mzb7c:
        CELQt:
        goto ZROnZ;
        GIjK7:
        return $sql_commands_to_run;
        goto y7R3U;
        y7R3U:
    }
    function table_field_data($database, $table)
    {
        goto vKtio;
        gUO2U:
        mysql_select_db($database["\x64\x61\164\x61\142\x61\163\145"]);
        goto DEU0n;
        DEU0n:
        $result = mysql_query("\x53\x48\117\127\x20\x43\117\x4c\x55\115\x4e\123\x20\x46\122\117\x4d\x20\140{$table}\140");
        goto Mjstd;
        vKtio:
        $conn = mysqli_connect($database["\150\x6f\x73\x74\156\x61\155\145"], $database["\x75\x73\145\x72\156\141\155\145"], $database["\160\141\x73\163\167\x6f\162\x64"]);
        goto gUO2U;
        Mjstd:
        HZi3t:
        goto lFj2Y;
        SW6PP:
        SspSl:
        goto eTAJh;
        lFj2Y:
        if (!($row = mysql_fetch_assoc($result))) {
            goto SspSl;
        }
        goto Z85gD;
        mERh1:
        goto HZi3t;
        goto SW6PP;
        Z85gD:
        $fields[] = $row;
        goto mERh1;
        eTAJh:
        return $fields;
        goto s3aHa;
        s3aHa:
    }
    function determine_field_changes($source_field_structures, $destination_field_structures)
    {
        goto UfRNH;
        SeBC9:
        return $sql_commands_to_run;
        goto Pzq9I;
        Yjz5F:
        foreach ($source_field_structures as $table => $fields) {
            goto RzlGn;
            BeASd:
            NENia:
            goto yzw4z;
            ykEir:
            qbjaS:
            goto BeASd;
            RzlGn:
            foreach ($fields as $field) {
                goto Yg92T;
                v9XF0:
                $modify_field .= isset($fields[$n]["\x45\x78\x74\x72\141"]) && $fields[$n]["\x45\x78\164\162\141"] != '' ? "\40" . $fields[$n]["\x45\x78\164\162\x61"] : '';
                goto Kk17o;
                ZNT7D:
                goto zIv_N;
                goto J4z6n;
                D0mEQ:
                $add_field .= "\x3b";
                goto KyTPL;
                AkiwV:
                ADj2J:
                goto BD0YM;
                w5SBW:
                $n++;
                goto Fh8ru;
                xsRyJ:
                $add_field .= "\40\104\105\x46\101\x55\114\x54\x20" . $field["\104\145\146\x61\x75\x6c\x74"];
                goto Pas0O;
                LU34M:
                KbfVt:
                goto w5SBW;
                Pas0O:
                $add_field .= isset($field["\105\x78\x74\162\x61"]) && $field["\105\x78\x74\162\x61"] != '' ? "\x20" . $field["\x45\170\x74\x72\x61"] : '';
                goto D0mEQ;
                UiaO5:
                $modify_field .= "\73";
                goto NcVIn;
                mkXNL:
                $previous_field = $fields[$n]["\106\151\145\154\144"];
                goto AkiwV;
                ujbYD:
                if (!(is_array($differences) && !empty($differences))) {
                    goto ZDS0H;
                }
                goto umgfj;
                XCsCX:
                if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\106\151\x65\154\x64"] == $destination_field_structures[$table][$n]["\x46\151\145\x6c\x64"])) {
                    goto ADj2J;
                }
                goto qm4YG;
                qqxH1:
                if (!($n < count($fields))) {
                    goto hRw_L;
                }
                goto XCsCX;
                qm4YG:
                $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]);
                goto ujbYD;
                Yg92T:
                if ($this->in_array_recursive($field["\x46\x69\x65\154\144"], $destination_field_structures[$table])) {
                    goto ppwJF;
                }
                goto FKIG0;
                KyTPL:
                $sql_commands_to_run[] = $add_field;
                goto ZNT7D;
                w3_E0:
                n3Kdi:
                goto qqxH1;
                vDHZR:
                $n = 0;
                goto w3_E0;
                BD0YM:
                if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) {
                    goto rp270;
                }
                goto MPttR;
                cPUwl:
                rp270:
                goto LU34M;
                NcVIn:
                ZDS0H:
                goto mkXNL;
                FKIG0:
                $add_field = "\101\114\x54\105\122\x20\x54\x41\x42\114\105\40{$table}\x20\x41\104\104\40\103\x4f\x4c\x55\115\x4e\x20\x60" . $field["\x46\x69\145\x6c\144"] . "\x60\40" . $field["\x54\171\160\x65"] . "\x20\x43\110\x41\122\101\103\x54\x45\122\40\x53\105\x54\x20" . $this->CHARACTER_SET;
                goto izncF;
                bCWOR:
                $modify_field .= isset($fields[$n]["\116\165\154\x6c"]) && $fields[$n]["\x4e\165\x6c\x6c"] == "\x59\x45\x53" ? "\40\116\125\x4c\114" : "\40\116\117\124\x20\x4e\125\114\114";
                goto v9XF0;
                cGQD7:
                Ymczq:
                goto xcc7K;
                rYEn7:
                $modify_field = '';
                goto vDHZR;
                Kk17o:
                $modify_field .= isset($previous_field) && $previous_field != '' ? "\x20\101\106\124\x45\x52\x20" . $previous_field : '';
                goto UiaO5;
                J4z6n:
                ppwJF:
                goto rYEn7;
                MPttR:
                $sql_commands_to_run[] = $modify_field;
                goto cPUwl;
                umgfj:
                $modify_field = "\101\114\124\x45\x52\x20\x54\101\102\x4c\105\x20{$table}\40\115\117\104\x49\x46\131\x20\x43\x4f\x4c\125\x4d\116\x20\140" . $fields[$n]["\x46\151\x65\154\x64"] . "\x60\40" . $fields[$n]["\x54\x79\x70\145"] . "\x20\103\x48\x41\x52\101\x43\x54\x45\x52\x20\x53\105\124\x20" . $this->CHARACTER_SET;
                goto JVklK;
                izncF:
                $add_field .= isset($field["\x4e\165\154\154"]) && $field["\x4e\165\154\154"] == "\x59\105\123" ? "\x20\116\165\x6c\x6c" : '';
                goto xsRyJ;
                vszNR:
                hRw_L:
                goto DaF0O;
                DaF0O:
                zIv_N:
                goto cGQD7;
                Fh8ru:
                goto n3Kdi;
                goto vszNR;
                JVklK:
                $modify_field .= isset($fields[$n]["\x44\145\x66\x61\x75\154\x74"]) && $fields[$n]["\x44\x65\146\141\x75\154\164"] != '' ? "\40\x44\x45\106\101\125\114\124\x20\47" . $fields[$n]["\104\145\146\x61\165\154\x74"] . "\47" : '';
                goto bCWOR;
                xcc7K:
            }
            goto ykEir;
            yzw4z:
        }
        goto WsvkX;
        UfRNH:
        $sql_commands_to_run = array();
        goto Yjz5F;
        WsvkX:
        KcoAH:
        goto SeBC9;
        Pzq9I:
    }
    function in_array_recursive($needle, $haystack, $strict = false)
    {
        goto cKK2n;
        cKK2n:
        foreach ($haystack as $array => $item) {
            goto yGaLD;
            yGaLD:
            $item = $item["\x46\151\x65\154\144"];
            goto uvZDI;
            uvZDI:
            if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) {
                goto x2c7l;
            }
            goto lPADI;
            lPADI:
            return true;
            goto b6haV;
            b6haV:
            x2c7l:
            goto I42to;
            I42to:
            QBaeF:
            goto BfLCa;
            BfLCa:
        }
        goto Uuaj3;
        Uuaj3:
        J8Pod:
        goto aiyHs;
        aiyHs:
        return false;
        goto jAawQ;
        jAawQ:
    }
}
