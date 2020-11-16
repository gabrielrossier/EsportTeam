<?php ob_start(); ?>
<div class="Title">
    <div class="content">
        <h1>Team</h1>
        <img src="view/images/team.png"/>
    </div>
   
</div>

<form class="createForm">
    <input type="text" placeholder="Nom de l'équipe"/>
    <textarea placeholder="Description"></textarea>
    <select aria-placeholder="game">
        <option>League of Legends</option>
        <option>Rocket League</option>
        <option>Call of duty</option>
    </select>
    <input type="submit" value="Créer"/>
</form>


<?php
$content = ob_get_clean();
require_once "./view/layout.view.php";
?>