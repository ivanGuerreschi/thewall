<?php
class Posts extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('posts_model');
    $this->load->helper('url_helper');
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['posts'] = $this->posts_model->get_posts();

    $this->load->view('templates/header');
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

    $this->load->view('templates/header');
    $this->load->view('posts/view', $data);
    $this->load->view('templates/footer');
  }

  public function create()
  {

    $this->form_validation->set_rules('author', 'Author', 'required');
    $this->form_validation->set_rules('message', 'Message', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header');
      $this->load->view('posts/create');
      $this->load->view('templates/footer');

    }
    else
    {
      $this->posts_model->set_posts();
      redirect('posts/', 'refresh');
    }
  }

  public function searchauthor()
  {
    $author = $this->input->post('author');
    $data['posts_item'] = $this->posts_model->searchauthor($author);

    if (empty($data['posts_item']))
    {
      show_404();
    }

    $this->load->view('templates/header');
    $this->load->view('posts/searchauthor', $data);
    $this->load->view('templates/footer');
  }
}
