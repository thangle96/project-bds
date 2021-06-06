<?php

use App\Models\Event;

$Event = new Event();

$row_exist = $Event->Event_row(['link' => str_slug(trim($_POST['name']))]);
//Thêm
if (isset($_POST['THEM'])) {
    $data = array(
        'name' => $_POST['name'],
        'link' => str_slug(trim($_POST['name'])),
        'time' => $_POST['time'],
        'content' => $_POST['content'],
        'address' => $_POST['address'],
        'created_at' => date('Y-m-d H:i:s'),
        'created_by' => $_SESSION['userid'],
        'updated_at' => date('Y-m-d H:i:s'),
        'updated_by' => $_SESSION['userid'],
        'status' => $_POST['status']
    );
    //Xử lí hình
    $target_dir = "../public/images/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));//lấy ra kiểu tập tin
    if(in_array($imageFileType, array('jpg','png','gift')))
    {
        //đưa tập tin lên sever
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        //lưu file
        $data['img'] = $_FILES["img"]["name"];
    }else{
        $data['img'] = "defaul.png";
    }
    $Event->Event_insert($data);
    set_flash('message', array('type'=>'success','msg'=> 'Thêm thành công'));
    redirect('index.php?option=Event');
}
//Update

if (isset($_POST['CAPNHAT'])) {
    $id = $_REQUEST['id'];
    $row = $Event->Event_rowid($id);
    if($row == null){
        set_flash('message', array('type'=>'danger','msg'=> 'Mã không tồn tại'));
        redirect('index.php?option=Event');
     }
    $data = array(
        'name' => $_POST['name'],
        'link' => str_slug(trim($_POST['name'])),
        'time' => $_POST['time'],
        'content' => $_POST['content'],
        'address' => $_POST['address'],
        'created_at' => date('Y-m-d H:i:s'),
        'created_by' => $_SESSION['userid'],
        'updated_at' => date('Y-m-d H:i:s'),
        'updated_by' => $_SESSION['userid'],
        'status' => $_POST['status']
    );
    //Xử lí hình
    $target_dir = "../public/images/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));//lấy ra kiểu tập tin
    if(in_array($imageFileType, array('jpg','png','gift')))
    {
        if(file_exists($target_dir.$row['img'])){
            unlink($target_dir.$row['img']);
        }
        
        //đưa tập tin lên sever
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        //lưu file
        $data['img'] = $_FILES["img"]["name"];
    }
    $Event->Event_update($data, $id);
    set_flash('message', array('type'=>'success','msg'=> 'Cập nhật thành công'));
    redirect('index.php?option=Event');
}
