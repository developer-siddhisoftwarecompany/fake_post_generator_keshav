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

$required = ['name','username','content','likes','comments','date'];
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

// Handle profile picture
$profilePic = null;
if (!empty($_FILES['profile_pic']['name'])) {
  $path = "../uploads/" . time() . "_twitter_" . $_FILES['profile_pic']['name'];
  move_uploaded_file($_FILES['profile_pic']['tmp_name'], $path);
  $profilePic = $path;
}

echo json_encode([
  "success" => true,
  "platform" => "twitter",
  "data" => [
    "name" => $_POST['name'],
    "username" => $_POST['username'],
    "content" => $_POST['content'],
    "likes" => (int)$_POST['likes'],
    "comments" => (int)$_POST['comments'],
    "date" => $_POST['date'],
    "profile_pic" => $profilePic
  ]
]);
