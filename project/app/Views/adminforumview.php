<link rel="stylesheet" href="<?= base_url("public/style/forum.css")?>">

<a href="<?= base_url('adminforum'); ?>" class="btn btn-sm btn-danger">Back</a>

<div class="forum-row">
    <div class="username"><h3><?= $forum['username']?></h3></div>
    <div class="message"><h2><?= $forum['message']?></h2></div>
</div>

<br>
    <?php
    foreach ($replys as $reply): ?>
        <div class="forum-row">
            <div class="username"><?= $reply['username']?></div>
            <div class="message"><?= $reply['message']?></div>
            <a href="<?= base_url('adminforumview/replydelete/'.$reply['id'].'/'.$forum['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
        </div>
    <?php endforeach; ?>