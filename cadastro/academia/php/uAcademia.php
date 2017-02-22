<?php

	require_once '../../../gbClass/gs/defines.php';
	
    require_once HOSTS.DIRECT.'/gbClass/daos/Conection.php';
    require_once HOSTS.DIRECT.'/gbClass/interfaces/iCrud.php';
    
    require_once HOSTS.DIRECT.'/gbClass/gs/GSFiliais.php';
    require_once HOSTS.DIRECT.'/gbClass/gs/GSInformation_Schema.php';
    
    require_once HOSTS.DIRECT.'/gbClass/daos/Filiais.php';
    require_once HOSTS.DIRECT.'/gbClass/daos/Information_Schema.php';
    
    require_once HOSTS.DIRECT.'/libs/php/datas.php';
    require_once HOSTS.DIRECT.'/libs/php/checkDocumento.php';
    
    $path = $_SERVER['DOCUMENT_ROOT'];
    $arq = "config.xml";
    $arqxml = simplexml_load_file($path.$arq);
    
    $fl = new Filiais();
    $is = new Information_Schema($_POST['id'],"idFilial",$arqxml->scm[0]->db,get_class($fl));
    $dt = date("Y/m/d H:i:s");
    
    $rs = $is->analise();
    
    if(!$rs){
    	$fields = array('status','dtExclusao','idUsuarioExclusao');
    	$params = array(9,$dt,1,$_POST['id']);
    	$add = "idFilial = ?";
    	$rs = $fl->update($fields,$params,$add);
    	
    	if(is_numeric($rs) && $rs > 0){
	    	$res['rs'] = 1;
	    	$res['msg'] = utf8_encode('Filial excluida com sucesso!');
    	}else if(is_numeric($rs) && $rs == 0){
    		$res['rs'] = 2;
    		$res['msg'] = utf8_encode('Essa academia não poderá ser excluída, existe dados vinculados a ela!');
    	}else{
    		$res['rs'] = 0;
    		$res['msg'] = $rs;
    	}
    }else{
    	$res['rs'] = 2;
    	$res['msg'] = utf8_encode('Essa academia não poderá ser excluída, existe dados vinculados a ela!');
    }
    		
    print json_encode($res);