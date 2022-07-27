<?php
require_once "./admin/config/db.php";
$sql = "SELECT * FROM `skills`";
$result_skills = $conn->query($sql);
?>

<div class="row">
    <div class="s-wrap">
        <div id="Skills" class="skills-container container flex">
            <div class="w-80 m-auto">
                <div class="page-header">
                    <h2 class="heading">
                        <span class="num"> 02 </span> Skills
                    </h2>
                </div>
                <div class="flex content res-flex-col">
                    <?php
                    if ($result_skills->num_rows > 0) {
                        $i = 0;
                        // output data of each row
                        while ($row = $result_skills->fetch_assoc()) { ?>
                            <div class="skills-inner flex column">

                                <div class="item">
                                    <h3><?= $row["heading"] ?></h3>
                                </div>

                                <?php $arr = unserialize($row["skill"]);
                                foreach ($arr as $value) {
                                    foreach ($value as $item) { ?>
                                        <div class="item">
                                            <p>
                                                <?= $item ?>
                                            </p>
                                        </div>
                                <?php    }
                                }  ?>
                            </div>
                    <?php $i++;
                        }
                    } else {
                        echo "0 results";
                    };
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>