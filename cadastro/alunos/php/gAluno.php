<?php
    require_once '../../../gbClass/daos/Conection.php';
    require_once '../../../gbClass/interfaces/iCrud.php';
    
    require_once '../../../gbClass/gs/GSFiliais.php';
    
    require_once '../../../gbClass/daos/Filiais.php';
    
    require_once '../../../libs/php/datas.php';
    require_once '../../../libs/php/checkDocumento.php';
    require_once '../../../libs/php/acentuacao.php';
    
    $fl = new Filiais();
    
    @$idCep = $_POST['idCep'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    @$contato = $_POST['contato'];
    $telefone = $_POST['telefone'];
    $ukey = $_POST['ukey'];
    $erro = '';
    $res = array();
   
    (isset($_POST['quis']) && $_POST['quis'] == 1) ? $matriz = $_POST['quis'] : $matriz = 0;
    (isset($_POST['razaoSocial'])) ? $razaoSocial = rAcentos($_POST['razaoSocial']) : $erro.= "* <div id='mRazaoSocial'>A RAZÃO SOCIAL deve ser preenchida.</div><br/>";
    (isset($_POST['responsavel'])) ? $responsavel = rAcentos($_POST['responsavel']) : $erro.= "* <div id='mResponsavel'>O RESPONSAVEL deve ser preenchido.</div><br/>";
    
    if(isset($_POST['cnpj'])){
        $cnpj = $_POST['cnpj'];
        $dc = new ValidaCPFCNPJ($cnpj);
        ($dc->valida()) ? $cnpj = $_POST['cnpj'] : $erro.= '<div id="mCnpj">* CNPJ inválido!</div>';
    }else{
        $erro.= "* <div id='mCnpj'>O CNPJ deve ser preenchido.</div><br/>";
    }
    
    if(isset($_POST['celular'])){
        $digito = strlen($_POST['celular']);
        $numCelular = str_replace("_",'',substr($_POST['celular'],5,$digito));
        $priDigito = substr($numCelular,0,1);
        if($priDigito != 9 || strlen($numCelular) != 10){
            $erro.= "<div id='mCelular'>O número do <b>CELULAR</b> não foi digitado corretamente!</div><br/>";
        }else{
            $celular = trim($_POST['celular']);
        }
    }else{
        $erro.= "* <div id='mCelular'>O CELULAR deve ser preenchido.</div><br/>";
    }
    
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro.= "* <div id='mEmail'>O EMAIL não é valido ou não foi digitado corretamente.</div><br/>";
        }
    }else{
        $erro.= "* <div id='mEmail'>O EMAIL deve ser preenchido.</div><br/>";
    }
    
    if(empty($erro)){
        $fields = "idFilial,cnpj,razaoSocial,responsavel,idCep,";
        $fields.= "numero,complemento,contato,email,telefone,celular,matriz,";
        $fields.= "ukey";
        
        $params = array(
            0,$cnpj,$razaoSocial,$responsavel,$idCep,
            $numero,$complemento,' ',$email,$telefone,$celular,$matriz,
            $ukey
        );
        $rs = $fl->insert($fields, $params);
        if(is_numeric($rs) && $rs > 0){
            $res['rs'] = 1;
            $res['msg'] = 'Dados foram gravados!';
        }elseif($rs == 0){
            $res['rs'] = 2;
            $res['msg'] = 'Dados não foram gravados, ocorreu um erro de excessão!';
        }else{
            $res['rs'] = 0;
            $res['msg'] = $rs;            
        }
        
    }else{
        $res['rs'] = 0;
        $res['msg'] = $erro;
    }
    print json_encode($res);