<?php
class Blog_model
{
  private $table = 'blog';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllBlog()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
}
