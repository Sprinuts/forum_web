<link rel="stylesheet" href="<?= base_url("public/style/forum.css")?>">

<h2>Forum</h2>
<?php
// Example data, replace with your database query
$posts = [
    ['username' => 'Alice', 'message' => 'Hello, everyone!'],
    ['username' => 'Bob', 'message' => 'Hi Alice! Welcome to the forum.'],
    ['username' => 'Charlie', 'message' => 'Good to see you both here.'],
];
?>

<a class="btn btn-primary" href="<?= base_url('create') ?>">Create Post</a>


<?php
foreach ($posts as $post): ?>
    <div class="forum-row">
        <div class="username"><?= htmlspecialchars($post['username']) ?></div>
        <div class="message"><?= nl2br(htmlspecialchars($post['message'])) ?></div>
    </div>
<?php endforeach; ?>
