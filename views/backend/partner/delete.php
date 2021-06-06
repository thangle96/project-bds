<?php

use App\Models\Partner;

$Partner = new Partner();
 $id = $_REQUEST['id'];
 $row = $Partner->Partner_rowid($id);
 if($row == null){
    set_flash('message', array('type'=>'danger','msg'=> 'Mã không tồn tại'));
    redirect('index.php?option=Partner&cat=trash');
 }

 $Partner->Partner_delete($id);
 set_flash('message', array('type'=>'success','msg'=> 'Xóa thành công'));
 redirect('index.php?option=Partner&cat=trash');

 ?>