<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Services</title>
    <?php require "includes/head.php"; ?>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            color: #333;
        }

        h2.section-title {
            font-weight: 700;
            color: #222;
            margin-bottom: 25px;
            text-align: left;
        }

        p.section-subtitle {
            color: #555;
            margin-bottom: 40px;
            text-align: left;
        }

        .equal-height-card {
            height: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .equal-height-card:hover {
            transform: translateY(-4px);
        }

        .equal-height-card .card-body {
            padding: 25px;
        }

        .equal-height-card h5 {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .bg-light-grey {
            background-color: #f9f9f9;
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

        .text-yellow {
            color: #edcd1f;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php require "includes/header.php"; ?>

    <section class="breadcrumb-section pt-5 pb-0">
        <div class="pt-5">
            <div class="section-overlay py-5"></div>
            <div class="container section-content text-left py-5">
                <h1 class="text-white font-weight-bold mb-3">Our Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="container">
            <h2 class="section-title">What We Offer</h2>
            <p class="section-subtitle mb-0">
                With decades of experience in the construction and infrastructure domain, ABL Infrastructure provides end-to-end solutions for complex, time-bound, and high-value projects across India.<br><br>
                From pre-construction planning and feasibility studies to on-site project execution and post-completion support, we handle every aspect of the project lifecycle. We specialize in delivering tailor-made solutions that cater to industries such as real estate, industrial manufacturing, energy, logistics, and more.<br><br>
                Our strength lies in blending technical expertise with modern construction technology to deliver safe, sustainable, and cost-effective results. Every project we undertake reflects our commitment to innovation, timely delivery, and exceptional quality.
            </p>
        </div>
    </section>

    <section class="section py-5 bg-light-grey">
        <div class="container">
            <h2 class="section-title">Our Core Services</h2>
            <p class="section-subtitle">We bring together expertise, innovation, and quality to every domain we serve.</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card equal-height-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-industry mr-2 text-yellow"></i>Industrial Construction</h5>
                            <p>Design and development of industrial facilities including manufacturing units, warehouses, and processing plants with precision engineering.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card equal-height-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-road mr-2 text-yellow"></i>Infrastructure Development</h5>
                            <p>Execution of large-scale infrastructure projects such as roads, bridges, and railways ensuring long-term reliability and compliance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card equal-height-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-tools mr-2 text-yellow"></i>Turnkey Projects</h5>
                            <p>Complete end-to-end management of projects from planning and procurement to execution and delivery under strict timelines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="container">
            <h2 class="section-title">Why Choose ABL Infrastructure</h2>
            <p class="section-subtitle">We are committed to providing unparalleled value through our operational excellence and deep industry knowledge.</p>
            <ul>
                <li><strong>Experienced Team:</strong> Led by industry veterans with decades of hands-on experience.</li>
                <li><strong>On-Time Delivery:</strong> Proven track record in completing projects ahead of schedule.</li>
                <li><strong>Modern Equipment:</strong> Fleet of advanced construction machinery and tools.</li>
                <li><strong>Client-Centric Approach:</strong> Customized solutions based on individual project needs.</li>
            </ul>
        </div>
    </section>

    <section class="section py-5 bg-light-grey">
        <div class="container">
            <h2 class="section-title">Our Project Execution Approach</h2>
            <p class="section-subtitle">A streamlined methodology ensures quality delivery from the ground up:</p>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card equal-height-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-drafting-compass mr-2 text-yellow"></i>1. Planning & Design</h5>
                            <p>Thorough analysis, blueprint development, and digital modeling to prepare each project for flawless execution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card equal-height-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-hard-hat mr-2 text-yellow"></i>2. On-Site Execution</h5>
                            <p>Deployment of expert teams, safety standards, and real-time progress monitoring using modern tools and technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="container">
            <h2 class="section-title">Industries We Serve</h2>
            <p class="section-subtitle">Over the years, we’ve partnered with clients from a wide range of industries:</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card equal-height-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-building mr-2 text-yellow"></i>Real Estate</h5>
                            <p>Construction of high-quality residential and commercial buildings including luxury apartments and office parks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card equal-height-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-bolt mr-2 text-yellow"></i>Power & Energy</h5>
                            <p>Infrastructure for power plants (hydro, thermal) with specialized civil and mechanical execution capabilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card equal-height-card h-100">
                        <div class="card-body">
                            <h5><i class="fas fa-truck-moving mr-2 text-yellow"></i>Transport & Logistics</h5>
                            <p>Development of roads, flyovers, and logistic hubs to support state and national-level connectivity.</p>
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
</body>

</html>