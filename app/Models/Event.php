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

    function Event_row($args = [])
    {
        $strWhere = "";
        if ($args != null) {
            //Thiết lập điều kiện truy vấn theo trạng thái
            if (array_key_exists('status', $args)) {
                $strWhere .= "status='" . $args['status'] . "'";
            }
            
            //Truy vấn dựa vào id
            if (array_key_exists('id', $args)) {
                if ($strWhere == "") {
                    $strWhere .= "id='" . $args['id'] . "'";
                } else {
                    $strWhere .= " AND id='" . $args['id'] . "'";
                }
            }
              //Truy vấn dựa vào id
              if (array_key_exists('catid', $args)) {
                if ($strWhere == "") {
                    $strWhere .= "catid='" . $args['catid'] . "'";
                } else {
                    $strWhere .= " AND catid='" . $args['catid'] . "'";
                }
            }
            //Truy vấn dựa vào islugd
            if (array_key_exists('slug', $args)) {
                if ($strWhere == "") {
                    $strWhere .= "slug='" . $args['slug'] . "'";
                } else {
                    $strWhere .= " AND slug='" . $args['slug'] . "'";
                }
            }
        }
        //Kiểm tra có điều kiện hay không
        if ($strWhere != "") {
            $strWhere = " WHERE $strWhere";
        }
        $sql = "SELECT * FROM $this->table $strWhere LIMIT 1";
        return $this->getRow($sql);
    }
}
?>