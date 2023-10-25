<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Firmas e Autenticação</title>
   
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
         <!--     <a class="nav-link" href="../cartorio/admin/cliente.php">Acesso Restrito</a> -->
            </li>
            <li class="nav-item dropdown">
      </li>
      </li>
    
          </ul>
          <form class="d-flex" action="busca.php" method="GET">
          
          </form>
              
         
        </div>
      </div>
    </nav>
  </header>
  <div class="alert alert-secondary" role="alert">
  <div style="text-align: justify;">
    <h1 class="h3">Abertura de Firmas</h1>
  <br>
  <font size='4'>
    <h3> O que é?</h3>
     <p> Firma é assinatura.
      Para a realização do reconhecimento de firma, é necessário que a pessoa tenha aberto, previamente no tabelionato de notas uma ficha de firma, que é o depósito do padrão de sua assinatura (ficha de firma).
      A ficha de firma não tem prazo de validade, mas é necessária a sua atualização caso a assinatura seja alterada.</p>
     
     <h3>Como é feito?</h3>
      <p>O interessado comparece ao Tabelionato, com seu Documento de Identificação e CPF originais (não serve cópia autenticada), e assina duas vezes em um formulário, preenchendo-o com seus dados. Com o padrão de assinatura arquivado no cartório, documentos por ele assinado podem ser levados para o reconhecimento de firma por semelhança.</p>
     
     <h3>Documentos necessários</h3>
      <p>Para o preenchimento da ficha de abertura de firma devem ser apresentados os seguintes documentos originais:
     
     - Documentos de Identificação, dentre os quais podem ser aceitos: Cédula de Identidade ou RG;
     
     - Registro Geral ou o modelo atual da Carteira Nacional de Habilitação (CNH), ou Carteira de Exercício Profissional expedidas nos termos da Lei nº 6.206/75, pelos órgãos de classe tais como OAB, CRM, CREA, entre outros, ou Carteiras de Identidade expedidas pelo Exército, Marinha, Aeronáutica e carteira de identificação funcional dos Magistrados, membros do Ministério Público e da Defensoria Pública.</p>
     
     <h3>Cadastro de Pessoa Física (CPF)</h3>
     
    <p> - Certidão de Casamento (*somente para a mulher/homem que alterou o nome após o casamento, separação ou divórcio e não alterou o documento de identidade);
     
     - Registro Nacional de Estrangeiro (RNE) válido, no caso de estrangeiros com visto permanente (*Pessoas maiores de 60 anos cuja validade do RNE expirou após completarem essa idade ou deficientes físicos estão dispensados da renovação desse documento);
     
     - Passaporte válido com prazo de validade do visto em vigor ou Carteira de Identidade do MERCOSUL (Argentina, Uruguai, Paraguai, Chile e Bolívia), para estrangeiros com visto provisório.</p>
     
     <h3>Observações</h3>
     <p>- Pessoas semi-alfabetizadas e portadoras de deficiência visual podem abrir firma, sem a necessidade de comparecer ao cartório acompanhadas de testemunhas.
     
     - Analfabeto: não há como abrir firma de analfabeto com sua impressão digital;
     
     - Em casos de menores de 18 anos e maiores de 16 anos, é possível a abertura e reconhecimento de firma.</p>
     
     <b>Atenção: o ato de abertura de firma não é cobrado, mas o cartório é autorizado a extrair, às expensas do interessado, cópia dos documentos de identidade apresentados para arquivamento junto a sua ficha de firma.</b>
        
     </div>
    </div>
         <div class="clearfix"></div>
        

     <footer class="pt-5 my-5 text-muted border-top">
        Copyright 2023 - Todos os direitos reservados. &middot; &copy; 2023
        </footer>
      </div>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
      </html>