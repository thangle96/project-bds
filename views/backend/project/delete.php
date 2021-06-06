<?php

use App\Models\Project;

$project = new Project();
 $id = $_REQUEST['id'];
 $row = $project->project_rowid($id);
 if($row == null){
    set_flash('message', array('type'=>'danger','msg'=> 'Mã không tồn tại'));
    redirect('index.php?option=project&cat=trash');
 }

 $project->project_delete($id);
 set_flash('message', array('type'=>'success','msg'=> 'Xóa thành công'));
 redirect('index.php?option=project&cat=trash');

 ?>