<?php
class Posts extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('posts_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['posts'] = $this->posts_model->get_posts();
    $data['title'] = 'All Posts';

    $this->load->view('templates/header', $data);
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer');
  }

  public function view($author = NULL)
  {
    $data['posts_item'] = $this->posts_model->get_posts($author);

    if (empty($data['posts_item']))
    {
      show_404();
    }

    $data['title'] = "Messages of " . $author;

    $this->load->view('templates/header', $data);
    $this->load->view('posts/view', $data);
    $this->load->view('templates/footer');
  }
}
