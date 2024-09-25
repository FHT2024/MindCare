<?php
$HOST = 'Localhost';
$USER = 'root';
$PASS = '';
$BASE = 'loginsys';

$conexao = new mysqli($HOST, $USER, $PASS, $BASE);


echo $HOST;
echo $USER;
echo $PASS;
echo $BASE;

//if ($conexao->connect_errno) {
//    echo "Erro";
//} else {
//    echo "Conexão Efetuada com Sucesso";
//}
