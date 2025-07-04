<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <?php require "includes/head.php"; ?>

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .project-box {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .project-box img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .project-box:hover img {
            transform: scale(1.05);
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            opacity: 0;
            transition: 0.4s;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            border-radius: 10px;
        }

        .project-box:hover .project-overlay {
            opacity: 1;
        }

        .project-overlay h5 {
            color: #fff;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .project-overlay a {
            color: #ffc107;
            font-weight: 500;
            text-decoration: none;
        }

        /* Breadcrumb Section */
        .breadcrumb-section {
            position: relative;
            background: url('images/contactimg1.jpg') center center/cover no-repeat;
        }

        .breadcrumb-content h1 {
            font-size: 40px;
            font-weight: 700;
        }

        .breadcrumb-content .breadcrumb {
            background: transparent !important;
            padding: 0;
            margin: 0;
        }

        .breadcrumb-content .breadcrumb-item a,
        .breadcrumb-content .breadcrumb-item.active {
            color: #fff;
        }

        .section-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .section-content {
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>

    <?php require "includes/header.php"; ?>

    <section class="breadcrumb-section pt-5 pb-0">
        <div class="pt-5">
            <div class="section-overlay py-5"></div>
            <div class="container section-content text-left py-5">
                <h1 class="text-white font-weight-bold mb-3">Projects</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    

    <section class="project-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="font-weight-bold">Our Recent Projects</h2>
                <p class="text-muted">Explore the innovative, high-quality construction projects that define our commitment to excellence.</p>
            </div>

            <div class="row">
                <?php for ($i = 1; $i <= 9; $i++) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="project-box">
                            <img src="images/projectsimg<?= $i ?>.jpg" alt="Project <?= $i ?>">
                            <div class="project-overlay">
                                <h5>Project <?= $i ?></h5>
                                <a href="#">View Details <i class="fas fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="contact-2-section py-5" style="background-color: #111;">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 p-3 d-flex align-items-center">
                    <div class="logo py-3 px-4 d-flex align-items-center justify-content-center"
                        style="height: 100%; background-color: #fec42e; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                        <img src="images/map-icon.png" alt="map" style="width: 30px;">
                    </div>
                    <div class="text p-3"
                        style="background-color: #1f1f1f; color: #fff; border-top-right-radius: 10px; border-bottom-right-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.3);">
                        <p class="m-0" style="font-weight: 600; color: #fec42e;">Visit Us</p>
                        <h6 class="m-0" style="font-weight: 500;">Mangal Bhuvan, Panchavati Karanja, Nashik 422 003</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 p-3 d-flex align-items-stretch">
                    <div class="logo py-3 px-4 d-flex align-items-center justify-content-center"
                        style="height: 100%; background-color: #fec42e; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                        <img src="images/phone-icon.png" alt="phone" style="width: 30px;">
                    </div>
                    <div class="text p-3"
                        style="background-color: #1f1f1f; color: #fff; border-top-right-radius: 10px; border-bottom-right-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.3); width: 100%; height: 100%;">
                        <p class="m-0" style="font-weight: 600; color: #fec42e;">Call Us</p>
                        <h6 class="m-0" style="font-weight: 500;">0253 - 2514235</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 p-3 d-flex align-items-stretch">
                    <div class="logo py-3 px-4 d-flex align-items-center justify-content-center"
                        style="height: 100%; background-color: #fec42e; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                        <img src="images/email-icon.png" alt="email" style="width: 30px;">
                    </div>
                    <div class="text p-3"
                        style="background-color: #1f1f1f; color: #fff; border-top-right-radius: 10px; border-bottom-right-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.3);width: 100%; height: 100%;">
                        <p class="m-0" style="font-weight: 600; color: #fec42e;">Email Us</p>
                        <h6 class="m-0" style="font-weight: 500;">ho@ablinfra.com</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section py-3" style="border-top: 1px solid #333; background-color: #000;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="footer-box">
                    <p class="m-0 text-light" style="font-size: 14px; color: #aaa;">© 2035 by Sphere Constructions. Powered and secured by Sphere</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>