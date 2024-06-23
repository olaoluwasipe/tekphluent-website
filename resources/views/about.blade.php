@include('partials.header')

    <div class="pagetop">

        <div class="header">We are more than just a prestigious training Institute</div>

        <p>
            At TekPhluent, we are not just a training institute; we are architects of transformative
            learning experiences. Our mission is to empower individuals by imparting comprehensive tech
            skills, providing a dynamic environment where curiosity meets expertise.
        </p>

        <a href="{{url('/interest-form')}}" class="cta-button alt2">
            Learn More
            <span class="icon">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4C11.4477 4 11 3.55228 11 3C11 2.44772 11.4477 2 12 2L20 2C21.1046 2 22 2.89543 22 4V12C22 12.5523 21.5523 13 21 13C20.4477 13 20 12.5523 20 12V5.39343L3.72798 21.6655C3.33746 22.056 2.70429 22.056 2.31377 21.6655C1.92324 21.2749 1.92324 20.6418 2.31377 20.2512L18.565 4L12 4Z"/>
                </svg>
            </span>
        </a>

    </div>

    <div class="mission">

        <div class="start">
            <div class="header">Our Mission</div>

            <div class="base">
                <div class="vert-line"></div>

                <p>
                    Our mission is to equip students with the technical skills, critical thinking abilities, and soft
                    skills needed to succeed in a different of technological roles, maintaining  a collaborative and
                    environment that encourages  professional growth.
                </p>
            </div>
        </div>

        <div class="gallery">
            <div class="image one"><img src="img/miss1.png" alt=""></div>
            <div class="image two"><img src="img/miss2.png" alt=""></div>
        </div>

    </div>


    @include('partials.footer')
</body>
</html>
