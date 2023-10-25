<?php 
require_once('conexao/conecta.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Doação de Bens</title>
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
          </ul>
          <form class="d-flex" action="busca.php" method="GET">
          
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div class="alert alert-secondary" role="alert">

  <h2 class="escritura"> Escritura de Doação?</h2>
  <font size='4'>
  <div style="text-align: justify;">
  <h3>O que é</h3>

  <p>A Escritura Pública de Doação é o ato feito e assinado em Tabelionato de Notas por meio do qual uma das partes doa determinado bem – móvel ou imóvel – para outra.<b> Atenção: geralmente a doação é gratuita, mas também pode ser onerosa, ou seja, pode ser estipulada uma contraprestação, como por exemplo, o compromisso de se construir uma escola no terreno doado.</b></p>

  <h3>Como é feita?</h3>

  <p> A escritura de doação deve ser agendada com o tabelião ou com um de seus escreventes, sendo recomendável que a parte faça o agendamento pessoalmente para entregar a documentação que possui e ser orientada sobre a necessidade de reunir outros documentos.
      Na data marcada, as partes comparecerão ao tabelionato de notas, munidas de seus documentos pessoais originais, para assinar a escritura. A assinatura da escritura será feita por todas as partes no mesmo momento. Aquele que vai receber o bem em doação também precisa estar presente, para aceitar o bem doado, exceto quando for doação pura para pessoa absolutamente incapaz.A escritura pública é obrigatória para a transferência de bens imóveis de valor superior a 30 salários mínimos. <br> <br> <b>Atenção: depois de lavrada a escritura de doação do imóvel, ela deve ser registrada no cartório de Registro de Imóveis. Você pode solicitar que o próprio tabelionato providencie esse trâmite junto ao registro imobiliário. Somente depois do registro a propriedade fica de fato transferida à pessoa do donatário.</b></p>

  <h3> - Documentos Pessoais</h3>

  <p>- Certidão de nascimento: se solteiro <br>
      - Certidão de Casamento: se casado, separado, divorciado ou viúvo; <br>
       - Pacto antenupcial registrado, se houver; <br>
      - Certidão de óbito; <br>
      - Informar endereço; <br>
      - Informar profissão.</p>

      <h3>  Doadores Pessoa Jurídica:</h3>

      <p>- Número do CNPJ para obtenção da certidão via internet; <br>
          - Fotocópia autenticada do contrato ou estatuto social, última alteração e alteração em que conste modificação na diretoria; <br>
          - Certidão Conjunta de Débitos da Receita Federal (PGFN); <br>
          - Certidão Negativa de Débitos (CND) do INSS; <br>
          - RG, CPF, profissão e residência do diretor, sócio ou procurador que assinará a escritura; <br>
          - Certidão da junta comercial de que não há outras alterações</p>

          <h3>  Donatários:</h3>

          <p>- Fotocópia do RG e CPF, inclusive dos cônjuges (e apresentação do original);

              - Certidão de nascimento: se solteiro
              - Certidão de Casamento: se casado, separado, divorciado ou viúvo;
               - Pacto antenupcial registrado, se houver;
              - Certidão de óbito;
              - Informar endereço;
              - Informar profissão; <b>Atenção: o cônjuge deve ter CPF individual próprio. Se a doação for feita em favor de filho menor incapaz, ele também deverá ter CPF próprio.</b> <br>  Se o casal for casado sob o regime da comunhão universal, da separação total ou participação final dos aquestos, é necessário o prévio registro do pacto antenupcial no cartório de Registro de Imóveis do domicílio dos cônjuges.
               <h3>Documentos dos bens móveis:</h3>
               Urbano – Casa ou Apartamento:
               - Certidão de matrícula ou transcrição atualizada no momento da assinatura da escritura (prazo de 30 dias a partir da data de expedição);
               - Certidão de quitação de tributos imobiliários;
               - Carnê do IPTU do ano vigente;
               - Informar o valor da doação.</p>

                     <h3>Rural:</h3>

                   <p>- Certidão de matrícula ou transcrição atualizada (prazo de 30 dias a partir da data de expedição). A certidão deve estar atualizada no momento da lavratura da escritura, e não no momento da entrega dos documentos no cartório;
                      - Certidão de regularidade fiscal do imóvel emitida pela Secretaria da Receita Federal;
                      - Certificado de Cadastro de Imóvel Rural (CCIR);
                      - 5 (cinco) últimos comprovantes de pagamento do Imposto Territorial Rural (ITR);
                      - Declaração do Imposto sobre a Propriedade Rural (DITR);
                      - Informar o valor da compra.</p>

               <h3> - Outros Documentos:</h3>
               <p>    - Procuração de representantes. Prazo: 90 dias. Se a procuração for feita em cartório de outra cidade, deve apresentar firma reconhecida do oficial que a expediu;

                - Substabelecimento de procuração. Prazo: 90 dias. Se feita em cartório de outra cidade, deve apresentar firma reconhecida do oficial que a expediu;
                                  
                    - Alvará judicial, no original.
                     Se o comprador for pessoa jurídica, deverá apresentar original ou cópia autenticada do contrato social e de suas alterações, ata de nomeação da diretoria, CNPJ, além do RG e CPF originais do representante que irá assinar o documento.</p>

                    <h3>  -Doação com reserva de usufruto</h3>
                    <p>  Na doação com reserva de usufruto transmite-se somente a nua-propriedade para o donatário, sendo que o usufruto fica reservado ao doador. Isso significa que o doador tem o direito permanecer no uso e no gozo do imóvel pelo prazo estipulado, que pode ser vitalício.</p>

                  </div>
                  </font>
     </div>
      
         <div class="clearfix"></div>
  
    

  <footer class="pt-5 my-5 text-muted border-top">
  Copyright 2023 -Todos os direitos reservados. &middot; &copy; 2023
  </footer>
</div>
  <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
