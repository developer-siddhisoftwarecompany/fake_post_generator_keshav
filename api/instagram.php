<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode([
    "success" => false,
    "message" => "Only POST method allowed"
  ]);
  exit;
}

$required = ['username','caption','likes','time'];
foreach ($required as $field) {
  if (empty($_POST[$field])) {
    http_response_code(400);
    echo json_encode([
      "success" => false,
      "message" => "Missing field: $field"
    ]);
    exit;
  }
}

// Profile pic
$profilePic = null;
if (!empty($_FILES['profile_pic']['name'])) {
  $path = "../uploads/" . time() . "_insta_profile_" . $_FILES['profile_pic']['name'];
  move_uploaded_file($_FILES['profile_pic']['tmp_name'], $path);
  $profilePic = $path;
}

// Post image
$postImage = null;
if (!empty($_FILES['post_image']['name'])) {
  $path2 = "../uploads/" . time() . "_insta_post_" . $_FILES['post_image']['name'];
  move_uploaded_file($_FILES['post_image']['tmp_name'], $path2);
  $postImage = $path2;
}

echo json_encode([
  "success" => true,
  "platform" => "instagram",
  "data" => [
    "username" => $_POST['username'],
    "caption" => $_POST['caption'],
    "likes" => (int)$_POST['likes'],
    "time" => $_POST['time'],
    "profile_pic" => $profilePic,
    "post_image" => $postImage
  ]
]);
