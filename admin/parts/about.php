<?php
require_once 'config/uploads.php';
if (isset($_POST["submit3"])) {
    $txt = mysqli_real_escape_string($conn, $_POST['txt']);

    $sql = "INSERT INTO `about` (`txt`, `image`) VALUES ('$txt','$file_name' )";

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['save3'])) {
    $new_txt = mysqli_real_escape_string($conn, $_POST['new_txt']);
    $id = $_POST['current'];

    if ($new_txt !== "") {
        $sql = "UPDATE `about` SET `txt`='$new_txt' WHERE ID=$id";
    }

    $conn->query($sql);
}

if (isset($_POST['delete3'])) {
    $sql_sel = "SELECT * FROM `about` WHERE ID={$_POST['current']}";
    $result = $conn->query($sql_sel);
    $row = $result->fetch_assoc();
    $img_path = $row["image"];

    if ($img_path) {
        $sql_del = "DELETE FROM `about` WHERE ID={$_POST['current']}";
        $result_del = $conn->query($sql_del);

        if ($result) {
            unlink($img_path);
        }
    }
}
?>
<div id="link_three" class="hidden right">
    <div class="row add">
        <div class="wrap container half-container insert">
            <form action="" method="post" enctype="multipart/form-data">
                <fieldset class="">
                    <legend class="heading">About Section</legend>
                    <div class="flex column">
                        <div class="flex column information">
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Text</p>
                                </div>
                                <div class="w-70">
                                    <input type="text" name="txt">
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
                        <input class="button submit" type="submit" value="Submit" name="submit3">
                    </div>
                    </fieldset>
            </form>
        </div>
    </div>

    <!-- Creating new forms from output -->
    <?php
    $sql = "SELECT * FROM `about`";
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
                                    <p>Text:</p>
                                </div>
                                <div class="w-70">
                                    <input type='text' value="<?= $row["txt"] ?> ?>" name='new_txt'>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Image:</p>
                                </div>
                                <div class="w-70 flex ai-c">
                                    <img src="../img/uploads/<?= $row['image'] ?>" width="100">
                                    <input type='file' value="<?= $row['image'] ?>" name='image'>
                                </div>
                            </div>
                            </fieldset>
                            <fieldset class="flex column">
                                    <div class="flex half-container m-auto">
                                        <input class="hidden-button" type='hidden' value="<?= $row['ID'] ?>" name='current'>
                                        <input class="button delete-button" type="submit" value="Delete" name="delete3">
                                        <div class="button small radius edit-button"><span>Edit</span></div>
                                        <input class="button small radius save-button" type="submit" value="Save" name="save3">
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