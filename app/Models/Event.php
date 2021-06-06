<?php 
namespace App\Models;

use App\Library\Database;

class Event extends Database
{
    private $table = null;
    public function __construct() {
        parent::__construct();
        $this->table = $this->TableName('event');
    }
    public function Event_parentid($id)
    {
        $sql = "SELECT * FROM $this->table WHERE status = '1' AND parentid = '".$id."'";
        return $this->getList($sql);
    }
    public function Event_list()
    {
        $sql = "SELECT * FROM $this->table WHERE status != '0'";
        return $this->getList($sql);
    }
    public function Event_detail($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        return $this->getList($sql);
    }
    public function Event_list_home()
    {
        $sql = "SELECT * FROM $this->table WHERE status != '0' Limit 6";
        return $this->getList($sql);
    }
    public function Event_trash()
    {
        $sql = "SELECT * FROM $this->table WHERE status = '0'";
        return $this->getList($sql);
    }

    public function Event_slug($slug)
    {
        $sql = "SELECT * FROM $this->table WHERE status = '1' AND slug = '".$slug."' LIMIT 1";
        return $this->getRow($sql);
    }
    public function Event_admin_index()
    {
        $sql = "SELECT * FROM $this->table where status != 0 ORDER by id ASC";
        return $this->getList($sql);
    }

    public function Event_insert($data){
        $strf = '';
        $strv = '';
        foreach($data as $f=>$v)
        {
            $strf .=$f.", " ;
            $strv .="'$v', " ;
        }
        $strf = rtrim($strf);
        $strf = rtrim($strf, ',');
        $strv = rtrim($strv);
        $strv = rtrim($strv, ',');
        $sql = "INSERT INTO $this->table($strf) VALUES ($strv)";
        echo $sql;
        $this->setQuery($sql);
    }

    public function Event_admin_trash()
    {
        $sql = "SELECT * FROM $this->table where status = '0'";
        return $this->getList($sql);
    }
    public function Event_rowid($id){
        $sql = "SELECT * FROM $this->table WHERE id = '$id'";
        return $this->getRow($sql);
    }
    public function Event_update($date, $id){
        $strset = '';
        foreach($date as $f=>$v)
        {
            $strset .=$f."='$v', " ;
        }
        $strset = rtrim($strset);
        $strset = rtrim($strset, ',');
        $sql = "UPDATE $this->table SET $strset WHERE id = '$id'";
        $this->setQuery($sql);

    }
    public function Event_delete($id){
        $sql = "DELETE FROM $this->table WHERE id = '$id'";
        $this->setQuery($sql);
    }
}
?>