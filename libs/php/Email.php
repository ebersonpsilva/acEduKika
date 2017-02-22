<?php
class Email{
    public $nCorretor;
    public $nCliente;
    public $dtDigitacao;
    public $mensagem;
    public $assunto;
    public $obs;
    public $eCorretor;
    public $eGerente;
    public $nProposta;
    public $taxa;
    public $operadora;
    public $vrMensal;
    public $idOperadora;
    public $descricao;
//-------------------------------------------//
//-------------------------------------------//
    public function getIdOperadora() {
        return $this->idOperadora;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setIdOperadora($idOperadora) {
        $this->idOperadora = $idOperadora;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

        public function getNCorretor() {
        return $this->nCorretor;
    }

    public function getNCliente() {
        return $this->nCliente;
    }

    public function getDtDigitacao() {
        return $this->dtDigitacao;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function getObs() {
        return $this->obs;
    }

    public function getECorretor() {
        return $this->eCorretor;
    }

    public function getEGerente() {
        return $this->eGerente;
    }

    public function getIndicaoReferencia() {
        return $this->indicaoReferencia;
    }

    public function getReenvioIndicacao() {
        return $this->reenvioIndicacao;
    }

    public function setNCorretor($nCorretor) {
        $this->nCorretor = $nCorretor;
    }

    public function setNCliente($nCliente) {
        $this->nCliente = $nCliente;
    }

    public function setDtDigitacao($dtDigitacao) {
        $this->dtDigitacao = $dtDigitacao;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    public function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }

    public function setECorretor($eCorretor) {
        $this->eCorretor = $eCorretor;
    }

    public function setEGerente($eGerente) {
        $this->eGerente = $eGerente;
    }

    public function setIndicaoReferencia($indicaoReferencia) {
        $this->indicaoReferencia = $indicaoReferencia;
    }

    public function setReenvioIndicacao($reenvioIndicacao) {
        $this->reenvioIndicacao = $reenvioIndicacao;
    }
    public function getNProposta() {
        return $this->nProposta;
    }

    public function getTaxa() {
        return $this->taxa;
    }

    public function getOperadora() {
        return $this->operadora;
    }

    public function getVrMensal() {
        return $this->vrMensal;
    }

    public function setNProposta($nProposta) {
        $this->nProposta = $nProposta;
    }

    public function setTaxa($taxa) {
        $this->taxa = $taxa;
    }

    public function setOperadora($operadora) {
        $this->operadora = $operadora;
    }

    public function setVrMensal($vrMensal) {
        $this->vrMensal = $vrMensal;
    }
//-------------------------------------------//
//-------------------------------------------//
    public function BorderoEntrega(){
        $rs = self::enviarFormulario();
        return $rs;
    }
    private function enviarFormulario(){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'mail.casadocorretor.net.br';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPDebug = false;
        $mail->Username = "no-replay@casadocorretor.net.br";
        $mail->Password = "mktcdc";
        $mail->SetLanguage("br", "../PHPMailer/language/");

        $mail->From = "no-replay@casadocorretor.net.br";
        $mail->FromName = "Casa do Corretor";
        $mail->AddAddress($this->getECorretor());
        $mail->AddBCC($this->getEGerente());
        //$mail->AddReplyTo("faleconosco@casadocorretor.net", "Informação");
        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        $mail->Subject = $this->getAssunto();
        $mail->Body    = $this->getMensagem();

        if(!$mail->Send()) {
            $this->descricao = "ERRO AO ENVIAR E-MAIL: ".$mail->ErrorInfo." - ".date("d/m/Y H:i:s");
            self::salva_log();
            return false;
            //print $this->geDescricao();
        }
        else{
            $this->descricao = "Enviado com Sucesso - ".date("d/m/Y H:i:s");
            //self::salva_log();
            return true;
            //print "Enviado com sucesso!";
        }
    }
    private function salva_log() {
        $le = new logEmail();
        $fields = "idOperadora,nProposta,nCliente,eCorretor,descricao";
        $params = array(
            $this->getOperadora(),
            $this->getNProposta(),
            $this->getNCliente(),
            $this->getECorretor(),
            $this->getDescricao());
        $le->insert($fields, $params);
    }
}
