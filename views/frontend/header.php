<?php

use App\Models\Project;

$project = new Project;
$listproject = $project->project_list();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./public/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="./public/slick/slick.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/css/style.css">
    <style>
        section {
            margin: 50px 0;
        }
    </style>
</head>

<body>
    <!-- header  -->

    <header id="header" class="w-100">
        <div class="header-navbar">
            <nav class="container navbar navbar-expand-lg navbar-light" style="padding: 0;">
                <div id="header-logo">
                    <a class="navbar-brand" href="index.php?option=home">
                        <img src="./public/images/logo-investment-large.png" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="nav">
                        <li class="nav-item active">
                            <a class="nav-link"  href="index.php?option=project&id=<?php echo $list['id']; ?>">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item  dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                DỰ ÁN NỔI BẬT
                            </a>
                            <div class="dropdown-menu">
                                <?php foreach($listproject as $list): ?>
                                <a class="dropdown-item"  href="index.php?option=project&id=<?php echo $list['id']; ?>"><?php echo $list['name'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?option=eventlist">SỰ KIỆN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ĐỐI TÁC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">LIÊN HỆ</a>
                        </li>
                        <li class="nav-item">
                            <div class="hotline">
                                <p>Hotline:
                                    <span>0902.848.440</span>
                                    -
                                    <span>0938.460.400</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>