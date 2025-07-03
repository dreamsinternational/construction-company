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

    /* About Section */
    .about-us-section h2 {
      font-weight: 700;
    }

    .about-us-section p {
      font-size: 1rem;
      line-height: 1.7;
      color: #444;
    }

    .about-img img {
      border-radius: 8px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    /* Mission & Vision Section */
    .mission-vision-section {
      background: url('Images/wixaboutusimg4.jpg') center center/cover no-repeat;
      position: relative;
      padding: 80px 0;
    }

    .mission-vision-section .container {
      position: relative;
      z-index: 2;
    }

    .mission-vision-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .mission-box,
    .vision-box {
      color: #fff;
      padding: 30px;
      border: 2px solid #fff;
      border-radius: 6px;
    }

    .mission-box h2,
    .vision-box h2 {
      font-weight: 700;
    }

    .mission-box p,
    .vision-box p {
      font-size: 1rem;
      line-height: 1.6;
    }

    /* Core Team Section */
    .core-team-section .card img {
      width: 120px;
      height: 120px;
      object-fit: cover;
    }





    /* Why Choose Us */
    .why-choose-section .icon-box {
      text-align: center;
      padding: 30px;
      border: 1px solid #e2e2e2;
      border-radius: 8px;
      transition: all 0.3s ease;
      background-color: #fff;
    }

    .why-choose-section .icon-box:hover {
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .why-choose-section .icon-box i {
      font-size: 40px;
      color: #007bff;
      margin-bottom: 15px;
    }

    /* Testimonials */
    .testimonials-section {
      background-color: #f8f9fa;
    }

    .testimonial-card {
      padding: 30px;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .testimonial-card p {
      font-style: italic;
    }

    /* CTA */
    .cta-section {
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('Images/wixaboutusimg1.jpg') center center/cover no-repeat;
      padding: 60px 0;
      text-align: center;
    }

    .cta-section h2 {
      color: #fff;
      margin-bottom: 20px;
    }

    .cta-section .btn {
      padding: 12px 30px;
      font-size: 1rem;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <?php require "includes/header.php"; ?>

  <section class="breadcrumb-section pt-5 pb-0">
    <div class="pt-5">
      <div class="section-overlay py-5"></div>
      <div class="container section-content text-left py-5">
        <h1 class="text-white font-weight-bold mb-3">About Us</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-start bg-transparent">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="breadcrumb-item active text-light" aria-current="page">About Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section class="about-us-section py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4 mb-lg-0">
          <h2 class="pb-3">About Our Company</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatem itaque consequatur deserunt? Maiores quas tempore pariatur laborum magni quia blanditiis impedit commodi, aspernatur beatae harum quae, laudantium reprehenderit exercitationem, esse odit ducimus. Blanditiis recusandae doloribus quaerat temporibus vitae beatae, odit sint unde fuga quidem adipisci iste et quibusdam, atque corporis!</p>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 about-img">
          <img src="Images/wixaboutusimg1.jpg" alt="About Us" width="100%" />
        </div>
      </div>
    </div>
  </section>

  <section class="mission-vision-section">
    <div class="section-overlay"></div>
    <div class="container section-content">
      <div class="row d-flex align-items-stretch">
        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 d-flex">
          <div class="mission-box flex-fill d-flex flex-column justify-content-between">
            <h2 class="pb-3">VISION</h2>
            <p>Our values emanate from our people providing proactive construction business solutions to our clients through successful client partnerships. They are based on integrity, honesty, accountability, reliability and excellence. We always take up new challenges and scale further heights of excellence guided.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 d-flex">
          <div class="vision-box flex-fill d-flex flex-column justify-content-between">
            <h2 class="pb-3">COMMITMENT</h2>
            <p>We at ABL Infrastructure believe that mutual trust and ethical practices can only ensure success. We commit our manpower, technological capabilities and our core values to satisfy our esteemed clients by providing comprehensive; time bound and integrated solutions in the construction field.</p>
          </div>
        </div>
      </div>
    </div>
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
            <img src="Images/wixuserimg4.jpg" class="rounded-circle mx-auto mb-3" alt="Team Member 1">
            <h5 class="mb-1">Amit Sharma</h5>
            <p class="text-muted mb-0">Founder & CEO</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
          <div class="card border-0 shadow text-center h-100 p-3">
            <img src="Images/wixuserimg3.jpg" class="rounded-circle mx-auto mb-3" alt="Team Member 2">
            <h5 class="mb-1">Neha Verma</h5>
            <p class="text-muted mb-0">Operations Head</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
          <div class="card border-0 shadow text-center h-100 p-3">
            <img src="Images/wixuserimg1.jpg" class="rounded-circle mx-auto mb-3" alt="Team Member 3">
            <h5 class="mb-1">Rahul Patil</h5>
            <p class="text-muted mb-0">Project Manager</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
          <div class="card border-0 shadow text-center h-100 p-3">
            <img src="Images/wixuserimg2.jpg" class="rounded-circle mx-auto mb-3" alt="Team Member 4">
            <h5 class="mb-1">Sonia Mehta</h5>
            <p class="text-muted mb-0">Design Lead</p>
          </div>
        </div>

      </div>
    </div>
  </section>




  <!-- Why Choose Us -->
  <section class="why-choose-section py-5">
    <div class="container text-center">
      <h2 class="mb-5">Why Choose Us</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="icon-box">
            <i class="fas fa-hard-hat"></i>
            <h5 class="mt-3">Expert Engineers</h5>
            <p>Qualified and experienced engineers delivering excellence on every site.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-box">
            <i class="fas fa-clock"></i>
            <h5 class="mt-3">On-Time Delivery</h5>
            <p>We pride ourselves in completing projects within deadlines without compromise.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="icon-box">
            <i class="fas fa-building"></i>
            <h5 class="mt-3">Quality Construction</h5>
            <p>Committed to top-grade materials and best practices in every construction project.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials-section py-5">
    <div class="container text-center">
      <h2 class="mb-5">What Our Clients Say</h2>
      <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial-card mx-auto" style="max-width: 700px;">
              <p>"Their team delivered our dream project ahead of schedule. Truly reliable and professional!"</p>
              <h6 class="mt-3 mb-0 font-weight-bold">Rahul Deshmukh</h6>
              <small>CEO, Zenith Developers</small>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card mx-auto" style="max-width: 700px;">
              <p>"Excellent communication, quality work, and seamless execution. Highly recommend!"</p>
              <h6 class="mt-3 mb-0 font-weight-bold">Sneha Kulkarni</h6>
              <small>Architect, UrbanScape</small>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="container">
      <h2>Ready to Start Your Project?</h2>
      <a href="contact.php" class="btn btn-primary">Get in Touch</a>
    </div>
  </section>



  <?php require "includes/footer.php"; ?>
</body>

</html>
