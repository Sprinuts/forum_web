<link rel="stylesheet" href="<?= base_url("public/style/forum.css")?>">

<h2>Admin Forum</h2>

<?php
foreach ($forums as $forum): ?>
    <div class="forum-row">
        <div class="username"><?= $forum['username']?></div>
        <div class="message"><?= $forum['message']?></div>
        <form action="<?= base_url('adminforum/delete/' . $forum['id']) ?>" method="post" style="display:inline;">
            <button type="submit" onclick="return confirm('Are you sure you want to delete this forum?');">Delete</button>
        </form>
        <form action="<?= base_url('adminforum/archive/' . $forum['id']) ?>" method="post" style="display:inline;">
            <button type="submit">Archive</button>
        </form>
    </div>
<?php endforeach; ?>
