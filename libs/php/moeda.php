<?php
class moeda {
    public function reais($valor){
        if(strripos($valor, ".")){
            $valor = number_format($valor,2,',','');
        }elseif(strripos($valor,",")){
            $valor = str_replace(",",".",$valor);
        }else{
            $valor = number_format($valor,2,',','');
        }
        return $valor;
    }
}
