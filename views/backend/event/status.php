 <?php

use App\Models\Event;

$Event = new Event();
 $id = $_REQUEST['id'];
 $row = $Event->Event_rowid($id);
 if($row == null){
    set_flash('message', array('type'=>'danger','msg'=> 'Mã không tồn tại'));
    redirect('index.php?option=Event');
 }
 $date = array(
     'status' => ($row['status'] == 1) ? 2 : 1,
     'updated_at'=>date('Y-m-d H:i:s'),
     'updated_by'=>$_SESSION['userid']
 );
 $Event->Event_update($date, $id);


 set_flash('message', array('type'=>'success','msg'=> 'Thay đổi thành công'));
 redirect('index.php?option=Event');

 ?>