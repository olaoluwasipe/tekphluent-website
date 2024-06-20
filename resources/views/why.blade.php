@include('partials.header')

    <div class="pagetop">

        <div class="header">Why Choose Us</div>

        <p>
            At TekPhluent, we are not just a training institute; we are architects of transformative 
            learning experiences. Our mission is to empower individuals by imparting comprehensive tech 
            skills, providing a dynamic environment where curiosity meets expertise.
        </p>

    </div>

    <div class="tabs">

        <div class="tab">
            <div class="icon"><img src="img/shield.png" alt=""></div>

            <div class="writeup">
                <div class="head">Excellence</div>
                <p>
                    We create unparalleled experiences that exceed your expectations with
                    a passion for perfection and attention to detail.
                </p>
            </div>
        </div>

        <div class="tab">
            <div class="icon"><img src="img/briefcase.png" alt=""></div>

            <div class="writeup">
                <div class="head">Professionalism</div>
                <p>
                    We deliver top-notch service, and handle requests with expertise, 
                    ensuring your journey is smooth and hassle-free.
                </p>
            </div>
        </div>

        <div class="tab">
            <div class="icon"><img src="img/bulb.png" alt=""></div>

            <div class="writeup">
                <div class="head">Expertise</div>
                <p>
                    Our intimate knowledge of the industry allows us to craft 
                    a service uniquely tailored to your business needs.
                </p>
            </div>
        </div>

    </div>

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
                <a href="./prod-design.php">Product Design</a>
                <a href="./proj-mgt.php">Project Management and Business Analysis</a>
                <a href="./data-analysis.php">Data Analytics and Business Intelligence</a>
                <a href="./cybersecurity.php">Cybersecurity</a>
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
                <a href="./about.php">About Us</a>
                <a href="./contact.php">Contact Us</a>
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
                    <a href="07900400572">07900400572</a>
                </div>
            </div>

        </div>

    </footer>



    <!-- JAVASCRIPT -->
    <!-- DEFAULT SCRIPT --><script src="main.js"></script>
    <!-- JQUERY --><script src="/plugins/jquery.min.js"></script>
    <!-- JQUERY --><script src="/plugins/fontawesome.js"></script>
    <!-- OWL CAROUSEL --><script src="/plugins/owl.carousel.min.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            margin:30,
            loop:true,
            nav:true,
            items:3.3,
        })
    </script>

</body>
</html>