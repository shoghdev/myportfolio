<?php
require_once "./admin/config/db.php";
$sql = "SELECT * FROM `about` WHERE 1";
$result_about = $conn->query($sql);
$row = $result_about->fetch_assoc();
?>
<div class="row">
    <div class="s-wrap">
        <div id="About" class="about-container container flex">
            <div class="w-80 m-auto">
                <div class="page-header">
                    <h2 class="heading">
                        <span class="num"> 01 </span> About me
                    </h2>
                </div>
                <div class="flex content">
                    <div class="half-container">
                        <div class="text w-80">
                            <p><?= $row["txt"] ?></p>
                        </div>
                        <div class="button">
                            <a href="https://docs.google.com/document/d/1nZxx6fU9VJRwym3lMNQcbi6MX6MG7F-Hyf3s9KDnteg/edit?usp=sharing" target="_blank" download="Shogher_CV">Resume</a>
                        </div>
                    </div>
                    <div class="half-container">
                        <div class="image half-container">
                            <img src="./img/uploads/<?=$row["image"] ?>" alt="Shogher_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>