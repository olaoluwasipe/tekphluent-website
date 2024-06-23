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

    @include('partials.footer')

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
