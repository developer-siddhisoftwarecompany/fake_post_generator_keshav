<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fake X (Twitter) Post Generator</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light">

<div class="container py-4">
  <h3 class="text-center mb-4">Fake X (Twitter) Post Generator</h3>

  <div class="row justify-content-center">
  <div class="mb-2">
  <label class="form-label">Profile Picture</label>
  <input type="file" name="profile_pic" class="form-control" accept="image/*">
</div>


    <!-- ================= FORM ================= -->
    <div class="col-md-5">
    <form action="generate.php" method="POST" enctype="multipart/form-data">


        <div class="mb-2">
          <label class="form-label">Display Name</label>
          <input type="text" name="name" class="form-control" placeholder="Elon Musk" required>
        </div>

        <div class="mb-2">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" placeholder="elonmusk" required>
        </div>

        <div class="mb-2">
          <label class="form-label">Tweet Content</label>
          <textarea name="content" class="form-control" rows="3" placeholder="Hello Twitter 👋" required></textarea>
        </div>

        <div class="row">
          <div class="col">
            <label class="form-label">Likes</label>
            <input type="number" name="likes" class="form-control" value="0">
          </div>
          <div class="col">
            <label class="form-label">Replies</label>
            <input type="number" name="comments" class="form-control" value="0">
          </div>
        </div>

        <div class="mt-2">
          <label class="form-label">Date</label>
          <input type="date" name="date" class="form-control">
        </div>

        <button class="btn btn-primary w-100 mt-3">
          Generate Tweet
        </button>
      </form>
    </div>

    <!-- ================= LIVE PREVIEW ================= -->
    <div class="col-md-6">
      <h6 class="mb-2">Live Preview</h6>

      <div class="tweet">
        <div class="tweet-header">
        <img src="assets/images/avatar.png" class="tweet-avatar" id="p-avatar">


          <div>
            <div class="tweet-user">
              <span class="tweet-name" id="p-name">Name</span>
              <span class="tweet-username">@<span id="p-username">username</span></span>
              <span class="tweet-date">· <span id="p-date">today</span></span>
            </div>

            <div class="tweet-content" id="p-content">
              Your tweet will appear here
            </div>

            <div class="tweet-footer">
              <span>💬 <span id="p-comments">0</span></span>
              <span>🔁 0</span>
              <span>❤️ <span id="p-likes">0</span></span>
              <span>📊 0</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <p class="text-center text-muted mt-4">
    This post is generated for educational / design purposes only.
  </p>
</div>

<!-- JS -->
<script src="assets/js/preview.js"></script>

</body>
</html>
