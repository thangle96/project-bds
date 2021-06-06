<?php

use App\Models\Partner;
$Partner = new Partner();
//Thêm
if (isset($_POST['THEM'])) {
    $data = array(
        'createdate' => date('Y-m-d H:i:s'),
        'exportdate' => $_SESSION['userid'],
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
    $Partner->Partner_insert($data);
    set_flash('message', array('type'=>'success','msg'=> 'Thêm thành công'));
    redirect('index.php?option=Partner');
}
//Update

if (isset($_POST['CAPNHAT'])) {
    $id = $_REQUEST['id'];
    $row = $Partner->Partner_rowid($id);
    if($row == null){
        set_flash('message', array('type'=>'danger','msg'=> 'Mã không tồn tại'));
        redirect('index.php?option=Partner');
    }
    $data = array(
        'createdate' => date('Y-m-d H:i:s'),
        'exportdate' => $_SESSION['userid'],
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
    $Partner->Partner_update($data, $id);
    set_flash('message', array('type'=>'success','msg'=> 'Cập nhật thành công'));
    redirect('index.php?option=Partner');
}
