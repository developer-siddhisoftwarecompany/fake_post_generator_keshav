<!DOCTYPE html>
<html>
<head>
  <title>Fake Instagram Post Generator</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Instagram CSS -->
  <link rel="stylesheet" href="instagram.css">
</head>

<body class="bg-light">

<div class="container py-4">
  <h3 class="text-center mb-4">Fake Instagram Post Generator</h3>

  <div class="row justify-content-center">
  <div class="mb-2">
  <label class="form-label">Profile Picture</label>
  <input type="file" name="profile_pic" class="form-control" accept="image/*">
</div>
<div class="mb-2">
  <label class="form-label">Post Image</label>
  <input type="file" name="post_image" class="form-control" accept="image/*" required>
</div>



    <!-- FORM -->
    <div class="col-md-5">
    <form action="templates/instagram.php" method="POST" enctype="multipart/form-data">


        <div class="mb-2">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" placeholder="instagram" required>
        </div>

        <div class="mb-2">
          <label class="form-label">Caption</label>
          <textarea name="caption" class="form-control" rows="3" placeholder="Life is beautiful ✨"></textarea>
        </div>

        <div class="row">
          <div class="col">
            <label>Likes</label>
            <input type="number" name="likes" class="form-control" value="100">
          </div>
          <div class="col">
            <label>Time</label>
            <input type="text" name="time" class="form-control" value="2 hours ago">
          </div>
        </div>

        <button class="btn btn-primary w-100 mt-3">
          Generate Post
        </button>
      </form>
    </div>

   <!-- LIVE PREVIEW -->
<div class="col-md-6">
  <h6>Live Preview</h6>

  <div class="insta-post">

    <!-- HEADER -->
    <div class="insta-header">
     <img src="avatar.png" class="insta-avatar" id="p-avatar">
      <span class="insta-username" id="p-username">username</span>
    </div>

    <!-- POST IMAGE (THIS WAS MISSING) -->
   <img src="post.jpg" class="insta-image" id="p-post-img">

    <!-- BODY -->
    <div class="insta-body">

      <div class="insta-icons">❤️ 💬 📤</div>

      <div class="insta-likes">
        <span id="p-likes">100</span> likes
      </div>

      <div class="insta-caption">
        <span id="p-user2">username</span>
        <span id="p-caption">Life is beautiful ✨</span>
      </div>

      <div class="insta-time" id="p-time">2 hours ago</div>

    </div>
  </div>
</div>


  </div>

  <p class="text-center text-muted mt-4">
    Generated for educational / design purposes only
  </p>
</div>

<script src="insta_preview.js"></script>
</body>
</html>

