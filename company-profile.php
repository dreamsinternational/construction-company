<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <?php require "includes/head.php"; ?>

    <style>
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

        .core-team-section .card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <?php require "includes/header.php"; ?>

    <section class="breadcrumb-section pt-5 pb-0">
        <div class="pt-5">
            <div class="section-overlay py-5"></div>
            <div class="container section-content text-left py-5">
                <h1 class="text-white font-weight-bold mb-3">Company Profile</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Company Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="company-info-section py-5">
        <section class="container">
            <p>We are pleased to introduce ourselves as ABL Infrastructure Private Limited and A.B. Lodha. Our large and spread up construction activities are initiated by these two companies. Our Founding Director Mr. Anil Bansilal Lodha‘s charismatic guidance and adherence to strict standards in terms of quality and workmanship has helped the us scale success through many projects executed successfully across India. From Malls, Industries, Thermal & Hydro Power plants to prestigious Residential complexes, bridges and tunnels all through India, we have proved our workmanship for various time-sensitive projects.</p>
            <br>
            <p>Our current Director Mr. Darshan Anil Lodha, following on the footsteps of Mr. Anil Lodha, is taking the company to newer heights, and expanding the company’s footprint in roads, railways and industrial projects. For Darshan, entrepreneurial spirit runs in his genes. After completing his Civil Engineering from KK Wagh College of Engineering with Distinction in 2012, Darshan gained 5 years of ground experience on various project sites across India (Gujarat, West Bengal, Jharkhand, Rajasthan and Maharashtra). He has been managing the business independently since 2017. He has mastered the art of managing people, capital and challenging situations. Under his leadership, ABL is evolving into an even stronger force, with focus on digitisation and operational efficiencies. Our strength lies in our highly motivated, hard working and result oriented staff along with a large fleet of modern construction and earthmoving equipments and machinery inclusive of Hydraulic Rotary Rig MAIT-HR-180.</p>
            <br>
            <p>Our mentor, Mr. Dinesh Dhoka, has been associated with our organisation and involved in execution and planning of all major projects since 1996. Mr. Vinod Kataria, our advisor and chief strategist, is a 1982 Civil Engineering graduate from VNIT, and has been associated with us since 2003.</p>


        </section>
    </section>


    <section class="core-team-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="font-weight-bold">Meet Our Core Team</h2>
                <p class="text-muted">Dedicated professionals driving our success</p>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-0 shadow text-center h-100 p-3">
                        <img src="images/userimg4.jpg" class="rounded-circle mx-auto mb-3" alt="Team Member 1">
                        <h5 class="mb-1">Amit Sharma</h5>
                        <p class="text-muted mb-0">Founder & CEO</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-0 shadow text-center h-100 p-3">
                        <img src="images/userimg3.jpg" class="rounded-circle mx-auto mb-3" alt="Team Member 2">
                        <h5 class="mb-1">Neha Verma</h5>
                        <p class="text-muted mb-0">Operations Head</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-0 shadow text-center h-100 p-3">
                        <img src="images/userimg1.jpg" class="rounded-circle mx-auto mb-3" alt="Team Member 3">
                        <h5 class="mb-1">Rahul Patil</h5>
                        <p class="text-muted mb-0">Project Manager</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card border-0 shadow text-center h-100 p-3">
                        <img src="images/userimg2.jpg" class="rounded-circle mx-auto mb-3" alt="Team Member 4">
                        <h5 class="mb-1">Sonia Mehta</h5>
                        <p class="text-muted mb-0">Design Lead</p>
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