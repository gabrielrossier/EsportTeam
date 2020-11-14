<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EsportTeam</title>
    <link rel="stylesheet" href="view/styles/custom.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>

<body>
    <div class="sideNav">
        <a href="?controller=" title="Acceuil"><img src="view/images/home.png" /></a>
        <a href="?controller=team&action=getList" title="Page des teams"><img src="view/images/team.png" /></a>
        <a href="" title="Page des tournois"><img src="view/images/tournament.png" /></a>
        <a href="" title="Page des succès"><img src="view/images/trophy.png" /></a>
        <div class="ProfileIcone"><a href="?controller=player&action=login" title="Profile"><img src="view/images/player.png"/></a></div>
    </div>
    <div class="main">
        <?= $content ?>
    </div>
</body>