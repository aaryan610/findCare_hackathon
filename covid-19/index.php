<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>findCare | Register </title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto&display=swap"
        rel="stylesheet">

    <!-- Owl Caorusel Plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
</head>

<body>
    <!--Main Container-->
    <div class="main-container">

        <!-- Header -->
        <header>
            <nav class="navbar flex flex-ai-c">
                <h1 class="flex flex-ai-c flex-jc-c">findCare</h1>
                <ul class="navlinks flex flex-ai-c">
                    <li><a href="../">Home</a></li>
                    <li><a href="./">Covid-19</a></li>
                    <li><a href="../opd-appointment">OPD Appointment</a></li>
                    <li class="appointment"><a href="../opd-appointment">Book Appointment</a></li>
                </ul>
                <ul class="hamburger">
                    <li class="lines"></li>
                    <li class="lines"></li>
                    <li class="lines"></li>
                </ul>
            </nav>
        </header>

        <h2 class="blog-heading">Blogs on Covid-19</h2>
        <section class="corona-blog">
            <a href="https://www.resmed.com/in/en/consumer/blogs/coronavirus-infection.html" target="_blank">
                <div class="blog-post">
                    <div class="blog-head">
                        <div class="blog-image">
                            <img src="../assets/images/blog/blog-01.jpg" alt="">
                        </div>
                    </div>
                    <div class="blog-body">
                        <p class="blog-title">
                            Symptoms and How to Deal with It
                        </p>
                        <p class="blog-content">
                            The current outbreak of the new 2019 Novel Coronavirus (2019 n-CoV) has taken hold of several major countries across the world. China, its origin country, South Korea, Italy and Iran are some of the heavily impacted regions.
                        </p>
                    </div>
                </div>
            </a>
            <a href="https://www.geospatialworld.net/blogs/covid-19-push-to-aerial-surveying-and-mapping/">
                <div class="blog-post">
                    <div class="blog-head">
                        <div class="blog-image">
                            <img src="../assets/images/blog/blog-02.jpg" alt="">
                        </div>
                    </div>
                    <div class="blog-body">
                        <p class="blog-title">
                            COVID-19 push to aerial surveying and mapping
                        </p>
                        <p class="blog-content">
                            Human’s need of making large-scale, accurate measurements of the Earth’s surface led to the evolution of the concept of surveying. Surveying helps in determining the relative horizontal and vertical positions required for the process of mapping.
                        </p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="blog-post">
                    <div class="blog-head">
                        <div class="blog-image">
                            <img src="../assets/images/corona-cta.jpg" alt="">
                        </div>
                    </div>
                    <div class="blog-body">
                        <p class="blog-title">
                            COVID-19 push to aerial surveying and mapping
                        </p>
                        <p class="blog-content">
                            Blog COntent
                        </p>
                    </div>
                </div>
            </a>
        </section>
        
        <!-- Clinic information Section -->
        <section class="clinic flex flex-ai-c flex-jc-c" id="specialities">
            <div class="clinic-text clinic-child">
                <h2>Protective Measures</h2>
                <p>Follow these steps as precautions against the Corona Virus</p>
            </div>

            <!--carousel-->
            <div class="clinic-carousel clinic-child flex">
                <div class="owl-carousel">
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="../assets/images/corona/hand-sanitizer.png" alt="Sanitize your Hands">
                        </div>
                        <p>Sanitize your Hands</p>
                    </div>
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="../assets/images/corona/wear-mask.png" alt="Wear Mask">
                        </div>
                        <p>Wear Mask</p>
                    </div>
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="../assets/images/corona/social-distancing.png" alt="Maintain Social Distancing">
                        </div>
                        <p style="text-align: center;">Maintain<br/>Social Distancing</p>
                    </div>
                    <div class="speicality-item flex flex-jc-c flex-ai-c">
                        <div class="speicality-img">
                            <img src="../assets/images/corona/stay-home.png" alt="Stay Home">
                        </div>
                        <p>Stay Home. Stay Safe</p>
                    </div>
                </div>
            </div>

        </section>

        <!--footer-->
        <footer class="footer flex flex-jc-c flex-ai-c">
            <div class="footer-section section-one">
                <h3>findCare</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit, labore id ipsa minus recusandae.</p>
                <div class="lang-select">
                    <h4>Language</h4>
                    <span>English</span>
                    <span>Hindi</span>
                </div>
            </div>
            <div class="footer-section section-two">
                <h3>For Patients</h3>
                <ul>
                    <li><a href="#">Search for doctors</a></li>
                    <li><a href="#">Bookings</a></li>
                    <li><a href="#">Covid-19</a></li>
                    <li><a href="#">Patient Dashboard</a></li>
                </ul>
            </div>
            <div class="footer-section section-three">
                <h3>Contact Us</h3>
                <ul>
                    <li>Raipur, Chhattisgrah</li>
                    <li>+91-7000817013</li>
                    <li>findcare@gmail.com</li>
                </ul>
            </div>
        </footer>

    </div>

    <script src="./assets/js/app.js"></script>

    <!-- Owl Carousel Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <script>
        $(".clinic-carousel .owl-carousel").owlCarousel({
            loop: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 1500,
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 4,
                }
            }
        });
    </script>
</body>

</html>
