<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123456789';
$dbName = 'alegria';

$conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if ($conexao->connect_errno){
die("ERRO NA CONEXÃO:" . $conexao->connect_error);

}
$id_locacao =$_POST['id_locacao'];
$nome_cliente=$_POST['nome_cliente'];
$data_evento=$_POST['data_evento'];
$horario_inicio=$_POST['horario_inicio'];
$horario_fim=$_POST['horario_fim'];
$tipo_evento=$_POST['tipo_evento'];
$quantidade_convidados=$_POST['quantidade_convidados'];
$valor_locacao=$_POST['valor_locacao'];
$status_locacao=$_POST['status_locacao'];
$observacoes=$_POST['observacoes'];

$sql= "INSERT INTO locacoes (id_locacao,nome_cliente,data_evento,horario_inicio,horario_fim,tipo_evento,quantidade_convidados,valor_locacao,status_locacao,observacoes) VALUES ('$id_locacao','$nome_cliente','$data_evento','$horario_inicio','$horario_fim','$tipo_evento','$quantidade_convidados','$valor_locacao','$status_locacao','$observacoes')";
if($conexao->query($sql)===TRUE){
    echo "Locação cadastrada com sucesso!!!";
}
else{
    echo "Erro ao Cadastrar: ". $conexao->error;
}
$conexao->close();
?>


