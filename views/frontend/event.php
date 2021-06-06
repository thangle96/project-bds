<?php

use App\Models\Event;

$event = new Event;
$listEvent = $event->Event_list_home();
?>
<section id="su-kien">
    <div class="section-content">
        <div class="text-center">
            <h2>SỰ KIỆN</h2>
        </div>
        <div class="content-event">
            <?php foreach ($listEvent as $list) : ?>
                <div class="item">
                    <a href="index.php?option=event&id=<?php echo $list['id']; ?>" class="img-item">
                        <img src="./public/images/<?php echo $list['img'] ?>" width="360">
                    </a>
                    <div class="content-item">
                        <h5><?php echo $list['name'] ?></h5>
                        <div class="line"></div>
                        <p class="time"><?php echo $list['time'] ?></p>
                        <a href="index.php?option=event&id=<?php echo $list['id']; ?>" style="color: black;">Xem thêm</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center">
            <a href="index.php?option=eventlist" class="submit">Xem tất cả sự kiện</a>
        </div>
    </div>
</section>