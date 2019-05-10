<h2><?php echo $title; ?></h2>
<div class="card-columns">
  <?php foreach ($posts_item as $posts): ?>
    <div class="card">
      <div class="card-body text-center">
	       <h5 class="card-title"><?php echo $posts['author']; ?></h5>
         <p class="card-text"><?php echo $posts['message']; ?></p>        
      </div>
    </div>
  <?php endforeach; ?>
</div>
