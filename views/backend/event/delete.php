<?php

use App\Models\Event;

$Event = new Event();
 $id = $_REQUEST['id'];
 $row = $Event->Event_rowid($id);
 if($row == null){
    set_flash('message', array('type'=>'danger','msg'=> 'Mã không tồn tại'));
    redirect('index.php?option=Event&cat=trash');
 }

 $Event->Event_delete($id);
 set_flash('message', array('type'=>'success','msg'=> 'Xóa thành công'));
 redirect('index.php?option=Event&cat=trash');

 ?>