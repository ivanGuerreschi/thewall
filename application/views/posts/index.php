<div class="card-columns">
  <?php foreach ($posts as $posts_item): ?>
    <div class="card">
      <div class="card-body text-center">
	       <h5 class="card-title"><?php echo $posts_item['author']; ?></h5>
         <p class="card-text"><?php echo $posts_item['message']; ?></p>
         <a href="#" class="btn btn-warning btn-sm" onclick="<?php echo base_url()?>posts/reported">Reported</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
