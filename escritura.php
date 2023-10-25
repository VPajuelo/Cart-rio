<?php 
require_once('conexao/conecta.php');

if (isset($_POST['cadastra']) && $_POST['cadastra'] === 'cadastra_pedido') {
  
  $nome = mysqli_real_escape_string($con,$_POST['nome']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
   date_default_timezone_set('America/Sao_Paulo');
   $data = date('Y-m-d');
  $pedido = mysqli_real_escape_string($con, $_POST['pedido']);  
  $mensagem = mysqli_real_escape_string($con,$_POST['mensagem']);

  $sql = "INSERT INTO pedidos_tb (nome, email, data, pedido, mensagem) VALUES ('$nome','$email',now(),'$pedido','$mensagem')";
  if (mysqli_query($con,$sql)) {
    header('Location:escritura.php');
  } else
  {
    die("Erro: " . $sql . "<br>" . mysqli_error($con));
  }
}

$sqltipo = "SELECT * FROM servicos_tb ORDER BY label ASC";
$resultadotipo = mysqli_query($con,$sqltipo);
$linhatipo = mysqli_fetch_assoc($resultadotipo);
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Pedidos de Escritura</title>
   
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

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>
  <body>
    
<div class="col-lg-10 mx-auto p-3 py-md-5">
  <header class="mb-5">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Escritura
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="uniaoestavel.php">Declaração de União Estável</a>
          <a class="dropdown-item" href="divorcio.php">Divórcio</a>
          <a class="dropdown-item" href="vendacompra.php">Escritura de Venda e Compra</a>
          <a class="dropdown-item" href="doacao.php">Escritura de Doação</a>
          <a class="dropdown-item" href="inventario.php">Inventário Extrajudicial</a>
          <a class="dropdown-item" href="pactoantenupcial.php">Pacto Antenupcial </a>
        </div>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Serviços
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="firmasaut.php">Abertura de Firmas</a>
          <a class="dropdown-item" href="autenticacao.php">Autenticação de Cópia</a>
          <a class="dropdown-item" href="reconhecimento.php">Reconhecimento de Firma</a>
          <a class="dropdown-item" href="reconhecimentopublico.php">Reconhecimento de Sinal Público</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registro Civil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="nascimento.php">Nascimento</a>
          <a class="dropdown-item" href="casamento.php">Casamento</a>
          <a class="dropdown-item" href="obito.php">Óbito</a>
          <a class="dropdown-item" href="livroe.php">Livro E</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          E-notariado
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="enotassina.php">E-not Assina</a>
          <a class="dropdown-item" href="certificado.php">Certificado Digital</a>
          <a class="dropdown-item" href="autenticidade.php">Termo de reconhecimento de firma por Autenticidade</a>
          <a class="dropdown-item" href="lgpd.php">LGPD</a>
        </div>
        <li class="nav-item">
              <a class="nav-link" href="downloads.php">Downloads</a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="localizacao.php">Localização</a>
        </li>
        <li>
              <a class="nav-link" href="lgpddados.php">LGPD</a>
        </li>
      </li>
    
      <li class="nav-item">
              <a class="nav-link" href="escritura.php"></a>
            </li>
        <li class="nav-item">
          <!--    <a class="nav-link" href="../cartorio/admin/cliente.php">Acesso Restrito</a> -->
            </li>
            <li class="nav-item dropdown">
      </li>
          </ul>
          <form class="d-flex" action="busca.php" method="GET">
          
          </form>
        </div>
      </div>
    </nav>
  </header>

  <h2 class="escritura"> Pedidos Serviços</h2>      
    <div class="col-md-12 col-lg-8">
        
        <form class="needs-validation" method="POST" action="" novalidate>
          <div class="row g-3">
  
            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome</label>
              <div class="input-group has-validation">               
                <input type="text" class="form-control" id="nome" name="nome"  maxlength="100" required>
                <div class="invalid-feedback">
                Informe seu nome
                </div>
              </div>
            </div>         

            <div class="col-sm-12">
              <label for="email" class="form-label">E-mail</label>
              <input type="text" class="form-control" id="email" name="email" required>
              <div class="invalid-feedback">
                Informe seu email
              </div>
            </div>
    
          
            <div class="col-sm-12">
              <label for="pedido" class="form-label">Pedido</label>
              <select class="form-select" id="pedido" name="pedido" required>
                
                <option value="">- Selecione -</option>
              
               <?php do{ ?>
                
                <option value="<?php echo $linhatipo['value'] ?>"><?php echo $linhatipo['label'] ?> </option>

               

                <?php }while($linhatipo = mysqli_fetch_assoc($resultadotipo)) ?>

              </select>
              <div class="invalid-feedback">
                Selecione o tipo.
              </div>
            </div>


            <div class="col-12">
              <label for="mensagem" class="form-label">Mensagem</label>
              <textarea class="form-control" id="mensagem" name="mensagem" rows="2"  required ></textarea>
              <div class="invalid-feedback" >
              Informe uma Mensagem
              </div>
            </div>

          <hr class="my-4">
          <input type="hidden" name="cadastra" value="cadastra_pedido">
          <button class="w-100 btn btn-primary btn-lg mb-5" type="submit">Solicitar</button>
        </form>
      </div>
        
    </div>
  </div>
        
     </div>
      
         <div class="clearfix"></div>
         
     </div>
     <hr>
   
    

  <footer class="pt-5 my-5 text-muted border-top">
  Copyright 2023 - Todos os direitos reservados. &middot; &copy; 2023
  </footer>
</div>
  <script src="js/form-validation.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
  </body>
</html>
