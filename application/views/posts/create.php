<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>

  <div class="form-group">
    <?php echo form_label('Author', 'author');

    $data = array(
    'name' => 'author',
    'placeholder' => 'Author',
    'class' => 'form-control'
    );
    echo form_input($data); ?>
  </div>

  <div class="form-group">
    <?php echo form_label('Message', 'message');

    $data = array(
    'name' => 'message',
    'class' => 'form-control'
    );
    echo form_textarea($data);

    $data = array(
      'name' => 'submit',
      'value'=> 'Write',
      'class'=> 'btn btn-outline-success'
    ); ?>

  </div>
  
  <?php echo form_submit($data); ?>

<?php echo form_close();?>
