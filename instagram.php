<?php
// Profile picture
$avatar = "avatar.png";
if(!empty($_FILES['profile_pic']['name'])){
  $avatarPath = $avatarPath = "uploads/" . time() . "_avatar_" . $_FILES['profile_pic']['name'];
  move_uploaded_file($_FILES['profile_pic']['tmp_name'], $avatarPath);
  $avatar = $avatarPath;
}

// Post image
$postImage = "post.jpg";
if(!empty($_FILES['post_image']['name'])){
  $postPath   = "uploads/" . time() . "_post_" . $_FILES['post_image']['name'];
  move_uploaded_file($_FILES['post_image']['tmp_name'], $postPath);
  $postImage = $postPath;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Generated Instagram Post</title>
<link rel="stylesheet" href="instagram.css">
</head>

<body class="bg-light">

<div style="display:flex;justify-content:center;margin-top:40px;">

  <div class="insta-post">

    <!-- HEADER -->
    <div class="insta-header">
      <img src="<?= $avatar ?>" class="insta-avatar">
      <span class="insta-username"><?= htmlspecialchars($_POST['username']) ?></span>
    </div>

    <!-- POST IMAGE (MAIN FIX) -->
    <img src="<?= $postImage ?>" class="insta-image">

    <!-- BODY -->
    <div class="insta-body">
      <div class="insta-icons">❤️ 💬 📤</div>

      <div class="insta-likes">
        <?= (int)$_POST['likes'] ?> likes
      </div>

      <div class="insta-caption">
        <span><?= htmlspecialchars($_POST['username']) ?></span>
        <?= htmlspecialchars($_POST['caption']) ?>
      </div>

      <div class="insta-time">
        <?= htmlspecialchars($_POST['time']) ?>
      </div>
    </div>

  </div>

</div>

</body>
</html>


