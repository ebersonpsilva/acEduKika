<?php
class GSCeps {
    private $idCep;
    private $cep;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
//---------------------------------------------------------------------------//
//---------------------------------------------------------------------------//
    function getIdCep() {
        return $this->idCep;
    }

    function getCep() {
        return $this->cep;
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

    function getUf() {
        return $this->uf;
    }
//---------------------------------------------------------------------------//
//---------------------------------------------------------------------------//
    function setIdCep($idCep) {
        $this->idCep = $idCep;
    }

    function setCep($cep) {
        $this->cep = $cep;
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

    function setUf($uf) {
        $this->uf = $uf;
    }


}
