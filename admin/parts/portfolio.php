<?php   
// require_once 'config/uploads.php';
if (isset($_POST['submit6'])) {

    $heading = mysqli_real_escape_string($conn, $_POST['heading']);

    //tools
    $data_tools  = array(
        'tools' => $_POST['tools']
    );
    $ser_tools = serialize($data_tools);

    //icons
    // $data_icons  = array(
    //     'icons' => $_POST['icons'],
    //     'links' => $_POST['links']
    // );

    $icons = array(
        'icon' => $_FILES['icons']
    );

    $links = array(
        'link' => $_POST['links']
    );


 $data_icons = array_combine($icons, $links);
    var_dump($link);


    $ser_icons = serialize($data_icons);

    if (count($data_tools) >= 1) {
        if (trim($_POST['tools'] != '')) {
            $sql = "INSERT INTO `portfolio`(`heading`, `bg_img`, `tools`, `classes`) VALUES ('$heading', '$target_file', '$ser_tools', '$ser_icons')";
            mysqli_query($conn, $sql);
        }
    } else {
        echo "Please Enter Skill";
    }
}

if (isset($_POST['save6'])) {
    $new_heading = mysqli_real_escape_string($conn, $_POST['new_heading']);
    $new_tools =  array(
        'tools' => $_POST['new_tools']
    );
    $ser_tool = serialize($new_tools);

    //icons
    $new_data_icons  = array(
        'icons' => $_POST['new_icon'],
        'links' => $_POST['new_link']
    );

    $new_icons_arr  = array(
        'added' => $new_data_icons
    );

    $new_ser_icons = serialize($new_icons_arr);


    $id = $_POST['current'];
    
    $sql = "UPDATE `portfolio` SET `heading`='$new_heading',`bg_img`='$target_file',`tools`='$ser_tool',`classes`='$new_ser_icons' WHERE ID=$id";
    $conn->query($sql);
}

if (isset($_POST['delete6'])) {
    $sql_sel = "SELECT * FROM `portfolio` WHERE ID={$_POST['current']}";
    $result = $conn->query($sql_sel);
    $row = $result->fetch_assoc();
    $img_path = $row["img"];

    if ($img_path) {
        $sql_del = "DELETE FROM `portfolio` WHERE ID={$_POST['current']}";
        $result_del = $conn->query($sql_del);

        if ($result) {
            unlink($img_path);
        }
    }
};
?>
<div id="link_six" class="hidden right">
    <div class="row add">
        <div class="wrap container half-container insert">
            <form name="add_pitem" method="post" enctype="multipart/form-data" id="add_pitem">
                <fieldset class="flex column">
                    <legend class="heading">Portfolio Section</legend>
                    <div class="flex column information full-width">
                        <div class="field flex">
                            <div class="w-30">
                                <p>Heading</p>
                            </div>
                            <div class="w-70">
                                <input type="text" name="heading" class="heading">
                            </div>
                        </div>
                        <div class="field flex">
                            <div class="w-30">
                                <p>Screenshot</p>
                            </div>
                            <div class="w-70">
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div id="dynamic_field_icons">
                            <div class="field flex ai-c">
                                <div class="w-30">
                                    <p>Icons</p>
                                </div>
                                <div class="flex w-70">
                                    <div class="flex ai-c full-width">
                                        <div class="w-70 icon_link">
                                            <input type="file" name="icons[]" placeholder="Add Class" class="form-codivol name_list" />
                                            <input type="text" name="links[]" placeholder="Insert Link" class="form-codivol name_list" />
                                        </div>
                                        <div class="w-30">
                                            <button type="button" name="add" id="add_icon" class="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="dynamic_field_tools">
                            <div class="field flex ai-c">
                                <div class="w-30">
                                    <p>Tools</p>
                                </div>
                                <div class="flex w-70">
                                    <div class="flex ai-c full-width">
                                        <div class="w-70">
                                            <input type="text" name="tools[]" placeholder="Add Tool" class="form-codivol name_list" />
                                        </div>
                                        <div class="w-30">
                                            <button type="button" name="add" id="add_tools" class="button">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit6" id="submit6" class="button submit" value="Submit">
                </fieldset>
            </form>
        </div>
    </div>
    <div class="output-container">
        <?php
        $sql = "SELECT * FROM `portfolio`";
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
                                        <p>Screenshot:</p>
                                    </div>
                                    <div class="w-70 flex ai-c">
                                        <img src=".<?= $row['bg_img'] ?>" width="100">
                                        <input type='file' value="<?= $row['bg_img'] ?>" name='image'>
                                    </div>
                                </div>
                                <div class="field flex">
                                    <div class="w-30">
                                        <p>Icons:</p>
                                    </div>
                                    <div class="w-70 flex ai-c">
                                        <?php $arr = unserialize($row["classes"]); ;
                                        foreach ($arr as $value) {?>
                                                <input type='text' value="<?= $value["icons"] . ", "; ?>" name='new_icon'>
                                                <input type='text' value="<?= $value["links"] . ", "; ?>" name='new_link'>
                                        <?php 
                                        }  ?>
                                    </div>
                                </div>
                                <div class="field flex">
                                    <div class="w-30">
                                        <p>Tools:</p>
                                    </div>
                                    <div class="w-70 flex ai-c">
                                        <?php $arr = unserialize($row["tools"]);
                                        foreach ($arr as $value) {
                                            foreach ($value as $item) { ?>
                                                <input type='text' value="<?= $item . ", "; ?>" name='new_tools[]'>
                                        <?php }
                                        }  ?>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="flex column">
                                <div class="flex half-container m-auto">
                                    <input class="hidden-button" type='hidden' value="<?= $row['ID'] ?>" name='current'>
                                    <input class="button delete-button" type="submit" value="Delete" name="delete6">
                                    <div class="button small radius edit-button"><span>Edit</span></div>
                                    <input class="button small radius save-button" type="submit" value="Save" name="save6">
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
</div>