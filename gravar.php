<?php

echo "<h3> Recuperando Dados</h3>";
$nome = $_POST['nome'];
$email = $_POST['e-mail'];
$nomeMae = $_POST['nomeMae'];
$nomePai = $_POST['nomePai'];
$universidade = $_POST['uni'];
$curso = $_POST['curso'];
$nacionalidade = $_POST['naci'];
$rg = $_POST['rg'];
$oExp = $_POST['oExp'];
$dtExp = $_POST['dtExp'];
$cpf = $_POST['cpf'];
$cep =  $_POST['cep'];
$uf = $_POST['uf'];
$muni = $_POST['muni'];
$tpLogra = $_POST['tpLogra'];
$end = $_POST['end'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$tel = $_POST['tel'];
$date = $_POST['date'];
$time = $_POST['time'];

echo "<b> Nome: </b>".$nome;
echo "<br>";
echo "<br> E-mail: </b>".$email;
echo "<br>";
echo "<br> Nome Mae: </b>".$nomeMae;
echo "<br>";
echo "<br> Nome Pai: </b>".$nomePai;
echo "<br>";
echo "<br> Universidade: </b>".$universidade;
echo "<br>";
echo "<br> Curso: </b>".$curso;
echo "<br>";
echo "<br> Nacionalidade: </b>".$nacionalidade;
echo "<br>";
echo "<br> RG: </b>".$rg;
echo "<br>";
echo "<br> Orgao de Expedicao: </b>".$oExp;
echo "<br>";
echo "<br> Data de Expedicao: </b>".$dtExp;
echo "<br>";
echo "<br> CEP: </b>".$cep;
echo "<br>";
echo "<br> UF: </b>".$uf;
echo "<br>";
echo "<br> Municipio: </b>".$muni;
echo "<br>";
echo "<br> Tipo Logradouro: </b>".$tpLogra;
echo "<br>";
echo "<br> Endereco: </b>".$end;
echo "<br>";
echo "<br> Numero: </b>".$num;
echo "<br>";
echo "<br> Bairro: </b>".$bairro;
echo "<br>";
echo "<br> Telefone: </b>".$tel;
echo "<br>";
echo "<br> Data: </b>".$date;
echo "<br>";
echo "<br> Hora: </b>".$time;
echo "<br>";
?>