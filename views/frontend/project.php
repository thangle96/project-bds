<?php

use App\Models\Project;

$project = new Project;
$listproject = $project->project_list();
?>
<section id="du-an-noi-bac">
    <div class="section-content">
        <div class="text-center">
            <h2>DỰ ÁN NỔI BẬT</h2>
        </div>
        <div class="owl-carousel owl-theme your-class">
            <?php foreach ($listproject as $list) : ?>
                <div class="item">
                    <a href="index.php?option=project&id=<?php echo $list['id']; ?>" class="img-item">
                        <img src="./public/images/<?php echo $list['img'] ?>" alt="">
                    </a>
                    <div class="item-content text-center">
                        <p><?php echo $list['name'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center">
            <a href="#" class="submit">Xem tất cả dự án</a>
        </div>
    </div>
</section>