<?php

	require_once '../../gbClass/gs/defines.php';
	
    require_once HOSTS.DIRECT.'/gbClass/daos/Conection.php';
    require_once HOSTS.DIRECT.'/gbClass/interfaces/iCrud.php';
    
    require_once HOSTS.DIRECT.'/gbClass/gs/GSCeps.php';
    require_once HOSTS.DIRECT.'/gbClass/daos/Ceps.php';
    
    require_once HOSTS.DIRECT.'/libs/php/acentuacao.php';
    
    $cp = new Ceps();
    
    $cep = $_POST['cep'];
    $endereco = rAcentos($_POST['endereco']);
    $bairro = rAcentos($_POST['bairro']);
    $cidade = rAcentos($_POST['cidade']);
    $uf = $_POST['uf'];
    $res = array();
    
    $fields = "idCep";
    $add = "WHERE cep = {$cep}";
    $add.= "AND endereco = '{$endereco}'";
    
    $rs = $cp->load($fields, $add);
    if(is_array($rs)){
        $res['rs'] = 2;
        $res['msg'] = $rs[0]->getIdCep();
    }else{
        $fields = "idCep,cep,endereco,bairro,cidade,uf";
        $params = array(0,$cep,$endereco,$bairro,$cidade,$uf);
        $rs = $cp->insert($fields, $params);
        if($rs == 0){
            $res['rs'] = 0;
            $res['msg'] = 'Dados não foram inseridos!';
        }elseif($rs > 0){
            $res['rs'] = 1;
            $res['msg'] = $rs;
        }else{
            $res['rs'] = 0;
            $res['msg'] = 'Erro: '.$rs;
        }
    }
    print json_encode($res);