<?php
if (isset($_POST["submit5"])) {
    require_once 'config/uploads.php';
    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $sql = "INSERT INTO `services`(`heading`, `description`, `img`) VALUES ('$heading','$description','$target_file' )";

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['save5'])) {
    $new_heading = mysqli_real_escape_string($conn, $_POST['new_heading']);
    $new_description = mysqli_real_escape_string($conn, $_POST['new_description']);
    $id = $_POST['current'];

    $sql = "UPDATE `services` SET `heading`='$new_heading',`description`='$new_description',`img`='$target_file' WHERE  ID=$id";
    $conn->query($sql);
}

if (isset($_POST['delete5'])) {
    $sql_sel = "SELECT * FROM `services` WHERE ID={$_POST['current']}";
    $result = $conn->query($sql_sel);
    $row = $result->fetch_assoc();
    $img_path = $row["img"];

    if ($img_path) {
        $sql_del = "DELETE FROM `services` WHERE ID={$_POST['current']}";
        $result_del = $conn->query($sql_del);

        if ($result) {
            unlink($img_path);
        }
    }
}
?>
<div id="link_five" class="hidden right">
    <div class="row add">
        <div class="wrap container half-container insert">
            <form action="" method="post" enctype="multipart/form-data">
                <fieldset class="">
                    <legend class="heading">Services Section</legend>
                    <div class="flex column">
                        <div class="flex column information">
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Heading</p>
                                </div>
                                <div class="w-70">
                                    <input type="text" name="heading">
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Description</p>
                                </div>
                                <div class="w-70">
                                    <input type="text" name="description">
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Image</p>
                                </div>
                                <div class="w-70">
                                    <input type="file" name="image" id="image">
                                </div>
                            </div>
                        </div>
                        <input class="button submit" type="submit" value="Submit" name="submit5">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <!-- Creating new forms from output -->
    <?php
    $sql = "SELECT * FROM `services`";
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
                                    <p>Description:</p>
                                </div>
                                <div class="w-70">
                                    <textarea name="new_description" id="desc" cols="50" rows="5"><?= $row["description"] ?></textarea>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Image:</p>
                                </div>
                                <div class="w-70 flex ai-c">
                                    <img src=".<?= $row['img'] ?>" width="100">
                                    <input type='file' value="<?= $row['img'] ?>" name='image'>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="flex column">
                            <div class="flex half-container m-auto">
                                <input class="hidden-button" type='hidden' value="<?= $row['ID'] ?>" name='current'>
                                <input class="button delete-button" type="submit" value="Delete" name="delete5">
                                <div class="button small radius edit-button"><span>Edit</span></div>
                                <input class="button small radius save-button" type="submit" value="Save" name="save5">
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