<?php
require_once 'config/uploads.php';
if (isset($_POST["submit2"])) {
    $top_txt = mysqli_real_escape_string($conn, $_POST['top_txt']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $profession = mysqli_real_escape_string($conn, $_POST['profession']);
    $bottom_txt = mysqli_real_escape_string($conn, $_POST['bottom_txt']);

    if ($top_txt !== "" && $full_name !== "" && $profession !== "" && $bottom_txt !== "") {
        $sql = "INSERT INTO `hero` (`top_txt`, `name`, `profession`, `bottom_txt`, `img`) VALUES ('$top_txt', '$full_name', '$profession','$bottom_txt', '$target_file' )";
    }

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['save2'])) {
    $new_txt = mysqli_real_escape_string($conn, $_POST['new_text']);
    $new_name = mysqli_real_escape_string($conn, $_POST['new_name']);
    $new_prof = mysqli_real_escape_string($conn, $_POST['new_prof']);
    $b_text = mysqli_real_escape_string($conn, $_POST['b_text']);
    
    $id = $_POST['current'];

    $sql = "UPDATE `hero` SET `top_txt`='$new_txt',`name`='$new_name',`profession`='$new_prof',`bottom_txt`='$b_text',`img`='$target_file ' WHERE ID=$id";
    $conn->query($sql);
}

if (isset($_POST['delete2'])) {
    $sql_sel = "SELECT * FROM `hero` WHERE ID={$_POST['current']}";
    $result = $conn->query($sql_sel);
    $row = $result->fetch_assoc();
    $img_path = $row["img"];

    if ($img_path) {
        $sql_del = "DELETE FROM `hero` WHERE ID={$_POST['current']}";
        $conn->query($sql_del);

        if ($result) {
            unlink($img_path);
        }
    }
}
?>
<div id="link_two" class="right hidden">
    <div class="row add">
        <div class="wrap container half-container insert">
            <form action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend class="heading">Hero Section</legend>
                    <div class="flex column">
                        <div class="flex column information">
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Top Text</p>
                                </div>
                                <div class="w-70">
                                    <input type="text" name="top_txt">
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Name</p>
                                </div>
                                <div class="w-70">
                                    <input type="text" name="full_name">
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Profession</p>
                                </div>
                                <div class="w-70">
                                    <input type="text" name="profession">
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Bottom Text</p>
                                </div>
                                <div class="w-70">
                                    <input type="text" name="bottom_txt">
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
                        <input class="button submit" type="submit" value="Submit" name="submit2">
                    </div>
                    </fieldset>
            </form>
        </div>
    </div>

    <!-- Creating new forms from output -->
    <?php
    $sql = "SELECT * FROM `hero`";
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
                                    <p>Top Text:</p>
                                </div>
                                <div class="w-70">
                                    <input type='text' value="<?= $row["top_txt"] ?>" name='new_text'>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Full Name:</p>
                                </div>
                                <div class="w-70">
                                    <input type='text' value="<?= $row["name"]  ?>" name='new_name'>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Profession:</p>
                                </div>
                                <div class="w-70">
                                    <input type='text' value="<?= $row["profession"] ?>" name='new_prof'>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Bottom Text:</p>
                                </div>
                                <div class="w-70">
                                    <input type='text' value="<?= $row["bottom_txt"] ?>" name='b_text'>
                                </div>
                            </div>
                            <div class="field flex">
                                <div class="w-30">
                                    <p>Image:</p>
                                </div>
                                <div class="w-70 flex ai-c">
                                    <img src="<?= $row['img'] ?>" alt="img">
                                    <input type='file' value="<?= $row['img'] ?>" name='image'>
                                </div>
                            </div>
                            </fieldset>
                            <fieldset class="flex column">
                                <div class="flex half-container m-auto">
                                    <input class="hidden-button" type='hidden' value="<?= $row['ID'] ?>" name='current'>
                                    <input class="button delete-button" type="submit" value="Delete" name="delete2">
                                    <div class="button small radius edit-button"><span>Edit</span></div>
                                    <input class="button small radius save-button" type="submit" value="Save" name="save2">
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
    }
    ?>
</div>