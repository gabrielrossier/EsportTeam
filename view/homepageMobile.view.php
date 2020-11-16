<?php ob_start(); ?>



<div class="menu">

    <div class="menu-title">
        <h1>EsportTeam.ch</h1>
    </div>
    <div class="menu-items">
        <a href="?controller=team&action=getList"><img src="view/images/team.png"/></a>
    </div>
    <div class="menu-items">
        <a><img src="view/images/tournament.png"/></a>
    </div>
    <div class="menu-items">
        <a href="?controller=player&action=login"><img src="view/images/player.png"/></a>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once "layoutMobile.view.php";
?>