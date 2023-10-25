<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Reconhecimento de Firmas</title>
   
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
          <a class="dropdown-item" href="doacao.php">Escritura de Doação de Bem</a>
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
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          E-notariado
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="enotassina.php">E-not Assina</a>
          <a class="dropdown-item" href="certificado.php">Certificado Digital</a>
          <a class="dropdown-item" href="autenticidade.php">Termo de reconhecimento de firma por Autenticidade</a>
         
          </a>
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
         <!--     <a class="nav-link" href="../cartorio/admin/cliente.php">Acesso Restrito</a> -->
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
  <div style="text-align: justify;">
  <div class="alert alert-secondary" role="alert">
    <h1 class="h3">Reconhecimento de Firmas</h1>
    <br>
    
    <h4> Firma é assinatura.</h4>
     <p> 
        O reconhecimento de firma é o ato pelo qual o tabelião, que tem fé pública, atesta que a assinatura constante de um documento corresponde àquela da pessoa que a lançou.

        Ou seja, é uma declaração pela qual o tabelião confirma a autenticidade ou semelhança da assinatura de determinada pessoa em um documento. Não se refere ao teor do documento, mas tão somente à autenticidade da assinatura.
       
        As modalidades de reconhecimento de firma são: reconhecimento de firma por autenticidade e reconhecimento de firma por semelhança. Em ambos os casos deverá ser aberto um cartão de assinaturas/ficha de firma (ver Abertura de Firmas).
        O que determina a modalidade de reconhecimento a ser praticada é eventual exigência legal ou do destinatário do documento.</p>
     
     <h3>Reconhecimento de firma por autenticidade?</h3>
      <p> Ato de reconhecimento de assinatura em que o usuário comprova, pessoalmente, que é signatário do documento apresentado para o reconhecimento de firma.
        O usuário deve assinar, diante do tabelião, o documento que pretende ter a firma reconhecida como autêntica. Caso o documento já esteja assinado, será exigida nova assinatura no documento.
        No momento do comparecimento deverá o comparecente assinar, além do documento, um termo em livro próprio do cartório. Esse termo é a prova da aposição da assinatura perante o agente dotado de fé pública.</p>
     
     <h3>Reconhecimento de Firma por semelhança</h3>
      <p> O reconhecimento de assinatura é realizado por semelhança quando o tabelionato certifica que a assinatura aposta no documento confere com a assinatura depositada em seu banco de dados. Ou seja, o reconhecimento foi feito por meio da comparação da assinatura constante no documento com a assinatura depositada na ficha padrão do usuário, não sendo necessário o seu comparecimento pessoal para o ato de reconhecimento de firma.
        O reconhecimento de firma por semelhança pode ser com valor econômico ou sem valor econômico, de acordo com o conteúdo ou natureza do documento.</p>
     
     <h3>O que é necessário?</h3>
     
    <p> Para que o reconhecimento de firma possa ser feito, é necessário que a pessoa que assinou o documento tenha "ficha de firma" no cartório de notas, o que é feito através da abertura de firma.
        É importante que o portador do documento saiba o nome completo de quem assinou. Se o nome estiver incompleto ou errado, ou ainda se for um nome muito repetido, como José da Silva, é necessário o número do RG ou do CPF da pessoa, caso estes dados não constem no documento, para que a busca no sistema possa ser feita com sucesso, e sua ficha localizada.
       
        Para que o reconhecimento de firma seja feito, a assinatura do documento deve ser semelhante àquela da ficha de firma. A ficha de firma não tem prazo de validade, mas as pessoas mudam sua assinatura com o passar dos anos. Nestes casos, é preciso que a pessoa compareça novamente ao cartório, para renovar sua ficha de firma.
        Importante: é vedado o reconhecimento de firma em documentos sem data, com espaços em branco ou incompletos. Por isso, antes de comparecer ao cartório, certifique-se de que todos os dados constantes no documento estão preenchidos e que o mesmo não foi pós-datado.</p>
     
     <h3>Observações</h3>
     <p>- Pessoas semi-alfabetizadas e portadoras de deficiência visual podem abrir firma, sem a necessidade de comparecer ao cartório acompanhadas de testemunhas.
     
     - Analfabeto: não há como abrir firma de analfabeto com sua impressão digital;
     
     - Em casos de menores de 18 anos e maiores de 16 anos, é possível a abertura e reconhecimento de firma.</p>
     
     <b>Atenção: o ato de abertura de firma não é cobrado, mas o cartório é autorizado a extrair, às expensas do interessado, cópia dos documentos de identidade apresentados para arquivamento junto a sua ficha de firma.</b>
        
     </div>
     </div>
      
         <div class="clearfix"></div>
          
    

  <footer class="pt-5 my-5 text-muted border-top">
  Copyright 2023 -  Todos os direitos reservados. &middot; &copy; 2023
  </footer>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
