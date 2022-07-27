<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shogher</title>
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
    <?php
    require_once "./admin/config/db.php";
    $sql = "SELECT * FROM `menu_items`";
    $result = $conn->query($sql);
    ?>
    <header class="site-header">
        <div class="row">
            <div class="wrap">
                <div class="s-wrap">
                    <div class="header-container flex ai-c jc-sb">
                        <div class="header-top flex ai-c">
                            <div class="logo">
                                <a href="#"><img src="img/logo.png" alt="logo"></a>
                            </div>
                            <div class="btn active none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="header-bottom flex ai-c">
                            <div class="header-menu">
                                <nav>
                                    <ul class="flex">
                                        <?php
                                        if ($result->num_rows > 0) {
                                            $i = 0;
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) { ?>
                                                <li><a href="#<?= $row["name"] ?>"><span>0<?= $i ?>.</span> <?= $row["name"] ?></a></li>
                                        <?php $i++;
                                            }
                                        } else {
                                            echo "0 results";
                                        } ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="button">
                                <a href="https://docs.google.com/document/d/1nZxx6fU9VJRwym3lMNQcbi6MX6MG7F-Hyf3s9KDnteg/edit?usp=sharing" target="_blank" download="Shogher_CV">Resume</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>