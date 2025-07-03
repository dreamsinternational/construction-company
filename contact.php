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
    </style>
</head>

<body>
    <?php
    require "includes/header.php";
    ?>

    <div class="contact-breadcrumb" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="heading d-flex align-items-center justify-content-start"
            style="padding-top: 150px; padding-bottom: 80px">
            <div class="container">
                <h1 class="text-light" style="font-size: 40px; font-weight: 700; color: #FFF;">Contact Us</h1>
            </div>
        </div>
        <div class="contact-breadcrumb py-3" style="background-color: rgba(0, 0, 0, 0.4);">
            <div class="container">
                <p class="m-0 text-light"><a href="index.php" class="text-light">Home</a> > Contact Us</p>
            </div>
        </div>
    </div>

    <section class="contact-section py-5">
        <div class="container">
            <div class="map" style="width: 100% important;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.714867301652!2d73.85213668035261!3d18.496570325043532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfeb0285bf91%3A0x2f2ad33e3ea3ca56!2sDreams%20International!5e0!3m2!1sen!2sin!4v1751450770222!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="address-section border py-5 mt-5 px-4 text-light" style="background: url(Images/wixcontactsectionimg.jpg); background-repeat: no-repeat; background-size: cover;">
                <h4 class="pl-3" style="font-size: 17px;
                            text-transform: uppercase;
                            margin-bottom: 35px; border-left: 4px solid #fec42e;font-family: Montserrat, Helvetica, Arial, sans-serif;
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