<?php
class Information_Schema extends Conection{
	protected static $nomeTabela = 'Information_Schema.COLUMNS';
	//protected static $class = 'GSInformation_Schema';
	private $id;
	private $field;
	private $bd;
	private $tb;
	
	public function getId(){
		return $this->$id;
	}
	public function getField(){
		return $this->field;
	}
	public function getBd(){
		return $this->bd;
	}
	public function getTb(){
		return $this->tb;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	public function setField($field){
		$this->field = $field;
	}
	public function setBd($bd){
		$this->bd = $bd;
	}
	public function setTb($tb){
		$this->tb = $tb;
	}
		
	function __construct($id,$field,$bd,$tb) {
		$this->id = $id;
		$this->field = $field;
		$this->bd = $bd;
		$this->tb = $tb;
	}
	
	private function load($fields = "*", $add = "",$params = null,$class = null) {
		$tabela = self::$nomeTabela;
		//$classe = self::$class;
		if(strlen($add)>0) $add = " ".$add;
		$sql = "SELECT $fields FROM {$tabela} $add";
		$result = $this->selectDB($sql,$params,$class);
		return $result;
	}
	
	private function consultaCad(){
		$params = array($this->getField(),$this->getBd());
		$add = "WHERE COLUMN_NAME = ? ";
		$add.= "AND TABLE_SCHEMA = ?";
		$rs = self::load("*",$add,$params,'GSInformation_Schema');
		$res = false;
		if(is_array($rs)){
			foreach($rs AS $value){
				if($value->getTABLE_NAME() != $this->getTb()){
					$fields = $this->getField();
					$params = array($this->id);
					$add = "WHERE ".$this->getField()." = ?";
					$rs = $this->load($fields,$add,$params);
					
					if(is_array($rs)){
						$res = true;
						break;
					}
				}
			}
		}
		return $res;
	}
	
	public function analise(){
		$rs = self::consultaCad();
		return $rs;
	}
	
}