<?php ob_start(); ?>

<div class="loginForm">

    <form>
        <input type="text" placeholder="Username" />
        <input type="password" placeholder="password"/>
        <input type="submit" value="Login" />
    </form>


</div>
<div class="footMenu">
    <div class="footMenu-items">
        <a href="?controller=">
            <img src="view/images/home.png" />
        </a>
    </div>
    <div class="footMenu-items">

        <a href="?controller=player&action=login">
            <img src="view/images/player.png" />
        </a>
    </div>
</div>
<?php
$content = ob_get_clean();
require_once "./view/layoutMobile.view.php";
?>