<form action="<?= base_url('create'); ?>" method="POST">
    <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?= set_value('username')?>" required>
    <br><br>
    <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value="<?= set_value('subject')?>" required>
    <br><br>
    <label for="message">Message:</label>
        <input type="text" id="message" name="message" value="<?= set_value('message')?>" required>
    <br><br>
    <button type="submit">Submit</button>
</form>