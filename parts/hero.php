<?php
require_once "./admin/config/db.php";
$sql = "SELECT * FROM `hero` WHERE 1";
$result_hero = $conn->query($sql);
$row = $result_hero->fetch_assoc();
?>

<div id="top" class="row cube">
    <div class="s-wrap">
        <div class="hero-container">
            <div class="half-container flex column ai-c m-auto relative">
                <div class="hero-bg-img"></div>
                <div class="hero-content flex column jc-c ai-c absolute">
                    <div class="greeting flex">
                        <p> <?= $row["top_txt"] ?></p>
                        <i class="fa-solid fa-hand"></i>
                    </div>
                    <div class="heading">
                        <h1><?= $row["name"] ?></h1>
                    </div>
                    <div class="profession">
                        <h3><?= $row["profession"] ?></h3>
                    </div>
                    <div class="text txt-bottom">
                        <p class="type_anim"> <?= $row["bottom_txt"] ?></p>
                    </div>
                    <div class="button">
                        <a href="https://www.linkedin.com/in/shogher-harutyunyan-8044181aa/" target="_blank">Hire Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>