<?php require_once('../views/backend/header.php'); ?>
<form action="index.php?option=Partner&cat=process" method="post" enctype="multipart/form-data">
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
                        <a class="btn btn-sm btn-danger" href="index.php?option=Partner"><i class="fas fa-trash"></i>Thoát</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
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
</form>
<?php require_once('../views/backend/footer.php'); ?>