<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>The Wall</title>
  </head>
  <body>
    <div class="container">
      <h1>The Wall</h1>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/thewall/index.php/posts/">The Wall</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/thewall/index.php/posts/create">Create<span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/thewall/index.php/about">About<span class="sr-only">(current)</span></a>
        </li>
      </ul>

      <?php echo form_open('posts/searchauthor', 'class="form-inline my-2 my-lg-0"');
        $data = array(
        'name' => 'author',
        'placeholder' => 'Search messages by author',
        'class' => 'form-control mr-sm-2'
        );
        echo form_input($data);

        $data = array(
          'name' => 'submit',
          'value'=> 'Search',
          'class'=> 'btn btn-outline-success my-2 my-sm-0'
        );
        echo form_submit($data); ?>

      <?php echo form_close();?>

  </div>
</nav>
