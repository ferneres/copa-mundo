<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copa do Mundo</title>

    <link rel="stylesheet" href="http://localhost:8080/Public/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080/Public/assets/styles/style.css">
    <link rel="stylesheet" href="http://localhost:8080/Public/assets/styles/team.css">
    <link rel="stylesheet" href="http://localhost:8080/Public/assets/styles/players.css">
</head>

<body>

    <div class="container">
    <?php require_once __DIR__ . "/includes/cabecalho.php"; ?>

        <h2 class="title">Album de Figurinhas</h2>
        <h5 class="subtitle">Catar 2022</h5>
        <div class="container mb-3 p-0">

        <form action="http://localhost:8080/teams/selecao" method="get">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Brasil..." name="campo_selecao">
                <button class="btn btn-primary" type="submit" id="button-addon2">Procure sua seleção</button>
            </div>
        </form>
      
        </div>

      
        <div class="card-container">
            <div id="players" class="listar-figurinhas row">

                <?php foreach ($teams as $team) : ?>

                <div class="col-sm-6 col-md-4">
                    
                    <!-- Substitua as interrogações por "<?= $team['id'] ?>" -->
                    <!-- Isso vai gerar um link para cada time especificando-se o ID -->
                    <a href="http://localhost:8080/teams/<?= $team['id'] ?>">
                        
                        <!-- Substitua as interrogações por "cor" -->
                        <div class="profile-card-5"  style="background: <?= $team['cor'] ?>">

                            <div class="row">
                                <div class="col-7">
                                    
                                    <!-- Substitua as interrogações por "selecao" -->
                                    <div class="profile-name"><?= $team['selecao'] ?></div>

                                    <!-- Substitua as interrogações por "abrev" -->
                                    <div class="profile-abrev"><?= $team['abrev'] ?></div>

                                    <div class="profile-group">
                                        <!-- Substitua as interrogações por "grupo" -->
                                        <span>grupo </span> <?= $team['grupo'] ?>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <img src="http://localhost:8080/Public/images/emblem/<?= strtolower($team['selecao'])?>.png" class="img img-responsive">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php endforeach; ?>>

            </div>
        </div>
    </div>

</body>

</html>