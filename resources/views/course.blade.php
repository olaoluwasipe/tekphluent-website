@include('partials.header')
   

    <style>
                
        @php
            $i = 1;
        @endphp
        @foreach ($course->course_outline as $outline)
        .outline .components .comp:nth-child({{$i}})::after {
            background-color: {{$outline['color']}}
        }
        .outline .components .comp:nth-child({{$i}}) .top {
            background-color: {{$outline['color']}}
        }
        .outline .components .comp:nth-child({{$i}}) .base {
            border: 1px solid {{$outline['color']}}
        }
            @php
                $i++
            @endphp

        @endforeach
{}
    </style>
    <div class="pagestart">

        <div class="content">

            <div class="header">{{$course->title}}</div>

            <p>{{$course->description}}</p>

            <a href="interest.php" class="cta-button">Start Learning</a>
            
        </div>

        <div class="image"><img src="/img/{{$course->image}}" alt=""></div>

    </div>

    <div class="outline">

        <div class="top">
            <div class="vert-line"></div>
            <div class="heading">Course Outline</div>
        </div>

        <div class="components">

            @foreach ($course->course_outline as $outline)
            {{-- {{print_r($outline)}} --}}
            <div class="comp">
                <div class="top">
                    <div class="head">{{$outline['outline_title']}}</div>
                </div>

                <div class="base">
                    {!!$outline['description']!!}
                </div>
            </div>
            @endforeach

        </div>

    </div>

    <footer>

        <div class="start">
            <div class="logo"><img src="/img/favicon.png" alt="logo"></div>

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

</body>
</html>