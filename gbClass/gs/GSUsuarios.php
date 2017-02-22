<?php
class GSUsuarios {
    private $idUsuario;
    private $nome;
    private $email;
    private $senha;
    private $cep;
    private $telefone;
    private $celular;
    private $endereco;
    private $bairro;
    private $cidade;
    private $numero;
    private $complemento;
    private $dtCadastro;
    private $dtExclusao;
    private $idUsuarioExclusao;
    private $status;
//----------------------------------------------------------------------------//
//----------------------------------------------------------------------------//
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getCep() {
        return $this->cep;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getDtCadastro() {
        return $this->dtCadastro;
    }

    function getDtExclusao() {
        return $this->dtExclusao;
    }

    function getIdUsuarioExclusao() {
        return $this->idUsuarioExclusao;
    }

    function getStatus() {
        return $this->status;
    }
//----------------------------------------------------------------------------//
//----------------------------------------------------------------------------//
    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setDtCadastro($dtCadastro) {
        $this->dtCadastro = $dtCadastro;
    }

    function setDtExclusao($dtExclusao) {
        $this->dtExclusao = $dtExclusao;
    }

    function setIdUsuarioExclusao($idUsuarioExclusao) {
        $this->idUsuarioExclusao = $idUsuarioExclusao;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}
