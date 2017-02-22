<?php

	require_once '../../gbClass/gs/defines.php';
    require_once "../php/checkDocumento.php";
    
    $doc = new ValidaCPFCNPJ($_POST['doc']);
    $res = array();
    
    ($doc->valida()) ? $res['rs'] = 1 : $res['rs'] = 0;
    $res['msg'] = '<div id="mCnpj">*CNPJ inválido!</div>';
    
    print json_encode($res);
