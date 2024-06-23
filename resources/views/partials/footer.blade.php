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
            @php
                $courses = App\Models\Course::limit(4)->get();
            @endphp
            @foreach ($courses as $course)
                <a href="/course/{{$course->slug}}">{{$course->title}}</a>
            @endforeach
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
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
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
<!-- JQUERY --><script src="plugins/jquery.min.js"></script>
{{-- <!-- JQUERY --><script src="plugins/fontawesome.js"></script> --}}
<!-- OWL CAROUSEL --><script src="plugins/owl.carousel.min.js"></script>


<script>
    // Get the current URL path
    var url = new URL(window.location.href);
    var currentPath = url.pathname;

    // Loop through all navlink anchors
    $('.navlinks a').each(function() {
        var href = $(this).attr('href');
        href = href.split('?')[0]
        $(this).removeClass('active')
        // Check if the href matches the current path
        if (href === currentPath || href === '/' && currentPath === '') {
            $(this).addClass('active');
        }
    });
</script>
