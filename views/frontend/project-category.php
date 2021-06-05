<?php
use App\Models\Project;

$event = new Project;
$listEvent = $event->project_list();
require_once("./views/frontend/header.php")
?>
<section id="su-kien">
    <div class="section-content">
        <div class="text-center">
            <h2>SỰ KIỆN</h2>
        </div>
        <div class="content-event">
            <?php foreach($listEvent as $list) :?>
            <div class="item">
                <div class="img-item">
                    <a href="index.php?option=project&id=<?php echo $list['id']; ?>">
                    <img src="./public/images/<?php echo $list['img']?>" width="360">
                    </a>
                </div>
                <div class="content-item">
                    <h5><?php echo $list['name']?></h5>
                    <div class="line"></div>
                    <p class="time"><?php echo $list['time']?></p>
                    <a href="index.php?option=project&id=<?php echo $list['id']; ?>" style="color: black;">Xem thêm</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require_once("./views/frontend/footer.php") ?>