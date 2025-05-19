<link rel="stylesheet" href="<?= base_url("public/style/forum.css")?>">

<a href="<?= base_url('adminforum'); ?>" class="btn btn-sm btn-danger">Back</a>

<div class="forum-row">
    <div class="username"><h4><?= $forum['username']?></h4></div>
    <div class="subject"><h2><?= $forum['subject']?></h2></div>
    <div class="message"><h><?= $forum['message']?></h4></div>
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