<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto&display=swap"
        rel="stylesheet">

    <!-- Owl Caorusel Plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
</head>

<body>

    <!-- Header -->
    <header>
        <nav class="navbar flex flex-ai-c">
          <h1 class="flex flex-ai-c flex-jc-c">findCare</h1>
          <ul class="navlinks flex flex-ai-c">
            <li><a href="./">Home</a></li>
            <li><a href="./covid-19">Covid-19 Updates</a></li>
            <li class="appointment"><a href="./opd-appointment">Book Appointment</a></li>
          </ul>
          <ul class="hamburger flex">
            <li class="lines"></li>
            <li class="lines"></li>
            <li class="lines"></li>
          </ul>
        </nav>
    </header>

    <!--Main Container-->
    <div class="main-container">

        <!--cta Secttion-->
        <section class="cta flex">
            <div class="cta-items flex flex-jc-c flex-ai-c">
                <div class="cta-text">
                    <h2>Book Your Appointment Today</h2>
                </div>
                <div class="cta-buttons">
                    <button class="btn"><a href="./opd-appointment">Book for OPD</a></button>
                    <button class="btn"><a href="#">Book for COVID</a></button>
                </div>
            </div>
            <div class="cta-img cta-items">
                <img src="./assets/images/search-bg.png">
            </div>
        </section>

        <!-- Clinic information Section -->
        <section class="clinic flex flex-ai-c flex-jc-c">
            <div class="clinic-text clinic-child">
                <h2>Clinic Specialities</h2>
                <p>Have a look at our Specialities.</p>
            </div>

            <!--carousel-->
            <div class="clinic-carousel clinic-child flex">
                <div class="owl-carousel">
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="./assets/images/specialities/specialities-01.png" alt="Speciality">
                        </div>
                        <p>Urology</p>
                    </div>
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="./assets/images/specialities/specialities-02.png" alt="Speciality">
                        </div>
                        <p>Neurology</p>
                    </div>
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="./assets/images/specialities/specialities-03.png" alt="Speciality">
                        </div>
                        <p>Orthopedic</p>
                    </div>
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="./assets/images/specialities/specialities-04.png" alt="Speciality">
                        </div>
                        <p>Cardiology</p>
                    </div>
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="./assets/images/specialities/specialities-05.png" alt="Speciality">
                        </div>
                        <p>Dentist</p>
                    </div>
                </div>
            </div>

        </section>

        <!-- Facilities Section -->
        <section class="facilities flex">
            <div class="facilities-img flex flex-jc-c flex-ai-c">
                <img src="./assets/images/undraw_medicine_b1ol.png" alt="doctors">
            </div>
            <div class="facilities-content">
                <div class="facilities-text">
                    <h2>Available facilities in our clinic</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="facilities-carousel flex flex-ai-c">
                    <div class="owl-carousel">
                        <div class="facilities-carousel-item">
                            <div class="img">
                                <img src="./assets/images/features/feature-01.jpg" alt="facilities">
                            </div>
                            <p>Urology</p>
                        </div>
                        <div class="facilities-carousel-item">
                            <div class="img">
                                <img src="./assets/images/features/feature-02.jpg" alt="facilities">
                            </div>
                            <p>Urology</p>
                        </div>
                        <div class="facilities-carousel-item">
                            <div class="img">
                                <img src="./assets/images/features/feature-03.jpg" alt="facilities">
                            </div>
                            <p>Urology</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="./assets/js/app.js"></script>

    <!-- Owl Carousel Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <script>
        $(".clinic-carousel .owl-carousel").owlCarousel({
            items: 4,
            loop: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 1500,
        });
        
        $(".facilities-carousel .owl-carousel").owlCarousel({
            items: 4,
            loop: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 1500,
        });
    </script>
</body>

</html>