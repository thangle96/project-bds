<?php

use App\Models\Project;

$project = new Project;
$id = $_GET['id'];
$prod = $project->project_detail($id);
?>

<?php require_once("./views/frontend/header.php") ?>
<?php require_once("./views/frontend/slider.php") ?>
<div class="project_detail">
    <?php foreach ($prod as $pj) : ?>
        <img src="./public/images/<?php echo $pj['img'] ?>" width="850">
        <div class="content">
            <h5>THÔNG TIN CHUNG</h5>
            <p>Tên dự án: <b><?php echo $pj['name'] ?></b></p>
            <p>Chủ đầu tư: <b><?php echo $pj['investor'] ?></b></p>
            <p>Địa chỉ: <b><?php echo $pj['address'] ?></b></p>
            <p>Tổng diện tích: <b> <?php echo $pj['total_area']?>m²</b></p>
            <p>Loại hình phát triển: <b><?php echo $pj['project_type']?></b></p>
            <p>Quy mô dự án: <b><?php echo $pj['scale']?></b></p>
        </div>
</div>
<div class="project_detail_content">
    <div class="container">
        <h2><b>GIỚI THIỆU DỰ ÁN</b></h2>
        <h5>Thông tin tổng quan dự án <?php echo $pj['name']?></h5>
        <p><?php echo $pj['content']?></p>
    </div>
</div>
<?php endforeach; ?>
<?php require_once("./views/frontend/contact-home.php") ?>
<?php require_once("./views/frontend/footer.php") ?>