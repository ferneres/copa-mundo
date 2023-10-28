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
        <h4 class="subtitle">GRUPO <?= $group[0]['grupo'] ?></h4>


        <div class="card-container">
            <div id="players" class="listar-figurinhas row">

                <?php foreach ($group as $team) : ?>

                    <div class="col-sm-6 col-md-4">


                        <a href="http://localhost:8080/teams/<?= $team['id'] ?>">

                            <div class="profile-card-5" style="background: <?= $team['cor'] ?>">

                                <div class="row">
                                    <div class="col-7">

                                        <div class="profile-name"><?= $team['selecao'] ?></div>

                                        <div class="profile-abrev"><?= $team['abrev'] ?></div>

                                        <div class="profile-group">

                                            <span>grupo </span> <?= $team['grupo'] ?>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <img src="http://localhost:8080/Public/images/emblem/<?= strtolower($team['selecao']) ?>.png" class="img img-responsive">
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