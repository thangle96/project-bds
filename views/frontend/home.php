<?php require_once("./views/frontend/header.php") ?>
<!-- carousel  -->
<?php require_once("./views/frontend/slider.php") ?>
<!-- giới thiệu  -->
<?php require_once("./views/frontend/introduce.php") ?>
<!-- dự án nổi bật  -->
<?php require_once("./views/frontend/project.php") ?>
<!--Sự kiện-->
<?php require_once("./views/frontend/event.php") ?>
<!-- đối tác  -->
<?php require_once("./views/frontend/partner.php") ?>
<!-- tin tức  -->
<?php require_once("./views/frontend/news.php") ?>
<!-- liên hệ  -->
<section id="section-lien-he">
    <div class="section-content">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h2>LIÊN HỆ</h2>
                </div>
                <form action="" method="POST">

                    <input type="text" class="form-control" name="" id="name" aria-describedby="helpId" placeholder="Họ và tên">
                    <input type="email" class="form-control" name="" id="email" aria-describedby="helpId" placeholder="Email">
                    <input type="phone" class="form-control phone" name="" id="phone" aria-describedby="helpId" placeholder="Số điện thoại">
                    <textarea class="form-control mess" name="mess" id="" cols="30" rows="10" placeholder="Message"></textarea>


                </form>
                <div class="btn-submit">
                    <button type="submit" class="form-control submit ">Gửi tin</button>
                </div>


            </div>
        </div>
    </div>
</section>
<?php require_once("./views/frontend/footer.php") ?>