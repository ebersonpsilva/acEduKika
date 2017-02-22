<?php
    require_once '../../../gbClass/daos/Conection.php';
    require_once '../../../gbClass/interfaces/iCrud.php';
    
    require_once '../../../gbClass/gs/GSFiliais.php';
    
    require_once '../../../gbClass/daos/Filiais.php';
    
    require_once '../../../libs/php/datas.php';
    require_once '../../../libs/php/checkDocumento.php';
    
    $fl = new Filiais();
    
    $lista = $_POST['lista'];
    
    if(isset($lista) && $lista == 1){
        $fields = "idFilial, razaoSocial,responsavel,matriz,telefone";
        $params = array(1);
        $add = "WHERE status = ?";
        $rs = $fl->load($fields, $add,$params);
        
        if(is_array($rs)){
            foreach ($rs as $value) {
                $res['rs'] = 1;
                $res['msg'] = array('codigo'=>$value->getIdFilial(),
                                    'rSocial'=>$value->getRazaoSocial(),
                                    'responsavel'=>$value->getResponsavel(),
                                    'matriz'=>$value->getMatriz(),
                                    'telefone'=>$value->getTelefone()
                              );
            }
        }elseif($rs == 0){
            $res['rs'] = 2;
            $res['msg'] = 'Não encontramos filiais cadastrada!';
        }else{
            $res['rs'] = 0;
            $res['msg'] = $rs;
        }
    }else{
        $res['rs'] = 2;
        $res['msg'] = 'Não encontramos filiais cadastrada!';        
    }
    print json_encode($res);