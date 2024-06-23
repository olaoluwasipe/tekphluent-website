@include('partials.header')

    <section class="hero">

        <div class="content">

            <div class="header">Unlock your potential with Tekphluent where learning knows no bounds</div>

            <p>
                Embark on a transformable journey into the world of IT where innovation meets education. Our
                Cutting edge training programs are crafted to empower individuals with the skills and knowledge
                needed to thrive in the dynamic field of information technology
            </p>

            <div class="button-group">
                <div class="cta-button alt">
                    Learn More
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4C11.4477 4 11 3.55228 11 3C11 2.44772 11.4477 2 12 2L20 2C21.1046 2 22 2.89543 22 4V12C22 12.5523 21.5523 13 21 13C20.4477 13 20 12.5523 20 12V5.39343L3.72798 21.6655C3.33746 22.056 2.70429 22.056 2.31377 21.6655C1.92324 21.2749 1.92324 20.6418 2.31377 20.2512L18.565 4L12 4Z"/>
                        </svg>
                    </span>
                </div>
                <a href="interest-form" class="cta-button spec">Enrol Now</a>
            </div>

        </div>

        <div class="owl-carousel owl-theme hero-image owlone" id="owlone">
            <div class="item image"><img src="img/slide1.png" alt=""></div>
            <div class="item image"><img src="img/slide2.png" alt=""></div>
            <div class="item image"><img src="img/slide3.png" alt=""></div>
            <div class="item image"><img src="img/slide4.png" alt=""></div>
        </div>

    </section>

    <section class="sponsors">
        <div class="start">Our Partners:</div>

        <div class="listing">
            <div class="image"><img src="img/pmi_logo 1.png" alt=""></div>
            <div class="image"><img src="img/iso-27001-lead-implementer.png" alt=""></div>
            <div class="image"><img src="img/ciis.png" alt=""></div>
            <div class="image"><img src="img/devscops.webp" alt=""></div>
            <div class="image"><img src="img/images.png" alt=""></div>
        </div>
    </section>

    @if (count($reviews) > 0)
    <section class="testimonials">
        <div class="header">What Our Students Say</div>
        <div class="owl-carousel tests owltwo" id="owltwo">
        @foreach ($reviews as $review)
                <div class="item testi">
                    <div class="icon"><i class="fas fa-quote-left-alt"></i></div>
                    <p>{{$review->message}}</p>
                    <div class="user">
                        <div class="deets">
                            <div class="name">{{$review->fullName}}</div>
                            <div class="job">{{$review->course->title}}</div>
                        </div>
                    </div>
                    <div class="linker">Read more<i class="icon fas fa-arrow-right"></i></div>
                </div>
        @endforeach
        </div>
    </section>
    @else
        <section class="testimonials">
            <div class="header">What Our Students Say</div>
            <p>No reviews available yet.</p>
        </section>
    @endif


    <footer>

        <div class="start">
            <div class="logo"><img src="img/favicon.png" alt="logo"></div>

            <div class="emphasis">A reputable and certified academy you can kickstart your tech career</div>

            <div class="socials">
                <a href="#" class="soci"><i class="icon fab fa-facebook-f"></i></a>
                <a href="#" class="soci"><i class="icon fab fa-twitter"></i></a>
                <a href="#" class="soci"><i class="icon fab fa-instagram"></i></a>
                <a href="#" class="soci"><i class="icon fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="end">

            <div class="group">
                <div class="head">Top Courses</div>
                <a href="prod-design.php">Product Design</a>
                <a href="proj-mgt.php">Project Management and Business Analysis</a>
                <a href="data-analysis.php">Data Analytics and Business Intelligence</a>
                <a href="cybersecurity.php">Cybersecurity</a>
            </div>

            <div class="group">
                <div class="head">Policies</div>
                <a href="#">Payment Policy</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">FAQs</a>
            </div>

            <div class="group">
                <div class="head">Support</div>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
            </div>

            <div class="group">
                <div class="head">Contact Us</div>

                <div class="linking">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <a href=" mailto: info.tekpluent.co.uk">info.tekpluent.co.uk</a>
                </div>

                <div class="linking">
                    <div class="icon"><i class="fab fa-whatsapp"></i></div>
                    <a href="#">Chat on Whatsapp</a>
                </div>

                <div class="linking">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <a href="tel:+07900400572">07900400572</a>
                </div>
            </div>

        </div>

    </footer>



    <!-- JAVASCRIPT -->
    <!-- DEFAULT SCRIPT --><script src="main.js"></script>
    <!-- JQUERY --><script src="plugins/jquery.min.js"></script>
    <!-- JQUERY --><script src="plugins/fontawesome.js"></script>
    <!-- OWL CAROUSEL --><script src="plugins/owl.carousel.min.js"></script>

<script>
    /*scrolling banner*/
    (function ($) {
    "use strict";

    $(document).ready(function () {
        $(".owlone").owlCarousel({
            margin:0,
            loop:true,
            dots:null,
            items:1,
            autoplay:true,
            autoplayTimeout: 5000,
            autoplayHoverPause:true
        });
    });

    $(document).ready(function () {
        $(".owltwo").owlCarousel({
            margin:30,
            loop:true,
            nav:true,
            items:3.3,
        });
    });


    })(jQuery);
</script>

</body>
</html>
