<?php

    require_once 'seg.php';
    
    require_once '../global_class/msConect.php';
    require_once '../global_class/Bcrypt.php';
    require_once '../global_class/interfaces/InterfaceCrud.php';

    require_once '../global_class/DAO/nUsuarios.php';
    require_once '../global_class/msNUsuarios.php';

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
    $empresa = (isset($_POST['empresa'])) ? $_POST['empresa'] : '';
    
    if(!empty($empresa)){
        $rs = validaUsuario($usuario, $senha,$empresa);

        if ($rs === true) {
            echo "concedido";
        }else{
            echo $rs;
        }
    }else{
        print 'Você deve selecionar uma empresa!';
    }
?>