<?php

use App\Models\Project;

$Project = new Project;
$id = $_REQUEST['id'];
$row = $Project->Project_rowid($id);
?>
<?php require_once('../views/backend/header.php'); ?>
<form action="index.php?option=Project&cat=process&id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="content-wrapper my-2">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <strong class='text-danger'>
                            CẬP NHẬT SẢN PHẨM
                        </strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <button name="CAPNHAT" class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i>Lưu[Cập nhật]</button>
                        <a class="btn btn-sm btn-danger" href="index.php?option=Project"><i class="fas fa-trash"></i>Thoát</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label style="font-weight: bold;">Tên dự án</label>
                            <input name="name" type="text" value="<?php echo $row['name'] ?>" class="form-control" placeholder="tên sản phẩm" required />
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Thời gian</label>
                            <textarea name="time" class="form-control"  placeholder="Thời gian" required><?php echo $row['time']?></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Nội dung</label>
                            <textarea name="content" class="form-control" placeholder="Dự án phát triển..." required><?php echo $row['content']?></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Chủ đầu tư</label>
                            <textarea name="investor" class="form-control" placeholder="Chủ đầu tư" required><?php echo $row['investor']?></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Vị trí</label>
                            <textarea name="address" class="form-control" placeholder="Vị trí" required><?php echo $row['address']?></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            <label style="font-weight:bold;">Tổng diện tích</label>
                            <textarea name="total_area" class="form-control" placeholder="Tổng diện tích" required><?php echo $row['total_area']?></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Loại dự án</label>
                            <textarea name="project_type" class="form-control" placeholder="Loại dự " required><?php echo $row['project_type']?></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Quy mô</label>
                            <textarea name="scale" class="form-control" placeholder="Quy mô" required><?php echo $row['scale']?></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;">Ảnh sản phẩm</label>
                            <img width="340" height="300" src="../public/images/<?php echo $row['img'] ?>" alt="">
                            <input name="img" type="file" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label style="font-weight: bold;">Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1" <?php echo ($row['status'] == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                                <option value="2" <?php echo ($row['status'] == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</form>
<?php require_once('../views/backend/footer.php'); ?>