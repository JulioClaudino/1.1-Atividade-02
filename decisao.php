<?php

#Estrutura de decisão

function aumentarEstoque($valor) {
    if(!is_numeric($valor)){
        echo 'não é numérico';
    }

    if ($valor > 0 && $valor <1000) {
        $atualEstoque += $valor;
    } elseif ($valor > 1000) {
        echo "valor muito alto";
    } else {
        echo "valor inválido";
    }
}

//validar se o valor é numerico



$produto->aumentarEstoque("bolo");

//se o valor é diferente de 0
//se o valor é maior de 0