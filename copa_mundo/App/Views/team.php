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
      
        <div class="card-container">
            <div id="players" class="listar-figurinhas row">


                <?php foreach ($players as $player) : ?>

                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="profile-card-6" style="background: <?= $team['cor'] ?>">

                        <?php
                        if(!file_exists(__DIR__ . "/../../Public/images/players/{$team['selecao']}/{$player['nome']}.png")) {

                            $path = "http://localhost:8080/Public/images/players/default.png";
                        } else {
                            $path = "http://localhost:8080/Public/images/players/{$team['selecao']}/{$player['nome']}.png";
                        }
                        ?>

                        <img src="http://localhost:8080/Public/images/escudos/<?= strtolower($player['selecao'])?>.png" class="escudo">

                        <img src="<?= $path ?>" class="img img-responsive">
                        <div class="profile-name"><?= $player['nome'] ?></div>
                        <div class="profile-position"><?= $player['posicao'] ?></div>
                        <div class="profile-overview">
                            <div class="profile-overview">
                                <div class="row text-center">

                                    <div class="col-xs-4">
                                        <h3 class="mb-0"><?= $player['alt'] ?></h3>
                                        <p>altura</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <h3 class="mb-0"><?= $player['peso'] ?></h3>
                                        <p>peso</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

            </div>
        </div>
      </div>

</body>

</html>