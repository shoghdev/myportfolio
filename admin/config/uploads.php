<?php
$target_dir = "./img/uploads/";
$file_name = basename($_FILES["image"]["name"]);
$target_file = $target_dir . $file_name;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$uploadOk = 1;


// Check if image file is a actual image or fake image
if (isset($_POST["submit2"]) || isset($_POST["submit3"]) || isset($_POST["submit5"]) || isset($_POST['save2']) || isset($_POST['save3']) || isset($_POST['save5']) ) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);


  if ($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "svg"
  ) {
    echo "Sorry, only JPG, JPEG, PNG, SVG & GIF files are allowed.";
    $uploadOk = 0;
  }

  $is_uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (!$is_uploaded) {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
