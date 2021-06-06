
<?php if (isset($_POST["GUI"])) {
    $data = array(
        'fullname' => $_POST["fullname"],
        'email' => $_POST["email"],
        'phone' => $_POST["phone"],
        'detail' => $_POST["detail"],
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        'updated_by' => 1,
        'status' => 1
    );
    $contact->contact_insert($data);
}

?> ?>

<section id="section-lien-he">
    <div class="section-content">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h2>LIÊN HỆ</h2>
                </div>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="fullname" id="name" aria-describedby="helpId" placeholder="Họ và tên">
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">
                    <input type="phone" class="form-control phone" name="phone" id="phone" aria-describedby="helpId" placeholder="Số điện thoại">
                    <textarea class="form-control mess" name="detail" id="" cols="30" rows="10" placeholder="Message"></textarea>
                </form>
                <div class="btn-submit">
                    <button type="submit" name="GUI" class="form-control submit ">Gửi tin</button>
                </div>


            </div>
        </div>
    </div>
</section>