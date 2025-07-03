<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <?php require "includes/head.php"; ?>

    <style>
        .project-box {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .project-box:hover {
            transform: scale(1.03);
        }

        .project-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 10px;
            transition: transform 0.4s ease;
        }

        .project-box:hover img {
            transform: scale(1.05);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.85);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .project-box:hover .overlay {
            opacity: 1;
        }

        .project-caption {
            color: #000;
            font-weight: 600;
            font-size: 1.25rem;
            text-transform: uppercase;
            text-align: center;
            padding: 0 15px;
        }

        .section-title h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #222;
        }

        .section-title p {
            font-size: 1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php require "includes/header.php"; ?>

    <!-- Breadcrumb -->
    <div class="contact-breadcrumb" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="heading d-flex align-items-center justify-content-start"
            style="padding-top: 150px; padding-bottom: 80px">
            <div class="container">
                <h1 class="text-light" style="font-size: 40px; font-weight: 700;">Our Projects</h1>
            </div>
        </div>
        <div class="contact-breadcrumb py-3" style="background-color: rgba(0, 0, 0, 0.4);">
            <div class="container">
                <p class="m-0 text-light"><a href="index.php" class="text-light">Home</a> > Projects</p>
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="project-section py-5 bg-light">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>Our Recent Projects</h2>
                <p>Explore the innovative, high-quality construction projects that define our commitment to excellence.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg1.jpg" alt="Project 1">
                        <div class="overlay">
                            <span class="project-caption">Project 1</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg2.jpg" alt="Project 2">
                        <div class="overlay">
                            <span class="project-caption">Project 2</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg3.jpg" alt="Project 3">
                        <div class="overlay">
                            <span class="project-caption">Project 3</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg4.jpg" alt="Project 4">
                        <div class="overlay">
                            <span class="project-caption">Project 4</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg5.jpg" alt="Project 5">
                        <div class="overlay">
                            <span class="project-caption">Project 5</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg6.jpg" alt="Project 6">
                        <div class="overlay">
                            <span class="project-caption">Project 6</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg7.jpg" alt="Project 7">
                        <div class="overlay">
                            <span class="project-caption">Project 7</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg8.jpg" alt="Project 8">
                        <div class="overlay">
                            <span class="project-caption">Project 8</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 p-4">
                    <div class="project-box">
                        <img src="Images/wixprojectsimg9.jpg" alt="Project 9">
                        <div class="overlay">
                            <span class="project-caption">Project 9</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-2-section py-5" style="background-color:  rgba(0, 0, 0, 0.4); py-3">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-4 col md-4 col-12 p-3 d-flex align-items-center">
                    <div class="logo py-3 px-4 d-flex align-items-center justify-content-center" style="height: 100%; background-color: black;">
                        <img src="Images/map-icon.png" alt="">
                    </div>
                    <div class="text p-3 " style="background-color: #38393a">
                        <p class="text-light m-0">Visit Us</p>
                        <h6 class="text-light">Mangal Bhuvan, Panchavati Karanja, Nashik 422 003</h6>
                    </div>
                </div>
                <div class="col-lg-4 col md-4 col-12 p-3 d-flex align-items-center">
                    <div class="logo py-3 px-4 d-flex align-items-center justify-content-center" style="height: 100%; background-color: black;">
                        <img src="Images/map-icon.png" alt="">
                    </div>
                    <div class="text p-3 " style="background-color: #38393a">
                        <p class="text-light m-0">Visit Us</p>
                        <h6 class="text-light">Mangal Bhuvan, Panchavati Karanja, Nashik 422 003</h6>
                    </div>
                </div>
                <div class="col-lg-4 col md-4 col-12 p-3 d-flex align-items-center">
                    <div class="logo py-3 px-4 d-flex align-items-center justify-content-center" style="height: 100%; background-color: black;">
                        <img src="Images/map-icon.png" alt="">
                    </div>
                    <div class="text p-3 " style="background-color: #38393a">
                        <p class="text-light m-0">Visit Us</p>
                        <h6 class="text-light">Mangal Bhuvan, Panchavati Karanja, Nashik 422 003</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="footer-section py-3" style="border-top: 1px solid black; background-color: rgba(0, 0, 0, 0.4);">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between  flex-wrap">
                <div class="footer-box">
                    <p class="m-0 text-light">© 2035 by Sphere Constructions. Powered and secured by Wix</p>
                </div>
                <!-- <div class="footer-box">
                <div class="social-icons d-flex align-items-center justify-content-end">
                    <div class="fb-icon px-2">
                        <img src="Images/facebook.png" width="32px" alt="">
                    </div>
                    <div class="li-icon px-2">
                        <img src="Images/linkedin.png" width="32px" alt="">
                    </div>
                </div>
            </div> -->
            </div>
        </div>
    </section>

    <!-- <?php require "includes/footer.php"; ?> -->

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