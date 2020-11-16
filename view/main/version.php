<?php ob_start(); ?>


<div class="versions">
    
    <div class="version">
        <a href="?controller=main&action=setComputer"><img src="view/images/computer.png" /></a>
    </div>
    <div class="version">
        <a href="?controller=main&action=setMobile"><img src="view/images/smartphone.png"/></a>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once "./view/layoutMobile.view.php";
?>