<form action="<?= base_url('forumview/forumreply/'.esc($id)); ?>" method="POST">
    <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?= set_value('username')?>" required>
    <br><br>
    <label for="message">Message:</label>
        <input type="text" id="message" name="message" value="<?= set_value('message')?>" required>
    <br><br>
    <button type="submit">Submit</button>
</form>