<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morals and Good - Cadastro </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/favicon-png.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>

    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">

                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Faça seu cadastro</header>
                        <form  action="cadastro.php" method="POST">
                            <div class="input-field">
                                <input type="name" class="input" id="name" name="name" required>
                                <label for="name">Nome completo</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="tel" class="input" id="phone" name="phone" required>
                                <label for="phone">Telefone</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required>
                                <label for="password">Crie uma senha</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Cadastrar">
                            </div>
                        </form>
                        <div class="signin">
                            <span>Já tem cadastro?</span>
                            <a href="/login">Clique aqui</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>