<?php require_once "./admin/config/db.php";
$sql5 = "SELECT * FROM `services`";
$result_serv = $conn->query($sql5);
?>

<div class="row">
    <div class="s-wrap">
        <div id="Services" class="services-container container flex">
            <div class="w-80 m-auto">
                <div class="page-header">
                    <h2 class="heading">
                        <span class="num"> 03 </span> Services
                    </h2>
                </div>
                <div class="flex content res-flex-col">
                    <?php if ($result_serv->num_rows > 0) {
                        $i = 0;
                        // output data of each row
                        while ($row = $result_serv->fetch_assoc()) { ?>
                            <div class="component w-30">
                                <div class="icon">
                                    <img src="<?= $row["img"] ?>" alt="icon">
                                </div>
                                <div class="heading"><?= $row["heading"] ?></div>
                                <div class="description"><?= $row["description"] ?></div>
                            </div>
                    <?php $i++;
                        }
                    } else {
                        echo "0 results";
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>