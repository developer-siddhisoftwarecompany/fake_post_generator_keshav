<?php
$name = $_POST['name'];
$username = $_POST['username'];
$content = $_POST['content'];
$likes = $_POST['likes'];
$comments = $_POST['comments'];
$date = $_POST['date'];

$avatar = "assets/images/avatar.png";

if(!empty($_FILES['profile_pic']['name'])){
  $target = "uploads/" . time() . "_" . $_FILES['profile_pic']['name'];
  move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target);
  $avatar = $target;
}

include "Twitter.php";
