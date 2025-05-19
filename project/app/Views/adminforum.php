<link rel="stylesheet" href="<?= base_url("public/style/forum.css")?>">

<h2>Admin Forum</h2>

<?php
foreach ($forums as $forum): ?>
    <div class="forum-row">
        <div class="username"><?= $forum['username']?></div>
        <div class="message"><?= $forum['message']?></div>
        <a href="<?= base_url('adminforum/delete/'.$forum['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
    </div>
<?php endforeach; ?>

<div class="pagination">
    <?= $pager->links(); ?>
</div>