<?php

use App\Models\Project;

$Project = new Project();

$row_exist = $Project->Project_row(['slug' => str_slug(trim($_POST['name']))]);
//Thêm
if (isset($_POST['THEM'])) {
    $data = array(
        'name' => $_POST['name'],
        'slug' => str_slug(trim($_POST['name'])),
        'time' => $_POST['time'],
        'content' => $_POST['content'],
        'investor' => $_POST['investor'],
        'address' => $_POST['address'],
        'total_area' => $_POST['total_area'],
        'project_type' => $_POST['project_type'],
        'scale' => $_POST['scale'],
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
    $Project->Project_insert($data);
    set_flash('message', array('type'=>'success','msg'=> 'Thêm thành công'));
    redirect('index.php?option=project');
}
//Update

if (isset($_POST['CAPNHAT'])) {
    $id = $_REQUEST['id'];
    $row = $Project->Project_rowid($id);
    if($row == null){
        set_flash('message', array('type'=>'danger','msg'=> 'Mã không tồn tại'));
        redirect('index.php?option=Project');
     }
    $data = array(
        'name' => $_POST['name'],
        'slug' => str_slug(trim($_POST['name'])),
        'time' => $_POST['time'],
        'content' => $_POST['content'],
        'investor' => $_POST['investor'],
        'address' => $_POST['address'],
        'total_area' => $_POST['total_area'],
        'project_type' => $_POST['project_type'],
        'scale' => $_POST['scale'],
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
    $Project->Project_update($data, $id);
    set_flash('message', array('type'=>'success','msg'=> 'Cập nhật thành công'));
    redirect('index.php?option=Project');
}
