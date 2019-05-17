<div class="card-columns">
  <?php foreach ($posts as $posts_item): ?>
    <div class="card">
      <div class="card-body text-center">
        <h5 class="card-title"><?php echo $posts_item['author']; ?></h5>
        <p class="card-text"><?php echo $posts_item['message']; ?></p>
        <p class="card-text"><?php echo date("Y-m-d", strtotime($posts_item['date'])); ?></p>
        <input type="submit" onclick="reported(<?php echo $posts_item['id']; ?>)" id="reported_btn" name="reported_btn" value="Reported" class="btn btn-warning btn-sm" />
      </div>
    </div>
  <?php endforeach; ?>
</div>

<script type="text/javascript">
function reported(itemid) {
  $.ajax({
    type: "POST",
    data: {id: itemid},
    url:"<?php echo base_url(); ?>index.php/posts/reported",
    success: function() {
    }
  });
}
</script>
