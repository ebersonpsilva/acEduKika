<?php
    require_once '../global_php/seg.php';
    protegePagina();

    require_once '../global_class/msAcessoDepartamentos.php';
    require_once '../global_class/msAcessos.php';
    require_once '../global_class/msNUsuarios.php';
    require_once '../global_class/msConect.php';
    require_once '../global_class/interfaces/InterfaceCrud.php';
    require_once '../global_class/DAO/nUsuarios.php';
    require_once '../global_class/DAO/AcessoDepartamentos.php';
    require_once '../global_class/DAO/Acessos.php';
    
    $menu = $_POST['menu'];
    $idTela = (int)$_POST['idTela'];
    $idUsuario = (int)$_POST['idUsuario'];
   
    $us = new NUsuarios();
    $adp = new AcessoDepartamentos();
    $ac = new Acessos();
    
    $fdUs = 'idDepartamento,idFilial,idNivelAcesso';
    $addUs = 'WHERE idUsuario = '.$idUsuario.' ';
    $addUs.= 'AND status = 0';
    $rsUs = $us->load($fdUs, $addUs);
    
    if(is_array($rsUs)){
        $fdAdp = '*';
        $addAdp = "WHERE idDepartamento = ".$rsUs[0]->getIdDepartamento()." ";
        $addAdp.= 'AND status = 0 ';
        $addAdp.= "AND idTela = {$idTela}";
        $rsAdp = $adp->load($fdAdp, $addAdp);
        if(is_array($rsAdp)){
    //        foreach($rsAdp AS $key => $rAdp){
            if($rsAdp[0]->getIdTela() == $idTela){
                $rs = $rsAdp[0]->getIdTela();
                //print $rs;
                $res = array(
                    'rs' => 1,
                    'msg' => $rsAdp[0]->getIdTela()
                );
            }
    //        }
        }
        if(empty($rs) || !isset($rs)){
            $fdAc = '*';
            $addAc = 'WHERE idUsuario = '.$idUsuario.' ';
            $addAc.= 'AND status = 0 ';
            $addAc.= "AND idTela = {$idTela}";
            $rsAc = $ac->load($fdAc, $addAc);
            if(is_array($rsAc)){
    //            foreach($rsAc AS $key => $rAc){
                if($rsAc[0]->getIdTela() == $idTela){
//                    $rs = $rsAc[0]->getIdTela();
//                    print $rs;
                    $res = array(
                        'rs' => 1,
                        'msg' => $rsAdp[0]->getIdTela()
                    );
                }else{
//                    print "Você não tem privilégios para acessar este item!";
                      $res = array(
                        'rs' => 0,
                        'msg' => "Você não tem privilégios para acessar este item!"
                    );
                }
//            }
            }else{
//                print "Você não tem privilégios para acessar este item!";
                  $res = array(
                        'rs' => 0,
                        'msg' => "Você não tem privilégios para acessar este item!"
                    );
            }
        }
    }else{
        $res = array(
            'rs' => 0,
            'msg' => 'Ocorreu uma falha no seu acesso, comunique o depto. de TI!'
        );
    }
    print json_encode($res);
?>
