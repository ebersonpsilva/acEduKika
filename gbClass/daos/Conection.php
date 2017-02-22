<?php
class Conection {
    private $erro = '';
    private function __clone(){}

    public function __destruct() {
        $this->disconnect();
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }
    private function connect(){
        $path = $_SERVER['DOCUMENT_ROOT'];
        $arq = "config.xml";
        $arqxml = simplexml_load_file($path.$arq);
        try{
            $this->conexao = new PDO('mysql:host='.$arqxml->scm[0]->host.';dbname='.$arqxml->scm[0]->db,$arqxml->scm[0]->user,$arqxml->scm[0]->pass,array(PDO::ATTR_PERSISTENT => false));
            if(!$this->conexao)throw new Exception("Impossivel determinar sua conexão!");                
            list($nError,$drError,$msgError) = $this->conexao->errorInfo();
            $this->erro = $nError."-".$msgError."<br>";
            if($nError == 0){
                return $this->conexao;
            }else{
                return "Houve um erro na conexão: ".$this->erro;
            }
        }
        catch (PDOException $e){
            die("Problemas de Acesso: <code>" . $e->getMessage() . "</code>");
        }
    }

    private function disconnect(){
        $this->conexao = null;
    }
    public function selectDB($sql,$params = null,$class = null){
        $query=$this->connect()->prepare($sql);
        $query->execute($params);

        if(isset($class) && !empty($class)){
            list($nError,$drError,$msgError) = $query->errorInfo();
            $rs = $query->fetchAll(PDO::FETCH_CLASS,$class);
            if($drError != 0){
                $rsErros = self::logErros($drError,$msgError,$sql);
                $rs = "Houve um erro de execução no sistema: nº {$rsErros} comunique o depto. de TI";
            }else if(!$rs){
            	$rs = 0;
            }
        }else{
            $rs = $query->fetchAll(PDO::FETCH_OBJ);// or die(print_r($query->errorInfo(), true));
            if(count($rs) == 0){
            	$rs = 0;
            }
        }
        self::__destruct();
        return $rs;
    }

    /*MÃ©todo insert que insere valores no banco de dados e retorna o Ãºltimo id inserido*/
    public function insertDB($sql,$params=null){
        $conexao=$this->connect();
        $query=$conexao->prepare($sql);
        $query->execute($params);
        $rs = $conexao->lastInsertId();
        list($nError,$drError,$msgError) = $query->errorInfo();
        if($drError != 0){
            foreach($params AS $value){
                $sql.= $value."|";
            }
            $rsErros = self::logErros($drError,$msgError,$sql);
            self::__destruct();
            return "Houve um erro de execução no sistema: nº {$rsErros} comunique o depto. de TI";
        }else if($rs == 0){
            self::__destruct();
            return 0;
        }else{
            self::__destruct();
            return $rs;
        }
    }
    /*MÃ©todo update que altera valores do banco de dados e retorna o nÃºmero de linhas afetadas*/
    public function updateDB($sql,$params=null){
        $query=$this->connect()->prepare($sql);
        $query->execute($params);
        $rs = $query->rowCount();
        list($nError,$drError,$msgError) = $query->errorInfo();
        if($drError != 0){
            foreach($params AS $value){
                $sql.= $value."|";
            }
            $rsErros = self::logErros($drError,$msgError,$sql);
            self::__destruct();
            return "Houve um erro de execução no sistema: nº {$rsErros} comunique o depto. de TI";
        }else if($rs == 0){
            self::__destruct();
            return 0;
        }else{
            self::__destruct();
            return $rs;
        }
    }

    /*MÃ©todo delete que excluÃ­ valores do banco de dados retorna o nÃºmero de linhas afetadas*/
    public function deleteDB($sql,$params=null){
        $query=$this->connect()->prepare($sql);
        $query->execute($params);
        $rs = $query->rowCount();
        list($nError,$drError,$msgError) = $query->errorInfo();
        if($drError != 0){
            foreach($params AS $value){
                $sql.= $value."|";
            }
            $rsErros = self::logErros($drError,$msgError,$sql);
            self::__destruct();
            return "Houve um erro de execução no sistema: nº {$rsErros} comunique o depto. de TI";
        }else if($rs == 0){
            self::__destruct();
            return 0;
        }else{
            self::__destruct();
            return $rs;
        }
    }
    public function logErros($nError=null,$msgError=null,$sqlError=null){
        $msgError = str_replace("'","",$msgError);
        //$msgError = substr($msgError,54,1000);
        $sqlError = str_replace("'","",$sqlError);
        $sql = "INSERT INTO logErros ";
        $sql.= "VALUES (0,NOW(),'".$_SERVER['SCRIPT_NAME']." : ".$sqlError." - ".$msgError."')";
        $conexao = $this->connect();
        $query = $conexao->prepare($sql);
        $query->execute();
        //$rsE = $conexao->lastInsertId('logErros');
        $rsE = $conexao->lastInsertId();
        return $rsE;
    }
    
    public function selectCo($sql){
        $query=$this->connect()->prepare($sql);
        $query->execute();
        $col = '';
        while($rs = $query->fetch(PDO::FETCH_ASSOC)){
            foreach ($rs AS $field => $value){
                $col.= $field.'='.$value.',';
            }
        }
        self::__destruct();
        return $col;
    }
}
