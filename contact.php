<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<!-- ===========================
     CONTACT PAGE BANNER
=========================== -->

<section class="page-banner">

    <div class="container">

        <h1>Contact Us</h1>

        <p>
            <a href="index.php">Home</a> /
            <span>Contact</span>
        </p>

    </div>

</section>

<!-- ===========================
     CONTACT INFORMATION
=========================== -->

<section class="contact-info py-5">

    <div class="container">

        <div class="row">

            <!-- Address -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="contact-box">

                    <i class="fas fa-location-dot"></i>

                    <h4>Address</h4>

                    <p>
                        MG Road,<br>
                        Porbandar,<br>
                        Gujarat - 360575
                    </p>

                </div>

            </div>

            <!-- Phone -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="contact-box">

                    <i class="fas fa-phone"></i>

                    <h4>Phone</h4>

                    <p>
                        +91 9876543210
                    </p>

                </div>

            </div>

            <!-- Email -->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="contact-box">

                    <i class="fas fa-envelope"></i>

                    <h4>Email</h4>

                    <p>
                        restaurant@gmail.com
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ===========================
     CONTACT FORM
=========================== -->

<section class="contact-form-section py-5">

    <div class="container">

        <div class="row">

            <!-- Contact Form -->

            <div class="col-lg-7 mb-4">

                <h2 class="fw-bold mb-4">
                    Send Us a Message
                </h2>

                <form action="#" method="POST">

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <input type="text"
                                   class="form-control"
                                   placeholder="Your Name"
                                   required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <input type="email"
                                   class="form-control"
                                   placeholder="Your Email"
                                   required>

                        </div>

                    </div>

                    <div class="mb-3">

                        <input type="text"
                               class="form-control"
                               placeholder="Subject"
                               required>

                    </div>

                    <div class="mb-3">

                        <textarea class="form-control"
                                  rows="6"
                                  placeholder="Your Message"
                                  required></textarea>

                    </div>

                    <button class="btn btn-warning btn-lg">
                        Send Message
                    </button>

                </form>

            </div>

            <!-- Restaurant Information -->

            <div class="col-lg-5">

                <div class="contact-details">

                    <h3 class="mb-4">
                        Restaurant Information
                    </h3>

                    <p>
                        <strong>Address:</strong><br>
                        MG Road, Porbandar, Gujarat - 360575
                    </p>

                    <p>
                        <strong>Phone:</strong><br>
                        +91 9876543210
                    </p>

                    <p>
                        <strong>Email:</strong><br>
                        restaurant@gmail.com
                    </p>

                    <p>
                        <strong>Opening Hours:</strong><br>
                        Monday - Sunday<br>
                        10:00 AM - 11:00 PM
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>




<!-- ===========================
     GOOGLE MAP
=========================== -->

<section class="google-map py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h5 class="text-warning fw-bold">
                FIND US
            </h5>

            <h2 class="fw-bold">
                Visit Our Restaurant
            </h2>

        </div>

        <div class="map-container">

            <iframe
                src="https://www.google.com/maps?q=Porbandar,Gujarat&output=embed"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>

    </div>

</section>


<!-- ===========================
     FOLLOW US
=========================== -->

<section class="follow-us py-5">

    <div class="container">

        <div class="text-center">

            <h5 class="text-warning fw-bold">
                FOLLOW US
            </h5>

            <h2 class="fw-bold mb-4">
                Stay Connected
            </h2>

            <div class="social-icons">

                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#">
                    <i class="fab fa-x-twitter"></i>
                </a>

                <a href="#">
                    <i class="fab fa-whatsapp"></i>
                </a>

            </div>

        </div>

    </div>

</section>

<?php
include("includes/footer.php");
?>