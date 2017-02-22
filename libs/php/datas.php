<?php
class datas {
    function is_date($data) { //passar data formato americano
        $ano   = substr($data, 0, 4);
        $mes   = substr($data, 5, 2);
        $dia   = substr($data, 8, 2);
        if(!checkdate($mes,$dia,$ano)) {
                return false;
        }
    }

    function datetodata($data, $caracter) {
        $ano   = substr($data, 0, 4);
        $mes   = substr($data, 5, 2);
        $dia   = substr($data, 8, 2);
        return($dia.$caracter.$mes.$caracter.$ano);
    }

    function datatodate($data, $caracter) {
        $ano   = substr($data, 6, 4);
        $mes   = substr($data, 3, 2);
        $dia   = substr($data, 0, 2);
        return($ano.$caracter.$mes.$caracter.$dia);
    }

    function mes($numero) {
        $meses  = array('', 'Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        return $meses[$numero];
    }

    function dia($dia) {
        $dias_semana = array('Domingo', 'Segunda-feira', 'Ter&ccedil;a-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'S&aacute;bado');
        return $dias_semana[$dia];
    }

    function listar_dia($tipo) {
        echo '<option value="" class="destaquecombo">SELECIONE</option>'."\n";
        if ($tipo == 1) {
            for ($x = 1; $x <= date('t'); $x ++) {
                            echo '<option value="'.$x.'">'.$x.'</option>'."\n";
            }
        }else {
            $dias_semana = array('Domingo', 'Segunda-feira', 'Ter&ccedil;a-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'S&aacute;bado');
            for ($x = 0; $x <= 6; $x ++) {
                    echo '<option value="'.$dias_semana[$x].'">'.$dias_semana[$x].'</option>'."\n";
            }
        }
    }

    function listar_mes($tipo) {
        echo '<option value="" class="destaquecombo">SELECIONE</option>'."\n";		
        if ($tipo == 1) {
                for ($x = 1; $x <= 12; $x ++) {
                                echo '<option value="'.$x.'">'.$x.'</option>'."\n";
                }
        }else {
                $meses  = array('', 'Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
                for ($x = 1; $x <= 12; $x ++) {
                        echo '<option value="'.$meses[$x].'">'.$meses[$x].'</option>'."\n";
                }
        }
    }

    function selecionar_dia($tipo) {
        echo '<option value="" class="destaquecombo">SELECIONE</option>'."\n";
        if ($tipo == 1) {
            for ($x = 1; $x <= date('t'); $x ++) {
                if ($x ==  date('d')) {
                        echo '<option value="'.$x.'" selected>'.$x.'</option>'."\n";
                }else {
                        echo '<option value="'.$x.'">'.$x.'</option>'."\n";
                }
            }
        }else {
            $dias_semana = array('Domingo', 'Segunda-feira', 'Ter&ccedil;a-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'S&aacute;bado');
            for ($x = 0; $x <= 6; $x ++) {
                if ($x ==  date('w')) {
                    echo '<option value="'.$dias_semana[$x].'" selected>'.$dias_semana[$x].'</option>'."\n";
                }else {
                    echo '<option value="'.$dias_semana[$x].'">'.$dias_semana[$x].'</option>'."\n";
                }
            }
        }
    }

    function selecionar_mes($tipo) {
        echo '<option value="" class="destaquecombo">SELECIONE</option>'."\n";
        if ($tipo == 1) {
            for ($x = 1; $x <= 12; $x ++) {
                if ($x == date('m')) {
                    echo '<option value="'.$x.'" selected>'.$x.'</option>'."\n";
                }else {
                    echo '<option value="'.$x.'">'.$x.'</option>'."\n";
                }
            }
        }else {
            $meses  = array('', 'Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
            for ($x = 1; $x <= 12; $x ++) {
                if ($x == date('m')) {
                    echo '<option value="'.$meses[$x].'" selected>'.$meses[$x].'</option>'."\n";
                }else {
                    echo '<option value="'.$meses[$x].'">'.$meses[$x].'</option>'."\n";
                }
            }
        }
    }

    function listar_ano($opcao, $inicio, $quantidade) {
        echo '<option value="" class="destaquecombo">SELECIONE</option>'."\n";
        if ($opcao == 1)  {
            for ($x = $inicio + $quantidade; $x >= $inicio; $x --) {
                echo '<option value="'.$x.'">'.$x.'</option>'."\n";
            }
        }else {
            for ($x = $inicio; $x <= $inicio + $quantidade; $x ++) {
                echo '<option value="'.$x.'">'.$x.'</option>'."\n";
            }
        }
    }

    function selecionar_ano($opcao, $inicio, $quantidade) {
            echo '<option value="" class="destaquecombo">SELECIONE</option>'."\n";
            if ($opcao == 1)  {
                    for ($x = $inicio + $quantidade; $x >= $inicio; $x --) {
                            if ($x == date('Y')) {
                                    echo '<option value="'.$x.'" selected>'.$x.'</option>'."\n";
                            }else {
                                    echo '<option value="'.$x.'">'.$x.'</option>'."\n";
                            }
                    }
            }else {
                    for ($x = $inicio; $x <= $inicio + $quantidade; $x ++) {
                            if ($x == date('Y')) {
                                    echo '<option value="'.$x.'" selected>'.$x.'</option>'."\n";
                            }else {
                                    echo '<option value="'.$x.'">'.$x.'</option>'."\n";
                            }
                    }
            }
    }

    function selecionar_hora() {
            for ($x = 00; $x <= 23; $x ++) {
                    if ($x == date('H')) {
                                    if (strlen($x) == 1) {
                                            $x = '0'.$x;
                                    }
                                    echo '<option value="'.$x.'" selected>'.$x.'</option>'."\n";
                            }else {
                                    if (strlen($x) == 1) {
                                            $x = '0'.$x;
                                    }
                                    echo '<option value="'.$x.'">'.$x.'</option>'."\n";
                            }
            }
    }

    function selecionar_minutos() {
            for ($x = 0; $x <= 59; $x ++) {
                    if ($x == date('i')) {
                                    if (strlen($x) == 1) { 
                                            $x = '0'.$x;
                                    }
                                    echo '<option value="'.$x.'" selected>'.$x.'</option>'."\n";
                            }else {
                                    if (strlen($x) == 1) { 
                                            $x = '0'.$x;
                                    }
                                    echo '<option value="'.$x.'">'.$x.'</option>'."\n";
                            }
            }
    }

    function selecionar_segundos() {
            for ($x = 0; $x <= 59; $x ++) {
                    if ($x == date('s')) {
                                    if (strlen($x) == 1) { 
                                            $x = '0'.$x;
                                    }
                                    echo '<option value="'.$x.'" selected>'.$x.'</option>'."\n";
                            }else {
                                    if (strlen($x) == 1) {
                                            $x = '0'.$x;
                                    }
                                    echo '<option value="'.$x.'">'.$x.'</option>'."\n";
                            }
            }
    }

    function diferenca_data($data1, $data2) {
            $segundos  = strtotime($data2)-strtotime($data1);
            $dias      = (integer)round(round(($segundos/86400),2),0);
            $horas     = intval($segundos/3600);
            $segundos -= $horas * 3600;
            $minutos   = intval($segundos/60);
            $segundos -= $minutos * 60;
            $anos = floor($dias / 365.25);
            return array($dias, $horas, $minutos, $segundos, $anos);
    }

/*Retorna uma nova data, entre 'a primeira data e o intervalo de dias' no formato anti-herois*/
    function adicionar_data_hora($data, $qtddias) {//ou retirar
            /*
                    Windows:  Timestamp Negativos nao sao suportados dentro de uma versao conhecida de Windows.
                    Portanto a faixa de anos validos inclui apenas 1970 a 2038.
                    fora desta data ate o momento so o unix trata isto e ate 2069
            */
            $ano   = intval(substr($data, 6, 4));
            $mes   = intval(substr($data, 3, 2));
            $dia   = intval(substr($data, 0, 2));
            if((integer)$ano>2037) {
                    $ano = intval(substr($ano, 2, 2));
            }
            $dia   = $dia + intval($qtddias);
            //echo "falta arrumar o eero aqui do pedido 300305".mktime (0,0,0, $mes, $dia, $ano);
            return date("d/m/Y", mktime (0,0,0, $mes, $dia, $ano));
    }

    function intervalo_semana($data) {
            $dia = (integer)substr($data,0,2);
            $mes = (integer)substr($data,3,2);
            $ano = (integer)substr($data,6,4);

            while(date("w", mktime(0,0,0, $mes, $dia, $ano))!=0) {
                    date("w", mktime(0,0,0, $mes, $dia, $ano))."-";
                    $dia--;
                    if($dia<=0) { //caso for 01/01 tem q haver esta parte para nao ir para 0 e sim para 31
                            $mes--;
                            if($mes<=0) { //caso for 01/01/2005 tem q haver esta parte para nao ir para 0 e sim para 31/12/2004
                                    $mes=12;
                                    $ano--;
                            }
                            $dia=date("t", mktime(0,0,0, $mes, 1, $ano));
                    }
            }
            if(strlen($dia)==1) { $dia='0'.$dia; }
            if(strlen($mes)==1) { $mes='0'.$mes; }
            $datas[0]=$dia.'/'.$mes.'/'.$ano;
            $datas[1]=data::adicionar_data_hora($datas[0], 6);
            return $datas;
    }

    function numero_semana($dia, $mes, $ano) {
            $dia = (integer)$dia;
            $mes = (integer)$mes;
            $ano = (integer)$ano;
            if(date("w", mktime(0,0,0, $mes, $dia, $ano)) == 0) { // retorna a representacao numerica do dia da semana 0 (para Domingo) a 6 (para Sabado)
                    return date("W", mktime(0,0,0,$mes,++$dia,$ano));
            }else {
                    return date("W", mktime(0,0,0,$mes,$dia,$ano));
            }

/*
//14-11-2004
                    $semana=0;
//Aqui vai do mes 1 - janeiro ate o mes que o usuario passar por parametro
                    for($i=1;$i<=$mes;$i++) {
                            $qtde_dia = date("t", mktime(0,0,0, $i, 1, $ano));//retorna o numero de dias do mes de 28 a 31 dias
//Vai do dia 1 do mes corrente que esta no loop ate o numero de dias daquele mes
                            for($j=1;$j<=$qtde_dia;$j++) {
/*Aqui significa que ele ja vasculhou todos os meses e dias ate aonde o
usuario passou por parametro, dai incrementa um a mais para semana e sai fora
do laco
                                    if($i==$mes && $j==$dia) {
                                            $j = 32;
                                            $i = 13;
                                    }else {
//Quando a semana chega igual a domingo entao ele soma 1 a mais para semana
                                            if(date("w", mktime(0,0,0, $i, $j, $ano)) == 0) { // retorna a representacao numerica do dia da semana 0 (para Domingo) a 6 (para Sabado)
                                                    $semana ++;
                                            }
                                    }
                            }
                    }
                    return $semana;
*/
    }

    function detalhe_data($data) {
            $meses     = array('', 'Janeiro', 'Fevereiro', 'Mar&ccedil;o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
            $dias      = array('Domingo', 'Segunda-feira', 'Ter&ccedil;a-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'S&aacute;bado');
            $dia       = substr($data, 0, 2);
            $mes       = substr($data, 3, 2);
            $ano       = substr($data, 6, 4);
            $tempo     = mktime(0, 0, 0, $mes, $dia, $ano);
            $qtde_dias = date('t', mktime(0, 0, 0, $mes, $dia, $ano));
            $data      = getdate($tempo);
            $nome_mes  = $meses[$data['mon']];
            $nome_dia  = $dias[$data['wday']];
            return array($nome_mes, $nome_dia, $data['wday'], $qtde_dias);
    }

    function calendario($ano = '', $mes = '') {
            $mes = !$mes ? date('m') : $mes;
            $ano = !$ano ? date('Y') : $ano;
            list($nome_mes, $nome_dia) = $this->detalhe_data(date('d-m-Y'));
            $resultado.='<table width="350" border="0" cellspacing="1" cellpadding="1" align="center">
                            <tr class="atencao" align="center">
                                    <td colspan="7">'.$nome_dia." ".date('d')." de ".$nome_mes." de ".date('Y').'</td>
                                            <tr class="linhacabecalho" align="center">
                                                    <td>Dom:</td>
                                            <td>Seg:</td>
                                            <td>Ter:</td>
                                            <td>Qua:</td>
                                                    <td>Qui:</td>
                                            <td>Sex:</td>
                                                    <td>Sab:</td>
                                    </tr>';
            $dia      = 1;
            $contador = 0;
            while ($dia <= cal_days_in_month(1, $mes, $ano)) {
                    if ($contador % 2 == 0) {
                            $css = 'linhanormalforte';
                    }else {
                            $css = 'linhanormal';
                    }
                    $resultado.= '<tr class="'.$css.'" onmouseover="sobre_celula(this)" onmouseout="fora_celula(this)">';
                    for ($x = 0; $x <= 6; $x ++) {
                            if ($dia <= cal_days_in_month(1, $mes, $ano)) {
                                    if (date('w', mktime(0, 0, 0, $mes, $dia, $ano)) == $x) {
                                            $dia = strlen($dia) <= 1 ? 0 . $dia : $dia;
                                            $mes = strlen($mes) <= 1 ? 0 . $mes : $mes;
                                            $resultado.='<td align="center" width="50">'.$dia ++.'</td>';
                                    }else {
                                            $resultado.= '<td></td>';
                                    }
                            }
                    }
                    $resultado.= '</tr>';
                    $contador ++;
            }
            $resultado.= "</table>";
            echo $resultado;
    }
    function calculo_horas($tipo_operacao,$hora_inicial,$hora_final)
    {
            if($tipo_operacao == "calculo_horas")
            {
                    $sql = "select TIMEDIFF('".$hora_final.":00','".$hora_inicial.":00') as hora from vw_funcionario limit 1";
                    $executa_hora = mysql_query($sql);
                    $hora = mysql_result($executa_hora,0,0);
                    return $hora;
            }
    }
    protected static function geraTimestamp($data) {
        $partes = explode('/', $data);
        return mktime(0, 0, 0, $partes[1], $partes[0], $partes[2]);
    }
    function calcDias($data_inicial,$data_final){
        $time_inicial = self::geraTimestamp($data_inicial);
        $time_final = self::geraTimestamp($data_final);
        $diferenca = $time_final - $time_inicial;
        $dias = (int)round($diferenca / (60 * 60 * 24),0); // 225 dias
        return $dias;
    }
    function calcAnos($data_inicial,$data_final){
        $time_inicial = self::geraTimestamp($data_inicial);
        $time_final = self::geraTimestamp($data_final);
        $diferenca = $time_final - $time_inicial;
        $dias = (int)round($diferenca / (60 * 60 * 24),0); // 225 dias
        $anos = floor($dias / 365.25);
        return $anos;
    }
    protected static function anoBissesto($data){
        $ano = substr($data, 6, 4);
        $mes = substr($data, 3, 2);
        $dia = substr($data, 0, 2);
        if(($ano % 4) == 0 && ($ano % 100) != 0){
            return true;
        }else if(($ano % 400) == 0){
            return true;
        }else{
            return false;
        }
    }
    function diaDoMes($data){
        $mes = substr($data, 3, 2);
        $dia = substr($data, 0, 2);
        switch($mes){ 
            case "01":case "03":case "05":case "07":case "08":case "10":case "12":
                if($dia >= "1" && $dia <= "31")
                    return TRUE;
                else
                    return FALSE;
                break; 
            case "02":
                if(self::anoBissesto($data)){
                    if($dia >= "1" && $dia <= "29"){return TRUE;}
                    else{return FALSE;}
                }else{
                    if($dia >= "1" && $dia <= "28"){return TRUE;}
                    else{return FALSE;}
                }
                break;
            case "04": case "06": case "09": case "11": 
                if($dia >= "1" && $dia <= "30")
                    return TRUE;
                else
                    return FALSE;
                break; 
        } 
    }
}
