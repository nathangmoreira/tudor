<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Tudor - To do List</title>
        <!--CSS Principal-->
        <link rel="stylesheet" href="principal.css">
        <!--CSS Boostrap-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!--CSS Fontawesome-->
        <link rel="stylesheet" href="bootstrap/fontawesome/css/fontawesome.css">
        <link rel="stylesheet" href="bootstrap/fontawesome/css/brands.css">
        <link rel="stylesheet" href="bootstrap/fontawesome/css/regular.css">
        <link rel="stylesheet" href="bootstrap/fontawesome/css/solid.css">
    </head>
    <!--Corpo do site-->
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#"><i><b>Tudor</b></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--Conteudo-->
        <div class="container-fluid">
            <!--Título-->
            <div class="row mt-3">
                <div class="col-md-12">
                    <!--<li class="fa fa-list fa-2x text-primary"><span class="inner-fa"><h4> Últimos Lembretes</h4></span></li>-->
                   <h4 class="text-primary"><li class="fa fa-list"></li> Últimos Lembretes</h4></li>
                    <hr class="text-primary hr-title">
                </div>
            </div>

            <!--Tabela 1 -Cadastros -->
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <tr>
                            <td>N°</td>
                            <td>Lembrete</td>
                            <td>Cadastro</td>
                            <td>Vencimento</td>
                        </tr>
                    <!--Cod. PHP -->
                    <?php
                        include "classes/database.php";
                        new BancoDeDados;
                    ?>
                    </table>
                </div>
            </div>

        </div>

        <!-- jQuery e JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>