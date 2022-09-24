<?php
include "include/configuration.php";
if(isset($_POST['submit'])) {
  $title = addslashes($_POST["title"]);
  $image = $_FILES["image"];
  if(isset($title) && isset($image)) {
    if($title != "" && $image['error'] == 0) {
      if($image['size'] < 1024*10240) {
        $explode = explode(".", $image['name']);
        $exten = strtolower($explode[count($explode)-1]);
        $extensions = ['jpg','png', 'jpeg', 'gif', 'pdf', 'svg'];
        if(in_array($exten, $extensions)) {
          $path = md5(time().microtime().rand(1,9999)).".".$exten;
          if (!file_exists('images/')) {
            mkdir('images', 0777, true);
        }
          if(move_uploaded_file($image['tmp_name'], "images/".$path)) {
          $sql = "insert into gallery values (NULL, '$title', '$path')";
          if(mysqli_query($con, $sql)) {
            header('location:add.php?s=Succed!, File uploaded');
          } else {
            unlink("images/".$path);
            header('location:add.php?s=File has not been uploaded for base');
          }
          } else {
            header('location:add.php?er= File has not been uploaded');
            unlink('images/'.$path);
          }
        } else {
          header('location:add.php?er= You can input only images');
        }
      } else {
        header('location:add.php?er= The size of this image is too big');
      }
    } else {
      header('location:add.php?er= Fill in the form');
    }
  } else {
    header('location:add.php?er= Fill in the form');
  }
} else {
  header('location:add.php?er= Not allowed!');
}