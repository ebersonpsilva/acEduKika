<?php

	require_once '../../../gbClass/gs/defines.php';
	
    require_once HOSTS.DIRECT.'/gbClass/daos/Conection.php';
    require_once HOSTS.DIRECT.'/gbClass/interfaces/iCrud.php';
    
    require_once HOSTS.DIRECT.'/gbClass/gs/GSFiliais.php';
    require_once HOSTS.DIRECT.'/gbClass/gs/GSCeps.php';
    
    require_once HOSTS.DIRECT.'/gbClass/daos/Filiais.php';
    require_once HOSTS.DIRECT.'/gbClass/daos/Ceps.php';
    
    require_once HOSTS.DIRECT.'/libs/php/datas.php';
    require_once HOSTS.DIRECT.'/libs/php/checkDocumento.php';
    
    $fl = new Filiais();
    $cep = new Ceps();
    
    $lista = $_POST['lista'];
    
    if(isset($lista) && !empty($lista)){
    	if($lista == 1){
    		$fields = "idFilial, razaoSocial,responsavel,matriz,telefone";
    		$params = array(1);
    		$add = "WHERE status = ?";
    		$rs = $fl->load($fields, $add,$params);
    		
    		if(is_array($rs)){
    			foreach ($rs as $value) {
    				$res['rs'] = 1;
    				$res[] = array('codigo'=>$value->getIdFilial(),
    						'rSocial'=>$value->getRazaoSocial(),
    						'responsavel'=>$value->getResponsavel(),
    						'matriz'=>$value->getMatriz(),
    						'telefone'=>$value->getTelefone()
    				);
    			}
    		}elseif($rs == 0){
    			$res['rs'] = 2;
    			$res['msg'] = utf8_encode('Não encontramos filiais cadastrada!');
    		}else{
    			$res['rs'] = 0;
    			$res['msg'] = $rs;
    		}
    	}elseif($lista == 2){
    		$fields = "*";
    		$params = array($_POST['id']);
    		$add = "WHERE idFilial = ?";
    		$rs = $fl->load($fields, $add,$params);
    		
    		if(is_array($rs)){
    			$res['rs'] = 1;
    			foreach ($rs as $value){
    				$fields = "*";
    				$params = array($value->getIdCep());
    				$add = "WHERE idCep = ?";
    				$rs = $cep->load($fields,$add,$params);
    				$nCep = (strlen($rs[0]->getCep()) == 7) ? '0'.$rs[0]->getCep(): $rs[0]->getCep();
    				$res['rs'] = 1;
    				$res[] = array('codigo'=>$value->getIdFilial(),
	    						'cnpj'=>$value->getCnpj(),
	    						'rSocial'=>$value->getRazaoSocial(),
	    						'nomeFilial'=>$value->getNomeFilial(),
	    						'responsavel'=>$value->getResponsavel(),
	    						'matriz'=>$value->getMatriz(),
	    						'telefone'=>$value->getTelefone(),
	    						'idCep'=>$value->getIdCep(),
	    						'numero'=>$value->getNumero(),
	    						'complemento'=>$value->getComplemento(),
	    						'contato'=>$value->getContato(),
	    						'email'=>$value->getEmail(),
	    						'celular'=>$value->getCelular(),
	    						'status'=>$value->getStatus(),
	    						'ukey'=>$value->getUkey(),
    							'endereco'=>$rs[0]->getEndereco(),
    							'bairro'=>$rs[0]->getBairro(),
    							'cidade'=>$rs[0]->getCidade(),
    							'cep'=>$nCep
    						);
    			}
    		}elseif($rs == 0){
    			$res['rs'] = 2;
    			$res['msg'] = utf8_encode('Não encontramos filiais cadastrada!');
    		}else{
    			$res['rs'] = 0;
    			$res['msg'] = $rs;
    		}
    	}
    }else{
        $res['rs'] = 2;
        $res['msg'] = 'Falha ao montar a lista!';        
    }
    print json_encode($res);