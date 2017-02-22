<?php
class GSFiliais {
    private $idFilial;
    private $cnpj;
    private $razaoSocial;
    private $nomeFilial;
    private $responsavel;
    private $idCep;
    private $numero;
    private $complemento;
    private $contato;
    private $email;
    private $telefone;
    private $celular;
    private $matriz;
    private $ukey;
    private $endereco;
    private $bairro;
    private $cidade;
    private $status;
    private $dtCadastro;
    private $dtExclusao;
    private $idUsuarioExclusao;
//----------------------------------------------------------------------------//
//----------------------------------------------------------------------------//

    function getIdFilial() {
        return $this->idFilial;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getRazaoSocial() {
        return $this->razaoSocial;
    }

    function getNomeFilial() {
        return $this->nomeFilial;
    }

    function getResponsavel() {
        return $this->responsavel;
    }

    function getIdCep() {
        return $this->idCep;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getContato() {
        return $this->contato;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCelular() {
        return $this->celular;
    }

    function getMatriz() {
        return $this->matriz;
    }

    function getUkey() {
        return $this->ukey;
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
    
	function getStatus(){
		return $this->status;
	}
	public function getDtCadastro(){
		return $this->dtCadastro;
	}
	public function getDtExclusao(){
		return $this->dtExclusao;
	}
	public function getIdUsuarioExclusao(){
		return $this->idUsuarioExclusao;
	}
//----------------------------------------------------------------------------//
//----------------------------------------------------------------------------//
    function setIdFilial($idFilial) {
        $this->idFilial = $idFilial;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    function setNomeFilial($nomeFilial) {
        $this->nomeFilial = $nomeFilial;
    }

    function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

    function setIdCep($idCep) {
        $this->idCep = $idCep;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setContato($contato) {
        $this->contato = $contato;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setMatriz($matriz) {
        $this->matriz = $matriz;
    }

    function setUkey($ukey) {
        $this->ukey = $ukey;
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

	function setStatus($status){
		$this->status = $status;
	}
	
	public function setDtCadastro($dtCadastro){
		$this->dtCadastro = $dtCadastro;
	}
	
	public function setDtExclusao($dtExclusao){
		$this->dtExclusao = $dtExclusao;
	}
	
	public function setIdUsuarioExclusao($idUsuarioExclusao){
		$this->idUsuarioExclusao = $idUsuarioExclusao;
	}
}
