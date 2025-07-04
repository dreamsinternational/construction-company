<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <?php require "includes/head.php"; ?>

    <style>
        /* Shared Overlay */
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

        /* Breadcrumb Section */
        .breadcrumb-section {
            position: relative;
            background: url('Images/wixcontactimg1.jpg') center center/cover no-repeat;
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

        /* Core Team Section */
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
                <h1 class="text-white font-weight-bold mb-3">Plant and Machinery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Plant and Machinery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="company-info-section py-5">
        <section class="container">
            <h2 style="color: #edcd1f;">PLANT & MACHINERY</h2>
            <p>The backbone of the construction industry is its equipment. We at ABL Infra believe in the power of technology and are heavily invested in modern technology. Our fleet includes:</p>
            <br>
            <ul style="padding-left: 15px;">
                <li class="pb-2">Hydraulic Piling Rigs (8 nos)</li>
                <li class="pb-2">Road construction machinery (Milling machine, Pavers, Tandem Rollers, Bitumen Sprayers, WMM Plant etc.)</li>
                <li class="pb-2">Earthwork Machinery (Excavators (22 nos), Hyva (51 nos), Vibro Rollers etc)</li>
                <li class="pb-2">Tower Cranes (15 nos)</li>
                <li class="pb-2">Mobile Crushing Plants (2 nos), VSI</li>
            </ul>
            <br>
            <p>The wide variety of machinery available with us helps tackle and complete projects of any scale and complexity. Our partners and client companies are assured of the timely completion of projects. ABL has carved a reputation for being the most performance and dedication driven the company for completing projects on time.

            </p>


        </section>
    </section>



    <section class="machinery-section">
        <div class="container mb-5">
            <div id="accordion">

                <div class="card my-2" style="border: 1px solid #ddd;">
                    <div class="card-header d-flex align-items-center"
                        style="background-color: #f7b940; cursor: pointer; padding: 15px;"
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne">
                        <h5 class="mb-0 text-white font-weight-bold" style="margin: 0;">&#9660;&nbsp; Hydraulic Piling Rig</h5>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg2.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg3.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg4.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg3.jpg" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-2" style="border: 1px solid #ddd;">
                    <div class="card-header d-flex align-items-center"
                        style="background-color: #f7b940; cursor: pointer; padding: 15px;"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo">
                        <h5 class="mb-0 text-white font-weight-bold" style="margin: 0;">&#9660;&nbsp; Construction Machinery</h5>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg2.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg3.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg4.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg3.jpg" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-2" style="border: 1px solid #ddd;">
                    <div class="card-header d-flex align-items-center"
                        style="background-color: #f7b940; cursor: pointer; padding: 15px;"
                        data-toggle="collapse"
                        data-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree">
                        <h5 class="mb-0 text-white font-weight-bold" style="margin: 0;">&#9660;&nbsp; Earthwork Machinery</h5>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg2.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg3.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg4.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg3.jpg" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-2" style="border: 1px solid #ddd;">
                    <div class="card-header d-flex align-items-center"
                        style="background-color: #f7b940; cursor: pointer; padding: 15px;"
                        data-toggle="collapse"
                        data-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour">
                        <h5 class="mb-0 text-white font-weight-bold" style="margin: 0;">&#9660;&nbsp; Crushing Plant</h5>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg2.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg3.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg4.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-md-2 col-6 mb-3"><img src="Images/wixprojectimg3.jpg" class="img-fluid" alt=""></div>
                            </div>
                        </div>
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
                        <img src="Images/map-icon.png" alt="" style="width: 30px;">
                    </div>
                    <div class="text p-3"
                        style="background-color: #1f1f1f; color: #fff; border-top-right-radius: 10px; border-bottom-right-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.3);">
                        <p class="m-0" style="font-weight: 600; color: #fec42e;">Visit Us</p>
                        <h6 class="m-0" style="font-weight: 500;">Mangal Bhuvan, Panchavati Karanja, Nashik 422 003</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 p-3 d-flex align-items-center">
                    <div class="logo py-3 px-4 d-flex align-items-center justify-content-center"
                        style="height: 100%; background-color: #fec42e; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                        <img src="Images/map-icon.png" alt="" style="width: 30px;">
                    </div>
                    <div class="text p-3"
                        style="background-color: #1f1f1f; color: #fff; border-top-right-radius: 10px; border-bottom-right-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.3);">
                        <p class="m-0" style="font-weight: 600; color: #fec42e;">Visit Us</p>
                        <h6 class="m-0" style="font-weight: 500;">Mangal Bhuvan, Panchavati Karanja, Nashik 422 003</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 p-3 d-flex align-items-center">
                    <div class="logo py-3 px-4 d-flex align-items-center justify-content-center"
                        style="height: 100%; background-color: #fec42e; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                        <img src="Images/map-icon.png" alt="" style="width: 30px;">
                    </div>
                    <div class="text p-3"
                        style="background-color: #1f1f1f; color: #fff; border-top-right-radius: 10px; border-bottom-right-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.3);">
                        <p class="m-0" style="font-weight: 600; color: #fec42e;">Visit Us</p>
                        <h6 class="m-0" style="font-weight: 500;">Mangal Bhuvan, Panchavati Karanja, Nashik 422 003</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section py-3" style="border-top: 1px solid #333; background-color: #000;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="footer-box">
                    <p class="m-0 text-light" style="font-size: 14px; color: #aaa;">© 2035 by Sphere Constructions. Powered and secured by Wix</p>
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