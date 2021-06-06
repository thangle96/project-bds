<?php 
namespace App\Models;

use App\Library\Database;

class Partner extends Database
{
    private $table = null;
    public function __construct() {
        parent::__construct();
        $this->table = $this->TableName('partner');
    }
    public function Partner_parentid($id)
    {
        $sql = "SELECT * FROM $this->table WHERE status = '1' AND parentid = '".$id."'";
        return $this->getList($sql);
    }
    public function Partner_list()
    {
        $sql = "SELECT * FROM $this->table WHERE status != '0' Limit 10";
        return $this->getList($sql);
    }
    public function Partner_trash()
    {
        $sql = "SELECT * FROM $this->table WHERE status = '0'";
        return $this->getList($sql);
    }

    public function Partner_slug($slug)
    {
        $sql = "SELECT * FROM $this->table WHERE status = '1' AND slug = '".$slug."' LIMIT 1";
        return $this->getRow($sql);
    }
    public function Partner_admin_index()
    {
        $sql = "SELECT * FROM $this->table where status != 0 ORDER by id ASC";
        return $this->getList($sql);
    }

    public function Partner_insert($data){
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
        $this->setQuery($sql);
    }

    public function Partner_admin_trash()
    {
        $sql = "SELECT * FROM $this->table where status = '0'";
        return $this->getList($sql);
    }
    public function Partner_rowid($id){
        $sql = "SELECT * FROM $this->table WHERE id = '$id'";
        return $this->getRow($sql);
    }
    public function Partner_update($date, $id){
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
    public function Partner_delete($id){
        $sql = "DELETE FROM $this->table WHERE id = '$id'";
        $this->setQuery($sql);
    }
}
?>