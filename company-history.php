<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company History</title>
    <?php require "includes/head.php"; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <style>
        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            font-size: 16px;
            line-height: 1.7;
            color: #333;
        }

        h1,
        h2,
        h3,
        h5 {
            font-weight: 700;
            color: #222;
        }

        p {
            font-size: 16px;
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

        .company-intro {
            background: #f8f9fa;
            border-left: 5px solid #ffc107;
            padding: 30px;
            border-radius: 5px;
        }

        .timeline-section .timeline-item {
            border-left: 4px solid #ffc107;
            padding-left: 20px;
            margin-bottom: 30px;
        }

        .timeline-item h5 {
            font-size: 20px;
            font-weight: 600;
        }

        .timeline-item p {
            color: #555;
        }

        .values-section {
            background-color: #f7f7f7;
        }

        .value-box {
            text-align: center;
            padding: 30px 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.07);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .value-box:hover {
            transform: translateY(-5px);
        }

        .value-box i {
            font-size: 40px;
            color: #ffc107;
            margin-bottom: 15px;
        }

        .value-box h5 {
            font-size: 20px;
            font-weight: 600;
        }

        .value-box p {
            color: #555;
        }

        .contact-2-section .box {
            background-color: #38393a;
        }

        .contact-2-section h6,
        .contact-2-section p {
            margin: 0;
            color: #fff;
        }

        .contact-2-section .logo {
            background-color: #000;
            height: 100%;
        }
    </style>
</head>

<body>
    <?php require "includes/header.php"; ?>

    <section class="breadcrumb-section pt-5 pb-0">
        <div class="pt-5">
            <div class="section-overlay py-5"></div>
            <div class="container section-content text-left py-5">
                <h1 class="text-white font-weight-bold mb-3">Company History</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Company History</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="company-intro">
                <h3 class="mb-3">About ABL Infrastructure</h3>
                <p>We are pleased to introduce ourselves as ABL Infrastructure Private Limited and A.B. Lodha. Our extensive
                    construction operations are led by our visionary founders and a robust team. From malls and industries to
                    hydro and thermal power plants, bridges, and residential complexes, our excellence is reflected in landmark
                    projects across India.</p>
                <p>Our current Director Mr. Darshan Anil Lodha, following in the footsteps of Mr. Anil Lodha, is taking the
                    company to new heights. After graduating in Civil Engineering from KK Wagh College with Distinction in 2012,
                    he gained on-ground experience across India and has been leading operations since 2017. Under his leadership,
                    ABL has embraced digitization, enhanced operational efficiency, and expanded into railways and roads.</p>
                <p>Our mentor Mr. Dinesh Dhoka has guided our project execution since 1996. Mr. Vinod Kataria, our trusted
                    advisor and strategist, has been a valuable asset since 2003 with his technical expertise from VNIT.</p>
            </div>
        </div>
    </section>

    <section class="timeline-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center font-weight-bold mb-5">Milestones & Growth</h2>
            <div class="timeline-item">
                <h5>1996 – Mr. Dinesh Dhoka joins</h5>
                <p>Mr. Dhoka begins leading planning and execution of major projects with remarkable expertise.</p>
            </div>
            <div class="timeline-item">
                <h5>2003 – Mr. Vinod Kataria joins as Chief Strategist</h5>
                <p>Graduated from VNIT, he brings technical and visionary strength to the company’s operations.</p>
            </div>
            <div class="timeline-item">
                <h5>2012 – Darshan Lodha graduates</h5>
                <p>Completes Civil Engineering with Distinction and begins gaining hands-on project experience.</p>
            </div>
            <div class="timeline-item">
                <h5>2017 – Darshan Lodha takes over operations</h5>
                <p>ABL evolves under his leadership with emphasis on digitisation and operational efficiency.</p>
            </div>
        </div>
    </section>

    <section class="values-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="font-weight-bold">Our Core Values</h2>
                <p class="text-muted">These principles guide everything we build</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="value-box">
                        <i class="fas fa-hard-hat"></i>
                        <h5>Commitment to Quality</h5>
                        <p>We ensure every project meets the highest standards of craftsmanship, safety, and compliance.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="value-box">
                        <i class="fas fa-users-cog"></i>
                        <h5>Innovation & Efficiency</h5>
                        <p>We invest in modern equipment and digital solutions to enhance operational efficiency.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="value-box">
                        <i class="fas fa-handshake"></i>
                        <h5>Integrity & Trust</h5>
                        <p>Our long-standing relationships are built on transparency, consistency, and ethical practices.</p>
                    </div>
                </div>
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.navbar-nav>li>a').on('click', function() {
                $('.navbar-collapse').collapse('hide');
            });
        });
    </script>
</body>

</html>