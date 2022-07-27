<?php
include '../config/db.php';
if (isset($_POST['delete6'])) {
    $sql = "DELETE FROM `message` WHERE ID={$_POST['current']}";
    $result = $conn->query($sql);
}
?>
<div id="link_seven" class="right hidden">
    <?php
    $sql_mess = "SELECT * FROM `message`";
    $result_mess = $conn->query($sql_mess);
   
    if ($result_mess->row > 0) {
        $i = 0;
        // output data of each row
        while ($row = $result_mess->fetch_assoc()) {  var_dump($row);?>
            <div class="row">
                <div class="wrap container half-container">
                    <form action="" method="post">
                        <fieldset class="flex column">
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Full Name:</p>
                                </div>
                                <div class="w-70">
                                    <p> <?= $row["name"] ?></p>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Email:</p>
                                </div>
                                <div class="w-70">
                                    <p> <?= $row["email"] ?> </p>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Message:</p>
                                </div>
                                <div class="w-70">
                                    <p> <?= $row["text"] ?></p>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="flex column">
                            <input type='hidden' value="<?= $row['ID'] ?>" name='current'>
                            <input class="button" type="submit" value="Delete" name="delete6">
                        </fieldset>
                    </form>
                </div>
            </div>
</div>
<?php $i++;
        }
    } else {
        echo "0 results";
    }
?>
</div>