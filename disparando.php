<?php

$cpf= "08187678712";
$uso= "08187678712";
$cpf= "12345678912";
 

if (!$cpf):
        trigger_error("Informe seu CPF",E_USER_NOTICE);
    elseif($cpf == "500"):
        trigger_error("Formato não é mais utilizado", E_USER_DEPRECATED);
    elseif($cpf == $uso):
        trigger_error("CPF em uso",E_USER_WARNING);
    elseif(!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
        trigger_error("CPF informado é inválido",E_USER_ERROR);
    else:

        echo "CPF VÁLIDO!";
    
endif;

echo ":)";

echo "<hr>";

function Erro($Erro,$Mensagem,$Arquivo,$Linha){
    $erro = ($Erro == E_USER_ERROR ? 'red' : $Erro == E_USER_WARNING ? 'darkorange' : 'blue' );
    echo "<p style='color={$erro}'>Erro na linha #{$Linha} Mensagem: {$Mensagem}<br>";
    
    echo "<small>{$Arquivo}</small></p>";
    if($Erro == E_USER_ERROR){
        die();
    }
}

set_error_handler('Erro');


$cpf= "08187678712";
$uso= "08187678712";
//$cpf= "adfasfd";
 

if (!$cpf):
        trigger_error("Informe seu CPF",E_USER_NOTICE);
    elseif($cpf == "500"):
        trigger_error("Formato não é mais utilizado", E_USER_DEPRECATED);
    elseif($cpf == $uso):
        trigger_error("CPF em uso",E_USER_WARNING);
    elseif(!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
        trigger_error("CPF informado é inválido",E_USER_ERROR);
    else:

        echo "CPF VÁLIDO!";
    
endif;

echo ":)";
?>