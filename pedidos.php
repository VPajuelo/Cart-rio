<?php 
require_once('conexao/conecta.php');

if (isset($_POST['inserir']) && $_POST['inserir'] === 'insere_pedido')  {
  $id_pedido = $_POST['id_pedido'];
  $nome= mysqli_real_escape_string($con,$_POST['nome']);   
  $email= mysqli_real_escape_string($con,$_POST['email']); 
  $data = $_POST['data'];
  $pedido =mysqli_real_escape_string($con,$_POST['pedido']); 
  $mensagem= mysqli_real_escape_string($con,$_POST['mensagem']);
  
   
  $sql = "INSERT INTO cartorio_db ( id_pedido, nome, email, data,pedido,mensagem) VALUES ('$id_pedido','$nome','$email',now(),'$pedido','$mensagem')";
  if (mysqli_query($con,$sql)) {
    header('Location:cadastro.php');
  }else
  {
    die("Erro: " . $sql . "<br>" . mysqli_error($con));
  }  

  $sql = "SELECT * FROM pedidos_tb ORDER BY id_pedido DESC";
    $resultado = mysqli_query($con,$sql);
    $linha = mysqli_fetch_assoc($resultado);
    $quantidade = mysqli_num_rows($resultado);
}
?>