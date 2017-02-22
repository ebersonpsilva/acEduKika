<?php
class Base{
    protected static $cod = '_CdC';
    private $decode;
    private $var;
    public $rs;
    public function baseD($dados){
        $this->decode = base64_decode($dados);
        $this->rs = explode("_",  $this->decode);
        return $this->rs[0];
    }
    function baseE($dados){
        $this->var = $dados.self::$cod;
        $this->rs = base64_encode($this->var);
        return $this->rs;
    }
}