<?php require_once('../views/backend/header.php'); ?>
<form action="index.php?option=project&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper my-2">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <strong class='text-danger'>
                            THÊM Dự ÁN
                        </strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <button name="THEM" class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i>Lưu[Thêm]</button>
                        <a class="btn btn-sm btn-danger" href="index.php?option=project"><i class="fas fa-trash"></i>Thoát</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label style="font-weight: bold;">Tên dự án</label>
                            <input name="name" type="text" class="form-control" placeholder="Tên dự án" required />
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Thời gian</label>
                            <textarea name="time" class="form-control" placeholder="Thời gian" required></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Nội dung</label>
                            <textarea name="content" class="form-control" placeholder="Dự án phát triển..." required></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Chủ đầu tư</label>
                            <textarea name="investor" class="form-control" placeholder="Chủ đầu tư" required></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Vị trí</label>
                            <textarea name="address" class="form-control" placeholder="Vị trí" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label style="font-weight:bold;">Tổng diện tích</label>
                            <textarea name="total_area" class="form-control" placeholder="Tổng diện tích" required></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Loại dự án</label>
                            <textarea name="project_type" class="form-control" placeholder="Loại dự " required></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight:bold;">Quy mô</label>
                            <textarea name="scale" class="form-control" placeholder="Quy mô" required></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;">Ảnh đại diện</label>
                            <input name="img" type="file" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;">Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="2">Chưa xuất bản</option>
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