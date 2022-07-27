<?php
if (isset($_POST["submit1"])) {

    $iname = $_POST['iname'];

    if ($iname !== "") {
        $sql = "INSERT INTO  menu_items (name) VALUES ('$iname')";
    }

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['save1'])) {
    $changed = $_POST['text'];
    $id = $_POST['current'];

    $sql = "UPDATE `menu_items` SET `name` = '$changed' WHERE ID={$_POST['current']}";
    $conn->query($sql);
}

if (isset($_POST['delete1'])) {
    $sql = "DELETE FROM `menu_items` WHERE ID={$_POST['current']}";
    $result = $conn->query($sql);
}
?>
<div id="link_one" class="right">
    <div class="row add">
        <div class="wrap container half-container insert">
            <form action="" method="post" class="menu-items-form">
                <fieldset>
                    <legend class="heading">Menu Items</legend>
                    <div class="flex column">
                        <div class="flex information">
                            <label for="iname">Menu Item</label>
                            <input type="text" name="iname">
                        </div>
                        <input class="button submit" type="submit" value="Submit" name="submit1">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <!-- Creating new forms from output -->
    <?php
    $sql = "SELECT * FROM `menu_items`";
    //execute the query
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {?>
            <div class="row" id="<?= $row['ID']; ?>">
                <div class="wrap container half-container output">
                    <form class="created-item" action="" method="post">
                        <fieldset class="flex column">
                            <label for="iname">
                                <span>Menu Item:</span>
                            </label>
                            <input type='text' value="<?= $row['name']; ?>" name='text'>
                        </fieldset>
                        <fieldset>
                            <div class="flex half-container m-auto">
                                <input class="hidden-button" type='hidden' value="<?= $row['ID']; ?>" name='current'>
                                <input class="button delete-button delete" type="submit" id="<?= $row['ID']; ?>" value="Delete" name="delete1">
                                <div class="button small radius edit-button"><span>Edit</span></div>
                                <input class="button small radius save-button none" type="submit" value="Save" name="save1">
                                <input class="button small radius cancel-button none" value="Cancel">
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