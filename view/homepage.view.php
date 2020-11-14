<?php ob_start(); ?>


<div class="Welcome">
    <h1>
        Bienvenue sur esportTeam.ch
    </h1>
    <img src="view/images/trophy.png" />
    <p>
        Ce site a pour but de faciliter le recrutement et la recherche d'équipe d'esport en suisse.
        Chaque personne pourra ainsi créer une équipe et rechercher des joueurs.
    </p>

</div>
<div class="siteStatus">

    <h1>Le site est en construction.</h1>

</div>

<?php
$content = ob_get_clean();
require_once "layout.view.php";
?>