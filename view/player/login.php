<?php ob_start(); ?>

<div class="loginForm">

    <form>
        <input type="text" placeholder="Username" />
        <input type="password" placeholder="password"/>
        <input type="submit" value="Login" />
    </form>


</div>

<?php
$content = ob_get_clean();
require_once "./view/layout.view.php";
?>