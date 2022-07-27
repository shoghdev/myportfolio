<?php
if (isset($_POST["submit4"])) {
    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    $data_skills  = array(
        'skills_item' => $_POST['skills_item']
    );
    $ser_skills = serialize($data_skills);


    if (count($data_skills) >= 1) {
        if (trim($_POST["skills_item"] != '')) {
            $sql = "INSERT INTO `skills` (`heading`,`skill`) VALUES('$heading', '$ser_skills')";
            mysqli_query($conn, $sql);
        }
    } else {
        echo "Please Enter Skill";
    }
}

if (isset($_POST['save4'])) {
    $new_heading = mysqli_real_escape_string($conn, $_POST['new_heading']);
    $skills = array(
        'skill' => $_POST['skills']
    );
    $ser_sk = serialize($skills);
    $id = $_POST['current'];

    $sql = "UPDATE `skills` SET `heading`='$new_heading',`skill`='$ser_sk' WHERE ID=$id";
    $conn->query($sql);
}

if (isset($_POST['delete4'])) {
    $sql = "DELETE FROM `skills` WHERE ID={$_POST['current']}";
    $result = $conn->query($sql);
}

?>
<div id="link_four" class="hidden right">
    <div class="row add">
        <div class="wrap container half-container insert">
            <form name="add_skills" method="post" enctype="" id="add_skills">
                <fieldset class="flex column">
                    <legend class="heading">Skills Section</legend>
                    <div class="flex column information full-width">
                        <div class="field flex">
                            <div class="w-30">
                                <p>Heading</p>
                            </div>
                            <div class="w-70">
                                <input type="text" name="heading">
                            </div>
                        </div>
                        <div id="dynamic_field">
                            <div class="field flex ai-c">
                                <div class="w-30">
                                    <p>Skills</p>
                                </div>
                                <div class="flex w-70">
                                    <div class="flex ai-c full-width">
                                        <div class="w-70">
                                            <input type="text" name="skills_item[]" placeholder="Add Skills" class="form-codivol name_list" />
                                        </div>
                                        <div class="w-30">
                                            <button type="button" name="add" id="add" class="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit4" id="submit4" class="button submit" value="Submit">
                </fieldset>
            </form>
        </div>
    </div>
    <!-- Creating new forms from output -->
    <?php
    $sql = "SELECT * FROM `skills`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $i = 0;
        // output data of each row
        while ($row = $result->fetch_assoc()) { ?>
            <div class="row">
                <div class="wrap container half-container output">
                    <form action="" method="post" enctype="multipart/form-data">
                        <fieldset class="flex column">
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Heading:</p>
                                </div>
                                <div class="w-70">
                                    <input type='text' value="<?= $row["heading"] ?>" name='new_heading'>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Skills:</p>
                                </div>
                                <div class="w-70">
                                    <?php $arr = unserialize($row["skill"]);
                                    foreach ($arr as $value) {
                                        foreach ($value as $item) { ?>
                                            <input type='text' value="<?= $item . ", "; ?>" placeholder="" name='skills[]'>
                                    <?php }
                                    }  ?>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="flex column">
                            <div class="flex half-container m-auto">
                                <input class="hidden-button" type='hidden' value="<?= $row['ID'] ?>" name='current'>
                                <input class="button delete-button" type="submit" value="Delete" name="delete4">
                                <div class="button small radius edit-button"><span>Edit</span></div>
                                <input class="button small radius save-button" type="submit" value="Save" name="save4">
                                <input class="button small radius cancel-button" value="Cancel" name="cancel">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
    <?php $i++;
        }
    } else {
        echo "0 results";
    } ?>
</div>