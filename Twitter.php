<!DOCTYPE html>
<html>
<head>
  <title>Generated Tweet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="bg-light">

<div class="container py-4 d-flex justify-content-center">

  <div class="tweet">
    <div class="tweet-header">
    <img src="../<?= $avatar ?>" class="tweet-avatar">


      <div>
        <div class="tweet-user">
          <span class="tweet-name"><?= htmlspecialchars($name) ?></span>
          <span class="tweet-username">@<?= htmlspecialchars($username) ?></span>
          <span class="tweet-date">· <?= $date ?></span>
        </div>

        <div class="tweet-content">
          <?= nl2br(htmlspecialchars($content)) ?>
        </div>

        <div class="tweet-footer">
          <span>💬 <?= $comments ?></span>
          <span>🔁 0</span>
          <span>❤️ <?= $likes ?></span>
          <span>📊 0</span>
        </div>
      </div>
    </div>
  </div>

</div>

<p class="text-center text-muted mt-3">
This post is generated for educational/design purposes only.
</p>

</body>
</html>
