<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php
    require "includes/head.php";
    ?>
    <style>
        ul {}

        li {
            list-style: none;
            display: flex;
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
    </style>
</head>

<body>
    <?php
    require "includes/header.php";
    ?>

    <section class="breadcrumb-section pt-5 pb-0">
        <div class="pt-5">
            <div class="section-overlay py-5"></div>
            <div class="container section-content text-left py-5">
                <h1 class="text-white font-weight-bold mb-3">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="contact-section py-5">
        <div class="container">
            <div class="map" style="width: 100% important;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.714867301652!2d73.85213668035261!3d18.496570325043532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfeb0285bf91%3A0x2f2ad33e3ea3ca56!2sDreams%20International!5e0!3m2!1sen!2sin!4v1751450770222!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="address-section border py-5 mt-5 px-4 text-light"
                style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/contactimg1.jpg'); background-repeat: no-repeat; background-size: cover;">
                <h4 class="pl-3" style="font-size: 17px;
            text-transform: uppercase;
            margin-bottom: 35px; border-left: 4px solid #fec42e;
            font-family: Montserrat, Helvetica, Arial, sans-serif;
            font-weight: 700;
            line-height: 1.2;">
                    ABL Infrastructure Pvt. Ltd.
                </h4>
                <div class="py-2">
                    <img class="pr-1" style="color: #fec42e" src="Images/map-icon.png" width="20px" alt="">
                    Mangal Bhuvan, Near Swami Vivekanand High School, Panchavati, Nashik 422 003
                </div>
                <div class="py-2">
                    <img class="pr-1" style="color: #fec42e" src="Images/phone-icon.png" width="20px" alt="">
                    Pankaj Dharmadhikari: 9850954567
                </div>
                <div class="py-2">
                    <img class="pr-1" style="color: #fec42e" src="Images/email-icon.png" width="20px" alt="">
                    ho@ablinfra.com
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