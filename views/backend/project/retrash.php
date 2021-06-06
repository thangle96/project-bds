<?php

use App\Models\Project;

$Project = new Project();
 $id = $_REQUEST['id'];
 $row = $Project->Project_rowid($id);
 if($row == null){
    set_flash('message', array('type'=>'danger','msg'=> 'Mã không tồn tại'));
    redirect('index.php?option=Project&cat=trash');
 }
 $date = array(
     'status' => 2,
     'updated_at'=>date('Y-m-d H:i:s'),
     'updated_by'=>$_SESSION['userid']
 );
 $Project->Project_update($date, $id);


 set_flash('message', array('type'=>'success','msg'=> 'Khôi phục thành công'));
 redirect('index.php?option=Project&cat=trash');

 ?>