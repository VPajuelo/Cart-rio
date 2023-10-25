<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Autenticação de Cópias</title>
    <link rel="icon" type="image/" href="C:/xampp/htdocs/cartorio/imagens/logo.png"/>  
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
          <a class="dropdown-item" href="doacao.php">Escritura de Doação </a>
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
        <li class="nav-item">
              <a class="nav-link" href="escritura.php"></a>
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
           <!--   <a class="nav-link" href="../cartorio/admin/cliente.php">Acesso Restrito</a> -->
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

  <div class="alert alert-secondary" role="alert">
    <h1 class="h3">Autenticação de Fotocópias e Documentos ?</h1>
    <br>
    <div style="text-align: justify;">
    <font size='4'>
    <h3> O que é?</h3>
     <p> A cópia autenticada é a reprodução ("xerox") de um documento, na qual o tabelião atesta que se trata de cópia fiel ao documento original, que conserva todas os sinais característicos e necessários à sua identificação.</p>
     
     <h3>Como é feito?</h3>
      <p> A parte interessada apresenta o documento original no tabelionato de notas e solicita a cópia autenticada. A reprodução (Xerox) do     documento original pode ser feita no próprio tabelionato ou fornecida pelo usuário junto com o documento original. Em ambos os casos será conferida com o documento original para verificar se a cópia conserva seus elementos identificadores, em seguida é aposto um selo de autenticidade, carimbo e assinatura do encarregado pela autenticação.É vedada a utilização de cópia de documento, autenticada ou não, para fazer nova autenticação, ou seja, a cópia autenticada só pode ser feita mediante apresentação de documentos originais.
        Também é vedada a extração de cópia autenticada se o documento original contiver rasuras, tiver sido adulterado por raspagem ou corretivo, bem como contiver escritos a lápis. 
        <br> <br>
        No caso de documentos de identificação, é vedada a extração de cópia autenticada se o documento estiver replastificado. Agora, por meio da Central Notarial de Autenticação Digital (Cenad), é possível autenticar digitalmente um documento em qualquer Cartório de Notas do Estado de São Paulo.  Na prática, o usuário apresentará o documento original ao tabelião de notas, que converterá as informações para uma cópia digital e, após conferir a integridade, a autenticará por meio da Cenad, entregando para o usuário um pen drive ou outra mídia com o documento digital autenticado. Por exemplo, caso um cidadão detenha pilhas de documentos que pretenda migrar para o meio digital, bastará entregar a um tabelião, que terá todo o acervo digitalizado e autenticado.</p>
    
     </div>
    </div>
    <footer class="pt-5 my-5 text-muted border-top">
  Copyright 2023 -  Todos os direitos reservados. &middot; &copy; 2023
  </footer>
  </div>
  </div>

      
   
    


<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/form-validation.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
