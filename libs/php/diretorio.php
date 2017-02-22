<?php
    function Novo($diretorio){
        mkdir($diretorio, 0777, true);
    }
    function Renomear($diretorio,$nDiretorio){
        if(is_dir($diretorio)){
            rename($diretorio,$nDiretorio);
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function Deletar($diretorio){
        $result = LimparDiretorio($diretorio);
        if($result == TRUE){
            rmdir($diretorio);
            print 'Diretorio excluido';
        }else{
            print 'Diretorio não foi excluido';
        }
    }
    function LimparDiretorio($caminho){
        if(is_dir($caminho)){
            $diretorio = dir($caminho);
            while($arquivo = $diretorio->read()){
                if(($arquivo != '.') && ($arquivo != '..')){
                    unlink($caminho.$arquivo);
                    //echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';
                }
            }
            $diretorio->close();
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function existeDiretorio($caminho){
        if(is_dir($caminho)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function VerificaDiretorio($caminho){
        if(!is_dir($caminho)){
            return FALSE;
        }else{
            $scan = scandir($caminho);
            if(count($scan) > 2){
                foreach ($scan AS $key=>$val){
                    $e = explode('.',$val);
                    switch ($e[1]){
                        case 'jpg':case 'jpeg': case 'pdf': case 'tif': case 'tiff': case 'JPG': case 'JPEG': case 'PDF': case 'TIF': case 'TIFF':
                            return TRUE;
                            break;
                    }
                }
                return FALSE;
            }else{
                return FALSE;
            }
        }
    }