<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>

  <div class="form-group">
    <label for="author">Author</label>
    <input type="input" class="form-control" name="author" required>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
      <textarea name="message" class="form-control" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Write</button>

</form>
