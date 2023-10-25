<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form-validation.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form class="needs-validation" method="POST" action="comentario_enviado.php" novalidate>
            <div class="row g-3">

                <div class="col-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome"  required>
                    <div class="invalid-feedback">
                        Informe o seu nome.
                    </div>
                </div>

                <div class="col-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email"  required>
                    <div class="invalid-feedback">
                        Informe o seu e-mail.
                    </div>
                </div>

                <div class="col-12">
                    <label for="comentario" class="form-label">Comentário</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="2" required></textarea>
                    <div class="invalid-feedback">
                        Comente a notícia.
                    </div>
                </div>
                <hr class="my-3">
                <input type="hidden" name="inserir" value="insere_comentario">
                <input type="hidden" name="id_noticia" value="<?php echo $_GET['id_noticia'] ?>">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Inserir Comentário</button>
            </div>
        </form>
    </div>
    
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/form-validation.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>