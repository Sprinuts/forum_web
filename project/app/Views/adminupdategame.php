<form action="<?= base_url('adminupdategame');?>" method="post" enctype="multipart/form-data">
    <label for="game_file">Upload Game File:</label>
    <input type="file" name="gamefile" id="gamefile" required>
    <button type="submit">Upload Game Update</button>
</form>