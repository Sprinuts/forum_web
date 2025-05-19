<link rel="stylesheet" href="<?= base_url("public/style/forum.css")?>">

<h2>Admin Forum</h2>

<?php
foreach ($forums as $forum): ?>
    <div class="forum-row">
        <div class="username"><h4><?= $forum['username']?></h4></div>
        <div class="subject"><h2><?= $forum['subject']?></h2></div>
        <a href="<?= base_url('adminforum/delete/'.$forum['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
        <a href="<?= base_url('adminforumview/'.$forum['id']); ?>" class="btn btn-sm btn-success">View</a>
    </div>
<?php endforeach; ?>

<div class="pagination">
    <?= $pager->links(); ?>
</div>