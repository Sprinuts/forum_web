<link rel="stylesheet" href="<?= base_url("public/style/forum.css")?>">

<h2>Forum</h2>


<a class="btn btn-primary" href="<?= base_url('create') ?>">Create Post</a>


<?php
foreach ($forums as $forum): ?>
    <div class="forum-row">
        <div class="username"><?= $forum['username']?></div>
        <div class="message"><?= $forum['message']?></div>
    </div>
<?php endforeach; ?>
