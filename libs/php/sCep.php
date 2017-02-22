<?php

	require_once '../../gbClass/gs/defines.php';
	
	require_once HOSTS.DIRECT.'/gbClass/daos/Conection.php';
    require_once HOSTS.DIRECT.'/gbClass/interfaces/iCrud.php';
    
    require_once HOSTS.DIRECT.'/gbClass/gs/GSCeps.php';
    require_once HOSTS.DIRECT.'/gbClass/daos/Ceps.php';
    
    $cp = new Ceps();
    
    $cep = $_POST['cep'];
    $res = array();
    
    $fields = "*";
    $add = "WHERE cep = {$cep} ";
    
    $rs = $cp->load($fields, $add);
    if(is_array($rs)){
        $res['rs'] = 2;
        $res['bairro'] = $rs[0]->getBairro();
        $res['cidade'] = $rs[0]->getCidade();
        $res['endereco'] = $rs[0]->getEndereco();
        $res['idCep'] = $rs[0]->getIdCep();
    }else{
        $res['rs'] = 0;
        $res['msg'] = 'Nao encontramos o endereco para este CEP, certifique que foi digitado corretamente!';
        
    }
    print json_encode($res);