<?php
class Filiais extends Conection implements iCrud{
    protected static $nomeTabela = 'Filiais';
    
    public function delete($where = null, $params = null) {
        $tabela = self::$nomeTabela;
        $sql = "DELETE FROM {$tabela}";
        if(isset($where)) $sql .= " WHERE $where";
        $result = $this->deleteDB($sql,$params);
        return $result;
    }

    public function insert($fields, $params = null) {
        $tabela = self::$nomeTabela;
        $numparams="";
        for($i=0; $i<count($params); $i++) $numparams.=",?";
        $numparams = substr($numparams,1);
        $sql = "INSERT INTO {$tabela} ($fields) VALUES ($numparams)";
        $result = $this->insertDB($sql,$params);
        return $result;
    }

    public function load($fields = "*", $add = "",$params = null) {
        $tabela = self::$nomeTabela;
        if(strlen($add)>0) $add = " ".$add;
        $sql = "SELECT $fields FROM {$tabela} $add";
        $result = $this->selectDB($sql,$params,'GS'.$tabela);
        return $result;
    }

    public function update($fields, $params = null, $where = null) {
        $tabela = self::$nomeTabela;
        $fields_T="";
        for($i=0; $i<count($fields); $i++) $fields_T.=", $fields[$i] = ?";
        $fields_T = substr($fields_T,2);
        $sql = "UPDATE {$tabela} SET $fields_T";
        if(isset($where)) $sql .= " WHERE $where";
        $result = $this->updateDB($sql,$params);
        return $result;
    }

    public function loadCol($fields = "*", $add = "") {
        
    }
}
