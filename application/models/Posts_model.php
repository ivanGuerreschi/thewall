<?php
class Posts_model extends CI_Model {

  public function __construct()
    {
	     $this->load->database();
    }

    public function get_posts($author = FALSE)
    {
      if ($author === FALSE)
      {
        $query = $this->db->get('posts');
        return $query->result_array();
      }

	    $query = $this->db->get_where('posts', array('author' => $author));
	    return $query->result_array();
    }

    public function set_posts()
    {
      $this->load->helper('url');

      $slug = url_title($this->input->post('author'), 'dash', TRUE);

      $data = array(
        'author' => $this->input->post('author'),
        'message' => $this->input->post('message')
      );

    return $this->db->insert('posts', $data);
  }

  public function searchauthor($author)
  {
    $query = $this->db->get_where('posts', array('author' => $author));
    return $query->result_array();
  }

  public function reported($id)
  {
    $update = array(
            'reported' => 1,
            );
    $this->db->where('id', $id);
    return $this->db->update('posts', $update);
  }
}
