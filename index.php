<?php
require_once "./parts/header.php";

?>
<main class="relative">
    <div class="scroll">
        <?php require_once "./parts/hero.php"; ?>
        <div id="content" class="row cube"></div>
    </div>
    <?php
    require_once "./parts/aside_social.php";
    require_once "./parts/about.php";
    require_once "./parts/skills.php";
    require_once "./parts/services.php";
    require_once "./parts/portfolio.php";
    require_once "./parts/contact.php";
    require_once "./admin/config/db.php";
    ?>
</main>
<?php

require_once "./parts/footer.php";
?>