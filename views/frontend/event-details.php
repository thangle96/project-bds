<?php

use App\Models\Event;

$project = new Event;
$id = $_GET['id'];
$prod = $project->Event_detail($id);
?>

<?php require_once("./views/frontend/header.php") ?>
<?php require_once("./views/frontend/slider.php") ?>
<div class="event_detail">
    <?php foreach ($prod as $pj) : ?>
        <div class="container">
        <img src="./public/images/<?php echo $pj['img'] ?>" width="100%">
       
        <h5 style="margin-top: 20px;"><b><?php echo $pj['name']?></b></h5>
        <p>Thời gian: <b><?php echo $pj['time']?></b></p>
        <p>Địa điểm: <b><?php echo $pj['address']?></b></p>
        <p><?php echo $pj['content']?></p>
    </div>
</div>
<?php endforeach; ?>
<?php require_once("./views/frontend/contact-home.php") ?>
<?php require_once("./views/frontend/footer.php") ?>