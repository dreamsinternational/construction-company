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
                <h1 class="text-white font-weight-bold mb-3">Commitment</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Commitment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="commitment-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <p>We at ABL Infrastructure take pride in our ethical work culture. We base our work on mutual trust to achieve success. We accord our technological capability, manpower and core values with our client to deliver satisfactory solutions without losing focus on the time sensitivity of the project.</p>
                    <p>We are committed to our project partners via our long-term relationships based on trust and confidence. To our employees, we commit employability and safety at work.</p>
                </div>

                <div class="col-12 mt-4">
                    <h5 class="fw-bold">Safety</h5>
                    <p>This is the primary objective of the organization. We apply health & safety policy to every person employed at the ABL Infra.</p>
                </div>

                <div class="col-12 mt-4">
                    <h5 class="fw-bold">Equality & Diversity</h5>
                    <p>We strive to diversify the supervisory staff with an effort to include people of diverse origins and propagate gender equality at the workplace. Our company policy guides us in this endeavour by aiming to remove all forms of discrimination at workplace and relations.</p>
                </div>

                <div class="col-12 mt-4">
                    <h5 class="fw-bold">Sustained Careers</h5>
                    <p>We are committed to training and mobilising job opportunities to our employees and hence promote sustained career environment. This contribution promotes a managerial and technical culture which is essential for our business transformation.</p>
                </div>

                <div class="col-12 mt-4">
                    <h5 class="fw-bold">Quality ensured in every phase</h5>
                    <p>We at ABL simplify the philosophy of quality – conform with or outdo the clients’ expectation with our continuous efforts to improve quality and construct the project right the first time. To aid in this regard, we have devised a quality assurance program which checks the following factors:</p>
                    <ul class="mt-3 pl-4">
                        <li class="mb-2">
                            <strong>Conform with client requirement:</strong>
                            <p class="mb-1">Our team spends time in creating work plan which dictates the methods of work execution. Our team is involved in pre-activity meetings which summarise our methods of fulfilling a contract and design for a given client specification.</p>
                        </li>
                        <li class="mb-2">
                            <strong>Outdo the clients' expectation:</strong>
                            <p class="mb-1">We spend time listening to client concerns and specification and bring in transparency to all our deals. We are aimed at building an honest long-term relationship with clients at every stage.</p>
                        </li>
                        <li class="mb-2">
                            <strong>Eliminate rework:</strong>
                            <p class="mb-1">We diagnose the quality issues in a project at any stage. When an issue is identified, the analysis team sets to find the root cause and work towards eliminating the issue causing quality concern and prevent its recurrence in a project.</p>
                        </li>
                        <li class="mb-2">
                            <strong>Continuous quality improvement:</strong>
                            <p class="mb-1">We are focused on retaining the quality in every stage of the construction activity. We are therefore committed to excellence in every job we take up. We welcome innovative ideas which help improve our performance.</p>
                        </li>
                        <li class="mb-2">
                            <strong>Build it right the first time:</strong>
                            <p class="mb-0">Construction work at every stage is supervised by craftsmen regularly to ensure that the work is accomplished in the first attempt without requiring an alteration or modification.</p>
                        </li>
                    </ul>
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