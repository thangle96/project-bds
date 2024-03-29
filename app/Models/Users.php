<?php

namespace App\Models;

use App\Library\Database;
use FilterIterator;

class Users extends Database
{
  private $table = null;
  public function __construct()
  {
    parent::__construct();
    $this->table = $this->TableName('user');
  }
  public function user_row($username)
  {
    if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
      $sql = "SELECT * FROM $this->table WHERE email = '$username' AND access = '1'";
    } else {
      $sql = "SELECT * FROM $this->table WHERE username = '$username' AND access = '1' ";
    }
    return $this->getRow($sql);
  }

  public function check()
  {
    $sql = "SELECT * FROM $this->table ";
    return $this->getRow($sql);
  }

  public function user_detail($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        return $this->getList($sql);
    }
  
}
