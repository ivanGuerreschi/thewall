<h2><?php echo $title; ?></h2>
<div class="card-columns">
  <?php foreach ($posts as $posts_item): ?>
    <div class="card">
      <div class="card-body text-center">
	       <h5 class="card-title"><?php echo $posts_item['author']; ?></h5>
         <p class="card-text"><?php echo $posts_item['message']; ?></p>                       
      </div>
    </div>
  <?php endforeach; ?>
</div>
