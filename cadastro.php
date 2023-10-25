<?php 
 require_once('conexao/conecta.php');
 if (!isset($_SESSION)) {
  session_start();
 }
 if (isset($_POST['cadastra']) && $_POST['cadastra'] === 'cadastra_usuario' )  {
    $id_usuario = $_POST['id_usuario'];
    $senha= mysqli_real_escape_string($con,$_POST['senha']);
    $nome= mysqli_real_escape_string($con,$_POST['nome']);   
    $email= mysqli_real_escape_string($con,$_POST['email']);
     
    $sql = "INSERT INTO usuarios_tb ( senha, nome, email) VALUES ('$senha','$nome','$email')";
    if (mysqli_query($con,$sql)) {
      header('Location:../cartorio/admin/cliente.php');
    }else
    {
      die("Erro: " . $sql . "<br>" . mysqli_error($con));
    }  
  }
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Cartório de Rio das Pedras</title>
   
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
       /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
    </style>
    <center>
  
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>
  <body>
  <div class="col-lg-9 mx-auto p-10 py-md-4">
  <h2 > Faça seu cadastro</h2> 
  <br>
  
    <div class="col-md-10 col-lg-15">
       
        <form class="needs-validation" method="POST" action="" novalidate align=left>
          <div class="row g-4">

            <div class="col-sm-6">
              <label for="usuario" class="form-label">Nome</label>
              <div class="input-group has-validation">
                
                <input type="text" class="form-control" id="nome" name="nome" placeholder="nome" maxlength="100" required>
                <div class="invalid-feedback">
                  Informe seu nome
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" maxlength="8" placeholder="Senha" required >
              <div class="invalid-feedback">
                Informe a senha.
              </div>
            </div>

            <div class="col-sm-12">
              <label for="nome" class="form-label">Email:</label>
              <input type="text" class="form-control" id="email" name="email" maxlength="100" placeholder="email" required>
              <div class="invalid-feedback">
                Informe o email
              </div>
            </div>

          <hr class="my-4">
          <input type="hidden" name="cadastra" value="cadastra_usuario">
          <button class="w-100 btn btn-primary btn-lg mb-5" type="submit">Cadastrar</button>
        </form>
      </div>
    </main>
  </div>
</div>
  
        <footer class="pt-10 my-5 text-muted border-top">
        Copyright 2023 - Todos os direitos reservados. &middot; &copy; 
             </footer>
             </center>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/form-validation.js"></script>
     
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
