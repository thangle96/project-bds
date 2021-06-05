<?php

use App\Models\Partner;

$partner = new Partner;
$listPartner = $partner->Partner_list();
?>
<section id="doiTac">
    <div class="section-content">
        <div class="text-center">
            <h2>ĐỐI TÁC</h2>
        </div>
        <div class="row">
            <?php foreach ($listPartner as $list) : ?>
            <div class="col-item">
                <a href="">
                    <div class="img-doi-tac">
                        <img src="./public/images/<?php echo $list['img'] ?>" alt="">
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>