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
}
