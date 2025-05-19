<link rel="stylesheet" href="<?= base_url("public/style/forum.css")?>">

<h2>Forum</h2>


<a class="btn btn-primary" href="<?= base_url('create') ?>">Create Post</a>


<div>
    <?php
    foreach ($forums as $forum): ?>
        <div class="forum-row">
            <div class="username"><?= $forum['username']?></div>
            <div class="message"><?= $forum['message']?></div>
            <a href="<?= base_url('forumview/'.$forum['id']); ?>" class="btn btn-sm btn-success">View</a>
        </div>
    <?php endforeach; ?>
</div>

<div class="pagination">
    <?= $pager->links(); ?>
</div>