<?php 
namespace App\Models;

use App\Library\Database;

class Project extends Database
{
    private $table = null;
    public function __construct() {
        parent::__construct();
        $this->table = $this->TableName('project');
    }
    public function project_parentid($id)
    {
        $sql = "SELECT * FROM $this->table WHERE status = '1' AND parentid = '".$id."'";
        return $this->getList($sql);
    }
    public function project_list()
    {
        $sql = "SELECT * FROM $this->table WHERE status != '0'";
        return $this->getList($sql);
    }
    public function Project_trash()
    {
        $sql = "SELECT * FROM $this->table WHERE status = '0'";
        return $this->getList($sql);
    }

    public function Project_slug($slug)
    {
        $sql = "SELECT * FROM $this->table WHERE status = '1' AND slug = '".$slug."' LIMIT 1";
        return $this->getRow($sql);
    }
    public function Project_admin_index()
    {
        $sql = "SELECT * FROM $this->table where status != 0 ORDER by id ASC";
        return $this->getList($sql);
    }

    public function Project_insert($data){
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

    public function Project_admin_trash()
    {
        $sql = "SELECT * FROM $this->table where status = '0'";
        return $this->getList($sql);
    }
    public function Project_rowid($id){
        $sql = "SELECT * FROM $this->table WHERE id = '$id'";
        return $this->getRow($sql);
    }
    public function Project_update($date, $id){
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
    public function Project_delete($id){
        $sql = "DELETE FROM $this->table WHERE id = '$id'";
        $this->setQuery($sql);
    }
}
?>