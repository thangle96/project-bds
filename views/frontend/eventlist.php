<?php

use App\Models\Event;

$event = new Event;
$listEvent = $event->Event_list();
require_once("./views/frontend/header.php");
require_once("./views/frontend/slider.php");
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
                    <img src="./public/images/<?php echo $list['img']?>" width="360">
                </div>
                <div class="content-item">
                    <h5><?php echo $list['name']?></h5>
                    <div class="line"></div>
                    <p class="time"><?php echo $list['time']?></p>
                    <a href="#" style="color: black;">Xem thêm</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require_once("./views/frontend/contact-home.php"); ?>
<?php require_once("./views/frontend/footer.php"); ?>